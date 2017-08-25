<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_求职中心_谁浏览了我的简历</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20140930" />
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
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
	</script>
	<style type="text/css">
		html{overflow-y: scroll;}
	</style>
</head>

<body id="body" class="noResize minMain">
	<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000 clearfix">
		<!--#include virtual="/templates/default/person/menu.htm" -->
		<div class="right-main">
			<ul class="clearfix menu-tit">
				<li id="cssIndex"><a href="/person/resume/index.html">简历管理</a></li>
				<li id="cssVisit"><a href="/person/resume/visit.html">谁浏览了我</a></li>
				<li id="cssDown"><a href="/person/resume/down.html">谁下载了我</a></li>
				<li id="cssPrivacy"><a href="/person/resume/privacy.html">隐私设置</a>{$per['class']}</li>
			</ul>
			<div class="alert-warniong mgt10">
				<a href="" class="close">×</a>
				最近90天有<strong>{$num_all}</strong>家企业查看了你的简历
			</div>
			<table class="browse-list">
				<tr>
					<th>浏览时间</th>
					<th>公司名称</th>
					<th>所在行业</th>
					<th>公司地址
						<!--
						<div class="diy-select" id="diy-select">
							<span class="selected"><b class="jpFntWes dropIco">&#xf0d7;</b>公司地址</span>
							<ul class="select-list">
								<li><a href="/visit/">不限</a></li>
								<li><a href="/visit/index/resume_id-12720038">2</a></li>
								<li><a href="/visit/index/resume_id-12620422">(默认简历)</a></li>
							</ul>
						</div>
						-->
					</th>
				</tr>
				<!--{loop $items $l}-->
				<tr>
					<td>{$l[_createTime]}</td>
					<td><a target="_blank" href="/com-{$l[_cid]}/">{$l[cname]}</a></td>
					<td class="gray6">{$l['comIndustry']}</td>
					<td>{$l['comAddress']}</td>
				</tr>
				<!--{/loop}-->
			</table>
			<div class="page">{$showpage}</div>
		</div>
	</div>
	<!--{template person/footer}-->
	<script>
		function check_parents(obj, target) {
		 	if(!obj || !target) return;
		 	var parent = obj;
		 	while(parent.parentNode) {
				if(parent === target)
					return true;
				parent = parent.parentNode;
		 	}
		 	return false;
		 };
		jpjs.use(function($){
			$("#diy-select").click(function(){
				$(this).find(".select-list").show();
			});
			$("body").click(function(event) {
				var e = event;
	 			if(!check_parents(e.target,$("#diy-select")[0])){
	 				$("#diy-select").find(".select-list").hide();
				}
			});
			//关闭提示
			var warn = $(".alert-warniong");
				warn.find(".close").click(function(){warn.hide();return false;});
		});
	</script>
</body>
</html>
