<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/img/75x75.png" >
	<title>597人才网触屏版_简历预览</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.jobsort.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.area.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.calling.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
</head>

<body>
<div id="content">
<!--{if $app['isNewApp']!="yes"}-->
<!--{template header}-->
	<header class="pubtop">
	<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;" class="navBtn" id="navBtn" name="top"><i class="jpFntWes"></i></a>
	<div class="cent"><p><b>简历预览</b></p></div>
</header>

	<nav class="pubnav" id="pubnav" style="display:none;"><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
<!--{/if}-->
<script type="text/javascript">
var $navBtn = $('#navBtn');
var $pubnav = $('#pubnav');
$(document).ready(function(){
	$navBtn.toggle(function(){
		$pubnav.slideDown();
	},function(){
		$pubnav.slideUp();
	});
});
</script>
	<section class="layout">
		<div class="job_content">
			<div class="job_box">
				<h1 class="d_posName">
				<span style="color: #666;">姓名：</span>{$resumeInfo[realname]}&nbsp;</h1>
				<h3 class="d_title" style="padding:5px 20px; font-size:14px;">基本信息 <a href="/person/resumes.html?act=base" class="editBtn">编辑</a></h3>
				<div class="d_posInfo_box">
					
					<dl>
						<dt>出生日期：</dt>
						<dd>{$resumeInfo[birthday]}&nbsp;</dd>
					</dl>
					<dl>
						<dt>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</dt>
						<dd>
							{$__jobSex[$resumeInfo[gender]]}&nbsp;
						</dd>
					</dl>
					<dl style="display:none;">
						<dt>民&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;族：</dt>
						<dd>
							汉
						</dd>
					</dl>
					<dl>
						<dt>籍&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贯：</dt>
						<dd>
							{$resumeInfo[native]}&nbsp;
						</dd>
					</dl>
					<dl style="display:none;">
						<dt>政治面貌：</dt>
						<dd>
							{$resumeInfo[political]}&nbsp;
						</dd>
					</dl>
					<dl>
						<dt>婚姻状况：</dt>
						<dd>
							{$__marriage[$resumeInfo[marriage]]}&nbsp;
						</dd>
					</dl>
					<!--{if $resumeInfo[stature]>0}-->
					<dl>
						<dt>身&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高：</dt>
						<dd>
							{$resumeInfo[stature]}&nbsp;
							cm
						</dd>
					</dl>
					<!--{/if}-->
					<!--{if $resumeInfo[avoirdupois]>0}-->
					<dl>
						<dt>体&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重：</dt>
						<dd>
							{$resumeInfo[avoirdupois]}
							kg&nbsp;
						</dd>
					</dl>
					<!--{/if}-->
					<!--{if $resumeInfo[maxEduInfo]}-->
					<dl>
						<dt>最高学历：</dt>
						<dd>
							{$resumeInfo[maxEduInfo]}&nbsp;
						</dd>
					</dl>
					<!--{/if}-->
					<dl>
						<dt>目前状态：</dt>
						<dd>
							{$resumeInfo['_workYear']}
						</dd>
					</dl>
					<dl>
						<dt>现居住地：</dt>
						<dd>
							{$resumeInfo['residence']}&nbsp;
						</dd>
					</dl>
					<dl>
						<dt>详细地址：</dt>
						<dd>
							{$resumeInfo['address']}&nbsp;
						</dd>
					</dl>
					<dl>
						<dt>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</dt>
						<dd>
							{$resumeInfo['mobile']}&nbsp;
						</dd>
					</dl>
					<dl>
						<dt>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</dt>
						<dd>
							{$resumeInfo['email']}&nbsp;
						</dd>
					</dl>
					<dl>
						<dt>Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q：</dt>
						<dd>
							{$resumeInfo['qq']}&nbsp;
						</dd>
					</dl>
				</div>
				<div class="d_description">
					<h3 class="d_title">求职意向<a href="/person/resumes.html?act=join2" class="editBtn">编辑</a></h3>
					<div class="d_posInfo_box">
						<dl>
							<dt>希望从事：</dt>
							<dd>
								{$resumeInfo[joinOffice]}&nbsp;<!--{if $resumeInfo[isparttime]==1}-->（可以接受兼职）<!--{/if}-->
							</dd>
						</dl>
						<dl>
							<dt>职位类别：</dt>
							<dd>
								{$resumeInfo['joinJobClass']}&nbsp;
							</dd>
						</dl>
						<dl>
							<dt>岗位级别：</dt>
							<dd>
								{$resumeInfo['joblevelInfo']}&nbsp;
							</dd>
						</dl>
						<dl>
							<dt>期望行业：</dt>
							<dd>
								{$resumeInfo['joinIndustry']}&nbsp;
							</dd>
						</dl>
						<dl>
							<dt>期望薪资：</dt>
							<dd>
								<!--{if $resumeInfo[hideSalary]==1}-->面议
								<!--{else}-->{$resumeInfo['joinSalaryInfo']}
								<!--{/if}-->
								<!--{if $resumeInfo[chksalary]==1&&$resumeInfo[hideSalary]==0}-->（不低于此薪资）<!--{/if}-->&nbsp;
							</dd>
						</dl>
						<dl>
							<dt>工作地点：</dt>
							<dd>
								{$resumeInfo['joinCity']}&nbsp;
							</dd>
						</dl>
					</div>
					<!--有数据 开始-->
					<!--{if $resumeInfo['workListInfo']}-->
					<h3 class="d_title">工作经验<a href="/person/resumes.html?act=work" class="editBtn">编辑</a></h3>
							<!--{loop $resumeInfo['workListInfo'] $l}-->
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l[workName]}</b>({$l[workStartDate]}<em>-</em><!--{if $l[workEndDate]}-->{$l[workEndDate]}<!--{else}-->至今<!--{/if}-->)</p>
							</div>
							<div class="d_posInfo_box" style="padding-top: 0;">
								<dl>
									<dt>职位名称：</dt>
									<dd>
										{$l[workOffice]}&nbsp;
									</dd>
								</dl>
								<dl>
									<dt>工作内容：</dt>
									<dd>
										{$l[workContent]}&nbsp;
									</dd>
								</dl>
							</div>
						<!--{/loop}-->
					<!--{/if}-->

					<!--有数据 开始-->
					<!--{if $resumeInfo[eduListInfo] || $resumeInfo[trainingListInfo]}-->
					<h3 class="d_title">教育培训经历<a href="/person/resumes.html?act=edu" class="editBtn">编辑</a></h3>
							<!--{loop $resumeInfo[eduListInfo] $l}-->
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l[eduName]}</b>({$l[eduStartDate]}<em>-</em><!--{if $l[eduEndDate]}-->{$l[eduEndDate]}<!--{else}-->至今<!--{/if}-->)</p>
							</div>
							<div class="d_posInfo_box" style="padding-top: 0;">
								<dl>
									<dt>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</dt>
									<dd>
										{$__degree[$l[eduBackGround]]}&nbsp;
									</dd>
								</dl>
								<dl>
									<dt>专业名称：</dt>
									<dd>
										{$l[eduSpecialty]}&nbsp;
									</dd>
								</dl>
							</div>
							<!--{/loop}-->
							<!--{loop $resumeInfo[trainingListInfo] $l}-->
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l[trainingName]}</b>({$l[trainingStartDate]}<em>-</em><!--{if $l[trainingEndDate]}-->{$l[trainingEndDate]}<!--{else}-->至今<!--{/if}-->)</p>
							</div>
							<div class="d_posInfo_box" style="padding-top: 0;">
								<dl>
									<dt>培训项目：</dt>
									<dd>
										{$l[trainingSpecialty]}&nbsp;
									</dd>
								</dl>
								<dl>
									<dt>专业课程：</dt>
									<dd>
										{$l[trainDetail]}&nbsp;
									</dd>
								</dl>
							</div>
							<!--{/loop}-->
					<!--{/if}-->

					<!--{if $resumeInfo[projectListInfo]}-->
					<h3 class="d_title">项目经验<a href="/person/resumes.html?act=project" class="editBtn">编辑</a></h3>
						<!--{loop $resumeInfo[projectListInfo] $l}-->
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l[projectName]}</b>({$l[projectStart]}<em>-</em><!--{if $l[projectEnd]}-->{$l[projectEnd]}<!--{else}-->至今<!--{/if}-->)</p>
							</div>
							<div class="d_posInfo_box" style="padding-top: 0;">
								<dl>
									<dt>担&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;任：</dt>
									<dd>
										{$l[projectDuty]}&nbsp;
									</dd>
								</dl>
								<dl>
									<dt>项目介绍：</dt>
									<dd>
										{$l[projectIntr]}&nbsp;
									</dd>
								</dl>
							</div>
						<!--{/loop}-->
					<!--{/if}-->
					
					<!--{if $resumeInfo[languageListInfo]}-->
					<h3 class="d_title">语言能力<a href="/person/resumes.html?act=language" class="editBtn">编辑</a></h3>
						<!--{loop $resumeInfo[languageListInfo] $l}--> 
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l['languageTypeInfo']}</b>({$l['langSkillLevelInfo']})</p>
							</div>
							<div class="d_posInfo_box" style="padding-top: 0;">
								<dl>
									<dt>证&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;书：</dt>
									<dd>
										{$l[langCert]}&nbsp;
									</dd>
								</dl>
							</div>
						<!--{/loop}-->
					<!--{/if}-->

					<!--{if $resumeInfo[skillListInfo]}-->
					<h3 class="d_title">技能专长<a href="/person/resumes.html?act=skill" class="editBtn">编辑</a></h3>
						<!--{loop $resumeInfo[skillListInfo] $l}--> 
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l['SkillName']}</b>({$l['SkillLevelInfo']})</p>
							</div>
						<!--{/loop}-->
					<!--{/if}-->

					<!--{if $resumeInfo[certificateListInfo]}-->
					<h3 class="d_title">证书<a href="/person/resumes.html?act=certificate" class="editBtn">编辑</a></h3>
						<!--{loop $resumeInfo[certificateListInfo] $l}--> 
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l['certificateName']}</b>({$l['CertGainTimeYear']}获得)</p>
							</div>
						<!--{/loop}-->
					<!--{/if}-->

					<!--{if $resumeInfo[otherinfoListInfo]}-->
					<h3 class="d_title">其他信息<a href="/person/resumes.html?act=other" class="editBtn">编辑</a></h3>
						<!--{loop $resumeInfo[otherinfoListInfo] $l}--> 
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l['AppendType']}</b>({$l['TopicContent']})</p>
							</div>
						<!--{/loop}-->
					<!--{/if}-->

					<!--{if $resumeInfo[practiceListInfo]}-->
					<h3 class="d_title">实践经验<a href="/person/resumes.html?act=practice" class="editBtn">编辑</a></h3>
						<!--{loop $resumeInfo[practiceListInfo] $l}-->
							<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
								<p><b>{$l[PracticeName]}</b>({$l[_PracticeTimeStart]}<em>-</em><!--{if $l[_PracticeTimeEnd]}-->{$l[_PracticeTimeEnd]}<!--{else}-->至今<!--{/if}-->)</p>
							</div>
							<div class="d_posInfo_box" style="padding-top: 0;">
								<dl>
									<dt>实践经历：</dt>
									<dd>
										{$l[PracticeDetail]}&nbsp;
									</dd>
								</dl>
							</div>
						<!--{/loop}-->
					<!--{/if}-->

					<!--{if $resumeInfo[joinEvaluate]}-->
					<h3 class="d_title" style="margin-top: 3px;">
						自我评价<a href="/person/resumes.html?act=evaluate" class="editBtn">编辑</a></h3>
					<div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
						<p>
							{$resumeInfo[joinEvaluate]}&nbsp;
						</p>
					</div>
					<!--{/if}-->
					<h3 class="d_title">
						联系方式<a name="link"></a></h3>
					 <div class="d_word" style="padding: 5px 20px; background: none repeat scroll 0 0 #fff;">
						<p>
							{$resumeInfo[mobile]}&nbsp;
						</p>
					</div>
				</div>
			</div>
		</div>

	</section>
<!--{if $app['isNewApp']!="yes"}-->
<!--{template footer}-->
<!--{/if}-->
</div>
<script>
var $schbox = $('#schbox');
var $schBtn = $('#schBtn');
var $closeSchBox = $('#closeSchBox');
var $schBoxText = $('#schBoxText');
var $content = $('#content');

var $navBtn = $('#navBtn');
var $pubnav = $('#pubnav');

var $basTxt = $('#basTxt');
var $basTxtBtn = $('#basTxtBtn');
$(document).ready(function(){
	$('#hotMore').click(function(){
		$('#hotLst').height('100%');
		$(this).css({'display':'none'});
	});
	
	$schBtn.bind('click',function(){
		$content.css({'display':'none'});
		$schbox.css({'display':'block'});
		$schBoxText.focus();
	});
	
	$closeSchBox.bind('click',function(){
		$schbox.css({'display':'none'});
		$content.css({'display':'block'});
	});
	
	$navBtn.toggle(function(){
		$pubnav.slideDown();
	},function(){
		$pubnav.slideUp();
	});
	
	$basTxtBtn.bind('click',function(){
		$basTxt.css({'height':'100%'});
		$(this).css({'display':'none'});
	});
	
});
</script>
</body></html>