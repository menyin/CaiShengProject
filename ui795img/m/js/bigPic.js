/*  
Append File:/club/m/v2/js/hammer.js
*/
/*
 * Support android gestures.
 * Author：zouxh
 */
(function (e, P) { "use strict"; var C = function ($, _) { return new C.Instance($, _ || {}) }; C.defaults = { stop_browser_behavior: { userSelect: "none", touchAction: "none", touchCallout: "none", contentZooming: "none", userDrag: "none", tapHighlightColor: "rgba(0,0,0,0)" } }; C.HAS_POINTEREVENTS = e.navigator.pointerEnabled || e.navigator.msPointerEnabled; C.HAS_TOUCHEVENTS = ("ontouchstart" in e); C.MOBILE_REGEX = /mobile|tablet|ip(ad|hone|od)|android|silk/i; C.NO_MOUSEEVENTS = C.HAS_TOUCHEVENTS && e.navigator.userAgent.match(C.MOBILE_REGEX); C.EVENT_TYPES = {}; C.DIRECTION_DOWN = "down"; C.DIRECTION_LEFT = "left"; C.DIRECTION_UP = "up"; C.DIRECTION_RIGHT = "right"; C.POINTER_MOUSE = "mouse"; C.POINTER_TOUCH = "touch"; C.POINTER_PEN = "pen"; C.EVENT_START = "start"; C.EVENT_MOVE = "move"; C.EVENT_END = "end"; C.DOCUMENT = e.document; C.plugins = C.plugins || {}; C.gestures = C.gestures || {}; C.READY = false; function Q() { if (C.READY) return; C.event.determineEventTypes(); C.utils.each(C.gestures, function ($) { C.detection.register($) }); C.event.onTouch(C.DOCUMENT, C.EVENT_MOVE, C.detection.detect); C.event.onTouch(C.DOCUMENT, C.EVENT_END, C.detection.detect); C.READY = true } C.utils = { extend: function X($, A, _) { for (var B in A) { if ($[B] !== P && _) continue; $[B] = A[B] } return $ }, each: function (B, $, A) { if ("forEach" in B) B.forEach($, A); else if (B.length != P) { for (var C = 0, _ = B.length; C < _; C++) if ($.call(A, B[C], C, B) === false) return } else for (C in B) if (B.hasOwnProperty(C) && $.call(A, B[C], C, B) === false) return }, hasParent: function ($, _) { while ($) { if ($ == _) return true; $ = $.parentNode } return false }, getCenter: function V($) { var _ = [], A = []; C.utils.each($, function ($) { _.push(typeof $.clientX !== "undefined" ? $.clientX : $.pageX); A.push(typeof $.clientY !== "undefined" ? $.clientY : $.pageY) }); return { pageX: ((Math.min.apply(Math, _) + Math.max.apply(Math, _)) / 2), pageY: ((Math.min.apply(Math, A) + Math.max.apply(Math, A)) / 2) } }, getVelocity: function U($, _, A) { return { x: Math.abs(_ / $) || 0, y: Math.abs(A / $) || 0 } }, getAngle: function B($, _) { var A = _.pageY - $.pageY, C = _.pageX - $.pageX; return Math.atan2(A, C) * 180 / Math.PI }, getDirection: function K($, _) { var B = Math.abs($.pageX - _.pageX), A = Math.abs($.pageY - _.pageY); if (B >= A) return $.pageX - _.pageX > 0 ? C.DIRECTION_LEFT : C.DIRECTION_RIGHT; else return $.pageY - _.pageY > 0 ? C.DIRECTION_UP : C.DIRECTION_DOWN }, getDistance: function g($, _) { var B = _.pageX - $.pageX, A = _.pageY - $.pageY; return Math.sqrt((B * B) + (A * A)) }, getScale: function N($, _) { if ($.length >= 2 && _.length >= 2) return this.getDistance(_[0], _[1]) / this.getDistance($[0], $[1]); return 1 }, getRotation: function Y($, _) { if ($.length >= 2 && _.length >= 2) return this.getAngle(_[1], _[0]) - this.getAngle($[1], $[0]); return 0 }, isVertical: function i($) { return ($ == C.DIRECTION_UP || $ == C.DIRECTION_DOWN) }, stopDefaultBrowserBehavior: function E($, _) { var A, B = ["webkit", "khtml", "moz", "Moz", "ms", "o", ""]; if (!_ || !$ || !$.style) return; C.utils.each(B, function (A) { C.utils.each(_, function (_) { if (A) _ = B + _.substring(0, 1).toUpperCase() + _.substring(1); if (_ in $.style) $.style[_] = _ }) }); if (_.userSelect == "none") $.onselectstart = function () { return false }; if (_.userDrag == "none") $.ondragstart = function () { return false } } }; C.Instance = function ($, A) { var _ = this; Q(); this.element = $; this.enabled = true; this.options = C.utils.extend(C.utils.extend({}, C.defaults), A || {}); if (this.options.stop_browser_behavior) C.utils.stopDefaultBrowserBehavior(this.element, this.options.stop_browser_behavior); C.event.onTouch($, C.EVENT_START, function ($) { if (_.enabled) C.detection.startDetect(_, $) }); return this }; C.Instance.prototype = { on: function c(_, A) { var $ = _.split(" "); C.utils.each($, function ($) { this.element.addEventListener($, A, false) }, this); return this }, off: function R(_, A) { var $ = _.split(" "); C.utils.each($, function ($) { this.element.removeEventListener($, A, false) }, this); return this }, trigger: function d(A, B) { if (!B) B = {}; var _ = C.DOCUMENT.createEvent("Event"); _.initEvent(A, true, true); _.gesture = B; var $ = this.element; if (C.utils.hasParent(B.target, $)) $ = B.target; $.dispatchEvent(_); return this }, enable: function D($) { this.enabled = $; return this } }; var G = null, S = false, $ = false; C.event = { bindDom: function ($, A, B) { var _ = A.split(" "); C.utils.each(_, function (_) { $.addEventListener(_, B, false) }) }, onTouch: function h(_, D, E) { var B = this; this.bindDom(_, C.EVENT_TYPES[D], function A(F) { var H = F.type.toLowerCase(); if (H.match(/mouse/) && $) return; else if (H.match(/touch/) || H.match(/pointerdown/) || (H.match(/mouse/) && F.which === 1)) S = true; else if (H.match(/mouse/) && !F.which) S = false; if (H.match(/touch|pointer/)) $ = true; var I = 0; if (S) { if (C.HAS_POINTEREVENTS && D != C.EVENT_END) I = C.PointerEvent.updatePointer(D, F); else if (H.match(/touch/)) I = F.touches.length; else if (!$) I = H.match(/up/) ? 0 : 1; if (I > 0 && D == C.EVENT_END) D = C.EVENT_MOVE; else if (!I) D = C.EVENT_END; if (I || G === null) G = F; E.call(C.detection, B.collectEventData(_, D, B.getTouchList(G, D), F)); if (C.HAS_POINTEREVENTS && D == C.EVENT_END) I = C.PointerEvent.updatePointer(D, F) } if (!I) { G = null; S = false; $ = false; C.PointerEvent.reset() } }) }, determineEventTypes: function Z() { var $; if (C.HAS_POINTEREVENTS) $ = C.PointerEvent.getEvents(); else if (C.NO_MOUSEEVENTS) $ = ["touchstart", "touchmove", "touchend touchcancel"]; else $ = ["touchstart mousedown", "touchmove mousemove", "touchend touchcancel mouseup"]; C.EVENT_TYPES[C.EVENT_START] = $[0]; C.EVENT_TYPES[C.EVENT_MOVE] = $[1]; C.EVENT_TYPES[C.EVENT_END] = $[2] }, getTouchList: function O($) { if (C.HAS_POINTEREVENTS) return C.PointerEvent.getTouchList(); else if ($.touches) return $.touches; else { $.indentifier = 1; return [$] } }, collectEventData: function H(_, D, B, A) { var $ = C.POINTER_TOUCH; if (A.type.match(/mouse/) || C.PointerEvent.matchType(C.POINTER_MOUSE, A)) $ = C.POINTER_MOUSE; return { center: C.utils.getCenter(B), timeStamp: new Date().getTime(), target: A.target, touches: B, eventType: D, pointerType: $, srcEvent: A, preventDefault: function () { if (this.srcEvent.preventManipulation) this.srcEvent.preventManipulation(); if (this.srcEvent.preventDefault) this.srcEvent.preventDefault() }, stopPropagation: function () { this.srcEvent.stopPropagation() }, stopDetect: function () { return C.detection.stopDetect() } } } }; C.PointerEvent = { pointers: {}, getTouchList: function () { var _ = this, $ = []; C.utils.each(_.pointers, function (_) { $.push(_) }); return $ }, updatePointer: function (_, $) { if (_ == C.EVENT_END) this.pointers = {}; else { $.identifier = $.pointerId; this.pointers[$.pointerId] = $ } return Object.keys(this.pointers).length }, matchType: function ($, _) { if (!_.pointerType) return false; var A = _.pointerType, B = {}; B[C.POINTER_MOUSE] = (A === _.MSPOINTER_TYPE_MOUSE || A === C.POINTER_MOUSE); B[C.POINTER_TOUCH] = (A === _.MSPOINTER_TYPE_TOUCH || A === C.POINTER_TOUCH); B[C.POINTER_PEN] = (A === _.MSPOINTER_TYPE_PEN || A === C.POINTER_PEN); return B[$] }, getEvents: function () { return ["pointerdown MSPointerDown", "pointermove MSPointerMove", "pointerup pointercancel MSPointerUp MSPointerCancel"] }, reset: function () { this.pointers = {} } }; C.detection = { gestures: [], current: null, previous: null, stopped: false, startDetect: function W($, _) { if (this.current) return; this.stopped = false; this.current = { inst: $, startEvent: C.utils.extend({}, _), lastEvent: false, name: "" }; this.detect(_) }, detect: function T(_) { if (!this.current || this.stopped) return; _ = this.extendEventData(_); var $ = this.current.inst.options; C.utils.each(this.gestures, function (A) { if (!this.stopped && $[A.name] !== false) if (A.handler.call(A, _, this.current.inst) === false) { this.stopDetect(); return false } }, this); if (this.current) this.current.lastEvent = _; if (_.eventType == C.EVENT_END && !_.touches.length - 1) this.stopDetect(); return _ }, stopDetect: function J() { this.previous = C.utils.extend({}, this.current); this.current = null; this.stopped = true }, extendEventData: function a(_) { var B = this.current.startEvent; if (B && (_.touches.length != B.touches.length || _.touches === B.touches)) { B.touches = []; C.utils.each(_.touches, function ($) { B.touches.push(C.utils.extend({}, $)) }) } var A = _.timeStamp - B.timeStamp, F = _.center.pageX - B.center.pageX, G = _.center.pageY - B.center.pageY, D = C.utils.getVelocity(A, F, G), E, $; if (_.eventType === "end") { E = this.current.lastEvent && this.current.lastEvent.interimAngle; $ = this.current.lastEvent && this.current.lastEvent.interimDirection } else { E = this.current.lastEvent && C.utils.getAngle(this.current.lastEvent.center, _.center); $ = this.current.lastEvent && C.utils.getDirection(this.current.lastEvent.center, _.center) } C.utils.extend(_, { deltaTime: A, deltaX: F, deltaY: G, velocityX: D.x, velocityY: D.y, distance: C.utils.getDistance(B.center, _.center), angle: C.utils.getAngle(B.center, _.center), interimAngle: E, direction: C.utils.getDirection(B.center, _.center), interimDirection: $, scale: C.utils.getScale(B.touches, _.touches), rotation: C.utils.getRotation(B.touches, _.touches), startEvent: B }); return _ }, register: function b($) { var _ = $.defaults || {}; if (_[$.name] === P) _[$.name] = true; C.utils.extend(C.defaults, _, true); $.index = $.index || 1000; this.gestures.push($); this.gestures.sort(function (_, $) { if (_.index < $.index) return -1; if (_.index > $.index) return 1; return 0 }); return this.gestures } }; C.gestures.Drag = { name: "drag", index: 50, defaults: { drag_min_distance: 10, correct_for_drag_min_distance: true, drag_max_touches: 1, drag_block_horizontal: false, drag_block_vertical: false, drag_lock_to_axis: false, drag_lock_min_distance: 25 }, triggered: false, handler: function I($, B) { if (C.detection.current.name != this.name && this.triggered) { B.trigger(this.name + "end", $); this.triggered = false; return } if (B.options.drag_max_touches > 0 && $.touches.length > B.options.drag_max_touches) return; switch ($.eventType) { case C.EVENT_START: this.triggered = false; break; case C.EVENT_MOVE: if ($.distance < B.options.drag_min_distance && C.detection.current.name != this.name) return; if (C.detection.current.name != this.name) { C.detection.current.name = this.name; if (B.options.correct_for_drag_min_distance && $.distance > 0) { var A = Math.abs(B.options.drag_min_distance / $.distance); C.detection.current.startEvent.center.pageX += $.deltaX * A; C.detection.current.startEvent.center.pageY += $.deltaY * A; $ = C.detection.extendEventData($) } } if (C.detection.current.lastEvent.drag_locked_to_axis || (B.options.drag_lock_to_axis && B.options.drag_lock_min_distance <= $.distance)) $.drag_locked_to_axis = true; var _ = C.detection.current.lastEvent.direction; if ($.drag_locked_to_axis && _ !== $.direction) if (C.utils.isVertical(_)) $.direction = ($.deltaY < 0) ? C.DIRECTION_UP : C.DIRECTION_DOWN; else $.direction = ($.deltaX < 0) ? C.DIRECTION_LEFT : C.DIRECTION_RIGHT; if (!this.triggered) { B.trigger(this.name + "start", $); this.triggered = true } B.trigger(this.name, $); B.trigger(this.name + $.direction, $); if ((B.options.drag_block_vertical && C.utils.isVertical($.direction)) || (B.options.drag_block_horizontal && !C.utils.isVertical($.direction))) $.preventDefault(); break; case C.EVENT_END: if (this.triggered) B.trigger(this.name + "end", $); this.triggered = false; break } } }; C.gestures.Hold = { name: "hold", index: 10, defaults: { hold_timeout: 500, hold_threshold: 1 }, timer: null, handler: function M($, _) { switch ($.eventType) { case C.EVENT_START: clearTimeout(this.timer); C.detection.current.name = this.name; this.timer = setTimeout(function () { if (C.detection.current.name == "hold") _.trigger("hold", $) }, _.options.hold_timeout); break; case C.EVENT_MOVE: if ($.distance > _.options.hold_threshold) clearTimeout(this.timer); break; case C.EVENT_END: clearTimeout(this.timer); break } } }; C.gestures.Release = { name: "release", index: Infinity, handler: function A($, _) { if ($.eventType == C.EVENT_END) _.trigger(this.name, $) } }; C.gestures.Swipe = { name: "swipe", index: 40, defaults: { swipe_min_touches: 1, swipe_max_touches: 1, swipe_velocity: 0.7 }, handler: function f($, _) { if ($.eventType == C.EVENT_END) { if (_.options.swipe_max_touches > 0 && $.touches.length < _.options.swipe_min_touches && $.touches.length > _.options.swipe_max_touches) return; if ($.velocityX > _.options.swipe_velocity || $.velocityY > _.options.swipe_velocity) { _.trigger(this.name, $); _.trigger(this.name + $.direction, $) } } } }; C.gestures.Tap = { name: "tap", index: 100, defaults: { tap_max_touchtime: 250, tap_max_distance: 10, tap_always: true, doubletap_distance: 20, doubletap_interval: 300 }, handler: function L($, A) { if ($.eventType == C.EVENT_END && $.srcEvent.type != "touchcancel") { var B = C.detection.previous, _ = false; if ($.deltaTime > A.options.tap_max_touchtime || $.distance > A.options.tap_max_distance) return; if (B && B.name == "tap" && ($.timeStamp - B.lastEvent.timeStamp) < A.options.doubletap_interval && $.distance < A.options.doubletap_distance) { A.trigger("doubletap", $); _ = true } if (!_ || A.options.tap_always) { C.detection.current.name = "tap"; A.trigger(C.detection.current.name, $) } } } }; C.gestures.Touch = { name: "touch", index: -Infinity, defaults: { prevent_default: false, prevent_mouseevents: false }, handler: function F($, _) { if (_.options.prevent_mouseevents && $.pointerType == C.POINTER_MOUSE) { $.stopDetect(); return } if (_.options.prevent_default) $.preventDefault(); if ($.eventType == C.EVENT_START) _.trigger(this.name, $) } }; C.gestures.Transform = { name: "transform", index: 45, defaults: { transform_min_scale: 0.01, transform_min_rotation: 1, transform_always_block: false }, triggered: false, handler: function _($, B) { if (C.detection.current.name != this.name && this.triggered) { B.trigger(this.name + "end", $); this.triggered = false; return } if ($.touches.length < 2) return; if (B.options.transform_always_block) $.preventDefault(); switch ($.eventType) { case C.EVENT_START: this.triggered = false; break; case C.EVENT_MOVE: var D = Math.abs(1 - $.scale), A = Math.abs($.rotation); if (D < B.options.transform_min_scale && A < B.options.transform_min_rotation) return; C.detection.current.name = this.name; if (!this.triggered) { B.trigger(this.name + "start", $); this.triggered = true } B.trigger(this.name, $); if (A > B.options.transform_min_rotation) B.trigger("rotate", $); if (D > B.options.transform_min_scale) { B.trigger("pinch", $); B.trigger("pinch" + (($.scale < 1) ? "in" : "out"), $) } break; case C.EVENT_END: if (this.triggered) B.trigger(this.name + "end", $); this.triggered = false; break } } }; if (typeof define == "function" && typeof define.amd == "object" && define.amd) define(function () { return C }); else if (typeof module === "object" && typeof module.exports === "object") module.exports = C; else e.Hammer = C })(this)

