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
					<div class="m_bg">企业其他管理 > 企业搜索 > 无地图企业</div>
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
									<li class="ml_10">排序方式：<select id="ordertype" name="ordertype" style="width:80px">
										<option value="" >请选择</option>
										<option value="3" <!--{if $ordertype=='3'}-->selected<!--{/if}-->>登录时间</option>
                                        <option value="1" <!--{if $ordertype=='1'}-->selected<!--{/if}-->>修改时间</option>
										<option value="2" <!--{if $ordertype=='2'}-->selected<!--{/if}-->>注册时间</option>
										<!-- <option value="3" {if $ordertype=='3'}selected{/if}>刷新时间</option> -->
									</select></li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" placeholder="公司名称/用户名/地区" style="width:150px;"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $total>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&ordertype={$ordertype}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$total}条
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
										<th width="3%" style="display:none;">跟单结束时间-分配状态</th>
										<th width="10%">用户名</th>
										<th width="15%">企业名称</th>
										<th width="5%">地区</th>
										<th width="3%">地图</th>
										<!-- <th width="20px">评分</th>
										<th width="50px">会员类型</th> -->
										<th width="6%">注册时间</th>
										<!-- <th width="50px">审核时间</th> -->
										<th width="6%">登陆时间</th>
										<th width="6%">修改时间</th>
										<!-- <th width="5%">刷新时间</th> -->
										<th width="2%">状态</th>
										<th width="10%">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="">
										<td style="display:none;">{$company[cid]}</td>
										<td style="display:none;">{$company[_endFollowTime]}--{$company[assignType]}--{$company[adminId]}</td>
										<td>{$company[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank" class="comLink">{$company[cname]}</a>
										<br />
											<a href="javascript:void(0)" class="cBtns">复制</a></td>
										<!-- <td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td> -->
										<td>{$company[comCityId]}</td>
										<td>{$company[mapStatus]}</td>
										<!-- <td>{$company[comIntegrity]}</td>
										<td>{$company[comType]}</td> -->
										<td>{$company[regTime]}</td>
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[loginTime]}</td>
										<td>{$company[modTime]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<td>{$company[_licenceCheck]}</td>
										<td>
										<div style="display:inline-block;">	
											<a class="btn_s" href="company.html?act=to&c_id={$company[_cid]}" target="_blank">进入</a>
											<a class="btn_s" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}" target="_blank">企业资料</a>
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
				</div>
			</div>
		</div>
		<!--{template company/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function assign(c_id){
	var assign_admin = $("#assign_admin"+c_id).val();
	var admin_id = $("#admin_id"+c_id).val();
	if(assign_admin ==''){
		alert("请选择要分配的对象！");return;
	}
	var data = {'act':'assignSingle','admin_id':admin_id,'assign_admin':assign_admin,'c_id':c_id};
	$.post('assign.html',data,function(json){
		if (json.status==1) {
			alert("转单成功！");
			window.location.reload();
		}else{
			alert("库容已满！");
			window.location.reload();
		}
	},'json');

}
function check(c_id){
	var admin_name = $("#admin_name"+c_id).val();
	$.get( "/admin.html?act=getAdminId&admin_name="+admin_name, function(json){
		if (json.status==1) {
			$("#assign_admin"+c_id).val(json.adminid);
		}else{
			alert("没有找到匹配的名字！");
			window.location.reload();
		}
	},'json');
}

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