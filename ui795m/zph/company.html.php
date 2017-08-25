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
	<title>{$zphInfo['zph_off_name']}参展企业-{$domainInfo['region_name_short']}597人才网触屏版-{$domainInfo['region_name_short']}597人才网</title>
	<meta name="revisit-after" content="1 days"/>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_base.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/personage.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_index2.css"/>

<style>
	html,body {width:100%; height:100%;}
	body.oh {overflow: hidden; height:100%; padding: 0;}
	#zphInfos {padding:15px 0; }
	#zphInfos li { background: #fff; margin: 0 8px 15px; padding:10px 15px; line-height: 200%; box-shadow:1px 1px 3px #ccc;}
	#selItems li a{display: block;}
	#zphInfos li p {margin-top: 5px; font-size: 16px!important;}
	#zphInfos .fb {  white-space: normal; }
	#zphInfos a {font-size: 14px;}
	.ora {color:#f60;}
	.red {color:red;}
	.green {color:#090; font-weight: bold;}
	.mask {z-index:9; display: none;}
	.page { margin-bottom: 15px; text-align: center;}
	.page select { height: 35px; line-height: 35px; vertical-align: middle; border: 1px solid #999; border-radius: 0; margin: 0 10px; border-radius: 5px; }
	.page a,.page span{ border-radius: 5px; height: 33px; line-height: 33px; padding: 0 10px; border: 1px solid #999; background: #f7f7f7; display: inline-block; vertical-align: middle; margin-left: 5px; }
	.page span {color:#ccc; border-color:#ccc;}
	.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
	#content .tit {font-size: 15px; margin:15px 10px 0; font-weight: bold!important; }
	#content .tit  i {display: inline-block; width: 3px; background: #f00; height:15px; margin-right: 5px;}
</style>
</head>
<body class="bodyPd" style="background:#f5f7f7;">
<section class="j_searchTop">
	<a class="logo" href="/"></a>
	<a class="position" href="/changecity.html"><span class="text">{$domainInfo['region_name_short']}</span><img src="http://cdn.597.com/m/images/change-city.png" width="9" height="9" /></a>
	
	<div class="login_btn right">
		<a style="padding-left:5px;font-size:16px;" href="/">首页</a>|
		<!--{if $_SESSION['uid']}-->
			<a style="padding-left:5px;font-size:16px;" href="/person/">个人中心</a>
		<!--{elseif $_SESSION['cid']}-->
			<a style="padding-left:5px;font-size:16px;" href="/company/">招聘中心</a>
		<!--{else}-->
			<a style="padding-left:5px;font-size:16px;" href="/person/login.html">登录</a>|<a href="/person/register.html" style="font-size:16px;">注册</a>
		<!--{/if}-->
	</div>
</section><!--j_searchTop end-->
<nav></nav>
<div class="psgSeekHead">
	<div class="psgSeekBg psgPrecise">
		<span style="font-size:16px;">参展企业</span>
		<a href="javascript:window.history.go(-1);" class="getBack icon-svg10"></a>
		<a class="seekBtn" href="javascript:;"></a>
	</div>
</div>
<div class="mask"></div>
<div class="content" id="content">	
	<h2 class="tit"><i></i>{$zphInfo['zph_off_name']} 参展企业</h2>
	<div id="zphInfos">
		<ul>
			<!--{loop $zph_company_list $l}-->
				<li>
					<p class="fb"><a href="/com-{$l['cid']}/" title="{$l['cname']}" class="green">{$l['cname']}</a></p>
					<!--{if $l['jobList']}-->
						<p class="nList">
							<!--{loop $l['jobList'] $list}-->
								<a href="/job-{$list['_jid']}.html" title="{$list['jname']}">{$list['jname']}、</a>
							<!--{/loop}-->
						</p>
					<!--{/if}-->
				</li>
			<!--{/loop}-->
		</ul>
		<div class="page">
			{$showpage}
		</div>
	</div>
</div>



<script>

	$(document).ready(function() {

		$('.selUl').css('max-height',$(window).height() * 0.6);
		
		$('#selTab li').click(function(){
			$('body').addClass('oh');
			$(this).addClass('cu').siblings().removeClass('cu');
			$('#selWrap').addClass('fix');
			$('.selUl').eq($(this).index()).show().siblings().hide();
			$('.mask').show();
		});

		$('.mask').click(function(){
			$('body').removeClass('oh');
			$('#selWrap').removeClass('fix');
			$('#selTab li').removeClass('cu');
			$('#selItems ul').add('.mask').hide();
		});

	});

</script>


</body>
</html>