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
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>职位管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_tScreen.css?v=1">
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/m.js"></script>
	<style type="text/css">
		.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
		#stop_job {margin-right: 0; margin-left: 6%;}
		.freeTip{padding:50px 0px 50px 0px; font-size: 16px; text-align: center; background: #fff;}
		.freeTip a{color: #3D84B8;}
	</style>
</head>
<body>
<div class="loginPop">
	<div class="loginTopBg"><a href="/company/index.html"><i class="icon-uniE6005"></i></a>招聘职位</div>
	<a href="/company/job/job.html?act=edit" class="detBtn">发布职位</a>
</div>
<ul class="m_joinList">
	<li><a href="/company/job/index.html" <!--{if $status=='1'}-->class="cur"<!--{/if}-->>招聘中(<em id="jobListUseCount">{$countOnline}</em>)</a></li>
	<li><a href="/company/job/index.html?status=2" <!--{if $status=='2'}-->class="cur"<!--{/if}-->>待发布({$countDownline})</a></li>
	<li><a href="/company/job/index.html?status=3" <!--{if $status=='3'}-->class="cur"<!--{/if}-->>被屏蔽({$countNotCheck})</a></li>
</ul>
<form>
<div class="m_joinCont" style="background:#ebecee;">
	<!--{if $com['licenceCheck']>0}-->
		<ul>
			<!--{loop $jobs $job}-->
			<li>
				<a title="{$job['jname']}" class="mJoinLink01" href="/job-{$job['_jid']}.html">
				<label class="ckb"><input type="checkbox" value="{$job['_jid']}" /></label><span>{$job['jname']}</span> <b>{$job['updateTime']}</b><!--{if $job['urgency']==1}--><b class="jobStyle">急聘</b><!--{/if}--><!--{if $job['jobStatus']}--><b class="jobStyle">{$job['jobStatus']}</b><!--{/if}-->  </a><a href="/company/job/job.html?act=edit&jid={$job['_jid']}&status=1" class="editBtn"><i></i> 编辑</a><a href="/company/resume/apply.html?jid={$job['_jid']}" class="mJoinLink02"> <em class="gray">{$job['joinCount']}</em> <span>简历</span> </a>  <a href="/company/job/job.html?act=edit&jid={$job['_jid']}&copy=1" class="copyBtn"><i></i> 克隆</a>
			</li>
			<!-- <em class="red">1</em><span>未读简历</span> -->
			<!--{/loop}-->
		</ul>
		<div class="checkAll">
			<label for="checkAllCkb"><input type="checkbox" id="checkAllCkb" /> 全选</label>
		</div>
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
<!--{template company/footer}-->
</form>




<div class="mRecruit" style="display:none;">
	<!--{if $status=='1'}-->
		<a href="javascript:;" id="stop_job">批量停招</a>
		<a href="javascript:;" id="update_job" class="subRct01">批量刷新</a>
	<!--{elseif $status=='2'}-->
		<a href="javascript:;" id="online_job" class="subRct01">重新发布</a>
		<a href="javascript:;" id="del_job">删除</a>
	<!--{else}-->
		<a href="javascript:;" id="del_job">删除</a>
	<!--{/if}-->
</div>

<script>


// 批量操作
var listCkbs = $('.m_joinCont ul input');
var job_id = [];
listCkbs.change(function(){
		if($('.m_joinCont ul input:checked').length > 0 ){
		$('.mRecruit').show();
	} else {
		$('.mRecruit').hide();
	}
	getJobIds();
});

if($('.m_joinCont li').length == 0){
	$('.checkAll').hide();
}

$('#checkAllCkb').change(function(){
	var isCheckAll = !!$(this).attr('checked');
	listCkbs.attr('checked',isCheckAll);
	$('.mRecruit').css('display',isCheckAll ? 'block' : 'none');
	getJobIds();
});

function getJobIds(){
	job_id = [];
	$('.m_joinCont ul input:checked').each(function(){
		job_id.push($(this).val());
	});
}

$('#stop_job').click(function(){
	if(confirm('停止招聘后，职位将不再被求职者看到，确定停止吗？')){
		$.getJSON('/api/web/job.api',{'act':'stopJobs' ,jid:job_id,cidHash:{$cid}}, function(json) {
			if (json.status > 0){
				alert(json.msg);
				window.location.reload();
				return ;
			}else{
				alert('操作失败！');
			}
			return;
		});
	}
});

$('#update_job').click(function(){
	if(confirm('您确定要刷新选中的职位吗？')){
		$.getJSON('/api/web/job.api',{'act':'updateJobs' ,jid:job_id,cidHash:{$cid}}, function(json) {
			if (json.status > 0){
				alert(json.msg);
				window.location.reload();
				return ;
			}else{
				alert('操作失败！');
			}
			return;
		});
	}

});

$('#online_job').click(function(){
	if(confirm('您确定要重新发布选中的职位吗？')){
		$.getJSON('/api/web/job.api',{'act':'startJobs' ,jid:job_id,cidHash:{$cid}}, function(json) {
			if (json.status > 0){
				alert(json.msg);
				window.location.reload();
				return ;
			}else{
				alert('操作失败！');
			}
			return;
		});
	}
});

$('#del_job').click(function(){
	if(confirm('您确定要删除选中的职位吗？')){
		$.getJSON('/api/web/job.api',{'act':'delMulJob' ,jid:job_id,cidHash:{$cid}}, function(json) {
			if (json.status > 0){
				alert(json.msg);
				window.location.reload();
				return ;
			}else{
				alert('操作失败！');
			}
			return;
		});
	}
});
</script>
</body>
</html>