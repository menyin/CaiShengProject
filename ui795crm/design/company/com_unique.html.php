<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/main.css">
<!--{if $companys}-->
<div class="content" style="">
	<div id="main" class="security-groups" style="">
		<div class="quickbar">
			<div class="searchBox"> 
				<div class="location">
					<div class="location_main item">
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
								<th width="30%">企业名称</th>
								<th width="20%">用户名</th>
								<th width="20%">地区</th>
								<th width="20%">执照审核状态</th>
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
								<td>{$company[_licenceCheck]}</td>
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
<!--{/if}-->
