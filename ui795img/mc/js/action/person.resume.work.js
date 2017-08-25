define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	,uiSelector = require("ui.selector")
	,mEditor = require("ui.mEditor")
	,base = require("action.person.resume.base")

	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			p.lang = p.lang=="1"?"en":"cn"
			resume.selectLanguage(p.lang)
			//取数据
		var key = resume.getDataKey()
		var lang = p.lang
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return }
			p.data = util.toJSON(p.data)
			p.template = $("#workTemplate").val()
			//初始化数据
			person.showOption()
		var jsonData = p.data.work
			myCache.goBack = $("#goBack")
			myCache.list = $("#workList")
			myCache.info = $("#workInfo")
			myCache.listBox = $("#listBox")
			myCache.addBtn = $("#workAdd")
			myCache.saveBtn = $("#workBtn")
			myCache.delBtn = $("#workManage")
			//myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")
			myCache.recordData = {};
			myCache.dataNotChange = true;

			var id = sessionStorage["subListId"]
			out.edit(lang,id)

			var comSizeData = [];
			var comSize = person.dic.comSizes[lang];
			for (item in comSize){
				var o={};
				if(comSize.hasOwnProperty(item)){
					o.id=item+"";
					o.value = comSize[item];
					comSizeData.push(o);
				}
			}

			var comTypeData = [];
			var comType = person.dic.comTypes[lang];
			for (item in comType){
				var o={};
				if(comType.hasOwnProperty(item)){
					o.id=item+"";
					o.value = comType[item];
					comTypeData.push(o);
				}
			}


			var typeData = {
				cn:[{id:'0',value:"具体时间"},{id:'1',value:"至今"}],
				en:[{id:'0',value:"Date"},{id:'1',value:"Present"}]
			};

			resume.initIosSelect(lang,{selector:'#startDate',data:[],title:person.dic.title[lang]['workStartDate'],
			callback:function(selectOneObj,selectTwoObj,showData){
				myCache.recordData['beginDate'] = showData;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#endDate',data:typeData[lang],title:person.dic.title[lang]['workEndDate'],
			callback:function(selectOneObj,selectTwoObj,selectThreeObj,showData){
				if(selectOneObj.id == '0'){
					myCache.recordData['endDate'] = showData;
				}else{
					myCache.recordData['endDate'] = 'Present';
				}
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#comSize',data:comSizeData,title:person.dic.title[lang]['comSize'],
			callback:function(selectOneObj){
				var key = 'comSize';
				myCache.recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#comType',data:comTypeData,title:person.dic.title[lang]['comType'],
			callback:function(selectOneObj){
				var key = 'comType';
				myCache.recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			//行业类别
			resume.initIosSelect(lang,{selector:'#calling',type:"industry",text:'#callingVal',max:1,onlyChild:true,
			callback:function(s){
				if ( s.selectedItemsId == 0 ) myCache.recordData['calling'] = '';
				else	myCache.recordData['calling'] = s.selectedItemsId;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			//职业类别
			resume.initIosSelect(lang,{selector:'#jobFunctionID',type:"position",text:'#jobFunctionIDVal',max:1,onlyChild:true,
			callback:function(s){
				if ( s.selectedItemsId == 0 ) myCache.recordData['jobFunctionID'] = '';
				else myCache.recordData['jobFunctionID'] = s.selectedItemsId;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			$('#comName,#position,#workDesc').change(function(){
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			})


			resume.countWords({
				selector:'#workDesc',
				maxType :0,
				max:2000,
				showSpace:'.countWords'
			})

			//绑定其他事件
			out.bindSave(p)

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
		,bindSave : function(par){
			myCache.saveBtn.click(function(){
				out.save(par)
			})
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
		,bindEdit : function(){
			myCache.list.find("li").click(out.edit)
		}
		,goBack : function(t,par){
			new resume.goBack(t,myCache,par)
		}
		,empty: function(){
			myCache.info.find("input,textarea").each(function(){  this.value="" })
			myCache.info.find("select").each(function() { $(this).find("option").eq(0).attr("selected","true") });
			return myCache.info
		}
		,del : function(e){
			var MODID = $(this).attr('mod')//this.id.substring(1)
			out.goBack(true);
				resume.postDel({
					moudle : "work"
					,moudleId : MODID
					,myCache : myCache
					,title : '工作经验'
					,data:{
						'act': 'work_del',
						'workid': MODID,
					}
					,error: function(){
						alert("删除经历出错")
					}
					,success:function(){
						$('#goBack').trigger('click')
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}//end del
		,save : function(p){
			var beginDate = myCache.recordData['beginDate'];
			foundErr = !util.check(beginDate,{
				notEmpty : true
				,error : function(a,b,c){
					message(p.lang,{cn:"请选择开始时间！",en:"Please choose the start date！"})
				}
			})
			if(foundErr) return;

			var endDate = myCache.recordData['endDate'];
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
				if(endDate > nowVal){
					message(p.lang,{cn:"结束时间不能大于当前日期",en:"End Date should be less than now!"})
					return
				}
			}

			var comName = $("#comName").val()//.replace(/\s/g, '');
				foundErr = !util.check(comName,{
					notEmpty : true
					,max : 100
					,error : function(a,b,c){
						if(b=="notEmpty") message(p.lang,{cn:"请输入公司名称",en:"Company Name null"})
						else message(p.lang,{cn:"公司名称:请不要超过一百个字",en:"Company Name limit 100 characters"})
					}
				})
				if(foundErr) return;

			var callingVal = myCache.recordData['calling']
				foundErr = !util.check(callingVal,{
					notEmpty : true
					,error : function(){
						message(p.lang,{cn:"请选择行业类别",en:"Please choose industry category！"})
					}
				})
				if(foundErr) return;

			var jobFunctionIDVal = myCache.recordData['jobFunctionID']
				foundErr = !util.check(jobFunctionIDVal,{
					notEmpty : true
					,error : function(){
						message(p.lang,{cn:"请选择职位类别",en:"Please choose Job category！"})
					}
				})
				if(foundErr) return;

			var position = $("#position").val()
			foundErr = !util.check(position,{
				notEmpty : true
				,error : function(){
					message(p.lang,{cn:"担任职位不能为空",en:"Please input the Job Title!"})
				}
			})
			if(foundErr) return;
			if(position.length > 50){
				message(p.lang,{cn:"担任职位:请不要超过50个字",en:"position limit 50 characters"})
				return;
			}


			var workDesc = $("#workDesc").val().trim()
			if(resume.isTrimNewline) {
				workDesc = resume.trimNewline(workDesc);
			}
			foundErr = !util.check(workDesc,{
				notEmpty : true
				,max : 2000
				,maxType : 0
				,error : function(a,b,c){
					if(b=="notEmpty")
						message(p.lang,{cn:"请输入工作描述",en:"Please input Job Description."})
					else
						message(p.lang,{cn:"工作描述:不超过2000字",en:"work descriptions :limit 2000 characters"})
				}
			})
			if(foundErr) return;

			var comSize = $('#comSize').attr('data-su_id').trim();
			if(!comSize) {
				alert('请选择公司规模！');
				return;
			}
			var comType = $('#comType').attr('data-su_id').trim();
			if(!comType){
				alert('请选择公司性质！');
				return;
			}

			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"comName": comName
				,"calling": callingVal
				,"jobFunctionID":jobFunctionIDVal
				,"position":position
				,"workDesc": workDesc
				,"leftReason": ''
				,"beginDate": beginDate
				,"endDate": endDate == "Present" ? "" : endDate
				,'comSize': comSize
				,'comType': comType
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var workLen = p.data.work.length
			p.data.work = workLen == 0 ? PostData : p.data.work
			sessionStorage[resume.getDataKey()] = util.toString(p.data)

			var par = {
				langType : p.data.langType
				,resumeId : p.data.resumeId
				,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					'act': 'work_save',
					'workid': saveID=='-1'?'':saveID,
					'txtWorkName': comName,
					'hidWorkComSize': comSize,
					'hidWorkComProperty': comType,
					//'hidExceptCalling': '计算机软件',//行业名称
					'hidCallingExpect': callingVal,//行业id
					'ymStartTime1955582': beginDate,
					'ymEndTime1955582': endDate == "Present" ? "" : endDate,
					'txtWorkOffice': position,
					//'hidWorkJobType': 0,
					//'hidExceptJob': '',
					'hidJobSortExpect': jobFunctionIDVal,//职位类型id
					//'hidWorkJobLevel':0,
					//'txtWorkSalary': 0,
					'txtContent': workDesc,
					//'txtWorkLeaveReason': '阿萨德法师打发',
				}
				,error : function(){
					sessionStorage[resume.getDataKey()] = sessionDataCache;
					alert('请求出错!');
				}
				,success : function(data, status, xhr){
					var DATA = data
					if(DATA.success){
						myCache.listBox.show()
						myCache.delBtn.show()
						out.goBack(true)
						PostData[0].callingDesc = $("#calling").text();
						PostData[0].jobFunName = $("#jobFunctionID").text();
						if(!PostData[0].id){
							//PostData[0].id = DATA.work[0].id
							PostData[0].id = DATA.workid;
							if(workLen > 0){
								p.data.work.push(PostData[0])
							}else{
								p.data.work = PostData;
							}
						}else{
							for(var i=0; i<p.data.work.length;i++){
								if(p.data.work[i].id == PostData[0].id){
									p.data.work[i] = PostData[0]
									break;
								}
							}
						}
						//更新开始工作时间
						var beginDate = new Date(PostData[0].beginDate+"-01")
						if(p.data.base.memberClass == 1) {
							p.data.base.memberClass = 0
							p.data.base.workBeginDate = PostData[0].beginDate
						} else {
							var workBeginStr = p.data.base.workBeginDate
							if(workBeginStr !== "") {
								var workBegin = new Date(p.data.base.workBeginDate+"-01")
								if(workBegin > beginDate) {
									p.data.base.workBeginDate = PostData[0].beginDate
								}
							} else {
								p.data.base.workBeginDate = PostData[0].beginDate
							}
						}
						var workBegin = new Date(p.data.base.workBeginDate+"-01")
						if(beginDate < workBegin) {
							p.data.base.workBeginDate = PostData[0].beginDate
						}

						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						//myCache.info.hide()
						message(p.lang,{cn:"工作经验已保存!",en:"工作经验已保存!"})
						$('.btn_back').trigger('click');
					}else alert('错误:'+resumeLang.get(DATA.msg))
				}
			}
			resume.postUpdate(par)
		}
		,edit : function(lang,id){
			myCache.listBox.hide()
			myCache.delBtn.hide()
			out.goBack(false,{title:'工作经验',ok:function(box){
				box.close();
				myCache.saveBtn.trigger('click')
			}})
			var MODID = id//this.id.substring(1)
			var MODDATA = {}
			var $delete = $('.delete')
			if(id == "null"){
				MODDATA = {comSize:"",comType:"",beginDate:"",calling:"",callingDesc:"",comName:"",endDate:"",id:"",jobFunName:"",jobFunctionID:"",leftReason:"",parentJobFunName:"",position:"",workDesc:""}
				out.empty().show().find("button").attr("mod",-1);	//-1标示新增
				$delete.hide();
				$('.btn1_submit').css('width','100%');
			} else{
				MODDATA = myCache.par.data.work.filter(function(v){ return v.id == MODID})[0]
				out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
				$delete.click(out.del);
			}

			var o = [],v = [],attrName = [],attrVals = []
				o[1]="workDesc";v[1]=MODDATA.workDesc
				o[2]="position";v[2]=MODDATA.position
				o[5]="comName";v[5]=MODDATA.comName
				MODDATA.jobFunctionID =	MODDATA.jobFunctionID.replace(/^0$/,'').replace(/^-1$/,'');
				MODDATA.calling = MODDATA.calling.replace(/^0$/,'').replace(/^-1$/,'');
				o[3]="jobFunctionIDVal";v[3]=MODDATA.jobFunctionID
				o[4]="callingVal";v[4]=MODDATA.calling
				util.setMultiVal(o,v)

				o[1]="calling";v[1]=MODDATA.callingDesc;
				o[2]="jobFunctionID";v[2]=MODDATA.jobFunName;

				var now = new Date();
				var present = false;
				if(MODDATA.beginDate!="") {
					var begin = MODDATA.beginDate.split('-');
					o[5]="startDate";v[5]=MODDATA.beginDate
					o[6]="startDate";v[6]=MODDATA.beginDate
					attrName[5]="year",attrVals[5]=begin[0]+"";
					attrName[6]="month",attrVals[6]=begin[1]>>0+"";
					present = true;
				}else{
					o[5]="startDate";v[5]=""
					o[6]="startDate";v[6]=""
					attrName[5]="year",attrVals[5]=now.getFullYear()+"";
					attrName[6]="month",attrVals[6]="1";
				}
				if(MODDATA.endDate.indexOf('-') != -1){
					var end = MODDATA.endDate.split('-')
					o[7]="endDate";v[7]= MODDATA.endDate;
					o[8]="endDate";v[8]= MODDATA.endDate;
					o[9]="endDate";v[9]= MODDATA.endDate;
					attrName[7]="year", attrVals[7]=end[0]+"";
					attrName[8]="month",attrVals[8]=end[1]>>0+"";
					attrName[9]="type",attrVals[9]="0";
				}else{
					o[7]="endDate";v[7]= "";
					o[8]="endDate";v[8]= "";
					o[9]="endDate";v[9]= present == false ? "" : (lang == 'cn' ?"至今":"Present");
					MODDATA.endDate = present == false ? "":"Present";
					attrName[7]="year",attrVals[7]=now.getFullYear() + "";
					attrName[8]="month",attrVals[8]=now.getMonth() + 1 +"";
					attrName[9]="type",attrVals[9]=  present == false ? "0" : "1";
				}
				o[10]="comSize";v[10]=person.dic.comSizes[lang][MODDATA.comSize]
				attrName[10]="data-su_id",attrVals[10]=MODDATA.comSize;
				o[11]="comType";v[11]=person.dic.comTypes[lang][MODDATA.comType]
				attrName[11]="data-su_id",attrVals[11]=MODDATA.comType;

				myCache.recordData['comSize']=MODDATA.comSize;
				myCache.recordData['comType']=MODDATA.comType;
				myCache.recordData['beginDate']=MODDATA.beginDate;
				myCache.recordData['endDate']=MODDATA.endDate;
				myCache.recordData['calling']=MODDATA.calling;
				myCache.recordData['jobFunctionID']=MODDATA.jobFunctionID;
				util.setMutiText(o,v,attrName,attrVals);
		}
	}
	module.exports = out;
});
