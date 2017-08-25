<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>试用会员_597人才网</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/com_index.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=20140312' />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.9.1.min.js?v=2017" charset="utf-8"></script>
</head>
<body id="body">

	<!--{template company/header}-->
	<style type="text/css">
		hgroup{padding:20px;}
		.freeTip{padding:50px 0px 200px 0px; font-size: 16px; line-height: 35px; margin-left: 100px; }
		.freeTip p{text-indent:30px;}
		.freeTip span{font-weight: bold;}
	</style>

	<div class="content" id="content">
		<section class="section">
			<hgroup>
			<div class="bd" id="TabC">
				<div class="freeTip">
					<!--{if $right==1}-->
						<span>温馨提示：</span>
						<p>您的营业执照未通过审核，您可以查看进度，<a href="/company/account/licence.html">点击查看</a></p>
					<!--{else}-->
						<span>温馨提示：</span>
						<p>您是试用会员，本月({$dateY}年{$dateM}月)查看简历数量已超过限制！</p>
						<!--{if $adminInfo['adminName']}-->
							<p>要继续查看简历及升级服务请联系您的客服专员： <p>
							<p>{$adminInfo['adminName']}、{$adminInfo['adminTelphone']} &nbsp;&nbsp;QQ:{$adminInfo['adminCode']} <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$adminInfo['adminCode']}&site=qq&menu=yes"><img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:{$adminInfo['adminCode']}:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p><p>或联系全国热线电话：400-8108-597</p>
						<!--{else}-->
							<p>要继续查看简历及升级服务请联系全国热线电话：400-8108-597<p>
						<!--{/if}-->
						<p><a href='/company/service/service.html'>我公司要成为正式会员</a> | <a href='/about/price.html'>服务报价</a></p>
						<p><a href='/company/service/service.html'>在线开通会员</a></p>
					<!--{/if}-->
				</div>
			</div>
			</hgroup>
		</section>
	</div>

	<!--{template company/footer}-->

</body>
</html>