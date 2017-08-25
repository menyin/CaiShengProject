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
			var jsonData = p.data.train
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
						dt.trainingDateEnd = dt.trainingDateEnd || resume.dic.note[p.lang]["endDate"]
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
					moudle : "train"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'training_del',
						'trainingid': MODID,
					}
					,error: function(){
						alert("删除培训经历出错")
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
			var trainingName = $("#trainingName").val().replace(/\s/g, '');
				foundErr = !util.check(trainingName,{
					notEmpty : true
					,max : 100
					,regex: "^[^\<\>]+$"
					,error : function(){
						message(p.lang,{cn:"请输入正确的机构名称",en:"trainingName null"})
					}
				})
				if(foundErr) return;

			var trainingSpecialty = $("#trainingSpecialty").val()
				foundErr = !util.check(trainingSpecialty,{
					notEmpty : true
					,max : 50
					//,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"培训项目不能为空",en:"trainingSpecialty null"})
					}
				})
				if(foundErr) return;

			var trainingBackGround = $("#trainingBackGround").val()
				foundErr = !util.check(trainingBackGround,{
					notEmpty : true
					,max : 50
					//,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"获得证书不能为空",en:"trainingBackGround null"})
					}
				})
				if(foundErr) return;
				
			var trainDetail = $("#trainDetail").val().trim()
				foundErr = !util.check(trainDetail,{
					notEmpty : true
					,max : 2000
					,maxType : 0
					,error : function(){
						message(p.lang,{cn:"专业课程不能为空"})
					}
				})
				if(foundErr) return;
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"trainingName": trainingName
				,"trainingSpecialty": trainingSpecialty
				,"trainingBackGround": trainingBackGround
				,"trainDetail": trainDetail
				,"trainingDateStart": beginDate_y+"-"+beginDate_m
				,"trainingDateEnd": endDate
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var workLen = p.data.train.length
			p.data.train = workLen == 0 ? PostData : p.data.train
			sessionStorage[resume.getDataKey()] = util.toString(p.data)

			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					//"train" : util.toString(PostData),
					
					'act': 'training_save',
					'trainingid': saveID=='-1'?'':saveID,
					'ymStartTime1955582': beginDate_y+"-"+beginDate_m,
					'ymEndTime1955582': endDate,
					'txtTrainingName': trainingName,
					'txtTrainingSpecialty': trainingSpecialty,
					'txtTrainingBackGround':trainingBackGround,
					'taTrainDetail':trainDetail,

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
						PostData[0].trainingName = trainingName;
						PostData[0].trainingSpecialty = trainingSpecialty;
						PostData[0].trainingBackGround = trainingBackGround;
						PostData[0].trainDetail = trainDetail;
						PostData[0].trainingDateStart = beginDate_y+"-"+beginDate_m;
						PostData[0].trainingDateEnd = endDate;
						
						if(!PostData[0].id){
							PostData[0].id = DATA.trainingid;
							if(workLen > 0){
								p.data.train.push(PostData[0])
							}else{
								p.data.train = PostData;
							}
						}else{
							for(var i=0; i<p.data.train.length;i++){
								if(p.data.train[i].id == PostData[0].id){
									p.data.train[i] = PostData[0]
									break;
								}
							}
						}
						

						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						var dt= $.extend({},PostData[0])
							dt.trainingDateEnd = dt.trainingDateEnd || resume.dic.note[p.lang]["endDate"]
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
						message(p.lang,{cn:"培训经历已保存!",en:"培训经历已保存!"})
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
			console.log(MODID);
			var MODDATA = myCache.par.data.train.filter(function(v){ return v.id == MODID})[0]
			out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var o = [],v = []
				o[1]="trainingName";v[1]=MODDATA.trainingName
				o[2]="trainingSpecialty";v[2]=MODDATA.trainingSpecialty
				o[3]="trainingBackGround";v[3]=MODDATA.trainingBackGround
				o[4]="projectIntr";v[4]=MODDATA.projectIntr
				o[5]="beginDate_y";v[5]=MODDATA.trainingDateStart.substring(0,4)
				o[6]="beginDate_m";v[6]=MODDATA.trainingDateStart.substring(5,7)
				if(MODDATA.trainingDateEnd!=""){
					o[7]="endDate_y";v[7]=MODDATA.trainingDateEnd.substring(0,4)
					o[8]="endDate_m";v[8]=MODDATA.trainingDateEnd.substring(5,7)
				}
				o[9]="trainDetail";v[9]=MODDATA.trainDetail
			util.setMultiVal(o,v)
		}
	}
	module.exports = out;
});
