<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的课程 - 597人才网</title>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/CommonLibs.js" type="text/javascript"></script>
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
    .DataTable td.indextr1, .DataTable td.indextr2 {padding: 15px 0;height: auto;line-height: 24px;}
    .DataTable td.indextr1 a, .DataTable td.indextr2 a {margin-right: 10px;}
    .DataTable a {cursor: pointer;}
    .DataTable a:hover {color: #d70b17;text-decoration: none;}
    .ParamList {line-height: 30px;padding-left: 80px;position: relative;margin-bottom: 10px;}
    .ParamList .Title {position: absolute;width: 80px;text-align: right;left: 0;top: 0;color: #2182CF;font-size: 14px;}
    .ParamList ul {margin: 0;padding: 0;list-style: none;}
    .ParamList ul li {float: left;margin: 0 0 10px 15px;padding: 0 10px;min-width: 50px;font-size: 14px;text-align: center;border-radius: 3px;cursor: pointer;height: 30px;line-height: 30px;}
    .ParamList ul li:hover, .ParamList ul li.Selected {background: #d70b17;color: #fff;}
    .CourseListBox {border-top: 1px dashed #ccc;margin: 20px;}
    .CourseListBox .DataTable, .CourseListBox .InfoTable {width: 100%;}
    .EvaluationBox {border: 1px solid #ccc;position: fixed;top: 50%;left: 50%;height: 400px;width: 500px;margin: -200px 0 0 -250px;z-index: 1;background: #fff;display: none;}
    .EvaluationBox .Title {background: #2182cc;height: 40px;line-height: 40px;font-size: 14px;color: #fff;padding: 0 20px;}
    .EvaluationBox .Content {padding: 0 20px 20px;}
    .EvaluationBox .Content .CourseName {height: 60px;line-height: 60px;border-bottom: 1px solid #ccc;margin-bottom: 20px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
    .EvaluationBox .Content .Evaluation {border: 1px solid #ccc;height: 140px;padding: 10px;}
    .EvaluationBox .Content .Evaluation textarea {border: none;width: 100%;height: 100%;}
    .EvaluationBox .Content .Score {margin-top: 15px;}
    .EvaluationBox .Content .Score span {color: #666;font-size: 14px;}
    .EvaluationBox .Content .Star {margin: -4px 0 0 0;height: 0;height: 21px;width: 105px;display: inline-block;vertical-align: middle;}
    .EvaluationBox .Content .Star li {background: url(/images/ke/Star.png);width: 21px;height: 21px;float: left;cursor: pointer;}
    .EvaluationBox .Content .Star li.On {background: url(/images/ke/Star1.png);width: 21px;height: 21px;}
    .EvaluationBox .Content .Btn {height: 40px;border: 1px solid #d70b17;line-height: 40px;width: 210px;background: #d70b17;color: #fff;text-align: center;cursor: pointer;}
    .EvaluationBox .Content .Btn.Close {border: 1px solid #ccc;background: #eee;color: #ccc;height: 38px;line-height: 38px;width: 208px;}
    </style>
    <script type="text/javascript">
        $(function () {
            var cate = getQueryString("Cate");
            //var date = getQueryString("Date");
            var state = getQueryString("state");

            if (cate == "")
                cate = "0";
            $("#pCate li[data=" + cate + "]").addClass("Selected");

            if (state == "")
                state = "0";
            $("#pState li[data=" + state + "]").addClass("Selected");

            $(".ParamList li").click(function () {
                $(this).addClass("Selected").siblings().removeClass("Selected");
                var pCate = $("#pCate li.Selected").attr("data");
                //var pDate = $("#pDate li.Selected").attr("data");
                var pState = $("#pState li.Selected").attr("data");
                window.location.href = "/ke/myCourse.html?Cate=" + pCate + "&State=" + pState;
            });

            $(".EvaluationBox .Star li").click(function () {
                $("#ctl00_ContentPlaceHolder1_hiddenScore").val($(this).index());
                InitScore();
            });

            $(".EvaluationBox .Star li").hover(function () {
                var index = $(this).index();
                $(".EvaluationBox .Star li").removeClass("On");
                for (var i = 0; i <= index ; i++) {
                    $($(".EvaluationBox .Star li")[i]).addClass("On");
                }
                $(".EvaluationBox .Score span").html("（" + (index + 1) * 2 + "）");
            }, function () {
                InitScore();
            });

            $(".EvaluationBox .Close").click(function () {
                $(".EvaluationBox").hide();
            });
        });

        function ShowEvaluationBox(id, title, type) {
            $(".EvaluationBox .CourseName").html(title);
            $("#ctl00_ContentPlaceHolder1_hiddenId").val(id);
            $(".EvaluationBox").show();
            $(".EvaluationBox .Title").html(type == 0 ? "发表评论" : "发表追评");
            InitScore();
        }

        function InitScore() {
            var index = Number($("#ctl00_ContentPlaceHolder1_hiddenScore").val());
            $(".EvaluationBox .Star li").removeClass("On");
            for (var i = 0; i <= index ; i++) {
                $($(".EvaluationBox .Star li")[i]).addClass("On");
            }
            $(".EvaluationBox .Score span").html("（" + (index + 1) * 2 + "）");
        }
    </script>
    <link rel="shortcut icon" href="http://www.597.com/favicon.ico" />

</head>
<body style="background: #F4F4F4 !important;">
<!--{template ke/top}-->
        <div style="height: 25px"></div>
        <div style="margin: auto; width: 1000px;">

            <div class="" id="rightmenu">
                <div class="caption">
                    <div class="l">
                        <em></em>
                        <label>我的课程</label>
                        <span class="counts"></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div style="position: relative;">
                    <div class="SecMenu">
                        <a href="/ke/myFavor.html">我的收藏</a> | 
                        <a href="/ke/orderList.html">我的订单</a>
                    </div>
                </div>

                <div class="innerbodywrapper" style="margin-bottom: 10px">
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
                    <div class="ParamList" style="display:none;">
                        <div class="Title">
                            状态：
                        </div>
                        <ul class="clearfix" id="pState">
                            <li data="0">全部</li>
                            <li data="1">未学课程</li>
                            <li data="2">已学课程</li>
                        </ul>
                    </div>
                    <div class="CourseListBox">
                        <table class="DataTable" border="0" cellspacing="0" cellpadding="3" style="text-align: left;">
                            <tr>
                                <td class="menu" style="width: 5px;"></td>
                                <td class="menu" style="width: 140px;">课程名称</td>
                                <td class="menu" style="width: 180px;"></td>
                                <td class="menu">所属分类</td>
                                <td class="menu">开始时间</td>
                                <td class="menu">到期时间</td>
                                <td class="menu">状态</td>
                                <!-- <td class="menu">操作</td> -->
                            </tr>
                            <!--{if $keRows['list']}-->
                                <!--{loop $keRows['list'] $val}-->
                                <tr>
                                    <td style="width: 5px;"></td>
                                    <td style="width: 140px; padding: 10px 0;">
                                        <img style="width:120px;height:100px;" class="CoursePic" src="{$val['pic']}" style="border-width:0px;" />
                                    </td>
                                    <td><a href="/ke/detail.html?Id={$val['courseId']}">{$val['title']}</a></td>
                                    <td>{$_cateRow[$val['courseCatId']]['catName']}</td>
                                    <td>{$val['_startTime']}</td>
                                    <td>{$val['_endTime']}</td>
                                    <td>{$status[$val['status']]}                                    </td>
                                </tr>
                                <!--{/loop}-->
                                <tr>
                                    <td colspan="7" align="right">
                                        <div class="paginator">
                                           {$showpage}
                                        </div>
                                    </td>
                                </tr>
                            <!--{else}-->
                            <tr>
                                <td colspan="7">
                                    <div class="ErrorTips">
                                        <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/5_240_240.png" class="Img" /><br />
                                        咦，您还没有学习课程<br />
                                        <a target="_blank" href="/ke/category.html" class="BlueBtn">去学习，充充电</a>
                                    </div>
                                </td>
                            </tr>
                            <!--{/if}-->
                            </if>
                        </table>
                        <div class="InfoTable">
                            <div class="shuoming">说 明 </div>
                            <div class="content" style="text-align: left;">
                                购买后没能立即学习？<br />
                                答：购买后没能立即学习，可能是由于服务器繁忙原因生效延迟，请不用担心，等待10分钟后重新刷新查看；如果还不能学习，请您联系招聘网客服人员。<br />
                                温馨提示：工作日包括周一至周六 8:30 - 18:00，不包括周日、国家法定节假日。
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
        </div>
        <div style="height: 25px"></div>
<!--{template footer}-->

</body>
</html>
