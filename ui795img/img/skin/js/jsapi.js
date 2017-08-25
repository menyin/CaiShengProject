/**
公共代码类
Author:		Lulu
Last Edit:	2011-12-16
Version:	0.6
**/

if (!window['ol']) {
	window['ol'] = {
		debug:true,
		//IE hack  IE=true, other=0
		isIE:/*@cc_on!@*/0,
		isIE6:false,
		isIE7:false,
		isIE8:false
	};
}
/**
 * ol.pkg
 * 按照指定参数，构造包
 * Last Update:2011-4-8
 */
ol.pkg=function(arg1,arg2,arg3){
	var context,namespace,method;
	if(arguments.length==3)
	{
		context=arg1;
		namespace=arg2;
		method=arg3;
	}else{
		context=window;
		namespace=arg1;
		method=arg2;
	}

	if (!namespace|| !namespace.length) {
		return null
	}
	var a = namespace.split(".");
	for (var c = context,	f = 0; f < a["length"]-1; f++) {
		c[a[f]] || (c[a[f]] = {});
		c = c[a[f]];
	}
	c=(c[a[a["length"] - 1]] = method||c[a[a["length"] - 1]]||{});
	return c;
};


ol.global = {
	LibPath:null,
	ContextPath:"",
	getScriptPath:function(name){

		var path, p, script = document.getElementsByTagName("script");
		for (var i = 0; i < script.length; i++) {
			p=script[i].src.indexOf(name);
			if(p>0)
			{
				path=script[i].src;
				p = path.lastIndexOf("/");
				return path.substring(0, p + 1);
			}
		}
		return "";
	},
	alert: function(msg, title) {
		alert(msg);
		return true;
	},
	confirm: function(msg, title) {
		return confirm(msg);
	}
};
(function(){
	var index=0;
	ol.loader = {
		domCompleted:false,
		_excute:false,
		mods:{},//常用组件
		_queue:{},//已加载组件
		xhr: function() {
			return window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
		},
		style:{
			_style: function(options) {
				var head = document.getElementsByTagName("head")[0] || document.documentElement,
				link = document.createElement("link"),
				links = document.getElementsByTagName("link");
				link.type = "text/css";
				link.rel = "stylesheet";
				link.href = options.url;
				if (0 < links.length) {
					var _last = links[links.length - 1];
					_last.parentNode.insertBefore(link, _last.nextSibling);
				} else {
					head.appendChild(link);
				}
				return link;
			},
			load:function(options,callback){
				var node=this._style(options);
				if(callback)callback.call(node);
			}
		},
		script:{
			_script: function(options, callback) {
				var head = document.getElementsByTagName("head")[0] || document.documentElement,
				script = document.createElement("script");
				script.type = "text/javascript";
				script.src = options.url;
				script.async = !options.depend;
				if(options.charset)script.charset = options.charset;
				head.appendChild(script);
				return script;
			},
			_scriptOnload:document.createElement('script').readyState ?
			function(node, callback) {
				var oldCallback = node.onreadystatechange;
				node.onreadystatechange = function() {
					var rs = node.readyState;
					if (rs === 'loaded' || rs === 'complete') {
						oldCallback && oldCallback();
						if(callback)callback.call(node);

						// Handle memory leak in IE
						node.onreadystatechange = null;
						var head = document.getElementsByTagName("head")[0] || document.documentElement;
						if ( head && node.parentNode ) {
							head.removeChild(node);
						}
					}
				};
			} :
			function(node, callback) {
				node.addEventListener('load', callback, false);
			},
			load:function(options,callback){
				var script=this._script(options,callback);
				this._scriptOnload(script,callback);
			},
			//即时插入(适合于依赖加载且在dom未完成时候)
			insert:function(mod,callback){
				var _callback=[];
				if(mod.onload)
				{
					_callback.push("(");
					_callback.push(mod.onload);
					_callback.push(")();");
				}
				if("object"==typeof(callback))
				{
					for(var i=0;i<callback.length;i++)
					{
						if("function"==typeof(callback[i]))
						{
							_callback.push("(");
							_callback.push(callback[i]);
							_callback.push(")();");
						}else if("string"==typeof(callback[i])){
							_callback.push(callback[i]);
						}
					}
				}

				var charset=''
					,doc = document
					,head = doc.head || doc.getElementsByTagName('head')[0] || doc.documentElement
					,js
				if(mod.charset)charset='charset="'+mod.charset+'"';
				
			    if(/MSIE 10.0/.test(navigator.userAgent) && document.documentMode === 10){
					js = document.createElement("script")
					js.id=id;
					js.src=mod.url;
					if(mod.charset)js.charset=mod.charset;
					head.appendChild(js);
			      if(_callback.length>0){
			    	  js = doc.createElement("script");
			    	  js.text = _callback.join("");
			    	  head.appendChild(js);
			      }
			    }else{
			    	var id="jsapi_loader"+(index++)
			    		document.write('<script id="'+id+'" loadType="insert" type="text/javascript" src="'+mod.url+'" '+charset+'></s' + 'cript>');
			    	if(_callback.length>0){
						if(ol.isIE)
						{
							js=document.getElementById(id);
							//IE6、IE7 support js.onreadystatechange
							js.onreadystatechange = function () {
								if (js.readyState == 'complete') {
									var script = document.createElement("script");
									script.type = "text/javascript";
									if (ol.loader._excute) {
										script.appendChild(document.createTextNode(_callback.join("")));
									} else {
										script.text = _callback.join("");
									}
									js.parentNode.insertBefore(script, js.nextSibling);
								}
							}
						}else{
							document.write('<script>'+_callback.join("")+'</script>');								
						}
					}
			    }
				
				
			}
		},
		ready:function(_function){
			ol.loader.setDomCallback.callBack(_function);
		},
		//参照jquery
		setDomCallback: {
			Queues: [],
			Run: function() {
				var Q = ol.loader.setDomCallback.Queues;
				for (var i = 0; i < Q["length"]; i++) Q[i].call(document);
				ol.loader.setDomCallback.Queues.length = 0;
			},
			DOMContentLoaded:function(){
				if ( document.addEventListener ) {
					document.removeEventListener( "DOMContentLoaded", ol.loader.setDomCallback.DOMContentLoaded, false );
					ol.loader.setDomCallback.ready();

				} else if ( document.attachEvent ) {
					// Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
					if ( document.readyState === "complete" ) {
						document.detachEvent( "onreadystatechange", ol.loader.setDomCallback.DOMContentLoaded );
						ol.loader.setDomCallback.ready();
					}
				}
			},
			ready:function(){
				// Make sure that the DOM is not already loaded
				if (ol.loader.domCompleted)return;
				// Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
				if (!document.body){
					setTimeout(ol.loader.setDomCallback.ready, 13 );
					return;
				}
				// Remember that the DOM is ready
				ol.loader.domCompleted = true;
				ol.loader.setDomCallback.Run();
			},
			bindReady:function(){
				var DOMContentLoaded=ol.loader.setDomCallback.DOMContentLoaded;
				var ready=ol.loader.setDomCallback.ready;

				// Catch cases where $(document).ready() is called after the
				// browser event has already occurred.
				if ( document.readyState === "complete" ) {
					ready();
					return;
				}

				// Mozilla, Opera and webkit nightlies currently support this event
				if ( document.addEventListener ) {
					// Use the handy event callback
					document.addEventListener( "DOMContentLoaded", DOMContentLoaded, false );

					// A fallback to window.onload, that will always work
					window.addEventListener( "load", ready, false );

				// If IE event model is used
				} else if ( document.attachEvent ) {
					// ensure firing before onload,
					// maybe late but safe also for iframes
					document.attachEvent("onreadystatechange", DOMContentLoaded);

					// A fallback to window.onload, that will always work
					window.attachEvent( "onload", ready );

					// If IE and not a frame
					// continually check to see if the document is ready
					var toplevel = false;

					try {
						toplevel = window.frameElement == null;
					} catch(e) {}

					if ( document.documentElement.doScroll && toplevel ) {
						ol.loader.setDomCallback.doScrollCheck();
					}
				}
			},
			doScrollCheck:function(){
				if (ol.loader.domCompleted)	return;

				try {
					// If IE is used, use the trick by Diego Perini
					// http://javascript.nwbox.com/IEContentLoaded/
					document.documentElement.doScroll("left");
				} catch( error ) {
					setTimeout(ol.loader.setDomCallback.doScrollCheck, 1 );
					return;
				}

				// and execute any waiting functions
				ol.loader.setDomCallback.ready();
			},
			//回调函数
			callBack: function(fun) {
				if(typeof(fun)!="function")return;
				var Queues = ol.loader.setDomCallback.Queues;
				var Run = ol.loader.setDomCallback.Run;

				if(ol.loader.domCompleted)
				{
					fun.call(document);
					return;
				}else if (Queues["length"] == 0) {
					ol.loader.setDomCallback.bindReady();
				}
				ol.loader.setDomCallback.Queues["push"](fun);
			}
		},
		add:function(modName,requireLibs){
			this.mods[modName]=requireLibs;
		},
		remove:function(modName){
			delete this.mods[modName];
		},
		/**
		**	options属性:
		**	loadType://加载方法;lazy为DomContentLoaded后加载
		**	onload://加载js后立即执行
		**	callback://加载js后,在DomContentLoaded后执行
		**/
		load:function(mods,options){
			return new ol.loader._loader(mods,options);
		},
		/**
		**	mods(object array[string/object] string) 加载内容
		**	callback(function) 回调函数
		**	options(function/object) 配置
		**	loadType(string) 加载类型[lazy:延迟加载]
		**/
		_loader:function(mods,options){
			var self=this;
			this._css_queue={};
			this._js_queue={};
			this._wait_js_queue=[];//未完成队列(js)
			this._operateType=null;//操作类型
			this._type={
				"js":{
					_queue_been_load:function(mod){
						//log("been load",mod.mark);
						//读取下一元素
						var _m=self._js_queue[self._get(0)];
						if(_m){
							//log("next",_m.mark);
							self._load(_m);
						}else{
							//log("last",mod.mark);
							self._success();
						}
					},
					_lazy_load:function(mod){
						/*
						* 2010-09-26
						* 当loadType=lazy和加载的插件集合有依赖关系时,回调函数可能会出错.
						* 因为lazy下,最后执行的load不一定会最后完成
						*/
						//将回调函数传给最后执行的load
						var _c=self._hasNext()?null:options.callback;
						ol.loader.load(mod,_c);
					},
					_load:function(mod){
						//log("load",mod.mark);
						//下一个元素是否依赖
						var _m=self._js_queue[self._get(1)];
						if(!ol.loader.domCompleted){
							self._remove(mod);
							//即时回调函数
							var _callBack=[];
							_callBack.push('ol.loader._queue["'+mod.mark+'"]={status:"complete"};');//string/function
							//_callBack.push('log("'+mod.mark+'","insert complete");');//string/function*/

							//最后一个元素,执行回调

							if(!_m){
								if(options.onload){
									_callBack.push(options.onload);//响应立即回调
								}
								if(options.callback){
									ol.loader.ready(options.callback);//响应回调
								}
							}
							ol.loader.script.insert(mod,_callBack);
							//加载下一个元素
							if(_m)self._load(_m);
						}else{
							self._wait_js_queue.push(mod.mark);
							var depend=_m?(options.depend||_m.depend):false;
							if(depend)self._remove(_m);
							//回调函数
							var _callBack=function(){
								//log(mod.mark,"complete");
								try{
									if(mod.onload)mod.onload();
									if(mod.callback)mod.callback();
								}catch(e){
									logger.error("'"+(mod.mark)+"' onload or callback",e);
								}
								self._remove(mod);
								ol.loader._queue[mod.mark]={status:"complete"};
								//依赖读取
								if(depend){
									self._load(_m);
								}else{
									self._success();
								}
							};
							ol.loader.script.load(mod,_callBack);
						}


					}
				},
				"css":{
					_queue_been_load:function(mod){},
					_lazy_load:function(mod){
						ol.loader.load(mod);
					},
					_load:function(mod){
						ol.loader.style.load(mod,function(){
							self._remove(mod);
							ol.loader._queue[mod.mark]={status:"complete"};
						});
					}
				}
			}
			//放入序列
			this._push=function(mod){
				if(!mod.mark)mod.mark=(mod.uri||mod.url);
				//log("push",mod.mark);
				var _queue=("js"==mod.type?this._js_queue:this._css_queue);
				if(_queue[mod.mark])return;
				_queue[mod.mark]=mod;
			}
			//移除序列
			this._remove=function(mod){
				//log("remove",options.mark);
				var _queue=("js"==mod.type?this._js_queue:this._css_queue);
				delete _queue[mod.mark];
			}
			//生成序列
			this._attach=function(mods){
				if("string"==typeof(mods))
				{
					mods=ol.loader.mods[mods];
					if(!mods)
					{
						//logger.warn("ol.load",mods+" is undefined!");
						return;
					}
					this._attach(mods);
					return;
				}else if("[object Array]"==Object.prototype.toString.apply(mods)){
					for(var i=0;i<mods.length;i++)
					{
						this._attach(mods[i]);
					}
					return;
				}//if end
				this._push(mods);
			}
			//是否还有元素
			this._hasNext=function(){
				for(var k in this._js_queue)
				{
					return true;
				}
				return false;
			}
			//读取队首元素
			this._get=function(index){
				var i=0;
				for(var k in this._js_queue)
				{
					if(i==index)return k;
					i++;
				}
				return null;
			}
			this._load=function(mod){
				mod.type=("js"==mod.type)?"js":"css";
				this._operateType=this._type[mod.type];
				//检查全局是否已加载
				var u=ol.loader._queue[mod.mark];
				if(u)
				{
					this._remove(mod);
					var timer;
					var f=function(){
						var m=ol.loader._queue[mod.mark];
						//log(mod.mark,m.status);
						if(m.status=="complete"){
							clearInterval(timer);
							timer=null;
							self._operateType._queue_been_load(mod);
						}
					};
					if(u.status!="complete"){
						timer=setInterval(f,50);
					}else{
						self._operateType._queue_been_load(mod);
					}
					return;
				}

				var loadType=mod.loadType||options.loadType;
				if(ol.loader.domCompleted)
				{
					//当dom complete后,lazy方式无效
					loadType=null;
				}

				if("lazy"==loadType)
				{
					this._remove(mod);
					ol.loader.ready(function(){
						self._operateType._lazy_load(mod);
					});
					return;
				}
				ol.loader._queue[mod.mark]={status:"active"};
				if(!mod.url){
					if(mod.uri.substr(0,7)=="http://"||mod.uri.substr(0,8)=="https://")mod.url=mod.uri;
					else mod.url=ol.global.LibPath+mod.uri;
				}
				//log("load",mod.mark);

				this._operateType._load(mod);
			}

			/**
			 * 检查是否全部加载完成,完成执行回调
			 * 该方法暂时只会在DomContentLoaded后加载的js才会调用
			 **/
			this._success=function(){
				if(self._hasNext())return;
				//log("load","finish!");
				if(typeof(options.callback)=="function"||typeof(options.onload)=="function"){
					for(var i=0;i<self._wait_js_queue.length;i++)
					{
						if(ol.loader._queue[self._wait_js_queue[i]].status!="complete")
						{
							logger.info("wait",self._wait_js_queue[i]);
							setTimeout(self._success,100);
							return;
						}
					}
					//log("onload",options.onload);
					if(ol.loader.domCompleted){
						if(options.onload){
							setTimeout(options.onload,0);
							options.onload=null;
						}
						if(options.callback){
							setTimeout(options.callback,0);
							options.callback=null;
						}
					}else{
						if(options.onload)options.onload();
						if(options.callback)ol.loader.ready(options.callback);
					}
				}
			}
			if("function"==typeof(options))
			{
				options={callback:options};
			}else if(!options){
				options={};
			}

			if("[object object]"==Object.prototype.toString.apply(mods))
			{
				this._load(mods);
				return;
			}else{
				this._attach(mods);
				//加载css
				for(var k in this._css_queue)
				{
					this._load(this._css_queue[k]);
				}
				//加载js
				if(options.depend)
				{
					//log("depend load",this._get(0));
					this._load(this._js_queue[this._get(0)]);
				}else{
					for(var k in this._js_queue)
					{
						this._load(this._js_queue[k]);
					}
				}
			}
		}
	};
})();
(function() {
	ol.loader._excute = false;
	var root = document.documentElement,
	script = document.createElement("script"),
	id = "script" + (new Date).getTime();
	script.type = "text/javascript";
	try {
		document.write("<!--[if lte IE 6]><script>ol.isIE6=true;</scr"+"ipt><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</scr"+"ipt><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</scr"+"ipt><![endif]-->");
		script.appendChild(document.createTextNode("window." + id + "=1;"));
	} catch(e) {}
	root.insertBefore(script, root.firstChild);
	if (window[id]) {
		ol.loader._excute = true;
		delete window[id];
	}
	root.removeChild(script);
})();

