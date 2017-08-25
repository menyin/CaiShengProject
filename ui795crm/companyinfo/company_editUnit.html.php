<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<style type="text/css">
	.search{border-top: 1px #ccc solid; margin-top: 10px; padding: 10px;}
</style>
<body>
	<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4&s=1"></script>
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
					<div class="m_bg">查看企业： [<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">{$com['cname']}]</a> >部门管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<!--{template companyinfo/daohang}-->
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
												<form id="postForm" action="/api/web/company.api" name="postForm" method="post"  onsubmit="return false;">
													<input type="hidden" name="act" id="act" value="saveUnit" />
													<input type="hidden" name="cuid" value="{$unit['cuid']}">
													<input type="hidden" name="c_id" value="{$_GET['c_id']}">
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">ID：</td>
																<td >{$res[id]}</td>
															</tr>
															<tr>
																<td class="tb_title">是否显示：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input value="1" type="radio" name="isshow" id="radType1" class="radio" <!--{if $unit['isshow']==1}-->checked="checked"<!--{/if}-->><label for="radType1">显示</label>
																		<input value="0" type="radio" name="isshow" id="radType2" class="radio" <!--{if $unit['isshow']==0}-->checked="checked"<!--{/if}-->><label for="radType2">不显示</label>
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门名称：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" style="width:235px;" value="{$unit['cuName']}" name="cuName" class="text">
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门联系人：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" style="width:235px;" value="{$unit['linker']}" name="linker" class="text">
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门电话：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" style="width:235px;" value="{$unit['linktel']}" name="linktel" class="text">
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门邮箱：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" style="width:235px;" value="{$unit['email']}" name="email" class="text">
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门QQ：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" style="width:235px;" value="{$unit['qq']}" name="qq" class="text">
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门排序：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" style="width:235px;" value="{$unit['cuDisplayOrder']}" name="cuDisplayOrder" class="text">
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">部门简介：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<textarea name="content" class="textarea" cols="50" rows="5">{$unit['content']}</textarea>
																	</span>
																</div>
																</td>
															</tr>
															<tr id="searchList">
																<td class="tb_title">地址：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																	<input type="text" class="text" id="address" name="address" value="{$unit['address']}" style="width:235px;" />
																		坐标：<input type="text" class="text1" name="long_lat" id="long_lat" value="{$unit['long_lat']}"/>
																		<font color="red">（例如：118.122254,24.476594）</font>
																		<div class="search">
																			查询地址:<input type="text" class="text" id="searchAddress" name="searchAddress" value="" style="width:235px;"/>
																			<button id="searchByStationName">查 询</button>
																		</div>
																		<div id="container" style="width: 700px; height: 400px; border: 1px solid gray; overflow:hidden; margin-top:10px;"></div>
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
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
	var mapList = function(){
		var map,longitude = "{$unit['longitude']}",latitude = "{$unit['latitude']}";
		this.init = function(){
			map = new BMap.Map("container");
			if(longitude!=""&&latitude!=""){
				this.mark(longitude, latitude);
				map.centerAndZoom(new BMap.Point(longitude, latitude),14);
			}else{
				var cityName = "{$regionInfo['region_name_full']}";
				map.centerAndZoom(cityName, 12);
			}

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
		this.mark = function(lon, lat){
			map.clearOverlays();
			mk = new BMap.Marker(new BMap.Point(lon, lat));  // 创建标注
			map.addOverlay(mk);			  // 将标注添加到地图中
		},
		this.searchByStationName = function(keyword){
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


	function check () {
		var address = $('#address').val();
		if(address==''||typeof(address)=='undefined'){
			alert('地址不能为空');
			return;
		}
		//$('#postForm').submit();
		$("#postForm").submitForm({ beforeSubmit: $.proxy(''), success: function(data){
			if(data.status>0) {
				$.anchorMsg('成功添加/编辑部门!');
				history.go(-1);
			}else{
				$.anchorMsg(data.msg,{icon:'fail'});
			}
		}, clearForm: false})
	}

	$("#searchList .checkAll").click(function(){
		$(this).parents('tr').find('input').attr('checked',this.checked);
	});
	$("#searchList input:not(.checkAll)").click(function(){
		var parent = $(this).parents('tr');
		var len = parent.find(':checked').not('.checkAll').length;
		parent.find('.checkAll').attr('checked',len == parent.find('input').length - 1);
	});


</script>
</body>
</html>
