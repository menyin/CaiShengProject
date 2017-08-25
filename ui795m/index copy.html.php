<?exit?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title><!--{if $title}-->{$title}<!--{else}-->【找工作_招聘_求职】上597人才网_触屏版<!--{/if}--></title>
	<meta name="keywords" content="<!--{if $keywords}-->{$keywords}<!--{else}-->找工作,招聘,招聘网,求职,招聘信息,人才网,597人才网<!--{/if}-->" />
	<meta name="description" content="<!--{if $description}-->{$description}<!--{else}-->597人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供人才招聘、猎头、培训、测评和人事外包在内的全方位的人力资源服务，帮助个人求职者与企业搭建最佳的人才招募和人才培养渠道。<!--{/if}-->" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=20150203"/> -->
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_index2.css?v=20150915"/>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/swipe.js"></script>
</head>
<body>
	<style>
		body{background:#e8ecef;}

		/*iphone添加到桌面*/
		.u-layer-ath{background:url(//cdn.{ROOT_DOMAIN}/m/images/ath.png) no-repeat;width:200px;height:75px;position:fixed;bottom:0;left:50%;margin-left:-100px;background-size:contain;display:none;transform:translate3D(0,0,0);transition:2s all;perspective:400px;z-index:9999;}
		.u-layer-ath .ath_close{position:absolute;right:0;top:0;width:30px;height:30px;}
		.u-layer-ath .ath_addhome{position:absolute;left:0;top:0;width:140px;height:60px;}
		.u-ani-ath{transform:rotateY(360deg) translateZ(100px);}
		#back_top {width: 40px; height: 40px; background: rgba(0,0,0,0.5); position: fixed; right:10px; bottom:80px; display: block; border-radius:5px; text-align: center; display: none; line-height: 40px; z-index: 999999;}
		#back_top:active {background: rgba(0,0,0,0.7);}
		#back_top span {width: 0;   height: 0;   border-left: 7px solid transparent;border-right: 7px solid transparent; border-bottom: 7px solid #fff; opacity:0.8; display: inline-block; margin-top: 17px;}
		.newjobPop{width:100%; height:60px; background:url(//cdn.{ROOT_DOMAIN}/m/images/newfilter02.png); overflow:hidden; position:fixed; left:0px; bottom:0px;z-index: 3}
		.newjobPop a.icon-svg55{ display:block;width:60px;padding: 5px; float:left; height:60px;  text-align:center; line-height:60px; color:#fff; font-size:30px;}
		.newPopx{ float:left; margin:6px 0 ;position: relative}
		.newPopx span{ display:block; color:#fff; font-size:16px; margin-bottom: 3px;}
		.newPopx a{ display:block; width:74px;font-size: 14px; ; height:22px; background:rgb(243,61,72); padding: 9px 5px;color:white; border-radius:5px; text-align:center; line-height:22px; margin:4px 0 0 50px;}
		.newjobPop a.icon-svg152{ display:block; float:right; font-size:22px; color:#000; padding:18px 8px 0 0;}
		    #aban_id{position: fixed;right: 50px;bottom:10px;}
		.newjobPop a.icon-svg55 img{ border-radius: 5px;}
		#botLinks li {width: 33%;}
	</style>
<!--{template header}-->
<div class="zpwrap"  id="content">
	<form id="formSearch" method="post">
		<section>
			<div class="indexSearch">
				<div class="content"><a href="javascript:void(0);" id="schBtn"><span>输入关键字/职位/公司搜索</span></a><b>搜 索</b></div>
			</div><!--indexSearch end-->
		</section>
	</form>
	<!--{if $_COOKIE['userType']==1}-->
	<div class="j_myOperating" >
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_5.png" /><span>职位搜索</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/job.html?act=join"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_2.png" /><span>投递简历</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/job.html?act=invite"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_512_1.png" /><span>面试邀请</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a id="update" href="javascript:void(0);"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_3.png" /><span>刷新简历</span></a>
		</div><!--j_boxe end-->

		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_4.png" /><span>我的597</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/resumes.html"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_6.png" /><span>我的简历</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/job.html?act=favorites"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_7.png" /><span>我的收藏</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/job.html?act=visit"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_homeIcon_8.png" /><span>谁看过我</span></a>
		</div><!--j_boxe end-->
		<div class=" clear"></div>
	</div>	
	<!--{elseif $_COOKIE['userType']==2}-->
	<div class="j_myOperating" >
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/resume/apply.html"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_1.png" /><span>查收简历</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/job/job.html?act=edit&status=3"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_2.png" /><span>发布职位</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/resume/searchResume.html"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_3.png" /><span>搜索简历</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/job/"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_4.png" /><span>职位管理</span></a>
		</div><!--j_boxe end-->

		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/resume/invite.html"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_5.png" /><span>面试通知</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/resume/download.html"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_6.png" /><span>下载简历</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/account/info.html"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_7.png" /><span>修改资料</span></a>
		</div><!--j_boxe end-->
		<div class="j_boxe">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/account/"><img src="//cdn.{ROOT_DOMAIN}/m/images/4.3_homeIcon_8.png" /><span>账户管理</span></a>
		</div><!--j_boxe end-->
		<div class=" clear"></div>
	</div>
	<!--{/if}-->
	<!--j_myOperating end-->

	<dl class="j_HotJobsIndustryList j_industrySubmit">
		<dt class="HJI_h3">
			<span>热门职位</span>
		</dt>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=会计" class="colorC">会计</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=司机">司机</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=文员">文员</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=美工">美工</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=行政">行政</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=人事" class="colorC">人事</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=物流">物流</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=营业员">营业员</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=学徒">学徒</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=java">java</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=php">php</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=seo">seo</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=施工员">施工员</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=出纳">出纳</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=销售" class="colorC">销售</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=普工" >普工</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=仓管">仓管</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=平面设计">平面设计</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=电工" class="colorC">电工</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=客服">客服</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=厨师" class="colorC">厨师</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=财务" class="colorC">财务</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=采购">采购</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=保安">保安</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=教师">教师</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=运营">运营</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=服务员">服务员</a>
		</dd>
		<dd>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=导购">导购</a>
		</dd>
		<div class="hotMore" style="display:none;">
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=室内设计" class="colorC">室内设计</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=cad">cad</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=预算员">预算员</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=前台">前台</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=护士">护士</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=收银员">收银员</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=模特">模特</a>
			</dd>
			<dd>
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=机工">机工</a>
			</dd>
		</div>
		<dd id="showMore">显示更多 ↓</dd>
		<dd id="hideMore" style="display:none;">收起 ↑</dd>
	</dl>
	<!--热门行业 end-->
	<div class="model">
			<h3>最新招聘<a class="more" href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/companyjob.html">更多&gt;&gt;</a></h3>
			<!--{loop $ad11List $l}-->
				<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/job-{$l['_jid']}.html"><dl>
					<dt>{$l['jname']}</dt>
					<dd>{$l['cname']}<span class="time">今天<!-- {$l['_loginTime']} --></span></dd>
				</dl></a>
			<!--{/loop}-->
		</div>
		<!--热门行业 end-->
	<div class="model">
		<h3>企业专访<a class="more" href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/qyzf/">更多&gt;&gt;</a></h3>
		<!--{loop $qyzf $l}-->
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/qyzf/detail.html?id={$l['detail_id']}">
			<dl>
				<dd style="overflow: hidden;width: 100%;text-overflow: ellipsis;white-space:nowrap;">{$l['detail_title']}</dd>
			</dl></a>
		<!--{/loop}-->
	</div>
	<!--求职宝典 end-->
	<div class="j_HotInformation" style="display:none;">
		<h3><span>求职宝典</span><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/guide/">更多</a></h3>
		<dl>
			<!--{loop $newsGuide $k $l}-->
				<dd><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/guide/detail-{$l['detail_id']}.html">[ {$categoryGuide[$l[detail_cid]]} ] {$l['detail_title']}</a></dd>
			<!--{/loop}-->
		</dl>
	</div><!--求职宝典 end-->
	<!--
	<div class="j_link" style="display:none;">
		<h3><span> 友情链接</span><a href="#">更多</a></h3>
		<dl>
			<dd>
				<ul class="link">
					<li><a target="_blank" href=""></a></li>
				</ul>
			</dd>
		</dl>
	</div>--><!--友情链接-->

<!--{if $app['id']}-->
	<style type="text/css">
		body { margin-bottom:60px !important; }
		a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
		ul, li { list-style:none; margin:0; padding:0 }
		.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
		.top_menu2 { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
		.top_bar .top_menu2>li { -webkit-box-flex:1; position:relative; text-align:center; }
		.top_menu2 li:first-child { background:none; }
		.top_bar .top_menu2>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
		.top_bar .top_menu2>li.home { max-width:70px }
		.top_bar .top_menu2>li.home a { height: 66px; width: 66px; margin: auto; border-radius: 60px; position: relative; top: -22px; left: 2px; background: url('//cdn.{ROOT_DOMAIN}/app/images/home.png') no-repeat center center; background-size: 100% 100%; }
		.top_bar .top_menu2>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
		.top_bar .top_menu2>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle; }
		.top_bar li:first-child a { display: block; }
		.menu_font { text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
		.menu_font.hidden { display:none; }
		.menu_font { top:inherit !important; bottom:60px; }
		.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
		.menu_font li a { text-align: left !important; }
		.top_menu2 li:last-of-type a { background: none; overflow:hidden; }
		.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%; }
		.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
		.menu_font li:first-of-type { border-top: 0; }
		.menu_font li:last-of-type { border-bottom: 0; }
		.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
		.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
		.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
		#menu_list0 { right:0; left:10px; }
		#menu_list0:after { left: 20%; }
		#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
		#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
		.top_bar .top_menu2>li>a:hover, .top_bar .top_menu2>li>a:active { background-color:#333; }
		.menu_font li a:hover, .menu_font li a:active { background-color:#333; }
		.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
		.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
		#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
		#cate18 .device {bottom: 49px;}
		#cate18 #indicator {bottom: 240px;}
		#cate19 .device {bottom: 49px;}
		#cate19 #indicator {bottom: 330px;}
		#cate19 .pagination {bottom: 60px;}
	</style>
	<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
		<nav>
			<ul id="top_menu2" class="top_menu2">
				<li><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/"><img src="//cdn.{ROOT_DOMAIN}/app/images/plugmenu6.png"><label>职位搜索</label></a></li>
				<li><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person/"><img src="//cdn.{ROOT_DOMAIN}/app/images/plugmenu5.png"><label>求职管理</label></a></li>
				<li class="home"><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/"></a></li>
				<li><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/company/"><img src="//cdn.{ROOT_DOMAIN}/app/images/plugmenu1.png"><label>招聘管理</label></a></li>
				<li><a href="qrcode:"><img src="//cdn.{ROOT_DOMAIN}/app/images/plugmenu8.png"><label>二维码</label></a></li>
			</ul>
		</nav>
	</div>
<!--{else}-->
	<div class="home_box">
			<ul class="bottom_nav" id="botLinks">
				<!-- <li style="width:25%">
					<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/"><img src="//cdn.{ROOT_DOMAIN}/m/images/telIco.png"  />服务热线</a>
				</li> -->
				<!-- <li >
					<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/person"><img src="//cdn.{ROOT_DOMAIN}/m/images/qqIco.png"  />QQ咨询</a>
				</li> -->
				<li >
					<a href="javascript:void(0);" id="shareBtn"><img src="//cdn.{ROOT_DOMAIN}/m/images/shareIco.png"/>分享</a>
				</li>
				<li>
					<a href="http://api.map.baidu.com/geocoder?address=厦门市湖里区宝远集团大厦&output=html"><img src="//cdn.{ROOT_DOMAIN}/m/images/mapIco.png"/>地图</a>
				</li>
				<li>
					<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/suggestion.html">用户反馈</a>
				</li>
			</ul>
		<div class="version">
			<span style=" text-align:center;"><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/file/download.html">客户端</a><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/goto.html?act=m" style="padding:3px; background:#e2e2e2; border:1px solid #e1e1e1; border-radius:2px;">触屏版</a><a href="http://{PREFIX_DOMAIN}.{ROOT_DOMAIN}/?refrom=tom">电脑版</a></span><br />
			咨询电话：<a href="tel:400-810-8597" style="color:#3f74c2;"><img src="//cdn.{ROOT_DOMAIN}/m/images/botTel.png" alt="" />400-810-8597</a><a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/suggestion.html" style="color:#3f74c2;">意见反馈</a><br />
			厦门才盛人才服务有限公司版权所有 ©{$curYear}
		</div>
		<script src="http://cdn.{ROOT_DOMAIN}/tongji.js?v=20160317" language="JavaScript"></script>
	</div>
<!--{/if}-->
	<div class="go-top" onclick="go_top();" style="opacity: 0; display: none;">
		<!--<img src="//cdn.{ROOT_DOMAIN}/m/images/4.2_gotop.png">-->
	</div>

	<!-- 分享 -->
	<div id="blackWrap"></div>
	<ul class="share" >
		<li>
			<a href="javascript:void(0);" id="shareSina" title="分享至新浪微博"></a>
			<span>新浪微博</span>
		</li>
		<li>
			<a href="javascript:void(0);" id="shareTengXun" title="分享至腾讯微博"></a>
			<span>腾讯微博</span>
		</li>
		<li>
			<a href="javascript:void(0);" id="shareQQ" title="分享至QQ空间"></a>
			<span>QQ空间</span>
		</li>
		<li style="position:relative;">
			<a href="javascript:void(0);" id="shareWeixin" title="分享至微信"></a>
			<span>微信</span>
			<div id="weixinBox">
				<h3 style="text-align:left;">
					分享到微信朋友圈
					<img src="//cdn.{ROOT_DOMAIN}/m/images/close.jpg" alt="" class="close"></h3>
				<img src="http://s.jiathis.com/qrcode.php?url=http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/" class="imgWeixin">
				<p class="f12">打开微信，点击底部的“发现”，使用 “扫一扫” 即可将网页分享到我的朋友圈。</p>
				<input type="hidden" id="title" value="<!--{if $title}-->{$title}<!--{else}-->【找工作_招聘_求职】上597人才网_触屏版<!--{/if}-->">
			</div>
		</li>
		<li id="cancel">取消</li>
	</ul>
	<!-- ios下载到桌面 -->
	<!--
	<div class="u-layer-ath " >
		<div class="ath_addhome"></div>
		<div class="ath_close" onclick="$(this).parent().hide();"></div>
	</div>
	-->
	<a id="back_top" href="javascript:void(0);"><span></span></a>
	<script>
		$(window).scroll(function(){
			if($(window).scrollTop() > 150){
				$('#back_top').show();
			} else {
				$('#back_top').hide();
			}
		});

		$('#back_top').click(function(){
			$('html,body').animate({scrollTop : 0},600);
		});
	</script>

	<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			$('#update').click(function(){
				display='{$person[display]}';
				if(display==1){
					$.ajax({
						url:'/api/web/person.api?act=refresh_resume',
						type:'post',
						dataType:'json',
						success:function(json){
							if (json.status>0){
								alert('刷新成功！');
							}else if(json.status==0){
								alert('您尚未登录，请先登录再刷新！');
								location.href = '/person/login.html';
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
				}

			});
		});

		// ios下载到桌面
		/*
		var ua = window.navigator.userAgent.toLowerCase();
		if(/iphone|ipad/.test(ua) && /version\/([\d.]+).*safari/.test(ua) && ua.indexOf("chrome") < 0){
			$('.u-layer-ath').show().addClass('u-ani-ath');
		}
		*/


	</script>
	<script>
		//绑定首页搜索点击事件
		/*$(".indexSearch .content").click(function () {
			window.location.href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=";
		});*/

		//返回顶部
		function go_top() {
			$(window).scrollTop(0);
			_gaq.push(['_trackEvent', 'home_returnTop', 'clicked']);
		}
		//显示隐藏返回顶部
		var winH = $(window).height() * 1.5;
		var $goTop = $(".go-top");
		$(window).scroll(function() {
			var winS = $(window).scrollTop();
			if (winS > winH) {
				$goTop.show().animate({
					"opacity": 1
				});
			} else {
				$goTop.animate({
					"opacity": 0
				}).hide();
			}
		});
	</script>
</div><!--wrap end-->

<section class="schbox" style="display:none;" id="schbox">
	<div class="schBar">
		<form id="frmjobSearchdo" method="get" action="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/">
		<a href="javascript:void(0);" class="jpFntWes closeBox" id="closeSchBox">&#xf053;</a>
		<span>
			<b>
				<dl class="selBox" id="selBox">
					<dt><em id="selectEm">全文</em> <img src="//cdn.{ROOT_DOMAIN}/m/images/change-city.png" width="9" height="9"></dt>
					<dd>
						<p data-val="1">职位</p>
						<p data-val="2">公司</p>
						<p data-val="3">全文</p>
					</dd>
				</dl>
				<input id="selectType" type="hidden" name="condition" value="<!--{if $_GET['condition']}-->$_GET['condition']<!--{else}-->3<!--{/if}-->" >
				<input name="txtKeyWord" type="text" id="txtKeyword" autocomplete="off" placeholder="点击左边可切换职位/公司搜索" onkeydown="enterSumbit()">
			</b>
		</span>
		</form>
		<!--  <input type="button" onclick="queryAward()" id="btnSearch" class="jpFntWes schBarBtn"> -->
		<a onclick="queryAward()" id="btnSearch" class="jpFntWes schBarBtn">&#xf002;</a>
	</div>
	<div style="clear:both;"></div>
	<!-- <div class="schBar"><a href="javascript:void(0);" class="jpFntWes closeBox" id="closeSchBox">&#xf053;</a>
		<form id="frmjobSearchdo" method="get" action="/search/">
			<span><b><input id="schBoxText" name="txtKeyWord" type="text" value="{$_GET['keyword']}" onkeydown="enterSumbit()"/></b></span>
			<a href="javascript:void(0);" id="btnSearchDo" class="jpFntWes schBarBtn">&#xf002;</a>
		</form>
	</div> -->
	<div class="hotJobs">
		<h4>热门职位</h4>
		<div class="lst">
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=销售"><span>销售</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=文员"><span>文员</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=业务员"><span>业务员</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=客服"><span>客服</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=平面设计"><span>平面设计</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=会计"><span>会计</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=司机"><span>司机</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=美工"><span>美工</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=仓管"><span>仓管</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=前台"><span>前台</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=营业员"><span>营业员</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=导购"><span>导购</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=电话销售"><span>电话销售</span></a>
			<a href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/zhaopin/?q=人事"><span>人事</span></a>
		</div>
	</div>
</section>
<div id="mask" class="mask" style="display: none;"></div>
<div id="dialogBox"></div>
<div class="newjobPop" style="display:none;">
	<a href="javascript:;" class="icon-svg55"><img src="//cdn.{ROOT_DOMAIN}/m/images/03.png?v=999" width="50" height="50"></a>
	<div class="newPopx">
		<span style="font-size:16px;margin-top: 5px;">597人才网</span>
        <span style="font-size:12px;opacity: 0.6">节省95%找工作时间</span>
        <a id="aban_id" class="downloadApk" href="http://{PREFIX_DOMAIN}.m.{ROOT_DOMAIN}/file/app.html?act=per">立即下载</a>
	</div>

	<a href="javascript:;" id="btnAppColse" class="icon-svg152"><img width="20" src="//cdn.{ROOT_DOMAIN}/m/images/close.png?v=99"></a>
</div>

<!--微信-->
<script type="text/javascript" language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/wechat.js?v=1"></script>
<script type="text/javascript">
$('#jsCancel').live('click', function() {
	$('#tips,#mask').hide();
});

//判读GPS能不能用,是否被用户拒绝
	var gpsStatus;
	function getGpsStatus(){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(
				getPositionSuccess,
				getPositionError,
				{
					"enableHighAcuracy": true //是否启用高精确度模
				});
		}else{
			gpsStatus = '对不起，浏览器不支持！';
		}
	}
	function getPositionSuccess(position){
		$.cookie('geoCity',1,{expires:3600});
		var geolocation = new BMap.Geolocation(),
			geoCity = $.cookie('geoCity');
		if(typeof(geoCity)=='undefined'){
			geolocation.getCurrentPosition(function(r){
				if(this.getStatus() == BMAP_STATUS_SUCCESS){
					var gc = new BMap.Geocoder();
					gc.getLocation(r.point, function(rs){
						var addComp = rs.addressComponents;
						var city = addComp.city;
						var	_cityDomain = $.cookie("_cityDomain"),
							_cityStr = $.cookie("_cityStr");

							if (city != _cityStr){
								$.ajax({
									url:'/api/web/region.api',
									type:'post',
									data:{act:'getRegionByName',cityName:city},
									dataType:'json',
									success:function(data){
										var region_domain = data.row.region_domain;
										if(typeof(region_domain)=='undefined'||region_domain==''){
											//city = '厦门市';
											//region_domain = 'xm';
											return '';
										}
										$('.icon-refresh').addClass('stop');
										result="<a href='//"+region_domain+".m.597.com' class='green'>"+city+"<a>";
										result+="<div id=\"tips\" class=\"popup popup-location\" style=\"display: block; \"><div class=\"popup-head\">城市更改</div><div class=\"popup-body\"><p>当前定位城市是<strong class=\"js-city-name\">"+city+"</strong></p><p>与所选城市不一样，是否更改？</p></div><div class=\"popup-bar\"><label class=\"btn-group\"><a href='javascript:void(0);' class='btn btn-default btn-large js-touch-state ' id='jsCancel'>取消</a></label><label class=\"btn-group\"><a href='javascript:void(0)' onclick=\"returnCity('"+region_domain+"')\" class='btn btn-primary btn-large js-touch-state js-confirm'>更改</a></label></div></div>";
										$("#mask").css("display","block");
										$('#dialogBox').html(result);
									}
								})
							}else{
								$('.icon-refresh').addClass('stop');
							}
					});
				//alert('您的位置：'+r.point.lng+','+r.point.lat);
				}else {
				//alert('failed'+this.getStatus());
				}
			},{enableHighAccuracy: true})
		}

	}
	function getPositionError(error){
		$.cookie('geoCity',1,{expires:3600});
		switch(error.code){
			case error.TIMEOUT :
				gpsStatus = " 连接超时，请重试 ";
				break;
			case error.PERMISSION_DENIED :
				gpsStatus = " 您拒绝了使用位置共享服务，查询已取消 ";
				break;
			case error.POSITION_UNAVAILABLE :
				gpsStatus = " 非常抱歉，我们暂时无法为您提供位置服务 ";
				break;
			default:
				gpsStatus = " 请开启手机gps功能 ";
			break;
		}
		//alert(gpsStatus);
	}

//百度定位
//var cur_city = "{$city}";
//var bdcookie=readCookie('bdcookie');
/*
//if (!bdcookie&&cur_city==""){
	getGpsStatus();
	//writeCookie('bdcookie',1);
	cityName='{$domainInfo[region_name_full]}';
	var geolocation = new BMap.Geolocation();
	geolocation.getCurrentPosition(function(r) {
		if (gpsStatus=='1'){
			if (this.getStatus() == BMAP_STATUS_SUCCESS) {
				$.ajax({
					url: '/city.php?act=change&lat=' + r.point.lat + '&lng=' + r.point.lng,
					type: 'post',
					dataType: 'json',
					success: function(json) {
						if (json.status == 1) {
							// $('.icon-refresh').addClass('stop');
							var result='';
							// result = "<a href='http://" + json.msg1 + ".m.{ROOT_DOMAIN}' class='green'>" + json.msg + "<a>";
							if (cityName != json.msg) {
								if(json.msg=='福州市' || json.msg=='莆田市' || json.msg=='三明市' || json.msg=='漳州市' || json.msg=='宁德市' || json.msg=='金华市'){
								result+="<div id=\"tips\" class=\"popup popup-location\" style=\"display: block; \"><div class=\"popup-head\">城市更改</div><div class=\"popup-body\"><p>当前定位城市是<strong class=\"js-city-name\">"+json.msg+"</strong></p><p>与所选城市不一样，是否更改？</p></div><div class=\"popup-bar\"><label class=\"btn-group\"><a href='javascript:void(0);' class='btn btn-default btn-large js-touch-state ' id='jsCancel'>取消</a></label><label class=\"btn-group\"><a href='http://m."+json.msg1+"{ROOT_DOMAIN}' class='btn btn-primary btn-large js-touch-state js-confirm'>更改</a></label></div></div>";
							}else if(json.msg=='龙岩市'){
								result+="<div id=\"tips\" class=\"popup popup-location\" style=\"display: block; \"><div class=\"popup-head\">城市更改</div><div class=\"popup-body\"><p>当前定位城市是<strong class=\"js-city-name\">"+json.msg+"</strong></p><p>与所选城市不一样，是否更改？</p></div><div class=\"popup-bar\"><label class=\"btn-group\"><a href='javascript:void(0);' class='btn btn-default btn-large js-touch-state ' id='jsCancel'>取消</a></label><label class=\"btn-group\"><a href='http://m.597rcw.com' class='btn btn-primary btn-large js-touch-state js-confirm'>更改</a></label></div></div>";
							}else{
								result+="<div id=\"tips\" class=\"popup popup-location\" style=\"display: block; \"><div class=\"popup-head\">城市更改</div><div class=\"popup-body\"><p>当前定位城市是<strong class=\"js-city-name\">"+json.msg+"</strong></p><p>与所选城市不一样，是否更改？</p></div><div class=\"popup-bar\"><label class=\"btn-group\"><a href='javascript:void(0);' class='btn btn-default btn-large js-touch-state ' id='jsCancel'>取消</a></label><label class=\"btn-group\"><a href='http://m.{ROOT_DOMAIN}/"+json.msg1+"/' class='btn btn-primary btn-large js-touch-state js-confirm'>更改</a></label></div></div>";
							}
								$("#mask").css("display", "block");
							}
							$('#dialogBox').html(result);
							writeCookie('bdcookie',json.msg1);
						} else {
						}
					}
				});
			} else {
			}
		}else{
			//alert(gpsStatus);
		}
	}, {
		enableHighAccuracy: true
	})
	//关于状态码
	//BMAP_STATUS_SUCCESS	检索成功。对应数值“0”。
	//BMAP_STATUS_CITY_LIST	城市列表。对应数值“1”。
	//BMAP_STATUS_UNKNOWN_LOCATION	位置结果未知。对应数值“2”。
	//BMAP_STATUS_UNKNOWN_ROUTE	导航结果未知。对应数值“3”。
	//BMAP_STATUS_INVALID_KEY	非法密钥。对应数值“4”。
	//BMAP_STATUS_INVALID_REQUEST	非法请求。对应数值“5”。
	//BMAP_STATUS_PERMISSION_DENIED	没有权限。对应数值“6”。(自 1.1 新增)
	//BMAP_STATUS_SERVICE_UNAVAILABLE	服务不可用。对应数值“7”。(自 1.1 新增)
	//BMAP_STATUS_TIMEOUT	超时。对应数值“8”。(自 1.1 新增)
//}
*/
getGpsStatus();
function returnCity(city){
	window.location.href = "http://"+city+".m.597.com";
}
</script>
<script type="text/javascript">
		var $schbox = $('#schbox');
		var $content = $('#content');

		//var $lgLnk = $('#lgLnk');
		$(document).ready(function () {
			$('#hotLst').height('100%');

			$('#schBtn').bind('click', function () {
				$('#content').css({ 'display': 'none' });
				$('#schbox').css({ 'display': 'block' });
				var keyword = $('#schBtn').find('b').html();
				$('#txtKeyword').val(keyword).focus();
			});

			$('#closeSchBox').bind('click',function(){
				$('#schbox').css({'display':'none'});
				$('#content').css({'display':'block'});
			});

			//$.logBox('#lgLnk', '#lgBox', '#content', '#closeLog');
		});
		 function enterSumbit() {
				var event = arguments.callee.caller.arguments[0] || window.event; //消除浏览器差异
				if (event.keyCode == 13) {
					queryAward();
				}
			}
			function queryAward() {
				var keyword = $("#txtKeyword").val();
				var cityN = $("#txtlable").val();
				var condition = $("#selectType").val();
				if ($.trim(keyword) != "" && keyword != "找一找,总有适合您的工作") {
					document.getElementById("formSearch").action = "/zhaopin/?condition="+ condition+"&q="+ keyword;
				}
				else {
					document.getElementById("formSearch").action = "/zhaopin/?condition="+ condition+"&q=" + keyword;
				}
				$('#formSearch').submit();
			}


		$(document).ready(function() {
			//显示更多
			$("#showMore").click(function(){
				$(".hotMore").toggle();
				if($(".hotMore").is(":hidden")){
					$(this).html("显示更多 ↓");
				}else{
					$(this).html("收起 ↑");
				}
			})
			function createTips() {
				var strArray = ['赶紧推荐给您的朋友阅读吧。', '分享一下，推荐阅读。'];
				return strArray[Math.round(Math.random())];
			}
			//shareSina,shareTengXun,shareQQ,shareRenRen
			//分享到新浪微博
			$('#shareSina').click(function() {
				var tip = createTips(),
					acttitle = $('#title').val(),
					info = acttitle+'，'
				var href = 'http://service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
				$(this).attr({
					target: '_blank',
					href: href
				});
			});
			//腾讯微博
			$('#shareTengXun').click(function() {
				var tip = createTips(),
					acttitle = $('#title').val(),
					info = acttitle+'，'
				var href = 'http://v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
				$(this).attr({
					target: '_blank',
					href: href
				});
			});
			//QQ空间
			$('#shareQQ').click(function() {
				var tip = createTips(),
					acttitle = $('#title').val(),
					info = acttitle+'，'
				var href = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
				$(this).attr({
					target: '_blank',
					href: href
				});
			});

			var wrapH = $(document).height();
			$('#blackWrap').height(wrapH);
			$('#shareBtn').click(function() {
				$('#blackWrap,.share').show();
			});
			$('#blackWrap,#cancel').click(function() {
				$('#blackWrap,.share').hide();
			});

			$('#shareWeixin').click(function() {
				$('#weixinBox').toggle();
			});
			$('.close').click(function() {
				$('#weixinBox').hide();
			});
		});


		$('#selBox dt').click(function(){
			$(this).siblings('dd').show();
			$('#selBox p').each(function(){
				if($(this).text() ===  $('#selectEm').text()){
					$(this).hide().siblings().show();
				}
			});
		});

		$('#selectEm').html(<!--{if $_GET['condition']==1}-->'职位'<!--{/if}--><!--{if $_GET['condition']==2}-->'公司'<!--{/if}--><!--{if $_GET['condition']==3 || !$_GET['condition']}-->'全文'<!--{/if}-->);


		$('#selBox p').click(function(){
			$(this).parent().hide();
			$('#selectEm').html($(this).text());
			$('#selectType').val( $(this).attr('data-val'));
		});

		var isAppdown = $.cookie('isAppdownload');//;
		if(!isAppdown||typeof(isAppdown)=='undefined') {
			$('div.newjobPop').show();
		}
		$('#btnAppColse').click(function(e){
			$('div.newjobPop').hide();
			if(!isAppdown){
				$.cookie('isAppdownload',1,{expires:86400});
			}
		});
		$('#aban_id').click(function(e){
			//$('div.newjobPop').hide();
			// index.weixinDown();
		});
	</script>
</body>
</html>