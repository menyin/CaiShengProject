<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>597人才网_求职中心_账户管理</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20140930" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
	</script>

	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
	<script type="text/javascript">
		jpjs.config({
			combos: {
				'@editResume': [
					'@validator', 'product.resume.editResume', 'product.resume.editMutilResume'
				]
			}
		});
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
	</script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=20140312"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_hovchange.js?v=20140312"></script><!--指向改变class-->
	<style type="text/css">
		html{overflow-y: scroll;}
	</style>
</head>

<body class="noResize minMain">
	<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000 clearfix">
		<!--#include virtual="/templates/default/person/menu.htm" -->
		<div class="right-main">
			<ul class="clearfix menu-tit">
				<li id="cssIndex"><a href="/person/account/">账号管理</a></li>
				<li id="cssInfo"><a href="/person/account/info.html">基本资料</a></li>
				<li id="cssPhoto"><a href="/person/account/photo.html">上传头像</a></li>
				<li id="cssPassword"><a href="/person/account/password.html">修改密码</a></li>
				<li class="right"><a href="/person/resume/privacy.html" target="_blank">隐私设置</a></li>
			</ul>

			<div class="alert-warniong mgt15">
				<a href="javascript:void(0)" class="close">×</a>
				绑定手机号码、完成邮箱验证，可以增加求职反馈的及时性和准确性，从而提高求职成功率
			</div>
			<p class="gray9 acc-manage"><span class="gray3">登录用户名：</span>{$user['username']} <a href="javascript:;" id="modUsername">修改用户名</a>
			<a href="/person/account/password.html">修改密码</a></p>
			<!--
			<p class="gray9 acc-manage"><span class="gray3">上次登录时间：</span>2015-01-13 08:37:52<a href="/person/account/password.html">修改密码</a></p>
			-->
			<dl class="acc-manage-item clearfix"><!--图标共五个，class名i1 至 i5为亮色;i1_g 至 i5_g为灰色-->
				<dt><i class="{$email['class']}"></i>登录邮箱</dt>
				<dd class="text">{$email['title']}</dd>

				<dd class="oper">
				<!--{if $email['class']=='i2'}-->
					<a href="javascript:" id="yzEmail">立即验证</a>
				<!--{/if}-->
				<!--{if $email['class']=='i3'}-->
					<a href="" class="mgl20" id="updEmail">添加邮箱</a>
				<!--{else}-->
					<a href="" class="mgl20" id="updEmail">修改</a>
				<!--{/if}-->
				</dd>
			</dl>
			<dl class="acc-manage-item clearfix">
				<dt><i class="{$mobile['class']}"></i>绑定手机</dt>
				<dd class="text">{$mobile['title']}</dd>
				<dd class="oper">
					<!--<a href="javascript:" id="setPhone">设置</a>-->
					<!--{if $mobile['class']=='i3'}-->
						<a href="javascript:" id="bindPhone">立即绑定</a>
					<!--{else}-->
						<a href="javascript:" id="updPhone">修改</a>
					<!--{/if}-->
				</dd>

			</dl>
			<dl class="acc-manage-item clearfix">
				<dt><i class="{$qqid['class']}"></i>QQ</dt>
				<dd class="text">{$qqid['title']}</dd>
				<!--{if $qqid['class']=='i4_g'}-->
					<dd class="oper"><a href="http://api.597.com/qq/login.api">立即绑定</a></dd>
				<!--{/if}-->
				<!--{if $qqid['class']=='i4'}-->
					<dd class="oper"><a href="javascript:void(0)" id="unlinkQQ">解绑</a></dd>
				<!--{/if}-->
			</dl>
			<dl class="acc-manage-item clearfix">
				<dt><i class="{$wbid['class']}"></i>新浪微博</dt>
				<dd class="text">{$wbid['title']}</dd>
				<!--{if $wbid['class']=='i5_g'}-->
					<dd class="oper"><a href="http://api.597.com/weibo/login.api">立即绑定</a></dd>
				<!--{/if}-->
				<!--{if $wbid['class']=='i5'}-->
					<dd class="oper"><a href="javascript:void(0)" id="unlinkWeiBo">解绑</a></dd>
				<!--{/if}-->
			</dl>
			<dl class="acc-manage-item clearfix">
				<dt><i class="{$wxid['class']}"></i>微信</dt>
				<dd class="text">{$wxid['title']}</dd>
				<!--{if $wxArr}-->
					<dd class="oper"><a href="javascript:void(0)" id="unlinkWx">解绑</a></dd>
				<!--{/if}-->
			</dl>
		</div>
	</div>

	<!--{template person/footer}-->

