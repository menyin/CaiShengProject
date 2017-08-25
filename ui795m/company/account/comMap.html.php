<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>账户管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
</head>
<body style="padding:0px;">
	<div id="mapV2" style="width: 100%; height: 100%; overflow: hidden; position: absolute; left: 0px; z-index: 5; display: ;">
  <!-- <div class="tdsureBgtop">
	<div class="tdsureBg" style="height:45px;"> <a href="javascript:;" onclick="modify.closeAlert('#mapV2')" class="icon-uniE6005" style="line-height:45px;"></a>
	  <p><span id="jobSortTitle">标注地图</span></p>
	  <a href="javascript:;" onclick="modify.closeAlert('#mapV2')" class="loginNewsBtn" style="text-align: center; line-height: 45px;font-size:2em;">确定</a> </div>
  </div> -->
  <div style="width:100%; height:100%; overflow: hidden; position:absolute; top:0; left:0px;z-index: 5;">
	<div id="mapCon" style="height: 100%; overflow: hidden; border: 1px solid rgb(237, 237, 237); position: relative; z-index: 0; color: rgb(0, 0, 0); text-align: left; background-color: rgb(243, 241, 236);">
	  <div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default;">
		<div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; -webkit-user-select: none; width: 0px; height: 0px;"></div>
		<div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;">
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span class="BMap_Marker BMap_noprint" unselectable="on" title="请拖动至您公司所在位置" style="position: absolute; padding: 0px; margin: 0px; border: 0px; cursor: pointer; width: 33px; height: 50px; left: -16px; top: -25px; z-index: -5923862; background: url(http://api0.map.bdimg.com/images/blank.gif);"></span></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;">
			<label class="BMapLabel" unselectable="on" style="position: absolute; display: none; cursor: inherit; border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: arial, sans-serif; z-index: -20000; color: rgb(190, 190, 190); background-color: rgb(190, 190, 190);">shadow</label>
		  </div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 0px; height: 0px; left: -16px; top: -25px; z-index: -5923862;">
			<div style="position: absolute; margin: 0px; padding: 0px; width: 33px; height: 50px; overflow: hidden;"><img src="http://cdn.597.com/m/images/maplabel.png" style="display: block; border:none;margin-left:0px; margin-top:0px; "></div>
			<label class="BMapLabel" unselectable="on" style="position: absolute; display: inline; cursor: inherit; border: 1px solid rgb(255, 0, 0); padding: 1px; white-space: nowrap; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: arial, sans-serif; z-index: 80; -webkit-user-select: none; left: 35px; top: 5px; background-color: rgb(255, 255, 255);">请拖动至您公司所在位置</label>
			</span></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div>
		</div>
		<div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;">
		  <div style="position: absolute; overflow: visible; z-index: -100; left: 0px; top: 0px; display: block; -webkit-transform: translate3d(0px, 0px, 0px);"><img src="http://cdn.597.com/m/js/saved_resource" style="position: absolute; border: none; width: 256px; height: 256px; left: -64px; top: -196px; max-width: none; opacity: 1;"></div>
		</div>
		<div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: none;">
		  <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: none;"></div>
		  <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: none;"></div>
		</div>
		<div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div>
	  </div>
	  <div class="pano_close" title="退出全景" style="z-index: 1201; display: none;"></div>
	  <a class="pano_pc_indoor_exit" title="退出室内景" style="z-index: 1201; display: none;"><span style="float:right;margin-right:12px;">出口</span></a>
	  <div class=" anchorBL" style="height: 32px; position: absolute; z-index: 30; bottom: 0px; right: auto; top: auto; left: 1px; display: none;"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: none;"><img style="border:none;width:77px;height:32px" src="http://cdn.597.com/m/images/copyright_logo.png"></a></div>
	  <div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api0.map.bdimg.com/images/openhand.cur) 8 8,default">
		<div class="BMap_zoomer" style="top:0;left:0;"></div>
		<div class="BMap_zoomer" style="top:0;right:0;"></div>
		<div class="BMap_zoomer" style="bottom:0;left:0;"></div>
		<div class="BMap_zoomer" style="bottom:0;right:0;"></div>
	  </div>
	  <div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 192px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100;">
		<div class="BMap_stdMpPan">
		  <div class="BMap_button BMap_panN" title="向上平移"></div>
		  <div class="BMap_button BMap_panW" title="向左平移"></div>
		  <div class="BMap_button BMap_panE" title="向右平移"></div>
		  <div class="BMap_button BMap_panS" title="向下平移"></div>
		  <div class="BMap_stdMpPanBg BMap_smcbg"></div>
		</div>
		<div class="BMap_stdMpZoom" style="height: 147px; width: 62px;">
		  <div class="BMap_button BMap_stdMpZoomIn" title="放大一级">
			<div class="BMap_smcbg"></div>
		  </div>
		  <div class="BMap_button BMap_stdMpZoomOut" title="缩小一级" style="top: 126px;">
			<div class="BMap_smcbg"></div>
		  </div>
		  <div class="BMap_stdMpSlider" style="height: 108px;">
			<div class="BMap_stdMpSliderBgTop" style="height: 108px;">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_stdMpSliderBgBot" style="top: 31px; height: 81px;"></div>
			<div class="BMap_stdMpSliderMask" title="放置到此级别"></div>
			<div class="BMap_stdMpSliderBar" title="拖动缩放" style="cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default; top: 31px;">
			  <div class="BMap_smcbg"></div>
			</div>
		  </div>
		  <div class="BMap_zlHolder">
			<div class="BMap_zlSt">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_zlCity">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_zlProv">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_zlCountry">
			  <div class="BMap_smcbg"></div>
			</div>
		  </div>
		</div>
		<div class="BMap_stdMpGeolocation" style="position: initial; display: none; margin-top: 43px; margin-left: 10px;">
		  <div class="BMap_geolocationContainer" style="position: initial; width: 24px; height: 24px; overflow: hidden; margin: 0px; box-sizing: border-box;">
			<div class="BMap_geolocationIconBackground" style="width: 24px; height: 24px; background-image: url(http://api0.map.bdimg.com/images/navigation-control/geolocation-control/pc/bg-20x20.png); background-size: 20px 20px; background-position: 3px 3px; background-repeat: no-repeat;">
			  <div class="BMap_geolocationIcon" style="position: initial; width: 24px; height: 24px; cursor: pointer; background-image: url(&#39;http://api0.map.bdimg.com/images/navigation-control/geolocation-control/pc/success-10x10.png&#39;); background-size: 10px 10px; background-repeat: no-repeat; background-position: center;"></div>
			</div>
		  </div>
		</div>
	  </div>
	  <div unselectable="on" class=" BMap_noprint anchorTR" style="bottom: auto; right: 10px; top: 10px; left: auto; white-space: nowrap; cursor: pointer; position: absolute; z-index: 10;">
		<div style="float: left;">
		  <div title="显示普通地图" style="box-shadow: rgba(0, 0, 0, 0.34902) 2px 2px 3px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(139, 164, 220); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(139, 164, 220); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 164, 220); padding: 2px 6px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 12px; line-height: 1.3em; font-family: arial, sans-serif; text-align: center; white-space: nowrap; border-top-left-radius: 3px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 3px; color: rgb(255, 255, 255); background: rgb(142, 168, 224);">地图</div>
		</div>
		<div style="float: left;">
		  <div title="显示卫星影像" style="box-shadow: rgba(0, 0, 0, 0.34902) 2px 2px 3px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(139, 164, 220); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(139, 164, 220); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 164, 220); padding: 2px 6px; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: 1.3em; font-family: arial, sans-serif; text-align: center; white-space: nowrap; color: rgb(0, 0, 0); background: rgb(255, 255, 255);">卫星</div>
		  <div style="position: absolute; top: 0px; left: 0px; z-index: -1; display: none;">
			<div title="显示带有街道的卫星影像" style="border-right:1px solid #8ba4dc;border-bottom:1px solid #8ba4dc;border-left:1px solid #8ba4dc;background:white;font:12px arial,sans-serif;padding:0 8px 0 6px;line-height:1.6em;box-shadow:2px 2px 3px rgba(0, 0, 0, 0.35)"><span checked="checked" class="BMap_checkbox"></span>
			  <label style="vertical-align: middle; cursor: pointer;">混合</label>
			</div>
		  </div>
		</div>
		<div style="float: left;">
		  <div title="显示三维地图" style="box-shadow: rgba(0, 0, 0, 0.34902) 2px 2px 3px; border: 1px solid rgb(139, 164, 220); padding: 2px 6px; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: 1.3em; font-family: arial, sans-serif; text-align: center; white-space: nowrap; border-top-left-radius: 0px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 0px; color: rgb(0, 0, 0); background: rgb(255, 255, 255);">三维</div>
		</div>
	  </div>
	  <div unselectable="on" class=" BMap_omCtrl BMap_ieundefined BMap_noprint anchorBR quad4" style="width: 13px; height: 13px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10;">
		<div class="BMap_omOutFrame" style="width: 149px; height: 149px;">
		  <div class="BMap_omInnFrame" style="bottom: auto; right: auto; top: 5px; left: 5px; width: 142px; height: 142px;">
			<div class="BMap_omMapContainer"></div>
			<div class="BMap_omViewMv" style="cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default;">
			  <div class="BMap_omViewInnFrame">
				<div></div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="BMap_omBtn BMap_omBtnClosed" style="bottom: 0px; right: 0px; top: auto; left: auto;"></div>
	  </div>
	  <div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL" style="cursor: default; white-space: nowrap; color: black; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 11px; line-height: 15px; font-family: arial, sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10; background: none;"><span _cid="1" style="display: inline;"><span style="font-size:11px">© 2015 Baidu&nbsp;- Data © <a target="_blank" href="http://www.navinfo.com/" style="display:inline;">NavInfo</a> &amp; <a target="_blank" href="http://www.cennavi.com.cn/" style="display:inline;">CenNavi</a> &amp; <a target="_blank" href="http://www.365ditu.com/" style="display:inline;">道道通</a></span></span></div>
	</div>
  </div>
