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
					<div class="m_bg">企业审核 >查看企业： [<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">{$com['cname']}]</a> >招聘的职位</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<a href="/companyinfo/companyinfo.html?act=view&c_id={$com['_cid']}"><div class="btn icon-4 icon" >基本资料</div></a>
							<a href="/companyinfo/companyinfo.html?act=licence&c_id={$com['_cid']}"><div class="btn icon-4 icon" >执照基本信息</div></a>
							<a href="/companyinfo/companyinfo.html?act=jobs&c_id={$com['_cid']}"><div class="btn icon-7 icon" id="btns-cur">招聘的职位</div></a>
							<a href="/companyinfo/companyinfo.html?act=contract&c_id={$com['_cid']}"><div class="btn icon-4 icon" >合同管理</div></a>
							<a href="/companyinfo/companyinfo.html?act=advs&c_id={$com['_cid']}" style="display:none;"><div class="btn icon-4 icon" >广告位管理</div></a>
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
															<td width="103" class="tb_title">
																<table width="200" border="1">
																	<ul>
																		<li><a href="/companyinfo/companyinfo.html?act=jobs&c_id={$com['_cid']}">招聘职位({$count})</a></li>
																		<!--{loop $jobListAll $l}-->
																			<!--{loop $l['list'] $ll}-->
																				<li <!--{if $id==$ll[jid]}--> class="cu" <!--{/if}-->><a href="/companyinfo/companyinfo.html?act=jobinfo&c_id={$com['_cid']}&id={$ll['jid']}">{$ll['jname']}</a></li>
																			<!--{/loop}-->
																		<!--{/loop}-->
																	</ul>
																</table>
															</td>
															<td width="1041">
																<table width="963" height="80" border="1">
																	<tr>
																		<td width="110">职位名称：</td>
																		<td colspan="3">{$job[jname]}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>招聘人数：</td>
																		<td width="340">{$job['jobNumber']}&nbsp;</td>
																		<td width="126">招聘部门：</td>
																		<td width="359">{$job['cuname']}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>职位类别：</td>
																		<td>{$job[jobclass]}&nbsp;</td>
																		<td>工作地区：</td>
																		<td>{$job[jobArea]}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>学历要求：</td>
																		<td>{$job['jobDegree']}&nbsp;</td>
																		<td>工作经验：</td>
																		<td>{$job[jobWorkYear]}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>年龄要求：</td>
																		<td>{$job[jobAge]}&nbsp;</td>
																		<td>性别要求：&nbsp;</td>
																		<td>{$job[jobGender]}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>外语要求：</td>
																		<td>{$job[jobLanguage]}&nbsp;</td>
																		<td>薪资待遇：</td>
																		<td>{$job['jobSalary']}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>福利待遇：</td>
																		<td  colspan="3">{$job['rewardStr']}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>职位描述：</td>
																		<td  colspan="3">{$job['jobContent']}&nbsp;</td>
																	</tr>
																	<tr>
																		<td>联系人：</td>
																		<td>{$com[comUser]}&nbsp;</td>
																		<td>联系电话：</td>
																		<td>{$strPhone}&nbsp;</td>
																	</tr>
																	<!--{if $linkWays}-->
																		<!--{loop $linkWays $l}-->
																		<tr>
																			<td>联系人：</td>
																			<td>{$l['n']}&nbsp;</td>
																			<td>联系电话：</td>
																			<td>{$l['t']}&nbsp;</td>
																		</tr>
																		<!--{/loop}-->
																	<!--{/if}-->
																	<tr>
																		<td>联系地址：</td>
																		<td  colspan="3">{$com['comAddress']}&nbsp;</td>
																	</tr>
																</table>
															</td>
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
		<!--{template company/sidebar}-->
	</div>
</div>
</body>
</html>