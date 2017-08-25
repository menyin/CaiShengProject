<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$domainInfo['region_name_short']}597人才网-企业登录</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–> 
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=201410096" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/icons.css?v=201403126" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/comlogin.css?v=201404216" />

	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=2017" charset="utf-8"></script>

	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/qrcode.min.js?v=2017" charset="utf-8"></script>
<style>
.logBox .hd{height: 45px;padding: 0px;margin-bottom: 20px;}
.newm-tab-userlogin {height: 43px;border-bottom: 1px solid #dcdcdc;}
.newm-tab-userlogin .cur {color: #2e70c1;}
.newm-tab-userlogin .last {
    border-left: 1px solid #dcdcdc;
}
.newm-tab-userlogin span {padding: 0 23px;display: inline-block;height: 43px;line-height: 43px;text-align: center;font-size: 16px;color: #666;font-family: "Microsoft YaHei", "微软雅黑";cursor: pointer;}
#sqrloginimg img {display: inline-block !important;}
</style>
</head>
<body id="body">
<div id="sqrloginimg" style="text-align: center;padding-top: 15px;padding-bottom: 10px;position: relative"></div>

<script>
		$(document).ready(function() {

			generateQRCode('{$codeUrl}');
			$("#sqrloginimg").attr('title', 'APP扫码登录');

			//登录类型切换
			$(".newm-tab-userlogin span").click(function(){
			    $(this).addClass("cur").siblings().removeClass("cur");
				var index = $(this).attr('data-type');
				if(index==1){
					$(".logForm").hide();
					$(".js-logintab-item").show();
				}else{
					$(".js-logintab-item").hide();
					$(".logForm").show();
				}
			});

			//生成二维码
			function generateQRCode(data) {
		        new QRCode(document.getElementById("sqrloginimg"), {
		            render: 'table', // 渲染方式有table方式（IE兼容）和canvas方式
		            width: 170, //宽度 
		            height: 170, //高度 
		            text: utf16to8(data), //内容 
		            typeNumber:-1,//计算模式
		            correctLevel:2,//二维码纠错级别
		            background:"#ffffff",//背景颜色
		            foreground:"#000000"  //二维码颜色

		        });
		    }
	        //中文编码格式转换
		    function utf16to8(str) {
		        var out, i, len, c;
		        out = "";
		        len = str.length;
		        for (i = 0; i < len; i++) {
		            c = str.charCodeAt(i);
		            if ((c >= 0x0001) && (c <= 0x007F)) {
		                out += str.charAt(i);
		            } else if (c > 0x07FF) {
		                out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
		                out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));
		                out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
		            } else {
		                out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));
		                out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
		            }
		        }
		        return out;
		    }
		});

		t = setInterval(function () {
                longPolling();
            }, 1500);

		var maId = "{$maId}";
		var sid = "{$sid}";
		var type = "{$type}";
		function longPolling() {
	        $.ajax({
	            url: "/api/web/user.api?act=checkCodeStatus",
	            data: {'id':maId,"sid": sid},
	            dataType: "json",
	            success: function (json) {
	            	console.log(json);
                    if(json.status == 1){
                        $("#sqrloginimg").css({opacity:'0.2'});
                        $("#sqrloginground").css({display:'inline-block'});
                        $("#sqrloginmsg").html("扫描成功，请在手机端确认登录");
                    }else if(json.status == 2){
                        alert('success');
                        clearTimeout(t);
                        if(type=='1'){
                        	location.href = "/person/";
                        }else{
                        	location.href = "/company/";
                        }
                    }else if(json.status == -1){
                    	clearTimeout(t);
                    	alert(json.msg);
                        window.location.reload();
                    }
	            }
	        });

   		}
</script>
</body>
</html>