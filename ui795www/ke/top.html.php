<!--[if lt IE9]  -->
	<script src="http://cdn.{ROOT_DOMAIN}/js/html5.js?v=20140722"></script>
	<script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/json2.js?v=125"></script>
<!-- [endif] -->
<div class="topNav">
	<div class="topNavCon" style="width:1100px;">
		<span class="topNavR">
			<div id="user_menu_notlogin" >
				<span class="per_icon">&nbsp;</span><a href="{$jobUrl}/person/login.html">求职者登录</a><span class="topLine">|</span><a href="{$jobUrl}/company/login.html">企业登录</a><span class="topLine">|</span><a href="{$jobUrl}/person/register.htm" style="font-weight:normal;">免费注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
			<span class="" id="user_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span><a href="{$jobUrl}/person/" id="user_menu_name" class="user_name" target="_blank"></a><span class="topLine">|</span>
				<a href="{$jobUrl}/person/logout.html" style="color:#777">[退出]</a>
			</span>
			<span class="" id="com_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span><a href="{$jobUrl}/company/" id="com_menu_name" class="user_name" target="_blank"></a><span class="topLine">|</span>
				<a href="{$jobUrl}/company/logout.html" style="color:#777">[退出]</a>
			</span>
		</span>
		<ul>
			<!-- <li><a href="#">切换城市 <i class="jpFntWes searchType" style="font-size:14px;"></i></a></li><em class="topLine">|</em> -->
			<li><a href="{$jobUrl}/">首 页</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/zhaopin/" target="_blank">找工作</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/company/resume/search.html"  target="_blank">找人才</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/person/"  target="_blank">求职管理</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/companyjob.html"  target="_blank">最新招聘</a></li><em class="topLine">|</em>
			<!--<li><a href="/guide/"  target="_blank">职场指南</a></li><em class="topLine">|</em>
			<li><a href="/hrnews/"  target="_blank">HR资讯</a></li>-->
		</ul>
	</div>
