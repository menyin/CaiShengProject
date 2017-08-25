define(function(require,exports,module) {
	var $ = require("$");
	//发送手机验证码
	var isSendClick = true;
	var out = {
		init : function(){
			out.sendCode();
		},
		updatePhoneTime : function (){
			phoneTime = 180;
			isSendClick = false;
			$('#btnSendValidate').attr('class', '_sendN');
			phoneTimer = setInterval(function(){
				if(phoneTime <= 0){
					out.resetPhoneTime(phoneTxt);
				} else {
					$('#btnSendValidate').html(phoneTime + '秒后可重新获取');
				}
				phoneTime--;
			}, 1000);
		},
		resetPhoneTime : function (){
			clearInterval(phoneTimer);
			phoneTimer = null;
			phoneTime = 0;
			$('#btnSendValidate').html('重新发送');
			$('#btnSendValidate').attr('class', '_sendY');
			isSendClick = true;
		},
		sendCode : function (){
			$("#btnSendValidate").click(function(){
				if(!isSendClick) return;
				var phoneTxt = $('#mobile').val();
				if(phoneTxt=='') return alert('请填写手机号码');

				var url = "/api/web/user.api",
				data = {
					'act':'mobileCheck',
					'_txtMobile': phoneTxt,
					//'type': 1,
				};
				$.ajax({
					url: url,
					type: "post",
					dataType: "json",
					async: true,
					data: data,
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