var Auto = Auto || {};
Auto["animate"] = function(arg, speed, callback) {
    this.elem = "string" == typeof arg.elem ? document.getElementById(arg.elem) : arg.elem;
    if (this.elem == null) {
        return
    }
    this.timers = [];
    this.prop = "left" in arg ? "left" : "top" in arg ? "top" : "height" in arg ? "height" : "scrollTop" in arg ? "scrollTop" : "";
    var from = 0;
    if (this.prop == "scrollTop") {
        if (self.pageYOffset) {
            from = self.pageYOffset
        } else {
            if (document.documentElement && document.documentElement.scrollTop) {
                from = document.documentElement.scrollTop
            } else {
                if (document.body) {
                    from = document.body.scrollTop
                }
            }
        }
    } else {
        from = eval(this.elem.style[this.prop].replace("px", ""));
        if (typeof from == "undefined" && this.prop == "height") {
            from = this.elem.offsetHeight
        }
    }
    var to = arg[this.prop];
    this.options = {
        duration: speed ? speed : 300
    };
    this.callback = function() {};
    if (typeof callback == "function") {
        this.callback = callback
    }
    if (speed == 0) {
        this.step(true)
    } else {
        this.custom(from, to)
    }
    return this
};
Auto["animate"].prototype = {
    easing: {
        linear: function(B, A, C, D) {
            return C + D * B
        },
        swing: function(B, A, C, D) {
            return ((-Math.cos(B * Math.PI) / 2) + 0.5) * D + C
        }
    },
    tick: function() {
        var B = this.timers;
        for (var A = 0; A < B.length; A++) {
            if (!B[A]()) {
                B.splice(A--, 1)
            }
        }
        if (!B.length) {
            this.stop()
        }
    },
    stop: function() {
        clearInterval(this.timerId);
        this.timerId = null;
        this.callback(this)
    },
    move: function(A) {
        if (this.prop == "scrollTop") {
            window.scrollTo(0, Math.max(0, A.now))
        } else {
            if (A.elem.style && A.elem.style[A.prop] != null) {
                A.elem.style[A.prop] = (A.prop === "top" || A.prop === "width" || A.prop === "height" ? Math.max(0, A.now) : A.now) + A.unit
            } else {
                A.elem[A.prop] = A.now
            }
        }
    },
    update: function() {
        this.move(this)
    },
    custom: function(A, C, D) {
        this.startTime = (new Date).getTime();
        this.start = A;
        this.end = C;
        this.unit = D || this.unit || "px";
        this.now = this.start;
        this.pos = this.state = 0;
        var B = this;

        function E(F) {
            return B.step(F)
        }
        E.elem = this.elem;
        if (E() && this.timers.push(E) && !this.timerId) {
            this.timerId = setInterval(function() {
                return B.tick.apply(B, [])
            }, 13)
        }
    },
    step: function(C) {
        var D = (new Date).getTime(),
            A = true;
        if (C || D >= this.options.duration + this.startTime) {
            this.now = this.end;
            this.pos = this.state = 1;
            this.update();
            return false
        } else {
            var B = D - this.startTime;
            this.state = B / this.options.duration;
            this.pos = this.easing.swing(this.state, B, 0, 1, this.options.duration);
            this.now = this.start + ((this.end - this.start) * this.pos);
            this.update()
        }
        return true
    }
};
(function(A, B) {
    A.TopicBigPicConfigs = {
        url: "",//"http://192.168.1.20:85/p.asp",
        downUrl: "",//"/adaptive/thread/downloadimage?imgsrc=<#=imgsrc#>",
        activeStatus: 0
    }
})(window);
(function(win, undefined) {
    var Auto = Auto || {};
    Auto["animate1"] = function(arg, speed, callback) {
        this.elem = "string" == typeof arg.elem ? document.getElementById(arg.elem) : arg.elem;
        if (this.elem == null) {
            return
        }
        this.timers = [];
        this.prop = "left" in arg ? "left" : "top" in arg ? "top" : "height" in arg ? "height" : "";
        var from = eval(this.elem.style[this.prop].replace("px", ""));
        var to = arg[this.prop];
        this.options = {
            duration: speed ? speed : 300
        };
        this.callback = function() {};
        if (typeof callback == "function") {
            this.callback = callback
        }
        if (speed == 0) {
            this.step(true)
        } else {
            this.custom(from, to)
        }
        return this
    };
    Auto["animate1"].prototype = {
        easing: {
            linear: function(p, n, firstNum, diff) {
                return firstNum + diff * p
            },
            swing: function(p, n, firstNum, diff) {
                return ((-Math.cos(p * Math.PI) / 2) + 0.5) * diff + firstNum
            }
        },
        tick: function() {
            var timers = this.timers;
            for (var i = 0; i < timers.length; i++) {
                if (!timers[i]()) {
                    timers.splice(i--, 1)
                }
            }
            if (!timers.length) {
                this.stop()
            }
        },
        stop: function() {
            clearInterval(this.timerId);
            this.timerId = null;
            this.callback(this)
        },
        move: function(fx) {
            if (fx.elem.style && fx.elem.style[fx.prop] != null) {
                fx.elem.style[fx.prop] = (fx.prop === "top" || fx.prop === "width" || fx.prop === "height" ? Math.max(0, fx.now) : fx.now) + fx.unit
            } else {
                fx.elem[fx.prop] = fx.now
            }
        },
        update: function() {
            this.move(this)
        },
        custom: function(from, to, unit) {
            this.startTime = (new Date).getTime();
            this.start = from;
            this.end = to;
            this.unit = unit || this.unit || "px";
            this.now = this.start;
            this.pos = this.state = 0;
            var self = this;

            function t(gotoEnd) {
                return self.step(gotoEnd)
            }
            t.elem = this.elem;
            if (t() && this.timers.push(t) && !this.timerId) {
                this.timerId = setInterval(function() {
                    return self.tick.apply(self, [])
                }, 13)
            }
        },
        step: function(gotoEnd) {
            var t = (new Date).getTime(),
                done = true;
            if (gotoEnd || t >= this.options.duration + this.startTime) {
                this.now = this.end;
                this.pos = this.state = 1;
                this.update();
                return false
            } else {
                var n = t - this.startTime;
                this.state = n / this.options.duration;
                this.pos = this.easing.swing(this.state, n, 0, 1, this.options.duration);
                this.now = this.start + ((this.end - this.start) * this.pos);
                this.update()
            }
            return true
        }
    };
    win.Auto = Auto
})(window);
(function(A, B) {
    A.AutoBigPicCommon = {
        tmpl: function(D, E) {
            var C = new Function("data", "var p=[]; with(data){p.push('" + D.replace(/[\r\t\n]/g, " ").replace(/'(?=[^#]*#>)/g, "\t").split("'").join("\\'").split("\t").join("'").replace(/<#=(.+?)#>/g, "',$1,'").split("<#").join("');").split("#>").join("p.push('") + "');}return p.join('');");
            return C(E)
        },
        replaceTemplate: function(C, F) {
            var E = F;
            for (var D in C) {
                var G = new RegExp("{" + D + "}", "gi");
                E = E.replace(G, C[D])
            }
            return E
        },
        extend: function(C, E) {
            if (!E) {
                return
            }
            for (var D in E) {
                C[D] = E[D]
            }
        },
        addEvent: function(E, C, F, G) {
            if (!E) {
                return
            }
            if (E.addEventListener) {
                E.addEventListener(C, F, G);
                return true
            } else {
                if (E.attachEvent) {
                    var D = E.attachEvent("on" + C, F);
                    return D
                } else {
                    E["on" + C] = F
                }
            }
        },
        removeEvent: function(E, C, F, G) {
            if (!E) {
                return
            }
            if (E.removeEventListener) {
                E.removeEventListener(C, F, G);
                return true
            } else {
                if (E.attachEvent) {
                    var D = E.attachEvent("on" + C, F);
                    return D
                } else {
                    E["on" + C] = F
                }
            }
        },
        proxy: function(C, D, E) {
            E = E || [];
            return (function() {
                return C.apply(D, E.concat(arguments))
            })
        },
        eventSplitter: /^(\w+)\s*(.*)$/,
        delegateEvents: function(J, K, F, L) {
            for (var E in J) {
                var H = J[E];
                var I = this.proxy(F[H], K);
                var D = E.match(this.eventSplitter);
                var G = D[1],
                    C = D[2];
                if (!C) {
                    $(L).live(G, I)
                } else {
                    $(C).live(G, I)
                }
            }
        }
    }
})(window);
(function(C, D) {
    function A(F, G) {
        var E = '<div class="widget">';
        E += '<div class="w-viewimg-nav w-viewimg-nav-top" data-header="1"><h2 class="wvi-nav-title" data-title="1"></h2><a href="javascript:void(0)" data-close="1" class="wvi-nav-close">返回</a></div>';
        E += '<div class="w-viewimg-focus" data-focus="1">';
        E += '  <div class="wvi-slide" data-items="list">';
        E += '<div class="wvi-item" data-item="first">';
        E += ' 	<div class="wvi-imgbox">';
        E += '  	<div class="wvi-imgself" data-itemid="first"><span><img style="max-width:' + F + "px; max-height:" + G + 'px; width:auto; height:auto;"/></span></div>';
        E += "     </div>";
        E += "</div>";
        E += '<div class="wvi-item" data-item="seconed">';
        E += ' 	<div class="wvi-imgbox">';
        E += '  	<div class="wvi-imgself" data-itemid="seconed"><span><img style="max-width:' + F + "px; max-height:" + G + 'px; width:auto; height:auto;"/></span></div>';
        E += "     </div>";
        E += "</div>";
        E += '<div class="wvi-item" data-item="three">';
        E += ' 	<div class="wvi-imgbox">';
        E += '  	<div class="wvi-imgself" data-itemid="three"><span><img style="max-width:' + F + "px; max-height:" + G + 'px; width:auto; height:auto;"/></span></div>';
        E += "     </div>";
        E += "</div>";
        E += "</div>";
        E += "</div>";
        E += ' <div class="w-viewimg-mark" style="display:none;" data-page="1">1/40</div>';
        E += '<div class="w-viewimg-nav w-viewimg-nav-bottom" data-bottom="1">';
        E += '   <a href="javascript:void(0)" class="wvi-nav-close" data-close="2">返回</a>';
       // E += '   <a href="javascript:void(0)" class="wvi-nav-download" data-download="pic"><i class="w-icon w-download"></i></a>';
        E += '<div class="w-viewimg-page-prevnext"><a class="wvi-prev" href="javascript:void(0)" data-btn="prev"><i class="w-icon w-arrow-left"></i></a>';
        E += '  <a class="wvi-next" href="javascript:void(0)" data-btn="next"><i class="w-icon w-arrow-right"></i></a>';
        E += '   <span class="wvi-number" data-bottomPage="bottom"><b></b></span>';
        E += "</div>";
        E += "</div>";
        E += ' <div class="wvi-tip-layer" style="display:none;" data-tip="lastpic"><span class="wvi-tip01-layer"><i class="w-icon w-ok"></i>已经是最后一张图了</span></div>';
        E += '<div class="wvi-tip-layer" style="display:none;" data-tip="nexttip"><span class="wvi-tip01-layer">你正在浏览下一篇文章</span></div>';
        E += "</div>";
        return E
    }

    function B(H, F, G) {
        var E = ' 	<div class="wvi-imgbox">';
        E += '  	<div class="wvi-imgself" data-itemid="' + H + '"><span><img style="max-width:' + F + "px; max-height:" + G + 'px; width:auto; height:auto;"/></span></div>';
        E += "     </div>";
        return E
    }
    C.bigPicsTemplate = {
        mainTemplate: A,
        templatePic: B
    }
})(window);
(function(H, P) {
    H.AutoClubBigPic = function(R) {
        this.configs = {
            hideEle: {
                first: "#test"
            },
            containEle: "#topicEle",
            loadingEle: "#loading",
            innerHeight: this.getWinHeight(),
            scrollTop: 0,
            title: "帖子标题",
            index: 1,
            imgsrc: "",
            topicId: 0,
            replyId: 0,
			picArr:{},
            callback: function() {},
            gaq: ""
        };
        this.eleConfigs = {
            headerEle: "div[data-header]",
            bottomEle: "div[data-bottom]",
            titleEle: "h2[data-title]",
            closeEle: "a[data-close]",
            focusEle: "div[data-focus]",
            itemsEle: "div[data-items]",
            relContainEle: "ul[data-relation='list']",
            singleImgEles: "div[data-img]",
            prevBtn: 'a[data-btn="prev"]',
            nextBtn: 'a[data-btn="next"]',
            downloadEle: "a[data-download]",
            relationEle: "ul[data-relation] a[data-replyId] ",
            bottomPage: "span[data-bottomPage]",
            firstEle: "div[data-itemid='first'] img",
            firstParentEle: "div[data-itemid='first']",
            firstConEle: "div[data-item='first']",
            secondEle: "div[data-itemid='seconed'] img",
            secondParentEle: "div[data-itemid='seconed']",
            secondConEle: "div[data-item='seconed']",
            threeEle: "div[data-itemid='three'] img",
            threeParentEle: "div[data-itemid='three']",
            threeConEle: "div[data-item='three']",
            nextTip: "div[data-tip='nexttip']",
            lastPic: "div[data-tip='lastpic']"
        };
        this.swip = null;
        this.imgList = null;
        this.imgStateArray = null;
        this.currentImgSrc = "";
        this.currentIndex = 0;
        this.cacheData = {};
        this.cachePicListData = {};
        this.relationData = {};
        this.cacheHtml = {};
        this.startPoint = {};
        this.endPoint = {};
        this.touchObj = {};
        AutoBigPicCommon.extend(this.configs, R);
        this.touchGestureObj = {}
    };
    var Q;
    var A;
    var I;
    var F;
    var L;
    var E;
    var G;
    var J = false;
    var C = 0;
    var N = 0;
    var M = 0;
    var D = 0;
    var K = 0;
    var O;
    var B = 0;
    H.AutoClubBigPic.prototype = {
        InitEvent: function() {
            var R = this;
            $(R.eleConfigs.closeEle).die("click");
            $(R.eleConfigs.closeEle).live("click", function() {
                if ("first" in R.configs.hideEle) {
                    $(R.configs.hideEle.first).css("display", "")
                }
                if ("second" in R.configs.hideEle) {
                    $(R.configs.hideEle.second).show()
                }
                $(R.configs.containEle).hide();
                document.body.style.backgroundColor = "";
                J = false;
                window.scrollTo(0, R.configs.scrollTop)
            });
            $(R.eleConfigs.prevBtn).die("click");
            $(R.eleConfigs.prevBtn).live("click", function() {
                TopicBigPicConfigs.activeStatus = 1;
                R.Prev()
            });
            $(R.eleConfigs.nextBtn).die("click");
            $(R.eleConfigs.nextBtn).live("click", function() {
                R.Next()
            });
            $(R.eleConfigs.downloadEle).die("click");
            $(R.eleConfigs.downloadEle).live("click", function() {
                R.configs.gaq.push(["_trackEvent", "论坛查看大图", "下载大图", "点击次数"]);
                TopicBigPicConfigs.activeStatus = 1;
                var U = R.cachePicListData[R.configs.topicId];
                if (!U || U.length <= 0) {
                    return false
                }
                var T = U.length,
                    W = "";
                if (R.currentIndex == T) {
                    W = U[R.currentIndex - 1]
                } else {
                    W = U[R.currentIndex]
                }
                var V = AutoBigPicCommon.tmpl(TopicBigPicConfigs.downUrl, {
                    imgsrc: W.bigPic
                });
                window.location.href = V;
                window.scrollTo(0, 1)
            });
            Q = AutoBigPicCommon.proxy(R.touchStart, R);
            I = AutoBigPicCommon.proxy(R.touchMove, R);
            A = AutoBigPicCommon.proxy(R.touchEnd, R);
            var S = $(R.eleConfigs.itemsEle)[0];
            AutoBigPicCommon.addEvent(S, "touchstart", Q, false);
            AutoBigPicCommon.addEvent(S, "touchmove", I, false);
            AutoBigPicCommon.addEvent(S, "touchend", A, false);
            AutoBigPicCommon.addEvent(S, "mousedown", AutoBigPicCommon.proxy(R.touchStart, R), false);
            AutoBigPicCommon.addEvent(S, "mousemove", AutoBigPicCommon.proxy(R.touchMove, R), false);
            AutoBigPicCommon.addEvent(S, "mouseup", AutoBigPicCommon.proxy(R.touchEnd, R), false);
            AutoBigPicCommon.addEvent(window, "onorientationchange" in window ? "orientationchange" : "resize", AutoBigPicCommon.proxy(R.orientationChange, R), false);
            AutoBigPicCommon.addEvent(S, "gesturestart", AutoBigPicCommon.proxy(R.gesturestart, R), false);
            AutoBigPicCommon.addEvent(S, "gestureend", AutoBigPicCommon.proxy(R.gestureend, R), false);
            AutoBigPicCommon.addEvent(S, "gesturechange", AutoBigPicCommon.proxy(R.gesturechange, R), false)
        },
        orientationChange: function() {
            var R = this;
            setTimeout(function() {
                window.scrollTo(0, 1)
            }, 0);
            $(R.eleConfigs.headerEle).hide();
            $(R.eleConfigs.bottomEle).hide();
            setTimeout(function() {
                $(R.eleConfigs.focusEle).css("height", R.getWinHeight() + "px");
                $(R.eleConfigs.secondEle).css("max-height", R.getWinHeight() + "px");
                $(R.eleConfigs.secondEle).css("max-width", R.getWinWidth() - 20 + "px");
                $(R.eleConfigs.firstEle).css("max-height", R.getWinHeight() + "px");
                $(R.eleConfigs.firstEle).css("max-width", R.getWinWidth() - 20 + "px");
                $(R.eleConfigs.threeEle).css("max-height", R.getWinHeight() + "px");
                $(R.eleConfigs.threeEle).css("max-width", R.getWinWidth() - 20 + "px");
                R.cacheHtml["firstEle"] = bigPicsTemplate.templatePic("first", R.getWinWidth() - 20, R.getWinHeight());
                R.cacheHtml["secondEle"] = bigPicsTemplate.templatePic("seconed", R.getWinWidth() - 20, R.getWinHeight());
                R.cacheHtml["threeEle"] = bigPicsTemplate.templatePic("three", R.getWinWidth() - 20, R.getWinHeight());
                $(R.eleConfigs.itemsEle).css("left", -(R.getWinWidth()) + "px")
            }, 300)
        },
        setTitle: function(S) {
            var R = this;
            S = R.configs.title || "";
            $(R.eleConfigs.titleEle).html(S)
        },
        getIndex: function(S) {
            var R = this,
                T = {};
            if (!S) {
                return 0
            }
            if (R.configs.replyId != 0) {
                T = R.cachePicListData[R.configs.replyId]
            } else {
                T = R.cachePicListData[R.configs.topicId]
            }
            R.each(T, S)
        },
        each: function(W, U) {
            if (!W || !U) {
                return
            }
            var S = this;
            if (W != P && W.length > 0) {
                for (var R = 0, T = W.length; R < T; R++) {
                    var V = W[R];
                    V = V.substring(V.lastIndexOf("/"));
                    U = U.substring(U.lastIndexOf("/"));
                    if (V == U) {
                        S.currentIndex = R;
                        break
                    }
                }
            }
        },
        setBottom: function(S, U) {
            var X = this,
                T = $(X.eleConfigs.prevBtn),
                R = $(X.eleConfigs.nextBtn),
                W = $(X.eleConfigs.bottomPage),
                Y = $(X.eleConfigs.titleEle),
                V = $(X.eleConfigs.downloadEle);
            if (!S || !U) {
                W.html("");
                Y.html("");
                V.hide();
                T.hide();
                R.hide()
            } else {
                Y.html(X.configs.title);
                if (!(navigator.userAgent.indexOf("OS ") > -1)) {
                    V.show()
                }
                T.show();
                R.show();
                W.html("<b>" + S + "</b>/" + U)
            }
        },
        show: function() {
            var R = this;
            setTimeout(function() {
                window.scrollTo(0, 1)
            }, 0);
            R.getHtml()
        },
        getHtml: function(T) {
            var R = this,
                S = bigPicsTemplate.mainTemplate(R.getWinWidth() - 20, R.getWinHeight());
            if ("first" in R.configs.hideEle) {
                $(R.configs.hideEle.first).css("display", "none")
            }
            if ("second" in R.configs.hideEle) {
                $(R.configs.hideEle.second).hide()
            }
            $(R.configs.containEle).html(S).show();
            if (navigator.userAgent.indexOf("OS ") > -1) {
                $(R.eleConfigs.downloadEle).hide()
            }
            R.loadPic(T)
        },
        loadPic: function(U) {
            var R = this,
                S = "",
                T = {};
            T["topicId"] = R.configs.topicId;
            T["replyId"] = R.configs.replyId;
            T["href"] = R.configs.imgsrc.replace("/400_", "/500_");
            S = R.configs.picArr;//AutoBigPicCommon.tmpl(TopicBigPicConfigs.url, T);
            $(R.eleConfigs.focusEle).css("height", (Math.min(R.configs.innerHeight, R.getWinHeight())) + "px");
            if (!U) {
                $(R.configs.loadingEle).show()
            }
            if (U) {
                $(R.eleConfigs.nextTip).show();
                setTimeout(function() {
                    $(R.eleConfigs.nextTip).hide()
                }, 1000)
            }
            if (R.cachePicListData[R.configs.topicId] && R.cacheData["cacheHtml" + R.configs.topicId]) {
                $(R.eleConfigs.relContainEle).html(R.cacheData["cacheHtml" + R.configs.topicId]);
                R.initPic();
                R.InitEvent();
                if (!U) {
                    $(R.configs.loadingEle).hide()
                }
                return
            }
           //$.getJSON(S, function(V) {
			    V=S;
                if (!U) {
                    $(R.configs.loadingEle).hide()
                }
                if (!V) {
                    return
                }
                if (V.picItems && V.picItems.length > 0) {
                    R.cachePicListData[R.configs.topicId] = V.picItems
                }
                R.initPic();
                R.InitEvent()
          // })
        },
        initPic: function() {
            var R = this;
            R.imgList = $(R.eleConfigs.singleImgEles);
            R.imgStateArray = new Array(R.imgList.length);
            R.cacheHtml["firstEle"] = bigPicsTemplate.templatePic("first", R.getWinWidth() - 20, R.getWinHeight());
            R.cacheHtml["secondEle"] = bigPicsTemplate.templatePic("seconed", R.getWinWidth() - 20, R.getWinHeight());
            R.cacheHtml["threeEle"] = bigPicsTemplate.templatePic("three", R.getWinWidth() - 20, R.getWinHeight());
            R.InitSwipe()
        },
        InitSwipe: function() {
            var S = this,
                R = $(S.eleConfigs.itemsEle),
                T = S.getWinWidth();
            S.setTitle();
            S.getIndex(S.configs.imgsrc);
            R.css("left", -T + "px");
            S.changeNum();
            S.SetImg(S.currentIndex, true)
        },
        gesturestart: function(S) {
            S[0].preventDefault();
            if (S[0].target.tagName.toLocaleLowerCase() != "img") {
                return
            }
            this.removeWebkitTransformStyle(S[0]);
            if (J == false) {
                J = true;
                F = this;
                var R = $(F.eleConfigs.itemsEle)[0];
                AutoBigPicCommon.removeEvent(R, "touchstart", Q, false);
                AutoBigPicCommon.removeEvent(R, "touchmove", I, false);
                AutoBigPicCommon.removeEvent(R, "touchend", A, false);
                L = AutoBigPicCommon.proxy(F.touchGestureStart, F);
                E = AutoBigPicCommon.proxy(F.touchGestureMove, F);
                G = AutoBigPicCommon.proxy(F.touchGestureEnd, F);
                AutoBigPicCommon.addEvent(R, "touchstart", L, false);
                AutoBigPicCommon.addEvent(R, "touchmove", E, false);
                AutoBigPicCommon.addEvent(R, "touchend", G, false)
            }
        },
        gesturechange: function(S) {
            var R = S[0] || window.event;
            R.preventDefault();
            if (R.target.tagName.toLocaleLowerCase() != "img") {
                return
            }
            if (R.scale <= 0.9 || R.scale >= 3) {
                return
            }
            $(R.target).css("-webkit-transform", "scale(" + R.scale + ")");
            C = R.scale
        },
        gestureend: function(S) {
            S[0].preventDefault();
            if (S[0].target.tagName.toLocaleLowerCase() != "img") {
                return
            }
            if (S[0].scale <= 1) {
                if (J == true) {
                    J = false;
                    var R = $(F.eleConfigs.itemsEle)[0];
                    AutoBigPicCommon.addEvent(R, "touchstart", Q, false);
                    AutoBigPicCommon.addEvent(R, "touchmove", I, false);
                    AutoBigPicCommon.addEvent(R, "touchend", A, false);
                    AutoBigPicCommon.removeEvent(R, "touchstart", L, false);
                    AutoBigPicCommon.removeEvent(R, "touchmove", E, false);
                    AutoBigPicCommon.removeEvent(R, "touchend", G, false);
                    this.removeWebkitTransformStyle(S[0]);
                    D = 0;
                    K = 0;
                    N = 0;
                    M = 0
                }
            }
        },
        removeWebkitTransformStyle: function(R) {
            $(R.target).css("-webkit-transform", "")
        },
        supportAndroidGesture: function() {
            var Z = this;
            O = Hammer($(Z.eleConfigs.secondParentEle)[0], {
                transform_always_block: true,
                transform_min_scale: 1,
                drag_block_horizontal: true,
                drag_block_vertical: true,
                drag_min_distance: 0
            });
            F = this;
            var X = $(F.eleConfigs.itemsEle)[0];
            var V = false;
            var T = $(Z.eleConfigs.secondEle)[0];
            var a = 0,
                R = 0,
                U = 1,
                Y;
            var S = false;
            var W = false;
            O.on("touch drag dragend transform transformend", function(d) {
                d.gesture.preventDefault();
                switch (d.type) {
                    case "touch":
                        Y = U;
                        Z.startPoint.x = d.gesture.touches[0].clientX;
                        Z.startPoint.y = d.gesture.touches[0].clientY;
                        break;
                    case "drag":
                        if (!W) {
                            var c = d.gesture.touches[0].clientX;
                            var b = d.gesture.touches[0].clientY;
                            a = D + (c - Z.startPoint.x) / U;
                            R = K + (b - Z.startPoint.y) / U;
                            N = isNaN(a) ? 0 : a;
                            M = isNaN(R) ? 0 : R
                        } else {
                            W = false
                        }
                        break;
                    case "dragend":
                        if (!W) {
                            if (N > 300) {
                                N = 300
                            }

                            if (N < -300) {
                                N = -300
                            }
                            if (M > 200) {
                                M = 200
                            }
                            if (M < -200) {
                                M = -200
                            }
                            a = D = N;
                            R = K = M
                        }
                        break;
                    case "transform":
                        U = Math.max(0.9, Math.min(Y * d.gesture.scale, 3));
                        if (U > 1) {
                            if (V == false) {
                                V = true;
                                AutoBigPicCommon.removeEvent(X, "touchstart", Q, false);
                                AutoBigPicCommon.removeEvent(X, "touchmove", I, false);
                                AutoBigPicCommon.removeEvent(X, "touchend", A, false)
                            }
                        }
                        W = true;
                        break;
                    case "transformend":
                        if (U <= 1) {
                            if (V == true) {
                                V = false;
                                AutoBigPicCommon.addEvent(X, "touchstart", Q, false);
                                AutoBigPicCommon.addEvent(X, "touchmove", I, false);
                                AutoBigPicCommon.addEvent(X, "touchend", A, false)
                            }
                            S = true
                        } else {
                            S = false
                        }
                        break
                }
                if (U > 1) {
                    var e = "translate3d(" + a + "px," + R + "px, 0) scale(" + U + ") ";
                    T.style.webkitTransform = e
                }
                if (S) {
                    if (U < 1) {
                        T.style.webkitTransform = ""
                    }
                }
            })
        },
        touchGestureStart: function(S) {
            TopicBigPicConfigs.activeStatus = 1;
            var R = S[0] || window.event;
            if (R.target.tagName.toLocaleLowerCase() != "img") {
                return
            }
            R.preventDefault();
            if (R.targetTouches) {
                if (R.targetTouches.length > 1) {
                    return
                }
                F.touchGestureObj["isTouch"] = true;
                F.startPoint.x = R.targetTouches[0].clientX;
                F.startPoint.y = R.targetTouches[0].clientY
            }
            F.touchGestureObj["isMove"] = true
        },
        touchGestureMove: function(X) {
            var S = X[0] || window.event;
            S.preventDefault();
            if (S.targetTouches) {
                if (S.targetTouches.length > 1) {
                    return
                }
            }
            if (S.target.tagName.toLocaleLowerCase() != "img") {
                return
            }
            if (!F.touchGestureObj["isMove"]) {
                return
            }
            var T = 0,
                W = 0,
                U = 0,
                V = 0;
            if (F.touchGestureObj["isTouch"]) {
                T = S.targetTouches[0].clientX;
                W = S.targetTouches[0].clientY
            }
            U = D + (T - F.startPoint.x) / C;
            V = K + (W - F.startPoint.y) / C;
            var R = "translate3d(" + U + "px, " + V + "px, 0) scale(" + C + ")";
            $(S.target).css("-webkit-transform", R);
            N = U;
            M = V
        },
        touchGestureEnd: function(T) {
            var R = F,
                S = T[0] || window.event;
            S.preventDefault();
            R.touchObj["isMove"] = false;
            if (S.target.tagName.toLocaleLowerCase() != "img") {
                return
            }
            if (N > 300) {
                N = 300
            }
            if (N < -300) {
                N = -300
            }
            if (M > 200) {
                M = 200
            }
            if (M < -200) {
                M = -200
            }
            if (D == N || K == M) {
                $(R.eleConfigs.headerEle).toggle();
                $(R.eleConfigs.bottomEle).toggle()
            }
            D = N;
            K = M
        },
        touchStart: function(T) {
            var R = this,
                S = T[0] || window.event;
            if (S.targetTouches) {
                R.touchObj["isTouch"] = true;
                R.startPoint.x = S.targetTouches[0].clientX;
                R.startPoint.y = S.targetTouches[0].clientY
            } else {
                R.startPoint["x"] = S.clientX;
                R.startPoint["y"] = S.clientY
            }
            R.touchObj["isMove"] = true
        },
        touchMove: function(S) {
            var T = this,
                R = S[0] || window.event;
            R.preventDefault();
            if (!T.touchObj["isMove"]) {
                return
            }
            var a, Z, X = 0,
                Y = 0,
                W = 0,
                U = 0,
                V = P;
            if (T.touchObj["isTouch"]) {
                a = R.targetTouches[0].clientX;
                Z = R.targetTouches[0].clientY
            } else {
                a = R.clientX;
                Z = R.clientY
            }
            W = a - T.startPoint.x;
            U = Z - T.startPoint.y;
            T.startPoint.x = a;
            T.startPoint.y = Z;
            X = parseFloat($(T.eleConfigs.itemsEle).css("left"));
            X += W;
            Y += U;
            T.touchObj["dx"] = W;
            if (V == P) {
                if (Math.abs(W) > Math.abs(U)) {
                    V = true
                } else {
                    V = false
                }
            }
            if (V) {
                R.preventDefault();
                $(T.eleConfigs.itemsEle).css("left", X)
            } else {
                V = P;
                return
            }
        },
        touchEnd: function(W) {
            var S = this,
                T = W[0] || window.event;
            S.touchObj["isMove"] = false;
            var U = -S.getWinWidth() + "px",
                R = S.cachePicListData[S.configs.topicId].length;
            T.preventDefault();
            if (S.touchObj["dx"] < 0) {
                S.currentIndex++;
                if (S.currentIndex >= R) {
                    S.currentIndex = R - 1;
                    new Auto["animate1"]({
                        elem: eleContainer = $(S.eleConfigs.itemsEle)[0],
                        left: -S.getWinWidth()
                    }, 500, function() {
                        S.SetImg(S.currentIndex, false)
                    })
                } else {
                    S.changeNum();
                    S.moveTo(true)
                }
            } else {
                if (S.touchObj["dx"] > 0) {
                    S.currentIndex--;
                    if (S.currentIndex < 0) {
                        S.currentIndex = 0;
                        new Auto["animate1"]({
                            elem: eleContainer = $(S.eleConfigs.itemsEle)[0],
                            left: -S.getWinWidth()
                        }, 500, function() {
                            S.SetImg(S.currentIndex, false)
                        })
                    } else {
                        S.changeNum();
                        S.moveTo(false)
                    }
                } else {
                    var V = navigator.userAgent.toLocaleLowerCase();
                    if (V.indexOf("uc") > -1) {
                        if (!/(iphone|ipad|ipod)/i.test(V)) {
                            if (B % 2 == 0) {
                                S.setEleToggle()
                            }
                        } else {
                            S.setEleToggle()
                        }
                    } else {
                        if (V.indexOf("qq") == -1 && V.indexOf("u;") > -1 && V.indexOf("gt-n") && V.indexOf("mi-one") == -1) {
                            if (B % 2 == 0) {
                                S.setEleToggle()
                            }
                        } else {
                            S.setEleToggle()
                        }
                    }
                    B++;
                    $(S.eleConfigs.itemsEle).css("left", U);
                    if (S.currentIndex >= R) {
                        $(W[0].target).parent().trigger("click")
                    }
                    return
                }
            }
            S.touchObj["dx"] = 0
        },
        setEleToggle: function() {
            var R = this;
            $(R.eleConfigs.headerEle).toggle();
            $(R.eleConfigs.bottomEle).toggle()
        },
        SetImg: function(R, c) {
            var b = this,
                Y = "",
                U = "",
                X = "",
                a = b.eleConfigs.firstEle,
                d = b.eleConfigs.secondEle,
                e = b.eleConfigs.threeEle,
                V = $(b.eleConfigs.firstConEle),
                W = $(b.eleConfigs.secondConEle),
                T = $(b.eleConfigs.threeConEle),
                Z = b.cachePicListData[b.configs.topicId],
                S = Z.length;
            if (/android/.test(navigator.userAgent.toLowerCase())) {
                b.supportAndroidGesture()
            }
            if (R == 0) {
                U = Z[R];
                X = Z[R + 1];
                V.html("");
                if (U != P) {
                    $(d).attr("src", b.getMatchBigPic(U))
                }
                if (!c) {
                    T.html(b.cacheHtml["threeEle"]);
                    if (X != P) {
                        $(b.eleConfigs.threeEle).attr("src", b.getMatchBigPic(X))
                    }
                } else {
                    if (X != P) {
                        $(e).attr("src", b.getMatchBigPic(X))
                    }
                }
                $(b.eleConfigs.itemsEle).css("left", -b.getWinWidth() + "px");
                return
            }
            V.html(b.cacheHtml["firstEle"]);
            T.html(b.cacheHtml["threeEle"]);
            if (R == S - 1) {
                if (c) {
                    Y = Z[R - 1];
                    U = Z[R];
                    $(a).attr("src", b.getMatchBigPic(Y));
                    $(d).attr("src", b.getMatchBigPic(U))
                } else {
                    Y = Z[R - 1];
                    U = Z[R];
                    W.html(b.cacheHtml["secondEle"]);
                    $(a).attr("src", b.getMatchBigPic(Y));
                    $(b.eleConfigs.secondEle).attr("src", b.getMatchBigPic(U))
                }
                T.html("");
                $(b.eleConfigs.itemsEle).css("left", -b.getWinWidth() + "px");
                return
            }
            Y = Z[R - 1];
            U = Z[R];
            X = Z[R + 1];
            $(a).attr("src", b.getMatchBigPic(Y));
            $(d).attr("src", b.getMatchBigPic(U));
            $(e).attr("src", b.getMatchBigPic(X));
            $(b.eleConfigs.itemsEle).css("left", -b.getWinWidth() + "px");
            $(a).css("-webkit-transform", "");
            $(d).css("-webkit-transform", "");
            $(e).css("-webkit-transform", "")
        },
        removeImgEleWebkitCss: function(R) {
            $(R).css("-webkit-transform", "")
        },
        getMatchBigPic: function(U) {
            if (/ipad/.test(navigator.userAgent.toLowerCase())) {
                return U
            }
            var R = /\/album\/(\d{4}\/\d{1,2}\/\d{1,2})\/500_/;
            var T = R.exec(U);
            if (T == null) {
                return U
            }
            var S = new Date(T[1]);
            if (new Date("2011/3/28") < S) {
                return U.replace("/500_", "/400_")
            } else {
                return U
            }
        },
        Next: function() {
            var S = this,
                T = S.currentIndex,
                R = S.cachePicListData[S.configs.topicId].length;
            S.currentIndex++;
            if (S.currentIndex > R - 1) {
                S.currentIndex = R - 1;
                return
            }
            S.changeNum();
            S.moveTo(true)
        },
        Prev: function() {
            var R = this;
            if (R.currentIndex == 0) {
                return
            }
            R.currentIndex--;
            R.changeNum();
            R.moveTo(false)
        },
        changeNum: function() {
            var R = this;
            R.setBottom(R.currentIndex + 1, R.cachePicListData[R.configs.topicId].length)
        },
        moveTo: function(T) {
            var R = this,
                S = 0;
            if (T) {
                S = -R.getWinWidth() * 2
            } else {
                S = 0
            }
            new Auto["animate1"]({
                elem: eleContainer = $(R.eleConfigs.itemsEle)[0],
                left: S
            }, 300, function() {
                R.SetImg(R.currentIndex, T)
            })
        },
        getWinHeight: function() {
            var R = 0;
            if (window.innerHeight) {
                R = Math.min(window.innerHeight, document.documentElement.clientHeight)
            } else {
                if (document.documentElement && document.documentElement.clientHeight) {
                    R = document.documentElement.clientHeight
                } else {
                    if (document.body) {
                        R = document.body.clientHeight
                    }
                }
            }
            return R
        },
        getWinWidth: function() {
            var R = 0;
            if (window.innerWidth) {
                R = Math.min(window.innerWidth, document.documentElement.clientWidth)
            } else {
                if (document.documentElement && document.documentElement.clientWidth) {
                    R = document.documentElement.clientWidth
                } else {
                    if (document.body) {
                        R = document.body.clientWidth
                    }
                }
            }
            return R
        }
    }
})(window);

/*
Execute Time:3ms
Create Time:2014/12/11 15:20:56
*/

function arrStr(ele){
	var $contentDiv=$(ele).find("img")
	if($contentDiv.length){
		var str=[],j=0
		$.each($contentDiv,function(i,v){
			var simg=$(this).attr("data-original")
			if(simg && simg.indexOf("/news/")>-1){
				str[j]=simg;
				j++;
			}
		})
	}
	return str.length?str:false
}

