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
					<div class="m_bg">销售管理 > 我的企业</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon" ><a onclick="Boxy.load('company.html?act=edit',{title: '快速注册'});">快速注册</a></div>
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<!--{if ($act=='followlist')}-->
									<li class="ml_10">回访天数：
										<select id='query_day' name='query_day' style='width:80px' >
											<option value='1' <!--{if ($query_day=='1')}-->selected<!--{/if}-->>1天</option>
											<option value='2' <!--{if ($query_day=='2')}-->selected<!--{/if}-->>2天</option>
											<option value='3' <!--{if ($query_day=='3')}-->selected<!--{/if}-->>3天</option>
											<option value='7' <!--{if ($query_day=='7')}-->selected<!--{/if}-->>7天</option>
											<option value='14' <!--{if ($query_day=='14')}-->selected<!--{/if}-->>14天</option>
											<option value='30' <!--{if ($query_day=='30')}-->selected<!--{/if}-->>30天</option>
										</select>
									</li> 
									<!--{/if}-->
									<li class="ml_10">会员类型：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value='' <!--{if ($query_type=='')}-->selected<!--{/if}-->>不限</option>
											<option value='0' <!--{if ($query_type=='0')}-->selected<!--{/if}-->>0</option>
											<option value='1' <!--{if ($query_type=='1')}-->selected<!--{/if}-->>1</option>
											<option value='2' <!--{if ($query_type=='2')}-->selected<!--{/if}-->>2</option>
											<option value='3' <!--{if ($query_type=='3')}-->selected<!--{/if}-->>3</option>
											<option value='4' <!--{if ($query_type=='4')}-->selected<!--{/if}-->>4</option>
										</select>
									</li> 
									<!--{if ($act=='list')}-->
									<li class="ml_10">审核类型：
										<select id='isCheck' name='isCheck' style='width:80px' >
											<option value='' <!--{if ($isCheck=='')}-->selected<!--{/if}-->>不限</option>
											<option value='0' <!--{if ($isCheck=='0')}-->selected<!--{/if}-->>未启用</option>
											<option value='1' <!--{if ($isCheck=='1')}-->selected<!--{/if}-->>已启用</option>
											<option value='2' <!--{if ($isCheck=='2')}-->selected<!--{/if}-->>被禁用</option>
											<option value='3' <!--{if ($isCheck=='3')}-->selected<!--{/if}-->>已审核</option>
											<option value='4' <!--{if ($isCheck=='4')}-->selected<!--{/if}-->>不审核</option>
										</select>
									</li>
									<!--{/if}-->
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
										<th width="120px">用户名</th>
										<th >企业名称</th>
										<th width="50px">会员类型</th>

										<th width="50px">注册时间</th>
										<th width="50px">审核时间</th>
										<th width="50px">登陆时间</th>
										<th width="50px">跟进时间</th>
										<th width="50px">回访时间</th>
										<th width="20px">试用</th>
										<th width="255px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td>
										<td>{$company[username]}</td>
										<td>{$company[cname]}</td>
										<td>{$company[Type597]}</td>

										<td>{$company[regTime]}</td>
										<td>{$company[checkTime]}</td>
										<td>{$company[loginTime]}</td>
										<td>{$company[followTime]}</td>
										<td>{$company[nextTime]}</td>
										<td>{$company[isTry]}</td>
										<td>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<a class="btn_s" onclick="Boxy.load('company.html?act=edit&cid={$company[cid]}',{title: '编辑企业信息'});" >编辑</a>
											<!--{if ($company[isCheck]>0)}-->
												<!--{if ($company[isCheck]==2)}-->
												该企业被禁用
												<!--{else}-->
												<a class="btn_s" onclick="Boxy.load('company.html?act=follow&cid={$company[cid]}',{title: '会员跟进回访'});">跟进</a>
												<a class="btn_s" onclick="Boxy.iframe('company.html?act=log&cid={$company[cid]}',{title: '会员日志查看',width:700,height:510});">日志</a>
												<a class="btn_s" onclick="Boxy.load('company.html?act=psw&cid={$company[cid]}',{title: '会员密码重置'});">密码</a>
												<a class="btn_s" href="company.html?act=contract&cid={$company[cid]}">合同</a>												
												<!--{/if}-->
											<!--{else}-->
												该企业未启用
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
		<!--{template sell/sidebar}-->	
	</div>	
</div>
</body>
</html>