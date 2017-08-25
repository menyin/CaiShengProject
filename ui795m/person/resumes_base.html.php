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
	<title>597人才网触屏版_基本资料</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.singlearea.js?v=20141221"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.date.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20151228" />
	<style>
		#msg {left:0; color:#ED1B24; left:-40px; padding:0 0 8px; position: relative;}
	</style>
</head>
<body>
<!--{if $app['isNewApp']!="yes"}-->
<!--{template header}-->
<!--{/if}-->
<div class="content" id="content">
	<!--{if $app['isNewApp']!="yes"}-->
	<header class="pubtop">
		<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b>基本资料</h1></b></div>
	</header>
	<!--{/if}-->
	<section class="layout">
	<form id="formBasic" name="formBasic"  method="post" action="/api/web/person.api">
	<input type="hidden" name="act" value="resume_save" />
	<input type="hidden" name="source" value="1" />
	<input type="hidden" name="resumeType" value="1">
	<input type="hidden" name="rid" value="{$uid}" />
		<div class="part form">
			<dl class="tipsR name">
				<dt><font color="red">*</font>姓名</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtUserName" name="txtUserName" value="{$resumeInfo[realname]}"   placeholder="2-6个汉字" onchange="checkuser();" maxlength="6" autocomplete="off" /></div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>性别</dt>
				<input type="hidden" id="radSex" name="radSex" value="{$resumeInfo[gender]}"/>
				<dd id="ddSex"></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>出生日期</dt>
				<input type="hidden" id="txtBirthday" name="txtBirthday" value="{$resumeInfo[birthday]}">
				<dd id="birthday"></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>现居住地</dt>
				<input type="hidden" id="hddCurArea" name="hidCurArea" value="{$resumeInfo[residenceid]}"/>
				<dd id="cur_area"></dd>
			</dl>
			<dl>
				<dt>详细地址</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtAddress"></label><input type="text" class="text" id="txtAddress" value="{$resumeInfo['address']}" name="txtAddress" placeholder="示例：xx省xx市xx县/区xx村/街道xx号" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>最高学历</dt>
				<input type="hidden" id="sltMaxEdu" name="hidMaxEdu" value="{$resumeInfo[maxEdu]}"/>
				<dd id="MaxEdu"></dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>工作经验</dt>
				<input type="hidden" id="workstate" name="radWorkState" value="{$resumeInfo[workstate]}"/>
				<dd id="ddCurState"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt id="dtWorkTime"><font color="red">*</font><!--{if $resumeInfo[workstate]==1}-->参加工作<!--{else}-->毕业时间<!--{/if}--></dt>
				<input type="hidden" id="hddStartWork" name="hddStartWork" value="{$resumeInfo[workYear]}">
				<dd id="startWork"><p class="Ltab"> <span class="LitemTab Lselect"><span class="LselectedSelect _datetitle" style="display: none;"></span></span></p></dd>
			</dl>
			 <dl>
				<dt><font color="red">*</font>求职状态</dt>
				<input type="hidden" id="hddjobstate" name="hidApplyStatus" value="{$resumeInfo[jobState]}">
				<dd id="ddjobstate"></dd>
			</dl>

			<dl id="accesstimecontainer" style="<!--{if $resumeInfo[jobState]==1 || $resumeInfo[jobState]==2 || $resumeInfo[jobState]==3}--><!--{else}-->display:none;<!--{/if}-->">
				<dt>到岗时间</dt>
				<input type="hidden" id="hddaccessiontime" name="hidAccessionTime" value="{$resumeInfo[joinTime]}">
				<dd id="ddaccessiontime"></dd>
			</dl>
			<dl id="idCard">
				<dt>身份证</dt>
				<dd>
					<div class="mod" ><label class="txtLabel" for="txtIDCardNumber"></label>
					<input type="hidden" id="IDCard_statu" value="">
					<input type="text" class="text" id="txtIDCardNumber" name="txtIDCardNumber" value="{$resumeInfo[cardno]}"  onchange="checkIDCardNumber()" placeholder="不公开，仅用于身份验证" maxlength="18" autocomplete="off"/></div><label class="txtLabel" for="txtIDCardNumber" style="display:none;">不公开，仅用于身份验证</label>
				</dd>
			</dl>
			<dl id="dlNativePlace">
				<dt>户籍地</dt>
				<input type="hidden" id="hddNativePlace" name="hidNativePlace" value="{$resumeInfo[nativeid]}"/>
				<dd id="native"></dd>
			</dl>
			<!-- <dl id="dlguoji">
						<dt>国籍</dt>
						<input type="hidden" id="hddnationality" name="hidNationality" value="{$resumeInfo[nationality]}"/>
						<dd id="ddnationality"></dd>
					</dl> -->
			<dl id="dlMarriage">
				<dt>婚育状况</dt>
				<input type="hidden" id="radMarriage" name="hidMarriage" value="{$resumeInfo[r_marriage]}"/>
				<dd id="ddMarriage"></dd>
				<!-- <input type="hidden" id="hddFertility" name="hidFertility" value="{$resumeInfo[fertility]}"/> -->
				<!-- <dd id="ddFertility" style="{if $resumeInfo[marriage]<>2}display:none;{/if}float:left;width:40%;">
				</dd> -->
			</dl>
			<dl id="dlPolitical">
				<dt>政治面貌</dt>
				<input type="hidden" id="hddPolitical" name="hidPolitical" value="{$resumeInfo[political]}"/>
				<dd id="ddPolitical"></dd>
			</dl>
			<dl id="dlStature">
				<dt>身高(cm)</dt>
				<dd>
					<div class="mod"><input type="tel" class="text" id="txtStature" name="txtStature" value="{$resumeInfo[stature]}" maxlength="3" autocomplete="off"/></div>
				</dd>
			</dl>
			<dl id="dlAvoirdupois">
				<dt>体重(kg)</dt>
				<dd>
					<div class="mod"><input type="tel" class="text" id="txtAvoirdupois" name="txtAvoirdupois" value="{$resumeInfo[avoirdupois]}" maxlength="3" autocomplete="off"/></div>
				</dd>
			</dl>
			<dl class="othMod phoneMod">
				<dt><font color="red">*</font>手机号码</dt>
				<dd>
					<input type="hidden" value="{$resumeInfo[mobile]}" id="hidMobilePhone" name="hidMobilePhone">
					<div class="mod"><input type="tel" id="txtMobilePhone" v="<!--{if $resumeInfo[mobile]}-->{$resumeInfo[mobile]}<!--{else}-->{$userInfo[mobile]}<!--{/if}-->" modvalue="" value="<!--{if $resumeInfo[mobile]}-->{$resumeInfo[mobile]}<!--{else}-->{$userInfo[mobile]}<!--{/if}-->" name="txtMobilePhone" class="text textGray" disabled="" autocomplete="off"></div>
					<div>
						<a href="javascript:void(0)" id="btnModMobile" class="btn3 btnsF14"><!--{if $resumeInfo['mobile'] || $userInfo[mobile]}-->更改<!--{else}-->添加<!--{/if}-->手机号码</a>
						<a href="javascript:void(0)" style="display:none" id="btnCancelModMobile" class="btn3 btnsF14">取消<!--{if $resumeInfo['mobile'] || $userInfo[mobile]}-->更改<!--{else}-->添加<!--{/if}--></a>
					</div>
				</dd>
				<div id="msg" ></div>
			</dl>
			<dl class="othMod phoneMod" id="divValiMobile" style="display:none">
				<dt>验证码</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="phone">手机验证码</label><input type="tel" class="text" id="txtValidateCode" name="txtValidateCode" autocomplete="off"></div>
					<a class="btn3 btnsF14" id="btnSendValidate" href="javascript:void(0)">免费发送验证码</a>
				</dd>
			</dl>
			<dl>
				<dt>邮箱</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEmail"></label><input type="text" class="text" id="txtEmail" value="{$resumeInfo['email']}" name="txtEmail" placeholder="未填写" autocomplete="off"></div>
				</dd>
			</dl>
			<dl>
				<dt>QQ号码</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtQQ"></label><input type="tel" class="text" id="txtQQ" value="{$resumeInfo['qq']}" name="txtQQ" placeholder="未填写" autocomplete="off"></div>
				</dd>
			</dl>
			<!-- <dl class="footBtn">
				<dt></dt>
				<dd><a id="btnOpenUp" href="javascript:void(0)"><b class="jpFntWes">&#xf103;</b>补充信息</a></dd>
			</dl> -->
			</div>
		<div class="btns"><a class="btn4 btnsF16" id="btnSave2" href="javascript:void(0)">保存</a></div>
		</form>
	</section>
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template footer}-->
	<!--{/if}-->
