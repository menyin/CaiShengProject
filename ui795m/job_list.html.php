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
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>{$com[cname]}-597人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_front.css?v=20140325" />
</head>
<style>
.comNmNav{ border-bottom:1px solid #d8d8d8; margin-bottom:10px;display: block; width:100%;z-index: 9999;}
.comNmNav a{ width:33%; display:inline-block; font-size:16px;}
.comNmNav .details{ border-bottom:3px solid #E8352E; padding:5px 0 8px 0;color:#e8352e;}
.comNmNav2{ border-bottom:1px solid #d8d8d8; margin-bottom:10px;}
.comNmNav2 a{ width:50%; display:inline-block; font-size:16px;}
.comNmNav2 .details2{ border-bottom:3px solid #E8352E; padding:5px 0 8px 0;color:#e8352e;}
</style>
<body>
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<!--{/if}-->
	<div id="content">
		<!--{if $app['isNewApp']!="yes"}-->
		<header class="pubtop">
			<a href="javascript:history.go(-1);" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;" class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
			<div class="cent"><p><b>{$com[cname]}</b></p></div>
		</header>
		<div class="bread">
			<div class="bread_text"><a href="/"><font color="#27b6a6">首页</font></a>  >  <a href="/zhaopin/"><font color="#27b6a6">职位搜索</font></a>  >  <a href="javascript:history.go(-2);"><font color="#27b6a6">搜索结果</font></a>  >  <a>所有职位</a></div>
		</div>
		<div style=" clear:both;"></div>
		<nav class="pubnav" id="pubnav" style="display:none;"><a href="/" ><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜素</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#navBtn').toggle(function(){
					$('#pubnav').slideDown();
				},function(){
					$('#pubnav').slideUp();
				});

				var appShow = "{$app['isPerson']}";
				if(appShow!="yes"){//新app不要这效果
					//自适应浏览器位置
					var classLeft = $('.comNmNav').offset().left;
					var classTop = $('.comNmNav').offset().top - 100;

					$(window).scroll(function(){
						if($(window).scrollTop() > classTop){
							$('.comNmNav').css({
								position : 'fixed',
								background:'#333',
								width:'94%',
								top : 0,
								left : classLeft
							});
							$('.comNmNav a:not(.details)').css({
								color:'#fff'
							});
						} else {
							$('.comNmNav').removeAttr('style');
							$('.comNmNav a').removeAttr('style');
						}
					});
				}
			});
		</script>
		<nav class="pubnav" id="pubnav"><a href='/'><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href='/zhaopin/' id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href='/person/'><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
		<!--{/if}-->
		<section class="layout">
			<!--{if $app['isNewApp']!="yes" || $app['isNewApp']=="yes"&&$app['isPerson']=="yes"}-->
			<!--{if $_jid}-->
				<div class="comNmNav"><a href="/job-{$_jid}.html" >职位详情</a><a href="/com-{$com[_cid]}/?jid={$_jid}" >公司介绍</a><a href="/job_list.html?act=joblist&id={$com[_cid]}&jid={$_jid}" class="details">所有职位</a></div>
			<!--{else}-->
				<div class="comNmNav2"><a href="/com-{$com[_cid]}/" >公司介绍</a><a href="/job_list.html?act=joblist&id={$com[_cid]}" class="details2">所有职位</a></div>
			<!--{/if}-->
			<!--{/if}-->
			<div class="part schrst modLst" id="schrst">
			<ul>
				<!--{loop $joblist $job}-->
				<li>
					<!-- <a href='/job-{$job[_jid]}.html'> -->
					<a href="/job.html?id={$job[_jid]}">
						<i class="jpFntWes">&#xf054;</i>
						<p class="tit">{$job[jname]}{$job[jobNumber]}</p>
						<p>{$job[jobSalary]}<em>|</em>{$job[jobArea]}</p>
					</a>
				</li>
				<!--{/loop}-->
			</ul>
		</div>
		<div class="page" >
			{$showpage}
		</div>

		</section>
		<!--{if $app['isNewApp']!="yes"}-->
		<!--{template footer}-->
		<!--{/if}-->
	</div>
	<!--{if $app['isNewApp']!="yes"}-->
	<a class="vbk" href="javascript:history.back();"></a>
	<!--{/if}-->
</body>
</html>