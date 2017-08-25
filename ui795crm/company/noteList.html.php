<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	.cBtns { display: inline-block; position: relative; padding:3px 10px; color:#444; background: #f2f2f2; border:1px solid #ddd; cursor: pointer; margin:5px 0; _display:none;}
	.cBtns:hover {color:#000; background: #d8d8d8;}
</style>
<body>
	<div id="content">
		<!--{template nav}-->
		<div id="contentBody" style="visibility: visible;">
			<!--  小贴士 start  -->
			<div id="tips" class="hide" style="width: 256px;display:none">
			<div class="tips" style="">
				<div class="tips-title" style="">小贴士
					<div class="btn_close"></div>
				</div>
				<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
					<div class="title">
						<div data-bind="text: cat">常见问题</div>
					</div>
					<div data-bind="foreach: links">
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
						</div>

						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
						</div>
					</div>
					<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
						<div class="more">
							<div>
								更多：
								<a href="#" target="_blank">帮助中心</a> &nbsp;
								<a href="#" target="_blank">售后支持</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="draggle">
			</div>
			</div>
			<!--  小贴士 end  -->
			<div class="content" style="">
				<div id="main" class="security-groups" style="">
					<div class="title">
						<div class="m_bg">企业其他管理 > 企业备注</div>
					</div>
					<div class="quickbar">
						<div class="note">小贴士</div>
						<div class="btns">
							<div class="btn-line clearfix">
								<ul>
									<form method="get" id="conList" name="conList" action="">
									<input type="hidden" name="act" value="{$act}">
									<li class="ml_10">
										<input type="text" name="q" id="q" style="width:180px;" value="{$_GET['q']}" placeholder="企业名称">
									</li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
							</div>
						</div>

						<div class="searchBox">
							<div class="location">
								<div class="location_main item">
										<div style="float:right;">
											<div style="float:left; margin-right:10px; font-weight:bold;">
												共{$count}条
											</div>
											<div class="paginator" style="float:right;">{$showpage}</div>
											<div style="clear:both;"></div>
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mainContent" style="">
						<div class="main_content">
							<form name="listform" action="company.html" method="post" >
							<input type="hidden" id="act" name="act" value="printlist">
							<input type="hidden" id="checkid" value="">
							<div class="cell_tb_list">
								<table class="has_checkbox">
									<thead>
										<tr class="table_header">
											<th width="10%">公司名称</th>
											<th width="30%">备注</th>
											<th width="10%">跟单员</th>
											<th width="10%"></th>
										</tr>
									</thead>
									<tbody>
									<!--{loop $noteList $l}-->
										<tr class="" relid="{$l['_cid']}">
											<td><a href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/" target="_blank">{$l['cname']}</td>
											<td>{$l['note']}</td>
											<td>{$l['adminUsername']}</td>
											<td>
											<!--{if $right==1}-->
												<a href="javascript:void(0)" onclick="Boxy.load('company.html?act=note&c_id={$l[_cid]}',{title: '企业备注'});">编辑</a> <a href="javascript:void(0)" id="delNote">删除</a>
											<!--{/if}-->
											</td>
										</tr>
									<!--{/loop}-->
									</tbody>
								</table>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
			<!--{template company/sidebar}-->
		</div>
	</div>
	<script type="text/javascript">
		$(".cell_tb_list tr td #delNote").click(function(){
			var id = $(this).closest("tr").attr("relid");
			if(confirm('确定删除该备注?')){
				$.ajax({
					type:'POST',
					url:'/api/web/admin.api',
					data:{act:'del_note',cid:id},
					dataType:'json',
					success:function(data){
						if(data.status<1){
							$.message(data.msg, { title: "系统提示", icon: "fail" });
						}else{
							$.anchorMsg(data.msg,{icon:"success"});
							window.location.href = window.location.href;
						}
					}
				})
			}
		})
	</script>
</body>
</html>