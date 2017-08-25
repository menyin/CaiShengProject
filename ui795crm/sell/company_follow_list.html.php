<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	#main .quickbar .btns .current {background: #E1F0FA;color:#444; font-weight: bold;}
	.cBtns { display: inline-block; position: relative; padding:3px 10px; color:#444; background: #f2f2f2; border:1px solid #ddd; cursor: pointer; margin:5px 0; _display:none;}
	.cBtns:hover {color:#000; background: #d8d8d8;}
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
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">销售管理 > 待回访企业</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<a href="company.html?act=followlist&ordertype=3&query_day={$query_day}&followType={$followType}&query={$q}" class="btn icon-6 <!--{if $ordertype==3}-->current<!--{/if}-->">最近登录的企业</a>
							<a href="company.html?act=followlist&ordertype=1&query_day={$query_day}&followType={$followType}&query={$q}" class="btn icon-18 <!--{if $ordertype==1}-->current<!--{/if}-->">最近修改的企业</a>
							<a href="company.html?act=followlist&ordertype=2&query_day={$query_day}&followType={$followType}&query={$q}" class="btn  icon-6 <!--{if $ordertype==2}-->current<!--{/if}-->">最近注册的企业</a>
							<a href="company.html?act=followlist&ordertype=4&query_day={$query_day}&followType={$followType}&query={$q}" class="btn icon-6 <!--{if $ordertype==2}-->current<!--{/if}-->">最近点单的企业</a>
							<a href="company.html?act=followlist&ordertype=5&query_day={$query_day}&followType={$followType}&query={$q}" class="btn icon-18 <!--{if $ordertype==5}-->current<!--{/if}-->">最近需要跟进的企业</a>
							<a href="company.html?act=followlist&ordertype=6&query_day={$query_day}&followType={$followType}&query={$q}" class="btn icon-18 <!--{if $ordertype==6}-->current<!--{/if}-->">最近需要回访时间</a>
							<a href="company.html?act=followlist&ordertype=7&query_day={$query_day}&followType={$followType}&query={$q}" class="btn icon-18 <!--{if $ordertype==7}-->current<!--{/if}-->">最近跟单到期时间</a>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<li class="ml_10" style="display:none;">排序方式：<select id="ordertype" name="ordertype" style="width:80px">
										<option value="" >请选择</option>
										<option value="3" <!--{if $ordertype=='3'}-->selected<!--{/if}-->>登录时间</option>
										<option value="1" <!--{if $ordertype=='1'}-->selected<!--{/if}-->>修改时间</option>
										<option value="2" <!--{if $ordertype=='2'}-->selected<!--{/if}-->>注册时间</option>
										<option value="4" <!--{if $ordertype=='4'}-->selected<!--{/if}-->>点单时间</option>
										<option value="5" <!--{if $ordertype=='5'}-->selected<!--{/if}-->>跟进时间</option>
										<option value="6" <!--{if $ordertype=='6'}-->selected<!--{/if}-->>回访时间</option>
										<option value="7" <!--{if $ordertype=='7'}-->selected<!--{/if}-->>到期时间</option>
									</select></li>
									<li class="ml_10">回访天数：
										<select id='query_day' name='query_day' style='width:80px' >
											<option value='1' {if ($query_day=='1')}selected{/if}>1天后</option>
											<option value='2' {if ($query_day=='2')}selected{/if}>2天后</option>
											<option value='3' {if ($query_day=='3')}selected{/if}>3天后</option>
											<option value='7' {if ($query_day=='7')}selected{/if}>7天后</option>
											<option value='14' {if ($query_day=='14')}selected{/if}>14天后</option>
											<option value='30' {if ($query_day=='30')}selected{/if}>30天后</option>
										</select>
									</li>
									<li class="ml_10">跟进类型：
										<select id="followType" name="followType" style="width:80px">
											<option value=''>请选择</option>
											<!--{loop $__type597Str $key $value}-->
												<option value='{$key}' <!--{if $followType==$key}--> selected<!--{/if}-->>{$value}</option>
											<!--{/loop}-->
										</select>
									</li>
									<!-- <li class="ml_10">回访时间：
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li> -->
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="企业名称"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									<li class="ml_10" style="display:none;">总共：<font color="red">{$num_all}</font> 条</li>
								   </form>
								</ul>
								<!--{if $res[0]['total_found']>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&ordertype={$ordertype}&query_day={$query_day}&followType={$followType}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共{$res[0]['total_found']}条<!--{if $res[0]['total_found']>=5000}--><font color="red">[显示前5000条]</font><!--{/if}-->
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
						<input type="hidden" id="act" name="act" value="followlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="10px" style="display:none;"></th>
										<th width="50px">用户名</th>
										<th width="150px">企业名称</th>
										<th width="50px">地区</th>
										<th width="50px">跟进类型</th>
										<!--{if $ordertype<>2}--><th width="50px">注册时间</th><!--{/if}-->
										<!--{if $ordertype<>3}--><th width="50px">登陆时间</th><!--{/if}-->
										<!--{if $ordertype<>1}--><th width="50px">修改时间</th><!--{/if}-->
										<!--{if $ordertype<>5}--><th width="50px">跟进时间</th><!--{/if}-->
										<!--{if $ordertype<>6}--><th width="50px">回访时间</th><!--{/if}-->
										<th width="50px">{$orderTitle}</th>
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="" style="background:<!--{if $company['pStatus']}-->#C7E3BD;<!--{else}-->#E8AEA4;<!--{/if}-->">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td>
										<!--<td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td>-->
                                       <td>{$company[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank" style="display:block;padding: 3px;font-size: 13px;font-weight: 700;" class="comLink">{$company[cname]}</a>
										<a href="/company/company.html?act=to&c_id={$company[_cid]}" class="btn_s"  target="_blank">登录前台</a>
										<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}">查看详情</a>
										<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
										<a href="javascript:void(0)" class="cBtns">复制</a>
										</td>
										<td>{$company[comCityId]}</td>
										<td>{$__type597Str[$company[followType]]}</td>
										<!--{if $ordertype<>2}--><td>{$company[_regTime]}</td><!--{/if}-->
										<!--{if $ordertype<>3}--><td>{$company[_loginTime]}</td><!--{/if}-->
										<!--{if $ordertype<>1}--><td>{$company[_modTime]}</td><!--{/if}-->
										<!--{if $ordertype<>5}--><td>{$company[_followTime]}</td><!--{/if}-->
										<!--{if $ordertype<>6}--><td>{$company[_nextTime]}</td><!--{/if}-->
										<td>{$company[resultTime]}</td>
										<td>
                                        <div style="display:inline-block;">	
											<a class="btn_s" href="company.html?act=follow&c_id={$company[_cid]}" target="_blank">跟进</a>
											<a class="btn_s" href="loginlog.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}" target="_blank">登录日志</a>
											<a class="btn_s" href="editlog.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}">修改日志</a>
											<a class="btn_s" href="contract.html?act=comlist&op=all&c_id={$company[_cid]}">合同管理</a>
											<a class="btn_s" onclick="Boxy.load('/company/company.html?act=psw&c_id={$company[_cid]}',{title: '企业密码重置'});">修改密码</a>
											<a class="btn_s" onclick="Boxy.load('/company/company.html?act=username&c_id={$company[_cid]}',{title: '企业用户名修改'});">修改用户名</a>
											<!--{if !$company['delStatus'] && $company[adminId]==$_SESSION[adminid] && $company[endFollowTime]>$time}-->
												<a class="btn_s" onclick="Boxy.load('company.html?act=delApply&c_id={$company[_cid]}',{title: '企业提交删除申请'});">提交删除</a>
											<!--{elseif $company['delStatus']}-->
												<a class="btn_s" href="company.html?act=cancel_del&c_id={$company[_cid]}"><span style="color:red;">恢复申请并跟单</span></a>
											<!--{/if}-->
											<!-- <a class="btn_s" onclick="Boxy.load('company.html?act=follow&c_id={$company[_cid]}',{title: '企业跟进回访'});">跟进</a> -->
                                        </div>
										<!--{if $company['delStatus']}-->
											<div style="display:inline-block;">{$company[str]}</div>
										<!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</form>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<!--{if $res[0]['total_found']>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&ordertype={$ordertype}&query_day={$query_day}&followType={$followType}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共{$res[0]['total_found']}条<!--{if $res[0]['total_found']>=5000}--><font color="red">[显示前5000条]</font><!--{/if}-->
										</div>
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
		<!--{template sell/sidebar}-->
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('.cBtns').each(function(index, elem) {
		clip = new ZeroClipboard.Client();
		clip.setHandCursor(true);
		ZeroClipboard.setMoviePath("//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.swf");
		clip.setText($('.comLink').eq(index).text());
		clip.addEventListener('complete', function(client, text) {
			alert('复制成功!');
		});
		clip.glue(this);
	});

	$('.cnDiv').each(function(index,elem){
		$(this).appendTo($('.cBtns').eq(index));
	});

	// IE8以下隐藏按钮，因为不支持
	if($.browser.msie && $.browser.version < 8){
		$('.cBtns').hide();
	}

});
</script>
</body>
</html>