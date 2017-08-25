<form id="postForm" name="postForm" method="post" action="/api/web/admin.api">
	<input type="hidden" name="act" id="act" value="save_note" />
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
					<td class="td1">备注:</td>
					<td class="td2" colspan="2">
						<textarea type="text" class="text1" id="txtNote" name="txtNote" cols="55" rows="5" message="请输入备注">{$res[note]}</textarea>
					</td>
				</tr>
				<!--{if $res[noteTime]>0}-->
					<tr>
						<td class="td1">备注时间:</td>
						<td class="td2" colspan="2">{$res[noteTime]}</td>
					</tr>
				<!--{/if}-->
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div class="step_submit_btn">
		<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" onClick="check();"></button>
	</div>
</form>
<script type="text/javascript">
function check () {
	/*
	if($('#txtNote').val() == ''||typeof($('#txtNote').val()) == 'undefined'){
		alert("备注不能为空！");
		return;
	}*/
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			$.message(data.msg, { title: "系统提示", icon: "fail" });
			window.history.go();
			return;
		}else{
			$.anchorMsg(data.msg,{icon:"success"});
			window.history.go();
		}

	}, clearForm: false});
}
</script>