jobcn.util = jobcn.util || {};
jobcn.util.dTrim = function(s){
	return s.replace(/^\n+|\n+$/g,"");
}
jobcn.util.len = function(str,type){
	var l=0;
	if(arguments.length>0){
		if(type==2){
			for(var i=0;i<str.length;i++){
                l = l + (str.charCodeAt(i)>128?2:1);//һ�����������,һ��Ӣ������һ
            }
		}else{
			for(var i=0;i<str.length;i++){
                l = l + (str.charCodeAt(i)>128?1:0.5);//һ����������һ,����Ӣ������һ
            }
		}
		return Math.ceil(l);//�а����Ҫ+1
    }else{
    	return null
    }
}
jobcn.util.toHalf = function(str) {
	var tmp = "";
	for (var i = 0; i < str.length; i++) {
		if (str.charCodeAt(i) > 65248 && str.charCodeAt(i) < 65375) {
			tmp += String.fromCharCode(str.charCodeAt(i) - 65248);
		} else {
			tmp += String.fromCharCode(str.charCodeAt(i));
		}
	}
	return tmp
}
//��ǿjobcn.util.left
jobcn.util.cutLeft = function(str,len,type,suf){
	var l=0,newStr = str;
	if(arguments.length>3){
		if(type==2){
			for(var i=0;i<str.length;i++){
                l = l + (str.charCodeAt(i)>128?2:1);//һ�����������,һ��Ӣ������һ
                if(Math.ceil(l)>=len){
                	newStr=str.substring(0,i)+suf;
                	break;
                }
            }
		}else{
			for(var i=0;i<str.length;i++){
                l = l + (str.charCodeAt(i)>128?1:0.5);//һ����������һ,����Ӣ������һ
                if(Math.ceil(l)>=len){
                	newStr=str.substring(0,i)+suf;
                	break;
                }
            }
		}
		return newStr;
    }else{
    	return str
    }
}
//md5 js 
jobcn.util.md5 = function (a,t) {
	var hex_chr = "0123456789abcdef";
	function rhex(num) {
		var str = "";
		for (var j = 0; j <= 3; j++) str += hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) + hex_chr.charAt((num >> (j * 8)) & 0x0F);
		return str;
	}
	function str2blks_MD5(str) {
		var nblk = ((str.length + 8) >> 6) + 1;
		var blks = new Array(nblk * 16);
		for (var i = 0; i < nblk * 16; i++) blks[i] = 0;
		for (var i = 0; i < str.length; i++) blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8);
		blks[i >> 2] |= 0x80 << ((i % 4) * 8);
		blks[nblk * 16 - 2] = str.length * 8;
		return blks;
	}
	function add(x, y) {
		var lsw = (x & 0xFFFF) + (y & 0xFFFF);
		var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
		return (msw << 16) | (lsw & 0xFFFF);
	}
	function rol(num, cnt) {
		return (num << cnt) | (num >>> (32 - cnt));
	}
	function cmn(q, a, b, x, s, t) {
		return add(rol(add(add(a, q), add(x, t)), s), b);
	}
	function ff(a, b, c, d, x, s, t) {
		return cmn((b & c) | ((~b) & d), a, b, x, s, t);
	}
	function gg(a, b, c, d, x, s, t) {
		return cmn((b & d) | (c & (~d)), a, b, x, s, t);
	}
	function hh(a, b, c, d, x, s, t) {
		return cmn(b ^ c ^ d, a, b, x, s, t);
	}
	function ii(a, b, c, d, x, s, t) {
		return cmn(c ^ (b | (~d)), a, b, x, s, t);
	}
	function MD5(str,t) {
		var x = str2blks_MD5(str);
		var a = 1732584193;
		var b = -271733879;
		var c = -1732584194;
		var d = 271733878;
		for (var i = 0; i < x.length; i += 16) {
			var olda = a;
			var oldb = b;
			var oldc = c;
			var oldd = d;
			a = ff(a, b, c, d, x[i + 0], 7, -680876936);
			d = ff(d, a, b, c, x[i + 1], 12, -389564586);
			c = ff(c, d, a, b, x[i + 2], 17, 606105819);
			b = ff(b, c, d, a, x[i + 3], 22, -1044525330);
			a = ff(a, b, c, d, x[i + 4], 7, -176418897);
			d = ff(d, a, b, c, x[i + 5], 12, 1200080426);
			c = ff(c, d, a, b, x[i + 6], 17, -1473231341);
			b = ff(b, c, d, a, x[i + 7], 22, -45705983);
			a = ff(a, b, c, d, x[i + 8], 7, 1770035416);
			d = ff(d, a, b, c, x[i + 9], 12, -1958414417);
			c = ff(c, d, a, b, x[i + 10], 17, -42063);
			b = ff(b, c, d, a, x[i + 11], 22, -1990404162);
			a = ff(a, b, c, d, x[i + 12], 7, 1804603682);
			d = ff(d, a, b, c, x[i + 13], 12, -40341101);
			c = ff(c, d, a, b, x[i + 14], 17, -1502002290);
			b = ff(b, c, d, a, x[i + 15], 22, 1236535329);
			a = gg(a, b, c, d, x[i + 1], 5, -165796510);
			d = gg(d, a, b, c, x[i + 6], 9, -1069501632);
			c = gg(c, d, a, b, x[i + 11], 14, 643717713);
			b = gg(b, c, d, a, x[i + 0], 20, -373897302);
			a = gg(a, b, c, d, x[i + 5], 5, -701558691);
			d = gg(d, a, b, c, x[i + 10], 9, 38016083);
			c = gg(c, d, a, b, x[i + 15], 14, -660478335);
			b = gg(b, c, d, a, x[i + 4], 20, -405537848);
			a = gg(a, b, c, d, x[i + 9], 5, 568446438);
			d = gg(d, a, b, c, x[i + 14], 9, -1019803690);
			c = gg(c, d, a, b, x[i + 3], 14, -187363961);
			b = gg(b, c, d, a, x[i + 8], 20, 1163531501);
			a = gg(a, b, c, d, x[i + 13], 5, -1444681467);
			d = gg(d, a, b, c, x[i + 2], 9, -51403784);
			c = gg(c, d, a, b, x[i + 7], 14, 1735328473);
			b = gg(b, c, d, a, x[i + 12], 20, -1926607734);
			a = hh(a, b, c, d, x[i + 5], 4, -378558);
			d = hh(d, a, b, c, x[i + 8], 11, -2022574463);
			c = hh(c, d, a, b, x[i + 11], 16, 1839030562);
			b = hh(b, c, d, a, x[i + 14], 23, -35309556);
			a = hh(a, b, c, d, x[i + 1], 4, -1530992060);
			d = hh(d, a, b, c, x[i + 4], 11, 1272893353);
			c = hh(c, d, a, b, x[i + 7], 16, -155497632);
			b = hh(b, c, d, a, x[i + 10], 23, -1094730640);
			a = hh(a, b, c, d, x[i + 13], 4, 681279174);
			d = hh(d, a, b, c, x[i + 0], 11, -358537222);
			c = hh(c, d, a, b, x[i + 3], 16, -722521979);
			b = hh(b, c, d, a, x[i + 6], 23, 76029189);
			a = hh(a, b, c, d, x[i + 9], 4, -640364487);
			d = hh(d, a, b, c, x[i + 12], 11, -421815835);
			c = hh(c, d, a, b, x[i + 15], 16, 530742520);
			b = hh(b, c, d, a, x[i + 2], 23, -995338651);
			a = ii(a, b, c, d, x[i + 0], 6, -198630844);
			d = ii(d, a, b, c, x[i + 7], 10, 1126891415);
			c = ii(c, d, a, b, x[i + 14], 15, -1416354905);
			b = ii(b, c, d, a, x[i + 5], 21, -57434055);
			a = ii(a, b, c, d, x[i + 12], 6, 1700485571);
			d = ii(d, a, b, c, x[i + 3], 10, -1894986606);
			c = ii(c, d, a, b, x[i + 10], 15, -1051523);
			b = ii(b, c, d, a, x[i + 1], 21, -2054922799);
			a = ii(a, b, c, d, x[i + 8], 6, 1873313359);
			d = ii(d, a, b, c, x[i + 15], 10, -30611744);
			c = ii(c, d, a, b, x[i + 6], 15, -1560198380);
			b = ii(b, c, d, a, x[i + 13], 21, 1309151649);
			a = ii(a, b, c, d, x[i + 4], 6, -145523070);
			d = ii(d, a, b, c, x[i + 11], 10, -1120210379);
			c = ii(c, d, a, b, x[i + 2], 15, 718787259);
			b = ii(b, c, d, a, x[i + 9], 21, -343485551);
			a = add(a, olda);
			b = add(b, oldb);
			c = add(c, oldc);
			d = add(d, oldd);
		}
              return t == 32 ? rhex(a) + rhex(b) + rhex(c) + rhex(d) : rhex(b) + rhex(c);
	}
	return MD5(a,t);//Ĭ�ϼ��ټ�����16λ
}
//md5 end
jobcn.util.date = jobcn.util.date || {}
jobcn.util.date.parse = function (source,compel) {
    var reg = new RegExp("^\\d+(\\-|\\/)\\d+(\\-|\\/)\\d+\x24");
    if ('string' == typeof source) {
	        if (reg.test(source) || isNaN(Date.parse(source))) {
	            var d = source.split(/ |T/),
	                d1 = d.length > 1 
	                        ? d[1].split(/[^\d]/) 
	                        : [0, 0, 0],
	                d0 = d[0].split(/[^\d]/);
	            return new Date((d0[0]||0) - 0, 
	                            (d0[1]||0) - 1, 
	                            (d0[2]||0) - 0, 
	                            (d1[0]||0) - 0, 
	                            (d1[1]||0) - 0, 
	                            (d1[2]||0) - 0);
	        } else if( source!="" && source.length>3){
	            return new Date(source);
	        }
    }
    return (compel || false)?new Date():source;
};
jobcn.util.date.agoDate = function(date1,date2){
	var nDate2 = date2||new Date();
	var nDate1 = jobcn.util.date.parse(date1);
	var day = parseInt((nDate1 - nDate2)/86400/1000);
	if(day==0) return "&#20170;&#22825;";//����
	if(day<0&&day>-30) return Math.abs(day)+"&#22825;&#21069;";//��ǰ
	if(day<=-30) return date1;
}
/*************************************************************
 *   jobcn.util��չ end
 * ***********************************************************/

