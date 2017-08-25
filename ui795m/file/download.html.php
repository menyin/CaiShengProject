<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>客户端-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=20150106" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_style2.css?v=20140325" />
	<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/www/js/jquery.js?v=20130808"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=20140319"></script>
	<style>
		.item_B{
			float: left;
			width: 50%;
			text-align: center;
			position: relative;
		}
		.img_b{
			width: 60%;
		}
		.itemImg{
			text-align: center;
			padding:30px 0;
		}
		.isIos{
			display: none;
		}
	</style>
</head>
<body style="background-color: white;">
	<div class="content" style="overflow: hidden;">
		<!--{template header}-->
	</div>
	<div class="item_B" id="per">
		<div class="itemImg">
			<img src="//cdn.{ROOT_DOMAIN}/m/images/597perApp.png" class="img_b">
		</div>
		<div style="font-weight: bold;">597求职App</div>
		<div style="color: rgb(150,150,150);margin-top: 10px;">（找工作）</div>
		<!-- Android个人app -->
		<div class="itemImg isAndroid">
		<a href="/file/app.html?act=per">
			<img src="//cdn.{ROOT_DOMAIN}/m/images/Android_icon.png" class="img_b" style="width: 65%;">
		</a>
		</div>
		<!-- ios个人app -->
		<div class="itemImg isIos">
			<a href="https://itunes.apple.com/cn/app/597%E4%BA%BA%E6%89%8D%E7%BD%91-%E4%B8%AA%E4%BA%BA%E7%89%88/id1205381118?mt=8">
			<img src="//cdn.{ROOT_DOMAIN}/m/images/IOS_icon.png" class="img_b" style="width: 65%;">
		</a>
		</div>

		<div style="margin-top: 60px;"><a href="/person/register.html">注册</a></div>
		<div style="width: 1px;height: 20px;background-color: rgb(150,150,150);position: absolute;right: 0;bottom: 0;"></div>
	</div>
	<div class="item_B" id="com">
		<div class="itemImg">
			<img src="//cdn.{ROOT_DOMAIN}/m/images/597comApp.png" class="img_b">
		</div>
		<div style="font-weight: bold;">597企业App</div>
		<div style="color: rgb(150,150,150);margin-top: 10px;">（找人才）</div>
		<!-- Android企业app -->
		<div class="itemImg isAndroid">
			<a href="/file/app.html">
			<img src="//cdn.{ROOT_DOMAIN}/m/images/Android_icon.png" class="img_b" style="width: 65%;">
			</a>
		</div>
		<!-- ios企业app -->
		<div class="itemImg isIos">
			<a href="https://itunes.apple.com/cn/app/597%E4%BA%BA%E6%89%8D%E7%BD%91-%E4%BC%81%E4%B8%9A%E7%89%88/id1193916623?mt=8">
			<img src="//cdn.{ROOT_DOMAIN}/m/images/IOS_icon.png" class="img_b" style="width: 65%;">
			</a>
		</div>
		<div style="margin-top: 60px;"><a href="/person/login.html">登录</a></div>

	</div>
</body>
<script type="text/javascript">
	 var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    // alert('是否是Android：'+isAndroid);
    // alert('是否是iOS：'+isiOS);
    if (isAndroid) {

    }else if(isiOS){
    	$(".isAndroid").hide();
    	$(".isIos").show();

    }

    if (u.match(/MicroMessenger/i) == 'MicroMessenger') {
    	$('#per .isAndroid a,#per .isIos a').attr('href','http://a.app.qq.com/o/simple.jsp?pkgname=com.xm597.app');
    	$('#com .isAndroid a,#com .isIos a').attr('href','http://a.app.qq.com/o/simple.jsp?pkgname=com.rcw597.app');
    }

</script>
</html>