﻿/*
 * Lazy Load - jQuery plugin for lazy loading images
 *
 * Copyright (c) 2007-2013 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/projects/lazyload
 *
 * Version:  1.8.5
 *      Support for zepto
 */
!(function(E,A,B,D){var C=E(A);E.fn.lazyload=function(H){var G=this;var J;var I={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:A,data_attribute:"original",skip_invisible:true,appear:null,load:null,error:null};function F(){var K=0;G.each(function(){var L=E(this);if(I.skip_invisible&&L.css("display")==="none"){return}if(E.abovethetop(this,I)||E.leftofbegin(this,I)){}else{if(!E.belowthefold(this,I)&&!E.rightoffold(this,I)){L.trigger("appear");K=0}else{if(++K>I.failure_limit){return false}}}})}if(H){if(D!==H.failurelimit){H.failure_limit=H.failurelimit;delete H.failurelimit}if(D!==H.effectspeed){H.effect_speed=H.effectspeed;delete H.effectspeed}E.extend(I,H)}J=(I.container===D||I.container===A)?C:E(I.container);if(0===I.event.indexOf("scroll")){J.on(I.event,function(K){return F()})}this.each(function(){var K=this;var L=E(K);K.loaded=false;L.one("appear",function(){if(!this.loaded){if(I.appear){var M=G.length;I.appear.call(K,M,I)}E("<img />").on("load",function(){L.hide().attr("src",L.data(I.data_attribute))[I.effect](I.effect_speed);K.loaded=true;var O=E.grep(G,function(P){return !P.loaded});G=E(O);if(I.load){var N=G.length;I.load.call(K,N,I)}}).on("error",function(){L.trigger("error");if(I.error){var N=G.length;I.error.call(K,N,I)}}).attr("src",L.data(I.data_attribute))}});if(0!==I.event.indexOf("scroll")){L.on(I.event,function(M){if(!K.loaded){L.trigger("appear")}})}});C.on("resize",function(K){F()});if((/iphone|ipod|ipad.*os 5/gi).test(navigator.appVersion)){C.on("pageshow",function(K){K=K.originalEvent||K;if(K.persisted){G.each(function(){E(this).trigger("appear")})}})}E(A).on("load",function(){F()});return this};E.belowthefold=function(G,F){var H;if(F.container===D||F.container===A){H=C.height()+C[0].scrollY}else{H=E(F.container).offset().top+E(F.container).height()}return H<=E(G).offset().top-F.threshold};E.rightoffold=function(G,F){var H;if(F.container===D||F.container===A){H=C.width()+C[0].scrollX}else{H=E(F.container).offset().left+E(F.container).width()}return H<=E(G).offset().left-F.threshold};E.abovethetop=function(G,F){var H;if(F.container===D||F.container===A){H=C[0].scrollY}else{H=E(F.container).offset().top}return H>=E(G).offset().top+F.threshold+E(G).height()};E.leftofbegin=function(G,F){var H;if(F.container===D||F.container===A){H=C[0].scrollX}else{H=E(F.container).offset().left}return H>=E(G).offset().left+F.threshold+E(G).width()};E.inviewport=function(G,F){return !E.rightoffold(G,F)&&!E.leftofbegin(G,F)&&!E.belowthefold(G,F)&&!E.abovethetop(G,F)};E.extend(E.fn,{"below-the-fold":function(F){return E.belowthefold(F,{threshold:0})},"above-the-top":function(F){return !E.belowthefold(F,{threshold:0})},"right-of-screen":function(F){return E.rightoffold(F,{threshold:0})},"left-of-screen":function(F){return !E.rightoffold(F,{threshold:0})},"in-viewport":function(F){return E.inviewport(F,{threshold:0})},"above-the-fold":function(F){return !E.belowthefold(F,{threshold:0})},"right-of-fold":function(F){return E.rightoffold(F,{threshold:0})},"left-of-fold":function(F){return !E.rightoffold(F,{threshold:0})}})})($,window,document);