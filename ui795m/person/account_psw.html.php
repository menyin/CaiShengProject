
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
	<title>597人才网触屏版_密码修改</title>
	<meta name="revisit-after" content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />
</head>
<body>
<!--{template header}-->
	<header class="pubtop">
	    <a href="javascript:history.go(-1)" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;"  class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
	    <div class="cent"><p><b>修改密码</b></p></div>
	</header>

	<nav class="pubnav" id="pubnav" style="display:none;" ><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
	
	<script type="text/javascript">
		var $navBtn = $('#navBtn');
		var $pubnav = $('#pubnav');
		$(document).ready(function(){
			$navBtn.toggle(function(){
				$pubnav.slideDown();
			},function(){
				$pubnav.slideUp();
			});
		});
	</script>

	<section class="layout">
		<form method="post" id="frmPwdMod">
		    <div class="part form">
		    	<ul>
		        <li><div class="mod"><label class="txtLabel" for="txtOldPwd">旧密码</label><input type="password" class="text" id="txtOldPwd" name="txtOldPwd" autocomplete="off"/></div></li>
		        <li><div class="mod"><label class="txtLabel" for="txtNewPwd">新密码</label><input type="password" class="text" id="txtNewPwd" name="txtNewPwd" autocomplete="off"/></div></li>
		        <li><div class="mod"><label class="txtLabel" for="txtRepeatPwd">确认新密码</label><input type="password" class="text" id="txtRepeatPwd" name="txtRepeatPwd" autocomplete="off"/></div></li>
		        </ul>
		    </div>
	    	<div class="btns"><a href="javascript:void(0);" id="btnSave" class="btnsF16 btn4">确认</a></div>
	    </form>
	</section>

	<!--{template footer}-->
 
<script>
var $navBtn = $('#navBtn');
var $pubnav = $('#pubnav');
$(document).ready(function(){
	$navBtn.toggle(function(){
		$pubnav.slideDown();
	},function(){
		$pubnav.slideUp();
	});
	
	$.focusblur('input.text');

	$('#btnSave').click(function(){
		if($('#txtOldPwd').val() == ''||typeof($('#txtOldPwd').val()) == 'undefined'){
			alert('请输入旧密码');
			return;
		}

		if($('#txtNewPwd').val() == ''||typeof($('#txtNewPwd').val()) == 'undefined'){
			alert('请输入新密码');
			return;
		}

		if($('#txtRepeatPwd').val() == ''||typeof($('#txtRepeatPwd').val()) == 'undefined'){
			alert('请输入确认新密码');
			return;
		}

		$.ajax({
			url:"/api/web/user.api",
			type:"post",
			data:'act=psw&txtOldPwd='+$('#txtOldPwd').val()+'&txtNewPwd='+$('#txtNewPwd').val()+'&txtRepeatPwd='+$('#txtRepeatPwd').val(),
			dataType:"json",
			success:function(json){
				if(json.status>0){
					alert('密码修改成功');
					window.location.href = '/person/';
					return;
				}else{
					alert('密码修改失败');
				}
			}
		});
	});
});
</script>

</body>
</html>
