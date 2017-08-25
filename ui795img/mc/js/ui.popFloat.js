define(function(require, exports,module) {
    var $ = require("$"); 
    var config = {
    	html: ''
    	,template:'<div id="${id}" class="${class}">${html}</div>'
    	,id:''
    	,class:''
    	,zIndex:1
    }
    var $win = $(window)
        ,$doc = $(document)
        
    //1 构造函数
	var popFloat = function(options){
        this.options = $.extend({},config, options);
        var _opt = this.options;
		//模板替换参数
        var _template = _opt.template.replace(/\${\w+}/g,function(data){
              return _opt[data.replace(/[^a-zA-Z0-9]/g,"")]
        });
        this.pop = $(_template).css({
            visibility:"hidden",
            position: 'absolute',
            "z-index": _opt.zIndex
        }).appendTo("body")
        this.setPosition(_opt)
	}
	//2 打开方法(支持回调)
	popFloat.prototype.open = function(fn){
		this.pop.css({"visibility":"visible"});
		if(typeof fn === "function") fn(this);
	}
	//3 关闭方法(支持回调)
	popFloat.prototype.close = function(fn){
		this.pop.css({"visibility":"hidden"});
		if(typeof fn === "function") fn(this);
	}
	//4 设置浮动位置方法()
	popFloat.prototype.setPosition = function(_opt){
		var winTOP = window.pageYOffset
            ,winLEFT = window.pageXOffset
            ,winHEIGHT = $win.height()
            ,winWIDTH = $win.width()
            ,boxWIDTH = this.pop.width()
            ,boxHEIGHT = this.pop.height()
        var offset = {x : 0,y : 0}
        var css = {position:"fixed"}
		//上
		if(_opt.top === "center"){
			css.top = 0
			css.left = (winWIDTH-boxWIDTH)/2
		}else{
			css.top = _opt.top
		}		
		//右
		if(_opt.right === "center"){
			css.top = (100*(((winHEIGHT - boxHEIGHT)/2)/winHEIGHT)+"%")
			css.right = 0 
		}else{
			css.right = _opt.right
		}
		//下
		if(_opt.bottom === "center"){
			css.bottom = 0
			css.left = (winWIDTH-boxWIDTH)/2
		}else{
			css.bottom = _opt.bottom
		}
		//左
		if(_opt.left === "center"){
			css.top = (100*(((winHEIGHT - boxHEIGHT)/2)/winHEIGHT)+"%")
			css.left = 0
		}else{
			css.left = _opt.left
		}
		this.pop.css(css);
	}
	module.exports = popFloat;
});