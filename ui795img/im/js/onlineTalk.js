var senduid = 0, receiveuid = 0, talktype = 0, userExisted = 0, lpid=0;
var username = "", lpname = "", receivename = "", content="";
var cookieArr = [];
var handlerTitle = null,handlerMsgv2=null;
$(function () {
    lpname = $("#hdlpname").val();
    lpid = $("#hdlpid").val();
    receivename = $("#chatW").attr("kfsname");
    if(lpname!=null&&lpname!=""&&lpname!=undefined)
        $("#chatW_L_DX").html(receivename + "-" + lpname);
    else {
        $("#chatW_L_DX").html(receivename);
    }
    receiveuid = $("#chatW").attr("kfsuid");
    doLoginCheck();
});

var sendmsg = function (){
    $.getJSON("http://m.xmhouse.com/ajax/xf/AddOnlineTalk.ashx?callback=?", {lpid:lpid, ismobile: 0, lpname: encodeURIComponent(lpname), userExisted: userExisted, sendusername: username, receiveuid: receiveuid, senduid: senduid, content: content, status: "send", talktype: talktype }, function (data) {
        if (data != null) {
            var datalist = eval(data);
            var allmesHtml = "";
            $.each(datalist, function (i, item) {
                if (parseInt(item.TalkType) == 0) {
                    allmesHtml += " <dl class=\"dialogue\"><dt class=\"me\">" + (talktype == item.TalkType ? "我" : receivename) + " - " + item.AddDate + "</dt><dd>";
                    allmesHtml += "<font color=\"red\">" + item.Content + "</font></dd></dl>";
                }
                else if (parseInt(item.TalkType) == 1) {
                    allmesHtml += "<dl class=\"dialogue\"><dt class=\"chatother\">" + receivename + " - " + item.AddDate + "</dt><dd>" + item.Content + "</dd></dl>";
                }
                if (i == datalist.length - 1 && senduid == 0) {
                    $.cookie("notlogionName", datalist[0].SendUserName);
                    $.cookie("userExisted", "1");
                    username = datalist[0].SendUserName;
                    userExisted = 1;
                }
                if (senduid > 0) {
                    $.cookie("notlogionName", "");
                    $.cookie("userExisted", "");
                }

            });
            $("#chatW_l_msg").html(allmesHtml);
            document.getElementById("chatW_l_msg").scrollTop = document.getElementById("chatW_l_msg").scrollHeight;   
        }
        
    });

};

var receivemsg = function () {
    var allmesHtml = "";
    $.getJSON("http://m.xmhouse.com/ajax/xf/AddOnlineTalk.ashx?callback=?", { sendusername: encodeURIComponent(username), receiveuid: receiveuid, senduid: senduid, content: encodeURIComponent(content), status: "receive", talktype: talktype }, function (data) {
        if (data != null) {
            var datalist = eval(data);
            $.each(datalist, function (i, item) {
                if (parseInt(item.TalkType) == 0) {
                    allmesHtml += " <dl class=\"dialogue\"><dt class=\"me\">" + (talktype == item.TalkType ? "我" : receivename) + " - " + item.AddDate + "</dt><dd>";
                    allmesHtml += "<font color=\"red\">" + item.Content + "</font></dd></dl>";
                }
                else if (parseInt(item.TalkType) == 1) {
                    allmesHtml += "<dl class=\"dialogue\"><dt class=\"chatother\">" + receivename + " - " + item.AddDate + "</dt><dd>" + item.Content + "</dd></dl>";
                }
                if (i == datalist.length - 1 && senduid == 0) {
                    $.cookie("notlogionName", datalist[0].SendUserName);
                    $.cookie("userExisted", "1");
                    username = datalist[0].SendUserName;
                    userExisted = 1;
                }
                if (senduid > 0) {
                    $.cookie("notlogionName", "");
                    $.cookie("userExisted", "");
                }
            });
            $("#chatW_l_msg").html(allmesHtml);
           // document.getElementById("chatW_l_msg").scrollTop = document.getElementById("chatW_l_msg").scrollHeight;  
        }
        
    });
        setTimeout(receivemsg, 10000);
};

var startOnlineTalk = function () {
   
    Hittj(77);
    opentalk();
    GetNotReadMsg();
    writeContactCookie();
    GetMycontacts();
    defaultSend();
    receivemsg();
};
var opentalk = function() {
    $("#chatW_rb").addClass("btnOnlineTalkUp").removeClass("btnOnlineTalk");
    $("#chatW").show();
    $("#chatW_l").show();
    $("#chatW_rt").show();
};