/*************************************************************
 *   ��jobcn.business.jsǨ����
 * ***********************************************************/

jobcn.Storage.prototype.swfPath = "/public/script/storage.swf";
/**
 * jobcn.Analytics
 * ͳ�Ʒ�����
 * Last Update:2011-9-23
 * By Lulu
 */
 (function(){
	var _analytics=function(type,path,content)
	{
		if("[object Array]"==Object.prototype.toString.apply(path)){
			path=path.join("/");
		}
		var img = new Image();
		img.src="/public/script/jobcn.analytics.jsp?action="+type+"&path="+path+"&content="+encodeURIComponent(content);
	};
	jobcn.Analytics={
		config:{
			isTrack:true
		},
		//��¼����ҳ�ķ���  2012-07-07
		TrackPageView:function(path){
			var _gaq = window["_gaq"] || [];
			_gaq.push(['_trackPageview', path]);
		},
		//target�����͵�����
		//retryTime��ʧ�����Դ���
		Track:function(target,retryTime){
			if(!jobcn.Analytics.config.isTrack)return;
			retryTime=retryTime||3;
			try{
				if(window["_gat"]&&window["_gat"]._createTracker)
				{
					if("[object Array]"==Object.prototype.toString.apply(target)){
						target=target.join("/");
					}
					/*����1������
					  ����2����� ͨ����·��
					  ����3������
					  ����4����ǩ
					  ����5����ֵ
					  ����6���Ƿ���㻥��
						���string��
						������string��
						��ǩ��string��
						��ֵ��integer ��
						������true �� false��
					*/
					_gaq.push(['_trackEvent',target,"click","click",0,true]);
					log("Track",target);
				}else if(retryTime>0){
					setTimeout(function(){
						jobcn.Analytics.Track(target,retryTime-1);
					},1500);
				}//if end
			}catch(e){
				throw e;
			}
		},
		//��¼�ɹ����͵���Ϣ
		TrackLogin:function(target){
			var tj = _gat._getTrackerByName('t1')
				tj._setAccount("UA-144672-1")
				tj._setCustomVar(1,"login","IM",2)//���ʼ���
				tj._setCustomVar(2,"member","IM",1)//�Ự��
				tj._trackPageview(target);
		},
		error:function(path,content){
			_analytics("error",path,content)
		},
		debug:function(path,content){
			_analytics("debug",path,content)
		},
		info:function(path,content){
			_analytics("info",path,content)
		}
	};
 })();
 jobcn.pkg("jobcn.business");
 jobcn.business.msgs = {
 	workLocation : "��Ϊ����д�ġ���/�򡱹ؼ��������ڵ���Ƹ��ҵ��д��ְλ����ϸ�����ص��������ģ������������д����ġ���/�����ƣ��벻Ҫ���롰�������������ڡ������ֶ������ܱߡ�֮�����Ĺؼ��֣������Ҳ�Ҫ���ϡ�ʡ/�С����ƣ���ʡ/�С������������ص㡱��ťѡ�񣩡����磬�����������к�������ְλ��ֻ��Ҫ��д���������ɣ�����ͬʱ�����������/�򡱵�ְλ��������д�������/�����Ʋ��Կո�򶺺ŷָ����磺������ ��ɽ �޺�����",
 	keyword : "ע���ؼ��ֲ�ѯ��Χ����ѡ��ְλ���ơ���˾���ƻ����У�����ְλ���ơ���˾���ƣ�������ְλ����������������ְλ���ơ���˾���ơ��������ݻ����еĹؼ�������Ϊ�ؼ��֣������ܵļ�̡�����������룺���¾���ƽ����ơ���Ŀ����������ؼ��֡�����ؼ������ÿո��ֺ�<span style='color: red;'>��;��</span>������<span style='color: red;'>���ո�</span>��ʾ�룬<span style='color: red;'>���ֺš�</span>��ʾ��"
 };
 /**
  * jobcn.code
  * ҳ��html����
  * Last Update:2011-8-8
  */
 jobcn.code={
 	//������վͼƬLOGO 
 	writeSealLogo:function(){},
 	//ͳ�ƴ���
 	addAnalytics:function(){
 		window["_gaq"] = window["_gaq"] || [];
 		_gaq.push(['_setAccount', 'UA-144672-1','t1']);
 		_gaq.push(['_setDomainName', 'jobcn.com']);
 		_gaq.push(['_setVisitorCookieTimeout', 157680000000]);
 		try{
 			if(jobcn.Person.perAccountId){
 				_gaq.push(['_setCustomVar', 1, 'login','IM',2]);//���ʼ���
 				_gaq.push(['_setCustomVar', 2,'member','IM',1]);//�Ự��
 			}
 		}catch(e){
 		}
		_gaq.push(['_addOrganic', 'baidu', 'word']);
		_gaq.push(['_addOrganic', 'baidu', 'kw']);
		_gaq.push(['_addOrganic', 'opendata.baidu', 'wd']);
		_gaq.push(['_addOrganic', 'zhidao.baidu', 'word']);
		_gaq.push(['_addOrganic', 'soso', 'w']);
		_gaq.push(['_addOrganic', 'wenwen.soso', 'sp']);
		_gaq.push(['_addOrganic', 'post.soso', 'kw']);
		_gaq.push(['_addOrganic', '3721', 'name']);
		_gaq.push(['_addOrganic', '114', 'kw']);
		_gaq.push(['_addOrganic', 'youdao', 'q']);
		_gaq.push(['_addOrganic', 'vnet', 'kw']);
		_gaq.push(['_addOrganic', 'sogou', 'query']);
		_gaq.push(['_addOrganic', 'news.sogou', 'query']);
		_gaq.push(['_addOrganic','gougou', 'search']);
		_gaq.push(['_addOrganic', 'so', 'q']);
		_gaq.push(['_addOrganic', 'so.360', 'q']);
		_gaq.push(['_addOrganic', 'glb.uc', 'keyword']);
		
		_gaq.push(['_addOrganic', 'baidu', 'word']);
		_gaq.push(['_addOrganic', 'baidu', 'kw']);
		_gaq.push(['_addOrganic', 'opendata.baidu', 'wd']);
		_gaq.push(['_addOrganic', 'zhidao.baidu', 'word']);
		_gaq.push(['_addOrganic', 'news.google', 'q']);
		_gaq.push(['_addOrganic', 'soso', 'w']);
		_gaq.push(['_addOrganic', 'image.soso', 'w']);
		_gaq.push(['_addOrganic', 'music.soso', 'w']);
		_gaq.push(['_addOrganic', 'post.soso', 'kw']);
		_gaq.push(['_addOrganic', 'wenwen.soso', 'sp']);
		_gaq.push(['_addOrganic', 'post.soso', 'kw']);
		_gaq.push(['_addOrganic', '3721', 'name']);
		_gaq.push(['_addOrganic', '114', 'kw']);
		_gaq.push(['_addOrganic', 'youdao', 'q']);
		_gaq.push(['_addOrganic', 'vnet', 'kw']);
		_gaq.push(['_addOrganic', 'sogou', 'query']);
		_gaq.push(['_addOrganic', 'news.sogou', 'query']);
		_gaq.push(['_addOrganic', 'mp3.sogou', 'query']);
		_gaq.push(['_addOrganic', 'pic.sogou', 'query']);
		_gaq.push(['_addOrganic', 'blogsearch.sogou', 'query']);
		_gaq.push(['_addOrganic','gougou', 'search']);
		_gaq.push(['_trackPageview']);
 		

		$(window).load(function(){
			seajs.use(["http://www.google-analytics.com/ga.js","http://hm.baidu.com/h.js?8180e13f3ce10ef1c58778a9785ec8fc"])
 		})
 
 		//jobcn.load({url:"http://www.google-analytics.com/ga.js",type:"js",depend:false,loadType:"lazy"});
 		//jobcn.load({url:"http://hm.baidu.com/h.js?8180e13f3ce10ef1c58778a9785ec8fc",type:"js",loadType:"lazy"});
 		//jobcn.load({url:"http://hm.baidu.com/h.js?89147475b0577c94bd3fbed588bc90b5",type:"js",loadType:"lazy"});
 	}
 };
 /**
 * jobcn.code.renderNavTab
 * ����������ѡ��״̬
 * Last Update:2013-3-5
 */
 (function(){
	 var pages = [],navId=""
		if(/hire\./.test(location.host.toLowerCase())){
			pages=[
					{url: "/search/" , selector:"#nav_resume_search"},
					{url: "/company/vas/product/overview", selector:"#nav_company_center"},
					{url: "/company/vas/product/", selector:"#nav_product_center"},
					{url: "/" , selector:"#nav_company_center"}
				];
			navId="#nav_company_center"
		}else{
			pages=[
					{url: "/area/" , selector:"#nav_home"},
					{url: "/search/" , selector:"#nav_position_search"},
					{url: "/person/" , selector:"#nav_person_center"},
					{url: "/login" , selector:"#nav_person_center"},
					{url: "/reg" , selector:"#nav_person_center"},
					{url: "/hr" , selector:"#nav_hr"},
					{url: "/school" , selector:"#nav_school"},
					{url: "/position" , selector:"#nav_position_search"},
					{url: "/help" , selector:"#nav_help_center"},		
					{url: "/about/sitemap.jsp" , selector:"#sitemap"},
					{url: "/" , selector:"#nav_home"}
				];
			navId="#nav_home"
		}
 	jobcn.code.renderNavTab = function(){
 		var pathname = location.pathname.toLowerCase();
 		if(!pathname || pathname=="/"){
 			$(navId).addClass("active");return;
 		}
 		var obj;
 		for(var i=0;i<pages.length;i++){
 			obj = pages[i];
 			if(pathname.startWith(obj.url)){
 				if(obj.selector)
 					$(obj.selector).addClass("active");
 				break;
 			}
 		}
 	}
 })();

