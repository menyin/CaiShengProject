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
					<div class="m_bg">个人审核 > 个人搜索</div>
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
									<li class="ml_10">搜索类型：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value='1' <!--{if ($query_type=='1')}-->selected<!--{/if}-->>用户名</option>
											<option value='2' <!--{if ($query_type=='2')}-->selected<!--{/if}-->>邮箱</option>
											<option value='3' <!--{if ($query_type=='3')}-->selected<!--{/if}-->>手机</option>
											<option value='4' <!--{if ($query_type=='4')}-->selected<!--{/if}-->>姓名</option>
											<!-- <option value='5' {if ($query_type=='5')}selected{/if}>简历编号</option> -->
											<option value='6' <!--{if ($query_type=='6')}-->selected<!--{/if}-->>地区</option>
										</select>
									</li>
									<li class="ml_10" style="display:<!--{if $query_type=='6'}-->block;<!--{else}-->none<!--{/if}-->">按城市：
										<input type="hidden" id="regionId" name="regionId"/>
										<input type="text" style="" class="text" id="region" name="region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true" value="{$_GET['region']}"> 
										<script language="javascript">
											var areaOdjid='regionId'; 
											var areaOdjstr='region';
											var areaOdjProvice=1;//是否省可选
											var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
											var areaOdjnumber=1;//数量，如果唯一值，则立即返回
										</script>
											<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$_GET['txtStartDate']}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
											<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$_GET['txtEndDate']}" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>

									<li class="ml_10" style="display:<!--{if $query_type=='6'}-->none;<!--{else}-->block<!--{/if}-->"><input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
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
													<option value="person_search.html?act={$act}&query_type={$query_type}&regionId={$_GET['regionId']}&region={$_GET['region']}&txtStartDate={$_GET['txtStartDate']}&txtEndDate={$_GET['txtEndDate']}&query={$q}{$value}" {if $pp==$key}selected{/if}>{$key}</option>
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
										<th width="50px">用户名</th>
										<th width="50px">姓名</th>
										<th width="50px">性别</th>
										<th width="50px">手机</th>
										<th width="50px">邮箱</th>
										<th width="66px">注册时间</th>
										<th width="66px">刷新时间</th>
										<th width="66px">修改时间</th>
										<th width="50px">审核</th>
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $data $resume}-->
								<tbody>
									<tr class="">
										<!-- <td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$resume[rid]}" ></td> -->
										<td style="display:none;">{$resume[rid]}</td>
										<td><a target="_blank" href="check_resume.html?act=view&rid={$resume[_rid]}">{$resume[username]}</a></td>
										<td><a href="check_resume.html?act=view&rid={$resume[_rid]}" target="_blank">{$resume[realname]}</a></td>
										<td>{$resume[_gender]}</td>
										<td>{$resume[mobile]}</td>
										<td>{$resume[email]}</td>
										<td>{$resume[_createTime]}</td>
										<td>{$resume[_updateTime]}</td>
										<td>{$resume[_modTime]}</td>
										<td>{$resume[_isCheck]}</td>
										<td>
											<a class="btn_s" href="person_search.html?act=to&r_id={$resume[_rid]}"  target="_blank">进入</a>
											<a class="btn_s" onclick="Boxy.load('person_search.html?act=psw&r_id={$resume[_rid]}',{title: 	'密码重置'});">密码</a>
											<a class="btn_s"  onclick="del('{$resume[_rid]}')">删除</a>
											<!-- {if ($resume[ischeck]==0)} -->
											<a class="btn_s" onClick="javascript:theForm_Submit('{$resume[_rid]}',1,'1')">通过</a>
											<a class="btn_s" onclick="Boxy.load('isCheckNo.html?r_id={$resume[_rid]}&key=1',{title: 	'不通过理由'});">屏蔽</a>
											<!-- {else} -->
												<!-- {if ($resume[ischeck]==1)} -->
												<a class="btn_s" onclick="Boxy.load('isCheckNo.html?r_id={$resume[_rid]}&key=1',{title: 	'不通过理由'});">屏蔽</a>
												<!-- {/if} -->
												<!-- {if ($resume[ischeck]==2)} -->
												<a class="btn_s" onClick="javascript:theForm_Submit('{$resume[_rid]}',1,'1')">通过</a>
												<!-- {/if} -->
											<!-- {/if} -->
											<a class="btn_s" onclick="Boxy.load('person_search.html?act=note&r_id={$resume[_rid]}',{title: 	'简历备注'});">备注</a>
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
	var q=document.getElementById('query').value,
		query_type=document.getElementById('query_type').value;
	if(q==''&&query_type<6){
		alert("搜索条件不能为空！");
		return;
	}else{
		$("#searchFrom").submit();
	}
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
$('#query_type').change(function(){
	if($(this).val()==6){
		$(this).parent().next().show();
		$('#query').parent().hide();
	}else{
		$(this).parent().next().hide();
		$('#query').parent().show();
	}
})
</script>
</body>
</html>