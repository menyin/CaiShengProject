frameSettings = {
	autoInit: false,
	Init: null,
	mainResize: null,
	detailResize: null,
	tipsResize: null,
	sidebarResize: null,
	mainMinWidth: -1,
	mainMinHeight: -1,
	detailMinHeight: -1,
	tipsMinWidth: -1
}
// frame
function frameInit(e) {
	if (typeof frameSettings.isInit != "undefined" && frameSettings.isInit) return;
	if (!frameSettings.autoInit) {
		if (!e) return;
		//if (e == jQuery) return
	}
	var t = document.documentElement,
	n = t.clientWidth,
	r = t.clientHeight;
	$("#ie6").length == 0 ? frame.init(n, r, t) : ie6_init(n, r, t),
	frameSettings.isInit = !0
}
function ie6_init() {
	var e = $(document.body).addClass("ie6_size"),
	t = $("#ie6"),
	n = $("#ie6_tips"),
	r = $("<div>").attr("id", "ie6_tester").addClass("ie6_size"),
	i = $("<div>").attr("id", "ie6_wrapper").append(t).append(r);
	e.append(i);
	var s = -35,
	o = n.outerWidth(!0),
	u = n.outerHeight(!0),
	a = 110 / (760 - u),
	f = function() {
		i.width(o < e.width() ? e.width() : o),
		i.height("auto");
		var t = r.height();
		t > u && i.height(t);
		var f = i.height() - s - u;
		n.css("top", f * a)
	};
	f(),
	$(window).resize(f)
}
$(frameInit);
var frame = {
	standalone: !1,
	isInit: !1,
	isAjaxInit: !1,
	canResize: !1,
	isIE: $.browser.msie,
	init: function(e, t, n) {
		if (frame.isInit && frame.isAjaxInit) return;
		var r = e,
		i = t,
		s = $("#content"),
		o = $("#contentNav"),
		u = $("#contentBody"),
		a,f,l,c,h,p,d,v,m,g,y,b,w,E,S,x,T,N,C,k,L,A,O,M,_,D,P,H,B,j,F,I,
		q = function() {
			u.css("visibility", "hidden"),
			u.width(0),
			u.height(0);
			var s = [e - n.clientWidth, t - n.clientHeight];
			e -= s[0],
			t -= s[1],
			r -= s[0],
			i -= s[1],
			h -= s[0];
			var o = h,
			f = E.css("display") != "block",
			l = E.data("isHide"),
			v = A.data("isHidden"),
			y = M;
			P && !v && (o -= y + _),
			!C || f ? (d = 0, p = i - 2) : l ? (d = L, p = i - d - j) : p <= m ? (p = m, d = i - p - j) : (d = Math.floor((i - j) * F), p = i - d - j),
			u.width(r),
			u.height(i),
			c = i - 2,
			frame.sidebar.resize(g, c),
			a.width(o),
			C && frame.detail.resize(o - 2, d),
			frame.main.resize(o - 2, p),
			A.width(y + _),
			P && frame.tips.resize(y, c),
			u.css("visibility", "visible")
		},
		R = function() {
			a = $(".content", u),
			f = $("#main"),
			l = $("#sidebar"),
			v = $(".title", f).height(),
			m = frameSettings.mainMinHeight,
			m = m >= 0 ? m: v,
			g = l.width(),
			y = l.outerWidth(!0),
			b = y - g,
			w = l.outerHeight(!0) - l.height(),
			E = $("#detail"),
			S = $(".title", E).height(),
			x = $(".draggle", a),
			T = $(".title .btn_hide", E),
			N = x.height(),
			C = E.length != 0,
			k = T.length != 0 && T.css("display") != "none",
			L = frameSettings.detailMinHeight,
			L = L >= 0 ? L: S,
			E.data("isHide", "");
			if (C) {
				E.css("display") != "block" ? x.hide() : k && E.hasClass("detail-hide") && E.data("isHide", "1"),
				j || (j = 4 + N);
				var e = function(e) {
					var t = $(document.body);
					t[0].setCapture ? t[0].setCapture() : e.preventDefault();
					var n = e.screenY,
					r = p,
					s = d,
					o = function(e) {
						var t = parseInt(e.screenY - n);
						r = p + t,
						s = d - t,
						s < L ? (s = L, r = i - s - j) : r < m && (r = m, s = i - r - j),
						frame.detail.resize(h, s),
						frame.main.resize(h - 2, r),
						document.selection ? document.selection.empty() : window.getSelection().removeAllRanges()
					},
					u = function(e) {
						t.removeClass("drag"),
						x.removeClass("click"),
						t.unbind("mouseup", u),
						t.unbind("mousemove", o),
						t[0].releaseCapture && t[0].releaseCapture();
						if (s != d) {
							var n = $(".btn_hide", E); ! k || s != L ? (p = r, d = s, F = s / (i - j), E.data("isHide") && n.click()) : n.click()
						}
					};
					t.bind("mousemove", o),
					t.bind("mouseup", u),
					t.addClass("drag"),
					x.addClass("click")
				};
				x.mousedown(e),
				frame.detail.init()
			}
			A = $("#tips"),
			O = $(".tips", A),
			M = O.width(),
			_ = 10,
			D = $(".draggle", A),
			P = A.length != 0,
			H = frameSettings.tipsMinWidth,
			H = H >= 0 ? H: M;
			if (P) {
				A.css("display") != "block" ? A.data("isHidden", "1") : $(".quickbar .note", f).hide();
				var t = function(e) {
					var t = $(document.body);
					t[0].setCapture ? t[0].setCapture() : e.preventDefault();
					var n = e.screenX,
					r = h - M - _,
					i = r,
					s = M,
					o = 200,
					u = function(e) {
						var t = parseInt(e.screenX - n);
						i = r + t,
						s = M - t,
						s <= 0 ? (i = r + M, s = 0) : i <= o && (i = o, s = M + r - o),
						A.width(s + _),
						frame.tips.resize(s, c),
						a.width(i),
						document.selection ? document.selection.empty() : window.getSelection().removeAllRanges()
					},
					f = function(e) {
						t.removeClass("drag2"),
						D.removeClass("click"),
						t.unbind("mouseup", f),
						t.unbind("mousemove", u),
						t[0].releaseCapture && t[0].releaseCapture();
						if (s != M) {
							var n = $("#main .quickbar .note");
							s != 0 ? (M = s, I = M / (h - B)) : n.click()
						}
					};
					t.bind("mousemove", u),
					t.bind("mouseup", f),
					t.addClass("drag2"),
					D.addClass("click")
				};
				D.mousedown(t)
			} else $(".quickbar .note", f).hide();
			frame.isInit || (r -= u.outerWidth(!0) - u.width(), i -= s.outerHeight(!0) - s.height(), i -= o.outerHeight(!0), i -= u.outerHeight(!0) - u.height(), h = r - y),
			B || (B = 2 + _),
			F = .382,
			I = M / (h - B),
			frame.main.init(),
			q()
		};
		frame.canResize = !0,
		frame.sidebar.init(),
		R(),
		$(window).resize(q),
		frame.ajaxUpdate(R),
		frame.isInit = !0,
		typeof frameSettings.Init == "function" && frameSettings.Init()
	},
	main: {
		init: function() {
			if (frame.isInit && frame.isAjaxInit) return;
			var e = $(document.body),
			t = $("#main"),
			n = $(".quickbar", t),
			r = $(".note", n);
			frame.tips.init(r),
			$(".btns .btn", n).each(function(e, t) {
				var n = $(t);
				t.className.indexOf("icon-") != -1 && n.addClass("icon"),
				n.wrapInner($("<div>")),
				$("> div", n).prepend($("<span>"));
				if (frame.isIE) {
					var r = $("div", n),
					i = n.attr("style"),
					s = n.attr("style");
					n.css({
						position: "absolute",
						width: 1e3
					}),
					r.css({
						"float": "left"
					});
					var o = r.width();
					r.attr("style", s ? s: null),
					r.width(o),
					n.attr("style", i ? i: null)
				}
			})
		},
		resize: function(e, t) {
			if (!frame.canResize) return;
			var n = $("#main"),
			r = $(".title", n),
			i = $(".quickbar", n),
			s = $(".mainContent", n),
			o = i.length != 0;
			o && i.css("display") != "block" && (o = !1);
			var u = o ? i.outerHeight(!0) : 0,
			a = t - r.outerHeight(!0) - u;
			n.height(t),
			s.height(a),
			typeof frameSettings.mainResize == "function" && frameSettings.mainResize(e, a, s)
		}
	},
	detail: {
		init: function() {
			if (frame.isInit && frame.isAjaxInit) return;
			var e = $("#detail"),
			t = $(".title .btn_hide", e),
			n = t.length != 0 && t.css("display") != "none",
			r = n && e.hasClass("detail-hide"),
			i = function() {
				e.toggleClass("detail-hide"),
				r = !r,
				e.data("isHide", r ? "1": ""),
				$(window).resize()
			};
			$(".title", e).dblclick(function() {
				i(),
				document.selection && document.selection.empty && (document.selection.empty(), 1) || window.getSelection && window.getSelection().removeAllRanges()
			}),
			$(".btn_hide", e).click(i);
			var s = $(".navs .items", e);
			s.each(function(e, t) {
				var n = $(t);
				n.click(function() {
					s.removeClass("current"),
					n.addClass("current")
				})
			})
		},
		resize: function(e, t) {
			if (!frame.canResize) return;
			var n = $("#detail"),
			r = $(".title", n),
			i = $(".detailNav", n),
			s = $(".detailContent", n),
			o = i.length != 0;
			o && i.css("display") != "block" && (o = !1);
			var u = o ? i.outerHeight(!0) : 0,
			a = t - r.outerHeight(!0) - u;
			n.height(t),
			s.height(a);
			if (typeof frameSettings.detailResize == "function") {
				var f = n.data("isHide") == "1" ? 0 : 1;
				frameSettings.detailResize(e, a, f, s)
			}
		}
	},
	tips: {
		init: function(e) {
			if (frame.isInit && frame.isAjaxInit) return;
			var t = $("#tips"),
			n = t.css("display") != "block",
			r = function() {
				t.toggle(),
				e.toggle(),
				n = !n,
				t.data("isHidden", n ? "1": ""),
				$(window).resize()
			};
			e.click(r),
			$(".btn_close", t).click(r)
		},
		resize: function(e, t) {
			if (!frame.canResize) return;
			var n = $("#tips .tips"),
			r = $(".list", n);
			n.width(e),
			n.height(t);
			var i = t - $(".tips-title", n).height() - (r.outerHeight(!0) - r.height()) - 1;
			r.height(i);
			if (typeof frameSettings.tipsResize == "function") {
				var s = n.parent(),
				o = s.data("isHidden") == "1" ? 0 : 1;
				frameSettings.tipsResize(e, i, o, r)
			}
		}
	},
	sidebar: {
		init: function() {
			if (frame.isInit && frame.isAjaxInit) return;
			var e = $("#sidebar"),
			t = $(".trees", e).append($("<div>").addClass("tree_last")),
			n = $(".tree", t),
			r = $(".tree_last", t),
			i = !1;
			n.last().css("border-bottom-width", 0),
			n.each(function(e, n) {
				var s = $(n),
				o = $(".name", s),
				u = $(".nodes", s);
				o.click(function() {
					u.slideToggle("fast",
					function() {
						s.toggleClass("tree-expand"),
						t[0].scrollHeight > t.height() ? r.hide() : r.show()
					}),
					s.hasClass("tree-expand") && (u.show(), i = !0)
				})
			}),
			i && (t[0].scrollHeight > t.height() ? r.hide() : r.show())
		},
		resize: function(e, t) {
			if (!frame.canResize) return;
			var n = $("#sidebar"),
			r = $(".title", n),
			i = $(".datacenter", n),
			s = $(".trees", n),
			o = t;
			o -= r.outerHeight(!0),
			o -= i.outerHeight(!0),
			n.height(t),
			s.height(o);
			var u = $(".tree_last", s);
			s[0].scrollHeight > o ? u.hide() : u.show(),
			typeof frameSettings.sidebarResize == "function" && frameSettings.sidebarResize(e, o, trees)
		}
	},
	timer: {},
	getScrollbarWidth: function() {
		var e = 60,
		t = e * .75,
		n = $("<div>").css({
			position: "absolute",
			width: e,
			height: t,
			overflow: "auto",
			top: 0,
			left: 0,
			zIndex: -1
		}).append("<div>");
		$(document.body).append(n);
		var r = $("div", n).height(e),
		i = e - r.width();
		return n.remove(),
		i
	},
	isHTMLElement: function(e) {
		var t = document.createElement("div");
		try {
			return t.appendChild(e.cloneNode(!0)),
			e.nodeType == 1 ? !0 : !1
		} catch(n) {
			return ! 1
		}
	},
	ajaxUpdate: function(e) {
		frame.ajaxUpdate = function(t, n) {
			frame.isAjaxInit = !1;
			if (typeof t != "undefined" && (typeof t == "string" || t instanceof jQuery || frame.isHTMLElement(t))) {
				var r = $("#contentBody");
				$("> *", r).not("#sidebar").remove(),
				r.prepend(t),
				typeof n == "function" && n()
			}
			e(),
			frame.isAjaxInit = !0
		}
	},
	jq: {
		bind: function(e, t, n, r) {
			return t == "click" && e.attr("href", "javascript:;"),
			e.bind(t, n, r),
			e
		},
		click: function(e, t) {
			return e.attr("href", "javascript:;"),
			e.click(t),
			e
		},
		hover: function(e, t, n) {
			return e.attr("href", "javascript:;"),
			e.hover(t, n),
			e
		},
		$: {
			div: function(e) {
				return $("<div>").addClass(e)
			}
		},
		$$: function(e, t) {
			return $("<" + e + ">").addClass(t)
		}
	}
};
/**
frame.tips.list_init = function() {
	var e = $("#tips"),
	t = $(".list", e),
	n = frame.jq.$.div;
	t.hasClass("list-1") ? $(".items", t).each(function(e, t) {
		var r = $(t),
		i = n("bg").append(n("bg_r")).append(n("bg_b")),
		s = n("wrapper1"),
		o = n("wrapper2");
		r.wrapInner(o),
		r.wrapInner(s),
		$(".wrapper1", r).prepend(i)
	}) : (t.hasClass("list-2") || t.hasClass("list-3")) && t.addClass("blockTextLink")
};
**/
$(document).ready(function() {
	$('.has_checkbox').on('click', 'a', function() {
		$(this).closest('tr').addClass('cur');
	});
});