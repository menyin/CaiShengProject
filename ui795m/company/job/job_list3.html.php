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
	<title>未审核-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<style type="text/css">
	.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
	.freeTip{padding:50px 0px 50px 0px; font-size: 16px; text-align: center; background: #fff;}
	.freeTip a{color: #3D84B8;}
	</style>
</head>
<body style="background:#ebecee;">
<div class="loginPop">
	<div class="loginTopBg"><a href="/company/index.html"><i class="icon-uniE6005"></i></a>未审核职位</div>
	<a href="/company/job/job.html?act=edit" class="detBtn">发布职位</a>
</div>
<ul class="m_joinList">
	<li><a href="/company/job/index.html?status=1">招聘中(<em id="jobListUseCount">{$countOnline}</em>)</a></li>
	<li><a href="/company/job/index.html?status=2">待发布({$countDownline})</a></li>
	<li><a href="/company/job/index.html?status=3" class="cur">未审核({$countCheck})</a></li>
	<li><a href="/company/job/index.html?status=4">被屏蔽({$countNotCheck})</a></li>
</ul>
<form>
<div class="m_joinCont" style="background:#ebecee;">
	<!--{if $com['licenceCheck']>0}-->
		<ul>
			<!--{loop $jobs $job}-->
			<li> <a title="{$job[jname]}" class="mJoinLink01" href="/company/job/jobview.html?id={$job[_jid]}&status=3"><span>{$job[jname]}</span> <b>{$job[updateTime]}</b> </a> <a href="/company/job/job.html?act=edit&jid={$job[_jid]}&status=3" class="editBtn"><i></i> 编辑</a> <a href="/company/resume/apply.html?jid={$job[_jid]}" class="mJoinLink02"> <em class="gray">{$job[joinCount]}</em> <span>简历</span> </a> <a href="/company/job/job.html?act=edit&jid={$job[_jid]}&copy=1" class="copyBtn"><i></i> 克隆</a></li>
			<!--{/loop}-->
		</ul>
		<!--{if $num_all>0}-->
		<section class="layout">
			<div class="page" >
				{$showpage}
			</div>
		</section>
		<!--{/if}-->
	<!--{else}-->
		<div class="freeTip">
			尊敬的企业用户，您的营业执照未通过审核，暂时不能发布职位。<a href="/company/account/licence.html">查看营业执照状态</a>
		</div>
	<!--{/if}-->
</div>
</form>
<!--{template company/footer}-->
<script type="text/javascript">
function deleteJob(job_id){
	if(job_id =='' ||job_id ==0){
		alert("没有找到要删除的职位");
		return false;
	}
	var data ={'jobid':job_id};
	var r = confirm("该职位审核未通过，不能查看，是否删除？");
	if(!r){
		return false;
	}
	$.post('/companyjobmanage/deleteJob',data,function(json){
		if (json && !json.success) {
				alert(json.error);
				return;
		}
		alert("删除职位成功");
		window.location.reload();
		return;
	},'json');
}
</script>
</body>
</html>