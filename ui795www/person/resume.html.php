<?exit?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>个人简历 - 597人才网</title>

<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resume.css?v=20140930" />
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=201509069"></script>
<script type="text/javascript">
	window.CONFIG = {
		HOST: 'http://cdn1.597.com/min/??',
		COMBOPATH: '/js/v2/'
	}
	var fancboxid = [];
</script>

<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js?v=100"></script>

<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20150906"></script>
<script type="text/javascript">
jpjs.config({
	combos: {
		'@editResume': [
			'@validator', 'product.resume.editResume', 'product.resume.editMutilResume'
		]
	}
});
jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
<style>
.edit-status-box .create-tit{ display:block;border-bottom: 2px solid #f1f1f1;
padding-top: 10px; position:relative; margin:0; padding-bottom:10px;overflow:hidden;width:748px;}
.create-tit .name{border:none; background:none; font-size:14px;}
.step1 .create-form{ margin-left:0;}

/*20150902改*/
.edit span { display: inline; margin-left: 5px;}
.no-data {margin-left: 20px;}
.resume-right {left:0;}
.resume-left {float: right;}
.res-item .stas {background-position: -121px -357px; width: 14px; height: 14px;}
#resume-left .oper {display: inline;}
.r-box {border:1px solid #c9d9eb; border-right:none; background:#e8f5fe url(http://cdn.597.com/www/img/v2/resume/rbox-bg.jpg) right top repeat-y; border-radius:5px 0 0 5px;}
</style>
</head>
<body class="noResize minMain">
<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000">
		<!--流程-->
		<div class="step-box clearfix">
			<div class="jl-name" id="jlName">
				<span id="resumeTimeBar" class="time">最后修改时间：{$resumeInfo['_modTime']}</span>
				<form id="formResumeName" action='/api/web/person.api?act=resume_save' method="post">
					<a href="/person/resume/">我的简历</a><u>&gt;</u><span class="jname" v="{$resumeInfo[rTitle]}">{$resumeInfo[rTitle]}</span>
					<input type="text" class="text" style="display:none" id="txtResumeName" name="txtResumeName" value="{$resumeInfo[rTitle]}" />
					<input type="text" style="display:none" value="此处的input是为了防止按回车键自动提交而加" />
					<a id="cancel" href="javascript:" class="setName" >重命名</a>
					<span data-for="txtResumeName" class="prompt-msg msg"></span>
				</form>
			</div>
		</div>
		<!--主体-->
		<div class="resume-box clearfix">
			<!--右边-->
			<div id="resume_rightSide" class="resume-right">
				<div class="r-box">

					<style type="text/css">
						.precent{
							display:block;width:122px;height:122px;
							background:url(http://cdn.597.com/www/img/v2/resume/percent.png) no-repeat;
						}
						.precent10{
							background-position:-254px 0;
						}
						.precent20{
							background-position:-510px 0;
						}
						.precent25{
							background-position:-638px 0;
						}
						.precent30{
							background-position:0 -129px;
						}
						.precent35{
							background-position:-126px -129px;
						}
						.precent40{
							background-position:-254px -129px;
						}
						.precent45{
							background-position:-382px -129px;
						}
						.precent50{
							background-position:-510px -129px;
						}
						.precent55{
							background-position:-638px -129px;
						}
						.precent60{
							background-position:0 -257px;
						}
						.precent65{
							background-position:-126px -257px;
						}
						.precent70{
							background-position:-254px -257px;
						}
						.precent75{
							background-position:-382px -257px;
						}
						.precent80{
							background-position:-510px -257px;
						}
						.precent85{
							background-position:-638px -257px;
						}
						.precent90{
							background-position:0 -385px;
						}
						.precent95{
							background-position:-126px -385px;
						}
						.precent100{
							background-position:-254px -385px;
						}
					</style>

					<span id="precentRound" class="precent precent{$resumeInfo['resumePrecent']}"></span>

				</div>
				<ul class="r-box res-item">
					<li <!--{if $resumeInfo['realname']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="baseinfor"><span>基本资料</span><em class="stas">添加</em></a></li>
					<li class="suc"><a href="javascript:" data-name="jobInfor"><span>求职意向</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['joinEvaluate']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="appraiseInfor"><span>自我评价</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['workList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="workInfor"><span>工作经历</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['eduList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="eduInfor"><span>教育背景</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['projectList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="projectInfor"><span>项目经验</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['languageList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="languageInfor"><span>语言能力</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['skillList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="skillInfor"><span>技能专长</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['certificateList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="cardInfor"><span>证书</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['otherinfoList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="otherInfor"><span>其他信息</span><em class="stas">添加</em></a></li>
					<li <!--{if $resumeInfo['practiceList']}-->class="suc"<!--{/if}-->><a href="javascript:" data-name="practiceInfor"><span>实践经验</span><em class="stas">添加</em></a></li>
				</ul>
				<p class="r-box"><a id="prestr-btn" href="javascript:" class="prestr-btn" title="保存并完成"></a></p>
				<p class="r-box"><a href='/resume.html?rid={$resumeInfo[_rid]}' class="preview-btn" title="预览简历" target="_blank"></a></p>
			</div>
			<!--/-->

			<!--左边-->
			<div id="resume-left" class="resume-left">
				<!--个人资料-->
				<div id="baseinfor">
					<dl class="res-infor clearfix" data-chkPhotoOpen="{$resumeInfo[isShowPhoto]}" data-chkNameOpen="{$resumeInfo[isShowFullName]}" data-idcard="{$resumeInfo[cardno]}">
						<dt class="img"><a href="/person/account/photo.html" target="_blank" title="修改头像"><span>修改头像</span><img src="{$resumeInfo['attachment']}" /></a></dt>
						<dd class="infor-box">
							<p class="name">
								<!--<i id="spnBasicSex" class="sex nan" v="1"></i>-->
								<strong id="spnBasicName" class="n"><!--{$resumeInfo[realname]}--></strong>
								<a href="javascript:" class="edit"><i></i><span>编辑</span></a>
							</p>
							<p class="inf1">
								<span id="spnBasicSex" v="{$resumeInfo[gender]}"><i class="<!--{if $resumeInfo[gender]==1}-->n<!--{else}-->v<!--{/if}-->"></i><!--{if $resumeInfo[gender]==1}-->男<!--{else}-->女<!--{/if}--></span>
								<span id="spnBasicAge" v="{$resumeInfo['birthday']}"><i class="y"></i><b>{$resumeInfo['age']}</b>岁</span>
								<!--{if $resumeInfo['maxEduInfo']}--><span><i class="x"></i>{$resumeInfo['maxEduInfo']}</span><!--{/if}-->
								<span id="spnWorkYear" v="{$resumeInfo['workYear']}"><i class="j"></i><b>{$resumeInfo['_workYear']}</b></span>
								<span id="spnBasicCurArea" v="{$resumeInfo[residenceid]}"><i class="d"></i>{$resumeInfo['residence']}</span>
							</p>
							<p class="inf3">
								<span class="applyStatus" style="<!--{if !$resumeInfo['jobState']}-->display:none;<!--{/if}-->">求职状态：</span>
								<span id="spnApplyStatus" v="{$resumeInfo['jobState']}" class="text" style="<!--{if !$resumeInfo['jobState']}-->display:none;<!--{/if}-->">{$resumeInfo['_jobState']}</span>
								<span class="accessionTime" style="<!--{if !$resumeInfo['joinTime']}-->display:none;<!--{/if}-->">到岗时间：</span>
								<span id="spnAccessionTime" v="{$resumeInfo['joinTime']}" class="text accessionTime" style="<!--{if !$resumeInfo['joinTime']}-->display:none;<!--{/if}-->">{$resumeInfo['_joinTime']}</span>
							</p>
							<p class="inf2">
								<span id="spnBasicMarriage" v="{$resumeInfo['marriage']},{$resumeInfo['fertility']}">{$resumeInfo['marriageInfo']}</span><u>-</u>
								<span id="spnBasicNativeArea" v="{$resumeInfo[nativeid]}">户籍：<i class="gray font12">{$resumeInfo['nativeName']}</i></span><u>-</u>
								<span id="spnBasicStature" v="{$resumeInfo[stature]}/{$resumeInfo[avoirdupois]}">{$resumeInfo['statureInfo']}</span><!--{if $resumeInfo[statureInfo]}--><u>-</u><!--{/if}-->
								<span id="spnBasicPolitical" v="{$resumeInfo[political]}">{$resumeInfo['politicalInfo']}</span>
							</p>
							<p class="inf1">
								<span id="spnBasicAddress" class="p" v="{$resumeInfo[address]}" <!--{if !$resumeInfo[address]}-->style="display:none"<!--{/if}-->>地址：{$resumeInfo[address]}</span>
							</p>
							<p class="link" style="margin-top:-1px;">
								<span id="spnBasicMobilePhone" data-bind="1" ><i class="p"></i><strong>{$resumeInfo['mobile']}</strong><em id="phoneAddr"></em><!--<b>/{$resumeInfo['telephone']}</b>--></span>
								<span id="spnBasicEmail" data-bind="" ><strong>邮箱：{$resumeInfo['email']}</strong></span>
								<span id="spnBasicQQ" class="last" v="{$resumeInfo[qq]}" <!--{if !$resumeInfo[qq]}-->style="display:none"<!--{/if}-->><strong>QQ：{$resumeInfo['qq']}</strong></span>
							</p>
						</dd>
					</dl>
					<!--/-->

					<!--编辑状态	 个人资料-->
					<div class="edit-status-box" style="display:none;position: relative;zoom:1">
						<!--基本资料-->
						<form action="/api/web/person.api?act=resume_save" method="post">
						<input type="hidden" name="resumeType" value="2">
						<p class="create-tit"><strong class="name">基本资料</strong></p>
						<div class="create-item step1">
							<div class="clearfix">
								<div class="head-img">
									<a href="/person/account/photo.html" target="_blank" title="修改头像"><img src="{$resumeInfo['attachment']}" alt=""><span>上传头像</span></a>
									<label id="chkPhotoOpen" for="hideImg" class="hide-img icon-chck" data-name="chkPhotoOpen" data-value="0"><em></em>简历中隐藏照片</label>
								</div>
								<div class="create-form">
									<dl class="clearfix">
										<dt>姓名<i class="red">*</i></dt>
										<dd class="formRows"><!--状态 warning error success-->
											<input id="txtUserName" type="text" class="c-text" name="txtUserName" watermark="您的姓名，2-6个汉字" style="width:200px" />
											<!--
											<label id="hideName" class="hideName icon-chck" data-name="chkNameOpen" data-value="0"><em></em>不显示全名</label>
											-->
											<span data-for="txtUserName" class="prompt-msg msg"><!--<i></i>请填写真实姓名--></span>
										</dd>
									</dl>
									<dl class="clearfix">
										<dt>性别<i class="red">*</i></dt>
										<dd class="formRows">
											<label for="sex1" class="icon-sex" data-name='radSex' data-value="1"><em class="icon-sex1"></em>男</label>
											<label for="sex2" class="icon-sex" data-name='radSex' data-value="2"><em class="icon-sex2"></em>女</label>
											<span data-for="radSex" class="prompt-msg msg"></span>
										</dd>
									</dl>
									<dl class="clearfix" style="position:relative;z-index:10">
										<dt>出生日期<i class="red">*</i></dt>
										<dd class="birthday clearfix select-group-row formRows">
										   <span class="formText dateText zIndex" style="z-index: 100;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" readonly value="年" name="inpBirthYear" id="inpBirthYear" style="width:60px;" class="text">
										  </span>
										  <span class="msgTxt">年</span>
											<span class="formText dateText zIndex" style="z-index: 99;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" readonly value="月" name="inpBirthMonth" id="inpBirthMonth" style="width:32px;" class="text">
											</span>
											<span class="msgTxt">月</span>
											<span class="formText dateText zIndex" style="z-index: 98;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" readonly value="日" name="inpBirthDate" id="inpBirthDate" style="width:32px;" class="text">
											</span>
											<span class="msgTxt">日</span>
											<span data-for="birthYMD" class="prompt-msg msg"></span>
										</dd>
									</dl>
									<dl class="clearfix" style="position:relative;z-index:9">
										<dt>现居住地<i class="red">*</i></dt>
										<dd class="addressMod select-group-row formRows">
											<div id="curArea"></div>
											<span data-for="hidCurArea" class="prompt-msg msg">1</span>
										</dd>
									</dl>
									<dl class="clearfix">
										<dt>详细地址<i class="red">&nbsp;</i></dt>
										<dd class="idcard formRows">
											<input type="text" name="txtAddress" id="txtAddress" class="c-text" watermark="示例：xx省xx市xx县/区xx村/街道xx号" style="width:309px;"/>
											<span data-for="txtAddress" class="prompt-msg msg"></span>
										</dd>
									</dl>
									<dl class="clearfix">
										<dt>工作经验<i class="red">*</i></dt>
										<dd class="formRows">
											<label for="exp1" class="icon-rad" data-name="radWorkState" data-value='1' data-status='true'><em></em>已参加工作</label>
											<label for="exp2" class="mgl10 icon-rad"  data-name="radWorkState" data-value='2'><em></em>目前在读/应届生</label>
											<span data-for="radWorkState" class="prompt-msg msg">1</span>
										</dd>
									</dl>
									<dl class="clearfix" style="position:relative;z-index:8">
										<dt><span id="labelWorkState">参加工作时间</span><i class="red">*</i></dt>
										<dd class="birthday select-group-row formRows">
											<span class="formText dateText zIndex" style="z-index: 100;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" readonly value="年" name="inpStartYear" id="inpStartYear" style="width:60px;" class="text" />
											</span>
											<span class="msgTxt">年</span>
											<span class="formText dateText zIndex" style="z-index: 99;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" readonly value="月" name="inpStartMonth" id="inpStartMonth" style="width:32px;" class="text" />
											</span>
											<span class="msgTxt">月</span>
											<span id="startYMD"></span>
											<span data-for="startYMD" class="prompt-msg msg"></span>
										</dd>
									</dl>
									<dl class="clearfix" style="position:relative;z-index:7">
										<dt><span id="labelWorkState">求职状态</span><i class="red">*</i></dt>
										<dd class="birthday select-group-row formRows">
											<div id="dropApplyStatus" class="dropv2" style="width:220px;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<label>请选择</label>
												<ul></ul>
											</div>
											<span data-for="hidApplyStatus" class="prompt-msg msg"></span>
										</dd>
									</dl>
									<dl class="clearfix" style="position:relative;z-index:6">
										<dt><span id="labelWorkState">到岗时间</span><i class="red">*</i></dt>
										<dd class="birthday select-group-row formRows">
											<div id="dropAccessionTime" class="dropv2" style="width:110px;">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<label>请选择</label>
												<ul></ul>
											</div>
											<span data-for="hidAccessionTime" class="prompt-msg msg"></span>
										</dd>
									</dl>
									<p align="center" class="moreInfor"><em class="hr"></em><span id="moreInforBtn">更多补充信息<i class="down jpFntWes">&#xf0dd;</i><i class="up jpFntWes" style="display:none">&#xf0de;</i></span></p>
								</div>
							</div>
						</div>

						<div id="step1-more" class="create-item step1-more">
							<dl class="clearfix">
								<dt>身份证号码</dt>
								<dd class="idcard formRows">
									<input type="text" name="txtIDCardNumber" class="c-text"/>
									<span data-for="txtIDCardNumber" class="prompt-msg msg"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>户口所在地</dt>
								<dd class="addressMod clearfix" style="z-index:7">
									<span id="nativePlace"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>婚育状况</dt>
								<dd class="clearfix">
									<div id="dropMarriage" class="dropv2" style="width:110px;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<label>请选择</label>
										<ul></ul>
									</div>

									<div id="dropFertility" class="dropv2 mgl10" style="width:110px;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<label>请选择</label>
										<ul></ul>
									</div>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>政治面貌</dt>
								<dd class="clearfix">
									<div id="dropPolitical" class="dropv2" style="width:110px;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<label>请选择</label>
										<ul></ul>
									</div>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>身高/体重</dt>
								<dd class="height formRows">
									<input type="text" name="txtStature" class="c-text" />厘米 &nbsp;
									<input type="text" name="txtAvoirdupois" class="c-text box-item" />公斤
									<span data-for="txtSheight" class="prompt-msg msg"></span>
								</dd>
							</dl>
						</div>
						<!--更多补充信息-->
						<!--/-->

						<!--联系方式-->
						<p class="create-tit"><strong class="name">联系方式</strong> </p>
						<div class="create-item step2">
							<dl class="clearfix">
								<dt>手机号码<i class="red">*</i></dt>
								<dd class="formRows validRows">
									<i id="phone-status" class="<!--{if $resumeInfo[mobile]}-->upd-num<!--{else}-->upd-num1<!--{/if}-->" style="display:none"></i><!--灰色:upd-num1;绿色:upd-num-->
									<input type="text" class="c-text" id="txtMobilePhone" name="txtMobilePhone" value="{$resumeInfo[mobile]}" v="{$resumeInfo[mobile]}" disabled="disabled"/><span data-for="txtMobilePhone" class="prompt-msg msg" disabled="disabled"></span><span id="spnConModMobile" >
										 <a id="btnBindMobile" href="javascript:void(0)" class="upd-link isDisabled" style="display:none">立即绑定</a>
										<a id="btnMobile" href="javascript:" class="upd-link isDisabled" style="display:none">更换号码</a>
									 </span>
								</dd>
							</dl>
							<dl id="divValiMobile" class="clearfix" style="display:none">
								<dt>验证码<i class="red">*</i></dt>
								<dd class="formRows validRows">
									<input id="txtValidateCode" type="text" class="c-text" value="" id="txtValidateCode" name="txtValidateCode" style="width:70px"/>
									<a id="btnSendValidate" href="javascript:" class="yzm-btn">免费发送验证码</a>
									<span data-for="txtValidateCode" class="prompt-msg msg"></span>
								</dd>
							</dl>
							<!--
							<dl class="clearfix">
								<dt>其它号码<i class="red">&nbsp;</i></dt>
								<dd class="formRows validRows">
									<input type="text" class="c-text" id="telephone" name="telephone" value="{$resumeInfo[telephone]}"  />
								</dd>
							</dl>
							-->
							<dl class="clearfix">
								<dt>电子邮箱<i class="red">*</i></dt>
								<dd class="formRows validRows" style="position: relative">
									<i id="email-status" class="upd-email1"></i><!--灰色:upd-email1;绿色:upd-email-->
									<input type="text" class="c-text" value="{$resumeInfo[email]}" v="{$resumeInfo[email]}" id="txtEmail" name="txtEmail"  disabled="disabled"/>
									<!--{if !$userInfo[email]}-->
									<a id="btnEmail" href="javascript:" class="upd-link isDisabled">添加邮箱</a>
									<!--{else}-->
									<a id="btnEmail" href="javascript:" class="upd-link isDisabled">更换邮箱</a>
									<!--{/if}-->
									<span data-for="txtEmail" class="prompt-msg msg"></span>
									<p id="emailInfoMsg" class="msg infoMsg" style="display:none">保存后，该邮箱将成为新的登录账号</p>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>QQ</dt>
								<dd class="formRows validRows">
									<input type="text" id="txtQQ" name="txtQQ" value="{$resumeInfo[qq]}" class="c-text" />
									<span data-for="txtQQ" class="prompt-msg msg"></span>
								</dd>
							</dl>
							<!--
							<dl class="clearfix">
								<dt>微信号</dt>
								<dd class="formRows validRows">
									<input type="text" id="txtweixinNo" name="txtweixinNo" value="{$resumeInfo[weixinNo]}" class="c-text" />
									<span data-for="txtweixinNo" class="prompt-msg msg"></span>
								</dd>
							</dl>
							-->
							<dl class="clearfix sub-item">
								<dt>&nbsp;</dt>
								<dd>
									<button id="btnSubmit" type="button" class="saveBtn sub-btn">保存</button>
									<button id="btnSubmit" type="button" class="cancelBtn canl-btn">取消</button>
								</dd>
							</dl>
						</div>
						</form>
						<!--/-->
					</div>
					<!--编辑状态结束/-->
				</div>

				<!--求职意向-->
				<div id="jobInfor">
				<p class="resume-tit"><strong class="name">求职意向</strong><a href="javascript:" class="edit"><i></i><span>编辑</span></a></p>
					<div class="resume-item">
						<ul class="job-inten clearfix" data-salaryShow="{$resumeInfo[hideSalary]}">
							<li>
								<span class="gray9">希望从事：</span>
								<span class="gray3" id="spnStation" v="{$resumeInfo[joinOffice]}">{$resumeInfo[joinOffice]}</span>
								<span class="gray9" id="spnAcceptParttime" v="{$resumeInfo[joinType]}" v1="{$resumeInfo[isparttime]}"><!--{if $resumeInfo[isparttime]==1}-->（可以接受兼职）<!--{/if}--></span>
							</li>
							<li>
								<span class="gray9">职位类别：</span>
								<span class="gray3" id="expectJobsort" v="{$resumeInfo[joinJobClassId]}">{$resumeInfo['joinJobClass']}</span>
							</li>
							<li>
								<span class="gray9">岗位级别：</span>
								<span class="gray3" id="spnJobLevel" v="{$resumeInfo[Joblevel]}">{$resumeInfo['joblevelInfo']}</span>
								<span class="gray9" id="spnAcceptLowerJobLevel" v="{$resumeInfo[chkJoblevel]}"><!--{if $resumeInfo[chkJoblevel]==1}-->（不低于此级别）<!--{/if}--></span>
							</li>
							<li>
								<span class="gray9">期望行业：</span>
								<span class="gray3" id="expectCalling" v="{$resumeInfo[joinIndustryId]}">{$resumeInfo['joinIndustry']}</span>
							</li>
							<li>
								<span class="gray9">期望薪资：</span>
								<!--{if $resumeInfo[hideSalary]==1}-->
								<span class="gray3" id="spnSalary" v="{$resumeInfo[joinSalary]}">面议</span>
								<!--{else}-->
								<span class="gray3" id="spnSalary" v="{$resumeInfo[joinSalary]}">{$resumeInfo['joinSalaryInfo']}</span>
								<!--{/if}-->
								<span class="gray9" id="spnAcceptLowerSalary" v="{$resumeInfo[chksalary]}"><!--{if $resumeInfo[chksalary]==1&&$resumeInfo[hideSalary]==0}-->（不低于此薪资）<!--{/if}--></span>
							</li>
							<li>
								<span class="gray9">工作地点：</span>
								<span class="gray3" id="expectArea" v="{$resumeInfo[joinCityId]}">{$resumeInfo['joinCity']}</span>
							</li>
						</ul>
					</div>
					<!--/-->

					<!--编辑状态	 求职意向-->
					<div class="edit-status-box create-item step21" style="display:none">
						<form action="/api/web/person.api?act=join_save"  method="post">
						<dl class="clearfix">
							<dt>工作类型<i class="red">*</i></dt>
							<dd class="formRows">
								<label class="icon-rad" data-name="radJoinType" data-value="1"><em></em>全职</label>
								<label class="icon-rad" data-name="radJoinType" data-value="2"><em></em>兼职</label>
								<label class="icon-rad" data-name="radJoinType" data-value="3"><em></em>实习</label>
								<span data-for="radJoinType" class="prompt-msg msg"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>意向职位<i class="red">*</i></dt>
							<dd class="formRows">
								<input id="txtJoinOffice" type="text" class="c-text" name="txtJoinOffice" watermark="请输入求职意向" />
								<label id="chkParttime" class="chkParttime icon-chck mgl10" data-name="chkParttime" data-value="1"><em></em>接受兼职工作</label>
								<span class="prompt-msg msg" data-for="txtJoinOffice"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>职位类别<i class="red">*</i></dt>
							<dd class="formMod checkMod formRows" style="z-index:5">
								<div id="dropJobsort" class="drop formText JobCayDrop" style="z-index:4"></div>
								<span class="prompt-msg msg" data-for="hidJobSortExpect"></span>
							</dd>
						</dl>

						<div class="clear"></div>
						<dl class="clearfix">
							<dt>期望行业<i class="red">*</i></dt>
							<dd class="formMod checkMod formRows" style="z-index:4">
								<div id="dropCalling" class="drop formText JobIndDrop" style="z-index:3"></div>
								<span class="prompt-msg msg" data-for="hidCallingExpect"></span>
							</dd>
						</dl>
						<div class="clear"></div>
						<dl class="clearfix">
							<dt>工作地点<i class="red">*</i></dt>
							<dd class="formMod checkMod formRows" style="z-index: 3">
								<span id="dropAreaMultiple" class="zIndex drop formText jobAddDrop" style="z-index:2"></span>
								<span class="prompt-msg msg" data-for="hidCurAreaBasic"></span>
							</dd>
						</dl>
						<div class="clear"></div>
						<dl class="clearfix">
							<dt>岗位级别<i class="red">*</i></dt>
							<dd class="formRows">
								<div id="dropJobLevel" class="dropv2" style="width:172px;">
									<b class="jpFntWes dropIco">&#xf0d7;</b>
									<label>未选择</label>
									<ul></ul>
								</div>
								<label id="chkJobLevel" class="icon-chck mgl10 mgt5 left" data-name="chkJobLevel" data-value="1"><em></em>不接受低于该级别的职位</label>
								<span class="prompt-msg msg" data-for="hidJoblevel"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>期望薪资<i class="red">*</i></dt>
							<dd class="formRows">
								<div class="clearfix">
									<div id="dropSalary" class="dropv2" style="width:110px;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<label>未选择</label>
										<ul></ul>
									</div>
									<label id="chkSalary" class="icon-chck mgl10 mgt5 left" data-name="chkSalary" data-value="1"><em></em>不低于此薪资</label>
									<label id="radHideSalary" class="icon-chck mgl10 mgt5 left" data-name="radHideSalary" data-value="1"><em></em>对企业显示为面议</label>
									<span class="prompt-msg msg" data-for="txtJoinSalary"></span>
								</div>
								<div style="color:#f00;margin-top:5px;font-size:12px">为了我们更好的为你推荐合适的企业，请确保薪酬填写准确</div>
							</dd>
						</dl>
						<dl class="clearfix sub-item">
							<dt>&nbsp;</dt>
							<dd>
								<button type="button" class="saveBtn sub-btn">保存</button>
								<button type="button" class="cancelBtn canl-btn">取消</button>
							</dd>
						</dl>
					</form>
					</div>
					<!--编辑状态结束/-->
				</div>

				<!--自我评价-->
				<div id="appraiseInfor">
					<p class="resume-tit" data-content="{$resumeInfo[joinEvaluate]}"><strong class="name">自我评价</strong><a href="javascript:" class="edit"><!--{if $resumeInfo[joinEvaluate]}--><i></i><span>编辑</span><!--{else}--><i class="i2"></i><span>添加</span><!--{/if}--></a><span class="no-data" >填写自我评价</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<div class="other-box"  style="<!--{if $resumeInfo[joinEvaluate]}-->display:block<!--{else}-->display:none<!--{/if}-->">
							<p class="infor"><span class="appraiseContent">{$resumeInfo[joinEvaluate]}</span></p>
						</div>
						<!--/有数据 结束-->
					</div>
					<!--/-->
					<!--编辑状态	 其他信息-->
					<div class="edit-status-box create-item" style="display: none">
						<form action="/api/web/person.api?act=resume_save" method="post">
						<!--<dl class="clearfix">
							<dt>主题<i class="red">*</i></dt>
							<dd class="formRows" style="zoom:1">
								<div id="selAppendContent" class="left dropv2 mgr10" style="width:125px;">
									<b class="jpFntWes dropIco">&#xf0d7;</b>
									<label>请选择</label>
									<ul></ul>
								</div>
								<div id="divTopicDesc" class="divTopicDesc">
									<input id="txtTopicDesc" class="c-text" name="txtTopicDesc" watermark="请输入主题名称" />
								</div>
								<span class="prompt-msg msg" data-for="topicDesc"></span>
							</dd>
						</dl>-->
						<dl class="clearfix">
							<dt>自我评价<i class="red"></i></dt>
							<dd class="formRows">
								<textarea class="left" name="txtAppraise" style="width:367px"></textarea>
								<span class="prompt-msg msg" data-for="txtAppraise"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>&nbsp;</dt>
							<dd class="formRows">
								<div class="reExamBtnBg">
									<a href="javascript:;" id="reExamBtn01" class="reExamBtn">示例一</a>
									<a href="javascript:;" id="reExamBtn02" class="reExamBtn">示例二</a>
								</div>
								<div id="rsExample01" class="rsExample">
									<img src="http://cdn.597.com/img/v2/resume/steel02.png" />
									<div class="reExamList">
										<p><b>社会岗位</b><span>6年销售经验，曾获得“最佳销售员工”荣誉，对市场、渠道和经销商管理有丰富经验.</span></p>
										<p><b>技术岗位</b><span>A2驾照,5年金杯车驾驶经验，2年出租车经验,熟悉重庆以及各周边路况,安全驶行超过20000公里.</span></p>
									</div>
								</div>

								<div id="rsExample02" class="rsExample">
									<img style="margin-left:107px;" src="http://cdn.597.com/img/v2/resume/steel02.png" />
									<div class="reExamList">
										<p><b>应届生简历</b><span>曾担任校外联部部长一职，负责学校活动的赞助招商，具备较强的组织领导能力和沟通能力。并于假期参加过销售岗位实习.</span></p>
									</div>
								</div>

							</dd>
						</dl>
						<dl class="clearfix sub-item" style="margin-top:10px;">
							<dt>&nbsp;</dt>
							<dd>
								<button type="button" class="saveBtn sub-btn">保存</button>
								<button type="button" class="cancelBtn canl-btn">取消</button>
							</dd>
						</dl>
						</form>
					</div>
			   </div>
			   <!--编辑状态结束-->

				<!--工作经历-->
				<div id="workInfor">
					<p class="resume-tit"><strong class="name">工作经历</strong><a href="javascript:" class="edit"><i class="i2"></i><span>添加</span></a><span class="no-data" >工作经验是简历中最重要的内容之一</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<!--{if $resumeInfo['workListInfo']}-->
							<!--{loop $resumeInfo['workListInfo'] $l}-->
							<div class="exper" >
								<div class="workRows clearfix editPanel" data-workid="{$l[workid]}"  data-jobsortContainer="{$l[workJobClassId]}" data-founder="0" data-salarySecrecy="{$l[workHideSalary]}">
									<span class="time" data-startTime="{$l[_workDateStart]}" data-endTime="{$l[_workDateEnd]}">{$l[workStartDate]}<!--{if $l[workEndDate]}-->-{$l[workEndDate]}<!--{else}--> -至今<!--{/if}--><br />[<!--{if $l[workyear]}-->{$l[workyear]}年<!--{/if}--><!--{if $l[workmonth]}-->{$l[workmonth]}个月<!--{/if}-->]</span>
									<div class="box-item">
										<p class="tit">
											<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a></span>
											<strong class="name jobName" v="{$l[workOffice]}">{$l[workOffice]}</strong><u>|</u><strong class="name companyName">{$l[workName]}</strong>
										</p>
										<div class="infor">
											<p class="mgb10"><span class="salary" v="{$l[workSalary]}"><!--{if $l[workSalary]&&!$l[workHideSalary]}-->{$l[workSalary]}元/月<!--{/if}--><!--{if $l[workHideSalary]}-->薪资保密<!--{/if}--></span> <!--{if $l[WorkJobLevel]}-->- <span class="joblevel" v="{$l[WorkJobLevel]}">{$l['WorkJobLevelInfo']}</span><!--{/if}--> <!--{if $l[WorkComProperty]}-->- <span class="comProperty" v="{$l[WorkComProperty]}">{$l['WorkComPropertyInfo']}</span>，<!--{/if}--><span class="callingContainer" v="{$l[workIndustryId]}">{$l['joinIndustryName']}</span>，<span class="comSize" v="{$l[WorkComSize]}">{$l['WorkComSizeInfo']}</span></p>
											<div class="cont workContent" v="{$l[workContent]}" >
											   {$l[_workContent]}
											</div>
											<ul class="fanwei">
												<!--{if $l[WorkManageDempartment]}-->
												 <li>
													<strong>管辖范围：</strong>
													<span class="dempartment" v="{$l[WorkManageDempartment]}">{$l[WorkManageDempartment]}</span>
												</li>
												<!--{/if}-->
												<!--{if $l[WorkSubordinate]}-->
												<li>
													<strong>下属人数：</strong>
													<span class="workSubordinate" v="{$l[WorkSubordinate]}">{$l[WorkSubordinate]}人</span>
													<strong style="margin-left: 30px">汇报对象：</strong>
													<span class="workReportMan" v="{$l[WorkReportMan]}"><!--{if $l[WorkReportMan]}-->{$l[WorkReportMan]}<!--{else}-->未填写<!--{/if}--></span>
												</li>
												<!--{/if}-->
												<!--{if $l[WorkLeaveReason]}-->
												<li>
													<strong>离职原因：</strong>
													<span class="dimContent" v="{$l[WorkLeaveReason]}">{$l[WorkLeaveReason]}</span>
												</li>
												<!--{/if}-->
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!--{/loop}-->
						<!--{/if}-->
						<!--有数据 结束-->
					</div>

					<div class="edit-status-box create-item" style="display: none;zoom:1">
						<form action="/api/web/person.api?act=work_save"  method="post">
						<dl class="clearfix">
							<dt>公司名称<i class="red">*</i></dt>
							<dd class="formRows">
								<input type="text" class="c-text" name="txtWorkName" style="width:65%" />
								<span data-for="txtWorkName" class="prompt-msg msg"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>公司属性<i class="red">*</i></dt>
							<dd class="formRows">
								<div id="selWorkComProperty" class="dropv2 mgr10" style="width:160px;">
									<b class="jpFntWes dropIco">&#xf0d7;</b>
									<label>请选择</label>
									<ul></ul>
								</div>
								<div id="selWorkComSize" class="dropv2" style="width:125px;">
									<b class="jpFntWes dropIco">&#xf0d7;</b>
									<label>请选择</label>
									<ul></ul>
								</div>
								<p class="prompt-msg msg" data-for="workComs"></p>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>所属行业<i class="red">*</i></dt>
							<dd class="formMod JobIndDrop checkMod formRows" style="z-index:5">
								<div style="width: 250px; z-index: 9;" class="drop formText JobIndDrop zIndex" id="workCallingContainer"></div>
								<span id="workCallingContainer" data-for="hidCallingExpect"  class="prompt-msg msg"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>在职时间<i class="red">*</i></dt>
							<dd class="formRows" style="z-index:4">
								<div class="left birthday-min select-group-row">
									<div class="formText dateText zIndex" style="z-index:8;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" readonly name="inpWorkTimeStartYear" id="inpWorkTimeStartYear" style="width:70px;" class="c-text" value="入职年份" />
									</div>
									<span class="msgTxt">年</span>
									<div class="formText dateText zIndex" style="z-index:7;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" readonly name="inpWorkTimeStartMonth" id="inpWorkTimeStartMonth" style="width:50px;" class="c-text" value="月份" />
									</div>
									<span class="msgTxt" style="margin-right:0">月</span>
									<span class="tipTxt">-</span>
									<div class="formText dateText zIndex" style="z-index:6;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" readonly name="inpWorkTimeEndYear" id="inpWorkTimeEndYear" style="width:70px;" class="c-text" value="离职年份" />
									</div>
									<span class="msgTxt">年</span>
									<div class="formText dateText zIndex" style="z-index:5;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" readonly name="inpWorkTimeEndMonth" id="inpWorkTimeEndMonth" style="width:50px;" class="c-text" value="月份" />
									</div>
									<span class="msgTxt">月</span>
									<label id="chkWorkNow" class="icon-chck left" data-name="chkWorkNow" data-value="1"><em></em>至今</label>
									<input type="hidden" name="hidWorkTimeStart" />
									<input type="hidden" name="hidWorkTimeEnd" />
								</div>
								<span class="prompt-msg msg" data-for="workTime"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>职位名称<i class="red">*</i></dt>
							<dd class="formRows">
								<input type="text" name="txtWorkOffice" class="c-text" />
								<label style="display:none" id="chkIsCreator" data-name="chkIsCreator" class="icon-chck mgl10" data-value="1"><em></em>创始人</label>
								<span class="prompt-msg msg" data-for="txtWorkOffice"></span>
							</dd>
						</dl>
						<dl class="clearfix" style="display:none;">
							<dt>职位类别<i class="red">*</i></dt>
							<dd class="formRows select-group-row" style="z-index:3">
								<div id="selWorkJobType" class="dropv2 mgr10" style="width:125px; display:none;">
									<b class="jpFntWes dropIco">&#xf0d7;</b>
									<label>全职</label>
									<ul></ul>
								</div>
								<div class="formMod JobCayMod checkMod" style="float:left;margin-bottom: 0px; display:none;">
									<span style="width:300px; z-index:4;" class="drop formText JobCayDrop zIndex" id="workJobsortContainer"></span>
								</div>
								<span class="prompt-msg msg" data-for="hidJobSortExpect"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>岗位级别<i class="red">*</i></dt>
							<dd>
								<div class="formRows" style="zoom:1">
									<div id="selWorkJoblevel" class="dropv2" style="width:172px;">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<label>请选择</label>
										<ul></ul>
									</div>
									<span class="prompt-msg msg" data-for="hidWorkJobLevel"></span>
								</div>
								<div id="manageExpBox" class="manageExpBox" style="display:none;">
									<span class="gray9">添加管理经验</span>
									<dl class="clearfix">
										<dt>管辖范围</dt>
										<dd>
											<input type="text" name="txtWorkManageDempartment" class="c-text" />
											<p class="prompt-msg msg" data-for="txtWorkManageDempartment"></p>
										</dd>
									</dl>
								   <dl class="clearfix">
										<dt>下属人数</dt>
										<dd class="height">
											<input type="text" name="txtWorkSubordinate" class="c-text" /> &nbsp; &nbsp; &nbsp; &nbsp;汇报对象
											<input type="text" name="txtWorkReportMan" class="c-text" />
										</dd>
									</dl>
									<div class="bottom clearfix">
										<p class="prompt-msg msg left" style="width:185px;display:block" data-for="txtWorkSubordinate"></p>
										<p class="prompt-msg msg right" style="width:180px" data-for="txtWorkReportMan"></p>
									</div>
								</div>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>税前薪资<i class="red">*</i></dt>
							<dd class="formRows">
								<input name="txtWorkSalary" type="text" class="c-text left" style="width:150px;margin-right:10px" />
								<span class="left tipMsg">元/月</span>
								<label id="radWorkHideSalary" data-name="radWorkHideSalary" class="icon-chck left" data-value="1"><em></em>保密</label>
								<span class="prompt-msg msg" data-for="txtWorkSalary"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>工作内容</dt>
							<dd class="formRows">
								<textarea id="txtContent" class="left" name="txtContent" style="width:65%" watermark="请描述你在职期间的职责范围、工作内容和工作业绩"></textarea>
								<span class="prompt-msg msg" data-for="txtContent"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>离职原因</dt>
							<dd class="formRows">
								<input type="text" name="txtWorkLeaveReason" class="c-text" style="width:65%" />
								<span class="prompt-msg msg" data-for="txtWorkLeaveReason"></span>
							</dd>
						</dl>
						<dl class="clearfix sub-item">
							<dt>&nbsp;</dt>
							<dd>
								<button id="btnSubmit" type="button" class="saveBtn sub-btn">保存</button>
								<button id="btnSubmit" type="button" class="saveAddBtn sub-btn">保存并添加</button>
								<button id="btnSubmit" type="button" class="cancelBtn canl-btn">取消</button>
							</dd>
						</dl>
					</form>
					</div>

				</div>
				<!--/-->

				<!--教育培训经历-->
				<div id="eduInfor">
					<p class="resume-tit"><strong class="name">教育培训经历</strong><a href="javascript:" class="edit"><i class="i2"></i><span>添加</span></a><span class="no-data" >教育培训经历是简历中最重要的内容之一</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<div class="less-train" >
							<!--{if $resumeInfo[eduListInfo]}-->
								<!--{loop $resumeInfo[eduListInfo] $l}-->
									<div class="clearfix eduRows editPanel" data-eduid="{$l[eduid]}" data-type="0" data-duty="{$l[eduDuty]}">
										<span class="time" data-startTime="{$l[_eduDateStart]}" data-endTime="{$l[_eduDateEnd]}">{$l[eduStartDate]}<!--{if $l[eduEndDate]}--> 至 {$l[eduEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
										<div class="box-item">
											<p class="tit">
												<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a></span>
												<strong class="name labelDegree" v="{$l[eduBackGround]}">{$l['eduBackGroundInfo']}</strong><u>|</u>
												<span class="name labelSchool">{$l[eduName]}</span><u>|</u>
												<span class="name labelMajorDesc" v="{$l[eduSpecialty]}">{$l[eduSpecialty]}</span>
											</p>
											<p class="infor labelDetail">{$l[eduDetail]}</p>
										</div>
									</div>
								<!--{/loop}-->
							<!--{/if}-->
							<!--{if $resumeInfo[trainingListInfo]}-->
								<!--{loop $resumeInfo[trainingListInfo] $l}-->
								<div class="clearfix eduRows editPanel" data-trainid="{$l[trainingid]}" data-type="1">
									<span class="time" data-startTime="{$l[_trainingDateStart]}" data-endTime="{$l[_trainingDateEnd]}">{$l[trainingStartDate]}<!--{if $l[trainingEndDate]}--> 至 {$l[trainingEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
									<div class="box-item">
										<p class="tit">
											<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a></span>
											<strong class="name labelDegree">{$l[trainingSpecialty]}</strong><u>|</u>
											<span class="name labelSchool">{$l[trainingName]}</span><u>|</u>
											<span class="name labelMajorDesc" v="{$l[trainingBackGround]}">[证]{$l[trainingBackGround]}</span>
										</p>
										<p class="infor gray9 labelDetail">{$l[trainDetail]}</p>
									</div>
								</div>
								<!--{/loop}-->
							<!--{/if}-->

						</div>
						<!--/有数据 结束-->

					</div>
					<!--/-->
					<!--编辑状态	 教育培训经历-->
					<div class="edit-status-box create-item" style="display:none">
						<dl class="clearfix eduTab">
							<dt>教育类型<i class="red">*</i></dt>
							<dd class="pt5">
								<label class="icon-rad" data-name="radEduTrain" data-value="0" data-status="true"><em></em>学历教育</label>
								<label class="icon-rad mgl20" data-name="radEduTrain" data-value="1"><em></em>职业技能培训</label>
							</dd>
						</dl>
						<div class="eduTabType" style="zoom:1">
							<form action="/api/web/person.api?act=edu_save"  method="post">
								<input type="hidden" name="hidEduTypeID" value="edu" />
								<dl class="clearfix">
									<dt>学校名称<i class="red">*</i></dt>
									<dd class="formRows">
										<input type="text" name="txtEduName" class="c-text" style="width:65%" />
										<span class="prompt-msg msg" data-for="txtEduName"></span>
									</dd>
								</dl>
								<dl class="clearfix">
									<dt>就读时间<i class="red">*</i></dt>
									<dd class="formRows birthday-min" style="z-index:3">
										<div class="left select-group-row">

											<div style="z-index:974;" class="formText dateText zIndex">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" class="c-text" style="width:70px;" name="inpEduTimeStartYear" id="inpEduTimeStartYear" readonly value="入学年份" />
											</div>
											<span class="msgTxt">年</span>
											<div style="z-index:973;" class="formText dateText zIndex">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" class="c-text" style="margin-right:3px;width:50px;" name="inpEduTimeStartMonth" id="inpEduTimeStartMonth" readonly value="月份" />
											</div>
											<span class="msgTxt">月</span>
											<span class="tipTxt">-</span>
											<div style="z-index: 972;" class="formText dateText zIndex">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" class="c-text" style="width:70px;" name="inpEduTimeEndYear" id="inpEduTimeEndYear" readonly value="毕业年份"/>
											</div>
											<span class="msgTxt">年</span>
											<div style="z-index:971;" class="formText dateText zIndex">
												<b class="jpFntWes dropIco">&#xf0d7;</b>
												<input type="text" class="c-text" style="width:50px;" name="inpEduTimeEndMonth" id="inpEduTimeEndMonth" readonly value="月份" />
											</div>
											<span class="msgTxt">月</span>
											<label class="icon-chck left" data-name="chkEduIsInSchool" data-value="1"><em></em>在读</label>
											<input type="hidden" value="" name="hidEduTimeStart" />
											<input type="hidden" value="" name="hidEduTimeEnd" />
										</div>
										<span class="prompt-msg msg" data-for="eduTime"></span>
									</dd>
								</dl>
								<dl class="clearfix">
									<dt>学历<i class="red">*</i></dt>
									<dd class="formRows">
										<div id="selEduDegree" class="dropv2" style="width:110px;">
											<b class="jpFntWes dropIco">&#xf0d7;</b>
											<label>请选择</label>
											<ul></ul>
										</div>
										<span class="prompt-msg msg" data-for="selEduBackGround"></span>
									</dd>
								</dl>
								<dl id="eduMajorDescBox" class="clearfix">
									<dt>专业名称<i class="red">*</i></dt>
									<dd class="formRows">
										<input type="text" class="c-text" name="txtEduSpecialty" />
										<span class="prompt-msg msg" data-for="txtEduSpecialty"></span>
									</dd>
								</dl>
								<dl id="eduDetailBox" class="clearfix">
									<dt>专业课程</dt>
									<dd class="formRows">
										<textarea id="taEduDetail" class="left" name="taEduDetail" style="width:65%" watermark="你学习了哪些专业课程"></textarea>
										<span class="prompt-msg msg" data-for="taEduDetail"></span>
									</dd>
								</dl>
								<dl class="clearfix">
									<dt>校内职务</dt>
									<dd class="formRows">
										<input id="txtEduDuty" type="text" class="c-text" name="txtEduDuty" watermark="你在学校担任了哪些职务" style="width:65%" />
										<span class="prompt-msg msg" data-for="txtEduDuty"></span>
									</dd>
								</dl>
								<dl class="clearfix sub-item">
									<dt>&nbsp;</dt>
									<dd>
										<button class="saveBtn sub-btn" type="button">保存</button>
										<button class="saveAddBtn sub-btn" type="button">保存并添加</button>
										<button class="cancelBtn canl-btn" type="button">取消</button>
									</dd>
								</dl>
							</form>
						</div>
						<div class="eduTabType" style="zoom:1;display:none">
							<form action="/api/web/person.api?act=training_save"  method="post">
							<input type="hidden" name="hidEduTypeID" value="train" />
							<dl class="clearfix">
								<dt>培训机构<i class="red">*</i></dt>
								<dd class="formRows">
									<input type="text" class="c-text" name="txtTrainingName" style="width:65%" />
									<span class="prompt-msg msg" data-for="txtTrainingName"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>就读时间<i class="red">*</i></dt>
								<dd class="formRows" style="z-index:3">
									<div class="left birthday-min select-group-row">
										<div style="z-index: 974;" class="formText dateText zIndex">
											<b class="jpFntWes dropIco">&#xf0d7;</b>
											<input type="text" class="c-text" style="width:70px;" name="inpTrainTimeStartYear" id="inpTrainTimeStartYear" readonly value="入学年份" />
										</div>
										<span class="msgTxt">年</span>
										<span style="z-index: 973;" class="formText dateText zIndex">
											<b class="jpFntWes dropIco">&#xf0d7;</b>
											<input type="text" class="c-text" style="width:50px;margin-right:3px;" name="inpTrainTimeStartMonth" id="inpTrainTimeStartMonth" readonly value="月份" />
										</span>
										<span class="msgTxt">月</span>
										<span class="tipTxt mgr5">-</span>
										<div style="z-index: 972;" class="formText dateText zIndex">
											<b class="jpFntWes dropIco">&#xf0d7;</b>
											<input type="text" class="c-text" style="width:70px;" name="inpTrainTimeEndYear" id="inpTrainTimeEndYear" readonly value="毕业年份" />
										</div>
										<span class="msgTxt">年</span>
										<div style="z-index: 971;" class="formText dateText zIndex">
											<b class="jpFntWes dropIco">&#xf0d7;</b>
											<input type="text" class="c-text" style="width:50px;" name="inpTrainTimeEndMonth" id="inpTrainTimeEndMonth" readonly value="月份" />
										</div>
										<span class="msgTxt">月</span>
										<label class="icon-chck left" data-name="chkTrainIsInSchool" data-value="1"><em></em>在读</label>
										<input type="hidden" value="" name="hidTrainTimeStart">
										<input type="hidden" value="" name="hidTrainTimeEnd">
									</div>
									<span class="prompt-msg msg" data-for="trainTime"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>培训项目<i class="red">*</i></dt>
								<dd class="formRows">
									<input type="text" class="c-text" name="txtTrainingSpecialty" style="width:65%" />
									<span class="prompt-msg msg" data-for="txtTrainingSpecialty"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>获得证书</dt>
								<dd class="formRows" style="z-index:2">
									<div class="drop formText dipDrop zIndex dipIconText" id="trainCert" style="z-index:959;width:300px"><b class="jpFntWes">&#xf03a;</b>
										<input type="text" class="text" style="width:245px;" id="txtTrainingBackGround" name="txtTrainingBackGround" />
									</div>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>专业课程</dt>
								<dd class="formRows">
									<textarea id="taTrainDetail" class="left" name="taTrainDetail" style="width:65%" watermark="请描述你所学专业的主修课程"></textarea>
									<span class="prompt-msg msg" data-for="taTrainDetail"></span>
								</dd>
							</dl>
							<dl class="clearfix sub-item">
								<dt>&nbsp;</dt>
								<dd>
									<button class="saveBtn sub-btn" type="button">保存</button>
									<button class="saveAddBtn sub-btn" type="button">保存并添加</button>
									<button class="cancelBtn canl-btn" type="button">取消</button>
								</dd>
							</dl>
							</form>
						</div>
					</div>
				</div>
				<!--编辑状态 结束/-->

				<!--项目经验-->
				<div id="projectInfor">
					<p class="resume-tit"><strong class="name">项目经验</strong><a href="javascript:" class="edit"><i class="i2"></i><span>添加</span></a><span class="no-data"  >请描述您主导或参与过项目，以便HR更加了解您的能力</span></p>

					<div class="resume-item">
						<!--有数据 开始-->
						<div class="project-expr">
						<!--{if $resumeInfo[projectListInfo]}-->
						<!--{loop $resumeInfo[projectListInfo] $l}-->
								<div class="clearfix projectRows editPanel" data-projectid="{$l[projectid]}">
									<span class="time" data-startTime="{$l[_projectStartTime]}" data-endTime="{$l[_projectEndTime]}">{$l[projectStart]}<!--{if $l[projectEnd]}--> 至 {$l[projectEnd]}<!--{else}--> - 至今<!--{/if}--></span>
									<div class="box-item">
										<p class="tit">
											<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a></span>
											<strong class="name projectName">{$l[projectName]}</strong><u>|</u>
											<span class="name">担任：<span class="projectDuty">{$l[projectDuty]}</span></span>
										</p>
										<div class="infor">
											<!--{if $l[projectIntr]}--><p class="pfc labelProjectIntr" data-projectIntr="{$l[projectIntr]}" ><i class="jpFntWes">&#xf10d;</i><span>{$l[projectIntr]}</span><i class="jpFntWes">&#xf10e;</i></p><!--{/if}-->
											<div class="labelProjectExperience" data-projectExperience="{$l[projectExperience]}" >{$l[projectExperience]}</div>
										</div>
									</div>
								</div>
						<!--{/loop}-->
						<!--{/if}-->
						</div>
						<!--/有数据 结束-->

					</div>
					<!--/-->
					<!--编辑状态	 项目经验-->
					<div class="edit-status-box create-item" style="display:none">
						<form action="/api/web/person.api?act=project_save"  method="post">
						<dl class="clearfix">
							<dt>项目名称<i class="red">*</i></dt>
							<dd class="formRows">
								<input type="text" class="c-text" name="txtProjectName" style="width:65%" />
								<span class="prompt-msg msg" data-for="txtProjectName"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>项目时间<i class="red">*</i></dt>
							<dd class="formRows" style="z-index: 3">
								<div class="left birthday-min select-group-row">
									<div style="z-index: 974;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="width:70px;" id="inpProjectTimeStartYear" name="inpProjectTimeStartYear" readonly value="开始年份" />
									</div>
									<span class="msgTxt">年</span>
									<div style="z-index:973;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="margin-right:3px;width:50px;" id="inpProjectTimeStartMonth" name="inpProjectTimeStartMonth" readonly value="月份" />
									</div>
									<span class="msgTxt">月</span>
									<span class="tipTxt mgr5">-</span>
									<div style="z-index:972;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="width:70px;" id="inpProjectTimeEndYear" name="inpProjectTimeEndYear" readonly value="结束年份" />
									</div>
									<span class="msgTxt">年</span>
									<div style="z-index: 971;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="width:50px;" id="inpProjectTimeEndMonth" name="inpProjectTimeEndMonth" readonly value="月份" />
									</div>
									<span class="msgTxt">月</span>
									<label class="icon-chck left" data-name="chkProjectNow" data-value="1"><em></em>至今</label>
									<input type="hidden" value="" id="hidProjectTimeStart" name="hidProjectTimeStart" />
									<input type="hidden" value="" id="hidProjectTimeEnd" name="hidProjectTimeEnd" />
								</div>
								<span class="prompt-msg msg" data-for="projectTime"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>担任职务<i class="red">*</i></dt>
							<dd class="formRows">
								<input type="text" class="c-text" name="txtDuty" />
								<span class="prompt-msg msg" data-for="txtDuty"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>项目介绍</dt>
							<dd class="formRows">
								<input id="taProjectIntr" type="text" class="c-text" name="taProjectIntr" style="width:65%" watermark="请简短描述这是一个什么项目？"/>
								<span class="prompt-msg msg" data-for="taProjectIntr"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>项目经历</dt>
							<dd class="formRows">
								<textarea id="taProjectExperience" class="left" name="taProjectExperience" style="width:405px" watermark="你在项目中承担了哪些工作？创造了什么业绩？"></textarea>
								<span class="prompt-msg msg" data-for="taProjectExperience"></span>
							</dd>
						</dl>
						<dl class="clearfix sub-item">
							<dt>&nbsp;</dt>
							<dd>
								<button class="saveBtn sub-btn" type="button">保存</button>
								<button class="saveAddBtn sub-btn" type="button">保存并添加</button>
								<button class="cancelBtn canl-btn" type="button">取消</button>
							</dd>
						</dl>
						</form>
					</div>
				</div>
				<!--编辑状态结束-->

				<!--语言能力-->
				<div id="languageInfor">
					<p class="resume-tit"><strong class="name">语言能力</strong><a href="javascript:" class="edit"><!--{if $resumeInfo[languageList]}--><i></i><span>编辑</span><!--{else}--><i class="i2"></i><span>添加</span><!--{/if}--></a><span class="no-data" >更多的语言能力可以让你在职场中更有竞争力</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<ul class="clearfix tag-box" >
						<!--{if $resumeInfo[languageListInfo]}-->
						<!--{loop $resumeInfo[languageListInfo] $l}-->
							<li data-languageID="{$l[languageid]}">
								<strong class="language name" v="{$l[languageType]}">{$l['languageTypeInfo']}</strong>|<span class="cd"><strong class="level" v="{$l[langSkillLevel]}">{$l['langSkillLevelInfo']}</strong> <u>|
								</u><span class="cert">{$l[langCert]}</span></span>
							</li>
						<!--{/loop}-->
						<!--{/if}-->

						</ul>
						<!--/有数据 结束-->

					</div>
					<!--/-->
					<!--编辑状态	 语言能力-->
					<div class="edit-status-box yy-box" style="display: none">
						<form action="/api/web/person.api?act=language_save" method="post">
						<p class="gray9 mgb20">添加您掌握的语言能力；最多可以添加6门语言</p>

						<div class="languageGroup" style="zoom:1"></div>

						<p class="addyuyan"><a href="javascript:"><em class="jpFntWes">&#xf055;</em>增加一项</a></p>
						<dl class="clearfix sub-item">
							<dd>
								<button class="saveBtn sub-btn" type="button">保存</button>
								<button class="cancelBtn canl-btn" type="button">取消</button>
							</dd>
						</dl>
						</form>
					</div>
				</div>
				<!--编辑状态结束-->

				<!--技能专长-->
				<div id="skillInfor">
					<p class="resume-tit"><strong class="name">技能专长</strong><a href="javascript:" class="edit"><!--{if $resumeInfo[skillList]}--><i></i><span>编辑</span><!--{else}--><i class="i2"></i><span>添加</span><!--{/if}--></a><span class="no-data" >概括您所掌握的技能、专长和擅长的领域</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<ul class="clearfix tag-box">
							<!--{if $resumeInfo[skillListInfo]}-->
								<!--{loop $resumeInfo[skillListInfo] $l}-->
									<li data-skillid="{$l[skillid]}">
										<strong class="name">{$l[SkillName]}</strong>|<strong class="cd" v='{$l[SkillLevel]}'>{$l['SkillLevelInfo']}</strong>
									</li>
								<!--{/loop}-->
							<!--{/if}-->
						</ul>
						<!--/有数据 结束-->

					</div>
					<!--/-->
					<!--编辑状态	 技能专长-->
					<div class="edit-status-box yy-box" style="display:none">
						<p class="gray9 mgb20">添加您掌握的技能、工具或擅长的领域；最多可以添加10项技能专长</p>
						<form action="/api/web/person.api?act=skill_save" method="post">
						<div class="clearfix skill-group" style="zoom:1"></div>
						<p class="addyuyan"><a href="javascript:"><em class="jpFntWes">&#xf055;</em>增加一项</a></p>
						<dl class="clearfix sub-item">
							<dd>
								<button class="sub-btn saveBtn" type="button">保存</button>
								<button class="canl-btn cancelBtn" type="button">取消</button>
							</dd>
						</dl>
						</form>
					</div>
				</div>
				<!--编辑状态结束-->

				<!--证书-->
				<div id="cardInfor">
					<p class="resume-tit"><strong class="name">证书</strong><a href="javascript:" class="edit"><!--{if $resumeInfo[certificateList]}--><i></i><span>编辑</span><!--{else}--><i class="i2"></i><span>添加</span><!--{/if}--></a><span class="no-data" >HR可能会通过专业技能或职业职称证书来搜寻人才</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<ul class="clearfix tag-box">
							<!--{if $resumeInfo[certificateListInfo]}-->
								<!--{loop $resumeInfo[certificateListInfo] $l}-->
									 <li data-certificateID="{$l[certificateid]}">
										<strong class="name">{$l[certificateName]}</strong>|<span class="cd" v='{$l[CertGainTimeYear]}'>{$l[CertGainTimeYear]}年获得</span>
									</li>
								<!--{/loop}-->
							<!--{/if}-->

						</ul>
						<!--/有数据 结束-->
					</div>
					<!--/-->
					<!--编辑状态	 证书-->
					<div class="edit-status-box yy-box" style="display:none">
						<p class="alert mgb20">添加你获得的专业技能、职业证书或职称；最多可以添加10份证书<br /><span class="orange">提示：请不要填写毕业证、学位证或荣誉证书；请尽量采用简写，如“全国大学生英语考试六级”应填写为“大学英语六级”</span></p>
						<form action="/api/web/person.api?act=certificate_save" method="post">
						<div class="cardGroup" style="zoom:1"></div>
						<p class="addyuyan"><a href="javascript:"><em class="jpFntWes">&#xf055;</em>增加一项</a></p>
						<dl class="clearfix sub-item">
							<dd>
								<button class="saveBtn sub-btn" type="button">保存</button>
								<button class="cancelBtn canl-btn" type="button">取消</button>
							</dd>
						</dl>
						</form>
					</div>
					<!--编辑状态结束-->
				</div>

				<!--其他信息-->
				<div id="otherInfor">
					<p class="resume-tit"><strong class="name">其他信息</strong><a href="javascript:" class="edit"><i class="i2"></i><span>添加</span></a><span class="no-data" >填写获奖荣誉、兴趣爱好等</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<div class="other-box">
						<!--{if $resumeInfo[otherinfoListInfo]}-->
							<!--{loop $resumeInfo[otherinfoListInfo] $l}-->
								<div class="clearfix otherRows editPanel" data-appendid="{$l[otherinfoid]}">
									<strong class="time">{$l[AppendType]}</strong>
									<p class="infor">
										<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a>
										</span>
										<i class="yuan"></i>
										<span class="topicContent">{$l[TopicContent]}</span>
									</p>
								</div>
							<!--{/loop}-->
						<!--{/if}-->

						</div>
						<!--/有数据 结束-->
					</div>
					<!--/-->
					<!--编辑状态	 其他信息-->
					<div class="edit-status-box create-item" style="display: none">
						<form action="/api/web/person.api?act=otherinfo_save" method="post">
						<dl class="clearfix">
							<dt>主题<i class="red">*</i></dt>
							<dd class="formRows" style="zoom:1">
								<div id="selAppendContent" class="left dropv2 mgr10" style="width:125px;">
									<b class="jpFntWes dropIco">&#xf0d7;</b>
									<label>请选择</label>
									<ul></ul>
								</div>
								<div id="divTopicDesc" class="divTopicDesc">
									<input id="txtTopicDesc" class="c-text" name="txtTopicDesc" watermark="请输入主题名称" />
								</div>
								<span class="prompt-msg msg" data-for="topicDesc"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>内容描述<i class="red">*</i></dt>
							<dd class="formRows">
								<textarea class="left" name="taTopicContent" style="width:367px"></textarea>
								<span class="prompt-msg msg" data-for="taTopicContent"></span>
							</dd>
						</dl>
						<dl class="clearfix sub-item">
							<dt>&nbsp;</dt>
							<dd>
								<button type="button" class="saveBtn sub-btn">保存</button>
								<button type="button" class="saveAddBtn sub-btn">保存并添加</button>
								<button type="button" class="cancelBtn canl-btn">取消</button>
							</dd>
						</dl>
						</form>
					</div>
				</div>
			   <!--编辑状态结束-->

				<!--我的作品-->

				<div id="opusInfor">
					<p class="resume-tit"><strong class="name">我的作品</strong><a href="javascript:" class="edit"><i class="i1"></i><span>上传作品</span></a><span class="no-data" style="display: none;">上传您的作品，更直观展现您的专业能力</span></p>
					<div class="resume-item">
						<!--编辑状态	 我的作品-->
						<div class="edit-status-box create-item" style="display:none;zoom:1;">
							<form action="/api/web/person.api" method="post">
							<input type="hidden" name="act" value="addWorks">
							<dl class="clearfix">
								<dt>作品名称<i class="red">*</i></dt>
								<dd class="formRows">
									<input id="txtAchievementName" type="text" class="c-text" name="txtAchievementName" txttopicdesc="请输入作品名称" style="width:65%">
									<span class="prompt-msg msg" data-for="txtAchievementName"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>作品描述</dt>
								<dd class="formRows">
									<textarea class="left" name="taAchievementDescription" style="width:65%"></textarea>
									<span class="prompt-msg msg" data-for="taAchievementDescription"></span>
								</dd>
							</dl>
							<dl class="clearfix">
								<dt>上传作品<i class="red">*</i></dt>
								<dd class="pt5 clearfix">
									<span class="workLst" id="workLst">
									<ul id="showAchi"></ul>
									<span style="display:none" id="spnDelAtts"></span>
									<span style="display:none" id="spnAddAtts"></span>
									</span>
								  <div style="margin:0" class="tipTxt formFile">
										<div id="achiFile" class="uploadify" style="height: 27px; width: 85px;"></div>
								  </div>
								  <span style="width:580px;" class="tipTxt gray">*允许上传5个作品文件，单个文件最大支持2MB；</span>
								  <span style="width:580px;height: auto;" class="tipTxt gray">*支持jpg，bmp，gif，jpeg，png，doc，docx，ppt，pptx，xls，xlsx，pdf，txt等图片及文档格式文件</span>
								  <input name="hidModAchievementID" type="hidden" value="">
								</dd>
							</dl>
							<dl class="clearfix sub-item">
								<dt>&nbsp;</dt>
								<dd>
									<button type="button" class="saveBtn sub-btn">保存</button>
									<button type="button" class="saveAddBtn sub-btn">保存并添加</button>
									<button type="button" class="cancelBtn canl-btn">取消</button>
								</dd>
							</dl>
							</form>
						</div>
					<!--编辑状态结束-->
						<!--有数据 开始-->
						<ul class="my-case clearfix">
							<!--{if $resumeInfo['zuopinListInfo']}-->
								<!--{loop $resumeInfo['zuopinListInfo'] $l}-->
									<li data-achievementid="{$l['zuopinid']}" data-des="{$l['AchievementDescription']}" data-name="{$l['AchievementName']}" style="display: list-item;">
										<p class="img">
											<a href="javascript:" data-achievementid="{$l['zuopinid']}"><!--{if $l['picListArr'][0]['extension']}--><img class="defimg" src="http://cdn.597.com/img/v2/resumeM/{$l['picListArr'][0]['extension']}.jpg"><!--{else}--><img src="http://pic.{ROOT_DOMAIN}/works/{$l['picListArr'][0]['picPath']}"><!--{/if}--></a>
											<a href="javascript:" class="name">{$l['AchievementName']}</a>
										</p>
										<p class="operCase"><a class="edt" href="javascript:"><i></i>编辑</a><a class="del" href="javascript:"><i></i>删除</a></p>
										<div class="imgGroup" style="display:none">
										<!--{loop $l['picListArr'] $ll}-->
											<a class="fancybox-thumbs{$l['zuopinid']}" data-fancybox-group="thumb" style="display:none" extension="{$ll['picExtension']}" onclick="return false;" <!--{if $ll['extension']}-->href="http://cdn.597.com/img/v2/resumeM/{$ll['extension']}_big.jpg" real_heaf="http://pic.{ROOT_DOMAIN}/works/{$ll['picPath']}"<!--{else}-->href="http://pic.{ROOT_DOMAIN}/works/{$ll['picPath']}"<!--{/if}-->></a>
											<span style="display:none" v="{$ll['id']}">{$ll['picName']}</span>
											<script type="text/javascript">fancboxid.push({$l['zuopinid']});</script>
										<!--{/loop}-->
										</div>
									</li>
								<!--{/loop}-->
							<!--{/if}-->
						</ul>
						<!--/有数据 结束-->



					</div>
					<!--/-->
				</div>
				<!--实践经验-->
				<div id="practiceInfor">
					<p class="resume-tit"><strong class="name">实践经验</strong><a href="javascript:" class="edit"><i class="i2"></i><span>添加</span></a><span class="no-data" >请描述您主导或参与过实践，以便HR更加了解您的能力</span></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<div class="project-expr" >
							<!--{if $resumeInfo[practiceListInfo]}-->
							<!--{loop $resumeInfo[practiceListInfo] $l}-->
								<div class="clearfix practiceRows editPanel" data-practiceid="{$l['practiceid']}">
									<span class="time" data-startTime="{$l['PracticeTimeStart']}" data-endTime="{$l['PracticeTimeEnd']}">{$l['_PracticeTimeStart']}<!--{if $l[_PracticeTimeEnd]}--> 至 {$l['_PracticeTimeEnd']}<!--{else}--> - 至今<!--{/if}--></span>
									<div class="box-item">
										<p class="tit">
											<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a></span>
											<strong class="name practiceName">{$l['PracticeName']}</strong>
										</p>
										<div class="infor practiceDetail">{$l['PracticeDetail']}</div>
									</div>
								</div>
							<!--{/loop}-->
							<!--{/if}-->
						</div>
						<!--/有数据 结束-->
					</div>
					<!--/-->
					<!--编辑状态 实践经验-->
					<div class="edit-status-box create-item" style="display:none">
						<form action="/api/web/person.api?act=practice_save" method="post">
						<dl class="clearfix">
							<dt>实践名称<i class="red">*</i></dt>
							<dd class="formRows">
								<input type="text" class="c-text" name="txtPracticeName" style="width:65%" />
								<span class="prompt-msg msg" data-for="txtPracticeName"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>实践时间<i class="red">*</i></dt>
							<dd class="formRows" style="z-index:3">
								<div class="left birthday-min select-group-row">
									<div style="z-index: 974;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="width:70px;" id="inpPracticeTimeStartYear" name="inpPracticeTimeStartYear" readonly value="开始年份" />
									</div>
									<span class="msgTxt">年</span>
									<div style="z-index:973;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="margin-right:3px;width:50px;" id="inpPracticeTimeStartMonth" name="inpPracticeTimeStartMonth" readonly value="月份" />
									</div>
									<span class="msgTxt">月</span>
									<span class="tipTxt mgr5">-</span>
									<div style="z-index:972;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="width:70px;" id="inpPracticeTimeEndYear" name="inpPracticeTimeEndYear" readonly value="结束年份" />
									</div>
									<span class="msgTxt">年</span>
									<div style="z-index:971;" class="formText dateText zIndex">
										<b class="jpFntWes dropIco">&#xf0d7;</b>
										<input type="text" class="c-text" style="width:50px;" id="inpPracticeTimeEndMonth" name="inpPracticeTimeEndMonth" readonly value="月份" />
									</div>
									<span class="msgTxt">月</span>
									<label class="icon-chck left" data-name="chkPracticeNow" data-value="1"><em></em>至今</label>
									<input type="hidden" value="" id="hidPracticeTimeStart" name="hidPracticeTimeStart" />
									<input type="hidden" value="" id="hidPracticeTimeEnd" name="hidPracticeTimeEnd" />
								</div>
								<span class="prompt-msg msg" data-for="practiceTime"></span>
							</dd>
						</dl>
						<dl class="clearfix">
							<dt>实践经历</dt>
							<dd class="formRows">
								<textarea class="left" name="taPracticeDetail" style="width:65%"></textarea>
								<span class="prompt-msg msg" data-for="taPracticeDetail"></span>
							</dd>
						</dl>
						<dl class="clearfix sub-item">
							<dt>&nbsp;</dt>
							<dd>
								<button class="saveBtn sub-btn" type="button">保存</button>
								<button class="saveAddBtn sub-btn" type="button">保存并添加</button>
								<button class="cancelBtn canl-btn" type="button">取消</button>
							</dd>
						</dl>
						</form>
					</div>
				</div>
				<!--编辑状态结束-->
				<!--实践经验-->
			</div>
		</div>
		<!--主体结束-->
	</div>
	<div class="footer">©2016 597人才网 版权所有</div>
	<script src="http://cdn.597.com/tongji.js?v=20160317" language="JavaScript"></script>
	<div class="floatRT"><a href="/about/indexfeed.html"  target="_blank" class="serviceLink">我有问题要反馈</a><b></b></div>
	<script type="text/javascript">
		var scroll_flag = '';
		var styleUrl = "http://cdn.597.com/";
		var upload_cookie_userid='';
		var upload_cookie_nickname='';
		var upload_cookie_usertype='';
		var upload_cookie_userkey='';
		var is_create = '';
		var complete_url = '/person/';
		var manage_url = '/person/resume/';
		var checkPhone_url = '/api/web/user.api?act=mobileRepeat';
		var checkVali = "";
		var phoneValidatorStatus = parseInt('0');
		var sendmsg_url = '/api/web/user.api?act=mobileCheck';
		var complete_percent = {$resumeInfo['resumePrecent']};
		var resume_id = '{$resumeInfo['_rid']}';

		jpjs.use(function($){

			var rightSide = $('#resume_rightSide'),
				leftMain = $('.resume-left'),
				win = $(window),
				isRepat = false,
				leftMainTop = leftMain.offset().top + 7,
				left = leftMain.offset().left + leftMain.outerWidth(true),
				leftMainBottom;

			var scrollTop;
			win.on('scroll', function(){
				var scrollTop = win.scrollTop(),
					leftMainBottom = leftMainTop + leftMain.outerHeight(true) - 7;

				if(scrollTop + win.height() >= leftMainBottom){
					rightSide.stop(true, false).animate({'top': leftMain.outerHeight(true) - rightSide.outerHeight(true) - 7}, 150);
				} else if(scrollTop > leftMainTop){
					rightSide.stop(true, false).animate({'top': scrollTop - leftMain.offset().top}, 150);
				} else {
					rightSide.stop(true, false).animate({'top': 5}, 150);
				}
			});

			leftMain.on('mouseenter mouseleave', '.editPanel', function(e){
			 	var target = $(e.currentTarget).find('.oper');
			 	if(e.type === "mouseenter"){
			 		target.addClass('operHover');
			 	} else {
			 		target.removeClass('operHover');
			 	}
			});
		});

		/*基本资料*/
		var marriageItems = [{value:'',label:'请选择'}];
		var fertilityItems = [{value:'',label:'请选择'}];
		var mobile_phone = '{$resumeInfo[mobile]}';
		var checkEmailUrl = "/api/web/user.api?act=emailRepeat";
		var married = '';
				fertilityItems.push({value:'1',label:'未育'});
				fertilityItems.push({value:'2',label:'已育'});
				fertilityItems.push({value:'2',label:'不知道'});
					marriageItems.push({value:'1',label:'未婚'});
				marriageItems.push({value:'2',label:'已婚'});
			var politicalItems = [{value:'',label:'请选择'}];
				politicalItems.push({value:'1',label:'共产党员'});
				politicalItems.push({value:'2',label:'民主党派'});
				politicalItems.push({value:'5',label:'共青团员'});
				politicalItems.push({value:'3',label:'群众'});
				politicalItems.push({value:'4',label:'其他'});

		/*求职意向*/
		var jobtypeFulltime = '1';
		var job_level_practice = '01';
		var job_level_ordinary = '02';
		var joblevelItems = [{value:'',label:'请选择'}];
			joblevelItems.push({value:'1',label:'实习/见习'});
			joblevelItems.push({value:'2',label:'普通员工'});
			joblevelItems.push({value:'3',label:'高级/资深（非管理岗）'});
			joblevelItems.push({value:'4',label:'部门经理/主管'});
			joblevelItems.push({value:'5',label:'总监/副总裁'});
			joblevelItems.push({value:'6',label:'总裁/总经理'});

		var salaryItems = [{value:'',label:'请选择'}];
			salaryItems.push({value:'1000',label:'1000及以上'});
			salaryItems.push({value:'1500',label:'1500及以上'});
			salaryItems.push({value:'2000',label:'2000及以上'});
			salaryItems.push({value:'2500',label:'2500及以上'});
			salaryItems.push({value:'3000',label:'3000及以上'});
			salaryItems.push({value:'4000',label:'4000及以上'});
			salaryItems.push({value:'5000',label:'5000及以上'});
			salaryItems.push({value:'6000',label:'6000及以上'});
			salaryItems.push({value:'7000',label:'7000及以上'});
			salaryItems.push({value:'8000',label:'8000及以上'});
			salaryItems.push({value:'9000',label:'9000及以上'});
			salaryItems.push({value:'10000',label:'10000及以上'});
			salaryItems.push({value:'12000',label:'12000及以上'});
			salaryItems.push({value:'15000',label:'15000及以上'});
			salaryItems.push({value:'20000',label:'20000及以上'});
			salaryItems.push({value:'30000',label:'30000及以上'});


		/*工作经历*/
		var comSizeItems = [{value:'',label:'请选择'}];
				comSizeItems.push({value:'1',label:'50人以下'});
				comSizeItems.push({value:'2',label:'51-100人'});
				comSizeItems.push({value:'3',label:'101-500人'});
				comSizeItems.push({value:'4',label:'501-1000人'});
				comSizeItems.push({value:'5',label:'1000人以上'});

		var comPropertyItems = [{value:'',label:'请选择'}];
				comPropertyItems.push({value:'1',label:'国有企业'});
				comPropertyItems.push({value:'2',label:'外商独资、外企办事处'});
				comPropertyItems.push({value:'3',label:'中外合资(合营、合作)'});
				comPropertyItems.push({value:'4',label:'民营、私营公司'});
				comPropertyItems.push({value:'5',label:'上市公司'});
				comPropertyItems.push({value:'6',label:'股份制企业'});
				comPropertyItems.push({value:'7',label:'集体企业'});
				comPropertyItems.push({value:'8',label:'乡镇企业'});
				comPropertyItems.push({value:'9',label:'行政机关'});
				comPropertyItems.push({value:'10',label:'社会团体、非盈利机构'});
				comPropertyItems.push({value:'11',label:'事业单位'});
				comPropertyItems.push({value:'12',label:'跨国企业(集团)'});
				comPropertyItems.push({value:'13',label:'其他'});

			var jobTypeItems = [];
				jobTypeItems.push({value:'1',label:'全职'});
				jobTypeItems.push({value:'2',label:'兼职'});
				jobTypeItems.push({value:'3',label:'实习'});
			var jobLevelItems = [{value:'',label:'请选择'}];
				jobLevelItems.push({value:'1',label:'实习/见习'});
				jobLevelItems.push({value:'2',label:'普通员工'});
				jobLevelItems.push({value:'3',label:'高级/资深（非管理岗）'});
				jobLevelItems.push({value:'4',label:'部门经理/主管'});
				jobLevelItems.push({value:'5',label:'总监/副总裁'});
				jobLevelItems.push({value:'6',label:'总裁/总经理'});

		/*教育培训经历*/
		var degreeItems = [{value:'',label:'请选择'}];
				degreeItems.push({value:'10',label:'小学'});
				degreeItems.push({value:'20',label:'初中'});
				degreeItems.push({value:'30',label:'高中'});
				degreeItems.push({value:'40',label:'中技/中专'});
				degreeItems.push({value:'50',label:'专科'});
				degreeItems.push({value:'60',label:'本科'});
				degreeItems.push({value:'70',label:'硕士'});
				degreeItems.push({value:'80',label:'博士'});
				degreeItems.push({value:'90',label:'博士后'});

		/*其他信息*/
		var appendItems = [{value:'',label:'请选择'}];
				appendItems.push({value:'兴趣爱好',label:'兴趣爱好'});
				appendItems.push({value:'宗教信仰',label:'宗教信仰'});
				appendItems.push({value:'职业目标',label:'职业目标'});
				appendItems.push({value:'获奖荣誉',label:'获奖荣誉'});
				appendItems.push({value:'个性特长',label:'个性特长'});
			//appendItems.push({value:'自我评价',label:'自我评价'});
		appendItems.push({value:'自定义',label:'自定义'});

		/*求职状态*/
		var notconsider = "4";
		var applyStatusItems = [{value:'', label:'请选择'}];
			applyStatusItems.push({value:"1", label:"不在职，正在找工作"});
			applyStatusItems.push({value:"2", label:"在职，打算近期换工作"});
			applyStatusItems.push({value:"3", label:"在职，有更好的机会才考虑"});
			applyStatusItems.push({value:"4", label:"不考虑换工作"});

		/*到岗时间*/
		var accessionTimeItems = [{value:'', label:'请选择'}];
			accessionTimeItems.push({value:"1", label:"立即到岗"});
			accessionTimeItems.push({value:"2", label:"7天内到岗"});
			accessionTimeItems.push({value:"3", label:"15天内到岗"});
			accessionTimeItems.push({value:"4", label:"1月内到岗"});
			accessionTimeItems.push({value:"5", label:"2月内到岗"});
			accessionTimeItems.push({value:"6", label:"3月内到岗"});
			accessionTimeItems.push({value:"7", label:"半年内到岗"});


		jpjs.use('jpjob.fancybox-thumbs', function($){
			$('#reExamBtn01').click(function(){
			$('#rsExample01').slideToggle('slow');
			$('#rsExample02').hide();
			})
			$('#reExamBtn02').click(function(){
				$('#rsExample02').slideToggle('slow');
				$('#rsExample01').hide();
			})
			$.each(fancboxid, function(index, val){
				$('.fancybox-thumbs' + val).fancybox({
					closeBtn  : true,
					arrows  : true,
					title : function(current){
						if($(this).attr('extension')=='jpg' || $(this).attr('extension')=='bmp' || $(this).attr('extension')=='gif' || $(this).attr('extension')=='jpeg' || $(this).attr('extension')=='png'){
							return "<a href='"+$(this).attr('href')+"' target='_blank'>查看原图</a>";
						}
						else {
							return "<a href='"+$(this).attr('real_heaf')+"' target='_blank'>下载文件</a>";
						}
					},
					maxWidth:1000,
					maxHeight:600,
					helpers:  {
						title : {
							type : 'float'
						}
					}
				});
			});
			$('.my-case').on('click', '.img a', function(e){
				var item = $(e.currentTarget),
					attrid = item.attr('data-achievementid');
				$('.fancybox-thumbs' + attrid).eq(0).trigger('click');
			});
		});
		jpjs.loadJS('http://cdn.597.com/min/js/v2/nonModular/v2-resume.js?v=20151014010');
	</script>
	<style>
		/*相册大图预览*/
		.fancybox-wrap,
		.fancybox-skin,
		.fancybox-outer,
		.fancybox-inner,
		.fancybox-image,
		.fancybox-wrap iframe,
		.fancybox-wrap object,
		.fancybox-nav,
		.fancybox-nav span,
		.fancybox-tmp
		{padding: 0;margin: 0;border: 0;outline: none;vertical-align: top;}
		.fancybox-wrap {position: absolute;top: 0;left: 0;z-index: 8020;}
		.fancybox-skin {position: relative;background: #f9f9f9;color: #444;text-shadow: none;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}
		.fancybox-opened {z-index: 8030;}
		.fancybox-opened .fancybox-skin {-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);-moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);}
		.fancybox-outer, .fancybox-inner {position: relative;}
		.fancybox-inner {overflow: hidden;}
		.fancybox-type-iframe .fancybox-inner {-webkit-overflow-scrolling: touch;}
		.fancybox-error {color: #444;font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;margin: 0;padding: 15px;white-space: nowrap;}
		.fancybox-image, .fancybox-iframe {display: block;width: 100%;height: 100%;}
		.fancybox-image {max-width: 100%;max-height: 100%;}
		#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {background-image: url(http://cdn.597.com/img/comshow/fancybox_sprite.png);}
		#fancybox-loading {position: fixed;top: 50%;left: 50%;margin-top: -22px;margin-left: -22px;background-position: 0 -108px;opacity: 0.8;cursor: pointer;z-index: 8060;}
		#fancybox-loading div {width: 44px;height: 44px;background: url(http://cdn.597.com/img/comshow/fancybox_loading.gif) center center no-repeat;}
		.fancybox-close {position: absolute;top: -18px;right: -18px;width: 36px;height: 36px;cursor: pointer;z-index: 8040;}
		.fancybox-nav {position: absolute;top: 0;width: 40%;height: 100%;cursor: pointer;text-decoration: none;background: transparent url(http://cdn.597.com/img/comshow/blank.gif); /* helps IE */-webkit-tap-highlight-color: rgba(0,0,0,0);z-index: 8040;}
		.fancybox-prev {left: -100px;}
		.fancybox-next {right: -100px;}
		.fancybox-nav span {position: absolute;top: 50%;width: 36px;height: 34px;margin-top: -18px;cursor: pointer;z-index: 8040}
		.fancybox-prev span {left: 10px;background-position: 0 -36px;}
		.fancybox-next span {right: 10px;background-position: 0 -72px;}
		.fancybox-tmp {position: absolute;top: -99999px;left: -99999px;visibility: hidden;max-width: 99999px;max-height: 99999px;overflow: visible !important;}
		/* Overlay helper */
		.fancybox-lock {overflow: hidden !important;width: auto;}
		.fancybox-lock body {overflow: hidden !important;}
		.fancybox-lock-test {overflow-y: hidden !important;}
		.fancybox-overlay {position: absolute;top: 0;left: 0;overflow: hidden;display: none;z-index: 8010;background: url(http://cdn.597.com/img/comshow/fancybox_overlay.png);}
		.fancybox-overlay-fixed {position: fixed;bottom: 0;right: 0;}
		.fancybox-lock .fancybox-overlay {overflow: auto;overflow-y: scroll;}
		/* Title helper */
		.fancybox-title {visibility: hidden;font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;position: relative;text-shadow: none;z-index: 8050;}
		.fancybox-opened .fancybox-title {visibility: visible;}
		.fancybox-title-float-wrap {height:25px;}
		.fancybox-title-float-wrap .child {line-height:24px;height:24px;text-align:right}
		.fancybox-title-float-wrap .child a{color:#3d84b8;}
		.fancybox-title-float-wrap .child font{color:#333}
		.fancybox-title-outside-wrap {position: relative;margin-top: 10px;color: #fff;}
		.fancybox-title-inside-wrap {padding-top: 10px;}
		.fancybox-title-over-wrap {position: absolute;bottom: 0;left: 0;color: #fff;padding: 10px;background: #000;background: rgba(0, 0, 0, .8);}
		/*Retina graphics!*/
		@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
			   only screen and (min--moz-device-pixel-ratio: 1.5),
			   only screen and (min-device-pixel-ratio: 1.5){

			#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
				background-image: url(http://cdn.597.com/img/comshow/fancybox_sprite@2x.png);
				background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
			}

			#fancybox-loading div {
				background-image: url(http://cdn.597.com/img/comshow/fancybox_loading@2x.gif);
				background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/
			}
		}



		#fancybox-thumbs {position: fixed;left: 0;width: 100%;overflow: hidden;z-index: 8050;}
		#fancybox-thumbs.bottom {bottom: 2px;}

		#fancybox-thumbs.top {top: 2px;}
		#fancybox-thumbs ul {position: relative;list-style: none;margin: 0;padding: 0;}
		#fancybox-thumbs ul li {float: left;padding: 1px;opacity: 0.5;}
		#fancybox-thumbs ul li.active {opacity: 0.75;padding: 0;border: 1px solid #fff;}
		#fancybox-thumbs ul li:hover {opacity: 1;}
		#fancybox-thumbs ul li a {display: block;position: relative;overflow: hidden;border: 1px solid #222;background: #111;outline: none;}
		#fancybox-thumbs ul li img {display: block;position: relative;border: 0;padding: 0;max-width: none;}
	</style>
</body>
</html>