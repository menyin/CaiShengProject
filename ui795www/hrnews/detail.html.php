
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="{$news['detail_title']}_{$domainInfo['region_name_short']}597人才网" />
<meta name="Description" content="{$domainInfo['region_name_short']}597人才网 {$domainInfo['region_name_short']}597人才网HR资讯 {$news['category']} {$news['detail_title']}" />
<title>{$news['detail_title']}_{$domainInfo['region_name_short']}597人才网</title>
<!–[if lt IE9]>
<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>  
<![endif]–>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/front.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/campus.css?v=20150226" />
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20150226"></script>
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
	</script>
	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js?v=181266488"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20150116"></script>
	<script type="text/javascript">
		jpjs.config({
			combos: {
				'@jobMenu': [
					'product.jobMenu', '@changeClass', 'product.sideMenu.sideSortMenuGroup', 'product.sideMenu.sideSortMenu',
					'product.sideMenu.sideSortMenuData', '@popup'
				],
				'@jobPostipGroup': [
					'product.jobList.jobPostipGroup', 'product.jobList.jobPostip', '@popup'
				],
				'@followTemplate': 'template.follow',
				'@jobSortActions': 'product.jobSortActions'
			}
		});
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');

		var currentCity="{$domainInfo['region_site']}";
		
	</script>

</head>
<body>

<!--{template header}-->
<div class="content">
	<div class="bread"><a href="/" id="hrnewsCity">{$domainInfo['region_name_short']}597人才网</a>&gt;<a href="/hrnews/">HR资讯</a>&gt;<a href="/hrnews/list-{$news['detail_cid']}.html">{$news['category']}</a>&gt;<span id="title">{$news['detail_title']}</span></div>
	<div class="campus">
		<div class="left">
			<div class="artInfo leftPart">
				<div class="bd">
					<h1>{$news['detail_title']}</h1>
					<h2>						
						<span>{$news['detail_time']}</span>
						<span>来源:{$news['detail_from']}</span>
						<span>浏览量:{$news['click']}</span>
					</h2>
					<div class="txt">
						{$news['detail_content']}
					</div>
					<div class="bot">
						<!--<div class="lastUp">最后更新:</div>-->
						<div class="share"><b>分享到：</b><a href="javascript:void(0);" class="sina" id="shareSina" title="分享至新浪微博"></a><a href="javascript:void(0);" class="txweibo" id="shareTengXun" title="分享至腾讯微博"></a><a href="javascript:void(0);" class="qzone" id="shareQQ" title="分享至QQ空间"></a><a href="javascript:void(0);" class="renren" id="shareRenRen" title="分享至人人网"></a></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="rightPart">
				<div class="rec">
					<div class="hd">热门推荐</div>
					<div class="bd">
						<ul>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="txtLst">
					<ul>
					<!--{loop $tuijian $l}-->
				   	 <li><a href="/hrnews/detail-{$l['detail_id']}.html" target='_blank'>{$l['detail_title']}</a></li>
				   	<!--{/loop}-->
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<footer>
<!--{template footer}-->
</footer>
<script type="text/javascript">
$(document).ready(function(){
	/*
	jpjs.use('tools.cookie',function(cookie, $){
		var _cityDomain = cookie.get('_cityDomain');
		if(_cityDomain){
			cityUrl = 'http://'+_cityDomain+'.597.com';
			$('#hrnewsCity').attr('href',cityUrl);
		}
	});
	*/

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
		 	info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		  var href = 'http://service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //腾讯微博
	 $('#shareTengXun').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#title').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		 var href = 'http://v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //QQ空间
	 $('#shareQQ').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#title').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		 var href = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //人人网 
	 $('#shareRenRen').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#title').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		 var href = 'http://share.renren.com/share/buttonshare.do?link=' + encodeURIComponent(window.location.href) + '&title==' + encodeURIComponent(info + tip);
		 $(this).attr({ target: '_blank', href: href });
	 });
});
</script>
</body>
</html>
