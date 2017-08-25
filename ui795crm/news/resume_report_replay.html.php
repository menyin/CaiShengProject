<?exit?>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js"></script>
<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm" name="postForm" method="post" action="company_report.html">
									<input type="hidden" name="act" id="act" value="replaysave" />
									<input type="hidden" name="id" id="id" value="{$id}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title">被投诉的简历：</td>
												<td colspan="3" >{$realname}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">投诉的类型：</td>
												<td colspan="3" >{$__resumeReportStr[$result['type']]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">公司：</td>
												<td colspan="3" >{$cname['cname']}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">备注：</td>
												<td colspan="3" ><textarea type="text" class="text1" id="note" name="note" cols="80" rows="6" message="请输入" style="border:1px solid #ccc;">{$result[note]}</textarea></td>
											</tr>
										</table>
									</div>
									<div class="step_submit_btn">
										<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit" onClick="check();"></button>
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
	var note = $('#note').val();
	if(note==''||typeof(note)=='undefined'){
		alert('备注不能为空!');
		return;
	}
	$('#postForm').submit();
}
</script>