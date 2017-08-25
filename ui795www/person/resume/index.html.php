<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>我的简历</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20140930" />
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
		var fancboxid = [];
	</script>
	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
	<script type="text/javascript">
		jpjs.config({
			combos: {
				'@editResume': [
					'@validator', 'product.resume.editResume', 'product.resume.editMutilResume'
				]
			}
		});
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
	</script>
	<style type="text/css">
		html{overflow-y: scroll;}
		.colTab tr td{ border-bottom:1px dashed #dadada; }
		.colTab tr td{color:#999;}
		.colTab tr td a{ color:#09c;}
		.colTab tr td .colBtn{ display:inline-block; padding-left:25px;}
		#more_resume{ position: relative; background:#fff;}
		.more-list{z-index:10;}
		.other_resume{height:auto; margin-top:0; border-left:none; border-right:0;}
	</style>
</head>

<body id="body" class="noResize minMain">

	<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000 clearfix">
		<!--#include virtual="/templates/default/person/menu.htm" -->
		<div class="right-main" id="right-main">
			<ul class="clearfix menu-tit" >
				<li id="cssIndex"><a href="/person/resume/index.html">简历管理</a></li>
				<li id="cssVisit"><a href="/person/resume/visit.html">谁浏览了我</a></li>
				<li id="cssDown"><a href="/person/resume/down.html">谁下载了我</a></li>
				<li id="cssPrivacy"><a href="/person/resume/privacy.html">隐私设置</a>{$per['class']}</li>
				<span style="margin:0 0 10px 140px;"><a href="javascript:void(0);" id="refresh" class="<!--{if $resumeInfo['display']==1}-->open<!--{else}-->close<!--{/if}--> btnsF12 btn1" style="padding:0 15px;color:#fff;font-size:12px;">刷新简历</a>(<span>{$resumeInfo['nextTime']}</span>)</span>
			</ul>
			<!--{if $resumeInfo}-->
			<div class="alert-warniong mgt20" style="display:none">
				<a href="javascript:void(0)" class="close">×</a>
				所有简历均可用于投递职位；当隐私设置为“公开”时，仅默认简历可以被企业搜索到
			</div>
			<dl class="resume-item resume-cur" data-id="{$resumeInfo['_rid']}">
				<dt>
					<a href="javascript:void(0)" class="set-top1">默认简历</a>
				</dt>
				<dd class="title">
					<a href="/person/resume.html">{$resumeInfo['rTitle']}</a>
					<p class="perfect">
						<span>完善度：</span>
						<span class="shell">
							<i style="width:{$resumeInfo['resumePrecent']}%"></i>
						</span> <font class="red">{$resumeInfo['resumePrecent']}%</font>
					</p>
				</dd>
				<dd class="number">
					<p> <strong><a href="/person/apply/">{$joinCount}</a></strong>
						投递职位
					</p>
					<p> <strong><a href="/person/resume/visit.html">{$visitCount}</a></strong>
						被浏览
					</p>
					<p>
						<strong><a href="/person/resume/down.html">{$downloadCount}</a></strong>
						被下载
					</p>
				</dd>
				<dd class="time">
					修改时间：
					<br />
					{$resumeInfo['_modTime']}
				</dd>
				<dd class="oper">
					<div class="more">
						<a href="javascript:void(0)" class="gray9">
							更多 <b class="jpFntWes dropIco">&#xf0d7;</b>
						</a>
						<ul class="more-list">
							<li>
								<a href="javascript:void(0)" class="forw-email">转发到邮箱</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="save-computer">保存到电脑</a>
							</li>
							<li>
								<a class="delete default-del" href="javascript:void(0)" title="无法删除默认简历">删除</a>
							</li>
						</ul>
					</div>
					<a href="/person/resume.html?rid={$resumeInfo['_rid']}" target="_blank" class="link">修改</a>
					<a href="/resume.html?rid={$resumeInfo['_rid']}" target="_blank" class="link">预览</a>

				</dd>
			</dl>
			<!--
			<table width="845" border="0" class="colTab">
				<tr>
					<td height="44" colspan="6" align="left" valign="middle">
						<span>
							您还可以创建
							<em id="leftcount">2</em>
							份备用简历（不能被企业搜索到，但可以投递简历），
						</span>
						<a href="javascript:;" id="new-resume">立即创建</a>
					</td>
				</tr>
				<tr class="resume-item other_resume" data-id="13356754">
					<td width="165" height="44" align="left" valign="middle">
						<a target="_blank" href="/resume/update/resume_id-13356754">我的简历20140605</a>
					</td>
					<td width="124" height="44" align="left" valign="middle">完善度：25%</td>
					<td width="161" height="44" align="left" valign="middle">修改时间：2014-06-05</td>
					<td width="96" height="44" align="left" valign="middle">投递职位：0</td>
					<td width="187" height="44" align="left" valign="middle">
						<a href="/resume/update/resume_id-13356754" target="_blank" class="colBtn">修改</a>
						<a class="colBtn" href="/resume/preview/resume_id-13356754" target="_blank">预览</a>
						<a class="colBtn set-top1" href="javascript:void(0)">设为默认</a>
					</td>
					<td width="86" height="44" align="right" valign="middle">
						<div class="more" id="more_resume" style="padding-right:18px;">
							<a href="" class="gray9">
								更多 <b class="jpFntWes" style="font-size:12px;"></b>
							</a>
							<ul class="more-list" style="top: 18px; text-align: left; display: none;">
								<li>
									<a href="javascript:void(0)" class="forw-email">转发到邮箱</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="save-computer">保存到电脑</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="delete">删除</a>
								</li>
							</ul>
						</div>
					</td>
				</tr>
			</table>
			-->
			<!--{else}-->			
			<div class="noData">最近你还没有申请过职位！
				<div class="new-button">
					<a href="/person/createresumeshow.html" class="btn6 btnsF16" id="new-resume">+创建新简历</a>
				</div>
			</div>
			<!--{/if}-->
		</div>
	</div>
	<!--{template person/footer}-->
	<script>
	//关注窗口
	jpjs.use('widge.overlay.jpDialog, widge.overlay.confirmBox',function(Dialog, confirmBox, $){
		/*创建新简历*/
		var createResumeHTML = '<div class="new-resume-alert" id="new-resume-box"><span class="gray9">请选择简历创建方式</span><br /><label class="r-item cur" for="resume1"><input type="radio" name="resume" id="resume1" checked="checked"/>创建全新的简历</label><label class="r-item" for="resume2"><input type="radio" name="resume" id="resume2" />复制已创建的简历</label><ul></ul></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" id="resumeok" href="javascript:">确定</a><a class="btn3 btnsF12" href="javascript:" id="btnAttentClose">取消</a></div>';
		var follower = new Dialog({
				idName: 'resume-dialog',
				title: '创建新简历',
				close: 'x',
				isAjax: false,
				width: 480
			});
		follower.setContent(createResumeHTML);
		follower.query('#resumeok').on('click', function(){
			if (follower.query("#resume1").prop("checked")) {
				$(this).attr('href', '/resume/CreateResume/');
			} else if (follower.query("#resume2").prop("checked")) {
				var id = "";
				id = $("#new-resume-box").find("ul").find("input[type='radio']:checked").closest("li").attr("data-id");
				if (typeof(id) == 'undefined') {
					confirmBox.timeBomb("请选择复制的简历", {
						name : 'fail',
						timeout : 1000,
						width : 200
					});
					return false;
				}
				$.ajax({
					url : '/resume/copyresume/',
					type : "POST",
					dataType : "json",
					data : {
						rid : id
					},
					success : function(data) {
						if (data.status) {
							window.location.href = data.url;
						} else {
							alert(data.msg);
						}
						return false;
					}
				});
			}
		});
		follower.query("#btnAttentClose").on('click',function(){
			follower.hide();
		});
			
			
		$("#new-resume-box .r-item").on('click',function(){
			$("#new-resume-box .cur").removeClass("cur");
			$(this).addClass("cur");
			if($(this).attr("for") =="resume2"){
				$("#new-resume-box").find("ul").show().find("input[type='radio']:eq(0)").prop("checked", true);
			}else{
				$("#new-resume-box").find("ul").hide().find("input[type='radio']:eq(0)").removeAttr("checked");
			}
		});
		$("#new-resume").click(function(){
			$.ajax({
				url : "/resume/CreateNew/",
				type : "POST",
				dataType : "json",
				success : function (data) {
					if (data.ondata) {
						window.location.href = "/person/CreateBasicShow/"
					} else if (data.full) {
						confirmBox.timeBomb("简历达到3份上限", {
							name : "warning",
							timeout : 1000,
							width : 200
						})
					} else {
						follower.show();
					}
				}
			});
		});
		//更多隐藏显示
		$("#right-main .resume-item .more,#more_resume").mouseover(function(){
			var _this = $(this);
			_this.get(0).moreTime && clearTimeout(_this.get(0).moreTime);
			_this.find(".more-list").show();		
		}).mouseout(function(){
			var _this = $(this);
			_this.get(0).moreTime = setTimeout(function(){
				_this.find(".more-list").hide();
			},1000);		
		});
		//转发到邮箱
		var emailHTML = '<div class="forw-email-box" id="forw-email"><strong>将你的简历发送到以下邮箱<span class="error"></span></strong><br /><textarea></textarea><span>多个邮箱地址请用分号“；”隔开，最多可填写10个邮箱</span><br /><div><input type="text" style="display:inline-block;vertical-align:middle;width:80px;" id="catcha" name="catcha" class="text" data-seed="54b396e04f8ab"/><img id="imgCode" src="/api/web/authCode.api?key=resumeCode" style="display:inline-block;vertical-align:middle;margin:0 5px;"/><a id="btnCode" href="javascript:void(0)" style="display:inline-block;vertical-align:middle;">换一换</a></div></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="javascript:" id="btnEmailSubmit">确定</a><a class="btn3 btnsF12" href="javascript:" id="btnEmailClose">取消</a></div>';
		var email = new Dialog({
			idName: 'forw-email',
			title: '转发到邮箱',
			close: 'x',
			isAjax: false,
			initHeight: 100,
			width: 480
		});
	 	email.setContent(emailHTML);
		//验证邮箱
		email.query("#btnEmailSubmit").on("click",function() {
			var emailArr = new Array(),emailVal = $("#forw-email textarea").val();
			if(emailVal.indexOf(";") != -1){
				emailArr = $("#forw-email textarea").val().split(";");
			}else if(emailVal.indexOf("；") != -1){
				emailArr = $("#forw-email textarea").val().split("；");
			}else if(emailVal.indexOf(",") != -1){
				emailArr = $("#forw-email textarea").val().split(",");
			}else if(emailVal.indexOf("，") != -1){
				emailArr = $("#forw-email textarea").val().split("，");
			}else if(emailVal.indexOf("。") != -1){
				emailArr = $("#forw-email textarea").val().split("。");
			}else if(emailVal.indexOf(" ") != -1){
				emailArr = $("#forw-email textarea").val().split(" ");
			}else{
				emailArr.push(emailVal);
			}
			var seed = $("#catcha").attr("data-seed");
			var txtCatcha = $("#catcha").val();
			if (emailArr.length > 10){
				$("#forw-email .error").html("最多可填写10个邮箱！");
				return false;
			}
			for (var i = 0 ;i < emailArr.length;i++){
				if(!/^[a-z0-9]([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z0-9]+([\.][a-z0-9]+)?([\.][a-z0-9]{2,3})?$/i.test(emailArr[i])){
					$("#forw-email .error").html("有不正确的邮箱地址！");
					return false;
				}
			}
			var resume_id = $("#forw-email").attr("data-id");
			$.ajax({
				url : '/explod.html',
				type : "POST",
				dataType : "json",
				data : {
					act : 'sendmy',
					rid : resume_id,
					txtEmail : emailArr.join(";"),
					seed : seed,
					txtCatcha : txtCatcha
				},
				success : function(data) {
					if (data.status>0) {
						confirmBox.timeBomb('邮件发送成功！', {
							name : "success",
							timeout : 1000,
							width : 196
						});
						email.hide();
					} else {
						confirmBox.timeBomb(data.error, {
							name : "warning",
							timeout : 1000,
							width : 175
						});
						if (data.error == "请输入验证码" || data.error == "验证码错误") {
							email.query('#catcha').focus();
							email.query('#catcha').val('');
							email.query("#btnCode").click();
						}
					}
				}
			});
		});
		email.query("#btnEmailClose").on("click",function(){
			email.hide();
		});
		
		email.query("#btnCode").on("click", function() {
			$(this).prev('img').attr('src', '/api/web/authCode.api?key=resumeCode&r='+Math.random());
			return false;
		});
		
		$("#right-main .forw-email").click(function(){
			email.show();
					var resume_id = $(this).closest("dl").attr("data-id");
					 if(resume_id == '' || resume_id == undefined){
						resume_id = $(this).closest("tr").attr("data-id");
					}
			$("#forw-email").attr("data-id",resume_id);
			return false;
		});
		//保存到电脑
		var saveComp = new Dialog({
			idName: 'save-comp',
			title: '保存到电脑',
			close: 'x',
			isAjax: false,
			initHeight: 100,
			width: 460
		});
		
		$(".save-computer").click(function() {
			var resume_id = $(this).closest("dl").attr("data-id");
					if(resume_id == '' || resume_id == undefined){
						resume_id = $(this).closest("tr").attr("data-id");
					}
			saveComp.setContent('<div class="save-comp-box"><span class="gray9">文件另存为：</span><ul class="clearfix"><li class="doc"><a href="/explod.html?act=word&rid=' + resume_id + '">.doc</a></li><li class="html"><a href="/explod.html?act=html&rid=' + resume_id + '">.html</a></li></ul></div>');
			saveComp.show();
			return false;
		});
		//关闭提示
		var warn = $(".alert-warniong");
		warn.find(".close").click(function(){warn.hide();return false;});

		//复制简历
		$("#resume2").on("click", function() {
			$.ajax({
				url : "/resume/resumelist/",
				type : "GET",
				dataType : "json",
				success : function(data) {
					$("#new-resume-box").find("ul").empty();
					var content = "";
					for (var i=0, len=data.length; i<len; i++) {
						content += '<li data-id="' + data[i].resume_id + '"><label for="res' + i + '"><span class="right">完善度：' + data[i].complete_percent + '</span><input id="res' + i + '" type="radio" name="resumes_copy"/>' + data[i].resume_name + '<span class="orange">' + ((data[i].is_default == 1) ? "默认简历" : "") + '</span></label></li>';
					}
					$("#new-resume-box").find("ul").append(content);
				}
			});
		});
		//删除
		var comfirmBox = new Dialog({
			idName: 'save-comp',
			title: '保存到电脑',
			close: 'x',
			isAjax: false,
			initHeight: 40,
			width: 100
		});
		$(".delete").live("click", function(){
			var _this = $(this);
			var parent =_this.parents(".resume-item");
			var resumeid = parent.attr("data-id");
			if(parent.hasClass("resume-cur")){
				return false;
			}
			confirmBox.confirm("简历被删除后无法恢复，是否确定删除？", "", function() {
				var self = this;
				$.ajax({
					url : "/resume/delete/",
					type : "post",
					dataType : "json",
					data : {
						"rid" : resumeid
					},
					success:function(json) {
						if (json.status) {
							/*
							confirmBox.timeBomb("删除成功！",{
								name : 'success',
								timeout : 1000
							});
							*/
							_this.parents(".resume-item").remove();
							$("#createNew").show();
							$("#leftcount").text(parseInt($("#leftcount").text()) + 1);
							self.hide();
						} else {
							confirmBox.timeBomb("操作失败！请刷新重试",{
								name: 'warning',
								timeout:1000
							});
						}
					}
				});
			}, {
				width : 300,
				close : 'x'
			});
			return false;
		});
		//设置默认简历
		$(".set-top1").click(function(){
			var _this = $(this),
				parent =_this.parents(".resume-item")
				resumeid = parent.attr("data-id");
			if(parent.hasClass("resume-cur")){
				return false;
			}else{
				$.ajax({
					url : "/resume/setdefault/",
					type : "post",
					data : {
						'rid' : resumeid
					},
					dataType:"json",
					success:function(json){
						if (json.status) {
							confirmBox.timeBomb("设置成功！",{
								name: 'success',
								timeout:1000
							});
			//						var cur = $(".resume-cur").removeClass("resume-cur");
			//							cur.find(".set-top1").html("设为默认");
			//							cur.find(".delete").removeAttr("title");
			//							cur.find(".delete").removeClass("default-del");
			//						parent.addClass("resume-cur").insertBefore($(".resume-item").eq(0));
			//						parent.find(".delete").attr("title","无法删除默认简历");
			//						parent.find(".delete").addClass("default-del");
			//						_this.html("默认简历");
							window.location.reload();
						} else {
							confirmBox.timeBomb("设置失败！请刷新重试", {
								name: 'warning',
								timeout:1000
							});
						}
					}
				});
			}
			return false;
		});
		var refresh = $("#refresh");
		refresh.on("click", function() {
			if (refresh.hasClass("open")) {
				$.ajax({
					url : "/api/web/person.api",
					type : "POST",
					data : {
						act : 'refresh_resume',
						rid : $(this).closest("tr").attr("data-id")
					},
					dataType : "json",
					success : function(json) {
						if (json.status>0){
							confirmBox.timeBomb("刷新成功", {
								name: 'success',
								timeout : 1000
							});	
							$_this.removeClass("cancel-one").html("").css("float","none");
							$_this.addClass("star1");
						}else{
							if (json.status<0){
								confirmBox.timeBomb("每半小时只能刷新一次简历!", {
									name : 'warning',
									width : 240,
									timeout : 2000
								});
								$("#refresh").parent().find('span').html(json.nextTime+'后可刷新');
							}else{
								confirmBox.timeBomb('对不起，刷新失败，请重新刷新！', {
									name : 'warning',
									width : 240,
									timeout : 2000
								});
							}
						}
					}
				});
				/*
				$.post("/api/web/person.api", function (r) {
					if (r.status) {
						confirmBox.timeBomb("刷新成功", {
							name : 'success',
							timeout : 2000
						});
						refresh.next().text("1天后可刷新");
					} else {
						confirmBox.timeBomb("每天只能刷新一次简历", {
							name : 'warning',
							width : 240,
							timeout : 2000
						});
					}
				});
				*/
			} else {
				confirmBox.confirm('你的简历当前设置为隐藏，不能刷新，请先设置为公开', null, function () {
					window.location.href = "/person/resume/privacy.html"
				}, function() {
					this.hide();
				}, {
					confirmBtn: '<button class="button_a button_a_red">设置</button>',
					cancelBtn: '<button class="button_a cancelbtn">取消</button>'
				});
			}
		});



	});

</script>
</body>
</html>