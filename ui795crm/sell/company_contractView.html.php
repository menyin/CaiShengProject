<?exit?>
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<STYLE TYPE="text/css">
html{overflow-y:scroll;}
body{background-color: #ffffff;width:100%;}
table {font-size:8px;}
td{word-wrap: break-word;word-break: normal;}
</STYLE>
<html>
<body>
<div class="cell_tb_list">
	<table class="has_checkbox">
		<thead>
			<tr class="table_header">
				<th width="10%">跟进时间</th>
				<th width="8%">跟进人员</th>
				<th width="40%">跟进内容</th>
				<th width="32%">回访目的</th>
				<th width="10%">回访时间</th>
			</tr>
		</thead>
		<tbody>
		<!--{loop $follows $follow}-->
			<tr class="">
				<td>{$follow[followTime]}</td>
				<td>{$follow[adminid]}</td>
				<td>{$follow[followText]}</td>
				<td>{$follow[nextText]}</td>
				<td>{$follow[nextTime]}</td>
			</tr>
		<!--{/loop}-->
		</tbody>
	</table>
</div>
</body>
</html>