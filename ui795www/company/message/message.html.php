<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网</title>
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
		section.section { background: none;  font-family: 微软雅黑;}
		hgroup { padding-top: 10px; background: #fff;}
		.part h2 { font:16px 微软雅黑; height: 40px; line-height: 40px; border-bottom: 1px solid #ddd;}
		.part h2 span { border-bottom: 2px solid #0088CC; display: block; width: 100px; text-align: center;}
		.message { height: 40px; line-height: 40px; background: #FFFFCC; border: 1px solid #FFCC99; margin: 15px 0 20px; text-indent:15px;}
		.message a { text-decoration: underline;}
		.ora { color: #f30; font-family: arial;}
		.left {padding:15px 0 25px; position: relative; clear: both;}
		.left img,.right img { float: left; height: 60px; width: 60px;}
		.left p,.right p { margin-left: 75px; width: 550px; min-height: 48px; border: 1px solid #ddd; background: #f2f2f2; padding: 5px 15px; text-indent: 2em; border-radius: 4px; box-shadow: 1px 2px 5px #ccc;}
		.time { font-size: 12px; color: #777; position: absolute; bottom: 0; left: 75px;}
		.right { width: 700px; float: right; margin: 15px 0; padding-bottom: 20px; position: relative;}
		.right p { margin: 0 15px 0 0; float: right; background: #5189FF; color: #fff; border: 1px solid #5189ff;}
		.right img { float: right; }
		.right .time { left: 50px;}
		.form { background: #fff; padding:10px 20px; margin-top: 15px;}
		.form h3 { font-size: 14px; margin-bottom: 10px;}
		.form .btns { clear: both;padding-top: 10px;}
		.form .btns .btn1 { margin-left: 0; width: 100px; text-align: center;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->
	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<div class="part">
					<h2><span>{$messages['pmTypeStr']}</span></h2>
					<div class="message">标题：{$messages['subject']}</div>
					<div class="info">
						<!--{loop $messages['messages'] $message}-->
						<div class="{$message['class']}">
							<img src="http://cdn.597.com/www/images/well/tx1.jpg">
							<p>{$message['message']}</p>
							<span class="time">{$message['sendTime']}</span>					
						</div>
						<!--{/loop}-->
					</div>
					<div class="clear"></div>
				</div>			
			</hgroup>
			<div class="form">
				<h3>给Ta回复一条消息吧...</h3>
				<form action="/api/web/company.api" method="post" id="replyContent">
					<span class="formTextarea">
						<input type="hidden" name="plid" value="{$plid}">
						<textarea class="textarea" name="txtContent" id="txtContent" style="width:500px;"></textarea>
					</span>
					<p class="btns"><a href="javascript:;" id="replyBtn" class="btnsF16 btn1">回复</a></p>
				</form>
				<div class="clear"></div>
			</div>
		</section>
	</div>
	<!--{template company/footer}-->
	<script type="text/javascript">
	$('#replyBtn').click(function(){
		var txtContent=$('#txtContent').val();
		if(!txtContent||txtContent==''){
			$.message("回复内容不能为空!", { title: "操作提示", icon: "fail" });
			return false;
		}
		var data = { act: "replyMessage"};
		$('#replyContent').submitForm({ beforeSubmit: '', data: data, success:successCallBack, clearForm: false});
		return false;
	});
	function successCallBack(json){
		if(json.status>0){
			$.anchorMsg("回复成功!", { onclose: function() {
				window.location.href = '{$url}';
			}});
		}else{
			$.message("回复失败，请联系管理员!", { title: "操作提示", icon: "fail" });
			return false;
		}
	}
	</script>
</body>
</html>