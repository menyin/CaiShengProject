/**
 * --JOBCNX-2205 登录、注册、找回密码等页面样式优化
 * 旧版注册JS -> register.js
 * 新版注册JS -> person.register.js
 */
define(function(require, exports, module) {
    var $ = require('$');
    var Ui = require('ui.base');
    var Util = require('util');
    var person = require('action.person');
    var login = require('action.person.login');
    var out = {};

    var $regPage = $('#regPage');
    var $regOKPage = $('#regOkPage');
    var $btnReg = $('#saveBtn');
    var $allInputs = $regPage.find('input');

    out.init = function() {
        person.updateInfo();
        setupRegisterAction();
        login.initThirdLogin();
        sendCode();
        //require.async('http://hm.baidu.com/h.js?8180e13f3ce10ef1c58778a9785ec8fc');
    };

    /**
     * 绑定注册操作的相关事件
     * @return {[type]} [description]
     */
    function setupRegisterAction() {
        // 点击切换密码可见
        $regPage.on('tap', '.pwdVision', function(event) {
            event.stopPropagation();
            togglePassword($(this));
        });

        // 刷新验证码
        $regPage.on('tap', '#registerCode', function(event) {
            event.stopPropagation();
            refreshVerifyCode();
        });

        $regPage.on('change, input', 'input', function(event) {
            isReadyToRegister();
        });

        // 点击注册
        $btnReg.on('tap', function(event) {
            // if (!isReadyToRegister()) {
            //     alert('请完善注册信息！');
            //     return false;
            // }

            var regData = {
                'password': $regPage.find('#uPass').val(),
                'password2': $regPage.find('#uPass2').val(),
                'mobileNum': $regPage.find('#uMob').val(),
                'authCode': $regPage.find('#mobileZym').val(),
                'phoneCode': $regPage.find('#mobileZym').val(),
            };
            var validatePass = validateAction(regData);
            if (validatePass) {
                $.ajax({
                    type: 'POST',
                    url: 'api/web/person.api',
                    data: {
                        'act': 'register_m',
                        'txtAppType': 2,
                        'source': 'phone',
                        'txtMobile': regData.mobileNum,
                        'txtMobileCode': regData.authCode,
                        'txtPwd': regData.password,
                        'txtPwdRepeat': regData.password2,
                    },
                    dataType:"json",
                    beforeSend: function() {
                        Ui.mask.show({id: 'reg_mask', z:10});
                        Ui.loading.show({id: 'reg_loading', z:12});
                    },
                    complete: function() {
                        Ui.mask.hide({id: 'reg_mask'});
                        Ui.loading.hide({id: 'reg_loading'});
                    },
                    success: function(result) {

                        // 删除指定cookie
                        Util.cookie.remove('_fskw');
                        Util.cookie.remove('_fsrefer');
                        Util.cookie.remove('_fsuri');

                        if(result.status>0){
                            Util.cookie.set('resumeId', result.status, {path:"/"});
                            Util.cookie.set('subResumeId', result.status, {path:"/"});
                            Util.cookie.set('cnResumeId', result.status, {path:"/"});
                            sessionStorage["resumeId"] = result.status;
                            sessionStorage["subResumeId"] = result.status;
                            sessionStorage["cnResumeId"] = result.status;
                            var _data = {"base":{"mobile":regData.mobileNum}};
                            var _key = "r"+result.status+"s"+result.status;
                            sessionStorage[_key] = Util.toString(_data);
                            location.href = "/person/resume/resumeModule.html?act=base";
                        }else{
                            alert( result.msg || "注册失败！" );
                        }

                    },
                    error: function() {
                        alert('请求出错，请检查网络后重试！');
                    }
                });
            } else {
                return false;
            }
        });
    }


    function checkFields() {

    }

    /**
     * 注册成功
     * @return {[type]} [description]
     */
    function afterRegSuccess(result) {
        $regOKPage.find('#yourName').text(result.username);
        $regOKPage.show();
        $('#goBack, #goHome').hide();

        $regOKPage.find('#goToResume').on('tap', function(event) {
            $.ajax({
                url: '/person/resume/add.ujson',
                data: {
                    resumeName: encodeURIComponent('我的简历'),
                    t: (new Date()).getTime()
                },
                beforeSend: function() {
                    Ui.mask.show({id: 'update_mask', z:10});
                    Ui.loading.show({id: 'update_loading', z:12});
                },
                complete: function() {
                    Ui.mask.hide({id: 'update_mask'});
                    Ui.loading.hide({id: 'update_loading'});
                },
                success: function(res) {
                    var result = Util.toJSON(res);
                    if (result.success) {
                        sessionStorage['resumeName'] = '我的简历';
                        window.location.href = '/touch/person/resume/getSubResume.uhtml?m.resumeId=' + result.resumeId;
                    } else {
                        window.location.href = '/touch/person/resume/myResumes.uhtml';
                        return false;
                    }
                }
            });
        });

        $regOKPage.find('#goToMyAccount').on('tap', function(event) {
            window.location.href = '/touch/person/userCenter.uhtml';
        });
    }

    function refreshVerifyCode() {
        var refreshUrl = '/api/web/authCode.api?key=mPerMobile&t=' + (new Date()).getTime();
        $('#registerCode').attr('src', refreshUrl);
    }

    function togglePassword(icon) {
        if ( icon.hasClass('pwd_invisiable') ) {
            // 不可见 -> 可见
            icon.removeClass('pwd_invisiable').addClass('pwd_visiable');
            icon.siblings('input').attr('type', 'text');
        } else if ( icon.hasClass('pwd_visiable') ) {
            // 可见 -> 不可见
            icon.removeClass('pwd_visiable').addClass('pwd_invisiable');
            icon.siblings('input').attr('type', 'password');
        }
    }

    /**
     * 字段验证
     * @return {[type]} [description]
     */
    function validateAction(data) {
        //验证邮箱
        /*if ( Util.isEmpty(data['m.email']) ) {
            alert('请输入常用邮箱！');
            return false;
        } else if ( !Util.isSafeMail(data['m.email']) ) {
            alert('请输入有效的邮箱地址！');
            return false;
        } else if ( !/@(?!(yahoo\.(com\.cn|cn)))/.test(data["m.email"]) ) {
            alert('雅虎中国邮箱已停止服务，请填写其他邮箱！');
            return false;
        }*/

        //验证密码
        if ( Util.isEmpty(data['password']) ) {
            alert('请输入密码！');
            return false;
        }
        var isPwdOk = Util.check(data['password'], {
            max: 20,
            min: 6,
            error: function(str, vType, vTypeCondition) {
                alert('密码仅能6-20个英文字母、数字或下划线');
                // if (vType === 'min') {
                //     alert('密码少于' + vTypeCondition + '个字符，为了您的账号安全，请重新设置！');
                // }
                // if (vType === 'max') {
                //     alert(' 密码超出' + vTypeCondition + '个字符，请重新设置！')
                // }
            }
        });

        //验证手机号码
        if ( Util.isEmpty(data['mobileNum']) ) {
            alert('请输入手机号码！');
            return false;
        } else if ( !Util.isMobile(data['mobileNum']) ) {
            alert('请输入正确的手机号码！');
            return false;
        }

        //验证码
        if ( Util.isEmpty(data['authCode']) ) {
            alert('请输入验证码！');
            return false;
        }

        //手机验证码
        if ( Util.isEmpty(data['phoneCode']) ) {
            alert('请输入短信验证码！');
            return false;
        }

        if (!isPwdOk) return false;
        if ( Util.isEmpty( data['password2'] ) ) {
            alert('请再一次输入密码！');
            return false;
        }
        if ( data['password'] !==  data['password2'] ) {
            alert('两次输入的密码不一致！');
            return false;
        }

        //通过验证
        return true;
    }

    /**
     * 检查是否满足注册条件
     * @description 当所有输入项不为空时允许注册
     * @return {Boolean} 是否满足注册条件
     */
    function isReadyToRegister() {
        for (var i = 0, len = $allInputs.length; i< len; i++) {
            if ( Util.isEmpty($allInputs[i].value) ) {
                $btnReg.addClass('disabled');
                return false;
            }
        }

        $btnReg.removeClass('disabled');
        return true;
    }

    //发送验证码
    function updatePhoneTime  (){
        phoneTime = 180;
        isSendClick = false;
        phoneTimer = setInterval(function(){
            if(phoneTime <= 0){
                resetPhoneTime();
            } else {
                $('#sendCode').html(phoneTime + '秒重新获取');
            }
            phoneTime--;
        }, 1000);
    }
    function resetPhoneTime(){
        clearInterval(phoneTimer);
        phoneTimer = null;
        phoneTime = 0;
        $('#sendCode').html('重新发送手机验证码');
        $('#sendCode').removeAttr("disabled");
        $('#sendCode').attr("style", "");
    }
    function sendCode(){
        $("#sendCode").click(function(){
            var phoneTxt = $('#uMob').val();
             if ( Util.isEmpty(phoneTxt) ) {
                alert('请输入手机号码！');
                return false;
            } else if ( !Util.isMobile(phoneTxt) ) {
                alert('请输入正确的手机号码！');
                return false;
            }

            var code = $("#uAuthCode").val();

            if(Util.isEmpty(code)){
                alert('请输入验证码！');
                return;
            }

            $.ajax({
                url: "/api/web/user.api",
                type: "post",
                dataType: "json",
                data: {
                    "txtSeed": "mPerMobile",
                    "mtxtMobile": phoneTxt,
                    "key": "mPerMobile",
                    "act": "authCode",
                    "inputCode": code,
                },
                success: function(result){
                    if(result.status<1){
                        $('#sendCode').removeAttr("disabled");
                        alert(result.msg);
                        refreshVerifyCode();
                        return;
                    }
                    $('.verification_code').show();
                    $('#mobileZym').val('').focus();
                    $("#sendCode").attr("disabled", true);
                    $("#sendCode").attr("style", "background:#ccc;");
                    updatePhoneTime();
                }
            });
        });
    }

    module.exports = out;
});
