<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title>附近{$distance}米{$_GET['keyword']}职位-597{$domainInfo['region_name_short']}人才网</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/m.js?v=20140313"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1dbbe490e08978e45f6b319cf9a01cc4"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/m/css/m_base.css?v=2014040113" />
	<link rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/m/css/jobs.css" type="text/css">
<style type="text/css">
#bd_rec_list { height: 106px; overflow: hidden; border-bottom: 1px solid #ddd; }
#bd_rec_list .des { display: block; height: 25px; overflow: hidden; width: auto; padding-right: 30px; }
footer { margin-top: 10px;}
</style>
</head>
<div id="load" style=" background:url(//cdn.{ROOT_DOMAIN}/m/images/maploading.gif) center bottom no-repeat; height:80px; line-height:80px;"></div>
<div id="ditu" style=" margin:0 auto; padding:45px 10px; text-align:center">正在获取当前地理位置，请稍候...</div>

<div style="margin-bottom:40px; text-align:center">
<a href="javascript:history.go(-1);" style="text-decoration:none"><div style="background-color:#379BE9;width:120px; height:30px; line-height:30px;  border-radius:3px;font-size:16px; color:#FFFFFF; margin-left:auto; margin-right:auto; ">返 回</div></a></div>

<div style="text-align:center"><a href="/">返回首页</a></div>

	<script type="text/javascript">
		$.getGeoLocation = {
			init: function() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(this.getPosSuccess, this.getPosError, {
						timeout: 1e4,
						maximumAge: 0,
						enableHighAccuracy: true
					});

				} else {
					alert("您的浏览器不支持GPS定位服务");
				}
			},
			getGeo:function (){
				var geolocation = new BMap.Geolocation();
				geolocation.getCurrentPosition(function(r){
					if(this.getStatus() == BMAP_STATUS_SUCCESS){
						var city_name = r.address.city;
						writeCookie("comLatitude",r.point.lat);
						writeCookie("comLongitude",r.point.lng);
						//地址
						var point = new BMap.Point(r.point.lng,r.point.lat);
						var myGeo = new BMap.Geocoder();
						myGeo.getLocation(point, function (rs) {
							var geoContent = rs.addressComponents;
							var geoAddress = geoContent.city+geoContent.district+geoContent.street+geoContent.streetNumber;
							//alert(geoAddress);
							writeCookie("geoAddress",geoAddress);
							window.location.href = "/map.html?act=list&q={$keyword}&distance={$distance}&comLatitude="+point.lat+"&comLongitude="+point.lng+"&geoAddress="+geoAddress;
						});

					}
					else {
		 				alert('failed'+this.getStatus());
					}
				},{enableHighAccuracy: true})
			},
			getPosSuccess: function(pos) {
				$.getGeoLocation.getGeo();
			},
			getPosError: function(error) {
				var _tips = '';
				//alert($.getGeoLocation.writeObj(error));
				switch (error.code) {
					case error.PERMISSION_DENIED:
						_tips = "用户拒绝对获取地理位置的请求。请清除浏览器缓存再试";
						alert(_tips);
						history.go(-1);
						break;
					default:
						$.getGeoLocation.getGeo();
				}
			},
			writeObj:function(obj){
				var description = ""; 
				for(var i in obj){
					var property=obj[i];
					description+=i+" = "+property+"\n";
				}
				return description;
			}
		}
		var comLatitude = readCookie("comLatitude"),
		comLongitude = readCookie("comLongitude"),
		geoAddress = readCookie("geoAddress");
		if(comLatitude&&comLongitude&&geoAddress){
			window.location.href = "/map.html?act=list&q={$keyword}&distance={$distance}";
		}else{
			$.getGeoLocation.init();
		}
	</script>

	<div style="display: none" id="wx_stats">
		<script src="http://s5.cnzz.com/z_stat.php?id=1000320696&web_id=1000320696" language="JavaScript"></script>
	</div>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?d2fda47ce0b655f7ac286c4442a37939";
var s = document.getElementsByTagName("script")[0]; 
s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>