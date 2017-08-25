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
			resume.selectLanguage(p.lang)
			resume.setGoBack()
			//取数据
		var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return }
			p.data = util.toJSON(p.data)
			//初始化数据
		var jsonData = p.data.major
			$("#mainCourse").val(jsonData.mainCourse)
			
			$("#mainCourse").click(function(){
				new mEditor($(this).val(),{saveid:this.id,maxType:0,minType:0})
			})
			//差完成度
			$("#majorBtn").click(function(){
				var postData = {
					mainCourse : $("#mainCourse").val()
				}
				var foundErr = false
					foundErr = !util.check(postData.mainCourse,{notempty:true,max:150,maxType:0,error:function(){alert('请输入所修主要课程，不超过150字。');}})
					if(foundErr) return
				postData = $.extend(p.data.major,postData)
				var par = {
					langType : p.data.langType
					,resumeId : p.data.resumeId
					,subResumeId : p.data.subResumeId
					,finished : true
					,data : { "major" : util.toString(postData) }
					,error : function(){
						alert('请求出错!')
					}
					,success : function(data){
						if(data.success){
							sessionStorage[resume.getDataKey()] = util.toString(p.data)
							alert('主要课程已保存!')
						}else alert('错误:'+resumeLang.get(data.msg))
					}
				}
				resume.postUpdate(par)
			})//end btn click
		}
	}
	module.exports = out;
});