var logger={
	info:function(method,msg){
		if(!ol.debug)return;
		if(typeof(console)!="undefined"&&console.log)
		{
			if(msg)console.log("["+method+"]:"+msg);
			else console.log(method);
		}
	},
	warn:function(method,msg){
		if(!ol.debug)return;
		if(typeof(console)!="undefined"&&console.warn)
		{
			if(msg)console.warn("["+method+"]:"+msg);
			else console.warn(method);
		}
	},
	error:function(method,msg){
		if(!ol.debug)return;
		if(typeof(console)!="undefined"&&console.error)
		{
			if(msg)console.error("["+method+"]:"+msg);
			else console.error(method);
		}
	}
};

function log(method,msg)
{
	logger.info(method,msg);
}

ol.global.LibPath=ol.global.getScriptPath("jsapi");

//ol.loader end
ol.loader.ready(function(){
	ol.loader.domCompleted=true;
	logger.info("Dom","Load Complete!");
});

//绑定包名
ol.pkg("ol.load", ol.loader.load);
ol.pkg("ol.ready", ol.loader.ready);

/* 合并减少http请求
 * by z3f  2013-02
 * */

//定义常用组件
ol.loader.mods["jquery"] =[{mark:"jquery",uri: "js/jquery-1.4.4.min.js",type: "js",	charset: "utf-8",depend:true}];
ol.loader.mods["jquery.form"] = ["jquery",{mark:"jquery.form",uri: "js/jquery.form-2.83-min.js",type: "js",	charset: "utf-8",depend:true}];
ol.loader.mods["jquery.bgiframe"] = [{mark:"jquery.bgiframe",uri: "js/jquery.bgiframe.min.js",type: "js",	charset: "utf-8",depend:true,loadType:"lazy"}];
ol.loader.mods["My97DatePicker"] = [
	{mark:"My97DatePicker",uri: "../My97DatePicker/WdatePicker.js",type: "js",charset: "utf-8",depend:false},
	{uri: "../My97DatePicker/skin/WdatePicker.css",type:"css",	charset: "gbk"}
];
ol.loader.mods["comm"] = [{mark:"comm",uri: "css/comm.css",type: "css",	charset: "utf-8"}];
ol.loader.mods["ajax"] = [
	"jquery",
	"jquery.form",
	{mark:"ajax",uri: "ajax-min.js",type: "js",	charset: "utf-8",depend:true}
];
ol.loader.mods["jobcn.selectorV2"] = [
	"jquery",
	"ol.box",
	{mark:"jquery.bgiframe",uri: "js/jquery.bgiframe.min.js",type: "js",	charset: "utf-8",depend:true,loadType:null},
	{uri: "../selector/citySelector-min.js",type: "js",depend:true},
	{uri: "../selector/selector.css",type: "css",charset: "gbk"}
];
ol.loader.mods["jobcn.selector"] = [
	"jquery",
	"ol.box",
	{mark:"jquery.bgiframe",uri: "js/jquery.bgiframe.min.js",type: "js",	charset: "utf-8",depend:true,loadType:null},
	{uri: "../selector/selector-min.js",type: "js",depend:true},
	{uri: "../selector/selector.css",type: "css",charset: "gbk"}
];
ol.loader.mods["ol.tab"] = [
	"jquery",
	{uri: "../ol.tab/tab-min.js",type: "js",charset: "gbk",depend:true},
	{uri: "../ol.tab/tab-min.css",type: "css",charset: "gbk"}
];
ol.loader.mods["ol.box"] = [
	"jquery",
	{mark:"jquery.bgiframe",uri: "js/jquery.bgiframe.min.js",type: "js",	charset: "utf-8",depend:true,loadType:null},
	{uri: "../ol.box/box-min.js",type: "js",charset:"gbk",depend:true},
	{uri: "../ol.box/box_hack.css",type: "css",charset:"gbk"}
];
ol.loader.mods["ol.loading"] = [
	"jquery",
	"jquery.bgiframe",
	{uri: "../ol.loading/loading-min.js",type: "js",charset: "gbk",depend:true},
	{uri: "../ol.loading/loading.css",type: "css",charset: "gbk"}
];
ol.loader.mods["autoComplete"] = [
	"jquery",
	{mark:"jquery.bgiframe",uri: "js/jquery.bgiframe.min.js",type: "js",	charset: "utf-8",depend:true,loadType:null},//需要即时加载
	{uri: "../autoComplete/autoComplete-min.js",type: "js",charset:"gbk",depend:true},
	{uri: "../autoComplete/autoComplete.css",charset:"gbk",type: "css"}
];
ol.loader.mods["jquery.float"] = [
	"jquery",
	{uri: "../jquery.float/float-min.js",type: "js",charset:"gbk",depend:true}
];
ol.loader.mods["jquery.tip"] = [
	"jquery"
	,{uri: "../jquery.tip/tip_jobcn/tip-jobcn.css",type: "css",charset: "gbk"}
	,{uri: "../jquery.tip/jquery.tip-min.js",type: "js",charset:"gbk",depend:true}
];
//全屏漂浮广告插件
ol.loader.mods["jquery.floatfly"] = [
	"jquery",
	{uri: "js/jquery.floatfly-min.js",type: "js",charset:"gbk",depend:true}
];

