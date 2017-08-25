
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
	<title>597人才网触屏版_其他信息</title>
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
	<script type="text/javascript" src="/templates/default/js/plupload.js"></script>
	<script type="text/javascript" src="/templates/default/js/plupload.flash.js"></script>
<style type="text/css">
#photo{width:100%;}
</style>
</head>
<body>
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html?act=other" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_otherinfo}-->编辑其他信息<!--{else}-->新增其他信息<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formEdu" name="formEdu"  method="post" action="/api/web/person.api">
		<input type="hidden" name="act" value="otherinfo_save" />
		<input type="hidden" name="append_id" id="append_id" value="{$_otherinfo[otherinfoid]}" />
		<input type="hidden" name="hidAppendType" value="自定义">
		<div class="part form">
			<dl>
				<dt><font color="red">*</font>主题</dt>
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtTopicDesc"></label><input type="text" class="text" id="txtTopicDesc" name="txtTopicDesc" value="{$_otherinfo[TopicDesc]}" placeholder="未填写" autocomplete="off">
					</div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>内容描述</dt>
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtTopicContent"></label><input type="text" class="text" id="txtTopicContent" name="taTopicContent" value="{$_otherinfo[TopicContent]}" placeholder="未填写" autocomplete="off">
					</div>
				</dd>
			</dl>
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_otherinfo[otherinfoid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR" id="btnDel" href="javascript:void(0);" <!--{if !$_otherinfo[otherinfoid]}--> style="display:none;" <!--{/if}-->>删除</a></p></div>
		</form>

	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$.focusblur('input.text');
	//保存
	$('#btnSave1,#btnSave2').click(function(){
		var txtTopicDesc = $('#txtTopicDesc').val();
		var txtTopicContent = $('#txtTopicContent').val();
		if(txtTopicDesc==''){
			alert('主题不能为空！');
			return;
		}
		if(txtTopicContent==''){
			alert('内容描述不能为空！');
			return;
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
		return false;
	});
	//删除
	$('#btnDel').click(function(){
		var append_id = $('#append_id').val();
		$.post('/api/web/person.api',{act:'otherinfo_del',append_id:append_id},function(data){
			if(data.status>0){
				alert("操作成功！");
				window.location.href = '/person/resumes.html?act=other';
			}else{
				alert(data.msg);
			}
		},'json');
	});
});
function success(json){
	if(json.success=='success'){
		alert("操作成功！");
		window.location.href = '/person/resumes.html?act=other';
	}else{
		alert(json.msg);
	}
}
</script>
</div>
</body>
</html>
