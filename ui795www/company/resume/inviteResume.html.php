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
.textarea{padding: 0; margin: 0;}
.formTextarea textarea.textarea{padding: 0;}
.invBox{width:500px;font-size:12px;}
.invBox .invFormHd{border-bottom:1px solid #dadada; padding-bottom:10px;}
.invBox .formMod{margin-bottom:10px;}
.invForm .formMod .l{width:70px; font-size:12px;}
.invForm .formMod .l i{font-size:14px;}
.invForm .formMod .r{width:415px;}
.invForm .formMod .r .formTextarea textarea.textarea{width:365px;height:50px;padding:0 0 0 5px;line-height:22px;font-size:12px;}
.invForm .invFormTxt{margin:0 0 0 120px;color:#999;}
.invForm .formText input.text{font-size:12px;}
.invForm .formText .gray{color:#999; font-size:12px;}
.invForm .formBtn{margin:20px 0 0 75px;}
.invForm .sms{margin:10px 0 0 80px;}
.invForm .sms .txt{color:#999; height:28px; line-height:20px;}
.invForm .sms .txt em{color:#3d84b8;}
.invForm .sms .smsBox{width:368px;}
.invForm .sms .smsBox .formTextarea textarea.textarea{width:365px; height:85px; font-size:12px; line-height:20px; text-align:left;}
.invForm .smsT{background:#f2f2f2; position:relative; z-index:1; height:30px; line-height:30px;border:1px solid #dbdbdb; border-bottom:0; width:365px; float:left; display:inline;}
.invForm .smsT .formRad input.radio{margin:9px 0 0 10px;margin:7px 0 0 10px\9;margin:8px 0 0 10px\11;*margin:3px 0 0 10px;}
.invForm .smsT .formRad label{margin-right:0;}
.invForm .smsT .tipTxt{ display:inline;}
.invForm .smsT b{background:url(http://cdn.597.com/img/c/invit.jpg) no-repeat; width:13px; height:7px; position:absolute; left:63px; top:-7px;}
.invForm .sms .smsC{width:367px; overflow:hidden; float:left; display:inline;}
.popTxt {
  padding: 15px 20px;
  width: 355px;
}
.drop .dropSeld{color:#333;}
</style>
<form id="formSingleInvite" method="post" action="/api/web/company.api">
<input type="hidden" name="act" value="sendInvite">
<input type="hidden" name="hddResumeID" value="{$resumeid}" />
<input type="hidden" name="hddInviteType" value="{$InviteType}" />
<input type="hidden" name="join_id" value="{$_join_id}" />
<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
<div class="dgBox invBox">
	<div class="invForm">
  


	<!--{if !$tpl}-->
		<div class="formMod invFormHd">
			<div class="r">
				<span class="tipTxt"><a href="/company/resume/invitetpl.html" id="invLst">添加面试邀请模板</a></span>
			</div>
			<div class="clear"></div>
		</div>
	<!--{else}-->      
		<div class="formMod invFormHd">
			<div class="l">选择模板<i>&nbsp;</i></div>
			<div class="r">
				<span id="templateDrop" class="drop zindex"></span>
				<span class="tipPos">
					<span class="tipLay">
			 		</span>
		   		</span>
				<!--<span class="tipTxt"><a href="javascript:void(0);" id="invLst">管理模板</a></span>-->
			</div>
			<div class="clear"></div>
		</div>
	<!--{/if}-->
        
		<div class="formMod">
			<div class="l">公司名称<i>*</i></div>
			<div class="r">
				<span class="formText">
					<input id="txtCompanyname" name="txtCompanyname" type="text" class="text" value="{$companyInfo['cname']}" style="width:355px;">
			   	</span>
			   	<span class="tipPos">
				   <span class="tipLay">
				   </span>
				</span>
				<span class="tipTxt" style="width:375px; color:#999; margin:0;">推荐使用简称，如“长安集团”</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">面试职位<i>*</i></div>
			<div class="r">
				<span id="jobList" class="drop zindex"></span>
			   	<span class="tipPos">
					<span class="tipLay">
						<!--{if $jobList=="''"}-->
						<span for="hddJobID" generated="true" class="tipLayErr tipw245" style="display: block;">无招聘中岗位,请先发布招聘中职位,<a href='/company/job/?status=2'>点击前往</a><span class="tipArr"></span></span>
						<!--{/if}-->
		 			</span>
		  		</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">面试时间<i>*</i></div>
			<div class="r">
				<span id="dateDrop" class="drop zindex"></span>
				<span class="tipTxt">&nbsp;</span>
				<span id="timeDrop" class="drop zindex"></span>
				<span id="spanCustomTime" class="formText" style="display:none;">
					<input disabled="disabled" id="txtCustomTime" name="txtCustomTime" type="text" class="text watermark" watermark="输入面试时间，如“明天”" style="width:162px;">
			   	</span>
			   	<span class="tipPos">
					<span class="tipLay">
		 			</span>
		  		</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">面试地点<i>*</i></div>
			<div class="r">
				<span class="formText">
					<input id="txtAddress" name="txtAddress" type="text" class="text" value="{$companyInfo['comAddress']}" style="width:355px;">
				</span>
				<span class="tipPos">
		  			<span class="tipLay">
			   		</span>
		  		</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">联系人<i>*</i></div>
			<div class="r">
				<span class="formText">
					<input id="txtLinkman" name="txtLinkman" type="text" class="text" value="{$companyInfo['comUser']}" style="width:173px;">
				</span>
				<span class="tipPos">
			   		<span class="tipLay">
		  			</span>
			  	</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">联系电话<i>*</i></div>
			<div class="r">
				<span class="formText">
					<input id="txtLinktel" name="txtLinktel" type="text" class="text" value="{$strPhone}" style="width:173px;">
				</span>
				<span class="tipPos">
			  		<span class="tipLay">
					</span>
				</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">备注<i>&nbsp;</i></div>
			<div class="r" style="position:relative">
				<span class="formTextarea">
					<textarea id="txtRemark" name="txtRemark" class="left textarea watermark" watermark="如需带什么资料等..." style="height:100px;"></textarea>
				</span>
				<span class="tipPos">
		   			<span class="tipLay">
			 		</span>
		   		</span>
			</div>
			<div class="clear"></div>
		</div>

		
		<div class="sms">
			<div class="txt">我们将用E-mail、微信通知求职者</div>
			<div class="txt"><input type="checkbox" name="messageNotice" id="messageNotice" value="1"><em>手机短信通知求职者</em>(需要购买短信服务，如果您未购买，<a href="/company/service/service.html?type=2">点击查看</a>)</div>
			<div class="smsBox" style="display:none;">
				<div class="smsT">
					<b></b>
					<span class="formRad">
						<input type="radio" value="1" name="smsType" id="radSimple" class="radio" checked="checked"><label for="radSimple">精简</label>
						<input type="radio" value="2" name="smsType" id="radComplete" class="radio"><label for="radComplete">完整</label>
					</span>
					<span class="tipTxt" style="display: inline;">（包含时间、地点、联系方式、备注等）</span>
				</div>
				<div class="smsC">
					<div class="smsCon">
						<span class="formTextarea">
							<textarea class="textarea" name="txtSmsContent" id="txtSmsContent" readonly="readonly"></textarea>
						</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			 <br />
		</div>

		
		<div id="inviteFormBtn" class="formBtn" style="margin-top: 0px;"><a href="javascript:void(0);" id="btnSendInvite" class="btn1 btnsF14">发送</a><a id="btnCancelInvite" href="javascript:void(0);" class="btn3 btnsF14">取消</a><span class="tipTxt" id="smsTips"></span></div>
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
var tempCompanyname = '';
var tempStation = '';
var tempDate = '';
var tempTime = '';
var tempCustomTime = '';
var tempAddress = '';
var tempLinkman = '';
var tempLinktel = '';
var tempRemark = '';
var inviteSingle={
	initialize:function(){
		//初始化控件		
		this._initControl();
	},
	_initControl:function(){
		$('.sms #messageNotice').click(function(){
			$('.smsBox').toggle();
		});
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
		

		//初始化模板下拉控件
		$('#templateDrop').droplist({selectValue:'0',noSelectClass:'',inputWidth:155,style:'width:163px;*width:167px;',hddName:'hddTemplate',items:{$tplList},onSelect:function(i,name) {
			inviteSingle.setTemplate(i);
		}});
		//初始化面试日期下拉控件
		$('#dateDrop').droplist({defaultTitle:'请选择',noSelectClass:'',inputWidth:155,style:'width:163px;*width:167px;',hddName:'hddDate',items:{$dateList},onSelect:function(i,name) {
			if(i == 99){
				$('#timeDrop').hide();
				$('#spanCustomTime').show();
				$('#txtCustomTime').removeAttr('disabled');
				$(':input[name="hddtime"]').attr('disabled', 'disabled');
				$('#txtCustomTime').val('');
			}else{
				$('#timeDrop').show();
				$('#spanCustomTime').hide();
				$('#txtCustomTime').attr('disabled', 'disabled');
				$(':input[name="hddtime"]').removeAttr('disabled');
				$('#timeDrop').setDropListValue('');
			}
		}});
		//初始化面试时间下拉控件
		$('#timeDrop').droplist({defaultTitle:'请选择',maxScroll:10,noSelectClass:'gray',inputWidth:80,style:'width:88px;*width:95px;',hddName:'hddtime',items:[{id:"8:00",name:"8:00"},{id:"8:30",name:"8:30"},{id:"9:00",name:"9:00"},{id:"9:30",name:"9:30"},{id:"10:00",name:"10:00"},{id:"10:30",name:"10:30"},{id:"11:00",name:"11:00"},{id:"11:30",name:"11:30"},{id:"12:00",name:"12:00"},{id:"12:30",name:"12:30"},{id:"13:00",name:"13:00"},{id:"13:30",name:"13:30"},{id:"14:00",name:"14:00"},{id:"14:30",name:"14:30"},{id:"15:00",name:"15:00"},{id:"15:30",name:"15:30"},{id:"16:00",name:"16:00"},{id:"16:30",name:"16:30"},{id:"17:00",name:"17:00"},{id:"17:30",name:"17:30"},{id:"18:00",name:"18:00"},{id:"18:30",name:"18:30"},{id:"19:00",name:"19:00"},{id:"19:30",name:"19:30"},{id:"20:00",name:"20:00"}],onSelect:function(i,name) {
		}});
		//初始化面试职位下拉控件
		$('#jobList').droplist({defaultTitle:'请选择',selectValue:'{$joinArr[jid]}',maxScroll:10,noSelectClass:'gray',inputWidth:155,style:'width:163px;*width:167px;',hddName:'hddJobID',items:{$jobList},onSelect:function(i,name) {

		}});
		$('#txtStation').autocomplete('/api/web/company.api?act=getJobList',
		{
 			max: 12,	//列表里的条目数
   			minChars: 0,	//自动完成激活之前填入的最小字符
	 		width: 182,	 //提示的宽度，溢出隐藏
	 		scrollHeight: 290,   //提示的高度，溢出显示滚动条
	 		matchContains: true,	//包含匹配，就是data参数里的数据，是否只要包含文本框里的数据就显示
	 		autoFill: false,	//自动填充
	 		dataType: 'json',
   			formatItem: function(row, i, max)
   			{
				return '<span class="autTempL"><b>'+row.jobname+'</b></span><span class="autTempR"></span>';
	 		},
	 		formatMatch: function(row, i, max)
	 		{
	 			return row.jobname;
	 		},
	 		formatResult: function(row)
	 		{
	 			return row.jobname;
	 		}
	 	}).result(function(event, row, formatted) {
	 		$('#formSingleInvite').find(':input[name="hddJobID"]').val(row.id);
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
			if($("#messageNotice").is(":checked")){
				var inputLehgth = value.length;
				if($(':input[name="smsType"]:checked').val() == 2){
					return inputLehgth <= 118 && inputLehgth >= 1;
				}else{
					return inputLehgth <= 60 && inputLehgth >= 1;
				}
			}else{
				return true;
			}
		}, '');
		inviteValid = $("#formSingleInvite").validate({
			//ignore:"#txtOtherReward",
			rules: {
				txtCompanyname:{required: true, rangelength:[1,30]},
				//txtStation: {required: true, rangelength:[1,10]},//validateJobStation: true//validateJobStationChinese: true
				hddJobID:{required: true },
				hddDate:{required: true },
				hddtime:{required: true },
				txtCustomTime:{required: true, rangelength:[1,20]},
				txtAddress:{required: true, minlength:1, maxlength: 100 },
				txtLinkman:{required: true, minlength:1, maxlength: 15 },
				txtLinktel:{ required: true, tel: true },
				txtRemark:{maxlength: 200 },
				txtSmsContent:{validateSmsContent: true }
			},
			messages: {
				txtCompanyname:{required: '请输入公司名称<span class="tipArr"></span>', rangelength:'请输入1-30个字<span class="tipArr"></span>'},
				//txtStation: { required: '请输入职位名称<span class="tipArr"></span>', rangelength:'请输入1-10个字<span class="tipArr"></span>'},
				hddJobID: { required: '选择面试职位(正在招聘的职位)<span class="tipArr"></span>'},
				hddDate: { required: '请设置面试时间<span class="tipArr"></span>'},
				hddtime: { required: '请设置面试时间<span class="tipArr"></span>'},
				txtCustomTime:{required: '请设置面试时间<span class="tipArr"></span>', rangelength:'请输入1-20个字<span class="tipArr"></span>'},
				txtAddress: { required: '请输入面试地点<span class="tipArr"></span>',minlength:'面试地点请输入1-100个字符<span class="tipArr"></span>',maxlength:'面试地点请输入1-100个字符<span class="tipArr"></span>' },
				txtLinkman: {required:'请输入联系人<span class="tipArr"></span>',minlength:'联系人请输入1-15个字符<span class="tipArr"></span>',maxlength:'联系人请输入1-15个字符<span class="tipArr"></span>'},
				txtLinktel: {required:'请输入联系电话<span class="tipArr"></span>',tel:'联系电话不正确<span class="tipArr"></span>'},
				txtRemark:{maxlength:'其他信息不能超过200个字<span class="tipArr"></span>'}
			},
			//focusInvalid:false,
			errorElement: 'span',
			errorClasses: {
				txtCompanyname:{required: 'tipLayErr tipw180', rangelength:'tipLayErr tipw180'},
				//txtStation: { required: 'tipLayErr tipw180', validateJobStation:'tipLayErr tipw180',validateJobStationChinese:'tipLayErr tipw180'},
				//txtStation: { required: 'tipLayErr tipw180', rangelength:'tipLayErr tipw180'},
				hddJobID: { required: 'tipLayErr tipw180'},
				hddDate: { required: 'tipLayErr tipw180'},
				hddtime: { required: 'tipLayErr tipw180'},
				txtCustomTime:{required: 'tipLayErr tipw180', rangelength:'tipLayErr tipw180'},
				txtAddress: { required: 'tipLayErr tipw180',minlength:'tipLayErr tipw180',maxlength:'tipLayErr tipw180'},
				txtLinkman: {required:'tipLayErr tipw180',minlength:'tipLayErr tipw180',maxlength:'tipLayErr tipw180'},
				txtLinktel: {required:'tipLayErr tipw180',tel:'tipLayErr tipw180'},
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
		$('#invLst').click(function() {
			$.showModal('/interview/manageTemplate/obj-inviteSingle-callback-resetTemplates'+'-v-'+Math.random(),{title:'邀请模板管理'});
		});
		// 短信预览
		//$('#previewSms').click(function() {
			//if($('#formSingleInvite').valid()){
				//$.showModal('/invite/getPreviewSms/?userName='+encodeURIComponent($('#theusername').html())+'&txtStation='+encodeURIComponent($('#txtStation').val())+'&hddDate='+encodeURIComponent($('#dateDrop').getDropListValue())+'&hddtime='+encodeURIComponent($('#timeDrop').getDropListValue())+'&v='+Math.random(),{title:'短信预览'});
			//}
		//});
		//切换短信模式
		$(':input[name="smsType"]').click(function(){
			if($(this).val() == 2){
							}
			inviteSingle.createSmsContent();
		});
		inviteSingle.createSmsContent();
		setTimeout(inviteSingle.checkContentChange,500);
	},
	checkContentChange: function(){
		if(tempCompanyname != $.trim($('#txtCompanyname').val()) || tempStation != $.trim($('#txtStation').val()) || tempDate != $('#dateDrop').getDropListValue() || tempTime != $('#timeDrop').getDropListValue() || tempCustomTime != $.trim($('#txtCustomTime').val()) || tempAddress != $.trim($('#txtAddress').val()) || tempLinkman != $.trim($('#txtLinkman').val()) || tempLinktel != $.trim($('#txtLinktel').val()) || tempRemark != $.trim($('#txtRemark').val()))
		{
			inviteSingle.createSmsContent();
		}
		setTimeout(inviteSingle.checkContentChange,500);
	},
	createSmsContent: function(){
		$('#smsTips').html('').removeClass('red');
		tempCompanyname = $.trim($('#txtCompanyname').val());
		//tempStation = $.trim($('#txtStation').val());
		tempStation = $('#jobList').find('.dropSeld').html();//职位名称
		var sms_station = '';
		if(tempStation != ''){
			sms_station = '【' + tempStation + '】';
		}
		tempDate = $('#dateDrop').getDropListValue();
		tempTime = $('#timeDrop').getDropListValue();
		tempCustomTime = $.trim($('#txtCustomTime').val());
		var sms_thetime = '';
		if(tempDate){
			if(tempDate == 99){
				if(tempCustomTime != ''){
					sms_thetime = tempCustomTime;
				}
			}else{
				var arrDate = tempDate.split('-');
				var sms_time = tempTime.replace(':','点').replace('00','');
				sms_thetime = parseInt(arrDate[1],10) + '月' + parseInt(arrDate[2],10) + '日' + sms_time;
			}
		}
		if(sms_thetime != ''){
			sms_thetime = ' 时间：' + sms_thetime;
		}
		tempAddress = $.trim($('#txtAddress').val());
		var sms_address = '';
		if(tempAddress != ''){
			sms_address = ' 地点：' + tempAddress;
		}
		tempLinkman = $.trim($('#txtLinkman').val());
		tempLinktel = $.trim($('#txtLinktel').val());
		var sms_Link = tempLinkman + tempLinktel;
		if(sms_Link != ''){
			sms_Link = ' 联系：' + sms_Link;
		}
		tempRemark = $.trim($('#txtRemark').val());
		var sms_remark = '';
		if(tempRemark != ''){
			sms_remark = ' 注：' + tempRemark;
		}
		var txtSmsContent = $('#txtSmsContent').val();
			//txtSmsContent = "'"+txtSmsContent+"'";
		if($("#messageNotice").is(":checked")){
			if(txtSmsContent.length > 70){
				$('#smsTips').html('发送面试邀请将扣2条短信').addClass('red');
			}
			if($(':input[name="smsType"]:checked').val() == 1){
				$('#txtSmsContent').html(tempCompanyname + '邀您面试' + sms_station + '详情请登录http://m.597.com');
				if(txtSmsContent.length > 60){
					$('#smsTips').html('（已超出' + (txtSmsContent.length - 60) + '个字，请精简上面公司名称的内容）').addClass('red');
				}
			}else if($(':input[name="smsType"]:checked').val() == 2){
				$('#txtSmsContent').html(tempCompanyname + '邀您面试' + sms_station + sms_thetime + sms_address + sms_Link + sms_remark);
				if(txtSmsContent.length > 70){
					$('#smsTips').html('提示：发送面试邀请将扣2条短信').addClass('red');
				}
				if(txtSmsContent.length > 118){
					$('#smsTips').html('（最多118,已超出' + (txtSmsContent.length - 118) + '个字，请精简上面短信的内容）').addClass('red');
				}
			}
		}
	},
	resetTemplates: function(type,template_id,template_name){
		switch(type)
		{
			case 'add':
				$('#templateDrop').addItem(template_id,template_name);
				$('#templateDrop').setDropListValue(template_id);
				break;
			case 'del':
				$('#templateDrop').delItem(template_id);
				$('#templateDrop').setDropListValue(0);
		  		break;
	  		case 'mod':
	  			$('#templateDrop').delItem(template_id);
	  			$('#templateDrop').addItem(template_id,template_name);
	  			$('#templateDrop').setDropListValue(template_id);
		  		break;
			default:
				break;
		}
	},
	setTemplate: function(templateId) {
		$.getJSON('/api/web/company.api?act=getInviteTpl&tplid=' + templateId + '', function(data) {
			if(data.status>0){
				$("#txtAddress").val("").val(data.address);
				$("#txtLinkman").val("").val(data.link_man);
				$("#txtLinktel").val("").val(data.link_tel);
				if (data.remark) {
					$("#txtRemark").val("").val(data.remark);
					$('#txtRemark').prev('label').hide();
				}else{
					$("#txtRemark").val("");
					$('#txtRemark').prev('label').show();
				}
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
		   		$.anchorMsg("面试邀请发送成功", { onclose: function() {
					if($('#btnSendInvite')[0].trigger){
						$('#btnSendInvite')[0].trigger('close');
					} else {
						$('#btnSendInvite').closeDialog();
					}
			 	}});
			}else{
				if (json.status==0){
					$.message(json.msg, { title: "系统提示", icon: "fail", width:360});
					return;
				}else{
					$.message(json.msg, { title: "系统提示", icon: "fail", width:360});
					return;
				}
			}
	}
};
inviteSingle.initialize();

}
</script>
</body>
</html>
