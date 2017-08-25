
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/img/75x75.png" >
	<title>597人才网触屏版_培训经历</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.jobsort.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.calling.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.date.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140403" />

</head>
<body>
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html?act=edu" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_training}-->编辑培训经历<!--{else}-->新增培训经历<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formEdu" name="formEdu" action="/api/web/person.api" method="post">
		<input type="hidden" name="act" value="training_save" />
		<input type="hidden" name="rid" value="{$rid}" />
		<input type="hidden" name="trainingid" id="trainingid" value="{$_training[trainingid]}" />
		<div id="divTrain" class="part form">
			<dl>
				<dt>机构名称</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtTrainInstitution"></label><input type="text" class="text" id="txtTrainInstitution" name="txtTrainingName" value="{$_training[trainingName]}" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl>
				<dt>就读时间</dt>
				<input type="hidden" id="hddAttendStartTime" name="ymStartTime1955582" value="{$_training[trainingDateStart]}">
				<dd id="attendedStartTime"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl class="tipsR quit">
				<dt>结束时间</dt>
				 <input type="hidden" id="hddAttendEndTime" name="ymEndTime1955582" value="{$_training[trainingDateEnd]}">
				<dd id="attendedEndTime">
					<div class="modTip" id="modLst">
							<input type="checkbox" id="chkTrainIsInSchool" onclick="checkNow1(this)" name="chkTrainIsInSchool" value="1" <!--{if ($_training[trainingid] && !$_training[trainingDateEnd])}-->checked<!--{/if}-->>
							<label for="chkTrainIsInSchool" class="tit">目前在读</label>
					</div>
				<p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt>培训项目</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtTrainCourse"></label><input type="text" class="text" id="txtTrainCourse" name="txtTrainingSpecialty" value="{$_training[trainingSpecialty]}"  placeholder="未填写"></div>
				</dd>
			</dl>
			<dl id="dlCert">
				<dt>获得证书</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtTrainCertificate"></label><input type="text" class="text" id="txtTrainCertificate" name="txtTrainingBackGround" value="{$_training[trainingBackGround]}"  placeholder="未填写"></div>
				</dd>
			</dl>
			<dl class="txtBox" id="dlTrainDetail">
				<dt>专业课程</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="taTrainDetail"></label><textarea id="taTrainDetail" name="taTrainDetail" class="textarea" placeholder="你学习了哪些专业课程？">{$_training[trainDetail]}</textarea></div>
				</dd>
			</dl>
			<!-- <dl class="footBtn">
						<dt></dt>
						<dd><a href="javascript:void(0)" id="btnOpenUp2"><b class="jpFntWes"></b>补充信息(非必填项)</a></dd>
					</dl> -->		
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_training[trainingid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR"  id="btnDel" href="javascript:void(0);" <!--{if !$_training[trainingid]}--> style="display:none;" <!--{/if}-->>删除</a></p></div>
		</form>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	s_date='{$_training[trainingDateStart]}';
	if(s_date){
		sdate=s_date;
	}else{
		sdate=null;
	}
	e_date='{$_training[trainingDateEnd]}';
	if(e_date){
		edate=e_date;
	}else{
		edate=null;
	}
	$('#attendedStartTime').date({yearSection:'1960-2014',isCanNull:true,isHiddenDay:true,selectDate:sdate,onChange:function(date){
		$('#hddAttendStartTime').val(date);
	}});
	if(('' == '') && ('0' !='0')){
		$('#attendedEndTime').date({yearSection:'1960-2014',isCanNull:true,isHiddenDay:true,isDisabled:true,onChange:function(date){
			$('#hddAttendEndTime').val(date);
		}});
		$('#chkTrainIsInSchool').attr('checked','true');
		//checkNow($('#chkTrainIsInSchool'));
	}
	else{
		$('#attendedEndTime').date({yearSection:'1960-2014',isCanNull:true,isHiddenDay:true,selectDate:edate,onChange:function(date){
			$('#hddAttendEndTime').val(date);
		}});
	}
	/*
   	$('#ddEduType').dropdown({items:[{name:'教育经历',value:'edu'},{name:'培训经历',value:'train'}],selectValue:'edu',onSelect:function(v,n){
		if(v=='edu'){
			$('#divEdu').show();
			$('#hidEduTypeID').val('edu');
			$('#divTrain').hide();
		}else{
			$('#divEdu').hide();
			$('#hidEduTypeID').val('train');
			$('#divTrain').show();
		}
	}});*/
	$.focusblur('input.text');
	$.focusblur('textarea.textarea');
	//收起展开
	$('#btnOpenUp').toggle(function(){
		$('#dlDuty,#dlDetail').show();
		$(this).html('<b class="jpFntWes">&#xf102;</b>收起');
	},function(){
		$('#dlDuty,#dlDetail').hide();
		$(this).html('<b class="jpFntWes">&#xf103;</b>补充信息(非必填项)');
	});
	$('#btnOpenUp2').toggle(function(){
		$('#dlCert,#dlTrainDetail').show();
		$(this).html('<b class="jpFntWes">&#xf102;</b>收起');
	},function(){
		$('#dlCert,#dlTrainDetail').hide();
		$(this).html('<b class="jpFntWes">&#xf103;</b>补充信息(非必填项)');
	});
	//删除
	$('#btnDel').click(function(){
		var trainingid = $('#trainingid').val();
		$.post('/api/web/person.api',{act:'training_del',trainingid:trainingid},function(data){
			if(data.status==1){
				alert(data.msg);
				window.location.href = '/person/resumes.html?act=edu';
			}else{
				alert(data.msg);
			}
		},'json');
	});
	$('#btnSave1,#btnSave2').click(function(){
		var train_start_time = $('#hddAttendStartTime').val();
		var train_end_time = $('#hddAttendEndTime').val(); 
		var inst = $('#txtTrainInstitution').val();
		var course = $('#txtTrainCourse').val();
		var cert =$('#txtTrainCertificate').val();
		var train_detail = $('#taTrainDetail').val();
		if(inst==''){
			alert('请填写培训机构！');
			return;
		}
		if(inst.length<4 || inst.length>30){
			alert('公司名称限定4-30个字！');
			return;
		}
		if(train_start_time.length==0 || train_start_time=='00-00'){
			alert('请选择开始时间！');
			return;
		}
		if(train_start_time.indexOf('-00')>0){
			alert('请选择正确格式的开始时间！');
			return;
		}
		if(train_end_time=='00-00'){
			$('#hddAttendEndTime').val(null);
		}		
		if( (!$('#chkTrainIsInSchool').is(':checked')) && (train_end_time.length==0 || train_end_time=='00-00')){
			alert('请选择结束时间或至今');
			return;
		}
		if( (!$('#chkTrainIsInSchool').is(':checked')) && (train_end_time.indexOf('-00')>0)){
			alert('请选择正确格式的结束时间');
			return;
		}
		if(course==''){
			alert('请填写培训课程');
			return;
		}
		if(cert.length>20){
			alert('证书不得超过20个字');
			return;
		}
		if(train_detail.length>1000){
			alert('专业课程内容最大1000个字');
			return;
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
	});
});

function checkNow1(obj){
	var $this = $(obj);
	//var $li = $this.closest('li');
	if($this.attr("checked")==true||$this.attr("checked")=="checked"){
		//$this.removeAttr('checked');
		//$li.removeClass('check').find('.jpFntWes').html('&#xf10c;');
		$('#attendedEndTime').setDateDisabled(true);
		$('#hddAttendEndTime').val('');
	}else{
		//$this.attr('checked','checked');
		//$li.addClass('check').find('.jpFntWes').html('&#xf058;');
		$('#attendedEndTime').setDateDisabled(false);
	}
}

function success(json){
	if(json.status>0){
		alert(json.msg);
		window.location.href = '/person/resumes.html?act=edu';
	}else{
		alert(json.msg);
	}
}
</script>
</div>
</body>
</html>
