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
	<title>搜索的简历-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/saved_resource"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/mobile.js"></script>
	<style>
	/*面包屑*/
	.bread{ float:left; height:40px; width:98%;line-height:40px;border-bottom: 1px solid #ddd;
	 margin: 0 10px;
	}
	.bread_text{ text-align:left;}
	.bread_text a{ margin:0 5px;}
	.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
	</style>
</head>
<body>
<div class="loginPop">
	<div class="loginTopBg loginTopBg2">
		<a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>搜索的简历
	</div>
</div>
<div class="bread">
	<div class="bread_text"><a href="/"><font color="#27b6a6">首页</font></a> > <a href="/company/resume/searchResume.html"><font color="#27b6a6">搜索页面</font></a> > <a href="javascript:window.history.go(-1);">搜索结果</a>
	</div>
</div>
<div class="mRcmend" style="background:none;">
<input type="hidden" id="txtKeyword" name="txtKeyword" value="{$query[keyword]}">
<input type="hidden" id="expArea" name="expArea" value="{$query[joinCityId]}">
<input type="hidden" id="jobsort" name="jobsort" value="{$query[joinJobClassId]}" >
<input type="hidden" id="calling" name="calling" value="{$query[joinIndustryId]}">
<input type="hidden" id="ddlMinWrokYear" name="ddlMinWrokYear" value="{$query[MinWrokYear]}">
<input type="hidden" id="ddlMaxWrokYear" name="ddlMaxWrokYear" value="{$query[MaxWrokYear]}">
<input type="hidden" id="txtAgeLower" name="txtAgeLower" value="{$query[txtAgeLower]}">
<input type="hidden" id="txtAgeUpper" name="txtAgeUpper" value="{$query[txtAgeUpper]}">
<input type="hidden" id="chkDegree" name="chkDegree" value="{$query[maxEdu]}">
<input type="hidden" id="radSex" name="radSex" value="{$query[gender]}">
<input type="hidden" id="txtMinStature" name="txtMinStature" value="{$query[txtMinStature]}">
<input type="hidden" id="txtMaxStature" name="txtMaxStature" value="{$query[txtMaxStature]}">
<input type="hidden" id="radMarriage" name="radMarriage" value="{$query[marriage]}">	
	<!--{if $res[total_found]==0}-->
	<div class="mNoData">
		<em class="icon-uniE61E"></em>
		<span><!-- 该筛选条件下 -->暂无数据</span>
	</div>
	<!--{else}-->
	<div id="pageless_container" class="mRcmendListbg mFilterdListbg">
		<div id="totalpage" class="none">{$_allPages}</div>
		<ul id="content">
			<!--{loop $data $l}-->
			<li>
				<a href="/company/resume/resume.html?rid={$l[_rid]}"><b>{$l[realname]}</b><b class="subFtit">{$l[_gender]}</b><p><span>{$l[_degree]}</span><span>|</span><span>{$l[_age]}岁</span><span>|</span><span>{$l['_workYear']}</span></p>
				<div class="mTitimg">
					<img src="{$l[attachment]}" width="62" height="78">
				</div>
				<em class="icon-uniE603"></em></a>
			</li>
			<!--{/loop}-->
		</ul>
		<div id="drag"><span style="color: red;"></span>
		<div class="page" style="text-align:center;margin:20px 0;">
			{$showpage}
		</div>
		<div class="draginner" style="display:none;">下拉自动加载更多</div>
	</div>
	<!--{/if}-->
</div>
<script type="text/javascript">
var total=$('#totalpage').html();
var k = true;
var w = $(window);
var curp = 2;
$("body").scrollTop(1);
if(total<=1){
		//console.log("hello");
		$('#drag').hide();
		k = false;
}
//滚动到页面底部时，自动加载更多
$(window).scroll(function(){
		var scrollh = $(document).height();
		var bua = navigator.userAgent.toLowerCase();
		if(bua.indexOf('iphone') != -1 || bua.indexOf('ios') != -1){
				scrollh = scrollh-140;
		}else{
				scrollh = scrollh-80;
		}
		//var c=document.documentElement.clientHeight || document.body.clientHeight, t=$(document).scrollTop();
		if(k != false && ($(document).scrollTop() + w.height()) >= scrollh){
				load();
		}
});

