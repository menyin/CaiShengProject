<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4&s=1"></script>
<body> 
<div id="content">
	<!--{template nav}-->
	<div id="contentBody" style="visibility: visible;">
		<!--  小贴士 start  -->
		<div id="tips" class="hide" style="width: 256px;display:none">
			<div class="tips" style="">
				<div class="tips-title" style="">小贴士
					<div class="btn_close"></div>
				</div>
				<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
					<div class="title">
						<div data-bind="text: cat">常见问题</div>
					</div>
					<div data-bind="foreach: links">
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
						</div>
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
						</div>
					</div>
					<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
						<div class="more">
							<div>
								更多： 
								<a href="#" target="_blank">帮助中心</a> &nbsp;
								<a href="#" target="_blank">售后支持</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">站点管理 > 新增/修改公交站台</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon" ><a href="station.html?act=list">返回列表</a></div>
							<span class="gray"></span>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div class="">
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title">所在城市：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityId" name="cityId" class="drop" style="width: 160px;">
																		<option value="">请选择城市</option>
																		<!--{loop $cityList $val}-->
																		<!--{if $val['id'] == $stationRow['cityId']}-->
																		<option selected='selected'  value="{$val['id']}">{$val['name']}</option>
																		<!--{else}-->
																		<option  value="{$val['id']}">{$val['name']}</option>
																		<!--{/if}-->
																		<!--{/loop}-->
																	</select>
																	<div class="clear"></div></div>	</td>
															</tr>
															<tr>
																<td class="tb_title">方向：</td>
																<td colspan=3>
																	<div class="formMod addressMod">
																		<select id="fx" name="fx" class="drop" style="width: 160px;">
																			<option value="">请选择方向</option>
																			<!--{loop $fxList $val}-->
																			<!--{if $val['id'] == $stationRow['fx']}-->
																			<option selected='selected'  value="{$val['id']}">{$val['name']}</option>
																			<!--{else}-->
																			<option  value="{$val['id']}">{$val['name']}</option>
																			<!--{/if}-->
																			<!--{/loop}-->
																		</select>
																		<font color="red">（非必选）</font>
																		<div class="clear"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">站台名称：</td>
																<td>
																	<input type="text" class="text1" name="name" id="name" value="{$stationRow['name']}"/>
																</td>
															</tr>
															<tr>
																<td class="tb_title">经纬度：</td>
																<td>
																	<input type="text" class="text1" name="long_lat" id="long_lat" value="{$stationRow['long_lat']}"/>
																	<font color="red">（例如：118.122254,24.476594）</font>
																</td>
															</tr>
															<tr>
															    <td></td>
															    <td>
															    	<div style="margin:10px 0px;">
															    	公交站点名称（越详细坐标越准）：
															    	<input type="text" class="text1" id="searchName" value="" onchange="searchByStationName();"/>
															    	<font color="red">（例如：厦门市湖里区湖里行政服务中心站。方便不知道经纬度时使用，可不填）</font>
															    	</div>
															        <div id="container" style="width: 700px; height: 400px; border: 1px solid gray; overflow:hidden;">
															        </div>
															    </td>
															</tr>
														</table>
													</div>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">保存</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--{template setting/sidebar}-->
	</div>
</div>
<script type="text/javascript">
    var map = new BMap.Map("container");
    map.centerAndZoom("厦门", 12);
    map.enableScrollWheelZoom(true);    //启用滚轮放大缩小，默认禁用
    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
    map.addControl(new BMap.OverviewMapControl({ isOpen: false, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开

    var localSearch = new BMap.LocalSearch(map);
    localSearch.enableAutoViewport(); //允许自动调节窗体大小

    //点击地图获取坐标
    var mk;
    map.addEventListener("click", function (e) {
        $('#long_lat').val(e.point.lng+","+e.point.lat);
        map.clearOverlays();//清空原来的标注
        mk = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat));  // 创建标注
        map.addOverlay(mk);              // 将标注添加到地图中
    });

function searchByStationName() {
    map.clearOverlays();//清空原来的标注
    var keyword = document.getElementById("searchName").value;
    localSearch.setSearchCompleteCallback(function (searchResult) {
        var poi = searchResult.getPoi(0);
        document.getElementById("long_lat").value = poi.point.lng + "," + poi.point.lat;
        map.centerAndZoom(poi.point, 13);
        var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
        map.addOverlay(marker);
        var content = document.getElementById("searchName").value + "<br/><br/>经度：" + poi.point.lng + "<br/>纬度：" + poi.point.lat;
        var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>");
        marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    });
    localSearch.search(keyword);
} 
</script>
<script type="text/javascript">
	$('#btnSave').click(function(){
		var cityId = $("#cityId").val();
		if(!cityId){
			alert('请选择城市！');
			return;
		}
		var name=$('#name').val();
		if(!name){
			alert('请填写公交站台名称');
			return;
		}
		var long_lat = $('#long_lat').val();
		if(!long_lat){
			alert('请填写公交站台经纬度');
			return;
		}
		var fx = $('#fx').val();
		$.ajax({
	        url: "station.php",
	        type: 'POST',
	        data: {
	          'act': 'save',
	          'id': '{$stationRow["id"]}',
	          'cityId': cityId,
	          'name': name,
	          'long_lat': long_lat,
	          'fx': fx
	        },
	        dataType: 'json',
	        error: function() {
	            alert('请求出错!');
	        },
	        success: function(data) {
	          if (data.status==1) {
	            alert('操作成功');
	            location.reload();
	          }else {
	            alert(data.msg);
	          }
	        }
	      });
	});
</script>
</body>
</html>
