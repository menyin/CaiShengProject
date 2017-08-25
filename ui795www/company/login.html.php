<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$domainInfo['region_name_short']}597人才网-企业登录</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=201410096" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/icons.css?v=201403126" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/comlogin.css?v=201404216" />

	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=2017" charset="utf-8"></script>

	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/qrcode.min.js?v=2017" charset="utf-8"></script>
<style>
.logBox .hd{height: 45px;padding: 0px;margin-bottom: 20px;}
.newm-tab-userlogin {height: 43px;border-bottom: 1px solid #dcdcdc;}
.newm-tab-userlogin .cur {color: #2e70c1;}
.newm-tab-userlogin .last {
    border-left: 1px solid #dcdcdc;
}
.newm-tab-userlogin span {padding: 0 23px;display: inline-block;height: 43px;line-height: 43px;text-align: center;font-size: 16px;color: #666;font-family: "Microsoft YaHei", "微软雅黑";cursor: pointer;}
#sqrloginimg img {display: inline-block !important;}
</style>
</head>
<body id="body">
	<header id="header">
		<div class="hdCon">
			<div class="logo">
				<a href="/"></a>
			</div>
		</div>
	</header>
	<hgroup class="banner">
		<div class="bannerBox">
			<div class="txt">
				<p class="t1"> <em>100万</em>
					+企业
				</p>
				<p class="t2"> <em>2600万</em>
					<span>求职者</span>
					共同的选择
				</p>
				<p class="t3">
					<!-- 597人才网是西南地区规模大、成立早、访问量高、服务客户多的专业人才招聘网站， -->
					厦门才盛人才服务有限公司旗下的597人才网是面向社会的专业求职招聘网站。网站现有有效简历逾2600万份，单位会员100万余家，每日提供有效职位超过50万+，日均页面浏览量1000万+。
				</p>
			</div>
			<form method="post" action="/api/web/company.api " id="frmLogin">
				<input type="hidden" name="act" value="login" />
				<input type="hidden" name="appType" value="1">
				<input type="hidden" name="loginType" value="0">
				<input type="hidden" name="userType" value="2">
				<input type="hidden" name="cityId" id="cityId" value="{$domainInfo['region_id']}">
				<div class="logBox" style="height:340px;">
					<div class="con logBef" id="divLogin" style="height:340px;">
						<div class="hd">
							<!-- <h3>企业登录</h3>
							<div class="err" id="loginMsg" ></div> -->
							<div class="newm-tab-userlogin js-tab-title">
                                <span class="cur" data-type="1">快速登录</span>
                                <span class="last" data-type="2">用户名密码登录</span>
							</div>
						</div>
						<!--用户名密码登录-->
						<div class="logForm" style="height:245px;display:none;">
							<div class="formMod"><div class="err" id="loginMsg"></div></div>
							<div class="formMod">
								<span class="formText zindex">
									<label for="username" class="txtLabel">请输入用户名</label>
									<input type="text" class="text" maxlength="30" id="username" name="username" onkeydown="if(event.keyCode==13)return false;" placeholder="请输入用户名"></span>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<span class="formText zindex">
									<label for="password" class="txtLabel">请输入密码</label>
									<input type="password" class="text" maxlength="16" id="password" name="password"  onkeydown="if(event.keyCode==13)return false;" placeholder="请输入密码"></span>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<span id="cookieTime">
									<label>
										<input type="checkbox" id="cookieTime" name="cookieTime" value="2592000" />
										自动登录
									</label>
									<label style="margin-left:70px;"><a href="tencent://message/?Menu=yes&amp;amp;uin=938066631&amp;amp;Service=58&amp;amp;SigT=A7F6FEA02730C98835722A8AC9DC8C615D84ACB35FB95C21FCD96C5A8E87670C48230BDEB91DEEF6E4424E9E87B7B2156956457B823296358B88BFE049EE79E506FE35C59DBEC19583765D22E339C27EAE729A29EE0E0ADEFC44E245BF986572A74455C0F0F8CEC5EB4FB812434F5CDCD83D0A7F705045B6&amp;amp;SigU=30E5D5233A443AB2004ADD98B7D4DE306411157356E49A3B71E80C90F5312CE7D795D7761D5AB663C1B7403C4876BBF696817F5FF01D1177C086510304A5C0F2F033F138FDFD5152" target="_blank">忘记密码？</a></label>
								</span>
							</div>
							<div class="formMod" id="divcode" style="display:none;">
								<span class="formText zindex">
									<input type="text" id="authcode"  class="text" name="authcode" style="width:80px;"  />
								</span>
								<span class="yzImg">
									<img id="imgAuthCode" src="/api/web/authCode.api?key=companyLogin"></span>
								<span class="tipTxt" style="width:40px;">
									<a href="javascript:void(0);" onclick="companyLogin.refreshAuthCode();return false;">换一换</a>
								</span>
								<div class="clear"></div>
							</div>
							<div class="formBtn" style="position:static;overflow: hidden;">
								<a href="javascript:void(0)" class="btn4 btnsF16" id="btnLogin">
									<span> <i class="jpFntWes">&#xf007;</i>
										登&nbsp;录
									</span>
								</a>
								<a href="/company/register.html" class="btn3 btnsF16">注册企业会员</a>
							</div>
							<p style="clear:both;padding-top:5px; display:none;"><a href="javascript:void(0)" id="cityComLogin">福州站企业登录>>></a></p>

							<div style="clear: both;margin-top:18px;">
								<img src="http://cdn.597.com/img/common/wx.png">
								<a style="height:40px; line-height:40px;font-size:16px;" href="http://api.597.com/wechat2/login.api?t=1499389105">微信登录</a><span>
							</div>

						</div>
						<!--扫码登录-->
						<div class="js-logintab-item" style="display: block;">

                                <div id="sqrloginimg" style="text-align: center;padding-top: 15px;padding-bottom: 10px;position: relative">
                                </div>
                                <i id="sqrloginground" style="display: none;width:30px;height: 30px;background: url(http://cdn.{ROOT_DOMAIN}/img/p/login/login-ewm-succ.png) no-repeat;position: absolute;top:45%;left:45%"></i>

                            <p id="sqrloginmsg" style="font-size: 12px;color: #666;text-align: center;font-family: &quot;Microsoft YaHei&quot;, &quot;微软雅黑&quot;">打开597企业APP，扫码登录 | <a href="http://www.597.com/download/app/" target="_blank">下载企业APP</a></p>
                        </div>

						<div class="bot"> <i class="jpFntWes">&#xf095;</i>
							<em>400-8108-597</em>
						</div>
						<div class="leftTip" id="loginHelpDiv" style="display:none">
							<div class="bd"> <b class="arr"></b>
								<p class="tit" >登录小提示</p>
								<dl>
									<dt>您是否锁定了键盘的大写功能？</dt>
									<dd>请检查您键盘上的"Caps Lock"或"A"灯是否亮着，如果是，请先按一下"Caps Lock"键然后重新输入。</dd>
								</dl>
								<dl>
									<dt>您是否忘记或不小心输入了错误的密码？</dt>
									<dd>您可以通过拨打客服电话（400-8108-597）找回密码。</dd>
								</dl>
								<div class="errTip orange" id="boxTipErr">
									5分钟内密码输错4次，您的账号将被禁用30分钟，您还有
									<span class="strong">3</span>
									次机会
								</div>
							</div>
						</div>
					</div>
					<div class="con logAft" id="divLoginInfo" style="display:none">
						<div class="hd">
							<h3>登录信息</h3>
						</div>
						<div class="bd">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td valign="middle" align="left" height="153">
											<p>
												您好！
												<em class="orange" id="emCompanyname"></em>
											</p>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="btn">
								<a href="/index/" class="btn1 btnsF16">进入招聘中心</a>
								<a href="/login/dologout/" class="btn3 btnsF16">退出</a>
							</div>
						</div>
						<div class="bot">
							<i class="jpFntWes">&#xf095;</i>
							<em>400-8108-597</em>
						</div>
					</div>
				</div>
			</form>
		</div>
	</hgroup>
	<section>

		<hgroup>
			<h2>我们能为您提供什么服务</h2>
			<div class="tab" id="tab">
				<div class="tabT">
					<ul>
						<li class="cu">
							<a href="javascript:void(0);" class="lnk1">
								网络招聘 <b></b>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="lnk2">
								现场招聘会
								<b></b>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="lnk3">
								校园招聘
								<b></b>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="lnk4">
								HR活动
								<b></b>
							</a>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="tabC">
					<div class="tabCon lst1">
						<div class="txt">
							<p>企业注册用户100万，有效简历逾2600万份</p>
							<p>每日提供有效职位50万+条，浏览量1000万+</p>
						</div>
					</div>
					<div class="tabCon lst2" style="display:none;">
						<div class="txt">
							<p>每场到场求职者上千人次</p>
							<p>提供众多名企急聘岗位</p>
							<p>
								<!-- <a href="/zhaopinhui/">了解更多</a> -->
							</p>
						</div>
					</div>
					<div class="tabCon lst3" style="display:none;">
						<div class="txt">
							<p>合作伙伴：集美大学、厦门理工学院、华侨大学、厦门南洋学院、厦门华夏学院、厦门海洋学院、泉州师范学院等
</p>
							<p>
								<!-- <a href="/xiaoyuan/">了解更多</a> -->
							</p>
						</div>
					</div>
					<div class="tabCon lst4" style="display:none;">
						<div class="txt">
							<p class="strong">【03月21日】内训师的演说技巧</p>
							<p>讲师：张勇</p>
							<p>本课程能够帮助您熟练应用各种授课方式，从而有效的促进培训现场互动、提升控场能力、达成培训目的。</p>
							<!-- <p>
								<a href="/hrcollege/activitydetail?activity_id=7"/}>查看详情</a>
							</p> -->
						</div>
					</div>
				</div>
			</div>
		</hgroup>
		<hgroup style="padding-bottom:30px;">
			<h2>我们的荣誉和资质</h2>
			<div class="comLst">
				<ul>
					<li><a target="_blank" href="http://www.597.com/zizhi/fuwu.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/footer02.jpg" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/ruiwu.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/footer03.jpg" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/beian.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/footer04.jpg" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/yingye.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/footer05.jpg" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/shangbiao.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/footer06.jpg" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/xinyongxkz.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/footer08.jpg" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/jingyingxukezheng.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/xukezheng.gif" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/zhuzhuoquan.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/zhuzhuoquan.gif" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/code.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/597kxwz.gif" /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/honorary1.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/honorary1.gif"  /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/honorary2.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/honorary2.gif"  /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/honorary3.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/honorary3.gif"  /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/honorary4.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/honorary4.gif"  /></a></li>
					<li><a target="_blank" href="http://www.597.com/zizhi/honorary5.html"><img src="http://cdn.{ROOT_DOMAIN}/img/login/honorary5.gif"  /></a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</hgroup>
		<!-- <hgroup style="margin:0;">
			<h2>我们的资质和荣誉</h2>
			<div class="ryLst">
				<ul>
					<li>
						<img src="/img/login/zs1.jpg" />
					</li>
					<li>
						<img src="/img/login/zs2.jpg" />
					</li>
					<li>
						<img src="/img/login/zs3.jpg" />
					</li>
					<li>
						<img src="/img/login/zs4.jpg" />
					</li>
					<li>
						<img src="/img/login/zs5.jpg" />
					</li>
					<li>
						<img src="/img/login/zs6.jpg" />
					</li>
					<li>
						<img src="/img/login/zs7.jpg" />
					</li>
					<li>
						<img src="/img/login/zs8.jpg" />
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</hgroup> -->
	</section>
<!--{template footer}-->
	<script>
		$(document).ready(function() {

			generateQRCode('{$codeUrl}');
			$("#sqrloginimg").attr('title', 'APP扫码登录');

			//登录类型切换
			$(".newm-tab-userlogin span").click(function(){
			    $(this).addClass("cur").siblings().removeClass("cur");
				var index = $(this).attr('data-type');
				if(index==1){
					$(".logForm").hide();
					$(".js-logintab-item").show();
				}else{
					$(".js-logintab-item").hide();
					$(".logForm").show();
				}
			});

			//生成二维码
			function generateQRCode(data) {
		        new QRCode(document.getElementById("sqrloginimg"), {
		            render: 'table', // 渲染方式有table方式（IE兼容）和canvas方式
		            width: 170, //宽度 
		            height: 170, //高度 
		            text: utf16to8(data), //内容 
		            typeNumber:-1,//计算模式
		            correctLevel:2,//二维码纠错级别
		            background:"#ffffff",//背景颜色
		            foreground:"#000000"  //二维码颜色

		        });
		    }
	        //中文编码格式转换
		    function utf16to8(str) {
		        var out, i, len, c;
		        out = "";
		        len = str.length;
		        for (i = 0; i < len; i++) {
		            c = str.charCodeAt(i);
		            if ((c >= 0x0001) && (c <= 0x007F)) {
		                out += str.charAt(i);
		            } else if (c > 0x07FF) {
		                out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
		                out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));
		                out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
		            } else {
		                out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));
		                out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
		            }
		        }
		        return out;
		    }

			if($.browser.msie && $.browser.version < 10){
				$('#divLogin').find('.txtLabel').css('color','#ccc').show();
				$.focusblur('.text');
			}
			$('#tab').find('.tabT').find('li').click(function() {
				if ($(this).hasClass('cu')) {
					return false;
				} else {
					var thisIndex = $(this).index();
					$(this).addClass('cu').siblings('li').removeClass('cu');
					$('#tab').find('.tabCon').eq(thisIndex).css({
						'display': 'block'
					}).siblings('.tabCon').css({
						'display': 'none'
					});
				}
			});

			$('#admCngPass').click(function() {
				$.showModal('/company/ui/admCngPass.html?v=qaaa', {
					title: '温馨提示'
				});
			});
		});

		var companyLogin = {
			intialize: function() {
				this._initControls();
				var val = cookieutility.get('username');
				if (val) {
					$('#username').prev().hide();
					$('#username').focus().val(decodeURI(val));
				}
			},
			_initControls: function() {
				//$('#authcode').autoUpper();
				if ($('#username').val()) {
					$('#username').prev().hide();
				}
				if ($('#password').val()) {
					$('#password').prev().hide();
				}

				$('#btnLogin').click(function(event) {
					event.preventDefault();
					companyLogin.login(this);
				});
				//$('#username').focus();
				$('#frmLogin').find(':input').keydown(function(event) {
					var e = $.event.fix(event);
					if (e.keyCode == 13) {
						$('#btnLogin').click();
					}
				});
				$('#cityComLogin').click(function(){
					$.showModal('/file/cityLogin.html?act=com', {title:'{$domainInfo[region_name_short]}站企业用户名重复请在这里登录'});
				});
			},
			login: function(el) {
				$(el).running();
				$(el).submitForm({
					beforeSubmit: function() {
						$('#loginMsg').html('');
						var err = '';
						var con = $('#frmLogin');
						var username = con.find('#username');
						var password = con.find('#password');
						var authcode = con.find('#authcode');
						if (username.val() == '') {
							err = '<i class="jpFntWes">&#xf057;</i><p>请输入用户名</p><div class="clear"></div>';
							username.focus();
						} else if ($.trim(username.val()).length > 30 || $.trim(username.val()).length < 2) {
							err = '<i class="jpFntWes">&#xf057;</i><p>请输入长度为2-30位的用户名</p><div class="clear"></div>';
							username.focus();
						} else if (password.val() == '') {
							err = '<i class="jpFntWes">&#xf057;</i><p>请输入密码</p><div class="clear"></div>';
							password.focus();
						} else if ($.trim(password.val()).length > 16 || $.trim(password.val()).length < 6) {
							err = '<i class="jpFntWes">&#xf057;</i><p>请输入长度为6-16位的密码</p><div class="clear"></div>';
							password.focus();
						} else if (authcode.val() == '' && authcode.is(':visible')) {
							err = '<i class="jpFntWes">&#xf057;</i><p>请输入验证码</p><div class="clear"></div>';
							authcode.focus();
						}

						if (err.length > 0) {
							$('#loginMsg').html(err);
							$(el).stopRunning();
							return false;
						} else {
							return true;
						}
					},
					success: function(json) {
						$(el).stopRunning();
						companyLogin.loginSuccess(json, el);
					},
					showRunning: false
				});
			},
			refreshAuthCode: function() {
				var src = '/api/web/authCode.api?key=companyLogin&rand=' + Math.random() + '';
				$('#imgAuthCode').attr('src', src);
				$('#authcode').val('');
				return false;
			},
			callbacklogin: function() {
				$('#btnLogin').click();
			},
			loginSuccess: function(json, el) {
				$('#loginMsg').html('');
				if (json && json.status<1) {
					if(json.status==-45){
						$('#cityComLogin').click();
						return;
					}
					//if (json.error == 'repeat') {
					//  alert('重复账号');
					//window.location.href = '/RepeatError.aspx';
					//    return;
					//}
					//if (json.error == 'maxNum') {
					//加载挨踢的页面
					//    alert('挨踢的页面');
					//$.showModal('/DragonVerSeveralOnline.aspx?successed=companyLogin.callbacklogin&companyID=' + json.companyID, { title: '多用户同时在线' });
					//    return;
					//}

					$('#loginHelpDiv').hide();
					var errorStr = '<i class="jpFntWes">&#xf057;</i><p>' + json.msg + '</p><div class="clear"></div>';
					$('#loginMsg').html(errorStr);
					$('#loginMsg').show();
					if (json.invaliErr) {
						$('#boxTipErr').html(json.invaliErr);
					} else {
						$('#boxTipErr').html('');
					}

					if (json.status==-35 || json.status==-38 || json.status==-37) {
						$("#divcode").show();
						$('#authcode').focus();
					} else {
						$('#password').val('');
						$('#password').focus();
						$('#loginHelpDiv').show();
					}

					/*
					if (json.needCode) {
						$("#divcode").show();
					}
					*/
					companyLogin.refreshAuthCode();
					return;
				}
				if (json.need_update_password) {
					$(el).stopRunning();
					$.showModal('/login/passwordmod/', {
						title: '修改密码'
					});
					return;
				}

				if (json.status>0) {
					//$('#divLogin').hide();
					//$('#divLoginInfo').show().find('#emCompanyname').html(json.name);
					$('#btnLogin').addClass('btn4Unclick').html('正在跳转');
					window.location.href = "{$from}";
					//$.anchorMsg(json.success,{title: "操作成功", icon: "success",onclose:function(){

					//}
					//});
				}
			}
		}

		companyLogin.intialize();

		t = setInterval(function () {
                longPolling();
            }, 1500);

		var maId = "{$maId}";
		var sid = "{$sid}";
		function longPolling() {
	        $.ajax({
	            url: "/api/web/user.api?act=checkCodeStatus",
	            data: {'id':maId,"sid": sid},
	            dataType: "json",
	            success: function (json) {
	            	console.log(json);
                    if(json.status == 1){
                        $("#sqrloginimg").css({opacity:'0.2'});
                        $("#sqrloginground").css({display:'inline-block'});
                        $("#sqrloginmsg").html("扫描成功，请在手机端确认登录");
                    }else if(json.status == 2){
                        alert('success');
                        clearTimeout(t);
                        location.href = "/company/";
                    }else if(json.status == -1){
                    	clearTimeout(t);
                    	alert(json.msg);
                        window.location.reload();
                    }
	            }
	        });

   		}

	</script>
</body>
</html>