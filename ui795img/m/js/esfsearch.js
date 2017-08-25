var k, w = $(window);
var jw = "", layout = "", area = "", keyword = "", z = 0;
var pageindex;
var tradetype;
window.onscroll = function () {
    var a = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
    var scrollh = $(document).height();
    var bua = navigator.userAgent.toLowerCase();
    if (bua.indexOf('iphone') != -1 || bua.indexOf('ios') != -1) {
        scrollh = scrollh - 140;
    } else {
        scrollh = scrollh - 80;
    }
    if (k != false && ($(document).scrollTop() + w.height()) >= scrollh) {
        //GetHouseInfo();
    }
    if (a < 100) {
        $("#filterF").removeClass("lhf");
        $("#jjrnum").hide();
    } else {
        $("#filterF").addClass("lhf");
        $("#jjrnum").show();
    }
    if (a < 180) {
        $("#jjrnum").removeClass("jjr_fix");
    } else {
        $("#jjrnum").addClass("jjr_fix");
    }
};
$(function () {
    tradetype = $("#tradetype").val();

    jw = $("#hdjw").val();
    layout = $("#hdlayout").val();
    area = $("#hdarea").val();
    keyword = $("#txtsesrch").val();
    z = $("#hdzoomid").val();
    $("#area").on("click", function () {
        $("#list_pop_box_body").show();

        if ($("#list_pop_box_body").css("display") == "block") {
            $("#list_filter").addClass("es");
            $("#list-area-div").addClass("e2s");
        }
        //$("#price").hide();
    });
    $("#price").on("click", function () {
        $("#list_pop_box_body").show();
        switch (parseInt(tradetype)) {
            case 4:
                if ($("#list_pop_box_body").css("display") == "block") {
                    $("#list_filter").addClass("es");
                    $("#list-price-div").addClass("e2s");
                }
                break;
            case 1:
                if ($("#list_pop_box_body").css("display") == "block") {
                    $("#list_filter").addClass("es");
                    $("#list-zfprice-div").addClass("e2s");
                }
                break;
            default:
                if ($("#list_pop_box_body").css("display") == "block") {
                    $("#list_filter").addClass("es");
                    $("#list-price-div").addClass("e2s");
                }
                break;
        }


    });
    $("#zptype").on("click", function () {
        $("#list_pop_box_body").show();

        if ($("#list_pop_box_body").css("display") == "block") {
            $("#list_filter").addClass("es");
            $("#list-housetype-div").addClass("e2s");
        }
    });
    $("#drop_list").on("click", function () {
        if ($("#list_pop_box_body").css("display") == "block") {
            $("#list_filter").removeClass("es");
            $("#list_pop_box_body").animate({ opacity: "hide" }, 500);
            $("#list-area-div").removeClass("e2s");
            $("#list-price-div").removeClass("e2s");
            $("#list-housetype-div").removeClass("e2s");
        }
    });
    $("#list_filter_closed").on("click", function () {
        if ($("#list_pop_box_body").css("display") == "block") {
            $("#list_filter").removeClass("es");
            $("#list_pop_box_body").animate({ opacity: "hide" }, 500);
            $("#list-area-div").removeClass("e2s");
            $("#list-price-div").removeClass("e2s");
            $("#list-housetype-div").removeClass("e2s");
        }
    });
});

