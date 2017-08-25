
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
	<title>597人才网触屏版_自我评价</title>
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
#photo{width:100%;}
</style>
</head>
<body>
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b>自我评价</b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formEdu" name="formEdu"  method="post" action="/api/web/person.api">
		<input type="hidden" name="act" value="resume_save" />
		<div class="part form">
			<dl style="padding: 0 0 0 0px;">
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtAppraise"></label><textarea id="txtAppraise" name="txtAppraise" class="textarea" style="height: 200px;"  placeholder="597建议您做一个简短评价，简明扼要的描述您的职业优势，让用人单位快速的了解您！" autocomplete="off">{$resumeInfo[joinEvaluate]}</textarea></div>
				</dd>
			</dl>
		</div>
		<div class="btns"><p><a class="btn4 btnsF16" id="btnSave2" href="javascript:void(0);">保存</a></p></div>
		</form>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	//保存
	$('#btnSave1,#btnSave2').click(function(){
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
		return false;
	});
});
function success(json){	
	if(json.status>0){
		alert(json.msg);
		work='{$resumeInfo[workList]}';
		if(work){
			window.location.href = '/person/resumes.html';
		}else{
			window.location.href = '/person/resumes.html?act=work_edit';
		}
	}else{
		alert(json.msg);
	}
}
</script>
</div>
</body>
</html>
