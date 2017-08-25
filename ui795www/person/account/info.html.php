<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>597人才网_求职中心_我的简历</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20140930" />
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

<body id="body" class="noResize minMain">

<!--#include virtual="/templates/default/person/header.htm" -->
<div class="w1000 clearfix">
	<!--#include virtual="/templates/default/person/menu.htm" -->
	<div class="right-main">
		<ul class="clearfix menu-tit">
				<li id="cssIndex"><a href="/person/account/">账号管理</a></li>
				<li id="cssInfo"><a href="/person/account/info.html">基本资料</a></li>
				<li id="cssPhoto"><a href="/person/account/photo.html">上传头像</a></li>
				<li id="cssPassword"><a href="/person/account/password.html">修改密码</a></li>
				<li class="right"><a href="/person/resume/privacy.html" target="_blank">隐私设置</a></li>
		</ul>
		<div class="alert-warniong mgt15">
			<a href="javascript:void(0)" class="close">×</a>
			绑定手机号码、完成邮箱验证，可以增加求职反馈的及时性和准确性，从而提高求职成功率
		</div>
		<!--主体-->	
	<form id="formBasicInfo" method="post" action="/api/web/person.api" >
	<input type="hidden" name="act" value="resume_save" />
	<input type="hidden" name="resumeType" value="2">
		<div class="found-main">
			<!--基本资料-->
			<div class="create-item step1">
				<div class="clearfix">
					<div class="head-img">
						<a href="/person/account/photo.html" target="_blank" ><img src="{$resumeInfo['attachment']}" /><span>上传图片</span></a>
						<label for="hideImg" class="hide-img icon-chck" id="chkPhotoOpen" data-name="chkPhotoOpen" data-value="0"  name="chkPhotoOpen" <!--{if $resumeInfo[isShowPhoto]==0}-->data-status="true"<!--{/if}-->><em></em>简历中隐藏照片</label>
					</div>
					<div class="create-form">
						<dl class="clearfix">
							<dt>姓名<i class="red">*</i></dt>
							<dd><!--状态 warning error success-->
								<!--<span class="def-text">您的姓名，2-6个汉字</span>-->
								<input type="text" class="c-text" id="txtUserName" name="txtUserName" value="{$resumeInfo['realname']}"  />
								<label id="hideName" class="hideName icon-chck" data-name="chkNameOpen" data-value="0" <!--{if $resumeInfo[isShowFullName]==0}-->data-status="true"<!--{/if}-->><em></em>不显示全名</label>
								<p data-for="txtUserName" class="prompt-msg msg"><!--<i></i>请填写真实姓名--></p>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>性别<i class="red">*</i></dt>
							<dd class="pt5">
								<label for="sex1" class="icon-sex" data-name='radSex' data-value="1" <!--{if $resumeInfo[gender]==1}-->data-status="true"<!--{/if}-->><em class="icon-sex1"></em>男</label>
								<label for="sex2" class="icon-sex" data-name='radSex' data-value="2" <!--{if $resumeInfo[gender]==2}-->data-status="true"<!--{/if}-->><em class="icon-sex2"></em>女</label>
								<p data-for="radSex" class="prompt-msg msg"></p>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>出生日期<i class="red">*</i></dt>
							<dd class="birthday clearfix select-group-row" style="z-index:11">
							   <span class="formText dateText zIndex" style="z-index: 100;">
									<input type="text" readonly  name="inpBirthYear" id="inpBirthYear" style="width:60px;" class="text" value="<!--{if $inpBirthYear}-->{$inpBirthYear}<!--{else}-->年<!--{/if}-->">
								</span>
								<span class="formText dateText zIndex" style="z-index: 99;">
									<input type="text" readonly  name="inpBirthMonth" id="inpBirthMonth" style="width:32px;" class="text" value="<!--{if $inpBirthMonth}-->{$inpBirthMonth}<!--{else}-->月<!--{/if}-->" >
								</span>
								<span class="formText dateText zIndex" style="z-index: 98;">
									<input type="text" readonly  name="inpBirthDate" id="inpBirthDate" style="width:32px;" class="text" value="<!--{if $inpBirthDate}-->{$inpBirthDate}<!--{else}-->日<!--{/if}-->" >
								</span>
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
							<dd class="addressMod clearfix select-group-row1" style="z-index:10">
								<span id="curArea"></span>
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
							<dd class="pt10">
								<label for="exp1" class="icon-rad" data-name="radWorkState" data-value='1' <!--{if $resumeInfo['workstate']==1}-->data-status="true"<!--{/if}-->><em></em>已参加工作</label>
								<label for="exp2" class="mgl10 icon-rad"  data-name="radWorkState" data-value='2' <!--{if $resumeInfo['workstate']==2}-->data-status="true"<!--{/if}-->><em></em>目前在读/应届生</label>
								<p data-for="radWorkState" class="prompt-msg msg"></p>
							</dd>
						</dl>
						<dl class="clearfix" >
							<dt><span id="labelWorkState">参加工作时间</span><i class="red">*</i></dt>
							<dd class="birthday" style="z-index:9">
								<div class="select-group-row clearfix">
									<span class="formText dateText zIndex" style="z-index: 100;">
										<input type="text" readonly  name="inpStartYear" id="inpStartYear" style="width:60px;" class="text"  value="<!--{if $inpStartYear}-->{$inpStartYear}<!--{else}-->年份<!--{/if}-->" >							 
									</span>
									<span class="formText dateText zIndex" style="z-index: 99;">
										<input type="text" readonly  name="inpStartMonth" id="inpStartMonth" style="width:32px;" class="text"  value="<!--{if $inpStartMonth}-->{$inpStartMonth}<!--{else}-->月<!--{/if}-->">
									</span>
									<span id="startYMD" class="prompt-msg msg"></span>
								</div>
								<p data-for="startYMD" class="prompt-msg msg"></p>
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

						<p align="center" class="moreInfor"><em class="hr"></em><span>更多补充信息<i class="jpFntWes">&#xf0dd;</i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="create-item step1-more">
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
				</dd>
			</dl>
			<dl class="clearfix">
				<dt>户口所在地</dt>
				<dd class="addressMod clearfix" style="z-index:7">
					<span id="nativePlace"></span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span> 
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
					
					<!--
					<span class="zIndex drop" id="dropMarriage" style="z-index: 6;">
					<span><b class="jpFntWes dropIco"></b><span class="dropSeld cu" style="width: 100px;">未婚</span><div class="dropLst"><div class="dropLstCon" style="width:108px"><ul><li v=""></li><li v="1" class="cu">未婚</li><li v="2">已婚</li></ul></div></div></span><input type="hidden" id="hidMarriage" name="hidMarriage" value="1"></span>
					-->
					
				</dd>
			</dl>
			<dl class="clearfix">
				<dt>政治面貌</dt>
				<dd class="clearfix">
				
					<div id="dropPolitical" class="dropv2" style="width:110px;">
						<b class="jpFntWes dropIco">&#xf0d7;</b>
						<label>请选择</label>
						<ul>
						</ul>
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
				<dd class="height">
					<div class="clearfix">
					<input type="text" id="txtStature" name="txtStature" value="{$resumeInfo[stature]}" class="c-text" />厘米 &nbsp;
					<input type="text" id="txtAvoirdupois" name="txtAvoirdupois" value="{$resumeInfo[avoirdupois]}" class="c-text box-item" />公斤
					</div>
					<div class="msg-container">
					  <label data-for="txtStature" id="txtStature" class="prompt-msg msg"></label>
					  <label data-for="txtAvoirdupois" id="txtAvoirdupois" class="prompt-msg msg"></label>
					</div>
				  <!--<p class="error-msg"><i></i>请填写真实姓名</p>-->
				</dd>
			</dl>
			<dl class="clearfix sub-item">
				<dt>&nbsp;</dt>
				<dd>
					<button class="btn6 btnsF16" type="button" id="btnSubmit">保存设置</button>
				</dd>
			</dl>
		</div>
	</div>
	</form>
