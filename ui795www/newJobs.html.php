<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta property="qc:admins" content="25424663065176375" />
	<title>{$domainInfo['region_name_short']}人才网_{$domainInfo['region_name_short']}招聘网_{$domainInfo['region_name_short']}人才网最新招聘信息_{$domainInfo['region_name_short']}人事人才网_{$domainInfo['region_name_short']}人才市场_{$domainInfo['region_name_short']}找工作-597{$domainInfo['region_name_short']}人才网</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<link rel="shortcut icon" href="http://cdn.597.com/favicon.ico" />
	<!--[if lt IE9]  -->
	<script src="http://cdn.597.com/js/html5.js?v=20140722"></script>
	<!-- [endif] -->
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/597index.css" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/jquery-1.js"></script>	
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.cookie.js?v=20140312"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/jquery.lazyload.js"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/index.js"></script>
	<style>
		.newJobs { border: 1px solid #ddd; margin: 20px auto; font-size: 14px;font:15px 微软雅黑;}
		.newJobs .hd2 { border-bottom: 1px solid #EE6C66; height: 45px;line-height: 45px;padding-left: 20px;}
		.newJobs .hd2 .infos { float: right; margin: 17px 20px 0 0; font:14px 宋体,arial; color: #666;}
		.newJobs .titles { border-bottom: 1px solid #ddd;padding: 0 25px; }
		.newJobs .titles li,.newJobs .jobList li{ float: left; width: 180px; overflow: hidden; text-overflow:ellipsis; white-space: nowrap; padding: 10px 0; margin-right: 20px;}
		.newJobs .titles li.time,.newJobs .jobList li.time { float: right; width: 150px;margin-right: 0;}
		.newJobs .titles li.comName,.newJobs .jobList li.comName { width: 300px;}
		.newJobs .listWrap { padding: 0 0 30px;}
		.newJobs .jobList { border-bottom: 1px solid #eee; ; padding: 5px 25px 25px;}
		.newJobs .jobList:hover {background: #FFF4F4;}
		.newJobs .jobList li {padding: 15px 0;}
		.newJobs .jobList p {clear: both; font-family: 宋体; line-height: 24px; color: #666;font-size: 12px;}
		.newJobs .jobList p span { margin-right: 40px;display: inline-block;}
	</style>
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<ul id="topLoginStatus">
				<li><a href="/person/register.htm" >免费注册</a> |</li>
				<li><a href="http://www1.597.com/person/login.html" >求职者登录</a> | </li> 
				<li><a href="http://www1.597.com/company/login.html" >企业登录</a> </li>				
			</ul>
			<ul id="topPerLogin" style="display:none;">
				<li>您好,<a href="/person/"><span id="topUsername" class=" fb"></span></a> | </li> 
				<li><a href="/person/logout.html" >退出</a>  </li>
			</ul>
			<ul id="topComLogin" style="display:none;">
				<li>您好,<a href="/company/"><span id="topUsername" class=" fb"></span></a> | </li> 
				<li><a href="/company/logout.html" >退出</a>  </li>
			</ul>
			<div class="wel">597人才网欢迎您！服务热线：4006-8060-597 </div>
		</div>
		<div class="clear"></div>
	</div>

	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo"><a href="/"><img src="http://cdn.597.com/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" /></a></div>
		<div class="changeCity">
			<strong><span id="currentCity"></span></strong><br />
			<a href="javascript:void(0);"  id="showCitys">切换城市 <i class="jpFntWes searchType"></i></a>
			<div class="cityMenu" id="cityMenu">
				<ul class="cityL">
					<li>
						<em class="fb">直辖市</em>
						<a href="http://bj.597.com" >北京</a>
						<a href="" >上海</a>
						<a href="http://cq.597.com" >重庆</a>
						<a href="http://tj.597.com" >天津</a>
					</li>
					<li> <strong>A</strong>
						<em class="fb">安徽省</em>
						<a href="http://hf.597.com">合肥</a>
						<a href="http://wuhu.597.com">芜湖</a>
						<a href="http://anqing.597.com">安庆</a>
						<a href="http://bengbu.597.com">蚌埠</a>
						<a href="http://tongling.597.com/">铜陵</a>
						<a href="http://la.597.com/">六安</a>
						<a href="http://ch.597.com/">巢湖</a>
						<a href="http://chuzhou.597.com/">滁州</a>
						<a href="http://mas.597.com/">马鞍山</a>
					</li>
					<li> <strong>F</strong>
						<em class="fb">福建省</em>
						<a href="http://www.fz597.com/">福州</a>
						<a href="http://xm.597.com/">厦门</a>
						<a href="http://www.597rcw.com/">龙岩</a>
						<a href="http://np.597.com/">南平</a>
						<a href="http://qz.597.com/">泉州</a>
						<a href="http://www.sm597.com/">三明</a>
						<a href="http://www.zz597.com/">漳州</a>
						<a href="http://www.nd597.com/">宁德</a>
					</li>
					<li>
						<strong>G</strong>
						<em class="fb">广西省</em>
						<a href="http://nn.597.com/">南宁</a>
						<a href="http://gl.597.com/">桂林</a>
						<a href="">柳州</a>
					</li>
					<li>
						<em class="fb">广东省</em>
						<a href="http://gz.597.com/">广州</a>
						<a href="http://huizhou.597.com/">惠州</a>
						<a href="http://st.597.com">汕头</a>
						<a href="http://zs.597.com">中山</a>
						<a href="http://fs.597.com">佛山</a>
						<a href="http://sz.597.com">深圳</a>
						<a href="http://zh.597.com">珠海</a>
						<a href="http://jm.597.com">江门</a>
						<a href="http://dg.597.com" >东莞</a>
						<a href="http://sw.597.com">汕尾</a>
						<a href="http://jy.597.com">揭阳</a>
						<a href="http://mz.597.com">梅州</a>
						<a href="http://yj.597.com">阳江</a>
						<a href="http://zq.597.com">肇庆</a>
					</li>
					<li>
						<em class="fb">甘肃省</em>
						<a href="http://lz.597.com">兰州</a>
					</li>
					<li>
						<em class="fb">贵州省</em>
						<a href="http://gy.597.com">贵阳</a>
					</li>
					<li>
						<strong>H</strong>
						<em class="fb">海南省</em>
						<a href="http://haikou.597.com">海口</a>
						<a href="http://sanya.597.com">三亚</a>
					</li>
					<li>
						<em class="fb">河北省</em>
						<a href="http://sjz.597.com">石家庄</a>
						<a href="http://bd.597.com/">保定</a>
						<a href="http://cangzhou.597.com/">沧州</a>
						<a href="http://chengde.597.com/">承德</a>
						<a href="http://hd.597.com/">邯郸</a>
						<a href="http://qhd.597.com/">秦皇岛</a>
						<a href="http://ts.597.com/">唐山</a>
						<a href="http://xt.597.com/">邢台</a>
						<a href="http://lf.597.com/">廊坊</a>
					</li>
					<li>
						<em class="fb">黑龙江</em>
						<a href="http://heb.597.com/">哈尔滨</a>
						<a href="http://qqhr.597.com/">齐齐哈尔</a>
						<a href="http://dq.597.com/">大庆</a>
					</li>
					<li>
						<em class="fb">河南省</em>
						<a href="http://zhengzhou.597.com/">郑州</a>
						<a href="http://luoyang.597.com/">洛阳</a>
						<a href="http://pds.597.com/">平顶山</a>
						<a href="http://xx.597.com/">新乡</a>
						<a href="http://xc.597.com/">许昌</a>
						<a href="http://ny.597.com/">南阳</a>
						<a href="http://ay.597.com/">安阳</a>
						<a href="http://kaifeng.597.com/">开封</a>
						<a href="http://xy.597.com/">信阳</a>
					</li>
					<li>
						<em class="fb">湖北省</em>
						<a href="http://wh.597.com/">武汉</a>
						<a href="http://jingzhou.597.com/">荆州</a>
						<a href="http://xiangyang.597.com/">襄阳</a>
						<a href="http://yc.597.com/">宜昌</a>
						<a href="http://shiyan.597.com/">十堰</a>
						<a href="http://jingmen.597.com/">荆门</a>
					</li>
					<li>
						<em class="fb">湖南省</em>
						<a href="http://cs.597.com/">长沙</a>
						<a href="http://changde.597.com/">常德</a>
						<a href="http://zhuzhou.597.com/">株洲</a>
						<a href="http://yy.597.com/">岳阳</a>
						<a href="http://hy.597.com/">衡阳</a>
						<a href="http://shaoyang.597.com/">邵阳</a>
						<a href="http://yiyang.597.com/">益阳</a>
					</li>
					<li>
						<strong>J</strong>
						<em class="fb">江西省</em>
						<a href="http://nc.597.com/">南昌</a>
					</li>
					<li>
						<em class="fb">江苏省</em>
						<a href="http://nj.597.com/">南京</a>
						<a href="http://su.597.com/">苏州</a>
						<a href="http://wx.597.com/">无锡</a>
						<a href="http://cz.597.com/">常州</a>
						<a href="http://yz.597.com/">扬州</a>
						<a href="http://xz.597.com/">徐州</a>
						<a href="http://nt.597.com/">南通</a>
						<a href="http://zhenjiang.597.com/">镇江</a>
						<a href="http://yancheng.597.com/">盐城</a>
					</li>
				</ul>
				<ul class="cityR">
					<li style="text-align:right;">
						<a href="javascript:;" id="closeCitys" >[ 关闭 ]</a>
					</li>
					<li>
						<em class="fb">吉林省</em>
						<a href="http://cc.597.com/">长春</a>
						<a href="http://jl.597.com/">吉林</a>
						<a href="http://th.597.com/">通化</a>
						<a href="http://sp.597.com/">四平</a>
					</li>
					<li>
						<strong>L</strong>
						<em class="fb">辽宁省</em>
						<a href="http://sy.597.com/">沈阳</a>
						<a href="http://jinzhou.597.com/">锦州</a>
						<a href="http://dl.597.com/">大连</a>
						<a href="http://as.597.com/">鞍山</a>
						<a href="http://fushun.597.com/">抚顺</a>
						<a href="http://liaoyang.597.com/">辽阳</a>
						<a href="http://yk.597.com/">营口</a>
						<a href="http://tl.597.com/">铁岭</a>
						<a href="http://hld.597.com/">葫芦岛</a>
					</li>
					<li>
						<strong>N</strong>
						<em class="fb">内蒙古</em>
						<a href="http://hu.597.com/">呼和浩特</a>
						<a href="http://bt.597.com/">包头</a>
						<a href="http://erds.597.com/">鄂尔多斯</a>
						<a href="http://chifeng.597.com/">赤峰</a>
					</li>
					<li>
						<em class="fb">宁夏</em>
						<a href="http://yinchuan.597.com/">银川</a>
					</li>
					<li>
						<strong>Q</strong>
						<em class="fb">青海省</em>
						<a href="http://xn.597.com/">西宁</a>
					</li>
					<li>
						<strong>S</strong>
						<em class="fb">山东省</em>
						<a href="http://jn.597.com/">济南</a>
						<a href="http://dz.597.com/">德州</a>
						<a href="http://dy.597.com/">东营</a>
						<a href="http://lc.597.com/">聊城</a>
						<a href="http://linyi.597.com/">临沂</a>
						<a href="http://ta.597.com/">泰安</a>
						<a href="http://weihai.597.com/">威海</a>
						<a href="http://zb.597.com/">淄博</a>
						<a href="http://wf.597.com/">潍坊</a>
						<a href="http://yt.597.com/">烟台</a>
						<a href="http://qd.597.com/">青岛</a>
						<a href="http://jining.597.com/">济宁</a>
						<a href="http://rizhao.597.com/">日照</a>
						<a href="http://bz.597.com/">滨州</a>
						<a href="http://zaozhuang.597.com/">枣庄</a>
						<a href="http://heze.597.com/">菏泽</a>
					</li>
					<li>
						<em class="fb">山西省</em>
						<a href="http://ty.597.com/">太原</a>
						<a href="http://dt.597.com/">大同</a>
						<a href="http://yuncheng.597.com/">运城</a>
						<a href="http://yq.597.com/">阳泉</a>
						<a href="http://changzhi.597.com/">长治</a>
						<a href="http://linfen.597.com/">临汾</a>
					</li>
					<li>
						<em class="fb">陕西省</em>
						<a href="http://xa.597.com/">西安</a>
						<a href="http://xianning.597.com/">咸阳</a>
						<a href="http://baoji.597.com/">宝鸡</a>
					</li>
					<li>
						<em class="fb">四川省</em>
						<a href="http://cd.597.com/">成都</a>
						<a href="http://ls.597.com/">乐山</a>
						<a href="http://mianyang.597.com/">绵阳</a>
						<a href="http://nanchong.597.com/">南充</a>
						<a href="http://luzhou.597.com/">泸州</a>
						<a href="http://dazhou.597.com/">达州</a>
						<a href="http://yb.597.com/">宜宾</a>
						<a href="http://deyang.597.com/">德阳</a>
					</li>
					<li>
						<strong>X</strong>
						<em class="fb">西藏</em>
						<a href="http://lasa.597.com/">拉萨</a>
					</li>
					<li>
						<em class="fb">新疆</em>
						<a href="http://wlmq.597.com/">乌鲁木齐</a>
					</li>
					<li>
						<strong>Y</strong>
						<em class="fb">云南省</em>
						<a href="http://km.597.com/">昆明</a>
						<a href="http://dali.597.com/">大理</a>
						<a href="http://qj.597.com/">曲靖</a>
						<a href="http://lj.597.com/">丽江</a>
					</li>
					<li>
						<strong>Z</strong>
						<em class="fb">浙江省</em>
						<a href="http://hz.597.com/">杭州</a>
						<a href="http://lishui.597.com/">丽水</a>
						<a href="http://www.jh597.com/">金华</a>
						<a href="http://nb.597.com/">宁波</a>
						<a href="http://shaoxing.597.com/">绍兴</a>
						<a href="http://wz.597.com/">温州</a>
						<a href="http://jiaxing.597.com/">嘉兴</a>
						<a href="http://huzhou.597.com/">湖州</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="searchBox">
				<span class="tSch" id="tSch">
					<span id="inpBox">
						<span>
							<input type="text" class="text tSchText ac_input" id="tSchJobText" value="请输入公司或职位名称" autocomplete="off" style="color: rgb(153, 153, 153);">
							<a href="javascript:void(0)" class="yahei tSchBtn" id="btnJobSearch">搜索</a>
						</span>
					</span>
					<p class="hotWords">
						<a href="/search/?txtKeyWord=客服" style="color:red;" target="_blank">客服专员</a>
						<a href="/search/?txtKeyWord=销售代表" class="aGray" target="_blank">销售代表</a>
						<a href="/search/?txtKeyWord=会计" class="aGray" target="_blank">会计</a>
						<a href="/search/?txtKeyWord=营业员" class="aGray" target="_blank">营业员</a>
						<a href="/search/?txtKeyWord=收银员" class="aGray" target="_blank">收银员</a>
						<a href="/search/?txtKeyWord=兼职" class="aGray" target="_blank">兼职</a>
						<a href="/search/?txtKeyWord=采购" class="aGray" target="_blank">采购</a>
						<a href="/search/?txtKeyWord=人事" class="aGray" target="_blank">人事</a>
					</p>
				</span>
		</div>
		<div class="btns" id="btns">
			<span class="loginBtn">
				<i class="jpFntWes ico" ></i>手机站<i class="jpFntWes searchType"></i>
				<p>
					<img src="http://cdn.597.com/img/p/login/popz_code.png" alt="" />
					<em>手机站点：m.597.com</em>
				</p>
			</span>
			<span class="zhuce">
				<img src="http://cdn.597.com/img/common/weixinLogo.jpg" alt="" class="weixinIco" />微信<i class="jpFntWes searchType"></i>
				<p>
					<img src="http://cdn.597.com/img/common/wxCode.jpg" alt="" />
					<em>关注597官方微信！</em>
				</p>
			</span>
		</div>
		<div class="clear"></div>
	</div>

	<!-- 导航条 -->
	<div class="nav">
		<div class="navCon">
			
			<div class="navBox" id="navMain">
				<h3>
					<a href="javascript:void(0);" id="navMenu"> <b>全部职位分类</b><i class="jpFntWes"></i>
					</a>
				</h3>
				<div class="pos" id="boxNav" >
					<div class="lst" id="navLst">
						<ul>
						<!--{loop $jobclass $l}-->
							<li class="">
								<a class="lstLnk" href="/search/?jobsort={$l['jobsort']}"> 
									<p class="lnk">{$l['jobsort_name']}</p> <b class="jpFntWes arr"></b>
								</a>
								<div  class="posBox"  style="display:block;">
									<div class="posJobSort">
										<div  class="l">
											<!--{loop $l['subItems'] $k $ll}-->
											<dl>
												<dt>
													<a href="/search/?jobsort={$ll['jobsort']}">{$ll['jobsort_name']}</a>
												</dt>
												<dd>
													<!--{loop $ll['subItems'] $lll}-->
														<a href="/search/?jobsort={$lll['jobsort']}">{$lll['jobsort_name']}</a>
													<!--{/loop}-->
												</dd>
												<div class="clear"></div>
											</dl>
											<!--{/loop}-->
										</div>	
										<div class="r"></div>
									</div>
								</div>
							</li>
							<!--{/loop}-->
						</ul>
					</div>
					<div class="lstMaskWhite1"></div>
					<div class="lstMaskGray1"></div>
				</div>
			</div>

			<ul class="navList">
				<li><a href="/">首页</a></li>
				<li><a href="/search/">找工作</a></li>
				<li><a href="/company/">找人才</a></li>
				<li><a href="/person/">求职管理</a></li>
				<li><a href="/guide/">职场指南</a></li>
				<li><a href="/hrnews/">HR咨询</a></li>
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>

	<!-- 最新招聘 -->
	<div class="auto newJobs" >
		<h2 class="hd2"><em class="infos">共2500条招聘信息，显示前<i class="green">1000</i>条记录</em><span>最新招聘</span></h2>
		<div class="titles fb">
			<ul>
				<li>招聘职位</li>
				<li class="comName">公司名称</li>
				<li>所属行业</li>
				<li>公司地址</li>
				<li class="time">更新时间</li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="listWrap">
			<div class="jobList">
				<ul>
					<li><a href="#"  class="fb">平面设计师</a></li>
					<li class="comName"><a href="#" class="aGray">厦门市才盛网络科技有限公司</a></li>
					<li>互联网</li>
					<li>厦门市思明区</li>
					<li class="time">5分钟前</li>
				</ul>
				<p>
					<span>职位类型：	全职</span>
					<span>参考月薪：	3000-4000</span>
					<span>工作地区：	厦门市</span>
					<span>学历要求：	初中</span>
					<span>工作经验：	不限</span>
					<span>年龄要求：	20岁-35岁</span>
					<span>性别要求：	女</span>
				</p>
			</div>
			<div class="page">
				<span class="">上一页</span>
				<span class="">1</span>
				<a href="/search/?page=2">2</a>
				<a href="/search/?page=3">3</a>
				<a href="/search/?page=4">4</a>
				<a href="/search/?page=5">5</a>
				<a href="/search/?page=6">6</a>
				<a href="/search/?page=7">7</a>
				<a href="/search/?page=8">8</a>
				<a href="/search/?page=9">9</a>
				<a href="/search/?page=2">下一页</a>
			</div>
		</div>
	</div>



	<!--#include virtual="/templates/default/footer.htm" -->

	<script type="text/javascript">
		var currentCity="{$domainInfo['region_name_short']}人才网";
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
	</script>

</body>
</html>