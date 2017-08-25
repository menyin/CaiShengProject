<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
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
					<div class="m_bg">客服管理 >  <a href="company.html?act=mylist&ordertype=3&query=">我的企业</a>  >  <a href="contract.html?act=comlist&op=all&c_id={$_cid}">公司：[{$com[cname]}] 合同总列表</a> > 合同：<a href="contract.html?act=comlist&op=all&c_id={$_cid}">[{$contract[title]}]</a> > 合同续费</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon"><a href="contract.html?act=edit">新建【{$cname}】合同</a></div> -->
							<div class="btn icon-9 icon"><a href="contract.html?act=comlist&op=all&c_id={$_cid}">返回合同:[{$contract[title]}]列表</a></div>
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
													<input type="hidden" name="act" id="act" value="xfsave" />
													<input type="hidden" name="parentId" id="parentId" value="{$parentId}" />
													<input type="hidden" name="contractId" id="contractId" value="{$contract[contractId]}" />
													<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="submitStatus" id="submitStatus" value="{$submitStatus}" />
													<input type="hidden" name="contract_products" id="contract_products" value="{$contract_products}"/>
													<input type="hidden" value="{$contract[cityId]}" name="city_id">
													<div class="cell_tb_list">
														<table>
															<tr style="display:none;">
																<td class="tb_title" width="140px">合同模板：</td>
																<td colspan=3>
																	<input name="ctype" type="radio" value="1" onclick="change(1);" />普通单月
																	<input name="ctype" type="radio" value="2" onclick="change(2);"/>普通季度
																	<input name="ctype" type="radio" value="3" onclick="change(3);"/>普通半年
																	<input name="ctype" type="radio" value="4" onclick="change(4);"/>普通全年
																	<input name="ctype" type="radio" value="9" onclick="change(9);"/>钻石全年
																	<input name="ctype" type="radio" value="5" onclick="change(5);"/>单月会员
																	<input name="ctype" type="radio" value="6" onclick="change(6);"/>季度会员
																	<input name="ctype" type="radio" value="7" onclick="change(7);"/>半年会员
																	<input name="ctype" type="radio" value="8" onclick="change(8);"/>全年会员
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
																		<option <!--{if $cityid==0 || $contract[contractId]}--> disabled selected<!--{/if}--> value=0>全国</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $contract[contractId] || $parentId}--> disabled <!--{/if}-->  <!--{if $region1[region_id]==$cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
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
																<td colspan=3><div class="formMod"><span class="formText"><input type="text" class="text" id="txtTitle" name="txtTitle" placeholder="" value="{$contract[_title]}" size="50" readonly="readonly" style="color:gray;" /><input type="hidden" name="region_name_short"  value="{$contract[region_name_short]}" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">开始时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" <!--{if {$contract[endDate]}<=$date}--> onclick="WdatePicker({startDate:'{$contract[startDate]}',dateFmt:'yyyy-MM-dd',minDate: '{$date}'})"  value="{$date}"  <!--{else}-->  required="required"  style="color:gray;" value="{$contract[endDate]}"  <!--{/if}-->/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">结束时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="" onclick="WdatePicker({minDate: '<!--{if {$contract[endDate]}<=$date}-->{$date}<!--{else}-->{$contract[endDate]}<!--{/if}-->'})" required="required" style="color:gray;"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">职位数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_job" name="txtContract_job" placeholder="" value="{$contract[contract_job]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" readonly="readonly" style="color:gray;"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">简历数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_resume" name="txtContract_resume" placeholder="" value="{$contract[contract_resume]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" readonly="readonly" style="color:gray;"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">短信数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_sms" name="txtContract_sms" placeholder="" value="{$contract[contract_sms]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" readonly="readonly" style="color:gray;"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">月下载数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_month" name="txtContract_month" placeholder="" value="{$contract[contract_month]}" required="required" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" readonly="readonly" style="color:gray;"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">付款方式：</td>
																<td><div class="formMod addressMod"><span class="formText">
																	<select name='payment' id="payment" class="drop" >
																		<option value="">请选择</option>
																		<!--{loop $__paymentStr $key $value}-->
																			<option value='{$key}' <!--{if $key==$contract[payment]}-->selected="" <!--{/if}-->>{$value}</option>
																		<!--{/loop}-->
																	</select>户名：<input type="text" class="text" id="account_name" name="account_name" placeholder="" value="{$contract[account_name]}" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
																<td class="tb_title">付款金额：</td>
																<td><div class="formMod addressMod"><span class="formText"><input type="text" class="text" id="txtContract_price" name="txtContract_price" placeholder="" value="{$contract[contract_price]}"  required="required"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">汇款时间：</td>
																<td colspan="3"><div class="formMod addressMod"><span class="formText">
																	<input name="receipt" type="radio" value="1" id="right103" checked="" /><label for="right103"><input type="text" class="text" id="transferTime" name="transferTime" placeholder="" value="<!--{if $contract[transferTime]}-->{$contract[transferTime]}<!--{else}-->{$dateS}<!--{/if}-->"/>(格式：{$dateS})
																	<input name="receipt" type="radio" value="0" id="right102"/><label for="right102">未付款</label>
																	</span>
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
													<div class="apply_btn_next">
														<div class="apply_btn_bg">
															<a class="apply_1_next" onclick="sub(1);">完成</a>
														</div>
														<div class="apply_btn_bg" style="display:none;">
															<a class="apply_1_next" onclick="sub(2);" style="border: 1px solid #ccc;background:#f2f2f2;border-radius: 5px;">有广告位会员（下一步）</a>
														</div>
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
	switch(i)
	{
		case 1:
			$("#txtTitle").val("普通单月");
			$("#txtContract_job").val(10);
			$("#txtContract_resume").val(100);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(100);
			break;
		case 2:
			$("#txtTitle").val("普通季度");
			$("#txtContract_job").val(10);
			$("#txtContract_resume").val(300);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(300);
			break;
		case 3:
			$("#txtTitle").val("普通半年");
			$("#txtContract_job").val(10);
			$("#txtContract_resume").val(600);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(600);
			break;
		case 4:
			$("#txtTitle").val("普通全年");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(1200);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(1200);
			break;
		case 9:
			$("#txtTitle").val("钻石全年");
			$("#txtContract_job").val(100);
			$("#txtContract_resume").val(4000);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(3000);
			break;
		case 5:
			$("#txtTitle").val("单月会员");
			$("#txtContract_job").val(10);
			$("#txtContract_resume").val(200);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(100);
			break;
		case 6:
			$("#txtTitle").val("季度会员");
			$("#txtContract_job").val(20);
			$("#txtContract_resume").val(800);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(300);
			break;
		case 7:
			$("#txtTitle").val("半年会员");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(2000);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(2000);
			break;
		case 8:
			$("#txtTitle").val("全年会员");
			$("#txtContract_job").val(100);
			$("#txtContract_resume").val(4000);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(3000);
			break;
	}
}
</script>
<script type="text/javascript">
function sub (status) {
	$("#submitStatus").val(status);
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
	if($('#payment').val() == ''||typeof($('#payment').val()) == 'undefined'){
		alert('请选择付款方式！');
		return;
	}
	if($('#txtContract_price').val() == ''||typeof($('#txtContract_price').val()) == 'undefined'){
		alert('请输入付款金额！');
		return;
	}
	$('#postForm').submit();
	return false;
}
</script>
</body>
</html>