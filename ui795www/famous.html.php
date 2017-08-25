<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>名企招聘 597人才网</title>
	<link rel="shortcut icon" href="http://cdn.597.com/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/basefront.css?v=20130808" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/fam.css?v=20130808" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/control.js?v=20130808"></script>
</head>
<body>
<!--{template header}-->
<div class="content">	
	<div class="contentCon">

		<input type="hidden" id="hidLiId" value="li1" />
			<div class="dataLeft">
				<h5 id="hCompanyClass">热门企业</h5>
				<div class="famCon" id="CompanyList">
					<ul>
						<li>
							<div class="pic">
								<a target="_blank" href="#" title="厦门维普资讯有限公司"><img src="http://cdn.597.com/well/5771.jpg" border=0 width=115 height=45 alt="厦门维普资讯有限公司"></a>
								<h6><a href="#" title='厦门维普资讯有限公司'>厦门维普资讯有限公司</a></h6>
								<div class="adTxt">
									<p><a href="#" title="数据处理采集程序员" target="_blank">数据处理采集程序员</a></p>
									<p><a href="#" title="司机" target="_blank">司机</a></p>
									<p><a href="#" title="产品经理" target="_blank">产品经理</a></p>
									<p><a href="#" title="网站美工" target="_blank">网站美工</a></p>
								</div>
							</div>
							<div class="cInfo">
								<p  title='计算机软件 互联网/电子商务'>所处行业：计算机软件 互联网/电子商务</p>
								<p>单位性质：股份制企业</p>
								<p>公司规模：101-500人</p>
								<p>所在地区：厦门-思明区</p>								  
							</div>
							<div class="botBtn"><a href='#' class='gz' id='a290886'>关注</a><a href='#' class='pl' target='_blank'>评论</a></div>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			<div class="menuRight" id="FamousCategoryContainer">
				<ul>
					<li id="li1"><a id="" href="#" class="menuLst lst1">热门企业</a></li>
					<li id="li2"><a id="" href="#" class="menuLst lst2">计算机/互联网</a></li>
					<li id="li3"><a id="" href="#" class="menuLst lst3">通信/电子</a></li>
					<li id="li4"><a id="" href="#" class="menuLst lst4">制造/营运</a></li>
					<li id="li5"><a id="" href="#" class="menuLst lst5">房地产/建筑/装饰</a></li>
					<li id="li6"><a id="" href="#" class="menuLst lst6">金融/银行/会计</a></li>
					<li id="li7"><a id="" href="#" class="menuLst lst7">广告/媒体/印刷</a></li>
					<li id="li8"><a id="" href="#" class="menuLst lst8">制药/医疗</a></li>
					<li id="li9"><a id="" href="#" class="menuLst lst9">能源/原材料</a></li>
					<li id="li10"><a id="" href="#" class="menuLst lst10">物流/运输/航空</a></li>
					<li id="li11"><a id="" href="#" class="menuLst lst11">贸易/消费</a></li>
					<li id="li12"><a id="" href="#" class="menuLst lst12">专业服务/教育/培训</a></li>
					<li id="li13"><a id="" href="#" class="menuLst lst13">生活服务/娱乐</a></li>
					<li id="li14"><a id="" href="#" class="menuLst lst14">政府/非盈利机构/其它</a></li>
				</ul>
			</div>
			<div class="clear"></div>
	</div>
</div>		
<!--{template footer}-->
	<script type="text/javascript">

	$(document).ready(function(){
		$("#CompanyList").find("li").find('.pic').hover(function() {
			var imgHeight = $(this).find("img").height();
			if ($(this).find("div.adTxt").find('p').length>0) {
				$(this).find("img").animate({ top: "-" + imgHeight }, { queue: false, duration: 300 });
			}
		}, function() {
			if ($(this).find("div.adTxt").find('p').length > 0) {
				$(this).find("img").animate({ top: "0" }, { queue: false, duration: 300 });
			}
		});
	});

	function myfun()
　　{
		$("#"+$("#hidLiId").val()).siblings().removeClass('cu').end().addClass('cu');
　　}
	
	window.onload = myfun;
	

   </script>
</body>
</html>