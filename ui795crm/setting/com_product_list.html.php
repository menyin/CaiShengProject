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
					<div class="m_bg">站点管理 > 企业产品设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="com_product.html?act=edit">新增企业产品</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="list">
										<input type="hidden" name="query_regionId" id="query_regionId" value="{$query_regionId}" />
										<li>区域查询：
											<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true"> 
											<script language="javascript">
												var areaOdjid='query_regionId'; 
												var areaOdjstr='query_region';
												var areaOdjProvice=1;//是否省可选
												var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
												var areaOdjnumber=1;//数量，如果唯一值，则立即返回
											</script>
										</li>
										<li>　模糊查询：<input type="text" name="query" id="query" class="search input_txt"></li>
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
										<th class="td1" width="3%"></th>
										<th width="8%">产品编号</th>
										<th width="15%">产品区域</th>
										<th width="8%">产品类型</th>
										<th width="10%">产品名称</th>
										<th width="8%">产品数量</th>
										<th width="8%">产品有效期</th>
										<th >产品描述</th>
										<th width="8%">产品单价</th>
										<th width="8%">是否屏蔽</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $products $product}-->					
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1"><input type="checkbox" class="c2_checkbox" ></td>
										<td>{$product[product_id]}</td>
										<td>{$product[product_region]}</td>
										<td>{$product[product_type]}</td>
										<td>{$product[product_name]}</td>
										<td>{$product[product_no]}</td>
										<td>{$product[product_valid]}</td>
										<td>{$product[product_remark]}</td>
										<td>{$product[product_price]}</td>
										<td>{$product[isban]}</td>
										<td>
											<a class="btn_s" href="com_product.html?act=mod&product_id={$product[product_id]}">修改资料</a>
											<!--<a class="btn_s" onclick="Boxy.load('admin.html?act=del&uid={$admin[adminid]}',{title: '屏蔽管理员'});">屏蔽管理员</a>-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->  
		</div>		
		<!--{template setting/sidebar}-->	
	</div>	
</div>
</body>
</html>