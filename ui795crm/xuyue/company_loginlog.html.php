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
					<div class="m_bg">客服管理 > 企业登录日志 > 公司 ：<a href="http://www.{ROOT_DOMAIN}/com-{$_cid}/" target="_blank">{$com[cname]}</a></div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon" ><a href="company.html?act=mylist&ordertype={$_ordertype}&query={$_query}&page={$_page}">返回上一级</a></div>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="c_id" value="{$_cid}">
									<input type="hidden" name="_ordertype" value="{$_ordertype}">
									<input type="hidden" name="_query" value="{$_query}">
									<input type="hidden" name="_page" value="{$_page}">
									<li class="ml_10">登录时间：<select id="query_day" name="query_day" style="width:80px">
										<option value="1" <!--{if $query_day=='1'}-->selected<!--{/if}-->>1天内</option>
										<option value="3" <!--{if $query_day=='3'}-->selected<!--{/if}-->>3天内</option>
										<option value="5" <!--{if $query_day=='5' || $query_day==''}-->selected<!--{/if}-->>5天内</option>
										<option value="10" <!--{if $query_day=='10'}-->selected<!--{/if}-->>10天内</option>
										<option value="20" <!--{if $query_day=='20'}-->selected<!--{/if}-->>20天内</option>
										<option value="30" <!--{if $query_day=='30'}-->selected<!--{/if}-->>30天内</option>
										<option value="60" <!--{if $query_day=='60'}-->selected<!--{/if}-->>60天内</option>
										<option value="90" <!--{if $query_day=='90'}-->selected<!--{/if}-->>90天内</option>
										<option value="120" <!--{if $query_day=='120'}-->selected<!--{/if}-->>120天内</option>
										<option value="180" <!--{if $query_day=='180'}-->selected<!--{/if}-->>180天内</option>
										<option value="240" <!--{if $query_day=='240'}-->selected<!--{/if}-->>240天内</option>
										<option value="360" <!--{if $query_day=='360'}-->selected<!--{/if}-->>360天内</option>
										<option value="999999" <!--{if $query_day=='999999'}-->selected<!--{/if}-->>全部</option>
									</select></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<div style="clear:both;"></div>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="loginlog.html?act={$act}&c_id={$_cid}&_ordertype={$_ordertype}&_query={$_query}&_page={$_page}&query_day={$query_day}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
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
						<form name="listform" action="company.html" method="post" >
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="5%" style="display:none;">ID</th>
										<th width="10%" style="display:none;">公司ID</th>
										<th width="10%">公司名称</th>
										<th width="15%">用户类型</th>
										<th width="15%">登录时间</th>
										<th width="15%">登录IP</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody>
									<tr class="">
										<td style="display:none;">{$result[id]}</td>
										<td style="display:none;">{$result[uid]}</td>
										<td>{$com[cname]}</td>
										<td>{$result[_type]}</td>
										<td>{$result[_loginTime]}</td>
										<td>{$result[loginIp]}</td>
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
		<!--{template xuyue/sidebar}-->
	</div>
</div>
</body>
</html>