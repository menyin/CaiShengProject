<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{$title}</title>
    <meta name="description" content="{$description}" />
    <meta name="keywords" content="{$keywords}" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/selector.css" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/message.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/stzp.style.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/global.js?v=125" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/flash.js" type="text/javascript"></script>

    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ajaxloading.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.qrcode.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.jquery.min.js"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.plugins.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/CommonLibs.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/tip.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: 5000,
                loop: false,
                pagination: '.swiper-pagination',
                paginationClickable: true
            });
        });
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
    <style type="text/css">
        .ParamList {line-height: 50px;height: 50px;padding-left: 80px;margin-bottom: 10px;}
        .ParamList .Title {width: 80px;text-align: right;left: 0;top: 0;color: #2182CF;font-size: 14px;}
        .ParamList .Input {height: 30px;border: 1px solid #ccc;line-height: 30px;padding: 0 10px;width: 120px;margin-left: 15px;}
        .ParamList .SearchBtn {background: #d70b17;height: 32px;line-height: 32px;text-align: center;color: #fff;width: 100px;cursor: pointer;display: inline-block;margin-left: 20px;font-size: 14px;}

        /*top*/
        .m-indextopnav .topnav {z-index: 1;height: 51px;background-color: #fff;border-bottom: none;}
        .f-cb, .f-cbli li {zoom: 1;}
        .u-indexnavcatebtn {position: absolute;top: -1px;left: -1px;width: 224px;height: 52px;background-color: #31a030;overflow: hidden;}
        .u-indexnavcatebtn .cbtn {display: block;line-height: 52px;text-align: center;font-size: 17px;color: #fff;}
        .u-indexnavcatebtn .cbtn .ic {margin: 19px 10px 0 20px;width: 16px;height: 14px;background-position: 0 0;}
        .f-fl {float: left;}
        .u-indexnavcatebtn .cbtn .qb {color: #fff;line-height: 54px;font-size: 17px;}
        .f-cb:after, .f-cbli li:after {display: block;clear: both;visibility: hidden;height: 0;overflow: hidden;content: ".";}
        .u-indexnavcatedialog {left: -1px;top: 51px;width: 224px;}
        .u-indexnavcatedialog .cateleft {z-index: 2;top: 0;left: 0;width: 224px;height: 400px;}
        .u-indexnavcatedialog .cateleft .catebg {top: 0;left: 0;width: 100%;height: 100%;background-color: #000;opacity: 0.7;filter: alpha(opacity=60);}
        .u-indexnavcatedialog .cateleft .items {top: 0;left: 0;height: 400px;width: 100%;overflow: hidden;}
        .u-indexnavcatedialog .cateleft .item {height: 67px;padding: 0 13px;position: relative; text-align: center;}
        .u-indexnavcatedialog .cateleft .item .curbg {display: none;position: absolute;z-index: 1;top: -5px;left: 0;width: 225px;height: 67px;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;background-color: #fff;}
        .u-indexnavcatedialog .cateleft .item .inn {position: relative;z-index: 2;height: 62px;padding: 0 0 0 5px;border-bottom: 1px solid rgba(255, 255, 255, 0.2);}
        .u-indexnavcatedialog .cateleft .item .inn p { overflow: hidden;height: 62px;}
        .u-indexnavcatedialog .cateleft .item .inn .first {display:block;color: #fff;font-size: 16px;line-height: 62px;}

        /*nav*/
        #m-slide-container {min-height: 400px;background-color: #eee;position: relative;top: 0;}
        .m-slide {background-color: #ddd;width: 100%;min-height: 353px;height: 400px;overflow: hidden;}
        .m-index .g-flow { min-width: 1205px;}
        .g-doc, .g-wrap, .g-flow, .g-superflow, .g-all {width: 1100px;margin: 0 auto;text-align: left;}
        .f-pr { position: relative;}
        .m-slide .m-slide-wrap {height: 401px;}
        .m-slide .slide {display: inline-block;overflow: hidden;margin: 0 auto;position: relative;left: 0;width: 1205px;}
        .m-slide .slide img {height: 400px;width: 1100px;}
        .m-slide .lbtn {   left: 244px;   background-position: 0 0;}
        .m-slide .rbtn { left: 920px; background-position: -66px 0;}
        .m-slide .lbtn, .m-slide .rbtn { position: absolute; height: 70px; width: 40px; top: 50%; margin-top: -35px; background: url(http://cdn.{ROOT_DOMAIN}/www/images/ke/indexSlideArrow.png?73b48eff3e426a240f7196ecb65f5392) no-repeat 0 0; z-index: 100;}
        .m-slide .u-slidepg { bottom: 30px;}
        .u-slidepg { position: absolute;width: 100%; margin:0 auto;}
        li { display: list-item;text-align: -webkit-match-parent;}
        ul#j-pbox {position: absolute;width: 100%;text-align: center;display: inline-block;zoom: 1;}
        .m-slide .u-slidepg ul { vertical-align: bottom; height: 16px; text-align: center;margin:0 auto;}
        .f-ib {display: inline-block;zoom: 1;}
        .m-slide .u-slidepg ul li {position: relative;width: 8px;height: 16px;background: none;}
        .u-slidepg ul li {width: 12px;height: 6px;background: rgba(0, 0, 0, 0.3);margin-right: 8px;display: inline-block;*display: inline;text-indent: 100px;overflow: hidden;cursor: pointer;}

        .m-slide .u-slidepg ul li:after { background-color: rgba(255, 255, 255, 0.7);content: '.';text-indent: -99px;position: absolute;bottom: 0;left: 0;width: 8px;height: 8px;}

        .u-slidepg ul li.js-selected {cursor: default;background: #ffffff;}

        .f-cb:after, .f-cbli li:after {display: block;clear: both;visibility: hidden;height: 0;overflow: hidden;content: ".";}
        .m-slide .sideNav {z-index: 2;width: 225px;height: 340px;right: 0;top: 29px;background: #fff;box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2);}
        .f-pa {position: absolute;}
        @media screen and (min-width: 1210px)
        .g-hide {display: block;}
        .m-slide .sideNav .sidelink {display: inline-block;}
        .m-slide .sideNav .sideimg {width: 225px;height: 120px;}
        .m-slide .sideNav .cnt {line-height: 30px;font-size: 14px;padding: 8px 20px;}
        .f-f0 {font-family: "Arial","Hiragino Sans GB", \5fae\8f6f\96c5\9ed1, "Helvetica", "sans-serif";}
        .m-slide .sideNav .cnt a {display: block;line-height: 30px;width: 188px;color: #666;}
        .m-slide .sideNav .bottomcnt {height: 49px;font-size: 0;border-top: 1px solid #ddd;}

        .m-slide .sideNav .bottomcnt .live {border-right: 1px solid #ddd;width: 112px;}
        .m-slide .sideNav .bottomcnt .live, .m-slide .sideNav .bottomcnt .practise {background-color: #f8f8f8;text-align: center;line-height: 50px;font-size: 14px;}
        a.f-fcgreen {color: #39a030;}
        .f-ib {display: inline-block;}
        .m-slide .sideNav .bottomcnt .ilive {background-position: -8px -36px;}
        .m-slide .sideNav .bottomcnt .ipractise {background-position: -40px -34px;}

        .m-slide .sideNav .bottomcnt .ilive, .m-slide .sideNav .bottomcnt .ipractise {width: 27px;height: 20px;vertical-align: middle;}
        .m-slide .sideNav2 .ilive, .m-slide .sideNav2 .ipractise, .m-slide .sideNav .bottomcnt .ilive, .m-slide .sideNav .bottomcnt .ipractise, .m-micro .m-micro-wrap .cntwrap .larr, .m-micro .m-micro-wrap .cntwrap .rarr {background: url(http://cdn.{ROOT_DOMAIN}/www/images/ke/indexsprite.png?6f701c172c82e2948dfb2989f9391d17) no-repeat 9999px 9999px;}
        .m-slide .sideNav .bottomcnt .practise {width: 112px;}
        .u-navcatedialog .cateleft .item.cur .inn .first{color:#333;}
        .m-slide .rbtn {left: 920px; background-position: -66px 0;}

        .u-indexnavcatedialog .cateleft .item.cur .inn {border-bottom: none;}
        .u-indexnavcatedialog .cateleft .item.cur .inn .first {color: #333;}
        .u-indexnavcatedialog .cateleft .item.cur .inn .second {color: #666;}
        .u-indexnavcatedialog .cateleft .item.cur .curbg {display: block;}
    </style>
</head>
<body style="background:#F4F4F4 !important;text-align:left !important;">
    <!--{template ke/top}-->

    <div class="m-indextopwrap f-pr" style="z-index:88;">
        <div class="jrbg f-pa"></div>
        <div class="m-indextopnav" id="j-indextopnav" style="background: #fff;">
            <div class="g-flow">
                <div class="topnav f-pr f-cb" id="j-navshowoffset">
                    <div class="u-indexnavcatebtn" id="j-nav-indexcatebtn">
                        <a href="/ke/list.html" target="_blank" class="cbtn f-cb" data-index="全部课程">
                            全部课程
                        </a>
                    </div>
                    <div class="u-indexnavcatedialog f-pa" id="j-nav-indexcatedialog">
                        <div class="f-fl cateleft f-pa j-cateleft" id="auto-id-1502769123121">
                            <div class="catebg f-pa"></div>
                            <div class="items f-pa">
                                <!--{loop $_categoryRows $val}-->
                                <div class="item j-item" id="auto-id-1502769123115">
                                    <div class="curbg"></div>
                                    <div class="inn">
                                        <p>
                                            <a target="_blank" href="/ke/list.html?Id={$val['catId']}" data-name="{$val['catName']}" class="f-f0 first">{$val['catName']}</a>
                                        </p>
                                    </div>
                                </div>
                                <!--{/loop}-->
                            </div>
                        </div>

                        <div class="cateright f-pa f-dn f-cb j-cateright" id="auto-id-1502769123122">
                            <a class="close f-pa j-close" id="auto-id-1502769123114"></a>

                        </div>
                    </div>

                    <div class="mainnav f-cb j-navFind" id="auto-id-1502769123172">
                        <a data-index="微专业" class="nitem f-f0" href="/smartSpec/intro.htm" target="_self" hidefocus="true">微专业</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="m-slide-container">
        <div>
            <div class="m-slide f-pr" id="j-box" style="background-color: #15084d;">
                <div class="g-flow f-pr m-slide-wrap" id="j-slidewrap">
                    <a class="slide" target="_blank" id="j-side" href="/ke/detail.html?Id=412" data-index="5" data-name="全栈新媒体运营微专业" data-color="#15084d">
                        <img id="auto-id-1502764760179" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/412.png" style="opacity: 1; transition-property: opacity; transition-duration: 1s; transition-timing-function: ease-in-out;">
                    </a>
                    <!-- <a class="slide" target="_blank" id="j-side" href="#" data-index="6" data-name="锐普PPT的超神课"  data-color="#ffe342">
                        <img style="opacity: 1; transition-property: opacity; transition-duration: 1s; transition-timing-function: ease-in-out;" id="auto-id-1502777727576" src="//edu-image.nosdn.127.net/29894cdf-c277-46bb-8862-3aac54257051.jpg?imageView&amp;thumbnail=960y440&amp;quality=100"></a> -->

                    <a class="lbtn" id="j-lbtn" style="display: none;"></a>
                    <a class="rbtn" id="j-rbtn" style="display: none;"></a>
                    <div class="u-slidepg">
                        <ul class="f-cb f-pr f-ib pbox" id="j-pbox">
                            <li id="auto-id-1502764759639" class="js-selected">1</li>
                        </ul>
                    </div>

                </div>
                <div class="lbevel f-pa j-lbevel" id="j-lbevel"></div>
                <div class="rbevel f-pa j-rbevel" id="j-rbevel"></div>
            </div>
        </div>
    </div>


    <div class="CenterContent" style="margin: 30px auto 0;">


        <div style="margin: 10px 0px;;overflow: hidden; background:#fff; display:none;">
            <ul class="Category clearfix">
                <!--{loop $categoryRows $val}-->
                <li id="ctl00_ContentPlaceHolder1_repCateLevel2_ctl00_liCate" class="<!--{if $cateId==$val['catId']}-->Selected<!--{/if}-->">
                    <a href="category.html?Id={$val['catId']}">{$val['catName']}</a>
                </li>
                <!--{/loop}-->
                <li><a href="/ke/list.html">查看更多>></a></li>
            </ul>
        </div>

        <div class="classroom">
            <!-- <div style="padding: 20px 24px 15px 20px; height: 30px; line-height: 30px;">
                亲，想提升自己哪方面能力，赶快搜搜课程学习~
                <div class="r SearchBox">
                    <input name="key" class="key" type="text" placeholder="请输入课程关键字" />
                    <input type="submit" name="btnSearch" value="搜索" onclick="SearchCourse()"/>
                </div>
            </div> -->
            <ul class="content clearfix">

                <!--{loop $keRows['list'] $val}-->
                <li>
                    <a target="_blank" href="detail.html?Id={$val['courseId']}" title="{$val['title']}">
                        <img id="ctl00_ContentPlaceHolder1_repCourse_ctl00_imgCoursePic" src="{$val['pic']}" style="border-width:0px;" />
                        <dd>{$val['title']}</dd>
                        <dt class="clearfix">
                            <div class='CurrentPrice l'>￥{$val['price']}</div></dt>
                    </a>
                </li>
                <!--{/loop}-->

            </ul>
            <!--{if $keRows['count']>0}-->
            <div style="margin-top: 20px;">
                <div id="ctl00_ContentPlaceHolder1_AspNetPager1" class="paginator" CenterCurrentPageButton="true" style="text-align:right;">
                {$showpage}
                </div>
            </div>
            <!--{/if}-->
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
                    <a target="_blank" href="/Ke/Cart.aspx" class="GoToCart">去 结 算</a>
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

                $('.j-item').mouseover(function(){
                    var idx = $(this).index();
                    $('.j-item').eq(idx).addClass('cur').siblings().removeClass('cur');
                });
                $('.j-item').mouseout(function(){
                    $('.j-item').removeClass('cur');
                });
                //轮播
                var bannerTimer;
                var num = 0;
                var len = $('#j-slidewrap').find('.slide').length;
                $('#j-slidewrap').hover(function() {
                    clearInterval(bannerTimer);
                }, function() {
                    bannerTimer = setInterval(function() {
                        if (num < len - 1) {
                            num++;
                        } else {
                            num = 0;
                        }
                        $('#j-slidewrap a').eq(num).show().siblings().hide();
                        $(".u-slidepg").show();
                        var color = $('#j-slidewrap a').eq(num).attr('data-color');
                    $('#j-box').attr("style", 'background-color:'+color+';')
                        $('#j-pbox li').eq(num).addClass('js-selected').siblings().removeClass('js-selected');
                    }, 3000);
                }).trigger('mouseout');

                $('#j-slidewrap .slide').mouseover(function() {
                    $('#j-rbtn').show();
                    $('#j-lbtn').show();
                });

                $('#j-rbtn').click(function(){
                    num++;
                    num > len -1 && (num = 0);
                    showImg(num);
                });

                $('#j-lbtn').click(function(){
                    num--;
                    num < 0 && (num = len -1);
                    showImg(num);
                });

                function showImg(idx){
                    clearInterval(bannerTimer);
                    $('#j-slidewrap a').eq(num).show().siblings().hide();
                    $(".u-slidepg").show();
                    var color = $('#j-slidewrap a').eq(idx).attr('data-color');
                    $('#j-box').attr("style", 'background-color:'+color+';')
                    $('#j-pbox li').eq(num).addClass('js-selected').siblings().removeClass('js-selected');
                }

                $('#j-pbox').find('li').click(function() {
                    var idx = $(this).index();
                    $('#j-slidewrap a').eq(idx).show().siblings().hide();
                    $(".u-slidepg").show();
                    var color = $('#j-slidewrap a').eq(idx).attr('data-color');
                    $('#j-box').attr("style", 'background-color:'+color+';')
                    $('#j-pbox li').eq(idx).addClass('js-selected').siblings().removeClass('js-selected');
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

            //搜索
            function SearchCourse(){
                var key = $('.key').val();
                // alert(key);
                location.href="/ke/list.html?key="+key;
            }
        </script>


    </div>

</body>
</html>
