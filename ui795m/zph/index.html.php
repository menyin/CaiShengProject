<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/img/75x75.png" >
	<title>{$query['areaStr']}{$query['timeStr']}{$query['pointStr']}招聘会-{$domainInfo['region_name_short']}597人才网触屏版-{$domainInfo['region_name_short']}597人才网</title>
	<meta name="revisit-after" content="1 days"/>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="/templates/default/js/m3/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/m_base.css">
	<link rel="stylesheet" type="text/css" href="/templates/default/m3/personage.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_index2.css"/>

<style>
	html,body {width:100%; height:100%;}
	body.oh {overflow: hidden; height:100%; padding: 0;}
	#selWrap {position: relative; z-index:90; width:100%;}
	#selWrap.fix {position: fixed; top:0; left:0;}
	#selTab {height: 40px; line-height: 40px; background: #fff; margin-bottom: 15px; border-bottom:1px solid #ddd; z-index:92;}
	#selTab  li {display: inline-block; width:33.33%;  height: 40px; line-height: 40px; float: left; font-size: 14px; text-align: center; cursor: pointer; position: relative;}
	#selTab  li.cu span{color:#ED534D; font-weight: bold!important; border-bottom:2px solid #ED534D;}
	#selTab  li.cu i {color:#ED534D;}
	#selTab li span {display: block; height:100%;text-align: center;padding:0 30px 0 10px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
	#selTab  li:nth-child(2){ border-left:1px solid #ddd; border-right:1px solid #ddd; margin-left: -2px;}
	#selTab i {transform: rotate(-90deg);-webkit-transform: rotate(-90deg);-ms-transform: rotate(-90deg); -moz-transform: rotate(-90deg);-o-transform: rotate(-90deg);display: inline-block; position: absolute; right:10px; top:14px;}
	#selItems {background: #fff; width:100%; top:41px; position: absolute; left:0; z-index:93;  }
	#selItems .selUl {display: none;  overflow-y:scroll;}
	#selItems  li { height: 40px; line-height: 40px; border-bottom:1px solid #ddd; text-indent: 15px; position: relative;}
	#selItems li.active a,#selItems li.active i{color:#ED534D; font-weight: bold!important;}
	#selItems  i {position: absolute; right:10px; top:12px;}
	#zphInfos li { background: #fff; margin: 0 8px 15px; padding:10px 15px; line-height: 200%; box-shadow:1px 1px 3px #ccc;}
	#selItems li a{display: block;}
	#zphInfos li p {overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-size: 14px!important; margin-top: 5px;}
	#zphInfos .fb { font-size: 15px; white-space: normal; }
	#zphInfos i { color:#0af; font-weight: bold; font-size: 14px; margin-left: 5px;}
	.ora {color:#f60;}
	.red {color:red;}
	.green {color:#090;}
	.mask {z-index:9; display: none;}
	.page { margin-bottom: 15px; text-align: center;}
	.page select { height: 35px; line-height: 35px; vertical-align: middle; border: 1px solid #999; border-radius: 0; margin: 0 10px; border-radius: 5px; }
	.page a,.page span{ border-radius: 5px; height: 33px; line-height: 33px; padding: 0 10px; border: 1px solid #999; background: #f7f7f7; display: inline-block; vertical-align: middle; margin-left: 5px; }
	.page span {color:#ccc; border-color:#ccc;}
	.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
	.comLnk {font-size: 14px; color:#0af; display: block;}
</style>
</head>
<body class="bodyPd" style="background:#f5f7f7;">
<!--{template header}-->
<nav></nav>
<div class="psgSeekHead">
	<div class="psgSeekBg psgPrecise">
		<span style="font-size:16px;">招聘会</span>
		<a href="javascript:window.history.go(-1);" class="getBack icon-svg10"></a>
		<a class="seekBtn" href="javascript:;"></a>
	</div>
</div>
<div class="mask"></div>
<div class="content" id="content">
	<div id="selWrap">
		<ul id="selTab">
			<li ><span><!--{if $query['timeStr']}-->{$query['timeStr']}<!--{else}-->按时间<!--{/if}--></span><i class=" icon-svg10"></i></li>
			<li ><span><!--{if $query['areaStr']}-->{$query['areaStr']}<!--{else}-->按地区<!--{/if}--></span><i class=" icon-svg10"></i></li>
			<li><span><!--{if $query['pointStr']}-->{$query['pointStr']}<!--{else}-->按场馆<!--{/if}--></span><i class=" icon-svg10"></i></li>
		</ul>
		<div id="selItems" >
			<ul class="selUl">
				<li class="<!--{if !$query['time']}-->active<!--{/if}-->"><a href="{$url}<!--{if $timeUrl}-->{$timeUrl}/<!--{/if}-->">全部</a><i class=" icon-svg15"></i></li>
				<li class="<!--{if $query['time']==1}-->active<!--{/if}-->"><a href="{$url}t1{$timeUrl}/">今天</a><i class=" icon-svg15"></i></li>
				<li class="<!--{if $query['time']==2}-->active<!--{/if}-->"><a href="{$url}t2{$timeUrl}/">明天</a><i class=" icon-svg15"></i></li>
				<li class="<!--{if $query['time']==3}-->active<!--{/if}-->"><a href="{$url}t3{$timeUrl}/">后台</a><i class=" icon-svg15"></i></li>
				<li class="<!--{if $query['time']==4}-->active<!--{/if}-->"><a href="{$url}t4{$timeUrl}/">大后天</a><i class=" icon-svg15"></i></li>
				<li class="<!--{if $query['time']==5}-->active<!--{/if}-->"><a href="{$url}t5{$timeUrl}/">下周</a><i class=" icon-svg15"></i></li>
			</ul>
			<ul class="selUl">
				<li class="<!--{if $query['area']==$regionAllCity['region_id']}-->active<!--{/if}-->">
					<a href="{$url}g{$regionAllCity['region_id']}{$areaUrl}/">{$regionAllCity['region_name']}</a><i class=" icon-svg15"></i>
				</li>
				<!--{loop $topRegion $l}-->
					<li class="<!--{if $query['area']==$l['region_id']}-->active<!--{/if}-->"><a href="{$url}g{$l['region_id']}{$areaUrl}/">{$l['region_name_short']}</a><i class=" icon-svg15"></i></li>
				<!--{/loop}-->
			</ul>
			<ul class="selUl">
				<li <!--{if !$query['point']}-->class="active"<!--{/if}-->><a href="{$url}<!--{if $pointUrl}-->{$pointUrl}/<!--{/if}-->">全部</a><i class=" icon-svg15"></i></li>
				<!--{loop $zph_point $l}-->
					<li class="<!--{if $query['point']==$l['zph_point_id']}-->active<!--{/if}-->"><a href="{$url}p{$l['zph_point_id']}{$pointUrl}/">{$l['zph_point_name']}</a><i class=" icon-svg15"></i></li>
				<!--{/loop}-->
			</ul>
		</div>
	</div>
	
	<div id="zphInfos">
		<ul>
			<!--{loop $zphOffList $l}-->
				<li>
					<a href="{$url}{$l['zph_off_id']}.html">
						<p class="fb">{$l['zph_off_name']} <span class="<!--{if $l['statusCss']}-->{$l['statusCss']}<!--{else}-->green<!--{/if}-->">【{$l['status']}】</span></p>
						<p>举办时间： {$l['month']}-{$l['day']} {$l['beginTime']}-{$l['finishTime']} {$l['xingqi']}</p>	
						<p>举办场馆：{$l['zph_point_name']} </p>	
						<p>举办地址：{$l['zph_off_address']}<!--<i class=" icon-svg12"></i>--></p>	
					</a>
					<a href="/zph/company.html?zphId={$l['zph_off_id']}" class="comLnk">参展企业&gt;&gt;</a>
				</li>
			<!--{/loop}-->
		</ul>
		<div class="page">
			{$showpage}
		</div>
	</div>
</div>



<script>

	$(document).ready(function() {

		$('.selUl').css('max-height',$(window).height() * 0.6);
		
		$('#selTab li').click(function(){
			$('body').addClass('oh');
			$(this).addClass('cu').siblings().removeClass('cu');
			$('#selWrap').addClass('fix');
			$('.selUl').eq($(this).index()).show().siblings().hide();
			$('.mask').show();
		});

		$('.mask').click(function(){
			$('body').removeClass('oh');
			$('#selWrap').removeClass('fix');
			$('#selTab li').removeClass('cu');
			$('#selItems ul').add('.mask').hide();
		});

	});

</script>


</body>
</html>