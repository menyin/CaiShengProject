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
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>企业登录-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=20150106" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_style2.css?v=20140325" />
	<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/www/js/jquery.js?v=20130808"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/m.js?v=20140313"></script>
	<style>
		header h2 {white-space:nowrap;}
		#formUsername {margin:0 15px;}
		.formMod {height: 40px; line-height: 40px; border:1px solid #ddd;}
		.formMod:first-child {border-bottom:none;}
		.formMod .l{float: left; width:30%;height: 20px; line-height: 20px; margin-top: 10px; border-right:1px solid #ddd; margin-left: -1px; }
		.formMod .r {float: left; width:70%; height: 40px;}
		.formText,.formMod .text {display: block; width:100%; height: 40px; text-indent: 10px; }
		.formBtn {margin-top: 15px;}
	</style>
</head>
<body>
<div class="content">
	<!--{template header}-->
	<header>
		<a class="btn_back" id="btn_back" onclick="history.back();"></a>
		<h2>{$domainInfo['region_name_full']}企业用户名重复登录</h2>
	</header>
	<div class="cngIdForm">
		<form id="formUsername" action="/api/web/company.api?act=cityLogin" method="post">
		<input type="hidden" name="rzKey" id="rzKey" value="">
		<input type="hidden" name="userId" id="userId" value="">
		<div class="personInfo">
			<div class="formMod">
				<div class="l">用户名<i>&nbsp;</i></div>
				<div class="r">
					<span class="formText">
						<input type="text" id="txtUserName" name="txtUserName"  class="text"  />
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formMod">
				<div class="l">登录密码<i>&nbsp;</i></div>
				<div class="r">
					<span class="formText">
						<input type="password" id="txtPwd" name="txtPwd"  class="text" />
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="newName" style="display:none;">
			<div class="formMod">
				<div class="l">新的用户名<i>&nbsp;</i></div>
				<div class="r">
					<span class="formText">
						<input type="text" id="newUserName" name="newUserName"  class="text"  />
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<p><span>注：</span>您需要重新设置用户名,新用户名为3-32位字母、数字组合</p>
		</div>
		<div class="formBtn"><a href="javascript:void(0)" id="btnSure" class="btn1 btnsF14">确定</a>
		</form>
	</div>
</div>
<div class="myAlert" style="position: fixed;z-index:99;left: 0;top: 0;width: 100%;height: 100%;background: black;opacity: 0.6;display: none;"></div>
<div class="myAlert" style="position: fixed;z-index: 999;left: 10%;top: 35%;width: 80%;border-radius: 5px;background: white;border:1px solid gray;text-align: center;display: none;">
	<div style="border-bottom: 1px solid gray;padding: 5px 10px;">提示</div>
	<div style="border-bottom: 1px solid gray;padding: 20px 10px;text-align: left;" id="showContent"></div>
	<div style="padding: 5px 10px;color: blue;" onclick="$('.myAlert').hide();">确定</div>
</div>
<script type="text/javascript">
	var modUser={
		init:function(){
			$.focusColor('input.text');
			modUser.submit();
			modUser.cancel();
		},
		submit:function(){
			$('#btnSure').click(function(){
				$('#btnSure').submitForm({beforeSubmit:modUser.beforeSubmit, success: modUser.successCallback, clearForm: false });
				return false;
			});
		},
		beforeSubmit:function(){
			var txtUserName = $('#txtUserName').val(),
				txtPwd = $('#txtPwd').val();

			if(txtUserName==''||txtPwd==''){
				alert('用户名密码不能为空');
				return false;
			}else{
				return true;
			}
		},
		cancel:function(){
			$('#btnCancel').click(function(){
				$(this).closeDialog();
			});
		},
		successCallback:function(json){
			if(json.status==1){
				alert('登录成功');
				$('.newName').show();
				$('.personInfo').hide();
				$('#rzKey').val(json.rzKey);
				$('#userId').val(json.userId);
			}else if(json.status==100){
				alert('更改用户名成功，请用新的用户名('+json.newname+')到网站登录');

			}else{
				$('#showContent').html(json.msg);
				$('.myAlert').show();
				return;
			}
		}
	}
	modUser.init();
</script>
</body>
</html>