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
					<div class="m_bg">资讯管理 > <!--{if $op=='single'}-->[{$category[category_title]}]<!--{/if}--> 总列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--{if $op=='single'}--><div class="btn icon-1 icon"><a href="news.html?act=edit&detail_cid={$detail_cid}">新增[{$category[category_title]}]</a></div><!--{/if}-->
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
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
										<!-- <li class="ml_10">区域查询：
											<select id="cityid{$i}" name="cityid" onchange="selectcity(this.value,{$i});" required="required" message="请选择所属的站点">
												<option  value="-1" >请选择</option>
												<option  value="0" >全国</option>
												{loop $regions1 $region1}
													<option value="{$region1[region_id]}"  {if $region1[region_id]==$city} selected {/if}>{$region1[region_name_full]}</option>
												{/loop}
											</select>
											<label id="quyuidA{$i}" style="{if $quyu1}display:{else}display:none;{/if}">
												<select id="quyuA{$i}" name="quyuA" onchange="selectquyu(this.value,{$i});">
												<option value="">请选择</option>
												{loop $quyu1Arr $quyu11}
													<option value="{$quyu11[region_id]}" {if $quyu11[region_id]==$quyu1}selected{/if}>{$quyu11[region_name_full]}</option>
												{/loop}
												</select>
											</lable>
											<label id="quyuidB{$i}" style="{if $quyu2}display:{else}display:none;{/if}">
												<select id="quyuB{$i}" name="quyuB">
												<option value="">请选择</option>
												{loop $quyu2Arr $quyu22}
													<option value="{$quyu22[region_id]}" {if $quyu22[region_id]==$quyu2}selected {/if}>{$quyu22[region_name_full]}</option>
												{/loop}
												</select>
											</lable>
										</li> -->
										<input type="hidden" name="query_regionId" id="query_regionId" value="{$query_regionId}" />
										<li class="ml_10">区域选择查询：
											<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true">
											<script language="javascript">
												var areaOdjid='query_regionId';
												var areaOdjstr='query_region';
												var areaOdjProvice=1;//是否省可选
												var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
												var areaOdjnumber=9;//数量，如果唯一值，则立即返回
											</script>
										</li>
										<li class="ml_10">推荐类别:
											<select id="tuijian" name="tuijian">
												<option value="-1">请选择</option>
												<option value="1" <!--{if $tuijian==1}-->selected<!--{/if}-->>是</option>
												<option value="0" <!--{if $tuijian==0}-->selected<!--{/if}-->>否</option>
											</select>
										</li>
										<li class="ml_10">　模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="资讯内容"></li>
										<li class="ml_10"><input type="hidden" name="detail_cid" id="detail_cid" value="{$detail_cid}" />
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="news.html?act=list&op={$op}&query_day={$query_day}&tuijian={$tuijian}&detail_cid={$detail_cid}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="4%" style="display:none;">ID</th>
										<th width="20%">标题</th>
										<th width="10%">类别</th>
										<th width="5%">站点</th>
										<th width="10%">来源</th>
										<th width="5%">作者</th>
										<th width="5%">是否推荐</th>
										<th width="7%">时间</th>
										<th width="5%">发布者</th>
										<th width="5%">是否显示</th>
										<th width="5%">点击数</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $news $news1}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td style="display:none;">{$news1['detail_id']}</td>
										<td><a href="{$news1[newurl]}" target="_blank">{$news1['detail_title']}</a></td>
										<td>{$news1['category_title']}</td>
										<td>{$news1['detail_region']}</td>
										<td>{$news1['detail_from']}</td>
										<td>{$news1['detail_author']}</td>
										<td><!--{if $news1['detail_top']==1}-->是<!--{else}-->否<!--{/if}--></td>
										<td>{$news1['detail_time']}</td>
										<td>{$news1['adminUsername']}</td>
										<td><!--{if $news1['isshow']==1}-->显示<!--{else}-->不显示<!--{/if}--></td>
										<td>{$news1['click']}</td>
										<td>
											<a class="btn_s" href="news.html?act=edit&detail_id={$news1['detail_id']}&detail_cid={$news1['detail_cid']}">修改</a>
											<a class="btn_s" onclick="del('{$news1['detail_id']}','{$news1['detail_cid']}')">删除</a>
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
		<!--{template news/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(cityid,id){
	$("#quyuA"+id).empty();
	$("#quyuB"+id).empty();
	var quyuarr='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';						　　
		});
	$('#quyuA'+id).append(quyuarr);
	$('#quyuidA'+id).show();
	$('#detail_regionid').val(cityid);
	$("#quyuidB"+id).css("display","none");
	});
}
//获取下一级
function selectquyu(quyuid,id){
	cityid=$("#cityid"+id).val();
	$("#quyuB"+id).empty();
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+quyuid, function( data ){
		if(data!='[]'){
			$('#quyuidB'+id).show();
		}
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';　
		});
	$('#quyuB'+id).append(quyuarr);
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null || cityid==0){
		$('#quyuidB'+id).css("display","none");
	}else{
		$('#quyuidB'+id).show();
	}
	$('#detail_regionid').val(quyuid);
	});
}

//删除
function del(detail_id,detail_cid){
	if(!detail_id || !detail_cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认删除吗？')){
		$.post('news.html',{act:'delete',detail_id:detail_id,detail_cid:detail_cid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
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