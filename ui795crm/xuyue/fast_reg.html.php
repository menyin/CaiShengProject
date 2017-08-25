<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<!-- <script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script> -->
<!-- <script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/m/mobile.form.js?v=20140319"></script> -->
<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/base.css?v=20141009" />
<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/login.css?v=20141023" />

<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=20141218"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/dialog.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_area.js?v=20140312"></script>
<style>
	body {font-size: 12px; text-align:left;}
	.regL {width:100%; float:none;}
	.reg {border:none;}
	#curarea .text {height: 20px; line-height: 20px;}
	.regL .formMod .formText input.text {height: 32px; line-height: 32px;}
	.regL .formMod:hover {background: #ebf8ff;}
	.regL .formMod .formText label {height: 30px; line-height: 30px; }
	.regL .box {margin: 0; padding:3px;}
	.regL .formMod { border:1px solid #ccc; padding: 3px; border-bottom:none; margin-bottom: 0;}
	.mainContent .main_content .layout_main {margin-top: 5px;}
	.tit {font:bold 14px 微软雅黑;}
	.tipPos {top:-2px;}
	.regL .lastMod {border-bottom:2px solid #ddd;}
	.formBtn {text-align: center; margin-top: 20px;}
	div.l { width:100px; text-align: right; padding-right: 20px;}
	div.l:after {content:":"; margin-left: 5px;}
	a.btn3:link, a.btn3:visited {height: 35px;line-height: 35px;display: inline-block;margin: 0 5px;padding: 0 20px;font-size: 16px;border-radius: 3px;font-family: "微软雅黑"; margin-left: 10px!important;}
</style>
<body>
<div id="content">
	<!--{template nav}-->
	<div id="contentBody" style="visibility: visible;">
		<!--  小贴士 start  -->
		<div id="tips" class="hide" style="width: 256px;display:none">
			<div class="tips" style="">
				<div class="tips-title" style="">小贴士
					<div class="btn_close"></div>
				</div>
				<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
					<div class="title">
						<div data-bind="text: cat">常见问题</div>
					</div>
					<div data-bind="foreach: links">
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
						</div>
					
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
						</div>
					</div>
					<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
						<div class="more">
							<div>
								更多： 
								<a href="#" target="_blank">帮助中心</a> &nbsp;
								<a href="#" target="_blank">售后支持</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">客服管理 >快速注册</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="company.html?act=fastReg">快速注册</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">

								<!-- 企业注册 -->
								<section class="content2" id="content2">
									<form id="formReg" action="/xuyue/company.html" method="post">
										<input type="hidden" name="act" value="fastRegSave" />
										<input type="hidden" name="from" value="{$from}" />
										<input type="hidden" name="txtAppType" value="4" />
										<input type="hidden" name="adminId" value="{$_SESSION[adminid]}" />
										<input type="hidden" name="statusId" value="1" />
										<div class="reg cReg">
											<div class="regL">
												<div class="box">
													<div class="regForm">
														<div class="formMod">
															<div class="l"><font color="red">*</font>公司名称</div>
															<span class="formText">
																<label for="txtCompanyName" class="txtLabel">公司名称</label>
																<input type="text" id="txtCompanyName" name="txtCompanyName" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>

														<div class="formMod addressMod clearfix" style="z-index:98;position: relative">
															<a id="area" name="area"></a>
															<div class="l"><font color="red">*</font>所在地</div>
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
															<div class="l">具体地址</div>
															<span class="formText">
																<label for="txtcomAddress" class="txtLabel">具体地址</label>
																<input type="text" id="txtcomAddress" name="txtcomAddress" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>

														<div class="formMod">
															<div class="l"><font color="red">*</font>联系人</div>
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
															<div class="l">固定电话</div>
															<span class="formText">
																<label for="txtLinkTelphone" class="txtLabel">固定电话</label>
																<input type="text" id="txtLinkTelphone" name="txtLinkTelphone" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>
														<div class="formMod">
															<div class="l"><font color="red">*</font>邮箱</div>
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
															<div class="l">手机号码</div>
															<span class="formText">
																<label for="txtLinkCall" class="txtLabel">手机号码</label>
																<input type="text" id="txtLinkCall" name="txtLinkCall" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>
														<div class="formMod">
															<div class="l"><font color="red">*</font>用户名</div>
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
															<div class="l"><font color="red">*</font>创建密码</div>
															<span class="formText">
																<label for="txtPwd" class="txtLabel" style="display:none;">创建密码</label>
																<input type="text" id="txtPwd" name="txtPwd" style="width:310px;" class="text" value="{$psw}" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<span style="clear:both;width:100%;margin:0;display:none" id="pwdTipTxt" class="tipTxt">
																密码强度： <em class="red">弱</em>
															</span>
															<div class="clear"></div>
														</div>

														<div class="formMod lastMod">
															<div class="l"><font color="red">*</font>确认密码</div>
															<span class="formText">
																<label for="txtPwdRepeat" class="txtLabel" style="display:none;">确认密码</label>
																<input type="text" id="txtPwdRepeat" name="txtPwdRepeat" style="width:310px;" class="text" value="{$psw}" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>
														<div class="formBtn">
															<a href="javascript:void(0)" id="btnRegister" class="btn1 btnsF16">完成并进入企业中心</a>
															<a href="javascript:void(0)" id="btnRegister1"  class="btn3  btnsF16">保存并注册下一个</a>
															<input type="hidden" name="sub" id="sub" value="1">
														</div>
													</div>
												</div>
											</div>
										<div class="clear"></div>
										</div>
									</form>
								</section>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template xuyue/sidebar}-->
	</div>
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
							rangelength: [1, 10]
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
							rangelength: '1-10个字组成<span class="tipArr"></span>'
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
						txtLinkPerson: '1-10个字组成<span class="tipArr"></span>',
						txtUsername: '3-32位字符字母、数字、组成<span class="tipArr"></span>',
						txtLinkCall: '手机号码11位数字组成<span class="tipArr"></span>',
						txtPwd: '密码6-16位字符组成<span class="tipArr"></span>',
						txtPwdRepeat: '密码6-16位字符组成<span class="tipArr"></span>'
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
				$('#curarea').singleArea({hddName:'hddArea',showLevel:2,controlClass:'zindex',onSelect:function(a){
					$(".regL").find(".addressMod").find('.r').find('.tipPos').find('.tipLay').html('');
					//$(".regL .addressMod .formText .tipPos .tipLay").html('');
				},noSelect:function(){
					form.checkElement($('#hddArea'));
				}
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
					$('#sub').val(1);
					$('#btnRegister').submitForm({
						beforeSubmit: $.proxy(register.formRegValid.form, register.formRegValid),
						success: register.successCallback,
						clearForm: false
					});
					return false;
				});
				//提交
				$('#btnRegister1').click(function() {
					$('#sub').val(2);
					$('#btnRegister1').submitForm({
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
					$.anchorMsg('快速注册成功，5分钟之后将加入到---我的企业！',{title: "快速注册成功，5分钟之后将加入到---我的企业！", icon: "success",onclose:function(){
						if(json.subto==1){
							/*打开新页面
							location.reload();
							window.open(json.to,'_blank');*/
							window.location.href = json.to;
						}else{
							window.location.href = json.to;
						}
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
