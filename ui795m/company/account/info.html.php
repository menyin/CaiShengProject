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
	<title>账户管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_base.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/com/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/mobile.companysingleselect.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/mobile.form.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/m/mobile.singlearea.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
</head>
<style>
.mKeywordBg span.Lselect .LselectedSelect{ display:none!important;}
.mKeywordP {
	padding-bottom:0px;
}
body{padding-top:0px!important;}
</style>
<body>
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop" id="companyMainTop">
	<div class="loginTopBg ">
		<a href="javascript:window.history.go(-1)"><i class="icon-svg10"></i></a>
		修改资料
		<em class="" style="display:none"></em>
		<a href="javascript:;" class="loginNewsBtn" style="width:70px">保存</a>
	</div>
</div>
<div style="padding-top: 45px;"></div>
<!--{/if}-->
<div class="head_master" style="display:none;filter:alpha(opacity=10);-moz-opacity:0.1;opacity: 0.1;z-index:99"></div>
<div class="m_master" style="display:none;"></div>
<div class="juhua" style="display:none;position:fixed"><img src="http://cdn.597.com/m/images/loadingb.gif"></div>
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
<form id="modifyForm" action="/api/web/m_company.api" method="post">
	<!--{if $app['isNewApp']=="yes" && $app['type']=="android"}-->
	<input type="hidden" name="SESSIONKEY" id="SESSIONKEY">
	<!--{/if}-->
	<input id="act" name="act" type="hidden" value="saveinfo"/>
	<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
	<div class="mKeywordP" id="bodyMain">
		<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">公司名称</span> <em>{$com[cname]}</em> </div>
		<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>公司简称</span>
		<input type="text" name="company_name" id="hidCompanyShortName" value="{$com[csName]}" placeholder="请输入公司简称" class="mKeywText" autocomplete="off">
	</div>
	<!--公司性质开始-->
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>公司性质</span>
		<select name="company_property" id="company_property" class="mKeywSelect">
			<option value="">请选择</option>
			<option value="1" <!--{if $com[comType]==1}-->selected="selected"<!--{/if}-->>国有企业</option>
			<option value="2" <!--{if $com[comType]==2}-->selected="selected"<!--{/if}-->>外商独资、外企办事处</option>
			<option value="3" <!--{if $com[comType]==3}-->selected="selected"<!--{/if}-->>中外合资(合营、合作)</option>
			<option value="4" <!--{if $com[comType]==4}-->selected="selected"<!--{/if}-->>民营、私营公司</option>
			<option value="5" <!--{if $com[comType]==5}-->selected="selected"<!--{/if}-->>上市公司</option>
			<option value="6" <!--{if $com[comType]==6}-->selected="selected"<!--{/if}-->>股份制企业</option>
			<option value="7" <!--{if $com[comType]==7}-->selected="selected"<!--{/if}-->>集体企业</option>
			<option value="8" <!--{if $com[comType]==8}-->selected="selected"<!--{/if}-->>乡镇企业</option>
			<option value="9" <!--{if $com[comType]==9}-->selected="selected"<!--{/if}-->>行政机关</option>
			<option value="10" <!--{if $com[comType]==10}-->selected="selected"<!--{/if}-->>社会团体、非盈利机构</option>
			<option value="11" <!--{if $com[comType]==11}-->selected="selected"<!--{/if}-->>事业单位</option>
			<option value="12" <!--{if $com[comType]==12}-->selected="selected"<!--{/if}-->>跨国企业(集团)</option>
			<option value="13" <!--{if $com[comType]==13}-->selected="selected"<!--{/if}-->>其他</option>
		</select>
	</div>
	<!--公司性质结束-->
	
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>所处主行业</span>
		<div class="mkDtment" id="mainCallingDiv"> 
		<!--数据为空时给b加个mkNull类--> 
		<b id="main_calling_name" class="mkNull mainIndustry"><!--{if $com['comIndustryId']}-->{$com['industryStr']}<!--{/if}--></b></div>
		<a href="javascript:;" class="rightPop" id="addNextCalling" style="display:none">添加次行业</a>
		<input type="hidden" name="calling_ids" value="{$com[comIndustryId]}" id="txtMainCalling">
	</div>
	<div class="mKeywordBg mKeywordBgc addNextCallingDiv" style="display:none"> <span class="tSpan"><b class="ismust">*</b>次行业</span>
		<div class="mkDtment mainIndustry" id="nextCallingDiv"> 
		<!--数据为空时给b加个mkNull类--> 
		<b id="next_calling_name" class="mkNull"></b> </div>
		<a href="javascript:;" class="rightPop" id="DeleteNextCalling">删除</a>
		<input type="hidden" name="txtNextCalling" value="" id="txtNextCalling">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>公司规模</span>
		<select name="company_size" class="mKeywSelect">
			<option value="">请选择</option>
			<option value="9" <!--{if $com[comWorkers]==9}-->selected="selected"<!--{/if}-->>10人以下</option>
			<option value="49" <!--{if $com[comWorkers]==49}-->selected="selected"<!--{/if}-->>10-50人</option>
			<option value="199" <!--{if $com[comWorkers]==199}-->selected="selected"<!--{/if}-->>50-200人</option>
			<option value="499" <!--{if $com[comWorkers]==499}-->selected="selected"<!--{/if}-->>200-500人</option>
			<option value="999" <!--{if $com[comWorkers]==999}-->selected="selected"<!--{/if}-->>500-1000人</option>
			<option value="1000" <!--{if $com[comWorkers]==1000}-->selected="selected"<!--{/if}-->>1000人以上</option>
		</select>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>主营业务及行业地位</span>
		<textarea type="text" style="height:40px" placeholder="一句话描述清楚公司的主营业务、行业地位，最多50字" name="company_str" class="mKeywText textArea" autocomplete="off">{$com[comStr]}</textarea>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>公司简介</span>
		<textarea type="text" placeholder="请输入公司简介" name="company_info" class="mKeywText textArea" autocomplete="off">{$com[comInfo]}</textarea>
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>联系人</span>
		<input type="text" placeholder="" name="linkman" value="{$com[comUser]}" class="mKeywText" autocomplete="off">
		<input name="open_linkman" type="hidden" value="1">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>联系电话</span>
		<input type="tel" placeholder="" name="comphone" value="{$com[comPhone]}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">手机</span>
		<input type="tel" placeholder="请输入手机号码" name="link_mobile" value="{$com[comMobile]}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">传真</span>
		<input type="tel" placeholder="" name="fax" class="mKeywText" value="{$com[comFax]}" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">QQ</span>
		<input type="tel" placeholder="" name="txtQQ" value="{$com[comQQ]}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">邮箱</span>
		<input type="text" placeholder="" name="email" class="mKeywText" value="{$com[comEmail]}" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <span class="tSpan">公司网站</span>
		<input type="text" placeholder="" name="homepage" class="mKeywText" value="{$com[comSite]}" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc" style="border-bottom:none;display:none;"> <span class="tSpan"><b class="ismust">*</b>座机</span><em style="color:#c1d0d6;">请在下方输入详细号码</em> </div>
	<div class="firmMPlane firmMPlanec" style="margin-bottom:0px; border-bottom:1px solid #d0d3d5;display:none;">
		<p style="width:20%;float:left">
			<input type="text" name="zone_infor" value="0592" style="width:100%" placeholder="033" class="firmMplane1" autocomplete="off">
		</p>
		<p style="width:50%;float:left"><span style="margin:0 6px;display:block">
			<input type="text" name="phone_infor" value="5049123" style="width:100%;margin:0" placeholder="请输入固话号码" class="firmMplane2" autocomplete="off">
		</span></p>
		<p style="width:30%;float:left">
			<input type="text" name="ext_infor" value="" style="width:100%" placeholder="分机号" class="firmMplane3" autocomplete="off">
		</p>
	</div>
	<div class="mKeywordBg mKeywordBgc" style="padding-right:0px;"> <span class="tSpan"><b class="ismust">*</b>工作地点</span>
		<div class="mKeywSelectBg">
			<input type="hidden" id="hddCurArea" name="hddArea" value="{$com[comAreaId]}">
			<dd id="cur_area">
			</dd>
		</div>
	</div>
	<div style="display:none;" class="mKeywordBg mKeywordBgc"> <span class="tSpan"><b class="ismust">*</b>所在地区</span>
		<div class="mkDtment" id="areaSelect"> 
			<!--数据为空时给b加个mkNull类--> 
			<b id="area_name" class="mkNull">江北区</b>
		</div>
		<i class="icon-uniE603"></i>
		<input type="hidden" placeholder="" name="hidArea" id="hidArea" value="0302" class="mKeywText">
	</div>
	<div class="mKeywordBg mKeywordBgc"> <a href="javascript:;" id="biaojiditu" style="float:right;margin-top: 15px;color:#2eb5e6;font-size:1.4em">标记地图</a> <span class="tSpan"><b class="ismust">*</b>详细地址</span>
		<input type="text" placeholder="描述公司详情地址" name="txtAddress" id="txtAddress" value="{$com[comAddress]}" class="mKeywText" style="width:60%" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc" style="display:none"> <span class="tSpan"><b class="ismust">*</b>地图标记</span> <em id="bindMap"></em> <i class="icon-uniE603"></i>
		<input type="hidden" name="hidMapX" id="hidMapX" value="{$com[comLongitude]}">
		<input type="hidden" name="hidMapY" id="hidMapY" value="{$com[comLatitude]}">
		<input type="hidden" id="hidMapZoom" name="hidMapZoom" value="">
	</div>
	
	<!--福利待遇开始-->
	<div class="mKeywordBg mKeywordBgc mKeywordBgcy" style="border-bottom:none; display:none;"> <span class="tSpan">福利待遇</span>
		<div class="mkDtment" style="margin-top:0px;"> 
		<!--数据为空时给b加个mkNull类--> 
		<b class="mkNull"></b> </div>
		<a class="rightPop setReward" href="javascript:;">添加福利</a>
		<input type="hidden" value="01,02,05,06,08,10" id="hidDefaultReward" name="hidDefaultReward">
		<input type="hidden" value="" id="hidOtherReward" name="hidOtherReward">
	</div>
	<div class="mKeywordBg mKeywordBgc mKeywordBgcy" style="padding:0px 11px 0 20px;">
		<div class="mkDtment" id="mkDtment" style="margin-top:3px;"> 
		<!--数据为空时给b加个mkNull类--> 
		<b class="mkNull"></b></div>
	</div>
	<!--福利待遇结束-->
