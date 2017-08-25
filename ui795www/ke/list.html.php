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
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150529" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/selector.css" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/message.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/stzp.style.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.min.css" rel="stylesheet" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ajaxloading.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.qrcode.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.jquery.min.js"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var cate = getQueryString("Id");
            if (cate == "")
                cate = "0";
            $("#pCate li[data=" + cate + "]").addClass("Selected");

            $(".ParamList li").click(function () {
                $(this).addClass("Selected").siblings().removeClass("Selected");
                SearchCourse();
            });
        });

        function getKey(event) {
            if (event.which == 13) {
                event.keyCode = 9;
                event.returnValue = false;
                SearchCourse();
            }
        }

        function SearchCourse() {
            var pKeyword = $("#ctl00_ContentPlaceHolder1_txtKeywrod").val();
            var pCate = $("#pCate li.Selected").attr("data");
            window.location.href = "list.html?Id=" + pCate + "&key=" + pKeyword;
        }
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
</head>
<body style="background:#F4F4F4 !important;text-align:left !important;">


<script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.plugins.js" type="text/javascript"></script>
<script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/CommonLibs.js" type="text/javascript"></script>
<script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/tip.js" type="text/javascript"></script>

        <!--{template ke/top}-->


    <div class="classroom clearfix" style="margin-top: 20px;">
        <div style="padding: 20px 0 10px;">
            <div class="ParamList">
                <div class="Title">
                    关键字：
                </div>
                <input name="ctl00$ContentPlaceHolder1$txtKeywrod" type="text" id="ctl00_ContentPlaceHolder1_txtKeywrod" class="Input" onkeydown="return getKey(event)" value="{$_GET['key']}"/>
                <a class="SearchBtn" onclick="SearchCourse();">搜索</a>
            </div>
            <div class="ParamList">
                <div class="Title">
                    分类：
                </div>
                <ul class="clearfix" id="pCate">
                    <li data="0">全部</li>
                    <!--{loop $categoryRows $val}-->
                    <li data="{$val['catId']}">{$val['catName']}</li>
                    <!--{/loop}-->
                </ul>
            </div>
        </div>

        <!--{if $keRows['list']}-->
        <ul class="content clearfix">
            <!--{loop $keRows['list'] $val}-->
                <li>
                    <a target="_blank" href="detail.html?Id={$val['courseId']}" title="{$val['title']}">
                        <img id="ctl00_ContentPlaceHolder1_repCourse_ctl00_imgPic" src="{$val['pic']}" style="border-width:0px;" />
                        <dd>{$val['title']}</dd>
                        <dt class="clearfix">
                            <div class='CurrentPrice l'>￥{$val['price']}</div></dt>
                    </a>
                </li>
            <!--{/loop}-->
        </ul>
        <div style="margin-top: 20px;">
            <!--{if $keRows['count']>0}-->
            <div id="ctl00_ContentPlaceHolder1_AspNetPager1" class="paginator" CenterCurrentPageButton="true" style="text-align:right;">
                {$showpage}
            </div>
            <!--{/if}-->
        </div>
        <!--{else}-->
        <div id="ctl00_ContentPlaceHolder1_divEmpty" class="ErrorTips" style="display:;">
            <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/5_240_240.png" class="Img" /><br />
            很抱歉，没有找到相关的课程
        </div>
        <!--{/if}-->
    </div>

<!--{template footer}-->
<div class="DivRightButton">
    <div class="GoToTop" title="回到顶部"></div>
</div>

<div id="ctl00_footer1_panMyNews">

    <script type="text/javascript">
        //百度分享
        window._bd_share_config = {
            common: {
                bdText: '',
                bdDesc: '',
                bdPic: '',
                bdMini: "1",
                bdMiniList: ["tsina", "weixin", "sqq", "qzone"],
                bdStyle: "0",
                bdSize: "16",
                bdPopupOffsetLeft: "-78"
            },
            share: [{
                "tag": ''
            }]
        };
        with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];

    </script>

</div>
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
                <a target="_blank" href="/ke/Cart.html" class="GoToCart">去 结 算</a>
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
