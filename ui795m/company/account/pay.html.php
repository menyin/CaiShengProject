<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>在线充值-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<style>
	body{padding-top:0px!important;}
	</style>
</head>
</head>
<body>
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg ">
		<a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a>
		账户充值
	</div>
</div>
<div style="padding-top: 45px;"></div>
<!--{/if}-->
<div class="head_master" style="display:none;filter:alpha(opacity=10);-moz-opacity:0.1;opacity: 0.1;z-index:99"></div>
<div class="m_master" style="display:none;"></div>
<div class="juhua" style="display:none;position:fixed"><img src="http://cdn.597.com/m/images/loadingb.gif"></div>
<script>
//触屏版提示框
var myMobileAlert = {
	html:'<div class="nonmemberPop" id="myAlert" style="display:none">'
			+'<p class="nomemberpx05 alertTitle"></p>'
			+'<p class="nomemberpx06 alertContent"  style="text-align:left;padding:0 5px 0 5px;"></p>'
			+'<p class="nomemberpx04">'
			+'<a href="javascript:;" class="green2 alertButton">确定</a>'
			+'</p></div>',
	init:function(title,content,callBack,type){
		$("body").append(this.html);
		this.bindContent(title,content,callBack,type);
		$(".m_master").show();
		$("#myAlert").show("fast");
	},
	bindContent:function(title,content,callBack,type){
		var _self = this;
		if(type=="fail"){
			$("#myAlert .alertTitle").css({color:"red"});
		}else{
			$("#myAlert .alertTitle").css({color:"#169e49"});
		}
		$("#myAlert .alertTitle").html(title);
		$("#myAlert .alertContent").html(content);
		$("#myAlert .alertButton").bind("click",function(){
			if(typeof(callBack) != "undefined" && callBack !=""){
				callBack();
			}
			_self.destroy();
		});
	},
	destroy:function(){
		$("#myAlert .alertTitle").html("");
		$("#myAlert .alertContent").html("");
		$("#myAlert .alertButton").unbind();
		$(".m_master").hide();
		$("#myAlert").remove();
	}
}

//触屏版提示框
var myMobileConfirm = {
	html:'<div class="nonmemberPop" id="myConfirm" style="display:none">'
			+'<p class="nomemberpx05 confirmTitle"></p>'
			+'<p class="nomemberpx06 confirmContent"></p>'
			+'<p class="nomemberpx04">'
			+'<a href="javascript:;" class="orange"><em class="consons"></em></a>'
			+'<a href="javascript:;" class="green confirmRightButton"></a>'
			+'</p></div>',
	init:function(title,content,callBack,rightButtonName,leftButtonName,leftCallBck){
		$("body").append(this.html);
		this.bindContent(title,content,callBack,rightButtonName,leftButtonName,leftCallBck);
		$(".m_master").show();
		$("#myConfirm").show("fast");
	},
	bindContent:function(title,content,callBack,rightButtonName,leftButtonName,leftCallBck){
		var _self = this;
		$("#myConfirm .confirmTitle").html(title);

		var rightname = typeof(rightButtonName) != "undefined"&& rightButtonName!="" ? rightButtonName:"确定";
		var leftButtonName = typeof(leftButtonName) != "undefined"&& leftButtonName!="" ? leftButtonName:"取消";
		$("#myConfirm .confirmRightButton").html(rightname);
		$("#myConfirm .consons").html(leftButtonName);
		$("#myConfirm .confirmContent").html(content);
		$("#myConfirm .confirmRightButton").bind("click",function(){
			if(typeof(callBack) != "undefined" && callBack !=""){
				callBack();
			}
			_self.destroy();
		});
		$("#myConfirm .consons").bind("click",function(){
			if(typeof(leftCallBck) != "undefined" && leftCallBck !=""){
				leftCallBck();
			}
			_self.destroy();
		});
	},
	destroy:function(){
		$("#myConfirm .confirmTitle").html("");
		$("#myConfirm .confirmContent").html("");
		$("#myConfirm .confirmRightButton").unbind();
		$(".m_master").hide();
		$("#myConfirm").remove();
	}
}

//触屏版确认框
//z-index_m 背景框的 z-index;z-index-j 背景框的z-index
 function showLoading(z_index_m,z_index_j){
	if(z_index_m == "undefined" ||z_index_m ==""){
		z_index_m = 10;
	}
	if(z_index_j == "undefined" ||z_index_j ==""){
		z_index_j = 11;
	}
	$(".head_master").show().css({"z-index":z_index_m});
	$(".juhua").show().css({"z-index":z_index_j});
}
//关闭loading
function closeLoading(){
	$(".head_master").hide();
	$(".juhua").hide();
}
function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}
</script>

<div class="areCharge">
	<form action="/company/account/pay.html" name="pay" method="post" id="pay">
	<p>请输入你充值金额</p>
		<input type="text" name="txtAmount" id="txtAmount" value="" placeholder="" class="areCText" autocomplete="off">
		<p>请选择充值渠道</p>
		<ul>
			<!--{if $wx_com}-->
			<li>
				<label>
					<input name="payType" type="radio" value="10" checked="checked">微信支付
				</label>
			</li>
			<!--{else}-->
			<li>
			<!--{if $cid==3}-->
				<li>
					<label>
						<input name="payType" type="radio" value="2" checked="checked">浏览器微信支付测试
					</label>
				</li>
			<!--{/if}-->
				<label>
					<input name="payType" type="radio" value="1" checked="checked">支付宝支付
				</label>
			</li>
			<!--{/if}-->
			<li style="display:none">
				<label>
					<input name="payType" type="radio" value="2">储蓄卡支付
				</label>
			</li>
			<li style="display:none">
				<label>
					<input name="payType" type="radio" value="3">信用卡支付
				</label>
			</li>
			<li>
				<a href="javascript:;" id="paySubmit">提 交</a>
			</li>
		</ul>
		<input type="hidden" name="act" value="pay">
		<div style="display:none" id="bankname"></div>
	</form>
</div>
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
			$('#paySubmit').click(function(){
				var txtAmount=$('#txtAmount').val();
				if(txtAmount==''||typeof(txtAmount)=='undefined'){
					alert('充值金额不能小于等于0');
					return false;
				}
				$('#pay').submit();
			});

		});
	</script>
</body>
</html>