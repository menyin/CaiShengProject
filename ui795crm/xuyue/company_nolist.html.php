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
					<div class="m_bg">客服管理 > 新注册企业(城市为空)</div>
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
								<ul style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<li class="ml_10"><select id="query_day" name="query_day" style="width:80px">
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
									</select></li>
									<!-- <li class="ml_10">排序方式：<select id="ordertype" name="ordertype" style="width:80px">
										<option value="1" {if $ordertype=='1'}selected{/if}>修改时间</option>
										<option value="2" {if $ordertype=='2'}selected{/if}>注册时间</option>
										<option value="3" {if $ordertype=='3'}selected{/if}>刷新时间</option>
									</select></li> -->
									<!-- <li class="ml_10">信息状态：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value='9' {if ($query_type=='9')}selected{/if}>不限</option>
											<option value='0' {if ($query_type=='0')}selected{/if}>未审核</option>
											<option value='1' {if ($query_type=='1')}selected{/if}>已审核</option>
											<option value='2' {if ($query_type=='2')}selected{/if}>已屏蔽</option>
										</select>
									</li> -->
									<li class="ml_10">执照状态：
										<select id='licence_type' name='licence_type' style='width:80px' >
											<option value='9' {if ($licence_type=='9')}selected{/if}>不限</option>
											<option value='1' {if ($licence_type=='1')}selected{/if}>已通过</option>
											<option value='2' {if ($licence_type=='2')}selected{/if}>已允许</option>
											<option value='-2' {if ($licence_type=='-2')}selected{/if}>不通过</option>
											<option value='-1' {if ($licence_type=='-1')}selected{/if}>已上传</option>
											<option value='0' {if ($licence_type=='0')}selected{/if}>未上传</option>
										</select>
									</li>
									<li class="ml_10">是否被选走：
										<select id='statusId' name='statusId' style='width:80px' >
											<option value='9' {if ($statusId=='9')}selected{/if}>不限</option>
											<option value='1' {if ($statusId=='1')}selected{/if}>已被选走</option>
											<option value='-1' {if ($statusId=='-1')}selected{/if}>未被选走</option>
										</select>
									</li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" style="width:250px;" value="{$q}" placeholder="企业名称/用户名/地区/邮箱/电话"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px; ">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&query_day={$query_day}&licence_type={$licence_type}&statusId={$statusId}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共{$num_all}条
										</div>
										<div class="paginator" style="float:left;">{$showpage}</div>
									</div>
									<div style="clear:both;"></div>
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
										<th width="50px" style="display:none;">企业ID</th>
										<th width="50px">用户名</th>
										<th width="150px">企业名称</th>
										<th width="50px" style="display:none;">地区</th>
										<!-- <th width="50px">会员类型</th> -->
										<th width="60px">注册时间</th>
										<!-- <th width="50px">审核时间</th> -->
										<th width="60px">登陆时间</th>
										<!-- <th width="50px">刷新时间</th> -->
										<th width="60px">修改时间</th>
										<th width="50px">信息状态</th>
										<th width="50px">执照状态</th>
										<th width="50px">跟单员</th>
										<th width="80px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="">
										<!-- <td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td> -->
										<td style="display:none;">{$company[cid]}</td>
										<!-- <td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td> -->
										<td>{$company[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank">{$company[cname]}</a></td>
										<td style="display:none;">>{$company[comCityId]}</td>
										<!-- <td>{$company[comType]}</td> -->
										<td>{$company[regTime]}</td>
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[loginTime]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<td>{$company[modTime]}</td>
										<td>{$company[_isCheck]}</td>
										<td>{$company[_licenceCheck]}</td>
										<td>{$company[adminUsername]}</td>
										<td>
											<a class="btn_s" href="/company/company.html?act=to&c_id={$company[_cid]}" target="_blank">进入</a>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<!--{if $company[endFollowTime]<$time}-->
												<a class="btn_s" href="company.html?act=joinTo&c_id={$company[_cid]}" target="_blank">跟单并登录</a>
                                                <a class="btn_s" href="company.html?act=join&c_id={$company[_cid]}">先跟单</a>
											<!--{/if}-->
											<!-- <a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[cid]}">查看</a> -->
											<!-- <a class="btn_s" onclick="Boxy.load('/company/company.html?act=view&c_id={$company[cid]}',{title: '企业详细信息'});" >查看</a> -->
											<!-- <a class="btn_s" onclick="Boxy.load('company.html?act=join&cid={$company[cid]}',{title: '企业信息'});">加入</a> -->
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