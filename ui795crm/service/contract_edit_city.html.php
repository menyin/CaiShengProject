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
					<div class="m_bg">客服管理 > <a href="company.html?act=mylist&ordertype=3&query=">我的企业</a>  > <a href="contract.html?act=comlist&op=all&c_id={$_cid}"> 公司：[{$com[cname]}] 合同总列表</a> > 新建公司：[{$cname}] 合同</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon"><a href="contract.html?act=comlist&op=all&c_id={$_cid}">返回公司：[{$com[cname]}] 合同总列表</a></div>
							<!-- <span class="gray"><a href="/service/contract.html?act=comlist&op=all&c_id={$c_id}">返回合同列表</a></span> -->
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
													<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="submitStatus" id="submitStatus" value="{$submitStatus}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="contract_products" id="contract_products" value="{$contract_products}"/>
													<div class="cell_tb_list">
														<table>
															<tr <!--{if $contract[contractId]}--> style="display:none;"<!--{/if}-->>
																<td class="tb_title" width="140px">合同模板：</td>
																<td colspan=3>
																	<input name="ctype" type="radio" value="12" onclick="change(12);" id="right12"/><label for="right12">一周试用会员</label>	
																	<input name="ctype" type="radio" value="14" onclick="change(14);" id="right14" /><label for="right14">单月会员</label>
																	<input name="ctype" type="radio" value="15" onclick="change(15);" id="right15"/><label for="right15">两月会员</label>
																	<input name="ctype" type="radio" value="16" onclick="change(16);" id="right16"/><label for="right16">季度会员</label>
																	<input name="ctype" type="radio" value="11" onclick="change(11);" id="right11" /><label for="right11">全年100会员</label>
																	<div style="height:10px;"></div>
																	<input name="ctype" type="radio" value="1" onclick="change(1);" id="right1" /><label for="right1">特惠全年会员</label>
																	<input name="ctype" type="radio" value="2" onclick="change(2);" id="right2"/><label for="right2">普通全年会员</label>
																	<input name="ctype" type="radio" value="3" onclick="change(3);" id="right3"/><label for="right3">钻石全年会员</label>【厦门、泉州】
																	<div style="height:10px;"></div>
																	<input name="ctype" type="radio" value="4" onclick="change(4);" id="right4"/><label for="right4">特惠全年会员</label>
																	<input name="ctype" type="radio" value="5" onclick="change(5);" id="right5"/><label for="right5">普通全年会员</label>
																	<input name="ctype" type="radio" value="6" onclick="change(6);" id="right6"/><label for="right6">钻石全年会员</label>【南平、北京】
																</td>
															</tr>
															<tr <!--{if !$contract[contractId]}--> style="display:none;"<!--{/if}-->>
																<td class="tb_title" width="140px">合同编号：</td>
																<td colspan=3>{$contract['contractId']}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option value="0" <!--{if $cityid==0}--> selected <!--{/if}--> >全国</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $region1[region_id]==$cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyu1" name="quyu1" style="width: 160px;"  class="drop">
																		<option value="1">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option value="{$quyu11[region_id]}" <!--{if $quyu11[region_id]==$quyu1 }-->selected <!--{/if}-->>{$quyu11[region_name_full]}</option>
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
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" value="<!--{if $contract[startDate]}-->{$contract[startDate]}<!--{else}-->{$date}<!--{/if}-->" onclick="WdatePicker({startDate:'{$contract[startDate]}',dateFmt:'yyyy-MM-dd',minDate: '{$date}'})" required="required"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">结束时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="<!--{if $contract[endDate]}-->{$contract[endDate]}<!--{else}-->{$nextTime}<!--{/if}-->" onclick="WdatePicker({startDate:'{$contract[endDate]}',dateFmt:'yyyy-MM-dd',minDate: '{$date}'})" required="required"/></span>
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
																<td class="tb_title">实际价格：</td>
																<td colspan="3"><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_price" name="txtContract_price" placeholder="" value="{$contract[contract_price]}"  required="required"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
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
																<td><div class="formMod addressMod"><span class="formText"><input type="text" class="text" id="amount_money" name="amount_money" placeholder="" value="{$contract[amount_money]}"  required="required"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
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
													<!--{if $contract[contractId]}-->
													<div class="apply_btn_next">
														<div class="apply_btn_bg">
															<a class="apply_1_next" onclick="sub(1);">完成</a>
														</div>
													</div>
													<!--{else}-->
													<div class="apply_btn_next">
														<div class="apply_btn_bg">
															<a class="apply_1_next" onclick="sub(1);">完成</a>
														</div>
														<div class="apply_btn_bg" style="display:none;">
															<a class="apply_1_next" onclick="sub(2);" style="border: 1px solid #ccc;background:#f2f2f2;border-radius: 5px;">有广告位会员（下一步）</a>
														</div>
													</div>
													<!--{/if}-->
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
	},'json');
}
function change(i){
	switch(i)
	{
		case 1:
			$("#txtTitle").val("特惠全年会员");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(300);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(300);
			$("#txtContract_price").val(360);
			$("#txtEndDate").val('{$nextTime2}');
			break;
		case 2:
			$("#txtTitle").val("普通全年会员");
			$("#txtContract_job").val(60);
			$("#txtContract_resume").val(1200);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(1200);
			$("#txtContract_price").val(600);
			$("#txtEndDate").val('{$nextTime2}');
			break;
		case 3:
			$("#txtTitle").val("钻石全年会员");
			$("#txtContract_job").val(100);
			$("#txtContract_resume").val(4000);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(4000);
			$("#txtContract_price").val(1000);
			$("#txtEndDate").val('{$nextTime2}');
			break;
		case 4:
			$("#txtTitle").val("特惠全年会员");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(300);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(300);
			$("#txtContract_price").val(360);
			$("#txtEndDate").val('{$nextTime2}');
			break;
		case 5:
			$("#txtTitle").val("普通全年会员");
			$("#txtContract_job").val(60);
			$("#txtContract_resume").val(1000);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(1000);
			$("#txtContract_price").val(500);
			$("#txtEndDate").val('{$nextTime2}');
			break;
		case 6:
			$("#txtTitle").val("钻石全年会员");
			$("#txtContract_job").val(100);
			$("#txtContract_resume").val(4000);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(4000);
			$("#txtContract_price").val(800);
			$("#txtEndDate").val('{$nextTime2}');
			break;
		case 11:
			$("#txtTitle").val("全年100会员");
			$("#txtContract_job").val(10);
			$("#txtContract_resume").val(100);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(100);
			$("#txtContract_price").val(100);
			$("#txtEndDate").val('{$nextTime}');
			break;
		case 12:
			$("#txtTitle").val("一周试用会员 ");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(50);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(50);
			$("#txtContract_price").val(0);
			$("#txtEndDate").val('{$nextTime7}');
			break;
		case 14:
			$("#txtTitle").val("单月会员");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(100);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(100);
			$("#txtContract_price").val('');
			$("#txtEndDate").val('{$nextTime30}');
			break;
		case 15:
			$("#txtTitle").val("两月会员 ");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(200);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(200);
			$("#txtContract_price").val('');
			$("#txtEndDate").val('{$nextTime60}');
			break;
		case 16:
			$("#txtTitle").val("季度会员 ");
			$("#txtContract_job").val(30);
			$("#txtContract_resume").val(300);
			$("#txtContract_sms").val(0);
			$("#txtContract_month").val(300);
			$("#txtContract_price").val('');
			$("#txtEndDate").val('{$nextTime90}');
			break;
	}
}
</script>
<script type="text/javascript">
function sub (status) {
	$("#submitStatus").val(status);
	cityid=$("#cityid").val();
	quyu1=$('#quyu1').val()
	if(cityid==0){
		alert('请选择城市！');
		return;
	}
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000){

	}else if((cityid!=1100 && cityid!=1200 && cityid!=3100 && cityid==5000 )|| quyu1=='' ){
		alert('请选择城市！');
		return;
	}
	if($('#txtTitle').val() == ''|| typeof($('#txtTitle').val()) == 'undefined'){
		alert('请输入标题！');
		return;
	}
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
	/*if($('#txtContract_totle').val() == ''||typeof($('#txtContract_totle').val()) == 'undefined'){
		alert('请输入合同价格！');
		return;
	}*/
	if($('#txtContract_price').val() == ''||typeof($('#txtContract_price').val()) == 'undefined'){
		alert('请输入实际价格！');
		return;
	}
	if($('#payment').val() == ''||typeof($('#payment').val()) == 'undefined'){
		alert('请选择付款方式！');
		return;
	}
	if($('#amount_money').val() == ''||typeof($('#amount_money').val()) == 'undefined'){
		alert('请输入付款金额！');
		return;
	}
	
	$('#postForm').submit();
	return false;
}
</script>
</body>
</html>