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
	<title>597人才网触屏版_求职意向</title>
	<meta name="revisit-after" content="1 days"/>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.dropdown.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.jobsort.js?v=20141220"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.multiplearea.js?v=20141220"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.calling.js?v=20141220"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js?v=20141223"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m.js?v=20140313"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040111" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140402" />
</head>
<body>
<div class="content" id="content">
	<!--{template header}-->
	<header class="pubtop">
		<a href="/person/resumes.html" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" id="btnSave1" class="detBtn">保存</a>
		<div class="cent"><p><b>修改求职意向</h1></b></div>
	</header>
	<form id="formBasic" action="/api/web/person.api" method="post">
	<input type="hidden" name="act" value="join_save" />
	<input type="hidden" name="resume_id" value="{$uid}" />
		<div class="part form">
			<dl class="tipsR">
				<dt>意向职位</dt>
				<dd>
					<div class="mod"><input type="text" class="text" id="txtStation" name="txtJoinOffice" value="{$resumeInfo[joinOffice]}" placeholder="未填写"/></div>
					<div class="modTip" id="modTip">
						<input type="checkbox"  id="chkParttime" name="chkParttime" value="1" <!--{if $resumeInfo[isparttime]==1}-->checked<!--{/if}-->/>
						<label class="tit" for="chkParttime">接受兼职工作</label>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>工作类型</dt>
				<input type="hidden" id="hidJobtype" name="radJoinType" value="{$resumeInfo[joinType]}"/>
				<dd id="ddJobType"></dd>
			</dl>
			
			<dl>
				<dt>职位类别</dt>
				<dd><a href="javascript:void(0);" class="scrBtn" id="jobsort"><i class="jpFntWes">&#xf105;</i><p id="jobsortText">请选择</p></a></dd>
				<input type="hidden" id="hidJobsort" name="hidExceptJob" value="{$resumeInfo[joinJobClass]}" />
				<input type="hidden" id="hidJobsortId" name="hidJobSortExpect" value="{$resumeInfo[joinJobClassId]}" />
			</dl>
			<dl>
				<dt>期望行业</dt>
				<dd><a href="javascript:void(0);" class="scrBtn" id="calling"><i class="jpFntWes">&#xf105;</i><p id="callingText">请选择</p></a></dd>
				<input type="hidden" id="hidCalling" name="hidExceptCalling" value="{$resumeInfo[joinIndustry]}"/>
				<input type="hidden" id="hidCallingId" name="hidCallingExpect" value="{$resumeInfo[joinIndustryId]}"/>
			</dl>
			<dl>
				<dt>工作地点</dt>
				<dd><a href="javascript:void(0);" class="scrBtn" id="area"><i class="jpFntWes">&#xf105;</i><p id="areaText">请选择</p></a></dd>
				<input type="hidden" id="hidAreaMultiple" name="hidBasicArea" value="{$resumeInfo[joinCity]}" />
				<input type="hidden" id="hidAreaMultipleId" name="hidCurAreaBasic" value="{$resumeInfo[joinCityId]}" />
			</dl>
			<dl class="tipsR">
				<dt>岗位级别</dt>
				<input type="hidden" id="hidJoblevel" name="hidJoblevel" value="{$resumeInfo[Joblevel]}">
				<dd id="ddJobLevel">
				<div class="modTip">
					<input type="checkbox" id="chkJobLevel" name="chkJobLevel" value="1" <!--{if $resumeInfo[chkJoblevel]==1}-->checked<!--{/if}-->>
					<label for="chkJobLevel" class="tit">不低于该级别</label>
				</div>
				<p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>
			
			<dl class="tipsR">
				<dt>期望薪资</dt>
				 <input type="hidden" id="hidSalary" name="txtJoinSalary" value="{$resumeInfo['joinSalary']}">
				<dd id="ddSalary">
				<div class="modTip">
					<input type="checkbox" id="chkSalary" name="chkSalary" value="1" <!--{if $resumeInfo[chksalary]==1}-->checked<!--{/if}--> >
					<label for="chkSalary" class="tit">不低于此薪资</label>
					<input type="checkbox" id="hideSalary" name="radHideSalary" value="1" <!--{if $resumeInfo[hideSalary]==1}-->checked<!--{/if}-->>
					<label for="hideSalary" class="tit">面议</label>
				 </div>
				<p class="Ltab"><span class="LitemTab Lselect"></span></p></dd>
			</dl>

			<!--
			<dl>
				<dt><font color="red">*&nbsp;</font>到岗时间</dt>
				<input type="hidden" id="selJoinTime" name="selJoinTime" value="{$resume[joinTime]}"  />
				<dd id="JoinTime"></dd>
			</dl>
			<dl>
				<dt>自我描述</dt>
				<dd>
					<input type="text" class="text" id="txtContent" name="txtContent" value="{$resume[joinEvaluate]}" placeholder="未填写">
				</dd>
			</dl> -->
		</div>
		<div class="btns"><p><a class="btn4 btnsF16" id="btnSave2" href="javascript:void(0);">保存</a></p></div>
		</form>
	
	<!--{template footer}-->

