<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>发布职位-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after" content="1 days">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_index.css?v=20150111">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.form.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.singlearea.js"></script>
<style>
.nextSalary {
	display:none;
}
.mKeywordBg span.Lselect .LselectedSelect{ display:none!important;}
.mKeywordP {
	padding-bottom:0px;
}
</style>
</head>
<body>
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg "> <a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a> 发布职位 </div>
</div>
<div class="head_master" style="display:none;filter:alpha(opacity=10);-moz-opacity:0.1;opacity: 0.1;z-index:99"></div>
<div class="m_master" style="display: none;"></div>
<div class="juhua" style="display:none;position:fixed"><img src="http://cdn.597.com/m/images//loadingb.gif"></div>
<script>
	
//触屏版提示框
var myMobileAlert = {
	html:'<div class="nonmemberPop" id="myAlert" style="display:none">'
			+'<p class="nomemberpx05 alertTitle"></p>'
			+'<p class="nomemberpx06 alertContent"  style="text-align:left;padding:0 5px 0 5px;"></p>'
			+'<p class="nomemberpx04">'
			+'<a href="javascript:;" class="green2 alertButton">确定</a>'
			+'</p></div>',
	init:function(title,content,callBack,type){
		$("body").append(this.html);
		this.bindContent(title,content,callBack,type);
		$(".m_master").show();
		$("#myAlert").show("fast");
	},
	bindContent:function(title,content,callBack,type){
		var _self = this;
		if(type=="fail"){
			$("#myAlert .alertTitle").css({color:"red"});
		}else{
			$("#myAlert .alertTitle").css({color:"#169e49"});
		}
		$("#myAlert .alertTitle").html(title);
		$("#myAlert .alertContent").html(content);
		$("#myAlert .alertButton").bind("click",function(){
			if(typeof(callBack) != "undefined" && callBack !=""){
				callBack();
			}
			_self.destroy();
		});
	},
	destroy:function(){
		$("#myAlert .alertTitle").html("");
		$("#myAlert .alertContent").html("");
		$("#myAlert .alertButton").unbind();
		$(".m_master").hide();
		$("#myAlert").remove();
	}
}

//触屏版提示框
var myMobileConfirm = {
	html:'<div class="nonmemberPop" id="myConfirm" style="display:none">'
			+'<p class="nomemberpx05 confirmTitle"></p>'
			+'<p class="nomemberpx06 confirmContent"></p>'
			+'<p class="nomemberpx04">'
			+'<a href="javascript:;" class="orange"><em class="consons"></em></a>'
			+'<a href="javascript:;" class="green confirmRightButton"></a>'
			+'</p></div>',
	init:function(title,content,callBack,rightButtonName,leftButtonName,leftCallBck){
		$("body").append(this.html);
		this.bindContent(title,content,callBack,rightButtonName,leftButtonName,leftCallBck);
		$(".m_master").show();
		$("#myConfirm").show("fast");
	},
	bindContent:function(title,content,callBack,rightButtonName,leftButtonName,leftCallBck){
		var _self = this;
		$("#myConfirm .confirmTitle").html(title);

		var rightname = typeof(rightButtonName) != "undefined"&& rightButtonName!="" ? rightButtonName:"确定";
		var leftButtonName = typeof(leftButtonName) != "undefined"&& leftButtonName!="" ? leftButtonName:"取消";
		$("#myConfirm .confirmRightButton").html(rightname);
		$("#myConfirm .consons").html(leftButtonName);
		$("#myConfirm .confirmContent").html(content);
		$("#myConfirm .confirmRightButton").bind("click",function(){
			if(typeof(callBack) != "undefined" && callBack !=""){
				callBack();
			}
			_self.destroy();
		});
		$("#myConfirm .consons").bind("click",function(){
			if(typeof(leftCallBck) != "undefined" && leftCallBck !=""){
				leftCallBck();
			}
			_self.destroy();
		});
	},
	destroy:function(){
		$("#myConfirm .confirmTitle").html("");
		$("#myConfirm .confirmContent").html("");
		$("#myConfirm .confirmRightButton").unbind();
		$(".m_master").hide();
		$("#myConfirm").remove();
	}
}
 
