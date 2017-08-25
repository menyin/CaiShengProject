define(function(require,exports,module) {
	var $ = require("zepto");
	var myCache = my.cache
	var $my = function(){
		var p1 = arguments[0]
		var isCache = arguments[1]
		if(isCache!==true&&isCache!=false&&isCache!==undefined) return $(p1,isCache)
		if("string" == typeof(p1)){
			if(isCache===false){
				myCache[p1] = $(p1)
				return myCache[p1]
			}
			if(!/^\s*<(\w+|!)[^>]*>/.test(p1)){
				if(/(ui\-loading)|(ui\-mask)|(ui\-alert)/.test(p1)) return $(p1)
				
				if(myCache[p1])
					return myCache[p1]
				else{
					myCache[p1] = $(p1)
					return myCache[p1]
				}
			}
		}
		return $(p1)
	}
	$.extend($my,$)
	module.exports = $my
})