var CONTEXTPATH = "//cdn.597.com/";
var SiteUrl = "";

/*---------------------------Server,Page-------------------------*/
var Server = {};
Server.ContextPath = CONTEXTPATH;

Server.loadScript = function (url) {
	document.write('<script type="text/javascript" src="' + url + '"><\/script>');
}
Server.loadCSS = function (url) {
	document.write('<link href="' + url + '" type="text/css" rel="stylesheet" \/>');
}
//------------常用------------------

function playswf(sFile, sWidth, sHeight) {
	document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="' + sWidth + '" height="' + sHeight + '">  ');
	document.write('<param name="movie" value="' + sFile + '">');
	document.write('<param name="quality" value="high">');
	document.write('<param name="wmode" value="transparent">');
	document.write('<embed src="' + sFile + '" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="' + sWidth + '" height="' + sHeight + '"></embed>  ');
	document.write('</object>');
}
//设置浏览器收藏
function AddFavorite(sURL, sTitle) {
	try {
		window.external.addFavorite(sURL, sTitle);
	}
	catch (e) {
		try {
			window.sidebar.addPanel(sTitle, sURL, "");
		}
		catch (e) {
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		}
	}
}
//设置设为首页
function SetHome(obj, vrl) {
	try {
		obj.style.behavior = 'url(#default#homepage)'; obj.setHomePage(vrl);
	}
	catch (e) {
		if (window.netscape) {
			try {
				netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			}
			catch (e) {
				alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
				return;
			}
			var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
			prefs.setCharPref('browser.startup.homepage', vrl);
		}
	}
}
//获取COOKIE
function getCookie(name) {
	var cookieValue = "";
	var search = name + "=";
	if (document.cookie.length > 0) {
		offset = document.cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = document.cookie.indexOf(";", offset);
			if (end == -1) end = document.cookie.length;
			cookieValue = unescape(document.cookie.substring(offset, end))
		}
	}
	return cookieValue;
}
//设置COOKIE
function setCookie(cookieName, cookieValue, DayValue) {
	var expire = "";
	var day_value = 1;
	if (DayValue != null) {
		day_value = DayValue;
	}
	expire = new Date((new Date()).getTime() + day_value * 86400000);
	expire = "; expires=" + expire.toGMTString();
	document.cookie = cookieName + "=" + escape(cookieValue) + ";path=/" + expire;
}
//清除COOKIE
function delCookie(cookieName) {
	var expire = "";
	expire = new Date((new Date()).getTime() - 1);
	expire = "; expires=" + expire.toGMTString();
	document.cookie = cookieName + "=" + escape("") + ";path=/" + expire;
	//path=/
}
//计算输入字数
function countChar(obj){
	var countObj=obj+'_countChar';
	document.getElementById(countObj).innerHTML=document.getElementById(obj).value.length;
}
function clearOptions(obj) {
	$("option", obj).each(function () {
		$(this).remove();
	});
}

function browse_history(cate, prdid, data, rt) {
	//var rt  = 5;  
	if (!rt) rt = 5;
	if (typeof prdid != 'undefined') {
		var rows = $.cookie(cate);
		if (rows == null) {
			rows = new Array(prdid, data);
		} else {
			var rindex = -1;
			rows = rows.split(",");
			for (var i = 0; i < rows.length; i += 2) {
				var _prdid = rows[i];
				if (_prdid == prdid) {
					rindex = i;
				}
			}
			if (rindex > 0) {
				rows.splice(rindex, 2);
				rows.unshift(prdid, data);
			} else if (rindex == -1) {
				rows.unshift(prdid, data);
			}
			if (rows.length > rt * 2) {
				rows = rows.slice(0, -2);
			}
		}
		$.cookie(cate, rows.toString(), { expires: 365, path: "/", domain: "", secure: false });
		return rows;
	} else {
		return $.cookie(cate);
	}
}

//大写转小写
function DBC2SBC(str,allow){
	var i; 
	var result=''; 
	for(i=0;i<str.length;i++) {
		for(var j=0;j<allow.length;j++){
			if(allow[j]==str[i]) {
				result+=String.fromCharCode(str.charCodeAt(i));
			} 
		}
		if(str.charCodeAt(i)>65295 && str.charCodeAt(i)<65306)
			result+=String.fromCharCode(str.charCodeAt(i)-65248); 
		else 
			if(str.charCodeAt(i)>47 && str.charCodeAt(i)<58)
				result+=String.fromCharCode(str.charCodeAt(i)); 
	} 
	return result; 
} 
//------------常用 end------------------

/*START_LOADSCRIPT*/
Server.loadScript(Server.ContextPath + "javascript/jquery-1.7.2.min.js");
Server.loadScript(Server.ContextPath + "javascript/jquery.boxy.js");
Server.loadCSS(Server.ContextPath + "css/jquery.boxy.css");
Server.loadScript(Server.ContextPath + "javascript/jobclass_option_data.js");
Server.loadScript(Server.ContextPath + "javascript/industryclass_option_data.js");
Server.loadScript(Server.ContextPath + "javascript/general_option_data.js");
Server.loadScript(Server.ContextPath + "javascript/general_option.js");
Server.loadScript(Server.ContextPath + "javascript/My97DatePicker/WdatePicker.js");
