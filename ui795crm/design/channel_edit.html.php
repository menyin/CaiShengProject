<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<body>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
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
					<div class="m_bg">名企分类 > 名企分类添加</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="channel.html?act=channeledit">新增名企类别</a></div>
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
													<input type="hidden" name="act" id="act" value="channelsave" />
													<input type="hidden" name="id" id="id" value="{$channel['id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">类别ID：</td>
																<td >{$channel[id]}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option value="">请选择</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $region1[region_id]==$cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyu1" name="quyu1" style="width: 160px;"  class="drop">
																		<option value="">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option value="{$quyu11[region_id]}" <!--{if $quyu11[region_id]==$quyu1 }-->selected <!--{/if}-->>{$quyu11[region_name_full]}</option>
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
																<td class="tb_title">类别名称：</td>
																<td>
																<div class="formMod">
																	<span class="formText">
																		<input type="text" class="text" id="channel_name" name="channel_name" value="{$channel['channel_name']}" size="50" />
																		<input type="hidden" class="text" id="Oldchannel_name" name="Oldchannel_name" value="{$channel['channel_name']}" size="50" />
																	</span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div>
																</div>
																</td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">完成</a>
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
		<!--{template design/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(){
	cityid=$("#cityid").val();
	$("#quyu1").empty();
	var quyuarr='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
		$('#quyu1').append(quyuarr);
		//$("#quyu").val(cityid);
		if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
			$("#quyuid1").css("display","none");
		}else{
			$('#quyuid1').show();
		}
	});
}
</script>
<script type="text/javascript">
		/*var frmValid=$("#postForm").validate({
			rules:{
				channel_name:{required:true,rangelength: [2,50]}
			},
			messages:{
				channel_name:{
					required:'请填写类别名称<span class="tipArr"></span>',
					rangelength:'类别名称：2-50个字符<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				channel_name:{required:'tipLayErr tipw150',rangelength:'tipLayErr tipw150'}
			},
			tips:{
				channel_name:'类别名称：2-50个字符<span class="tipArr"></span>'
			},
			tipClasses:{
				channel_name:'tipLayTxt tipw150'
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.closest('div.formMod').find('.tipPos .tipLay').append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});*/
</script>		
<script>
$('#btnSave').click(function(){
	cityid=$("#cityid").val();
	quyu1=$("#quyu1").val();
	if((cityid!=1100 && cityid!=1200 && cityid!=3100 && cityid!=5000) && (quyu1=='' || typeof(quyu1) == 'undefined')){
		alert('请选择城市！');
		$('#quyu1').focus();
		return;
	}else if(cityid=='' || typeof(cityid) == 'undefined'){
		alert('请选择城市！');
		$('#cityid').focus();
		return;
	}
	var channel_name = $('#channel_name').val();
	if(channel_name==''||typeof(channel_name) == 'undefined'){
		alert('请输入类别名称！');
		$('#channel_name').focus();
		return;
	}
	$('#postForm').submit();
	return false;
});
</script>
</body>
</html>
