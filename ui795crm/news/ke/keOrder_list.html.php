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
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
										<input type="hidden" name="op" value="{$op}">
										<li class="ml_10">开通时间：
											<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$_GET['txtStartDate']}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
											<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$_GET['txtEndDate']}" onclick="WdatePicker()" required="required" readonly="readonly"/>
										</li>
										<li class="ml_10">支付类型:
											<select name="payType" id="payType">
												<option value="">请选择</option>
												<!--{loop $_payType $k $val}-->
												<option value="{$k}" <!--{if $_GET['payType']==$k}-->selected<!--{/if}-->>{$val}</option>
												<!--{/loop}-->
											</select>
										</li>
										<li class="ml_10">用户类型:
											<select name="userType" id="userType">
												<option value="">请选择</option>
												<!--{loop $_userType $k $val}-->
												<option value="{$k}" <!--{if $_GET['userType']==$k}-->selected<!--{/if}-->>{$val}</option>
												<!--{/loop}-->
											</select>
										</li>
										<li class="ml_10">　
											用户名：<input type="text" name="userName" id="userName" style="width:80px;" value="{$_GET['userName']}">
										</li>
										<li class="ml_10"><button type="submit" class="btn_gray btn_search btn_change" >查 询</button></li>
										<li class="ml_10"><a href="/news/ke/keOrder.html?act=daochu" class="excelBtn">导出excel</a></li>
									</form>
								</ul>
								<div style="clear:both;"></div>
								<!--{if $keorderRows['count']>0}-->
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
										<th width="8%">用户类型</th>
										<th width="8%">课程id</th>
										<th width="8%">总金额（元）</th>
										<th width="8%">有效期限（天）</th>
										<th width="8%">支付类型</th>
										<th width="8%">支付状态</th>
										<th width="8%">支付宝或微信的订单</th>
										<th width="8%">创建时间</th>
										<th width="8%">支付时间</th>
										<!-- <th width="5%">审核</th> -->
										<th width="10%">操作</th>
									</tr>
								</thead>
								<!--{loop $keorderRows['list'] $val}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td>{$val['orderNo']}</td>
										<td>{$val['username']}</td>
										<td>{$_userType[$val['userType']]}</td>
										<td>{$val['product']}</td>
										<td>{$val['money']}</td>
										<td>{$val['days']}</td>
										<td>{$_payType[$val['payType']]}</td>
										<td>{$_statusType[$val['status']]}</td>
										<td>{$val['trade_no']}</td>
										<td>{$val['_createTime']}</td>
										<td>{$val['_payTime']}</td>
										<td></td>
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