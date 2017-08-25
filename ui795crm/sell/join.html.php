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
									<input type="hidden" name="act" id="act" value="joinsave" />
									<input type="hidden" name="c_id" id="c_id" value="{$c_id}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title">企业名称：</td>
												<td>{$com[cname]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">注册时间：</td>
												<td>{$com[regTime]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">登录时间：</td>
												<td>{$com[loginTime]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">跟进时间：</td>
												<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="followTime" placeholder="" value="<!--{if $_result[followTime]}-->{$_result[followTime]}<!--{else}-->{$date1}<!--{/if}-->"  size="20" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})"/></span></div></td>
											</tr>
											<tr>
												<td class="tb_title">回访时间：</td>
												<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="nextTime" placeholder="" value="<!--{if $_result[nextTime]}-->{$_result[nextTime]}<!--{else}-->{$date2}<!--{/if}-->"  size="20" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})"/></span></div></td>
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