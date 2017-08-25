<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="/templates/default/css/database.css" type="text/css" rel="stylesheet">
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
	<!--{template xuyue/nav}-->
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
					<div class="m_bg">合同管理 >{$contract[_title]}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="contract.html?act=scedit&contractId={$contract[contractId]}&c_id={$contract[cid]}">上传素材</a></div>
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
													<input type="hidden" name="act" id="act" value="scsave" />
													<input type="hidden" name="contractId" id="contractId" value="{$contract['contractId']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px">合同ID：</td>
																<td>{$contract[contractId]}</td>
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
																<td class="tb_title" width="140px">企业名称：</td>
																<td colspan=3><div class="formMod"><span class="formText"><input type="text" class="text" name="c_name" id="c_name" placeholder="" value="{$com['cname']}"  size="42"/><input type='hidden' id='c_id' name='c_id' value="{$contract['cid']}"></span>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div></td>
															</tr>
															<tr height="65">
																<td class="tb_title">图片上传：</td>
																<td><div class="formMod">
																	<a id="logo"></a>
																	<input id="hidpic" name="pic_url" type="hidden" value="{$contract[contract_url]}"/>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_sc" name="upload_sc" ></a>
																		</span>
																		<span id="scStatus"></span>
																		<!-- <span class="tipTxt gray" style="display:none">建议尺寸185px * 70px，格式仅支持.gif,.jpg,.png,.bmp,大小不超过350KB。</span>
																		<span class="logoImg" {if !$com[logoUrl]}style="display:none"{/if}>
																			<a href="javascript:void(0);" id="btnDelpic" class="del hbFntWes">&#xf057;</a>
																			<img id="imgView" src="{if $com[logoUrl]}http://pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}{/if}" />
																		</span> -->
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
		<!--{template xuyue/sidebar}-->
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
				cityid:{required:true},
				c_id:{required:true}
			},
			messages:{
				cityid:{required:'请选择站点<span class="tipArr"></span>'},
				c_id:{required:'请选择企业<span class="tipArr"></span>'}
			},
			errorClasses:{
				cityid:{required:'tipLayErr tipw120'},
				c_id:{required:'tipLayErr tipw120'}
			},
			tips:{
				//loupan:'楼盘名称：2-30个字符<span class="tipArr"></span>'
			},
			tipClasses:{
				c_id:'tipLayTxt tipw150',
				contactCount:'tipLayTxt tipw150'
			},
			errorElement:'span',
			errorPlacement:function(error,element){
				element.closest('div.formMod').find('.tipPos .tipLay').append(error);
			},
			success:function(label){
				label.text(" ");
			}
		});
		$(function() {
			$('#c_name').autocomplete("/company.html", {
				max: 12,		//列表里的条目数
				minChars: 1,	//自动完成激活之前填入的最小字符
				width:288,		//提示的宽度，溢出隐藏
				//scrollHeight:120,		//提示的高度，溢出显示滚动条
				matchContains: true,	//包含匹配，就是data参数里的数据，是否只要包含文本框里的数据就显示
				scroll:false,
				dataType:"json",
				autoFill: false,		//自动填充
				extraParams:{
					act:'autoComplete',
					key:function(){
						return escape($.trim($("#c_name").val()));
					}
				},
				formatItem: function(row) {
					return '<span class="autTempL">'+row.item+'</span>';
				},
				formatMatch: function(row) {
					return row.item;
				},
				formatResult: function(row) {
					return row.item;
				}
			}).result(function(event, item){
				$("#cname").unbind('keydown');
				$("#c_name").val(item.item);
				$("#c_id").val(item.cid);
			});
		});
</script>
<script type="text/javascript">
//删除LOGO
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
		'act': 'advSc',
		'userkey':'{$session_id}',
		'timestamp':'{$time}'
	},
	queueID:'showImage',
	fileSizeLimit:'1024kb',
	fileTypeExts:'*.jpg;*.bmp;*.gif;*.jpeg;*.png;*.doc;*.docx;*.xls;*.xlsx;*.txt;*.rar',
	buttonImage:'//cdn.{ROOT_DOMAIN}/img/uploadify/submitsc.png',
	fileTypeDesc:'All Files',
	method:'post',
	cancelImage: '//cdn.{ROOT_DOMAIN}/img/uploadify/cancel.png',
	width:85,
	height:27,
	itemTemplate:'<a href="javascript:void(0);" id="btnDelpic" class="del hbFntWes">&#xf057;</a>'+'<img src="" id="imgView" />',
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
				alert(1);
				//$('#scStatus').attr("材料上传成功！");
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
	//$('#btnSave').click(function(){
		/*if($('#subwayId').val() == ''||typeof($('#subwayId').val()) == 'undefined'){
			alert('请输入地铁站ID！');
			return;
		}
		var subwayId=$('#subwayId').val();
		if(subwayId.length!=2){
			alert('地铁站ID位数只能是2位数，请正确输入！');
			return;
		}
		if($('#subway_name_short').val() == ''||typeof($('#subway_name_short').val()) == 'undefined'){
			alert('请输入地铁线简称！');
			return;
		}*/
		/*$('#postForm').submit();
		return false;*/
	//});
</script>
</body>
</html>
