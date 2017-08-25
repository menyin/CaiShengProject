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
	<title>597人才网触屏版_教育背景/培训经历</title>
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
	<style>
		#jybj,#pxjl {margin:0 5px 0 15px; position: relative; top:2px;}
	</style>
</head>
<body>
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html?act=edu" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_edu}-->修改教育背景<!--{else}-->添加教育背景/培训经历<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formEdu" name="formEdu" action="/api/web/person.api" method="post">
		<input type="hidden" name="act" id="act" value="edu_save">
		<input type="hidden" id="eduid" name="eduid" value="{$_edu[eduid]}">
		<input type="hidden" id="trainingid" name="trainingid" value="{$_training[trainingid]}">
		<input type="hidden" id="hidEduTypeID" name="hidEduTypeID" value="edu">
		<div class="part form" style="<!--{if $_edu[eduid] || $_training[trainingid]}-->display:none;<!--{/if}-->">
			<dl>
				<dt><font color="red">*</font>教育类型</dt>
				<dd><input type="radio" id="jybj" name="hidedu" onclick="chk();" value="edu" checked=""><label for="jybj">教育背景</label><input type="radio" id="pxjl"  name="hidedu" value="training" onclick="chk();"><label for="pxjl">培训经历</label></dd>
			</dl>
		</div>
		<div id="divEdu" class="part form" style="display: block;">
			<dl>
				<dt><font color="red">*</font>学校名称</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEduSchool"></label><input type="text" class="text" autocomplete="off" id="txtEduSchool" name="txtEduName" value="{$_edu[eduName]}" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>入学时间</dt>
				<input type="hidden" id="hddEntryTime" value="{$_edu[eduDateStart]}">
				<input type="hidden" id="ymStartTime1955582" name="ymStartTime1955582" value="{$_edu[eduDateStart]}">
				<dd id="entryTime"><p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl class="tipsR">
				<dt><font color="red">*</font>毕业时间</dt>
				<input type="hidden" id="hddLeavTime" value="{$_edu[eduDateEnd]}">
				<input type="hidden" id="ymEndTime1955582" name="ymEndTime1955582" value="{$_edu[eduDateEnd]}">
				<dd id="leavTime">
					<div class="modTip" id="modLst">
						<input type="checkbox" id="chkEduIsInSchool" onclick="checkNow(this)" name="chkEduIsInSchool" value="1" <!--{if ($_edu[eduid] && !$_edu[eduDateEnd])}-->checked<!--{/if}-->>
						<label for="chkEduIsInSchool" class="tit">目前在读</label>
					</div>
				<p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>获得学历</dt>
				<input type="hidden" id="hidEduDegree" name="selEduBackGround" value="{$_edu[eduBackGround]}">
				<dd id="ddEduDegree"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>专业名称</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEduMajorDesc"></label><input type="text" class="text" id="txtEduMajorDesc" name="txtEduSpecialty" value="{$_edu[eduSpecialty]}" placeholder="未填写" autocomplete="off"></div>
				</dd>
			</dl>
			<dl class="txtBox" id="dlDetail">
				<dt>专业课程</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="taEduDetail"></label><textarea id="taEduDetail" name="taEduDetail" class="textarea" placeholder="你学习了哪些专业课程？" autocomplete="off">{$_edu[eduDetail]}</textarea></div>
				</dd>
			</dl>
			<dl id="dlDuty"  style="display:none">
				<dt>担任职务</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEduDuty"></label><input type="text" class="text" id="txtEduDuty" name="txtEduDuty" value="{$_edu[eduDuty]}" placeholder="你在学校担任了哪些职务？"></div>
				</dd>
			</dl>
			<!-- <dl class="footBtn">
				<dt></dt>
				<dd><a href="javascript:void(0)" id="btnOpenUp"><b class="jpFntWes"></b>补充信息(非必填项)</a></dd>
			</dl> -->
		</div>
		<div id="divTrain" class="part form" style="display: none;">
			<dl>
				<dt><font color="red">*</font>机构名称</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtTrainInstitution"></label><input type="text" class="text" id="txtTrainInstitution" name="txtTrainingName" value="{$_training[trainingName]}" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>就读时间</dt>
				<input type="hidden" id="hddAttendStartTime" value="{$_training[trainingDateStart]}">
				<dd id="attendedStartTime"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl class="tipsR quit">
				<dt><font color="red">*</font>结束时间</dt>
				<input type="hidden" id="hddAttendEndTime" value="{$_training[trainingDateEnd]}">
				<dd id="attendedEndTime">
					<div class="modTip" id="modLst">
							<input type="checkbox" id="chkTrainIsInSchool" onclick="checkNow1(this)" name="chkTrainIsInSchool" value="1">
							<label for="chkTrainIsInSchool" class="tit">至今</label>
					</div>
				<p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>培训项目</dt>
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
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_edu[eduid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR" id="btnDel" <!--{if !$_edu[eduid]}--> style="display:none;" <!--{/if}--> href="javascript:void(0);">删除</a></p></div>
		</form>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	eduDateStart='{$_edu[eduDateStart]}';
	if(eduDateStart){
		r_eduDateStart=eduDateStart;
	}else{
		r_eduDateStart=null;
	}
	eduDateEnd='{$_edu[eduDateEnd]}';
	if(eduDateEnd){
		r_eduDateEnd=eduDateEnd;
	}else{
		r_eduDateEnd=null;
	}
	$('#entryTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:r_eduDateStart,onChange:function(date){
		$('#hddEntryTime').val(date);
	}});
	if(('' == '') && ('0' !='0')){
		$('#leavTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,isDisabled:true,selectDate:null,onChange:function(date){
			$('#hddLeavTime').val(date);
		}});
		$('#chkEduIsInSchool').attr('checked','true');
		//checkNow($('#chkEduIsInSchool'));
	}
	else{
		$('#leavTime').date({yearSection:'1960-2020',isCanNull:true,isHiddenDay:true,selectDate:r_eduDateEnd,onChange:function(date){
			$('#hddLeavTime').val(date);
		}});
	}
	
	$('#attendedStartTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:null,onChange:function(date){
		$('#hddAttendStartTime').val(date);
	}});
	if(('' == '') && ('0' !='0')){
		$('#attendedEndTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,isDisabled:true,onChange:function(date){
			$('#hddAttendEndTime').val(date);
		}});
		$('#chkTrainIsInSchool').attr('checked','true');
		//checkNow($('#chkTrainIsInSchool'));
	}
	else{
		$('#attendedEndTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:null,onChange:function(date){
			$('#hddAttendEndTime').val(date);
		}});
	}
	/*$('#ddEduType').dropdown({items:[{name:'教育经历',value:'edu'},{name:'培训经历',value:'train'}],selectValue:'edu',onSelect:function(v,n){
		if(v=='edu'){
			$('#divEdu').show();
			$('#hidEduTypeID').val('edu');
			$('#divTrain').hide();
			$('#act').val('edu_save');
		}else{
			$('#divEdu').hide();
			$('#hidEduTypeID').val('train');
			$('#divTrain').show();
			$('#act').val('training_save');
		}
	}});*/
	eduBackGround='{$_edu[eduBackGround]}';
	if(eduBackGround){
		r_eduBackGround=eduBackGround;
	}else{
		r_eduBackGround=null;
	}
	var degreeItems = [{value:'',name:''}];
			degreeItems.push({value:'10',name:'小学'});
			degreeItems.push({value:'20',name:'初中'});
			degreeItems.push({value:'30',name:'高中'});
			degreeItems.push({value:'40',name:'中技/中专'});
			degreeItems.push({value:'50',name:'专科'});
			degreeItems.push({value:'60',name:'本科'});
			degreeItems.push({value:'70',name:'硕士'});
			degreeItems.push({value:'80',name:'博士'});
			degreeItems.push({value:'90',name:'博士后'});
		$('#ddEduDegree').dropdown({items:degreeItems,selectValue:r_eduBackGround,onSelect:function(v,n){
		$('#hidEduDegree').val(v);
	}});
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
		var eduid = $('#eduid').val();
		$.post('/api/web/person.api',{act:'edu_del',eduid:eduid},function(json){
			if(json.status==1){
				alert(json.msg);
				window.location.href = '/person/resumes.html?act=edu';
			}else{
				alert(json.msg);
			}
		},'json');
	});

	$('#btnSave1,#btnSave2').click(function(){
		var edu_type = $('#hidEduTypeID').val();
		if(edu_type=='edu'){
			var start_time = $('#hddEntryTime').val();
			var end_time = $('#hddLeavTime').val();	
			var school = $('#txtEduSchool').val();
			var major = $('#txtEduMajorDesc').val();
			var duty = $('#txtEduDuty').val();
			var edu_detail = $('#taEduDetail').val();
			var eduDegree = $('#hidEduDegree').val();
			
			$('#ymStartTime1955582').val(start_time);
			$('#ymEndTime1955582').val(end_time);
			if(school==''){
				alert('请填写学校名称！')
				return;
			}
			if(school.length<4 || school.length>30){
				alert('公司名称限定4-30个字！');
				return;
			}
			if(start_time.length==0 || start_time=='00-00'){
				alert('请选择开始时间');
				return;
			}
			if(start_time.indexOf('-00')>0){
				alert('请选择正确格式的开始时间');
				return;
			}
			if( (!$('#chkEduIsInSchool').is(':checked')) && (end_time.length==0 || end_time=='00-00')){
				alert('请选择结束时间或至今');
				return;
			}
			if( (!$('#chkEduIsInSchool').is(':checked')) && (end_time.indexOf('-00')>0)){
				alert('请选择正确格式的结束时间');
				return;
			}
			if(eduDegree==''){
				alert('请选择获得学历！')
				return;
			}
			if(major==''){
				alert('请填写专业名称！')
				return;
			}
			if(edu_detail.length>256){
				alert('专业课程内容最大256个字');
				return;
			}
			if(duty.length>30){
				alert('职务不得超过30个字');
				return;
			}
		}else{
			var train_start_time = $('#hddAttendStartTime').val();
			var train_end_time = $('#hddAttendEndTime').val(); 
			var inst = $('#txtTrainInstitution').val();
			var course = $('#txtTrainCourse').val();
			var cert =$('#txtTrainCertificate').val();
			var train_detail = $('#taTrainDetail').val();
			$('#ymStartTime1955582').val(train_start_time);
			$('#ymEndTime1955582').val(train_end_time);
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
			if( (!$('#chkTrainIsInSchool').is(':checked')) && (train_end_time.length==0 || train_end_time=='00-00')){
				alert('请选择结束时间或至今！');
				return;
			}
			if( (!$('#chkTrainIsInSchool').is(':checked')) && (train_end_time.indexOf('-00')>0)){
				alert('请选择正确格式的结束时间！');
				return;
			}
			if(course==''){
				alert('请填写培训项目！');
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
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
	});
});

function checkNow(obj){
	var $this = $(obj);
	//var $li = $this.closest('li');
	if($this.attr("checked")==true||$this.attr("checked")=="checked"){
		//$this.removeAttr('checked');
		//$li.removeClass('check').find('.jpFntWes').html('&#xf10c;');
		$('#leavTime').setDateDisabled(true);
		$('#hddLeavTime').val('');
	}else{
		//$this.attr('checked','checked');
		//$li.addClass('check').find('.jpFntWes').html('&#xf058;');
		$('#leavTime').setDateDisabled(false);
	}
}

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
<script type="text/javascript">
function chk(){
	var v=$('input:radio[name="hidedu"]:checked').val();
	if(v=='edu'){
		$('#divEdu').show();
		$('#hidEduTypeID').val('edu');
		$('#divTrain').hide();
		$('#act').val('edu_save');
	}else{
		$('#divEdu').hide();
		$('#hidEduTypeID').val('train');
		$('#divTrain').show();
		$('#act').val('training_save');
	}
}
</script>

</div></body></html>