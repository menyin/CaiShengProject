<form method="post" action="/company/company.html">
	<input type="hidden" name="act" id="act" value="save_lianxi" />
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
					<td class="td1">与本站联系人： </td>
					<td class="td2" colspan="2">
						<input type="text"  name="User597" value="{$com['User597']}"  size="20" />
					</td>
				</tr>
				<tr>
					<td class="td1">与本站联系电话： </td>
					<td class="td2" colspan="2">
						<input type="text"  name="Phone597" value="{$com['Phone597']}"  size="20" />
					</td>
				</tr>
				<tr>
					<td class="td1">与本站联系手机： </td>
					<td class="td2" colspan="2">
						<input type="text"  name="Mobile597" value="{$com['Mobile597']}"  size="20" />
					</td>
				</tr>
				<tr>
					<td class="td1">与本站QQ： </td>
					<td class="td2" colspan="2">
						<input type="text"  name="QQ597" value="{$com['QQ597']}"  size="20" />
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