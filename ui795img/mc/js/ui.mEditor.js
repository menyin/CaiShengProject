define(function(require, exports,module) {
    var $ = require("$")
    	,ui = require("ui.base")
    	,util = require("util")
    //交互设置
    var config = {
    	id:null
    	,"class":"mEditor"
    	,height:"200"
    	,mask:true
    	,max : 32767
    	,maxType : 2
    	,min : 0
    	,minType : 2
    	,onsave:function(){}
    }
    //内部设置
    var inSet = {
    	template : '<div id="${id}" class="${class}" style="${style}">'
		    		+'	<div class="operate_Bar1">'
		    		+'		<div class="btn_back_l">'
		    		+'			<a class="btn_back editor-cancel"><span></span><nav>返回</nav></a>'
		    		+'		</div>'
		    		+'		<div class="text count ttlCnt condition"></div>'
					+'		<div class="text condition">${title}</div>'
					+'		<div class="btn_r"><a class="btn_save editor-save">完成</a></div>'
		    		+'	</div>'
		    		+' <div class="editor_content"><textarea class="editor-box"></textarea></div>'
		    		
		    		+'</div>'
    	,win : $(window)
    	,doc : $(document)
    	,z : 40
    	,count:["已输入{n}字","{n}"]
    }   

    //构造函数
	var mEditor = function(str,p){
		var tmp,par,$box,$this=this,title;
			p.str = str
			par = $.extend({},config, p);
			par.id = par.id || "mEditor"+(+new Date())
			par["class"] = par["class"]+" "+(par.className||"")
			//注意页面结构
			par["title"] = $("#"+p.saveid).parent().parent().find("dt").html()
        	tmp = inSet.template.replace(/\${\w+}/g,function(s){return par[s.replace(/[^a-zA-Z0-9]/g,"")]})
        	par.maskName = "mEditorMask"+inSet.z
    	if(par.mask){
    		ui.mask.show({id:par.maskName,z:inSet.z})
    		$("#ui-mask-"+par.maskName).css("opacity",1)
    	}
		this.isEn=1
		for(var t=0,l=par.title.length;t<l;t++){
			if(par.title.charCodeAt(t)>127){this.isEn=0;break;}
		}
    	$box = $(tmp).css({
        	position : "fixed"
        	,top:0
        	,"z-index" : par.zIndex||(inSet.z+=1)
        })
        $box.find("textarea").val(str)
        this.count()
        $box.find(".editor-save").click(function(){$this.save()})
        $box.find(".editor-cancel").click(function(){$this.cancel()})
        this.p = par
        this.box = $box
        $box.appendTo("body")
        $box.find("textarea").focus()
	}
    mEditor.prototype={
		save : function(){
			clearInterval(this.timer)
			if(!this.check()) return
			this.p.onsave(this)
			$("#"+this.p.saveid).val(this.box.find("textarea").val())
			this.close()
		}
    	,count:function(){
    		var self = this
    		self.timer = setInterval(function(){
            	var n = util.len(self.box.find("textarea").val(),self.p.maxType);
            	self.box.find(".count").html(inSet.count[self.isEn].replace("{n}",n))
            },1000)
    	}
    	,check : function(){
    		var par = this.p
			var val = this.box.find("textarea").val()
			var n = util.len(val,par.maxType)
			if(n>par.max){
				alert('超过最大限制:'+par.max);
				this.count()
				return false;
			}
			var m = util.len(val,par.minType)
			if(m<par.min){
				alert('低于最低限制:'+par.min);
				this.count()
				return false;
			}
			return true
    	}
		,cancel : function(){
			clearInterval(this.timer)
			this.close()
		}
		,close : function(){
			clearInterval(this.timer)
			ui.mask.hide({id:this.p.maskName,z:inSet.z})
			this.box.remove()
		}
	}
	module.exports = mEditor;
});