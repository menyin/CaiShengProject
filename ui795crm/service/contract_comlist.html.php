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
					<div class="m_bg">客服管理 > <a href="company.html?act=mylist&ordertype=3&query=">我的企业</a> >  公司：[{$com[cname]}] 合同管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="contract.html?act=edit&c_id={$_cid}">新建合同</a></div>
							<div class="btn icon-9 icon"><a href="javascript:history.go(-1);">返回上一级</a></div>
							<!-- <span class="gray">【{$cname}】的所有合同</span> -->
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="c_id" value="{$_cid}">
									<li class="ml_10"><b>{$cname}</b></li>
									<!-- <li class="ml_10"><select id="query_day" name="query_day" style="width:80px">
										<option value="1" {if $query_day=='1'}selected{/if}>1天内</option>
										<option value="3" {if $query_day=='3'}selected{/if}>3天内</option>
										<option value="5" {if $query_day=='5' || $query_day==''}selected{/if}>5天内</option>
										<option value="10" {if $query_day=='10'}selected{/if}>10天内</option>
										<option value="20" {if $query_day=='20'}selected{/if}>20天内</option>
										<option value="30" {if $query_day=='30'}selected{/if}>30天内</option>
										<option value="60" {if $query_day=='60'}selected{/if}>60天内</option>
										<option value="90" {if $query_day=='90'}selected{/if}>90天内</option>
										<option value="120" {if $query_day=='120'}selected{/if}>120天内</option>
										<option value="180" {if $query_day=='180'}selected{/if}>180天内</option>
										<option value="240" {if $query_day=='240'}selected{/if}>240天内</option>
										<option value="360" {if $query_day=='360'}selected{/if}>360天内</option>
										<option value="999999" {if $query_day=='999999'}selected{/if}>全部</option>
									</select></li> -->
									<li class="ml_10">审核类型：
										<select id='op' name='op' style='width:80px' >
											<option value='all' <!--{if ($op=='all')}-->selected<!--{/if}-->>全部</option>
											<option value='ischeck' <!--{if ($op=='ischeck')}-->selected<!--{/if}-->>未审核</option>
											<option value='ok' <!--{if ($op=='ok')}-->selected<!--{/if}-->>已审核</option>
											<option value='do' <!--{if ($op=='do')}-->selected<!--{/if}-->>已生效</option>
											<option value='no' <!--{if ($op=='no')}-->selected<!--{/if}-->>已屏蔽</option>
										</select>
									</li>
									<li class="ml_10"> 模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px; ">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="contract.html?act={$act}&c_id={$_cid}&op={$op}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
										<div class="paginator" style="float:left;">{$showpage}</div>
										
									</div>
									<div style="clear:both;"></div>
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
										<th width="88px">企业名称</th>
										<th width="88px">合同名称</th>
										<th width="66px">创建时间</th>
										<th width="66px">开始时间</th>
										<th width="66px">结束时间</th>
										<th width="50px">付款金额</th>
										<th width="50px">职位数</th>
										<th width="50px">简历数</th>
										<th width="50px">短信数</th>
										<th width="50px">月下载数</th>
										<th width="50px">状态</th>
										<th width="200px">操作</th>
									</tr>
								</thead>
								<!--{loop $contracts $contract}-->
								<tbody>
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$contract[contractId]}" ></td>
										<td style="display:none;">{$contract[contractId]}</td>
										<td>{$contract[cname]}</td>
										<td>{$contract[title]}</td>
										<td>{$contract[_createTime]}</td>
										<td>{$contract[_startDate]}</td>
										<td>{$contract[_endDate]}</td>
										<td>{$contract[contract_price]}</td>
										<td>{$contract[contract_job]}</td>
										<td>{$contract[contract_resume]}</td>
										<td>{$contract[contract_sms]}</td>
										<td>{$contract[contract_month]}</td>
										<td><!--{if $contract[contract_status]==1}-->已审核<!--{elseif $contract[contract_status]==2}-->已生效<!--{elseif $contract[contract_status]==-1}-->已屏蔽<!--{elseif $contract[contract_status]==-9}-->未初始化<!--{else}-->初始<!--{/if}--></td>
										<td>
											<a class="btn_s" onclick="Boxy.load('contract.html?act=view&contractId={$contract[contractId]}',{title: '查看合同信息'});" >查看</a></div>
											<!--{if ($contract[contract_status]<1)}-->
												<a class="btn_s" href="contract.html?act=edit&contractId={$contract[contractId]}&c_id={$_cid}" >修改</a>
											<!--{/if}-->
											<a class="btn_s" href="contract.html?act=edit&c_id={$_cid}">新建合同</a>
											<!--{if !$contract[advStatus]}-->
												<!-- <a class="btn_s" href="contract.html?act=advInfoedit&contractId={$contract[contractId]}&c_id={$_cid}" >新建广告</a> -->
											<!--{else}-->
												<!-- <a class="btn_s" href="contract.html?act=advlist&contractId={$contract[contractId]}&c_id={$_cid}" >广告位</a> -->
											<!--{/if}-->
											<!--{if ($contract[contract_status]==2) && !$contract[_contract_Sjid] && $contract[type]<>1 && $contract[endDate]>$time}-->
												<!--<a class="btn_s" href="contract.html?act=xfedit&parentId={$contract[contractId]}&c_id={$_cid}" >续费</a>-->
												<a class="btn_s" href="contract.html?act=sjedit&parentId={$contract[contractId]}&c_id={$_cid}" >增值简历</a>
											<!--{/if}-->
											<!--{if ($contract[contract_status]<1)}-->
												<!--<a class="btn_s" onclick="del('{$contract[contractId]}','{$_cid}')">删除</a>-->
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
<script type="text/javascript">
//删除
function del(contractId,cid){
	if(!cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认需要删除这些信息吗？')){
		$.post('contract.html',{act:'del',contractId:contractId,c_id:cid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
				window.location.href='contract.html?act=comlist&op=all&c_id={$_cid}';
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.href='contract.html?act=comlist&op=all&c_id={$_cid}';
			}
		},'json');
	}
}
</script>
</body>
</html>