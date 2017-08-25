<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$pmTypeStr}-597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=20140312"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=20140312' />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/mediaquery.js?v=20140312"></script><!--响应式兼容-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_menudisplay.js?v=20140312"></script><!--下拉菜单-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=20140312"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_hovchange.js?v=20140312"></script><!--指向改变class-->
	<!--<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dragsort.js?v=20140312"></script>--><!--拖动插件-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=20140320"></script><!--下拉模拟-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_tooltip.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_autocomplete.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.email.tip.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.metadata.js?v=20140312"></script>
	<style type="text/css">
		.part h2 { font:16px 微软雅黑; height: 40px; line-height: 40px; border-bottom: 1px solid #ddd;}
		.part h2 strong { border-bottom: 2px solid #0088CC; display: block; width: 100px; text-align: center;}
		.table{margin:10px 0;}
		.table table { width: 100%; text-align: center;}
		.table table thead tr td{padding:3px 5px 5px;border-bottom:1px solid #ccc;font-weight:bold;font-size:12px;height:30px;line-height:30px; width:20%;}
		.table table tbody tr td{padding:15px 5px;font-size:12px;border-bottom:1px solid #eee;}
		.table table tbody tr td.title { text-align: left; width: 40%;}
		.count {float: right; margin-top:5px; font-size: 12px; font-family: 宋体; color: #666; }
		.count em { color: #f30; font-weight: bold; font-family: arial;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->
	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<div class="part">
					<h2><span class="count">共有<em>{$messageList['total']}</em>条消息</span><strong>{$pmTypeStr}</strong></h2>
					<div class="table">
						<table>
							<thead>
								<tr>
									<td >标题</td>
									<td>发信人</td>
									<td>阅读</td>
									<td>时间</td>
								</tr>
							</thead>
							<tbody>
								<!--{loop $messageList['message'] $message}-->
								<tr>
									<td class="title">
										<a href="/company/message/message.html?id={$message['plid']}">{$message['subject']}</a>
									</td>
									<td>
										<span class="time">{$message['_user']}</span>
									</td>
									<td>
										<span class="cash"><!--{if $message['isread']}-->已阅读<!--{else}-->未阅读<!--{/if}--></span>
									</td>
									<td>
										<span class="time">{$message['lasttime']}</span>
									</td>
								</tr>
								<!--{/loop}-->
							</tbody>
						</table>
					</div>
					<div class="page">{$showpage}</div>
				</div>

			</hgroup>
		</section>
	</div>

	<div id="sus" class="sus">
		<a class="backTop jpFntWes" title="返回顶部" href="javascript:void(0);" style="display: none;">&#xf0d8;</a>
	</div>

	<!--{template company/footer}-->

</body>
</html>