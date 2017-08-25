<?exit;?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>微信支付-597人才网</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<style type="text/css">
		.paySty{padding: 30px; font-size: 14px;font-family: "微软雅黑";}
		.paySty span{color: #f00;}
		.wxpay a{display: block;height: 60px;text-align: center;line-height: 60px;color: #fff;background: #9ACD32;font-size: 2em;font-family: "微软雅黑";margin-top: 6px;}
	</style>
    <script type="text/javascript">
	//调用微信JS api 支付
	function jsApiCall()
	{
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',
			{$jsApiParameters},
			function(res){
				if(res.err_msg == "get_brand_wcpay_request:ok" ) {
					alert('支付成功');
					window.location.href="/company/account/";
				}else if(res.err_msg == "get_brand_wcpay_request:fail"){
					alert('支付失败,请重新充值');
					window.location.href="/company/account/";
				}
			}
		);
	}

	function callpay()
	{
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}
	}
	</script>
	<script type="text/javascript">
	//获取共享地址
	function editAddress()
	{
		WeixinJSBridge.invoke(
			'editAddress',
			{$editAddress},
			function(res){
				var value1 = res.proviceFirstStageName;
				var value2 = res.addressCitySecondStageName;
				var value3 = res.addressCountiesThirdStageName;
				var value4 = res.addressDetailInfo;
				var tel = res.telNumber;
			}
		);
	}
	
	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', editAddress); 
		        document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
			editAddress();
		}
	};
	
	</script>
</head>
<body>
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg ">
		账户充值支付
	</div>
</div>
    <div class="paySty">
    	<b>您当前需支付金额为<span>{$data['pay_money']}</span>元
    </div>
	<div class="wxpay">
		<a href="javascript:void(0)" onclick="callpay()">微信支付</a>
	</div>
</body>
</html>