//触屏版确认框
	
	
//z-index_m 背景框的 z-index;z-index-j 背景框的z-index   
function showLoading(z_index_m,z_index_j){
	if(z_index_m == "undefined" ||z_index_m ==""){
		z_index_m = 10;
	}
	if(z_index_j == "undefined" ||z_index_j ==""){
		z_index_j = 11;
	}
	$(".head_master").show().css({"z-index":z_index_m}); 
	$(".juhua").show().css({"z-index":z_index_j});
}
//关闭loading
function closeLoading(){
	$(".head_master").hide();
	$(".juhua").hide();
}
</script>
<div class="mKeywordP">
	<form action="/api/web/company.api" method="post" id="jobForm">
	<input type="hidden" name="act" id="act" value="jobsave">
	<input type="hidden" name="jid" id="jid" value="{$_jid}">
	<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
	<!--职位性质 开始-->
	<h2><em>描述一下这个职位</em></h2>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>职位性质</span>
		<div class="mKeyRadio">
			<label>
				<input type="radio" name="radJobType" value="1" <!--{if $job[jobType]==1}-->checked="checked"<!--{/if}-->>
				<b>全职</b> </label>
			<label>
				<input type="radio" name="radJobType" value="2" <!--{if $job[jobType]==2}-->checked="checked"<!--{/if}-->>
				<b>兼职</b> </label>
			<label>
				<input type="radio" name="radJobType" value="5" <!--{if $job[jobType]==5}-->checked="checked"<!--{/if}-->>
				<b>实习</b> </label>
		</div>
	</div>
	<!--职位性质 结束-->
	
	<!--职位名称 开始-->
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>职位名称</span>
		<input type="text" placeholder="请输入职位名称" name="txtStation" class="mKeywText" value="{$job['jname']}">
	</div>
	<!--职位名称 结束-->

	<!--职位类别  开始-->
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>职位类别</span>
		<div class="mkDtment" id="mainJobSortDiv"> 
		<!--数据为空时给b加个mkNull类--> 
			<b id="main_jobsort" class="mkNull"><!--{if $job['mainJobClassId']}-->{$job['mainJobClass']}<!--{/if}--></b> </div>
			<a href="javascript:;" class="rightPop" id="addNextJobSort" style="display: none;">添加次类别</a>
			<input type="hidden" name="main_jobsort" value="{$job['mainJobClassId']}">
			<input type="hidden" name="hddJobsort" value="{$job['jobClassId']}">
	</div>
	<div class="mKeywordBg mKeywordBgc" style="" id="nextJobSortMain"> <span class="tSpan">次要类别</span>
		<div class="mkDtment" id="nextJobSortDiv"> 
		<!--数据为空时给b加个mkNull类--> 
		<b id="next_jobsort" class="mkNull"><!--{if $job['nextJobClassId']}-->{$job['nextJobClass']}<!--{/if}--></b> </div>
		<a href="javascript:;" class="rightPop" id="deleteNextJobSort" style="display: none;">删除</a>
		<input type="hidden" name="next_jobsort" value="{$job['nextJobClassId']}">
	</div>
	<!--职位类别  结束-->
	
	<!--所属部门  开始-->
	<div class="mKeywordBg mKeywordBgc" id="deptDiv"> <span class="tSpan"><b class="ismust">*</b>所属部门</span>
		<select name="hddUnit" class="deptValueSelect mKeywSelect">
			<!--{loop $unitList $unit}-->
				<option value="{$unit[cuid]}" <!--{if $unit[cuid]==$job['cuid']}-->selected<!--{/if}-->>{$unit[cuName]}</option>
			<!--{/loop}-->
		</select>
		<a class="rightPop setDepart" href="javascript:;">设置部门</a>
	</div>
	<!--所属部门  结束--> 
	
	<!--岗位级别  开始-->
	<div class="mKeywordBg mKeywordBgc" style="display:none;"> <span class="tSpan"><b class="ismust">*</b>岗位级别</span>
		<select name="hddJoblevel" class="mKeywSelect">
			<option value="" class="optionGray">请选择岗位级别</option>
			<option value="01">实习/见习</option>
			<option value="02" selected="selected">普通员工</option>
			<option value="03">高级/资深（非管理岗）</option>
			<option value="04">部门经理/主管</option>
			<option value="05">总监/副总裁</option>
			<option value="06">总裁/总经理</option>
		</select>
	</div>
	<!--岗位级别  结束--> 
	
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>招聘人数</span>
		<input type="text" placeholder="请输入招聘人数" name="txtQuantity" class="mKeywText" value="{$job['jobNumber']}">
	</div>
	<div class="mKeywordBg mKeywordBgc" style="padding-right:0px;"> <span class="tSpan"><b class="ismust">*</b>工作地点</span>
		<div class="mKeywSelectBg">
			<input type="hidden" id="hddCurArea" name="hddArea" value="{$job[jobAreaId]}">
			<dd id="cur_area">
			</dd>
		</div>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">详细地址</span>
		<input type="text" placeholder="请输入详细地址" name="txtAddInfo" class="mKeywText" value="{$job['jobAddInfo']}">
	</div>
	<!--薪资待遇  开始-->
	
	<div class="mKeywordBg mKeywordBgc" style="border-bottom:none;"> <span class="tSpan"><b class="ismust">*</b>薪资待遇</span>
		<div class="mKeyRadio">
			<label>
				<input type="radio" id="first_salary" name="rd" value="0" <!--{if $job[jobSalaryType]==0}-->checked="checked"<!--{/if}-->>
				<b>定额薪资</b> </label>
			<label>
				<input type="radio" id="next_salary" name="rd" value="1" <!--{if $job[jobSalaryType]==1}-->checked="checked"<!--{/if}-->>
				<b>底薪+提成</b> </label>
		</div>
	</div>
	<div class="mKeywordBg mKeywordBgc" style="padding-left:10px;">
		<div class="mKeycAge firstSalary" style="margin-top:5px;">
			<div class="mKeycAgelf" style="width:47%">
				<input type="text" placeholder="请输入最低薪资" name="hddSalary1" class="mAgeText" value="{$hddSalary1}">
				<div>元</div>
			</div>
			<div style="width:6%; float:left; text-align:center; color:#a1abb3; line-height:35px; padding:0 0 0 0px;">-</div>
			<div class="mKeycAgelf" style="width:47%">
				<input type="text" placeholder="请输入最高薪资" name="hddSalary1End" class="mAgeText" value="{$hddSalary1End}">
				<div>元</div>
			</div>
		</div>
		<span style="border-right:none" class="tSpan"></span>
		<div class="mKeycAge nextSalary">
			<div class="mKeycAgelf">
				<input type="text" placeholder="请输入最低底薪" name="hddSalary2" class="mAgeText" value="{$hddSalary2}">
				<div>元</div>
			</div>
			<div style="width:12px; float:left; color:#a1abb3; line-height:35px; padding:0 0 0 5px;">-</div>
			<div class="mKeycAgelf">
				<input type="text" placeholder="请输入最高底薪" name="hddSalary2End" class="mAgeText" value="{$hddSalary2End}">
				<div>元</div>
			</div>
		</div>
		<div class="mKeycAge nextSalary">
			<div class="mKeycAgelf">
				<input type="text" placeholder="请输入最低平均工资" name="hddSalary3" class="mAgeText" value="{$hddSalary3}">
				<div>元</div>
			</div>
			<div style="width:12px; float:left; color:#a1abb3; line-height:35px; padding:0 0 0 5px;">-</div>
			<div class="mKeycAgelf">
				<input type="text" placeholder="请输入最高平均工资" name="hddSalary3End" class="mAgeText" value="{$hddSalary3End}">
				<div>元</div>
			</div>
		</div>
	</div>
	<!--薪资待遇 结束-->
	
	<!--福利待遇开始-->
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>职位性质</span>
		<div class="mKeyRadio">
			<label>
				<input type="checkbox" name="rewardID[]" value="1" <!--{if in_array('1',$job[rewardID])}-->checked="checked"<!--{/if}-->>
				<b>五险</b> </label>
			<label>
				<input type="checkbox" name="rewardID[]" value="2" <!--{if in_array('2',$job[rewardID])}-->checked="checked"<!--{/if}-->>
				<b>住房公积金</b> </label>
			<label>
				<input type="checkbox" name="rewardID[]" value="3" <!--{if in_array('3',$job[rewardID])}-->checked="checked"<!--{/if}-->>
				<b>包吃</b> </label>
			<label>
				<input type="checkbox" name="rewardID[]" value="4" <!--{if in_array('4',$job[rewardID])}-->checked="checked"<!--{/if}-->>
				<b>包住</b> </label>
			<label>
				<input type="checkbox" name="rewardID[]" value="5" <!--{if in_array('5',$job[rewardID])}-->checked="checked"<!--{/if}-->>
				<b>周末双休</b> </label>
		</div>
	</div>
	<div class="mKeywordBg mKeywordBgc mKeywordBgcy" style="border-bottom:none;display:none;"> <span class="tSpan">福利待遇</span>
		<div class="mkDtment" style="margin-top:0px;"> 
			<!-- 数据为空时给b加个mkNull类  -->
			<b class="mkNull"></b></div>
			<a class="rightPop setReward" href="javascript:;">添加福利</a>
			<input type="hidden" value="" id="hidDefaultReward" name="hidDefaultReward">
			<input type="hidden" value="" id="hidOtherReward" name="hidOtherReward">
	</div>
	<div class="mKeywordBg mKeywordBgc mKeywordBgcy" style="padding:0px 11px 0 20px;display:none;">
		<div class="mkDtment" id="mkDtment" style="margin-top:3px;"> 
		<!-- 数据为空时给b加个mkNull类 -->
		<b class="mkNull"></b> </div>
	</div>
	<!--福利待遇结束-->

	<div class="mKeywordBg mKeywordBgc"> <span class="textSpan"><b class="ismust">*</b>岗位职责</span>
		<div class="template" style="display:none"></div>
		<textarea type="text" placeholder="请输入20字以上的岗位职责" name="txtContent" class="mKeywText textArea">{$job['jobContent']}</textarea>
	</div>
	
	<!--岗位特点-->
	<div class="mKeywordBg mKeywordBgc mKeywordBgcy" style="border-bottom:none;display:none;"> <span class="tSpan">岗位特点</span>
		<div class="mkDtment" style="margin-top:0px;"> 
			<!--数据为空时给b加个mkNull类--> 
			<b class="mkNull"></b> </div>
			<a class="rightPop setFea" href="javascript:;">点击添加</a>
			<input type="hidden" value="" id="hidDefaultFea" name="hidDefaultFea">
			<input type="hidden" value="" id="hidOtherFea" name="hidOtherFea">
	</div>
	<div class="mKeywordBg mKeywordBgc mKeywordBgcy" style="padding:0px 11px 0 20px;">
		<div class="mkDtment" id="selectedFea" style="margin-top:3px;"> 
			<!--<b class="mkNull"-->
		</div>
	</div>

	<div class="mKeywordBg mKeywordBgc" style="display:none;"> <span class="tSpan"><b class="ismust">*</b>有效期</span>
		<input type="text" placeholder="请输入职位有效期" name="txtValidDays" value="30" class="mKeywText">
		<i style="color:#333;">天</i> </div>
	<h2><em>对求职者有什么需求</em></h2>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">工作年限</span>
		<select name="hddWorkyear" class="mKeywSelect">
			<option value="0" <!--{if $job[jobWorkYear]==0}-->selected=""<!--{/if}-->>不限</option>
			<option value="1" <!--{if $job[jobWorkYear]==1}-->selected=""<!--{/if}-->>1年及以上</option>
			<option value="2" <!--{if $job[jobWorkYear]==2}-->selected=""<!--{/if}-->>2年及以上</option>
			<option value="3" <!--{if $job[jobWorkYear]==3}-->selected=""<!--{/if}-->>3年及以上</option>
			<option value="4" <!--{if $job[jobWorkYear]==4}-->selected=""<!--{/if}-->>4年及以上</option>
			<option value="5" <!--{if $job[jobWorkYear]==5}-->selected=""<!--{/if}-->>5年及以上</option>
			<option value="6" <!--{if $job[jobWorkYear]==6}-->selected=""<!--{/if}-->>6年及以上</option>
			<option value="7" <!--{if $job[jobWorkYear]==7}-->selected=""<!--{/if}-->>7年及以上</option>
			<option value="8" <!--{if $job[jobWorkYear]==8}-->selected=""<!--{/if}-->>8年及以上</option>
			<option value="9" <!--{if $job[jobWorkYear]==9}-->selected=""<!--{/if}-->>9年及以上</option>
			<option value="10" <!--{if $job[jobWorkYear]==10}-->selected=""<!--{/if}-->>10年及以上</option>
		</select>
		<label class="graduateClass">
			<input class="checkbox" type="checkbox" name="chkNewGraduate" value="1" <!--{if $job[jobNewGraduate]==1}-->checked="checked"<!--{/if}-->>是否接受应届毕业生
		</label>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">最低学历</span>
		<select name="hddDegree" class="mKeywSelect">
			<option value="0" <!--{if $job[jobDegree]==0}-->selected=""<!--{/if}-->>不限</option>
			<option value="20" <!--{if $job[jobDegree]==20}-->selected=""<!--{/if}-->>初中</option>
			<option value="30" <!--{if $job[jobDegree]==30}-->selected=""<!--{/if}-->>高中</option>
			<option value="40" <!--{if $job[jobDegree]==40}-->selected=""<!--{/if}-->>中技/中专</option>
			<option value="50" <!--{if $job[jobDegree]==50}-->selected=""<!--{/if}-->>大专</option>
			<option value="60" <!--{if $job[jobDegree]==60}-->selected=""<!--{/if}-->>本科</option>
			<option value="70" <!--{if $job[jobDegree]==70}-->selected=""<!--{/if}-->>硕士</option>
			<option value="80" <!--{if $job[jobDegree]==80}-->selected=""<!--{/if}-->>博士</option>
			<option value="90" <!--{if $job[jobDegree]==90}-->selected=""<!--{/if}-->>博士后</option>
		</select>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">性别要求</span>
		<div class="mKeyRadio">
			<label>
				<input type="radio" name="hddSex" value="0" <!--{if $job[jobGender]==0}-->checked="checked"<!--{/if}-->>
				<b>不限</b> </label>
			<label>
				<input type="radio" name="hddSex" value="1" <!--{if $job[jobGender]==1}-->checked="checked"<!--{/if}-->>
				<b>男</b> </label>
			<label>
				<input type="radio" name="hddSex" value="2" <!--{if $job[jobGender]==2}-->checked="checked"<!--{/if}-->>
				<b>女</b> </label>
		</div>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">最低年龄</span>
	<div class="mKeywSelectBg">
		<select name="hddAge1" class="mKeywSelect">
			<option value="0" <!--{if $job[jobAgeMin]==0}-->selected=""<!--{/if}-->>不限</option>
			<option value="16" <!--{if $job[jobAgeMin]==16}-->selected=""<!--{/if}-->>16</option>
			<option value="17" <!--{if $job[jobAgeMin]==17}-->selected=""<!--{/if}-->>17</option>
			<option value="18" <!--{if $job[jobAgeMin]==18}-->selected=""<!--{/if}-->>18</option>
			<option value="19" <!--{if $job[jobAgeMin]==19}-->selected=""<!--{/if}-->>19</option>
			<option value="20" <!--{if $job[jobAgeMin]==20}-->selected=""<!--{/if}-->>20</option>
			<option value="21" <!--{if $job[jobAgeMin]==21}-->selected=""<!--{/if}-->>21</option>
			<option value="22" <!--{if $job[jobAgeMin]==22}-->selected=""<!--{/if}-->>22</option>
			<option value="23" <!--{if $job[jobAgeMin]==23}-->selected=""<!--{/if}-->>23</option>
			<option value="24" <!--{if $job[jobAgeMin]==24}-->selected=""<!--{/if}-->>24</option>
			<option value="25" <!--{if $job[jobAgeMin]==25}-->selected=""<!--{/if}-->>25</option>
			<option value="26" <!--{if $job[jobAgeMin]==26}-->selected=""<!--{/if}-->>26</option>
			<option value="27" <!--{if $job[jobAgeMin]==27}-->selected=""<!--{/if}-->>27</option>
			<option value="28" <!--{if $job[jobAgeMin]==28}-->selected=""<!--{/if}-->>28</option>
			<option value="29" <!--{if $job[jobAgeMin]==29}-->selected=""<!--{/if}-->>29</option>
			<option value="30" <!--{if $job[jobAgeMin]==30}-->selected=""<!--{/if}-->>30</option>
			<option value="31" <!--{if $job[jobAgeMin]==31}-->selected=""<!--{/if}-->>31</option>
			<option value="32" <!--{if $job[jobAgeMin]==32}-->selected=""<!--{/if}-->>32</option>
			<option value="33" <!--{if $job[jobAgeMin]==33}-->selected=""<!--{/if}-->>33</option>
			<option value="34" <!--{if $job[jobAgeMin]==34}-->selected=""<!--{/if}-->>34</option>
			<option value="35" <!--{if $job[jobAgeMin]==35}-->selected=""<!--{/if}-->>35</option>
			<option value="36" <!--{if $job[jobAgeMin]==36}-->selected=""<!--{/if}-->>36</option>
			<option value="37" <!--{if $job[jobAgeMin]==37}-->selected=""<!--{/if}-->>37</option>
			<option value="38" <!--{if $job[jobAgeMin]==38}-->selected=""<!--{/if}-->>38</option>
			<option value="39" <!--{if $job[jobAgeMin]==39}-->selected=""<!--{/if}-->>39</option>
			<option value="40" <!--{if $job[jobAgeMin]==40}-->selected=""<!--{/if}-->>40</option>
			<option value="41" <!--{if $job[jobAgeMin]==41}-->selected=""<!--{/if}-->>41</option>
			<option value="42" <!--{if $job[jobAgeMin]==42}-->selected=""<!--{/if}-->>42</option>
			<option value="43" <!--{if $job[jobAgeMin]==43}-->selected=""<!--{/if}-->>43</option>
			<option value="44" <!--{if $job[jobAgeMin]==44}-->selected=""<!--{/if}-->>44</option>
			<option value="45" <!--{if $job[jobAgeMin]==45}-->selected=""<!--{/if}-->>45</option>
			<option value="46" <!--{if $job[jobAgeMin]==46}-->selected=""<!--{/if}-->>46</option>
			<option value="47" <!--{if $job[jobAgeMin]==47}-->selected=""<!--{/if}-->>47</option>
			<option value="48" <!--{if $job[jobAgeMin]==48}-->selected=""<!--{/if}-->>48</option>
			<option value="49" <!--{if $job[jobAgeMin]==49}-->selected=""<!--{/if}-->>49</option>
			<option value="50" <!--{if $job[jobAgeMin]==50}-->selected=""<!--{/if}-->>50</option>
			<option value="51" <!--{if $job[jobAgeMin]==51}-->selected=""<!--{/if}-->>51</option>
			<option value="52" <!--{if $job[jobAgeMin]==52}-->selected=""<!--{/if}-->>52</option>
			<option value="53" <!--{if $job[jobAgeMin]==53}-->selected=""<!--{/if}-->>53</option>
			<option value="54" <!--{if $job[jobAgeMin]==54}-->selected=""<!--{/if}-->>54</option>
			<option value="55" <!--{if $job[jobAgeMin]==55}-->selected=""<!--{/if}-->>55</option>
			<option value="56" <!--{if $job[jobAgeMin]==56}-->selected=""<!--{/if}-->>56</option>
			<option value="57" <!--{if $job[jobAgeMin]==57}-->selected=""<!--{/if}-->>57</option>
			<option value="58" <!--{if $job[jobAgeMin]==58}-->selected=""<!--{/if}-->>58</option>
			<option value="59" <!--{if $job[jobAgeMin]==59}-->selected=""<!--{/if}-->>59</option>
			<option value="60" <!--{if $job[jobAgeMin]==60}-->selected=""<!--{/if}-->>60</option>
		</select>
		岁 </div>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">最高年龄</span>
		<div class="mKeywSelectBg">
			<select name="hddAge2" class="mKeywSelect">
				<option value="0" <!--{if $job[jobAgeMax]==0}-->selected=""<!--{/if}-->>不限</option>
				<option value="16" <!--{if $job[jobAgeMax]==16}-->selected=""<!--{/if}-->>16</option>
				<option value="17" <!--{if $job[jobAgeMax]==17}-->selected=""<!--{/if}-->>17</option>
				<option value="18" <!--{if $job[jobAgeMax]==18}-->selected=""<!--{/if}-->>18</option>
				<option value="19" <!--{if $job[jobAgeMax]==19}-->selected=""<!--{/if}-->>19</option>
				<option value="20" <!--{if $job[jobAgeMax]==20}-->selected=""<!--{/if}-->>20</option>
				<option value="21" <!--{if $job[jobAgeMax]==21}-->selected=""<!--{/if}-->>21</option>
				<option value="22" <!--{if $job[jobAgeMax]==22}-->selected=""<!--{/if}-->>22</option>
				<option value="23" <!--{if $job[jobAgeMax]==23}-->selected=""<!--{/if}-->>23</option>
				<option value="24" <!--{if $job[jobAgeMax]==24}-->selected=""<!--{/if}-->>24</option>
				<option value="25" <!--{if $job[jobAgeMax]==25}-->selected=""<!--{/if}-->>25</option>
				<option value="26" <!--{if $job[jobAgeMax]==26}-->selected=""<!--{/if}-->>26</option>
				<option value="27" <!--{if $job[jobAgeMax]==27}-->selected=""<!--{/if}-->>27</option>
				<option value="28" <!--{if $job[jobAgeMax]==28}-->selected=""<!--{/if}-->>28</option>
				<option value="29" <!--{if $job[jobAgeMax]==29}-->selected=""<!--{/if}-->>29</option>
				<option value="30" <!--{if $job[jobAgeMax]==30}-->selected=""<!--{/if}-->>30</option>
				<option value="31" <!--{if $job[jobAgeMax]==31}-->selected=""<!--{/if}-->>31</option>
				<option value="32" <!--{if $job[jobAgeMax]==32}-->selected=""<!--{/if}-->>32</option>
				<option value="33" <!--{if $job[jobAgeMax]==33}-->selected=""<!--{/if}-->>33</option>
				<option value="34" <!--{if $job[jobAgeMax]==34}-->selected=""<!--{/if}-->>34</option>
				<option value="35" <!--{if $job[jobAgeMax]==35}-->selected=""<!--{/if}-->>35</option>
				<option value="36" <!--{if $job[jobAgeMax]==36}-->selected=""<!--{/if}-->>36</option>
				<option value="37" <!--{if $job[jobAgeMax]==37}-->selected=""<!--{/if}-->>37</option>
				<option value="38" <!--{if $job[jobAgeMax]==38}-->selected=""<!--{/if}-->>38</option>
				<option value="39" <!--{if $job[jobAgeMax]==39}-->selected=""<!--{/if}-->>39</option>
				<option value="40" <!--{if $job[jobAgeMax]==40}-->selected=""<!--{/if}-->>40</option>
				<option value="41" <!--{if $job[jobAgeMax]==41}-->selected=""<!--{/if}-->>41</option>
				<option value="42" <!--{if $job[jobAgeMax]==42}-->selected=""<!--{/if}-->>42</option>
				<option value="43" <!--{if $job[jobAgeMax]==43}-->selected=""<!--{/if}-->>43</option>
				<option value="44" <!--{if $job[jobAgeMax]==44}-->selected=""<!--{/if}-->>44</option>
				<option value="45" <!--{if $job[jobAgeMax]==45}-->selected=""<!--{/if}-->>45</option>
				<option value="46" <!--{if $job[jobAgeMax]==46}-->selected=""<!--{/if}-->>46</option>
				<option value="47" <!--{if $job[jobAgeMax]==47}-->selected=""<!--{/if}-->>47</option>
				<option value="48" <!--{if $job[jobAgeMax]==48}-->selected=""<!--{/if}-->>48</option>
				<option value="49" <!--{if $job[jobAgeMax]==49}-->selected=""<!--{/if}-->>49</option>
				<option value="50" <!--{if $job[jobAgeMax]==50}-->selected=""<!--{/if}-->>50</option>
				<option value="51" <!--{if $job[jobAgeMax]==51}-->selected=""<!--{/if}-->>51</option>
				<option value="52" <!--{if $job[jobAgeMax]==52}-->selected=""<!--{/if}-->>52</option>
				<option value="53" <!--{if $job[jobAgeMax]==53}-->selected=""<!--{/if}-->>53</option>
				<option value="54" <!--{if $job[jobAgeMax]==54}-->selected=""<!--{/if}-->>54</option>
				<option value="55" <!--{if $job[jobAgeMax]==55}-->selected=""<!--{/if}-->>55</option>
				<option value="56" <!--{if $job[jobAgeMax]==56}-->selected=""<!--{/if}-->>56</option>
				<option value="57" <!--{if $job[jobAgeMax]==57}-->selected=""<!--{/if}-->>57</option>
				<option value="58" <!--{if $job[jobAgeMax]==58}-->selected=""<!--{/if}-->>58</option>
				<option value="59" <!--{if $job[jobAgeMax]==59}-->selected=""<!--{/if}-->>59</option>
				<option value="60" <!--{if $job[jobAgeMax]==60}-->selected=""<!--{/if}-->>60</option>
			</select>
		岁 </div>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">外语要求</span>
		<select name="hddLanguage" class="mKeywSelect">
			<option value="0" <!--{if $job[jobLanguage]==0}-->selected=""<!--{/if}-->>不限</option>
			<option value="1" <!--{if $job[jobLanguage]==1}-->selected=""<!--{/if}-->>英语</option>
			<option value="2" <!--{if $job[jobLanguage]==2}-->selected=""<!--{/if}-->>日语</option>
			<option value="3" <!--{if $job[jobLanguage]==3}-->selected=""<!--{/if}-->>韩语</option>
			<option value="4" <!--{if $job[jobLanguage]==4}-->selected=""<!--{/if}-->>德语</option>
			<option value="5" <!--{if $job[jobLanguage]==5}-->selected=""<!--{/if}-->>法语</option>
			<option value="6" <!--{if $job[jobLanguage]==6}-->selected=""<!--{/if}-->>俄语</option>
			<option value="7" <!--{if $job[jobLanguage]==7}-->selected=""<!--{/if}-->>西班牙语</option>
			<option value="8" <!--{if $job[jobLanguage]==8}-->selected=""<!--{/if}-->>葡萄牙语</option>
			<option value="9" <!--{if $job[jobLanguage]==9}-->selected=""<!--{/if}-->>意大利语</option>
			<option value="10" <!--{if $job[jobLanguage]==10}-->selected=""<!--{/if}-->>阿拉伯语</option>
			<option value="11" <!--{if $job[jobLanguage]==11}-->selected=""<!--{/if}-->>普通话</option>
			<option value="12" <!--{if $job[jobLanguage]==12}-->selected=""<!--{/if}-->>粤语</option>
			<option value="13" <!--{if $job[jobLanguage]==13}-->selected=""<!--{/if}-->>闽南语</option>
			<option value="99" <!--{if $job[jobLanguage]==99}-->selected=""<!--{/if}-->>其他语种</option>
		</select>
	</div>
	<div class="mKeywordBg mKeywordBgc" style="display:none;"> <span class="tSpan"><b class="ismust">*</b>任职资格</span>
		<div class="template" style="display:none"></div>
		<textarea type="text" placeholder="请输入20字以上的任职资格" name="txtOtherNeed" class="mKeywText textArea"></textarea>
	</div>
	<h2 class="mKeyBgnew" style="display:none;"><em>自动过滤</em></h2>
	<div class="mKeywordBg mKeywordBgc" style="border-bottom:none;display:none;"> <span class="tSpan">是否打开</span>
		<div class="mKeyRadio">
			<label>
				<input type="radio" name="hddAutomatic" value="1">
				<b>是</b> </label>
			<label>
				<input type="radio" name="hddAutomatic" value="0" checked="checked">
				<b>否</b> </label>
		</div>
	</div>
	<div class="mKeytitNew" style="padding-left:21px;display:none;">打开后系统会根据<em>工作年限、最低学历、性别要求、年龄要求</em>，过滤掉不符合要求的简历，你可以在过滤的简历中看到被过滤的简历</div>
	
	<!--联系方式  开始-->
	<h2 class="mKeyBgnew"><em>联系方式</em></h2>
	<div class="mKeyRadio mKeyRadio2" style="margin-bottom:0px;">
		<label>
			<input type="radio" name="showLinkway" id="notShowLinkway" value="0" <!--{if $job[linkWay]=='0'}-->checked="checked"<!--{/if}-->>
			<b>不向求职者展示联系方式（不想受到骚扰）</b> </label>
		<label style="margin-bottom:0px;">
			<input type="radio" name="showLinkway" value="1" id="showLinkway" <!--{if $job[linkWay]!='0'}-->checked="checked"<!--{/if}-->>
			<b>展示联系方式（愿意接受求职者咨询）</b> </label>
		<div class="myRadioShow" id="linkwaydiv" <!--{if $job[linkWay]=='0'}-->style="display:none;"<!--{/if}-->>
			<label style="margin-bottom:0px;">
				<input type="radio" name="newLinkway" id="notUserNewLinkWay" value="0" <!--{if $job[linkWay]=='1'}-->checked="checked"<!--{/if}-->>
				<b>使用企业联系方式</b> </label>
				<p class="myRadioTel">{$com[comUser]}:{$com['comPhone']}</p>
			<label>
			
			<input type="radio" name="newLinkway" value="1" id="userNewLinkWay" <!--{if $job[linkWay]!='1'}-->checked="checked"<!--{/if}-->>
			<input type="hidden" name="newLinkWayCount" value="1">
			<b>使用新联系方式</b> </label>
			<!--{if is_array($linkWays)}-->
				<!--{loop $linkWays $key $linkWay}-->
					<div class="myInputTel linkManDiv" style="<!--{if ($job[linkWay]=='0' || $job[linkWay]=='1')}-->style="display:none;"<!--{/if}-->">
						<input type="text" placeholder="联系人" id="txtLinkMan{$key}" name="txtLinkMan{$key}" class="mpTel01" value="{$linkWay[n]}">
						<input type="text" placeholder="联系电话" id="txtLinkTel{$key}" name="txtLinkTel{$key}" class="mpTel02" value="{$linkWay[t]}">
						<!--{if $key<'3'}--><a href="javascript:;" class="addLinkWay mpTel03">增加</a><!--{/if}-->
						<!--{if $key!='1'}-->&nbsp;<a href="javascript:;" class="mpTel03 deleteLinkWay">删除</a><!--{/if}-->
					</div>
				<!--{/loop}-->
			<!--{else}-->
				<div class="myInputTel linkManDiv" style="<!--{if ($job[linkWay]=='0' || $job[linkWay]=='1')}-->style="display:none;"<!--{/if}-->">
					<input type="text" placeholder="联系人" name="txtLinkMan1" class="mpTel01" value="">
					<input type="text" placeholder="联系电话" name="txtLinkTel1" class="mpTel02" value="">
					<a href="javascript:;" class="addLinkWay mpTel03">增加</a>
				</div>	
			<!--{/if}-->
		</div>
	</div>
	<!--联系方式  结束-->
	<h2 class="mKeyBgnew"><em>邮箱接收简历</em></h2>
	<div class="mKeyRadio mKeyRadio2" style="margin-bottom:30px;">
		<label>
			<input type="radio" name="toMail" id="notShowEmail" value="0"  <!--{if $job[emailArray]=='0'}-->checked="checked"<!--{/if}-->>
			<b>不需要将收到的简历发到邮箱</b> </label>
		<label style="margin-bottom:0px;">
			<input type="radio" name="toMail" value="1" id="showEmail" <!--{if $job[emailArray]!='0'}-->checked="checked"<!--{/if}-->>
			<b>需要发送到邮箱</b> </label>
	<div class="myRadioShow" id="emaildiv" <!--{if $job[emailArray]=='0'}-->style="display:none;"<!--{/if}-->>
		<label style="margin-bottom:2px;">
			<input type="radio" name="emailType" id="notNewEmail" value="2" <!--{if $job[emailArray]=='2'}-->checked="checked"<!--{/if}-->>
			<b>使用企业邮箱</b> </label>
			<p class="myRadioTel"><!--{if $com['comEmail']}-->{$com['comEmail']}<!--{/if}--></p>
		<label>
			<input type="radio" name="emailType" value="3" id="userNewEmai" <!--{if $job[emailArray]!='2'}-->checked="checked"<!--{/if}-->>
			<input type="hidden" name="emailCount" value="1">
			<b>使用新的邮箱</b> </label>
			<!--{if is_array($emailArrays)}-->
				<!--{loop $emailArrays $key $emailArray}-->
					<div class="myInputTel emailInput" <!--{if ($job[emailArray]=='0' || $job[emailArray]=='2')}-->style="display:none;"<!--{/if}-->>
						<input type="text" placeholder="邮箱地址" id="email{$key}" name="email{$key}" class="mpTel02" value="{$emailArray}">
						<!--{if $key<'3'}--><a href="javascript:;" class="mpTel03 addEmail">增加</a><!--{/if}-->
						<!--{if $key!='1'}-->&nbsp;<a href="javascript:;"class="mpTel03 deleteEmail">删除</a><!--{/if}-->
					</div>
				<!--{/loop}-->
			<!--{else}-->
				<div class="myInputTel emailInput" <!--{if ($job[emailArray]=='0' || $job[emailArray]=='2')}-->style="display:none;"<!--{/if}-->>
					<input type="text" placeholder="邮箱地址" name="email1" class="mpTel02" value="">
					<a href="javascript:;" class="mpTel03 addEmail">增加</a>
				</div>
			<!--{/if}-->
	</div>
	</div>
	<div class="mKeySechBg"> <a href="javascript:;" class="mKeySech" id="doJobAdd">立即发布</a> </div>
