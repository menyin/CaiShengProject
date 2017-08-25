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
	<title>邀请面试-597人才网</title>
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
body{padding-top:0px!important;}
</style>
<script>
$(document).ready(function(){
	$('.mFilterSure li a').on('click',function(){
		$(this).addClass('cur');
		$(this).siblings('.cur').removeClass('cur');
	});
})

var APPTYPE = "{$app['type']}";
//ios
function inviteSuccess(share){
	window.android.inviteSuccess(share);//android
}
</script>
</head>
<body class="invite-resume">
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop">
<div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>邀请面试</div>
</div>
<div style="padding-top: 45px;"></div>
<!--{/if}-->
<div class="mKeywordP" style="padding-bottom:0;">
<input type="hidden" id="resumeid" name="hddResumeID" value="{$resumeid}" />
<input type="hidden" id="hddInviteType" name="hddInviteType" value="{$InviteType}" />
<input type="hidden"  value="{$join_id}" />
<input type="hidden" id="join_id" name="join_id" value="{$_join_id}" />
	<div class="mKeywordBg mKeywordBgc" style="display:none;">
		<span>选择模板</span>
		<select name="template" class="mKeywSelect">
			<option value="0">邀请面试标准模板</option>
		</select>
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>公司名称</span>
		<input type="text" placeholder="请输入公司名称" name="txtCompanyname" value="{$companyInfo['cname']}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>面试职位</span>
		<select id="job_id" name="job_id" class="mKeywSelect">
			<!--{loop $_jobList $_job}-->
				<option value="{$_job[jid]}" <!--{if $_job['jid']==$joinArr['jid']}--> selected="selected"<!--{/if}-->>{$_job[jname]}</option>
			<!--{/loop}-->
			<!-- <option value="0">自定义</option> -->
		</select>
	</div>
	<div class="mKeywordBg mKeywordBgc" id="my_station" style="display:none">
		<span>自定义</span>
		<input type="text" placeholder="请输入自定义职位" name="my_station" value="" class="mKeywText">
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>面试时间</span>
		<div class="mBoard">
			<select name="hddDate" class="mKeywSelect">
				<!--{loop $week $_date}-->
					<option value="{$_date[id]}">{$_date[name]}</option>
				<!--{/loop}-->
			</select>
			<select name="hddtime" class="mKeywSelect mKeywSelectx">
				<option value="08:00">08:00</option>
				<option value="08:30">08:30</option>
				<option value="09:00">09:00</option>
				<option value="09:30">09:30</option>
				<option value="10:00" selected="selected">10:00</option>
				<option value="10:30">10:30</option>
				<option value="11:00">11:00</option>
				<option value="11:30">11:30</option>
				<option value="12:00">12:00</option>
				<option value="12:30">12:30</option>
				<option value="13:00">13:00</option>
				<option value="13:30">13:30</option>
				<option value="14:00">14:00</option>
				<option value="14:30">14:30</option>
				<option value="15:00">15:00</option>
				<option value="15:30">15:30</option>
				<option value="16:00">16:00</option>
				<option value="16:30">16:30</option>
				<option value="17:00">17:00</option>
				<option value="17:30">17:30</option>
				<option value="18:00">18:00</option>
				<option value="18:30">18:30</option>
				<option value="19:00">19:00</option>
				<option value="19:30">19:30</option>
				<option value="20:00">20:00</option>
				<option value="20:30">20:30</option>
			</select>
		</div>
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>面试地点</span>
		<input type="text" placeholder="请输入地址" name="txtAddress" value="{$companyInfo['comAddress']}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>联系人</span>
		<input type="text" placeholder="请输入联系人" name="txtLinkman" value="{$companyInfo['comUser']}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>联系电话</span>
		<input type="tel" placeholder="请输入联系人电话" name="txtLinktel" value="{$strPhone}" class="mKeywText" autocomplete="off">
	</div>
	<div class="mKeywordBg mKeywordBgc">
		<span>其他</span>
		<input type="text" name="txtRemark" placeholder="备注，可不填" class="mKeywText" autocomplete="off">
	</div>
</div>
<div class="keyMsageBg">
	<div class="keyMsage">
		<span>我们将用E-mail、微信通知求职者：<input type="hidden" name="txtSmsContent" id="txtSmsContent"></span>
	</div>
	<div class="keyMsage">
		<span><input type="checkbox" name="messageNotice" id="messageNotice" value="1"><em>手机短信通知求职者</em>(需要购买短信服务)</span>
	</div>	
	<div class="keyMlist" style="display:none;">
		<p><a href="javascript:;" id="t_easy" class="cur"><i id="t_easy_icon" class="icon-uniE6002 icon-uniE6012"></i>精简</a><a href="javascript:;" id="t_all" class=""><i id="t_all_icon" class="icon-uniE6002"></i>完整</a></p>
		<div class="keyMtxt" style="display:block;" id="resule_word"></div>
	</div>
</div>
<!--浮动窗邀请面试-->
<div class="mResumeBmpop">
	<a href="javascript:;" id="inviteDo" class="subPopLink07"><i class="icon-uniE611"></i><span>立即邀请</span></a> 
