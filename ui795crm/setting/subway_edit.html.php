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
					<div class="m_bg">站点管理 > 新增/修改地铁站点</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a href="subway.html?act=edit&subway_id={$parent_id}">新增地铁站点</a></div> -->
							<div class="btn icon-9 icon"><a href="subway.html?act=nextlist&parent_id={$parent_id}&cityid={$subway[cityid]}">返回{$subway['subway_name_short']}列表</a></div>
							<div class="btn icon-9 icon" ><a href="subway.html?act=list">返回总列表</a></div>
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
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="parent_id" id="parent_id" value="{$parent_id}" />
													<input type="hidden" name="cityid" id="cityid" value="{$cityid}" />
													<input type="hidden" name="subway_id" id="subway_id" value="{$subway[subway_id]}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title">地铁线：</td>
																<td colspan=3>{$subway['region_name_full']}({$subway['subway_name_short']})</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">地铁站点ID：</td>
																<td><input type="text" class="text1" name="subway_id" id="subwayId" placeholder="01" value="{$subway_sub[_subway_id]}" maxlength="2" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/><span>(01)2位纯数字</span></td>
															</tr>
															<tr>
																<td class="tb_title">地铁站简称：</td>
																<td><input type="text" class="text1" name="subway_name_short" id="subway_name_short" placeholder="枢纽站" value="{$subway_sub[subway_name_short]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">地铁站全名称：</td>
																<td><input type="text" class="text1" name="subway_name_full" placeholder="**枢纽站" value="{$subway_sub[subway_name_full]}"/></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">下一步</a>
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
		<!--{template setting/sidebar}-->   
	</div>  
</div>
<script type="text/javascript">
	$('#btnSave').click(function(){
		if($('#subwayId').val() == ''||typeof($('#subwayId').val()) == 'undefined'){
			alert('请输入地铁站ID！');
			return;
		}
		var subwayId=$('#subwayId').val();
		if(subwayId.length!=2){
			alert('地铁站ID位数只能是2位数，请正确输入！');
			return;
		}
		if($('#subway_name_short').val() == ''||typeof($('#subway_name_short').val()) == 'undefined'){
			alert('请输入地铁线简称！');
			return;
		}
		$('#postForm').submit();
		return false;
	});
</script>
</body>
</html>