</form>
</div>

<!--发布职位-->

<div class="m_master" style="display: none;"></div>
<!--职位类别弹窗-->
<div class="tdSearch" id="jobsort_alert" style="display: none;">
	<div class="tdsureBgtop">
		<div class="tdsureBg" style="height:45px;"> <a href="javascript:;" onclick="job.closeJobSort(&quot;#jobsort_alert&quot;)" class="icon-uniE6005" style="line-height:45px;"></a>
			<p><span id="jobSortTitle">次要类别</span></p>
		</div>
	</div>
	<div style="width:100%; overflow:hidden;background:#fff;position:absolute; top:60px; left:0; z-index:3; ">
		<!--{loop $jobs $key $_job1}-->
			<dl>
				<dt class="top_jobsort">{$_job1['jobsort_name']}<i class="icon-uniE604"></i></dt>
				<!--{loop $jobs[$key]['subItems'] $k  $_job2}-->
					<dd class="sub_jobsort" style="display: none;" jobsort-id="{$_job2['jobsort']}" jobsort-name="{$_job2['jobsort_name']}">{$_job2['jobsort_name']}<em class="icon-uniE603"></em> 
						<!--三级数据-->
						<ul style="display: none;" class="last_job_sort">
							<!--{loop $jobs[$key]['subItems'][$k]['subItems']  $_job3}-->
								<li><a href="javascript:;" jobsort-id="{$_job3['jobsort']}" jobsort-name="{$_job3['jobsort_name']}">{$_job3['jobsort_name']}<i class="icon-uniE602"></i></a></li>
							<!--{/loop}-->
						</ul>
					</dd>
				<!--{/loop}-->
			</dl>
		<!--{/loop}-->
	</div>