jobcn.isBig5 = location.hostname.toLowerCase().startWith("big5.jobcn.com");

/*************************************************************
 *   ��jobcn.business.jsǨ����  end
 * ***********************************************************/

/*************************************************************
 *   ����·�л���ʾ
 * ***********************************************************/
// ������ҳ�涨��isOpenLanguageChoose �����Լ��
(function(){
	if((jobcn.util.cookie.get("p.choose.net") == "1") && (typeof isOpenLanguageChoose === 'undefined'))return;
	var url = window.location.hostname.toLowerCase()
		,lang = (navigator.userLanguage||navigator.language).toLowerCase()
		,choose = -1
		,tp=0;
	if(/hire/.test(url)) tp=1
	if(/zh-cn/.test(lang)){
		if("big5.jobcn.com" == url || "big5.hire.jobcn.com" == url){
			choose = 1;//��ʾѡ�����
		}
	}else{
		if("www.jobcn.com" == url || "hire.jobcn.com" == url){
			choose = 0;//��ʾѡ����
		}
	}
	var tip = [{name:"�����",url:["big5.jobcn.com","big5.hire.jobcn.com"]}
				,{name:"�����",url:["www.jobcn.com","hire.jobcn.com"]}]
	if(choose>-1){
		var html='<div class="language_choose_box">'
				+'<h1>���������������Ի�����������ʹ��<a>'+tip[choose].name+'</a>!</h1>'
				+'<div class="btn">'
				+'<button id="chooseURL" class="chooseURL">�л���'+tip[choose].name+'</button>'
				+'<button id="chooseGoOn" class="chooseGoOn">����</button>'
				+'</div>'
				+'</div>';
		var chooseBox = $(html)
		jobcn.load("ol.box",function(){
			new ol.box(chooseBox,{
				boxid:"chooseNetBox"
				,showButton:false
				,showTitle:false
				,boxclass:"jobcn_language_choose"
				,width:360
				,onopen:function(box){
					box.find("#chooseURL,a").click(function(){
						jobcn.util.cookie.set("p.choose.net","1",{expires:1})
						window.location.href="http://"+tip[choose].url[tp];
					})
					box.find("#chooseGoOn").click(function(){
						jobcn.util.cookie.set("p.choose.net","1",{expires:1})
						box.close();
					})
				}
			}).open();
		});
	}
})();

/*************************************************************
 *   ����·�л���ʾ  end
 * ***********************************************************/
/*************************************************************
 *   ����·�л�
 * ***********************************************************/
