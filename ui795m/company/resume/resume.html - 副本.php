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
<div class="loginPop"><div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>{$join_id}投递的简历</div></div>
<!-- <div class="mResumextop">
	<div class="msmextop"><em class="icon-uniE610"></em>投递的职位：{$resumeInfo['jname']}</div>
</div> -->
<div class="mResumexD">
	<img src="{$resumeInfo['attachment']}" width="109" height="136">
	<h2>{$resumeInfo['realname']}</h2>
	<p><span><!--{if $resumeInfo[gender]==1}-->男<!--{else}-->女<!--{/if}--></span>
	<b>|</b><span>{$resumeInfo['age']}岁</span>
	<!--{if $resumeInfo['eduListInfo'][0]['eduBackGroundInfo']}--><b>|</b><span>{$resumeInfo['eduListInfo'][0]['eduBackGroundInfo']}</span><!--{/if}-->
	<b>|</b><span>{$resumeInfo['marriageInfo']}</span>
	<b>|</b><span>{$resumeInfo['statureInfo']}</span>
	<b>|</b><span>{$resumeInfo['politicalInfo']}</span>
	</p>
</div>
<!--{if $right>=8}-->
<div class="mResumexD01">
<h2>联系方式</h2>
	<ul>
		<li><span>手机：</span><em>{$resumeInfo['mobile']}</em></li>
		<li><span>邮箱：</span><em>{$resumeInfo['email']}</em></li>
		<li><span>QQ：</span><em>{$resumeInfo['qq']}</em></li>
	</ul>
</div>
<!--{/if}-->
<div class="mResumexD01">
<h2>基本资料</h2>
	<ul>
		<li><span>目前状态：</span><em><!--{if $resumeInfo[workstate]==2}-->{$resumeInfo['graduateDate']}毕业<!--{else}-->{$resumeInfo['toWorkYear']}年工作经验<!--{/if}--></em></li>
		<li><span>户籍：</span><em>{$resumeInfo['nativeName']}</em></li>
		<li><span>现居住地：</span><em>{$resumeInfo['residenceName']}</em></li>
	</ul>
</div>
<div class="mResumexD01">
<h2>求职意向</h2>
	<ul>
		<li><span>希望从事：</span><em>{$resumeInfo[joinOffice]}(<!--{if $resumeInfo['joinType']==1}-->全职<!--{/if}--><!--{if $resumeInfo['joinType']==2}-->兼职<!--{/if}--><!--{if $resumeInfo['joinType']==3}-->实习<!--{/if}-->)</em></li>
		<li><span>职位类别：</span><em>{$resumeInfo['joinJobClass']}</em></li>
		<li><span>岗位级别：</span><em>{$resumeInfo['joblevelInfo']}<!--{if $resumeInfo[chkJoblevel]==1}-->（不低于此级别）<!--{/if}--></em></li>
		<li><span>期望行业：</span><em>{$resumeInfo['joinIndustry']}</em></li>
		<li><span>期望薪资：</span><em><!--{if $resumeInfo[hideSalary]==1}-->面议<!--{else}-->{$resumeInfo['joinSalaryInfo']}<!--{/if}--><!--{if $resumeInfo[chksalary]==1&&$resumeInfo[hideSalary]==0}-->（不低于此薪资）<!--{/if}--></em></li>
		<li><span>工作地点：</span><em>{$resumeInfo['joinCity']}</em></li>
	</ul>
</div>
<!--{if $resumeInfo['joinEvaluate']}-->
<div class="mResumexD01" style="padding-bottom:20px;">
	<h2>自我评价</h2>
	<div class="mResumexContBg">
		<div class="mRsmTit" style="color:#3d4b4d;">{$resumeInfo['joinEvaluate']}</div>
	</div>
