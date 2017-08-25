/*--------------------------------------------------------------------------/
功能：图片切换效果处理
参数：opts
示例：$(".slider").slider();
制作：lesanc.li by 2012-6-11
修改：lesanc.li by 2012-6-11
/---------------------------------------------------------------------------*/
;
(function($) {
	// 功能实现类
	function ScrollArea(sDiv, isAs, isStop, col) {
		var s = this;
		s.sDiv = sDiv; // 滚动层
		s.isAs = isAs; // 是否启用自动滚动
		s.isStop = isStop; // 是否支持鼠标停留停止滚动
		s.asSt = 3000;
		s.speed = 1;
		s.col = col || 1;
		s.as = null; // 自动滚动时间对象
		s.showW = s.sDiv.parent().width(); // 计算显示区域的宽度
		s.scrollW = 0; // 计算滚动层宽度
		s.setWidth();
		s.curImg = 0;
		s.switching = false;
		if (s.isStop) {
			s.sDiv.mouseenter(function() {
				s.stop();
			}).mouseleave(function() {
				s.start();
			});
		}
		s._init();
		// 开始自动滚动
		s.start();
	}
	// 生成按钮区域
	ScrollArea.prototype._init = function() {
		var s = this, sWin = s.sDiv.parent();
		var w = sWin.width(), h = 20;
		var btn = null, txt = "", a = "", tit = "", i;
		var timer = null;
		var _switch = function(el, trigger) {
			if (timer) {
				clearTimeout(timer);
			}
			s.stop();
			el = $(el);
			var n = parseInt(el.text()) - 1;
			var t = trigger === "click" ? 0 : 300;
			timer = setTimeout(function() {
				s._switchImg(n - s.curImg);
			}, t);
		};
		s.imgs = $("img", s.sDiv);
		// 调整图片大小
		s.imgs.css({
			width : w + "px",
			height : sWin.height() + "px"
		});
		// 生成按钮区域
		s.btns = $('<div class="info-area"></div>').css({
			position : "absolute",
			left : 0,
            top : 108,
			bottom : 0,
			width : w + "px",
			height : h + "px"
		});
		
		a = s.imgs.eq(0).parents("a");
		tit = s.imgs.eq(0).attr("tit") || s.imgs[0].title || "";
		if (a.length){		
			txt = '<a href="' + a[0].href + '" target="' + a[0].target + '">' + tit + '</a>';
		} else {
			txt = tit;
		}
		s.sTitle = $(
				'<span class="img-title">' + txt + '</span>')
				.css({
					float : "left"
				});

		for (i = s.imgs.length / 2 - 1; i >= 0; i--) {
			btn = $(
					'<span class="btn" index="' + i + '">' + (i + 1)
							+ '</span>').css({
				float : "right"
			});
			if (i === 0) {
				btn.addClass("cur-btn");
			}
			btn.click(function() {
				_switch(this, "click");
			}).mouseover(function() {
				_switch(this);
			}).mouseout(function() {
				clearTimeout(timer);
				s.start();
			});
			btn.appendTo(s.btns);
		}

		s.sTitle.appendTo(s.btns);

		s.btns.appendTo(sWin);

		btn = null, sWin = null;
	};
	// 更新图片状态
	ScrollArea.prototype._updateTitle = function(n) {
		var s = this;
		var txt = "", a = "", tit = "";
		n = n % (s.imgs.length / 2);
		a = s.imgs.eq(n).parents("a");
		tit = s.imgs.eq(n).attr("tit") || s.imgs[n].title || "";
		if (a.length){		
			txt = '<a href="' + a[0].href + '" target="' + a[0].target + '">' + tit + '</a>';
		} else {
			txt = tit;
		}
		s.sTitle.html(txt);
		$(".btn[index='" + n + "']", s.btns).addClass("cur-btn").siblings()
				.removeClass("cur-btn");
	};
	// 切换图片
	ScrollArea.prototype._switchImg = function(next) {
		var s = this, mpx;
		var mLeft = parseInt(s.sDiv.css("margin-left"));
		var width = (s.showW / s.col);
		if (next === 0 || s.switching) {
			return;
		}
		s.switching = true;
		next = next || 1;
		mpx = mLeft- width * next;
		if (mpx + s.scrollW < 0) {
			mpx = mpx + s.scrollW;
			s.sDiv.css({
				"margin-left" : mpx + width + "px"
			});
		} else if (mpx > 0) {
			mpx = mpx - s.scrollW;
			s.sDiv.css({
				"margin-left" : mpx - width + "px"
			});
		} else if (next > 1){
			s.sDiv.css({
				"margin-left" : mpx + width + "px"
			});
		} else if (next < -1){
			s.sDiv.css({
				"margin-left" : mpx - width + "px"
			});
		}
		s.sDiv.stop(true,true).animate({
			"margin-left" : mpx + "px"
		}, function(){
			s.switching = false;
		});
		s.curImg = Math.round(Math.abs(mpx / width));
		s._updateTitle(s.curImg);
	};
	// 自动滚动
	ScrollArea.prototype._autoScroll = function(st) {
		var s = this;
		if (!s.isAs || s.scrollW <= s.showW) {
			return;
		}
		st = typeof (st) !== "number" ? 3000 : st;
		return setInterval(function() {
			s._switchImg();
		}, st);
	};
	// 动态计算并设置滚动区域宽度
	ScrollArea.prototype.setWidth = function() {
		var s = this;
		s.scrollW = 0;
		$(s.sDiv).eq(0).children().each(function() {
			s.scrollW += $(this).width();
		});
		s.sDiv.css("width", 2 * s.scrollW);
		s.sDiv.html('<div>' + s.sDiv.html() + s.sDiv.html() + '</div>');
	};
	// 开始滚动
	ScrollArea.prototype.start = function() {
		var s = this;
		clearInterval(s.as);
		s.as = s._autoScroll(true, s.asSt);
	};
	// 停止滚动
	ScrollArea.prototype.stop = function() {
		clearInterval(this.as);
	};
	
	$.fn.slidebox = function(options) {

		var s = this;
		var args = arguments;
		// 参数设置
		if (s[0].bindSlider) {
			if (args.length > 1 && options === "option" && s[0].opts) {
				if (arguments.length === 2) {
					return s[0].opts[args[1]];
				} else if (arguments.length > 2) {
					for ( var i = 1; i < args.length - 1; i += 2) {
						s[0].opts[args[i]] = args[i + 1];
					}
					return s;
				}
			}
			return s;
		} else if (args[0] && typeof args[0] !== "object") {
			return s;
		}
		// 参数默认值
		var opts = {
			col : 1,
			autoScroll : true,
			mouseOverStop : false

		};

		$.extend(opts, options);

		s[0].opts = opts;
		s[0].bindSlider = true;

		new ScrollArea($("ul", $(this)), opts.autoScroll, opts.mouseOverStop, opts.col);

		return s;
	};
})(jQuery);