</div>
<!--{template person/footer}-->
<!--/主体 end-->  
</body>

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
			}
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
		hidAccessionTimeRules = {hidAccessionTime: 'required'},
		hidAccessionTimeMsg = {hidAccessionTime: '<em></em><i></i>请选择到岗时间'},		
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




	
	$('#btnSubmit').click(function(){
		var btn = $(this);
		form.submit({
			callback: function(valid){
				btn.submitForm({
					beforeSubmit: valid,
					data:{},
					success: function(result){
						if(result && result<1){
							confirmBox.alert(result.error, null, { title: '保存失败' });
							return;
						}
						var pWidth = 70,
							fontWidth = 18;
							
						confirmBox.timeBomb(result.msg, {
							name: 'success',
							width: pWidth + result.msg.length * fontWidth,
							callback: function(){
								window.location.reload();
							}
						});
					}, clearForm:false
				});	
			}
		});
	});
	//关闭提示
	var warn = $(".alert-warniong");
	warn.find(".close").click(function(){
		warn.hide();
		return false;
	});
	function change(e){
		switch(e.type){
			case "pass":
				passClass(e);
				break;
			case "invalid":
				invalidClass(e);
				break;
		}
	}
	function passClass(e){
		e.target.removeClass(allTextCls);
		e.label.removeClass(allLabelCls);
	}
	function invalidClass(e){
		e.target.removeClass(successTextCls + ' ' + warningTextCls).addClass(errorTextCls);
		e.label.removeClass(successLabelCls + ' ' + warningLabelCls).addClass(errorLabelCls);
	}
});
</script>
</body>
</html>
