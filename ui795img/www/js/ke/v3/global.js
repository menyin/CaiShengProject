﻿window.CanShowIndustry = false;
var isIE = !!window.ActiveXObject;
var isIE6 = isIE && !window.XMLHttpRequest;
var isIE8 = isIE && !!document.documentMode;
$(function () {
    //自动推送给百度
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
    $(window).scroll(function () {
        if ($(window).scrollTop() < 120) {
            $(".header").attr("style", "");
            $(".logowrapper").css({ "padding-top": "0" });
        }
        else {
            $(".logowrapper").css({ "padding-top": "45px" });
            $(".header").attr("style", "position:fixed;margin-top:0");
        }
    });
    $(".MenuMobile,.MenuWx").hover(function () {
        $(this).find(".Qr").show();
    }, function () {
        $(this).find(".Qr").hide();
    });

    if ($("#jobdropdown").html() == "请选择<b></b>") $("#jobdropdown").html("工作岗位");
    if ($("#citydropdown").html() == "请选择<b></b>") $("#citydropdown").html("工作地点");
    $("#daohang").hover(function () {
        $(this).addClass("iconover");
        $(".daohangbox").show();
    }, function () {
        $(this).removeClass("iconover");
        $(".daohangbox").hide();
    });
    $("#entlogin").click(function () {
        location.href = '/ent/manage.aspx';
    });
    $("#jwlogin").click(function () {
        location.href = '/jw/manage.aspx';
    });

    $(".hasclass").hover(function () {
        $(this).find(".hasclassview").show();
    }, function () {
        $(this).find(".hasclassview").hide();
    });


    $(".citybox").hover(function () {
        $(".selectcity").show();
    }, function () {
        $(".selectcity").hide();
    });

    $("#search-t").hover(function () {
        $(this).find(".selected").show();
    }, function () {
        $(this).find(".selected").hide();
    });

    $(".qqlogin").hover(function () {
        $(this).find(".qqkuan").show();
    }, function () {
        $(this).find(".qqkuan").hide();
    });


    $("#search-t").find(".selected").click(function () {
        var search = $("#search-t");
        search.hasClass("icon1") ? search.removeClass("icon1") : search.addClass("icon1");
        $(this).hide();
    });

    $(".entlogin").hover(function () {
        $(this).find(".entloginkuan").show();
    }, function () {
        $(this).find(".entloginkuan").hide();
    });
    $("#btnIndustry").hover(function () {
        $(".RightIndustry").css("top", $(this).offset().top - 446).css("left", $(this).offset().left - 72).show();
        window.CanHideIndustry = false;
    }, function () {
        window.CanHideIndustry = true;
        setTimeout(function () {
            if (window.CanHideIndustry)
                $(".RightIndustry").hide();
        }, 2000);
    });

    $(".RightIndustry").hover(function () {
        window.CanHideIndustry = false;
    }, function () {
        $(".RightIndustry").hide();
    });

    ChangePosition();
    if ($(window).scrollTop() > 100)
        $(".GoToTop").show();
    else
        $(".GoToTop").hide();
    $(".GoToTop").click(function () {
        $('body,html').animate({ scrollTop: 0 }, 500);
        return false;
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $(".GoToTop").fadeIn(1000);
        } else {
            $(".GoToTop").fadeOut(1000);
        }
    });
    $(window).resize(function () {
        ChangePosition();
    });

    if ($.cookie && $.cookie("wxqrCloseDate") == "1") {
        $(".DivQR").hide();
    }
    if ($.cookie && $.cookie("WallCloseDate") == "1") {
        $(".wall").hide();
    }
    $("input[id^=ctl00_footer1_rblCategory]").click(function () {
        $("#category_" + $(this).val()).show().siblings().hide();
        $("#category_" + $(this).val()).children()[0].click();
    });

    $("input[id^=ctl00_ContentPlaceHolder1_rblCategory]").click(function () {
        $("#category_" + $(this).val()).show().siblings().hide();
        $("#category_" + $(this).val()).children()[0].click();
    });

    $(".CategoryItem").click(function () {
        $(this).addClass("ItemSelect").siblings().removeClass("ItemSelect");
    });

    if ($("input[id^=ctl00_footer1_rblCategory]").length > 0)
        $("input[id^=ctl00_footer1_rblCategory]")[0].click();

    if ($("input[id^=ctl00_ContentPlaceHolder1_rblCategory]").length > 0)
        $("input[id^=ctl00_ContentPlaceHolder1_rblCategory]")[0].click();

    $("#ctl00_keyword").keydown(function (event) {
        var keyPressed;
        if (window.event)
            keyPressed = window.event.keyCode; // IE
        else
            keyPressed = event.keyCode; // Firefox
        if (keyPressed == 13) {
            Search();
            return false;
        }
    });

    var ab = $('.ActiveBottom');
    $(window).on('mousewheel DOMMouseScroll', function (e) {
        if (ab.length == 0) return;
        var n = 0,
            r = e.originalEvent,
            i = $(document).scrollTop();
        r.wheelDelta ? n = r.wheelDelta / 120 : r.detail && (n = -r.detail / 3),
        n > 0 ? ab.show() : ab.hide();
    });
    $('.ActiveBottom i').click(function () {
        ab.remove();
    });
});

