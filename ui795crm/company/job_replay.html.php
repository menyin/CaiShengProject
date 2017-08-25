<?exit?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="utf-8">
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js"></script>
<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm" name="postForm" method="post">
									<input type="hidden" name="act" id="act" value="replaysave" />
									<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
									<input type="hidden" name="jid" id="jid" value="{$_jid}" />
									<input type="hidden" name="jrid" id="jrid" value="{$remarks[jrid]}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<input type="hidden" name="oldcheck" id="oldcheck" value="{$job[isCheck]}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td width="112" class="tb_title">职位名称：</td>
												<td >{$job[jname]}</td>
											</tr>
											<tr>
												<td colspan="2">
													<div onclick="change(1);">1.多个岗位不可发布在同一个职位中，多个岗位请重新分开发布。</div>
													<div onclick="change(2);">2.此岗位名称不规范，不存在，请填写有效的岗位名称。</div>
													<div onclick="change(3);">3.该岗位本站不允许发布。</div>
													<div onclick="change(4);">4.发布的职位名称中不允许含有非法字符,请删除字符。</div>
													<div onclick="change(5);">5.此岗位已有发布，不得发布重复岗位，请删除。</div>
													<div onclick="change(6);">6.请填写详细的职位描述，不能为空。</div>
												</td>
											</tr>
											<tr>
												<td class="tb_title">屏蔽理由：</td>
												<td ><textarea type="text" class="text1" id="reply" name="reply" cols="50" rows="6" message="请输入企业简介" style="border:1px solid #ccc;">{$remarks[reply]}</textarea></td>
											</tr>
											<!--{if $remarks[createtime]>0}-->
											<tr>
												<td class="tb_title">修改时间：</td>
												<td >{$remarks[_createtime]}</textarea></td>
											</tr>
											<!--{/if}-->
										</table>
									</div>
									<div class="step_submit_btn">
										<!-- <button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button> -->
										<!-- <a class="tg_btn" id="btnSave" onclick="aa(1);">通过</a> -->
										<a id="btn" onclick="aa(2);">屏蔽</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
function change(i){
	switch(i)
	{
		case 1:
			$("#reply").val("多个岗位不可发布在同一个职位中，多个岗位请重新分开发布。");
			break;
		case 2:
			$("#reply").val("此岗位名称不规范，不存在，请填写有效的岗位名称。");
			break;
		case 3:
			$("#reply").val("该岗位本站不允许发布。");
			break;
		case 4:
			$("#reply").val("发布的职位名称中不允许含有非法字符,请删除字符。");
			break;
		case 5:
			$("#reply").val("此岗位已有发布，不得发布重复岗位，请删除。");
			break;
		case 6:
			$("#reply").val("请填写详细的职位描述，不能为空。");
			break;
	}
}
function aa (check) {
	$("#check").val(check);
	var reply = $('#reply').val(),
		str = reply.replace(/(^\s*)|(\s*$)/g, "");
	if(str==''){
		alert('请填屏蔽理由');
		return;
	}
	$('#postForm').submit();
}
</script>