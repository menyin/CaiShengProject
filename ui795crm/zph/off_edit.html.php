<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
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
					<div class="m_bg">站点管理 > 招聘会设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="off.html?act=edit">新增招聘会</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
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
												<form id="postForm" name="postForm" method="post" action="/zph/point.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="zph_off_id" id="zph_off_id" value="{$zph_off_id}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">招聘会ID：</td>
																<td>{$zph_off[zph_off_id]}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<!--{if !$zph_off[zph_off_id]}-->
																<td>
																	<input type="hidden" id="regionId" name="zph_off_city" value="{$zph_off[zph_off_city]}" />
																	<input type="text" class="search input_txt" id="region" name="citystr" value="{$zph_off[zph_off_city]}" title="{$zph_off[region_name_full]}" onclick="Boxy.load('/subpage_area.htm',{title: '请选择招聘点地区'});" readonly="true"> 
																	<script language="javascript">
																		var areaOdjid='regionId'; 
																		var areaOdjstr='region';
																		var areaOdjProvice=1;//是否省可选
																		var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
																		var areaOdjnumber=1;//数量，如果唯一值，则立即返回
																	</script>
																</td>
																<!--{else}-->
																<td>{$zph_off[region_name_full]}</td>
																<!--{/if}-->
															</tr>
															<tr>
																<td class="tb_title">招聘点：</td>
																<td></td>
															</tr>
															<tr>
																<td class="tb_title">招聘会标题：</td>
																<td><input type="text" class="text1" name="zph_off_name" placeholder="例子：597人才网" value="{$zph_off[zph_off_name]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">招聘会地址：</td>
																<td><input type="text" class="text1" name="zph_off_address" placeholder="例子：你家" value="{$zph_off[zph_off_address]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">招聘会路线：</td>
																<td><input type="text" class="text1" name="zph_off_bus" placeholder="例子：89路" value="{$zph_off[zph_off_bus]}"/></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" onclick="document.postForm.submit();">下一步</a>
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
		<!--{template zph/sidebar}-->   
	</div>  
</div>
<script type="text/javascript">

  

</script>
</body>
</html>
