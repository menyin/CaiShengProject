<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$domainInfo['region_name_short']}597人才网_个人注册</title>

	<!--[if lt IE 9]>
	<script src="http://cdn.597.com/js/html5.js?v=20140722"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/login.css?v=20140416" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/icons.css?v=20140312" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.email.tip.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_dropdownlist.js?v=20140320'></script>
	<!--下拉控件-->
	<style>
		.icon-chck em,.icon-chck-checked em,.icon-rad em,.icon-rad-checked em{display: inline-block;width:16px;height: 16px;background:url(http://cdn.597.com/www/img/v2/resume/icon.jpg) 0 -180px no-repeat;margin-right: 5px;vertical-align: -4px;#vertical-align: -1px;_vertical-align: 1px}
		.icon-rad em,.icon-rad-checked em{width:18px;height: 18px;background-position:-26px -180px}
		.icon-rad-checked em{background-position:-82px -180px}
		.icon-chck-checked em{background-position: -54px -180px;width:18px;height: 18px}
		.create-item dt{float: left;width:80px;color:#666;font-size:14px;text-align: right;height: 35px;line-height: 35px;position: relative}
		.create-item .red{margin-left: 5px;vertical-align: middle}
		.create-item dd{font-size:14px;position: relative;margin-left: 95px;padding-top: 7px}
		#imgGetImgSrc { position: relative; top: 8px;*top:0;}
		.qqIcos img {position: relative; top:7px; }
		.loginTip {padding:20px 30px 20px; border-bottom:1px dashed #ccc; margin:0 10px;}
		.loginTip .btnsF12 {margin:10px 10px 0 0;}
		.pReg .regR {height: 620px;}
	</style>
</head>
<body>
	<header>
		<div class="headerCon">
			<div class="logo">
				<a href="/"></a> <b>求职者注册</b>
			</div>
		</div>
	</header>
	<section class="content" id="content">
		<div class="reg pReg">

			<div class="regL">
				
				<div class="thrdLogin">
					
					<p>又注册？真讨厌！直接用以下账号登录吧：</p>
					<div class="link">
						<a href="http://api.597.com/qq/login.api?time={$time}" id="qqLoginTop" title="QQ登录">
							<img src="http://cdn.597.com/img/common/QQ170_32.png" />
						</a>
					</div>
					<div class="link">
				</div>
			</div>
		
			<div class="box">
				<p class="tit" style="display:none">想有个597的真实身份?</p>
				<div class="regRad">
					<input type="radio" id="radEmailRegister" checked name="radRegister" />
					<label for="radEmailRegister" >邮箱注册</label>
					<input type="radio" id="radMoilbRegister" name="radRegister"/>
					<label for="radMoilbRegister">手机注册</label>
				</div>
				<form id="frmMobilPhone" method="post" action="/api/web/person.api?act=register">
					<input type="hidden" name="origin"  value='0' />
					<input type="hidden" name="txtAppType" value="1" />
					<div class="regForm" id="divMobilPhone" style="display:none;">
						<div class="formMod">
							<span class="formText">
								<input type="text" style="width:280px;" id="txtMobilPhone" name="txtMobilPhone" class="text watermark" watermark="手机号码"/>
								<!--输入手机号码后,进行规则验证及后台唯一性验证,如通过,则以下所有表单开放禁用状态-->
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>

						<div class="formMod" style="margin-bottom:10px;">
							<span class="formText">
								<input type="text" style="width:121px;" id="txtMobileCode" name="txtMobileCode" class="text watermark" watermark="手机验证码" />
							</span>
							<span class="phoneBtn">
								<a href="javascript:void(0);" id="btnSendMsg" class="btn4 btnsF16 clickValidate">免费获取验证码</a>
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="formMod" >
							<p style="font-size:12px;margin-bottom:20px; " class="qqIcos">无法获取验证码请联系客服：0592-5899196 或在线qq：
								<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751835&site=qq&menu=yes">
									2355751835
								</a>
								<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751685&site=qq&menu=yes">
									2355751685
								</a>
							</p> 
						</div>
						<!--
						<div class="formMod">
							<span class="formText">
								<input type="text" style="width:280px;" id="txtUserName" name="txtUserName" class="text watermark" watermark="真实姓名（注册后可设置是否公开）" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						-->
						<div class="formMod">
							<span class="formText">
								<input type="password" style="width:280px;" id="txtPassword" name="txtPassword" autocomplete="off" watermark="创建密码" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<span style="clear:both;width:100%;margin:0;display:none;" class="tipTxt"  id="pwdTipTxt">
								密码强度： <em class="red">弱</em>
							</span>
							<div class="clear"></div>
						</div>

						<div class="formMod">
							<span class="formText">
								<input type="password" style="width:280px;" id="txtRepeatPassword" name="txtRepeatPassword" autocomplete="off" watermark="确认密码" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						<!--
						<div class="formMod">
							<span class="drop zindex" id="ddlMobilSource"></span>
							<span class="drop zindex" id="ddlMobilSourceSchool" style="display:none"></span>
							<div class="clear"></div>
						</div>
						-->
						<!--
						<dl class="clearfix create-item" class="radioItem">
							<dt>
								工作经验 <i class="red">*</i>
							</dt>
							<dd class="pt10">
								<label data-value="1" data-name="radWorkState" class="icon-rad icon-rad-checked" for="exp1" data-status="true"> <em></em>
									已参加工作
									<input type="radio" value="1" name="radWorkState" style="display: none;" checked="checked"></label>
								<label data-value="2" data-name="radWorkState" class="mgl10 icon-rad" for="exp2">
									<em></em>
									目前在读/应届生
									<input type="radio" value="2" name="radWorkState" style="display: none;"></label>
								<p class="prompt-msg msg" data-for="radWorkState"></p>
							</dd>
						</dl>
						<div class="formMod" id="boxOtherSource" style="display:none;">
							<span class="formText">
								<input type="text" style="width:280px;" id="txtMobilOtherSource" name="txtMobilOtherSource" watermark="说说从那里知道的吧！" autocomplete="off" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						-->	
						<div class="prot">
							点击注册即表示您同意
							<a href="javascript:void(0);" id="btnAgreementForPhone">《597个人会员注册协议》</a>
						</div>

						<div class="formBtn">
							<a href="javascript:void(0);" id ="btnMoilbPhoneRegister" class="btn1 btnsF16">立即注册</a>
						</div>
					</div>
				</form>
				<form id="frmEmail" method="post" action="/api/web/person.api?act=register">
					<input type="hidden" name="origin"  value='1' />
					<input type="hidden" name="txtAppType" value="1" />
					<div class="regForm" id="divEmail" >
						<div class="formMod">
							<span class="formText">
								<input type="text" style="width:280px;" id="txtEmail" name="txtEmail" watermark="常用邮箱" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						<!--
						<div class="formMod">
							<span class="formText">
								<input type="text" style="width:280px;" id="txtEmUserName" name="txtEmUserName" watermark="真实姓名（注册后可设置是否公开）" class="text watermark"  />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						-->
						<div class="formMod">
							<span class="formText">
								<input type="password" style="width:280px;" id="txtEmailPassword" name="txtEmailPassword" autocomplete="off"  watermark="创建密码" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<span style="clear:both;width:100%;margin:0;display:none;" class="tipTxt" id="pwdEmailTipTxt">
								密码强度：
								<em class="red">弱</em>
							</span>
							<div class="clear"></div>
						</div>

						<div class="formMod">
							<span class="formText">
								<input type="password" style="width:280px;" id="txtEmailPassword2" name="txtEmailPassword2" autocomplete="off"  watermark="确认密码" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="formMod">
							<span class="formText">
								<input type="text" style="width:100px;" id="txtUsernameAuthCode" name="txtUsernameAuthCode" autocomplete="off"  watermark="验证码" class="text watermark" />
								<img id="imgGetImgSrc" src="/api/web/authCode.api?key=personRegister"/>
								<a href="javascript:void(0)" id="btnGetImgSrc">看不清,换一张</a>
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="formMod">
							
							<!--
							<dl class="clearfix create-item" class="radioItem">
								<dt>
									工作经验 <i class="red">*</i>
								</dt>
								<dd class="pt10">
									<label data-value="1" data-name="radWorkState" class="icon-rad icon-rad-checked" for="exp1" data-status="true">
										<em></em>
										已参加工作
										<input type="radio" value="1" name="radWorkState" style="display: none;" checked="checked"></label>
									<label data-value="2" data-name="radWorkState" class="mgl10 icon-rad" for="exp2">
										<em></em>
										目前在读/应届生
										<input type="radio" value="2" name="radWorkState" style="display: none;"></label>
									<p class="prompt-msg msg" data-for="radWorkState"></p>
								</dd>
							</dl>
							-->

						</div>
						<!--
						<div class="formMod">
							<span id="ddlMailSource" class="drop zindex"></span>
							<span id="ddlMailSourceSchool" class="drop zindex" style="display:none"></span>
							<div class="clear"></div>
						</div>
						
						<div class="formMod" id="boxMailOtherSource" style="display:none;">
							<span class="formText">
								<input type="text" style="width:280px;" id="txtOtherSource" name="txtOtherSource" watermark="说说从那里知道的吧！" autocomplete="off" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay"></span>
							</span>
							<div class="clear"></div>
						</div>
						-->
						<div class="prot">
							点击注册即表示您同意
							<a href="javascript:void(0)" id="btnAgreementForEmail">《597个人会员注册协议》</a>
						</div>

						<div class="formBtn">
							<a href="javascript:void(0);" id="btnEmailRegister" class="btn1 btnsF16">立即注册</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="regR">
			<div class="loginTip">
				<h4><strong>已经有账号？请直接登录</strong></h4>
				<p>
					<a href="/person/login.html" class="btnsF12 btn1">马上登录</a>
					<a href="/person/findpassword.htm" class="btnsF12 btn3">忘记密码</a>
				</p>
			</div>
			<div class="txt">
				<h4>在597找到好工作！</h4>
				<dl>
					<dt>极具影响力</dt>
					<dd>8年造就本土人才招聘领导品牌</dd>
				</dl>
				<dl>
					<dt>选择更多</dt>
					<dd>每天50万个真实职位供您选择</dd>
				</dl>
				<dl>
					<dt>更关注您的成长</dt>
					<dd>与您的亲人、朋友、同学、同事共同成长</dd>
				</dl>
				<dl>
					<dt>温馨提示</dt>
					<dd>
						如果您有任何疑问或在注册过程中遇到困难，
						您都可以通过以下方式与我们联系：<br />
						电话：<span class="red">400-8108-597</span> <br />
						邮箱：<span class="green">xm@vip.597.com</span> <br />
						
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751835&site=qq&menu=yes">
							<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:2355751835:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
						</a>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751685&site=qq&menu=yes">
							<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:2355751685:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
						</a>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751690&site=qq&menu=yes">
							<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:2355751690:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
						</a>
					</dd>
					
				</dl>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</section>
<!--{template footer}-->


<div class="protTxt" id="agreementContent" style="display:none;">
	<p class="strong">597.com所提供的各项服务的所有权和经营权归厦门才盛人才服务有限公司所有。</p>
	<p>
	招聘单位、信息发布商（统称注册公司）和求职者，三方行为必须接受本协议条款的制约；若您不接受本协议的条款，请勿使用本网站，否则后果自负。该协议一经接受立即生效。
	</p>
	<dl>
	<dt>1.信息的发布</dt>
	<dd>
		<p>
			不得发布任何违反有关法律规定、社会道德的信息； 不得发布任何与本网站求职、招聘目的不相适的信息； 不得发布任何不完整、虚假的信息； 用户对所发布的信息的真实性、正确性及其产生的后果承担完全责任。
		</p>
	</dd>
	</dl>
	<dl>
	<dt>2.信息的使用</dt>
	<dd>
		<p>
			招聘单位仅可就本单位招聘目的使用求职者的简历信息，禁止使用本网站进行中介代招； 求职者仅可因应聘某职位，使用招聘单位发布的招聘信息； 本网站提供的其它信息，仅与其相应内容有关的目的而被使用；
		</p>
		<p>
			不得将任何本网站的信息用作任何商业目的。 任何用户不得通过打印、下载、拷贝或其他方式再造其他用户的可辨认的信息。未经特定用户同意的上述任何操作都被严格禁止。
		</p>
	</dd>
	</dl>
	<dl>
	<dt>3.信息的公开</dt>
	<dd>
		<p>在本网站所登录的任何信息，均有可能被任何本网站的访问者浏览，也可能被错误使用。本网站对此将不予承担任何责任。</p>
	</dd>
	</dl>
	<dl>
	<dt>4.信息的准确性</dt>
	<dd>
		<p>
			任何在本网站发布的信息，均必须符合合法、准确、及时、完整、真实的原则。但本网站将不能保证所有由第三方提供的信息，或本网站自行采集的信息完全准确。使用者了解，对这些信息的使用，需要经过进一步核实。本网站对访问者未经自行核实误用本网站信息造成的任何损失不予承担任何责任。
		</p>
	</dd>
	</dl>
	<dl>
	<dt>5.信息更改与删除</dt>
	<dd>
		<p>除了信息的发布者外，任何访问者不得更改或删除他人发布的任何信息。本网站有权根据其判断保留修改或删除任何不适信息之权利。</p>
	</dd>
	</dl>
	<dl>
	<dt>6.版权、商标权</dt>
	<dd>
		<p>
			本网站的图形、图像、文字、声音、相片及其程序，广告中的全部内容、电子邮件的全部内容等，均属597.com的版权，受商标法及相关知识产权法律保护。未经597.com书面许可，任何人不得下载、复制、再使用。在本网发布信息之商标，归其相应的商标所有权人，受商标法保护。
		</p>
	</dd>
	</dl>
	<dl>
	<dt>7、注册信息使用</dt>
	<dd>
		<p>
			注册会员所提供的个人资料将会被597.com统计、汇总，在我们的严格管理下，为597.com的广告商及合作者提供依据。 为了提供更完善的服务，597.com会不定期地通过注册会员留下的电子邮件同该会员保持联系。同时，我们会定期电子贺卡、资讯或电子杂志给注册会员。
		</p>
		<p>
			597.com承诺：在未经访问者授权同意的情况下，597.com不会将访问者的个人资料泄露给第三方。但以下情况除外。
		</p>
		<p class="indent">1) 根据执法单位之要求或为公共之目的向相关单位提供个人资料；</p>
		<p class="indent">2) 由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露；</p>
		<p class="indent">
			3) 由于黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等；
		</p>
		<p class="indent">4) 由于与597.com链接的其它网站所造成之个人资料泄露及由此而导致的任何法律争议和后果；</p>
		<p class="indent">5) 为免除访问者在生命、身体或财产方面之急迫危险。</p>
	</dd>
	</dl>
	<dl>
	<dt>8.自责</dt>
	<dd>
		<p>
			所有使用本网站的用户，对使用本网站信息和在本网站发布信息的被使用，承担完全责任。 用户必须同意独自承担由于登录597.com或通过597.com登录到其他站点而形成的全部风险。
		</p>
		<p>
			所有用户独立承担与他人交流信息及发送应聘/招聘意向所造成的后果。本公司不担保用户发送给另一方用户的资料的真实性、精确性与可靠性。用户对所接受的资料的信任纯属个人风险。
		</p>
		<p>
			597.com一经发现任何有违反本协议或侵犯法律的行为，有权马上解除该用户的会员资格及禁止其再次登录本网站。 597.com保留删除一切非法的、辱骂性的及不健康的资料的权力。
		</p>
	</dd>
	</dl>
	<dl>
	<dt>9.服务终止</dt>
	<dd>
		<p>本网站有权在预先通知或不予通知的情况下终止任何免费服务。</p>
	</dd>
	</dl>
	<dl>
	<dt>10.争议处理</dt>
	<dd>
		<p>本网站因正常的系统维护、系统升级，或者因网络拥塞而导致网站不能访问，本网站不承担任何责任。</p>
		<p>
			本协议服从中华人民共和国法律解释；用户与597.com双方都必须遵守中华人民共和国的司法管辖。如发生本协议相关条款与中华人民共和国法律相抵触时，则该条款将按相关法律重新解释，而其他条款则依旧保持对用户产生法律效力和影响。
		</p>
	</dd>
	</dl>
	<dl>
	<dt>11.免责条款</dt>
	<dd>
		<p>
			本网并无随时监视此网址，但保留对其实施实时监视的权利。对于他方输入的，不是本网发布的材料，本网概不负任何法律责任。应聘信息发布方必须对其存入简历中心的个人简历及材料的格式、内容的准确性和合法性独立承担一切法律责任。招聘信息的发布方对其在职位数据库公布的材料独立承担一切法律责任。 本网不保证对某一种职位描述会有一定数目的使用者来浏览，也不保证会有一位特定的使用者来浏览。对于其他网址链接在本网址的内容，本网概不负法律责任。
		</p>
	</dd>
	</dl>
