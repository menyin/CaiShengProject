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
.imgs img {display: block; margin:10px auto 0; width: 95%;}
.bas a {font-size: 12px;}
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
			<div class="bread_text"><a href="/"><font color="#27b6a6">首页</font></a>  >  <a href="/zhaopin/"><font color="#27b6a6">职位搜索</font></a>  >  <a href="javascript:history.go(-2);"><font color="#27b6a6">搜索结果</font></a>  >  <a>公司简介</a></div>
		</div>
		<div style=" clear:both;"></div>
		<nav class="pubnav" id="pubnav" style="display:none;"><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜素</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#navBtn').toggle(function(){
					$('#pubnav').slideDown();
				},function(){
					$('#pubnav').slideUp();
				});
			});
		</script>
		<nav class="pubnav" id="pubnav"><a href='/'><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href='/zhaopin/' id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href='/person/'><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
		<!--{/if}-->
		<section class="layout">
			<!--{if $app['isNewApp']!="yes" || $app['isNewApp']=="yes"&&$app['isPerson']=="yes"}-->
			<!--{if $_jid}-->
				<div class="comNmNav"><a href="/job-{$_jid}.html" >职位详情</a><a href="/com-{$com[_cid]}/?jid={$_jid}" class="details">公司介绍</a><a href="/job_list.html?act=joblist&id={$com[_cid]}&jid={$_jid}">所有职位</a></div>
			<!--{else}-->
				<div class="comNmNav2"><a href="/com-{$com[_cid]}/" class="details2">公司介绍</a><a href="/job_list.html?act=joblist&id={$com[_cid]}">所有职位</a></div>
			<!--{/if}-->
			<!--{/if}-->
			<div class="part comInfo">
				<div class="partT">公司简介</div>
				<div class="partC">
					<div class="basInfo">
						<!--{if ($com[comCity])}--><p>所属城市：<em>{$com[comCity]}</em></p><!--{/if}-->
						<!--{if ($com[comIndustry])}--><p>所处行业：<em>{$com[comIndustry]}</em></p><!--{/if}-->
						<!--{if ($com[comType])}--><p>单位性质：<em>{$com[comType]}</em></p><!--{/if}-->
						<!--{if ($com[jobNumber])}--><p>公司规模：<em>{$com[jobNumber]}</em></p><!--{/if}-->
						<!--{if ($com[comSite])}--><p>公司网址：<em><a href="http://{$com[comUrl]}" target="_blank">{$com[comSite]}</a></em></p><!--{/if}-->
						<p class="bas"><img src="http://cdn.597.com/img/job/newjob/newjob_25.png" height="12"><a href="<!--{if $com[comLongitude]!='' && $com[comLatitude]!='' }-->/jobmap.html?id={$com['_cid']}&t=1<!--{else}-->http://api.map.baidu.com/geocoder?address={$com['comAddress']}&output=html<!--{/if}-->">{$com[comAddress]}</a></p>
					</div>
					<div class="basTxt" id="basTxt">
						<p>{$com[comInfo]}</p>
						<div class="imgs">
							<!--{loop $resPic $l}-->
								<img src="http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}" alt="prettyPhoto[]" />
							<!--{/loop}-->
						</div>
					</div>
					<div class="moreBtn" id="basTxtBtn"><a href="javascript:void(0);">查看全部</a></div>
				</div>
			</div>
			<div class="part modLst nowJobs" style="display:none;">
				<div class="partT">正在招聘的职位</div>
				<div class="partC">
					<ul>
						<!--{loop $joblist $job}-->
						<li>
							<a href='/job-{$job[_jid]}.html'>
								<i class="jpFntWes">&#xf054;</i>
								<p class="tit">{$job[jname]}{$job[jobNumber]}</p>
								<p>{$job[jobSalary]}<em>|</em>{$job[jobArea]}</p>
							</a>
						</li>
						<!--{/loop}-->
					</ul>
					<div class="moreBtn"><a href='/job_list.html?act=joblist&id={$com[_cid]}'>查看更多</a></div>
				</div>
			</div>

			<!--{if ($com[showPhone]==1)}-->
			<div class="part contacUs">
				<div class="partT">联系方式</div>
				<div class="partC">
					<div class="txt">
						<p style="display:none;">公司地址：{$com[comAddress]}</p>
						<p style="margin:5px 0;">联系电话：{$com[comPhone]}</p>
						<p>联 系 人：{$com[comUser]}</p>
					</div>
				</div>
			</div>
			<!--{/if}-->

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
<!--{if $app['isNewApp']!="yes"}-->
<a class="vbk" href="javascript:history.back();"></a>
<!--{/if}-->
</body>
</html>
