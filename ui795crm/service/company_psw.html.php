<form method="post" action="editcompany.html">
	<input type="hidden" name="act" id="act" value="save_psw" />
	<input type="text" name="c_id" id="c_id" value="{$_cid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">用户名： </span></td>
					<td class="td2" colspan="2">
						{$_user['username']}dfdsfdsf
					</td>
				</tr>
				<!-- <tr>
					<td class="td1"><span class="step_url_title">原密码： </span></td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" name="oldpsw" />
					</td>
				</tr> -->
				<tr>
					<td class="td1">新密码： </td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" name="newpsw" />
					</td>
				</tr>
				<tr>
					<td class="td1">密码确认： </td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" name="repsw" />
					</td>
				</tr>
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div class="step_submit_btn">
		<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
	</div>
</form>