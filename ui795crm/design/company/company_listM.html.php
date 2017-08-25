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
					<div class="m_bg">企业其他管理 > 企业搜索 > 批量改单</div>
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
								<ul style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" placeholder="公司名称/用户名/地区" style="width:400px;"></li>
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
													<option value="companyM.html?act={$act}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条<!--{if $res[0]['total_found']>=1000}--><font color="red">[显示前1000条]</font><!--{/if}-->
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
						<form name="listform" action="companyM.html" method="post" >
						<input type="hidden" id="act" name="act" value="joinM">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="1%"></th>
										<th width="3%" style="display:none;">企业ID</th>
										<th width="10%">用户名</th>
										<th width="15%">企业名称</th>
										<th width="5%">地区</th>
										<!-- <th width="20px">评分</th>
										<th width="50px">会员类型</th> -->
										<th width="5%">注册时间</th>
										<!-- <th width="50px">审核时间</th> -->
										<th width="5%">登陆时间</th>
										<th width="5%">修改时间</th>
										<!-- <th width="5%">刷新时间</th> -->
										<th width="2%">状态</th>
										<th width="5%">跟单员</th>
										<th width="25%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $company}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$company[_cid]}" ></td>
										<td  style="display:none;">{$company[cid]}</td>
										<td>{$company[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank">{$company[cname]}</a></td>
										<!-- <td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td> -->
										<td>{$company[comCityId]}</td>
										<!-- <td>{$company[comIntegrity]}</td>
										<td>{$company[comType]}</td> -->
										<td>{$company[regTime]}</td>
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[loginTime]}</td>
										<td>{$company[modTime]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<td>{$company[_licenceCheck]}</td>
										<td>{$company[adminUsername]}</td>
										<td>
											<a class="btn_s" href="company.html?act=to&c_id={$company[_cid]}" target="_blank">进入</a>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}">查看</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=psw&c_id={$company[_cid]}',{title: '企业密码重置'});">密码</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=username&c_id={$company[_cid]}',{title: '企业用户名修改'});">用户名</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=cname&c_id={$company[_cid]}',{title: '企业名称修改'});">公司名</a>
											<!--{if (in_array('企业删除', $__r))}--><a class="btn_s" href="company.html?act=del_company&c_id={$company[_cid]}&do=ok" onclick="return confirm('确认要删除吗？');">删除</a><!--{/if}-->
											<!--{if (in_array('企业免审', $__r))}-->
												<!--{if ($company[licenceCheck]<>1 && $company[licenceCheck]<>2)}-->
													<a class="btn_s" href="company.html?act=check_free&c_id={$company[_cid]}" onclick="return confirm('确认要免审吗？');">免审</a>
												<!--{/if}-->
												<!--{if $company[licenceCheck]==2}-->
													<a class="btn_s" href="company.html?act=cancel_free&c_id={$company[_cid]}" onclick="return confirm('确认要取消免审吗？');">取消免审</a>
												<!--{/if}-->
												<!--{if $company[licenceCheck]==1}-->
													<a class="btn_s" href="company.html?act=cert_reset&c_id={$company[_cid]}" onclick="return confirm('确认要执照重传吗？');">执照重传</a>
												<!--{/if}-->
											<!--{/if}-->
											<a class="btn_s" href="contract.html?act=comlist&op=all&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}">合同管理</a>
											<a class="btn_s" href="log.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}">操作日志</a>
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
						<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
							<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label>
							<label style="float:left;margin-top:10px;"><input type="text" name="adminM" size="5"></label>
							<button type="submit" style="margin:10px 5px 0 5px ;">确定</button>
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
	var admin_id = $("#admin_id").val();
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
</script>
<script type="text/javascript">
function SelectAll(tempControl)
{
	//将除头模板中的其它所有的CheckBox取反
	var theBox=tempControl;
	xState=theBox.checked;
	elem=theBox.form.elements;
	for(i=0;i<elem.length;i++)
	if(elem[i].type=="checkbox" && elem[i].id!=theBox.id)
	{
		if(elem[i].checked!=xState)
			elem[i].click();
	}
}
</script>
</body>
</html>