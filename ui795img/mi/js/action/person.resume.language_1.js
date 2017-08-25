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
			var jsonData = p.data.language
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
						dt.endDate = dt.endDate || resume.dic.note[p.lang]["endDate"]
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
					moudle : "language"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'del_Language',
						'languageid': MODID,
						'to_m': true
					}
					,error: function(){
						alert("删除语言能力出错")
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}//end del
		,save : function(p){
			var foundErr = false
			
			var lanCert = $("#lanCert").val().replace(/\s/g, '');
				foundErr = !util.check(lanCert,{
					notEmpty : true
					,max : 100
					,regex: "^[^\<\>]+$"
					,error : function(){
						message(p.lang,{cn:"请输入正确的证书名称",en:"lanCert null"})
					}
				})
				if(foundErr) return;

			var level = $("#level").val()
				foundErr = !util.check(level,{
					notEmpty : true
					,regex: "^[\\d\\,]+$"
					,error : function(){
						message(p.lang,{cn:"请选择熟练程度",en:"level null"})
					}
				})
				if(foundErr) return;
				
			if(!level || level=="0") {
				alert("请选择熟练程度");return;
			}
			
			var lanType = $("#lanType").val()
				foundErr = !util.check(lanType,{
					notEmpty : true
					,regex: "^[\\d\\,]+$"
					,error : function(){
						message(p.lang,{cn:"请选择语种",en:"lanType null"})
					}
				})
				if(foundErr) return;	
			if(!lanType || lanType=="0") {
				alert("请选择语种");return;
			}				
			
			var levelName = document.getElementById('level').options[parseInt(level)].text;
			var lanName = document.getElementById('lanType').options[parseInt(lanType)].text;
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				'id': saveID,
				'lanCert': lanCert,
				'level': level,
				'levelName': levelName,
				'lanName': lanName,
				'lanType': lanType,
			}]
			
			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var workLen = p.data.language.length
			
			p.data.language = workLen == 0 ? PostData : p.data.language
			sessionStorage[resume.getDataKey()] = util.toString(p.data)
			
			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					//"language" : util.toString(PostData),
					
					'act': 'language_save',
					'languageid': saveID=='-1'?'':saveID,
					'selLanguageType': lanType,
					'selLangSkillLevel': level,
					'selLangCert': lanCert,
					'to_m' : true,
				}
				,error : function(){
					sessionStorage[resume.getDataKey()] = sessionDataCache;
					alert('请求出错!');
				}
				,success : function(data, status, xhr){
					
					var DATA = data
					if(DATA.status==1 || DATA.success=='success'){
						myCache.listBox.show()
						myCache.delBtn.show()
						out.goBack(true)
						PostData[0].level = level;
						PostData[0].levelName = levelName;
						PostData[0].lanType = lanType;
						PostData[0].lanName = lanName;
						PostData[0].lanCert = lanCert;
						if(!PostData[0].id){
							PostData[0].id = DATA.langid;
							//console.log(PostData);
							if(workLen > 0){
								p.data.language.push(PostData[0])
							}else{
								p.data.language = PostData;
							}
						}else{
							for(var i=0; i<p.data.language.length;i++){
								if(p.data.language[i].id == PostData[0].id){
									p.data.language[i] = PostData[0]
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
						message(p.lang,{cn:"语言能力已保存!",en:"语言能力已保存!"})
					}else alert('错误:'+resumeLang.get(DATA.msg || DATA.error))
				}
			}
			resume.postUpdate(par)
		}
		,edit : function(){
			myCache.listBox.hide()
			myCache.delBtn.hide()
			out.goBack()
			var MODID = this.id.substring(1)
			var MODDATA = myCache.par.data.language.filter(function(v){ return v.id == MODID})[0]
			out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var o = [],v = []
				o[1]="lanType";v[1]=MODDATA.lanType
				o[2]="level";v[2]=MODDATA.level
				o[3]="lanCert";v[3]=MODDATA.lanCert
				
			util.setMultiVal(o,v)
		}
	}
	module.exports = out;
});
