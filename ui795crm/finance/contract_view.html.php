<?exit?>
<div class="mainContent" style="">
	<div class="main_content">
		<div class="layout_main">
			<div class="mod_pool">
				<div class="summary">
					<div class="apply_main">
						<div class="apply">
							<div class="apply_1">
								<form id="postForm" name="postForm" method="post" action="contract.html">
									<input type="hidden" name="act" id="act" value="checksave" />
									<input type="hidden" name="contractId" id="contractId" value="{$contract[contractId]}" />
									<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
									<input type="hidden" name="form" id="form" value="{$form}" />
									<input type="hidden" name="check" id="check" value="{$contract[contract_status]}" />
									<div class="cell_tb_list">
										<!--{if $excu_contracts}-->
										<table width="475" height="113">
											<tr>
												<td height="30" colspan="8" align="center" valign="middle">[<b>{$com[cname]}</b>] 正在执行合同总列表</td>
											</tr>
											<tr>
												<td width="36" height="30" align="center" valign="middle">编号</td>
												<td width="136" height="30" align="center" valign="middle">名称</td>
												<td width="72" height="30" align="center" valign="middle">创建时间</td>
												<td width="76" height="30" align="center" valign="middle">开始时间</td>
												<td width="75" height="30" align="center" valign="middle">结束时间</td>
												<td width="65" height="30" align="center" valign="middle">实际价格</td>
												<td width="108" height="30" align="center" valign="middle">跟单员</td>
											</tr>
											<!--{loop $excu_contracts $excu_contract}-->
											<tr height="30">
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[contractId]}&nbsp;</td>
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[title]}&nbsp;</td>
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[createTime]}&nbsp;</td>
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[startDate]}&nbsp;</td>
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[endDate]}&nbsp;</td>
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[contract_price]}&nbsp;</td>
												<td height="30" align="center" valign="middle" class="tb_title" >{$excu_contract[adminName]}&nbsp;</td>
											</tr>
											<!--{/loop}-->
										</table>
										<!--{/if}-->
										<table width="900" height="323" style="margin-top:5px;">
											<tr>
												<td class="tb_title" width="184">合同编号：</td>
												<td colspan="3">{$contract['contractId']}</td>
												<td class="tb_title" width="226">企业名称：</td>
												<td colspan="3"><a href="http://www.{ROOT_DOMAIN}/com-{$com['_cid']}/" target="_blank">{$com[cname]}</a></td>
											</tr>
											<tr>
												<td class="tb_title">合同标题：</td>
												<td colspan="3">{$contract[title]}</td>
												<td class="tb_title">实际价格：</td>
												<td colspan="3"><font color="red">{$contract[contract_price]}元</font></td>
											</tr>
											<tr>
												<td class="tb_title">开始时间：</td>
												<td colspan="3">{$contract[startDate]}</td>
												<td class="tb_title">结束时间：</td>
												<td colspan="3">{$contract[endDate]}</td>
											</tr>
											<tr>
												<td class="tb_title">职位数：</td>
												<td width="100">{$contract[contract_job]}</td>
												<td width="100">简历数：</td>
												<td width="100">{$contract[contract_resume]}</td>
												<td class="tb_title">短信数：</td>
												<td width="100">{$contract[contract_sms]}</td>
												<td width="100">月下载数：</td>
												<td width="100">{$contract[contract_month]}</td>
											</tr>
											<tr style="display:none;">
												<td class="tb_title">是否付款：</td>
												<td colspan="3"><!--{if $contract[ispay]==1}-->是<!--{else}--><!--{/if}--></td>
												<td class="tb_title">是否发票：</td>
												<td colspan="3"><!--{if $contract[isinvoice]==1}-->是<!--{else}--><!--{/if}--></td>
											</tr>
											<tr style="display:none;">
												<td class="tb_title">账期：</td>
												<td colspan=7>{$contract[contract_dopay]}</td>
											</tr>
											<tr>
												<td class="tb_title">票据信息：</td>
												<td colspan=7>{$contract[contract_other]}</td>
											</tr>
											<!--{if $advInfo}-->
											<!--{loop $advInfos $advInfo}-->
											<tr>
												<td class="tb_title">广告城市{$advInfo[i]}：</td>
												<td colspan=3>{$advInfo[region_name_short]}</td>
												<td>广告位置{$advInfo[i]}：</td>
												<td>{$__advStr[$advInfo[positionId]]}</td>
												<td>广告天数{$advInfo[i]}：</td>
												<td>{$advInfo[week]}天</td>
											</tr>
											<!--{/loop}-->
											<!--{/if}-->
											<tr>
												<td class="tb_title">合同备注：</td>
												<td colspan=7><textarea type="text" class="text1" id="txtContract_remark" name="txtContract_remark" rows="3" message="合同备注" style="margin: 0px; width: 100%;">{$contract[contract_remark]}</textarea></td>
											</tr>
											<tr>
												<td class="tb_title">驳回理由：</td>
												<td colspan=7><textarea type="text" class="text1" id="txt_refuse" name="txt_refuse" rows="3" message="驳回理由" style="margin: 0px; width: 100%;">{$contract[refuse]}</textarea></td>
											</tr>
										</table>
									</div>
									<div class="step_submit_btn">
										<!-- <button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button> -->
										<span style="margin-right:10px;">余额：<font color="red">{$money}</font></span>
										<a class="tg_btn" id="btnSave" onclick="aa(3);">线上支付</a>
										<a class="tg_btn" id="btnSave" onclick="aa(2);">通过</a>
										<a id="btn" onclick="aa(-1);">驳回</a>
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
<script>
function aa (check) {
	$("#check").val(check);
	var r = confirm("确定要此操作?");
	var money='{$money}';
	if(r){
		if(check==2 && money>0){
			var recom = confirm("该企业余额为"+money+"元，您确定要直接通过吗？");
			if(!recom){
				return false;
			}
		}
		if(check==-1){
			txt_refuse=$("#txt_refuse").val();
			if(txt_refuse=='' || typeof(txt_refuse) == 'undefined'){
				alert('驳回理由不能为空！');
				return false;
			}
		}
		$('#postForm').submit();
	}	
}
</script>