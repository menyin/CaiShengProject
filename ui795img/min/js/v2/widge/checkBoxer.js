﻿// JavaScript Document
/**
 * 选框组件 支持单选和多选
 */
define('widge.checkBoxer', function(require, exports, module){

	var shape = module['base.shape'],
		$ = module['jquery'],
		util = require('base.util'),
		name = 'ui_checkbox',
		attrName = 'data-name',
		valueName = 'data-value',
		statusName = 'data-status',
		disabledName = 'data-disabled',
		uid = 0,
		template = '<input name="{name}" type="{type}" value="{value}" {status} {disabled}/>',
		doc = document;
	
	var checkBoxer = shape(function(o){
		/*html初始化*/
		/*<label class="pos" data-status="false" data-disabled="false" data-value="08253d2901699" data-name="pos"><input style="display: none;" name="pos" value="08253d2901699" type="checkbox"></label>*/
		//data-status="false"  初始化选中与否，当data-disabled或data-disabled
		//data-disabled="true" 初始化选框不能操作并且处于非选中状态
		//data-value="false" 初始化选框对应的值
		//data-name="false"初始化选框对应的表单name
		/*可初始化事件*/
		//select、selectAll、maxLimit

		checkBoxer.parent().call(this, util.merge({
			element: $('.pos'),  //要渲染为选框的doms  如：<label class="pos check-default ptCheck" data-value="{$l[_jid]}" data-name="pos"></label>
			multiple: true, //整个组选框是否支持多选
			maxLength: 999, //能添加选框的最大个数，如在渲染1000个选框时会触发maxLimit事件
			className: 'pos_yes', //选中选框时的样式
			hoverClassName: null, //选框hover时的样式
			disabledClassName: null,//选框data-disabled=true并且data-status="false"时的样式，即使当不能选框不能用并且未选中时的样式
			disabledSelClassName: null,//选框data-disabled=true并且data-status="true"时的样式，即使当不能选框不能用并且选中时的样式
			isDocClick: true//作用未知，似乎无用
		}, o));
		this.init();
	});
	
	checkBoxer.implement({
		init: function(){
			this._status = [];
			this._param = [];
			this._disabled = [];
			this._initConfig();
			this._initElements();
			this._initEvents();
			this.get('isDocClick') && checkBoxer.allCheck.push(this);
		},
		_initConfig: function(){
			var mutil = this.get('multiple');
			if(!mutil){
				this.set('maxLength', 1);
			}
			this.set('type', getType(mutil));
		},
		_initElements: function(){
			var element = this.get('element'),
				name = this.get('name');
				
			initTemplate.call(this, element);
		},
		isHoverClass: function(){
			return !!this.get('hoverClassName');
		},
		_initEvents: function(){
			var items = this.get('element'),
				itemsName = getNodeName(items),
				container = this.get('container') || items.parent() || $(doc),
				self = this;
			if(this.isHoverClass()){
				container.on('mouseenter', itemsName, function(e){
					var index = items.index($(this));
					self.hover(index, true);
				}).
				on('mouseleave', itemsName, function(e){
					var index = items.index($(this));
					self.hover(index, false);
				});
			}
		},
		hover: function(index, b){
			if(!this.isHoverClass)
				return;
				
			if(this._disabled[index]){
				return;
			}
			var items = this.get('element'),
				item = items.eq(index),
				status = this._status[index];
				hoverClass = this.get('hoverClassName');

			items.removeClass(hoverClass);
			if(!status){
				b ? item.addClass(hoverClass) : item.removeClass(hoverClass);
			}
		},
		/**
		 * 设置指定选项的状态
		 * @param index {number} 选项的索引，从0开始
		 * @param isStatus {boolean} 状态
		 * @param isEvent 是否触发select事件
		 */
		setStatus: function(index, isStatus, isEvent){
			var e = {},
				items = this.get('element'),
				item = e.trigger = items.eq(index),
				checkbox = e.target = this.get('children').eq(index),
				status = true;
			
			e.index = index;
			if(this._status[index] === undefined || this._disabled[index]){
				return;
			}
			if(this.get('multiple')){
				status = this._status[index];
				status = isStatus != undefined ? isStatus : !status;
				e.status = status;
			} else {
				e.oldIndex = this._oldIndex != undefined ? this._oldIndex : -1;
				this._oldIndex = index;
			}
			this.render(index, status);
			isEvent && this.trigger('select', e);
		},
		render: function(index, status){
			if(this.get('multiple')){
				renderCheckbox.call(this, index, status);
			} else {
				renderRadio.call(this, index, status);
			}
		},
		isChecked: function(index){
			index === undefined && (index = 0);
			return this._status[index];
		},
		isDisabled: function(index){
			index === undefined && (index = 0);
			return this._disabled[index];
		},
		isAll: function(count){
			var status = this._status.slice(count || 0, this._status.length),
				ret = util.array.filter(status, function(val){
					return val === true;
				}, this);
			return ret.length >= status.length;
		},
		/**
		 *当指定选框设置status为true则不能再进行选择
		 * @param index
		 * @param status
		 * @param fn 自定义setDisabled的相关操作 函数参数分别是组件this，当前选框index，当前选框，相关的样式数组
		 */
		setDisabled: function(index, status, fn){
			this._disabled[index] = status;
			var items = this.get('element'),
				item = items.eq(index),
				classNames = [
					this.get('disabledClassName'), 
					this.get('disabledSelClassName'), 
					this.get('hoverClassName'),
					this.get('className')
				],
				elStatus;
			
			if(!util.type.isFunction(fn)){
				if(elStatus = this._status[index]){
					renderClass(item, status, classNames[1]);
				} else {
					renderClass(item, status, classNames[0]);
				}
				item.attr(disabledName, status);
				this.get('children').eq(index).prop('disabled', status);
				this.render(index, elStatus);
			} else {
				fn.call(this, index, item, classNames); 
			}
		},
		allDisabled: function(status, fn){
			this.all(status, function(index){
				this.setDisabled(index, status, fn);
			});
		},
		/**
		 * 设置所有选项状态
		 * @param status {boolean} 是否选中
		 * @param fn 回调
		 * @remark
		 *  如果fn存在，回调参数包含当前选项，和索引参数，此时不执行设置选中操作，意味着status无用，要自己根据回调参数在回调里做自己的处理
		 *  此函数会触发selectAll事件
		 */
		all: function(status, fn){
			if(status === undefined){
				status = true;
			}
			var element = this.get('element');
			element.each(util.bind(function(index){
				index = this.get('multiple') ? index : null;
				fn ? fn.call(this, index) : this.setStatus(index, status);
			}, this));
			
			this.trigger('selectAll', {
				trigger: element,
				target: this.get('children'),
				index: 'all',
				status: status
			});
		},
		isMaxLength: function(){
			return this.getLength() < this.get('maxLength');
		},
		getLength: function(){
			return this.get('children').filter(':checked').length;
		},
		destory: function(){
			delete this._index;
			delete this._status;
			destory(this, checkBoxer.allCheck);
			checkBoxer.parent('destory').call(this);
		},
		getLabel: function(){
			var ret = util.array.filter(this._param, function(val, index){
					return $.trim(val.value) != ""; 
				}),
				label = [];
			$.each(ret, function(index, val){
				label.push(val.label);
			});
			return label.join(',');
		},
		getValue: function(b){
			var result = normalizeValue.call(this, b);
			if(b){
				return util.string.unparam(result);
			}
			return result;
		},
		getParam: function(name){
			return this.getValue(true)[name] || undefined;
		},
		getElement: function(){
			return this.get('element');
		}
	});
	checkBoxer.allCheck = [];
	
	function destory(target, array){
		for(var i=0; i < array.length; i++) {
            if (target === array[i]) {
                array.splice(i, 1);
                return array;
            }
        }
	}
	function normalizeValue(b){
		var param = this._param,
			ret = util.array.filter(param, function(val, index){
				return $.trim(val.value) != ""; 
			}), 
			result = [],
			b = b ? '[]' : '';
		$(ret).each(function(index, val){
			result.push(val.name + b + '=' + val.value);
			result.push('&');
		});
		result.pop();
		return result.join('');
	}
	function renderCheckbox(index, status){
		var items = this.get('element'),
			item = items.eq(index),
			checkbox = this.get('children').eq(index),
			className = this.get('className');
			
		if(!this.isMaxLength() && status){
			this.trigger('maxLimit', {
				trigger: item,
				target: checkbox,
				index: index
			});
			return;
		}
		
		renderClass(item, status, className);
		item.attr(statusName, status);
		checkbox.prop('checked', status);
		this._status[index] = status;
		this._param[index] = {
			name: item.attr(attrName),
			value: status ? checkbox.val() : '',
			label: status ? item.text() : ''
		};
	}
	function renderRadio(index, status){
		var items = this.get('element'),
			checkboxs = this.get('children'),
			className = this.get('className'),
			self = this;
		
		$(this._status).each(function(index, val){
			val = false;
			self._param[index] = {
				name: items.eq(index).attr(attrName),
				value: ''
			};
		});
		
		items.removeClass(className);
		checkboxs.prop('checked', false);
		
		if(index != undefined){
			var item = items.eq(index),
				checkbox = checkboxs.eq(index);
				
			renderClass(item, status, className);
			item.attr(statusName, status);
			checkbox.prop('checked', status);
			this._status[index] = status;
			this._param[index] = {
				name: item.attr(attrName),
				value: checkbox.val()
			};
		}
	}
	
	function renderClass(item, status, className){
		if(status){
			item.addClass(className);	
		} else {
			item.removeClass(className);
		}
	}
	function initTemplate(element){
		var self = this, 
			className = this.get('className'),
			disabledClassName = this.get('disabledClassName'),
			disabledSelClassName = this.get('disabledSelClassName'),
			index = 0,
			i = uid++,
			type = this.get('type'),
			html;
			
		element.each(function(id){
			var _this = $(this),
				value = _this.attr(valueName) || id,
				data = {
					name: _this.attr(attrName) || name + i,
					type: type,
					value: value,
					status: '',
					disabled: ''
				},
				undef,
				s =  _this.attr(statusName) && _this.attr(statusName) === "true",
				d =  _this.attr(disabledName) && _this.attr(disabledName) === "true";
				
			if(s){
				if(index < self.get('maxLength')){
					data.status = 'checked';
					self._status[id] = s;
					self._param[id] = {
						name: _this.attr(attrName),
						value: value
					};
					if(d){
						data.disabled = "disabled";
						renderClass(_this, false, disabledClassName);
						renderClass(_this, true, disabledSelClassName);
					} else {
						renderClass(_this, true, className);
					}
					
					index++;
				} else {
					undef = true;
				}
			} 
			if(!s || undef) {
				self._status[id] = false;
				self._param[id] = {
					name: _this.attr(attrName),
					value: ''
				};
				_this.attr(statusName, 'false');
				
				if(d){
					renderClass(_this, false, disabledSelClassName);
					renderClass(_this, true, disabledClassName);
				} else {
					renderClass(_this, false, className);
				}
			}
			
			_this.attr(disabledName, d);
			self._disabled[id] = d;
			
			html = util.string.replace(template, data);
			$(html).appendTo(_this).hide();
		});
		this.set('children', element.children('input'));
	}
	
	function getNodeName(items){
		return items[0] && items[0].nodeName.toLowerCase();
	}
	function getType(mutil){
		return mutil ? 'checkbox' : 'radio';
	}
	function toggleCheckBoxs(e){
		$(checkBoxer.allCheck).each(function(index, item) {
			var element = item.get('element');
			element.each(function(i){
				var el = $(this)[0];
				if (el === e.target || $.contains(el, e.target)){
					e.preventDefault();
					item.setStatus(i, null, true);
				}
			});
		});
	}
	
	$(doc).on('click', function(e){
		toggleCheckBoxs(e);		
	});
	
	return checkBoxer;
});
 