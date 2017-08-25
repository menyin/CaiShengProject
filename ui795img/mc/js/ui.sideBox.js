define(function(require, exports,module) {
	var $ = require("$"); 
	var out = function(opt){
		var config = {
			template : '<div id="${id}" class="mask selecter hide ${className}"><div class="f_left"><i style="position:relative;top:50%;" class="arrow_icon"><i></i><i></i></i></div><div style="float:right;overflow:hidden; background:none;" class="f_body"></div></div>'
			,id : null
			,hide : null		//通常有可能隐藏左边
			,content : null	//填充的内容，通常放在textarea里
			,right : 280	//右边占据的位置
			,className : ""
		}
		var cache = {}
		var base = {			
			init : function(content){
				if(!config.id) config.id = "sideBox"+new Date().getTime();
				//模板替换语言包
				config.template = config.template.replace(/\${\w+}/g,function(i){
					return config[i.replace(/[^a-zA-Z]/g,"")]
				});
				
				var sideBox = $(config.template);
				
				if(!config.hide){}else{sideBox.find(config.hide).hide();}
				sideBox.find(".f_body").width(config.right);
				if(!content){
					if(!config.content){}else{
						cache.content = $(content);
						sideBox.find(".f_body").append(cache.content);
					}
				}else{
					cache.content = $(content);
					//sideBox.find(".f_body").append(cache.content.css("right","-"+config.right+"px"))
					sideBox.find(".f_body").append(cache.content)
				}				
				sideBox.find(".f_left").click(function(){
					base.hide();
				});
				
				sideBox.appendTo("body");
				cache.box = sideBox;
				base.resize(0);
				var fn = function(){
					base.resize();
				}
				$(window).resize(fn).scroll(fn);
			}
			,resize : function(i){
				var obj = this.get();
				var arrow = obj.find(".arrow_icon")
				var arrowTOP = (Math.max(document.body.scrollTop,window.scrollY) + Math.max(0,($(window).height()-arrow.height())/2))+"px"
				arrow.css("top",arrowTOP).css({
					'-moz-transition-property':'top'
					,'-moz-transition-duration': '0.6s'
					,'-moz-transition-timing-function':'ease'
					,'-webkit-transition-property':'top'
					,'-webkit-transition-duration': '0.6s'
					,'-webkit-transition-timing-function':'ease'
					,'-o-transition-property':'top'
					,'-o-transition-duration': '0.6s'
					,'-o-transition-timing-function':'ease'
					,'transition-property':'top'
					,'transition-duration': '0.6s'
					,'transition-timing-function':'ease'
				})
				
				if(!this.isShow && i !== 0) return;				
				var W = $(document).width();
				var H = $(document).height();//cache.H || (cache.H = $(document).height());//不能缓存
				if(i === 0) cache.rgba = obj.css("background-color");
				if(H>obj.height()){ obj.height(H);}
					obj.width(W).find(".f_left").width(W-config.right).height(H).find(".arrow_icon").css("left",W-config.right-30);
			}
			,getRGBA : function(){
				var rgba = cache.rgba || ""
					rgba = rgba.substring(0,rgba.lastIndexOf(",")+1)
				return rgba
			}
			,hide : function(){
				var obj = this.get();
					obj.css("background-color",base.getRGBA()+"0)").find(".f_left").hide();
				cache.content.css({
					"-webkit-transform":"translate("+config.right+"px, 0px)"
					,"-moz-transform":"translate("+config.right+"px, 0px)"
					,"-webkit-transition-duration":"0.4s"
					,"-moz-transition-duration":"0.4s"
				});
				setTimeout(function(){
					obj.hide();
				},400);
			}
			,get : function(){
				return cache.box;
			}
			,show : function(){
				var obj = this.get();
					obj.show().css("background-color",base.getRGBA()+"0.8)").find(".f_left").show();
					
					cache.content.css({
						"-webkit-transform":"translate("+config.right+"px, 0px)"
						,"-moz-transform":"translate("+config.right+"px, 0px)"
						,'-webkit-transition-timing-function':'ease'
						,'-moz-transition-timing-function':'ease'
						,'-webkit-transform-style': 'preserve-3d'
						,'-moz-transform-style': 'preserve-3d'
						,'-webkit-backface-visibility': 'hidden'
						,'-moz-backface-visibility': 'hidden'
					});
					
				setTimeout(function(){
					cache.content.css({
							"-webkit-transform":"translate(0px, 0px)"
							,"-moz-transform":"translate(0px, 0px)"
							,"-webkit-transition-duration":"0.4s"
							,"-moz-transition-duration":"0.4s"
							,'-webkit-transition-timing-function':'ease'
							,'-moz-transition-timing-function':'ease'
							,'-webkit-transform-style': 'preserve-3d'
							,'-moz-transform-style': 'preserve-3d'
							,'-webkit-backface-visibility': 'hidden'
							,'-moz-backface-visibility': 'hidden'
					});
				},100);				
			}
			,isShow : function(){
				return this.get().css("display") == "none"?false:true
			}
		}
		
		$.extend(config,opt)
		
		return {
			init : base.init
			,get : base.get
			,hide : base.hide
			,show : base.show
			,resize : base.resize
			,isShow : base.isShow
		}
	}
	module.exports = out;
});