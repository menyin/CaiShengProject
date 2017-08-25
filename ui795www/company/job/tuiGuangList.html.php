<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>职位推广管理_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/com_index.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=20140312' />

	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<style>
		#btns a { margin-right: 15px;}
		.tiptxt { padding: 10px 0 10px 5px; color: #666; font-size: 12px;}
		.resumeList .jpFntWes {font-size: 14px;color: #999;margin-left: 10px;}
		.resumeList .jpFntWes.cu{color: #DF2441;}
		.freeTip{padding:200px 0px 200px 0px; font-size: 16px; text-align: center;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->
	<style type="text/css">
	hgroup{padding:20px;}
	.part .tipTxt{font-size:16px; height:40px; line-height:40px; border-bottom: 1px #ccc solid;}
	.part .tipTxt em{color:#ff9900; margin:0 5px;}
	.part .tipTxt i.jpFntWes{font-size:14px; margin-right:5px;}
	.part .tipTxt .del{font-size:12px; margin-left:15px;}

	.recHd{background:#f9f9f9; border:1px solid #e6e6e6; padding:17px 15px 0 15px; zoom:1; height:45px; font-size:12px;}
	.recHd .tipTxt{float:left; display:inline; line-height:26px; color:#999; font-size:12px;}
	.recHd .recHdL{float:left; display:inline; width:570px;}
	.recHd .recHdL .conBox{float:left; display:inline;}
	.recHd .recHdL .conBox .job{float:left; display:inline; margin-right:10px;}
	.recHd .recHdL .conBox .time{float:left; display:inline; margin-right:10px;}
	.recHd .recHdL .conBox .sta{float:left; display:inline;}
	.recHd .recHdL .conBox .tipTxt i.jpFntWes{font-size:14px; margin-left:5px; position:absolute; right:10px; top:5px; cursor:pointer;}

	.recHd .recHdM{float:left; display:inline; width:275px;}
	.recHd .recHdM .formMod .l{width:50px; font-size:12px; margin-right:2px; color:#999;}
	.recHd .recHdM .formMod .r{width:215px;}
	.recHd .recHdM .checkMod .drop{width:378px;}

	.recHd .recHdR{float:right; display:inline; width:140px;}
	.recHd .recHdR .btns{float:left; display:inline; line-height:26px;}
	.recHd .recHdR .btns a{display:inline-block;padding:0 6px;height:22px;line-height:22px;font-size:12px; border-radius:3px;}
	.recHd .recHdR .btns a.cu{color:#333;font-weight:bold;background:#d1d1d1; cursor:text;}
	</style>
	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<!--{template company/job/top}-->
				<div class="bd" id="TabC">
					<!--{if $vip}-->
						<div class="part part1">
							<div class="tipTxt">
								<span class="num">共 <em>{$num_all}</em>条推广记录</span>
							</div>
							<!--
							<div class="recHd">
							<form id="frmApply" method="get" action="/company/job/log.html" >
								<div class="recHdL">
									<div class="tipTxt">筛选：</div>
									<div class="conBox">
										<div class="job"><span id="tstDropJob" class="drop zindex"></span></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							</form>
							-->
						</div>
						<!--{if $num_all<1}-->
							<div class="noData"><p>没有相关记录</p><p></p></div>
						<!--{else}-->
						<div class="part part2" style="margin-top:-40px;">
							<div class="resBd">
								<div class="lstC">
									<div class="lstCon">
										<div class="lstBox">
											<table class="table">
												<colgroup>
													<col class="wid185" style="width:140px;*width:100px;" />
													<col style="width:100px;" />
													<col style="width:100px;" />
													<col style="width:100px;" />
													<col style="width:100px;" />
													<col style="wid200" />
													<col class="wid200" />
													<col class="wid200" />
												</colgroup>
												<thead>
													<tr>
														<th>职位</th>
														<th>关键词</th>
														<th>天数</th>
														<th>价格</th>
														<th>总额</th>
														<th>推广开始时间</th>
														<th>推广结束时间</th>
														<th></th>
													</tr>
												</thead>
												<tbody id="lst" class="lst lst1">
													<!--{loop $list $l}-->
													<tr class="resumeList">
														<td>{$l['jname']}</td>
														<td>{$l['word']}</td>
														<td>{$l['onDay']}</td>
														<td>{$l['price']}</td>
														<td>{$l['total']}</td>
														<td>{$l['_startTime']}</td>
														<td class="time">{$l['_endTime']}</td>
														<td><a href="//{$l['region_domain']}.{ROOT_DOMAIN}/zhaopin/?q={$l['word']}" target="_blank">浏览</a></td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table>
										</div>
										<div class="page">
											<div class="page">{$showpage}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--{/if}-->
					<!--{else}-->
					<div class="freeTip">
						该功能仅收费会员方可使用，请点击<a href="/company/service/service.html">购买服务</a>
					</div>
					<!--{/if}-->
				</div>
			</hgroup>
		</section>



	</div>

	<!--{template company/footer}-->
</body>
</html>