<form method="post" action="/api/web/admin.api">
	<input type="hidden" name="act" value="isCheckNo">
	<input type="hidden" name="rid" value="{$_rid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step" >
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">真实姓名： </span></td>
					<td class="td2" colspan="2">
						{$realname}
					</td>
				</tr>
				<tr>
					<td class="td1">不通过理由： </td>
					<td class="td2" colspan="2">
						<textarea id="txtRemark" name="txtRemark" cols="50" rows="10"></textarea>
					</td>
				</tr>
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div class="step_submit_btn">
		<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" onClick="javascript:window.parent.theForm_Submit('{$_rid}',2,{$key})"></button><a href="#" class="close" id="closeNo"></a>
	</div>
</form>