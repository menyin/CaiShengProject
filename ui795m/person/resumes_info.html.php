<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/img/75x75.png" >
	<title>597人才网触屏版_联系方式</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
	<style>
		#msg {left:0; color:#ED1B24; left:-40px; padding:0 0 8px; position: relative;}
	</style>
</head>
<body>
<div class="content" id="content">
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b>联系方式</b></div>
	</header>
	<section class="layout">
	<form id="formContact" action="/api/web/person.api" method="post">
	<input type='hidden' name="act" value="modUserInfo">
	<input type='hidden' name="type" value="mobile">
	<div class="part form">
			<dl class="othMod">
				<dt>邮箱</dt>
				<dd>
					<div class="mod"><input type="text" id="txtEmail" v="{$resumeInfo[email]}" value="{$resumeInfo[email]}" name="txtEmail" class="text textGray"><input type="hidden" value="{$resumeInfo[email]}" name="oldEmail" id="oldEmail"></div>
					<!-- <a href="javascript:void(0)" id="btnModEmail" class="btn3 btnsF14">更改邮箱</a>
										<a href="javascript:void(0)" style="display:none" id="btnCancelModEmail" class="btn3 btnsF14">取消修改</a> -->
				</dd>
			</dl>
			<dl class="othMod">
				<dt>手机号码</dt>
				<dd>
					<input type="hidden" value="{$resumeInfo[mobile]}" id="hidMobilePhone" name="hidMobilePhone">
					<div class="mod"><input type="text" id="txtMobile" v="{$resumeInfo[mobile]}" modvalue="" value="{$resumeInfo[mobile]}" name="txtMobile" class="text textGray" disabled=""></div>
					<div>
						<a href="javascript:void(0)" id="btnModMobile" class="btn3 btnsF14"><!--{if $userInfo['mobile']}-->更改<!--{else}-->添加<!--{/if}-->手机号码</a>
						<a href="javascript:void(0)" style="display:none" id="btnCancelModMobile" class="btn3 btnsF14">取消<!--{if $userInfo['mobile']}-->更改<!--{else}-->添加<!--{/if}--></a>
					</div>
				</dd>
				<div id="msg" ></div>
			</dl>
			<dl class="othMod" id="divValiMobile" style="display:none">
				<dt>验证码</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="phone">手机验证码</label><input type="text" class="text" id="txtValidateCode" name="txtValidateCode"></div>
					<a class="btn3 btnsF14" id="btnSendValidate" href="javascript:void(0)">免费发送验证码</a>
				</dd>
			</dl>
			<!-- <dl>
				<dt>其他号码</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="wx"></label><input type="text" class="text" id="telephone" value="{$resumeInfo[telephone]}" name="telephone" placeholder="未填写"></div>
				</dd>
			</dl> -->
			<dl>
				<dt>QQ号码</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="QQ"></label><input type="text" class="text" id="txtQQ" value="{$userInfo['qq']}" name="txtQQ" placeholder="未填写"></div>
				</dd>
			</dl>
			<!-- <dl>
				<dt>微信号</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="wx"></label><input type="text" class="text" id="txtweixinNo" value="{$resumeInfo[weixinNo]}" name="txtweixinNo" placeholder="未填写"></div>
				</dd>
			</dl> -->
			<!--
			<dl>
				<dt>固定电话</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="tel">未填写</label><input type="text" class="text" id="txtTelephone" value=""  name="txtTelephone"/></div>
				</dd>
			</dl>
		 	-->
		</div>
		<div class="btns"><a class="btn4 btnsF16" id="btnSave2" href="javascript:void(0)">保存</a></div>
	</form>
	</section>
	
	<!--{template footer}-->