</div>
</form>

<!-- 地图标注弹窗开始 
<div class="mkeyMap" id="matchMap" style="display:none">
	<div class="loginPop loginPopMap">
		<div class="loginTopBg loginTopBg3">
			<a href="javascript:;">
				<i class="icon-svg10"></i>
			</a>地图标注
			<a href="javascript:;" class="loginNewsBtn">保存</a>
		</div>
	</div>
	<div id="mapCon" class="mapLabel">
		
	</div>
</div>
地图标注弹窗结束 -->

<!--福利待遇弹窗-->
<div class="rewardDiv" id="rewardDiv" style="display:none">
  <div class="tdsureBgtop">
	<div class="tdsureBg" style="height:45px;"> <a href="javascript:;" onclick="modify.closeAlert('#rewardDiv')" class="icon-uniE6005" style="line-height:45px;"></a>
	  <p><span id="jobSortTitle">选择福利</span></p>
	</div>
  </div>
  <div class="departMx"> <span class="dmxLf dmxLf2">最多可选择12项</span> </div>
  <div class="rewardMz" id="reward"> <a href="javascript:;" class="cut" date-rewardid="01" data-type="default">五险<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="02" data-type="default">住房公积金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="03" data-type="default">包吃<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="04" data-type="default">包住<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="05" data-type="default">周末双休<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="06" data-type="default">带薪年假<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="07" data-type="default">交通补助<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="08" data-type="default">通讯补助<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="09" data-type="default">年底双薪<i class="hbIconMoon"></i></a> <a href="javascript:;" class="cut" date-rewardid="10" data-type="default">绩效奖金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="11" data-type="default">生育补贴<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="12" data-type="default">节日礼金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="13" data-type="default">定期体检<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="14" data-type="default">年度旅游<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="15" data-type="default">生日礼金<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="16" data-type="default">免费班车<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="17" data-type="default">弹性工作<i class="hbIconMoon"></i></a> <a href="javascript:;" date-rewardid="18" data-type="default">年底分红<i class="hbIconMoon"></i></a> </div>
  <div class="rewardMy" style="border:none;">
	<div class="dmentRt dmentRtx">
	  <input type="text" value="" placeholder="添加自定义，最多6个字" name="other_reward">
	  <a href="javascript:;" id="addOtherReward">添加</a> </div>
  </div>
  <div class="departMv"> <a href="javascript:;" class="dMconfirm " id="btnReardSave">确定</a> <a href="javascript:;" class="dMcancel" id="btnRwardCancel">取消</a> </div>