</div>

<!--添加部门的弹窗-->
<div class="deparTment" style="display: none;">
	<div class="tdsureBgtop">
		<div class="tdsureBg" style="height:45px;"><a href="javascript:;" onclick="job.closeAlert(&quot;.deparTment&quot;)" class="icon-uniE6005" style="line-height:45px;"></a>
		<p><span id="jobSortTitle">部门管理</span></p>
	</div>
</div>
<form action="/api/web/company.api" method="post" id="deptForm">
<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
<input type="hidden" value="saveUnit" name="act">
	<div class="departMx"> <span class="dmxLf">排序</span> <span class="dmxRt">部门名称</span> </div>
		<div class="departMybg">
		<!--{if $unitList}-->
			<!--{loop $unitList $l}-->
			<div class="departMy">
				<div class="dmentLt">
					<input type="text" value="{$l[cuDisplayOrder]}" name="editOrder[]">
					<input type="hidden" value="{$l[cuid]}" name="deptids[]">
				</div>
				<div class="dmentRt">
					<input type="text" placeholder="请输入部门名称" value="{$l[cuName]}" name="editDept[]">
					<a href="javascript:;" data-id="{$l[cuid]}" onclick="job.deleteDept(this)" class="deleteDept" style="display:none;">删除</a>
				</div>
			</div>
			<!--{/loop}-->
		<!--{else}-->
			<div id="deptNoData">还没有添加部门，现在开始添加吧！</div>
		<!--{/if}-->
	</div>
	<div class="departMq"> <a href="javascript:;" class="addHtmlDept">+新增部门</a> <span>最多添加30个部门</span> </div>
	<div class="departMv"> <a href="javascript:;" class="dMconfirm">确定</a> <a href="javascript:;" class="dMcancel">取消</a> </div>