</div>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
var sendMsgUrl = "/certification/sendmsg/";
var nameVaild;
$(document).ready(function(){
	//邮箱
	$('#btnModEmail').click(function(){
		$('#txtEmail').removeAttr('disabled').removeClass('textGray').val('');
		$('#btnModEmail').hide();
		$('#btnCancelModEmail').show();
	});
	$('#btnCancelModEmail').click(function(){
		$('#txtEmail').attr('disabled','disabled').addClass('textGray').val($('#txtEmail').attr('v'));
		$('#btnModEmail').show();
		$('#btnCancelModEmail').hide();
	});
	//手机
	$('#btnModMobile').click(function(){
		$('#txtMobile').removeAttr('disabled').removeClass('textGray').val($('#txtMobile').attr('modValue'));
		$('#hidMobilePhone').removeAttr('disabled').val($('#txtMobile').attr('modValue'));
		
		$('#btnModMobile').hide();
		$('#btnCancelModMobile').show();
		
		$('#divValiMobile').show();
		$('#txtValidateCode').removeAttr('disabled');
	});
	$('#btnCancelModMobile').click(function(){
		$('#txtMobile').attr('disabled','disabled').attr('modValue',$('#txtMobile').val()).addClass('textGray').val($('#txtMobile').attr('v'));
		$('#hidMobilePhone').attr('disabled','disabled').val($('#txtMobile').attr('v'));
		
		$('#btnModMobile').show();
		$('#btnCancelModMobile').hide();
		
		$('#divValiMobile').hide();
		$('#txtValidateCode').attr('disabled','disabled');
	});
	//邮箱发送
	/*$('#sendEmail').click(function(){
		var email = $('#txtEmail').val();
		if(email==''||typeof(email)=='undefined'){
			alert('请填写电子邮箱');
			return;
		}
		var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (filter.test(email)){
			$.getJSON("/api/web/user.api", { act: 'emailRepeat', txtPageEmail: $("#txtEmail").val() }, function(json) {
				if (json && json.status<1) {
					alert('发送失败', { icon: 'fail' });
					return false;
				}
				if (json && json.status>0) {
					alert('验证邮件已经发送，请在2个小时内确认！');
					return false;
				}
			});
			return true;
		}else {
			alert('您的电子邮件格式不正确');
			return false;
		}
	});*/
	//发送验证码
	$('#btnSendValidate').click(function(){
		sendMsg();
	});
	$('#btnSave1,#btnSave2').click(function(){
		var txtMobile = $('#txtMobile').val();
		var telephone = $('#telephone').val();
		var qq = $('#txtQQ').val();
		var txtEmail = $('#txtEmail').val();
		var oldEmail = $('#oldEmail').val();
		
		if(txtMobile=='' && telephone==''){
			alert('手机号码跟其他号码不能都为空！');
			return;
		}
		if(txtEmail==''){
			alert('邮箱不能为空！');
			return;
		}
		if(oldEmail!==txtEmail){
			var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (filter.test(txtEmail)){
				$.getJSON("/api/web/user.api", { act: 'emailRepeat', txtPageEmail: $("#txtEmail").val() }, function(json) {
					if (json && json.status<1) {
						alert('该邮箱已存在！');
						return false;
					}
					if (json && json.status>0) {
						//alert('保存后，该邮箱将成为新的登录账号！');
						$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
					}
				});
				return true;
			}else {
				alert('您的电子邮件格式不正确');
				return false;
			}
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
	});
	$.focusblur('input.text');
});
function success(json){
	if(json.status>0){
		alert('保存成功！');
		window.location.href = '/person/resumes.html';
	}else{
		alert(json.msg);
	}
}
function checkmail(){
	var email = $('#txtEmail').val();
	if(email==''||typeof(email)=='undefined'){
		alert('请填写电子邮箱');
		return;
	}
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (filter.test(email)){
		$.getJSON("/api/web/user.api", { act: 'emailRepeat', txtPageEmail: $("#txtEmail").val() }, function(json) {
			if (json && json.status<1) {
				alert('该邮箱已存在！');
				return false;
			}
			if (json && json.status>0) {
				alert('保存后，该邮箱将成为新的登录账号！');
				return true;
			}
		});
		return true;
	}else {
		alert('您的电子邮件格式不正确');
		return false;
	}
}
function sendMsg(){
	var phone = $('#txtMobile').val();
	if(phone==''){
		alert('请填写手机号码');
		return;
	}
	var pattern = /^[1]\d{10}$/;
	if(!pattern.exec(phone)){
		alert('手机号码格式不正确');
		return;
	}
	var msg = $('#msg').html();
		/*
		$.getJSON("/api/web/user.api", { act: 'mobileRepeat', _txtMobile: $("#txtMobile").val()}, function(json) {
			if(json.status==-1){
				//alert('该手机已经被注册，请换一个手机再注册！');
				$('#msg').html('该号码已被其他账号占用，继续操作可以从其他账号解绑并清除！')
				return;
			}else if(json.status==2){
				alert('跟修改前号码一致，无需修改！');
				return;
			}else if(json.status==0){
				alert('手机格式错误！');
				return;
			}
		});
		*/
		$('#btnSendValidate').unbind('click');
		var data={mobilePhone:$('#txtMobile').val()};
		$.getJSON("/api/web/user.api", { act: 'mobileCheck', _txtMobile: $("#txtMobile").val(),type:1 }, function(json) {
			if (json.status<0) {
				alert(json.msg);
				return false;
			}
			$('#btnSendValidate').addClass('btn3Unclick').html('<i>60</i>秒后再获取');
			alert("短信已经发出，请耐心等待！");
			$('#txtValidateCode').focus();
			interval = window.setInterval(countdown,1000);
		});

}
//手机认证
function checkMobileCode(){
	$.getJSON("/api/web/user.api", { act: 'mobileCodeCheck', _txtMobile: $("#txtMobile").val(), txtPhoneCode: $("#txtValidateCode").val() }, function(json) {
		if (json.status<1) {
			alert("手机认证失败！");
			return false;
		}
		alert("恭喜您，您的手机已认证！");
		$('#txQQ').focus();
	});
}
function countdown(){
	var seconds=$('#btnSendValidate').find('i').html();
	seconds = parseInt(seconds);
	if(seconds>0){
		seconds--;
		$('#btnSendValidate').find('i').html(seconds);
	}else{
		window.clearInterval(interval);
		$('#btnSendValidate').removeClass('btn3Unclick').html('免费获取验证码').bind("click",function(){
			sendMsg();
		});
	}
}
</script>
</body>
</html>