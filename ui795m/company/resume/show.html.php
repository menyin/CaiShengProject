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
	<title>{$resume['realname']}简历-597人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
<style>
	.hidden_li{display:none}
</style>
<script>
$(document).ready(function() {
	$('.expandAll').click(function(){
		$('.hidden_li').slideDown("slow");
		$(this).hide();
		$(".expandAllcur").show();
	});
	$('.expandAllcur').click(function(){
		$('.hidden_li').slideUp('slow');
		$(this).hide();
		$(".expandAll").show();
	});
		$('.mRsmPop').click(function(){
		$(this).toggleClass('mRsmPopCur').prev('.mRsmTit').slideToggle();
	});
	$('.mRtakeCont a').click(function(){
		$('.mWarn').toggleClass('mWarncur');
	});
})
</script>
</head>
<body style="padding-bottom:72px;">
	<div class="loginPop"><div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>简历预览</div></div>
	 <div class="mResumexD">
		<img src="http://cdn.597.com/m/images/m_icon17.png" width="109" height="136">
		<h2>{$resume['realname']}</h2>
		<p>{$resume['_info']}<span>{$resume['maxEdu']}</span><b>|</b><span>{$resume['_workYear']}</span><b>|</b><span>{$resume['jobState']}</span></p>
	</div>
	<div class="mResumexD01">
	<h2>求职意向</h2>
		<ul>
			<li><span>希望从事：</span><em>{$resume['joinOffice']}{$resume['joinType']}</em></li>
			<li><span>期望行业：</span><em>{$resume['joinIndustry']}</em></li>
			<li><span>期望地区：</span><em>{$resume['joinCity']}</em></li>
			<li><span>职位类别：</span><em>{$resume['joinJobClass']}</em></li>
			<li><span>到岗时间：</span><em>{$resume['joinTime']}</em></li>
			<li style="display:none;"><span>期望薪资：</span><em>6000及以上 </em></li>
		</ul>
	</div>
	
	<!--工作经历-->
	<!--{if $resume[workList]}-->
		<div class="mResumexD01">
		<h2>工作经历</h2>
		<!--{loop $resume_work $work}-->
			<div class="mResumexContBg">
				<div class="mResumexCont">
					<span class="mRsmGary">{$work[workDateStart]}-{$work[workDateEnd]}</span>
					<p><span>{$work[workOffice]}</span><b>|</b><em><!--{if $right>1}-->{$work[workName]}<!--{else}-->******公司<!--{/if}--></em></p>
				</div>
			</div>
		<!--{/loop}-->
		</div>		
	<!--{/if}-->
	<!--教育背景-->
	<!--{if $resume[resume_edu]}-->
		<div class="mResumexD01">
		<h2>教育背景</h2>
		<!--{loop $resume_edu $edu}-->
		    <div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary">{$edu[eduDateStart]}-{$edu[eduDateEnd]}</span>
					<p><span>{$edu[eduBackGround]}</span><b>|</b><em>{$edu[eduName]}</em><b>|</b><em>{$edu[eduSpecialty]}</em></p>
				</div>
			</div>
		<!--{/loop}-->
		</div>
	<!--{/if}-->

	<!--培训经历-->
	<!--{if $resume[trainingList]}-->
		<div class="mResumexD01">
		<h2>培训经历</h2>
		<!--{loop $resume_training $training}-->
		    <div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary">{$training[trainingDateStart]}-{$training[trainingDateEnd]}</span>
					<p><span>{$training[trainingSpecialty]}</span><b>|</b><em>{$training[trainingName]}</em><b>|</b><em>{$training[trainingBackGround]}</em></p>
				</div>
			</div>
		<!--{/loop}-->
		</div>
	<!--{/if}-->

	<!--证书-->
	<!--{if $resume[certificateList]}-->
		<div class="mResumexD01">
		<h2>证书</h2>
		<!--{loop $resume_certificate $certificate}-->
		    <div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary"><img src="http://pic.{ROOT_DOMAIN}/certificate/{$certificate[certificateBackGround]}" title="{$certificate[certificateName]}"/></span>
				</div>
			</div>
		<!--{/loop}-->
		</div>
	<!--{/if}-->
		
	<!--项目经历-->
		<!--语言能力-->
		<div class="mResumexD01">
			<h2>语言能力</h2>
			<div class="mResumexContBg">
				<div class="mResumexCont">
					<p><span>英语</span><b>|</b><em>熟练</em><b>|</b><em>大学英语六级，IELTS</em></p>
				</div>
			</div>
		</div>
		<!--技能专长-->
		<div class="mResumexD01">
			<h2>技能专长</h2>
			<div class="mResumexContBg">
				<div class="mResumexCont">
					<p><span>国家计算机程序员高级</span><b>|</b><em>熟练</em></p>
				</div>
			</div>
		</div>
		
		<div class="mResumexD01" style="padding-bottom:20px;">
			<h2>自我评价</h2>
			<div class="mResumexContBg">
				<div class="mRsmTit" style="color:#3d4b4d;">
					多年大型国营、民营股份集团公司董事长、总经理、党委书记秘书（助理）工作经验。
