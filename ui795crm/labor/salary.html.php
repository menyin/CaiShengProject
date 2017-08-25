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
					<div class="m_bg">劳务派遣管理 > 档案管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="list">
										<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" class="search input_txt" placeholder="真实姓名"></li>
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
										<th width="8%" style="display:none;">PID</th>
										<th width="8%">真实姓名</th>
										<th width="10%">身份证</th>
										<th width="6%">性别</th>
										<th width="6%">类型</th>
										<th width="8%">email</th>
										<th width="8%">手机</th>
										<th width="8%">qq</th>
										<th width="10%">所在公司</th>
										<th width="8%">派遣开始时间</th>
										<th width="8%">派遣到期时间</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox" class="c2_checkbox" ></td>
										<td style="display:none;">{$result[pid]}</td>
										<td>{$result[realname]}</td>
										<td>{$result[IdCard]}</td>
										<td><!--{if $result[gender]==1}-->男<!--{else}-->女<!--{/if}--></td>
										<td>{$result[jobState]}</td>
										<td>{$result[email]}</td>
										<td>{$result[mobile]}</td>
										<td>{$result[qq]}</td>
										<td>{$result[cname]}</td>
										<td>{$result[_startDate]}</td>
										<td>{$result[_endDate]}</td>
										<td>
											<a class="btn_s" href="person.html?act=addSalary&pid={$result[pid]}">工资录入</a>
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