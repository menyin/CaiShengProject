<div class="top">
	<div id="login">
		<div id="loginHeaderID">
			<div id="noLogin" class="topCon">
			<div class="topL" id="noLogined" style="position:relative;">
				<ul>
				<li class="oth"><a href="/">首页</a></li>
				<li class="oth">您好，欢迎来到597人才网！</li>
				<li>
					<a href="javascript:void(0);" id="nav_cregi" class="downNavLink" rel="nofollow">企业入口</a>
					<div id="nav_show_cregi" class="downNav none">
						<div class="loginDown">
							<p><a href="http://www1.597.com/company/login.html" rel="nofollow">企业登陆</a></p>
							<p><a href="/company/register.html" rel="nofollow">企业注册</a></p>
						</div>
					</div>
				</li>
				<li>
					<a href="javascript:void(0);" id="nav_clogin" class="downNavLink" rel="nofollow">求职入口</a>
					<div id="nav_show_clogin" class="downNav none">
						<div class="loginDown">
							<p><a href="http://www1.597.com/person/login.html" rel="nofollow">个人登陆</a></p>
							<p><a href="/person/register.html" rel="nofollow">个人注册</a></p>
							
						</div>
					</div>
				</li>
				</ul>
				<a href="javascript:void(0)" id="qqLoginTop"><img alt="Connect_logo_3.png" src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_3.png" style="position:absolute; right:-100px; top:3px;*right:-110px;"></a>
			</div>
			<div id="companyLogined" class="topL" style="display: none;">
				<ul>
					<li class="oth"><a href="/">首页</a></li>
					<li>欢迎您，<span class="userName" id="topUsername"></span></li>
					<li><a href="/company/index.html">返回企业招聘中心</a></li>
					<li><a href="/logout.html">安全退出</a></li>
				</ul>
			</div>
			<div id="personLogined" class="topL" style="display: none;">
				<ul>
					<li class="oth"><a href="/">首页</a></li>
					<li>欢迎您，<span class="userName" id="topUsername"></span></li>
					<li><a href="/person/index.html">返回个人求职中心</a></li>
					<li><a href="/logout.html">安全退出</a></li>
				</ul>
			</div>

			<div class="topR">
				<ul>
				<li class="telPhone">服务热线：<b>400-8566-597</b></li>
				<li id="personLoginMessage" class="messageLink oth" style="display: none;">
					<a href="/person/message.html" id="nav_message" rel="nofollow">消息中心<!--<b id="personMsgSumNum" class="mesNum">0</b>--></a>
				</li>
				<li id="companyLoginMessage" class="messageLink oth" style="display: none;">
					<a href="/company/message.html" id="nav_message" rel="nofollow">消息中心<!--<b id="personMsgSumNum" class="mesNum">0</b>--></a>
				</li>
				<li class="oth"><a href="/help/index.html" class="helpLink">帮助中心</a></li>
				<li>
					<a href="javascript:void(0);" id="nav_webnav" class="downNavLink">网站导航</a>
					<div id="nav_show_webnav" class="downNav none">
						<div class="webSite">
							<dl>
							<dt><a href="/person/">个人求职</a></dt>
							<dd><a href="/person/index.html">求职中心</a><a href="/school.html">校园招聘</a><a href="/famous.html">名企招聘</a></dd>
							<dd><a href="/jobSearch.html">职位搜索</a><a href="/mapSearch.html">地图找工作</a></dd>
							<dt><a href="http://www1.597.com/company/login.html">企业招聘</a></dt>
							<dd><a href="/company/index.html">招聘中心</a></dd>
							<dt><a href="/guide/">职场指南</a></dt>
							<dd><a href="/guide/list-10.html">简历指导</a><a href="/guide/list-11.html">面试技巧</a><a href="/guide/list-8.html">求职实录</a></dd>
							<dd><a href="/guide/list-7.html">职场眺望</a><a href="/guide/list-30.html">规划充电</a><a href="/guide/list-31.html">劳动与法</a></dd>
							<dt><a href="/hrnews/">HR咨询</a></dt>
							<dd><a href="/hrnews/list-28.html">人力管理</a><a href="/hrnews/list-29.html">招聘面试</a><a href="/hrnews/list-14.html">管理激励</a></dd>
							<dd><a href="/hrnews/list-15.html">业绩考核</a><a href="/hrnews/list-16.html">薪酬福利</a><a href="/hrnews/list-17.html">法律常识</a></dd>
							</dl>
							<!--<p><a href="/navi.html">查看所有服务</a></p>-->
						</div>
					</div>
				</li>
				<li><a href="http://{PREFIX_DOMAIN}.m.597.com/" class="phoneLink">手机找工作</a></li>
				</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<script type="text/javascript" language="javascript">
			//预留短信谈出：
			var downNavLink = $("#loginHeaderID .downNavLink");
			//var downNavLink = $("#nav_webnav");
			downNavLink.mousemove(function() {
				$(this).addClass("downNavLinkH");
				$(this).siblings(".downNav").removeClass("none").addClass("block");
			});
			downNavLink.mouseout(function(even) {
				var reltg = $(even.relatedTarget);
				if (reltg.closest(".downNav").length <= 0) {

					$(".downNav").removeClass("block").addClass("none");
					$(this).removeClass('downNavLinkH');
				}
			});
			$(".downNav").mouseout(function(even) {
				var reltg = $(even.relatedTarget);
				if (reltg.closest(".downNav").length <= 0) {
					$(".downNav").removeClass("block").addClass("none");
					$(this).siblings(".downNavLink").removeClass('downNavLinkH');
				}
			});
			
			function loginStatus(){
				var topUsername=readCookie('username');
				var topUserType=readCookie('userType');
				if (topUserType=='com'){
					$('#noLogined').hide();
					$('#companyLogined').show();
					$('#companyLoginMessage').show();
					$('#personLogined').hide();
					$('#personLoginMessage').hide();
				}else if (topUserType=='per'){
					$('#noLogined').hide();
					$('#companyLogined').hide();
					$('#companyLoginMessage').hide();
					$('#personLogined').show();
					$('#personLoginMessage').show();
				}else{
					$('#noLogined').show();
					$('#companyLogined').hide();
					$('#companyLoginMessage').hide();
					$('#personLogined').hide();
					$('#personLoginMessage').hide();
				}
				$('.userName').html(topUsername);
			}

			$(document).ready(function(){
				loginStatus();
				$('#qqLoginTop').click(function(){
					qqBox=$.showModal("http://api.597.com/qq/login.api", {title:'QQ登录',contentType : 'iframe',width:'800', height:'410'});
				});
			});			
		</script>
	</div>
</div>