var _BGP = {
	url : window.location.href.replace(window.location.protocol+"//",""),
	host : window.location.host.toLowerCase(),
	title : function(t){
		return this.host.indexOf("big5")>-1 ? "&#31616;&#20307;&#29256;" : "&#32321;&#20307;&#29256;"
	},
	go2big : function(){
		var HOST = this.host,URL = this.url,GoURL;
			if(HOST.indexOf("big5.")>-1){
				if(HOST.replace("big5.","")==="jobcn.com"){
					GoURL = URL.replace(/big5\./i,"www.")
				}else{
					GoURL = URL.replace(/big5\./i,"");
				}
			}else{
				if(HOST.indexOf("www.")>-1){
					GoURL = URL.replace(/www\./i,"big5.")
				}else{
					GoURL = "big5."+URL
				}
			}
		window.location.href="http://"+GoURL;
	}
}
/*************************************************************
 *   ����·�л�	end
 * ***********************************************************/
/*
 * public����ģ��.Top����.selectAreaѡ�����ģ��
 * Last Update:2012-04-12
*/
 jobcn.pkg("jobcn.public.top.selectArea");
 jobcn.load("jobcn.bdshare");
 jobcn.pkg("jobcn.public.top.selectAreaMini");
 jobcn["public"].top.selectAreaMini = function(url){ 	
  	url = url || "";
	var web_area;
		var area_timeOut;
		var height=205;
		//������Ӧ�¼�
		$("#area_list_text").hover(function(){
			clearTimeout(area_timeOut);
			$(this).addClass("hover");							
			$("#area_list_box").slideDown("fast");
		},function(){
			area_timeOut = setTimeout(function(){
				$("#area_list_text").removeClass("hover");
				$("#area_list_box").height(110).stop().hide();
			},50);
		});
		//��ѡ����¼�
		$("#area_list_box").hover(function(){
			clearTimeout(area_timeOut);
		},function(){
			area_timeOut = setTimeout(function(){
				$("#area_list_box").hide();
				$("#area_list_text").removeClass("hover");
			},500);
		});
 }
 jobcn["public"].top.selectArea = function(url){
  	url = url || "";
	var web_area;
		var area_timeOut;
		var height=205;
		//������Ӧ�¼�
		$("#area_list_text").hover(function(){
			clearTimeout(area_timeOut);
			$(this).addClass("hover");							
			$("#area_list_box").slideDown("fast");
		},function(){
			area_timeOut = setTimeout(function(){
				$("#area_list_text").removeClass("hover");
				$("#area_list_box").height(205).stop().hide();
			},50);
		});
		//��ѡ����¼�
		$("#area_list_box").hover(function(){
			clearTimeout(area_timeOut);
		},function(){
			area_timeOut = setTimeout(function(){
				$("#area_list_box").hide();
				$("#area_list_text").removeClass("hover");
			},500);
		});						
		//��Ⱦ���ų���
		var hot = window.hotCitys || [],
			hotHtml=[],
			hotActive="";
		for(var i=0;i<hot.length;i++){
			if(hot[i][3]=="${selectedCityId}"){hotActive=' class="active" ';}else{hotActive=""}
			hotHtml.push('<li><a href="'+url+'/area/default.jsp?selectedCityId='+hot[i][3]+'" '+hotActive+'>'+hot[i][0]+'</a></li>');
		}
		//�����ĵ�
		$("#area_list_box ul").html(hotHtml.join(""));
		//�����ˮӡ��ʾ
		jobcn.form.input.watermark($("#web_areaFind"),"�����������");
		//������ѡ��
		web_area = new jobcn.linkSelect("#web_area", {
			dataType:"area",
			maxLevel : 2,
			onChange : function(level, value){
				if(level==0)$("#area_list_box select").mouseout(function(e){e.stopPropagation();});
				$("#pleaseSelect").remove();
			},
			format : function(text){
				return text.replace("-����","");
			}
		});
		web_area.setOption(0, {
			blankItem : {value:-1,text:'��ѡ��ʡ' },
			name : "areaP",
			id : "areaPSelect",
			css:"test"
		});
		web_area.setOption(1, {
			container : "#web_areaCity",
			blankItem : {value:-1,text:'��ѡ����' },
			name : "areaC",
			id : "areaCSelect",
			css:"test",
			format : function(text){
				return text.replace("��-","");
			}
		});
		web_area.render();						
		$("#area_list_box select").mouseout(function(e){e.stopPropagation();});
		
		//�Զ���ȷ����ת
		web_area.go = function(){							
			var ID = web_area.getValue(),
				goID = -1;
				if(ID.length==1){
					if(ID[0]==-1){alert("��ѡ��");return;}
					goID=ID[0];
				}else{
					if(ID[1]==-1){alert("��ѡ�����ĳ���");return;}
					goID=ID[1];
				}
				if(goID!=-1){window.location.href=url+"/area/default.jsp?selectedCityId="+goID;}
		};
		//�Զ��������ת
		web_area.find = function(){							
			var cityName = $.trim($("#web_areaFind").val()),
				findID= -1;
			for(var i=0;i<window.citys.length;i++){
				if(window.citys[i][0].indexOf(cityName)!=-1){findID=window.citys[i][5];break;}
			}
			if(findID!=-1){window.location.href=url+"/area/default.jsp?selectedCityId="+findID;}else{
				alert("û���ҵ��������!");
			}
		};
	return web_area;
 }; //end jobcn["public"].top.selectArea


