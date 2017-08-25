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
					<div class="m_bg">劳务派遣管理 > 对员工：<b>{$realname}</b> 进行劳务派遣</a></div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div id="frame">
													<iframe scrolling="auto" src="dispatch.php?act=comlist" width="100%" height="230" frameborder=0></iframe>
												</div>
												<div class="">
													<form id="postForm" name="postForm" method="post" action="dispatch.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="pid" id="pid" value="{$pid}" />
													<input type="hidden" name="id" id="id" value="{$id}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="80">客户名称 ：</td>
																<td colspan="3"><div class="formMod"><span class="formText" id="myH2"><input type="hidden" name="cid" value="{$result[cid]}"><input type="text" class="text" size="50" readonly="" value="{$cname}" /></span><span style="line-height: 30px;margin-left: 5px;"></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">开始时间：</td>
																<td colspan="3"><span class="formText">
																<input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" value="{$result[_startDate]}" onClick="WdatePicker()" required="required"/>
																</span></td>
															</tr>
															<tr>
																<td class="tb_title">结束时间：</td>
																<td colspan="3"><span class="formText">
																<input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="{$result[_endDate]}" onClick="WdatePicker()" required="required"/>
																</span></td>
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
	txtStartDate=$('#txtStartDate').val();
	txtEndDate=$('#txtEndDate').val();
	if(txtStartDate>txtEndDate){
		alert('开始时间不能大于结束时间！');
		$('#txtEndDate').focus();
		return;
	}
	$('#postForm').submit();
	return false;
});
</script>
<script type="text/javascript">
		var frmValid=$("#postForm").validate({
			rules:{
				cid:{required:true,
					remote: {
						url: "dispatch.html", 
						type: "post",
						dataType: "json",
						data: { act: "cidCheck"},
						dataFilter: function(json) {
							var result = eval('(' + json + ')');
							if (result && result.state==1) {
								$(".tipText font").remove();
								return "false";
							}
							else {
								//$(".tipText").prepend('<font class="green jpFntWes">&#xf00c;</font>');
								return "true";
							}
						}
					}
				},
				txtStartDate:{required:true},
				txtEndDate:{required:true}
			},
			messages:{
				cid:{required:'请输入公司ID<span class="tipArr"></span>',
					remote: "该公司ID不存在"
				},
				txtStartDate:{required:'请选择开始时间<span class="tipArr"></span>'},
				txtEndDate:{required:'请选择结束时间<span class="tipArr"></span>'}
			},
			errorClasses:{
				cid:{required:'tipLayErr tipw120',
					remote:'tipLayErr tipw100'
				},
				txtStartDate:{required:'tipLayErr tipw120'},
				txtEndDate:{required:'tipLayErr tipw120'}
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
