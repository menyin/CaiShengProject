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
		.top_bar .top_menu2>li.home a { height: 66px; width: 66px; margin: auto; border-radius: 60px; position: relative; top: -22px; left: 2px; background: url('http://cdn.597.com/app/images/home.png') no-repeat center center; background-size: 100% 100%; }
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
				<li><a href="/zhaopin/"><img src="http://cdn.597.com/app/images/plugmenu6.png"><label>职位搜索</label></a></li>
				<li><a href="/person/"><img src="http://cdn.597.com/app/images/plugmenu5.png"><label>求职管理</label></a></li>
				<li class="home"><a href="/"></a></li>
				<li><a href="/company/"><img src="http://cdn.597.com/app/images/plugmenu1.png"><label>招聘管理</label></a></li>
				<li><a href="qrcode:"><img src="http://cdn.597.com/app/images/plugmenu8.png"><label>二维码</label></a>
				</li>
			</ul>
		</nav>
	</div>
<!--{else}-->
	<div class="footer">
		<footer>
			<div class="footer_top">
				<!--{if $_SESSION['uid']}-->
					<div class="islogin"> <a href="/person/">求职中心<!-- {$_SESSION['username']} --></a>|<a href="/person/logout.html">退出</a>|<a href="/suggestion.html">意见反馈</a></div>
				<!--{elseif $_SESSION['cid']}-->
					<div class="islogin"> <a href="/company/">招聘中心<!-- {$_SESSION['cname']} --></a>|<a href="/logout.html">退出</a>|<a href="/suggestion.html">意见反馈</a></div>
					<!-- <div class="islogin"> <a href="/company/"><span style="width: 45%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; display: inherit;height: 29px;line-height: 29px;float: left;text-align: left;margin-left: 10px;">{$_SESSION['cname']}</span></a>|<a href="/logout.html">退出</a>|<a href="/suggestion.html">意见反馈</a></div> -->
				<!--{else}-->
					<div class="islogin"> <a href="/person/login.html">登录</a>|<a href="/person/register.html">注册</a>|<a href="/suggestion.html">意见反馈</a></div>
				<!--{/if}-->
				<!-- <div style="float:right; margin-right:15px;" style="display:none;"><a href="#top">返回顶部<img style=" margin-left:3px; margin-bottom:2px;" src="http://cdn.597.com/m/images/change-city2.png" width="9" height="9"></a></div> -->
				<style>
					.footer_top .icon { margin:6px 5px 0 0px ;}
				</style>
			</div>

		<div class="footer_bottom">
			<!-- <div class="gotop" id="gotop"><a href="javascript:scroll(0,0)"><img src="http://cdn.597.com/m/images/top.png" style="width:100%"></a></div> -->

			<div class="links"><a href="/file/download.html">客户端</a>&nbsp;&nbsp;&nbsp; <span><a href="/goto.html?act=m" class="cu"><font colot="#999">触屏版</font></a></span> <span>    </span> <a href="/goto.html?act=pc">电脑版</a><!--  <a href="http://m.shoudurc.com/Home/Android">下载APP</a> <span>-</span>  --></div>
		</div>
		<p class="copyRight"> <span>服务热线：<a href="tel:400-810-8597" style="color:#27b6a6;">400-810-8597</a></span> </p>
		<p class="copyRight"> <span>厦门才盛人才服务有限公司版权所有:&#169;{$curYear}</span> </p>
		</footer>
	</div>
<!--{/if}-->

<script src="http://cdn.{ROOT_DOMAIN}/tongji.js?v=20160317" language="JavaScript"></script>
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
