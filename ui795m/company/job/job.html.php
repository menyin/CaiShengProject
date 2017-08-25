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
	<a href="javascript:;" id="stop_job" class="subRct01">停止招聘</a>
	<!-- <a href="javascript:;" id="delay_job">延期</a> -->
	<a href="javascript:;" id="update_job">刷新</a>
</div>
<!--弹窗北京-->
<div class="m_master" style="display:none"></div>
<!--延期-->
<!-- <div class="mRtake" id="delayjob" style="display:none">
	<div class="mExtend">
			<p>输入延期时间</p>
			<div class="mExtxt">
					<input type="text" class="mExtinp" name="delay_time" placeholder="" value="">
				<span>延长</span>
				<i>天</i>
			</div>
			<div style="padding-top:15px;   color: #8a9499; font-family: Arial,Helvetica,sans-serif,微软雅黑;font-size: 1.2em;font-weight: normal;">当前过期时间：2015-02-13</div>
		</div>
		<ul>
			<li><a href="javascript:;" class="mRtakeBtn01">取消</a></li>
			<li><a href="javascript:;" onclick="return delayTime('{$job[_jid]}')" class="mRtakeBtn02">确定</a></li>
		</ul>
</div> -->
<!--刷新-->
<div class="mRtake" id="updatejob" style="display:none">
	<div class="mExtend">
		<p>职位刷新</p>
		<div class="mExtxt mExtxtMsg">
			<b style="color:green">{$job[jname]}</b> ，确定刷新吗？ 
		</div>
	</div>
	<ul>
		<li><a href="javascript:;" class="mRtakeBtn01">取消</a></li>
		<li><a href="javascript:;" onclick="return updatejob('{$job[_jid]}')" class="mRtakeBtn02">确定</a></li>
	</ul>
</div>
<!--停止招聘-->
<div class="mRtake" id="stopjob" style="display:none">
	<div class="mExtend">
			<p>停止招聘</p>
			<div class="mExtxt mExtxtMsg">
					停止招聘后，<b style="color:green">{$job[jname]}</b> 不再被求职者看到，确定停止吗？ 
			</div>
		</div>
		<ul>
			<li><a href="javascript:;" class="mRtakeBtn01">取消</a></li>
			<li><a href="javascript:;" onclick="return stopjob('{$job[_jid]}')" class="mRtakeBtn02">确定</a></li>
		</ul>
</div>
<!--提示执照未审核-->
<div class="mRtake" id="licence" style="display:none">
	<div class="mExtend">
			<p>营业执照未通过</p>
			<div class="mExtxt mExtxtMsg">
				该公司暂时还没通过营业执照审核,<a href="/company/account/" target="_blank"><font color="green">查看执照情况</font></a> 
			</div>
		</div>
		<ul>
			<li  style="width:100%;"><a href="javascript:;" class="mRtakeBtn01">确定</a></li>
		</ul>
</div>
<!--{template company/footer}-->
<script type="text/javascript">
//停止招聘
$(function(){
	var licence = {$com['licenceCheck']};
	if(licence<1){
	 	$(".m_master").show();
		$("#licence").show();
	}
	//隐藏弹窗
	$(".mRtakeBtn01").click(function(){
		stopAlert();
	});
	//停止招聘
	$("#stop_job").click(function(){
		$(".m_master").show();
		$("#stopjob").show();
	});
	//延期
	$("#delay_job").click(function(){
		$(".m_master").show();
		$("#delayjob").show();
	});
	//刷新
	$("#update_job").click(function(){
		$(".m_master").show();
		$("#updatejob").show();
	});
})
//停止弹窗
function stopAlert(){
	 $(".m_master").hide();
	 $(".mRtake").hide();
}
//停止招聘
function stopjob(job_id){
	$.post('/api/web/job.api',{'act':'stopJob' ,jid:job_id,cidHash:{$com['cid']}},function(json){
		if(json.status==0 || json.status==-100){
			alert('您尚未登录，请先登录再进行停招！');
			window.location.href = '/company/login.html';
		}else if(json.status>0){
			stopAlert();
			alert("停止招聘成功");
			window.location.href="/company/job/index.html?act=stopjob";
		}else{
			alert('停止招聘失败！');
			return;
		}
	},'json');
}
//刷新招聘
function updatejob(job_id){
	$.post('/api/web/job.api',{'act':'updateJob' ,jid:job_id,cidHash:{$com['cid']}},function(json){
		if(json.status==0 || json.status==-100){
			alert('您尚未登录，请先登录再进行停招！');
			window.location.href = '/company/login.html';
		}else if(json.status>0){
			stopAlert();
			alert("职位刷新成功");
			window.location.href="/company/job/";
		}else if(json.status==-101){
			alert(json.msg);
			window.location.href="/company/job/";
		}else if(json.status==-10001){
			stopAlert();
			alert("刷新失败，该职位今天已刷新过，试用会员一天只能刷新一次，为了确保招聘效果，建议您升级成正式会员!");
			return;
		}else{
			stopAlert();
			alert(json.msg);
			return;
		}
	},'json');
}
//延期
function delayTime(job_id){
	var day = $("input[name='delay_time']").val();
	if(parseInt(day)<=0 || parseInt(day)>60){
		alert("请输入1-60之间的整数");
		return;
	}
	 var data ={'jobid':job_id,'time':day};
	 $.post('/companyjobmanage/delaySingleDo',data,function(json){
			if (json && !json.success) {
				alert(json.error);
				return;
			}
			 stopAlert();
			alert("职位延期成功");
			window.location.reload();
			return;
	},'json');
}
</script>
</em></body></html>