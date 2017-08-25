<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20140319"></script>
<style>
a{color: #3D84B8;}
.cngIdBox{width:335px;font-size:12px;}
.cngIdBox .formMod .l{width:100px;}
.cngIdBox .formMod .r{width:210px;}
.cngIdBox .formBtn{margin:10px 0 0 110px;}
.cngIdBox .formBtn a{margin:0 10px 0 0;}
.newName p{font-size: 12px; color: #999;}
.newName p span{color: #f00; font-weight: bold;}
</style>
</head>
<body>
<div class="dgBox cngIdBox">
	<div class="cngIdForm">
		<form id="formUsername" action="/api/web/person.api?act=cityLogin" method="post">
		<input type="hidden" name="rzKey" id="rzKey" value="">
		<input type="hidden" name="userId" id="userId" value="">
		<div class="personInfo">
			<div class="formMod">
				<div class="l">用户名<i>&nbsp;</i></div>
				<div class="r">
					<span class="formText">
						<input type="text" id="txtUserName" name="txtUserName" style="width:158px;" class="text"  />
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
						<input type="password" id="txtPassword" name="txtPassword" style="width:158px;" class="text" />
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
						<input type="text" id="newUserName" name="newUserName" style="width:158px;" class="text"  />
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
		<div class="formBtn"><a href="javascript:void(0)" id="btnSure" class="btn1 btnsF14">确定</a><a href="javascript:void(0)" id="btnCancel" class="btn3 btnsF14">取消</a></div>
		</form>
	</div>
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
				txtPassword = $('#txtPassword').val();
			if(txtUserName==''||txtPassword==''){
				$.message('用户名密码不能为空',{ icon: 'warning' });
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
				$.anchorMsg('登录成功');
				$('.newName').show();
				$('.personInfo').hide();
				$('#rzKey').val(json.rzKey);
				$('#userId').val(json.userId);
			}else if(json.status==100){
				$.message('更改用户名成功，请用新的用户名('+json.newname+')到网站登录',{ icon: 'success',onclose:function(){window.location.href = '/person/login.html';} });
				
			}else{
				$.message(json.msg,{ icon: 'warning' });
				return;
			}
		}
	}
	modUser.init();
</script>
</body>
</html>