<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的课程订单 - 597人才网</title>

    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/global.js?v=125" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ajaxloading.js" type="text/javascript"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/jwmanage.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150529" />
    <style type="text/css">
    .SecMenu {position: absolute;text-align: right;top: -70px;height: 60px;line-height: 60px;padding-right: 20px;right: 0;}
    .SecMenu a {text-decoration: none;margin: 0 5px;}
    .SecMenu a:hover {color: #d70b17;}
        .OriginalPrice {
            text-decoration: line-through !important;
            font-size: 12px;
            color: #999;
            margin: 6px 0 0 10px;
            display: inline-block;
        }

        .CurrentPrice {
            font-size: 16px;
            color: #d70b17;
            font-weight: bold;
            vertical-align: middle;
            display: inline-block;
            margin-top: -4px;
            *margin-top: 2px;
            text-decoration: none !important;
        }

        .OrderDetail {
            display: block;
            width: 800px;
            height: 250px;
            background-color: #fff;
            border: 1px solid #ccc;
            z-index: 1;
        }

            .OrderDetail:before, .OrderDetail:after {
                border: solid transparent;
                content: ' ';
                height: 0;
                width: 0;
                left: 100%;
                position: absolute;
            }

            .OrderDetail:before {
                top: -40px;
                left: 740px;
                border-width: 20px;
                border-bottom-color: #ccc;
            }

            .OrderDetail:after {
                top: -39px;
                left: 740px;
                border-width: 20px;
                border-bottom-color: #fff;
            }

        .OrderDetailFrame {
            width: 800px;
            height: 250px;
            margin: 0;
            padding: 0;
            border: 0;
        }

        .GoToPlay {
            color: #d70b17;
        }
    </style>
    <script type="text/javascript">
        var cur;
        function ShowDetail(orderNo, obj) {
            if (obj == cur) {
                $(".OrderDetail").hide();
                $(document).unbind();
                cur = null;
                return;
            }
            $("#detailContent").attr("src", "/ke/orderList.html?act=detail&orderNo=" + orderNo);
            $(".OrderDetail").show(200);

            var x = $(obj).offset().left;
            var y = $(obj).offset().top;
            var xOffset = 750;
            var yOffset = 35;
            $(".OrderDetail").css("position", "absolute")
                .css("left", x - xOffset + "px")
                .css("top", y + yOffset + "px");

            setTimeout(function () {
                cur = obj;
                $(document).bind('click', function (e) {
                    $('.OrderDetail').hide();
                    $(document).unbind();
                    cur = null;
                });
            }, 400);
        }
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />

</head>
<body style="background: #F4F4F4 !important;">

    <!--{template ke/top}-->
    <div style="height: 25px"></div>
    <div style="margin: auto; width: 1000px;">
        <div id="rightmenu">

            <div class="caption">
                <div class="l">
                    <em></em>
                    <label>我的订单</label>
                    <span class="counts"></span>
                </div>
                <div class="clear"></div>
            </div>
            <div style="position: relative;">
               <div class="SecMenu">
                    <a href="/ke/myCourse.html">我的课程</a> | 
                    <a href="/ke/myFavor.html">我的收藏</a>
                </div>
            </div>

            <div class="innerbodywrapper" style="margin-bottom: 10px">
                <table class="DataTable" border="0" cellspacing="0" cellpadding="3">
                    <tr>
                        <td style="width: 20px;"></td>
                        <td class="menu">订单编号
                        </td>
                        <td class="menu" style="text-align: center;">课程数
                        </td>
                        <td class="menu" style="text-align: center;">金额
                        </td>
                        <td class="menu" style="text-align: center;">状态
                        </td>
                        <td class="menu" style="text-align: center;">创建时间
                        </td>
                        <td class="menu" style="text-align: center;">操作
                        </td>
                    </tr>
                    <!--{loop $orderRows['list'] $val}-->
                    <tr>
                        <td class="indextr{$val['_tr']}"></td>
                        <td class="indextr{$val['_tr']}">
                            {$val['orderNo']}
                        </td>
                        <td class="indextr{$val['_tr']}" style="text-align: center;">{$val['keCount']}</td>
                        <td class="indextr{$val['_tr']}" style="text-align: center;">
                            <a class='CurrentPrice'>￥{$val['money']}</a>
                        </td>
                        <td class="indextr{$val['_tr']}" style="text-align: center;">
                            {$orderStatus[$val['status']]}
                        </td>
                        <td class="indextr{$val['_tr']}" style="text-align: center;">
                            {$val['_createTime']}
                        </td>
                        <td class="indextr{$val['_tr']}" style="text-align: center;">
                            <a onclick="ShowDetail({$val['orderNo']},this)">详情</a>
                            <!--{if !$val['status']}-->
                            |
                            <a href="/ke/pay.html?orderNo={$val['orderNo']}">继续支付</a>
                            <!--{/if}-->
                        </td>
                    </tr>
                    <!--{/loop}-->
                </table>
                <!--{if $orderRows['count']>0}-->
                <div style="margin-top: 20px;">
                    <div id="ctl00_ContentPlaceHolder1_AspNetPager1" class="paginator" CenterCurrentPageButton="true" style="text-align:right;">
                        {$showpage}
                    </div>
                </div>
                <!--{/if}-->
                <div class="OrderDetail" style="display: none">
                    <iframe id="detailContent" class="OrderDetailFrame" src="#" frameborder="0"></iframe>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
    <div style="height: 25px"></div>
    <!--{template footer}-->

</body>
</html>
