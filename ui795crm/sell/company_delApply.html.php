<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm1" name="postForm1" method="post" action="company.html">
									<input type="hidden" name="act" id="act" value="delApplySave" />
									<input type="hidden" name="c_id" id="c_id" value="{$com['_cid']}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title" width="10%">企业名称：</td>
												<td>{$com[cname]}</td>
											</tr>
											<tr>
												<td class="tb_title">删除原因：</td>
												<td ><textarea type="text" class="text1" id="txtNote" name="txtNote" cols="55" rows="5" message="请输入删除原因">{$result[note]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">&nbsp;</td>
												<td ><button type="button" name="step1_submit" class="step1_submit submit_btn_ok" onClick="check();"></button></td>
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
<script type="text/javascript">
function check () {
	if($('#txtNote').val() == ''||typeof($('#txtNote').val()) == 'undefined'){
		alert("删除原因不能为空！");
		return;
	}else{
		$('#postForm1').submit();
	}
	
}
</script>