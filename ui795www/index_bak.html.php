
<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="mobile-agent" content="format=xhtml; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=html5; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=wml; url={$mobileUrl}">
	<meta name="shenma-site-verification" content="a8475afee3dfb435c0e57fa7db047119_1452129418"> 
	<title><!--{if $title}-->{$title}<!--{else}-->{$domainInfo['region_name_short']}人才网官网、{$domainInfo['region_name_short']}人才网、{$domainInfo['region_name_short']}招聘网、597{$domainInfo['region_name_short']}人才网<!--{/if}--></title>
	<meta name="description" content="<!--{if $description}-->{$description}<!--{else}-->{$domainInfo['region_name_short']}人才网,597{$domainInfo['region_name_short']}才网是专注于{$domainInfo['region_name_short']}的求职招聘网站,{$domainInfo['region_name_short']}人才网为企业提供职位发布,简历搜索等专业人才招聘服务,为求职者提供最新招聘信息,找工作上597{$domainInfo['region_name_short']}人才网<!--{/if}-->" />	
	<meta name="keywords" content="<!--{if $keywords}-->{$keywords}<!--{else}-->{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}招聘网,597{$domainInfo['region_name_short']}人才网<!--{/if}-->" />

	<meta http-equiv="Content-Language" content="zh-CN" />
	<link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
	<link rel="logo" href="/597logo/logo121x75.png" />
	<!--[if lt IE9]  -->
	<script src="http://cdn.597.com/js/html5.js?v=20140722"></script>
	<!-- [endif] -->
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/597index.css?v=20150806" />
	<!--<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/jquery-1.js"></script>-->
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.cookie.js?v=20140312"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/index.js?v=20151014"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/uaredirect.js?v=20151014"></script>
	<script language="javascript" type="text/javascript">uaredirect("{$mobileUrl}");</script>
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<ul id="topLoginStatus">
				<li><a href="/person/register.html" >求职者注册</a> <span class="line">|</span></li>
				<li><a href="/company/register.html" >企业注册</a> <span class="line">|</span></li>
				<li><a href="/person/login.html" >求职者登录</a><span class="line">|</span></li> 
				<li><a href="/company/login.html" >企业登录</a> <span class="line">|</span>  </li>
				<li class="top-wx" >
					微信
					<img src="http://cdn.597.com/img/common/wxCode.png" class="wxImg" />
					<span class="line">|</span>
				</li>
				<li class="top-phone">
					<a href="/download/app/" target="_blank" style="color:#444;font-weight:normal;" >手机版</a>
					<span class="line">|</span>
				</li>
				<li><a href="/about/price.html" style="color:red;" target="_blank">收费标准</a></li>
			</ul>
			<ul id="topPerLogin" style="display:none;" >
				<li>您好,<a href="/person/"><span id="topUsername" class=" fb"></span></a><span class="line">|</span> </li> 
				<li><a href="/person/logout.html" >退出</a>  </li>
			</ul>
			<ul id="topComLogin" style="display:none;" class="flor">
				<li>您好,<a href="/company/"><span id="topUsername" class=" fb"></span></a><span class="line">|</span></li> 
				<li><a href="/company/logout.html" >退出</a>  </li>
			</ul>
			<div class="newHeadArea">
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo"><a href="/"><img src="http://cdn.597.com/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" /></a></div>
		<div class="changeCity">
			<strong><span id="currentCity"><!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}--></span></strong><br />
			<a href="/changecity.html">切换城市 <i class="jpFntWes searchType"></i></a>
		</div>
		<div class="searchBox">
			<span class="tSch" id="tSch">
				<span id="inpBox">
					<span>
						<input type="text" class="text tSchText ac_input" id="tSchJobText" value="请输入职位名称或公司名称" autocomplete="off" style="color: rgb(153, 153, 153);">
						<a href="javascript:void(0)" class="yahei tSchBtn" id="btnJobSearch">搜索</a>
					</span>
				</span>
				<p class="hotWords">
					<!--{loop $keywordArr $l}-->
						<!--{if $l['pinyin']}-->
							<a href="/zhaopin/{$l['pinyin']}/" target="_blank">{$l['keyword']}</a>
						<!--{else}-->
							<a href="/zhaopin/?q={$l['keyword']}" target="_blank">{$l['keyword']}</a>
						<!--{/if}-->
					<!--{/loop}-->
				</p>
			</span>
			<!--<a class="adSearch" href="/jobSearch.html" style="color:#999;" target="_blank">高级搜索</a>-->
		</div>
		<div class="btns" id="btns">
			<a href="/company/job/job.html?act=edit" target="_blank" class="fabu">发布招聘</a>
			<a href="/person/" target="_blank">登记简历</a>
		</div>
		<div class="clear"></div>
	</div>

	<!-- 导航条 -->
	<div class="nav">
		<div class="navCon">
			<div class="navBox" id="navMain">
				<h3>
					<a href="javascript:void(0);" id="navMenu"> <b>全部职位分类</b>
						<i class="jpFntWes"></i>
					</a>
				</h3>
				<div class="pos" id="boxNav" >
					<div class="lst" id="navLst">
						<ul>
							<li >
								<a class="lstLnk" href="javascript:void(0)"> <i class="newIcon newIcon"></i>
									<p class="lnk">销售、客服、市场、公关</p> <b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)"> <i class="newIcon newIcon"></i>
									<p class="lnk">人力、行政、财务、管理</p> <b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon"></i>
									<p class="lnk">生产、工人、质控</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon2"></i>
									<p class="lnk">互联网、游戏、软件</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon3"></i>
									<p class="lnk">通信、硬件、电子电器</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon4"></i>
									<p class="lnk">汽车、机械</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon5"></i>
									<p class="lnk">房地产、建筑、物业</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon6"></i>
									<p class="lnk">金融、银行、保险</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon7"></i>
									<p class="lnk">广告、设计、传媒</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon8"></i>
									<p class="lnk">餐饮、百货、生活服务</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon9"></i>
									<p class="lnk">医疗、医药</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon10"></i>
									<p class="lnk">教育、培训、专业服务</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon11"></i>
									<p class="lnk">能源、化工、服装、环保</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon12"></i>
									<p class="lnk" style="letter-spacing:-1px;">进出口、采购、物流、司机</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon13"></i>
									<p class="lnk">农林牧渔、其他</p>
									<b class="jpFntWes arr"></b>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>

			<ul class="navList">
				<li><a href="/">首页</a></li>
				<li><a href="/zhaopin/">找工作</a></li>
				<li><a href="/company/resume/search.html">找人才</a></li>
				<li><a href="/person/">求职管理</a></li>
				<li><a href="/companyjob.html">最新招聘</a></li>
				<li><a href="/guide/">职场指南</a></li>
				<li><a href="/hrnews/">HR资讯</a></li>
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>

	<div class="mainCon">
		<!-- banner广告 -->
		<div class="banner">
			<!--{if $ad20}-->
				<ul id="focus">
				<!--{loop $ad20List $k $l}-->
					<li  <!--{if $k>0}-->style="display:none;"<!--{/if}--> ><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}" alt="{$l['cname']}"/></a></li>
				<!--{/loop}-->
				</ul>
				<ul id="focusArr">
					<!--{loop $ad20List $k $l}-->
					<li <!--{if $k==0}-->class="cu"<!--{/if}-->>{$k}</li>
					<!--{/loop}-->
				</ul>				
			<!--{else}-->
				<ul id="focus">
					<li><a href="javascript:void(0)"><img src="http://cdn.597.com/img/common/newbanner02.jpg" alt="" /></a></li>
					<li style="display:none;"><a href="javascript:void(0)"><img src="http://cdn.597.com/img/common/newbanner01.jpg" alt="" /></a></li>
				</ul>
				<ul id="focusArr">
					<li class="cu"></li>
					<li></li>
				</ul>
			<!--{/if}-->
			<p class="slidePrev"></p>
			<p class="slideNext"></p>
		</div>
		<!-- 登陆框 -->
		<div class="loginBox" >
			<div id="notLoginStatus">
				<ul id="loginPanel">
					<li class="cu">求职者登录</li>
					<li>企业登录</li>
				</ul>
				<div class="loginPer">
					<form id="formPer" name="formPer" method="post" action="/api/web/person.api">
						<p class="tipTxt"><i class="jpFntWes"></i><span></span></p>
						<span class="formTxt"><input type="text" class="text " id="username1" placeholder="手机/邮箱/用户名" /><label for="username1">手机/邮箱/用户名</label></span>
						<span class="formTxt"><input type="password" class="text" id="pwd1" placeholder="请输入密码"/><label for="pwd1">请输入密码</label></span>
						<span class="formTxt" id="perYzm" style="display:none;"><input type="text" class="text" style="width:100px;" id="yzm1" placeholder="请输入验证码"/><label for="yzm1" >请输入验证码</label>
						<img id="imgCode" src="" alt="验证码" class="yzm" /></span>
						<span id="recordPwd">
							<a href="/person/findpassword.htm" class="forget aGray2">忘记密码？</a>
							<label for="perAutoLogin">
								<input type="checkbox" id="perAutoLogin" name="perAutoLogin"/>
								自动登录
							</label>
						</span>
						<input type="button" id="perBtn" class="btn" value="登录" />
					</form>
					<p>还没有账户？<a href="/person/register.html">注册简历</a><a href="/company/register.html"  style="margin-left:18px;">企业注册</a></p>
					<!--
					<p class="third_login">使用第三方帐号快速登录
						<a href="javascript:void(0)" id="sinaLoginTop" title="新浪微博登录"><img src="http://cdn.597.com/img/common/weibo_login.gif" alt="新浪微博登录" /></a>
						<a href="javascript:void(0)" id="qqLoginTop" title="QQ登录"><img src="http://cdn.597.com/img/common/qq_login.gif" alt="QQ登录" /></a>
					</p>
					-->
				</div>
				<div class="loginCom" style="display:none;">
					<form id="formCom" name="formCom" method="post" action="/api/web/company.api">
						<p class="tipTxt" ><i class="jpFntWes"></i><span></span></p>
						<span class="formTxt"><input type="text" class="text" id="username2" placeholder="请输入用户名" /><label for="username2">请输入用户名</label></span>
						<span class="formTxt"><input type="password" class="text"  id="pwd2" placeholder="请输入密码" /><label for="pwd1">请输入密码</label></span>
						<span class="formTxt" id="comYzm" style="display:none;"><input type="text" class="text" style="width:100px;" placeholder="请输入验证码" id="yzm2" /><label for="yzm1">请输入验证码</label>
						<img id="imgComCode" src="" alt="验证码" class="yzm" /></span>
						<span id="recordPwd">
							<a href="tencent://message/?Menu=yes&amp;amp;uin=938066631&amp;amp;Service=58&amp;amp;SigT=A7F6FEA02730C98835722A8AC9DC8C615D84ACB35FB95C21FCD96C5A8E87670C48230BDEB91DEEF6E4424E9E87B7B2156956457B823296358B88BFE049EE79E506FE35C59DBEC19583765D22E339C27EAE729A29EE0E0ADEFC44E245BF986572A74455C0F0F8CEC5EB4FB812434F5CDCD83D0A7F705045B6&amp;amp;SigU=30E5D5233A443AB2004ADD98B7D4DE306411157356E49A3B71E80C90F5312CE7D795D7761D5AB663C1B7403C4876BBF696817F5FF01D1177C086510304A5C0F2F033F138FDFD5152" target="_blank" class="forget aGray2">忘记密码？</a>
							<label for="comAutoLogin">
								<input type="checkbox" id="comAutoLogin" name="comAutoLogin"/>
								自动登录
							</label>
						</span>
						<input type="button" id="comBtn" class="btn" value="登录" />
					</form>
					<p>还没有账户？<a href="/company/register.html">企业注册</a></p>
				</div>
			</div>	
			<div class="logined" style="display:none;">
				<div id="perStatus" style="display:none;">
					<div>您好，<span id="user_menu_name" ></span></div>
					<div style="margin:15px 0 20px;"><a href="/person/logout.html" class="exit">退出</a><a href="/person/resume" class="fb aGray">管理我的简历</a></div>
					<div><a href="/person/" class="enter">进入我的会员中心</a></div>
				</div>
				<div id="comStatus" style="display:none;">
					<div>您好，<span id="com_menu_name" ></span></div>
					<div style="margin:15px 0 20px;"><a href="/company/logout.html" class="exit">退出</a><a href="/company/resume/apply.html" class="fb aGray">管理收到的简历</a></div>
					<div><a href="/company/" class="enter">进入我的企业中心</a></div>
				</div>
			</div>
		</div>
		<!-- 热门招聘 -->
		<div class="mainTabs">
			<h2 >
				<span class="cu"><em>热门招聘</em></span>
				<span><em>最新职位</em></span>
				<span><em>最新兼职</em></span>
				<span><em>最新实习</em></span>
				<span ><em style="border-right:none;">最新资讯</em></span>
			</h2>
			<div class="clear"></div>
			<div class="tabContents">
				<div class="tabCon">
					<ul class="tabUl">
						<!--{loop $ad10List $l}-->
						<li><a href="/com-{$l['_cid']}/" class="aGray" title="{$l['cname']}" target="_blank">{$l['cname']}</a></li>
						<!--{/loop}-->
					</ul>
				</div>
				<div class="tabCon" style="display:none;">
					<ul class="tabUl">
						<!--{loop $ad11List $l}-->
						<li><a href="/job-{$l['_jid']}.html" class="aGray" title="{$l['jname']}" target="_blank">{$l['jname']}</a></li>
						<!--{/loop}-->
					</ul>
				</div>
				<div class="tabCon" style="display:none;">
					<ul class="tabUl">
						<!--{loop $ad12List $l}-->
						<li><a href="/job-{$l['_jid']}.html" class="aGray" title="{$l['jname']}" target="_blank">{$l['jname']}</a></li>
						<!--{/loop}-->
					</ul>
				</div>
				<div class="tabCon" style="display:none;">
					<ul class="tabUl">
						<!--{loop $ad13List $l}-->
						<li><a href="/job-{$l['_jid']}.html" class="aGray" title="{$l['jname']}" target="_blank">{$l['jname']}</a></li>
						<!--{/loop}-->
					</ul>
				</div>
				<div class="tabCon" style="display:none;">
					<ul class="tabUl">
						<!--{loop $newsList $k $l}-->
						<li><a href="/guide/detail-{$l['detail_id']}.html" class="aGray" target='_blank'>{$l['detail_title']}</a></li>
						<!--{/loop}-->
					</ul>
				</div>
			</div>
		</div>

	</div>

	<!-- 热门职位 -->
	<div class="newjobArea" >
		<div class="jobL">
			<h3><span>热门职位</span></h3>
			<ul>
				<!--{loop $hot_jobs_arr $l}-->
					<!--{if $l['key']}-->
						<li><a target="_blank" href="/zhaopin/{$l['key']}/">{$l['word']}</a></li>
					<!--{else}-->
						<li><a target="_blank" href="/zhaopin/?q={$l['word']}">{$l['word']}</a></li>
					<!--{/if}-->
				<!--{/loop}-->
			</ul>
		</div>
		<div class="jobR">
			<h3><span>福利筛选</span></h3>
			<ul>
				<li><a href="/zhaopin/?q=%E4%BD%8F%E6%88%BF%E5%85%AC%E7%A7%AF%E9%87%91" target="_blank" >住房公积金 </a></li>
				<li class="mid"><a href="/zhaopin/?q=%E4%BA%94%E9%99%A9" target="_blank" > 五险 </a></li>
				<li><a href="/zhaopin/?q=%E5%91%A8%E6%9C%AB%E5%8F%8C%E4%BC%91" target="_blank" >周末双休 </a></li>
				<li><a href="/zhaopin/?q=%E5%8C%85%E5%90%83%E5%8C%85%E4%BD%8F" target="_blank" >包吃包住 </a ></li>
				<li class="mid"><a href="/zhaopin/?q=%E5%8C%85%E5%90%83" target="_blank" >包吃 </a></li>
				<li><a href="/zhaopin/?q=%E5%8C%85%E4%BD%8F" target="_blank" >包住 </a></li>
			</ul>
			<p><a href="/person/register.html" target="_blank"><img src="http://cdn.597.com/img/common/reg_pic.jpg"   /></a></p>
		</div>
	</div>

	

	<!-- 热门招聘 -->
	<!--{if $ad10List}-->
	<div class="hot" style="display:none;">
		<h3 class="hd2"><!--<a href="#" class="more">更多&gt;&gt;</a>--><span>热门招聘</span></h3>
		<ul>
			<!--{loop $ad10List $l}-->
			<li><a href="/com-{$l['_cid']}/" class="aGray" title="{$l['cname']}" target="_blank">{$l['cname']}</a></li>
			<!--{/loop}-->
		</ul>
		<div class="clear"></div>
	</div>
	<!--{/if}-->

	<!-- 金牌企业招聘 -->
	<!--{if $ad8List||$ad9List}-->
	<div class="auto ">
		<div class="gold">
			<!-- 金牌图标 -->
			<ul>
				<!--{loop $ad9List $l}-->
				<li ><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" title="{$l['cname']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}"  alt="{$l['cname']}" /></a></li>
				<!--{/loop}-->
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<!--{/if}-->
	<!-- 金牌企业招聘2 中图标 -->
	<!--{if $ad1List}-->
	<div class="auto">
		<h2 class="hd2" style="padding:20px 0 0 10px; border-bottom:none;"><span>金牌企业招聘</span></h2>
		<div class="gold2">
			<ul>
				<!--{loop $ad1List $l}-->
				<li><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" title="{$l['cname']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}"  alt="{$l['cname']}" /></a></li>
				<!--{/loop}-->
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<!--{/if}-->

	<!-- 推荐企业招聘 -->
	<!--{if $ad18List}-->
	<div class="hot">
		<h3 class="hd2"><span>推荐企业招聘</span></h3>
		<ul>
			<!--{loop $ad18List $l}-->
			<li>
				<a href="/com-{$l['_cid']}/" class="aGray" title="{$l['cname']}" target="_blank">{$l['cname']}</a>
			</li>
			<!--{/loop}-->
		</ul>
		<div class="clear"></div>
	</div>
	<!--{/if}-->


	<!-- 品牌企业招聘 -->
	<!--{if $ad19List}-->
	<div class="pinpai auto mgb20">
		<h2 class="hd2" style="padding-left:10px; border-bottom:none;"><span>品牌企业招聘</span></h2>
		<div>
			<ul>
				<!--{loop $ad19List $l}-->
					<li><a href="/com-{$l['_cid']}/" title="{$l['cname']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}"  alt="{$l['cname']}" /></a></li>
				<!--{/loop}-->
			</ul>
			<p class="clear"></p>
		</div>
	</div>
	<!--{/if}-->

	<!-- 城市频道招聘 -->
	<!--{if $domainInfo['region_id']==1}-->
	<div class="auto mainCitys" style="display:block;">
		<h2 class="hd2"><span>地区频道招聘</span></h2>
		<div>
			<dl>
			<dd>
				<a target="_blank" href=' http://xm.{ROOT_DOMAIN}'  class="red fb">厦门</a>
				<a target="_blank"  href=' http://siming.{ROOT_DOMAIN}'>思明</a>
				<a target="_blank"  href=' http://huli.{ROOT_DOMAIN}'>湖里</a>
				<a target="_blank"  href=' http://tongan.{ROOT_DOMAIN}'>同安</a>
				<a target="_blank"  href=' http://haicang.{ROOT_DOMAIN}'>海沧</a>
				<a target="_blank"  href=' http://jimei.{ROOT_DOMAIN}'>集美</a>
				<a target="_blank"  href=' http://xiangan.{ROOT_DOMAIN}'>翔安</a>
			</dd>
			<dd>
				<a target="_blank" href=' http://qz.{ROOT_DOMAIN}'  class="red fb">泉州</a>
				<a target="_blank"  href=' http://jinjiang.{ROOT_DOMAIN}'>晋江</a>
				<a target="_blank"  href=' http://shishi.{ROOT_DOMAIN}'>石狮</a>
				<a target="_blank"  href=' http://nanan.{ROOT_DOMAIN}'>南安</a>
				<a target="_blank"  href=' http://huian.{ROOT_DOMAIN}'>惠安</a>
				<a target="_blank"  href=' http://quangang.{ROOT_DOMAIN}'>泉港</a>
				<a target="_blank"  href=' http://anxi.{ROOT_DOMAIN}'>安溪</a>
				<a target="_blank"  href=' http://dehua.{ROOT_DOMAIN}'>德化</a>
				<a target="_blank"  href=' http://fengze.{ROOT_DOMAIN}'>丰泽</a>
				<a target="_blank"  href=' http://qzlc.{ROOT_DOMAIN}'>鲤城</a>
				<a target="_blank"  href=' http://luojiang.{ROOT_DOMAIN}'>洛江</a>
				<a target="_blank"  href=' http://yongchun.{ROOT_DOMAIN}'>永春</a>
			</dd>
			<dd>
				<a target="_blank" href=' http://np.{ROOT_DOMAIN}'  class="red fb">南平</a>
				<a target="_blank"  href=' http://jianou.{ROOT_DOMAIN}'>建瓯</a>
				<a target="_blank"  href=' http://jianyang.{ROOT_DOMAIN}'>建阳</a>
				<a target="_blank"  href=' http://wuyishan.{ROOT_DOMAIN}'>武夷山</a>
				<a target="_blank"  href=' http://shaowu.{ROOT_DOMAIN}'>邵武</a>
				<a target="_blank"  href=' http://pucheng.{ROOT_DOMAIN}'>浦城</a>
				<a target="_blank"  href=' http://guangze.{ROOT_DOMAIN}'>光泽</a>
				<a target="_blank"  href=' http://zhenghe.{ROOT_DOMAIN}'>政和</a>
				<a target="_blank"  href=' http://shunchang.{ROOT_DOMAIN}'>顺昌</a>
				<a target="_blank"  href=' http://songxi.{ROOT_DOMAIN}'>松溪</a>
				<a target="_blank"  href=' http://yanping.{ROOT_DOMAIN}'>延平</a>
			</dd>
			<dd>
				<a target="_blank" href='http://www.fz597.com'  class="red fb">福州</a>
				<a target="_blank"  href='http://www.fq597.com'>福清</a>
				<a target="_blank"  href='http://www.cl597.com'>长乐</a>
				<a target="_blank"  href='http://www.pingtan597.com'>平潭</a>
				<a target="_blank"  href='http://www.luoyuan597.com'>罗源</a>
				<a target="_blank"  href='http://www.lj597.com'>连江</a>
				<a target="_blank"  href='http://gl.fz597.com'>鼓楼</a>
				<a target="_blank"  href='http://ja.fz597.com'>晋安</a>
				<a target="_blank"  href='http://cs.fz597.com'>仓山</a>
				<a target="_blank"  href='http://tj.fz597.com'>台江</a>
				<a target="_blank"  href='http://mw.fz597.com'>马尾</a>
				<a target="_blank"  href='http://mh.fz597.com'>闽侯</a>
			</dd>
			<dd>
				<a target="_blank" href='http://www.zz597.com'  class="red fb">漳州</a>
				<a target="_blank"  href='http://www.ct597.com'>长泰</a>
				<a target="_blank"  href='http://www.zhangpu597.com'>漳浦</a>
				<a target="_blank"  href='http://xc.zz597.com'>芗城</a>
				<a target="_blank"  href='http://lw.zz597.com'>龙文</a>
				<a target="_blank"  href='http://lh.zz597.com'>龙海</a>
				<a target="_blank"  href='http://yx.zz597.com'>云霄</a>
				<a target="_blank"  href='http://za.zz597.com'>诏安</a>
				<a target="_blank"  href='http://ds.zz597.com'>东山</a>
				<a target="_blank"  href='http://nj.zz597.com'>南靖</a>
				<a target="_blank"  href='http://ph.zz597.com'>平和</a>
			</dd>
			<dd>
				<a target="_blank" href='http://www.pt597.com'  class="red fb">莆田</a>
				<a target="_blank"  href='http://cx.pt597.com'>城厢</a>
				<a target="_blank"  href='http://hj.pt597.com'>涵江</a>
				<a target="_blank"  href='http://lc.pt597.com'>荔城</a>
				<a target="_blank"  href='http://xy.pt597.com'>秀屿</a>
				<a target="_blank"  href='http://www.xy597.com'>仙游</a>
			</dd>
			<dd>
				<a target="_blank" href='http://www.597rcw.com'  class="red fb">龙岩</a>
				<a target="_blank"  href='http://xl.597rcw.com'>新罗</a>
				<a target="_blank"  href='http://www.zp597.com'>漳平</a>
				<a target="_blank"  href='http://ct.597rcw.com'>长汀</a>
				<a target="_blank"  href='http://yd.597rcw.com'>永定</a>
				<a target="_blank"  href='http://sh.597rcw.com'>上杭</a>
				<a target="_blank"  href='http://wp.597rcw.com'>武平</a>
				<a target="_blank"  href='http://lc.597rcw.com'>连城</a>
			</dd>
			<dd>
				<a target="_blank" href='http://www.sm597.com'  class="red fb">三明</a>
				<a target="_blank"  href='http://www.ya597.com'>永安</a>
				<a target="_blank"  href='http://www.sx597.com'>沙县</a>
				<a target="_blank"  href='http://dt.sm597.com'>大田</a>
				<a target="_blank"  href='http://jl.sm597.com'>将乐</a>
				<a target="_blank"  href='http://tn.sm597.com'>泰宁</a>
				<a target="_blank"  href='http://jn.sm597.com'>建宁</a>
				<a target="_blank"  href='http://yx.sm597.com'>尤溪</a>
				<a target="_blank"  href='http://mingxi.sm597.com'>明溪</a>
				<a target="_blank"  href='http://ql.sm597.com'>清流</a>
				<a target="_blank"  href='http://nh.sm597.com'>宁化</a>
			</dd>
			<dd>
				<a target="_blank" href='http://www.nd597.com'  class="red fb">宁德</a>
				<a target="_blank"  href='http://jc.nd597.com'>蕉城</a>
				<a target="_blank"  href='http://www.fa597.com'>福安</a>
				<a target="_blank"  href='http://www.fd597.com'>福鼎</a>
				<a target="_blank"  href='http://www.xp597.com'>霞浦</a>
				<a target="_blank"  href='http://gt.nd597.com'>古田</a>
				<a target="_blank"  href='http://pn.nd597.com'>屏南</a>
				<a target="_blank"  href='http://sn.nd597.com'>寿宁</a>
				<a target="_blank"  href='http://zn.nd597.com'>周宁</a>
				<a target="_blank"  href='http://www.zr597.com'>柘荣</a>
			</dd>
			<dd>
				<a href="" class="red fb">其他分站</a>
				<a href="http://www.jh597.com"  target="_blank" >金华</a>
				<a href="http://www.yw597.com"  target="_blank" >义乌</a>
			</dd>
			<dd class="longLst">
				<a href="http://bj.{ROOT_DOMAIN}"  target="_blank" class="red fb">北京</a>
				<a href="http://dongcheng.{ROOT_DOMAIN}" title="东城" target="_blank" >东城</a>
				<a href="http://xicheng.{ROOT_DOMAIN}" title="西城" target="_blank" >西城</a>
				<a href="http://chaoyang.{ROOT_DOMAIN}" title="朝阳" target="_blank" >朝阳</a>
				<a href="http://fengtai.{ROOT_DOMAIN}" title="丰台" target="_blank" >丰台</a>
				<a href="http://shijingshan.{ROOT_DOMAIN}" title="石景山" target="_blank" >石景山</a>
				<a href="http://haidian.{ROOT_DOMAIN}" title="海淀" target="_blank" >海淀</a>
				<a href="http://mentougou.{ROOT_DOMAIN}" title="门头沟" target="_blank" >门头沟</a>
				<a href="http://fangshan.{ROOT_DOMAIN}" title="房山" target="_blank" >房山</a>
				<a href="http://tongzhou.{ROOT_DOMAIN}" title="通州" target="_blank" >通州</a>
				<a href="http://shunyi.{ROOT_DOMAIN}" title="顺义" target="_blank" >顺义</a>
				<a href="http://changping.{ROOT_DOMAIN}" title="昌平" target="_blank" >昌平</a>
				<a href="http://daxing.{ROOT_DOMAIN}" title="大兴" target="_blank" >大兴</a>
				<a href="http://huairou.{ROOT_DOMAIN}" title="怀柔" target="_blank" >怀柔</a>
				<a href="http://pinggu.{ROOT_DOMAIN}" title="平谷" target="_blank" >平谷</a>
				<a href="http://miyun.{ROOT_DOMAIN}" title="密云" target="_blank" >密云</a>
				<a href="http://yanqing.{ROOT_DOMAIN}" title="延庆" target="_blank" >延庆</a>
				<a href="http://bjzhoubian.{ROOT_DOMAIN}" title="周边" target="_blank" >周边</a>
			</dd>
		</dl>
		</div>
		<div class="clear"></div>
	</div>
	<!--{else}-->

		<!-- 最新企业招聘 -->
		<!--{if $coms}-->
		<div class="hot jobs">
			<h3 class="hd2"><a href="/zhaopin/" class="more">更多&gt;&gt;</a><span>最新企业招聘</span></h3>
			<ul>
				<!--{loop $coms $com}-->
				<li><a href="/com-{$com[_cid]}/" title="{$com[cname]}" class="aGray" target="_blank">{$com[cname]}</a></li>
				<!--{/loop}-->
			</ul>
			<div class="clear"></div>
		</div>
		<!--{/if}-->

		<!-- 最新职位招聘信息 -->
		<!--{if $jobs}-->
		<div class="hot newJobs">
			<h3 class="hd2"><a href="/zhaopin/" class="more" target="_blank">更多&gt;&gt;</a><span>最新职位信息</span></h3>
			<ul>
				<!--{loop $jobs $l}-->
				<li><em >{$l['modTime']}</em><a href="/job-{$l['_jid']}.html" title="{$l['jname']}" target="_blank">{$l['jname']}</a></li>
				<!--{/loop}-->
			</ul>
		</div>
		<!--{/if}-->

		<!-- 行业热门招聘 -->
		<!--{if $industryCompany}-->
		<div class="hot" id="hotTrade">
			<h3 class="hd2"><a href="/zhaopin/" class="more" target="_blank">更多&gt;&gt;</a><span>{$domainInfo['region_name_short']}行业招聘</span></h3>
			<div class="hyTitle">
				<!--{loop $allIndustry $l}-->
				<a href="#trade{$l['industryClassId']}">{$l['industryClassName']}</a>
				<!--{/loop}-->			
			</div>
			<!--{loop $industryCompany $k $list}-->
			<div class="jobModel" id="trade{$k}">
				<h4><a href="/hangye-{$k}/" class="more" target="_blank">More&gt;&gt;</a><a class="aGray" href="/hangye-{$k}/" target="_blank">{$allIndustry[$k]['industryClassName']}</a></h4>
				<ul>
				<!--{loop $list[arr] $lll}-->
					<li>
						<a href="/com-{$lll['_cid']}/" title="{$lll['cname']}" class="aGray" target="_blank">{$lll['cname']}</a>
					</li>
				<!--{/loop}-->
				</ul>
				<div class="clear"></div>
			</div>
			<!--{/loop}-->
		</div>
		<!--{/if}-->
	<!--{/if}-->
	
	<!-- 友情链接 -->
	<!--{if $links||$subregions}-->
	<div class="friendLnk auto ">
		<h3 class="hd2"><span>友情链接</span></h3>
		<ul>
			<!--{loop $links $l}-->
			<li><a href="{$l['link_url']}" target="_blank" class="aGray">{$l['link_name']}</a></li>
			<!--{/loop}-->
			<!--{loop $subregions $subregion}-->
			<li><a href="http://{$subregion[region_domain]}.{ROOT_DOMAIN}/" title="{$subregion[region_site]}" target="_blank" class="aGray">{$subregion[region_name_short]}人才网</a></li>
			<!--{/loop}-->
		</ul>
		<div class="clear"></div>
	</div>
	<!--{/if}-->
