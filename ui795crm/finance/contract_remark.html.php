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
									<input type="hidden" name="act" id="act" value="nobecome" />
									<input type="hidden" name="contractId" id="contractId" value="{$contract[contractId]}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<input type="hidden" name="contract_products" id="contract_products" value="{$contract_products}"/>
									<div class="cell_tb_list">
										<table>
											<tr>
												<td class="tb_title" width="140px">合同编号：</td>
												<td>{$contract['contractId']}</td>
												<td class="tb_title" width="140px">企业名称：</td>
												<td>{$com[cname]}</td>
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
												<td class="tb_title">实际价格：</td>
												<td>{$contract[contract_price]}</td>
											</tr>
											<tr>
												<td class="tb_title">合同备注：</td>
												<td colspan=3><textarea type="text" class="text1" id="txtContract_remark" name="txtContract_remark" rows="2" message="合同备注" style="margin: 0px; width: 100%;">{$contract[contract_remark]}</textarea></td>
											</tr>
										</table>
									</div>
									<div class="step_submit_btn">
										<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
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