</div>

<script>


//密码验证规则
$.validator.addMethod("inputEmailRegValiPwd", function(value, element) {
	var pwd = $('#txtEmailPassword').val();
	var userName = $('#txtUserID').val();
	var patten = new RegExp('^[0-9]+$');
	if (userName == pwd) {
		errorMsg = "密码和用户名不能相同<span class='tipArr'></span>";
		return false;
	}
	if (/^(\d)\1+$/.test(pwd)){ 
		errorMsg = "密码不能为同一个数字<span class='tipArr'></span>";
		return false;
	}
	var str = pwd.replace(/\d/g, function($0, pos) {
		return parseInt($0)-pos;
	});
	if (/^(\d)\1+$/.test(str)){
		 errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
		 return false;
	}
	str = pwd.replace(/\d/g, function($0, pos) {
		return parseInt($0)+pos;
	});
	if (/^(\d)\1+$/.test(str)){
		 errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
		 return false;
	}
	return true;
}, function() { return errorMsg; });

//密码验证规则
$.validator.addMethod("inputPhoneRegValiPwd", function(value, element) {
	var pwd = $('#txtPassword').val();
	var userName = $('#txtUserID').val();
	var patten = new RegExp('^[0-9]+$');
	if (userName == pwd) {
		errorMsg = "密码和用户名不能相同<span class='tipArr'></span>";
		return false;
	}
	if (/^(\d)\1+$/.test(pwd)){ 
		errorMsg = "密码不能为同一个数字<span class='tipArr'></span>";
		return false;
	}
	var str = pwd.replace(/\d/g, function($0, pos) {
		return parseInt($0)-pos;
	});
	if (/^(\d)\1+$/.test(str)){
		 errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
		 return false;
	}
	str = pwd.replace(/\d/g, function($0, pos) {
		return parseInt($0)+pos;
	});
	if (/^(\d)\1+$/.test(str)){
		 errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
		 return false;
	}
	return true;
}, function() { return errorMsg; });