</div>
<div class="m_master" style="display:none"></div>
<div id="mapV2" style="width: 100%; height: 100%; overflow: hidden; position: absolute; top: 327px; left: 0px; z-index: 5; display: none;">
  <div class="tdsureBgtop">
	<div class="tdsureBg" style="height:45px;"> <a href="javascript:;" onclick="modify.closeAlert('#mapV2')" class="icon-uniE6005" style="line-height:45px;"></a>
	  <p><span id="jobSortTitle">标注地图</span></p>
	  <a href="javascript:;" onclick="modify.closeAlert('#mapV2')" class="loginNewsBtn" style="text-align: center; line-height: 45px;font-size:2em;">确定</a> </div>
  </div>
  <div style="width:100%; height:100%; overflow: hidden; position:absolute; top:0; left:0px;z-index: 5;">
	<div id="mapCon" style="height: 100%; overflow: hidden; border: 1px solid rgb(237, 237, 237); position: relative; z-index: 0; color: rgb(0, 0, 0); text-align: left; background-color: rgb(243, 241, 236);">
	  <div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default;">
		<div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; -webkit-user-select: none; width: 0px; height: 0px;"></div>
		<div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;">
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span class="BMap_Marker BMap_noprint" unselectable="on" title="请拖动至您公司所在位置" style="position: absolute; padding: 0px; margin: 0px; border: 0px; cursor: pointer; width: 33px; height: 50px; left: -16px; top: -25px; z-index: -5923862; background: url(http://api0.map.bdimg.com/images/blank.gif);"></span></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;">
			<label class="BMapLabel" unselectable="on" style="position: absolute; display: none; cursor: inherit; border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: arial, sans-serif; z-index: -20000; color: rgb(190, 190, 190); background-color: rgb(190, 190, 190);">shadow</label>
		  </div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 0px; height: 0px; left: -16px; top: -25px; z-index: -5923862;">
			<div style="position: absolute; margin: 0px; padding: 0px; width: 33px; height: 50px; overflow: hidden;"><img src="http://cdn.597.com/m/images/maplabel.png" style="display: block; border:none;margin-left:0px; margin-top:0px; "></div>
			<label class="BMapLabel" unselectable="on" style="position: absolute; display: inline; cursor: inherit; border: 1px solid rgb(255, 0, 0); padding: 1px; white-space: nowrap; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: arial, sans-serif; z-index: 80; -webkit-user-select: none; left: 35px; top: 5px; background-color: rgb(255, 255, 255);">请拖动至您公司所在位置</label>
			</span></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div>
		  <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div>
		</div>
		<div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;">
		  <div style="position: absolute; overflow: visible; z-index: -100; left: 0px; top: 0px; display: block; -webkit-transform: translate3d(0px, 0px, 0px);"><img src="http://cdn.597.com/m/js/saved_resource" style="position: absolute; border: none; width: 256px; height: 256px; left: -64px; top: -196px; max-width: none; opacity: 1;"></div>
		</div>
		<div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: none;">
		  <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: none;"></div>
		  <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: none;"></div>
		</div>
		<div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div>
	  </div>
	  <div class="pano_close" title="退出全景" style="z-index: 1201; display: none;"></div>
	  <a class="pano_pc_indoor_exit" title="退出室内景" style="z-index: 1201; display: none;"><span style="float:right;margin-right:12px;">出口</span></a>
	  <div class=" anchorBL" style="height: 32px; position: absolute; z-index: 30; bottom: 0px; right: auto; top: auto; left: 1px; display: none;"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: none;"><img style="border:none;width:77px;height:32px" src="http://cdn.597.com/m/images/copyright_logo.png"></a></div>
	  <div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api0.map.bdimg.com/images/openhand.cur) 8 8,default">
		<div class="BMap_zoomer" style="top:0;left:0;"></div>
		<div class="BMap_zoomer" style="top:0;right:0;"></div>
		<div class="BMap_zoomer" style="bottom:0;left:0;"></div>
		<div class="BMap_zoomer" style="bottom:0;right:0;"></div>
	  </div>
	  <div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 192px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100;">
		<div class="BMap_stdMpPan">
		  <div class="BMap_button BMap_panN" title="向上平移"></div>
		  <div class="BMap_button BMap_panW" title="向左平移"></div>
		  <div class="BMap_button BMap_panE" title="向右平移"></div>
		  <div class="BMap_button BMap_panS" title="向下平移"></div>
		  <div class="BMap_stdMpPanBg BMap_smcbg"></div>
		</div>
		<div class="BMap_stdMpZoom" style="height: 147px; width: 62px;">
		  <div class="BMap_button BMap_stdMpZoomIn" title="放大一级">
			<div class="BMap_smcbg"></div>
		  </div>
		  <div class="BMap_button BMap_stdMpZoomOut" title="缩小一级" style="top: 126px;">
			<div class="BMap_smcbg"></div>
		  </div>
		  <div class="BMap_stdMpSlider" style="height: 108px;">
			<div class="BMap_stdMpSliderBgTop" style="height: 108px;">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_stdMpSliderBgBot" style="top: 31px; height: 81px;"></div>
			<div class="BMap_stdMpSliderMask" title="放置到此级别"></div>
			<div class="BMap_stdMpSliderBar" title="拖动缩放" style="cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default; top: 31px;">
			  <div class="BMap_smcbg"></div>
			</div>
		  </div>
		  <div class="BMap_zlHolder">
			<div class="BMap_zlSt">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_zlCity">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_zlProv">
			  <div class="BMap_smcbg"></div>
			</div>
			<div class="BMap_zlCountry">
			  <div class="BMap_smcbg"></div>
			</div>
		  </div>
		</div>
		<div class="BMap_stdMpGeolocation" style="position: initial; display: none; margin-top: 43px; margin-left: 10px;">
		  <div class="BMap_geolocationContainer" style="position: initial; width: 24px; height: 24px; overflow: hidden; margin: 0px; box-sizing: border-box;">
			<div class="BMap_geolocationIconBackground" style="width: 24px; height: 24px; background-image: url(http://api0.map.bdimg.com/images/navigation-control/geolocation-control/pc/bg-20x20.png); background-size: 20px 20px; background-position: 3px 3px; background-repeat: no-repeat;">
			  <div class="BMap_geolocationIcon" style="position: initial; width: 24px; height: 24px; cursor: pointer; background-image: url(&#39;http://api0.map.bdimg.com/images/navigation-control/geolocation-control/pc/success-10x10.png&#39;); background-size: 10px 10px; background-repeat: no-repeat; background-position: center;"></div>
			</div>
		  </div>
		</div>
	  </div>
	  <div unselectable="on" class=" BMap_noprint anchorTR" style="bottom: auto; right: 10px; top: 10px; left: auto; white-space: nowrap; cursor: pointer; position: absolute; z-index: 10;">
		<div style="float: left;">
		  <div title="显示普通地图" style="box-shadow: rgba(0, 0, 0, 0.34902) 2px 2px 3px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(139, 164, 220); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(139, 164, 220); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 164, 220); padding: 2px 6px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 12px; line-height: 1.3em; font-family: arial, sans-serif; text-align: center; white-space: nowrap; border-top-left-radius: 3px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 3px; color: rgb(255, 255, 255); background: rgb(142, 168, 224);">地图</div>
		</div>
		<div style="float: left;">
		  <div title="显示卫星影像" style="box-shadow: rgba(0, 0, 0, 0.34902) 2px 2px 3px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(139, 164, 220); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(139, 164, 220); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 164, 220); padding: 2px 6px; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: 1.3em; font-family: arial, sans-serif; text-align: center; white-space: nowrap; color: rgb(0, 0, 0); background: rgb(255, 255, 255);">卫星</div>
		  <div style="position: absolute; top: 0px; left: 0px; z-index: -1; display: none;">
			<div title="显示带有街道的卫星影像" style="border-right:1px solid #8ba4dc;border-bottom:1px solid #8ba4dc;border-left:1px solid #8ba4dc;background:white;font:12px arial,sans-serif;padding:0 8px 0 6px;line-height:1.6em;box-shadow:2px 2px 3px rgba(0, 0, 0, 0.35)"><span checked="checked" class="BMap_checkbox"></span>
			  <label style="vertical-align: middle; cursor: pointer;">混合</label>
			</div>
		  </div>
		</div>
		<div style="float: left;">
		  <div title="显示三维地图" style="box-shadow: rgba(0, 0, 0, 0.34902) 2px 2px 3px; border: 1px solid rgb(139, 164, 220); padding: 2px 6px; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: 1.3em; font-family: arial, sans-serif; text-align: center; white-space: nowrap; border-top-left-radius: 0px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 0px; color: rgb(0, 0, 0); background: rgb(255, 255, 255);">三维</div>
		</div>
	  </div>
	  <div unselectable="on" class=" BMap_omCtrl BMap_ieundefined BMap_noprint anchorBR quad4" style="width: 13px; height: 13px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10;">
		<div class="BMap_omOutFrame" style="width: 149px; height: 149px;">
		  <div class="BMap_omInnFrame" style="bottom: auto; right: auto; top: 5px; left: 5px; width: 142px; height: 142px;">
			<div class="BMap_omMapContainer"></div>
			<div class="BMap_omViewMv" style="cursor: url(http://api0.map.bdimg.com/images/openhand.cur) 8 8, default;">
			  <div class="BMap_omViewInnFrame">
				<div></div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="BMap_omBtn BMap_omBtnClosed" style="bottom: 0px; right: 0px; top: auto; left: auto;"></div>
	  </div>
	  <div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL" style="cursor: default; white-space: nowrap; color: black; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 11px; line-height: 15px; font-family: arial, sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10; background: none;"><span _cid="1" style="display: inline;"><span style="font-size:11px">© 2015 Baidu&nbsp;- Data © <a target="_blank" href="http://www.navinfo.com/" style="display:inline;">NavInfo</a> &amp; <a target="_blank" href="http://www.cennavi.com.cn/" style="display:inline;">CenNavi</a> &amp; <a target="_blank" href="http://www.365ditu.com/" style="display:inline;">道道通</a></span></span></div>
	</div>
  </div>
