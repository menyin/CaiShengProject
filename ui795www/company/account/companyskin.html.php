<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>企业展示模板_597人才网</title>
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />

	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="utf-8"></script>
	<!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_area.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_uploadify.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_calling.js?v=2017" charset="utf-8"></script>
	<style>
		#content h2 { font:16px 微软雅黑; height: 40px; line-height: 40px; border-bottom: 1px solid #ddd; margin: 20px; padding-top: 10px;}
		#content h2 strong { border-bottom: 2px solid #0088CC; display: block; width: 100px; text-align: center;}
		.btns { padding: 0 40px 20px 20px; border-bottom: 1px dashed #ccc;margin-bottom: 10px; }
		.btns a.btnsF12 { float: right; margin-left: 10px; position: relative; top: 87px; z-index: 30;}
		.btns span { position: relative;}
		.btns img {margin: 10px 10px 0 0; border: 1px solid #ccc; padding: 2px;}
		/*.btns .btn4 { position: relative; top: 100px;}*/
		.tm_body{width:1000px;margin:0 auto;}
		.tm_body #tmb_box{padding:20px;overflow:hidden; height: 300px;}
		.tm_body ul{overflow:hidden;zoom:1;width:970px;}
		.tm_body li{float:left;padding-right:25px;position:relative; margin-bottom: 15px;}
		.tm_body li img{display:block;border:3px solid #EEEEEE;border-radius:2px;cursor:pointer;}
		.tm_body li i{display:none;}
		.tm_body li.active img{border-color:#7EDC12;}
		.tm_body li.active i,.btns i{display:block;width:30px;height:30px;background:#7EDC12 url("http://cdn.597.com/www/img/v2/resume/right.png") no-repeat 5px 7px;position:absolute;bottom:3px;left:63px;border-top-left-radius:2px;}
		.btns i { bottom:4px;left:62px;}
		.tm_body li h3{margin:0;padding:0;background:rgba(0,0,0,0.45); filter:alpha(opacity=45); position:absolute;top:3px;left:3px;width:90px;height:21px;line-height:21px;color:#fff;text-align:center;font-weight:normal; font-size: 12px;}
		.tm_body .pager{padding-top:20px}
		.iframe_html{border-top:2px solid #888888;}
		.page {padding: 30px 0 30px;}
		.page a.cu { background: none repeat scroll 0 0 #3D86BC;border: 1px solid #2E76AB;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="section">
			<form action="/api/web/company.api" method="post" name="skin" id="skin">
			<h2> <strong>企业模板</strong>
			</h2>
			<p class="yahei btns">
				<a href="javascript:;" class="btnsF12 btn1" id="defaultskin" title="还原默认模板">还原默认模板</a>
				<a href="javascript:;" class="btnsF12 btn4" id="skinsave" title="保存生效">保存生效</a>
				<a href="http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/?skin={$defaultSkin}" class="btnsF12 btn1" id="skinShow" target="_blank" title="点击预览">点击预览</a>
				
				<span id="skinimg">
					<img src="http://cdn.597.com/img/skin/skinsmalpic/smallPage{$defaultSkin}.gif">
					<!-- <i></i> -->
					<!-- <a href="#" >效果预览</a> -->
				</span>
				您当前选择的模板： <em class="green">模板<em id="num">{$defaultSkin}</em></em>
			</p>
			<div class="tm_body" >
				<div id="tmb_box">
				<!--{loop $skin $l}-->
					<ul>
						<!--{loop $l $list}-->
						<li id="{$list}" <!--{if $list==$defaultSkin}-->class="active"<!--{/if}-->>
							<img src="http://cdn.597.com/img/skin/skinsmalpic/smallPage{$list}.gif">
							<i></i>
							<h3>模板{$list}</h3>
						</li>
						<!--{/loop}-->
					</ul>
				<!--{/loop}-->
				</div>
				<div class="page">
					<a href="javascript:void(0);" id="prev">上一页</a>
					<em id="pageNum">
						<a href="#" class="cu">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</em>
					<a href="javascript:void(0);" id="next">下一页</a>
				</div>
			</div>
			</form>
		</section>
	</div>
	<div class="sus" id="sus">
		<a href="javascript:void(0);" class="backTop jpFntWes">&#xf0d8;</a>
	</div>

	<!--{template company/footer}-->

	<script>
		$(document).ready(function() {
		
			$('#tmb_box').find('li').click(function(){
				var txt = $(this).find('h3').text().substring(2);
				var src = $(this).find('img').attr('src');

				$('#tmb_box li').removeClass('active');
				$(this).addClass('active');
				$('.btns').find('img').attr('src',src);
				$('#num').text(txt);
			});

			$('#pageNum a').click(function(e){
				e.preventDefault();
				$(this).addClass('cu').blur().siblings('a').removeClass('cu');
				var idx = parseInt($(this).text()) - 1;
				$('#tmb_box').find('ul').eq(idx).show().siblings('ul').hide();				
			});

			$('#prev').click(function(){
				var now = $('.page .cu').index() - 1;
				if(now > -1){
					$('#pageNum a').eq(now).addClass('cu').siblings('a').removeClass('cu');
					$('#tmb_box').find('ul').eq(now).show().siblings('ul').hide();
				}
					
			});

			$('#next').click(function(){
				var now = $('.page .cu').index() + 1;
				if(now < $('#pageNum a').length){
					$('#pageNum a').eq(now).addClass('cu').siblings('a').removeClass('cu');
					$('#tmb_box').find('ul').eq(now).show().siblings('ul').hide();
				}
					
			});

			$('#skinShow').click(function(){
				var skinid = $('#tmb_box').find('.active').attr('id');
				if(skinid){
					$(this).attr('href','http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/?skin='+skinid);
					window.open('http://www.{ROOT_DOMAIN}/com-{$com[_cid]}/?skin='+skinid,'_blank');
				}
			});
			$('#skinsave').click(function(){
				var skinid = $('#tmb_box').find('.active').attr('id');
				$('#skin').submitForm({ beforeSubmit: '', data: {act:'saveskin',skinid:skinid}, success: function(data){
					if(data.status==1){
						$.anchorMsg("保存成功");
					}else{
						$.message(data.error, { title: "操作提示", icon: "fail" });
					}
				}, clearForm: false})
				return false;
			});
			$('#defaultskin').click(function(){
				$('#skin').submitForm({ beforeSubmit: '', data: {act:'saveskin',skinid:0}, success: function(data){
					if(data.status==1){
						window.location.href='/company/account/companyskin.html';
						$.anchorMsg("保存成功");
					}else{
						$.message(data.error, { title: "操作提示", icon: "fail" });
					}
				}, clearForm: false})
				return false;				
			});

		});
	</script>

</body>
</html>