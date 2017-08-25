<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->

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
					<div class="m_bg">个人审核 > 简历备注</div>
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
									<form method="get" name="searchFrom" id="searchFrom">
									<input type="hidden" name="act" value="{$act}">
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
									<li class="ml_10">按类型：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value="0">请选择</option>
											<!--{loop $typeArr $k $l}-->
												<option value='{$k}' <!--{if ($query_type==$k)}-->selected<!--{/if}-->>{$l}</option>
											<!--{/loop}-->
										</select>
									</li>
									<li class="ml_10">按管理员：
										<select id='adminid' name='adminid' style='width:80px' >
											<option value="0">请选择</option>
											<!--{loop $adminList $k $l}-->
												<option value='{$l[adminid]}' <!--{if ($adminId==$l['adminid'])}-->selected<!--{/if}-->>{$l['adminUsername']}</option>
											<!--{/loop}-->
										</select>
									</li>
									<li class="ml_10">
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$_GET['txtStartDate']}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$_GET['txtEndDate']}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10">
										<button type="button" class="btn_gray btn_search btn_change" onclick="subCheck();" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $total>0}-->
									<div style="float:right; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="person_search.html?act={$act}&query_type={$query_type}&txtStartDate={$_GET['txtStartDate']}&txtEndDate={$_GET['txtEndDate']}{$value}" {if $pp==$key}selected{/if}>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$_total}条<!--{if $_total>=2000}--><font color="red">[显示前{$total}条]</font><!--{/if}-->
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
										<!-- <th class="td1" width="10px"></th> -->
										<th width="60px" style="display:none;">简历ID</th>
										<th width="5%">用户名</th>
										<th width="5%">姓名</th>
										<th width="5%">性别</th>
										<th width="10%">手机</th>
										<th width="5%">类型</th>
										<th width="15%">添加时间</th>
										<th width="20%">内容</th>
										<th width="5%">管理员</th>
										<th width="5%">操作</th>
									</tr>
								</thead>
								<!--{loop $resume $l}-->
								<tbody>
									<tr class="">
										<!-- <td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$resume[rid]}" ></td> -->
										<td style="display:none;">{$l['rid']}</td>
										<td><a target="_blank" href="check_resume.html?act=view&rid={$l['_rid']}">{$l['username']}</a></td>
										<td><a href="check_resume.html?act=view&rid={$l['_rid']}" target="_blank">{$l['realname']}</a></td>
										<td>{$l['_gender']}</td>
										<td>{$l['mobile']}</td>
										<td>{$l['_type']}</td>
										<td>{$l['_createTime']}</td>
										<td>{$l['content']}</td>
										<td>{$l['adminUsername']}</td>
										<td>
											<a class="btn_s" onclick="Boxy.load('person_search.html?act=note&r_id={$l['_rid']}',{title: 	'简历备注'});">备注</a>
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
		<!--{template person/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function subCheck(){
	$("#searchFrom").submit();
}
//删除
function del(rid){
	if(!rid){
		alert('参数错误');
		return;
	}
	if(confirm('确认要删除吗？')){
		$.post('person_search.php',{act:'del',r_id:rid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}
		},'json');
	}
}
function theForm_Submit(rid,ischeck,returnId)
{
	return_Id=parseInt(returnId)+1;
	if(ischeck==1){
		$.getJSON('/api/web/'+'admin.api?act=isCheckOk&rid=' + rid + '&v=' + Math.random(), function(result){
			if(result.status==0) {
				alert('你尚未登录，请先登录！');
				window.history.go();
			}else if(result.status>0) {
				alert('简历通过审核！');
				window.history.go();
			} else {
				alert('操作失败！');
				window.history.go();
			}
		});
	}
	if(ischeck==2){
		txtRemark=document.getElementById('txtRemark').value;
		if(txtRemark==''){
			alert("不通过理由不能为空！");
			return;
		}
		$.getJSON('/api/web/'+'admin.api?act=isCheckNo&rid=' + rid + '&txtRemark=' + txtRemark + '&v=' + Math.random(), function(result){
			if(result.status==0) {
				alert('你尚未登录，请先登录！');
				window.history.go();
			}else if(result.status>0) {
				alert('简历屏蔽成功！');
				window.history.go();
			} else {
				alert('操作失败！');
				window.history.go();
			}
		});
	}
}
/*
$('#query_type').change(function(){
	subCheck();
})
*/
</script>
</body>
</html>