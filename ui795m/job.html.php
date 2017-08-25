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
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>招聘{$job[jname]}-{$com[cname]}-597人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_front.css?v=20140329" />
<style>
body {margin-bottom: 60px;}
.comNmNav{ border-bottom:1px solid #d8d8d8; margin-bottom:10px; display: block; width:100%;z-index: 9999;}
.comNmNav a{ width:33%; display:inline-block; font-size:16px;}
.comNmNav .details{ border-bottom:3px solid #E8352E; padding:5px 0 8px 0;color:#e8352e;}
.bas p, .partC p{line-height: 23px;}
#blackMask {display: none;background: rgba(0, 0, 0,0.5); width:100%; height:100%; position: fixed; left:0; top:0; z-index: 100001;}
#showPhone {display: none;width:100%; position: fixed; left:0; bottom:20px;  z-index: 1000002;}
#showPhone p {background: #fff; margin:0 15px 10px; border-radius:8px; height: 45px; line-height: 45px; font-size: 18px;text-align: center; color:#087eff;}
#showPhone p a {display: block;}
#back_top { z-index: 999; margin-bottom: 10px;}
.feedback {margin-bottom: 10px;}
.jobInfo label{color: #ff6666;font-size: 12px;border: 1px solid #d9dbdb;display: inline-block;height: 16px;width: 38px;line-height: 16px;margin-left: 10px;border-radius: 2px;text-align: center;}
.ts{color: white;background-color: #BAA2A2;display: inline-block;line-height: 20px;width: 50%;padding: 3px;text-decoration: none;border-radius: 3px;margin-bottom: 15px;margin-top: 15px;}
.ts a:link {color: white;}
a:hover{text-decoration:none;color:white;}
.bas a {color: #3d84b8;font-size: 12px;}
.ex_report{ position:relative; display:block; padding:10px 15px 10px 20px; border-top:10px solid #f3f3f3; overflow:hidden;}
.ex_report b,.ex_report span{ display:block; float:left;}
.ex_report b{width:54px; height:45px; background:url(//cdn.{ROOT_DOMAIN}/m/images/report_img.png) no-repeat; background-size:54px 45px;}
.ex_report span{ color:#00c0c7; font-size:15px; margin:15px 0 0 10px;}
.ex_report a{ display:block; position:absolute; padding:10px 0px; top:15px; right:10px; font-size:15px; color:#333;}
.ex_report a i{ display:inline-block; vertical-align:0px; color:#ccc; font-size:13px;}

</style>
<script type="text/javascript">
	  	var appShow = "{$app['isPerson']}";
      	var share = JSON.stringify({$resumeJobData});
      	//ios
      	function startFunction(share){//应聘
        	window.android.startFunction(share);//android
      	}
      	function talkFunction(share){//沟通
      	  window.android.talkFunction(share);//android
      	}
</script>
</head>
<body>
	<div class="container">
		<!--{if $app['isNewApp']!="yes"}-->
		<!--{template header}-->
		<!--{/if}-->
		<div id="content">
			<!--{if $app['isNewApp']!="yes"}-->
			<header class="pubtop">
			<input type="hidden" value="{$from}" name="from" id='from'>
				<a href="javascript:history.go(-1);" class="back jpFntWes">&#xf053;</a><a href="javascript:void(0)" style="display:none;" class="navBtn" id="navBtn" name="top"><i class="jpFntWes">&#xf00a;</i></a>
				<div class="cent"><p><b>{$com[cname]}</b></p></div>
			</header>
			<div class="bread">
				<div class="bread_text"><a href="/"><font color="#27b6a6">首页</font></a>  >  <a href="/zhaopin/"><font color="#27b6a6">职位搜索</font></a>  >  <a href="javascript:history.go(-1);"><font color="#27b6a6">搜索结果</font></a>  >  <a>职位详情</a></div>
				</div>
			</div>
			<div style=" clear:both;"></div>
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
			<!--{/if}-->
			<section class="layout">
				<!-- <div class="part comNmNav"><p><a href="/com-{$com[_cid]}/"><span>{$com[cname]}</span><i class="jpFntWes">&#xf054;</i></a></p></div> -->
				<!--{if $app['isNewApp']!="yes" || $app['isNewApp']=="yes"&&$app['isPerson']=="yes"}-->
				<div class="comNmNav"><a href="/job-{$job[_jid]}.html" class="details">职位详情</a><a href="/com-{$com[_cid]}/?jid={$job['_jid']}">公司介绍</a><a href="/job_list.html?act=joblist&id={$com[_cid]}&jid={$job['_jid']}">所有职位</a></div>
				<!--{/if}-->
				<!-- <div class="part jobInfo">{$com[cname]}</div> -->
				<div class="part jobInfo">
					<div>
						<span style=" color:#E8352E; font-size:20px; font-weight:bold; margin-right:10px;">{$job[jname]}<!--{if $job[urgency]==1}-->
							<label style="padding:">急聘</label><!--{/if}-->
						</span>
						<span style="display:none;"><!--{if $job[cuname]}-->({$job['cuname']})<!--{/if}-->
							
						</span>
						<span style="float: right;margin-right: 10px;color: red;" id="btnFav">
							<!--{if $favorites_status}-->取消<!--{/if}-->收藏
						</span>

					</div>
					<div class="cash"><p class="tit">{$job[jobSalary]}</p><p></p></div>
					<div class="bas">
						<p>刷新于：<em>{$job['freshTime']}</em></p>
						<!--{if ($job[jobNumber])}--><p>招聘人数：<em><i class="icon-svg20"></i>{$job[jobNumber]}</em></p><!--{/if}-->
						<!--{if ($com[cname])}--><p style="display:none;">公司：<em>{$com['cname']}</em></p><!--{/if}-->
						<!--{if ($com[jobNumber])}--><p style="display:none;">规模：<em>{$com['jobNumber']}</em></p><!--{/if}-->
						<!--{if ($com[comType])}--><p style="display:none;">单位性质：<em>{$com['comType']}</em></p><!--{/if}-->
						<!--{if ($job[jobArea])}--><p style="display:none;">工作地点：<em>{$job[jobArea]}</em></p><!--{/if}-->
						<!--{if ($job[jobAddInfo])}--><p style="display:none;">详细地址：<em><a href="http://api.map.baidu.com/geocoder?address={$job['jobAddInfo']}&output=html">{$job['jobAddInfo']}</a></em></p><!--{/if}-->
						<!--{if ($job[cuname])}--><p tyle="display:none;">所属部门：{$job[cuname]}</p><!--{/if}-->
						<!--{if ($job[jobType]>1)}--><p>工作性质：<em>{$job[jobType]}</em></p><!--{/if}-->
						<!--{if ($job[jobClass])}--><p>职位类别：<em>{$job[jobClass]}</em></p><!--{/if}-->
						<!--{if ($job[worktimeLimit])}--><p style="display:none;">工作时间：<em>一天工作{$job[worktimeLimit]}小时</em></p><!--{/if}-->
						<!--{if ($job[workdayLimit])}--><p style="display:none;">工作时间：<em>一周工作{$job[workdayLimit]}天</em></p><!--{/if}-->
						<!--{if $job['rewardStr']}--><p>福利：<!--{loop $job['rewardStr'] $l}--><em style="padding:1px 5px;border-radius:3px;border:1px solid #ddd;margin-right:5px;">{$l}</em><!--{/loop}--></p><!--{/if}-->
						<br>
						<p>{$job['jobArea']}   <img src="http://cdn.597.com/img/job/newjob/newjob_25.png" height="12"><a href="<!--{if $com[comLongitude]!='' && $com[comLatitude]!='' }-->/jobmap.html?id={$com['_cid']}&t=1<!--{else}-->http://api.map.baidu.com/geocoder?address={$job['jobAddInfo']}&output=html<!--{/if}-->">查看地图</a></p>
						<p>{$job['jobAddInfo']}</p>

					</div>
				</div>
				<div class="part jobReq">
					<div class="partT">基本要求</div>
					<div class="partC">
						<!--{if ($job[jobDegree])}--><p>学历要求：<em>{$job[jobDegree]}</em></p><!--{/if}-->
						<!--{if ($job[jobWorkYear])}--><p>工作经验：<em>{$job[jobWorkYear]}</em></p><!--{/if}-->
						<!--{if ($job[jobLanguage])}--><p>语言要求：<em>{$job[jobLanguage]}</em></p><!--{/if}-->
						<!--{if ($job[jobGender])}--><p>性别要求：<em>{$job[jobGender]}</em></p><!--{/if}-->
						<!--{if ($job[jobAge])}--><p>年龄要求：<em>{$job[jobAge]}</em></p><!--{/if}-->
					</div>
				</div>
				<div class="part jobReq">
				<div class="partT">岗位职责</div>
					<div class="partC">{$job[jobContent]}</div>
				</div>
				<!--{if $unitList['isshow']==1}-->
				<div class="part jobReq">
					<div class="partT">该职位隶属于：{$unitList['cuName']}</div>
					<div class="partC">
						<!-- <p>部门名称：<em>{$unitList[cuName]}</em></p> -->
						<p>部门联系人：<em>{$unitList['linker']}</em></p>
						<!--{if $unitList['linktel']}--><p>部门电话：<em>{$unitList['linktel']}</em></p><!--{/if}-->
						<p>部门邮箱：<em>{$unitList['email']}</em></p>
						<p class="bas">部门地址：
						<em>{$unitList['address']}</em>
						<!-- <img src="http://cdn.597.com/img/job/newjob/newjob_25.png" height="12"><a target="_blank" href="">查看地图</a> -->
						</p>
					</div>
				</div>
				<!--{/if}-->
				<div class="part contacUs">
					<div class="partT">联系方式</div>
					<!--{if $job['linkWay']=='0'}-->
					<div class="partC">
						<div class="txt">
							<p>请通过597人才网投递简历</p>
						</div>
					</div>
					<!--{else}-->
					<div class="partC">
						<div class="txt">
							<!--{if $linkWays}-->
								<!--{loop $linkWays $l}-->
									<p>{$l['n']}:{$l['t']}</p>
								<!--{/loop}-->
							<!--{else}-->
								<p>{$linkName}</p>
								<p>{$linkWayStr}</p>
							<!--{/if}-->
						</div>
						<a href="javascript:void(0);" onclick="$('#blackMask,#showPhone').show();" class="tel"><i class="jpFntWes">&#xf095;</i></a>
					</div>
					<!--{/if}-->
					<div style="text-align: center;display:none;"><a href="report.html?jid={$job[_jid]}" class="ts">投诉该职位已停招</a></div>
				</div>
				<div class="part">
					<div class="ex_report">
						<b></b>
						<span>职位异常？</span>
						<a href="report.html?jid={$job[_jid]}">举报 > </a>
					</div>
				</div>
			</section>
			<div id="shareComLogo" style="display:none"><!--{if $com[logoUrl]}-->http://pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}<!--{/if}--></div>
			<!--{if $app['isNewApp']!="yes" || $app['isNewApp']=="yes"&&$app['isPerson']=="yes"}-->
			<div class="jobPos">
				<!--{if $job['linkWay']=='0'}-->
					<a href="javascript:void(0)" class="{$btnClass} btn4" id="btnJoin">投递简历</a>
					<!-- {if $join_status}<a href="javascript:void(0)" class="btnsF14 btn4">已投递</a>{else}<a href="javascript:void(0)" class="btnsF14 btn4" id="btnJoin">投递简历</a>{/if} -->
					<a href="/file/download.html" class="{$btnClass} btn3" >和TA聊聊</a>
				<!--{else}-->
					<a href="javascript:void(0)" class="btnsF15 btn4" id="btnJoin">投递简历</a>
					<!-- {if $join_status}<a href="javascript:void(0)" class="btnsF14 btn4">已投递</a>{else}<a href="javascript:void(0)" class="btnsF14 btn4" id="btnJoin">投递简历</a>{/if} -->
					<!--{if $app['isPerson']!="yes"}-->
					<a href="javascript:void(0)" onclick="$('#blackMask,#showPhone').show();" class="btnsF15 btn3"><img src="http://cdn.{ROOT_DOMAIN}/m/images/tel1.png" width="16" height="16">电话</a>
					<!--{/if}-->
					<a href="/file/download.html" class="btnsF15 btn3">和TA聊聊</a>
				<!--{/if}-->
				<!--{if $app['isPerson']=="yes"}-->
				<a href="javascript:void(0)" onclick="talkFunction(share)" class="btnsF15 btn3">沟通</a>
				<!--{/if}-->
			</div>
			<!-- <a href="/suggestion.html" class="feedback">意见<br>反馈</a> -->
			<!--{/if}-->
			<!--{if $app['isNewApp']!="yes"}-->
			<!--{template footer}-->
			<!--{/if}-->
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#navBtn').toggle(function(){
					$('#pubnav').slideDown();
				},function(){
					$('#pubnav').slideUp();
				});

				/*投递简历*/
				$('#btnJoin').bind('click',function(){
					$.ajax({
						url:'/api/web/job.api?act=join&jid={$job[_jid]}',
						type:'post',
						dataType:'json',
						success:function(json){
							if(json.status==0 || json.status==-1){
								alert('您尚未登录，请先登录再投递！');
								location.href = '/person/login.html?from={$from}';
								//location.href='/person/fast_resumes.html?act=base&jid={$job[_jid]}';
							}else if(json.status==-100){
								alert('您还没有填写求职意向信息，请先完善简历！');
								location.href = '/person/resumes.html';
							}else if(json.status>0){
								alert(json.msg+'！');
								//$('#btnJoin').unbind().html('已投递');
								if(json.status==1 && appShow=="yes") startFunction(share);
							}else{
								alert(json.msg);
							}
						}
					});
				});

				/*收藏职位*/
				$('#btnFav').bind('click',function(){
					var info = $(this).html(),
						thisAct = '',
						tipInfo = '';
					if(info.indexOf('取消')==-1){
						tipInfo = '取消收藏';
						thisAct = 'favourite_save';
					}else{
						tipInfo = '收藏';
						thisAct = 'favourite_del';
					}
					$.ajax({
						url:'/api/web/person.api?act='+thisAct+'&jid={$job[_jid]}',
						type:'post',
						dataType:'json',
						success:function(json){
							if(json.status==0 || json.status==-1){
								alert('您尚未登录，请先登录再投递！');
								location.href = '/person/login.html?from={$from}';
							}else if(json.status>0){
								alert(info+'成功！');
								$('#btnFav').html(tipInfo)
							}else{
								alert(json.msg);
							}
						}
					});
				});
				/*取消收藏*/
				$('#unclick').bind('click',function(){
					$.ajax({
						url:'/api/web/person.api?act=favourite_del&jid={$job[_jid]}',
						type:'post',
						dataType:'json',
						success:function(json){
							if(json.status==0 || json.status==-1){
								alert('您尚未登录，请先登录再投递！');
								location.href = '/person/login.html?from={$from}';
							}else if(json.status>0){
								alert('取消收藏成功！');
								$('#btnFav').html('收藏').addClass('btn3Unclick');
								window.location.href = window.location.href;
							}else{
								alert(json.msg);
							}
						}
					});
				});

				if(appShow!="yes"){//新app不要这效果
					//自适应浏览器位置
					var classLeft = $('.comNmNav').offset().left;
					var classTop = $('.comNmNav').offset().top - 100;

					$(window).scroll(function(){
						if($(window).scrollTop() > classTop){
							$('.comNmNav').css({
								position : 'fixed',
								background:'#333',
								width:'94%',
								top : 0,
								left : classLeft
							});
							$('.comNmNav a:not(.details)').css({
								color:'#fff'
							});
						} else {
							$('.comNmNav').removeAttr('style');
							$('.comNmNav a').removeAttr('style');
						}
					});
				}
			});

		</script>
		<!-- 弹出层 -->
		<div id="blackMask"></div>
		<div id="showPhone">
			<!--{loop $TellinkWayStr $l}-->
			<p ><a href='tel:{$l}' style='color:#f50;'>{$l}</a></p>
			<!--{/loop}-->
			<p onclick="$('#blackMask,#showPhone').hide();">取消</p>
		</div>

	</div>
<!--{if $app['isNewApp']!="yes"}-->
<a class="vbk" href="javascript:history.back();"></a>
<!--{/if}-->
</body>
</html>



