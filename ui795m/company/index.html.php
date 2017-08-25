<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>企业中心-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/swipe.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=20140312"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/com/m_font_style.css?v=20150111">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/com/m_base.css?v=20150111">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/com/m_tScreen.css?v=20150111">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/com/m_index.css?v=20150111">
	<style>
		/*如果顶部有广告，则添加如下样式*/
		body {padding-top: 0; padding-bottom: 10px;}
		.loginPop {position: relative;}
		.swipe { overflow: hidden; visibility: hidden; position: relative; }
		.swipe-wrap { overflow: hidden; position: relative; }
		.swipe-wrap > figure { float: left; width: 100%; position: relative; }
		figure, form, fieldset { border: 0; margin: 0; padding: 0 }
		.page-swipe { background-color: #fff; border: 1px solid #ddd; position: relative; margin-bottom: 10px; }
		.page-swipe #slider { }
		.page-swipe #slider figure { display: block }
		.page-swipe #slider figure div.wrap { height: 150px; display: block; position: relative }
		.page-swipe #slider figure div.image { display: block; height: inherit; }
		.page-swipe nav { position: absolute; right: 10px; bottom: 5px; z-index: 1; }
		.page-swipe #slider .image img { width: 100%; display: block; height: 100%; }
		.page-swipe nav a { font-style: normal; color: #555!important }
		.page-swipe nav #position { text-align: center; list-style: none; margin: 0; padding: 0 }
		.page-swipe nav #position li { display: inline-block; width: 10px; height: 10px; border-radius: 10px; background: #eee; margin: 0 2px; cursor: pointer }
		.page-swipe nav #position li.on { background: #F2554E; }
		.m_manageAll h2 {height: 20px; line-height: 20px; text-align: left; border-left:4px solid #e74c3c; margin:15px 0; text-indent: 10px;}
		.m_manageTopbg ul li em{color:#fff; font-size: 1em;}
		.m_manageTopbg ul li em a{color:#ed825d; font-size: 1em;margin-right: 50px;}
	</style>
</head>
<body>

<!--{if $ad23List}-->
<div class="page-swipe" style=" margin:5px auto;" style="display:none;">
	<div id="slider" class="swipe" >
		<div class="swipe-wrap" >
			<!--{loop $ad23List $k $l}-->
				<figure>
					<a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->">
						<div class="wrap">
							<div class="image">
								<img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}" alt=""></div>
						</div>
					</a>
				</figure>
			<!--{/loop}-->
		</div>
	</div>
	<nav>
		<ul id="position">
			<!--{loop $ad23List $k $l}-->
				<li <!--{if $k==0}-->class="on"<!--{/if}-->></li>
			<!--{/loop}-->
		</ul>
	</nav>
	<script>
		//$('#slider,#slider .wrap').css('height',$(window).width() * 0.375);
		var slider =
			Swipe(document.getElementById('slider'), {
				auto: 3000,
				continuous: true,
				callback: function(pos) {

					var i = bullets.length;
					while (i--) {
						bullets[i].className = ' ';
					}
					bullets[pos].className = 'on';

				}
			});
		var bullets = document.getElementById('position').getElementsByTagName('li');
	</script>
</div>
<!--{/if}-->
<div class="loginPop">
	<div class="loginTopBg loginTopBg3">
		<a href="/"><i class="icon-uniE608"></i></a>招聘中心<em class="0" style="display:none"></em>
		<a href="/companymessage/guestbook" class="loginNewsBtn" style="display:none">消息</a>
	</div>
</div>
<div class="head_master" style="display:none;filter:alpha(opacity=10);-moz-opacity:0.1;opacity: 0.1;z-index:99"></div>
<div class="m_master" style="display:none;"></div>
<div class="juhua" style="display:none;position:fixed"><img src="//cdn.{ROOT_DOMAIN}/m/images/loading.gif"></div>
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
<div class="m_manageTopbg"> <a href="/company/account/com_logo.html"><img src="<!--{if $com[logoUrl]}-->http://pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}<!--{else}-->//cdn.{ROOT_DOMAIN}/img/job/newjob/default_logo.png<!--{/if}-->" class="mIconLogo" width="50" height="50"></a>
<div>
	<p> {$com[cname]} <!--{if $com[licenceCheck]>0}--><em class="icon-uniE6032"></em><!--{else}--><em class="icon-uniE6013"></em><!--{/if}--> </p>
	<ul>
		<li><!--{if $products}-->
				<!--{loop $products $product}-->
				<b>{$product[title]}（职位数：{$product[_jobNum_]}&nbsp;|&nbsp;下载点:{$product[_resumeNum_]}&nbsp;|&nbsp;到期时间：{$product[_finishTime]}）</b>
				<!--{/loop}-->
			<!--{else}-->
				<b>试用会员（职位数：<i style="color:#f00;">{$com[_jobNum]}</i>,简历数：<i style="color:#f00;">{$resumeFree}</i>）<br><!--{if $com[licenceCheck]>0}-->如需提升招聘效果，建议升级VIP会员<!--{else}--><em>您当前营业执照未通过,<a href="/company/account/licence.html">点击查看进度</a></em><!--{/if}--></b>
			<!--{/if}-->
		</li>
	</ul>
</div>
</div>
<div class="m_manageCont">
	<ul>
		<li> <a href="/company/job/job.html?act=edit&status=3" class="subMgt01"><i class="icon-113"></i>发布职位</a> </li>
		<li> <a href="/company/resume/searchResume.html" class="subMgt02"><i class="icon-115"></i>搜索简历</a> </li>
		<li> <a href="javascript:;" class="subMgt03" id="refreshJob"><i class="icon-117"></i>刷新职位</a> </li>
		<li> <a href="/company/job/" class="subMgt04"><i class="icon-114"></i>职位管理</a> </li>
		<li style="display:none"> <a href="/company/job/" class="subMgt01"><i class="icon-uniE6024"></i>招聘职位({$countOnline})个</a> </li>
		<li> <a href="/company/account/" class="subMgt05"><i class="icon-116"></i>账户管理</a> </li>
		<li> <a href="/company/resume/index.html" class="subMgt06"><i class="icon-118"></i>简历管理</a> </li>
		<li style="display:none"> <a href="/company/message/index.html?act=view"><i class="icon-uniE6006"></i>消息</a> </li>
	</ul>
</div>
<div class="m_manageAll">
	<ul>
		<li><a href="/company/resume/invite.html"><b class="icon-uniE611"></b><span>发送的面试邀请</span><i class="icon-uniE603"></i></a></li>
		<li><a href="/company/resume/apply.html"><b class="icon-uniE610"></b><span>收到的简历 </span></a><!--{if $num_all>0}--><em>{$num_all}份未读</em><!--{/if}--><i class="icon-uniE603"></i></li>
		<li><a href="/company/job/job.html?act=unitList"><b class="icon-uniE610"></b><span>部门管理</span></a><i class="icon-uniE603"></i></li>
		<li><a href="/companyresumemanage/recommendResume/?back_style=index" style="display:none;"><b class="icon-uniE61F"></b><span>处理推荐简历</span></a>
		<i class="icon-uniE603"></i></li>
		<li><a href="/company/callme.html"><b class="icon-uniE6014"></b><span>联系客服</span></a><i class="icon-uniE603"></i></li>
		<li><a href="/company/wx.html"><b class="icon-uniE6014"></b><span>微信绑定列表</span></a><i class="icon-uniE603"></i></li>
		<li><a href="message意见反馈.html" style="display:none;"><b class="icon-uniE60E"></b><span>意见反馈</span></a><i class="icon-uniE603"></i></li>
	</ul>
	<!--{if $admin}-->
	<h2>在线客服</h2>
	<ul id="m_server">
		<li><a href="javascript:void(0)"><span>{$admin[adminName]} (客户经理)</span><!--<span class="sm-txt">(客户经理)</span>--><i class="icon-uniE603"></i></a></li>
		<!--{if $matches[0]}-->
			<!--{loop $matches[0] $l}-->
				<li><a href="tel:{$l}"><span>联系电话：<font class="blue">{$l}</font></span><i class="icon-uniE603"></i></a></li>
			<!--{/loop}-->
		<!--{/if}-->
		<li><a href="tel:400-810-8597" ><span>全国热线：<font class="blue">400-810-8597</font></span><i class="icon-uniE603"></i></a></li>
		<li><a href="mqqwpa://im/chat?chat_type=wpa&uin={$admin['adminCode']}&version=1&src_type=web&web_src=oicqzone.com"><span>QQ：<font class="blue">{$admin['adminCode']}</font></span><i class="icon-uniE603"></i></a></li>
	</ul>
	<!--{/if}-->
	<a href="/logout.html" class="mManageBtn">退出登录</a>
</div>

<div id="lstBox">
	<!--{loop $job_id $key $_jid}-->
		<input value="{$_jid}" type="checkbox" name="chkjob[$key]" checked="checked">
	<!--{/loop}-->
</div>
<!--{template company/footer}-->
<style type="text/css">
	.companytip{width:200px; height:300px; background:url(//cdn.{ROOT_DOMAIN}/m/images/companyTip.png) no-repeat top; background-size:200px 300px; border-radius:4px;position: absolute;display: none;z-index: 5; }
	.companytip .close{position: absolute;right:0px;top:15px; width:35px; height: 35px;}
	.companytip .linkway{position: absolute;bottom:5px; width:100%; height: 40px;}
		#mask{position: absolute;z-index: 4;background:#000;opacity:0.4;filter:alpha(opacity=40);top:0px;left:0px}
</style>
<div class="companytip" id="companytip">
	<div class="close"></div>
	<div class="linkway"></div>
</div>
<div id="mask" style="display:none;"></div>
<script type="text/javascript">
$(function(){
	$("#refreshJob").click(function(){
		showLoading();
		$.post('/api/web/m_job.api',{'act':'updateJobs' ,cidHash:{$cid}},function(json){
			closeLoading();
			if(json.status>0){
				alert("刷新所有职位成功!");
				window.location.reload();
				return;
			}else if(json.status=-101){
				alert("招聘中没有可以刷新的职位！");return;
			}else{
				alert("刷新失败！");return;
			}
		},'json');
	});

	// $('#m_server li:eq(3) span').html('手机号码');
})

var isTip = {$tip},
	getTip = $.cookie("getTip");
<!--{if $cid==3}-->
	//if(isTip==1&&typeof(getTip)=='undefined'){
		var tip = {
			init:function(){
				$("#companytip").css({top:($(window).height()-$("#companytip").height())/2,left:($(window).width()-$("#companytip").width())/2}).show();
				$("#mask").css({width:document.documentElement.clientWidth,height:document.body.clientHeight}).show();
				$("#companytip .close").click(function(){
					$("#companytip").hide();
					$("#mask").hide();
					//$.cookie("getTip",1,{expires:3600*24});
				});
				$("#companytip .linkway").click(function(){
					$("#companytip").hide();
					$("#mask").hide();
					$(window).scrollTop(510);
					//$.cookie("getTip",1,{expires:3600*24});
				});

			}
		}
		tip.init();
	//}
<!--{/if}-->
</script>
</body>
</html>