</div>
<!--{template company/footer}-->
<script>

	var isNewApp = "{$app['isNewApp']}";
	var appType = "{$app['type']}";
	function sureAdd(SESSIONKEY){
		if(isNewApp=="yes"&&appType=='android') $("#SESSIONKEY").attr("value",SESSIONKEY);
		var checkResult = modify.checkInput();
		if(checkResult ==true){
			showLoading();
			$("#modifyForm").submitForm({success:modify.modifyCallBack, clearForm: false});
		}
	}

	window.onscroll = function(){
		$("#mapV2").css("top",document.body.scrollTop);
	};
	var modify = {
		init:function(){
			area='{$com[comAreaId]}';
			if(area){
				r_area=area;
			}else{
				r_area=null;
			}
			$('#cur_area').area({showLevel:3,selectArea:r_area,onSelect:function(id,name){
				$('#hddCurArea').val(id);
			}});
			$("#biaojiditu").click(function(){
				$(".m_master").show();
				$("#mapV2").css("top",document.body.scrollTop).show();
				initMap();
			});
			//主行业弹窗
			$("#mainCallingDiv").click(function(){
				var dataurl = "/api/web/industry.api?act=calling";
				thirdSelect.init("","所处主行业",dataurl,"calling","#txtMainCalling","#main_calling_name");
			});
			//次行业弹窗
			$("#nextCallingDiv").click(function(){
				var dataurl = "/api/web/industry.api?act=calling";
				thirdSelect.init("","所处次行业",dataurl,"calling","#txtNextCalling","#next_calling_name",modify.nextCallingBack);
			});
			//添加主行业
			$("#addNextCalling").click(function(){
				$(this).hide();
				$(".addNextCallingDiv").show();
			});
			//所在地区
			/*$("#areaSelect").click(function(){
				  var dataurl = "/region.html?act=nextList";
				thirdSelect.init("","所在地区",dataurl,"area","#hidArea","#area_name");
			});*/
			//删除次行业
			$("#DeleteNextCalling").click(function(){
				$(".addNextCallingDiv").hide();
				$("#txtNextCalling").val("");
				$("#next_calling_name").html("");
				$("#addNextCalling").show();
			});
			
			//绑定地图标注
			/*$("#bindMap").click(function(){
				$("#bodyMain").hide();
				$("#companyMainTop").hide();
				$("#matchMap").show("fast");
			});*/
				$('#txtAddress').focusout(function(){
				var addr = $(this).val();
					if(addr != ''){
						var geo = new BMap.Geocoder();
						geo.getPoint(addr, relocateCallback, '');   //缺一个城市名
					}
				});
			
			//绑定福利弹窗样式
			$(".setReward").on('click',function(){
				modify.openSetReward();
			});
			//保存
			$(".loginNewsBtn").click(function(){
				var checkResult = modify.checkInput();
				if(checkResult ==true){
					showLoading();
					$("#modifyForm").submitForm({success:modify.modifyCallBack, clearForm: false});
				}
			});
			
		},
		modifyCallBack:function(json){
			closeLoading();
			if(json.status<0){
				alert(json.msg);return;
			}
			alert("修改成功!");
			if(isNewApp!="yes"){
				window.location.href = "/company/account/";
			}else{
				appJump();
			}
		},
		checkInput:function(){
			$status_flag = true;
			
			return $status_flag;
		},
		nextCallingBack:function(){
			var selectValue =$("#txtNextCalling").val();
			var mainCalling = $("#txtMainCalling").val();
		
			if(selectValue == mainCalling){
				alert("次行业不能和主行业一样");
				$("#txtNextCalling").val("");
				$("#next_calling_name").html("");
			}
		},
		openSetReward:function(){
			modify.openAlert("#rewardDiv");
			reward.initialize();
		},
		openAlert:function(c){
			$(".m_master").show();
			$(c).show();
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
		}
	};
	modify.init();

