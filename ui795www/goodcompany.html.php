
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="名企招聘,名企实习,名企人才网，{$domainInfo['region_name_short']}597人才网" />
<meta name="Description" content="{$domainInfo['region_name_short']}597人才网名企招聘频道为您提供各大{$domainInfo['region_name_short']}最新名企招聘信息汇总,名企校园招聘,数百家知名企业在此发布招聘信息,网上方便查找名企招聘信息,欢迎来到{$domainInfo['region_name_short']}名企招聘频道找到您满意的职位" />
<title>{$domainInfo['region_name_short']}名企招聘|求职_名企实习_名企人才网</title>
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

		var currentCity="{$domainInfo['region_site']}";
		
	</script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.lazyload.js?v=20150226"></script>
<style>
	
/*页面底部友情链接样式*/
.pageBot{border-top:1px solid #bbb; height:auto;width:100%; overflow:hidden;zoom:1; background:#fff;margin-top:20px;}
 .pageBotCon{width:1000px;margin:0 auto; text-align:left; border-bottom:1px solid #bbb; padding-bottom:10px;}
 footer{ margin-top:0; border-top:none;}
 .frdLink{position:relative;z-index:10;height:50px;overflow:hidden;}
 .footer{margin-top:0;}
 .frdLink b{float:left;display:inline;height:35px;font-size:12px;line-height:35px;width:70px;font-weight:normal;color:#999;}
 .frdLink .linkScroller{float:left;display:inline;line-height:25px;width:930px; height:50px; overflow:hidden;position:relative;}
 .frdLink .linkScroller ul{width:930px;position:absolute;left:0px;margin:5px 0 0;top:0px;}
 .frdLink .linkScroller ul li{float:left; display:inline-block; *display:inline;zoom:1; height:25px; line-height:25px;margin:0 10px 0 0;}
 .frdLink .linkScroller ul li a{color:#424242; display:inline; height:25px; line-height:25px;white-space:nowrap;font-size:12px;}
 .frdLink .linkScroller ul li a:hover{color:#0af;}
 .frdLink .linkScroller{ height:auto;}
 .frdLink .linkScroller ul{ position:inherit;}
 .topHeader .header_fix {width: 1000px;}
 .search_box_a button {border:none;}
</style>
</head>
<body id="body">

<!--#include virtual="/templates/default/header.htm" -->




<section class="famNav">
	<div class="famNavLst">
		<ul>
			<!--{loop $channelName $l}-->
				<li><a href="#00{$l['channel_id']}">{$l['channel_name']}</a></li>
			<!--{/loop}-->
		</ul>
	</div>
</section>
<div class="content" id="content">
	
	<section class="famLst">
        <!--{loop $company $l}-->
            <dl>
                <dt><a id="00{$l['channel_id']}"></a><h3 class="yahei">{$l['channel_name']}<b></b></h3></dt>
                <dd>
                    <ul>
                        <!--{loop $l['arr'] $list}-->
            	       <li>
            	       		<a target="_blank" href="/com-{$list['_cid']}/"><img class="lazy" data-original="http://pic.{ROOT_DOMAIN}/{$list['logo']}" src="http://cdn.597.com/img/common/grey.gif" /></a>

            	       </li>

            		   <!--{/loop}-->
                    </ul>
            	<div class="clear"></div>
                </dd>
            </dl>
        <!--{/loop}-->
	</section>
</div>

<!--{template footer}-->
<script type="text/javascript">
$(document).ready(function(){
	$("img.lazy").lazyload({
		effect:"fadeIn",
		failure_limit:5
	});
});
</script>
</body>
</html>
