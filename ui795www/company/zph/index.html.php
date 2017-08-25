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
	<title>招聘会管理_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/com_index.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/job-manage.css?v=20140513" />
	<!--<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/v2/v2-reset.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/job-manage.css?v=20140513" />-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/mediaquery.js?v=2017" charset="utf-8"></script><!--响应式兼容-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_menudisplay.js?v=2017" charset="utf-8"></script><!--下拉菜单-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="utf-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_hovchange.js?v=2017" charset="utf-8"></script><!--指向改变class-->
	<!--<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dragsort.js?v=2017" charset="utf-8"></script>--><!--拖动插件-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="utf-8"></script><!--下拉模拟-->
	<style>
		.products { border: 1px dashed #ddd; margin: 3px 0 7px 0;padding: 5px 0 5px 10px; border-radius: 5px;}
	</style>
</head>
<body id="body">


	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="secL">
			<hgroup>
				<div class="hd" id="tab">
					<div class="tabT" id="TabT">
						<div class="l">
							<ul>
								<li class="cu"><a href="/company/zph/">已参加招聘会 (<em id="jobListUseCount">{$num_all}</em>)<b></b></a></li>
								<li><a href="/zph">全部招聘会</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="bd" id="TabC">
					<div class="tabCon">
						<!--{if $zph_company}-->
						<div class="lst lst1" id="lst1" >
							<table class="table">
								<thead>
									<tr>
										<th class="wid300">招聘会名称</th>
										<th class="wid120">地点</th>
										<th class="wid120">开始时间</th>
										<th class="wid120">结束时间</th>
										<th class="wid90">状态</th>
										<th class="wid140">操作</th>
									</tr>
								</thead>
								
								<tbody class="lstBox" id="lstBox">
									<!--{loop $zph_company $l}-->
									<tr id="li{$job[_jid]}" class="">
										<td class="wid300">
											<a href="/zph/{$l['zph_id']}.html" target="_blank">{$l['zph_off_name']}</a>
										</td>
										<td class="wid120">{$l['zph_off_address']}</td>
										<td class="wid120">{$l['zph_off_beginTime']}</td>
										<td class="wid120">{$l['zph_off_finishTime']}</td>
										<td class="wid90">
											<!--{if $l['status']>0}-->
												<span class="blue">参展成功</span>
											<!--{else}-->
												<!--{if $l['isCheck']==0}--><span class="orange">审核中</span><!--{/if}-->
												<!--{if $l['isCheck']==1}--><span class="orange">不通过</span><!--{/if}-->
												<!--{if $l['isCheck']==2}--><span class="blue">通过</span><!--{/if}-->
											<!--{/if}-->
										</td>
										<td class="wid140">
											<span class="tipTxt">
												<a href="/company/zph/detail.html?act=edit&id={$l['id']}&zph_id={$l['zph_id']}" class="editLnk" >修改</a>
												<!--{if $l['isCheck']==2&&$l['status']<1}-->
													<a onclick="payzph('{$l[id]}')" href="javascript:void(0);" class="lnk">付款</a>
												<!--{/if}-->
												<a onclick="delzph('{$l[id]}')" href="javascript:void(0);" class="lnk">删除</a>
											</span>
										</td>
									</tr>
									<!--{/loop}-->
								</tbody>
							</table>
							<div class="allBtn">
							</div>
							
								<div class="page">
									<div class="page">{$showpage}</div>
								</div>
						</div>
						<!--{else}-->
						<div class="noData">
							<p>您还没参加招聘会,点击<a href="/zph/" target="_blank">查看招聘会</a></p>
						</div>
						<!--{/if}-->
					</div>
				</div>
			</hgroup>
		</section>
	</div>

	<!--{template company/footer}-->


	<script type="text/javascript">
	function delzph(id){
		$.confirm('确定删除该招聘会？',function(){
			$.post('/api/web/company.api',{'act':'del' ,id:id}, function(json) {
				if (json.status == 1){
					$.anchorMsg(json.msg);
					window.location.href=window.location.href;
				}else{
					$.message(json.msg, { title: '删除招聘会失败', icon: 'fail' });
				}
				return;
			});
		});
	}
	function payzph(id){
		$.confirm('确定付款该招聘会？',function(){
			$.post('/api/web/company.api',{'act':'payzph' ,id:id}, function(json) {
				if (json.status == 1){
					$.anchorMsg(json.msg);
					window.location.href=window.location.href;
				}else{
					$.message(json.msg, { title: '付款招聘会失败', icon: 'fail' });
				}
				return;
			});
		});
	}
	</script>
</body>
</html>