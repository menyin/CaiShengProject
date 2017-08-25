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
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">企业其他管理 > 跟单员操作日志 > 公司 ：<a href="http://www.{ROOT_DOMAIN}/com-{$_cid}/" target="_blank">{$com[cname]}</a></div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon" ><a href="company.html?act=listall&ordertype={$_ordertype}&query={$_query}&page={$_page}">返回上一级</a></div>
						</div>
					</div>

					<div class="searchBox">
						<div class="location">
							<div class="location_main item">
								<select name="chkList" id="chkList">
									<option value="0" <!--{if $chkList==0}-->selected<!--{/if}-->>显示登录信息</option>
									<option value="1" <!--{if $chkList==1}-->selected<!--{/if}-->>不显示登录信息</option>
								</select>
								<div class="paginator" style="">{$showpage}共{$num_all}条</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<form name="listform" action="company.html" method="post" >
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="3%" style="display:none;">ID</th>
										<th width="3%" style="display:none;">企业ID</th>
										<th width="5%">操作类型</th>
										<th width="5%">操作人</th>
										<th width="5%">操作时间</th>
										<th width="20%">备注</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody>
									<tr class="">
										<td style="display:none;">{$result[id]}</td>
										<td style="display:none;">{$result[cid]}</td>
										<td>{$result[_type]}</td>
										<td>{$result[adminName]}</td>
										<td>{$result[_createTime]}</td>
										<td>{$result[note]}</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template company/sidebar}-->
	</div>
</div>
<script type="text/javascript">
	$('#chkList').change(function(){
		var id = parseInt($(this).val());
		if(id==1){
			window.location.href = "/company/log.html?act=list&c_id={$_cid}&_ordertype={$_ordertype}&_query={$_query}&chkList=1";
		}else{
			window.location.href = "/company/log.html?act=list&c_id={$_cid}&_ordertype={$_ordertype}&_query={$_query}";
		}

	});
</script>
</body>
</html>