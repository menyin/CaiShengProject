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
<style>
body{padding-top:0px!important;}
 .hidden_li{display:none};
</style>
</head>
<body style="padding-bottom: 54px;">
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop"><div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>邀请的简历</div></div>
<div style="padding-top: 45px;"></div>
<!--{/if}-->
<input type="hidden" id="rid" name="rid" value="{$_rid}">
<input type="hidden" id="join_id" name="join_id" value="{$_join_id}">
<!--{template company/resume/resume_common}-->
<!--浮动窗设置面试结果放入回收站-->
<div class="mResumeBmpop">
	<a href="javascript:;" style="width:80%;" onclick="return setResult(3935815)" class="subPopLink01 subPopLinkz">设置面试结果</a>
	<!-- <a href="javascript:;" id="deleteResume" class="subPopLink02">删除</a>  -->
</div>
<!--设置面试结果-->
<div class="m_master" style="display: none;"></div>
<div class="mRtake" style="display: none;">
	<div class="setInview">
		<h2>设置面试结果</h2>
		<div class="setInList">
			<a href="javascript:;"><i r-data="1" class="icon-uniE6012"></i><span>未参加面试</span></a>
			<a href="javascript:;"><i r-data="2" class="icon-uniE6002"></i><span>录用</span></a>
			<a href="javascript:;" class="last"><i r-data="3" class="icon-uniE6002"></i><span>淘汰</span></a>
		</div>
	</div>
	<ul>
		<li><a href="javascript:;" onclick="return conseSEt()" class="mRtakeBtn01">取消</a></li>
		<li><a href="javascript:;" id="setAuditionResult" onclick="setAuditionResult()" class="mRtakeBtn02">确定</a></li>
	</ul>
</div>
<script>

$(function(){
	//将简历放回回收站
	var invite_id =3935815;
	$("#deleteResume").click(function(){
		var r =confirm("确定要将该简历放入回收站吗？");
		if(r==true){
			$.post('/companyresumemanage/deleteInvites/',{'invite_id':invite_id},function(json){
				if (json && !json.success) {
					alert(json.error);
					return;
				}else{
					alert("放入回收站成功");
					window.location.href="/companyresumemanage/inviteResumeList";
				}
			},'json');
		 }
	}); 
	$(".setInList a i").click(function(){
		$(".setInList a .icon-uniE6012").addClass("icon-uniE6002").removeClass("icon-uniE6012");
		$(this).addClass("icon-uniE6012").removeClass("icon-uniE6002");
	});
	$(".setInList a").click(function(){
		$(".setInList a .icon-uniE6012").addClass("icon-uniE6002").removeClass("icon-uniE6012");
		$(this).find("i").addClass("icon-uniE6012").removeClass("icon-uniE6002");
	});
})

var isNewApp = "{$app['isNewApp']}";
function appJump(){
	window.android.appJump();//android
}
function setAuditionResult(){
	var value = $(".setInList a .icon-uniE6012").attr("r-data");
	var join_id=$("#join_id").val();
		$.getJSON('/api/web/company.api',{'act':'inviteStatus' ,inviteId:join_id,type:value,cidHash:{$cid}}, function(json) {
			if (json.status == '1'){
				alert(json.msg);
				if(isNewApp!='yes'){
					window.location.reload();
				}else{
					appJump();
				}
				return ;
			}else{
				alert('操作失败');
				return;
			}
			return;
		});
		/*$.post('/companyresumemanage/setAuditionResult',{'invite_id':invite_id,'value':value},function(json){
			if (json && !json.success) {
				alert(json.error);
				return;
			}else{
				alert("设置成功");
				window.location.href="/companyresumemanage/inviteResumeList";
			}
		},'json');*/
}
function  setResult(invite_id){
	$(".m_master").show();
	$(".mRtake").show();
}
function conseSEt(){
	$(".m_master").hide();
	$(".mRtake").hide();
}
</script>
</body></html>