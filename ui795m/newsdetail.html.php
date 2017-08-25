
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}
/m/75x75.png" >
	<title>{$domainInfo['region_name_short']}人才网_{$domainInfo['region_name_short']}招聘网_{$domainInfo['region_name_short']}人才网最新招聘信息_{$domainInfo['region_name_short']}人事人才网_{$domainInfo['region_name_short']}人才市场_{$domainInfo['region_name_short']}找工作-597{$domainInfo['region_name_short']}人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}
/m/js/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}
/m/css/m_base.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}
/m/css/m_front.css"/>
</head>
<body>
<div id="content">
	<!--{template header}-->
	<header class="pubtop">
		<a href="javascript:history.go(-1)" class="back jpFntWes"></a><a href="javascript:void(0)" class="navBtn" id="navBtn" name="top"><i class="jpFntWes"></i></a>
		<div class="cent"><p><b>{$news[category]}</b></p></div>
	</header>
	<nav style="display: none;" class="pubnav" id="pubnav">
	<a href="/"><i class="jpFntWes"></i><span>首页</span><b></b></a>
	<a href="/search/" id="schBtn"><i class="jpFntWes"></i><span>职位搜索</span><b></b></a>
	<a href="/person/"><i class="jpFntWes"></i><span>求职中心</span></a>
	</nav>

	<section class="layout">
		<div class="part newsTxt">
			<h1>{$news[detail_title]}</h1>
			<h4 style=" color:#999; text-align:center;">来源：{$news[detail_from]}<span style="margin-left:20px;">发布时间：{$news[detail_time]}</span></h4>
			<p style="text-indent:30px; margin-top:20px;">{$news[detail_content]}</p>
			<p style=" text-align:right;display:none;"><img src="//cdn.{ROOT_DOMAIN}
/m/images/share.jpg" /></p>
			<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
		</div>
		<div class="part modLst nowJobs">
			<div class="partT">推荐资讯</div>
			<div class="partC">
				<ul>
					<!--{loop $tuijian $k $l}-->
					<li>
						<a href="news.html?act=detail&id={$l['detail_id']}">
							<div class="txt">
								<p>[ {$category[$l[detail_cid]]} ] {$l['detail_title']}</p>
							</div>
						</a>
					</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
	</section>
<!--{template footer}-->
</div>
<script type="text/javascript">
window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdPic": "", "bdStyle": "0", "bdSize": "16" }, "share": {}, "image": { "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"], "viewText": "分享到：", "viewSize": "16" }, "selectShare": { "bdContainerClass": null, "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>

<script>
var $schbox = $('#schbox');
var $schBtn = $('#schBtn');
var $closeSchBox = $('#closeSchBox');
var $schBoxText = $('#schBoxText');
var $content = $('#content');

var $navBtn = $('#navBtn');
var $pubnav = $('#pubnav');
$(document).ready(function(){
	$('#hotMore').click(function(){
		$('#hotLst').height('100%');
		$(this).css({'display':'none'});
	});

	$schBtn.bind('click',function(){
		$content.css({'display':'none'});
		$schbox.css({'display':'block'});
		$schBoxText.focus();
	});

	$closeSchBox.bind('click',function(){
		$schbox.css({'display':'none'});
		$content.css({'display':'block'});
	});

	$navBtn.toggle(function(){
		$pubnav.slideDown();
	},function(){
		$pubnav.slideUp();
	});


	$.focusblur('input.text');
});
</script>
<footer>
</footer>
<script type="text/javascript">
$(document).ready(function(){
	function createTips(){
  		var strArray = ['赶紧推荐给您的朋友阅读吧。', '分享一下，推荐阅读。'];
  		return  strArray[Math.round(Math.random())];
	}
	//shareSina,shareTengXun,shareQQ,shareRenRen
	 //分享到新浪微博
	 $('#shareSina').click(function()
	 {
		 var tip =  createTips(),
		 	acttitle = $('#title').html(),
		 	info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 职场指南 -> {$news[category]})，'
		  var href = 'http://service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //腾讯微博
	 $('#shareTengXun').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#title').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 职场指南 -> {$news[category]})，'
		 var href = 'http://v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //QQ空间
	 $('#shareQQ').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#title').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 职场指南 -> {$news[category]})，'
		 var href = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //人人网
	 $('#shareRenRen').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#title').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 职场指南 -> {$news[category]})，'
		 var href = 'http://share.renren.com/share/buttonshare.do?link=' + encodeURIComponent(window.location.href) + '&title==' + encodeURIComponent(info + tip);
		 $(this).attr({ target: '_blank', href: href });
	 });
});
</script>
</body>
</html>
