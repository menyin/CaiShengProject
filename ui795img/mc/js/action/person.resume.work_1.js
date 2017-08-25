define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	,uiSelector = require("ui.selector")
	,mEditor = require("ui.mEditor")

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
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")

			if(jsonData && jsonData.length>0){
				var newList = $("<ul></ul>")
				for(var i=0;i<jsonData.length;i++){
					var dt= $.extend({},jsonData[i])
						dt.endDate = dt.endDate || resume.dic.note[p.lang]["endDate"]
					var li = $(juicer(p.template,dt))
					newList.append(li)
				}
				myCache.list.append(newList.find("li")).show()
			}
			$("#workDesc").click(function(){
				new mEditor($(this).val(),{saveid:this.id})
			})
			//行业类别
		var callingSelector = new uiSelector({
				type : "industry"
				,max : 1
				,lang : p.lang
				,textId : "#calling"
				,valueId : "#callingVal"
				,selectType : "single"
				,onShow : function(s){
					var ids = $("#callingVal").val().split(",");
					$('.clearSelector', s.selector).trigger('tap');
					ids.forEach(function(id){
						$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
						$('[data-cv="'+id+'"]',s.iscrollLv2.scroller).trigger('tap');
					})
				}
				,onSave : function(s){
					if ( s.OPTIONS.selectedItemsId == 0 ) {
						$('#callingVal').val('');
					}
					if ( !s.OPTIONS.selectedItemsText.length ) {
						$("#calling").html(p.lang=="en"?"click":"点击选择");
					}
				}
			});
			callingSelector.init()
			$("#calling").click(function(){
				setTimeout( function () { callingSelector.open(); }, 200 )
			});
			//岗位类别 || 职位类别
		var jobFunctionIDSelector = new uiSelector({
				type : "position"
				,max : 1
				,lang : p.lang
				,textId : "#jobFunctionID"
				,valueId : "#jobFunctionIDVal"
				,selectType : "single"
				,onlyChild : true
				,onShow : function(s){
					var ids = $("#jobFunctionIDVal").val().split(",");
					$('.clearSelector', s.selector).trigger('tap');
					ids.forEach(function(id){
						$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
						$('[data-cv="'+id+'"]',s.iscrollLv2.scroller).trigger('tap');
					})
				}
				,onSave : function(s){
					if ( s.OPTIONS.selectedItemsId == 0 ) {
						$('#jobFunctionIDVal').val('');
					}
					if ( !s.OPTIONS.selectedItemsText.length ) {
						$("#jobFunctionID").html(p.lang=="en"?"click":"点击选择");
					}
				}
			})
			jobFunctionIDSelector.init()
			$("#jobFunctionID").click(function(){
				setTimeout( function () { jobFunctionIDSelector.open(); }, 200 )
			});
			//绑定其他事件
			out.bindAdd()
			out.bindSave(p)
			out.bindDel()
			out.bindEdit()
		}
		,bindAdd : function(){
			myCache.addBtn.click(function(){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack()
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
		,goBack : function(t){
			new resume.goBack(t,myCache)
		}
		,empty: function(){
			myCache.info.find("input,textarea").each(function(){  this.value="" })
			myCache.info.find("select").each(function() { $(this).find("option").eq(0).attr("selected","true") });
			if(myCache.par.lang=="en")
				myCache.info.find("#jobFunctionID,#calling").html("Click")
			else
				myCache.info.find("#jobFunctionID,#calling").html("点击选择")
			return myCache.info
		}
		,del : function(e){
			var MODID = this.id.substring(1)
				resume.postDel({
					moudle : "work"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'work_del',
						'workid': MODID,
					}
					,error: function(){
						alert("删除经历出错")
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}//end del
		,save : function(p){
			var foundErr = false
			var beginDate_y = $("#beginDate_y").val()
				foundErr = !util.check(beginDate_y,{
					notEmpty : true
					,max : 4
					,lt : new Date().getFullYear()+1
					,regex: "^[\\d]+$"
					,error : function(a,b,c){
						message(p.lang,{cn:"请输入正确的起始年月",en:"begin date err"})
					}
				})
				if(foundErr) return;
			var beginDate_m = $("#beginDate_m").val()

			var endDate_y = $("#endDate_y").val()
				foundErr = !util.check(endDate_y,{
					notEmpty : false
					,max : 4
					,regex: "^[\\d]*$"
					,error : function(){
						message(p.lang,{cn:"请输入正确的截止年月",en:"end date err"})
					}
				})
				if(foundErr) return;
			var endDate_m = $("#endDate_m").val()
			var endDate = ""
			if(endDate_y!=""){
				if(new Date(beginDate_y,beginDate_m)>new Date(endDate_y,endDate_m)){
					message(p.lang,{cn:"截止年月不应小于起始年月",en:"截止年月不应小于起始年月"})
					return
				}
				endDate = endDate_y+"-"+endDate_m
			}else{
				if(new Date(beginDate_y,beginDate_m)>new Date()){
					message(p.lang,{cn:"起始年月不能大于当前日期",en:"起始年月不能大于当前日期"})
					return
				}
			}
			var comName = $("#comName").val().replace(/\s/g, '');
				foundErr = !util.check(comName,{
					notEmpty : true
					,max : 100
					,regex: "^[^\<\>]+$"
					,error : function(){
						message(p.lang,{cn:"请输入正确的公司名称",en:"comname null"})
					}
				})
				if(foundErr) return;

			var callingVal = $("#callingVal").val()
				foundErr = !util.check(callingVal,{
					notEmpty : true
					,regex: "^[\\d\\,]+$"
					,error : function(){
						message(p.lang,{cn:"请选择行业类别",en:"calling null"})
					}
				})
				if(foundErr) return;

			var jobFunctionIDVal = $("#jobFunctionIDVal").val()
				foundErr = !util.check(jobFunctionIDVal,{
					notEmpty : true
					,regex: "^[\\d\\,]+$"
					,error : function(){
						message(p.lang,{cn:"请选择岗位类别",en:"jobFunction null"})
					}
				})
				if(foundErr) return;

			var position = $("#position").val()
				foundErr = !util.check(position,{
					notEmpty : true
					,max : 50
					//,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"担任职位不能为空",en:"position null"})
					}
				})
				if(foundErr) return;

			var workDesc = $("#workDesc").val().trim()
			if(resume.isTrimNewline) {
				workDesc = resume.trimNewline(workDesc);
			}
				foundErr = !util.check(workDesc,{
					notEmpty : true
					,max : 2000
					,maxType : 0
					,error : function(){
						message(p.lang,{cn:"请输入工作描述，不超过2000字",en:"请输入工作描述，不超过2000字"})
					}
				})
				if(foundErr) return;
				
			var comSize = $('#comSize').val();
			if(!comSize) {
				alert('请选择公司规模！');
				return;
			}
			var comType = $('#comType').val();
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
				,"beginDate": beginDate_y+"-"+beginDate_m
				,"endDate": endDate
				,'comSize': comSize
				,'comType': comType
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var workLen = p.data.work?p.data.work.length:0;
			p.data.work = workLen == 0 ? PostData : p.data.work
			sessionStorage[resume.getDataKey()] = util.toString(p.data)

			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					//"work" : util.toString(PostData),
					
					'act': 'work_save',
					'workid': saveID=='-1'?'':saveID,
					'txtWorkName': comName,
					'hidWorkComSize': comSize,
					'hidWorkComProperty': comType,
					//'hidExceptCalling': '计算机软件',//行业名称
					'hidCallingExpect': callingVal,//行业id
					'ymStartTime1955582': beginDate_y+"-"+beginDate_m,
					'ymEndTime1955582': endDate,
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
					if(DATA.status==1){
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
						var dt= $.extend({},PostData[0])
							dt.endDate = dt.endDate || resume.dic.note[p.lang]["endDate"]
						var li = $(juicer(p.template,dt))
							li.click(out.edit)
						var iconDel = li.find(".icon_delete")
							iconDel.click(out.del)
							myCache.delBtn.click(function(){
								if(iconDel.css("display")!="none"){iconDel.hide()}else{iconDel.show()}
								myCache.info.hide()
							})
						if(saveID == "-1"){
							myCache.list.append(li).show()
						}else{
							var LI = myCache.list.find("#e"+PostData[0].id)
								LI.find("dt,.dateTime").remove()
								LI.find("dl").append(li.find("dt,.dateTime"))
						}
						myCache.info.hide()
						message(p.lang,{cn:"工作经验已保存!",en:"工作经验已保存!"})
					}else alert('错误:'+resumeLang.get(DATA.msg))
				}
			}
			resume.postUpdate(par)
		}
		,edit : function(){
			myCache.listBox.hide()
			myCache.delBtn.hide()
			out.goBack()
			var MODID = this.id.substring(1)
			var MODDATA = myCache.par.data.work.filter(function(v){ return v.id == MODID})[0]
			out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var o = [],v = []
				o[1]="workDesc";v[1]=MODDATA.workDesc
				o[2]="position";v[2]=MODDATA.position
				o[3]="jobFunctionIDVal";v[3]=MODDATA.jobFunctionID
				o[4]="callingVal";v[4]=MODDATA.calling
				o[5]="beginDate_y";v[5]=MODDATA.beginDate.substring(0,4)
				o[6]="beginDate_m";v[6]=MODDATA.beginDate.substring(5,7)
				if(MODDATA.endDate!=""){
					o[7]="endDate_y";v[7]=MODDATA.endDate.substring(0,4)
					o[8]="endDate_m";v[8]=MODDATA.endDate.substring(5,7)
				}
				o[9]="comName";v[9]=MODDATA.comName
				o[10]="comSize";v[10]=MODDATA.comSize
				o[11]="comType";v[11]=MODDATA.comType
			util.setMultiVal(o,v)
			$("#jobFunctionID").html(MODDATA.jobFunName || '点击选择')
			$("#calling").html(MODDATA.callingDesc)
		}
	}
	module.exports = out;
});
