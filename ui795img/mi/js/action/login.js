define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,mBox = require('ui.mBox')
	$("#nav_person_center").addClass("active")

	// url
	var OAUTH_URL = "/thirdLogin/getAuthorizationCode.xhtml";
	//注册绑定
	var REG_BIND_URL = "/thirdLogin/registerUser.xhtml";
	//绑定已有597帐号
	var BIND_URL = "/thirdLogin/bindingAccount.xhtml"

	//第三方绑定url
	var _OAUTH_URLS = {
		6 : 'http://api.597.com/weibo/login.api',//SINA
		7 : 'http://api.597.com/qq/login.api',//QQ
	};
	// oauth site
	var OAUTH_SITE = {
		SINA 	: 6,
		QQ 		: 7,
		WEIXIN	: 11
	};
	// request type
	var REQUEST_TYPE = {
		LOGIN_REQ : 0,
		BIND_REQ  : 1
	};

	var Regex_EMAIL = /^[a-z0-9]+[-\w]*(?:\.[a-z0-9]+[-\w]*)*@[a-z0-9]+[-a-z0-9]*\.(?:(?:(?:[-a-z0-9\w]*\.)?(?:com|net|org|gov|edu|mil|biz|tel|xxx|int|info|name|aero|asia|mobi|coop|museum)(?:\.[a-z]{2})?)|[a-z]{2})$/i;
	var Regex_MOBILE = /^((13[0-9])|(14[0-9])|(15[0-9])|(16[0-9])|(17[0-9])|(18[0-9]))\d{8}$/;
	var touchThirdLogin = {
		isEmail : function(str,separater) {
			if(!str)return false;
			var re = Regex_EMAIL;
			var arr;
			if(separater)
			{
				arr=str.split(separater);
			}else{
				arr=[str]
			}
			for(var i=0;i<arr.length;i++)
			{
				if(arr[i].match(re) == null)
				{
					return false;
				}
			}
			return true;
		},
		isMobilePhone:function(mobilePhone){
			return mobilePhone.match(Regex_MOBILE);
		},
		bindAcc : function() {
			var username = $("#username").val();
			var pwd = $("#pwd").val();
			if(util.isEmpty(username)) {
				return alert("用户名不能为空！");
			}
			if(util.isEmpty(pwd)) {
				return alert("密码不能为空！");
			}
			$.ajax({
				type: "POST",
				url: "http://api.597.com/web/person.api",
				data: {
					'act': 'login',
					'hidThirdID': $('#hidThirdID').val(),
					'hidThirdLoginType': $('#hidThirdLoginType').val(),
					'username': username,
					'password': pwd,
					//'txtAuthCode':
					'appType':2,
					'userType':1,
					'loginType':0,
				},
				dataType: "json",
				beforeSend : function(){
					ui.mask.show({id:'account_bind',z:10});
					ui.loading.show({id:'account_bind',z:12});
				},
				error : function(){
					alert('请求出错!');
					ui.loading.hide({id:'account_bind'});
					ui.mask.hide({id:'account_bind'});
				},
				success: function(data) {
					ui.loading.hide({id:'account_bind'});
					ui.mask.hide({id:'account_bind'});
					if(data.status>0) {
						$("#account_bind").hide();
						$("#bind_success").show();
					} else {
						alert(data.msg || '绑定失败！');
					}
				}
			});
		},
		regBindAcc : function() {
			var mobileZym = $("#mobileZym").val();
			var mobile = $('#mobile').val();
			var password = $('#password').val();
			if(util.isEmpty(mobileZym)) {
				return alert("验证码不能为空！");
			}

			if(mobile===''|| !touchThirdLogin.isMobilePhone(mobile)){
				return alert("你输入的手机号码格式不对！");
			}

			if(util.isEmpty(password)) {
				return alert("密码不能为空！");
			}

			$.ajax({
				type: "POST",
				url: "http://api.597.com/web/person.api",
				data: {
					'act': 'register_m',
					'hidThirdID': $('#hidThirdID').val(),
					'hidThirdLoginType': $('#hidThirdLoginType').val(),
					'txtMobile': mobile,
					'txtMobileCode': mobileZym,
					'txtPwd': password,
					'txtAppType':2
				},
				dataType: "json",
				beforeSend : function(){
					ui.mask.show({id:'account_bind',z:10});
					ui.loading.show({id:'account_bind',z:12});
				},
				error : function(){
					alert('请求出错!');
					ui.loading.hide({id:'account_bind'});
					ui.mask.hide({id:'account_bind'});
				},
				success: function(data) {
					ui.loading.hide({id:'account_bind'});
					ui.mask.hide({id:'account_bind'});

					if(data.status>0){
						$("#account_bind").hide();
						$("#bind_success").show();
					}else{
						alert(data.msg || "绑定失败！");
					}
				}
			});
		}
	}
	var out = {
		init : function(){
			$("#login_name").val(util.cookie.get("p.login.last")||"")
			$("#login_btn").click(function(){
				var foundErr = false
					,autoChecked = $("#login_auto:checked",false)
					,name = $("#login_name").val()
					,pwd = $("#login_pwd").val()
					if(name=="" || pwd==""){ alert('请输入用户名/邮箱或密码'); return}
				$.ajax({
					url:"/touch/login_action.ujson?t="+(+new Date())
					,type : "POST"
					,data : {"m.name":name,"m.pw":pwd,"m.remember": (autoChecked.length>0 ? autoChecked.val() : 0) }
					,beforeSend : function(){
						ui.mask.show({id:'login_mask',z:10,f:function(mask){
							setTimeout(function(){
								mask.click(function(){
									$(this).remove();
									ui.loading.hide({id:'login_loading'});
								});
							},3000);
						}});
						ui.loading.show({id:'login_loading',z:12});
					}
					,error : function(){
						alert('请求出错!');
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
					}
					,success : function(data, status, xhr){
						var result = util.toJSON(data);
						if(result.head.code==0){
							alert(result.head.msg);
							util.cookie.set("p.login.last", name, {expires:365*24*60*60*1000});
							util.cookie.set("lastUID",result.body.perAccountId,{expires:365*24*60*60*1000})
							//删除特定cookie
							util.cookie.remove('_fskw');
							util.cookie.remove('_fsrefer');
							util.cookie.remove('_fsuri');
							var url = /url\=(.+)[?&#]*/i.exec(decodeURIComponent(window.location.href));
							if ( url && url[1] ) {
								window.location.href = "http://" + window.location.hostname + url[1] + "?t=" + ~~(Math.random()*1000)
							} else {
								window.location.href="/touch/person/userCenter.uhtml?t="+(+new Date());
							}
						}else{
							alert(result.head.msg);
						}
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
					}
				});
			});
		},
		// send oAuth login request as ajax
		oauthLogin : function(reqType, type){

			reqURL = _OAUTH_URLS[type];
			window.open(reqURL, "_parent","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500");

			/*$.ajax({
				type: "POST",
				url: OAUTH_URL,
				data: "current_loginuser_url=" + escape(location.href) + "&reqType=" + reqType + "&type=" + type,
				dataType: "json",
				success: function(data) {
					var reqURL = (data || {}).reqUrl;
					if(!reqURL) {
						return alert("请求第三方登陆时发生错误，请重试！");
					}
					reqURL = reqURL.replace(/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/, location.host);
					window.open(reqURL, "_parent","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500");
				}
			});*/
		},
		thirdLogin : function() {
			$(".third_login a").click(function(){
				var site = $(this).data('site').toUpperCase();

				// 点击非微信登录
				if (site !== 'WEIXIN') {
					out.oauthLogin(REQUEST_TYPE.LOGIN_REQ, OAUTH_SITE[site]);

				// 点击微信登录，且在微信浏览器内
				} else if (util.isWeixin) {
					out.oauthLogin(REQUEST_TYPE.LOGIN_REQ, OAUTH_SITE[site]);
				} else {
					var html = '<p>当前浏览器不支持微信登录，<span class="highlight">建议您下载597APP</span>，可获取更全面的求职资讯，同时支持微信登录。</p>' +
								'<div class="btn-group"><button class="btn box-ok">下载APP</button><button class="btn box-close">关闭</button></div>';
					var dlBox = new mBox(html, {
						title: '提示',
						width: $(window).width() - 60,
						className: 'download-modal',
						oncancel: function(){ dlBox.close(); },
						onok: function() {
							// 改变（非微信内点击微信登录时出现）APP下载链接
							var appLink = '/app.html';
							if (Util.isIOS) {
	                            appLink = 'https://itunes.apple.com/cn/app/597ren-cai-wang/id1084209397?mt=8';
	                        } else if (Util.isAndroid) {
	                            appLink = 'http://pic.'+__DOMAIN+'/appVersion/597/597v1.2.1.apk';
	                        }

							window.open(appLink, "_parent","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500");
						}
					});
					dlBox.open();
				}
			});
		},
		loginBind : function(type) {

			$("#regBindAccount .state a").click(function(){
				$("#bindAccount").show();
				$("#regBindAccount").hide();
				$("#bindAccount").parent().removeClass("QQ");
			});

			$("#bindAccount .state a").click(function(){
				$("#bindAccount").hide();
				$("#regBindAccount").show();
				$("#regBindAccount").parent().addClass("QQ");
			});
			//绑定已有的597账号
			$("#bindBtn").click(function(){
				touchThirdLogin.bindAcc();
			});
			$("#pwd").keydown(function(e){
				if(13==e.keyCode) {
					touchThirdLogin.bindAcc();
				}
			});
			//注册并绑定597帐号
			$("#regBindBtn").click(function(){
				touchThirdLogin.regBindAcc();
			});
			$("#email").keydown(function(e){
				if(13==e.keyCode) {
					touchThirdLogin.regBindAcc();
				}
			});
		},
		updatePhoneTime : function (){
			phoneTime = 180;
			isSendClick = false;
			$('#btnSendValidate').attr('style', 'background:#ccc;');
			phoneTimer = setInterval(function(){
				if(phoneTime <= 0){
					out.resetPhoneTime();
				} else {
					$('#btnSendValidate').html(phoneTime + '秒重新获取');
				}
				phoneTime--;
			}, 1000);
		},
		resetPhoneTime : function (){
			clearInterval(phoneTimer);
			phoneTimer = null;
			phoneTime = 0;
			$('#btnSendValidate').html('重新发送验证码');
			isSendClick = true;
			$('#btnSendValidate').attr('style', '');
		},
		sendCode : function (){
			$("#btnSendValidate").click(function(){
				if(!isSendClick) return;
				var phoneTxt = $('#mobile').val();
				if(phoneTxt=='') return alert('请填写手机号码');

				$.ajax({
					url: "http://api.597.com/web/user.api",
					type: "get",
					dataType: "json",
					async: true,
					data: {
						'act': 'mobile_check_reg',
						'type': 'reg',
						'_txtMobile': phoneTxt,
					},
					success: function(result){
						if(result.status<1){
							isSendClick = true;
							alert(result.msg);
							return;
						}
						$('#mobileZym').val('').focus();
						out.updatePhoneTime();
					}
				});
			});
		}
	}
	module.exports = out;
});
