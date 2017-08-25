
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_招聘中心</title>
	<!–[if lt IE9]>
	<script src="http://cdn.{ROOT_DOMAIN}/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/company_index.css?v=2" />
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=2017" charset="utf-8"></script>
	<script>
		$(document).ready(function(e) {
			tabs('.ltyFairBg');
			$('.freshTit p em').click(function(){
				$(this).toggleClass('cut');
			});
			$('.firmMagContx p a').hover(function(){
				$(this).toggleClass('cut');
			});
		})
		function tabs(callback){
			var tab=$(callback),tab_t=tab.find(".ltyFlit a"),tab_c=tab.find(".ltyFlitBg .ltyFlit2");
			tab_t.click(function(){
				var _this=$(this);
				var lis=tab_t.index(this);
				tab_t.removeClass("cur");
				_this.addClass("cur");
				tab_c.hide();
				tab_c.eq(lis).show();
			});
		};

	</script>
</head>
<body style="box-sizing: border-box;">
<!--{template company/header}-->

<!--{if $ad22List}-->
<div id="topBanner" class="banner">
	<ul class="slider">
		<!--{loop $ad22List $l}-->
		<li><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}" alt="" width="1000" height="70"></a></li>
		<!--{/loop}-->
	</ul>
</div>
<script>
	(function(){
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
	})();
</script>
<!--{/if}-->

<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/wechat.css?v=20150228" />
<div class="weChatip" id="weixinhelpcontainer" style="display:none">
	<div class="subWtip01">
		<div class="subWtip02">
			微信招聘助手上线了！用微信就能玩转招聘，
就是这么任性！
			<a href="/account/weixin/">点击了解</a>
		</div>
		<a href="javascript:void(0);" class="wChatBtn" id="btnWeixin"></a>
	</div>
</div>


