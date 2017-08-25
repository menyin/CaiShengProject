/// <reference path="../../jQuery-vsdoc.js" />
function vod(){}

//encodeURIComponent可以还处理utf-8编码
//function EncodeURL(str){
//    return encodeURIComponent(str).replace(/\+/g, "%2b").replace(/\?/, "").replace(/\&/, "").replace(/\_/, "").replace(/\-/, "").replace(/\'/, "‘").replace(/\*/, "").replace(/\:/, "").replace(/\</, "《").replace(/\>/, "》").replace(/\?/, "？").replace(/\:/, "：").replace(/\&/, "");
//}
function EncodeURL(str) {
    return encodeURIComponent(str).replace(/\+/g, "%2b").replace(/\?/, "").replace(/\&/, "").replace(/\'/, "‘");
}

function encodeURL(str) {
    return encodeURI(str).replace(/=/g, "%3D").replace(/\+/g, "%2B").replace(/\?/g, "%3F").replace(/\&/g, "%26");
}

function htmlEncode(str) {
    return str.replace(/&/g, "&amp;").replace(/\"/g, "&quot;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/ /g, "&nbsp;");
}

function htmlDecode(str) {
    return str.replace(/\&quot;/g, "\"").replace(/\&lt;/g, "<").replace(/\&gt;/g, ">").replace(/\&nbsp;/g, " ").replace(/\&amp;/g, "&");
}

function javaEncode(txt) {
    if (!txt) {
        return txt;
    }
    return txt.replace("\\", "\\\\").replace("\r\n", "\n").replace("\n", "\\n").replace("\"", "\\\"").replace("\'", "\\\'");
}

function javaDecode(txt) {
    if (!txt) {
        return txt;
    }
    return txt.replace("\\\\", "\\").replace("\\n", "\n").replace("\\r", "\r").replace("\\\"", "\"").replace("\\\'", "\'");
}

function checkclick(msg, url) {
    if (confirm(msg)) {
        window.location.href = url;
    }
}

function getRadioValue(name) {
    var backValue = "";
    $("input[name='" + name + "'][type='radio']").each(function () {
        if (this.checked) {
            backValue = this.value;
            return false;
        }
    });
    return backValue;
}
//测试输入的是否为数字
function IsCheckNum(NUM) {
    var i, j, strTemp;
    strTemp = "0123456789";
    if (NUM.length == 0)
        return 0
    for (i = 0; i < NUM.length; i++) {
        j = strTemp.indexOf(NUM.charAt(i));
        if (j == -1) {
            return 0;//说明有字符不是数字
        }
    }
    return 1; //说明是数字
}

var imageObject;
function ResizeImage(obj, MaxW, MaxH) {
    if (obj != null) imageObject = obj;
    var state = imageObject.readyState;
    if (state != 'complete') {
        setTimeout("ResizeImage(null," + MaxW + "," + MaxH + ")", 50);
        return;
    }
    var oldImage = new Image();
    oldImage.src = imageObject.src;
    var dW = oldImage.width; var dH = oldImage.height;
    if (dW > MaxW || dH > MaxH) {
        a = dW / MaxW; b = dH / MaxH;
        if (b > a) a = b;
        dW = dW / a; dH = dH / a;
    }
    if (dW > 0 && dH > 0) {
        imageObject.width = dW;
        imageObject.height = dH;
    }
}

//获取地区
function getSubAreas(supoptid, suboptid,_opt) {
    if (suboptid && $("#" + suboptid).length > 0) $("#" + suboptid).get(0).length = 1;
    if (_opt && $("#" + _opt).length>0) $("#" + _opt).get(0).length = 1;
	if ($("#" + supoptid).get(0).selectedIndex == 0 || $("#" + supoptid).val() == "" || $("#" + supoptid).val() == "0") {
		//当一级菜单未选中时，二级菜单仅保留提示项
		return;
	}
	$.ajax({
	    url: "RegistOption.ashx",
	    type: "POST",
	    cache: false,
	    dataType: "text",
	    data: { action: "getSubAreas", sid: EncodeURL($("#"+supoptid).val()) },
	    success: function(transport) {
	        if (transport != "0") {//获取成功后，将数据填充到子级下拉框
	            var _arr = eval("(" + transport + ")");
	            for (var i = 0; i < _arr.length - 1; i += 2)
	            {
	                with ($("#"+suboptid).get(0)){
	                    options[options.length] = new Option(_arr[i], _arr[i + 1]);
	                }
	            }
	        }
	    }
	});
}
