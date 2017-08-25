<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title></title>
	<meta name="keywords" content="云计算">
	<meta name="description" content="">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link href="//cdn.{ROOT_DOMAIN}/crm/css/base.css" type="text/css" rel="stylesheet">
	<link href="//cdn.{ROOT_DOMAIN}/crm/css/main.css" type="text/css" rel="stylesheet">
	<link href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css" type="text/css" rel="stylesheet"></head>
	<style>
		.codeLi {position: relative;}
		.codeLi img { position: absolute; left: 240px; top: -1px; left: 260px\9;}
	</style>
<!--{template header}-->
<body screen_capture_injected="true">
	<div id="content">

		<div class="loginBox">
			<div id="login">
				<div class="wrapper">
					<div class="title hideText">平台登录</div>
					<div class="logined">
						<div class="content">
							<form method="post" action="/api/web/admin.api" id="postForm">
								<input type="hidden" name="act" value="login">
								<div class="wrap_login ideal-form">
									<ul class="list_info">
										<li class="row_name ">
											<span class="tit">帐号：</span>
											<input name="access" id="access" type="text" class="input_short" value=""></li>
										<li>
											<span class="tit">密码：</span>
											<input name="password" id="pass" type="password" class="input_short" value=""></li>
										 <li class="codeLi">
											<span class="tit">验证码：</span>
											<input name="inputCode" type="text" id="code" class="input_short" value="" style="width:115px;">
											<img src="/api/web/authCode.api?key=adminLogin" alt="" id="imgCode" />
										</li>
										<li class="label_wrap ">
											<label for="is_remember">
												<!-- <input name="" id="is_remember" type="checkbox" value="">记住密码</label> -->
											<input class="btn_login" type="button" id="inputButton" value="登 录" />
										</li>
									</ul>
								</div>
							</form>
							<!--<div class="down">
							没有账号？
							<a href="#">现在立即注册</a>
						</div>
						-->
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$('#postForm').find(':input').keydown(function(event){
	var e = $.event.fix(event);
	if (e.keyCode == 13){
		$('#inputButton').click();
	}
});
$('#inputButton').click(function(){
	var access = $('#access').val();
	var pass = $('#pass').val();
	var code = $('#code').val();

	if(access==''||typeof(access) == 'undefined'){
		alert('用户名不能为空！');
		$('#access').focus();
		return false;
	}
	if(pass==''||typeof(pass) == 'undefined'){
		alert('密码不能为空！');
		$('#pass').focus();
		return false;
	}
	if(code==''||typeof(code) == 'undefined'){
		alert('验证码不能为空！');
		$('#code').focus();
		return false;
	}
	//$('#postForm').submit();
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
		$('#imgCode').click();
		$.message(data.msg, { title: "系统提示", icon: "fail" });
	}else{
		$.anchorMsg(data.msg,{icon:"success"});
		window.location.href = '{$from}';
	}
	}, clearForm: false});
});
$('#imgCode').click(function(){
	var src = '/api/web/authCode.api?' + Math.random() + '&key=adminLogin';
	$('#imgCode').attr('src',src);
	return false;
});
</script>
</body>