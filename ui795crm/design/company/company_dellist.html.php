<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
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
					<div class="m_bg">企业其他管理 > 企业删除</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a onclick="Boxy.load('company.html?act=edit',{title: '快速注册'});">快速注册</a></div>
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
									<!-- <li class="ml_10">创建时间：<select id="query_day" name="query_day" style="width:80px">
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
									</select></li> -->
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" placeholder="公司名称/用户名/地区" style="width:250px;"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&op={$op}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
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
										<th width="3%" style="display:none;">企业ID</th>
										<th width="15%">企业名称</th>
										<th width="30%">删除理由</th>
										<th width="10%">跟单员</th>
										<th width="10%">最后登录时间</th>
										<th width="10%">申请时间</th>
										<!-- <th width="10%">用户名</th>
										<th width="5%">地区</th>
										<th width="20px">评分</th>
										<th width="50px">会员类型</th>
										<th width="5%">注册时间</th>
										<th width="50px">审核时间</th>
										<th width="5%">登陆时间</th>
										<th width="5%">修改时间</th>
										<th width="5%">刷新时间</th>
										<th width="2%">状态</th> -->
										<th width="25%">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="">
										<td style="display:none;">{$company[cid]}</td>
										<!-- <td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td> -->
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank" class="comLink">{$company[cname]}</a><br/><a href="javascript:void(0)" class="cBtns">复制</a></td>
										<td>{$company[note]}</td>
										<td>{$company[adminName]}</td>
										<td>{$company[_loginTime]}</td>
										<td>{$company[_createTime]}</td>
										<!-- <td>{$company[username]}</td>
										<td>{$company[comCityId]}</td>
										<td>{$company[comIntegrity]}</td>
										<td>{$company[comType]}</td>
										<td>{$company[regTime]}</td>
										<td>{$company[checkTime]}</td>
										<td>{$company[loginTime]}</td>
										<td>{$company[modTime]}</td>
										<td>{$company[updateTime]}</td>
										<td>{$company[_licenceCheck]}</td> -->
										<td>
											<a class="btn_s" href="company.html?act=to&c_id={$company[_cid]}" target="_blank">进入</a>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}">查看</a>
											<a class="btn_s" href="/service/loginlog.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}" target="_blank">登录日志</a>
											<!--{if (in_array('企业删除', $__r))}--><a class="btn_s" href="company.html?act=del_company&c_id={$company[_cid]}&do=ok" onclick="return confirm('确认要删除吗？');">确认删除</a><!--{/if}-->
											<!--{if (in_array('企业删除', $__r))}--><a class="btn_s" href="company.html?act=del_company&c_id={$company[_cid]}&do=no" onclick="return confirm('确认要恢复吗？');">恢复</a><!--{/if}-->
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
		<!--{template company/sidebar}-->
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