<?exit?>
<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm" name="postForm" method="post">
									<input type="hidden" name="act" id="act" value="checksave" />
									<input type="hidden" name="contractId" id="contractId" value="{$contract[contractId]}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<input type="hidden" name="check" id="check" value="{$contract[contract_status]}" />
									<div class="cell_tb_list">
										<table>
											<!-- <tr>
												<td class="tb_title" width="184">合同编号：{$sql1}</td>
												<td colspan="3">{$contract['contractId']}{$sql}</td>
												<td class="tb_title" width="226">企业名称：</td>
												<td colspan="3">{$com[cname]}</td>
											</tr>
											<tr>
												<td class="tb_title">合同标题：</td>
												<td colspan=7>{$contract[title]}</td>
											</tr>
											<tr height="200" style="display:none;">
												<td class="tb_title" >产品选择：</br></td>
												<td colspan=7>
													<table id="product_list" style="word-break:break-all;">
														<thead>
															<tr class="table_header" >
																<th style="width:80;">产品编号</th>
																<th style="width:80;">产品类型</th>
																<th >产品名称</th>
																<th style="width:80;">产品单价</th>
															</tr>
														</thead>
														<tbody></tbody>
													</table>
												</td>
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
												<td class="tb_title">合同总价：</td>
												<td colspan="3">{$contract[contract_totle]}元</td>
												<td class="tb_title">实际价格：</td>
												<td colspan="3">{$contract[contract_price]}元</td>
											</tr>
											<tr style="display:none;">
												<td class="tb_title">是否付款：</td>
												<td colspan="3">{if $contract[ispay]==1}是{else}{/if}</td>
												<td class="tb_title">是否发票：</td>
												<td colspan="3">{if $contract[isinvoice]==1}是{else}{/if}</td>
											</tr>
											<tr style="display:none;">
												<td class="tb_title">账期：</td>
												<td colspan=7>{$contract[contract_dopay]}</td>
											</tr>
											<tr>
												<td class="tb_title">合同备注：</td>
												<td colspan=7>{$contract[contract_remark]}</td>
											</tr>
											<tr>
												<td class="tb_title">票据信息：</td>
												<td colspan=7>{$contract[contract_other]}</td>
											</tr> -->
											<tr>
												<td class="tb_title">广告城市{$adv[i]}：</td>
												<td colspan=3>{$adv[region_name_short]}</td>
												<td>广告位置{$adv[i]}：</td>
												<td>{$__advStr[$adv[positionId]]}</td>
												<td>广告天数{$adv[i]}：</td>
												<td>{$adv[week]}天</td>
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