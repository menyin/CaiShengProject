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
	<title>企业注册-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"	content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href="http://img.597.com/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_login2.css?v=20150106" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_style2.css?v=20140325" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.singlearea.js?v=20141221"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.date.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/mobile.form.js?v=20140319"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20141227" />
	<style type="text/css">
	#cur_area  p{ font-size:14px;}
	.code {position: absolute; right:10px; top:10px;}
	</style>
</head>
<body>
<div class="content">
	<!--{template header}-->
	<header style=" background:#E8352E; border-bottom:1px solid #E8352E;">
		<a class="btn_back" id="btn_back" href="/"></a>
		<h2 style="white-space:nowrap;text-overflow:ellipsis;overflow:hidden">企业会员中心</h2>
	</header>
	<div class="top_menu">
	  <div class="noselected" style="width: 50%;"> <a class="loginTitle" href="/person/register.html"><span class="personlogin"></span>求职者注册 </a> </div>
	  <div style="width: 50%;" class="selected" > <a class="loginTitle" href="#"><span class="companylogin"></span>企业注册</a> </div>
	</div>
	<form id="formReg" action="/api/web/company.api" method="post">
		<input type="hidden" name="act" value="register" />
		<input type="hidden" name="from" value="{$from}" />
		<input type="hidden" name="txtAppType" value="1" />
		<input type="hidden" name="source" value="20" />
		<div class="editInfo">
			<!--<span style="display:inline-block;width:100%;margin-top:10px;text-align:left;">面向{$domainInfo['region_name_short']}的人才招聘网站，不交费也能完成部分岗位招聘！</span>-->
			<div class="baseedit">
				<div class="beRow">
					<span class="beName">企业名称：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtCompanyName" name="txtCompanyName" type="text" maxlength="50" placeholder="请输入您的企业全称" value="" style="font-size:14px;width:100%">
					</span>
				</div>
				<div class="beRow" >
					<span class="beName" style="float:left;padding-left:1%;">所在地：</span>
					<span class="beCon">
						<input type="hidden" id="hddCurArea" name="hddArea"/>
					<dd id="cur_area"></dd>
					</span>
				</div>
				<div class="beRow">
					<span class="beName">联系人：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtLinkPerson" name="txtLinkPerson" type="text" maxlength="60" minlength="1" placeholder="为方便联系，请填写全名" value="" style="ime-mode:disabled;font-size:14px;width:100%">
					</span>
				</div>
				<div class="beRow"><span class="beName">固定电话：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtLinkTelphone" name="txtLinkTelphone" type="tel" maxlength="60" minlength="1" placeholder="为方便联系，请填写固定电话" value="" style="ime-mode:disabled;font-size:14px;width:100%">
					</span>
				</div>
				<div class="beRow"><span class="beName">电子邮箱： </span>
					<span class="beCon">
						<div style="width:100%">
							<input class="Vname aEmail txt" autocomplete="off" id="txtEmail" name="txtEmail" type="text" maxlength="50" placeholder="请填写常用的邮箱地址" value="" style="font-size:14px;width:100%" onblur="checkEmail();">
						</div>
					</span>
				</div>
				<div class="beRow">
					<span class="beName">手机号：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtLinkCall" name="txtLinkCall" type="tel" maxlength="11" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" placeholder="请填写手机号码" value="" style="ime-mode:disabled;font-size:14px;width:100%">
					</span>
				</div>

			</div>

			<div class="registerLine"></div>
			<div class="baseedit">
				<div class="beRow">
					<span class="beName" style="vertical-align:top">用户名：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtUsername" name="txtUsername" type="text" minlength="3" maxlength="30" placeholder="请输入4-32个字符" value="" style="font-size:14px;width:100%" onblur="checkUsername();">
						<span id="spUsername" style="color:#ff0000;"></span>
					</span>
				</div>
				<div class="beRow">
					<span class="beName">密   码：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtPwd" name="txtPwd" type="password" minlength="6" maxlength="16" placeholder="长度6-16位，不能为同一数字" value="" style="font-size:14px;width:100%">
						<span class="passwordSafeLower" id="passwordSafe" style="display:none;margin-top:4px"></span>
					</span>
				</div>
				<div class="beRow" style="	border-bottom:1px solid #DFDFDF;">
					<span class="beName">确认密码：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtPwdRepeat" name="txtPwdRepeat" type="password" minlength="6" maxlength="16" placeholder="请输入确认密码" value="" style="font-size:14px;width:100%">
					</span>
				</div>
				<div class="beRow" style="	border-bottom:1px solid #DFDFDF;position:relative;">
					<span class="beName">验证码：</span>
					<span class="beCon">
						<input class="Vname txt" autocomplete="off" id="txtUsernameAuthCode" name="txtUsernameAuthCode" type="text" placeholder="请输入验证码" value="" style="font-size:14px;width:100%">
					</span>
				</div>
				<div class="beRow" style="	border-bottom:1px solid #DFDFDF;position:relative;">
					<span class="beName"></span>
					<span class="beCon">
						<img src="/api/web/authCode.api?key=companyRegister" alt="" id="authcode" style="margin-left:-20px;" />&nbsp;&nbsp;<a href="javascript:void(0)" id="code">看不清楚,换一张</a>
					</span>
				</div>
			</div>
			<div class="login" style=" margin-top:5px; margin-bottom:15px">
			  	<button  id="btnregister" class="loginLine issue_button" name="issue" type="button" style=" text-align:center; font-size:20px; vertical-align:middle"> <span>注   册</span> </button>
			</div>
		</div>
	</form>
