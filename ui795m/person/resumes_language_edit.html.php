
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
	<title>597人才网触屏版_语言能力</title>
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
		<a href="/person/resumes.html?act=language" class="back jpFntWes"></a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_language}-->编辑语言能力<!--{else}-->添加语言能力<!--{/if}--></b></p></div>
	</header>
	<!--{/if}-->
	<section class="layout">
	<form id="formLanguage" method="post" action="/api/web/person.api?act=language_save">
		<input type="hidden" name="act" value="language_save">
		<input type="hidden" id="languageid" name="languageid" value="{$_language[languageid]}">

		<div class="part form">
			<dl>
				<dt>语种</dt>
				<input type="hidden" id="hidLanguageType" name="" value="{$_language[languageType]}">
				<dd id="ddLanguageType"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt>熟练程度</dt>
				<input type="hidden" id="hddSkillLevle" name="hidLangSkillLevel" value="{$_language[langSkillLevel]}">
				<dd id="ddSkillLevel">
				<p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl id="dlCert" class="cerMod">
                <dt>获得证书</dt>
                <dd>
                    <div class="mod"><input type="text" class="text" name="txtLangCert[]" value="{$_language[langcert][0]}" autocomplete="off"></div>
                </dd>
                <!--{if $_language[langcert][1]}-->
                <dd>
                    <div class="mod"><input type="text" class="text" name="txtLangCert[]" value="{$_language[langcert][1]}"></div><a href="javascript:void(0)" onclick="delCert(this)" class="btn3 btnsF14">移除</a>
                </dd>
                <!--{/if}-->
                <!--{if $_language[langcert][2]}-->
                <dd>
                    <div class="mod"><input type="text" class="text" name="txtLangCert[]" value="{$_language[langcert][2]}"></div><a href="javascript:void(0)" onclick="delCert(this)" class="btn3 btnsF14">移除</a>
                </dd>
                <!--{/if}-->
            </dl>
            <!--{if !$_language[langcert][2]}-->
            <dl class="footBtn">
                <dt></dt>
                <dd>
                    <a href="javascript:void(0)" id="btnAddCert" onclick="addCert(this)"><b class="jpFntWes"></b>添加一项等级证书</a>
                </dd>
            </dl>
            <!--{/if}-->
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if {$_language[languageid]}}-->btnL<!--{else}-->btn<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR" id="btnDel" style="display:<!--{if {$_language[languageid]}}-->block;<!--{else}-->none;<!--{/if}-->" href="javascript:void(0);">删除</a></p></div>
	</form>
	</section>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$.focusblur('input.text');
	languageType='{$_language[languageType]}';
	if(languageType){
		r_languageType=languageType;
	}else{
		r_languageType=null;
	}
	langSkillLevel='{$_language[langSkillLevel]}';
	if(langSkillLevel){
		r_langSkillLevel=langSkillLevel;
	}else{
		r_langSkillLevel=null;
	}
	var languageTypeItems = [{value:'',name:''}];
			languageTypeItems.push({value:'11',name:'普通话'});
			languageTypeItems.push({value:'01',name:'英语'});
			languageTypeItems.push({value:'02',name:'日语'});
			languageTypeItems.push({value:'03',name:'韩语'});
			languageTypeItems.push({value:'04',name:'德语'});
			languageTypeItems.push({value:'05',name:'法语'});
			languageTypeItems.push({value:'06',name:'俄语'});
			languageTypeItems.push({value:'07',name:'西班牙语'});
			languageTypeItems.push({value:'08',name:'葡萄牙语'});
			languageTypeItems.push({value:'09',name:'意大利语'});
			languageTypeItems.push({value:'10',name:'阿拉伯语'});
			languageTypeItems.push({value:'12',name:'其他语种'});
			languageTypeItems.push({value:'13',name:'粤语'});
	$('#ddLanguageType').dropdown({items:languageTypeItems,selectValue:r_languageType,onSelect:function(v,n){
		$('#hidLanguageType').val(v);
	}});

	var langSkillLevelItems = [{value:'',name:''}];
		langSkillLevelItems.push({value:'01',name:'入门'});
		langSkillLevelItems.push({value:'02',name:'熟练'});
		langSkillLevelItems.push({value:'03',name:'精通'});
	$('#ddSkillLevel').dropdown({items:langSkillLevelItems,selectValue:r_langSkillLevel,onSelect:function(v,n){
		$('#hddSkillLevle').val(v);
	}});
	//保存
	$('#btnSave1,#btnSave2').click(function(){
			var languageid = $('#languageid').val();
			var selLanguageType=$('#hidLanguageType').val();
			var selLangSkillLevel=$('#hddSkillLevle').val();
			//var selLangCert=$('#txtLangCert').val();

			/*var _selLanguageType='selLanguageType'+language_id;
			var _selLangSkillLevel='selLangSkillLevel'+language_id;
			var _selLangCert='selLangCert'+language_id;*/

			//所获得的证书
			var ls =document.getElementsByName('txtLangCert[]');
			var str='';
			for( i = 0; i < ls.length; i++) {
				if(ls[i].value){
					str+=ls[i].value+",";
				}				
			}
			var newCert=str.substring(0,str.length-1);

			if(selLanguageType==''||typeof(selLanguageType)=='undefined'){
				alert('请选择语言类型');
				return;
			}
			if(selLangSkillLevel==''||typeof(selLangSkillLevel)=='undefined'){
				alert('请选择掌握级别');
				return;
			}

			if (languageid){
				//修改
				var data={'act':'language_save','languageid':languageid, selLanguageType:selLanguageType, selLangSkillLevel:selLangSkillLevel, selLangCert:newCert};
			}else{
				//新增
				var data={'act':'language_save', selLanguageType:selLanguageType, selLangSkillLevel:selLangSkillLevel, selLangCert:newCert};
			}
			
			$.post('/api/web/m_person.api',data,function(json){
				if(json.success=='success'){
					alert("操作成功！");
					window.location.href='/person/resumes.html?act=language';
					return;
				}else{
					alert(error.msg);
				}
				return;
			},'json');
	});
	//删除
	$('#btnDel').click(function(){
		var languageid = $('#languageid').val();
		$.post('/api/web/m_person.api',{act:'del_Language',languageid:languageid},function(json){
			if(json.success=='success'){
				alert("删除成功！");
				window.location.href='/person/resumes.html?act=language';
				return;
			}else{
				alert(error.msg);
			}
		},'json');
	});
});
function addCert(v){
	var cert = $('#dlCert');
	var templateCert = '<dd>'+
	'<div class="mod"><input type="text" class="text" name="txtLangCert[]"/></div>'+
		'<a href="javascript:void(0)" onclick="delCert(this)" class="btn3 btnsF14">移除</a>'+
	'</dd>';
	cert.find('dd').last().after(templateCert);
	if(cert.find('dd').length>2){
		$('#btnAddCert').closest('dl').hide();
	}
}
function delCert(obj){
	var cert = $('#dlCert');
	$(obj).closest('dd').remove();
	if(cert.find('dd').length<=2){
		$('#btnAddCert').closest('dl').show();
	}
}
</script>
</div>
</body>
</html>