<script>
jpjs.use('@validator, @confirmBox, @form' ,function(m){
/*创建新简历*/
	var confirmBox = m['widge.overlay.confirmBox'],
		Dialog = m['widge.overlay.jpDialog'],
		verifier = m['module.verifier'],
		validators = m['widge.validator.form'],
		$ = m['jpjob.jobForm'],
		util = m['base.util'],
		pWidth = 70,
		fontWidth = 18;

	var email = new Dialog({
			idName: 'set-email',
			title: '设置登录邮箱',
			close: 'x',
			isAjax: false,
			initHeight: 100,
			width: 480
		});
	//设置邮箱
	$("#setEmail").click(function() {
		var content = '<div style="padding:10px"><p class="alert-warniong">设置成功后，您可以使用该邮箱登录账号、找回密码和接收求职反馈</p><form style="padding:30px 0"><dl class="clearfix"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">常用邮箱<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:300px"><input type="text" class="text" style="width:250px" id="email-value" /><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl><dl class="clearfix mgt15"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">验证码<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:320px"><input type="text" class="text" style="vertical-align:middle" id="yzm-value" /><img data-seed="54b4912b2ff0a" src="/certification/verify/seed-54b4912b2ff0a" style="vertical-align:middle;margin:0 5px" /><a class="imgCatcha" href="javascript:void(0)">换一张</a><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl></form></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnSubmit">确定</a><a class="btn3 btnsF12" href="#" id="btnAttentClose">取消</a></div>';
		email.setContent({content: content});
		email.show();
		return false;
	});
	//验证邮箱
	$("#yzEmail").click(function(){
		email.setContent({
			content:'<div style="padding:10px"><p class="alert-warniong">系统将发送验证邮件到您设置的邮箱；点击邮箱中的链接即可完成验证</p><form style="padding:30px 0"><dl class="clearfix"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">常用邮箱<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:320px"><strong style="font-size:14px">{$user[email]}</strong><input type="hidden" id="email-value" value="{$user[email]}" /></dd></dl><dl class="clearfix mgt15"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">验证码<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:320px"><input type="text" class="text" style="vertical-align:middle" id="yzm-value" /><img data-seed="yzEmail" src="/api/web/authCode.api?key=yzEmail" style="vertical-align:middle;margin:0 0px" /><a class="imgCatcha" href="javascript:void(0)">换一张</a><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl></form></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnSubmit">发送验证邮箱</a><a class="btn3 btnsF12" href="#" id="btnAttentClose">取消</a></div>',
			title:"邮箱验证"
		});
		email.show();
		return false;
	});
	//修改邮箱
	$("#updEmail").click(function(){
		email.setContent({
			content:'<div style="padding:10px"><p class="alert-warniong">修改后的邮箱将作为新的登录账号</p><form style="padding:30px 0"><dl class="clearfix"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">新的邮箱<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:300px"><input type="text" class="text" style="width:250px" id="email-value" value="" /><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl><dl class="clearfix mgt15"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">验证码<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:320px"><input type="text" class="text" style="vertical-align:middle" id="yzm-value" /><img data-seed="updEmail" src="/api/web/authCode.api?key=updEmail" style="vertical-align:middle;margin:0 0px" /><a class="imgCatcha" href="javascript:void(0)">换一张</a><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl></form></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnSubmit">发送验证邮箱</a><a class="btn3 btnsF12" href="#" id="btnAttentClose">取消</a></div>',
			title: '修改邮箱'
		});
		email.show();
		return false;
	});
	$("#btnSubmit").live("click",function(){
		var em = $("#email-value"),
			yzm = $("#yzm-value");

		if(em.length){
			if(!verifier.required(em)){
				em.next(".msg").html("请输入邮箱地址");
				return false;
			}else if(!verifier.email(em)){
			 	em.next(".msg").html("请输入正确的邮箱地址");
			 	return false;
			}else{
				em.next(".msg").html("");
			}
		}
		if(!verifier.required(yzm)){
			yzm.parent("dd").find(".msg").html("请输入验证码");
			return false;
		} else {
			yzm.parent("dd").find(".msg").html("");
		}
		$.ajax({
			url : "/api/web/person.api",
			type : "post",
			dataType : "json",
			data : {
				"act" : 'modUserInfo',
				"txtPageEmail" : em.val(),
				"txtEmailAuthCode" : yzm.val(),
				"type" : yzm.next().attr("data-seed")
			},
			success : function(json){
				if (json.status<1) {
					yzm.parent("dd").find(".msg").html(json.msg);
				//状态小于1时为执行不成功
					//if (json.type == 1) {
					//type为1时表示邮箱验证不成功
						//em.next(".msg").html(json.msg);
					//} else {
					//否则验证码验证不成功
						//yzm.parent("dd").find(".msg").html(json.msg);
					//}
				} else {
					confirmBox.timeBomb(json.msg, {
						name : "success",
						timeout : 1000,
						width : 196
					});
					//window.location.reload();

					email.setContent('<div style="padding:15px"><p style="font-weight:bold;font-size:14px;color:#579f42;margin-left:70px;margin-top:30px">验证邮件已发送至  '+json.email+'</p><p style="color:#999;margin-left:70px;margin-top:10px">请尽快登录您的邮箱点击邮件中的验证链接完成验证；验证邮件48小时内有效</p><div style="padding:10px;margin-top:40px;background-color:#eee;line-height:25px;color:#666"><strong>没收到邮件？</strong><br />1、请检查您的垃圾邮件或者广告邮件夹，邮件有可能被误认为垃圾或者广告邮件；<br />2、如果仍然长时间没有收到邮件，建议您将post@597.com添加到邮箱的联系人白名单后，并重新验证邮箱</div></div>').resetSize(600);
					email.on('closeX', function(){
						window.location.reload();
					});

				}
			}
		})
		return false;
	});
	$("#btnAttentClose").live('click', function(){
		email.hide();
		return false;
	});


	//手机号码交互处理的逻辑代码
	var phone = new Dialog({
			idName: 'set-phone',
			title: '设置手机号码',
			close: 'x',
			width: 480
		}),
		phoneHTMLTemplate = {
			phoneSetting: {
				warniong: '设置成功后，您可以使用该手机号码登录账号、找回密码和接收面试通知',
				name: '手机号码',
				value: ''
			},
			phoneBinding: {
				warniong: '绑定完成后，您可以使用该手机号码登录账号、找回密码',
				name: '手机号码',
				value: '{$user[mobile]}'
			},
			phoneModifying: {
				warniong: '提示：当前操作会同步修改简历中的联系方式',
				name: '新的手机号码',
				value: ''
			}
		},
		phoneHTML = [
			'<div style="padding:10px">',
			'<p class="alert-warniong">{{warniong}}</p>',
			'<form style="padding:30px 0">',
			'<dl class="clearfix">',
			'<dt class="left" style="width:100px;text-align:right;padding:5px;font-size:14px">',
			'{{name}}<font style="color:#f60;font-size:14px">*</font></dt>',
			'<dd style="float:left;width:300px">',
			'<input type="text" name="txtMobile" class="text" style="width:250px" id="phone-value" value="{{value}}" />',
			'<em style="display:none;margin-left:5px" class="successIcon"></em>',
			'<span style="margin-top:5px" class="msg" data-for="txtMobile"></span>',
			'</dd></dl><dl class="clearfix mgt15">',
			'<dt class="left" style="width:100px;text-align:right;padding:5px;font-size:14px">',
			'短信验证码<font style="color:#f60;font-size:14px">*</font></dt>',
			'<dd style="float:left;width:300px">',
			'<input type="text" class="text" name="txtValidateCode" style="vertical-align:middle;_vertical-align:0px;width:90px" id="yzm-value" />',
			'<a href="javascript:" class="gray-btn" style="padding:6px;width:140px;text-align:center;margin-left:5px" id="getYZM">',
			'免费发送验证码</a>',
			'<em style="display:none;margin-left:5px" class="successIcon"></em>',
			'<span style="margin-top:5px" class="msg" data-for="txtValidateCode"></span>',
			'</dd></dl></form>',
			'</div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="javascript:" id="btnPhoneSubmit">保存</a>',
			'<a class="btn3 btnsF12" href="javascript:" id="btnAttentClose">取消</a></div>'
		].join(''),
		phoneHTMLSetting = util.string.replace(phoneHTML, phoneHTMLTemplate.phoneSetting),
		phoneHTMLBinding = util.string.replace(phoneHTML, phoneHTMLTemplate.phoneBinding),
		phoneHTMLModifying = util.string.replace(phoneHTML, phoneHTMLTemplate.phoneModifying);



	//设置手机号
	$("#setPhone").click(function(){
		phone.setContent({
			content: phoneHTMLSetting,
			title: '设置手机号码'
		}).show();
		return false;
	});
	//绑定手机号
	$("#bindPhone").click(function(){
		phone.setContent({
			content: phoneHTMLBinding,
			title: '绑定手机号码'
		}).show();
		return false;
	});
	//修改手机号
	$("#updPhone").click(function(){
		phone.setContent({
			content: phoneHTMLModifying,
			title: '修改手机号码'
		}).show();
		return false;
	});

	var isRemoteClass = true,
		isSendClick = true,
		successMobile, successCode, phoneTimer,
		phoneTime = 0,
		phoneSuccessMessages = {
			only: '该号码未使用，可以绑定',
			unique: '该号码已被其他账号占用，继续操作可以从其他账号解绑并清除'
		},
		codeSuccessMessage = '成功绑定手机号码',
		codeRemoteURL = {
			url: "/person/CheckVali/",
			async: true,
			data: {
				txtMobilePhone:function() { return phone.query('#phone-value').val(); },
				txtValidateCode:function(){ return phone.query('#yzm-value').val(); }
			},
			callback: function(e){
				return e.success === "true";
			}
		},
		codeRules = {
			required: true,
			number: true,
			range: [4, 4]/*,
			remote: codeRemoteURL
			*/
		},
		codeErrorMessages = {
			required: '请填写短信验证码',
			number: '请填写数字',
			range: '验证码为4位',
			remote: '输入正确的验证码'
		},
		allClass = 'success-msg warning-msg error-msg',
		successClass = 'success-msg',
		warningClass = 'warning-msg',
		errorClass = 'error-msg',
		phoneValidators,
		mobileIcon, codeIcon;

	function remoteCode(f){
		if(!f){
			phoneValidators.addRules('txtValidateCode', codeRules);
			phoneValidators.addErrorMessages('txtValidateCode', codeErrorMessages);
			return;
		}
		phoneValidators.removeRules('txtValidateCode');
	}

	phone.before('show', function(e){
		var txtMobile = this.query('#phone-value'),
			labelMobile = txtMobile.next().next(),
			txtValidateCode = this.query('#yzm-value'),
			phoneValue = txtMobile.val(),
			labelValidate = txtValidateCode.parent().children('.msg'),
			btn = this.query('#getYZM'),
			btnSubmit = this.query('#btnPhoneSubmit'),
			isCodeSend = false;

		mobileIcon = txtMobile.next();
		codeIcon = labelValidate.prev();

		phoneValidators = new validators({
			element: this.query('form'),
			errorElement: 'span',
			rules: {
				txtMobile: {
					required: true,
					mobile: true,
					remote: {
						url: "/api/web/user.api",
						async: true,
						data: {
							act:'mobileRepeat',
							_txtMobile: function() {
								return phone.query('#phone-value').val();
							}
						},
						callback: function(e){
							if(e.status>0) e.success="true";
							isRemoteClass = e.success === "true";
							return true;
						}
					}
				}
			},
			errorMessages: {
				txtMobile:{
					required: '请输入手机号码',
					mobile: '请输入正确的手机号码'
				}
			},
			keepKey: true
		});

		phoneValidators.on('focus', function(e){
			if(e.name === "txtMobile"){
				phoneValue = txtMobile.val();
			}
		});
		phoneValidators.on('blur', function(e){
			if(e.name === "txtMobile" && txtMobile.val() !== phoneValue){
				phoneValidators.resetElement(txtValidateCode);
				phoneValidators.clearRemoteCache(txtValidateCode);
			}
		});
		phoneValidators.on('clearItem', function(e){
			if(e.name === "txtMobile"){
				mobileIcon.hide();
			} else {
				codeIcon.hide();
			}
			e.label.removeClass(allClass);
		});
		phoneValidators.on('invalid', function(e){
			if(e.name === "txtMobile"){
				mobileIcon.hide();
				if(e.ruleType === "required"){
					if(!this.isFormSubmitted() && !e.label.hasClass(errorClass)){
						e.label.removeClass(allClass).empty();
					} else {
						e.label.removeClass(allClass).addClass(errorClass).html('请输入手机号码');
					}
					return;
				}
			} else {
				codeIcon.hide();
				if(e.ruleType === "required"){
					if(!this.isFormSubmitted() && !e.label.hasClass(errorClass)){
						e.label.removeClass(allClass).empty();
					} else {
						e.label.removeClass(allClass).addClass(errorClass).html('请填写短信验证码');
					}
					return;
				}
			}
			e.label.removeClass(allClass).addClass(errorClass);
		});
		phoneValidators.on('pass', function(e){
			e.label.removeClass(allClass);
			if(e.name === "txtMobile"){
				if(isRemoteClass){
					mobileIcon.css('display', 'inline-block');
					//e.label.removeClass(allClass).addClass(successClass).html(phoneSuccessMessages.only);
				} else {
					mobileIcon.hide();
					e.label.addClass(warningClass).html(phoneSuccessMessages.unique);
				}
				isRemoteClass = true;
			} else if(e.name === "txtValidateCode"){
				codeIcon.css('display', 'inline-block');
				//e.label.addClass(successClass).html(codeSuccessMessage);
			}
		});
		remoteCode();

		btn.on('click', function(e){
			if(!isSendClick){
				return;
			}
			isSendClick = false;
			if(!(verifier.required(txtMobile) && verifier.mobile(txtMobile))){
				isSendClick = true;
				labelMobile.removeClass(allClass).addClass(errorClass).html('请输入手机号码');
				return;
			}
			checkPhoneValid($(this), txtMobile, txtValidateCode, labelValidate);
		});
		phone.query('#btnAttentClose').on('click', function(){
			phone.hide();
		});
		btnSubmit.on('click', function(e){
			phoneValidators.submit({
				callback: function(valid){
					if(valid){
						$.ajax({
							url: "/api/web/person.api",
							type : "post",
							dataType : "json",
							data:{
								"act" : "modUserInfo",
								"txtMobile" : txtMobile.val(),
								"txtValidateCode" : txtValidateCode.val(),
								"type" : "mobile"
							},
							success: function(json){
								if(json.status==1){
									var msg = "手机号码保存成功！"
									confirmBox.timeBomb(msg,{
										name : 'success',
										timeout : 1000,
										width: pWidth + msg.length * fontWidth,
										callback : function () {
											window.location.reload();
										}
									});
									phone.hide();
								} else {
									txtValidateCode.parent().find('.msg').removeClass('warning-msg success-msg').addClass('error-msg').html(json.msg);
								}
							}
						});
					}
				}
			});
		});
	});

	phone.before('hide', function(e){
		if(phoneTimer){
			clearInterval(phoneTimer);
			phoneTimer = null;
		}
		successMobile = null;
		successCode = null;
		isSendClick = true;
		isRemoteClass = true;
		phoneTime = 0;
		this.query('#btnAttentClose').off();
		this.query('#btnPhoneSubmit').off();
		phoneValidators.destory();
	});

	function updatePhoneTime(btn, phoneTxt, codeTxt){
		phoneTime = 180;
		phoneTimer = setInterval(function(){
			if(phoneTime <= 0){
				resetPhoneTime(btn, phoneTxt, codeTxt);
			} else {
				btn.html(phoneTime + '秒重新获取验证码');
			}
			phoneTime--;
		}, 1000);
	}
	function resetPhoneTime(btn, phoneTxt, codeTxt){
		clearInterval(phoneTimer);
		phoneTimer = null;
		successMobile = null;
		successCode = null;
		phoneTime = 0;
		btn.html('重新发送验证码');
		isSendClick = true;
	}
	function checkPhoneValid(target, phoneTxt, codeTxt, labelValidate){
		var url = "/api/web/user.api",
			data = {'act':'mobileCheck','_txtMobile': phoneTxt.val(),type:1};
		codeTxt.val('');
		$.ajax({
			url: url,
			type: "post",
			dataType: "json",
			async: true,
			data: data,
			success: function(result){
				if(result.status<1){
					isSendClick = true;
					labelValidate.removeClass(allClass).addClass(errorClass).html(result.msg);
					return;
				}
				successMobile = data.mobilePhone;
				labelValidate.removeClass(allClass).addClass(successClass).html('已发送验证码短信到您的手机');
				codeTxt.val('').focus();
				updatePhoneTime(target, phoneTxt, codeTxt);
			}
		});
	}


	//更换验证码
	$("body").on("click", ".imgCatcha", function() {
		var $_img = $(this).prev("img");
		$_img.attr("src", "/api/web/authCode.api?r=" + Math.random() + "&key=" + $_img.attr("data-seed"));
	});
	//取消绑定QQ
	$(".acc-manage-item").on("click", "#unlinkQQ", function() {
		if(confirm('确定解绑?')){
	 		$.post("/api/web/person.api", {act:"unbind",type:"1"}, function (data) {
				data = eval("(" + data + ")");
				if (data.status == 1) {
					alert('解绑成功');
					window.location.href = window.location.href;
				} else {
					alert(data.msg);
				}
			});
		}
	});
	//取消微博
	$(".acc-manage-item").on("click", "#unlinkWeiBo", function() {
		if(confirm('确定解绑?')){
	 		$.post("/api/web/person.api", {act:"unbind",type:"2"}, function (data) {
				data = eval("(" + data + ")");
				if (data.status == 1) {
					alert('解绑成功');
					window.location.href = window.location.href;
				} else {
					alert(data.msg);
				}
			});
		}
	});
	//取消绑定微信
	$(".acc-manage-item").on("click", "#unlinkWx", function() {
		if(confirm('确定解绑?')){
			var rel = $(this).attr("rel");
	 		$.post("/api/web/person.api", {act:"unbind",type:"3"}, function (data) {
				data = eval("(" + data + ")");
				if (data.status == 1) {
					alert('解绑成功');
					window.location.href = window.location.href;
				} else {
					alert(data.msg);
				}
			});
		}
	});

	//关闭提示
	var warn = $(".alert-warniong");
	warn.find(".close").click(function(){
		warn.hide();
		return false;
	});


	var modUsername = new Dialog({
			'title':'修改用户名',
			width: 500,
			close: 'x',
			initHeight: 300,
			isAjax: true,
			isClick: true
		});

	$('#modUsername').click(function(){
		phone.setContent({
			content: '<div style="padding:10px"><p class="alert-warniong">修改后的用户名将作为新的登录账号</p><form style="padding:30px 0"><dl class="clearfix"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">当前用户名<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:320px"><strong style="font-size:14px">{$user[username]}</strong><input type="hidden" id="cur-username" value="{$user[username]}" /></dd></dl><dl class="clearfix mgt15"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">登录密码<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:300px"><input type="password" class="text" style="width:250px" id="login-password" /><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl><dl class="clearfix mgt15"><dt class="left" style="width:80px;text-align:right;padding:5px;font-size:14px">新的用户名<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:300px"><input type="text" class="text" style="width:250px" id="new-username" /><span style="color:red;display:block;margin-top:5px" class="msg"></span></dd></dl></form></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnUsername">确定</a><a class="btn3 btnsF12" href="#" id="btnAttentClose">取消</a></div>',
			title: '修改用户名'
		}).show();
		return false;
	});

	$("#btnUsername").live("click",function(){
		var login_password=$('#login-password');
		var new_username=$('#new-username');

		if(!verifier.required(login_password)){
			login_password.next(".msg").html('请输入登录密码');
			return false;
		}else{
			login_password.next(".msg").html('');
		}
		if(!verifier.required(new_username)){
			new_username.next(".msg").html('请输入新的用户名,用户名3-32位，字母、数字组合');
			return false;
		}else{
			new_username.next(".msg").html('');
		}
		$.ajax({
			url:"/api/web/person.api",
			type:"post",
			dataType:"json",
			data:{
				"act": 'modUserInfo',
				"loginPassword":login_password.val(),
				"newUsername":new_username.val(),
				"type":'uname'
			},
			success:function(json){
				if (json.status<1) {
					new_username.next(".msg").html(json.msg);
				} else {
					confirmBox.timeBomb(json.msg, {
						name : "success",
						timeout : 1000,
						width : 196
					});
					window.location.reload();
				}
			}

		});
		return false;

	});
});
</script>
</body>
</html>