</form>
</div>

<!--福利待遇弹窗-->
<div class="rewardDiv" id="rewardDiv" style="display:none">
  <div class="tdsureBgtop">
	<div class="tdsureBg" style="height:45px;"> <a href="javascript:;" onclick="job.closeAlert(&quot;#rewardDiv&quot;)" class="icon-uniE6005" style="line-height:45px;"></a>
	  <p><span id="jobSortTitle">选择福利</span></p>
	</div>
  </div>
  <div class="departMx"> <span class="dmxLf dmxLf2">最多可选择12项</span> </div>
  <div class="rewardMz" id="reward"> <a href="javascript:;" class="cut" date-rewardid="1" data-type="default">五险<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="2" data-type="default">住房公积金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="3" data-type="default">包吃<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="4" data-type="default">包住<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="05" data-type="default">周末双休<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="06" data-type="default">带薪年假<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="07" data-type="default">交通补助<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="08" data-type="default">通讯补助<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="09" data-type="default">年底双薪<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="10" data-type="default">绩效奖金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="11" data-type="default">生育补贴<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="12" data-type="default">节日礼金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="13" data-type="default">定期体检<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="14" data-type="default">年度旅游<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="15" data-type="default">生日礼金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="16" data-type="default">免费班车<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="17" data-type="default">弹性工作<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="18" data-type="default">年底分红<i class="hbIconMoon"></i></a> </div>
  <div class="rewardMy" style="border:none;">
	<div class="dmentRt dmentRtx">
	  <input type="text" value="" placeholder="添加自定义，最多6个字" name="other_reward">
	  <a href="javascript:;" id="addOtherReward">添加</a> </div>
  </div>
  <div class="departMv"> <a href="javascript:;" class="dMconfirm " id="btnReardSave">确定</a> <a href="javascript:;" class="dMcancel" id="btnRwardCancel">取消</a> </div>
</div>
<!--岗位特点弹窗-->
<div class="rewardDiv" id="feaDiv" style="display:none">
  <div class="tdsureBgtop">
	<div class="tdsureBg" style="height:45px;"> <a href="javascript:;" onclick="job.closeAlert(&quot;#feaDiv&quot;)" class="icon-uniE6005" style="line-height:45px;"></a>
	  <p><span id="jobSortTitle">选择岗位特点</span></p>
	</div>
  </div>
  <div class="departMx"> <span class="dmxLf dmxLf2">最多可选择12项</span> </div>
  <div class="rewardMz" id="feature"> <a href="javascript:;" date-featureid="01" data-type="default">常驻外地<i class="hbIconMoon"></i></a> <a href="javascript:;" date-featureid="02" data-type="default">长期出差<i class="hbIconMoon"></i></a> <a href="javascript:;" date-featureid="03" data-type="default">需要倒班<i class="hbIconMoon"></i></a> <a href="javascript:;" date-featureid="04" data-type="default">夜间工作<i class="hbIconMoon"></i></a> <a href="javascript:;" date-featureid="05" data-type="default">户外工作<i class="hbIconMoon"></i></a> </div>
  <div class="rewardMy" style="border:none;">
	<div class="dmentRt dmentRtx">
	  <input type="text" value="" placeholder="添加自定义，最多6个字" name="other_feature">
	  <a href="javascript:;" id="addOtherFea">添加</a> </div>
  </div>
  <div class="departMv"> <a href="javascript:;" class="dMconfirm " id="btnFeaSave">确定</a> <a href="javascript:;" class="dMcancel" id="btnFeaCancel">取消</a> </div>
</div>
<!--岗位特点弹窗结束--> 
<script>
var job = {
	init:function(){
		area='{$job[jobAreaId]}';
		if(area){
			r_area=area;
		}else{
			r_area=null;
		}
		$('#cur_area').area({showLevel:3,selectArea:r_area,onSelect:function(id,name){
		$('#hddCurArea').val(id);
	}});
		//薪资待遇
		$("#first_salary").click(function(){
			$(".firstSalary").show();
			$(".nextSalary").hide();
		});
		$("#next_salary").click(function(){
			$(".firstSalary").hide();
			$(".nextSalary").show();
		});
		//绑定职位模板
		$("input[name='txtStation']").blur(function(){
			var txtStation = $(this).val();
			//setTemptLateContent(txtStation);
		});
		//绑定职位类别弹窗
		 
		//绑定设置部门弹窗样式
		$("#deptDiv").on('click','.setDepart',function(){
			job.openSetDepartment();
		});
		//绑定福利弹窗样式
		$(".setReward").on('click',function(){
			job.openSetReward();
		});
		//绑定福利弹窗样式
		$(".setFea").on('click',function(){
			job.openSetFea();
		});
		//绑定主职位类别
		$("#mainJobSortDiv").on("click",function(){
			alert_jobsort("main");
		});
		//绑定次要职位类别
		$("#nextJobSortDiv").on("click",function(){
			alert_jobsort("next");
		});
		$("#addNextJobSort").click(function(){
			$(this).hide();
			$("#nextJobSortMain").show();
		});
		$("#deleteNextJobSort").click(function(){
			$("#nextJobSortMain").hide();
			$("#addNextJobSort").show();
			$("#next_jobsort").html("").addClass("mkNull");
			$("input[name='next_jobsort']").val("");
		});
		
		/*联系方式*/
		$("#showLinkway").click(function(){
			$("#linkwaydiv").show();
		});
		$("#notShowLinkway").click(function(){
			$("#linkwaydiv").hide();
		});
		//使用新联系方式
		$("#notUserNewLinkWay").click(function(){
			$("#linkwaydiv .linkManDiv").hide();
		});
		$("#userNewLinkWay").click(function(){
			$("#linkwaydiv .linkManDiv").show();
		});
		
		$(".addLinkWay").live('click',function(){
			//添加联系人
			var length =  $("#linkwaydiv .linkManDiv").length;
			if(length ==1){
				var linkwayhtml = '<div class="myInputTel linkManDiv">'
					+'<input type="text" placeholder="联系人" name="txtLinkMan2" class="mpTel01" value="" />&nbsp;'
					+'<input type="text" placeholder="联系电话" name="txtLinkTel2" class="mpTel02" value="" />&nbsp;'
					+'&nbsp;<a href="javascript:;"  class="mpTel03 addLinkWay">增加</a>&nbsp;'
					+'<a href="javascript:;" class="mpTel03 deleteLinkWay">删除</a>'
					+'</div>';
			}else if(length ==2){
				var linkwayhtml = '<div class="myInputTel linkManDiv">'
					+'<input type="text" placeholder="联系人" name="txtLinkMan3" class="mpTel01" value="" />&nbsp;'
					+'<input type="text" placeholder="联系电话" name="txtLinkTel3" class="mpTel02" value="" />&nbsp;'
					+'<a href="javascript:;" class="mpTel03 deleteLinkWay">删除</a>'
					+'</div>';
			}
			$("#linkwaydiv").append(linkwayhtml);
			$("input[name='newLinkWayCount']").val($("#linkwaydiv .linkManDiv").length);
		});
		//删除新的联系地址
		$(".deleteLinkWay").live('click',function(){
			$(this).parent(".linkManDiv").remove();
			$("input[name='newLinkWayCount']").val($("#linkwaydiv .linkManDiv").length);
		});
		
		//使用邮箱
		$("#notShowEmail").click(function(){
			$("#emaildiv").hide();
		});
		$("#showEmail").click(function(){
			$("#emaildiv").show();
		});
		$("#userNewEmai").click(function(){
			$("#emaildiv .emailInput").show();
		});
		$("#notNewEmail").click(function(){
			$("#emaildiv .emailInput").hide();
		});
		$(".addEmail").live('click',function(){
			var length =  $("#emaildiv .emailInput").length;
			if(length ==1){
				var emailhtml = '<div class="myInputTel emailInput">'
					+'<input type="text" placeholder="邮箱地址" name="email2" class="mpTel02" value="" />'
					+'&nbsp;<a href="javascript:;" class="mpTel03 addEmail">增加</a>&nbsp;'
					+'<a href="javascript:;"class="mpTel03 deleteEmail">删除</a>&nbsp;'
					+'</div>';
			}else if(length ==2){
				var emailhtml = '<div class="myInputTel emailInput">'
					+'<input type="text" placeholder="邮箱地址" name="email3" class="mpTel02" value="" />'
					+'<a href="javascript:;"class="mpTel03 deleteEmail">删除</a>&nbsp;'
					+'</div>';
			}
			$("#emaildiv").append(emailhtml);
			$("input[name='emailCount']").val($("#emaildiv .emailInput").length);
		});
		//删除
		$(".deleteEmail").live('click',function(){
			$(this).parent(".emailInput").remove();
			$("input[name='emailCount']").val($("#emaildiv .emailInput").length);
		});
		
		//开始发布职位
		$("#doJobAdd").click(function(){
			var result = beforeSubmitCheck();
			if(result){
				showLoading();
				$(this).submitForm({success:addJobCallBack, clearForm: false});
			}
		});
		//绑定模板内容
		$(".template a").live("click",function(){
			var template_id = $(this).attr("data-templateid");
			var tree = $(this).parent(".template").next("textarea");
			$.getJSON('/companyjob/getTemplateContentOrOtherNeed/',{template_id:template_id},function(result){
				if(result.content){
					tree.val(result.content);
				}
			});
		});
	},
	openAlert:function(c){
		$(".m_master").show();
		$(c).show();
		$(".addHtmlDept").unbind();
	},
	closeAlert:function(c){
		$(".m_master").hide();
		$(c).hide();
		$(c).find("a").unbind();
		$(c).find("a.deleteDept").die();
		if(c == "#rewardDiv"){
			$("#reward").find("a").die();
		}
		if(c == "#feaDiv"){
			$("#feature").find("a").die();
		}
	},
	closeJobSort:function(c){
		$(".m_master").hide();
		$(c).hide();
		$("#jobsort_alert .top_jobsort ").unbind();
		$("#jobsort_alert .sub_jobsort").unbind();
		$("#jobsort_alert .last_job_sort li a").unbind();
	},
	deleteDept:function(obj){
		var tree = $(obj).parents(".departMy");
		var dept_id =$(obj).attr("data-id");
		if(dept_id !="" && dept_id !=undefined){
			//删除部门数据
			showLoading();
			$.post('/companydeptmanager/deletedept/',{'dept_id':dept_id},function(result){
				closeLoading();
				if(result.error){
					alert(result.error);return;
				}
				deptManager("delete",tree);
			});
		}else{
			deptManager("delete",tree);
		}
		return;
	},
	//设置部门
	openSetDepartment:function(){
		job.openAlert(".deparTment");
		$(".addHtmlDept").bind('click',function(){
			//添加部门
			deptManager("add");
			return;
		});
		//删除部门
		//保存数据
		$("#deptForm .dMconfirm").bind('click',function(){
			showLoading();
			var flag = job.checkMe("deptment");
			if(flag == true){
				$(this).submitForm({success:saveJavCallBack, clearForm: false});
			}
			return;
		});
		//取消
		$("#deptForm .dMcancel").click(function(){
			job.closeAlert(".deparTment");
			refreshDept();
			return;
		});
		return;
		//
	},
	openSetReward:function(){
		job.openAlert("#rewardDiv");
		reward.initialize();
	},
	openSetFea:function(){
		job.openAlert("#feaDiv");
		feature.initialize();
	},
	//检查数据
	checkMe:function(type){
		var flag = true;
		switch(type){
			case "deptment":
				$(".departMybg .departMy").each(function(){
					var word = $(this).find(".dmentRt input").val();
					var order_no = $(this).find(".dmentLt input:first").val();
					var checkNumber = /^[1-9]+[0-9]*]*$/;
					if(!checkNumber.test(order_no)){
						alert("排序只能是大于0的数字");flag = false;return;
					}
					if(word==""){
						alert("部门名称不能为空");flag = false;return;
					}
					if(word.length >15){
						alert("部门名称不能超过15个字");flag = false;return;
					}
				});
				break;
			default:
				flag =  false;
				break;
		}
	   return flag;
		
	}
	 
 };
 
