<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<script src="http://cdn.597.com/js/html5.js?v=20150226"></script> 
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/login.css?v=20150226" />

<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=20150226"></script>
</head>
<body id="body">
<style type="text/css">
section{padding:15px;zoom:1;}
#content .pageTit{font-size:18px;margin-bottom:30px; height:50px; line-height:50px; border-bottom:1px solid #dadada; padding:0 10px; font-family:"微软雅黑";}
.form{padding:20px 0;zoom:1;}
.formMod .l{width:180px; text-align:right;}
.formMod .r{width:500px;}
.form .formBtn{margin:20px 0 0 185px;}
</style>
<header>
	<div class="headerCon">
		<div class="logo"><a href="/"></a><b>找回密码</b></div>
	</div>
</header>

	<section class="content" id="content">
		<div class="mod">
			<form id="frmValid" action="/api/web/user.api?act=modPassword" method="post">
			<!--<input type="hidden" id="hidUserName" name="hidUserName" value="{$uname}" />-->
			<input type="hidden" id="hidEmail" name="hidEmail" value="{$email}" />
			<input type="hidden" id="hidKey" name="hidKey" value="{$key}" />
			<input type="hidden" id="hidExpires" name="hidExpires" value="{$time}" />
			<!--<input type="hidden" id="hidUserNameByPhone" name="hidUserNameByPhone" value="{$UserName}" />-->
			<input type="hidden" id="hidMobilePhone" name="hidMobilePhone" value="{$MobilePhone}" />
			<input type="hidden" name="hidAuthCode" value="{$AuthCode}" />
			<div class="form">
				<div class="formMod">
					<div class="l">新的密码<i>*</i></div>
					<div class="r">
						<span class="formText">
							<input type="password" id="txtPassword" name="txtPassword" autocomplete="off" class="text" style="width:235px;">
						</span>
						<span class="tipPos" >
							<span class="tipLay">
							</span>
						</span>
						<span class="tipTxt" style="clear:both;width:100%;display:none"  id="pwdTipTxt">密码强度：<em class="red">弱</em></span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formMod">
					<div class="l">确认新的密码<i>*</i></div>
					<div class="r">
						<span class="formText">
							<input type="password" id="txtRepeatPassword" name="txtRepeatPassword" autocomplete="off" class="text" style="width:235px;">
						</span>
						<span class="tipPos">
							<span class="tipLay">
							</span>
						</span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formBtn"><a href="javascript:void(0);" id="btnSava" class="btnsF16 btn1">确定</a></div>
			</div>
			</form>
		</div>
	</section>

<script type="text/javascript">

var frmValid=$("#frmValid").validate({
	rules:{	 
		txtPassword:{required:true,rangelength: [6,16]},
		txtRepeatPassword:{required:true,rangelength: [6,16],equalTo: "#txtPassword"}
	},
	messages:{
		txtPassword:{
			required:'请输入密码<span class="tipArr"></span>',
			rangelength:'密码只能输入6-16位字符<span class="tipArr"></span>'
		},
		txtRepeatPassword:{
			 required: '请输入确认密码<span class="tipArr"></span>',
			 rangelength:'密码只能输入6-16位字符<span class="tipArr"></span>',
			 equalTo: '两次密码不一致<span class="tipArr"></span>'
		}
		
	},
	errorClasses:{	  
		txtPassword:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150'
		},
		txtRepeatPassword:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			equalTo: 'tipLayErr tipw150'
		}
	},
	tipClasses:{
		txtPassword:'tipLayTxt tipw120',
		txtRepeatPassword:'tipLayTxt tipw120'
	},
	tips:{
		txtPassword:'请输入密码<span class="tipArr"></span>',
		txtRepeatPassword:'请输入确认密码<span class="tipArr"></span>'
	},
	errorElement:'span',
	errorPlacement:function(error,element){
		element.closest('div.formMod').find('.tipPos .tipLay').append(error);
	},
	success:function(label){
		label.text(" ");
	}
});
	
	var forgetchangepassword={
		init:function(){
			var fn = this;
			$('#txtPassword').focus(function(){
				intervalPwd = window.setInterval(fn.pwdDynamic,200);
			});

			$('#btnSava').click(function(){
				$(this).submitForm({ beforeSubmit: $.proxy(frmValid.form, frmValid),success:fn.success,clearForm:false});
			});
		},
		pwdStrong:function(pwd){
			//密码强度计算
			var modes =0,pwd_len =pwd.length,i=0,codeTemp;
			for(i;i<pwd_len;i++){
				codeTemp = pwd.charCodeAt(i);
				if(codeTemp>=48 && codeTemp<=75){
					modes |=1;
				}
				else if(codeTemp>65&&codeTemp<=90){
					modes |=2;
				}
				else if(codeTemp>97 && codeTemp<122){
					modes |=4;
				}
				else{
					modes |=8;
				}
			}
			var modeNum=0;
			for(i=0;i<4;i++){
				if(modes & 1) modeNum++;
				modes>>>=1;
			}
			return modeNum;
		},
		pwdDynamic:function(){
			var password  = $('#txtPassword').val()
				,strongBox = $('#pwdTipTxt')
				,fn = this;

			if(password == ''){
				strongBox.hide();
				return;
			}

			strongBox.show();

			var modeNum = forgetchangepassword.pwdStrong(password);
			
			if(modeNum <=1){
				$(strongBox).find('em').removeClass().addClass('red').html('弱');
			}
			else if(modeNum == 2){
				if(password.length<6){
					$(strongBox).find('em').removeClass().addClass('red').html('弱');
				}
				else{
					$(strongBox).find('em').removeClass().addClass('orange').html('中');
				}
			}
			else if(modeNum >2){
				if(password.length<6){
					$(strongBox).find('em').removeClass().addClass('red').html('弱');
				}
				else if(password.length > 6 && password.length<10){
					$(strongBox).find('em').removeClass().addClass('orange').html('中');
				}
				else{
					$(strongBox).find('em').removeClass().addClass('green').html('强');
				}
			}
		},
		success:function(result){
			if (result && result.status<1) {
				$.message(result.msg, { title: "系统提示", icon: 'fail' });
				return;
			}
			$.anchorMsg('密码修改成功', { onclose: function() {
				window.location.href = '/person/login.html';
			}
			});
			return;
		}
	}

	forgetchangepassword.init();
</script>
</body>
</html>

