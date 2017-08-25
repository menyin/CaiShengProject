define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
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
			var jsonData = p.data.school
			myCache.goBack = $("#goBack")
			myCache.list = $("#workList")
			myCache.info = $("#workInfo")
			myCache.listBox = $("#listBox")
			myCache.addBtn = $("#workAdd")
			myCache.saveBtn = $("#workBtn")
			myCache.delBtn = $("#workManage")
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")

			if(jsonData.length>0){
				var newList = $("<ul></ul>")
				for(var i=0;i<jsonData.length;i++){
					var dt= $.extend({},jsonData[i])
						dt.PracticeTimeEnd = dt.PracticeTimeEnd || resume.dic.note[p.lang]["endDate"]
					var li = $(juicer(p.template,dt))
					newList.append(li)
				}
				myCache.list.append(newList.find("li")).show()
			}
			$("#workDesc").click(function(){
				new mEditor($(this).val(),{saveid:this.id})
			})
			
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
					moudle : "school"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'practice_del',
						'practice_id': MODID,
					}
					,error: function(){
						alert("删除在校情况出错")
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
			var PracticeName = $("#PracticeName").val().replace(/\s/g, '');
				foundErr = !util.check(PracticeName,{
					notEmpty : true
					,max : 100
					,regex: "^[^\<\>]+$"
					,error : function(){
						message(p.lang,{cn:"请输入正确的实践名称",en:"PracticeName null"})
					}
				})
				if(foundErr) return;

			var PracticeDetail = $("#PracticeDetail").val()
				foundErr = !util.check(PracticeDetail,{
					notEmpty : true
					,max : 50
					//,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"详细介绍不能为空",en:"PracticeDetail null"})
					}
				})
				if(foundErr) return;

			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"PracticeName": PracticeName
				,"PracticeDetail": PracticeDetail
				,"PracticeTimeStart": beginDate_y+"-"+beginDate_m
				,"PracticeTimeEnd": endDate
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var workLen = p.data.school.length
			p.data.school = workLen == 0 ? PostData : p.data.school
			sessionStorage[resume.getDataKey()] = util.toString(p.data)

			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					//"school" : util.toString(PostData),
					
					'act': 'practice_save',
					'practice_id': saveID=='-1'?'':saveID,
					'txtPracticeName': PracticeName,
					'ymStartTime1955582': beginDate_y+"-"+beginDate_m,
					'ymEndTime1955582': endDate,
					'taPracticeDetail': PracticeDetail,

					
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
						PostData[0].PracticeName = PracticeName;
						PostData[0].PracticeDetail = PracticeDetail;
						PostData[0].PracticeTimeStart = beginDate_y+"-"+beginDate_m;
						PostData[0].PracticeTimeEnd = endDate;

						if(!PostData[0].id){
							PostData[0].id = DATA.practice_id;
							if(workLen > 0){
								p.data.school.push(PostData[0])
							}else{
								p.data.school = PostData;
							}
						}else{
							for(var i=0; i<p.data.school.length;i++){
								if(p.data.school[i].id == PostData[0].id){
									p.data.school[i] = PostData[0]
									break;
								}
							}
						}
						

						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						var dt= $.extend({},PostData[0])
							dt.PracticeTimeEnd = dt.PracticeTimeEnd || resume.dic.note[p.lang]["endDate"]
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
						message(p.lang,{cn:"在校情况已保存!",en:"在校情况已保存!"})
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
			
			var MODDATA = myCache.par.data.school.filter(function(v){ return v.id == MODID})[0]
			out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var o = [],v = []
				o[1]="PracticeName";v[1]=MODDATA.PracticeName
				o[2]="PracticeDetail";v[2]=MODDATA.PracticeDetail
				o[3]="beginDate_y";v[3]=MODDATA.PracticeTimeStart.substring(0,4)
				o[4]="beginDate_m";v[4]=MODDATA.PracticeTimeStart.substring(5,7)
				if(MODDATA.PracticeTimeEnd!=""){
					o[5]="endDate_y";v[5]=MODDATA.PracticeTimeEnd.substring(0,4)
					o[6]="endDate_m";v[6]=MODDATA.PracticeTimeEnd.substring(5,7)
				}
			util.setMultiVal(o,v)
			$("#jobFunctionID").html(MODDATA.jobFunName || '点击选择')
			$("#calling").html(MODDATA.callingDesc)
		}
	}
	module.exports = out;
});
