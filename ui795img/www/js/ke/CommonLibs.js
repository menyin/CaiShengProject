
/*==========================公共操作函数===================================*/
var __GB_EVENTS_CHAINS = []; //窗口事件链
$(function () {
    if (__GB_EVENTS_CHAINS.length > 0) {
        GetFirstChainEvent();
    }
});
Array.prototype.removeAt = function (index) {
    this.splice(index, 1);
    return this;
};
var GetFirstChainEvent = function () {
    if (__GB_EVENTS_CHAINS.length == 0) return;
    var w = __GB_EVENTS_CHAINS[0];
    __GB_EVENTS_CHAINS = __GB_EVENTS_CHAINS.removeAt(0);
    if (typeof (w.url) == 'function') {
        var fuc = eval(w.url);
        fuc();
    } else __open("chainwin", { "url": w.url, caption: w.caption, w: 200, h: 220, scrolling: "no", onclosewin: "GetFirstChainEvent" });
};
function GetParamByName(name, querystring) {
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(!querystring ? window.location.href : querystring);
    if (!results) {
        return 0;
    }
    return results[1] || 0;
}
function checkallbycontainer(obj, cc) {
    $(cc).find(":checkbox").attr("checked", $(obj).attr("checked") == "checked");
}
function hidewin(exp) {
    $("#idw_" + exp).hide();
}

function __close(idc) {
    $(".black_overlay").hide();
    var w = $("#" + idc);
    w.hide();
    if (w.attr("onclosewin") != "") {
        var __callback = eval(w.attr("onclosewin"));
        if (typeof (__callback) == 'function') {
            __callback(idc);
        }
    }
}
function __alert(url) {
    __open("alertwin", { "url": url, w: 490, h: 280, scrolling: "no" });
}

function __confirm(msg, __callback) {
    __open("confirmwin", {
        html: "<div style='font-size:14px'>" + msg + "</div>",
        caption: "确认提示",
        w: 420,
        h: 380,
        clicks: function (b) {
            if (typeof (__callback) == 'function') __callback(b);
        }
    });
}

function __msgbox(msg, type) {
    var p = { html: msg, w: 420, h: 280 };
    if (typeof (type) != 'undefined') {
        p = $.extend(p, { 'type': type });
    }
    __open("msgwin", p);
}

function __fastopen(url) {
    __open("fastwin", { "url": url, caption: "....", w: 200, h: 220, scrolling: "no" });
}
function __open(name, options) {
    if (!$(".black_overlay").length) {
        $("body").append("<div  class=\"black_overlay\"></div>");
    }
    $(".black_overlay").attr("style", "height:" + $("body").height() + "px").show();

    var w = $("#idw_" + name);
    //   w.remove();
    options = $.extend({ caption: "系统提示", scrolling: "auto" }, options);
    if (!w.length) {
        var iframe = !options.html ? CreateIFrame(name, options.url, options.w, options.h - 50, options.scrolling) : "<div class='msgcontent'>" + GetMsgHtml(name, options) + "</div>";
        var html = "<div class='iwindow' id='idw_" + name + "' onclosewin='" + ((!options.onclosewin) ? "" : options.onclosewin) + "'><h2 id='hdc_" + name + "'><span class='hdcap'>" + options.caption + "</span><a href=\"javascript:__close('idw_" + name + "')\"></a></h2>" + iframe + "</div>";
        $("BODY").append(html);
        w = $("#idw_" + name);
        $("#hdc_" + name).width(options.w - 15);
        w.width(options.w);
        w.easydrag(true).setCenter(); w.setHandler("hdc_" + name);
        try {
            w.bgiframe();
        } catch (e) {

        }

        var ie6 = ! -[1, ] && !window.XMLHttpRequest;
        if (ie6 && !options.html) {
            iframe = $("#idc_" + name);
            $(iframe).load(function () {
                w.show().setCenter();
            });
        }

    } else {
        w.show().setCenter();
        if (!options.html) {
            var iframe = $("iframe[name='" + name + "']");
            iframe.attr("src", options.url);
        } else {
            w.find(".msgcontent").html(GetMsgHtml(name, options));
        }
    }
    // button click 
    $("input.btn4").hover(function () {
        $(this).addClass("btn4hover");
    }, function () {
        $(this).removeClass("btn4hover");
    });
    if (options.clicks) {

        w.find("input[name='clo']").click(function () {
            hidewin(name);
            options.clicks(w.find("input[name='clo']").index($(this)) == 0);

        });
    }

}

