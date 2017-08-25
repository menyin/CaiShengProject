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
											<tr style="display:none;">
												<td class="tb_title" width="140px">企业ID：</td>
												<td colspan="3">{$com[cid]}</td>
												<!-- <td class="tb_title" width="140px">用户名：</td>
												<td><input type="text" class="text1" name="com[username]" placeholder="请使用字母或数字" value="{$com[username]}"/></td> -->
											</tr>
											<!--{if ($c_id==0)}-->
											<tr>
												<td class="tb_title">密码：</td>
												<td colspan=3><input type="text" class="text1" name="com[password]" placeholder="请使用字母或数字" value=""/></td>
											</tr>
											<!--{/if}-->
											<tr>
												<td class="tb_title">企业名称：</td>
												<td><input type="text" class="text1" name="com[cname]" placeholder="例子：597人才网" value="{$com[cname]}"/></td>
												<td class="tb_title">营业执照：</td>
												<td><input type="text" class="text1" name="com[licenceNo]" placeholder="15位数字" value="{$com[licenceNo]}"/></td>
											</tr>
											<tr>
												<td class="tb_title">行业类别：</td>
												<td>
													<input type="hidden" id="comIndustryId" name="com[comIndustryId]" value="{$com[comIndustryId]}">
													<input type="text" class="text1" id="comIndustry" name="com[comIndustry]" value="{$com[comIndustry]}" title="{$com[comIndustry]}" readonly="true" onclick="Boxy.load('/subpage_industry.htm',{title: '行业类别选择'});">
													<script language="javascript">
														var industryOdjid='comIndustryId'; 
														var industryOdjstr='comIndustry';
														var industryOdjnumber=3;//数量，如果唯一值，则立即返回
													</script>
												</td>
												<td class="tb_title">所在区域：</td>
												<td>
													<input type="hidden" id="comCityId" name="com[comCityId]" value="{$com[comCityId]}" />
													<input type="text" class="text1" id="comCity" name="com[comCity]" value="{$com[comCity]}" title="{$com[comCity]}" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true"> 
													<script language="javascript">
														var areaOdjid='comCityId'; 
														var areaOdjstr='comCity';
														var areaOdjProvice=0;//是否省可选
														var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
														var areaOdjnumber=1;//数量，如果唯一值，则立即返回
													</script>
												</td>
											</tr>
											<tr>
												<td class="tb_title">招聘联系人：</td>
												<td><input type="text" class="text1" name="com[comUser]" placeholder="" value="{$com[comUser]}"/></td>
												<td class="tb_title">招聘联系电话：</td>
												<td><input type="text" class="text1" name="com[comPhone]" placeholder="" value="{$com[comPhone]}"/></td>
											</tr>
											<tr>
												<td class="tb_title">企业简介：</td>
												<td colspan=3><textarea type="text" class="text1" id="comInfo" name="com[comInfo]" cols="68" rows="6" message="请输入企业简介">{$com[comInfo]}</textarea></td>
											</tr>
										</table>
									</div>
									<div class="step_submit_btn">
										<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
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