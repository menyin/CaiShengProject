//登陆
$.get("/plugin/GetPlugin.ashx?url=http://www.hbsc.cn/plugin/Login.aspx",null,function (res) {
    $("body").append(res);
    BindPersonLogin();
},"text");
//绑定登陆弹层
function BindPersonLogin() {
    new PopupLayer({ trigger: "#OpenPersonLoginLayer", popupBlk: "#PersonLoginLayer", closeBtn: "#ClosePersonLoginLayer", useOverlay: true, useFx: true }).doEffects = GetdoEffectsLogin;
    $("#LoginUserName").val(getCookie("hbsc_username"));
    $("#LoginPassWord").val(getCookie("hbsc_userpwd"));
    $("#PersonLoginSave").prop("checked", ($("#LoginUserName").val() != "" && $("#LoginPassWord").val() != ""));
    $("#LoginUserName,#LoginPassWord").focus(function () {
        $(this).css({ "background": "#fff" });
    }).blur(function () {
        $(this).css({ "background": "#f6ebf1" });
    }).keypress(function (e) {
        if (e.which == 13) {
            PersonLayerLogin();
        }
    });
}
function PersonLayerLogin() {
    var username = $.trim($("#LoginUserName").val());
    var userpwd = $.trim($("#LoginPassWord").val());
    var issave = $("#PersonLoginSave").prop("checked");
    if (username.length == 0) {
        alert("用户名不能为空！"); return false;
    }
    if (userpwd.length == 0) {
        alert("密码不能为空！"); return false;
    }
    if (issave) {
        addCookie("hbsc_username", username, 3600);
        addCookie("hbsc_userpwd", userpwd, 3600);
    } else {
        delCookie("hbsc_username");
        delCookie("hbsc_userpwd");
    }
    $.ajax({
        type: "POST",
        url: "/ashx/CheckLoginStatistics.ashx",
        data: {
            uname: escape(username),
            pwd: userpwd,
            loginterm: issave ? 1 : 0
        },
        dataType: "json",
        success: function (data) {
            var result = parseInt(data.status);
            if (result != -1) {
                //登陆成功统计
                personloginstatlayer(data.msg, "2", "1");

                if (result == -9999) {
                    //-9999标记用户没有简历 强制跳转至简历注册页面
                    location.href = "http://person.hbsc.cn/register/regresume.aspx";
                    return;
                }
                $("#ClosePersonLoginLayer").click();
                switch ($("#OpenPersonLoginLayer").val()) {
                    case "1":  //投递
                        hbsc.person.Job.applySubmit(jids, sts);
                        break;
                    case "2":
                        //alert("回调");
                        hbsc.person.Job.Favorites(jids, sts);
                        break;
                    case "3":
                        //alert("标记回调");
                        hbsc.person.Job.JobHistory();
                        break;
                    default:  //默认刷新页面
                        window.location.reload();
                        break;
                }
            }
            else {
                alert("用户名或密码错误！");
            }
        },
        error: function () { alert("系统忙请稍候再试！"); }
    });
}
function GetdoEffectsLogin(way) {
    if (way == "open") {
        this.popupLayer.show().css({ left: ($(document).width() - this.popupLayer.width()) / 2,
            top: (document.documentElement.clientHeight - this.popupLayer.height()) / 2 + $(document).scrollTop()
        });
    } else { this.popupLayer.hide(); }
}
//添加cookie
function addCookie(objName, objValue, objHours) {
    var str = objName + "=" + escape(objValue);
    if (objHours > 0) {//为0时不设定过期时间，浏览器关闭时cookie自动消失
        var date = new Date();
        var ms = objHours * 3600 * 1000;
        date.setTime(date.getTime() + ms);
        str += "; expires=" + date.toGMTString() + '; path=/; domain=hbsc.cn';
    }
    document.cookie = str;
}
//获取指定名称的cookie的值
function getCookie(objName) {
    var arrStr = document.cookie.split("; ");
    for (var i = 0; i < arrStr.length; i++) {
        var temp = arrStr[i].split("=");
        if (temp[0] == objName) return unescape(temp[1]);
    }
}
//为了删除指定名称的cookie，可以将其过期时间设定为一个过去的时间
function delCookie(name) {
    var date = new Date();
    date.setTime(date.getTime() - 10000);
    document.cookie = name + "=a; expires=" + date.toGMTString();
}
//个人登陆成功统计
function personloginstatlayer(pid, type, urltype) {
    var urlreferrer = window.location.href;
    var linkurl = "";
    if (urltype == "1") {
        linkurl = "http://tj.hbjob.cn/insert/personloginstat.ashx?r=" + Math.random();
        linkurl += "&pid=" + escape(pid) + "&t=" + escape(type) + "&s=" + escape(urlreferrer);
    } else {
        linkurl = "http://tj.hbjob.cn/insert/personloginclickstat.ashx?r=" + Math.random() + "&s=" + escape(urlreferrer);
    }
    var img = new Image();
    img.src = linkurl;
}