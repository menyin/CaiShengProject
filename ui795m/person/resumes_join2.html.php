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
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/mobile.form.js"></script>
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/mobile.thirdselect.js"></script>
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_base.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/personage.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_index2.css"/>
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/common.js"></script>
	<script type="text/javascript">
	window.CONFIG = {
		HOST: 'http://cdn.597.com',
		COMBOPATH: '/m/js/m3/'
	}
	</script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/m3/min.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/m3/mobile.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/m3/global.js"></script>
	<script type="text/javascript">
		jpjs.config({
			preload: 'mobile, base.util, base.class, base.shape',
			preCombo: 'jquery, mobile, base.util, base.class, base.shape, base.event, base.attribute, base.aspect, tools.cookie'
		});
	</script>
<style>
.dateInput{width:100%; margin-top:9px; text-align: right;font-size: 14px; color: #00c0c7; border:none; background: none;}
.dateInputGray{ color:#a1acb2;}
.createResume { background:#fff;}
.warnTip { display:block; margin-top:8px; color:#f60;}
</style>
<script>
//z-index_m 背景框的 z-index;z-index-j 背景框的z-index   
function showLoading(z_index_m,z_index_j){
	if(z_index_m == "undefined" ||z_index_m ==""){
		z_index_m = 10;
	}
	if(z_index_j == "undefined" ||z_index_j ==""){
		z_index_j = 11;
	}
	$(".m_master").show().css({"z-index":z_index_m}); 
	$(".juhua").show().css({"z-index":z_index_j});
}
//关闭loading
function closeLoading(){
	$(".m_master").hide();
	$(".juhua").hide();
}
</script> 
</head>
<body class="bodyPd" style="background:#f5f7f7;">
<!--{if $app['isNewApp']!="yes"}-->
<section class="j_searchTop">
	<a class="logo" href="/"></a>
	<a class="position" href="/changecity.html"><span class="text">{$domainInfo['region_name_short']}</span><img src="http://cdn.597.com/m/images/change-city.png" width="9" height="9" /></a>
	
	<div class="login_btn right">
		<a style="padding-left:5px;font-size:16px;" href="/">首页</a>|
		<!--{if $_SESSION['uid']}-->
			<a style="padding-left:5px;font-size:16px;" href="/person/">个人中心</a>
		<!--{elseif $_SESSION['cid']}-->
			<a style="padding-left:5px;font-size:16px;" href="/company/">招聘中心</a>
		<!--{else}-->
			<a style="padding-left:5px;font-size:16px;" href="/person/login.html">登录</a>|<a href="/person/register.html" style="font-size:16px;">注册</a>
		<!--{/if}-->
	</div>
</section><!--j_searchTop end-->
<nav></nav>
<div class="psgSeekHead">
	<div class="psgSeekBg psgPrecise">
		<span style="font-size:16px;">求职意向</span>
		<a href="javascript:window.history.go(-1);" class="getBack icon-svg10"></a>
		<a class="seekBtn" href="javascript:;"></a>
	</div>
</div>
<!--{/if}-->
<div class="m_master" style="display:none;filter:alpha(opacity=10);-moz-opacity:0.1;opacity: 0.1;"></div>
<div class="content" id="content">
	<form action="/api/web/person.api" method="post" id="jobForm">
	<input type="hidden" name="act" value="join_save" />
	<input type="hidden" name="resume_id" value="{$uid}" />
	<ul class="createResume mgb15">
		<li>
			<a href="javascript:;" id="start_exp_job">
				<b><font color="red">*</font>意向职位</b>
				<span class="green exp_job">{$resumeInfo[joinOffice]}</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="txtJoinOffice" id="txtStation" value="{$resumeInfo[joinOffice]}">
		</li>
		<li>
			<a href="javascript:;" id="start_job_type">
				<b><font color="red">*</font>职位类型</b>
				<span class="green job_type">{$__joinType[$resumeInfo[joinType]]}</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="radJoinType" id="hidJobtype" value="{$resumeInfo[joinType]}">
		</li>
		<li>
			<a href="javascript:;" id="start_job_sort">
				<b><font color="red">*</font>职位类别</b>
				<span class="gray job_sort">{$resumeInfo[joinJobClass]}</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="hidJobSortExpect" id="hidJobsort" value="{$resumeInfo[joinJobClassId]}">
		</li>
		<li>
			<a href="javascript:;" id="start_calling">
				<b><font color="red">*</font>期望行业</b>
				<span class="gray calling">{$resumeInfo[joinIndustry]}</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="hidCallingExpect" id="hidCalling" value="{$resumeInfo[joinIndustryId]}">
		</li>
		<li>
			<a href="javascript:;" id="start_expect_area">
				<b><font color="red">*</font>工作地点</b>
				<span class="green expect_area">{$resumeInfo[joinCity]}</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="hidCurAreaBasic" id="hidAreaMultiple" value="{$resumeInfo[joinCityId]}">
		</li>
		<!--
		<li>
			<a href="javascript:;" id="start_job_level" style="display:none">
				<b>岗位级别</b>
				<span class="green job_level">总监/副总裁</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="hidJoblevel" id="hidJoblevel" value="05">
			<input type="hidden" name="chkJobLevel" id="chkJobLevel" value=" 0">
		</li>
		-->
		<li>
			<a href="javascript:;" id="start_salary">
				<b><font color="red">*</font>期望薪资</b>
				<span class="green expsalary">{$resumeInfo[joinSalary]}以上</span>
				<i class="icon-svg15"></i>
			</a>
			<input type="hidden" name="txtJoinSalary" id="hidSalary" value="{$resumeInfo[joinSalary]}">
		</li>
	</ul>
	 <a href="javascript:;" class="sryBtn" id="submitForm">保 存</a>
</form>

<!--输入框弹窗-->
<div class="csumeNamepop" style="display:none;" id="singleInput">
	<p class="namePop1  singleTitle"></p>
	<span class="namePop2 errormsg" style="display:none"></span>
	<div class="nameTextBg">
		<input type="text" name="nothing" id="singleValue" value="" class="nameText" placeholder="">
		<span class="warnTip">多个职位请用逗号隔开</span>
	</div>
	<div class="namePop3">
		<a href="javascript:;" id="canseInput">取消</a>
		<a href="javascript:;" class="blue" id="okInput">确定</a>
	</div>
</div>

<!--选择框弹窗-->
<div class="selectParts" id="singleSelect">
	<div class="psgSeekBg psgPrecise">
	<span id="selectTitle"></span>
	<a href="javascript:;" class="getBack icon-svg10 closeButton"></a>
	<a class="seekBtn" href="javascript:;" id="okButton" style="display:none">确定</a>
	</div>
	<ul class="psgMParts psgMPartsx " id="selectUl">
	</ul>
</div>
<script>
var job_type_data = [{"value":1,"name":"全职"},{"value":2,"name":"兼职"},{"value":5,"name":"实习"}];

var job_level_data = [{"value":"01","name":"\u5b9e\u4e60\/\u89c1\u4e60"},{"value":"02","name":"\u666e\u901a\u5458\u5de5"},{"value":"03","name":"\u9ad8\u7ea7\/\u8d44\u6df1\uff08\u975e\u7ba1\u7406\u5c97\uff09"},{"value":"04","name":"\u90e8\u95e8\u7ecf\u7406\/\u4e3b\u7ba1"},{"value":"05","name":"\u603b\u76d1\/\u526f\u603b\u88c1"},{"value":"06","name":"\u603b\u88c1\/\u603b\u7ecf\u7406"}];
var salary_data = [{"value":"1000","name":"1000及以上"},{"value":"1500","name":"1500及以上"},{"value":"2000","name":"2000及以上"},{"value":"2500","name":"2500及以上"},{"value":"3000","name":"3000及以上"},{"value":"4000","name":"4000及以上"},{"value":"5000","name":"5000及以上"},{"value":"6000","name":"6000及以上"},{"value":"7000","name":"7000及以上"},{"value":"8000","name":"8000及以上"},{"value":"9000","name":"9000及以上"},{"value":"10000","name":"10000及以上"},{"value":"12000","name":"12000及以上"},{"value":"15000","name":"15000及以上"},{"value":"20000","name":"20000及以上"},{"value":"30000","name":"30000及以上"}];
//var salary_data = [{"value":"01","name":"1000\u53ca\u4ee5\u4e0a"},{"value":"02","name":"1500\u53ca\u4ee5\u4e0a"},{"value":"03","name":"2000\u53ca\u4ee5\u4e0a"},{"value":"04","name":"2500\u53ca\u4ee5\u4e0a"},{"value":"05","name":"3000\u53ca\u4ee5\u4e0a"},{"value":"06","name":"4000\u53ca\u4ee5\u4e0a"},{"value":"07","name":"5000\u53ca\u4ee5\u4e0a"},{"value":"08","name":"6000\u53ca\u4ee5\u4e0a"},{"value":"09","name":"7000\u53ca\u4ee5\u4e0a"},{"value":10,"name":"8000\u53ca\u4ee5\u4e0a"},{"value":11,"name":"9000\u53ca\u4ee5\u4e0a"},{"value":12,"name":"10000\u53ca\u4ee5\u4e0a"},{"value":13,"name":"12000\u53ca\u4ee5\u4e0a"},{"value":14,"name":"15000\u53ca\u4ee5\u4e0a"},{"value":15,"name":"20000\u53ca\u4ee5\u4e0a"},{"value":16,"name":"30000\u53ca\u4ee5\u4e0a"}];
var basic = {
	init:function(){
		//意向职位
		$("#start_exp_job").click(function(){
			singleInput.initialiseInput("意向职位","求职意向不能超过20字","exp_job","#txtStation",".exp_job");
		});
		//职位类型
		$("#start_job_type").click(function(){
			var default_value=$("#hidJobtype").val();
			singleSelect.initialiseSelect("职位类型",job_type_data,default_value,"#hidJobtype",".job_type");
		});
		//岗位级别
		$("#start_job_level").click(function(){
			var default_value=$("#hidJoblevel").val();
			singleSelect.initialiseSelect("岗位级别",job_level_data,default_value,"#hidJoblevel",".job_level");
		});
		//期望薪资
		$("#start_salary").click(function(){
			var default_value=$("#hidSalary").val();
			singleSelect.initialiseSelect("期望薪资",salary_data,default_value,"#hidSalary",".expsalary");
		});
		//提交
		$("#submitForm").click(function(){
			var job_type = $('#hidJobtype').val();
			//var job_type = $('#hidJobtype').find('select').val();
			var station = $('#txtStation').val();
			var jobsort = $('#hidJobsort').val();
			var calling = $('#hidCalling').val();
			var area = $('#hidAreaMultiple').val();
			var Joblevel=$('#hidJoblevel').val();
			var salary = $('#hidSalary').val();
			if(station==''){
				alert('请填写意向职位！');
				return;
			}
			if(job_type==''||typeof(job_type) == 'undefined' || job_type<1){
				alert('请选择职位类型！');
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
			if(salary=='' || salary==0){
				alert('请选择期望薪资！');
				return;
			}
			showLoading();
			$(this).submitForm({success:basic.success,clearForm: false});
		});
		//期望地区
		$("#start_expect_area").click(function(){
			var dataurl = "/region.php?act=nextList";
			var hasSelectData = [{"value":"0310","name":"\u4e07\u5dde\u533a"}];
			thirdSelect.init(hasSelectData,"工作地点",dataurl,"areaid","#hidAreaMultiple",".expect_area");
		});
		//期望行业
		$("#start_calling").click(function(){
			var dataurl = "/api/web/industry.api?act=calling";
			var hasSelectData = [];
			thirdSelect.init(hasSelectData,"期望行业",dataurl,"calling","#hidCalling",".calling");
		});
		//期望职位类别
		$("#start_job_sort").click(function(){
			var dataurl = "/api/web/jobclass.api?act=jobSort";
			var hasSelectData = [];
			thirdSelect.init(hasSelectData,"期望职位类别",dataurl,"jobsort","#hidJobsort",".job_sort");
		});
	},
	success:function(json){
		closeLoading();
		if(json.status>0){
			alert(json.msg);
			eval='{$resumeInfo[joinEvaluateCheck]}';
			if(eval==1){
				window.location.href = '/person/resumes.html';
			}else{
				window.location.href = '/person/resumes.html?act=evaluate';
			}
		}else{
			alert(json.msg);
		}
	}
};
basic.init();

/*
 * 
 * 
 * 
 */
//单个选择项弹窗
var singleSelect = {
		initialiseSelect:function(title,data,default_value,valueBindTree,nameBindTree,callBack){
				if(data =="" || data.length<=0){
						alert("数据错误，请重新刷新页面");return;
				}
				$("#singleSelect #selectTitle").html(title);
				singleSelect.bindData(data,default_value);
				$("#singleSelect .select_a").bind("click",function(){
						var selectValue = $(this).attr("data-value");
						var selectName = $(this).attr("data-name");
						$(valueBindTree).val(selectValue);
						$(nameBindTree).html(selectName).addClass("green").removeClass("gray");
						if(typeof(callBack) != "undefined"){
								callBack(selectValue);
						}
						singleSelect.closeDialog();
				});
				$("#singleSelect .closeButton").bind("click",function(){
						singleSelect.closeDialog();
				});
				singleSelect.showRight();
		},
		bindData:function(data,default_value){
				var appendHtml = "";
				for(var i=0;i<data.length;i++){
						if(default_value == data[i].value){
								appendHtml = appendHtml + '<li class="cut"><a href="javascript:;" class="select_a" data-name="'+data[i].name+'" data-value="'+data[i].value+'">'+data[i].name+'</a><i class="icon-uniE602"></i></li>';
						}else{
								appendHtml = appendHtml + '<li><a href="javascript:;" class="select_a" data-name="'+data[i].name+'" data-value="'+data[i].value+'">'+data[i].name+'</a></li>';
						}
				}
				$("#singleSelect #selectUl").html(appendHtml);

		},
		closeDialog:function(){
			$("#singleSelect").stop().stop().animate({width:"0%"},200);
			$("#singleSelect .select_a").unbind();
			$("#singleSelect #selectUl").html("");
			$("#singleSelect #selectTitle").html("");
		},
		showRight:function(){
			$("#singleSelect").stop().animate({width:"100%"},200);
		}


};

	//姓名弹窗
	var singleInput = {
		initialiseInput:function(title,placeholder,type,valueBindTree,nameBindTree){
			$("#singleInput").find(".singleTitle").html(title);
				var default_value = $(valueBindTree).val();
			$("#singleInput input").attr({"placeholder":placeholder}).bind("focus",function(){
				$("#singleInput .errormsg").hide().html("");
					$("#singleInput").css({top:"40%"});
			}).val(default_value);
			$("#okInput").bind("click",function(){
				$("#singleInput").css({top:"50%"});
				var check_result = singleInput.checkInput(type);
				if(check_result){
					var inputValue = $("#singleInput input").val();
					$(valueBindTree).val(inputValue);
					$(nameBindTree).html(inputValue).addClass("green").removeClass("gray");
					singleInput.closeDialog();
				}
			});
			$("#canseInput").bind("click",function(){
				$("#singleInput").css({top:"50%"});  
				singleInput.closeDialog();
			});
			$(".m_master").show();
			$("#singleInput").show("fast");
			$("#singleValue").focus();
		},
		checkInput:function(type){
			switch(type){
			case "exp_job":
					var start = '<em class="icon-svg35"></em>';
					var inputValue = $("#singleInput input").val();
					if(inputValue ==""){
						$("#singleInput .errormsg").html(start+"意向职位不能为空").show();
						return false;
					}
					if(inputValue.length <2 || inputValue.length >20){
						$("#singleInput .errormsg").html(start+"意向职位必须在2-20字之间").show();
						return false;
					}
					return true;
				default:
					return false;
			}
		},
		closeDialog:function(){
			$(".m_master").hide();
			$("#singleInput").hide();
			$("#singleInput").find(".singleTitle").html("");
			$("#canseInput").unbind();
			$("#singleInput input").attr({"placeholder":""}).unbind().val("");
			$("#singleInput .errormsg").hide().html("");
			$("#okInput").unbind();
		}
	};
</script>
</body>
</html>