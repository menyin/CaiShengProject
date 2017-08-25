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
					<div class="m_bg">开通广告管理 >  已生效广告列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon"><a href="adv.html?act=edit&type={$type}">新增  【{$__advStr[$type]}】  广告</a></div> -->
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="tblist">
										<input type="hidden" name="op" value="{$op}">
										<!-- <li><select id="query_day" name="query_day" style="width:80px">
												<option value="1" {if $query_day=='1'}selected{/if}>1天内</option>
												<option value="3" {if $query_day=='3'}selected{/if}>3天内</option>
												<option value="5" {if $query_day=='5' || $query_day==''}selected{/if}>5天内</option>
												<option value="10" {if $query_day=='10'}selected{/if}>10天内</option>
												<option value="20" {if $query_day=='20'}selected{/if}>20天内</option>
												<option value="30" {if $query_day=='30'}selected{/if}>30天内</option>
												<option value="60" {if $query_day=='60'}selected{/if}>60天内</option>
												<option value="90" {if $query_day=='90'}selected{/if}>90天内</option>
												<option value="120" {if $query_day=='120'}selected{/if}>120天内</option>
												<option value="180" {if $query_day=='180'}selected{/if}>180天内</option>
												<option value="240" {if $query_day=='240'}selected{/if}>240天内</option>
												<option value="360" {if $query_day=='360'}selected{/if}>360天内</option>
												<option value="999999" {if $query_day=='999999'}selected{/if}>全部</option>
											</select></li> -->
										<li>区域查询：
											<select id="cityid" name="cityid" onchange="selectcity();">
													<option value="">全部</option>
													<!--{loop $regions1 $region1}-->
													<option value="{$region1[region_id]}" <!--{if $region1[region_id]==$cityid}-->selected<!--{/if}-->>{$region1[region_name_full]}</option>
													<!--{/loop}-->
											</select>
											<label id="quyuid1" style="display:none;">
											<select id="quyu1" name="quyu1">
													<option value="">请选择</option>
													<!--{loop $regions2 $region2}-->
													<option value="{$region2[region_id]}" <!--{if $region2[region_id]==$quyu1}-->selected<!--{/if}-->>{$region2[region_name_full]}</option>
													<!--{/loop}-->
											</select></label>
										</li>
										<li>位置:
											<select name="advType">
												<option value="-1">请选择</option>
												<!--{loop $__advStr $key=>$adv}-->
												<option value="{$key}" <!--{if $type==$key}-->selected<!--{/if}-->>{$adv}</option>
												<!--{/loop}-->
											</select>
										</li>
										<li>　模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
										<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<div class="paginator" style=""><!--{if $number>0}-->{$showpage}<!--{/if}--></div>
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
										<th class="td1" width="3%" style="display:none;"></th>
										<th width="3%" style="display:none;">广告ID</th>
										<th width="15%">公司名称</th>
										<th width="5%">城市</th>
										<th width="8%">位置</th>
										<th width="8%">天数</th>
										<!-- <th width="3%">排序</th> -->
										<th width="3%">合同生效</th>
										<th width="3%">生效</th>
										<th width="12%">操作</th>
									</tr>
								</thead>
								<!--{loop $advs $adv}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox" class="c2_checkbox" ></td>
										<td style="display:none;">{$adv[caid]}</td>
										<td><a href="{$adv[comUrl]}" target="_blank">{$adv[cname]}</a></td>
										<td>{$adv[region_name_short]}</td>
										<td>{$__advStr[$adv[positionId]]}</td>
										<td>{$adv[week]}天</td>
										<td><!--{if $adv[contractStatus]==2}-->√<!--{else}-->?<!--{/if}--></td>
										<td><!--{if $adv[isnow]==1}-->已生效<!--{else}-->未生效<!--{/if}--></td>
										<td>
											<a class="btn_s" href="contract.html?act=down&caid={$adv[caid]}">下载</a>
											<a class="btn_s" href="contract.html?act=picedit&caid={$adv[caid]}">图片上传</a>
											<!--{if $adv[isnow]==0}--><a class="btn_s" href="contract.html?act=isnow&caid={$adv[caid]}">立即生效</a><!--{/if}-->
											<!--{if $adv[isnow]==1}--><a class="btn_s" href="contract.html?act=stop&caid={$adv[caid]}">暂停</a><!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template design/sidebar}-->
	</div>
</div>
<script type="text/javascript">
		function selectcity(){
			cityid=$("#cityid").val();
			$("#quyu1").empty();
			$("#quyu2").empty();
			$("#quyu3").empty();
			quyuarr='<option value="">请选择</option>';
			$.get( "/area.html?act=getarea&region_id="+cityid, function( data ){
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