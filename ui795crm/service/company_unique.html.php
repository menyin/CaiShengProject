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
					<div class="m_bg">企业查重 > 企业列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
								<ul style="width:900px \9; *width:900px; _width:900px; ">
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									<!--<li>会员类型：<select id='qstatus' name='qstatus' style='width:80px' ><option value=''>不限</option></select></li>-->
									<input type="hidden" name="query_regionId" id="query_regionId" value="{$qid}" />
									<li class="ml_10">区域选择：
										<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true">
										<script language="javascript">
											var areaOdjid='query_regionId';
											var areaOdjstr='query_region';
											var areaOdjProvice=1;//是否省可选
											var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
											var areaOdjnumber=1;//数量，如果唯一值，则立即返回
										</script>
									</li>
									<li class="ml_10"><input type="text" name="cname" id="query" value="{$query[cname]}" style="width:150px;" placeholder="企业名称"></li>
									<li class="ml_10"><input type="text" name="username" id="query" value="{$query[username]}" style="width:150px;" placeholder="用户名"></li>
									<li class="ml_10"><input type="text" name="address" id="query" value="{$query[address]}" style="width:150px;" placeholder="地址"></li>
									<li class="ml_10"><input type="text" name="phone" id="query" value="{$query[phone]}" style="width:150px;" placeholder="电话"></li>
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
								<!--{if $companyList['total_found']>0}-->
									<div style="float:right;">
										<div style="float:left;">
										共<i>{$companyList['total_found']}</i>条数据,显示<i>{$total}</i>条数据 / 共<i>{$pageAll}</i>页
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
						<form name="listform" method="post" >
						<input type="hidden" id="act" name="act" value="more_assign">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" style="display:none;" width="10px" ></th>
										<th width="50px" style="display:none;">ID</th>
										<th width="50px">用户名</th>
										<th width="150px">企业名称</th>
										<th width="50px">地区</th>
										<!-- <th width="50px">会员类型</th> -->
										<th width="50px">注册时间</th>
										<!-- <th width="50px">审核时间</th> -->
										<th width="50px">登陆时间</th>
										<th width="50px">修改时间</th>
										<th width="50px">最后合同时间</th>
										<!-- <th width="50px">刷新时间</th> -->
										<th width="50px">执照状态</th>
										<th width="50px">跟单员</th>
										<th width="100px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="<!--{if $company[_cid]==$_cid}-->cur hoverout<!--{/if}-->" style="background:<!--{if $company['vipTime1']}-->#C7E3BD;<!--{else}-->#E8AEA4;<!--{/if}-->" rel="{$company[_cid]}">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td>
										<td style="display:none;">{$company[cid]}</td>
										<!-- <td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td> -->
										<td>{$company[username]}</td>
										<td><span><a href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}" target="_blank" style="display:block;padding: 3px;font-size: 13px;font-weight: 700;">{$company[cname]}</a></span>
										<span><!--{if $company[comUser] || $company[comPhone] || $company[comMobile]}-->
										<!--{if $company[comUser]}-->联系人:{$company[comUser]}<!--{/if}-->&nbsp;&nbsp;
										<!--{if $company[comPhone]}-->电话:{$company[comPhone]}<!--{/if}-->&nbsp;&nbsp;
										<!--{if $company[comMobile]}-->手机:{$company[comMobile]}<!--{/if}--><!--{/if}--></span>
										<br/>
										<span><!--{if $company[User597] || $company[Phone597] || $company[Mobile597]}-->
										与本网
										<!--{if $company[User597]}-->联系人:{$company[User597]}<!--{/if}-->&nbsp;&nbsp;
										<!--{if $company[Phone597]}-->电话:{$company[Phone597]}<!--{/if}-->&nbsp;&nbsp;
										<!--{if $company[Mobile597]}-->手机:{$company[Mobile597]}<!--{/if}--><!--{/if}--></span></td>
										<td>{$company[comCityId]}</td>
										<!-- <td>{$company[comType]}</td> -->
										<td>{$company[_regTime]}</td>
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[_loginTime]}</td>
										<td>{$company[_modTime]}</td>
										<td>{$company[_vipTime2]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<td>{$company[_licenceCheck]}</td>
										<td>{$company[adminUsername]}</td>
										<td>
											<div style="display:inline-block;">
												<a class="btn_s" href="company.html?act=follow&c_id={$company[_cid]}" target="_blank">跟进</a>
												<!--{if $adminid==$company[adminId]}-->
													<a class="btn_s" href="/company/company.html?act=to&c_id={$company[_cid]}" target="_blank">登录前台</a>
												<!--{/if}-->
												<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
												<!--
													<a class="btn_s" href="company.html?act=joinTo&c_id={$company[_cid]}" target="_blank">跟单并登录</a>
                                                    <a class="btn_s" href="company.html?act=join&c_id={$company[_cid]}">先跟单</a>
												-->
												<!--{if in_array('企业其他管理', $__r)}-->
													<a class="btn_s" href="/companyinfo/companyinfo.html?act=contract&c_id={$company[_cid]}">合同管理</a>
												<!--{/if}-->
												<a class="btn_s" onclick="showFollow('{$company[_cid]}');">查看最后跟进时间</a>
												<!-- <a class="btn_s" onclick="Boxy.load('/company/company.html?act=psw&c_id={$company[_cid]}',{title: '企业密码重置'});">修改密码</a>
												<a class="btn_s" onclick="Boxy.load('/company/company.html?act=username&c_id={$company[_cid]}',{title: '企业用户名修改'});">修改用户名</a> -->
												<!--{if !$company['delStatus'] && $company[adminId]==$_SESSION[adminid]}-->
													<a class="btn_s" onclick="Boxy.load('company.html?act=delApply&c_id={$company[_cid]}',{title: '企业提交删除申请'});">提交删除</a>
												<!--{elseif $company['delStatus']}-->
													<a class="btn_s" href="company.html?act=cancel_del&c_id={$company[_cid]}"><span style="color:red;">恢复申请并跟单</span></a>
												<!--{/if}-->
											</div>
											<!--{if $company['delStatus']}-->
												<div style="display:inline-block;">{$company[str]}</div><br/>
											<!--{/if}-->
											<div id="followId{$company[_cid]}" style="display:inline-block;"></div>
											<!-- <a class="btn_s" onclick="Boxy.load('/company/company.html?act=view&c_id={$company[cid]}',{title: '企业详细信息'});" >查看</a> -->
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
</body>
</html>