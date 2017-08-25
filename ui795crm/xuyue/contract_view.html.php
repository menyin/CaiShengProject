<?exit?>
<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<div class="">
								<form id="postForm" name="postForm" method="post" action="contract.html">
									<div class="cell_tb_list">
										<table width="1023" height="323">
											<tr>
												<td class="tb_title" width="184">合同编号：</td>
												<td colspan="3">{$contract['contractId']}</td>
												<td class="tb_title" width="226">企业名称：</td>
												<td colspan="3">{$com[cname]}</td>
											</tr>
											<tr>
												<td class="tb_title">合同标题：</td>
												<td colspan=7>{$contract[title]}</td>
											</tr>
											<tr>
												<td class="tb_title">开始时间：</td>
												<td colspan="3">{$contract[startDate]}</td>
												<td class="tb_title">结束时间：</td>
												<td colspan="3">{$contract[endDate]}</td>
											</tr>
											<tr>
												<td class="tb_title">职位数：</td>
												<td width="100">{$contract[contract_job]}</td>
												<td width="100">简历数：</td>
												<td width="100">{$contract[contract_resume]}</td>
												<td class="tb_title">短信数：</td>
												<td width="100">{$contract[contract_sms]}</td>
												<td width="100">月下载数：</td>
												<td width="100">{$contract[contract_month]}</td>
											</tr>
											<tr>
												<td class="tb_title">付款方式：</td>
												<td colspan="3">{$__paymentStr[$contract[payment]]}</td>
												<td class="tb_title">户名：</td>
												<td colspan="3">{$contract[account_name]}</td>
											</tr>
											<tr>
												<td class="tb_title">付款金额：</td>
												<td colspan="3">{$contract[contract_price]}元</td>
												<td class="tb_title">付款时间：</td>
												<td colspan="3"><!--{if $contract[receipt]==1}-->{$contract[_transferTime]}<!--{else}-->未付款<!--{/if}--></td>
											</tr>
											<tr>
												<td class="tb_title">合同备注：</td>
												<td colspan=7>{$contract[contract_remark]}</td>
											</tr>
											<tr>
												<td class="tb_title">票据信息：</td>
												<td colspan=7>{$contract[contract_other]}</td>
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