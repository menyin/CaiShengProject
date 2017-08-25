// JavaScript Document

define('product.jobList.jobPostip', 'widge.popup', function(require, exports, module){
	
	var $ = module['jquery'],
		popup = module['widge.popup'],
		util = require('base.util'),
		Class = require('base.class').Class,
		win = $(window),
		arrow = '<em class="pos_overlay_arrow"></em>';
	
	var jobPostip = Class(function(o){
		jobPostip.parent().call(this, util.merge({
			idName: 'job-pop pos_overlay',
			trigger: $('.des_title'),
			className: 'jobPostip',
			padding: 20, 
			width: 400,
			height: 'auto',
			delay: 60
		}, o));
	}).extend(popup);
	
	jobPostip.implement({
		init: function(){
			jobPostip.parent('init').call(this);
			var element = this.get('element');
			this.set('arrow', $(arrow).appendTo(element));
			this._bindBaseElement();
			this._blurHide(this.get('trigger'));
		},
		_bindBaseElement: function(){
			this.set('align', {
				selfXY: [0, '50%'],
				baseElement: this.get('trigger'),		
                baseXY: ['100%+' + this.get('padding') , '50%']
			}, {override: true});
		},
		setPosition: function(){
			var align = this.get('align'),
				trigger = this.get('trigger'),
				element = this.get('element');
				
			this._bindBaseElement();
				
			var scrollTop = win.scrollTop(),
				winHeight = win.height(),
				eH = element.outerHeight(),
				triggerH = trigger.outerHeight(),
				triggerY = trigger.offset().top + triggerH / 2,
				topH = triggerY - scrollTop,
				avaiHeight = (winHeight - eH) / 2,
				posY = topH - avaiHeight;
			if(posY < triggerH){
				posY = triggerH;
			} else if(posY > eH - triggerH){
				posY = eH - triggerH;
			}
			this._bindBaseElement();
			align.selfXY[1] = posY;
			
			jobPostip.parent('setPosition').call(this, align);
			this._resetArrowPos();
		},
		setContent: function(html){
			if(this._content) this._content.remove();
			this._content = $('<div>' + html + '</div>').appendTo(this.get('element'));
		},
		_resetArrowPos: function(){
			var trigger = this.get('trigger'),
				element = this.get('element'),
				arrow = this.get('arrow'),
				triggerY = trigger.offset().top,
				elementY = element.offset().top,
				triggerH = trigger.outerHeight(),
				arrowH = arrow.outerHeight(),
				posX = -(this.get('padding')),
				posY = triggerY - elementY - (arrowH - triggerH);
			arrow.css({'left': posX, 'top': posY});
		},
		show: function(){
			this._hideTimer && clearTimeout(this._hideTimer);
			jobPostip.parent('show').call(this);
		},
		hide: function(){
			if(this.get('visible')){
				var self = this;
				this._hideTimer && clearTimeout(this._hideTimer);
				this._hideTimer = setTimeout(function(){
					jobPostip.parent('hide').call(self);
				}, this.get('delay'));
			}
		},
		destory: function(){
			delete this._hideTimer;
			jobPostip.parent('destory').call(this);
		}
	});
	
	return jobPostip;
});