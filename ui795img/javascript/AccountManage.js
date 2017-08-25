$(document).ready(function () {
    setWelcome();
    $("#topusername,#toppwd,#topvcode").bind("keyup", function (e) { if (e.keyCode == 13) { topdologin(); } });
    $("#top_btnlogin").click(function () {
        topdologin();
    });
    $("#topvcode").bind({
        click: function () {
            var _img = $("#div_topvcode img");
            var _curl = _img.attr("src");
            if (_curl == "#" || !_curl) {
                _img.attr("src", "/common/ValidateCode.aspx?s=" + Math.random());
            }
            var _obj = $(this);
            var _left = _obj.position().left;
            var _top = _obj.position().top + _obj.height() + 5;
            $("#div_topvcode").css({ left: _left, top: _top }).show();
        },
        focus: function () {
            var _img = $("#div_topvcode img");
            var _curl = _img.attr("src");
            if (_curl == "#" || !_curl ) {
                _img.attr("src", "/common/ValidateCode.aspx?s=" + Math.random());
            }
            var _obj = $(this);
            var _left = _obj.position().left;
            var _top = _obj.position().top + _obj.height() + 5;
            $("#div_topvcode").css({ left: _left, top: _top }).show();
        }
    });
});

function setLoginInfo(){
    var usname = "";
    if (usname!="") {
        var _log = $("#memberlogin");
        if (_log.length > 0) {
            _log.html("您好，<a  href='http://www.cn2che.com/member/' target='_blank'>" + usname + "</a>，欢迎来到中国二手车城，<a href='http://www.cn2che.com/member/'  target='_blank'>进入会员中心</a>！<a  href='/reg/logout.aspx'>退出登录</a>");
        }
        var _ck = $(".cn2che-login");
        if (_ck.length > 0) {
            _ck.html('<span>您好, ' + usname + ' <a href="http://www.cn2che.com/member/"  target="_blank">[进入会员中心]</a> <a href="http://www.cn2che.com/reg/logout.aspx">[退出]</a></span>');
        }
    } else { 
        setWelcome();
    }
}
//异步获取用户登录名称.
function setWelcome(){
    $.ajax({
        url: "/RegistOption.ashx",
        type: "POST",
        cache: false,
        dataType: "text",
        data: { action: "getUserName" },
        success: function (transport) {
            if (transport != "") {
                var _log = $("#memberlogin");
                if (_log.length > 0) {
                    _log.html("您好，<a  href='http://www.cn2che.com/member/'  target='_blank'>" + transport + "</a>，欢迎来到中国二手车城，<a href='http://www.cn2che.com/member/'   target='_blank'>进入会员中心</a>！<a  href='http://www.cn2che.com/reg/logout.aspx'>退出登录</a>");
                }
                var _ck = $(".cn2che-login");
                if (_ck.length > 0) {
                    _ck.html('<span>您好, ' + transport + ' <a href="http://www.cn2che.com/member/"   target="_blank">[进入会员中心]</a> <a href="http://www.cn2che.com/reg/logout.aspx">[退出]</a></span>');
                }
            } 
        }
    });
}
function topdologin() {
    var _topusername = $("#topusername").val();
    var _toppwd = $("#toppwd").val();
    var _topvcode = $("#topvcode").val();
    if (_topusername == "" || _toppwd == "" || _topvcode == "") {
        alert("用户名或密码不能为空！");
        return;
    }
    $.ajax({
        url: "RegistOption.ashx",
        type: "POST",
        cache: false,
        dataType: "text",
        data: { action: "dologin", username: $.trim(_topusername), pwd: $.trim(_toppwd), vcode: $.trim(_topvcode) },
        success: function (transport) {
            if ("succ" == transport) {
                window.location.href = "http://www.cn2che.com/member/";
            } else if (transport == "code") {
                alert("验证码错误！");
            } else {
                alert("用户名或密码错误！");
            }
        }
    });
} 