<div id="body_content" style="font-family:'微软雅黑'">
	<div class="firmHomeBg" style="<!--{if $ad22List}-->margin-top:3px;<!--{/if}-->">
		<div class="firmHlt">
			<div class="firmConTopBg">
				<div class="firmConTop">
					<dl>
						<dt>
							<input type="hidden" id="delete_logo" value=''>
							<div class="firmcImg upLOGO" style="cursor:pointer" >
								<div>
									<img id="logo_path" src="<!--{if $com[logoUrl]}-->http://pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}<!--{else}-->http://cdn.{ROOT_DOMAIN}/img/job/newjob/default_logo.png<!--{/if}-->" onerror="this.onerror=null; this.src='http://cdn.{ROOT_DOMAIN}/img/job/newjob/default_logo.png';"/>
								</div>
							</div>
							<a href="/company/account/info.html" class="upLOGO">立即上传公司LOGO</a>
							<p>资料完善度:<span> <i style="width:100%;background-color:#0c3"></i></span>&nbsp;{$com[comIntegrity]}%</p>
						</dt>
						<dd>
							<h2 style="margin-bottom:5px;">
								{$com[cname]} <!--{if $com[licenceCheck]>0}--><em class="green">已认证</em><!--{else}--><em class="gray">未认证</em><a href="/company/account/licence.html" class="rzLink">立即认证</a><!--{/if}-->
							</h2>
							<p>
								<span>公司简称：</span>
								{$com[csName]}
							</p>
							<p>
								<span>主营业务及行业地位：</span>
								{$com[comStr]}
							</p>
							<p>
								<span>邮箱地址：</span>
								{$com[comEmail]}
							</p>
							<p>
								<span>联系电话：</span>
								{$strPhone} {$com[comUser]}
							</p>
							<div>
								<a href="/company/account/info.html">
									<img src="http://cdn.{ROOT_DOMAIN}/img/c/new_index/firmicon01.png" width="20" height="22" /> <em>编辑公司资料</em>
								</a>
								<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" target="_blank">
									<img src="http://cdn.{ROOT_DOMAIN}/img/c/new_index/firmicon02.png" width="20" height="22" />
									<em>预览公司主页</em>
								</a>
							</div>
						</dd>
					</dl>
				</div>
				<!--{if $products}-->
				<div class="firmMessage" style="padding-bottom:0px;">
					<div class="firmMagLf">
						<a href="/company/service/myservice.html"><img src="http://cdn.{ROOT_DOMAIN}/img/c/new_index/firmicon04.png" width="81" height="81" title="我的服务" /></a>
					</div>
					<!--{loop $products $product}-->
					<div class="firmConts">
						<div class="firmMagCont">
							<p>
								<span>会员级：</span>
								{$product[title]}
							</p>
							<p>&nbsp;</p>
							<p>
								<span>职位发布数：</span>
								{$product[jobNum]}
								<span class="subMag">剩余：</span>
								{$product[_jobNum]}
							</p>
							<!--
							<p>
								<span>短信数：</span>
								{$product[messageNum]}
								<span class="subMag">剩余：</span>
								{$product[_messageNum]}
							</p>
							-->
							<!--
							<p>
								<span>月下载点：</span>
								{$product[monthDownload]}
								<span class="subMag">剩余：</span>
								{$product[_monthDownload]}
							</p>
							-->
						</div>
						<div class="firmMagContx">
							<p>
								<span>到期时间：</span>
								{$product[_finishTime]}<!--(
								<i class='red'>已过期</i>
								)
								<a target="_blank" href="/pay/">充值</a>
								-->
							</p>
							<p>&nbsp;</p>
							<p>
								<span>简历下载数：</span>
								{$product[resumeNum]}
								<span class="subMag">剩余：</span>
								{$product[_resumeNum]}
							</p>
							<!--
							<p>
								<span>短信数：</span>
								{$product[messageNum]}
								<span class="subMag">剩余：</span>
								{$product[_messageNum]}
							</p>
							-->
						</div>
					</div>
					<!--{/loop}-->
					<!--企业变动公告-->
					<!--企业变动公告结束-->
				</div>
				<!--{else}-->
					<!--{if $com[licenceCheck]>0}-->
					<div class="firmMessage">
						<div class="firmMagLf">
							<a href="javascript:void(0)" id="freeImg"><img src="http://cdn.{ROOT_DOMAIN}/img/c/new_index/firmicon004.png" width="81" height="81" title="我的服务" /></a>
						</div>
						<div style="padding:20px;">
							<div style="margin-left:100px;">
							您当前为<a href="javascript:void(0)" id="free">试用会员</a>，可发布 <span style="color:#f00;">{$com[_jobNum]}</span>个岗位 ,本月可下载简历数：<span style="color:#f00;">{$resumeFree}</span> 份<br>如需提升招聘效果，建议升级成VIP会员>><a target="_blank" href='/company/service/service.html' style="color:red;">点击查看收费标准</a>
							</div>
						</div>
					</div>
					<!--{else}-->
						<div class="firmMessage">您是：<span style="color:#f00;">未认证会员</span>，<a href="/company/account/licence.html">请上传最新的营业执照副本审核认证！</a></div>
					<!--{/if}-->
				<!--{/if}-->
			</div>


			<!--疑问联系顾问 -->
			<div class="firmConTopBg">
				<div class="firmRmendTit">
					<span>有疑问？请联系您的顾问</span>
				</div>

					<ul class="fRmendConat">
						<!--{if $adminInfo}-->
							<div style="float:left; margin-right:10px;">
								<img src="//pic.{ROOT_DOMAIN}/photo/admin/{$adminInfo['adminPhoto']}" width="100" height="120" onerror="this.onerror=null; this.src='http://cdn.{ROOT_DOMAIN}/img/v2/resumeM/head-defects.jpg';">
							</div>
							<li>
								<p>
									<b>{$adminInfo['adminName']}</b>
									<span style="color:#ccc">(招聘顾问)</span>
								</p>
								<p>
									电话 : {$adminInfo['adminTelphone']}
								</p>
								<p>
									手机 : {$adminInfo['adminFax']}
								</p>
								<p>全国热线 : 400-8108-597</p>
								<!--{if $adminInfo['adminCode']}-->
								<p>
									<span style="vertical-align:middle;">QQ:{$adminInfo['adminCode']}</span>

									<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$adminInfo['adminCode']}&site=qq&menu=yes" style="margin-left:-10px;">
										<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:{$adminInfo['adminCode']}:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
									</a>
								</p>
								<!--{/if}-->
							</li>
							<!--{if $adminBoss}-->
								<div style="float:left; margin-right:10px;">
									<img src="//pic.{ROOT_DOMAIN}/photo/admin/{$adminBoss['adminPhoto']}" width="100" height="120" onerror="this.onerror=null; this.src='http://cdn.{ROOT_DOMAIN}/img/v2/resumeM/head-defects.jpg';">
								</div>
								<li>
									<p>
										<b>{$adminBoss['adminName']}</b>
										<span style="color:#ccc">(主管)</span>
									</p>
									<p>
										电话 : {$adminBoss['adminTelphone']}
									</p>
									<p>
										手机 : {$adminBoss['adminFax']}
									</p>
									<p>全国热线 : 400-8108-597</p>
									<!--{if $adminBoss['adminCode']}-->
									<p>
										<span style="vertical-align:middle;">QQ:{$adminBoss['adminCode']}</span>

										<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$adminBoss['adminCode']}&site=qq&menu=yes" style="margin-left:-10px;">
											<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:{$adminBoss['adminCode']}:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
										</a>
									</p>
									<!--{/if}-->
								</li>
							<!--{/if}-->
						    <!--{else}-->
							<li><p>全国热线电话 : 400-8108-597</p></li>
						<!--{/if}-->
					</ul>
                <div style="clear: both"></div>
			</div>


			<!------最近招聘会----->
			<!--
			<div class="firmConTopBg" style="margin-bottom:0;">
				<div class="firmRmendTit">
					<span>最近招聘会</span>
				</div>
				<div class="ltyFairBgc">
					<div class="ltyFairBg">

						<div class="ltyFlit">
							<a href="javascript:;"  class="cur" >
								<span>
									周二
									<br />
									03-31
								</span>
								<i></i>
							</a>
							<a href="javascript:;" >
								<span>
									周四
									<br />
									04-02
								</span>
								<i></i>
							</a>
							<a href="javascript:;" >
								<span>
									周二
									<br />
									04-07
								</span>
								<i></i>
							</a>
						</div>
						<div class="ltyFlitBg">
							<ul class="ltyFlit2"  style="display:block;">
								<li>
									<a href="/zhaopinhui/20150331/" target="_blank">重庆工业、汽车、电子、化工、物流、地产物业、建筑、装饰建材专场招聘会</a>
								</li>
							</ul>
							<ul class="ltyFlit2" >
								<li>
									<a href="/zhaopinhui/20150402/" target="_blank">重庆商场、百货、酒店餐饮、快消品、服装服饰、IT科技、服务类专场招聘会</a>
								</li>
							</ul>
							<ul class="ltyFlit2" >
								<li>
									<a href="/zhaopinhui/20150407/" target="_blank">重庆工业、汽车、电子、物流、地产物业、建筑、装饰建材专场招聘会</a>
								</li>
							</ul>
						</div>

					</div>
					<a href="/zhaopinhui/enterprise/sceneid-573-fairApply-true" target="_blank" class="meCustom">我要订展</a>
				</div>
			</div>
			-->

		</div>
		<div class="firmHrt">
		<!--{if $jobOnline}-->
			<div class="firmBot">
				<div class="firmBox">
					<h2>招聘中的职位</h2>
					<div class="jobNum"><a href="/company/job/index.html" >{$jobOnline}</a></div>
					<p><a href="/company/job/job.html?act=edit">发布新职位</a> | <a href="/company/job/index.html">职位管理</a></p>
				</div>
				<div class="firmBox">
					<h2>收到的简历</h2>
					<div class="jobNum"><span><a href="/company/resume/apply.html" >{$num_all}</a><!--{if $weekNum}--><em class="jobTip">New！</em><!--{/if}--></span></div>
					<p><a href="/company/resume/apply.html">收到应聘简历</a> | <a href="/company/resume/search.html">简历搜索</a></p>
				</div>
				<div class="wxBox">
					<h2>关注微信公众号<br />简历投递早知道</h2>
					<a href="/company/account/weixinlist.html"><img src="http://cdn.{ROOT_DOMAIN}/img/common/comwxCode.png" width="160" height="160" alt="" /></a>
				</div>
			</div>
		<!--{else}-->
			<div class="firmHrTop">
				<div class="memberTit" style="padding-bottom:20px;">您还没有发布"招聘中"的职位<br>发布职位,吸引2600万的人才给您投递简历</div>
				<a href="/company/job/?status=2" target="_blank" class="firmRefresh">立即发布</a>
			</div>
		<!--{/if}-->
			<!--未成为会员推荐简历-->
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
<!--{template company/footer}-->
<div id="sysTip" class="sysTipStyle">
	尊敬的用户，您的招聘联系电话未填写，为了提高您的招聘效果，请点击完善 <a href='/company/account/info.html'>进入>>></a>
