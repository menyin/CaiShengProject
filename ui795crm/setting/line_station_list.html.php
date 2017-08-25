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
					<div class="m_bg">站点管理 > 公交路线 > {$lineRow['name']}站台总列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line">
							<div class="btn icon-1 icon" ><a href="line.html?act=editStation&lineId={$_GET['lineId']}">新增{$lineRow['name']}公交线路的站台</a></div>
							<div class="btn icon-9 icon">
								<a href="line.html?act=list">返回总列表</a>
							</div>
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox">
						<div class="location">
							<div class="location_main item">
							<!--{if $lineStationList['count']>0}--> 
								<div style="float:right;">
									<div style="float:left;">每页
										<select onchange="window.location.href=$(this).val();">
											<!--{loop $__ppStr $key $value}-->
												<option value="line.html?lineId={$_GET['lineId']}&act=stationList{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
											<!--{/loop}-->
										</select>条  共{$lineStationList['count']}条
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
										<th width="8%">公交线路</th>
										<th width="8%">公交标题</th>
										<th width="18%">车站名称</th>
										<th width="8%">级别</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $lineStationList['rows'] $val}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td>{$lineRow['name']}</td>
										<td>{$lineRow['title']}</td>
										<td>{$stationList[$val['stationId']]['name']}</td>
										<td>{$val['rank']}</td>
										<td>
											<a class="btn_s" href="line.html?act=editStation&id={$val['id']}&lineId={$val['lineId']}">修改</a>
											<a class="btn_s" onclick="del({$val['id']})">删除</a>
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
		<!--{template setting/sidebar}-->
	</div>
</div>
<script>
function del(id){
	var r = confirm("您确定要删除吗？");
    if(!r) return;
	$.ajax({
        url: "line.php",
        type: 'POST',
        data: {
            'act': 'delStation',
            'id': id
        },
        dataType: 'json',
        error: function() {
            alert('请求出错!');
        },
        success: function(data) {
            if (data.status==1) {
            	alert('操作成功');
            }else {
            	alert(data.msg);
          	}
        }
    });
}
</script>
</body>
</html>