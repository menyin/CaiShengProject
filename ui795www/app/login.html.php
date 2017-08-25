<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>求职登陆-个人登陆-597人才网</title>
	<link rel="shortcut icon" href="http://img.597.com/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/login.css?v=20130808" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/basefront.css?v=20130808" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.form.js?v=20140319"></script>
</head>
<body>
<!--{template header}-->

<div class="loginCon pLoginCon">
	<div class="left">
		<div class="bannerL"></div>
		<div class="txt" id="marquee">
			<ul>
			<li>全国极具影响力的人力资源网站</li>
			<li>每天提供的有效职位超过<span class="orange">15万</span>个</li>
			<li>拥有<span class="orange">976万</span>家会员企业</li>
			<li><span>求职者全程免费，中高级人才享受免费推荐服务</span></li>
			<li><span>采用多种措施，严格保护您的隐私</span></li>
			</ul>
		</div>
		<div class="products">
		<a href="#" class="pic pic1">简历填写</a>
		<a href="#" class="pic pic2">职位推荐</a>
		<a href="#" class="pic pic3">职位订阅</a>
		<a href="#" class="pic pic4">浏览记录</a>
		<a href="#" class="pic pic5">隐私保险箱</a>
		<a href="#" class="pic pic6">简历外发</a>
		</div>
	</div>
	<form id="formPersonLogin" action="/api/web/person.api" method="post" autocomplete="off">
	<input type="hidden" name="act" value="login" />
	<input type="hidden" name="txtUserType" value="1">
	<input type="hidden" name="txtAppType" value="1">
	<div class="right">
		<div class="box">
			<div id="loginHelpDiv" class="boxTip" style="display:none;">
				<div class="boxTipCon">
					<div class="boxArrow"></div>
					<p class="boxTipT">登录小提示</p>
					<dl>
					<dt>您是否锁定了键盘的大写功能？</dt>
					<dd>请检查您键盘上的"Caps Lock"或"A"灯是否亮着，如果是，请先按一下"Caps Lock"键然后重新输入。</dd>
					</dl>
					<dl>
					<dt>您是否忘记或不小心输入了错误的密码？</dt>
					<dd>您可以通过<a href="/person/passwordForget.html">忘记密码</a>重新设置信息。</dd>
					</dl>
					<dl>
					<dt>仍然有问题？</dt>
					<dd>请到<a href="/help/index.html">帮助中心</a>或<a href="/about/contract.html">联系我们</a>，服务热线：<em>400-8108-597</em></dd>
					</dl>
				</div>
			</div>
			<div class="boxP">
				<div class="tit"><h3></h3></div>
				<div class="con">
					<div class="tip" id="loginMsg" >
						<!--<span class="verJudgeError">用户名或密码错误</span>-->
					</div>
				</div>
				<div class="teamLst">
					<div class="team">
						<div class="teamL">用户名</div>
						<div class="teamR">
							<span class="verText"><input id="txtUsername" name="txtUsername" watermark="用户名" onkeydown="if(event.keyCode==13)return false;" type="text" class="inputText" value=""/></span>
						</div>
					</div>
					<div class="team">
						<div class="teamL">密&nbsp;&nbsp;码</div>
						<div class="teamR">
							<span class="verText"><input id="txtPassword" name="txtPassword" onkeydown="if(event.keyCode==13)return false;"
								autocomplete="off" type="password" class="inputText"/></span>
						</div>
					</div>
					<div class="team">
						<div class="teamL">验证码</div>
						<div class="teamR">
							<span class="verText"><input id="txtAuthCode" name="txtAuthCode" type="text" style="width:40px;" class="inputText"/></span>
							<span class="verTxt" style="margin:2px 0 0 5px;">
								<a href="javascript:void(0)" onclick="personLogin.refreshAuthCode();return false;"><img id="imgAuthCode"/>换一张</a>
							</span>
						</div>
					</div>
				</div>
				<div class="btn"><a href="javascript:void(0)" id="btnLogin"  class="btn4"><b class="L"></b><b class="R"></b>登&nbsp;&nbsp;录</a><a href="/person/passwordForget.html" id="btnForgetPwd">忘记密码</a></div>
				<!--<div class="check"><input type="checkbox" id="chkSave" name="chkSave" value="true" /><label for="chkSave">记住我的登录状态</label></div>-->
			<div class="bot">您还没有账号？<a href="/person/register.html">立即注册</a></div>

			</div>
			<div class="thirdLogin">
				<p>使用合作账号登录</p>
				<div class="thirdLoginIco">
					<a class="qq" href="http://api.597.com/qq/login.api" target="_blank">QQ登陆</a>
					<a class="sina" href="http://api.597.com/weibo/login.api" target="_blank">新浪微博登陆</a>
					<a class="rr" href="">微信登陆</a>
				</div>
			</div>
			</div>
			<!--<div class="bannerR"><a href="/app/p/" ><img alt=""  src="/img/hb/login/bannerR.gif"  /></a></div>-->
	</div>
	</form>
	<div class="clear"></div>
