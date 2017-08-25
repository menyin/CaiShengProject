<form id="postForm" name="postForm" method="post" action="contract.html">
	<input type="hidden" name="act" id="act" value="payinfo_save" />
	<input type="hidden" name="contractId" id="contractId" value="{$contract[contractId]}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<table>
		<tr>
			<td class="tb_title">票据信息：</td>
			<td colspan=3><textarea type="text" class="text1" id="contract[contract_other]" name="contract[contract_other]" rows="5" message="票据信息" style="margin: 0px; width: 300px;">{$contract[contract_other]}</textarea></td>
		</tr>
	</table>
	<div class="step_submit_btn">
		<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
	</div>
</form>