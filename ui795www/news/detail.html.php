<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>{$gg[title]} 网站公告 我的597-597人才网(597.com)</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/basefront.css?v=20130822" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/publicrecruit.css?v=20130510" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
</head> 
<body>
<!--{template toper}-->
	<div class="head">
		<div class="headCon"><a href="/"><img src="http://cdn.597.com/www/images/logo.gif" /></a></div>
	</div>
	<div class="bread">
		<div class="breadCon">您的位置：<a href="/">597人才网</a>&gt;<span>公告信息</span></div>
	</div>

<div class="content">
	<div class="contentCon">
		
		<a href="#top" id="scrolltop" class="backTop"></a>
		<div class="info">
			<h1 id="infoTitle">{$gg[title]}</h1>
			<div class="tip">
				<div class="tipL">消息来源：<b>597.com </b><em>{$gg[createTime]}</em></div>
				<div class="tipR">
					<div class="share">
						<b>分享到：</b>
						<a title="分享到新浪微博" class="sina" href="javascript:void(0);" id="shareSina"></a>
						<!--新浪微博-->
						<a title="分享到腾讯微博" class="txwb" href="javascript:void(0);" id="shareTengXun"></a>
						<!--腾讯微博-->
						<a title="分享到QQ空间" class="qzone" href="javascript:void(0);" id="shareQQ"></a>
						<!--QQ空间-->
						<a title="分享到人人网" class="renren" href="javascript:void(0);" id="shareRenRen"></a>
						<!--人人网-->
						<a title="分享到开心网" class="happy" href="javascript:void(0);" id="shareKaiXing"></a>
						<!--开心网-->
						<a title="分享到搜狐微博" class="sohu" href="javascript:void(0);" id="shareSouHu"></a>
						<!--搜狐微博-->
						<a title="分享到网易微博" class="wangyi" rel="nofollow" href="javascript:void(0);" id="shareWangyi"></a>
						<!--网易微博-->
					</div>	  
								
				</div>
				<div class="clear"></div>
			</div>
			<div class="infoCon">
				<div class="infoConTxt">
				<script language="javascript">
					function fontZoom(size){
					document.all.fontzoom.style.fontSize=size+"px"}
				</script>
					{$gg[content]}
				</div>
			</div>
			<!--
			<div class="infoPage">
				<div class="infoPageL">上一篇：<a href='#'></a></div>
				<div class="infoPageR">下一篇：<a href='#'></a></div>
				<div class="clear"></div>
			</div>
			-->
		</div>
	</div>
</div>
<div class="contentBot"></div>
<!--{template footer}-->
<script language="javascript" type="text/javascript">
	//返回顶部
	$(window).scroll(function() {
		var vtop = $(document).scrollTop();
		var animateRtTop
		if ($.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
			animateRtTop = eval(vtop + 173) + "px";
		} else {
			animateRtTop = eval(vtop + 233) + "px";
		}
		$("#scrolltop").attr("style", "top:" + animateRtTop);
		if (vtop <= 313) {
			$("#scrolltop").hide();
		}
	});
</script>

</body>
</html>