function GetMsgHtml(name, msg) {
    var sb = [];
    sb.push("<link href=\"/style/v3/iwindow.css\" rel=\"stylesheet\" />");
    sb.push(" <table width=\"100%\" height=\"100%\" class=\"DataTable\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">");
    sb.push("                <tr>");
    sb.push("                    <td align=\"center\" width=\"110\" valign=\"middle\">");
    sb.push("                        <em class=\"wico ico-" + msg.type + "\"><\/em>");
    sb.push("                    <\/td>");
    sb.push("                    <td>");
    sb.push("                        <div style=\"padding: 5px 0px;\">");
    sb.push(msg.html);
    sb.push("                          <\/div>");
    sb.push("                    <\/td>");
    sb.push("                <\/tr>");
    sb.push("<tr><td height=10 colspan=2></td></tr>");
    sb.push("                <tr>");
    sb.push("                    <td colspan=\"2\" align=\"center\" bgcolor=\"#FFFFFF\" style='border-top:1px solid #F3F9FF; padding-top:10px;'>");
    if (msg.clicks) {
        sb.push("                        <input  type=\"button\" class=\"wbutton1\" name=\"clo\" value=\"确 定\" \/>&nbsp;&nbsp;");
        sb.push("                        <input onclick=\"__close('idw_" + name + "')\" type=\"button\" class=\"wbutton2\" name=\"clo\" value=\"取 消\" \/>");
    } else {
        sb.push("                        <input onclick=\"__close('idw_" + name + "')\" type=\"button\" class=\"wbutton2\" name=\"clo\" value=\"关闭窗口\" \/>");
    }

    sb.push("                    <\/td>");
    sb.push("                <\/tr>");
    sb.push("            <\/table>");
    return sb.join("");
}
function updateidw(name, options) {
    var w = $("#idw_" + name);
    var iframe = $("iframe[name='" + name + "']");
    var _ops = $.extend({ width: iframe.width(), height: iframe.height() }, options);
    iframe.attr("height", _ops.height);
    //  alert(options.height);
    w.width(_ops.width);
    // w.height(_ops.height + 30);
    $("#hdc_" + name).width(w.width() - 15);
    w.setCenter();
}
function updateidtitle(name, title) {
    var hdc = $("#hdc_" + name);
    hdc.find("span.hdcap").html(title);
}
function CreateIFrame(name, url, width, height, scrolling) {
    var iframe = '<iframe  name="' + name + '" id="idc_' + name + '"  src="' + url + '" width="100%" height="' + height + '" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="' + scrolling + '" allowtransparency="yes"/>';
    return iframe;
}
function setScrollToTop(id) {
    $("#" + id).hide();
    $(document).scrollTo({ top: 0, left: 0 }, 500);
}
//发送面试通知成功提示
function sendok(num) {
    __msgbox('系统提示：<font color=green><b>' + num + '</b>封面试通知电子邮件发送成功!</font>');
}
//发送拒绝面试通知成功提示
function sendok1(num) {
    __msgbox('系统提示：<b>' + num + '</b>封<font color=red>拒绝面试通知</font>电子邮件发送成功!');
}
//发送面试邀请成功提示
function sendok2(num) {
    __msgbox('系统提示：<font color=green><b>' + num + '</b>封招聘邀请电子邮件发送成功!</font>');
}
function ChangeScrollTop() {
    var scrtop = $("#scrolltop");
    if (scrtop.length == 0 || scrtop.data("closed") == true) {
        return;
    }

    if ($(window).scrollTop() < 10)
        scrtop.fadeOut('fast');
    else {
        scrtop.fadeIn('fast');
        var ie6 = ! -[1, ] && !window.XMLHttpRequest;
        if (ie6) {//ie6
            var viewPortHeight = parseInt(document.documentElement.clientHeight);
            var scrollHeight = parseInt(document.body.getBoundingClientRect().top);
            scrtop.css("top", viewPortHeight - scrollHeight - 120);
        }
        if (!scrtop.data("init")) {
            var l = $("#bottomwrapper").width() + $("#bottomwrapper").offset().left + 2;
            // alert([$("#bottomwrapper").width(), $("#bottomwrapper").offset().left, l]);
            scrtop.css("left", l).show().data("init", true);
        }
    }
}
function __doAjaxRefresh() {
    var paginator = $("div.paginator:last");
    if (paginator.length) {//带分页链接
        var pageindex = parseInt(paginator.find("span.cpb").text());
        try {
            __doPostBack(paginator.attr("id").replace(/[_]/gi, "$"), pageindex);
        } catch (e) {
            location.reload();
        }
    }
    else {
        location.reload();
    }
}
/*
系统事件处理队列：
/////////////////////////////
目前只支持 resize,scroll,click
示例：
1.绑定document.click事件
addEventsQueue('click','处理标识',事件处理程序);
2.绑定多个事件:
addEventsQueue(['click','mousedown','scroll'],'key',callback)
*/
var EventProcList = [];
$(function () {
    $(window).bind("resize scroll", function (e) {
        procEventsQueue(e);
    });
    $(document).bind("click", function (e) {
        procEventsQueue(e);
    });
});
function procEventsQueue(e) {
    if (EventProcList.length) {
        $.each(EventProcList, function (i, n) {
            if (n.name == e.type) {
                n.callback(n.key, e.type);
            }
        });
    }
}
function addEventsQueue(events, key, callback) {
    var arrevents = typeof (events) == "string" ? [events] : events;
    $.each(arrevents, function (i, n) {
        if (!IsEventExistsInQueue(n, key)) EventProcList.push({ 'name': n, 'key': key, 'callback': callback });
    });
}
function IsEventExistsInQueue(name, key) {
    var existkey = false;
    $.each(EventProcList, function (i, n) {
        if (n.key == key && n.name == name) {
            existkey = true;
            return false;
        }
    });
    return existkey;
}

function CommSelect(__endchkname, __sender) {
    var selected = $(__sender).attr("checked") == "checked";
    $("input[name$='" + __endchkname + "']").each(function() {
        if ($(this).attr("disabled") != "disabled")
            $(this).attr("checked", selected);
    })

}
/*
    SiteTip Class 
*/
function SiteTip(option) {
    this.init = false;
    this.key = option.key;
    this.useanimate = option.useanimate;
    this.id = "tip_" + this.key;
    this.cc = null;
    this.options = option;
    this.cookiekey = "cookie_" + this.key;
    this.ie6 = ! -[1, ] && !window.XMLHttpRequest;
}

SiteTip.prototype.CloseTip = function (never) {
    var tip = $("#" + this.id);
    var callback = this.options.onclose;
    var _this = this;
    var tCallBack = function () {
        //check never remind cookie
        if (never) {
            $.cookie(_this.cookiekey, "never", { expires: 30 });
        } else {
            $.cookie(_this.cookiekey, null);
        }
        if (typeof (callback) == 'function') {
            callback();
        }
    };
    if (this.useanimate) {
        tip.animate({ bottom: -tip.height() }, "fast", function () {
            $(this).hide();
            tCallBack();
        });
    } else {
        $("#" + this.id).hide();
        tCallBack();
    }
};
SiteTip.prototype.InitTip = function () {
    if ($("#" + this.id).length == 0) {
        var html = "<div id='" + this.id + "' class='SiteTip'><h2><img src='" + this.options.icon + "' align='absmiddle'/>" + this.options.caption + "<a href='javascript:;' class='clx'></a></h2>" +
            "<div class='c'></div>" +
            "<div class='b'><input type='checkbox' name='chknever' id='ck_" + this.id + "' class='l'/><label for='ck_" + this.id + "' class='l'>以后不再提示</label> <a class='r btncl' href='javascript:;'/></a>" +
            "<div class='clear'></div> </div>" +
            "</div>";
        $("BODY").append(html);
        var _this = this;
        $("#" + this.id).find("a.clx,a.btncl").click(function () {
            var never = $("#ck_" + _this.id).attr("checked") == "checked";
            _this.CloseTip(never);
        });

        if (this.ie6) {
            // $("#" + this.id).bgiframe();
            addEventsQueue(["scroll", "resize"], "mobilescroll", function () {
                var tip = $("#" + _this.id);
                var viewPortHeight = parseInt(document.documentElement.clientHeight);
                var scrollHeight = parseInt(document.body.getBoundingClientRect().top);
                tip.css({
                    "top":
                       viewPortHeight - scrollHeight - tip.height(),
                    "bottom":
                        "auto"
                });
            });
        }
    }
    var tip = $("#" + this.id);
    this.init = true;
    this.cc = tip.find(".c");
    tip.width(this.options.width);
    tip.height(this.options.height);
    tip.hide();
};
SiteTip.prototype.ShowTip = function () {
    var tip = $("#" + this.id);
    if (this.useanimate) {
        tip.css({ bottom: -tip.height() }).show().animate({ bottom: 0 }, "fast");
    } else {
        tip.show();
    }
    /*
        fix postion in ie6 , for i6 not support fixed.
    */
    if (this.ie6) {

    }
};
SiteTip.prototype.SetHtml = function (_html) {
    var nCookie = $.cookie(this.cookiekey);
    if (!nCookie) {
        if (!this.init) this.InitTip();
        this.cc.html(_html);
        return true;
    }
    return false;
};
/*
    fix postion in ie6/7 , for i6/7 not support chrome log.
*/
if (!window.console) {
    window.console = {};
}
if (!console.log) {
    console.log = function () { };
}

//获取URL的参数
function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return '';
}