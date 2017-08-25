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
		<title>企业认证-{$domainInfo['region_name_short']}597人才网触屏版</title>
		<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
		<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
		<meta name="revisit-after"	content="1 days" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
		<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
		<script type="text/javascript" src="http://cdn.597.com/m/js/cp.form.js"></script>
</head>
<body>
<div class="loginPop"><div class="loginTopBg"><!-- <a href="javascript:window.history.go(-1);"> --><a href="/company/account/"><i class="icon-uniE6005"></i></a> <a href="javascript:;" id="doUpload" class="mFilterTop">提交</a>企业认证</div></div>
<div class="mKeywordP">
<h2><em style="border:none; padding-left:0; color:#8a9499;">上传企业认证资料</em></h2>
		<div class="mKeywordBg mKeywordBgc">
				<span>企业全称</span>
				<input type="text" value="" name="txtCompanyName" id="txtCompanyName" class="mKeywText" value="{$licence[cname]}" autocomplete="off">
		</div>
		<div class="mKeywordBg mKeywordBgc">
		<span>注册号</span>
				<input type="text" class="mKeywText" name="txtLicenceId" id="txtLicenceId" value="{$licence[licenceId]}" autocomplete="off">
		</div>
		<div class="mKeywordBg mKeywordBgc">
				<span>法人代表</span>
				<input type="text"	class="mKeywText" style="width:215px;" name="txtlegalperson" id="txtlegalperson" value="{$licence[licencename]}" autocomplete="off">
		</div>
		<input type="hidden" name="hddLicenceurl">
			<div class="mKeywordBg mKeywordBgc" style="padding-left:14px;">
					<em style="color:#a1abb3;" id="uploadFile">上传资质材料</em>
					<i></i>
					<img id="licenceImage" style="display:none" src="" width="40" height="40">
			</div>
		<p class="feedBacktit" style="padding:9px;">资质材料包括（但不限于）营业执照副本、税务证、机构代码证、核名通知书、行业证行可（如办学证行可）等；<br>证件照中的文字、图片、章印等需清晰可辨别，否则不能通过认证。（注：最大2M，支持gif/jpg/png</p>
<a href="/company/account/help.html" class="mKeywordPbtn">我没有资质材料 》</a>
</div>

<!-------提交弹窗------>
<div class="m_master" style="display: none;"></div>
		<div class="mRtake" id="showInfo" style="display:none;">
		<div class="mRtakeCont">
				<p style="color:#185f79; font-size:1.6em;">请核对以下信息是否与资质材料一致，不一致将无法通过认证！</p>
		</div>
		<ul class="mNotestxt mNotestxtF mNotestxtPop">
			<li>
				<span>企业全称：</span>
				<p id="company_name"></p>
			</li>
			<li>
				<span>注册号：</span>
				<p id="licence_id"></p>
			</li>
			<li>
				<span>法人代表：</span>
				<p id="legalperson"></p>
			</li>
		</ul>
		<ul>
			<li><a href="javascript:;" id="notValidateDo" class="mRtakeBtn01">取消</a></li>
			<li><a href="javascript:;" id="validateDo" class="mRtakeBtn02">确定</a></li>
		</ul>
</div>
<!-------提交弹窗------>
<div class="mRtake" id="showResult" style="display:none">
		<div class="mAudit">
				<p><i class="icon-uniE6023"></i><em>资料已提交，请等待审核</em></p>
				<span>我们会在一个工作日内审核您的资料</span>
		</div>
		<a href="javascript:;" id="iknow" class="mRtakeBtn03">知道了</a>
</div>
<!-------loading------>
<div class="mRtake" id="loading" style="display:none">
		<div class="mAudit">
				<p><em>正在上传中，请等待...</em></p>
		</div>
</div>
<!-------弹窗上传营业资质------>
<div class="iphoneImg" style="display: none;">
		<form id="form1" action="/api/web/uploadify.api" method="post" enctype="multipart/form-data">
				<input style="display:none" type="file" name="Filedata">
				<input style="display:none" type="text" name="act" value="licence">
				<a href="javascript:;" id="selectImage">从手机相册选择</a>
		</form>
		<a href="javascript:;" id="cons" class="gray">取消</a>
</div>
<!--{template company/footer}-->
<script>
$(function(){
		$("#uploadFile").click(function(){
				$(".m_master").show();
				$(".iphoneImg").show();
		});
		$("#selectImage").click(function(){
				$("input[name='Filedata']").click();
		});
		$("input[name='Filedata']").change(function(){
				$('#form1').ajaxSubmit({beforeSubmit:checkMe,data:{},success:success,dataType:'json'});
		});
		//取消
		$("#cons").click(function(){
				$(".m_master").hide();
				$(".iphoneImg").hide();
		});
				$("#notValidateDo").click(function(){
				$(".m_master").hide();
				$("#showInfo").hide();
		});
		//提交资料
		$("#doUpload").click(function(){
				var company_name = $("input[name='txtCompanyName']").val();
				var licence_id = $("input[name='txtLicenceId']").val();
				var legalperson = $("input[name='txtlegalperson']").val();
				var hddLicenceurl = $("input[name='hddLicenceurl']").val();
				if(company_name ==''){
						alert("请填写公司名称");return false;
				}
				if(licence_id ==''){
						alert("请填写注册号");return false;
				}
				if(legalperson ==''){
						alert("请填写法人代表");return false;
				}
				if(hddLicenceurl ==''){
						alert("请上传资质材料");return false;
				}
				$("#company_name").html(company_name);
				$("#licence_id").html(licence_id);
				$("#legalperson").html(legalperson);
				$(".m_master").show();
				$("#showInfo").show();
		});
		//上传
		$("#validateDo").click(function(){
				$(".m_master").hide();
				var company_name = $("input[name='txtCompanyName']").val();
				var licence_id = $("input[name='txtLicenceId']").val();
				var legalperson = $("input[name='txtlegalperson']").val();
				var hddLicenceurl = $("input[name='hddLicenceurl']").val();
				var data ={'cname':company_name,'licenceid':licence_id,'licencename':legalperson,'licenceurl':hddLicenceurl,'act':'savelicence',cidHash:{$cid}};
				$.post('/api/web/company.api',data,function(json){
						if(json.status<1){
								$(".m_master").hide();
								$("#showInfo").hide();
								alert('操作失败！');
								return;
						}
						$(".m_master").hide();
						$("#showInfo").hide();
						$(".m_master").show();
						$("#showResult").show();
						return;
				},'json');
		});
		$("#iknow").click(function(){
				$(".m_master").hide();
				$("#showResult").hide();
				window.location.href="/company/account/";
		});
})
function success(json){
		$(".m_master").hide();
		$("#loading").hide();
		if(json && json.error){
				alert(json.error);
				return false;
		}
		$("input[name='hddLicenceurl']").val(json.name);
		alert("上传成功");
		$("#licenceImage").attr({'src':json.path}).show();
}
	
function checkMe(){
		$(".iphoneImg").hide();
		$(".m_master").show();
		$("#loading").show();
		return true;
}
</script>
</body></html>