<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--    声明ie以最高的模式运行-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script> 
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/login.css?v=20150226" />

<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.js?v=2017" charset="utf-8"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="utf-8"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="utf-8"></script>
</head>
<body id="body">
<style type="text/css">
section{padding:15px;zoom:1;}
#content .pageTit{font-size:18px;margin-bottom:30px; height:50px; line-height:50px; border-bottom:1px solid #dadada; padding:0 10px; font-family:"微软雅黑";}
.mod{padding:40px 20px;zoom:1; border: 1px solid #ddd; }
.formMod .l{width:180px; text-align:right;}
.formMod .r{width:500px;}
.form .formBtn{margin:20px 0 0 185px;}
/*.mod .tip { background: #FFFFCC; border: 1px solid #FFCC99; padding: 10px 20px; margin: 20px;font-size: 12px; color: #666;}*/

.mod .tip {font-size: 12px;  color: #666; line-height: 200%; margin: 30px 0 0 92px;}
.mod .tip h3 {font-weight: bold; color: #f30; margin-bottom: 5px; font-size: 14px;}
</style>
<header>
	<div class="headerCon">
		<div class="logo"><a href="/"></a><b style="margin-top:10px;">更改用户名</b></div>
	</div>
</header>
	
	<section class="content" id="content">
		<div class="mod">
			<form id="frmValid" action="/api/web/user.api?act=modUname" method="post">
			<!--<input type="hidden" id="hidUserName" name="hidUserName" value="{$uname}" />-->
			<input type="hidden" id="hidEmail" name="hidEmail" value="{$email}" />
			<input type="hidden" id="hidKey" name="hidKey" value="{$key}" />
			<input type="hidden" id="hidExpires" name="hidExpires" value="{$time}" />
			<!--<input type="hidden" id="hidUserNameByPhone" name="hidUserNameByPhone" value="{$UserName}" />-->
			<input type="hidden" id="hidMobilePhone" name="hidMobilePhone" value="{$MobilePhone}" />
			<input type="hidden" name="hidAuthCode" value="{$AuthCode}" />
			<div class="form">
				<div class="formMod">
					<div class="l">新的用户名<i>*</i></div>
					<div class="r">
						<span class="formText">
							<input type="text" id="txtUsername" name="txtUsername" autocomplete="off" class="text" style="width:235px;">
						</span>
						<span class="tipPos" >
							<span class="tipLay">
							</span>
						</span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formBtn"><a href="javascript:void(0);" id="btnSava" class="btnsF16 btn1">确定</a></div>
			</div>
			</form>
			<div  class="tip">
				<h3>温馨提示：</h3>
				因597人才网系统升级，为了规范用户名，请您及时修改您的用户名。<br />
				用户名规则：用户名必须以3-30位字符字母、数字、下划线组成，不能含特殊字符。
			</div>
		</div>
	</section>

<script type="text/javascript">
//用户名是否被注册
$.validator.addMethod('IsRegistered', function(value, element) {
var result = false;
$.ajax({
url: '/api/web/user.api',
cache: false,
async: false,
type: 'post',
dataType: 'json',
data: {
act:'usernameRepeat',
txtUsername: $("#txtUsername").val()
},
success: function(json) {
if (json && json.status>0) {
result = true;
} else {
result = false;
}
}
});
return result;
}, '该用户名已注册，请更换');


var frmValid=$("#frmValid").validate({
	rules:{	 
		txtUsername:{
			required: true,
			rangelength: [3, 30],
			match: '^[A-Za-z0-9_]*$',
			IsRegistered: true
		}
	},
	messages:{
		txtUsername:{
			required: '请填写用户名<span class="tipArr"></span>',
			rangelength: '用户名3-30位字符<span class="tipArr"></span>',
			match: '用户名为字母、数字、下划线组成<span class="tipArr"></span>',
			IsRegistered: '该用户名已被注册，请更换<span class="tipArr"></span>'
		}
		
	},
	errorClasses:{	  
		txtUsername:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			match:'tipLayErr tipw150',
			IsRegistered:'tipLayErr tipw150'			
		}
	},
	tipClasses:{
		txtUsername:'tipLayTxt tipw120'
	},
	tips:{
		txtUsername:'请输入用户名<span class="tipArr"></span>'
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
			$('#txtUsername').focus(function(){
				intervalPwd = window.setInterval(fn.pwdDynamic,200);
			});

			$('#btnSava').click(function(){
				$(this).submitForm({ beforeSubmit: $.proxy(frmValid.form, frmValid),success:fn.success,clearForm:false});
			});
		},
		success:function(result){
			if (result && result.status<1) {
				$.message(result.msg, { title: "系统提示", icon: 'fail' });
				return;
			}
			$.anchorMsg('用户名修改成功', { onclose: function() {
				window.location.href = '/company/login.html';
			}
			});
			return;
		}
	}

	forgetchangepassword.init();
</script>
</body>
</html>

