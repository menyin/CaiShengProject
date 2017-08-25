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
					<div class="m_bg">续约管理 > 修改绩效</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="sale_record.html?act=add">新增绩效</a></div>
							<!-- <span class="gray"><a href="/xuyue/contract.html?act=comlist&op=all&c_id={$c_id}">返回合同列表</a></span> -->
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
												<form id="postForm" name="postForm" method="post" action="sale_record.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="id" id="id" value="{$id}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140">绩效ID：</td>
																<td colspan="3" >{$result[id]}</td>
															</tr>
															<tr>
																<td class="tb_title">企业名称：</td>
																<td width="592" ><span class="formText" id="contract1"><input id="c_id" type="hidden" name="c_id" value="{$result[_cid]}"><input type="text" class="text" size="50" readonly="" value="{$result[cname]}"  name="cname" id="cname" /> <!--{if $result[_cid]}-->(不可修改)<!--{/if}--></span><span style="line-height: 30px;margin-left: 5px;"></span>
																	<div class="clear"></div></div></td>
																<td width="143" >所属站点：</td>
																<td width="469" ><span class="formText"><input type="text" class="text" size="50" value="{$result[web_site]}" name="web_site" id="web_site" /></span><span style="line-height: 30px;margin-left: 5px;"></span>
																<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">套餐类型：</td>
																<td ><div class="formMod"><span class="formText" id="contract2"><input type="text" class="text" id="contract_title" name="contract_title" placeholder="" value="{$result[contract_title]}" size="50" /></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td >新旧单：</td>
																<td >
																	<input type="radio"  name="NewOld" value="1" id="right1" <!--{if $result[NewOld]==1}-->checked<!--{/if}-->/><label for="right1">新单</label>&nbsp;&nbsp;
																	<input type="radio"  name="NewOld" value="0" id="right11" <!--{if $result[NewOld]==0}-->checked<!--{/if}-->/><label for="right11">旧单</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title">付款方式：</td>
																<td ><div class="formMod addressMod"><span class="formText">
																	<select name='payment' id="payment" class="drop" >
																		<option value="">请选择</option>
																		<!--{loop $__paymentStr $key $value}-->
																			<option value='{$key}' <!--{if $key==$result[payment]}-->selected="" <!--{/if}-->>{$value}</option>
																		<!--{/loop}-->
																	</select><span id="contract3">户名：<input type="text" class="text" id="account_name" name="account_name" placeholder="" value="{$result[account_name]}" /></span></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td >是否有执照：</td>
																<td >
																	<input type="radio"  name="license" value="1" id="right21" <!--{if $result[NewOld]==1}-->checked<!--{/if}-->/><label for="right21">是</label>&nbsp;&nbsp;
																	<input type="radio"  name="license" value="0" id="right211" <!--{if $result[NewOld]==0}-->checked<!--{/if}-->/><label for="right211">否</label></td>
															</tr>
															<tr>
																<td class="tb_title">付款金额：</td>
																<td ><div class="formMod addressMod"><span class="formText"><input type="text" class="text" id="amount_money" name="amount_money" placeholder="" value="{$result[amount_money]}"  required="required"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td >合同编号：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" id="contractId" name="contractId" placeholder="" value="{$result[contractId]}" size="50" <!--{if $result[contractId]}-->readonly=""<!--{/if}--> /> <!--{if $result[contractId]}-->(不可修改)<!--{/if}--></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">汇款时间：</td>
																<td colspan="3" ><div class="formMod addressMod"><span class="formText" >
																	<span id="contract41"><input name="receipt" type="radio" value="1" id="right103" checked="" /></span><label for="right103"><input type="text" class="text" id="transferTime" name="transferTime" placeholder="" value="<!--{if $result[transferTime]}-->{$result[transferTime]}<!--{else}-->{$dateS}<!--{/if}-->"/>(格式：{$dateS})</label>
																	<span id="contract42"><input name="receipt" type="radio" value="0" id="right102"/><label for="right102">未付款</label></span>
																	</span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">赠送资源：</td>
																<td colspan="3"><span id="contract5"><textarea type="text" class="text1" id="contract_remark" name="contract_remark" rows="3" message="赠送资源" style="margin: 0px; width: 100%;">{$result[contract_remark]}</textarea></span></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave" onclick="sub();">完成</a>
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
		</div>
		<!--{template xuyue/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function sub () {
	if($('#c_id').val() == ''|| typeof($('#c_id').val()) == 'undefined'){
		alert('请选择企业！');
		return;
	}
	if($('#web_site').val() == ''|| typeof($('#web_site').val()) == 'undefined'){
		alert('请输入站点！');
		return;
	}
	if($('#contract_title').val() == ''||typeof($('#contract_title').val()) == 'undefined'){
		alert('请输入套餐类型！');
		return;
	}
	if($('#payment').val() == ''||typeof($('#payment').val()) == 'undefined'){
		alert('请选择付款方式！');
		return;
	}
	if($('#account_name').val() == ''||typeof($('#account_name').val()) == 'undefined'){
		alert('请输入户名！');
		return;
	}
	if($('#amount_money').val() == ''||typeof($('#amount_money').val()) == 'undefined'){
		alert('请输入付款金额！');
		return;
	}
	if($('#contractId').val() == ''||typeof($('#contractId').val()) == 'undefined'){
		alert('请输入合同编号！');
		return;
	}
	/*if($('#contract_remark').val() == ''||typeof($('#contract_remark').val()) == 'undefined'){
		alert('请输入赠送资源！');
		return;
	}*/
	
	$('#postForm').submit();
	return false;
}
</script>
</body>
</html>