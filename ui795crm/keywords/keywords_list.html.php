<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
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
					<div class="m_bg">关键词管理 > 关键词设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="keywords.html?act=edit">新增关键词</a></div>
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="{$act}">
										<li class="ml_10">分类：<select name='jobClassId'>
															<option value="">请选择</option>
															<!--{loop $jobclass $key $value}-->
																<option value='{$value[jobsort]}' <!--{if $value[jobsort]==$jobClass_id}-->selected="" <!--{/if}-->>{$value['jobsort_name']}</option>
															<!--{/loop}-->
														</select></li>
										<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" placeholder="关键词"></li>
										<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<div class="paginator" style="">{$showpage}</div>
							</div>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="3%" width="8%" style="display:none;"></th>
										<th width="8%" style="display:none;">ID</th>
										<th width="8%">关键词</th>
										<th width="8%">拼音</th>
										<th width="8%">类别</th>
										<th width="15%">其他关键词</th>
										<th width="5%">排序</th>
										<th width="15%">搜索类型</th>
										<th width="8%">操作</th>
									</tr>
								</thead>
								<tbody data-bind="foreach: items" id="keywordContent">
									<!--{loop $results $result}-->
										<tr class="">
											<td class="td1" width="8%" style="display:none;"><input type="checkbox" class="c2_checkbox" ></td>
											<td width="8%" style="display:none;">{$result[id]}</td>
											<td>{$result[keyword]}</td>
											<td>{$result[pinyin]}</td>
											<td>{$result[jobClassName]}</td>
											<td>{$result[other_keyword]}</td>
											<td>{$result[displayOrder]}</td>
											<td>{$result[searchType]}</td>
											<td>
											    <a class="btn_s" href="keywords.html?act=edit&id={$result[id]}">修改</a>
											    <a class="btn_s" id="btn_del" href="javascript:void(0);">删除</a>
											</td>
										</tr>
									<!--{/loop}-->
								</tbody>
							</table>
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
	$('#keywordContent #btn_del').click(function(){
		if(confirm('确认需要删除些信息吗？')){
			var	objcet = $(this),
				keyword = objcet.closest('tr').find('td').eq(2).html();

			$.post('/keywords/keywords.html',{act:'del',keyword:keyword},function(data){
				if(data.status<1){
					$.message(data.msg, { title: "系统提示", icon: "fail" });
				}else{
					$.anchorMsg(data.msg,{icon:"success"});
					objcet.closest('tr').hide();
					//window.location.href = window.location.href;
				}
			},'json');
		}
	});
</script>
</body>
</html>