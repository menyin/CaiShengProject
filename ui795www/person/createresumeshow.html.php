<?exit?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>创建基本资料</title>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resume.css?v=20140930" />
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
<script type="text/javascript">
window.CONFIG = {
	HOST: 'http://cdn1.597.com/min/??',
	COMBOPATH: '/js/v2/'
}
</script>
<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>

<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
<script type="text/javascript">
	jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
</head>
<body class="noResize minMain">


<!--#include virtual="/templates/default/person/header.htm" -->
<div class="w1000">	
	<!--流程-->
	<div class="step-box clearfix">
		<ul class="step">
			<li class="first cur"><i class="hr"></i><span>填写基本资料</span></li>
			<li><i class="hr"></i><span>设置求职意向</span></li>
			<li class="last"><i class="hr"></i><span>完成</span></li>
		</ul>
		<h3 class="name">创建简历</h3>
	</div>	
	<!--主体-->	
	<form id="formBasicInfo" method="post" action="/api/web/person.api" >
	<input type="hidden" name="act" value="resume_save" />
	<input type="hidden" name="resumeType" value="{$resumeStatus}">
	<div class="found-main" style="position: relative;zoom: 1">
		<!--基本资料-->
		<p class="create-tit"><strong class="name">基本资料</strong></p>
		<div class="create-item step1">
			<div class="clearfix">
				<div class="head-img">
					<a href="javascript:;" target="_blank" ><img src="http://cdn.597.com/www/img/v2/resumeM/head-defects.jpg" />上传图片</a>
					<label for="hideImg" class="hide-img icon-chck" id="chkPhotoOpen" data-name="chkPhotoOpen" data-value="0"  name="chkPhotoOpen" <!--{if $resumeInfo[isShowPhoto]==0}-->data-status="true"<!--{/if}-->><em></em>简历中隐藏照片</label>
				</div>
				<div class="create-form">
					<dl class="clearfix">
						<dt>姓名<i class="red">*</i></dt>
						<dd class="formRows"><!--状态 warning error success-->						
							<!--<span class="def-text">您的姓名，2-6个汉字</span>-->
							<input type="text" class="c-text" id="txtUserName" name="txtUserName" value="{$resumeInfo[realname]}"  />
							<label id="hideName" class="hideName icon-chck" data-name="chkNameOpen" data-value="0" <!--{if $resumeInfo[isShowFullName]==0}-->data-status="true"<!--{/if}-->><em></em>不显示全名</label>
							<span data-for="txtUserName" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt>性别<i class="red">*</i></dt>
						<dd class="formRows">							
							<label for="sex1" class="icon-sex" data-name='radSex' data-value="1" <!--{if $resumeInfo[gender]==1}-->data-status="true"<!--{/if}-->><em class="icon-sex1"></em>男</label>
							<label for="sex2" class="icon-sex" data-name='radSex' data-value="2" <!--{if $resumeInfo[gender]==2}-->data-status="true"<!--{/if}-->><em class="icon-sex2"></em>女</label>
							<span data-for="radSex" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt>出生日期<i class="red">*</i></dt>
						<dd class="clearfix select-group-row birthday formRows" style="z-index:99">
					   	   <span class="formText dateText zIndex" style="z-index: 100;">
						   		<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpBirthYear" id="inpBirthYear" style="width:60px;" class="text" value="<!--{if $inpBirthYear}-->{$inpBirthYear}<!--{else}-->年<!--{/if}-->">				
							</span>
							<span class="msgTxt">年</span>
							<span class="formText dateText zIndex" style="z-index: 99;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpBirthMonth" id="inpBirthMonth" style="width:32px;" class="text" value="<!--{if $inpBirthMonth}-->{$inpBirthMonth}<!--{else}-->月<!--{/if}-->" >
							</span>
							<span class="msgTxt">月</span>
							<span class="formText dateText zIndex" style="z-index: 99;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpBirthDate" id="inpBirthDate" style="width:32px;" class="text" value="<!--{if $inpBirthDate}-->{$inpBirthDate}<!--{else}-->日<!--{/if}-->" >
							</span>
							<span class="msgTxt">日</span>
							<span data-for="birthYMD" class="prompt-msg msg"></span>
							<!--
							<span class="tipPos">
								<span class="tipLay">
								<span for="birthYMD" generated="true" class="error" style="display: block;"> </span></span>
							</span>
							--> 
						</dd>
					</dl>
					<dl class="clearfix">
						<dt>现居住地<i class="red">*</i></dt>
						<dd class="addressMod formRows" style="z-index:98;position: relative">
							<div id="curArea"></div>
							<span data-for="hidCurArea" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix" style="position:relative;z-index:9">
						<dt>详细地址<i class="red">&nbsp;</i></dt>
						<dd class="idcard formRows">
							<input type="text" name="txtAddress" id="txtAddress" class="c-text" value="{$resumeInfo[address]}" style="width:309px; color: #444;" placeholder="示例：xx省xx市xx县/区xx村/街道xx号"/>
							<span data-for="txtAddress" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt>工作经验<i class="red">*</i></dt>
						<dd class="formRows">
							<label for="exp1" class="icon-rad" data-name="radWorkState" data-value='1' data-status="false"><em></em>已参加工作</label>
							<label for="exp2" class="icon-rad" data-name="radWorkState" data-value='2' data-status="true"><em></em>目前在读/应届生</label>
							<span data-for="radWorkState" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><span id="labelWorkState">参加工作时间</span><i class="red">*</i></dt>
						<dd class="birthday select-group-row formRows" style="z-index:97;position: relative">
							<span class="formText dateText zIndex" style="z-index: 100;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpStartYear" id="inpStartYear" style="width:60px;" class="text" value="<!--{if $inpStartYear}-->{$inpStartYear}<!--{else}-->年份<!--{/if}-->" >								
							</span>
							<span class="msgTxt">年</span>
							<span class="formText dateText zIndex" style="z-index: 99;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpStartMonth" id="inpStartMonth" style="width:32px;" class="text" value="<!--{if $inpStartMonth}-->{$inpStartMonth}<!--{else}-->月<!--{/if}-->">
							</span>
							<span class="msgTxt">月</span>
							<div id="startYMD"></div>
							<span data-for="startYMD" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix" style="position:relative;z-index:8">
						<dt><span id="labelWorkState">求职状态</span><i class="red">*</i></dt>
						<dd class="birthday select-group-row formRows">
							<div id="dropApplyStatus" class="dropv2" style="width:220px;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<p data-for="hidApplyStatus" class="prompt-msg msg"></p>
						</dd>
					</dl>

					<dl class="clearfix" style="position:relative;z-index:8">
						<dt><span id="labelWorkState">到岗时间</span><i class="red">*</i></dt>
						<dd class="birthday select-group-row formRows">
							<div id="dropAccessionTime" class="dropv2" style="width:110px;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<p data-for="hidAccessionTime" class="prompt-msg msg"></p>
						</dd>
					</dl>

					<p align="center" class="moreInfor"><em class="hr"></em><span id="moreInforBtn">更多补充信息<i class="down jpFntWes">&#xf0dd;</i><i class="up jpFntWes" style="display:none">&#xf0de;</i></span></p>
				</div>
			</div>
		</div>
		<div id="step1-more" class="create-item step1-more">
			<!--
			<dl class="clearfix">
				<dt>国籍</dt>
				<dd class="clearfix">
				
					<div id="dropNationality" class="dropv2" style="width:110px;">
						<b class="jpFntWes dropIco">&#xf0d7;</b>
						<label>请选择</label>
						<ul></ul>
					</div>

					<span class="zIndex drop" id="dropPolitical" style="z-index: 5;">
						<span><b class="jpFntWes dropIco"></b><span class="dropSeld gray" style="width: 100px;">请选择</span><div class="dropLst"><div class="dropLstCon" style="width:108px"><ul><li v="" class="cu"></li><li v="01">共产党员</li><li v="02">民主党派</li><li v="03">群众</li><li v="04">其他</li></ul></div></div></span><input type="hidden" id="hidPolitical" name="hidPolitical" value="">
					</span>
					
				</dd>
			</dl>
			-->	
			<dl class="clearfix">
				<dt>身份证号码</dt>
				<dd class="idcard formRows">
					<input type="text" name="txtIDCardNumber" class="c-text" value="{$resumeInfo[cardno]}"/>
					<span data-for="txtIDCardNumber" class="prompt-msg msg"></span>
					<span style="color:#ccc;font-size:12px; margin-left:10px;">身份证号可不填写，填写有利于提高面试机率</span>
				</dd>
			</dl>
			<dl class="clearfix">
				<dt>户口所在地</dt>
				<dd class="addressMod clearfix" style="z-index:7">
					<span id="nativePlace"></span>
				</dd>
			</dl>
			<dl class="clearfix">
				<dt>婚姻状况</dt>
				<dd class="clearfix">
					
					<div id="dropMarriage" class="dropv2" style="width:110px;">
					
						<b class="jpFntWes dropIco">&#xf0d7;</b>
						<label>请选择</label>
						<ul></ul>
					
					</div>
					
					<div id="dropFertility" class="dropv2 mgl10" style="width:110px;">
					
						<b class="jpFntWes dropIco">&#xf0d7;</b>
						<label>请选择</label>
						<ul></ul>
					
					</div>
					
				</dd>
			</dl>			
			<dl class="clearfix">
				<dt>政治面貌</dt>
				<dd class="clearfix">
				
					<div id="dropPolitical" class="dropv2" style="width:110px;">
						<b class="jpFntWes dropIco">&#xf0d7;</b>
						<label>请选择</label>
						<ul></ul>
					</div>
					<!--
					<span class="zIndex drop" id="dropPolitical" style="z-index: 5;">
						<span><b class="jpFntWes dropIco"></b><span class="dropSeld gray" style="width: 100px;">请选择</span><div class="dropLst"><div class="dropLstCon" style="width:108px"><ul><li v="" class="cu"></li><li v="01">共产党员</li><li v="02">民主党派</li><li v="03">群众</li><li v="04">其他</li></ul></div></div></span><input type="hidden" id="hidPolitical" name="hidPolitical" value="">
					</span>
					-->
					
				</dd>
			</dl>
			<dl class="clearfix">
				<dt>身高/体重</dt>
				<dd class="formRows height">
					<input type="text" id="txtStature" name="txtStature" value="{$resumeInfo[stature]}" class="c-text" />厘米 &nbsp;
					<input type="text" id="txtAvoirdupois" name="txtAvoirdupois" value="{$resumeInfo[avoirdupois]}" class="c-text box-item" />公斤
					<span class="prompt-msg msg" data-for="txtSheight"></span>
					<!--<p class="error-msg"><i></i>请填写真实姓名</p>-->
				</dd>
			</dl>
		</div>
		<!--更多补充信息-->
		<!--/-->
		
		<!--联系方式-->
		<p class="create-tit" style="position:inherit;"><strong class="name">联系方式</strong> </p>
		<div class="create-item step2" style="zoom:1">
			<dl class="clearfix">
				<dt>手机号码<i class="red">*</i></dt>
				<dd class="formRows validRows">
					 <i id="phone-status" class="<!--{if $userInfo[mobile]}-->upd-num<!--{else}-->upd-num1<!--{/if}-->" style="display:none"></i><!--灰色:upd-num1;绿色:upd-num-->
					 <input type="text" class="c-text" id="txtMobilePhone" name="txtMobilePhone" value="{$userInfo[mobile]}" v="{$userInfo[mobile]}" /><span data-for="txtMobilePhone" class="prompt-msg msg" disabled="disabled"></span><span id="spnConModMobile" >
					 	<!--
						<a id="btnBindMobile" href="javascript:void(0)" class="upd-link isDisabled" style="display:none">立即绑定</a>
						-->
					 </span>
					 <span style="color:#ccc;font-size:12px; margin-left:10px;">修改手机号请完整填写简历后，进入简历修改页面操作</span>
				</dd>
			</dl>
			<dl id="divValiMobile" class="clearfix" style="display:none">
				<dt>验证码<i class="red">*</i></dt>
				<dd class="formRows validRows">
					<input id="txtValidateCode" type="text" class="c-text" value="" id="txtValidateCode" name="txtValidateCode" style="width:70px"/>
					<a id="btnSendValidate" href="javascript:" class="yzm-btn">免费发送验证码</a>
					<span data-for="txtValidateCode" class="prompt-msg msg"></span>
				</dd>
			</dl>
			<!--
			<dl class="clearfix">
				<dt>其它号码<i class="red">&nbsp;</i></dt>
				<dd class="formRows validRows">
					<input type="text" class="c-text" id="telephone" name="telephone" value="{$resumeInfo[telephone]}"  />
				</dd>
			</dl>
			-->
			<dl class="clearfix">
				<dt>电子邮箱<i class="red">&nbsp;</i></dt>
				<dd class="formRows validRows" style="position: relative">
					<i id="email-status" class="upd-email1"></i><!--灰色:upd-email1;绿色:upd-email-->
					<input type="text" class="c-text" value="{$userInfo[email]}" v="{$userInfo[email]}" id="txtEmail" name="txtEmail"  <!--{if $userInfo[email]}-->disabled="disabled"<!--{/if}-->/>
					<!--{if !$userInfo[email]}-->
					<a id="btnEmail" href="javascript:" class="upd-link isDisabled"></a>
					<!--{/if}-->
					<span data-for="txtEmail" class="prompt-msg msg"></span>
					<p id="emailInfoMsg" class="msg infoMsg" style="display:none">保存后，该邮箱将成为新的登录账号</p>
					<span style="color:#ccc;font-size:12px; margin-left:10px;">修改邮箱请完整填写简历后，进入简历修改页面操作</span>
				</dd>
			</dl>
			<dl class="clearfix">
				<dt>QQ</dt>
				<dd class="formRows validRows">
					<input type="text" id="txtQQ" name="txtQQ" value="{$userInfo[qq]}" class="c-text" />
					<span data-for="txtQQ" class="prompt-msg msg"></span>
				</dd>
			</dl>
			<!--
			<dl class="clearfix">
				<dt>微信号</dt>
				<dd class="formRows validRows">
					<input type="text" id="txtweixinNo" name="txtweixinNo" value="{$resumeInfo[weixinNo]}" class="c-text" />
					<span data-for="txtweixinNo" class="prompt-msg msg"></span>
				</dd>
			</dl>
			-->
			<dl class="clearfix sub-item">
				<dt>&nbsp;</dt>
				<dd>
					<button id="btnSubmit" type="button" class="sub-btn">保存到下一步</button>
				</dd>
			</dl>
		</div>
		<!--/-->
	</div>
	</form>
	<!--/主体 end-->
	<!--{template person/footer}-->
