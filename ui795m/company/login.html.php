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
	<title>企业登录-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_login2.css?v=20150106" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_style2.css?v=20140325" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/m.js"></script>

	<style type="text/css">
		#blackMask {display: none;background: rgba(0, 0, 0,0.5); width:100%; height:100%; position: fixed; left:0; top:0; z-index: 100001;}
		#showPhone {display: none;width:100%; position: fixed; left:0; bottom:20px;  z-index: 1000002;}
		#showPhone p {background: #fff; margin:0 15px 10px; border-radius:8px; height: 45px; line-height: 45px; font-size: 18px;text-align: center; color:#087eff;}
		#showPhone p a {display: block;}
	</style>
</head>
<body>
<div class="content">
	<!--{template header}-->
	<header>
		<a class="btn_back" id="btn_back" onclick="history.back();"></a>
		<h2>企业登录</h2>
	</header>
	<div id="EntPage"></div>
	<form method="post" id="formCompanyLogin" autocomplete="off">
	<input type="hidden" name="act" value="login" />
	<input type="hidden" name="userType" value="2">
	<input type="hidden" name="appType" value="2">
	<input type="hidden" value="{$from}" name="back_url" id='back_url'>
	<div class="fullscreen">
		<div id="ctl00_ContentPlaceHolder1_chooseLogin">
			<div class="top_menu">
			<div class="noselected" style="width: 50%;">
				<a class="loginTitle" href="/person/login.html"><span class="personlogin"></span>求职者登录 </a>
			</div>
			<div style="width: 50%;" class="cpselected">
				<a class="loginTitle"><span class="companylogin"></span>企业登录</a>
			</div>
		</div>
		</div>
		<div class="login">
			<div style="text-align: center;">
				<input type="text" maxlength="64" id="username" name="username" class="inputBox" placeholder="用户名" autocomplete="off"/>
				<input type="password" maxlength="64" id="password" name="password" class="inputBox" placeholder="密码" autocomplete="off"/>
				<div id="verifycode" class="c4" style="display:none;line-height: 26px;vertical-align: middle;width: 92%;margin: 0px auto;padding: 0 19px 0 8px;">
					<input placeholder="验证码" name="authcode" id="authcode" type="text" class="inputBox txt default" style="width: 50%;-webkit-appearance: none; margin-right: 10px; float: left; " size="5" maxlength="4" autocomplete="off"><img id="imgCode" style="float: left;margin-top: 8px;" />
					<div class="clear"></div>
				</div>
				<div class="loginLine" style="">
				<label for="comAutoLogin">
					<input type="checkbox" id="comAutoLogin" name="comAutoLogin" value="checked" checked="checked" style="-webkit-appearance: checkbox; border: 1px solid #333333; margin-right: 5px;">记住我
				</label>
				<span style="float: right;color:#2ba0ed;">
					<a href="javascript:void(0);" onclick="$('#blackMask,#showPhone').show();" id="forgetPwd" style="color:#2ba0ed;">忘记密码</a>
				</span>
				<div style="clear:both"></div>
				<!-- <div class="c4" style="line-height: 26px;vertical-align: middle;width: 92%;margin: 0px auto;padding: 0 19px 0 8px;">
				<input placeholder="验证码" name="verifycode" type="text" class="inputBox txt default" id="verifycode" style="width: 50%;-webkit-appearance: none; margin-right: 10px; float: left; " size="5" maxlength="4">
				<img src="images/VerifyCode" style="vertical-align: bottom;margin-top:13px;float: left;width:60px;height:23px;" id="valiCode">
				<span style="float:right;color:#2ba0ed;margin-top:10px;"><a onclick="location.href=&#39;/company/cphome/GetPassword&#39; ;return false">忘记密码</a></span>
				<div style="clear:both"></div></div> -->
			</div>
			<button class="loginLine cplogin_button" name="btnLogin" type="button" id="loginButton" style=" text-align:center; font-size:20px; vertical-align:middle">
				<span>登 录</span>
			</button>
		<div class="loginLine tips">您还没有成为我们的会员？</div>
			<div class="loginLine"><a onclick="location.href='/company/register.html';return false"><span class="registerLine2 register_button" style="text-align: center;width:100%;" onclick="location.href=/company/register.html;return false">立即注册</span> </a></div>
		<!-- <div class="CpTips2 tips">您还没有成为我们的会员？</div>
			<span class="loginLine cpregister_button" name="btnRegister" onclick="location.href='/company/register.html';return false" style=" text-align:center; font-size:20px; vertical-align:middle">
				<span>立即注册</span>
			</span> -->
		<div class="CpTips">
			企业服务热线<b style="color:#05a52b">400-810-8597</b>
		</div>
	</div>
	</form>
</div>
<div id="blackMask"></div>
<div id="showPhone">
	<p ><a href='tel:400-810-8597' style='color:#f50;'>点击拨打400-810-8597找回</a></p>
	<p onclick="$('#blackMask,#showPhone').hide();">取消</p>
</div>
<!--{template footer2}-->
<script type="text/javascript">
$(document).ready(function(){
	// 不允许企业登录直接跳转到app下载；
		//location.href='http://a.app.qq.com/o/simple.jsp?pkgname=com.rcw597.app';
	var src = '/api/web/authCode.api?' + Math.random() + '&key=companyLogin';
	$('#imgCode').attr('src',src);
	$.focusblur('input.text');
	//点击验证码
	$('#imgCode,#btnCode').click(function(){
		var src = '/api/web/authCode.api?' + Math.random() + '&key=companyLogin';
		$('#imgCode').attr('src',src);
		return false;
	});

	$('#formCompanyLogin').find(':input').keydown(function(event){
		var e = $.event.fix(event);
		if (e.keyCode == 13){
			$('#loginButton').click();
		}
	});

	$("#loginButton").click(function(){

		var user_name = $("#username").val(),
			password = $("#password").val(),
			catcha = $("#authcode").val(),
			back_url = $('#back_url').val(),
			cookieTime = 0;
		if($("#comAutoLogin").is(":checked")){//选中
			cookieTime = 3600*24*30;
		}
		if(user_name =='' ||typeof(user_name) == 'undefined'){
			alert("请输入用户名！");
			return false;
		}
		if(password =='' ||typeof(password) == 'undefined'){
			alert("请输入密码！");
			return false;
		}

		if(!$('#verifycode').is(':hidden')){
			if(catcha == ''||typeof(catcha) == 'undefined'){
				alert('请输入验证码');
				return;
			}
		}
		$.ajax({
			url:"/api/web/company.api",
			type:"post",
			data:'act=login&username='+user_name+'&password='+password+'&authcode='+catcha+'&userType=2&appType=2&loginType=0&cookieTime='+cookieTime+'&cityId='+{$domainInfo['region_id']},
			dataType:"jsonp",
			success:function(json){
				if(json.status>0){
					window.location.href = back_url;
					return;
				}else if(json.status==-35 || json.status==-36 || json.status==-37 || json.status==-38){
					alert(json.msg);
					var src = '/api/web/authCode.api?' + Math.random() + '&key=companyLogin';
					$('#imgCode').attr('src',src);
					$('#verifycode').show();
				}else{
					if(json.status==-45){
						window.location.href='/file/cityLogin.html?act=com';
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

	$('#forgetPwd').click(function(){

	});
});
</script>
</body>
</html>