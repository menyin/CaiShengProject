
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="{$domainInfo['region_name_short']}{$industryInfo['industryClassName']}行业招聘，{$domainInfo['region_name_short']}597人才网" />
<meta name="Description" content="{$domainInfo['region_name_short']}597人才网{$industryInfo['industryClassName']}行业招聘频道为您提供各大{$domainInfo['region_name_short']}最新行业招聘信息汇总,数百家知名企业在此发布招聘信息,网上方便查找行业招聘信息,欢迎来到{$domainInfo['region_name_short']}{$industryInfo['industryClassName']}行业招聘频道找到您满意的职位" />
<title>{$domainInfo['region_name_short']}{$industryInfo['industryClassName']}行业招聘_{$domainInfo['region_name_short']}597人才网</title>
<!--[if lt IE9]  --> 
<script src="http://cdn.597.com/js/html5.js?v=20150226"></script>  
<!-- [endif] -->
 
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150529" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/front.css?v=20150428" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/datalst.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20150226"></script>
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
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.lazyload.js?v=20150226"></script>
<style>
	/* dl dt{position: absolute;text-align: right;display: block;color: #999;font-family: "微软雅黑";}
	dl dd{margin-left: 98px;white-space: nowrap;}
	dl dd a{text-decoration: none;font-family: "微软雅黑";color: #999;} */
	 .topHeader .header_fix {width: 1000px;}
 	.search_box_a button {border:none;}
 	
   </style>
</head>
<body id="body">

<!--{template top}-->

<div class="content" id="content">
	<div class="indGuid">
		<h1>{$industryInfo['industryClassName']}</h1>
		<span class="changInd">
			<a href="javascript:void(0)" class="changLnk" id="btnChangeCalling">切换行业频道<i class="jpFntWes "></i></a>
			<div class="changBox" style="display:none;" id="callingContainer">
				<div class="changBoxC">
					<b class="arr"></b>
					<div class="changBoxLst">
						<ul>
							<!--{loop $industryAll $k $l}-->
								<li><a href="/hangye-{$l['industryClassId']}/">{$l['industryClassName']}</a></li>
							<!--{/loop}-->
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</span>
		<div class="clear"></div>
	</div>
	<section class="indLogo">
		<ul>
			<!--{loop $companyArr $l}-->
				<li>
					<a href="/com-{$l['_cid']}/" target="_blank" title="{$l['cname']}"><img src="http://pic.{ROOT_DOMAIN}/pos/{$l['logo']}" /><p>{$l['cname']}</p></a>
				</li>
			<!--{/loop}-->
		</ul>
			<div class="clear"></div>
	</section>
	
	<!--{if $allCompany}-->
	<section class="indRec">
    	<h2>最新企业</h2>
        <div class="lst">
        	<ul>
        		<!--{loop $allCompany $l}-->
            	<li><a href="/com-{$l['_cid']}/" target="_blank">{$l['cname']}</a></li>
            	<!--{/loop}-->
    	    </ul>
            <div class="clear"></div>
        </div>
	</section>
	<!--{/if}-->
</div>

<!--{template footer}-->
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$('#btnChangeCalling').click(function(){
		if($('#callingContainer').is(':hidden')) {
			$('#callingContainer').show();
		}else {
			$('#callingContainer').hide();
		}
	});
   $('body').click(function(e){
		// 检测发生在body中的点击事件,隐藏顶部个人信息
		var cell = $(e.target);
		if (cell)
		{
			var tgID = $(cell).attr('id') == '' ? "string" : $(cell).attr('id');
			var isTagert = false;
			try
			{
				 // 如果事件触发元素不是Input元素 并且不是发生在时间控件区域
				 isTagert = tgID != 'btnChangeCalling' && $(cell).closest('#btnChangeCalling').length <= 0;
			}
			catch (e)
			{
				isTagert = true;
			}
			if (isTagert)
			{
				$('#callingContainer').hide();
			}
		}
	});

		
});


</script>
</body>
</html>