</div>
<!--{/if}-->
<!--工作经历-->
<!--{if $resumeInfo[workListInfo]}-->
	<div class="mResumexD01">
	<h2>工作经历</h2>
	<!--{loop $resumeInfo[workListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont">
				<span class="mRsmGary">{$l[workStartDate]}<!--{if $l[workEndDate]}-->-{$l[workEndDate]}<!--{else}--> -至今<!--{/if}--><br />[<!--{if $l[workyear]}-->{$l[workyear]}年<!--{/if}--><!--{if $l[workmonth]}-->{$l[workmonth]}个月<!--{/if}-->]</span>
				<p><span><!--{if $l[WorkJobType]==2}-->兼职<!--{/if}--><!--{if $l[WorkJobType]==3}-->实习<!--{/if}-->{$l[workOffice]}</span><b>|</b><em>{$l[workName]}</em><b>|</b><em><!--{if $l[workSalary]&&!$l[workHideSalary]}-->{$l[workSalary]}元/月<!--{/if}--><!--{if $l[workHideSalary]}-->薪资保密<!--{/if}--></em></p>
				<div class="mRsmTit"><!--{if $l[WorkJobType]}--><span class="joblevel">{$l['WorkJobLevelInfo']}</span><!--{/if}--></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>		
<!--{/if}-->
<!--教育培训经历-->
<!--{if $resumeInfo[eduListInfo]||$resumeInfo[trainingListInfo]}-->
	<div class="mResumexD01">
	<h2>教育培训经历</h2>
	<!--{if $resumeInfo[eduListInfo]}-->
		<!--{loop $resumeInfo[eduListInfo] $l}-->
			<div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary">{$l[eduStartDate]}<!--{if $l[eduEndDate]}--> 至 {$l[eduEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
					<p><span>{$l['eduBackGroundInfo']}</span><b>|</b><em>{$l[eduName]}</em><b>|</b><em>{$l[eduSpecialty]}</em></p>
				</div>
			</div>
		<!--{/loop}-->
	<!--{/if}-->
	<!--{if $resumeInfo[trainingListInfo]}-->
		<!--{loop $resumeInfo[trainingListInfo] $l}-->
			<div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary">{$l[trainingStartDate]}<!--{if $l[trainingEndDate]}--> 至 {$l[trainingEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
					<p><span>{$l[trainingSpecialty]}</span><b>|</b><em>{$l[trainingName]}</em><b>|</b><em>[证]{$l[trainingBackGround]}</em></p>
				</div>
			</div>
		<!--{/loop}-->
	<!--{/if}-->
	</div>
<!--{/if}-->

<!--项目经验-->
<!--{if $resumeInfo[projectListInfo]}-->
	<div class="mResumexD01">
	<h2>项目经验</h2>
	<!--{loop $resumeInfo[projectListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<span class="mRsmGary">{$l[projectStart]}<!--{if $l[projectEnd]}--> 至 {$l[projectEnd]}<!--{else}--> - 至今<!--{/if}--></span>
				<p><span>{$l[projectName]}</span><b>|</b><em>担任：{$l[projectDuty]}</em><b>|</b><em>{$l[projectIntr]}</em></p>
				<div class="mRsmTit">{$l[projectIntr]}<span>{$l[projectExperience]}</span></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->

<!--语言能力-->
<!--{if $resumeInfo[languageListInfo]}-->
	<div class="mResumexD01">
		<h2>语言能力</h2>
		<!--{loop $resumeInfo[languageListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont">
				<p><span>{$l['languageTypeInfo']}</span><b>|</b><em>{$l['langSkillLevelInfo']}</em><b>|</b><em>{$l[langCert]}</em></p>
			</div>
		</div>
		<!--{/loop}-->
	</div>
<!--{/if}-->
<!--/-->

<!--技能专长-->
<!--{if $resumeInfo[skillListInfo]}-->
	<div class="mResumexD01">
		<h2>技能专长</h2>
		<!--{loop $resumeInfo[skillListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont">
				<p><span>{$l[SkillName]}</span><b>|</b><em>{$l['SkillLevelInfo']}</em></p>
			</div>
		</div>
		<!--{/loop}-->
	</div>
<!--{/if}-->
<!--/-->


<!--证书-->
<!--{if $resumeInfo[certificateListInfo]}-->
	<div class="mResumexD01">
	<h2>证书</h2>
	<!--{loop $resumeInfo[certificateListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<p><span>{$l[certificateName]}</span><b>|</b><em>{$l[CertGainTimeYear]}年获得</em></p>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->
<!--/-->

<!--其他信息-->
<!--{if $resumeInfo[otherinfoListInfo]}-->
	<div class="mResumexD01">
	<h2>其他信息</h2>
	<!--{loop $resumeInfo[otherinfoListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<span class="mRsmGary">{$l[AppendType]}</span>
				<div class="mRsmTit"><span>{$l[TopicContent]}</span></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->

<!--实践经验-->
<!--{if $resumeInfo[practiceListInfo]}-->
	<div class="mResumexD01">
	<h2>实践经验</h2>
	<!--{loop $resumeInfo[practiceListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<span class="mRsmGary">{$l['_PracticeTimeStart']}<!--{if $l[_PracticeTimeEnd]}--> 至 {$l['_PracticeTimeEnd']}<!--{else}--> - 至今<!--{/if}--></span>
				<p><span>{$l['PracticeName']}</span></p>
				<div class="mRsmTit"><span>{$l['PracticeDetail']}</span></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->
<!--浮动窗合适、不合适-->
<div class="mResumeBmpop">
	<input type="hidden" id="rid" name="rid" value="{$_rid}">
	<input type="hidden" id="join_id" name="join_id" value="{$_join_id}">
	<a href="/company/resume/inviteResume.html?rid={$_rid}&join_id={$_join_id}" class="subPopLink03">邀请面试</a>
	<a href="/company/resume/addMark.html?rid={$_rid}" class="subPopLink04">备注</a>
	<!--{if $right>=8}-->
		<!--{if $resumes['status']==2}-->
			<a href="javascript:;" class="subPopLinkGray">已婉拒</a>
		<!--{else}-->
			<a href="javascript:;" class="subPopLink05 refuseApply">拒绝</a>
		<!--{/if}-->
	<!--{/if}-->	
	<!--{if $right<8}-->
		<a style="width:30%;" href="javascript:;" onclick="return getMobile()" class="subPopLink09" id="getMobileSub">获取联系方式</a>
	<!--{/if}-->
	<!-- <a href="javascript:;" id="deleteResumt" class="subPopLink06">删除</a> -->
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
	rid=$("#rid").val();
	join_id=$("#join_id").val();
	if(r){
		$.getJSON('/api/web/'+'company.api?act=noInvite&rid=' + rid + '&apply_id='+join_id+'&v=' + Math.random(), function(result){
			if(result.status>0) {
				alert('已婉言拒绝');
			} else {
				alert(result.error);
			}
			$(".refuseApply").hide();
			$(".subPopLinkGray").show();
		});
	}
});
</script>
</body></html>