/*生成二维码*/
function CreateQr(id, url, width, height) {
    var browser = navigator.appName;
    if (browser == "Microsoft Internet Explorer") {
        $('#' + id) && $('#' + id).length > 0 && $('#' + id).qrcode({
            text: url,
            width: width,
            height: height,
            render: "table"
        });
    } else {
        $('#' + id) && $('#' + id).length > 0 && $('#' + id).qrcode({
            text: url,
            width: width,
            height: height
        });
    }
}

/*搜索*/
function Search() {
    var keyword = $("#ctl00_keyword").val();
    if (keyword == "8888") {
        alert("请输入合法关键字");
        $("#keyword").focus();
        return;
    }
    var jtype1 = $("#jobdropdown").attr("sel_default");
    var jctiy1 = $("#citydropdown").attr("sel_default");
    var search = $("#search-t");
    if (keyword.length == 0 && jtype1.length == 0) {
        alert("请输入搜索关键字或职位类别");
        $("#keyword").focus();
        return;
    }
    if (keyword.length == 1) {
        alert("搜索关键字不能少于2个字");
        $("#keyword").focus();
        return;
    }
    var querys = [];
    var url = search.hasClass("icon1") ? "/search/resume_search_result.aspx" : "/search/offer_search_result.aspx";
    querys.push("keyword=" + escape(keyword));
    querys.push("jtype1Hidden=" + jtype1);
    querys.push("jcity1Hidden=" + jctiy1);
    var cookiesname = search.hasClass("icon1") ? "jwsearchlog" : "entsearchlog";
    var title = "";
    if (keyword.length > 0) title = "关键字:" + keyword + "";
    if (jctiy1.length > 0) {
        var jctiy1Txt = $("#citydropdown").html().replace("<b></b>", "").replace("请选择", "").replace("工作地点", "");
        if (jctiy1Txt.length > 0) {
            if (title.length > 0) title += "+";
            title += jctiy1Txt;
        }
    }
    if (jtype1.length > 0) {
        var jtype1Txt = $("#jobdropdown").html().replace("<b></b>", "").replace("请选择", "").replace("工作岗位", "");
        if (jtype1Txt.length > 0) {
            if (title.length > 0) title += "+";
            title += jtype1Txt;
        }
    }
    try {
        var searchtitle = title;  //标题
        var searchurl = url + "?" + querys.join("&"); //页面地址
        var canAdd = true; //初始可以插入cookie信息 
        var jwsearchlog = $.cookie("" + cookiesname + "");
        var len = 0;
        if (jwsearchlog) {
            jwsearchlog = eval("(" + jwsearchlog + ")");
            len = jwsearchlog.length;
        }
        $(jwsearchlog).each(function () {
            if (this.searchtitle == searchtitle) {
                canAdd = false; //已经存在，不能插入 
                return false;
            }
        });
        if (canAdd == true) {
            var json = "[";
            var start = 0;
            if (len > 10) { start = 1; }
            for (var i = start; i < len; i++) {
                json = json + "{\"searchtitle\":\"" + jwsearchlog[i].searchtitle + "\",\"searchurl\":\"" + jwsearchlog[i].searchurl + "\"},";
            }
            json = json + "{\"searchtitle\":\"" + searchtitle + "\",\"searchurl\":\"" + searchurl + "\"}]";
            $.cookie("" + cookiesname + "", json, { path: '/', expires: 365 });
        }
    } catch (ex) {

    };

    if ($("#searchLink").length > 0) {
        $("#searchLink").attr("href", url + "?" + querys.join("&"));
        document.getElementById("searchLink").click();
    } else {
        open(url + "?" + querys.join("&"));
    }
}

//关闭微信二维码
function CloseQR() {
    $(".DivQR").hide();
    $.cookie("wxqrCloseDate", 1, { expires: 1 });
}
function CloseWall() {
    $(".wall").hide();
    $.cookie("WallCloseDate", 1, { expires: 1 });
}


