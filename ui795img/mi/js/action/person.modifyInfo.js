/**
 * 个人中心修改个人基本信息
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");
	var inner = {
		bind: function(selector, action, fn){
			if($(selector)){
				$(selector).bind(action, fn)
			}
		},
		validate : function(str, column, options){
			var obj = {
				error:function(str,type,val){
					switch(type){
						case "empty":
							alert(column+"不能为空！");
							break;
						case "min":
							//alert(column+"的长度应为"+val+"个字符！");
							if(column=='用户名') {
								alert("请填写正确的用户名，不少于3字符");
							} else {
								alert(column+"长度应为6~20个字符");
							}
							break;
						case "max":
							alert(column+"长度应为6~20个字符");
							break;
						case "regEx":
							if(column=='用户名') {
								alert(column+"只能由英文字母，数字或者下划线组成");
							} else {
								alert(column+"只能由英文字母，数字或者下划线组成");
							}
							break;
						case "regex":
							alert(column+"中不能包含中文字符");
							break;
					}
				}
			};
			var obj = $.extend(obj, options, {});
			return util.check(str, obj);
		},
		isExistUserName: function(userName){
			var options = {
				url:"/touch/person/info/verifyEmailOrUserName.ujson",
				data:{"m.userName":userName,"m.verifyType":1},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					var json = util.toJSON(data).head;
					if(json.code == 0){
						//alert(json.code || json.msg);
						inner.upUserName(userName);
					}else{
						alert(json.msg);
					}
				}
			};
			inner._submit(options);
		},
		isExistEmail: function(email){
			var options = {
				url:"/touch/person/info/verifyEmailOrUserName.ujson",
				data:{"m.email":email,"m.verifyType":2},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					var json = util.toJSON(data).head;
					if(json.code == 0){
						//alert(json.code || json.msg);
						inner.upEmail(email);
					}else{
						alert("该邮箱地址已被注册");
					}
				}
			};
			inner._submit(options);
		},
		upUserName: function(userName){
			var options = {
				url:"/touch/person/info/updateUserName.ujson",
				data:{"m.userName":userName},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					var json = util.toJSON(data).head;
					if(json.code == 0){
						alert(json.msg || "用户名修改成功！");
						var location = window.location;
						location.href = location.protocol + '//' + location.host + '/touch/person/userCenter.uhtml?t='+ Math.random() +'#tab2'
					}else{
						alert(json.msg || "用户名修改失败！");
					}
				}
			};
			inner._submit(options);
		},
		upPwd: function(password, oldPassword){
			var options = {
				url:"/touch/person/info/updatePwd.ujson",
				data:{"m.password":password,"m.oldPassword":oldPassword},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					var json = util.toJSON(data).head;
					if(json.code == 0){
						alert("密码已修改成功！");
						window.history.back();
					}else if(json.code == -2) {
						alert("旧密码输入不正确！");
					}else if(json.code == -3) {
						alert("密码长度为6~20字符！");
					}else if(json.code == -4) {
						alert("密码必须为英文字母、数字或下划线！");
					}else if(json.code == -5) {
						alert("请输入您的旧密码！");
					}else if(json.code == -100) {
						alert("您的密码存在安全隐患，请重置密码！");
					}
				}
			};
			inner._submit(options);
		},
		upEmail: function(email){
			var options = {
				url:"/touch/person/info/updateEmail.ujson",
				data:{"m.email":email},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					var json = util.toJSON(data)
					if(json.success){
						alert(json.msg || "邮箱已修改成功！")
						var location = window.location;
						location.href = location.protocol + '//' + location.host + '/touch/person/userCenter.uhtml?t='+ Math.random() +'#tab2'
					}else{
						alert(json.msg || "邮箱修改失败！")
					}
				}
			};
			inner._submit(options);
		},
		upMobile: function(mobile){
			var options = {
				url:"/person/account/update_base_info_single.ujson",
				data:{"val":mobile,"type":2},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					var json = util.toJSON(data)
					if(json.status){
						alert("手机号码修改成功！")
						var location = window.location;
						location.href = location.protocol + '//' + location.host + '/touch/person/userCenter.uhtml?t='+ Math.random() +'#tab2'
					}else{
						alert("手机号码修改失败！")
					}
				}
			}
			inner._submit(options)
		},
		_submit: function(options){
			var config = {
				url:"",
				type : "POST",
				data : {},
				beforeSend : function(){
					ui.mask.show({id:'login_mask',z:10});
					ui.loading.show({id:'login_loading',z:12});
				},
				error : function(){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					alert('操作失败，请重新再试！');
				},
			};
			config = $.extend(config, options, {});
			$.ajax(config);
		}
	}
	var out = {
		init:function(flag){
			person.updateInfo();
			//修改用户名
			if(flag == 1){
				var fn = function(){
					var str = $("#input_userName").val();
					var rtn = inner.validate(str, "用户名", {"empty":true,"min":6,"max":80,"regEx":"^\\w+$"});
					if(rtn){
						inner.isExistUserName(str);
						//inner.upUserName(str);
					}
				}
				inner.bind("#save_userName", "click", fn);
				inner.bind("#save_userName_top", "click", fn);
			}else if(flag == 2){
				//修改密码
				var fn = function(){
					var a = $("#input_oldpwd").val();
					var b = $("#input_newpwd").val();
					var c = $("#input_surepwd").val();
					if(!inner.validate(a, "旧密码", {"empty":true,"min":6,"max":20,"regex":"^[^\\u4e00-\\u9fa5]+$"})){
						return;
					}
					if(!inner.validate(b, "新密码", {"empty":true,"min":6,"max":20,"regex":"^[^\\u4e00-\\u9fa5]+$"})){
						return
					}
					if(!inner.validate(c, "确认密码", {"empty":true,"min":6,"max":20,"regex":"^[^\\u4e00-\\u9fa5]+$"})){
						return;
					}
					if(b != c){
						alert("两次输入的密码不一致")
						return;
					}
					inner.upPwd(b, a);
				}
				inner.bind("#save_password", "click", fn);
				inner.bind("#save_password_top", "click", fn);
			}else if(flag == 3){
				var fn = function(){
					var email = $("#input_email").val();
					if(util.isEmpty(email)) {
						alert("请输入邮箱地址");
						return
					}
					if(!util.isSafeMail(email)){
						alert("请正确填写邮箱地址!");
						return;
					};
					//inner.upEmail(email);
					inner.isExistEmail(email);
				};
				inner.bind("#save_email", "click", fn);
				inner.bind("#save_email_top", "click", fn);
			}else if( flag == 4 ){
				var fn = function () {
					var mobile = $("#input_mobile").val();
					if(util.isEmpty(mobile)) {
						alert("请输入手机号码");
						return
					}
					if ( !/^1\d{10}$/.test(mobile) ) {
						alert("请输入正确的手机号码");
						return;
					}
					inner.upMobile(mobile);
				};

				inner.bind("#save_mobile", "click", fn);
				inner.bind("#save_mobile_top", "click", fn);
			}
		}
	}

	out.validate = inner.validate;

	module.exports = out;
});