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
	<title>{$zphInfo['zph_off_name']}-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="revisit-after" content="1 days"/>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_base.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/personage.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_index2.css"/>

<style>
	.content { line-height: 250%; }
	.mainInfo,.zphInfo{background: #fff; padding:10px 15px; margin:15px 8px 0; box-shadow:2px 2px 3px #ddd;}
	.content p {font-size: 14px!important;}
	.h2 { font-size: 18px; font-weight: bold!important;}
	.fb {font-weight: bold; font:bold 14px 微软雅黑!important;}
	.zphInfo {margin-bottom: 20px;}
	.zphInfo h3 {font-weight: bold!important; font-size: 16px;  color:#F45252;}
	.zphInfo a {color:#F45252; font-size: 16px; font-weight: bold!important; text-decoration: underline;}
	.canhui span {display: inline-block; width:49%; float: left; background: #f0f0f0; text-align: center; height: 40px; line-height: 40px; font-size: 14px!important; }
	.canhui em {color:#27AE60; font-weight: bold;}
	.canhui {margin:10px 0;}
	.canhui .com {margin-right:2% ;}	
	footer p {text-align: center;}
	.zphInfo img{width:260px; height: 200px;}

</style>
</head>
<body class="bodyPd" style="background:#f5f7f7;">
<!--{template header}-->
<nav></nav>
<div class="psgSeekHead">
	<div class="psgSeekBg psgPrecise">
		<span style="font-size:16px;">招聘会</span>
		<a href="/zph/" class="getBack icon-svg10"></a>
		<a class="seekBtn" href="javascript:;"></a>
	</div>
</div>
<div class="content" id="content">
	<!--{if $html}-->
	<div class="mainInfo" style="padding:20px;">
		<p><span class="fb">{$html}</span></p>
	</div>
	<!--{else}-->
	<div class="mainInfo">
		<h2 class="h2">{$zphInfo['zph_off_name']}</h2>
		<!--
		<div class="canhui">
			<span class="com">参会企业<em class="fb">（1）</em></span>
			<span> 参会个人<em class="fb">（0）</em></span>
			<div class="clear"></div>
		</div>
		-->
		<p><span class="fb">举办时间</span>：{$zph_off_beginTime} {$beginTime}-{$finishTime}</p>
		<p><span class="fb">举办场馆</span>：{$zph_point['zph_point_name']}  </p>
		<p><span class="fb">举办地址</span>：{$zphInfo['zph_off_address']}</p>
		<p><span class="fb">乘车路线</span>：{$zphInfo['zph_off_bus']}</p>
	</div>
	<div class="zphInfo">
		<h3>企业订展方式：</h3>
		<p>联系人：{$zphInfo['zph_off_linker']}</p>
		<p>电话：{$zphInfo['zph_off_tel']}</p>
		<p>qq：{$zphInfo['zph_off_qq']}</p>
		<p>&nbsp;</p>
		<a href="/zph/company.html?zphId={$id}">参会企业名录及招聘岗位>></a>
		<p>&nbsp;</p>
		<h3>招聘会详情：</h3>
　　	{$zphInfo['zph_off_content']}
	</div>
	<!--{/if}-->
</div>

<!--{template footer}-->

</body>
</html>