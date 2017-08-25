<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><!--{if $id}-->{$category[$id]}_<!--{/if}-->职场指南_{$domainInfo['region_name_short']}597人才网</title>
<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<!–[if lt IE9]>
<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>  
<![endif]–>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/front.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/wkplc.css?v=20150226" />
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
<style>
	
/*页面底部友情链接样式*/
.pageBot{border-top:1px solid #bbb; height:auto;width:100%; overflow:hidden;zoom:1; background:#fff;margin-top:20px;}
 .pageBotCon{width:1000px;margin:0 auto; text-align:left; border-bottom:1px solid #bbb; padding-bottom:10px;}
 footer{ margin-top:0; border-top:none;}
 .frdLink{position:relative;z-index:10;height:50px;overflow:hidden;}
 .footer{margin-top:0;}
 .frdLink b{float:left;display:inline;height:35px;font-size:12px;line-height:35px;width:70px;font-weight:normal;color:#999;}
 .frdLink .linkScroller{float:left;display:inline;line-height:25px;width:930px; height:50px; overflow:hidden;position:relative;}
 .frdLink .linkScroller ul{width:930px;position:absolute;left:0px;margin:5px 0 0;top:0px;}
 .frdLink .linkScroller ul li{float:left; display:inline-block; *display:inline;zoom:1; height:25px; line-height:25px;margin:0 10px 0 0;}
 .frdLink .linkScroller ul li a{color:#424242; display:inline; height:25px; line-height:25px;white-space:nowrap;font-size:12px;}
 .frdLink .linkScroller ul li a:hover{color:#0af;}
 .frdLink .linkScroller{ height:auto;}
 .frdLink .linkScroller ul{ position:inherit;}
</style>
</head>
	
<body>

<!--{template header}-->

<div class="content" >
	<div class="bread"><a href="/" id="guideCity">{$domainInfo['region_name_short']}597人才网</a>&gt;<!--{if $id}--><a href="/guide/">职场指南</a>&gt;<span>{$category[$id]}</span><!--{else}--><span>职场指南</span><!--{/if}--></div>
	<div class="wkplc">
		<div class="left">
			<div class="wkplLst leftPart">
				<div class="hd">
					<h3><!--{if $id}-->{$category[$id]}<!--{else}-->职场指南<!--{/if}--></h3><div class="rBtn"><!--{if $id}--><a href="/guide/">&lt;返回</a><!--{/if}--></div>
				</div>
				<div class="bd" id="lst">
					<ul>
						<!--{loop $news $l}-->
						<li class=" noPic" title='{$l['detail_title']}'>
							<h2><a href="/guide/detail-{$l['detail_id']}.html" target='_blank'>{$l['detail_title']}</a></h2>
							<dl>
							<dt><a><img src="" /></a></dt>
							<dd>
								<div class="txt">
									{$l['detail_content']}...
								</div>
								<div class="bot">
									<p class="time"><i class="jpFntWes">&#xf017;</i><span>{$l['detail_time']}</span></p>
									<div class="share"><a href="javascript:void(0);" class="sina" id="shareSina" title="分享至新浪微博"></a><a href="javascript:void(0);" class="txweibo" id="shareTengXun" title="分享至腾讯微博"></a><a href="javascript:void(0);" class="qzone" id="shareQQ" title="分享至QQ空间"></a><a href="javascript:void(0);" class="renren" id="shareRenRen" title="分享至人人网"></a></div>
									<p class="rTo"><a href="/guide/detail-{$l['detail_id']}.html" target='_blank'>查看详情&gt;&gt;</a></p>
								</div>
							</dd>
							</dl>
					   </li>
					   <!--{/loop}-->
					</ul>
					<div class="page">{$showpage}
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="rightPart">
                <!--{if !$id}-->
				<div class="classify">
					<div class="hd">分类浏览</div>
					<div class="bd">
						<ul>
							<li><a href="/guide/list-10.html">简历指导</a></li>
							<li><a href="/guide/list-11.html">面试技巧</a></li>
							<li><a href="/guide/list-8.html">求职实录</a></li>
							<li><a href="/guide/list-7.html">职场眺望</a></li>
							<li><a href="/guide/list-16.html">薪酬福利</a></li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
                <!--{/if}-->
				<div class="rec">
					<div class="hd">推荐阅读</div>
					<div class="bd">
						<ul>
                            <!--{loop $tuijian $l}-->
						      <li><a href="/guide/detail-{$l['detail_id']}.html" target='_blank'>{$l['detail_title']}</a></li>
                            <!--{/loop}-->
						</ul>
					</div>
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
			$('#guideCity').attr('href',cityUrl);
		}
	});
	*/

	$('#lst').find('li').hover(function(){
		$(this).addClass('hov');
	},function(){
		$(this).removeClass('hov');
	});
});

$(document).ready(function(){
	function createTips(){
  		var strArray = ['赶紧推荐给您的朋友阅读吧。', '分享一下，推荐阅读。'];
  		return  strArray[Math.round(Math.random())];
	}
	 //分享到新浪微博
	 $('#lst .sina').click(function()
	 {
		 var tip =  createTips(),
		 	acttitle = $(this).closest('li').attr('title'),
		 	info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com  职场指南<!--{if $id}--> -> {$category[$id]}<!--{/if}-->)，'
		  var href = 'http://service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //腾讯微博
	 $('#lst .txweibo').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $(this).closest('li').attr('title'),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com  职场指南<!--{if $id}--> -> {$category[$id]}<!--{/if}-->)，'
		 var href = 'http://v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //QQ空间
	 $('#lst .qzone').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $(this).closest('li').attr('title'),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com  职场指南<!--{if $id}--> -> {$category[$id]}<!--{/if}-->)，'
		 var href = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //人人网 
	 $('#lst .renren').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $(this).closest('li').attr('title'),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com  职场指南<!--{if $id}--> -> {$category[$id]}<!--{/if}-->)，'
		 var href = 'http://share.renren.com/share/buttonshare.do?link=' + encodeURIComponent(window.location.href) + '&title==' + encodeURIComponent(info + tip);
		 $(this).attr({ target: '_blank', href: href });
	 });
});

</script>
</body>
</html>
