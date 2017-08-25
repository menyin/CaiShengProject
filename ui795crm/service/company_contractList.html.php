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
					<div class="m_bg">客服管理 > 主管合同管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a onclick="Boxy.load('company.html?act=edit',{title: '快速注册'});">快速注册</a></div> -->
							<span class="gray"></span>
						</div>
					</div>

					<div class="searchBox">
						<div class="location">
							<div class="location_main item">
								<ul style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									<li class="ml_10">
										<select id="cityAdmin" name="queryAdmin">
											<option value="">请选择客服</option>
												<!--{loop $adminListArr $l}-->
													<option value="{$l['adminid']}" <!--{if $queryAdmin==$l['adminid']}-->selected<!--{/if}-->>{$l['adminUsername']}</option>
												<!--{/loop}-->
										</select>
									</li>
									<li class="ml_10">
										<select id="cityAdmin" name="queryTime">
											<option value="0">按添加时间</option>
												<!--{loop $queryTimeArr $k $l}-->
												<option value="{$k}" <!--{if $queryTime==$k}-->selected<!--{/if}-->>{$l}</option>
												<!--{/loop}-->
										</select>
									</li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="list.html?act={$act}&op={$op}&queryTime={$queryTime}&queryAdmin={$queryAdmin}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共<i>{$num_all}</i>条数据,  共<i>{$pageAll}</i>页

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
						<form name="listform" action="/service/joinM.html" method="post" >
						<input type="hidden" id="act" name="act" value="joinM">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th width="5%">用户名</th>
										<th width="20%">企业名称</th>
										<th width="10%">地区</th>
										<th width="10%">合同名称</th>
										<th width="5%">合同金额</th>
										<th width="15%">添加时间</th>
										<th width="5%">跟单员</th>
										<th width="">操作</th>
									</tr>
								</thead>
								<tbody>
								<!--{loop $contract $l}-->
									<tr class="" rel="{$l['_cid']}" style="background:<!--{if $l['vipTime1']}-->#C7E3BD;<!--{else}-->#E8AEA4;<!--{/if}-->">
                                        <td>{$l['username']}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$l['_cid']}/" target="_blank"  class="comLink">{$l['cname']}</a>
										<br />
											<a href="javascript:void(0)" class="cBtns">复制</a> <input type="text" name="searchName" id="searchName" style="width:90px;"> <input type="button" id="uniqueCompany" value="查重"></a>
										</td>
										<td>{$l['region_name_full']}</td>
										<td>{$l['title']}</td>
										<td>{$l['contract_price']}</td>
										<td>{$l['_createTime']}</td>
										<td>{$l['adminUsername']}</td>
										<td>
											<div style="display:inline-block;">
												<a class="btn_s" href="company.html?act=follow&c_id={$l['_cid']}" target="_blank">跟进</a>
												<a class="btn_s" href="/company/company.html?act=to&c_id={$l['_cid']}" target="_blank">登录前台</a>
												<a class="btn_s" href="http://www.baidu.com/s?wd={$l['cname']}" target="_blank">百度</a>
												<!--{if in_array('企业其他管理', $__r)}-->
													<a class="btn_s" href="contract.html?act=comlist&op=all&c_id={$l['_cid']}">合同管理</a>
												<!--{/if}-->
												<a class="btn_s" onclick="showFollow('{$l['_cid']}');">查看最后跟进时间</a>
												<div id="followId{$l['_cid']}" style="display:inline-block;"></div>
											</div>
										</td>
									</tr>
								<!--{/loop}-->
								<tr>
									<td colspan="7"></td>
									<td>当前总金额:{$money}元</td>
								</tr>
								</tbody>
							</table>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
	function showFollow(cid) {
		$.post('/api/web/admin.api',{'act':'lastFollowTime' ,c_id:cid},function(json){
			$("#followId"+cid).html(json.msg);
		},'json');

	}
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('.cBtns').each(function(index, elem) {
		clip = new ZeroClipboard.Client();
		clip.setHandCursor(true);
		ZeroClipboard.setMoviePath("//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.swf");
		clip.setText($('.comLink').eq(index).text());
		clip.addEventListener('complete', function(client, text) {
			alert('复制成功!');
		});
		clip.glue(this);
	});

	$('.cnDiv').each(function(index,elem){
		$(this).appendTo($('.cBtns').eq(index));
	});

	// IE8以下隐藏按钮，因为不支持
	if($.browser.msie && $.browser.version < 8){
		$('.cBtns').hide();
	}
});
</script>
</body>
</html>