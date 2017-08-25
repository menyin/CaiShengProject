<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
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
					<div class="m_bg">客服管理 > <a href="company.html?act=mylist&ordertype=3&query=">我的企业</a>  >  <a href="contract.html?act=comlist&op=all&c_id={$_cid}">公司：[{$com[cname]}] 合同总列表</a></font> > 合同：[{$contract[title]}] > 广告位修改</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon"><a href="contract.html?act=comlist&op=all&c_id={$_cid}">返回公司：[{$com[cname]}]  合同总列表</a></div>
							<div class="btn icon-9 icon"><a href="contract.html?act=advlist&contractId={$contractId}&c_id={$_cid}">返回公司：[{$com[cname]}] 广告位总列表</a></div>
							<!-- <span class="gray"><a href="/service/contract.html?act=comlist&op=all&c_id={$c_id}">返回合同列表</a></span> -->
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
												<form id="postForm" name="postForm" method="post" action="contract.html">
													<input type="hidden" name="act" id="act" value="advInfoSingesave" />
													<input type="hidden" name="contractId" id="contractId" value="{$contractId}" />
													<input type="hidden" name="caid" id="caid" value="{$caid}" />
													<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table>
															<tr style="display:none;">
																<td class="tb_title" width="140px">合同编号：</td>
																<td colspan=3>{$contractId}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid{$i}" name="cityid" onchange="selectcity(this.value,{$i});" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option  value="0" >全国</option>
																		<!--{loop $regions1 $region1}-->
																			<option value="{$region1[region_id]}"  <!--{if $region1[region_id]==$cityid}--> selected {/if}>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuidA{$i}" style="<!--{if $quyu1}-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyuA{$i}" name="quyuA" style="width: 160px;"  class="drop" onchange="selectquyu(this.value,{$i});">
																		<option value="">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																			<option value="{$quyu11[region_id]}" <!--{if $quyu11[region_id]==$quyu1}-->selected<!--{/if}-->>{$quyu11[region_name_full]}</option>
																		<!--{/loop}-->
																		</select>
																	</lable>
																	<label id="quyuidB{$i}" style="<!--{if $quyu2 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyuB{$i}" name="quyuB" style="width: 160px;"  class="drop">
																		<option value="">请选择</option>
																		<!--{loop $quyu2Arr $quyu22}-->
																			<option value="{$quyu22[region_id]}" <!--{if $quyu22[region_id]==$quyu2 }-->selected <!--{/if}-->>{$quyu22[region_name_full]}</option>
																		<!--{/loop}-->
																		</select>
																	</lable>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">广告位：</td>
																<td><div class="formMod"><div class="formMod addressMod">
																	<select id="positionId" name="positionId" class="drop" style="width: 160px;" required="required" message="请选择">
																		<option value="-1">请选择</option>
																		<!--{loop $__advStr $key $__adv}-->
																		<option value="{$key}" <!--{if $key==$advInfo[positionId]}--> selected <!--{/if}-->>{$__adv}</option>
																		<!--{/loop}-->
																	</select></div></td>
																<td class="tb_title">广告天数：</td>
																<td><div class="formMod">
																	<div class="formText">
																	<input type="text" id="week" name="week" style="width: 50px;" class="text" value="{$advInfo[week]}">天</div></div></td>
															</tr>
														</table>
													</div>
													<div class="apply_btn_next">
														<div class="apply_btn_bg">
															<a class="apply_1_next" id="step1_submit">完成</a>
														</div>
													</div>
													</form>
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
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(cityid,id){
	$("#quyuA"+id).empty();
	$("#quyuB"+id).empty();
	var quyuarr='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
	$('#quyuA'+id).append(quyuarr);
	$('#quyuidA'+id).show();
	$("#quyuidB"+id).css("display","none");
	});	
}
//获取下一级
function selectquyu(quyuid,id){
	cityid=$("#cityid"+id).val();
	$("#quyuB"+id).empty();
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+quyuid, function( data ){
		if(data!='[]'){
			$('#quyuidB'+id).show();
		}
		var aa=eval(data);
		$.each(aa, function(i,item){ 
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';　
		});
	$('#quyuB'+id).append(quyuarr);
	if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null || cityid==0){
		$('#quyuidB'+id).css("display","none");
	}else{
		$('#quyuidB'+id).show();
	}
	});
}
</script>
<script type="text/javascript">
$('#step1_submit').click(function(){
	$('#postForm').submit();
	return false;
});
</script>
</body>
</html>