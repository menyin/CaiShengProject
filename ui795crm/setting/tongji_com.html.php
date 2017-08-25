<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<style type="text/css">
	html{overflow-x: hidden;}
	.weekstyle td{background:#E6FAF5;}
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
					<div class="m_bg">站点管理 > 系统统计 > {$name}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<ul>
								<form method="get" id="conList" name="conList" action="">
								<input type="hidden" name="act" value="{$act}">
								<li class="ml_10">查询：
									<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$_txtStartDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
									<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$_txtEndDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
								</li>
								<li class="ml_10">
									<select name="cityId">
										<!--{loop $cityArr $k $l}-->
											<option value="{$k}" <!--{if $k==$cityId}-->selected<!--{/if}-->>{$l}</option>
										<!--{/loop}-->
									</select>
								</li>
								<li class="ml_10">
								   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
								</li>
							   </form>
							</ul>
						</div>
					</div>
					<div class="searchBox">
						<div class="location">
							<div class="location_main item">
								<ul style="float:left;">

								</ul>
								<!--{if $total>0}-->
									<div style="float:right;">
										<div style="float:left;"> 共{$total}条
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
										<th width="10%">日期</th>
										<th width="8%">城市</th>
										<th width="8%">公司总数</th>
										<th width="8%">公司注册数</th>
										<th width="8%">公司登陆数</th>
										<th width="8%">公司跟进数</th>
										<th width="8%">职位发布数</th>
										<th width="8%">职位总数</th>
										<th width="8%">职位更新数</th>
										<th width="8%">公司跟进比例</th>
									</tr>
								</thead>
								<!--{loop $all $l}-->
								<tbody>
									<tr <!--{if $l['weekStr']=='星期六'||$l['weekStr']=='星期日'}-->class="weekstyle"<!--{/if}-->>
										<td>{$l['createDay']} {$l['weekStr']}</td>
										<td>{$l['cityName']}</td>
										<td>{$l['comAllNo']}</td>
										<td>{$l['comThisNo']}</td>
										<td>{$l['comLogin']}</td>
										<td>{$l['comFollow']}</td>
										<td>{$l['jobThisNo']}</td>
										<td>{$l['jobAllNo']}</td>
										<td>{$l['jobUpdate']}</td>
										<td>{$l['comFollowRate']}%</td>
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