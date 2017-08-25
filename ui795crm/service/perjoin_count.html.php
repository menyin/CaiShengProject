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
					<div class="m_bg">简历数管理 > 统计列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--<div class="btn icon-1 icon"><a href="dingxiang.html?act=add">新增首页定向价格</a></div>
							--><div class="btn icon-8 icon">{$com['cname']}</div>
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get" action="/service/resumeCount.html">
										<input type="hidden" name="act" value="perjoin">
										<input type="hidden" name="c_id" value="{$_cid}">
										<li class="ml_10">分类查询:
											<select id="checktype" name="checktype">
												<option value="">请选择</option>
												<option value="1" <!--{if $checktype==1}-->selected<!--{/if}-->>按天</option>
												<option value="2" <!--{if $checktype==2}-->selected<!--{/if}-->>按月</option>
											</select>
										</li>
										<li class="ml_10">时间：<input type="text" name="startdate" id='startTime'  value="{$startdate}" size="10" onClick="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'%y-%M-%d'})" onchange="validTime();">--<input type="text" name="enddate" id='endTime' value="{$enddate}" onClick="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'%y-%M-%d'})" onchange="validTime();" size="10"></li>
										<li class="ml_10"><button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
										</li>
									</form>
								</ul>
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
										<th width="20%">时间</th>
										<th width="20%">收到总简历数</th>
										<th width="20%">未删除简历数</th>
										<th width="20%">已删除简历数</th>
									</tr>
								</thead>
								<tbody data-bind="foreach: items">
									<!--{if $checktype==''}-->
										<tr class="">
											<td>{$curent}</td>
											<td>{$joinNumber1}</td>
											<td>{$joinNumber2}</td>
											<td>{$joinNumber3}</td>
										</tr>
									<!--{elseif $checktype>0}-->
										<!--{loop $result1 $_result}-->
										<tr class="">
											<td>{$_result[count_time]}</td>
											<td>{$_result[joinNumber1]}</td>
											<td>{$_num2[$_result[count_time]]}</td>
											<td>{$_num3[$_result[count_time]]}</td>
										</tr>
										<!--{/loop}-->
									<!--{/if}-->
									<!--{if $checktype>0}-->
									<tr class="">
										<td>合计</td>
										<td>{$allmoney1}</td>
										<td>{$allmoney2}</td>
										<td>{$allmoney3}</td>
									</tr>
									<!--{/if}-->
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{if $_SESSION['adminUnit']=='销售部'}-->
		<!--{template sell/sidebar}-->
		<!--{else}-->
		<!--{template service/sidebar}-->
		<!--{/if}-->
	</div>
</div>
<script type="text/javascript">
		function validTime(){
			var startTime=$("#startTime").val();
			var endTime=$("#endTime").val();
			var arr1 = startTime.split("-");
			var arr2 = endTime.split("-");
			var date1=new Date(parseInt(arr1[0]),parseInt(arr1[1])-1,parseInt(arr1[2]),0,0,0); 
			var date2=new Date(parseInt(arr2[0]),parseInt(arr2[1])-1,parseInt(arr2[2]),0,0,0);
			if(date1.getTime()>date2.getTime()) {
				alert('结束日期不能小于开始日期',this);
				$("#endTime").val('');
				return false;
			}else{
				return true;
			}
				return false;
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