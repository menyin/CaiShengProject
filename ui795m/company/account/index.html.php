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
	<title>账户管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
</head>
</head>
<body>
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg loginTopBg3"> <a href="/company/"><i class="icon-svg10"></i></a> 账户管理 <em class="" style="display:none"></em> <a href="/companyaccount/modpassword" class="loginNewsBtn" style="display:none;">修改密码</a> </div>
</div>
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
</script>
<div class="manageMentx">
	<div class="manageMenty">
		<div class="manageMentLf">
			<h2>{$com[cname]}</h2>
			<p>
			<!--{if $isVip}-->
				<!--{loop $products $product}-->
				<b>{$product[title]}（职位数：{$product[_jobNum_]}&nbsp;|&nbsp;下载点:{$product[_resumeNum_]}&nbsp;|&nbsp;到期时间：{$product[_finishTime]}）</b><br>
				<!--{/loop}-->
			<!--{/if}--></p>
			<p style="display:none;">余 额：<span>{$user[money]}元</span></p>
		</div>
		<div class="manageMentRt"> <a href="/company/account/pay.html" class="menBtn01" style="display:none;">充值</a> <a href="/companypay/list" class="menBtn02" style="display:none;">充值记录</a> </div>
	</div>
	<ul class="manageMentList">
		<li style="display:none;">
			<span><i class="icon-uniE6015"></i>会员信息</span>
			<p><em class="green">成为高级会员，享受招聘特权</em><br>
			<a href="/companyaccount/vipMemberShow">开通会员</a> </p>
		</li>
		<li>
			<span><i class="icon-121 "></i>企业资料</span>
			<p> <em class="orange">资料完善度：{$com[comIntegrity]}%</em><br>
			<a href="/company/account/info.html">修改资料</a> </p>
		</li>
		<li>
			<!-- <span><i class="icon-svg18 "></i>企业密码</span>
			<span><i class="icon-svg34 "></i>企业密码</span> -->
			<span><i class="icon-116 "></i>企业密码</span>
			<p style="margin-top:15px;"><a href="/company/account/psw.html">修改密码</a> </p>
		</li>
		<li>
			<!--{if $com['licenceCheck']=='0'}-->
				<span style="color:"><i class="icon-uniE6013"></i>未提交</span>
				<p><em class="green2">你未提交企业认证<br>
				</em><br>
				<a href="/company/account/licence.html">立即提交</a></p>
			<!--{/if}-->
			<!--{if $com['licenceCheck']=='-1'}-->
				<span style="color:"><i class="icon-uniE6013"></i>审核中</span>
				<p> <em class="green2">已提交认证，审核中<br>
				</em><br></p>
			<!--{/if}-->
			<!--{if $com['licenceCheck']=='1'}-->
				<span style="color:"><i class="icon-uniE6032"></i>已认证</span>
				<p> <em class="green2">恭喜，已通过认证<br>
				</em><br>
				<a href="/company/account/licencevalidate.html">查看</a> </p>
			<!--{/if}-->
			<!--{if $com['licenceCheck']=='2'}-->
				<span style="color:"><i class="icon-uniE6032"></i>已允许</span>
				<p> <em class="green2">恭喜，已允许发布职位<br>
				</em><br>
				<a href="/company/account/licencevalidate.html">查看</a> </p>
			<!--{/if}-->
			<!--{if $com['licenceCheck']=='-2'}-->
				<span style="color:"><i class="icon-uniE6013"></i>未通过</span>
				<p> <em class="green2">认证未通过<br>
				</em><br>
				<a href="/company/account/licence.html">重新提交</a> </p>
			<!--{/if}-->
		</li>
		<li>
			<span><i class="icon-uniE6022"></i>账户余额</span>
			<p><em class="green">余 额：{$user[money]}元</em><br><!--{if $com['licenceCheck']>=1}--><a href="/company/account/pay.html" style="display:;">充值</a><!--{/if}--> </p>
		</li>
		<li>
			<span><img src="http://cdn.597.com/m/images/icon_pic.jpg" style="width:45px;height:45px;display:block;margin:0 0 3px 3px;" />公司LOGO</span>
			<p style="margin-top:15px;"><a href="/company/account/com_logo.html">LOGO上传</a> </p>
		</li>
		<li style="display:none;">
			<span><i class="icon-uniE6006" style="color:#73bf3e"></i>微信管理</span>
			<p> <em class="green" style="color:#73bf3e">管理绑定企业账号的微信号<br>
			有离职请记得将其解绑</em><br>
			<a href="/companyaccount/weiXinBindList">查看</a> </p>
		</li>
	</ul>
</div>
<!--{template company/footer}-->
</body>
</html>