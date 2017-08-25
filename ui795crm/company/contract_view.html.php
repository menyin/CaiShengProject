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
										<table>
											<tr>
												<td class="tb_title" width="140px">合同编号：</td>
												<td>{$contract['contractId']}</td>
												<td class="tb_title" width="140px">企业名称：</td>
												<td>{$com[cname]}</td>
											</tr>
											<tr>
												<td class="tb_title">合同标题：</td>
												<td colspan=3>{$contract[title]}</td>
											</tr>
											<tr height="200" style="display:none;">
												<td class="tb_title" >产品选择：</br></td>
												<td colspan=3>
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
												<td>{$contract[startDate]}</td>
												<td class="tb_title">结束时间：</td>
												<td>{$contract[endDate]}</td>
											</tr>
											<tr>
												<td class="tb_title">职位数：</td>
												<td>{$contract[contract_job]}</td>
												<td class="tb_title">简历数：</td>
												<td>{$contract[contract_resume]}</td>
											</tr>
											<tr>
												<td class="tb_title">短信数：</td>
												<td>{$contract[contract_sms]}</td>
												<td class="tb_title">月下载数：</td>
												<td>{$contract[contract_month]}</td>
											</tr>
											<tr>
												<td class="tb_title">实际价格：</td>
												<td colspan="3">{$contract[contract_price]}</td>
											</tr>
											<tr style="display:none;">
												<td class="tb_title">是否付款：</td>
												<td><!--{if $contract[ispay]==1}-->是<!--{else}--><!--{/if}--></td>
												<td class="tb_title">是否发票：</td>
												<td><!--{if $contract[isinvoice]==1}-->是<!--{else}--><!--{/if}--></td>
											</tr>
											<tr>
												<td class="tb_title">账期：</td>
												<td colspan=3>{$contract[contract_dopay]}</td>
											</tr>
											<tr>
												<td class="tb_title">合同备注：</td>
												<td colspan=3>{$contract[contract_remark]}</td>
											</tr>
											<tr>
												<td class="tb_title">票据信息：</td>
												<td colspan=3>{$contract[contract_other]}</td>
											</tr>
											<!--{if $advInfo}-->
											<!--{loop $advInfos $advInfo}-->
											<tr style="display:none;">
												<td class="tb_title">广告城市{$advInfo[i]}：</td>
												<td colspan=3>{$advInfo[region_name_short]}</td>
											</tr>
											<tr style="display:none;">
												<td class="tb_title">广告位置{$advInfo[i]}：</td>
												<td>{$__advStr[$advInfo[positionId]]}</td>
												<td class="tb_title">广告天数{$advInfo[i]}：</td>
												<td>{$advInfo[week]}</td>
											</tr>
											<!--{/loop}-->
											<!--{/if}-->
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
<script>
window.setTimeout(function(){initPage()},1);

function initPage() {
	{$products2js}


};

function addProduct(product_id,product_type,product_name,product_region,product_price){
	var str='<tr class="" id="'+product_id+'"><td class="product_id">'+product_id+'</td><td>'+product_type+'</td><td>'+product_name+'</td><td class="product_price">'+product_price+'</td></tr>';
	var add=1;
	$("#product_list tbody tr").each(function() {
		if ($(this).find('.product_id').text()==product_id){
			add=0;
		}
	});
	if (add){
		$("#product_list tbody").append(str);
		todo();
	}
}
function delProduct(product_id){
	$('#'+product_id).remove();
	todo();
}
function todo(){
	var price=0;
	$("#product_list tbody tr").each(function() {
		if ($(this).find('.product_price').text()>0) price+=parseInt($(this).find('.product_price').text());
	});
	$("#contract_totle").val(price);

	var product_list='';
	$("#product_list tbody tr").each(function() {
		if (product_list) product_list=product_list+','+$(this).find('.product_id').text();
		else product_list=$(this).find('.product_id').text();
	});
	$("#contract_products").val(product_list);
}


</script>