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
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>求职登录-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_login2.css?v=20150106" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_style2.css?v=20140325" />
</head>
<body>
<div class="content">
	<!--{template header}-->


	<header>
		<a class="btn_back" id="btn_back" onclick="history.back();"></a>
		<h2>求职者登录</h2>
	</header>
	<div id="EntPage"></div>
	<form method="post" id="frmLogin">
	<input type="hidden" value="{$from}" name="back_url" id='back_url'>
	<input type="hidden" value="{$_jid}" name="jid" id="jid">
	<div class="fullscreen" style=" margin-bottom:20px">
		<div id="ctl00_ContentPlaceHolder1_chooseLogin">
			<div class="top_menu">
				<div class="selected" style="width: 50%;"> <a class="loginTitle"><span class="personlogin"></span>求职者登录 </a> </div>
				<div style="width: 50%;" class="noselected"> <a class="loginTitle" href="/company/login.html"><span class="companylogin"></span>企业登录</a> </div>
			</div>
		</div>
		<div class="login">
			<div style="text-align: center;">
				<input type="text" class="inputBox" name="username" id="username"  placeholder="用户名/邮箱/手机号码" autocomplete="off"/>
				<input type="password" class="inputBox" name="password" id="password" placeholder="密码" autocomplete="off"/>
				<div id="verifycode" class="c4" style="display:none;line-height: 26px;vertical-align: middle;width: 92%;margin: 0px auto;padding: 0 19px 0 8px;">
					<input placeholder="验证码" name="authcode" id="authcode" type="text" class="inputBox txt default" style="width: 50%;-webkit-appearance: none; margin-right: 10px; float: left; " size="5" maxlength="4" autocomplete="off"><img id="imgCode" style="float: left;margin-top: 8px;" />
					<div class="clear"></div>
				</div>
			</div>
		<div class="loginLine" style="">
		<label for="perAutoLogin">
			<input type="checkbox" id="perAutoLogin" name="perAutoLogin" value="checked" checked="checked" style="-webkit-appearance: checkbox; border: 1px solid #333333; margin-right: 5px;">记住我</label>
		<span style="float: right;color:#2ba0ed;">
			<a onclick="location.href='findpassword.html';return false" style="color:#2ba0ed;">忘记密码</a>
		</span>
		</div>
			<button class="loginLine login_button" name="btnLogin" type="button"  href="javascript:void(0);" id="btnLogin" style=" text-align:center; font-size:20px; vertical-align:middle"> <span style="margin-bottom:10px">登 录</span></button>
			<div class="loginLine">使用其他账号登录<span style="float:right; margin-right:13px;color:#2ba0ed;display:none;"><a onclick="location.href='findpassword.html';return false">忘记密码</a></span></div>
			<div class="loginLine OtherWay">
				<div style="float: left; width: 45%; border-right: 1px solid #c9c9c9;text-align:center;"> <a style="display:block;" href="http://api.597.com/qq/login.api"> <span class="QQ" style=" display:inline-block; margin-top:5px;"></span><span style="vertical-align:top;">QQ</span> </a> </div>
				<div style="float: left; width: 45%;text-align:center;"> <a style="display:block;" href="http://api.597.com/weibo/login.api"> <span class="Sina" style=" display:inline-block; margin-top:5px;"></span><span style="vertical-align:top;">新浪</span> </a> </div>
			</div>
			<div class="loginLine tips">您还没有成为我们的会员？</div>
			<div class="loginLine"><!--  <span class="registerLine1 register_button" style="text-align: center;" onclick="location.href='/person/fast_resumes.html?act=base'">一分钟填写简历</span>  --><a onclick="location.href='/person/register.html';return false"><span class="registerLine2 register_button" style="text-align: center;width:100%;" onclick="location.href=/person/register.html;return false">免 费 注 册 简 历</span> </a></div>
			<a href="/company/register.html"><button class="loginLine cplogin_button" name="btnLogin" type="button" id="loginButton" style=" text-align:center; font-size:16px; vertical-align:middle; font-weight:normal;"><span>企 业 快 速 注 册</span></button></a>
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
	var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
	$('#imgCode').attr('src',src);
	$.focusblur('input.text');

	if($('#username').val()){
		$('#username').prev().hide();
	}
	if($('#password').val()){
		$('#password').prev().hide();
	}

	$('#frmLogin').find(':input').keydown(function(event){
		var e = $.event.fix(event);
		if (e.keyCode == 13){
			$('#btnLogin').click();
		}
	});

	$('#btnLogin').click(function(){
		var user_name,password,catcha,seed,back_url,cookieTime=0;
		if($('#username').val() == ''||typeof($('#username').val()) == 'undefined'){
			alert('请输入“用户名”！');
			return;
		}

		if($('#password').val() == ''||typeof($('#password').val()) == 'undefined'){
			alert('请输入密码！');
			return;
		}

		if(!$('#verifycode').is(':hidden')){
			if($('#authcode').val() == ''||typeof($('#authcode').val()) == 'undefined'){
				alert('请输入验证码！');
				return;
			}
		}

		user_name = $("#username").val();
		password = $("#password").val();
		catcha = $("#authcode").val();
		back_url = $('#back_url').val();
		if($("#perAutoLogin").is(":checked")){//选中
			cookieTime = 3600*24*30;
		}
		jid = $("#jid").val();
		$.ajax({
			url:"/api/web/person.api",
			type:"post",
			data:'act=login&username='+user_name+'&password='+password+'&authcode='+catcha+'&userType=1&appType=2&loginType=0&cookieTime='+cookieTime+'&cityId='+{$domainInfo['region_id']},
			dataType:"jsonp",
			success:function(json){
				if(json.status>0){
					if(jid){
						$.getJSON('/api/web/job.api?act=join&jid={$_jid}', '' , function(data) {
							if (data && data.status) {
								if (data.status<1 && data.status==-100){
									alert("登录成功，但因简历不完整，所以职位申请失败！");
									window.location.href = back_url;
									return;
								}else if (data.status<1){
									alert("登录成功，但因("+data.msg+')申请失败！');
									window.location.href = back_url;
									return;
								}
								if (data.status>=1){
									alert("登录成功，职位申请成功！");
									window.location.href = back_url;
								}
							}
						});
					}else{

						window.location.href = back_url;
						return;
					}
				}else if(json.status==-35 || json.status==-36 || json.status==-37 || json.status==-38){
					alert(json.msg);
					var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
					$('#imgCode').attr('src',src);
					$('#verifycode').show();
				}else{
					if(json.status==-45){
						window.location.href='/file/cityLogin.html?act=per';
					}
					alert(json.msg);
				}
				/*if(json.needAuthCode){
					var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
					$('#imgCode').attr('src',src);
					$('#verifycode').show();
				}*/
				return;
			}
		});
	});

	$('#imgCode,#btnCode').click(function(){
		var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
		$('#imgCode').attr('src',src);
		return false;
	});
});
</script>
</body>
</html>
