<form method="post" action="user.html"  id="postForm3" name="postForm">
	<input type="hidden" name="act" id="act" value="cert_mobile_save" />
	<input type="hidden" name="r_id" id="r_id" value="{$_rid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">用户名： </span></td>
					<td class="td2" colspan="2">
						{$_user['username']}
					</td>
				</tr>
				<tr>
					<td class="td1"><span class="step_url_title">真实姓名： </span></td>
					<td class="td2" colspan="2">
						{$_per['realname']}
					</td>
				</tr>
				<!-- <tr>
					<td class="td1"><span class="step_url_title">原密码： </span></td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" name="oldpsw" />
					</td>
				</tr> -->
				<tr>
					<td class="td1">手机号码： </td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" id="txtmobile" name="txtmobile" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"  maxlength="11" />
					</td>
				</tr>
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div class="step_submit_btn">
		<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit" onClick="check();"></button>
	</div>
</form>
<script type="text/javascript">
function check () {
	var txtmobile=$('#txtmobile').val();
	var phone_pattern = /^[1]\d{10}$/;
	if(txtmobile.length!=11){
		alert('联系手机位数不对!');
		return;
	}
	if(!phone_pattern.exec(txtmobile)){
		alert('联系手机格式不正确!');
		return;
	}
	$("#postForm3").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			$.message(data.msg, { title: "系统提示", icon: "fail" });
			//window.location.href='pay.html?act=cutedit';
			return;
		}else{
			$.anchorMsg(data.msg,{icon:"success"});
			window.location.href='/finance/pay.html?act=list&op=all';
		}

	}, clearForm: false});
}
</script>