<?exit?>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/597.js"></script>
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<STYLE TYPE="text/css">
body{background-color: #ffffff;width:100%;}
table {font-size:8px;}
td{word-wrap: break-word;word-break: normal;}
/*搜索*/
.searchBox{border-top:1px solid #ccc;border-left:1px solid #ccc;border-right:1px solid #ccc;}
.searchBox .location{
	height:37px;
	background-color:#eee;
}
.searchBox .location_main{
	padding:7px 9px;
	/*
	border-left:1px solid #fff;
	border-right: 1px solid #ccc;
	*/
	height: 23px;
}
.searchBox .input_search{
    padding-left:100px;
}
.searchBox .search{
    background: url("../images/icon.gif") no-repeat scroll 55px -24px transparent;
    width: 120px;
	border: 1px solid #b6b9b8;
	padding-right:20px;
    height: 20px;
	vertical-align: middle;
	background-color:#fff;
	padding-left:3px;
	height:18px \0;
	padding-top:2px \0;
	*height:18px;
	*padding-top:2px;
}

.searchBox .location_main ul{
	margin-top:-13px;
}
.searchBox .location_main li{
	float:left;
	display:inline-block;
}
.searchBox .search_submit{
    background: url("../images/icon.gif") no-repeat scroll 0 0px transparent;
	display:inline-block;
	width:50px;
	height:22px;
	margin-top:1px;
	margin-top:0px \0;
	*margin-top:0px;
	margin-left:10px;
	cursor:pointer;
}
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
.mainContent .main_content{
	width:100%;
	min-width:550px;
	background-color:#fff;
}
.table_header{border-top:1px solid #ccc;}
</STYLE>

<div id="main" class="security-groups" style="">
		<div class="searchBox"> 
			<div class="location">
				<div class="location_main item">
					<ul>
						<form method="get">
						<input type="hidden" name="act" value="{$act}">
						<input type="hidden" name="query_regionId" id="query_regionId" value="{$query_regionId}" />
						<li>区域查询：
							<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true"> 
							<script language="javascript">
								var areaOdjid='query_regionId'; 
								var areaOdjstr='query_region';
								var areaOdjProvice=1;//是否省可选
								var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
								var areaOdjnumber=1;//数量，如果唯一值，则立即返回
							</script>
						</li>
						<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
						<li class="ml_10">
						   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
						</li>
					   </form>
					</ul>
				</div>
			</div>
		</div>
	<div class="mainContent" style="">
		<div class="main_content">
			<div class="cell_tb_list">
				<form name="listform" action="company.html" method="post" >
				<input type="hidden" id="act" name="act" value="printlist">
				<input type="hidden" id="checkid" value="">
				<table class="has_checkbox">
					<thead>
						<tr class="table_header">
							<th width="10%">产品编号</th>
							<th width="10%">产品类型</th>
							<th >产品名称</th>
							<th width="20%">产品区域</th>
							<th width="10%">产品价格</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					<tbody>
					<!--{loop $products $product}-->
						<tr class="">
							<td>{$product[product_id]}</td>
							<td>{$product[product_type]}</td>
							<td>{$product[product_name]}</td>
							<td>{$product[product_region]}</td>
							<td>{$product[product_price]}</td>
							<td>
								<a class="btn_s" onclick="addProduct('{$product[product_id]}','{$product[product_type]}','{$product[product_name]}','{$product[product_region]}','{$product[product_price]}')" >添加</a>
							</td>
						</tr>
					<!--{/loop}-->
					</tbody>
					<thead>
						<tr class="table_header">
							<th colspan=6><div class="paginator" style="">{$showpage}</div></th>
						</tr>
					</thead>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function addProduct(product_id,product_type,product_name,product_region,product_price){
	parent.addProduct(product_id,product_type,product_name,product_region,product_price);
}
</script>
