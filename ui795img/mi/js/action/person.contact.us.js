/**
 * 应聘管理中的外发简历记录
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");
	var juicer = require("juicer");
	var tSilder = require("ui.touchSilder");
	var cache = {}
	//内部类
	var inner = {
		//输入验证
		checkInput : function(obj) {
			if(util.isEmpty(obj.name)){
				alert("请填写您的姓名！");
				$("#uName").focus();
		        return false;
			}
			
			if(util.isEmpty(obj.email)){
				alert("企业的邮件地址不能为空!");
				$("#uEmail").focus();
				return false;
			}
			
			if(!util.isSafeMail(obj.email)){
				alert("您输入的邮件地址格式不正确！");
				$("#uEmail").focus();
				return false;
			}
			
			if(util.isEmpty(obj.tel)){
				alert('请您填写联系方式！');
				$("#uTel").focus();
		        return false;
			}
			
			if(util.isEmpty(obj.topic)){
				alert("请填写主题！");
				$("#topic").focus();
		        return false;
			}
			
			if(util.isEmpty(obj.adContent)){
				alert("请填写邮件内容！");
				$("#adContent").focus();
		        return false;
			} else if(obj.adContent.length > 3000){
				alert("邮件内容不能超过3000个字符！");
				$("#adContent").focus();
		        return false;
			}
			
			return true;
		},
		showContactMe : function() {
			$("#contactMe").click(function(){
				$("#showContact").toggle();				
				if($("#showContact").css("display")=='block') {
					var options = {
						url:"/touch/person/message/contactMeInfo.ujson",
						//data:{},
						success : function(data){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							var json = util.toJSON(data);
							if(json.head.code == 1){
								$("#uName").val(json.head.perName);
								$("#uEmail").val(json.head.email);
								$("#uTel").val(json.head.mobilePhone);
							}
						}
					}
					inner.submit(options);
				} else {
					$("#uName").val('');
					$("#uEmail").val('');
					$("#uTel").val('');
				}
			});
		},
		contactUs : function() {
			$("#sendBtn").click(function(){
					var obj = {
					name : $("#uName").val(),
					email : $("#uEmail").val(),
					tel : $("#uTel").val(),
					topic : $("#topic").val(),
					type : $("#uType").val(),
					adContent  : $("#adContent").val()
				};
				if(inner.checkInput(obj)) {
					var options = {
						url:"/touch/person/message/contactUs.ujson",
						data:{"m.name":obj.name,"m.email":obj.email,"m.tel":obj.tel,"m.topic":obj.topic,"m.type":obj.type,"m.adContent":obj.adContent},
						success : function(data){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							var json = util.toJSON(data);
							if(json.head.code == 0){
								alert(json.head.msg);
							}else{
								alert("发送出现未知异常，请稍后重试！");	
							}
						}
					}
					inner.submit(options);
				}
			});
		},
		checkFeedbackInput : function(obj) {
			if(util.isEmpty(obj.mobileModel)){
				alert("手机型号不能为空!");
				$("#mobileModel").focus();
				return false;
			}
			
			if(obj.signal=='请选择'){
				alert("请选择网络信号!");
				return false;
			}
			
			if(obj.serviceProvider=='请选择'){
				alert("请选择运营商!");
				return false;
			}
			
			if(obj.browser=='请选择'){
				alert("请选择你使用的浏览器!");
				return false;
			}
			
			if(util.isEmpty(obj.suggest)){
				alert("请填写你的意见!");
				$("#suggest").focus();
				return false;
			}
			
			return true;
		},
		//用户反馈
		feedbackUs : function() {
			$("#feedbackBtn").click(function(){
				var obj = {
					userName : $("#uName").val(),
					email : $("#uEmail").val(),
					mobilePhone : $("#uTel").val(),
					mobileModel : $("#mobileModel").val(),
					signal : $("#signal").val(),
					serviceProvider : $("#serviceProvider").val(),
					browser : $("#browser").val(),
					suggest : $("#suggest").val(),
					fromUrl : $("#fromUrl").val(),
				};
				if(inner.checkFeedbackInput(obj)) {
					$.ajax({
						url:"/about/userFreeback.html?act=save",
						data:{
							"perName":obj.userName,
							"email":obj.email,
							"mobilePhone":obj.mobilePhone,
							//"m.mobileModel":obj.mobileModel,
							//"m.signal":obj.signal,
							//"m.serviceProvider":obj.serviceProvider,
							//"m.browser":obj.browser,
							"suggest":obj.suggest,
							"fromUrl":obj.fromUrl
						},
						type: 'POST',
						dataType: 'json',
						beforeSend: function() {
							ui.loading.show({id:'login_loading',z:9999});
							ui.mask.show({id:'login_mask',z:8888});
						},
						error: function() {
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
						},
						success : function(data){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							if(data.status == 1){
								alert(data.msg);
								$("#mobileModel").val('');
								$("#mobileModel").focus();
								$("#suggest").val('');
							}else{
								alert(data.msg);	
							}
						}
					});
				}
			});
		},
		submit: function(options){
			var config = {
				type : "POST",
				beforeSend : function(){
					ui.mask.show({id:'login_mask',z:10});
					ui.loading.show({id:'login_loading',z:12});
				},
				error : function(){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					alert('操作失败，请重新再试！');
				}
			};
			config = $.extend(config, options, {});
			$.ajax(config);				
		},
		law : function(){
			var hr = new tSilder( {id:'lawBody', 'auto':'-1', speed:200, timeout:3000, direction:'right'
				,after:function(i,o){
					$("#law_menu li").removeClass("active").eq(i).addClass("active");
					hrAT=i
				}
			});				
			var hrAT = 0
			$("#law_menu li").each(function(i){
				$(this).click(function(){
					if(i==hrAT) return;
					if(i<hrAT)
						hr.next(-1)
					else
						hr.next(1)
					hrAT=i;
				});
			})
		}
	}
	//对外公开的方法
	var out = {
		//应聘历史记录
		init : function(){
			person.updateInfo();
			inner.contactUs();
			inner.feedbackUs();
			inner.showContactMe();
			inner.law();
		}
	}
	module.exports = out;
});