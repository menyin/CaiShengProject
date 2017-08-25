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
					<div class="m_bg">开通广告管理 >  {$Title}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="adv.html?act=edit&op={$op}&toact=list&positionId={$advType}">新增广告</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox">
						<div class="location">
							<div class="location_main item">
								<ul style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
										<input type="hidden" name="act" value="list">
										<input type="hidden" name="op" value="{$op}">
										<li class="ml_10">位置:
											<select name="advType">
												<option value="-1" >请选择</option>
												<!--{loop $__advStr $key=>$adv}-->
												<option value="{$key}" <!--{if $key==$advType}-->selected<!--{/if}-->>{$adv}</option>
												<!--{/loop}-->
											</select>
										</li>
										<input type="hidden" name="query_regionId" id="query_regionId" value="{$qid}" />
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
										<li class="ml_10">是否过期:
											<select name="end">
												<option value="" >请选择</option>
												<option value="1" <!--{if $end==1}-->selected<!--{/if}-->>未过期</option>
												<option value="-1" <!--{if $end==-1}-->selected<!--{/if}-->>已过期</option>
											</select>
										</li>
										<li class="ml_10">　模糊查询：<input type="text" name="query" id="query"  value="{$q}" style="width:250px;" placeholder="企业名称/用户名/地区/邮箱/电话"></li>
										<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="adv.html?act=list&op={$op}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
										<th class="td1" width="3%" style="display:none;"></th>
										<th width="3%" style="display:none;">广告ID</th>
										<th width="15%">公司名称</th>
										<th width="5%">城市</th>
										<th width="8%">位置</th>
										<th width="5%">开始时间</th>
										<th width="5%"><a href="/design/adv.html?act=list&op=all&advType={$advType}&query_regionId={$qid}&query_region={$query_region}&end={$end}&query={$q}&timeOrder={$timeOrderStr}">结束时间</a></th>
										<th width="3%"><a href="/design/adv.html?act=list&op=all&advType={$advType}&query_regionId={$qid}&query_region={$query_region}&end={$end}&query={$q}&order={$orderStr}">排序</a></th>
										<th width="10%">缩略图</th>
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
										<td>{$adv[_startDate]}</td>
										<td>{$adv[_endDate]}</td>
										<td>{$adv[displayOrder]}</td>
										<td><!--{if $adv[pic]}--><a href="{$adv[_url]}" target="_blank"><img src="{$adv[_pic]}" width="120" height="50"></a><!--{else}-->无图片<!--{/if}--></td>
										<td>
											<a class="btn_s" href="adv.html?act=edit&op={$op}&caid={$adv[caid]}&toact={$act}" target="_blank">修改</a>
											<a class="btn_s" href="adv.html?act=edit&caid={$adv[caid]}&toact={$act}&copy=1" target="_blank">复制</a>
											<!--{if $adv[endDate]>$time}--><a class="btn_s" href="adv.html?act=advstop&caid={$adv[caid]}" onclick="return confirm('确认要暂停吗？');">暂停</a><!--{/if}-->
											<a class="btn_s" href="adv.html?act=advdel&caid={$adv[caid]}&op={$op}&query_regionId={$qid}&query_region={$query_region}&advType={$advType}&query={$q}&page={$page}" onclick="return confirm('确认需要删除吗？');">删除</a>
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
</body>
</html>