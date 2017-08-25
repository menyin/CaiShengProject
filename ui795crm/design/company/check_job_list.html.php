<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	.step_submit_btn a { margin: 5px 10px 0 0; width: 50px; height: 24px; line-height: 24px; text-align: center; border-radius: 4px; background: #eee; border: 1px solid #ccc; color: #666; cursor: pointer; display: inline-block; zoom: 1;}
	.step_submit_btn .tg_btn {background: #3d86bc; color: #fff; border: 1px solid #397eb2;}
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
					<div class="m_bg">企业审核 > 职位审核 > {$thisTitle}</div>
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
									<li class="ml_10">修改期限：
										<select id='query_day' name='query_day' >
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
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" style="width:200px;" placeholder="企业名称/工作地点"></li>
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
													<option value="check_job.html?act={$act}&op={$op}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
						<form action="check_job.html" name="form1" method="get"  target="_blank">
						<input type="hidden" name="act" value="checkM">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<!--{if $op=='ischeck'}--><th class="td1" width="10px"></th><!--{/if}-->
										<th width="50px" style="display:none;">职位ID</th>
										<th width="160px">职位名称</th>
										<th width="160px">企业名称</th>
										<th width="100px">工作地点</th>
										<th width="66px">修改时间</th>
										<th width="50px">审核</th>
										<!--{if ($op==no)}-->
											<th width="160px">屏蔽原因</th>
										<!--{/if}-->
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $jobs $job}-->
								<tbody>
									<tr class="">
										<!--{if $op=='ischeck'}--><td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$job[_jid]}" ></td><!--{/if}-->
										<td style="display:none;">{$job[jid]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/job-{$job[_jid]}.html" target="_blank">{$job[jname]}</a></td>
										<!-- <td><a href="{$job[comUrl]}" target="_blank">{$job[cname]}</a></td> -->
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$job[_cid]}/" target="_blank" class="comLink">{$job[cname]}<a href="javascript:void(0)" class="cBtns">复制</a></a></td>
										<td>{$job[jobArea]}</td>
										<td>{$job[modTime]}</td>
										<td>{$job[_isCheck]}</td>
										<!--{if ($op==no)}-->
											<td>{$job[reply]}</td>
										<!--{/if}-->
										<td>
											<a class="btn_s" href="check_job.html?act=check_ok&c_id={$job[_cid]}&jid={$job[_jid]}" onclick="return confirm('确认要通过吗？');">通过</a>
											<a class="btn_s" onclick="Boxy.load('check_job.html?act=replay&c_id={$job[_cid]}&jid={$job[_jid]}',{title: '职位审核不通过'});">屏蔽</a>
											<!-- {if ($job[isCheck]==0)}
											<a class="btn_s" href="check_job.html?act=check_ok&c_id={$job[cid]}&jid={$job[jid]}" onclick="return confirm('确认要通过吗？');">通过</a>
											<a class="btn_s" href="check_job.html?act=check_no&c_id={$job[cid]}&jid={$job[jid]}" onclick="return confirm('确认要屏蔽吗？');">屏蔽</a>
											<a class="btn_s" onclick="Boxy.load('check_job.html?act=replay&c_id={$job[cid]}&jid={$job[jid]}',{title: '职位审核不通过'});">屏蔽</a>
											{else}
												{if ($job[isCheck]==1)}
												<a class="btn_s" onclick="Boxy.load('check_job.html?act=replay&c_id={$job[cid]}&jid={$job[jid]}',{title: '职位审核不通过'});">屏蔽</a>
												{/if}
												{if ($job[isCheck]==2)}
												<a class="btn_s" href="check_job.html?act=check_ok&c_id={$job[cid]}&jid={$job[jid]}" onclick="return confirm('确认要通过吗？');">通过</a>
												{/if}
											{/if} -->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
						<!--{if $op=='ischeck'}-->
							<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
									<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label><button type="submit" style="margin:10px 5px 0 5px ;">查看职位</button>
							</div>
						<!--{/if}-->
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template company/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function SelectAll(tempControl)
{
	//将除头模板中的其它所有的CheckBox取反
	var theBox=tempControl;
	xState=theBox.checked;
	elem=theBox.form.elements;
	for(i=0;i<elem.length;i++)
	if(elem[i].type=="checkbox" && elem[i].id!=theBox.id)
	{
		if(elem[i].checked!=xState)
			elem[i].click();
	}
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