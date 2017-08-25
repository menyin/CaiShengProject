<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<style>
.ajaxlogin{}
.formMod{ margin-bottom:12px;}
.ajaxlogin .formMod .l{width:25px;}
.ajaxlogin .formMod .r{width:250px;}
.ajaxlogin .formMod .r .formChb{margin:0;}
.ajaxlogin .formMod .r .formText input.text{width:197px;}
.ajaxlogin .formBtn{margin:20px 0 0px 0px;}
.ajaxlogin .formBtn a.btn1{width:160px; text-align:center;}
.ajaxlogin .txt{font-size:12px;margin:0 0 0 0px;color:#666;width:130px; float:left; margin-left:20px;}
.ajaxlogin .txt p{line-height:24px;}
.ajaxlogin .txt p span{ display:block; color:#adadad; font-size:14px; font-family:"微软雅黑";}
.ajaxlogin .txt p a{ display:block; font-size:16px; font-family:"微软雅黑"; color:#0ba6c2; padding-left:24px; margin:10px 0 40px;#margin:15px 0 32px; background:url(http://cdn.{ROOT_DOMAIN}/img/p/login/menbersge.png) left center no-repeat;}
.link span{ padding:0px; display:block; color:#373737; font-size:14px; padding-bottom:10px;}
.ajaxlogin .txt p i{margin:0 10px;}
.formMod .tipTxt{#padding-left:72px; padding-left:78px;}
.link, .nolink.link, .nolink{ border:none; background:none; padding-left:0;}
.formMod .formChb{ float:left; line-height:30px; height:30px;}
.formMod .formChb label input{ display:inline-block; vertical-align:middle;}
#frmUserLogin .link{height:auto}
.dgBox{ padding:30px 20px 30px 55px;}
.form{width:230px; border-right:1px dashed #cbcbcb; float:left;}
.hb_ui_dialog .ui_dialog_title{ background:#477b99; color:#b5d9f3; font-size:16px;}
.hb_ui_dialog .ui_dialog_close{ display:block;width:14px; top:14px; text-indent:-9999em; height:14px;background:url(http://cdn.{ROOT_DOMAIN}/img/p/login/loginclose.png) 0 0 no-repeat;}
.hb_ui_dialog .ui_dialog_close:hover{background:url(http://cdn.{ROOT_DOMAIN}/img/p/login/loginclose.png) -14px 0 no-repeat;}
.hb_ui_dialog{ padding:0px;}
.ajaxlogin .txt p a:hover{ color:#477b99; text-decoration:underline;}
#frmUserLogin .link:hover{ text-decoration:none;}
.formMod .tipTxt {padding-left: 140px;}
.ajaxlogin .formBtn {margin: 0 0 10px 0;}
.yzm {position: absolute; left: 110px;top: 0;}
</style>
<form  id="frmUserLogin"  action="/api/web/<!--{if $com==1}-->company.api<!--{else}-->person.api<!--{/if}-->" method="post">
	<input type="hidden" name="act" value="login">
	<input type="hidden" name="appType" value="1">
	<input type="hidden" name="loginType" value="0">
	<input type="hidden" name="userType" value="<!--{if $com==1}-->2<!--{else}-->1<!--{/if}-->">
	<div class="dgBox ajaxlogin">
		<div class="form">
			<div class="formMod">
				<div class="r">
					<span class="formText">
						<label for="id" class="txtLabel">用户名/手机号/邮箱</label>
						<input type="text" class="text " id="id" name="username" />
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formMod">
				<div class="r">
					<span class="formText">
						<label for="pass" class="txtLabel">密码</label>
						<input type="password" class="text " id="pass"  name="password"/>
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formMod" style="display:none;" id="yzm">
				<div class="r" style="position:relative;">
					<span class="formText">
						<label for="code" class="txtLabel" >验证码</label>
						<input type="text" class="text " id="code" name="authcode" style="width:90px;" />
						<img id="imgCode" src="" alt="验证码" class="yzm" />
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formMod">
				<div class="r" style="position:relative;">
					<span class="tipTxt">
						<!--{if $com==1}-->
							<a href="tencent://message/?Menu=yes&amp;amp;uin=938066631&amp;amp;Service=58&amp;amp;SigT=A7F6FEA02730C98835722A8AC9DC8C615D84ACB35FB95C21FCD96C5A8E87670C48230BDEB91DEEF6E4424E9E87B7B2156956457B823296358B88BFE049EE79E506FE35C59DBEC19583765D22E339C27EAE729A29EE0E0ADEFC44E245BF986572A74455C0F0F8CEC5EB4FB812434F5CDCD83D0A7F705045B6&amp;amp;SigU=30E5D5233A443AB2004ADD98B7D4DE306411157356E49A3B71E80C90F5312CE7D795D7761D5AB663C1B7403C4876BBF696817F5FF01D1177C086510304A5C0F2F033F138FDFD5152" target="_blank" class="forget aGray2">忘记密码</a>
						<!--{else}-->
							<a href="/person/findpassword.htm">忘记密码</a>
						<!--{/if}-->
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="formBtn"><a href="javascript:void(0);" class="btn1 btnsF16" id="btnLogin">登录</a></div>
		</div>
		<div class="txt" >
			<p>
				<span>还没有注册账号？</span>
				<a href="/<!--{if $com==1}-->company<!--{else}-->person<!--{/if}-->/register.html" target="_blank">立即注册</a>
			</p>

			<div class="link">
				<!--{if $com==0}-->
				<span>或使用以下方式登录:</span>
				<a id="btnQQlogin" title="qq登录" target="_blank" href="http://api.597.com/qq/login.api" >
					<img src="http://cdn.{ROOT_DOMAIN}/img/p/login/qqicon.png"/>
				</a>
				<a id="btnWxlogin" title="微信登录" target="_blank" href="http://api.597.com/wechat/login.api" >
					<img src="http://cdn.{ROOT_DOMAIN}/img/p/login/wxicon.png"/>
				</a>
				<!--{/if}-->
			</div>

		</div>
	</div>
</form>

<script type="text/javascript">
try{
	jpjs.use('jpjob.jobDialog, jpjob.actions, jpjob.jobValidate, jpjob.jobForm', function(dialog, actions, validate, form){
		factory(dialog.extend(actions, validate, form));
	});
}catch(e){
	factory($);
}
function factory($){
	$.focusblur('input.text');
	var frmUserLogin = $("#frmUserLogin").validate({
		rules:{
			username:{
				required:true
			},
			password:{
				required:true
			},
			authcode:{
				required:false
			}
		},
		messages:{
			username:{
				required:'请输入用户名 <span class="tipArr"></span>'
			},
			password:{
				required:'请输入密码<span class="tipArr"></span>'
			},
			authcode:{
				required:'请输入验证码<span class="tipArr"></span>'
			}
		},
		errorClasses:{
			username:{
				required:'tipLayErr tipw120'
			},
			password:{
				required:'tipLayErr tipw120'
			},
			authcode:{
				required:'tipLayErr tipw120'
			}
		},
		tipClasses:{
			username:'tipLayTxt tipw120',
			password:'tipLayTxt tipw120',
			authcode:'tipLayTxt tipw120'
		},
		errorElement:'span',
		errorPlacement:function(error,element){
			element.closest('div.formMod').find('.tipPos .tipLay').empty().append(error);
		},
		success:function(label){
			label.text(" ");
		}
	});
	/**
	 * 登录
	 */
	var login ={
		init:function() {
			$('#btnLogin').click(function(){
				$(this).submitForm({ beforeSubmit: $.proxy(frmUserLogin.form, frmUserLogin),success:function(result){
					if(result.status<1){
						if(result.status==-35 || result.status==-38 || result.status==-37){
							$('#yzm').show();
							$('#imgCode').click();
						}
						$.anchorMsg(result.msg,{title:'操作失败',icon: "fail"});
					}else{
						if($('#btnLogin')[0].trigger){
							$('#btnLogin')[0].trigger('close');
						} else {
							$('#btnLogin').closeDialog();
						}

						$.anchorMsg('登陆成功',{title: "操作成功", icon: "success"});
						var callback =  {$callback};
						if(typeof callback !=''&& typeof callback !='undefined'&&typeof callback =='function') {
							//callback();
						}
					}
				},clearForm:false});
			});

			$('#btnQQlogin').click(function(){
				$(this).attr('href',"http://api.597.com/qq/login.api");
			});
		}
	};
	login.init();
	$('#imgCode').click(function(){
		$(this).attr('src','/api/web/authCode.api?key=personLogin');
	});
};
</script>
</body>
</html>
