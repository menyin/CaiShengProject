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
	<title>{$job[jname]}职位预览-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css?v=20151201">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
</head>
<body style="background:#fff">
<!--职位详情-->
<!--{template company/job/job_common}-->
<!--浮动窗停止招聘延期-->
<div class="mRecruit">
	<a href="javascript:;" id="delect_job" class="subRct02">删除</a>
	<!--{if $status==2}-->
	<a href="javascript:;" id="re_publish">重新发布</a>
	<!--{/if}-->
</div>
<!--弹窗北京-->
<div class="m_master" style="display:none"></div>
<!--删除职位-->
<div class="mRtake" id="deleteJob" style="display:none">
	<div class="mExtend">
		<p>删除职位</p>
		<div class="mExtxt mExtxtMsg">
			删除后将不可恢复，确定要删除吗？
		</div>
	</div>
	<ul>
		<li><a href="javascript:;" class="mRtakeBtn01">取消</a></li>
		<li><a href="javascript:;" onclick="deleteJob('{$job[_jid]}')" class="mRtakeBtn02">确定</a></li>
	</ul>
</div>
<!--重新发布职位-->
<div class="mRtake" id="rePublish" style="display:none">
	<div class="mExtend">
		<p>重新发布职位</p>
		<div class="mExtxt mExtxtMsg">
			<b style="color:green">{$job[jname]}</b> ，确定重新发布吗？ 
		</div>
		<!-- <div class="mExtxt">
				<input type="text" class="mExtinp" name="publish_time" placeholder="" value="">
			<span>有效期</span>
			<i>天</i>
		</div> -->
	</div>
	<ul>
		<li><a href="javascript:;" class="mRtakeBtn01">取消</a></li>
		<li><a href="javascript:;" onclick="return rePublish('{$job[_jid]}')" class="mRtakeBtn02">确定</a></li>
	</ul>
</div>
<!--{template company/footer}-->
<script type="text/javascript">
//停止招聘
$(function(){
	//隐藏弹窗
	$(".mRtakeBtn01").click(function(){
		stopAlert();
	});
	//停止招聘
	//删除
	$("#delect_job").click(function(){
		$(".m_master").show();
		$("#deleteJob").show()
	});
	$("#re_publish").click(function(){
		$(".m_master").show();
		$("#rePublish").show()
	});
		 
})
//停止弹窗
function stopAlert(){
	$(".m_master").hide();
	$(".mRtake").hide();
}
//删除
function deleteJob(job_id){
	$.post('/api/web/job.api',{'act':'delJob' ,jid:job_id,cidHash:{$com['cid']}},function(json){
		if(json.status==-100){
			alert('您尚未登录，请先登录再进行职位删除！');
			window.location.href = '/company/login.html';
		}else if(json.status>0){
			stopAlert();
			alert("删除职位成功！");
			window.location.href="/company/job/";
		}else{
			alert('删除职位失败！');
			return;
		}
	},'json');
}

//重新发布职位
function rePublish(job_id){
	$.post('/api/web/job.api',{'act':'startJob' ,jid:job_id,cidHash:{$com['cid']}},function(json){
		if(json.status==0 || json.status==-100){
			alert('您尚未登录，请先登录再进行发布！');
			window.location.href = '/company/login.html';
		}else if(json.status>0){
			stopAlert();
			alert("重新发布职位成功！");
			window.location.href="/company/job/";
		}else{
			alert('重新发布职位失败！');
			return;
		}
	},'json');
	/*var time = $("input[name='publish_time']").val();
	if(parseInt(time)<=0 || parseInt(time)>60){
		alert("有效期请输入1-60之间的整数");
		return;
	}
	var data ={'jobid':job_id,'valid_days':time};
	$.post('/companyjobmanage/republish',data,function(json){
		if (json && !json.success) {
				alert(json.error);
				return;
		}
		 stopAlert();
		alert("重新发布成功");
		window.location.href="/companyjobmanage";
		return;
	},'json');*/
}
</script>
</em></body>
</html>