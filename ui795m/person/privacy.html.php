<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/img/75x75.png" >
	<title>597人才网触屏版_企业黑名单</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m3/m_font_style.css?v=20150111">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m3/m_base.css?v=20150111">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m3/personage.css?v=20150111">
	<style>
		.tip {text-align: left; margin:10px 0 10px 10px;}
		footer p {text-align: center;}
		header.pubtop .cent p b {font-size: 18px;}
		#closeSearch {line-height: 42px; text-align: center; color:#fff;}
	</style>
</head>
<body>
<div class="content" id="content">
	<style>
	header {background: #E8352E; box-shadow:none;}
	.selectParts {top:45px;}
	.j_searchTop {height: 44px; background-color: #fff; border-bottom:none; overflow: hidden;}
	.j_searchTop .logo{ width:120px; height:44px; background:url(http://cdn.597.com/m/images/597logo.png)no-repeat; float:left; margin-left:10px; background-size:120px 44px;}
	.j_searchTop .position{ font-size:12px; color:#686868; line-height:44px; max-width:60px; float:left; margin-left:15px; overflow:hidden; white-space:nowrap;}
	.j_searchTop .position .icon{ margin-top:18px;}
	.j_searchTop .position .text{ padding-right:5px;}
	.j_searchTop .login_btn{ right:10px; font-size:16px; line-height:44px; color:#686868; float:right;}
	.j_searchTop .login_btn a{ color:#666;padding:5px; font-size: 16px;}
	/*面包屑*/
	.bread{ float:left; height:40px; width:98%;line-height:40px;border-bottom: 1px solid #ddd;
	 margin: 0 10px;
	}
	.bread_text{ text-align:left;}
	.bread_text a{ margin:0 5px;}
	</style>
<!--{template header}-->
	<header class="pubtop">
		<a href="/person" class="back jpFntWes" style="text-align:center;">&#xf053;</a>
		<a href="javascript:void(0)" style="display:none;" class="navBtn" id="navBtn" name="top"> <i class="jpFntWes">&#xf00a;</i>
		</a>
		<div class="cent">
			<p> <b>企业黑名单</b>
			</p>
		</div>
		<a class="seekBtn" href="javascript:;" id="addBlench" style="color:#fff;">添加</a>
	</header>
	<nav class="pubnav" id="pubnav" style="display:none;">
		<a href="/"> <i class="jpFntWes">&#xf015;</i>
			<span>首页</span> <b></b>
		</a>
		<a href="/zhaopin/" id="schBtn">
			<i class="jpFntWes">&#xf002;</i>
			<span>职位搜索</span>
			<b></b>
		</a>
		<a href="/person/">
			<i class="jpFntWes">&#xf007;</i>
			<span>求职中心</span>
		</a>
	</nav>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#navBtn').toggle(function(){
				$('#pubnav').slideDown();
			},function(){
				$('#pubnav').slideUp();
			});
		});
	</script>
	<div class="m_master" style="display:none;filter:alpha(opacity=10);-moz-opacity:0.1;opacity: 0.1;"></div>

	<div class="juhua" style="display:none;position:fixed">
		<img src="http://cdn.597.com/m/images/loading.gif"></div>
	<script>
		 //z-index_m 背景框的 z-index;z-index-j 背景框的z-index   
		 function showLoading(z_index_m, z_index_j) {
		 	if (z_index_m == "undefined" || z_index_m == "") {
		 		z_index_m = 10;
		 	}
		 	if (z_index_j == "undefined" || z_index_j == "") {
		 		z_index_j = 11;
		 	}
		 	$(".m_master").show().css({
		 		"z-index": z_index_m
		 	});
		 	$(".juhua").show().css({
		 		"z-index": z_index_j
		 	});
		 }
		 //关闭loading
		 function closeLoading() {
		 	$(".m_master").hide();
		 	$(".juhua").hide();
		 }
	</script>
	<!--{if $banno==0}-->
	<div id="no_blench" class="blacklisTitx" > <em class="icon-svg9 "></em>
		<p>
			您还没有屏蔽任何企业，
			<br />
			所有企业均可查看您的简历
		</p>
	</div>
	<!--{else}-->
	<!--公司黑名单弹窗-->
	<div id="blenchlist">
		<div class="blacklisTit">以下企业无法查看您的简历</div>
		<ul class="blackList">
			<!--{loop $banList $ban}-->
				<li>
					<span>{$ban[cname]}</span>
					<a href="javascript:;" class="icon-svg48 deleteBlench" data-companyid="{$ban[cid]}" data-id="{$ban[cid]}"></a>
				</li>
			<!--{/loop}-->
		</ul>
	</div>
	<!--{/if}-->
	<!--公司黑名单(搜索)弹窗-->
	<div id="searchCompany" class="selectParts" style="display:none;width:100%; background:#fff">
		<div class="psgSeekBg psgPrecise">
			<span>公司黑名单</span>
			<a href="javascript:;" class="getBack jpFntWes" style="text-align:center;"  id="closeSearch">&#xf053;</a>
		</div>
		<div class="spotJobSch" style="border-bottom:1px solid #e3e6e6; background: #f5f7f7;">
			<div class="spotJobSchx" style="background:#fff;">
				<i class="icon-svg45"></i>
				<i class="icon-svg152" onclick="blench.emptyKeyword()"></i>
				<input style="background:#fff;" type="text" placeholder="输入公司名称查找并添加" name="searchkey" id="searchkey" value="" autocomplete="off"/>
			</div>
			<a href="javascript:;" id="doSearch" class="spotJSchbtn">搜索</a>
		</div>
		<div class="blacklistTip">
			1、请在上方输入完整公司名称。
			<br />
			2、597已主动屏蔽保险公司，无须额外添加。
		</div>
		<div class="loading" style="text-align:center;display:none">
			<img src="http://cdn.597.com/m/images/loading.gif" />
		</div>
	</div>

	<script>
			var company_ids_json = [{$res}];
			var company_ids = [];
			for (var m = 0; m < company_ids_json.length; m++) {
				company_ids.push(parseInt(company_ids_json[m]));
			}
			var blench = {
				init: function() {
					$("#addBlench").click(function() {
						$("#searchCompany").show();
						$("#no_blench").hide();
						$("#blenchlist").hide();
					});
					$("#closeSearch").click(function() {
						blench.closeAdd();
					});
					//删除黑名单
					$(".deleteBlench").click(function() {
						var blench_id = $(this).attr("data-id");
						var tree = $(this).parent("li");
						var company_id = $(this).attr("data-companyid");
						blench.deleteBlench(blench_id, tree, company_id);
					});
					//搜索
					$("#doSearch").click(function() {
						blench.searchCompany();
					});
					$(".icon-svg47").live("click", function() {
						var company_id = $(this).attr("data-id");
						if ($(this).hasClass("addkeyword")) {
							blench.addBlench(company_id, "str");
						} else {
							blench.addBlench(company_id, "companyids");
						}
					});

				},
				deleteBlench: function(id, tree, company_id) {
					var data = {
						act : 'del_privacy',
						"blench_id": id
					};

					showLoading();
					$.post('banCompany.html', data, function(json) {
						closeLoading();
						if (json.status<0) {
							alert("删除失败");
							return;
						}
						alert("删除成功");
						$(tree).remove();
						//删除数组中的值
						 blench.removeArray(company_ids,id);
						for (var i = 0; i < company_ids.length; i++) {
							if (parseInt(company_ids[i]) == parseInt(company_id)) {
								company_ids.splice(i);
							}
						}
						return;
					}, "json");
				},
				closeAdd: function() {
					$("#searchCompany").hide();
					var count = $("#blenchlist").find("li").length;
					blench.emptyKeyword();
					if (count > 0) {
						$("#blenchlist").show();
					} else {
						$("#no_blench").show();
					}
				},

				addBlench: function(string, type) {
					var data = {
						act : 'privacy_save',
						"str": string,
						"type": type
					};
					showLoading();
					$.post('banCompany.html', data, function(json) {
						closeLoading();
						if (json.status<0) {
							alert(json.msg);
							blench.closeAdd();
							blench.emptyKeyword();
							return;
						}
						alert('添加企业黑名单成功！');
						window.location.reload();
						return;
					}, "json");

				},
				emptyKeyword: function() {
					$("#searchkey").val("");
					$("#searchCompany .datadiv").remove();
					$(".blacklistTip").show();
				},
				searchCompany: function() {
					var keyword = $("#searchkey").val();
					if (keyword == "") {
						alert("输入的关键字不能为空");
						return;
					}
					var data = {
						val: keyword
					};
					blench.beforeSearch();
					$.post('searchCompany.html', data, function(json) {
						$(".loading").hide();
						$(".blacklistTip").hide();
						if (!json.state) {
							var html = '<ul class="blackList datadiv">' + '<li><span>' + keyword + '</span><a href="javascript:;" data-id="' + keyword + '" class="icon-svg47 addkeyword" ></a></li>' + '</ul>' + '<div class="jobFairnot datadiv">' + '<em class="icon-uniE622"></em>' + '<p>没找到相关信息，<br /> 但您可以将该关键词添加到黑名单，<br /> 系统会自动屏蔽符合条件的新注册公司</p>' + '</div>';
							$("#searchCompany").append(html);
							return;
						}
						var html = '<ul class="blackList datadiv">';
						var companys = json.company;
						for (var i = 0; i < companys.length; i++) {
							var mclass = "icon-svg47";
							if (company_ids.indexOf(parseInt(companys[i].company_id)) >= 0) {
								mclass = "icon-uniE602";
							}
							html = html + '<li><span>' + companys[i].company_name + '</span><a data-id ="' + companys[i].company_id + '" href="javascript:;" class="' + mclass + '" ></a></li>';
						}
						html = html + '</ul>';
						$("#searchCompany").append(html);
						return;

					}, "json");
				},
				beforeSearch: function() {
					$("#searchCompany .datadiv").remove();
					$(".loading").show();
				},
				removeArray: function(a, k) {
					for (var i = 0; i < a.length; i++) {
						if (a[i] == parseInt(k)) {
							a.splice(i - 1, 1);
						}
					}
				}
			};

			blench.init();
	</script></div>
<div class="dropBg" id="dropBg">&nbsp;</div>


<!--{template footer}-->
</body>
</html>
