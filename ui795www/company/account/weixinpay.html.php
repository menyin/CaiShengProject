<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>在线充值_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>  
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/pay.css?v=20140425" />
	<!-- <link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/v2-pay.css?v=20140613" /> -->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>

</head>
<body id="body">

	<!--{template company/header}-->

	<div id="pay-main">
		<div class="pay-container">
			<img alt="微信扫码支付" src="http://{DOMAIN}/api/wxpay/qrcode.php?data={$url2}" style="width:150px;height:150px;"/>
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
				$("#payType").val(1);

			});
			$("#pay2").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").addClass('cur');
				$("#pay3").removeClass('cur');
				// $("#bankList").show();
				// $("#cardList").hide();
				$("#payType").val(2);
			});
			$("#pay3").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").removeClass('cur');
				$("#pay3").addClass('cur');
				$("#payType").val(10);
			});

			$("#bankList label").click(function(){
				$("#bankList label").removeClass('sel');
				$(this).addClass('sel');
			});
			$("#cardList label").click(function(){
				$("#cardList label").removeClass('sel');
				$(this).addClass('sel');
			});
			$('#paySubmit').click(function(){
				var txtAmount=$('#txtAmount').val();
				var payType = $("#payType").val();
				if(txtAmount<=0||txtAmount==''){
					alert('充值金额不能小于等于0');
					return false;
				}
				$('#pay').submit();
			});
		});
	</script>
</body>
</html>
