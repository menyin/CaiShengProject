    var fe = (function() {
        var _fe = function() {
            var _map, _circle,_addressList={name: ____jsonfe.addressList.name}, _pt_center, _tempmarker, _setplans,
            _loadMap = function(map_name) {
                // 存放周边资源信息
                _localInfoType = {};
                _pt_center = new BMap.Point(_addressList.lon, _addressList.lat);
                //设置中点并缩放到16级
                _map.centerAndZoom(_pt_center, 16);
                //增加导航控件
                _map.addControl(new BMap.NavigationControl());
                _map.enableScrollWheelZoom();
                //增加中心点图标
                _centerMark = _addicon("http://cdn.597.com/images/pic/markerred.gif", _addressList.name, _addressList.lon, _addressList.lat);
                _centerMark.disableMassClear();
                _circle = new BMap.Circle(
                    _pt_center, 
                    1500,
                    {fillColor:"#A6A6A6", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3}
                );
                var ck_routefrom = _getCookie("route_from");
                if (ck_routefrom) {
                    $("#map_route_from").val(ck_routefrom);
                }
                $("#map_route_to").val(_addressList.name);
                /*//点击“交通路线”
                $("#dtjt_tab1").click(function() {
                    var self = $(this);
                    if (!self.hasClass("tabsel")) {
                        self.addClass("tabsel");
                        $("#dtjt_tab2").removeClass("tabsel");
                        $("#map_tab_shxx").hide();
                        $("#map_tab_jtlx").show();
                    }
                });
                //点击“生活信息”
                $("#dtjt_tab2").click(function() {
                    var self = $(this);
                    if (!self.hasClass("tabsel")) {
                        self.addClass("tabsel");
                        $("#dtjt_tab1").removeClass("tabsel");
                        $("#map_tab_jtlx").hide();
                        $("#map_tab_shxx").show();
                    }
                });*/
                //在“起点”上按回车键
                $("#map_route_from").keydown(function(e) {
                    
                    if (13 == e.keyCode) {
                        _search();
                    }
                });
                //按“查询路线”按钮
                $("#map_route_search").click(_search);
                // 初始化周边资源类型
                _newsc();
                //查找公交地铁站等等信息
                /*
                var local =  new BMap.LocalSearch(_map, {renderOptions: {autoViewport: false}, onSearchComplete: _sc});  
                var bounds = _getSquareBounds(circle.getCenter(), circle.getRadius());
                local.searchInBounds(['公交车站', '地铁站', '超市','餐饮','银行','学校', '医院'], bounds);
                return true;
                */
            },
            _addicon = function(url, text, lon, lat) {
                var pt = new BMap.Point(lon, lat);
                var myIcon = new BMap.Icon(url, new BMap.Size(20, 20));
                var label = new BMap.Label(text, {offset:new BMap.Size(20,0)});
                var marker = new BMap.Marker(pt,{icon:myIcon});  // 创建标注
                marker.setLabel(label);
                _map.addOverlay(marker);              // 将标注添加到地图中
                 return marker;
            },
           _newsc = function()
            {
                var dts = [
                    {keyword: "附近公交站", value:"gongjiao", address: 1, link: 0, icon: "http://cdn.597.com/images/pic/gongjiao.gif"},
                    {keyword: "附近地铁站", value:"ditie", address: 0, link: 0, icon: "http://cdn.597.com/images/pic/ditie.gif"},
                    {keyword: "超市", value:"chaoshi", address: 0, link: 1, icon: "http://cdn.597.com/images/pic/chaoshi.gif"},
                    {keyword: "餐饮", value:"canyin", address: 0, link: 1, icon: "http://cdn.597.com/images/pic/canyin.gif"},
                    {keyword: "银行",value:"yinhang", address: 0, link: 1, icon: "http://cdn.597.com/images/pic/yinhang.gif"},
                    {keyword: "学校", value:"xuexiao", address: 0, link: 1, icon: "http://cdn.597.com/images/pic/xuexiao.gif"},
                    {keyword: "医院", value:"yiyuan", address: 0, link: 1, icon: "http://cdn.597.com/images/pic/yiyuan.gif"}
                ];
                
                var html1 = "";
                for (var i=0, i_len=dts.length; i<i_len; i++) {
          
                    var html = "<dl>";
                    html += "<dt class='dt'> <input style='padding-right:2px;' type='checkbox' name='local_info' value='"+dts[i].keyword+" ' icon='"+dts[i].icon+"' keyword='"+dts[i].keyword+"' onclick='fe.map.linkAll(this);'/><img src='" + dts[i].icon + "' style='margin-top:3px;'/> <div class='dt' style='left:40px;'>" + dts[i].keyword + "</div></dt>";
                    html += "</dl>";
                  html1 +=html;
                  
                }
                document.getElementById("map_tab_jtlx").innerHTML = html1;
            },
            _localInfo = function(obj)
            {
                
                var key = obj.value;
                var keyword = obj.getAttribute("keyword");
                var options = { onSearchComplete: function(results)
                {
                    
                  if (local.getStatus() == BMAP_STATUS_SUCCESS)
                  { 
                     var s = [];
                      var selected = "";
                      _localInfoType[key] = [];

                    var maxNum = 5;
                    var num =       (results.getCurrentNumPois() < 5) ? results.getCurrentNumPois() :5;
                    
                     for (var i = 0; i < num; i ++)
                     {
                          var marker = _addMarker(results.getPoi(i).point,i, obj);  
                           var openInfoWinFun = _addInfoWindow(marker,results.getPoi(i),i,obj);
        
                        // 默认打开第一标注的信息窗口
                         _localInfoType[key].push(openInfoWinFun);
                            
                            if(i == 0){
            
                                _localInfoType[key][i]();
                            } 
                            
                                var poi     = results.getPoi(i);
                                var title   = poi.title;
                                var lon     = poi.point.lng;
                                var lat     = poi.point.lat;
                                var p       = new BMap.Point(lon, lat);
                                var distance = _map.getDistance(_pt_center, p);
                                distance = Math.floor(distance)+"米";
                                                        
                                s.push('<dd id="list' + key + i + '" style="cursor: pointer; overflow: hidden; line-height: 17px;' + selected + '" onclick=\'_localInfoType["'+key+'"][' + i + ']()\'>');
                                
                                s.push('<div style="line-height:20px;width:180px;">');
                                s.push('<span style="color:#00c;text-decoration:underline">' + results.getPoi(i).title.replace(new RegExp(results.keyword,"g"),'<b>' + results.keyword + '</b>') + '</span>');
                                s.push('<span> - ' + results.getPoi(i).address + '</span>');
                                s.push('</div>');
                                s.push('<div class="distance"> - ' + distance + '</div>');
                                s.push('</dd>');
                                s.push('');
                            
                     }
                     var html = s.join("");
                     $(obj.parentNode.parentNode).append(html);
                    
                  }
                }
                };                  
            var bounds = _getSquareBounds(_circle.getCenter(), _circle.getRadius());
            var local = new BMap.LocalSearch(_map, options);
            local.enableAutoViewport();
            local.searchInBounds(keyword, bounds);
                    
           },
            // 添加标注
            _addMarker = function(point, index, obj){
                var icon = $(obj).next().attr("src");
                var title = obj.value;
                
                var myIcon = new BMap.Icon(icon, new BMap.Size(23, 25), {
                    offset: new BMap.Size(10, 25)
                });
                var marker = new BMap.Marker(point, {icon: myIcon, title : title});
                _map.addOverlay(marker);
                return marker;
            },

        // 添加信息窗口
            _addInfoWindow = function(marker,poi,index,obj){
                var maxLen = 10;
                var name = null;
                var keyword = obj.getAttribute("keyword");
                if(poi.type == BMAP_POI_TYPE_NORMAL){
                    name = "地址：  "
                }else if(poi.type == BMAP_POI_TYPE_BUSSTOP){
                    name = "公交：  "
                }else if(poi.type == BMAP_POI_TYPE_SUBSTOP){
                    name = "地铁：  "
                }
            // infowindow的标题
            var infoWindowTitle = '<div style="font-weight:bold;color:#CE5521;font-size:14px">'+poi.title+'</div>';
            // infowindow的显示信息
            var infoWindowHtml = [];
            infoWindowHtml.push('<table cellspacing="0" style="table-layout:fixed;width:100%;font:12px arial,simsun,sans-serif"><tbody>');
            infoWindowHtml.push('<tr>');
            infoWindowHtml.push('<td style="vertical-align:top;line-height:16px;width:38px;white-space:nowrap;word-break:keep-all">' + name + '</td>');
            infoWindowHtml.push('<td style="vertical-align:top;line-height:16px">' + poi.address + ' </td>');
            infoWindowHtml.push('</tr>');
            infoWindowHtml.push('</tbody></table>');
            var infoWindow = new BMap.InfoWindow(infoWindowHtml.join(""),{title:infoWindowTitle,width:200}); 
            var openInfoWinFun = function(){
                marker.openInfoWindow(infoWindow);
                for(var cnt = 0; cnt < maxLen; cnt++){
                    if(!document.getElementById("list" + keyword +cnt)){continue;}
                    if(cnt == index){
                        document.getElementById("list" +keyword + cnt).style.backgroundColor = "#f0f0f0";
                    }else{
                        document.getElementById("list" + keyword+ cnt).style.backgroundColor = "#fff";
                    }
                }
            }
             marker.addEventListener("click", openInfoWinFun);
            return openInfoWinFun;
            },
            _search = function() {
                var from = $("#map_route_from");
                var start = from.val();
                var end = $("#map_route_to").val();
                if (!start || !end) {
                    alert("请先输入起点。");
                    from.focus();
                    return;
                }
                if ($("#map_route_bus").attr("checked")) {
                    _map.clearOverlays();
                    var transit = new BMap.TransitRoute(_map, {
                        renderOptions: {map: _map}, 
                        policy: BMAP_TRANSIT_POLICY_LEAST_TIME,
                        onSearchComplete: _busresult
                    });
                    transit.search(start, _pt_center);
                } else {
                    _map.clearOverlays();
                    var transit = new BMap.DrivingRoute(_map, {
                        renderOptions: {panel: "map_search_result", map:_map}, 
                        policy: 1,
                        onSearchComplete: _carresult
                    });
                    transit.search(start, end);
                }
            },
            _getplannumber = function(plans) {
                var len = plans.length;
                var list = [0, 1, 2];
                if (len > 1) {
                    if (plans[0]._duration > plans[1]._duration) {
                        var t = list[1];
                        list[1] = list[0];
                        list[0] = t;
                    }
                }
                if (len > 2) {
                    if (plans[1]._duration > plans[2]._duration) {
                        var t = list[2];
                        list[2] = list[1];
                        list[1] = t;
                    }
                    if (plans[0]._duration > plans[1]._duration) {
                        var t = list[1];
                        list[1] = list[0];
                        list[0] = t;
                    }
                }
                return list;
            },
            _busresult = function(results) {
                _setplans = results;
                var start = results.getStart();
                var end = results.getEnd();
                if (!start || !end) {
                    $("#map_search_result").hide();
                    alert("查询不到线路，请重新输入公交/地铁站点名称。");
                    return;
                }
                start = start.title;
                end = end.title;
                _setCookie("route_from", start);
                var list = [];
                var plan_number = _getplannumber(results._plans);
                var plan_len = results._plans.length;
                plan_len = (plan_len<=3) || 3;
                var html = "";
                var first_desc = "";
                for (var i=0; i<plan_len; i++) {
                    var plan = results.getPlan(plan_number[i]);
                    if (!plan) {
                        continue;
                    }
                    var lines = plan._lines;
                    var lines_str = "";
                    for (var j=0; j<lines.length; j++) {
                        var title = lines[j].title;
                        lines_str += title.substr(0, title.indexOf("("));
                        if (j != lines.length-1) {
                            lines_str += " → ";
                        }
                    }
                    var distance = plan.getDistance();
                    var time = plan.getDuration();
                    var description = plan.getDescription();
                    var descs = description.split("，");
                    var desc = "";
                    var needno = true;
                    for (var j=0, k=1; j<descs.length; j++) {
                        var needbr = false;
                        if (descs[j].substring(0, 2)=="到达") {
                            needbr = true;
                        }
                        if (needno) {
                            desc += "<p>";
                            needno = false;
                        }
                        desc += descs[j];
                        if (!needbr) {
                            desc += "，";
                        }
                        if (needbr) {
                            desc += "</p>";
                            needno = true;
                        }
                    }
                    var sel_class = "";
                    if (0 == i) {
                        sel_class = " route_sel";
                        first_desc = desc;
                    }
                    var div1 = "<div class='lefttop'>"+(i+1)+"</div>";
                    var div2 = "<div class='route' start='"+start+"' end='"+end+"' desc='"+desc+"'>" + lines_str + "</div>";
                    var div3 = "<div class='distance_time'>全程约"+time+" / 共"+distance+"</div>";
                    html += "<div onclick='fe.map.changeroute(this);' class='transit_list"+sel_class+"'>" + div1 + div2 + div3 + "</div>";
                }
                var div4 = "<div class='route_detail'><div class='route_start'>"+start+"</div>"+first_desc+"<div class='route_end'>"+end+"</div></div>";
                html += div4;
                var msr = $("#map_search_result");
                msr.html(html);
                $(".transit_list").eq(0).after($(".route_detail"));
                msr.show();
            },
            _carresult = function(results) {
                var start = results.getStart();
                var end = results.getEnd();
                if (!start || !end) {
                    $("#map_search_result").hide();
                    alert("查询不到线路，请重新输入起点名称。");
                    return;
                }
                $("#map_search_result").show();
            },
            _getSquareBounds = function(centerPoi, r){
                var a = Math.sqrt(2) * r; //正方形边长
              
                mPoi = _getMecator(centerPoi);
                var x0 = mPoi.x, y0 = mPoi.y;
             
                var x1 = x0 + a / 2 , y1 = y0 + a / 2;//东北点
                var x2 = x0 - a / 2 , y2 = y0 - a / 2;//西南点
                
                var ne = _getPoi(new BMap.Pixel(x1, y1)), sw = _getPoi(new BMap.Pixel(x2, y2));
                return new BMap.Bounds(sw, ne);        
                
            },
            //根据球面坐标获得平面坐标。
            _getMecator = function(poi){
                return _map.getMapType().getProjection().lngLatToPoint(poi);
            },
            //根据平面坐标获得球面坐标。
            _getPoi = function(mecator){
                return _map.getMapType().getProjection().pointToLngLat(mecator);
            },
            _setCookie = function(c_name, c_value, c_expires, c_path, c_domain, c_secure) {
                var tcookie = c_name + "=" + encodeURIComponent(c_value);
                if(c_expires) {
                    tcookie += ";expires="+c_expires.toGMTString();
                } else {
                    var expires = new Date((new Date()).getTime() + 24 * 3600000 * 30);
                    tcookie += ";expires=" + expires.toGMTString();
                }
                if(c_path) {
                    tcookie += ";path="+c_path;1
                } else {
                    tcookie += ";path=/";
                }
                if(c_domain) {
                    tcookie += ";domain="+c_domain;
                } else {
                    tcookie += ";";
                }
                if(c_secure) {
                    tcookie += ";secure";
                }
                document.cookie = tcookie; 
            },      
            _getCookie = function(sname) {
                var value = "(?:;)?" + sname + "=([^;]*);?"; 
                var patten = new RegExp(value);  
                if(patten.test(document.cookie)) {
                    return decodeURIComponent(RegExp['$1']);
                }  
                else {   
                    return null;
                }
            };
            
            this.hideMap = function() {
                $("#dtjt_wrap").hide();
            };

            this.changeroute = function(obj) {
                var o = $(obj).find('.route');
                $(".route_detail").html("<div class='route_start'>"+o.attr("start")+"</div>"+o.attr("desc")+"<div class='route_end'>"+o.attr("end")+"</div>");
                $(obj).after($(".route_detail"));

                _map.clearOverlays();
                var index = $(obj).index();
                var firstPlan = _setplans.getPlan(index); 
                // 绘制步行线路    
                for (var i = 0; i < firstPlan.getNumRoutes(); i ++){    
                 var walk = firstPlan.getRoute(i);    
                 if (walk.getDistance(false) > 0){    
                   // 步行线路有可能为0  
                   _map.addOverlay(new BMap.Polyline(walk.getPath(), {lineColor: "green"}));    
                 }    
                }    
                // 绘制公交线路   
                for (i = 0; i < firstPlan.getNumLines(); i ++){    
                 var line = firstPlan.getLine(i);    
                 _map.addOverlay(new BMap.Polyline(line.getPath()));    
                }    

            };
            this.link = function(obj) {
                var icon = obj.getAttribute("icon");
                var lon = obj.getAttribute("lon");
                var lat = obj.getAttribute("lat");
                var address = obj.getAttribute("address");
                var title = obj.getAttribute("title");
                
                var pt = new BMap.Point(lon, lat);
                var myIcon = new BMap.Icon(icon, new BMap.Size(20, 20));
                if (_tempmarker) {
                    _map.removeOverlay(_tempmarker);
                }
                _tempmarker = new BMap.Marker(pt, {icon:myIcon});  // 创建标注
                _map.addOverlay(_tempmarker);              // 将标注添加到地图中
                
                var infoWindow = new BMap.InfoWindow("<p style='font-size:14px; font-weight:900;'>"+title+"</p><p style='font-size:12px;'>地址："+address+"</p>");
                _tempmarker.openInfoWindow(infoWindow);
                if ("addEventListener" in window) {
                    _tempmarker.addEventListener("click", function(){
                        this.openInfoWindow(infoWindow);
                    });
                } else {
                    _tempmarker["onclick"] = function() {
                        this.openInfoWindow(infoWindow);
                    }
                }
            };
            this.linkAll = function(obj)
            {
                if (obj.checked)
                {
                    _localInfo(obj);   
                }   
                else
                {
                    
                    var allMark = _map.getOverlays();
                    for (var i=0; i<allMark.length; i++)
                    {
                        if(typeof allMark[i].getTitle == "function")
                        {
                            if (allMark[i].getTitle() == obj.value)
                            {
                                _map.removeOverlay(allMark[i]); 
                                //allMark[i].dispose();
                            }
                        }
                    }
                    $(obj.parentNode.parentNode).children("dd").remove();
                }
            };
            this.getMap = function() {
                var script = document.createElement("script");
                script.src = "http://api.map.baidu.com/api?v=1.3&callback=fe.map.init";
                document.body.appendChild(script);
            };
            this.init = function() {
                _addressList.lon = ____jsonfe.addressList.baidulon || ____jsonfe.addressList.lon,
                _addressList.lat = ____jsonfe.addressList.baidulat || ____jsonfe.addressList.lat;
                if((_addressList.lon==''&&_addressList.lat=='')||(_addressList.lon==0&&_addressList.lat==0)){
                    var gc = new BMap.Geocoder();
                    gc.getPoint(____jsonfe.addressList.address, function(point){   
                        //创建地图
                        _addressList.lon=point.lng;
                        _addressList.lat=point.lat;
                        _map = new BMap.Map("map");
                        _map.setCurrentCity(____jsonfe.locallist[0].name);
                        _loadMap("map");
                    }, ____jsonfe.locallist[0].name);
                }else{
                    _map = new BMap.Map("map");
                    _map.setCurrentCity(____jsonfe.locallist[0].name);
                    _loadMap("map");
                }
            };
            //this.gettuangouInfo=_gettuangouInfo;
            //百度地图全屏
            this.togScroll = function(newdivs){
                var temp_h1 = document.body.clientHeight;  
                    var temp_h2 = document.documentElement.clientHeight;  
                    var isXhtml = (temp_h2 <= temp_h1 && temp_h2!= 0 ) ? true : false;   
                    var htmlbody = isXhtml ? document.documentElement : document.body;
                    if (newdivs){   
                        htmlbody.style.overflow = "auto"; 
                        $(window).unbind('scroll', this.settop);
                    }else{
                        htmlbody.style.overflow = "hidden"; 
                        $(window).bind('scroll', this.settop);
                    }  
            };
            this.settop = function(){
                $('#map').css({
                    top: $(window).scrollTop() + 'px'
                 });
                $('#baidu_exitfullscreen').css({
                    top: $(window).scrollTop() + 5 + 'px'
                }).show();
            }
            this.exitfull = function(){
                if(____jsonfe.fullScreen==1){
                    $('#map').appendTo($('#dtjt_info')).css({
                            width: '675px',
                            height: '319px',
                            left: 0,
                            top: 0,
                            zIndex: 0
                    });                    
                }else{
                    $('#map').appendTo($('#dtjt_info')).css({
                            width: '469px',
                            height: '319px',
                            left: 0,
                            top: 0,
                            zIndex: 0
                    });
                }
                $('#baidu_exitfullscreen').hide();
            };
            this.setfull = function(){
                var clienth = window.screen.availHeight,
                    scrollh = $(window).scrollTop();
                $('#map').appendTo($('body')).css({
                    left: 0,
                    top: scrollh + 'px',
                    width: '100%',
                    height: clienth + 'px',
                    zIndex: 9999
                });
                $('#baidu_exitfullscreen').css({
                    top: scrollh + 5 + 'px'
                }).show();
            };
            this.recenter = function(){
                //return '';
                //_addressList.lon = ____jsonfe.addressList.baidulon || ____jsonfe.addressList.lon,
                //_addressList.lat = ____jsonfe.addressList.baidulat || ____jsonfe.addressList.lat;
                if((_addressList.lon==''&&_addressList.lat=='')||(_addressList.lon==0&&_addressList.lat==0)){
                    var gc = new BMap.Geocoder();
                    gc.getPoint(____jsonfe.addressList.address, function(point){   
                        //创建地图
                        _addressList.lon=point.lng;
                        _addressList.lat=point.lat;

                        _pt_center = new BMap.Point(_addressList.lon, _addressList.lat);
                        //设置中点并缩放到16级
                        _map.centerAndZoom(_pt_center, 16);
                    }, ____jsonfe.locallist[0].name);
                }else{
                    _pt_center = new BMap.Point(_addressList.lon, _addressList.lat);
                    //_map.centerAndZoom(_pt_center, 16);
                }    
            };
        };
        return _fe;
    }) ();
    function getSosoMap()
    {
        if(____jsonfe.addressList.baidulon==''&&____jsonfe.addressList.baidulat==''){
            var address=encodeURIComponent(____jsonfe.addressList.address);
            var city=encodeURIComponent(____jsonfe.locallist[0].name);
            var script = document.createElement("script");
            script.src = "http://api.map.baidu.com/geocoder/v2/?address="+address+"&city="+city+"&output=json&ak=WKTbbFBbzGrhBiRowyZG2wDa&callback=showLocation";
            document.body.appendChild(script);
        }else{
                if(typeof(____jsonfe.onlyBd)!=undefined&&____jsonfe.onlyBd==1){
                    //不显示街景
                }else{
                    var response={"result":{"location":{"lng":____jsonfe.addressList.baidulon,"lat":____jsonfe.addressList.baidulat}},"status":0};
                    showLocation(response);
                }

        }

    };
    function showLocation(response){
        if(response.status==0){
            // 街景 map
            var pano = new soso.maps.Panorama("soso_map");
            // 街景 overview

            var overview = new soso.maps.PanoOverview("static_map",{
                panorama:pano
            });
            // 街景检查 对象
            var pano_service = new soso.maps.PanoramaService();
            // 经纬度 对象
            var lon = response.result.location.lng;
            var lat = response.result.location.lat;

            var latlng = new soso.maps.LatLng(lat,lon);
            // 控件对象
            var navControl = new soso.maps.NavigationControl({
                map:overview.map,
                style : soso.maps.NavigationControlStyle.SMALL
            }); 
            // 转换baidu经纬度 为soso经纬度
            soso.maps.convertor.translate(latlng, 3, function(res)
            {
                pano_service.getPano(res[0], 200, function(result)
                {
                    
                    if (result == null)
                    {
                        hideSosoMap();
                        return;
                    }
                   // console.log( result);
                    
                    pano.setPano(result.svid);
                }); 
                
                // 房源Mark
                var marker = new soso.maps.Marker({
                    map:overview.map,
                    position:res[0]
                });  
            });  

            // 自动旋转   
            var heading = 0;
            var timer = setInterval(function(){
                if(heading >= 360){
                    heading = 0;
                }
                heading += 0.1;
                pano.setPov({heading : heading});
            }, 100);
        
            soso.maps.event.addListener(pano, 'pov_changed', function (){
                var pov = pano.getPov();
                
                if(Math.abs(pano.getPov().heading - heading) > 1){
                    clearInterval(timer);
                }                     
            }) 

            //$("#soso_tab").addClass("active");
            //$("#soso_map").show(); 

            changeMap(); 
            mapZoom(); 
            sosoMapDragZoom();
        }
    }
    function changeMap ()
    {
        $("#soso_tab").click(function()
        {
            $("#map_search_result").hide();
            $(this).addClass("active").siblings().removeClass("active");
            $("#soso_map").addClass("active").siblings().removeClass("active"); 
        }); 

          $("#baidu_tab").click(function()
        {
            $(this).addClass("active").siblings().removeClass("active");
            $("#baidu_map").addClass("active").siblings().removeClass("active");   
        }); 

    }

    function hideSosoMap()
    {
        $("#dtjt_title").hide();
        $("#soso_map").hide();
        $("#baidu_map").show();
        $("#jtdt1 span").html("交通地图");
        $("#dtjt").html("交通地图");
    };

    function mapZoom () {

        $("#static_map_background").mouseenter(function()
        {
            $(this).stop(true).animate({"width":"220px", "height":"220px"});
            
        });

        $("#static_map_background").mouseleave(function()
        {
             window.setTimeout(function() {
                 $("#static_map_background").stop(true).animate({"width":"110px", "height":"110px"}); }, 2200);
        });         
    };

    function sosoMapDragZoom ()
    {
        var maxWidth = Math.floor($("#soso_map").width() -20);
        var maxHeight = Math.floor($("#soso_map").height() -20);
        var staticMap = $("#static_map_background");
        var mapDrag = $("#map_drag");

        mapDrag.mousedown(function(e){
            $("#static_map_background").unbind('mouseleave').unbind('mouseenter');
        var _e = e, _width = staticMap.width(), _height = staticMap.height();
        $(document).mousemove(sosoMapZoomIn = function(evt){
            var width = evt.pageX - _e.pageX;
            var height = evt.pageY - _e.pageY;
            var newWidth = Math.floor(_width - width);
            var newHeight = Math.floor(_height - height);
  
            if (newWidth > maxWidth)
            {
                staticMap.width(maxWidth);
            }
            else if (newWidth < 110)
            {
                staticMap.width(110);    
            }
            else
            {
                staticMap.width(newWidth);
            }
            
            if (newHeight > maxHeight)
            {
                staticMap.height(maxHeight);
            }
            else if (newHeight < 110)
            {
                staticMap.height(110);   
            }
            else
            {
                staticMap.height(newHeight);
            }
        });
        $(document).mouseup(sosoMapZoomOut = function()
        {
            $(document).unbind("mousemove", sosoMapZoomIn);
            $(document).unbind("mouseup", sosoMapZoomOut);

            mapZoom();
        });
        
        return false;
    });

    }
    window.fe = window.fe || {};
    window.fe.map = new fe;
    $(function() {  
        var div_map = document.getElementById("map");
        var soso_map = document.getElementById("soso_map");
        //if (("____jsonfe" in window) && div_map) {
            //if ("addressList" in window.____jsonfe) {
                var lon = ____jsonfe.addressList.baidulon || ____jsonfe.addressList.lon,
                    lat = ____jsonfe.addressList.baidulat || ____jsonfe.addressList.lat;
                if (lon!= undefined && lon!=null && lon!="0" && lon!="null" && lat!= undefined && lat!=null && lat!="0" && lat!="null") {
                   // fe.map.gettuangouInfo(lon,lat);
                    fe.map.getMap();
                    
                    $('body').bind('keyup', function(e){
                        var keycode = e.keyCode||e.which;
                        if( keycode == 27 && $('#map').css('z-index') == 9999 ){
                            fe.map.exitfull();
                            fe.map.init();
                            fe.map.togScroll(true);
                        }
                    });
                    $('#baidu_fullscreen').click(function(){
                        fe.map.setfull();
                        fe.map.init();
                        fe.map.togScroll(false);
                    });
                    $('#baidu_exitfullscreen').click(function(){
                        fe.map.exitfull();
                        fe.map.init();
                        fe.map.togScroll(true);
                    });
                }
            //}
        //}
        //fe.map.hideMap(); 
        getSosoMap();
    });


