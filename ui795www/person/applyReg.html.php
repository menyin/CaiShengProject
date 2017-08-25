
<style>
.regL{}
div.content{width:100%;}
.fModleft{ float:left; line-height:40px; margin-right:8px;}
.fModleft i{ color:#f00;}
.pReg .regL .thrdLogin{ padding-bottom:0;}
.pReg .regL .thrdLogin em{ color:#f00;} 
.regL .formModPhone{ margin-bottom:8px; color:#ccc; padding-left:76px;}
.pReg .regL .thrdLogin{ margin:0; padding:0;}
.hb_ui_dialog .ui_dialog_container{ padding:0; background:none; border:none;}
.thrdLogin{ background:#e8f5fe; text-align:center; font-size:16px;}
.regL{ float:none;}
.reg{ border-radius:4px;}
.pReg .regL .thrdLogin p{ line-height:48px; font-size:12px; color:#444;}
.pReg .regL .thrdLogin p em{ color:#3d84b8;font-size:16px;}
em.orange{color: #f60;}
em.red{color: #f00;}
em.green{color: #0f0;}
</style>
<div class="content" id="content">
	<div class="reg pReg">
		<div class="regL">
			<div class="thrdLogin">
				<p><em>保存成功，离完成只差一步，</em>快去设置登录密码吧</p>
			</div>
			<div class="box">
				<form id="frmMobilPhone" method="post" action="/api/web/person.api?act=applyReg">
					<div class="regForm" id="divMobilPhone">
						<div class="formMod" style="margin-bottom:8px;">
							<div class="fModleft">手机号码：<i>*</i></div>
							<span class="formText">
								<input type="text" style="width:280px;" id="txtMobilPhone" name="txtMobilPhone" class="text watermark" watermark="手机号码" value="{$mobile}"/>
								<!--输入手机号码后,进行规则验证及后台唯一性验证,如通过,则以下所有表单开放禁用状态-->
							</span>
							<span class="tipPos">
								<span class="tipLay">
									
								</span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="formMod formModPhone">
						手机号将作为您的登录帐号
						</div>
						<div class="formMod">
							<div class="fModleft">手机验证：<i>*</i></div>
							<span class="formText">
								<input type="text" style="width:121px;" id="txtMobileCode" name="txtMobileCode" class="text watermark" watermark="手机验证码" />
							</span>
							<span class="phoneBtn"><a href="javascript:void(0);" id="btnSendMsg" class="btn3 btnsF16 clickValidate">免费获取验证码</a></span>
							<span class="tipPos">
								<span class="tipLay">
									
								</span>
							</span>
							<div class="clear"></div>
						</div>
						
						
						<div class="formMod">
							<div class="fModleft">登录密码：<i>*</i></div>
							<span class="formText">
								<input type="password" style="width:280px;" id="txtPassword" name="txtPassword" autocomplete="off" watermark="创建密码" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay">
									
								</span>
							</span>
							<span style="clear:both;width:100%;margin:0;display:none;" class="tipTxt"  id="pwdTipTxt">密码强度：<em class="red">弱</em></span>
							<div class="clear"></div>
						</div>
						
						<div class="formMod">
							<div class="fModleft">确认密码：<i>*</i></div>
							<span class="formText">
								<input type="password" style="width:280px;" id="txtRepeatPassword" name="txtRepeatPassword" autocomplete="off" watermark="确认密码" class="text watermark" />
							</span>
							<span class="tipPos">
								<span class="tipLay">
									
								</span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="formBtn"><a href="javascript:void(0);" id ="btnMoilbPhoneRegister" class="btn1 btnsF16" style="margin-left:87px;">保存</a></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>

jpjs.use('@jobDialog, @actions, @form, @checkLogin, @confirmBox', function(m){
	
	var $ = m['jpjob.jobDialog'].extend(m['jpjob.actions'], m['jpjob.jobValidate'], m['jpjob.jobForm']),
		dialog = m['product.checkLogin'].dialog,
		Dialog = m['widge.overlay.jpDialog'],
		confirmBox = m['widge.overlay.confirmBox'],
		validatDialog = new Dialog({
			isAjax: true,
			title: '请输入验证码',
			close: 'x',
			width: 270,
			idName: 'validate_dialog'
		});

	console.log(window.registerData);
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
				match:/^[1]\d{10}$/,			
				remote:{
				  url: "/api/web/user.api?act=mobileRepeat", 
				  type: "post", 
				  dataType: "json",
				  data: { 
					  txtMobilPhone: function() { return $("#txtMobilPhone").val(); },
					  personid:''
				  },
				  dataFilter: function(json) {
					  var result = eval('(' + json + ')');
					  if (result && result.status == 1) {
						  return "true";
					  }
					  else {
						  return "true";
					  }
				  }
			   }
			},
			txtMobileCode:{
				required:true,
				match:/\d{4}$/
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
				remote:'该手机号已被注册，尝试<a href="/person/findpassword.htm">找回密码</a> 或换用<label style="color:#0088CC;" for="radEmailRegister">邮箱注册</label><span class="tipArr"></span>'
			},
			txtMobileCode:{
				required:'请输入验证码<span class="tipArr"></span>',
				match:'请输入正确的验证码<span class="tipArr"></span>'
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
				match:'tipLayErr tipw150'
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
	
	var register = {
		 initialize:function(){
			this.initControl();
			$('.watermark').watermark2();
		 },
		 initControl:function(){
			var fn = register;
			$('#btnSendMsg').on('click', function(){
				fn.sendMsg();
			});

			frmMobilValid.element($('#txtMobilPhone'));

			$('#radEmailRegister').click();
			$('#btnMoilbPhoneRegister').click(function(){
				$(this).submitForm({ beforeSubmit: $.proxy(frmMobilValid.form, frmMobilValid), data: window.phonerepeat.data,success:fn.mobilsuccess,clearForm:false});
			});
			
			$('#txtPassword').on('focus blur', function(){
				fn.pwdDynamic();
			});
			$('#radMoilbRegister').click(function(){
				$('input:text,input:password').val('');
				$('#divEmail').hide();
				$('#divMobilPhone').show();
			});
	
			$('#imgGetImgSrc,#btnGetImgSrc').click(function(){
				fn.changeauthcode(this);
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
	
			$('#txtEmCode').keydown(function(event) {
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
	
			var sourceItems = [];
				
			var schoolsourceItems = [];
				
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
	
			$.setIndex('zindex');
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
			}
		 },
		 sendMsg:function(){		 
			var fn = this;
			if (frmMobilValid.element($('#txtMobilPhone'))) {
				var mobilePhone=$('#txtMobilPhone').val();
				validatDialog.setContent("/person/authCode.html?key=applyReg"+"&txtMobile="+mobilePhone)
				.show().off('loadComplete').on('loadComplete', function(){
					this.oneCloseEvent('#validatSubmit');
				});
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
				modes >>>= 1;
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
				confirmBox.alert(result.msg, null, {title: '保存失败'});
				return;
			}
			if(result && result.status){
				<!--{if $type&&$type=='linkWay'}-->
					confirmBox.timeBomb('注册成功!', {
						name: 'success',
						width: 160
					});
					window.location.reload();
				<!--{else}-->
				var regSussess=dialog.setContent({
					content:("/person/applyRegSuccess.html?jid={$jid}"),
					isOverflow: true
				}).resetSize(650).show();
				<!--{/if}-->
			}
			return;
		},
		changeauthcode:function(obj){
			$(obj).closest('.formMod').find('img').attr('src','/login/verify/seed-542763c15c9b6-r-'+Math.random()+'')
		}
	}
	register.initialize();
	window.registerM = register;

});
</script>


