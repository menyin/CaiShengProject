<?exit?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>事业单位招聘信息_{$domainInfo['region_name_short']}597人才网</title>
	<meta name="keywords" content="597{$domainInfo['region_name_short']}人才网官方网站、{$domainInfo['region_name_short']}人才网、{$domainInfo['region_name_short']}招聘网、{$domainInfo['region_name_short']}最新招聘信息" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/base.css?v=20150226" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20150226"></script>
	<style type="text/css">
		body{margin:0px;padding:0px;background: #fff;font-size:14px;}
		#header{width:100%;height:398px;background:#35A6EC url("http://cdn.{ROOT_DOMAIN}/images/institution_head.png") no-repeat center;}
		#footer{width:100%;height:30px;}
		#c{width:898px;margin:0px auto;padding:10px 0px 10px 60px;border:1px solid #35A6EC;min-height: 200px;}

		h1{width:960px;height:40px;line-height:40px;margin:0px auto 0 auto;text-align:center;font-size:16px;background-color:#35A6EC;color:#fff; font-weight: bold; }
		.areainstitution{padding:10px;}
		.areainstitution a{padding:10px;}
		.peixunPart{background:#FFF; }
		.news_list{ width:850px; height:auto;}
		.news_list ul li{border-bottom:1px #d9d9d9 solid; height: 30px; line-height: 30px; padding: 10px; font-size: 12px;}
		.news_list ul li .li_l{float: left;}
		.news_list ul li .li_r{float: right;}
	</style>
</head>

<body>
	<div id="header"></div>
	<div class="areainstitution">
		热门地区事业单位招聘信息:<a href="//xm.{ROOT_DOMAIN}/institution/">厦门地区</a><a href="//qz.{ROOT_DOMAIN}/institution/">泉州地区</a><a href="//fz.{ROOT_DOMAIN}/institution/">福州地区</a><a href="//pt.{ROOT_DOMAIN}/institution/">莆田地区</a><a href="//zz.{ROOT_DOMAIN}/institution/">漳州地区</a><a href="//np.{ROOT_DOMAIN}/institution/">南平地区</a>
	</div>
	<h1>{$domainInfo['region_name_short']}事业单位招聘</h1>
	<div id="c">
			<div class="peixunPart">
				<div class="news_list">
					<ul>
						<!--{loop $news $l}-->
							<li>
								<div class="li_l">
								<a target="_blank" href="/institution/{$l['detail_id']}.html">
									{$l['detail_title']}
								</a>
								</div>
								<div class="li_r">{$l['_detail_time']}</div>
							</li>
						<!--{/loop}-->
					</ul>
				</div>
				<div class="page">
					{$showpage}
				</div>
			</div>
	</div>
	<footer>
		<p>©copyright:{$curYear} 597人才网 版权所有</p>
	</footer>
</body>
<div id="sus" class="sus">
	<a class="backTop jpFntWes" title="返回顶部" href="javascript:void(0);" style="display: none;">&#xf0d8;</a>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(document).scrollTop() > 120) {
				$('#sus').find('a.backTop').css({
					'display': 'inline-block'
				});
			} else {
				$('#sus').find('a.backTop').css({
					'display': 'none'
				});
			}
		});

		$('#sus').find('a.backTop').click(function() {
			$('html,body').animate({
				scrollTop: 0
			});
		});
	});
</script>
<script src="//cdn.597.com/tongji.js?v=20160317" language="JavaScript"></script>
</html>
