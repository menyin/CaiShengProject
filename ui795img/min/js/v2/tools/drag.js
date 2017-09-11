define('tools.drag', function (require, exports, module) {
    var $ = module['jquery'], util = require('base.util'), shape = module['base.shape'], win = window, doc = document, isIE = !win.XMLHttpRequest;
    var drag = shape(function (o) {
        drag.parent().call(this, util.merge({
            element: null,
            limit: false,
            left: 0,
            right: 9999,
            top: 0,
            bottom: 9999,
            container: "",
            lockX: false,
            lockY: false,
            lock: false,
            transparent: false
        }, o));
        this.init();
    });
    drag.implement({
        init: function () {
            var element = this.get('element');
            if (!element || util.type.isString(element) || !element.length) {
                return;
            }
            this._initPosition();
            this._repair();
            this._initEvent();
        }, _initPosition: function () {
            this._x = this._y = 0;
            this._marginLeft = this._marginTop = 0;
            this._container = this.get('container');
            this.get('element').css('position', 'absolute');
            if (isIE && !!this.get('transparent')) {
                $('<div></div>').appendTo(this.target).css({
                    'width': '100%',
                    'height': '100%',
                    'background': '#fff',
                    'opacity': 0,
                    'filter': 'alpha(opacity:0)',
                    'font-size': 0
                });
            }
        }, _initEvent: function () {
            var self = this;
            this.get('element').on('mousedown.drag', util.bind(this._start, this));
        }, _start: function (e) {
            if (this.get('lock')) {
                return;
            }
            var element = this.get('element');
            this._repair();
            this._x = e.pageX - element.position().left;
            this._y = e.pageY - element.position().top;
            this._moveX = e.pageX;
            this._moveY = e.pageY;
            this._marginLeft = parseInt(element.css('margin-left')) || 0;
            this._marginTop = parseInt(element.css('margin-top')) || 0;
            $(doc).on('mousemove.drag', util.bind(this._move, this)).on('mouseup.drag', util.bind(this._stop, this));
            if (isIE) {
                element.on('losecapture', util.bind(this._stop, this));
                element[0].setCapture();
            } else {
                $(win).bind('blur', util.bind(this._stop, this));
                e.preventDefault();
            }
            this.trigger('dragStart', e);
        }, _move: function (e) {
            if (this.get('lock')) {
                this._stop(e);
                return;
            }
            ;
            var iLeft, iTop, mxLeft, mxRight, mxTop, mxBottom, element = this.get('element');
            win.getSelection ? win.getSelection().removeAllRanges() : doc.selection.empty();
            iLeft = e.pageX - this._x;
            iTop = e.pageY - this._y;
            e.moveX = e.pageX - this._moveX;
            e.moveY = e.pageY - this._moveY;
            if (this.get('limit')) {
                mxLeft = this.get('left');
                mxRight = this.get('right');
                mxTop = this.get('top');
                mxBottom = this.get('bottom');
                if (this._container && this._container[0]) {
                    mxLeft = Math.max(mxLeft, 0);
                    mxTop = Math.max(mxTop, 0);
                    mxRight = Math.min(mxRight, this._container.width());
                    mxBottom = Math.min(mxBottom, this._container.height());
                }
                iLeft = Math.max(Math.min(iLeft, mxRight - element.outerWidth()), mxLeft);
                iTop = Math.max(Math.min(iTop, mxBottom - element.outerHeight()), mxTop);
            }
            if (!this.get('lockX')) {
                element.css('left', iLeft - this._marginLeft);
            }
            if (!this.get('lockY')) {
                element.css('top', iTop - this._marginTop);
            }
            this.trigger('drag', e);
        }, _stop: function (e) {
            $(doc).off('mousemove.drag', this._resize).off('mouseup.drag', this._stop);
            var element = this.get('element');
            if (isIE) {
                element.off('losecapture', this._stop);
                element[0].releaseCapture();
            } else {
                $(win).off("blur", this._stop);
            }
            this.trigger('dragEnd', e);
        }, _repair: function () {
            if (this.get('limit')) {
                var element = this.get('element'), container = this.get('container');
                this.set('right', Math.max(this.get('right'), this.get('left') + element.outerWidth()));
                this.set('bottom', Math.max(this.get('bottom'), this.get('top') + element.outerHeight()));
                if (container && container.length && !util.type.isString(container) && !/body/.test(container[0].nodeName.toLowerCase())) {
                    container.css('position', 'relative');
                }
            }
        }, destory: function () {
            var element = this.get('element');
            element.off('mousedown.drag');
            $(doc).off('mousemove.drag mouseup.drag');
            if (isIE) {
                element.off('losecapture', this._stop);
                element[0].releaseCapture();
            } else {
                $(win).off("blur", this._stop);
            }
            drag.parent('destory').call(this);
        }
    });
    return drag;
});