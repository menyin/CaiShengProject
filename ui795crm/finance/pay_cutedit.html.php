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
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">财务管理 > 新增扣款</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="pay.html?act=cutedit">新增扣款</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
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
												<div id="frame" style="display:none;">
													<iframe scrolling="auto" src="/design/company.php?act=unique&c_id={$com[_cid]}" width="100%" height="230" frameborder=0></iframe>
												</div>
												<div class="">
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="cutsave" />
													<input type="hidden" name="pay_id" id="pay_id" value="{$pay['pay_id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">账单ID：</td>
																<td >{$pay[pay_id]}</td>
															</tr>
															<tr>
																<td class="tb_title">用户名：</td>
																<td><div class="formMod"><span class="formText" id="myH2"><input type="hidden" name="c_id" value="{$pay[_cid]}"><input type="text" class="text" size="50"  onClick="com();" readonly="" value="{$pay[cname]}" /></span><span style="line-height: 30px;margin-left: 5px;"><a onClick="com();">绑定</a></span>
																	<div class="clear"></div></div>
																<!-- <div class="formMod"><span class="formText"><input type="text" class="text" name="pay_userid" id="pay_userid" value="{$pay[pay_userid]}" size="20" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div> -->
																</td>
															</tr>
															<script type="text/javascript">
															function com(){
																$("#frame").css("display","");
															}
															</script>
															<tr>
																<td class="tb_title">付款方式：</td>
																<td >
																	<input type="radio" id="pay_type" name="pay_type" value="7" checked>扣款
																</td>
															</tr>
															<tr>
																<td class="tb_title">总金额：</td>
																<td><input type="text" class="text1" name="pay_money" id="pay_money" value="{$pay[pay_money]}" size="20" />   元</td>
															</tr>
															<tr>
																<td class="tb_title">详细说明：</td>
																<td><textarea name="trade_no" cols="50" rows="5">{$pay[trade_no]}</textarea>只允许输入32个字节</td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">完成</a>
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
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template finance/sidebar}-->
	</div>
</div>
<script type="text/javascript">
$('#btnSave').click(function(){
	/*$('#postForm').submit();
	return false;*/
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			$.message(data.msg, { title: "系统提示", icon: "fail" });
			//window.location.href='pay.html?act=cutedit';
			return;
		}else{
			$.anchorMsg(data.msg,{icon:"success"});
			window.location.href='/finance/pay.html?act=list&op=all';
		}

	}, clearForm: false});
});
</script>

</body>
</html>