function defaultSend() {
    content = "我正在关注您的楼盘 -" + lpname;
    sendmsg();
}


var sendBtn = function() {
    content = $("#chatW_l_text").val();
    $("#chatW_l_text").val("");
    sendmsg();
};
$(document).keyup(function (event) {
    if (event.keyCode == 13 && $("#chatW_l_text").val() != null && $("#chatW_l_text").val() != "") {
        sendBtn();
    }
});

doLoginCheck = function() {
    $.ajax({
        type: "get",
        async: false,
        dataType: "jsonp",
        jsonp: "callback",
        url: "http://api.xmhouse.com/Uc/GetLogin",
        success: function(data) {
            if (data != null && data != '') {
                var s = eval(data);
                if (s.IsLogin) {
                    senduid = s.UserID;
                    username = encodeURIComponent(s.UserName);
                } else {
                    if ($.cookie("userExisted") == "1") {
                        username = $.cookie("notlogionName");
                        userExisted = $.cookie("userExisted"); 
                    }  
                }
                GetNotReadMsg(); 
            }

        }
    });
    GetMycontacts();
};

var GetMycontacts = function () {
    
    var contactHtml = "";
    var currentlpname = "", currentreceivename = "";
    var currentreceiveuid = 0;
    if ($.cookie("chatcookie") != null && $.cookie("chatcookie") != "" && $.cookie("chatcookie") != undefined) {
        cookieArr = $.cookie("chatcookie").split(";");
        for (var i = 0; i < cookieArr.length; i++) {
            currentlpname = cookieArr[i].split('|')[3];
            currentreceivename = cookieArr[i].split('|')[1];
            currentreceiveuid = cookieArr[i].split('|')[0];
            if (currentlpname != "" && currentlpname != null && currentlpname != undefined && currentreceiveuid > 0 && currentlpname != null && currentlpname != "") {
                contactHtml += " <dd onclick=\"changelptalk(this)\" lpname=\"" + currentlpname + "\"  kfsname=\"" + currentreceivename + "\"  kfsuid=\"" + currentreceiveuid + "\"        class=\"" + (currentreceiveuid == receiveuid ? "borderGray current" : "") + "\"  title=\"" + currentreceivename + "\"><span  id=\"kfsname_" + currentreceiveuid + "\" class=\"floatl iconZaiXian jiezi\"  >" + currentreceivename + "</span></dd>";
            }

        }
        $("#chatW_rt_contact").html(contactHtml);
        
        if (cookieArr.length > 0) {
            $("#chatW_rb_num1").html(cookieArr.length - 1);
            $("#chatW_rb_num2").html(cookieArr.length - 1);

        } else {
            $("#chatW_rb_num1").html("0");
            $("#chatW_rb_num2").html("0");

        }
    }
};

var writeContactCookie = function() {
    var chatcookie;
    var haschat = false;
    if ($.cookie("chatcookie") != null && $.cookie("chatcookie") != "" && $.cookie("chatcookie") != undefined) {
        cookieArr = $.cookie("chatcookie").split(";");
        for (var i = 0; i < cookieArr.length; i++) {
            if (cookieArr[i] != null && cookieArr[i] != "" && cookieArr[i] != undefined&&cookieArr[i].indexOf('|') > 0) {
                if (cookieArr[i].split('|')[0] == receiveuid) {
                    haschat = true;
                }
            }
        }
        if (haschat == false) {
            if (receiveuid > 0) {
                chatcookie = (receiveuid + "|" + receivename + "|" + talktype + "|" + lpname + ";");
                $.cookie("chatcookie", $.cookie("chatcookie") + chatcookie);
            }
        }
    } else {
        if (receiveuid > 0) {
            chatcookie = (receiveuid + "|" + receivename + "|" + talktype + "|" + lpname + ";");
            $.cookie("chatcookie",  chatcookie);
        }
    }

};

var FoldTalkBox = function (obj) {
    if ($(obj).hasClass("btnOnlineTalk")) {
        $("#chatW_l").show();
        $("#chatW_rt").show();
        $("#chatW_rt_contact").find(".current").addClass("borderGray").siblings().removeClass("borderGray");
        
    } else if ($(obj).hasClass("btnOnlineTalkUp")) {
        $("#chatW_l").hide();
        $("#chatW_rt").hide();
    }
    $(obj).toggleClass("btnOnlineTalk").toggleClass("btnOnlineTalkUp");
   
   
};