$(document).ready(function(){
	job.init();
});
//设置模板
function setTemptLateContent(jobName){
	//获得模板
	if(jobName ==""){
		return;
	}
	$.getJSON('/companyjob/jobLoadTemplates/',{jobname:jobName},function(result){
		if(result.content && result.content !=""){
			var len = result.content.length;
			var addHtml = "模板：";
			for(var i=0;i<len;i++){
				addHtml = addHtml+"<a href='javascript:;' data-templateid='"+result.content[i].template_id+"'>" +result.content[i].template_name+"</a>";
			}
			$(".template").html(addHtml).show();
		}else{
			$(".template").html("").hide();
		}
	});
	 
}
/*提交表单前验证*/
function beforeSubmitCheck(){
	//验证职位名称
	var msg = "";
	var txtStation = $("input[name='txtStation']").val();
	if(txtStation ==""){
		msg = msg + "职位名称不能为空\n\r";
	}else{
		if(txtStation.length<2 || txtStation.length>20){
			msg = msg + "职位名称请输入2-20个字\n\r";
		}
	}
	//验证职位类别
	var main_jobsort = $("input[name='main_jobsort']").val();
	if(main_jobsort ==""){
		msg = msg+"还未选择职位类别\n\r";
	}
	//验证部门
	var hddJobDept = $("select[name='hddUnit']").val();
	if(hddJobDept == 0 || hddJobDept ==""){
		msg = msg + "还未选择部门\n\r";
	}
	if(typeof(hddJobDept)=='undefined'){
		msg = msg + "还未设置部门\n\r";
	}
	//验证岗位级别
	/*var hddJoblevel = $("select[name='hddJoblevel']").val();
	if(hddJoblevel =="" || hddJoblevel ==0 || typeof(hddJobDept)=='undefined'){
		 msg = msg + "还未选择岗位级别\n\r";
	}*/
	
	//验证招聘人数
	var txtQuantity = $("input[name='txtQuantity']").val();
	var checkNumber = /^[1-9]+[0-9]*]*$/;
	if(txtQuantity < 1 || txtQuantity >999 || !checkNumber.test(txtQuantity)){
		msg = msg+"招聘人数只能为1-999之间的整数\n\r";
	}
	//验证工作地点
	var hddArea = $("input[name='hddArea']").val();
	if(hddArea ==""){
		msg = msg+"请选择职位工作地点\n\r";
	}
	//验证详细地址
	var txtAddInfo = $("input[name='txtAddInfo']").val(); //可为空
	//验证薪资待遇
	var rd = $("input[name='rd']:checked").val();
	if(rd ==0){
		//定额薪资
		var flagSalary = true;
		var hddSalary1 = $("input[name='hddSalary1']").val();
		var hddSalary1End = $("input[name='hddSalary1End']").val();
		if(hddSalary1=="" || hddSalary1End==""){
			msg = msg+"请输入薪资待遇\n\r";
			flagSalary =false;
		}
		if(flagSalary && (hddSalary1 <1000 || hddSalary1>50000 || !checkNumber.test(hddSalary1))){
			msg = msg+"薪资待遇为1000-50000之间的整数\n\r";
			flagSalary =false;
		}
		if(flagSalary && (hddSalary1End <1000 || hddSalary1End>50000 || !checkNumber.test(hddSalary1End))){
			msg = msg+"薪资待遇为1000-50000之间的整数\n\r";
			flagSalary =false;
		}
		var rSalary = hddSalary1End -(2*hddSalary1);
		if(flagSalary && (rSalary >0)){
			msg = msg+"最大薪资不能超过最小薪资的2倍\n\r";
			flagSalary =false;
		}
		
	}else if(rd==1){
		//底薪+提成
		var flagSalaryRd2 = true;
		var hddSalary2 = $("input[name='hddSalary2']").val();
		var hddSalary2End = $("input[name='hddSalary2End']").val();
		var hddSalary3 = $("input[name='hddSalary3']").val();
		var hddSalary3End = $("input[name='hddSalary3End']").val();
		if(hddSalary2 =="" || hddSalary2End=="" || hddSalary3=="" || hddSalary3End==""){
			msg = msg+"薪资待遇不能为空\n\r";
			flagSalaryRd2 =false;
		}
		if(flagSalaryRd2 && (!checkNumber.test(hddSalary2) ||!checkNumber.test(hddSalary2End)|| !checkNumber.test(hddSalary3) || !checkNumber.test(hddSalary3End))){
			msg = msg+"薪资待遇只能是整数\n\r";
			flagSalaryRd2 =false;
		}
		if(flagSalaryRd2 && (hddSalary2 <1000 || hddSalary2>50000)){
			msg = msg+"最低底薪待遇为1000-50000之间的整数\n\r";
			flagSalaryRd2 =false;
		}
		if(flagSalaryRd2 && (hddSalary2End <1000 || hddSalary2End>50000)){
			msg = msg+"最高底薪待遇为1000-50000之间的整数\n\r";
			flagSalaryRd2 =false;
		}
		if(flagSalaryRd2 && (hddSalary3 <1000 || hddSalary3>50000)){
			msg = msg+"最低平均工资为1000-50000之间的整数\n\r";
			flagSalaryRd2 =false;
		}
		if(flagSalaryRd2 && (hddSalary3End <1000 || hddSalary3End>50000)){
			msg = msg+"最高平均工资为1000-50000之间的整数\n\r";
			flagSalaryRd2 =false;
		}
		var rSalary2 = hddSalary2End -(2*hddSalary2);
		if(flagSalaryRd2 && (rSalary2 >0)){
			msg = msg+"最大底薪不能超过最小底薪的2倍\n\r";
			flagSalaryRd2 =false;
		}
		var rSalary3 = hddSalary3End -(2*hddSalary3);
		if(flagSalaryRd2 && (rSalary3 >0)){
			msg = msg+"最大平均工资不能超过最小平均工资的2倍\n\r";
			flagSalaryRd2 =false;
		}
		if(flagSalaryRd2 && (hddSalary3 < hddSalary2 || hddSalary3End<hddSalary2End)){
			msg = msg+"平均工资需要大于底薪\n\r";
			flagSalaryRd2 =false;
		}
	}else{
		msg = msg+"请选择薪资待遇类型\n\r";
	}
	//验证岗位职责
	var txtContent = $("textarea[name='txtContent']").val();
	if(txtContent ==""){
		 msg = msg+"岗位职责不能为空\n\r";
	}else if(txtContent.length <20 || txtContent.length>2000){
		msg = msg+"岗位职责在20-2000字以内\n\r";
	}
	//验证任职资格
	/*var txtOtherNeed = $("textarea[name='txtOtherNeed']").val();
	 if(txtOtherNeed ==""){
		 msg = msg+"任职资格不能为空\n\r";
	}else if(txtOtherNeed.length <20 || txtOtherNeed.length>2000){
		msg = msg+"任职资格在20-2000字以内\n\r";
	}*/
	//验证有效期
	/*var txtValidDays = $("input[name='txtValidDays']").val();
	if(txtValidDays <1 || txtValidDays >60 || !checkNumber.test(txtValidDays)){
		msg = msg+"职位有效期请输入1-60之间的整数\n\r";
	}*/
	//验证联系方式
	var showLinkway = $("input[name='showLinkway']:checked").val();
	var newLinkway = $("input[name='newLinkway']:checked").val();
	if(showLinkway ==1 && newLinkway ==1){
		//获得联系方式的数量
		var newLinkWayCount = $("input[name='newLinkWayCount']").val();
		var txtLinkMan1 = $("input[name='txtLinkMan1']").val();
		var txtLinkTel1 = $("input[name='txtLinkTel1']").val();
		if(txtLinkMan1=="" || txtLinkTel1==""){
			msg = msg+"第一个联系人和联系电话不能为空\n\r";
		}
		
		if(newLinkWayCount >1){
			var txtLinkMan2 = $("input[name='txtLinkMan2']").val();
			var txtLinkTel2 = $("input[name='txtLinkTel2']").val();
			if(txtLinkMan2=="" || txtLinkTel2==""){
				msg = msg+"第二个联系人和联系电话不能为空\n\r";
			}
		}
		
		if(newLinkWayCount >2){
			var txtLinkMan3 = $("input[name='txtLinkMan3']").val();
			var txtLinkTel3 = $("input[name='txtLinkTel3']").val();
			if(txtLinkMan3=="" || txtLinkTel3==""){
				msg = msg+"第三个联系人和联系电话不能为空\n\r";
			}
		}
	}
	//验证邮箱
	var toMail = $("input[name='toMail']:checked").val();
	var emailType = $("input[name='emailType']:checked").val();
	if(toMail ==1 && emailType==3){
		var emailCount = $("input[name='emailCount']").val();
		var email1 = $("input[name='email1']").val();
		if(email1==""){
			msg = msg+"邮箱地址不能为空\n\r";
		}
		if(emailCount >1){
			var email2 = $("input[name='email2']").val();
			if(email2==""){
				msg = msg+"邮箱地址不能为空\n\r";
			}
		}
		if(emailCount >2){
			var email3 = $("input[name='email3']").val();
			if(email3==""){
				msg = msg+"邮箱地址不能为空\n\r";
			}
		}
	}
	
	if(msg!=""){
		alert(msg);return false;
	}
	return true;
	
}
 //添加职位成功