function load(){
    var keyword = $('#txtKeyword').val();
	var expArea=$('#expArea').val();
	var jobsort=$('#jobsort').val();
	var calling=$('#calling').val();
	var workYear1=$('#ddlMinWrokYear').val();
	var workYear2=$('#ddlMaxWrokYear').val();
	var ageLower=$('#txtAgeLower').val();
	var ageUpper=$('#txtAgeUpper').val();
	var chkDegree=$('#chkDegree').val();
	var sex=$('#radSex').val();
	var statureMin=$('#txtMinStature').val();
	var statureMax=$('#txtMaxStature').val();
	var marriage=$('#radMarriage').val();
	
	var str = "&txtKeyword="+keyword+"&ddlMinWrokYear="+workYear1+"&ddlMaxWrokYear="+workYear2+"&txtAgeLower="+ageLower+"&ageUpper="+ageUpper+"&radSex="+sex+"&radMarriage="+marriage+"&txtMinStature="+statureMin+"&txtMaxStature="+statureMax+"&expArea="+expArea+"&jobsort="+jobsort+"&calling="+calling;

	var draginner=$('.draginner')[0];
	var total=$('#totalpage').html();
	k = false;
	$('.draginner').css('padding-left','10px');
	draginner.style.background="url(http://cdn.597.com/m/images/load.gif) 0 50% no-repeat";
	draginner.innerHTML="正在加载请稍候";
	$.post( "/company/resume/searchResume.html?format=json&act=search"+str,
	{'p':curp},
		function(data){
			if (data != null) {
				var datalist = eval(data);
				$.each(datalist, function (i, item) {
					//alert(item.realname);
					info="<li><a href=\"/company/resume/resume.html?rid="+item._rid+"\"><b>"+item.realname+"</b><b class=\"subFtit\">"+item._gender+"</b><p><span>"+item._degree+"</span><span>|</span><span>"+item._age+"岁</span><span>|</span>";
					info+="<span>"+item._workYear+"年</span></p>";
					info+="<div class=\"mTitimg\"><img src=\""+item.attachment+"\" width=\"62\" height=\"78\"></div><em class=\"icon-uniE603\"></em></a></li>";
					
					/*info="<li><a href=\"/company/resume/resume.html?rid="+item._id+"\"><b>"+item.realname+"</b><b class=\"subFtit\">"+item.jname+"</b><p><span>"+item.maxEdu+"</span><span>|</span><span>"+item.birthday+"</span><span>|</span><span>"+item._workYear+"</span></p></a><div class=\"mTitimg\"><img src=\"http://cdn.597.com/m/images/m_icon17.png\" width=\"62\" height=\"78\"></div><div class=\"show_time\">{$resume[createTime]}</div>";
					if(item.status==9 || item.status==10){
						info+="求职者取消申请";
					}else if(item.status==0){
						info+="<i class=\"green\">未读</i>";
					}else if(item.status==1){
						info+="<i class=\"blue\">已读</i>";
					}else if(item.status==2){
						info+="<i>已婉拒</i>";
					}else if(item.status==3){
						info+="<i>已邀请</i>";
					}
					info+="<em class=\"icon-uniE603\"></em></li>";*/
					$('#content').append(info);
				});
				$('.draginner').css('padding-left','0px');
				draginner.style.background="";
				draginner.innerHTML="下拉自动加载更多";
				curp=curp+1;
				k = true;
				if(curp>parseInt(total)){
					$('#drag').hide();
					k = false;
				}
			}
		});
	}
	$('#drag').click(function(){
	load();
});
</script>
<!--{template company/footer}-->
</body></html>