<footer>
	<p>©copyright:2016 597人才网 版权所有</p>
	<div class="footerNav">

		<a target="_blank" href="/about/about.html">关于我们</a>
		|
		<a target="_blank" href="/about/statement.html">网站声明</a>
		|
		
		<a target="_blank" href="/about/service.html">招聘服务</a>
		<!-- |
		<a target="_blank" href="#">帮助中心</a>
		|
		<a target="_blank" href="#">诚聘英才</a> -->
		|
		<a target="_blank" href="/about/friend.html">友情链接</a>
		|		
		<a target="_blank" href="/about/adprice.html">广告发布</a>
		|
		<a target="_blank" href="/about/contact.html">联系我们</a>
		|
		<a target="_blank" href="/about/price.html">收费标准</a>		
	</div>
	<!-- <div class="copyright">
		<p>&copy;2015&nbsp;597人才网&nbsp;版权所有</p>
	</div> -->
	<div class="copyright">
		 网站备案/许可证号：闽ICP备09001341号-14<span style="margin:0 5px;">  | </span>增值电信业务经营许可证：闽B2-20120056 <br>
		招聘单位无权收取任何费用,请求职人员加强自我保护意识,按劳动法规保护自身权益,警惕虚假招聘,避免上当受骗!
	</div>
</footer>
<!-- <section class="floatRT">
<a href="/about/message" target="_blank" class="serviceLink">我有问题要反馈</a> <b></b>
</section> -->
<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODA2NjYzMV8zNDgzMjVfNDAwODA2MDU5N18yXw" target="_blank" id="qqzx"><img src="http://cdn.597.com/img/common/index_qqico.png" ><p>QQ咨询</p></a>
<a href="/about/indexfeed.html" id="fankui" target="_blank">意见<br>反馈</a>
<a href="/download/app/" class="app_download" target="_blank;">App <br>下载</a>
<div id="sus" class="sus">
	<a class="backTop jpFntWes" title="返回顶部" href="javascript:void(0);" style="display: none;">&#xf0d8;</a>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(document).scrollTop() > 120) {
				$('#sus').find('a.backTop').css({
					'display': 'inline-block'
				});
			} else {
				$('#sus').find('a.backTop').css({
					'display': 'none'
				});
			}
		});

		$('#sus').find('a.backTop').click(function() {
			$('html,body').animate({
				scrollTop: 0
			});
		});
	});
