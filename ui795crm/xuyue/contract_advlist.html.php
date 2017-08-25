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
					<div class="m_bg">客服管理 > <a href="company.html?act=mylist&ordertype=3&query=">我的企业</a>  > <a href="contract.html?act=comlist&op=all&c_id={$_cid}"> 公司：[{$cname}] 合同总列表</a> > 合同：[{$contract[title]}] > 广告位列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--{if $contract[contract_status]<1}--><div class="btn icon-1 icon"><a href="contract.html?act=advInfoedit&contractId={$contractId}&c_id={$_cid}">新增广告位</a></div><!--{/if}-->
							<div class="btn icon-9 icon"><a href="contract.html?act=comlist&op=all&c_id={$_cid}">返回公司：[{$cname}] 合同总列表</a></div>
							<!-- <span class="gray">【{$cname}】的所有合同</span> -->
						</div>
					</div>
					
					<div class="searchBox" style="display:none;"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									<input type="hidden" name="c_id" value="{$_cid}">
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<div class="paginator" style="">{$showpage}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<form name="listform" action="company.html" method="post" >
						<input type="hidden" id="act" name="act" value="{$act}">
						<input type="hidden" id="op" name="op" value="{$op}">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
							<thead>
									<tr class="table_header">
										<th class="td1" width="10px"></th>
										<th width="50px" style="display:none;">广告位ID</th>
										<th width="50px" style="display:none;">合同编号</th>
										<th width="88px">企业名称</th>
										<th width="88px">合同名称</th>
										<th width="66px">广告城市</th>
										<th width="66px">广告位置</th>
										<th width="66px">广告时间</th>
										<th width="66px">素材上传</th>
										<th width="200px">操作</th>
									</tr>
								</thead>
								<!--{loop $advs $adv}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$adv[contractId]}" ></td>
										<td style="display:none;">{$adv[caid]}</td>
										<td style="display:none;">{$contract[contractId]}</td>
										<td>{$adv[cname]}</td>
										<td>{$contract[title]}</td>
										<td>{$adv[region_name_short]}</td>
										<td>{$__advStr[$adv[positionId]]}</td>
										<td>{$adv[week]}天</td>
										<td><!--{if $adv[attachment]}-->已上传<!--{elseif $adv[note]}-->已备注<!--{else}-->未上传<!--{/if}--></td>
										<td>
											<a class="btn_s" onclick="Boxy.load('contract.html?act=view&contractId={$adv[contractId]}',{title: '查看合同信息'});" >查看</a>
											<!--{if $contract[contract_status]<1}-->
												<a class="btn_s" href="contract.html?act=advInfoSingeEdit&contractId={$adv[contractId]}&c_id={$_cid}&caid={$adv[caid]}" >修改</a>
											<!--{/if}-->
											<!--{if ($adv[status]<>3)}-->
												<a class="btn_s" href="contract.html?act=scPicedit&caid={$adv[caid]}&contractId={$adv[contractId]}&c_id={$_cid}" >需求上传</a>
											<!--{/if}-->	
											<!--{if ($contract[contract_status]<1)}-->
												<a class="btn_s" href="contract.html?act=advdel&caid={$adv[caid]}&c_id={$_cid}&contractId={$adv[contractId]}" onclick="return confirm('确认需要删除这些信息吗？');">删除</a>
											<!--{/if}-->
											<!--{if $adv[attachment]}--><a class="btn_s" href="/design/contract.html?act=down&caid={$adv[caid]}">下载</a><!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template xuyue/sidebar}-->
	</div>
</div>
</body>
</html>