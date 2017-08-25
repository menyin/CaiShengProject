
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
	<title>597人才网触屏版_添加技能</title>
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
	<script type="text/javascript" src="/templates/default/js/plupload.js"></script>
	<script type="text/javascript" src="/templates/default/js/plupload.flash.js"></script>
<style type="text/css">
#photo{width:100%;}
</style>
</head>
<body>
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_skill}-->编辑技能<!--{else}-->添加技能<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
	<form id="formSkill" action="/api/web/m_person.api" method="post">
		<input type="hidden" name="act" value="skill_save">
		<input type="hidden" id="skillid" name="skillid" value="{$_skill[skillid]}">
		<div class="part form">
			<dl>
				<dt>技能名称</dt>
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtSkillName"></label><input type="text" class="text" id="txtSkillName" name="txtSkillName" value="{$_skill[SkillName]}" placeholder="未填写" autocomplete="off">
				</div></dd>
			</dl>
			<dl>
				<dt>熟练程度</dt>
				<input type="hidden" id="hidSkillLevel" name="hidSkillLevel" value="{$_skill[SkillLevel]}">
				<dd id="ddSkillLevel">
				<p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if {$_skill[skillid]}}-->btnL<!--{else}-->btn<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR" id="btnDel" style="display:<!--{if {$_skill[skillid]}}-->block;<!--{else}-->none;<!--{/if}-->" href="javascript:void(0);">删除</a></p></div>
   		</form>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$.focusblur('input.text');
	SkillLevel='{$_skill[SkillLevel]}';
	if(SkillLevel){
		r_SkillLevel=SkillLevel;
	}else{
		r_SkillLevel=null;
	}
	var skillLevelItems = [{value:'',name:''}];
			skillLevelItems.push({value:'01',name:'入门'});
			skillLevelItems.push({value:'02',name:'熟练'});
			skillLevelItems.push({value:'03',name:'精通'});
		$('#ddSkillLevel').dropdown({items:skillLevelItems,selectValue:r_SkillLevel,onSelect:function(v,n){
	  	$('#hidSkillLevel').val(v);
	 }});
	//保存
	$('#btnSave1,#btnSave2').click(function(){
		var skill_name = $('#txtSkillName').val();
		var skill_level = $('#hidSkillLevel').val();
		if(skill_name.length<1 || skill_name.length>20){
			alert('技能名称限定1-20个字');
			return;
		}
		if(skill_level.length==0){
			alert('请选择熟练程度');
			return;
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
		return false;
	});
	//删除
	$('#btnDel').click(function(){
		var skillid = $('#skillid').val();
		var data={act:'del_skill',skillid:skillid};
		$.post('/api/web/m_person.api',data,function(json){
			if(json&&json.error){
				alert(json.error);
				return;
			}
			alert("删除成功！");
			window.location.href='/person/resumes.html?act=skill';
			return;
		},'json');
	});
});
function success(json){
	if(json&&json.error){
		alert(json.error);
		return;
	}
	alert("操作成功！");
	window.location.href='/person/resumes.html?act=skill';
}
</script>
</div>
</body>
</html>
