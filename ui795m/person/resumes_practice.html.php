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
	<title>597人才网触屏版_实践经验</title>
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
		<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="/person/resumes.html?act=practice_edit" id="btnAdd1" class="detBtn">添加</a>
		<div class="cent"><p><b>实践经验</h1></b></div>
	</header>
	<!--{/if}-->
	<section class="layout">
	<div class="part modLst langLst">
		<ul>
		<!--{if $resumeInfo[practiceListInfo]}-->
			<!--{loop $resumeInfo[practiceListInfo] $l}-->
				<li>
					<a href="/person/resumes.html?act=practice_edit&practiceid={$l[practiceid]}">
						<i class="jpFntWes">&#xf105;</i>
						<p class="tit">{$l[PracticeName]}</p>
						<p>{$l[PracticeDetail]}</p>
						<p>{$l[_PracticeTimeStart]}<em>-</em><!--{if $l[_PracticeTimeEnd]}-->{$l['_PracticeTimeEnd']}<!--{else}-->至今<!--{/if}--></p>
					</a>
				</li>
			<!--{/loop}-->
		<!--{/if}-->
		</ul>
	</div>
	<div class="btns"><a href="/person/resumes.html?act=practice_edit" id="btnAdd2" class="btn3 btnsF16"><i class="jpFntWes gray"></i>添加实践经验</a></div>
</section>
<!--{if $app['isNewApp']!="yes"}-->
<!--{template footer}-->
<!--{/if}-->
</body>
</html>
