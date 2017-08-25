$(function () {
    $(".topmenudiv .like").click(function () { 
        $("#divCourseFeedback").show();
    });

    $("#divCourseFeedback .Cancel,#divCourseFeedback .Close").click(function () {
        $("#divCourseFeedback").hide();
    });
}); 

function AddCartCourse(id, obj) {
    var strCartList = $.cookie("YunCourseCartList");

    var newCartList = [];

    if (strCartList != null) {
        var cartList = strCartList.split(',');

        if (cartList.length >= 20) {
            alert("购物车已满");
            return false;
        }

        for (var i = 0; i < cartList.length; i++) {
            if (cartList[i] != '' && cartList[i] != id)
                newCartList.push(cartList[i]);
        }
    }

    newCartList.push(id);

    $.cookie("YunCourseCartList", newCartList.join(','), { path: '/', expires: 365 });

    var param = {
        Id: id
    };
    // $.post("/ajax/YunCourse/GetCourse.ashx", param, function (data) { 
    //     if (data.JumpUrl.length > 0) {
    //         window.location.href = data.JumpUrl;
    //         return;
    //     }

    //     if (data.Code == 1) {
    //         return;
    //     }

    //     var html = [];
    //     for (var i = 0; i < data.Data.length; i++) {
    //         var temp = $("#CourseItem").html();
    //         var course = data.Data[i];
    //         temp = temp.replace(/{CourseId}/g, course.Id);
    //         temp = temp.replace(/{CoursePic}/g, course.Pic);
    //         temp = temp.replace(/{CourseName}/g, course.Title);
    //         html.push(temp);
    //     }

    //     $("#addCartSuccess ul").html(html.join(''));
    // });


    var startTop = $(obj).offset().top;
    var startLeft = $(obj).offset().left;

    var endTop = $(".CourseButton .Cart").offset().top + 10;
    var endLeft = $(".CourseButton .Cart").offset().left + 10;

    $(".AddSuccess").hide();
    $(".BuyCartPic").attr("style", "");
    $(".BuyCartPic").css({ left: startLeft, top: startTop }).show();
    $(".BuyCartPic").animate({ left: endLeft, top: endTop, height: 10, width: 10, opacity: 0.3 }, 500, function () {
        $(".BuyCartPic").hide();
        $("#addCartSuccess").show();
        setTimeout(function () {
            $("#addCartSuccess").hide();
        }, 8000);
    });

    return true;
}

function DelCartCourse(id) {
    var strCartList = $.cookie("YunCourseCartList");

    var newCartList = [];

    if (strCartList != null) {
        var cartList = strCartList.split(',');

        for (var i = 0; i < cartList.length; i++) {
            if (cartList[i] != '' && cartList[i] != id)
                newCartList.push(cartList[i]);
        }
    }

    $.cookie("YunCourseCartList", newCartList.join(','), { path: '/', expires: 365 });

    if (newCartList.length == 0) {
        window.location.reload();
        return true;
    }

    $("#cartTr" + id).remove();

    GetCartInfo();

    return true;
}

function ClearCourseCart() {
    $.cookie("YunCourseCartList", '', { path: '/', expires: 365 });
    window.location.reload();
}

function checkFormAll(b) {
    $("tr[id^=cartTr]").find(":checkbox:enabled").attr("checked", b);
    GetCartInfo();
}

function GetCartInfo() {
    var pay = 0;
    var price = 0;

    $("tr[id^=cartTr]").find(":checkbox:checked").each(function () {
        pay += Number($("#cartTr" + $(this).val()).find(".CurrentPrice").text().replace("￥", ""));
        if ($("#cartTr" + $(this).val()).find(".OriginalPrice").length > 0)
            price += Number($("#cartTr" + $(this).val()).find(".OriginalPrice").text().replace("￥", ""));
        else
            price += Number($("#cartTr" + $(this).val()).find(".CurrentPrice").text().replace("￥", ""));
    });

    pay = Math.floor(pay * 100) / 100;
    price = Math.floor(price * 100) / 100;

    $(".end_price span").html("￥" + pay);
    $(".s5").html("￥" + price);

    var cartCount = $("tr[id^=cartTr]").find(":checkbox:checked").length;
    if (cartCount > 0)
        $(".sub_btn").html("去结算（" + cartCount + "）");
    else
        $(".sub_btn").html("去结算");

    $("#cartCount").html($("tr[id^=cartTr]").length);
}

