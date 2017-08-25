<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="email=no" />
	<meta name="format-detection" content="address=no;">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="default" />
	<title>597人才网</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" href='http://cdn.597.com/m/css/fastResume/mresume_v20150521191544.css' />
	<link rel="stylesheet" href='http://cdn.597.com/m/css/fastResume/m3_v0.css' />
	<script type="text/javascript" charset="utf-8" src='http://cdn.597.com/m/css/fastResume/jq.mobi.min_v0.js'></script>
	<script type="text/javascript" charset="utf-8" src='http://cdn.597.com/m/css/fastResume/m.basic_v0.js'></script>
	<script type="text/javascript" charset="utf-8" src='http://cdn.597.com/m/css/fastResume/newresume_v0.js'></script>
	<script type="text/javascript" charset="utf-8" src='http://cdn.597.com/m/css/fastResume/resumemicrocreate_v20150521185120.js'></script>
	<script type="text/javascript" src='http://cdn.597.com/m/css/fastResume/imgUpload_v20150513160704.js'></script>
	<script type="text/javascript" charset="utf-8" src='http://cdn.597.com/m/css/fastResume/exif_v20150513160704.js'></script>
	<script type="text/javascript" charset="utf-8" >
		var infoid = "22030699889034"; 
		var year = "1995";
		var isLogin = true;
		var fromUrl = "";
		var itype = "0";
		var error_num = 0;
		var timeout = 0;
		var tid = "13349";
		var areaid = "0"; 
		var isShowCode = 0;
		var url="";
		var clickCount = 0;
		var opObj,opStr;
		var iqas_mcresult = eval( 'function a(){var b="526576889972489321";var c="";for(var d=0;d<b.length;d+=2){var e=(d+1)%b.length;c+=(b.charCodeAt(d)^b.charCodeAt(e)>>3)};return c};a();');
		var provinceId = "";
		var provinceName = "";
		var cityName = "";
		var source_from="";
	</script>
