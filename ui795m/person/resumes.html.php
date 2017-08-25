
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
	<title>597人才网触屏版_修改简历</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
</head>
<body>
<!--{if $app['isNewApp']!="yes"}-->
<!--{template header}-->
<header class="pubtop">
	<a href="/person/" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)"  style="display:none;" class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
	<div class="cent"><p><b>我的简历{$resume[realname]}</b></p></div>
</header>
<nav class="pubnav" id="pubnav" style="display:none;" ><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜素</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
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
	<div class="tipTxt">
	<b>简历完善度：</b>
	<div class="myBar"><span class="bar"><i style="width:{$resumeInfo['resumePrecent']}%;"></i></span><em>{$resumeInfo['resumePrecent']}%</em></div>
	</div>
	<div class="part modLst resMod">
		<input type="hidden" name="hddResumeId" id="hddResumeId" value="12620422"/>
		<ul>
			<li>
				<a href="/person/resumes.html?act=base">
					<i class="jpFntWes">&#xf105;</i>
					<p class="tit"><b>基本资料</b><em class="jpFntWes"><!--{if $resumeInfo[realname]}-->&#xf058;<!--{else}-->快去完善<!--{/if}--></em></p>
				</a>
			</li>
			<li style="display:none;">
				<a href="/person/resumes.html?act=info">
					<i class="jpFntWes">&#xf105;</i>
					<p class="tit"><b>联系方式</b><em class="jpFntWes"><!--{if $resumeInfo[mobile] || $resumeInfo[telephone]}-->&#xf058;<!--{else}-->快去完善<!--{/if}--></em></p>
				</a>
			</li>
			<li>
				<a href="/person/resumes.html?act=join2">
					<i class="jpFntWes">&#xf105;</i>
					<p class="tit"><b>求职意向</b><em class="jpFntWes"><!--{if $resumeInfo[joinOffice]}-->&#xf058;<!--{else}-->快去完善<!--{/if}--></em></p>
				</a>
			</li>
			<li>
				<a href="/person/resumes.html?act=evaluate">
					<i class="jpFntWes">&#xf105;</i>
					<p class="tit"><b>自我评价</b><em class="jpFntWes"><!--{if $resumeInfo[joinEvaluate]}-->&#xf058;<!--{else}-->快去完善<!--{/if}--></em></p>
				</a>
			</li>
			<li>
				<!--{if $resumeInfo[workList]}-->
					<a href="/person/resumes.html?act=work">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>工作经历</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=work_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>工作经历</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li>
				<!--{if $resumeInfo[eduList] || $resumeInfo[trainingList]}-->
					<a href="/person/resumes.html?act=edu">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>教育背景</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=edu_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>教育背景</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li id="liLanguage">
				<!--{if $resumeInfo[languageList]}-->
					<a href="/person/resumes.html?act=language">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>语言能力</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=language_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>语言能力</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li id="liSkill">
				<!--{if $resumeInfo[skillList]}-->
					<a href="/person/resumes.html?act=skill">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>技能</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=skill_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>技能</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li id="liCertificate">
				<!--{if $resumeInfo[certificateList]}-->
					<a href="/person/resumes.html?act=certificate">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>证书</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=certificate_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>证书</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li id="liProject">
				<!--{if $resumeInfo[projectList]}-->
					<a href="/person/resumes.html?act=project">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>项目经验</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=project_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>项目经验</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li id="liPractice">
				<!--{if $resumeInfo[practiceList]}-->
					<a href="/person/resumes.html?act=practice">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>实践经验</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=practice_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>实践经验</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>			
			<li id="liOther">
				<!--{if $resumeInfo[otherinfoList]}-->
					<a href="/person/resumes.html?act=other">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>其他信息</b><em class="jpFntWes">&#xf058;</em></p>
					</a>
				<!--{else}-->
					<a href="/person/resumes.html?act=other_edit">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit"><b>其他信息</b><em class="jpFntWes">快去完善</em></p>
					</a>
				<!--{/if}-->
			</li>
			<li id="liPhoto">
				<a href="/person/resumes.html?act=photo">
					<i class="jpFntWes">&#xf105;</i>
					<p class="tit"><b>头像上传</b><em class="jpFntWes"><!--{if $resumeInfo[attachment]}-->&#xf058;<!--{else}-->快去上传<!--{/if}--></em></p>
				</a>
			</li>		
			<!-- <li class="fold">
				<a id="btnOpenUp" href="javascript:void(0);">
					<p><b class="jpFntWes">&#xf103;</b>更多(语言、技能、证书、项目经验、实践经验、其他信息、头像上传)</p>
				</a>
			</li> -->
		</ul>
	</div>
	<!--
	<div class="btns">
		<p><a class="btn4 btnsF16 btnL" id="btnPriview" target="_blank" href="/resume/preview/resume_id-12620422">预览</a>
		<a class="btn3 btnsF16 btnR" id="btnDelete" href="javascript:void(0);">删除</a></p>
	</div>
	-->
	<div class="btns">
		<p><a class="btn4 btnsF16 btnL" id="btnPriview" href="resumes.html?act=view">预览</a>
		<a class="btn3 btnsF16 btnR" id="btnSend" href="/person/resumes.html?act=sendEmail">转发到邮箱</a></p>
	</div>
</section>
<!--{if $app['isNewApp']!="yes"}-->
	<!--{template footer}-->
<!--{/if}-->


<div class="prSetBg" id="prSetBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$('#btnSetDefault').click(function(){
			var resume_id = $('#hddResumeId').val();
			$.post('/resume/setDefault/',{resume_id:resume_id},function(json){
				if(json&&json.error){
					alert(json.error);
					return;
				}
				if(json.success){
					alert(json.msg);
					window.location.href='/resume/';
					return;
				}
			},'json');
		});	
		$('#btnDelete').click(function(){
			var resume_id = $('#hddResumeId').val();
			if(confirm("确认要删除？")){
				$.post('/resume/delete/',{resume_id:resume_id},function(json){
					if(json&&json.error){
						alert(json.error);
						return;
					}
					alert(json.success);
					window.location.href='/resume/'
					return;
				},'json');
			}
		});	
		$('#btnOpenUp').toggle(function(){
			$('#liLanguage,#liSkill,#liCertificate,#liProject,#liPractice,#liOther,#liPhoto').show();
			$(this).find('p').html('<b class="jpFntWes">&#xf102;</b>收起');
		},function(){
			$('#liLanguage,#liSkill,#liCertificate,#liProject,#liPractice,#liOther,#liPhoto').hide();
			$(this).find('p').html('<b class="jpFntWes">&#xf103;</b>更多(语言、技能、证书、项目经验、实践经验、其他信息、头像上传)');
		});
	});
</script>
</body>
</html>