function DelSelectCartCourse() {
    $("tr[id^=cartTr]").find(":checkbox:checked").each(function () {
        DelCartCourse($(this).val());
    });
}

function FavorSelectCartCourse(obj) {
    $("tr[id^=cartTr]").find(":checkbox:checked").each(function (i, e) {
        if (i == $("tr[id^=cartTr]").find(":checkbox:checked").length - 1) {
            FavorCourse(obj, $(e).val(), 1);
            console.log(1);
        } else {
            FavorCourse(obj, $(e).val(), 2);
            console.log(2);
        }
    });
}

function FavorCourse(obj, id, position) {
    var param = {
        courseId: id,
        act: "addorDel"
    };
    if (position == 1 || position == 2) {
        param.act = "add";
    }
    $.post("/ke/myFavorMini.html", param, function (data) {
        var data = JSON.parse(data);
        if (data.status == 0) {
            window.location.href = '/person/login.html?_url=/ke/detail.html?Id='+id;
            return;
        }

        if (data.status < 0) {
            // alert(data.msg);
            // return;
        }

        if (position == 1) {
            $("#cartTr" + id + " .t5 a[title=收藏]").hide();
            alert("收藏成功");
        } else if (position == 2) {
            $("#cartTr" + id + " .t5 a[title=收藏]").hide();
        } else {
            if ($("#ctl00_ContentPlaceHolder1_hlFavor").length > 0) {
                if ($("#ctl00_ContentPlaceHolder1_hlFavor").hasClass("On")) {
                    $("#ctl00_ContentPlaceHolder1_hlFavor").removeClass("On");
                    $("#ctl00_ContentPlaceHolder1_hlFavor").html("<img alt='' src='http://cdn.597.com/www/images/ke/Favor.png'>收藏");
                } else {
                    $("#ctl00_ContentPlaceHolder1_hlFavor").addClass("On");
                    $("#ctl00_ContentPlaceHolder1_hlFavor").html("<img alt='' src='http://cdn.597.com/www/images/ke/Star1.png'>已收藏");

                    var param1 = {
                        Id: id
                    };
                    // $.post("/ajax/YunCourse/GetCourse.ashx", param1, function (data1) {
                    //     if (data1.JumpUrl.length > 0) {
                    //         window.location.href = data1.JumpUrl;
                    //         return;
                    //     }

                    //     if (data1.Code == 1) {
                    //         return;
                    //     }

                    //     var html = [];
                    //     for (var i = 0; i < data1.Data.length; i++) {
                    //         var temp = $("#CourseItem").html();
                    //         var course = data1.Data[i];
                    //         temp = temp.replace(/{CourseId}/g, course.Id);
                    //         temp = temp.replace(/{CoursePic}/g, course.Pic);
                    //         temp = temp.replace(/{CourseName}/g, course.Title);
                    //         html.push(temp);
                    //     }

                    //     $("#addFavorSuccess ul").html(html.join(''));
                    // });

                    var startTop = $(obj).offset().top;
                    var startLeft = $(obj).offset().left;

                    var endTop = $(".CourseButton .Star").offset().top + 10;
                    var endLeft = $(".CourseButton .Star").offset().left + 10;

                    $(".AddSuccess").hide();
                    $(".BuyCartPic").attr("style", "");
                    $(".BuyCartPic").css({ left: startLeft, top: startTop }).show();
                    $(".BuyCartPic").animate({ left: endLeft, top: endTop, height: 10, width: 10, opacity: 0.3 }, 500, function () {
                        $(".BuyCartPic").hide();
                        $("#addFavorSuccess").show();
                        setTimeout(function () {
                            $("#addFavorSuccess").hide();
                        }, 8000);
                    });
                }
            }
        }
    });
}

