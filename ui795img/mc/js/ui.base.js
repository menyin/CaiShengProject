define(function(require, exports,module) {
	/* 依赖样式jobcn.core.css */
	var $ = require("$")
		,util = require("util")

	var myCache = {
		mboxZindex : 1
	}

	var ui = {
		loading : {
			obj : null
			,isShow : 0
			,id : 0
		}
		,move : function(style,obj,n,t){
			$(obj).css(style,n+"px").css(ui.moveCss(style,n,t))
		}
		,moveCss : function(style,val,t,move){
			t = t || 0.6
			move = move || 'ease'
			var o = {
						'-moz-transition-property':''+style
						,'-moz-transition-duration': '0.6s'
						,'-moz-transition-timing-function':'ease'
						,'-webkit-transition-property':''+style
						,'-webkit-transition-duration': '0.6s'
						,'-webkit-transition-timing-function':'ease'
						,'-o-transition-property':''+style
						,'-o-transition-duration': '0.6s'
						,'-o-transition-timing-function':'ease'
						,'transition-property':''+style
						,'transition-duration': '0.6s'
						,'transition-timing-function':'ease'
					}
				o[style]= val
			return o
		}
	}

	var out = {
		alert : function(str,t){
			$(".ui-alert").remove()
			 var alt = $('<div class="ui-alert" style="display:hidden;position:fixed;top:0;left:0;padding:15px 10px;min-width:100px;opacity:1;min-height:25px;text-align:center;color:#fff;display:block;z-index:2147483647">'+str+'</div>')
			 	alt.find(".ui-alert-close").click(function(){alt.remove()})
			 	alt.appendTo("body")
			 var winW = $(window).width()
			 	,winH = $(window).height()
			 	,altW = alt.width()
			 	,altH = alt.height()
			 if(winW>altW) alt.css("left",(winW-altW)/2)
			 if(winH>altH) alt.css("top",(winH-altH)/2)
			 	alt.show()
			 if(t===false)return
			 setTimeout(function(){alt.remove()},t||2500)
		}
		,move : {
			height : function(o,h,t){
				ui.move("height",o,h,t);
			}
			,left : function(o,h,t){
				ui.move("left",o,h,t);
			}
		}
		,moveCss : ui.moveCss
		,mask :{
			show:function(o){
				var config = {id:"ui-mask",z:0,h:$(window).height()<$(document).height()?$(document).height()+"px":"100%",f:function(){}}
				if(util.isObj(o)) $.extend(config,o)
				if(config.z ==0)  config.z = (window.mui.z_index += 1)
				var mask = $('<div id="ui-mask-'+config.id+'" class="ui-mask" style="position:absolute;top:0;left:0;width:100%;background:#000;opacity:0.6;height:'+config.h+';display:block;z-index:'+config.z+'"></div>').appendTo("body");
				config.f(mask);
				//如果内容<屏幕  取屏幕值 100%
				//如果内容>屏幕	取内容值 body.height()
				$(window).scroll(function(){mask.height($(document).height())});
			}
			,hide:function(o){
				var config = {id:"ui-mask",f:function(){}}
				if(util.isObj(o)) $.extend(config,o)
				$('#ui-mask-'+config.id).remove();
				config.f();
			}
		}
		,loading : {
			show : function(o){
				var config = {id:"ui-loading",z : 0,of:null,f:function(){}}
				if(util.isObj(o)) $.extend(config,o)
				if(config.z ==0)  config.z = (window.mui.z_index += 1)
				var loading = $('<div id="ui-loading-'+config.id+'" class="ui-loading" style="z-index:'+config.z+'"><span></span></div>').appendTo("body");
				config.f(loading);
			}
			,timeout : function(o){
				var config = {id:"ui-loading",t:0,f:function(){}}
				if(util.isObj(o)) $.extend(config,o)
				$('#ui-loading-'+config.id).css("cursor","pointer").append("超时").attr("title","时间有点超时:( 点击关闭").click(function(){
					$(this).remove();
					config.f();
				});
			}
			,hide : function(o){
				var config = {id:"ui-loading",t:0,f:function(){}}
				if(util.isObj(o)) $.extend(config,o)
				$('#ui-loading-'+config.id).remove();
				config.f();
			}
		}
		,tabSlide : function(target, tag, etype,tagsClass,hash) {
			var list = $(target + ">" + tag);
				list.each(function(i){
					$(this).click(function(){
						window.location.hash = target.replace("#","")+i;
						for (var n = 0; n < list.length; n++) {
							if (list[n] == this) {
								list.eq(n).addClass(tagsClass);
								$(target + "_" + n).show();
							} else {
								list.eq(n).removeClass(tagsClass);
								$(target + "_" + n).hide();
							}
						}
					});
				});
			var reg = new RegExp(target+"(\\d)","g");
			if(reg.test(window.location.hash)){
				list[window.location.hash.replace(/[^\d]/g,"")].click();
			}
		}
	}
	if(!my.alertClose)window.alert = out.alert
	module.exports = out;
});