</div>
<div class="dropBg" id="dropBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$.focusblur('input.text');
	if('{$resumeInfo[joinJobClass]}'){
		job_sort='{$resumeInfo[joinJobClass]}';
	}else{
		job_sort='请选择';
	}
	if('{$resumeInfo[joinIndustry]}'){
		join_industry='{$resumeInfo[joinIndustry]}';
	}else{
		join_industry='请选择';
	}
	if('{$resumeInfo[joinCity]}'){
		join_City='{$resumeInfo[joinCity]}';
	}else{
		join_City='请选择';
	}
	if('' != '0207'){
		$('#jobsortText').addClass('black').html(job_sort);
	}
	if('' != '01'){
		$('#callingText').addClass('black').html(join_industry);
	}
	if('' != '0300'){
		$('#areaText').addClass('black').html(join_City);
	}

	if('1' == ''){
		$('#chkJobLevel').attr('checked','true');
		//checkSecrecy($('#chkWorkSalarySecrecy'));
	}
	if('1' == ''){
		$('#chkSalary').attr('checked','true');
		//checkSecrecy($('#chkWorkSalarySecrecy'));
	}
	if('{$resumeInfo[joinType]}'){
		r_joinType='{$resumeInfo[joinType]}';
	}else{
		r_joinType=null;
	}
	//职位类型
	var jobtypeItems = [{value:'',name:''}];
			jobtypeItems.push({value:'1',name:'全职'});
			jobtypeItems.push({value:'2',name:'兼职'});
			jobtypeItems.push({value:'3',name:'实习'});
		$('#ddJobType').dropdown({items:jobtypeItems,selectValue:r_joinType,onSelect:function(v,n){
		$('#hidJobtype').val(v);
	}});
	//到岗时间
	/*var selJoinTimeItems = [{value:'',name:''}];
			selJoinTimeItems.push({value:'0',name:'随时到岗'});
			selJoinTimeItems.push({value:'10',name:'三天内到岗'});
			selJoinTimeItems.push({value:'20',name:'一周内到岗'});
			selJoinTimeItems.push({value:'30',name:'两周内到岗'});
			selJoinTimeItems.push({value:'40',name:'三周内到岗'});
			selJoinTimeItems.push({value:'50',name:'一个月内到岗'});
			selJoinTimeItems.push({value:'60',name:'三个月内到岗'});
			selJoinTimeItems.push({value:'70',name:'半年内到岗'});
		$('#JoinTime').dropdown({items:selJoinTimeItems,selectValue:'{$resumeInfo[joinTime]}',onSelect:function(v,n){
		$('#selJoinTime').val(v);
	}});*/
	//岗位级别
	Joblevel='{$resumeInfo[Joblevel]}';
	if(Joblevel){
		r_Joblevel=Joblevel;
	}else{
		r_Joblevel=null;
	}
	var joblevelItems = [{value:'',name:''}];
			joblevelItems.push({value:'1',name:'实习/见习'});
			joblevelItems.push({value:'2',name:'普通员工'});
			joblevelItems.push({value:'3',name:'高级/资深（非管理岗）'});
			joblevelItems.push({value:'4',name:'部门经理/主管'});
			joblevelItems.push({value:'5',name:'总监/副总裁'});
			joblevelItems.push({value:'6',name:'总裁/总经理'});
	
	$('#ddJobLevel').dropdown({items:joblevelItems,selectValue:r_Joblevel,onSelect:function(v,n){
		$('#hidJoblevel').val(v);
	}});
	joinSalary='{$resumeInfo[joinSalary]}';
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

	$('#ddSalary').dropdown({items:salaryItems,selectValue:r_joinSalary,onSelect:function(v,n){
		$('#hidSalary').val(v);
	}});
	$('#jobsort').jobsort({type:'click',limit:5,selectItems:'{$resumeInfo[joinJobClassId]}',onSelect:function(data){
		$('#hidJobsortId').val(data.value);	
		$('#hidJobsort').val(data.name);
		if(data.value==''){
			$('#jobsortText').removeClass('black').html('请选择');
		}
		else{
			$('#jobsortText').addClass('black').html(data.name);
		}
	}});
	$('#calling').calling({type:'click',limit:5,selectItems:'{$resumeInfo[joinIndustryId]}',onSelect:function(data){
		$('#hidCallingId').val(data.value);
		$('#hidCalling').val(data.name);
		if(data.value==''){
			$('#callingText').removeClass('black').html('请选择');
		}
		else{
			$('#callingText').addClass('black').html(data.name);
		}
	}});
	$('#area').multiplearea({type:'click',limit:5,selectItems:'{$resumeInfo[joinCityId]}',selectItemsName:'{$resumeInfo[joinCity]}',onSelect:function(data){
		$('#hidAreaMultipleId').val(data.value);
		$('#hidAreaMultiple').val(data.name);
		if(data.value==''){
			$('#areaText').removeClass('black').html('请选择');
		}
		else{
			$('#areaText').addClass('black').html(data.name);
		}
	}});

	//保存
	$('#btnSave1,#btnSave2').click(function(){
		var job_type = $('#hidJobtype').val();
		//var job_type = $('#hidJobtype').find('select').val();
		var station = $('#txtStation').val();
		var jobsort = $('#hidJobsortId').val();
		var calling = $('#hidCallingId').val();
		var area = $('#hidAreaMultipleId').val();
		var Joblevel=$('#hidJoblevel').val();
		var salary = $('#hidSalary').val();
		if(station==''){
			alert('请填写意向职位！');
			return;
		}
		if(job_type==''||typeof(job_type) == 'undefined' || job_type<1){
			alert('请选择工作类型！');
			return;
		}		
		if(jobsort==''){
			alert('请选择职位类别！');
			return;
		}
		if(calling==''){
			alert('请选择期望行业！');
			return;
		}
		if(area==''){
			alert('请选择工作地点！');
			return;
		}
		if(Joblevel==''||typeof(Joblevel) == 'undefined' || Joblevel<1){
			alert('请选择岗位级别！');
			return;
		}
		if(salary=='' || salary==0){
			alert('请选择期望薪资！');
			return;
		}
		$('#btnSave1,#btnSave2').submitForm({success:success,clearForm:false});
		return false;
	});
});
function success(json){
	if(json.status>0){
		alert(json.msg);
		window.location.href = '/person/resumes.html';
	}else{
		alert(json.msg);
	}
}
</script>
</body>
</html>