function GetVideo(e, courseId, videoId, userId, siteCode, sign) {
    $(e).addClass("Selected").siblings().removeClass("Selected");
    $("#VideoContent").attr("src", "http://www.597.com/ke/video.html?courseId=" + courseId + "&vid=" + videoId + "&uid=" + userId + "&SiteCode=" + siteCode + "&Sign=" + sign);
}

function Search() {
    var keyword = $("#ctl00_keyword").val();

    window.location.href = "/ke/list.html?key=" + keyword;
}

//删除收藏
function DelFavor(id) {
    var param = {
        id: id,
        act: "del"
    };
    $.post("/ke/myFavorMini.html", param, function (data) {
        window.location.reload();
    });
}

function GetMiniCartInfo() {
    var price = 0;

    $("div[id^=cartDiv]").find(":checkbox:checked").each(function () {
        price += Number($("#cartDiv" + $(this).val()).find(".Price").text().replace("￥", ""));
    });

    price = Math.floor(price * 100) / 100;

    $(".MiniCartBottom .AllPay").html("￥" + price);

    var cartCount = $("div[id^=cartDiv]").find(":checkbox:checked").length;
    $(".MiniCartBottom .Count").html(cartCount);
}

function checkFormAllMini(b) {
    $("div[id^=cartDiv]").find(":checkbox:enabled").attr("checked", b);
    GetMiniCartInfo();
}

function DelMiniCartCourse(id) {
    var strCartList = $.cookie("YunCourseCartList");

    var newCartList = [];

    if (strCartList != null) {
        var cartList = strCartList.split(',');

        for (var i = 0; i < cartList.length; i++) {
            if (cartList[i] != '' && cartList[i] != id)
                newCartList.push(cartList[i]);
        }
    }

    $.cookie("YunCourseCartList", newCartList.join(','), { path: '/', expires: 365 });

    if (newCartList.length == 0) {
        window.location.reload();
        return true;
    }

    $("#cartDiv" + id).remove();

    GetMiniCartInfo();

    return true;
}

function AddCourseHistory(id) {
    var newHistoryList = [];

    newHistoryList.push(id);

    var strHistoryList = $.cookie("YunCourseHistory");

    if (strHistoryList != null) {
        var historyList = strHistoryList.split(',');

        for (var i = 0; i < historyList.length; i++) {
            if (newHistoryList.length >= 20)
                break;
            if (historyList[i] != '' && historyList[i] != id) {
                newHistoryList.push(historyList[i]);
            }
        }
    }

    $.cookie("YunCourseHistory", newHistoryList.join(','), { path: '/', expires: 365 });

    return true;
}

//删除课程浏览记录
function DelMiniHistory(id) {
    var strHistoryList = $.cookie("YunCourseHistory");
    var newHistoryList = [];

    if (strHistoryList != null) {
        var historyList = strHistoryList.split(',');

        for (var i = 0; i < historyList.length; i++) {
            if (historyList[i] != '' && historyList[i] != id)
                newHistoryList.push(historyList[i]);
        }
    }

    $.cookie("YunCourseHistory", newHistoryList.join(','), { path: '/', expires: 365 });

    if (newHistoryList.length == 0) {
        window.location.reload();
        return true;
    }

    $("#historyDiv" + id).remove();

    return true;
}

function ClearHistory() {
    $.cookie("YunCourseHistory", '', { path: '/', expires: 365 });
    window.location.reload();
}

function PlayNextVideo() {
    $(".VideoBox .List li.Selected").next().click();
}