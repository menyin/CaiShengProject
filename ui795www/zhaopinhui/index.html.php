<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{$domainInfo['region_name_short']}2015冬季招聘会网络专题活动-{$domainInfo['region_name_short']}597人才网</title>
	<link href="http://cdn.597.com/zph/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<body>
	<div class="top">
		<div class="jwrap">
			<div class="login">
				<a href="/person/login.html" target="_blank">登录</a>
				|
				<a href="/person/register.html" target="_blank">注册</a>
			</div>
			<div class="logo">
				<a href="/" target="_blank"></a>
			</div>
			<div class="qiaomen">
				<a href="javascript:;"></a>
			</div>
		</div>
	</div>
	<div class="bg2">
		<div class="jwrap">
			<div class="top20tit">
				<img src="http://cdn.597.com/zph/images/top20tit.png" />
			</div>
		</div>
	</div>
	<div class="bg_circle">
		<div class="corp">
			<!--{loop $ad1 $l}-->
				<a href="{$l['link_url']}" title="{$l['adName']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/agent/{$l['pic_url']}" alt="{$l['adName']}" width="219" height="219" /></a>
			<!--{/loop}-->
		</div>
	</div>
	<div class="bgbot"></div>
	<div class="bg3" id="bg3" >
		<div class="jwrap">
			<div class="qiaomenbtn" id="qiaomenbtn">我要敲门</div>
			<div class="tc" id="tc" >
				<div class="tit">
					<h4>求职信息填写表</h4>
					<div class="close" id="close">×</div>
				</div>
				<div class="con" >
					<!-- <p>
						<label>姓　　名:</label>
						<input type="text" id="username" maxlength="10" class="bor" />
					</p>
					<p>
						<label>年　　龄:</label>
						<input class="bor" type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" id="age"  maxlength="2"/>
					</p> -->
					<p>
						<label>手 机 号:</label>
						<input id="phone" class="bor" type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" maxlength="11"/>
					</p>
					<p>
						<label>验 证 码:</label>
						<input id="yzm" class="bor" type="text" maxlength="4"/>
						<input type="button" class="yzmBtn" value="免费获取验证码" />
						<span id="spanValiMobile" style="display:none;"></span>
					</p>
					<p>
						<label>密　　码:</label>
						<input class="bor" type="password" id="password" maxlength="40"/>
					</p>
					<p>
						<label>确认密码:</label>
						<input class="bor" type="password" id="password2" maxlength="40"/>
					</p>
					<!-- <p>
						是搜才网会员吗？
						<input type="radio" name="isvip" checked="checked" value="1"  />
						是
						<input type="radio" name="isvip" value="0"  />
						否
					</p> -->
					<input type="hidden" id="zphCode" name="zphCode" value="{$_SESSION['zphCode']}">
					<input type="button" class="tj" value="立即注册" onclick="ValidateForm();" />
				</div>
			</div>
		</div>
	</div>
	<div class="bg4">
		<div class="jwrap">
			<div class="zhidetit">
				<img src="http://cdn.597.com/zph/images/zhide.png" />
			</div>
			<div class="corplist">
				<ul id="joblist" data-page="1">
					<!--{loop $jobList $k $l}-->
						<li>
						<p><a class="job" target="_blank" href="/job-{$l[jid]}.html" title="{$l[jname]}">
						{$l[jname]}</a><span class="salary">{$l[salary]}</span></p>
						<p>招聘{$l['jobNumber']}</p>
						<p>工作经验{$l['jobWorkYear']}</p>
						<p><a class="gs" target="_blank" href="/com-{$l[cid]}/" title="{$l[cname]}">
						{$l[cname]}</a></p>
						<p class="toudibtn"><a href="/job-{$l[jid]}.html" target="_blank">立即投递</a></p>
						<span class="hxz"></span>
						</li>
					<!--{/loop}-->
				</ul>
			</div>
			<div class="clear"></div>
			<div class="corpmore" style="display:none">正在加载...</div>
			<div class="nomore" style="display:none"></div>
		</div>
		<div class="clear"></div>
		<div id="markfoot" style="position: relative;"></div>
		<div class="footer">
			©2015 597人才网 版权所有
		</div>
	</div>
	<div class="gotop"></div>
	<div class="weixin"></div>
