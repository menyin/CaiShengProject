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
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/crm/js/plupload.js?v=20140312"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/crm/js/plupload.flash.js?v=20140312" ></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-ui.js" ></script>
<script type="text/javascript">
/*字符OBJ化*/
function allPrpos(obj) {
	var props = "";
	for(var p in obj){
		if(typeof(obj[p])=="function"){
			obj[p]();
		}else{
			return obj[p];
		}
	}
}
</script>
<style type="text/css">
.thumb{width:148px;height:120px;bottom:1px dashed #ccc;}

.sortable { list-style-type: none; margin: 0; padding: 0; width: 840px; }
.sortable li { margin: 10px 10px 10px 0; padding: 5px; float: left; width: 148px; height: 120px; font-size: 4em; text-align: center;}
.sortable li span { position: absolute; margin-left: -1.3em; }
.ui-state-highlight { height: 1.5em; line-height: 1.2em; }

.sortable li { position: relative;}
.sortable li a { font-size: 12px; height: 25px; line-height: 25px; padding: 0 5px;}
.sortable li p { background: #000; opacity: 0.7; color: #fff; position: absolute; top: 112px; left: 5px; width:160px;}
.imgBtn1 {color: #fff;}
.imgBtn2 { color: #fff;}
.imgDel {background: #000; opacity: 0.7; color: #fff;  position: absolute; top: 5px; left: 115px; width:30px;display:none;}
.thumb { border: 1px solid #ccc; padding: 5px;}
.insertPic{background: #000; top: 112px; left: 100px;position: absolute; width:50px;}
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
					<div class="m_bg">资讯管理 > [{$category[category_title]}] 修改</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="news.html?act=edit&detail_cid={$detail_cid}">新增[{$category[category_title]}] </a></div>
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
													<input type="hidden" name="detail_id" id="detail_id" value="{$news['detail_id']}" />
													<input type="hidden" name="detail_cid" id="detail_cid" value="{$detail_cid}" />
													<input type="hidden" name="detail_regionid" id="detail_regionid" value="{$news[detail_regionid]}" />
													<input type='hidden' id='picList' name='picList' value='{$news[picList]}'>
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">资讯ID：</td>
																<td >{$news[detail_id]}</td>
															</tr>
															<tr>
																<td class="tb_title">所属城市：</td>
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
																<td class="tb_title">资讯标题：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="detail_title" id="detail_title" value="{$news['detail_title']}" size=50/></span>
																<span class="tipPos">
																	<span class="tipLay "></span>
																</span><div class="clear"></div></div></td>
															</tr>
															<!--{if $detail_cid==62||$detail_cid==63}-->
															<tr>
																<td class="tb_title">小标题：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="m_title" id="m_title" value="{$news['m_title']}" size=50/></span>
																<span class="tipPos">
																	<span class="tipLay "></span>
																</span><div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">培训/招聘会时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="zf_time" placeholder="" value="<!--{if $news[zf_time]}-->{$news[zf_time]}<!--{else}-->{$date}<!--{/if}-->"  size="20" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})"/></span></div></td>
															</tr>
															<!--{/if}-->
															<tr>
																<td class="tb_title">资讯来源：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="detail_from" value="{$news['detail_from']}" size=50/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">作者：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="detail_author" value="{$news['detail_author']}" size=50/></span></div></td>
															</tr>
															<!--{if $detail_cid==58 || $detail_cid==60 || $detail_cid==61}-->
															<tr>
																<td class="tb_title">专访时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="zf_time" placeholder="" value="<!--{if $news[zf_time]}-->{$news[zf_time]}<!--{else}-->{$date}<!--{/if}-->"  size="20" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})"/></span></div></td>
															</tr>
															<div id="frame" style="display:none;">
																<iframe scrolling="auto" src="/design/company.php?act=unique&c_id={$news[_cid]}" width="100%" height="230" frameborder=0></iframe>
															</div>
															<tr>
																<td class="tb_title">专访企业：</td>
																<td><div class="formMod"><span class="formText" id="myH2"><input type="hidden" name="c_id" value="{$news[_cid]}"><input type="text" class="text" size="50"  onClick="com();" readonly="" value="{$news[cname]}" /></span><span style="line-height: 30px;margin-left: 5px;"><a onClick="com();">绑定</a></span>
																	<div class="clear"></div></div>
																<!-- <div class="formMod"><span class="formText"><input type="text" class="text" name="pay_userid" id="pay_userid" value="{$pay[pay_userid]}" size="20" /></span><span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div> -->
																</td>
															</tr>
															<script type="text/javascript">
															function com(){
																$("#frame").css("display","");
															}
															</script>
															<tr>
																<td class="tb_title">责任编辑：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="zf_author" value="{$news['zf_author']}" size=50/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">封面排序：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="display_order" value="<!--{if $news['display_order']}-->{$news['display_order']}<!--{else}-->{$displayOrder_r}<!--{/if}-->" size=50/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">封面上传：</td>
																<td><div class="formMod">
																	<div><input id="hidpic" name="pic_url" type="text" value="{$news[pic_url]}" size="30" /></div>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_pic" name="upload_pic" ></a>
																		</span>
																		<span id="scStatus"><!--{if $news[pic_url]}-->{$news[pic_url]}<!--{else}-->未上传<!--{/if}--></span>
																		<span class="logoImg" <!--{if !$news[pic_url]}-->style="display:none"<!--{/if}-->>
																			<a href="javascript:void(0);" id="btnDelLogo" class="del jpFntWes">&#xf057;</a>
																			<img id="imgView" src="<!--{if $news[pic_url]}-->http://pic.{ROOT_DOMAIN}/news/{$news[pic_url]}<!--{/if}-->" />
																		</span>
																	</div>
																	<div class="clear"></div>
																</div></td>
															</tr>
															<tr>
																<td class="tb_title">banner上传：</td>
																<td><div class="formMod">
																	<div><input id="hidbanner" name="banner_url" type="text" value="{$news[banner_url]}" size="30" /></div>
																	<div class="r">
																		<span class="formFile" style="width:755px;height:35px;margin:0;">
																			<a id="upload_ban" name="upload_ban" ></a>
																		</span>
																		<span id="scStatus1"><!--{if $news[pic_url]}-->{$news[banner_url]}<!--{else}-->未上传<!--{/if}--></span>
																		<span class="logoImg" <!--{if !$news[banner_url]}-->style="display:none"<!--{/if}-->>
																			<a href="javascript:void(0);" id="btnDelLogo1" class="del jpFntWes">&#xf057;</a>
																			<img id="imgView1" src="<!--{if $news[banner_url]}-->http://pic.{ROOT_DOMAIN}/news/{$news[banner_url]}<!--{/if}-->" />
																		</span>
																	</div>
																	<div class="clear"></div>
																</div></td>
															</tr>
															<!--{/if}-->
															<tr>
																<td class="tb_title">图片：</td>
																<td>(图片上传后可以拖扯图片位置来改变排序，第一张图片为标题图片)
																 <div class="container" id="container">
																	<div id="filelist" style="display: none;"></div>
																	<div class="clear"></div><br />
																	<a href="javascript:void(0)" id="pickfiles" class="btn3 btnsF14"><b class="L"></b><b class="R"></b>选择图片</a>
																	<a href="javascript:void(0)" id="uploadfiles" class="btn9"><b class="L"></b><b class="R"></b></a>
																	<div id="fileView">
																		<ul id="sortable" class="sortable"></ul>
																	</div>
																	<div class="clear"></div><br />
																</div></td>
															</tr>
															<tr>
																<td class="tb_title">内容：</td>
																<td>
																	<script id="editor" name="detail_content" type="text/plain" style="width:85%;height:500px;">{$news[detail_content]}</script>
																</td>
															</tr>
															<tr>
																<td class="tb_title">推荐：</td>
																<td><div class="formMod"><span class="formText">
																	<input type="radio" name="detail_top" value="1" <!--{if $news[detail_top]==1}-->checked<!--{/if}-->>是
																	<input type="radio"  name="detail_top" value="0" <!--{if $news[detail_top]==0}-->checked<!--{/if}-->>否
																	</span><span class="tipPos">
																	<span class="tipLay "></span>
																</span><div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">添加时间：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="detail_time" placeholder="" value="<!--{if $news[detail_time]}-->{$news[detail_time]}<!--{else}-->{$time}<!--{/if}-->"  size="20" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">显示：</td>
																<td><div class="formMod"><span class="formText">
																	<input type="radio" name="isshow" value="1" <!--{if $news['isshow']==1}-->checked<!--{/if}-->>是
																	<input type="radio"  name="isshow" value="0" <!--{if $news['isshow']==0}-->checked<!--{/if}-->>否
																	</span><span class="tipPos">
																	<span class="tipLay "></span>
																</span><div class="clear"></div></div></td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">完  成</a>
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
		var frmValid=$("#postForm").validate({
			rules:{
				detail_title:{required:true,rangelength: [2,50]}
			},
			messages:{
				detail_title:{
					required:'请填写标题<span class="tipArr"></span>',
					rangelength:'标题：2-50个字符<span class="tipArr"></span>'
				}
			},
			errorClasses:{
				detail_title:{required:'tipLayErr tipw150',rangelength:'tipLayErr tipw150'}
			},
			tips:{
				detail_title:'标题：2-50个字符<span class="tipArr"></span>'
			},
			tipClasses:{
				detail_title:'tipLayTxt tipw150',
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

		/*var infomodify={
			initialize:function(){
				this._initControl();
			},
			_initControl:function(){
				var fn = this;
				$('#btnSave').click(function(){
					sortable();

					$("#btnSave").submitForm({ beforeSubmit: $.proxy(frmValid.form, frmValid),data:{}, success: fn.modifySuccess, clearForm: false });
					return false;
				});
				$('#ucidList input[type=checkbox]').live("click",function(){
					frmValid.element($('#contactCount'));
				});

			},
			showMapMarker:function(){
				$.showModal('/map/',{title:'标记我的位置'});
			}
		}
		infomodify.initialize();

		$.setIndex("zindex");*/
</script>
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
	$('#detail_regionid').val(cityid);
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
	$('#detail_regionid').val(quyuid);
	});
}
</script>
<script type="text/javascript">
		var uploader = new plupload.Uploader({
			runtimes : 'html5,flash,html4',
			browse_button : 'pickfiles',
			file_data_name : 'Filedata',
			container: 'container',
			max_file_size : '10mb',
			url : "/api/web/uploadify.api",
			flash_swf_url : '/js/plupload.flash.swf',
			resize: {width : 1024, height : 768, quality : 90, crop: true},
			filters : [
				{title : "Image files", extensions : "jpg,gif,png,bmp,tif,jpeg"}
			],
			multipart_params:{act:'news',sessionid:'{$sessionid}'}
		});

		//alert(url);
		uploader.bind('Init', function(up, params) {
			$('#filelist').innerHTML = "<div>Current runtime: " + params.runtime + "</div>";
		});

		uploader.init();

		uploader.bind('FilesAdded', function(up, files) {
			plupload.each(files, function(file) {
				document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
			});
			uploader.start();
			return false;
		});

		uploader.bind('UploadProgress', function(up, file) {
			document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
		});

		uploader.bind("FileUploaded", function(up, file, obj) {
			obj=(allPrpos(obj));
			var json = eval('(' + obj + ')');
			//直接入库的方法
			createPic(json);

		});

		$(function() {
			//显示图片
			var _picList='{$news[picList]}'.split(',');
			var _picListStr='{$news[picListStr]}'.split(',');
			if (_picList!='' && _picListStr!=''){
				var picList_ = new Array();
				for(var i = 0, l = _picList.length; i< l; i++){
					picList_['id']=_picList[i];
					picList_['result']=_picListStr[i];
					createPic(picList_);
				}
			}

			//排序
			$("#fileView").sortable({
				placeholder: "ui-state-highlight",  //拖动时，用css
				cursor: "move",
				items :"li",						//只是li可以拖动
				opacity: 0.6,					   //拖动时，透明度为0.6
				revert: true,					   //释放时，增加动画
				update : function(event, ui){	   //更新排序之后
					//sortable();
				}
			});
			//$("#sortable").disableSelection();
		});

		function createPic(json){
			//$('#fileView ul').append('<li class="ui-state-default" id="pic-'+json['id']+'"><img src="http://pic01.917.com'+json['result']+'!160x120" class="thumb" /><a class="imgDel" onclick="picdel('+json['id']+')">删除</a></li>');
			$('#fileView ul').append('<li class="ui-state-default" id="pic-'+json['id']+'"><img src="http://pic.{ROOT_DOMAIN}/news/'+json['result']+'" class="thumb" /><a class="insertPic" onclick="insertPic(\'http://pic.{ROOT_DOMAIN}/news/'+json['result']+'\')">插入</a><a class="imgDel" onclick="picdel('+json['id']+')">删除</a></li>');
			$("#fileView ul li").each(function(){
				$(this).bind("mouseover", function(){
					//$(this).children("p").show();
					$(this).children(".imgDel").show();
				});
				$(this).bind("mouseout", function(){
					//$(this).children("p").hide();
					$(this).children(".imgDel").hide();
				});
			});
		}

		function sortable(){
			var piclist='';
			$(".sortable li").each(function(){
				piclist = piclist + $(this).attr("id").replace('pic-', '') + "," ;
			})
			piclist=piclist.substring(0,piclist.length-1);
			if (piclist!='') $("#picList").val(piclist);
		}

		function picdel(id){
			$('#pic-'+id).remove();
			$.get( "/news/news.html?act=delnewsPic&pid="+id, function( data ){});
		}

		$('#btnSave').click(function(){
			sortable();
			/*$('#postForm').submit();
			return false;*/
			$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
				if(data.status<1){
					$.message(data.msg, { title: "系统提示", icon: "fail" });
				}else{
					$.anchorMsg(data.msg,{icon:"success"});
					window.location.href="news.html?act=list&detail_cid={$detail_cid}&cityid=-1&tuijian=-1&op=single";
				}

			}, clearForm: false});
		});


</script>
<script type="text/javascript">
//删除pic_url
$('#btnDelpic').live('click',function(){
	$('#imgView').attr('src','');
	$('#hidpic').val('');
	//标记为删除
	$('#operate').val('delpic');
	//$('.logoImg').hide();
});
//上传 pic_url
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
	fileTypeExts:'*.jpg;*.bmp;*.gif;*.jpeg;*.png;*.doc;*.docx;*.xls;*.xlsx;*.txt;*.rar',
	buttonImage:'//cdn.{ROOT_DOMAIN}/img/uploadify/submit.png',
	fileTypeDesc:'All Files',
	method:'post',
	cancelImage: '//cdn.{ROOT_DOMAIN}/img/uploadify/cancel.png',
	width:85,
	height:27,
	itemTemplate:'<a href="javascript:void(0);" id="btnDelpic" class="del jpFntWes">&#xf057;</a>'+'<img src="" id="imgView" />',
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
				$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
				//alert("上传成功!");
				$("#scStatus").text(json.name+"上传成功！")
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

//删除banner_url
$('#btnDelpic1').live('click',function(){
	$('#imgView1').attr('src','');
	$('#hidbanner').val('');
	//标记为删除
	$('#operate').val('delpic1');
	//$('.logoImg').hide();
});
//上传banner_url
$('#upload_ban').uploadify({
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
	fileTypeExts:'*.jpg;*.bmp;*.gif;*.jpeg;*.png;*.doc;*.docx;*.xls;*.xlsx;*.txt;*.rar',
	buttonImage:'//cdn.{ROOT_DOMAIN}/img/uploadify/submit.png',
	fileTypeDesc:'All Files',
	method:'post',
	cancelImage: '//cdn.{ROOT_DOMAIN}/img/uploadify/cancel.png',
	width:85,
	height:27,
	itemTemplate:'<a href="javascript:void(0);" id="btnDelpic1" class="del jpFntWes">&#xf057;</a>'+'<img src="" id="imgView1" />',
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
				$('#imgView1').attr('src',path+'?'+Math.random().toString().replace('.','0'));
				//alert("上传成功!");
				$("#scStatus1").text(json.name+"上传成功！")
				//$('#scStatus').val("材料上传成功！");
				$('#hidbanner').val(json.name);
				$('#delpic1').val(json.name);
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
</script>
<script type="text/javascript">

	//实例化编辑器
	//建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	UE.getEditor('editor');


	function isFocus(e){
		alert(UE.getEditor('editor').isFocus());
		UE.dom.domUtils.preventDefault(e)
	}
	function setblur(e){
		UE.getEditor('editor').blur();
		UE.dom.domUtils.preventDefault(e)
	}
	function insertHtml() {
		var value = prompt('插入html代码', '');
		UE.getEditor('editor').execCommand('insertHtml', value)
	}
	/*function insertPic(e) {
		UE.getEditor('editor').execCommand('insertHtml', '<img alt="" src="'+e+'"/>')
	}*/
	function insertPic(e) {
		UE.getEditor('editor').execCommand('insertHtml', '<img name="LazyloadImg"  alt="" data-original="'+e+'"  src="'+e+'"/>')
	}
	function createEditor() {
		enableBtn();
		UE.getEditor('editor');
	}
	function getAllHtml() {
		alert(UE.getEditor('editor').getAllHtml())
	}
	function getContent() {
		var arr = [];
		arr.push("使用editor.getContent()方法可以获得编辑器的内容");
		arr.push("内容为：");
		arr.push(UE.getEditor('editor').getContent());
		alert(arr.join("\n"));
	}
	function getPlainTxt() {
		var arr = [];
		arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
		arr.push("内容为：");
		arr.push(UE.getEditor('editor').getPlainTxt());
		alert(arr.join('\n'))
	}
	function setContent(isAppendTo) {
		var arr = [];
		arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
		UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
		alert(arr.join("\n"));
	}
	function setDisabled() {
		UE.getEditor('editor').setDisabled('fullscreen');
		disableBtn("enable");
	}

	function setEnabled() {
		UE.getEditor('editor').setEnabled();
		enableBtn();
	}

	function getText() {
		//当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
		var range = UE.getEditor('editor').selection.getRange();
		range.select();
		var txt = UE.getEditor('editor').selection.getText();
		alert(txt)
	}

	function getContentTxt() {
		var arr = [];
		arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
		arr.push("编辑器的纯文本内容为：");
		arr.push(UE.getEditor('editor').getContentTxt());
		alert(arr.join("\n"));
	}
	function hasContent() {
		var arr = [];
		arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
		arr.push("判断结果为：");
		arr.push(UE.getEditor('editor').hasContents());
		alert(arr.join("\n"));
	}
	function setFocus() {
		UE.getEditor('editor').focus();
	}
	function deleteEditor() {
		disableBtn();
		UE.getEditor('editor').destroy();
	}
	function disableBtn(str) {
		var div = document.getElementById('btns');
		var btns = domUtils.getElementsByTagName(div, "button");
		for (var i = 0, btn; btn = btns[i++];) {
			if (btn.id == str) {
				domUtils.removeAttributes(btn, ["disabled"]);
			} else {
				btn.setAttribute("disabled", "true");
			}
		}
	}
	function enableBtn() {
		var div = document.getElementById('btns');
		var btns = domUtils.getElementsByTagName(div, "button");
		for (var i = 0, btn; btn = btns[i++];) {
			domUtils.removeAttributes(btn, ["disabled"]);
		}
	}

	function getLocalData () {
		alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
	}

	function clearLocalData () {
		UE.getEditor('editor').execCommand( "clearlocaldata" );
		alert("已清空草稿箱")
	}

</script>
</body>
</html>
