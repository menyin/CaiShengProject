// JavaScript Document

(function(global,doc){

	if (global['jpjs']) {
		return;
	}
	var jpjs = global.jpjs = {
			version: '1.382',
			autohor: 'jon',
			mailto: ''
		},
		html = doc.documentElement,
		head = doc.head || doc.getElementsByTagName("head")[0],
		baseElement = head.getElementsByTagName("base")[0],
		charset = 'utf-8',
		isDebug = false,
		regReady = /(loaded|complete)/i,
		preloadMods = [],
		globalMods = [],
		preComboMods = {},
		comboMods = {},
		comboExports = {},
		comboModsVer = {},
		comboVersion = {},
		normailzeNames = {},
		comboHost = '',
		comboPath = '',
		basepath = '',
		maps = {},
		nodeCache = {},
		timeout = 50,
		waitCount = 3000,
		moduleType = {
			loaded: '@loaded:',
			module: '@module:',
			define: '@define:',
			defineId: '@defineId:',
			factory: '@factory:',
			exports: '@exports:',
			init: '@init:',
			initId: '@initId:',
			initArgs: '@initArgs:',
			initList: '@initList:',
			count: '@count:',
			combo: '@combo:'
		},
		indexOf = Array.prototype.indexOf,
		filter = Array.prototype.filter,
		isObject = jpjs.isObject = isType("Object"),
		isString = jpjs.isString = isType("String"),
		isArray = jpjs.isArray = Array.isArray || isType("Array"),
		isFunction = jpjs.isFunction = isType("Function"),
		isBoolean = jpjs.isBoolean = isType("Boolean"),
		array = jpjs.arrayUtil = {
			filter : filter ? function(arr, fn, scope){
				return filter.call(arr, fn, scope);
			} : function (arr, fn, scope) {
				var a = [];
				for (var i = 0, j = arr.length; i < j; ++i) {
					if (!fn.call(scope, arr[i], i, arr)) {
						continue;
					}
					a.push(arr[i]);
				}
				return a;
			},
			indexOf: indexOf ? function(el, arr){
				return indexOf.call(arr, el);
			} : function(el, arr){
				for(var i = 0, len = arr.length; i < len; i++){
					if(arr[i] === el)
						return i;
				}
				return -1;
			},
			unique:function(arr){
				if(arr.length == 0 || !arr)
					return;
				return this.filter(arr, function(name, i, that){
					return this.indexOf(name, that) >= i;
				}, this);
			}
		},
		debug = jpjs.debug = function(msg, type){
			return window.console && console[type || 'log'](msg) || null;
		},
		debugIndex = 0,
		debugCount = 50;

	function trim(str){
		if(isString(str)){
			return str.replace(/\s+/g, '');
		}
	}
	function isType(type) {
		return function(obj) {
			return {}.toString.call(obj) == "[object " + type + "]";
		}
	}

	/**
	 * 设置js的script的dom节点加载成功和错误回调
	 * @param node script节点dom对象
	 * @param callback 回调
	 * @param module js对应的路径的数组，其实只有一个元素
	 */
	function onLoadJS(node, callback, module){
		var supportOnload = "onload" in node;
		if (supportOnload) {
			node.onload = onload;
			node.onerror = function(){
				onload();
			}
		} else {
			node.onreadystatechange = function() {
				if (regReady.test(node.readyState)) {
					onload();
				}
			}
		}
		function onload(){
			callback && callback(module[1] || module[0]);
			nodeCache[moduleType.loaded + module[0]] = true;
			node.onload = node.onerror = node.onreadystatechange = null;
			if(!isDebug){
				head.removeChild(node);
			}
			node = null;
		}
	}

	/**
	 * 加载指定的js
	 * @param path js路径
	 * @param callback 加载成功回调
	 * @param isAsync 是否异步，默认为true
	 */
	function loadJS(path, callback, isAsync){
		var module = ('' + path ).split('::'),//说明还可以用::来做分割js
			modulePath = module[0],
			none;

		if(isBoolean(callback)){
			isAsync = callback;
			callback = null;
		}

		if(!nodeCache[moduleType.loaded + modulePath]){//
			node = nodeCache[moduleType.module + modulePath] || doc.createElement('script');//创建或者在dom节点缓存里取js的script标签缓存
			onLoadJS(node, callback, module, debug);//设置节点加载成功和错误回调
			if(!nodeCache[moduleType.module + modulePath]){//如果没有节点缓存则执行
				nodeCache[moduleType.module + modulePath] = node;//将js的script节点缓存，以js路径处理的字符串作为key
				node.src   = modulePath;
				node.type  = "text/javascript";
				node.charset = charset;
				node.async = isAsync != undefined ? isAsync : true;//async是h5的新特性，默认为true
				if(baseElement){//如果有base标签则插入到base标签之前，否则插入到head内部最后
					head.insertBefore(node, baseElement)
				} else {
					head.appendChild(node);
				}
			}
		} else {//如果js已经加载过则执行执行回调
			callback && callback(module[1] || modulePath);
		}
	}

	/**
	 * 检查模块被加载的次数有没有超标
	 * @param moduleName 模块名
	 * @returns {boolean} 是否超标
	 * @remark
	 * 如果加载次数超标则清除该模块所有相关缓存
	 */
	function checkModule(moduleName){
		var cache = package['#module:cache'];
		cache[moduleType.count + moduleName] = (cache[moduleType.count + moduleName] || 0) + 1;//记录该模块被加载的次数
		if(cache[moduleType.count + moduleName] > waitCount){//如果模块被加载次数超过指定值waitCount则控制台输出错误
			debug('找不到模块名或者加载超时:' + moduleName, 'error');
			deleteCache(moduleName);//删除与该模块相关的所有缓存配置
			return false;
		}
		return true;
	}
	function resetCheck(moduleName, initId, time){
		setTimeout(function(){
			if(!checkModule(moduleName)){//检查模块加载次数是否超标
				return;
			}
			if(initId != undefined){
				checkLoaded(moduleName, initId);
			} else {
				checkDefinedLoaded(moduleName);
			}
		}, time != null ? time : timeout);//timeout=50
	}
	function takeGlobalModule(moduleName, isArray){
		var mods = isArray ? [] : {},
			type = isArray ? moduleType.init : moduleType.module,
			cache = package['#module:cache'],
			deplist = cache[ type + moduleName ].depend,
			status = true;

		saveModule(array.unique(deplist.concat(globalMods)));
		function saveModule(name){
			for(var factory, i = 0, len = name.length; i < len; i++){
				factory = cache[ moduleType.factory + name[i] ];

				if(isArray){
					if( !factory ){
						return status = false;
					}
					mods.push(factory);
				} else {
					mods[name[i]] = factory;
				}
			}
		}
		return status ? mods : false;
	}

	/**
	 * 删除指定模块所有相关的缓存配置
	 * @param moduleName 模块名
	 * @param isClearErr 无用参数
	 */
	function deleteCache(moduleName, isClearErr){
		var cache = package['#module:cache'];

		delete cache[ moduleType.module + moduleName ];
		delete cache[ moduleType.define + moduleName ];
		delete cache[ moduleType.defineId + moduleName ];
		delete cache[ moduleType.exports + moduleName ];
		delete cache[ moduleType.factory + moduleName ];
		delete cache[ moduleType.init + moduleName ];
		delete cache[ moduleType.initList + moduleName ];
		delete cache[ moduleType.loaded + moduleName ];
		delete cache[ moduleType.initArgs + moduleName ];
		delete cache[ moduleType.combo + moduleName ];
	}
	function checkDefinedLoaded(moduleName){
		var cache = package['#module:cache'],
			status = cache[ moduleType.loaded + moduleName ] || checkDefinedList(moduleName),
			factory, result;

		if(status){
			if(factory = cache[ moduleType.module + moduleName ].factory){
				cache[moduleType.define + moduleName] = cache[moduleType.define + moduleName] || takeGlobalModule(moduleName);
				var args = factory.length <= 1 ? [
					cache[ moduleType.define + moduleName ]
				] : [
					package['#provide:require'],
					cache[ moduleType.exports + moduleName ],
					cache[ moduleType.define + moduleName ]
				];
				result = cache[ moduleType.factory + moduleName ];
				if(!result && !isBoolean(result)){
					comboExports[moduleName]
						= cache[ moduleType.factory + moduleName ]
						= factory.apply(jpjs, args) || factory;
				}
				cache[ moduleType.loaded + moduleName ] = true;
				delete cache[moduleType.count + moduleName];
			}
		} else {
			resetCheck(moduleName);
		}
	}
	function checkDefinedList(moduleName){
		var cache = package['#module:cache'],
			module = cache[ moduleType.module + moduleName ],
			deplist = module.depend;

		if(!cache[moduleType.loaded + moduleName]) {
			for(var i = 0, len = deplist.length; i < len; i++){
				if(!cache[moduleType.loaded + deplist[i]]){
					return false;
				}
			}
		}
		return true;
	}
	function getUseFactorys(moduleName, id){
		var cache = package['#module:cache'],
			factorys = cache[moduleType.initList + moduleName];
		if(!factorys){
			cache[moduleType.initList + moduleName] = [];
		}
		if(!cache[moduleType.init + moduleName + id]){
			return;
		}
		cache[moduleType.initList + moduleName][id] = cache[moduleType.initList + moduleName][id] ||
			cache[moduleType.init + moduleName + id].factory;

		return cache[moduleType.initList + moduleName];
	}
	function isCombo(moduleName, i){
		return package['#module:cache'][moduleType.init + moduleName + i] && package['#module:cache'][moduleType.init + moduleName + i].isCombo;
	}
	function checkLoaded(moduleName, id){
		var cache = package['#module:cache'],
			status = cache[moduleType.loaded + moduleName],
			factorys = getUseFactorys(moduleName, id);

		if(!factorys){return;}
		if(!status ){
			var moduleNames = cache[moduleType.init + moduleName],
				i = 0, deplist;
			if(isCombo(moduleName, i)){
				status = !moduleNames ? true : status;
			}
			for( ; deplist = moduleNames && moduleNames[i]; i++ ){
				if( status  = cache[moduleType.loaded + deplist] ) {
					cache[moduleType.init + moduleName].splice(i, 1);
				} else {
					break;
				}
			}
		}
		if( status ){
			var save = cache[moduleType.initArgs + moduleName];

			if(!save){
				save = takeGlobalModule( moduleName + id, true );
				if(!save){
					resetCheck(moduleName, id);
					return;
				}
				cache[moduleType.initArgs + moduleName] = save;
				delete cache[moduleType.init + moduleName];
			}
			for(var i=0; i<factorys.length; i++){
				if(isCombo(moduleName, i)){
					factorys[i] && factorys[i].call(jpjs, comboExports);
				} else {
					factorys[i] && factorys[i].apply(jpjs, save);
				}
				delete cache[moduleType.init + moduleName + i];
			}

			cache[moduleType.loaded + moduleName] = true;
			delete cache[moduleType.initList + moduleName];
			delete cache[moduleType.initId + moduleName];
			delete cache[moduleType.count + moduleName];
			return;
		}
		resetCheck(moduleName, id);
	}

	/**
	 * 获取模块列表中所有启动模块的依赖模块(包括自己)的数组
	 * @param name 模块列表
	 * @returns {Array} 依赖模块(包括自己)的数组
	 */
	function getComboMods(name){
		if(isString(name)){ name = [name]; }
		var mods = [], modName;
		for(var i = 0, len = name.length; i < len; i++){
			modName = normalizeComboMods(comboMods[name[i]]);
			if(!modName) return;
			mods = mods.concat(comboMods[name[i]]);
		}
		return mods;
	}

	/**
	 * 将组件模块数组combos拆解成没有依赖的基础模块数组
	 * @param value 组件模块数组 如['@popup', '@dataSource', 'widge.autoComplete.search']
	 * @returns {*} 没有依赖的基础模块数组
	 */
	function normalizeComboMods(value){//value值如 ['@popup', '@dataSource', 'widge.autoComplete.search']
		if(!value){return;}
		var ret = value;
		if(isArray(value)){
			var len = ret.length;
			for(var i=0; i<len; i++){
				if(!value[i] || preComboMods[value[i]]){//如果value[i]不可用或者在预加载模块列表则跳过
					continue;
				}
				if(value[i].indexOf('@') != -1){
					var combos = normalizeComboMods(comboMods[value[i]]);
					Array.prototype.splice.apply(ret, [i, 1].concat(combos));//ret.splice(i,1,combos[0],combos[1],combos[2]...)
				}
				len = ret.length;
			}
		}
		return ret;
	}

	/**
	 * 获取简单模块的版本号
	 * @param key
	 */
	function normailzeVer(key){//如widge.Select
		if(normailzeNames){//normailzeNames就是window.VERSION的值，各个js文件的版本
			var ext = '.js',
				lastIndex = key.lastIndexOf('.') + 1;
			comboModsVer[key] = Number(normailzeNames[key.substr(lastIndex) + ext]);//如此处得到值就是Select.js的版本号
		}
	}
	var package = {
			'#module:cache':{},
			'#module:getPath': function(path){
				path = path.replace('jpjs.','');
				if(val = maps[path]){
					return basepath + val + '.js::' + path;
				}
				return basepath + path.replace(/\./g,'/') + '.js::' + path;
			},
			/**
			 *获取指定模块列表涉及js文件的路径组成的path字符串
			 * @remark
			 * 得到的path路径是所有js文件路径字符串用逗号隔开的字符串
			 * 得到的path路径带有版本号，可保证js变更强制浏览器刷新
			 * 此函数还讲加载的模块的preComboMods[val] 设置为 true
			 */
			'#module:getCombosPath': function(module){
				if(!isObject(module)) return;
				var dependPaths = module.depend,//依赖模块（包括自己），是处理后的简单模块
					moduleName = module.module,//如'@search|kk|widge.dropSelect'
					path = "", val, version = 0;
				for(var i=0, len = dependPaths.length; i<len; i++){
					val = dependPaths[i];
					if(preComboMods[val]){//如果在预加载列表里有则跳出
						continue;
					}
					normailzeVer(val);//获取模块对应js的版本号如20140312//val值如'widge.dropSelect'
					preComboMods[val] = true;
					if(maps[val]){
						path += comboPath + maps[val] + '.js,';//如果有在gloab.js有配置map来映射模块对应的文件路径，如map:{'widge.dropSelect':'/base/widge/dropSelect'}
					} else {
						path += comboPath + val.replace(/\./g, '/') + '.js,';//得出形如"/js/v2/widge/dropSelect.js"字符串 //项目中comboPath = window.CONFIG.COMBOPATH = "/js/v2/"
					}
					if(comboModsVer[val]){
						version += comboModsVer[val];//此处将版本号求和，应该是要在js版本变更时浏览器缓存刷新
					}
				}
				if(path.lastIndexOf(',') != -1){
					if(moduleName.indexOf('|kk|') != -1){
						moduleName = moduleName.split('|kk|').join('');
					}
					//version || comboVersion[moduleName] || (new Date).getTime()三种方式保证js版本变更刷新
					return path.substr(0, path.length - 1) + '?v=' + (version || comboVersion[moduleName] || (new Date).getTime());
				}
				return path;
			},
			'#provide:require' : function(module){
				return package['#module:cache'][moduleType.exports + module] || {};
			},
			require : function(module){
				var cache = this['#module:cache'],//缓存模块
					moduleName = module['module'],//如"@search"
					initId = module.initId;//如 cache["@initId:" + "@search"]值为0

				if(initId != undefined) {
					cache[moduleType.init + moduleName + initId]  = module;//如 cache["@init:@search0"]
					var combo = getComboMods(module.depend);//获取启动列表模块的所有依赖简单模块，如['tools.iframe', 'tools.position'...]//module.depend就是jpjs.use的第一参数，即启动模块列表。
					if(combo){
						var comboPath = "";
						module.depend = combo;
						comboPath += this['#module:getCombosPath'](module);
						cache[moduleType.init + moduleName + initId].isCombo = true;
						if(comboPath){
							loadJS((comboHost || basepath) + comboPath, function(){//根据路径加载所有简单模块js
								var i = 0, depend;
								while(depend = combo[i++]){//遍历所有简单模块，进行相关缓存记录处理
									cache[moduleType.exports + depend] = cache[moduleType.exports + depend] || {};
									cache[moduleType.combo + depend] = true;
									i++;
								}
								cache[moduleType.init + moduleName] = combo;//如cache["@init:@search"]=[ "tools.iframe", "tools.position", "widge.popup",...]
								resetCheck(moduleName, initId, 0);
							});
						} else {
							resetCheck(moduleName, initId, 0);
						}
						return;
					}
					cache[moduleType.init + moduleName] = moduleName.split('|kk|');

				} else {
					cache[moduleType.exports + moduleName] = cache[moduleType.exports + moduleName] || {};
					cache[moduleType.module + moduleName] = module;
				}
				resetCheck(moduleName, initId, 0);

				for(var i = 0, len = module.depend.length; i < len; ){
					var depend = module.depend[i++];
					if(preComboMods[depend]){
						cache[moduleType.exports + depend] = cache[moduleType.exports + depend] || {};
					} else {
						var path = this['#module:getPath'](depend);
						preComboMods[depend] = true;
						loadJS(path, function(name){
							!initId && (cache[moduleType.exports + name] = cache[moduleType.exports + name] || {});
						});
					}
				}
			},
			define: function(module, deplist, factory){
				var cache = package['#module:cache'];
				if(((!isString(module) || !module) && !deplist) || cache[moduleType.defineId + module]){
					return;
				}
				if( isFunction(deplist)){
					factory = deplist;
					deplist = [];
				} else if( isString(deplist) ){
					deplist = trim(deplist).split(',');
				}
				cache[moduleType.defineId + module] = true;
				package.require({
					module : module,
					depend : deplist,
					factory : factory
				});
			},
			use: function(deplist, factory){
				if(!deplist || isFunction(deplist) ) return;
				if( isString(deplist) ){
					deplist = trim(deplist).split(',');
				}
				var moduleName = deplist.join('|kk|'),
					cache = this['#module:cache'];//this代表package
				cache[moduleType.initId + moduleName] = cache[moduleType.initId + moduleName] + 1 || 0;
				this.require({//this代表package
					module : moduleName, //如'@search|kk|widge.dropSelect'
					depend : deplist,
					factory : factory,
					initId : cache[moduleType.initId + moduleName]
				});
			}
		},
		setBasePath = function(path){
			if(!path){
				var result = "", m;
				try{
					a.b.c();
				} catch(e) {
					if(e.fileName){ //firefox
						result = e.fileName;
					}
					else if(e.sourceURL){ //safari
						result = e.sourceURL;
					}
					else if(e.stacktrace){ //opera9
						m = e.stacktrace.match(/\(\) in\s+(.*?\:\/\/\S+)/m);
						if(m && m[1])
							result = m[1];
					}
					else if(e.stack){ //chrome 4+
						m = e.stack.match(/\(([^)]+)\)/);
						if (m && m[1])
							result = m[1];
					}
				}
				if(!result){ //IE与chrome4 - opera10+
					var scripts = doc.getElementsByTagName("script"),
						reg = /jpjs.js(\W|$)/i,src;
					for(var i=0, el; el = scripts[i++]; ){
						src = !!doc.querySelector ? el.src : el.getAttribute("src", 4);
						if(src && reg.test(src)){
							result = src;
							break;
						}
					}
				}
				basepath = result.substr(0,result.lastIndexOf('/')+1);
			} else {
				basepath = path;
			}
		},
		/**
		 * 在模块加载器加载当前模块是预加载操作
		 * @param callback
		 */
		preload = function(callback){
			var len = preloadMods.length;
			if(len){
				package.use(preloadMods, function(){
					preloadMods.splice(0, len);
					preload(callback);
				});
			} else {
				callback && callback();
			}
		};
	setBasePath();
	var curLoadMods = [];
	jpjs.use = function(ids, callback){
		if(isFunction(ids)){
			callback = ids;
			ids = null;
		}
		curLoadMods.push({id: ids, callback: callback});
		var curMod;
		preload(function(){
			while(curMod = curLoadMods.shift()){
				if(curMod.id){
					package.use(curMod.id, curMod.callback);
				} else {
					if(globalMods.length){//如果没有use的模块，则直接加载全局模块，然后执行回调
						package.use(globalMods[0], curMod.callback);
					} else {//否则，直接执行当前use的模块
						curMod.callback();
					}
				}
			}
		});
		return jpjs;
	}
	jpjs.config = function(configData) {
		for (var key in configData) {
			switch(key){
				case "comboHost":
					comboHost = configData[key];
					break;
				case "comboPath":
					comboPath = configData[key];
					break;
				case "preCombo"://将预加载组件存储到preComboMods数组里
					var data = configData[key],
						mods;
					if(isString(data)){
						mods = trim(data).split(',');
					} else if(isArray(data)){
						mods = data;
					}
					for(var len = mods.length - 1; len >= 0; len--){
						preComboMods[mods[len]] = true;
					}
					break;
				case "combos"://将组件配置存储在comboMods里
					var data = configData[key];
					if (data && isObject(data)) {
						for (var k in data) {
							comboMods[k] = data[k];
						}
					}
					break;
				case "normailzeNames":
					normailzeNames = configData[key];
				case "version":
					var data = configData[key];
					if(isObject(data)){
						for(var k in data){
							comboVersion[k] = data[k];
						}
					}
					break;
				case "basepath":
					setBasePath(configData[key]);
					break;
				case "preload"://将预加载模块存储到preloadMods数组里
					var data = configData[key];
					if(isString(data)){
						preloadMods = trim(data).split(',');
					} else if(isArray(data)){
						preloadMods = data;
					}
					if(isArray(preloadMods = array.unique(preloadMods))){
						globalMods = array.unique(globalMods.concat(preloadMods));
					}
					break;
				case "isDebug":
					isDebug = !!configData[key];
				case "map":
					var map;
					if ((map = configData[key]) && isObject(map)) {
						for (var k in map) {
							maps[k] = map[k];
						}
					}
					break;
				case "charset":
					var data = configData[key];
					if(isString(data)) {
						charset = data;
					}
			}
		}
		return jpjs;
	}

	jpjs.config({
		//isDebug: true,
		preload: 'jquery, base.util, base.class, base.shape',
		preCombo: 'jquery, base.util, base.class, base.shape, base.event, base.attribute, base.aspect, tools.cookie',
		map: {
			jquery: 'jquery.min',
			uploadify: 'jpjob/uploadify/uploadify'
		}
	});
	global.define = package.define;
	jpjs.loadJS = loadJS;

})(window, document);