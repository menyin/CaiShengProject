<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta property="qc:admins" content="25424663065176375" />
	<meta name="mobile-agent" content="format=xhtml; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=html5; url={$mobileUrl}">
	<meta name="mobile-agent" content="format=wml; url={$mobileUrl}">
	<meta name="sogou_site_verification" content="W2tYPVJS1S"/>
	<title><!--{if $domainInfo['region_id']==1}-->597<!--{else}-->{$domainInfo['region_name_short']}<!--{/if}-->人才网最新招聘信息-{$domainInfo['region_name_short']}597人才网</title>
	<meta name="description" content="597{$domainInfo['region_name_short']}人才网最新招聘信息频道汇总最全面、最新{$domainInfo['region_name_short']}人才网招聘信息,且每日有上万职位招聘信息更新,是最专业、权威、免费发布招聘信息的最佳平台。" />	
	<meta name="keywords" content="597{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}人才招聘" />

	<meta http-equiv="Content-Language" content="zh-CN" />
	<link rel="shortcut icon" href="http://cdn.597.com/favicon.ico" />
	<!--[if lt IE9]  -->
	<script src="http://cdn.597.com/js/html5.js?v=20160330"></script>	<!-- [endif] -->
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20160330" />	
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20160330" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20160330" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/about.css?v=20160330" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20160330"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20160330"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
		var currentCity = "全国站";
	</script>
	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js?v=20160330"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20160330"></script>
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
	<script language="javascript" type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/js/uaredirect.js?v=20151014"></script>
	<script language="javascript" type="text/javascript">uaredirect("{$mobileUrl}");</script>
	<style>
		body {background: #f0f0f0;}
		.tSchJobRts{margin-left: -6px;}
		.frdLnk dl dt{font-size: 14px;}
		.topNavCon,.topHeader .header_fix {width: 1080px;}
		.main {width: 1080px; background: #fff; margin:15px auto; text-align: left; border:1px solid #EDEDED;}
		.main h2 {font-size: 15px; padding:20px 0; font-family: 微软雅黑;}
		.main h2 strong {display: inline-block; border-left:5px solid #F83F43; padding-left: 15px; height: 18px; line-height: 18px; margin-right: 30px;}
		.comList thead {background: #E74941; height: 35px; line-height: 35px; color:#fff; font-weight: bold; }
		.comList th {padding-left: 20px; font-weight: bold;}
		.comList tbody tr {border-bottom:1px solid #ededed;}
		.comList tbody tr:nth-child(even){ background: #f8f8f8;}
		.comList td {padding:12px 20px; line-height: 28px;}
		.comList .comName {font-weight: bold; display: inline-block; max-width:330px; height: 20px; line-height: 20px; overflow: hidden; white-space:nowrap; text-overflow: ellipsis;}
		.comList .jobs {font-size: 12px;}
		.jobs a {color:#444; margin-right: 20px; display: inline-block;}
		.jobs a:hover {color:#0af;}
		.jobs .gap {color:#ccc; margin:0 3px;}
		.noDiv {font-size: 20px; padding:40px 0; text-align: center; font-family: 微软雅黑; color:#999;}
		.footer {background: #fff; font-size: 12px; line-height: 28px;  padding:15px 0;}
		.footer a {color:#444; margin:0 5px;}
	</style>
</head>
<body>
	<!--{template top}-->

	<div class="main">
		<h2><strong>近期招聘信息</strong>共搜索{$total_found}家单位,显示{$total}家单位 招聘信息，更多信息请点击 [ <a href="/zhaopin">查询职位</a> ]</h2>
		<table class="comList" width="100%">
			<thead>
				<tr><th width="350">公司名称</th><th>招聘职位</th></tr>
			</thead>
			<tbody>
				<!--{loop $companyList $l}-->
				<tr>
					<td><a href="/com-{$l['_cid']}/" class="comName" target="_blank" title="{$l['cname']}">{$l['cname']}</a> <!--{if $_GET['q']==1}-->{$l['_loginTime']}<!--{/if}--></td>
					<td class="jobs">
						<!--{loop $l['jobList'] $k $list}-->
							<a href="/job-{$list['_jid']}.html" target="_blank">{$list['jname']}</a>
						<!--{/loop}-->
					</td>
				</tr>
				<!--{/loop}-->
			</tbody>
		</table>
		<!--{if $total}-->
			<div class="page">
				{$showpage}
			</div>
		<!--{else}-->
			<div class="noDiv">暂无最新招聘信息</div>
		<!--{/if}-->
	</div>
	
	<!--{template footer}-->


</body>
</html>