/*
 * public����ģ��.search������.selectTypeѡ������ģ��
 * Last Update:2012-04-01
*/
jobcn.pkg("jobcn.public.search.selectType"); 
jobcn["public"].search.selectType = function(where){
	var dropdown = new jobcn.ui.dropdown($("#so"+where+"JobTypeA"));
	var li = $("#so"+where+"JobTypeLi li");
	li.find("a").each(function(i){
		//ְλ0��ҵ1ȫ��2
		$(this).click(function(){
			var text = $("#so"+where+"JobTypeA").text(),
				newText,
				thisLi = $(this);
				li.show();//��ʾȫ��
				thisLi.parent().hide();//�����Լ�
				$("#so"+where+"JobTypeA").html(thisLi.text());
				$("#"+where+"KeywordType").val(i);
				dropdown.hide();//�Զ�����
		});
	});
};
/*
 * public����ģ��.search������.toggle������ְλ���л�
 * Last Update:2012-04-01
*/
jobcn.pkg("jobcn.public.search.toggle");
jobcn["public"].search.toggle = function(name){
	//����������ְλ�����л�
	var _tit=$("#so"+name+"Tab li");
	var _body = $("#so"+name+"Body>div");
		_tit.eq(0).click(function(){
			$(this).addClass("active").siblings().removeClass("active");
			_body.hide();
			_body.eq(0).show();
			jobcn.Analytics.Track("/������/"+name+"/�л���ְλ����");
		});
		_tit.eq(1).click(function(){
			$(this).addClass("active").siblings().removeClass("active");
			_body.hide();
			_body.eq(1).show();
			jobcn.Analytics.Track("/������/"+name+"/�л�����������");
		});
};
/*
 * public����ģ��.search������.openSelector�򿪵���ѡ���
 * Last Update:2012-04-12
*/
jobcn.pkg("jobcn.public.search.openSelector");
jobcn.pkg("jobcn.public.search.openSelector2");
jobcn.load("jobcn.selector");
jobcn["public"].search.openSelector = function(name,opt){
	opt = opt || {showTown: false}
	var _selector = new jobcn.selector({type:"area",titleId:"#so"+name+"Tit", 
		idObj:"#so"+name+"Val",
		textObj:"#so"+name+"Txt",
		titleObj:"#so"+name+"Tit",
		townObj:"#so"+name+"Town",
		townVals : "#so"+name+"Towns",
		selectType:"multiple",max:5,
		position:"center",
		showTown:opt.showTown,
		modal:true,
		boxclass:"jobcn_selecter",
		onopen : function(box){
			if(opt.showTown){
				box.find(".workTown .workTownTxt").val($("#so"+name+"Town").val());
			}
			jobcn.Analytics.Track("/������/"+name+"/�򿪵���������");
		}
	});
	return _selector;
}
jobcn.load("jobcn.selectorV2");
jobcn["public"].search.selectorV2 = function(name,opt){
	opt = opt || {showTown: false}
	var _selector = new jobcn.areaSelector({type:"area",titleId:"#so"+name+"Tit", 
			idObj:"#so"+name+"Val",
			textObj:"#so"+name+"Txt",
			titleObj:"#so"+name+"Tit",
			townObj:"#so"+name+"Town",
			townVals : "#so"+name+"Towns",
			selectType:"multiple",max:5,
			position:"center",
			showTown:opt.showTown,
			townInput:opt.townInput,
			inputTxt:opt.inputTxt,
			modal:true,
			boxclass:"jobcn_selecter",
			onopen : function(box){
				if(opt.showTown){
					box.find(".workTown .workTownTxt").val($("#so"+name+"Town").val());
				}
				jobcn.Analytics.Track("/������/"+name+"/�򿪵���������");
			}
		});
	return _selector;
}
jobcn["public"].search.selectorV2bind = function(name,tips){
	var $Town = $("#so"+name+"Town"),
		$Towns = $("#so"+name+"Towns"),
		$Val = $("#so"+name+"Val"),
		$Txt = $("#so"+name+"Txt"),
		$Tit = $("#so"+name+"Tit");
	jobcn.form.input.watermark($Tit,"�����빤������",{form:"#so"+name+"Form"});
	if(tips!==false) tips=true;
	if(tips){
		seajs.use("jobcn.autoComplete",function(autoComplete){
			autoComplete({
				iptId:"so"+name+"Tit"
				,rstId:"so"+name+"Result"
				,type:"city"
				,max:6	
			})
		});
	}//�Ƿ��Զ���ʾ
	
	//���ȡ5��
	var max5 = function(s){
			s = s.replace(/[~!@#\$\%\\\^&*\(\)\{\}\:\"\<\>\?\.\/������,������������������\'\[\]\-\=\| ]|or|and/g,";")
			s = s.replace(/^[;]{1}|[;]$/g,"").replace(/;{1,}/,";")
		var arr = s.split(";");
			if(arr.length>5) s = arr.slice(0,5).join(";");
		return s;
	}
		$("#so"+name+"Tit")
		.keyup(function(e){
			var self = $(this);
			var ee = e.keyCode||e.which;
			var iput = $(this);
			var key = iput.val();
			if(ee<49) return;
			var title = key;
			iput.val(max5(title));
			iput.val(title).attr("title",title);
			$Town.val(iput.val().replace(" ",""));
			$Towns.val("");
			$Val.val("");
			$Txt.val("");
		})
		.focus(function(){
			var self = $(this);
			self.attr("data-old",self.val());
		})
		.blur(function(){
			var self = $(this);
			if(self.attr("data-old")!=self.val()) $Val.val("");
			var t = $Tit.val()
				t = max5(t);
				$Town.val(t);
				$Tit.val(t);
				if($Town.val()!==""&&$(this).attr("track")!=="a"){
					$(this).attr("track","a");
					jobcn.Analytics.Track("/������/"+name+"/�ֶ��������");
				}
		});
		$("#so"+name+"Form").submit(function(){	
			var t = $Tit.val()
				t = max5(t);
				$Town.val(t);
				$Tit.val(t);
			if(name.toLowerCase().indexOf("job")>0)
				return jobcn["public"].search.submit(name);
		});
}
jobcn["public"].search.submit =function(name){
	var key = $("#so"+name+"Key");
	var areaKey = $("#so"+name+"Tit");
	if(key.val()== "" && areaKey.val()==""){
		jobcn.ui.warn("&nbsp;������ؼ��ֻ����",{
			zIndex:1000,
			boxclass:"jobcn_ui_info",
			timeout:3000,
			modal:true,
			draggable:true,
			onopen:function(o){
				o._box.css("opacity",1);//��ε���޷���ʾ������
			}
			,onclose:function(){
				key.focus()
			}
		});
		return false;
	}
	if(key.val()!=""){
		$("#so"+name+"By").val("default");//�����������
		key.val(key.val().replace(/��/g,',').replace(/��/g,';'));
		key.val(jobcn.util.toHalf(key.val()));//ȫ��ת���
	}
	return true;
}

/*
 * public����ģ��.loginģ��.״̬����
 * Last Update:2012-03-05
*/
 jobcn.pkg("jobcn.public.login");
 jobcn["public"].login = function(u){
 	var cache,online,offline,status;
 	var action = {
 		user:"p",	//Ĭ�ϸ���
 		name:null,
 		htmlID:"per",
 		active : "person",
 		msg:{NEW:0,ALL:0},
 		update:function(){
	 		//����ҳ��״̬
	 		cache = jobcn.Cache.get;
			online = cache("#"+ this.htmlID +"_login_online");
			offline = cache("#"+ this.htmlID +"_login_offline");
	 		if(this.isOnline()){
	 			online.show();
	 			offline.hide();
	 			online.find("#"+ this.htmlID+"_login_name").html(this.name);
	 			if(this.msg.NEW>0){
	 				online.find("#"+ this.htmlID +"_login_msg").html("��Ϣ(<b class=\"f30\">"+ this.msg.NEW +"</b>/"+ this.msg.ALL +")");
	 			}else{
	 				online.find("#"+ this.htmlID +"_login_msg").html("��Ϣ");
	 			}
	 		}else{
	 			online.hide();
	 			offline.show();
	 		}
	 	},
	 	isOnline :function(){
	 		//�ж��˺��Ƿ��¼
	 		var is = null,
	 			user = this.user;
	 		if(user=="p") {
	 			is = jobcn.Person.perAccountId;
				this.name = jobcn.Person.perName;
				this.msg.NEW = jobcn.Person.newMsgCount;
				this.msg.ALL = jobcn.Person.totalMsgCount;
				this.active = "person";
			}
	 		if(user=="c") {
	 			is = jobcn.Company.comId;
				this.name = jobcn.Company.userName;
				this.msg.NEW = jobcn.Company.newMsgCount;
				this.msg.ALL = jobcn.Company.totalMsgCount;
				this.active = "company";
			}
	 		return is;
	 	},
	 	logout:function(){
	 		//�˳�ָ���˺�
	 	},
	 	refresh : function(){
	 		//ˢ�����ߵ�״̬	 		
			if(status == null && this.isOnline())
			{
				status=setInterval(function(){
					var img = new Image();img.src="/"+ this.active +"/active_action.xhtml?_t="+(new Date()).getTime();img=null;
				}, 10*60*1000);//ÿ10����
			}
	 	}
	 };
		action.user = u||"p";
		action.htmlID = action.user == "p" ?"per":"com";
		action.update();
		action.refresh();
 };

/*
 * public����ģ��.temp��ʱ��.vote����ͳ��ģ��
 * Last Update:2012-04-25
*/
jobcn.pkg("jobcn.public.temp.vote");
jobcn["public"].temp.vote = function(url){
	
	var filter = [];
		filter.push("/about/");
		filter.push("/search/view.xhtml");//����Ԥ��
		filter.push("/cozone/");//��רҳ
		filter.push("/company/vas/order/preview");//��ͬ��ӡ
	var pathname = location.pathname.toLowerCase();
	for(var i=0;i<filter.length;i++){
		if(pathname.indexOf(filter[i])>-1) return;
	}
	url = url || "";	
		var LOGO4 = $('<a id="LOGO4" title="˵˵����ʹ�ø���" href="'+url+'/about/contact.jsp?p=feel#center" target="_blank" style="position:fixed;"><img style="display:none;" src="'+url+'/commImage/bdsi.png" alt="˵˵����ʹ�ø���"></a>');
		if(jobcn.isIE6||jobcn.isIE7) LOGO4.css("position","absolute");
			LOGO4.appendTo("body");
			//jdefl_width �Ŀ����980  top_nav_div�Ŀ����1004
			LOGO4.css("right",$("div.jdefl_width").offset().left - 12 - 30 -5).css("top",$(window).scrollTop()+ 33); //�ֶ����ÿ�ȸ߶ȸ���
		$(window).resize(function(){
			var nTop = 33;
			var left =  $("div.jdefl_width").offset().left - 12 - 30 -5
			if(jobcn.isIE6||jobcn.isIE7) nTop = $(window).scrollTop()+ 33;
				LOGO4.css("right",left).css("top",nTop);
		}).scroll(function(){
			var nTop = 33;
			var left =  $("div.jdefl_width").offset().left - 12 - 30 -5;
			if(jobcn.isIE6||jobcn.isIE7) nTop = $(window).scrollTop()+ 33;
				LOGO4.css("right",left).css("top",nTop);
		});		
}

 /**
 * public����ģ��.backTOP���ض���
 * Update:2012-06-11
 */
jobcn.pkg("jobcn.public.backTOP");
jobcn.pkg("jobcn.public.click2top");
jobcn.pkg("jobcn.public.addFav");
jobcn["public"].addFav = function(){
	if (document.all){ 
		window.external.addFavorite(window.location, document.title); 
	}else if (window.sidebar) { 
		window.sidebar.addPanel(document.title,window.location, "");
	}else{
		alert("�밴Ctrl+D�ղ�!");
	}
	return false;
}
jobcn["public"].filterShare = function(){
	var thisHREF = document.location.pathname;
	if(!thisHREF){
		return true;
	} else if(thisHREF.startWith("/person/") || thisHREF.startWith("/company/") || thisHREF.startWith("/hr/") || thisHREF.startWith("/position/detail.xhtml")){
		return false;
	}else{
		return true;
	}
}

jobcn["public"].click2top = function(){
	//���FF����˸
	var sel = "body";
	if($.browser.mozilla){
		sel = "html";
	}else if($.browser.msie){
		sel = "html";
	}else if($.browser.opera){
		sel = "html";
	}
	$(sel).animate({scrollTop:0},0);
}
jobcn["public"].backTOP = function(style){
	var boxMaxH = 350
		,pathname = location.pathname.toLowerCase()
		,filter = []
		,ftHtml = []
		,ie6hack = jobcn.isIE6?"position:absolute;top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-"+boxMaxH+"));":""
		,body = $("body")
		filter.push("/cozone/");
		filter.push("/company/vas/order/preview");//��ͬ��ӡ
		style = style || "overflow:visible;z-index:490;position:fixed;"+ie6hack+"height:"+boxMaxH+"px;";
	for(var i=0;i<filter.length;i++){
		if(pathname.indexOf(filter[i])>-1) return;
	}
		ftHtml.push('<div id="backTOP" style="'+style+'" class="float_toolbar_r">');
		if(jobcnX && (undefined === jobcnX.Company_Host)){
			ftHtml.push('<div id="JQRimg" style="display:none;overflow:visible;position:absolute;left:0;top:0;"><img src="/commImage/ui/btn/twoDimensionalCode.png" style="position:absolute;left:-157px;top:-206px;width:174px;height:174px;padding:16px;background:#fff;border:1px solid #afafaf" alt="��ά��" /><a href="javascript:;" style="position:absolute;left:20px;top:-221px;background:#afafaf;color:#fff;font-size:12px;text-indent:0;width:31px;height:15px;line-height:15px;text-align:center">�ر�</a></div>');
		}
		ftHtml.push('<div style="width:50px;overflow:hidden">');
		if(jobcnX && (undefined === jobcnX.Company_Host)){
			ftHtml.push('<a href="javascript:;" title="��ά��" class="twoDimensionalCode">��ά��</a>');
			ftHtml.push('<a href="http://www.jobcn.com/about/weibo.jsp" title="΢����ע" class="weibo" target="_blank">΢����ע</a>');
		}
		if (jobcn["public"].filterShare()) {
			ftHtml.push('<a href="javascript:;" class="fenxiang" title="����"><span id="shareTo"></span></a>');
		}
		ftHtml.push('<a href="javascript:;" onclick="jobcn.public.addFav();" title="�ղر�ҳ" class="favorites">�ղ�</a>');
		ftHtml.push('<a href="http://www.jobcn.com/about/contact.jsp" target="_blank" title="��ӭ��׿���Ὠ��" class="proposal">����</a>');
		ftHtml.push('<a href="javascript:;" onclick="jobcn.public.click2top()" style="display:none;" class="top_triangle" title="���ض���"></a>');
		ftHtml.push('</div></div>');
	var backTOP = $(ftHtml.join(''))
		,WIN = $(window)
		,DOC = $(document)
		,W = WIN.width()
		,oTOP = WIN.height() - boxMaxH
		,reSet = function(){
			WIN = $(window)
			,DOC = $(document)
			,W = WIN.width()
			if(W>1024){
				var nTop = WIN.height()- boxMaxH;
				// if(!jobcn.isIE6){backTOP.css({"left":(W -(W-1004)/2) + 5 +"px","top":nTop +"px"});}
				if(!jobcn.isIE6){backTOP.css({"top":nTop +"px"});}
				backTOP.show().find(".top_triangle").show();
			}else{
				backTOP.hide();
			}
			if(DOC.scrollTop()<1){
				setTimeout(function(){
					backTOP.find(".top_triangle").fadeOut("fast");
				},200);
			}
		}
		backTOP.find(".twoDimensionalCode").click(function(){
			try{jobcn.Analytics.Track("/��ά��/");}catch(e){}
		});
		backTOP.find(".favorites").click(function(){
			try{jobcn.Analytics.Track("/�ղ�/");}catch(e){}
		});
		backTOP.find(".fenxiang").click(function(){
			try{jobcn.Analytics.Track("/����/");}catch(e){}
		});
		// QR
		$(document).click(function(event){
			var $el = $(event.target);
			var JQRimg = $('#JQRimg');
			if (JQRimg.length === 0){
				return;
			}
			if($el.hasClass('twoDimensionalCode')){
				if(JQRimg.css('display') !== 'block'){
					JQRimg.show();
				} else {
					JQRimg.hide();
				}
				return;
			} else {
				JQRimg.hide();
			}
		});

	body.append(backTOP);
    backTOP.css({left: "50%", marginLeft: "507px"});
	// backTOP.css({"left":(W -(W-1004)/2) + 5 +"px"});
	backTOP.css({"top":oTOP +"px"});
	$(window).scroll(reSet).resize(reSet);
	
	if(jobcn["public"].filterShare()){
		var imgArray = [], imgUrl="";
		//��Ҫ�����ȥ��ͼƬ
		imgArray.push("http://www.jobcn.com/cozone/20/04/200406/page/images/1001.jpg");
		imgArray.push("http://www.jobcn.com/cozone/20/04/200406/page/images/1002.jpg");
		imgArray.push("http://www.jobcn.com/hr/hrWeekly/2012/images/weibo3.jpg");
		imgArray.push("http://www.jobcn.com/hr/hrWeekly/2012/images/weibo1jpg");
		var randomNum = parseInt((imgArray.length)*Math.random());
		imgUrl = imgArray[randomNum];
		//��ҳ
		var shareText = "#��Ƹ##��ְ#2013�궼���ˣ��㻹���Һúû��ţ��ҷݺù��������������δ����������������(������@׿���˲���������׿�����ҵ�JOB��";
		var path = document.location.pathname;
		if(path.search('login.jsp')>0){
			//���˵�¼ҳ��
			shareText = "#��Ƹ#�ҿ��Լ��ʲ��ɹ����ҿ���լ��������Ҳ������һ���ӵČ�˿�����ǲ�����û�й��������߸�˧Ҳ�ڹ�����������Ҳ�ڹ������һ���ʲô���ɲ�ȥ�ҹ�������������@׿���˲���������׿�����ҵ�JOB��";
		}else if(path.search('search/result.xhtml')>0) {
			if(window.location.hostname == 'hire.jobcn.com'){
				//�����������ҳ��
				shareText = "#��Ƹ#��ô�����������ҹ������Ҷ�ϣ������Ⱥ��һ�۾Ϳ����㡭��û�������㣡��������Ͷ���ͱ���Ͷ�����Ϳ����ˡ���������@׿���˲��� �������˲ţ�����׿����";
			}else{
				//ְλ�������ҳ��
				shareText = "#��ְ#��ֻ�������ȥһ���ؼ��ʣ�һ���Ӿͳ���һ�������#��Ƹ#��ְλ��ש��˵����˵������ʲô���ţ���ҵ�����������Ͽ��ҵ�һ�ݹ�����������������@׿���˲���������׿�����ҵ�JOB��";
			}
		}else if(path.search('search/')>0){
			if(window.location.hostname == 'hire.jobcn.com'){
				//��������ҳ��
				shareText = "#��Ƹ#��ʲô�����˲�����أ��������Щǧ��������ţ���ЩǱ�����ֳ��������������������������ҵġ�ֱ��ȥ�������ʺϵļ������ˡ���������@׿���˲����������˲ţ�����׿����";
			}else{
				//ְλ����ҳ��
				shareText = "#��ְ#��˵����ʲô���Ĺ����ȽϺ��أ�����ȥ���������ŵ�ְλ��ʲô��������ȥ�������µĹ�����ʲô���������������������ҵġ�ֱ��ȥ�������ʵĹ������ˡ���������@׿���˲���������׿�����ҵ�JOB��";
			}
		}else if(path == '/help/index.xhtml'){
			//����������ҳ
			shareText = "��������һ��#��ְ#���桭�����������е����ⶼ����������õ���𡣡���������һ��#��Ƹ#���桭��������������������ⶼ����������õ���𡣡��ɶ���֪����̫���ˣ��˼�ֻ�������ͷ�������������ľ�У���������@׿���˲���������׿�����ҵ�JOB��";
		}else if(path == '/reg/'){
			//����ע��ҳ��
			shareText = "#��ְ#�Ҹո��������ҵĵ�һ���������е�С����~�᲻����һ�̾��е绰�����أ�(������@׿���˲���)����׿�����ҵ�JOB�� ";
		}else if(window.location.hostname == 'hire.jobcn.com'){
			//��ҵ��¼ҳ��
			shareText = "#��Ƹ#��׼�������￪��һƬɽͷ����������������ɲţ���·Ӣ�ۣ�����������Ҫ���ˡ����ߺߣ�Ԫ�������ÿ��ˣ�ֱ�Ӹ������£���������@׿���˲����������˲ţ�����׿����";
		}
		new jobcn.bdshare("#shareTo", {
			displayStyle:'button_small_mini_more_byself',
			hasImage:1,
			bdText:shareText,
			bdComment:"������Ч����ְλ������20����ҵ��ѡ������������ ��#����#��#��Ƹ#�˲ţ�����׿���˲�����",
			bdDes:"",
			url:"http://www.jobcn.com",
			bdPic:imgUrl
		});
	}
}
//�ƶ�������������Ҫ���õĵط� ��foot

jobcn.pkg("jobcn.public.showComPhoto");
jobcn.load("ol.slider");
jobcn["public"].showComPhoto = function(comId,comName,jobs){
	if(!_P) _P = { comPhoto:{}}
	if(!_P.comPhoto) _P.comPhoto = {}
	if(!_P.comPhoto["_"+comId]){
		new jobcn.ajax().submit({
			url:"/position/view_com_images_action.ujson?comId="+comId,
			timeout:20000,
			timeoutFunction:function(){
				alert("��ȡ��ʱ�������ԣ�");
			},
			beforeSendFunction:function(){
				jobcn.ui.loading.show({modal:false});
			},
			afterSendFunction:jobcn.ui.loading.hide,
			successFunction:function(json){
				if(json.success){
					urls = json.comImgList;
					var html="";
					for(var i=0;i<urls.length;i++){
						html+='<a href="http://'+json.imageHost + urls[i].imagePath+'" title="'+urls[i].Description+'"></a>';
					}
					html =$('<span id="comPhoto'+comId+'" style="display:none">'+html+'</span>'); 
					html.find("a").colorbox({rel:'group'+comId, thumb:true, slideshow: false,jobs:jobs, comName : comName ,maxWidth : '710px',maxHeight: '560px',innerWidth:"710px",innerHeight:"450px",initialWidth:"710px",initialHeight:"450px",scrolling:false,opacity: 0.6});
					$("body").append(html);
					_P.comPhoto["_"+comId] = true;
					$("#comPhoto"+comId).find("a").eq(0).click();
					
					
					var bindFN = function(shareTo){
						if(!jobcn.Person.Session.isLogin()) return;
						new jobcn.ajax().get({
							url:"/person/log_share.ujson?shareTo="+shareTo,
							timeout:20000
						});	
					}
					
					setTimeout(function(){
						var pop = jQuery("#bdshare_m_c ul li");
				  	  	if(pop){
				  	  		pop.each(function(){
				  	  			jQuery(this).bind("click", function(){
				  	  				var shareTo = $(this).find("a").attr("class");
				  	  				if(shareTo){
				  	  					if(shareTo != 'bds_more'){
				  	  						bindFN(shareTo)
											return;
				  	  					}
				  	  				}
				  	  			})
				  	  		})
				  	  	}
						var spanTags= jQuery("#bdshare span");
						if(spanTags){
							spanTags.each(function(){
				  	  			jQuery(this).bind("click", function(){
				  	  			var shareTo = $(this).find("a").attr("class");
				  	  			if(shareTo){
				  	  				bindFN(shareTo)
				  	  			}else{
				  	  				setTimeout(function(){
				  	  					var moreLiTags = $("#bdshare_pop ul li");
					  	  				if(moreLiTags.length > 0){
							    			moreLiTags.each(function(){
							    				$(this).bind("click", function(){
							    					shareTo = $(this).find("a").attr("class");
							    					if(shareTo != 'print' && shareTo != 'kaobei'){
								    					bindFN(shareTo)
							    					}
							    				})
							    			});
							    		}
				  	  				}, 1000);
				  	  			}
				  	  		});
				  	  	});
						}
					}, 2000);
				}
			},
			errorFunction:function(){
				alert("��ȡʧ�ܣ������ԣ�");
			}
		});
	}else{
		$("#comPhoto"+comId).find("a").eq(0).click();
	}
}
/*Ǩ�Ƶ�������¼����*/
/**
 * reqType ���������  0 ��½��֤����   1 ����֤����
 * type 0=sina  1=qq 2=renren 3=msn 4=baidu 5=alipay 
 */  
var other_login = function(reqType,type){
	$.ajax({
		type: "POST",
		url:"/thirdLogin/getAuthorizationCode.xhtml",
		data: "current_loginuser_url="+escape(window.location.href)+"&reqType=" + reqType + "&type=" + type,
		dataType: "json",
		success: function(data) {
			var reqURL = data.reqUrl;
			if(reqURL==undefined || reqURL == "") {
				jobcn.ui.alert("�����������½ʱ�������������ԣ�",{
					 title:"����������",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
				return;
			}
			window.open(reqURL,"_parent","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500");
		}
	});
}
var thirdLoginFn = function(){
	//sina login
	$(".sina_login").bind("click",function(){
		other_login(0,0);
	});
	
	//QQ login
	$(".qq_login").click(function(){
		other_login(0,1);
	});
	
	//renren login
	$(".renren_login").click(function(){
		other_login(0,2);
	});
	
	//msn login
	$(".msn_login").click(function(){
		other_login(0,3);
	});
	
	//baidu login
	$(".baidu_login").click(function(){
		other_login(0,4);
	});
	
	//alipay login
	$(".alipay_login").click(function(){
		other_login(0,5);
	});
} 
$(function(){
	thirdLoginFn();
});
//ע��һ�����û�
var register = function() {
	//var name = $("#no_username").val();
	//var password1 = $("#no_password1").val();
	var email = $("#no_email").val();
	var redirect = '';
	
	$.ajax({ 
		type:"POST",
		url:"/thirdLogin/registerUser.xhtml",
		data:"email="+email, 
		success: function(data){
			if(data.isSuccess == '0') {
				jobcn.ui.alert("ע��ʧ�ܣ�������ע�ᣡ",{
					 title:"�û�ע��",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
				return;
			}
			if(data.isSuccess == '4') {
				$("#tip").html("��������Ϊ������ȷ��д!");
				return;
			}
			
			if(data.isSuccess == '1') {
				jobcn.ui.alert("�û����Ѿ���ע�ᣡ",{
					 title:"�û�ע��",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
				return;
			}
			if(data.isSuccess == '2') {
				jobcn.ui.alert("��ע��������Ѿ����ڣ�",{
					 title:"�û�ע��",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
				return;
			}
			if(data.isSuccess == '3') {
				jobcn.ui.alert("��ע����û����������Ѿ����ڣ�",{
					 title:"�û�ע��",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
				return;
			}
			
			window.location.replace(data.redirect);
		}
	});
	return false;
}

//�������ʺŵ�½����һ��׿���ʺ�
var binding = function() {
	var name = $("#username").val();
	var password = $("#password").val();
	var redirect = '';
	$.ajax({ 
		type:"POST",
		url:"/thirdLogin/bindingAccount.xhtml",
		data:"name="+name+"&password="+password, 
		success: function(data){
			if(data.success=='1') {
				jobcn.ui.alert(data.error,{
					 title:"�û���",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
			} else {
				window.location.replace(data.redirect);
			}
		}
	});
	return false;
}

//���ע����û����Ƿ��Ѿ�����
var checkExistName = function() {
	var name = $("#no_username").val();
	if(name=='') {
		jobcn.ui.alert("�û�������Ϊ�գ�",{
			 title:"�û�ע��",
			 modal:true,
			 draggable: true,
			 timeout: 5000
		});
		return;
	}
	$.ajax({ 
		type:"POST",
		url:"/person/register_checkuserName.xhtml",
		data:"userName="+name, 
		success: function(data){
			if(!data.success) 
				jobcn.ui.alert(data.msg,{
					 title:"�û�ע��",
					 modal:true,
					 draggable: true,
					 timeout: 5000
				});
			return data.success;
		}
	});
	return false;
}
var openUnbinded = function(id,accountType) {
	vbox = new ol.box(null,{ 
		boxid:"unbind_box_id"+id,
		title:"�������ʺŽ����",
		showCancel:false, 
		showButton:false,
		type:"ajax",
		modal:true,
		height:400,
		width:600,
		position:"center",
		onok:function(){
			unbindedAccount();
		},
		oncancel:function(){vbox.close();},
		onopen:function(box){
			if(accountType == 0) { 
				box.getBox().find("#tip").html("��Ҫ���������΢���ʺŵİ��𣿽�����������ͨ������΢���ʺŵ�¼׿���˲���������ʱ����������΢���˻����°󶨡�<br>ȷ�ϲ�����?");
			}
			if(accountType == 1) { 
				box.getBox().find("#tip").html("��Ҫ�������ѶQQ�İ��𣿽�����������ͨ����ѶQQ��¼׿���˲���������ʱ��������ѶQQ�˻����°󶨡�<br>ȷ�ϲ�����?");
			}
			if(accountType == 2) { 
				box.getBox().find("#tip").html("��Ҫ������������ʺŵİ��𣿽�����������ͨ���������ʺŵ�¼׿���˲���������ʱ�������������˻����°󶨡�<br>ȷ�ϲ�����?");
			}
			if(accountType == 3) { 
				box.getBox().find("#tip").html("��Ҫ�����MSN�İ��𣿽�����������ͨ��MSN��¼׿���˲���������ʱ������MSN�˻����°󶨡�<br>ȷ�ϲ�����?");
			}
			if(accountType == 4) { 
				box.getBox().find("#tip").html("��Ҫ�����ٶ��ʺŵİ��𣿽�����������ͨ���ٶ��ʺŵ�¼׿���˲���������ʱ������ٶ��˻����°󶨡�<br>ȷ�ϲ�����?");
			}
			if(accountType == 5) { 
				box.getBox().find("#tip").html("��Ҫ�����֧�����ʺŵİ��𣿽�����������ͨ��֧�����ʺŵ�¼׿���˲���������ʱ������֧�������°󶨡�<br>ȷ�ϲ�����?");
			}
			$("#unbinded_id").val(id);
			$("#accountType_id").val(accountType);
		},
		clickOut:function(box){box.close();}
	});
	vbox.open("/person/account/remove_connect.jsp?r="+Math.random());
}

//������
var bindedAccount = function(id,accountType) {
other_login(1,accountType);
}

//�ύ���������
var unbindedAccount = function() {
var id = $("#unbinded_id").val();
var accountType = $("#accountType_id").val();
$.ajax({
	url:"/thirdLogin/unbindedAccount.xhtml",
	type:"POST",
	data:"id=" + id,
	dataType:"json",
	success:function(data){
		if(data.isUnbinded == 1) {
			window.location.reload();
		} else {
			jobcn.ui.alert("�����ʧ�ܣ�",{
				 title:"������",
				 modal:true,
				 draggable: true,
				 timeout: 5000
			});
		}
	}
});
}

//������������е�����logo���ӵ���¼��İ�
var person_unbind = function() {
$(".noclick").unbind();
}
$(function(){
	person_unbind();
});
/*��������¼end*/

//����ͳ��ϵͳ������ͼ
jobcn.pkg("jobcn.public.killIframe");
jobcn["public"].killIframe = function(){
var f = [];
	if(/baidu\.com|google-analytics|search_templates|search_fancy_templates/.test(document.referrer)) return;
	f.push("/company/");
	f.push("/person/");
	var url = window.location.pathname.toLowerCase().replace(/\/{1,}/g,"/");
	for(var i=0;i<f.length;i++){
		if(url.indexOf(f[i])>-1 && url!="/") return;
	}
	/*��ֹ�����*/
	if (window.top.location !== window.self.location) {
		window.top.location= window.self.location;
	}
}
jobcn["public"].killIframe();

/*�����ǰ�Ȩ���ô���*/
function copyright(){
	
	var _inscribe =  document.getElementById("inscribe");    
    var year = new Date().getFullYear();
    var copyright ="";
    
    if(_inscribe)
    {
    	copyright = "&copy; 1999 - " + year + " <a href='http://www.jobcn.com' target='_blank' title='׿���˲���'>jobcn.com</a> <a href='http://www.jobcn.com' target='_blank' title='׿���˲���'>׿���˲���</a>��Ȩ����";
    	_inscribe.innerHTML = copyright;
    }
    else
    {
	   copyright = "Copyright &copy; 1999 - " + year + " jobcn.com All Rights Reserved ׿���˲�����Ȩ����";
	   document.getElementById("footer").innerHTML = copyright;
    }	
}
