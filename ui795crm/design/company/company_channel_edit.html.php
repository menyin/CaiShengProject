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
					<div class="m_bg">名企管理 >  新增名企</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-9 icon"><a href="channel.html?act=comlist&ordertype=1&query=">返回总列表</a></div>
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
													<input type="hidden" name="id" id="id" value="{$id}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">公司ID：</td>
																<td >{$c_id}<input type="hidden" name="c_id" value="{$com[_cid]}"></td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">公司名称：</td>
																<td >{$com[cname]}</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">类别：</td>
																<td ><input name="type" type="radio" value="0" checked="" />行业<input name="type" type="radio" value="1" />名企</td>
															</tr>
															<tr>
																<td class="tb_title">城市：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option value="">请选择</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if ($result[id] && $region1[region_id]==$cityid) || ($com[comCityId]==$region1[region_id] && !$result[id])}--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyu1" name="quyu1" onchange="selectchannel();" style="width: 160px;"  class="drop" >
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
															<!-- <tr>
																<td class="tb_title" width="140px">所在城市：</td>
																<td >{$com[city_name]}<input type="hidden" name="comCityId" value="{$com[comCityId]}"></td>
															</tr> -->
															<tr>
																<td class="tb_title" width="140px">行业分类：</td>
																<td ><select id="channel_id" name="channel_id">
																		<option value=''>请选择</option>
																		<!--{loop $industry $key $value}-->
																			<option value='{$value[industryClassId]}' <!--{if $result[channel_id]==$value[industryClassId]}-->selected <!--{/if}-->>{$value[industryClassName]}</option>
																		<!--{/loop}-->
																	</select></td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">开始时间：</td>
																<td ><input type="text" class="text" id="txtStartDate" name="txtStartDate" placeholder="" value="{$result[startDate]}" onclick="WdatePicker()" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">结束时间：</td>
																<td ><input type="text" class="text" id="txtEndDate" name="txtEndDate" placeholder="" value="{$result[endDate]}" onclick="WdatePicker()" required="required"/></td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">图片/文字：</td>
																<td ><input name="isWords" type="radio" value="0"  checked="" />图片<input name="isWords" type="radio" value="1" />文字</td>
															</tr>
															<tr height="65">
																<td class="tb_title">图片：</td>
																<td><div class="formMod">
																	<a id="logo"></a>
																	<input id="hidpic" name="logo" type="hidden" value="{$result[logo]}"/>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_sc" name="upload_sc" ></a>
																		</span>
																		<span class="logoImg" <!--{if !$result[logo]}-->style="display:none"<!--{/if}-->>
																			<img id="imgView" src="http://pic.{ROOT_DOMAIN}/pos/{$result[logo]}" />
																		</span>
																	</div>
																	<div class="clear"></div>
																</div></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="step_submit_btn">
													<button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="btnSave"></button>
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
		<!--{template company/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function selectcity(){
	cityid=$("#cityid").val();
	$("#quyu1").empty();
	$("#channel_id").empty();
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
//删除素材
$('#btnDelpic').live('click',function(){
	$('#imgView').attr('src','');
	$('#hidpic').val('');
	//标记为删除
	$('#operate').val('delpic');
	$('.logoImg').hide();
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
	//cancelImage: '//cdn.{ROOT_DOMAIN}/img/uploadify/cancel.png',
	width:85,
	height:27,
	itemTemplate:'<img src="" id="imgView" />',
	onSelect:function(){
		$('.logoImg').show();
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
				$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
				//alert("上传成功!");
				//$("#scStatus").text(json.name+"材料上传成功！")
				//$('#scStatus').val("材料上传成功！");
				$('#hidpic').val(json.name);
				//$('#delpic').val(json.name);
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
	var channel_id = $('#channel_id').val(),
		txtStartDate = $('#txtStartDate').val(),
		txtEndDate = $('#txtEndDate').val();
	if(channel_id==''){
		alert('请选择行业分类');
		return;
	}
	if(txtStartDate==''){
		alert('请选择开始时间');
		return;
	}
	if(txtEndDate==''){
		alert('请选择结束时间');
		return;
	}
	$('#postForm').submit();
	return false;
});
</script>
</body>
</html>
