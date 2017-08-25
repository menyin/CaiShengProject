<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script type="text/javascript"> 
function chk(){    
	var obj=document.getElementsByName('chkId[]');
	var s='';    
	for(var i=0; i<obj.length; i++){
	  if(obj[i].checked) s+=obj[i].value+',';
	}
	document.getElementById('checkid').value=s; 
	if (s){
		document.getElementById('pur_more').className='btn icon-1 icon';
	}else{
		document.getElementById('pur_more').className='btn icon-1 disabled icon';
	}
}
function pur_more(chkid){
	if (chkid){
		document.listform.submit();
	}else{
		false; 
	}
}
</script>
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
					<div class="m_bg">企业分配 > 企业列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--{if ($act=='nolist')}-->
							<div class="btn icon-1 disabled icon" id="pur_more" onclick="pur_more(document.getElementById('checkid').value)">批量分配</a></div>
							<!--{/if}-->
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
			            <div class="location">
			                <div class="location_main item">
			                    <ul>
			                    	<form method="get">
			                    	<input type="hidden" name="act" value="{$act}">
			                        <!--<li>会员类型：<select id='qstatus' name='qstatus' style='width:80px' ><option value=''>不限</option></select></li>-->
			                        <li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt"></li>
			                        <li class="ml_10">
			                           <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
			                    	</li>
			                       </form>
			                    </ul>
			                    <!--{if $res[0]['total_found']>0}-->
									<div style="float:right;">每页
										<select onchange="window.location.href=$(this).val();">
											<!--{loop $__ppStr $key $value}-->
												<option value="company.html?act={$act}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
											<!--{/loop}-->
										</select>条  共{$res[0]['total_found']}条
										<div class="paginator" style="float:right;">{$showpage}</div>
									</div>
								<!--{/if}-->
			                </div>
			            </div>
			        </div>
				</div>				
				<div class="mainContent" style="">
					<div class="main_content">
						<form name="listform" method="post" >
						<input type="hidden" id="act" name="act" value="more_assign">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="10px"></th>
										<th width="50px">用户名</th>
										<th >企业名称</th>
										<th width="50px">会员类型</th>
										<th width="50px">注册时间</th>
										<th width="50px">审核时间</th>
										<th width="50px">登陆时间</th>
										<th width="50px">跟进时间</th>
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
										<td>{$company[isTry]}</td>
										<td>
											<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
											<a class="btn_s" href="company.html?act=view&cid={$company[cid]}">查看</a>
											<!--{if ($act=='list')}-->
												<!--{if ($isCheck=='0' || $isCheck=='2')}-->
												<a class="btn_s" onclick="Boxy.load('company.html?act=assign_sel&cid={$company[cid]}',{title: '选择销售人员'});">启用</a>
												<!--{/if}-->
												<!--{if ($isCheck=='0')}-->
												<a class="btn_s" href="company.html?act=assign_no&cid={$company[cid]}">禁用</a>
												<!--{/if}-->
											<!--{/if}-->
											<!--{if strpos($r,'会员管理')>-1}-->
												<a class="btn_s" href="company.html?act=del_company&cid={$company[cid]}">删除</a>
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
</body>
</html>