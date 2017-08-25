
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
	<title>597人才网触屏版_项目经验</title>
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
		<a href="/person/resumes.html?act=project" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_project}-->编辑项目经验<!--{else}-->新增项目经验<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formEdu" name="formEdu" action="/api/web/person.api" method="post">
		<input type="hidden" name="act" value="project_save" />
		<input type="hidden" name="project_id" id="project_id" value="{$_project[projectid]}" />
		<div id="divTrain" class="part form">
			<dl>
				<dt><font color="red">*</font>项目名称</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtProjectName"></label><input type="text" class="text" id="txtProjectName" name="txtProjectName" value="{$_project[projectName]}" placeholder="未填写" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>开始时间</dt>
				<input type="hidden" id="hddAttendStartTime" name="projectStartTime" value="{$_project[projectStartTime]}">
				<dd id="attendedStartTime"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl class="tipsR quit">
				<dt><font color="red">*</font>结束时间</dt>
				 <input type="hidden" id="hddAttendEndTime" name="projectEndTime" value="{$_project[projectEndTime]}">
				<dd id="attendedEndTime">
					<div class="modTip" id="modLst">
							<input type="checkbox" id="chkTrainIsInSchool" onclick="checkNow1(this)" name="chkTrainIsInSchool" value="1" <!--{if ($_project[projectid] && !$_project[projectEndTime])}-->checked<!--{/if}-->>
							<label for="chkTrainIsInSchool" class="tit">至今</label>
					</div>
				<p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>担任职务</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtDuty"></label><input type="text" class="text" id="txtDuty" name="txtDuty" value="{$_project[projectDuty]}"  placeholder="未填写" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt>项目介绍</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="taProjectIntr"></label><input type="text" class="text" id="taProjectIntr" name="taProjectIntr" value="{$_project[projectIntr]}"  placeholder="请简短描述这是一个什么项目？" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt>项目经历</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="taProjectExperience"></label><textarea id="taProjectExperience" name="taProjectExperience" class="textarea" placeholder="你在项目中承担了哪些工作？创造了什么业绩？" autocomplete="off">{$_project[projectExperience]}</textarea></div>
				</dd>
			</dl>
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_project[projectid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR"  id="btnDel" href="javascript:void(0);" <!--{if !$_project[projectid]}--> style="display:none;" <!--{/if}-->>删除</a></p></div>
		</form>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	s_date='{$_project[projectStartTime]}';
	if(s_date){
		sdate=s_date;
	}else{
		sdate=null;
	}
	e_date='{$_project[projectEndTime]}';
	if(e_date){
		edate=e_date;
	}else{
		edate=null;
	}
	$('#attendedStartTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:sdate,onChange:function(date){
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
		$('#attendedEndTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:edate,onChange:function(date){
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
		var project_id = $('#project_id').val();
		$.post('/api/web/person.api',{act:'project_del',project_id:project_id},function(data){
			if(data.status==1){
				alert(data.msg);
				window.location.href = '/person/resumes.html?act=project';
			}else{
				alert(data.msg);
			}
		},'json');
	});
	$('#btnSave1,#btnSave2').click(function(){
		var start_time = $('#hddAttendStartTime').val();
		var end_time = $('#hddAttendEndTime').val(); 
		var projectName = $('#txtProjectName').val();
		var duty = $('#txtDuty').val();
		var projectIntr = $('#taProjectIntr').val();
		var projectExperience = $('#taProjectExperience').val(); 
		if(projectName==''){
			alert('请填写培训机构！');
			return;
		}
		if(projectName.length<4 || projectName.length>30){
			alert('项目名称限定4-30个字！');
			return;
		}
		if(start_time.length==0 || start_time=='00-00'){
			alert('请选择开始时间！');
			return;
		}
		if(start_time.indexOf('-00')>0){
			alert('请选择正确格式的开始时间！');
			return;
		}
		if(end_time=='00-00'){
			$('#hddAttendEndTime').val(null);
		}
		if( (!$('#chkTrainIsInSchool').is(':checked')) && (end_time.length==0 || end_time=='00-00')){
			alert('请选择结束时间或至今');
			return;
		}
		if( (!$('#chkTrainIsInSchool').is(':checked')) && (end_time.indexOf('-00')>0)){
			alert('请选择正确格式的结束时间');
			return;
		}		
		if(duty==''){
			alert('请填写担任的职务！');
			return;
		}
		/*if(projectIntr.length>50){
			alert('证书不得超过50个字');
			return;
		}
		if(projectExperience.length>200){
			alert('证书不得超过200个字');
			return;
		}*/
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
		window.location.href = '/person/resumes.html?act=project';
	}else{
		alert(json.msg);
	}
}
</script>
</div>
</body>
</html>
