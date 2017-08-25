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
	<title>597人才网触屏版_联系方式</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m/mobile.dropdown.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m/mobile.form.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_uc.css?v=20140403" />
</head>
<body>
<!--{if $app['isNewApp']!="yes"}-->
<!--{template header}-->
<header class="pubtop">
	<a href="javascript:history.go(-1);" class="back jpFntWes">&#xf053;</a>
	<div class="cent"><p><b>意见反馈</h1></b></div>
</header>
<!--{/if}-->
	<section class="layout">
		<form id="formMess" action="/suggestion.html" method="post">
		<input name="act" value="save" type="hidden">
		<input name="fromUrl" value="{$fromUrl}" type="hidden">
		<div class="part feedForm form">
			<p>反馈内容:</p>
			<dl class="feedBox">
				<dt></dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="con"></label><textarea id="con" name="txtMessage" class="textarea" autocomplete="off"></textarea></div>
				</dd>
			</dl>
		</div>
		<div class="part feedForm form">
			<p>请填写您的联系方式，以便我们及时回复</p>
			<dl>
				<dt>您的姓名:</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="name" style="display: block;"><!--{if !$_resume[realname]}-->未填写<!--{/if}--></label><input type="text" class="text" id="name" name="txtName" value="{$_resume[realname]}" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt>联系电话:</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="tel" style="display: block;"><!--{if !$_temp[mobile]}-->未填写<!--{/if}--></label><input type="tel" class="text" id="tel" name="txtPhone" value="{$_temp[mobile]}" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt>电子邮箱:</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="mail" style="display: block;"><!--{if !$_temp[email]}-->未填写<!--{/if}--></label><input type="text" class="text focus" id="mail" name="txtEmail" value="{$_temp[email]}" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt>qq:</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="mail" style="display: block;"><!--{if !$_temp[email]}-->未填写<!--{/if}--></label><input type="tel" class="text focus" id="mail" name="txtQQ" value="{$_temp[qq]}" autocomplete="off"></div>
				</dd>
			</dl>
		</div>
		<div style="text-align:left;padding:0 0 10px 0;">注意：此处留言是给597人才网，如要咨询企业，请直接投递简历或电话联系企业。</div>
		<div class="btns"><a class="btn1 btnsF16" href="javascript:void(0);" id="btnSubmit">提交反馈</a></div>
	</form>
	</section>
<!--{if $app['isNewApp']!="yes"}-->
<!--{template footer}-->
<!--{/if}-->
<section id="app_tc" style="display:none;">
	<div class="appPhoneG">
		<img src="">
		<a id="testBtn" href="javascript:;"></a>

	</div>
	<div class="appPhoneT">
		<p>下载手机客户端</p>
		<p>不错过每一次面试机会!</p>
	</div>
	<div class="appPhoneD">
		<a href="/download/index/typeid-1-apporigin-3">立刻下载</a>
	</div>
</section>
		<script>
			//去掉APP推广弹窗
//			$(document).ready(function(){
//				//				setTimeout(function(){
//					$("#app_tc").show();
//				},1000);
//				//
//				 $('#testBtn').on('click',function(){
//						$('#app_tc').hide();
//					   ajaxModShow();
//					});
//			})
//
//	  function ajaxModShow(){
//				$.ajax({
//					url : "/index/AjaxModAppShow/",
//					dataType : "JSON",
//					type : "POST",
//					success : function (data){
//					},
//					error : function() {
//						   setCookie("_app_show_flag_true",'app_not_show_true',60*60*24);
//					}
//				});
//
//	}
//		function setCookie(name,value,time){
//			var strsec = time*1000;
//			var exp = new Date();
//			exp.setTime(exp.getTime()+strsec);
//			document.cookie = name+"="+escape(value)+";expires="+exp.toGMTString();
//		}
//
		</script>
</div>
<style type="text/css">
.bban{background-color:rgba(0,0,0,.8);bottom:0;height:69px;position:fixed;width:100%;z-index:100;}
.bban .aban{display:block;height:100%;width:100%;}
.bban .iban{float:left;height:30px;margin:20px 12px;width:30px;}
.bban .text{color:#FFF;float:left;margin-top:20px;}
.bban .btnd{background-color:#E2E2E2;border-radius:3px;color:#282828;float:right;margin:20px;padding:8px;}
.bban .p1{font-size:14px;opacity:.8;}.bban .p2{font-size:11px;margin-top:2px;opacity:.6;}
.bban .x{background:;background-size:auto 16px;height:25px;left:0;position:absolute;top:0;width:25px;color: #ccc;}
</style>
<div class="bban" style="display: none; ">
		<a class="aban" id="aban_id" href="/download/">
			<img class="iban" src="">
			<div class="text">
				<p class="p1">APP速度更快,更省流量</p>
			</div>
			<div class="btnd">立即下载</div>
		</a>
		<a class="x" id="btnAppColse">x</a>
</div>
<script type="text/javascript">
	/*var isAppdown = cookieutility.get('appdownload');
	if(!isAppdown) {
		$('div.bban').show();
	}
	$('#btnAppColse').click(function(e){
		$('div.bban').hide();
		if(!isAppdown){
			cookieutility.set('appdownload',true,1);
		}
	});
	$('#aban_id').click(function(e){
		$('div.bban').hide();
	});*/
</script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
$.focusblur('input.text');
$.focusblur('textarea.textarea');

$('#btnSubmit').click(function(e){
	e.preventDefault();
	var content = $('#con').val();
	if(!content) {
		alert('请填写反馈内容！');
		return;
	}
	var name = $('#name').val();
	var tel = $('#tel').val();
	var mail=$('#mail').val();
	if($('#name').val()==''){
		alert('请填写您的姓名！');
		return;
	}
	if($('#tel').val()==''){
		alert('请填写联系电话！');
		return;
	}
	var re =new RegExp("^[0-9\\-_]*$");
	if(!re.test(tel)){
		alert('联系电话格式错误！');
		return;
	}
	if($('#mail').val()==''){
		alert('请填写电子邮箱！');
		return;
	}
	$('#btnSubmit').submitForm({success:success,clearForm:false});
});

function success(json){
	if(json.status>0){
		alert(json.msg);
		//window.location.href = json.from;
	}else{
		alert(json.msg);
	}
}

});
</script>
</body></html>