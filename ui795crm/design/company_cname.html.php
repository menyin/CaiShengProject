<form method="post" action="/company/company.html">
	<input type="hidden" name="act" id="act" value="save_cname" />
	<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">公司名称： </span></td>
					<td class="td2" colspan="2">
						{$com['cname']}
					</td>
				</tr>
				<tr>
					<td class="td1">新公司名称： </td>
					<td class="td2" colspan="2">
						<input type="text"  name="newcname"  size="50" />
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