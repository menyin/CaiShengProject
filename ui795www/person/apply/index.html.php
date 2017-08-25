<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>597人才网_求职中心_已申请的职位</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resumeManage.css?v=20150902" />
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
				<span class="gray9 right mgt5">安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！</span>
				<strong class="name"><a href="">已申请的职位</a></strong>
			</div>
			<!--{if $items}-->
			<div class="alert-warniong mgt15">
				<a href="javascript:void(0)" class="close">×</a>
				如果投递简历后7天内没有得到反馈，说明你获得面试机会的几率很低！
			</div>
			<table class="browse-list job-apple" id="job-apple">
				<tr>
					<th class="title"><label><input type="checkbox" />全选</label><a href="javascript:void(0)" class="gray-btn multidel">删除记录</a></th>
					<th>当前状态
						<!--
						<div class="diy-select">
							<span class="selected"><b class="jpFntWes dropIco">&#xf0d7;</b>当前状态</span>
							<ul class="select-list">
								<li><a href="/apply/">不限</a></li>
								<li><a href="/apply/index/status-0">未查看</a></li>
								<li><a href="/apply/index/status-1">HR已查看</a></li>
								<li><a href="/apply/index/status-2">同意面试</a></li>
								<li><a href="/apply/index/status-3">已拒绝</a></li>
								<li><a href="/apply/index/status-5">已停止招聘</a></li>
								<li><a href="/apply/index/status-7">已取消申请</a></li>
							</ul>
						</div>
						-->
					</th>
					<th>
						<!--
						<div class="diy-select">
							<span class="selected"><b class="jpFntWes dropIco">&#xf0d7;</b>投递简历</span>
							<ul class="select-list">
								<li><a href="/apply/">不限</a></li>
								<li><a href="/apply/index/resume_id-13032343">(默认简历)应聘：行政管理</a></li>
								<li><a href="/apply/index/resume_id-13356754">我的简历20140605</a></li>
							</ul>
						</div>
						-->
					</th>
					<th>申请时间</th>
					<th>备注</th>
					<th>操作</th>
				</tr>
				<!--
				<tr>
					<td colspan="6" class="day"><strong>全部数据</strong>（{$num_all}）</td>
				</tr>
				-->
				<!--{loop $items $l}-->
				<tr data-id="{$l[id]}">
					<td class="one">
						<input type="checkbox" title="申请中的职位无法删除" class="applycheckbox" />
						<p><a target="_blank" class="" href="{$l['jobUrl']}/job-{$l['_jid']}.html">{$l['jname']}</a><span>{$l['cname']}</span></p>
					</td>
					<!--{if $l['status']==0}-->
						<td class="orange">未查看</td>
					<!--{/if}-->
					<!--{if $l['status']==1}-->
						<td class="gray3">已查看</td>
					<!--{/if}-->
					<!--{if $l['status']==2}-->
						<td class="red">已拒绝</td>
					<!--{/if}-->
					<!--{if $l['status']==3}-->
						<td class="green">同意面试</td>
					<!--{/if}-->
					<!--{if $l['status']==9}-->
						<td class="gray">已取消申请</td>
					<!--{/if}-->
					<td>招聘人数：<!--{if $l['jobNumber']}-->{$l['jobNumber']}<!--{else}-->不限<!--{/if}--></td>
					<td>{$l['_createTime']}</td>
					<td class="hbTip"><a data-id="{$l[id]}" class="bz-icon{$l[noteStatus]}" id="bz{$l[id]}" href="" data-placement="top" data-toggle="tooltip" href="javascript:void(0);" data-original-title="<!--{if $l['note']}-->{$l['note']}<!--{else}--><p class='mgt5'>* 点击图标添加/修改备注内容</p><!--{/if}-->"></a></td>
					<td>
						<a class="sc-icon" href="javascript:void(0)" title="删除记录"></a>
						<!--<a class="qx-icon" href="javascript:void(0)" title="取消申请"></a>-->
					</td>
				</tr>
				<!--{/loop}-->
				<tr>
					<th class="title" colspan="6">
						<label><input type="checkbox" />全选</label><a href="javascript:void(0)" class="gray-btn multidel">删除记录</a>
					</th>
				</tr>
				<!--
				<tr>
					<td colspan="10">注:删除申请记录前,请先取消申请</td>
				</tr>
				-->
			</table>
			<div class="page">{$showpage}</div>
			<!--{else}-->
			<div class="noData">最近你还没有申请过职位！
				<p class="little-font">机会不等人！<a href="/">现在就去找工作»</a></p>
			</div>
			<!--{/if}-->
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
		jpjs.use('widge.overlay.jpDialog, widge.overlay.confirmBox, module.verifier',function(Dialog, confirmBox,verifier, $) {

			//取消投递
			var qxtd = new Dialog({
					idName: 'qxtd-alert',
					title: '提示',
					close: 'x',
					isAjax: false,
					initHeight: 100,
					width: 480
				});


			//取消投递
			$(".qx-icon").click(function(){
				qxtd.setContent({
					content : '<div style="padding:50px 30px;font-size:14px">取消后7天内无法重新申请，是否确定？</div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnSubmit" data-id='+$(this).closest("tr").attr("data-id")+' data-type="giveUp">确定</a><a class="btn3 btnsF12" href="#" id="btnClose">取消</a></div>',
					title : '提示'
				});
				qxtd.show();
				return false;
			});
			//删除投递
			$(".sc-icon").click(function(){
				qxtd.setContent({
					content : '<div style="padding:50px 30px;font-size:14px">一旦删除无法撤销/找回,是否确定删除？</div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnSubmit" data-id='+$(this).closest("tr").attr("data-id")+' data-type="delete">确定</a><a class="btn3 btnsF12" href="#" id="btnClose">取消</a></div>',
					title : '提示'
				});
				qxtd.show();
				return false;
			});
			//确定
			$("#btnSubmit").live("click", function(){
				$.ajax({
					url : "/api/web/job.api",
					dataType : "json",
					type : "POST",
					data : {
						act:'join_del',
						apply_id : $(this).attr("data-id"),
						operate : $(this).attr("data-type")
					},
					success : function (data) {
						if(data.status<1){
							confirmBox.alert(result.error, null, { title: '保存失败' });
							return;
						}
						confirmBox.timeBomb("操作成功！",{
							name: 'success',
							timeout:1000
						});
						qxtd.hide();
						window.location.reload();
					}
				})
			});
			//取消
			$("#btnClose,#btnBzClose").live("click",function(){
				qxtd.hide();
				return false;
			});
			//修改备注
			$(".bz-icon1,.bz-icon").click(function(){
				var _this = $(this);
				qxtd.setContent({
					content:'<div style="padding:20px"><textarea style="width:97%;height:80px;border:1px solid #ccc" id="bzText" value="'+_this.attr("data-original-title").replace("<p class='mgt5'>* 点击图标添加/修改备注内容</p>","")+'">'+_this.attr("data-original-title").replace("<p class='mgt5'>* 点击图标添加/修改备注内容</p>","")+'</textarea></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="btnBzSubmit" data-id="'+_this.attr("id")+'">保存</a><a class="btn3 btnsF12" href="#" id="btnBzClose">取消</a></div>',
					title: '修改备注'
				});
				qxtd.show();
				return false;
			});
			//关闭提示
			var warn = $(".alert-warniong");
			warn.find(".close").click(function(){warn.hide();return false;});
			//设置备注
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
				/*
				if($("#bzText").val()==''){
					$('#btnClose').click();
					return;
				}
				*/
				$.ajax({
					url : "/api/web/job.api",
					type : "POST",
					dataType : "json",
					data : {
						"act" : "note",
						"txtNote" : $("#bzText").val(),
						"txtId" : $("#"+_this.attr("data-id")).closest("tr").attr("data-id")
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
			//全选
			$("#job-apple .title label").click(function(){
				if($(this).find("input[type='checkbox']").attr("checked")){
					$("#job-apple").find("input[type='checkbox']").each(function(){
						if(!$(this).attr("disabled"))$(this).attr("checked","checked");
					})
				}else{
					$("#job-apple").find("input[type='checkbox']").removeAttr("checked");
				}
			});
			var input = $(".applycheckbox");
			input.click(function() {
				var all = $("#job-apple .title label").find("input[type='checkbox']").attr("checked", "checked");
				input.each(function() {
					if (!$(this).attr("checked") && !$(this).attr("disabled")) {
						all.removeAttr("checked");
					}
				});
			});
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

			$(".multidel").on("click", function() {
				var arr = [];
				$(".applycheckbox:checked").each(function() {
					var id = $(this).closest("tr").attr("data-id");
					arr.push(id);
				});
				var str = arr.join(",");
				if (str == "") {
					confirmBox.timeBomb("请选择职位", {
						name : "warning",
						timeout : 1000
					})
					return false;
				}
				qxtd.setContent({
					content : '<div style="padding:50px 30px;font-size:14px">一旦删除无法撤销/找回,是否确定删除？</div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="#" id="multidelSubmit" data-id='+str+' data-type="delete">确定</a><a class="btn3 btnsF12" href="#" id="btnClose">取消</a></div>',
					title : '提示'
				});
				qxtd.show();
			});
			//确定
			$("#multidelSubmit").live("click", function(){
				$.ajax({
					url : "/api/web/job.api",
					type : "POST",
					dataType : "json",
					data : {
						act:'join_multiple_del',
						apply_ids : $(this).attr("data-id")
					},
					success : function(data) {
						if (data.status>0) {
							confirmBox.timeBomb("操作成功！",{
								name: 'success',
								timeout:1000
							});
							window.location.reload();
						}else{
							confirmBox.timeBomb(data.msg, {
								name : "warning",
								timeout : 1000
							});
						}
					}
				});
			})
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
