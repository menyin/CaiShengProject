<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	#main .quickbar .btns .current {background: #E1F0FA;color:#444; font-weight: bold;}
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
					<div class="m_bg">客服管理 > 试用会员记录</div>
				</div>
				<div class="quickbar">
					<!--<div class="note">小贴士</div>-->
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
							<ul>
								<li class="ml_10">行为：
									<select id="wayType" name="wayType" style="width:100px">
										<option value="0" >全部</option>
										<!--{loop $typeArr $k $l}-->
										<option value="{$k}" <!--{if $way==$k}-->selected<!--{/if}-->>{$l}</option>
										<!--{/loop}-->
									</select>
								</li>
							</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">
										<div style="float:left;">
											共<i>{$num_all}</i>条数据 / 共<i>{$pageAll}</i>页

										</div>
										<div class="paginator" >{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
							</div>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="50px">企业名称</th>
										<th width="150px">行为</th>
										<th width="50px">时间</th>
										<th width="50px"></th>
									</tr>
								</thead>
								<!--{loop $logList $l}-->
								<tbody>
									<tr>
										<td><a href="/companyinfo/companyinfo.html?act=view&c_id={$l['_cid']}">{$l['title']}<!--{if $l['vipTime1']}--> (收费用户)<!--{else}--> (免费用户)<!--{/if}--></a></td>
										<td>{$l['_type']}</td>
										<td>{$l['_createTime']}</td>
										<td><a class="btn_s" href="company.html?act=follow&c_id={$l['_cid']}" target="_blank">跟进</a> <a href="/company/company.html?act=to&c_id={$l['_cid']}" class="btn_s" target="_blank">登录前台</a></td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
$(".searchBox #wayType").change(function(){
	window.location.href = "list.php?act={$act}&way="+$(this).val();
});
</script>
</body>
</html>