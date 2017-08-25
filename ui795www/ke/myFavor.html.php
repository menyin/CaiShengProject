<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的课程收藏 - 597人才网</title>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.cookie.js" type="text/javascript"></script>
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/global.css?v=125" rel="stylesheet" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/jwmanage.css" rel="stylesheet" type="text/css" />
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/ajaxloading.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/CommonLibs.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://cdn.{ROOT_DOMAIN}/www/js/ke/v3/Ke.js?v=125"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/search_main.css?v=1" />
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150529" />
    <link href="http://cdn.{ROOT_DOMAIN}/www/css/ke/v3/ke.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    .SecMenu {position: absolute;text-align: right;top: -70px;height: 60px;line-height: 60px;padding-right: 20px;right: 0;}
    .SecMenu a {text-decoration: none;margin: 0 5px;}
    .SecMenu a:hover {color: #d70b17;}
    .DataTable tr {border-bottom: 1px dashed #ccc;}
    .DataTable .CoursePic {width: 160px;}
    .DataTable td { padding: 10px 0;}
    .DataTable a {text-decoration: none;}
    .DataTable a:hover {color: #d70b17;}
    .BtnDel{    border: 0;
    height: 31px;
    cursor: pointer;
    vertical-align: middle;
    background-color: #d70b17;
    color: #fff;
}
    </style>
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
                        <label>我的收藏</label>
                        <span class="counts"></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div style="position: relative;">
                    <div class="SecMenu">
                        <a href="/ke/myCourse.html">我的课程</a> | 
                        <a href="/ke/orderList.html">我的订单</a>
                    </div>
                </div>
                <!--{if $favorRows['list']}-->
                <div class="innerbodywrapper" style="margin-bottom: 10px; padding: 20px;">
                    <table class="DataTable">
                        <!--{loop $favorRows['list'] $val}-->
                        <tr id="favor{$val['id']}">
                            <td style="width: 20px;">
                                <span>
                                    <input id="ctl00_ContentPlaceHolder1_repCourse_ctl00_chk" type="checkbox" name="ctl00$ContentPlaceHolder1$repCourse$ctl00$chk" value="{$val['id']}"/>
                                </span>
                            </td>
                            <td style="width: 170px;">
                                <img id="ctl00_ContentPlaceHolder1_repCourse_ctl00_imgPic" class="CoursePic" src="{$val['pic']}" style="border-width:0px;" />
                            </td>
                            <td>{$val['title']}<br />
                                {$val['catName']}
                            </td>
                            <td>{$val['instrName']} | 有效期：90天
                            </td>
                            <td>
                            </td>
                            <td>
                                <a href="/ke/detail.html?Id={$val['courseId']}">详情</a>
                                |
                                <a href="javascript:DelFavor({$val['id']})">删除</a>
                            </td>
                        </tr>
                        <!--{/loop}-->
                    </table>

                    <div class="clearfix" style="margin: 20px auto; width: 864px;">
                        <div class="l" style="width: 200px;">
                            <input type="checkbox" id="chkAll" onclick="CommSelect('chk', this)" />
                            全选
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnDelSelect" value="删除选中记录" id="dellAll" class="BtnDel" />
                        </div>
                        <!--{if $favorRows['count']>0}-->
                        <div class="paginator" style="width: 664px;padding:0px; float:right;">
                            {$showpage}
                        </div>
                        <!--{/if}-->
                    </div>

                </div>
                <!--{else}-->
                <div id="ctl00_ContentPlaceHolder1_divEmpty " class="ErrorTips innerbodywrapper" style="display:;">
                    <img alt="" src="http://cdn.{ROOT_DOMAIN}/www/images/ke/5_240_240.png" class="Img" /><br />
                    很抱歉，没有找到相关的课程
                </div>
                <!--{/if}-->
            </div>
            <div class="clear"></div>
        </div>
        <div style="height: 25px"></div>
    <!--{template footer}-->
    <script>
        $("#dellAll").click(function(){
            var ids = [];
            $("tr[id^=favor]").find(":checkbox:checked").each(function () {
               ids.push($(this).val());
            });
            var param = {ids:ids};
            $.post("/ke/myFavorMini.html?act=delBatch", param, function (data) {
                var data = JSON.parse(data);
                if(data.status==1){
                    location.reload();
                    return;
                }
                alert(data.msg);
            });
        });
    </script>


</body>
</html>
