define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	,selector2 = require("ui.selector2")
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
			p.template = $("#practiceTemplate").val()
			//初始化数据
			person.showOption()
		var jsonData = p.data.practice
			myCache.list = $("#practiceList")
			myCache.info = $("#practiceInfo")
			myCache.listBox = $("#listBox")
			myCache.addBtn = $("#practiceAdd")
			myCache.saveBtn = $("#practiceBtn")
			myCache.delBtn = $("#practiceManage")
			myCache.goBack = $("#goBack")
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")
			
			//回显数据
			if(jsonData.length>0){
				var newList = $("<ul></ul>")
				for(var i=0;i<jsonData.length;i++){
					var dt= $.extend({},jsonData[i])
						dt.endDate = dt.endDate || resume.dic.note[p.lang]["endDate"]
					var li = $(juicer(p.template,dt))
					newList.append(li)
				}
				myCache.list.append(newList.find("li")).show()
			}

			$("#content").click(function(){
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
				out.empty().show().find("button").attr("mod","-1");	//-1标示新增
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
		,empty: function(){
			myCache.info.find("input,textarea").each(function(){  this.value="" })
			myCache.info.find("#displayIF")[0].checked=true
			return myCache.info
		}
		,goBack : function(t){
			new resume.goBack(t,myCache)
		}
		,del : function(e){
			var MODID = this.id.substring(1)
				resume.postDel({
					moudle : "practice"
					,moudleId : MODID
					,myCache : myCache
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
					message(p.lang,{cn:"请输入正确的起始年月",en:"请输入正确的起始年月"})
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
						message(p.lang,{cn:"请输入正确的截止年月",en:"请输入正确的截止年月"})
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
			
			var praName = $("#praName").val()
				foundErr = !util.check(praName,{
					notEmpty : true
					,max : 100
					,regex: "^[\\w\\u4e00-\\u9fa5]+$"
					,error : function(){
						message(p.lang,{cn:"请输入正确的实践名称",en:"请输入正确的实践名称"})
					}
				})
				if(foundErr) return;

			var content = $("#content").val()
				foundErr = !util.check(content,{
					notEmpty : true
					,max : 500
					,maxType : 0
					,error : function(a,b,c){
						message(p.lang,{cn:"实践内容：不能为空.最长500字",en:"实践内容：不能为空.最长500字"})
					}
				})
				if(foundErr) return;
			var displayIF = $(".inputCheckbox").is(":checked")?"1":"0";
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"name": praName
				,"content": content
				,"displayIF": displayIF
				,"beginDate": beginDate_y+"-"+beginDate_m
				,"endDate": endDate
			}]
			if(saveID == "-1") delete PostData[0].id
			
			var par = {
				langType : p.data.langType
				,resumeId : p.data.resumeId
				,subResumeId : p.data.subResumeId
				,finished : true
				,data : { "practice" : util.toString(PostData) }
				,error : function(){
					alert('请求出错!')
				}
				,success : function(data){
					var DATA = data
					if(DATA.success){
						myCache.listBox.show()
						myCache.delBtn.show()
						out.goBack(true)
						if(!PostData[0].id){
							PostData[0].id = DATA.practice[0].id
							p.data.practice.push(PostData[0])
						}else{
							for(var i=0; i<p.data.practice.length;i++){
								if(p.data.practice[i].id == PostData[0].id){
									p.data.practice[i] = PostData[0]
									break;
								}
							}
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
						message(p.lang,{cn:"实践经验已保存!",en:"实践经验已保存"})
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
			var MODDATA = myCache.par.data.practice.filter(function(v){ return v.id == MODID})[0]
			out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var o = [],v = []
				o[0]="displayIF";v[0]=MODDATA.displayIF
				o[1]="content";v[1]=MODDATA.content
				o[2]="praName";v[2]=MODDATA.name
				o[5]="beginDate_y";v[5]=MODDATA.beginDate.substring(0,4)
				o[6]="beginDate_m";v[6]=MODDATA.beginDate.substring(5,7)
				if(MODDATA.endDate!=""){
					o[7]="endDate_y";v[7]=MODDATA.endDate.substring(0,4)
					o[8]="endDate_m";v[8]=MODDATA.endDate.substring(5,7)
				}
			util.setMultiVal(o,v)
			if(MODDATA.displayIF == "1") $("#displayIF")[0].checked = true;
			else $("#displayIF")[0].checked = false;
			scrollTo(0,myCache.info.offset().top)
		}
	}
	module.exports = out;
});