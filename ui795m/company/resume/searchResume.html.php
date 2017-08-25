<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>简历搜索-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<style>
		#eduChk {min-height: 40px; padding:10px 11px 10px 96px;}
		#eduChk label,#eduChk input{ margin:5px 5px 3px 0; display: inline-block;}
		.keyChb {text-align: left; padding:15px 10px 10px 10px; font-size: 14px;display: inline-block;}
		.keyChb input {position: relative; top:2px;margin:0 3px 0 2px;display: inline-block;}
		@media (max-width:320px){
			.keyChb {padding-left: 5px;}
		}
		.freeTip{padding:50px 10px 50px 10px; height: 100%; font-size: 16px; text-align: center; background: #fff;}
		.freeTip a{color: #3D84B8;}
	</style>
</head>
<body>
<!--{if $com['comIntegrity']<60}-->
	<div class="loginPop" id="companyMainTop">
		<div class="loginTopBg "> <a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a> 发布职位 </div>
		<div class="freeTip">
			尊敬的企业用户，暂时不能搜索简历，请先完善您的企业资料。
			<a href="/company/account/info.html">完善企业资料</a>
		</div>
	</div>
<!--{elseif $com['licenceCheck']<1}-->
	<div class="loginPop" id="companyMainTop">
		<div class="loginTopBg "> <a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a> 发布职位 </div>
		<div class="freeTip">
			尊敬的企业用户，您的营业执照未通过审核，暂时不能搜索简历。<a href="/company/account/licence.html">查看营业执照状态</a>
		</div>
	</div>
<!--{else}-->
	<div class="loginPop">
	<div class="loginTopBg"><a href="/company/resume/"><i class="icon-uniE6005"></i></a>简历搜索</div>
	</div>
	<form id="frmResumeSearch" method="get" action="/company/resume/searchResume.html" >
	<input type="hidden" id="hddbuildseeker" name="hddbuildseeker" value="">
	<input type="hidden" id="hddqueryString" name="hddqueryString" value="">
	<input type="hidden" id="hddKeytype" name="hddKeytype" value="0" >
	<input type="hidden" id="hddPageSize" name="hddPageSize" value="20">
	<input type="hidden" id="hddIsList" name="hddIsList" value="1">
	<input type="hidden" id="hddGroupJson" name="hddGroupJson" value="all::1W+;;">
	<input type="hidden" id="hddpostvar" name="hddpostvar" value="bf0539a8978b2fcaabe3a77beaf3f33e">
	<input type="hidden" id="hddIsfirstPost" name="hddIsfirstPost" value="1">
	<input type="hidden" id="act" name="act" value="search">
	<div class="keyChb">
		<label for="chkDegree1"><input type="checkbox" name="qw[]" id="chkDegree1" <!--{if in_array(1, $query[qw])}-->checked="checked"<!--{/if}--> value="1" class="chb">求职意向</label>
		<label for="chkDegree2"><input type="checkbox" name="qw[]" id="chkDegree2" <!--{if in_array(2, $query[qw])}-->checked="checked"<!--{/if}--> value="2" class="chb">历史职位</label>
		<label for="chkDegree3"><input type="checkbox" name="qw[]" id="chkDegree3" <!--{if in_array(3, $query[qw])}-->checked="checked"<!--{/if}--> value="3" class="chb">历史公司</label>
		<label for="chkDegree4"><input type="checkbox" name="qw[]" id="chkDegree4" <!--{if in_array(4, $query[qw])}-->checked="checked"<!--{/if}--> value="4" class="chb">教育经历</label>
		<label for="chkDegree8"><input type="checkbox" name="qw[]" id="chkDegree8" <!--{if in_array(8, $query[qw])}-->checked="checked"<!--{/if}--> value="8" class="chb">姓名</label>
		<label for="chkDegree4"><input type="checkbox" name="qw[]" id="chkDegree9" <!--{if in_array(9, $query[qw])}-->checked="checked"<!--{/if}--> value="9" class="chb">全文</label>
		
	</div>
	<div class="mKeywordBg">
		<span>关键字</span>
		<input type="text" placeholder="请输入关键字" id="txtKeyword" name="txtKeyword" class="mKeywText mKeywTextgray" value="{$query[keyword]}" autocomplete="off">
	</div>
	<div class="mKeywordP">
		<h2><em>求职意向</em></h2>
		<!-- <div class="mKeywordBg mKeywordBgc">
			<span>简历编号</span>
				<input type="text" placeholder="" name="currArea" class="mKeywText">
		</div> -->
		<!-- <div class="mKeywordBg mKeywordBgc">
			<span>期望职位</span>
				<input type="text" placeholder="" name="currArea" class="mKeywText">
		</div> -->
		<!-- <div class="mKeywordBg mKeywordBgc" id="area">
			<span>现居住地</span>
			<em class="cut" id="excp_area_name">不限</em>
			<input type="hidden" name="expArea">
			<i class="icon-uniE603"></i>
		</div> -->
		<div class="mKeywordBg mKeywordBgc" id="area">
			<span>期望地区</span>
			<em class="cut" id="excp_area_name">不限</em>
			<input type="hidden" name="expArea">
			<i class="icon-uniE603"></i>
		</div>
		<div class="mKeywordBg mKeywordBgc" id="residence">
			<span>现居住地</span>
			<em class="cut" id="residence_name">不限</em>
			<input type="hidden" name="residence">
			<i class="icon-uniE603"></i>
		</div>
		<div class="mKeywordBg mKeywordBgc" id="jobsort">
			<span>职位类别</span>
			<em id="jobsort_name">不限</em>
			<i class="icon-uniE603"></i>
			<input type="hidden" name="jobsort">
		</div>
		<div id="calling" class="mKeywordBg mKeywordBgc">
			<span>行业类别</span>
			<em id="excp_calling_name">不限</em>
			<input type="hidden" name="calling">
			<i class="icon-uniE603"></i>
		</div>
		<!-- <div class="mKeywordBg mKeywordBgc" id="area">
			<span>户籍地</span>
			<em class="cut" id="excp_area_name">不限</em>
			<input type="hidden" name="expArea">
			<i class="icon-uniE603"></i>
		</div> -->
		<!-- <div class="mKeywordBg mKeywordBgc" id="company_calling">
			<span>所属行业</span>
			<em id="calling_name">不限</em>
			<input type="hidden" name="workcalling">
			<i class="icon-uniE603"></i>
		</div> -->
		<h2><em>其他条件</em></h2>
		<div id="sex" class="mKeywordBg mKeywordBgc">
			<span id="sex_name">性别</span>
			<select name="radSex" class="mKeywSelect">
				  <option value="0">不限</option>
				<option value="1">男</option>
				<option value="2">女</option>
			</select>
		</div>
		<div class="mKeywordBg mKeywordBgc">
			<span>年龄</span>
			<div class="mKeycAge">
				<div class="mKeycAgelf">
					<input type="tel" placeholder="" name="txtAgeLower" class="mAgeText" autocomplete="off">
					<div>岁</div>
				</div>
				<div style="width:12px; float:left; color:#a1abb3; line-height:35px; padding:0 0 0 5px;">-</div>
				<div class="mKeycAgelf">
					<input type="tel" placeholder="" name="txtAgeUpper" class="mAgeText" autocomplete="off">
					<div>岁</div>
				</div>
			</div>
		</div>
		<div class="mKeywordBg mKeywordBgc">
			<span>身高</span>
			<div class="mKeycAge">
				<div class="mKeycAgelf">
					<input type="tel" placeholder="" name="txtMinStature" class="mAgeText" autocomplete="off">
					<div>cm</div>
				</div>
				<div style="width:12px; float:left; color:#a1abb3; line-height:35px; padding:0 0 0 5px;">-</div>
				<div class="mKeycAgelf">
					<input type="tel" placeholder="" name="txtMaxStature" class="mAgeText" autocomplete="off">
					<div>cm</div>
				</div>
			</div>
		</div>
		<div class="mKeywordBg mKeywordBgc">
			<span>工作年限</span>
				<select name="ddlMinWrokYear" class="mKeywSelect" style="width:45%;float:left;">
					<option value="0">不限</option>
					<option value="99">应届毕业生</option>
					<option value="1">1年</option>
					<option value="2">2年</option>
					<option value="3">3年</option>
					<option value="4">4年</option>
					<option value="5">5年</option>
					<option value="6">6年</option>
					<option value="7">7年</option>
					<option value="8">8年</option>
					<option value="9">9年</option>
					<option value="20">10年以上</option>
				</select>
				<div style="width:12px; float:left; color:#a1abb3; line-height:35px; padding:0 0 0 5px;">-</div>
				<select name="ddlMaxWrokYear" class="mKeywSelect" style="width:45%;float:left;">
					<option value="0">不限</option>
					<option value="99">应届毕业生</option>
					<option value="1">1年</option>
					<option value="2">2年</option>
					<option value="3">3年</option>
					<option value="4">4年</option>
					<option value="5">5年</option>
					<option value="6">6年</option>
					<option value="7">7年</option>
					<option value="8">8年</option>
					<option value="9">9年</option>
					<option value="20">10年以上</option>
				</select>
		</div>
		<div class="mKeywordBg mKeywordBgc" id="eduChk">
			<span>最低学历</span>
			<label for="chkDegree0"><input type="checkbox" name="chkDegree[]" id="chkDegree0" <!--{if $maxEdu[0]==1}-->checked="checked"<!--{/if}--> value="0" >不限</label>
			<label for="chkDegree01"><input type="checkbox" name="chkDegree[]" id="chkDegree01" value="10" <!--{if $maxEdu[10]==1}-->checked="checked"<!--{/if}-->>小学</label>
			<label for="chkDegree02"><input type="checkbox" name="chkDegree[]" id="chkDegree02" value="20" <!--{if $maxEdu[20]==1}-->checked="checked"<!--{/if}-->>初中</label>
			<label for="chkDegree03"><input type="checkbox" name="chkDegree[]" id="chkDegree03" value="30" <!--{if $maxEdu[30]==1}-->checked="checked"<!--{/if}-->>高中</label>
			<label for="chkDegree04"><input type="checkbox" name="chkDegree[]" id="chkDegree04" value="40" <!--{if $maxEdu[40]==1}-->checked="checked"<!--{/if}-->>中技/中专</label>
			<label for="chkDegree05"><input type="checkbox" name="chkDegree[]" id="chkDegree05" value="50" <!--{if $maxEdu[50]==1}-->checked="checked"<!--{/if}-->>大专</label>
			<label for="chkDegree06"><input type="checkbox" name="chkDegree[]" id="chkDegree06" value="60" <!--{if $maxEdu[60]==1}-->checked="checked"<!--{/if}-->>本科</label>
			<label for="chkDegree07"><input type="checkbox" name="chkDegree[]" id="chkDegree07" value="70" <!--{if $maxEdu[70]==1}-->checked="checked"<!--{/if}-->>硕士</label>
			<label for="chkDegree08"><input type="checkbox" name="chkDegree[]" id="chkDegree08" value="80" <!--{if $maxEdu[80]==1}-->checked="checked"<!--{/if}-->>博士</label>
			<label for="chkDegree09"><input type="checkbox" name="chkDegree[]" id="chkDegree09" value="90" <!--{if $maxEdu[90]==1}-->checked="checked"<!--{/if}-->>博士后</label>
		</div>
		<div class="mKeywordBg mKeywordBgc">
			<span id="sex_name">公开程度</span>
			<select name="display" class="mKeywSelect">
				<option value="0">不限</option>
				<option value="1">公开</option>
				<option value="2">半公开</option>
			</select>
		</div>
		<!-- <h2><em>工作经历</em></h2>
		<div class="mKeywordBg mKeywordBgc">
			<span>职位名称</span>
			<input type="text" placeholder="" name="workOffice" value="{$query[workOffice]}"  class="mKeywText">
		</div>
		<div class="mKeywordBg mKeywordBgc">
			<span>公司名称</span>
			<input type="text" placeholder=""  name="workName" value="{$query[workName]}" class="mKeywText">
		</div> -->
		<!-- <div id="sex" class="mKeywordBg mKeywordBgc">
			<span id="sex_name">婚姻</span>
			<select name="radMarriage" class="mKeywSelect">
				  <option value="">不限</option>
				<option value="1">未婚</option>
				<option value="2">已婚</option>
			</select>
		</div> -->
		<!-- <div class="mKeywordBg mKeywordBgc">
			<span work_year1="">工作经验</span>
			<select name="work_year1" class="mKeywSelect">
				<option value="0">不限</option>
				<option value="99">应届毕业生</option>
				<option value="01">1年及以上</option>
				<option value="02">2年及以上</option>
				<option value="03">3年及以上</option>
				<option value="04">4年及以上</option>
				<option value="05">5年及以上</option>
				<option value="06">6年及以上</option>
				<option value="07">7年及以上</option>
				<option value="08">8年及以上</option>
				<option value="09">9年及以上</option>
				<option value="10">10年及以上</option>
			</select>
		</div> -->
		
	</div>
	</form>
	<!--浮动窗停止招聘延期-->
	<div class="mRecruit">
		<a href="javascript:;" id="searchSubmit" style="width:75%;">搜索</a>
	</div>
	<!--浮动窗选择-->
	<div class="m_master" style="display:none"></div>

	<div class="m_master" style="display:none;"></div>
	<!--职位类别弹窗-->
	<div class="tdSearch" id="jobsort_alert" style="display: none">
		<div class="tdsureBgtop">
				<div class="tdsureBg">
					<a href="javascript:;" onclick="console_all_alert();" class="icon-uniE6005"></a>
					<p><span>职位类别</span><br><em>最多可选择五项</em></p>
					<a href="javascript:;" id="bssure_jobsort" class="bssure">确定</a>
				</div>
		</div>
		<div style="width:100%; overflow:hidden;background:#fff;position:absolute; top:60px; left:0; z-index:3; ">
			<dl>
				<dt class="top_jobsort" id="no_jobsort">不限</dt>
			</dl>
			<!--{loop $jobs $key $_job1}-->
			<dl>
				<dt class="top_jobsort">{$_job1['jobsort_name']}<i class="icon-uniE604"></i></dt>
				<!--{loop $jobs[$key]['subItems'] $k  $_job2}-->
					<dd class="sub_jobsort" style="display:none" jobsort-id="{$_job2['jobsort']}" jobsort-name="{$_job2['jobsort_name']}">{$_job2['jobsort_name']}<em class="icon-uniE603"></em>
						<!--三级数据-->
						<ul style="display:none" class="last_job_sort">
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

	<!--行业类别弹窗-->
	<div class="tdSearch" id="calling_alert" style="display: none">
		<div class="tdsureBgtop">
				<div class="tdsureBg">
					<a href="javascript:;" onclick="console_all_alert();" class="icon-uniE6005"></a>
					<p><span>行业选择</span><br><em>最多可选择五项</em></p>
					<a href="javascript:;" id="bssure_calling" class="bssure">确定</a>
				</div>
			</div>
		<div style="width:100%;overflow:hidden;background:#fff;position:absolute;top:60px;left:0;z-index:3;">
			<dl>
				 <dt class="top_calling" id="no_calling">不限</dt>
			</dl>
			<!--{loop $industrys $key $_industry1}-->
			<dl>
				<dt class="top_calling">{$_industry1['calling_name']}<i class="icon-uniE604"></i></dt>
				<!--{loop $industrys[$key]['subItems'] $k  $_industry2}-->
					<dd class="sub_calling" style="display:none" calling-id="{$_industry2['calling_id']}" calling-name="{$_industry2['calling_name']}">{$_industry2['calling_name']}<i class="icon-uniE602"></i></dd>
				<!--{/loop}-->
			</dl>
			<!--{/loop}-->
			</div>
	</div>
	<!--期望行业类别弹窗-->
	<div class="tdSearch" id="calling_alert2" style="display: none">
		<div class="tdsureBgtop">
				<div class="tdsureBg">
					<a href="javascript:;" onclick="console_all_alert();" class="icon-uniE6005"></a>
					<p><span>行业选择</span><br><em>最多可选择五项</em></p>
					<a href="javascript:;" id="bssure_calling2" class="bssure">确定</a>
				</div>
			</div>
		<div style="width:100%;overflow:hidden;background:#fff;position:absolute;top:60px;left:0;z-index:3;">
			<dl>
				<dt class="top_calling2" id="no_calling2">不限</dt>
			</dl>
			<!--{loop $industrys $key $_industry3}-->
			<dl>
				<dt class="top_calling2">{$_industry3['calling_name']}<i class="icon-uniE604"></i></dt>
				<!--{loop $industrys[$key]['subItems'] $k  $_industry4}-->
					<dd class="sub_calling2" style="display:none" calling-id="{$_industry4['calling_id']}" calling-name="{$_industry4['calling_name']}">{$_industry4['calling_name']}<i class="icon-uniE602"></i></dd>
				<!--{/loop}-->
			</dl>
			<!--{/loop}-->
			</div>
	</div>
	<!--期望地区弹窗-->
	<div class="tdSearch" id="area_alert" style="display: none">
		<div class="tdsureBgtop">
				<div class="tdsureBg">
					<a href="javascript:;" onclick="console_all_alert();" class="icon-uniE6005"></a>
					<p><span>期望地区</span><br><em>最多可选择3项</em></p>
					<a href="javascript:;" id="bssure_area" class="bssure">确定</a>
				</div>
		</div>
		<div style="width:100%; overflow:hidden;background:#fff;position:absolute; top:60px; left:0; z-index:3; ">
			<dl>
					<dt class="top_area" id="no_area">不限</dt>
			</dl>
			<!--{loop $regions $key1 $_region1}-->
			<dl>
				<dt class="top_area ">{$_region1['regionName']}<i class="icon-uniE604"></i></dt>
				<!--{loop $regions[$key1]['subItems'] $k1  $_region2}-->
					<dd class="sub_area" style="display:none" area-id="{$_region2['regionId']}" area-name="{$_region2['regionName']}">{$_region2['regionName']}<em class="icon-uniE603"></em>
						<!--三级数据-->
						<ul style="display:none" class="last_area ">
							<li><a  href="javascript:;" alt="1" area-id="{$_region2['regionId']}" area-name="{$_region2['regionName']}">{$_region2['regionName']}<i class="icon-uniE602"></i></a></li>
							<!--{loop $regions[$key1]['subItems'][$k1]['subItems']  $_region3}-->
								<li><a href="javascript:;" alt="1" area-id="{$_region3['regionId']}" area-name="{$_region3['regionName']}">{$_region3['regionName']}<i class="icon-uniE602"></i></a></li>
							<!--{/loop}-->
						</ul>
					</dd>
				<!--{/loop}-->
			</dl>
			<!--{/loop}-->
		</div>	
	</div>	
	<!--期望地区弹窗-->
	<div class="tdSearch" id="area_alert2" style="display: none">
		<div class="tdsureBgtop">
				<div class="tdsureBg">
					<a href="javascript:;" onclick="console_all_alert();" class="icon-uniE6005"></a>
					<p><span>居住地区</span><br><em>最多可选择3项</em></p>
					<a href="javascript:;" id="bssure_area2" class="bssure">确定</a>
				</div>
		</div>
		<div style="width:100%; overflow:hidden;background:#fff;position:absolute; top:60px; left:0; z-index:3; ">
			<dl>
					<dt class="top_area" id="no_area">不限</dt>
			</dl>
			<!--{loop $regions $key1 $_region1}-->
			<dl>
				<dt class="top_area ">{$_region1['regionName']}<i class="icon-uniE604"></i></dt>
				<!--{loop $regions[$key1]['subItems'] $k1  $_region2}-->
					<dd class="sub_area" style="display:none" area-id="{$_region2['regionId']}" area-name="{$_region2['regionName']}">{$_region2['regionName']}<em class="icon-uniE603"></em>
						<!--三级数据-->
						<ul style="display:none" class="last_area ">
							<li><a  href="javascript:;" alt="2" area-id="{$_region2['regionId']}" area-name="{$_region2['regionName']}">{$_region2['regionName']}<i class="icon-uniE602"></i></a></li>
							<!--{loop $regions[$key1]['subItems'][$k1]['subItems']  $_region3}-->
								<li><a href="javascript:;" alt="2" area-id="{$_region3['regionId']}" area-name="{$_region3['regionName']}">{$_region3['regionName']}<i class="icon-uniE602"></i></a></li>
							<!--{/loop}-->
						</ul>
					</dd>
				<!--{/loop}-->
			</dl>
			<!--{/loop}-->
		</div>	
	</div>	
<!--{template company/footer}-->
	<script>
		var jobsort = "";
		var count_jobsort = 0;
		var jobsort_name = "";
		var area_ids ="";
		var count_area =0;
		var count_area2 =0;
		var area_name ="";
		var count_calling =0;
		var calling_ids ="";
		var calling_name ="";
		var exp_count_calling =0;
		var exp_calling_ids ="";
		var exp_calling_name ="";
		$(function(){
			alert_jobsort();
			//期望行业类c
			//v
			//vb
			//cv
			//cv别弹窗
			alert_calling2();
			 //行业类别
			alert_calling();
			//期望地区弹窗
			alert_area();
		})
	//期望地区弹窗
			function alert_area(){
			//期望地区
			$("#area").click(function(){
				// clear_all_cut("#area_alert .cut");
				my_open_alert("#area_alert");
			});
			//现居住地
			$("#residence").click(function(){
				// clear_all_cut("#area_alert .cut");
				my_open_alert("#area_alert2");
			});
			// clear_all_click_area();
			$("#area_alert .top_area").click(function(){

				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).removeClass("cut");
					$(this).find("i").removeClass("icon-uniE620").addClass("icon-uniE604");
					$(this).nextAll().each(function(){
						$(this).hide();
					});
				}else{
					$("#area_alert .top_area").removeClass('cut').nextAll().each(function(){$(this).hide();});
					$(this).find("i").removeClass("icon-uniE604").addClass("icon-uniE620");
					$(this).addClass("cut");
					$(this).nextAll().each(function(){
						$(this).show();
					});
				}
			});
			$("#area_alert .sub_area").click(function(){
				// clear_all_click_area();
				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).removeClass("cut");
					$(this).find("ul").hide();
				}else{
					$("#area_alert .sub_area").removeClass("cut");
					move_other_area('area_alert');
					$(this).addClass("cut");
					$(this).find("ul").show();
				}
			});
			$("#area_alert .last_area li").click(function(event){
				event.stopPropagation();
				var tag=$(this).find("a").attr("alt");
				var f = $(this).find("a").hasClass("cut");
				if(tag==1){//期望地区
					if(f){
					$(this).find("a").removeClass("cut");
					count_area = count_area-1;
					}else{
					if(count_area >=3){
						alert("最多选择3项！");return;
					}
					$(this).find("a").addClass("cut");
					count_area = count_area+1;
				} 
				}else{
					if(f){
						$(this).find("a").removeClass("cut");
						count_area2 = count_area2-1;
					}else{
						if(count_area2 >=3){
							alert("最多选择3项！");return;
						}
						$(this).find("a").addClass("cut");
						count_area2 = count_area2+1;
					}
				}

	//			$("#excp_area_name").html(area_name);
	//			$("input[name='expArea']").val(area_id);
	//			my_close_alert("#area_alert");
			});
			$("#area_alert2 .top_area").click(function(){
				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).removeClass("cut");
					$(this).find("i").removeClass("icon-uniE620").addClass("icon-uniE604");
					$(this).nextAll().each(function(){
						$(this).hide();
					});
				}else{
					$("#area_alert2 .top_area").removeClass('cut').nextAll().each(function(){$(this).hide();});
					$(this).find("i").removeClass("icon-uniE604").addClass("icon-uniE620");
					$(this).addClass("cut");
					$(this).nextAll().each(function(){
						$(this).show();
					});
				}
			});
			$("#area_alert2 .sub_area").click(function(){
				// clear_all_click_area();
				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).removeClass("cut");
					$(this).find("ul").hide();
				}else{
					$("#area_alert2 .sub_area").removeClass("cut");
					move_other_area('area_alert2');
					$(this).addClass("cut");
					$(this).find("ul").show();
				}
			});
			$("#area_alert2 .last_area li").click(function(event){
				event.stopPropagation();
				var tag=$(this).find("a").attr("alt");
				var f = $(this).find("a").hasClass("cut");
				if(tag==1){//期望地区
					if(f){
					$(this).find("a").removeClass("cut");
					count_area = count_area-1;
					}else{
					if(count_area >=3){
						alert("最多选择3项！");return;
					}
					$(this).find("a").addClass("cut");
					count_area = count_area+1;
				} 
				}else{
					if(f){
						$(this).find("a").removeClass("cut");
						count_area2 = count_area2-1;
					}else{
						if(count_area2 >=3){
							alert("最多选择3项！");return;
						}
						$(this).find("a").addClass("cut");
						count_area2 = count_area2+1;
					}
				}

	//			$("#excp_area_name").html(area_name);
	//			$("input[name='expArea']").val(area_id);
	//			my_close_alert("#area_alert");
			});
			$("#bssure_area").click(function(){
				area_name ="";
				area_ids ="";
				$("#area_alert ul li a").each(function(){
					var t = $(this).attr("class");
					if(t =='cut'){
						if(area_ids ==""){
							area_ids = $(this).attr("area-id");
						}else{
							area_ids = area_ids + ","+$(this).attr("area-id");
						}
						if(area_name ==""){
							area_name = $(this).attr("area-name");
						}else{
							area_name =area_name +"，"+ $(this).attr("area-name");
						}
					}
				});
				if(area_name ==""){
					area_name ="不限";
				}
				$("#excp_area_name").html(area_name);
					$("input[name='expArea']").val(area_ids);

				my_close_alert("#area_alert");
			});
			$("#bssure_area2").click(function(){
				area_name ="";
				area_ids ="";
				$("#area_alert2 ul li a").each(function(){
					var t = $(this).attr("class");
					if(t =='cut'){
						if(area_ids ==""){
							area_ids = $(this).attr("area-id");
						}else{
							area_ids = area_ids + ","+$(this).attr("area-id");
						}
						if(area_name ==""){
							area_name = $(this).attr("area-name");
						}else{
							area_name =area_name +"，"+ $(this).attr("area-name");
						}
					}
				});
				if(area_name ==""){
					area_name ="不限";
				}
				$("#residence_name").html(area_name);
					$("input[name='residence']").val(area_ids);

				my_close_alert("#area_alert2");
			});
			//期望地区不限
			$("#area_alert #no_area").click(function(){
				area_name ="不限";
				area_ids ="";
				$("#excp_area_name").html(area_name);
				$("input[name='expArea']").val(area_ids);

				// clear_all_cut("#area_alert .cut");
				my_close_alert("#area_alert");
			});
			//居住地不限
			$("#area_alert2 #no_area").click(function(){
				area_name ="不限";
				area_ids ="";

				$("#residence_name").html(area_name);
				$("input[name='residence']").val(area_ids);

				// clear_all_cut("#area_alert2 .cut");
				my_close_alert("#area_alert2");
			});
	}
	//行业弹窗
	function alert_calling(){
		var type =0;
		clear_all_click_calling();
		$("#company_calling").click(function(){
			my_open_alert("#calling_alert");
		});
		$(".top_calling").click(function(){
			var flag = $(this).hasClass("cut");
				if(flag){
					$(this).find("i").removeClass("icon-uniE620").addClass("icon-uniE604");
					$(this).removeClass("cut");
					$(this).nextAll().each(function(){
						$(this).hide();
					});
				}else{
					$(".top_calling").removeClass('cut').nextAll().each(function(){$(this).hide();});
					$(this).find("i").removeClass("icon-uniE604").addClass("icon-uniE620");
					$(this).addClass("cut");
					$(this).nextAll().each(function(){
						$(this).show();
					});
				}
			});
		$(".sub_calling").click(function(event){
				event.stopPropagation();
				var f = $(this).hasClass("cut");
				if(f){
					$(this).removeClass("cut");
					count_calling = count_calling-1;
				}else{
					if(count_calling >=5){
						alert("最多选择5项！");return;
					}
					$(this).addClass("cut");
					count_calling = count_calling+1;
				}
			});
			$("#bssure_calling").click(function(){
				calling_ids ="";
				calling_name ="";
				$(".sub_calling").each(function(){
					var t = $(this).hasClass('cut');
					if(t){
						if(calling_ids ==""){
							calling_ids = $(this).attr("calling-id");
						}else{
							calling_ids = calling_ids + ","+$(this).attr("calling-id");
						}
						if(calling_name ==""){
							calling_name = $(this).attr("calling-name");
						}else{
							calling_name =calling_name +"，"+ $(this).attr("calling-name");
						}
					}
				});
				if(calling_name ==""){
					calling_name ="不限";
				}
					$("#calling_name").html(calling_name);
					$("input[name='workcalling']").val(calling_ids);
					my_close_alert("#calling_alert");
			});
			$("#no_calling").click(function(){
				calling_name ="不限";
				calling_ids ="";
				$("#calling_name").html(calling_name);
				$("input[name='workcalling']").val(calling_ids);
				clear_all_cut("#calling_alert .cut");
				my_close_alert("#calling_alert");
			});
	}
	  //行业弹窗
	function alert_calling2(){
		clear_all_click_calling();
		$("#calling").click(function(){
			my_open_alert("#calling_alert2");
		});
		$(".top_calling2").click(function(){
				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).find("i").removeClass("icon-uniE620").addClass("icon-uniE604");
					$(this).removeClass("cut");
					$(this).nextAll().each(function(){
						$(this).hide();
					});
				}else{
					$(".top_calling2").removeClass('cut').nextAll().each(function(){$(this).hide();});
					$(this).find("i").removeClass("icon-uniE604").addClass("icon-uniE620");
					$(this).addClass("cut");
					$(this).nextAll().each(function(){
						$(this).show();
					});
				}
			});
		$(".sub_calling2").click(function(event){
				event.stopPropagation();
				var f = $(this).hasClass("cut");
				if(f){
					$(this).removeClass("cut");
					exp_count_calling = exp_count_calling-1;
				}else{
					if(exp_count_calling >=5){
						alert("最多选择5项！");return;
					}
					$(this).addClass("cut");
					exp_count_calling = exp_count_calling+1;
				}
			});
			$("#bssure_calling2").click(function(){
				exp_calling_ids ="";
				exp_calling_name ="";
				$(".sub_calling2").each(function(){
					var t = $(this).hasClass('cut');
					if(t){
						if(exp_calling_ids ==""){
							exp_calling_ids = $(this).attr("calling-id");
						}else{
							exp_calling_ids = exp_calling_ids + ","+$(this).attr("calling-id");
						}
						if(exp_calling_name ==""){
							exp_calling_name = $(this).attr("calling-name");
						}else{
							exp_calling_name =exp_calling_name +"，"+ $(this).attr("calling-name");
						}
					}
				});
				if(exp_calling_name ==""){
					exp_calling_name ="不限";
				}
				$("#excp_calling_name").html(exp_calling_name);
				$("input[name='calling']").val(exp_calling_ids);
				my_close_alert("#calling_alert2");
			});
			$("#no_calling2").click(function(){
				exp_calling_name ="不限";
				exp_calling_ids ="";
				$("#excp_calling_name").html(exp_calling_name);
				$("input[name='calling']").val(exp_calling_ids);
				clear_all_cut("#calling_alert2 .cut");
				my_close_alert("#calling_alert2");
			});
		}
	//职位类别弹窗
	function alert_jobsort(){
			//职位类别弹窗
			$("#jobsort").click(function(){
				my_open_alert("#jobsort_alert");
			});
			$(".top_jobsort").click(function(){
				clear_all_click_jobsort();
				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).find("i").removeClass("icon-uniE620").addClass("icon-uniE604");
					$(this).removeClass("cut");
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
			$(".sub_jobsort").click(function(){
				clear_all_click_jobsort();
				var flag = $(this).hasClass("cut");
				if(flag){
					$(this).removeClass("cut");
					$(this).find("ul").hide();
				}else{
					$(".sub_jobsort").removeClass("cut");
					move_other_jobsort();
					$(this).addClass("cut");
					$(this).find("ul").show(); 
				}
			});
			$(".last_job_sort li").click(function(event){
				event.stopPropagation();
				var f = $(this).find("a").hasClass("cut");
				if(f){
					$(this).find("a").removeClass("cut");
					count_jobsort = count_jobsort-1;
				}else{
					if(count_jobsort >=5){
						alert("最多选择5项！");return;
					}
					$(this).find("a").addClass("cut");
					count_jobsort = count_jobsort+1;
				}
			});
			$("#bssure_jobsort").click(function(){
				jobsort_name ="";
				jobsort ="";
				$("#jobsort_alert ul li a").each(function(){
					var t = $(this).attr("class");
					if(t =='cut'){
						if(jobsort ==""){
							jobsort = $(this).attr("jobsort-id");
						}else{
							jobsort = jobsort + ","+$(this).attr("jobsort-id");
						}
						if(jobsort_name ==""){
							jobsort_name = $(this).attr("jobsort-name");
						}else{
							jobsort_name =jobsort_name +"，"+ $(this).attr("jobsort-name");
						}
					}
				});
				if(jobsort_name ==""){
					jobsort_name ="不限";
				}
				$("#jobsort_name").html(jobsort_name);
				$("input[name='jobsort']").val(jobsort);
				my_close_alert("#jobsort_alert");
			});
			//不限
			$("#no_jobsort").click(function(){
				jobsort_name ="不限";
				jobsort ="";
				//情况所有数据选中的数据
				
				$("#jobsort_name").html(jobsort_name);
				$("input[name='jobsort']").val(jobsort);
				clear_all_cut("#jobsort_alert .cut");
				my_close_alert("#jobsort_alert");
			});
	}
	//清空所有选择的数据

	function clear_all_cut(selectCut){
		$(selectCut).each(function(){
			$(this).removeClass("cut");
		});
	 }
	function clear_click_jobsort(){
		$(".last_job_sort li").find
	}
	function my_open_alert(c){
		$(".m_master").show();
		$(c).show();
	}

	function my_close_alert(c){
		$(".m_master").hide();
		$(c).hide();
	}
	function clear_all_click_jobsort(){
	//	 $("#jobsort_alert ul li a").each(function(){
	//		 $(this).removeClass('cut');
	//	 })
	}
	function clear_all_click_calling(){
	//	 $("#calling_alert dd").each(function(){
	//		 $(this).removeClass('cut');
	//	 })
	//		count_calling =0;
	//		calling_ids ="";
	//		calling_name ="";
	}
	function clear_all_click_area(){
	//	 $("#area_alert ul li a").each(function(){
	//		 $(this).removeClass('cut');
	//	 })
	}
	function move_other_jobsort(){
		var v = $("#jobsort_alert ul").hide();
	}

	function move_other_area(id){
		var v = $("#"+id+" ul").hide();
	}
	//表单体检
	function form_submit(){
		var currarea=$('input[name=currArea]').val();
		var exparea = $('input[name=expArea]').val();
		var residence = $('input[name=residence]').val();
		var nativearea = $('input[name=nativeArea]').val();
		var calling = $('input[name=calling]').val();
		var jobsort = $('input[name=jobsort]').val();
		var workYear1 = $('input[name=ddlMinWrokYear]').val();
		var workYear2 = $('input[name=ddlMaxWrokYear]').val();
		var ageLower = $('#txtAgeLower').val();
		var ageUpper = $('#txtAgeUpper').val();
		var degree_ids = $(':input[name=chkDegree][checked]').val();
		var sex = $(':input[name=radSex][checked]').val();
		var marriage = $(':input[name=radMarriage][checked]').val();
		var statureMin=$('#txtMinStature').val();
		var statureMax=$('#txtMaxStature').val();
		var display = $(':input[name=display][checked]').val();
		$("#frmResumeSearch").submit();
		return false;
					
					/*var str = "&txtKeyword="+keyword+"&ddlMinWrokYear="+workYear1+"&ddlMaxWrokYear="+workYear2
						  +"&txtAgeLower="+ageLower+"&ageUpper="+ageUpper+"&radSex="+sex+"&radMarriage="+marriage
						  +"&txtMinStature="+statureMin+"&txtMaxStature="+statureMax+"&currArea="+currarea+"&expArea="+exparea
						  +"&jobsort="+jobsort+"&calling="+calling+"&nativeArea="+nativearea;

		var key_word = $("input[name='key_word']").val();
		var expstation = $("input[name='expstation']").val();
		var expArea = $("input[name='expArea']").val();
		var jobsort = $("input[name='jobsort']").val();
		var calling =  $("input[name='calling']").val();
		var workstation = $("input[name='workstation']").val();
		var workcompany = $("input[name='company_name']").val();
		var workcalling = $("input[name='workcalling']").val();
		var sex = $("select[name='sex']").val();
		var age_lower = $("input[name='age_lower']").val();
		var age_upper = $("input[name='age_upper']").val();
		var stature_lower = $("input[name='stature_min']").val();
		var stature_upper = $("input[name='stature_max']").val();
		var work_year1 = $("select[name='work_year1']").val();
		var degreeLower = $("select[name='degreeLower']").val();*/
		//window.location.href = "http://xm.m.597.cs/company/resume/searchResume.html?&txtKeyword="+keyword+"&ddlMinWrokYear="+workYear1+"&ddlMaxWrokYear="+workYear2
						  +"&txtAgeLower="+ageLower+"&ageUpper="+ageUpper+"&radSex="+sex+"&radMarriage="+marriage
						  +"&txtMinStature="+statureMin+"&txtMaxStature="+statureMax+"&currArea="+currarea+"&expArea="+exparea
						  +"&jobsort="+jobsort+"&calling="+calling+"&nativeArea="+nativearea;
	}
	//关闭所有弹窗
	function console_all_alert(){
		$(".m_master").hide();
		$("#jobsort_alert").hide();
		$("#calling_alert").hide();
		$("#area_alert").hide();
		$("#calling_alert2").hide();
	}
	$('#eduChk').find(':input').click(function(){
		if($(this).val()==0 && $(this).attr('checked')){
			$('input[type="checkbox"][name="chkDegree[]"]').prop('checked',false);
			$(this).prop('checked','true');
		}
		else if($(this).attr('checked')){
			$('#chkDegree0').prop('checked',false);
		}
	});
	$("#searchSubmit").click(function(){
		form_submit();
	});
	// $('#frmResumeSearch').find(':input').keydown(function(event){
	// 	var e = $.event.fix(event);
	// 	if (e.keyCode == 13){
	// 		$('#searchSubmit').click();
	// 	}
	// });

	// 关键词跳转到搜索页面
	$('#txtKeyword').keyup(function(e){
		if(e.keyCode == 13){
			$('#searchSubmit').click();
		}
	});
	</script>
<!--{/if}-->
</body>
</html>