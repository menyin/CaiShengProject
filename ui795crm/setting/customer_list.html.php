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
					<div class="m_bg">管理员管理 > 分配管理 > <a href="customer_assign.html?act=list">后台管理员列表</a> > [{$admintemp[adminUsername]}]客户列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon" ><a href="customer_assign.html?act=list">返回上一级</a></div>
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="admin_id" value="{$admin_id}">
									<li class="ml_10">排序方式：<select id="ordertype" name="ordertype" style="width:80px">
										<option value="" >请选择</option>
                                        <option value="3" <!--{if $ordertype=='3'}-->selected<!--{/if}-->>登录时间</option>
										<option value="1" <!--{if $ordertype=='1'}-->selected<!--{/if}-->>修改时间</option>
										<option value="2" <!--{if $ordertype=='2'}-->selected<!--{/if}-->>注册时间</option>
										<!-- <option value="3" {if $ordertype=='3'}selected{/if}>刷新时间</option> -->
									</select></li>
									<!-- <li class="ml_10">审核类型：
										<select id='isCheck' name='isCheck' style='width:80px' >
											<option value='' {if ($isCheck=='')}selected{/if}>不限</option>
											<option value='0' {if ($isCheck=='0')}selected{/if}>未启用</option>
											<option value='1' {if ($isCheck=='1')}selected{/if}>已启用</option>
											<option value='2' {if ($isCheck=='2')}selected{/if}>被禁用</option>
											<option value='3' {if ($isCheck=='3')}selected{/if}>已审核</option>
											<option value='4' {if ($isCheck=='4')}selected{/if}>不审核</option>
										</select>
									</li> -->
									<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
									<li class="ml_10">
										<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									<li class="ml_10">总共：{$res[0]['total_found']} 条<!--{if $res[0]['total_found']>=1000}--><font color="red">[显示前1000条]</font><!--{/if}--></li>
									</form>
								</ul>
								<!--{if $res[0]['total_found']>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="customer_assign.html?act={$act}&admin_id={$admin_id}&ordertype={$admin_id}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$res[0]['total_found']}条
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
					<form  id="form1" method="post" action="customer_assign.html?act=assignM">
					<div class="main_content">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="10px"></th>
										<th width="50px" style="display:none;">企业ID</th>
										<th width="150px">企业名称</th>
										<th width="50px">地区</th>
										<!--<th width="50px">会员类型</th>-->
										<th width="50px">注册时间</th>
										<th width="50px">登陆时间</th>
										<th width="50px">跟进时间</th>
										<th width="255px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="">
										<td class="td1"><input type="checkbox"  name="chkId[]"  id="chkId[]" class="c2_checkbox" value="{$company[cid]}" ></td>
										<td style="display:none;">{$company[cid]}</td>
										<td><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank">{$company[cname]}</a></td>
										<td>{$company[comCityId]}</td>
										<!--<td>{$company[comType]}</td>-->
										<td>{$company[regTime]}</td>
										<td>{$company[loginTime]}</td>
										<td>{$company[followTime]}</td>
										<td><table width="255" height="32" border="0">
											<tr>
												<td width="150px"><select id="cityid{$company[cid]}" name="cityid" onChange="selectcity({$company[cid]});" class="drop" style="width: 150px;" required="required" message="请选择所属的站点">
													<option value="0" >全国</option>
													<!--{loop $regions1 $region1}-->
													<option value="{$region1[region_id]}">{$region1[region_name_full]}</option>
													<!--{/loop}-->
												</select>
												<label id="quyuid{$company[cid]}" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->" onChange="selectAdmin({$company[cid]});">
													<select id="quyu{$company[cid]}" name="quyu1" style="width: 150px;"  class="drop">
													<option value="1">请选择</option>
													<!--{loop $quyu1Arr $quyu11}-->
													<option value="{$quyu11[region_id]}">{$quyu11[region_name_full]}</option>
													<!--{/loop}-->
												</select>
												</lable></td>
												<td width="120px"><select id="adminUnit{$company[cid]}" name="adminUnit" class="drop" style="width: 120px;" onChange="selectDepart({$company[cid]});">
													<option value=" ">请选择部门</option>
													<option value="1">客服部</option>
													<option value="2">销售部</option>
												</select></td>
												<td><select id='assign_admin{$company[cid]}' class="drop"  name='assign_admin' style="width: 120px;">
													<option value='' >请选择</option>
													<option value='-1'>客服公共库</option>
													<option value='-2'>销售公共库</option>
													<!--{loop $adminAll $value}-->
														<option value='{$value[adminid]}'>{$value[adminUsername]}<!--{if $comNum[$value[adminid]]>0}-->({$comNum[$value[adminid]]})<!--{/if}--></option>
													<!--{/loop}-->
												</select></td>
												<td><input type="hidden" value="{$company[cid]}" name="c_id" id="c_id">
											<input type="hidden" value="{$admin_id}" name="admin_id" id="admin_id"><button type="button" onClick="assign({$company[cid]});">确定</button></td>					
											</tr>
										</table></td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
							<!--{if $num_all>0}-->
							<div style=" background:#efefef; height:36px; border-bottom:1px solid #ccc;">
								<label style="float:left;"><input type="checkbox" name="checkall" value="on" id="selAll" onClick="javascript:SelectAll(this);" style="margin: 12px 3px 0 17px;">全选</label>
								<label><select id="cityid" name="cityid" onChange="selectcityA();" class="drop" style="width: 150px;margin:5px;" required="required" message="请选择所属的站点">
									<option value="0" >全国</option>
									<!--{loop $regions1 $region1}-->
									<option value="{$region1[region_id]}">{$region1[region_name_full]}</option>
									<!--{/loop}-->
								</select>
								</label>
								<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->" onChange="selectAdminA();">
									<select id="quyu1" name="quyu1" style="width: 150px;margin:5px;"  class="drop">
									<option value="1">请选择</option>
									<!--{loop $quyu1Arr $quyu11}-->
									<option value="{$quyu11[region_id]}">{$quyu11[region_name_full]}</option>
									<!--{/loop}-->
								</select>
								</label>
								<label><select id="adminUnit" class="drop" style="width: 120px;margin:5px;" onChange="selectDepartA();">
									<option value=" ">请选择部门</option>
									<option value="1">客服部</option>
									<option value="2">销售部</option>
								</select></label>
								<label><select id='assign_admin' class="drop"  name='new_admin' style="width: 120px;margin:5px;">
									<option value='' >请选择</option>
									<!--{loop $adminAll $value}-->
										<option value='{$value[adminid]}'>{$value[adminUsername]}<!--{if $comNum[$value[adminid]]>0}-->({$comNum[$value[adminid]]})<!--{/if}--></option>
									<!--{/loop}-->
								</select></label><button type="submit" style="margin:10px 5px 0 5px ;">确定</button>
							</div>
							<!--{/if}-->
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!--{template setting/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(c_id){
	city_id="cityid"+c_id;
	cityid=$("#"+city_id).val();
	admin_Unit="adminUnit"+c_id;
	adminUnit=$("#"+admin_Unit).val();
	$("#quyu1").empty();
	assignId="assign_admin"+c_id;
	quyu1="quyu"+c_id;
	quyuid1="quyuid"+c_id;
	$("#"+assignId).empty();
	var quyuarr='';
	var admin='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){			
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
		$('#'+quyu1).append(quyuarr);
	});
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
		$("#"+quyuid1).css("display","none");
	}else{
		$('#'+quyuid1).show();
	}
	$.get( "/admin.html?act=getAdmins&region_id="+cityid+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		admin='<option value="">请选择</option>';
		admin+='<option value="-1">客服公共库</option>';
		admin+='<option value="-2">销售公共库</option>';
		$.each(admins, function(i,item){
			admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#'+assignId).append(admin);
	});
}
function selectAdmin(c_id){
	quyu="quyu"+c_id;
	quyu1=$("#"+quyu).val();
	admin_Unit="adminUnit"+c_id;
	adminUnit=$("#"+admin_Unit).val();
	assignId="assign_admin"+c_id;
	$("#"+assignId).empty();
	var admin='';
	$.get( "/admin.html?act=getAdmins&region_id="+quyu1+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		admin='<option value="">请选择</option>';
		admin+='<option value="-1">客服公共库</option>';
		admin+='<option value="-2">销售公共库</option>';
		$.each(admins, function(i,item){
			admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#'+assignId).append(admin);
	});
}
function selectDepart(c_id){
	city_id="cityid"+c_id;
	cityid=$("#"+city_id).val();
	quyu="quyu"+c_id;
	quyu1=$("#"+quyu).val();
	admin_Unit="adminUnit"+c_id;
	adminUnit=$("#"+admin_Unit).val();
	assignId="assign_admin"+c_id;
	$("#"+assignId).empty();
	var admin='';
	if(quyu1>1){
		resCity=quyu1;
	}else{
		resCity=cityid;
	}
	if(resCity){
		$.get( "/admin.html?act=getAdmins&region_id="+resCity+"&depart="+adminUnit, function(data){
			var admins=eval(data);
			admin='<option value="">请选择</option>';
			admin+='<option value="-1">客服公共库</option>';
			admin+='<option value="-2">销售公共库</option>';
			$.each(admins, function(i,item){
				admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
			});
			$('#'+assignId).append(admin);
		});
	}else{
		$.get( "/admin.html?act=getAdmins&depart="+adminUnit, function(data){
			var admins=eval(data);
			admin='<option value="">请选择</option>';
			admin+='<option value="-1">客服公共库</option>';
			admin+='<option value="-2">销售公共库</option>';
			$.each(admins, function(i,item){
				admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
			});
			$('#'+assignId).append(admin);
		});
	}
	
}
function assign(c_id){
	var assign_admin = $("#assign_admin"+c_id).val();
	var admin_id = $("#admin_id").val();
	if(assign_admin ==''){
		alert("请选择要分配的对象！");return;
	}
	var data = {'act':'assignSingle','admin_id':admin_id,'assign_admin':assign_admin,'c_id':c_id};
	$.post('customer_assign.html',data,function(json){
		if (json.status==1) {
			alert("分配成功！");
			window.location.reload();
		}else{
			alert("库容已满！");
			window.location.reload();
		}
	},'json');

}
//全选城市选择
function selectcityA(){
	cityid=$("#cityid").val();
	adminUnit=$("#adminUnit").val();
	$("#quyu1").empty();
	$("#assign_admin").empty();
	var quyuarr='';
	var admin='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
		$('#quyu1').append(quyuarr);
	});
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
		$("#quyuid1").css("display","none");
	}else{
		$('#quyuid1').show();
	}
	$.get( "/admin.html?act=getAdmins&region_id="+cityid+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		admin='<option value="">请选择</option>';
		admin+='<option value="-1">客服公共库</option>';
		admin+='<option value="-2">销售公共库</option>';
		$.each(admins, function(i,item){
			admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#assign_admin').append(admin);
	});
}
function selectAdminA(){
	quyu1=$("#quyu1").val();
	adminUnit=$("#adminUnit").val();
	$("#assign_admin").empty();
	var admin='';
	$.get( "/admin.html?act=getAdmins&region_id="+quyu1+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		admin='<option value="">请选择</option>';
		admin+='<option value="-1">客服公共库</option>';
		admin+='<option value="-2">销售公共库</option>';
		$.each(admins, function(i,item){
			admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#assign_admin').append(admin);
	});
}
function selectDepartA(){
	cityid=$("#cityid").val();
	quyu1=$("#quyu1").val();
	adminUnit=$("#adminUnit").val();
	$("#assign_admin").empty();
	var admin='';
	if(quyu1>1){
		resCity=quyu1;
	}else{
		resCity=cityid;
	}
	if(resCity){
		$.get( "/admin.html?act=getAdmins&region_id="+resCity+"&depart="+adminUnit, function(data){
			var admins=eval(data);
			admin='<option value="">请选择</option>';
			admin+='<option value="-1">客服公共库</option>';
			admin+='<option value="-2">销售公共库</option>';
			$.each(admins, function(i,item){
				admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
			});
			$('#assign_admin').append(admin);
		});
	}else{
		$.get( "/admin.html?act=getAdmins&depart="+adminUnit, function(data){
			var admins=eval(data);
			admin='<option value="">请选择</option>';
			admin+='<option value="-1">客服公共库</option>';
			admin+='<option value="-2">销售公共库</option>';
			$.each(admins, function(i,item){
				admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
			});
			$('#assign_admin').append(admin);
		});
	}
	
}
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
</body>
</html>