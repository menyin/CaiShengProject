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
	.hidden_li{display:none;}
	.mResumexD01 {position: relative;}
	.contacUs {position: absolute; right:10px; top:40px!important;}

	body{padding-top:0px!important;}
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
<style type="text/css">
.detBtn1{color: #fff;height: 30px;line-height: 30px;position: absolute;right: 80px;top: 5px;width: 50px;text-align: center;z-index: 4;
background: #e85d4e;border: 1px solid #d62e1b;border-radius: 3px;}
.detBtn2{font-size:2.0em;color: #fff;height: 30px;line-height: 30px;position: absolute;right: 150px;top: 5px;text-align: center;z-index: 5;border-radius: 3px;}
</style>
</head>
<body style="padding-bottom:72px;">
<!--简历详情-->
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop"><div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a></div><a href="/" class="detBtn2">597人才网</a><a href="/company/resume/searchResume.html" class="detBtn1">简历库</a><a href="/company/" class="detBtn">会员中心</a></div>
<div style="padding-top: 45px;"></div>
<!--{/if}-->
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
	<p><span>更新时间：{$resumeInfo['_updateTime']}</span></p>
	<!--{if $joinJobInfo['jname']}--><p><span>应聘职位：{$joinJobInfo['jname']}</span></p><!--{/if}-->
</div>
<!--{if $right>=8}-->
	<!--{if $noShow==1}-->
	<!--{else}-->
		<div class="mResumexD01 ">
			<h2>联系方式</h2>
			<ul>
				<li><span>手机：</span><em>{$resumeInfo['mobile']}</em></li>
				<li><span>邮箱：</span><em>{$resumeInfo['email']}</em></li>
				<li><span>QQ：</span><em>{$resumeInfo['qq']}</em></li>
			</ul>
			<span class="contacUs"><a href="tel:{$resumeInfo['mobile']}" class="tel" id="telCircleBtn"><i class="jpFntWes">&#xf095;</i></a></span>

		</div>
	<!--{/if}-->
<!--{/if}-->
<div class="mResumexD01">
<h2>基本资料</h2>
	<ul>
		<li><span>目前状态：</span><em>{$resumeInfo['_workYear']}</em></li>
		<li><span>户籍：</span><em>{$resumeInfo['nativeName']}</em></li>
		<li><span>现居住地：</span><em>{$resumeInfo['residenceName']}</em></li>
		<li><span>详细地址：</span><em>{$resumeInfo['address']}</em></li>
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
<input type="hidden" id="rid" name="rid" value="{$_rid}">
<input type="hidden" id="join_id" name="join_id" value="{$_join_id}">
<!--浮动窗合适、不合适-->
<!--{if $right>=8}-->
	<!--{if $noShow==1}-->
	<!--浮动窗获取电话号码-->
		<div class="m_master" style="display:none;"></div>
		<div class="mResumeBmpop">
			<a style="width:25%; display:none;"  onclick="return invite()" href="javascript:;" class="subPopLink03">邀请面试</a>
			<a style="width:20%;" href="/company/resume/addMark.html?rid={$_rid}" class="subPopLink04">备注</a>
			<!--{if $resumeInfo['display']==1}-->
			<a style="width:25%;" href="javascript:;" onclick="return getMobile()" class="subPopLink09" id="getMobileSub">获取联系方式</a>
			<!--{/if}-->
			<a target="_blank" style="width:25%;background: #0af;color:#fff;margin-left:5px;" href="http://a.app.qq.com/o/simple.jsp?pkgname=com.rcw597.app">和他聊聊</a>
		</div>
	<!--{else}-->
		<div class="mResumeBmpop">
			<a onclick="return invite()" href="javascript:;" class="subPopLink03">邀请面试</a>
			<a href="/company/resume/addMark.html?rid={$_rid}" class="subPopLink04">备注</a>
			<!--{if $comJoin['status']==2 && $_join_id}-->
				<a href="javascript:;" class="subPopLinkGray">已婉拒</a>
			<!--{elseif $_join_id}-->
				<a href="javascript:;" class="subPopLink05 refuseApply">拒绝</a>
			<!--{/if}-->
			<!--{if $_join_id}-->
			<a href="javascript:;" id="deleteResumt" class="subPopLink06" onclick="deleteResumt()">删除</a>
			<!--{/if}-->
		</div>
	<!--{/if}-->
<!--{else}-->
<!--浮动窗获取电话号码-->
<div class="m_master" style="display:none;"></div>
<div class="mResumeBmpop">
	<a style="width:25%; display:none;" onclick="return invite()" href="javascript:;" class="subPopLink03">邀请面试</a>
	<a style="width:20%;" href="/company/resume/addMark.html?rid={$_rid}" class="subPopLink04">备注</a>
	<!--{if $resumeInfo['display']==1}-->
	<a style="width:28%;" href="javascript:;" onclick="return getMobile()" class="subPopLink09" id="getMobileSub">获取联系方式</a>
	<!--{/if}-->
	<a target="_blank" style="width:25%;background: #0af;color:#fff;margin-left:5px;" href="http://a.app.qq.com/o/simple.jsp?pkgname=com.rcw597.app">和他聊聊</a>
</div>
<!--{/if}-->
<!--浮动窗获取电话号码花费点-->
<div class="mRtake" id="down_alert" style="display:none;">
	<div class="mRtakeCont">
		<p>查看联系方式将扣除一个下载点，下次再打开该简历时自动打开联系方式，不会重复扣点！</p>
		<a href="javascript:;"><em class="mWarn"></em>不再提醒</a>
	</div>
	<ul>
		<li><a href="javascript:;" onclick="return cancelDown()" class="mRtakeBtn01">取消</a></li>
		<li><a href="javascript:;" id="downRusume" onclick="return downResume()" class="mRtakeBtn02">确定</a></li>
	</ul>
</div>
<!--浮动窗获取电话号码花费点-->
<div class="mRtake" id="invite_product" style="display:none;">
	<div class="mRtakeCont">
		<p>请先下载联系方式</p>
		<!-- <a href="/company/service/myservice.html" target="_blank">查看或购买服务</a> -->
	</div>
	<ul>
		<li style="width:100%;"><a href="javascript:;" onclick="return cancelDown()" class="mRtakeBtn01">确定</a></li>
		<!-- <li><a href="/company/service/myservice.html" class="mRtakeBtn02">确定</a></li> -->
	</ul>
</div>
<!--浮动窗获取电话号码花费点-->
<div class="mRtake" id="product" style="display:none;">
	<div class="mRtakeCont">
		<p>试用会员每月 <span>10</span> 份简历已用完，</p>
		<p>请前往电脑版进行查看或购买服务。</p>
		<!-- <a href="/company/service/myservice.html" target="_blank">查看或购买服务</a> -->
	</div>
	<ul>
		<li style="width:100%;"><a href="javascript:;" onclick="return cancelDown()" class="mRtakeBtn01">确定</a></li>
		<!-- <li><a href="/company/service/myservice.html" class="mRtakeBtn02">确定</a></li> -->
	</ul>
</div>
<div class="mRtake" id="productFree" style="display:none;">
	<div class="mRtakeCont">
		<p>试用会员每月可查看 <span>10</span> 份简历,</p>
		<p>您本月还可查看 <span>{$resumeFree}</span> 份简历。</p>
		<!-- <a href="/company/service/myservice.html" target="_blank">查看或购买服务</a> -->
	</div>
	<ul>
		<li><a href="javascript:;" onclick="return cancelDown()" class="mRtakeBtn01">取消</a></li>
		<li><a href="javascript:;" id="downRusume" onclick="return downResume()" class="mRtakeBtn02">确定</a></li>
		<!-- <li><a href="/company/service/myservice.html" class="mRtakeBtn02">确定</a></li> -->
	</ul>
</div>
<ul class="mRphone" id="reShowPhone" style="display:none;bottom:53px;">
	<li style="border-bottom:1px solid #cbcfd1;border-top:1px solid #cbcfd1;"><em class="icon-uniE605"></em><span id="re_mobile"></span><a id="re_mobile_href" href="" class="icon-uniE6033"></a></li>
	<li id="re_email_li"><em class="icon-uniE6042"></em><span id="re_email"></span></li>
</ul>

<!--{template company/footer}-->
<script>
var apply_id = '{$join_id}';
var isNewApp = "{$app['isNewApp']}";//新app标示
var appType = "{$app['type']}";//app类型
function deleteResumt(){
	if(isNewApp=="yes"){//新app需重写
		window.android.deleteResumt();//android
		return;
	}
	var r = confirm("您确定要删除该收到的简历么？");
	if(r){
		$.get('/api/web/company.api',{'act':'join_del' ,'join_id':apply_id,cidHash:{$cid}},function(json){
			if(json.status == 0){
				alert('操作失败!');
				return;
			}else if(json.status > 0){
				alert(json.msg);
				window.location.href="/company/resume/apply.html";
			}
		},'json');
	}
}

//拒绝
$(".refuseApply").click(function(){
	var r = confirm("确定该简历不符合应聘职位的要求，不需要参加面试?");
	rid=$("#rid").val();
	join_id=$("#join_id").val();
	cid={$cid};
	if(r){
		$.getJSON('/api/web/'+'company.api?act=noInvite&rid=' + rid + '&cidHash=' + cid + '&apply_id='+join_id+'&v=' + Math.random(), function(result){
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

var isDownLoad = {$isDownLoad},
	isJoin = {$isJoin},
	noShow = {$noShow},
	resume_id = "{$resumeInfo[_rid]}",
	apply_id = "{$_join_id}",
	src="network",
	recommendid = '0';

var isshowresumeinfo = 1;
var is_show_linkway = 0;
var not_member = 0;
var member_expires = 0;
var is_show = false;
function downResume(){
	var h = $(".mWarn").hasClass('mWarncur');
	var have_next = 0;
	if(h){
		have_next =1;
	}

	setStatus(have_next);
}
function getMobile(){
	<!--{if !$products}-->
		<!--{if $resumeFree>0}-->
			$("#productFree").show();
			$(".m_master").show();
			return false;
		<!--{else}-->
			$("#product").show();
			$(".m_master").show();
			return false;
		<!--{/if}-->
	<!--{/if}-->

	if(isshowresumeinfo && is_show_linkway){
		if(is_show ==false){
			$("#reShowPhone").fadeIn("slow");
			is_show = true;
			$("#getMobileSub").html("收起联系方式");
		}else{
			$("#reShowPhone").fadeOut("slow");
			is_show = false;
			$("#getMobileSub").html("查看联系方式");
		}
	}else{
		//判断权限
		//开始弹窗 下载联系方式
		$(".m_master").show();
		$("#down_alert").show();
		return false;
	}
}
function invite(){
	//if (noShow){
	//	$("#invite_product").show();
	//	$(".m_master").show();
	//	return false;
	//}else{
		window.location.href="/company/resume/inviteResume.html?rid={$_rid}&join_id={$_join_id}";
	//}
}
function cancelDown(){
	$(".m_master").hide();
	$("#down_alert").hide();
	$("#product").hide();
	$("#invite_product").hide();
	$('#productFree').hide();
}

function setStatus(have_next){
	if(isNewApp=="yes" && appType=='android'){
		window.android.setStatus(have_next);//android
		return;
	}
	var rid=$("#rid").val();
	var data = {'act':'getlinkway','rid':rid,cidHash:{$cid}};
	$.getJSON('/api/web/company.api',data,function(json){
			cancelDown();
			if (json.status<0) {
				if(json.status==-104){
					json.msg = data.msg.replace(/<a .*<\/a>/g,'');
				}
				alert(json.msg);
				return;
			}else if (json.status==0) {
				alert('您尚未登录，请先登录！');
				window.location.href = '/company/login.html';
				return;
			}else{
				$("#re_mobile").html(json.mobile);
				$("#re_mobile_href").attr({'href':'tel:'+json.mobile});
				$("#re_email").html(json.email);
				if(json.email ==''){
					$("#re_email_li").css('display','none');
				}
				$("#reShowPhone ").show();
				can_invite = true;
				$("#getMobileSub").html("收起联系方式");
				is_show = true;
				isshowresumeinfo =1;
				is_show_linkway = 1;
				$(".subPopLink03").show();
			}
	},'json');
}
</script>

</body></html>