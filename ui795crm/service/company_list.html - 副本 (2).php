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
					<div class="m_bg">客服管理 > {$Title}</div>
				</div>
				<div class="quickbar">
					<!--<div class="note">小贴士</div>-->
					<div class="btns">
						<div class="btn-line clearfix">
							<ul>
								<form method="get" id="conList" name="conList" action="">
								<input type="hidden" name="act" value="{$act}">
								<input type="hidden" name="op" value="{$op}">
								<input type="hidden" name="pp" value="{$query['pp']}">
								<li class="ml_10">排序：
									<select id="ordertype" name="ordertype" style="width:100px">
										<option value="" >请选择</option>
										<!--{loop $orderArr $k $l}-->
										<option value="{$k}" <!--{if $query['order']==$k}-->selected<!--{/if}-->>{$l}</option>
										<!--{/loop}-->
									</select>
									<select id="orderValue" name="orderValue" style="width:100px">
										<option value="1" <!--{if $query['orderValue']=='1'}-->selected<!--{/if}-->>从大到小排序</option>
										<option value="2" <!--{if $query['orderValue']=='2'}-->selected<!--{/if}-->>从小到大排序</option>
									</select>
								</li>
								<li class="ml_10">企业状态：
									<select id="ordertype" name="companyType" style="width:80px">
										<option value="1" <!--{if $query['companyType']=='1'}-->selected<!--{/if}-->>所有企业</option>
										<option value="2" <!--{if $query['companyType']=='2'}-->selected<!--{/if}-->>有合同的企业</option>
										<option value="3" <!--{if $query['companyType']=='3'}-->selected<!--{/if}-->>未过期合同的企业</option>
										<option value="4" <!--{if $query['companyType']=='4'}-->selected<!--{/if}-->>过期合同的企业</option>
										<option value="5" <!--{if $query['companyType']=='5'}-->selected<!--{/if}-->>没有合同的企业</option>
									</select>
								</li>
								<!--{if $companyType==2||$companyType==3||$companyType==4}-->
								<li class="ml_10">
									<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$_txtStartDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
									<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$_txtEndDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
								</li>
								<!--{/if}-->
								<li class="ml_10">跟进类型：
									<select id="followType" name="followType" style="width:60px">
										<option value=''>请选择</option>
										<!--{loop $__type597Str $key $value}-->
											<option value='{$key}' <!--{if $query['followType']==$key}--> selected<!--{/if}-->>{$value}</option>
										<!--{/loop}-->
									</select>
								</li>
								<li class="ml_10">回访类型：
									<select id="nextType" name="nextType" style="width:50px">
										<option value=''>请选择</option>
										<!--{loop $__nextType $key $value}-->
											<option value='{$key}' <!--{if $query['nextType']==$key}--> selected<!--{/if}-->>{$value}</option>
										<!--{/loop}-->
									</select>
								</li>
								<li class="ml_10">查询：<input type="text" name="q" id="q" style="width:180px;" value="{$query['q']}" placeholder="企业名称/用户名/地区/邮箱/电话"></li>
								<li class="ml_10">
								   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
								</li>
								<li class="ml_10" style="display:none;">总共：<font color="red">{$companyList['total_found']}</font> 条</li>
							   </form>
							</ul>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<!--{if $companyList['total_found']>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="list.html?act={$act}&op={$op}&ordertype={$query['ordertype']}&orderValue={$query['orderValue']}&companyType={$query['companyType']}&txtStartDate={$_txtStartDate}&txtEndDate={$_txtEndDate}&followType={$query['followType']}&nextType={$query['nextType']}&q={$query['q']}{$value}" <!--{if $query['pp']==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共<i>{$companyList['total_found']}</i>条数据,显示<i>{$total}</i>条数据 / 共<i>{$pageAll}</i>页

										</div>
										<div class="paginator" >{$showpage}</div>
										<div id="pageContent" style="float:right;">
											到 <input type="text" name="turnPage" id="turnPage" style="width:40px;"> 页 <input type="button" value="确定">
										</div>
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
										<th width="50px" style="display:none;">企业ID</th>
										<th width="3%" style="display:none;">跟单结束时间-分配状态</th>
										<th width="3%">用户名</th>
										<th width="20%">企业名称</th>
										<th width="2%">回访类型</th>
										<th width="3%">地区</th>
										<!-- <th width="50px">会员类型</th> -->
										<th width="6%">注册时间</th>
										<!-- <th width="50px">审核时间</th> -->
										<th width="6%">登陆时间</th>
										<!-- <th width="50px">刷新时间</th> -->
										<th width="6%">修改时间</th>
										<th width="2%">信息状态</th>
										<th width="2%">执照状态</th>
										<th width="6%">跟单员</th>
										<th width="6%">最后合同</th>
										<th>操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="<!--{if $company[_cid]==$_cid}-->cur hoverout<!--{/if}-->" style="background:<!--{if $company['vipTime1']}-->#C7E3BD;<!--{else}-->#E8AEA4;<!--{/if}-->" rel="{$company[_cid]}" >
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$company[_cid]}" ></td>
										<td style="display:none;">{$company[cid]}</td>
										<td style="display:none;">{$company[_endFollowTime]}--{$company[assignType]}--{$company[adminId]}</td>
										<!--<td><a href="{$company[comUrl]}" target="_blank">{$company[cname]}</a></td>-->
                                        <td>{$company[username]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank"  class="comLink">{$company[cname]}</a>
										<br />
											<a href="javascript:void(0)" class="cBtns">复制</a> <input type="text" name="searchName" id="searchName" style="width:100px;"> <input type="button" id="uniqueCompany" value="查重"></a>
										</td>
										<td align="center">{$__nextType[$company['nextType']]}</td>
										<td>{$company[comCityId]}</td>
										<!-- <td>{$company[comType]}</td> -->
										<td>{$company[_regTime]}</td>
										<!-- <td>{$company[checkTime]}</td> -->
										<td>{$company[_loginTime]}</td>
										<!-- <td>{$company[updateTime]}</td> -->
										<td>{$company[_modTime]}</td>
										<td>{$company[_isCheck]}</td>
										<td>{$company[_licenceCheck]}</td>
										<td>{$company[adminUsername]}</td>
										<td>{$company[_vipTime2]}</td>
										<td>
											<div style="display:inline-block;">
												<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
												<a class="btn_s" href="/service/company.html?act=follow&c_id={$company[_cid]}" target="_blank">跟进</a>
												<!--
												<a class="btn_s" href="javascript:void(0)" onclick="companyReturn('{$company[_cid]}',2)" target="_blank">转销售公共库</a>
												<a class="btn_s" href="javascript:void(0)" onclick="companyReturn('{$company[_cid]}',4)" target="_blank">转续约公共库</a>
												-->
												<!--{if !$company['adminId']}-->
													<a class="btn_s" href="company.html?act=joinTo&c_id={$company[_cid]}" target="_blank">跟单并登录</a>
													<a class="btn_s" href="company.html?act=join&c_id={$company[_cid]}">先跟单</a>
												<!--{/if}-->
												<!--{if $company['vipTime1']}-->
													<a class="btn_s" href="/companyinfo/companyinfo.html?act=contract&c_id={$company[_cid]}">合同管理</a>
												<!--{/if}-->
												<!-- <a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[cid]}">查看</a> -->
												<!-- <a class="btn_s" onclick="Boxy.load('/company/company.html?act=view&c_id={$company[cid]}',{title: '企业详细信息'});" >查看</a> -->
												<!-- <a class="btn_s" onclick="Boxy.load('company.html?act=join&cid={$company[cid]}',{title: '企业信息'});">加入</a> -->

												<!--{if $company['adminId']==$adminid}-->
													<!--{if $company['delStatus']}-->
														<a class="btn_s" href="/company/company.html?act=del_company&c_id={$company[_cid]}&do=no"><span style="color:red;">恢复</span></a>
													<!--{elseif $company['vipTime2']<=$time}-->
														<a class="btn_s" onclick="Boxy.load('company.html?act=delApply&c_id={$company[_cid]}',{title: '企业提交删除申请'});">提交删除</a>
													<!--{/if}-->
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
							<!--<button type="submit" style="margin:10px 5px 0 5px ;">批量跟单</button>-->
							<select id="cityAdmin" style="display:none;">
							
							</select>
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

function companyReturn(cid,type){
	if(!cid||!type){
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

var companyList = {
	init:function(){
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
				alert('请按城市选择客服人员');
				return;
			}
			$.post('/api/web/admin.api',{act:'sendtoAdmin',cid:cid,adminId:adminId,type:1},function(data){
				alert(data.msg);
				if(data.status==1) window.location.href = window.location.href;
			},'json');
		});

		$('.cell_tb_list #uniqueCompany').click(function(){
			var searchName = $(this).closest('tr').find('#searchName').val();
			if(searchName==null||searchName==''||typeof(searchName)=='undefined'){
				alert('请填关键词');
				return;
			}
			window.open('/service/list.html?act=list&op=unique&query_regionId=&query_region=&cname='+searchName);
		});

		$('#conList select').change(function(){
			$('#conList').submit();
		});

		companyList.page();
	},
	page:function(){
		$("#pageContent input[type=button]").click(function(){
			var page = $("#pageContent #turnPage").val();
			if(page==''){
				alert('请填写正确页数');
				return;
			}
			window.location.href = "list.html?act={$act}&op={$op}&ordertype={$query[order]}&orderValue={$query[orderValue]}&companyType={$query[companyType]}&txtStartDate={$_txtStartDate}&txtEndDate={$_txtEndDate}&followType={$query[followType]}&nextType={$query[nextType]}&q={$query[q]}&page="+page;
		});

		$("#pageContent #turnPage").keydown(function(e){
			if(e.keyCode==13) $("#pageContent input[type=button]").click();
		});
	}
}
companyList.init();
</script>
</body>
</html>