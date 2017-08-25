<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>微信绑定列表-597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />	
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />	
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/pay.css?v=20140425" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017"  charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017"  charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="utf-8"></script>
	<style type="text/css">
		.weixinlist {width: 720px; float: left;}
		.weixinImg {float: right;}
		.weixinImg p{font-size: 12px;}
		.thead th {border-bottom:1px solid #ddd; font-weight: bold;}
		.weixinlist a {margin-right: 10px;}
		.weixinlist td {text-align:left;}
		#wxlist .tl {text-align:left; text-indent: 30px; padding-left: 0;}
	</style>
</head>
<body id="body">
	<!--{template company/header}-->
	<div id="pay-main">
		<div class="pay-container">
			<div class="bd">
				<!--{if $company_wx}-->
				<div class="weixinlist" id="wxlist">
					<table class="table">
						<thead class="thead">
							<tr>
								<th width="550" class="tl">微信名称</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody id="lst" class="lst lst1">
							<!--{loop $company_wx $l}-->
							<tr rel="{$l['wxuid']}">
								<td class="tl">
									{$l['name']}
								</td>
								<td><a id="rename" href="javascript:void(0)">改名称</a> <a id="unbind" href="javascript:void(0)">解除绑定</a></td>
							</tr>
							<!--{/loop}-->
						</tbody>
					</table>
				</div>
				<div class="weixinImg">
					<img width="180" src="http://cdn.597.com/img/common/comwxCode.png" alt="">
					<p>扫一扫，绑定微信，快速了解简历投递信息</p>
				</div>
				<div class="clear"></div>
				<!--{else}-->
				<div>
					<img width="180" src="http://cdn.597.com/img/common/comwxCode.png" alt="">
					<p>您还没有绑定微信，扫一扫，绑定微信，快速了解简历投递信息</p>					
				</div>
				<!--{/if}-->
			</div>
		</div>
	</div>

	<!--{template company/footer}-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.weixinlist #lst #rename').click(function(){
				var curId = $(this).closest('tr').attr('rel');
				var curName = encodeURIComponent($(this).parent().siblings().html());

				$.showModal('/company/account/modUsername.html?act=weixin&id='+curId+'&name='+curName, {title:"改名称",showMask: true });
			});
			$('.weixinlist #lst #unbind').click(function(){
				var curId = $(this).closest('tr').attr('rel');
				$.confirm('确定要解绑该微信账号','提示',function(){
					$.post('/api/web/company.api',{act:'wxUnbindNew',wxuid:curId},function(data){
						if(data.status==1){
							$.anchor(data.msg);
							window.location.href = window.location.href;
						}else{
							$.anchor(data.msg,{icon:'fail'});
						}
					});
				});
			});
		});
	</script>
</body>
</html>