</script>
<div style="display: none" id="wx_stats">
<script src="http://s5.cnzz.com/z_stat.php?id=1000320696&web_id=1000320696" language="JavaScript"></script>
<link rel="logo1" href="/597logo/logo121x75.png" />
<link rel="logo2" href="/597logo/75px.png" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d2fda47ce0b655f7ac286c4442a37939";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</div>

	<script type="text/javascript">
		//var currentCity="<!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}-->";
		var userType=$.cookie("userType");
		var nickname = $.cookie("nickname");
		if(nickname){
			if(userType=='per'){
				$('#topLoginStatus').hide();
				$('#topPerLogin').show();
				$('#topComLogin').hide();
				$('#topPerLogin #topUsername').html(nickname);
				$('#notLoginStatus').hide();
				$('.logined').show();
				$('.logined #perStatus').show();
				$('.logined').find('#user_menu_name').html(nickname);
			}
			if(userType=='com'){
				$('#topLoginStatus').hide();
				$('#topPerLogin').hide();
				$('#topComLogin').show();
				$('#topComLogin #topUsername').html(nickname);				
				$('#notLoginStatus').hide();
				$('.logined').show();
				$('.logined #comStatus').show();
				$('.logined').find('#com_menu_name').html(nickname);
			}
		}
		//$('#currentCity').html(currentCity);
		$('#qqLoginTop').click(function(){
			qqBox=$.showModal("http://api.597.com/qq/login.api", {title:'QQ登录',contentType : 'iframe',width:'800', height:'410'});
		});
		$('#sinaLoginTop').click(function(){
			sinaBox=$.showModal("http://api.597.com/weibo/login.api", {title:'微博登录',contentType : 'iframe',width:'800', height:'410'});
		});
		dateFormate(".dateFormate",{$time});
	</script>

	<!-- WPA Button Begin -->
	<!--<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODA2NjYzMV8xMTQ4NV80MDA4MDYwNTk3Xw"></script>-->
	<!-- WPA Button End -->
</body>
</html>