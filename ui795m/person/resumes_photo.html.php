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
		<title>上传头像-{$domainInfo['region_name_short']}597人才网触屏版</title>
		<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
		<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
		<meta name="revisit-after"	content="1 days" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
		<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
		<script type="text/javascript" src="http://cdn.597.com/m/js/cp.form.js"></script>
</head>
<body>
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop"><!--{template header}--></div>
<header class="pubtop">
	<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" id="btnSave1" class="detBtn" style="display:none;">保存</a>
	<div class="cent"><p><b>头像上传</h1></b></div>
</header>
<!--{/if}-->
<div class="mKeywordP" style="margin-top:0px;">
<img id="licenceImage" style="<!--{if !$attachment}-->display:none<!--{/if}-->" src="<!--{if $attachment}-->{$attachment}<!--{/if}-->">
	<input type="hidden" name="hddPhotourl" value="{$person['attachment']}">
	<div class="mKeywordBg mKeywordBgc" style="padding-left:14px;">
			<em style="color:#a1abb3;" id="uploadFile">上传头像</em>
			<i></i>
			<img id="licenceImage" style="display:none" src="" width="40" height="40">
	</div>
</div>
<!-------提交弹窗------>
<div class="mRtake" id="showResult" style="display:none">
	<div class="mAudit">
		<p><i class="icon-uniE6023"></i><em>上传成功</em></p>
	</div>
	<a href="javascript:;" id="iknow" class="mRtakeBtn03">确定</a>
</div>
<!-------loading------>
<div class="mRtake" id="loading" style="display:none">
	<div class="mAudit">
		<p><em>正在上传中，请等待...</em></p>
	</div>
</div>
<!-------弹窗上传营业资质------>
<div class="iphoneImg" style="display: none;">
	<form id="form1" action="/api/web/uploadify.api" method="post" enctype="multipart/form-data">
		<input style="display:none" name="userkey" value="{$userkey}">
		<input style="display:none" type="file" name="Filedata">
		<input style="display:none" type="text" name="act" value="mobilePhoto">
		<a href="javascript:;" id="selectImage">从手机相册选择</a>
	</form>
	<a href="javascript:;" id="cons" class="gray">取消</a>
</div>
<script>
$(function(){
	$("#uploadFile").click(function(){
		//$(".iphoneImg").show();
		$("input[name='Filedata']").click();
	});
	/*$("#selectImage").click(function(){
		$("input[name='Filedata']").click();
	});*/
	$("input[name='Filedata']").change(function(){
		$('#form1').ajaxSubmit({beforeSubmit:checkMe,data:{},success:success,dataType:'json'});
	});
	//取消
	$("#cons").click(function(){
		$(".iphoneImg").hide();
	});
	//提交资料
	$("#doUpload").click(function(){
		/*var hddPhotourl = $("input[name='hddPhotourl']").val();*/
		var hddPhotourl = $("input[name='hddPhotourl']").val();
		if(hddPhotourl ==''){
			alert("请上传头像");return false;
		}
		var data ={'photoUrl':hddPhotourl,'act':'savePhoto'};
		$.post('/api/web/m_person.api',data,function(json){
			if(json.status<1){
				$("#showInfo").hide();
				alert('操作失败！');
				return;
			}
			$("#showResult").show();
			return;
		},'json');
	});
	$("#iknow").click(function(){
		$("#showResult").hide();
		window.location.href="/person/";
	});
})
function success(json){
	$("#loading").hide();
	if(json && json.error){
		alert(json.error);
		return false;
	}
	$("input[name='hddPhotourl']").val(json.name);
	///alert("头像上传成功！");
	$("#licenceImage").attr({'src':json.path}).show();
}
	
function checkMe(){
	$(".iphoneImg").hide();
	$("#loading").show();
	return true;
}
</script>
</body></html>