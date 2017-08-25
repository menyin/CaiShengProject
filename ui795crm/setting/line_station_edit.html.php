<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
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
					<div class="m_bg">站点管理 > 新增/修改公交线路</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon" ><a href="line.html?act=stationList&lineId={$lineRow['id']}">返回列表</a></div>
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
																<td class="tb_title" width="140px">公交线路：</td>
																<td>
																	<input type="text" class="text1" id="line" value="{$lineRow['name']}" readonly="readonly"/>
																	<input type="hidden" id="lineId" value="{$lineRow['id']}"/>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">线路站台：</td>
																<td>
																	<input type="text" class="text1" id="station" value="{$stationRow['name']}" readonly="readonly" onclick="javascript:window.open('line.html?act=changeStation','rslt','width=500,height=320,resizable=yes,scrollbars=yes');"/>
																</td>
															</tr>
															<tr>
																<td class="tb_title">线路站台id：</td>
																<td>
																	<input type="text" id="stationId" value="{$stationRow['id']}" readonly="readonly" onclick="javascript:window.open('line.html?act=changeStation','rslt','width=500,height=320,resizable=yes,scrollbars=yes');"/>
																</td>
															</tr>
															<tr>
																<td class="tb_title">排序：</td>
																<td>
																	<input type="text" class="text1" id="rank" value="{$lineStationRow['rank']}"/>
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
	$('#btnSave').click(function(){
		var lineId = $("#lineId").val();
		if(!lineId){
			alert('请选择线路！');
			return;
		}
		var stationId=$('#stationId').val();
		if(!stationId){
			alert('请选择站台');
			return;
		}
		var rank = $('#rank').val();
		if(!rank){
			alert('请填写站台的级别');
			return;
		}
		$.ajax({
	        url: "line.php",
	        type: 'POST',
	        data: {
	          'act': 'saveStation',
	          'id': '{$lineStationRow["id"]}',
	          'lineId': lineId,
	          'stationId': stationId,
	          'rank': rank
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
