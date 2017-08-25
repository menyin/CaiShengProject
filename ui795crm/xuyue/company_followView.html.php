<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<STYLE TYPE="text/css">
html{overflow-y:scroll;}
body{background-color: #ffffff;width:100%;}
table {font-size:8px;}
td{word-wrap: break-word;word-break: normal;}
/*分页*/
.paginator { float:right; height:25px; overflow:hidden;margin-right:10px;font-family:Tahoma, "宋体"; font-size:12px;margin-top: 5px;}
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
	<table class="has_checkbox" style="font-size:12px; height:30px;">
		<thead>
			<tr class="table_header">
				<th width="10%">跟进时间</th>
				<th width="8%">跟进人员</th>
				<th width="72%">跟进内容   <font color="red">提醒：下次回访日期：{$_nextTime}</font>    <!--{if $note[note]}--><b>备注：{$note['note']}({$note['_noteTime']})</b><!--{/if}--></th>
			</tr>
		</thead>
		<tbody>
		<!--{loop $follows $follow}-->
			<tr class="">
				<td>{$follow[followTime]}</td>
				<td>{$follow[adminUsername]}</td>
				<td>{$follow[followText]}</td>
			</tr>
		<!--{/loop}-->
		</tbody>
	</table>
</div>
<div class="paginator" style="">{$showpage}</div>
</body>
</html>