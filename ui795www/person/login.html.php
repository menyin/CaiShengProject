<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$domainInfo['region_name_short']}597人才网-求职者登录</title>

	<!--[if lt IE 9]>
	<script src="http://cdn.{ROOT_DOMAIN}/js/html5.js?v=20140722"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=20141009" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/login.css?v=20150820" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/icons.css?v=20140312" />
	<script language="javascript" type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/jquery.js?v=20130808"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=20141219"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>

	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/qrcode.min.js?v=2017" charset="utf-8"></script>
	<style>
	.hd{height: 45px;padding: 0px;margin-bottom: 20px;}
	.newm-tab-userlogin {height: 43px;border-bottom: 1px solid #dcdcdc;}
	.newm-tab-userlogin .cur {color: #2e70c1;}
	.newm-tab-userlogin .last { 
	    border-left: 1px solid #dcdcdc;
	}
	.newm-tab-userlogin span {padding: 0 23px;display: inline-block;height: 43px;line-height: 43px;text-align: center;font-size: 16px;color: #666;font-family: "Microsoft YaHei", "微软雅黑";cursor: pointer;}
	#sqrloginimg img {display: inline-block !important;}
	</style>
</head>
<body>
	<header>
		<div class="headerCon">
			<div class="logo">
				<a href="/"></a> <b>求职者登录</b>
			</div>
		</div>
	</header>
	<section class="contentBg" id="content">
		<div class="content" style="width:945px;">

			<div class="lng">
				<div class="lngL" style="margin-top:37px;">
					<div class="popzLbg">
						<div class="popz_code">
							<img src="http://cdn.{ROOT_DOMAIN}/img/p/login/popz_code.png" width="184" height="182" />
							<!-- <span>[ 扫描下载客户端 ]</span> -->
						</div>
						<!-- <a href="/app/p" class="popz3">了解详情</a> -->
					</div>
				</div>
				<div class="lngR">
					<div class="lngBox" style="padding:0px;">
						<!-- <h2 style="text-align:left;font:18px 微软雅黑;margin-bottom:15px;">个人登录</h2> -->
						<div class="hd">
							<!-- <h3>企业登录</h3>
							<div class="err" id="loginMsg" ></div> -->
							<div class="newm-tab-userlogin js-tab-title">
                                <span class="cur" data-type="1">快速登录</span>
                                <span class="last" data-type="2">用户名密码登录</span>
							</div>
						</div>
						<form style="padding:0px 20px;display:none;" method="post" id="frmLogin" action="/api/web/person.api" >
							<input type="hidden" name="cityId" id="cityId" value="{$domainInfo['region_id']}">
							<div id="tipError">
								<div class="testTxt" style="display:none;"> <i class="jpFntWes">&#xf057;</i>
									<div class="clear"></div>
								</div>
							</div>

							<div class="lngForm">
								<div class="formMod">
									<span class="formText">
										<label for="username">手机/邮箱/用户名</label>
										<input type="text" style="width:265px;" id="username" name="username"  class="text" placeholder="手机/邮箱/用户名" />
										<div class="errTxt"></div>
									</span>
									<div class="clear"></div>
								</div>

								<div class="formMod">
									<span class="formText">
										<label for="password">密码</label>
										<input type="password" autocomplete="off" style="width:265px;" id="password" name="password" class="text"  placeholder="密码"/>
										<div class="errTxt"></div>
									</span>
									<div class="clear"></div>
								</div>
								<div class="formMod" id="verifycode" style="margin-bottom:5px;display:none" >
									<span class="formText">
										<input type="text" style="width:80px;" id="catcha" name="catcha" class="text" />
										<div class="errTxt" style="width:83px;"></div>
									</span>
									<span class="yzImg">
										<img id="imgCode" src='' />
									</span>
									<span class="tipTxt">
										<a id="btnCode" href="javascript:void(0)">换一换</a>
									</span>
									<div class="clear"></div>
								</div>

								<div class="othLnk">
									<input type="checkbox" id="perAutoLogin" name="perAutoLogin" />
									<label for="perAutoLogin">自动登录</label>
								</div>
								<div class="btn">
									<a href="javascript:void(0);" id="btnSub" name="btnSub" class="btn4">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</a>
								</div>
								<p class="forgetPwd"><a href="/person/findpassword.htm" class="forget aGray2 ">忘记密码？</a>还没有账号，<a href="/person/register.html" class="font14">立即注册</a></p>
							</div>
						</form>

						<!--扫码登录-->
						<div class="js-logintab-item" style="display: block;">

                            <div id="sqrloginimg" style="text-align: center;padding-top: 15px;padding-bottom: 23px;position: relative">
                            </div>
                            <i id="sqrloginground" style="display: none;width:30px;height: 30px;background: url(http://cdn.{ROOT_DOMAIN}/img/p/login/login-ewm-succ.png) no-repeat;position: absolute;top:45%;left:45%"></i>

                            <p id="sqrloginmsg" style="font-size: 12px;color: #666;text-align: center;font-family: &quot;Microsoft YaHei&quot;, &quot;微软雅黑&quot;">打开597个人APP，扫码登录 | <a href="http://www.597.com/download/app/" target="_blank">下载企业APP</a></p>
                        </div>

						<div class="thrdLogin" style="padding:0px 20px;">
							<div class="link">
								<a href="http://api.597.com/qq/login.api?t={$time}" id="qqLoginTop" title="QQ登录">
									<img src="//cdn.{ROOT_DOMAIN}/www/images/login/login_qq.png"/>
								</a>
								<a href="http://api.597.com/weibo/login.api?t={$time}" id="sinaLoginTop" title="新浪微博登录">
									<img src="//cdn.{ROOT_DOMAIN}/www/images/login/login_weibo.png"/>
								</a>
								<a href="http://api.597.com/wechat/login.api?t={$time}" id="wxLoginTop" title="微信登录">
									<img src="//cdn.{ROOT_DOMAIN}/www/images/login/login_wechat.png"/>
								</a>
								<!--<a href="javascript:void(0)" id="sinaLoginTop" title="新浪微博登录" class="mgl5"><img src="//cdn.{ROOT_DOMAIN}/www/images/login/login_weibo.png" alt="" /></a>-->
							</div>
							<p><a href="javascript:void(0)" id="cityPerLogin" style="display:none;">福州站求职者登录>>></a></p>
						</div>


			</div>
			<!--<div class="regLnk">
			<a href="/register/">免费注册&gt;&gt;</a>
		</div>
		-->
	</div>
	<div class="clear"></div>
</div>
</div>
</section>
<!--{template footer}-->
<script type="text/javascript">
	var frmValid=$("#frmLogin").validate({
		rules:{
			username:{
				required:true
			},
			password:{
				required:true
				//rangelength: [6,16]
			},
			catcha:{
				required:true
			}
		},
		messages:{
			username:{
				required:'<i class="jpFntWes">&#xf057;</i><p>请输入用户名</p><div class="clear"></div>'
				//match:'请输入正确的手机号码<span class="tipArr"></span>'
				//remote:'该手机号已被注册，尝试登录 或换用邮箱注册<span class="tipArr"></span>'
			},
			password:{
				required:'<i class="jpFntWes">&#xf057;</i><p>请输入密码</p><div class="clear"></div>'
				//rangelength:'请输入2-6个字符<span class="tipArr"></span>'
			},
			catcha:{
				required:'<i class="jpFntWes">&#xf057;</i><p>请输入验证码</p><div class="clear"></div>'
			}

		},
		errorClasses:{
			username:{
				required:'testTxt'
				//match:'tipLayErr tipw150',
				//remote:'tipLayErr tipw200'
			},
			password:{
				required:'testTxt'
				//rangelength:'tipLayErr tipw150'
			},
			catcha:{
				required:'testTxt'
			}
		},
		errorElement:'div',
		errorPlacement:function(error,element){
			$('#tipError').html(error);
		},
		success:function(label){
			label.text(" ");
		}
	});
	var login = {
		initalize:function(){
			this.initControl();
		},
		initControl:function(){
			var fn =this;

			if ($.browser.msie && $.browser.version < 10) {
				$('.formText label').show();
				$('input:text,input:password').focus(function() {
					$(this).closest('.formText').find('label').hide();
				});

				$('input:text,input:password').blur(function() {
					var objTxt = $(this).closest('.formText').find('label').html();
					if ($(this).val() == objTxt || $(this).val() == '') {
						$(this).closest('.formText').find('label').show()
					}
				});

				if ($('#username').val()) {
					$('#username').prev().hide();
				}
				if ($('#password').val()) {
					$('#password').prev().hide();
				}
			}


			$('#frmLogin').find(':input').keydown(function(event){
                var e = $.event.fix(event);
                if (e.keyCode == 13){
                    $('#btnSub').click();
                }
            });

			$('#imgCode,#btnCode').click(function(){
				$(this).closest('.formMod').find('img').attr('src','/api/web/authCode.api?key=personLogin&r='+Math.random());
				return false;
			});

			$("#btnSub").click(function() {
				var username,password,catcha,seed,chkSave,cookieTime=0;
				//if(<=2){
				//	if(frmValid.element($('#username'))&&frmValid.element($('#password'))){
				//		username = $("#username").val();
				//		password = $("#password").val();
				//	}
				//}
				//else{
					if(frmValid.element($('#username'))&&frmValid.element($('#password'))){

						if(!$('#verifycode').is(':hidden')){
							if(!frmValid.element($('#catcha'))){
								return;
							}
						}
						username = $("#username").val();
						password = $("#password").val();
						catcha = $("#catcha").val();
						seed = $("#login_seed").val();
						cityId = $("#cityId").val();
						if($("#perAutoLogin").is(':checked')){
							cookieTime = 3600*24*30;
						}
						$("#btnSub").running('正在提交数据');
						$.ajax({
							url:"/api/web/person.api",
							type:"post",
							data:{act:'login',appType:1,loginType:0,userType:1,username:username,password:password,authcode:catcha,cityId:cityId,cookieTime:cookieTime},
							dataType:"json",
							success:function(json){
								if(json.status<1){
									$("#btnSub").stopRunning();
									if(json.status==-45){
										$('#cityPerLogin').click();
										return;
									}
									if(json.status==-35 || json.status==-38 || json.status==-37){
										$('#tipError').html('<div class="testTxt" for="catcha" generated="true"><i class="jpFntWes">&#xf057;</i><p>'+json.msg+'</p><div class="clear"></div></div>').show();
										$('#catcha').focus();
										$('#catcha').val('');
										$('#verifycode').show();
										$('#imgCode').click();
									}
									else{
										$('#tipError').html('<div class="testTxt"><i class="jpFntWes">&#xf057;</i><p>'+json.msg+'</p><div class="clear"></div></div>').show();
										$('#password').val('');
										$('#catcha').val('');
									}
									return;
								}
								$("#btnSub").stopRunning();
								$("#btnSub").html('正在跳转');

								//2017.08.08 zy 课程跳转
								var _url = "{$_GET['_url']}";
								if(_url==""){
									window.location.href = '/person/';
								}else{
									window.location.href = _url;
								}

								//$.anchorMsg(json.success,{title: "操作成功", icon: "success",onclose:function(){

								//}
								//});

								//alert(json.success);
								//alert(json.url2);
								//location.href=/person/;
							}
						});
					}
				//}

				//var username = $("#username").val();
				//if(username=='' || typeof username== 'undefined'){
				//	$('#tipError').html('请填写用户名').closest('.testTxt').show();
				//	$("#username").addClass('error');
				//	return;
				//}
				//var password = $("#password").val();

				//var catcha = $("#catcha").val();
				//var seed = $("#login_seed").val();


			});
		}

	}
	login.initalize();
		/*
		$('#qqLoginTop').click(function(){
			qqBox=$.showModal("http://api.597.com/qq/login.api", {title:'QQ登录',contentType : 'iframe',width:'800', height:'410'});
		});
		$('#sinaLoginTop').click(function(){
			sinaBox=$.showModal("http://api.597.com/weibo/login.api", {title:'微博登录',contentType : 'iframe',width:'800', height:'410'});
		});
		*/
		$('#cityPerLogin').click(function(){
			$.showModal('/file/cityLogin.html?act=per', {title:'{$domainInfo[region_name_short]}站求职者用户名重复请在这里登录'});
		});


	generateQRCode('{$codeUrl}');
	$("#sqrloginimg").attr('title', 'APP扫码登录');

	//登录类型切换
	$(".newm-tab-userlogin span").click(function(){
	    $(this).addClass("cur").siblings().removeClass("cur");
		var index = $(this).attr('data-type');
		if(index==1){
			$("#frmLogin").hide();
			$(".js-logintab-item").show();
		}else{
			$(".js-logintab-item").hide();
			$("#frmLogin").show();
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
                }else if(json.status == -4){
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