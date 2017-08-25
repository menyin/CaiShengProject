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
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>密码修改-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=20140312"></script>
</head>
<style>
.mKeywordBg span.Lselect .LselectedSelect{ display:none!important;}
.mKeywordP {
	padding-bottom:0px;
}
/*表单*/
.formMod{margin-top:10px;margin-bottom:15px;}
.formMod .l{float:left;display:inline;height:30px;line-height:30px; text-align:right;font-size:14px;margin-right:10px;color:#6c6c6c;width: 25%;}
.formMod .l i{color:#de0000;font-style:normal;margin:0 0 0 5px;width:12px;display:inline-block;}
.formMod .r{float:left;display: block;
width: 55%}

/*输入框*/
.formText{float:left;display:inline; position:relative; z-index:1; width:100%;}
.formText label.txtLabel{color:#999; position:absolute;font-size:14px;left:7px;top:4px;left:6px \9\0;top:5px \9\0;*left:6px;*top:5px; cursor:text;}
.formText input.text{height:28px;line-height:28px;border:1px solid #cfcfcf;border-right:1px solid #e8e8e8;border-bottom:1px solid #e8e8e8;padding:0 5px;color:#333;background:#fff;font-size:14px;}/*输入框默认状态*/
.formText input.text::-ms-clear{display:none;}
.formText input.text::-ms-reveal{display:none;}
.formText input.textGray{color:#ccc;}/*输入框默认灰色文字状态*/
.formText input.textDis{background:#f2f2f2;color:#ccc;}
.formText input.error{height:28px;line-height:28px;border:1px solid #f1aaa9;background:#fff3f3;box-shadow:0 0 3px #f1aaa9;}/*输入框判断错误*/
.formText input.focus{height:28px;line-height:28px;border:1px solid #9fcdd6;background:#f2fcfe;box-shadow:0 0 5px #9fcdd6;}
.formText input.disText{background:#f3f3f3;}
.formMod .tipTxt{float:left;display:inline;margin-left:5px;height:30px;line-height:30px;font-size:12px;}
.formMod .tipAry{color:#999;float:left;}
.formMod .tipEro{color:#b63d31;float:left;}
.formMod .tipEro i{font-size:16px;margin:0 3px 0 0;float:left;}
.formMod .font14{font-size:14px;}
</style>
<body>
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg ">
		<a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a>
		修改密码
		<em class="" style="display:none"></em>
	</div>
</div>
<form id="formModPass" action="/api/web/user.api" method="post">
	<input type="hidden" id="act" name="act" class="text" value="psw" />
	<div class="dgBox cngPassBox">
		<div class="cngIdForm">
		<div class="formMod">
			<div class="l">旧密码：<i>&nbsp;</i></div>
				<div class="r">
				<span class="formText">
						<input type="password" id="txtOldPwd" name="txtOldPwd" style="width:100%;" class="text" autocomplete="off"/>
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formMod">
			<div class="l">新密码：<i>&nbsp;</i></div>
				<div class="r">
				<span class="formText">
						<input type="password" id="txtNewPwd" name="txtNewPwd" style="width:100%;" class="text" autocomplete="off"/>
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
					<span id="pwdTipTxt" class="tipTxt" style="clear:both;width:100%;display:none">密码强度：<em class="red">弱</em></span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formMod">
			<div class="l">确认密码：<i>&nbsp;</i></div>
				<div class="r">
				<span class="formText">
						<input type="password" id="txtRepeatPwd" name="txtRepeatPwd"  style="width:100%;" class="text" autocomplete="off"/>
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formBtn"><a href="javascript:void(0)" id="btnSure" class="btn1 btnsF14">确定</a>
		</div>
	</div>
</form>
<!--{template company/footer}-->
<script type="text/javascript">
//密码验证规则
		$.validator.addMethod("inputRegValiPwd", function(value, element) {
			var pwd = $('#txtNewPwd').val();
			var oldpwd = $('#txtOldPwd').val();
			var userName = $('#pUserName').html();
			var patten = new RegExp('^[0-9]+$');
			if (userName == pwd) {
				errorMsg = "密码和用户名不能相同<span class='tipArr'></span>";
				return false;
			}
			if(pwd==oldpwd){
			errorMsg = "新密码和旧密码不能相同<span class='tipArr'></span>";
				return false;
			}
			if (/^(\d)\1+$/.test(pwd)){
				errorMsg = "密码不能为同一个数字<span class='tipArr'></span>";
				return false;
			}
			var str = pwd.replace(/\d/g, function($0, pos) {
				return parseInt($0)-pos;
			});
			if (/^(\d)\1+$/.test(str)){
			 errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
				 return false;
			}
			str = pwd.replace(/\d/g, function($0, pos) {
				return parseInt($0)+pos;
			});
			if (/^(\d)\1+$/.test(str)){
			 errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
				 return false;
			}
			return true;
		}, function() { return errorMsg; });
var formPassValid=$('#formModPass').validate({
	rules:{
		txtOldPwd:{required:true,rangelength: [6, 16]},
		txtNewPwd:{required:true,rangelength: [6, 16],inputRegValiPwd:true},
		txtRepeatPwd: { required: true, rangelength: [6, 16], equalTo: "#txtNewPwd" }
	},
	messages:
	{
	txtOldPwd:{required:'请填写旧密码<span class="tipArr"></span>',rangelength: '6-16位字符<span class="tipArr"></span>'},
	txtNewPwd:{required:'请填写新密码<span class="tipArr"></span>',rangelength: '6-16位字符<span class="tipArr"></span>'},
	txtRepeatPwd: { required: '请填写确认密码<span class="tipArr"></span>',rangelength:'6-16位字符<span class="tipArr"></span>', equalTo: '两次密码不一致<span class="tipArr"></span>' }
	},
	errorClasses:{
	txtOldPwd:{required: 'tipLayErr tipw100',rangelength: 'tipLayErr tipw100'},
	txtNewPwd:{required: 'tipLayErr tipw100',rangelength: 'tipLayErr tipw100',inputRegValiPwd:'tipLayErr tipw150'},
	txtRepeatPwd:{required: 'tipLayErr tipw100',rangelength: 'tipLayErr tipw100', equalTo:'tipLayErr tipw150'}
	},
	tipClasses:{
	txtOldPwd:'tipLayTxt tipw100',
	txtNewPwd:'tipLayTxt tipw100',
	txtRepeatPwd:'tipLayTxt tipw100'
	},
	tips: {
		txtOldPwd:'6-16位字符<span class="tipArr"></span>',
		txtNewPwd:'6-16位字符<span class="tipArr"></span>',
		txtRepeatPwd:'6-16位字符<span class="tipArr"></span>'
	},
	errorElement: 'span',
	errorPlacement: function(error, element)
	{
	element.parent().next().find('.tipLay').append(error);
	},
	success: function(label)
	{
		label.text(" ");
	}
});

var modPass={
	intervalPwd: null,
	init:function(){
		$.focusColor('input.text');
		modPass.submit();
		modPass.cancel();
		$('#txtNewPwd').focus(function(){
			modPass.intervalPwd = window.setInterval(modPass.pwdDynamic, 200);
		}).blur(function(){
			window.clearInterval(modPass.intervalPwd);
		});
	},
	submit:function(){
		$('#btnSure').click(function(){
			$('#btnSure').submitForm({beforeSubmit: $.proxy(formPassValid.form,formPassValid), success: modPass.successCallback, clearForm: false });
			return false;
		});
	},
	cancel:function(){
		$('#btnCancel').click(function(){
			$(this).closeDialog();
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
		var password  = $('#txtNewPwd').val()
			,strongBox = $('#pwdTipTxt')
			,fn = this;

		if(password == ''){
			strongBox.hide();
			return;
		}

		strongBox.show();

		var modeNum = modPass.pwdStrong(password);

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
	successCallback:function(json){
		if (json.status>0){
			alert("密码修改成功!");
			window.location.href='/company/account/';
		}else{
			alert(json.msg);
			return;
		}

	}
}
modPass.init();
</script>
</body>
</html>