$(function(){
	$("body").append('<div class="backtop fn-hide" data-role="backTop"><i class="icon icon-backtop"></i></div>');
	(function(t){
		"use strict";
		var a,s = t('[data-role="backTop"]'),
		n = t(window),
		i = "click",
		o = "fn-hide";
		n.scroll(function() {
			a && clearTimeout(a), a = setTimeout(function(){
				n.scrollTop() > n.height() ? s.removeClass(o) : s.addClass(o)
			}, 100)
		}),s.on(i, function(){
			window.scrollTo(0, 0)
		})
	})(jQuery);
})
