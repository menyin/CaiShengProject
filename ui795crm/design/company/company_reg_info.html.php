<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->

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
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">客服管理 > 客服公共库</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a onclick="Boxy.load('company.html?act=edit',{title: '快速注册'});">快速注册</a></div> -->
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
													<input type="hidden" name="c_id" id="c_id" value="{$com['_cid']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
													<table style="margin-top: 0px;">
															<tr>
																<td width="103" class="tb_title"><a href="/companyinfo/companyinfo.html?act=reg_info&c_id={$com['_cid']}">企业注册信息</a></td>
																<td width="1041" rowspan="7"><table width="1044" height="150" border="1">
																  <tr>
																    <td>&nbsp;</td>
																    <td>&nbsp;</td>
																    <td>&nbsp;</td>
															      </tr>
																  <tr>
																    <td>&nbsp;</td>
																    <td>&nbsp;</td>
																    <td>&nbsp;</td>
															      </tr>
																  <tr>
																    <td>&nbsp;</td>
																    <td>&nbsp;</td>
																    <td>&nbsp;</td>
															      </tr>
															    </table></td>
															</tr>
															<tr>
																<td class="tb_title">企业名称：</td>
															</tr>
															<tr>
																<td class="tb_title">营业执照：</td>
															</tr>
															<tr>
																<td class="tb_title">行业类别：</td>
															</tr>
															<tr>
																<td class="tb_title">所在区域：</td>
															</tr>
															<tr>
																<td class="tb_title">招聘联系人：</td>
															</tr>
															<tr>
																<td class="tb_title">企业简介：</td>
																<!-- <td><p style=" max-width:714px;">{$com[comInfo]}</p></td> -->
															</tr>
														</table>
													</div>
													</form>
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
		<!--{template service/sidebar}-->
	</div>
</div>
</body>
</html>