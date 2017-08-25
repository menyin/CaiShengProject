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
					<div class="m_bg">客服管理 > 我的企业 > 企业跟进</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a href="javascript:history.go(-1)">返回上一级</a></div> -->
							<span class="gray"></span>
						</div>
					</div>


				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<form id="postForm" name="postForm" method="post" action="/service/company.html">
													<input type="hidden" name="act" id="act" value="followSave" />
													<input type="hidden" name="c_id" id="c_id" value="{$com['_cid']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="ordertype" value="{$ordertype}" />
													<input type="hidden" name="followAdminid" value="{$com['adminId']}" />
													<input type="hidden" name="endFollowTime" value="{$com['endFollowTime']}" />
													<input type="hidden" name="query" value="{$q}" />
													<input type="hidden" name="p" value="{$p}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="15%">企业名称：</td>
																<td width="85%">
																	<span style="float:left;"><b>{$com[cname]}</b>&nbsp;&nbsp;&nbsp;<!--{if $com[comUser] || $com[comPhone] || $com[comMobile]}-->(联系人：{$com[comUser]}；联系电话：{$com[comPhone]}；联系手机：{$com[comMobile]})<!--{/if}-->&nbsp;&nbsp;&nbsp;&nbsp;</span><a class="btn_s"  href="/companyinfo/companyinfo.html?act=view&c_id={$com['_cid']}" target="_blank">查看详情</a><!--{if $com['adminId']==$_SESSION['adminid']&&!$com['vipTime1']}--><a class="btn_s" href="company.html?act=remove&c_id={$com[_cid]}" onclick="return confirm('确认要放弃跟单吗？');">放弃跟单</a><!--{/if}-->
																	<!--{if $com['adminId']==$_SESSION['adminid']}-->
																		<!--{if $com['delStatus']}-->
																			<span>{$com['str']}</span><a class="btn_s" onclick="cancel_del('{$com[_cid]}')"><span style="color:red;">恢复申请并跟单</span></a>
																		<!--{elseif $com['vipTime2']<=$time}-->
																			<a class="btn_s" onclick="Boxy.load('company.html?act=delApply&c_id={$com[_cid]}',{title: '企业提交删除申请'});">提交删除</a>
																		<!--{/if}-->
																	<!--{/if}-->
																</td>
															</tr>
															<!--{if $com['adminId']==$_SESSION['adminid']}-->
															<tr>
																<td class="tb_title">跟进类别：</td>
																<td><select id="comType" name="comType" class="drop" style="width:80px">
																		<option value=''>请选择</option>
																		<!--{loop $__type597Str $key $value}-->
																			<option value='{$key}' <!--{if $com['followType']==$key}--> selected<!--{/if}-->>{$value}</option>
																		<!--{/loop}-->
																	</select>
																</td>
															</tr>
															<tr>
																<td class="tb_title">回访客户类别：</td>
																<td><select id="nextType" name="nextType" class="drop" style="width:80px">
																		<option value=''>请选择</option>
																		<!--{loop $__nextType $key $value}-->
																			<option value='{$key}' <!--{if $com['nextType']==$key}--> selected<!--{/if}-->>{$value}</option>
																		<!--{/loop}-->
																	</select> （A类成交率80%，B类成交率60%，C类成交率40%，D类成交率20%）
																</td>
															</tr>
															<tr>
																<td class="tb_title">回访时间：</td>
																<td><input type="text" id="nextTime" class="text1" name="follow[nextTime]" placeholder="" value="" onClick="WdatePicker({minDate:'%y-%M-%d',maxDate:'{$_endDate}',dateFmt:'yyyy-MM-dd HH:mm:ss'})" readonly="" onchange="nextDate();"><span id="nextId"></span></td>
															</tr>
															<tr>
																<td class="tb_title">跟进记录：</td>
																<td ><textarea type="text" class="text1" id="followText" name="follow[followText]" cols="80" rows="8" message="请输入企业简介">{$follow[followText]}</textarea></td>
															</tr>
															<tr>
																<td class="tb_title">&nbsp;</td>
																<td class="tb_title"><button type="button" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit" onClick="sub();"></button></td>
															</tr>
															<!--{/if}-->
														</table>
													</div>
												</form>
											</div>
										</div>
										<iframe src="/service/company.php?act=followView&c_id={$com[_cid]}" width="100%" height="450" frameborder=0 style="cell_tb_list"></iframe>
										<iframe src="/companyinfo/companyinfo.html?act=contract&c_id={$com[_cid]}" width="96%" height="500" frameborder=0 style="cell_tb_list"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function sub () {
	if($('#nextTime').val() == ''|| typeof($('#nextTime').val()) == 'undefined'){
		alert('回访时间不能为空！');
		return;
	}
	if($('#followText').val() == ''||typeof($('#followText').val()) == 'undefined'){
		alert('跟进内容不能为空！');
		return;
	}
	/*$('#postForm').submit();
	return false;*/
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			//$.message(data.msg, { title: "系统提示", icon: "fail" });
			alert(data.msg);
			window.close();
		}else{
			//$.anchorMsg(data.msg,{icon:"success"});
			alert(data.msg);
			window.close();
		}
	}, clearForm: false});
}
function nextDate(){
	nowTime='{$date1}';
	nextTime=$('#nextTime').val();
	_nextTime=nextTime.substr(0,10);
	diffDate=DateDiff(nowTime,_nextTime);
	str="   <font color=red><b>"+diffDate+"</b>天</font>后回访";
	$('#nextId').html(str);
}
//计算天数差的函数，通用
function  DateDiff(sDate1,  sDate2){//sDate1和sDate2是2002-12-18格式
	var  aDate,  oDate1,  oDate2,  iDays
	aDate  =  sDate1.split("-")
	oDate1  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])    //转换为12-18-2002格式
	aDate  =  sDate2.split("-")
	oDate2  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])
	iDays  =  parseInt(Math.abs(oDate1  -  oDate2)  /  1000  /  60  /  60  /24)    //把相差的毫秒数转换为天数
	return  iDays;
}
</script>
<script type="text/javascript">
//恢复申请并跟单
function cancel_del(c_id){
	if(!c_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认恢复申请并跟单吗？')){
		$.post('company.html',{act:'cancel_del',c_id:c_id},function(data){
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
</script>
</body>
</html>