<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/www/css/setmap.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
    <script src="http://cdn.597.com/m/js/zepto.js"></script>
    <title>手机定位</title>
</head>
<body>
<div id="ditu">
    <div class="box" style="padding-top: 20%;">
        <span class="loadingbtn"></span>
        <div class="txt">
            正在获取当前地理位置，请稍候...
            <p style="color:gray; font-size: 12px;">温馨提示:浏览器提示 是否允许定位 选择允许方可定位</p>
        </div>
    </div>
</div>
<div id="warp">
    <div id="allmap"></div>
    <div class="jobPos" id="divOperat" data-zb="">
        <a href="javascript:void(0);" id="btnOk" class="btnsF14 btn4"> 确 定 </a>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    //延迟提示
    var rtip=function(str,t){
        $(".ui-alert").remove()
        var alt = $('<div class="ui-alert" style="position:fixed;top:0;left:0;padding:15px 10px;min-width:100px;opacity:1;min-height:25px;line-height:25px;text-align:center;color:#fff;display:block;z-index:2147483647;border-radius:3px;background:rgba(0,0,0,0.8);font-size:16px;">'+str+'</div>')
        alt.click(function(){alt.remove()}).find(".ui-alert-close").click(function(){alt.remove()})
        alt.appendTo("body")
        var winW = $(window).width()
                ,winH = $(window).height()
                ,altW = alt.width()
                ,altH = alt.height()
        if(winW>altW) alt.css("left",(winW-altW)/2)
        if(winH>altH) alt.css("top",(winH-altH)/2)
        alt.show()
        if(t===false)return
        setTimeout(function(){alt.remove()},t||2500)
    }

    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(114.945691,25.855587);
    map.centerAndZoom(point,14);

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

    var mk;
    map.addEventListener("click", function (e) {
        $('#divOperat').attr('data-zb',e.point.lng+","+e.point.lat);
        map.removeOverlay(mk);
        mk = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat));  // 创建标注
        map.addOverlay(mk);              // 将标注添加到地图中
    });

    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        console.log(r);
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            //rtip(r.point.lng + ", " + r.point.lat);
            $('#divOperat').attr('data-zb',r.point.lng+","+r.point.lat);
        }else{
            alert('failed'+this.getStatus());
        }
        $("#ditu").hide();
    },{enableHighAccuracy: true});

    $(function(){
        //Map,Temp提交
        $(document).on("click","#btnOk",function(){
            if(confirm('您确定您在此位置吗?')){
                var $this=$(this)
                        ,id=$this.attr("id")
                        ,$parent=$this.parent()
                        ,zb=$parent.attr("data-zb")
                $parent.html('<span class="loadingbtn"></span>正在处理,请稍候...');
                //parent.callback(zb);
                parent.getZb(zb);
            }
        })
    })
</script>