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
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">企业管理 > 短信审核</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="list">
									<li class="ml_10">时间：
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$txtStartDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$txtEndDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$query}" placeholder="企业名称/企业用户名"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $num_all>0}-->
									共{$num_all}条
									<div style="float:left; margin:2px 10px;">
										<div class="paginator" style="float:left;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
							</div>
						</div>
					</div>
				</div>				
				<div class="mainContent" style="">
					<div class="main_content">
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="50px">用户名</th>
										<th width="150px">企业名称</th>
										<th width="50px">姓名</th>
										<th width="50px">内容</th>
										<th width="50px">条数</th>
										<th width="50px">发送时间</th>
									</tr>
								</thead>
								<!--{loop $message $l}-->
								<tbody>
									<tr class="">
										<td>{$l[username]}</td>
										<td>{$l[cname]}</td>
										<td>{$l[realname]}</td>
										<td>{$l[content]}</td>
										<td>{$l[number]}</td>
										<td>{$l[_createTime]}</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<!--{if $num_all>0}-->
									共{$num_all}条
									<div style="float:left; margin:2px 10px;">
										<div class="paginator" style="float:left;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--{template company/sidebar}-->
	</div>
</div>
</body>
</html>