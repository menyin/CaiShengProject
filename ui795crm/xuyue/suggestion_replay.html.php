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
								<form id="postForm" name="postForm" method="post">
									<input type="hidden" name="act" id="act" value="replaysave" />
									<input type="hidden" name="id" id="id" value="{$id}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title">意见反馈内容：</td>
												<td colspan="3" >{$result[content]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">备注：</td>
												<td colspan="3" ><textarea type="text" class="text1" id="reply" name="reply" cols="80" rows="6" message="请输入备注" style="border:1px solid #ccc;">{$result[note]}</textarea></td>
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