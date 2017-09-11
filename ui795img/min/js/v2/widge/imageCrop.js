define('widge.imageCrop', 'tools.drag, tools.resize, tools.imgLoader', function (require, exports, module) {
    var $ = module['jquery'], util = require('base.util'), shape = module['base.shape'], Drag = module['tools.drag'], Resize = module['tools.resize'], ImageLoader = module['tools.imgLoader'], isIE6 = (window.navigator.userAgent || '').toLowerCase().indexOf('msie 6') !== -1, imgLoader = new ImageLoader();
    var imageCrop = shape(function (o) {
        imageCrop.parent().call(this, util.merge({
            element: $('#image_inner'),
            handle: '#imagecut',
            opacity: .7,
            color: "#fff",
            width: 0,
            height: 0,
            isDrag: true,
            isLayout: false,
            resize: true,
            resizeControl: {
                right: "#rRight",
                left: "#rLeft",
                up: "#rUp",
                down: "#rDown",
                rightDown: "#rRightDown",
                leftDown: "#rLeftDown",
                rightUp: "#rRightUp",
                leftUp: "#rLeftUp"
            },
            min: true,
            minWidth: 50,
            minHeight: 50,
            scale: true,
            ratio: 0
        }, o));
        this.init();
    });
    imageCrop.implement({
        getImageLoader: function () {
            return imgLoader;
        }, _createImageLoader: function () {
            var self = this;
            if (!imgLoader) {
                imgLoader = new ImageLoader();
            }
            imgLoader.off('load error').on('load', function (e) {
                self.setDisable(false);
                self.trigger('loadSuccess', e);
                self._setImage(e);
            }).on('error', function (e) {
                self.setDisable(true);
                self.trigger('loadError', e);
            });
        }, _createDrag: function () {
            try {
                this._drag = new Drag({element: this.get('handle'), limit: true});
            } catch (e) {
            }
        }, _createResize: function () {
            var handle = this.get('handle');
            if (this.get('resize')) {
                try {
                    this._resize = new Resize({element: handle, max: true, control: this.get('resizeControl')});
                } catch (e) {
                }
                this.min = !!this.get('min');
                this.minWidth = Math.round(this.get('minWidth'));
                this.minHeight = Math.round(this.get('minHeight'));
                this._oldWidth = this.handStartWidth = this.handEndWidth = handle.width();
                this._oldHeight = this.handStartHeight = this.handEndHeight = handle.height();
            } else {
                handle.children().hide();
            }
        }, setDisable: function (b) {
            var handle = this.get('handle');
            if (b) {
                this.targetImage.hide();
                this.cropImage.hide();
                handle.hide();
            } else {
                this.targetImage.show();
                this.cropImage.show();
                handle.show();
            }
            this.disiabled = b;
        }, init: function () {
            this._createImageLoader();
            var element = this.get('element'), handle = this.get('handle');
            if (util.type.isString(handle)) {
                this.set('handle', element.find(handle));
            }
            this.targetImage = $('<img />').appendTo(element);
            this.cropImage = $('<img />').appendTo(element);
            this._createDrag();
            this._createResize();
            element.css({'position': 'relative', 'overflow': 'hidden'});
            if (this.get('color')) {
                element.css('background', this.get('color'));
            }
            this.get('handle').css('z-index', 200);
            this.targetImage.css({'position': 'absolute', 'top': 0, 'left': 0}).hide();
            this.cropImage.css({'position': 'absolute', 'z-index': 100, 'left': 0, 'top': 0}).hide();
            this.targetImage.css('opacity', this.get('opacity'));
            this.resetResize();
            this.resetCenter();
            this._initEvent();
        }, loadImage: function (src) {
            this.setDisable(true);
            imgLoader.load(src);
        }, _setImage: function (e) {
            var img = e.img, src = img.src;
            this.set('src', src);
            this.tmpWidth = img.width;
            this.tmpHeight = img.height;
            this.targetImage.attr('src', src);
            this.cropImage.attr('src', src);
            if (this.views && this.views.length) {
                $.each(this.views, function (i, view) {
                    view.attr('src', src);
                });
            }
            this.reset();
        }, _initEvent: function () {
            var self = this, isLayout = this.get('isLayout');
            this._drag.on('dragStart', util.bind(this._dragStart, this)).on('drag', util.bind(this._dragMove, this));
            if (this.get('resize')) {
                this._resize.on('resizeStart', function (e) {
                    if (self.get('isDrag')) {
                        self.handStartWidth = self.getPos().width;
                        self.handStartHeight = self.getPos().height;
                    }
                });
                this._resize.on('resized', function (e) {
                    if (self.get('isDrag')) {
                        self.handEndWidth = self.getPos().width;
                        self.handEndHeight = self.getPos().height;
                    }
                    self.setPos();
                    self.resetPreview();
                });
            }
        }, _dragStart: function (e) {
            if (!this.get('isDrag'))return;
            var handle = this.get('handle');
            this.imageOffset = {left: this.targetImage.position().left, top: this.targetImage.position().top};
            this.handleOffset = {left: handle.position().left, top: handle.position().top};
        }, _dragMove: function (e) {
            if (!this.get('isDrag'))return;
            var isLayout = this.get('isLayout');
            if (isLayout) {
                var imgLeft = this.imageOffset.left - e.moveX, imgTop = this.imageOffset.top - e.moveY;
                this.setPosition(imgTop, imgLeft);
            } else {
                this.setPos();
            }
            var height = isLayout ? this.scalHeight : this.get('element').height(), width = isLayout ? this.scalWidth : this.get('element').width();
            this.setRange(0, 0, Math.max(height, this.get('height')), Math.max(width, this.get('width')));
            this.resetPreview();
        }, getCenterSize: function () {
            var element = this.get('element'), handle = this.get('handle');
            var width = element.width(), height = element.height();
            return {
                left: -(this.scalWidth - width) / 2,
                top: -(this.scalHeight - height) / 2,
                dragLeft: -(handle.width() - width) / 2,
                dragTop: -(handle.height() - height) / 2
            }
        }, resetSize: function () {
            var css = {width: this.scalWidth, height: this.scalHeight};
            this.targetImage.css(css);
            this.cropImage.css(css);
        }, resetCenter: function () {
            var c = this.getCenterSize();
            this.resetSize();
            this.setPosition(c.top, c.left);
            this.get('handle').css({'left': c.dragLeft, 'top': c.dragTop});
            this.setRange(c.top, c.left, c.top + this.scalHeight, c.left + this.scalWidth);
        }, resetResize: function () {
            if (this.get('resize')) {
                this._resize.set('scale', this.get('scale'));
                this._resize.set('ratio', this.get('ratio'));
                this._resize.set('min', this.get('min'));
                this._resize.set('minWidth', this.get('minWidth'));
                this._resize.set('minHeight', this.get('minHeight'));
                this.get('handle').css({'width': this._oldWidth, 'height': this._oldHeight});
            }
        }, reset: function () {
            this.scalWidth = this.tmpWidth;
            this.scalHeight = this.tmpHeight;
            this.defaultRatio = this.tmpWidth / this.tmpHeight;
            delete this.tmpWidth;
            delete this.tmpHeight;
            this.resetResize();
            this.resetCenter();
            this.setPos();
            this.resetPreview();
        }, setPosition: function (top, left) {
            this.targetImage.css({'left': left, 'top': top});
            this.cropImage.css({'left': left, 'top': top});
        }, setRange: function (top, left, bottom, right) {
            top = top <= 0 ? 0 : top;
            left = left <= 0 ? 0 : left;
            bottom = bottom >= this.get('height') ? this.get('height') : bottom;
            right = right >= this.get('width') ? this.get('width') : right;
            this._drag.set('top', top);
            this._drag.set('left', left);
            this._drag.set('right', right);
            this._drag.set('bottom', bottom);
            if (this.get('resize')) {
                this._resize.set('top', top);
                this._resize.set('left', left);
                this._resize.set('right', right);
                this._resize.set('bottom', bottom);
            }
        }, setPos: function () {
            if (isIE6) {
                this.get('handle').css('zoom', .9).css('zoom', 1);
            }
            ;
            var p = this.getPos();
            this.cropImage.css('clip', "rect(" + p.top + "px," + (p.left + p.width) + "px," + (p.top + p.height) + "px," + p.left + "px)");
        }, getPos: function () {
            var handle = this.get('handle');
            return {
                top: handle.position().top - this.targetImage.position().top,
                left: handle.position().left - this.targetImage.position().left,
                width: handle.outerWidth(),
                height: handle.outerHeight()
            }
        }, getSize: function (nowWidth, nowHeight, fixWidth, fixHeight) {
            var iWidth = nowWidth, iHeight = nowHeight, scale = iWidth / iHeight;
            if (fixHeight) {
                iWidth = (iHeight = fixHeight) * scale;
            }
            if (fixWidth && (!fixHeight || iWidth > fixWidth)) {
                iHeight = (iWidth = fixWidth) / scale;
            }
            return {width: iWidth, height: iHeight}
        }, addPreview: function (view, w, h) {
            this.views = this.views || [];
            view.css({'position': 'relative', 'overflow': 'hidden', 'width': w, 'height': h});
            this.views.push($('<img />').appendTo(view));
            this.views[this.views.length - 1].viewWidth = Math.round(w)
            this.views[this.views.length - 1].viewHeight = Math.round(h)
            this.views[this.views.length - 1].css('position', 'absolute');
        }, resetPreview: function () {
            if (this.views && this.views.length) {
                var p = this.getPos(), width = this.targetImage.width(), height = this.targetImage.height(), src = this.targetImage.attr('src'), s, scale, pWidth, pHeight, pTop, pLeft, self = this;
                $.each(this.views, function (i, view) {
                    view.attr('src', src);
                    s = self.getSize(p.width, p.height, view.viewWidth, view.viewHeight), scale = s.height / p.height;
                    pHeight = height * scale;
                    pWidth = width * scale;
                    pTop = p.top * scale;
                    pLeft = p.left * scale;
                    view.css({
                        'width': pWidth,
                        'height': pHeight,
                        'top': -pTop,
                        'left': -pLeft,
                        'clip': "rect(" + pTop + "px," + (pLeft + s.width) + "px," + (pTop + s.height) + "px, " + pLeft + "px)"
                    });
                });
            }
        }, destory: function () {
            this._drag.destory();
            this._resize && this._resize.destory();
            this.targetImage.remove();
            this.cropImage.remove();
            imgLoader.destory();
            imageCrop.parent('destory').call(this);
        }
    });
    return imageCrop;
});