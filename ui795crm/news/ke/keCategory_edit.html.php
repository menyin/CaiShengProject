<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<body>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
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
					<div class="m_bg">类型管理 > 课程类型添加</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="/news/ke/keCategory.html">返回</a></div>
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
												<form id="postForm" name="postForm" method="post" action="/news/ke/keCategory.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="catId" id="catId" value="{$cateRow['catId']}" />
													<input type="hidden" name="parentId" id="parentId" value="{$cateRow['parentId']}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">类别ID：</td>
																<td >{$cateRow['catId']}</td>
															</tr>
															<tr>
																<td class="tb_title">类型名称：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" class="text" id="catName" name="catName" value="{$cateRow['catName']}"/>
																	</span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">排序：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" class="text" id="sortOrder" name="sortOrder" value="{$cateRow['sortOrder']}"/>
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
		<!--{template news/sidebar}-->
	</div>
</div>
<script type="text/javascript">
		var frmValid=$("#postForm").validate({
			rules:{
				catName:{required:true,rangelength: [2,50]}
			},
			messages:{
				catName:{
					required:'请填写类别名称<span class="tipArr"></span>',
					rangelength:'类别名称：2-50个字符<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				catName:{required:'tipLayErr tipw150',rangelength:'tipLayErr tipw150'}
			},
			tips:{
				catName:'类别名称：2-50个字符<span class="tipArr"></span>'
			},
			tipClasses:{
				catName:'tipLayTxt tipw150'
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
<script>
		$('#btnSave').click(function(){
			// $('#postForm').submit();
			// return false;
			$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
				if(data.status<1){
					$.message(data.msg, { title: "系统提示", icon: "fail" });
				}else{
					$.anchorMsg(data.msg,{icon:"success"});
					window.location.href="/news/ke/keCategory.html";
				}

			}, clearForm: false});
		});
</script>
</body>
</html>
