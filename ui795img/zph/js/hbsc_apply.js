//本脚本依赖：jquery
//http://img18.hbjob.cn/js/hbsc.js

//投递
$.get("/plugin/GetPlugin.ashx?url=http://www.hbsc.cn/plugin/Apply.aspx", null, function (res) {
    $("body").append(res);
    BindPersonApply();
}, "text");
//绑定投递弹层
function BindPersonApply() {
    //选择简历
    new PopupLayer({ trigger: "#ShowSelectResume", popupBlk: "#hbsc_job_apply_select_resume", closeBtn: "#hbsc_job_apply_select_close", useOverlay: true, useFx: true }).doEffects = GetdoEffectsApply;
    //一键投递
    new PopupLayer({ trigger: "#ShowOneSend", popupBlk: "#hbsc_OneSend", closeBtn: "#hbsc_OneSend_Close", useOverlay: true, useFx: true }).doEffects = GetdoEffectsApply;
    $("#popup_okk").click(function () {
        $("#hbsc_OneSend_Close").click();
    });
    //工作描述
    new PopupLayer({ trigger: "#OpenDescriptionLayer", popupBlk: "#DescriptionLayer", closeBtn: "#CloseDescriptionLayer", useOverlay: true, useFx: true }).doEffects = GetdoEffectsApply;
}
function GetdoEffectsApply(way) {
    if (way == "open") {
        this.popupLayer.show().css({ left: ($(document).width() - this.popupLayer.width()) / 2,
            top: (document.documentElement.clientHeight - this.popupLayer.height()) / 2 + $(document).scrollTop()
        });
    } else { this.popupLayer.hide(); }
}
var flag_oks = false;
var jids = "";
var urls = window.location.href;
var sts = "";

Namespace.register("hbsc.person");
hbsc.person.Job = {};
hbsc.person.Job.apply = function (jobId, resumeId, ur, ty, c) {
    $("#GoDescriptionLayer").unbind("click");
    $("#GoDescriptionLayer").bind("click", function () {
        $("#CloseDescriptionLayer").click();
        hbsc.person.Job.applyresult(jobId, resumeId, ur, ty, c);
        return false;
    });
    $.post("/Ashx/IsJobDescription.ashx", { "resumeId": resumeId, "_": Math.random() }, function (res) {
        if (res.status == "0") {
            $("#DescriptionUrl").attr("href", "http://person.hbsc.cn/resumeedit/WorkExperience.aspx?pid=" + resumeId + "&eid=" + res.eid);
            $("#OpenDescriptionLayer").click();
        } else if (res.status == "-1") {
            $("#DescriptionUrl").attr("href", "http://person.hbsc.cn/resumeedit/WorkExperience.aspx?pid=" + resumeId);
            $("#OpenDescriptionLayer").click();
        } else {
            hbsc.person.Job.applyresult(jobId, resumeId, ur, ty, c);
        }
    }, "json");
}
hbsc.person.Job.applyresult = function (jobId, resumeId, ur, ty, c) {
    var url = "/ashx/applyoption.ashx";
    $.ajax({
        url: url,
        type: "POST",
        data: { "jid": jobId, "rid": resumeId, "u": ur, "t": ty },
        cache: false,
        dataType: "json",
        beforeSend: function () {
            if (c != undefined) {
                $(c).hide().next(".wait").show();
            }
        },
        success: function (datas) {
            if (c != undefined) {
                $(c).show().next(".wait").hide();
            }
            if (flag_oks == false) {
                if (datas.msg != "投递成功") {
                    alert(datas.msg);
                } else {
                    $.ajax({
                        url: "/ashx/OneKeySend.aspx",
                        type: "POST",
                        data: { "jid": jids, "resumeid": resumeId },
                        cache: false,
                        dataType: "html",
                        beforeSend: function () {
                            if (c != undefined) {
                                $(c).hide().next(".wait").show();
                            }
                        },
                        success: function (datay) {
                            if (c != undefined) {
                                $(c).show().next(".wait").hide();
                            }
                            $("#yjtd").html(datay);
                            $("#ShowOneSend").click();
                            if ($.trim(datay).length == 0) {
                                $(".toudixgzhiwei").hide();
                            }
                            else {
                                $(".toudixgzhiwei").show()
                            }
                        },
                        error: function (datay, error) {
                            if (error == "error") {
                                if (c != undefined) {
                                    $(c).show().next(".wait").hide();
                                }
                                alert("投递失败，请稍后重试!");
                            }
                        }
                    });
                }
            } else if (flag_oks == true) {
                alert(datas.msg);
                flag_oks = false;
            }
        },
        error: function (datas, error) {
            if (error == "error") {
                if (c != undefined) {
                    $(c).show().next(".wait").hide();
                }
                alert("投递失败，请稍后重试!");
            }
        }
    });
}
hbsc.person.Job.applySubmit = function (jid, st, c) {
    sts = st;
    jids = jid;
    var url = "/ashx/selectresume.ashx";
    $.ajax({
        url: url,
        type: "GET",
        cache: false,
        dataType: "json",
        beforeSend: function () {
            if (c != undefined) {
                $(c).hide().next(".wait").show();
            }
        },
        success: function (data) {
            if (c != undefined) {
                $(c).show().next(".wait").hide();
            }
            if (parseInt(data.result) == 1) {
                var resumeId = data.data;
                hbsc.person.Job.apply(jid, resumeId, urls, sts, c);
            }
            else if (parseInt(data.result) == -1) {

                var count = $("#PersonLoginLayer").length;
                if (count==0) {
                    $.get("/plugin/GetPlugin.ashx?url=http://www.hbsc.cn/plugin/Login.aspx", null, function (res) {
                        $("body").append(res);
                        BindPersonLogin();
                        $("#OpenPersonLoginLayer").val("1").click();
                        personloginstatresumelayer("0", "0", "2");
                    }, "text");
                } else {
                    $("#OpenPersonLoginLayer").val("1").click();
                    personloginstatresumelayer("0", "0", "2");
                }
            }
            else if (parseInt(data.result) == 0) {
                alert("没有简历，或简历未通过审核。");
            }
            else {
                $("#jianli_list").html(data.data);
                $("#ShowSelectResume").click();
                $("#btn_SandResume").unbind();
                $("#btn_SandResume").click(function () {
                    var $resumechecked = $("input:[name='hbsc_job_apply_validateresume']:checked");
                    $resumechecked.each(function () {
                        hbsc.person.Job.apply(jid, $(this).val(), urls, sts, c);
                    });
                    if ($resumechecked.length > 0) {
                        $("#hbsc_job_apply_select_close").click();
                    }
                    else {
                        alert("请选择简历！");
                    }
                });
            }
        },
        error: function (data, error) {
            if (error == "error") {
                if (c != undefined) {
                    $(c).show().next(".wait").hide();
                }
                alert("投递失败，请稍后重试!");
            }
        }
    });
}
/////////////////////收藏home///////////////////////////
/////////////////////标记已投递职位home///////////////////////////