</head>
<body class="bg_bd" style="text-align:left;">
	<input type="hidden" id="hidresume" name="hidresume" value="0"/>
	<input type="hidden" id="hidareaidVal" name="areaidVal" value=""/>
	<input type="hidden" id="hidareaid" name="hid" value="0"/>
	<input type="hidden" id="citys" name="citys" value="0">
	<input type="hidden" id="Pic" name="Pic">

	<div class="body_div">
		<!-- <div class="header">
			<a class="logo_a" href="http://m.58.com">
				<div class="logo"></div>
			</a>
		</div> -->
		<header class="pubtop">
			<a href="javascript:history.go(-1)" class="back jpFntWes" style="padding-left:20px;"></a><div class="cent"><p><b style="font-weight:bold;">快速注册</b></p></div>
		</header>
		<div class="r_tle">只要30秒，快速填写求职信息！</div>
		<div class="photos photosfix">
			<ul class="upload_list clearfix" id="upload_list">
				<li class="upload_action"> <i></i>
					<input type="file" accept="image/jpg,image/jpeg,image/png,image/gif" id="fileImage" name=""></ul>
				<span class="photo_mes">（选填）生活照更显真实哦</span>
			</div>
			<div id="rsm_create" class="wuly_post">
				<ul class="ulwrap">
					<li>
						<div class="rc_th">
							<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
						</div>
						<div class="rc_td">
							<input type="text" id="txtUserName" name="name" class="inp_txt " value="王先生" message="忘记填写姓名啦#亲，2-4个汉字哦" regex="^.+$#^[\u4E00-\u9FA5]{2,4}$" tip="请写真实姓名哦，2-4个汉字" ></div>
					</li>
					<li>
						<div class="rc_th">
							<span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span> <i>*</i>
						</div>
						<div class="rc_td">
							<div class="rc_go ">
								<label class="sexpan c_o">
									<input type="radio"  class="inp_rad ir_che" name="sexType" value="0" checked="checked">男</label>
								<label class="sexpan">
									<input type="radio"  class="inp_rad" name="sexType" value="1">女</label>
							</div>
						</div>
					</li>

					<li>
						<div class="rc_th">
							<span>出生年份</span>
						</div>
						<div class="rc_td">
							<div class="rc_go">
								<span class="fl must" message="请选择您的出生年份">1995</span>
								<select class="sel_txt2 sw3" id="year" message="请选择您的出生年份"></select>
								<i class="arrow"></i>
							</div>
						</div>
					</li>

					<li id="education">
						<div class="rc_th">
							<span>最高学历</span>
						</div>
						<div class="rc_td">
							<div class="rc_go">
								<span class="fl must" message="请选择最高学历"></span>
								<select class="sel_txt2 sw3" id="selEducation" message="请选择最高学历">
									<option value='-1' disabled="disabled">请选择最高学历</option>
									<option value='1'>高中以下</option>
									<option value='2'>高中</option>
									<option value='3'>中专/技校</option>
									<option value='4'>大专</option>
									<option value='5'>本科</option>
									<option value='6'>硕士</option>
									<option value='7'>博士</option>
									<option value='8'>MBA/EMBA</option>
								</select>
								<i class="arrow"></i>
							</div>
						</div>
					</li>

					<li style="position: relative;">
						<div class="rc_th">
							<span>工作经验</span>
						</div>
						<div class="rc_td">
							<div class="rc_go">
								<span class="fl must" message="请选择您已经工作的时间"></span>
								<select class="sel_txt2 sw3" id="selWorked" message="请选择您已经工作的时间">
									<option value='-1' disabled="disabled">请选择您已经工作的时间</option>
									<option value='0'>无经验</option>
									<option value='1'>1-3年</option>
									<option value='2'>3-5年</option>
									<option value='3'>5-10年</option>
									<option value='4'>10年以上</option>
									<option value='5'>应届生</option>
									<option value='6'>1年以下</option>
								</select>
								<i class="arrow"></i>
							</div>
						</div>
					</li>
					<li class="city_input">
						<div class="rc_th">
							<span>求职区域</span>
						</div>
						<div class="rc_td">
							<div class="rc_go">
								<span class="fl must" message="请选择期望的求职区域"></span>
								<i class="arrow"></i>
							</div>
						</div>
					</li>
					<li>
						<div class="rc_th">
							<span>手机号码</span>
						</div>
						<div class="rc_td">
							<input type="tel" id="phone" class="inp_txt" value="15880681032" message="忘记填写手机啦#手机号码不对啦。参考格式：138********" regex="^.+$#^(13[0-9]|15[0|1|2|5|3|6|7|8|9]|18[5|6|7|8|9|2|0|1|3|4]|17[0-9]|147)[0-9]{8}$" tip="请填写真实手机号码，以便企业与您联系哦">
							<i class="rc_del"></i>
						</div>
					</li>
				</ul>
				<ul class = "ulwrap">
					<li>
						<div class="rc_th">
							<span>介绍自己</span>
							<span class="rc_jszj">（选填）</span>
						</div>
						<div class="rc_td">
							<textarea class="tex_txt c_i textRt" id="lights" box="box" message="不要填写电话、QQ哦" regex="" tip="不要填写电话、QQ哦" placeholder="说说您的经历和个人亮点"></textarea>
						</div>
					</li>
				</ul>
				<!-- <ul class="ulwrap_b">
					<li id="codeshow" style="display: none">
						<div class="rc_th">
							<span>验证码</span>
						</div>
						<div class="rc_td">
							<input type="text" name="validatecode" id="validatecode" type="text" size="5" style='width:80px;' onblur="checkAuthInputforLogin(this)"/>
							<img style='cursor: pointer; height:32px; vertical-align:middle;' onclick="document.getElementById('PicValidateCode').src='/ajax/validatecode/?temp=123'+ (new Date().getTime().toString(36)); return false;" id="PicValidateCode" src="/ajax/validatecode/">
							<br/>
							<a onclick="document.getElementById('PicValidateCode').src='/ajax/validatecode/?temp=123'+ (new Date().getTime().toString(36)); return false;"
							href="javascript:void(0);">看不清？换一个</a>
							<span id="checkcode" name="checkcode" class="tips" style="display: none; color: Red">请正确填写验证码</span>
							<i class="rc_del"></i>
						</div>
					</li>
				</ul> -->
				<div class="oper_btn" style="margin:0 10px 0 10px;">
					<a href="javascript:void(0);" class="btn4 btnsF16 td_btn" onclick="BasicResumeInfo.submitForm('deliver',this);clickLog('from=wjl_toudi');return false;" >立即申请</a>
					<!-- <input class="ws_btn" type="button" value="继续完善" ontouchend="BasicResumeInfo.submitForm('save',this);clickLog('from=wjl_wanshan');return false;" > -->
				</div>
			</div>
		<div class="cityPopupWin popupWin hide">
			<div class="popupBg"></div>
			<div class="popupCon">
				<div class="popupHeader">
					<a href="javascript:;" id="finCity">完成</a>
				</div>
				<div class="selectArea">
					<div class="pro_mes"></div>
					<ul></ul>
				</div>
				<div class="popupMain">
					<div class="conLeft">
						<ul></ul>
					</div>
					<div class="conRight hide">
						<ul></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript"> 
		var _trackURL = "{'cate':'9225','area':'','pagetype':'jianli_post','page':'fillout_micro_login','GA_pageview':'/m/jianli_post/fillout_micro_login/'}";
	</script>
	<script src="http://cdn.597.com/m/css/fastResume/pcuc.js"  type="text/javascript"></script>
	<script src="http://cdn.597.com/m/css/fastResume/referrer_m.js" async></script>
</body>
</html>