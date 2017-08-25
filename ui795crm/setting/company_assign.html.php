<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
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
					<div class="m_bg">客户分配管理 > 企业分配</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-9 icon" ><a href="admin.html?act=list">返回列表</a></div> -->
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div class="">
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px">离职人员：</td>
																<td width="320px">
																	<select id="cityid" name="cityid" onChange="selectcity();" class="drop" style="width: 150px;" required="required" message="请选择所属的站点">
																		<option value="0" >全国</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}">{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->" onChange="selectAdmin();">
																		<select id="quyu1" name="quyu1" style="width: 150px;"  class="drop">
																		<option value="1">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option value="{$quyu11[region_id]}">{$quyu11[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	</label>
																</td>
																<td width="140px"><select id="adminUnit" name="adminUnit" class="drop" style="width: 120px;" onChange="selectDepart();">
																		<option value=" ">请选择部门</option>
																		<option value="1">客服部</option>
																		<option value="2">销售部</option>
																	</select></td>
																<td >
																	<select id='assign_admin' class="drop"  name='assign_admin' style="width: 120px;">
																		<option value='' >请选择</option>

																	</select>
																</td>
															</tr>
															<tr>
																<td class="tb_title">设置：</td>
																<td colspan="3">
																	<input type="radio" name="contract_type" value="1"> 已付款 
																	<input type="radio" name="contract_type" value="2"> 全部 
																	<input type="radio" name="contract_type" value="3"> 未付款   
																	<select name="orderTime">
																		<option value="1">登录时间</option>
																		<option value="2">注册时间</option>
																	</select>
																	分配数量<input class="text" type="text" size="5" name="assign_num">(0-表示符合条件的全部分配，其他数字表示分配数量)
																</td>
															</tr>
															<tr>
																<td rowspan="2" class="tb_title">分配人员：</td>
																<td><select id="cityidA" name="cityidA" onChange="selectcityA();" class="drop" style="width: 150px;" required="required" message="请选择所属的站点">
																		<option value="0">全国</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}">{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1A" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->" onChange="selectAdminA();">
																		<select id="quyu1A" name="quyu1A" style="width: 150px;"  class="drop">
																		<option value="1">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option value="{$quyu11[region_id]}">{$quyu11[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	</lable></td>
																<td colspan="2"><select id="adminUnitA" name="adminUnitA" class="drop" style="width: 120px;" onChange="selectDepartA();">
																		<option value=" ">请选择部门</option>
																		<option value="1">客服部</option>
																		<option value="2">销售部</option>
																	</select></td>
															</tr>
															<tr>
															    <td colspan="3" id="assign_adminA">
																<!--{loop $adminAll $value}-->
																	<span style="width: 160px; display: inline-block;"><input type="checkbox" value='{$value[adminid]}' name="assign_adminA[]" id="assignId{$value[adminid]}"><label for="assignId{$value[adminid]}">{$value[adminUsername]}<!--{if $comNum[$value[adminid]]>0}-->({$comNum[$value[adminid]]})<!--{/if}--></label></span>
																<!--{/loop}-->
															    </td>
  															</tr>

														</table>



													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" onclick="document.postForm.submit();">开始分配</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template setting/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(){
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
		$.each(admins, function(i,item){
			admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#assign_admin').append(admin);
	});
}
function selectAdmin(){
	quyu1=$("#quyu1").val();
	adminUnit=$("#adminUnit").val();
	$("#assign_admin").empty();
	var admin='';
	$.get( "/admin.html?act=getAdmins&region_id="+quyu1+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		admin='<option value="">请选择</option>';
		$.each(admins, function(i,item){
			admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#assign_admin').append(admin);
	});
}
function selectDepart(){
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
			$.each(admins, function(i,item){
				admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
			});
			$('#assign_admin').append(admin);
		});
	}else{
		$.get( "/admin.html?act=getAdmins&depart="+adminUnit, function(data){
			var admins=eval(data);
			admin='<option value="">请选择</option>';
			$.each(admins, function(i,item){
				admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
			});
			$('#assign_admin').append(admin);
		});
	}
}
function selectcityA(){
	cityid=$("#cityidA").val();
	adminUnit=$("#adminUnitA").val();
	$("#quyu1A").empty();
	$("#assign_adminA").empty();
	var quyuarr='';
	var admin='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
		$('#quyu1A').append(quyuarr);
	});
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
		$("#quyuid1A").css("display","none");
	}else{
		$('#quyuid1A').show();
	}
	$.get( "/admin.html?act=getAdmins&region_id="+cityid+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		$.each(admins, function(i,item){
			admin+='<span style=\"width: 160px; display: inline-block;\"><input type="checkbox" value="'+item.adminid+'" name="assign_adminA[]" id="assignId'+item.adminid+'"><label for="assignId'+item.adminid+'">'+item.adminUsername+'</lable></span>';
			//admin+='<option value="'+item.adminid+'">'+item.adminUsername+'</option>';
		});
		$('#assign_adminA').append(admin);
	});
}
function selectAdminA(){
	quyu1=$("#quyu1A").val();
	adminUnit=$("#adminUnitA").val();
	$("#assign_adminA").empty();
	var admin='';
	$.get( "/admin.html?act=getAdmins&region_id="+quyu1+"&depart="+adminUnit, function(data){
		var admins=eval(data);
		$.each(admins, function(i,item){
			admin+='<span style=\"width: 160px; display: inline-block;\"><input type="checkbox" value="'+item.adminid+'" name="assign_adminA[]" id="assignId'+item.adminid+'"><label for="assignId'+item.adminid+'">'+item.adminUsername+'</lable></span>';
		});
		$('#assign_adminA').append(admin);
	});
}
function selectDepartA(){
	cityid=$("#cityidA").val();
	quyu1=$("#quyu1A").val();
	adminUnit=$("#adminUnitA").val();
	$("#assign_adminA").empty();
	var admin='';
	if(quyu1>1){
		resCity=quyu1;
	}else{
		resCity=cityid;
	}
	if(resCity){
		$.get( "/admin.html?act=getAdmins&region_id="+resCity+"&depart="+adminUnit, function(data){
			var admins=eval(data);
			$.each(admins, function(i,item){
				admin+='<span style=\"width: 160px; display: inline-block;\"><input type="checkbox" value="'+item.adminid+'" name="assign_adminA[]" id="assignId'+item.adminid+'"><label for="assignId'+item.adminid+'">'+item.adminUsername+'</lable></span>';
			});
			$('#assign_adminA').append(admin);
		});
	}else{
		$.get( "/admin.html?act=getAdmins&depart="+adminUnit, function(data){
			var admins=eval(data);
			$.each(admins, function(i,item){
				admin+='<span style=\"width: 160px; display: inline-block;\"><input type="checkbox" value="'+item.adminid+'" name="assign_adminA[]" id="assignId'+item.adminid+'"><label for="assignId'+item.adminid+'">'+item.adminUsername+'</lable></span>';
			});
			$('#assign_adminA').append(admin);
		});
	}
}
</script>
</body>
</html>
