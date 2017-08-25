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
					<div class="m_bg">合同管理 > 合同列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon" >新建合同</div>
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">

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
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
							<thead>
									<tr class="table_header">
										<th class="td1" width="10px"></th>
										<th width="88px" style="display:none;">合同编号</th>
										<th >企业名称</th>
										<th width="66px">创建时间</th>
										<th width="66px">开始时间</th>
										<th width="66px">结束时间</th>
										<th width="50px">实际价格</th>
										<th width="25px">状态</th>
										<th width="25px">付款</th>
										<th width="25px">开票</th>
										<th width="200px">操作</th>
									</tr>
								</thead>
								<!--{loop $contracts $contract}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$contract[contractId]}" ></td>
										<td style="display:none;">{$contract[contractId]}</td>
										<td>{$contract[cname]}</td>
										<td>{$contract[createTime]}</td>
										<td>{$contract[startDate]}</td>
										<td>{$contract[endDate]}</td>
										<td>{$contract[contract_price]}</td>
										<td>{$contract[contract_status]}</td>
										<td>{$contract[ispay]}</td>
										<td>{$contract[isinvoice]}</td>
										<td>
											<a class="btn_s" onclick="Boxy.load('contract.html?act=view&contractId={$contract[contractId]}',{title: '查看合同信息'});" >查看</a>
											<a class="btn_s" href="#" >营审</a>
											<a class="btn_s" href="contract.html?act=become&contractId={$contract[contractId]}" >已生效</a>
											<!--{if ($contract[contract_status]==5)}-->
												<a class="btn_s" href="contract.html?act=nobecome&contractId={$contract[contractId]}" >驳回</a>
											<!--{/if}-->
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
		<!--{template service/sidebar}-->
	</div>
</div>
</body>
</html>