</div>
	<input type="hidden" name="lng" id="lng" value="{$com['comLongitude']}"/>
	<input type="hidden" name="lat" id="lat" value="{$com['comLatitude']}"/>
	<input type="hidden" name="hidMapZoom" id="hidMapZoom" value="15"/>
<script>
var APPTYPE = "{$app['type']}";
//地图标注
var initPt;
var initArea;
cityN();
initMap();

function cityN(){
	var addr = "{$_GET['cityName']}";
	if(addr != ''){
		var geo = new BMap.Geocoder();
		geo.getPoint(addr, relocateCallback, '');   //缺一个城市名
	}
}
function relocateCallback(point){
	if(point == null) return;
	map.setCenter(point);
	marker.setPosition(point);
	$('#lng').val(marker.getPosition().lng);
	$('#lat').val(marker.getPosition().lat);
	$('#hidMapZoom').val(map.getZoom());
}

function initMap(){ 
	var mapX = $('#lng').val();
	var mapY = $('#lat').val();
	var mapZoom = $('#hidMapZoom').val();
	if(typeof mapZoom =='undefined' || mapZoom == ''){
		mapZoom = 15;
	}
	var initPt = null;
	if(typeof mapX != 'undefined' && mapX!='' && typeof(mapY) != 'undefined' && mapY!=''){
		initPt = new BMap.Point(mapX,mapY);
	}

	var defaultPt = new BMap.Point({$com[comLongitude]},{$com[comLatitude]});
	map = new BMap.Map("mapCon");

	//在加载完成，确定中心点后，设置标注点
	map.addEventListener('load',function(){
		var pt = null;
		if(initPt!=null){
			pt = initPt;
		}
		else{
			pt = new BMap.Point(map.getCenter().lng,map.getCenter().lat);
		}

		var myIcon = new BMap.Icon("http://cdn.597.com/m/images/maplabel.png", new BMap.Size(33,50));
		marker = new BMap.Marker(pt,{icon:myIcon});  // 创建标注
		map.addOverlay(marker);			  // 将标注添加到地图中
		marker.enableDragging();
		marker.setTitle('请拖动至您公司所在位置');

		var label = new BMap.Label("请拖动至您公司所在位置",{offset:new BMap.Size(35,5)});
		marker.setLabel(label);

		//添加事件，在拖动时去掉文字提示
		marker.addEventListener('dragstart',function(){
					label.setStyle({display:'none'});
		});
		marker.addEventListener('dragend',function(){
			$('#lng').val(marker.getPosition().lng);
			$('#lat').val(marker.getPosition().lat);
			$('#hidMapZoom').val(map.getZoom());
		});
	});

	if(initPt != null){
		map.centerAndZoom(new BMap.Point(mapX,mapY), mapZoom);
	}
	else{
		map.centerAndZoom(defaultPt, mapZoom);
	}


	map.addControl(new BMap.NavigationControl());			   // 添加平移缩放控件
	map.addControl(new BMap.MapTypeControl());		  //添加地图类型控件
	map.addControl(new BMap.OverviewMapControl());			  //添加默认缩略地图控件
	map.enableScrollWheelZoom();							//启用滚轮放大缩小

	map.addEventListener('zoomend',function(){
		$('#hidMapZoom').val(map.getZoom());
	});
}


	//app交互
	function getZb(){
		var lng = $('#lng').val();
		var lat = $('#lat').val();
		var zb = JSON.stringify({'lng':lng, 'lat':lat});
		if(APPTYPE=='android') window.android.getZb(zb);//android
		if(APPTYPE=='ios') return zb;
	}
	</script>
</body>
</html>