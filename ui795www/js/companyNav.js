var companyNav = {};

companyNav.gId = function(id){
	return document.getElementById(id);	
};

//读取cookie
companyNav.getCookie = function(sName){
	    var sRE="(?:(?:^"+sName+")|(?:(?:(?:; ))" + sName + "))=([^;]*);?";
	    var oRE=new RegExp(sRE);
	    if(oRE.test(document.cookie)){
		    return decodeURIComponent(RegExp["$1"]);
		}
		else{return null;}	
};

companyNav.writeNav = function(){

  var hours = new Date().getHours();
	var sayHello = "";
	if(hours > 5 && hours <= 11 ){sayHello = "上午"}
	if(hours > 11 && hours <= 13 ){sayHello = "中午"}
	if(hours > 13 && hours <= 17 ){sayHello = "下午"}
	if(hours > 17 ||  hours <= 2 ){sayHello = "晚上"}
	if(hours > 2 && hours <= 5 ){sayHello = "凌晨"}
		
	if(companyNav.gId("sayHello")){
		companyNav.gId("sayHello").innerHTML = sayHello + "好， ";
	}
};

companyNav.init = function(id){	
	companyNav.writeNav();
};


function hidecompanyNav(){
	companyNav.gId("user163List").style.display = "none";
	//companyNav.gId("user163_name").className = "user163_name";
};

function URLContailDomain(regExpr, fullurl){
	var url = fullurl;
	var idxDelimeter = url.indexOf("?", 0);
	if (idxDelimeter >= 0)
		url = url.substring(0, idxDelimeter);
	idxDelimeter = url.indexOf(":", 0);
	if (idxDelimeter < 0) 
		return false;
	var http = url.substring(0, idxDelimeter + 3);
	url = url.substring(idxDelimeter + 3, url.length);	
	idxDelimeter = url.indexOf("/", 0);
	if (idxDelimeter >= 0)
		url = url.substring(0, idxDelimeter);
	
	url = http + url;
	return regExpr.test(url);
};

companyNav.init();

