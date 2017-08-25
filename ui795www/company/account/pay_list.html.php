<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>在线充值 我的账户-597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />	
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />	
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/pay.css?v=20140425" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017"  charset="utf-8"></script>

</head>
<body id="body">
	<!--{template company/header}-->
	<div id="pay-main">
		<div class="pay-container">
			<div class="pay-tab">
				<a <!--{if $act!='list'}-->class="cur"<!--{/if}--> href="/company/account/pay.html">在线充值</a>
				<a <!--{if $act=='list'}-->class="cur"<!--{/if}--> href="/company/account/pay.html?act=list">交易明细</a>
			</div>
			<div class="bd">
				<!--{if $res}-->
					<table class="table">
						<colgroup>
							<col class="wid100" />
							<col class="wid100" />
							<col class="wid185" />
							<col class="wid185" />
							<col class="wid185" />
							<col />
						</colgroup>
						<thead>
							<tr>
								<th>类型</th>
								<th>金额（元）</th>
								<th>内容</th>
								<th>交易日期</th>
								<th>到账日期</th>
							</tr>
						</thead>
						<tbody id="lst" class="lst lst1">
							<!--{loop $res $pay}-->
							<tr >
								<td class="fblue">
									<!--{if $pay[consume_type]==1}-->充值<!--{else}-->消费<!--{/if}-->
								</td>
								<td><!--{if $pay[consume_type]==1}-->+<!--{/if}-->{$pay[pay_money]}</td>
								<td class="fgreen">{$pay[_pay_type]}</td>
								<td>{$pay[beginTime]}</td>
								<td>{$pay[finishTime]}</td>
							</tr>
							<!--{/loop}-->
						</tbody>
					</table>

						<div class="page">
							<div class="page">{$showpage}</div>
						</div>					
				<!--{else}-->
					<div class="noData">暂无充值记录</div>					
				<!--{/if}-->
			</div>
		</div>
	</div>

	<!--{template company/footer}-->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#pay1").click(function(){
				$("#pay1").addClass('cur');
				$("#pay2").removeClass('cur');
				$("#pay3").removeClass('cur');
				$("#bankList").hide();
				$("#cardList").hide();
			});
			$("#pay2").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").addClass('cur');
				$("#pay3").removeClass('cur');
				$("#bankList").show();
				$("#cardList").hide();
			});
			$("#pay3").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").removeClass('cur');
				$("#pay3").addClass('cur');
				$("#bankList").hide();
				$("#cardList").show();
			});

			$("#bankList label").click(function(){
				$("#bankList label").removeClass('sel');
				$(this).addClass('sel');
			});
			$("#cardList label").click(function(){
				$("#cardList label").removeClass('sel');
				$(this).addClass('sel');
			});

		});
	</script>
</body>
</html>
