<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
    </style>
    <script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
    <title>导航</title>
</head>
<body>
<div id="allmap"></div>
<div id="r-result" style="display:none"></div>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(118.169597,24.534576), 18);

    map.disableDoubleClickZoom(true);
    map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
    map.enableScrollWheelZoom();//禁用地图滚轮放大缩小，默认禁用(可不写)
    map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
    map.enableKeyboard();//启用键盘上下左右键移动地图

    //地图事件设置函数：
    map.addControl(new BMap.NavigationControl()); //添加地图平移缩放控件
    map.addControl(new BMap.MapTypeControl());//添加地图类型控件
    map.addControl(new BMap.OverviewMapControl()); //添加缩略地图控件
    map.addControl(new BMap.ScaleControl()); //添加默认位于地图左下方,显示地图的比例关系

    var p2 = new BMap.Point({$cLong},{$cLat});
    var p1 = new BMap.Point({$sLong},{$sLat});
    var driving = new BMap.WalkingRoute(map, {
        onResultsHtmlSet:function(s){
            var way=$(s).text()
                    ,tname="全程："
            if(way.indexOf(tname)>-1)
            {
                way=way.split(tname)[1];
                if(way){
                    parent.distance(way);
                }
            }
        },
        renderOptions:{map: map, panel: "r-result",autoViewport: true}});
    driving.search(p1, p2);
</script>