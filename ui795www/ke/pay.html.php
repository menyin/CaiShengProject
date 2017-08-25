<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>订单支付</title>
    <meta name="description" content="{$description}" />
    <meta name="keywords" content="{$keywords}" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/global.js?v=125" type="text/javascript"></script>
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=20150529" />
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>

    <script type="text/javascript">
        $(function () {
            GetCartInfo();
        });
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
    <script type="text/javascript">
        function PayTypeClick(e) {
            $(e).addClass("Selected").siblings().removeClass("Selected");
            var type = $(e).attr("data-type");
            if (type == "1") {
                $(".sub_price .gotopay").css({ "display": "inline-block" });
            }
            // else {
            //     $(".sub_price .gotopay").css({ "display": "none" });
            // }
        }

        window.Checking = 0;

        function GetOrderState() {

            var param = {
                orderNo: "{$_GET['orderNo']}"
            };
            $.post("/api/web/weixin_notify_ke.api?act=wxpaycheck", param, function (data) {
                var data = JSON.parse(data);
                if( (data)!=null && typeof(data.status)!="undefined" ){
                    if(data.status==1){
                        window.location.href = '/ke/orderList.html';
                        clearInterval(window.checkState);
                        return;
                    }
                }
            });
        }

        //去支付
        function gotopay(){
            var type = $(".Selected").attr("data-type");
            var orderNo = "{$orderNo}";
            if(type==1){
                // window.open("/ke/pay.html?act=pay&payType="+type+"&orderNo="+orderNo);
                location.href = "/ke/pay.html?act=pay&payType="+type+"&orderNo="+orderNo;
                return;
            }
            $.post("/ke/pay.html?act=pay", {payType:type, orderNo:orderNo}, function (data) {
                // var data = JSON.parse(data);
                // if(data.msg){
                //     alert(data.msg);
                //     return;
                // }

                $("#wxPayQr").attr("src", "http://xm.597.cs/api/wxpay/qrcode.api?data="+data);
                // $(".WeChatPayQr").show();
                $('#_dialog0').show();
                $('#_mask').show();
                window.checkState = setInterval(function () {
                    GetOrderState();
                }, 2000);

            });

        }

        function closeWxPay(){
            $('#_dialog0').hide();
            $('#_mask').hide();
            clearInterval(window.checkState);
        }
    </script>

</head>
<body style="background:#F4F4F4 !important;text-align:left !important;">

    <!--{template ke/top}-->

    <div class="buy_box">
        <div class="list_title">
            <span></span>订单号：{$orderNo}
        </div>
        <div class="clear"></div>
        <table class="cart_list" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <th class="w_1"></th>
                    <th style="width: 690px; text-align: left; padding-left: 20px;">课程名称</th>
                    <th style="width: 120px;">有效期</th>
                    <th style="width: 180px;">价格</th>
                    <th class="w_2"></th>
                </tr>
                <!--{loop $keRows $val}-->
                        <tr>
                            <td class="w_1"></td>
                            <td class="t2">
                                <a target="_blank" href="/ke/detail.html?Id={$val['courseId']}">
                                    <span class="name">{$val['title']}</span>
                                </a>
                            </td>
                            <td>90天</td>
                            <td class="t3">
                                <div class="Price clearfix">
                                    <div class="CurrentPrice l">￥{$val['price']}</div>
                                </div>
                            </td>
                            <td class="w_2"></td>
                        </tr>
                <!--{/loop}-->
            </tbody>
        </table>
        <div class="sub_price" style="margin-bottom: 50px;">
            <ul>
                <li>
                    <!-- <span class="s6">原价<del>￥{$moneyCount}</del></span> -->
                    实付<span class="s1">￥<span id="spanNeedPay">{$orderRow['money']}</span></span><br>
                    <span class="s4">温馨提示：重复购买自动延长观看期限</span>
                </li>
            </ul>
            <div class="PayType clearfix">
                <div class="Title">支付方式</div>
                <ul>
                    <li id="payType" data-type="1" onclick="PayTypeClick(this)" class="Selected">
                        <div class="Checked"></div>
                        <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/AliPay.png">
                        支付宝
                    </li>
                    <li id="payType" data-type="2" onclick="PayTypeClick(this)" class="">
                        <div class="Checked"></div>
                        <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/WeChat.png">
                        微信支付
                        <div class="WeChatPayQr" style="display:none;">
                            <div class="Arrow"></div>
                            <div class="Arrow1"></div>
                            <img id="WeChatPayQr"></img>
                            微信"扫一扫"支付
                        </div>
                    </li>
                </ul>
            </div>
            <dl>
                <a href="/ke/orderList.html">返回我的订单</a>
                <a href="javascript:gotopay();" class="settlement gotopay" style="display: inline-block;">确认付款</a>
            </dl>
        </div>
    </div>


<!--{template footer}-->

