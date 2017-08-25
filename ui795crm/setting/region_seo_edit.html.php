<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.597.com/crm/css/database.css" type="text/css" rel="stylesheet">
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
					<div class="m_bg">站点管理 > seo修改</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--<div class="btn icon-1 disabled icon">新增站点</div>
							<div class="btn icon-2 disabled icon">删除用户</div>-->
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
													<input type="hidden" name="act" id="act" value="seo_save" />
													<input type="hidden" name="region_id" id="region_id" value="{$region['region_id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">站点ID：</td>
																<td>{$region['region_id']} ({$region['_path']})</td>
															</tr>
															<tr>
																<td class="tb_title">站点地区：</td>
																<td>{$region['region_name_full']}</td>
															</tr>
															<tr>
																<td class="tb_title">电脑首页seo标题：</td>
																<td><input type="text" class="text1" name="region[seo_index_title]" value="{$region['seo_index_title']}" size="100" /></td>
															</tr>
															<tr>
																<td class="tb_title">电脑首页seo关键字：</td>
																<td><input type="text" class="text1" name="region[seo_index_keywords]" value="{$region['seo_index_keywords']}" size="100"/></td>
															</tr>
															<tr>
																<td class="tb_title">电脑首页seo描述：</td>
																<td><textarea  name="region[seo_index_description]" rows="5" cols="100">{$region['seo_index_description']}</textarea></td>
															</tr>
															<tr>
																<td class="tb_title">手机首页seo标题：</td>
																<td><input type="text" class="text1" name="region[m_seo_index_title]" value="{$region['m_seo_index_title']}" size="100" /></td>
															</tr>
															<tr>
																<td class="tb_title">手机首页seo关键字：</td>
																<td><input type="text" class="text1" name="region[m_seo_index_keywords]" value="{$region['m_seo_index_keywords']}" size="100"/></td>
															</tr>
															<tr>
																<td class="tb_title">手机首页seo描述：</td>
																<td><textarea  name="region[m_seo_index_description]" rows="5" cols="100">{$region['m_seo_index_description']}</textarea></td>
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
		<!--{template setting/sidebar}-->
	</div>
</div>
</body>
</html>
