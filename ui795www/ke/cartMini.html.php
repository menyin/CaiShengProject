<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.min.css" rel="stylesheet" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>
    <style type="text/css">
        html, body {
            background: #fff;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $('.MiniCourse').perfectScrollbar({});
            GetMiniCartInfo();
        })
    </script>
</head>
<body>

<script type="text/javascript">

function ClickBuy() {
    var ids = [];
    $("div[id^=cartDiv]").find(":checkbox:checked").each(function () {
       ids.push($(this).val());
    });
    var param = {keIds:ids};
    $.post("/ke/pay.html?act=order", param, function (data) {
        var data = JSON.parse(data);
        if(data.status==1){
            window.parent.location.href='/ke/pay.html?orderNo='+data.orderNo;
            return;
        }
        if(data.status==0){
            alert(data.msg);
            window.parent.location.href='/person/login.html?_url=/ke/cart.html';
            return;
        }
        alert(data.msg);
    });
}
</script>

        <div class="MiniPanel">
            <div class="MiniTitle">
                <span class="Left">购物车</span>
                <a target="_blank" href="/ke/cart.html" class="Right">查看全部
                </a>
            </div>
            <div class="MiniCourse" style="height: 270px;">
                <!--{if $keList}-->
                <!--{loop $keList $val}-->
                <div class="Item1" id="cartDiv{$val['courseId']}">
                    <input name="keIds[]" type="checkbox" id="repCourse_ctl00_chkCourse" onclick="GetMiniCartInfo()" value="{$val['courseId']}">
                    <img id="repCourse_ctl00_imgCover" class="Cover" src="{$val['pic']}" style="border-width:0px;">
                    <a target="_blank" href="detail.html?Id={$val['courseId']}" class="CourseName">
                        {$val['title']}</a>
                    <div class="Price">
                        ￥{$val['price']}
                    </div>
                    <div class="Del" onclick="DelMiniCartCourse({$val['courseId']})" title="删除">
                        <img src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Del.png" alt="">
                    </div>
                </div>
                <!--{/loop}-->
                <!--{else}-->
                <div class="MinErrorTips">
                    <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/5_240_240.png" style="width:80px;height:80px;"/><br />
                    哦欧~空空如也...<br />
                    去选几堂充充电！
                </div>
                <!--{/if}--> 
            </div>
            <div class="MiniCartBottom">
                <span style="margin-right: 10px;">
                    <input type="checkbox" onclick="checkFormAllMini(this.checked)" id="checkAll" />
                    <label for="checkAll">全选</label>
                </span>
                已选<span class="Count">0</span>堂
                <span class="AllPay">￥0</span>
                <a id="lbtnCreateOrder" class="Buy" href="javascript:ClickBuy()">结算</a>
            </div>
        </div>
</body>
</html>
