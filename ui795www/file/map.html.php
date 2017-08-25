<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/map.css?v=100713305" />
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=20150227"></script>
<style type="text/css">
	#dtjt_wrap {width: 640px;}
	#dtjt_info,#baidu_map,#map_search_result {width: 638px;}
	#mapbar,.map{ width:635px;}
	#baidu_fullscreen {left:640px;}
	#map_route {width: 618px;}
	.subPhonex em {font-size: 14px; padding:0 15px 0 0; color:#666; font-weight: normal;}
	.newTytit{margin-top:-28px; }
	.newTytit .linkType{font-size: 16px;line-height: 18px;color: #295266;font-weight: bold;border-left: 4px solid #38b7ea;text-indent: 9px;margin-bottom: 15px; padding-left: 10px; }
	.newTytit em{color:#b2b2b2;}
</style>
<script type="text/javascript">
try{
var ____jsonfe = {locallist:[{name:''}],addressList:{name:'{$address}',lat:'',lon:'',baidulat:'{$latitude}',baidulon:'{$longitude}',address:'{$address}'},fullScreen:1,onlyBd:1};
}
catch(e){}
</script>
<div class="newTytit" id="comMap">
	<p class="njmTit2">
		<div class="bd" id="mapinfo">
		 	<div id="dtjt_wrap" class="mb15" >
				<div id="dtjt_title">
					<ul>
						<li id="baidu_tab" class="active">地图</li>
					</ul>
		   		 </div>
				<div id="baidu_map" class="map active"  >
					<div id="dtjt_info"><!--0326s-->
						<div id='baidu_fullscreen'></div>
						<!--03263-->
			   			<div id="map" style="width:675px;"></div>
			   			<div id="map_tab_jtlx"></div>
		   			</div>

		   			<div id="map_route">
			  			起点 <input id="map_route_from" type="text" style="width:116px;" />
			   			终点 <input id="map_route_to" type="text" style="width:116px;" readonly />
			  			<span class="route_type">
			   				<input id="map_route_bus" name="map_route_type" type="radio" value="bus" checked />
			   					<label class="label" for="map_route_bus">公共交通</label>
			   			</span>
			  			<span class="route_type">
			   				<input id="map_route_car" name="map_route_type" type="radio" value="car" />
			   				<label class="label" for="map_route_car">自驾车</label>
			   			</span>
			   			<input id="map_route_search" type="button" value="" />
		   			</div>
				</div>
		   		<div id="soso_map" class="map">
					<div id="static_map_background">
						<div id="static_map"></div>
					 	<div id="map_drag"></div>
					</div>
				</div>
			</div>
			<div id="map_search_result" ></div>
		</div>
	</p>
</div>
<div style="clear:both"></div>
<div id='baidu_exitfullscreen' style="display:none;"></div>
<script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/js/baiduMap.js?v=1"></script>