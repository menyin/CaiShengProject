<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm" name="postForm" method="post">
									<input type="hidden" name="act" id="act" value="followSave" />
									<input type="hidden" name="c_id" id="c_id" value="{$com['cid']}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title" width="10%">企业名称：</td>
												<td colspan="3">{$com[cname]}</td>
												<!-- <td class="tb_title" width="10%">会员类型：</td>
												<td width="40%">
													<select id="Type597" name="Type597" style="width:80px">
														{loop $__type597Str $key $value}
															<option value='{$key}'>{$value}</option>
														{/loop}
													</select>
												</td> -->
											</tr>
											<tr>
												<td class="tb_title">回访时间：</td>
												<td><input type="text" class="text1" name="follow[nextTime]" placeholder="" value="" onclick="WdatePicker({minDate:'%y-%M-%d',dateFmt:'yyyy-MM-dd'})"></td>
												<td width="40%" class="tb_title">回访目的：</td>
												<td><input type="text" class="text1" name="follow[nextText]" placeholder="" value="{$follow[nextText]}"/></td>
											</tr>
											<tr>
												<td class="tb_title">跟进记录：</td>
												<td ><textarea type="text" class="text1" id="follow[followText]" name="follow[followText]" cols="45" rows="3" message="请输入企业简介">{$follow[followText]}</textarea></td>
												<td colspan=2>　<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button></td>
											</tr>
										</table>
									</div>
								</form>
							</div>
						</div>
						<iframe src="/service/company.php?act=followView&c_id={$com[cid]}" width="100%" height="400" frameborder=0></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>