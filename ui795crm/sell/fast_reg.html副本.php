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
<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery.js?v=20140312"></script>
<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/www/js/jquery.validate.js?v=20140312"></script>
<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/www/js/jquery.form.js?v=20140312"></script>
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
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div class="">
												<form id="postForm" name="postForm" action="/service/company.html" method="post" >
												<input type="hidden" name="act" value="fastRegSave" />
												<input type="hidden" name="from" value="{$from}" />
												<input type="hidden" name="txtAppType" value="4" />
												<input type="hidden" name="adminId" value="{$_SESSION[adminid]}" />
												<input type="hidden" name="statusId" value="3" />											
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px"><font color="red">*</font>公司名称：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" id="txtCompanyName" class="text" name="txtCompanyName" maxlength="96" size="50" />请与贵公司营业执照注册名保持一致(由6-96个字节组成，即2-32个汉字)</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="140px"><font color="red">*</font>所在地：</td>
																<td><div class="formMod"><span class="formText"><input type="hidden" id="hddArea" name="hddArea"/>
																	<input type="text" class="text" id="region" name="region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true"> 
																	<script language="javascript">
																		var areaOdjid='hddArea'; 
																		var areaOdjstr='region';
																		var areaOdjProvice=1;//是否省可选
																		var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
																		var areaOdjnumber=1;//数量，如果唯一值，则立即返回
																	</script>至少要选到城市</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">具体地址：</td>
																<td><div class="formMod"><span class="formText"><input type="text" id="txtcomAddress" class="text" name="txtcomAddress" size="50"/></span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title"><font color="red">*</font>联系人：</td>
																<td><div class="formMod"><span class="formText"><input type="text" id="txtLinkPerson" class="text" name="txtLinkPerson" maxlength="16"/>1-60个字组成</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title"><font color="red">*</font>联系电话：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" id="txtLocation" maxlength="4" value="" name="txtLocation" style="width:50px; color:#000;" class="text" placeholder="区号"><input type="text" id="txtLinkPhone" maxlength="11" class="text" name="txtLinkTelphone" style="width:100px; color:#000; margin-left:10px;" value=""  placeholder="固定电话" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"/><input type="text" id="txtCall" maxlength="6" name="txtCall" style="width:50px; color:#000; margin-left:10px;" class="text" value=""  placeholder="分机号">固定电话或手机必填一个</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title"><font color="red">*</font>联系手机：</td>
																<td><div class="formMod"><span class="formText"><input type="text" id="txtLinkCall" class="text" name="txtLinkCall" maxlength="11" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" />固定电话或手机必填一个</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">电子邮箱：</td>
																<td><div class="formMod"><span class="formText"><input type="text" id="txtEmail" class="text" name="txtEmail" /></span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title"><font color="red">*</font>用户名：</td>
																<td><div class="formMod"><span class="formText"><input type="text" id="txtUsername" class="text" name="txtUsername" maxlength="32"  onchange="chkUname()" />用户名为字母、数字、下划线组成(用户名3-30位字符)</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title"><font color="red">*</font>设置密码：</td>
																<td><div class="formMod"><span class="formText"><input type="password" id="txtPwd" name="txtPwd" class="text" maxlength="16" onchange="RegValiPwd()" />密码6-16位字符(不能为连续数)</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title"><font color="red">*</font>确认密码：</td>
																<td><div class="formMod"><span class="formText"><input type="password" id="txtPwdRepeat" class="text" name="txtPwdRepeat" maxlength="16"/>与密码要一致</span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr style="display:none;">
																<td class="tb_title">企业类型：</td>
																<td><div class="formMod"><span class="formText">
																	<select id="comType" name="comType" class="drop">
																		<option value=''>不限</option>
																		<option value='0'>0</option>
																		<option value='1'>1</option>
																		<option value='2'>2</option>
																		<option value='3'>3</option>
																		<option value='4'>4</option>
																	</select></span><span class="tipPos">
																		<span class="tipLay"></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">完成</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template sell/sidebar}-->
	</div>
