<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="mobile-agent" content="format=xhtml; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=html5; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=wml; url={$mobileUrl}">
	<meta name="shenma-site-verification" content="2009dcd87c1dde482e9be613b74021e7_1500691755"> 
	<title><!--{if $title}-->{$title}<!--{else}-->{$domainInfo['region_name_short']}人才网官网、{$domainInfo['region_name_short']}人才网、{$domainInfo['region_name_short']}招聘网、597{$domainInfo['region_name_short']}人才网<!--{/if}--></title>
	<meta name="description" content="<!--{if $description}-->{$description}<!--{else}-->{$domainInfo['region_name_short']}人才网,597{$domainInfo['region_name_short']}才网是专注于{$domainInfo['region_name_short']}的求职招聘网站,{$domainInfo['region_name_short']}人才网为企业提供职位发布,简历搜索等专业人才招聘服务,为求职者提供最新招聘信息,找工作上597{$domainInfo['region_name_short']}人才网<!--{/if}-->" />
	<meta name="keywords" content="<!--{if $keywords}-->{$keywords}<!--{else}-->{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}招聘网,597{$domainInfo['region_name_short']}人才网<!--{/if}-->" />

	<meta http-equiv="Content-Language" content="zh-CN" />
	<link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
	<link rel="logo" href="/597logo/logo121x75.png" />
	<!--[if lt IE9]  -->
	<script src="http://cdn.{ROOT_DOMAIN}/js/html5.js?v=20140722"></script>
	<!-- [endif] -->
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=20160317" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/597index.css?v=20160222696" />
	<!--<script language="javascript" type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.js"></script>-->
	<script language="javascript" type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/jquery.js?v=20130808"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=20140312"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/js/index.js?v=20171"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=20140312"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/js/uaredirect.js?v=20151014"></script>
	<script language="javascript" type="text/javascript">uaredirect("{$mobileUrl}");</script>
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<span style="float:left; width:300px;">{$domainInfo['region_name_short']}招聘、{$domainInfo['region_name_short']}找工作上597{$domainInfo['region_name_short']}人才网</span>
			<ul id="topLoginStatus">
				<li><a href="/person/register.html" >求职者注册</a> <span class="line">|</span></li>
				<li><a href="/company/register.html" >企业注册</a> <span class="line">|</span></li>
				<li><a href="/person/login.html" >求职者登录</a><span class="line">|</span></li>
				<li><a href="/company/login.html" >企业登录</a> <span class="line">|</span>  </li>
				<li class="top-wx" >
					微信登录<span class="line">|</span>
					<div class="wxImg">
						<p><a href="http://api.597.com/wechat/login.api?t={$time}">求职者登录</a></p>
						<p><a href="http://api.597.com/wechat2/login.api?t={$time}">企业登录</a></p>
					</div>
				</li>
				<li class="top-phone">
					<a href="/download/app/" target="_blank" style="color:#444;font-weight:normal;" >app下载</a>
					<span class="line">|</span>
				</li>
				<li><a href="/about/price.html" style="color:red;" target="_blank">收费标准</a></li>
			</ul>
			<ul id="topPerLogin" style="display:none;" >
                <li style="position: relative;"><span id="downPersonCode">app下载</span><div style="display: none;position: absolute;left: -30px;top: 40px;width: 150px;box-shadow:0 0 43px black"><img src="http://cdn.{ROOT_DOMAIN}/www/img/brus/codePer.png" style="width: 100%;" alt=""/></div></li>
                <li><img src="http://cdn.597.com/www/img/brus/new.png" style="width: 30px;padding-right: 10px;position: relative;top: 5px;" alt=""/></li>
				<li>您好,<a href="/person/"><span id="topUsername" class=" fb"></span></a><span class="line">|</span> </li>
				<li><a href="/person/logout.html" >退出</a>  </li>
			</ul>
			<ul id="topComLogin" style="display:none;" class="flor">
                <li style="position: relative;"><span id="downComCode">app下载</span><div style="display: none;position: absolute;left: -30px;top: 40px;width: 150px;box-shadow:0 0 43px black"><img src="http://cdn.{ROOT_DOMAIN}/www/img/brus/codeCom.png" style="width: 100%;" alt=""/></div></li>
                <li><img src="http://cdn.597.com/www/img/brus/new.png" style="width: 30px;padding-right: 10px;position: relative;top: 5px;" alt=""/></li>
                <li>您好,<a href="/company/"><span id="topUsername" class=" fb"></span></a> <span class="line">|</span><a href="/about/price.html" style="color:red;" target="_blank">收费标准</a><span class="line">|</span></li>
				<li><a href="/company/logout.html" >退出</a>  </li>
			</ul>
			<!--<div class="phoneLine"></div>-->
			<div class="newHeadArea">
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo"><a href="/"><img src="http://cdn.{ROOT_DOMAIN}/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" /></a></div>
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
							<!--{loop $jobClassArr $k $l}-->
							<li >
								<a class="lstLnk" href="javascript:void(0)"> <i class="newIcon newIcon{$l['order']}"></i>
									<p class="lnk">{$l['name']}</p> <b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="top: 2px; display: none;">
									<div class="posJobSort">
										<div class="l">
											<!--{loop $l['sub'] $ll}-->
											<dl>
												<dt>{$ll['name']}</dt>
												<dd>
													<!--{loop $ll['sub'] $lll}-->
														<a href="/zhaopin/?q={$lll['urlname']}" target="_blank">{$lll['name']}</a>
													<!--{/loop}-->
												</dd>
												<div class="clear"></div>
											</dl>
											<!--{/loop}-->
										</div>
									</div>
								</div>
							</li>
							<!--{/loop}-->


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
				<!--<li><a href="/guide/">职场指南</a></li>
				<li><a href="/hrnews/">HR资讯</a></li>-->
				<li><a href="/qyzf/">597专访</a></li>
				<li><a href="/about/delegate/delegate.html" target="_blank">高端猎头</a></li>
				<li><a href="/about/delegate/" target="_blank">人事代理</a></li>
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
					<li  <!--{if $k>0}-->style="display:none;"<!--{/if}--> ><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" target="_blank" title="{$l['cname']}"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}" alt="{$l['cname']}"/></a></li>
				<!--{/loop}-->
				</ul>
				<ul id="focusArr">
					<!--{loop $ad20List $k $l}-->
					<li <!--{if $k==0}-->class="cu"<!--{/if}-->>{$k}</li>
					<!--{/loop}-->
				</ul>
			<!--{else}-->
				<ul id="focus">
					<li><a href="javascript:void(0)"><img src="http://cdn.{ROOT_DOMAIN}/img/common/newbanner02.jpg" alt="" /></a></li>
					<li style="display:none;"><a href="javascript:void(0)"><img src="http://cdn.{ROOT_DOMAIN}/img/common/newbanner01.jpg" alt="" /></a></li>
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
				<input type="hidden" name="cityId" id="cityId" value="{$domainInfo['region_id']}">
				<div class="loginPer">
					<form id="formPer" name="formPer" method="post" style="padding-top: 0px;" action="/api/web/person.api">
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
					<p id="loginNextType_brus">还没有账户？<a href="/person/register.html">注册简历</a><a href="/company/register.html"  style="margin-left:18px;">企业注册</a></p>
					<p class="loginType">
						<img src="http://cdn.{ROOT_DOMAIN}/img/common/wx.png"> <a href="http://api.597.com/wechat/login.api?t={$time}">微信登录</a><span>|</span><img src="http://cdn.{ROOT_DOMAIN}/img/common/qq.png"> <a href="http://api.597.com/qq/login.api?t={$time}">qq登录</a>
					</p>
					<p class="cityLogin" style="display:none;"><a href="javascript:void(0)" id="cityPerLogin">福州站求职者登录>>></a></p>
					<!--
					<p class="third_login">使用第三方帐号快速登录
						<a href="javascript:void(0)" id="sinaLoginTop" title="新浪微博登录"><img src="http://cdn.{ROOT_DOMAIN}/img/common/weibo_login.gif" alt="新浪微博登录" /></a>
						<a href="javascript:void(0)" id="qqLoginTop" title="QQ登录"><img src="http://cdn.{ROOT_DOMAIN}/img/common/qq_login.gif" alt="QQ登录" /></a>
					</p>
					-->
				</div>
				<div class="loginCom" style="display:none;">
					<form id="formCom" name="formCom" method="post" style="padding-top: 0px;" action="/api/web/company.api">
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
					<p id="comLoginNextType_brus">还没有账户？<a href="/company/register.html">企业注册</a></p>
					<p class="cityLogin" style="display:none;"><a href="javascript:void(0)" id="cityComLogin">福州站企业登录>>></a></p>
					<p class="loginType">
						<img src="http://cdn.597.com/img/common/wx.png">
						<a href="http://api.597.com/wechat2/login.api?t={$time}">微信登录</a><span>
					</p>
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
				<!--<span ><em style="border-right:none;">最新资讯</em></span>-->
			</h2>
			<div class="clear"></div>
			<div class="tabContents">
				<div class="tabCon">
					<ul class="tabUl tabUl01">
						<!--{loop $ad10List $l}-->
						<li><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" class="aGray" target="_blank" title="{$l['cname']}">{$l['cname']}</a>
						</li>
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
						<li><a href="/guide/detail-{$l['detail_id']}.html" class="aGray" title="{$l['detail_title']}" target='_blank'>{$l['detail_title']}</a></li>
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
		<div class="jobM">
			<h3><span>切换地区</span></h3>
			<ul>
				<!--{if $subcityNo>10}-->
					{$subcityStr1}
				<!--{else}-->
					{$subcityStr1}
					<li><a href="http://xm.{ROOT_DOMAIN}" target="_blank">厦门</a></li>
					<li><a href='http://zz.{ROOT_DOMAIN}' target="_blank">漳州</a></li>
					<li><a href="http://qz.{ROOT_DOMAIN}" target="_blank">泉州</a></li>
					<li><a href='http://fz.{ROOT_DOMAIN}' target="_blank">福州</a></li>
					<li><a href='http://pt.{ROOT_DOMAIN}' target="_blank">莆田</a></li>
					<li><a href='http://www.nd597.com' target="_blank">宁德</a></li>
					<li><a href='http://sm.{ROOT_DOMAIN}' target="_blank">三明</a></li>
					<li><a href='http://ly.{ROOT_DOMAIN}' target="_blank">龙岩</a></li>
					<li><a href="http://np.{ROOT_DOMAIN}" target="_blank">南平</a></li>
					<li><a href="http://www.jh597.com" target="_blank">金华</a></li>
					<li><a href="http://www.yw597.com" target="_blank">义乌</a></li>
					<li><a href="http://bj.{ROOT_DOMAIN}" target="_blank">北京</a></li>
				<!--{/if}-->
			</ul>
		</div>
		<div class="jobR">
			<h3><span>福利筛选</span></h3>
			<ul>
				<li><a href="/zhaopin/r2c3/" target="_blank" >住房公积金 </a></li>
				<li class="mid"><a href="/zhaopin/r1c3/" target="_blank" > 五险 </a></li>
				<li><a href="/zhaopin/r5c3/" target="_blank" >周末双休 </a></li>
				<li class="mid"><a href="/zhaopin/r3c3/" target="_blank" >包吃 </a></li>
				<li><a href="/zhaopin/r4c3/" target="_blank" >包住 </a></li>
			</ul>
			<p style="margin-top: 5px;"><a href="/person/register.html" target="_blank"><img src="http://cdn.{ROOT_DOMAIN}/img/common/reg_pic.jpg"/></a></p>
		</div>
	</div>

	<!-- 金牌企业招聘 -->
	<!--{if $ad8List||$ad9List}-->
	<div class="auto ">
		<div class="gold">
			<!-- 金牌图标 -->
			<ul>
				<!--{loop $ad9List $l}-->
				<li ><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" target="_blank" title="{$l['cname']}"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}"  alt="{$l['cname']}" /></a>
				</li>
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
				<li><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->/com-{$l['_cid']}/<!--{/if}-->" target="_blank" title="{$l['cname']}"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}"  alt="{$l['cname']}" /></a>
				</li>
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
				<a href="/com-{$l['_cid']}/" class="aGray" target="_blank" title="{$l['cname']}">{$l['cname']}</a>
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
					<li><a href="/com-{$l['_cid']}/"  target="_blank" title="{$l['cname']}"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['pic']}"  alt="{$l['cname']}" /></a>
					</li>
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
				<a target="_blank" href='http://xm.{ROOT_DOMAIN}'  class="red fb">厦门</a>
				<a target="_blank"  href='http://siming.{ROOT_DOMAIN}'>思明</a>
				<a target="_blank"  href='http://huli.{ROOT_DOMAIN}'>湖里</a>
				<a target="_blank"  href='http://tongan.{ROOT_DOMAIN}'>同安</a>
				<a target="_blank"  href='http://haicang.{ROOT_DOMAIN}'>海沧</a>
				<a target="_blank"  href='http://jimei.{ROOT_DOMAIN}'>集美</a>
				<a target="_blank"  href='http://xiangan.{ROOT_DOMAIN}'>翔安</a>
			</dd>
			<dd>
				<a target="_blank" href='http://qz.{ROOT_DOMAIN}'  class="red fb">泉州</a>
				<a target="_blank"  href='http://jinjiang.{ROOT_DOMAIN}'>晋江</a>
				<a target="_blank"  href='http://shishi.{ROOT_DOMAIN}'>石狮</a>
				<a target="_blank"  href='http://nanan.{ROOT_DOMAIN}'>南安</a>
				<a target="_blank"  href='http://huian.{ROOT_DOMAIN}'>惠安</a>
				<a target="_blank"  href='http://quangang.{ROOT_DOMAIN}'>泉港</a>
				<a target="_blank"  href='http://anxi.{ROOT_DOMAIN}'>安溪</a>
				<a target="_blank"  href='http://dehua.{ROOT_DOMAIN}'>德化</a>
				<a target="_blank"  href='http://fengze.{ROOT_DOMAIN}'>丰泽</a>
				<a target="_blank"  href='http://qzlc.{ROOT_DOMAIN}'>鲤城</a>
				<a target="_blank"  href='http://luojiang.{ROOT_DOMAIN}'>洛江</a>
				<a target="_blank"  href='http://yongchun.{ROOT_DOMAIN}'>永春</a>
			</dd>
			<dd>
				<a target="_blank" href='http://np.{ROOT_DOMAIN}'  class="red fb">南平</a>
				<a target="_blank"  href='http://jianou.{ROOT_DOMAIN}'>建瓯</a>
				<a target="_blank"  href='http://jianyang.{ROOT_DOMAIN}'>建阳</a>
				<a target="_blank"  href='http://wuyishan.{ROOT_DOMAIN}'>武夷山</a>
				<a target="_blank"  href='http://shaowu.{ROOT_DOMAIN}'>邵武</a>
				<a target="_blank"  href='http://pucheng.{ROOT_DOMAIN}'>浦城</a>
				<a target="_blank"  href='http://guangze.{ROOT_DOMAIN}'>光泽</a>
				<a target="_blank"  href='http://zhenghe.{ROOT_DOMAIN}'>政和</a>
				<a target="_blank"  href='http://shunchang.{ROOT_DOMAIN}'>顺昌</a>
				<a target="_blank"  href='http://songxi.{ROOT_DOMAIN}'>松溪</a>
				<a target="_blank"  href='http://yanping.{ROOT_DOMAIN}'>延平</a>
			</dd>
			<dd>
				<a target="_blank" href='http://fz.{ROOT_DOMAIN}' class="red fb">福州</a>

				<a target="_blank" href='http://fuqing.{ROOT_DOMAIN}'>福清</a>

				<a target="_blank" href='http://changle.{ROOT_DOMAIN}'>长乐</a>

				<a target="_blank" href='http://pingtan.{ROOT_DOMAIN}'>平潭</a>

				<a target="_blank" href='http://luoyuan.{ROOT_DOMAIN}'>罗源</a>

				<a target="_blank" href='http://lianjiang.{ROOT_DOMAIN}'>连江</a>

				<a target="_blank" href='http://fzgl.{ROOT_DOMAIN}'>鼓楼</a>

				<a target="_blank" href='http://fzja.{ROOT_DOMAIN}'>晋安</a>

				<a target="_blank" href='http://fzcs.{ROOT_DOMAIN}'>仓山</a>

				<a target="_blank" href='http://fztj.{ROOT_DOMAIN}'>台江</a>

				<a target="_blank" href='http://fzmw.{ROOT_DOMAIN}'>马尾</a>

				<a target="_blank" href='http://minhou.{ROOT_DOMAIN}'>闽侯</a>
			</dd>
			<dd>
				<a target="_blank" href='http://zz.{ROOT_DOMAIN}'  class="red fb">漳州</a>
				<a target="_blank"  href='http://changtai.{ROOT_DOMAIN}'>长泰</a>
				<a target="_blank"  href='http://zhangpu.{ROOT_DOMAIN}'>漳浦</a>
				<a target="_blank"  href='http://zzxc.{ROOT_DOMAIN}'>芗城</a>
				<a target="_blank"  href='http://longwen.{ROOT_DOMAIN}'>龙文</a>
				<a target="_blank"  href='http://longhai.{ROOT_DOMAIN}'>龙海</a>
				<a target="_blank"  href='http://yunxiao.{ROOT_DOMAIN}'>云霄</a>
				<a target="_blank"  href='http://zhaoan.{ROOT_DOMAIN}'>诏安</a>
				<a target="_blank"  href='http://zzds.{ROOT_DOMAIN}'>东山</a>
				<a target="_blank"  href='http://nanjing.{ROOT_DOMAIN}'>南靖</a>
				<a target="_blank"  href='http://pinghe.{ROOT_DOMAIN}'>平和</a>
			</dd>
			<dd>
				<a target="_blank" href='http://pt.{ROOT_DOMAIN}'  class="red fb">莆田</a>
				<a target="_blank"  href='http://chengxiang.{ROOT_DOMAIN}'>城厢</a>
				<a target="_blank"  href='http://pthj.{ROOT_DOMAIN}'>涵江</a>
				<a target="_blank"  href='http://ptlc.{ROOT_DOMAIN}'>荔城</a>
				<a target="_blank"  href='http://ptxy.{ROOT_DOMAIN}'>秀屿</a>
				<a target="_blank"  href='http://xianyou.{ROOT_DOMAIN}'>仙游</a>
			</dd>
			<dd>
				<a target="_blank" href='http://ly.{ROOT_DOMAIN}'  class="red fb">龙岩</a>
				<a target="_blank"  href='http://xinluo.{ROOT_DOMAIN}'>新罗</a>
				<a target="_blank"  href='http://zhangping.{ROOT_DOMAIN}'>漳平</a>
				<a target="_blank"  href='http://changting.{ROOT_DOMAIN}'>长汀</a>
				<a target="_blank"  href='http://yongding.{ROOT_DOMAIN}'>永定</a>
				<a target="_blank"  href='http://shanghang.{ROOT_DOMAIN}'>上杭</a>
				<a target="_blank"  href='http://wuping.{ROOT_DOMAIN}'>武平</a>
				<a target="_blank"  href='http://liancheng.{ROOT_DOMAIN}'>连城</a>
			</dd>
			<dd>
				<a target="_blank" href='http://sm.{ROOT_DOMAIN}'  class="red fb">三明</a>
				<a target="_blank"  href='http://meilie.{ROOT_DOMAIN}'>梅列</a>
				<a target="_blank"  href='http://sanyuan.{ROOT_DOMAIN}'>三元</a>
				<a target="_blank"  href='http://yongan.{ROOT_DOMAIN}'>永安</a>
				<a target="_blank"  href='http://shaxian.{ROOT_DOMAIN}'>沙县</a>
				<a target="_blank"  href='http://datian.{ROOT_DOMAIN}'>大田</a>
				<a target="_blank"  href='http://jiangle.{ROOT_DOMAIN}'>将乐</a>
				<a target="_blank"  href='http://taining.{ROOT_DOMAIN}'>泰宁</a>
				<a target="_blank"  href='http://jianning.{ROOT_DOMAIN}'>建宁</a>
				<a target="_blank"  href='http://youxi.{ROOT_DOMAIN}'>尤溪</a>
				<a target="_blank"  href='http://mingxi.{ROOT_DOMAIN}'>明溪</a>
				<a target="_blank"  href='http://qingliu.{ROOT_DOMAIN}'>清流</a>
				<a target="_blank"  href='http://ninghua.{ROOT_DOMAIN}'>宁化</a>
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
		<div class="hot jobs" id="hotTrade">
			<h3 class="hd2"><a href="/zhaopin/" class="more" target="_blank">更多&gt;&gt;</a><span>最新企业招聘</span></h3>
			<!--{if $industrysArr}-->
				<div class="hyTitle">
					<!--{loop $industrysArr $l}-->
					<a href="/hangye-{$l['industryClassId']}/" target="_blank">{$l['industryClassName']}</a>
					<!--{/loop}-->
				</div>
			<!--{/if}-->
			<ul>
				<!--{loop $coms $k $l}-->
				<li <!--{if $k%4==2||$k%4==3}-->class="cur"<!--{/if}-->><i><a href="/com-{$l[_cid]}/"  class="aGray" target="_blank" title="{$l['cname']}">{$l[cname]}</a></i>
					<span>
						{$l['joblistStr']}
					</span>
				</li>
				<!--{/loop}-->
			</ul>
			<div class="clear"></div>
			<div class="pages">
				<!--{loop $pageArr $l}-->
                	<a href="/companyjob.html?page={$l}" target="_blank" <!--{if $l==1}-->class="selected"<!--{/if}-->>{$l}</a>
                <!--{/loop}-->
                <a class="more" href="/companyjob.html" target="_blank" title="查看更多招聘信息">查看更多招聘信息</a>
            </div>
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
	<div class="friendLnk auto ">
		<h3 class="hd2"><span>友情链接</span></h3>
		<!--{if $links||$subregions}-->
		<ul>
			<!--{loop $links $l}-->
			<li><a href="{$l['link_url']}" target="_blank" class="aGray">{$l['link_name']}</a></li>
			<!--{/loop}-->
			<!--{loop $subregions $l}-->
			<li><a href="http://{$l[region_domain]}.{ROOT_DOMAIN}/" title="{$l[region_site]}" target="_blank" class="aGray">{$l[region_name_short]}人才网</a></li>
			<!--{/loop}-->
			<li><a href="http://www.917.com" title="厦门房产网" target="_blank" class="aGray">厦门房产网</a></li>
		</ul>
		<!--{/if}-->
		<div class="clear"></div>
		<p class="linkContact"><span>友链交换：</span>在线联系方式（QQ）：2355751663&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系邮箱：2355751663@qq.com</p>
		<br>
	</div>
