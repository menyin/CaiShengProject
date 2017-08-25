
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
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
	<style type="text/css">
		.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
		.modLst{text-align:left;}
		.modLst .inviteItem{border-bottom:1px solid #ddd;background:#fff;padding:10px 40px 10px 15px; text-align:left;position:relative; z-index:1;}
		.modLst .inviteItem:last-child{border-bottom:0;}
		.modLst .inviteItem a{display:block;}
		.modLst .inviteItem  i.jpFntWes{position:absolute;right:15px;height:20px;top:50%;margin-top:-10px;color:#999;}
		.modLst .inviteItem  p{line-height:25px;color:#999; width:100%;overflow:hidden; text-overflow:ellipsis;height:25px;-o-text-overflow:ellipsis;}
		.modLst .inviteItem  p.tit{font-weight:bold;color:#65be63;}
		.modLst .inviteItem  p em{margin:0 3px;}
		.modLst .inviteItem  p.black{color:#424242;}
		.modLst .inviteItem.fold{background:#f2f2f2; text-align:center; padding:10px 60px;}
		.modLst .inviteItem.fold p b.jpFntWes{font-size:0.8rem; margin-right:5px; color:#4f74ac;}
		.jobfav .inviteItem i.jpFntWes{position:absolute;right:15px;height:20px;top:50%;margin-top:-10px;color:#999;}
		.langLst .inviteItem  p{color:#424242;}
		.langLst .inviteItem  p b{margin-right:10px;}
		.langLst .inviteItem  p em{margin:0;}	
		.job_box .editBtn{color: #65be63; height: 18px; display: inline-block; line-height: 18px; background: url(http://cdn.597.com/m/images/editBtn.png) no-repeat left center; -webkit-background-size: 18px 18px;background-size: 18px 18px; text-indent: 24px; margin-left: 15px; }
		.job_box h3 {margin: 5px 0;}
	</style>
</head>
<body>
<!--{template header}-->
<header class="pubtop">
	<a href="javascript:history.go(-1)" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;"  class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
	<div class="cent"><p><b>面试邀请</b></p></div>
</header>
<nav class="pubnav" id="pubnav" style="display:none;" ><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
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
			<!--{loop $items $l}-->
			<li class="inviteItem">
				
				<!-- <a href="/job.php?id={$l['_jid']}"> -->
					<a href="/job-{$l[_jid]}.html"><p class="tit">{$l['jname']}<em class="gray">({$l[createTime]})</em></p></a>
					<a href="job.html?act=inviteInfo&id={$l['id']}"><p>{$l['info']['Companyname']}</p>
						<p>{$l['info']['Address']}</p>
						<p>面试时间：<!--{if $l['info']['CustomTime']==''}-->
							 	{$l['info']['_inviteDate']}（{$l['info']['_week']}）{$l['info']['_inviteTime']}
							<!--{else}-->
								{$l['info']['CustomTime']}
							<!--{/if}--></p>
						<p>{$l['info']['Linktel']}</p>
					</a>
					<i class="jpFntWes"></i>
				
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