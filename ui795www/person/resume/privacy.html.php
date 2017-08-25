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
		.set-status dd{width: 180px !important}
		.set-status dd.cur a .i0 {width: 29px;background: url(http://cdn.597.com/www/img/v2/resumeM/ico-1_22.png) 0 0 no-repeat;}
		.set-status dd a .i0 {width: 29px;background: url(http://cdn.597.com/www/img/v2/resumeM/ico-1_20.png) 0 0 no-repeat;}
		.set-status dd a .i0{display: inline-block;height: 38px;vertical-align: -8px;margin-right: 15px;_vertical-align: -3px;}
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
				<a href="javascript:void(0)" class="close">×</a>
				隐私设置为公开时，企业才能搜索到你的默认简历
			</div>
			<form id="form">			
			<input type="hidden" name="blench_ids" value="{$per[banCom]}" id="hidden_ids" />
			<input type="hidden" name="open_mode" value="1" id="openmode" />
			<input type="hidden" name="add_strs" value="" id="hidden_words" />
			<input type="hidden" name="add_coms" value="" id="hidden_coms" />
			<input type="hidden" name="post" value="0" id="hidden_post" />
			<dl class="clearfix set-status">
				<dd class="<!--{if $per[display]==1}-->cur<!--{/if}-->">
					<span>正在找工作，希望受到企业的关注</span>
					<a href="javascript:void(0)" id="setopen" data-type="1"><i class="i1"></i>公开</a>
					<em class="yes"></em>
					<em class="arr-bottom"></em>
				</dd>
				<!-- 先注释掉， if到时要加标签， css要加-->
				<dd class="<!--{if $per[display]==2}-->cur<!--{/if}-->">
					<span>正在找工作，但不让企业查看电话</span>
					<a href="javascript:void(0)" id="setSmallOpen" data-type="2"><i class="i0"></i>半公开</a>
					<em class="yes"></em>
					<em class="arr-bottom"></em>
				</dd> 
				<dd class="<!--{if $per[display]==0}-->cur<!--{/if}-->">
					<span>暂时没有找工作或不想被企业关注</span>
					<a href="javascript:void(0)" id="setclose" data-type="0"><i class="i2"></i>保密</a>
					<em class="yes"></em>
					<em class="arr-bottom"></em>
				</dd>
			</dl>
			</form>
			<div class="blacklist" id="company_list" style="<!--{if $per[display]==0}-->display:none<!--{/if}-->">
				<p class="title">
					<a href="javascript:void(0)" id="addBlack">+添加</a>
					<a id="clearcontent" href="javascript:void(0)"><i class="d"></i>清空</a>
					<span>企业黑名单<span id="counts" style="<!--{if $per[display]==0}-->display:none<!--{/if}-->">（<em id="count"><!--{$banno}--></em>/<em id="max">10</em>）</span></span>
					<i class="q" title="黑名单中的企业无法搜索或查看你的简历"></i>
				</p>
				<ul class="clearfix" id="company_blench">
					<!--{loop $banList $ban}-->
					<li style="" data-id="{$ban[cid]}"><a href="javascript:void(0)" class="close">×</a><a href="javascript:void(0)">{$ban[cname]}</a></li>
					<!--{/loop}-->
				</ul>
				<p align="center" class="more" style="display:none"><a href="javascript:void(0)" id="showmore">展开更多</a></p>
			</div>
			<div class="blacklist" id="company_no_list" style="<!--{if $per[display]==1 || $per[display]==2}-->display:none<!--{/if}-->">当前设置下，任何企业都无法搜索到或查看您的简历</div>
			<p align="center" class="mgt20"><a href="javascript:void(0)" id="submit" class="btn2 btnsF16">保存设置</a></p>
		</div>
	</div>
	<!--{template person/footer}-->
	<script>
		page = 1;
		jpjs.use('widge.overlay.jpDialog, widge.overlay.confirmBox, module.verifier', function(Dialog, confirmBox,verifier, $){
			//黑名单
			var addBlack = new Dialog({
				idName: 'add-black',
				title: '添加屏蔽的企业',
				close: 'x',
				isAjax: false,
				initHeight: 100,
				width: 460
			}); 
			//
			$("#addBlack").click(function() {
				var max = parseInt($("#max").text());
				var count = parseInt($("#count").text());

				if (count == max) {
					confirmBox.timeBomb("最多只能屏蔽10家公司", {
						width:240,
						name:'warning',
						timeout:1000
					});
					return false;
				}

				addBlack.setContent('<form style="padding:15px 15px 0 15px"><input type="text" class="text" placeholder="请输入公司名称" style="width:340px" id="text-compt" /><a href="" id="search-compt" class="gray-btn" style="padding:6px 15px;margin-left:10px">搜索</a></form><div id="black-tips" style="padding:10px;line-height:25px;background-color:#fffcf2;margin:15px;color:#999"><strong>提示说明</strong><br />1、请在上方输入公司名称，搜索出您想要屏蔽的企业；<br />2、您选择并添加到黑名单的企业，将无法搜索到或查看您的简历；<br />3、建议您搜索完整的公司名称或品牌名称，以便更准确的找到您要屏蔽的企业；<br /></div><div class="ui_dialog_footer"><span class="left" id="select-num"></span><a class="btnsF12 dis-btn" href="#" id="btnWordsSubmit" >确定</a><a class="btn3 btnsF12" href="#" id="btnWordsClose">取消</a></div>');
				addBlack.show();
				return false;
			});
			//关闭提示
			var warn = $(".alert-warniong");
			warn.find(".close").click(function(){warn.hide();return false;});
			//搜索公司
			$("#search-compt").live("click",function() {
				if ($("#text-compt").val() == "") {
					return false;
				}
				$.ajax({
					url : "/api/web/person.api",
					data : {
						act : 'search_company',
						val : $("#text-compt").val()
					},
					dataType : "json",
					type : "GET",
					success : function(json) {
						$("#noData").length ? $("#noData").remove() : null;
						$("#compt-list").length ? $("#compt-list").remove() : null;
						if (json.status>0) {
							var content = "";
							for (var i = 0; i < json.company.length; i++) {
								content += '<li data-id="'+json.company[i].cid+'"><input class="re-company" type="checkbox" /><a href="javascript:void(0)">'+json.company[i].cname+'</a></li>';
							}
							var more = "";
							if (json.company.length>10) {
								more = '<li id="moredatas" style="background-color:#fffcf2;padding:15px;line-height:25px;font-size:14px;color:#999;text-align:center;height:auto;margin-top:5px">没有找到你想屏蔽的公司？<br />请输入更完整的公司名称，缩小搜索范围</li>';
							}
							$('<div style="padding:15px" class="alert-compt-list" id="compt-list"><p><label class="right" id="select"><input type="checkbox" />全选</label>请在下方选择您要屏蔽的公司</p><ul>'+content+more+'</ul></div>').insertBefore($("#black-tips").hide());
						} else {
							$('<div id="noData"><div align="center" style="padding:15px;line-height:25px;color:#;background-color:#fffcf2;margin:15px"><p style="color:#999;font-size:14px;margin-bottom:10px">对不起，没有找到你想要屏蔽的公司！</p><p style="color:#d38c16">您可以重新设置关键字进行查询！</p></div></div>').insertBefore($("#black-tips").hide());
						}
					}
				});
				return false;
			});

			//全选
			$("#select").live("click", function() {
				var _this = $(this);
				var	ul = _this.parent("p").next("ul");
				var checked = parseInt(ul.find("li").length);
				var max = parseInt($("#max").text());
				var count = parseInt($("#count").text());
				
				if (checked + count > max) {
					confirmBox.timeBomb("最多只能屏蔽10家公司", {
						width:240,
						name:'warning',
						timeout:1000
					});
					_this.find("input").removeAttr("checked");
				} else {
					if (_this.find("input").attr("checked")) {
						ul.find("li").not("#moredatas").addClass("cur");
						ul.find("input").attr("checked", "checked");
						$("#btnWordsSubmit").removeClass("dis-btn");
						$("#btnWordsSubmit").addClass("btn2");
						$("#select-num").html("已选择<strong>"+$(".alert-compt-list .cur").length+"</strong>项");
					} else {
						ul.find("li").removeClass("cur");
						ul.find("input").removeAttr("checked");
						$("#btnWordsSubmit").addClass("dis-btn");
						$("#btnWordsSubmit").removeClass("btn2");
						$("#select-num").html("");
					}
				}
			});

			//单选
			$(".alert-compt-list li").live("click", function (e) {
				var _this = $(this);
				if (_this.find("input").attr("checked")) {
					_this.addClass("cur");
				} else {
					_this.removeClass("cur");
				}

				var checked = parseInt($(".alert-compt-list input[type='checkbox']:checked").length);
				var max = parseInt($("#max").text());
				var count = parseInt($("#count").text());

				$("#select").find("input").attr("checked", "checked");
				$(".alert-compt-list input[type='checkbox']").each(function () {
					if (!$(this).attr("checked")) {
						$("#select").find("input").removeAttr("checked");
						return false;
					}
				});

				if (checked + count <= max) {
					$("input[type='checkbox']:disabled").removeAttr("disabled");
				} else {
					confirmBox.timeBomb("最多只能屏蔽10家公司", {
						width:240,
						name:'warning',
						timeout:1000
					});
					_this.find("input").removeAttr("checked");
					_this.removeClass("cur");
					$("input[type='checkbox']").each(function () {
						if (!$(this).attr("checked")) $(this).attr("disabled", "disabled");
					});
				}
				if (checked > 0) {
					$("#btnWordsSubmit").removeClass("dis-btn");
					$("#btnWordsSubmit").addClass("btn2");
					$("#select-num").html("已选择<strong>"+$(".alert-compt-list .cur").length+"</strong>项");
				} else {
					$("#btnWordsSubmit").addClass("dis-btn");
					$("#btnWordsSubmit").removeClass("btn2");
					$("#select-num").html("");
				}
			});
			
			//按钮动画
			$("#com-key").live("click", function() {
				if ($(this).attr("checked")) {
					$("#btnWordsSubmit").removeClass("dis-btn");
					$("#btnWordsSubmit").addClass("btn2");
				} else {
					$("#btnWordsSubmit").addClass("dis-btn");
					$("#btnWordsSubmit").removeClass("btn2");
				}
			});

			//取消
			$("#btnWordsClose").live("click",function() {
				addBlack.hide();
				bangongkai.hide();
				return false;
			});

			//选择开关
			$("#setopen, #setSmallOpen, #setclose").on("click", function() {
				var is_open = $(this).attr("data-type");
				var $_this = $(this);
				$_this.closest("dd").addClass("cur");
				$_this.closest("dd").siblings().removeClass("cur");
				$("#openmode").val(is_open);

				if (is_open == "1" || is_open == "2") {
					$("#company_list").show();
					$("#company_no_list").hide();
				} else {
					$("#company_list").hide();
					$("#company_no_list").show();
				}
			});

			$("#btnWordsSubmit").live("click", function () {
				if ($(this).hasClass("dis-btn")) return false;
				
				var strs = [];
				$("#company_blench li").each(function () {
					strs.push($(this).find("a").not(".close").text());
				});
				
				if ($("#com-key").attr("checked")) {
					if ($.inArray($("#com-str").html(), strs) != -1) {
						addBlack.hide();
						return false;
					}
					var count = $("#company_blench li").length;
					$("#company_blench").append("<li style='"+((count + 1 > page*10)?"display:none":"")+"' data-id='" + $("#com-str").html() + "' data-type='str'><a href='javascript:void(0)' class='close'>x</a><a href='javascript:void(0)'>" + $("#com-str").html() + "</a></li>");
					var now_count = $("#company_blench li").length;
					$("#count").text(now_count);
					setCounts();
					addBlack.hide();
				} else if ($("#compt-list").length > 0) {
					var arr = [];
					var count = $("#company_blench li").length;
					$(".re-company:checked").each(function(i) {
						if ($.inArray($(this).next().text(), strs) != -1) {
							return true;
						}
						$("#company_blench").append("<li style='"+((count + i >= page*10)?"display:none":"")+"' data-id='" + $(this).parent().attr("data-id") +"' data-type='com'><a href='javascript:void(0)' class='close'>x</a><a href='javascript:void(0)'>" + $(this).next().text() + "</a></li>");
					});
					var now_count = $("#company_blench li").length;
					$("#count").text(now_count);
					setCounts();
					addBlack.hide();
				} else {
					alert("操作失败");
				}
			});

			$("#clearcontent").on("click", function() {
				confirmBox.confirm("确定清空黑名单？", "", function() {
					var arr = new Array();
					$("#company_blench").empty();
					$("#count").text(0);
					setCounts();
					this.hide();
				}, {
					width: 300,
					close:'x'
				});
				
			});

			$("#company_blench").on("click", "li", function() {
				var string = $(this).attr("data-id");
				$(this).remove();
				$("#count").text(parseInt($("#count").text()) - 1);
				$("#company_blench li:hidden").eq(0).show();
				setCounts();
			});

			$("#showmore").on("click", function() {
				$("#company_blench").find("li:hidden").each(function(i) {
					$(this).show();
					if (i == 9) return false;
				});
				page += 1;
				if ($("#company_blench").find("li:hidden").length == 0) {
					$(this).remove();
				}
				setCounts();
			});

			$("#submit").on("click", function() {

				if($("#openmode").val()==2){
					bangongkai.show();
					return;
				}

				var com = [];
				var str = [];
				var ids = [];
				$("#company_blench li").each(function () {
					if ($(this).attr("data-type") == "com") {
						com.push($(this).attr("data-id"));
					} else if ($(this).attr("data-type") == "str") {
						str.push($(this).attr("data-id"));
					} else {
						ids.push($(this).attr("data-id"));
					}
				})
				$("#hidden_post").val(1);
				$("#hidden_coms").val(com.join(','));
				$("#hidden_words").val(str.join(','));
				$("#hidden_ids").val(ids.join(','));

				$.ajax({
					url : "/api/web/person.api",
					type : "POST",
					data : {
						act : 'privacy_save',
						blench_ids : $("#hidden_ids").val(),
						add_coms : $("#hidden_coms").val(),
						add_strs : $("#hidden_words").val(),
						open_mode : $("#openmode").val()
					},
					dataType : "json",
					success : function (data) {
						if (data.status>0) {
							confirmBox.timeBomb("设置成功", {
								name : "success",
								timeout : 1000,
								width : 200
							});
							window.location.href = "/person/";
						} else {
							confirmBox.timeBomb("设置失败，请重新设置", {
								name : "warning",
								timeout : 1000,
								width : 200
							});
						}
					}
				});
				return;
			});

			function setCounts() {
				var count = parseInt($("#count").text());
				if (count == 0) {
					$("#counts").hide();
					$("#company_blench").hide();
				} else {
					$("#counts").show();
					$("#company_blench").show();
				}
				if (count > page * 10) {
					$(".more").show();
				} else {
					$(".more").hide();
				}
			}


			//半公开提示
			var bangongkai = new Dialog({
				idName: 'add-black',
				title: '温馨提示',
				close: 'x',
				isAjax: false,
				initHeight: 100,
				width: 460
			});
			$("#setSmallOpen").click(function() {

				bangongkai.setContent('<div style="text-align:center;overflow:hidden;"><h1 style="margin-top:20px;">请先下载个人版app</h1><img style="width:200px;" src="http://cdn.597.com/www/img/brus/codePer.png" style="width: 100%;" alt=""></div><div id="black-tips" style="padding:10px;line-height:25px;background-color:#fffcf2;margin:15px;color:#999"><strong>提示说明:</strong><br/>设置为“半公开”，企业将不能查看您的联系方式，只能通过app的聊天功能联系您。请您下载app通过app进行设置简历半公开。</div><div class="ui_dialog_footer"><span class="left" id="select-num"></span></div>');
				bangongkai.show();
				return false;
			});
		});
	</script>
</body>
</html>
