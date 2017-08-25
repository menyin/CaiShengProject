<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_dropdownlist.js?v=20140320"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_area.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_uploadify.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_calling.js?v=20140312"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
<style type="text/css">
        /*上传文件*/
		.formFile{position:relative; z-index:1; height:22px; line-height:22px; display:block;}
		.formFile input.file{position:absolute; height:29px; width:80px;filter:alpha(opacity=0); -moz-opacity:0; -khtml-opacity:0; opacity:0; left:0; cursor:pointer; top:0;}
		hgroup{padding:20px;zoom:1;}
        .section .mod{}
		.section .mod h2{font-size:18px;height:35px;line-height:35px;border-bottom:1px solid #dadada;padding:0 0 0 20px;}
		.mod .formMod .l{width:195px;}
		.mod .formMod .r{width:755px;}
		.mod .form{padding:20px 0 15px;}

		#fstNav hgroup{padding:10px 40px; z-index:1}
		.rate{overflow:hidden;line-height:30px;}
		.rate b{float:left;display:inline;width:85px;}
		.rate .bar{float:left;display:inline;margin:7px 10px 0;width:175px;}
		.rate .rateNav{float:left;display:inline;margin:0 0 0 23px;width:610px;}
		.rate .rateNav a{margin:0 5px;font-size:12px;}
		section.sectionFix{position:fixed;top:0;left:50%;z-index:1002;margin-left:-500px;*margin-left:-501px;_margin-left:auto;width:1000px;border-bottom:1px solid #dadada;filter:alpha(opacity=90);-moz-opacity:0.9;-khtml-opacity: 0.9;opacity:0.9;}
		.fstBack{height:65px;display:none;}
		.fstBackShow{display:block;_display:none;}
		.comNTxt{ z-index:2;}
		.comNTxt .tipLay{top:31px;left:-85px;}
		.comNTxt .tipLay .tipArr{top:-4px;left:36px;width:8px;height:5px;background:url(//cdn.{ROOT_DOMAIN}/img/common/contrl.gif) no-repeat 0 0; z-index:2}
		.comNTxt .tipLay .tipLayTxt{background:#fffce3;border:1px solid #fad5a8;width:390px;padding:0 5px 5px; position:relative; z-index:1;line-height:22px;}
		.comNTxt .tipLay .tipLayTxt .closeThis{ position:absolute;font-size:12px;right:7px;top:4px;}
		.comNTxt .tipLay .tipLayTxt p img{ vertical-align:middle;}
		.logoImg{clear:both;width:100%;float:left; position:relative; z-index:1;width:185px;margin:10px 0 0;border:1px solid #dadada;height:70px;background:url(//cdn.{ROOT_DOMAIN}/img/common/loadBox.gif) no-repeat center center;}
		.logoImg img{width:185px;height:70px;}
		.logoImg a.del{ position:absolute;right:-10px;top:-10px;font-size:22px;color:#D84D14;background:#fff;}
		.logoImg a.del:hover{color:#cb4647;}
		.touPeo{ z-index:2;}
		.touPeo .tipLay{display:none;}
		.formBtn{margin:25px 0 0 200px;}
		.imgLst{clear:both;width:730px;float:left;margin:15px 0 0;display:inline;}
		.imgLst ul li{float:left;display:inline; position:relative; z-index:1;width:122px;height:125px;margin:0 24px 5px 0;}
		.imgLst ul li .pic{height:82px;}
		.imgLst ul li .pic img{width:120px;height:80px;border:1px solid #dadada;}
		.imgLst ul li a.del{position:absolute;right:-10px;top:-10px;font-size:22px;color:#D84D14;background:#fff; border-radius:15px;}
		.imgLst ul li a.del:hover{color:#cb4647;}
		.imgLst ul li .imgInp{margin:5px 0 0;}
		.imgLst ul li .imgInp input.imgTxt{height:22px;line-height:22px;border:1px solid #fff;font-size:12px;width:120px; text-align:center; cursor:pointer;}
		.imgLst ul li .imgInp input.imgTxtHov{border:1px solid #dadada;}
		.imgLst ul li .load{display:none;width:120px;height:80px;border:1px solid #eaeaea;background:url(//cdn.{ROOT_DOMAIN}/img/common/loadBox.gif) no-repeat center center;}
		.imgLst ul li .loadTxt{ text-align:center;font-size:12px;display:none;height:24px;line-height:24px;margin-top:5px;}
		.imgLst ul li.hov .imgInp input.imgTxt{border:1px solid #aaa;}
		.imgLst ul li.hov .pic img{border:1px solid #cbcbcb}
		.imgLst ul li.imgLoading .load{display:block;}
		.imgLst ul li.imgLoading .loadTxt{display:block;}
		.imgLst ul li.imgLoading .pic,.imgLst ul li.imgLoading .imgInp,.imgLst ul li.imgLoading a.del{display:none;}
		.comVd .tipTxt i.jpFntWes{font-size:18px;margin:0 5px 0 0; vertical-align:middle;}
		.formMod .tipTxt{float:left;display:inline;margin-left:5px;height:30px;line-height:30px;font-size:12px;}
		.mod .formMod .r .formFile{ position:relative; z-index:1;}
		.mod .formMod .r .formFile .swfUploadBtn{ position:absolute;left:0;top:0;}
		.formTextarea textarea.textarea{width:500px;}
		a.btn3:link, a.btn3:visited {height: 28px;line-height: 28px;font-size: 14px;position: relative;z-index: 1;zoom: 1;background: #eee no-repeat -10px -402px;display: inline-block;color: #444;margin: 0 0px;text-shadow: 0 1px 1px #fff;padding: 0 10px;font-weight: normal;}
		.uploadify-button{margin-top: -20px;}
</style>
<body> 
<div id="content">
	<!--{template adv/nav}-->
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
					<div class="m_bg">广告管理 >广告盘设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="adv.html?act=edit&type={$type}">新增  【{$__advStr[$type]}】 广告</a></div>
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
													<input type='hidden' id='picList' name='picList' value='{$adv[picList]}'>
													<input type='hidden' id='flashList' name='flashList' value='{$adv[flashList]}'>
													<input type='hidden' name='type' value='{$type}'>
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															
															<tr height="65">
																<td class="tb_title">图片上传：</td>
																<td><div class="formMod">
																	<a id="logo"></a>
																	<input id="hidLogo" name="hidden_logo" type="hidden" value="{$com[logoUrl]}"/>
																	<div class="l">企业LOGO<i>&nbsp;</i></div>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_logo1" name="upload_logo" ></a>
																		</span>
																		<span class="tipTxt gray" style="display:none">建议尺寸185px * 70px，格式仅支持.gif,.jpg,.png,.bmp,大小不超过350KB。</span>
																		<span class="logoImg" <!--{if !$com[logoUrl]}-->style="display:none"<!--{/if}-->>
																			<a href="javascript:void(0);" id="btnDelLogo" class="del jpFntWes">&#xf057;</a>
																			<img id="imgView" src="<!--{if $com[logoUrl]}-->http://pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}<!--{/if}-->" />
																		</span>
																	</div>
																	<div class="clear"></div>
																</div></td>
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
		<!--{template adv/sidebar}-->
	</div>
</div>
<script type="text/javascript">
//删除LOGO
			$('#btnDelLogo').live('click',function(){
				$('#imgView').attr('src','');
				$('#hidLogo').val('');
				//标记为删除
				$('#operate').val('delLogo');
				$('.logoImg').hide();
			});
//上传LOGO
			$('#upload_logo1').uploadify({
				auto:true,
				multi:false,
				swf:'/js/uploadify.swf',
				uploader : '/api/web/uploadify.api',
				formData: {
					'act': 'logo',
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
				itemTemplate:'<a href="javascript:void(0);" id="btnDelLogo" class="del jpFntWes">&#xf057;</a>'+'<img src="" id="imgView" />',
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
							$('#hidLogo').val(json.name);
							$('#delLogo').val(json.name);
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
</body>
</html>
