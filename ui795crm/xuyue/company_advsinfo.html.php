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
					<div class="m_bg">客服管理 >查看企业： [<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">{$com['cname']}]</a> >广告位管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<a href="/companyinfo/companyinfo.html?act=view&c_id={$com['_cid']}"><div class="btn icon-4 icon" >基本资料</div></a>
							<a href="/companyinfo/companyinfo.html?act=licence&c_id={$com['_cid']}"><div class="btn icon-4 icon" >执照基本信息</div></a>
							<a href="/companyinfo/companyinfo.html?act=jobs&c_id={$com['_cid']}"><div class="btn icon-4 icon" >招聘的职位</div></a>
							<a href="/companyinfo/companyinfo.html?act=contract&c_id={$com['_cid']}"><div class="btn icon-4 icon" >合同管理</div></a>
							<a href="/companyinfo/companyinfo.html?act=advs&c_id={$com['_cid']}"><div class="btn icon-7 icon" id="btns-cur">广告位管理</div></a>
							<a target="_blank" href="company.html?act=follow&c_id={$com['_cid']}"><div class="btn icon-4 icon" >跟进</div></a>
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
													<!--{if $advs}-->
														<!--{loop $advs $advInfo}-->
														<table width="1023" height="57">
															<tr>
																<td height="51" class="tb_title">合同ID：</td>
																<td>{$advInfo[contractId]}&nbsp;</td>
																<td>合同名称：</td>
																<td colspan="3">&nbsp;</td>
															</tr>
															<tr>
																<td width="184" height="51" class="tb_title">广告城市：</td>
																<td width="300">{$advInfo[region_name_short]}</td>
																<td width="226">广告位置：</td>
																<td width="100">{$__advStr[$advInfo[positionId]]}</td>
																<td width="100">广告天数：</td>
																<td width="100">{$advInfo[week]}天</td>
															</tr>
															<tr>
																<td>开始时间：</td>
																<td>{$advInfo[startDate]}</td>
																<td>结束时间：</td>
																<td>{$advInfo[endDate]}</td>
																<td>剩余时间：</td>
																<td>{$advInfo[remainDate]}秒</td>
															</tr>
														</table>
														<!--{/loop}-->
													<!--{else}-->
														<table>
															<tr class="hoverout">
																<td class="tb_title">暂无广告相关信息</td>
															</tr>
														</table>
													<!--{/if}-->
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
		<!--{template xuyue/sidebar}-->
	</div>
</div>
</body>
</html>