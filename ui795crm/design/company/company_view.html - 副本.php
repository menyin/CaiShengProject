<?exit?>
<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<div class="">
								<form id="postForm" name="postForm" method="post">
									<input type="hidden" name="act" id="act" value="save" />
									<input type="hidden" name="c_id" id="c_id" value="{$com['cid']}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<div class="cell_tb_list">
										<table style="margin-top: 0px;">
											<tr>
												<td class="tb_title">企业ID：</td>
												<td>{$com[cid]}</td>
											</tr>
											<tr>
												<td class="tb_title">企业名称：</td>
												<td>{$com[cname]} ({$com[username]})</td>
											</tr>
											<tr>
												<td class="tb_title">营业执照：</td>
												<td>{$com[licenceNo]}</td>
											</tr>
											<tr>
												<td class="tb_title">行业类别：</td>
												<td>{$com[comIndustry]}</td>
											</tr>
											<tr>
												<td class="tb_title">所在区域：</td>
												<td>{$com[comCity]}</td>
											</tr>
											<tr>
												<td class="tb_title">招聘联系人：</td>
												<td>{$com[comUser]} ({$com[comPhone]})</td>
											</tr>
											<tr>
												<td class="tb_title">企业简介：</td>
												<td><textarea type="text" class="text1" id="comInfo" name="com[comInfo]" cols="150"  readonly="readonly" rows="6">{$com[comInfo]}</textarea></td>
												<!-- <td><p style=" max-width:714px;">{$com[comInfo]}</p></td> -->
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
</div>