<footer>
	<p>©copyright:{$curYear} 597人才网 版权所有</p>
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
		<a target="_blank" href="/about/adprice.html">首页发布</a>
		|
		<a target="_blank" href="/about/contact.html">联系我们</a>
		|
		<a target="_blank" href="/about/price.html">收费标准</a>
	</div>
	<!-- <div class="copyright">
		<p>&copy;2015&nbsp;597人才网&nbsp;版权所有</p>
	</div> -->
	<div class="copyright">
		 网站备案/许可证号：闽ICP备09001341号-14<span style="margin:0 5px;">  | </span>增值电信业务经营许可证：闽B2-20120056<span style="margin:0 5px;">  | </span>人力资源服务许可证：350200RL1010 <br>
		招聘单位无权收取任何费用,请求职人员加强自我保护意识,按劳动法规保护自身权益,警惕虚假招聘,避免上当受骗!
	</div>
	<div class="copyright">
		{$domainInfo['footer']}
	</div>
</footer>
<!-- <section class="floatRT">
<a href="/about/message" target="_blank" class="serviceLink">我有问题要反馈</a> <b></b>
</section> -->
<div id="appInfo">
	<a href="/download/app/" class="app_download" id="ewm_tips" target="_blank" style=" ">
		<img src="http://cdn.{ROOT_DOMAIN}/img/common/ewm_tel.jpg" style="margin-left:3px;" />
		<div class="ewm_imgs">
			<dl class="dl_01">
				<dt><i class="jpFntWes ewm_ico"></i>手机版m.597.com</dt>
				<dd><img src="http://cdn.{ROOT_DOMAIN}/img/common/mobileIco.png"  /></dd>
			</dl>
			<dl class="dl_01">
				<dt><img class="ewm_ico" src="http://cdn.{ROOT_DOMAIN}/img/common/weixinLogo.jpg" alt="" />微信公众号</dt>
				<dd><img src="http://cdn.{ROOT_DOMAIN}/img/common/wxCode.png"  /></dd>
			</dl>
			<dl>
				<dt>求职者app下载</dt>
				<dd><img src="http://cdn.597.com/www/img/brus/codeCom.png"  /></dd>
			</dl>
		</div>
	</a>
	<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODA2NjYzMV8zNDgzMjVfNDAwODA2MDU5N18yXw" target="_blank" id="qqzx"><img src="http://cdn.{ROOT_DOMAIN}/img/common/index_qqico.png" ><p>QQ咨询</p></a>
	<a href="/about/indexfeed.html" id="fankui" target="_blank">意见<br>反馈</a>
	<a href="/download/app/" class="app_download" target="_blank;">App <br>下载</a>
	<div id="sus" class="sus">
		<a class="backTop jpFntWes" title="返回顶部" href="javascript:void(0);" style="display: none;">&#xf0d8;</a>
	</div>
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
	
		if($(document).width()<1220){
			$("#appInfo").hide();
		}else{
			$("#appInfo").show();
		}
        //		显示或者隐藏二维码下载；
		$("#downPersonCode").mouseover(function () {
            $(this).next().show();
        }).mouseout(function () {
            $(this).next().hide();
        });
        $("#downComCode").mouseover(function () {
            $(this).next().show();
        }).mouseout(function () {
            $(this).next().hide();
        });
	});
