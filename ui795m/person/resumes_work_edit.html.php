
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
	<title>597人才网触屏版_工作经历</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.jobsort.js?v=20140317"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.calling.js?v=20140320"></script>
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
		<a href="/person/resumes.html?act=work" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b><!--{if $_work}-->编辑工作经历<!--{else}-->新增工作经历<!--{/if}--></h1></b></div>
	</header>
	<!--{/if}-->
	<section class="layout">
		<form id="formWork" name="formWork" action="/api/web/person.api" method="post">
		<input type="hidden" name="act" value="work_save" />
		<input type="hidden" name="workid" id="workid" value="{$_work[workid]}" />
		<div class="part form">
			<dl>
				<dt><font color="red">*</font>公司名称</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtWorkName" name="txtWorkName" value="{$_work[workName]}" maxlength="30" autocomplete="off"/></div>
				</dd>
			</dl>
			<dl>
                <dt><font color="red">*</font>公司规模</dt>
                <input type="hidden" id="hddComSize" name="hidWorkComSize" value="{$_work[WorkComSize]}">
                <dd id="ddComSize">
                <p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
            </dl>
            <dl>
                <dt><font color="red">*</font>公司性质</dt>
                <input type="hidden" id="hddComProperty" name="hidWorkComProperty" value="{$_work[WorkComProperty]}">
                <dd id="ddComProperty"><p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
            </dl>
			<dl>
				<dt><font color="red">*</font>所属行业</dt>
				<dd>
				<input type="hidden" id="hidCalling" name="hidExceptCalling" value="{$_work[workIndustry]}"/>
				<input type="hidden" id="hidCallingId" name="hidCallingExpect" value="{$_work[workIndustryId]}"/>
				<a href="javascript:void(0);" class="scrBtn" id="calling"><i class="jpFntWes">&#xf105;</i><p id="callingText">请选择</p>
				</a>
				</dd>
			</dl>
			<dl>
				<dt><font color="red">*</font>入职时间</dt>
				<input type="hidden" id="hddEntryTime" name="ymStartTime1955582" value="{$_work[workDateStart]}"/>
				<dd id="startEntryTime"></dd>
			</dl>
			<dl class="tipsR quit">
                <dt><font color="red">*</font>离职时间</dt>
               <input type="hidden" id="hddLeavTime" name="ymEndTime1955582" value="{$_work[workDateEnd]}"/>
                <dd id="startLeavTime">
                    <div class="modTip" id="modLst">
                          <input type="checkbox" id="chkWorkNow" onclick="checkNow(this)" name="chkWorkNow" value="1" <!--{if ($_work[workid] && !$_work[workDateEnd])}-->checked<!--{/if}-->>
                          <label class="tit" for="chkWorkNow">至今</label>
                    </div>
                <p class="Ltab"> <span class="LitemTab Lselect"></span></p></dd>
            </dl>
            <dl>
				<dt><font color="red">*</font>职位名称</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtWorkOffice" name="txtWorkOffice" value="{$_work[workOffice]}" autocomplete="off"/></div>
				</dd>
			</dl>
			<dl style="display:none;">
				<dt>职位类型</dt>
				<input type="hidden" id="hidWorkJobType" name="hidWorkJobType" value="{$_work[WorkJobType]}"/>
				<dd id="ddJobType"></dd>
			</dl>
			<dl style="display:none;">
				<dt>职位类别</dt>
				<input type="hidden" id="hidJobsort" name="hidExceptJob" value="{$_work[workJobClass]}"/>
				<input type="hidden" id="hidJobsortId" name="hidJobSortExpect" value="{$_work[workJobClassId]}"/>
				<dd><a href="javascript:void(0);" class="scrBtn" id="jobsort"><i class="jpFntWes">&#xf105;</i><p id="jobsortText">请选择</p></a></dd>
			</dl>
			<dl style="display:none;">
				<dt>岗位级别</dt>
				<input type="hidden" id="jobLevel" name="hidWorkJobLevel" value="{$_work[WorkJobLevel]}"/>
				<dd id="ddJobLevel"></dd>
			</dl>
			<!-- <dl>
				<dt><font color="red">*&nbsp;</font>所属部门</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtWorkUnit" name="txtWorkUnit" value="{$_work[workUnit]}"/></div>
				</dd>
			</dl> -->
			<dl class="tipsR quit" style="display:none;">
				<dt>税前月薪</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtSalaryMonth" name="txtWorkSalary" value="{$_work[workSalary]}" placeholder="元/月"/></div>
					<div class="modTip" id="modLst">
							<input type="checkbox" id="chkWorkSalarySecrecy" name='radWorkHideSalary' value="1" <!--{if $_work[workHideSalary]=='1'}-->checked<!--{/if}-->/>
							<label for="chkWorkSalarySecrecy" class="tit">保密</label>
					</div>
				</dd>
			</dl>
			<dl class="txtBox" id="dlContent">
				<dt><font color="red">*</font>工作描述</dt>
				<dd>
					<div class="mod"><textarea id="txtContent" name="txtContent" class="textarea" autocomplete="off">{$_work[workContent]}</textarea></div>
				</dd>
			</dl>
			<dl class="txtBox" id="dlLeaveReason">
				<dt>离职原因</dt>
				<dd>
					<div class="mod"><textarea id="txtWorkLeaveReason" name="txtWorkLeaveReason" class="textarea" autocomplete="off">{$_work[WorkLeaveReason]}</textarea></div>
				</dd>
			</dl>

			<!-- <dl class="footBtn">
				<dt></dt>
				<dd><a href="javascript:void(0)" id="btnOpenUp"><b class="jpFntWes">&#xf103;</b>补充信息(非必填项)</a></dd>
			</dl> -->
		</div>
		<div class="btns"><p><a class="btn4 btnsF16 <!--{if $_work[workid]>0}-->btnL<!--{/if}-->" id="btnSave2" href="javascript:void(0);">保存</a><a class="btn3 btnsF16 btnR"  id="btnDel" href="javascript:void(0);" <!--{if !$_work[workid]}--> style="display:none;" <!--{/if}-->>删除</a></p></div>
		</form>
	</section>
	<!--{if $app['isNewApp']!="yes"}-->
	<!--{template footer}-->
	<!--{/if}-->
