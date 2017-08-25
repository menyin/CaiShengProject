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
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/img/75x75.png" >
	<title>597人才网触屏版_举报</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m/mobile.dropdown.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m/mobile.form.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_uc.css?v=20140403" />
</head>
<style type="text/css">
.mod label {display: block;float: left;width: 190px;margin-bottom: 8px;}
</style>
<body>
<!--{template header}-->
<header class="pubtop">
	<a href="javascript:history.go(-1);" class="back jpFntWes">&#xf053;</a>
	<div class="cent"><p><b>举报</h1></b></div>
</header>
	<section class="layout">
	<form id="frmComplaint" action="/api/web/job.api" method="post">
	<input type="hidden" name="act" value="report">
	<input type="hidden" name="jid" id="jid" value="{$_GET['jid']}">
		<div class="part feedForm form">
			<dl>
				<dt>举报类型:</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="con"></label><span class="formRad">
 <label for="rp6"><input type="radio" class="radio" id="rp6" name="rdPersonCompaint" value="6" checked="checked">招聘职位与真实情况不符</label>
 <label for="rp7"><input type="radio" class="radio" id="rp7" name="rdPersonCompaint" value="7">薪酬福利与真实情况不符</label>
 <label for="rp8"><input type="radio" class="radio" id="rp8" name="rdPersonCompaint" value="8">已经停止招聘的信息</label>
 <label for="rp9"><input type="radio" class="radio" id="rp9" name="rdPersonCompaint" value="9">培训招生及招商广告</label>
 <label for="rp2"><input type="radio" class="radio" id="rp2" name="rdPersonCompaint" value="2">冒用该公司名义招聘</label>
 <label for="rp10"><input type="radio" class="radio" id="rp10" name="rdPersonCompaint" value="10">招聘过程有违规行为</label>
 <label for="rp5"><input type="radio" class="radio" id="rp5" name="rdPersonCompaint" value="5">保险公司</label>
 <label for="rp4"><input type="radio" class="radio" id="rp4" name="rdPersonCompaint" value="4">其他</label>
</span></div>
				</dd>
			</dl>
			<dl>
				<dt>举报内容:</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="con"></label><textarea id="txtContent" name="txtContent" class="textarea"></textarea></div>
				</dd>
			</dl>
			<div style="text-align:left;padding:0 0 10px 0; color:#999;">尽可能详细描述，以便我们及时正确的处理</div>
			<dl>
				<dt>联系电话:</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtTelphone" name="txtTelphone" value="{$_temp[mobile]}"></div>
				</dd>
			</dl>
			<dl>
				<dt>电子邮箱:</dt>
				<dd>
					<div class="mod"><input type="text" class="text focus" id="txtEmail" name="txtEmail" value="{$_temp[email]}"></div>
				</dd>
			</dl>
		</div>
		<div style="text-align:left;padding:0 0 10px 0;color:#999;">处理结果将通过手机/邮箱告知您，请正确填写您的手机号码或邮箱</div>
		<div class="btns"><a class="btn1 btnsF16" href="javascript:void(0);" id="btnSubmit">提交</a></div>
	</form>
	</section>
<!--{template footer}-->
<script language="javascript" type="text/javascript">
$('#btnSubmit').click(function(e){
	e.preventDefault();
	var content = $('#txtContent').val();
	if(!content) {
		alert('请填写举报内容！');
		return;
	}
	var tel = $('#txtTelphone').val();
	if($('#tel').val()==''){
		alert('请填写联系电话！');
		return;
	}
	var re =new RegExp("^[0-9\\-_]*$");
	if(!re.test(tel)){
		alert('联系电话格式错误！');
		return;
	}
	var txtEmail = $('#txtEmail').val();
	var email_pattern = /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z-_]+\.)+[a-zA-Z]{2,4}$/;
	if(txtEmail==''||typeof(txtEmail)=='undefined'){
		alert('请填写邮箱！');
		return;
	}
	if(!email_pattern.exec(txtEmail)){
		alert('请填写正确的电子邮箱！');
		return;
	}
	$('#btnSubmit').submitForm({success:success,clearForm:false});
});

function success(json){
	var jid = $('#jid').val();
	if(json.status>0){
		alert('操作成功！');
		window.location.href='/job-'+jid+'.html';
	}else{
		alert(json.error);
	}
}
</script>
</body></html>