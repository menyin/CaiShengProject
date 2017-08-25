<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title><!--{if $cuid}-->编辑部门<!--{else}-->添加部门<!--{/if}-->-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after" content="1 days">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_index.css?v=20150111">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.singlearea.js"></script>
<style>
body{padding-top:0px!important;}
</style>
</head>
<body>
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg "> <a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a> <!--{if $cuid}-->编辑部门<!--{else}-->添加部门<!--{/if}--><a href="/company/job/job.html?act=unitList" class="detBtn" id="doJobAdd1">部门管理</a> </div>
</div>
<div style="padding-top: 45px;"></div>

<div class="mKeywordP">
	<form action="/api/web/company.api" method="post" id="unitForm">
	<input type="hidden" name="act" value="saveUnit">
	<input type="hidden" name="cidHash" value="{$com['cid']}">
	<input type="hidden" name="cuid" value="{$unit['cuid']}">
	<!--部门名称 开始-->
	<div class="mKeywordBg mKeywordBgc">
		<span class="tSpan"><b class="ismust">*</b>部门名称</span>
		<input type="text" placeholder="请输入部门名称" name="cuName" id="cuName" class="mKeywText" value="{$unit['cuName']}" autocomplete="off">
	</div>
	<!--部门名称 结束-->
	<!--部门联系人 开始-->
	<div class="mKeywordBg mKeywordBgc">
		<span class="tSpan"><b class="ismust">*</b>部门联系人</span>
		<input type="text" placeholder="请输入联系人" name="linker" id="linker" class="mKeywText" value="{$unit['linker']}" autocomplete="off">
	</div>
	<!--部门联系人 结束-->
	<!--部门电话 开始-->
	<div class="mKeywordBg mKeywordBgc">
		<span class="tSpan">部门电话</span>
		<input type="text" placeholder="请输入部门电话" name="linktel" id="linktel" class="mKeywText" value="{$unit['linktel']}" autocomplete="off">
	</div>
	<!--部门电话 结束-->
	<!--部门邮箱 开始-->
	<div class="mKeywordBg mKeywordBgc">
		<span class="tSpan">部门邮箱</span>
		<input type="text" placeholder="请输入部门邮箱" name="email" id="email" class="mKeywText" value="{$unit['email']}" autocomplete="off">
	</div>
	<!--部门邮箱 结束-->
	<!--部门排序 开始-->
	<div class="mKeywordBg mKeywordBgc">
		<span class="tSpan">部门排序</span>
		<input type="text" placeholder="请输入部门排序" name="cuDisplayOrder" id="cuDisplayOrder" class="mKeywText" value="{$unit['cuDisplayOrder']}" autocomplete="off">
	</div>
	<!--部门排序 结束-->
	<!--地址 开始-->
	<div class="mKeywordBg mKeywordBgc">
		<span class="tSpan"><b class="ismust">*</b>地址</span>
		<input type="text" placeholder="请输入地址" name="address" id="address" class="mKeywText" value="{$unit['address']}" autocomplete="off">
	</div>
	<!--地址 结束-->

	<div class="mKeySechBg"> <a href="javascript:void(0);" class="mKeySech" id="publish"><!--{if $cuid}-->修改<!--{else}-->添加<!--{/if}--></a> </div>
</form>
</div>
<!--{template company/footer}-->
<!--岗位特点弹窗结束-->
<script>
	$("#publish").click(function(){
		var cuName = $("#cuName").val(),
			linker = $("#linker").val(),
			address = $("#address").val();

		if(typeof(cuName)==undefined||cuName==''){
			alert('部门名称不能为空');
			return;
		}
		if(typeof(linker)==undefined||linker==''){
			alert('部门联系人不能为空');
			return;
		}
		if(typeof(address)==undefined||address==''){
			alert('地址不能为空');
			return;
		}
		$("#publish").submitForm({ beforeSubmit: '', success: function(data){
			if(data.status>0) {
				alert('成功添加/编辑部门!');
				window.location.href = '/company/job/job.html?act=unitList';
			}else{
				if(data.status==0){
					alert(data.msg);
				}else{
					alert(data.msg);
				}
			}
		}, clearForm: false})
	})
</script>
</body>
</html>