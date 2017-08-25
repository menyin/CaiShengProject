<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8" /> 
	<title>获取公交站点坐标</title> 
	<style type="text/css"> 
		html,body{ height: 100%;} 
		#results,#coordinate{ display: inline-block; width: 45%; min-height: 200px; border:1px solid #e4e4e4; vertical-align: top;} 
	</style> 
	<script src="http://api.map.baidu.com/api?v=1.3" type="text/javascript"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
</head>
<body>
	<select id="cityName" onchange="location.href='?act=caiji&fx={$_GET['fx']}&cityId='+this.value;">
		<!--{loop $cityList $val}-->
		<option <!--{if $val['id']==$_GET['cityId']}-->selected="selected"<!--{/if}--> value="{$val['id']}">{$val['name']}</option>
		<!--{/loop}-->
	</select>
	<select id="fx" onchange="location.href='?act=caiji&cityId={$_GET['cityId']}&fx='+this.value;">
		<option <!--{if $_GET['fx']==0}-->selected="selected"<!--{/if}--> value="0">上行路线</option>
		<option <!--{if $_GET['fx']==1}-->selected="selected"<!--{/if}--> value="1">下行路线</option>
	</select>
	<p><label for="busId">公交线路：</label><input type="text" value="49" id="busId" /><input type="button" id="btn-search" value="查询" /></p>
	<div id="results"></div>
	<div id="coordinate"></div>
	<script type="text/javascript">
		(function(){
			var tempVar;
			var cityName = "{$_GET['cityName']}";
			if(!cityName) cityName = "厦门";
			var cityId = "{$_GET['cityId']}";
			if(!cityId) cityId = 3502;
			var fx = "{$_GET['fx']}";
			if(!fx) fx = 0;
			var busline = new BMap.BusLineSearch(cityName,{
				renderOptions:{panel:"results"},
				onGetBusListComplete: function(result){
					if(result) {
						tempVar = result;//此时的结果并不包含坐标信息，所以getCoordinate函数不能在此调用。通过跟踪变量，坐标是在onGetBusListComplete之后才被百度的包添加进来的
						busline.getBusLine(result.getBusListItem(fx));
						// busline.getBusLine(result.getBusListItem(1));
					}
				},
				// api文档中一共有四个回调，除了onGetBusListComplete和onBusLineHtmlSet之外，还有onBusListHtmlSet和onGetBusLineComplete，
				// 经过测试只有在onBusLineHtmlSet这一步（线路格式化完毕）的时候，才会将坐标添加到tempVar中
				// 所以上面busline.getBusLine(result.getBusListItem(0));是必须的，不然没有办法获得坐标列表
				onBusLineHtmlSet : function(){
					try{
						getCoordinate(tempVar, fx);
					}catch(e){
					}
				}
			});

			function getCoordinate(result, fx){
				var coordinate = document.getElementById("coordinate");
				var stations = result[fx]._stations;
				var name = result[fx].name;
				var html = [];
				stations.forEach(function(item){
					html.push('<li>' + item.name + ' ' + item.position.lng + ' ' + item.position.lat + '</li>');
				});
				coordinate.innerHTML = '<ul>' + html.join('') + '</ul>';

				$.ajax({
			        url: "station.php",
			        type: 'POST',
			        data: {
			          'act': 'saveCaiji',
			          'stations': stations,
			          'name': name,
			          'cityId': cityId,
			          'fx': parseInt(fx)+1
			        },
			        dataType: 'json',
			        error: function() {
			            alert('请求出错!');
			        },
			        success: function(data) {
			          if (data.status==1) {
			            alert(data.msg);
			            // location.reload();
			          }else {
			            alert(data.msg);
			          }
			        }
			      });
				console.log(1);
			}
			document.getElementById('btn-search').onclick = function(){
				busline.getBusList(document.getElementById("busId").value);
			}
		})();
	</script>
</body>
</html>