<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<body>
<style>
	.excelBtn {position: relative; top:-3px; }
</style>
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
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">销售管理 > 绩效列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="sale_record.html?act=add">新增绩效</a></div>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
										<input type="hidden" name="act" value="list">
										<li class="ml_10" style="display:<!--{if (in_array('主管', $__r))}--><!--{else}-->none<!--{/if}-->;">跟单员：
											<select id='follow_admin'  name='follow_admin'>
												<option value='' >{$_SESSION['adminUsername']}</option>
												<!--{loop $adminLowers $value}-->
													<option value='{$value[adminid]}' <!--{if $follow_admin==$value[adminid]}-->selected=""<!--{/if}-->>{$value[adminUsername]}</option>
												<!--{/loop}-->
											</select>
										</li>
										<li class="ml_10">关键词：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
										<li class="ml_10">金额：<input type="text" name="contract_price" id="contract_price" class="search input_txt" value="{$contract_price}"></li>
										<li class="ml_10">添加时间：
											<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
											<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
										</li>
										<li class="ml_10"><button type="submit" class="btn_gray btn_search btn_change" >查 询</button></li>
									</form>
								</ul>
								<ul style="clear:both;padding-top:10px;">
									<form method="get" action="excel.php" id="postForm">
									<li class="ml_10">下载业绩表：
										<input type="hidden" name="act" value="sale_record">
										<input type="hidden" name="op" id="op" value="1">
										<input type="text" style='width:120px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="<!--{if $startDate}-->{$startDate}<!--{else}-->{$date1}<!--{/if}-->" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})" required="required" readonly="readonly"/>-
										<input type="text" style='width:120px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="<!--{if $endDate}-->{$endDate}<!--{else}-->{$date1}<!--{/if}-->" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10"><button type="button" class="excelBtn" onclick="sub(1);">导出自己业绩</button></li>
									<li class="ml_10" style="display:<!--{if (in_array('主管', $__r))}--><!--{else}-->none<!--{/if}-->;"><button type="button" class="excelBtn"  onclick="sub(2);">导出全部</button></li>
									</form>
								</ul>
								<script type="text/javascript">
								function sub (status) {
									$("#op").val(status);									
									$('#postForm').submit();
									return false;
								}
								</script>
								<div style="clear:both;"></div>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="sale_record.html?act=list&txtStartDate={$startDate}&txtEndDate={$endDate}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
										<div class="paginator" style="float:left;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
							</div>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="5%">编号</th>
										<th width="10%">企业名称</th>
										<th width="10%">所属站点</th>
										<th width="10%">套餐类型</th>
										<th width="10%">付款方式</th>
										<th width="10%">汇款户名</th>
										<th width="10%">金额</th>
										<th width="10%">新旧单</th>
										<th width="10%">有无执照</th>
										<th width="10%">汇款时间</th>
										<th width="10%">赠送资源</th>
										<th width="10%">跟单员</th>
										<th width="10%">添加时间</th>
										<!--{if $_SESSION['adminUsername']=='su' || $_SESSION['adminUsername']=='eve'}-->
											<th width="10%">操作</th>
										<!--{/if}-->
									</tr>
								</thead>
								<tbody data-bind="foreach: items">
									<!--{loop $result $result1}-->
									<tr <!--{if $result1[receipt]==0}--> style="background:#F00;"<!--{/if}-->>
										<td>{$result1[id]}</td>
										<td>{$result1[cname]}</td>
										<td>{$result1[web_site]}</td>
										<td>{$result1[contract_title]}</td>
										<td>{$__paymentStr[$result1[payment]]}</td>
										<td>{$result1[account_name]}</td>
										<td>{$result1[contract_price]}</td>
										<td><!--{if $result1[new_old]==1}-->新<!--{else}-->旧<!--{/if}--></td>
										<td><!--{if $result1[license]==1}-->有<!--{else}-->无<!--{/if}--></td>
										<td><!--{if $result1[receipt]==1}-->{$result1[_transferTime]}<!--{else}-->未付款<!--{/if}--></td>
										<td>{$result1[contract_remark]}</td>
										<td>{$result1[adminUsername]}</td>
										<td>{$result1[_createTime]}</td>
										<!--{if (in_array('主管', $__r))}-->
											<td>
												<a class="btn_s" href="sale_record.html?act=edit&id={$result1[id]}">修改</a>
												<a class="btn_s" href="sale_record.html?act=del&id={$result1[id]}&contractId={$result1[contractId]}" onclick="return confirm('确认需要删除吗？');">删除</a>
											</td>
										<!--{/if}-->
									</tr>
									<!--{/loop}-->
									<!--{if  $num_all>0}-->
										<tr>
											<td colspan="6" style="text-align:right;"><b>总额统计：</b></td>
											<td colspan="8">{$allMoney}</td>
										</tr>
									<!--{/if}-->	
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template sell/sidebar}-->
	</div>
</div>
</body>
</html>