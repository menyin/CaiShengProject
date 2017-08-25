<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->

<body > 
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
					<div class="m_bg">个人审核 > 个人搜索</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 disabled icon" >快速注册</div>
							<span class="gray"></span> -->
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									<!-- <li class="ml_10">注册时间：
										<select id='query_day' name='query_day' style='width:80px' >
											<option value='1' {if ($query_day=='1')}selected{/if}>1天内</option>
											<option value='3' {if ($query_day=='3')}selected{/if}>3天内</option>
											<option value='5' {if ($query_day=='5')}selected{/if}>5天内</option>
											<option value='10' {if ($query_day=='10')}selected{/if}>10天内</option>
											<option value='20' {if ($query_day=='20')}selected{/if}>20天内</option>
											<option value='30' {if ($query_day=='30')}selected{/if}>30天内</option>
											<option value='60' {if ($query_day=='60')}selected{/if}>60天内</option>
											<option value='90' {if ($query_day=='90')}selected{/if}>90天内</option>
											<option value='120' {if ($query_day=='120')}selected{/if}>120天内</option>
											<option value='180' {if ($query_day=='180')}selected{/if}>180天内</option>
											<option value='240' {if ($query_day=='240')}selected{/if}>240天内</option>
											<option value='360' {if ($query_day=='360')}selected{/if}>360天内</option>
											<option value='999999' {if ($query_day=='999999')}selected{/if}>全部</option>
										</select>
									</li> -->
									<li class="ml_10">类型：
										<select name='user_type' style='width:80px' >
											<option value='' >请选择</option>
											<option value='1' <!--{if ($user_type=='1')}-->selected<!--{/if}-->>个人</option>
											<option value='2' <!--{if ($user_type=='2')}-->selected<!--{/if}-->>企业</option>
										</select>
									</li>
									<li class="ml_10">搜索类型：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value='1' {if ($query_type=='1')}selected{/if}>用户名</option>
											<option value='2' {if ($query_type=='2')}selected{/if}>邮箱</option>
											<option value='3' {if ($query_type=='3')}selected{/if}>手机</option>
										</select>
									</li>
									<li class="ml_10"><input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="user.html?act={$act}&op={$op}&query_day={$query_day}&user_type={$user_type}&query_type={$query_type}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共{$num_all}条
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
						<form name="listform" action="company.html" method="post" >
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<!-- <th class="td1" width="10px"></th> -->
										<th width="60px">用户ID</th>
										<th width="50px">用户名</th>
										<th width="50px">类型</th>
										<th width="50px">邮箱</th>
										<th width="50px" style="display:none;">邮箱验证</th>
										<th width="50px">手机</th>
										<th width="50px" style="display:none;">手机验证</th>
										<th width="50px">余额</th>
										<th width="50px">注册时间</th>
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $users $user}-->
								<tbody>
									<tr class="">
										<!-- <td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$resume[rid]}" ></td> -->
										<td>{$user[uid]}</td>
										<td>{$user[username]}</td>
										<td><!--{if $user[type]==2}-->企业<!--{else}-->个人<!--{/if}--></td>
										<td>{$user[email]}</td>
										<td style="display:none;"><!--{if $user[emailCheck]==1}-->√<!--{else}-->?<!--{/if}--></td>
										<td>{$user[mobile]}</td>
										<td style="display:none;"><!--{if $user[mobileCheck]==1}-->√<!--{else}-->?<!--{/if}--></td>
										<td>{$user[money]}</td>
										<td>{$user[regdate]}</td>
										<td>
											<!--{if $user[type]==1}-->
												<a class="btn_s" href="person_search.html?act=to&r_id={$user[_rid]}">进入</a>
												<a class="btn_s" href="user.html?act=del&r_id={$user[_rid]}" onclick="return confirm('确认要删除吗？');">删除</a>
											<!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template person/sidebar}-->
	</div>
</div>
</body>
</html>