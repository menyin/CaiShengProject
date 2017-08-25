<form  id="postForm" name="postForm" method="post" action="/company/company.html">
	<input type="hidden" name="act" id="act" value="save_psw" />
	<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">用户名： </span></td>
					<td class="td2" colspan="2">
						{$_user['username']}<input type="hidden" class="text1" id="username" name="username" value="{$_user[username]}" />
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
						<input type="text" class="text1" id="newpsw" name="newpsw" value="{$psw}"  minlength="6"  maxlength="16" />
					</td>
				</tr>
				<tr>
					<td class="td1">密码确认： </td>
					<td class="td2" colspan="2">
						<input type="text" class="text1" id="repsw" name="repsw"  minlength="6" maxlength="16" value="{$psw}" />
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
	var username = $('#username').val();
	var password = $('#newpsw').val();
	var password2 =  $('#repsw').val();
	if(password==''||typeof(password)=='undefined'){
		alert('请填写密码!');
		return;
	}
	var patten = new RegExp('^[0-9]+$');
	if (username == password) {
		alert('密码和用户名不能相同!');
		return;
	}
	if (/^(\d)\1+$/.test(password)){ 
		alert('密码不能为同一个数字!');
		return;
	}
	var str = password.replace(/\d/g, function($0, pos) {
		return parseInt($0)-pos;
	});
	if (/^(\d)\1+$/.test(str)){
		alert('密码不能为连续数字!');
		return;
	}
	str = password.replace(/\d/g, function($0, pos) {
		return parseInt($0)+pos;
	});
	if (/^(\d)\1+$/.test(str)){
		alert('密码不能为连续数字!');
		return;
	}
	if(password.length>16 || password.length<6){
		alert('密码只能输入6-16位字符！');
		return;
	}
	if(password2==''||typeof(password2)=='undefined'){
		alert('请填写确认密码!');
		return;
	}
	if(password!=password2){
		alert('两次密码输入不一致!');
		return;
	}

	$('#postForm').submit();
	
}
</script>