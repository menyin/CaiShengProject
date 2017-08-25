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
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>地图-{$com[cname]}-597人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="http://cdn.{ROOT_DOMAIN}/m/css/base_m.css?20160307">
	<link rel="stylesheet" href="http://cdn.{ROOT_DOMAIN}/m/css/map_m.css?20160305">

</head>
<body>
	<div id="result"></div>

	<script type='text/javascript' src='http://api.map.baidu.com/api?v=2.0&ak=xckobhjZjWqgK4A6uM00GOX7'></script>
	<script>var G = {name:'{$com[cname]}',point:'{$com[comLongitude]},{$com[comLatitude]}',address:'{$com[comAddress]}',province:'{$com[comCity]}'};var t = 0;t = 1;</script>
	<header id="top">
		<a href="javascript:history.go(-1)">返回</a>
		<a href="/"><img width="100" height="30" src="http://cdn.{ROOT_DOMAIN}/m/images/597logo.png" alt="597人才网"></a>
		<a class="at" href="#"></a>
	</header>
	<div class="line"><em></em></div>

	<nav>
		<span onclick="P.map()" class="on">地图</span>
		<span onclick="P.traffic()">交通路线</span>
		<span class="mk">附近查找</span>
		<p id="bar">
			<em onclick="M.nearsearch('公交站')">公交</em>
			<em onclick="M.nearsearch('美食')">美食</em>
			<em onclick="M.nearsearch('地铁站')">地铁</em>
		</p>
	</nav>

	<div id="con" class="bb">
		<div class="mapwap">
			<div id="map" style="overflow: hidden; position: relative; z-index: 0; color: rgb(0, 0, 0); text-align: left; display: block; background-color: rgb(243, 241, 236);"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default;"><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; -webkit-user-select: none; width: 1440px; height: 400px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><div class="i_company" style="-webkit-user-select: none; left: 708px; top: 170px;"></div><div id="info" style="-webkit-user-select: none; left: 581px; top: 72px; z-index: 4; opacity: 1;"></div></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"><div style="position: absolute; overflow: visible; z-index: -100; left: 720px; top: 200px; display: block; -webkit-transform: translate3d(0px, 0px, 0px);"><img src="http://cdn.{ROOT_DOMAIN}/m/js/saved_resource" style="position: absolute; border: none; width: 256px; height: 256px; left: -190px; top: -241px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: none;"><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: none;"></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: none;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div class="pano_close" title="退出全景" style="z-index: 1201; display: none;"></div><a class="pano_pc_indoor_exit" title="退出室内景" style="z-index: 1201; display: none;"><span style="float:right;margin-right:12px;">出口</span></a><div id="locate" class=" BMap_noprint anchorBL" style="position: absolute; z-index: 10; bottom: 60px; right: auto; top: auto; left: 10px;"></div><div id="zoom" class=" BMap_noprint anchorBR" style="position: absolute; z-index: 10; bottom: 60px; right: 10px; top: auto; left: auto;"><div style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204);">+</div><div>-</div></div><div class=" anchorBL" style="height: 32px; position: absolute; z-index: 30; bottom: 20px; right: auto; top: auto; left: 1px;"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: none;"><img style="border:none;width:77px;height:32px" src="http://cdn.{ROOT_DOMAIN}/m/images/copyright_logo.png"></a></div><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api0.map.bdimg.com/images/openhand.cur) 8 8,default"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div unselectable="on" class=" BMap_scaleCtrl BMap_noprint anchorBL" style="bottom: 30px; right: auto; top: auto; left: 10px; width: 73px; position: absolute; z-index: 10;"><div class="BMap_scaleTxt" unselectable="on" style="color: black; background-color: transparent;">500&nbsp;米</div><div class="BMap_scaleBar BMap_scaleHBar" style="background-color: black;"><img style="border:none" src="http://cdn.{ROOT_DOMAIN}/m/images/mapctrls.png"></div><div class="BMap_scaleBar BMap_scaleLBar" style="background-color: black;"><img style="border:none" src="http://cdn.{ROOT_DOMAIN}/m/images/mapctrls.png"></div><div class="BMap_scaleBar BMap_scaleRBar" style="background-color: black;"><img style="border:none" src="http://cdn.{ROOT_DOMAIN}/m/images/mapctrls.png"></div></div><div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL" style="cursor: default; white-space: nowrap; color: black; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 11px; line-height: 15px; font-family: arial, sans-serif; bottom: 2px; right: auto; top: auto; left: 2px; position: absolute; z-index: 10; background: none;"></div></div>
		</div>

		<div id="tBut" onclick="P.show('routs')" style="display: none;"></div>

		<div id="traffic" style="display: none;">
			<section class="ipt bb">
				<p class="bb">
					<input id="ipt1" class="txt" type="text">
				</p>
				<p class="bb">
					<input id="ipt2" class="txt" type="text">
				</p>
				<span></span>
			</section>
			<center class="cop">
				<input class="but" type="button" onclick="P.getTraffic()" value="搜公交、地铁">
			</center>
		</div>
		<div id="roud" style="display: none;">
			<p class="title">请您选择准确的起点、终点</p>
			<div class="bx">
				<p class="rs lpt"><em></em><span></span></p>
				<div class="lys-1 lys"></div>
				<p class="re lpt"><em></em><span></span></p>
				<div class="lys-2 lys"></div>
			</div>
		</div>

		<div id="routs" style="display: none;">
		</div>
	</div>
	<script src="http://cdn.{ROOT_DOMAIN}/m/js/zepto.js"></script>
	<script src="http://cdn.{ROOT_DOMAIN}/m/js/map_m.js"></script>
	<script>
		M.ini(t);
	</script>



</body>
</html>