</div>
<script>
	$('.keyMsage #messageNotice').click(function(){
		$('.keyMlist').toggle();
	});

	var apply_id = $("#join_id").val();
	var download_id = 0;
	var resume_id = $("#resumeid").val();
	var invitetype = $("#hddInviteType").val();
	$(function(){
		setResult();
		//选择模板
		$("#t_easy").click(function(){
			$("#t_easy").addClass("cur");
			$("#t_all").removeClass("cur");
			$("#t_easy_icon").addClass("icon-uniE6012");
			$("#t_all_icon").removeClass("icon-uniE6012");
			setResult();
		});
		$("#t_all").click(function(){
			$("#t_all").addClass("cur");
			$("#t_easy").removeClass("cur");
			$("#t_easy_icon").removeClass("icon-uniE6012");
			$("#t_all_icon").addClass("icon-uniE6012");
			setResult();
		});
		//添加事件
		if($("select[name='job_id']").val() ==0){
			 $("#my_station").show();
		}
		$("select[name='job_id']").change(function(){
			if($(this).val()==0){
				$("#my_station").show();
			}else{
				$("#my_station").hide();
			}
		});
		//提交
		$("#inviteDo").click(function(){
			var companyname = $("input[name='txtCompanyname']").val();
			var job_id = $("select[name='job_id']").val();
			var date = $("select[name='hddDate']").val();
			var time = $("select[name='hddtime']").val();
			var address = $("input[name='txtAddress']").val();
			var linkman = $("input[name='txtLinkman']").val();
			var link_tel = $("input[name='txtLinktel']").val();
			var remark = $("input[name='txtRemark']").val();
            var txtSmsContent = $("input[name='txtSmsContent']").val();
            var messageNotice=0;
            if($("input[name='messageNotice']:checked").val()==1){
            	messageNotice=1;
            }
			/*					
			var job_station ='';
			if(job_id ==0){
				job_station = $("input[name='my_station']").val();
			}else{
				job_station = $("select[name='job_id'] option:selected").html();
			}
			if(job_station ==''){
				alert("邀请面试职位不能为空");return;
			}			
			var easy = $("#t_easy").hasClass("cur");
			var smsType =1;
			if(easy){
				smsType =1; 
			}else{
				smsType =2;
			}
			var company_name =  $("input[name='company_name']").val();
			var hddInviteType = 0;//发送方式
			if(invitetype ==1){
				hddInviteType =1;
			}else{
				hddInviteType =0;
			}*/

			var data ={'act':'sendInvite','hddResumeID':resume_id,'txtCompanyname':companyname,'hddDate':date,'hddtime':time,'txtAddress':address,'txtLinkman':linkman,'txtLinktel':link_tel,'txtRemark':remark,'hddJobID':job_id,'join_id':apply_id,'messageNotice':messageNotice,'txtSmsContent':txtSmsContent,cidHash:{$cid}};
				$.post('/api/web/company.api',data,function(json){
					alert(json.msg);
					//zy app需求
					if(json.status>0) {
						if(APPTYPE) {
							var share = json.str;
							inviteSuccess(share);
						}
						window.location.href = '/company/resume/apply.html';
					}
					//如果是下载的简历 修改下载记录 todo
				},'json');
		});
	})
	function setDownloadRead(download_id){
	$.post('/companyresumemanage/setDownloadRead',{'download_id':download_id},function(json){
			//如果是下载的简历 修改下载记录 todo
		},'json');
	}
	function setResult(){
		var company_name =  $("input[name='txtCompanyname']").val();
		//职位
		var job_station = $("select[name='job_id'] option:selected").html();
		var address = $("input[name='txtAddress']").val();
		var linkman = $("input[name='txtLinkman']").val();
		var link_tel = $("input[name='txtLinktel']").val();
		var remark = $("input[name='txtRemark']").val();
		var easy = $("#t_easy").hasClass("cur");
		var date = $("select[name='hddDate']").val();
		var t = $("select[name='hddtime']").val();
		var m='';
		var time ="";
		if(t !=''){
			m = t.split(":");
		}
		if(m.length==2){
			time = date+"日"+m[0]+"点"+m[1]+"分";
		}else{
			time = date+"日"+m[0]+"点";
		}
		var result_word ="";
		if(easy){
			result_word = company_name+"邀您面试";
			if(job_station !='')
				result_word = result_word +"【"+job_station+"】详情请登录http://m.597.com";
		  
		}else{
			result_word =company_name+"邀您面试";
			if(job_station !=''){
				result_word =result_word+"【"+job_station+"】"
			}
			if(time!=''){
				result_word = result_word +"时间"+time;
			}
			if(address !=''){
				result_word =  result_word +" 地点："+address; 
			}
			if(linkman !=''){
				result_word = result_word +" 联系："+linkman;
			}
			if(link_tel !='' &&linkman !=''){
				result_word = result_word+link_tel;
			}
			if(remark !=''){
				result_word = result_word+"注："+remark;
			}
		}
		$("#txtSmsContent").val(result_word);
		$("#resule_word").html(result_word);

	}
</script>

<!--{template company/footer}-->
</body></html>