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
	<title>597人才网触屏版_快速注册</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.singlearea.js?v=20141221"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.multiplearea.js?v=20141220"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.date.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20141227" />
	<style>
		.login { position: absolute; right: 80px; top: 15px; color: #fff;font-size: 12px;}
		.login a {color: #fff; text-decoration: underline;}
		.form {margin-top: 10px; }
		.form dl dt,.form dl dd {font-size: 14px;}
		.form dl {padding-left: 100px;}
		.form dl dt {width: 90px;}
		.form option {padding-top: 5px;}
		.tip {text-align: left; margin:10px 0 0 10px;}
		header a.back {width: 135px; height: 40px; background: url(http://cdn.597.com/m/images/logo.png) no-repeat 5px 5px; -webkit-background-size: 130px 37px; background-size: 130px 37px;}
		#msg {left:0; color:#ED1B24;  padding:0 0 8px; position: relative;}
		#msg a {color:#ED1B24; margin-left: 5px; font-weight: bold;}
		#ddSex .Lselect,#ddEduDegree .Lselect,#ddCurState .Lselect,#ddSalary .Lselect {width:100%;}
	</style>
</head>
<body>
<div class="content" id="content">
	<section class="reg_F">
    	<a class="logo2" href="/"></a>
        <a href="/person/login.html?jid={$_jid}" class="detBtn">登录</a>
		<!-- <div class="cent"><p><b>快速注册</h1></b></div> -->
		<div class="login" style="display: block;">
			<span class="login_txt">已有账号，请点此</span>
			<!-- <a href="javascript:;" id="r_login_btn">登录</a>
			<a href="javascript:;" id="r_reg_btn" style="display: none">注册</a> -->
		</div>
    </section>
<style>
.reg_F{
  height: 40px;
  background-color: #E8352E;
  border-bottom: 1px solid #E8352E;
  overflow: hidden;
}
.reg_F .logo2 {
  width: 135px;
  height: 40px;
  background: url(http://cdn.597.com/m/images/logo.png)no-repeat;
  float: left;
  margin-left: 10px;
  background-size: 135px 40x;
}
.reg_F a.detBtn {
  color: #fff;
  height: 30px;
  line-height: 30px;
  position: absolute;
  right: 8px;
  top: 8px;
  width: 60px;
  text-align: center;
  z-index: 3;
  background: #e85d4e;
  text-align: center;
  border: 1px solid #d62e1b;
  border-radius: 3px;
}
</style>
	
	<div class="tip">只要30秒，快速填写求职信息！</div>
	<section class="layout">
	<form id="formBasic" name="formBasic"  method="post" action="/api/web/m_person.api">
	<input type="hidden" name="source" value="1" />
	<input type="hidden" name="resumeType" value="1">
	<input type="hidden" name="act" value="applyReg" />
	<input type="hidden" name="hidJobSortExpect" value="{$job[jobClassId]}">
	<input type="hidden" name="hidSalary" value="{$job[jobSalaryMax]}">

		<div class="part form">
			<dl class="othMod phoneMod" >
				<dt>手机号码</dt>
				<dd>
					<div class="mod"><input type="text" id="txtMobilePhone" v="{$resumeInfo[mobile]}" modvalue="" maxlength="11"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" name="txtMobilePhone" class="text textGray" placeholder=""></div>
					<div id="msg" ></div>
					<a class="btn3 btnsF14" id="btnSendValidate" href="javascript:void(0)">免费发送验证码</a>
				</dd>
			</dl>
			<dl class="othMod" id="divValiMobile">
				<dt>验证码</dt>
				<dd>
				<div class="mod"><input type="text" class="text" id="txtValidateCode" name="txtMobileCode" maxlength="4"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"></div>
				</dd>
			</dl>
			<dl class="othMod">
				<dt>登录密码</dt>
				<dd>
					<div class="mod"><input type="password" class="text" id="txtPwd" name="txtPassword" /></div>
				</dd>
			</dl>
			<dl>
				<dt>邮箱</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEmail"></label><input type="text" class="text" id="txtEmail" value="" name="txtEmail" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl>
				<dt>QQ号码</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="QQ"></label><input type="text" class="text" id="txtQQ" value="" name="txtQQ" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl class="tipsR name">
				<dt>姓名</dt>
				<dd>
					<div class="mod" style="padding-right:0;"><input type="text" class="text" id="txtUserName" name="txtUsername"  placeholder="2-6个汉字" onchange="checkuser();" maxlength="6" /></div>
				</dd>
			</dl>
			<dl>
				<dt>性别</dt>
				<input type="hidden" id="radSex" name="radSex" />
				<dd id="ddSex"></dd>
			</dl>
			<dl>
				<dt>出生日期</dt>
				<input type="hidden" id="txtBirthday" name="txtBirthday">
				<dd id="birthday"></dd>
			</dl>
			<dl>
				<dt>最高学历</dt>
				<input type="hidden" id="hidEduDegree" name="hiddegree">
				<dd id="ddEduDegree"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt>目前状态</dt>
				<input type="hidden" id="workstate" name="radWorkState"/>
				<dd id="ddCurState"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt id="dtWorkTime"><!--{if $resumeInfo[workstate]==1}-->参加工作<!--{else}-->毕业时间<!--{/if}--></dt>
				<input type="hidden" id="hddStartWork" name="hddStartWork" >
				<dd id="startWork"><p class="Ltab"> <span class="LitemTab Lselect"><span class="LselectedSelect _datetitle" style="display: none;"></span></span></p></dd>
			</dl>
			<dl>
				<dt>现居住地</dt>
				<input type="hidden" id="hddCurArea" name="hidCurArea"/>
				<dd id="cur_area"></dd>
			</dl>
			<dl>
				<dt>详细地址</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtAddress"></label><input type="text" class="text" id="txtAddress" value="" name="txtAddress" placeholder="示例：xx省xx市xx县/区xx村/街道xx号"></div>
				</dd>
			</dl>
			<dl class="tipsR name">
				<dt>意向职位</dt>
				<dd>
					<div class="mod" style="padding-right:0;"><input type="text" class="text" name="txtJoinOffice" id="txtJoinOffice" value="{$job[jname]}"/></div>
				</dd>
			</dl>
			<dl>
				<dt>意向地点</dt>
				<dd><a href="javascript:void(0);" class="scrBtn" id="area"><i class="jpFntWes">&#xf105;</i><p id="areaText">{$jobArea}</p></a></dd>
				<input type="hidden" id="hidAreaMultipleId" name="hidAreaMultiple" value="{$job['jobAreaId']}" />
			</dl>
			<dl class="tipsR">
				<dt>期望薪资</dt>
				 <input type="hidden" id="hidSalary" name="txtJoinSalary">
				<dd id="ddSalary">
				<div class="modTip" style="display:none;">
					<input type="checkbox" id="chkSalary" name="chkSalary" value="1">
					<label for="chkSalary" class="tit">不低于此薪资</label>
					<input type="checkbox" id="hideSalary" name="chkSalaryShow" value="1">
					<label for="hideSalary" class="tit">面议</label>
				 </div>
				<p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt>介绍自己</dt>
				<dd>
					<div class="mod">
					<label class="txtLabel" for="txtAppraise"></label><textarea id="txtAppraise" name="txtApprise" class="textarea" style="height: 50px;"></textarea></div>
				</dd>
			</dl>
			<!-- <dl class="othMod">
				<dt>确认密码</dt>
				<dd>
					<div class="mod"><input type="password" class="text" id="txtPwdRepeat" name="txtRepeatPassword" /></div>
				</dd>
			</dl> -->
			<dl style="display:none;">
			 	<dt>求职状态</dt>
			 	<input type="hidden" id="hddjobstate" name="hidApplyStatus" value="1">
			 	<dd id="ddjobstate"></dd>
			 </dl>
			 <dl id="accesstimecontainer"  style="display:none;">
			 	<dt>到岗时间</dt>
			 	<input type="hidden" id="hddaccessiontime" name="hidAccessionTime" value="1">
			 	<dd id="ddaccessiontime"></dd>
			 </dl>
			</div>
		<div class="btns"><a class="btn4 btnsF16" id="btnSave1" href="javascript:void(0)">下一步，完善教育及工作经历</a><!-- <a class="btn3 btnsF16 btnR" id="btnSave2" href="javascript:void(0);">继续完善</a> --></div>
		</form>
	</section>
	<!--{template footer}-->
</div>
<div class="dropBg" id="dropBg">&nbsp;</div>
<div class="topTip"><em>!</em><span></span></div>
<script type="text/javascript">
var $wHt = $(document).height();
$(document).ready(function(){
	$.focusblur('input.text');
	//性别
	$('#ddSex').dropdown({items:[{name:'请选择',value:'0'},{name:'男',value:'1'},{name:'女',value:'2'}],selectValue:null,onSelect:function(v,n){
		$('#radSex').val(v);
	}});
	//工作状态
	calcWorkState();
	$('#cur_area').area({showLevel:3,selectArea:null,onSelect:function(id,name){
		$('#hddCurArea').val(id);
	}});
	$('#native').area({showLevel:3,selectArea:null,onSelect:function(id,name){
		$('#hddNativePlace').val(id);
		/*$('#hddNativePlaceName').val(name);*/
	}});
	$('#birthday').date({yearSection:'{$ageMinYear}-{$ageMaxYear}',isCanNull:false,isHiddenDay:false,selectDate:null,onChange:function(date){
		$('#txtBirthday').val(date);
	}});
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
		$('#ddEduDegree').dropdown({items:degreeItems,selectValue:null,onSelect:function(v,n){
		$('#hidEduDegree').val(v);
	}});
	//求职状态
	var jobstateitems = [{value:'',name:''}];
			jobstateitems.push({value:'1',name:'不在职，正在找工作'});
			jobstateitems.push({value:'2',name:'在职，打算近期换工作'});
			jobstateitems.push({value:'3',name:'在职，有更好的机会才考虑'});
			jobstateitems.push({value:'4',name:'不考虑换工作'});
		$('#ddjobstate').dropdown({items:jobstateitems,selectValue:1,onSelect:function(v,n){
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
	//入职时间
	var accessiontimeitems = [{name:'',value:''}];
			accessiontimeitems.push({value:'1',name:'立即到岗'});
			accessiontimeitems.push({value:'2',name:'7天内到岗'});
			accessiontimeitems.push({value:'3',name:'15天内到岗'});
			accessiontimeitems.push({value:'4',name:'1月内到岗'});
			accessiontimeitems.push({value:'5',name:'2月内到岗'});
			accessiontimeitems.push({value:'6',name:'3月内到岗'});
			accessiontimeitems.push({value:'7',name:'半年内到岗'});
		$('#ddaccessiontime').dropdown({items:accessiontimeitems,selectValue:1,onSelect:function(v,n){
		$('#hddaccessiontime').val(v);
	}});	
	//收起展开
	$('#btnOpenUp').toggle(function(){
		$('#dlNativePlace,#dlMarriage,#dlPolitical,#dlStature,#dlAvoirdupois,#dlguoji').show();
		$(this).html('<b class="jpFntWes">&#xf102;</b>收起');
	},function(){
		$('#dlNativePlace,#dlMarriage,#dlPolitical,#dlStature,#dlAvoirdupois,#dlguoji').hide();
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
	$('#startWork').date({yearSection:'1960-2020',isCanNull:false,isHiddenMon:false,isHiddenDay:true,selectDate:null,onChange:function(date){
		$('#hddStartWork').val(date);
	}});
	joinSalary='{$job[jobSalaryMax]}';
	if(joinSalary){
		r_joinSalary = joinSalary;
	}else{
		r_joinSalary=null;
	}
	var salaryItems = [{value:'',name:''}];
			salaryItems.push({value:'1000',name:'1000及以上'});
			salaryItems.push({value:'1500',name:'1500及以上'});
			salaryItems.push({value:'2000',name:'2000及以上'});
			salaryItems.push({value:'2500',name:'2500及以上'});
			salaryItems.push({value:'3000',name:'3000及以上'});
			salaryItems.push({value:'4000',name:'4000及以上'});
			salaryItems.push({value:'5000',name:'5000及以上'});
			salaryItems.push({value:'6000',name:'6000及以上'});
			salaryItems.push({value:'7000',name:'7000及以上'});
			salaryItems.push({value:'8000',name:'8000及以上'});
			salaryItems.push({value:'9000',name:'9000及以上'});
			salaryItems.push({value:'10000',name:'10000及以上'});
			salaryItems.push({value:'12000',name:'12000及以上'});
			salaryItems.push({value:'15000',name:'15000及以上'});
			salaryItems.push({value:'20000',name:'20000及以上'});
			salaryItems.push({value:'30000',name:'30000及以上'});

	$('#ddSalary').dropdown({items:salaryItems,selectValue:null,onSelect:function(v,n){
		$('#hidSalary').val(v);
	}});
	/*if('' != '{$job[jodAreaId]}'){
		$('#areaText').addClass('black').html('{$jobArea}');
	}*/

	$('#area').multiplearea({type:'click',limit:5,selectItems:'{$job[jobAreaId]}',selectItemsName:'{$jobArea}',onSelect:function(data){
		$('#hidAreaMultipleId').val(data.value);
		if(data.value==''){
			$('#areaText').removeClass('black').html('{$jobArea}');
		}
		else{
			$('#areaText').addClass('black').html(data.name);
		}
	}});
	//发送验证码
	$('#btnSendValidate').click(function(){
		sendMsg();
	});
	function sendMsg(){
		var phone = $('#txtMobilePhone').val();
		if(phone==''){
			showTip('请填写手机号码！');
			return;
		}
		var pattern = /^[1]\d{10}$/;
		if(!pattern.exec(phone)){
			showTip('手机号码格式不正确！');
			return;
		}
		/*var msg = $('#msg').html();
		if(!msg){
			$.getJSON("/api/web/user.api", { act: 'mobileRepeat', _txtMobile: $("#txtMobilePhone").val()}, function(json) {
				if(json.status==-1){
					//alert('该手机已经被注册，请换一个手机再注册！');
					$('#msg').html('该号码已被其他账号占用，继续操作可以从其他账号解绑并清除！')
					return;
				}else if(json.status==0){
					alert('手机格式错误！');
					return;
				}
			});
		}else{*/
			$('#btnSendValidate').unbind('click');
			var data={mobilePhone:$('#txtMobilePhone').val()};
			$.getJSON("/api/web/user.api", { act: 'mobile_check_reg', _txtMobile: $("#txtMobilePhone").val(),type:"reg"}, function(json){
				if(json.status==-99){
					$('#btnSendValidate').bind("click",function(){
						sendMsg();
					});
					$('#msg').html('该号码已被其他账号占用，请尝试 <a href="/person/login.html?jid={$_jid}">登录</a>！');
					return;
				}else if(json.status<0 && json.status!=-99){
					$('#btnSendValidate').bind("click",function(){
						sendMsg();
					});
					showTip(json.msg);
					return;
				}
				$('#btnSendValidate').addClass('btn3Unclick').html('<i>120</i>秒后再获取');
				showTip("短信已经发出，请耐心等待！");
				$('#txtValidateCode').focus();
				//$('#divValiMobile').show();
				interval = window.setInterval(countdown,1000);
			});
		//}
	}

	$('#btnSave1,#btnSave2').click(function(){
		var txtJoinOffice = $('#txtJoinOffice').val();
		var user_name = $('#txtUserName').val();
		var sex = $('#radSex').val();
		var txtBirthday=$('#txtBirthday').val();
		var txtValidateCode=$('#txtValidateCode').val();
		var txtMobilePhone=$('#txtMobilePhone').val();
		if(txtMobilePhone==''){
			showTip('请输入手机号码！');
			$('#txtMobilePhone').focus();
			return;
		}
		var pattern = /^[1]\d{10}$/;
		if(!pattern.exec(txtMobilePhone)){
			showTip('手机号码格式不正确！');
			$('#txtMobilePhone').focus();
			return;
		}if(txtValidateCode==''){
			showTip('请输入手机验证码！');
			$('#txtValidateCode').focus();
			return;
		}
		var password = $('#txtPwd').val();
		if(password=='' ||typeof(password)=='undefined'){
			showTip('请填写密码！');
			$('#txtPwd').focus();
			return;
		}
		var patten = new RegExp('^[0-9]+$');
		if (/^(\d)\1+$/.test(password)){ 
			showTip('密码不能为同一个数字！');
			$('#txtPwd').focus();
			return;
		}
		var str = password.replace(/\d/g, function($0, pos) {
			return parseInt($0)-pos;
		});
		if (/^(\d)\1+$/.test(str)){
			showTip('密码不能为连续数字！');
			$('#txtPwd').focus();
			return;
		}
		str = password.replace(/\d/g, function($0, pos) {
			return parseInt($0)+pos;
		});
		if (/^(\d)\1+$/.test(str)){
			showTip('密码不能为连续数字！');
			$('#txtPwd').focus();
			return;
		}
		if(user_name==''||typeof(user_name) == 'undefined'){
			showTip('请填写真实姓名！');
			$('#txtUserName').focus();
			return;
		}
		if(user_name!='') {
			reg = /^[\u4E00-\u9FA5]{2,6}$/;
			if(!reg.test(user_name)){
				showTip('请输入2-6个汉字！');
				$('#txtUserName').focus();
				return;
			}
		}
		if(sex==''||typeof(sex)== 'undefined'){
			showTip('请选择性别！');
			return;
		}
		if(txtBirthday==''||typeof(txtBirthday)== 'undefined'){
			showTip('请选择出生日期！');
			return;
		}
		var hidEduDegree=$('#hidEduDegree').val();
		if(hidEduDegree==''){
			showTip('请选择最高学历！');
			return;
		}
		if($('#workstate').val()==''){
			showTip('请选择目前状态！');
			return;
		}
		if($('#hddStartWork').val()==''){
			showTip('请选择参加工作或者毕业时间！');
			return;
		}
		if($('#hddCurArea').val()==''){
			showTip('请选择现居住地！');
			return;
		}		
		if(txtJoinOffice==''||typeof(txtJoinOffice) == 'undefined'){
			showTip('请填写意向职位！');
			$('#txtJoinOffice').focus();
			return;
		}
		if($('#hidAreaMultipleId').val()==''){
			showTip('请选择工作地点！');
			return;
		}
		if($('#hidSalary').val()==''){
			showTip('请选择期望薪资！');
			return;
		}
		if($('#txtAppraise').val()==''){
			showTip('请输入自我评价！');
			$('#txtAppraise').focus();
			return;
		}
		/*if(password2==''||typeof(password2)=='undefined'){
			showTip('请填写确认密码！');
			$('#txtPwdRepeat').focus();
			return;
		}
		if(password!=password2){
			showTip('两次密码输入不一致！');
			$('#txtPwdRepeat').focus();
			return;
		}
		if($('#hidAreaMultipleId').val()==''){
			showTip('请选择工作地点！');
			return;
		}*/
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
function success(json){
	if(json.status>0){
		window.location.href = '/person/fast_resumes.html?act=second&jid={$_jid}&rid='+json.status;
		/*$.getJSON('/api/web/job.api?act=join&jid={$_jid}', '' , function(data) {
			if (data && data.status) {
				if (data.status<1 && data.status==-100){
					alert("简历注册成功，但因简历不完整，所以职位申请失败！");
					window.history.go(-1);
					return;
				}else if (data.status<1){
					alert("简历注册成功，但因("+data.msg+')申请失败！');
					window.history.go(-1);
					return;
				}
				if (data.status>=1){
					alert("简历注册成功，职位申请成功！");
					if('{$_jid}'){
						window.location.href = '/job.html?id={$_jid}';
					}else{
						window.location.href = '/company/';
					}
					
					return;
				}
			}
		});*/
	}else{
		showTip(json.msg);
		return;
	}
}
function checkuser(){
	var user_name = $('#txtUserName').val();
	reg = /^[\u4E00-\u9FA5]{2,6}$/;
	if(!reg.test(user_name)){
		showTip('请输入2-6个汉字！');
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
	$('#ddCurState').dropdown({items:[{value:'',name:''},{name:'有工作经验',value:'1'},{name:'在读/应届生',value:'2'}],selectValue:r_workstate}); 
}
var timer;
function showTip(tipTxt){
	clearTimeout(timer);
	$('.topTip').find('span').html(tipTxt).end().css('top',0);
	timer = setTimeout(function(){
		$('.topTip').css('top','-46px');
	},3500);
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
			contact.sendMsg();
		});
	}
}



</script>
</body>
</html>
