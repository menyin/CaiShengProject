<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>我的597-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"	content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/swipe.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base.css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_uc.css?v=20140325" />
	<style>
		/*如果顶部有广告，则添加如下样式*/
		body {padding-top: 0;}
		.loginPop {position: relative;}
		.swipe { overflow: hidden; visibility: hidden; position: relative; }
		.swipe-wrap { overflow: hidden; position: relative; }
		.swipe-wrap > figure { float: left; width: 100%; position: relative; }
		figure, form, fieldset { border: 0; margin: 0; padding: 0 }
		.page-swipe { background-color: #fff; border: 1px solid #ddd; position: relative; margin-bottom: 10px; }
		.page-swipe #slider { }
		.page-swipe #slider figure { display: block }
		.page-swipe #slider figure div.wrap { height: 150px; display: block; position: relative }
		.page-swipe #slider figure div.image { display: block; height: inherit; }
		.page-swipe nav { position: absolute; right: 10px; bottom: 5px; z-index: 1; }
		.page-swipe #slider .image img { width: 100%; display: block; height: 100%; }
		.page-swipe nav a { font-style: normal; color: #555!important }
		.page-swipe nav #position { text-align: center; list-style: none; margin: 0; padding: 0 }
		.page-swipe nav #position li { display: inline-block; width: 10px; height: 10px; border-radius: 10px; background: #eee; margin: 0 2px; cursor: pointer }
		.page-swipe nav #position li.on { background: #F2554E; }
		/*半公开提示*/
		.popBox {background: #FFF;border-radius: 3px;box-shadow: 0 0 6px 0px rgba(0, 0, 0, 0.8);}
		.popBox .box-title {color: #222;padding: 12px 15px 0 15px;}
		.up_box .content_2 {background: #fff;padding: 12px 15px 20px 15px;}
		.up_box .content_2 ul li {border: 1px solid #eee;background: #f9f9f7;border-bottom: none;position: relative;}
		.up_box .content_2 ul li input {width: 100%;height: 18px;padding: 11px 0px;background: none;}
		.up_box .content_2 ul li:last-child {border-bottom: 1px solid #eee;}
		.btnA {margin-right: 4%;border: 1px solid #dddddd;background: #de6667;color: #ffffff;width: 100%;margin: 10px 0px;height: 36px;line-height: 36px;font-size: 14px;text-align: center;float: left;border-radius: 2px;width: 100% !important;text-align: center;float: left;border-radius: 2px;}
		.up_box .button {padding: 0px 10px;}
		.greenNew{background-color: #31b859;}
	</style>
</head>
<body>
	<!--{if $ad23List}-->
	<div class="page-swipe" style=" margin:5px auto;" style="display:none;">
		<div id="slider" class="swipe" >
			<div class="swipe-wrap" >
				<!--{loop $ad23List $k $l}-->
					<figure>
						<a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->">
							<div class="wrap">
								<div class="image">
									<img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}" alt=""></div>
							</div>
						</a>
					</figure>
				<!--{/loop}-->
			</div>
		</div>
		<nav>
			<ul id="position">
				<!--{loop $ad23List $k $l}-->
					<li <!--{if $k==0}-->class="on"<!--{/if}-->></li>
				<!--{/loop}-->
			</ul>
		</nav>
		<script>
			//$('#slider,#slider .wrap').css('height',$(window).width() * 0.375);
			var slider =
				Swipe(document.getElementById('slider'), {
					auto: 3000,
					continuous: true,
					callback: function(pos) {

						var i = bullets.length;
						while (i--) {
							bullets[i].className = ' ';
						}
						bullets[pos].className = 'on';

					}
				});
			var bullets = document.getElementById('position').getElementsByTagName('li');
		</script>
	</div>
	<!--{/if}-->
	<!--{template header}-->
	<header class="pubtop">
		<a href="/" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;" class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
		<div class="cent"><p><b>我的597</b></p></div>
	</header>
	<nav class="pubnav" id="pubnav" style="display:none;"><a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a><a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a><a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a></nav>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#navBtn').toggle(function(){
				$('#pubnav').slideDown();
			},function(){
				$('#pubnav').slideUp();
			});
		});
	</script>
	<nav class="pubnav" id="pubnav">
		<a href="/"><i class="jpFntWes">&#xf015;</i><span>首页</span><b></b></a>
		<a href="/zhaopin/" id="schBtn"><i class="jpFntWes">&#xf002;</i><span>职位搜索</span><b></b></a>
		<a href="/person/"><i class="jpFntWes">&#xf007;</i><span>求职中心</span></a>
	</nav>

	<section class="layout">
		<div class="part info" style="margin-bottom:10px;">
			<div class="hd"><b><a href="/person/resumes.html?act=base">欢迎登录，<!--{if $person['realname']}-->{$person['realname']}<!--{else}-->{$_SESSION['username']}<!--{/if}--></a></b></div>
			<div class="bd">
				<div class="photo"><a href="/person/resumes.html?act=photo"><img width="65" height="81" src="{$attachment}"/></a></div>
				<div class="infoC">
					<a href="/person/job.html?act=join"><b>{$joinCount}</b><i>投递职位</i><em></em></a>
					<a href="/person/job.html?act=visit"><b>{$visitCount}</b><i>被浏览</i><em></em></a>
					<a href="/person/job.html?act=download"><b>{$downloadCount}</b><i>被下载</i><em></em></a>
				</div>
			</div>
		</div>
		<div class="tipTxt" id="perInfos"> <b>简历完善度：</b>
			<div class="myBar">
				<span class="bar"> <i style="width:{$resumeInfo['resumePrecent']}%;"></i>
				</span> <em>{$resumeInfo['resumePrecent']}%</em>
			</div>
			<a class="btnsF12 btn4" id="update2" href="javascript:void(0);">刷新</a>
		</div>
		<div class="part manage pos">
			<ul>
				<li><a href="/person/resumes.html"><span><b class="jpFntWes">&#xf0f8;</b><b>我的简历</b></span><i class="jpFntWes">&#xf105;</i></a></li>
				<li><a href="/person/job.html?act=invite"><span><b class="jpFntWes">&#xf0f3;</b><b>面试邀请</b></span><i class="jpFntWes">&#xf105;</i></a></li>
				<li><a href="/person/job.html?act=join"><span><b class="jpFntWes">&#xf0f2;</b><b>申请的职位</b></span><i class="jpFntWes">&#xf105;</i></a></li>
				<li><a href="/person/job.html?act=favorites"><span><b class="jpFntWes">&#xf005;</b><b>我的收藏</b></span><i class="jpFntWes">&#xf105;</i></a></li>
				<!--<li><a href="/zhaopin/?q="><span><img src="http://cdn.597.com/m/images/zwss.png" style="margin-top:12px; float:left;" ><b>职位搜索</b></span><i class="jpFntWes">&#xf105;</i></a></li>-->

			</ul>
		</div>
		<div class="part manage hide">
			<ul>
				<li><a id="prBtn"><span><b>隐私设置</b><em id="emOpenMode"><!--{if $person[display]==1}-->公开<!--{elseif $person[display]==2}-->半公开<!--{else}-->保密<!--{/if}--></em></span><i class="jpFntWes">&#xf105;</i></a></li>
				<!--{if $person[display]==1}-->
					<li id="privacy"><a href="/person/privacy.html" ><span><b>公司黑名单</b></span><i class="jpFntWes">&#xf105;</i></a></li>
				<!--{/if}-->
				<li><a href="/person/account.html?act=psw"><span><b>修改登录密码</b></span><i class="jpFntWes">&#xf105;</i></a></li>
			</ul>
		</div>
		<div class="btns">
			<a class="btnsF16 btn4" id="update" href="javascript:void(0);">刷新简历<input type="hidden" id="display" name="display" value="{$person[display]}"></a>
		</div>
		<div class="btns">
			<a class="btnsF16 btn5" href="resumes.html?act=view">简历预览</a>
		</div>
		<div class="btns">
			<a class="btn2 btnsF16" href="/logout.html">退出登录</a>
		</div>
	</section>

	<!--{template footer}-->

	<section class="drop" id="prSet">
		<ul>
			<li <!--{if $person["display"]==1}-->class='check'<!--{/if}-->>
				<input type="radio" class="rad" id="pr1" name="openMode" value="1" />
				<label for="pr1"><b>公开，允许简历被企业搜索到</b><!--{if $person[display]==1}--><i class="jpFntWes">&#xf058;</i><!--{else}--><i class="jpFntWes">&#xf10c;</i><!--{/if}--></label>
			</li>

			<li class="check" id="bgk">
				<input type="radio" class="rad" id="pr3" name="openMode" value="2" data-bgk="0"/>
				<label for="pr3"><b>半公开，企业无法查看我的联系方式</b><!--{if $person[display]==2}--><i class="jpFntWes">&#xf058;</i><!--{else}--><i class="jpFntWes">&#xf10c;</i><!--{/if}--></label>
			</li> 
			<li  <!--{if $person["display"]==0}-->class='check'<!--{/if}-->>
				<input type="radio" class="rad" id="pr2" name="openMode" value="0" />
				<label for="pr2"><b>保密，企业无法搜索到我的简历</b><!--{if $person[display]==0}--><i class="jpFntWes">&#xf058;</i><!--{else}--><i class="jpFntWes">&#xf10c;</i><!--{/if}--></label>
			</li>
		</ul>
	</section>
<!--start半公开提示框-->
<div id="mBox1495160965280" class="popBox " style="width: 80%; height: auto; z-index: 104; top: 20%; left: 10%; position: fixed; visibility: visible; opacity: 1; display:none;">
	<div class="box-title">温馨提示：</div>
	<div class="box-content">
		<div class="up_box">
			<div class="content_2">
				<ul>
					<li>设置为“半公开”，企业将不能查看您的联系方式，只能通过app的聊天功能联系您。请您下载app通过app进行设置简历半公开。</li>
				</ul>
			</div>
			<div class="button clearfix">
				<a class="btnA" href="http://a.app.qq.com/o/simple.jsp?pkgname=com.xm597.app" target="_blank">这就去下载app</a>
				<!-- <a class="btnA greenNew" href="im597://" onclick="sureChange()">已经下载</a> -->
			</div>
		</div>
	</div>
</div>
<div id="ui-mask-mBoxMask30" class="ui-mask" style="position:absolute;top:0;left:0;width:100%;background:#000;opacity:0.6;height:865px;display:none;z-index:103"></div>
<!--end半公开提示框-->
<div class="dropBg" id="prSetBg">&nbsp;</div>
<script language="javascript" type="text/javascript">
	var wHt = $(document).height();
	$(document).ready(function(){
		$('#prSet').find('li').find('label').click(function(){
			var $this = $(this);
			var $thisInput = $this.siblings('input');
			//zy半公开特殊处理
			if($thisInput.val()==2 && $thisInput.attr("data-bgk")==0){
				$thisInput.attr("data-bgk",1);//标示
				dowmApp();
				return;
			}
			$.ajax({
				url:'/api/web/resumes.api?act=privacy',
				type:'post',
				dataType:'json',
				data:{display:$thisInput.val()},

				success:function(json){
					if(json.status>0){
						$this.closest('li').siblings('li').find('i.jpFntWes').html('&#xf10c;').closest('li').removeClass('check');
				   		$this.find('i.jpFntWes').html('&#xf058;').closest('li').addClass('check');

						$('#prSet').css({'display':'none'});
						$('#prSetBg').css({'height':wHt,'display':'none'});
						if(json.display=='1'){
							alert('简历公开成功！');
							$('#display').val(1);
							$('#emOpenMode').html('公开');
							$('#privacy').css('display','block');
						}else if (json.display=='2') {
							alert('简历半公开成功！');
							$('#display').val(2);
							$('#emOpenMode').html('半公开');
							$('#privacy').css('display','none');
						}else{
							alert('简历保密成功！');
							$('#display').val(0);
							$('#emOpenMode').html('保密');
							$('#privacy').css('display','none');
						}
					}else{
						alert('设置失败！');
					}
				}
			});
		});

		$('#navBtn').toggle(function(){
			$('#pubnav').slideDown();
		},function(){
			$('#pubnav').slideUp();
		});

		$('#update,#update2').click(function(){
			display=$('#display').val();
			if(display==1){
				$.ajax({
					url:'/api/web/person.api?act=refresh_resume',
					type:'post',
					dataType:'json',
					success:function(json){
						if (json.status>0){
							alert('刷新成功');
						}else{
							if (json.status<0){
								s = json.nextTime;
								s = s.replace("<i>","");
	 							s = s.replace("</i>","");
								alert('每半小时只能刷新一次简历!'+s+'后可刷新！');
							}else{
								alert('对不起，刷新失败，请重新刷新！');
							}
						}
					}
				});
			}else{
				alert('你的简历当前设置为隐藏，不能刷新，请先设置为公开！');
				$("#prBtn").click();
			}
		});

		//显示设置隐私框
		$("#prBtn").click(function(){
			$('#prSet').css({'display':'block'});
			$('#prSetBg').css({'height':wHt,'display':'block'});
		});
	});

function dowmApp(){
	$("#mBox1495160965280").show();
	$("#ui-mask-mBoxMask30").show();
	$(".dropBg").hide();
	$(".drop").hide();
}

$(".btnA,.ui-mask").click(function(){
	$("#mBox1495160965280").hide();
	$("#ui-mask-mBoxMask30").hide();
	$("#pr3").attr("data-bgk",0);
});

function sureChange(){
	$('#bgk').find('label').click();
}
</script>
</body>
</html>
