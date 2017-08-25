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
	<title>597人才网触屏版_教育背景/培训经历</title>
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
		<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="/person/resumes.html?act=edu_edit" id="btnAdd1" class="detBtn">添加</a>
		<div class="cent"><p><b>教育背景/培训经历</h1></b></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<div class="part modLst workEx">
			<ul>
			<!--{if $resumeInfo[eduListInfo]}-->
				<!--{loop $resumeInfo[eduListInfo] $edu}-->
				<li>
					<a href="resumes.html?act=edu_edit&hidEduTypeID=edu&rid={$rid}&eduid={$edu[eduid]}">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit">{$edu[eduSpecialty]}</p>
						<p>{$edu[eduName]}</p>
						<p>{$edu[eduDateStart]}<em>-</em><!--{if $edu[eduDateEnd]}-->{$edu[eduDateEnd]}<!--{else}-->至今<!--{/if}--></p>
					</a>
				</li>
				<!--{/loop}-->
			<!--{/if}-->
			<!--{if $resumeInfo[trainingListInfo]}-->
				<!--{loop $resumeInfo[trainingListInfo] $training}-->
				<li>
					<a href="resumes.html?act=training_edit&hidEduTypeID=train&rid={$rid}&trainingid={$training[trainingid]}">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit">{$training[trainingSpecialty]}[证]</p>
						<p>{$training[trainingName]}</p>
						<p>{$training[trainingDateStart]}<em>-</em><!--{if $training[trainingDateEnd]}-->{$training[trainingDateEnd]}<!--{else}-->至今<!--{/if}--></p>
					</a>
				</li>
				<!--{/loop}-->
			<!--{/if}-->
			</ul>
		</div>
		<div class="btns"><a href='/person/resumes.html?act=edu_edit' id="btnAdd2" class="btn3 btnsF16"><i class="jpFntWes gray">&#xf055;</i>添加教育背景/培训经历</a></div>
	</section>
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template footer}-->
	<!--{/if}-->
</body>
</html>