<div id="ctl00_footer1_panCourseButton">

    <div class="CourseButton">
        <div class="Item Cart" data-url="/ke/cartMini.html" onclick="ShowMiniBox(this)">
            <div class="Tips">购物车</div>
            <div class="ArrowRight"></div>
        </div>
        <a href="/ke/myCourse.html">
            <div class="Item Book" data-url="/ke/myCourseMini.html">
                <div class="Tips">我的课程</div>
                <div class="ArrowRight"></div>
            </div>
        </a>
        <a href="/ke/myFavor.html">
            <div class="Item Star" data-url="/ke/myFavorMini.html?act=list" >
                <div class="Tips">我的收藏</div>
                <div class="ArrowRight"></div>
            </div>
        </a>
        <div class="Item History" data-url="/ke/myHistoryMini.html" onclick="ShowMiniBox(this)">
            <div class="Tips">我看过的</div>
            <div class="ArrowRight"></div>
        </div>
        <div class="MiniBoxBg">
            <div class="MiniBox">
                <div class="Arrow"></div>
                <div class="Arrow1"></div>
                <iframe id="miniBoxContent" src="" frameborder="0"></iframe>
            </div>
        </div>
        <div class="AddSuccess" id="addCartSuccess">
            <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/closeicon.gif" class="Close" onclick="$('#addCartSuccess').hide()" />
            <div class="Text">
                <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Tick.png" class="Tick" />
                成功加入购物车！
                <a target="_blank" href="/ke/cart.html" class="GoToCart">去 结 算</a>
            </div>
            <div style="padding-top: 10px;">
                从事同岗位的都学了
            </div>
            <ul>
            </ul>
            <div class="Arrow"></div>
            <div class="Arrow1"></div>
        </div>
        <div class="AddSuccess" id="addFavorSuccess">
            <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/closeicon.gif" class="Close" onclick="$('#addFavorSuccess').hide()" />
            <div class="Text">
                <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Tick.png" class="Tick" />
                成功加入收藏夹！
            </div>
            <div style="padding-top: 10px;">
                看看大家都收藏了啥
            </div>
            <ul>
            </ul>
            <div class="Arrow" style="margin-top: 10px;"></div>
            <div class="Arrow1" style="margin-top: 11px;"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $(".CourseButton").hover(function () { }, function () {
                $(".CourseButton .MiniBoxBg").hide();
            });
        });

        function ShowMiniBox(obj) {
            $(".CourseButton .AddCartSuccess").hide();
            $(".CourseButton .MiniBoxBg").css({ "top": $(obj).position().top - 165 }).show();
            var iframe = window.top.document.getElementById("miniBoxContent").contentWindow;
            if (iframe.location != 'about:blank') {
                if (IsIE()) {
                    iframe.document.body.removeNode(true);
                } else {
                    iframe.document.body.remove();
                }
            }
            $(".CourseButton #miniBoxContent").attr("src", $(obj).attr("data-url"));
        }
    </script>

</div>

<!--微信支付弹出-->
<style>
.dialog  .dialogHead {
    position: relative;
    z-index: 1;
    line-height: 41px;
    height: 41px;
    font-size: 16px;
    padding-left: 15px;
    color: rgb(68, 68, 68);
    padding-right: 27px;
    font-family: 微软雅黑, SimHei;
    background: #F5F5F5;
}
.dialog .dialogHead a.dialogClose {
    background: url(http://cdn.597.com/img/common/dialogclose.jpg) no-repeat 0 0;
    position: absolute;
    top: 13px;
    _top: 0;
    right: 16px;
    _right: 30px;
    cursor: pointer;
    line-height: 0;
    font-size: 0;
    width: 16px;
    height: 16px;
    _margin-top: -7px;
    noOutline: expression(this.onFocus=this.blur());
}
.dialogMask {
    background: #000;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    filter: alpha(opacity=20);
    -moz-opacity: 0.2;
    -khtml-opacity: 0.2;
    opacity: 0.2;
}
</style>
<div id="_mask" class="dialogMask" style="z-index: 10000;display:none;"></div>
<div class="_dialog dialog" id="_dialog0" style="width:300px;position: absolute; z-index: 10001; left: 40%; top: 244px;display:none;">
    <div class="dialogHead _dialogHeader"><span class="_title">微信支付</span>
        <a href="javascript:closeWxPay(0)" class="dialogClose _dialogClose" title="关闭">×</a>
    </div>
    <div class="dgBox cngIdBox" style="text-align: center;">
        <div class="formMod">
            <!-- <p><span>厦门才盛人才服务有限公司（内测）</span></p> -->
            <p>用微信扫一扫支付<span>{$orderRow['money']}</span>元</p>
            <img id="wxPayQr" alt="微信扫码支付" src="">
        </div>
        <input type="hidden" name="wxid" id="wxid" value="">
    </div>
<div>

</body>
</html>