function UpdateTitle(str1, str2, interval) {
    if (handlerTitle != null) return null;
    handlerTitle = setInterval(function () {
        document.title = document.title == str2 ? str1 : str2;
    }, interval);
}

function GetNotReadMsg() {
    var contactKfs ;
    $.getJSON("ajaxs/GetNotReadMsg.ashx?callback=?", { receiveuid: senduid, username: username }, function (data) {
        if (data != null && data.length > 0) {
            $.each(data, function(i, item) {
                contactKfs = $("#kfsname_" + item.Senduid);
                if (item.Senduid!=receiveuid)
                   contactKfs.attr("data-status", 1);
                //shake(contactKfs, contactKfs.parent("dd").attr("kfsname"), "", 500);
                if (i == data.length - 1) {
                   
                    UpdateTitle("【 新 消 息: " + item.AllCount + " 条 】", item.LpName, 1000);
                    $("#chatW_newAlert").show();
                    $("#chatW_min_num").html(item.AllCount);
                }
            });  
        } else {
            clearShake();
            $("#chatW_newAlert").hide();
            $(".kfsmescount").hide();
        }
    });
    shake();
    setTimeout(GetNotReadMsg,10000);
}


var shakFunction = function () {
    var arr = $("#chatW_rt_contact span[data-status='1']");
    for (var i = 0; i < arr.length ; i++) {
        if ($(arr[i]).css("display") == "none") {
            $(arr[i]).show();
        } else {
            $(arr[i]).hide();
        }
    }

   
};

function changelptalk(obj) {
    $(obj).children("span").attr("data-status", 0).show();
    $("#chatW_l").show();
    receiveuid = $(obj).attr("kfsuid");
    receivename = $(obj).attr("kfsname");
    lpname = $(obj).attr("lpname");
    $(obj).addClass("borderGray").siblings("dd").removeClass("borderGray");
    if (lpname != null && lpname != "" && lpname != undefined)
        $("#chatW_L_DX").html(receivename + "-" + lpname);
    else {
        $("#chatW_L_DX").html(receivename);
    }
    content = "";
    changeread();
    clearShake();

}

var clearShake = function() {
    clearInterval(handlerTitle);
    handlerTitle = null;
    document.title = lpname + "（newhouse.xmhouse.com）";
    
    
};

var shake = function () {
    if (handlerMsgv2 != null) return;
    handlerMsgv2 = setInterval(shakFunction, 500);
};

var changeread = function() {
    var allmesHtml = "";
    $.getJSON("http://m.xmhouse.com/ajax/xf/AddOnlineTalk.ashx?callback=?", { sendusername: encodeURIComponent(username), receiveuid: receiveuid, senduid: senduid, status: "changeread", talktype: talktype }, function(data) {
        if (data != null) {
            var datalist = eval(data);
            $.each(datalist, function(i, item) {
                if (parseInt(item.TalkType) == 0) {
                    allmesHtml += " <dl class=\"dialogue\"><dt class=\"me\">" + (talktype == item.TalkType ? "我" : receivename) + " - " + item.AddDate + "</dt><dd>";
                    allmesHtml += "<font color=\"red\">" + item.Content + "</font></dd></dl>";
                } else if (parseInt(item.TalkType) == 1) {
                    allmesHtml += "<dl class=\"dialogue\"><dt class=\"chatother\">" + receivename + " - " + item.AddDate + "</dt><dd>" + item.Content + "</dd></dl>";
                }
                if (i == datalist.length - 1 && senduid == 0) {
                    $.cookie("notlogionName", datalist[0].SendUserName);
                    $.cookie("userExisted", "1");
                    username = datalist[0].SendUserName;
                    userExisted = 1;
                }
                if (senduid > 0) {
                    $.cookie("notlogionName", "");
                    $.cookie("userExisted", "");
                }
            });
            $("#chatW_l_msg").html(allmesHtml);
            document.getElementById("chatW_l_msg").scrollTop = document.getElementById("chatW_l_msg").scrollHeight;
        }

    });
};

var history = function () {
    if (document.getElementById("chatW_l_msg").scrollHeight <= 254) {
        var hishtml = "<dl class=\"dialogue\"><dd>-----无历史会话，当前会话如下-----</dd></dl>";
        $("#chatW_l_msg").html(hishtml+$("#chatW_l_msg").html());
    }
    document.getElementById("chatW_l_msg").scrollTop =0;
};