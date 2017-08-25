<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta property="qc:admins" content="25424663065176375" />
	<meta name="sogou_site_verification" content="W2tYPVJS1S"/>
	<title><!--{if $domainInfo['region_id']==1}-->597<!--{else}-->{$domainInfo['region_name_short']}<!--{/if}-->人才网最新招聘信息-{$domainInfo['region_name_short']}597人才网</title>
	<meta name="description" content="597{$domainInfo['region_name_short']}人才网最新招聘信息频道汇总最全面、最新{$domainInfo['region_name_short']}人才网招聘信息,且每日有上万职位招聘信息更新,是最专业、权威、免费发布招聘信息的最佳平台。" />
	<meta name="keywords" content="597{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}人才招聘" />

	<meta http-equiv="Content-Language" content="zh-CN" />
	<link rel="shortcut icon" href="http://cdn.597.com/favicon.ico" />
	<!--[if lt IE9]  -->
	<script src="http://cdn.597.com/js/html5.js?v=20140722"></script>
	<!-- [endif] -->
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/597index.css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-job.css?v=100713305" />
	<!--<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/jquery-1.js"></script>-->
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.cookie.js?v=20140312"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/jquery.lazyload.js"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/index.js"></script>
	<style>
		body{background: #fff;}
		.top{font-size: 12px;}
		.content {margin-top: 20px;}
		.job_list_tab li {width: 161px; margin-left: 0;}
		.job_list_tab { border-top: 1px solid #ff766f; border-bottom: 1px solid #ddd;}
		.bread { font-size: 14px; border: 1px solid #ddd; padding: 15px 20px; background: #f2f2f2;  }
		.fr {float: right;}
		.regTime {color:#999; float: right; font-weight: normal;}
		#newJobs {margin-top: 10px;}
	</style>
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<ul id="topLoginStatus">
					<li class="top-phone"><i class="jpFntWes ico"></i><a href="/mobile.html" target="_blank" style="color:#444;font-weight:normal;">手机找工作</a> | </li>
					<li class="top-wx" ><img src="http://cdn.597.com/img/common/weixinLogo.jpg" alt="" class="wxIco" />微信<img src="http://cdn.597.com/img/common/wxCode.png" class="wxImg" /> |</li>
				<li><a href="/person/register.html" >个人注册</a> |</li>
				<li><a href="/company/register.html" >企业注册</a> |</li>
				<li><a href="/person/login.html" >求职者登录</a> | </li>
				<li><a href="/company/login.html" >企业登录</a> </li>
			</ul>
			<ul id="topPerLogin" style="display:none;">
				<li>您好,<a href="/person/"><span id="topUsername" class=" fb"></span></a> | </li>
				<li><a href="/person/logout.html" >退出</a>  </li>
			</ul>
			<ul id="topComLogin" style="display:none;">
				<li>您好,<a href="/company/"><span id="topUsername" class=" fb"></span></a> | </li>
				<li><a href="/company/logout.html" >退出</a>  </li>
			</ul>
			<div class="wel">
				<ul>
					<li><a href="/">{$domainInfo['region_name_short']}招聘网</a> - </li>
					<li><a href="/search/">{$domainInfo['region_name_short']}找工作</a>首选 </li>

				</ul>
			 </div>
		</div>
		<div class="clear"></div>
	</div>

	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo"><a href="/"><img src="http://cdn.597.com/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" /></a></div>
		<div class="changeCity">
			<strong><span id="currentCity"><!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}--></span></strong><br />
			<a href="/changecity.html"  id="showCitys">切换城市 <i class="jpFntWes searchType"></i></a>
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
					<a href="javascript:void(0);" id="navMenu"> <b>全部职位分类</b><i class="jpFntWes"></i>
					</a>
				</h3>
				<div class="pos" id="boxNav" >
					<div class="lst" id="navLst">
						<ul>
						<!--{loop $jobclass $l}-->
							<li class="">
								<a class="lstLnk" href="javascript:void(0)"><!--/search/a{$l['jobsort']}/-->
									<p class="lnk">{$l['jobsort_name']}</p> <b class="jpFntWes arr"></b>
								</a>
								<div  class="posBox"  style="display:block;">
									<div class="posJobSort">
										<div  class="l">
											<!--{loop $l['subItems'] $k $ll}-->
											<dl>
												<dt>
													<a href="/search/a{$ll['jobsort']}/">{$ll['jobsort_name']}</a>
												</dt>
												<dd>
													<!--{loop $ll['subItems'] $lll}-->
														<a href="/search/a{$lll['jobsort']}/">{$lll['jobsort_name']}</a>
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
				<li><a href="/{$citylist}search/">找工作</a></li>
				<li><a href="/company/">找人才</a></li>
				<li><a href="/person/">求职管理</a></li>
				<li><a href="/{$citylist}CompanyName_Search_Quick.html">最新招聘</a></li>
				<!--<li><a href="/guide/">职场指南</a></li>
				<li><a href="/hrnews/">HR资讯</a></li>-->
			</ul>
		</div>

		<div class="clear"></div>
	</div>

	<div class="auto content">
		<h3 class="bread">
			<span class="fr"><!--{if $count>2000}-->搜索到 {$count} 条记录，为您筛选前 <em style="color:#F39D0E;">2000 </em>条记录<!--{else}-->搜索到 {$num_all} 条记录<!--{/if}--></span>
			<a href="/" class="aGray">首页</a> &gt; <span>{$curCity}最新招聘</span>
		</h3>
		<div class="firm_box" id="newJobs">
			<!-- 循环 firm-item -->
			<!--{loop $res $l}-->
			<div class="firm-item">
				<dl>
					<dt class="comName"><span class="regTime">{$l['_loginTime']}</span><a href="/com-{$l['_cid']}/" target="_blank" class="aGray">{$l['cname']}</a>  ~  <em>{$l['industryName']} <em class="gray"> | </em>  规模：{$l['comSize']}</em></dt>
					<dd>
						<!--{loop $l['joblist'] $k $list}-->
						<ul class="firm-list2 <!--{if $k>1}-->firm-more<!--{/if}-->">
							<li class="firm-l ">
								<a href="/job-{$list['_jid']}.html" target="_blank" class="fb">{$list['jname']}</a>
							</li>
							<li>{$list['jobArea']}</li>
							<li ><span class="gray">薪资：</span>{$list['jobSalary']}</li>
							<li><span class="gray">工作经验：</span>{$list['jobWorkYear']}</li>
							<li class="firm-time"><span class="gray">学历：</span>{$list['jobDegree']}</li>
						</ul>
						<!--{/loop}-->
					</dd>
					<!--{if count($l['joblist'])>2}-->
					<p class="showMore"><a class="gray" href="javascript:void(0);">查看相关职位 ↓ </a></p>
					<!--{/if}-->
				</dl>
				<div class="clear"></div>
			</div>
			<!--{/loop}-->
			<!--{if $count>$pp}-->
			<div class="page">
				{$showpage}
			</div>
			<!--{/if}-->
		</div>
	</div>

	<!--{template footer}-->

	<script type="text/javascript">
		//var currentCity="{$domainInfo['region_site']}";
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

		// 显示隐藏的职位
		$('.showMore').find('a').each(function() {
			var txt = $(this).text();
			$(this).toggle(function() {
				$(this).text('收起相关职位 ↑').parents('dl').find('.firm-more').show();
			}, function() {
				$(this).text(txt).parents('dl').find('.firm-more').hide();
			});
		});
	</script>

</body>
</html>