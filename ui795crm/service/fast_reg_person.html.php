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
					<div class="m_bg">客服管理 >简历快速注册</div>
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

								<!-- 注册 -->
								<section class="content2" id="content2">
									<form id="formReg" action="/service/person.html" method="post" target="_blank">
										<input type="hidden" name="act" value="fastRegSave" />
										<input type="hidden" name="adminId" value="{$_SESSION[adminid]}" />
										<div class="reg cReg">
											<div class="regL">
												<div class="box">
													<div class="regForm">
														<div class="formMod">
															<div class="l"><font color="red">*</font>手机号码</div>
															<span class="formText">
																<input type="text" id="mobile" name="mobile" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>
														<div class="formMod">
															<div class="l"><font color="red">*</font>姓名</div>
															<span class="formText">
																<input type="text" id="realname" name="realname" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>

														<div class="formMod">
															<div class="l">邮箱</div>
															<span class="formText">
																<input type="text" id="email" name="email" style="width:310px;" class="text" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>
														<div class="formMod">
															<div class="l"><font color="red">*</font>创建密码</div>
															<span class="formText">
																<label for="password" class="txtLabel" style="display:none;">创建密码</label>
																<input type="text" id="password" name="password" style="width:310px;" class="text" value="{$psw}" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>

														<div class="formMod lastMod">
															<div class="l"><font color="red">*</font>确认密码</div>
															<span class="formText">
																<label for="PwdRepeat" class="txtLabel" style="display:none;">确认密码</label>
																<input type="text" id="PwdRepeat" name="PwdRepeat" style="width:310px;" class="text" value="{$psw}" />
															</span>
															<span class="tipPos">
																<span class="tipLay"></span>
															</span>
															<div class="clear"></div>
														</div>
														<div class="formBtn">
															<a href="javascript:void(0)" id="btnRegister" class="btn1 btnsF16">注册</a>
															<a href="http://www.597.com/person/" class="btn2 btnsF16" id="open" target="_blank">个人中心</a>
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
		<!--{template service/sidebar}-->
	</div>
</div>

<script type="text/javascript">
	$("#open").hide();
	$("#btnRegister").click(function(){
		$.post("/service/person.html", $("#formReg").serialize(),function(data){
			if (data.status>0){
				$("#open").show();
			}else{
				$("#open").hide();
				alert(data.msg);
			}
		});
	});
	$("#open").click(function(){
		$("#open").hide();
	});
</script>
</body>
</html>
