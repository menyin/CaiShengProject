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
					<div class="m_bg">销售管理 > 主管分配的企业</div>
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
								<ul  style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<!-- <li class="ml_10"><select id="query_day" name="query_day" style="width:80px">
										<option value="1" {if $query_day=='1'}selected{/if}>1天内</option>
										<option value="3" {if $query_day=='3'}selected{/if}>3天内</option>
										<option value="5" {if $query_day=='5' || $query_day==''}selected{/if}>5天内</option>
										<option value="10" {if $query_day=='10'}selected{/if}>10天内</option>
										<option value="20" {if $query_day=='20'}selected{/if}>20天内</option>
										<option value="30" {if $query_day=='30'}selected{/if}>30天内</option>
										<option value="60" {if $query_day=='60'}selected{/if}>60天内</option>
										<option value="90" {if $query_day=='90'}selected{/if}>90天内</option>
										<option value="120" {if $query_day=='120'}selected{/if}>120天内</option>
										<option value="180" {if $query_day=='180'}selected{/if}>180天内</option>
										<option value="240" {if $query_day=='240'}selected{/if}>240天内</option>
										<option value="360" {if $query_day=='360'}selected{/if}>360天内</option>
										<option value="999999" {if $query_day=='999999'}selected{/if}>全部</option>
									</select></li> -->
									<li class="ml_10">排序方式：<select id="ordertype" name="ordertype" style="width:80px">
                                    	<option value="3" <!--{if $ordertype=='3'}-->selected<!--{/if}-->>登录时间</option>
										<option value="1" <!--{if $ordertype=='1'}-->selected<!--{/if}-->>修改时间</option>
										<option value="2" <!--{if $ordertype=='2'}-->selected<!--{/if}-->>注册时间</option>
										<option value="6" <!--{if $ordertype=='6'}-->selected<!--{/if}-->>分配时间</option>
										<!-- <option value="3" {if $ordertype=='3'}selected{/if}>刷新时间</option> -->
									</select></li>
									<!-- <li class="ml_10">信息状态：
										<select id='query_type' name='query_type' style='width:80px' >
											<option value='9' {if ($query_type=='9')}selected{/if}>不限</option>
											<option value='0' {if ($query_type=='0')}selected{/if}>未审核</option>
											<option value='1' {if ($query_type=='1')}selected{/if}>已审核</option>
											<option value='2' {if ($query_type=='2')}selected{/if}>已屏蔽</option>
										</select>
									</li> -->
									<li class="ml_10" style="display:none;">执照状态：
										<select id='licence_type' name='licence_type' style='width:80px' >
											<option value='9' {if ($licence_type=='9')}selected{/if}>不限</option>
											<option value='1' {if ($licence_type=='1')}selected{/if}>已通过</option>
											<option value='2' {if ($licence_type=='2')}selected{/if}>已允许</option>
											<option value='-2' {if ($licence_type=='-2')}selected{/if}>不通过</option>
											<option value='-1' {if ($licence_type=='-1')}selected{/if}>已上传</option>
											<option value='0' {if ($licence_type=='0')}selected{/if}>未上传</option>
										</select>
									</li>
									<li class="ml_10" style="display:none;">是否被选走：
										<select id='statusId' name='statusId' style='width:80px' >
											<option value='9' {if ($statusId=='9')}selected{/if}>不限</option>
											<option value='1' {if ($statusId=='1')}selected{/if}>已被选走</option>
											<option value='-1' {if ($statusId=='-1')}selected{/if}>未被选走</option>
										</select>
									</li>
									<li class="ml_10">
										<select id="cityAdmin" name="queryAdmin">
											<option value="">请选择销售</option>
												<!--{loop $adminListArr $l}-->
													<option value="{$l['adminid']}" <!--{if $queryAdmin==$l['adminid']}-->selected<!--{/if}-->>{$l['adminUsername']}</option>
												<!--{/loop}-->
										</select>
									</li>
									<li class="ml_10">
										<select id="cityAdmin" name="queryTime">
											<option value="0">按跟进时间</option>
												<option value="15" <!--{if $queryTime==15}-->selected<!--{/if}-->>15天内未跟进</option>
												<option value="30" <!--{if $queryTime==30}-->selected<!--{/if}-->>30天内未跟进</option>
												<option value="60" <!--{if $queryTime==60}-->selected<!--{/if}-->>60天内未跟进</option>
												<option value="90" <!--{if $queryTime==90}-->selected<!--{/if}-->>90天内未跟进</option>
												<option value="180" <!--{if $queryTime==180}-->selected<!--{/if}-->>180天内未跟进</option>
												<option value="360" <!--{if $queryTime==360}-->selected<!--{/if}-->>360天内未跟进</option>
										</select>
									</li>
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" style="width:200px;" value="{$q}" placeholder="企业名称/用户名/地区/邮箱/电话"></li>
									<li class="ml_10">
									   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
								   </form>
								</ul>
								<!--{if $res[0]['total_found']>0}-->
									<div style="float:right; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="company.html?act={$act}&ordertype={$ordertype}&licence_type={$licence_type}&statusId={$statusId}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共{$res[0]['total_found']}条<!--{if $res[0]['total_found']>=10000}--><font color="red">[显示前10000条]</font><!--{/if}-->
										</div>
										<div class="paginator" style="float:left;">{$showpage}</div>
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
										<th class="td1" width="1%"></th>
										<!--{if $_SESSION['adminUnit']=='技术部'}-->
											<th width="50px" style="display:none;">企业ID</th>
										<!--{/if}-->
										<th width="3%" style="display:none;">跟单结束时间-分配状态</th>
										<th width="50px">用户名</th>
										<th width="150px">企业名称</th>
										<th width="50px">地区</th>
										<!-- <th width="50px">会员类型</th> -->
										<!-- <th width="50px">审核时间</th> -->
										<th width="50px">登陆时间</th>
										<!-- <th width="50px">刷新时间</th> -->
										<!-- <th width="50px">信息状态</th> -->
										<th width="50px">执照状态</th>
										<th width="50px">注册时间</th>
										<th width="50px">修改时间</th>
										<th width="220px">跟单员</th>
										<th width="50px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="" rel="{$company[_cid]}">
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$company[_cid]}" ></td>
										<!--{if $_SESSION['adminUnit']=='技术部'}--><td style="display:none;">{$company[cid]}</td><!--{/if}-->
										<td style="display:none;">{$company[_endFollowTime]}--{$company[assignType]}--{$company[adminId]}</td>
										<!--<td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td>-->
										<td>{$company[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank" class="comLink">{$company[cname]}</a>
										<br />
											<a href="javascript:void(0)" class="cBtns">复制</a>
										</td>
										<td>{$company[comCityId]}</td>
										<!-- <td>{$company[comType]}</td> -->
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[loginTime]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<!-- <td>{$company[_isCheck]}</td> -->
										<td>{$company[_licenceCheck]}</td>
										<td>{$company[regTime]}</td>
										<td>{$company[modTime]}</td>
										<td>
											<!--{if $company[adminUsername]}-->
												{$company[adminUsername]}<br>分配时间：{$company[_firstFollowTime]}
											<!--{/if}-->
												<br>
												分配给:
												<select id="cityAdmin">
													<option value="">请选择销售</option>
														<!--{loop $adminListArr $l}-->
															<option value="{$l['adminid']}">{$l['adminUsername']}</option>
														<!--{/loop}-->
												</select>
												<input type="button" id="sendto" value="确定">
										</td>
										<td>
											<div style="display:inline-block;">
												<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
												<a class="btn_s" href="/sell/company.html?act=follow&c_id={$company[_cid]}" target="_blank">跟进</a>
												<a class="btn_s" href="javascript:void(0)" onclick="companyReturn('{$company[_cid]}',0)" target="_blank">转客服公共库</a>
												<a class="btn_s" href="javascript:void(0)" onclick="companyReturn('{$company[_cid]}',4)" target="_blank">转续约公共库</a>

												<!--4.5屏蔽跟单，采用分配
												{if $company[endFollowTime]<$time}
													<a class="btn_s" href="company.html?act=joinTo&c_id={$company[_cid]}" target="_blank">跟单并登录</a>
													<a class="btn_s" href="company.html?act=join&c_id={$company[_cid]}">先跟单</a>
												{/if}
												-->
												<!-- <a class="btn_s" onclick="Boxy.load('/company/company.html?act=view&c_id={$company[cid]}',{title: '企业详细信息'});" >查看</a> -->
												<!-- <a class="btn_s" onclick="Boxy.load('company.html?act=join&c_id={$company[cid]}',{title: '企业信息'});">加入</a> -->
												<!--{if !$company['delStatus']}-->
													<a class="btn_s" onclick="Boxy.load('company.html?act=delApply&c_id={$company[_cid]}',{title: '企业提交删除申请'});">提交删除</a>
												<!--{elseif $company['delStatus']}-->
													<a class="btn_s" href="/company/company.html?act=del_company&c_id={$company[_cid]}&do=no"><span style="color:red;">恢复</span></a>
												<!--{/if}-->
											</div>
											<!--{if $company['delStatus']}-->
												<div style="display:inline-block;">{$company[str]}</div>
											<!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
						<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
							<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label>
							<button type="submit" style="margin:10px 5px 0 5px ;">批量跟单</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--{template sell/sidebar}-->
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

	$('.mainContent tr #sendto').click(function(){
		var cid = $(this).closest('tr').attr('rel');
			adminId = $(this).closest('tr').find('#cityAdmin').val();
		if(adminId==null||adminId==''||typeof(adminId)=='undefined'){
			alert('请按城市选择销售人员');
			return;
		}
		$.post('/api/web/admin.api',{act:'sendtoAdmin',cid:cid,adminId:adminId,type:3},function(data){
			alert(data.msg);
			if(data.status==1) window.location.href = window.location.href;
		},'json');
	});

});
function companyReturn(cid,type){
	if(!cid){
		alert('参数错误');
		return;
	}
	if(confirm('确定执行？')){
		$.post('/api/web/admin.api',{act:'companyReturn',cid:cid,type:type},function(data){
			alert(data.msg);
			if(data.status==1) window.location.href = window.location.href;
		},'json');
	}

}
</script>
</body>
</html>