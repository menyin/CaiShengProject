<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{$title}</title>
    <meta name="description" content="{$description}" />
    <meta name="keywords" content="{$keywords}" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/global.js?v=125" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/flash.js" type="text/javascript"></script>
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/selector.css" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/message.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/stzp.style.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150529" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ajaxloading.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.qrcode.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.jquery.min.js"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>

    <script type="text/javascript">
        $(function () {
            GetCartInfo();
        });
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
    <script>
        function ClickBuy() {
            var ids = [];
            $("tr[id^=cartTr]").find(":checkbox:checked").each(function () {
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
                    location.href='/person/login.html?_url=/ke/cart.html';
                    return;
                }
                alert(data.msg);
            });
        }
    </script>
</head>
<body style="background:#F4F4F4 !important;text-align:left !important;">

<script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.plugins.js" type="text/javascript"></script>
<script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/CommonLibs.js" type="text/javascript"></script>
<script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/tip.js" type="text/javascript"></script>

    <!--{template ke/top}-->

    <div class="buy_box">
        <div class="list_title"><span style="background: #d70b17;"></span>购物车</div>
        <div class="clear"></div>
        <table class="cart_list" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <th class="w_1"></th>
                    <th class="t1" style="width: 50px;"></th>
                    <th style="width: 380px; text-align: left;">课程名称</th>
                    <th style="width: 94px;">有效期</th>
                    <th style="width: 201px;">价格</th>
                    <th style="width: 96px;">操作</th>
                    <th class="w_2"></th>
                </tr>
                <!--{if $keList}-->
                <!--{loop $keList $val}-->
                <tr id="cartTr{$val['courseId']}">
                    <td class="w_1"></td>
                    <td class="t1">
                        <input name="ctl00$ContentPlaceHolder1$repCourse$ctl00$chkCourse" type="checkbox" id="ctl00_ContentPlaceHolder1_repCourse_ctl00_chkCourse" onclick="GetCartInfo()" value="{$val['courseId']}" />
                    </td>
                    <td class="t2">
                        <img id="ctl00_ContentPlaceHolder1_repCourse_ctl00_imgCoursePic" src="{$val['pic']}" style="border-width:0px;width:120px;height:100px;" />
                        <div>
                            <a target="_blank" href="/ke/detail.html?Id={$val['courseId']}">
                                <span class="name">{$val['title']}</span>
                            </a>
                            <span class="s1">{$categoryRows[$val['courseCatId']]['catName']}</span>
                        </div>
                    </td>
                    <td>90天</td>
                    <td class="t3">
                        <div class="Price clearfix">
                            <div class='CurrentPrice l'>￥{$val['price']}</div>
                        </div>
                    </td>
                    <td class="t5">
                        <!--{if !$val['_isFavor']}-->
                        <a id="ctl00_ContentPlaceHolder1_repCourse_ctl00_aFavor" title="收藏" onclick="FavorCourse(this,{$val['courseId']},1)">移入收藏<br>
                        </a>
                        <!--{/if}-->
                        <a title="删除" onclick="DelCartCourse({$val['courseId']})">删除</a></td>
                    <td class="w_2"></td>
                </tr>
                <!--{/loop}-->

                <!--{else}-->
                <tr>
                    <td colspan="7">
                        <div class="ErrorTips">
                            <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/5_240_240.png" class="Img"><br>
                            哦欧~空空如也...<br>
                            <a target="_blank" href="/ke/category.html" class="BlueBtn">去学习，充充电</a>
                        </div>
                    </td>
                </tr>
                <!--{/if}-->
            </tbody>
        </table>

        <div id="map_1" class="clear"></div>

        <div class="cart_fix_nav">
            <div class="left_btn">
                <input type="checkbox" onclick="checkFormAll(this.checked)" id="checkAll" />
                <label for="checkAll" style="margin-right: 15px;">全选</label>
                <a onclick="DelSelectCartCourse()">删除所选</a>
                <a onclick="FavorSelectCartCourse(this)">收藏所选</a>
                <a onclick="ClearCourseCart()">清空购物车</a>
                <strong>购物车<span id="cartCount">1</span>件</strong>
            </div>
            <div class="right_btn">
                <a id="ctl00_ContentPlaceHolder1_lbtnCreateOrder" class="sub_btn" href="javascript:ClickBuy()">去结算<span></span></a>
                <div class="end_price">实付：<span>￥0</span></div>
                <div class="offers">
                    <strong class="s6">总计<span class="s5">￥0</span></strong>
                </div>
            </div>
        </div>
        <div class="clear"></div>
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

</body>
</html>
