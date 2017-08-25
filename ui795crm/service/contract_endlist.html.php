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
					<div class="m_bg">客服管理 > 合同管理 > 过期合同列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon"><a href="contract.html?act=edit">新建合同</a></div>
							<span class="gray"></span> -->
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<li class="ml_10">过期天数：<select id="query_day" name="query_day">
										<option value="3" <!--{if $query_day=='3'}-->selected<!--{/if}-->>3天</option>
										<option value="7" <!--{if $query_day=='7'}-->selected<!--{/if}-->>7天</option>
										<option value="30" <!--{if $query_day=='30'}-->selected<!--{/if}-->>30天</option>
										<option value="999999" <!--{if $query_day=='999999'}-->selected<!--{/if}-->>全部</option>
									</select></li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="企业名称"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="contract.html?act={$act}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
										<div class="paginator" style="float:right;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
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
										<th class="td1" width="10px" style="display:none;"></th>
										<th width="50px" style="display:none;">合同编号</th>
										<th width="60px">合同名称</th>
										<th width="200px">企业名称</th>
										<th width="66px">创建时间</th>
										<th width="66px">开始时间</th>
										<th width="66px">结束时间</th>
										<th width="50px">付款金额</th>
										<!-- <th width="25px">付款</th>
										<th width="25px">开票</th> -->
										<!--{if $op=='no'}-->
										<th width="66px">驳回理由</th>
										<!--{/if}-->
										<th width="50px">状态</th>
										<th width="200px">操作</th>
									</tr>
								</thead>
								<!--{loop $contracts $contract}-->
								<tbody>
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$contract[contractId]}" ></td>
										<td style="display:none;">{$contract[contractId]}</td>
										<td>{$contract[title]}</td>
										<td><!--{if $op=='ok'}-->
										<a href="http://www.{ROOT_DOMAIN}/com-{$contract[_cid]}/" target="_blank" style="display:block;padding: 3px;font-size: 13px;font-weight: 700;">{$contract[cname]}</a>
										<a href="/company/company.html?act=to&c_id={$contract[_cid]}" class="btn_s"  target="_blank">登录前台</a>
										<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$contract[_cid]}">查看详情</a>
										<a class="btn_s" href="http://www.baidu.com/s?wd={$contract[cname]}" target="_blank">百度</a>
										<!--{else}-->
										<a target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$contract[_cid]}">{$contract[cname]}</a>
										<!--{/if}--></td>
										<td>{$contract[createTime]}</td>
										<td>{$contract[startDate]}</td>
										<td>{$contract[endDate]}</td>
										<td>{$contract[contract_price]}</td>
										<!-- <td>{$contract[ispay]}</td>
										<td>{$contract[isinvoice]}</td> -->
										<!--{if $op=='no'}--><td>{$contract[refuse]}</td><!--{/if}-->
										<td>已过期</td>
										<td>
											<a class="btn_s" href="company.html?act=follow&c_id={$contract[_cid]}" target="_blank">跟进</a>
											<a class="btn_s" onclick="Boxy.load('contract.html?act=view&contractId={$contract[contractId]}',{title: '查看合同信息'});" >合同详情</a>
											<!--{if ($contract[contract_status]<1)}-->
												<a class="btn_s" href="contract.html?act=edit&contractId={$contract[contractId]}&c_id={$contract[_cid]}" >修改</a>
											<!--{/if}-->
											<a class="btn_s" href="contract.html?act=advlist&contractId={$contract[contractId]}&c_id={$contract[_cid]}"  style="display:none;">广告位</a>
											<!--{if ($contract[contract_status]==2)}-->
												<a class="btn_s" href="contract.html?act=xfedit&parentId={$contract[contractId]}&c_id={$contract[_cid]}" >续费</a>
												<a class="btn_s" href="contract.html?act=sjedit&parentId={$contract[contractId]}&c_id={$contract[_cid]}" >升级</a>
											<!--{/if}-->
											<!--{if ($contract[contract_status]<1)}-->
												<a class="btn_s" href="contract.html?act=del&contractId={$contract[contractId]}&c_id={$contract[_cid]}" onclick="return confirm('确认需要删除这些信息吗？');">删除</a>
											<!--{/if}-->
											<!--{if $op=='ok'}-->
												<a class="btn_s" href="loginlog.html?act=list&c_id={$contract[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}" target="_blank">登录日志</a>
												<a class="btn_s" href="editlog.html?act=list&c_id={$contract[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}">修改日志</a>
												<a class="btn_s" href="contract.html?act=comlist&op=all&c_id={$contract[_cid]}">合同管理</a>
												<a class="btn_s" onclick="Boxy.load('/company/company.html?act=psw&c_id={$contract[_cid]}',{title: '企业密码重置'});">修改密码</a>
												<a class="btn_s" onclick="Boxy.load('/company/company.html?act=username&c_id={$contract[_cid]}',{title: '企业用户名修改'});">修改用户名</a>
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