<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title></title></head>
<body>
	<div id="loginedBefore" class='tag block'>
		<div class="tagT">
			<ul>
			<li class="cu"><a href="javascript:void(0)" id="personLoginSwitch" class="no1">求职登录</a></li>
			<li><a href="javascript:void(0)" id="companyLoginSwitch" class="no2">企业登录</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="tagC">
			<form id="personLoginForm" method="post" action="http://www1.597.com/person/login.html" autocomplete="off">
				<input type="hidden" name="act" value="login" />
				<div id="personLoginPanel" class="tagCon loginCon block">
					<ul>
					<li><p>用户名</p><div class="R"><input type="text" id="txtPersonUsername" name="txtPersonUsername" class="text1" /><div class="emptyTip none">请输入用户名</div></div><div class="clear"></div></li>
					<li><p>密&nbsp;&nbsp;码</p><div class="R"><input type="password" id="txtPersonPwd" name="txtPersonPwd" class="text1" /><div class="emptyTip none">请输入密码</div></div><div class="clear"></div></li>
					<li><p>验证码</p><div class="R"><input type="text" id="txtPersonAuthCode" name="txtPersonAuthCode" class="text1" style="width: 45px;margin-top: -25px;"/>&nbsp;<img id="imgPersonAuthCode" onclick="promacyPageLoginPanel.refreshPersonAuthCode();return false;" src="/" onkeydown="if(event.keyCode==13)return false;"/><div class="emptyTip none">请输入验证码</div></div><div class="clear"></div></li>
					<li><p>&nbsp;</p><div class="R"><a href="javascript:void(0)" id="btnPersonLogin" class="loginBtn1" rel="nofollow"></a><a href="/person/register.html" id="btnPersonRegister" class="loginBtn2" rel="nofollow"></a></div><div class="clear"></div></li>
					</ul>
				</div>
			</form>
			<form id="companyLoginForm" method="post" action="http://www1.597.com/company/login.html" autocomplete="off">
				<input type="hidden" name="act" value="login" />
				<div id="companyLoginPanel1" class="tagCon loginCon none">
					<ul>
					<li><p>用户名</p><div class="R"><input type="text" maxlength="64" id="txtCompanyUsername" name="txtCompanyUsername" class="text1" /><div class="emptyTip none">请输入用户名</div></div><div class="clear"></div></li>
					<li><p>密&nbsp;&nbsp;码</p><div class="R"><input maxlength="64" id="txtCompanyPwd" name="txtCompanyPwd" type="password" class="text1" /><div class="emptyTip none">请输入密码</div></div><div class="clear"></div></li>
					<li><p>验证码</p><div class="R"><input type="text" id="txtCompanyAuthCode" name="txtCompanyAuthCode" class="text1" style="width: 45px;margin-top: -25px;"/>&nbsp;<img id="imgCompanyAuthCode" onclick="promacyPageLoginPanel.refreshCompanyAuthCode();return false;" src="/" onkeydown="if(event.keyCode==13)return false;"/><div class="emptyTip none">请输入验证码</div></div><div class="clear"></div></li>
					<li><p>&nbsp;</p><div class="R"><a href="javascript:void(0)" id="btnCompanyLogin" class="loginBtn1" rel="nofollow"></a><a href="/company/register.html" id="btnCompanyRegister" class="loginBtn2" rel="nofollow"></a></div><div class="clear"></div></li>
					</ul>
				</div>
			</form>
		</div>
	</div>
	<div id="personLoginAfter" class='personLoginAfter loginAfter none'>
		<div class="loginAfterT">登录信息</div>
		<div class="loginAfterC">
			<div class="info">
				<p>您好,<span class="orange strong">{$_SESSION[username]}</span>!</p>
				<p>您目前的身份是求职者！</p>
			</div>
			<div class="btn">
				<a href="/person/resumes.html?act=list" class="loginBtn3"><span>简历管理</span></a><a href="/person/" class="loginBtn3"><span>求职中心</span></a>
			</div>
			<div class="exit"><a href="/logout.html">安全退出</a></div>
		</div>
	</div>
	<div id="companyLoginAfter" class='companyLoginAfter loginAfter none'>
		<div class="loginAfterT">登录信息</div>
		<div class="loginAfterC">
			<div class="info">
				<p>您好,<span class="orange strong">{$_SESSION[username]}</span>!</p>
				<p>您目前的身份是企业！</p>
			</div>
			<div class="btn">
				<a href="/company/resumes.html?act=join" class="loginBtn3"><span>收到简历</span><em style='display:none'>0</em></a><a href="/company/" class="loginBtn3"><span>招聘中心</span></a>
			</div>
			<div class="exit"><a href="/logout.html" >安全退出</a></div>
		</div>
	</div>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		var topUsername=readCookie('username');
		var topUserType=readCookie('userType');
		if (topUserType=='com'){
			$('#noLogined').hide();
			$('#companyLogined').show();
			$('#companyLoginMessage').show();
			$('#personLogined').hide();
			$('#personLoginMessage').hide();
		}
		if (topUserType=='per'){
			$('#noLogined').hide();
			$('#companyLogined').hide();
			$('#companyLoginMessage').hide();
			$('#personLogined').show();
			$('#personLoginMessage').show();
		}
		$('.userName').html(topUsername);
	});


	var promacyPageLoginPanel = {
		initialize: function() {
			promacyPageLoginPanel.refreshPersonAuthCode();
			promacyPageLoginPanel.refreshCompanyAuthCode();
			promacyPageLoginPanel.login.initialize();
			$('#txtPersonAuthCode').autoUpper();
			$('#txtCompanyAuthCode').autoUpper();
		},
		refreshPersonAuthCode:function(){
			var src = '/authCode.html?' + Math.random() + '&key=personLogin';
			$('#imgPersonAuthCode').attr('src', src);
			$('#txtPersonAuthCode').val('');
		},
		refreshCompanyAuthCode:function(){
			var src = '/authCode.html?' + Math.random() + '&key=companyLogin';
			$('#imgCompanyAuthCode').attr('src', src);
			$('#txtCompanyAuthCode').val('');
		},
		login: {
			initialize: function() {
				this._loginSwitch();
				this._personLoginSubmit();
				this._companyLoginSubmit();
				//个人
				$('#personLoginForm').find(':input').keydown(function(event) {
					var e = $.event.fix(event);
					if (e.keyCode == 13) {
						$('#btnPersonLogin').click();
					}
				});
				//给求职者文本框加提示信息
				if ($('#personLoginForm').find('"input[name=txtPersonUsername]').val() == '') {
					$('#personLoginForm').find('"input[name=txtPersonUsername]').css({ color: 'gray' });
				}
				//企业
				$('#companyLoginForm').find(':input').keydown(function(event) {
					var e = $.event.fix(event);
					if (e.keyCode == 13) {
						$('#btnCompanyLogin').click();
					}
				});
			},
			_loginSwitch: function() {
				var personLoginPanel = $('#personLoginPanel');
				var companyLoginPanel1 = $('#companyLoginPanel1');
				$('#personLoginSwitch').click(function() {
					var _self = $(this);
					if (_self.parent().hasClass('cu')) {
						return false;
					}
					_self.parent().addClass('cu');
					_self.parent().siblings().removeClass('cu');
					personLoginPanel.addClass('block').removeClass('none');
					companyLoginPanel1.addClass('none').removeClass('block');
					promacyPageLoginPanel.clear._clearCompanyLoginPanel();
				});
				$('#companyLoginSwitch').click(function() {
					var _self = $(this);
					if (_self.parent().hasClass('cu')) {
						return false;
					}
					_self.parent().addClass('cu');
					_self.parent().siblings().removeClass('cu');
					companyLoginPanel1.addClass('block').removeClass('none');
					personLoginPanel.addClass('none').removeClass('block');
					promacyPageLoginPanel.clear._clearPersonLoginPanel();
				});
			},
			_personLoginSubmit: function() {
				var _self = $('#btnPersonLogin');
				var _personUsername = $('#txtPersonUsername');
				var _personPwd = $('#txtPersonPwd');
				var _personAuthCode = $('#txtPersonAuthCode');
				_self.click(function() {
					if (_personUsername.val().trim() == '用户名/邮箱/手机号' || _personUsername.val().trim() == "" || _personUsername.val() == 'undefined' || _personUsername.val().trim().length == 0) {
						_personUsername.focus();
						_personUsername.closest('.R').addClass('Rindex3');
						_personUsername.next().addClass('block').removeClass('none');
						_personUsername.closest('li').siblings().find('.R').removeClass('Rindex3');
						_personUsername.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					if (_personPwd.val().trim() == "" || _personPwd == 'undefined' || _personPwd.val().trim().length == 0) {
						_personPwd.focus();
						_personPwd.closest('.R').addClass('Rindex3');
						_personPwd.next().addClass('block').removeClass('none');
						_personPwd.closest('li').siblings().find('.R').removeClass('Rindex3');
						_personPwd.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					if (_personAuthCode.val().trim().length != 4) {
						_personAuthCode.focus();
						_personAuthCode.closest('.R').addClass('Rindex3');
						_personAuthCode.next().next().addClass('block').removeClass('none');
						_personAuthCode.closest('li').siblings().find('.R').removeClass('Rindex3');
						_personAuthCode.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					//表单提交
					$("#personLoginForm").submit();
				});
				_personUsername.change(function() {
					if (_personUsername.val().trim() != "" && _personUsername.val().trim().length != 0) {
						_personUsername.closest('.R').removeClass('Rindex3');
						_personUsername.next().addClass('none').removeClass('block');
					}
				});
				_personPwd.change(function() {
					if (_personPwd.val().trim() != "" && _personPwd.val().trim().length != 0) {
						_personPwd.closest('.R').removeClass('Rindex3');
						_personPwd.next().addClass('none').removeClass('block');
					}
				});
				_personAuthCode.change(function() {
					if (_personAuthCode.val().trim().length == 4) {
						_personAuthCode.closest('.R').removeClass('Rindex3');
						_personAuthCode.next().next().addClass('none').removeClass('block');
					}
				});
			},
			_companyLoginSubmit: function() {
				var _self = $('#btnCompanyLogin');
				var _companyUsername = $('#txtCompanyUsername');
				var _companyPwd = $('#txtCompanyPwd');
				var _companyAuthCode = $('#txtCompanyAuthCode');
				_self.click(function() {
					if (_companyUsername.val().trim() == "" || _companyUsername == 'undefined' || _companyUsername.val().trim().length == 0) {
						_companyUsername.focus();
						_companyUsername.closest('.R').addClass('Rindex3');
						_companyUsername.next().html('请输入用户名').removeAttr('style').addClass('block').removeClass('none');
						_companyUsername.closest('li').siblings().find('.R').removeClass('Rindex3');
						_companyUsername.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					if (_companyUsername.val().trim().length > 64 || _companyUsername.val().trim().length < 1) {
						_companyUsername.focus();
						_companyUsername.closest('.R').addClass('Rindex3');
						_companyUsername.next().html('请输入长度为1-64位的用户名').attr('style', 'width:165px;').addClass('block').removeClass('none');
						_companyUsername.closest('li').siblings().find('.R').removeClass('Rindex3');
						_companyUsername.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					if (_companyPwd.val().trim() == "" || _companyPwd == 'undefined' || _companyPwd.val().trim().length == 0) {
						_companyPwd.focus();
						_companyPwd.closest('.R').addClass('Rindex3');
						_companyPwd.next().html('请输入密码').addClass('block').removeClass('none');
						_companyPwd.closest('li').siblings().find('.R').removeClass('Rindex3');
						_companyPwd.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					if (_companyPwd.val().trim().length > 64 || _companyPwd.val().trim().length < 1) {
						_companyPwd.focus();
						_companyPwd.closest('.R').addClass('Rindex3');
						_companyPwd.next().html('请输入长度为1-64位的密码').addClass('block').removeClass('none');
						_companyPwd.closest('li').siblings().find('.R').removeClass('Rindex3');
						_companyPwd.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					if (_companyAuthCode.val().trim().length != 4) {
						_companyAuthCode.focus();
						_companyAuthCode.closest('.R').addClass('Rindex3');
						_companyAuthCode.next().next().html('请输入验证码').addClass('block').removeClass('none');
						_companyAuthCode.closest('li').siblings().find('.R').removeClass('Rindex3');
						_companyAuthCode.closest('li').siblings().find('.emptyTip').addClass('none').removeClass('block');
						return;
					}
					$("#companyLoginForm").submit();
				});
				_companyUsername.change(function() {
					if (_companyUsername.val().trim() != "" && _companyUsername.val().trim().length != 0) {
						_companyUsername.closest('.R').removeClass('Rindex3');
						_companyUsername.next().addClass('none').removeClass('block');
					}
				});
				_companyPwd.change(function() {
					if (_companyPwd.val().trim() != "" && _companyPwd.val().trim().length != 0) {
						_companyPwd.closest('.R').removeClass('Rindex3');
						_companyPwd.next().addClass('none').removeClass('block');
					}
				});
				_companyAuthCode.change(function() {
					if (_companyAuthCode.val().trim().length == 4) {
						_companyAuthCode.closest('.R').removeClass('Rindex3');
						_companyAuthCode.next().next().addClass('none').removeClass('block');
					}
				});
			}
		},
		clear: {
			_clearPersonLoginPanel: function() {
				$('#txtPersonUsername').val('').css({color:'gray'});
				$('#txtPersonPwd').val('');
				$('#chkPersonSave').css({ 'checked': false });
				$('#personLoginPanel').find('.R').removeClass('Rindex3');
				$('#personLoginPanel').find('.emptyTip').addClass('none').removeClass('block');

				$('#companyLoginPanel1').find('.R').removeClass('Rindex3');
				$('#companyLoginPanel1').find('.emptyTip').addClass('none').removeClass('block');
			},
			_clearCompanyLoginPanel: function() {
				$('#txtCompanyUsername').val('');
				$('#txtCompanyPwd').val('');
				$('#companyLoginPanel1').find('.R').removeClass('Rindex3');
				$('#companyLoginPanel1').find('.emptyTip').addClass('none').removeClass('block');

				$('#personLoginPanel').find('.R').removeClass('Rindex3');
				$('#personLoginPanel').find('.emptyTip').addClass('none').removeClass('block');
			}
		}
	}
	promacyPageLoginPanel.initialize();
</script>
</body>
</html>