<style type="text/css">
.found-main, .found-main1{
	overflow:visible
}
.formText input.text{ border:1px solid #e7e7e7; color:#666; background:#fff;width:246px; border-radius:4px;}
.formMod .tipTxt{ margin-right:88px; margin-left:0px; line-height:23px; float:left; }
.formMod .l{ margin-right:0px;}
.formChb{ float:left;}

.create-item .c-text, textarea, .edit-status-box .c-text{ height:23px; line-height:23px; margin-right: 10px;}
.birthday .formText .text, .birthday-min .formText .text{ height:23px; line-height:23px;}
.edit-status-box .c-text{ margin-right: 10px;}
.drop b.dropIco, .dateText b.dropIco{ top:7px;}
.formRows{ line-height:27px;}
.dropv2{ height:23px; line-height:23px;}
.dropv2 b.dropIco{ line-height:27px;}
.create-item dl{ margin-top:10px;}
.formRows .error-msg, .jl-name .error-msg, .formRows .warning-msg, .formRows .success-msg{ height:23px; line-height:23px;}
.formRows .error-msg em, .jl-name .error-msg em, .formRows .warning-msg em, .formRows .success-msg em{ top:9px;}
.step-box .name em{display:inline-block; vertical-align:middle; width:22px; height:22px; background:url(http://cdn.597.com/img/v2/resume/steel04.png) 0 -38px no-repeat; padding-right:8px; margin-top:-2px;#margin-top:0px;}
.step-box{ height:40px; border-radius:4px 4px 0 0; line-height:40px; padding-top:9px; background:#e8f5fe;}
.create-item dt {
    font-size: 12px;}
.create-tit{width:500px; line-height: 28px; color: #3f7bb1;}
.create-tit a{ height:28px; font-size:14px; line-height:28px;width:auto; padding: 0 18px; float: left; font-family: "微软雅黑"}
.create-tit span{ display: blokc; float:left; margin-right: 8px;font-family: "微软雅黑"}
.create-tit .name{ height:28px;}
#txtApprise{ height:46px;}
.create-titBg{width:100%; height:43px;background:#e8f5fe; padding-bottom: 12px;}
.drop{height:23px; line-height:23px;}
.addressMod .drop input.text{ margin-top:0;}
.create-item dt{ height:23px; line-height:23px;}
.create-titBg{ border-bottom:none;}
.create-tit a{ height:30px; background:#09c; color:#fff; margin-right:10px; border-radius: 5px;}
.create-tit a:hover{ background: #00b6f2; color: #fff;}
.create-tit .name{ border:none;border-radius:0;height:30px; color:#2e5c8b;}
.step-box .name{ padding-left:20px;}
.dropSet{ padding-top:4px;}
.checkMod .seled{ margin-bottom:3px;}
.sub-btn, .canl-btn{ height:30px;}
a.btnsF16, button.btnsF16, input.btnsF16{ padding:0 112px;}
.create-item .txtLabel{font-size: 14px;color:#ccc;position: absolute;top:0px;left:8px}
.formRows .icon-sex {
    margin-top: -4px;
}
.form{width:238px; float:left; border-right:1px dashed #cbcbcb;}
.txt{width:140px; float:left; margin-left:20px;}
.txt .subT span{ display:block; color:#adadad; font-size:14px; font-family:"微软雅黑";}
.txt .subT a{ display:block; font-size:16px; font-family:"微软雅黑"; color:#0ba6c2; padding-left:24px; margin:10px 0 32px;#margin:15px 0 32px; background:url(http://cdn.597.com/img/p/login/menbersge.png) left center no-repeat;}
#btnLogin{ padding:0 90px;}
.formText input.text{ border-radius:0px;}
.formChb label input{ display:inline-block; vertical-align:middle;}

</style>
<body class="noResize minMain">
	<div class="step-box clearfix" style="text-align:left;">
		<h3 class="name" id="registertitle"><em></em><span>没简历怎么投职位？花30秒轻松填写简历搞定工作</span></h3>
		<h3 class="name" style="display:none;" id="logintitle"><em></em><span>账号登录</span></h3>
	</div>	
	<!--基本资料-->
	<div class="create-titBg" style="text-align:left;">
		<p class="create-tit"><span>已有简历，请直接</span><a href="javascript:void(0)"  id="tabLogin">登录</a></p>
		<p class="create-tit" style="display:none;"><span>没有简历？</span><a href="javascript:void(0)" id="tabRegister">创建简历投递</a></p>
	</div>
	<!--主体-->	
	<!--<form id="formBasicInfo" method="post" action="/personregister/docreateresume/" >-->
	<form id="formBasicInfo" method="post" action="/api/web/person.api?act=applyRegResume" >
	<div class="found-main" style="position: relative;zoom: 1; border:none;" id="registerContainer">
		<div class="create-item step1">
			<div class="clearfix">
				<div class="create-form">
					<dl class="clearfix">
						<dt>意向职位名称<i class="red">*</i></dt>
						<dd class="formRows">
							<!--<em class="def-text">请输入求职意向</em>-->
							<input type="text" class="c-text" name="txtJoinOffice"  value="{$job['jname']}" />
							<span class="prompt-msg msg" data-for="txtJoinOffice"></span>
							<span style="color: rgb(204, 204, 204);">(多个职位请用逗号隔开)</span>
						</dd>
					</dl>

					<dl class="clearfix">
						<dt style="line-height:28px;">职位类别<i class="red">*</i></dt>
						<dd class="input-box checkMod formRows" style="z-index:102">
							<div id="jobsort" class="drop formText JobCayDrop" style="z-index:102"></div>
							<span class="prompt-msg msg" data-for="hidJobSortExpect"></span>
						</dd>
					</dl>

					<dl class="clearfix">
						<dt>姓名<i class="red">*</i></dt>
						<dd class="formRows"><!--状态 warning error success-->
							<!--<span class="def-text">您的姓名，2-6个汉字</span>-->
							<input type="text" class="c-text" id="txtUsername" name="txtUsername" value=""  />
						   	<label for="sex1" class="icon-sex" data-name='radSex' data-value="1" data-status="true"><em class="icon-sex1"></em>男</label>
							<label for="sex2" class="icon-sex" data-name='radSex' data-value="2" ><em class="icon-sex2"></em>女</label>
							<span data-for="txtUsername" class="prompt-msg msg"></span>
							<span data-for="radSex" class="prompt-msg msg"></span>	
						</dd>
					</dl>
					<!--
					<dl class="clearfix">
						<dt>性别<i class="red">*</i></dt>
						<dd class="formRows">							
							<label for="sex1" class="icon-sex" data-name='radSex' data-value="1" data-status="true"><em class="icon-sex1"></em>男</label>
							<label for="sex2" class="icon-sex" data-name='radSex' data-value="2" ><em class="icon-sex2"></em>女</label>
							<span data-for="radSex" class="prompt-msg msg"></span>
						</dd>
					</dl>-->
					<dl class="clearfix">
						<dt>出生年月<i class="red">*</i></dt>
						<dd class="clearfix select-group-row birthday formRows" style="z-index:11">
					   	   <span class="formText dateText zIndex" style="z-index: 100;">
						   		<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpBirthYear" id="inpBirthYear" style="width:60px;" class="text" value="年份">				
							</span>
							<span class="msgTxt">年</span>
							<span class="formText dateText zIndex" style="z-index: 99;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpBirthMonth" id="inpBirthMonth" style="width:32px;" class="text" value="月" >
							</span>
							<span class="msgTxt">月</span>
							<span class="formText dateText zIndex" style="z-index: 98;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpBirthDate" id="inpBirthDate" style="width:32px;" class="text" value="日" >
							</span>
							<span class="msgTxt">日</span>
							<span data-for="birthYMD" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix" style="text-align:left;">
						<dt>手机号码<i class="red">*</i></dt>
						<dd class="formRows validRows">
							 <i id="phone-status" class="upd-num1" style="display:none"></i><!--灰色:upd-num1;绿色:upd-num-->
							 <input type="text" class="c-text" id="txtMobilePhone" name="txtMobilePhone" value="" v="" />
							 <span data-for="txtMobilePhone" class="prompt-msg msg"></span><span id="spnConModMobile" >
							 	
							 </span>
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

					<dl class="clearfix">
						<dt>最高学历<i class="red">*</i></dt>
						<dd class="formRows" style="z-index: 10">
							<div id="highestdegree" class="dropv2" style="width:120px;z-index: 10">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<p class="prompt-msg msg" data-for="hiddegree"></p>
						</dd>						
					</dl>				
					<dl class="clearfix">
						<dt><span id="labelWorkState">参加工作时间</span><i class="red">*</i></dt>
						<dd class="birthday select-group-row formRows" style="z-index:10;position: relative">
							<span class="formText dateText zIndex" style="z-index: 100;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpStartYear" id="inpStartYear" style="width:60px;" class="text" value="年份" >								
							</span>
							<span class="msgTxt">年</span>
							<span class="formText dateText zIndex" style="z-index: 99;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<input type="text" readonly  name="inpStartMonth" id="inpStartMonth" style="width:32px;" class="text" value="月">
							</span>
							<span class="msgTxt">月</span>
							<label id="chkgraduate" class="icon-chck mgl10 mgt5 left" data-name="chkgraduate" data-value="1"><em></em>目前在读/应届毕业生</label>
							<span data-for="startYMD" class="prompt-msg msg"></span>
						</dd>
					</dl>				
					<dl class="clearfix">
						<dt>现居住地<i class="red">*</i></dt>
						<dd class="addressMod formRows" style="z-index:9;position: relative">
							<div id="curArea"></div>
							<span data-for="hidCurArea" class="prompt-msg msg"></span>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt style="line-height:28px;">意向工作地点<i class="red">*</i></dt>
						<dd class="input-box checkMod formRows" style="z-index: 8">
							<div id="dropAreaMultiple" class="zIndex drop formText jobAddDrop" style="z-index:8"></div>
							<span class="prompt-msg msg" data-for="hidAreaMultiple"></span>				
						</dd>
					</dl>
					<dl class="clearfix">
						<dt>期望薪资<i class="red">*</i></dt>
						<dd class="formRows" style="z-index: 6">
							<div id="dropSalary" class="dropv2" style="width:120px;z-index: 6">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<label id="chkSalary" class="icon-chck mgl10 mgt5 left" data-name="chkSalary" data-value="1"><em></em>不低于此薪资</label>
							<label id="chkSalaryShow" class="icon-chck mgl10 mgt5 left" data-name="chkSalaryShow" data-value="1"><em></em>面议</label>
							<p class="prompt-msg msg" data-for="hidSalary"></p>
						</dd>
					</dl>
					<!--	
					<dl class="clearfix">
						<dt style="line-height:28px;">期望行业</dt>
						<dd class="input-box checkMod formRows" style="z-index:5">
							<div id="dropCalling" class="drop formText JobIndDrop" style="z-index:5"></div>
							<span class="prompt-msg msg" data-for="hidCalling"></span>
						</dd>
					</dl>-->
					<dl class="clearfix" style="position:relative;">
						<dt><span id="labelWorkState">求职状态</span><i class="red">*</i></dt>
						<dd class="birthday select-group-row formRows" style="z-index:4">
							<div id="dropApplyStatus" class="dropv2" style="width:220px;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<div id="dropAccessionTime" class="dropv2" style="margin-left:10px; width:110px;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<span class="prompt-msg msg" data-for="ApplyGroup"></span>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt style="line-height:26px;">自我评价</dt>
						<dd class="formRows">
							<!--<em class="def-text">请输入求职意向</em>-->
							<textarea class="c-text" name="txtApprise" id="txtApprise" placeHolder="说说企业凭什么选你..."></textarea>
							<span class="prompt-msg msg" data-for="txtApprise"></span>
						</dd>
					</dl>
					<dl class="clearfix" style="text-align:left;">
						<dt>&nbsp;</dt>
						<dd class="formRows">
							<a href="javascript:;" class="reExamBtn">不知道怎么填？看看示例</a>
							<div class="rsExample">
								<img src="http://cdn.597.com/img/v2/resume/steel02.png" />
								<div class="reExamList">
									<p><b>示例一:社会岗位</b><span>6年销售经验，曾获得“最佳销售员工”荣誉，对市场、渠道和经销商管
理有丰富经验.</span></p>
									<p><b>示例二:技术岗位</b><span>A2驾照,5年金杯车驾驶经验，2年出租车经验,熟悉重庆以及各周边路况,
安全驶行超过20000公里.</span></p>
								</div>
							</div>
						</dd>
					</dl>					
				</div>
			</div>
		</div>
		<div class="create-item step2" style="zoom:1;">
			<dl class="clearfix sub-item" style="margin-top:0px;">
				<dt>&nbsp;</dt>
				<dd>
					<input type="hidden" name="typeofphone" id="typeofphone" value="1">
					<button id="btnSubmit" style="margin:10px 0 20px 0;" type="button" class="sub-btn">注册</button>
				</dd>
			</dl>
		</div>
		<!--/-->		
	</div>
	</form>
	<form  id="frmUserLogin"  action="/api/web/person.api" method="post">
	<input type="hidden" name="act" value="login">
	<input type="hidden" name="txtAppType" value="1">
	<input type="hidden" name="txtUserType" value="1">	
	<div class="dgBox ajaxlogin" id="loginContainer" style="display:none; margin-top:10px;">
		<div class="form">
			<div class="formMod">
				<div class="l">&nbsp;</div>
				<div class="r"><span class="formText"><input style="width:200px;" type="text" class="text " id="id" name="txtUsername" placeHolder="用户名/手机号/邮箱" /></span></div>
				<div class="clear"></div>
			</div>
			<div class="formMod" style="margin-bottom:10px;">
				<div class="l">&nbsp;</div>
				<div class="r"><span class="formText"><input style="width:200px;" type="password" class="text " id="pass"  name="txtPassword" placeHolder="密码" /></span></div>
				<div class="clear"></div>
			</div>
			<div class="formMod" style="margin-bottom:10px;">
				<div class="l">&nbsp;</div>
				<div class="r">
					<span class="tipTxt"><a href="/person/findpassword.htm">忘记密码</a></span>
					<span class="formChb"><label for="dl"><input type="checkbox" class="chb" id="dl" name="chkSave"  value="true"/><span>自动登录</span></label></span></div>
				<div class="clear"></div>
			</div>
			<div class="formBtn" style="text-align:left;"><a href="javascript:void(0);" class="btn1 btnsF16" id="btnLogin">登录</a></div>
		</div> 
		<div class="txt" style="text-align:left;">
			<div class="subT">
				<span>还没有注册账号？</span>
				<a href="/person/register.html" target="_blank">立即注册</a>
			</div>
			<p style="margin:10px 0;">或用以下账号登录哟：</p>
			<div style="overflow:hidden;"><a id="btnQQlogin" target="_blank" href="javascript:void(0)" ><img src="http://cdn.597.com/img/p/login/qqicon.png" /></a></div>
		</div>
		<div class="clear"></div>
	</div>
	</form>

<script type="text/javascript">
var salaryItems = [{value:'',label:'请选择'}];
	salaryItems.push({value:'1000',label:'1000及以上'});
	salaryItems.push({value:'1500',label:'1500及以上'});
	salaryItems.push({value:'2000',label:'2000及以上'});
	salaryItems.push({value:'2500',label:'2500及以上'});
	salaryItems.push({value:'3000',label:'3000及以上'});
	salaryItems.push({value:'4000',label:'4000及以上'});
	salaryItems.push({value:'5000',label:'5000及以上'});
	salaryItems.push({value:'6000',label:'6000及以上'});
	salaryItems.push({value:'7000',label:'7000及以上'});
	salaryItems.push({value:'8000',label:'8000及以上'});
	salaryItems.push({value:'9000',label:'9000及以上'});
	salaryItems.push({value:'10000',label:'10000及以上'});
	salaryItems.push({value:'12000',label:'12000及以上'});
	salaryItems.push({value:'15000',label:'15000及以上'});
	salaryItems.push({value:'20000',label:'20000及以上'});
	salaryItems.push({value:'30000',label:'30000及以上'});

var degreeitems = [{value:'',label:'请选择'}];
	degreeitems.push({value:'01',label:'小学'});
	degreeitems.push({value:'02',label:'初中'});
	degreeitems.push({value:'03',label:'高中'});
	degreeitems.push({value:'04',label:'中技/中专'});
	degreeitems.push({value:'05',label:'专科'});
	degreeitems.push({value:'06',label:'本科'});
	degreeitems.push({value:'07',label:'硕士'});
	degreeitems.push({value:'08',label:'博士'});
	degreeitems.push({value:'09',label:'博士后'});

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

window.phonerepeat = {
	data:null,
	dialog:null,
	origin:'apply'
};

jpjs.use('@validator, @checkBoxer, @select, @dateFormat, @confirmBox, @jobDater, @areaSimple, @form, @jobDialog, @jobsort, @calling, @areaMulitiple, @jpCommon, @checkLogin', 
function(m){
	
	var $ = m['jpjob.areaSimple'].extend(
			m['jpjob.jobForm'], m['jpjob.jobDialog'], m['jpjob.jobsort'], m['jpjob.calling'], m['jpjob.areaMulitiple'], m['product.jpCommon'],
			m['jpjob.jobValidate'], m['jpjob.actions']
		),
		jobDater = m['jpjob.jobDater'],
		checkBoxer = m['widge.checkBoxer'],
		select = m['widge.select'],
		confirmBox = m['widge.overlay.confirmBox'],
		dialog = m['product.checkLogin'].dialog,
		DateFormat = m['tools.dateFormat'],
		verifier = m['module.verifier'],
		validator = m['widge.validator.form'];
	
	$('input, textarea', dialog.get('element')).placeHolder();
	
	var sexNameBoxer = new checkBoxer({
			element: $('.icon-sex'),
			className: 'icon-sex-checked',
			multiple: false,
			hoverClassName: null,
			disabledClassName: null,
			disabledSelClassName: null
		}),
		workBoxer = new checkBoxer({
			element: $('.icon-chck'),
			className: 'icon-chck-checked',
			hoverClassName: null,
			disabledClassName: null,
			disabledSelClassName: null
		}),
		dropSalarySel = new select({
			trigger: $('#dropSalary'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidSalary',
			dataSource: salaryItems,
			maxHeight: 200,
			zIndex: 10000,
			selectCallback: {
				isDefault: true
			}
		}),
		dropdegreeSel = new select({
			trigger: $('#highestdegree'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hiddegree',
			dataSource: degreeitems,
			zIndex: 10000,
			selectCallback: {
				isDefault: true
			}
		}),
		dropApplyStatus = new select({
			trigger: $('#dropApplyStatus'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidApplyStatus',
			selectedIndex:1,
			dataSource: applyStatusItems,
			zIndex: 10000,
			selectCallback: {
				isDefault: true
			}
		}),
		dropAccessionTime = new select({
			trigger: $('#dropAccessionTime'),
			className: 'dropv2_select',
			align: {baseXY: [0, '100%-1']},
			selectName: 'hidAccessionTime',
			selectedIndex:1,
			dataSource: accessionTimeItems,
			zIndex: 10000,
			selectCallback: {
				isDefault: true
			}
		});

		var D = m['widge.overlay.jpDialog'],
			telPhoneRegDialog = new D({
				idName: 'telphone_repeat',
				title: '手机号被占用',
				isAjax: true,
				initHeight: 270,
				zIndex: 10000,
				width: 420,
				close: 'x'
			});
		
		window.phonerepeat.dialog = new D({
			idName: 'telphone_repeat',
			title: '手机号被占用',
			isAjax: true,
			initHeight: 270,
			zIndex: 10000,
			width: 420
		});
		
		
		
	dropApplyStatus.on("change", function(e) {
		if (e.value == notconsider) {
			form.removeRules('hidAccessionTime');
			dropAccessionTime.get("trigger").hide();
			dropAccessionTime.setSelectedIndex(0);
		} else {
			if (dropAccessionTime.get("trigger").is(":hidden")) {
				form.resetElement($('input[name=hidAccessionTime]')[0]);
				form.addRules(hidAccessionTimeRules);
				form.addErrorMessages(hidAccessionTimeMsg);
				dropAccessionTime.get("trigger").show();
			}
		}
	});

	// 验证规则		
	var groups = {
			birthYMD: 'inpBirthYear inpBirthMonth inpBirthDate',
			startYMD: 'inpStartYear inpStartMonth',
			ApplyGroup : 'hidApplyStatus hidAccessionTime'
		},
		startYMDRules = {
			inpStartYear: 'number',
			inpStartMonth: 'number'
		},
		startYMDMsg = {
			inpStartYear: '<em></em><i></i>请选择年份',
			inpStartMonth: '<em></em><i></i>请选择月份'
		},
		keepBlur = [
			'inpStartYear', 'inpStartMonth'
		].join(' '),
		rules = {
			txtUsername: {
				required: true,
				match: /^[\u4e00-\u9fa5]+$/i,
				range: [2, 6]
			},
			radSex: 'required',
			inpBirthYear: 'number',
			inpBirthMonth: 'number',
			inpBirthDate: 'number',			
			hidCurArea: 'required',
			hidApplyStatus : 'required',
			txtMobilePhone: 'required mobile',
			hiddegree:'required',
			txtJoinOffice: {
				required:true,
				range:[2,20]
			},
			hidJobSortExpect: 'required',
			hidAreaMultiple: 'required',
			hidSalary: 'required'			
		},
		errorMsg = {
			txtUsername: {
				required: '<em></em><i></i>请填写真实姓名',
				match: '<em></em><i></i>2-6个汉字',
				range: '<i></i>2-6个汉字'
			},
			radSex: '<em></em><i></i>请选择性别',
			inpBirthYear: '<em></em><i></i>请选择年份',
			inpBirthMonth: '<em></em><i></i>请选择月份',
			inpBirthDate: '<em></em><i></i>请选择日期',			
			hidCurArea: '<em></em><i></i>请选择现居住地',
			txtMobilePhone: {
				required: '<em></em><i></i>请输入手机号码',
				mobile: '<em></em><i></i>手机号码格式不正确'
			},
			hiddegree:'<em></em><i></i>请填写最高学历',
			hidApplyStatus : '<em></em><i></i>请选择求职状态',
			txtJoinOffice:{
				required:'<em></em><i></i>请填写意向职位',
				range:'<em></em><i></i>2-20个字'
			},
			hidJobSortExpect:'<em></em><i></i>请选择职位类别',
			hidAreaMultiple:'<em></em><i></i>请选择工作地区',
			hidSalary:'<em></em><i></i>请选择期望薪资'			
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

	if (!dropAccessionTime.get("trigger").is(":hidden")) {
		form.addRules(hidAccessionTimeRules);
		form.addErrorMessages(hidAccessionTimeMsg);
	}


	// 下拉控件时触发验证
	dropSalarySel.on('change', function(e){
		form.checkElement($('input[name=hidSalary]')[0]);
	});

	dropdegreeSel.on('change', function(e){
		form.checkElement($('input[name=hiddegree]')[0]);
	});	

	$('#jobsort').jobsort({
		isLimit:true,type:'multiple',max:5,hddName:'hidJobSortExpect',
		onSelect: function(){
			form.checkElement($('input[name=hidJobSortExpect]')[0]);
		}
	});

	$('#jobsort').setJobSortValue('{$jobClassId}');
	
	$("#dropAreaMultiple").multiplearea({
		isLimit:true,hddName:'hidAreaMultiple',max:5,selectItems:[{$cityid}],
		onSelect: function(){
			form.checkElement($('input[name=hidAreaMultiple]')[0]);
		}
	});
	/*
	$('#dropCalling').calling({
		isLimit:true,hddName:'hidCalling',max:5,unLimitedLevel:3
	});
	*/
	form.on('focus', change);
	form.on('blur', change);
	form.on('pass', change);
	form.on('invalid', change);
	form.on('remote', change);
	form.on('clearItem', function(e){
		e.label.removeClass(allLabelCls);
	});

	sexNameBoxer.on('select', function(e){
		form.checkElement(e.target[0]);
	});
	
	var inpStartYear = $('#inpStartYear'),
		inpStartMonth = $('#inpStartMonth');
		
	function checkWorkTime(f){
		inpStartYear.prop('disabled', f);
		inpStartMonth.prop('disabled', f);
		if(f){
			form.removeRules(startYMDRules);
			form.removeErrorMessages(startYMDMsg);
			form.removeGroup(groups);
			form.resetElement(inpStartYear);
			form.resetElement(inpStartMonth);
			inpStartYear.val('年份');
			inpStartMonth.val('月');
			jobDater.update('Start');
		} else {
			form.addRules(startYMDRules);
			form.addErrorMessages(startYMDMsg);
			form.addGroup(groups);
		}
	}
	checkWorkTime(false);
	workBoxer.on('select', function(e){
		if(e.index === 0){
			checkWorkTime(this.isChecked(e.index));
		}
	});
	dialog.after('hide', function(){
		destory();
	});
	
	function destory(){
		sexNameBoxer.destory();
		workBoxer.destory(); 
		dropSalarySel.destory();
		dropdegreeSel.destory();
		form.destory();
	}

	jobDater.bind({
		id: "Birth",
		dateEntry: [0, 1, 2],
		size: 20,
		min: -75,
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
		},
		noSelect: function(e){
			form.checkElement($(e.target)[0]);
		}
	});
	
	$('#curArea').singleArea({
		hddName:'hidCurArea',
		showLevel:3,
		controlClass: 'zIndex', 
		onSelect:function(){
			form.checkElement($('#hidCurArea')[0]);
		},
		noSelect:function(){
			form.checkElement($('#hidCurArea')[0]);
		}
	});

	var phoneValidatorStatus = parseInt(''),
		phoneCoder = (function(){
		var disabledClass = 'isDisabled',
			txtMobilePhone = $('#txtMobilePhone'),
			phone = null,
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
				url: "/api/web/user.api?act=mobileRepeat",
				async: true,
				data: {
					_txtMobile: function() { 
						return txtMobilePhone.val(); 
					}
				},
				callback: function(e){
					phoneCoder.isRemoteClass =  true; //e.success === "true";
					var newphone = txtMobilePhone.val();
					//if( e.success === "false" && phone != newphone) {
					if(e.fairsuccess == "false"){
					  phone = newphone;
					  telPhoneRegDialog.setContent({
						  content:'/personregister/fairphonerepeat/txtPhone-'+phone+'',
						  isOverflow: true
					  }).show().off('loadComplete').on('loadComplete', function(){
						  var self = this;
						  $('input', this.get('element')).placeHolder(); 
							var frmUserLogin = $(this.query("#frmUserLogin")).validate({
								rules:{
									txtUsername:{
										required:true
									},
									txtPassword:{
										required:true
									}
								},
								messages:{
									txtUsername:{
										required:'请输入用户名 <span class="tipArr"></span>'
									},
										txtPassword:{
										required:'请输入密码<span class="tipArr"></span>'
									}
								},
								errorClasses:{
									txtUsername:{
										required:'tipLayErr tipw120'
									},
									txtPassword:{
										required:'tipLayErr tipw120'
									}
								},
								tipClasses:{
									txtUsername:'tipLayTxt tipw120',
									txtPassword:'tipLayTxt tipw120'
								},
								errorElement:'span',
								errorPlacement:function(error,element){
									element.closest('div.formMod').find('.tipPos .tipLay').empty().append(error);
								},
								success:function(label){
									label.text(" ");
								}
							});
							var login ={
								init:function() {
									self.query("#id,#pass").keydown(function(e){
										if(e.keyCode == 13){
											self.query("#btnLogin").click();
										}
									});
									self.query('#btnLogin').click(function(){
										$(this).submitForm({ beforeSubmit: $.proxy(frmUserLogin.form, frmUserLogin),success:function(result){
									 		if(result.status<1){
												 $.message(result.msg,{title:'登录失败 '});
											}else{
									 			//self.query('#btnLogin').closeDialog();
												$.anchorMsg(result.msg,{title: "登录成功", icon: "success"});
												window.location.href=window.location.href;
											}
										},clearForm:false});			 	
									});
								}
							};
							
							login.init();
						  
					  }).off('closeX').on('closeX', function(){
							this.getMask().setLevel(9999);
					  });
					}else{
						if( e.status === -1) {
							phone = newphone;
							window.phonerepeat.dialog.setContent({content:'/person/applyMobile.html?mobile='+newphone,isOverflow: true}).show().off('loadComplete').on('loadComplete', function(){
								var _self = this;
								this.query('#continueBtn').one('click', function(){
									_self.hide();
									_self.getMask().setLevel(9999);
								});
								$("#typeofphone").val(0);
							});
						}else{
							$("#typeofphone").val(1);
						}
					}
					return true;
				}
			},
			remoteErrorMsg = '<em></em><i></i>该手机号已被注册，尝试<a href="/person/findpassword.htm">找回密码</a>',
			remoteSuccessMsg = '<i></i>',
			codeRemoteURL = {
				url: "url",
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
				range: [6, 6],
				remote: codeRemoteURL
			},
			codeErrorMessages = {
				required: '<em></em><i></i>请填写验证码',  
				number: '<em></em><i></i>请填写数字',
				range: '<em></em><i></i>验证码为6位',
				remote: '<em></em><i></i>请输入正确的验证码'
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
					btnMobile.addClass(disabledClass).html('更换号码');
					this.toggleBindStatus(true);
					this.remote(true);
				},
				enabled: function(){
					this.clearCode();
					this.toggleValidCode(true);
					this.toggleModBtn(true);
					txtMobilePhone.val('').prop('disabled', false);
					btnMobile.removeClass(disabledClass).html('暂不修改');
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
						txtMobilePhoneLabel.removeClass(warningLabelCls).addClass(successLabelCls).html('&nbsp;');
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
							//this.toggleValidCode(true);
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
						//this.toggleValidCode(false);
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
						data = {mobilePhone:txtMobilePhone.val()};
					$.getJSON('/certification/sendmsg/', data ,function(result){
						if(!result.status){
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
		if (phoneValidatorStatus) {
			phoneCoder.disabled();
		} else {
			phoneCoder.remote();
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
	
	$('#btnSubmit').click(function(){
		var typeofphone=$('#typeofphone').val();
		var MobilePhone=$('#txtMobilePhone').val();

		if(typeofphone==0){
			window.phonerepeat.dialog.setContent({content:'/person/applyMobile.html?mobile='+MobilePhone,isOverflow: true}).show().off('loadComplete').on('loadComplete', function(){
				var _self = this;
				this.query('#continueBtn').one('click', function(){
					_self.hide();
					_self.getMask().setLevel(9999);
				});
				$("#typeofphone").val(0);
			});
			return;			
		}
		var btn = $(this);
		window.phonerepeat.data = null;
		form.submit({
			callback: function(valid){
				if(phoneCoder.isSubmit){
					delete phoneCoder.isSubmit;
					return;
				}
				btn.submitForm({
					beforeSubmit: valid,
					data:{},
					success: function(result){
						delete phoneCoder.isSubmit;
						if(result && result.status<1){
							confirmBox.alert(result.msg, null, { title: '创建简历失败' });
							return;
						}			
						phoneCoder.checkPhone(true);
						var pWidth = 70,
							fontWidth = 18,
							data = result.data;	
							window.phonerepeat.data = data;				
							//confirmBox.timeBomb(result.msg, {
							//	name: 'success',
							//	width: pWidth + result.msg.length * fontWidth,
							//	callback: function(){
									dialog.setContent({
										//content: '/personregister/modifylogin/jobflag-jobmg12n60-flag-'+data.flag+'-personid-'+data.personid+''+'-v-'+Math.random(),
										content: '/person/applyReg.html?type={$type}&jid={$_jid}&mobile='+data.txtMobilePhone,
										isOverflow: true
									}).resetSize(586, 'auto').show().off('loadComplete').on('loadComplete', function(){
										destory();
									});

								//}
							//});
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
			e.label.addClass(successLabelCls);
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

	$('#tabRegister').click(function(){
		$(this).parent().hide().siblings().show();		
		$('#loginContainer').hide();
		$('#logintitle').hide();
		$('#registerContainer').show();
		$('#registertitle').show();
	});

	$('#tabLogin').click(function(){
		$(this).parent().hide().siblings().show();		
		$('#registerContainer').hide();
		$('#registertitle').hide();
		$('#loginContainer').show();
		$('#logintitle').show();
	});
	$('.reExamBtn').toggle(function(){
		$(this).addClass('reExamBtnCut');						
		$(this).html('收起示例');
		$('.rsExample').slideDown('slow');
	},function(){
		$(this).removeClass('reExamBtnCut');
		$(this).html('不知道怎么填？看看示例');
		$('.rsExample').slideUp('slow');	
	})

	factory($);
	function factory($){
		//$.focusblur('input.text');
		var frmUserLogin = $("#frmUserLogin").validate({
			rules:{
				txtUsername:{
					required:true
				},
				txtPassword:{
					required:true
				}
			},
			messages:{
				txtUsername:{
					required:'请输入用户名 <span class="tipArr"></span>'
				},
					txtPassword:{
					required:'请输入密码<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				txtUsername:{
					required:'tipLayErr tipw120'
				},
				txtPassword:{
					required:'tipLayErr tipw120'
				}
			},
			tipClasses:{
				txtUsername:'tipLayTxt tipw120',
				txtPassword:'tipLayTxt tipw120'
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.closest('div.formMod').find('.tipPos .tipLay').empty().append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});
	
		var login = {
			init:function() {
				$("#id,#pass").keydown(function(e){
					if(e.keyCode == 13){
						$("#btnLogin").click();
					}
				});
				$('#btnLogin').click(function(){				
					var pWidth = 70, fontWidth = 18;
					$(this).submitForm({ beforeSubmit: $.proxy(frmUserLogin.form, frmUserLogin),success:function(result){
						if(result.status<1){
							confirmBox.timeBomb(result.msg, {
								name: 'fail',
								width: pWidth + result.msg.length * fontWidth
							});
						}
						else{
							//dialog.hide();
							confirmBox.timeBomb(result.msg, {
								name: 'success',
								width: pWidth + result.msg.length * fontWidth
							});
							
							var callback =  ajaxLoginCallback;
							if(typeof callback !=''&& typeof callback !='undefined'&&typeof callback =='function') {
								callback();
							}
						}
					},clearForm:false});
				});
				$('#btnQQlogin').click(function(){
					$(this).attr('href',"http://api.597.com/qq/login.api");
				});
			}
		};
		login.init();
	}
});
</script>