//焦点图轮换
ol.loader.mods["jquery.slideshow"] = [
	{uri: "js/jquery.slideshow-min.js",type: "js",charset:"gbk",depend:false}
];
//无缝滚动
ol.loader.mods["jquery.scrollshow"] = [
	"jquery",
	{uri: "js/jquery.scrollshow.js",type: "js",charset:"utf-8",depend:true}
];

//图片展示
ol.loader.mods["jquery.colorbox"] = [
	{uri: "../jquery.colorbox/jquery.colorbox-min.js",type: "js",charset:"utf-8",depend:false}
	,{uri: "../jquery.colorbox/colorbox.css",type: "css",charset: "gbk"}
];
//flexbox
ol.loader.mods["jquery.flexbox"] = [
	"jquery",
	{uri: "../flexbox/js/jquery.flexbox-min.js",type: "js",charset:"utf-8",depend:true}
	,{uri: "../flexbox/css/jquery.flexbox.css",type: "css",charset: "utf-8"}
];

//获取文本域的光标位置
ol.loader.mods["jquery.fieldSelection"] = [
	"jquery",
	{uri: "js/jquery-fieldselection.min.js",type: "js",charset:"utf-8",depend:true}
];

//重新定义 去除字符编码,在big5在,charset定义会引起出错
ol.loader.mods["ol.pager"] = [
	"jquery",
	{uri: "../ol.pager/pager-min.js",type:"js",depend:true},
	{uri: "../ol.pager/pager.css",type:"css",charset: "gbk"}
];
ol.loader.mods["ol.pagerSEO"] = [
	"jquery",
	{uri: "../ol.pager/pagerSEO-min.js",type:"js",depend:true},
	{uri: "../ol.pager/pager.css",type:"css",charset: "gbk"}
];


