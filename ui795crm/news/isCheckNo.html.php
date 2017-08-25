<form method="post" id="sendform" name="sendform" action="/api/web/admin.api">
	<input type="hidden" name="act" value="isCheckNo">
	<input type="hidden" name="rid" value="{$r_id}" />
	<input type="hidden" name="report_id" value="{$report_id}" />
	<input type="hidden" name="email" value="{$resume[email]}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step" >
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">真实姓名： </span></td>
					<td class="td2" colspan="2" style="float:left;">
						{$resume[realname]}
					</td>
				</tr>
				<tr>
					<td class="td1">范本： </td>
					<td class="td2" colspan="2"  style="float:left;cursor: pointer;">
						<a onclick="sendform.txtRemark.value='您简历上面留的手机号为空号!';" style="cursor:hand"><u>您简历上面留的手机号为空号!</u></a><br/><br/>
						<a onclick="sendform.txtRemark.value='您简历上面留的手机号已停机!';" style="cursor:hand"><u>您简历上面留的手机号已停机!</u></a><br/><br/>
						<a onclick="sendform.txtRemark.value='您简历上面留的手机号非本人!';" style="cursor:hand"><u>您简历上面留的手机号非本人!</u></a><br/><br/>
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
		<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" onClick="javascript:window.parent.theForm_Submit('{$r_id}',2,{$report_id},'{$resume[email]}')"></button><a href="#" class="close" id="closeNo"></a>
	</div>
</form>