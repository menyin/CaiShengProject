define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	// ,juicer = require("juicer")
	// ,base = require("action.person.resume.base")

	// 包含中文字符和中文标点符号 。？！，、；：“”‘’（）《》〈〉【】『』「」〔〕…—～￥
	var regCharCN = "^[\\s\\w\\u4e00-\\u9fa5\\u3002\\uff1f\\uff01\\uff0c\\u3001\\uff1b\\uff1a\\u201c\\u201d\\u2018\\u2019\\uff08\\uff09\\u300a\\u300b\\u3008\\u3009\\u3010\\u3011\\u300e\\u300f\\u300c\\u300d\\u3014\\u3015\\u2026\\u2014\\uff5e\\uffe5]+$";

	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			resume.selectLanguage(p.lang)

			p.lang = p.lang=="1"?"en":"cn"
			//取数据
		var key = resume.getDataKey()
		var lang = p.lang
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!") }
			p.data = util.toJSON(p.data)
			p.template = $("#template").val()
			//初始化数据
			person.showOption()
		var jsonData = p.data.project
			myCache.goBack = $("#goBack")
			myCache.list = $("#eduList")
			myCache.listBox = $("#listBox")
			myCache.info = $("#educationInfo")
			myCache.addBtn = $("#educationAdd")
			myCache.saveBtn = $("#eduBtn")
			myCache.delBtn = $("#educationManage")
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")
			myCache.recordData = {}
			myCache.dataNotChange = true;

			var id = sessionStorage["subListId"]
			out.edit(id,lang);

			var typeData = {
				cn:[{id:'0',value:"具体时间"},{id:'1',value:"至今"}],
				en:[{id:'0',value:"Date"},{id:'1',value:"Present"}]
			};

			resume.initIosSelect(lang,{selector:'#startDate',data:[],title:person.dic.title[lang]['eduStartDate'],
			callback:function(selectOneObj,selectTwoObj,showData){
				myCache.recordData['beginDate'] = showData;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#endDate',data:typeData[lang],title:person.dic.title[lang]['eduEndDate'],
			callback:function(selectOneObj,selectTwoObj,selectThreeObj,showData){
				if(selectOneObj.id == '0'){
					myCache.recordData['endDate'] = showData;
				}else{
					myCache.recordData['endDate'] = 'Present';
				}
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			$('#projectDuty,#projectExperience,#projectName,#projectIntr').change(function(){
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			})

			resume.countWords({
				selector:'#projectExperience',
				maxType :0,
				max:2000,
				showSpace:'.countWords'
			})

			//绑定动作
			out.bindSave(p)

				//初始化选择框 placeholder
			$('.select_box.tip').each(function(){
				var $that = $(this);
				if($that.text() === ""){
					$that.text($that.attr('placeholder'));
					$that.css('color','#888888');
				}
			})
		}
		,bindAdd : function(){
			myCache.addBtn.click(function(){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack(true)
				myCache.list.find(".icon_delete").hide()
				out.empty().show()
				myCache.saveBtn.attr("mod","-1");	//-1标示新增
			})
		}
		,bindEdit : function(){
			//myCache.list.find("li").click(out.edit)
		}
		,bindDel : function(){
			var del = myCache.list.find(".icon_delete")
				del.click(out.del)
			myCache.delBtn.click(function(){
				if(/管理/.test($(this).html()))
					$(this).html("取消")
				else
					$(this).html("管理")
				myCache.addBtn.parent().toggle()
				myCache.info.hide()
				myCache.listBox.show()
				myCache.delBtn.show()
				out.goBack(true)
				del.toggle()
			})
		}
		,bindSave : function(par){
			myCache.saveBtn.click(function(){
				out.save(par)
			})
		}
		//以下有待优化
		,empty : function(){
			// myCache.info.find("input").each(function(){  this.value="" });
			myCache.info.find("select").each(function() { $(this).find("option").eq(0).attr("selected","true") });
			return myCache.info
		}
		,goBack : function(t,par){
			new resume.goBack(t,myCache,par)
		}
		,edit : function(id,lang){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack(false,{title:'项目经历',ok:function(box){
					box.close();
					myCache.saveBtn.trigger('click')
				}})
				var MODID = id;
				var MODDATA = {}
				var $delete = $('.delete')
				if(id == "null"){
					MODDATA = {projectName:"",projectDuty:"",id:"",projectIntr:"",projectExperience:"",projectStart:"",projectEnd:""}
					out.empty().show().find("button").attr("mod",-1);	//-1标示新增
					$delete.hide();
					$('.btn1_submit').css('width','100%');
				} else{
					MODDATA = myCache.par.data.project.filter(function(v){ return v.id == MODID})[0]
					out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
					$delete.click(out.del);
				}
				var o = [],v = [],attrName = [],attrVals = []
					// o[0]="projectName";v[0]=MODDATA.projectName
					// o[1]="projectDuty";v[1]=MODDATA.projectDuty
					// o[2]="projectIntr";v[2]=MODDATA.projectIntr
					// o[3]="projectExperience";v[3]=MODDATA.projectExperience
					// util.setMultiVal(o,v)
					var present = false;
					if(MODDATA.projectStart==null) MODDATA.projectStart = MODDATA.projectStartTime;
					if(MODDATA.projectEnd==null) MODDATA.projectEnd = MODDATA.projectEndTime;
					if(MODDATA.projectStart!="") {
						var begin = MODDATA.projectStart.split('-');
						o[5]="startDate";v[5]=MODDATA.projectStart
						o[6]="startDate";v[6]=MODDATA.projectStart
						attrName[5]="year",attrVals[5]=begin[0]+"";
						attrName[6]="month",attrVals[6]=begin[1]>>0+"";	
						present = true;
					}else{
						o[5]="startDate";v[5]=""
						o[6]="startDate";v[6]=""
						attrName[5]="year",attrVals[5]="2016";
						attrName[6]="month",attrVals[6]="9";
					}

					if(MODDATA.projectEnd.indexOf('-') != -1){
						var end = MODDATA.projectEnd.split('-')
						o[7]="endDate";v[7]= MODDATA.projectEnd;
						o[8]="endDate";v[8]= MODDATA.projectEnd;
						o[9]="endDate";v[9]= MODDATA.projectEnd;
						attrName[7]="year", attrVals[7]=end[0]+"";
						attrName[8]="month",attrVals[8]=end[1]>>0+"";
						attrName[9]="type",attrVals[9]="0";
					}else{
						o[7]="endDate";v[7]= "";
						o[8]="endDate";v[8]= "";
						o[9]="endDate";v[9]= present == false ? "" : (lang == 'cn' ?"至今":"Present");
						MODDATA.projectEnd = present == false ? "":"Present";
						attrName[7]="year",attrVals[7]="2016";
						attrName[8]="month",attrVals[8]="6";
						attrName[9]="type",attrVals[9]=  present == false ? "0" : "1";
					}
					myCache.recordData['beginDate']=MODDATA.projectStart;
					myCache.recordData['endDate']=MODDATA.projectEnd;
					util.setMutiText(o,v,attrName,attrVals);
		}
		,del : function(id,e){
			var MODID = $(this).attr('mod')
			out.goBack(true);
				resume.postDel({
					moudle : "project"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'project_del',
						'project_id': MODID,
					}
					,title:'项目经历'
					,error:function(){
						alert("删除项目经历出错")
					}
					,success:function(){
						$('#goBack').trigger('click')
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}
		,save : function(p){
			var foundErr = false
			var projectName = $("#projectName").val()
			foundErr = !util.check(projectName,{
				notEmpty : true
				,max:200
				//,regEx: regCharCN
				,error : function(a,b,c){
					message(p.lang,{cn:"项目名称不能为空!",en:"School:Not empty,can't be more than 200 characters!"})
				}
			})
			if(foundErr) return;

			var beginDate = myCache.recordData['beginDate'];
			foundErr = !util.check(beginDate,{
				notEmpty : true
				,error : function(a,b,c){
					message(p.lang,{cn:"请选择开始时间！",en:"Please choose the start date！"})
				}
			})
			if(foundErr) return;

			var endDate = myCache.recordData['endDate'];
			endDate = endDate ? endDate : "Present";
			foundErr = !util.check(endDate,{
				notEmpty : true
				,error : function(){
					message(p.lang,{cn:"请选择结束时间！",en:"Please choose the correct deadline！"})
				}
			})
			if(foundErr) return;//Present

			var now = new Date();
			var month = now.getMonth() + 1
			var nowVal = now.getFullYear() + '-' + (month > 9 ? month : '0' + month);
			if(beginDate > nowVal){
				message(p.lang,{cn:"开始时间不能大于当前日期",en:"Start Date should be less than now!"})
				return
			}
			var bir = p.data.base.birthday;
			if(bir.length > 7) bir = bir.slice(0,7);
			if(bir.length == 7 && /\d{4}-\d{2}/.test(bir)){
				if(bir > beginDate){
					message(p.lang,{cn:"开始时间不能小于出生日期",en:"Start Date should after the date of Birth!"})
					return
				}
			}
			if(endDate!="Present"){
				if(new Date(beginDate)>new Date(endDate)){
					message(p.lang,{cn:"结束时间不应小于开始时间",en:"Start Date should be less than the Ending Date!"})
					return
				}
			}

			var projectDuty = $("#projectDuty").val()
				foundErr = !util.check(projectDuty,{
					notEmpty : true
					,max : 50
					//,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"担任职务不能为空",en:"projectDuty null"})
					}
				})
				if(foundErr) return;

			var projectExperience = $("#projectExperience").val()
				foundErr = !util.check(projectExperience,{
					notEmpty : true
					,max : 50
					//,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"项目经历不能为空",en:"projectExperience null"})
					}
				})
				if(foundErr) return;

			var projectIntr = $("#projectIntr").val().trim()
				foundErr = !util.check(projectIntr,{
					notEmpty : true
					,max : 2000
					,maxType : 0
					,error : function(){
						message(p.lang,{cn:"项目介绍不能为空"})
					}
				})
				if(foundErr) return;
			if(foundErr) return;

			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"projectName": projectName
				,"projectDuty": projectDuty
				,"projectIntr": projectIntr
				,"projectExperience": projectExperience
				,"projectStartTime": beginDate
				,"projectEndTime": endDate == "Present" ? "" : endDate
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var eduLen = p.data.project.length
			p.data.project = eduLen == 0 ? PostData : p.data.project
			sessionStorage[resume.getDataKey()] = util.toString(p.data);
			var par = {
				langType : p.data.langType
				// ,resumeId : p.data.resumeId
				// ,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					'act': 'project_save',
					'project_id': saveID=='-1'?'':saveID,
					'txtProjectName': projectName,
					'projectStartTime': beginDate,
					'projectEndTime': endDate == "Present" ? "" : endDate,
					'txtDuty': projectDuty,
					'taProjectIntr':projectIntr,
					'taProjectExperience':projectExperience,
				}
				,error : function(){
					sessionStorage[resume.getDataKey()] = sessionDataCache;
					alert('请求出错!');
				}
				,success : function(data){
					var DATA = data
					if(DATA.success){
						myCache.listBox.show()
						myCache.delBtn.show()
						out.goBack(true)
						if(!PostData[0].id){
							//PostData[0].id = data.project[0].id
							PostData[0].id = DATA.project_id;
							if(eduLen > 0){
								p.data.project.push(PostData[0])
							}else{
								p.data.project = PostData
							}
						}else{
							for(var i=0; i<p.data.project.length;i++){
								if(p.data.project[i].id == PostData[0].id){
									p.data.project[i] = PostData[0]
									break;
								}
							}
						}

						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						alert('项目经历已保存!')
						$('.btn_back').trigger('click');
					}else alert('错误:'+resumeLang.get(DATA.msg))
				}
			}
			resume.postUpdate(par)
		}
	}
	module.exports = out;
});