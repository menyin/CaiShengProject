<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<style>
	.boxy-content {padding: 20px 20px;}
	.step_submit_btn a { margin: 5px 15px 0 0; width: 50px; height: 24px; line-height: 24px; text-align: center; border-radius: 4px; background: #eee; border: 1px solid #ccc; color: #666; cursor: pointer; display: inline-block; zoom: 1; padding:3px; }
	.step_submit_btn .tg_btn {background: #3d86bc; color: #fff; border: 1px solid #397eb2;}
</style>
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
					<div class="m_bg">财务管理 > 合同管理 > {$Title}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon"><a href="contract.html?act=edit">新建合同</a></div> -->
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul style="width:1050px \9; *width:1050px; _width:1050px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									<li class="ml_10">创建时间：
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10">跟单员：
									<select name="contractAdmin">
										<option value="">请选择</option>
										<!--{loop $adminAll $value}-->
										<option value="{$value['adminid']}" <!--{if $value['adminid']==$contractAdmin}-->selected=""<!--{/if}-->>{$value['adminUsername']}</option>
										<!--{/loop}-->
									</select></li>
									<li class="ml_10"><select name="priceType"><option value="">请选择</option><option value="1" <!--{if $priceType==1}-->selected=""<!--{/if}-->>0</option><option value="2" <!--{if $priceType==2}-->selected=""<!--{/if}-->>非0</option></select></li>
									<!-- <li class="ml_10">创建时间：<select id="query_day" name="query_day" style="width:80px">
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
									<input type="hidden" name="query_regionId" id="query_regionId" value="{$qid}" />
									<li class="ml_10">区域：
										<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true"> 
										<script language="javascript">
											var areaOdjid='query_regionId'; 
											var areaOdjstr='query_region';
											var areaOdjProvice=1;//是否省可选
											var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
											var areaOdjnumber=9;//数量，如果唯一值，则立即返回
										</script>
									</li>
									<li class="ml_10">查询：<input type="text" name="contractName" id="contractName" value="{$contractName}"  placeholder="合同名称"></li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}"  style="width:150px;" placeholder="企业名称/用户名/地区/邮箱/电话"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									<li class="ml_10" style="float:right; padding:10px 10px 0px 0px;"><a href="excel.php?act=contract&op={$op}&txtStartDate={$startDate}&txtEndDate={$endDate}&contractAdmin={$contractAdmin}&priceType={$priceType}&query_regionId={$qid}&query={$q}" class="excelBtn">导出excel</a></li>
									<div style=" clear:both;"></div>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="contract.html?act={$act}&op={$op}&txtStartDate={$startDate}&txtEndDate={$endDate}&contractAdmin={$contractAdmin}&priceType={$priceType}&query_regionId={$qid}&query={$q}{$value}&contractName={$contractName}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
										<div class="paginator" style="float:left;">{$showpage}&nbsp;&nbsp;&nbsp;&nbsp;本页合计：{$priceTotal}元</div>
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
										<th width="80px">合同名称</th>
										<th width="80px">企业名称</th>
										<th width="50px">用户名</th>
										<th width="50px">创建时间</th>
										<th width="50px">开始时间</th>
										<th width="50px">结束时间</th>
										<th width="50px">实际价格</th>
										<!-- <th width="25px">付款</th>
										<th width="25px">开票</th> -->
										<th width="50px">执照状态</th>
										<th width="50px">合同状态</th>
										<!--{if $op=='no'}-->
										<th width="66px">驳回理由</th>
										<!--{/if}-->
										<th width="50px">跟单员</th>
										<th width="50px">跟单员地区</th>
										<th width="80px">备注</th>	
										<th width="50px">操作</th>
									</tr>
								</thead>
								<!--{loop $contracts $contract}-->
								<tbody>
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$contract[contractId]}" ></td>
										<td style="display:none;">{$contract[contractId]}</td>
										<td>{$contract[title]}</td>
										<td><a href="/companyinfo/companyinfo.html?act=view&c_id={$contract[_cid]}" target="_blank">{$contract[cname]}</a></td>
										<td>{$contract[username]}</td>
										<td>{$contract[createTime]}</td>
										<td>{$contract[startDate]}</td>
										<td>{$contract[endDate]}</td>
										<td>{$contract[contract_price]}</td>
										<!-- <td>{$contract[ispay]}</td>
										<td>{$contract[isinvoice]}</td> -->
										<td><!--{if $contract[licenceCheck]==1}-->已通过<!--{elseif $contract[licenceCheck]==2}-->已允许<!--{elseif $contract[licenceCheck]==-1}-->已上传<!--{elseif $contract[licenceCheck]==-2}-->不通过<!--{else}-->未上传<!--{/if}--></td>
										<td><!--{if $contract[contract_status]==1 || $contract[contract_status]==2}-->√<!--{elseif $contract[contract_status]==-1}-->×<!--{else}-->?<!--{/if}--></td>
										<!--{if $op=='no'}--><td>{$contract[refuse]}</td><!--{/if}-->
										<td>{$contract[adminName]}</td>
										<td>{$contract[adminArea]}</td>
										<td>{$contract[contract_remark]}</td>
										<td>
											<!--{if $contract[contract_status]==0}-->
												<a class="btn_s" onclick="Boxy.load('contract.html?act=view&contractId={$contract[contractId]}',{title: '审核合同信息'});" >审核</a>
											<!--{/if}-->
											<!--{if $op=='ok'}-->
												<a class="btn_s" href="/service/company.html?act=follow&c_id={$contract[_cid]}"  target="_blank">跟进</a>
											<!--{/if}-->
											<!--{if in_array('合同删除', $__r) && $op=='ok'}-->
												<a class="btn_s" href="contract.html?act=okEdit&contractId={$contract[contractId]}&c_id={$contract[_cid]}&op={$op}">修改</a>
												<a class="btn_s" href="contract.html?act=del&contractId={$contract[contractId]}&op={$op}&query_day={$query_day}&query_regionId={$qid}&query_region={$query_region}&query={$q}" onclick="return confirm('确认取消吗？');">取消</a>
											<!--{/if}-->
											<!-- <a class="btn_s" href="contract.html?act=become&contractId={$contract[contractId]}" onclick="return confirm('确认审核通过吗？');">通过</a>
											<a class="btn_s" onclick="Boxy.load('contract.html?act=remark&contractId={$contract[contractId]}',{title: '屏蔽原因'});" >备注</a> -->
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
		<!--{template finance/sidebar}-->
	</div>
</div>
</body>
</html>