var frmMobilValid=$("#frmMobilPhone").validate({
	rules:{
		txtMobilPhone:{
			required:true,
			//match:/^[1]\d{10}$/,
			match:/^1[3|4|5|7|8]\d{9}$/,
			remote:{
			  url: "/api/web/user.api", 
			  type: "get", 
			  dataType: "json",
			  data: { 
			  	  act:'mobileRepeat',
				  _txtMobile: function() { return $("#txtMobilPhone").val(); } 
			  },
			  dataFilter: function(json) {
				  var result = eval('(' + json + ')');
				  if (result && result.status == 1) {
					  return "true";
				  }
				  else {
					  return "false";
				  }
			  }
		   }
		},
		txtMobileCode:{
			required:true,
			rangelength:[4,4]
		},
		txtUserName:{
			required:true,
			rangelength:[2,6],
			match: /^[\u4e00-\u9fa5]+$/i
		},
		txtPassword:{required:true,rangelength: [6,16],inputPhoneRegValiPwd:true},
		txtRepeatPassword:{required:true,rangelength: [6,16],equalTo: "#txtPassword"}
		
		
		
	},
	messages:{
		txtMobilPhone:{
			required:'请输入手机号码<span class="tipArr"></span>',
			match:'请输入正确的手机号码<span class="tipArr"></span>',
			remote:'该手机号已被注册,尝试<a href="/person/login.html">登录</a><span class="tipArr"></span>'
		},
		txtMobileCode:{
			required:'请输入验证码<span class="tipArr"></span>',
			rangelength:'请输入正确的验证码<span class="tipArr"></span>'
		},
		txtUserName:{
			required:'请输入2-6位中文姓名<span class="tipArr"></span>',
			rangelength:'请输入2-6位中文姓名<span class="tipArr"></span>',
			match:'请输入2-6位中文姓名<span class="tipArr"></span>'
		},
		txtPassword:{
			required:'请输入密码<span class="tipArr"></span>',
			rangelength:'密码只能输入6-16位字符<span class="tipArr"></span>'
		},
		txtRepeatPassword:{
			 required: '请输入确认密码<span class="tipArr"></span>',
			 rangelength:'密码只能输入6-16位字符<span class="tipArr"></span>',
			 equalTo: '两次密码不一致<span class="tipArr"></span>'
		}
	},
	errorClasses:{
		txtMobilPhone:{
			required:'tipLayErr tipw120',
			match:'tipLayErr tipw150',
			remote:'tipLayErr tipw200'
		},
		txtMobileCode:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150'
		},
		txtUserName:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			match:'tipLayErr tipw120'
		},
		txtPassword:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			inputPhoneRegValiPwd:'tipLayErr tipw150'
		},
		txtRepeatPassword:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			equalTo: 'tipLayErr tipw150'
		}
	},
	tipClasses:{
		txtMobilPhone:'tipLayTxt tipw120',
		txtMobileCode:'tipLayTxt tipw120',
		txtUserName:'tipLayTxt tipw120',
		txtPassword:'tipLayTxt tipw120',
		txtRepeatPassword:'tipLayTxt tipw120'
	},
	tips:{
		txtMobilPhone:'请输入手机号码<span class="tipArr"></span>',	
		txtMobileCode:'请输入验证码<span class="tipArr"></span>',
		txtUserName:'请输入2-6位中文的姓名<span class="tipArr"></span>'	,
		txtPassword:'请输入密码<span class="tipArr"></span>',
		txtRepeatPassword:'请输入确认密码<span class="tipArr"></span>'
	},
	errorElement:'span',
	errorPlacement:function(error,element){
		element.closest('div.formMod').find('.tipPos .tipLay').append(error);
	},
	success:function(label){
		label.text(" ");
	}
});


