<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_uploadify.js?v=20140313"></script>
<style type="text/css">
	.uploadify-button{margin-top: -20px;}
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
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">劳务派遣管理 > 客户管理</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="company.html?act=edit">新增客户</a></div>
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
													<form id="postForm" name="postForm" action="company.html" method="post">
													<input type="hidden" name="act" value="save" />
													<input type="hidden" name="from" value="{$from}" />
													<input type="hidden" name="adminid" value="{$_SESSION[adminid]}" />
													<input type="hidden" name="hddArea" id="hddArea" value="{$result['comAreaId']}" />
													<input type="hidden" name="cid" id="cid" value="{$result['cid']}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title">企业名称：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="cname" id="cname" value="{$result[cname]}" size="50"/></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">所在地：</td>
																<td ><div class="formMod addressMod">
																	<select id="cityid{$i}" name="cityid" onChange="selectcity(this.value,{$i});" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option  value="" >请选择</option>
																		<!--{loop $regions1 $region1}-->
																			<option value="{$region1[region_id]}"  <!--{if $region1[region_id]==$cityid}--> selected {/if}>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuidA{$i}" style="<!--{if $quyu1}-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyuA{$i}" name="quyuA" style="width: 160px;"  class="drop" onChange="selectquyu(this.value,{$i});">
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
																<td class="tb_title" width="80">企业类型：</td>
																<td ><div class="formMod"><div class="formMod addressMod">
																	<select id="comType" name="comType" class="drop" style="width: 160px;" required="required" message="请选择" >
																		<option value="-1">请选择</option>
																		<!--{loop $__laborComStr $key $__adv}-->
																		<option value="{$key}" <!--{if $key==$result[comType]}--> selected <!--{/if}-->>{$__adv}</option>
																		<!--{/loop}-->
																	</select></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">详细地址：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comAddress" id="comAddress" value="{$result['comAddress']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">联系人：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comUser" id="comUser" value="{$result['comUser']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">联系电话：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comPhone" id="comPhone" value="{$result['comPhone']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">传真：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comFax" id="comFax" value="{$result['comFax']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">联系手机：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comMobile" id="comMobile" value="{$result['comMobile']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">邮箱：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comEmail" id="comEmail" value="{$result['comEmail']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">备用邮箱：</td>
																<td ><div class="formMod"><span class="formText"><input type="text" class="text" name="comEmailBak" id="comEmailBak" value="{$result['comEmailBak']}" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">确认提交</a>
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
		<!--{template labor/sidebar}-->
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
	$("#hddArea").val(cityid);
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
	$("#hddArea").val(quyuid);
}
$('#btnSave').click(function(){
	$('#postForm').submit();
	return false;
});
</script>
<script type="text/javascript">
		//手机号码验证规则
		$.validator.addMethod("inputRegValiMobile", function(value, element, param) {
			if (this.optional(element))
				return "dependency-mismatch";
			var reg = param;
			if (typeof param == 'string') {
				reg = new RegExp(param);
			}
			return reg.test(value);
		}, '手机号码格式不正确');

		var frmValid=$("#postForm").validate({
			rules:{
				cname:{required:true,
					remote: {
						url: "/labor/company.html", 
						type: "post",
						dataType: "json",
						data: { act: "cnameCheck",cid: "{$result[cid]}"},
						dataFilter: function(json) {
							var result = eval('(' + json + ')');
							if (result && result.state==0) {
								$(".tipText font").remove();
								return "false";
							}
							else {
								$(".tipText").prepend('<font class="green jpFntWes">&#xf00c;</font>');
								return "true";
							}
						}
					}
				},
				comUser: {
					required: true,
					rangelength: [1, 10]
				},
				comPhone: {
					required: true,
					tel: true
				},
				comMobile: {
					inputRegValiMobile: '^[1][0-9]{10}$'
				},
				comEmail: {
					required: true,
					email: true
				}
			},
			messages:{
				cname:{required:'请输入公司名称<span class="tipArr"></span>',
					remote: "该企业名称已存在"
				},
				comUser: {
					required: '请填写联系人<span class="tipArr"></span>',
					rangelength: '1-10个字组成<span class="tipArr"></span>'
				},
				comPhone: {
					required: '请填写联系电话<span class="tipArr"></span>',
					tel: '请填写正确的电话号码<span class="tipArr"></span>'
				},
				comMobile: {
					inputRegValiMobile: '请填写正确的手机号码<span class="tipArr"></span>'
				},
				comEmail: {
					required: '请填写邮箱<span class="tipArr"></span>',
					email: '请填写正确的邮箱<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				cname:{required:'tipLayErr tipw120',
					remote:'tipLayErr tipw100'
				},
				comUser: {
					required: 'tipLayErr tipw150',
					rangelength: 'tipLayErr tipw150'
				},
				comPhone: {
					required: 'tipLayErr tipw180',
					tel: 'tipLayErr tipw180'
				},
				comMobile: {
					inputRegValiMobile: 'tipLayErr tipw180'
				},
				comEmail: {
					required: 'tipLayErr tipw180',
					email: 'tipLayErr tipw180'
				}
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.closest('div.formMod').find('.tipPos .tipLay').append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});
</script>
</body>
</html>
