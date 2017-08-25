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
        })
    </script>
</head>
<body>
        <div class="MiniPanel">
            <div class="MiniTitle">
                <span class="Left">我看过的</span>
                <a class="Right" onclick="ClearHistory()">清空全部
                </a>
            </div>
            <div class="MiniCourse">
                <!--{if $keList}-->
                <!--{loop $keList $val}-->
                <div class="Item" id="historyDiv{$val['courseId']}">
                    <a target="_blank" href="detail.html?Id={$val['courseId']}">
                        <img id="repCourse_ctl00_imgCover" class="Cover" src="{$val['pic']}" style="border-width:0px;" />
                        <div class="CourseName">
                            {$val['title']}
                        </div>
                        <div class="ExpireDate">
                            {$val['instrName']}
                        </div>
                    </a>
                    <div class="Del" onclick="DelMiniHistory({$val['courseId']})" title="删除">
                        <img src="http://cdn.{ROOT_DOMAIN}/www/images/ke/Del.png" alt="" />
                    </div>
                </div>
                <!--{/loop}-->
                <!--{else}-->
                <div class="MinErrorTips">
                    <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/5_240_240.png" style="width:80px;height:80px;"><br>
                    您还没有收藏过课程
                </div>
                <!--{/if}-->

            </div>
        </div>
</body>
</html>
