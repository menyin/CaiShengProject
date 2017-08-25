<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>职位管理_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/com_index.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/job-manage.css?v=20140513" />
	<!--<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/v2/v2-reset.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/job-manage.css?v=20140513" />-->
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/mediaquery.js?v=2017" charset="utf-8"></script><!--响应式兼容-->
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_menudisplay.js?v=2017" charset="utf-8"></script><!--下拉菜单-->
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=2017" charset="utf-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=2017" charset="utf-8"></script><!--指向改变class-->
	<!--<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_dragsort.js?v=20140312"></script>--><!--拖动插件-->
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_dropdownlist.js?v=2017" charset="utf-8"></script><!--下拉模拟-->
	<style>
		.products { border: 1px dashed #ddd; margin: 3px 0 7px 0;padding: 5px 0 5px 10px; border-radius: 5px;}
		.jobsearch{ margin: 15px 0px 0px 550px; font-size: 12px;}
		.jobsearch .drop{margin-right: 10px;}
		.freeTip{padding:200px 0px 200px 0px; font-size: 16px; text-align: center;}
	</style>
</head>
<body id="body">


	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="secL">
			<hgroup>
				<!--{template company/job/top}-->
				<div class="bd" id="TabC">
				<!--{if $com['licenceCheck']>0}-->
					<div class="formMod jobsearch">
						<form id="frmJobSearch" method="get" action="/company/job/" >
							<input type="hidden" name="status" value="{$status}">
							<div class="job"><span id="tstDropJob" class="drop zindex"></span></div>
							<div class="l">职位搜索：</div>
							<div class="r">
								 <span class="formText"><input type="text" style="width:135px; font-size:12px;" class="text" value="{$keyword}" name="keyword" id="keyword"></span>
								 <span class="seaBtn"><a href="#" class="btn3 btnsF12" id="btnJobSearch">搜索</a></span>
							</div>
						</form>
						<div class="clear"></div>
					</div>
					<div class="tabCon">
						<!--{if count($jobs)}-->
						<div class="lst lst1" id="lst1" >
							<table class="table">
								<thead>
									<tr>
										<th class="wid30">
											<span class="formChb"><input id="upAllSelect" type="checkbox" class="chb"></span>
										</th>
										<th class="wid220" style="width:220px;">职位名称</th>
										<th class="wid110">部门</th>
										<th <!--{if $status=='4'}-->class="wid300"<!--{else}-->class="wid20"<!--{/if}-->><!--{if $status=='4'}-->屏蔽原因<!--{else}-->收到的简历<!--{/if}--></th>
										<th class="wid30">排序</th>
										<th class="wid30" style="width:50px;">浏览量</th>
										<!--{if $status<4}-->
											<th class="wid110">刷新时间</th>
										<!--{/if}-->
										<th class="wid160">操作</th>
									</tr>
								</thead>
								<tbody class="lstBox" id="lstBox">
									<!--{loop $jobs $job}-->
									<tr id="li{$job[_jid]}" class="">
										<td class="wid30"><span class="formChb"><input value="{$job[_jid]}" type="checkbox" name="chkjob" class="chb" title=""></span></td>
										<td class="wid220" style="width:220px;">
											<p><a title="{$job[jname]}" class="jobName " href="{$job['jobUrl']}/job-{$job['_jid']}.html<!--{if $job['city']}-->?city={$job['city']}<!--{/if}-->" target="_blank"><!--{if $job[urgency]==1}--> <span style="color:#FF4500;">(急聘)</span><!--{/if}--> {$job[jname]}</a><!--{if $job['jobStatus']}--><b title="{$job['jobStatusStr']}">{$job['jobStatus']}</b></p><!--{/if}-->
											<!--{if $job['reply']}--><p class="pbTip">屏蔽原因: {$job['reply']}</p><!--{/if}-->
										</td>
										<td class="wid110">{$job['cuName']}</td>
										<td class="wid80"><a href="/company/resume/apply.html?jid={$job[_jid]}" title="">{$job[joinCount]}</a></td>
										<td class="wid30">{$job[dispalyOrder]}</td>
										<td class="wid30" style="width:50px;"><!--{if $job['click']}-->{$job['click']}<!--{else}-->0<!--{/if}--></td>
										<td class="wid110" ref="t">{$job[_updateTime]}</td>
										<td class="wid160">
											<span class="tipTxt">
												<!--{if $status=='1'}-->
													<a href="/company/job/tongji.html?jid={$job[_jid]}" class="lnk">效果</a>
													<a href="/company/job/job.html?act=edit&jid={$job[_jid]}" class="editLnk" >修改</a>
													<a onclick="joblist.updateJob('{$job[_jid]}')" href="javascript:void(0);" class="lnk" title="">刷新</a>
													<a onclick="joblist.stopJob('{$job[_jid]}')" href="javascript:void(0);" class="lnk">停招</a>
													<a href="/company/job/job.html?act=edit&jid={$job[_jid]}&copy=1" class="editLnk">克隆</a>
													<a onclick="joblist.tuiGuangJob('{$job[_jid]}')" href="javascript:void(0);" style="color:#f00; font-weight:bold;" title="推广您的职位">推广</a>
													<!--
													<a onclick="joblist.pushJob('{$job[_jid]}')" href="javascript:void(0);" class="lnk">推广</a>
													-->
												<!--{/if}-->
												<!--{if $status=='2'}-->
													<a href="/company/job/tongji.html?jid={$job[_jid]}" class="lnk">效果</a>
													<a href="/company/job/job.html?act=edit&jid={$job[_jid]}" class="editLnk" >修改</a>
													<a onclick="joblist.startJob('{$job[_jid]}')" href="javascript:void(0);" class="lnk">重新发布</a>
													<a onclick="joblist.delJob('{$job[_jid]}')" href="javascript:void(0);" class="lnk">删除</a>
													<a href="/company/job/job.html?act=edit&jid={$job[_jid]}&copy=1" class="editLnk">克隆</a>
												<!--{/if}-->
												<!--{if $status=='3'}-->
													<a href="/company/job/job.html?act=edit&jid={$job[_jid]}" class="editLnk" >修改</a>
													<a onclick="joblist.delJob('{$job[_jid]}')" href="javascript:void(0);" class="lnk">删除</a>
												<!--{/if}-->
											</span>
										</td>
									</tr>
									<!--{/loop}-->
								</tbody>
							</table>
							<div class="allBtn">
								<span class="formChb"><input id="downAllSelect" type="checkbox" class="chb"><label for="downAllSelect">全选</label><span id="emNum"></span></span>
								<!--{if $status=='1'}-->
								<a href="javascript:void(0);" onclick="joblist.updateJobs();" class="btn3 btnsF12">批量刷新</a>
								<a href="javascript:void(0);" onclick="joblist.stopJobs();" class="btn3 btnsF12">批量停招</a>
								<a href="javascript:void(0);" onclick="joblist.updateContact();" class="btn3 btnsF12">批量修改联系方式</a>
								<a href="javascript:void(0);" onclick="joblist.updateEmail();" class="btn3 btnsF12">批量修改邮箱</a>
								<a href="javascript:void(0);" onclick="joblist.updateAddress();" class="btn3 btnsF12">批量修改工作地点</a>
								<!--
								<a href="javascript:void(0);" onclick="joblist.bookJobs();" class="btn3 btnsF12">批量预约</a>
								-->
								<!--{/if}-->
								<!--{if $status=='2'}-->
								<a href="javascript:void(0);" onclick="joblist.startJobs();" class="btn3 btnsF12">重新发布</a>
								<!--{/if}-->
							</div>
								<div class="page">
									<div class="page">{$showpage}</div>
								</div>
						</div>
						<!--{else}-->
						<div class="noData">
							<p>没有找到职位,您可以<a href="/company/job/job.html?act=edit">发布职位</a></p>
						</div>
						<!--{/if}-->
					</div>
				<!--{else}-->
					<div class="freeTip">
						尊敬的企业用户，您的营业执照未通过审核，暂时不能发布职位。<a href="/company/account/licence.html">查看营业执照状态</a>
					</div>
				<!--{/if}-->
				</div>
			</hgroup>
		</section>
		<section class="secR" style="display:none;">
			<hgroup class="hg1">
				<p class="comName">{$com[cname]}</p>
				<p>
					<em>企业认证：</em><!--{if $com[licenceCheck]>0}--><i class="ico icoPro"></i><!--{else}--><a href="/company/account/licence.html" title="未通过企业认证"><i class="ico icounPro"></i></a><!--{/if}-->
				</p>
				<!--<p><em>资料完善度：</em><i class="red">44%</i><a href="/company/modify/">完善</a></p>-->
				<p><em>账户余额：</em><i class="red">{$user[money]}</i><a href="/company/account/pay.html" class="lnk">在线支付</a></p>
				<p><em>会员级别：</em><i class="red"><!--{if $isVip}-->VIP<!--{else}-->未开通会员<!--{/if}--></i><!--{if $isVip}--><a href="/company/service/myservice.html">我的服务</a><!--{else}--><a href="/company/service/service.html">购买服务</a><!--{/if}--></p>
				<p><em>免费职位：</em><i class="green">{$com[_jobNum]}/{FREE_JOBNUM}</i></p>
				<!--{if $isVip}-->
					<!--{loop $products $product}-->
					<div class="products">
						<p><em>合同名字：</em><i class='red'>{$product[title]}</i></p>
						<p><em>职位发布数：</em><i >{$product[_jobNum_]}</i></p>
						<p><em>简历下载数：</em><i >{$product[_resumeNum_]}</i></p>
						<!--
						<p><em>短信数：</em><i >{$product[_messageNum_]}</i></p>
						<p><em>月度下载点：</em><i >{$product[_monthDownload_]}</i></p>
						-->
						<p><em>合同有效期：</em><i class='green'>{$product[_beginTime]}~{$product[_finishTime]}</i></p>
					</div>
					<!--{/loop}-->
				<!--{/if}-->
				<!--
				<p><em>急聘点：</em><i id="urgentRemain" class="red">{$com[firstNum]}</i></p>
				<p><em>置顶点：</em><i id="residuestickpoint" class="red">{$com[topNum]}</i></p>
				-->
				<!--<p class="refresh"><a href="javascript:void(0);" onclick="joblist.refreshAll()" ><i class="jpFntWes"></i>刷新所有职位</a></p>-->
				<p align="center" class="gray" id="divRefreshTime" style="display:none">最近刷新：</p>
				<p class="release"><a target="_blank" href="/company/job/job.html?act=edit">发布职位</a></p>
			</hgroup>
			<!--
			<hgroup class="hg2" style="display:none;">
				<h3>有问题？找招聘顾问</h3>
				<dl>
					<dt><img src="//cdn.{ROOT_DOMAIN}/img/common/userPic.jpg" /></dt>
					<dd>
						<p class="name"></p>
						<p></p>
						<p style="font-size: 12px; line-height: 24px;"></p>
						<p style="margin-top: 5px;"><a target="_blank" href="#"><img border="0" src="#" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>

					</dd>
				</dl>
			</hgroup>
			-->
		</section>
		<div class="clear"></div>
	</div>

	<!--{template company/footer}-->


<script>
	var joblist = {
		initialize:function(){
			/*$.setIndex("zindex");//为需要赋层级设置的元素设置class为zindex
			$('a.more').click(function(){
				if($(this).next('#staLst').is(':hidden')){
					$('span.tipTxtBox').hide();xs
					$(this).next('#staLst').show();
				}else{
					$(this).next('#staLst').hide();
				}
			});
			$('a.spreadMore').click(function(){
				if($(this).next('span.tipTxtBox').is(':hidden')){
					$('span.tipTxtBox').hide();
					$(this).next('span.tipTxtBox').show();
				}else{
					$(this).next('span.tipTxtBox').hide();
				}
			});
			<!--			$('span.tipTxtBox').mouseout(function(even){-->
			<!--				var reltg = $(even.relatedTarget);-->
			<!--				if (reltg.closest("span.tipTxtBox").length <= 0)-->
			<!--				{-->
			<!--					$(this).hide();-->
			<!--				}-->
			<!--			});-->
			$('body').click(function(e){
				var cell = $(e.target);
				if (cell)
				{
					var tgID = $(cell).attr('id') == '' ? "string" : $(cell).attr('id');
					var isTagert = false;
					try
					{
						 isTagert = tgID!='moreSortLnk' && tgID!='moreSortLnkPic';
					}
					catch (e)
					{
						isTagert = true;
					}
					if (isTagert)
					{
						$('span.moretipTxtBox').hide();
					}
				}
			});
			$('body').click(function(e){
				var cell = $(e.target);
				if (cell)
				{
					var tgID = $(cell).attr('id') == '' ? "string" : $(cell).attr('id');
					var isTagert = false;
					try
					{
						 isTagert = tgID!='spreadMore' && tgID!='spreadLst';
					}
					catch (e)
					{
						isTagert = true;
					}
					if (isTagert)
					{
						$('span.spreadTipTxtBox').hide();
					}
				}
			});
			*/
			$('#upAllSelect').bindCheckBox('chkjob','#lstBox',1);
			$('#downAllSelect').bindCheckBox('chkjob','#lstBox',1);
			$('#upAllSelect').click(function(){
				if($(this).is(':checked')) {
					$('#downAllSelect').attr('checked','checked');
				}else {
					$('#downAllSelect').removeAttr('checked');
				}
			});
			$('#downAllSelect').click(function(){
				if($(this).is(':checked')) {
					$('#upAllSelect').attr('checked','checked');
				}else {
					$('#upAllSelect').removeAttr('checked');
				}
			});
			$('#hg3TabT').find('li').click(function(){
				if($(this).hasClass('cu')){
					return false;
				}else{
					var thisIndex = $(this).index();
					$(this).addClass('cu').siblings('li').removeClass('cu');
					$(this).parents('#hg3Tab').find('#hg3TabC').find('.hg3TabCon').eq(thisIndex).css({'display':'block'}).siblings('.hg3TabCon').css({'display':'none'})
				}
			});
			$('#lst1').find('tr').hover(function(){
				$(this).addClass('hov');
			},function(){
				$(this).removeClass('hov');
			});
			$('#urgentTips').hover(function(){
				$(this).closest('span').find('div.expBox').show();
			},function(){
				$(this).closest('span').find('div.expBox').hide();
			});
			//职位搜索
			$("#btnJobSearch").click(function(){
				$("#frmJobSearch").submit();
			})

			$('#auto-refresh').click(function(){
				var fn = $(this)
				,autostatus = fn.find('#refreshStatus').val();
				$.getJSON("/index/autorefesh/",{auto_status:autostatus},function(data){
					if(data.status=="error"){
						$.message(data.info, { title: '系统提示', icon: 'fail' });
						return;
					}

					if(data.status=="sucssus"){
						if(autostatus == 1){
							fn.find('i').addClass('open');
							fn.find('#refreshStatus').val(0);
						}else{
							fn.find('i').removeClass('open');
							fn.find('#refreshStatus').val(1);
						}

						$.anchorMsg(data.info);
					}
				});
			});

			$('.watermark').watermark2();

			$.setIndex("zindex");//为需要赋层级设置的元素设置class为zindex
			$('#tstDropJob').droplist({
				defaultTitle:'按部门查看',
				style:'width:110px;',
				noSelectClass:'gray',
				inputWidth:100,
				width:100,
				hddName:'cuid',
				items:{$unitArrStr},
				selectValue:"{$_GET['cuid']}",
				maxScroll:10,
				onSelect:function(i,name) {
					//选中后的事件
					$('#btnJobSearch').click();
			}});
		},
		goTop:function(job_id){
			$.getJSON('/index/gotop/',{job_id:job_id}, function(json) {
				if(json.error){
					$.message(json.error, { title: '系统提示', icon: 'fail' });
					return;
				}
				if(json.success){
					$.anchorMsg('置顶成功');
					var tempContent = '<tr id="li' + job_id + '">' + $("#li"+job_id).html() + '</tr>';
					var content = $(tempContent);
					if(content.find('#staLst').find('a').length == 4){
						content.find('#staLst').find('a:eq(1)').remove();
					}
					content.find('a.more').click(function(){
						if($(this).next('#staLst').is(':hidden')){
							$('span.tipTxtBox').hide();
							$(this).next('#staLst').show();
						}else{
							$(this).next('#staLst').hide();
						}

					});
			<!--					content.find('span.tipTxtBox').mouseout(function(even){-->
			<!--						var reltg = $(even.relatedTarget);-->
			<!--						if (reltg.closest("span.tipTxtBox").length <= 0)-->
			<!--						{-->
			<!--							$(this).hide();-->
			<!--						}-->
			<!--					});-->
					content.hover(function(){
						$(this).addClass('hov');
					},function(){
						$(this).removeClass('hov');
					});
					$("#li"+job_id).remove();
					$('#lstBox').prepend(content);
					if($('#lstBox').find('tr').length > 1){
						var secondid = $('#lstBox').find('tr:eq(1)').find(':input[name="chkjob"]').val();
						$('#lstBox').find('tr:eq(1)').find('#staLst').find('a:eq(0)').after('<a href="javascript:void(0);" onclick="joblist.goTop('+secondid+')">置顶</a>');
					}
				}
			});
		},
		updateJob:function(job_id){
			$.getJSON('/api/web/job.api',{'act':'updateJob' ,jid:job_id ,cidHash:{$cid}}, function(json) {
				if (json.status >0){
					$.anchorMsg(json.msg);
					window.location.href = window.location.href;
					/*
					if (json.updateTime){
						$('#li'+job_id+' [ref=t]').html(json.updateTime);
					}
					*/
				}else{
					if (json.status == 0){
						$.message(json.msg, { title: '刷新失败!', icon: 'fail' });
						return;
					}else{
						$.message(json.msg, { title: '刷新失败', icon: 'fail' });
						return;
					}
				}
				return;
			});
		},
		updateJobs:function(){
			var job_id = this.getCheckedJob();
			if(job_id.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.getJSON('/api/web/job.api',{'act':'updateJobs' ,jid:job_id ,cidHash:{$cid}}, function(json) {
				if (json.status >0){
					$.anchorMsg(json.msg);
					window.location.reload();
					return ;
					if (json.updateTime){
						for (var i = json.jid.length - 1; i >= 0; i--) {
							$('#li'+json.jid[i]+' [ref=t]').html(json.updateTime);
						};
					}
				}else{
					if (json.status == 0){
						$.message(json.msg, { title: '刷新失败!', icon: 'fail' });
					}else{
						$.message(json.msg, { title: '刷新失败', icon: 'fail' });
					}
				}
				return;
			});
		},
		stopJob:function(job_id){
			$.confirm('停止招聘后，职位将不再被求职者看到，确定停止吗？', '操作提示', function() {
				$.getJSON('/api/web/job.api',{'act':'stopJob',jid:job_id,cidHash:{$cid}}, function(json) {
					if (json.status >0){
						$.anchorMsg(json.msg);
						$('#li'+job_id).remove();
						window.location.href=window.location.href;
					}else{
						if(json.status == 0){
							$.message(json.msg, { title: '停止招聘', icon: 'fail' });
						}else{
							$.message(json.msg, { title: '停止招聘', icon: 'fail' });
						}
					}
					return;
				});
			});
		},
		stopJobs:function(){
			var job_id = this.getCheckedJob();
			if(job_id.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.confirm('停止招聘后，职位将不再被求职者看到，确定停止吗？', '操作提示', function() {
				$.getJSON('/api/web/job.api',{'act':'stopJobs' ,jid:job_id,cidHash:{$cid}}, function(json) {
					if (json.status > 0){
						$.anchorMsg(json.msg);
						window.location.href=window.location.href;
						return ;
						for (var i = json.jid.length - 1; i >= 0; i--) {
							$('#li'+json.jid[i]).remove();
						};
					}else{
						if(json.status == 0){
							$.message(json.msg, { title: '停止招聘', icon: 'fail' });
						}else{
							$.message(json.msg, { title: '停止招聘', icon: 'fail' });
						}
					}
					return;
				});
			});
		},
		startJob:function(job_id){
			$.confirm('确定重新发布？',function(){
				$.getJSON('/api/web/job.api',{'act':'startJob',jid:job_id,cidHash:{$cid}}, function(json) {
					if (json.status > 0){
						$.anchorMsg('发布成功');
						$('#li'+job_id).remove();
						window.location.href=window.location.href;
					}else{
						if(json.status == 0){
							$.message(json.msg, { title: '发布失败', icon: 'fail' });
						}else{
							$.message(json.msg, { title: '发布失败', icon: 'fail' });
						}

					}
					return;
				});
			});
		},
		startJobs:function(){
			var job_id = this.getCheckedJob();
			if(job_id.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.getJSON('/api/web/job.api',{'act':'startJobs' ,jid:job_id,cidHash:{$cid}}, function(json) {
				if (json.status == 1){
					$.anchorMsg(json.msg);
					window.location.href=window.location.href;
					return ;
					for (var i = json.jid.length - 1; i >= 0; i--) {
						$('#li'+json.jid[i]).remove();
					};
				}else{
						if(json.status == 0){
							$.message(json.msg, { title: '重新发布', icon: 'fail' });
							return;
						}else{
							$.message(json.msg, { title: '重新发布', icon: 'fail', onclose:function(){
								window.location.href=window.location.href;
							}});
							return;
						}
				}
				return;
			});
		},
		//批量更改联系方式
		updateContact:function(){
			var job_id = this.getCheckedJob();
			if(job_id.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.showModal('/company/job/updateContact.html?act=linkWay&job_id=' + job_id + '&v='+Math.random()+'',{title:'批量修改联系方式'});
		},
		//批量更改邮箱
		updateEmail:function(){
			var job_id = this.getCheckedJob();
			if(job_id.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.showModal('/company/job/updateContact.html?act=email&job_id=' + job_id + '&v='+Math.random()+'',{title:'批量修改邮箱'});
		},
		//批量更改工作地点
		updateAddress:function(){
			var job_id = this.getCheckedJob();
			if(job_id.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.showModal('/company/job/updateContact.html?act=address&job_id=' + job_id + '&v='+Math.random()+'',{title:'批量修改工作地点'});
		},
		pushJob:function(job_id){
			return;
			$.getJSON('/api/web/job.api',{'act':'startJob' ,jid:job_id}, function(json) {
				if (json.status == '1'){
					$.anchorMsg('发布成功');
					$('#li'+job_id).remove();
				}else{
					$.message('发布失败', { title: '发布失败', icon: 'fail' });
				}
				return;
			});
		},
		tuiGuangJob:function(job_id){
			$.showModal('/company/job/tuiguang.html?jid='+job_id,{title:'职位推广'});
		},
		delJob:function(job_id){
			$.confirm('确定删除该职位？',function(){
				$.getJSON('/api/web/job.api',{'act':'delJob' ,jid:job_id}, function(json) {
					if (json.status == '1'){
						$.anchorMsg(json.msg);
						$('#li'+job_id).remove();
						window.location.href=window.location.href;
					}else{
						$.message(json.msg, { title: '删除职位失败', icon: 'fail' });
					}
					return;
				});
			});
		},





		checkCanUrgentJob:function(job_id){
			$.getJSON('/index/checkCanUrgentJob/',{job_id:job_id}, function(json) {
				if(json.error){
					$.message(json.error, { title: '急聘推广', icon: 'fail' });
					return;
				}
				if(json.fail){
					$.showModal('/index/Insufficient/type-urgent-v-'+Math.random()+'',{title:'急聘推广'});
				}else if(json.success){
					$.showModal('/index/showUrgentWin/jobid-'+job_id+'-obj-joblist-callback-urgentJob-v-'+Math.random()+'',{title:'急聘推广'});
				}
			});
		},
		checkCanTopJob:function(job_id){
			$.getJSON('/index/checkCanTopJob/',{job_id:job_id},function(json){
				if(json.error){
					$.message(json.error,{title:'系统提示',icon:'fail'});
					return;
				}

				if(json.fail){
					//$.message(json.fail, { title: '系统提示', icon: 'fail' });
					$.showModal('/index/TopBox/jobid-'+job_id+'-obj-joblist-callback-topJob-v-'+Math.random()+'',{title:'置顶推广'});
					return;
				}

				if(json.success){
					$.showModal('/index/TopBox/jobid-'+job_id+'-obj-joblist-callback-topJob-v-'+Math.random()+'',{title:'置顶推广'});
				}

			});
		},
		urgentJob:function(job_id,point,urgent_end_time,new_job_end_time){
			$("#li"+job_id).find('td:eq(1)').find('a.icon-ji').remove();
			$("#li"+job_id).find('td:eq(1)').find('a:eq(0)').after('<a class="icon-ji" href="javascript:void(0);" onclick="joblist.checkCanUrgentJob('+job_id+')"title="'+urgent_end_time+'"></a>');
			if(new_job_end_time != ''){
				$("#li"+job_id).find('td:eq(3)').html('<em class="gray" title="'+new_job_end_time+'结束招聘">'+new_job_end_time+'</em>');
			}
		  	$('#urgentRemain').html($('#urgentRemain').html()-point);
		  	$.anchorMsg('设置急聘成功');
		},
		topJob:function(job_id,point,top_list,new_job_end_time){
			$("#li"+job_id).find('td:eq(1)').find('a.icon-ding').remove();
			$("#li"+job_id).find('td:eq(1)').append('<a href="javascript:void(0);" onclick="joblist.checkCanTopJob('+job_id+')" class="icon-ding" title="已在'+top_list+'个关键词列表中置顶"></a>');
			if(new_job_end_time != ''){
				$("#li"+job_id).find('td:eq(3)').html('<em class="gray" title="'+new_job_end_time+'结束招聘">'+new_job_end_time+'</em>');
			}
		  	$('#residuestickpoint').html($('#residuestickpoint').html()-point);
		  	$.anchorMsg('设置置顶成功');
		},
		delayJob:function(job_id){
			$.showModal('/job/DelaySingle/job_id-'+job_id+'-obj-joblist-callback-delayJobCallback-v-'+Math.random()+'',{title:'职位延期'});
		},
		delayJobCallback:function(job_id,end_time){
			$("#li"+job_id).find('td:eq(3)').html('<em class="gray" title="'+end_time+'结束招聘">'+end_time+'</em>');
		},
		refreshJob:function(job_id){
			$.getJSON('/index/refreshjob/',{job_id:job_id}, function(json) {
				if(json.error){
					if(json.time){
						$.message("离上次刷新不足30分钟，请"+json.time+"后重试！", { title: '系统提示', icon: 'fail' });
						return;
					}
					$.message(json.error, { title: '系统提示', icon: 'fail' });
					return;
				}
				if(json.success){
					$("#refreshSpan"+job_id).html('刚刚');
					$.anchorMsg('刷新职位成功');
				}
			});
		},
		refreshAll:function(){
			$.getJSON('/index/refreshAll/v-'+Math.random()+'', function(json) {
			 	if(json.error){
					$.message(json.error, { title: '系统提示', icon: 'fail' });
					return;
				}
				if(json.fail){
					$.message(json.failitem, { title: '系统提示', icon: 'fail' });
					return;
				}
				if(json.success){
					$("#divRefreshTime").html('最近刷新：'+json.refreshtime).show();
					$.anchorMsg('刷新全部职位成功');
				}
				return;
			});
		},
		refreshAllJob:function(){
			$.getJSON('/index/refreshalljob/&v='+Math.random(), function(json) {
				if(json.error){
					$.message(json.error, { title: '刷新职位', icon: 'fail',okBtnName:'我知道了' });
					return;
				}
				if(json.fail){
					$.message(json.failitem, { title: '刷新职位', icon: 'fail',okBtnName:'我知道了' });
				}else if(json.success){
					$.anchorMsg('刷新全部职位成功');
				}
				if(json.job_ids){
					$.each(json.job_ids, function(i, item){
						$("#refreshSpan"+item).html('刚刚');
					});
				}
				return;
			});
		},
		updateLevel:function(){
			$.showModal('/job/LevelUpdate/',{title:'批量更改岗位级别'});
		},
		updateSort:function(){
			$.showModal('/job/JobSort/',{title:'批量排序'});
		},
		updatelinkway:function(){
			var jobids = this.getCheckedJob();
	   	 	if(jobids.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.showModal('/job/UpdateLinkway/jobids-' + jobids.join('-jobids-') + '-v-'+Math.random()+'',{title:'批量修改联系电话'});
		},
		batchupdatemail:function(){
			var jobids = this.getCheckedJob();
	   	 	if(jobids.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.showModal('/job/UpdateMail/jobids-' + jobids.join('-jobids-') + '-v-'+Math.random()+'',{title:'批量修改邮箱'});
		},
		batchstopJob:function(){
			var jobids = this.getCheckedJob();
	   	 	if(jobids.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
			$.showModal('/job/BatchStopJob/jobids-' + jobids.join('-jobids-') + '-v-'+Math.random()+'',{title:'批量停用职位'});
		},
		getCheckedJob:function(){
			var checkboxs = $('#lstBox').find('input[name="chkjob"]:checked'),
			jobids = [];
	   	   	for(var i=0,len=checkboxs.length;i<len;i+=1) {
	   	   		jobids.push($(checkboxs[i]).val());
	   	   	}
	   	   	return jobids;
		},
		refreshChooseJobs:function(){
			var checkboxs = $('#lstBox').find('input[name="chkjob"]:checked'),
				jobids = [];
	   	   	for(var i=0,len=checkboxs.length;i<len;i+=1) {
	   	   		jobids.push($(checkboxs[i]).val());
	   	   	}
	   	 	if(jobids.length<=0) {
				$.anchor('请选择需要刷新的职位',{icon:'info'});
				return;
			}
			$.getJSON('/index/refreshchoosejob/jobids-' + jobids.join('-jobids-') + '-v-'+Math.random()+'', function(json) {
				if(json.error){
					$.message(json.error, { title: '系统提示', icon: 'fail' });
					return;
				}
				if(json.fail){
					$.message(json.failitem, { title: '系统提示', icon: 'fail' });
				}else if(json.success){
					$.anchorMsg('刷新职位成功');
				}
				if(json.job_ids){
					$.each(json.job_ids, function(i, item){
						$("#refreshSpan"+item).html('刚刚');
					});
				}
				return;
			});
		},
		delayChooseJobs:function(){
			var checkboxs = $('#lstBox').find('input[name="chkjob"]:checked'),
			jobids = [];
	   	   	for(var i=0,len=checkboxs.length;i<len;i+=1) {
	   	   		jobids.push($(checkboxs[i]).val());
	   	   	}
	   	 	if(jobids.length<=0) {
				$.anchor('请选择职位',{icon:'info'});
				return;
			}
	   	 	$.showModal('/job/DelayMulti/obj-joblist-callback-delayJobsCallback-job_ids-' + jobids.join('-job_ids-') + '-v-'+Math.random()+'"',{title:'批量延长有效期'});
		},
		delayJobsCallback:function(job_id,end_time){
			window.location.reload();
		},
		stopChooseJobs:function(){
			var checkboxs = $('#lstBox').find('input[name="chkjob"]:checked'),
				jobids = [];
	   	   	for(var i=0,len=checkboxs.length;i<len;i+=1) {
	   	   		jobids.push($(checkboxs[i]).val());
	   	   	}
	   	 	if(jobids.length<=0) {
				$.anchor('请选择需要停用的职位',{icon:'info'});
				return;
			}
   	 		$.confirm('停止招聘后，职位将不再被求职者看到，确定停止吗？', '操作提示', function() {
				$.getJSON('/index/stopchoosejob/jobids-' + jobids.join('-jobids-') + '-v-'+Math.random()+'', function(json) {
					if(json.error){
						$.message(json.error, { title: '系统提示', icon: 'fail' });
						return;
					}
					if(json.fail){
						$.message(json.failitem, { title: '系统提示', icon: 'fail' });
					}else if(json.success){
						$.anchorMsg('停止招聘成功');
					}
					if(json.job_ids){
						var count = json.job_ids.length;
						if(count > 0){
							var jobListUseCount = parseInt($("#jobListUseCount").html());
							var jobListStopCount = parseInt($("#jobListStopCount").html());
							$("#jobListUseCount").html(jobListUseCount-count);
							$("#jobListStopCount").html(jobListStopCount+count);
							$.each(json.job_ids, function(i, item){
								$("#li"+item).remove();
							});
							if($('#lstBox').find('tr').length <=0){
								$('#lst1').remove();
								$('div.noData').show();
							}
						}
					}
				});
			});
		},
		applyVip:function(isOpen){
			var title = '开通会员';
			if(isOpen){
				title = '续费会员';
			}
			$.showModal('/company/account/sub_update.html',{title:title});
		}
	};
	joblist.initialize();
	var TabC = $("#TabC"),
	sortS = TabC.find(".sort-select"),
	listChk = TabC.find("table input[type='checkbox']"),
	allChk = TabC.find(".all input");
	$("body").mousemove(function(e){
		sortS.each(function(){
			if ($(this)[0] === e.target || $.contains($(this)[0], e.target)){
				$(this).addClass("show-sort");
			}else{
				$(this).removeClass("show-sort");
			}
		});
	});
	var Ttime = null,Mtime = null;
	$("#lstBox .spreadMore").hover(function(){
		var par = $(this).parent(".tipTxt");
		par.find(".spreadTipTxtBox").show();
	},function(){
		var par = $(this).parent(".tipTxt");
			Ttime = setTimeout(function(){
				par.find(".spreadTipTxtBox").hide();
			},150);
	});
	$("#lstBox .spreadTipTxtBox").hover(function(){
		if(Ttime)clearTimeout(Ttime);
		$(this).show();
	},function(){
		$(this).hide();
	});

	$("#lstBox .more").hover(function(){
		var par = $(this).parent(".tipTxt");
		par.find(".moretipTxtBox").show();
	},function(){
		var par = $(this).parent(".tipTxt");
			Mtime = setTimeout(function(){
				par.find(".moretipTxtBox").hide();
			},150);
	});
	$("#lstBox .moretipTxtBox").hover(function(){
		if(Mtime)clearTimeout(Mtime);
		$(this).show();
	},function(){
		$(this).hide();
	});

	$("body").click(function(e){
		if(e.target.type == "checkbox"){
			var flg = true;
			listChk.each(function(){
				if(!$(this).attr("checked")) flg = false;
			});
			if(flg){
				allChk.attr("checked","checked");
			}else{
				allChk.removeAttr("checked");
			}
		}
	});
	allChk.click(function(){
		if($(this).attr("checked")){
			listChk.attr("checked","checked");
		}else{
			listChk.removeAttr("checked");
		}
	});
	var refresh = $("#auto-refresh");
	refresh.hover(function(){
		$(this).find(".alt").show();
	},function(){
		$(this).find(".alt").hide();
	});
	//搜索
	var liSchText = $("#liSchText");
	liSchText.prev("span").click(function(){liSchText.focus()})
	liSchText.focus(function(){
		$(this).prev("span").hide();
	}).blur(function(){
		if(/^[　\s]*$/.test($(this).val())){
			$(this).prev("span").show();
		}

	});
	if(!+[1,]){
		var tipTxt = $(".tipTxt");
		for(var i = 0;i<tipTxt.length;i++){
			tipTxt.eq(i).css({"z-index":tipTxt.length-i});
		}
	}
</script>
</body>
</html>