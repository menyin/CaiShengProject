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
					<div class="m_bg">管理员管理 > 分配管理 >后台管理员列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--<div class="btn icon-1 icon" ><a href="admin.html?act=edit">新增管理员</a></div>
							<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="list">
									<li>模糊查询：<input type="text" name="query" id="query" placeholder="用户ID/真实姓名/管理地区" style="width:250px;"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="customer_assign.html?act=list{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
										<div class="paginator" style="float:right;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->	
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
										<!-- <th class="td1" width="3%"></th> -->
										<th width="5%">用户ID</th>
										<th width="5%">真实姓名</th>
										<th width="5%">所属部门</th>
										<th width="5%">客户总数</th>
										<th width="5%">库容</th>
										<th width="5%">操作</th>
									</tr>
								</thead>
								<!--{loop $admins $admin}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<!-- <td class="td1"><input type="checkbox" class="c2_checkbox" ></td> -->
										<td>{$admin[adminUsername]}</td>
										<td>{$admin[adminName]}</td>
										<td>{$admin[adminUnit]}</td>
										<td>{$comNum[$admin[adminid]]}</td>
										<td>{$admin[adminTotal]}</td>
										<td>
											<a class="btn_s" href="customer_assign.html?act=customerlist&admin_id={$admin[adminid]}&ordertype=1&query=">客户列表</a>
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