// JavaScript Document

define('product.jobList.jobPostipGroup', 'product.jobList.jobPostip', function(require, exports, module){
	
	var $ = module['jquery'],
		jobPostip = module['product.jobList.jobPostip'],
		shape = module['base.shape'],
		util = require('base.util'),
		doc = document;
		
	var jobPostipGroup = shape(function(o){
			this._config = util.merge({
				container: $('#job_list_table'),
				element: '.pos_overlay',
				arrow: '.pos_overlay_arrow',
				trigger: '.des_title',
				test:'firm-l',
				className: 'jobPostip',
				padding: 20, 
				width: 400,
				height: 'auto',
				delay: 10,
				showDelay: 10
			}, o);
			jobPostipGroup.parent().call(this, this._config);
			this.init();
		});
	
	jobPostipGroup.implement({
		init: function(){
			var self = this,
				container = this.get('container');
				
			this._element = container.find(this.get('element')),
			this._trigger = container.find(this.get('trigger'));
			delete this._config.element;
			delete this._config.trigger;
			delete this._config.arrow;
			this._jobPostip = new jobPostip(this._config);
			delete this._config;
			this._initEvents();
		},
		_initEvents: function(){
			var self = this, 
				container = this.get('container'),
				trigger = this._trigger,
				element = this._element,
				timer;
			
			container.on('mouseenter', this.get('trigger'), switchContent)
			.on('mouseleave', this.get('trigger'), leaveHandle);
			
			$(doc).on('mouseenter', this.get('element'), enterHandle)
			.on('mouseleave', this.get('element'), leaveHandle);
			
			function switchContent(e){
				var index = self._trigger.index($(e.currentTarget));
				self._jobPostip.set('trigger', $(e.currentTarget));
				timer = setTimeout(function(){
					self._jobPostip.setContent(self._element.eq(index).html());
					self._jobPostip.setPosition();
					enterHandle();
				}, self.get('showDelay'));
			}
			function enterHandle(){
				self._jobPostip.show();
			}
			function leaveHandle(){
				clearTimeout(timer);
				self._jobPostip.hide();
			}
		},
		destory: function(){
			delete this._items;
			delete this._element;
			delete this._trigger;
			jobPostipGroup.parent('destory').call(this);
		}
	});
	
	function getIndex(trigger, element, target){
		var index = trigger.index(target);
		if(index < 0){
			index = element.index(target);
		}
		return index;
	}
	
	return jobPostipGroup;
});