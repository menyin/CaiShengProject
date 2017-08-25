<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>{$com[cname]}-597人才网</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="shortcut icon" href="http://cdn.597.com/www/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/basefront.css?v=20130808" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/job.css?v=20130510" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/control.js?v=20130808"></script>
	<script type="text/javascript" src='http://api.map.baidu.com/api?v=1.2'></script>
	<script type="text/javascript" language="javascript" src='/js/DistanceTool_min.js'></script>
	<script type="text/javascript" language="javascript" src='/js/TrafficControl_min.js'></script>


<style type="text/css">
	/*--实时路况样式--*/	
	.maplibTc{font-size:12px;width:243px;border:1px solid #8ba4d8;padding:3px 2px 0 5px;background:#fff;position:absolute}
	.maplibTc a{text-decoration:none}
	.maplibTcColor{background:url("http://map.baidu.com/img/tools_menu.gif") no-repeat scroll 138px -85px transparent;font-weight:bold;*background-position:128px -85px}
	.maplibTcUpdate{float:left;width:13px;height:14px;background:url(http://map.baidu.com/img/tools_menu.gif) no-repeat -12px -18px;margin-left:5px;cursor:pointer}
	.maplibTcView{float:right;color:#00f;text-decoration:none;line-height:15px;*line-height:18px}
	.maplibTcCurTime{float:left;color:#666}
	.maplibTcTime{height:20px;padding:5px 3px 0 0}
	.maplibTcWeekDay{height:22px;color:#6688ca;padding:3px 0}
	.maplibTcWeekDay a{color:#6688ca;padding:3px 2px}
	.maplibTcWeekDay ul{float:left;margin:0;padding:0}
	.maplibTcWeekDay span{float:left;line-height:23px}
	.maplibTcWeekDay li{float:left;padding:0 6px;list-style:none;line-height:23px}
	.maplibTcRule{background:url("http://map.baidu.com/img/bar.gif") no-repeat scroll 0 10px transparent;width:195px;float:left;margin-left:20px;*margin-left:10px}
	.maplibTcRuleTxt{float:left;line-height:44px}
	.maplibTcClear{clear:both}
	.maplibTcTimeBox{color:#6688ca;margin-left:137.5px;font-size:11px;overflow:hidden}
	.maplibTcTimeline{height:34px}
	.maplibTcTimelinePrev{overflow:hidden;width:9px;height:9px;cursor:pointer;float:left;margin-top:3px}
	.maplibTcTimelineNext{overflow:hidden;width:11px;*width:10px;height:9px;cursor:pointer;float:right;margin-top:3px}
	.maplibTcTimeMove{width:9px;height:18px;background:url("http://map.baidu.com/img/tools_menu.gif") no-repeat scroll 0 -32px transparent;float:left;cursor:pointer;margin-left:137.5px;margin-top:0}
	.maplibTcHide{display:none}
	.maplibTcBtn{background:url(http://map.baidu.com/img/bgs.gif) no-repeat scroll 0 -271px transparent;cursor:pointer;height:22px;width:73px;z-index:10;position:absolute}
	.maplibTcBtnOff{background-position:0 -249px}
	.maplibTcColon{float:left}
	.maplibTcOn{background:#e6eff8}
	.maplibTcClose{background:url("http://map.baidu.com/img/popup_close.gif") no-repeat scroll 0 0 transparent;border:0 none;cursor:pointer;height:12px;position:absolute;right:4px;top:5px;width:12px}
	/*--end--*/
</style>

</head>
<body>
<!--{template header}-->
<div class="Content">
	<div class="Con">
		<!--{template skip/default/top}-->
		<div class="mainCon">
			<div class="mcT">
				<ul>
					<li><a href="./">企业介绍</a></li>
					<li><a href="joblist.html">招聘职位</a></li>
					<li class='none'><a href="photo.html">企业相册</a></li>
					<li class="cu"><a href="contact.html">联系我们</a></li>
					<li class='none'><a href="comment.html">咨询评论</a></li>
				</ul>
			</div>
			<div class="mcC" style="width:978px;">
				<div class="mcCcon">
					<div class="leftcon">
						<div class="lcTitle">
							<div class="tL"><h3>联系我们</h3></div>
							<div class="tR"><a href="javascript:void(0)" id="btnReport" class="jb" ><b class="L"></b><b class="R"></b>举报</a></div>
						</div>
						<div class="contactCon">
							<div id="getLinkInfo" class="yellowBox" style="display:none;" >
								<div class="yellowBoxL"><a id="getLinkInfo1" href="javascript:void(0)">立即获取联系方式</a></div>
								<div class="yellowBoxR"><a id="sendToMobileOne" href="javascript:void(0)">发送到手机</a></div>
								<div class="clear"></div>
							</div>
							<div id="hasLinkInfo" class="yellowBox" style="display:none;" >
								<div class="yellowBoxL">
									<p>联系人：<span id="contact_linkMan"></span></p>
									<p>联系电话：<span id="contact_linkTel"></span></p>
									<p>联系邮件：<span id="contact_email"></span></p>
									<p><span style="color:Red">联系我时请说在“597人才网”看到的！</span></p>
								</div>
								<div class="yellowBoxR"><a id="sendToMobileTwo" href="javascript:void(0)">发送到手机</a></div>
							</div>
							<div class="text">
								<ul>
									<li><h3>公司网址:</h3><a href="{$com[comSite]}">{$com[comSite]}</a></li>
									<li><h3>公司地址:</h3><span>{$com[comCity]}{$com[comAddress]}</span></li>
								</ul>
							</div>
							<div class='map'>
								<div class="ranging">
									<a href="javascript:void(0)" onclick="myDis.open()"></a>
								</div>
								<div class="mapCon">
									<div class="mapConL" id="baiduMapContainer"></div>
									<div class="mapConR" id="results"></div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--右侧内容-->
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!--气泡窗口-->
<div id="infoWindow" style="display:none">
   <div class="mapWindow">
		<div>
			<p class="companyName">{$com[cname]}</p>
			<p class="companyAdd">{$com[comAddress]}</p>
		</div>
		<div id="divChoose" class="mapNavTag">
			<a href='javascript:void(0)' id='btnGoHere' onclick="companyMap.mapRouteSearch.goHere(this)" class='cu'>到这里去</a> | 
			<a href='javascript:void(0)' id='btnFormHere' onclick="companyMap.mapRouteSearch.formHere(this)">从这里出发</a> | 
			<a href='javascript:void(0)' id='btnNearHere' onclick="companyMap.mapRouteSearch.nearHere(this)">在附件找</a>
		</div>
		<div id="searchContent" class="mapNavTagC">
			<span id="startInput">起点：<input id="txtStart" name="txtStart" maxlength="100" onkeydown="companyMap.mapRouteSearch.keydownSearch(event)"  type="text" class="inputText"/><a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.searchBus(this)" id="btnBus" val='0' class="btn2"><b class="L"></b><b class="R"></b>公交</a><a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.searchDriver(this)"  val='2' class="btn2"><b class="L"></b><b class="R"></b>驾车</a></span>
		</div>
   </div>
</div>

<!--终点-->
<span id="endInput" style="display:none">终点：<input id='txtEnd' type='text' onkeydown="companyMap.mapRouteSearch.keydownSearch(event)" class="inputText" /><a id='btnBus' href='javascript:void(0)' onclick='companyMap.mapRouteSearch.searchBus(this)' val='1' class='btn2'><b class="L"></b><b class="R"></b>公交</a><a href='javascript:void(0)' onclick='companyMap.mapRouteSearch.searchDriver(this)' val='3' class='btn2'><b class="L"></b><b class="R"></b>驾车</a></span>
<!--在附近找-->
<span id="nearInput" style="display:none"><a id='atm' onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>ATM</a><a id='bank' onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>银行</a><a id='hotel' onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>宾馆</a><a id='eatery' onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>餐馆</a><a id='busStation' onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>公交站</a>其他：<input id='txtOther' type='text' class="inputText" style="width:32px;" /><a onclick='companyMap.mapRouteSearch.searchNear(this)' id='btnMapSearch' val='10' href='javascript:void(0)' class='btn2'><b class="L"></b><b class="R"></b>搜索</a></span>
<!--结果面板初始化-->
<div id="initResultPanel" style="display:none"> 
	<div class="lineCheck">
		<p class="tit">线路查询</p>
		<div id="divPanel1">
			<div class="stratEnd">
				<p>起点：<input type="text" id="txtStartInResults" val="11" onkeydown="companyMap.mapRouteSearch.keydownSearchInResult(event,this)"  class="inputText"/></p>
				<p>终点：<span class="companyName" title="{$com[cname]}">{$com[cname]}</span></p>
				<p><span class="companyAdd" title="{$com[comAddress]}">{$com[comAddress]}</span></p>
			</div>
			<a href="javascript:void(0)" val="13" onclick="companyMap.mapRouteSearch.tabLine(this)" class="switch"></a>
			<div class="lineCheckBtn"><a id="btnBusStartInResult" href="javascript:void(0)" onclick="companyMap.mapRouteSearch.searchBusInResults(this)" val="0" class="btn11"><b class="L"></b><b class="R"></b>公交查询</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.searchDriverInResults(this)" val="2" class="btn11"><b class="L"></b><b class="R"></b>驾车查询</a>
			</div> 
		</div>
		<div id="divPanel2" style="display:none">
			<div class="stratEnd">
				<p>终点：<span class="companyName" title="{$com[cname]}">{$com[cname]}</span></p>
				<p><span class="companyAdd" title="{$com[comAddress]}">{$com[comAddress]}</span></p>
				<p>起点：<input type="text" id="txtEndInResults" val="12" onkeydown="companyMap.mapRouteSearch.keydownSearchInResult(event,this)" class="inputText"/></p>
			</div>
			<a href="javascript:void(0)" val="14" onclick="companyMap.mapRouteSearch.tabLine(this)" class="switch"></a>
			<div class="lineCheckBtn"><a id="btnBusEndInResult" href="javascript:void(0)" onclick="companyMap.mapRouteSearch.searchBusInResults(this)" val="1" class="btn11"><b class="L"></b><b class="R"></b>公交查询</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.searchDriverInResults(this)" val="3" class="btn11"><b class="L"></b><b class="R"></b>驾车查询</a>
			</div>
		</div>
		<p class="tit">周边查询</p>
		<div class="areaCheck">
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>公交站</a>
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>银行</a>
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>宾馆</a>
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>餐馆</a><br />
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>ATM</a> 
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>楼盘</a>
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>超市</a>
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>药店</a><br />
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>加油站</a>
			<a onclick='companyMap.mapRouteSearch.searchNear(this)' href='javascript:void(0)'>停车场</a>
		</div>
		<div class="tip">
			<span>友情提示：</span><br />您查询到的地图信息仅供参考，地图数据来自第三方，难免有错误或疏漏，还请谅解。<br />
			我们将一直致力于为求职者提供各方面的帮助，不断完善服务与用户体验。<br />
		</div>
	</div>
</div>
<!--路线不存在的提示-->
<div id="noLine" style="display:none">
	<div class="mapError">
		<div class="mapErrorCon"><span>非常抱歉，无法找到您搜索的地点</span><br />
		请确认您输入的关键字是否正确<br />
		可能由于网络繁忙，请稍后重试<br />
		可能因为您搜索的地点离目标地点很近，无法查询到交通线路 
		</div>
		<div class="returnBtn">
		 <a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.returnStep()" class="btn2"><b class="L"></b><b class="R"></b>返回</a>
		</div>
	</div> 
</div>
<!--重新查询按钮-->
<div id="reSearch" style="display:none"><a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.returnStep()" class="btn2"><b class="L"></b><b class="R"></b>返回</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.reSearch()" class="btn2"><b class="L"></b><b class="R"></b>重新查询</a></div>
<!--返回-->
<div id="reStep" style="display:none;width:300px; float:right; text-align:center;"><a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.reSearch()" class="btn2"><b class="L"></b><b class="R"></b>返回</a></div>
<!--数据加载中-->
<div id="background" class="dialogMask" style="display: none; "></div> 
<div id="progressBar" class="dataLoad" style="display: none; "><b class="L"></b><b class="R"></b><div class="dataLoadTxt">数据加载中，请稍等...</div></div>


<!--{template footer}-->
<script type="text/javascript" language="javascript">
	var companyMap={
		//存标注信息,存拖动后临时坐标(切换公交和驾车),存放本地查询之后选择的坐标,是否直接查询,存储本地搜索结果,数据加载
		markerArr:null,tempPoint:null,tempLocalPoint:null,straightSearch:null,localResult:null,ajaxbg:null,
		initialize:function(){
			companyMap.markerArr=[];
			companyMap.tempPoint=null;
			companyMap.tempLocalPoint=null;
			companyMap.straightSearch=false;
			companyMap.localResult=[];
			companyMap._initControl();
			companyMap.mapInit.initialize();
		},
		_initControl:function(){
			//初始化结果面板
			$('#results').html($('#initResultPanel').html());	 
			//提示数据加载
			companyMap.ajaxbg = $("#background,#progressBar");	
		},
		mapInit:{
			botSearch:function()
			{
				var gc = new BMap.Geocoder();
				gc.getPoint('{$com[comAddress]}', function(point){
					companyMap.markerArr = [];
					companyMap.tempPoint=null;
					companyMap.tempLocalPoint=null;
					companyMap.straightSearch=false; 
					companyMap.localResult=[];
					map.clearOverlays();
					$('#txtStart,#txtEnd').val('');
					$('#page,#reStep').hide();
					$('#results').html($('#initResultPanel').html());
					//创建地图
					var showMapY=point.lng;
					var showMapX=point.lat;
					var showMapMsg='{$com[cname]}|{$com[comAddress]}';
					var showMapZoom=16;
					var point = new BMap.Point(showMapY,showMapX);			// 创建中心点坐标
					map.centerAndZoom(point,showMapZoom);					 //设定地图的中心点和坐标并将地图显示在地图容器中 
					companyMap.markerArr.push({title:showMapMsg, point: showMapY + "|" + showMapX, isOpen: 1, icon: { w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5} });
					companyMap.markerArr[0].isOpen=0;
					//创建标注
					companyMap.mapInit.addMarker();
					//添加控件
					companyMap.mapInit.addMapControl();
					//设置函数事件
					companyMap.mapInit.setMapEvent();
				}, '{$com[comCity]}');				
			},	
			initialize:function(){
				companyMap.mapInit.createMap();			 //创建地图
				companyMap.mapInit.setMapEvent();		 //设置函数事件
				companyMap.mapInit.addMapControl();		 //添加地图控件
				companyMap.mapInit.addMarker();			 //添加地图标注点 
				companyMap.mapInit.rightMenu();			 //右键菜单		  
			},
			createMap:function(){
				var map = new BMap.Map("baiduMapContainer");			//在百度地图容器中创建一个地图
				window.map = map;									   //将map变量存储在全局
				myDis = new BMapLib.DistanceTool(map);				   //测距
				//基本信息
				var showMapY='{$com[comLongitude]}';
				var showMapX='{$com[comLatitude]}';
				var showMapMsg='{$com[cname]}|{$com[comAddress]}';
				if (!showMapY || !showMapX){
					companyMap.mapInit.botSearch();
					return false;
				}
				var showMapZoom=18;
				// 创建中心点坐标
				var point = new BMap.Point(showMapY,showMapX);			
				map.centerAndZoom(point,showMapZoom);
				//存储信息
				companyMap.markerArr.push({title:showMapMsg, point: showMapY + "|" + showMapX, isOpen: 1, icon: { w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5} });
			},
			setMapEvent:function(){
				map.enableDragging();		   //启用地图拖拽事件，默认启用(可不写)
				map.enableScrollWheelZoom();	//启用地图滚轮放大缩小
				map.enableDoubleClickZoom();	//启用鼠标双击放大，默认启用(可不写)
				map.enableKeyboard();		   //启用键盘上下左右键移动地图
			},
			addMapControl:function(){
				 //向地图中添加缩放控件
				var ctrl_nav = new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_LEFT,offset: new BMap.Size(10, 10)});
				map.addControl(ctrl_nav);
				//向地图中添加缩略图控件
				var ctrl_ove = new BMap.OverviewMapControl({ anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 0 });
				map.addControl(ctrl_ove);
				//向地图中添加比例尺控件
				var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
				map.addControl(ctrl_sca);
				// 添加实时路况控件
				var ctrl_tra = new BMapLib.TrafficControl();	  
				map.addControl(ctrl_tra);
				ctrl_tra.setAnchor(BMAP_ANCHOR_TOP_RIGHT); 
			},
			addMarker:function(){
				 for (var i = 0; i <companyMap.markerArr.length; i++) {
					var json = companyMap.markerArr[i];
					var p0 = json.point.split("|")[0];
					var p1 = json.point.split("|")[1];
					var point = new BMap.Point(p0, p1);
					var iconImg = companyMap.mapInit.createIcon(json.icon);
					var marker = new BMap.Marker(point, { icon: iconImg });
					window.marker=marker;
					map.addOverlay(marker);
					var iw =companyMap.mapInit.createInfoWindow();
					
					var companyName=json.title.split("|")[0];
					if(companyName.length>12){
					   companyName=companyName.substring(0,12)+"..";
					}
					var label = new BMap.Label(companyName,{"offset":new BMap.Size(json.icon.lb-json.icon.x+12,-2)});
					marker.setLabel(label);
					label.setStyle({borderColor:"#808080",color:"#333",cursor:"pointer"});
				
					(function(){
						var index = i;
						var _iw = companyMap.mapInit.createInfoWindow();
						var _marker = marker;
						_marker.addEventListener("click",function(){
							this.openInfoWindow(_iw);
						});
						_iw.addEventListener("open",function(){
							_marker.getLabel().hide();
						})
						_iw.addEventListener("close",function(){
							_marker.getLabel().show();
						})
						label.addEventListener("click",function(){
							_marker.openInfoWindow(_iw);
						})
						if(!!json.isOpen){
							label.hide();
							_marker.openInfoWindow(_iw);
						}
					})()
				}
			},
			rightMenu:function(){
				var menu = new BMap.ContextMenu();
				var txtMenuItem = 
				[
					{
					   text:'放大',
					   callback:function(){map.zoomIn()}
					},
					{
					   text:'缩小',
					   callback:function(){map.zoomOut()}
					},
					{
					   text:'到这里的公交导航',
					   callback:function(e){
							var json =companyMap.markerArr[0];
							var p0 = json.point.split("|")[0];
							var p1 = json.point.split("|")[1];
							var transit = new BMap.TransitRoute(map, {
								   onSearchComplete:function(results){
										//判断是否有此路线		
									   if(transit.getStatus() != BMAP_STATUS_SUCCESS){  
										   $('#results').html($('#noLine').html());
										   //处理覆盖物
										   companyMap.mapRouteSearch.doOverlay();	  
									   }else{
										   companyMap.mapRouteSearch.getTransitResults($('#txtEnd').val(),results,transit,1);
										   $('#txtStart').val($('#txtEnd').val());
									   } 
									   companyMap.ajaxbg.hide();					   
								   }
							});
							var pStart = new BMap.Point(e.lng,e.lat);
							//存储坐标
							companyMap.tempPoint=pStart;
							//声明解析
							var gc = new BMap.Geocoder();
							//反地址解析
							gc.getLocation(pStart, function(rs){
								var addComp = rs.addressComponents;
								if(addComp.street){
									$('#txtEnd').val(addComp.street);
								}else{
									$('#txtEnd').val("未知路段");
								}
							});  
							companyMap.ajaxbg.show();
							transit.search(new BMap.Point(p0, p1),pStart);
							companyMap.tempPoint=null;
					   }
					}
				 ];
				 for(var i=0; i < txtMenuItem.length; i++){
					menu.addItem(new BMap.MenuItem(txtMenuItem[i].text,txtMenuItem[i].callback,100));
					//加分割线
					if(i==1){
						menu.addSeparator();
					}
				 }
				 map.addContextMenu(menu);
			},
			createInfoWindow:function(){
				var opts = {
					width : 290,	 // 信息窗口宽度
					height: 120,	 // 信息窗口高度
					title : ""	   // 信息窗口标题
				}
				var iw = new BMap.InfoWindow($('#infoWindow').html(),opts);
				return iw;
			},
			createIcon:function(json) 
			{
				var icon = new BMap.Icon("http://cdn.597.com/www/images/map/us_mk_icon.png", new BMap.Size(json.w, json.h), { imageOffset: new BMap.Size(-json.l, -json.t), infoWindowAnchor: new BMap.Size(json.lb + 5, 1), anchor: new BMap.Size(json.x, json.h) })
				return icon;
			}
		},
		mapRouteSearch:{
			goHere:function(obj){
				$('#searchContent').html($('#startInput').html());
				$(obj).addClass('cu').siblings().removeClass('cu');
				$('#txtStart').focus();
			},
			formHere:function(obj){
				$('#searchContent').html($('#endInput').html());
				$(obj).addClass('cu').siblings().removeClass('cu');
				$('#txtEnd').focus();  
			},
			nearHere:function(obj){
				$('#searchContent').html($('#nearInput').html()); 
				$(obj).addClass('cu').siblings().removeClass('cu');
				$('#txtOther').focus(); 
			},
			searchNear:function(obj){
				var json = companyMap.markerArr[0];
				var p0 = json.point.split("|")[0];
				var p1 = json.point.split("|")[1];
				var point = new BMap.Point(p0, p1);
				
				//声明搜索
				var txtOther=$('#txtOther').val();
				var local = new BMap.LocalSearch(map, {
					renderOptions:{map: map},onSearchComplete:function(){
						if(local.getStatus()!=BMAP_STATUS_SUCCESS){
							$('#results').html($('#noLine').html());
							//处理覆盖物
							companyMap.mapRouteSearch.doOverlay();
						}
						companyMap.ajaxbg.hide();
					}
				});
				//设置每页显示条数
				local.setPageCapacity(10);
				companyMap.ajaxbg.show();
				var sign=$(obj).attr("val");
				//搜索框搜索
				if(sign==10){
					if(txtOther.length==0&&txtOther==""){
						$('#txtOther').focus();
						return;
					}
					local.searchNearby(txtOther,point,1000);
					//处理覆盖物
					companyMap.mapRouteSearch.doOverlay();
					//初始化结果面板
					$('#results').html($('#initResultPanel').html());
				}else{   //链接搜索
					local.searchNearby($(obj).text(),point,1000);
					//处理覆盖物
					companyMap.mapRouteSearch.doOverlay();
					//初始化结果面板
					$('#results').html($('#initResultPanel').html());
				}
			},
			searchBus:function(obj){	//公交路线查询
				var json =companyMap.markerArr[0];
				var p0 = json.point.split("|")[0];
				var p1 = json.point.split("|")[1];
				var sign = $(obj).attr("val");
				//到这里去
				if(sign==0||sign==6){
					if(sign==0){
						var txtStart=$('#txtStart').val();
						if(txtStart==""||txtStart.length==0){
							$('#txtStart').focus();
							return;
						}
					}
					var transit = new BMap.TransitRoute(map,{onSearchComplete:function(results){
					   //判断是否有此路线		
					   if(transit.getStatus() != BMAP_STATUS_SUCCESS){  
						   $('#results').html($('#noLine').html());
						   //处理覆盖物
						   companyMap.mapRouteSearch.doOverlay();	   
					   }else{
						   var objText=$(obj).text();
						   if((objText=="返程方案"&&sign==0)||(objText=="返程方案"&&sign==6)){
								companyMap.mapRouteSearch.getTransitResults($('#txtStart').val(),results,transit,7);
								$('#txtEnd').val($('#txtStart').val());
						   }else{	
							   companyMap.mapRouteSearch.getTransitResults($('#txtStart').val(),results,transit,0); 
						   }
					   } 
					   companyMap.ajaxbg.hide();					   
					}});
					//执行本地查询回调，选择直接公交查询还是结果提示面板选择查询
					if(sign==0){
						companyMap.localResult=[];
						companyMap.straightSearch=false;
						if(companyMap.localResult.length==0)
						{
							companyMap.ajaxbg.show();
							companyMap.mapRouteSearch.localSearchResult($('#txtStart').val(),sign,p0,p1,(function(transit,p0,p1){
								return function()
								{
									if(companyMap.straightSearch){
										if(companyMap.tempLocalPoint!=null){
										   transit.search(companyMap.tempLocalPoint,new BMap.Point(p0, p1)); 
										}else{
											transit.search($('#txtStart').val(),new BMap.Point(p0, p1));
										}
										companyMap.tempPoint=null;
									}else{
										$('#results').html(companyMap.localResult.join(""));
										//处理覆盖物
										companyMap.mapRouteSearch.doOverlay();
										//分页
										companyMap.mapRouteSearch.goPage(1,7);
									}					   
								}
							})(transit,p0,p1));
						}
					}
					if(sign==6){
						companyMap.ajaxbg.show();
						//切换返程
						if($(obj).text()=="返程方案")
						{
							//起点或终点移动之后，并且点击切换公交
							if(companyMap.tempPoint!=null&&sign==6){
								transit.search(new BMap.Point(p0, p1),companyMap.tempPoint);
							}else{
								if(companyMap.tempLocalPoint!=null){
									transit.search(new BMap.Point(p0, p1),companyMap.tempLocalPoint);
								}else{
									transit.search(new BMap.Point(p0, p1),$('#txtStart').val());
								}
								companyMap.tempPoint=null;
							}
						}else{
							if(companyMap.tempPoint!=null&&sign==6){
								transit.search(companyMap.tempPoint,new BMap.Point(p0, p1));
							}else{
								if(companyMap.tempLocalPoint!=null){
									transit.search(companyMap.tempLocalPoint,new BMap.Point(p0, p1));
								}else{
									transit.search($('#txtStart').val(),new BMap.Point(p0, p1));
								}
								companyMap.tempPoint=null;
							}
						}						
					}
				}else if(sign==1||sign==7){
					if(sign==1){
						var endText=$('#txtEnd').val();
						if(endText==""||endText.length==0){
							$('#txtEnd').focus();
							return;
						}
					}
					var transit = new BMap.TransitRoute(map, {onSearchComplete: function(results){
					   //判断是否有此路线		
					   if(transit.getStatus() != BMAP_STATUS_SUCCESS){  
						   $('#results').html($('#noLine').html());
						   //处理覆盖物
						   companyMap.mapRouteSearch.doOverlay();	   
					   }else{
						   var objText=$(obj).text();
						   if((objText=="返程方案"&&sign==1)||(objText=="返程方案"&&sign==7)){
								companyMap.mapRouteSearch.getTransitResults($('#txtEnd').val(),results,transit,6);
								$('#txtStart').val($('#txtEnd').val());
						   }else{
								companyMap.mapRouteSearch.getTransitResults($('#txtEnd').val(),results,transit,1);
						   }
					   }
					   companyMap.ajaxbg.hide();				
					}});
					if(sign==1)
					{
						if(companyMap.localResult.length==0){
							companyMap.ajaxbg.show();
							companyMap.mapRouteSearch.localSearchResult($('#txtEnd').val(),sign,p0,p1,(function(transit,p0,p1){
								return function()
								{
									if(companyMap.straightSearch){
										if(companyMap.tempLocalPoint!=null){
											transit.search(new BMap.Point(p0, p1),companyMap.tempLocalPoint);
										}else{
											transit.search(new BMap.Point(p0, p1),$('#txtEnd').val());
										}
										companyMap.tempPoint=null;
									}else{
										$('#results').html(companyMap.localResult.join(""));
										//处理覆盖物
										companyMap.mapRouteSearch.doOverlay();
										//分页
										companyMap.mapRouteSearch.goPage(1,7);
									}					   
								}
							})(transit,p0,p1));
						}
					}
					if(sign==7){
						companyMap.ajaxbg.show();
						//切换返程
						if($(obj).text()=="返程方案"){
							//起点或终点移动之后，并且点击切换公交
							if(companyMap.tempPoint!=null&&sign==7){
								transit.search(companyMap.tempPoint,new BMap.Point(p0, p1)); 
							}else{
								if(companyMap.tempLocalPoint!=null){
									transit.search(companyMap.tempLocalPoint,new BMap.Point(p0, p1));
								}else{
									transit.search($('#txtEnd').val(),new BMap.Point(p0, p1));
								}
								companyMap.tempPoint=null;
							}
						}else{
							 if(companyMap.tempPoint!=null&&sign==7){
								transit.search(new BMap.Point(p0, p1),companyMap.tempPoint);
							 }else{
								if(companyMap.tempLocalPoint!=null){
									transit.search(new BMap.Point(p0, p1),companyMap.tempLocalPoint);
								}else{
									transit.search(new BMap.Point(p0, p1),$('#txtEnd').val());
								}
								companyMap.tempPoint=null;
							 }
						 }
					 }
				}else{
					$('#results').html($('#noLine').html());
					//处理覆盖物
					companyMap.mapRouteSearch.doOverlay();
					return;
				}
			},
			searchDriver:function(obj){
				var json = companyMap.markerArr[0];
				var p0 = json.point.split("|")[0];
				var p1 = json.point.split("|")[1];
				var sign = $(obj).attr("val");
				if(sign==2||sign==8){
					 if(sign==2){
						var startText=$('#txtStart').val();
						if(startText==""||startText.length==0){
							$('#txtStart').focus();
							return;
						}
					}  
					var driving = new BMap.DrivingRoute(map,{renderOptions:{map: map, autoViewport: true}});
					driving.setSearchCompleteCallback(function(results){
						  if (driving.getStatus() == BMAP_STATUS_SUCCESS){
							   var objText=$(obj).text();
							   if((objText=="返程方案"&&sign==2)||(objText=="返程方案"&&sign==8)){
									companyMap.mapRouteSearch.getDrivingResults($('#txtStart').val(),results,driving,9); 
									$('#txtEnd').val($('#txtStart').val());
							   }else{
								   companyMap.mapRouteSearch.getDrivingResults($('#txtStart').val(),results,driving,2); 
							   }
						  }else{
							 $('#results').html($('#noLine').html());
							 //处理覆盖物
							 companyMap.mapRouteSearch.doOverlay();
							 return;   
						  }
						  companyMap.ajaxbg.hide();
				   });
				   //本地查询回到
				   if(sign==2){
						companyMap.localResult=[];companyMap.straightSearch=false;
						if(companyMap.localResult.length==0)
						{
							companyMap.ajaxbg.show();
							companyMap.mapRouteSearch.localSearchResult($('#txtStart').val(),sign,p0,p1,(function(driving ,p0,p1){
								return function()
								{
									if(companyMap.straightSearch){
										if(companyMap.tempLocalPoint!=null){
											driving.search(companyMap.tempLocalPoint,new BMap.Point(p0, p1));
										}else{
											driving.search($('#txtStart').val(),new BMap.Point(p0, p1));
										}
										companyMap.tempPoint=null;
									}else{
										$('#results').html(companyMap.localResult.join(""));
										//处理覆盖物
										companyMap.mapRouteSearch.doOverlay();
										//分页
										companyMap.mapRouteSearch.goPage(1,7);
									}					   
								}
							})(driving,p0,p1));
						}
					}
					if(sign==8)
					{
						companyMap.ajaxbg.show();
						//切换方案
						if($(obj).text()=="返程方案"){
							if(companyMap.tempPoint!=null&&sign==8){
								driving.search(new BMap.Point(p0, p1),companyMap.tempPoint);
							}else{
								if(companyMap.tempLocalPoint!=null){
									driving.search(new BMap.Point(p0, p1),companyMap.tempLocalPoint);
								}else{
									driving.search(new BMap.Point(p0, p1),$('#txtStart').val());
								}
								companyMap.tempPoint=null;
							}  
						}else{
							if(companyMap.tempPoint!=null&&sign==8){
								driving.search(companyMap.tempPoint,new BMap.Point(p0, p1));
							}else{
								if(companyMap.tempLocalPoint!=null){
									driving.search(companyMap.tempLocalPoint,new BMap.Point(p0, p1));
								}else{
									driving.search($('#txtStart').val(),new BMap.Point(p0, p1));
								}
								companyMap.tempPoint=null;
							}  
						}
					}
				}else if(sign==3||sign==9){
					if(sign==3){
						var endText=$('#txtEnd').val();
						if(endText==""||endText.length==0){
							$('#txtEnd').focus();
							return;
						}
					}
					var driving = new BMap.DrivingRoute(map,{renderOptions:{map: map, autoViewport: true}});
						driving.setSearchCompleteCallback( function(results){
						   if (driving.getStatus() == BMAP_STATUS_SUCCESS){
							   var objText=$(obj).text(); 
							   if((objText=="返程方案"&&sign==3)||(objText=="返程方案"&&sign==9)){
									companyMap.mapRouteSearch.getDrivingResults($('#txtEnd').val(),results,driving,8); 
									$('#txtStart').val($('#txtEnd').val());
							   }else{
									companyMap.mapRouteSearch.getDrivingResults($('#txtEnd').val(),results,driving,3);
							   }
							}else{
								$('#results').html($('#noLine').html());
							   //处理覆盖物
							   companyMap.mapRouteSearch.doOverlay(); 
							}
							companyMap.ajaxbg.hide();
					});
					//本地查询回到
					if(sign==3){
						if(companyMap.localResult.length==0)
						{
							companyMap.ajaxbg.show();
							companyMap.mapRouteSearch.localSearchResult($('#txtEnd').val(),sign,p0,p1,(function(driving ,p0,p1){
								return function()
								{
									if(companyMap.straightSearch){
										if(companyMap.tempLocalPoint!=null){
											driving.search(new BMap.Point(p0, p1),companyMap.tempLocalPoint);
										}else{
											driving.search(new BMap.Point(p0, p1),$('#txtEnd').val());
										}
										companyMap.tempPoint=null;
									}else{
										$('#results').html(companyMap.localResult.join(""));
										//处理覆盖物
										companyMap.mapRouteSearch.doOverlay();
										//分页
										companyMap.mapRouteSearch.goPage(1,7);
									}					   
								}
							})(driving,p0,p1));
						}
				   }
				   if(sign==9){
					   companyMap.ajaxbg.show();
					   if($(obj).text()=="返程方案"){
							if(companyMap.tempPoint!=null&&sign==9){
								driving.search(companyMap.tempPoint,new BMap.Point(p0, p1));
							}else{
								if(companyMap.tempLocalPoint!=null){
									driving.search(companyMap.tempLocalPoint,new BMap.Point(p0, p1));
								}else{
									driving.search($('#txtEnd').val(),new BMap.Point(p0, p1));
								}
								companyMap.tempPoint=null;
							}  
					   }else{
							if(companyMap.tempPoint!=null&&sign==9){
								driving.search(new BMap.Point(p0, p1),companyMap.tempPoint);
							}else{
								if(companyMap.tempLocalPoint!=null){
									driving.search(new BMap.Point(p0, p1),companyMap.tempLocalPoint);
								}else{
									driving.search(new BMap.Point(p0, p1),$('#txtEnd').val());
								}
								companyMap.tempPoint=null;
							}  
					   }
				   }
				}else{
					$('#results').html($('#noLine').html());
					//处理覆盖物
					companyMap.mapRouteSearch.doOverlay();
				}
			},
			getTransitResults:function(spod,results,transit,sign){
				//隐藏
				$('#page').hide();
				//清空结果面板
				$('#results').html('');
				//匹配括号里面的详细介绍
				var pattem=/\((\w|\W)*\)/;
				//创建切换方案
				var chooseScheme=document.createElement("div");
				//切换到对应的驾车,返程
				var drivSign=8,returnSign=6;
				if(sign==0||sign==6){
					drivSign=8;returnSign=6;
				}else if(sign==1||sign==7){
					drivSign=9;returnSign=7;
				}
				//方案切换
				chooseScheme.innerHTML="<a id='transitResult' href='javascript:void(0)' onclick='companyMap.mapRouteSearch.searchDriver(this)' val='"+drivSign+"' class='btn2'><span>驾车方案</span></a>&nbsp;&nbsp;" + "<a id='busReturnResult' href='javascript:void(0)' onclick='companyMap.mapRouteSearch.searchBus(this)' val='"+returnSign+"' class='btn2'><span>返程方案</span></a>";
				chooseScheme.className="resultTopBtn";
				document.getElementById('results').appendChild(chooseScheme);
				//公交方案包含所有的公交选择内容
				var transitAllScheme=document.createElement("div");
				transitAllScheme.className="busLineLst";
				var company_address,start_title;
				//获取当前标注点的公司地址
				var json =companyMap.markerArr[0];
				var companyAddress=json.title.split("|")[1];
				if(companyAddress.length>16){
					company_address=companyAddress.substring(0,16)+"...";
				}else{
					company_address=companyAddress;
				}
				if(spod.length>16){
					start_title=spod.substring(0,16)+"...";
				}else{
					start_title=spod;
				}
				//循环添加内容到结果面板
				for (var index = 0; index < results.getNumPlans(); index++){
					//每个公交方案
					var transitScheme = document.createElement("div");
					transitScheme.className="busLine";
					//每个公交方案的内容
					var transitTitle = document.createElement("div");
					//调用绘制路线的方法
					var callDLFunc = companyMap.mapRouteSearch.drawLine(map,results,index,transitTitle,transit,sign);
					//给公交方法添加单击事件
					transitTitle.onclick=callDLFunc;
					transitTitle.className="busLineName";
					var tempHtml=results.getPlan(index);
					switch(results.getPlan(index).getNumLines()){
						case 1:
							transitTitle.innerHTML=(index + 1) + ". "+tempHtml.getLine(0).title.replace(pattem,"");
						break;
						case 2:
							transitTitle.innerHTML =(index + 1) + ". " + tempHtml.getLine(0).title.replace(pattem,"")+"→"+tempHtml.getLine(1).title.replace(pattem,"");
						break;
						case 3:
							transitTitle.innerHTML =(index + 1) + ". " + tempHtml.getLine(0).title.replace(pattem,"")+"→"+tempHtml.getLine(1).title.replace(pattem,"")+"→"+tempHtml.getLine(2).title.replace(pattem,"")
						break;
						default:
							transitTitle.innerHTML=(index + 1) + "."+tempHtml.getLine(0).title.replace(pattem,"");
						break;
					}
					transitTitle.innerHTML+="";
					//公交方案详细内容
					var transitDesc=document.createElement("div");
					transitDesc.className="busLinePro";
					if(sign==0||sign==6)
					{
							transitDesc.innerHTML="<p class='busLineLength'>"+"约"+results.getPlan(index).getDuration(true)+"/"+ results.getPlan(index).getDistance(true)+"</p>"+
							"<p class='startStation' title='"+spod+"'>"+start_title+"</p>"+
							"<p>"+results.getPlan(index).getDescription()+"</p>"
							+"<p class='endStation' title='"+companyAddress+"'>"+company_address+"</p>";
					}
					else if(sign==1||sign==7)
					{
						transitDesc.innerHTML="<p class='busLineLength'>"+"约"+results.getPlan(index).getDuration(true)+"/"+ results.getPlan(index).getDistance(true)+"</p>"+
								"<p class='startStation' title='"+companyAddress+"'>"+company_address+"</p>"+
								"<p>"+results.getPlan(index).getDescription()+"</p>"
								+"<p class='endStation' title='"+spod+"'>"+start_title+"</p>";
					}
					//为每个方案追加标题
					transitScheme.appendChild(transitTitle);
					//为每个方案追加方案详细内容
					transitScheme.appendChild(transitDesc);
					//所有方案追加到一起
					transitAllScheme.appendChild(transitScheme);
					//将所有方案追加到结果面板当中
					document.getElementById('results').appendChild(transitAllScheme);
					//默认第一个方案触发单击事件
					if(index == 0){transitTitle.onclick();}
					
				}
				//将重新查询追加到结果面板当中
				var resetSerach=document.createElement("div");
				resetSerach.className="againCheck";
				resetSerach.innerHTML=$('#reSearch').html();
				document.getElementById('results').appendChild(resetSerach);
			},
			getDrivingResults:function(spod,results,driv,sign){
			   //隐藏
				$('#page').hide();
				//清空结果面板
				$('#results').html('');
				var company_address,start_title;
				//获取当前标注点的公司地址
				var json =companyMap.markerArr[0];
				var companyAddress=json.title.split("|")[1];
				if(companyAddress.length>16){
					company_address=companyAddress.substring(0,16)+"...";
				}else{
					company_address=companyAddress;
				}
				if(spod.length>16){
					start_title=spod.substring(0,16)+"...";
				}else{
					start_title=spod;
				}
				// 获取第一条方案
				var plan = results.getPlan(0);
				// 获取方案的驾车线路
				var route = plan.getRoute(0);
				//创建切换方案
				var chooseScheme=document.createElement("div");
				//切换到对应的公交,返程
				var drivSign=6,returnSign=8;
				if(sign==2||sign==8){
					drivSign=6;returnSign=8;
				}else if(sign==3||sign==9){
					drivSign=7;returnSign=9;
				}
				//方案切换
				chooseScheme.innerHTML="<a id='busResult' href='javascript:void(0)' onclick='companyMap.mapRouteSearch.searchBus(this)' val='"+drivSign+"' class='btn2'><b class='L'></b><b class='R'></b>公交方案</a>&nbsp;&nbsp;"+
										"<a id='drivReturnResult' href='javascript:void(0)' onclick='companyMap.mapRouteSearch.searchDriver(this)' val='"+returnSign+"' class='btn2'><b class='L'></b><b class='R'></b>返程方案</a>";
				chooseScheme.className="resultTopBtn";
				document.getElementById('results').appendChild(chooseScheme);
				//创建包含所有驾车路线
				var drivAll=document.createElement("div");
				drivAll.className="driver";
				//创建全程显示内容
				var allDistance=document.createElement("p");
				allDistance.innerHTML="全程：约"+plan.getDuration(true)+"/"+plan.getDistance(true);
				drivAll.appendChild(allDistance);
				//创建路程起点
				var distanceStart=document.createElement("p");
				distanceStart.className="startStation";
				if(sign==2||sign==8){
				   distanceStart.setAttribute("title",spod);
				   distanceStart.innerHTML=start_title;
				}else if(sign==3||sign==9){
				   distanceStart.setAttribute("title",companyAddress);
				   distanceStart.innerHTML=company_address;
				}
				drivAll.appendChild(distanceStart);
				//包含所有驾车方案
				var drivAllScheme=document.createElement("ul"); 
				drivAllScheme.className="driverLst";
				// 获取每个关键步骤,并输出到页面
				for (var i = 0; i < route.getNumSteps(); i ++){
					var drivScheme=document.createElement("li");
					var callFun=companyMap.mapRouteSearch.drawLine(map,results,i,drivScheme,driv,sign); 
					drivScheme.onclick=callFun;
					drivScheme.innerHTML=(i + 1) + ". " + route.getStep(i).getDescription();
					drivAllScheme.appendChild(drivScheme);
					if(i==0){drivScheme.onclick();}
				}
				//把每个方案步骤追加到一起
				drivAllScheme.appendChild(drivScheme);
				drivAll.appendChild(drivAllScheme);
				//创建路程终点
				var distanceEnd=document.createElement("p");
				distanceEnd.className="endStation";
				if(sign==2||sign==8){
				   distanceEnd.setAttribute("title",companyAddress);
				   distanceEnd.innerHTML=company_address;
				}else if(sign==3||sign==9){
				   distanceEnd.setAttribute("title",spod);
				   distanceEnd.innerHTML=start_title;
				}
				//追加终点
				drivAll.appendChild(distanceEnd);
				//追加所有方案步骤到结果面板
				document.getElementById('results').appendChild(drivAll);
				//追加重新查询到结果面板
				var resetSerach=document.createElement("div");
				resetSerach.className="againCheck";
				resetSerach.innerHTML=$('#reSearch').html();
				document.getElementById('results').appendChild(resetSerach); 
			},
			drawLine:function(aMap,results,index,obj,traffic,sign){
		 		return function(){
					var opacity = 0.6,planObj;
					if(sign==2||sign==3||sign==8||sign==9){
						planObj=results.getPlan(0);
					}else{
						planObj = results.getPlan(index);
					}
					var bounds = new Array();
					var addMarkerFun = function(point,imgType,index,title){
						var url,width,height,myIcon;
						// imgType:1的场合，为起点和终点的图；2的场合为过程的图形
						if(imgType == 1){
							url = "http://cdn.597.com/www/images/map/dest_markers.png";
							width = 42;height = 34;
							myIcon = new BMap.Icon(url,new BMap.Size(width, height),{anchor: new BMap.Size(14, 32),imageOffset: new BMap.Size(0, 0 - index * height)});
						}else{
							url = "http://cdn.597.com/www/images/map/trans_icons.png";
							width = 22;height = 25;
							var d = 25,cha = 0,jia = 0;
							if(index == 2){
								d = 21;cha = 5;jia = 1;
							}
							myIcon = new BMap.Icon(url,new BMap.Size(width, d),{anchor: new BMap.Size(10, (11 + jia)),imageOffset: new BMap.Size(0, 0 - index * height - cha)});
						}
						var marker = new BMap.Marker(point, {icon: myIcon});
						if(title != null && title != ""){
							marker.setTitle(title);
						}
						// 起点和终点放在最上面
						if(imgType == 1){
							marker.setTop(true);
						}
						aMap.addOverlay(marker);
						//反地址解析
						var gc = new BMap.Geocoder();  
						if(sign==0||sign==6){
							if(index==0){
								marker.enableDragging();
								marker.addEventListener("dragend",function(e){
									companyMap.ajaxbg.show();
									//处理覆盖物
									companyMap.mapRouteSearch.doOverlay();
									//重新检索
									traffic.search(marker.getPosition(),results.getEnd().point);
									//拖动后存拖动地点坐标
									companyMap.tempPoint=marker.getPosition();
									//反地址解析
									gc.getLocation(marker.getPosition(), function(rs){
										var addComp = rs.addressComponents;
										if(sign==6){
											if(addComp.street){
												$('#txtEnd').val(addComp.street);
											}else{
												$('#txtEnd').val("未知路段");
											}
										}else{
											if(addComp.street){
												$('#txtStart').val(addComp.street);
											}else{
												$('#txtStart').val("未知路段");
											}
										}
									});		
								});
							}
						}
						else if(sign==1||sign==7)
						{
							if(index==1){
								marker.enableDragging();
								marker.addEventListener("dragend",function(e){
									companyMap.ajaxbg.show();
									//处理覆盖物
									companyMap.mapRouteSearch.doOverlay();
									//重新检索
									traffic.search(results.getStart().point,marker.getPosition()); 
									//拖动后存拖动地点坐标
									companyMap.tempPoint=marker.getPosition();
									//反地址解析
									gc.getLocation(marker.getPosition(), function(rs){
										var addComp = rs.addressComponents;
										if(sign==7){
											if(addComp.street){
												$('#txtStart').val(addComp.street);
											}else{
												$('#txtStart').val("未知路段");
											}
										}else{
											if(addComp.street){
												$('#txtEnd').val(addComp.street);
											}else{
												$('#txtEnd').val("未知路段");
											}
										}
									});
								});
							}
						  }
						  else if(sign==2||sign==8)
						  {
							if(index==0){
							   marker.enableDragging();
							   marker.addEventListener("dragend",function(e){
									companyMap.ajaxbg.show();
									//处理覆盖物
									companyMap.mapRouteSearch.doOverlay();
									//重新检索
									traffic.search(marker.getPosition(),results.getEnd().point);
									//拖动后存拖动地点坐标
									companyMap.tempPoint=marker.getPosition();
									
									//反地址解析
									gc.getLocation(marker.getPosition(), function(rs){
										 var addComp = rs.addressComponents;
										 if(sign==8){
											if(addComp.street){
												$('#txtEnd').val(addComp.street);
											}else{
												$('#txtEnd').val("未知路段");
											}
										 }else{
											if(addComp.street){
												$('#txtStart').val(addComp.street);
											}else{
												$('#txtStart').val("未知路段");
											}
										 }
									});  
								});
							 }
						  }
						  else if(sign==3||sign==9)
						  {
							if(index==1){
							   marker.enableDragging();
							   marker.addEventListener("dragend",function(e){
									companyMap.ajaxbg.show();
									//处理覆盖物
									companyMap.mapRouteSearch.doOverlay();
									//重新检索
									traffic.search(results.getStart().point,marker.getPosition()); 
									//拖动后存拖动地点坐标
									companyMap.tempPoint=marker.getPosition();
									
									//反地址解析
									gc.getLocation(marker.getPosition(), function(rs){
										var addComp = rs.addressComponents;
										if(sign==9){
											 if(addComp.street){
												$('#txtStart').val(addComp.street);
											 }else{
												$('#txtStart').val("未知路段");
											 }
										 }else{
											 if(addComp.street){
												$('#txtEnd').val(addComp.street);
											 }else{
												$('#txtEnd').val("未知路段");
											 }
										 }
									});				
							   });
						   }
						}
					}
					var addPoints = function(points){
						for(var i = 0; i < points.length; i++){
							bounds.push(points[i]);
						}
					}
					//清空覆盖物
					aMap.clearOverlays();
					// 绘制驾车步行线路
					for (var i = 0; i < planObj.getNumRoutes(); i ++){
						var route = planObj.getRoute(i);
						if (route.getDistance(false) > 0){
							if(sign==2||sign==3||sign==8||sign==9){
								 addPoints(route.getPath());
								 aMap.addOverlay(new BMap.Polyline(route.getPath(),  {strokeColor: "#0000f0",strokeOpacity:opacity,strokeWeight:6,enableMassClear:true}));
							}else{
								// 步行线路有可能为0
								aMap.addOverlay(new BMap.Polyline(route.getPath(), {strokeStyle:"dashed",strokeColor: "#30a208",strokeOpacity:0.75,strokeWeight:4,enableMassClear:true}));
							}
						}
					}
					if(sign==0||sign==1||sign==6||sign==7)
					{
						// 绘制公交线路
						for (i = 0; i < planObj.getNumLines(); i ++){
							var line = planObj.getLine(i);
							addPoints(line.getPath());
							// 公交
							if(line.type == BMAP_LINE_TYPE_BUS){
								// 上车
								addMarkerFun(line.getGetOnStop().point,2,2,line.getGetOnStop().title);
								// 下车
								addMarkerFun(line.getGetOffStop().point,2,2,line.getGetOffStop().title);
								// 地铁
							}else if(line.type == BMAP_LINE_TYPE_SUBWAY){
								// 上车
								addMarkerFun(line.getGetOnStop().point,2,3,line.getGetOnStop().title);
								// 下车
								addMarkerFun(line.getGetOffStop().point,2,3,line.getGetOffStop().title);
							}
							aMap.addOverlay(new BMap.Polyline(line.getPath(), {strokeColor: "#0000f0",strokeOpacity:opacity,strokeWeight:6,enableMassClear:true}));
						}
					}
					aMap.setViewport(bounds);
					//设定标注为不打开信息窗口
					companyMap.markerArr[0].isOpen=0;
					//清除后重新加载标注
					companyMap.mapInit.addMarker();
					// 终点
					addMarkerFun(results.getEnd().point,1,1);
					// 开始点
					addMarkerFun(results.getStart().point,1,0);
					if(sign==0||sign==1||sign==6||sign==7)
					{
						//关闭或者打开  
						var span=$(obj).siblings(".busLinePro");
						var prevSpan=$(obj).parent().siblings().children(".busLinePro");
						if(span.is(':visible')){
							span.hide();
						}else{
							span.show();
							prevSpan.hide();
						}
					}		   
				 }
			},
			localSearchResult:function(txtStart,sign,p0,p1,fn){
			   var local = new BMap.LocalSearch(map,{
				 onSearchComplete: function(results){
					// 判断状态是否正确
					if (local.getStatus() == BMAP_STATUS_SUCCESS){
						for(var i=0;i<results.getCurrentNumPois();i++){
							if(txtStart==results.getPoi(i).title&&results.getCurrentNumPois()==1){
							   companyMap.straightSearch=true;
							}
						}
						if(companyMap.straightSearch==false){
							if(companyMap.localResult.length==0){
								var start_title,company_address;
								//获取当前标注点的公司地址
								var json =companyMap.markerArr[0];
								var companyAddress=json.title.split("|")[1];
								if(companyAddress.length>16){
									company_address=companyAddress.substring(0,16)+"...";
								}else{
									company_address=companyAddress;
								}
								if(txtStart.length>16){
									start_title=txtStart.substring(0,16)+"...";
								}else{
									start_title=txtStart;
								}   
								companyMap.localResult.push('<div class="linkCheckResult">');
								if(sign==0||sign==2){
									companyMap.localResult.push('<p class="startTit" title="'+txtStart+'">'+start_title+'</p>');
								}else if(sign==1||sign==3){
									companyMap.localResult.push('<p class="endTit" title="'+txtStart+'">'+start_title+'</p>');
								}
								companyMap.localResult.push('<div class="linkCheckResultLst">');
								companyMap.localResult.push("<ul id='ulResults'>");
								var j=0;
								for(var i=0;i<results.getCurrentNumPois();i++)
								{
									if(results.getPoi(i).type!=BMAP_POI_TYPE_BUSSTOP&&results.getPoi(i).type!=BMAP_POI_TYPE_SUBSTOP)
									{
										if(results.getPoi(i).address!=undefined){
											companyMap.localResult.push('<li id="list' + j + '" onmouseout="companyMap.mapRouteSearch.hiddenStart('+j+","+sign+')" onmouseover="companyMap.mapRouteSearch.choiceStart('+j+","+sign+')">');
											if(results.getPoi(i).title.length>20){
												companyMap.localResult.push('<ptitle="'+results.getPoi(i).title+'" style="color:#03609B;" onclick="companyMap.mapRouteSearch.choiceSearch('+"'"+results.getPoi(i).title+"','"+results.getPoi(i).point.lng+"','"+results.getPoi(i).point.lat+"',"+sign+",'"+p0+"','"+p1+"'"+')">' + results.getPoi(i).title.substring(0,20).replace(new RegExp(results.keyword,"g"),'<b>' + results.keyword + '</b>') + '...</p>');
											}else{
												companyMap.localResult.push('<p title="'+results.getPoi(i).title+'" style="color:#03609B;" onclick="companyMap.mapRouteSearch.choiceSearch('+"'"+results.getPoi(i).title+"','"+results.getPoi(i).point.lng+"','"+results.getPoi(i).point.lat+"',"+sign+",'"+p0+"','"+p1+"'"+')">' + results.getPoi(i).title.replace(new RegExp(results.keyword,"g"),'<b>' + results.keyword + '</b>') + '</p>');
											}
											if(results.getPoi(i).address!=undefined){
												if(results.getPoi(i).address.length>20){
													companyMap.localResult.push('<p title="'+results.getPoi(i).address+'">' + results.getPoi(i).address.substring(0,20) + '...</p>');
												}else{
													companyMap.localResult.push('<p title="'+results.getPoi(i).address+'">' + results.getPoi(i).address + '</p>');
												}
											}
											companyMap.localResult.push('<div class="resultsBtn" id="btnChoiceStart' + j + '" style="display:none;">'+
											'<a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.choiceSearch('+"'"+results.getPoi(i).title+"','"+results.getPoi(i).point.lng+"','"+results.getPoi(i).point.lat+"',"+sign+",'"+p0+"','"+p1+"'"+')"  class="btn2"><b class="L"></b><b class="R"></b>选为起点</a></div>');
											companyMap.localResult.push('<div class="resultsBtn" id="btnChoiceEnd' + j + '" style="display:none;">'+
											'<a href="javascript:void(0)" onclick="companyMap.mapRouteSearch.choiceSearch('+"'"+results.getPoi(i).title+"','"+results.getPoi(i).point.lng+"','"+results.getPoi(i).point.lat+"',"+sign+",'"+p0+"','"+p1+"'"+')"  class="btn2"><b class="L"></b><b class="R"></b>选为终点</a></div>');
											companyMap.localResult.push('</li>');
											j++;
										}
									}
								}
								companyMap.localResult.push("</ul>");
								companyMap.localResult.push("</div>");
								if(sign==0||sign==2){
									companyMap.localResult.push('<p class="endTit" title="'+companyAddress+'">'+company_address+'</p>');
								}else if(sign==1||sign==3){
									companyMap.localResult.push('<p class="startTit" title="'+companyAddress+'">'+company_address+'</p>');
								}
								//追加重新查询到结果面板
								companyMap.localResult.push('<div class="lstBot">');
								//分页
								companyMap.localResult.push('<div id="page" class="mappage"></div>');
								//返回按钮
								companyMap.localResult.push( $('#reStep').html());
								companyMap.localResult.push('</div>');
								companyMap.localResult.push('</div>');
							}
						}
						if(typeof fn=="function"){ fn();}
					}else{
						$('#results').html($('#noLine').html());
						//处理覆盖物
						companyMap.mapRouteSearch.doOverlay();
					}
					companyMap.ajaxbg.hide();
				 }
				});
				local.setPageCapacity(50);
				local.search(txtStart); 
			},
			doOverlay:function(){
				//清空覆盖物
				map.clearOverlays();
				//设定标注为不打开信息窗口
				companyMap.markerArr[0].isOpen=0;
				//清除后重新加载标注
				companyMap.mapInit.addMarker();
				//隐藏分页
				$('#page').hide(); 
			},
			choiceStart:function(i,sign){
				if(sign==0||sign==2){
					$('#btnChoiceStart'+i).show();
				}else if(sign==1||sign==3)
				{
					 $('#btnChoiceEnd'+i).show(); 
				}   
			},
			hiddenStart:function(i,sign){
				if(sign==0||sign==2){
					$('#btnChoiceStart'+i).hide();
				}else if(sign==1||sign==3){
					 $('#btnChoiceEnd'+i).hide(); 
				}	
			},
			returnStep:function()
			{
				 if(companyMap.localResult.length==0){
					companyMap.mapRouteSearch.reSearch();
				 }else{
					$('#results').html(companyMap.localResult.join(""));
					companyMap.mapRouteSearch.goPage(1,7);
				 }
			},
			tabLine:function(obj)
			{
				var index=$(obj).attr('val');
				if(index==13){
					$('#divPanel1').hide();
					$('#divPanel2').show();
				} else if(index==14){
					$('#divPanel2').hide();
					$('#divPanel1').show();
				}
			},
			keydownSearch:function(event)
			{
				if(event.keyCode==13){
					//IE
					if(document.all) { 
						document.getElementById('btnBus').click();
					}else { 
						var evt = document.createEvent("MouseEvents"); 
						evt.initEvent("click", true, true); 
						document.getElementById('btnBus').dispatchEvent(evt); 
					}
				}
			},
			keydownSearchInResult:function(event,obj)
			{
				if(event.keyCode==13){   
					var index=$(obj).attr("val");
					if(index==11){
						//IE
						if(document.all) { 
							document.getElementById('btnBusStartInResult').click();
						}else { 
							var evt = document.createEvent("MouseEvents"); 
							evt.initEvent("click", true, true); 
							document.getElementById('btnBusStartInResult').dispatchEvent(evt); 
						}
					}else if(index==12){
						//IE
						if(document.all) { 
							document.getElementById('btnBusEndInResult1').click();
						}else{ 
							var evt = document.createEvent("MouseEvents"); 
							evt.initEvent("click", true, true); 
							document.getElementById('btnBusEndInResult').dispatchEvent(evt); 
						}
					}
				}
			},
			reSearch:function()
			{
				companyMap.markerArr = [];
				companyMap.tempPoint=null;
				companyMap.tempLocalPoint=null;
				companyMap.straightSearch=false; 
				companyMap.localResult=[];
				map.clearOverlays();
				$('#txtStart,#txtEnd').val('');
				$('#page,#reStep').hide();
				$('#results').html($('#initResultPanel').html());
				//创建地图
				var showMapY='{$com[comLongitude]}';
				var showMapX='{$com[comLatitude]}';
				var showMapMsg='{$com[cname]}|{$com[comAddress]}';
				if (!showMapY || !showMapX){
					companyMap.mapInit.botSearch();
					return false;
				}
				var showMapZoom=16;
				var point = new BMap.Point(showMapY,showMapX);			// 创建中心点坐标
				map.centerAndZoom(point,showMapZoom);					 //设定地图的中心点和坐标并将地图显示在地图容器中 
				companyMap.markerArr.push({title:showMapMsg, point: showMapY + "|" + showMapX, isOpen: 1, icon: { w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5} });
				companyMap.markerArr[0].isOpen=0;
				//创建标注
				companyMap.mapInit.addMarker();
				//添加控件
				companyMap.mapInit.addMapControl();
				//设置函数事件
				companyMap.mapInit.setMapEvent();
			},
			choiceSearch:function(choiceContent,lng,lat,sign,p0,p1){
				companyMap.mapRouteSearch.doOverlay();
				var transit;
				if(sign==0||sign==1)
				{
					transit = new BMap.TransitRoute(map,{
						onSearchComplete:function(results){
							//判断是否有此路线		
						   if(transit.getStatus() != BMAP_STATUS_SUCCESS){  
							   $('#results').html($('#noLine').html());
							   //处理覆盖物
							   companyMap.mapRouteSearch.doOverlay();	  
						   }else{
							  if(sign==0){
								  companyMap.mapRouteSearch.getTransitResults($('#txtStart').val(),results,transit,sign);
							  }else if(sign==1){
								  companyMap.mapRouteSearch.getTransitResults($('#txtEnd').val(),results,transit,sign);
							  } 
						   } 
						   companyMap.ajaxbg.hide();					   
						}
					});
				}
				//声明驾车对象
				var driving;
				if(sign==2||sign==3){
					driving = new BMap.DrivingRoute(map,{renderOptions:{map: map, autoViewport: true}});
					driving.setSearchCompleteCallback(function(results){
						  if (driving.getStatus() == BMAP_STATUS_SUCCESS){
							  if(sign==2){
								  companyMap.mapRouteSearch.getDrivingResults($('#txtStart').val(),results,driving,sign);
							  }else if(sign==3){
								  companyMap.mapRouteSearch.getDrivingResults($('#txtEnd').val(),results,driving,sign);
							  } 
						  }else{
							   $('#results').html($('#noLine').html());
							   //处理覆盖物
							   companyMap.mapRouteSearch.doOverlay();   
						  }
						  companyMap.ajaxbg.hide();
					   }) 
				}
				companyMap.ajaxbg.show();
				if(sign==0||sign==1){
					if(sign==0){
						transit.search(new BMap.Point(lng, lat),new BMap.Point(p0, p1));
						companyMap.tempLocalPoint=new BMap.Point(lng, lat);
						companyMap.tempPoint=null;
						$('#txtStart').val(choiceContent);
					}else if(sign==1){
						transit.search(new BMap.Point(p0, p1),new BMap.Point(lng, lat));
						companyMap.tempLocalPoint=new BMap.Point(lng, lat);
						companyMap.tempPoint=null;
						$('#txtEnd').val(choiceContent);
					}
					
				}else if(sign==2||sign==3){
				   if(sign==2){
						driving.search(new BMap.Point(lng, lat),new BMap.Point(p0, p1)); 
						companyMap.tempLocalPoint=new BMap.Point(lng, lat);
						companyMap.tempPoint=null;
						$('#txtStart').val(choiceContent);
				   }else if(sign==3)
				   {
						driving.search(new BMap.Point(p0, p1),new BMap.Point(lng, lat));
						companyMap.tempLocalPoint=new BMap.Point(lng, lat); 
						companyMap.tempPoint=null;
						$('#txtEnd').val(choiceContent);
				   }
				}
			},
			searchBusInResults:function(obj){
				var index=$(obj).attr('val');
				if(index==0){
					if($('#txtStartInResults').val()==""){
						$('#txtStartInResults').focus();
						return;
					}
					$('#txtStart').val($('#txtStartInResults').val());
				}else if(index==1){
					if($('#txtEndInResults').val()==""){
						$('#txtEndInResults').focus();
						return;
					}
					$('#txtEnd').val($('#txtEndInResults').val());
				}
				companyMap.mapRouteSearch.searchBus(obj);
			},
			searchDriverInResults:function(obj){
				var index=$(obj).attr('val');
				if(index==2){
					if($('#txtStartInResults').val()==""){
						$('#txtStartInResults').focus();
						return;
					}
					$('#txtStart').val($('#txtStartInResults').val());
				}else if(index==3){
					if($('#txtEndInResults').val()==""){
						$('#txtEndInResults').focus();
						return;
					}
					$('#txtEnd').val($('#txtEndInResults').val());
				}
				companyMap.mapRouteSearch.searchDriver(obj);
			},
			goPage:function(pno,psize){
				$('#page').show().html('');
				var itable = $("#ulResults");
				var num = itable.find("li").length;	   //数据行数
				var totalPage = 0;						//总页数
				var pageSize = psize;					 //每页显示行数
				if(num/pageSize > parseInt(num/pageSize)){   
   					totalPage=parseInt(num/pageSize)+1;  
   				}else{   
   					totalPage=parseInt(num/pageSize);   
   				}   
				var currentPage = pno;							  //当前页数
				var startRow = (currentPage - 1) * pageSize+1;	  //开始显示的行   
   				var endRow = currentPage * pageSize;				//结束显示的行
   				endRow = (endRow > num)? num : endRow;
				for(var i=1;i<=num;i++){
					var irow =  itable.find("#list"+(i-1));
					if(i>=startRow&&i<=endRow){
						irow.css({display:'block'});
					}else{
						irow.css({display:'none'});
					}
				}
				var tempStr = currentPage + "/" + totalPage + "&nbsp;&nbsp;";
				if (currentPage > 1) {
					tempStr += "<span><a href='javascript:void(0)' onClick=\"companyMap.mapRouteSearch.goPage(" + (1) + "," + psize + ")\">首页</a></span>";
				}else {
					tempStr += "<span>首页</span>";
				}
				if (currentPage > 1){
					tempStr += "<span><a href='javascript:void(0)' onClick=\"companyMap.mapRouteSearch.goPage("+(currentPage-1)+","+psize+")\">上一页</a></span>"
				} else{
					tempStr += "<span>上一页</span>";
				}
				if (currentPage < totalPage){
					tempStr += "<span><a href='javascript:void(0)' onClick=\"companyMap.mapRouteSearch.goPage(" + (currentPage + 1) + "," + psize + ")\">下一页</a></span>";
				}else{
					tempStr += "<span>下一页</span>";
				}
				if (currentPage < totalPage) {
					tempStr += "<span><a href='javascript:void(0)' onClick=\"companyMap.mapRouteSearch.goPage(" + (totalPage) + "," + psize + ")\">尾页</a></span>";
				}else{
					tempStr += "<span>尾页</span>";
				}
				//大于每页的数量才显示分页
				if(num>pageSize){
				   $('#page').html(tempStr);
				}
			}   
		}
	}
	companyMap.initialize();
</script>

</body>
</html>