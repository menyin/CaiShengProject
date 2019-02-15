// JavaScript Document

define('tools.cookie', function(require, exports){

	var util = require('base.util'),
		doc = document,
		decode = decodeURIComponent,
		encode = encodeURIComponent,
		config = {isDecode: true, isJSON: true};

	function checkCookieName(name){
		if(util.type.isEmptyString(name)){
			throw new Error('base.cookie: 必须指定cookie名称');
		}
	}

	/**
	 * 获取指定名称cookie
	 * @param name 名称
	 * @param options 配置 默认不传
	 * 如{
	 *    isDecode: true, //是否需要解码
	 *    isJSON: true //是否是json
	 *    callback:function(cookieVal){alert(cookieVal);} //如果有配置回调则可接收cookie值的参数
	 *    }
	 * @returns {*}
	 */
	exports.get = function(name, options){
		checkCookieName(name);
		if(util.type.isFunction(options)){
			options = util.mix({callback: options}, config);
		} else {
			options = options || {};
		}
		var cookies = parseCookie(doc.cookie, util.mix(options, {isJSON: true}, true));
		return options.callback && options.callback(cookies[name]) || cookies[name];
	}
	/**
	 * 设置cookie值
	 * @param name 名称
	 * @param value 值
	 * @param options 配置 默认不传
	 * 如{
	 * isEncode:true, //是否编码
	 * expires:30,  //有效期，按天算
	 * domain:true,   //域
	 * path:true,     //访问目录，默认主域根目录
	 * }
	 * @returns {string} 返回cookie字符串
	 */
	exports.set = function(name, value, options){
		checkCookieName(name);
		options = util.mix({isEncode: true}, options, true);
		var expires = options['expires'];
        var domain = options['domain'];
        var path = options['path'];
		if(options['isEncode']){
			value = encode(value + '');
		}
		var text = name + "=" + value,
			date = expires;
		if(typeof date === 'number'){
			date = new Date();
			date.setDate(date.getDate() + expires);
		}
		if(date instanceof Date){
			text += "; expires=" + date.toUTCString();
		}
		if(util.type.isEmptyString(domain, true)){
			text += "; domain=" + domain;
		}
		if(util.type.isEmptyString(path, true)){
			text += "; path=" + path;
		}
		if(options['secure']){
			text += "; secure";
		}
		doc.cookie = text;
		return text;
	}
	/**
	 * 移除cookie
	 * @param name 名称
	 * @param options 默认不传
	 * @returns {string|exports}  cookie字符串
	 * @remark
	 * 实际上是设置cookie的失效时间为-1
	 */
	exports.remove = function(name, options){
		options = options || {};
		options['expires'] = -1;
		return this.set(name, '', options);
	}
	var parseCookie = exports.parseCookie = function(text, options){

		options = options || config;
		if(util.type.isObject(text) || !text){
			options = text || config;
			text = doc.cookie;
		}
		var result = {};
		if(!util.type.isEmptyString(text)){
			var cookie,
				cookieName,
				cookieValue,
				value,
				cookies = text.split(/;\s/g);

			for(var i = 0, len = cookies.length; i < len; i++){
				cookie = cookies[i].match(/([^=]+)=/i);
				if(util.type.isArray(cookie)){
					cookieName = decode(cookie[1]);
					value = cookies[i].substring(cookie[1].length + 1);
					cookieValue = options.isDecode ? decode(value) : value;
				} else {
					cookieName = decode(cookie);
					cookieValue = "";
				}
				if(cookieName){
					result[cookieName] = cookieValue;
				}
			}
		}
		return options.isJSON ? result : util.string.param(result);
	}
	return exports;
});