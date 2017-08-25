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
	<title>添加备注-597人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
<style>
</style>
<script>
$(document).ready(function(){
	$('.mFilterSure li a').on('click',function(){
		$(this).addClass('cur');
		$(this).siblings('.cur').removeClass('cur');
	});
})
</script>
</head>
<body style=" background:#fff;">
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop">
	<div class="loginTopBg">
		<a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>
		<a href="javascript:;" style="" id="submit_remark" class="mFilterTop" onclick="addSure()">保存</a>备注
	</div>
</div>
<!--{/if}-->
<div class="mRcmend" style="background:none;">
	<!---备注输入框-->
	<div class="mResumeBmpop" style="height:auto; position:inherit; background:none; border:none;">
		<textarea class="mNotesTaea" style="padding:5px; height:90px; border:1px solid #ebecee; background:none; margin:0 auto;" id="taRemark" name="taRemark"  placeholder="输入备注信息" autocomplete="off"></textarea>
		<input type="hidden" name="rid" id="rid" value="{$_rid}">
	</div>
	<div class="mRcmendListbg mFilterdListbg" style="border:none;">
	<ul>
		<li style="border:none;">
			<a href="javascript:;"><b style="margin-top:5px;">{$resumeInfo['realname']}</b><b class="subFtit" style="height:6px;">&nbsp;</b><p></p><p><span>{$resumeInfo['age']}岁</span><span>|</span><span>{$resumeInfo['_workYear']}</span></p></a>
			<div class="mTitimg">
			<!--{if $resumeInfo[attachment]}-->
				<img src="{$resumeInfo[attachment]}" width="62" height="78">
			<!--{else}-->
				<img src="http://cdn.597.com/m/images/m_icon17.png" width="62" height="78">
			<!--{/if}-->
			</div>

			
		</li>
	</ul>
	</div>
		<!--{if $noteList}-->
		<ul class="mNotestxt" style="padding-top:0px;">
			<!--{loop $noteList $l}-->
			<li>
				<span>{$l['_createTime']}</span>
				<p>{$l['note_content']}</p>
			</li>
			<!--{/loop}-->
		</ul>
		<!--{else}-->
		<div class="mNoData">
            <em class="icon-uniE61E"></em>
       			<span>暂无备注</span>
        </div>
		<!--{/if}-->
	</div>
<script>
var resume_id =$("#rid").val();
$(function(){
	$("textarea[name='taRemark']").focus(function(){
		$("#submit_remark").show();
	});
});
var appType = "{$app['type']}";
function addSure(SESSIONKEY){
	var remark = $("textarea[name='taRemark']").val();
	if(remark ==''){
		alert("备注信息不能为空");return;
	}
	var data = {'act':'addNote','hidResumeId':resume_id,'taRemark':remark,cidHash:{$cid}};
	if(appType=="android") data = {'act':'addNote','hidResumeId':resume_id,'taRemark':remark,cidHash:{$cid},'SESSIONKEY':SESSIONKEY};
	$.post('/api/web/company.api',data,function(json){
		if (json && json.success) {
			alert("新增备注成功");
			window.history.go(-1);
		}
	},'json');
}
</script>
<!--{template company/footer}-->
</body>
</html>