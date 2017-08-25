<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>面试邀请模板_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=2017" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=2017" />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=2017' />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/mediaquery.js?v=2017" charset="UTF-8"></script><!--响应式兼容-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_menudisplay.js?v=2017" charset="UTF-8"></script><!--下拉菜单-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="UTF-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_hovchange.js?v=2017" charset="UTF-8"></script><!--指向改变class-->
	<!--<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dragsort.js?v=20140312" charset="UTF-8"></script>--><!--拖动插件-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="UTF-8"></script><!--下拉模拟-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_tooltip.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_autocomplete.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.email.tip.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.metadata.js?v=2017" charset="UTF-8"></script>
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
				<!--{if !$tpl}-->
				<div class="noData"><p>您还没有新建面试邀请模板！</p><a href="javascript:void(0);" id="addTpl" class="btnsF16">添加模板</a></div>	
				<!--{else}-->
				<p class="addTplBtn"><a href="javascript:void(0);" id="addTpl" class="btn1 btnsF12">添加模板</a></p>
				<div class="part part2" >
					<div class="resBd">
						<div class="lstC">
							<div class="lstCon">
								<div class="lstBox">
									<table class="table">
										<colgroup>
											<col class="wid100" />
											<col style="width:60px;" />
											<col style="width:60px;" />
											<col style="width:100px;" />
											<col style="width:160px;*width:120px;" />
											<col class="wid100" />
										</colgroup>
										<thead>
											<tr>
												<th>模板名称</th>
												<th>联系人</th>
												<th>联系电话</th>
												<th>面试地点</th>
												<th>面试备注</th>
												<th>操作</th>
											</tr>
										</thead>
										<tbody id="lst" class="lst lst1">
											<!--{loop $tpl $l}-->
											<tr id="tr{$l[id]}" class="resumeList" rel="{$l[id]}">
												<td>{$l['tplname']}</td>
												<td>{$l['linker']}</td>
												<td>{$l['linktel']}</td>
												<td><p class="lateJob" title="{$l['address']}">{$l['address']}</p></td>
												<td><p class="lateJob" title="{$l['content']}">{$l['content']}</p></td>
												<td id="btns">
													<a href="javascript:;" id="btnedit" >编辑</a><a href="javascript:;" id="btnDel">删除</a>
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
						<p class="tiptxt" style="margin-top:10px;"><strong class="orange">提示：</strong>每个用户最多可添加10个面试模板</p>
					</div>					
				</div>
				
				<!--{/if}-->
			</hgroup>
		</section>



	</div>

	<!--{template company/footer}-->

	<!--
	<div class="downCmtTxt">
		<p><a href="#"><i class="jpIconMoon">&#xe1b4;</i>Word文件</a></p>
		<p><a href="#"><i class="jpIconMoon">&#xe1b6;</i>Html文件</a></p>
		<p><a class="un"><i class="jpIconMoon">&#xe1b5;</i>Excel文件（暂未开放）</a></p>
	</div>
	-->

	<script>
		var inviteTpl = {
			init:function(){
				this._initEvent();
			},
			_initEvent:function(){
				$('#addTpl').click(function(){
					$.showModal('/company/resume/addInviteTpl.html',{title:'添加面试邀请模板'});
				});
				$('.lstCon').find('tr').find('#btnedit').click(function(){
					var id = $(this).closest("tr").attr('rel');
					$.showModal('/company/resume/addInviteTpl.html?id='+id,{title:'编辑面试邀请模板'});
				});
				$('.lstCon').find('tr').find('#btnDel').click(function(){
					var id = $(this).closest("tr").attr('rel');
					$.confirm('确定要删除模板?','删除',function(){
						$.getJSON('/api/web/company.api',{'act':'delInviteTpl' ,tplid:id,cidHash:{$com['cid']}}, function(json) {
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
			}
		}
		inviteTpl.init();

	</script>
</body>
</html>