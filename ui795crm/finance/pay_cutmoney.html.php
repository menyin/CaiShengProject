	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<div class="step_tips" style="display:none;">
					<span>这里放提示信息。</span>
			</div>
		<form id="postForm" name="postForm" method="post">
			<input type="hidden" name="act" id="act" value="cutsave" />
			<input type="hidden" name="pay_id" id="pay_id" value="{$pay['pay_id']}" />
			<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
			<input type="hidden" name="form" id="form" value="{$form}" />
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">用户名：</span></td>
					<td class="td2" colspan="2">{$admin['adminUsername']}</td>
				</tr>
				<tr>
					<td class="td1">公司名： </td>
					<td class="td2" colspan="2">{$admin['adminName']}</td>
				</tr>
				<tr>
					<td class="td1">所属地区： </td>
					<td class="td2" colspan="2">{$admin['adminArea']}</td>
				</tr>
				<tr>
					<td class="td1">付款方式：</td>
					<td class="td2" colspan="2"><input type="radio" id="pay_type" name="pay_type" value="5" checked>扣款</td>
				</tr>
				<tr>
					<td class="td1">总金额：</td>
					<td class="td2" colspan="2"><input type="text" class="text1" name="pay_money" id="pay_money" value="{$pay[pay_money]}" size="20" />   元</td>
				</tr>
				<tr style="display:none;">
					<td class="td1">详细说明：</td>
					<td class="td2" colspan="2"><textarea name="trade_no" cols="50" rows="5">{$pay[trade_no]}</textarea>只允许输入32个字节</td>
				</tr>

			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div class="step_submit_btn">
		<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
	</div>
	</form>