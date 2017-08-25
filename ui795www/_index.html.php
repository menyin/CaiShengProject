<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="mobile-agent" content="format=xhtml; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=html5; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=wml; url={$mobileUrl}">
	<title><!--{if $title}-->{$title}<!--{else}-->{$domainInfo['region_name_short']}人才网 - 招聘 求职 人力资源 人事人才<!--{/if}--></title>
	<meta name="description" content="<!--{if $description}-->{$description}<!--{else}-->597{$domainInfo['region_name_short']}人才网,提供最全面{$domainInfo['region_name_short']}人才网招聘信息:销售,客服,餐饮,IT,金融等行业的{$domainInfo['region_name_short']}人才。<!--{/if}-->" />	
	<meta name="keywords" content="<!--{if $keywords}-->{$keywords}<!--{else}-->{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}招聘求职<!--{/if}-->" />

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
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/index.js?v=20150901"></script>
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<ul id="topLoginStatus">
				<li><a href="/person/register.html" >个人注册</a> <span class="line">|</span></li>
				<li><a href="/company/register.html" >企业注册</a> <span class="line">|</span></li>
				<li><a href="/person/login.html" >求职者登录</a><span class="line">|</span></li> 
				<li><a href="/company/login.html" >企业登录</a> <span class="line">|</span>  </li>
				<li class="top-wx" >
					微信
					<img src="http://cdn.597.com/img/common/wxCode.png" class="wxImg" />
					<span class="line">|</span>
				</li>
				<li class="top-phone">
					<a href="/mobile.html" target="_blank" style="color:#444;font-weight:normal;" >手机找工作</a>
					<span class="line">|</span>
				</li>
				<li><a href="/about/price.html" style="color:red;" target="_blank">收费标准</a></li>
			</ul>
			<ul id="topPerLogin" style="display:none;" >
				<li>您好,<a href="/person/"><span id="topUsername" class=" fb"></span></a> | </li> 
				<li><a href="/person/logout.html" >退出</a>  </li>
			</ul>
			<ul id="topComLogin" style="display:none;" class="flor">
				<li>您好,<a href="/company/"><span id="topUsername" class=" fb"></span></a> | </li> 
				<li><a href="/company/logout.html" >退出</a>  </li>
			</ul>
			<div class="newHeadArea">
				<div class="newAreaTit">
					<span>{$cityStr1}</span>
					{$subcityStr1}
					<!--{if $subcityStr2}-->
					<a href="#" id="areaMore" class="areaMore">
						更多 <i></i>
					</a>
					<!--{/if}-->
				</div>
				<div class="newAreaTitMore">
					<div class="newAreaTit newAreaTithover">
						{$subcityStr1}
						<!--{if $subcityStr2}-->
						<a href="#" id="areaMore" class="areaMore">
							更多 <i></i>
						</a>
						<!--{/if}-->
					</div>
					<div class="newAreaTitx">
						{$subcityStr2}
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo"><a href="/"><img src="http://cdn.597.com/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" /></a></div>
		<div class="changeCity">
			<strong><span id="currentCity">{$domainInfo['region_site']}</span></strong><br />
			<a href="/changecity.html" id="showCitys">切换城市 <i class="jpFntWes searchType"></i></a>
			<div class="cityMenu" id="cityMenu">
				<span class="cityClose" onclick="$('#cityMenu').hide();">&times;</span>
				<ul class="cityL">
					<li>
						<span class="fb">热门</span>
						<a href="http://bj.{ROOT_DOMAIN}" >北京</a>
						<a href="http://xm.{ROOT_DOMAIN}" >厦门</a>
						<a href="http://qz.{ROOT_DOMAIN}" >泉州</a>
						<a href="http://np.{ROOT_DOMAIN}" >南平</a>
						<a href='http://www.fz597.com' >福州</a>
						<a href='http://www.zz597.com'  >漳州</a>
						<a href='http://www.pt597.com'  >莆田</a>
						<a href='http://www.597rcw.com' >龙岩</a>
						<a href='http://www.sm597.com'  >三明</a>
						<a href='http://www.nd597.com'  >宁德</a>
						<a href="http://www.jh597.com" >金华</a>
						<a href="http://www.yw597.com" >义乌</a>
					</li>
					<li>
						<a href=' http://xm.{ROOT_DOMAIN}'  class="red fb">厦门</a>
						<a href=' http://siming.{ROOT_DOMAIN}'>思明</a>
						<a href=' http://huli.{ROOT_DOMAIN}'>湖里</a>
						<a href=' http://tongan.{ROOT_DOMAIN}'>同安</a>
						<a href=' http://haicang.{ROOT_DOMAIN}'>海沧</a>
						<a href=' http://jimei.{ROOT_DOMAIN}'>集美</a>
						<a href=' http://xiangan.{ROOT_DOMAIN}'>翔安</a>
					</li>
					<li>
						<a href=' http://qz.{ROOT_DOMAIN}'  class="red fb">泉州</a>
						<a href=' http://jinjiang.{ROOT_DOMAIN}'>晋江</a>
						<a href=' http://shishi.{ROOT_DOMAIN}'>石狮</a>
						<a href=' http://nanan.{ROOT_DOMAIN}'>南安</a>
						<a href=' http://huian.{ROOT_DOMAIN}'>惠安</a>
						<a href=' http://quangang.{ROOT_DOMAIN}'>泉港</a>
						<a href=' http://anxi.{ROOT_DOMAIN}'>安溪</a>
						<a href=' http://dehua.{ROOT_DOMAIN}'>德化</a>
						<a href=' http://fengze.{ROOT_DOMAIN}'>丰泽</a>
						<a href=' http://qzlc.{ROOT_DOMAIN}'>鲤城</a>
						<a href=' http://luojiang.{ROOT_DOMAIN}'>洛江</a>
						<a href=' http://yongchun.{ROOT_DOMAIN}'>永春</a>
					</li>
					<li>
						<a href=' http://np.{ROOT_DOMAIN}'  class="red fb">南平</a>
						<a href=' http://jianou.{ROOT_DOMAIN}'>建瓯</a>
						<a href=' http://jianyang.{ROOT_DOMAIN}'>建阳</a>
						<a href=' http://wuyishan.{ROOT_DOMAIN}'>武夷山</a>
						<a href=' http://shaowu.{ROOT_DOMAIN}'>邵武</a>
						<a href=' http://pucheng.{ROOT_DOMAIN}'>浦城</a>
						<a href=' http://guangze.{ROOT_DOMAIN}'>光泽</a>
						<a href=' http://zhenghe.{ROOT_DOMAIN}'>政和</a>
						<a href=' http://shunchang.{ROOT_DOMAIN}'>顺昌</a>
						<a href=' http://songxi.{ROOT_DOMAIN}'>松溪</a>
						<a href=' http://yanping.{ROOT_DOMAIN}'>延平</a>
					</li>
					<li>
						<a href='http://www.fz597.com'  class="red fb">福州</a>
						<a href='http://www.fq597.com'>福清</a>
						<a href='http://www.cl597.com'>长乐</a>
						<a href='http://www.pingtan597.com'>平潭</a>
						<a href='http://www.luoyuan597.com'>罗源</a>
						<a href='http://www.lj597.com'>连江</a>
						<a href='http://gl.fz597.com'>鼓楼</a>
						<a href='http://ja.fz597.com'>晋安</a>
						<a href='http://cs.fz597.com'>仓山</a>
						<a href='http://tj.fz597.com'>台江</a>
						<a href='http://mw.fz597.com'>马尾</a>
						<a href='http://mh.fz597.com'>闽侯</a>
					</li>
					<li>
						<a href='http://www.zz597.com'  class="red fb">漳州</a>
						<a href='http://www.ct597.com'>长泰</a>
						<a href='http://www.zhangpu597.com'>漳浦</a>
						<a href='http://xc.zz597.com'>芗城</a>
						<a href='http://lw.zz597.com'>龙文</a>
						<a href='http://lh.zz597.com'>龙海</a>
						<a href='http://yx.zz597.com'>云霄</a>
						<a href='http://za.zz597.com'>诏安</a>
						<a href='http://ds.zz597.com'>东山</a>
						<a href='http://nj.zz597.com'>南靖</a>
						<a href='http://ph.zz597.com'>平和</a>
					</li>
					<li>
						<a href='http://www.pt597.com'  class="red fb">莆田</a>
						<a href='http://cx.pt597.com'>城厢</a>
						<a href='http://hj.pt597.com'>涵江</a>
						<a href='http://lc.pt597.com'>荔城</a>
						<a href='http://xy.pt597.com'>秀屿</a>
						<a href='http://www.xy597.com'>仙游</a>
					</li>
					<li>
						<a href='http://www.597rcw.com'  class="red fb">龙岩</a>
						<a href='http://xl.597rcw.com'>新罗</a>
						<a href='http://www.zp597.com'>漳平</a>
						<a href='http://ct.597rcw.com'>长汀</a>
						<a href='http://yd.597rcw.com'>永定</a>
						<a href='http://sh.597rcw.com'>上杭</a>
						<a href='http://wp.597rcw.com'>武平</a>
						<a href='http://lc.597rcw.com'>连城</a>
					</li>
					<li>
						<a href='http://www.sm597.com'  class="red fb">三明</a>
						<a href='http://www.ya597.com'>永安</a>
						<a href='http://www.sx597.com'>沙县</a>
						<a href='http://dt.sm597.com'>大田</a>
						<a href='http://jl.sm597.com'>将乐</a>
						<a href='http://tn.sm597.com'>泰宁</a>
						<a href='http://jn.sm597.com'>建宁</a>
						<a href='http://yx.sm597.com'>尤溪</a>
						<a href='http://mingxi.sm597.com'>明溪</a>
						<a href='http://ql.sm597.com'>清流</a>
						<a href='http://nh.sm597.com'>宁化</a>
					</li>
					<li>
						<a href='http://www.nd597.com'  class="red fb">宁德</a>
						<a href='http://jc.nd597.com'>蕉城</a>
						<a href='http://www.fa597.com'>福安</a>
						<a href='http://www.fd597.com'>福鼎</a>
						<a href='http://www.xp597.com'>霞浦</a>
						<a href='http://gt.nd597.com'>古田</a>
						<a href='http://pn.nd597.com'>屏南</a>
						<a href='http://sn.nd597.com'>寿宁</a>
						<a href='http://zn.nd597.com'>周宁</a>
						<a href='http://www.zr597.com'>柘荣</a>
					</li>
				</ul>
			</div>
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
					<!--{loop $__keyword $k $l}-->
						<a href="/{$k}/" <!--{if $k=='xiaoshou'}-->style="color:red;"<!--{else}-->class="aGray"<!--{/if}--> target="_blank">{$l}</a>
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
							<li class="">
								<a class="lstLnk" href="javascript:void(0)"> <i class="newIcon newIcon"></i>
									<p class="lnk">销售、客服、市场、公关</p> <b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="top: 2px; display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=销售人员" target="_blank">销售人员</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=销售代表" target="_blank">销售代表</a>
													<a href="/search/?txtKeyWord=电话销售" target="_blank">电话销售</a>
													<a href="/search/?txtKeyWord=客户经理" target="_blank">客户经理</a>
													<a href="/search/?txtKeyWord=营业员" target="_blank">营业员</a>
													<a href="/search/?txtKeyWord=置业顾问" target="_blank">置业顾问</a>
													<a href="/search/?txtKeyWord=房产经纪人" target="_blank">房产经纪人</a>
													<a href="/search/?txtKeyWord=汽车销售顾问" target="_blank">汽车销售顾问</a>
													<a href="/search/?txtKeyWord=医药代表" target="_blank">医药代表</a>
													<a href="/search/?txtKeyWord=渠道" target="_blank">渠道</a>
													<a href="/search/?txtKeyWord=分销专员" target="_blank">分销专员</a>
													<a href="/search/?txtKeyWord=团购业务员" target="_blank">团购业务员</a>
													<a href="/search/?txtKeyWord=招商专员" target="_blank">招商专员</a>
													<a href="/search/?txtKeyWord=销售内勤" target="_blank">销售内勤</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=销售管理" target="_blank">销售管理</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=销售总监" target="_blank">销售总监</a>
													<a href="/search/?txtKeyWord=销售经理" target="_blank">销售经理</a>
													<a href="/search/?txtKeyWord=渠道" target="_blank">渠道</a>
													<a href="/search/?txtKeyWord=分销" target="_blank">分销</a>
													<a href="/search/?txtKeyWord=团购经理" target="_blank">团购经理</a>
													<a href="/search/?txtKeyWord=大客户经理" target="_blank">大客户经理</a>
													<a href="/search/?txtKeyWord=区域销售管理" target="_blank">区域销售管理</a>
													<a href="/search/?txtKeyWord=招商经理" target="_blank">招商经理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=客服">客服</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=售后">售后</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=客服总监" target="_blank">客服总监</a>
													<a href="/search/?txtKeyWord=客服经理" target="_blank">客服经理</a>
													<a href="/search/?txtKeyWord=客服专员" target="_blank">客服专员</a>
													<a href="/search/?txtKeyWord=网店客服" target="_blank">网店客服</a>
													<a href="/search/?txtKeyWord=客户关系管理" target="_blank">客户关系管理</a>
													<a href="/search/?txtKeyWord=售前" target="_blank">售前</a>
													<a href="/search/?txtKeyWord=售后技术支持" target="_blank">售后技术支持</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=市场">市场</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=营销">营销</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=市场营销总监" target="_blank">市场营销总监</a>
													<a href="/search/?txtKeyWord=市场营销经理" target="_blank">市场营销经理</a>
													<a href="/search/?txtKeyWord=市场营销专员" target="_blank">市场营销专员</a>
													<a href="/search/?txtKeyWord=商务专员" target="_blank">商务专员</a>
													<a href="/search/?txtKeyWord=选址拓展" target="_blank">选址拓展</a>
													<a href="/search/?txtKeyWord=活动策划" target="_blank">活动策划</a>
													<a href="/search/?txtKeyWord=企划" target="_blank">企划</a>
													<a href="/search/?txtKeyWord=促销员" target="_blank">促销员</a>
													<a href="/search/?txtKeyWord=网络营销" target="_blank">网络营销</a>
													<a href="/search/?txtKeyWord=海外市场" target="_blank">海外市场</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=公关">公关</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=媒介">媒介</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=公关经理" target="_blank">公关经理</a>
													<a href="/search/?txtKeyWord=媒介专员" target="_blank">媒介专员</a>
													<a href="/search/?txtKeyWord=品牌经营" target="_blank">品牌经营</a>
													<a href="/search/?txtKeyWord=广告协调" target="_blank">广告协调</a>
													<a href="/search/?txtKeyWord=会务安排" target="_blank">会务安排</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)"> <i class="newIcon newIcon"></i>
									<p class="lnk">人力、行政、财务、管理</p> <b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="top: -31px; display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=人力资源" target="_blank">人力资源</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=人力资源专员" target="_blank">人力资源专员</a>
													<a href="/search/?txtKeyWord=人员招聘" target="_blank">人员招聘</a>
													<a href="/search/?txtKeyWord=员工培训" target="_blank">员工培训</a>
													<a href="/search/?txtKeyWord=薪酬福利" target="_blank">薪酬福利</a>
													<a href="/search/?txtKeyWord=绩效考核" target="_blank">绩效考核</a>
													<a href="/search/?txtKeyWord=员工关系" target="_blank">员工关系</a>
													<a href="/search/?txtKeyWord=人力资源经理" target="_blank">人力资源经理</a>
													<a href="/search/?txtKeyWord=人力资源总监" target="_blank">人力资源总监</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=行政后勤" target="_blank">行政后勤</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=行政专员" target="_blank">行政专员</a>
													<a href="/search/?txtKeyWord=文员" target="_blank">文员</a>
													<a href="/search/?txtKeyWord=前台接待" target="_blank">前台接待</a>
													<a href="/search/?txtKeyWord=高管助理" target="_blank">高管助理</a>
													<a href="/search/?txtKeyWord=系统管理员" target="_blank">系统管理员</a>
													<a href="/search/?txtKeyWord=网管" target="_blank">网管</a>
													<a href="/search/?txtKeyWord=保安" target="_blank">保安</a>
													<a href="/search/?txtKeyWord=保洁员" target="_blank">保洁员</a>
													<a href="/search/?txtKeyWord=商务司机" target="_blank">商务司机</a>
													<a href="/search/?txtKeyWord=客运司机" target="_blank">客运司机</a>
													<a href="/search/?txtKeyWord=货运司机" target="_blank">货运司机</a>
													<a href="/search/?txtKeyWord=后勤" target="_blank">后勤</a>
													<a href="/search/?txtKeyWord=行政经理" target="_blank">行政经理</a>
													<a href="/search/?txtKeyWord=行政总监" target="_blank">行政总监</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=财务">财务</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=审计">审计</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=税务">税务</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=财务专员" target="_blank">财务专员</a>
													<a href="/search/?txtKeyWord=会计" target="_blank">会计</a>
													<a href="/search/?txtKeyWord=出纳" target="_blank">出纳</a>
													<a href="/search/?txtKeyWord=投融资" target="_blank">投融资</a>
													<a href="/search/?txtKeyWord=审计" target="_blank">审计</a>
													<a href="/search/?txtKeyWord=税务" target="_blank">税务</a>
													<a href="/search/?txtKeyWord=统计" target="_blank">统计</a>
													<a href="/search/?txtKeyWord=成本管理" target="_blank">成本管理</a>
													<a href="/search/?txtKeyWord=结算" target="_blank">结算</a>
													<a href="/search/?txtKeyWord=风控" target="_blank">风控</a>
													<a href="/search/?txtKeyWord=资产管理" target="_blank">资产管理</a>
													<a href="/search/?txtKeyWord=财务经理" target="_blank">财务经理</a>
													<a href="/search/?txtKeyWord=财务总监" target="_blank">财务总监</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=律师">律师</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=法务">法务</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=律师" target="_blank">律师</a>
													<a href="/search/?txtKeyWord=法律顾问" target="_blank">法律顾问</a>
													<a href="/search/?txtKeyWord=法务经理" target="_blank">法务经理</a>
													<a href="/search/?txtKeyWord=法务专员" target="_blank">法务专员</a>
													<a href="/search/?txtKeyWord=知识产权" target="_blank">知识产权</a>
													<a href="/search/?txtKeyWord=专利顾问" target="_blank">专利顾问</a>
													<a href="/search/?txtKeyWord=合规管理" target="_blank">合规管理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=高级管理" target="_blank">高级管理</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=CEO" target="_blank">CEO</a>
													<a href="/search/?txtKeyWord=副总" target="_blank">副总</a>
													<a href="/search/?txtKeyWord=CTO" target="_blank">CTO</a>
													<a href="/search/?txtKeyWord=COO" target="_blank">COO</a>
													<a href="/search/?txtKeyWord=CFO" target="_blank">CFO</a>
													<a href="/search/?txtKeyWord=总监" target="_blank">总监</a>
													<a href="/search/?txtKeyWord=办事处负责人" target="_blank">办事处负责人</a>
													<a href="/search/?txtKeyWord=总工程师" target="_blank">总工程师</a>
													<a href="/search/?txtKeyWord=厂长" target="_blank">厂长</a>
													<a href="/search/?txtKeyWord=副厂长" target="_blank">副厂长</a>
													<a href="/search/?txtKeyWord=合伙人" target="_blank">合伙人</a>
													<a href="/search/?txtKeyWord=总经理助理" target="_blank">总经理助理</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon"></i>
									<p class="lnk">生产、工人、质控</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=生产">生产</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=营运">营运</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=厂长" target="_blank">厂长</a>
													<a href="/search/?txtKeyWord=副厂长" target="_blank">副厂长</a>
													<a href="/search/?txtKeyWord=总工程师" target="_blank">总工程师</a>
													<a href="/search/?txtKeyWord=副总工程师" target="_blank">副总工程师</a>
													<a href="/search/?txtKeyWord=车间主任" target="_blank">车间主任</a>
													<a href="/search/?txtKeyWord=项目经理" target="_blank">项目经理</a>
													<a href="/search/?txtKeyWord=技术工程师" target="_blank">技术工程师</a>
													<a href="/search/?txtKeyWord=营运经理" target="_blank">营运经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=生产计划" target="_blank">生产计划</a>
													<a href="/search/?txtKeyWord=调度" target="_blank">调度</a>
													<a href="/search/?txtKeyWord=物料管理" target="_blank">物料管理</a>
													<a href="/search/?txtKeyWord=库管" target="_blank">库管</a>
													<a href="/search/?txtKeyWord=生产主管" target="_blank">生产主管</a>
													<a href="/search/?txtKeyWord=领班" target="_blank">领班</a>
													<a href="/search/?txtKeyWord=组长" target="_blank">组长</a>
													<a href="/search/?txtKeyWord=工艺设计" target="_blank">工艺设计</a>
													<a href="/search/?txtKeyWord=化验" target="_blank">化验</a>
													<a href="/search/?txtKeyWord=检验" target="_blank">检验</a>
													<a href="/search/?txtKeyWord=生产文员" target="_blank">生产文员</a>
													<a href="/search/?txtKeyWord=设备管理" target="_blank">设备管理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=普工">普工</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=技工">技工</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=普工" target="_blank">普工</a>
													<a href="/search/?txtKeyWord=钣金工" target="_blank">钣金工</a>
													<a href="/search/?txtKeyWord=机修工" target="_blank">机修工</a>
													<a href="/search/?txtKeyWord=冲压工" target="_blank">冲压工</a>
													<a href="/search/?txtKeyWord=装配工" target="_blank">装配工</a>
													<a href="/search/?txtKeyWord=焊工" target="_blank">焊工</a>
													<a href="/search/?txtKeyWord=钳工" target="_blank">钳工</a>
													<a href="/search/?txtKeyWord=车工" target="_blank">车工</a>
													<a href="/search/?txtKeyWord=磨工" target="_blank">磨工</a>
													<a href="/search/?txtKeyWord=铣工" target="_blank">铣工</a>
													<a href="/search/?txtKeyWord=切割技工" target="_blank">切割技工</a>
													<a href="/search/?txtKeyWord=模具工" target="_blank">模具工</a>
													<a href="/search/?txtKeyWord=叉车工" target="_blank">叉车工</a>
													<a href="/search/?txtKeyWord=铲车" target="_blank">铲车</a>
													<a href="/search/?txtKeyWord=空调工" target="_blank">空调工</a>
													<a href="/search/?txtKeyWord=电梯工" target="_blank">电梯工</a>
													<a href="/search/?txtKeyWord=锅炉工" target="_blank">锅炉工</a>
													<a href="/search/?txtKeyWord=水电工" target="_blank">水电工</a>
													<a href="/search/?txtKeyWord=木工" target="_blank">木工</a>
													<a href="/search/?txtKeyWord=油漆工" target="_blank">油漆工</a>
													<a href="/search/?txtKeyWord=注塑工" target="_blank">注塑工</a>
													<a href="/search/?txtKeyWord=铸造" target="_blank">铸造</a>
													<a href="/search/?txtKeyWord=锻造" target="_blank">锻造</a>
													<a href="/search/?txtKeyWord=万能工" target="_blank">万能工</a>
													<a href="/search/?txtKeyWord=汽车修理" target="_blank">汽车修理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=质控">质控</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=安防">安防</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=质量管理" target="_blank">质量管理</a>
													<a href="/search/?txtKeyWord=测试经理" target="_blank">测试经理</a>
													<a href="/search/?txtKeyWord=质量检验员" target="_blank">质量检验员</a>
													<a href="/search/?txtKeyWord=测试员" target="_blank">测试员</a>
													<a href="/search/?txtKeyWord=可靠度工程师" target="_blank">可靠度工程师</a>
													<a href="/search/?txtKeyWord=认证体系工程师" target="_blank">认证体系工程师</a>
													<a href="/search/?txtKeyWord=审核员" target="_blank">审核员</a>
													<a href="/search/?txtKeyWord=供应商管理（SQE）" target="_blank">供应商管理（SQE）</a>
													<a href="/search/?txtKeyWord=安全消防" target="_blank">安全消防</a>
													<a href="/search/?txtKeyWord=环保" target="_blank">环保</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon2"></i>
									<p class="lnk">互联网、游戏、软件</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=后端开发" target="_blank">后端开发</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=PHP" target="_blank">PHP</a>
													<a href="/search/?txtKeyWord=Java" target="_blank">Java</a>
													<a href="/search/?txtKeyWord=.net" target="_blank">.net</a>
													<a href="/search/?txtKeyWord=C" target="_blank">C</a>
													<a href="/search/?txtKeyWord=C++" target="_blank">C++</a>
													<a href="/search/?txtKeyWord=C#" target="_blank">C#</a>
													<a href="/search/?txtKeyWord=python" target="_blank">python</a>
													<a href="/search/?txtKeyWord=架构师" target="_blank">架构师</a>
													<a href="/search/?txtKeyWord=后端开发" target="_blank">后端开发</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=移动开发" target="_blank">移动开发</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=IOS" target="_blank">IOS</a>
													<a href="/search/?txtKeyWord=android" target="_blank">android</a>
													<a href="/search/?txtKeyWord=html5(移动)" target="_blank">html5(移动)</a>
													<a href="/search/?txtKeyWord=移动开发" target="_blank">移动开发</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=前端开发" target="_blank">前端开发</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=网页前端" target="_blank">网页前端</a>
													<a href="/search/?txtKeyWord=html5" target="_blank">html5</a>
													<a href="/search/?txtKeyWord=JavaScript" target="_blank">JavaScript</a>
													<a href="/search/?txtKeyWord=Flash" target="_blank">Flash</a>
													<a href="/search/?txtKeyWord=COCOS2D-X" target="_blank">COCOS2D-X</a>
													<a href="/search/?txtKeyWord=U3D" target="_blank">U3D</a>
													<a href="/search/?txtKeyWord=前端开发" target="_blank">前端开发</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=运维" target="_blank">运维</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=运维工程师" target="_blank">运维工程师</a>
													<a href="/search/?txtKeyWord=网络安全" target="_blank">网络安全</a>
													<a href="/search/?txtKeyWord=运维经理" target="_blank">运维经理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=数据库" target="_blank">数据库</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=mysql" target="_blank">mysql</a>
													<a href="/search/?txtKeyWord=SQL Server" target="_blank">SQL Server</a>
													<a href="/search/?txtKeyWord=Oracle" target="_blank">Oracle</a>
													<a href="/search/?txtKeyWord=hadoop" target="_blank">hadoop</a>
													<a href="/search/?txtKeyWord=DBA" target="_blank">DBA</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=技术管理" target="_blank">技术管理</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=项目经理" target="_blank">项目经理</a>
													<a href="/search/?txtKeyWord=助理" target="_blank">助理</a>
													<a href="/search/?txtKeyWord=技术经理" target="_blank">技术经理</a>
													<a href="/search/?txtKeyWord=CTO" target="_blank">CTO</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=其他技术" target="_blank">其他技术</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=软件实施" target="_blank">软件实施</a>
													<a href="/search/?txtKeyWord=系统集成" target="_blank">系统集成</a>
													<a href="/search/?txtKeyWord=系统分析员" target="_blank">系统分析员</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=测试" target="_blank">测试</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=软件测试" target="_blank">软件测试</a>
													<a href="/search/?txtKeyWord=移动端测试" target="_blank">移动端测试</a>
													<a href="/search/?txtKeyWord=游戏测试" target="_blank">游戏测试</a>
													<a href="/search/?txtKeyWord=测试工程师" target="_blank">测试工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=产品" target="_blank">产品</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=网页产品经理" target="_blank">网页产品经理</a>
													<a href="/search/?txtKeyWord=移动产品经理" target="_blank">移动产品经理</a>
													<a href="/search/?txtKeyWord=电商产品经理" target="_blank">电商产品经理</a>
													<a href="/search/?txtKeyWord=软件产品经理" target="_blank">软件产品经理</a>
													<a href="/search/?txtKeyWord=游戏策划" target="_blank">游戏策划</a>
													<a href="/search/?txtKeyWord=产品经理" target="_blank">产品经理</a>
													<a href="/search/?txtKeyWord=产品专员" target="_blank">产品专员</a>
													<a href="/search/?txtKeyWord=助理" target="_blank">助理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=设计" target="_blank">设计</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=UI设计" target="_blank">UI设计</a>
													<a href="/search/?txtKeyWord=平面设计" target="_blank">平面设计</a>
													<a href="/search/?txtKeyWord=网页设计" target="_blank">网页设计</a>
													<a href="/search/?txtKeyWord=美工" target="_blank">美工</a>
													<a href="/search/?txtKeyWord=游戏设计" target="_blank">游戏设计</a>
													<a href="/search/?txtKeyWord=原画设计" target="_blank">原画设计</a>
													<a href="/search/?txtKeyWord=交互设计" target="_blank">交互设计</a>
													<a href="/search/?txtKeyWord=设计师" target="_blank">设计师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=运营">运营</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=市场">市场</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=网店运营" target="_blank">网店运营</a>
													<a href="/search/?txtKeyWord=SEO" target="_blank">SEO</a>
													<a href="/search/?txtKeyWord=SEM" target="_blank">SEM</a>
													<a href="/search/?txtKeyWord=网络推广" target="_blank">网络推广</a>
													<a href="/search/?txtKeyWord=文案策划" target="_blank">文案策划</a>
													<a href="/search/?txtKeyWord=编辑" target="_blank">编辑</a>
													<a href="/search/?txtKeyWord=内容运营" target="_blank">内容运营</a>
													<a href="/search/?txtKeyWord=新媒体运营" target="_blank">新媒体运营</a>
													<a href="/search/?txtKeyWord=市场策划" target="_blank">市场策划</a>
													<a href="/search/?txtKeyWord=运营" target="_blank">运营</a>
													<a href="/search/?txtKeyWord=市场专员" target="_blank">市场专员</a>
													<a href="/search/?txtKeyWord=运营" target="_blank">运营</a>
													<a href="/search/?txtKeyWord=市场经理" target="_blank">市场经理</a>
													<a href="/search/?txtKeyWord=运营" target="_blank">运营</a>
													<a href="/search/?txtKeyWord=市场总监" target="_blank">市场总监</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon3"></i>
									<p class="lnk">通信、硬件、电子电器</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="top: -130px; display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=通信">通信</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=网络设备">网络设备</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=移动通信工程师" target="_blank">移动通信工程师</a>
													<a href="/search/?txtKeyWord=有线传输工程师" target="_blank">有线传输工程师</a>
													<a href="/search/?txtKeyWord=网络工程师" target="_blank">网络工程师</a>
													<a href="/search/?txtKeyWord=通信项目管理" target="_blank">通信项目管理</a>
													<a href="/search/?txtKeyWord=安装技术员" target="_blank">安装技术员</a>
													<a href="/search/?txtKeyWord=通信技术工程师" target="_blank">通信技术工程师</a>
													<a href="/search/?txtKeyWord=通信设备维修" target="_blank">通信设备维修</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=电子" target="_blank">电子</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=电源开发工程师" target="_blank">电源开发工程师</a>
													<a href="/search/?txtKeyWord=工艺工程师" target="_blank">工艺工程师</a>
													<a href="/search/?txtKeyWord=汽车电子工程师" target="_blank">汽车电子工程师</a>
													<a href="/search/?txtKeyWord=自动化工程师" target="_blank">自动化工程师</a>
													<a href="/search/?txtKeyWord=嵌入式开发" target="_blank">嵌入式开发</a>
													<a href="/search/?txtKeyWord=仪器" target="_blank">仪器</a>
													<a href="/search/?txtKeyWord=仪表" target="_blank">仪表</a>
													<a href="/search/?txtKeyWord=计量" target="_blank">计量</a>
													<a href="/search/?txtKeyWord=测试工程师" target="_blank">测试工程师</a>
													<a href="/search/?txtKeyWord=SMT工程师" target="_blank">SMT工程师</a>
													<a href="/search/?txtKeyWord=电子工程师" target="_blank">电子工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=电器" target="_blank">电器</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=家电" target="_blank">家电</a>
													<a href="/search/?txtKeyWord=数码产品研发" target="_blank">数码产品研发</a>
													<a href="/search/?txtKeyWord=光源和照明工程师" target="_blank">光源和照明工程师</a>
													<a href="/search/?txtKeyWord=音响工程师" target="_blank">音响工程师</a>
													<a href="/search/?txtKeyWord=电器维修" target="_blank">电器维修</a>
													<a href="/search/?txtKeyWord=电器工程师" target="_blank">电器工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="show">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon4"></i>
									<p class="lnk">汽车、机械</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="top: -163px;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=汽车研发">汽车研发</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=设计">设计</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=电器设计师" target="_blank">电器设计师</a>
													<a href="/search/?txtKeyWord=底盘设计师" target="_blank">底盘设计师</a>
													<a href="/search/?txtKeyWord=车身" target="_blank">车身</a>
													<a href="/search/?txtKeyWord=造型设计师" target="_blank">造型设计师</a>
													<a href="/search/?txtKeyWord=动力系统工程师" target="_blank">动力系统工程师</a>
													<a href="/search/?txtKeyWord=内外饰工程师" target="_blank">内外饰工程师</a>
													<a href="/search/?txtKeyWord=机电工程师" target="_blank">机电工程师</a>
													<a href="/search/?txtKeyWord=涂装工程师" target="_blank">涂装工程师</a>
													<a href="/search/?txtKeyWord=总布置工程师" target="_blank">总布置工程师</a>
													<a href="/search/?txtKeyWord=车辆试验" target="_blank">车辆试验</a>
													<a href="/search/?txtKeyWord=测试" target="_blank">测试</a>
													<a href="/search/?txtKeyWord=质量工程师" target="_blank">质量工程师</a>
													<a href="/search/?txtKeyWord=研发工程师" target="_blank">研发工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=汽车销售">汽车销售</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=市场">市场</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=汽车销售顾问" target="_blank">汽车销售顾问</a>
													<a href="/search/?txtKeyWord=精品销售" target="_blank">精品销售</a>
													<a href="/search/?txtKeyWord=零配件销售" target="_blank">零配件销售</a>
													<a href="/search/?txtKeyWord=销售内勤" target="_blank">销售内勤</a>
													<a href="/search/?txtKeyWord=销售经理" target="_blank">销售经理</a>
													<a href="/search/?txtKeyWord=市场营销专员" target="_blank">市场营销专员</a>
													<a href="/search/?txtKeyWord=市场营销经理" target="_blank">市场营销经理</a>
													<a href="/search/?txtKeyWord=二手车评估师" target="_blank">二手车评估师</a>
													<a href="/search/?txtKeyWord=销售库管" target="_blank">销售库管</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=汽车服务">汽车服务</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=维修">维修</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=汽车美容" target="_blank">汽车美容</a>
													<a href="/search/?txtKeyWord=洗车工" target="_blank">洗车工</a>
													<a href="/search/?txtKeyWord=售后服务" target="_blank">售后服务</a>
													<a href="/search/?txtKeyWord=客服" target="_blank">客服</a>
													<a href="/search/?txtKeyWord=售后经理" target="_blank">售后经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=保险理赔" target="_blank">保险理赔</a>
													<a href="/search/?txtKeyWord=机电维修" target="_blank">机电维修</a>
													<a href="/search/?txtKeyWord=维修钣金工" target="_blank">维修钣金工</a>
													<a href="/search/?txtKeyWord=维修漆工" target="_blank">维修漆工</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=机械">机械</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=设备">设备</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=模具设计师" target="_blank">模具设计师</a>
													<a href="/search/?txtKeyWord=机械工程师" target="_blank">机械工程师</a>
													<a href="/search/?txtKeyWord=机电工程师" target="_blank">机电工程师</a>
													<a href="/search/?txtKeyWord=CNC工程师" target="_blank">CNC工程师</a>
													<a href="/search/?txtKeyWord=夹具设计师" target="_blank">夹具设计师</a>
													<a href="/search/?txtKeyWord=结构工程师" target="_blank">结构工程师</a>
													<a href="/search/?txtKeyWord=绘图员" target="_blank">绘图员</a>
													<a href="/search/?txtKeyWord=设备管理" target="_blank">设备管理</a>
													<a href="/search/?txtKeyWord=设备维修" target="_blank">设备维修</a>
													<a href="/search/?txtKeyWord=工艺工程师" target="_blank">工艺工程师</a>
													<a href="/search/?txtKeyWord=工业工程师" target="_blank">工业工程师</a>
													<a href="/search/?txtKeyWord=材料工程师" target="_blank">材料工程师</a>
													<a href="/search/?txtKeyWord=技术研发" target="_blank">技术研发</a>
													<a href="/search/?txtKeyWord=技术研发经理" target="_blank">技术研发经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon5"></i>
									<p class="lnk">房地产、建筑、物业</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="top: -196px; display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=建筑设计" target="_blank">建筑设计</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=总建筑师" target="_blank">总建筑师</a>
													<a href="/search/?txtKeyWord=设计总监" target="_blank">设计总监</a>
													<a href="/search/?txtKeyWord=建筑设计师" target="_blank">建筑设计师</a>
													<a href="/search/?txtKeyWord=绘图" target="_blank">绘图</a>
													<a href="/search/?txtKeyWord=效果图制作" target="_blank">效果图制作</a>
													<a href="/search/?txtKeyWord=规划设计师" target="_blank">规划设计师</a>
													<a href="/search/?txtKeyWord=方案设计师" target="_blank">方案设计师</a>
													<a href="/search/?txtKeyWord=结构设计师" target="_blank">结构设计师</a>
													<a href="/search/?txtKeyWord=暖通设计师" target="_blank">暖通设计师</a>
													<a href="/search/?txtKeyWord=给排水设计师" target="_blank">给排水设计师</a>
													<a href="/search/?txtKeyWord=电气设计师" target="_blank">电气设计师</a>
													<a href="/search/?txtKeyWord=幕墙设计师" target="_blank">幕墙设计师</a>
													<a href="/search/?txtKeyWord=施工图设计师" target="_blank">施工图设计师</a>
													<a href="/search/?txtKeyWord=园林" target="_blank">园林</a>
													<a href="/search/?txtKeyWord=景观设计" target="_blank">景观设计</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=建筑工程" target="_blank">建筑工程</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=总工程师" target="_blank">总工程师</a>
													<a href="/search/?txtKeyWord=工程总监" target="_blank">工程总监</a>
													<a href="/search/?txtKeyWord=工程经理" target="_blank">工程经理</a>
													<a href="/search/?txtKeyWord=建筑工程师" target="_blank">建筑工程师</a>
													<a href="/search/?txtKeyWord=建造师" target="_blank">建造师</a>
													<a href="/search/?txtKeyWord=招投标" target="_blank">招投标</a>
													<a href="/search/?txtKeyWord=配套工程师" target="_blank">配套工程师</a>
													<a href="/search/?txtKeyWord=开发报建" target="_blank">开发报建</a>
													<a href="/search/?txtKeyWord=预结算" target="_blank">预结算</a>
													<a href="/search/?txtKeyWord=造价" target="_blank">造价</a>
													<a href="/search/?txtKeyWord=土建工程师" target="_blank">土建工程师</a>
													<a href="/search/?txtKeyWord=安装工程师" target="_blank">安装工程师</a>
													<a href="/search/?txtKeyWord=路桥" target="_blank">路桥</a>
													<a href="/search/?txtKeyWord=市政工程师" target="_blank">市政工程师</a>
													<a href="/search/?txtKeyWord=岩土工程师" target="_blank">岩土工程师</a>
													<a href="/search/?txtKeyWord=智能楼宇" target="_blank">智能楼宇</a>
													<a href="/search/?txtKeyWord=测绘" target="_blank">测绘</a>
													<a href="/search/?txtKeyWord=测量" target="_blank">测量</a>
													<a href="/search/?txtKeyWord=施工员" target="_blank">施工员</a>
													<a href="/search/?txtKeyWord=施工管理" target="_blank">施工管理</a>
													<a href="/search/?txtKeyWord=工长" target="_blank">工长</a>
													<a href="/search/?txtKeyWord=资料员" target="_blank">资料员</a>
													<a href="/search/?txtKeyWord=采购" target="_blank">采购</a>
													<a href="/search/?txtKeyWord=材料" target="_blank">材料</a>
													<a href="/search/?txtKeyWord=安全员" target="_blank">安全员</a>
													<a href="/search/?txtKeyWord=质检员" target="_blank">质检员</a>
													<a href="/search/?txtKeyWord=监理工程师" target="_blank">监理工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=营销">营销</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=策划">策划</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=销售">销售</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=营销" target="_blank">营销</a>
													<a href="/search/?txtKeyWord=策划总监" target="_blank">策划总监</a>
													<a href="/search/?txtKeyWord=营销" target="_blank">营销</a>
													<a href="/search/?txtKeyWord=策划经理" target="_blank">策划经理</a>
													<a href="/search/?txtKeyWord=营销" target="_blank">营销</a>
													<a href="/search/?txtKeyWord=策划专员" target="_blank">策划专员</a>
													<a href="/search/?txtKeyWord=置业顾问" target="_blank">置业顾问</a>
													<a href="/search/?txtKeyWord=房产经纪人" target="_blank">房产经纪人</a>
													<a href="/search/?txtKeyWord=销售经理" target="_blank">销售经理</a>
													<a href="/search/?txtKeyWord=招商专员" target="_blank">招商专员</a>
													<a href="/search/?txtKeyWord=招商经理" target="_blank">招商经理</a>
													<a href="/search/?txtKeyWord=权证员" target="_blank">权证员</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=装饰装修" target="_blank">装饰装修</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=设计总监" target="_blank">设计总监</a>
													<a href="/search/?txtKeyWord=设计经理" target="_blank">设计经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=设计师" target="_blank">设计师</a>
													<a href="/search/?txtKeyWord=高级设计师" target="_blank">高级设计师</a>
													<a href="/search/?txtKeyWord=家装设计师" target="_blank">家装设计师</a>
													<a href="/search/?txtKeyWord=工装设计师" target="_blank">工装设计师</a>
													<a href="/search/?txtKeyWord=软装设计师" target="_blank">软装设计师</a>
													<a href="/search/?txtKeyWord=绘图员" target="_blank">绘图员</a>
													<a href="/search/?txtKeyWord=家装顾问" target="_blank">家装顾问</a>
													<a href="/search/?txtKeyWord=工程" target="_blank">工程</a>
													<a href="/search/?txtKeyWord=项目总监" target="_blank">项目总监</a>
													<a href="/search/?txtKeyWord=工程" target="_blank">工程</a>
													<a href="/search/?txtKeyWord=项目经理" target="_blank">项目经理</a>
													<a href="/search/?txtKeyWord=工程监理" target="_blank">工程监理</a>
													<a href="/search/?txtKeyWord=施工员" target="_blank">施工员</a>
													<a href="/search/?txtKeyWord=水电工" target="_blank">水电工</a>
													<a href="/search/?txtKeyWord=木工" target="_blank">木工</a>
													<a href="/search/?txtKeyWord=泥工" target="_blank">泥工</a>
													<a href="/search/?txtKeyWord=资料员" target="_blank">资料员</a>
													<a href="/search/?txtKeyWord=材料专员" target="_blank">材料专员</a>
													<a href="/search/?txtKeyWord=经理" target="_blank">经理</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=物业" target="_blank">物业</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=物业经理" target="_blank">物业经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=物管员" target="_blank">物管员</a>
													<a href="/search/?txtKeyWord=招商" target="_blank">招商</a>
													<a href="/search/?txtKeyWord=租售" target="_blank">租售</a>
													<a href="/search/?txtKeyWord=综合维修工" target="_blank">综合维修工</a>
													<a href="/search/?txtKeyWord=水电维修工" target="_blank">水电维修工</a>
													<a href="/search/?txtKeyWord=保安" target="_blank">保安</a>
													<a href="/search/?txtKeyWord=保洁员" target="_blank">保洁员</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon6"></i>
									<p class="lnk">金融、银行、保险</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none; height: 350px;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=银行" target="_blank">银行</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=行长" target="_blank">行长</a>
													<a href="/search/?txtKeyWord=副行长" target="_blank">副行长</a>
													<a href="/search/?txtKeyWord=业务部门经理" target="_blank">业务部门经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=客户经理" target="_blank">客户经理</a>
													<a href="/search/?txtKeyWord=综合业务专员" target="_blank">综合业务专员</a>
													<a href="/search/?txtKeyWord=风险控制" target="_blank">风险控制</a>
													<a href="/search/?txtKeyWord=信审核查" target="_blank">信审核查</a>
													<a href="/search/?txtKeyWord=大堂经理" target="_blank">大堂经理</a>
													<a href="/search/?txtKeyWord=资产评估" target="_blank">资产评估</a>
													<a href="/search/?txtKeyWord=分析" target="_blank">分析</a>
													<a href="/search/?txtKeyWord=信贷管理" target="_blank">信贷管理</a>
													<a href="/search/?txtKeyWord=银行柜员" target="_blank">银行柜员</a>
													<a href="/search/?txtKeyWord=信用卡销售" target="_blank">信用卡销售</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=金融">金融</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=证券">证券</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=投资">投资</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=投融资专员" target="_blank">投融资专员</a>
													<a href="/search/?txtKeyWord=投融资经理" target="_blank">投融资经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=证券分析师" target="_blank">证券分析师</a>
													<a href="/search/?txtKeyWord=金融产品经纪人" target="_blank">金融产品经纪人</a>
													<a href="/search/?txtKeyWord=投资银行业务" target="_blank">投资银行业务</a>
													<a href="/search/?txtKeyWord=金融操盘手" target="_blank">金融操盘手</a>
													<a href="/search/?txtKeyWord=金融研究员" target="_blank">金融研究员</a>
													<a href="/search/?txtKeyWord=投资" target="_blank">投资</a>
													<a href="/search/?txtKeyWord=基金项目经理" target="_blank">基金项目经理</a>
													<a href="/search/?txtKeyWord=投资顾问" target="_blank">投资顾问</a>
													<a href="/search/?txtKeyWord=风控" target="_blank">风控</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=保险" target="_blank">保险</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=保险经纪人" target="_blank">保险经纪人</a>
													<a href="/search/?txtKeyWord=客户经理" target="_blank">客户经理</a>
													<a href="/search/?txtKeyWord=理财顾问" target="_blank">理财顾问</a>
													<a href="/search/?txtKeyWord=保险业务经理" target="_blank">保险业务经理</a>
													<a href="/search/?txtKeyWord=保险理赔" target="_blank">保险理赔</a>
													<a href="/search/?txtKeyWord=车险专员" target="_blank">车险专员</a>
													<a href="/search/?txtKeyWord=客户服务" target="_blank">客户服务</a>
													<a href="/search/?txtKeyWord=续期管理" target="_blank">续期管理</a>
													<a href="/search/?txtKeyWord=保险培训师" target="_blank">保险培训师</a>
													<a href="/search/?txtKeyWord=保险内勤" target="_blank">保险内勤</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon7"></i>
									<p class="lnk">广告、设计、传媒</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=广告" target="_blank">广告</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=广告客户总监" target="_blank">广告客户总监</a>
													<a href="/search/?txtKeyWord=广告销售经理" target="_blank">广告销售经理</a>
													<a href="/search/?txtKeyWord=广告客户专员" target="_blank">广告客户专员</a>
													<a href="/search/?txtKeyWord=广告创意总监" target="_blank">广告创意总监</a>
													<a href="/search/?txtKeyWord=广告创意" target="_blank">广告创意</a>
													<a href="/search/?txtKeyWord=设计" target="_blank">设计</a>
													<a href="/search/?txtKeyWord=美术指导" target="_blank">美术指导</a>
													<a href="/search/?txtKeyWord=文案策划" target="_blank">文案策划</a>
													<a href="/search/?txtKeyWord=广告执行" target="_blank">广告执行</a>
													<a href="/search/?txtKeyWord=制作" target="_blank">制作</a>
													<a href="/search/?txtKeyWord=安装" target="_blank">安装</a>
													<a href="/search/?txtKeyWord=会务" target="_blank">会务</a>
													<a href="/search/?txtKeyWord=会展" target="_blank">会展</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=设计" target="_blank">设计</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=平面设计师" target="_blank">平面设计师</a>
													<a href="/search/?txtKeyWord=动画" target="_blank">动画</a>
													<a href="/search/?txtKeyWord=3D设计" target="_blank">3D设计</a>
													<a href="/search/?txtKeyWord=网页设计" target="_blank">网页设计</a>
													<a href="/search/?txtKeyWord=UI设计" target="_blank">UI设计</a>
													<a href="/search/?txtKeyWord=美工" target="_blank">美工</a>
													<a href="/search/?txtKeyWord=装修设计" target="_blank">装修设计</a>
													<a href="/search/?txtKeyWord=家具设计" target="_blank">家具设计</a>
													<a href="/search/?txtKeyWord=原画师" target="_blank">原画师</a>
													<a href="/search/?txtKeyWord=家居用品设计" target="_blank">家居用品设计</a>
													<a href="/search/?txtKeyWord=服装设计" target="_blank">服装设计</a>
													<a href="/search/?txtKeyWord=建筑设计" target="_blank">建筑设计</a>
													<a href="/search/?txtKeyWord=工艺品" target="_blank">工艺品</a>
													<a href="/search/?txtKeyWord=珠宝设计" target="_blank">珠宝设计</a>
													<a href="/search/?txtKeyWord=工业设计" target="_blank">工业设计</a>
													<a href="/search/?txtKeyWord=店面" target="_blank">店面</a>
													<a href="/search/?txtKeyWord=展览设计" target="_blank">展览设计</a>
													<a href="/search/?txtKeyWord=设计经理" target="_blank">设计经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=设计总监" target="_blank">设计总监</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=影视">影视</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=媒体">媒体</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=编导" target="_blank">编导</a>
													<a href="/search/?txtKeyWord=导演" target="_blank">导演</a>
													<a href="/search/?txtKeyWord=主持人" target="_blank">主持人</a>
													<a href="/search/?txtKeyWord=演员" target="_blank">演员</a>
													<a href="/search/?txtKeyWord=模特" target="_blank">模特</a>
													<a href="/search/?txtKeyWord=摄像" target="_blank">摄像</a>
													<a href="/search/?txtKeyWord=摄影" target="_blank">摄影</a>
													<a href="/search/?txtKeyWord=化妆师" target="_blank">化妆师</a>
													<a href="/search/?txtKeyWord=造型师" target="_blank">造型师</a>
													<a href="/search/?txtKeyWord=影视策划" target="_blank">影视策划</a>
													<a href="/search/?txtKeyWord=后期制作" target="_blank">后期制作</a>
													<a href="/search/?txtKeyWord=经纪人" target="_blank">经纪人</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=写作">写作</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=出版">出版</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=印刷">印刷</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=编辑" target="_blank">编辑</a>
													<a href="/search/?txtKeyWord=美术编辑" target="_blank">美术编辑</a>
													<a href="/search/?txtKeyWord=记者" target="_blank">记者</a>
													<a href="/search/?txtKeyWord=校对" target="_blank">校对</a>
													<a href="/search/?txtKeyWord=录入" target="_blank">录入</a>
													<a href="/search/?txtKeyWord=排版设计" target="_blank">排版设计</a>
													<a href="/search/?txtKeyWord=制版" target="_blank">制版</a>
													<a href="/search/?txtKeyWord=印刷操作" target="_blank">印刷操作</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon8"></i>
									<p class="lnk">餐饮、百货、生活服务</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="bottom: -166px; display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=餐饮">餐饮</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=娱乐">娱乐</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=餐饮" target="_blank">餐饮</a>
													<a href="/search/?txtKeyWord=娱乐管理" target="_blank">娱乐管理</a>
													<a href="/search/?txtKeyWord=大堂经理" target="_blank">大堂经理</a>
													<a href="/search/?txtKeyWord=领班" target="_blank">领班</a>
													<a href="/search/?txtKeyWord=厨师长" target="_blank">厨师长</a>
													<a href="/search/?txtKeyWord=行政总厨" target="_blank">行政总厨</a>
													<a href="/search/?txtKeyWord=厨师" target="_blank">厨师</a>
													<a href="/search/?txtKeyWord=服务员" target="_blank">服务员</a>
													<a href="/search/?txtKeyWord=传菜员" target="_blank">传菜员</a>
													<a href="/search/?txtKeyWord=礼仪" target="_blank">礼仪</a>
													<a href="/search/?txtKeyWord=迎宾" target="_blank">迎宾</a>
													<a href="/search/?txtKeyWord=调酒师" target="_blank">调酒师</a>
													<a href="/search/?txtKeyWord=吧台员" target="_blank">吧台员</a>
													<a href="/search/?txtKeyWord=茶艺师" target="_blank">茶艺师</a>
													<a href="/search/?txtKeyWord=学徒" target="_blank">学徒</a>
													<a href="/search/?txtKeyWord=洗碗工" target="_blank">洗碗工</a>
													<a href="/search/?txtKeyWord=收银员" target="_blank">收银员</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=酒店">酒店</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=旅游">旅游</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=酒店管理" target="_blank">酒店管理</a>
													<a href="/search/?txtKeyWord=大堂经理" target="_blank">大堂经理</a>
													<a href="/search/?txtKeyWord=领班" target="_blank">领班</a>
													<a href="/search/?txtKeyWord=酒店销售" target="_blank">酒店销售</a>
													<a href="/search/?txtKeyWord=前台接待" target="_blank">前台接待</a>
													<a href="/search/?txtKeyWord=预定员" target="_blank">预定员</a>
													<a href="/search/?txtKeyWord=服务员" target="_blank">服务员</a>
													<a href="/search/?txtKeyWord=行李员" target="_blank">行李员</a>
													<a href="/search/?txtKeyWord=保安" target="_blank">保安</a>
													<a href="/search/?txtKeyWord=保洁员" target="_blank">保洁员</a>
													<a href="/search/?txtKeyWord=旅游销售" target="_blank">旅游销售</a>
													<a href="/search/?txtKeyWord=旅游计调" target="_blank">旅游计调</a>
													<a href="/search/?txtKeyWord=导游" target="_blank">导游</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=美容">美容</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=健身">健身</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=运动">运动</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=美容师" target="_blank">美容师</a>
													<a href="/search/?txtKeyWord=化妆师" target="_blank">化妆师</a>
													<a href="/search/?txtKeyWord=美容顾问" target="_blank">美容顾问</a>
													<a href="/search/?txtKeyWord=美甲师" target="_blank">美甲师</a>
													<a href="/search/?txtKeyWord=发型师" target="_blank">发型师</a>
													<a href="/search/?txtKeyWord=宠物美容" target="_blank">宠物美容</a>
													<a href="/search/?txtKeyWord=按摩" target="_blank">按摩</a>
													<a href="/search/?txtKeyWord=足疗" target="_blank">足疗</a>
													<a href="/search/?txtKeyWord=健身顾问" target="_blank">健身顾问</a>
													<a href="/search/?txtKeyWord=健身教练" target="_blank">健身教练</a>
													<a href="/search/?txtKeyWord=体育运动教练" target="_blank">体育运动教练</a>
													<a href="/search/?txtKeyWord=瑜伽老师" target="_blank">瑜伽老师</a>
													<a href="/search/?txtKeyWord=舞蹈老师" target="_blank">舞蹈老师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=保安">保安</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=家政">家政</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=保安经理" target="_blank">保安经理</a>
													<a href="/search/?txtKeyWord=保安" target="_blank">保安</a>
													<a href="/search/?txtKeyWord=搬运工" target="_blank">搬运工</a>
													<a href="/search/?txtKeyWord=保洁员" target="_blank">保洁员</a>
													<a href="/search/?txtKeyWord=保姆" target="_blank">保姆</a>
													<a href="/search/?txtKeyWord=护工" target="_blank">护工</a>
													<a href="/search/?txtKeyWord=月嫂" target="_blank">月嫂</a>
													<a href="/search/?txtKeyWord=钟点工" target="_blank">钟点工</a>
													<a href="/search/?txtKeyWord=家政" target="_blank">家政</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=百货">百货</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=零售">零售</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=店长" target="_blank">店长</a>
													<a href="/search/?txtKeyWord=卖场经理" target="_blank">卖场经理</a>
													<a href="/search/?txtKeyWord=品类经理" target="_blank">品类经理</a>
													<a href="/search/?txtKeyWord=营业员" target="_blank">营业员</a>
													<a href="/search/?txtKeyWord=导购员" target="_blank">导购员</a>
													<a href="/search/?txtKeyWord=防损员" target="_blank">防损员</a>
													<a href="/search/?txtKeyWord=收银员" target="_blank">收银员</a>
													<a href="/search/?txtKeyWord=收货员" target="_blank">收货员</a>
													<a href="/search/?txtKeyWord=理货员" target="_blank">理货员</a>
													<a href="/search/?txtKeyWord=陈列员" target="_blank">陈列员</a>
													<a href="/search/?txtKeyWord=食品加工" target="_blank">食品加工</a>
													<a href="/search/?txtKeyWord=处理" target="_blank">处理</a>
													<a href="/search/?txtKeyWord=招商人员" target="_blank">招商人员</a>
													<a href="/search/?txtKeyWord=督导" target="_blank">督导</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon9"></i>
									<p class="lnk">医疗、医药</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=医药" target="_blank">医药</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=医药研发" target="_blank">医药研发</a>
													<a href="/search/?txtKeyWord=生物工程" target="_blank">生物工程</a>
													<a href="/search/?txtKeyWord=生物制药" target="_blank">生物制药</a>
													<a href="/search/?txtKeyWord=化学分析员" target="_blank">化学分析员</a>
													<a href="/search/?txtKeyWord=药品临床实验" target="_blank">药品临床实验</a>
													<a href="/search/?txtKeyWord=药品生产" target="_blank">药品生产</a>
													<a href="/search/?txtKeyWord=药品质量管理" target="_blank">药品质量管理</a>
													<a href="/search/?txtKeyWord=医药招商" target="_blank">医药招商</a>
													<a href="/search/?txtKeyWord=药品市场推广" target="_blank">药品市场推广</a>
													<a href="/search/?txtKeyWord=医药代表" target="_blank">医药代表</a>
													<a href="/search/?txtKeyWord=医药销售经理" target="_blank">医药销售经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=药店店长" target="_blank">药店店长</a>
													<a href="/search/?txtKeyWord=药店营业员" target="_blank">药店营业员</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=医疗器械" target="_blank">医疗器械</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=医疗器械研发" target="_blank">医疗器械研发</a>
													<a href="/search/?txtKeyWord=医疗器械临床实验" target="_blank">医疗器械临床实验</a>
													<a href="/search/?txtKeyWord=医疗设备生产" target="_blank">医疗设备生产</a>
													<a href="/search/?txtKeyWord=质量管理" target="_blank">质量管理</a>
													<a href="/search/?txtKeyWord=医疗器械市场推广" target="_blank">医疗器械市场推广</a>
													<a href="/search/?txtKeyWord=医疗器械销售" target="_blank">医疗器械销售</a>
													<a href="/search/?txtKeyWord=医疗器械维修" target="_blank">医疗器械维修</a>
													<a href="/search/?txtKeyWord=售后" target="_blank">售后</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=医生">医生</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=技师">技师</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=内科医生" target="_blank">内科医生</a>
													<a href="/search/?txtKeyWord=外科医生" target="_blank">外科医生</a>
													<a href="/search/?txtKeyWord=麻醉医生" target="_blank">麻醉医生</a>
													<a href="/search/?txtKeyWord=妇产科医生" target="_blank">妇产科医生</a>
													<a href="/search/?txtKeyWord=五官科医生" target="_blank">五官科医生</a>
													<a href="/search/?txtKeyWord=儿科医生" target="_blank">儿科医生</a>
													<a href="/search/?txtKeyWord=中医医生" target="_blank">中医医生</a>
													<a href="/search/?txtKeyWord=放射科医生" target="_blank">放射科医生</a>
													<a href="/search/?txtKeyWord=B超医生" target="_blank">B超医生</a>
													<a href="/search/?txtKeyWord=整形" target="_blank">整形</a>
													<a href="/search/?txtKeyWord=美容" target="_blank">美容</a>
													<a href="/search/?txtKeyWord=专科医生" target="_blank">专科医生</a>
													<a href="/search/?txtKeyWord=综合门诊" target="_blank">综合门诊</a>
													<a href="/search/?txtKeyWord=全科医生" target="_blank">全科医生</a>
													<a href="/search/?txtKeyWord=针灸" target="_blank">针灸</a>
													<a href="/search/?txtKeyWord=推拿" target="_blank">推拿</a>
													<a href="/search/?txtKeyWord=理疗师" target="_blank">理疗师</a>
													<a href="/search/?txtKeyWord=检验" target="_blank">检验</a>
													<a href="/search/?txtKeyWord=化验" target="_blank">化验</a>
													<a href="/search/?txtKeyWord=药剂师" target="_blank">药剂师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=医院管理">医院管理</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=护理">护理</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=医院管理人员" target="_blank">医院管理人员</a>
													<a href="/search/?txtKeyWord=护士长" target="_blank">护士长</a>
													<a href="/search/?txtKeyWord=护士" target="_blank">护士</a>
													<a href="/search/?txtKeyWord=医助" target="_blank">医助</a>
													<a href="/search/?txtKeyWord=导医" target="_blank">导医</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon10"></i>
									<p class="lnk">教育、培训、专业服务</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=销售">销售</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=市场">市场</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=咨询总监" target="_blank">咨询总监</a>
													<a href="/search/?txtKeyWord=咨询经理" target="_blank">咨询经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=专业顾问" target="_blank">专业顾问</a>
													<a href="/search/?txtKeyWord=咨询" target="_blank">咨询</a>
													<a href="/search/?txtKeyWord=招生顾问" target="_blank">招生顾问</a>
													<a href="/search/?txtKeyWord=课程顾问" target="_blank">课程顾问</a>
													<a href="/search/?txtKeyWord=调研员" target="_blank">调研员</a>
													<a href="/search/?txtKeyWord=市场专员" target="_blank">市场专员</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=教师">教师</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=教务">教务</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=校长" target="_blank">校长</a>
													<a href="/search/?txtKeyWord=园长" target="_blank">园长</a>
													<a href="/search/?txtKeyWord=教务管理" target="_blank">教务管理</a>
													<a href="/search/?txtKeyWord=教务人员" target="_blank">教务人员</a>
													<a href="/search/?txtKeyWord=班主任" target="_blank">班主任</a>
													<a href="/search/?txtKeyWord=辅导员" target="_blank">辅导员</a>
													<a href="/search/?txtKeyWord=中学教师" target="_blank">中学教师</a>
													<a href="/search/?txtKeyWord=小学教师" target="_blank">小学教师</a>
													<a href="/search/?txtKeyWord=幼教" target="_blank">幼教</a>
													<a href="/search/?txtKeyWord=早教" target="_blank">早教</a>
													<a href="/search/?txtKeyWord=职业技术教师" target="_blank">职业技术教师</a>
													<a href="/search/?txtKeyWord=家教" target="_blank">家教</a>
													<a href="/search/?txtKeyWord=兼职教师" target="_blank">兼职教师</a>
													<a href="/search/?txtKeyWord=英语教师" target="_blank">英语教师</a>
													<a href="/search/?txtKeyWord=音乐教师" target="_blank">音乐教师</a>
													<a href="/search/?txtKeyWord=美术教师" target="_blank">美术教师</a>
													<a href="/search/?txtKeyWord=舞蹈教师" target="_blank">舞蹈教师</a>
													<a href="/search/?txtKeyWord=体育老师" target="_blank">体育老师</a>
													<a href="/search/?txtKeyWord=教练" target="_blank">教练</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=培训" target="_blank">培训</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=培训讲师" target="_blank">培训讲师</a>
													<a href="/search/?txtKeyWord=培训助理" target="_blank">培训助理</a>
													<a href="/search/?txtKeyWord=学习管理师" target="_blank">学习管理师</a>
													<a href="/search/?txtKeyWord=培训经理" target="_blank">培训经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=其他专业服务" target="_blank">其他专业服务</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=外语翻译" target="_blank">外语翻译</a>
													<a href="/search/?txtKeyWord=猎头" target="_blank">猎头</a>
													<a href="/search/?txtKeyWord=人才中介" target="_blank">人才中介</a>
													<a href="/search/?txtKeyWord=律师" target="_blank">律师</a>
													<a href="/search/?txtKeyWord=法务咨询" target="_blank">法务咨询</a>
													<a href="/search/?txtKeyWord=财务" target="_blank">财务</a>
													<a href="/search/?txtKeyWord=会计" target="_blank">会计</a>
													<a href="/search/?txtKeyWord=心理咨询师" target="_blank">心理咨询师</a>
													<a href="/search/?txtKeyWord=企业管理咨询师" target="_blank">企业管理咨询师</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon11"></i>
									<p class="lnk">能源、化工、服装、环保</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=能源">能源</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=电力">电力</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=矿产">矿产</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=电力" target="_blank">电力</a>
													<a href="/search/?txtKeyWord=电气工程师" target="_blank">电气工程师</a>
													<a href="/search/?txtKeyWord=电气维修技术员" target="_blank">电气维修技术员</a>
													<a href="/search/?txtKeyWord=水利" target="_blank">水利</a>
													<a href="/search/?txtKeyWord=水电工程师" target="_blank">水电工程师</a>
													<a href="/search/?txtKeyWord=制冷" target="_blank">制冷</a>
													<a href="/search/?txtKeyWord=暖通工程师" target="_blank">暖通工程师</a>
													<a href="/search/?txtKeyWord=石油" target="_blank">石油</a>
													<a href="/search/?txtKeyWord=天然气" target="_blank">天然气</a>
													<a href="/search/?txtKeyWord=煤炭技术人员" target="_blank">煤炭技术人员</a>
													<a href="/search/?txtKeyWord=新能源工程师" target="_blank">新能源工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=化工" target="_blank">化工</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=化工工程师" target="_blank">化工工程师</a>
													<a href="/search/?txtKeyWord=化工实验室研究员" target="_blank">化工实验室研究员</a>
													<a href="/search/?txtKeyWord=涂料研发工程师" target="_blank">涂料研发工程师</a>
													<a href="/search/?txtKeyWord=食品" target="_blank">食品</a>
													<a href="/search/?txtKeyWord=饮料研发" target="_blank">饮料研发</a>
													<a href="/search/?txtKeyWord=安全工程师" target="_blank">安全工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=服装">服装</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=纺织">纺织</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=服装设计师" target="_blank">服装设计师</a>
													<a href="/search/?txtKeyWord=工艺师" target="_blank">工艺师</a>
													<a href="/search/?txtKeyWord=打样" target="_blank">打样</a>
													<a href="/search/?txtKeyWord=制版" target="_blank">制版</a>
													<a href="/search/?txtKeyWord=电脑放码员" target="_blank">电脑放码员</a>
													<a href="/search/?txtKeyWord=质量管理" target="_blank">质量管理</a>
													<a href="/search/?txtKeyWord=裁床" target="_blank">裁床</a>
													<a href="/search/?txtKeyWord=缝纫工" target="_blank">缝纫工</a>
													<a href="/search/?txtKeyWord=纺织" target="_blank">纺织</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=环保" target="_blank">环保</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=环保工程师" target="_blank">环保工程师</a>
													<a href="/search/?txtKeyWord=污水处理工程师" target="_blank">污水处理工程师</a>
													<a href="/search/?txtKeyWord=环评工程师" target="_blank">环评工程师</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon12"></i>
									<p class="lnk" style="letter-spacing:-1px;">进出口、采购、物流、司机</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=进出口" target="_blank">进出口</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=外贸经理" target="_blank">外贸经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=外贸业务员" target="_blank">外贸业务员</a>
													<a href="/search/?txtKeyWord=跟单员" target="_blank">跟单员</a>
													<a href="/search/?txtKeyWord=单证员" target="_blank">单证员</a>
													<a href="/search/?txtKeyWord=报关" target="_blank">报关</a>
													<a href="/search/?txtKeyWord=报检员" target="_blank">报检员</a>
													<a href="/search/?txtKeyWord=进出口" target="_blank">进出口</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=采购" target="_blank">采购</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=采购经理" target="_blank">采购经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=采购员" target="_blank">采购员</a>
													<a href="/search/?txtKeyWord=买手" target="_blank">买手</a>
													<a href="/search/?txtKeyWord=供应商开发" target="_blank">供应商开发</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a target="_blank" href="/search/?txtKeyWord=物流">物流</a>
													/
													<a target="_blank" href="/search/?txtKeyWord=仓储">仓储</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=物流经理" target="_blank">物流经理</a>
													<a href="/search/?txtKeyWord=主管" target="_blank">主管</a>
													<a href="/search/?txtKeyWord=物流专员" target="_blank">物流专员</a>
													<a href="/search/?txtKeyWord=快递员" target="_blank">快递员</a>
													<a href="/search/?txtKeyWord=配货员" target="_blank">配货员</a>
													<a href="/search/?txtKeyWord=分拣员" target="_blank">分拣员</a>
													<a href="/search/?txtKeyWord=供应链管理" target="_blank">供应链管理</a>
													<a href="/search/?txtKeyWord=调度员" target="_blank">调度员</a>
													<a href="/search/?txtKeyWord=货运代理业务" target="_blank">货运代理业务</a>
													<a href="/search/?txtKeyWord=仓库主管" target="_blank">仓库主管</a>
													<a href="/search/?txtKeyWord=经理" target="_blank">经理</a>
													<a href="/search/?txtKeyWord=仓库管理员" target="_blank">仓库管理员</a>
													<a href="/search/?txtKeyWord=搬运工" target="_blank">搬运工</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=司机" target="_blank">司机</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=商务司机" target="_blank">商务司机</a>
													<a href="/search/?txtKeyWord=客运司机" target="_blank">客运司机</a>
													<a href="/search/?txtKeyWord=货运司机" target="_blank">货运司机</a>
													<a href="/search/?txtKeyWord=出租车司机" target="_blank">出租车司机</a>
													<a href="/search/?txtKeyWord=特种车司机" target="_blank">特种车司机</a>
													<a href="/search/?txtKeyWord=驾校教练" target="_blank">驾校教练</a>
													<a href="/search/?txtKeyWord=陪练" target="_blank">陪练</a>
													<a href="/search/?txtKeyWord=代驾" target="_blank">代驾</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<a class="lstLnk" href="javascript:void(0)">
									<i class="newIcon newIcon13"></i>
									<p class="lnk">农林牧渔、其他</p>
									<b class="jpFntWes arr"></b>
								</a>
								<div class="posBox" style="display: none;">
									<div class="posJobSort">
										<div class="l">
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=农林牧渔" target="_blank">农林牧渔</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=场长" target="_blank">场长</a>
													<a href="/search/?txtKeyWord=农艺师" target="_blank">农艺师</a>
													<a href="/search/?txtKeyWord=饲养员" target="_blank">饲养员</a>
													<a href="/search/?txtKeyWord=兽医" target="_blank">兽医</a>
												</dd>
												<div class="clear"></div>
											</dl>
											<dl>
												<dt>
													<a href="/search/?txtKeyWord=其他" target="_blank">其他</a>
												</dt>
												<dd>
													<a href="/search/?txtKeyWord=科研人员" target="_blank">科研人员</a>
													<a href="/search/?txtKeyWord=储备干部" target="_blank">储备干部</a>
													<a href="/search/?txtKeyWord=兼职" target="_blank">兼职</a>
													<a href="/search/?txtKeyWord=实习生" target="_blank">实习生</a>
												</dd>
												<div class="clear"></div>
											</dl>
										</div>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>

			<ul class="navList">
				<li><a href="/">首页</a></li>
				<li><a href="/search/">找工作</a></li>
				<li><a href="/company/resume/search.html">找人才</a></li>
				<li><a href="/person/">求职管理</a></li>
				<li><a href="/companyjob.html">最新招聘</a></li>
				<li><a href="http://www.{ROOT_DOMAIN}/guide/">职场指南</a></li>
				<li><a href="http://www.{ROOT_DOMAIN}/hrnews/">HR资讯</a></li>
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>

	<div class="mainCon">
		<!-- banner广告 -->
		<div class="banner">
			<div id="focus">
				<img src="http://cdn.597.com/img/common/newbanner02.jpg" alt="" />
				<img src="http://cdn.597.com/img/common/newbanner01.jpg" alt="" style="display:none;" />
			</div>
			<ul id="focusArr">
				<li class="cu">1</li>
				<li>2</li>
			</ul>
		</div>
		<!-- 登陆框 -->
		<div class="loginBox" >
			<div id="notLoginStatus">
				<ul id="loginPanel">
					<li class="cu">个人登录</li>
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
							<label for="perAutoLogin">
								<input type="checkbox" id="perAutoLogin" name="perAutoLogin"/>
								自动登录
							</label>
						</span>
						<input type="button" id="perBtn" class="btn" value="登录" />
					</form>
					<p><a href="/person/findpassword.htm" class="forget aGray2">忘记密码？</a>还没有账号，<a href="/person/register.html">立即注册</a></p>
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
							<label for="comAutoLogin">
								<input type="checkbox" id="comAutoLogin" name="comAutoLogin"/>
								自动登录
							</label>
						</span>
						<input type="button" id="comBtn" class="btn" value="登录" />
					</form>
					<p><a href="tencent://message/?Menu=yes&amp;amp;uin=938066631&amp;amp;Service=58&amp;amp;SigT=A7F6FEA02730C98835722A8AC9DC8C615D84ACB35FB95C21FCD96C5A8E87670C48230BDEB91DEEF6E4424E9E87B7B2156956457B823296358B88BFE049EE79E506FE35C59DBEC19583765D22E339C27EAE729A29EE0E0ADEFC44E245BF986572A74455C0F0F8CEC5EB4FB812434F5CDCD83D0A7F705045B6&amp;amp;SigU=30E5D5233A443AB2004ADD98B7D4DE306411157356E49A3B71E80C90F5312CE7D795D7761D5AB663C1B7403C4876BBF696817F5FF01D1177C086510304A5C0F2F033F138FDFD5152" target="_blank" class="forget aGray2">忘记密码？</a>还没有账号，<a href="/company/register.html">立即注册</a></p>
				</div>
			</div>	
			<div class="logined" style="display:none;">
				<div id="perStatus" style="display:none;">
					<div>您好，<span id="user_menu_name" ></span></div>
					<div style="margin:15px 0 20px;"><a href="/person/logout.html" class="exit">退出</a><a href="/person/resume" class="fb aGray">管理我的简历</a></div>
					<!--
					<div style="font:12px 宋体;margin-bottom:15px;">
						您当前共收到<span class="green" style="font:12px arial">(0)</span>个面试邀请。
					</div>
					-->
					<div><a href="/person/" class="enter">进入我的会员中心</a></div>
				</div>
				<div id="comStatus" style="display:none;">
					<div>您好，<span id="com_menu_name" ></span></div>
					<div style="margin:15px 0 20px;"><a href="/company/logout.html" class="exit">退出</a><a href="/company/resume/apply.html" class="fb aGray">管理收到的简历</a></div>
					<!--
					<div style="font:12px 宋体;margin-bottom:15px;">
						您当前共有<span class="green" style="font:12px arial">(0)</span>份未读简历。
					</div>
					-->
					<div><a href="/company/" class="enter">进入我的企业中心</a></div>
				</div>
			</div>
		</div>
		<!-- 热门招聘 -->
		<div class="mainTabs">
			<h2 >
				<span class="cu"><a href="#">热门招聘</a></span>
				<span><a href="#">最新职位</a></span>
				<span><a href="#">最新兼职</a></span>
				<span><a href="#">最新实习</a></span>
				<span ><a href="#" style="border-right:none;">最新资讯</a></span>
			</h2>
			<div class="clear"></div>
			<div class="tabContents">
				<div class="tabCon">
					<ul class="tabUl">
						<!--{loop $ad10List $l}-->
						<li><a href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/" class="aGray" title="{$l['cname']}" target="_blank">{$l['cname']}</a></li>
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
						<li><a href="http://www.{ROOT_DOMAIN}/guide/detail-{$l['detail_id']}.html" class="aGray" target='_blank'>{$l['detail_title']}</a></li>
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
				<li><a href="/search/?txtKeyWord=销售" target="_blank" >销售</a></li>
				<li><a href="/search/?txtKeyWord=客服" target="_blank" >客服</a></li>
				<li><a href="/search/?txtKeyWord=营业员" target="_blank">营业员</a></li>
				<li><a href="/search/?txtKeyWord=前台" target="_blank" >前台</a></li>
				<li><a href="/search/?txtKeyWord=会计" target="_blank" >会计</a></li>
				<li><a href="/search/?txtKeyWord=淘宝" target="_blank">淘宝</a></li>
				<li><a href="/search/?txtKeyWord=服务员" target="_blank">服务员</a></li>
				<li><a href="/search/?txtKeyWord=库管" target="_blank" >库管</a></li>
				<li><a href="/search/?txtKeyWord=司机" target="_blank">司机</a></li>
				<li><a href="/search/?txtKeyWord=招商" target="_blank" >招商</a></li>
				<li><a href="/search/?txtKeyWord=普工" target="_blank" >普工</a></li>
				<li><a href="/search/?txtKeyWord=采购" target="_blank" >采购</a></li>
				<li><a href="/search/?txtKeyWord=质检员" target="_blank">质检员</a></li>
				<li><a href="/search/?txtKeyWord=保安" target="_blank" >保安</a></li>
				<li><a href="/search/?txtKeyWord=施工员" target="_blank">施工员</a></li>
				<li><a href="/search/?txtKeyWord=电工" target="_blank">电工</a></li>
				<li><a href="/search/?txtKeyWord=外贸" target="_blank">外贸</a></li>
				<li><a href="/search/?txtKeyWord=跟单" target="_blank">跟单</a></li>
				<li><a href="/search/?txtKeyWord=人力资源" target="_blank">人力资源</a></li>
				<li><a href="/search/?txtKeyWord=财务" target="_blank">财务</a></li>
				<li><a href="/search/?txtKeyWord=企划" target="_blank">企划</a></li>
				<li><a href="/search/?txtKeyWord=钟点工" target="_blank">钟点工</a></li>
				<li><a href="/search/?txtKeyWord=UI设计" target="_blank">UI设计</a></li>
				<li><a href="/search/?txtKeyWord=美工" target="_blank">美工</a></li>
				<li><a href="/search/?txtKeyWord=java" target="_blank">java</a></li>
				<li><a href="/search/?txtKeyWord=php" target="_blank" >php</a></li>
				<li><a href="/search/?txtKeyWord=c" target="_blank" >c</a></li>
				<li><a href="/search/?txtKeyWord=网页设计" target="_blank">网页设计</a></li>
				<li><a href="/search/?txtKeyWord=网络编辑" target="_blank">网络编辑</a></li>
				<li><a href="/search/?txtKeyWord=文案策划" target="_blank">文案策划</a></li>
				<li><a href="/search/?txtKeyWord=机械设计" target="_blank">机械设计</a></li>
				<li><a href="/search/?txtKeyWord=模具设计" target="_blank">模具设计</a></li>
				<li><a href="/search/?txtKeyWord=建筑设计" target="_blank">建筑设计</a></li>
				<li><a href="/search/?txtKeyWord=行政专员" target="_blank">行政专员</a></li>
				<li><a href="/search/?txtKeyWord=平面设计" target="_blank">平面设计</a></li>	
			</ul>
		</div>
		<div class="jobR">
			<h3><span>福利筛选</span></h3>
			<ul>
				<li><a href="/search/?txtKeyWord=住房公积金">住房公积金 </a></li>
				<li class="mid"><a href="/search/?txtKeyWord=五险">五险 </a></li>
				<li><a href="/search/?txtKeyWord=周末双休">周末双休 </a></li>
				<li><a href="/search/?txtKeyWord=包吃包住">包吃包住 </a></li>
				<li class="mid"><a href="/search/?txtKeyWord=包吃">包吃 </a></li>
				<li><a href="/search/?txtKeyWord=包住">包住 </a></li>
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
			<li><a href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/" class="aGray" title="{$l['cname']}" target="_blank">{$l['cname']}</a></li>
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
				<li ><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/<!--{/if}-->" title="{$l['cname']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/adv/{$l['pic']}"  alt="{$l['cname']}" /></a></li>
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
				<li><a href="<!--{if $l['url']}-->{$l['url']}<!--{else}-->http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/<!--{/if}-->" title="{$l['cname']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/adv/{$l['pic']}"  alt="{$l['cname']}" /></a></li>
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
				<a href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/" class="aGray" title="{$l['cname']}" target="_blank">{$l['cname']}</a>
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
					<li><a href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/" title="{$l['cname']}" target="_blank"><img src="http://pic.{ROOT_DOMAIN}/adv/{$l['pic']}"  alt="{$l['cname']}" /></a></li>
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
			<h3 class="hd2"><a href="/search/" class="more">更多&gt;&gt;</a><span>最新企业招聘</span></h3>
			<ul>
				<!--{loop $coms $com}-->
				<li><a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/" title="{$com[cname]}" class="aGray" target="_blank">{$com[cname]}</a></li>
				<!--{/loop}-->
			</ul>
			<div class="clear"></div>
		</div>
		<!--{/if}-->

		<!-- 最新职位招聘信息 -->
		<!--{if $jobs}-->
		<div class="hot newJobs">
			<h3 class="hd2"><a href="/search/" class="more" target="_blank">更多&gt;&gt;</a><span>最新职位信息</span></h3>
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
			<h3 class="hd2"><a href="/search/" class="more" target="_blank">更多&gt;&gt;</a><span>{$domainInfo['region_name_short']}行业招聘</span></h3>
			<div class="hyTitle">
				<!--{loop $allIndustry $l}-->
				<a href="#trade{$l['industryClassId']}">{$l['industryClassName']}</a>
				<!--{/loop}-->			
			</div>
			<!--{loop $industryCompany $k $list}-->
			<div class="jobModel" id="trade{$k}">
				<h4><!--{if $domainInfo['region_id']==1100}--><a class="aGray" href="javascript:void(0);" target="_blank">{$list['name']}</a><!--{else}--><a href="/hangye-{$list['id']}/" class="more" target="_blank">More&gt;&gt;</a><a class="aGray" href="/hangye-{$list['id']}/" target="_blank">{$list['name']}</a><!--{/if}--></h4>
				<ul>
				<!--{loop $list[0] $lll}-->
					<li>
						<a href="http://www.{ROOT_DOMAIN}/com-{$lll['_cid']}/" title="{$lll['cname']}" class="aGray" target="_blank">{$lll['cname']}</a>
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
	<!--#include virtual="/templates/default/footer.htm" -->

	<script type="text/javascript">
		var currentCity="<!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}-->";
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
		$('#currentCity').html(currentCity);
		$('#qqLoginTop').click(function(){
			qqBox=$.showModal("http://api.597.com/qq/login.api", {title:'QQ登录',contentType : 'iframe',width:'800', height:'410'});
		});
		$('#sinaLoginTop').click(function(){
			sinaBox=$.showModal("http://api.597.com/weibo/login.api", {title:'微博登录',contentType : 'iframe',width:'800', height:'410'});
		});
		dateFormate(".dateFormate",{$time});
	</script>

</body>
</html>