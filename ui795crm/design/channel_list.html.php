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
					<div class="m_bg">名企分类管理 > 名企分类设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="channel.html?act=channeledit">新增名企类别</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="channellist">
										<li class="ml_10">区域选择：
											<input type="hidden" name="query_regionId" id="query_regionId" value="{$query_regionId}" />
											<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true">
											<script language="javascript">
												var areaOdjid='query_regionId'; 
												var areaOdjstr='query_region';
												var areaOdjProvice=1;//是否省可选
												var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
												var areaOdjnumber=1;//数量，如果唯一值，则立即返回
											</script>
										</li>
										<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" placeholder="分类名称" value="{$q}"></li>
										<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="channel.html?act=channellist&query_regionId={$query_regionId}&query_region={$query_region}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
										<!-- <th class="td1" width="3%"></th> -->
										<th width="8%" style="display:none;">ID</th>
										<th width="8%">城市</th>
										<th width="15%">分类名称</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->					
								<tbody data-bind="foreach: items">
									<tr class="">
										<!-- <td class="td1"><input type="checkbox" class="c2_checkbox" ></td> -->
										<td style="display:none;">{$result[id]}</td>
										<td>{$result[region_name_full]}</td>
										<td>{$result[channel_name]}</td>
										<td>
										    <a class="btn_s" href="channel.html?act=channeledit&id={$result[id]}">修改</a>
										   <!--  <a class="btn_s" href="channel.html?act=delete&id={$result[id]}" onclick="return confirm('确认需要删除些信息吗？');">删除</a> -->
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
</body>
</html>