var frmEmailValid=$("#frmEmail").validate({
	rules:{
		txtEmail:{
			required:true,
			email:true,
			remote:{
			  url: "/api/web/user.api", 
			  type: "post", 
			  dataType: "json",
			  data: {act:'emailRepeat',txtPageEmail: function() { return $("#txtEmail").val(); } },
			  dataFilter: function(json) {
				  var result = eval('(' + json + ')');
				  if (result && result.status == 1) {
					  return "true";
				  }
				  else {
					  return "false";
				  }
			  }
			}
		},
		txtUsernameAuthCode:{
			required:true,
			rangelength:[4,4]
		},
		txtEmUserName:{
			required:true,
			rangelength:[2,6],
			match: /^[\u4e00-\u9fa5]+$/i
		},
		txtEmailPassword:{required:true,rangelength: [6,16],inputEmailRegValiPwd:true},
		txtEmailPassword2:{required:true,rangelength: [6,16],equalTo: "#txtEmailPassword"}
		
		
	},
	messages:{
		txtEmail:{
			required:'请输入邮箱地址<span class="tipArr"></span>',
			email:'请输入正确的邮箱地址<span class="tipArr"></span>',
			remote:'该邮箱地址已被注册,尝试<a href="/person/login.html">登录</a><span class="tipArr"></span>'
		},
		txtUsernameAuthCode:{
			required:'请输入验证码<span class="tipArr"></span>',
			rangelength:'请输入正确的验证码<span class="tipArr"></span>'
		},
		txtEmUserName:{
			required:'请输入2-6位中文姓名<span class="tipArr"></span>',
			rangelength:'请输入2-6位中文姓名<span class="tipArr"></span>',
			match:'请输入2-6位中文姓名<span class="tipArr"></span>'
		},
		txtEmailPassword:{
			required:'请输入密码<span class="tipArr"></span>',
			rangelength:'密码只能输入6-16位字符<span class="tipArr"></span>'
		},
		txtEmailPassword2:{
			 required: '请输入确认密码<span class="tipArr"></span>',
			 rangelength:'密码只能输入6-16位字符<span class="tipArr"></span>',
			 equalTo: '两次密码不一致<span class="tipArr"></span>'
		}
		
	},
	errorClasses:{
		txtEmail:{
			required:'tipLayErr tipw120',
			email:'tipLayErr tipw150',
			remote:'tipLayErr tipw200'
		},
		txtUsernameAuthCode:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150'
		},
		txtEmUserName:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			match:'tipLayErr tipw120'
		},
		txtEmailPassword:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			inputEmailRegValiPwd:'tipLayErr tipw150'
		},
		txtEmailPassword2:{
			required:'tipLayErr tipw120',
			rangelength:'tipLayErr tipw150',
			equalTo: 'tipLayErr tipw150'
		}
	},
	tipClasses:{
		txtEmail:'tipLayTxt tipw120',
		txtUsernameAuthCode:'tipLayTxt tipw120',
		txtEmUserName:'tipLayTxt tipw120',
		txtEmailPassword:'tipLayTxt tipw120',
		txtEmailPassword2:'tipLayTxt tipw120'
	},
	tips:{
		txtEmail:'请输入邮箱地址<span class="tipArr"></span>',	
		txtUsernameAuthCode:'请输入验证码<span class="tipArr"></span>',
		txtEmUserName:'请输入2-6位中文姓名<span class="tipArr"></span>',
		txtEmailPassword:'请输入密码<span class="tipArr"></span>',
		txtEmailPassword2:'请输入确认密码<span class="tipArr"></span>'
	},
	errorElement:'span',
	errorPlacement:function(error,element){
		element.closest('div.formMod').find('.tipPos .tipLay').append(error);
	},
	success:function(label){
		label.text(" ");
	}
});