</div>
<style>
.paginator span{padding: 9px 13px;font-weight: bold;font-size: 14px;border: none;color: #fff;background: #d70b17;margin: 0px 5px;}
.BingTitle {color: #377ebc;float: left;font-family: Microsoft Yahei,"微软雅黑";font-size: 34px;line-height: 40px;margin: 5px 0 0 0px;border-left: 1px solid #ccc;width: 230px;text-decoration: none;padding-left:20px;text-align: left;}
.BingTitle  a{color: #377ebc;}
.r {float: left;margin-top: 5px;}
.keywordinput {width: 425px;height: 40px;line-height: 40px;border: 1px solid #eeeeee;background-color: #f0f0f0;text-indent: 20px;font-size: 14px;}
.keywordbutton {position: absolute;right: 0px;top: 0;background-color: #d70b17;height: 42px;width: 80px;color: #fff;font-size: 14px;text-align: center;border: 0;letter-spacing: 5px;line-height: 42px;cursor: pointer;}
</style>
<div id="header" class="topHeader " style="height:80px;padding-top:10px;">
	<div class="header_fix" style="width:1100px;">
		<div class="header_cont">
			<div class="header_left">
				<a class="logo" href="/"><img src="http://cdn.597.com/img/common/smLogo.jpg" alt="" /></a>
				<div class="BingTitle" >
					<a href="/ke/category.html">597云课堂</a>
				</div>
				<div class="r" style="position: relative;">
                    <input name="ctl00$keyword" type="text" id="ctl00_keyword" class="keywordinput" value="{$_GET['key']}" placeholder="请输入课程关键字、讲师">
                    <a onclick="Search()" class="keywordbutton">搜索</a>
                </div>
			</div>
			<!-- <div class="btns" id="btns">
				<span class="loginBtn">
					<i class="jpFntWes ico" ></i>手机站<i class="jpFntWes searchType"></i>
					<p>
						<img src="http://cdn.597.com/img/common/mobileIco.png" alt="手机站点：m.597.com" />
						<em>手机站点：m.597.com</em>
					</p>
				</span>
				<span class="zhuce">
					<img src="http://cdn.597.com/img/common/weixinLogo.jpg" alt="微信" class="weixinIco" />微信<i class="jpFntWes searchType"></i>
					<p>
						<img src="http://cdn.597.com/img/common/wxCode.png" alt="关注597官方微信！" />
						<em>关注597官方微信！</em>
					</p>
				</span>
			</div> -->
		</div>
	</div>

</div>

<div id="boxNav" class="navBox panelBox">
	<div class="navBoxC">
		<div class="l">
			<div class="navLst">
				<p><a href="/jobSearch.html">找工作</a></p>
				<p><a href="/famous.html">名企招聘</a></p>
				<!--<p><a href="/hrnews/">HR咨询</a></p>
				<p><a href="/guide/">职场指南</a></p>-->
				<p><a href="/company/login.html">企业服务</a></p>
			</div>
			<div class="navPhone"><p>下载手机客户端</p><p class="lnk"><a href="javascript:;"></a></p></div>
		 </div>
		<div class="r">
			<div class="hd"><h3>热门导航</h3></div>
			<div class="bd">
				<ul>
				<li><a href="/zhaopin/?q=销售">销售</a></li>
				<li><a href="/zhaopin/?q=会计">会计</a></li>
				<li><a href="/zhaopin/?q=营业员">营业员</a></li>
				 <li><a href="/zhaopin/?q=出纳">出纳</a></li>
				<li><a href="/zhaopin/?q=人力资源">人力资源</a></li>
				<li><a href="/zhaopin/?q=文员">文员</a></li>
				<li><a href="/zhaopin/?q=前台">前台</a></li>
				<li><a href="/zhaopin/?q=网络推广">网络推广</a></li>
				<li><a href="/zhaopin/?q=软件开发">软件开发</a></li>
				<li><a href="/zhaopin/?q=美工">美工</a></li>
				<li><a href="/zhaopin/?q=网站运营">网站运营</a></li>
				<li><a href="/zhaopin/?q=行政">行政</a></li>
				<li><a href="/zhaopin/?q=设计">设计</a></li>
				<li><a href="/zhaopin/?q=平面">平面</a></li>
				<li><a href="/zhaopin/?q=助理">助理</a></li>
				<li><a href="/zhaopin/?q=施工员">施工员</a></li>
				<li><a href="/zhaopin/?q=置业顾问">置业顾问</a></li>
				<li><a href="/zhaopin/?q=服务员">服务员</a></li>
				<li><a href="/zhaopin/?q=二手房销售">二手房销售</a></li>
				<li><a href="/zhaopin/?q=平面模特">平面模特</a></li>
				<li><a href="/zhaopin/?q=护理师">护理师</a></li>
				<li class="hot"><a href="/zhaopin/?q=外贸">外贸</a></li>
				<li class="hot"><a href="/zhaopin/?q=营销总监">营销总监</a></li><li class="hot"><a target="_blank" href="/zhaopin/?q=大区经理">大区经理</a></li>
				<li class="hot"><a href="/zhaopin/?q=总经理">总经理</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<b class="arr"></b>
	</div>
</div>
<script type="text/javascript">
 	$(function () {
		var nickName = $.cookie("nickname");
		var userType = $.cookie("userType");
		if(nickName){
			if(userType=='1'){
				$('#user_menu_notlogin').hide();
				$('#com_menu_logined').hide();
				$('#user_menu_logined').show();
				$('#user_menu_logined').find('#user_menu_name').html(nickName);
			}
			if(userType=='2'){
				$('#user_menu_notlogin').hide();
				$('#com_menu_logined').show();
				$('#user_menu_logined').hide();
				$('#com_menu_logined').find('#com_menu_name').html(nickName);
			}
		}
	});
 	$('#btns span').hover(function() {
		$(this).find('p').show();
	}, function() {
		$(this).find('p').hide();
	});
 </script>