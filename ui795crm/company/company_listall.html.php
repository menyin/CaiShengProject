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
					<div class="m_bg">企业其他管理 > 企业搜索</div>
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
									<li class="ml_10"><!--{if $op=='ok'}-->结束时间：<!--{else}-->新建时间：<!--{/if}-->
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10">按城市：
										<input type="hidden" id="regionId" name="regionId"/>
										<input type="text" style="" class="text" id="region" name="region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true" value="{$_GET['region']}"> 
										<script language="javascript">
											var areaOdjid='regionId'; 
											var areaOdjstr='region';
											var areaOdjProvice=1;//是否省可选
											var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
											var areaOdjnumber=1;//数量，如果唯一值，则立即返回
										</script>
									</li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$query['q']}" placeholder="公司名称/用户名/地区" style="width:150px;"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $total}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&txtStartDate={$startDate}&txtEndDate={$endDate}&ordertype={$ordertype}&query={$query['q']}{$value}" <!--{if $query['pp']==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$res['total_found']}条<!--{if $total>=1000}--><font color="red">[显示前{$total}条]</font><!--{/if}-->
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
										<th width="50px">类型</th>
										<th width="5%">注册时间</th>
										<!-- <th width="50px">审核时间</th> -->
										<th width="5%">登陆时间</th>
										<th width="5%">修改时间</th>
										<th width="5%">最近合同到期</th>
										<th width="5%">最后合同到期</th>
										<!-- <th width="5%">刷新时间</th> -->
										<th width="2%">状态</th>
										<th width="5%">跟单员</th>
										<th width="25%">操作</th>
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
										<td>{$company[statusInfo]}</td>
										<td>{$company[regTime]}</td>
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[loginTime]}</td>
										<td>{$company[modTime]}</td>
										<td>{$company[vipTime1]}</td>
										<td>{$company[vipTime2]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<td>{$company[_licenceCheck]}</td>
										<td>{$company[adminUsername]}
										<div style="width:150px;">
										<form action="assign.html" name="form1" method="post">
											<input type="text" name="admin_name" id="admin_name{$company[cid]}" value="" size="5"><button onClick="check({$company[cid]});" type="button">搜索</button>
											<input type="hidden" name="act" value="assignSingle">
											<input type="hidden" name="admin_id" id="admin_id{$company[cid]}" value="{$company[adminId]}">
											<input type="hidden" name="c_id" id="c_id" value="{$company[cid]}">
											<input type="hidden" name="assign_admin" id='assign_admin{$company[cid]}' value="">
											<button type="button" onClick="assign({$company[cid]});">确定</button>
										</form>
										</div>
										</td>
										<td>
										<div style="display:inline-block;">
											<a class="btn_s" href="company.html?act=to&c_id={$company[_cid]}" target="_blank">进入</a>
											<a class="btn_s" href="/service/company.html?act=follow&c_id={$company[_cid]}"  target="_blank">跟进</a>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}">查看</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=psw&c_id={$company[_cid]}',{title: '企业密码重置'});">密码</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=username&c_id={$company[_cid]}',{title: '企业用户名修改'});">用户名</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=cname&c_id={$company[_cid]}',{title: '企业名称修改'});">公司名</a>
											<!--{if (in_array('企业免审', $__r))}-->
												<!--{if ($company[licenceCheck]<>1 && $company[licenceCheck]<>2)}-->
													<a class="btn_s"  onclick="checkFree('{$company[_cid]}')">免审</a>
												<!--{/if}-->
												<!--{if $company[licenceCheck]==2}-->
													<a class="btn_s" onclick="cancelFree('{$company[_cid]}')">取消免审</a>
												<!--{/if}-->
												<!--{if $company[licenceCheck]==1}-->
													<a class="btn_s" onclick="certReset('{$company[_cid]}')">执照重传</a>
												<!--{/if}-->
											<!--{/if}-->
											<a class="btn_s" href="contract.html?act=comlist&op=all&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$query['q']}&_page={$page}">合同管理</a>
											<a class="btn_s" target="_blank" href="/service/contract.html?act=edit&c_id={$company[_cid]}">新建合同</a>
											<a class="btn_s" href="log.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$query['q']}&_page={$page}" target="_blank">操作日志</a>
											<a class="btn_s" href="/service/loginlog.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$query['q']}&_page={$page}" target="_blank">登录日志</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=note&c_id={$company[_cid]}',{title: '企业备注'});">备注</a>
											<!--{if (in_array('企业删除', $__r))}-->
												<!--{if !$company['delStatus']}-->
													<a class="btn_s" onclick="delCompany('{$company[_cid]}')">删除</a>
												<!--{elseif $company['delStatus']}-->
													<span style="color:red;">已提交删除申请</span>
												<!--{/if}-->
											<!--{/if}-->
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
//免审
function checkFree(cid){
	if(!cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认要免审吗？')){
		$.post('company.php',{act:'check_free',c_id:cid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
}
//取消免审
function cancelFree(cid){
	if(!cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认要取消免审吗？')){
		$.post('company.php',{act:'cert_reset',c_id:cid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
}
//执照重传
function certReset(cid){
	if(!cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认要执照重传吗？')){
		$.post('company.php',{act:'cert_reset',c_id:cid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
}
//删除
function delCompany(cid){
	if(!cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认要删除吗？')){
		$.post('company.php',{act:'del_company',c_id:cid, do1:'ok'},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
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