</div>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script type="text/javascript">
var $wHt = $(document).height();
$(document).ready(function(){
	$.focusblur('input.text');
	gender='{$resumeInfo[gender]}';
	if(gender){
		r_gender=gender;
	}else{
		r_gender=null;
	}
	maxEdu='{$resumeInfo[maxEdu]}';
	if(maxEdu){
		r_maxEdu=maxEdu;
	}else{
		r_maxEdu=null;
	}
	/*cardtype='{$resume[cardtype]}';
	if(cardtype){
		r_cardtype=cardtype;
	}else{
		r_cardtype=null;
	}
	englishLevel='{$resume[englishLevel]}';
	if(englishLevel){
		r_englishLevel=englishLevel;
	}else{
		r_englishLevel=null;
	}
	pcLevel='{$resume[pcLevel]}';
	if(pcLevel){
		r_pcLevel=pcLevel;
	}else{
		r_pcLevel=null;
	}
	jobState='{$resume[jobState]}';
	if(jobState){
		r_jobState=jobState;
	}else{
		r_jobState=null;
	}*/
	//性别
	$('#ddSex').dropdown({items:[{name:'请选择',value:'0'},{name:'男',value:'1'},{name:'女',value:'2'}],selectValue:r_gender,onSelect:function(v,n){
		$('#radSex').val(v);
	}});
	//证件类别
	/*$('#CardType').dropdown({items:[{name:'身份证',value:'0'},{name:'护照',value:'1'},{name:'军官证',value:'2'},{name:'学生证',value:'3'},{name:'其他',value:'4'}],selectValue:r_cardtype,onSelect:function(v,n){
		$('#sltIDCardType').val(v);
	}});*/
	//最高学历
	$('#MaxEdu').dropdown({items:[{name:'小学',value:'10'},{name:'初中',value:'20'},{name:'高中',value:'30'},{name:'中技/中专',value:'40'},{name:'专科',value:'50'},{name:'本科',value:'60'},{name:'硕士',value:'70'},{name:'博士',value:'80'},{name:'博士后',value:'90'}],selectValue:r_maxEdu,onSelect:function(v,n){
		$('#sltMaxEdu').val(v);
	}});
	//英语水平
	/*$('#EnglishLevel').dropdown({items:[{name:'不会',value:'0'},{name:'入门',value:'10'},{name:'一般',value:'20'},{name:'大学英语4级',value:'40'},{name:'大学英语8级',value:'50'},{name:'专业4级',value:'60'},{name:'专业8级',value:'70'}],selectValue:r_englishLevel,onSelect:function(v,n){
		$('#sltEnglishLevel').val(v);
	}});*/
	//电脑水平
	/*$('#PcLevel').dropdown({items:[{name:'不会',value:'0'},{name:'入门',value:'10'},{name:'一般',value:'20'},{name:'熟练',value:'30'},{name:'精通',value:'40'}],selectValue:r_pcLevel,onSelect:function(v,n){
		$('#sltPcLevel').val(v);
	}});*/
	//目前状态
	/*$('#ddsltJobState').dropdown({items:[{name:'我目前处于离职状态，正在找工作。',value:'1'},{name:'我目前在职，正考虑换个新环境。',value:'2'},{name:'我对现有工作还算满意，如有更好的工作机会，我也可以考虑。',value:'3'},{name:'我目前暂时没有跳槽打算。',value:'4'}],selectValue:r_jobState,onSelect:function(v,n){
		$('#sltJobState').val(v);
	}});*/
	//工作状态
	calcWorkState();
	//国籍
	nationality='{$resumeInfo[nationality]}';
	if(nationality){
		r_nationality=nationality;
	}else{
		r_nationality=null;
	}
	var nationalityItems = [{value:'',name:'请选择'}];
		nationalityItems.push({value:'1',name:'中国'});
		nationalityItems.push({value:'2',name:'美国'});
		nationalityItems.push({value:'3',name:'俄罗斯'});
		nationalityItems.push({value:'4',name:'英国'});
		nationalityItems.push({value:'5',name:'日本'});
		nationalityItems.push({value:'6',name:'新加坡'});
		nationalityItems.push({value:'7',name:'朝鲜'});
		nationalityItems.push({value:'8',name:'巴西'});
		nationalityItems.push({value:'9',name:'瑞士'});
		nationalityItems.push({value:'10',name:'缅甸'});
		nationalityItems.push({value:'11',name:'越南'});
		nationalityItems.push({value:'12',name:'泰国'});
		nationalityItems.push({value:'998',name:'其他外籍(非华人)'});
		nationalityItems.push({value:'999',name:'其他外籍(华人)'});
		$('#ddnationality').dropdown({items:nationalityItems,title:'请选择',selectValue:r_nationality,onSelect:function(v,n){
		$('#hddnationality').val(v);
	}});
	
	//婚姻状况
	marriage='{$resumeInfo[r_marriage]}';
	if(marriage){
		r_marriage=marriage;
	}else{
		r_marriage=null;
	}
	/*fertility='{$resumeInfo[fertility]}';
	if(fertility){
		r_fertility=fertility;
	}else{
		r_fertility=null;
	}*/
	
	/*var fertilityItems = [{value:'',name:''}];
			fertilityItems.push({value:1,name:'未育'});
			fertilityItems.push({value:2,name:'已育'});
		$('#ddFertility').dropdown({items:fertilityItems,title:'生育状况',selectValue:r_fertility,onSelect:function(v,n){
		$('#hddFertility').val(v);
	}});*/
	
	var marriageItems = [{value:'',name:''}];
			marriageItems.push({value:1,name:'未婚'});
			marriageItems.push({value:2,name:'已婚未育'});
			marriageItems.push({value:3,name:'已婚已育'});
	
	$('#ddMarriage').dropdown({items:marriageItems,title:'请选择',selectValue:r_marriage,onSelect:function(v,name){
		$('#radMarriage').val(v);
		/*if(v == '2'){
			$('#ddFertility').show();
		}else{
			$('#ddFertility').hide();
			$('#ddFertility').find('.LselectedSelect').html('生育状况');
			$('#ddFertility').find('select').val('');
			$('#hddFertility').val('');
		}*/
	}});
	political='{$resumeInfo[political]}';
	if(political){
		r_political=political;
	}else{
		r_political=null;
	}
	var politicalItems = [{value:'',name:''}];
			politicalItems.push({value:'1',name:'共产党员'});
			politicalItems.push({value:'2',name:'民主党派'});
			politicalItems.push({value:'5',name:'共青团员'});
			politicalItems.push({value:'3',name:'群众'});
			politicalItems.push({value:'4',name:'其他'});
		$('#ddPolitical').dropdown({items:politicalItems,selectValue:r_political,onSelect:function(v,name){
		$('#hddPolitical').val(v);
	}});
	
	residenceid='{$resumeInfo[residenceid]}';
	if(residenceid){
		r_residenceid=residenceid;
	}else{
		r_residenceid=null;
	}
	nativeid='{$resumeInfo[nativeid]}';
	if(nativeid){
		r_nativeid=nativeid;
	}else{
		r_nativeid=null;
	}
	$('#cur_area').area({showLevel:3,selectArea:r_residenceid,onSelect:function(id,name){
		$('#hddCurArea').val(id);
	}});
	$('#native').area({showLevel:3,selectArea:r_nativeid,onSelect:function(id,name){
		$('#hddNativePlace').val(id);
		/*$('#hddNativePlaceName').val(name);*/
	}});
	s_date='{$resumeInfo[birthday]}';
	if(s_date){
		sdate=s_date;
	}else{
		sdate=null;
	}
	$('#birthday').date({yearSection:'{$ageMinYear}-{$ageMaxYear}',isCanNull:false,isHiddenDay:false,selectDate:sdate,onChange:function(date){
		$('#txtBirthday').val(date);
	}});
	jobState='{$resumeInfo[jobState]}';
	if(jobState){
		r_jobState=jobState;
	}else{
		r_jobState=1;
	}
	//求职状态
	var jobstateitems = [{name:'',value:''},];
			jobstateitems.push({value:'1',name:'不在职，正在找工作'});
			jobstateitems.push({value:'2',name:'在职，打算近期换工作'});
			jobstateitems.push({value:'3',name:'在职，有更好的机会才考虑'});
			jobstateitems.push({value:'4',name:'不考虑换工作'});
		$('#ddjobstate').dropdown({items:jobstateitems,selectValue:r_jobState,onSelect:function(v,n){
		$('#hddjobstate').val(v);
		if(v == '4') {
			$('#accesstimecontainer').hide();
		}else {
			$('#accesstimecontainer').show();
		}
	}});

	if('1' == 4) {
		$('#accesstimecontainer').hide();
	}
	joinTime='{$resumeInfo[joinTime]}';
	if(joinTime){
		r_joinTime=joinTime;
	}else{
		r_joinTime=1;
	}
	//入职时间
	var accessiontimeitems = [{name:'',value:''}];
			accessiontimeitems.push({value:'1',name:'立即到岗'});
			accessiontimeitems.push({value:'2',name:'7天内到岗'});
			accessiontimeitems.push({value:'3',name:'15天内到岗'});
			accessiontimeitems.push({value:'4',name:'1月内到岗'});
			accessiontimeitems.push({value:'5',name:'2月内到岗'});
			accessiontimeitems.push({value:'6',name:'3月内到岗'});
			accessiontimeitems.push({value:'7',name:'半年内到岗'});
		$('#ddaccessiontime').dropdown({items:accessiontimeitems,selectValue:r_joinTime,onSelect:function(v,n){
		$('#hddaccessiontime').val(v);
	}});	
	//收起展开
	$('#btnOpenUp').toggle(function(){
		$('#idCard,#dlNativePlace,#dlMarriage,#dlPolitical,#dlStature,#dlAvoirdupois,#dlguoji').show();
		$(this).html('<b class="jpFntWes">&#xf102;</b>收起');
	},function(){
		$('#idCard,#dlNativePlace,#dlMarriage,#dlPolitical,#dlStature,#dlAvoirdupois,#dlguoji').hide();
		$(this).html('<b class="jpFntWes">&#xf103;</b>补充信息');
	});

	//目前状态
	$('#ddCurState').find('select').bind('change',function(){
		var $this = $(this);
		if($this.val()=='1'){
			$('#workstate').val(1);
			$('#dtWorkTime').html('参加工作');
		}else{
			$('#workstate').val(2);
			$('#dtWorkTime').html('毕业时间');
		}
	});
	workYear='{$resumeInfo[workYear]}';
	if(workYear){
		r_workYear=workYear;
	}else{
		r_workYear=null;
	}
	$('#startWork').date({yearSection:'1960-2020',isCanNull:false,isHiddenMon:false,isHiddenDay:true,selectDate:r_workYear,onChange:function(date){
		$('#hddStartWork').val(date);
	}});
	//手机
	$('#btnModMobile').click(function(){
		$('#txtMobilePhone').removeAttr('disabled').removeClass('textGray').val($('#txtMobilePhone').attr('modValue'));
		$('#hidMobilePhone').removeAttr('disabled').val($('#txtMobilePhone').attr('modValue'));
		
		$('#btnModMobile').hide();
		$('#btnCancelModMobile').show();
		
		$('#divValiMobile').show();
		$('#txtValidateCode').removeAttr('disabled');
	});
	$('#btnCancelModMobile').click(function(){
		$('#txtMobilePhone').attr('disabled','disabled').attr('modValue',$('#txtMobilePhone').val()).addClass('textGray').val($('#txtMobilePhone').attr('v'));
		$('#hidMobilePhone').attr('disabled','disabled').val($('#txtMobilePhone').attr('v'));
		
		$('#btnModMobile').show();
		$('#btnCancelModMobile').hide();
		
		$('#divValiMobile').hide();
		$('#txtValidateCode').attr('disabled','disabled');
	});
	//发送验证码
	$('#btnSendValidate').click(function(){
		sendMsg();
	});


	$('#btnSave1,#btnSave2').click(function(){
		var user_name = $('#txtUserName').val();
		var sex = $('#radSex').val();
		var txtBirthday=$('#txtBirthday').val();
		if(user_name==''||typeof(user_name) == 'undefined'){
			alert('请填写真实姓名！');
			return;
		}
		if(user_name!='') {
			reg = /^[\u4E00-\u9FA5]{2,6}$/;
			if(!reg.test(user_name)){
				alert('请输入2-6个汉字！');
				return;
			}
		}
		//身份证
		var txtIDCardNumber = $('#txtIDCardNumber').val();
		if (txtIDCardNumber!='') {
			if(txtIDCardNumber.length==15 || txtIDCardNumber.length==18){
				checkIDCardNumber();
				if($('#IDCard_statu').val()!=0){
					return;
				}
			}else{
				alert('身份证长度错误！');
				return;
			}
		}
		if(sex==''||typeof(sex)== 'undefined'){
			alert('请选择性别！');
			return;
		}
		if(txtBirthday==''||typeof(txtBirthday)== 'undefined'){
			alert('请选择出生日期！');
			return;
		}
		if($('#hddCurArea').val()==''){
			alert('请选择现居住地！');
			return;
		}
		if($('#hddStartWork').val()==''){
			alert('请选择参加工作或者毕业时间！');
			return;
		}
		if($('#workstate').val()==''){
			alert('请选择目前状态！');
			return;
		}
		/*if($('#hddjobstate').val()==''){
			alert('请选择求职状态！');
			return;
		}		
		if($('#hddaccessiontime').val()==''){
			alert('请选择到岗时间！');
			return;
		}*/
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
	});
});
function sendMsg(){
	$('#msg').html();
	var phone = $('#txtMobilePhone').val();
	if(phone==''){
		alert('请填写手机号码');
		return;
	}
	var pattern = /^[1]\d{10}$/;
	if(!pattern.exec(phone)){
		alert('手机号码格式不正确');
		return;
	}
	var msg = $('#msg').html();
	if(!msg){
		$.getJSON("/api/web/user.api", { act: 'mobileRepeat', _txtMobile: $("#txtMobilePhone").val()}, function(json) {
			if(json.status==-1){
				if(confirm('该号码已被其他账号占用，您可以从其他账号解绑并清除！')){
					$('#msg').html('该号码已被其他账号占用，继续操作可以从其他账号解绑并清除！');
					sendMsg();
				}
				return;
			}else if(json.status==2){
				alert('跟修改前号码一致，无需修改！');
				return;
			}else if(json.status==0){
				alert('手机格式错误！');
				return;
			}else if(json.status==1){
				//复制过来的
				$('#btnSendValidate').unbind('click');
				var data={mobilePhone:$('#txtMobilePhone').val()};
				$.getJSON("/api/web/user.api", { act: 'mobileCheck', _txtMobile: $("#txtMobilePhone").val(),type:1}, function(json) {
					if (json.status<0) {
						alert(json.msg);
						return false;
					}
					$('#btnSendValidate').addClass('btn3Unclick').html('<i>120</i>秒后再获取');
					alert("短信已经发出，请耐心等待！");
					$('#txtValidateCode').focus();
					interval = window.setInterval(countdown,1000);
				});
			}
		});
	}else{
		$('#btnSendValidate').unbind('click');
		var data={mobilePhone:$('#txtMobilePhone').val()};
		$.getJSON("/api/web/user.api", { act: 'mobileCheck', _txtMobile: $("#txtMobilePhone").val(),type:1}, function(json) {
			if (json.status<0) {
				alert(json.msg);
				return false;
			}
			$('#btnSendValidate').addClass('btn3Unclick').html('<i>120</i>秒后再获取');
			alert("短信已经发出，请耐心等待！");
			$('#txtValidateCode').focus();
			interval = window.setInterval(countdown,1000);
		});
	}
}
function countdown(){
	var seconds=$('#btnSendValidate').find('i').html();
	seconds = parseInt(seconds);
	if(seconds>0){
		seconds--;
		$('#btnSendValidate').find('i').html(seconds);
	}else{
		window.clearInterval(interval);
		$('#btnSendValidate').removeClass('btn3Unclick').html('免费获取验证码').bind("click",function(){
			sendMsg();
		});
	}
}