function addJobCallBack(json){
	closeLoading();
	//成功
	if ($("#jid").val()){
		if(json.licenseStatus==1||json.licenseStatus==2||json.licenseStatus==-1){
			alert('职位修改成功!');
			window.location.href = '/company/job/index.html?status='+{$status};
		}else {
			//添加数据出现异常
			alert(json.msg);return;
		}
	}else{
		if(json.licenseStatus==1||json.licenseStatus==2||json.licenseStatus==-1){
			alert('职位发布成功!')
			window.location.href = '/company/job/index.html?status='+{$status};
		}else {
			//添加数据出现异常
			alert(json.msg);return;
		}
	}
}
//保存部门成功
function saveJavCallBack(result){
	closeLoading();
	if(result.status>0){
		alert("部门保存成功");
		job.closeAlert(".deparTment");
		refreshDept();//return;
	}else{
		alert(result.msg);
	}
}
//刷新部门弹窗数据
function refreshDeptAlert(data){
//var deptAlertHtml =  '<div class="departMybg">';
	var deptAlertHtml = "";
	if(data.length >0){
		for(var i=0;i<data.length;i++){
			deptAlertHtml = deptAlertHtml +'<div class="departMy">'
			deptAlertHtml = deptAlertHtml + '<div class="dmentLt">';
			deptAlertHtml = deptAlertHtml + '<input type="text" value="'+data[i].order_no+'" name="editOrder[]" />';
			deptAlertHtml = deptAlertHtml + '<input type="hidden" value="'+data[i].dept_id+'" name="deptids[]"/>';
			deptAlertHtml = deptAlertHtml + '</div>';
			deptAlertHtml = deptAlertHtml + '<div class="dmentRt">';
			deptAlertHtml = deptAlertHtml +'<input type="text" placeholder="请输入部门名称" value="'+data[i].name+'" name="editDept[]" />';
			//deptAlertHtml = deptAlertHtml +'<a href="javascript:;"  data-id="'+data[i].id+'" onclick="job.deleteDept(this)" class="deleteDept">删除</a>';
			deptAlertHtml = deptAlertHtml +'</div>';
			deptAlertHtml = deptAlertHtml + '</div>';
		}
		deptAlertHtml = deptAlertHtml + '<div id="deptNoData" style="display:none">还没有添加部门，现在开始添加吧！</div>'
	}else{
		deptAlertHtml = deptAlertHtml + '<div id="deptNoData">还没有添加部门，现在开始添加吧！</div>'
	}
	$(".departMybg").html(deptAlertHtml);
}

//更新部门数据
function refreshDept(){
	var jobDeptName = $("select[name='hddJobDept']").val();
	$.getJSON('/api/web/company.api',{'act':'getUnit','cid':'{$cid}'},function(result){
		if(result.status<1){
			alert(result.msg);return;
		}
		//刷新部门数据
		if(result.status>0){
			var deptSelectHtml ='<em style="color:red" class="deptValueSelect">暂无部门，请先设置部门</em>';
			if(result.dept_data.length >0){
				deptSelectHtml ="<select name='hddJobDept' class='deptValueSelect mKeywSelect'>";
				var dept = result.dept_data;
				for(var i=0;i<dept.length;i++){
					if(jobDeptName == dept[i].name){
						deptSelectHtml = deptSelectHtml + "<option value='"+dept[i].id+"' selected='selected'> "+dept[i].name+" </option>";
					}else{
						deptSelectHtml = deptSelectHtml + "<option value='"+dept[i].id+"'> "+dept[i].name+" </option>";
					}
				}
				deptSelectHtml = deptSelectHtml+"</select>";
			}
			$("#deptDiv .deptValueSelect").remove();
			$("#deptDiv").append(deptSelectHtml);
			//更新弹窗数据
			refreshDeptAlert(result.dept_data);
			return;
		}else{
			alert("部门数据加载失败！");return;
		}
	});
}

/*对部门的操作 type为类型 tree为节点*/
function deptManager(type,tree){
	var deptHtml = '<div class="departMy">'
					+'<div class="dmentLt">'
					+'<input type="text" value="" name="addOrder[]" />'
					+'</div>'
					+'<div class="dmentRt">'
					+'<input type="text"  placeholder="请输入部门名称" value="" name="addDept[]" />'
					+'<a href="javascript:;" data-id="" onclick="job.deleteDept(this)" class="deleteDept">删除</a>'
					+'</div> </div>';
	switch(type){
		case "add":
			//自动添加编号
			var last_no = $(".departMybg .departMy:last .dmentLt input").val();
			if(last_no == undefined || last_no == 'undefined' || last_no ==''){
				last_no = 0;
			}
			if($(".departMybg .departMy").length >=30){
				alert("最多只能添加30个部门");return;
			}
			$(".deparTment .departMybg").append(deptHtml);

			$("#deptNoData").hide();
			$(".departMybg .departMy:last .dmentLt input").val(parseInt(last_no)+1);
			return;
			break;
		case "delete":
			tree.remove();
			alert("删除部门成功");
			if($(".departMybg .departMy").length <=0){
				$("#deptNoData").show();
			}
			return;
			break;
	}
	return;
}

//点击取消后修正福利弹窗的数据
function backRewardAlert(){
	//获得所有福利数据
	var defaultReward  = $("input[name='hidDefaultReward']").val();
	var hidOtherReward = $("input[name='hidOtherReward']").val();
	$("#reward a").each(function(){
		var type = $(this).attr("data-type");
		var data_rewardid = $(this).attr("date-rewardid");
		if(type=="default"){
			if(defaultReward ==""){
				$(this).removeClass("cut");
			}else{
				var defaultReward_arr = defaultReward.split(",");
				if(defaultReward_arr.indexOf(data_rewardid) >=0){
					$(this).addClass("cut");
				}else{
					$(this).removeClass("cut");
				}
			}
		}else if(type=="other"){
			if(hidOtherReward ==""){
				$(this).removeClass("cut");
			}else{
				var hidOtherReward_arr = hidOtherReward.split(",");
				var data_rewardname = $(this).html();
				data_rewardname = data_rewardname.substring(0,data_rewardname.indexOf("<i"));
				if(hidOtherReward_arr.indexOf(data_rewardname) >=0){
					$(this).addClass("cut");
				}else{
					$(this).removeClass("cut");
				}
			}
		}
	});
}
//刷新福利
function refreshReward(defaultReward,defaultRewardName,otherReward){
	$("#hidDefaultReward").val(defaultReward);
	$("#hidOtherReward").val(otherReward);
	var reward_html = '';
	var defaultReward_arr = [];
	var otherReward_arr = [];
	if(defaultRewardName != ''){
		defaultReward_arr =defaultRewardName.split(',');
	}
	if(otherReward !=''){
		otherReward_arr = otherReward.split(',');
	}
	for(var i=0;i<defaultReward_arr.length;i++){
		reward_html = reward_html+"<b>"+defaultReward_arr[i]+"</b>";
	}
	for(var k=0;k<otherReward_arr.length;k++){
		reward_html = reward_html+"<b>"+otherReward_arr[k]+"</b>";
	}
	if(reward_html ==""){
		reward_html = '<b class="mkNull"></b>';
	}
	$("#mkDtment").html(reward_html);
	
}
//绑定福利
	var cacheDefaultReward = '';
	var cacheDefaultName = '';
	var cacheOtherReward = '';
	var count_reward =parseInt(6);
	var reward = {
		initialize:function(){
					//情况缓存数据
					cacheDefaultReward ='';
					cacheOtherReward = '';  
					cacheDefaultName = '';
					count_reward = $("#reward a.cut").length;
					$("#addOtherReward").bind('click',function(){
						if(parseInt(count_reward)>=12){
							alert("最多只能选择12项福利");
							return false;
						}
						var v = $("input[name='other_reward']").val();
						if(v==''){
							alert('添加福利不能为空');
							return false;
						}
						if(v.length>6){
							alert('添加福利不能超过6个字符');
							return false;
						}
						var other_reward_html = "<a href='javascript:;' date-rewardid=0  data-type='other' class='cut'>"+v+"<i class='hbIconMoon'>&#xe0fb;</i></a>"
						$("#reward").append(other_reward_html);
						count_reward = parseInt(count_reward)+1;
						$("input[name='other_reward']").val("");
						$("input[name='other_reward']").attr({'placeholder':'添加自定义，最多6个字'});
					});
					$("#reward").find("a").live("click", "a", function(){
						var c = $(this).attr('class');
						if(c == 'cut'){
							count_reward = parseInt(count_reward)-1;
							if(count_reward <=0){count_reward =0;}
							$(this).removeClass('cut');
						}else{
							if(parseInt(count_reward)>=12){
								alert("最多只能选择12项福利");
								return false;
							}
							count_reward = parseInt(count_reward)+1;
							$(this).addClass('cut');
						}
					}); 
					$("input[name='other_reward']").focus(function(){
						$("input[name='other_reward']").attr({'placeholder':''});
					}).blur(function(){
						var v = $("input[name='other_reward']").val();
						if(v ==''){
							$("input[name='other_reward']").attr({'placeholder':'添加自定义，最多6个字'});
						}
					});
					$("#btnRwardCancel").click(function(){
						//取消并清空缓存
						cacheDefaultReward ='';
						cacheOtherReward = '';  
						cacheDefaultName = '';
						//关闭弹窗
						job.closeAlert("#rewardDiv");
						//还原福利原来的弹窗数据
						backRewardAlert();
					});
					$("#btnReardSave").click(function(){
						reward.getCacheData();
						refreshReward(cacheDefaultReward,cacheDefaultName,cacheOtherReward);
						//关闭弹窗
						job.closeAlert("#rewardDiv");
					});
		},
		successCallBack:function(result){
					
				},
				getCacheData:function(){
					$("#reward a").each(function(){
						var c = $(this).attr('class');//是否选择
						var type = $(this).attr('data-type');
						
						if(c == 'cut'){
							if(type =='default'){
								var reward_id = $(this).attr('date-rewardid');
								var reward_name = $(this).html();
								reward_name = reward_name.toLocaleLowerCase();
								reward_name = reward_name.substring(0,reward_name.indexOf("<i"));
								if(cacheDefaultName == ''){
									cacheDefaultName = reward_name;
								}else{
									cacheDefaultName = cacheDefaultName + ','+reward_name;
								}
								if(cacheDefaultReward == ''){
									cacheDefaultReward = reward_id;
								}else{
									cacheDefaultReward = cacheDefaultReward + ','+reward_id;
								}
							}else{
								var reward = $(this).html();
								reward = reward.toLocaleLowerCase();
								reward = reward.substring(0,reward.indexOf("<i"));
								if(cacheOtherReward == ''){
									cacheOtherReward = reward;
								}else{
									cacheOtherReward = cacheOtherReward + ','+$.trim(reward);
								}
							}
						}
					});
				}
		}
