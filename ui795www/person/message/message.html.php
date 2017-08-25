<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>求职中心 我的597-597人才网(597.com)</title>   
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback.css?v=20130822" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback_cindex.css?v=20130822" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	
	<style type="text/css">
		.table td{padding: 5px 10px 5px 10px;line-height: 150%;}
	</style>


</head>
<body>
<!--{template person/header}-->
	
	<div class="container">
		<div class="containerCon">
			<!--{template person/message_left}-->
			<div class="right">
				<div class="crumbs"><b>您的位置：</b><a href="/">首页</a>&gt;<a href="/person/index.html">求职中心</a>&gt;<span>我的597</span>&gt;<span>我的消息</span></div>
				<div class="part">
					<div class="tag">
						<!--基本内容开始-->
						<div class="tagC">
							<div class="tagCon"><iframe src="/message.html" id="main" width="100%" height="1000" frameborder="0" scrolling="auto"></iframe></div>
						</div>
						<!--基本内容结束-->
					</div>   
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

<!--{template footer}-->
<script>
	$(document).ready(function() {
		dateFormate(".dateFormate",{$time});
		$('#btnSaveCompanyInfo').click(function() {
			if ($('#txtContent').val())	$('#formCompanyInfoMofidy').submit();
			return false;
		});
	});

	$("#main").load(function(){
		var mainheight = $(this).contents().find("body").height()+30;
		$(this).height(mainheight);
	}); 
</script>

</body>
</html>