</div>
<script type="text/javascript">
var marriageItems = [{value:'',label:'请选择'}];
var fertilityItems = [{value:'',label:'请选择'}];
var married = '2';
	fertilityItems.push({value:'1',label:'未育'});
	fertilityItems.push({value:'2',label:'已育'});
	marriageItems.push({value:'1',label:'未婚'});
	marriageItems.push({value:'2',label:'已婚'});
var politicalItems = [{value:'',label:'请选择'}];
	politicalItems.push({value:'1',label:'共产党员'});
	politicalItems.push({value:'2',label:'民主党派'});
	politicalItems.push({value:'5',label:'共青团员'});
	politicalItems.push({value:'3',label:'群众'});
	politicalItems.push({value:'4',label:'其他'});
var nationalityItems = [{value:'',label:'请选择'}];
	nationalityItems.push({value:'1',label:'中国'});
	nationalityItems.push({value:'2',label:'美国'});
	nationalityItems.push({value:'3',label:'俄罗斯'});
	nationalityItems.push({value:'4',label:'英国'});
	nationalityItems.push({value:'5',label:'日本'});
	nationalityItems.push({value:'6',label:'新加坡'});
	nationalityItems.push({value:'7',label:'朝鲜'});
	nationalityItems.push({value:'8',label:'巴西'});
	nationalityItems.push({value:'9',label:'瑞士'});
	nationalityItems.push({value:'10',label:'缅甸'});
	nationalityItems.push({value:'11',label:'越南'});
	nationalityItems.push({value:'12',label:'泰国'});
	nationalityItems.push({value:'998',label:'其他外籍(非华人)'});
	nationalityItems.push({value:'999',label:'其他外籍(华人)'});				
