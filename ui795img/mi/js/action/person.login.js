/**
 * --JOBCNX-2205 登录、注册、找回密码等页面样式优化
 * 旧版登录JS -> login.js
 * 新版登录JS -> person.login.js  暂未添加旧版的登录绑定功能
 */
define(function(require, exports, module) {
    var $    = require('$');
    var Ui   = require('ui.base');
    var Box  = require('ui.mBox');
    var Util = require('util');
    var person = require('action.person');
    var out  = {};

    var OAUTH_SITE = {
        SINA: 6,
        QQ: 7,
        WEIXIN: 11
    };
    var REQUEST_TYPE = {
        LOGIN_REQ: 0,
        BIND_REQ: 1
    };

    //597第三方绑定url
    var _OAUTH_URLS = {
        6 : 'http://api.597.com/weibo/login.api',//SINA
        7 : 'http://api.597.com/qq/login.api',//QQ
    };

    // 旧版登录
    var URL = {
        // 第三方认证
        OAUTH: '/thirdLogin/getAuthorizationCode.xhtml',
        // 注册绑定
        REG_BIND: '/thirdLogin/registerUser.xhtml',
        // 绑定已有597账号
        BIND: '/thirdLogin/bindingAccount.xhtml'
    };

    var $loginName = $('#login_name');
    var $loginPwd  = $('#login_pwd');
    var $loginBtn  = $('#login_btn');
    var $loginCode = null;
    var $captcha = null;
    var $pwdVision = $('#pwd_vision');

    /**
     * 初始化登录操作
     * @return {[type]} [description]
     */
    out.initLogin = function() {
        /*getLoginStatus(function(isNeedLoginCode) {
            if (isNeedLoginCode) {
                showCaptcha();
                refreshCaptcha();
            }
        });*/

        setupLoginAction();
        // 当浏览器自动填充用户名密码时
        // 需要手动触发检查
        setTimeout(function() {
            $('#login_name').trigger('change');
        }, 100);
        //require.async('http://hm.baidu.com/h.js?8180e13f3ce10ef1c58778a9785ec8fc');
    };

    /**
     * 初始化第三方登录操作
     * @return {[type]} [description]
     */
    out.initThirdLogin = function() {
        $('.third_login a').on('click', function(event) {
            var site = $(this).data('site').toUpperCase();

            if (site !== 'WEIXIN') {
                // 新浪、QQ
                oauthLogin(REQUEST_TYPE.LOGIN_REQ, OAUTH_SITE[site]);
            } else if (Util.isWeixin) {
                // 微信登录（在微信浏览器内）
                oauthLogin(REQUEST_TYPE.LOGIN_REQ, OAUTH_SITE[site]);
            } else {
                var html = '<p>当前浏览器不支持微信登录，<span class="highlight">建议您下载597APP</span>，可获取更全面的求职资讯，同时支持微信登录。</p><div class="btn-group"><button class="btn box-ok">下载APP</button><button class="btn box-close">关闭</button></div>';
                var box = new Box(html, {
                    title: '提示',
                    width: $(window).width() - 60,
                    className: 'download-modal',
                    oncancel: function() {
                        box.close();
                    },
                    onok: function() {
                        var appLink = '/app.html';
                        if (Util.isIOS) {
                            appLink = 'https://itunes.apple.com/cn/app/597ren-cai-wang/id1084209397?mt=8';
                        } else if (Util.isAndroid) {
                            appLink = 'http://pic.'+__DOMAIN+'/appVersion/597/597v1.2.1.apk';
                        }
                        window.open(appLink, '_parent', 'toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500');
                    }
                });
                box.open();
            }
        });
    };

    /**
     * 设置登录的相关操作
     * @return {[type]} [description]
     */
    function setupLoginAction() {
        // 用户输入
        $('#login_name, #login_pwd').on('change input', function(event) {
            isReadyToLogin();
        });

        // 点击切换密码可见
        $pwdVision.on('click', function(event) {
            togglePassword();
        });

        // 点击登录
        $loginBtn.on('click', function(event) {
            // if ( !isReadyToLogin() ) {
            //     alert('请完善登录信息！');
            //     return false;
            // }

            if ( !checkFields() ) return false;

            var name = $loginName.val();
            var pwd = $loginPwd.val();
            var $autoLogin = $('#login_auto:checked', false);

			var back_url = $('#back_url').val()?$('#back_url').val():'/person';
			var jid = $("#jid").val();

			//'txtUsername='+user_name+'&txtPassword='+password+'&txtPersonAuthCode='+catcha+'&txtUserType=1&txtAppType=2&act=login&perAutoLogin='+perAutoLogin+'&cityId='+{$domainInfo['region_id']},
            var _data = {
                'username': name,
                'password': pwd,
				'userType': 1,
				'appType': 2,
                'loginType':0,
				'act': 'login',
                'perAutoLogin': $autoLogin.length > 0 ? 'on' : 0
            };
            if ($loginCode) _data['txtPersonAuthCode'] = $loginCode.val();

            $.ajax({
				url:'/api/web/person.api',
				type:'POST',
				data: _data,
				dataType:'json',
                beforeSend: function() {
                    Ui.mask.show({
                        id: 'login_mask',
                        z: 10,
                        f: function(mask) {
                            setTimeout(function() {
                                mask.click(function() {
                                    $(this).remove();
                                    Ui.loading.hide({id: 'login_loading'});
                                })
                            }, 3000);
                        }
                    });
                    Ui.loading.show({id: 'login_loading', z:12});
                },
                complete: function() {
                    Ui.loading.hide({id: 'login_loading'});
                    Ui.mask.hide({id: 'login_mask'});
                },
                success: function(json) {
                    var result = Util.toJSON(json);
					if(json.status>0){
						if(jid){
							$.getJSON('/api/web/job.api?act=join&jid={$_jid}', '' , function(data) {
								if (data && data.status) {
									if (data.status<1 && data.status==-100){
										alert("登录成功，但因简历不完整，所以职位申请失败！");
										window.location.href = back_url;
										return;
									}else if (data.status<1){
										alert("登录成功，但因("+data.msg+')申请失败！');
										window.location.href = back_url;
										return;
									}
									if (data.status>=1){
										alert("登录成功，职位申请成功！");
										window.location.href = back_url;
									}
								}
							});
						}else{
							window.location.href = back_url;
							return;
						}
					}else if(json.status==-35 || json.status==-36 || json.status==-37 || json.status==-38){
						//alert(json.msg);
						//var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
						//$('#imgCode').attr('src',src);
						//$('#verifycode').show();
                        alert(json.msg);
						if ( !$('#login-fields').find('.captcha').length ) showCaptcha();
                        refreshCaptcha();
					}else{
						alert(json.msg);
					}
					/*if(json.needAuthCode){
						var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
						$('#imgCode').attr('src',src);
						$('#verifycode').show();
					}*/
					return;

                    /*if (result.head.code == 0) {
                        alert(result.head.msg);

                        Util.cookie.set('p.login.last', name, {expires:365*24*60*60*1000});
                        Util.cookie.set('lastUID', result.body.perAccountId, {expires:365*24*60*60*1000});
                        // 删除特定cookie
                        Util.cookie.remove('_fskw');
                        Util.cookie.remove('_fsrefer');
                        Util.cookie.remove('_fsuri');
                        var url = /url\=(.+)[?&#]* /i.exec(decodeURIComponent(window.location.href));
						if ( url && url[1] ) {
							window.location.href = "http://" + window.location.hostname + url[1] + "?t=" + ~~(Math.random()*1000)
						} else {
							window.location.href="/touch/person/userCenter.uhtml?t=" + ~~(Math.random()*1000);
						}
                    } else {
                        alert(result.head.msg);
                        getLoginStatus(function(isNeedLoginCode) {
                            if (isNeedLoginCode) {
                                if ( !$('#login-fields').find('.captcha').length ) showCaptcha();
                                refreshCaptcha();
                            }
                        });
                    }*/
                }
            });
        });
    }

    function getLoginStatus(callback) {
        $.ajax({
            url: '/person/login_status.ujson?_t=' + Math.random(),
            data: {},
            success: function(resp) {
                var resp = Util.toJSON(resp);
                callback && callback(resp.switchKey);
            }
        });
    }

    function showCaptcha() {
        $('#login-fields').append('<li class="captcha"><input type="text" name="randomCode" placeholder="请输入验证码" id="login_captcha" value=""><img src="" data-src="/api/web/authCode.api?key=personLogin" class="img-captcha" id="captcha-img"></li>');
        $loginCode = $('#login_captcha');
        $captcha = $('#captcha-img');
        $captcha.on('click', refreshCaptcha);
        $loginCode.on('change input', function(event) {
            isReadyToLogin();
        });
    }

    function refreshCaptcha() {
        $captcha.attr('src', $captcha.attr('data-src') + '&_t=' + Math.random());
    }

    /**
     * 登录前检测
     * @description      用户名或密码为空，设置相应按钮状态，并返回false
     * @return {Boolean} 是否允许登录
     */
    function isReadyToLogin() {
        var isReady = Util.isEmpty($loginName.val()) || Util.isEmpty($loginPwd.val());
        if ( $loginCode ) isReady = isReady || Util.isEmpty( $loginCode.val() );

        if (isReady) {
            $loginBtn.addClass('disabled');
            return false;
        } else {
            $loginBtn.removeClass('disabled');
            return true;
        }
    }

    function togglePassword() {
        if ( $pwdVision.hasClass('pwd_invisiable') ) {
            // 不可见 -> 可见
            $pwdVision.removeClass('pwd_invisiable').addClass('pwd_visiable');
            $loginPwd.attr('type', 'text');
        } else if ( $pwdVision.hasClass('pwd_visiable') ) {
            // 可见 -> 不可见
            $pwdVision.removeClass('pwd_visiable').addClass('pwd_invisiable');
            $loginPwd.attr('type', 'password');
        }
    }

    function checkFields() {
        if ( Util.isEmpty($loginName.val()) ) {
            alert('请输入用户名或邮箱！');
            return false;
        }
        if ( Util.isEmpty($loginPwd.val()) ) {
            alert('请输入密码！');
            return false;
        }
        if ( $loginCode && Util.isEmpty($loginCode.val()) ) {
            alert('请输入验证码！');
            return false;
        }
        return true;
    }

    /**
     * 第三方登录
     * @param  {String} reqType  请求类型
     * @param  {String} siteType 第三方网站标识
     * @return {[type]}          [description]
     */
    function oauthLogin(reqType, siteType) {
            reqURL = _OAUTH_URLS[siteType];
            window.open(reqURL, "_parent","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500");

        // $.ajax({
        //     type: 'POST',
        //     url: URL.OAUTH,
        //     data: {
        //         current_loginuser_url: escape(window.location.href),
        //         reqType: reqType,
        //         type: siteType
        //     },
        //     dataType: 'json',
        //     success: function(res) {
        //         var reqUrl = (res || {}).reqUrl;
        //         if (!reqUrl) {
        //             alert('请求第三方登陆时发生错误，请重试！');
        //             return false;
        //         }
        //         reqUrl = reqUrl.replace(/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/, window.location.host);
        //         window.open(reqUrl, '_parent', 'toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500');
        //     }
        // });
    }

    module.exports = out;
});
