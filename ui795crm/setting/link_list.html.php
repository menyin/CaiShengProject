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
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">站点管理 > 链接设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="link.html?act=edit">新增链接</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="list">
									<input type="hidden" name="query_regionId" id="query_regionId" value="{$query_regionId}" />
									<li>区域选择：
										<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$query_region}" title="{$query_region}" readonly="true"> 
										<script language="javascript">
											var areaOdjid='query_regionId'; 
											var areaOdjstr='query_region';
											var areaOdjProvice=1;//是否省可选
											var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
											var areaOdjnumber=9;//数量，如果唯一值，则立即返回
										</script>
									</li>
									<li>　模糊查询：<input type="text" name="query" id="query" class="search input_txt" placeholder="链接名称/地址"></li>
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
													<option value="link.html?act=list&{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
						<form name="listform" id="listform" action="link.html" method="post" >
						<input type="hidden" id="act" name="act" value="delM">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="3%"></th>
										<th width="15%">链接名称</th>
										<th width="10%">所属站点</th>
										<th >链接地址</th>
										<th width="10%">操作人员</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $links $link}-->					
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$link[link_id]}" ></td>
										<td>{$link[link_name]}</td>
										<td><!--{if $link[link_region]==1}-->全国<!--{else}-->{$link[link_region]}<!--{/if}--></td>
										<td>{$link[link_url]}</td>
										<td>{$link[admin_id]}</td>
										<td>
											<!-- <a class="btn_s" href="link.html?act=mod&link_id={$link[link_id]}">修改资料</a> -->
											<a class="btn_s" href="link.html?act=del&link_id={$link[link_id]}" onclick="return confirm('确认需要删除些信息吗？');">删除</a>
											<!--<a class="btn_s" onclick="Boxy.load('admin.html?act=del&uid={$admin[adminid]}',{title: '屏蔽管理员'});">屏蔽管理员</a>-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
						<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
							<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label>
							<button type="submit" style="margin:10px 5px 0 5px ;" onclick="submitCheck();">批量删除</button>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->  
		</div>		
		<!--{template setting/sidebar}-->	
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
//批量删除
function submitCheck () {
	//$("#act").val(check);
	var r = confirm("确认批量删除吗？");
	if(r){
		$("#listform").submitForm({ beforeSubmit: '', data: {}, success: function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
				window.history.go();
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}

		}, clearForm: false});
	}
}
</script>
</body>
</html>