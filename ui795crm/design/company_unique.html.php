<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/main.css">
<div class="content" style="">
	<div id="main" class="security-groups" style="">
		<div class="quickbar">
			<div class="searchBox"> 
				<div class="location">
					<div class="location_main item">
						<ul>
							<form method="get">
							<input type="hidden" name="act" value="{$act}">
							<!--<li>会员类型：<select id='qstatus' name='qstatus' style='width:80px' ><option value=''>不限</option></select></li>-->
							<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" class="search input_txt"></li>
							<li class="ml_10">
								<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
							</li>
							</form>
						</ul>
						<div class="paginator" style="">{$showpage}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mainContent" style="">
			<div class="main_content">
				<form name="listform" method="post" >
				<div class="cell_tb_list" style="height:185px;">
					<table class="has_checkbox">
						<thead>
							<tr class="table_header">
								<th class="td1" style="display:none;" width="10" ></th>
								<th width="50" style="display:none;">ID</th>
								<th width="100">企业名称</th>
								<th width="50">用户名</th>
								<th width="50">地区</th>
								<th>合同</th>
								<th width="20">跟单员</th>
								<th width="100">操作</th>
							</tr>
						</thead>
						<!--{loop $companys $company}-->
						<tbody>
							<tr class="">
								<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td>
								<td style="display:none;">{$company[cid]}</td>
								<!--<td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td>-->
								<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank">{$company[cname]}</a></td>
								<td>{$company[username]}</td>
								<td>{$company[comCityId]}</td>
								<td><table width="100%" border="1">
									<tr>
										<td width="130">合同名称</td>
										<td width="60">开始时间</td>
										<td width="60">结束时间</td>
										<td width="60">创建时间</td>
									</tr>
									<!--{loop $contracts $contract}-->
									<tr>
										<td>{$contract[title]}</td>
										<td>{$contract[startDate]}</td>
										<td>{$contract[endDate]}</td>
										<td>{$contract[createTime]}</td>
									</tr>
									<!--{/loop}-->
								</table>
								</td>
								<td>{$company[adminUsername]}</td>
								<td>
									<a class="btn_s" onClick="bangding('{$company[_cid]}','{$company[cname]}')">绑定</a>
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
function bangding(_cid,cname){
	parent.document.getElementById("myH2").innerHTML =  "<input type=\"hidden\" class=\"text\" name=\"c_id\" id=\"c_id\" value="+_cid+" size=\"20\" /><input type=\"text\" class=\"text\" name=\"cname\" id=\"cname\" value="+cname+" size=\"50\" readonly=\"\" />";
	//parent.document.getElementById("frame").style.display="none";
}
</script>
