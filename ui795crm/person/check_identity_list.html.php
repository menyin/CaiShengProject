<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->

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
					<div class="m_bg">个人审核 > 个人实名审核 > {$thisTitle}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 disabled icon" >快速注册</div> -->
							<span class="gray"></span>
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
									<li class="ml_10" style="display:none;">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="简历ID"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:right;">每页
										<select onchange="window.location.href=$(this).val();">
											<!--{loop $__ppStr $key $value}-->
												<option value="check_identity.html?act={$act}&op={$op}&query_day={$query_day}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
											<!--{/loop}-->
										</select>条  共{$num_all}条
										<div class="paginator" style="float:right;">{$showpage}</div>
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
										<th class="td1" width="10px"></th>
										<th >姓名</th>
										<th >身份证</th>
										<th width="66px">上传时间</th>
										<th width="50px">审核</th>
										<th width="255px">操作</th>
									</tr>
								</thead>
								<!--{loop $identitys $identity}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$identity[uid]}" ></td>
										<td><a href="http://bj.{ROOT_DOMAIN}/resume.html?rid={$identity[_rid]}" target="_blank">{$identity[realname]}</a></td>
										<td>{$identity[cardno]}</td>
										<td>{$identity[uploadTime]}</td>
										<td>{$identity[_isCheck]}</td>
										<td>
											<a class="btn_s" onclick="Boxy.load('check_identity.html?act=view&rid={$identity[uid]}',{title: '查看个人实名图片'});">查看</a>
											<!--{if ($identity[ischeck]==0)}-->
											<a class="btn_s" href="check_identity.html?act=check_ok&rid={$identity[uid]}">通过</a>
											<a class="btn_s" href="check_identity.html?act=check_no&rid={$identity[uid]}">屏蔽</a>
											<!--{else}-->
												<!--{if ($identity[ischeck]==1)}-->
												<a class="btn_s" href="check_identity.html?act=check_no&rid={$identity[uid]}">屏蔽</a>
												<!--{/if}-->
												<!--{if ($identity[ischeck]==2)}-->
												<a class="btn_s" href="check_identity.html?act=check_ok&rid={$identity[uid]}">通过</a>
												<!--{/if}-->												
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
		<!--{template person/sidebar}-->
	</div>
</div>
</body>
</html>