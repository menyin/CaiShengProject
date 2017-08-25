<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/www/css/map_look.css">
    <script>
        window.onload=function(){
            setTimeout(function() {
                window.scrollTo(0, 50) ;
            }, 0);
        };
    </script>
    <script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
    <title>公交地图-597才网</title>
    <style>
.itip {color: #FF7400;font-size: 12px;float: right;margin-right: 20px;line-height: 22px;}
.busTop {display: block;background-color: #F3F3F3;border-bottom: 1px #DADADA solid;line-height: 41px;height: 41px;font-size: 16px;padding-left: 15px;color: #444;padding-right: 27px;font-family: "微软雅黑","宋体","SimHei";}
.btitle b {font-weight: normal;color: red;}
    </style>
</head>
<body>
<div class="busTop">
    <!-- <a href="javascript:void(0)" id="GmapClose" class="busClose" title="关闭">×</a> -->
    <span class="btitle">公交地图</span>
</div>
<div id="allmap" data-id="{$_GET['lineId']}" data-str="{$_GET['stationStr']}"></div>
</body>
</html>
<script type="text/javascript">
    $(function(){
        var lineId=$("#allmap").attr("data-id")
        var str=$("#allmap").attr("data-str")||""
        if(lineId){
            $.ajax({
                cache:false,
                type: "POST",
                url: "/api/web/company.api",
                data: {
                    act: 'getStationByLineId',
                    lineId: lineId,
                    cLong: '{$_GET["cLong"]}',
                    cLat: '{$_GET["cLat"]}'
                },
                dataType:"json",
                success: function(data){

                    var v=data;
                    if(v.status==1){
                        if(v.stationRows.length>0){

                            document.title=v.lineRow.name+document.title;
                            var html = '<span class="btitle">公交地图<b>【'+v.lineRow.name+'】</b> <em style="color:gray;font-size:12px;font-weight:normal">'+v.lineRow.title+'</em></span>';
                            $(".btitle").html(html);
                            var zz=v.stationRows[v.stationRows.length>5?4:(v.stationRows.length-1)]

                            // 百度地图API功能
                            var map = new BMap.Map("allmap");
                            var point = new BMap.Point(zz.sLong,zz.sLat);
                            map.centerAndZoom(point, 14);
                            map.enableScrollWheelZoom();
                            var ztStr=v.stationRows[0];

                            $.each(v.stationRows,function(kk,vv){
                                var point = new BMap.Point(vv.sLong,vv.sLat);
                                var label = vv.stationName;
                                if((kk==0 || kk==(v.stationRows.length-1)) && ztStr.stationName==label && ztStr.sLong==vv.sLong && ztStr.sLat==vv.sLat){
                                    greenAddMarker(point,label);
                                }else if(str && str.split(",").indexOf(label)>-1){
                                    redAddMarker(point,label);
                                }else{
                                    addMarker(point,label);
                                }
                            })
                            // 编写自定义函数,创建标注
                            //,{icon:new BMap.Icon("http://developer.baidu.com/map/jsdemo/img/fox.gif", new BMap.Size(300,157))}
                            function addMarker(point,label){
                                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://cdn.597.cs/www/img/v2/icons/r10.png", new BMap.Size(10,10))});
                                map.addOverlay(marker);
                                addClickHandler(label,marker);
                            }
                            function redAddMarker(point,label){
                                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://cdn.597.cs/www/img/v2/icons/red10.png", new BMap.Size(10,10))});
                                map.addOverlay(marker);
                                addClickHandler(label,marker);
                            }
                            function greenAddMarker(point,label){
                                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://cdn.597.cs/www/img/v2/icons/g10.png", new BMap.Size(10,10))});
                                map.addOverlay(marker);
                                addClickHandler(label,marker);
                            }

                            function addClickHandler(content,marker){
                                marker.addEventListener("click",function(e){
                                    openInfo(content,e)}
                                );
                            }

                            function openInfo(content,e){
                                var p = e.target;
                                var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                                var infoWindow = new BMap.InfoWindow(content);  // 创建信息窗口对象
                                map.openInfoWindow(infoWindow,point); //开启信息窗口
                            }

                        }
                    }
                }
            })
        }
    })
</script>
