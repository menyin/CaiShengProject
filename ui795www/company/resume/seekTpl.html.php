<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>简历搜索器_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/base.css?v=2017" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/comback.css?v=2017" />
	<link rel="stylesheet" type="text/css" href='//cdn.{ROOT_DOMAIN}/css/search_list.css?v=2017' />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
	<style>
		#btns a { margin-right: 15px;}
		.tiptxt { padding: 10px 0 10px 5px; color: #666; font-size: 12px;}
		.resumeList .jpFntWes {font-size: 14px;color: #999;margin-left: 10px;}
		.resumeList .jpFntWes.cu{color: #DF2441;}
		.lstC table tr .tplcontent{overflow: hidden;white-space: nowrap;text-overflow: ellipsis;  display: inline-block;max-width: 260px;}
		.addTplBtn{float:right;margin-top:10px; margin-right:10px;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<!--{if !$seek}-->
					<div class="noData"><p>您还没有简历搜索器！</p><a href="/company/resume/search.html" id="addTpl" class="btnsF16">添加简历搜索器</a></div>
				<!--{else}-->
				<p class="addTplBtn"><a href="/company/resume/search.html" id="addTpl" class="btn1 btnsF12">添加简历搜索器</a></p>
				<div class="part part2" >
					<div class="resBd">
						<div class="lstC">
							<div class="lstCon">
								<div class="lstBox">
									<table class="table">
										<colgroup>
											<col class="wid100" />
											<col />
											<col style="width:150px;" />
										</colgroup>
										<thead>
											<tr>
												<th>搜索器名称</th>
												<th>内容</th>
												<th>操作</th>
											</tr>
										</thead>
										<tbody id="lst" class="lst lst1">
											<!--{loop $seek $l}-->
											<tr rel="{$l['sid']}">
												<td>{$l['seekName']}</td>
												<td><p class="seekContent">{$l['seekContent']}</p></td>
												<td id="btns">
													<a href="{$l['seekLink']}">搜索</a><a href="{$l['seekLink']}&tplid={$l['sid']}" id="btnedit" >编辑</a><a href="javascript:;" id="btnDel">删除</a>
												</td>
											</tr>
											<!--{/loop}-->
										</tbody>
									</table>
								</div>
								<!--
								<div class="page">
									<div class="page">{$showpage}</div>
								</div>
								-->
							</div>
						</div>
						<p class="tiptxt" style="margin-top:10px;"><strong class="orange">提示：</strong>每个用户最多可添加20个简历搜索器</p>
					</div>
				</div>

				<!--{/if}-->
			</hgroup>
		</section>



	</div>

	<!--{template company/footer}-->

	<script type="text/javascript">
		$('.lstCon').find('tr').find('#btnDel').click(function(){
			var id = $(this).closest("tr").attr('rel');
			$.confirm('确定要删除该搜索器?','删除',function(){
				$.getJSON('/api/web/company.api',{'act':'delSeekTpl' ,tplid:id,cidHash:{$com['cid']}}, function(json) {
					if (json.status == 1){
						$.anchorMsg(json.msg);
						window.location.reload();
						return ;
					}else{
						if(json.status == 0){
							$.message(json.msg, { title: '操作失败', icon: 'fail' });
						}else{
							$.message(json.msg, { title: '操作失败', icon: 'fail' });
						}
					}
					return;
				});
			});
		});
	</script>
</body>
</html>