</div>
<div id="freeTip" class="sysTipStyle">
	试用会员可免费发布10个岗位，可查看简历数为10份（包括收到的应聘简历和人才库主动搜索）
</div>
<style type="text/css">
	.winTip{border:#b9c9ef 1px solid;z-index:100000;width:300px;height:150px;position:fixed; background:#cfdef4; bottom:0; right:0; overflow:hidden; display:none;}
	.winTipTitle{border:1px solid #fff;border-bottom:none;width:100%;height:35px;font-size:16px;overflow:hidden;color:#1f336b;font-family: 微软雅黑;}
	.winTipClose{padding:5px 15px 10px 0px;float:right;width:16px;line-height:30px;color:#666;text-align:center;cursor:pointer; font-size: 26px;}
	.winTipTitleName{padding:5px 0px 10px 15px;width:100px;line-height:30px;text-align:left;overflow:hidden;}
	.winTipContent{padding-bottom:5px;border:1px solid #fff;border-top:none;width:100%;height:auto;font-size:12px;}
	.winTipCon{margin:0 5px 0 5px;border:#b9c9ef 1px solid;padding:10px 0 10px 5px;font-size:12px;height:90px;color:#1f336b;text-align:left;overflow:hidden; line-height: 23px;}
	.winTipCon:hover{
		text-decoration:underline;
	}
</style>
<div id="tip" class="winTip" >
	<div class="winTipTitle">
		<span id="tip_close" class="winTipClose">×</span>
		<div class="winTipTitleName">消息</div>
		<div style="clear:both;"></div>
	</div>
	<div class="winTipContent">
		<div id="tip_content" class="winTipCon">
			<p style="color:red;cursor: pointer;">尊敬的会员：</p>
			<p style="color:red;cursor: pointer;">&nbsp;&nbsp;&nbsp;&nbsp;您的会员将于{$vipTimeDate}到期，请及时在线购买或联系招聘顾问<!--{if $adminInfo}-->({$adminInfo[adminName]}:{$adminInfo[adminTelphone]})<!--{/if}-->。</p>
		</div>
	</div>
</div>
<script>
var autoFresh=$.cookie('autoFresh');
var domain = '.{ROOT_DOMAIN}';


if(autoFresh==1){
	$.anchorMsg('当天登录系统自动帮您刷新所有职位一次！',{timeout:5});
	$.cookie('autoFresh',null,{expires: -1, path: '/', domain: domain, secure: true});
}

$(function() {
	$(".firmMessage #free,.firmMessage #freeImg").click(function(){
		$.showModal('#freeTip', { contentType:'selector',title: '系统提示', width:390 });
	});
	$('#auto-refresh').click(function(){
		var fn = $(this)
		,autostatus = $('#refreshStatus').val();
		$.getJSON("/index/autorefesh/",{auto_status:autostatus},function(data){
			if(data.status=="error"){
				$.message(data.info, { title: '系统提示', icon: 'fail' });
				return;
			}
			if(data.status=="sucssus"){
				if(autostatus == 1){
						fn.addClass('cut');
						$('#refreshStatus').val(0);
						$('.autorefreshtime').show();
				}else{
						fn.removeClass('cut');
						$('#refreshStatus').val(1);
						$('.autorefreshtime').hide();
				}
				$.anchorMsg(data.info);
			}
		});
	});

	$("#auto-refresh").mouseover(function(){
		$("#show_alt").show();
	}).mouseout(function(){
		$("#show_alt").hide();
	});

	if($('.firmConts').length > 1){
		$('.firmConts').not(':last').each(function(){
			$(this).css({
				borderBottom: '1px dashed #ccc',
				paddingBottom: '10px'
			});
		});
	}
})
$("#tip_content").click(function() {
	window.open('/company/service/service.html');
	// body...
});
function refreshAll(){
  $.getJSON('/index/refreshAll/v-'+Math.random()+'', function(json) {
	if(json.error){
	$.message(json.error, { title: '系统提示', icon: 'fail' });
	return;
}
if(json.fail){
	$.message(json.failitem, { title: '系统提示', icon: 'fail' });
	return;
}
if(json.success){
	$("#divRefreshTime").html(json.refreshtime);
		$("#refreshTimeSpan").show();
	$.anchorMsg('刷新全部职位成功');
}
return;
});
}

function startVip(){
  var title = '开通会员';
	$.showModal('/account/showApplyVipTipsV2/',{title:title});
}

<!--{if !$com['comPhone']}-->
	$.showModal('#sysTip', { contentType:'selector',title: '系统提示', width:390 });
<!--{/if}-->

var isTip = {$tip},
	getTip = $.cookie("getTip");

if(isTip==1&&typeof(getTip)=='undefined'){
	var tip = {
		init:function(){
			$("#tip").slideDown();
			$("#tip #tip_close").click(function(){
				$("#tip").slideUp();
				$.cookie("getTip",1,{expires:3600*24});
			});
		}
	}
	tip.init();
}

</script>
</body>

</html>