var register = {
	 initialize:function(){
	 	this.initControl();
	 	$('.watermark').watermark2();
	 },
	 initControl:function(){
		var fn = register;
		$('#divMobilPhone').on('click', '.clickValidate', function(){
			fn.sendMsg();
		});

		$('#btnMoilbPhoneRegister').click(function(){
			$(this).submitForm({ beforeSubmit: $.proxy(frmMobilValid.form, frmMobilValid),data:{operate:'phone'},success:fn.mobilsuccess,clearForm:false});
		});
		
		$('#txtPassword').focus(function(){
			intervalPwd = window.setInterval(fn.pwdDynamic,200);
		});

		$('#radMoilbRegister').click(function(){
			$('input:text,input:password').val('');
			$('#divEmail').hide();
			$('#divMobilPhone').show();
		});

		$('#radMoilbRegister').click();

		$('#radEmailRegister').click(function(){
			$('input:text,input:password').val('');			
			$('#divEmail').show();
			$('#divMobilPhone').hide();
			
		});

		$('#txtEmailPassword').focus(function(){
			intervalEmailPwd = window.setInterval(fn.pwdEmailDynamic,200);
		});

		$('#imgGetImgSrc,#btnGetImgSrc').click(function(){
			fn.changeauthcode(this);
		});

		$('#btnEmailRegister').click(function(){
			$(this).submitForm({ beforeSubmit: $.proxy(frmEmailValid.form, frmEmailValid),data:{operate:'email'},success:fn.mobilsuccess,clearForm:false});
		});

		$('input:text,input:password').focus(function(){
			$(this).closest('.formText').find('label').hide();			
		});
		
		$('input:text,input:password').blur(function(){		
			var objTxt = $(this).closest('.formText').find('label').html();			
			if($(this).val()==objTxt||$(this).val() == ''){
				$(this).closest('.formText').find('label').show()
			}
		});
		
		$('#btnAgreementForPhone,#btnAgreementForEmail').click(function() {
			$.showModal("#agreementContent", { contentType: 'selector', showMask: true, dw: "600" });
		});

		$('#txtUsernameAuthCode').keydown(function(event) {
			var e = $.event.fix(event);
			if (e.keyCode == 13) {
				$('#btnEmailRegister').click();
			}
		});

		$('#txtRepeatPassword').keydown(function(event){
			 var e = $.event.fix(event);
			 if (e.keyCode == 13) {
				 $('#btnMoilbPhoneRegister').click();
			 }
		});

		$('#txtEmail').emailtip(myemails);

		var sourceItems = [];
				sourceItems.push({id:'6',name:'搜索引擎'});
				sourceItems.push({id:'5',name:'朋友介绍'});
				sourceItems.push({id:'8',name:'邮件'});
				sourceItems.push({id:'1',name:'报纸'});
				sourceItems.push({id:'2',name:'轻轨/移动电视'});
				sourceItems.push({id:'4',name:'海报/宣传单'});
				sourceItems.push({id:'7',name:'其它'});
		
		var schoolsourceItems = [];
				schoolsourceItems.push({id:'10',name:'辅导员告知'});
				schoolsourceItems.push({id:'11',name:'双选会'});
				schoolsourceItems.push({id:'12',name:'同学|朋友介绍'});
				schoolsourceItems.push({id:'13',name:'就业网站知晓'});
				schoolsourceItems.push({id:'14',name:'搜索引擎'});
				schoolsourceItems.push({id:'15',name:'报纸|网站文章'});
				schoolsourceItems.push({id:'16',name:'微信|微博|论坛'});
				schoolsourceItems.push({id:'17',name:'网站宣传单'});
				schoolsourceItems.push({id:'18',name:'其它'});
		
		var rlabel = $("label[data-name='radWorkState']");
			rlabel.click(function() {
				$(this).siblings("label[data-name='radWorkState']").find("input[type='radio']").removeAttr("checked");
				$(this).siblings("label[data-name='radWorkState']").removeClass("icon-rad-checked");
				$(this).addClass("icon-rad-checked").find("input[type='radio']").attr("checked", "checked");
				if ($(this).find("input[type='radio']").val() == 1) {
					$("#ddlMobilSource").show();
					$("#ddlMailSource").show();
					$("#ddlMobilSourceSchool").hide();
					$("#ddlMailSourceSchool").hide();
				} else {
					$("#ddlMobilSource").hide();
					$("#ddlMailSource").hide();
					$("#ddlMobilSourceSchool").show();
					$("#ddlMailSourceSchool").show();
				}
			});
		
		$('#ddlMobilSource').droplist({defaultTitle:'您是从哪儿知道597人才网？',isCanWrite:false,inputWidth:285,style:'width:293px;',hddName:'ddlMobilSource',items:sourceItems,onSelect:function(i,name){
			$('#boxOtherSource').hide().find('input').val('');
			if(i==7){
				$('#boxOtherSource').show();
			}
		}});

		$('#ddlMailSource').droplist({defaultTitle:'您是从哪儿知道597人才网？',isCanWrite:false,inputWidth:285,style:'width:293px;',hddName:'ddlMailSource',items:sourceItems,onSelect:function(i,name){
			$('#boxMailOtherSource').hide().find('input').val('');
			if(i==7){
				$('#boxMailOtherSource').show();
			}
		}});
		$('#ddlMobilSourceSchool').droplist({defaultTitle:'您是从哪儿知道597人才网？',isCanWrite:false,inputWidth:285,style:'width:293px;',hddName:'ddlMobilSourceSchool',items:schoolsourceItems,onSelect:function(i,name){
			$('#boxOtherSource').hide().find('input').val('');
			if (i == 18) {
				$('#boxOtherSource').show();
			}
		}});
		$('#ddlMailSourceSchool').droplist({defaultTitle:'您是从哪儿知道597人才网？',isCanWrite:false,inputWidth:285,style:'width:293px;',hddName:'ddlMailSourceSchool',items:schoolsourceItems,onSelect:function(i,name){
			$('#boxMailOtherSource').hide().find('input').val('');
			if (i == 18) {
				$('#boxMailOtherSource').show();
			}
		}});

		$.setIndex('zindex');
		
		//$(':input').keyup(function(){
		//	alert($(this).parent().find('lable').html());
		//	if($(this).val()!==''){
		//	   $(this).prev('lable').hide();
		//	}
		//});
	 },
	 countdown:function(){
		var seconds=$('#btnSendMsg').find('i').html();
 		seconds = parseInt(seconds);
 		if(seconds>0){
 			seconds--;
 			$('#btnSendMsg').find('i').html(seconds);
 		}else{
 			window.clearInterval(interval);
 			$('#btnSendMsg').removeClass('btn3Unclick').html('免费获取验证码');
 			$("#btnSendMsg").addClass("clickValidate");
 			//$('#btnSendValidateCode2').find('i').html('180')
 			//$('#divBtn1').show();
 			//$('#divBtn2').hide();
 		}
	 },
	 sendMsg:function(){		 
		var fn = this;
		//alert(frmMobilValid.element($('#txtMobilPhone')));
		if (frmMobilValid.element($('#txtMobilPhone'))) {
			var mobilePhone=$('#txtMobilPhone').val();

			// $.getJSON('/register/getAuthCode/txtPhone-'+mobilePhone+'',function(json) {
			// 	$('#btnSendMsg').bind('click', function() {
	 	// 			register.sendMsg();
	 	// 		});

	 	// 		if (json.status == 0)
			// 		$.showModal("/register/validate/"+"txtMobile-"+json.mobile, {title:'请输入验证码'});
			// 	else
			// 		$.message(json.error, {title:'错误提示'});
			// 	return;

			// 	$('#btnSendMsg').html('<i>59</i>秒后可重新获取验证码').addClass('btn3Unclick');
			// 	interval = window.setInterval(fn.countdown,1000);
			// });

			$.showModal("/person/mobileCode.html?txtMobile="+mobilePhone, {title:'请输入验证码'});
		}
	},
	pwdStrong:function(pwd) {
 		//密码强度计算
 		var modes =0,pwd_len =pwd.length,i=0,codeTemp;
 		for(i;i<pwd_len;i++){
 			codeTemp = pwd.charCodeAt(i);
 			if(codeTemp>=48 && codeTemp<=75){
 				modes |=1;
 			}
 			else if(codeTemp>65&&codeTemp<=90){
 				modes |=2;
 			}
 			else if(codeTemp>97 && codeTemp<122){
 				modes |=4;
 			}
 			else{
 				modes |=8;
 			}
 		}
 		var modeNum=0;
 		for(i=0;i<4;i++){
 			if(modes & 1) modeNum++;
 			modes>>>=1;
 		}
 		return modeNum;
 	},
 	pwdDynamic:function(){
 		var password  = $('#txtPassword').val()
 			,strongBox = $('#pwdTipTxt')
 			,fn = this;

 		if(password == ''){
 			strongBox.hide();
 			return;
 		}

 		strongBox.show();

 		var modeNum = register.pwdStrong(password);
 		
 		if(modeNum <=1){
 			$(strongBox).find('em').removeClass().addClass('red').html('弱');
 		}
 		else if(modeNum == 2){
 			if(password.length<6){
 				$(strongBox).find('em').removeClass().addClass('red').html('弱');
 			}
 			else{
 				$(strongBox).find('em').removeClass().addClass('orange').html('中');
 			}
 		}
 		else if(modeNum >2){
 			if(password.length<6){
 				$(strongBox).find('em').removeClass().addClass('red').html('弱');
 			}
 			else if(password.length > 6 && password.length<10){
 				$(strongBox).find('em').removeClass().addClass('orange').html('中');
 			}
 			else{
 				$(strongBox).find('em').removeClass().addClass('green').html('强');
 			}
 		}
 	},
 	pwdEmailDynamic:function(){
 		var password  = $('#txtEmailPassword').val()
 			,strongBox = $('#pwdEmailTipTxt')
 			,fn = this;

 		if(password == ''){
 			strongBox.hide();
 			return;
 		}

 		strongBox.show();

 		var modeNum = register.pwdStrong(password);
 		
 		if(modeNum <=1){
 			$(strongBox).find('em').removeClass().addClass('red').html('弱');
 		}
 		else if(modeNum == 2){
 			if(password.length<6){
 				$(strongBox).find('em').removeClass().addClass('red').html('弱');
 			}
 			else{
 				$(strongBox).find('em').removeClass().addClass('orange').html('中');
 			}
 		}
 		else if(modeNum >2){
 			if(password.length<6){
 				$(strongBox).find('em').removeClass().addClass('red').html('弱');
 			}
 			else if(password.length > 6 && password.length<10){
 				$(strongBox).find('em').removeClass().addClass('orange').html('中');
 			}
 			else{
 				$(strongBox).find('em').removeClass().addClass('green').html('强');
 			}
 		}
 	},
 	mobilsuccess:function(result){
 		if(result && result.status<1){
 	 		$('#imgGetImgSrc').click();
			$.message(result.msg,{title:'操作失败！'});
			return;
		}
		
		if(result && result.status >0){
			$('#btnMoilbPhoneRegister').unbind();
			$('#btnEmailRegister').unbind();
			//$.showModal("#agreementContent", { contentType: 'selector', showMask: true, dw: "600" });
			$.showModal('/person/regSuccess.htm',{title:'注册成功',onclose:function(){
				window.location.href='/person/createresumeshow.html';
			}
			});
			//$.anchorMsg(result.success,{title: "操作成功", icon: "success",onclose:function(){				
			//	window.location.href = "/person/createbasicshow/resume_id-"+result.resumeID+"-is_reg-1.html";
			//}
			//});
			
		}
		return;
 	},
 	changeauthcode:function(obj){
		$(obj).closest('.formMod').find('img').attr('src','/api/web/authCode.api?key=personRegister&'+Math.random()+'')
	}
}
register.initialize();
	/*
		$('#qqLoginTop').click(function(){
			qqBox=$.showModal("http://api.597.com/qq/login.api", {title:'QQ登录',contentType : 'iframe',width:'800', height:'410'});
		});
	*/
</script></body>
</html>
