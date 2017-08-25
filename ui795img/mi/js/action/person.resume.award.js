define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	
	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			resume.selectLanguage(p.lang)
			resume.setGoBack()
			//取数据
		var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return }
			p.data = util.toJSON(p.data)
			p.template = $("#awardTemplate").val()
			//初始化数据
		var jsonData = p.data.award
			myCache.goBack = $("#goBack")
			myCache.list = $("#awardList")
			myCache.listBox = $("#listBox")
			myCache.info = $("#awardInfo")
			myCache.addBtn = $("#awardAdd")
			myCache.saveBtn = $("#awardBtn")
			myCache.delBtn = $("#awardManage")
			//回显数据
			if(jsonData.length>0){
				var newList = $("<ul></ul>")
				for(var i=0;i<jsonData.length;i++){
					var li = $(juicer(p.template,jsonData[i]))
					newList.append(li)
				}
				myCache.list.append(newList.find("li")).show()
			}
			//构造option选项
			person.showOption()
			
			//绑定动作
			out.bindAdd()
			out.bindSave(p)
			out.bindEdit()
			out.bindDel()
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
		,bindEdit : function(){
			myCache.list.find("li").click(out.edit)
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
		,empty : function(){
			myCache.info.find("input").each(function(){  this.value="" })
			return myCache.info
		}
		,goBack : function(t){
			new resume.goBack(t,myCache)
		}
		,edit : function(){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack()
			var MODID = this.id.substring(1)
			var MODDATA = myCache.par.data.award.filter(function(v){ return v.id == MODID})[0]
				out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var ymd = MODDATA.awardDate.split('-')
			var o = [],v = []
				o[0]="awardTitle";v[0]=MODDATA.awardTitle
				o[5]="Date_Year";v[5]=ymd[0]
				o[6]="Date_Month";v[6]=ymd[1]
				o[7]="Date_Day";v[7]=ymd[2]
				util.setMultiVal(o,v)
		}
		,del : function(e){
			var MODID = this.id.substring(1)
				resume.postDel({
					moudle : "award"
					,moudleId : MODID
					,myCache : myCache
					,error: function(){
						alert("删除经历出错")
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}
		,save : function(p){
			var foundErr = false
			var awardTitle = $("#awardTitle").val()
			foundErr = !util.check(awardTitle,{
				notEmpty : true
				,max:50
				,regex: "^[\\w\\u4e00-\\u9fa5]+$"
				,error : function(a,b,c){
					message(p.lang,{cn:"奖励名称：不能为空,长度不能超过50字!",en:"Reward:Not empty, the length can't be more than 50 characters!"})
				}
			})
			if(foundErr) return;
			var y = $("#Date_Year").val()
				,m = $("#Date_Month").val()
				,d = $("#Date_Day").val()
			if(!util.isSelectDate(y,m,d)){
				message(p.lang,{cn:"时间：没有这一天,请核对!",en:"Not this day, please check!"})
				return;
			}
			var awardDate = y+"-"+m+"-"+d
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"awardTitle":awardTitle
				,"awardDate":awardDate
			}]
			if(saveID == "-1") delete PostData[0].id
			
			var par = {
				langType : p.data.langType
				,resumeId : p.data.resumeId
				,subResumeId : p.data.subResumeId
				,data : { "award" : util.toString(PostData) }
				,error : function(){
					alert('请求出错!')
				}
				,success : function(data){
					var DATA = data
						if(DATA.success){
							myCache.listBox.show()
							myCache.delBtn.show()
							out.goBack(true)
							//更新本地缓存
							if(!PostData[0].id){
								PostData[0].id = DATA.award[0].id
								p.data.award.push(PostData[0])
							}else{
								for(var i=0; i<p.data.award.length;i++){
									if(p.data.award[i].id == PostData[0].id){
										p.data.award[i] = PostData[0]
										break;
									}
								}
							}
							sessionStorage[resume.getDataKey()] = util.toString(p.data)
						var li = $(juicer(p.template,PostData[0]))
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
							alert('获奖奖励保存成功!')
						}else alert('错误:'+resumeLang.get(DATA.msg))
				}//end success
			}//end par
			resume.postUpdate(par)
		}
	}
	module.exports = out;
});