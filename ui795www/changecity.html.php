<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>597人才网-切换城市</title>
	<link rel="shortcut icon" href="http://cdn.597.com/favicon.ico" />
	<!--[if lt IE9]  -->
	<script src="http://cdn.597.com/js/html5.js?v=20140722"></script>
	<!-- [endif] -->
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/597index.css" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/jquery-1.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.cookie.js?v=20140312"></script>
	<script type="text/javascript" src="http://cdn.597.com/js/index.js"></script>
	<style>
		.area { width: 1140px; margin: 20px auto; border: 1px solid #ddd; font:14px 微软雅黑;}
		.area .hotCity a { margin-right: 30px;}
		.area a { color: #333;}
		.area .goto a{ font-size:22px; }
		.area .goto span {font-size: 14px; color: #666; margin-left: 5px;}
		.area a:hover { color: #0af; text-decoration: underline;}
		.area div { padding: 30px 40px; border-bottom: 1px solid #ddd;}
		.mb20 {margin-bottom: 20px;}
		.area .btn { padding: 0 8px; cursor: pointer; color: #444; background: #eee; border: 1px solid #ccc;}
		.area select { margin-right: 5px;}
		.area strong { color:#DE2D25; }
		.area .text { height: 25px; line-height: 25px; border: 1px solid #ddd; padding-left: 5px;}
		.area dl { position: relative; padding: 0 0 30px 0; }
		/*.area dl:hover { background: #f2f2f2;}*/
		/*.area dl:hover dt { background: #E45952; color: #fff; border: 1px solid #E45952;}*/
		/*.area dl dt {height: 30px;float: left;  text-align: center; line-height: 30px; position: absolute; left: 35px; top: 32px; color: #de2d25; font-weight: bold;}*/
		.area dl  dd { padding:20px 0 20px 40px; border-bottom:1px dashed #ddd;}
		.area dl  dd:hover {background: #f2f2f2;}
		.area dl  a.red {color:#DE2D25;}
		.area dl  a { display: inline-block; line-height: 30px; height: 30px; margin-right: 30px; }
	</style>
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<ul id="topLoginStatus">
				<li class="top-phone"> <i class="jpFntWes ico"></i>
					<a href="/mobile.html" target="_blank" style="color:#444;font-weight:normal;">手机找工作</a>
					<span class="line">|</span>
				</li>
				<li class="top-wx" >
					<img src="http://cdn.597.com/img/common/weixinLogo.jpg" alt="" class="wxIco" />
					微信 <span class="line">|</span>
					<img src="http://cdn.597.com/img/common/wxCode.png" class="wxImg" />
				</li>
				<li>
					<a href="/person/register.htm" >免费注册</a>
					<span class="line">|</span>
				</li>
				<li>
					<a href="/person/login.html" >求职者登录</a>
					<span class="line">|</span>
				</li>
				<li>
					<a href="/company/login.html" >企业登录</a>
				</li>
			</ul>
			<ul id="topPerLogin" style="display:none;">
				<li>
					您好,
					<a href="/person/">
						<span id="topUsername" class=" fb"></span>
					</a>
					<span class="line">|</span>
				</li>
				<li>
					<a href="/person/logout.html" >退出</a>
				</li>
			</ul>
			<ul id="topComLogin" style="display:none;">
				<li>
					您好,
					<a href="/company/">
						<span id="topUsername" class=" fb"></span>
					</a>
					<span class="line">|</span>
				</li>
				<li>
					<a href="/company/logout.html" >退出</a>
				</li>
			</ul>
			<div class="wel">
				<a href="/"><!--{if $domainInfo['region_id']==1}-->597<!--{else}-->{$domainInfo['region_name_short']}<!--{/if}-->招聘网</a>
				-
				<a href="/zhaopin/"><!--{if $domainInfo['region_id']==1}-->597<!--{else}-->{$domainInfo['region_name_short']}<!--{/if}-->找工作</a>
				首选
			</div>
		</div>
		<div class="clear"></div>
	</div>


	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo">
			<a href="/">
				<img src="http://cdn.597.com/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" />
			</a>
		</div>
		<!--
		<div class="changeCity"> <strong><span id="currentCity"></span></strong>
			<br />
			<a href="/changecity.html"  id="showCitys">
				切换城市 <i class="jpFntWes searchType"></i>
			</a>
		</div>
		-->
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
					<a href="/{$k}/" <!--{if $k=='xiaoshou'}-->
						style="color:red;"
						<!--{else}-->
						class="aGray"
						<!--{/if}-->target="_blank">{$l}</a>
					<!--{/loop}-->
				</p>
			</span>
			<!--<a class="adSearch" href="/jobSearch.html" style="color:#999;" target="_blank" style="display:none;">高级搜索</a>-->
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
			<ul class="navList">
				<li>
					<a href="/"  style="background:#C51504;">首页</a>
				</li>
				<li>
					<a href="/zhaopin/">找工作</a>
				</li>
				<li>
					<a href="/company/resume/search.html">找人才</a>
				</li>
				<li>
					<a href="/person/">求职管理</a>
				</li>
				<li>
					<a href="/companyjob.html" >最新招聘</a>
				</li>
				<li>
					<a href="/qyzf/" >597专访</a>
				</li>
				<li>
					<a href="/about/delegate/delegate.html" target="_blank" >高端猎头</a>
				</li>
				<li>
					<a href="/about/delegate/" target="_blank" >人事代理</a>
				</li>
				<!--
				<li>
					<a href="/guide/">职场指南</a>
				</li>
				<li>
					<a href="/hrnews/">HR资讯</a>
				</li>-->
			</ul>
		</div>

		<div class="clear"></div>
	</div>

	<div class="area">
		<div >

			<!-- <p class="goto mb20">
			猜你想要进：
			<a href="#" >厦门市</a>
			<span>&gt;&gt;</span>
		</p>
		-->
		<!-- <p class="hotCity"> <strong>热门城市：</strong>
		<a href="http://bj.597.com" >北京</a>
		<a href="http://sh.597.com" >上海</a>
		<a href="http://cq.597.com" >重庆</a>
		<a href="http://tj.597.com" >天津</a>
		<a href="http://sz.597.com" >深圳</a>
		<a href="http://xm.597.com" >厦门</a>
		<a href="http://gz.597.com" >广州</a>
		<a href="http://hz.597.com" >杭州</a>
		<a href="http://su.597.com" >苏州</a>
	</p>
	-->
	<p class="hotCity">
		<strong>热门城市：</strong>
		<a href="http://bj.{ROOT_DOMAIN}">北京</a>
		<a href="http://xm.{ROOT_DOMAIN}">厦门</a>
		<a href="http://qz.{ROOT_DOMAIN}">泉州</a>
		<a href="http://np.{ROOT_DOMAIN}">南平</a>
		<a href='http://fz.{ROOT_DOMAIN}'>福州</a>
		<a href='http://zz.{ROOT_DOMAIN}'>漳州</a>
		<a href='http://pt.{ROOT_DOMAIN}'>莆田</a>
		<a href='http://ly.{ROOT_DOMAIN}'>龙岩</a>
		<a href='http://sm.{ROOT_DOMAIN}'>三明</a>
		<a href='http://www.nd597.com'>宁德</a>
		<a href="http://www.jh597.com">金华</a>
		<a href="http://www.yw597.com">义乌</a>
		<a href='http://xiangyang.{ROOT_DOMAIN}'>襄阳</a>
	</p>
</div>

<div class="cities" id="cities" style="padding: 0 0 30px;">
	<dl>
		<dd>
			<a href=' http://xm.{ROOT_DOMAIN}'  class="red fb">厦门</a>

			<a  href=' http://siming.{ROOT_DOMAIN}'>思明</a>

			<a  href=' http://huli.{ROOT_DOMAIN}'>湖里</a>

			<a  href=' http://tongan.{ROOT_DOMAIN}'>同安</a>

			<a  href=' http://haicang.{ROOT_DOMAIN}'>海沧</a>

			<a  href=' http://jimei.{ROOT_DOMAIN}'>集美</a>

			<a  href=' http://xiangan.{ROOT_DOMAIN}'>翔安</a>
		</dd>
		<dd>

			<a href=' http://qz.{ROOT_DOMAIN}'  class="red fb">泉州</a>

			<a  href=' http://jinjiang.{ROOT_DOMAIN}'>晋江</a>

			<a  href=' http://shishi.{ROOT_DOMAIN}'>石狮</a>

			<a  href=' http://nanan.{ROOT_DOMAIN}'>南安</a>

			<a  href=' http://huian.{ROOT_DOMAIN}'>惠安</a>

			<a  href=' http://quangang.{ROOT_DOMAIN}'>泉港</a>

			<a  href=' http://anxi.{ROOT_DOMAIN}'>安溪</a>

			<a  href=' http://dehua.{ROOT_DOMAIN}'>德化</a>

			<a  href=' http://fengze.{ROOT_DOMAIN}'>丰泽</a>

			<a  href=' http://qzlc.{ROOT_DOMAIN}'>鲤城</a>

			<a  href=' http://luojiang.{ROOT_DOMAIN}'>洛江</a>

			<a  href=' http://yongchun.{ROOT_DOMAIN}'>永春</a>

			<a  href=' http://tstzq.{ROOT_DOMAIN}'>台商投资区</a>

			<a  href=' http://jjjskfq.{ROOT_DOMAIN}'>经济技术开发区</a>
		</dd>
		<dd>

			<a href=' http://np.{ROOT_DOMAIN}'  class="red fb">南平</a>

			<a  href=' http://jianou.{ROOT_DOMAIN}'>建瓯</a>

			<a  href=' http://jianyang.{ROOT_DOMAIN}'>建阳</a>

			<a  href=' http://wuyishan.{ROOT_DOMAIN}'>武夷山</a>

			<a  href=' http://shaowu.{ROOT_DOMAIN}'>邵武</a>

			<a  href=' http://pucheng.{ROOT_DOMAIN}'>浦城</a>

			<a  href=' http://guangze.{ROOT_DOMAIN}'>光泽</a>

			<a  href=' http://zhenghe.{ROOT_DOMAIN}'>政和</a>

			<a  href=' http://shunchang.{ROOT_DOMAIN}'>顺昌</a>

			<a  href=' http://songxi.{ROOT_DOMAIN}'>松溪</a>

			<a  href=' http://yanping.{ROOT_DOMAIN}'>延平</a>
		</dd>
		<dd>
			<a href='http://fz.{ROOT_DOMAIN}' class="red fb">福州</a>

			<a  href='http://fuqing.{ROOT_DOMAIN}'>福清</a>

			<a  href='http://changle.{ROOT_DOMAIN}'>长乐</a>

			<a  href='http://pingtan.{ROOT_DOMAIN}'>平潭</a>

			<a  href='http://luoyuan.{ROOT_DOMAIN}'>罗源</a>

			<a  href='http://lianjiang.{ROOT_DOMAIN}'>连江</a>

			<a  href='http://fzgl.{ROOT_DOMAIN}'>鼓楼</a>

			<a  href='http://fzja.{ROOT_DOMAIN}'>晋安</a>

			<a  href='http://fzcs.{ROOT_DOMAIN}'>仓山</a>

			<a  href='http://fztj.{ROOT_DOMAIN}'>台江</a>

			<a  href='http://fzmw.{ROOT_DOMAIN}'>马尾</a>

			<a  href='http://minhou.{ROOT_DOMAIN}'>闽侯</a>

			<a  href='http://yongtai.{ROOT_DOMAIN}'>永泰</a>

			<a  href='http://minqing.{ROOT_DOMAIN}'>闽清</a>
		</dd>
		<dd>

			<a href='http://zz.{ROOT_DOMAIN}'  class="red fb">漳州</a>

			<a  href='http://changtai.{ROOT_DOMAIN}'>长泰</a>

			<a  href='http://zhangpu.{ROOT_DOMAIN}'>漳浦</a>

			<a  href='http://zzxc.{ROOT_DOMAIN}'>芗城</a>

			<a  href='http://longwen.{ROOT_DOMAIN}'>龙文</a>

			<a  href='http://longhai.{ROOT_DOMAIN}'>龙海</a>

			<a  href='http://yunxiao.{ROOT_DOMAIN}'>云霄</a>

			<a  href='http://zhaoan.{ROOT_DOMAIN}'>诏安</a>

			<a  href='http://zzds.{ROOT_DOMAIN}'>东山</a>

			<a  href='http://nanjing.{ROOT_DOMAIN}'>南靖</a>

			<a  href='http://pinghe.{ROOT_DOMAIN}'>平和</a>

			<a  href='http://huaan.{ROOT_DOMAIN}'>华安</a>

			<a  href='http://jiaomei.{ROOT_DOMAIN}'>台商投资区</a>

			<a  href='http://zhaoshangju.{ROOT_DOMAIN}'>漳州开发区</a>
		</dd>
		<dd>

			<a href='http://pt.{ROOT_DOMAIN}'  class="red fb">莆田</a>

			<a  href='http://chengxiang.{ROOT_DOMAIN}'>城厢</a>

			<a  href='http://pthj.{ROOT_DOMAIN}'>涵江</a>

			<a  href='http://ptlc.{ROOT_DOMAIN}'>荔城</a>

			<a  href='http://ptxy.{ROOT_DOMAIN}'>秀屿</a>

			<a  href='http://xianyou.{ROOT_DOMAIN}'>仙游</a>
		</dd>
		<dd>
			<a href='http://ly.{ROOT_DOMAIN}'  class="red fb">龙岩</a>

			<a  href='http://xinluo.{ROOT_DOMAIN}'>新罗</a>

			<a  href='http://zhangping.{ROOT_DOMAIN}'>漳平</a>

			<a  href='http://changting.{ROOT_DOMAIN}'>长汀</a>

			<a  href='http://yongding.{ROOT_DOMAIN}'>永定</a>

			<a  href='http://shanghang.{ROOT_DOMAIN}'>上杭</a>

			<a  href='http://wuping.{ROOT_DOMAIN}'>武平</a>

			<a  href='http://liancheng.{ROOT_DOMAIN}'>连城</a>
		</dd>
		<dd>

			<a href='http://sm.{ROOT_DOMAIN}' class="red fb">三明</a>

			<a href='http://meilie.{ROOT_DOMAIN}'>梅列</a>
			<a href='http://sanyuan.{ROOT_DOMAIN}'>三元</a>
			<a href='http://yongan.{ROOT_DOMAIN}'>永安</a>
			<a href='http://shaxian.{ROOT_DOMAIN}'>沙县</a>
			<a href='http://datian.{ROOT_DOMAIN}'>大田</a>
			<a href='http://jiangle.{ROOT_DOMAIN}'>将乐</a>
			<a href='http://taining.{ROOT_DOMAIN}'>泰宁</a>
			<a href='http://jianning.{ROOT_DOMAIN}'>建宁</a>
			<a href='http://youxi.{ROOT_DOMAIN}'>尤溪</a>
			<a href='http://mingxi.{ROOT_DOMAIN}'>明溪</a>
			<a href='http://qingliu.{ROOT_DOMAIN}'>清流</a>
			<a href='http://ninghua.{ROOT_DOMAIN}'>宁化</a>
		</dd>
		<dd>

			<a href='http://www.nd597.com'  class="red fb">宁德</a>

			<a  href='http://jc.nd597.com'>蕉城</a>

			<a  href='http://www.fa597.com'>福安</a>

			<a  href='http://www.fd597.com'>福鼎</a>

			<a  href='http://www.xp597.com'>霞浦</a>

			<a  href='http://gt.nd597.com'>古田</a>

			<a  href='http://pn.nd597.com'>屏南</a>

			<a  href='http://sn.nd597.com'>寿宁</a>

			<a  href='http://zn.nd597.com'>周宁</a>

			<a  href='http://www.zr597.com'>柘荣</a>
		</dd>

		<dd>

			<a href='http://xiangyang.{ROOT_DOMAIN}'  class="red fb">襄阳</a>

			<a  href='http://xyxc.{ROOT_DOMAIN}'>襄城</a>

			<a  href='http://xyfc.{ROOT_DOMAIN}'>樊城</a>

			<a  href='http://xyxz.{ROOT_DOMAIN}'>襄州</a>

			<a  href='http://xygx.{ROOT_DOMAIN}'>襄阳高新技术产业开发区</a>

			<a  href='http://xyjj.{ROOT_DOMAIN}'>襄阳经济技术开发区</a>

			<a  href='http://yuliangzhou.{ROOT_DOMAIN}'>襄阳鱼梁洲经济开发区</a>

			<a  href='http://nanzhang.{ROOT_DOMAIN}'>南漳</a>

			<a  href='http://xygc.{ROOT_DOMAIN}'>谷城</a>

			<a  href='http://baokang.{ROOT_DOMAIN}'>保康</a>

			<a  href='http://laohekou.{ROOT_DOMAIN}'>老河口</a>

			<a  href='http://zaoyang.{ROOT_DOMAIN}'>枣阳</a>

			<a  href='http://xyyc.{ROOT_DOMAIN}'>宜城</a>

			<a  href='http://xyzhoubian.{ROOT_DOMAIN}'>襄阳周边</a>
		</dd>

		<dd id="province">
			 <a href='#'  class="red fb">其他省份</a>

			<a href="http://bj.597.com">北京</a>

			<a href="http://sh.597.com">上海</a>

			<a href="http://tj.597.com">天津</a>

			<a href="http://cq.597.com">重庆</a>

			<a href="http://gd.597.com">广东</a>

			<a href="http://sc.597.com">四川</a>

			<a href="http://zj.597.com">浙江</a>

			<a href="http://guizhou.597.com">贵州</a>

			<a href="http://ln.597.com">辽宁</a>

			<a href="http://js.597.com">江苏</a>

			<a href="http://fj.597.com">福建</a>

			<a href="http://hb.597.com">河北</a>

			<a href="http://henan.597.com">河南</a>

			<a href="http://jl.597.com">吉林</a>

			<a href="http://hlj.597.com">黑龙江</a>

			<a href="http://sd.597.com">山东</a>

			<a href="http://ah.597.com">安徽</a>

			<a href="http://gx.597.com">广西</a>

			<a href="http://hainan.597.com">海南</a>

			<a href="http://cq.597.com">重庆</a>

			<a href="http://sx.597.com">山西</a>

			<a href="http://nx.597.com">宁夏</a>

			<a href="http://gs.597.com">甘肃</a>

			<a href="http://shanxi.597.com">陕西</a>

			<a href="http://qh.597.com">青海</a>

			<a href="http://hubei.597.com">湖北</a>

			<a href="http://hn.597.com">湖南</a>

			<a href="http://jx.597.com">江西</a>

			<a href="http://yn.597.com">云南</a>

			<a href="http://xj.597.com">新疆</a>

			<a href="http://xizang.597.com">西藏</a>

			<a href="http://hk.597.com">香港</a>
		</dd>
		</dl>
	<p class="clear"></p>
</div>
<p class="clear"></p>
</div>
<!--{template footer}-->

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

	</script>

</body>
</html>