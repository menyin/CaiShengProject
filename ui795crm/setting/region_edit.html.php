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
					<div class="m_bg">站点管理 > 设置站点</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon">新增站点</div>
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
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="region_id" id="region_id" value="{$region['region_id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px">站点ID：</td>
																<td>{$region[region_id]} ({$region[_path]})</td>
															</tr>
															<tr>
																<td class="tb_title">站点地区：</td>
																<td>{$region[region_name_full]}</td>
															</tr>
															<tr>
																<td class="tb_title">区域全称：</td>
																<td><input type="text" class="text1" name="region[region_name_full]" placeholder="例子：北京" value="{$region[region_name_full]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">区域短名称：</td>
																<td><input type="text" class="text1" name="region[region_name_short]" placeholder="例子：北京" value="{$region[region_name_short]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">站点域名：</td>
																<td><input type="text" class="text1" name="region[region_domain]" placeholder="例子：bj" value="{$region[region_domain]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">站点名称：</td>
																<td><input type="text" class="text1" name="region[region_site]" placeholder="例子：厦门人才网" value="{$region[region_site]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">客服热线：</td>
																<td><input type="text" class="text1" name="region[region_phone]" placeholder="例子：bj" value="{$region[region_phone]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">QQ咨询热线：</td>
																<td><input type="text" class="text1" name="region[region_qq]" placeholder="例子：bj" value="{$region[region_qq]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">传真：</td>
																<td><input type="text" class="text1" name="region[region_fax]" placeholder="例子：bj" value="{$region[region_fax]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">办公地址：</td>
																<td><input type="text" class="text1" name="region[region_address]" placeholder="例子：bj" value="{$region[region_address]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">邮编：</td>
																<td><input type="text" class="text1" name="region[region_zipcode]" placeholder="例子：bj" value="{$region[region_zipcode]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">行业排序：</td>
																<td><input type="text" class="text1" name="region[industrys_order]" placeholder="" value="{$region[industrys_order]}" size="100" /><br/><span>【多个用逗号(,)割开】</td>
															</tr>
															<tr>
																<td class="tb_title">热门职位：</td>
																<td><textarea  name="region[hot_jobs]" rows="5" cols="100">{$region[hot_jobs]}</textarea><br/><span>【多个用逗号(,)割开】</td>
															</tr>
															<tr>
																<td class="tb_title">首页搜索：</td>
																<td><textarea  name="region[search_bottom]" rows="5" cols="100">{$region[search_bottom]}</textarea><br/><span>【多个用逗号(,)割开】</td>
															</tr>
														</table>
														<table style="margin-top: 16px;display:none;">
															<tr>
																<td class="tb_title" width="140px">自动审核：</td>
																<td>
																	<input type="checkbox" name="check[]" id="right[]" value="企业" <!--{if strpos($admin[adminRight],'企业')}-->checked<!--{/if}-->>企业
																	<input type="checkbox" name="check[]" id="right[]" value="职位" <!--{if strpos($admin[adminRight],'职位')}-->checked<!--{/if}-->>职位
																	<input type="checkbox" name="right[]" id="right[]" value="简历" <!--{if strpos($admin[adminRight],'简历')}-->checked<!--{/if}-->>简历
																</td>
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
