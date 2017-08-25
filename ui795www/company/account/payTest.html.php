<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$title}_597人才网</title>
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
	<style type="text/css">
		.pay-form em{font-weight: bold;}
		.pay-form i{font-weight: bold;color:#f30; }
		.payLine{height: 10px; line-height: 10px; border-top: 1px #dadada solid; margin-top: 10px;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->

	<div id="pay-main">
		<div class="pay-container">
			<div class="pay-tab">
				<a <!--{if $act!='list'}-->class="cur"<!--{/if}--> href="/company/account/pay.html">{$title}</a>
				<a <!--{if $act=='list'}-->class="cur"<!--{/if}--> href="/company/account/pay.html?act=list">交易明细</a>
			</div>
			<form action="/company/account/payTest.html" name="pay" method="post" id="pay" target="_blank">
			<input type="hidden" name="pid" id="pid" value="{$pid}">
			<div id="pay-form" class="pay-form">
				<!--{if $pid}-->
					<input type="hidden" name="txtAmount" id="txtAmount" value="{$product['price']}">
					<dl>
						<dt>公司名称：</dt>
						<dd>{$com['cname']}</dd>
					</dl>
					<dl>
						<dt>当前余额：</dt>
						<dd><em>{$userInfo['money']}</em> 元</dd>
					</dl>
					<dl>
						<dt>产品名称：</dt>
						<dd>{$product['productName']}</dd>
					</dl>
					<dl>
						<dt>产品内容：</dt>
						<dd>{$product['productContent']}</dd>
					</dl>
					<div class="payLine"></div>
					<dl>
						<dt>支付金额：</dt>
						<dd><i>{$product['price']}</i> 元</dd>
					</dl>
				<!--{else}-->
					<dl>
						<dt>公司名称：</dt>
						<dd>{$com['cname']}</dd>
					</dl>
					<dl>
						<dt>当前余额：</dt>
						<dd>{$userInfo['money']}元</dd>
					</dl>

					<dl>
						<dt>充值金额：</dt>
						<dd><input class="text_b priceInput"  name='txtAmount' id="txtAmount" maxlength="6" />元</dd>
					</dl>
				<!--{/if}-->
				<dl class="pay-group-list"  style="margin:10px 0 0 ;">

					<dt>支付方式：</dt>
					<dd id="pay-group-list" >

						<div class="card-tab" id="card-tab">
							<a class="cur" id="pay1" rel="1" href="javascript:void(0);"><em></em>支付宝</a>
							<a href="javascript:" id="pay2"><em></em>银行卡</a>
							<a href="javascript:" id="pay3"><em></em>微信支付</a>
							<!--{if $pid}-->
							<a href="javascript:" id="pay4"><em></em>账号余额支付</a>
							<!--{/if}-->
						</div>

						<ul id="bankList" style="display:none">
							<li>
								<label><input name="card" type="radio" value="1025" /><span><img src="http://cdn.597.com/img/v2/pay/logo/gongshang.gif" alt="" /></span></label>
							</li>
						</ul>

						<ul id="cardList" style="display:none">
							<li>
								<label><input name="card" type="radio" value="1027" /><span><img src="http://cdn.597.com/img/v2/pay/logo/gongshang.gif" alt="" /></span></label>
							</li>
						</ul>
					</dd>
				</dl>

				<dl>
					<dt>&nbsp;</dt>
					<dd>
						<input type="hidden" name="act" value="pay">
						<input type="hidden" name="payType" id="payType" value="1">
						<button id="paySubmit" class="button_b" type="button">确认支付</button>
					</dd>
				</dl>
			</div>
			</form>
		</div>
	</div>

	<!--{template company/footer}-->
	<script type="text/javascript">
		$(document).ready(function(){

			$("#pay1").click(function(){
				$("#pay1").addClass('cur');
				$("#pay2").removeClass('cur');
				$("#pay3").removeClass('cur');
				$("#pay4").removeClass('cur');
				$("#bankList").hide();
				$("#cardList").hide();
				$("#payType").val(1);

			});
			$("#pay2").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").addClass('cur');
				$("#pay3").removeClass('cur');
				$("#pay4").removeClass('cur');
				// $("#bankList").show();
				// $("#cardList").hide();
				$("#payType").val(2);
			});
			$("#pay3").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").removeClass('cur');
				$("#pay3").addClass('cur');
				$("#pay4").removeClass('cur');
				$("#payType").val(10);
			});
			$("#pay4").click(function(){
				$("#pay1").removeClass('cur');
				$("#pay2").removeClass('cur');
				$("#pay3").removeClass('cur');
				$("#pay4").addClass('cur');
				$("#payType").val(5);
			});
			<!--{if $pid&&($userInfo['money']>0)}-->
				$("#pay4").click();
			<!--{/if}-->
			$("#bankList label").click(function(){
				$("#bankList label").removeClass('sel');
				$(this).addClass('sel');
			});
			$("#cardList label").click(function(){
				$("#cardList label").removeClass('sel');
				$(this).addClass('sel');
			});
			$('#paySubmit').click(function(){
				var txtAmount=$('#txtAmount').val(),
					payType = $("#payType").val();
				if(txtAmount<=0||txtAmount==''){
					alert('{$title}金额不能小于等于0');
					return false;
				}
				switch(payType){
					case '10':
						$.showModal('/company/account/payTest.html?act=pay&type=wx&txtAmount='+txtAmount+'&payType='+payType+'&pid={$pid}', {title:"微信支付",showMask: true });
					break;
					case '5':
						var money = parseInt($(".pay-form dl").eq(1).find('em').html()),
							pid = {$pid};

						if(money<txtAmount){
							$.message('您的余额不足!请用其它方式或 <a href="/company/account/pay.html">点击立即充值！</a>',{title:'操作失败,请重新操作！'});
							return false;
						}

						$.ajax({
							type:"post",
							url:'/api/web/company.api',
							data:{act:'updateProduct',pid:pid},
							dataType:'json',
							success:function(data){
								if(data&&data.status==1){
									$.anchorMsg(data.msg,{icon:"success"});
									window.location.href='/company/account/';
									return false;
								}
								if(data&&data.status<0){
									$.message(data.msg,{title:'操作失败,请重新操作！',onclose:function(){window.location.href=window.location.href; return false;}});
									return false;
								}
							}
						})
					break;
					default:
						$('#pay').submit();
					break;
				}
			});
		});
	</script>
</body>
</html>
