<form id="postForm" name="postForm" method="post" action="/api/web/admin.api">
	<input type="hidden" name="act" id="act" value="save_resume_note" />
	<input type="hidden" name="r_id" id="r_id" value="{$_rid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<table width="400">
				<tr>
					<td class="td1"><span class="step_url_title">用户名： </span></td>
					<td class="td2" colspan="16">
						{$_user['username']}<input type="hidden" class="text1" id="username" name="username" value="{$_user[username]}" />
					</td>
				</tr>
				<tr>
					<td class="td1"><span class="step_url_title">姓名： </span></td>
					<td class="td2" colspan="16">
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
					<td class="td1">类型： </td>
					<td class="td2" colspan="16">
						<input type="radio" name="type" value="1" id="type1"><label for="type1">同意</label>
						<input type="radio" name="type" value="2" id="type2"><label for="type2">不同意</label>
						<input type="radio" name="type" value="3" id="type3"><label for="type3">待定</label>
						<input type="radio" name="type" value="4" id="type4"><label for="type4">问题简历</label>
					</td>
				</tr>
				<tr>
					<td class="td1">内容： </td>
					<td class="td2" colspan="16">
						<textarea name="content" id="resumeContent" cols="40" rows="10"></textarea>
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
	var resumeType = $("input[type=radio]:checked").val(),
		content = $('#resumeContent').val();

	if(typeof(resumeType)=='undefined'||resumeType=='undefined'){
		alert('请选择类型!');
		return;
	}
	if(content==''){
		alert('请填写内容!');
		return;
	}

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