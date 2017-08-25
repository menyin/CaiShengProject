<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
		<title>{$domainInfo['region_name_short']}597人才网_企业注册</title>
		<!--[if lt IE9] -->
		<script src="http://cdn.{ROOT_DOMAIN}/js/html5.js?v=2017" charset="utf-8"></script>
		<!-- [endif] -->

		<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=20141009" />
		<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/login.css?v=20141023" />

		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=2017" charset="utf-8"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=2017" charset="utf-8"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=2017" charset="utf-8"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=201701" charset="utf-8"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=2017" charset="utf-8"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_area.js?v=2017" charset="utf-8"></script>
		<!--输入框获取焦点-->
</head>
<style type="text/css">
	.regL .addressMod .formText input.text {
		height: 26px;
		line-height: 26px;
		padding: 0 5px 0 10px;
	}
	
	.addressMod .drop {
		height: 36px;
		cursor: default;
		background: #fff;
	}

	.loginTip {padding:20px 30px 20px; border-bottom:1px dashed #ccc; margin:0 10px;}
	.loginTip .btnsF12 {margin:10px 10px 0 0;}

</style>
<body>
	<header>
		<div class="headerCon">
			<div class="logo">
				<a href="/"></a> <b>企业注册</b>
			</div>
		</div>
	</header>
	<section class="content" id="content">
		<form id="formReg" action="/api/web/company.api" method="post">
			<input type="hidden" name="act" value="register" />
			<input type="hidden" name="from" value="{$from}" />
			<input type="hidden" name="txtAppType" value="1" />
			<input type="hidden" name="source" value="10" />
			<div class="reg cReg">
				<div class="regL">

					<div class="box">
						<p class="tit">公司信息</p>
						<div class="regForm">
							<div class="formMod">
								<span class="formText">
									<label for="txtCompanyName" class="txtLabel">公司名称</label>
									<input type="text" id="txtCompanyName" name="txtCompanyName" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>
							<p class="tit" style="margin-top:-15px;">所在地</p>
							<div class="formMod addressMod clearfix" style="z-index:98;position: relative">
								<a id="area" name="area"></a>
								<div class="r">
									<span class="formText zIndex" id="curarea">
									</span>
									<span class="tipPos">
										<span class="tipLay "></span>
									</span>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formMod">
								<span class="formText">
									<label for="txtLinkPerson" class="txtLabel">联系人</label>
									<input type="text" id="txtLinkPerson" name="txtLinkPerson" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>

							<div class="formMod">
								<span class="formText">
									<label for="txtLinkTelphone" class="txtLabel">固定电话</label>
									<input type="text" id="txtLinkTelphone" name="txtLinkTelphone" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							<!--
								<span class="formText">
									<label for="txtLocation" class="txtLabel">区号</label>
									<input type="text" id="txtLocation" maxlength="4" name="txtLocation" style="width:50px;" class="text" />
								</span>
								<span class="tipTxt">&nbsp;</span>
								<span class="formText">
									<label for="txtLinkPhone" class="txtLabel">固定电话</label>
									<input type="text" id="txtLinkPhone" maxlength="11" name="txtLinkPhone" style="width:158px;" class="text" />
								</span>
								<span class="tipTxt">&nbsp;</span>
								<span class="formText" id="spanExtNo">
									<label for="txtCall" class="txtLabel">分机号</label>
									<input type="text" id="txtCall" maxlength="6" name="txtCall" style="width:50px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							-->
							</div>
							<div class="formMod">
								<span class="formText">
									<label for="txtEmail" class="txtLabel">邮箱</label>
									<input type="text" id="txtEmail" name="txtEmail" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<span class="formText">
									<label for="txtLinkCall" class="txtLabel">手机号码</label>
									<input type="text" id="txtLinkCall" name="txtLinkCall" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>

							<p class="tit">帐户信息（用于登录597人才网）</p>
							<div class="formMod">
								<span class="formText">
									<label for="txtUsername" class="txtLabel">用户名</label>
									<input type="text" id="txtUsername" name="txtUsername" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>

							<div class="formMod">
								<span class="formText">
									<label for="txtPwd" class="txtLabel">创建密码</label>
									<input type="password" id="txtPwd" name="txtPwd" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<span style="clear:both;width:100%;margin:0;display:none" id="pwdTipTxt" class="tipTxt">
									密码强度： <em class="red">弱</em>
								</span>
								<div class="clear"></div>
							</div>

							<div class="formMod">
								<span class="formText">
									<label for="txtPwdRepeat" class="txtLabel">确认密码</label>
									<input type="password" id="txtPwdRepeat" name="txtPwdRepeat" style="width:310px;" class="text" />
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<span class="formText">
									<label for="txtUsernameAuthCode" class="txtLabel">验证码</label>
									<input type="text" id="txtUsernameAuthCode" name="txtUsernameAuthCode" style="width:110px;" class="text" />
									<img id="imgGetImgSrc" src="/api/web/authCode.api?key=companyRegister" style="position: relative; top: 8px;*top:0;" />
									<a href="javascript:void(0)" id="btnGetImgSrc">看不清,换一张</a>
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
								<div class="clear"></div>
							</div>
							<div class="prot">
								点击注册即表示您同意
								<a href="javascript:void(0)" id="btnPact">《597企业会员注册协议》</a>
							</div>
							<div class="formBtn">
								<a href="javascript:void(0)" id="btnRegister" class="btn1 btnsF16">立即注册</a>
							</div>
						</div>
					</div>
				</div>
				<div class="regR">
					<div class="loginTip">
						<h4><strong>已经有账号？请直接登录</strong></h4>
						<p>
							<a href="/company/login.html" class="btnsF12 btn1">马上登录</a>
							<a href="tencent://message/?Menu=yes&amp;amp;uin=938066631&amp;amp;Service=58&amp;amp;SigT=A7F6FEA02730C98835722A8AC9DC8C615D84ACB35FB95C21FCD96C5A8E87670C48230BDEB91DEEF6E4424E9E87B7B2156956457B823296358B88BFE049EE79E506FE35C59DBEC19583765D22E339C27EAE729A29EE0E0ADEFC44E245BF986572A74455C0F0F8CEC5EB4FB812434F5CDCD83D0A7F705045B6&amp;amp;SigU=30E5D5233A443AB2004ADD98B7D4DE306411157356E49A3B71E80C90F5312CE7D795D7761D5AB663C1B7403C4876BBF696817F5FF01D1177C086510304A5C0F2F033F138FDFD5152" target="_blank" class="forget aGray2" class="btnsF12 btn3">忘记密码</a>
						</p>
					</div>
					<div class="txt">
						<h4>在597找到优秀人才！</h4>
						<dl>
							<dd>8年造就本土人才招聘领导品牌</dd>
						</dl>
						<dl>
							<dd>这里拥有超过2600万名人才，满足您的多元招聘需求</dd>
						</dl>
						<!--<dl class="regRScroll">
						<dt>此刻正在发生：</dt>
						<dd id="dlComScroll">
							<div class="txtScroll" id="ddComScroll">
								<p>
									<a href="#">余女士</a> <em>1秒前</em> <b>寻</b>
									<a href="#">仓库主管、</a>
									<a href="#">内勤类职位</a>
								</p>
								<p>
									<a href="#">刘先生</a>
									<em>5秒前</em>
									<b>寻</b>
									<a href="#">主办施工员，</a>
									<a href="#">小型项目生产经理类职位</a>
								</p>
								<p>
									<a href="#">余女士</a>
									<em>8秒前</em>
									<b>寻</b>
									<a href="#">仓库主管、</a>
									<a href="#">内勤类职位</a>
								</p>
								<p>
									<a href="#">刘先生</a>
									<em>12秒前</em>
									<b>寻</b>
									<a href="#">主办施工员，</a>
									<a href="#">小型项目生产经理类职位</a>
								</p>
								<p>
									<a href="#">余女士</a>
									<em>15秒前</em>
									<b>寻</b>
									<a href="#">仓库主管、</a>
									<a href="#">内勤类职位</a>
								</p>
								<p>
									<a href="#">刘先生</a>
									<em>17秒前</em>
									<b>寻</b>
									<a href="#">主办施工员，</a>
									<a href="#">小型项目生产经理类职位</a>
								</p>
								<p>
									<a href="#">余女士</a>
									<em>22秒前</em>
									<b>寻</b>
									<a href="#">仓库主管、</a>
									<a href="#">内勤类职位</a>
								</p>
								<p>
									<a href="#">刘先生</a>
									<em>25秒前</em>
									<b>寻</b>
									<a href="#">主办施工员，</a>
									<a href="#">小型项目生产经理类职位</a>
								</p>
								<p>
									<a href="#">余女士</a>
									<em>28秒前</em>
									<b>寻</b>
									<a href="#">仓库主管、</a>
									<a href="#">内勤类职位</a>
								</p>
							</div>
						</dd>
					</dl>
					-->
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</form>
	</section>
	<!--{template footer}-->
	<div class="protTxt" id="divPact" style="display:none;">
		<p class="strong">{ROOT_DOMAIN}所提供的各项服务的所有权和经营权归厦门才盛人才服务有限公司所有。</p>
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
					本网站的图形、图像、文字、声音、相片及其程序，广告中的全部内容、电子邮件的全部内容等，均属{ROOT_DOMAIN}的版权，受商标法及相关知识产权法律保护。未经{ROOT_DOMAIN}书面许可，任何人不得下载、复制、再使用。在本网发布信息之商标，归其相应的商标所有权人，受商标法保护。
				</p>
			</dd>
		</dl>
		<dl>
			<dt>7、注册信息使用</dt>
			<dd>
				<p>
					注册会员所提供的个人资料将会被{ROOT_DOMAIN}统计、汇总，在我们的严格管理下，为{ROOT_DOMAIN}的广告商及合作者提供依据。 为了提供更完善的服务，{ROOT_DOMAIN}会不定期地通过注册会员留下的电子邮件同该会员保持联系。同时，我们会定期电子贺卡、资讯或电子杂志给注册会员。
				</p>
				<p>
					{ROOT_DOMAIN}承诺：在未经访问者授权同意的情况下，{ROOT_DOMAIN}不会将访问者的个人资料泄露给第三方。但以下情况除外。
				</p>
				<p class="indent">1) 根据执法单位之要求或为公共之目的向相关单位提供个人资料；</p>
				<p class="indent">2) 由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露；</p>
				<p class="indent">
					3) 由于黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等；
				</p>
				<p class="indent">4) 由于与{ROOT_DOMAIN}链接的其它网站所造成之个人资料泄露及由此而导致的任何法律争议和后果；律争议和后果；</p>
				<p class="indent">5) 为免除访问者在生命、身体或财产方面之急迫危险。</p>
			</dd>
		</dl>
		<dl>
			<dt>8.自责</dt>
			<dd>
				<p>
					所有使用本网站的用户，对使用本网站信息和在本网站发布信息的被使用，承担完全责任。 用户必须同意独自承担由于登录{ROOT_DOMAIN}或通过{ROOT_DOMAIN}登录到其他站点而形成的全部风险。
				</p>
				<p>
					所有用户独立承担与他人交流信息及发送应聘/招聘意向所造成的后果。本公司不担保用户发送给另一方用户的资料的真实性、精确性与可靠性。用户对所接受的资料的信任纯属个人风险。
				</p>
				<p>
					{ROOT_DOMAIN}一经发现任何有违反本协议或侵犯法律的行为，有权马上解除该用户的会员资格及禁止其再次登录本网站。 {ROOT_DOMAIN}保留删除一切非法的、辱骂性的及不健康的资料的权力。
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
					本协议服从中华人民共和国法律解释；用户与{ROOT_DOMAIN}双方都必须遵守中华人民共和国的司法管辖。如发生本协议相关条款与中华人民共和国法律相抵触时，则该条款将按相关法律重新解释，而其他条款则依旧保持对用户产生法律效力和影响。
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
	<script type="text/javascript">
		$(document).ready(function() {
			// $.focusblur('input.text');	
			$('input.text').each(function(){
				$(this).on({
					keyup : function(){
						if($(this).val().length > 0){
							$(this).prev('label').hide();
						} else {
							$(this).prev('label').show();
						};
					},
					blur : function(){
						if($(this).val().length == 0){
							$(this).prev('label').show();
						}
					}
				});
			});
		});

		//用户名是否被注册
		$.validator.addMethod('IsRegistered', function(value, element) {
			var result = false;
			$.ajax({
				url: '/api/web/user.api',
				cache: false,
				async: false,
				type: 'post',
				dataType: 'json',
				data: {
					act:'usernameRepeat',
					txtUsername: $("#txtUsername").val()
				},
				success: function(json) {
					if (json && json.status>0) {
						result = true;
					} else {
						result = false;
					}
				}
			});
			return result;
		}, '该用户名已注册，请更换');

		//密码验证规则
		$.validator.addMethod("inputRegValiPwd", function(value, element) {
			var pwd = $('#txtPwd').val();
			var userName = $('#txtUsername').val();
			var patten = new RegExp('^[0-9]+$');
			if (userName == pwd) {
				errorMsg = "密码和用户名不能相同<span class='tipArr'></span>";
				return false;
			}
			if (/^(\d)\1+$/.test(pwd)) {
				errorMsg = "密码不能为同一个数字<span class='tipArr'></span>";
				return false;
			}
			var str = pwd.replace(/\d/g, function($0, pos) {
				return parseInt($0) - pos;
			});
			if (/^(\d)\1+$/.test(str)) {
				errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
				return false;
			}
			str = pwd.replace(/\d/g, function($0, pos) {
				return parseInt($0) + pos;
			});
			if (/^(\d)\1+$/.test(str)) {
				errorMsg = "密码不能为连续数字<span class='tipArr'></span>";
				return false;
			}
			return true;
		}, function() {
			return errorMsg;
		});


		//区号验证规则
		$.validator.addMethod("inputRegValiZone", function(value, element, param) {
			if (this.optional(element))
				return "dependency-mismatch";
			var reg = param;
			if (typeof param == 'string') {
				reg = new RegExp(param);
			}
			return reg.test(value);
		}, '区号格式不正确');

		//手机号码验证规则
		$.validator.addMethod("inputRegValiMobile", function(value, element, param) {
			if (this.optional(element))
				return "dependency-mismatch";
			var reg = param;
			if (typeof param == 'string') {
				reg = new RegExp(param);
			}
			return reg.test(value);
		}, '手机号码格式不正确');


		var speed;
		var lis;
		var divtop;
		var height;
		var nav_today;
		var timer;

		var register = {
			formRegValid: null,
			intervalPwd: null,
			init: function() {
				register.formRegValid = $('#formReg').validate({
					rules: {
						txtEmail:{
							required:true,
							email:true
						},
						txtCompanyName: {
							required: true,
							rangelength: [1, 200]
						},
						hddArea: {
							required: true
						},
						txtLinkPerson: {
							required: true,
							rangelength: [1, 60]
						},
						/*
						txtLocation: {
							inputRegValiZone: '^[0-9]{3}[0-9]?$'
						},
						txtLinkPhone: {
							required: true,
							tel: true
						},
						txtCall: {
							number: true
						},
						*/
						txtLinkTelphone:{
							//required:true,
							rangelength: [6, 32]
						},
						txtLinkCall: {
							inputRegValiMobile: '^[1][0-9]{10}$'
						},
						txtUsername: {
							required: true,
							rangelength: [3, 32],
							match: '^[A-Za-z0-9]*$',
							IsRegistered: true
						},
						txtPwd: {
							required: true,
							rangelength: [6, 16],
							inputRegValiPwd: true
						},
						txtPwdRepeat: {
							required: true,
							rangelength: [6, 16],
							equalTo: "#txtPwd"
						},
						txtUsernameAuthCode:{
							required:true,
							rangelength:[4,4]
						}

					},
					messages: {
						txtEmail:{
							required:'请输入邮箱地址 (用于接收招聘简历)<span class="tipArr"></span>',
							email:'请输入正确的邮箱地址<span class="tipArr"></span>'
						},
						txtCompanyName: {
							required: '请输入贵公司营业热照上的公司名称<span class="tipArr"></span>',
							rangelength: '1-200个字组成<span class="tipArr"></span>'
						},
						hddArea: {
							required: '请选择公司所在地<span class="tipArr"></span>'
						},
						txtLinkPerson: {
							required: '请填写联系人<span class="tipArr"></span>',
							rangelength: '1-60个字组成<span class="tipArr"></span>'
						},
						/*
						txtLocation: {
							inputRegValiZone: '请填写正确的区号<span class="tipArr"></span>'
						},
						txtLinkPhone: {
							required: '请填写联系电话<span class="tipArr"></span>',
							tel: '请填写正确的电话号码<span class="tipArr"></span>'
						},
						txtCall: {
							number: '分机号码为数字<span class="tipArr"></span>'
						},
						*/
						txtLinkTelphone:{
							//required:'请填写固定电话<span class="tipArr"></span>',
							rangelength: '固定电话6-32位字符<span class="tipArr"></span>'
						},
						txtLinkCall: {
							inputRegValiMobile: '请填写正确的手机号码<span class="tipArr"></span>'
						},
						txtUsername: {
							required: '请填写用户名<span class="tipArr"></span>',
							rangelength: '用户名3-32位字符<span class="tipArr"></span>',
							match: '用户名为字母、数字、组成<span class="tipArr"></span>',
							IsRegistered: '该用户名已被注册，请更换<span class="tipArr"></span>'
						},
						txtPwd: {
							required: '请填写密码<span class="tipArr"></span>',
							rangelength: '密码6-16位字符<span class="tipArr"></span>'
						},
						txtPwdRepeat: {
							required: '请确认密码<span class="tipArr"></span>',
							rangelength: '密码6-16位字符<span class="tipArr"></span>',
							equalTo: '两次密码不一致<span class="tipArr"></span>'
						},
						txtUsernameAuthCode:{
							required: '请输入验证码<span class="tipArr"></span>',
							rangelength:'请输入正确验证码<span class="tipArr"></span>'
						}
					},
					errorClasses: {
						txtEmail:{
							required:'tipLayErr tipw200',
							email:'tipLayErr tipw150'
						},						
						txtCompanyName: {
							required: 'tipLayErr tipw200',
							rangelength: 'tipLayErr tipw150'
						},
						hddArea: {
							required: 'tipLayErr tipw200'
						},
						txtLinkPerson: {
							required: 'tipLayErr tipw150',
							rangelength: 'tipLayErr tipw150'
						},
						/*
						txtLocation: {
							inputRegValiZone: 'tipLayErr tipw150'
						},
						txtLinkPhone: {
							required: 'tipLayErr tipw180',
							tel: 'tipLayErr tipw180'
						},
						txtCall: {
							number: 'tipLayErr tipw150'
						},
						*/
						txtLinkTelphone:{
							//required:'tipLayErr tipw150',
							rangelength: 'tipLayErr tipw150'
						},
						txtLinkCall: {
							inputRegValiMobile: 'tipLayErr tipw180'
						},
						txtUsername: {
							required: 'tipLayErr tipw150',
							rangelength: 'tipLayErr tipw180',
							match: 'tipLayErr tipw180',
							IsRegistered: 'tipLayErr tipw180'
						},
						txtPwd: {
							required: 'tipLayErr tipw150',
							rangelength: 'tipLayErr tipw150',
							match: 'tipLayErr tipw150',
							inputRegValiPwd: 'tipLayErr tipw150'
						},
						txtPwdRepeat: {
							required: 'tipLayErr tipw150',
							rangelength: 'tipLayErr tipw150',
							equalTo: 'tipLayErr tipw150'
						},
						txtUsernameAuthCode:{
							required:'tipLayErr tipw150',
							rangelength: 'tipLayErr tipw150'
						}
					},
					tips: {
						txtEmail:'请输入邮箱地址 (用于接收招聘简历)<span class="tipArr"></span>',
						txtCompanyName: '请与贵公司营业执照注册名保持一致<span class="tipArr"></span>',
						txtLinkPerson: '1-60为汉字组成<span class="tipArr"></span>',
						txtUsername: '3-32位字符字母、数字、组成<span class="tipArr"></span>',
						txtLinkCall: '手机号码11位数字组成<span class="tipArr"></span>',
						txtPwd: '密码6-16位字符组成<span class="tipArr"></span>',
						txtPwdRepeat: '密码6-16位字符组成<span class="tipArr"></span>',
						txtUsernameAuthCode:'请输入验证码'
					},
					tipClasses: {
						txtEmail: 'tipLayTxt tipw200',
						txtCompanyName: 'tipLayTxt tipw200',
						txtLinkPerson: 'tipLayTxt tipw120',
						txtUsername: 'tipLayTxt tipw200',
						txtLinkCall: 'tipLayTxt tipw180',
						txtPwd: 'tipLayTxt tipw150',
						txtPwdRepeat: 'tipLayTxt tipw150',
						txtUsernameAuthCode:'tipLayTxt tipw150'
					},
					groups: {
						//phoneNum: 'txtLinkPhone txtCall txtLocation'
						//phone:'txtLinkTelphone txtLinkCall'
					},
					onkeyup: false,
					errorElement: 'span',
					errorPlacement: function(error, element) {
						if (element.attr('name') == 'txtCall' || element.attr('name') == 'txtLinkPhone' || element.attr('name') == 'txtLocation') {
							element.parent().nextAll().find('.tipLay').append(error);
						} else {
							element.parent().next().find('.tipLay').append(error);
						}
					},
					success: function(label) {
						label.text(" ");
					}
				});
				$('#curarea').singleArea({hddName:'hddArea',showLevel:3,controlClass:'zindex',onSelect:function(a){
					$(".regL").find(".addressMod").find('.r').find('.tipPos').find('.tipLay').html('');
					//$(".regL .addressMod .formText .tipPos .tipLay").html('');
				},noSelect:function(){
					form.checkElement($('#hddArea'));
				}});
				$('#curarea .text').width(86);
				//验证码
				$('#imgGetImgSrc,#btnGetImgSrc').click(function(){
					register.changeauthcode(this);
				});
				//协议
				$('#btnPact').click(function() {
					$.showModal('#divPact', {
						contentType: 'selector',
						showMask: true,
						dw: "600",
						title: '注册协议'
					});
				});
				//提交
				$('#btnRegister').click(function() {
					$('#btnRegister').submitForm({
						beforeSubmit: $.proxy(register.formRegValid.form, register.formRegValid),
						success: register.successCallback,
						clearForm: false
					});
					return false;
				});
				//密码强度计算
				$('#txtPwd').focus(function() {
					register.intervalPwd = window.setInterval(register.pwdDynamic, 200);
				}).blur(function() {
					window.clearInterval(register.intervalPwd);
				});
				//滚动字幕
				register.scroll();
			},
			scroll: function() {
				speed = 100;
				divtop = 0;
				lis = $('#ddComScroll p').clone();
				$('#ddComScroll').append(lis);
				height = $('#ddComScroll').height();
				nav_today = $('#dlComScroll');
				timer = window.setInterval(register.marqueeUp, speed);

				$("#dlComScroll").mouseover(function() {
					clearTimeout(timer);
				}).mouseout(function() {
					timer = window.setInterval(register.marqueeUp, speed);
				});
			},
			marqueeUp: function() {
				nav_today.scrollTop(divtop);
				divtop++
				if (divtop + nav_today.height() >= height) {
					divtop = height / 2 - nav_today.height();
				}
			},
			successCallback: function(json) {
				if (json && json.status<0) {
					if (json.status==-35 || json.status==-36 || json.status==-37 || json.status==-38){
						$('#imgGetImgSrc').click();
					}
					$.anchorMsg(json.msg, {title: json.msg, icon:'fail' });
					return;
				}
				if(json && json.status>0){
					$('#btnRegister').unbind();
					$.anchorMsg('企业注册成功!',{title: "企业注册成功!", icon: "success",onclose:function(){
						window.location.href = "/company";
					}
					});
				}
			},
			pwdStrong: function(pwd) {
				//密码强度计算
				var modes = 0,
					pwd_len = pwd.length,
					i = 0,
					codeTemp;
				for (i; i < pwd_len; i++) {
					codeTemp = pwd.charCodeAt(i);
					if (codeTemp >= 48 && codeTemp <= 75) {
						modes |= 1;
					} else if (codeTemp > 65 && codeTemp <= 90) {
						modes |= 2;
					} else if (codeTemp > 97 && codeTemp < 122) {
						modes |= 4;
					} else {
						modes |= 8;
					}
				}
				var modeNum = 0;
				for (i = 0; i < 4; i++) {
					if (modes & 1) modeNum++;
					modes >>>= 1;
				}
				return modeNum;
			},
			pwdDynamic: function() {
				var password = $('#txtPwd').val(),
					strongBox = $('#pwdTipTxt'),
					fn = this;

				if (password == '') {
					strongBox.hide();
					return;
				}

				strongBox.show();

				var modeNum = register.pwdStrong(password);

				if (modeNum <= 1) {
					$(strongBox).find('em').removeClass().addClass('red').html('弱');
				} else if (modeNum == 2) {
					if (password.length < 6) {
						$(strongBox).find('em').removeClass().addClass('red').html('弱');
					} else {
						$(strongBox).find('em').removeClass().addClass('orange').html('中');
					}
				} else if (modeNum > 2) {
					if (password.length < 6) {
						$(strongBox).find('em').removeClass().addClass('red').html('弱');
					} else if (password.length > 6 && password.length < 10) {
						$(strongBox).find('em').removeClass().addClass('orange').html('中');
					} else {
						$(strongBox).find('em').removeClass().addClass('green').html('强');
					}
				}
			},
			changeauthcode: function(obj){
				$(obj).closest('.formMod').find('img').attr('src','/api/web/authCode.api?key=companyRegister&t='+Math.random());
			}
		}
		register.init();
	</script>
</body>
</html>