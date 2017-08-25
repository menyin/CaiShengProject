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
	<title>简历管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/saved_resource"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/mobile.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/global.js"></script>
<script type="text/javascript">
	jpjs.config({
		preload: 'mobile, base.util, base.class, base.shape',
		preCombo: 'jquery, mobile, base.util, base.class, base.shape, base.event, base.attribute, base.aspect, tools.cookie'
	});
</script>
<style type="text/css">
</style>
</head>
<body>
<div class="loginPop">
	<div class="loginTopBg loginTopBg2">
		<a href="/company/resume/"><i class="icon-uniE6005"></i></a>
		<a href="/company/resume/applySearch.html?act=join" class="mFilterTop">筛选</a>
		收到的简历
	</div>
</div>
<div class="mRcmend" style="background:none;">
		<!--{if !$no}-->
		<div class="mNoData">
			<em class="icon-uniE61E"></em>
			<span><!-- 该筛选条件下 -->暂无数据</span>
		</div>
		<!--{else}-->
		<div id="pageless_container" class="mRcmendListbg mFilterdListbg">
			<ul>
				<!--{loop $resumes $resume}-->
				<li>
					<a href="/company/resume/resume.html?rid={$resume[_id]}"><b>{$resume[jname]}</b><b class="subFtit">{$resume[realname]}</b><p><span>{$resume[maxEdu]}</span><span>|</span><span>{$resume[birthday]}</span><span>|</span><span>{$resume[_workYear]}</span></p></a>
					<div class="mTitimg">
						<img src="http://cdn.597.com/m/images/m_icon17.png" width="62" height="78">
					</div>
					<div class="show_time">1小时前</div>
					<i class="green">未读</i>
					<i class="blue">已读</i>
					<i>已邀请</i>
					<em class="icon-uniE603"></em>
				</li>
				<!--{/loop}-->
			</ul>
			<div class="loading"></div>
		</div>
		<!--{/if}-->
</div>

<script type="text/javascript">
jpjs.use('mobile.mobilePageless', function(mobilePageless, $){
	var p = new mobilePageless({
		url: '/companyresumemanage/AjaxGetApplyData/?job_id=&status=&apply_time=&page={}',
		dataValue: 'msg',
		end: '0',
		loadHTML: '<img src="/img/common/loading.gif" />正在加载...',
		distance: 0
	});
});
function deleteResume(apply_id,status){
	var alert_msg = "不能查看";
	if(status ==5){
		//对方放弃
		alert_msg = "对方放弃，不能查看简历，是否删除？"
	}
	if(status ==6){
		//对方删除简历
		 alert_msg = "对方删除简历，不能查看，是否删除？"
	}
	if(apply_id =='' ||apply_id ==0){
		alert("没有找到要删除的简历");
		return false;
	}
	 var data ={'apply_id':apply_id};
	 var r = confirm(alert_msg);
	 if(!r){
		 return false;
	 }
	$.post('/companyresumemanage/deleteApplyResume',data,function(json){
			if (json && !json.success) {
					alert(json.error);
					return;
			}
			alert("删除成功");
			window.location.reload();
			return;
	},'json');
}
</script>
<!--{template company/footer}-->
</body></html>