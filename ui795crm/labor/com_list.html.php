<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/main.css">
<style type="text/css">
	.cell_tb_list table th{font-size: 14px;}
	.cell_tb_list table td{font-size:12px;}
</style>
<div class="content" style="font-size:12px;">
	<div id="main" class="security-groups" style="">
		<div class="mainContent" style="">
			<div class="quickbar">
				<div class="searchBox"> 
					<div class="location">
						<div class="location_main item">
							<ul>
								<form method="get" action="dispatch.html">
									<input type="hidden" name="act" value="comlist">
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" class="search input_txt" placeholder="公司名称"></li>
									<li class="ml_10">
									<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
								</li>
								</form>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="main_content" style="">
				<div class="cell_tb_list" style="height:185px;">
					<table class="has_checkbox">
						<thead>
							<tr class="table_header">
								<th class="td1" width="3%" style="display:none;"></th>
								<th width="8%" style="display:none;">CID</th>
								<th width="15%">公司名称</th>
								<th width="8%">地区</th>
								<th width="8%">类型</th>
								<th width="8%">联系人</th>
								<th width="8%">联系电话</th>
								<th width="8%">手机</th>
								<th width="8%">添加时间</th>
								<th width="15%">操作</th>
							</tr>
						</thead>
						<!--{loop $results $result}-->
						<tbody data-bind="foreach: items">
							<tr class="">
								<td class="td1" style="display:none;"><input type="checkbox" class="c2_checkbox" ></td>
								<td style="display:none;">{$result[cid]}</td>
								<td>{$result[cname]}</td>
								<td>{$result[region_name_full]}</td>
								<td>{$result[comType]}</td>
								<td>{$result[comUser]}</td>
								<td>{$result[comPhone]}</td>
								<td>{$result[comMobile]}</td>
								<td>{$result[_createTime]}</td>
								<td>
									<a class="btn_s" onClick="bangding('{$result[cid]}','{$result[cname]}')">派遣</a>
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
<script type="text/javascript">
function bangding(cid,cname){
	parent.document.getElementById("myH2").innerHTML =  "<input type=\"hidden\" class=\"text\" name=\"cid\" id=\"cid\" value="+cid+" size=\"20\" /><input type=\"text\" class=\"text\" name=\"cname\" id=\"cname\" value="+cname+" size=\"50\" readonly=\"\" />";
}
</script>