ol.loader.mods["jobcn.linkSelect"] = [
	"jquery",
	{uri: "../linkSelect/linkSelect-min.js",type: "js",charset: "gbk",depend:true}
];

ol.loader.mods["jobcn.share"]=["jquery",{mark:"jobcn.share",uri:"../share/share.js", type:"js",charset:"gbk",depend:true}];

ol.loader.mods["jobcn.bdshare"]=["jquery",{mark:"jobcn.share",uri:"../share/bdshare-min.js", type:"js",charset:"gbk",depend:true}];

ol.loader.mods["jobcn.webcam"] = [
	"jquery",
	{uri: "../jquery.webcam/webcam-min.js",type: "js",charset: "gbk",depend:true}
];

ol.loader.mods["ol.slider"]=["jquery",{mark:"ol.slider",uri:"../ol.slider/slider-min.js", type:"js",charset:"gbk",depend:true}];

if (!window['jobcn']) {
	window['jobcn'] = {};
}

//将以下模块以其他名称注册，单独引入
ol.loader.mods["$comm"]=ol.loader.mods["comm"];
ol.loader.mods["$jquery"]=ol.loader.mods["jquery"];
//注销以下模块
ol.loader.remove("comm");
ol.loader.remove("jquery");

ol.debug = false;//控制台日志开关(对于log()输出的有效)
jobcn=ol;
