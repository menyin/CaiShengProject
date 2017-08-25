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
								<form id="postForm" name="postForm" method="post" action="suggestion.html">
									<input type="hidden" name="act" id="act" value="emailsave" />
									<input type="hidden" name="id" id="id" value="{$id}" />
									<input type="hidden" name="email" id="email" value="{$result['email']}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title">意见反馈内容：</td>
												<td colspan="3" >{$result[content]}<input type="hidden" name="content" id="content" value="{$result[content]}" /></textarea></td>
											</tr>
											<tr>
												<td class="tb_title">邮件回复：</td>
												<td colspan="3" ><textarea type="text" class="text1" id="emailtxt" name="emailtxt" cols="80" rows="6" message="请输入邮件内容" style="border:1px solid #ccc;">{$result[emailtxt]}</textarea></td>
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
	var emailtxt = $('#emailtxt').val();
	if(emailtxt==''||typeof(emailtxt)=='undefined'){
		alert('邮件内容不能为空!');
		return;
	}
	$('#postForm').submit();
}
</script>