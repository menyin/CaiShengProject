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
					<div class="m_bg">劳务派遣管理 > 派遣管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
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
										<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" class="search input_txt" placeholder="公司名称/员工姓名"></li>
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
										<th class="td1" width="3%" style="display:none;"></th>
										<th width="8%" style="display:none;">ID</th>
										<th width="15%">员工名称</th>
										<th width="8%">派遣公司</th>
										<th width="8%">开始时间</th>
										<th width="8%">结束时间</th>
										<th width="8%">添加时间</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox" class="c2_checkbox" ></td>
										<td style="display:none;">{$result[id]}</td>
										<td>{$result[realname]}</td>
										<td>{$result[cname]}</td>
										<td>{$result[_startDate]}</td>
										<td>{$result[_endDate]}</td>
										<td>{$result[_createTime]}</td>
										<td>
											<a class="btn_s" href="dispatch.html?act=edit&id={$result[id]}">修改</a>
											<!--<a class="btn_s" href="dispatch.html?act=delete&id={$result[id]}" onclick="return confirm('确认需要删除些信息吗？');">删除</a>-->
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
		<!--{template labor/sidebar}-->
	</div>
</div>
</body>
</html>