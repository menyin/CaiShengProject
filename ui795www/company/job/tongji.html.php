<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>职位被浏览记录_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/com_index.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=20140312' />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.9.1.min.js?v=20140312"></script>
	<script src="http://cdn.597.com/js/hightchart/highcharts.js"></script>
	<script src="http://cdn.597.com/js/hightchart/modules/exporting.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#container').highcharts({
				title: {text: '"<!--{if $jobInfo[jname]}-->{$jobInfo[jname]}-<!--{/if}-->效果统计报表（测试版）"',x: -20 },
				subtitle: {text: '',x: -20},
				xAxis: {categories: {$dateStr}},
				yAxis: {title: {text: ''},plotLines: [{value: 0,width: 1,color: '#808080'}]},
				tooltip: {valueSuffix: ''},
				legend: {margin:16,layout: 'horizontal',backgroundColor: '#FFFFFF',align: 'right',verticalAlign: 'bottom',x: 0,y: 0},
				series: {$tongjiStr}
			});
		});
	</script>
</head>
<body id="body">

	<!--{template company/header}-->
	<style type="text/css">
		hgroup{padding:20px;}
		.part{padding:10px 20px;zoom:1;}
		.containerList{padding: 20px 20px 0px 20px;}
		.resBd .lstBox .table{width: 100%; font-size: 12px; border: 1px blue solid;}
		.resBd .lstBox .table tr th{border: 1px solid #dadada;font-weight: bold;padding: 10px;}
		.resBd .lstBox .table tr td{border-bottom: 1px solid #dadada;padding: 10px;border-left: 1px solid #dadada;border-right: 1px solid #dadada;}
		.freeTip{padding:200px 0px 200px 0px; font-size: 16px; text-align: center;}
	</style>

	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<!--{template company/job/top}-->
				<div class="bd" id="TabC">
					<!--{if $vip}-->
					<div id="container" class="containerList"></div>
					<div class="part part2" >
						<div class="resBd">
							<div class="lstC">
								<div class="lstCon">
									<div class="lstBox">
										<table class="table">
											<thead>
												<tr>
													<th width="25%">日期</th>
													<th width="30%">职位浏览数</th>
													<th >投递简历数</th>
													<!--{if !$jid}--><th width="15%">下载简历数</th><!--{/if}-->
												</tr>
											</thead>
											<tbody>
												<!--{loop $date $k $l}-->
												<tr>
													<td>{$l}</td>
													<td>{$tongjiArr[0][$k]}</td>
													<td>{$tongjiArr[1][$k]}</td>
													<!--{if !$jid}--><td>{$tongjiArr[2][$k]}</td><!--{/if}-->
												</tr>
												<!--{/loop}-->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--{else}-->
					<div class="freeTip">
						该功能仅收费会员方可使用，请点击<a href="/company/service/service.html">购买服务</a>
					</div>
					<!--{/if}-->
				</div>
			</hgroup>
		</section>
	</div>

	<!--{template company/footer}-->

</body>
</html>