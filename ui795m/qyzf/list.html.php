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
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>{$domainInfo['region_name_short']}人才网_{$domainInfo['region_name_short']}招聘网_{$domainInfo['region_name_short']}人才网最新招聘信息_{$domainInfo['region_name_short']}人事人才网_{$domainInfo['region_name_short']}人才市场_{$domainInfo['region_name_short']}找工作-597{$domainInfo['region_name_short']}人才网-597专访</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/qyzf.css">
	<style type="text/css">
	.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
	</style>
</head>
<body>
<!--{template header}-->
<div id="nav">
	<a  data-hosts href="/">首页</a>
	<a  data-hosts href="/zhaopin/">找工作</a>
	<a  data-hosts href="/person/resumes.html">简历</a>
	<a nj href="/person/job.html?act=invite">面试邀请</a>
	<a  href="/person/">我的597</a>
</div>

<div class="search_fh" data-sudaclick="search_box">
	<form id="j_searchForm" action="/qyzf/index.html?act=list" method="get">
	<div class="se_form">
		<div class="con_wrap">
			<input id="j_searchInput" name="q" type="text" value="{$q}" placeholder="输入关键字搜索" maxlength="20" class="se_input">
			<div class="se_inner"><div id="j_searchCross" class="cross" style="display:none"></div>
			<button id="j_searchBtn" class="se_bn" type="submit"><span></span></button>
		</div>
	</div>
	</div>
	</form>
</div>

<div class="box">
<div class="ra14">
	<div class="tabBox">
		<div class="hd">
			<ul>
				<li <!--{if !$op && !$q}-->class="on"<!--{/if}-->><a href="/qyzf/index.html"><span>最新</span></a></li>
				<li <!--{if $op=='qy'}-->class="on"<!--{/if}-->><a href="/qyzf/index.html?act=list&op=qy"><span>企业专访</span></a></li>
				<li <!--{if $op=='gr'}-->class="on"<!--{/if}-->><a href="/qyzf/index.html?act=list&op=gr"><span>个人专访</span></a></li>
				<li <!--{if $op=='zf'}-->class="on"<!--{/if}--> ><a href="/qyzf/index.html?act=list&op=zf"><span>597专题</span></a></li>
			</ul>
		</div>
	</div>
<div class="zff">
	<div id="zff">
	<!--{loop $news $l}-->
	<a href="/qyzf/detail.html?id={$l['detail_id']}">
		<dl>
		<dt><img src="http://pic.597.com/news/{$l['pic_url']}"></dt>
		<dd>
			<h3>{$l['detail_title']}</h3>
			<p>{$l['zf_time']}</p>
		  </dd>
	  </dl>
	</a>
	<!--{/loop}-->
	</div>
	<div class="page" >
		<!--{if $number>0}-->{$showpage}<!--{/if}-->
	</div>
</div>

</div>
</div>
<!--{template footer}-->
</body>
</html>