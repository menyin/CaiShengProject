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
	<title>{$resume['realname']}简历-597人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
<style>
	.hidden_li{display:none}
</style>
<script>
$(document).ready(function() {
	$('.expandAll').click(function(){
		$('.hidden_li').slideDown("slow");
		$(this).hide();
		$(".expandAllcur").show();
	});
	$('.expandAllcur').click(function(){
		$('.hidden_li').slideUp('slow');
		$(this).hide();
		$(".expandAll").show();
	});
		$('.mRsmPop').click(function(){
		$(this).toggleClass('mRsmPopCur').prev('.mRsmTit').slideToggle();
	});
	$('.mRtakeCont a').click(function(){
		$('.mWarn').toggleClass('mWarncur');
	});
})

</script>
</head>
<body style="padding-bottom:72px;">
<!--简历详情-->
<div class="loginPop"><div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>投递的简历</div></div>
<!--{template company/resume/resume_common}-->

<!--浮动窗合适、不合适-->
<div class="mResumeBmpop">
	<a href="/company/resume/inviteResume.html?id={$resume[_id]}" class="subPopLink03">邀请面试</a>
	<a href="/company/resume/addMark.html?id={$resume[_id]}" class="subPopLink04">备注</a>
	<a href="javascript:;" class="subPopLink05 refuseApply">拒绝</a>
	<a href="javascript:;" style="display:none" class="subPopLinkGray">已婉拒</a> 
	<a href="javascript:;" id="deleteResumt" class="subPopLink06">删除</a>
</div>

<script>
var apply_id = 46105344;
$("#deleteResumt").click(function(){
	var r = confirm("您确定要删除该收到的简历么？");
	if(r){
		$.post('/companyresumemanage/deleteApplyResume',{'apply_id':apply_id},function(json){
			if (json && !json.success) {
				alert(json.error);
				return;
			}
			window.location.href="/companyresumemanage/apply";
		},'json');
	}
});


$(".refuseApply").click(function(){
	var r = confirm("确定该简历不符合应聘职位的要求，不需要参加面试?");
	if(r){
		$.post('/companyresumemanage/refuseApplyResume',{'apply_id':apply_id},function(json){
			if (json && !json.success) {
				alert(json.error);
				return;
			}
			$(".refuseApply").hide();
			$(".subPopLinkGray").show();
		},'json');
	}
});
</script>
</body></html>