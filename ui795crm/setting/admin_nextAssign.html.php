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
					<div class="m_bg">管理员管理 > 分配给 【{$_adminArr['adminUsername']}】</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon" ><a href="admin.html?act=assignlist">返回列表</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="nextassign">
									<input type="hidden" name="admin_id" value="{$admin_id}">
									<li>模糊查询：<input type="text" name="query" id="query" placeholder="用户ID/真实姓名/管理地区" style="width:250px;"></li>
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
													<option value="admin.html?act=nextassign&admin_id={$admin_id}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
					<form  id="postForm" method="post" action="admin.html">
					<input type="hidden" name="admin_id" value="{$admin_id}">
					<input type="hidden" id="act" name="act" value="assignM">
					<div class="main_content">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="5%"></th>
										<th width="5%">用户ID</th>
										<th width="5%">真实姓名</th>
										<th width="5%">所属部门</th>
										<th width="50%">管理地区</th>
										<!-- <th width="5%">上级</th> -->
										<th width="20%">操作</th>
									</tr>
								</thead>
								<tbody>
								<!--{loop $admins $admin}-->
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$admin[adminid]}" ></td>
										<td>{$admin[adminUsername]}</td>
										<td>{$admin[adminName]}</td>
										<td>{$admin[adminUnit]}</td>
										<td>{$admin[adminArea]}</td>
										<!-- <td>{$admin[higher]}</td> -->
										<td><a class="btn_s" onclick="assign('{$admin_id}','{$admin[adminid]}')">分配给[{$_adminArr['adminUsername']}]</a><!-- 
										<a class="btn_s" href="admin.html?act=cancel&admin_id={$admin_id}&nextAdminId={$admin[adminid]}" onclick="return confirm('确认要取消上级吗？');">取消上级</a></td> --></td>
									</tr>
								<!--{/loop}-->
								</tbody>
							</table>
							<!--{if $num_all>0}-->
							<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
								<input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选 <button type="button" onclick="submitCheck('assignM');">确定</button>
							</div>
							<!--{/if}-->
						</div>
					</div>
					</form>
				</div>
			</div>
			<!--<div class="draggle "></div>-->  
		</div>
		<!--{template setting/sidebar}-->
	</div>
</div>
<script type="text/javascript">
//单个分配
function assign(admin_id,nextAdminId){
	if(!admin_id  || !nextAdminId){
		alert('参数错误');
		return;
	}
	if(confirm('确认需要分配给 【'+'{$_adminArr['adminUsername']}'+'】 吗？')){
		$.post('admin.html',{act:'assign',admin_id:admin_id,nextAdminId:nextAdminId},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}
		},'json');
	}
}
//批量分配
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