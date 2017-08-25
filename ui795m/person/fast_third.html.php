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
	<title>597人才网触屏版_快速注册</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20141227" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_index2.css?v=20150915"/>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_style2.css?v=20140325" />
</head>
<body>
<div class="content" id="content">
	<section class="j_searchTop">
	<a class="logo" href="/{$city}/"></a>
	<a class="position" href="/changecity.html"><span class="text">{$domainInfo['region_name_short']}</span><img src="http://cdn.597.com/m/images/change-city.png" width="9" height="9" /></a>
	
	<div class="login_btn right">
		<a style="padding-left:5px;" href="/{$city}/">首页</a>|
		<!--{if $_SESSION['uid']}-->
			<a style="padding-left:5px;" href="/person/">求职中心</a>
		<!--{elseif $_SESSION['cid']}-->
			<a style="padding-left:5px;" href="/company/">招聘中心</a>
		<!--{else}-->
			<a style="padding-left:5px;" href="/person/login.html">登录</a>|<a href="/person/register.html">注册</a>
		<!--{/if}-->
	</div>

</section><!--j_searchTop end-->
<header style="height:50px;">
<a class="btn_back" id="btn_back" onclick="history.back();" ></a>
<h2>求职简历</h2>
</header>
<style>
.reg_F{
  height: 40px;
  background-color: #E8352E;
  border-bottom: 1px solid #E8352E;
  overflow: hidden;
}
.reg_F .logo2 {
  width: 135px;
  height: 40px;
  background: url(http://cdn.597.com/m/images/logo.png)no-repeat;
  float: left;
  margin-left: 10px;
  background-size: 135px 40x;
}
.reg_F a.detBtn {
  color: #fff;
  height: 30px;
  line-height: 30px;
  position: absolute;
  right: 8px;
  top: 8px;
  width: 60px;
  text-align: center;
  z-index: 3;
  background: #e85d4e;
  text-align: center;
  border: 1px solid #d62e1b;
  border-radius: 3px;
}
.success_info { background: #fff; padding:20px 0 50px;}
.success_info h2 {font-size: 18px; color:#666; text-align: center; margin-bottom: 30px;}
.success_info p a {width: 120px; border:1px solid #ddd; background: #f2f2f2; border-radius:5px; -webkit-border-radius:5px; height: 40px; line-height: 40px; display: inline-block;}
.success_info p a.wanshan { background-color: #E75F59; border-color:#E75F59; color:#fff; margin-left: 20px;}
.success_info img {width: 30px; margin-right: 10px; position: relative; top:5px;}
</style>
	
	<section class="success_info">
		<h2><img src="http://cdn.597.com/m/images/success_ico.png"  />完成求职简历填写并申请成功</h2>
		<p >
			<a href="/person/resumes.html?act=view">预览简历</a>
			<a href="/person/resumes.html" class="wanshan">完善简历</a>
		</p>
	</section>
	<!--{template footer}-->
</div>
</body>
</html>
