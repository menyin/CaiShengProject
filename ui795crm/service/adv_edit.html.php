<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
<body>
<div id="content">
	<!--{template nav}-->
	<div id="contentBody" style="visibility: visible;">
		<!--  小贴士 start  -->
		<div id="tips" class="hide" style="width: 256px;display:none">
		<div class="tips" style="">
			<div class="tips-title" style="">小贴士
				<div class="btn_close"></div>
			</div>
			<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
				<div class="title">
					<div data-bind="text: cat">常见问题</div>
				</div>
				<div data-bind="foreach: links">
					<div class="items">
						<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
					</div>
				
					<div class="items">
						<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
					</div>
				</div>
				<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
					<div class="more">
						<div>
							更多： 
							<a href="#" target="_blank">帮助中心</a> &nbsp;
							<a href="#" target="_blank">售后支持</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">合同管理 > 合同列表 > 【{$cname}】合同 > 广告位新增</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="contract.html?act=edit">新建【{$cname}】合同</a></div>
							<span class="gray"><a href="/service/contract.html?act=comlist&op=all&c_id={$c_id}">返回合同列表</a></span>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div class="">
												<form id="postForm" name="postForm" method="post" action="contract.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="contractId" id="contractId" value="{$contract[contractId]}" />
													<input type="hidden" name="c_id" id="c_id" value="{$c_id}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="contract_products" id="contract_products" value="{$contract_products}"/>
													<div class="cell_tb_list">
														<table>
															<tr>
																<td class="tb_title" width="140px">合同模板：</td>
																<td colspan=3><input name="ctype" type="radio" value="1" onclick="change(1);" />单月
																<input name="ctype" type="radio" value="2"  onclick="change(2);"/>季度
																<input name="ctype" type="radio" value="3"  onclick="change(3);"/>半年
																<input name="ctype" type="radio" value="4"  onclick="change(4);"/>整年
																</td>
															</tr>
															<tr style="display:none;">
																<td class="tb_title" width="140px">合同编号：</td>
																<td colspan=3>{$contract['contractId']}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option <!--{if $cityid=0 }--> disabled <!--{/if}--> value=0>全国</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $contractId}--> disabled <!--{/if}-->  <!--{if $region1[region_id]==$cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyu1" name="quyu1" style="width: 160px;"  class="drop">
																		<option <!--{if $quyu1 && $cityid!=1100 && $cityid!=1200 && $cityid!=3100 && $cityid!=5000}--> disabled <!--{/if}--> value="1">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option <!--{if $quyu1 && $cityid!=1100 && $cityid!=1200 && $cityid!=3100 && $cityid!=5000}--> disabled <!--{/if}--> value="{$quyu11[region_id]}" <!--{if $quyu11[region_id]==$quyu1 }-->selected <!--{/if}-->>{$quyu11[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	</lable>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">合同标题：</td>
																<td colspan=3><div class="formMod"><span class="formText"><input type="text" class="text" id="txtTitle" name="txtTitle" placeholder="" value="{$contract[_title]}" size="50" /><input type="hidden" name="region_name_short"  value="{$contract[region_name_short]}"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">开始时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" value="{$contract[startDate]}" onclick="WdatePicker()" required="required" readonly="readonly"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">结束时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="{$contract[endDate]}" onclick="WdatePicker()" required="required" readonly="readonly"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">职位数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_job" name="txtContract_job" placeholder="" value="{$contract[contract_job]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">简历数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_resume" name="txtContract_resume" placeholder="" value="{$contract[contract_resume]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">短信数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_sms" name="txtContract_sms" placeholder="" value="{$contract[contract_sms]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">月下载数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_month" name="txtContract_month" placeholder="" value="{$contract[contract_month]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">广告位：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_ad" name="txtContract_ad" placeholder="" value="{$contract[contract_ad]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">广告天数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_adTime" name="txtContract_adTime" placeholder="" value="{$contract[contract_adTime]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">实际价格：</td>
																<td colspan=3><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_price" name="txtContract_price" placeholder="" value="{$contract[contract_price]}"  required="required"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">是否付款：</td>
																<td><div class="formMod"><span class="formText"><input name="txtIspay" type="radio" value="1" <!--{if $contract[ispay]==1}-->checked<!--{/if}-->/>是
																<input name="txtIspay" type="radio" value="0"  <!--{if $contract[ispay]==0}-->checked<!--{/if}-->/>否</span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">是否发票：</td>
																<td><div class="formMod"><span class="formText"><input name="txtIsinvoice" type="radio" value="1" <!--{if $contract[isinvoice]==1}-->checked<!--{/if}-->/>是
																<input name="txtIsinvoice" type="radio" value="0" <!--{if $contract[isinvoice]==0}-->checked<!--{/if}-->/>否</span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">账期：</td>
																<td colspan=3><div class="formMod addressMod"><span class="formText">
																	<select id='txtContract_dopay' name='txtContract_dopay' style='width:80px' class="drop" >
																		<option value='0' <!--{if ($contract[contract_dopay]=='0')}-->selected<!--{/if}-->>无账期</option>
																		<option value='1' <!--{if ($contract[contract_dopay]=='1')}-->selected<!--{/if}-->>1天</option>
																		<option value='2' <!--{if ($contract[contract_dopay]=='2')}-->selected<!--{/if}-->>2天</option>
																		<option value='3' <!--{if ($contract[contract_dopay]=='3')}-->selected<!--{/if}-->>3天</option>
																		<option value='4' <!--{if ($contract[contract_dopay]=='4')}-->selected<!--{/if}-->>4天</option>
																		<option value='5' <!--{if ($contract[contract_dopay]=='5')}-->selected<!--{/if}-->>5天</option>
																		<option value='6' <!--{if ($contract[contract_dopay]=='6')}-->selected<!--{/if}-->>6天</option>
																		<option value='7' <!--{if ($contract[contract_dopay]=='7')}-->selected<!--{/if}-->>7天</option>
																	</select></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">合同备注：</td>
																<td colspan=3><textarea type="text" class="text1" id="txtContract_remark" name="txtContract_remark" rows="2" message="合同备注" style="margin: 0px; width: 100%;">{$contract[contract_remark]}</textarea></td>
															</tr>
															<tr>
																<td class="tb_title">票据信息：</td>
																<td colspan=3><textarea type="text" class="text1" id="txtContract_other" name="txtContract_other" rows="2" message="票据信息" style="margin: 0px; width: 100%;">{$contract[contract_other]}</textarea></td>
															</tr>
														</table>
													</div>
													<div class="step_submit_btn">
														<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
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
			</div>
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(){
	cityid=$("#cityid").val();
	$("#quyu1").empty();
	var quyuarr='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
		$('#quyu1').append(quyuarr);
		//$("#quyu").val(cityid);
		if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
			$("#quyuid1").css("display","none");
		}else{
			$('#quyuid1').show();
		}
	});
}
function change(i){
	//alert(i);
	switch(i)
	{
		case 1:
			$("#txtTitle").val("单月");
			$("#txtContract_job").val(1);
			$("#txtContract_resume").val(1);
			$("#txtContract_sms").val(1);
			$("#txtContract_month").val(1);
			$("#txtContract_sms").val(1);
			$("#txtContract_month").val(1);
			break;
		case 2:
			$("#txtTitle").val("季度");
			$("#txtContract_job").val(2);
			$("#txtContract_resume").val(2);
			$("#txtContract_sms").val(2);
			$("#txtContract_month").val(2);
			$("#txtContract_sms").val(2);
			$("#txtContract_month").val(2);
			break;
		case 3:
			$("#txtTitle").val("半年");
			$("#txtContract_job").val(3);
			$("#txtContract_resume").val(3);
			$("#txtContract_sms").val(3);
			$("#txtContract_month").val(3);
			$("#txtContract_sms").val(3);
			$("#txtContract_month").val(3);
			break;
		case 4:
			$("#txtTitle").val("整年");
			$("#txtContract_job").val(4);
			$("#txtContract_resume").val(4);
			$("#txtContract_sms").val(4);
			$("#txtContract_month").val(4);
			$("#txtContract_sms").val(4);
			$("#txtContract_month").val(4);
			break;		
	}
}
</script>
<script type="text/javascript">
$('#step1_submit').click(function(){
	if($('#txtStartDate').val() == ''|| typeof($('#txtStartDate').val()) == 'undefined'){
		alert('请选择开始时间！');
		return;
	}
	if($('#txtEndDate').val() == ''||typeof($('#txtEndDate').val()) == 'undefined'){
		alert('请选择结束时间！');
		return;
	}
	if($('#txtContract_job').val() == ''||typeof($('#txtContract_job').val()) == 'undefined'){
		alert('请输入职位数！');
		return;
	}
	if($('#txtContract_resume').val() == ''||typeof($('#txtContract_resume').val()) == 'undefined'){
		alert('请输入简历数！');
		return;
	}
	if($('#txtContract_sms').val() == ''||typeof($('#txtContract_sms').val()) == 'undefined'){
		alert('请输入短信数！');
		return;
	}
	if($('#txtContract_month').val() == ''||typeof($('#txtContract_month').val()) == 'undefined'){
		alert('请输入月下载数！');
		return;
	}
	if($('#txtContract_totle').val() == ''||typeof($('#txtContract_totle').val()) == 'undefined'){
		alert('请输入合同价格！');
		return;
	}
	if($('#txtContract_price').val() == ''||typeof($('#txtContract_price').val()) == 'undefined'){
		alert('请输入实际价格');
		return;
	}
	$('#postForm').submit();
	return false;
});
</script>
</body>
</html>