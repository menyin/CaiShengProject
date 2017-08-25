<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_uploadify.js?v=20140313"></script>
<style type="text/css">
	.uploadify-button{margin-top: -20px;}
</style>
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
					<div class="m_bg">劳务派遣管理 > {$result[realname]}工资录入</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
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
													<form id="postForm" name="postForm" action="person.html" method="post">
													<input type="hidden" name="act" value="saveSalary" />
													<input type="hidden" name="from" value="{$from}" />
													<input type="hidden" name="adminid" value="{$_SESSION[adminid]}" />
													<input type="hidden" name="pid" id="pid" value="{$result['pid']}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title">真实姓名：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="realname" id="realname" value="{$result[realname]}" size="50"/></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">身份证：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="IdCard" id="IdCard" value="{$result[IdCard]}" size="50"/></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">年份：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="year" id="year" value="{$year}" size="50" style="width:50px;" /> 年</span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">年份：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="month" id="month" value="{$month}" size="50"  style="width:50px;"/> 月</span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">工资：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="salary" id="salary" value="" size="50"  style="width:50px;"/> 元</span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">缴交医社保费用：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="welfare" id="welfare" value="" size="50" style="width:50px;"/> 元</span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">实际工资：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="totalSalary" id="totalSalary" value="" size="50"  style="width:50px;"/> 元</span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="80">备注：</td>
																<td >
																	<div class="formMod">
																		<span class="formText">
																			<textarea rows="10" cols="60" id="note" name="note">{$result['note']}</textarea>
																		</span>
																		<span class="tipPos">
																			<span class="tipLay "></span>
																		</span>
																		<div class="clear"></div>
																	</div>
																</td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">确认提交</a>
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
		<!--{template labor/sidebar}-->
	</div>
</div>
<script type="text/javascript">
$('#btnSave').click(function(){
	$('#postForm').submit();
	return false;
});
</script>
<script type="text/javascript">
		//手机号码验证规则
		$.validator.addMethod("inputRegValiMobile", function(value, element, param) {
			if (this.optional(element))
				return "dependency-mismatch";
			var reg = param;
			if (typeof param == 'string') {
				reg = new RegExp(param);
			}
			return reg.test(value);
		}, '手机号码格式不正确');

		var frmValid=$("#postForm").validate({
			rules:{
				realname:{required:true,
					remote: {
						url: "/labor/person.html", 
						type: "post",
						dataType: "json",
						data: { act: "realnameCheck",pid: "{$result[pid]}"},
						dataFilter: function(json) {
							var result = eval('(' + json + ')');
							if (result && result.state==0) {
								$(".tipText font").remove();
								return "false";
							}
							else {
								$(".tipText").prepend('<font class="green jpFntWes">&#xf00c;</font>');
								return "true";
							}
						}
					}
				},
				email: {
					required: true,
					email: true
				},
				mobile: {
					inputRegValiMobile: '^[1][0-9]{10}$'
				}
			},
			messages:{
				realname:{required:'请输入公司名称<span class="tipArr"></span>',
					remote: "该企业名称已存在"
				},
				email: {
					required: '请填写邮箱<span class="tipArr"></span>',
					email: '请填写正确的邮箱<span class="tipArr"></span>'
				},
				mobile: {
					inputRegValiMobile: '请填写正确的手机号码<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				realname:{required:'tipLayErr tipw120',
					remote:'tipLayErr tipw100'
				},
				email: {
					required: 'tipLayErr tipw180',
					email: 'tipLayErr tipw180'
				},
				mobile: {
					inputRegValiMobile: 'tipLayErr tipw180'
				}
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.closest('div.formMod').find('.tipPos .tipLay').append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});
</script>
</body>
</html>
