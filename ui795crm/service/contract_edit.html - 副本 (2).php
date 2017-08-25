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
					<div class="m_bg">合同管理 > 合同列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="contract.html?act=edit">新建合同</a></div>
							<span class="gray"></span>
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
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="contract_products" id="contract_products" value="{$contract_products}"/>
													<div class="cell_tb_list">
														<table>
															<tr>
																<td class="tb_title" width="140px">合同编号：</td>
																<td colspan=3>{$contract['contractId']}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option <!--{if $cityid }--> disabled <!--{/if}--> value="" >省份</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $cityid }--> disabled <!--{/if}-->  <!--{if $region1[region_id]==$cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
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
																<td class="tb_title" width="140px">企业名称：</td>
																<td colspan=3><div class="formMod"><span class="formText"><input type="text" class="text" name="c_name" id="c_name" placeholder="" value="{$com['cname']}"  size="42"/><input type='hidden' id='c_id' name='c_id' value="{$contract['cid']}"></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr height="200" style="display:none;">
																<td class="tb_title" >产品选择：</br><a onclick="Boxy.iframe('contract.html?act=product',{title: '产品选择',width:900,height:470});">添加产品</a></td>
																<td colspan=3>
																	<table id="product_list" style="word-break:break-all;">
																		<thead>
																			<tr class="table_header" >
																				<th style="width:80;">产品编号</th>
																				<th style="width:80;">产品类型</th>
																				<th >产品名称</th>
																				<th style="width:80;">产品单价</th>
																				<th style="width:80;">操作</th>
																			</tr>
																		</thead>
																		<tbody></tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td class="tb_title">开始时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="txtStartDate" placeholder="" value="{$contract[startDate]}" onclick="WdatePicker()" required="required" readonly="readonly"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">结束时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="txtEndDate" placeholder="" value="{$contract[endDate]}" onclick="WdatePicker()" required="required" readonly="readonly"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">职位数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_job" name="txtContract_job" placeholder="" value="{$contract[contract_job]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">简历数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_resume" name="txtContract_resume" placeholder="" value="{$contract[contract_resume]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">短信数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_sms" name="txtContract_sms" placeholder="" value="{$contract[contract_sms]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">月下载数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_month" name="txtContract_month" placeholder="" value="{$contract[contract_month]}" required="required" /></span>
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
																<td class="tb_title">广告周数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_adTime" name="txtContract_adTime" placeholder="" value="{$contract[contract_adTime]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">合同总价：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_totle" name="txtContract_totle" placeholder="" value="{$contract[contract_totle]}" required="required" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">实际价格：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtContract_price" name="txtContract_price" placeholder="" value="{$contract[contract_price]}"  required="required"/></span>
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
													<!--{if ($act=='edit')}-->
													<div class="step_submit_btn">
														<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button>
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
		$("#quyu").val(cityid);
		if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
			$("#quyuid1").css("display","none");
		}else{
			$('#quyuid1').show();
		}
	});
}
</script>
<script type="text/javascript">
		var frmValid=$("#postForm").validate({
			rules:{
				cityid:{required:true},
				c_id:{required:true}
			},
			messages:{
				cityid:{required:'请选择站点<span class="tipArr"></span>'},
				c_id:{required:'请选择企业<span class="tipArr"></span>'}
			},
			errorClasses:{
				cityid:{required:'tipLayErr tipw120'},
				c_id:{required:'tipLayErr tipw120'}
			},
			tips:{
				//loupan:'楼盘名称：2-30个字符<span class="tipArr"></span>'
			},
			tipClasses:{
				c_id:'tipLayTxt tipw150',
				contactCount:'tipLayTxt tipw150'
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.closest('div.formMod').find('.tipPos .tipLay').append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});
		$(function() {
			$('#c_name').autocomplete("/company.html", {
				max: 12,		//列表里的条目数
				minChars: 1,	//自动完成激活之前填入的最小字符
				width:288,		//提示的宽度，溢出隐藏
				//scrollHeight:120,		//提示的高度，溢出显示滚动条
				matchContains: true,	//包含匹配，就是data参数里的数据，是否只要包含文本框里的数据就显示
				scroll:false,
				dataType:"json",
				autoFill: false,		//自动填充
				extraParams:{
					act:'autoComplete',
					key:function(){
						return escape($.trim($("#c_name").val()));
					}
				},
				formatItem: function(row) {
					return '<span class="autTempL">'+row.item+'</span>';
				},
				formatMatch: function(row) {
					return row.item;
				},
				formatResult: function(row) {
					return row.item;
				}
			}).result(function(event, item){
				$("#cname").unbind('keydown');
				$("#c_name").val(item.item);
				$("#c_id").val(item.cid);
			});
		});	
</script>
<script type="text/javascript">
$('#step1_submit').click(function(){
	$('#postForm').submit();
	return false;
});
</script>
</body>
</html>