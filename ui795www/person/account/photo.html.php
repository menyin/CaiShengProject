<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_求职中心_头像上传</title>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/perback.css?v=20140722" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-resumeManage.css?v=20140930" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-widge.css?v=20141122" />
	<style type="text/css">
		.btn{background: grey;color: white;border-radius: 5px;padding: 8px 10px;line-height: 20px;cursor: pointer;width: 80px;text-align: center;float:left;}
		.btn.cu{background: rgb(23,114,179);}
		.cu2{background: rgb(23,114,179);float: none!important;margin: 20px auto;}
		.btnsF16{background-color: #da4e4d;color: #fefefe!important;-moz-box-shadow: 0px 1px 2px #a4a6a6;
			-webkit-box-shadow: 0px 1px 2px #a4a6a6;box-shadow: 0px 1px 2px #a4a6a6;float: none!important;margin: 20px auto;}
		.FileUpload{display: none;}
		.imgPreView{height: 180px;width: 180px;margin-top: 20px;}
       
	</style>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
		window.CONFIG = {
			HOST: 'http://cdn1.597.com/min/??',
			COMBOPATH: '/js/v2/'
		}
	</script>
	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>
	<script type="text/javascript">jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');</script>
</head>

<body id="body" class="noResize minMain">
	<!--#include virtual="/templates/default/person/header.htm" -->
	<div class="w1000 clearfix">
		<!--#include virtual="/templates/default/person/menu.htm" -->
		<div class="right-main">
			<ul class="clearfix menu-tit">
				<li id="cssIndex"><a href="/person/account/">账号管理</a></li>
				<li id="cssInfo"><a href="/person/account/info.html">基本资料</a></li>
				<li id="cssPhoto"><a href="/person/account/photo.html">上传头像</a></li>
				<li id="cssPassword"><a href="/person/account/password.html">修改密码</a></li>
				<li class="right"><a href="/person/resume/privacy.html" target="_blank">隐私设置</a></li>
			</ul>
			<div class="mgt20" style="position: relative;overflow: hidden;">
				<div style="overflow: auto">
					<div class="btn cu" onclick="changeUpType(this,1);">flash上传</div>
					<div class="btn" onclick="changeUpType(this,2);" style="margin-left: 20px;">普通上传</div>
				</div>
				<div id="flashDiv" style="position:relative;">
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="430" id="rainbow" align="middle">
						<param value="/js/avatar.swf?8443" name="movie">
						<param name="quality" value="high" />
						<param name="bgcolor" value="#ffffff" />
						<param name="play" value="true" />
						<param name="loop" value="true" />
						<param name="wmode" value="opaque" />
						<param name="scale" value="showall" />
						<param name="menu" value="true" />
						<param name="devicefont" value="false" />
						<param name="salign" value="" />
						<param name="allowScriptAccess" value="always" />
						<param value="postAction=ra_postAction&redirectURL=/&requestURL={$uploadUrl}&avatar={$avatar}" name="FlashVars">
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="/js/avatar.swf?8443" width="700" height="430">
							<param value="/js/avatar.swf?5348" name="movie">
							<param name="quality" value="high" />
							<param name="bgcolor" value="#ffffff" />
							<param name="play" value="true" />
							<param name="loop" value="true" />
							<param name="wmode" value="opaque" />
							<param name="scale" value="showall" />
							<param name="menu" value="true" />
							<param name="devicefont" value="false" />
							<param name="salign" value="" />
							<param name="allowScriptAccess" value="always" />
							<param value="postAction=ra_postAction&redirectURL=/&requestURL={$uploadUrl}&avatar={$avatar}" name="FlashVars">
							<!--<![endif]-->
							<a href="https://get2.adobe.com/cn/flashplayer/" target="_blank">
								<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" style="margin-top: 30px;" alt="获得 Adobe Flash Player" />
							</a>
							<!--[if !IE]>-->
						</object>
						<!--<![endif]-->
					</object>
					<div id="isFlash" style="width: 100%;text-align: center;margin: auto;font-size: 20px;display: none;">
						<a href="https://get2.adobe.com/cn/flashplayer/" target="_blank">
							<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获得 Adobe Flash Player" />
						</a></div>
				</div>
				<div id="FileUpload" class="FileUpload">
                    <form name="perPhoto" id="perPhoto" method="post" action="/api/web/person.api">
    					<div>
    						<span class="fl" style="margin-left: 135px;font-size: 14px;margin-top: 20px;float: left;color: #6c6c6c">请选择照片:</span>
    						<span class="fl" style="width: 600px;display: inline-block;float: left;margin-top: 20px;">
    							<span style="float: left;margin-left: 10px;"><input type="file" name="Filedata" id="upload_photo_file"/></span>
    							<span style="float: left;margin-left: 40px;color: #a6a6a6;font-size: 12px;">注:支持jpg、jpeg、png格式图片，图片不大于500K</span>
    						</span>
    						<div style="clear: both;"></div>
    						<!-- <span class="btn btnsF16">选择图片</span> -->
    					</div>
                        <!--{if $per['attachment']}-->
                            <img src="http://pic.{ROOT_DOMAIN}/photo/{$per['attachment']}" id="imgView" alt="图片预览" class="imgPreView" style="margin-left: 330px;" />
                        <!--{else}-->
    					   <img src="" id="imgView" alt="图片预览" class="imgPreView" style="display: none;" />
                        <!--{/if}-->
                        <input type="hidden" id="hddPhoto" name="hddPhoto" value="">
    					<div class="btn btnsF16" id="photoContent" style="display:none;">确定</div>
                    </form>
				</div>
			</div>
		</div>

	</div>

	<!--{template person/footer}-->


	<script type="text/javascript">
		// var uploadFile = document.getElementById("upload_photo_file").files;
		// if(uploadFile==undefined){
		// 	try{
		// 		var swf1 = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
		// 		alert('安装了Flash');
		// 	}
		// 	catch(e){
		// 		$("#isFlash").show();
		// 		alert('没有安装Flash');
		// 	}
		// }
		// else {
		// 	try{
		// 		var swf2 = navigator.plugins['Shockwave Flash'];
		// 		if(swf2 == undefined){
		// 			$("#isFlash").show();
		// 			alert('没有安装Flash');
		// 		}
		// 		else {
		// 			$("#isFlash").show();
		// 			alert('安装了Flashsfsd');
		// 		}
		// 	}
		// 	catch(e){
		// 		$("#isFlash").show();
		// 		alert('没有安装Flash');
		// 	}
		// }

		function changeUpType(th,type) {
			$('.btn').removeClass('cu');
			$(th).addClass('cu');
			if(type==1){
				$("#flashDiv").show();
				$("#FileUpload").hide();
			}else {
				$("#flashDiv").hide();
				$("#FileUpload").show();
			}
		}
		function clickFile() {
			$("#upload_photo_file").click();
		}

		$("#upload_photo_file").wrap("<form id='photo_file' action='/api/web/uploadify.api' method='post' enctype='multipart/form-data'></form>");
		$("#upload_photo_file").change(function(){
			var uploadFile = document.getElementById("upload_photo_file").files;
			if(uploadFile!=undefined){
				var ImgType=uploadFile[0].type.toLowerCase();
				var ImgSize=uploadFile[0].size;
				var maxSize=(0.5*1024*1024);
				if(ImgType.indexOf('image')!=-1){//判断当前选择的文件是否为图片格式
					if(ImgSize<=maxSize){//判断当前选择的文件大小是否为500K；
						$("#photo_file").submitForm({ beforeSubmit: function(){
							$('.imgPreView').show();
							$('.imgPreView').attr("src","//cdn.{ROOT_DOMAIN}/img/common/loadBox.gif");
						},data: {act:'photo',timestamp:{$time},fileSize:500},
							success:function(json){
								if(json.status>0){
									var path = json.path;
									$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
									$('#photoContent').show();
									$('#hddPhoto').val(json.name);
								}else{
									$('#photoContent').hide();
									$.message(json.error,{title:'操作失败',icon: "fail"});
								}
							},clearForm:false});
					}else {
						$.message('图片必须小于500K！',{title:'操作失败',icon: "fail"});
					}
				}else {
					$.message('请选择图片！',{title:'操作失败',icon: "fail"});
				}
			}else {

                $("#photo_file").submitForm({
                	beforeSubmit:
                 		function(){
                 			$('.imgPreView').show();$('.imgPreView').attr("src","//cdn.{ROOT_DOMAIN}/img/common/loadBox.gif");
                 		},data: {act:'photo',timestamp:{$time},fileSize:500},
                    success:function(json){
                        if(json.status>0){
                            var path = json.path;
                            $('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
                            $('#photoContent').show();
                            $('#hddPhoto').val(json.name);
                        }else{
                            $('#photoContent').hide();
                            $.message(json.error,{title:'操作失败',icon: "fail"});
                        }
                    },clearForm:false});
			}
		})
        $('#photoContent').click(function(){
            $("#perPhoto").submitForm({ beforeSubmit: '',data: {act:'photo'},success:function(json){
                if(json.status>0){
                    $.anchorMsg(json.msg,{icon:'success'});
                    window.location.href = '/person/';
                }else{
                    $.message(json.msg,{title:'操作失败',icon: "fail"});
                }
            },clearForm:false});
        })
	</script>
</body>
</html>