<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--    声明ie以最高的模式运行-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style>
.cngIdBox{width:335px;font-size:12px;}
.cngIdBox .formMod {width:160px; margin: 0 auto;}
.cngIdBox .formMod span{font-weight: bold;}
.cngIdBox .formMod img{margin-left:-30px; }
.cngIdBox .formBtn a{margin:0 10px 0 0;}
</style>
</head>
<body>
<div class="dgBox cngIdBox">
	<div class="formMod">
		<p><span>{$com['cname']}</span></p>
		<p>用微信扫一扫支付<span>{$data['pay_money']}</span>元</p>
		<img alt="微信扫码支付" src="http://{DOMAIN}/api/wxpay/qrcode.api?data={$url2}" />
	</div>
	<input type="hidden" name="wxid" id="wxid" value="{$id}">
</div>
<script type="text/javascript">
	var order = {
		init:function(){
			var pay_id = {$pay_id};
			//console.log(pay_id);
			if( pay_id>0 ){
				setTimeout("order.getOrderState("+pay_id+")",1000);
			}
		},
		getDG:function(){
			//s = setInterval(getTupai,2000);
		},
		//获取订单状态
		getOrderState:function(payID){
			$.ajax({
				type: "POST",
				url: "/api/web/weixin_notify.api",
				data: "act=wxpaycheck&pay_id="+payID+"&"+Math.random(),
				dataType: "json",
				timeout: 5000,
				success: function(data){
					if( (data)!=null && typeof(data.status)!="undefined" ){
						if(data.status==1){
							$.confirm(data.msg+',继续充值吗','微信充值提醒',function(){
								window.location.href = window.location.href;
							},function(){
								window.location.href = '/company/account/pay.html?act=list';
							});
						}else{
							s = setTimeout("order.getOrderState("+payID+")",3000);
						}
					}
				}
			})
		}
	}
	order.init();
</script>
</body>
</html>