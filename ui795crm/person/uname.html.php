<form method="post" action="user.html"  id="postForm4" name="postForm4">
	<input type="hidden" name="act" id="act" value="uname_save" />
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
					<td class="td1">新用户名： </td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" id="txtuname" name="txtuname" />
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
	var txtuname=$('#txtuname').val();
	if(!txtuname){
		alert('用户名不能为空!');
		return;
	}
	$("#postForm4").submitForm({ beforeSubmit: '', data: {}, success: function(data){
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