<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<STYLE TYPE="text/css">
body{background-color: #ffffff;width:100%;}
table {font-size:8px;}
th{border-top: 1px solid #ccc;}
td{word-wrap: break-word;word-break: normal;}
/*分页*/
.paginator { float:right; height:25px; overflow:hidden;margin-right:10px;font-family:Tahoma, "宋体"; font-size:12px;}
.paginator a,
.paginator span { float:left; height:23px; margin:0 5px 0 0; text-align:center; white-space:nowrap; vertical-align:middle; line-height:23px; background:#fff; }
.paginator span {border:1px solid #A6A6A6;color:#868688;}
.paginator a { color:#085C9B; }
.paginator a:link,
.paginator a:visited,
.paginator a:hover,
.paginator a:active { text-decoration:none; }
.paginator .page-start,
.paginator a,
.paginator span { padding:0 8px; border:1px solid #D3D3D3; background:#ffffff; }
.paginator a:hover { border:1px solid #A6A6A6;color:#868688; }
</STYLE>
<html>
<body>
<div class="cell_tb_list">
	<table class="has_checkbox">
		<thead>
			<tr class="table_header">
				<th width="20%">日志时间</th>
				<th width="20%">用户名</th>
				<th >日志内容</th>
				<th width="15%">IP地址</th>
			</tr>
		</thead>
		<tbody>
		<!--{loop $logs $log}-->
			<tr class="">
				<td>{$log[logTime]}</td>
				<td>{$log[username]}</td>
				<td>{$log[logText]}</td>
				<td>{$log[logIp]}</td>
			</tr>
		<!--{/loop}-->
		</tbody>	
		<thead>
			<tr class="table_header">
				<th colspan=4><div class="paginator" style="">{$showpage}</div></th>
			</tr>
		</thead>
	</table>	
</div>
</body>
</html>