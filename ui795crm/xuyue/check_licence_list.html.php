<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->

<body> 
<div id="content">
	<!--{template xuyue/nav}-->
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
					<div class="m_bg">客服管理 > 营业执照 > {$thisTitle}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon" >快速注册</div>
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
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
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<div class="paginator" style="">{$showpage}</div>
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
										<th >会员ID</th>
										<th >企业名称</th>
										<th >执照公司</th>
										<th width="66px">执照ID</th>
										<th width="66px">执照法人</th>
										<th width="66px">上传时间</th>
										<th width="20px">审核</th>
										<th width="255px">操作</th>
									</tr>
								</thead>
								<!--{loop $licences $licence}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$licence[clid]}" ></td>
										<td><a href="http://sh.{ROOT_DOMAIN}/com-{$licence[_uid]}/" target="_blank">{$licence[username]}</a></td>
										<td><a href="http://sh.{ROOT_DOMAIN}/com-{$licence[_uid]}/" target="_blank">{$licence[cname]}</a></td>
										<td>{$licence[_cname]}</td>
										<td>{$licence[licenceid]}</td>
										<td>{$licence[licencename]}</td>
										<td>{$licence[createtime]}</td>
										<td>{$licence[_isCheck]}</td>
										<td>
											<a class="btn_s" onclick="Boxy.load('check_licence.html?act=view&cid={$licence[clid]}',{title: '查看营业执照'});">查看</a>
											<!--{if ($licence[isCheck]==0)}-->
											<a class="btn_s" href="check_licence.html?act=check_ok&cid={$licence[clid]}">通过</a>
											<a class="btn_s" href="check_licence.html?act=check_no&cid={$licence[clid]}">屏蔽</a>
											<!--{else}-->
												<!--{if ($licence[isCheck]==1)}-->
												<a class="btn_s" href="check_licence.html?act=check_no&cid={$licence[clid]}">屏蔽</a>
												<!--{/if}-->
												<!--{if ($licence[isCheck]==2)}-->
												<a class="btn_s" href="check_licence.html?act=check_ok&cid={$licence[clid]}">通过</a>
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
		<!--{template xuyue/sidebar}-->
	</div>
</div>
</body>
</html>