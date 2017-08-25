<style>
.divBus {border: 5px #8E8E8E solid;_background: none;_padding: 0;text-align: left;width: 800px;margin: 0 auto;line-height: 1.5;z-index: 10009;position: fixed;top: 0;left: 0;_position: absolute;background-color: #fff;}
.busCon {border: 1px solid #fff;}
.divBus .busCon .busTop {display: block;background-color: #F3F3F3;border-bottom: 1px #DADADA solid;line-height: 41px;height: 41px;font-size: 16px;padding-left: 15px;color: #444;padding-right: 27px;font-family: "微软雅黑","宋体","SimHei";}
.divBus .busCon .busTop a.busClose {position: absolute;top: 10px;right: 16px;cursor: pointer;width: 16px;height: 16px;font-size: 20px;line-height: normal;color: #333333;text-decoration: none;font-family: Verdana, Geneva, sans-serif;}
.itip {color: #FF7400;font-size: 12px;float: right;margin-right: 20px;line-height: 22px;}
.itip s {text-decoration: none;}
.itip b {font-weight: normal;line-height: normal;color: gray;}
.divBus .busCon .busTop {display: block;background-color: #F3F3F3;border-bottom: 1px #DADADA solid;line-height: 41px;height: 41px;font-size: 16px;padding-left: 15px;color: #444;padding-right: 27px;font-family: "微软雅黑","宋体","SimHei";}
.sbtn {display: inline-block;padding: 4px 15px;border: solid #5BC648 1px;font-size: 14px;color: #fff;line-height: 20px;white-space: nowrap;border-radius: 3px;background: #5BC648;color: #fff;cursor: pointer;margin-left: 15px;}
.busContent {text-align: left;clear: both;height: 470px;min-height: 250px;max-height: 470px;overflow: auto;overflow-x: visible;padding: 15px 10px;}
.busContent .it {margin-bottom: 10px;position: relative;}
.smap {position: absolute;right: 45px;top: 4px;text-decoration: none;cursor: pointer;display: block;color: #fff;background-color: #76C4F2;padding: 3px 10px;border-radius: 3px;font-size: 12px;z-index: 1000;}
.busContent h3 {margin: 0;padding: 0 8px;line-height: 30px;color: #3D6DCC;background-color: #EBF1FB;border: 1px solid #CCDAFD;cursor: pointer;}
.busContent h3 span {float: right;font-weight: normal;font-size: 12px;color: gray;}
.busContent h3 u {font-style: normal;text-decoration: none;font-weight: normal;color: #599CFA;font-size: 12px;}
.busContent h3 i {font-style: normal;font-weight: normal;color: #666;font-size: 12px;margin-left: 8px;}
.busContent .item {margin: 10px auto;margin-bottom: 25px;padding: 0 8px;line-height: 28px;display: none;}
.busContent .ibus {color: #333;white-space: normal;display: inline-block;}
.ibus {cursor: pointer;}
.busContent .item i {font-style: normal;white-space: normal;display: inline-block;color: #777;}
.ibus u {color: #0000FF;cursor: pointer;}
.ibus em {color: #FF7400;}

.gprsBus {width: 702px;}
.full_black {height: 0px;font-size: 0px;line-height: 0px;padding: 0px;margin: 0px;background: #000;z-index: 10000;display: none;left: 0px;top: 0px;position: fixed;_position: absolute;}
.huancheng{color: red;}
.xiache{color: #5BC648 ;}
.ibus s {
    text-decoration: none;
    color: #CD2F00;
}
.ibus sub {
    vertical-align: baseline;
    color: green;
    margin-left: 3px;
}
</style>

<!--遮罩层-->
<div class="full_black" style="opacity: 0.3; width: 1349px; height: 2103px; display: none; z-index: 10000;"></div>
<input type="hidden" id="stationStr" value=""/>
<div id="divBus" class="divBus divBus" style="left: 283px; top: 48.5px;display:none;">
</div>

<div id="divGprs" class="divBus gprsBus" style="z-index: 10015; left: 332px; top: 48.5px;display:none;">
</div>

<script>
var cLong = '{$com[comLongitude]}';//企业坐标经度
var cLat = '{$com[comLatitude]}';//企业坐标维度

function changeSH(lineId){
	$(".busContent .item_"+lineId).toggle();
};

//显示busClose
function changeBusLine(distance){

	//获取数据
	$.ajax({
        url: "/api/web/company.api",
        type: 'GET',
        data: {
            'act': 'busLineByZb',
            'lat': '{$com["comLatitude"]}',
            'long': '{$com["comLongitude"]}',
            'distance':distance
        },
        dataType: 'json',
        error: function() {
            alert('请求出错!');
        },
        success: function(data) {
            if (data.status==1) {
            	//头部
            	var html = '<div class="busCon">';
				html += '<div class="busTop">';
				html += '		<span class="itip"><s>点击下车站台，可查看步行导航图<br></s><b>点击站台，可查看换乘路线</b></span>';
				html += '		<a href="javascript:void(0)" id="busClose" class="busClose" onclick="busClose()" title="关闭">×</a>';
				html += '		<span class="btitle">公交路线<em>('+data.lineCount+')</em></span>';
				if(parseInt(data.distance)<3) {
					html += '		<span class="sbtn" id="dmore" onclick="changeBusLine('+(parseInt(data.distance)+1)+')">更多路线</span>';
				}
				html += '		<span class="sbtn" id="gprs" onclick="isGood()">最佳路线</span>';
				html += '</div>';

				html += '</div>';

				//路线
				html += '<div class="busContent">';
				$.each(data.lineRows, function(key, val){
					html += '	<div class="it">';
					html += '		<s class="smap" map="'+val.lineName+'" onclick="busMap('+val.lineId+',0)">地图</s>';
					html += '		<h3 onclick="changeSH('+val.lineId+')"><span>▲</span>'+val.lineName;
					if(parseInt(val.fx)==1){
						html += '<u>(上行线路)</u>';
					}else if(parseInt(val.fx)==2){
						html += '<u>(下行线路)</u>';
					}
					html += '<i>'+val.lineTitle+'</i></h3>';
					html += '		<div class="item_'+val.lineId+'" style="display:block">';

					$.each(data.stationList[val.lineId], function(k, v){
						if(v.tb){
							html += '			<span class="ibus" onclick="luxing('+v.sLong+','+v.sLat+')">';
							html += '<u>'+v.stationName+'</u><em>(下车)</em>';
						}else{
							html += '			<span class="ibus" onclick="ibus('+v.lineId+','+v.stationId+')">';
							html += v.stationName;
						}
						html += '</span>';
						if(data.stationList[val.lineId][k+1]){
							html += '			<i> → </i>';
						}
					});

					html += '		</div>';
					html += '	</div>';
				});
				html += '</div>';

				$("#divBus").html(html);
				$("#stationStr").val(data.stationStr);
				$("#divBus").show();
				$(".full_black").show();
            }else {
            	alert(data.msg);
            	busClose();
            }
        }
    });
}

//显示divGprs
function ibus(lineId, stationId){

	//获取数据
	$.ajax({
        url: "/api/web/company.api",
        type: 'GET',
        data: {
            'act': 'busLineByStationId',
            'stationId': stationId,
            'lineId': lineId
        },
        dataType: 'json',
        error: function() {
            alert('请求出错!');
        },
        success: function(data) {
        	console.log(data);
            if (data.status==1) {
            	if(data.lineRows.length<=0) {
            		alert('暂无数据');
            		return;
            	}
            	var html = '<div class="busCon">';
				//头部
				html += '<div class="busTop">';
				html += '	<span class="itip"><s>点击下车站台，可查看步行导航图<br></s><b>点击站台，可查看换乘路线</b></span>';
				html += '	<a href="javascript:void(0)" id="GprsClose" onclick="GprsClose()" class="busClose" title="关闭">×</a>';
				html += '	<span class="btitle" data-tr=""><b>【'+data.stationRow.name+'】</b>换乘公交路线<em>('+data.lineCount+')</em></span>';
				html += '</div>';

				html += '<div id="zbus" class="busContent gprsContent" style="overflow: auto;overflow-x: visible;padding: 15px 10px;">';
				$.each(data.lineRows, function(key, val){
					html += '<div class="it">';
					html += '	<s class="smap" map="'+val.lineName+'"  onclick="busMap('+val.lineId+', 1)">地图</s>';
					html += '		<h3 onclick="changeSH('+val.lineId+')"><span>▲</span>'+val.lineName;
					if(parseInt(val.fx)==1){
						html += '<u>(上行线路)</u>';
					}else if(parseInt(val.fx)==2){
						html += '<u>(下行线路)</u>';
					}
					html += '<i>'+val.lineTitle+'</i></h3>';
					html += '	<div class="item_'+val.lineId+'" style="display:block">';

					$.each(data.stationList[val.lineId], function(k, v){
						if(v.tb){
							html += '			<span class="ibus">';
							html += '<s>'+v.stationName+'</s><sub>(换成)</sub>';
						}else{
							html += '			<span class="ibus" onclick="ibus('+v.lineId+','+v.stationId+')">';
							html += v.stationName;
						}
						html += '</span>';
						if(data.stationList[val.lineId][k+1]){
							html += '			<i> → </i>';
						}
					});

					html += '	</div>';
					html += '</div>';
				});
				html += '</div>';

				html += '</div>';

				$("#divGprs").html(html);

				$("#divGprs").show();
				$(".full_black").show();
				$('.full_black').attr('style', 'opacity: 0.3; width: 1349px; height: 2103px; display: block; z-index: 10010;');
            }else {
            	alert(data.msg);
            	GprsClose();
            }
        }
    });

};

//关闭busClose
function busClose(){
	$("#divBus").hide();
	$(".full_black").hide();
}

//关闭GprsClose
function GprsClose(){
	$("#divGprs").hide();
	$('.full_black').attr('style', 'opacity: 0.3; width: 1349px; height: 2103px; display: block; z-index: 10000;');
}

//步行导航
function luxing(sLong,sLat){
	if(!sLong||!sLat||!cLong||!cLat) alert('参数错误！');
	var url = '/busLine.html?act=bxMap&sLong='+sLong+'&sLat='+sLat+'&cLong='+cLong+'&cLat='+cLat;
	window.open(url,'rslt','width=500,height=320,resizable=yes,scrollbars=yes');
}

//最佳路线
function isGood(){
	var url = '/busLine.html?act=goodMap';
	window.open(url,'rslt','width=500,height=320,resizable=yes,scrollbars=yes');
}

//地图
function busMap(lineId, isShow){
	var stationStr = $("#stationStr").val();
	if(parseInt(isShow)==1) stationStr='t';
	var url = '/busLine.html?act=busMap&cLong='+cLong+'&cLat='+cLat+'&lineId='+lineId+'&stationStr='+stationStr;
	window.open(url,'rslt','width=500,height=320,resizable=yes,scrollbars=yes');
}
function getZb(zb){
	alert(zb);
}
</script>