//改变坐标i
function ChangePosition() {
    //var left = (($(window).width() - 998) / 2) + 998;
    var left = (($(window).width() - 1100) / 2) + 1100 + 10;
    if ($(window).width() >= 1340) {
        $(".wall").attr("style", "left:6px;display:none");
        $(".DivQR").attr("style", "left:6px;bottom:55px;display:block");
    }
    else {
        $(".wall").attr("style", "left:0;display:none");
        $(".DivQR").attr("style", "left:6px;bottom:55px;display:none");
    }
    if ($(window).width() >= 1180) {
        //$(".DivRightButton").css({ "left": left + "px", "top": (($(window).height() - 140) / 2) + "px" });
        $(".DivRightButton").css({ "right": "6px", "bottom": "55px" });
        if ($(".DivRightButton").is(":hidden"))
            $(".DivRightButton").show();
    }
    else
        $(".DivRightButton").hide();
}
//百度分享
window._bd_share_config = {
    "common": {
        "bdSnsKey": {},
        "bdText": "",
        "bdMini": "1",
        "bdMiniList": ["mshare", "tsina", "weixin", "tqq", "renren", "sqq", "qzone"],
        "bdPic": "",
        "bdStyle": "0",
        "bdSize": "16",
        "bdPopupOffsetLeft": "-78"
    },
    "share": {}
};
with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];

function RefreshOffer() {
    __open("refreshoffer", { caption: "刷新招聘信息", w: 450, h: 320, scrolling: "no", url: "/ent/refresh_offer1.aspx" });
}

function SugFeedBack() {
    var hasLogin = $("#ctl00_footer1_hasLogin").val();
    var parm = {
        category: $("div[id^=category_]:visible > .ItemSelect").attr("value"),
        content: $("#txtContent").val(),
        name: $("#txtName").val(),
        email: $("#txtEmail").val(),
        mobile: $("#txtPhone").val()
    };
    var errorMsg = $(".FeedBackBox > .Content > .Item > .ErrorMsg");
    if (parm.category.length == 0) {
        errorMsg.html("请选择反馈类型");
        return;
    }
    if (parm.content.length == 0) {
        errorMsg.html("请输入要反馈的内容");
        return;
    }
    if (parm.content.length >= 500) {
        errorMsg.html("内容超出字符限制");
        return;
    }
    if (hasLogin == 0) {
        if (parm.name.length == 0) {
            errorMsg.html("请输入您的昵称");
            return;
        }
        if (parm.name.length >= 25) {
            errorMsg.html("昵称超出字符限制");
            return;
        }
        if (parm.email.length == 0) {
            errorMsg.html("请输入您的邮箱");
            return;
        }
        if (parm.email.length >= 50) {
            errorMsg.html("邮箱超出字符限制");
            return;
        }
        var filter = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
        if (!filter.test(parm.email)) {
            errorMsg.html("邮箱格式错误");
            return;
        }
        if (parm.mobile.length > 0) {
            filter = /(^\d{1}$)|(^\d{11}$)/;
            if (!filter.test(values)) {
                errorMsg.html("手机格式错误，必须为11位数字");
                return;
            }
        }
    }
    $.ajax({
        url: "/ajax/FeedBack.ashx?r=" + Math.random() + "",
        type: 'POST',
        dataType: 'text',
        timeout: 30000,
        data: parm,
        error: function () {
            errorMsg.html("服务器繁忙，请稍后重试");
        },
        success: function (data) {
            if (data.length > 0) {
                errorMsg.html(data);
            } else {
                alert("提交完成，感谢您的反馈");
                errorMsg.html("");
                $("#txtContent").val("");
                $(".FeedBackBg,.FeedBackBox").hide();
            }
        }
    });
}



function OpenQqLogin(e) {
    e = e || {};
    pi = e.pi || 0;
    isreg = e.isreg || 0;
    url = e.url || window.qqurl;
    window.open(url, "newwindow", "height=550, width=900, top=0, left=0, toolbar=no, menubar=no, scrollbars=no,resizable=no,location=no, status=no");

    window.QqLogin_Success = function (i) {
        if (pi == 1) {
            window.top.location.href = "/login/apilogin.aspx?isreg=" + isreg;
            return;
        }
        if (i == 1) {
            window.location.href = window.location.href;
            return;
        }
        window.top.location.href = "/login/apilogin.aspx?url=" + window.top.location.href;
    };
}
function OpenWeiboLogin(e) {
    e = e || {};
    pi = e.pi || 0;
    isreg = e.isreg || 0;
    url = e.url || window.weibourl;
    window.open(url, "newwindow", "height=550, width=900, top=0, left=0, toolbar=no, menubar=no, scrollbars=no,resizable=no,location=no, status=no");
    window.WeiboLogin_Success = function (i) {
        if (pi == 1) {
            window.top.location.href = "/login/apilogin.aspx?isreg=" + isreg;
            return;
        }
        if (i == 1) {
            window.location.href = window.location.href;
            return;
        }
        window.top.location.href = "/login/apilogin.aspx?isreg=" + isreg + "&url=" + window.top.location.href;
        return;
    };
}