</div>

<!--{template footer}-->

<script type="text/javascript" language="javascript">
	var personLogin = {
		initialize: function() {
			personLogin.refreshAuthCode();
			personLogin._initContorl();
			personLogin.scoll.initialize();
		},
		_initContorl:function(){
			$('#txtAuthCode').autoUpper();
			$('#formPersonLogin').find(':input').keydown(function(event) {
				var e = $.event.fix(event);
				if (e.keyCode == 13) {
					$('#formPersonLogin').find('#btnLogin').click();
				}
			});

			$('#btnLogin').click(function(){
				var err = '', con = $('#formPersonLogin');
				var username = con.find('#txtUsername');
				var password = con.find('#txtPassword');
				var authcode = con.find('#txtAuthCode');
				if (username.val() == '' || username.val() == username.attr('watermark')) {
					err = '<span class="verJudgeError">请输入用户名&nbsp;</span>';
					username.focus();
				}
				else if (password.val() == '') {
					err = '<span class="verJudgeError">请输入密码&nbsp;</span>';
					password.focus();
				}
				else if (authcode.val() == '' && authcode.is(':visible')) {
					err = '<span class="verJudgeError">请输入验证码&nbsp;</span>';
					authcode.focus();
				}
				if (err.length > 0) {
					$('#loginMsg').html(err);
					$(el).stopRunning();
					return false;
				}
				$(this).submitForm({ beforeSubmit: $.proxy(formPersonLogin.form, formPersonLogin),success:function(result){
					if(result.status>0){
						$.anchorMsg("登陆成功",{title: "登陆成功", icon: "success"});
						window.location="/person/";
					}else{
						if (result.status==-13 || result.status==-14 || result.status==-16){
							personLogin.refreshAuthCode();
						}
						$.anchorMsg(result.msg, {title: result.msg, icon:'fail' });
					}
				},clearForm:false});
			});

		},
		scoll:{
			nav_today:null,ul:null,ul_h:null,n:0,ul_size:null,timer:null,
			initialize:function(){
				personLogin.scoll.nav_today=$("#marquee");
				personLogin.scoll.ul=personLogin.scoll.nav_today.find('li');
				personLogin.scoll.ul_h=personLogin.scoll.ul.height();
				personLogin.scoll.ul_size=personLogin.scoll.ul.size();
				personLogin.scoll.nav_today.find("ul").append( personLogin.scoll.ul.clone());
				personLogin.scoll.timer=window.setInterval(function() {
					personLogin.scoll.start();
				}, 2000);
				personLogin.scoll.nav_today.mouseover(function() {
					personLogin.scoll.stop();
				}).mouseout(function() {
					personLogin.scoll.restart();
				});
			},
			start:function(){
				personLogin.scoll.scrollUp();
				if (personLogin.scoll.n == personLogin.scoll.ul_size) {
					personLogin.scoll.nav_today.scrollTop(0);
					personLogin.scoll.n = 0;
				}
			},
			stop:function() {
				clearInterval(personLogin.scoll.timer);
			},
			restart:function() {
				personLogin.scoll.timer = window.setInterval(function() {
					personLogin.scoll.start();
				}, 2000);
			},
			scrollUp:function() {
				if (personLogin.scoll.nav_today.is(":animated")) { return false; }
					personLogin.scoll.nav_today.animate({ scrollTop: personLogin.scoll.nav_today.scrollTop() +  personLogin.scoll.ul_h }, "normal", function() {
					personLogin.scoll.n++;
					if (personLogin.scoll.n == personLogin.scoll.ul_size) {
						personLogin.scoll.nav_today.scrollTop(0);
						personLogin.scoll.n = 0;
					}
				});
			}
		},
		refreshAuthCode:function(){
			var src = '/api/web/authCode.api?' + Math.random() + '&key=personLogin';
			$('#imgAuthCode').attr('src', src);
			$('#txtAuthCode').val('');
		},
		goPersonIndex:function(indexurl) {
			var url = $('#url').val();
			if (url == '') url = indexurl;
			window.location = url;
		}
	}
	personLogin.initialize();
</script>
</body>
</html>