</div>
<script type="text/javascript">
	function chkUname(){
		var userName = $('#txtUsername').val();
		if(userName==''||typeof(userName) == 'undefined'){
			alert('请填写用户名！');
			return false;
		}else if(/^[\d]+$/.test(userName)){
			errorMsg = "用户名不能全部为数字！";
			alert(errorMsg);
			return false;
		}else if(userName.length>31 || userName.length<3){
			errorMsg = "用户名为3-30位字符！";
			alert(errorMsg);
			return false;
		}else if(!/^[A-Za-z0-9_]*$/.test(userName)){
			errorMsg = "用户名为字母、数字、下划线组成！";
			alert(errorMsg);
			return false;
		}else{
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
						return true;
					} else {
						errorMsg = "用户名已存在！";
						alert(errorMsg);
						$('#txtUsername').focus();
						return false;
					}
				}
			});
		}
		
	}
	function RegValiPwd(){
		var pwd = $('#txtPwd').val();
		var userName = $('#txtUsername').val();
		var patten = new RegExp('^[0-9]+$');
		if(pwd==''||typeof(pwd) == 'undefined'){
			alert('请输入密码！');
			return false;
		}
		if (userName == pwd) {
			errorMsg = "密码和用户名不能相同！";
			alert(errorMsg);
			return false;
		}
		if (/^(\d)\1+$/.test(pwd)) {
			errorMsg = "密码不能为同一个数字！";
			alert(errorMsg);
			return false;
		}
		var str = pwd.replace(/\d/g, function($0, pos) {
			return parseInt($0) - pos;
		});
		if (/^(\d)\1+$/.test(str)) {
			errorMsg = "密码不能为连续数字！";
			alert(errorMsg);
			return false;
		}
		str = pwd.replace(/\d/g, function($0, pos) {
			return parseInt($0) + pos;
		});
		if (/^(\d)\1+$/.test(str)) {
			errorMsg = "密码不能为连续数字！";
			alert(errorMsg);
			return false;
		}
	}
	$('#btnSave').click(function(){
		var txtCompanyName = $('#txtCompanyName').val();
		var hddArea = $('#hddArea').val();
		var txtLinkPerson = $('#txtLinkPerson').val();
		var linkPhone = $('#txtLinkPhone').val();
		var pwd = $('#txtPwd').val();
		var txtPwdRepeat = $('#txtPwdRepeat').val();
		var userName = $('#txtUsername').val();
		var patten = new RegExp('^[0-9]+$');
		var linkCall=$('#txtLinkCall').val();
		var phone_pattern = /^[1]\d{10}$/;
		var txtEmail=$('#txtEmail').val();
		var email_pattern =  /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z-_]+\.)+[a-zA-Z]{2,4}$/;
		if(txtCompanyName==''||typeof(txtCompanyName) == 'undefined'){
			alert('请填写公司名称！');
			return false;
		}else if(txtCompanyName.length>96 || txtCompanyName.length<2){
			errorMsg = "公司名称为6-96个字节组成！";
			alert(errorMsg);
			return false;
		}
		if(hddArea=='' || typeof(hddArea) == 'undefined'){
			alert('请选择所在城市！');
			return false;
		}
		if(txtCompanyName==''||typeof(txtCompanyName) == 'undefined'){
			alert('请填写联系人！');
			return false;
		}else if(txtCompanyName.length>60 || txtCompanyName.length<1){
			errorMsg = "联系人为1-60个字组成！";
			alert(errorMsg);
			return false;
		}
		if(linkPhone=='' && linkCall==''){
			alert('请填写电话或者手机！');
			return false;
		}
		if(linkCall!=''){
			if(linkCall.length!=11){
				alert('联系手机位数不对!');
				return;
			}
			if(!phone_pattern.exec(linkCall)){
				alert('联系手机格式不正确!');
				return;
			}
		}
		if(txtEmail!=''){
			if(!email_pattern.exec(txtEmail)){
				alert('请填写正确的电子邮箱！');
				return;
			}
		}
		if(userName==''||typeof(userName) == 'undefined'){
			alert('请填写用户名！');
			return false;
		}
		if(/^[\d]+$/.test(userName)){
			errorMsg = "用户名不能全部为数字！";
			alert(errorMsg);
			return false;
		}else if(userName.length>31 || userName.length<3){
			errorMsg = "用户名为3-30位字符！";
			alert(errorMsg);
			return false;
		}else if(!/^[A-Za-z0-9_]*$/.test(userName)){
			errorMsg = "用户名为字母、数字、下划线组成！";
			alert(errorMsg);
			return false;
		}
		if (userName == pwd) {
			errorMsg = "密码和用户名不能相同！";
			alert(errorMsg);
			return false;
		}
		if (/^(\d)\1+$/.test(pwd)) {
			errorMsg = "密码不能为同一个数字！";
			alert(errorMsg);
			return false;
		}
		var str = pwd.replace(/\d/g, function($0, pos) {
			return parseInt($0) - pos;
		});
		if (/^(\d)\1+$/.test(str)) {
			errorMsg = "密码不能为连续数字！";
			alert(errorMsg);
			return false;
		}
		str = pwd.replace(/\d/g, function($0, pos) {
			return parseInt($0) + pos;
		});
		if (/^(\d)\1+$/.test(str)) {
			errorMsg = "密码不能为连续数字！";
			alert(errorMsg);
			return false;
		}
		if(txtPwdRepeat!=pwd){
			errorMsg = "两次输入不一致！";
			alert(errorMsg);
			return false;
		}
		$('#postForm').submitForm({success:success,clearForm:false});
	});

</script>
<script type="text/javascript">
function success(json){
	if (json.status > 0) {
		alert('快速注册成功，5分钟之后将加入到---我的企业！');
		window.location.href = 'company.html?act=mylist&ordertype=3&query=';
	}else{
		alert(json.msg);
		return;
	}
}
</script>
</body>
</html>
