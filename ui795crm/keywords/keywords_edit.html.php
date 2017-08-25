<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<body>
	<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
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
					<div class="m_bg">关键词管理 > 关键词添加</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="keywords.html?act=edit">新增关键词</a></div>
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
												<div class="">
												<form id="postForm" action="/keywords/keywords.html" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="id" id="id" value="{$res['id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">ID：</td>
																<td >{$res[id]}</td>
															</tr>
															<tr>
																<td class="tb_title">关键词：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" class="text" id="keyword" name="keyword" value="{$res['keyword']}"/>
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">拼音：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" class="text" id="pinyin" name="pinyin" value="{$res['pinyin']}"/>
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">分类：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<select name='jobClassId' id="jobClassId" class="drop" >
																			<option value="">请选择</option>
																			<!--{loop $jobclass $key $value}-->
																				<option value='{$value[jobsort]}' <!--{if $value[jobsort]==$res[jobClassId]}-->selected="" <!--{/if}-->>{$value['jobsort_name']}</option>
																			<!--{/loop}-->
																		</select>
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">其他关键词：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<textarea  id="other_keyword" name="other_keyword" rows="5" cols="150">{$res[other_keyword]}</textarea><br/><span>【多个用逗号(,)割开</span>
																	</span>
																</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">排序：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" class="text" id="displayOrder" name="displayOrder"  value="{$res[displayOrder]}"/><span> (最大值为255)</span>
																	</span>
																</div>
																</td>
															</tr>
															<tr id="searchList">
																<td class="tb_title">搜索类型：</td>
																<td>
																	<label for="all1"><input type="checkbox" class="checkAll" id="all1" />全选</label>
																	<!--{loop $search_type_arr $k $l}-->
																	<input type="checkbox" name="searchType[]" id="searchType{$k}" value="{$k}" <!--{if strpos({$res[searchType]},$k)>-1}-->checked<!--{/if}-->><label for="searchType{$k}">{$l}</label> 
																	<!--{/loop}-->
																</td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave" onClick="check();">完成</a>
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
		<!--{template keywords/sidebar}-->
	</div>
</div>
<script type="text/javascript">
	function check () {
		var keyword = $('#keyword').val(),
			pinyin = $('#pinyin').val(),
			other_keyword = $('#other_keyword').val();
		if(keyword==''||typeof(keyword)=='undefined'){
			alert('请输入关键词!');
			return;
		}
		if(keyword.length>96){
			alert('关键词只能输入1-32位字符！');
			return;
		}
		if(pinyin==''||typeof(pinyin)=='undefined'){
			alert('请输入拼音!');
			return;
		}
		/*if(other_keyword==''||typeof(other_keyword)=='undefined'){
			alert('请输入其他关键词!');
			return;
		}*/
		//$('#postForm').submit();
		$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.href = '/keywords/keywords.html?act=list';
			}

		}, clearForm: false});
	}

	$("#searchList .checkAll").click(function(){
		$(this).parents('tr').find('input').attr('checked',this.checked);
	});
	$("#searchList input:not(.checkAll)").click(function(){
		var parent = $(this).parents('tr');
		var len = parent.find(':checked').not('.checkAll').length;
		parent.find('.checkAll').attr('checked',len == parent.find('input').length - 1);
	});


</script>
</body>
</html>