//点击取消后修正岗位特点弹窗的数据
function backFeaAlert(){
	//获得所有福利数据
	var hidDefaultFea  = $("input[name='hidDefaultFea']").val();
	var hidOtherFea = $("input[name='hidOtherFea']").val();
	$("#feature a").each(function(){
		var type = $(this).attr("data-type");
		var data_rfeatureid = $(this).attr("date-featureid");
		if(type=="default"){
			if(hidDefaultFea ==""){
				$(this).removeClass("cut");
			}else{
				var defaultFea_arr = hidDefaultFea.split(",");
				if(defaultFea_arr.indexOf(data_rfeatureid) >=0){
					$(this).addClass("cut");
				}else{
					$(this).removeClass("cut");
				}
			}
		}else if(type=="other"){
			if(hidOtherFea ==""){
				$(this).removeClass("cut");
			}else{
				var hidOtherFea_arr = hidOtherFea.split(",");
				var data_fea = $(this).html();
				data_fea = data_fea.substring(0,data_fea.indexOf("<i"));
				if(hidOtherFea_arr.indexOf(data_fea) >=0){
					$(this).addClass("cut");
				}else{
					$(this).removeClass("cut");
				}
			}
		}
	});
}		
 /*岗位特点的弹窗*/
 function refreshFea(defaultFea,defaultFeaName,otherFea){
	$("#hidDefaultFea").val(defaultFea);
	$("#hidOtherFea").val(otherFea);
	//重新展示页面
	var fea_html = '';
	var defaultFea_arr = [];
	var otherFea_arr = [];
	if(defaultFeaName != ''){
		defaultFea_arr =defaultFeaName.split(',');
	}
	if(otherFea !=''){
		otherFea_arr = otherFea.split(',');
	}
	for(var i=0;i<defaultFea_arr.length;i++){
		fea_html = fea_html+"<b>"+defaultFea_arr[i]+"</b>";
	}
	for(var k=0;k<otherFea_arr.length;k++){
		fea_html = fea_html+"<b>"+otherFea_arr[k]+"</b>";
	}
	if(fea_html ==""){
		fea_html = '<b class="mkNull"></b>';
	}
	$("#selectedFea").html(fea_html);
 }
	var cacheDefaultFea = '';
	var cacheDefaultName = '';
	var cacheOtherFea = '';
	var fea_count = 0;
	var feature = {
		initialize:function(){
					//情况缓存数据
					cacheDefaultFea ='';
					cacheOtherFea = '';  
					cacheDefaultName = '';
					fea_count = $("#feature a.cut").length;
					$("#addOtherFea").bind('click',function(){
						if(parseInt(fea_count)>=12){
							alert("最多只能选择12项岗位特点");
							return false;
						}
						var v = $("input[name='other_feature']").val();
						if(v==''){
							alert('添加岗位特点不能为空');
							return false;
						}
						if(v.length>6){
							alert('添加岗位特点不能超过6个字符');
							return false;
						}
						var other_feature_html = "<a href='javascript:;' date-featureid=0  data-type='other' class='cut'>"+v+"<i class='hbIconMoon'>&#xe0fb;</i></a>"
						$("#feature").append(other_feature_html);
						fea_count = parseInt(fea_count)+1;
						$("input[name='other_feature']").val("");
						$("input[name='other_feature']").attr({'placeholder':'添加自定义，最多6个字'});
					});
						$("#feature").find("a").live("click", "a", function(){
							var c = $(this).attr('class');
							if(c == 'cut'){
								fea_count = parseInt(fea_count)-1;
								if(fea_count <=0){fea_count =0;}
								$(this).removeClass('cut');
							}else{
								if(parseInt(fea_count)>=12){
									alert("最多只能选择12项岗位特点");
									return false;
								}
								fea_count = parseInt(fea_count)+1;
								$(this).addClass('cut');
							}
						}); 
					$("input[name='other_feature']").focus(function(){
						$("input[name='other_feature']").attr({'placeholder':''});
					}).blur(function(){
						var v = $("input[name='other_feature']").val();
						if(v ==''){
							$("input[name='other_feature']").attr({'placeholder':'添加自定义，最多6个字'});
						}
					});
					$("#btnFeaCancel").click(function(){
						//取消并清空缓存
						cacheDefaultFea ='';
						cacheOtherFea = '';  
						cacheDefaultName = '';
						//关闭弹窗
						job.closeAlert("#feaDiv");
						backFeaAlert();
					});
					$("#btnFeaSave").click(function(){	 
						feature.getCacheData();
						refreshFea(cacheDefaultFea,cacheDefaultName,cacheOtherFea);
//						$.anchorMsg("保存成功",{onclose:function(){
//						  $('#btnReardSave').closeDialog();
//						}});
						// 关闭弹窗
						job.closeAlert("#feaDiv");
					});
		},
		successCallBack:function(result){
					
				},
				getCacheData:function(){
					 $("#feature a").each(function(){
						var c = $(this).attr('class');//是否选择
						var type = $(this).attr('data-type');
					  
						if(c == 'cut'){
							if(type =='default'){
								var feature_id = $(this).attr('date-featureid');
								var feature_name = $(this).html();
								feature_name = feature_name.toLocaleLowerCase();
								feature_name = feature_name.substring(0,feature_name.indexOf("<i"));
								if(cacheDefaultName == ''){
									cacheDefaultName = feature_name;
								}else{
									cacheDefaultName = cacheDefaultName + ','+feature_name;
								}
								if(cacheDefaultFea == ''){
									cacheDefaultFea = feature_id;
								}else{
									cacheDefaultFea = cacheDefaultFea + ','+feature_id;
								}
							}else{
								var feature = $(this).html();
								feature = feature.toLocaleLowerCase();
								feature = feature.substring(0,feature.indexOf("<i"));
								if(cacheOtherFea == ''){
									cacheOtherFea = feature;
								}else{
									cacheOtherFea = cacheOtherFea + ','+$.trim(feature);
								}
							}
						}
					}); 
				}
				
		} 
		
var jobsort = "";
var count_jobsort = 0;
var jobsort_name = "";	   
 //职位类别弹窗
 function alert_jobsort(type){
		if(type =="main"){
			$("#jobSortTitle").html("职位类别");
		}else if(type =="next"){
			$("#jobSortTitle").html("次要类别");
		}
		//职位类别弹窗
		job.openAlert("#jobsort_alert");
		$(".top_jobsort").bind('click',function(){
			//清空其他元素
			clearJobSort();
			var flag = $(this).hasClass("cut");
			if(flag){
				$(this).find("i").removeClass("icon-uniE620").addClass("icon-uniE604");
				$(this).removeClass("cut");
				//关闭子元素
				$(this).nextAll().each(function(){
					$(this).hide();
				});
			}else{
				$(this).find("i").removeClass("icon-uniE604").addClass("icon-uniE620");
				$(".top_jobsort").removeClass('cut').nextAll().each(function(){$(this).hide();});
				$(this).addClass("cut");
				$(this).nextAll().each(function(){
					$(this).show();
				});
			}
		});
		$(".sub_jobsort").bind('click',function(){
			//清空其他元素
			clearJobSort();
			var flag = $(this).hasClass("cut");
			if(flag){
				$(this).removeClass("cut");
				$(this).find("ul").hide();
			}else{
				$(".sub_jobsort").removeClass("cut");
				$(this).addClass("cut");
				$(this).find("ul").show();
			}
		});
		$(".last_job_sort li a").bind('click',function(event){
			event.stopPropagation();
			var jobsort = "";
			var jobsort_name = "";
			jobsort = $(this).attr("jobsort-id");
			jobsort_name = $(this).attr("jobsort-name");
			if(type == "main"){
				$("#main_jobsort").html(jobsort_name).removeClass("mkNull");
				$("input[name='main_jobsort']").val(jobsort);
				$("input[name='hddJobsort']").val(jobsort);
			}else if(type=="next"){
				$("#next_jobsort").html(jobsort_name).removeClass("mkNull");
				$("input[name='next_jobsort']").val(jobsort);
				main_jobsort=$("input[name='main_jobsort']").val();
				$("input[name='hddJobsort']").val(main_jobsort+','+jobsort);
			}
			job.closeJobSort("#jobsort_alert");
			//清空弹窗
			clearJobSort();
	});
}

function clearJobSort(){
	$("#jobsort_alert .top_jobsort").find(".cut").removeClass("cut");
	$("#jobsort_alert .sub_jobsort").find(".cut").removeClass("cut");
	$("#jobsort_alert .sub_jobsort ul").hide();
}
</script>
</body>
</html>