</div>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	s_date='{$_work[workDateStart]}';
	if(s_date){
		sdate=s_date;
	}else{
		sdate=null;
	}
	e_date='{$_work[workDateEnd]}';
	if(e_date){
		edate=e_date;
	}else{
		edate=null;
	}
	$('#startEntryTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:sdate,onChange:function(date){
		$('#hddEntryTime').val(date);
	}});
	if(('' == '2014-04') && ('0' !='2603255')){
		$('#startLeavTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,isDisabled:true,selectDate:'2014-04',onChange:function(date){
			$('#hddLeavTime').val(date);
		}});
		$('#chkWorkNow').attr('checked','true');
		checkNow($('#chkWorkNow'));
	}
	else{
		$('#startLeavTime').date({yearSection:'1960-{$curYear}',isCanNull:false,isHiddenDay:true,selectDate:edate,onChange:function(date){
			$('#hddLeavTime').val(date);
		}});
	}
	if('1' == '0'){
		$('#chkWorkSalarySecrecy').attr('checked','true');
		//checkSecrecy($('#chkWorkSalarySecrecy'));
	}
	
	$.focusblur('input.text');
	$.focusblur('textarea.textarea');
	//收起展开
	$('#btnOpenUp').toggle(function(){
		$('#dlContent,#dlLeaveReason').show();
		$(this).html('<b class="jpFntWes">&#xf102;</b>收起');
	},function(){
		$('#dlContent,#dlLeaveReason').hide();
		$(this).html('<b class="jpFntWes">&#xf103;</b>补充信息(非必填项)');
	});

	
	workJobClass='{$_work[workJobClass]}';
	if(workJobClass){
		workJob_Class=workJobClass;
	}else{
		workJob_Class='请选择';
	}
	$('#jobsortText').addClass('black').html(workJob_Class);

	workIndustry='{$_work[workIndustry]}';
	if(workIndustry){
		work_Industry=workIndustry;
	}else{
		work_Industry='请选择';
	}
	$('#callingText').addClass('black').html(work_Industry);

	$('#jobsort').jobsort({type:'click',isSingle:true,selectItems:'{$_work[workJobClassId]}',onSelect:function(data){
		$('#hidJobsort').val(data.name);
		$('#hidJobsortId').val(data.value);
		if(data.value==''){
			$('#jobsortText').removeClass('black').html('请选择');
		}
		else{
			$('#jobsortText').addClass('black').html(data.name);
		}
	}});
	$('#calling').calling({type:'click',isSingle:true,selectItems:'{$_work[workIndustryId]}',onSelect:function(data){
		$('#hidCalling').val(data.name);
		$('#hidCallingId').val(data.value);
		if(data.value==''){
			$('#callingText').removeClass('black').html('请选择');
		}
		else{
			$('#callingText').addClass('black').html(data.name);
		}
	}});
	//职位类型
	jobtype='{$_work[WorkJobType]}';
	if(jobtype){
		r_jobtype=jobtype;
	}else{
		r_jobtype=null;
	}
	var jobtypeItems = [{value:'',name:''}];
			jobtypeItems.push({value:'1',name:'全职'});
			jobtypeItems.push({value:'2',name:'兼职'});
			jobtypeItems.push({value:'5',name:'实习'});
			$('#ddJobType').dropdown({items:jobtypeItems,selectValue:r_jobtype,onSelect:function(v,n){
			$('#hidWorkJobType').val(v);
	}});
	//岗位级别
	var joblevelItems = [{value:'',name:''}];
			joblevelItems.push({value:'1',name:'实习/见习'});
			joblevelItems.push({value:'2',name:'普通员工'});
			joblevelItems.push({value:'3',name:'高级/资深（非管理岗）'});
			joblevelItems.push({value:'4',name:'部门经理/主管'});
			joblevelItems.push({value:'5',name:'总监/副总裁'});
			joblevelItems.push({value:'6',name:'总裁/总经理'});
	
	WorkJobLevel='{$_work[WorkJobLevel]}';
	if(WorkJobLevel){
		r_WorkJobLevel=WorkJobLevel;
	}else{
		r_WorkJobLevel=null;
	}
	$('#ddJobLevel').dropdown({items:joblevelItems,selectValue:r_WorkJobLevel,onSelect:function(v,n){
		$('#jobLevel').val(v);
	}});

	WorkComSize='{$_work[WorkComSize]}';
	if(WorkComSize){
		r_WorkComSize=WorkComSize;
	}else{
		r_WorkComSize=null;
	}
	var comSizeItems = [{value:'',name:''}];
			comSizeItems.push({value:'1',name:'50人以下'});
			comSizeItems.push({value:'2',name:'51-100人'});
			comSizeItems.push({value:'3',name:'101-500人'});
			comSizeItems.push({value:'4',name:'501-1000人'});
			comSizeItems.push({value:'5',name:'1000人以上'});
		$('#ddComSize').dropdown({items:comSizeItems,selectValue:r_WorkComSize,onSelect:function(v,n){
		$('#hddComSize').val(v);
	}});
	
	WorkComProperty='{$_work[WorkComProperty]}';
	if(WorkComProperty){
		r_WorkComProperty=WorkComProperty;
	}else{
		r_WorkComProperty=null;
	}
	var comPropertyItems = [{value:'',name:''}];
			comPropertyItems.push({value:'1',name:'国有企业'});
			comPropertyItems.push({value:'2',name:'外商独资、外企办事处'});
			comPropertyItems.push({value:'3',name:'中外合资(合营、合作)'});
			comPropertyItems.push({value:'4',name:'民营、私营公司'});
			comPropertyItems.push({value:'5',name:'上市公司'});
			comPropertyItems.push({value:'6',name:'股份制企业'});
			comPropertyItems.push({value:'7',name:'集体企业'});
			comPropertyItems.push({value:'8',name:'乡镇企业'});
			comPropertyItems.push({value:'9',name:'行政机关'});
			comPropertyItems.push({value:'10',name:'社会团体、非盈利机构'});
			comPropertyItems.push({value:'11',name:'事业单位'});
			comPropertyItems.push({value:'12',name:'跨国企业(集团)'});
			comPropertyItems.push({value:'13',name:'其他'});
		$('#ddComProperty').dropdown({items:comPropertyItems,selectValue:r_WorkComProperty,onSelect:function(v,n){
			$('#hddComProperty').val(v);
	}});
	
	//删除
	$('#btnDel').click(function(){
		var workid = $('#workid').val();
		$.post('/api/web/person.api',{act:'work_del',workid:workid},function(data){
			if(data.status==1){
				alert(data.msg);
				window.location.href = '/person/resumes.html?act=work';
			}else{
				alert(data.msg);
			}
		},'json');
	});
	//保存
	$('#btnSave1,#btnSave2').click(function(){
		var company_name = $('#txtWorkName').val();
		var comSize = $('#hddComSize').val();
		var comProperty = $('#hddComProperty').val();
		var calling = $('#hidCallingId').val();
		var entrytime = $('#hddEntryTime').val();
		var endtime = $('#hddLeavTime').val();
		var station = $('#txtWorkOffice').val();
		var jobsortId = $('#hidJobsortId').val();
		var joblevel = $('#jobLevel').val();
		var jobsort = $('#hidJobsort').val();	
		var salary_month = $('#txtSalaryMonth').val();
		var content = $('#txtContent').val();
		var workJobType = $('#hidWorkJobType').val();

		if(company_name==''||typeof(company_name)=='undefined'){
			alert('请填写公司名称！');
			return;
		}
		if(company_name.length<4 || company_name.length>30){
			alert('公司名称限定4-30个字！');
			return;
		}
		if(comSize==''){
			alert('请选择公司规模！');
			return;
		}
		if(comProperty==''){
			alert('请选择公司性质！');
			return;
		}
		if(calling.length==0){
			alert('请选择行业类别！');
			return;
		}
		if(entrytime.length==0 || entrytime=='00-00'){
			alert('请选择开始时间！');
			return;
		}
		if(entrytime.indexOf('-00')>0){
			alert('请选择正确格式的开始时间！');
			return;
		}
		if(endtime=='00-00'){
			$('#hddLeavTime').val(null);
		}
		if(station==''||typeof(station)=='undefined'){
			alert('请填写职位名称！');
			return;
		}
		/*if(workJobType==''||typeof(workJobType)=='undefined'){
			alert('请填写职位类型！');
			return;
		}
		if(jobsort.length==0){
			alert('请选择职位类别！');
			return;
		}
		
		if(joblevel==''||typeof(joblevel)=='undefined'){
			alert('请选择岗位级别');
			return;
		}
		if(salary_month==''||typeof(salary_month)=='undefined'){
			alert('请填写月薪');
			return;
		}*/
		
		/*if( (!$('#chkWorkNow').is(':checked')) && (leavtime.length==0 || leavtime=='00-00')){
			alert('请选择结束时间或至今');
			return;
		}
		if( (!$('#chkWorkNow').is(':checked')) && (leavtime.indexOf('-00')>0)){
			alert('请选择正确格式的结束时间');
			return;
		}*/
		if(content==''||typeof(content)=='undefined'){
			alert('请输入工作描述！');
			return;
		}
		if(content.length>2000){
			alert('内容不超过2000字！');
			return;
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
	});
});
/*
function checkSecrecy(obj){
	var $this = $(obj);
	var $li = $this.closest('li');
	if($li.hasClass('check')){
		$this.removeAttr('checked');
		$li.removeClass('check').find('.jpFntWes').html('&#xf10c;');
	}else{
		$this.attr('checked','checked');
		$li.addClass('check').find('.jpFntWes').html('&#xf058;');
	}
	
}*/
function checkNow(obj){
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
function success(json){
	if(json.status>0){
		alert(json.msg);
		window.location.href = '/person/resumes.html?act=work';
	}else{
		alert(json.msg);
	}
}
</script>
</body>
</html>
