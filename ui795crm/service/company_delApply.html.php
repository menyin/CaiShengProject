<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm1" name="postForm1" method="post" action="company.html">
									<input type="hidden" name="act" id="act" value="delApplySave" />
									<input type="hidden" name="c_id" id="c_id" value="{$com['_cid']}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title" width="10%">企业名称：</td>
												<td>{$com[cname]}</td>
											</tr>
											<tr>
												<td class="tb_title">删除原因：</td>
												<td >
													<textarea type="text" class="text1" id="txtNote" name="txtNote" cols="55" rows="5" message="请输入删除原因">{$result[note]}</textarea>
													<div style="float:right; width: 300px;">
														<p><a href="javascript:void(0)" onclick="applyContent('重复注册账号')">1、重复注册账号</a></p>
														<p><a href="javascript:void(0)" onclick="applyContent('虚假信息')">2、虚假信息</a></p>
														<p><a href="javascript:void(0)" onclick="applyContent('联系不上')">3、联系不上</a></p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tb_title">&nbsp;</td>
												<td ><button type="button" name="step1_submit" class="step1_submit submit_btn_ok" onClick="check();"></button></td>
											</tr>
										</table>
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
	function check () {
		var txtNote = document.getElementById("txtNote").value;
		txtNote = txtNote.replace(/^\s+|\s+$/g,'');
		if(txtNote == ''||typeof(txtNote) == 'undefined'){
			alert("删除原因不能为空！");
			return;
		}else{
			//$('#postForm1').submit();
			$("#postForm1").submitForm({ beforeSubmit: '', data: {}, success: function(data){
				if(data.status<1){
					$.message(data.msg, { title: "系统提示", icon: "fail" });
				}else{
					$.anchorMsg(data.msg,{icon:"success"});
					window.history.go();
				}

			}, clearForm: false});
		}
	}
	function applyContent(str){
		document.getElementById("txtNote").value = str;
	}

</script>