
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/img/75x75.png" >
	<title>597人才网触屏版_简历外发</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.jobsort.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.calling.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.date.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
<style type="text/css">
.cl1{width:100%; margin: 0;text-align: left;}
.cl1 input{height:34px; border:0;display:block;height:34px;line-height:30px; margin-bottom:25px;}
</style>
</head>
<body>
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn" style="display:none;">完成</a>
		<div class="cent"><p><b>转发到邮箱</b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<div class="part form" id="forw-email">
		<input type="hidden" value="{$resumeInfo['_rid']}" id="resume_id">
			<dl style="padding: 0 0 0 0px;">
				<span class="error"></span></strong><br />
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtAppraise"></label><textarea id="txtAppraise" name="txtAppraise" class="textarea" style="height: 150px;"  placeholder="请输入邮箱"></textarea></div>
				</dd>
				<dd>多个邮箱地址请用分号“；”隔开，最多可填写10个邮箱</dd>
			</dl>
		</div>
		<div class="cl1"><input type="text" style="display:inline-block;vertical-align:middle;width:80px;" id="catcha" name="catcha" class="text" data-seed="54b396e04f8ab"/><img id="imgCode" src="/api/web/authCode.api?key=resumeCode" style="display:inline-block;vertical-align:left;margin:0 5px;"/><a id="btnCode" href="javascript:void(0)" style="display:inline-block;vertical-align:left;">换一换</a></div>
		<div></div>
		<div class="btns"><p><a class="btn4 btnsF16" id="btnSave2" href="javascript:void(0);">完成</a></p></div>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$('.cl1').find('#btnCode').click(function(){
	$('#imgCode').attr('src',"/api/web/authCode.api?key=resumeCode&"+Math.random());
});
$('#btnSave2').click(function(){
	var emailArr = new Array(),emailVal = $("#forw-email textarea").val();
	if(emailVal==''||typeof(emailVal)=='undefined'){
		alert('请输入邮箱!');
		return;
	}
	if(emailVal.indexOf(";") != -1){
		emailArr = $("#forw-email textarea").val().split(";");
	}else if(emailVal.indexOf("；") != -1){
		emailArr = $("#forw-email textarea").val().split("；");
	}else if(emailVal.indexOf(",") != -1){
		emailArr = $("#forw-email textarea").val().split(",");
	}else if(emailVal.indexOf("，") != -1){
		emailArr = $("#forw-email textarea").val().split("，");
	}else if(emailVal.indexOf("。") != -1){
		emailArr = $("#forw-email textarea").val().split("。");
	}else if(emailVal.indexOf(" ") != -1){
		emailArr = $("#forw-email textarea").val().split(" ");
	}else{
		emailArr.push(emailVal);
	}
	var seed = $("#catcha").attr("data-seed");
	var txtCatcha = $("#catcha").val();
	if (emailArr.length > 10){
		//$("#forw-email .error").html("最多可填写10个邮箱！");
		alert("最多可填写10个邮箱！");
		return false;
	}
	for (var i = 0 ;i < emailArr.length;i++){
		if(!/^[a-z0-9]([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z0-9]+([\.][a-z0-9]+)?([\.][a-z0-9]{2,3})?$/i.test(emailArr[i])){
			alert("有不正确的邮箱地址！");
			//$("#forw-email .error").html("有不正确的邮箱地址！");
			return false;
		}
	}
	var resume_id = $("#resume_id").val();
	$.ajax({
		url : '/explod.html',
		type : "POST",
		dataType : "json",
		data : {
			act : 'sendmy',
			rid : resume_id,
			txtEmail : emailArr.join(";"),
			seed : seed,
			txtCatcha : txtCatcha
		},
		success : function(data) {
			if (data.status>0) {
				alert('邮件发送成功！');
				window.location.href = '/person/resumes.html';
			} else {
				alert(data.error);
				$("#catcha").focus();
				$("#catcha").val();
			}
		}
	});
});
</script>
</div>
</body>
</html>