//app跳转
function appJump(){
	window.android.appJump();//android
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
						  modify.closeAlert("#rewardDiv");
						  //还原福利原来的弹窗数据
						  backRewardAlert();
					 });
					 $("#btnReardSave").click(function(){
						 reward.getCacheData();
						 refreshReward(cacheDefaultReward,cacheDefaultName,cacheOtherReward);
						 //关闭弹窗
						modify.closeAlert("#rewardDiv");
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
		
//地图标注		
var initPt;
var initArea;
//var map,marker;
//var availWidth = document.documentElement.clientWidth; 
//var availHeight = document.documentElement.clientHeight;
// //var availHeight = $(document).height();
////var availWidth = $(document).width();
//$("#mapCon").height(availHeight);
//$("#mapCon").width(availWidth);
	initMap();

function initMap(){
	var mapX = $('#hidMapX').val();
	var mapY = $('#hidMapY').val();
	var mapZoom = $('#hidMapZoom').val();
	if(typeof mapZoom =='undefined' || mapZoom == ''){
		mapZoom = 15;
	}
	var initPt = null;
	if(typeof mapX != 'undefined' && mapX!='' && typeof(mapY) != 'undefined' && mapY!=''){
		initPt = new BMap.Point(mapX,mapY);
	}
//
//	var address = $('#txtAddress').val();
//
//	//这个逻辑由于单选地区控件是异步加载的，所以这里可能始终取的是空值，暂时保留吧
//	var areaDesc='';
//	var areas = $('#curarea').getAreaNames();
//	for(var i=0;i<areas.length;i++){
//		areaDesc += areas[i] ;
//	}

	var defaultPt = new BMap.Point({$com[comLongitude]},{$com[comLatitude]});


	map = new BMap.Map("mapCon");


	//在加载完成，确定中心点后，设置标注点
	map.addEventListener('load',function(){
		var pt = null;
		if(initPt!=null){
			pt = initPt;
		}
		else{
			pt = new BMap.Point(map.getCenter().lng,map.getCenter().lat);
		}

		var myIcon = new BMap.Icon("http://cdn.597.com/m/images/maplabel.png", new BMap.Size(33,50));
		marker = new BMap.Marker(pt,{icon:myIcon});  // 创建标注
		map.addOverlay(marker);			  // 将标注添加到地图中
		marker.enableDragging();
		marker.setTitle('请拖动至您公司所在位置');

		var label = new BMap.Label("请拖动至您公司所在位置",{offset:new BMap.Size(35,5)});
		marker.setLabel(label);

		//添加事件，在拖动时去掉文字提示
		marker.addEventListener('dragstart',function(){
					label.setStyle({display:'none'});
		});
		marker.addEventListener('dragend',function(){
			$('#hidMapX').val(marker.getPosition().lng);
			$('#hidMapY').val(marker.getPosition().lat);
			$('#hidMapZoom').val(map.getZoom());
		});
	});

	if(initPt != null){
		map.centerAndZoom(new BMap.Point(mapX,mapY), mapZoom);
	}
	else{
		map.centerAndZoom(defaultPt, mapZoom);
	}


	map.addControl(new BMap.NavigationControl());			   // 添加平移缩放控件
	map.addControl(new BMap.MapTypeControl());		  //添加地图类型控件
	map.addControl(new BMap.OverviewMapControl());			  //添加默认缩略地图控件
	map.enableScrollWheelZoom();							//启用滚轮放大缩小

	map.addEventListener('zoomend',function(){
		$('#hidMapZoom').val(map.getZoom());
	});
}


function relocateCallback(point){
	if(point == null) return;
	map.setCenter(point);
	marker.setPosition(point);
	$('#hidMapX').val(marker.getPosition().lng);
	$('#hidMapY').val(marker.getPosition().lat);
	$('#hidMapZoom').val(map.getZoom());
}
</script>
</body>
</html>