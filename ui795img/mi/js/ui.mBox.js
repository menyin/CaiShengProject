define(function(require, exports,module) {
    var $ = require("$")
    	,ui = require("ui.base")
    //交互设置
    var config = {
        id : null
        ,"class":"popBox"
        ,className:null
    	,style:""
        ,title:""
        ,html:""
        ,width:0
        ,height:0
        ,timeout:0
        ,zIndex : 0
        ,position : "center"
        ,mask:true
        ,closeIcon: true
        ,clickout:function(){}
    }
    //内部设置
    var inSet = {
    	fn : ["close","open","cancel","ok"]
    	,template : '<div id="${id}" class="${class}" style="${style}">'
		    		+'	<a class="box-close" title="关闭"><i>X</i></a>'
		    		+'	<div class="box-title">${title}</div>'
		    		+'	<div class="box-content">${html}</div>'
		    		+'</div>'
        ,template2: '<div id="${id}" class="${class}" style="${style}">'
                    +'  <div class="box-title">${title}</div>'
                    +'  <div class="box-content">${html}</div>'
                    +'</div>'
    	,win : $(window)
    	,doc : $(document)
    	,z : 30
    }

    //构造函数
	var mBox = function(html,p){
		var tmp,par,$box,$this=this;
			p.html = html
			par = $.extend({},config, p);
			par.id = par.id || "mBox"+(+new Date())
			par["class"] = par["class"]+" "+(par.className||"")
            templateStr = par.closeIcon ? inSet.template : inSet.template2
        	tmp = templateStr.replace(/\${\w+}/g,function(s){return par[s.replace(/[^a-zA-Z0-9]/g,"")]})
        	par.maskName = "mBoxMask"+inSet.z
    	$box = $(tmp).css({
        	visibility : "hidden"
        	,position : "absolute"
        	,width: par.width||"auto"
        	,height: par.height||"auto"
        	,"z-index" : par.zIndex||(inSet.z+=1)
        })
        $box.find(".box-close").click(function(){$this.close()})
        $box.find(".box-open").click(function(){$this.open()})
        $box.find(".box-cancel").click(function(){$this.cancel()})
        $box.find(".box-ok").click(function(){$this.ok()})
        this.p = par
        this.box = $box
        $box.appendTo("body")
        this.setPosition()
	}

    //构造交互设置
    for(var n=0;n<inSet.fn.length;n++){
    	config["on"+inSet.fn[n]]=function(){}
    	mBox.prototype[inSet.fn[n]] = function(){}
    }

    //设置位置
    mBox.prototype.setPosition = function(){
       var par = this.p
       		,winTOP = window.pageYOffset
       		,winLEFT = window.pageXOffset
       		,winHEIGHT = inSet.win.height()
       		,winWIDTH = inSet.win.width()
       		,boxWIDTH = this.box.width()
       		,boxHEIGHT = this.box.height()
       		,offset = {x:(winWIDTH - boxWIDTH)/2,y:(winHEIGHT - boxHEIGHT)/2}
       		,css = {position:"fixed"}
       if(offset.x < 0){
           css.width = winWIDTH; offset.x = 0;
       }
       if(offset.y < 0){
           css.height = winHEIGHT; offset.y = 0;
       }
       css.top = offset.y; css.left = offset.x;
       this.box.css(css);
    }
    //开关
    mBox.prototype.open = function(){
    	if(this.p.mask)ui.mask.show({id:this.p.maskName,z:inSet.z-1})
    	this.p.onopen(this)
    	this.box.css({
            "visibility":"visible",
            "opacity":"1"
        })
    }
    mBox.prototype.close = function(){
    	this.p.onclose(this.box,this.p)
    	if(this.p.mask)ui.mask.hide({id:this.p.maskName})
    	this.box.remove()
    }
    mBox.prototype.cancel = function(){
    	this.p.oncancel(this.box,this.p)
    }
    mBox.prototype.ok = function(){
    	this.p.onok(this)
    }
	module.exports = mBox;
});