define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,util = require("util")
		,person = require("action.person")

	var inner = {
		register : function(){
			var ajaxData = {
				"m.email" : $("#uMail").val()
				,"m.userName" : ""
				,"m.password" : $("#uPass").val()
				,"m.mClass" : "0"
				,"m.mobileNum" : $("#uMob").val()
				,"m.authCode" : $("#uAuthCode").val()
			}
			if(!util.isSafeMail(ajaxData["m.email"])){
				alert("请正确输入邮箱地址!")
				return
			}else{
				if(!/@(?!(yahoo\.(com\.cn|cn)))/.test(ajaxData["m.email"])){
					alert("雅虎中国邮箱已停止服务，请填写其他邮箱！");
					return
				}
			}
			var foundErr = false
			foundErr = !util.check(ajaxData["m.password"],{notempty : true,max:20,min:6,error:function(){alert('密码长度应为6~20字符');}})
			if(foundErr) return

			if(ajaxData["m.password"]!=$("#uPass2").val()){
				alert("两次输入的密码不一致!")
				return
			}

			/*foundErr = !util.check(ajaxData["m.mobileNum"],{regEx:"[\\d]{11}",error:function(){alert('请正确输入手机号码');}})
			if(foundErr) return*/

			if(util.isEmpty(ajaxData["m.mobileNum"])) {
				alert("请输入手机号码！");
				return
			} else {
				if(!util.isMobile(ajaxData["m.mobileNum"])) {
					alert("请输入正确的手机号码！");
					return
				}
			}

			if(util.isEmpty(ajaxData["m.authCode"])) {
				alert("请输入验证码!")
				return
			}
			if($("input#uAgree:checked",false).length!=1){
				alert("未同意《服务协议》!")
				return
			}
			$.ajax({
				url : "/touch/register.ujson?t="+(+new Date())
				,cache : false
				,data : ajaxData
				,type : "POST"
				,error : function(){
					alert('请求发送出错!')
					ui.mask.hide({id:'reg_mask'});
					ui.loading.hide({id:'reg_loading'});
				}
				,beforeSend : function(){
					ui.mask.show({id:'reg_mask',z:10});
					ui.loading.show({id:'reg_loading',z:12});
				}
				,success : function(data){
					var result = util.toJSON(data);
					ui.mask.hide({id:'reg_mask'});
					ui.loading.hide({id:'reg_loading'});
					//删除特定cookie
					util.cookie.remove('_fskw');
					util.cookie.remove('_fsrefer');
					util.cookie.remove('_fsuri');

					$.ajax({
						url:"/person/status.xhtml?t="+(+new Date())
						,success:function(){
							my.Person = {
								perUserName : jobcn.Person.perUserName
								,perAccountId : jobcn.Person.perAccountId
								,perEmail : jobcn.Person.perEmail
								,perName : jobcn.Person.perName
								,memberClass : jobcn.Person.memberClass
								,newMsgCount : jobcn.Person.newMsgCount
								,totalMsgCount : jobcn.Person.totalMsgCount
							}
							person.updateInfo()
						}
					})
					if(result.head.code==0){
						$("#yourName").html(result.username)
						$("#regOkPage").show()
						$("#regPage").hide()
						$("#goBack,#goHome").hide()
						$("#btn1").click(function(){
							$.ajax({
								url: "/person/resume/add.ujson?resumeName="+encodeURIComponent('我的简历')
								,type : "GET"
								,beforeSend : function(){
									ui.loading.show({id:'update_loading'});
									ui.mask.show({id:'update_mask'});
								}
								,error : function(){
									ui.loading.hide({id:'update_loading'});
									ui.mask.hide({id:'update_mask'});
									window.location.href="/touch/person/resume/myResumes.uhtml";
								}
								,success : function(data){
									ui.loading.hide({id:'update_loading'});
									ui.mask.hide({id:'update_mask'});
									var DATA = util.toJSON(data)
									if(DATA.success!=true){
										window.location.href="/touch/person/resume/myResumes.uhtml";
										return;
									}
									sessionStorage["resumeName"]='我的简历'
									window.location.href="/touch/person/resume/getSubResume.uhtml?m.resumeId="+DATA.resumeId;
								}
							})
						})
						$("#btn2").click(function(){ window.location.href="/touch/person/userCenter.uhtml" })
					}else{
						if("验证码错误!"==result.head.msg) {
							inner.getRegisterVerifyCode();
							$("#registerCode").focus();
						}
						alert(result.head.msg)
					}
				}
			})
		},
		getRegisterVerifyCode:function() {
			$("#registerCode").attr("src","/touch/registerVerifyCode.xhtml?t="+new Date().getTime());
		},
		clickVerifyCode:function(){
			$("#registerCode").click(function(){
				inner.getRegisterVerifyCode();
			});
		}
	}

	var out = {
		init: function(){
			person.updateInfo()
			$("#saveBtn,#saveA").click(inner.register)
			$("#uMail").on("blur",function(){
				$("#uName").val($(this).val())
			})
			inner.clickVerifyCode();
			require.async('http://hm.baidu.com/h.js?8180e13f3ce10ef1c58778a9785ec8fc');
		}
	}
	module.exports = out;
});
