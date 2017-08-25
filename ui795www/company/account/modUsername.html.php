<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--    声明ie以最高的模式运行-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
<![endif]–>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style>
.cngIdBox{width:335px;font-size:12px;}
.cngIdBox .formMod .l{width:100px;}
.cngIdBox .formMod .r{width:210px;}
.cngIdBox .formBtn{margin:10px 0 0 110px;}
.cngIdBox .formBtn a{margin:0 10px 0 0;}
</style>
</head>
<body>
<div class="dgBox cngIdBox">
	<div class="cngIdForm">
		<div class="formMod">
			<div class="l">当前用户名<i>&nbsp;</i></div>
			<div class="r">
			<span style="margin:0;" class="tipTxt font14">{$userInfo['username']}</span>
			<input type="hidden" id="hidUserId" name="hidUserId" value="{$userInfo['username']}"/>
			</div>
			<div class="clear"></div>
		</div>
		<form id="formUsername" action="/api/web/company.api?act=modUsername" method="post">
		<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
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
		<div class="formMod">
			<div class="l">新的用户名<i>&nbsp;</i></div>
			<div class="r">
				<span class="formText">
					<input type="text" id="txtUserId" name="txtUserId" style="width:158px;" class="text"  />
				</span>
				<span class="tipPos">
					<span class="tipLay">
					</span>
				</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formBtn"><a href="javascript:void(0)" id="btnSure" class="btn1 btnsF14">确定</a><a href="javascript:void(0)" id="btnCancel" class="btn3 btnsF14">取消</a></div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$.validator.addMethod('notEqualTo', function(value, element,param) {
		if (this.optional(element))
			return "dependency-mismatch";
		var oldUser = $(param).val();
		if(value==oldUser){
			return false;
		}
		return true;  	
	});
	var formUserValid=$('#formUsername').validate({
		rules:{
			txtPassword:{required:true,rangelength: [6, 16]},
			txtUserId:{required:true,rangelength:[3,32], notEqualTo: "#hidUserId"}
		},
		messages:
		{
			txtPassword:{required:'请填写密码<span class="tipArr"></span>',rangelength: '6-16位字符<span class="tipArr"></span>'},
			txtUserId:{required:'请填写新用户名<span class="tipArr"></span>',rangelength:'用户名3-32位，字母、数字组合<span class="tipArr"></span>', notEqualTo: '不能与当前用户名相同<span class="tipArr"></span>'}
		},
		errorClasses:{
			txtPassword:{required: 'tipLayErr tipw100',rangelength: 'tipLayErr tipw100'},
			txtUserId:{required: 'tipLayErr tipw100',rangelength: 'tipLayErr tipw245', notEqualTo:  'tipLayErr tipw150'}
		},
		tipClasses:{
			txtPassword:'tipLayTxt tipw100',
			txtUserId:'tipLayTxt tipw245'
		},
		tips: {
			txtPassword:'6-16位字符<span class="tipArr"></span>',
			txtUserId:'用户名3-32位，字母、数字组合'
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
	var modUser={
		init:function(){
			$.focusColor('input.text');
			modUser.submit();
			modUser.cancel();
		},
		submit:function(){
			$('#btnSure').click(function(){
				$('#btnSure').submitForm({beforeSubmit: $.proxy(formUserValid.form,formUserValid), success: modUser.successCallback, clearForm: false });
				return false;
			});
		},
		cancel:function(){
			$('#btnCancel').click(function(){
				$(this).closeDialog();
			});
		},
		successCallback:function(json){
			if(json.status>0){
				$('#btnSure').closeDialog();
				account.usernameSuccess(json);
				$.anchorMsg(json.msg);
			}else{
				if(json.status==0){
					$.message(json.msg,{ icon: 'warning' });
					return;
				}else{
					$.message(json.msg,{ icon: 'warning' });
					return;
				}
			}
		}
	}
	modUser.init();
</script>
</body>
</html>