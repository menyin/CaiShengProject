<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>597人才网_求职中心_收到的面试通知</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20160304" />
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

			<div class="clearfix resume-tit">
				<span class="gray9 right">安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！</span> <strong class="name"><a href="">收到的面试通知</a></strong>
			</div>
			<!--{if $items}-->
			<div class="alert-warniong mgt15">
				<a href="javascript:void(0)" class="close">×</a>
				如果对面试安排有疑问，请尽快联系面试单位，以免错过面试机会！
			</div>
			<p class="audition-tit">
				<span class="caoz">操作</span>
				<span class="beiz">邀请时间</span>
				<label>
					<input type="checkbox" />
					全选
				</label>
				<a href="javascript:void(0)" class="gray-btn multidel">删除记录</a>
				<!--
				<a href="javascript:void(0)" class="gray-btn multisetread">标记为已读</a>
				-->
			</p>
			<!--
			<p class="audition-day"> <strong>7天内</strong>
				<span>（1）</span>
			</p>
			-->
			<ul class="inter-view">
				<!--{loop $items $l}-->
				<li class="" data-id="{$l['_inviteId']}" join-id={$l['joinId']}>
					<p>
						<span class="oper">
							<i class="delete-icon" href="javascript:void(0)"></i>

							<span class="hbTip">
								<!--
								<a class="remark-icon {if $l['note']}bz-icon1{/if}" href="javascript:void(0)" id="bz{$l['_inviteId']}" data-replacement="top" data-toggle="tooltip" data-original-title="{if $l['note']}{$l['note']}{else}<p class='mgt5'>* 点击图标添加/修改备注内容</p>{/if}"></a>
								-->
								{$l['_createTime']}
							</span>

							<a class="clickOpen">点击展开详情</a>
						</span>
						<input type="checkbox" class="checkbox"/>
						<a target="_blank" href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/">{$l['info']['Companyname']}</a>
						<strong class="status">同意您面试</strong>
						<strong><a href="/job-{$l['_jid']}.html" target="_blank">{$l['jname']}</a></strong>

					</p>
					<div class="more-box">
						<ul>
							<li>
								<i class="i1"></i>
								<span>公司名称:</span>{$l['info']['Companyname']}
							</li>
							<li>
								<i class="i2"></i>
								<span>应聘职位:</span>{$l['jname']}
							</li>
							<li>
								<i class="i3"></i>
								<span>面试时间:</span>
								<!--{if $l['info']['CustomTime']==''}-->
								 	{$l['info']['_inviteDate']}（{$l['info']['_week']}）{$l['info']['_inviteTime']}
								<!--{else}-->
									{$l['info']['CustomTime']}
								<!--{/if}-->
							</li>
							<li>
								<i class="i4"></i>
								<span>面试地点:</span>
								{$l['info']['Address']}
							</li>
							<li>
								<i class="i5"></i>
								<span>联系电话:</span>
								{$l['info']['Linktel']} ({$l['info']['Linkman']})
							</li>
							<li>
								<i class="i6"></i>
								<span>其它要求:</span>
								{$l['info']['Remark']}
							</li>
						</ul>
						<p>
							<a href="javascript:void(0)" class="dis-btn btnsF14">
								<i></i>
								已接受面试
							</a>
							如果面试时间有冲突，请直接致电沟通协商
						</p>
					</div>
				</li>
				<!--{/loop}-->
			</ul>
			<ul class="inter-view"></ul>
			<p class="audition-tit">
				<label>
					<input type="checkbox" />
					全选
				</label>
				<a href="javascript:void(0)" class="gray-btn multidel">删除记录</a>
				<!--
				<a href="javascript:void(0)" class="gray-btn multisetread">标记为已读</a>
				-->
			</p>
			<!--{else}-->
			<div class="noData">
				暂无邀请，快到网站投递您的简历哦！
			</div>
			<!--{/if}-->
			<div class="page">{$showpage}</div>
		</div>

	</div>
	<!--{template person/footer}-->

	<script>
		jpjs.use('widge.overlay.jpDialog, widge.overlay.confirmBox, module.verifier',function(Dialog, confirmBox,verifier, $){
			$(".inter-view li").click(function(e){
				var e = e || window.event;
				if($(e.target).hasClass("clickOpen")|| e.target.tagName == "P"){
					var _this = $(this).find(".clickOpen");
					if(_this.html() == "点击收起"){
						_this.html("点击展开详情").parents("li").removeClass("show-all");
					}else{
						$(".show-all").removeClass("show-all");
						_this.html("点击收起").parents("li").attr("class","show-all");
						//$.post("/invite/setread/", {inviteid:_this.closest("li").attr("data-id")});
					}
					return false;
				}
			});
			$("body").click(function(){
				$(".show-all").removeClass("show-all").find(".clickOpen").html("点击展开详情");
			});
			//全选
			var allCeck = $(".audition-tit label");
			allCeck.click(function(){
				if ($(this).find("input[type='checkbox']").attr("checked")) {
					$(".inter-view").find("input[type='checkbox']").each(function() {
						if(!$(this).attr("disabled"))$(this).attr("checked","checked");
						allCeck.find("input[type='checkbox']").attr("checked","checked");
					})
				} else {
					$(".inter-view").find("input[type='checkbox']").removeAttr("checked");
					allCeck.find("input[type='checkbox']").removeAttr("checked");
				}
			});
			var input = $(".checkbox")
			input.click(function(){
				var all = $(".audition-tit label").find("input[type='checkbox']").attr("checked", "checked");
				input.each(function() {
					if(!$(this).attr("checked")) {
						all.removeAttr("checked");
					}
				});
			});
			var qxtd = new Dialog({
				idName: 'qxtd-alert',
				title: '提示',
				close: 'x',
				isAjax: false,
				initHeight: 100,
				width: 480
			});
			//删除投递
			$(".delete-icon").click(function(){
				qxtd.setContent({
					content : '<div style="padding:50px 30px;font-size:14px">一旦删除无法撤销/找回,是否确定删除？</div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnSubmit" data-id='+$(this).closest("li").attr("data-id")+'>确定</a><a class="btn3 btnsF12" href="#" id="btnClose">取消</a></div>',
					title : '提示'
				});
				qxtd.show();
				return false;
			});
			//备注弹窗
			$(".remark-icon1,.remark-icon").click(function(){
				var _this = $(this);
				qxtd.setContent({
					content:'<div style="padding:20px"><textarea style="width:97%;height:80px;border:1px solid #ccc" id="bzText" value="'+_this.attr("data-original-title").replace("<p class='mgt5'>* 点击图标添加/修改备注内容</p>","")+'">'+_this.attr("data-original-title").replace("<p class='mgt5'>* 点击图标添加/修改备注内容</p>","")+'</textarea></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnBzSubmit" data-id="'+_this.attr("id")+'" data-invite-id="'+_this.closest("li").attr("data-id")+'" data-join-id="'+_this.closest("li").attr("join-id")+'">保存</a><a class="btn3 btnsF12" href="#" id="btnBzClose">取消</a></div>',
					title: '修改备注'
				});
				qxtd.show();
				return false;
			});
			//确定
			$("#btnBzSubmit").live("click",function(){
				var _this = $(this);
				$("#"+_this.attr("data-id")).attr("data-original-title",$("#bzText").val()+"<p class='mgt5'>* 点击图标添加/修改备注内容</p>");
				if ($.trim($("#bzText").val()) == "") {
					$("#"+_this.attr("data-id")).removeClass("bz-icon1");
					$("#"+_this.attr("data-id")).addClass("bz-icon");
				} else {
					$("#"+_this.attr("data-id")).removeClass("bz-icon");
					$("#"+_this.attr("data-id")).addClass("bz-icon1");
				}
				$.ajax({
					url : "/api/web/job.api",
					type : "POST",
					dataType : "json",
					data : {
						"act" : "note",
						"txtNote" : $("#bzText").val(),
						"txtId" : _this.attr("data-join-id")
					},
					success : function(result) {
							if(result.status<1){
								confirmBox.alert(result.error, null, { title: '保存失败' });
								return;
							}
							confirmBox.timeBomb("操作成功！", {
								name: 'success',
								timeout : 1000
							});
							qxtd.hide();
							return false;
					}
				});
			});
			//确定
			$("#btnSubmit").live("click",function(){
				$.ajax({
					url : "/api/web/person.api",
					type : "POST",
					dateType : "json",
					data : {
						act:'invite_del',
						inviteid : $(this).attr("data-id")
					},
					success : function (json) {
						if(json.status<1){
							confirmBox.alert(json.error, null, { title: '保存失败' });
							return;
						}
						qxtd.hide();
						confirmBox.timeBomb("操作成功！", {
							name: 'success',
							timeout : 1000,
							callback : function () {
								window.location.reload();
							}
						});

					}
				});
			});
			//取消
			$("#btnClose,#btnBzClose").live("click",function(){
				qxtd.hide();
				return false;
			});
			//关闭提示
			var warn = $(".alert-warniong");
			warn.find(".close").click(function(){warn.hide();return false;});
			//批量删除面试邀请
			$(".multidel").on("click", function() {
				var arr = [];
				$(".checkbox:checked").each(function() {
					var id = $(this).closest("li").attr("data-id");
					arr.push(id);
				});
				var str = arr.join(",");
				if (str == "") {
					confirmBox.timeBomb("请选择面试记录", {
						name : "warning",
						timeout : 1000
					});
					return false;
				}
				qxtd.setContent({
					content : '<div style="padding:50px 30px;font-size:14px">一旦删除无法撤销/找回,是否确定删除？</div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="multidelSubmit" data-id='+str+'>确定</a><a class="btn3 btnsF12" href="#" id="btnClose">取消</a></div>',
					title : '提示'
				});
				qxtd.show();
			});
			//确定
			$("#multidelSubmit").live("click", function(){
				$.ajax({
					url : "/api/web/person.api",
					type : "POST",
					dataType : "json",
					data : {
						act:'invite_del',
						inviteid : $(this).attr("data-id")
					},
					success : function(data) {
						qxtd.hide();
						if (data.status) {
							confirmBox.timeBomb("删除成功", {
								timeout : 1000,
								name : "success",
								callback : function () {
									window.location.reload();
								}
							})
						}
					}
				});
			})
			//批量设置为已读
			$(".multisetread").on("click", function() {
				var arr = [];
				$(".checkbox:checked").each(function() {
					var id = $(this).closest("li").attr("data-id");
					arr.push(id);
				});
				var str = arr.join(",");
				if (str == "") {
					confirmBox.timeBomb("请选择面试记录", {
						name : "warning",
						timeout : 1000
					});
					return false;
				}

				$.ajax({
					url : "/invite/setread/",
					type : "POST",
					dataType : "json",
					data : {
						inviteid : str
					},
					success : function(data) {
						if (data.status) {
							var allCeck = $(".audition-tit label");
							$(".checkbox:checked").each(function() {
								$(this).closest("li").removeClass("have-not");
								$(this).removeAttr("checked");
							});
							confirmBox.timeBomb("设置成功", {
								timeout : 1000,
								name : "success"
							});
						} else {
							confirmBox.timeBomb(data.msg, {
								timeout : 1000,
								name : "warning"
							});
						}
					}
				});
			});

			$(".accept").on("click", function() {
				var inviteid = $(this).closest("li").attr("data-id");
				var $_this = $(this);
				$.ajax({
					url : "/invite/accept/",
					type : "POST",
					dataType : "json",
					data : {
						inviteid : inviteid
					},
					success : function(data) {
						if (data.status) {
							$_this.parent("p").html("<a class='dis-btn btnsF14' href='javascript:void(0)'>已接受面试</a>如果面试时间有冲突，请直接致电沟通协商");
						} else {
							confirmBox.timeBomb(data.msg, {
								timeout : 1000,
								name : "warning"
							});
						}
					}
				});
			});

			$(".refuse").on("click", function() {
				var inviteid = $(this).closest("li").attr("data-id");
				var $_this = $(this);
				$.ajax({
					url : "/invite/refuse/",
					type : "POST",
					dataType : "json",
					data : {
						inviteid : inviteid
					},
					success : function(data) {
						if (data.status) {
							$_this.parent("p").html("<a class='dis-btn btnsF14' href='javascript:void(0)'>已拒绝面试</a>如果面试时间有冲突，请直接致电沟通协商");
						} else {
							confirmBox.timeBomb(data.msg, {
								timeout : 1000,
								name : "warning"
							});
						}
					}
				});
			});
		});
		// 显示备注
		jpjs.use('jpjob.jobTooltip', function($){
			$('.hbTip').tooltip({
				selector: "a[data-toggle=tooltip]",html:true
			});
		});
	</script>
</body>
</html>
