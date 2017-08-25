<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>求职登录-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js?v=20140313"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/mobile.form.js?v=20140319"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_login2.css?v=20150106" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_style2.css?v=20140325" />
</head>
<body>
<div class="content">
	<!--{template header}-->
	<header>
		<a class="btn_back" id="btn_back" onclick="history.back();"></a>
		<h2>找回密码</h2>
	</header>
	<div id="EntPage"></div>
	<form id="formMobileSuccess" action="/person/get_password.html" method="post">
		<input type="hidden" id="hidUserName" name="hidUserName" />
		<input type="hidden" id="hidMobilePhone" name="hidMobilePhone" />
		<input type="hidden" id="hidAuthCode" name="hidAuthCode" />
		<input type="hidden" id="from" name="from" value="{$from}">
	</form>
	<form id="frmMobilPhone" method="post" action="/api/web/user.api?act=byPassword">
	<input type="hidden" name="operate" value="phone">
		<div class="fullscreen" style=" margin-bottom:20px">
			<div id="ctl00_ContentPlaceHolder1_chooseLogin">
				<div class="top_menu">
					<div class="selected" style="width: 50%;">
						<a class="loginTitle">1、确认账户</a>
					</div>
					<div style="width: 50%;" class="noselected">
						<a class="loginTitle" href="#">2、重置密码</a>
					</div>
				</div>
			</div>
			<div class="login">
				<div class="loginLine" style=" font-size:14px;padding-bottom:5px; line-height:21px;">
					只能使用已绑定的手机号码来找回密码；系统将发送验证码短信到您的手机上，请注意查收
				</div>
				<div style="display:inline-block;width:92%;">
					<input type="tel" class="inputBox" id="txtMobilePhone" name="txtMobilPhone" placeholder="已验证手机号"  value="" maxlength="50" style="width:98%;margin:5px 0;" autocomplete="off"/>
					<input type="text" class="inputBox" id="txtMobileCode" maxlength="4" name="txtMobileCode" placeholder="验证码" style=" width:52%;float:left;" autocomplete="off"/>
					<img id="imgCode" style="padding-top:7px;width:80px;height:36px;" /><span style="padding-top:16px;font-size:14px;float:right;"><a href="javascript:void(0)" id="btnCode">换一张</a></span>
					<div style="clear:both;"></div>
					<a style="width:99%;height: 35px;border-radius: 3px;border: 1px solid #c6c6c6;background: #efefef;cursor: pointer;font-size: 12px;color: #6c6c6c;display: block;line-height: 35px;text-align: center; " href="javascript:void(0);" id="btnSendValidate">免费获取验证码</a>
					<input type="tel" class="inputBox" id="txtMobilPhoneCode" name="txtMobilPhoneCode" placeholder="手机验证码"  value="" maxlength="50" style="width:97%;margin:5px 0;display:none;" autocomplete="off"/>
				</div>
				<button class="loginLine cpregister_button" name="btnLogin" type="button" href="javascript:void();" id="btnSavaMobil" style=" text-align:center; font-size:20px; vertical-align:middle;display:none;">确定</button>
			</div>
		</div>
	</form>
	<!--{template footer2}-->
	<script>
	//当滚动条向下滚动时显示TOP
		if (document.getElementById("gotop")) {
			var oldMethod = window.onscroll;
			if (typeof oldMethod == 'function') {
				window.onscroll = function () {
					oldMethod.call(this);
					if (document.body.scrollTop > 0) {
						document.getElementById("gotop").style.display = "block";
					}
					else {
						document.getElementById("gotop").style.display = "none";
					}
				}
			}
		}
	</script>
</div>
<script type="text/javascript">
$(document).ready(function(){
	var src = '/api/web/authCode.api?' + Math.random() + '&key=mobilePassword';
	$('#imgCode').attr('src',src);
	$.focusblur('input.text');
	//发送手机验证码
	$('#btnSendValidate').click(function(){
		sendMsg();
	});
	//随机验证码
	$('#imgCode,#btnCode').click(function(){
		var src = '/api/web/authCode.api?' + Math.random() + '&key=mobilePassword';
		$('#imgCode').attr('src',src);
		return false;
	});
	$('#btnSavaMobil').click(function(){
		var code = $('#txtMobilPhoneCode').val();
		var code_pattern = /^\d{4,6}$/;
		if(code==''||typeof(code)=='undefined'){
			alert('请填写手机验证码!');
			return;
		}
		if(!code_pattern.exec(code)){
			alert('手机验证码格式不正确!');
			return;
		}
		$('#btnSavaMobil').submitForm({success:success,clearForm:false});
	});
});
function success(json){
	if(json && json.status<1){
		alert('操作失败！');
		return;
	}		
	if(json && json.status==1){
		alert("手机验证成功！");
		$('#hidUserName').val(json.username);
		$('#hidMobilePhone').val(json.phone);
		$('#hidAuthCode').val(json.auth_code);
		$('#formMobileSuccess').submit();
	}
	return;
}
function sendMsg(){
	var phone = $('#txtMobilePhone').val();
	if(phone==''){
		alert('请填写手机号码!');
		return;
	}
	var pattern = /^[1]\d{10}$/;
	if(!pattern.exec(phone)){
		alert('手机号码格式不正确!');
		return;
	}
	$('#btnSendValidate').unbind('click');
	var data={txtPhone:$('#txtMobilePhone').val()};
	$.getJSON("/api/web/user.api", { act: 'passwordAuthCode', txtMobileCode: $("#txtMobileCode").val(), txtMobilPhone: $("#txtMobilePhone").val()}, function(json) {
		if(json && json.status<1){
			alert(json.msg);
			/*$('#tipMessage').html('<i class="red jpFntWes">&#xf00d;</i>'+json.msg).show();*/
			$('#btnSendValidate').html('免费获取验证码').bind('click',function(){
				sendMsg();
			});
			return;
		}
		$('#btnSendValidate').html('<i>60</i> 秒后重新获取短信').addClass('btn3Unclick');
		alert("已发送验证码短信到您的手机！");
		/*$('#tipMessage').html('<i class="green jpFntWes">&#xf00c;</i>已发送验证码短信到您的手机').show();*/
		$('#txtMobilPhoneCode').show();
		$('#txtMobilPhoneCode').focus();
		$('#btnSavaMobil').show();
		interval = window.setInterval(countdown,1000);
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
