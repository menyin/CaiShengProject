
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
	<title>597人才网触屏版</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=20141204" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
	<style type="text/css">
	.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}	
	</style>
</head>
<body>
<!--{template header}-->
<header class="pubtop">
	<a href="javascript:history.go(-1)" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;" class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
	<div class="cent"><p><b>我的收藏</b></p></div>
</header>
<nav class="pubnav" id="pubnav" style="display:none;"><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
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

<form method="get" id="form" action="/visit/">
	<section class="layout">
		<div class="part modLst visit">
		<ul>
			<!--{loop $jobs $job}-->
			<li class="">
				<a href="/job-{$job[_jid]}.html">
				<!-- <a href="/job.html?id={$job[_jid]}"> --><i class="jpFntWes"></i>
					<p class="tit">{$job[jname]}</p><p>{$job[cname]}</p>
					<p>{$job[jobSalary]}<em>|</em>{$job[region_name_short]}<em>|</em>{$job[createTime]}</p>
				</a>
			</li>
			<!--{/loop}-->
		</ul>
		</div>
		<div class="page">
			<!--{if $num_all>0}-->{$showpage}<!--{else}-->暂无数据<!--{/if}-->
		</div>
	</section>
</form>

<!--{template footer}-->

		<script>
			//去掉APP推广弹窗
//			$(document).ready(function(){
//				//				setTimeout(function(){
//					$("#app_tc").show();
//				},1000);
//				//					
//				 $('#testBtn').on('click',function(){
//						$('#app_tc').hide(); 
//					   ajaxModShow();
//					});
//			})
//		   
//	  function ajaxModShow(){
//				$.ajax({
//					url : "/index/AjaxModAppShow/",
//					dataType : "JSON",
//					type : "POST",
//					success : function (data){
//					},
//					error : function() {
//						   setCookie("_app_show_flag_true",'app_not_show_true',60*60*24);
//					}
//				});
// 
//	}
//		function setCookie(name,value,time){
//			var strsec = time*1000;
//			var exp = new Date();
//			exp.setTime(exp.getTime()+strsec);
//			document.cookie = name+"="+escape(value)+";expires="+exp.toGMTString();
//		}
//		
		</script>
 
</body>