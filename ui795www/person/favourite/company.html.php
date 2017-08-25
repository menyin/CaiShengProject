<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_求职中心_关注的公司</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20140930" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
	</script>

	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
	<script type="text/javascript">
		jpjs.config({
			combos: {
				'@editResume': [
					'@validator', 'product.resume.editResume', 'product.resume.editMutilResume'
				]
			}
		});
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
	</script>

	<style type="text/css">html{overflow-y: scroll;} </style>
</head>

<body id="body" class="noResize minMain">
	<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000 clearfix">

		<!--#include virtual="/templates/default/person/menu.htm" -->
		<div class="right-main">
			<ul class="clearfix menu-tit">
				<li id="cssIndex">
					<a href="/person/favourite/">收藏的职位</a>
				</li>
				<!--<li id="cssJob">
				<a href="/person/favourite/job.html">关注的职位</a>
			</li>
			-->
			<li id="cssCompany">
				<a href="/person/favourite/company.html">关注的公司</a>
			</li>
		</ul>
		<!--{if $itemno>0}-->
		<div class="mgt20 clearfix" id="corp">
			<!--{loop $items $item}-->
			<div class="corp-item comp" data-id="{$item['_cid']}">
				<a target="_blank" href="http://www.{ROOT_DOMAIN}/com-{$item['_cid']}/" class="tit">{$item['cname']}</a>
				<a target="_blank" href="http://www.{ROOT_DOMAIN}/com-{$item['_cid']}/" class="img">
				<!--{if $item['logoUrl']}-->
					<img src="http://pic.{ROOT_DOMAIN}/logo/{$item[logoUrl]}">
				<!--{else}-->
					<img src="http://cdn.597.com/img/v2/resumeM/case-defects.jpg" />
				<!--{/if}-->
				</a>
				<p>正在招聘：</p>
				<!--{loop $item['jobs'] $job}-->
				<a target="_blank" href="{$job['jobUrl']}/job-{$job['_jid']}.html" class="link">{$job['jname']}</a>
				<!--{/loop}-->
				<a href="http://www.{ROOT_DOMAIN}/com-{$item['_cid']}/" class="goall">共 {$item['jobNum']} 个职位 >></a>
				<em class="gz"></em>
			</div>
			<!--{/loop}-->
		</div>
		
		<div class="page">{$showpage}</div>
		<!--{else}-->
		<div class="noData">对不起，找不到你想要的数据！</div>
		<!--{/if}-->
	</div>
</div>
<!--{template person/footer}-->

<script>
		jpjs.use("widge.overlay.confirmBox",function(confirmBox,$){
			var corp = $("#corp");
			corp.find(".corp-item").hover(function(){
				$(this).addClass("corp-cur");
			},function(){
				$(this).removeClass("corp-cur");
			});
			corp.delegate(".gz","click",function(){
				//这里需要ajax
				$_this = $(this);
				$.ajax({
					url : "/api/web/person.api",
					dataType : "JSON",
					data : {
						act : 'fans_del',
						cid : $_this.closest(".comp").attr("data-id")
					},
					type : "POST",
					success : function () {
						$_this.removeClass("gz").addClass("ygz");
						confirmBox.timeBomb("已取消关注",{
							name: 'success',
							timeout:1000
						});
					}
				})
			});
			corp.delegate(".ygz","click",function(){
				//这里需要ajax
				$_this = $(this);
				$.ajax({
					url : "/api/web/person.api",
					dataType : "JSON",
					data : {
						act : 'fans_save',
						cid : $_this.closest(".comp").attr("data-id")
					},
					type : "POST",
					success : function () {
						$_this.removeClass("ygz").addClass("gz");
						confirmBox.timeBomb("已添加关注",{
							name: 'success',
							timeout:1000
						});
					}
				})
			});
		});
	</script>
</body>
</html>