
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
	<title>597人才网触屏版_实践经验</title>
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
		<a href="/person/resumes.html?act=practice" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_practice}-->编辑实践经验<!--{else}-->添加实践经验<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
	<form id="formPractice" name="formPractice" action="/api/web/person.api" method="post">
		<input type="hidden" name="act" value="practice_save" />
		<input type="hidden" id="practice_id" name="practice_id" value="{$_practice[practiceid]}">
		<div class="part form">
			<dl>
				<dt><font color="red">*</font>实践名称</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtPracticeName"></label><input type="text" class="text" id="txtPracticeName" name="txtPracticeName" value="{$_practice[PracticeName]}" placeholder="未填写" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>开始时间</dt>
				<input type="hidden" id="start_time" name="ymStartTime1955582" value="{$_practice[PracticeTimeStart]}">
				<dd>
				<div id="con_start_time"><p class="Ltab"></span></p></div>
				</dd>
			</dl>
			<dl class="tipsR quit">
				<dt><font color="red">*</font>结束时间</dt>
				<dd>
					<div id="con_end_time"><p class="Ltab"> <span class="LitemTab Lselect"></span></p></div>
					<input type="hidden" id="end_time" name="ymEndTime1955582" value="{$_practice[PracticeTimeEnd]}">
					<div class="modTip" id="modTip">
						 <input type="checkbox" id="chkPracticeNow" name="chkPracticeNow" onclick="checkNow(this)" value="1" <!--{if ($_practice[practiceid] && !$_practice[PracticeTimeEnd])}-->checked<!--{/if}-->>
						 <label for="chkPracticeNow" class="tit">至今</label>
					</div>
				</dd>
			</dl>
			<dl class="txtBox">
				<dt>详细介绍</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="practice_detail"></label><textarea id="taPracticeDetail" name="taPracticeDetail" class="textarea focus" placeholder="请描述具体工作内容，有什么收获？" autocomplete="off">{$_practice[PracticeDetail]}</textarea></div>
				</dd>
			</dl>
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_practice[practiceid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR" id="btnDel" <!--{if !$_practice[practiceid]}--> style="display:none;" <!--{/if}--> href="javascript:void(0);">删除</a></p></div>
   		</form>
	</section>
</div>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$.focusblur('input.text');
	$.focusblur('textarea.textarea');
	PracticeTimeStart='{$_practice[PracticeTimeStart]}';
	if(PracticeTimeStart){
		r_PracticeTimeStart=PracticeTimeStart;
	}else{
		r_PracticeTimeStart=null;
	}
	PracticeTimeEnd='{$_practice[PracticeTimeEnd]}';
	if(PracticeTimeEnd){
		r_PracticeTimeEnd=PracticeTimeEnd;
	}else{
		r_PracticeTimeEnd=null;
	}	
	
	$('#con_start_time').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:r_PracticeTimeStart,onChange:function(date){
		$('#start_time').val(date);
	}});
	if(('' == '') && ('0' !='0')){
		$('#con_end_time').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,isDisabled:true,selectDate:r_PracticeTimeEnd,onChange:function(date){
			$('#end_time').val(date);
		}});
		$('#chkPracticeNow').attr('checked','true');
		checkNow($('#chkPracticeNow'));
	}
	else{
		$('#con_end_time').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:r_PracticeTimeEnd,onChange:function(date){
			$('#end_time').val(date);
		}});
	}
	
	//至今
	$('#chkPracticeNow').click(function(){
		checkNow($(this));
	});
	
	//保存
	$('#btnSave1,#btnSave2').click(function(){
		var practice_name = $('#txtPracticeName').val();
		var practice_detail = $('#taPracticeDetail').val();
		var start_time = $('#start_time').val();
		var end_time = $('#end_time').val();

		if(practice_name.length<4 || practice_name.length>30){
			alert('实践名称限定4-30个字');
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

		if( (!$('#chkPracticeNow').is(':checked')) && (end_time.length==0 || end_time=='00-00')){
			alert('请选择结束时间或至今');
			return;
		}

		if( (!$('#chkPracticeNow').is(':checked')) && (end_time.indexOf('-00')>0)){
			alert('请选择正确格式的结束时间');
			return;
		}
		if(practice_detail.length>500){
			alert('实践经验不超过500个字');
			return;
		}

		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
		return false;
	});
	//删除
	$('#btnDel').click(function(){
		var practice_id = $('#practice_id').val();
		var data={act:'practice_del',practice_id:practice_id,token:''};
		$.post('/api/web/person.api',data,function(json){
			if(json.status==1){
				alert(json.msg);
				window.location.href = '/person/resumes.html?act=practice';
			}else{
				alert(json.error);
			}
		},'json');
	});
});
function success(json) {
	if(json.status>0){
		alert('保存成功！');
		window.location.href = '/person/resumes.html?act=practice';
	}else{
		alert('保存失败！');
	}
}
function checkNow(obj){
	var $this = $(obj);
	//var $li = $this.closest('li');
	if($this.attr("checked")==true||$this.attr("checked")=="checked"){
		//$this.removeAttr('checked');
		//$li.removeClass('check').find('.jpFntWes').html('&#xf10c;');
		$('#con_end_time').setDateDisabled(true);
		$('#end_time').val('');
	}else{
		//$this.attr('checked','checked');
		//$li.addClass('check').find('.jpFntWes').html('&#xf058;');
		$('#con_end_time').setDateDisabled(false);
	}
}
</script>
</body>
</html>
