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
	<form id="frmValid" action="/api/web/user.api?act=modPassword" method="post">
	<!--<input type="hidden" id="hidUserName" name="hidUserName" value="{$uname}" />-->
	<input type="hidden" id="hidEmail" name="hidEmail" value="{$email}" />
	<input type="hidden" id="hidKey" name="hidKey" value="{$key}" />
	<input type="hidden" id="hidExpires" name="hidExpires" value="{$time}" />
	<!--<input type="hidden" id="hidUserNameByPhone" name="hidUserNameByPhone" value="{$UserName}" />-->
	<input type="hidden" id="hidMobilePhone" name="hidMobilePhone" value="{$MobilePhone}" />
	<input type="hidden" name="hidAuthCode" value="{$AuthCode}" />
		<div class="fullscreen" style=" margin-bottom:20px">
			<div id="ctl00_ContentPlaceHolder1_chooseLogin">
				<div class="top_menu">
					<div class="noselected" style="width: 50%;">
						<a class="loginTitle">1、确认账户</a>
					</div>
					<div style="width: 50%;" class="selected">
						<a class="loginTitle" href="#">2、重置密码</a>
					</div>
				</div>
			</div>
			<div class="login">
				<div class="loginLine" style=" font-size:14px;padding-bottom:5px; line-height:21px;">
					只能使用已绑定的手机号码来找回密码；系统将发送验证码短信到您的手机上，请注意查收
				</div>
				<div style="display:inline-block;width:92%;">
					<input type="password" class="inputBox" id="txtPassword" name="txtPassword" placeholder="重置密码"  value="" maxlength="50" style="width:98%;margin:5px 0;" autocomplete="off"/>
					<input type="password" class="inputBox" id="txtRepeatPassword" name="txtRepeatPassword" placeholder="确认密码"  value="" maxlength="50" style="width:98%;margin:5px 0;" autocomplete="off"/>
				</div>
				<button class="loginLine cpregister_button" name="btnLogin" type="button" href="javascript:void();" id="btnSava" style=" text-align:center; font-size:20px; vertical-align:middle;display:;">确定</button>
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
	$('#btnSava').click(function(){
		var phone = $('#hidMobilePhone').val();
		var password = $('#txtPassword').val();
		var password2 =  $('#txtRepeatPassword').val();
		var phone_pattern = /^[1]\d{10}$/;
		if(password==''||typeof(password)=='undefined'){
			alert('请填写密码!');
			return;
		}
		var patten = new RegExp('^[0-9]+$');
		if (phone == password) {
			alert('密码和用户名不能相同!');
			return;
		}
		if (/^(\d)\1+$/.test(password)){ 
			alert('密码不能为同一个数字!');
			return;
		}
		var str = password.replace(/\d/g, function($0, pos) {
			return parseInt($0)-pos;
		});
		if (/^(\d)\1+$/.test(str)){
			alert('密码不能为连续数字!');
			return;
		}
		str = password.replace(/\d/g, function($0, pos) {
			return parseInt($0)+pos;
		});
		if (/^(\d)\1+$/.test(str)){
			alert('密码不能为连续数字!');
			return;
		}
		if(password2==''||typeof(password2)=='undefined'){
			alert('请填写确认密码!');
			return;
		}
		if(password!=password2){
			alert('两次密码输入不一致!');
			return;
		}
		$('#btnSava').submitForm({success:success,clearForm:false});
	});
});
function success(json){
	if (json && json.status<1) {
		alert(json.msg);
		return;
	}
	if(json && json.status==1){
		alert('密码重置成功！');
		var urlFrom = "{$from}",
			url;
		url = (urlFrom=='') ? '/person/login.html' : urlFrom;
		window.location.href = url;
	}
	return;
}
</script>
</body>
</html>
