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
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150529" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/flash.js" type="text/javascript"></script>
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/selector.css" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/message.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/stzp.style.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />

    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ajaxloading.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.qrcode.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <!-- <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/Swiper/swiper-3.4.0.jquery.min.js"></script> -->
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ScrollBar/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>

    <style type="text/css">
        .DivRightButton .bdsharebuttonbox {
            display: none;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $(".detailmenu li").click(function () {
                $("#classinfo,#teainfo,#evaluationinfo").removeClass("selected");
                $("#class1info,#tea1info,#evaluation1info").hide();
                $(this).addClass("selected");
                $("#" + $(this).attr("attrid")).show();
            });

            $('#videoList').perfectScrollbar({});

            AddCourseHistory(getQueryString("Id"));
        });

        function AddCart(e) {
            if (AddCartCourse(getQueryString('Id'), e)) {
                $(e).find("span").text("查看购物车");
                $(e).attr("onclick", "window.location.href='cart.html'");
            }
        }

        function ClickBuy() {
            var param = {keIds:getQueryString("Id")};
            $.post("/ke/pay.html?act=order", param, function (data) {
                var data = JSON.parse(data);
                if(data.status==1){
                    window.parent.location.href='/ke/pay.html?orderNo='+data.orderNo;
                    return;
                }
                if(data.status==0){
                    alert(data.msg);
                    location.href='/person/login.html?_url=/ke/detail.html?Id='+"{$_GET['Id']}";
                    return;
                }
                alert(data.msg);
            });
        }
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />
</head>
<body style="background:#F4F4F4 !important;text-align:left !important;">

    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.plugins.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/CommonLibs.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/tip.js" type="text/javascript"></script>

     <!--{template ke/top}-->
    <div class="detailbox">
        <div class="DetailTop clearfix">
            <div class="Left">
                <div class="Video">
                    <img id="ctl00_ContentPlaceHolder1_imgPic" src="{$keRow['pic']}" style="border-width:0px;" />
                    <div class='PlayDiv' onclick='$(".DetailTop").hide();$(".VideoBox").show();$($("#videoList li")[0]).click()'><img alt='' src='http://cdn.{ROOT_DOMAIN}/www/images/ke/Play.png' /></div>
                </div>
                <ul class="VideoOper">
                    <li data-tag="shareCourse" class="bdsharebuttonbox">
                        <a class="bds_more Share" data-cmd="more"></a>
                        <i>分享</i>
                    </li>
                    <!--{if !$isFavor}-->
                    <li>
                        <a id="ctl00_ContentPlaceHolder1_hlFavor" onclick="FavorCourse(this,{$keRow['courseId']},0)" class=""><img alt='' src='http://cdn.{ROOT_DOMAIN}/www/images/ke/Favor.png' />收藏</a>
                    </li>
                    <!--{else}-->
                    <li>
                        <a id="ctl00_ContentPlaceHolder1_hlFavor" onclick="FavorCourse(this,{$keRow['courseId']},0)" class="On"><img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Star1.png">已收藏</a>
                    </li>
                    <!--{/if}-->
                </ul>
            </div>
            <div class="Right">
                <div class="Title">
                    {$keRow['title']}
                    <ul class="Info">
                        <li>
                            {$keRow['duration']}<br />
                            课程时长
                        </li>
                        <li class="Line"></li>
                        <li><a href="#teainfo" onclick="$('#teainfo').click()">
                            {$keRow['instrName']}</a><br />
                            课程讲师
                        </li>
                        <li class="Line"></li>
                        <li>
                            {$keRow['studyNum']}<br />
                            学习人数
                        </li>
                    </ul>
                </div>
                <a id="ctl00_ContentPlaceHolder1_hlCate" class="Cate" href="/ke/list.html?Id={$cateRow['catId']}" target="_blank">{$cateRow['catName']}</a>
                <div class="Score">
                    <span class="StarBg">
                        <span class='Star' style='width: {$keRow['grade']}%;'></span>
                    </span>（{$keRow['_grade']}）
                </div>
                <div class="Summary">
                    {$keRow['summary']}
                </div>
                <div class="Price clearfix">
                    <div class='CurrentPrice l'>￥{$keRow['price']}</div>
                    <div id="ctl00_ContentPlaceHolder1_panBuy">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnBuy" value="立即购买" class="BuyNow l" onclick="ClickBuy()"/>
                        <!--{if $onCart}-->
                        <a id="ctl00_ContentPlaceHolder1_hlCart" class="Buy l" href="/ke/cart.html" target="_blank">
                            <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Cart.png" class="Cart">
                            <span>
                                查看购物车</span>
                        </a>
                        <!--{else}-->
                        <a id="ctl00_ContentPlaceHolder1_hlCart" class="Buy l" onclick="AddCart(this)">
                            <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Cart.png" class="Cart" />
                            <span>
                                加入购物车</span>
                        </a>
                        <!--{/if}-->
                        <span class="Text">有效期：90天</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="VideoBox Open">
            <div class="Main">
                <iframe id='VideoContent' class='' src='' frameborder='0' scrolling='no'></iframe>
            </div>
            <div class="List">
                <div class="Top">选集</div>
                <div id="videoList" class="Content">
                    <ul>
                        <!--{loop $keVideoRows $val}-->
                                <li id="ctl00_ContentPlaceHolder1_repVideoList_ctl00_liVideo" onclick="GetVideo(this,{$val['courseId']},{$val['videoId']},{$uid},&#39;czzp&#39;,&#39;&#39;)" data-id="5374">
                                    <a>{$val['title']}</a>
                                </li>
                        <!--{/loop}-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear" style="border-top: 1px solid #EFEFEF"></div>
        <ul class="detailmenu">
            <li class="selected" attrid="class1info" id="classinfo">课程详情</li>
            <li attrid="tea1info" id="teainfo">讲师介绍</li>
            <li attrid="evaluation1info" id="evaluationinfo" style="display: none;">累积评价</li>
        </ul>
        <ul style="padding: 20px 25px 20px 25px; font-size: 14px; line-height: 200%;" class="detailmenu1">
            <li id="class1info">
                {$keRow['content']}
            </li>
            <li id="tea1info" style="display: none; overflow: hidden">
                <div class="l" style="margin-right: 15px">
                    <img id="ctl00_ContentPlaceHolder1_imgInstr" src="{$instrRow['pic']}" style="width: 150px;height:150px;border-width:0px;" />
                </div>
                <div class="l" style="width: 800px;">
                    <div style="color: #d70b17; font-size: 16px">
                        <div class="l">
                            {$instrRow['instrName']}
                        </div>
                        <div class="l" style="border-radius: 5px; background-color: #F4F4F4; color: #666; font-size: 12px; padding: 2px 10px 2px 10px; display: inline-block; margin-left: 10px">
                            <div style="font-style: normal; background: url(http://cdn.{ROOT_DOMAIN}/www/images/ke/teaicon.gif); width: 15px; height: 16px; display: block; float: left; margin: 5px 5px 0 0"></div>
                            <div class="l">讲师认证</div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        {$instrRow['content']}
                    </div>
                </div>
                <div class="clear"></div>
                <div id="ctl00_ContentPlaceHolder1_panOtherCourse">
	
                    <div class="InstrCourseLine">
                        <div class="Title">
                            <span style="color: #d70b17">
                                {$instrRow['instrName']}</span> 的其他课程
                        </div>
                        <a id="ctl00_ContentPlaceHolder1_hlMoreCourse" class="More" href="/ke/list.html?key={$instrRow['instrName']}" target="_blank">更多>></a>
                    </div>
                    <div class="classroom">
                        <ul class="content" style="padding: 20px 0 0 0">
                            <!--{loop $instrKeRows $val}-->
                            <li>
                                <a target="_blank" href="detail.html?Id={$val['courseId']}">
                                    <img id="ctl00_ContentPlaceHolder1_repOtherCourse_ctl00_imgCoursePic" src="{$val['pic']}" style="border-width:0px;" />
                                    <dd>{$val['title']}</dd>
                                    <dt class="clearfix">
                                        <div class='CurrentPrice l'>￥{$val['price']}</div></dt>
                                </a>
                            </li>
                            <!--{/loop}-->
                        </ul>
                    </div>
                    <div class="clear"></div>
                
</div>
            </li>
            <li id="evaluation1info" style="display: none;">
                
                
<!-- AspNetPager 7.3.2  Copyright:2003-2010 Webdiyer (www.webdiyer.com) -->
<!--记录总数只有一页，AspNetPager已自动隐藏，若需在只有一页数据时显示AspNetPager，请将AlwaysShow属性值设为true！-->
<!-- AspNetPager 7.3.2  Copyright:2003-2010 Webdiyer (www.webdiyer.com) -->


            </li>
        </ul>
    </div>
    <div class="BuyCartRedCircle"></div>
    <img id="ctl00_ContentPlaceHolder1_imgPic1" class="BuyCartPic" src="http://pic.bczp.cn/uploadfiles/YunCourse/20170321/131345361568610590.jpg" style="border-width:0px;" />

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
                <iframe id="miniBoxContent" src="#" frameborder="0"></iframe>
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
            $(".CourseButton .AddSuccess").hide();
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

</form>
</body>
</html>
