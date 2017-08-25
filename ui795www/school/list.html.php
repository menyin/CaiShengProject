<?exit?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>校园招聘信息_{$domainInfo['region_name_short']}597人才网</title>
	<meta name="keywords" content="597{$domainInfo['region_name_short']}人才网官方网站、{$domainInfo['region_name_short']}人才网、{$domainInfo['region_name_short']}招聘网、{$domainInfo['region_name_short']}最新招聘信息" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/base.css?v=20150226" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20150226"></script>
	<style type="text/css">
		body{margin:0px;padding:0px;background: #fff;font-size:14px;}
		#header{width:100%;height:398px;background:#28A25E url("http://cdn.{ROOT_DOMAIN}/images/school_head.png") no-repeat center;}
		#footer{width:100%;height:30px;}
		#c{width:898px;margin:0px auto;padding:10px 0px 10px 60px;border:1px solid #28A25E;min-height: 200px;}

		h1{width:960px;height:40px;line-height:40px;margin:0px auto 0 auto;text-align:center;font-size:16px;background-color:#28A25E;color:#fff; font-weight: bold; }
		.areaSchool{padding:10px;}
		.areaSchool a{padding:10px;}
		.peixunPart{background:#FFF; }
		.news_list{ width:850px; height:auto;}
		.news_list .li_l{float: left;width: 150px;font-size: 16px;color:#3D84B8;font-weight: bold;}
		.news_list .li_r{font-size: 16px;color:#3D84B8;font-weight: bold;}
		.news_list ul li{width:100%;height:100px; line-height:26px; border-bottom:#d9d9d9 solid 1px;}
		.news_list ul li .newsday{ width:127px; color:#cfcece; float:left; font-size:15px; background: url(//cdn.{ROOT_DOMAIN}/www/images/peixun/pxnew3.jpg) center right no-repeat; margin-top:25px;text-align:center}
		.news_list ul li .newsday img{ width:114px; height:68px; border:1px solid #dedede; margin-top:-10px;}
		.news_list ul li .newsday h3{ font-size:28px; font-weight:100; color:#cfcece; }
		.news_list ul li .newstitle{width:590px; color:#999; float:left;margin-top:40px; margin-left:25px;display:inline; line-height:22px;font-size: 10px;}
		.news_list ul li .newstitle h3{font-size:16px; color:#2f2f2f;font-weight:100;}
		.news_list ul li .newstitle h3 i{color: #f00;margin-left: 5px;}
		.news_list ul li span{margin-top:40px; margin-right:40px; display:inline; float:right; width:30px; height:30px;background:url(//cdn.{ROOT_DOMAIN}/www/images/peixun/pxnew10.jpg) right center no-repeat;}
		.news_list ul li a:hover{ outline:none; text-decoration:none; display:talbe;cursor:pointer}
		.news_list ul li:hover{ border-bottom:#d9d9d9 solid 1px; background:#0096db ; outline:none; text-decoration:none; cursor:pointer}
		.news_list ul li:hover span{ background:url(//cdn.{ROOT_DOMAIN}/www/images/peixun/pxnew2.jpg)}
		.news_list ul li:hover .newsday{background: url(//cdn.{ROOT_DOMAIN}/www/images/peixun/pxnew4.jpg) right center no-repeat; }
		.news_list ul li:hover .newsday img{border:1px solid #fff;}
		.news_list ul li:hover .newstitle h3{color:#fff}
		.news_list ul li:hover .newstitle{color:#8dc4ea}
	</style>
</head>

<body>
	<div id="header"></div>
	<div class="areaSchool">
		热门地区校园招聘信息:<a href="//xm.{ROOT_DOMAIN}/school/">厦门地区</a><a href="//qz.{ROOT_DOMAIN}/school/">泉州地区</a><a href="//fz.{ROOT_DOMAIN}/school/">福州地区</a><a href="//pt.{ROOT_DOMAIN}/school/">莆田地区</a><a href="//zz.{ROOT_DOMAIN}/school/">漳州地区</a><a href="//np.{ROOT_DOMAIN}/school/">南平地区</a>
	</div>
	<h1>{$domainInfo['region_name_short']}校园招聘</h1>
	<div id="c">
			<div class="peixunPart">
				<div class="news_list">
					<ul>
						<div>
							<div class="li_l">举办时间</div><div class="li_r">举办双选会学校</div>
						</div>
						<!--{loop $news $l}-->
							<li>
								<a target="_blank" href="/school/{$l['detail_id']}.html" style="display: block;height: 100%;">
									<div class="newsday"><h3>{$l['zf_d']}</h3>{$l['zf_Ym']}</div>
									<div class="newstitle"><h3>{$l['detail_title']}<!--{if $l['zf_time']<$time}--><i>(已结束)</i><!--{/if}--></h3></div><span></span>
								</a>
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
