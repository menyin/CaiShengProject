<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<body > 
<style>
	.step_submit_btn a { margin: 5px 10px 0 0; width: 50px; height: 24px; line-height: 24px; text-align: center; border-radius: 4px; background: #eee; border: 1px solid #ccc; color: #666; cursor: pointer; display: inline-block; zoom: 1;}
	.step_submit_btn .tg_btn {background: #3d86bc; color: #fff; border: 1px solid #397eb2;}
	.cBtns { display: inline-block; position: relative; padding:3px 10px; color:#444; background: #f2f2f2; border:1px solid #ddd; cursor: pointer; margin:5px 0; _display:none;}
	.cBtns:hover {color:#000; background: #d8d8d8;}
</style>
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
					<div class="m_bg">企业审核 > 营业执照 > {$thisTitle}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 disabled icon" >快速注册</div>
							<span class="gray"></span> -->
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									<li class="ml_10">修改时间：
										<select id='query_day' name='query_day' style='width:80px' >
											<option value='1' <!--{if ($query_day=='1')}-->selected<!--{/if}-->>1天内</option>
											<option value='3' <!--{if ($query_day=='3')}-->selected<!--{/if}-->>3天内</option>
											<option value='5' <!--{if ($query_day=='5')}-->selected<!--{/if}-->>5天内</option>
											<option value='10' <!--{if ($query_day=='10')}-->selected<!--{/if}-->>10天内</option>
											<option value='20' <!--{if ($query_day=='20')}-->selected<!--{/if}-->>20天内</option>
											<option value='30' <!--{if ($query_day=='30')}-->selected<!--{/if}-->>30天内</option>
											<option value='60' <!--{if ($query_day=='60')}-->selected<!--{/if}-->>60天内</option>
											<option value='90' <!--{if ($query_day=='90')}-->selected<!--{/if}-->>90天内</option>
											<option value='120' <!--{if ($query_day=='120')}-->selected<!--{/if}-->>120天内</option>
											<option value='180' <!--{if ($query_day=='180')}-->selected<!--{/if}-->>180天内</option>
											<option value='240' <!--{if ($query_day=='240')}-->selected<!--{/if}-->>240天内</option>
											<option value='360' <!--{if ($query_day=='360')}-->selected<!--{/if}-->>360天内</option>
											<option value='999999' <!--{if ($query_day=='999999')}-->selected<!--{/if}-->>全部</option>
										</select>
									</li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query"  value="{$q}" placeholder="公司名称/用户名/地区" style="width:150px;"></li>
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
													<option value="check_licence.html?act={$act}&op={$op}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
										</div>
										<div class="paginator" style="float:right;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
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
										<!-- <th class="td1" width="10px"></th> -->
										<th width="50px" style="display:none;">企业ID</th>
										<th width="50px">用户名</th>
										<th >企业名称</th>
										<th >执照公司</th>
										<th width="66px">执照ID</th>
										<th width="66px">执照法人</th>
										<th width="66px">上传时间</th>
										<th width="50px">审核</th>
										<!--{if ($op==no)}-->
											<th width="66px">屏蔽原因</th>
										<!--{/if}-->
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $licences $licence}-->
								<tbody>
									<tr class="">
										<!-- <td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$licence[clid]}" ></td> -->
										<td  style="display:none;">{$licence[uid]}</td>
										<!-- <td><a href="{$licence[comUrl]}" target="_blank">{$licence[_cname]}</a></td> -->
										<td>{$licence[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$licence[_uid]}/" target="_blank"  class="comLink">{$licence[cname]}</a><a href="javascript:void(0)" class="cBtns">复制</a></td></td>
										<td>{$licence[cname]}</td>
										<td>{$licence[licenceid]}</td>
										<td>{$licence[licencename]}</td>
										<td>{$licence[createtime]}</td>
										<td>{$licence[_isCheck]}</td>
										<!--{if ($op==no)}-->
											<td>{$licence[reply]}</td>
										<!--{/if}-->
										<td>
											<!--{if ($licence[isCheck]==2)}-->
												<a class="btn_s" onclick="cancelFree('{$licence[clid]}','{$licence[_uid]}');">取消免审</a>
											<!--{else}-->
												<a class="btn_s" href="check_licence.html?act=replay&op={$op}&clid={$licence[clid]}&c_id={$licence[_uid]}&query_day={$query_day}&query={$q}&page={$page}">审核</a>
												<!-- <a class="btn_s" onclick="Boxy.load('check_licence.html?act=replay&clid={$licence[clid]}&c_id={$licence[_uid]}',{title: '营业执照审核'});">审核</a> -->
												<!-- <a class="btn_s" href="check_licence.html?act=check_free&clid={$licence[clid]}&c_id={$licence[_uid]}" onclick="return confirm('确认要免审吗？');">免审</a> -->	
											<!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
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
function cancelFree (clid,cid) {
	if(!clid || !cid){
		alert('参数错误');
		return;
	}
	if(confirm('确认要取消免审吗？')){
		$.post('check_licence.php',{act:'cancel_free',clid:clid,c_id:cid},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				//$.anchorMsg(data.msg,{icon:"success"});
				alert(data.msg);
				window.location.reload();
			}
		},'json');
	}
}
</script>
</body>
</html>