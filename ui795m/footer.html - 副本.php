<!--{if $app['id']}-->
	<style type="text/css">
		body { margin-bottom:60px !important; overflow-x: hidden; width:100%;}
		a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
		ul, li { list-style:none; margin:0; padding:0 }
		.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
		.top_menu2 { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
		.top_bar .top_menu2>li { width:20%; position:relative; text-align:center; }
		.top_menu2 li:first-child { background:none; }
		.top_bar .top_menu2>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3);}
		.top_bar .top_menu2>li.home { max-width:70px }
		.top_bar .top_menu2>li.home a { height: 66px; width: 66px; margin: auto; border-radius: 60px; position: relative; top: -22px; left: 0; background: url('http://cdn.597.com/app/images/home.png') no-repeat center center; background-size: 100% 100%; }
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
		 #back_top {z-index: 999; bottom:52px!important;}
		#cate18 .device {bottom: 49px;}
		#cate18 #indicator {bottom: 240px;}
		#cate19 .device {bottom: 49px;}
		#cate19 #indicator {bottom: 330px;}
		#cate19 .pagination {bottom: 60px;}
		.container {margin-bottom: 65px;}
		.container .jobPos {bottom:48px; padding-bottom: 25px;}
		.container #back_top {bottom:185px!important;}
		.container .feedback {bottom:230px!important;}
		.job_search #back_top {bottom:110px!important;}
		.feedback {text-align: center;cursor: pointer;display: inline-block;width: 40px;height: 36px; padding-top: 4px;line-height: 16px; position: fixed; right:10px; bottom:95px; background-color: rgba(0,0,0,0.5); color: #fff; -webkit-tap-highlight-color: rgba(0,0,0,0);  font-size: 12px; border-radius:4px; z-index:99999;}
	</style>
	<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
		<nav>
			<ul id="top_menu2" class="top_menu2">
				<li><a href="/{$_COOKIE['_cityDomain']}/zhaopin/"><img src="http://cdn.597.com/app/images/plugmenu6.png"><label>职位搜索</label></a></li>
				<li><a href="/person/"><img src="http://cdn.597.com/app/images/plugmenu5.png"><label>求职管理</label></a></li>
				<li class="home"><a href="/"></a></li>
				<li><a href="/company/"><img src="http://cdn.597.com/app/images/plugmenu1.png"><label>招聘管理</label></a></li>
				<li><a href="qrcode:"><img src="http://cdn.597.com/app/images/plugmenu8.png"><label>二维码</label></a>
				</li>
			</ul>
		</nav>
	</div>
	<!--<a href="/suggestion.html" class="feedback">意见<br>反馈</a>-->
<!--{else}-->
	<footer>
		<div class="footNav">
			<!--{if $_SESSION['username'] && $_SESSION['uid']}-->
				<div class="l"><a href="/person/">求职中心<!-- {$_SESSION['username']} --></a>|<!--{if (!$_SESSION['wx_com'] && !$_SESSION['wx_per'])}--><a href="/logout.html">退出</a>|<!--{/if}--><a href="/suggestion.html">意见反馈</a></div>
			<!--{elseif $_SESSION['cname'] && $_SESSION['cid']}-->
				<div class="l"><a href="/company/">招聘中心<!-- {$_SESSION['cname']} --></a>|<!--{if (!$_SESSION['wx_com'] && !$_SESSION['wx_per'])}--><a href="/logout.html">退出</a>|<!--{/if}--><a href="/suggestion.html">意见反馈</a></div>
				<!-- <div class="l"><a href="/company/"><span style="width: 45%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; display: inherit;height: 29px;line-height: 29px;float: left;text-align: left;margin-left: 10px;">{$_SESSION['cname']}</span></a>|<a href="/logout.html">退出</a>|<a href="/suggestion.html">意见反馈</a></div> -->
			<!--{else}-->
				<div class="l"><a href="/person/login.html">登录</a>|<a href="/person/register.html">注册</a>|<a href="/suggestion.html">意见反馈</a></div>
				<!-- <div class="l"><a href="/person/login.html">求职登录</a></div> -->
			<!--{/if}-->
			<div class="r"><a href=#top style="display:none;">返回顶部 <i id="back_ico" style="display:inline-block; width:0; height:0; border:5px solid #666; border-color:transparent transparent #666 transparent;"></i></a></div>
		</div>
		<!--{if (!$_SESSION['wx_com'] && !$_SESSION['wx_per'])}--><p><a href="/goto.html?act=m" class="cu">触屏版</a><a href="/goto.html?act=pc">电脑版</a></p><!--{/if}-->
		<!-- <p>Copyright &copy;2014&nbsp;{$domainInfo['region_name_short']}597人才网 版权所有</p> -->
		<p>服务热线：<a href="tel:400-810-8597" style="color:#27b6a6;">400-810-8597</a></p>
		<p>厦门才盛人才服务有限公司版权所有:&copy;2016</p>
	</footer>
<!--{/if}-->
	<div style="display: none" id="wx_stats">
		<script src="http://s5.cnzz.com/z_stat.php?id=1000320696&web_id=1000320696" language="JavaScript"></script>
	</div>
	<style>
		#back_top {width: 40px; height: 40px; background: rgba(0,0,0,0.5); position: fixed; right:10px; bottom:80px; display: block; border-radius:5px; text-align: center; display: none; line-height: 40px; z-index: 999999;}
		#back_top:active {background: rgba(0,0,0,0.7);}
		#back_top span {width: 0;   height: 0;   border-left: 7px solid transparent;border-right: 7px solid transparent; border-bottom: 7px solid #fff; opacity:0.8; display: inline-block; margin-top: 17px;}
	</style>
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
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d2fda47ce0b655f7ac286c4442a37939";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
	