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
					<div class="m_bg">站点管理 > 企业产品设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon">新增企业产品</div>
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
													<input type="hidden" name="product_id" id="product_id" value="{$product['product_id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px">产品ID：</td>
																<td>{$product[product_id]}</td>
															</tr>
															<tr>
																<td class="tb_title">产品区域：</td>
																<td>
																	<input type="hidden" id="product_regionId" name="product[product_regionId]" value="{$product[product_regionId]}" required="required"/>
																	<input type="text" class="search input_txt" id="product_region" name="product[product_region]" value="{$product[product_region]}" title="{$product[product_region]}" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true"> 
																	<script language="javascript">
																		var areaOdjid='product_regionId'; 
																		var areaOdjstr='product_region';
																		var areaOdjProvice=1;//是否省可选
																		var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
																		var areaOdjnumber=1;//数量，如果唯一值，则立即返回
																	</script>
																</td>
															</tr>
															<tr>
																<td class="tb_title">产品名称：</td>
																<td><input type="text" class="text1" name="product[product_name]" placeholder="例子：厦门市30个职位" value="{$product[product_name]}" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title">产品类型：</td>
																<td>
																	<select id="adminUnit" name="product[product_type]" style="width: 160px;" required="required" message="请选择所属部门">
																		<option value="0" <!--{if $product[product_type]=='0'}-->selected<!--{/if}-->>请选择</option>
																		<option value="1" <!--{if $product[product_type]=='1'}-->selected<!--{/if}-->>职位数</option>
																		<option value="2" <!--{if $product[product_type]=='2'}-->selected<!--{/if}-->>简历数</option>
																		<option value="3" <!--{if $product[product_type]=='3'}-->selected<!--{/if}-->>广告位</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td class="tb_title">产品数量或广告位置：</td>
																<td><input type="text" class="text1" name="product[product_no]" placeholder="例子：10" value="{$product[product_no]}" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title">产品有效期（天）：</td>
																<td><input type="text" class="text1" name="product[product_valid]" placeholder="例子：30" value="{$product[product_valid]}" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title">产品描述：</td>
																<td><input type="text" class="text1" name="product[product_remark]" placeholder="例子：北京市30个职位数（有效期3天）" value="{$product[product_remark]}" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title">产品单价（元）：</td>
																<td><input type="text" class="text1" name="product[product_price]" placeholder="例子：100" value="{$product[product_price]}" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title">是否生效：</td>
																<td>
																	<select id="isban" name="product[isban]" style="width: 160px;" required="required">
																		<option value="0" <!--{if $product[isban]=='0'}-->selected<!--{/if}-->>生效</option>
																		<option value="1" <!--{if $product[isban]=='1'}-->selected<!--{/if}-->>失效</option>
																	</select>
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
