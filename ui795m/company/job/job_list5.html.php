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
	<title>简历管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
</head>
<body>
<div class="loginPop">
	<div class="loginTopBg"><a href="/company/index.html"><i class="icon-uniE6005"></i></a>招聘职位</div>
	<a href="/company/job/job.html?act=edit" class="detBtn">发布职位</a>
</div>
<ul class="m_joinList">
	<li><a href="javascript:;" class="cur">招聘中(<em id="jobListUseCount">{$countOnline}</em>)</a></li>
	<li><a href="/company/job/index.html?status=2">待发布({$countDownline})</a></li>
	<li><a href="/company/job/index.html?status=3">未审核({$countCheck})</a></li>
	<li><a href="/company/job/index.html?status=4">被屏蔽({$countNotCheck})</a></li>
</ul>
<form>
<div class="m_joinCont" style="background:#ebecee;">
	<ul>
		<!--{loop $jobs $job}-->
		<li> <a title="{$job[jname]}" class="mJoinLink01" href="/company/job/jobview.html?id={$job[_jid]}&status=1"><label class="ckb"><input type="checkbox" /></label><span>{$job[jname]}</span> <b>{$job[updateTime]}</b> </a><a href="/company/job/job.html?act=edit&jid={$job[_jid]}&status=1" class="editBtn"><i></i> 编辑</a> <a href="/company/resume/apply.html?jid={$job[_jid]}" class="mJoinLink02"> <em class="gray">{$job[joinCount]}</em> <span>简历</span> </a> <a href="/company/job/job.html?act=edit&jid={$job[_jid]}&copy=1" class="copyBtn"><i></i> 克隆</a></li>
		<!-- <em class="red">1</em><span>未读简历</span> -->
		<!--{/loop}-->
	</ul>
	<!--{if $num_all>0}-->
	<section class="layout">
		<div class="page" >
			{$showpage}
		</div>
	</section>
	<!--{/if}-->
</div>

<div class="mRecruit" style="display:none;">
	<a href="javascript:;" id="stop_job" class="subRct01">停止招聘</a>
	<a href="javascript:;" id="update_job">刷新</a>
</div>

<!--{template company/footer}-->


<script>
	$('.m_joinCont input').change(function(){
		if($('.m_joinCont input:checked').length > 0 ){
			$('.mRecruit').show();
		} else {
			$('.mRecruit').hide();
		}
	});
</script>
</form>
</body>
</html>