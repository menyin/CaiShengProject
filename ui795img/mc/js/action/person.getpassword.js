define(function(require,exports,module) {
	var $ = require("$");
	var util = require("util");
	var ui = require("ui.base");

	var myCache = {}
	var $allInputs = $('.getBackPassword').find('input');
	var $btnNext = $('#btn_nextStep');

	var ajaxFun = {
		ajax: function(options){
			var config = {
				timeout:10000,
				type : "POST",
				dataType:"json",
				beforeSend : function(){
					ui.loading.show({id:'update_loading',z:30});
					ui.mask.show({id:'update_mask',z:30});
				},
				error : function(){
					alert("发送请求失败！");
					ui.loading.hide({id:'update_loading'});
					ui.mask.hide({id:'update_mask'});
				},
				timeoutFunction:function(){
					alert("请求超时，请重试！");
				},
				success : function(){}
			}
			options = $.extend({}, config, options);
			$.ajax(options);
		}
	}


    function isReadyToNext() {
        for (var i = 0, len = $allInputs.length; i< len; i++) {
            if ( util.isEmpty($allInputs[i].value) ) {
                $btnNext.addClass('disabled');
                return false;
            }
        }

        $btnNext.removeClass('disabled');
        return true;
    }

    function isReadyToSendMail() {
    	if ( util.isEmpty($('#input_email').val()) ) {
            $('#btn_sendMail').addClass('disabled');
            return false;
        }
        $('#btn_sendMail').removeClass('disabled');
        return true;
    }

    function isReadyToNextReset() {
    	var $inputs = $('#input_code, #input_mobile');
    	var $btn = $('#btn_next');
    	for (var i = 0, len = $inputs.length; i< len; i++) {
            if ( util.isEmpty($inputs[i].value) ) {
                $btn.addClass('disabled');
                return false;
            }
        }
        $btn.removeClass('disabled');
        return true;
    }

    function isReadyToResetPassword() {
    	for (var i = 0, len = $allInputs.length; i< len; i++) {
            if ( util.isEmpty($allInputs[i].value) ) {
                $('#btn_submit').addClass('disabled');
                return false;
            }
        }

        $('#btn_submit').removeClass('disabled');
        return true;
    }

    function togglePassword(icon) {
    	if ( icon.hasClass('close') ) {
            // 不可见 -> 可见
            icon.removeClass('close').addClass('open');
            icon.siblings('input').attr('type', 'text');
        } else if ( icon.hasClass('open') ) {
            // 可见 -> 不可见
            icon.removeClass('open').addClass('close');
            icon.siblings('input').attr('type', 'password');
        }
    }

	/**确认帐号信息**/
	var sureAccount = {
		//验证表单
		validate: function(){
			var userName = $("#input_userName").val();
			var ranCode = $("#input_ranCode").val();
			/**用户选择找回密码的方式 1用户名 2注册邮箱**/
			var selectType = $("#select_type").val();
			//选择用户名的方式找回密码
			if(selectType == 1){
				if(util.isEmpty(userName)){
					alert("用户名不能为空！");
					return;
				}

				if(util.isEmpty(ranCode)){
					alert("验证码不能为空！");
					return;
				}
			}else if(selectType == 2){
				if(util.isEmpty(userName)){
					alert("注册邮箱不能为空！");
					return;
				}

				if(!util.isSafeMail(userName)){
					alert("注册邮箱格式不正确！");
					return false;
				}

				if(util.isEmpty(ranCode)){
					alert("验证码不能为空！");
					return;
				}
			}
			//ajax验证用户名或验证码是否正确
			var options = {
				url: "/touch/person/getpassword/sureAccount.ujson",
				data:{"inputValue":userName, "way":selectType, "code":ranCode},
				success: function(json){
					var code = json.code;
					if(!json.success){
						if(code == 401){
							alert("您输入的用户名不存在！");
						}else if(code == 402){
							alert("您输入的注册邮箱不存在！");
						}else if(code == 400){
							alert("您输入的验证码不正确！");
						}
						$("#registerCode").trigger('click');
					}else{
						if(code == 200){
							window.location.href = "/touch/person/getpassword/identityCheck.xhtml?chkCode="+ranCode+"&userName="+userName+"&selectType="+selectType;
						}
					}
					ui.loading.hide({id:'update_loading'});
					ui.mask.hide({id:'update_mask'});
				}
			}
			ajaxFun.ajax(options);
		},

		initForm: function(){
			$("#input_userName").val('');
			$("#input_ranCode").val('');
			isReadyToNext();
		},

		init: function(){
			$("#select_type").change(function(){
				sureAccount.initForm();
				if($(this).val() == 1){
					$("#input_userName").attr("placeholder", "请输入用户名");
				}else if($(this).val() == 2){
					$("#input_userName").attr("placeholder", "请输入注册邮箱");
				}
			});
			$("#registerCode").click(function(){
				$("#registerCode").attr("src", "/touch/registerVerifyCode.xhtml?_t="+new Date().getTime());
				$("#input_ranCode").val('');
				isReadyToNext();
			});
			$("#btn_nextStep").click(function(){
				sureAccount.validate();
			});
			$('#input_userName, #input_ranCode').on('change, input', function() {
				isReadyToNext();
			});
		}
	};

	//身份认证
	var identityCheck = {
		init: function(){
			isSendClick = true;
			if ($("#hid_reSetType").val() === '2') {
				$('#btn_sendMail').removeClass('disabled');
			}

			$("#li_byMail").click(function(){
				$(this).addClass("active");
				$("#li_byMobile").removeClass("active");
				$("#li_byMobile_body").addClass("hide");
				$("#li_byMail_body").removeClass("hide");
				$("#hid_way").val(1);
				$("#div_email").show();
				$("#div_mobile").hide();
			});
			$("#li_byMobile").click(function(){
				$(this).addClass("active");
				$("#li_byMail").removeClass("active");
				$("#li_byMobile_body").removeClass("hide");
				$("#li_byMail_body").addClass("hide");
				$("#hid_way").val(0);
				$("#div_email").hide();
				//$("#div_mobile").show();
			});
			$('#input_email').on('change, input', function() {
				isReadyToSendMail();
			});
			$('#input_mobile, #input_code').on('change, input', function() {
				isReadyToNextReset();
			});
			identityCheck.validate();
			identityCheck.getvalidateCode();
		},
		updatePhoneTime : function (){
			phoneTime = 180;
			isSendClick = false;
			$('#btn_getCode').attr('style','background:#ccc;');
			phoneTimer = setInterval(function(){
				if(phoneTime <= 0){
					identityCheck.resetPhoneTime();
				} else {
					$('#btn_getCode').html(phoneTime + '秒重新获取');
				}
				phoneTime--;
			}, 1000);
		},
		resetPhoneTime : function (){
			clearInterval(phoneTimer);
			phoneTimer = null;
			phoneTime = 0;
			$('#btn_getCode').html('重新发送验证码');
			isSendClick = true;
			$('#btn_getCode').attr('style','');
		},
		//获取手机验证码
		getvalidateCode: function(){

			$("#btn_getCode").click(function(){
				if(!isSendClick) return;
				var mobile_number = $("#input_mobile").val();
				if(util.isEmpty(mobile_number)){
					alert("手机号码不能为空！");
					return;
				}
				if(!(/^1[3|5|8|4|7|9][0-9]\d{8}$/.test(mobile_number))){
					alert("手机号码格式不正确！");
					return;
				}
				var txtMobileCode = $("#txtMobileCode").val();
				if(util.isEmpty(txtMobileCode)){
					alert("验证码不能为空！");
					return;
				}
				$.ajax({
					url: "/api/web/user.api",
					type: "GET",
					dataType: "json",
					data: {
						'act':'passwordAuthCode',
						'txtMobilPhone': mobile_number,
						'txtMobileCode': txtMobileCode,
					},
					success: function(json){
						if(json && json.status<1){
							isSendClick = true;
							alert(json.msg);
							return;
						}
						$('#div_mobile').show();
						$('.inputText_code').show();
						$('#input_code').val('').focus();
						identityCheck.updatePhoneTime();
					}
				});

			});
		},

		validate: function(){
			$("#btn_sendMail").click(function(){
				//通过email验证
				var found_way = $("#hid_way").val();

				var input_email = $("#input_email").val();

				var reSetType = $("#hid_reSetType").val();

				if(reSetType != 2){
					//1.验证null
					if(util.isEmpty(input_email)){
						alert("注册邮箱不能为空！");
						return;
					}
					//2.验证邮箱的格式
					if(!util.isSafeMail(input_email)){
						alert("注册邮箱格式不正确，请输入正确的邮箱！");
						return;
					}
				}
				//3.匹配邮箱是否正确
				//ajax验证用户名或验证码是否正确
				var options = {
					url: "/touch/person/getpassword/sendValidateMail.ujson",
					data:{"way":1, "userName":$("#hid_userName").val(), "email":$("#input_email").val(), "perAccountId":$("#hid_perAccountId").val(), "reSetType":$("#hid_reSetType").val()},
					success: function(json){
						var code = json.code;
						if(!json.success){
							if(code == 401){
								alert("您输入的注册邮箱不匹配！");
							}
						}else{
							alert("验证邮件已经成功发送到您注册的邮箱！");
						}
						ui.loading.hide({id:'update_loading'});
						ui.mask.hide({id:'update_mask'});
					}
				}
				ajaxFun.ajax(options);
			});

			$("#btn_next").click(function(){
				var mobile_number = $("#input_mobile").val();
				if(util.isEmpty(mobile_number)){
					alert("手机号码不能为空！");
					return;
				}
				if(!util.isMobile(mobile_number)) {
					alert('请输入正确的手机号码！');
					return;
				}
				var mobile_code = $("#input_code").val();
				if(util.isEmpty(mobile_code)){
					alert("短信验证码不能为空！");
					return;
				}
				if(!/^\d{4}$/.test(mobile_code)){
					alert("短信验证码必须为4位数字！");
					return;
				}
				var txtMobileCode = $("#txtMobileCode").val();
				if(util.isEmpty(txtMobileCode)){
					alert("验证码不能为空！");
					return;
				}
				/*var options = {
					url: "/touch/person/getpassword/validateToken.ujson",
					data:{"token":$("#input_code").val(),"perAccountId":$("#hid_perAccountId").val()},
					success: function(json){
						var code = json.code;
						if(code == 401){
							alert("短信验证码输入错误！");
						}else if(code == 402){
							alert("验证码已经失效！");
						}else if(code == 200){
							window.location.href = "/touch/person/getpassword/jump2ResetPage.xhtml?token="+$("#input_code").val()+"&perAccountId="+$("#hid_perAccountId").val();
						}
						ui.loading.hide({id:'update_loading'});
						ui.mask.hide({id:'update_mask'});
					}
				}
				ajaxFun.ajax(options);*/
				$.ajax({
					url: "/api/web/user.api?act=byPassword",
					type: "POST",
					dataType: "json",
					data: {
						'operate': 'phone',
						'txtMobilPhone': mobile_number,
						'txtMobileCode': txtMobileCode,
						'txtMobilPhoneCode': mobile_code,
					},
					success: function(json){
						if(json.status==1){
							location.href = "/about/getPassword.html?phone="+json.phone+"&code="+json.auth_code;
							return;
						}
						alert(json.msg);
					}
				});
			});
		}
	}

	var reSet = {
		init: function(){
			$("#btn_submit").click(function(){
				var new_pwd = $("#input_newpwd").val();
				var sure_pwd = $("#input_surepwd").val();
				if(util.isEmpty(new_pwd)){
					alert("新密码不能为空！");
					return;
				}
				if(util.isEmpty(sure_pwd)){
					alert("确认密码不能为空！");
					return;
				}
				if(new_pwd != sure_pwd){
					alert("新密码与确认密码输入不一致！");
					return;
				}
				if(!(/^\w{6,20}$/.test(new_pwd))){
					alert("新密码只能包含字母、数字或下划线，6~20个英文字符。！");
					return;
				}
				$.ajax({
					url: "/api/web/user.api?act=modPassword",
					type: "POST",
					dataType: "json",
					data: {
						'hidMobilePhone': $('#phone').val(),
						'hidAuthCode': $('#code').val(),
						'txtPassword': new_pwd,
						'txtRepeatPassword': sure_pwd,
					},
					success: function(json){
						if(json.status==1){
							alert("密码重置成功！");
							location.href = "/login.html";
							return;
						}
						alert(json.msg);
					}
				});
			})
			//切换密码可见
			$('.getBackPassword .pwd_vision').on('tap', function(event) {
				event.stopPropagation();
				togglePassword($(this));
			});
			$('.getBackPassword input').on('change, input', function() {
				isReadyToResetPassword();
			});
		}
	}

	var finish = {
		init: function(){
			$("#btn_login").click(function(){
				window.location.href = "/login.html";
			});
		}
	}

	var out = {
		initSureAccount: function(){
			sureAccount.init();
		},

		initIdentityCheck: function(){
			identityCheck.init();
		},

		initReset: function(){
			reSet.init();
		},

		initFinish: function(){
			finish.init();
		}
	}
	module.exports = out;
});
