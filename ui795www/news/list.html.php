<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>网站公告 -597人才网(597.com)</title>
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
		<div class="lst">
			<h3></h3>
			<div class="lstCon">
				<ul id="lstConList">
					<!--{loop $items $item}-->
					<li><div class="L"><a href="/news/detail-{$item[gid]}.html">{$item[title]}</a></div><em>{$item[createTime]}</em></li>   
					<!--{/loop}-->
				</ul>
			</div>
			<span id="pager"><div class="page"><div class="paginator">{$showpage}</div></div></span>
			<div class="clear"></div>
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