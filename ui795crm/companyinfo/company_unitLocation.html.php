<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<style type="text/css">
	.search{border-top: 1px #ccc solid; margin-top: 10px; padding: 10px;}
</style>
<div class="apply">
	<div class="apply_1">
		<div class="">
		<form id="postForm" action="/api/web/company.api" name="postForm" method="post" onsubmit="return false;">
			<input type="hidden" name="act" id="act" value="saveUnitLocation" />
			<input type="hidden" name="cuid" value="{$unit['cuid']}">
			<input type="hidden" name="c_id" value="{$_GET['c_id']}">
			<div class="cell_tb_list">
				<table style="margin-top: 0px;">
					<tr>
						<td class="tb_title">部门名称：</td>
						<td>
						<div class="formMod">
							<span class="formText">
								{$unit['cuName']}
							</span>
						</div>
						</td>
					</tr>
					</tr>
					<tr id="searchList">
						<td class="tb_title">地址：</td>
						<td>
						<div class="formMod">
							<span class="formText">
							地址：<input type="text" class="text" id="address" name="address" value="{$unit['address']}" style="width:235px;" readonly="readonly" />
								坐标：<input type="text" class="text1" name="long_lat" id="long_lat" value="{$unit['long_lat']}"/>
								<font color="red">（例如：118.122254,24.476594）</font>
								<div class="search">
									查询地址:<input type="text" class="text" id="searchAddress" name="searchAddress" value="" style="width:235px;"/>
									<button id="searchByStationName">查 询</button>
								</div>
								<div id="container" style="width: 700px; height: 400px; border: 1px solid #ccc; overflow:hidden; margin-top:10px;"></div>
							</span>
						</div>
						</td>
					</tr>
				</table>
			</div>
			</form>
		</div>
		<div class="apply_btn_next">
			<div class="apply_btn_bg">
				<a class="apply_1_next" id="btnSave" onClick="check();">确定</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var mapList = function(){
			var map;
			this.init=function(){
				var cityName = "{$regionInfo['region_name_full']}";
				map = new BMap.Map("container");
				map.centerAndZoom(cityName, 12);
				map.enableScrollWheelZoom(true);	//启用滚轮放大缩小，默认禁用
				map.enableContinuousZoom();	//启用地图惯性拖拽，默认禁用

				map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
				map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
				map.addControl(new BMap.OverviewMapControl({ isOpen: false, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));

				map.addEventListener("click", function (e) {
					$('#long_lat').val(e.point.lng+","+e.point.lat);
					map.clearOverlays();//清空原来的标注
					mk = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat));  // 创建标注
					map.addOverlay(mk);			  // 将标注添加到地图中
				});
			},
			this.mark=function(lon, lat){
				map.clearOverlays();
				mk = new BMap.Marker(new BMap.Point(lon, lat));  // 创建标注
				map.addOverlay(mk);			  // 将标注添加到地图中
			},
			this.searchByStationName=function(keyword){
				if(!keyword) return '';
				map.clearOverlays();//清空原来的标注
				//搜索
				var localSearch = new BMap.LocalSearch(map);
				localSearch.enableAutoViewport(); //允许自动调节窗体大小

				localSearch.search(keyword);

				localSearch.setSearchCompleteCallback(function (searchResult) {
					var poi = searchResult.getPoi(0);
					document.getElementById("long_lat").value = poi.point.lng + "," + poi.point.lat;
					map.centerAndZoom(poi.point, 13);
					var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
					map.addOverlay(marker);

				});
			}
		}
		var fe = new mapList();
		fe.init();

		$("#searchByStationName").click(function(){
			var keyword = document.getElementById("searchAddress").value;
			fe.searchByStationName(keyword);
		})
	})

	function check () {
		var address = $('#address').val();
		if(address==''||typeof(address)=='undefined'){
			alert('地址不能为空,请先填写地址');
			return;
		}
		//$('#postForm').submit();
		$("#postForm").submitForm({ beforeSubmit: $.proxy(''), success: function(data){
			if(data.status>0) {
				$.anchorMsg('部门定位成功!');
				$('#postForm').closeDialog();
				delunit({$unit['cuid']});
			}else{
				$.anchorMsg(data.msg,{icon:'fail'});
				return;
			}
		}, clearForm: false})
	}
</script>