var isNewApp = "{$app['isNewApp']}";
var appType = "{$app['type']}";
//app跳转
function appJump(){
	window.android.appJump();//android
}
function success(json){
	if(json.status>0){
		if(isNewApp=="yes" && appType=="android"){
			appJump();
			return;
		}
		alert(json.msg);
		yx='{$resumeInfo[joinOffice]}';
		if(yx){
			window.location.href = '/person/resumes.html';
		}else{
			window.location.href = '/person/resumes.html?act=join2';
		}
	}else{
		alert(json.msg);
	}
}
function checkuser(){
	var user_name = $('#txtUserName').val();
	reg = /^[\u4E00-\u9FA5]{2,6}$/;
	if(!reg.test(user_name)){
		alert('请输入2-6个汉字！');
		return;
	}
}
function calcWorkState(){
	var startWorkYear = '2008-02-01';
	var workMonthNum = timeUtil.date_diff_month(startWorkYear);
	if(isNaN(workMonthNum)){
		return;
	}
	/*var select_value ='{$resumeInfo[workstate]}';
	var workY = Math.floor(workMonthNum/12);
	var workM = parseInt(workMonthNum%12);
	
	if(workY == 0 && workM>=-6 && workM<=6){
		select_value = 2;
		$('#dtWorkTime').html('<font color=\"red\">*</font>毕业时间');
	}
	else if(workY == 0 && workM>6)
	{
		select_value = 1;
		$('#dtWorkTime').html('<font color=\"red\">*</font>参加工作');
	}
	else if (workMonthNum<-6){
		select_value = 2;
		$('#dtWorkTime').html('<font color=\"red\">*</font>毕业时间');
	}
	else{
		select_value = 1;
		$('#dtWorkTime').html('<font color=\"red\">*</font>参加工作');
	}*/
	
	workstate='{$resumeInfo[workstate]}';
	if(workstate){
		r_workstate=workstate;
	}else{
		r_workstate=null;
	}
	$('#ddCurState').dropdown({items:[{name:'',value:''},{name:'有工作经验',value:'1'},{name:'在读/应届生',value:'2'}],selectValue:r_workstate}); 
}
//判断身份证号码
function checkIDCardNumber() {
	//TODO: idCardType元素
	var txtIDCardNumber = $('#txtIDCardNumber').val();
	if (txtIDCardNumber=='') {
		return true;
	}
	var ID_ICCID = txtIDCardNumber;
	ID_ICCID = ID_ICCID.toUpperCase();

	var Errors = new Array(
		"正确",
		"身份证号码位数不对!",
		"身份证号码出生日期超出范围或含有非法字符!",
		"身份证号码校验错误!",
		"身份证地区非法!"
	);
	var area = { 11: "北京", 12: "天津", 13: "河北", 14: "山西", 15: "内蒙古", 21: "辽宁", 22: "吉林", 23: "黑龙江", 31: "上海", 32: "江苏", 33: "浙江", 34: "安徽", 35: "福建", 36: "江西", 37: "山东", 41: "河南", 42: "湖北", 43: "湖南", 44: "广东", 45: "广西", 46: "海南", 50: "重庆", 51: "四川", 52: "贵州", 53: "云南", 54: "西藏", 61: "陕西", 62: "甘肃", 63: "青海", 64: "宁夏", 65: "新疆", 71: "台湾", 81: "香港", 82: "澳门", 91: "国外" }
	var ID_ICCID, Y, JYM;
	var S, M;
	var ID_ICCID_array = new Array();
	ID_ICCID_array = ID_ICCID.split("");
	//地区检验 
	if (area[parseInt(ID_ICCID.substr(0, 2))] == null)
	{
		alert(Errors[4]);
		$('#IDCard_statu').val(4);
		return false; 
	}
	//身份号码位数及格式检验
	switch (ID_ICCID.length) {
		case 15:
			if ((parseInt(ID_ICCID.substr(6, 2)) + 1900) % 4 == 0 || ((parseInt(ID_ICCID.substr(6, 2)) + 1900) % 100 == 0 && (parseInt(ID_ICCID.substr(6, 2)) + 1900) % 4 == 0)) {
				ereg = /^[1-9][0-9]{5}[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}$/; //测试出生日期的合法性 
			} else {
				ereg = /^[1-9][0-9]{5}[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}$/; //测试出生日期的合法性 
			}
			if (ereg.test(ID_ICCID)){
				//alert(Errors[0]);
				return true;
			}else{
				alert(Errors[2]);
				$('#IDCard_statu').val(2);
				return false;
			}
			break;
		case 18:
			//18位身份号码检测 
			//出生日期的合法性检查  
			//闰年月日:((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9])) 
			//平年月日:((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8])) 
			if (parseInt(ID_ICCID.substr(6, 4)) % 4 == 0 || (parseInt(ID_ICCID.substr(6, 4)) % 100 == 0 && parseInt(ID_ICCID.substr(6, 4)) % 4 == 0)) {
				ereg = /^[1-9][0-9]{5}19[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}[0-9Xx]$/; //闰年出生日期的合法性正则表达式 
			} else {
				ereg = /^[1-9][0-9]{5}19[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}[0-9Xx]$/; //平年出生日期的合法性正则表达式 
			}
			if (ereg.test(ID_ICCID)) {//测试出生日期的合法性 
				//计算校验位 
				S = (parseInt(ID_ICCID_array[0]) + parseInt(ID_ICCID_array[10])) * 7
					+ (parseInt(ID_ICCID_array[1]) + parseInt(ID_ICCID_array[11])) * 9
					+ (parseInt(ID_ICCID_array[2]) + parseInt(ID_ICCID_array[12])) * 10
					+ (parseInt(ID_ICCID_array[3]) + parseInt(ID_ICCID_array[13])) * 5
					+ (parseInt(ID_ICCID_array[4]) + parseInt(ID_ICCID_array[14])) * 8
					+ (parseInt(ID_ICCID_array[5]) + parseInt(ID_ICCID_array[15])) * 4
					+ (parseInt(ID_ICCID_array[6]) + parseInt(ID_ICCID_array[16])) * 2
					+ parseInt(ID_ICCID_array[7]) * 1
					+ parseInt(ID_ICCID_array[8]) * 6
					+ parseInt(ID_ICCID_array[9]) * 3;
				Y = S % 11;
				M = "F";
				JYM = "10X98765432";
				M = JYM.substr(Y, 1); //判断校验位 
				if (M == ID_ICCID_array[17]){
					//alert(Errors[0]);
					$('#IDCard_statu').val(0);
					return true;//检测ID的校验位 
				}else{
					alert(Errors[3]);
					$('#IDCard_statu').val(3);
					return false;
				}
			}
			else{
				alert(Errors[2]);
				$('#IDCard_statu').val(2);
				return false;
			}
			break;
		default:
			alert(Errors[1]);
			$('#IDCard_statu').val(1);
			return false;
			break;
	}
}
</script>
</body>
</html>