</body>
</html>
<script type="text/javascript" src="http://cdn.597.com/zph/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
	$(".qiaomen").click(function() {
		$("body, html").animate({
			scrollTop: $('.bg3').offset().top
		});
	})
	$("#qiaomenbtn").click(function() {
		$("#tc").show();
	})
	$("#close").click(function() {
		$("#tc").hide();
	})
	$(".gotop").click(function() {
		$("body, html").animate({
			scrollTop: "0px"
		});
		$(window).scroll(function() {
			if ($(window).scrollTop() > 0) {
				$(".gotop").fadeIn();
			} else {
				$(".gotop").fadeOut();
			}
			return this;
		})
	});
	$("#hbsc").attr("src", $("#hbsc").attr("src") + "?_" + Math.random());

	function ValidateForm() {
		var phone =  $.trim($("#phone").val());
		var yzm = $.trim($('#yzm').val());
		var pwd = $.trim($('#password').val());
		var pwd2 = $.trim($('#password2').val());
		var code_pattern = /^\d{4,6}$/;

		if (!/^1[3|4|5|7|8]\d{9}$/.test(phone)) {
			alert("手机号码错误！");
			$('#phone').focus();
			return false;
		}
		
		if (yzm.length == 0) {
			alert("请填写验证码");
			$('#yzm').focus();
			return false;
		}

		if(!code_pattern.exec(yzm)){
			alert('验证码格式不正确!');
			$('#yzm').focus();
			return false;
		}

		if (pwd.length == 0) {
			alert("请填写密码！");
			$('#password').focus();
			return false;
		}

		if (pwd2.length == 0) {
			alert("请填写确认密码！");
			$('#password2').focus();
			return false;
		}

		if(pwd !== pwd2){
			alert('两次输入的密码不一致！');
			return false;
		}


		$.ajax({
			url: '/api/web/person.api?act=register',
			type: 'post',
			dataType: 'json',
			data: {
				origin:0,
				txtAppType:1,
				txtMobilPhone: phone,
				txtMobileCode: yzm,
				txtPassword: pwd,
				txtRepeatPassword: pwd2,
				operate:'phone'
			},
			success : function(data){
				if(data.status > 0){
					alert('注册成功!');
					window.location.href = '/person/';
				}else{
					alert(data.msg);
					return;
				}
			}
		});	
		


		// var isvip = $("input[name='isvip']:checked").val();
		// var zphCode = $.trim($("#zphCode").val());
		// AddPerson(username, age, phone, email, jobname, isvip, zphCode);
	}

	// 发送验证码
	$('.yzmBtn').click(function(){
		var phone = $.trim($("#phone").val());
		if (!/^1[3|4|5|7|8]\d{9}$/.test(phone)) {
			alert("手机号码错误！");
			$("#phone").focus();
			return false;
		}
		
		$.ajax({
			url: '/api/web/user.api',
			type: 'post',
			dataType: 'json',
			data : { act: 'mobile_check_reg', _txtMobile: phone,type:'reg'},
			success : function(data){
				if(data.status <1){
					alert(data.msg);
					return;
				} else {

					alert("已发送验证码短信到您的手机！");
					//$('.yzmBtn').attr('disabled',true).addClass('disable');
					$('#spanValiMobile').html('<i>120</i>秒后重新获取').show();
					$('.yzmBtn').hide();
					interval = window.setInterval(countdown,1000);
					//count();
				}
			},
			error : function(){
				alert('手机号码发送失败，请重试！');
			}
		});	

		function countdown(){
			var seconds=$('#spanValiMobile').find('i').html();
			seconds = parseInt(seconds);
			if(seconds>0){
				seconds--;
				$('#spanValiMobile').find('i').html(seconds);
			}else{
				window.clearInterval(interval);
				$('#spanValiMobile').hide();
				$('.yzmBtn').show();
			}
		}
		
	});

	// function AddPerson(username, age, phone, email, jobname, isvip, zphCode) {
	// 	$.post("action.html", {
	// 		"username": encodeURIComponent(username),
	// 		"age": age,
	// 		"phone": phone,
	// 		"email": encodeURIComponent(email),
	// 		"jobname": encodeURIComponent(jobname),
	// 		"isvip": isvip,
	// 		"zphCode": zphCode,
	// 		"_": Math.random()
	// 	}, function(res) {
	// 		//提交成功
	// 		if (res.status == "1") {
	// 			$("#tc").hide();
	// 			$("#username,#age,#phone,#email,#jobname").val("");
	// 		}
	// 		alert(res.msg);
	// 	}, "json");
	// }
	//个人信息无限加载
	var loaded = false;
	var top_pianyi = 300;
	var topdom = 0; //获取匹配元素在当前视口的相对偏移,默认0
	function GetJobList() {
		var windowheight = parseInt($(window).scrollTop() + $(window).height());
		if (!loaded && windowheight >= topdom) {
			var page = $("#joblist").data("page");
			$.ajax({
				url: "action.html?act=getJobList&r=" + Math.random(),
				type: "get",
				data: {
					"page": page
				},
				beforeSend: function() {
					loaded = true; //避免重复加载
					$(".corpmore").show();
					$(".nomore").hide();
				},
				success: function(res) {
					$(".corpmore").hide();
					loaded = false;
					$("#joblist").append(res);
					var nextpage = parseInt($(".page:last").val()) + 1;
					$("#joblist").data("page", nextpage);
					if (nextpage > parseInt($(".allpage:last").val())) {
						//停止加载变量
						loaded = true;
						$(".nomore").show();
					}
					topdom = $("#markfoot").offset().top - top_pianyi;
				}
			});
		}
	}
	//$(window).scroll(GetJobList);
	//GetJobList();
</script>