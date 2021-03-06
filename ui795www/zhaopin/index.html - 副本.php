<?exit?>
<!doctype html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="keywords" content="{$keywords}" />
<meta name="description" content="{$description}" />
<title>{$title}</title>
<!--[if lt IE9]  -->
<script src="http://cdn.597.com/js/html5.js?v=20140722"></script>
<!-- [endif] -->
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-icons.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-job.css?v=100713305" />
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
<script type="text/javascript">
	window.CONFIG = {
		HOST: 'http://cdn1.597.com/min/??',
		COMBOPATH: '/js/v2/'
	}
</script>
<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js?v=181266488"></script>
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20150116"></script>
<script type="text/javascript">
jpjs.config({
	combos: {
		'@jobMenu': [
			'product.jobMenu', '@changeClass', 'product.sideMenu.sideSortMenuGroup', 'product.sideMenu.sideSortMenu',
			'product.sideMenu.sideSortMenuData', '@popup'
		],
		'@jobPostipGroup': [
			'product.jobList.jobPostipGroup', 'product.jobList.jobPostip', '@popup'
		],
		'@followTemplate': 'template.follow',
		'@jobSortActions': 'product.jobSortActions'
	}
});
jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
<style>
	.topHeader,.topNav,footer { min-width: 1172px; }
	.ptCheck {margin-right: 10px;}
	/*小筛选框*/
	.simple_search_bar {width: 180px;}
	.simple_search_bar {padding-right: 0;}
	.simple_search_bar input.key {width:120px; }
	.simple_search_bar button {height: 26px; background: #f8f8f8; border-left:1px solid #e6e6e6; width: 50px; text-align: center; _font-size:14px; *border:none; }
	.side_nav .jpFntWes {color:#444;}
	.splitLine { *display: block; *height:26px; *width:1px; *background: #e6e6e6; *position: absolute; *right:50px; *top:0;}
	.streetSpan {float: left; margin:0 10px 0 20px; position: relative; top:3px;}
	#searchFilter {position: relative; margin-right: 10px; *width:61px;}
	#searchFilter .title {*width:44px;}
	#searchFilter i {float: right; line-height: 14px;  font-size: 14px; color:#999; position: relative; top:4px;}
	#searchFilter .filterList {position: absolute; top:27px; left:-1px; width:60px; background: #fff; border:1px solid #d7d7d7; border-top:none; display: none;}
	#searchFilter .filterList li {padding:4px 0; text-indent: 8px; color:#666;  cursor: pointer;}
	#searchFilter .filterList li:hover {background: #eee;}
	#searchFilter.side_menu_click  .title i { top:2px;}
	strong {color:#ff0000;}
</style>
</head>
<body class="job">
<!--{template top}-->
<div id="boxNav" class="navBox panelBox">
	<div class="navBoxC">
		<div class="l">
			<div class="navLst">
				<p><a href="/jobSearch.html">找工作</a></p>
				<p><a href="/famous.html">名企招聘</a></p>
				<p><a href="/hrnews/">HR咨询</a></p>
				<p><a href="/guide/">职场指南</a></p>
				<p><a href="/company/login.html">企业服务</a></p>
			</div>
			<div class="navPhone"><p>下载手机客户端</p><p class="lnk"><a href="javascript:;"></a></p></div>
		 </div>
		<div class="r">
			<div class="hd"><h3>热门导航</h3></div>
			<div class="bd">
				<ul>
				<li><a href="/{$_city}{$searchName}/?q=销售">销售</a></li>
				<li><a href="/{$_city}{$searchName}/?q=会计">会计</a></li>
				<li><a href="/{$_city}{$searchName}/?q=营业员">营业员</a></li>
				 <li><a href="/{$_city}{$searchName}/?q=出纳">出纳</a></li>
				<li><a href="/{$_city}{$searchName}/?q=人力资源">人力资源</a></li>
				<li><a href="/{$_city}{$searchName}/?q=文员">文员</a></li>
				<li><a href="/{$_city}{$searchName}/?q=前台">前台</a></li>
				<li><a href="/{$_city}{$searchName}/?q=网络推广">网络推广</a></li>
				<li><a href="/{$_city}{$searchName}/?q=软件开发">软件开发</a></li>
				<li><a href="/{$_city}{$searchName}/?q=美工">美工</a></li>
				<li><a href="/{$_city}{$searchName}/?q=网站运营">网站运营</a></li>
				<li><a href="/{$_city}{$searchName}/?q=行政">行政</a></li>
				<li><a href="/{$_city}{$searchName}/?q=设计">设计</a></li>
				<li><a href="/{$_city}{$searchName}/?q=平面">平面</a></li>
				<li><a href="/{$_city}{$searchName}/?q=助理">助理</a></li>
				<li><a href="/{$_city}{$searchName}/?q=施工员">施工员</a></li>
				<li><a href="/{$_city}{$searchName}/?q=置业顾问">置业顾问</a></li>
				<li><a href="/{$_city}{$searchName}/?q=服务员">服务员</a></li>
				<li><a href="/{$_city}{$searchName}/?q=二手房销售">二手房销售</a></li>
				<li><a href="/{$_city}{$searchName}/?q=平面模特">平面模特</a></li>
				<li><a href="/{$_city}{$searchName}/?q=护理师">护理师</a></li>
				<li class="hot"><a href="/{$_city}{$searchName}/?q=外贸">外贸</a></li>
				<li class="hot"><a href="/{$_city}{$searchName}/?q=营销总监">营销总监</a></li><li class="hot"><a target="_blank" href="/{$_city}{$searchName}/?q=大区经理">大区经理</a></li>
				<li class="hot"><a href="/{$_city}{$searchName}/?q=总经理">总经理</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<b class="arr"></b>
	</div>
</div>

<div class="job_main mgb20">
 	<div id="job_filter_box" class="job_filter_box mgb10 mgt15">
		<div class="job_nav">
			<div id="side_menu" class="side_menu" style="display:none;">
				<a class="title" href="javascript:"><i class="more-type" title="点击显示"></i>全部职位类别</a>			
				<div class="side_menu_container">
					<div class="side_menu_list">
						<div class="loader"></div> 
						<div class="side_menu_list_cont">
						<!--
							<div class="actions">
								<a id="mutil_btn" class="multi" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a><a href="">全选</a>
							</div>
						-->	
							<ul></ul>
						</div>
					</div>
					<div class="mutil_select_group" style="display:none">
						<div class="group-box clearfix" id="mutil_select_group" ></div>
						<div class="actions">
						<form action="" method="get" id="frmJobsort">
							<input type="hidden" name="key" value=""> 
								<input type="hidden" name="v" id="hddJobsort">
						</form>	 
						<button class="button_a button_a_red" id="btnSubmitJobsort">确定</button>
						<button class="button_a" id="cancel_btn">取消</button>
						</div>
					</div>
				</div>
			</div>
			<!--
			<a id="followBtn" class="followBtn" href="javascript:"><i class="jpFntWes">&#xf004;</i>加关注</a> 
			-->	

			<div id="searchFilter" class="side_menu" >
				<a class="title" href="javascript:"><i class="jpFntWes"></i><em id="filterKey">职位</em></a>		
				<ul class="filterList">
					<li data-value="1">职位</li>
					<li data-value="2">公司</li>
					<li data-value="3">全文</li>
				</ul>
			</div>

			<!-- 职位搜索->-->
			<div class="side_nav">
				<!--{if $query['jobsort']}-->&nbsp;<a class="label" href="/{$_city}{$searchName}/{$jobsortUrl}<!--{if $jobsortUrl}-->/<!--{/if}-->{$keyword}" title="{$jobsortStr}" style="display:none;">职位类别：<font>{$jobsortStr} ×</font></a>&nbsp;<!--{/if}-->
				<div class="simple_search_bar">
					<form action="{$thisPath}" id="frmKeywordSearch" method="get">
						<button class="jpFntWes" type="submit" id="btnKeywordSearch">搜索</button>
						<!-- <button class="jpFntWes" type="submit" id="btnKeywordSearch">&#xf002;</button> -->
						<span class="def-text" style="display:none">在结果中搜索</span>
						<input type="text" name="q" class="key" value="{$query['keyword']}" />
						<!--<input type="hidden" id="conditionStr" name="param" value="{$areaUrl}" />-->
					</form>
					<span class="splitLine"></span>
				</div>
			</div>

			<!-- 街道搜索 -->
			<div class="side_nav">
				<span class="streetSpan">街道：</span>
				<div class="simple_search_bar" >
					<button class="jpFntWes" type="submit" id="btnStreetSearch">筛选</button>			
					<input type="text" id="txtAddress" name="txtAddress" class="key" value="{$query['txtAddress']}" />
					<span class="splitLine"></span>
				</div>
			</div>
		</div>
		<div id="side_menu_items" class="side_menu_items">
			<div class="side_menu_items_arrow"></div>
		</div>
		<table cellpadding="0">
			<tr class="jobadd">
				<th>工作地点</th>
				<td style="padding-top:9px;">
					<div class="one_sort" data-type="1">
						
						<div class="actions">
							<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>
						</div>
						
						<ul>
							<!--{if $regionAllCity}-->
							<li >
								<a class="first<!--{if $regionAllCity[region_id]==$query['area']}--> dft_checked cur<!--{/if}-->" href="javascript:void(0);" rel="{$regionAllCity['region_domain']}/{$searchName}/g{$regionAllCity[region_id]}{$areaUrl}/{$keyword}">{$regionAllCity[region_name]}</a>
							</li>
							<!--{/if}-->
							<!--{loop $topRegion $l}-->
							<li >
							   <a class="<!--{if in_array($l['region_id'],$queryAreaArr)}-->dft_checked cur<!--{/if}-->" href="javascript:void(0);" rel="/{$searchName}/g{$l['region_id']}{$areaUrl}/{$keyword}" data-value="{$l['region_id']}">{$l['region_name_short']}</a>
							   <!--{/loop}-->
							</li>
						</ul>
					</div>
					<div class="actions-oper">
						<form action="{$areaPath}" method="get" id="frmArea">
							<!--{if $query['keyword']}-->
							<input type="hidden" name="q" value="{$query['keyword']}" />
							<!--{/if}-->
							<input type="hidden" name="n" id="hddArea" class="many-hidden" type-value="g" value="{$query['area']}">

							<button class="button_a button_a_red" id="btnSubmitArea" data-type="submit">确定</button>
							<button type="button" class="button_a resetbtn" id="btnResetArea" data-type="remove" >清除</button>
							<button type="button" class="button_a cancelbtn" id="btnCancelArea" data-type="cancel">取消</button>
						</form>
					</div>
				</td>
			</tr>
			<tr class="first">
				<th>招聘行业</th>
				<td>
					<div class="one_sort">
						<!--
						<div class="actions">
							<a class="more" href="#"><i class="jpFntWes">&#xf0d7;</i></a>
							<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>
						</div>
						-->
						<ul>
							<li class="first">
								<a class="sub_link <!--{if !$topCalling}-->dft_checked cur<!--{/if}-->" href="javascript:void(0);" rel="/{$searchName}/{$callingUrl}/{$keyword}">不限</a>
							</li>
							<!--{loop $industryList $l}-->
							<li <!--{if $topCalling==$l['calling_id']}-->class="current"<!--{/if}-->>
								<a class="sub_link <!--{if $query['calling']==$l['calling_id']}-->cur<!--{/if}-->" href="javascript:void(0);" rel="/{$searchName}/h{$l['calling_id']}{$callingUrl}/{$keyword}" data-value="{$l['calling_id']}">{$l['calling_name']}</a>
								<div class="sub_sort">
									<a class="first " href="javascript:void(0);" rel="/{$searchName}/h{$l['calling_id']}{$callingUrl}/{$keyword}">全部</a>
									<!--{loop $l['subItems'] $list}-->
									<a class="<!--{if $bottomCalling==$list['calling_id']}-->dft_checked cur<!--{/if}-->" href="javascript:void(0);" rel="/{$searchName}/h{$list['calling_id']}{$callingUrl}/{$keyword}" data-value="{$list['calling_id']}">{$list['calling_name']}</a>
									<!--{/loop}-->
								</div>
							</li>
							<!--{/loop}-->

					   </ul>
					</div>
					<!--
					<div class="actions-oper">
						<form action="/renliziyuan/" method="get" id="frmCalling">
						<input type="hidden" name="v" id="hddcallingid" class="many-hidden" type-value="c">
							<button class="button_a button_a_red" id="btnSubmitCalling" type="button" data-type="submit">确定</button>
							<button type="button" class="button_a resetbtn" id="btnResetCalling" data-type="remove">清除</button>
							<button type="button" class="button_a cancelbtn" id="btnCancelCalling" data-type="cancel">取消</button>
						</form>
					</div>
					-->
				</td>
			</tr>
			<!--{if $other_keyword}-->
			<tr class="first">
				<th>相关职位</th>
				<td>
					<div class="one_sort">
						<ul>
							<!--{loop $other_keyword $l}-->
							<li >
								<a class="sub_link" href="javascript:void(0);" rel="/{$searchName}/?q={$l}">{$l}</a>
							</li>
							<!--{/loop}-->
						</ul>
					</div>
				</td>
			</tr>
			<!--{/if}-->
			<tr class="filter_bottom">
				<th>更多筛选</th>
				<td>
					<div id="filter_group" class="filter_group">
						<div class="filter_menu">
							<a class="sub_filter <!--{if $minSalary||$maxSalary}-->dft_checked cur<!--{/if}-->" href="javascript:">薪资范围<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<ul class="filter_options price_list">
								<li><a href="javascript:void(0);" rel="/{$searchName}/{$salaryUrl}<!--{if $salaryUrl}-->/<!--{/if}-->{$keyword}">不限</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/n1500{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==1}-->dft_checked cur<!--{/if}-->">1500以下</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m1500n2500{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==2}-->dft_checked cur<!--{/if}-->">1500-2500</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m2500n3500{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==3}-->dft_checked cur<!--{/if}-->">2500-3500</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m3500n5000{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==4}-->dft_checked cur<!--{/if}-->">3500-5000</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m5000n7000{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==5}-->dft_checked cur<!--{/if}-->">5000-7000</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m7000n9000{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==6}-->dft_checked cur<!--{/if}-->">7000-9000</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m9000n12000{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==7}-->dft_checked cur<!--{/if}-->">9000-12000</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m12000n15000{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==8}-->dft_checked cur<!--{/if}-->">12000-15000</a></li>
								<li><a href="javascript:void(0);" rel="/{$searchName}/m15000{$salaryUrl}/{$keyword}" class="<!--{if $showSalary==9}-->dft_checked cur<!--{/if}-->">15000以上</a></li>
								<li class="price_group">
								<form action="/zhaopin/" method="get" id="frmSalary">
									<input type="text" name="m" value="<!--{if $showSalary==-1}-->{$minSalary}<!--{/if}-->" />-<input type="text" name="n" value="<!--{if $showSalary==-1}-->{$maxSalary}<!--{/if}-->" />
									<input type="hidden" id="conditionStr" name="param" value="{$areaUrl}g{$query['area']}" />
									<input type="hidden" id="conditionStr" name="q" value="{$query['keyword']}" />
									<button class="button_a button_a_red" id="btnSubmitSalary">确定</button>
								 </form>
								</li>
							</ul>
						</div>
						<div class="filter_menu">
							<a class="sub_filter <!--{if $query['ComProperty']}-->dft_checked cur<!--{/if}-->" href="javascript:">公司性质<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options">
								<div class="normal_list">
									<!--<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>-->
									<a href="javascript:void(0)" rel="/{$searchName}/{$propertyUrl}<!--{if $propertyUrl}-->/<!--{/if}-->{$keyword}" class="hide">不限</a>
									<!--{loop $__comProperty $k $l}-->
									<a href="javascript:void(0)" rel="/{$searchName}/p{$k}{$propertyUrl}/{$keyword}" class="<!--{if $k==$query['ComProperty']}-->dft_checked cur<!--{/if}-->" data-value="{$k}">{$l}</a>
									<!--{/loop}-->
								</div>
								<!--
								<div class="actions-oper">
								  <form action="/renliziyuan/" method="get" id="frmComproperty">
									<input type="hidden" name="v" id="hddComproperty" class="many-hidden" type-value="g">
									<button class="button_a button_a_red" id="btnSubmitComproperty" data-type="submit" type="submit">确定</button>
									<button class="button_a resetbtn" type="button" id="btnResetComproperty" data-type="remove">清除</button>
									<button class="button_a cancelbtn" type="button" id="btnCancelComproperty" data-type="cancel">取消</button>
								  </form>
							   </div>
							   -->
							</div>
						</div>
						<!--
						<div class="filter_menu">
							<a class="sub_filter " href="javascript:">岗位级别<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options">
								<div class="normal_list">
									<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>
									<a class=" hide" href="/renliziyuan/">不限</a>
									<a href="/renliziyuan/f01/"  data-value="01">实习/见习</a>
									<a href="/renliziyuan/f02/"  data-value="02">普通员工</a>
									<a href="/renliziyuan/f03/"  data-value="03">高级/资深（非管理岗）</a>
									<a href="/renliziyuan/f04/"  data-value="04">部门经理/主管</a>
									<a href="/renliziyuan/f05/"  data-value="05">总监/副总裁</a>
									<a href="/renliziyuan/f06/"  data-value="06">总裁/总经理</a>
  								</div>
								<div class="actions-oper">
									<form action="/renliziyuan/" method="get" id="frmJoblevel">
										<input type="hidden" name="v" id="hddJoblevel" class="many-hidden" type-value="f">
										<button class="button_a button_a_red" id="btnSubmitJoblevel" data-type="submit" type="submit">确定</button>
										<button class="button_a resetbtn" type="button" id="btnResetJoblevel" data-type="remove">清除</button>
										<button class="button_a cancelbtn" type="button" id="btnCancelJoblevel" data-type="cancel">取消</button>
									</form>
								</div>
							</div>
						</div>
						-->
						<div class="filter_menu">
							<a class="sub_filter <!--{if $query['ComSize']}-->dft_checked cur<!--{/if}-->" href="javascript:">公司规模<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options">
								<div class="normal_list">
									<!--<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>-->
									<a class=" hide"  href="javascript:void(0);" rel="/{$searchName}/{$comsizeUrl}<!--{if $comsizeUrl}-->/<!--{/if}-->{$keyword}" >不限</a>
									<!--{loop $__comSize $k $l}-->
									<a href="javascript:void(0);" rel="/{$searchName}/s{$k}{$comsizeUrl}/{$keyword}" class="<!--{if $k==$query['ComSize']}-->dft_checked cur<!--{/if}-->" data-value="{$k}">{$l}</a>
									<!--{/loop}-->
								</div>
								<!--
								<div class="actions-oper">
									  <form action="/renliziyuan/" method="get" id="frmComsize">
										<input type="hidden" name="v" id="hddComsize" class="many-hidden" type-value="h">
										<button class="button_a button_a_red" id="btnSubmitComsize" data-type="submit" type="submit">确定</button>
										<button class="button_a resetbtn" type="button" id="btnResetComsize" data-type="remove">清除</button>
										<button class="button_a cancelbtn" type="button" id="btnCancelComsize" data-type="cancel">取消</button>
									 </form>
								</div>
								-->
							</div>
						</div>
						<div class="filter_menu">
							<a class="sub_filter  <!--{if $query['Degree']}-->dft_checked cur<!--{/if}-->" href="javascript:">学历要求<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options">
								<div class="normal_list">
									<!--<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>-->
									<a class=" hide" href="javascript:void(0);" rel="/{$searchName}/{$degreeUrl}<!--{if $degreeUrl}-->/<!--{/if}-->{$keyword}">不限</a>
									<!--{loop $__degree $k $l}-->
									<a href="javascript:void(0);" rel="/{$searchName}/d{$k}{$degreeUrl}/{$keyword}" class="<!--{if $k==$query['Degree']}-->dft_checked cur<!--{/if}-->" data-value="{$k}">{$l}</a>
									<!--{/loop}-->
								</div>
								<!--
								<div class="actions-oper">
									 <form action="/renliziyuan/" method="get" id="frmDegree">
										<input type="hidden" name="v" id="hddDegree" class="many-hidden" type-value="i">
										<button class="button_a button_a_red" id="btnSubmitDegree" data-type="submit" type="submit">确定</button>
										<button class="button_a resetbtn" type="button" id="btnResetDegree" data-type="remove">清除</button>
										<button class="button_a cancelbtn" type="button" id="btnCancelDegree" data-type="cancel">取消</button>
									 </form>
								</div>
								-->
							</div>
						</div>
						<div class="filter_menu">
							<a class="sub_filter  <!--{if $query['WorkYear']}-->dft_checked cur<!--{/if}-->" href="javascript:">工作经验<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options filter_options_right">
								<div class="normal_list">
									<!--
									<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>
									-->
									<a class=" hide" href="javascript:void(0);" rel="/{$searchName}/{$workyearUrl}<!--{if $workyearUrl}-->/<!--{/if}-->{$keyword}">不限</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w99{$workyearUrl}/{$keyword}" data-value="99" class="<!--{if $query['WorkYear']==99}-->dft_checked cur<!--{/if}-->">应届毕业生</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w1{$workyearUrl}/{$keyword}" data-value="1" class="<!--{if $query['WorkYear']==1}-->dft_checked cur<!--{/if}-->">≥1年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w2{$workyearUrl}/{$keyword}" data-value="2" class="<!--{if $query['WorkYear']==2}-->dft_checked cur<!--{/if}-->">≥2年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w3{$workyearUrl}/{$keyword}" data-value="3" class="<!--{if $query['WorkYear']==3}-->dft_checked cur<!--{/if}-->">≥3年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w4{$workyearUrl}/{$keyword}" data-value="4" class="<!--{if $query['WorkYear']==4}-->dft_checked cur<!--{/if}-->">≥4年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w5{$workyearUrl}/{$keyword}" data-value="5" class="<!--{if $query['WorkYear']==5}-->dft_checked cur<!--{/if}-->">≥5年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w6{$workyearUrl}/{$keyword}" data-value="6" class="<!--{if $query['WorkYear']==6}-->dft_checked cur<!--{/if}-->">≥6年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w7{$workyearUrl}/{$keyword}" data-value="7" class="<!--{if $query['WorkYear']==7}-->dft_checked cur<!--{/if}-->">≥7年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w8{$workyearUrl}/{$keyword}" data-value="8" class="<!--{if $query['WorkYear']==8}-->dft_checked cur<!--{/if}-->">≥8年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w9{$workyearUrl}/{$keyword}" data-value="9" class="<!--{if $query['WorkYear']==9}-->dft_checked cur<!--{/if}-->">≥9年</a>
									<a	href="javascript:void(0);" rel="/{$searchName}/w10{$workyearUrl}/{$keyword}" data-value="10" class="<!--{if $query['WorkYear']==10}-->dft_checked cur<!--{/if}-->">≥10年</a>
								</div>
								<!--
								<div class="actions-oper">
									<form action="/renliziyuan/" method="get" id="frmWorkyear">
										<input type="hidden" name="workyearid">
										<input type="hidden" name="v" id="hddWorkyear" class="many-hidden" type-value="j">
										<button class="button_a button_a_red" id="btnSubmitWorkyear" data-type="submit" type="submit">确定</button>
										<button class="button_a resetbtn" type="button" id="btnResetWorkyear" data-type="remove">清除</button>
										<button class="button_a cancelbtn" type="button" id="btnCancelWorkyear" data-type="cancel">取消</button>
									</form>
							 	</div>
							 	-->
							</div>
						</div>
						<div class="filter_menu">
							<a class="sub_filter  <!--{if $query['Reward']}-->dft_checked cur<!--{/if}-->" href="javascript:">福利待遇<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options filter_options_right">
								<div class="normal_list">
									<a class=" hide" href="javascript:void(0);" rel="/{$searchName}/{$rewardUrl}<!--{if $rewardUrl}-->/<!--{/if}-->{$keyword}">不限</a>
									<!--{loop $__reward $k $l}-->
										<a href="javascript:void(0);" rel="/{$searchName}/r{$k}{$rewardUrl}/{$keyword}" class="<!--{if $k==$query['Reward']}-->dft_checked cur<!--{/if}-->" data-value="{$k}">{$l}</a>
									<!--{/loop}-->
								</div>
							</div>
						</div>
						<div class="filter_menu">
							<a class="sub_filter  <!--{if $query['joinType']}-->dft_checked cur<!--{/if}-->" href="javascript:">工作类型<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<div class="filter_options filter_options_right">
								<div class="normal_list">
									<!--
									<a class="mutil" href="javascript:">多选<i class="jpFntWes">&#xf067;</i></a>
									-->
									<a class=" hide" href="javascript:void(0);" rel="/{$searchName}/{$joinTypeUrl}<!--{if $joinTypeUrl}-->/<!--{/if}-->{$keyword}">不限</a>
									<!--{loop $__joinType $k $l}-->
									<a href="javascript:void(0);" rel="/{$searchName}/j{$k}{$joinTypeUrl}/{$keyword}" class="<!--{if in_array($k,$joinType)}-->dft_checked cur<!--{/if}-->" data-value="{$k}">{$l}</a>
									<!--{/loop}-->
								</div>
								<!--
								<div class="actions-oper">
									<form action="/renliziyuan/" method="get" id="frmJobtype">
										<input type="hidden" name="v" id="hddJobtype" class="many-hidden" type-value="k">
										<button class="button_a button_a_red" id="btnSubmitJobtype" data-type="submit" type="submit">确定</button>
										<button class="button_a resetbtn" type="button" id="btnResetJobtype" data-type="remove">清除</button>
										<button class="button_a cancelbtn" type="button" id="btnCancelJobtype" data-type="cancel">取消</button>
									</form>
								</div>
								-->
							</div>
						</div>
						<div class="filter_menu">
							<a class="sub_filter <!--{if $query['selUpdateStep']}-->dft_checked cur<!--{/if}-->" href="javascript:">刷新时间<i class="jpFntWes n">&#xf107;</i><i class="jpFntWes c">&#xf106;</i><s class="hr"></s></a>
							<ul class="filter_options price_list filter_options_right">
								<li><a href="javascript:void(0);" rel="/{$searchName}/{$updateStepUrl}<!--{if $updateStepUrl}-->/<!--{/if}-->{$keyword}">不限</a></li>
								<li><a <!--{if $query['selUpdateStep']==1}-->class="dft_checked cur"<!--{/if}--> href="javascript:void(0);" rel="/{$searchName}/u1{$updateStepUrl}/{$keyword}">近一天</a></li>
								<li><a <!--{if $query['selUpdateStep']==3}-->class="dft_checked cur"<!--{/if}--> href="javascript:void(0);" rel="/{$searchName}/u3{$updateStepUrl}/{$keyword}">近三天</a></li>
								<li><a <!--{if $query['selUpdateStep']==7}-->class="dft_checked cur"<!--{/if}--> href="javascript:void(0);" rel="/{$searchName}/u7{$updateStepUrl}/{$keyword}">近七天</a></li>
								<li><a <!--{if $query['selUpdateStep']==30}-->class="dft_checked cur"<!--{/if}--> href="javascript:void(0);" rel="/{$searchName}/u30{$updateStepUrl}/{$keyword}">近三十天</a></li>
							</ul>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<!-- 职位搜索结果部分 -->
	<div class="job_list_container mgb10">
		<div class="postSearchBg">
			<!-- 搜索结果左半部分 -->
			<div class="postSearchLeft" id="job_list_main">
				<!-- 结果tab页 -->
				<!-- <div class="postSchList">
					<div class="zList">

						<a href="/kuaiji/n01_0/" class="cut">刷新时间</a>

						<a href="/kuaiji/n02_0/" class="">发布时间</a>
					</div>
					<a data-urgent-src="/kuaiji/m01/" data-src="/kuaiji/" class="zwPost" href="javascript:void(0)" id="urgentSelect"> <i class=""></i>
						<img src="/img/company/jobimg.png" width="9" height="16">
						<span>急聘职位</span>
					</a>
				</div> -->
				<div class="job_list_tab">
					<ul>
						<li class="current">
							<a href="javascript:;" title="所有职位" class="one"></a>
						</li>
						<!--
						<li>
							<a href="/kehufuwu/m01/" class="two" title="急聘职位"></a>
						</li>
						<li>
							<a href="/kehufuwu/m03/" class="three" title="名优企业"></a>
						</li>
						-->

					</ul>
				</div>
				<div id="job_list" class="job_list_subtab mgb20">
					<span class="tit"> <i></i>
						排序
					</span>
					<ul>
						<li>
							<a href="/{$_city}{$searchName}/o0{$orderUrl}/{$keyword}" <!--{if $query['order']==0}-->class="red"<!--{/if}-->>
								更新时间 <i class="jpIconMoon"></i>
							</a>
						</li>
						<li>
							<!--{if $query['order']==8 || $query['order']==9}-->
								<!--{if $query['order']==8}-->
									<a href="/{$_city}{$searchName}/o9{$orderUrl}/{$keyword}" class="red">
										相关度
										<i class="jpIconMoon"></i>
									</a>
								<!--{/if}-->
								<!--{if $query['order']==9}-->
									<a href="/{$_city}{$searchName}/o8{$orderUrl}/{$keyword}" class="red">
										相关度
										<i class="arrowUp"></i>
									</a>
								<!--{/if}-->
							<!--{else}-->
								<a href="/{$_city}{$searchName}/o8{$orderUrl}/{$keyword}">
									相关度
									<i class="jpIconMoon"></i>
								</a>
							<!--{/if}-->
						</li>
						<li>
							<!--{if $query['order']==6 || $query['order']==7}-->
								<!--{if $query['order']==6}-->
									<a href="/{$_city}{$searchName}/o7{$orderUrl}/{$keyword}" class="red">
										首发时间
										<i class="jpIconMoon"></i>
									</a>
								<!--{/if}-->
								<!--{if $query['order']==7}-->
									<a href="/{$_city}{$searchName}/o6{$orderUrl}/{$keyword}" class="red">
										首发时间
										<i class="arrowUp"></i>
									</a>
								<!--{/if}-->
							<!--{else}-->
								<a href="/{$_city}{$searchName}/o6{$orderUrl}/{$keyword}">
									首发时间
									<i class="jpIconMoon"></i>
								</a>
							<!--{/if}-->
						</li>
						<li>
							<!--{if $query['order']==2 || $query['order']==3}-->
								<!--{if $query['order']==2}-->
									<a href="/{$_city}{$searchName}/o3{$orderUrl}/{$keyword}" class="red">
										薪资
										<i class="jpIconMoon"></i>
									</a>
								<!--{/if}-->
								<!--{if $query['order']==3}-->
									<a href="/{$_city}{$searchName}/o2{$orderUrl}/{$keyword}" class="red">
										薪资
										<i class="arrowUp"></i>
									</a>
								<!--{/if}-->
							<!--{else}-->
								<a href="/{$_city}{$searchName}/o2{$orderUrl}/{$keyword}">
									薪资
									<i class="jpIconMoon"></i>
								</a>
							<!--{/if}-->
						</li>
						<li>
							<!--{if $query['order']==4 || $query['order']==5}-->
								<!--{if $query['order']==4}-->
									<a href="/{$_city}{$searchName}/o5{$orderUrl}/{$keyword}" class="red">
										工龄
										<i class="jpIconMoon"></i>
									</a>
								<!--{/if}-->
								<!--{if $query['order']==5}-->
									<a href="/{$_city}{$searchName}/o4{$orderUrl}/{$keyword}" class="red">
										工龄
										<i class="arrowUp"></i>
									</a>
								<!--{/if}-->
							<!--{else}-->
								<a href="/{$_city}{$searchName}/o4{$orderUrl}/{$keyword}">
									工龄
									<i class="jpIconMoon"></i>
								</a>
							<!--{/if}-->
						</li>
					</ul>

					<div class="pagebox">
						<label>{$_total}</label>
						<!--
						<a class="jpFntWes disabled" href="javascript:void(0);"></a>
						<span>1</span>
						/86
						<a class="jpFntWes" href="/kehufuwu/p2/#list"></a>
						-->
					</div>

				</div>
				<div class="firm_box" id="firm_box">
					<!--{if !$result['matches']}-->
						<div class="noData mgb10">对不起，没有找到您想要查找的职位</div>
					<!--{else}-->
						<!--循环 firm-item-->
						<div class="firm-item fb" style="padding:10px 0 5px;color:#333;background:#f8f8f8;">
							<ul class="firm-list2">
								<li class="firm-l " style="text-indent:30px;">职位名称</li>
								<li class="firm-md">公司名称</li>
								<li >薪资</li>
								<li class="firm-md2">工作地区</li>
								<li class="firm-time" style="color:#444;">更新时间</li>
							</ul>
							<div class="clear"></div>
						</div>
						<!--{loop $result['matches'] $k $l}-->
							<div class="firm-item">
								<ul class="firm-list2">
									<li class="firm-l">
										<label class="pos check-default ptCheck" data-value="{$l[_jid]}" data-name="pos"></label>
										<a href="{$l[jobUrl]}/job-{$l[_jid]}.html" target="_blank" class="fb des_title" style="" rel="">{$l['jname']}</a>
									</li>
									<li class="firm-md"><a href="/com-{$l[_cid]}/" target="_blank">{$l['cname']}</a></li>
									<li >{$l['jobSalary']}</li>
									<li class="firm-md2">{$l['jobArea']}</li>
									<li class="firm-time"><!--{if ($query['order']==6 || $query['order']==7)}-->{$l['createTime']}<!--{else}-->{$l['updateTime']}<!--{/if}--> </li>
								</ul>
								<div class="clear"></div>
							</div>
							<!-- 职位浮动层 -->
							<div class="pos_overlay job-pop">
								<div class="job-tit">
									<p class="right" style="margin-top: 7px">
										<a class="btn5 btnsF12 btnApply"  data-value="{$l[_jid]}" data-autofilter="false" href="javascript:void(0)">投递职位</a>
										<a class="btn3 btnsF12" target="_blank" href="{$l[jobUrl]}/job-{$l[_jid]}.html">查看详情</a>
									</p>
									<span class="f14c9">{$l['cname']}</span>
									<h3 class="name">
										{$l['jname']}
										<span></span>
									</h3>
								</div>
								<div class="clearfix job-detail">
									<ul class="one">
										<li>
											<label>薪资待遇：</label>
											<!--<span style="ax_pushR" style="display:none">（底薪：2500-3000元/月+提成）</span>-->
											<span class='ax_pushL' >{$l['jobSalary']}</span>
										</li>
										<li>
											<label>工作地点：</label>
											{$l['jobArea']}
										</li>
										<li>
											<label>工作经验：</label>
											{$l['_jobWorkYear']}<!--{if $job['jobNewGraduate']}-->（可接收应届毕业生）<!--{/if}-->
										</li>
									</ul>
									<ul>
										<li>
											<label>语言要求：</label>
											{$l['jobLanguage']}
										</li>
										<!--
										<li>
											<label>所属行业：</label>
										</li>
										-->
										<li>
											<label>学历要求：</label>
											{$l['_jobDegree']}
										</li>
										<li>
											<label>年龄性别：</label>
											{$l['jobAge']}({$l['jobGender']})
										</li>
										<li>
											<label>招聘人数：</label>
											<!--{if $l['jobNumber']==0}-->若干<!--{else}-->{$l['jobNumber']}<!--{/if}-->人
										</li>
									</ul>
								</div>
								<!--{if $l['rewardStr']}-->
								<p class="job-welf">
										<!--{loop $l['rewardStr'] $list}-->
											<span>{$list}</span>
										<!--{/loop}-->
								</p>
								<!--{/if}-->
								<strong class="job-detTit">岗位职责：</strong>
								<div class="job-detList">
									{$l['jobContent']}
								</div>
							</div>

						<!--{/loop}-->
					<!--{/if}-->
					<div class="job_list_table">
						<div class="batch-butn">
							<label for="select-all"><input type="checkbox" class="select-all" id="select-all" />
							 全选</label>
							<a class="btn5 btnsF14" id="btnApplyJob" href="javascript:void(0)">
								批量投递职位（
								<span class="batch_num">0</span>
								）
							</a>
							<a class="btn3 btnsF14" id="btnFavJob" href="javascript:void(0)">收藏</a>
						</div>
						<div class="page">
							<div class="page">
								<!--{$showpage}-->
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- <div class="postSearchRight">
				<div class="job_list_side">
					                     <div class="side_banner_list mgb10" id="jobsearchAdvert">
					<p class="mgb5">
						<a href="#">
							<img src="/img/v2/temp/2.jpg" alt="" />
						</a>
					</p>
				</div>
					<div class="side_msg_list mgb10" id="job_recommend">
						<div class="title">
							<h4>智能推荐</h4>
						</div>
						<dl>
							<dt>
								<a target="_blank" href="/zhaopin/zhiwei/job6jvdcd9.html" title="会计">会计</a>
							</dt>
							<dd>
								<div>
									<em title="该职位正在急聘中..." class="icons16_jipin"></em>
									<a target="_blank" title="管理有限公司" href="/zhaopin/qiye/entq8genl0f.html">管理有限公司</a>
								</div>
								<p>面议 - 观音桥</p>
							</dd>
						</dl>
					</div>
				</div>
			</div> -->
			<div class="clear"></div>
			</div>
		</div>

	<style>
		.job_sort_list dt { text-align: left; width: 80px;}
		.job_sort_list dd { padding-left: 70px;}
		#search_box_a2 {margin:0 auto; background: #fff; margin:10px auto 25px;}
		#search_box_a2  .search_box_a .selecter .label {background: #fff;}
	</style>
	<!-- <div id="search_box_a2" class="search_box_a mgt5" >
		<form action="">
			<div class="selecter">
				<div class="label">
					<i class="jpFntWes">&#xf0dd;</i>
					<label>职位</label>
				</div>
				<ul class="options">
					<li data-value="1"><a href="javascript:">职位</a></li>
					<li data-value="2"><a href="javascript:">公司</a></li>
					<li data-value="1"><a href="javascript:">全文</a></li>
				</ul>
			</div>
			<div class="searchInput">
				<input id="searchInput" class="keys" type="text" value='' />
				<div id="ui_hbsug" class="ui_hbsug"></div>
			</div>
			<button id="search">搜 索</button>
		</form>
	</div> -->
	<div class="job_sort_list" style="border:1px solid #ddd;padding-top:5px;">
		<div class="header"> <b style="margin-right:10px"><!--{if $domainInfo['region_id']==1}-->597<!--{else}-->{$domainInfo['region_name_short']}<!--{/if}-->人才网招聘频道</b>
			为您提供人才网最新招聘信息；招聘、找工作，就上{$domainInfo['region_name_short']}597人才网；
		</div>
		<dl>
			<dt style="width:98px">热门搜索：</dt>
			<dd>
				<!--{loop $keywordArrAll $k $l}-->
					<!--{if $l['pinyin']}-->
						<a href="/zhaopin/{$l['pinyin']}/" target="_blank">{$l['keyword']}</a>
					<!--{else}-->
						<a href="/zhaopin/?q={$l['keyword']}" target="_blank">{$l['keyword']}</a>
					<!--{/if}-->
				<!--{/loop}-->
			</dd>
		</dl>
	</div>

</div>
<div id="scrollFun" class="scrollFun">
	 <div class="scrollFunBox">
		 <div class="conR">
			 <span class="decPic"></span>
			 <span class="decTxt">扫一扫，下载手机版<br>随时看，随时投</span>
		 </div>
		 <div class="conL">
			 <a id="btnApply1" href="javascript:void(0)" class="btn5 btnsF16">批量投递职位（<font class="batch_num">0</font>）</a>
			 <a id="btnFav" href="javascript:void(0)" class="btn3 btnsF16">收藏</a>
		 </div>
	 </div>
	 <div class="scrollFunBg"></div>
</div>
<!--{template footer}-->


<div class="bottom-bar" id="listBottomBar" style="display: none;">
	<a href="javascript:;" class="bottom-bar-close"></a>
	<div class="content">
		<span class="bottom-bar-txt">没有找到合适的工作？</span><a href="/person/register.html" target="_blank" class="bottom-bar-btn">1分钟留下信息</a><span class="bottom-bar-txt">我们会将你推荐给优秀企业！坐等好工作来找你！</span>
	</div>
</div>

<img src="http://cdn.597.com/img/common/loadBox.gif" style="position:fixed;left:50%;top:30%;margin-left:-24px;margin-top:-24px;display:none;" id="loadBox">

<script type="text/javascript">



if(!jpjs){
	$(document).ready(function(){
		factory($);
	});
} else {
	jpjs.use(factory);
}
function factory($){
	$(window).scroll(function(){
		if ($(document).scrollTop() > 120){
			$('#sus').find('a.backTop').css({'display':'inline-block'});
		}else{
			$('#sus').find('a.backTop').css({'display':'none'});
		}
	});
	$('#sus').find('a.backTop').click(function(){
		$('html,body').animate({ scrollTop: 0 });
	});
}

</script>
<script type="text/javascript">	
	jpjs.use('@jpCommon, @jobsort2, @jobSortActions', function(m){
		
		var $ = m['jpjob.jobsort2'];
		$('#mutil_select_group').jobsort({target:"#mutil_select_group",type:"multiple",max:5,hddName:'hidJobsort',isLimit:true});
				$('#btnSubmitJobsort').click(function(){
			var $jobsort = $('#mutil_select_group').find('input[name="hidJobsort"]').val();
			if($jobsort){
				$('#hddJobsort').val('a'+ $jobsort.replace(/,/g,'_'));
			}
			$('#frmJobsort').get(0).submit();
			});
			$("#btnSubmitSalary").click(function(){
			var frm = $("#frmSalary"),
				txt1 = frm.find("[name='txtminSalary']"),
				txt2 = frm.find("[name='txtmaxSalary']");
				
			frm.find("[name='params']").val('e'+txt1.val()+"_"+txt2.val());
			txt1.remove();txt2.remove();
			frm.submit();
			return false;
		});
		
		//xiaomi
		/*mj beign*/
		
		//默认文字 搜索
		$.extend($, m['product.jpCommon']);
		$(".simple_search_bar").textDefault();
		/*end*/	

	});
	
	jpjs.use('@checkLogin, @verifier, @checkBoxer, @confirmBox, @form, @changeClass, @jobPostipGroup', function(m){
		
		var $ = m['jquery'],
			CheckBoxer = m['widge.checkBoxer'], //列表勾选
			checkLogin = m['product.checkLogin'], //判断是否登录，是则弹出层
			verifier = m['module.verifier'],
			cookie = m['tools.cookie'],
			listBoxer = new CheckBoxer({
				className : "check-checked",
				hoverClassName:"check-hover",
				maxLength:1000,
				element: $('#job_list_main').find('.pos')
			}),
			srlfun = $("#scrollFun");
		//悬浮窗
		m['tools.fixed'].pin(srlfun, 0, 0, false, true);


		//底部内容
		
		var bottomType = cookie.get('bottomType');
		var userType = cookie.get('userType');

		if(!bottomType&&userType!='per'){
			$('#listBottomBar').show();
		}

		$('#listBottomBar .bottom-bar-close').click(function(){
			cookie.set('bottomType', true,{expires:3});
			$('#listBottomBar').hide();
		});		
		
		//关注窗口
		var dialog = m['widge.overlay.jpDialog'],
			confirmBox = m['widge.overlay.confirmBox'],
			follower = new dialog({
				idName: 'follow_dialog',
				title: '添加关注',
				close: 'x',
				isAjax: true,
				initHeight: 100,
				width: 480
			});
		
		/*
		$('#shield').click(function(){
			var islogin = checkLogin.isLogin('ajaxshield');
			if(!islogin){
				return false;
			}
		});
		*/
		//列表勾选
		listBoxer.on('select', function(e){
			var value = listBoxer.getValue(true)['pos'],
				leth = value && value.length;
				if(leth==undefined) leth=0;
			/*	
			if(leth){
				srlfun.show();
			} else {
				srlfun.hide();
			}
			*/
			$(".batch_num").html(leth);
		});
		//全选
		$('#select-all').click(function(){
			if ($(this).attr("checked")) {
				var i=0;
				$('.firm-l .pos').each(function(index,value){
					listBoxer.setStatus(index,true);
					//$(this).addClass('check-checked');
					//$(this).attr('data-status',true);
					i++;
				});
				$(".batch_num").html(i);
			} else {
				$('.firm-l .pos').each(function(index,value){
					listBoxer.setStatus(index,false);
				});
				$(".batch_num").html('0');
			}
		});
		
		//职业预览层
		new m['product.jobList.jobPostipGroup']({
			container:$("#job_list_table, #firm_box"),
			width:670
		});
		$('.hb_ui_jobPostip').eq(0).on('click', '.btnApply', function(){
				var jobid=$(this).attr('data-value');
				$.getJSON('/api/web/job.api?act=join&jid='+jobid,function(result){
					if (result.status==-1){
						checkLogin.isLogin('ajaxLoginCallback');
						checkLogin.dialog.resetSize(498);
						return false;
					}
					if (result.status<1){
						confirmBox.timeBomb(result.msg, 'fail');
						return false;
					}
					if (result.status>=1){
						confirmBox.timeBomb(result.msg, 'success').resetSize('auto');
						return false;
					}
				});
		});
		
		var posValue;

		//批量投递
		$('#btnApplyJob,#btnApply1').click(function(e){
			var arr = new Array();
			$(".firm-l .check-checked").each(function(){
				arr.push($(this).attr('data-value'));
			});
			var str=arr.join(",");
			if(str==""){
				confirmBox.timeBomb("请选择职位", {
					name : "warning",
					timeout : 1000
				});
				return false;
			}

			
			$.ajax({
				url : "/api/web/job.api",
				type : "get",
				data : {
					act : 'join',
					str : str
				},
				dataType : "json",
				beforeSend : function(){
					$('#loadBox').show();
				},
				success : function(json) {
					$('#loadBox').hide();
					if(json.status==-1){
						checkLogin.isLogin('ajaxLoginCallback');
						checkLogin.dialog.resetSize(498);
						return false;
					}
					if(json.status==1){
						confirmBox.timeBomb('职位投递成功', 'success').resetSize('auto');
						window.location.href = window.location.href;
					}else{
						confirmBox.timeBomb(json.msg, 'fail').resetSize('auto');
					}
				}
			});
		});

		//批量收藏
		$('#btnFavJob,#btnFav').on('click', function(){
			var arr = new Array();
			$(".firm-l .check-checked").each(function(){
				arr.push($(this).attr('data-value'));
			});
			var str=arr.join(",");
			if(str==""){
				confirmBox.timeBomb("请选择职位", {
					name : "warning",
					timeout : 1000
				});
				return false;
			}

			$.ajax({
				url : "/api/web/job.api",
				type : "get",
				data : {
					act : 'favorites',
					str : str
				},
				dataType : "json",
				beforeSend : function(){
					$('#loadBox').show();
				},				
				success : function(json) {
					$('#loadBox').hide();
					if(json.status==-1){
						checkLogin.isLogin('ajaxLoginCallback');
						checkLogin.dialog.resetSize(498);
						return false;
					}
					if(json.status==1){
						confirmBox.timeBomb('职位收藏成功', 'success').resetSize('auto');
					}else{
						confirmBox.timeBomb('职位收藏失败', 'fail').resetSize('auto');
					}
				}
			});			

		});

		$('.firm_box').find('.firm-bot').find('#btnApply').click(function(){
			var jobid=$(this).attr('rel');
			$.getJSON('/api/web/job.api?act=join&jid='+jobid,function(result){
				if (result.status==-1){
					var url = '/person/applyLogin.htm';
					checkLogin.dialog.setContent(url).show().off('loadComplete').on('loadComplete',function(){
						this.oneCloseEvent('#btnApplyClose');
					});
					return false;
				}
				if (result.status<1){
					confirmBox.timeBomb(data.error, 'fail');
					return false;
				}
				if (result.status>=1){
					confirmBox.timeBomb(result.msg, 'success').resetSize('auto');
					return false;
				}
			});
		});

		$('.firm_box').find('.firm-bot').find('#btnFavorites').click(function(){
			var jobid=$(this).attr('rel');
			$.getJSON('/api/web/job.api?act=favorites&jid='+jobid, function(data) {
				if (data && data.status) {
					if (data.status==-1){
						var url = '/person/applyLogin.htm';
						checkLogin.dialog.setContent(url).show().off('loadComplete').on('loadComplete',function(){
							this.oneCloseEvent('#btnFavoritesClose');
						});
						return false;
					}
					if (data.status<0){
						confirmBox.timeBomb('职位收藏失败', 'fail');
						return false;
					}
					if (data.status==1){
						confirmBox.timeBomb('职位收藏成功', 'success').resetSize('auto');
						return false;
					}
					if (data.status==2){
						confirmBox.timeBomb('该职位已经被收藏过', 'success').resetSize('auto');
						return false;
					}
				}
			});			
		});	

		$(".allResume").on("click", function () {
			$(this).addClass("hide").siblings(".allResume").removeClass("hide");
			$(this).closest(".postIntro").find(".more").toggleClass("hidden");
		});

		$('.zwPost').click(function(){
			$('.zwPost i').toggleClass('cut');
			if ($('.zwPost i').hasClass('cut'))
				window.location.href = $(this).attr("data-urgent-src");
			else
				window.location.href = $(this).attr("data-src");				
		});
	});
	
	//左侧菜单
	jpjs.use('@jobMenu', function(m){
		var job = new m['product.jobMenu']({
			menuGroup: {
			url: {
				host: '{$url}',
				path: '/zhaopin/',
				param:"q={$_GET['keyword']}",
				alias: 'alias',
				selectId: []}
			}
		});
	});

	function ajaxLoginCallback() {
		window.location.href = window.location.href ; 
	}
	function ajaxshield(){
		window.location.href = document.getElementById("shield").href; 
	}


	$(".filter_bottom .filter_menu ul li a,.one_sort ul li a").click(function(){
		var rel = ($(this).attr("rel"));
		var data_type = $(".one_sort").attr("data-type");
		if(rel&&data_type==1){
			window.location.href = rel;
		}
	});

	$(".filter_bottom .filter_menu .normal_list a").click(function(){
		var rel = ($(this).attr("rel"));
		if(rel){
			window.location.href = rel;
		}
	});

	// 新的职位筛选
	$('#searchFilter').hover(function() {
		$(this).addClass(' side_menu_click').find('ul').show();
		$('.filterList li').each(function(){
			if($(this).text() === $('#filterKey').text()){
				$(this).hide().siblings().show();
			}
		});
	}, function() {
		$(this).removeClass(' side_menu_click').find('ul').hide();
	});

	$('.filterList li').click(function(){
		$('#filterKey').html($(this).text());
		$(this).parent().hide();
		$('#searchFilter').attr('data-value',$(this).attr('data-value'));
	}).eq(0).click();

	$('#btnStreetSearch').click(function(){
		$('#btnKeywordSearch').trigger("click");
	})

	$('#filterKey').html(<!--{if $query['condition']==1}-->'职位'<!--{/if}--><!--{if $query['condition']==2}-->'公司'<!--{/if}--><!--{if $query['condition']==3}-->'全文'<!--{/if}-->);
	$('#searchFilter').attr('data-value',{$query['condition']});

	$('#btnKeywordSearch').click(function(){
		var dataVal = $('#searchFilter').attr('data-value');
		var key = encodeURIComponent($(this).siblings('.key').val());
		var url = '/zhaopin/{$conditionUrl}c'+dataVal+'/';
		var address = $('#txtAddress').val();
		var addressQuery = '&txtAddress='+address;

		window.location.href = url + '?q=' + key + addressQuery;
		return false;
	});
</script>

 
</body>
</html>