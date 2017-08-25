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
					<div class="m_bg">财务管理 > <!--{if $op=='all'}-->总列表<!--{elseif $op=='ischeck'}-->初始列表<!--{elseif $op=='ok1'}-->已支付列表<!--{elseif $op=='ok2'}-->已支付列表<!--{elseif $op=='no'}-->已关闭列表<!--{/if}--></div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--{if in_array('财务新增', $__r)}--><div class="btn icon-1 icon"><a href="pay.html?act=edit">新增</a></div><div class="btn icon-1 icon"><a href="pay.html?act=cutedit">新增扣款</a></div><!--{/if}-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
										<input type="hidden" name="act" value="list">
										<input type="hidden" name="op" value="{$op}">
										<input type="hidden" name="consume_type" value="{$consume_type}">
										<li class="ml_10">开通时间：
											<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
											<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
										</li>
										<li class="ml_10" style="display:none;">创建时间：<select id="query_day" name="query_day" style="width:80px">
												<option value="1" <!--{if $query_day=='1'}-->selected<!--{/if}-->>1天内</option>
												<option value="3" <!--{if $query_day=='3'}-->selected<!--{/if}-->>3天内</option>
												<option value="5" <!--{if $query_day=='5' || $query_day==''}-->selected<!--{/if}-->>5天内</option>
												<option value="10" <!--{if $query_day=='10'}-->selected<!--{/if}-->>10天内</option>
												<option value="20" <!--{if $query_day=='20'}-->selected<!--{/if}-->>20天内</option>
												<option value="30" <!--{if $query_day=='30'}-->selected<!--{/if}-->>30天内</option>
												<option value="60" <!--{if $query_day=='60'}-->selected<!--{/if}-->>60天内</option>
												<option value="90" <!--{if $query_day=='90'}-->selected<!--{/if}-->>90天内</option>
												<option value="120" <!--{if $query_day=='120'}-->selected<!--{/if}-->>120天内</option>
												<option value="180" <!--{if $query_day=='180'}-->selected<!--{/if}-->>180天内</option>
												<option value="240" <!--{if $query_day=='240'}-->selected<!--{/if}-->>240天内</option>
												<option value="360" <!--{if $query_day=='360'}-->selected<!--{/if}-->>360天内</option>
												<option value="999999" <!--{if $query_day=='999999'}-->selected<!--{/if}-->>全部</option>
											</select></li>
										<!--{if $consume_type==1}-->
										<li class="ml_10">支付类型:
											<select name="pay_type" id="pay_type">
												<option value="">请选择</option>
												<!--{loop $__pay_typeStr $k $value}-->
												<option value="{$k}" <!--{if $pay_type==$k}-->selected<!--{/if}-->>{$value}</option>
												<!--{/loop}-->
											</select>
										</li>
										<!--{/if}-->
										<li class="ml_10">类型:
											<select name="consume_type">
												<option value="">请选择</option>
												<option value="1" <!--{if $consume_type==1}-->selected<!--{/if}-->>充值</option>
												<option value="2" <!--{if $consume_type==2}-->selected<!--{/if}-->>消费</option>
											</select>
										</li>
										<li class="ml_10">　用户名：<input type="text" name="pay_userid" id="pay_userid" style="width:80px;" value="{$pay_userid}"></li>
										<li class="ml_10">　企业名称：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
										<li class="ml_10"><button type="submit" class="btn_gray btn_search btn_change" >查 询</button></li>
										<li class="ml_10"><a href="excel.php?act=pay&op={$op}&txtStartDate={$startDate}&txtEndDate={$endDate}&pay_type={$pay_type}&consume_type={$consume_type}&pay_userid={$pay_userid}&query={$q}" class="excelBtn">导出excel</a></li>
									</form>
								</ul>
								<div style="clear:both;"></div>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="pay.html?act=list&op={$op}&consume_type={$consume_type}&txtStartDate={$startDate}&txtEndDate={$endDate}&pay_type={$pay_type}&consume_type={$consume_type}&pay_type={$pay_type}&pay_userid={$pay_userid}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
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
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="3%">ID</th>
										<th width="4%">用户名</th>
										<!-- <th width="4%">姓名</th> -->
										<th width="8%">公司名称</th>
										<th width="8%">类型</th>
										<th width="8%">总金额（元）</th>
										<th width="8%">创建时间</th>
										<th width="5%">审核</th>
										<th width="10%">操作</th>
									</tr>
								</thead>
								<!--{loop $pay $pay1}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td>{$pay1[pay_id]}</td>
										<td>{$pay1[username]}</td>
										<!-- <td>{$pay1[xingming]}</td> -->
										<td>{$pay1[cname]}</td>
										<td><!--{if $pay1[pay_type]<>5}-->{$__pay_typeStr[$pay1[pay_type]]}<!--{else}-->消费<!--{/if}--></td>
										<td>{$pay1[pay_money]}</td>
										<td>{$pay1[pay_createTime]}</td>
										<td><!--{if $pay1[pay_status]==1}-->已支付<!--{elseif $pay1[pay_status]==2}-->成功<!--{elseif $pay1[pay_status]==3}-->已关闭<!--{else}-->失败<!--{/if}--></td>
										<td>
											<a class="btn_s" onclick="Boxy.load('pay.html?act=info&pay_id={$pay1[pay_id]}',{title: '充值/消费详情'});">查看</a>
											<!--{if $pay1[pay_status]==0}-->
												<!--{if in_array('已支付', $__r)}-->
													<a class="btn_s" onclick="checkOk1('{$pay1[pay_id]}')">已支付</a>
												<!--{/if}-->
												<!--{if in_array('已关闭', $__r)}-->
													<a class="btn_s" onclick="checkNo('{$pay1[pay_id]}')">已关闭</a>
												<!--{/if}-->
											<!--{elseif $pay1[pay_status]==1}-->
												<!--{if in_array('已结算', $__r)}-->
													<a class="btn_s" onclick="checkOk2('{$pay1[pay_id]}')">已结算</a>
												<!--{/if}-->
											<!--{elseif $pay1[pay_status]==2}-->
												<a class="btn_s" style="display:none;" onclick="Boxy.load('pay.html?act=cutmoney&cid={$pay[pay_userid]}',{title: '扣款信息'});">扣款</a>
											<!--{elseif $pay1[pay_status]==3}-->
												<!--{if in_array('财务初始', $__r)}-->
													<a class="btn_s" onclick="checkIscheck('{$pay1[pay_id]}')">初始</a>
												<!--{/if}-->
											<!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
								<!--{if $pay}-->
								<tbody>
									<tr class="">
										<td colspan="4" style="text-align:right;">合计：</td>
										<td colspan="4">{$allMoney}</td>
									</tr>
								</tbody>
								<!--{/if}-->
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template finance/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(){
	cityid=$("#cityid").val();
	$("#quyu1").empty();
	$("#quyu2").empty();
	$("#quyu3").empty();
	quyuarr='<option value="">请选择</option>';
	$.get( "/api/area.html?act=getarea&region_id="+cityid, function( data ){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
	$('#quyu1').append(quyuarr);
	$("#quyu").val('');
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
		$('#quyuid1').hide();
	}else{
		$('#quyuid1').show();
	}
	});
}
cityid=$("#cityid").val();
if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
	$('#quyuid1').hide();
}else{
	$('#quyuid1').show();
}
</script>
<script type="text/javascript">
//已支付
function checkOk1(pay_id){
	if(!pay_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认需要支付吗？')){
		$.post('pay.html',{act:'check_ok1',pay_id:pay_id},function(data){
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
//已关闭
function checkNo(pay_id){
	if(!pay_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认需要关闭吗？')){
		$.post('pay.html',{act:'check_no',pay_id:pay_id},function(data){
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
//已结算
function checkOk2(pay_id){
	if(!pay_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认需要结算吗？')){
		$.post('pay.html',{act:'check_ok2',pay_id:pay_id},function(data){
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
//初始
function checkIscheck(pay_id){
	if(!pay_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认需要初始吗？')){
		$.post('pay.html',{act:'check_ischeck',pay_id:pay_id},function(data){
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
<script type="text/javascript">
	function MM_swapImgRestore() { //v3.0
		var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}
	function MM_preloadImages() { //v3.0
		var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}

	function MM_findObj(n, d) { //v4.01
		var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		if(!x && d.getElementById) x=d.getElementById(n); return x;
	}

	function MM_swapImage() { //v3.0
		var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
</script>
</body>
</html>