<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_求职中心_密码修改</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20140930" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
	</script>
	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
	<script type="text/javascript">jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');</script>
</head>

<body id="body" class="noResize minMain">
	<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000 clearfix">
	    <!--#include virtual="/templates/default/person/menu.htm" -->
	    <div class="right-main">
	        <ul class="clearfix menu-tit">
				<li id="cssIndex"><a href="/person/account/">账号管理</a></li>
				<li id="cssInfo"><a href="/person/account/info.html">基本资料</a></li>
				<li id="cssPhoto"><a href="/person/account/photo.html">上传头像</a></li>
				<li id="cssPassword"><a href="/person/account/password.html">修改密码</a></li>
				<li class="right"><a href="/person/resume/privacy.html" target="_blank">隐私设置</a></li>
	        </ul>
			<form id="frmPasswordModify" action="/api/web/user.api?act=psw" method="post">
	               <div class="form">
	                    <div class="formMod">
	                        <div class="l">当前密码<i>&nbsp;</i></div>
	                        <div class="r">
	                            <span class="formText">
	                                <input type="password" id="txtOldPwd" name="txtOldPwd" autocomplete="off" class="text" style="width:170px;" />
	                            </span>
	                            <span class="tipPos">
	                                <span class="tipLay">
	                                </span>
	                            </span>
	                        </div>
	                        <div class="clear"></div>
	                    </div>
	                    <div class="formMod">
	                        <div class="l">新密码<i>&nbsp;</i></div>
	                        <div class="r">
	                            <span class="formText">
	                            	<input type="password" id="txtNewPwd" name="txtNewPwd" style="width:170px;" autocomplete="off" class="text" />
	                            </span>
	                            <span class="tipPos">
	                                <span class="prompt-msg msg error-msg">
	                                </span>
	                            </span>
	                            <span class="tipTxt" id="pwdTipTxt" style="display:none;clear:both;width:100%;">密码强度：<em class="red">弱</em></span>
	                        </div>
	                        <div class="clear"></div>
	                    </div>
	                    <div class="formMod">
	                        <div class="l">重复新密码<i>&nbsp;</i></div>
	                        <div class="r">
	                            <span class="formText">
	                                <input type="password" id="txtRepeatPwd" name="txtRepeatPwd" class="text" autocomplete="off" style="width:170px;" />
	                            </span>
	                            <span class="tipPos">
	                                <span class="tipLay">

	                                </span>
	                            </span>
	                        </div>
	                        <div class="clear"></div>
	                    </div>
	                    <div class="formBtn"><a href="javascript:void(0);" id="btnUpdatePwd" class="btn6 btnsF16">保存</a></div>
	               </div>
	           </form>
		</div>
	</div>
	<!--{template person/footer}-->

	<script>
		jpjs.use("@form,@jobDialog", function(m) {
		var $ = m['jpjob.jobValidate'],
			form = m['jpjob.jobForm'],
			dialog = m['jpjob.jobDialog'];
		$.extend(form, dialog);
		//表单验证
		var $ = $.extend(form, dialog);
		var frmValid = $('#frmPasswordModify').validate({
			rules:{
				txtOldPwd:{required:true,rangelength: [6,16]},
				txtNewPwd:{required:true,rangelength:[6,16]},
				txtRepeatPwd: { required: true,rangelength: [6, 16], equalTo: "#txtNewPwd" }
			},
			messages:{
				txtOldPwd:{
					required:'请输入旧密码<span class="tipArr"></span>',
					rangelength:'6-16位字母、数字或符号<span class="tipArr"></span>'
				},
				txtNewPwd:{
					required:'请输入新密码<span class="tipArr"></span>',
					rangelength:'6-16位字母、数字或符号<span class="tipArr"></span>'
				},
				txtRepeatPwd:{
					 required: '请输入确认密码<span class="tipArr"></span>',
					 rangelength:'6-16位字母、数字或符号<span class="tipArr"></span>',
					 equalTo: '两次密码不一致<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				txtOldPwd:{
					required:'tipLayErr tipw120',
					rangelength:'tipLayErr tipw150'
				},
				txtNewPwd:{
					required:'tipLayErr tipw120',
					rangelength:'tipLayErr tipw150'
				},
				txtRepeatPwd:{
					required:'tipLayErr tipw120',
					rangelength:'tipLayErr tipw150',
					equalTo: 'tipLayErr tipw120'
				}
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.parent().next().find('.tipLay').append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});

		var intervalPwd;
		var passwordModify = {
			initialize:function(){
				var fn =this;
				$('#txtNewPwd').focus(function(){
					intervalPwd = window.setInterval(fn.pwdDynamic,200);
				});
				$('#btnUpdatePwd').click(function(){
					$("#btnUpdatePwd").submitForm({ beforeSubmit: $.proxy(frmValid.form, frmValid),data:{}, success: fn.modifySuccess, clearForm: false });
					return false;
				});
			},
			pwdStrong:function(pwd){
				//密码强度计算
				var modes = 0,
					pwd_len = pwd.length,
					i = 0,
					codeTemp;
				for (i; i<pwd_len; i++) {
					codeTemp = pwd.charCodeAt(i);
					if (codeTemp >= 48 && codeTemp <= 75) {
						modes |= 1;
					} else if (codeTemp > 65 && codeTemp <= 90) {
						modes |= 2;
					} else if (codeTemp > 97 && codeTemp < 122) {
						modes |= 4;
					} else {
						modes |= 8;
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
				var password  = $('#txtNewPwd').val()
					,strongBox = $('#pwdTipTxt')
					,fn = this;

				if(password == ''){
					strongBox.hide();
					return;
				}

				strongBox.show();

				var modeNum = passwordModify.pwdStrong(password);

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
			modifySuccess:function(result){
				if(result && result.status>1){
					$.anchorMsg('密码修改成功',{title: "操作成功", icon: "success",onclose:function(){
						window.location.href = '/person/account/';
					}});
				}else{
					$.message(result.msg,{title:'操作失败！'});
				}
				return;
			}
		}
		passwordModify.initialize();
		});
	</script>
</body>
</html>