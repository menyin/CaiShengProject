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
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">管理员管理 > {$title}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon" ><a href="admin.html?act=edit">新增管理员</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="list">
									<input type="hidden" name="op" value="{$op}">
									<li>模糊查询：<input type="text" name="query" id="query" value="{$q}" placeholder="用户ID/真实姓名/管理地区/部门" style="width:250px;"></li>
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
													<option value="admin.html?act=list&op={$op}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
					<form name="listform" id="postForm" action="admin.html" method="post" >
						<input type="hidden" id="act" name="act" value="isbanM">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="3%"></th>
										<th width="10%">用户ID</th>
										<th width="5%">真实姓名</th>
										<th width="5%">所属部门</th>
										<th width="20%">管理地区</th>
										<th width="12%">登录时间</th>
										<th width="5%">客户总数</th>
										<th width="5%">库容</th>
										<th width="5%">状态</th>
										<th width="20%">操作</th>
									</tr>
								</thead>
								<!--{loop $admins $admin}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$admin[adminid]}" ></td>
										<td>{$admin[adminUsername]}</td>
										<td>{$admin[adminName]}</td>
										<td>{$admin[adminUnit]}</td>
										<td>{$admin[adminArea]}</td>
										<td>{$admin[_adminLogintime]}</td>
										<td>{$comNum[$admin[adminid]]}</td>
										<td>{$admin[adminTotal]}</td>
										<td>{$admin[_isban]}</td>
										<td>
											<a class="btn_s" href="admin.html?act=edit&admin_id={$admin[adminid]}">修改</a>
											<!-- <a class="btn_s" href="admin.html?act=nextassign&admin_id={$admin[adminid]}">分配会员</a>
											<a class="btn_s" href="admin.html?act=nextlist&admin_id={$admin[adminid]}">下级列表</a> -->
											<a class="btn_s" onclick="Boxy.load('admin.html?act=password&admin_id={$admin[adminid]}',{title: '修改管理员密码'});">修改密码</a>
											<!--{if $admin[isban]==1}-->
												<a class="btn_s" onclick="del('{$admin[adminid]}')">删除</a>
											<!--{else}-->
												<a class="btn_s" onclick="pass('{$admin[adminid]}')">通过</a>
											<!--{/if}-->
											<!--{if $_SESSION['adminUsername']=='eve'}-->
												<a class="btn_s" href="admin.html?act=do&admin_id={$admin[adminid]}">操作</a>
											<!--{/if}-->
											<!-- <a class="btn_s" href="admin.html?act=delete&admin_id={$admin[adminid]}" onclick="return confirm('确认要删除吗？');">删除</a> -->
											<!--<a class="btn_s" onclick="Boxy.load('admin.html?act=del&uid={$admin[adminid]}',{title: '屏蔽管理员'});">屏蔽管理员</a>-->
											<a class="btn_s" href="javascript:void(0)" onclick="turnCompany({$admin[adminid]});">通过</a><span id="info{$admin[adminid]}" style="display:none">loading......</span>
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
						<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
							<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label>
							<!-- <button type="button" style="margin:10px 5px 0 5px ;" onclick="submitCheck('deleteM');">批量删除</button> -->
							<button type="button" style="margin:10px 5px 0 5px ;" onclick="submitCheck('isbanM');">批量删除</button>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template setting/sidebar}-->
	</div>
</div>
<script type="text/javascript">
//删除
function del(admin_id){
	if(!admin_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认要删除吗？')){
		$.post('admin.html',{act:'del',admin_id:admin_id},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}
		},'json');
	}
}
//通过
function pass(admin_id){
	if(!admin_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认要通过吗？')){
		$.post('admin.html',{act:'pass',admin_id:admin_id},function(data){
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
//批量删除
function submitCheck (check) {
	$("#act").val(check);
	var r = confirm("确定要批量操作?");
	if(r){
		$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
				window.history.go();
				return;
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}

		}, clearForm: false});
	}
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
function turnCompany(id){
	if(!id){
		alert('参数错误');
		return;
	}
		$.ajax({
			type:"post",
			url:"/api/web/admin.api",
			data:{act:'turnCompany',id:id},
			dataType:'json',
			timeout:600000,
			beforeSend:function(){
				$('#info'+id).show();
			},
			success:function(data){
				if(data.msg){
					alert(data.msg);
				}else{
					if(data.status==2){
						turnCompany(id);

					}else if(data.status==1){
						alert('更新成功');
						$('#info'+id).hide();
					}
				}
			}
		});

}
</script>
</body>
</html>