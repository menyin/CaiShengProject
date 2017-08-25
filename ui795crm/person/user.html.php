<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<style>
	.excelBtn {position: relative; top:-3px; }
</style>
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
					<div class="m_bg">个人审核 > 用户总表</div>
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
											<option value='' >全部</option>
											<option value='1' {if ($user_type=='1')}selected{/if}>个人</option>
											<option value='2' {if ($user_type=='2')}selected{/if}>企业</option>
										</select>
									</li>
									<li class="ml_10">搜索类型：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value='1' <!--{if ($query_type=='1')}-->selected<!--{/if}-->>用户名</option>
											<option value='2' <!--{if ($query_type=='2')}-->selected<!--{/if}-->>邮箱</option>
											<option value='3' <!--{if ($query_type=='3')}-->selected<!--{/if}-->>手机</option>
										</select>
									</li>
									<li class="ml_10">关键字：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<ul style="clear:both;padding-top:10px;">
									<form method="get" action="/person/excel.php">
									<li class="ml_10">注册时间：
										<input type="hidden" name="act" value="excel">
										<input type="text" style='width:120px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" required="required" readonly="readonly"/>-
										<input type="text" style='width:120px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10"><button type="submit" class="excelBtn" >导出excel</button></li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">
										<div style="float:left;">每页：
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="user.html?act={$act}&op={$op}&query_day={$query_day}&user_type={$user_type}&query_type={$query_type}&query={$q}{$value}" {if $pp==$key}selected{/if}>{$key}</option>
												<!--{/loop}-->
											</select>条 共{$num_all}条 <!--{if $num_all>2000}-->显示前<font color="red">2000</font>条<!--{/if}-->
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
										<!-- <th class="td1" width="10px"></th> -->
										<th width="60px" style="display:none;">用户ID</th>
										<th width="20%">用户名</th>
										<th width="20%">姓名/企业名称</th>
										<th width="5%">类型</th>
										<th width="6%">邮箱</th>
										<th width="6%">QQ</th>
										<th width="50px" style="display:none;">邮箱验证</th>
										<th width="10%">手机/电话</th>
										<th width="50px" style="display:none;">手机验证</th>
										<!-- <th width="50px">余额</th> -->
										<th width="15%">注册时间</th>
										<th width="5%">来源</th>
										<!--{if $user[type]==1}-->
											<th width="15%">操作</th>
										<!--{/if}-->
									</tr>
								</thead>
								<!--{loop $users $user}-->
								<tbody>
									<tr class="">
										<!-- <td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$resume[rid]}" ></td> -->
										<td style="display:none;">{$user['uid']}</td>
										<td><!--{if $user[type]==2}--><a target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$user['_rid']}">{$user['username']}</a><!--{elseif $user['type']==1 && $user['rid']}--><a target="_blank" href="check_resume.html?act=view&rid={$user['_rid']}">{$user['username']}</a><!--{else}-->{$user['username']}[无简历]<!--{/if}--></td>
										<td><!--{if $user['type']==2}-->{$user['cname']}<!--{else}-->{$user['realname']}<!--{/if}--></td>
										<td><!--{if $user['type']==2}-->企业<!--{else}-->个人<!--{/if}--></td>
										<td>{$user['email']}</td>
										<td>{$user['qq']}</td>
										<td style="display:none;"><!--{if $user['emailCheck']==1}-->√<!--{else}-->?<!--{/if}--></td>
										<td>{$user['mobile']}</td>
										<td style="display:none;"><!--{if $user['mobileCheck']==1}-->√<!--{else}-->?<!--{/if}--></td>
										<!-- <td>{$user['money']}</td> -->
										<td>{$user['regdate']}</td>
										<td>{$user['sourceStr']}</td>
										<!--{if $user['type']==1}-->
											<td>
												<a class="btn_s" href="person_search.html?act=to&r_id={$user['_rid']}" target="_blank">进入</a>
												<!--{if $user['mobile'] && $user['mobileCheck']==1}
													<a class="btn_s" onclick="Boxy.load('user.html?act=cert_mobile&r_id={$user[_rid]}',{title: 	'手机号码认证'});">编辑</a>
												{else}
													<a class="btn_s" onclick="Boxy.load('user.html?act=cert_mobile&r_id={$user[_rid]}',{title: 	'手机号码认证'});">编辑</a>
												{/if}-->
												<a class="btn_s" onclick="Boxy.load('person_search.html?act=psw&r_id={$user['_rid']}',{title: 	'密码重置'});">密码</a>
												<a class="btn_s" onclick="Boxy.load('user.html?act=uname&r_id={$user[_rid]}',{title: '用户名修改'});">用户名</a>
												<a class="btn_s" onclick="del('{$user[_rid]}')">删除</a>
											</td>
										<!--{/if}-->
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
<script type="text/javascript">
//删除
function del(r_id){
	if(!r_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认要删除吗？')){
		$.post('user.html',{act:'del',r_id:r_id},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
				window.history.go();
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}
		},'json');
	}
}
</script>
</body>
</html>