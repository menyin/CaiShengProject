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
					<div class="m_bg">资讯管理 > 专访轮播管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="adv.html?act=edit">新增专访轮播</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="list">
										<li style="display:none;"><select id="query_day" name="query_day" style="width:80px">修改期限：
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
										<li>　模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"  placeholder="专访标题"></li>
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
													<option value="adv.html?act=list&query_regionId={$query_regionId}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
										<th class="td1" width="3%" style="display:none;"></th>
										<th width="3%" style="display:none;">专访ID</th>
										<th width="15%">专访标题</th>
										<th width="5%">站点</th>
										<th width="8%">修改时间</th>
										<th width="3%">是否显示</th>
										<th width="12%">操作</th>
									</tr>
								</thead>
								<!--{loop $advs $adv}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1" style="display:none;"><input type="checkbox" class="c2_checkbox" ></td>
										<td style="display:none;">{$adv[advid]}</td>
										<td><a href="{$adv[link_url]}" target="_blank">{$adv[adv_title]}</a></td>
										<td>{$adv[region_name_full]}</td>
										<td>{$adv[modTime]}</td>
										<td><!--{if $adv['showStatus']==1}-->否<!--{else}-->是<!--{/if}--></td>
										<td>
											<a class="btn_s" href="adv.html?act=edit&advid={$adv[advid]}">修改资料</a>
											<!--{if $adv['showStatus']==1}-->
												<a class="btn_s" onclick="showOk('{$adv[advid]}')">显示</a>
											<!--{else}-->
												<a class="btn_s" onclick="showNo('{$adv[advid]}')">不显示</a>
											<!--{/if}-->
											<a class="btn_s" onclick="del('{$adv[advid]}')">删除</a>
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
//显示
function showOk(advid){
	if(!advid){
		alert('参数错误');
		return;
	}
	if(confirm('确认显示吗？')){
		$.post('adv.html',{act:'show_ok',advid:advid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
}
//不显示
function showNo(advid){
	if(!advid){
		alert('参数错误');
		return;
	}
	if(confirm('确认不显示吗？')){
		$.post('adv.html',{act:'show_no',advid:advid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
}
//删除
function del(advid){
	if(!advid){
		alert('参数错误');
		return;
	}
	if(confirm('确认删除吗？')){
		$.post('adv.html',{act:'del',advid:advid},function(data){
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
</body>
</html>