hbsc.person.Job.JobHistory = function (c) {
    var url = "/searchjob/ashx/GetPersonSendRecord.ashx";
    $.ajax({
        url: url,
        type: "GET",
        cache: false,
        dataType: "json",
        beforeSend: function () {
            if (c != undefined) {
                $(c).hide().next(".wait").show();
            }
        },
        success: function (data) {
            if (c != undefined) {
                $(c).show().next(".wait").hide();
            }
            if (data.result == 1) {
                $("#bjzw").attr("checked", true);                           
                $("#personjobid").val(data.data);
                for (var i = 0; i < $("#personjobid").val().split(",").length; i++) {
                    $("input[rel=\"" + $("#personjobid").val().split(",")[i] + "\"]").parent("span").parent("p").addClass("grey");
                    $("input[rel=\"" + $("#personjobid").val().split(",")[i] + "\"]").parent("span").parent("div").children("span").addClass("grey");
                    //$(".goTop span").addClass("grey");
                    $("input[rel=\"" + $("#personjobid").val().split(",")[i] + "\"]").parent("td").parent("tr").addClass("grey");
                }
                $("#bjtd").html("\"标记已投递职位\"功能已启用，30天内已投递的职位文字全部灰色显示。");
                $(".j_layerContainer").show();
                $(".j_black").show();
            }
            else if (data.result == -1) {
                $("#bjzw").attr("checked", false);
                $("#OpenPersonLoginLayer").val("3").click();
                personloginstatresumelayer("0", "0", "2");
            } else {
                alert("系统繁忙请稍后再试");
            }
        },
        error: function (data, error) {
            if (error == "error") {
                if (c != undefined) {
                    $(c).show().next(".wait").hide();
                }
                alert("系统繁忙请稍后再试");
            }
        }
    });

}

/////////////////////标记已投递职位end//////////////////////////
hbsc.person.Job.Favorites = function (jid, st, c) {

    sts = st;
    jids = jid;
    var url = "/ashx/Favorites.ashx?jobid="+jids;
    $.ajax({
        url: url,
        type: "GET",
        cache: false,
        dataType: "json",
        beforeSend: function () {

        },
        success: function (data) {
            if (data.result == 1) {
                alert("收藏成功!");
                //var resumeId = data.data;
            }
            else if (data.result == -1) {
                $("#OpenPersonLoginLayer").val("2").click();
                //personloginstatresumelayer("0", "0", "2");
            }
            else if (data.result == 0) {
                jAlert("收藏失败");
            }
            else if (data.result == 3) {
                jAlert("您已收藏该职位");
            }
            else {
                //$("#jianli_list").html(data.data);
                jAlert("收藏成功,进入<a href=\"http://person.hbsc.cn/jobmanager/JobFavoritesList.aspx\">职位收藏</a>");
            }
        },
        error: function (data, error) {
            if (error == "error") {
                if (c != undefined) {
                    $(c).show().next(".wait").hide();
                }
                alert("投递失败，请稍后重试!");
            }
        }
    });

}
/////////////////////收藏end//////////////////////////
//一键投递
function OneKeySend() {
    flag_oks = true;
    $("#hbsc_OneSend_Close").click();
    var ojobid = "";
    $(".yjtd input:checkbox:checked").each(function () {
        ojobid += $(this).attr("value") + ",";
    });
    if (ojobid != "") {
        hbsc.person.Job.applySubmit(ojobid, '4');
    }
    else {
        $("#ShowOneSend").click();
        alert("请选择要投递的职位");
    }
}
//个人登陆点击统计
function personloginstatresumelayer(pid, type, urltype) {
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