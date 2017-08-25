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
					<div class="m_bg">客服管理 > 待处理企业</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a onclick="Boxy.load('company.html?act=edit',{title: '快速注册'});">快速注册</a></div> -->
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<li class="ml_10">分配时间：
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>
									<!-- <li class="ml_10">分配时间：
										<select id="query_day" name="query_day" style="width:80px">
											<option value="1" {if $query_day=='1'}selected{/if}>1天内</option>
											<option value="3" {if $query_day=='3'}selected{/if}>3天内</option>
											<option value="5" {if $query_day=='5' || $query_day==''}selected{/if}>5天内</option>
											<option value="10" {if $query_day=='10'}selected{/if}>10天内</option>
											<option value="20" {if $query_day=='20'}selected{/if}>20天内</option>
											<option value="30" {if $query_day=='30'}selected{/if}>30天内</option>
											<option value="60" {if $query_day=='60'}selected{/if}>60天内</option>
											<option value="90" {if $query_day=='90'}selected{/if}>90天内</option>
											<option value="120" {if $query_day=='120'}selected{/if}>120天内</option>
											<option value="180" {if $query_day=='180'}selected{/if}>180天内</option>
											<option value="240" {if $query_day=='240'}selected{/if}>240天内</option>
											<option value="360" {if $query_day=='360'}selected{/if}>360天内</option>
											<option value="999999" {if $query_day=='999999'}selected{/if}>全部</option>
										</select>
									</li> -->
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="企业名称"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									<li class="ml_10" style="display:none;">总共：<font color="red">{$num_all}</font> 条</li>
								   </form>
								</ul>
								<!--{if $res[0]['total_found']>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$res[0]['total_found']}条<!--{if $res[0]['total_found']>=5000}--><font color="red">[显示前5000条]</font><!--{/if}-->
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
						<input type="hidden" id="act" name="act" value="">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="10px" style="display:none;"></th>
										<th width="150px">企业名称</th>
										<th width="50px">用户名</th>
										<th width="50px">地区</th>
										<!-- <th width="50px">会员类型</th> -->
										<th width="50px">注册时间</th>
										<th width="50px">登陆时间</th>
										<th width="50px">分配时间</th>
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="" style="background:<!--{if $company['pStatus']}-->#C7E3BD;<!--{else}-->#E8AEA4;<!--{/if}-->">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td>
										<!-- <td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td> -->
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank">{$company[cname]}</a></td>
										<td>{$company[username]}</td>
										<td>{$company[comCityId]}</td>
										<!-- <td>{$company[comType]}</td> -->
										<td>{$company[regTime]}</td>
										<td>{$company[loginTime]}</td>
										<td>{$company[followTime]}</td>
										<td>
											<a href="/company/company.html?act=to&c_id={$company[_cid]}" class="btn_s" target="_blank">登录前台</a>
											<a class="btn_s" href="company.html?act=follow&c_id={$company[_cid]}" target="_blank">跟进</a>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}">查看</a>
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
		<!--{template xuyue/sidebar}-->
	</div>
</div>
</body>
</html>