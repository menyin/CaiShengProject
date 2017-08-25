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
					<div class="m_bg">开通设计管理 >  广告位新增 > <a href="contract.html?act=list&op=all">返回上一级</a></div>
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
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="addsave" />
													<input type="hidden" name="caid" id="caid" value="{$caid}" />
													<input type="hidden" name="contractId" id="contractId" value="{$contractId}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="80">公司ID ：</td>
																<td width="433"><div class="formMod"><span class="formText" id="myH2"><input type="text" class="text" size="50"  onClick="com();" readonly="" /></span><span style="line-height: 30px;margin-left: 5px;"><a onClick="com();">绑定</a></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
																<td width="60">排序：</td>
																<td width="218"><div class="formMod"><span class="formText"><input type="text" class="text" name="displayOrder" id="displayOrder" value="{$info[displayOrder]}" size="5" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<script type="text/javascript">
															function com(){
																$("#frame").css("display","");
															}
															</script>
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
																<td class="tb_title" width="80">广告位置：</td>
																<td><div class="formMod"><div class="formMod addressMod">
																	<select id="positionId" name="positionId" class="drop" style="width: 160px;" required="required" message="请选择">
																		<option value="-1">请选择</option>
																		<!--{loop $__advStr $key $__adv}-->
																		<option value="{$key}" <!--{if $key==$advInfo[positionId]}--> selected <!--{/if}-->>{$__adv}</option>
																		<!--{/loop}-->
																	</select></div></td>
																<td class="tb_title">开始时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" value="{$contract[startDate]}" onClick="WdatePicker({minDate: '{$date}' ,alwaysUseStartDate: true })" required="required"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>	
															</tr>
															<tr>
																<td class="tb_title">广告天数：</td>
																<td><div class="formMod">
																	<div class="formText">
																	<input type="text" id="week" name="week" style="width: 50px;" class="text" value="{$advInfo[week]}">天</div></div></td>
																<td class="tb_title">立即生效：</td>
																<td><input name="isnow" type="radio" value="1"  checked="" />是 <input name="isnow" type="radio" value="0" />否</td>
															</tr>
															<!-- <tr>		
																<td class="tb_title">结束时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="{$contract[endDate]}" onclick="WdatePicker({minDate: '{$date}' ,alwaysUseStartDate: true })" required="required" readonly="readonly"/></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr> -->
															<tr height="65">
																<td class="tb_title">图片上传：</td>
																<td colspan="3"><div class="formMod">
																	<a id="logo"></a>
																	<input id="hidpic" name="pic_url" type="hidden" value="{$info[pic]}"/>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_sc" name="upload_sc" ></a>
																		</span>
																		<span id="scStatus"><!--{if $info[pic]}-->{$info[pic]}<!--{else}-->未上传<!--{/if}--></span>
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
//删除素材
$('#btnDelpic').live('click',function(){
	//$('#imgView').attr('src','');
	$('#hidpic').val('');
	//标记为删除
	$('#operate').val('delpic');
	//$('.logoImg').hide();
});
//上传素材
$('#upload_sc').uploadify({
	auto:true,
	multi:false,
	swf:'/js/uploadify.swf',
	uploader : '/api/web/uploadify.api',
	formData: {
		'act': 'advPic',
		'userkey':'{$session_id}',
		'timestamp':'{$time}'
	},
	queueID:'showImage',
	fileSizeLimit:'1024kb',
	fileTypeExts:'*.jpg;*.bmp;*.gif;*.jpeg;*.png;*.doc;*.docx;*.xls;*.xlsx;*.txt;*.rar',
	buttonImage:'//cdn.{ROOT_DOMAIN}/img/uploadify/submit.png',
	fileTypeDesc:'All Files',
	method:'post',
	cancelImage: '//cdn.{ROOT_DOMAIN}/img/uploadify/cancel.png',
	width:85,
	height:27,
	//itemTemplate:'<a href="javascript:void(0);" id="btnDelpic" class="del jpFntWes">&#xf057;</a>'+'<img src="" id="imgView" />',
	onSelect:function(){
		//$('.logoImg').show();
	},
	onUploadSuccess:function(file,data,response){
		if(data!=null&&data!=undefined&&data!=''){
			 var json = eval("("+data+")");
			 if(json.error==100){
				 $.anchorMsg("请选择您要上传的文件", { icon: "warning" });
			 }else if(json.error==101){
				 $.anchorMsg("文件超过最大限制", { icon: "warning" });
			 }else if(json.error==102){
				 $.anchorMsg("您上传的文件格式有误", { icon: "warning" });
			 }else if (json.error==104) {
				 $.anchorMsg("文件上传失败", { icon: "warning" });
			 } else {
				var path = json.path;
				//$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
				//alert("上传成功!");
				$("#scStatus").text(json.name+"材料上传成功！")
				//$('#scStatus').val("材料上传成功！");
				$('#hidpic').val(json.name);
				$('#delpic').val(json.name);
				$('#operate').val('');//清空删除LOGO操作
			 }
		}
	},
	onSelectError:function(file,errorCode,errorMsg){
		var settings = this.settings;
		switch(errorCode) {
			case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
				$.anchorMsg('抱歉 "' + file.name + '" 文件查过了大小限制 (' + settings.fileSizeLimit + ').',{icon:'warning'});
				break;
			case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
				$.anchorMsg('文件 "' + file.name + '" 为空.',{icon:'warning'});
				break;
			case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
				$.anchorMsg('文件 "' + file.name + '" 类型不支持 (' + settings.fileTypeDesc + ').',{icon:'warning'});
				break;
		}
	}
});
$('#btnSave').click(function(){
	$('#postForm').submit();
	return false;
});
</script>
<script type="text/javascript">
		var frmValid=$("#postForm").validate({
			rules:{
				c_id:{required:true,
					remote: {
						url: "/company.html", 
						type: "post",
						dataType: "json",
						data: { act: "cidCheck"},
						dataFilter: function(json) {
							var result = eval('(' + json + ')');
							if (result && result.state==1) {
								$(".tipText font").remove();
								return "false";
							}
							else {
								//$(".tipText").prepend('<font class="green jpFntWes">&#xf00c;</font>');
								return "true";
							}
						}
					}
				},
				positionId:{required:true},
				txtStartDate:{required:true},
				week:{required:true}
			},
			messages:{
				c_id:{required:'请输入公司ID<span class="tipArr"></span>',
					remote: "该公司ID不存在"
				},
				positionId:{required:'请选择广告位置<span class="tipArr"></span>'},
				txtStartDate:{required:'请选择开始时间<span class="tipArr"></span>'},
				week:{required:'请输入广告天数<span class="tipArr"></span>'}
			},
			errorClasses:{
				c_id:{required:'tipLayErr tipw120',
					remote:'tipLayErr tipw100'
				},
				positionId:{required:'tipLayErr tipw120'},
				txtStartDate:{required:'tipLayErr tipw120'},
				week:{required:'tipLayErr tipw120'}
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
