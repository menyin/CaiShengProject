<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_求职中心_收藏的职位</title>
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
				<li id="cssIndex"><a href="/person/favourite/">收藏的职位</a></li>
				<!--<li id="cssJob"><a href="/person/favourite/job.html">关注的职位</a></li>-->
				<li id="cssCompany"><a href="/person/favourite/company.html">关注的公司</a></li>
			</ul>

			<!--{if $itemno>0}-->
				<table class="browse-list collect-list">
					<tr>
						<th style="width:20px"><input type="checkbox" class="select-all"/></th>
						<th>
							<a href="javascript:void(0)" class="gray-btn deliver" style="margin-left: 0px">批量投递</a>
						</th>
						<th>薪资待遇</th>
						<th>工作地点</th>
						<th>当前状态
							<!--
							<div class="diy-select" style="width:85px">
								<span class="selected"><b class="jpFntWes dropIco">&#xf0d7;</b>当前状态</span>
								<ul class="select-list">
									<li><a href="/person/favourite/">不限</a></li>
									<li><a href="/person/favourite/?status=1">招聘中</a></li>
									<li><a href="/person/favourite/?status=2">已投递简历</a></li>
									<li><a href="/person/favourite/?status=3">已结束招聘</a></li>
								</ul>
							</div>
							-->
						</th>
						<th>收藏时间</th>
						<th class="oper">操作</th>
					</tr>
						<!--{loop $items $item}-->
						<tr data-id="{$item['_jid']}" data-flag="">
							<td><input title="{$item['inputTitle']}" type="checkbox" class="items" {$item['inputCheck']}/></td>
							<td class="title">
								<a target="_blank" href="/job-{$item['_jid']}.html">{$item['jname']}</a>
								<p>{$item['cname']}</p>
							</td>
							<td class="gray3">{$item['_jobSalary']}</td>
							<td>{$item['city']}</td>
							<td class="gray9">{$item['_updateTime']}</td>
							<td class="gray9">{$item['_createTime']}</td>
							<td class="oper"><a href="javascript:void(0)" class="cancel-one">×</a></td>
						</tr>
						<!--{/loop}-->
						<tr>
							<th><input type="checkbox" class="select-all"/></th>
							<th colspan="5">
								<a href="javascript:void(0)" class="gray-btn deliver" style="margin-left: 0px">批量投递</a>
							</th>
						</tr>
				</table>
				<div class="page">{$showpage}</div>
			<!--{else}-->
				<div class="noData">对不起，找不到你想要的数据！</div>
			<!--{/if}-->
		</div>
	</div>
	<!--{template person/footer}-->

	<script>
		function check_parents(obj, target) {
			if (!obj || !target) return;
			var parent = obj;
			while (parent.parentNode) {
				if (parent === target)
					return true;
				parent = parent.parentNode;
			}
			return false;
		};
		jpjs.use('widge.overlay.jpDialog, widge.overlay.confirmBox, module.verifier',function(Dialog, confirmBox,verifier, $) {
			//下拉
			$(".diy-select").click(function(){
				$(this).find(".select-list").show();
			});
			$("body").click(function(event) {
				var e = event;
				$(".diy-select").each(function(){
					if(!check_parents(e.target,$(this)[0])){
						$(this).find(".select-list").hide();
					}
				});
			});
			//批量投递
			$(".deliver").on("click", function() {
				var arr = new Array();
				$(".items:checked").each(function() {
					arr.push($(this).closest("tr").attr("data-id"));
				});
				var str = arr.join(",");
				if (str == "") {
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
					success : function(json) {

						if(json.status==1){
							confirmBox.timeBomb("投递成功", {
								name: 'success',
								timeout : 1000
							});
							//$_this.removeClass("cancel-one").html("").css("float","none");
							//$_this.addClass("star1");
							window.location.href='/person/apply/';
						}else{
							confirmBox.timeBomb(json.msg, {
								name : "warning",
								timeout : 1000
							});
						}
					}
				});
			});
			//全选
			$(".select-all").on("click", function() {
				if ($(this).attr("checked")) {
					$("input[type='checkbox']").not(":disabled").attr("checked", "checked");
				} else {
					$("input[type='checkbox']").removeAttr("checked");
				}
			});
			var input = $(".browse-list input[type='checkbox']")
			input.click(function() {
				var all = $(".select-all").attr("checked", "checked");
				input.each(function(){
					if(!$(this).attr("checked") && !$(this).attr("disabled") && !$(this).hasClass("select-all")) {
						all.removeAttr("checked");
					}
				});
			});
			
			//单个取消收藏
			$("body").on("click", ".cancel-one", function() {
				var $_this = $(this);
				$.ajax({
					url : "/api/web/person.api",
					type : "POST",
					data : {
						act : 'favourite_del',
						jid : $(this).closest("tr").attr("data-id")
					},
					dataType : "json",
					success : function(json) {
						confirmBox.timeBomb("已取消收藏", {
							name: 'success',
							timeout : 1000
						});
						$_this.removeClass("cancel-one").html("").css("float","none");
						$_this.addClass("star1");
					}
				});
			});
			//单个恢复收藏
			$("body").on("click", ".star1", function() {
				var $_this = $(this);
				$.ajax({
					url : "/api/web/person.api",
					type : "POST",
					data : {
						act : 'favourite_save',
						jid : $(this).closest("tr").attr("data-id")
					},
					dataType : "json",
					success : function(json) {
						confirmBox.timeBomb("已收藏", {
							name: 'success',
							timeout : 1000
						});
						$_this.removeClass("star1").html("×").removeAttr("style");
						$_this.addClass("cancel-one");
					}
				});
			});
		});
	</script>
</body>
</html>
