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
#isCheck{height: 30px;line-height: 30px;width: 50px;float: left; margin-left: 10px; text-align: center; color: red;}
.tError{height: 30px;line-height: 30px;margin-left: 10px;}
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
					<div class="m_bg">资讯管理 > 课程编辑</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 disabled icon"><a href="/news/ke/ke.html?">返回</a></div>
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
												<div id="frame1" style="display:none;">
													<iframe scrolling="auto" src="/news/ke/instr.php?op=search" width="100%" height="230" frameborder=0></iframe>
												</div>
												<div class=""> 
												<form id="postForm" name="postForm" method="post" action="/news/ke/ke.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="courseId" id="courseId" value="{$keRow['courseId']}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr style="display:none;">
																<td class="tb_title" width="140px">资讯ID：</td>
																<td >{$news[detail_id]}</td>
															</tr>
															<tr>
																<td class="tb_title">课程类型：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="courseCatId" name="courseCatId" class="drop" style="width: 160px;" required="required" message="请选择课程类型">
																		<option  value="0" >请选择</option>
																		<!--{loop $cateRows $val}-->
																			<option value="{$val['catId']}"  <!--{if $val['catId']==$keRow['courseCatId']}--> selected {/if}>{$val[catName]}</option>
																		<!--{/loop}-->
																	</select>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">课程来源：</td>
																<td colspan=3><div class="formMod addressMod">
																	<select id="source" name="source" class="drop" style="width: 160px;" required="required" message="请选择来源">
																		<option  value="0" >请选择</option>
																		<!--{loop $sourceRows $key $val}-->
																			<option value="{$key}"  <!--{if $key==$keRow['source']}--> selected {/if}>{$val}</option>
																		<!--{/loop}-->
																	</select>
																	<span class="tipPos">
																		<span class="tipLay "></span>
																	</span>
																	<div class="clear"></div></div>
																</td>
															</tr>
															<!-- <tr>
																<td class="tb_title">讲师标识：</td>
																<td>
																	<div class="formMod">
																		<span class="formText">
																			<input type="text" class="text" name="instrId" id="instrId" value="{$keRow['instrId']}"  readonly="readonly" onclick="search()"/>
																		</span>
																	</div>
																</td>
															</tr> -->
															<tr>
																<td class="tb_title">讲师姓名：</td>
																<td>
																	<div class="formMod">
																		<span class="formText">
																			<input type="text" class="text" name="instrName" id="instrName" value="{$keRow['instrName']}"  readonly="readonly" onclick="search()"/>
																		</span>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">课程标题：</td>
																<td>
																	<div class="formMod">
																		<span class="formText">
																			<input type="text" class="text" name="title" id="title" value="{$keRow['title']}" size=50/>
																		</span>
																		<a id="isCheck" href="javascript:isCheck()">查重</a>
																		<span class="tError"></span>
																		<div class="clear"></div>
																	</div>

																</td>
															</tr>
															<tr>
																<td class="tb_title">副标题：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="subTitle" id="subTitle" value="{$keRow['subTitle']}" size=50/></span>
																<span class="tipPos">
																	<span class="tipLay "></span>
																</span><div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">适合人群：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="acceptor" id="acceptor" value="{$keRow['acceptor']}" size=50/></span>
																<span class="tipPos">
																	<span class="tipLay "></span>
																</span><div class="clear"></div></div></td>
															</tr>
															<tr>
																<td class="tb_title">课程简介：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="summary" id="summary" value="{$keRow['summary']}" size=50/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">视频总时长：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="duration" id="duration" value="{$keRow['duration']}" size=50/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">课程价格：</td>
																<td>
																	<div class="formMod">
																		<span class="formText" style="margin-right:10px;">
																			<input type="text" class="text" name="price" id="price" value="{$keRow['price']}"/>元
																		</span>
																		<select id="discounts" name="discounts" class="drop" style="width: 100px;" required="required" message="请选择折扣">
																			<!--{loop $_discounts $key $val}-->
																				<option value="{$key}"  <!--{if $key==$keRow['discounts']}--> selected {/if}>{$val}</option>
																			<!--{/loop}-->
																		</select>
																	</div>
																</td>
															</tr>
															<!-- <tr>
																<td class="tb_title">学习人数：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="studyNum" id="studyNum" value="{$keRow['studyNum']}" size=50/></span></div></td>
															</tr>
															<tr>
																<td class="tb_title">课程评分：</td>
																<td><div class="formMod"><span class="formText"><input type="text" class="text" name="grade" id="grade" value="{$keRow['grade']}" size=50/></span></div></td>
															</tr> -->
															<tr>
																<td class="tb_title">封面上传：</td>
																<td>
																	<div class="formMod">
																		<div>
																			<input id="pic" name="pic" type="text" value="{$keRow['pic']}" size="30" />
																		</div>
																		<div class="r">
																			<span class="formFile" style="width:755px;height:35px;margin:0;">
																				<a id="upload_pic" name="upload_pic" ></a>
																			</span>
																			<span id="scStatus" style="margin-left:20px;">
																				<!--{if $keRow['pic']}-->{$keRow['pic']}<!--{else}-->未上传<!--{/if}-->
																			</span>
																			<span class="logoImg" style="display:<!--{if !$keRow['pic']}-->none<!--{/if}-->">
																				<a href="javascript:void(0);" id="btnDelpic" class="del jpFntWes">&#xf057;</a>
											<img id="imgView" src="<!--{if $keRow['pic']}-->{$keRow['pic']}<!--{/if}-->" />
																			</span>
																		</div>
																		<div class="clear"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="tb_title">课程描述：</td>
																<td>
																	<script id="editor" name="content" type="text/plain" style="width:85%;height:500px;">{$keRow['content']}</script>
																</td>
															</tr>
															<tr>
																<td class="tb_title">是否显示：</td>
																<td><div class="formMod"><span class="formText">
																	<input type="radio" name="isShow" value="1" <!--{if $keRow['isShow']==1}-->checked<!--{/if}-->>是
																	<input type="radio"  name="isShow" value="0" <!--{if $keRow['isShow']==0}-->checked<!--{/if}-->>否
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
	//删除pic_url
	$('#btnDelpic').live('click',function(){
		$('#imgView').attr('src','');
		$('#pic').val('');
		$('#scStatus').html('');
		//标记为删除
		$('#operate').val('delpic');
		$('.logoImg').hide();
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
				 console.log(json);
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
					$('#pic').val(json.name);
					$('#delpic').val(json.name);
					$('#operate').val('');//清空删除LOGO操作
					$('.logoImg').show();
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
<script>
	//查重
	function isCheck(){
		var instrId = $('#instrId').val();
		var title = $('#title').val();
		var courseId = "{$_GET['courseId']}";
		if(!instrId || instrId=='') { alert('请先选择讲师');return;}
		if(!title || title=='') { alert('请先填写课程标题');return;}

		$.post('/news/ke/ke.html',{act:'checkName',instrId:instrId,title:title,courseId:courseId},function(data){
			if(data.status==1){
				alert(data.msg);
			}else{
				alert(data.msg);
				var html = "<a target='_blank' href='http://www.{ROOT_DOMAIN}/ke/detail.html?Id="+data.row.courseId+"'>"+data.row.title+"</a>";
				$('.tError').html(html);
			}
		},'json');
	}

	function search(){
		$("#frame1").css("display","block");
	}

	//提交
	$('#btnSave').click(function(){
		
		var courseCatId = $("#courseCatId").val();
		var source = $("#source").val();//课程来源
		var title = $("#title").val();//标题
		var instrId = $("#instrId").val();//讲师标识
		var instrName = $("#instrName").val();//讲师姓名
		var summary = $("#summary").val();//简介
		var pic = $("#pic").val();//图片

		if(courseCatId=='' || courseCatId==0){ alert('请选择课程类型');return;}
		if(source=='' || source==0){ alert('请选择课程来源');return;}
		if(title==''){ alert('请填写课程标题');return;}
		if(instrId=='' || instrId==0){ alert('请选择讲师标识');return;}
		if(instrName==''){ alert('请填写讲师姓名');return;}
		if(summary==''){ alert('请填写课程简介');return;}
		if(pic==''){ alert('请上传封面');return;}

		$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.href="/news/ke/ke.html";
			}

		}, clearForm: false});
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
