<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_求职中心_我的简历</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=2015090201" />
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
	</script>

	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>

	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
	<script type="text/javascript">
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
	</script>
	<style type="text/css">
		.right-main {position: relative; <!--{if $resumeStr}-->padding-top: 130px;<!--{else}-->padding-top: 30px;<!--{/if}-->}
		.guide-box {left:0;}
		.banner {width: 1000px; margin:0 auto; overflow: hidden;margin-top: 3px; height: 70px; position: relative;}
		.banner .slider{position: relative; width: 906px; margin-left: 94px;}
		.banner .slider li {width:100%; position: absolute; left:0; top:0;}
		.banner img {display: block; margin:0 auto; }
		.imgArr {position: absolute; right:10px; bottom: 10px; z-index: 100;}
		.imgArr li { float: left; width: 20px; height:6px; background: #fff;margin-right: 8px;cursor: pointer; }
		.imgArr li.cu { background: #f60; color: #fff;  opacity:0.9;}
		.refreshResume{padding:5px 10px 10px 10px;}
		.refreshResume .warniong{color: #555555;position: relative;padding: 5px;font-size: 12px;line-height: 22px;overflow: hidden !important;background-color: #fffce5;border: 1px solid #f0e5ba;zoom: 1;text-align: left;}
		.refreshResume .lastUpdateTime{padding:15px 10px 10px 5px; font-size: 14px;}
		.refreshResume .lastUpdateTime span{color: #FF6600; font-size: 16px; font-weight: bold;}
		.refreshResume .resumeLinkway{padding:5px; line-height: 40px; font-size: 14px;}
		.refreshResume .resumeLinkway span{margin-left:20px; font-size: 12px; color: #999;}
		.refreshResume .tip{margin:20px 10px 20px 0px;font-size: 12px;color: #888;line-height: 1.75;}
	</style>
</head>

<body id="body" class="noResize minMain">
	<!--#include virtual="/templates/default/person/header.htm" -->
	<!--{if $ad22List}-->
	<div id="topBanner" class="banner">
		<ul class="slider">
			<!--{loop $ad22List $l}-->
			<li><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}" alt="" width="100%" height="70"></a></li>
			<!--{/loop}-->
		</ul>
	</div>
	<!--{/if}-->

	<div class="w1000 clearfix" id="" style="<!--{if $ad22List}-->margin-top:3px;<!--{/if}-->">
		<!--#include virtual="/templates/default/person/menu.htm" -->

		<div class="right-main" >
				<!--{if $resumeStr}-->
				<div class="guide-box" id="guide">
					<dl class="clearfix" style="display:block" data-id="{$resumeStr['id']}">
						<dt class="icon"></dt>
						<dd class="text">
							<p class="alert">添加您的{$resumeStr['str']}，让机会来找你！</p>
							<p>企业HR可能会通过您的{$resumeStr['str']}找到你；您可能需要更适合您的岗位</p>
						</dd>
						<dd class="btn">
							<a href="/person/resume.html#{$resumeStr['style']}" class="set">添加{$resumeStr['str']}</a>
							<a href="javascript:void(0)" class="ign" >忽略</a>
						</dd>
					</dl>
				</div>
				<!--{/if}-->
				<div class="personal-box clearfix">
					<p class="infor">
						<span id="showWeixin" class="right" ><a style="color:#6fb10f" href=""><img style="vertical-align: middle;margin-right: 5px" src="http://cdn.597.com/www/img/v2/resumeM/weixin1.jpg" />请绑定微信</a></span><span class="right" id="txtweixinaccount" style="display:none;" >已绑定微信</span>
						<strong class="name">{$dateName}<!--{if $indexResume[realname]}-->，{$indexResume['realname']}！<!--{/if}--></strong><a class="<!--{if $memberInfo['mobile']}-->has<!--{else}-->no<!--{/if}-->" href="/person/account/" title='手机已验证'><!--{if $memberInfo['mobile']}--><i class="tel"></i>{$memberInfo['mobile']}<!--{else}--><i class="notel"></i>未填写<!--{/if}--></a><a href="/person/account/" class="<!--{if $memberInfo['email']}-->has<!--{else}-->no<!--{/if}-->" title='点击验证邮箱'><!--{if $memberInfo['email']}--><i class="email"></i>{$memberInfo['email']}<!--{else}--><i class="noemail"></i>未填写<!--{/if}--></a>
					</p>
				<!--{if $isresume}-->
					<ul class="degree clearfix">
						<li>
							<a href="/person/resume.html">
								<font class="red">{$indexResume['resumePrecent']}%</font>
								<span>简历完善度</span>
							</a>
						</li>
						<li>
							<a href="/person/resume/privacy.html">
								<!--{if $indexResume['display']}-->
								<i class="key open"></i>
								<span>简历已公开</span>
								<!--{else}-->
								<i class="key close"></i>
								<span>简历已保密</span>
								<!--{/if}-->
							</a>
						</li>
						<li>
							<a href="/person/apply/" title="申请的职位">
								<font>{$joinCount}</font>
								<span>申请的职位</span>
							</a>
						</li>
						<li>
							<a href="/person/invite/" title="收到的邀请">
								<font>{$inviteCount}</font>
								<span>面试邀请</span>
							</a>
						</li>
						<li>
							<a href="/person/resume/visit.html" title="简历被浏览量">
								<font>{$visitCount}</font>
								<span>简历被浏览</span>
							</a>
						</li>
						<li>
							<a href="/person/favourite/" title="职位收藏">
								<font>{$favoriteCount}</font>
								<span>职位收藏</span>
							</a>
						</li>
					</ul>
				<!--{else}-->
					<div class="degree no-jobbox">
						<a href="/person/createresumeshow.html" class="btn5 btnsF14 right">立即创建简历</a>
						<p class="">你还没有创建简历，无法投递职位</p>
					</div>
				<!--{/if}-->
				<a href="/person/account/photo.html" class="headImg">
					<img src="{$indexResume['attachment']}" style="width:120px; height:150px;"/>
					<div class="headImgTip" style="display:block;"><p class="uploadText">上传头像</p></div>
				</a>
			</div>
			<!--{if $isresume}-->
			<!--{if $indexResume['ischeck']==2}-->
				<div style="border:1px #e4e4e4 solid; margin:20px 0px 20px 0px; padding:20px; color:#f00; font-size:14px;font-weight:bold; line-height:30px;">
				<p>您的简历未通过审核，屏蔽原因：{$reply['reply']} 请验证您的手机号码-><a href="/person/account">立即验证</a></p>
				<p>或联系客服：0592-5899196</p>
				</div>
			<!--{/if}-->
			<div class="job-box clearfix">
				<p class="link"><a href="/person/resume.html" class="btn5 btnsF14">修改简历</a><span>{$indexResume['modTime']}</span></p>
				<p class="link"><a href="javascript:void(0)" class="btn4 btnsF14 <!--{if $indexResume['display']==1}-->open<!--{else}-->close<!--{/if}-->" id="refresh" style="width:160px;">刷新简历</a><span id="curRefresh">上次刷新<i>{$indexResume['_updateTime']}</i></span></p>
				<p class="text">求职意向：{$indexResume['joinOffice']}(<!--{if $indexResume['joinType']==1}-->全职<!--{/if}--><!--{if $indexResume['joinType']==2}-->兼职<!--{/if}--><!--{if $indexResume['joinType']==3}-->实习<!--{/if}-->)<!--{if $workListAll>0}--><br />最近工作：{$indexResume['workListInfo'][$workListAll]['workOffice']} | {$indexResume['workListInfo'][$workListAll]['workName']}<!--{/if}--><!--{if $indexResume['eduListInfo'][0]}--><br />学历教育：{$indexResume['eduListInfo'][0]['eduBackGroundInfo']} | {$indexResume['eduListInfo'][0]['eduName']} | {$indexResume['eduListInfo'][0]['eduSpecialty']}<!--{/if}--></p>
			</div>
			<!--{/if}-->
			<div style="position:relative">
				<!--
				<a style="display: inline-block; width: 116px; height: 20px;position:absolute;right:250px;top:6px" target="_blank" href="#"><img src="http://cdn.597.com/www/img/v2/outer/shebao-p.jpg" /></a>
				-->
				<ul class="clearfix menu-tit">
					<li class="cur"><a href="javascript:void(0)">适合你的工作</a></li>
					<!--
					<li><a href="javascript:void(0)">你关注的工作</a></li>
					<li><a href="javascript:void(0)">急聘中的职位</a></li>
					<li class="change"><a href="javascript:void(0)">换一换</a></li>
					-->
				</ul>
			</div>
			<div class="job-itemlist" style="display: block" data-type="1" data-list-type="intelligence" data-offset="16">
				<div class="alert-warniong mgt10">
					<a href="" class="close">×</a>
					根据您的求职意向，我们为您找到了一些可能适合您的工作机会！<a href="/person/resume.html#jobInfor">设置求职意向</a>
				</div>
				<ul class="job-list clearfix">
					<!--{loop $searchs $job}-->
					<li>
						<p><a target="_blank" href="/job-{$job['_jid']}.html">{$job['jname']}</a></p>
						<p>{$job['cname']}</p>
						<p><span class="green">{$job['salary']}</span></p>
					</li>
					<!--{/loop}-->
				</ul>
				<p class="more-job"><a target="_blank" href="/zhaopin/?q={$indexResume['joinOffice']}">更多适合我的工作 >></a></p>
			</div>
			<div class="job-itemlist" data-type="2">
				<div class="alert-warniong mgt10">
					<a href="" class="close">×</a>
					根据您的关注设置，我们为您找到了一些你可能感兴趣的工作机会！<a href="/positionattention/">设置我关注的职位</a>
				</div>
				<div class="noData" style="height:131px;margin-top:100px;">你还没有关注的职位！</div>
			</div>
			<div class="job-itemlist" data-type="3">
				<div class="alert-warniong mgt10">
					<a href="" class="close">×</a>
					以下是正在急聘的职位，快速入职的几率更大哦！
				</div>
				<ul class="job-list clearfix">
				</ul>
				<p class="more-job"><a target="_blank" href="/zhaopin/?q={$indexResume['joinOffice']}">更多急聘中的职位 >></a></p>
			</div>
		</div>
	</div>
	<input type="hidden" name="autoRefresh" id="autoRefresh" value="{$indexResume['isAutoRefresh']}">
	<!--{template person/footer}-->
<style type="text/css">
	.popWeixin{width:300px;background-color: #4abaa4;border-radius:4px;padding:10px;position: absolute;display: none;z-index: 5;box-shadow:1px 1px 18px 1px #d3e9e7;}
	.popWeixin dt{float:left;width:100px;height: 100px}
	.popWeixin dd{margin-left: 120px;font-size:16px;font-family:"微软雅黑"; color: #fff;}
	.popWeixin .close{color: #91ffe9;font-size:20px;position: absolute;right:10px;top:5px;}
        .popWeixin dt img{ display:block; border:1px solid #d3d3d3;background-color: #fff;}
	.popWeixin .close:hover{color:#c8fff4;}
	#mask{position: absolute;z-index: 4;background:#000;opacity:0.4;filter:alpha(opacity=40);top:0px;left:0px}
</style>
<div class="popWeixin" id="popWeixin">
	<a class="close" href="javascript:void(0)">×</a>
	<dl class="clearfix">
		<dt><img src="http://cdn.597.com/img/common/wxCode.png" height="100" width="100" /></dt>
		<dd><br />微信扫一扫<br />入职更快速！<br />第一时间收到面试通知</dd>
	</dl>
	<p style="margin-top: 10px;display:block; text-align: center; color:#0f6252">注：请用您本人的微信号扫二维码</p>
</div>
<div id="mask" style="display:none;"></div>


	<script>


		var page = 1;
		jpjs.use('tools.cookie , widge.overlay.confirmBox, widge.overlay.jpDialog, widge.validator.form, module.verifier',function(cookie, confirmBox, Dialog, validators, verifier, $){
			var tit = $(".menu-tit li");
			tit.click(function(){
				var _this = $(this);
				if(_this.index() < 3){
					tit.removeClass("cur");
					_this.addClass("cur");
					$(".job-itemlist").hide().eq(_this.index()).show();
					return false;
				}
			});
			var altWar = $(".alert-warniong");
			altWar.click(function(e){
				if($(e.target).hasClass("close")){
					$(this).remove();
					return false;
				}
			});

			//忽略
			$("#guide .ign").click(function() {
				var dl = $(this).parents("dl");
				$.ajax({
					url : "/person/index.html",
					type : "POST",
					dataType : "json",
					data : {
						act : 'ignGuide',
						type : dl.data("id")
					},
					success : function() {
						dl.hide();
						if (dl.next("dl").length <= 0) {
							$("#alertMain").removeAttr("id");
						}
						$('.right-main').css('paddingTop',30);
					}
				});



				return false;
			});
			//换一换
			$(".change a").on("click", function() {
				var $_this = $(this);
				var $_sel = $(".job-itemlist").not(":hidden");
				$.ajax({
					url : "/index/change/",
					type : "POST",
					dataType : "json",
					data : {
						type : $_sel.attr("data-type"),
						page : (page + 1),
						offset : $_sel.attr("data-offset"),
						list_type : $_sel.attr("data-list-type")
					},
					success : function(data) {
						if (data.state) {
							if (data.data != false) {
								$_sel.find(".job-list").empty();
								var string = ""
								for (var i = 0; i < data.data.length; i++) {
									var jp = "";
									if (data.data[i].is_urgent == 1) {
										jp = '<em class="icons16_jipin" title="该职位正在急聘中..."></em>';
									}
									string += "<li><p>" + jp + "<a target='_blank' href=" + data.data[i].url + ">" + data.data[i].station + "</a></p>" + data.data[i].company_name + "<br />" + data.data[i].min_salary + "-" + data.data[i].max_salary + "元/月 - " + data.data[i].area_name + "</li>";
								}
								page = data.page;
								$_sel.attr("data-list-type", data.type);
								$_sel.attr("data-offset", data.offset);
								$_sel.find(".job-list").append(string);
							}
						} else {
							alert(data.msg);
						}
					}
				});
			});
			//头像文字显示效果
			// $(".headImg").hover(function () {
			// 	$(".headImgTip").show();
			// }, function() {
			// 	$(".headImgTip").hide();
			// });

			var istimingget = true;
			var getbindaccountresult = function() {
				if(!istimingget) {
					return;
				}
				$.getJSON('/api/web/person.api?act=weixinInfo',function(result ) {
					if(result.status>0) {
						$('#txtweixinaccount').show();
						$('#showWeixin').hide();
						$("#popWeixin").hide();
						$("#mask").hide();
						istimingget = false;
					}
					setTimeout(getbindaccountresult, 1000);
				});
			}
			//微信
			var weixin = $("#popWeixin"),mask = $("#mask");
			weixin.css({top:$("#showWeixin").offset().top+25,left:$("#showWeixin").offset().left-210});
			mask.css({width:document.documentElement.clientWidth,height:document.body.clientHeight});
			$("#showWeixin").click(function(){
				weixin.show();
				mask.show();
				istimingget = true;
				getbindaccountresult();
				return false;
			});

			// 微信窗口显示 是否过期
			var isWeixinWinExpires = cookie.get('weixinwinshow11595237');

			if(!isWeixinWinExpires&&true) {
				weixin.show();
				mask.show();
				getbindaccountresult();
			}
			weixin.find('.close').click(function(e){
				if(!isWeixinWinExpires) {
					var d = new Date();
					d.setDate(30+d.getDate());
					cookie.set('weixinwinshow11595237', true,{expires:d});
					isWeixinWinExpires = true;
				}
				weixin.hide();
				mask.hide();
				istimingget = false;
			});
			/*
			mask.click(function(e){
				if(!isWeixinWinExpires) {
					var d = new Date();
					d.setDate(30+d.getDate());
					cookie.set('weixinwinshow', true,{expires:d});
					isWeixinWinExpires = true;
				}
				weixin.hide();
				mask.hide();
				istimingget = false;
			});*/

			//刷新简历弹窗
			var resumeRefreshDialog = new Dialog({
				idName: 'set-refreshResume',
				title: '刷新简历',
				close: 'x',
				width: 530
			});
			resumeRefreshDialog.before('show', function(e){
				var linkPhone	   = this.query("#linkPhone"),
					autoRefresh    = this.query("#autoRefresh"),
					refreshResume  = this.query('#refreshResume'),
					lastUpdateTime = this.query('#lastUpdateTime'),
					flag;
				//自动刷新
				autoRefresh.on("click",function(){
					if($(this).is(":checked")){
						flag = 1;
					}else{
						flag = 0;
					}
					$.ajax({
						url:"/api/web/person.api",
						type:"POST",
						data:{
							act : 'isAutoRefresh',
							flag : flag
						},
						dataType : "json",
						success : function(json) {
							var returnType='success';
							if(json.status<1) returnType='warning';
							confirmBox.timeBomb(json.msg, {
								name: returnType,
								width : 200,
								timeout : 1000
							});
							$("#autoRefresh").val(json.flag);
						}
					})
				});
				//刷新简历
				refreshResume.on("click",function(){
					if(!linkPhone.val()||linkPhone.val()==''||typeof(linkPhone.val())=='undefined'){
						confirmBox.timeBomb('请先填写手机联系方式', {
							name : 'warning',
							width : 240,
							timeout : 2000
						});
						return;
					}

					$.ajax({
						url : "/api/web/person.api",
						type : "POST",
						data : {
							act : 'refresh_resume'
						},
						dataType : "json",
						success : function(json) {
							if (json.status>0){
								confirmBox.timeBomb("简历刷新成功", {
									name: 'success',
									width : 200,
									timeout : 1000
								});
								lastUpdateTime.html(json.nowTime);
								$("#curRefresh").find("i").html(json.nowTime);
							}else{
								if (json.status<0){
									confirmBox.timeBomb("每半小时只能刷新一次简历,"+json.nextTime+"后可刷新", {
										name : 'warning',
										width : 400,
										timeout : 3000
									});
								}else{
									confirmBox.timeBomb(json.msg, {
										name : 'warning',
										width : 240,
										timeout : 2000
									});
								}
							}
						}
					});
				})
			});
			var refresh = $("#refresh");
			refresh.on("click", function() {
				if (refresh.hasClass("open")) {
					var _updateTime = '{$indexResume["_updateTime"]}',
						autoRefreshType;
					if(typeof($("#lastUpdateTime").html())!='undefined'){
						_updateTime = $("#lastUpdateTime").html();
					}
					if($("#autoRefresh").val()==1){
						autoRefreshType = "checked";
					}
					var refreshHtml = '<div class="refreshResume"><div class="warniong">温馨提示：HR会根据您填写的信息来与您取得联系，如果联系方式有误，请及时更正。</div><div class="lastUpdateTime">上次刷新时间：<span id="lastUpdateTime">'+_updateTime+'</span></div><div class="resumeLinkway"><p>手机：<input type="text" name="linkPhone" id="linkPhone" class="text" style="width:160px; height:26px; color:#999;" readonly="readonly" value="{$memberInfo["mobile"]}"></p><p>邮箱：<input type="text" name="linkEmail" id="linkEmail" class="text" style="width:160px; height:26px; color:#999;" value="{$memberInfo["email"]}" readonly="readonly"><span><input type="checkbox" name="autoRefresh" id="autoRefresh" value="1" '+autoRefreshType+'>登录自动刷新简历</span></p><p style="margin-top:20px;"><a href="/person/account/" class="btn4 btnsF14 open">更新联系方式</a><a href="javascript:void(0)" id="refreshResume" class="btn5 btnsF14">刷新简历</a></p></div><div class="tip"><p>温馨提示：<br>1.刷新前请核对联系方式，如联系方式有变，请更改后再进行刷新；<br>2.登录自动刷新简历功能开启后，在每天第一次登录时，将自动刷新简历；<br>3.每天如果没有更新简历，在修改简历或投递简历，系统一天自动刷新一次简历；</p></div></div>';
					resumeRefreshDialog.setContent({
						content:refreshHtml,
						title:'刷新简历'
					}).show();
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
			// 刷新简历消息引导
			var refreshtip = $("#refreshtip");
			refreshtip.on("click", function() {
				$.post("/resume/refreshtip/", function (r) {
					refreshtip.parent().parent().hide();
				});
			});

			// 刷新简历弹窗
			/*
			var istimingget = true;
			var getbindaccountresult = function() {
				if(!istimingget) {
					return;
				}
				$.getJSON('/index/getbindaccountresult/',function(result ) {
					if(result.status) {
						$('#txtweixinaccount').show();
						$('#showWeixin').hide();
						$("#popWeixin").hide();
						$("#mask").hide();
						istimingget = false;
					}
					setTimeout(getbindaccountresult, 1000);
				});
			}
			*/

			var phone = new Dialog({
				idName: 'set-phone',
				title: '设置手机号码',
				close: 'x',
				width: 480
			});
			var pWidth = 70,
				fontWidth = 18,
				isRemoteClass = true,
				isSendClick = true,
				successMobile, successCode, phoneTimer,
				phoneTime = 0,
				phoneSuccessMessages = {
					only: '该号码未使用，可以绑定',
					unique: '该号码已被其他账号占用，继续操作可以从其他账号解绑并清除'
				},
				codeSuccessMessage = '成功绑定手机号码',
				codeRules = {
					required: true,
					number: true,
					range: [4, 4]/*,
					remote: codeRemoteURL
					*/
				},
				codeErrorMessages = {
					required: '请填写短信验证码',
					number: '请填写数字',
					range: '验证码为4位',
					remote: '输入正确的验证码'
				},
				allClass = 'success-msg warning-msg error-msg',
				successClass = 'success-msg',
				warningClass = 'warning-msg',
				errorClass = 'error-msg',
				phoneValidators,
				mobileIcon, codeIcon;

			function remoteCode(f){
				if(!f){
					phoneValidators.addRules('txtValidateCode', codeRules);
					phoneValidators.addErrorMessages('txtValidateCode', codeErrorMessages);
					return;
				}
				phoneValidators.removeRules('txtValidateCode');
			}
			phone.before('show', function(e){
				var txtMobile = this.query('#phone-value'),
					labelMobile = txtMobile.next().next(),
					txtValidateCode = this.query('#yzm-value'),
					phoneValue = txtMobile.val(),
					labelValidate = txtValidateCode.parent().children('.msg'),
					btn = this.query('#getYZM'),
					btnSubmit = this.query('#btnPhoneSubmit'),
					isCodeSend = false;

				mobileIcon = txtMobile.next();
				codeIcon = labelValidate.prev();

				phoneValidators = new validators({
					element: this.query('form'),
					errorElement: 'span',
					rules: {
						txtMobile: {
							required: true,
							mobile: true,
							remote: {
								url: "/api/web/user.api",
								async: true,
								data: {
									act:'mobileRepeat',
									_txtMobile: function() {
										return phone.query('#phone-value').val();
									}
								},
								callback: function(e){
									if(e.status>0) e.success="true";
									isRemoteClass = e.success === "true";
									return true;
								}
							}
						}
					},
					errorMessages: {
						txtMobile:{
							required: '请输入手机号码',
							mobile: '请输入正确的手机号码'
						}
					},
					keepKey: true
				});

				phoneValidators.on('focus', function(e){
					if(e.name === "txtMobile"){
						phoneValue = txtMobile.val();
					}
				});
				phoneValidators.on('blur', function(e){
					if(e.name === "txtMobile" && txtMobile.val() !== phoneValue){
						phoneValidators.resetElement(txtValidateCode);
						phoneValidators.clearRemoteCache(txtValidateCode);
					}
				});
				phoneValidators.on('clearItem', function(e){
					if(e.name === "txtMobile"){
						mobileIcon.hide();
					} else {
						codeIcon.hide();
					}
					e.label.removeClass(allClass);
				});
				phoneValidators.on('invalid', function(e){
					if(e.name === "txtMobile"){
						mobileIcon.hide();
						if(e.ruleType === "required"){
							if(!this.isFormSubmitted() && !e.label.hasClass(errorClass)){
								e.label.removeClass(allClass).empty();
							} else {
								e.label.removeClass(allClass).addClass(errorClass).html('请输入手机号码');
							}
							return;
						}
					} else {
						codeIcon.hide();
						if(e.ruleType === "required"){
							if(!this.isFormSubmitted() && !e.label.hasClass(errorClass)){
								e.label.removeClass(allClass).empty();
							} else {
								e.label.removeClass(allClass).addClass(errorClass).html('请填写短信验证码');
							}
							return;
						}
					}
					e.label.removeClass(allClass).addClass(errorClass);
				});
				phoneValidators.on('pass', function(e){
					e.label.removeClass(allClass);
					if(e.name === "txtMobile"){
						if(isRemoteClass){
							mobileIcon.css('display', 'inline-block');
							//e.label.removeClass(allClass).addClass(successClass).html(phoneSuccessMessages.only);
						} else {
							mobileIcon.hide();
							e.label.addClass(warningClass).html(phoneSuccessMessages.unique);
						}
						isRemoteClass = true;
					} else if(e.name === "txtValidateCode"){
						codeIcon.css('display', 'inline-block');
						//e.label.addClass(successClass).html(codeSuccessMessage);
					}
				});
				remoteCode();

				btn.on('click', function(e){
					if(!isSendClick){
						return;
					}
					isSendClick = false;
					if(!(verifier.required(txtMobile) && verifier.mobile(txtMobile))){
						isSendClick = true;
						labelMobile.removeClass(allClass).addClass(errorClass).html('请输入手机号码');
						return;
					}
					checkPhoneValid($(this), txtMobile, txtValidateCode, labelValidate);
				});
				phone.query('#btnAttentClose').on('click', function(){
					phone.hide();
				});
				btnSubmit.on('click', function(e){
					phoneValidators.submit({
						callback: function(valid){
							if(valid){
								$.ajax({
									url: "/api/web/person.api",
									type : "post",
									dataType : "json",
									data:{
										"act" : "modUserInfo",
										"txtMobile" : txtMobile.val(),
										"txtValidateCode" : txtValidateCode.val(),
										"type" : "mobile"
									},
									success: function(json){
										if(json.status==1){
											var msg = "手机号码保存成功！"
											confirmBox.timeBomb(msg,{
												name : 'success',
												timeout : 1000,
												width: pWidth + msg.length * fontWidth,
												callback : function () {
													window.location.reload();
												}
											});
											phone.hide();
										} else {
											txtValidateCode.parent().find('.msg').removeClass('warning-msg success-msg').addClass('error-msg').html(json.msg);
										}
									}
								});
							}
						}
					});
				});
			});

			phone.before('hide', function(e){
				if(phoneTimer){
					clearInterval(phoneTimer);
					phoneTimer = null;
				}
				successMobile = null;
				successCode = null;
				isSendClick = true;
				isRemoteClass = true;
				phoneTime = 0;
				this.query('#btnAttentClose').off();
				this.query('#btnPhoneSubmit').off();
				phoneValidators.destory();
			});

			function updatePhoneTime(btn, phoneTxt, codeTxt){
				phoneTime = 180;
				phoneTimer = setInterval(function(){
					if(phoneTime <= 0){
						resetPhoneTime(btn, phoneTxt, codeTxt);
					} else {
						btn.html(phoneTime + '秒重新获取验证码');
					}
					phoneTime--;
				}, 1000);
			}
			function resetPhoneTime(btn, phoneTxt, codeTxt){
				clearInterval(phoneTimer);
				phoneTimer = null;
				successMobile = null;
				successCode = null;
				phoneTime = 0;
				btn.html('重新发送验证码');
				isSendClick = true;
			}
			function checkPhoneValid(target, phoneTxt, codeTxt, labelValidate){
				var url = "/api/web/user.api",
					data = {'act':'mobileCheck','_txtMobile': phoneTxt.val(),type:1};
				codeTxt.val('');
				$.ajax({
					url: url,
					type: "post",
					dataType: "json",
					async: true,
					data: data,
					success: function(result){
						if(result.status<1){
							isSendClick = true;
							labelValidate.removeClass(allClass).addClass(errorClass).html(result.msg);
							return;
						}
						successMobile = data.mobilePhone;
						labelValidate.removeClass(allClass).addClass(successClass).html('已发送验证码短信到您的手机');
						codeTxt.val('').focus();
						updatePhoneTime(target, phoneTxt, codeTxt);
					}
				});
			}
			<!--{if !$memberInfo['mobile']}-->
				phone.setContent({
					content: '<div style="padding:10px"><p class="alert-warniong">尊敬的用户，您没有认证手机号码，认证好的手机号码将作为新的登录账号</p><form style="padding:30px 0"><dl class="clearfix"><dt class="left" style="width:100px;text-align:right;padding:5px;font-size:14px">手机号码<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:300px"><input type="text" name="txtMobile" class="text" style="width:250px" id="phone-value" value="" /><em style="display:none;margin-left:5px" class="successIcon"></em><span style="margin-top:5px" class="msg" data-for="txtMobile"></span></dd></dl><dl class="clearfix mgt15"><dt class="left" style="width:100px;text-align:right;padding:5px;font-size:14px">短信验证码<font style="color:#f60;font-size:14px">*</font></dt><dd style="float:left;width:300px"><input type="text" class="text" name="txtValidateCode" style="vertical-align:middle;_vertical-align:0px;width:90px" id="yzm-value" /><a href="javascript:" class="gray-btn" style="padding:6px;width:140px;text-align:center;margin-left:5px" id="getYZM">免费发送验证码</a><em style="display:none;margin-left:5px" class="successIcon"></em><span style="margin-top:5px" class="msg" data-for="txtValidateCode"></span></dd></dl></form></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="javascript:" id="btnPhoneSubmit">保存</a><a class="btn3 btnsF12" href="javascript:" id="btnAttentClose">取消</a></div>',
					title: '设置手机号码'
				}).show();
				phone.query('#btnAttentClose').on('click', function(){
					phone.hide();
				});
			<!--{/if}-->


			// 图片轮播
			var index = 0;
			var timer = null;
			var zIndex = 99;
			var imgLen = $('#topBanner img').length;
			var arrHtml = '<ul class="imgArr">';

			$('.slider').css('height', 70 * imgLen);

			for (var i = 0; i < imgLen; i++) {
				if (i == 0) {
					arrHtml += '<li class="cu"></li>';
				} else {
					arrHtml += '<li></li>';
				}

			};

			arrHtml += '</ul>';

			$('.slider li').each(function(){
				$(this).css('zIndex',zIndex--);
			});

			$('#topBanner').append(arrHtml).hover(function() {
				clearInterval(timer);
			}, function() {
				timer = setInterval(function() {
					index++;
					index >= imgLen && (index = 0);
					showImg(index);
				}, 4000);
			}).mouseout();

			$('.imgArr li').mouseover(function() {
				index = $(this).index();
				showImg(index);
			}).eq(0).addClass('cu');


			function showImg(index) {
				// $('.slider').stop().animate({
				// 	top: -70 * index
				// }, 600);
				$('.slider li').eq(index).fadeIn(600).siblings().fadeOut(600);
				$('.imgArr li').eq(index).addClass('cu').siblings().removeClass('cu');
			}

	  });
	</script>

</body>
</html>