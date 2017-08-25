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
					<div class="m_bg">客服管理 >查看企业： [<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">{$com['cname']}]</a> >执照基本信息</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<a href="/companyinfo/companyinfo.html?act=view&c_id={$com['_cid']}"><div class="btn icon-4 icon" >基本资料</div></a>
							<a href="/companyinfo/companyinfo.html?act=licence&c_id={$com['_cid']}"><div class="btn icon-7 icon" id="btns-cur">执照基本信息</div></a>
							<a href="/companyinfo/companyinfo.html?act=jobs&c_id={$com['_cid']}"><div class="btn icon-4 icon" >招聘的职位</div></a>
							<a href="/companyinfo/companyinfo.html?act=contract&c_id={$com['_cid']}"><div class="btn icon-4 icon" >合同管理</div></a>
							<a href="/companyinfo/companyinfo.html?act=advs&c_id={$com['_cid']}" style="display:none;"><div class="btn icon-4 icon" >广告位管理</div></a>
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
													<table style="margin-top: 0px;">
														<!--{if is_array($licence) && $licence[isCheck]==1}-->	
														<tbody>
															<tr class="hover">
																<td width="112" rowspan="7" class="tb_title">营业执照：</td>
																<td width="184" rowspan="7"><a href="{$licence[licenceurl]}" target="_blank"><img src="{$licence[licenceurl]}" height="300"></a></td>
																<td width="119" height="66"><span class="tb_title">招聘联系人：</span></td>
																<td width="266">{$licence[comUser]}&nbsp;</td>
															</tr>
															<tr class="hover">
																<td height="50">招聘联系电话：</td>
																<td>{$licence['comPhone']}&nbsp;</td>
															</tr>
															<tr class="hover">
																<td height="39">招聘联系手机：</td>
																<td>{$licence['comMobile']}&nbsp;</td>
															</tr>
															<tr class="hover">
																<td height="57"><span class="tb_title">注册公司名称：</span></td>
																<td>{$licence[_cname]}&nbsp;</td>
															</tr>
															<tr class="hover">
																<td height="53">执照公司名称：</td>
																<td>{$licence['cname']}&nbsp;</td>
															</tr>
															<tr class="hover">
																<td height="69"><span class="tb_title">执照编号：</span></td>
																<td>{$licence[licenceid]}&nbsp;</td>
															</tr>
															<tr class="hover">
																<td>执照法人：</td>
																<td>{$licence[licencename]}&nbsp;</td>
															</tr>
														</tbody>
														<!--{elseif $licence[isCheck]==2}-->
														<tbody>
															<tr class="hoverout">
																<td class="tb_title"><img src="/templates/default/images/licen.jpg" height="300"></td>
															</tr>
														</tbody>
														<!--{elseif $licence[isCheck]==-2}-->
														<tbody>
															<tr class="hoverout">
																<td class="tb_title">执照审核不通过</td>
															</tr>
															<tr class="hoverout">
																<td class="tb_title">不通过原因：{$licence[reply]}</td>
															</tr>
														</tbody>
														<!--{else}-->
														<tbody>
															<tr class="hoverout">
																<td class="tb_title">暂无执照相关信息</td>
															</tr>
														</tbody>
														<!--{/if}-->
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