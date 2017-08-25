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
					<div class="m_bg">查看企业： [<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">{$com['cname']}]</a> >部门管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<!--{template companyinfo/daohang}-->
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="8%">部门名称</th>
										<th width="8%">部门联系人</th>
										<th width="8%">部门电话</th>
										<th width="8%">部门邮箱</th>
										<th width="20%">部门地址</th>
										<th width="5%">是否显示</th>
										<th width="5%">地图定位</th>
										<th width="5%">排序</th>
										<th width="8%">操作</th>
									</tr>
								</thead>
								<tbody data-bind="foreach: items" id="keywordContent">
									<!--{loop $unitList $l}-->
										<tr class="">
											<td>{$l['cuName']}</td>
											<td>{$l['linker']}</td>
											<td>{$l['linktel']}</td>
											<td>{$l['email']}</td>
											<td>{$l['address']}</td>
											<td><!--{if $l['isshow']==1}-->显示<!--{else}-->不显示<!--{/if}--></td>
											<td><!--{if $l['longitude']&&$l['latitude']}-->有<!--{else}-->没有<!--{/if}--></td>
											<td>{$l['cuDisplayOrder']}</td>
											<td>
											    <a class="btn_s" href="companyinfo.html?act=editUnit&c_id={$_GET['c_id']}&cuid={$l[cuid]}">修改</a>
											    <!--<a class="btn_s" id="btn_del" href="javascript:void(0);">删除</a>-->
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
		<!--{template service/sidebar}-->
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