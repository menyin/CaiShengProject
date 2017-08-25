<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/main.css">
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/597.js"></script>
<div class="content" style="">
	<div id="main" class="security-groups" style="">
		<div class="quickbar">
			<div class="searchBox">
				<div class="location">
					<div class="location_main item">
						<ul>
							<form method="get">
							<input type="hidden" name="op" value="search">
							<li class="ml_10">模糊查询：<input type="text" name="instrName" id="instrName" value="{$instrName}" class="search input_txt"></li>
							<li class="ml_10">
								<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
							</li>
							</form>
						</ul>
						<div class="paginator" style="<!--{if $instrRows['count']<=0}-->display:none;<!--{/if}-->">{$showpage}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mainContent" style="">
			<div class="main_content">
				<form name="listform" method="post" action="">
				<div class="cell_tb_list" style="height:185px;">
					<table class="has_checkbox">
						<thead>
							<tr class="table_header">
								<th class="td1" style="display:none;" width="10" ></th>
								<th width="50" style="display:none;">ID</th>
								<th width="200px">头像</th>
								<th width="60px">讲师姓名</th>
								<th width="200px">描述</th>
								<th width="100">操作</th>
							</tr>
						</thead>
						<!--{loop $instrRows['list'] $val}-->
						<tbody>
							<tr class="">
								<td class="td1" style="display:none;"></td>
								<td style="display:none;">{$val[instrId]}</td>
								<td><img src="{$val[pic]}" style="width:100px; height:80px;"/></td>
								<td>{$val[instrName]}</td>
								<td>{$val[content]}</td>
								<td>
									<!-- <a class="btn_s" onClick="bangding('{$contract[_cid]}','{$contract[cname]}','{$contract[title]}','{$contract[account_name]},'{$contract[amount_money]}','{$contract[receipt]}','{$contract[transferTime]},'{$contract[contract_remark]}')">导入</a> -->
									<a class="btn_s" onClick="bangding('{$val[instrId]}','{$val[instrName]}');">导入</a>
								</td>
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
<script type="text/javascript">
function bangding(instrId, instrName){
	var instrId = instrId;
	var instrName = instrName;
	parent.document.getElementById("instrName").value=instrName;
	parent.document.getElementById("instrId").value=instrId;
	parent.document.getElementById("frame1").style.display="none";
}
</script>
