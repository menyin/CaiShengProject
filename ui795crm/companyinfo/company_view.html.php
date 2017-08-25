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
					<div class="m_bg">查看企业： [<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">{$com['cname']}]</a> >基本资料</div>
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
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="c_id" id="c_id" value="{$com['_cid']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
													<table style="margin-top: 0px;">
														<tr>
															<td width="160">公司名称：</td>
															<td width="359">{$com[cname]}&nbsp;</td>
															<td width="184">用户名：</td>
															<td width="316">{$com[username]}&nbsp;</td>
														</tr>
														<tr>
															<td>会员级别:</td>
															<td colspan="3"><!--{if $isVip}-->VIP<!--{else}-->未开通会员<!--{/if}--><!--{if $isVip}--><a href="/companyinfo/companyinfo.html?act=contract&c_id={$com['_cid']}">合同管理</a><!--{/if}--></td>
														</tr>
														<tr>
															<td>绑定账号:</td>
															<td colspan="3">
															微信:&nbsp;
															<!--{if $company_wx}-->
																<!--{loop $company_wx $l}-->
																	<a href="javascript:void(0)">{$l['name']}</a>&nbsp;&nbsp;&nbsp;
																<!--{/loop}-->
															<!--{/if}-->
															</td>
														</tr>
														<tr>
															<td>注册时间：</td>
															<td>{$com[regTime]}&nbsp;</td>
															<td>登录时间：</td>
															<td>{$com[loginTime]}&nbsp;</td>
														</tr>
														<tr>
															<td>更新时间：</td>
															<td>{$com[updateTime]}&nbsp;</td>
															<td>修改时间：</td>
															<td>{$com[modTime]}&nbsp;</td>
														</tr>
														<tr>
															<td>是否审核：</td>
															<td><!--{if $com[isCheck]==1}-->√<!--{elseif $com[isCheck]==2}-->x<!--{else}-->?<!--{/if}-->&nbsp;</td>
															<td>是否营审：</td>
															<td><!--{if $com[licenceCheck]==1}-->√<!--{elseif $com[licenceCheck]==2}-->√免<!--{elseif $com[licenceCheck]==-1}-->已上传<!--{elseif $com[licenceCheck]==-2}-->x<!--{else}-->未上传<!--{/if}-->&nbsp;</td>
														</tr>
														<tr>
															<td>所在城市：</td>
															<td>{$com[comCityId]}&nbsp;</td>
															<td>详细地址：</td>
															<td>{$com[comAddress]}&nbsp;</td>
														</tr>
														<tr>
															<td>公司性质：</td>
															<td>{$com[comType]}&nbsp;</td>
															<td>公司规模：</td>
															<td>{$com[comWorkers]}&nbsp;</td>
														</tr>
														<tr>
															<td>所属行业：</td>
															<td>{$industryName}&nbsp;</td>
															<td>公司网址：</td>
															<td>{$com[comSite]}&nbsp;</td>
														</tr>
														<tr>
															<td>招聘联系人：</td>
															<td>{$com[comUser]}&nbsp;</td>
															<td>招聘联系电话：</td>
															<td>{$com[comPhone]}&nbsp;</td>
														</tr>
														<tr>
															<td>招聘手机号码：</td>
															<td>{$com[comMobile]}&nbsp;</td>
															<td>招聘传真：</td>
															<td>{$com[comFax]}&nbsp;</td>
														</tr>
														<tr>
															<td>招聘Email：</td>
															<td>{$com[comEmail]}&nbsp;</td>
															<td>招聘备用Email：</td>
															<td>{$com[comEmailBak]}&nbsp;</td>
														</tr>
														<tr>
															<td>与本站联系人：</td>
															<td>{$com[User597]}&nbsp;<label style="margin-left:20px;"><a style="text-decoration:underline" onclick="Boxy.load('/company/company.html?act=lianxi&c_id={$com['_cid']}',{title: '与本站联系修改'});" >修改</a> </label></td>
															<td>与本站联系电话：</td>
															<td>{$com[Phone597]}&nbsp;<label style="margin-left:20px;"><a style="text-decoration:underline" onclick="Boxy.load('/company/company.html?act=lianxi&c_id={$com['_cid']}',{title: '与本站联系修改'});" >修改</a></label></td>
														</tr>
														<tr>
															<td>与本站联系手机：</td>
															<td>{$com[Mobile597]}&nbsp;<label style="margin-left:20px;"><a style="text-decoration:underline" onclick="Boxy.load('company.html?act=lianxi&c_id={$com['_cid']}',{title: '与本站联系修改'});" >修改</a> </label></td>
															<td>经办QQ：</td>
															<td>{$com[QQ597]}&nbsp;<label style="margin-left:20px;"><a style="text-decoration:underline" onclick="Boxy.load('company.html?act=lianxi&c_id={$com['_cid']}',{title: '与本站联系修改'});" >修改</a> </label></td>
														</tr>
														<tr>
															<td>公司简介：</td>
															<td colspan="3">{$com[comInfo]}&nbsp;</td>
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