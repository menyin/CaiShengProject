<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	.cBtns { display: inline-block; position: relative; padding:3px 10px; color:#444; background: #f2f2f2; border:1px solid #ddd; cursor: pointer; margin:5px 0; _display:none;}
	.cBtns:hover {color:#000; background: #d8d8d8;}
</style>
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
					<div class="m_bg">名企管理 > 名企总列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon"><a href="channel.html?act=channeledit">新增名企类别</a></div> -->
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="goodlist">
										<li>区域选择：
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
										<li class="ml_10" style="display:none;">类别：
											<select id='channel_id' name='channel_id' style='width:80px' >
												<option value=''>请选择</option>
												<!--{loop $goodStr $key $value}-->
													<option value='{$value[id]}' <!--{if $result[channel_id]==$value[id]}-->checked <!--{/if}-->>{$value[channel_name]}</option>
												<!--{/loop}-->
											</select>
										</li>
										<li class="ml_10">类型：
											<select id='query_type' name='query_type' style='width:80px' >
												<option value='-1' {if ($query_type=='-1')}selected{/if}>请选择</option>
												<option value='0' {if ($query_type=='0')}selected{/if}>行业</option>
												<option value='1' {if ($query_type=='1')}selected{/if}>名企</option>
											</select>
										</li>
										<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
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
													<option value="channel.html?act=goodlist&query_regionId={$query_regionId}&query_region={$query_region}&query_type={$query_type}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
										<th width="3%" style="display:none;">ID</th>
										<th width="5%" style="display:none;">公司ID</th>
										<th width="15%">公司名称</th>
										<th width="5%">城市</th>
										<th width="8%">类别</th>
										<th width="8%">开始时间</th>
										<th width="8%">结束时间</th>
										<th width="8%">图片</th>
										<th width="8%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<!-- <td class="td1"><input type="checkbox" class="c2_checkbox" ></td> -->
										<td style="display:none;">{$result[id]}</td>
										<td style="display:none;">{$result[cid]}</td>
										<!-- <td><a href="{$result[comUrl]}" target="_blank">{$result[cname]}</a></td> -->
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$result[_cid]}/" target="_blank" class="comLink">{$result[cname]}</a><br/><a href="javascript:void(0)" class="cBtns">复制</a></td>
										<td>{$result[city_name]}</td>
										<td>{$result[channel_id]}</td>
										<td>{$result[startDate]}</td>
										<td>{$result[endDate]}</td>
										<td><!--{if $result[isWords]==0}--><a href="http://pic.{ROOT_DOMAIN}/pos/{$result[logo]}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$result[logo]}" width="150" height="50"></a><!--{/if}--></td>
										<td>
											<a class="btn_s" href="channel.html?act=edit&id={$result[id]}&c_id={$result[_cid]}">修改</a>
											<a class="btn_s" href="channel.html?act=comdelete&id={$result[id]}" onclick="return confirm('确认需要删除些信息吗？');">删除</a>
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
		<!--{template company/sidebar}-->
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('.cBtns').each(function(index, elem) {
		clip = new ZeroClipboard.Client();
		clip.setHandCursor(true);
		ZeroClipboard.setMoviePath("//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.swf");
		clip.setText($('.comLink').eq(index).text());
		clip.addEventListener('complete', function(client, text) {
			alert('复制成功!');
		});
		clip.glue(this);
	});

	$('.cnDiv').each(function(index,elem){
		$(this).appendTo($('.cBtns').eq(index));
	});

	// IE8以下隐藏按钮，因为不支持
	if($.browser.msie && $.browser.version < 8){
		$('.cBtns').hide();
	}

});
</script>
</body>
</html>