
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!--    声明ie以最高的模式运行-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<style>
.reportBox{width:405px;font-size:14px;}
.reportBox .formMod .formRad{width:200px;}
.reportBox .formMod{float:left;}
.reportBox .formMod .formTextarea textarea.textarea{height:60px;}
.reportBox .formBtn{float:left;}
.reportBox .formBtn a{margin:0;}
.reportBox p.txt{line-height:30px;margin-bottom:5px; font-family:"微软雅黑";font-size:14px;}
.reportBox p.error{clear:both;height:20px;line-height:20px;color:#de0000;font-size:12px;margin-bottom:10px;}
textarea.focus{background:#f2fcfe;border:1px solid #9fcdd6;box-shadow:0 0 5px #9fcdd6;}
.formRad {float: left;display: inline;}
.formRad input.radio {float: left;display: inline;margin: 9px 0 0;margin: 7px 0 0 \9;cursor: pointer;}
.formRad label {
	float: left;display: inline;height: 30px;line-height: 30px;margin: 0 15px 0 3px;cursor: pointer;
}
.tipPos{position:absolute;top:0;left:auto;right:-20px;}
.weChatList{width:400px; overflow:hidden;text-align:left; padding-bottom:10px;}
.weChatList li{width:180px; float:left; color:#333; background:url(http://cdn1.597.com/img/c/weIcon.png) left center no-repeat; padding-left:20px; line-height:24px;}
</style>
</head>
<body>
<form id="formReport" action="/company/report.html" method="post">
<div class="dgBox reportBox">
	<input type="hidden" name="rid" id="rid" value="{$rid}"/>
	<input type="hidden" name="phone" id="phone" value="{$phone}"/>
	<input type="hidden" name="act" value="doreport">
	<div class="reportBoxForm">
    	<p class="txt">举报原因</p>
        <div id="divReportType" class="formMod" style="margin-bottom:0;">
            <span class="formRad"><input type="radio" style="height:auto;" class="radio" id="rp1" value="1" name="report_type" /><label for="rp1">空号</label></span>
			<span class="formRad"><input type="radio" class="radio" id="rp4" value="4" name="report_type" /><label for="rp4">停机</label></span>
            <span class="formRad"><input type="radio" class="radio" id="rp6" value="6" name="report_type" /><label for="rp6">不是本人</label></span>
            <span class="formRad"><input type="radio" class="radio" id="rp9" value="9" name="report_type" /><label for="rp9">广告简历</label></span>
        </div>
        <p class="txt">一经核实，我们会</p>
       <ul class="weChatList">
       				    <li>屏蔽该简历</li>
		    <li>站内信息通知您</li>
		</ul>




<!--         <p class="txt">需要补充举报说明</p>
        <div class="formMod clearfix" style="*display:inline-block;position:relative;">
            <span class="formTextarea">
             <textarea class="textarea textGray" name="rpDesc" style="width:390px;" id="rp7"></textarea>
            </span>
            <span class="tipPos">
             	<span class="tipLay"></span>
             </span>
        </div> -->
        <div class="formBtn"><a href="javascript:void(0)" id="btnReportSubmit" class="btnsF14 btn1">提交</a></div>
        <div class="clear"></div>
    </div>
</div>
</form>
<script type="text/javascript">

try {
	jpjs.use('jpjob.jobValidate, jpjob.jobForm, jpjob.jobDialog, jpjob.actions, widge.overlay.confirmBox', function($, form, jobDialog, actions, confirmBox){
		factory($.extend(form, jobDialog, actions), confirmBox);
	});
} catch (ex) {
	factory($);
}

function factory($, confirmBox){
	var report={
		init:function(){
			$.focusColor('input.text');
			var formReport = $('#formReport').validate({
				rules:{
					report_type:{required:true},
					rpDesc:{maxlength:256}
				},
				messages:{
					report_type:{required:'请选择举报类型'},
					rpDesc:{maxlength:'最长填写256个字<span class="tipArr"></span>'}
				},
				tips: {
					rpDesc:'最长填写256个字<span class="tipArr"></span>'
				},
				errorClasses:{
					rpDesc:{maxlength: 'tipLayErr tipw100'}
				},
				tipClasses:{
					rpDesc:'tipLayTxt tipw100'
				},
				errorElement:'p',
				errorPlacement: function(error, element)
				{
					if(element.attr('name')=='report_type'){
						error.insertAfter($('#divReportType'));
					}else{
						element.parent().nextAll().find('.tipLay').append(error);
					}
				},
				success: function(label)
				{
					$('#divReportType').next('p.error').remove();
					label.text(" ");
				}
			});
			$('#btnReportSubmit').click(function(){
				$(this).submitForm({beforeSubmit: $.proxy(formReport.form, formReport), success: report.successCallBack, clearForm: false });
				return false;
			});
		},
		successCallBack:function(json){
			var target = $('#btnReportSubmit');
			if(target[0].trigger){
				target[0].trigger('close');
			} else {
				target.closeDialog();
			}
			if (json && json.error){
				showModel('info', json.error);
				return;
			}
			showModel('success',json.msg);
		}
	}
	var pWidth = 70,
		fontWidth = 18;

	function showModel(icon, msg){
		confirmBox && confirmBox.timeBomb(msg, {
			name: icon,
			width: pWidth + msg.length * fontWidth
		});
	}

	report.init();
}
</script>
</body>
</html>
