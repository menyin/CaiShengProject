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
	<title>发出的面试邀请-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/version.js"></script>
	<script type="text/javascript" src=".http://cdn.597.com/m/js/saved_resource"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/mobile.js"></script>
	<script type="text/javascript" src="http://cdn.597.com/m/js/global.js"></script>
<script type="text/javascript">
	jpjs.config({
		preload: 'mobile, base.util, base.class, base.shape',
		preCombo: 'jquery, mobile, base.util, base.class, base.shape, base.event, base.attribute, base.aspect, tools.cookie'
	});
</script>
<style type="text/css">
	.red{}
</style>
</head>
<body>
<div class="loginPop">
	<div class="loginTopBg loginTopBg2">
		<a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>发出的面试邀请
	</div>
</div>
<div class="mRcmend" style="background:none;">
	<!--{if !$no}-->
		<div class="mNoData">
			<em class="icon-uniE61E"></em>
			<span><!-- 该筛选条件下 -->暂无数据</span>
		</div>
	<!--{else}-->
	<div id="pageless_container" class="mRcmendListbg mFilterdListbg">
		<ul id="content">
			<!--{loop $items $resume}-->
			<li><a href="/company/resume/resume.html?rid={$resume[_rid]}&act=invite&join_id={$resume[_inviteId]}"><b>{$resume[jname]}</b><b class="subFtit">{$resume[realname]}</b><p>
				<span>发送邀请时间：{$resume[_createTime]}</span></p></a>
				<div class="mTitimg"><img src="{$resume['attachment']}" width="62" height="78"></div>
				<div class="show_time"></div>
				<!--{if $resume['status']==1}-->
					<i class="gray">未参加面试</i>
				<!--{elseif $resume['status']==2}-->
					<i class="green">录用</i>
				<!--{elseif $resume['status']==3}-->
					<i class="gray">淘汰</i>
				<!--{elseif $resume['status']==9}-->
					<i class="gray">求职者放弃</i>
				<!--{/if}-->
				<p style="margin:10px 8px;color:black;">面试时间：{$resume[inviteDate]} {$resume[inviteTime]}</p>
				<em class="icon-uniE603"></em>
			</li>
			<!--{/loop}-->
		</ul>
		<div id="drag"><span style="color: red;"></span>
		<div class="draginner">下拉自动加载更多</div>
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
	var draginner=$('.draginner')[0];
	var total=$('#totalpage').html();
	k = false;
	$('.draginner').css('padding-left','10px');
	draginner.style.background="url(http://cdn.597.com/m/images/load.gif) 0 50% no-repeat";
	draginner.innerHTML="正在加载请稍候";
	$.post( "/company/resume/invite.html?format=json",
	{'p':curp},
		function(data){
			if (data != null) {
				var datalist = eval(data);
				$.each(datalist, function (i, item) {
					info="<li><a href=\"/company/resume/resume.html?rid="+item._rid+"&act=invite&join_id="+item._inviteId+"\"><b>"+item.jname+"</b><b class=\"subFtit\">"+item.realname+"</b><p><span>发送邀请时间："+item._createTime+"</span></p></a><div class=\"mTitimg\"><img src=\""+item.attachment+"\" width=\"62\" height=\"78\"></div><div class=\"show_time\">"+item._createTime+"</div>";
					if(item.status==1){
						info+="<i class=\"gray\">未参加面试</i>";
					}else if(item.status==2){
						info+="<i class=\"green\">录用</i>";
					}else if(item.status==3){
						info+="<i class=\"gray\">淘汰</i>";
					}else if(item.status==9){
						info+="<i class=\"gray\">求职者放弃</i>";
					}
					info+="<p style=\"margin:10px 8px;color:black;\">面试时间："+item.inviteDate+" "+item.inviteTime+"</p>";
					info+="<em class=\"icon-uniE603\"></em></li>";
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
/*function deleteResume(invite_id){
	var alert_msg = "对方放弃,不能查看，是否将该简历放入回收站？";   
	if(invite_id =='' ||invite_id ==0){
		alert("没有找到要放入回收站的简历！");
		return false;
	}
	var r = confirm(alert_msg);
	if(!r){
		return false;
	}
	$.post('/companyresumemanage/deleteInvites/',{'invite_id':invite_id},function(json){
		if (json && !json.success) {
			alert(json.error);
			return;
		}else{
			alert("放入回收站成功");
			window.location.reload();
		}

	},'json');
}*/
</script>
<!--{template company/footer}-->

</body></html>