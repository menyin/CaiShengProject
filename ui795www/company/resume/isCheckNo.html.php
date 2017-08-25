<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
</head>
<body>
<style>
.invBox{width:500px;font-size:12px;}
.invBox .invFormHd{border-bottom:1px solid #dadada; padding-bottom:10px;}
.invBox .formMod{margin-bottom:10px;}
.invForm .formMod .l{width:70px; font-size:12px;}
.invForm .formMod .l i{font-size:14px;}
.invForm .formMod .r{width:415px;}
.invForm .formMod .r .formTextarea textarea.textarea{width:360px;height:50px;padding:0 0 0 5px;line-height:22px;font-size:12px;}
.invForm .invFormTxt{margin:0 0 0 120px;color:#999;}
.invForm .formText input.text{font-size:12px;}
.invForm .formText .gray{color:#999; font-size:12px;}
.invForm .formBtn{margin:20px 0 0 75px;}
.invForm .sms{margin:10px 0 0 80px;}
.invForm .sms .txt{color:#999; height:28px; line-height:20px;}
.invForm .sms .txt em{color:#3d84b8;}
.invForm .sms .smsBox{width:368px;}
.invForm .sms .smsBox .formTextarea textarea.textarea{width:351px; height:85px; font-size:12px; line-height:20px; text-align:left;}
.invForm .smsT{background:#f2f2f2; position:relative; z-index:1; height:30px; line-height:30px;border:1px solid #dbdbdb; border-bottom:0; width:365px; float:left; display:inline;}
.invForm .smsT .formRad input.radio{margin:9px 0 0 10px;margin:7px 0 0 10px\9;margin:8px 0 0 10px\11;*margin:3px 0 0 10px;}
.invForm .smsT .formRad label{margin-right:0;}
.invForm .smsT .tipTxt{float:left; display:inline;}
.invForm .smsT b{background:url(http://cdn.597.com/img/c/invit.jpg) no-repeat; width:13px; height:7px; position:absolute; left:63px; top:-7px;}
.invForm .sms .smsC{width:367px; overflow:hidden; float:left; display:inline;}
</style>
<form id="formSingleInvite" method="post" action="/api/web/admin.api">
<input type="hidden" name="act" value="isCheckNo">
<input type="hidden" name="rid" value="{$resumeid}" />
<div class="dgBox invBox">
	<div class="invForm">
		<div class="formMod">
			<div class="l">屏蔽原因<i>&nbsp;</i></div>
			<div class="r" style="position:relative">
				<span class="formTextarea">
					<textarea id="txtRemark" name="txtRemark" class="left textarea watermark" watermark="如信息不真实..."></textarea>
				</span>
				<span class="tipPos">
		   			<span class="tipLay">
			 		</span>
		   		</span>
			</div>
			<div class="clear"></div>
		</div>
		<div id="inviteFormBtn" class="formBtn" style="margin-top: 0px;"><a href="javascript:void(0);" id="btnSendInvite" class="btn1 btnsF14">发送</a><a id="btnCancelInvite" href="javascript:void(0);" class="btn3 btnsF14">取消</a></div>
	</div>
</div>
</form>
<script>
try{
	jpjs.use('jpjob.jobValidate, jpjob.jobForm, jpjob.actions, jpjob.jobDialog, jpjob.jobDropList, jpjob.autocomplete', 
	function($, form, actions, jobDialog, dropList, autocomplete){
		factory($.extend(form, actions, jobDialog, dropList, autocomplete));
	});
} catch (ex) {
	factory($);
}

function factory($){
	var tempRemark = '';
	var inviteSingle={
		initialize:function(){
			//初始化控件		
			this._initControl();
		},
		_initControl:function(){
			
			$('#inviteFormBtn').on('click', 'a', function(e){
				var target = e.currentTarget,
					idName = $(target).attr('id');
				
				if(idName === "btnSendInvite"){
					inviteSingle.invite(target);
				} else {
					if($('#btnSendInvite')[0].trigger){
						$('#btnSendInvite')[0].trigger('close');
					} else {
						$('#btnSendInvite').closeDialog();
					}
				}
			});
			
			$('.watermark').watermark2();
			$.setIndex('zindex');
			//自定义验证方法-不超过30个字符，一个汉字为2个字符
			//$.validator.addMethod("validateJobStation", function(value, element) {
				//var inputLehgth = value.caseLength();
				//alert(/.*[\u4e00-\u9fa5]+.*$/.test(value));
				//return inputLehgth <= 30 && inputLehgth >= 2;
			//}, '名称不能少于2个字符<span class="tipArr"></span>');
			$.validator.addMethod("validateSmsContent", function(value, element) {
				var inputLehgth = value.length;
				if($(':input[name="smsType"]:checked').val() == 2){
					return inputLehgth <= 118 && inputLehgth >= 1;
				}else{
					return inputLehgth <= 60 && inputLehgth >= 1;
				}
			}, '');
			inviteValid = $("#formSingleInvite").validate({
				//ignore:"#txtOtherReward",
				rules: {
					txtRemark:{maxlength: 200 }
				},
				messages: {
					txtRemark:{maxlength:'屏蔽原因不能超过200个字<span class="tipArr"></span>'}
				},
				//focusInvalid:false,
				errorElement: 'span',
				errorClasses: {
					txtRemark:{maxlength:'tipLayErr tipw180'}
				},
				tipClasses:{
					txtStation: 'tipLayTxt tipw150'
				},
				groups:{ datetime: 'hddDate hddtime txtCustomTime'},
				errorPlacement: function(error, element) {
					if(element.attr('name') == 'hddDate' || element.attr('name') == 'hddtime' || element.attr('name') == 'txtCustomTime'){
						element.parent().nextAll().find('.tipLay').append(error);
					}else{
						element.parent().next().find('.tipLay').append(error);
					}
				},
				success: function(label) {
					label.text(" ");
				}
			});

		},
		invite:function(object) 
		{
			var data = { operate: "invite"};
			$(object).submitForm({ beforeSubmit: $.proxy(inviteValid.form, inviteValid), data: data, success: inviteSingle.successCallBack, clearForm: false});
			return false;
		},
		successCallBack:function(json) {
			// 提交form后，回调函数
			if (json.status>0) {
				//成功
				$.anchorMsg("简历屏蔽成功", { onclose: function() {
					if($('#btnSendInvite')[0].trigger){
						$('#btnSendInvite')[0].trigger('close');
					} else {
						$('#btnSendInvite').closeDialog();
					}
				}});
			}else if (json.status == 0) {
				//未登陆
				$.anchorMsg("发送失败，请重试",{ icon: 'fail' });
			}else if (json.status < 0) {
				//失败
				$.message(json.msg, { title: "系统提示", icon: "fail" });
			}
		}
	};
	inviteSingle.initialize();

}
</script>
</body>
</html>
