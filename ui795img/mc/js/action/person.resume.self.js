define(function (require, exports, module) {
	var $ = require("$"),
	ui = require("ui.base"),
	util = require("util"),
	person = require("action.person"),
	resume = require("action.person.resume"),
	resumeLang = require("resume.lang"),
	mEditor = require("ui.mEditor")

		var message = resume.message
		var myCache = {}
	var out = {
		init : function (p) {
			person.updateInfo()
			myCache.par = p
				resume.selectLanguage(p.lang)
				resume.setGoBack()
				//取数据
				var key = resume.getDataKey()
				p.dataKey = key
				p.data = sessionStorage[key]
				if (!p.data) {
					alert("丢失缓存，请重新登录!");
					return
				}
				p.data = util.toJSON(p.data)
				//初始化数据
				var jsonData = p.data.self
				$("#careerDirection").val(jsonData.careerDirection)
				$("#careerDirection").click(function () {
					new mEditor($(this).val(), {
						saveid : this.id,
						maxType : 0,
						minType : 0
					})
				})
				//差完成度
				$("#selfBtn").click(function () {
					var content = $("#careerDirection").val().trim()
					if (resume.isTrimNewline) {
						content = resume.trimNewline(content);
					}
					var postData = {
						//'description' : '',
						//'interest' : '',
						//'awardTitle' : '',
						//'awardDate' : '',
						'careerDirection' : content
					}
					var foundErr = false
						foundErr = !util.check(postData.careerDirection, {
							notempty : false,
							max : 1000,
							maxType : 0,
							error : function () {
								alert('自我评价:最多不能超过1000字。');
							}
						})
						if (foundErr) return postData = $.extend(p.data.self, postData)
						var par = {
							langType : p.data.langType,
							//resumeId : p.data.resumeId,
							//subResumeId : sessionStorage["subResumeId"] || p.data.subResumeId,
							finished : true,
							data : {
								//"self" : util.toString(postData)
								'act': 'resume_save',
								'txtAppraise': postData.careerDirection,
							},
							error : function () {
								alert('请求出错!')
							},
							success : function (data) {
								if (data.status==1) {
									sessionStorage[resume.getDataKey()] = util.toString(p.data);
									message(p.lang, {cn : "自我评述已保存!",en : ""});
									$('.btn_back').trigger('click');
								} else
									alert('错误:' + resumeLang.get(data.msg))
							}
						}
						resume.postUpdate(par)
				}) //end btn click
		}
	}
	module.exports = out;
});