function OpenWxBind(e) {
    e = e || {};
    url = e.url || window.weibourl;
    window.open(url, "newwindow", "height=350, width=350, top=150, left=150, toolbar=no, menubar=no, scrollbars=no,resizable=no,location=no, status=no");
}

function GetRandomNum(Min, Max) {
    var Range = Max - Min;
    var Rand = Math.random();
    return (Min + Math.round(Rand * Range));
}

//获取URL的参数
function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return '';
}

function getLoacalDateString() {
    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth() + 1;
    var dd = date.getDate();
    var time = y + "-" + (m < 10 ? "0" + m : m) + "-" + (dd < 10 ? "0" + dd : dd);
    return time;
}

function getLoacalTimeString() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var time = (h < 10 ? "0" + h : h) + ":" + (m < 10 ? "0" + m : m) + ":" + (s < 10 ? "0" + s : s);
    return time;
}

var SaveFile = function (data, filename) {
    var saveLink = document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
    saveLink.href = data;
    saveLink.download = filename;

    var event = document.createEvent('MouseEvents');
    event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
    saveLink.dispatchEvent(event);
};

function GetJsonByKey(data, key, value) {
    var result;
    $.each(data, function (i, item) {
        if (item[key] = value) {
            result = item;
            return false;
        }
    });
    return result;
}

function DeleteJsonByKey(data, key, value) {
    for (var i = 0; i < data.length; i++) {
        if (data[i][key] == value) {
            data.splice(i, 1);
            break;
        }
    }
    return data;
}

function ShowMaskLayer(closeid) {
    if ($(".MaskLayer").length > 0) {
        $(".MaskLayer").attr("onclick", "");
        $(".MaskLayer").unbind();
    } else {
        $("body").append("<div class='MaskLayer'></div>");
    }
    $(".MaskLayer").click(function () {
        $("#" + closeid).hide();
        $(".MaskLayer").hide();
    });
    $(".MaskLayer").show();
}

function IsIE() {
    var browser = navigator.appName;
    if (browser == "Microsoft Internet Explorer") {
        return true;
    } else if (browser == "Netscape" && navigator.userAgent.indexOf("Trident/7.0") > 0) {
        return true;
    }

    return false;
}

var bctool = {};
bctool.confirm = function (e) {
    var titletip = e.titletip || "";
    var title = e.title || "";
    var message = e.message || "";
    var confirmtxt = e.confirmtxt || "确定";
    var canceltxt = e.canceltxt || "取消";
    //初始化控件
    if (!bctool.confirm_HaveControl()) {
        bctool.confirm_InitControl();
    }
    var html = [];
    if (titletip != "") {
        html.push("<div class='confirm_titletip_info'></div>");
    }
    if (title != "") {
        html.push("<div class='confirm_title'>" + title + "</div>");
    }
    if (message != "") {
        html.push("<div class='confirm_message'>" + message + "</div>");
    }
    html.push("<div class='confirm_btn_warp'>" +
        "<div class='confirm_btn confirm_btn_confirm'>" + confirmtxt + "</div>" +
        "<div class='confirm_btn confirm_btn_cancle'>" + canceltxt + "</div>" +
        "</div>");
    $(".bctool-comfirm-warp").html(html.join(''));

    $(".bctool-comfirm-warp").show();
    $(".bctool-comfirm-warp-bg").show();
    $(".confirm_btn_confirm").click(function () {
        if (typeof (e.success) != "undefined") {
            e.success();
        }
        $(".bctool-comfirm-warp").hide();
        $(".bctool-comfirm-warp-bg").hide();
    });
    $(".confirm_btn_cancle").click(function () {
        $(".bctool-comfirm-warp").hide();
        $(".bctool-comfirm-warp-bg").hide();
    });
}
bctool.confirm_HaveControl = function () {
    var havenote = $(".bctool-comfirm-warp");
    if (havenote && havenote.length > 0) {
        return true;
    }
    return false;
}
bctool.confirm_InitControl = function () {
    var selwarp_html = "<div class='bctool-comfirm-warp'></div>";
    var selbg_html = "<div class='bctool-comfirm-warp-bg'></div>";
    $("body").append(selwarp_html + selbg_html);
}

function NotFindEntLogo(e) {
    $(e).parent().html("<div class='no_logo'></div>");
}