</script>
<script src="http://cdn.{ROOT_DOMAIN}/tongji.js?v=20160317" language="JavaScript"></script>

	<script type="text/javascript">
		//var currentCity="<!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}-->";
		var userType=$.cookie("userType");
		var nickname = $.cookie("nickname");

		if(nickname){
			if(userType=='1'){
				$('#topLoginStatus').hide();
				$('#topPerLogin').show();
				$('#topComLogin').hide();
				$('#topPerLogin #topUsername').html(nickname);
				$('#notLoginStatus').hide();
				$('.logined').show();
				$('.logined #perStatus').show();
				$('.logined').find('#user_menu_name').html(nickname);
			}
			if(userType=='2'){
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

		$('#cityPerLogin').click(function(){
			$.showModal('/file/cityLogin.html?act=per', {title:'{$domainInfo[region_name_short]}站求职者用户名重复请在这里登录'});
		});

		$('#cityComLogin').click(function(){
			$.showModal('/file/cityLogin.html?act=com', {title:'{$domainInfo[region_name_short]}站企业用户名重复请在这里登录'});
		});

	</script>

	<!-- WPA Button Begin -->
	<!--<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODA2NjYzMV8xMTQ4NV80MDA4MDYwNTk3Xw"></script>-->
	<!-- WPA Button End -->
</body>
</html>