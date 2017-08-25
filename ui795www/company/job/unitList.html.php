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
	<title>部门管理_597人才网</title>
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
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/mediaquery.js?v=2017" charset="utf-8"></script><!--响应式兼容-->
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_menudisplay.js?v=2017" charset="utf-8"></script><!--下拉菜单-->
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=2017" charset="utf-8"></script><!--输入框获取焦点-->
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=2017" charset="utf-8"></script><!--指向改变class-->
	<!--<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_dragsort.js?v=20140312"></script>--><!--拖动插件-->
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=2017" charset="utf-8"></script>-->
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=2017" charset="utf-8"></script>-->
<!--	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_dropdownlist.js?v=2017" charset="utf-8"></script><!--下拉模拟-->
	<style>
		.products { border: 1px dashed #ddd; margin: 3px 0 7px 0;padding: 5px 0 5px 10px; border-radius: 5px;}
		.jobsearch{ margin: 10px 0px -5px 660px;}
	</style>
</head>
<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="secL">
			<hgroup>
				<!--{template company/job/top}-->
				<div class="bd" id="TabC">
					<div class="formMod jobsearch" style="text-align: right;">
                        <a href="/company/job/unit.html?act=addUnit" class="btn1 btnsF12">添加部门</a>
<!--						<form id="frmJobSearch"  method="get" action="/company/job/" >-->
<!--							<input type="hidden" name="status" value="{$status}">-->
<!--							<div class="l">职位搜索：</div>-->
<!--							<div class="r">-->
<!--								 <span class="formText"><input type="text" style="width:135px; font-size:12px;" class="text" value="{$keyword}" name="keyword" id="keyword"></span>-->
<!--								 <span class="seaBtn"><a href="#" class="btn3 btnsF12" id="btnJobSearch">搜索</a></span>-->
<!--							</div>-->
<!--						</form>-->
						<div class="clear"></div>
					</div>
					<div class="tabCon">
						<!--{if $unitList}-->
						<div class="lst lst1" id="lst1" >
							<table class="table">
								<thead>
									<tr>
										<th class="wid120" >部门名称</th>
										<th class="wid100">部门联系人</th>
										<th class="wid100">部门电话</th>
										<th class="wid100">部门邮箱</th>
                                        <th class="wid220">部门地址</th>
                                        <th class="wid100">是否显示</th>
                                        <th class="wid60">排序</th>
										<th class="wid90">操作</th>
									</tr>
								</thead>
								<tbody class="lstBox" id="lstBox">
								<!--{loop $unitList $l}-->
									<tr>
										<td class="wid120" >{$l['cuName']}</td>
										<td class="wid100">{$l['linker']}</td>
										<td class="wid100">{$l['linktel']}</td>
										<td class="wid100">{$l['email']}</td>
                                        <td class="wid220">{$l['address']}</td>
                                        <td class="wid100"><!--{if $l['isshow']==1}-->显示<!--{else}-->不显示<!--{/if}--></td>
                                        <td class="wid60" >{$l['cuDisplayOrder']}</td>
										<td class="wid90">
											<span class="tipTxt">
												<a href="/company/job/unit.html?act=addUnit&cuid={$l['cuid']}" class="editLnk" >修改</a>
													<a onclick="delUnit('{$l[cuid]}')" href="javascript:void(0);" class="lnk">删除</a>
											</span>
										</td>
									</tr>
								<!--{/loop}-->
								</tbody>
							</table>

								<div class="page">
									<div class="page">{$showpage}</div>
								</div>
						</div>
						<!--{else}-->
						<div class="noData">
							<p>没有部门,您可以<a href="/company/job/unit.html?act=addUnit">添加部门</a></p>
						</div>
						<!--{/if}-->
					</div>
				</div>
			</hgroup>
		</section>
		<div class="clear"></div>
	</div>

	<!--{template company/footer}-->
	<script type="text/javascript">
		function delUnit(deptid){
			$.confirm('删除部门，该部门下的职位部门将为空,确定删除该部门？',function(){
				//ajax 删除数据
				 $.post('/api/web/company.api',{'dept_id':deptid,'act':'delUnit','cidHash':{$cid}},function(result){
					 if(result.status>0){
						$.anchorMsg('删除部门成功',{icon:'success'});
						window.location.href = window.location.href;
						return;
					 }else{
				 		if(result.status==0){
					  		$.anchorMsg(result.msg,{icon:'fail'});
				 		}else{
					 		$.anchorMsg(result.msg,{icon:'fail'});
				 		}
					 }
				 },'json')
			});
		}
	</script>
</body>
</html>