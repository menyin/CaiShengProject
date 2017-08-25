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
					<div class="m_bg">个人审核 > 简历审核 > {$thisTitle}</div>
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
									<li class="ml_10">修改期限：
										<select id='query_day' name='query_day' style='width:80px' >
											<option value='1' <!--{if ($query_day=='1')}-->selected<!--{/if}-->>1天内</option>
											<option value='3' <!--{if ($query_day=='3')}-->selected<!--{/if}-->>3天内</option>
											<option value='5' <!--{if ($query_day=='5')}-->selected<!--{/if}-->>5天内</option>
											<option value='10' <!--{if ($query_day=='10')}-->selected<!--{/if}-->>10天内</option>
											<option value='20' <!--{if ($query_day=='20')}-->selected<!--{/if}-->>20天内</option>
											<option value='30' <!--{if ($query_day=='30')}-->selected<!--{/if}-->>30天内</option>
											<option value='60' <!--{if ($query_day=='60')}-->selected<!--{/if}-->>60天内</option>
											<option value='90' <!--{if ($query_day=='90')}-->selected<!--{/if}-->>90天内</option>
											<option value='120' <!--{if ($query_day=='120')}-->selected<!--{/if}-->>120天内</option>
											<option value='180' <!--{if ($query_day=='180')}-->selected<!--{/if}-->>180天内</option>
											<option value='240' <!--{if ($query_day=='240')}-->selected<!--{/if}-->>240天内</option>
											<option value='360' <!--{if ($query_day=='360')}-->selected<!--{/if}-->>360天内</option>
											<option value='999999' <!--{if ($query_day=='999999')}-->selected<!--{/if}-->>全部</option>
										</select>
									</li>
									<!-- <li class="ml_10"><select id="ordertype" name="ordertype" style="width:80px">
										<option value="1" {if $ordertype=='1'}selected{/if}>注册时间</option>
										<option value="2" {if $ordertype=='2'}selected{/if}>修改时间</option>
										<option value="3" {if $ordertype=='3'}selected{/if}>更新时间</option>
									</select></li> -->
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$_GET['query']}" placeholder="真实姓名"></li>
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
													<option value="check_resume.html?act={$act}&op={$op}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
						<form  id="form1" method="post" action="check_resume.html?act=checkM"  target="_blank">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<!--{if $op=='ischeck'||$op=='no'}--><th class="td1" width="10px"></th><!--{/if}-->
										<th width="80px" style="display:none;">简历ID</th>
										<th width="160px">姓名</th>
										<th width="50px">性别</th>
										<th width="160px">现居住地</th>
										<th width="160px">注册时间</th>
										<th width="80px">修改时间</th>
										<th width="80px">更新时间</th>
										<th width="50px">审核</th>
										<!--{if ($op=='no')}-->
											<th width="160px">屏蔽原因</th>
										<!--{/if}-->
										<th width="80px">操作</th>
									</tr>
								</thead>
								<!--{loop $data $resume}-->
								<tbody>
									<tr class="">
										<!--{if $op=='ischeck'||$op=='no'}--><td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$resume[_rid]}" ></td><!--{/if}-->
										<td style="display:none;">{$resume[rid]}</td>
										<td><a href="http://bj.{ROOT_DOMAIN}/resume.html?rid={$resume[_rid]}" target="_blank">{$resume[realname]}</a></td>
										<td>{$resume[_gender]}</td>
										<td>{$resume[residence]}</td>
										<td>{$resume[_createTime]}</td>
										<td>{$resume[_modTime]}</td>
										<td>{$resume[_updateTime]}</td>
										<td>{$resume[_isCheck]}</td>
										<!--{if ($op=='no')}-->
											<td>{$resume[reply]} ({$resume[createtime]}屏蔽)</td>
										<!--{/if}-->
										<td><a class="btn_s" href="person_search.html?act=to&r_id={$resume[_rid]}" target="_blank">进入</a></td>
										<!-- <td>
											{if ($resume[ischeck]==0)}
											<a class="btn_s" onClick="javascript:theForm_Submit('{$resume[_rid]}',1,'1')">通过</a>
											<a class="btn_s" onclick="Boxy.load('isCheckNo.html?r_id={$resume[_rid]}&key=1',{title: 	'不通过理由'});">屏蔽</a>
											{else}
												{if ($resume[ischeck]==1)}
												<a class="btn_s" onclick="Boxy.load('isCheckNo.html?r_id={$resume[_rid]}&key=1',{title: 	'不通过理由'});">屏蔽</a>
												{/if}
												{if ($resume[ischeck]==2)}
												<a class="btn_s" onClick="javascript:theForm_Submit('{$resume[_rid]}',1,'1')">通过</a>
												{/if}
											{/if}
										</td> -->
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
						<!--{if $op=='ischeck'||$op=='no'}-->
							<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
									<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label><button type="submit" style="margin:10px 5px 0 5px ;">查看简历</button>
							</div>
						<!--{/if}-->
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template person/sidebar}-->
	</div>
</div>
</body>
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
</html>