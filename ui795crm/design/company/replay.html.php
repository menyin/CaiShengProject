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
								<form id="postForm" name="postForm" method="post">
									<input type="hidden" name="act" id="act" value="replaysave" />
									<input type="hidden" name="id" id="id" value="{$id}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title">企业名称：</td>
												<td>{$com[cname]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">回复：</td>
												<td ><textarea type="text" class="text1" id="reply" name="reply" cols="50" rows="6" message="请输入企业简介">{$_replay[reply]}</textarea></td>
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