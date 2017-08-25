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
					<div class="m_bg">资讯管理 >专访轮播新增</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="adv.html?act=edit">新增专访轮播</a></div>
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
													<input type="hidden" name="advid" id="advid" value="{$adv['advid']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">广告ID：</td>
																<td>{$adv[advid]}</td>
															</tr>
															<tr>
																<td class="tb_title">站点区域：</td>
																<td><div class="formMod addressMod">
																	<select id="cityid" name="cityid" onchange="selectcity();" class="drop" style="width: 160px;" required="required" message="请选择所属的站点">
																		<option <!--{if $cityid }--> disabled <!--{/if}--> value="" >省份</option>
																		<!--{loop $regions1 $region1}-->
																		<option value="{$region1[region_id]}" <!--{if $cityid }--> disabled <!--{/if}-->  <!--{if $region1[region_id]==$cityid }--> selected <!--{/if}-->>{$region1[region_name_full]}</option>
																		<!--{/loop}-->
																	</select>
																	<label id="quyuid1" style="<!--{if $quyu1 }-->display:<!--{else}-->display:none;<!--{/if}-->">
																		<select id="quyu1" name="quyu1" style="width: 160px;"  class="drop">
																		<option <!--{if $quyu1 && $cityid!=1100 && $cityid!=1200 && $cityid!=3100 && $cityid!=5000}--> disabled <!--{/if}--> value="1">请选择</option>
																		<!--{loop $quyu1Arr $quyu11}-->
																		<option <!--{if $quyu1 && $cityid!=1100 && $cityid!=1200 && $cityid!=3100 && $cityid!=5000}--> disabled <!--{/if}--> value="{$quyu11[region_id]}" <!--{if $quyu11[region_id]==$quyu1 }-->selected <!--{/if}-->>{$quyu11[region_name_full]}</option>
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
																<td class="tb_title" width="140px">专访标题：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="adv_title" id="adv_title" placeholder="" value="{$adv[adv_title]}"  size="50"/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">链接地址：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="link_url" id="link_url" placeholder="" value="{$adv[link_url]}"  size="50"/></span></div></td>
															</tr>
															<tr height="65">
																<td class="tb_title">图片上传：</td>
																<td><div class="formMod">
																	<div>
																		<input id="hidpic" name="pic_url" type="text" value="{$adv[pic_url]}" size="50" />
																	</div>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_pic" name="upload_pic" ></a>
																		</span>
																		<span id="scStatus"><!--{if $adv[pic_url]}-->{$adv[pic_url]}<!--{else}-->未上传<!--{/if}--></span>
																		<span class="logoImg" <!--{if !$adv[pic_url]}-->style="display:none"<!--{/if}-->>
																			<a href="javascript:void(0);" id="btnDelLogo"></a>
																			<img id="imgView" src="<!--{if $adv[pic_url]}-->http://pic.{ROOT_DOMAIN}/news/{$adv[pic_url]}<!--{/if}-->" />
																		</span>
																	</div>
																	<div class="clear"></div>
																</div></td>
															</tr>
															<tr>
																<td class="tb_title">是否显示：</td>
																<td><div class="formMod"><span class="formText">
																	<input type="radio" id="showStatus" name="showStatus" value="0" <!--{if $adv[showStatus]==0}-->checked<!--{/if}-->>是
																	<input type="radio" id="showStatus" name="showStatus" value="1" <!--{if $adv[showStatus]==1}-->checked<!--{/if}-->>否
																</span></div></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">完   成</a>
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
		<!--{template news/sidebar}-->
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
		var frmValid=$("#postForm").validate({
			rules:{
				cityid:{required:true}
			},
			messages:{
				cityid:{required:'请选择站点<span class="tipArr"></span>'}
			},
			errorClasses:{
				cityid:{required:'tipLayErr tipw120'}
			},
			tips:{
			},
			tipClasses:{
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
<script type="text/javascript">
//删除广告图片
$('#btnDelpic').live('click',function(){
	$('#imgView').attr('src','');
	$('#hidpic').val('');
	//标记为删除
	$('#operate').val('delpic');
	$('.logoImg').hide();
});
//上传广告图片
$('#upload_pic').uploadify({
	auto:true,
	multi:false,
	swf:'/js/uploadify.swf',
	uploader : '/api/web/uploadify.api',
	formData: {
		'act': 'news_pic',
		'userkey':'{$session_id}',
		'timestamp':'{$time}'
	},
	queueID:'showImage',
	fileSizeLimit:'1024kb',
	fileTypeExts:'*.jpg;*.bmp;*.gif;*.jpeg;*.png',
	buttonImage:'//cdn.{ROOT_DOMAIN}/img/uploadify/submit.png',
	fileTypeDesc:'All Files',
	method:'post',
	cancelImage: '//cdn.{ROOT_DOMAIN}/img/uploadify/cancel.png',
	width:85,
	height:27,
	itemTemplate:'<a href="javascript:void(0);" id="btnDelpic"></a>'+'<img src="" id="imgView" />',
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
	//$('#postForm').submit();
	//return false;
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			$.message(data.msg, { title: "系统提示", icon: "fail" });
			//window.location.href='pay.html?act=edit';
			return;
		}else{
			$.anchorMsg(data.msg,{icon:"success"});
			window.location.href='/news/adv.html?act=list';
		}

	}, clearForm: false});
});
</script>
</body>
</html>
