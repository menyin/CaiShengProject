<?exit?>
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
									<input type="hidden" name="c_id" id="c_id" value="{$c_id}" />
									<input type="hidden" name="clid" id="clid" value="{$clid}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<input type="hidden" name="check" id="check" value="{$licence[isCheck]}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td width="112" class="tb_title">营业执照：</td>
												<td colspan="3"><a href="{$licence[licenceurl]}" target="_blank"><img src="{$licence[licenceurl]}" height="400"></a></td>
											</tr>
											<tr>
												<td class="tb_title">联系人：</td>
												<td width="184">{$licence[comUser]}</td>
												<td width="119">联系电话(手机)：</td>
												<td width="266">{$licence['comPhone']}（{$licence['comMobile']}）</td>
											</tr>
											<tr>
												<td class="tb_title">注册公司名称：</td>
												<td width="184">{$licence[_cname]}</td>
												<td width="119">执照公司名称：</td>
												<td width="266">{$licence['cname']}</td>
											</tr>
											<tr>
												<td class="tb_title">执照编号：</td>
												<td>{$licence[licenceid]}</td>
												<td>执照法人：</td>
												<td>{$licence[licencename]}</td>
											</tr>
											<tr>
												<td class="tb_title">屏蔽理由：</td>
												<td colspan="3" ><textarea type="text" class="text1" id="reply" name="reply" cols="50" rows="6" message="请输入企业简介" style="border:1px solid #ccc;">{$licence[reply]}</textarea></td>
											</tr>
										</table>
									</div>
									<div class="step_submit_btn">
										<!-- <button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button> -->
										<a class="tg_btn" id="btnSave" onclick="aa(1);">通过</a>
										<a id="btn" onclick="aa(-2);">屏蔽</a>
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
function aa (check) {
	$("#check").val(check);
	$('#postForm').submit();
}
</script>