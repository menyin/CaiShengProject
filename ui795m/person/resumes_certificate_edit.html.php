
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
	<title>597人才网触屏版_证书</title>
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
		<a href="/person/resumes.html?act=certificate" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_certificate}-->编辑证书<!--{else}-->新增证书<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formEdu" name="formEdu"  method="post" action="/api/web/m_person.api">
		<input type="hidden" name="act" value="certificate_save" />
		<input type="hidden" name="certificateid" id="certificateid" value="{$_certificate[certificateid]}" />
		<div class="part form">
			<dl>
				<dt>证书名称</dt>
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtCertName"></label><input type="text" class="text" id="txtCertName" name="txtCertificateName" value="{$_certificate[certificateName]}" placeholder="未填写" autocomplete="off">
					</div>
				</dd>
			</dl>
			<!-- <dl>
				<dt><font color="red">*&nbsp;</font>证书描述</dt>
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtCertificateSpecialty"></label><input type="text" class="text" id="txtCertificateSpecialty" name="txtCertificateSpecialty" value="{$_certificate[certificateSpecialty]}" placeholder="未填写">
					</div>
				</dd>
			</dl> -->
			<!-- <dl>
				<dt>上传证书</dt>
				<dd>
				<input id="photo" name="certificateBackGround" type="text" value="{$_certificate[certificateBackGround]}"/>
				<div>
					<img src="" id="fileView" style="display:none;" />
				</div>
				<iframe frameborder="0" width="350" height="26" scrolling="No" src="/person/upload_pic.php"></iframe>
				</dd>
			</dl> -->

			<dl>
				<dt>获得时间</dt>
				<dd>
					<div id="con_gain_time"><p class="Ltab"><span class="LitemTab Lselect"></span></p></div>
					<input type="hidden" id="gain_time" name="gain_time" value="{$_certificate[CertGainTimeYear]}">
				</dd>
			</dl>
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_certificate[certificateid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR" id="btnDel" href="javascript:void(0);" <!--{if !$_certificate[certificateid]}--> style="display:none;" <!--{/if}-->>删除</a></p></div>
		</form>

	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$.focusblur('input.text');
	$.focusblur('textarea.textarea');
	CertGainTimeYear='{$_certificate[CertGainTimeYear]}';
	if(CertGainTimeYear){
		r_CertGainTimeYear=CertGainTimeYear;
	}else{
		r_CertGainTimeYear=null;
	}
	$('#con_gain_time').date({yearSection:'1900-{$curYear}',isCanNull:true,isHidden:true,isHiddenMon:true,isHiddenDay:true,selectDate:r_CertGainTimeYear,onChange:function(date){
		$('#gain_time').val(date);
	}});

	//保存
	$('#btnSave1,#btnSave2').click(function(){
		var cert_name = $('#txtCertName').val();
		var cert_name = $('#txtCertName').val();
		//var txtCertificateSpecialty = $('#txtCertificateSpecialty').val();
		//var photo=$('#photo').val();
		var gain_time = $('#gain_time').val();
		if(cert_name.length<2 || cert_name.length>20){
			alert('证书名称限定2-20个字');
			return;
		}
		/*if(txtCertificateSpecialty.length<2 || txtCertificateSpecialty.length>100){
			alert('证书描述限定2-100个字');
			return;
		}
		if(photo==''){
			alert('图片不能为空！');
			return;
		}*/
		if(gain_time.length==0 || gain_time=='00-00'){
			alert('请选择获得时间');
			return;
		}
		if(gain_time.indexOf('-00')>0){
			alert('请选择正确格式的获得时间');
			return;
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
		return false;
	});
	//删除
	$('#btnDel').click(function(){
		var certificateid = $('#certificateid').val();
		$.post('/api/web/m_person.api',{act:'certificate_del',certificateid:certificateid},function(data){
			if(data.success=='success'){
				alert("删除成功！");
				window.location.href = '/person/resumes.html?act=certificate';
			}else{
				alert(data.msg);
			}
		},'json');
	});
});
function success(json){
	if(json.success=='success'){
		alert("操作成功！");
		window.location.href = '/person/resumes.html?act=certificate';
	}else{
		alert(json.msg);
	}
}
</script>
</div>
</body>
</html>
