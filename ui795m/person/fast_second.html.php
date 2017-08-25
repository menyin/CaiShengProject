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
	<title>597人才网触屏版_完善教育及工作经历</title>
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
		.tip { margin-left: 0; padding:0 0 10px 20px; border-bottom:1px solid #ddd; font-size: 18px;}
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

	<section class="layout">
	<form id="formBasic" name="formBasic"  method="post" action="fast_resumes.php">
	<input type="hidden" name="source" value="1" />
	<input type="hidden" name="resumeType" value="1">
	<input type="hidden" name="rid" value="{$rid}">
	<input type="hidden" name="act" value="save" />
		<div class="part form">
			<h3 class="tip">最高学历</h3>
			<dl>
				<dt>学历</dt>
				<input type="hidden" id="hidEduDegree" name="selEduBackGround" value="{$person[maxEdu]}">
				<dd id="ddEduDegree"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl>
				<dt>学校</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEduSchool"></label><input type="text" class="text" id="txtEduSchool" name="txtEduName" value="{$person[eduName]}" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl>
				<dt>专业</dt>
				<dd>
					<div class="mod"><label class="txtLabel" for="txtEduMajorDesc"></label><input type="text" class="text" id="txtEduMajorDesc" name="txtEduSpecialty" value="{$person[eduSpecialty]}" placeholder="未填写"></div>
				</dd>
			</dl>
			<dl>
				<dt>入学时间</dt>
				<input type="hidden" id="EntryTime" value="{$_edu[eduDateStart]}">
				<input type="hidden" id="ymStartTime1955582" name="ymStartTime1955582" value="">
				<dd id="entryTime"><p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>
			<dl class="tipsR">
				<dt>毕业时间</dt>
				<input type="hidden" id="LeavTime" value="{$_edu[eduDateEnd]}">
				<input type="hidden" id="ymEndTime1955582" name="ymEndTime1955582" value="">
				<dd id="leavTime">
					<div class="modTip" id="modLst">
						<input type="checkbox" id="chkEduIsInSchool" onclick="checkNow(this)" name="chkEduIsInSchool" value="1">
						<label for="chkEduIsInSchool" class="tit">目前在读</label>
					</div>
				<p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
			</dl>	
		</div>
		<div class="part form">
			<h3 class="tip">最近一份工作经历</h3>	
			<dl>
				<dt>职位</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtWorkOffice" name="txtWorkOffice" value=""/></div>
				</dd>
			</dl>
			<dl>
				<dt>公司名称</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtWorkName" name="txtWorkName" value="" maxlength="30"/></div>
				</dd>
			</dl>
			<dl>
				<dt>入职时间</dt>
				<input type="hidden" id="hddEntryTime" name="hddEntryTime" value=""/>
				<dd id="startEntryTime"></dd>
			</dl>
			<dl class="tipsR quit">
                <dt>离职时间</dt>
               <input type="hidden" id="hddLeavTime" name="hddLeavTime" value=""/>
                <dd id="startLeavTime">
                    <div class="modTip" id="modLst">
                          <input type="checkbox" id="chkWorkNow" onclick="checkNow1(this)" name="chkWorkNow" value="1">
                          <label class="tit" for="chkWorkNow">至今</label>
                    </div>
                <p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
            </dl>
            <dl class="txtBox" id="dlContent">
				<dt>工作描述</dt>
				<dd>
					<div class="mod"><textarea id="txtContent" name="txtContent" class="textarea">{$_work[workContent]}</textarea></div>
				</dd>
			</dl>
			</div>
		<div class="btns"><a class="btn4 btnsF16" id="btnSave1" href="javascript:void(0)">完成并投递</a><!-- <a class="btn3 btnsF16 btnR" id="btnSave2" href="javascript:void(0);">继续完善</a> --></div>
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
	//最高学历
	maxEdu='{$person[maxEdu]}';
	if(maxEdu){
		r_maxEdu=maxEdu;
	}else{
		r_maxEdu=null;
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
		$('#ddEduDegree').dropdown({items:degreeItems,selectValue:r_maxEdu,onSelect:function(v,n){
		$('#hidEduDegree').val(v);
	}});
	//入学时间，毕业时间
	$('#entryTime').date({yearSection:'1960-2015',isCanNull:true,isHiddenDay:true,selectDate:null,onChange:function(date){
		$('#EntryTime').val(date);
	}});
	if(('' == '') && ('0' !='0')){
		$('#leavTime').date({yearSection:'1960-2015',isCanNull:true,isHiddenDay:true,isDisabled:true,selectDate:null,onChange:function(date){
			$('#LeavTime').val(date);
		}});
		$('#chkEduIsInSchool').attr('checked','true');
		//checkNow($('#chkEduIsInSchool'));
	}
	else{
		$('#leavTime').date({yearSection:'1960-2020',isCanNull:true,isHiddenDay:true,selectDate:null,onChange:function(date){
			$('#LeavTime').val(date);
		}});
	}
	//入职时间，离职时间
	$('#startEntryTime').date({yearSection:'1960-2015',isCanNull:true,isHiddenDay:true,selectDate:null,onChange:function(date){
		$('#hddEntryTime').val(date);
	}});
	if(('' == '2014-04') && ('0' !='2603255')){
		$('#startLeavTime').date({yearSection:'1960-2015',isCanNull:true,isHiddenDay:true,isDisabled:true,selectDate:null,onChange:function(date){
			$('#hddLeavTime').val(date);
		}});
		$('#chkWorkNow').attr('checked','true');
		//checkNow($('#chkWorkNow'));
	}
	else{
		$('#startLeavTime').date({yearSection:'1960-2015',isCanNull:true,isHiddenDay:true,selectDate:null,onChange:function(date){
			$('#hddLeavTime').val(date);
		}});
	}
	$('#btnSave1,#btnSave2').click(function(){
		var start_time = $('#EntryTime').val();
		var end_time = $('#LeavTime').val();
		var school = $('#txtEduSchool').val();
		var major = $('#txtEduMajorDesc').val();
		var duty = $('#txtEduDuty').val();
		var edu_detail = $('#taEduDetail').val();
		var eduDegree = $('#hidEduDegree').val();
		$('#ymStartTime1955582').val(start_time);
		$('#ymEndTime1955582').val(end_time);
		if(eduDegree==''){
			showTip('请选择最高学历！');
			$('#hidEduDegree').focus();
			return;
		}
		if(school==''){
			showTip('请填写学校名称！')
			$('#txtEduSchool').focus();
			return;
		}
		if(school.length<4 || school.length>30){
			showTip('学校名称限定4-30个字！');
			$('#txtEduSchool').focus();
			return;
		}
		if(major==''){
			showTip('请填写专业名称！')
			$('#txtEduMajorDesc').focus();
			return;
		}
		if(start_time.length==0 || start_time=='00-00'){
			showTip('请选择入学时间！');
			return;
		}
		if(start_time.indexOf('-00')>0){
			showTip('请选择正确格式的入学时间！');
			return;
		}
		if(end_time=='00-00'){
			$('#LeavTime').val(null);
		}
		//工作经历
		var station = $('#txtWorkOffice').val();
		var company_name = $('#txtWorkName').val();
		var entrytime = $('#hddEntryTime').val();
		var endtime = $('#hddLeavTime').val();

		if(station==''||typeof(station)=='undefined'){
			showTip('请填写职位名称！');
			$('#txtWorkOffice').focus();
			return;
		}
		if(company_name==''||typeof(company_name)=='undefined'){
			showTip('请填写公司名称！');
			$('#txtWorkName').focus();
			return;
		}
		if(company_name.length<4 || company_name.length>30){
			showTip('公司名称限定4-30个字！');
			$('#txtWorkName').focus();
			return;
		}
		if(entrytime.length==0 || entrytime=='00-00'){
			showTip('请选择入职时间！');
			return;
		}
		if(entrytime.indexOf('-00')>0){
			showTip('请选择正确格式的入职时间！');
			return;
		}
		if(endtime=='00-00'){
			$('#hddLeavTime').val(null);
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
	});
});
function success(json){
	if(json.status>0){
		$.getJSON('/api/web/job.api?act=join&jid={$_jid}', '' , function(data) {
			if (data) {
				if (data.status<1 && data.status==-100){
					alert("简历注册成功，但因简历不完整，所以职位申请失败！");
					window.location.href = '/person/fast_resumes.html?act=third&jid={$_jid}&rid='+json.rid;
					//window.history.go(-1);
					return;
				}else if (data.status<1){
					alert("简历注册成功，但因("+data.msg+')申请失败！');
					window.location.href = '/person/fast_resumes.html?act=third&jid={$_jid}&rid='+json.rid;
					return;
				}
				if (data.status>=1){
					alert("简历注册成功，职位申请成功！");
					window.location.href = '/person/fast_resumes.html?act=third&jid={$_jid}&rid='+json.rid;
					/*if('{$_jid}'){
						window.location.href = '/job.html?id={$_jid}';
					}else{
						window.location.href = '/company/';
					}*/
					
					return;
				}
			}
		});
	}else{
		alert(json.msg);
		return;
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
	$('#ddCurState').dropdown({items:[{value:'',name:''},{name:'有工作经验',value:'1'},{name:'在读/应届生',value:'2'}],selectValue:r_workstate}); 
}
function checkNow(obj){
	var $this = $(obj);
	//var $li = $this.closest('li');
	if($this.attr("checked")==true||$this.attr("checked")=="checked"){
		//$this.removeAttr('checked');
		//$li.removeClass('check').find('.jpFntWes').html('&#xf10c;');
		$('#leavTime').setDateDisabled(true);
		$('#LeavTime').val('');
	}else{
		//$this.attr('checked','checked');
		//$li.addClass('check').find('.jpFntWes').html('&#xf058;');
		$('#leavTime').setDateDisabled(false);
	}
}
function checkNow1(obj){
	var $this = $(obj);
	if($this.attr("checked")==true||$this.attr("checked")=="checked"){
		//$this.removeAttr('checked');
		//$li.removeClass('check').find('.jpFntWes').html('&#xf10c;');
		$('#startLeavTime').setDateDisabled(true);
		$('#hddLeavTime').val('');
	}else{
		//$this.attr('checked','checked');
		//$li.addClass('check').find('.jpFntWes').html('&#xf058;');
		$('#startLeavTime').setDateDisabled(false);
	}
}
function showTip(tipTxt){
	$('.topTip').find('span').html(tipTxt).end().css('top',0);
	setTimeout(function(){
		$('.topTip').css('top','-46px');
	},3000);
}

</script>
</body>
</html>
