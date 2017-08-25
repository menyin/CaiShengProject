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
					<div class="m_bg">站点管理 > 设置地铁线</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon" ><a href="subway.html?act=roadedit">新增地铁线</a></div>
							<div class="btn icon-9 icon" ><a href="subway.html?act=list">返回总列表</a></div>
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
													<input type="hidden" name="act" id="act" value="roadsave" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="quyu" id="quyu" value="{$subway[cityid]}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title">站点区域：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option <!--{if $_cityid }--> readonly="readonly" style="color:gray;" <!--{/if}--> value="" >省份</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $_cityid }--> readonly="readonly" style="color:gray;" <!--{/if}-->  <!--{if $region1[region_id]==$_cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyu1" name="quyu1" style="width: 160px;"  class="drop">
																		<option <!--{if $quyu1 && $_cityid!=1100 && $_cityid!=1200 && $_cityid!=3100 && $_cityid!=5000}--> readonly="readonly" style="color:gray;" <!--{/if}--> value="1">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option <!--{if $quyu1 && $_cityid!=1100 && $_cityid!=1200 && $_cityid!=3100 && $_cityid!=5000}--> readonly="readonly" style="color:gray;" <!--{/if}--> value="{$quyu11[region_id]}" <!--{if $quyu11[region_id]==$quyu1 }-->selected <!--{/if}-->>{$quyu11[region_name_full]}</option>
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
																<td class="tb_title" width="140px">地铁线ID：</td>
																<td><input type="text" class="text1" name="subway_id" id="subway_id" placeholder="001" value="{$subway[_subway_id]}"  maxlength="3"  onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"  <!--{if $subway[_subway_id]>0}-->readonly="readonly" style="color:gray;"<!--{/if}--> /><span>(001)3位纯数字</span></td>
															</tr>
															<tr>
																<td class="tb_title">地铁线简称：</td>
																<td><input type="text" class="text1" name="subway_name_short" id="subway_name_short" placeholder="1号线" value="{$subway[subway_name_short]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">地铁线全名称：</td>
																<td><input type="text" class="text1" name="subway_name_full" placeholder="地铁一号线" value="{$subway[subway_name_full]}"/></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">下一步</a>
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
	$("#quyu1").empty();
	var quyuarr='';
	quyuarr='<option value="">请选择</option>';
	$.get( "/area.html?act=getarea&region_id="+cityid, function(data){
		var aa=eval(data);
		$.each(aa, function(i,item){
			quyuarr+='<option value="'+item.region_id+'">'+item.region_name_full+'</option>';
		});
		$('#quyu1').append(quyuarr);
		$("#quyu").val(cityid);
		if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000 || cityid=='' || cityid==null){
			$("#quyuid1").css("display","none");
		}else{
			$('#quyuid1').show();
		}
	});
}
</script>
<script type="text/javascript">
	$('#btnSave').click(function(){
		cityid=$("#cityid").val();
		quyu1=$("#quyu1").val();
		if(cityid==1100 || cityid==1200 || cityid==3100 || cityid==5000){
			//$('#quyu').val()
		}else if(quyu1=='' || typeof(quyu1) == 'undefined'){
			alert('请选择城市！');
			return;
		}
		/*if($('#quyu').val() == ''|| typeof($('#quyu').val()) == 'undefined'){
			alert('请选择区域！');
			return;
		}*/
		if($('#subway_id').val() == ''||typeof($('#subway_id').val()) == 'undefined'){
			alert('请输入地铁线ID！');
			return;
		}
		var subway_id=$('#subway_id').val();
		if(subway_id.length!=3){
			alert('地铁线ID位数必须是3位数，请正确输入！');
			return;
		}
		if($('#subway_name_short').val() == ''||typeof($('#subway_name_short').val()) == 'undefined'){
			alert('请输入地铁线简称！');
			return;
		}
		$('#postForm').submit();
		return false;
	});
</script>
</body>
</html>