/*求职状态*/
var notconsider = "4";
var applyStatusItems = [{value:'', label:'请选择'}];
	applyStatusItems.push({value:"1", label:"不在职，正在找工作"});
	applyStatusItems.push({value:"2", label:"在职，打算近期换工作"});
	applyStatusItems.push({value:"3", label:"在职，有更好的机会才考虑"});
	applyStatusItems.push({value:"4", label:"不考虑换工作"});

/*到岗时间*/
var accessionTimeItems = [{value:'', label:'请选择'}];
	accessionTimeItems.push({value:"1", label:"立即到岗"});
	accessionTimeItems.push({value:"2", label:"7天内到岗"});
	accessionTimeItems.push({value:"3", label:"15天内到岗"});
	accessionTimeItems.push({value:"4", label:"1月内到岗"});
	accessionTimeItems.push({value:"5", label:"2月内到岗"});
	accessionTimeItems.push({value:"6", label:"3月内到岗"});
	accessionTimeItems.push({value:"7", label:"半年内到岗"});
jpjs.use('@validator, @checkBoxer, @select, @dateFormat, @confirmBox, @jobDater, @areaSimple, @form, @jobDialog', 
function(m){
	
	var $ = m['jpjob.areaSimple'].extend(m['jpjob.jobForm'], m['jpjob.jobDialog']),
		jobDater = m['jpjob.jobDater']
		checkBoxer = m['widge.checkBoxer'],
		select = m['widge.select'],
		confirmBox = m['widge.overlay.confirmBox'],
		DateFormat = m['tools.dateFormat'],
		verifier = m['module.verifier'],
		validator = m['widge.validator.form'];
		
	var chkPhotoOpenBoxer = new checkBoxer({
			element: $('.icon-chck'),
			className: 'icon-chck-checked',
			hoverClassName: null,
			disabledClassName: null,
			disabledSelClassName: null
		}),
		sexNameBoxer = new checkBoxer({
			element: $('.icon-sex'),
			className: 'icon-sex-checked',
			multiple: false,
			hoverClassName: null,
			disabledClassName: null,
			disabledSelClassName: null
		}),
		workBoxer = new checkBoxer({
			element: $('.icon-rad'),
			className: 'icon-rad-checked',
			multiple: false,
			hoverClassName: null,
			disabledClassName: null,
			disabledSelClassName: null
		}),
		dropMarriage = new select({
			trigger: $('#dropMarriage'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidMarriage',
			dataSource: marriageItems,
			selectedValue: '{$resumeInfo[marriage]}',
			selectCallback: {
				isDefault: true
			}
		}),
		dropFertility = new select({
			trigger: $('#dropFertility'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidFertility',
			dataSource: fertilityItems,
			selectedValue: '{$resumeInfo[fertility]}',
			selectCallback: {
				isDefault: true
			}
		}),
		dropPolitical = new select({
			trigger: $('#dropPolitical'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidPolitical',
			dataSource: politicalItems,
			selectedValue: '{$resumeInfo[political]}',
			selectCallback: {
				isDefault: true
			}
		}),
		/*
		dropNationality = new select({
			trigger: $('#dropNationality'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidNationality',
			dataSource: nationalityItems,
			selectedValue: '{$resumeInfo[nationality]}',
			selectCallback: {
				isDefault: true
			}
		});
		*/
		dropApplyStatus = new select({
			trigger: $('#dropApplyStatus'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidApplyStatus',
			dataSource: applyStatusItems,
			selectedValue: '{$resumeInfo[jobState]}',
			selectCallback: {
				isDefault: true
			}
		}),
		dropAccessionTime = new select({
			trigger: $('#dropAccessionTime'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidAccessionTime',
			dataSource: accessionTimeItems,
			selectedValue: '{$resumeInfo[joinTime]}',
			selectCallback: {
				isDefault: true
			}
		});

	var accessiondl = dropAccessionTime.get("trigger").closest("dl");
	if (dropApplyStatus.get("selectedValue") == notconsider) {
		accessiondl.hide();
		dropAccessionTime.setSelectedIndex(0);
	} else {
		if (accessiondl.has(":hidden")) {
			accessiondl.show();
		}
	}			
	if(dropMarriage.get('selectedIndex') == married){
		if(dropFertility.get('trigger').has(':hidden')){
			dropFertility.get('trigger').show();
		}
	} else {
		dropFertility.get('trigger').hide();
		dropFertility.setSelectedIndex(0);
	}
	dropMarriage.on('change', function(e){
		var trigger = dropFertility.get('trigger');
		if(e.index == married){
			if(trigger.has(':hidden')){
				trigger.show();
			}
		} else {
			trigger.hide();
			dropFertility.setSelectedIndex(0);
		}
	});
		
	var groups = {
			birthYMD: 'inpBirthYear inpBirthMonth inpBirthDate',
			startYMD: 'inpStartYear inpStartMonth inpStartDate',
			txtSheight: 'txtStature txtAvoirdupois'
		},
		keepBlur = [
			'inpBirthYear', 'inpBirthMonth', 'inpBirthDate',
			'inpStartYear', 'inpStartMonth', 'inpStartDate'
		].join(' '),
		rules = {
			txtUserName: {
				required: true,
				match: /^[\u4e00-\u9fa5]+$/i,
				range: [2, 6]
			},
			radSex: 'required',
			inpBirthYear: 'number',
			inpBirthMonth: 'number',
			inpBirthDate: 'number',
			inpStartYear: 'number',
			inpStartMonth: 'number',
			inpStartDate: 'number',
			txtIDCardNumber: 'idcard',
			hidCurArea: 'required',
			radWorkState: 'required',
			hidApplyStatus : 'required',
			//hidAccessionTime: 'required',			
			txtStature: {
				number: true,
				rangeNum: [1, 280]
			},
			txtAvoirdupois:{
				number: true,
				rangeNum: [1, 200]
			},
			txtMobilePhone: 'required mobile',
			txtEmail: 'email',
			txtQQ: 'number'
		},
		errorMsg = {
			txtUserName: {
				required: '<em></em><i></i>请填写真实姓名',
				match: '<em></em><i></i>2-6个汉字',
				range: '<i></i>2-6个汉字'
			},
			radSex: '<em></em><i></i>请选择性别',
			inpBirthYear: '<em></em><i></i>请选择年份',
			inpBirthMonth: '<em></em><i></i>请选择月份',
			inpBirthDate: '<em></em><i></i>请选择日期',
			inpStartYear: '<em></em><i></i>请选择年份',
			inpStartMonth: '<em></em><i></i>请选择月份',
			inpStartDate: '<em></em><i></i>请选择日期',
			txtIDCardNumber: '<em></em><i></i>请填写正确的身份证',
			hidCurArea: '<em></em><i></i>请选择现居住地',
			radWorkState: '<em></em><i></i>请选择工作经验',
			hidApplyStatus: '<em></em><i></i>请选择求职状态',
			//hidAccessionTime:'<em></em><i></i>请选择到岗时间',			
			txtStature: {
				number: '<em></em><i></i>请填写数字',
				rangeNum: '<em></em><i></i>请输入正确的身高'
			},
			txtAvoirdupois: {
				number: '<em></em><i></i>请填写数字',
				rangeNum: '<em></em><i></i>请输入正确的体重'
			},
			txtMobilePhone: {
				required: '<em></em><i></i>请输入手机号码',
				mobile: '<em></em><i></i>手机号码格式不正确'
			},
			txtEmail: {
				required: '<em></em><i></i>请输入邮箱',
				email: '<em></em><i></i>邮箱格式不正确'
			},
			txtQQ: '<em></em><i></i>请填写正确的QQ'
		},
		warningCls = "warning",
		errorCls = 'error',
		successCls = 'success',
		text = '-text',
		label = '-msg',
		allTextCls = errorCls + text + ' ' + warningCls + text + ' ' + successCls + text,
		allLabelCls = errorCls + label + ' ' + warningCls + label + ' ' + successCls + label,
		errorTextCls = errorCls + text,
		errorLabelCls = errorCls + label,
		warningTextCls = warningCls + text,
		warningLabelCls = warningCls + label,
		successTextCls = successCls + text,
		successLabelCls = successCls + label;

	var form = new validator({
			element: $('#formBasicInfo'),
			errorElement: '.prompt-msg',
			rules: rules,
			groups: groups,
			errorMessages: errorMsg,
			keepKey: true
		});
	form.on('focus', change);
	form.on('blur', change);
	form.on('pass', change);
	form.on('invalid', change);
	form.on('remote', change);
	dropApplyStatus.on("change", function(e) {
		if (e.value == notconsider) {
			form.removeRules('hidAccessionTime');
			accessiondl.hide();
			dropAccessionTime.setSelectedIndex(0);
		} else {
			if (accessiondl.is(":hidden")) {
				form.resetElement($('input[name=hidAccessionTime]')[0]);
				form.addRules(hidAccessionTimeRules);
				form.addErrorMessages(hidAccessionTimeMsg);
				accessiondl.show();
			}
		}
	});
	sexNameBoxer.on('select', function(e){
		form.checkElement(e.target[0]);
	});
	var labelWorkState = $('#labelWorkState');
	workBoxer.on('select', function(e){
		form.checkElement(e.target[0]);
		if(e.index){
			labelWorkState.text('毕业时间');
		} else {
			labelWorkState.text('参加工作时间');
		}
	});
	$('#moreInforBtn').on('click', function(){
		toggleBaseMoreInfor();
	});
	
	calcWorkYear();
	var txtStature = $('#txtStature'),
		txtAvoirdupois = $('#txtAvoirdupois'),
		txtStatureData = txtStature.val(),
		txtAvoirdupoisData = txtAvoirdupois.val();
		
	function toggleBaseMoreInfor(){
		var baseMore = $('#step1-more'),
			btnMoreDownIcon = $('#moreInforBtn .down'),
			btnMoreUpIcon = $('#moreInforBtn .up');
		if(baseMore.is(':hidden')){
			txtStature.val(txtStatureData);
			txtAvoirdupois.val(txtAvoirdupoisData);
			baseMore.show();
			btnMoreDownIcon.hide();
			btnMoreUpIcon.show();
		} else {
			baseMore.hide();
			txtStatureData = txtStature.val();
			txtAvoirdupoisData = txtAvoirdupois.val();
			txtStature.val('');
			txtAvoirdupois.val('');
			form.checkElement(txtStature[0]);
			form.checkElement(txtAvoirdupois[0]);
			btnMoreDownIcon.show();
			btnMoreUpIcon.hide();
		}
	}
	function calcWorkYear(){
		var startMonth = $('#inpStartMonth').val(),
			startYear = $('#inpStartYear').val();
		
		if(parseInt(startYear) && !parseInt(startMonth)){
			startMonth = 1;
		} else if(!parseInt(startYear)){
			startMonth = '';
		}
		var dateFormat, workMonthNum;
		if(!isNaN(startYear)){
			dateFormat = new DateFormat();
			workMonthNum = dateFormat.diffMonth(startYear + '-' + startMonth + '-' + 1);
		}
		
		var workIndex = 0,
			workY = Math.floor(workMonthNum / 12),
			workM = parseInt(workMonthNum % 12);
			workYearDesc = workText = '';
		
		if(!isNaN(workMonthNum)){
			if(workMonthNum > -6 && workMonthNum <= 6){
				workYearDesc = '， 应届毕业生';
				workIndex = 1;
				workText = '毕业时间';
			} else if(workY == 0 && workM > 6){
				workYearDesc = '，'+ workM + '个月工作经验';
				workIndex = 0;
				workText = '参加工作时间';
			} else if (workMonthNum < 7){
				workYearDesc = '，目前在读';
				workIndex = 1;
				workText = '毕业时间';
			} else {
				workYearDesc = '，' + workY + '年工作经验';
				workIndex = 0;
				workText = '参加工作时间';
			}
			labelWorkState.text(workText);
			workBoxer.setStatus(workIndex, true);
			form.checkElement($('input[name=radWorkState]')[0]);
		}
		$('#startYMD').text(workYearDesc);
	}
	jobDater.bind({
		id: "Birth",
		dateEntry: [0, 1, 2],
		size: 20,
		min: -61,
		max: -16,
		onSelect:function(e){
			form.checkElement($(e.target)[0]);
			if(e.next && e.next.length){
				form.checkElement($(e.next)[0]);
			} else {
				form.checkElement($('#inpBirthYear')[0]);
			}
		},
		noSelect:function(e){
			form.checkElement($(e.target)[0]);
		}
	});
	
	jobDater.bind({
		id: "Start",
		dateEntry: [0, 1, 2],
		size: 20,
		min: 1949 - (new Date()).getFullYear()-1,
		max: 5,
		onSelect:function(e){
			form.checkElement($(e.target)[0]);
			if(e.next && e.next.length){
				form.checkElement($(e.next)[0]);
			} else {
				form.checkElement($('#inpStartYear')[0]);
			}
			calcWorkYear();
		},
		noSelect: function(e){
			form.checkElement($(e.target)[0]);
		}
	});
	$('#curArea').singleArea({
		hddName:'hidCurArea',
		showLevel:3,
		selectArea:'', 
		controlClass: 'zIndex', 
		onSelect:function(){
			form.checkElement($('#hidCurArea')[0]);
		},
		noSelect:function(){
			form.checkElement($('#hidCurArea')[0]);
		}
	});
	<!--{if $resumeInfo[residenceid]}-->$('#curArea').setArea('{$resumeInfo[residenceid]}');<!--{/if}-->
	$('#nativePlace').singleArea({
		hddName:'hidNativePlace',
		showLevel:3,
		selectArea:'',
		controlClass:'zIndex'
	}); 
	<!--{if $resumeInfo[nativeid]}-->$('#nativePlace').setArea('{$resumeInfo[nativeid]}');<!--{/if}-->
	
	var phoneValidatorStatus = parseInt('{$mobileStatus}'),
		phoneCoder = (function(){
		var disabledClass = 'isDisabled',
			txtMobilePhone = $('#txtMobilePhone'),
			txtMobileValue = txtMobilePhone.val(),
			isMobileBindStatus = !!txtMobileValue,
			txtMobilePhoneLabel = $('span[data-for=txtMobilePhone]'),
			divValiMobile = $('#divValiMobile'),
			txtValidateCode = $('#txtValidateCode'),
			divValidCode = $('#divValidCode'),
			txtValidateLabel = $('span[data-for=txtValidateCode]'),
			btnMobile = $('#btnMobile'),
			btnBindMobile = $('#btnBindMobile'),
			btnSendValidate = $('#btnSendValidate'),
			bindStatus = $('#phone-status'),
			spnConModMobile = $('#spnConModMobile'),
			remoteRules = {
				url: "/api/web/user.api",
				async: true,
				data: {
					act:'mobileRepeat',
					_txtMobile: function() { 
						return txtMobilePhone.val(); 
					}
				},
				callback: function(e){
					if(e.status>0) e.status=1;
					phoneCoder.isRemoteClass = e.status === 1;
					return true;
				}
			},
			remoteErrorMsg = '<em></em><i></i>该号码已被其他账号占用，继续操作可以从其他账号解绑并清除',
			remoteSuccessMsg = '<i></i>',
			codeRemoteURL = {
				url: "/person/CheckVali/",
				async: true,
				data: {
					txtMobilePhone: function() { return txtMobilePhone.val(); },
					txtValidateCode:function(){ return txtValidateCode.val(); }
				},
				callback: function(e){
					if(!phoneCoder.isRemoteClass){
						phoneCoder.isSuccess = true;
					}
					return e.success === "true";
				}
			},
			codeRules = {
				required: true,  
				number: true,
				range: [4, 4]
			},
			codeErrorMessages = {
				required: '<em></em><i></i>请填写验证码',  
				number: '<em></em><i></i>请填写数字',
				range: '<em></em><i></i>验证码为4位'
			},
			codeValidMessages = "<i></i>",
			isSendClick = true;
			
			var phoneCoder = {
				isRemoteClass:true, 
				spnConModMobile: spnConModMobile,
				txtMobilePhone: txtMobilePhone,
				txtMobilePhoneLabel: txtMobilePhoneLabel,
				divValiMobile: divValiMobile,
				txtValidateCode: txtValidateCode,
				seconds: 0,
				clearInput: function(f){
					if(!f){
						txtMobilePhone.removeClass(allTextCls);
					}
					txtMobilePhoneLabel.removeClass(allLabelCls).html('');
				},
				clearCode: function(f){	
					if(!f){				
						txtValidateCode.removeClass(allTextCls).val('');
						form.clearRemoteCache(txtValidateCode);
					}
					txtValidateLabel.removeClass(allLabelCls).html('');
				},
				remoteCode: function(f){
					if(!f){
						form.addRules('txtValidateCode', codeRules);
						form.addErrorMessages('txtValidateCode', codeErrorMessages);
						form.addValidMessages('txtValidateCode', codeValidMessages);
						return;
					}
					form.removeRules('txtValidateCode');
				},
				remote: function(f){
					if(!f){
						form.addRules('txtMobilePhone', {remote: remoteRules});
						form.addValidMessages('txtMobilePhone', remoteSuccessMsg);
						form.addErrorMessages('txtMobilePhone', {remote: remoteErrorMsg});
						return;
					}
					form.removeRules('txtMobilePhone', 'remote');
				},
				toggleBindStatus: function(f){
					f ? bindStatus.show() : bindStatus.hide();
				},
				updateBindStatus: function(){
					if(phoneValidatorStatus){
						bindStatus.addClass('upd-num').removeClass('upd-num1');
					} else {
						bindStatus.removeClass('upd-num').addClass('upd-num1');
					}
				},
				toggleValidCode: function(f){
					if(f){
						divValiMobile.show();
						this.remoteCode();
					} else {
						divValiMobile.hide();
						this.remoteCode(true);
					}
				},
				toggleBindBtn: function(f){
					if(btnMobile.is(':visible')){
						btnMobile.hide();
					}
					if(f){
						btnBindMobile.show();
					} else {
						btnBindMobile.hide();
					}
				},
				toggleModBtn: function(f){
					if(btnBindMobile.is(':visible')){
						btnBindMobile.hide();
					}
					if(f){
						btnMobile.show();
					} else {
						btnMobile.hide()
					}
				},
				disabled: function(){
					this.clearInput();
					this.toggleValidCode(false);
					this.toggleModBtn(true);
					txtMobilePhone.val(txtMobilePhone.attr('v')).prop('disabled', true);
					btnMobile.addClass(disabledClass).html('添加号码');
					this.toggleBindStatus(true);
					this.remote(true);
				},
				enabled: function(){
					//form.checkElement($('#txtMobilePhone'));
					this.clearCode();
					this.toggleValidCode(true);
					this.toggleModBtn(true);
					txtMobilePhone.val('').prop('disabled', false);
					//btnMobile.removeClass(disabledClass).html('暂不添加'); //
					this.toggleBindStatus(false);
					this.remote();
				},
				bind: function(){
					this.toggleValidCode(true);
					this.toggleBindBtn(true);
					this.toggleBindStatus(false);
					btnBindMobile.removeClass(disabledClass).html('取消绑定');
				},
				unbind: function(){
					this.toggleValidCode(false);
					this.toggleBindBtn(true);
					this.toggleBindStatus(isMobileBindStatus);
					btnBindMobile.addClass(disabledClass).html('立即绑定');
				},
				checkPhone: function(f){
					if(f){
						this.insertLabel();
						txtMobilePhoneLabel.removeClass(warningLabelCls).addClass(successLabelCls).html('<i></i>');
					} else {
						this.insertLabel(true);
						txtMobilePhoneLabel.removeClass(successLabelCls).addClass(warningLabelCls).html(remoteErrorMsg);
					}
				},
				insertLabel: function(f){
					if(f){
						spnConModMobile.after(txtMobilePhoneLabel);
					} else {
						spnConModMobile.before(txtMobilePhoneLabel);
					}
				},
				focusMobile: function(){
					txtMobileValue = txtMobilePhone.val();
				},
				blurMobile: function(){
					if(txtMobilePhone.val() !== txtMobileValue){
						if(!this.isRemoteClass){
							delete this.isSubmit;
							delete this.isSuccess;
						}
						if(divValiMobile.is(':visible')){
							this.clearCode();
						}
					}
				},
				success: function(){
					if(!phoneValidatorStatus) {
						if(!this.isRemoteClass){
							if(divValiMobile.is(':hidden') && !form.isFormSubmitted()){
								this.clearCode();
							}
							this.toggleBindBtn(false);
							this.toggleValidCode(true);
							return;
						}
						
						if(!form.isFormSubmitted()){
							if(txtMobileValue !== txtMobilePhone.val()){
								this.unbind();
							}
						}
						delete this.isRemoteSuccess;
					}
				},
				error: function(){
					this.insertLabel(true);
					if(phoneValidatorStatus){
						this.enabled();
					} else {
						this.toggleBindBtn(false);
						this.toggleBindStatus(false);
						this.toggleValidCode(false);
					}
				},
				send:function(){
					if(!isSendClick) return;
					isSendClick = false;
					if(!(verifier.required(txtMobilePhone) && verifier.mobile(txtMobilePhone))){
						isSendClick = true;
						form.checkElement(txtMobilePhone[0]);
						return;
					}
					var self = this,
						data = {act:'mobileCheck',_txtMobile:txtMobilePhone.val(),type:1};
					$.getJSON('/api/web/user.api', data ,function(result){
						if(result.status<1){
							isSendClick = true;
							txtValidateLabel.removeClass(allLabelCls).addClass(errorLabelCls).html('<em></em><i></i>' + result.msg);
							txtValidateCode.removeClass(allTextCls).addClass(errorTextCls);
							return;
						}
						self.successMobile = data.mobilePhone;
						btnSendValidate.html('<i>180</i>秒后重新获取');
						txtValidateLabel.removeClass(allLabelCls).addClass(successLabelCls).html('<i class="cont"></i>已发送验证码短信到您的手机');
						txtValidateCode.val('').removeClass(allTextCls).focus();
						self.interval = setInterval(function(){
							self.complete();
						}, 1000);
					});
				}, 
				complete: function(){
					var num = btnSendValidate.children('i'),
						seconds = parseInt(num.html());
					if(seconds > 0){
						seconds--;
						this.seconds = seconds;
						num.html(seconds);
					} else {
						this.seconds = 0;
						this.resetTime(true);
					}
				},
				resetTime: function(f){
					if(this.interval){
						window.clearInterval(this.interval);
						this.interval = null;
						this.successMobile = null;
						this.successCode = null;
						btnSendValidate.html('重新获取验证码');
						isSendClick = true;
					}
				}
			}
		if(phoneValidatorStatus){
			phoneCoder.enabled();
		} else {
			phoneCoder.disabled();
			//phoneCoder.remote();
		}

		phoneCoder.toggleBindStatus(isMobileBindStatus);

		btnBindMobile.on('click', function(){
			if($(this).hasClass(disabledClass)){
				phoneCoder.clearCode();
				phoneCoder.bind();
			} else {
				phoneCoder.clearCode();
				phoneCoder.unbind();
			}
			delete phoneCoder.isSubmit;
		});
		btnMobile.on('click', function(){
			if($(this).hasClass(disabledClass)){
				phoneCoder.clearCode();
				phoneCoder.enabled();
			} else {
				phoneCoder.clearCode();
				phoneCoder.disabled();
			}
			delete phoneCoder.isSubmit;
		});
		btnSendValidate.on('click', function(){
			phoneCoder.send();
		});
		
		return phoneCoder;
	})();

	//phoneCoder.disabled();
	//邮件验证的逻辑业务块
	var mailCoder = (function(){
		
		var disabledClass = 'isDisabled',
			txtEmail = $('#txtEmail'),
			labelEmail = $('span[data-for=txtEmail]'),
			btnEmail = $('#btnEmail'),
			statusEmail = $('#email-status'),
			infoEmail = $('#emailInfoMsg');
		
		form.addRules('txtEmail', {
			remote: {
				url: "/api/web/user.api",
				async: true,
				data: {
					act:'emailRepeat',
					txtPageEmail: function() { return txtEmail.val(); }
				},
				callback: function(e){
					if(!txtEmail.val()) e.status=1;
					return e.status == 1;
				}
			}
		});
		form.addErrorMessages('txtEmail', {
			remote: '<em></em><i></i>该邮箱已被使用，请重新输入'
		});
		var mailCoder = {
			validMessages: '<i></i>',
			add: function(){
				form.addValidMessages('txtEmail', this.validMessages);
			},
			remove: function(f){
				form.removeValidMessages('txtEmail');
				if(!f){
					txtEmail.removeClass(allTextCls);
					labelEmail.removeClass(allLabelCls);
					labelEmail.html('');
				}
			},
			setStatus: function(b){
				if(b){
					statusEmail.removeClass('upd-email').addClass('upd-email1');
				} else {
					statusEmail.addClass('upd-email').removeClass('upd-email1');
				}
			},
			enabled: function(){
				btnEmail.removeClass(disabledClass).html('暂不添加');
				txtEmail.removeAttr('disabled').val('');
				statusEmail.hide();
				infoEmail.show();
				if(labelEmail.html()){
					this.remove();
				}
				//this.setStatus(true);
				this.add();
			},
			disabled: function(){
				btnEmail.addClass(disabledClass).html('添加邮箱');
				txtEmail.prop('disabled', true).val(txtEmail.attr('v'));
				statusEmail.show();
				//mailCoder.setStatus(false);
				mailCoder.remove();
				infoEmail.hide();
			},
			unbind: function(){
				if(btnEmail.is(':visible')){
					btnEmail.hide();
				}
				this.enabled();
			},
			bind: function(){
				if(btnEmail.is(':hidden')){
					btnEmail.show();
				}
				this.disabled();
			},
			insertLabel: function(f){
				if(f){
					btnEmail.after(labelEmail);
				} else {
					btnEmail.before(labelEmail);
				}
			}
		}
		
		
		if(!txtEmail.prop('disabled')){
			mailCoder.add();
			statusEmail.hide();
		}
		if(txtEmail.val()){
			mailCoder.disabled();
		}
		btnEmail.click(function(){
			if($(this).hasClass(disabledClass)){
				mailCoder.enabled();
			} else {
				mailCoder.disabled();
			}
		});
		return mailCoder;
	})();
	
	$('#btnSubmit').click(function(){
		var btn = $(this);
		form.submit({
			callback: function(valid){
				var txtMobile=$('#txtMobilePhone').val();
				var txtTelPhone=$('#telephone').val();

				//if(!txtMobile&&!txtTelPhone){
				//	confirmBox.alert('手机号码、其它号码需填一项!', null, { title: '保存失败' });
				//	return;
				//}
				/*
				if(phoneCoder.isSubmit){
					delete phoneCoder.isSubmit;
					return;
				}
				*/
				btn.submitForm({
					beforeSubmit: valid,
					data:{},
					success: function(result){
						delete phoneCoder.isSubmit;
						if(result && result.status<1){
							confirmBox.alert(result.error, null, { title: '保存失败' });
							return;
						}
						phoneCoder.checkPhone(true);
						var pWidth = 70,
							fontWidth = 18;
							
						confirmBox.timeBomb(result.msg, {
							name: 'success',
							width: pWidth + result.msg.length * fontWidth,
							callback: function(){
								window.location.href = '/person/createresumestep2.html';
							}
						});
					}, clearForm:false
				});	
			}, errorback: function(){
				delete phoneCoder.isSubmit;
			}
		});
	});
	
	function change(e){
		switch(e.type){
			case "focusin":
				focusClass(e);
				break;
			case "focusout":
				blurClass(e);
				break;
			case "remote":
				remoteClass(e);
				break;
			case "pass":
				passClass(e);
				break;
			case "invalid":
				invalidClass(e);
				break;
		}
	}
	function focusClass(e){
		if(e.name === "txtMobilePhone"){
			phoneCoder.focusMobile();	
		}
	}
	function blurClass(e){
		if(e.name === "txtMobilePhone"){
			phoneCoder.blurMobile();	
		}
	}
	function remoteClass(e){
	}
	function passClass(e){
		e.target.removeClass(allTextCls);
		e.label.removeClass(allLabelCls);
		if(e.name === "txtMobilePhone"){
			if(phoneCoder.isRemoteClass){
				phoneCoder.checkPhone(true);
			} else {
				phoneCoder.checkPhone();
			}
			if(phoneCoder.isRemoteClass || form.isFormSubmitted()){
				if(!phoneCoder.isRemoteClass && form.isFormSubmitted() && !phoneCoder.isSubmit && !phoneCoder.isSuccess){
					phoneCoder.isSubmit = true;
					form.checkElement(phoneCoder.txtValidateCode[0]);
					delete phoneCoder.isSuccess;
				} else {
					delete phoneCoder.isSubmit;
				}
			} else {
				delete phoneCoder.isSubmit;
			}
			phoneCoder.success();
		} else if(e.name === "txtValidateCode"){
			e.label.addClass(successLabelCls);
			if(phoneCoder.isRemoteClass){
				phoneCoder.insertLabel();
			} else {
				phoneCoder.insertLabel(true);
			}
		} else if(e.name === "txtEmail"){
			if($('#txtEmail').val()){
				e.label.addClass(successLabelCls);
			}
			mailCoder.insertLabel();
			e.target.attr('v', e.target.val());
		}
	}
	function invalidClass(e){
		if(e.name === "txtMobilePhone"){
			phoneCoder.insertLabel(true);
			if(!phoneValidatorStatus){
				phoneCoder.error();
			}
		} else if(e.name === "txtEmail"){
			mailCoder.insertLabel(true);
		}
		e.target.removeClass(successTextCls + ' ' + warningTextCls).addClass(errorTextCls);
		e.label.removeClass(successLabelCls + ' ' + warningLabelCls).addClass(errorLabelCls);
	}
});
</script>
</body>
</html>