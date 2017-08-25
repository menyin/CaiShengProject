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
					<div class="m_bg">开通设计管理 >  广告位<!--{if $copy}-->复制<!--{else}-->编辑<!--{/if}--> > <a href="adv.html?act=list&op=all&advType=-1">返回上一级</a></div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div id="frame" style="display:none;">
													<iframe scrolling="auto" src="company.php?act=unique&c_id={$com[_cid]}" width="100%" height="230" frameborder=0></iframe>
												</div>
												<div class="">
													<form id="postForm" name="postForm" method="post" action="adv.html">
													<input type="hidden" name="act" id="act" value="advsave" />
													<input type="hidden" name="toact" id="toact" value="{$toact}" />
													<input type="hidden" name="caid" id="caid" value="{$info['caid']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="80">公司ID ：</td>
																<td colspan="3"><div class="formMod"><span class="formText" id="myH2"><input type="hidden" name="c_id" id="c_id" value="{$info[_cid]}"><input type="text" class="text" size="50"  onClick="com();" readonly="" value="{$com[cname]}" /></span><span style="line-height: 30px;margin-left: 5px;"><a onClick="com();">绑定</a></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<script type="text/javascript">
															function com(){
																$("#frame").css("display","");
															}
															</script>
															<!--{if $_GET['positionId']==18}-->
																<tr>
																	<td class="tb_title">广告城市：</td>
																	<td colspan=5><input type="hidden" id="regionId" name="regionId"/>
																		<input type="text" style="height:30px;width:300px;" class="text" id="region" name="region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true"> 
																		<script language="javascript">
																			var areaOdjid='regionId'; 
																			var areaOdjstr='region';
																			var areaOdjProvice=1;//是否省可选
																			var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
																			var areaOdjnumber=2;//数量，如果唯一值，则立即返回
																		</script>
																	</td>
																</tr>
															<!--{else}-->
																<tr>
																	<td class="tb_title">广告城市：</td>
																	<td colspan=5><div class="formMod addressMod">
																		<select id="cityid{$i}" name="cityid" onChange="selectcity(this.value,{$i});" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																			<option  value="0" >全国</option>
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
																			<select id="quyuB{$i}" name="quyuB" style="width: 160px;"  class="drop" onChange="checkOrder();">
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
															<!--{/if}-->
															<tr>
																<td class="tb_title" width="80">广告位置：</td>
																<td width="433"><div class="formMod"><div class="formMod addressMod">
																	<select id="positionId" name="positionId" class="drop" style="width: 160px;" required="required" message="请选择" onChange="checkOrder();">
																		<option value="-1">请选择</option>
																		<!--{loop $__advStr $key $__adv}-->
																		<option value="{$key}" <!--{if $key==$positionId}--> selected <!--{/if}-->>{$__adv}</option>
																		<!--{/loop}-->
																	</select></div></td>
																<td width="60">排序：</td>
																<td width="218"><div class="formMod"><span class="formText"><input type="text" class="text" name="displayOrder" id="displayOrder" value="{$info[displayOrder]}" size="5" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">开始时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" value="<!--{if $info[startDate]}-->{$info[startDate]}<!--{else}-->{$date}<!--{/if}-->" onClick="WdatePicker()" required="required"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td class="tb_title">结束时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="{$info[endDate]}" onClick="WdatePicker()" required="required"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr height="65">
																<td class="tb_title">图片上传：</td>
																<td colspan="3">
																路径：<input type="text" class="text" name="pic_url" id="pic_url" size="50" value="{$info['pic']}" />
																<div class="formMod" style="padding-top:10px;">
																	<div class="r">
																		<input type="file" name="Filedata" id="hidpic">
																		<span style="color:#f00;font-weight:bold;">注:</span> 图片宽高不大于5000，最大2MB，支持jpg/gif/png格式</span>
																		<div id="showImage" class="loadBox" <!--{if !$info['pic']}-->style="display:none"<!--{/if}-->>
																			<img src="//pic.{ROOT_DOMAIN}/pos/{$info['pic']}" id="imgView" width="160" height="100" />
																		</div>
																	</div>
																	<div class="clear"></div>
																</div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">广告链接地址：</td>
																<td colspan="3"><div class="formMod"><span class="formText"><input type="text" class="text" name="url" id="url" value="<!--{if $info[url]}-->{$info[url]}<!--{else}-->http://<!--{/if}-->" size="50" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">广告备注：</td>
																<td colspan="3"><textarea type="text" class="text1" id="txtNote" name="txtNote" rows="3" message="广告备注" style="margin: 0px; width: 100%;">{$info[note]}</textarea></td>
															</tr>
															<tr>
																<td class="tb_title" width="80">首页职位显示：</td>
																<td colspan="3"><input type="radio" id="show1" name="showStatus" value="0" <!--{if $info[showStatus]==0}-->checked=""<!--{/if}-->> <label for="show1">显示</label>     <input type="radio" id="show2" name="showStatus" value="1" <!--{if $info[showStatus]==1}-->checked=""<!--{/if}-->><label for="show2">不显示</label></td>
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
		<!--{template design/sidebar}-->
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
		checkOrder();
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
		checkOrder();
	}

	function checkOrder(){
		positionId=$("#positionId").val();
		cityid=$("#cityid1").val();
		quyuA=$("#quyuA1").val();
		quyuB=$("#quyuB1").val();

		if(quyuB){
			cityid=quyuB;
		}else if(quyuA){
			cityid=quyuA;
		}else{
			cityid=cityid;
		}
		
		$.getJSON( "/advOrder.html?act=order&cityid="+cityid+"&positionId="+positionId, function( data ){
			$('#displayOrder').val(data.displayOrder);
		});
	}

	//删除素材
	$('#btnDelpic').live('click',function(){
		//$('#imgView').attr('src','');
		$('#hidpic').val('');
		//标记为删除
		$('#operate').val('delpic');
		//$('.logoImg').hide();
	});
	//上传素材
	$("#hidpic").wrap("<form id='pic_file' action='/api/web/uploadify.api' method='post' enctype='multipart/form-data'></form>");
	$("#hidpic").change(function(){
		var uploadFile = document.getElementById("hidpic").files;
		if(uploadFile!=undefined){
			var ImgType=uploadFile[0].type.toLowerCase();
			var ImgSize=uploadFile[0].size;
			var maxSize=(2*1024*1024);
			if(ImgType.indexOf('image')!=-1){//判断当前选择的文件是否为图片格式
				if(ImgSize<=maxSize){//判断当前选择的文件大小是否为2M；
					$("#pic_file").submitForm({ beforeSubmit: '',data: {act:'advPic',timestamp:{$time},fileSize:2048},
						success:function(json){
							if(json.status>0){
								var path = json.path;
								$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
								$('#showImage').show();
								$('#pic_url').val(json.name);
							}else{
								$('#showImage').hide();
								$.message(json.error,{title:'操作失败',icon: "fail"});
							}
						},clearForm:false});
				}else {
					$.message('图片必须小于2M！',{title:'操作失败',icon: "fail"});
				}
			}else {
				$.message('请选择图片！',{title:'操作失败',icon: "fail"});
			}
		}else {
			$("#pic_file").submitForm({ beforeSubmit: '',data: {act:'advPic',timestamp:{$time},fileSize:2048},
				success:function(json){
					if(json.status>0){
						var path = json.path;
						$('#showImage').show();
						$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
						$('#pic_url').val(json.name);
					}else{
						$('#showImage').hide();
						$.message(json.msg,{title:'操作失败',icon: "fail"});
					}
				},clearForm:false});
		}
	})
	$('#btnSave').click(function(){
		var txtStartDate=$('#txtStartDate').val(),
			txtEndDate=$('#txtEndDate').val(),
			c_id = $('#c_id').val(),
			positionId = $('#positionId').val();

		if(txtStartDate>txtEndDate){
			alert('开始时间不能大于结束时间！');
			$('#txtEndDate').focus();
			return;
		}
		if(!c_id||typeof(c_id)=='undefined'){
			alert('公司ID不能为空');
			return;
		}
		if(positionId<0||typeof(positionId)=='undefined'){
			alert('广告位置不能为空');
			return;
		}

		if(positionId==10||positionId==18){

		}else{
			var pic_url = $("#pic_url").val();
			if(pic_url==''){
				alert('广告图片不能为空');
				return;
			}
		}
		$('#postForm').submit();
		return false;
	});
</script>

</body>
</html>