<!--{template footer2}-->
<script>
	$(document).ready(function(){
		$('#cur_area').area({showLevel:3,selectArea:null,onSelect:function(id,name){
			$('#hddCurArea').val(id);
		}});
		$('#btnregister').click(function(){
			var txtCompanyName = $('#txtCompanyName').val();
			var hddCurArea = $('#hddCurArea').val();
			var txtLinkPerson = $('#txtLinkPerson').val();
			var txtLinkPhone = $('#txtLinkPhone').val();
			var txtUsername = $('#txtUsername').val();
			var username_pattern = /^[A-Za-z0-9_]*$/;
			var password = $('#txtPwd').val();
			var password2 =  $('#txtPwdRepeat').val();

			if(txtCompanyName==''||typeof(txtCompanyName)=='undefined'){
				alert('请输入贵公司营业热照上的公司名称！');
				return;
			}
			if(txtCompanyName.length>200 || txtCompanyName.length<1){
				alert('公司名称由1-200个字组成！');
				return;
			}
			if(hddCurArea==''||typeof(hddCurArea)=='undefined'){
				alert('请选择所在地！');
				return;
			}
			if(txtLinkPerson==''||typeof(txtLinkPerson)=='undefined'){
				alert('请填写联系人！');
				return;
			}
			if(txtLinkPerson.length>60 || txtLinkPerson.length<1){
				alert('联系人由1-60个字组成！');
				return;
			}
			var txtEmail = $('#txtEmail').val();
			var email_pattern = /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z-_]+\.)+[a-zA-Z]{2,4}$/;
			if(txtEmail==''||typeof(txtEmail)=='undefined'){
				alert('请填写邮箱！');
				return;
			}
			if(!email_pattern.exec(txtEmail)){
				alert('请填写正确的电子邮箱！');
				return;
			}
			/*
			if(txtLinkPhone==''||typeof(txtLinkPhone)=='undefined'){
				alert('请填写正确的电话号码！');
				return;
			}
			*/
			if(txtUsername==''||typeof(txtUsername)=='undefined'){
				alert('请填写用户名！');
				return;
			}
			if(txtUsername.length>32||txtUsername.length<4){
				alert('用户名4-32位字符！');
				return;
			}
			if(!username_pattern.exec(txtUsername)){
				alert('用户名为字母、数字、下划线组成！');
				return;
			}
			//checkUsername();
			if(password==''||typeof(password)=='undefined'){
				alert('请填写密码!');
				return;
			}
			var patten = new RegExp('^[0-9]+$');
			if (txtUsername == password) {
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
			if(password.length>16 || password.length<6){
				alert('密码只能输入6-16位字符！');
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
			$('#btnregister').submitForm({success:success,clearForm:false});
		});
	});
	function checkUsername(){
		var txtUsername = $('#txtUsername').val();
		var username_pattern = /^[A-Za-z0-9_]*$/;
		if(txtUsername==''||typeof(txtUsername)=='undefined'){
			alert('请填写用户名！');
			return;
		}
		if(txtUsername.length>32||txtUsername.length<4){
			alert('用户名4-32位字符！');
			return;
		}
		if(!username_pattern.exec(txtUsername)){
			alert('用户名为字母、数字、下划线组成！');
			return;
		}
		$.getJSON("/api/web/user.api", { act: 'usernameRepeat', txtUsername: $("#txtUsername").val()}, function(json) {
			if(json.status==-1){
				alert('该用户名已经被注册，请换一个用户名再注册！');
				$('#txtUsername').focus();
				return;
			}else if(json.status==0){
				alert('用户名格式错误，请换一个用户名再注册！');
				$('#txtUsername').focus();
				return;
			}
		});
	}
	function checkEmail(){
		var txtEmail = $('#txtEmail').val();
		var email_pattern =  /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z-_]+\.)+[a-zA-Z]{2,4}$/;
		if(txtEmail==''||typeof(txtEmail)=='undefined'){
			alert('请填写邮箱！');
			return;
		}
		if(!email_pattern.exec(txtEmail)){
			alert('请填写正确的电子邮箱！');
			return;
		}
	}
	function success(json){
		if (json.status > 0) {
			alert('注册成功！');
			window.location.href = '/company/';
		}else{
			alert(json.msg);
			$('#code').click();
			return;
		}
	}
	$('#authcode,#code').click(function(){
		$("#authcode").attr('src','/api/web/authCode.api?key=companyRegister');
	});
</script>
</div>
<script>
$(function () {
	//当滚动条向下滚动时显示TOP
	if ($("#gotop")) {
		$(window).scroll(function () {
			if ($(window).scrollTop() > 0) {
				$("#gotop").fadeIn(100);
			}else{
				$("#gotop").fadeOut(100);
			}
		});
	}
});
</script>
</body>
</html>