擅长各类发言稿、新闻稿、文件、纪要书写；擅长各种对外交际、渠道打理，口才良好；有长期协助董事长、总经理参与各类谈判、收购工作经验；有兼任行政、人力资源管理负责人相关经验；有协助总经理协调、监管各部门工作经验；同时擅长策划、组织、创新。
作为领导秘书，不仅仅擅长公文写作和语言表达，更重要的是丰富的应对各种问题的综合素养，真正做到积极协助领导的作用。
				</div>
			</div>
		</div>
	 


<!-------浮动窗获取电话号码------>
<div class="m_master" style="display:none;"></div>
<div class="mResumeBmpop">
	<a style="width:45%;" href="javascript:;" onclick="return inviteResume()" class="subPopLink03">邀请面试</a>
	<a style="width:45%;" href="javascript:;" onclick="return getMobile()" class="subPopLink09" id="getMobileSub">获取联系方式</a>
</div>
	<!-------浮动窗获取电话号码花费点------>
	<div class="mRtake" id="down_alert" style="display:none;">
			<div class="mRtakeCont">
				<p>查看联系方式将扣除一个下载点，下次再打开该简历时自动打开联系方式，不会重复扣点！</p>
				<a href="javascript:;"><em class="mWarn"></em>不再提醒</a>
			</div>
		<ul>
			<li><a href="javascript:;" onclick="return cancelDown()" class="mRtakeBtn01">取消</a></li>
			<li><a href="javascript:;" id="downRusume" onclick="return downResume()" class="mRtakeBtn02">确定</a></li>
		</ul>
	</div>
	
	 <ul class="mRphone" id="reShowPhone" style="display:none;bottom:53px;">
			<li style="border-bottom:1px solid #cbcfd1;border-top:1px solid #cbcfd1;"><em class="icon-uniE605"></em><span id="re_mobile"></span><a id="re_mobile_href" href="" class="icon-uniE6033"></a></li>
			<li id="re_email_li"><em class="icon-uniE6042"></em><span id="re_email"></span></li>
	</ul>

<script>
	var isshowresumeinfo = 0;
	var is_show_linkway = 0;
	var not_member = 1;
	var member_expires = 0;
	var is_show = false;
	function downResume(){
		  var h = $(".mWarn").hasClass('mWarncur');
			var have_next = 0;
			if(h){
				have_next =1;
			}
		setStatus(have_next);
	}
	function getMobile(){
			if(isshowresumeinfo && is_show_linkway){
				if(is_show ==false){
					$("#reShowPhone").fadeIn("slow");
					is_show = true;
					 $("#getMobileSub").html("收起联系方式");
				}else{
					 $("#reShowPhone").fadeOut("slow");
					  is_show = false;
					   $("#getMobileSub").html("查看联系方式");
				}
			}else{
				//判断权限
										   alert("您暂未通过企业认证，认证后即可查看完整简历");return;
									//开始弹窗 下载联系方式
									
					$(".m_master").show();
					$("#down_alert").show();
								 return false;
			}
	}
	function inviteResume(){
		
						  alert("您暂未通过企业认证，还不能邀请面试");return;
						window.location.href="/companyresumemanage/inviteResume/resume_id-12370797";
		
	}
	function cancelDown(){
		$(".m_master").hide();
		$("#down_alert").hide();
	}
	
	function setStatus(have_next){
		var resume_id = 12370797; 
		var data = {'have_next':have_next,'resume_id':resume_id};
				 $.post('/companyresumemanage/downSearchResume',data,function(json){
					 cancelDown();
						if (json && !json.success) {
							  alert(json.error);
							  return;
						}else{
							$("#re_mobile").html(json.mobile_phone);
							$("#re_mobile_href").attr({'href':'tel:'+json.mobile_phone});
							$("#re_email").html(json.email);
							if(json.email ==''){
								 $("#re_email_li").css({'display':none});
							}
							$("#reShowPhone ").show();
							can_invite = true;
							$("#getMobileSub").html("收起联系方式");
							is_show = true;
							isshowresumeinfo =1;
							is_show_linkway = 1;
						}
						
				 },'json');
	}
</script>

<!--{template company/footer}-->

</body></html>