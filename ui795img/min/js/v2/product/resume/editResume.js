// JavaScript Document

define('product.resume.editResume', 
	'widge.validator.form',
function(require, exports, module) {

	var $ = module['jquery'],
		shape = module['base.shape'],
		util = require('base.util'),
		validator = module['widge.validator.form'],
		inputElement = "[name={name}]",
		labelElement = "[data-for={name}]",
		nameReg = /\{name\}/;
	//editResume类型是通过继承Shape类型的类型，并且editResume类型可以传递o参数，该参数是一个包含许多自定义的扩展属性的对象
	var editResume = shape(function(o){//此处shape()只是shape模块暴露出来的工厂，shape()执行后得到一个继承Shape类型的类型
            //此处调用弗雷构造函数(即Shape的构造函数)，并传递属性参数
			editResume.parent().call(this, util.merge({//这些元素初始化属性都在实例的attrs存储,并可使用editResume实例的get和set方法//此时editResume.parent()指向父类型Shape
				/*以下相当于为当前实例设置默认值*/
				element: $('#baseinfor'),//相当于该模块的顶级元素
				trigger: '.edit', //存储dom对应的选择器字符串
				formName: 'form', //编辑状态下字段编辑对应的form
				normalName: '.res-infor',//非编辑状态下对应的字段显示的容器
				editName: '.edit-status-box', //编辑状态下字段编辑对应的form的容器
				validators: null,//存储生产验证器的开发者自定义的数据
				classes: {//规定验证器成功、错误、警告时目标验证元素和提示层的样式
					successLabel: 'success-msg',
					successText: 'success-text',
					errorLabel: 'error-msg',
					errorText: 'error-text',
					warningLabel: 'warning-msg',
					warningText: 'warning-text'
				},
				remoteInputClass: false,
				submitButton: '.saveBtn',//退出保存按钮dom的选择器
				cancelButton: '.cancelBtn'//退出保存按钮dom的选择器
			}, o));
			this.init();//初始化
		});
	
	editResume.implement({
		init: function(){
			this._initElements();
			this._isInit = true;
			this._initValidator();
			this._initEvent();
		},
		/**
		 * 存储相关的$dom
		 * @private
		 */
		_initElements: function(){
			this._trigger = this.getDom(this.get('trigger'));//get函数是从attribute模块继承，是用于从attrs对象中获取属性值
			this._normal = this.getDom(this.get('normalName'));
			this._edit = this.getDom(this.get('editName'));
			this._submitButton = this.getDom(this.get('submitButton')),
			this._cancelButton = this.getDom(this.get('cancelButton'));
		},
		/**
		 * 验证相关，暂时不了解
		 * @private
		 */
		_initValidator: function(){
			var v = this.get('validators');
			if(v){
				if(util.type.isObject(v)){
					this._validator = [new validator($.extend(v, {
						element: this.getDom(this.get('formName'))
					}))];
					check(0, this._validator[0]);
				} else if(util.type.isArray(v)){
					this._validator = [];
					for(var i = 0, len = v.length; i < len; i++){
						this._validator.push(new validator(
							$.extend(v[i], {
								element: this.getDom(this.get('formName')).eq(i)
							}
						)));
						check(i, this._validator[i]);
					}
				}	
			}
			var self = this;

			/**
			 * 利用验证器事件处理来触发当前editResume实例的相关事件
			 * @param index 验证器的索引(在editResume._validator数组里的索引)
			 * @param val 验证器
			 */
			function check(index, val){
				val.on('focus', function(e){
					e.index = index;
					self.trigger('focus',e);
				});
				val.on('blur', function(e){
					e.index = index;
					self.trigger('blur',e);
				});
				val.on('invalid', function(e){
					e.index = index;
					self._invalid(e);
				});
				val.on('remote', function(e){
					e.index = index;
					self._remote(e);
				});
				val.on('pass', function(e){
					e.index = index;
					self._pass(e);	
				});
				val.on('clear', function(e){
					e.index = index;
					self._clear(e);
				});
				val.on('clearItem', function(e){
					self._clearItem(e);
				});
			}
		},
		/**
		 * 初始化事件
		 * @private
		 */
		_initEvent: function(){
			var element = this.get('element'),
				self = this;
			setTimeout(function(){
				self.trigger('render');
			}, 1);
			//此部分拦截功能待研究
			this.before('_handler', function(){
				if(this._isInit){
					var self = this;
					setTimeout(function(){
						self.trigger('init');
						delete self._isInit;
					}, 2);
				}
			});
			//以下基本事件绑定都是在顶级元素下做代理绑定
			element.on('click', this.get('trigger'), util.bind(this._handler, this));//编辑按钮事件绑定
			element.on('click', this.get('submitButton'), util.bind(this._submit, this));//提交按钮事件绑定
			element.on('click', this.get('cancelButton'), util.bind(this._cancel, this));//撤销按钮事件绑定
			//绑定后，在此事件处理函数里的this指向具体的editResume实例，e即触发事件对象数组（可以包含util.bind函数的一二参数以外的参数）
		},

		/**
		 * editResume实例里验证器验证失败的处理
		 * @param e 事件对象
		 * @private
		 */
		_invalid: function(e){
			var classes = this.get('classes'),
				successText = e.successTextClass = classes.successText,
				successLabel = e.successLabelClass = classes.successLabel,
				warningText = e.warningTextClass = classes.warningText,
				warningLabel = e.warningLabelClass = classes.warningLabel,
				errorText = e.errorTextClass = classes.errorText,
				errorLabel = e.errorLabelClass = classes.errorLabel;
			e.target.removeClass(successText + ' ' + warningText).addClass(errorText);//为目标验证表单元素添加错误样式
			e.label.removeClass(successLabel + ' ' + warningLabel).addClass(errorLabel);//为目标验证表单元素的提示层添加错误样式
			e.errorLabelClass = errorLabel;
			e.errorTextClass = errorText;
			
			this.trigger('invalid', e);	
		},
		/**
		 * editResume实例里验证器验证成功的处理
		 * @param e 事件对象
		 * @private
		 */
		_pass: function(e){
			e.target.removeClass(this.allClass('text'));
			e.label.removeClass(this.allClass('label'));
			
			var classes = this.get('classes');
			e.successTextClass = classes.successText,
			e.successLabelClass = classes.successLabel,
			e.warningTextClass = classes.warningText,
			e.warningLabelClass = classes.warningLabel,
			e.errorTextClass = classes.errorText,
			e.errorLabelClass = classes.errorLabel;
			
			this.trigger('pass', e);
		},
		/**
		 * editResume实例里验证器验证未知操作的处理？？待研究
		 * @param e 事件对象
		 * @private
		 */
		_remote: function(e){
			var classes = this.get('classes'),
				successText = e.successTextClass = classes.successText,
				successLabel = e.successLabelClass = classes.successLabel,
				warningText = e.warningTextClass = classes.warningText,
				warningLabel = e.warningLabelClass = classes.warningLabel,
				errorText = e.errorTextClass = classes.errorText,
				errorLabel = e.errorLabelClass = classes.errorLabel;
			
			if(this.get('remoteInputClass')){
				e.target.removeClass(successText + ' ' + errorText).addClass(warningText);
				e.label.removeClass(successLabel + ' ' + errorLabel).addClass(warningLabel)
			}
			this.trigger('remote', e);
		},
		/**
		 * editResume实例里验证器验证清除事件操作的处理？？待研究
		 * @param e 事件对象
		 * @private
		 */
		_clear: function(e){
			e.allElements.removeClass(this.allClass('text'));
			e.hideElements.removeClass(this.allClass('label'));
			e.showElements.removeClass(this.allClass('label'));
		},
		/**
		 * editResume实例里验证器验证清除事件操作的处理？？待研究
		 * @param e 事件对象
		 * @private
		 */
		_clearItem: function(e){
			e.label.removeClass(this.allClass('label'));
			e.element.removeClass(this.allClass('text'));
		},
		/**
		 * 编辑按钮按下后的处理句柄
		 * @param e 事件对象
		 * @private
		 */
		_handler: function(e){
			if(this._edit.is(':hidden')){
				e.status = true;
				this._toggle(e);
				var self = this;
				setTimeout(function(){
					self._trigger.hide();
					self.trigger('modify', e);
				},1);
			}
		},
		/**
		 * 保存按钮按下后的处理句柄
		 * @param e 事件对象
		 * @private
		 */
		_submit: function(e){
			debugger;
			this.trigger('submit', e);//trigger会去event.js模块定义的事件队列里获取submit事件进行触发
		},
		/**
		 * 取消编辑按钮按下后的处理句柄
		 * @param e 事件对象
		 * @private
		 */
		_cancel: function(e){
			var target = $(e.currentTarget);
			e.index = this._cancelButton.index(target);
			this._toggle(e);
			this.resetForm();
			this.trigger('cancel', e);
		},
		/**
		 * ？当验证不通过时，根据验证器记录的旧值重置表单元素
		 * @param f {boolean}
		 */
		resetForm: function(f){
			if(this._validator){
				for(var i=0, len=this._validator.length; i<len; i++){
					this._validator[i].resetForm(f);
				}
			}
		},

		_toggle: function(e){
			if(e.status){
				this._trigger.hide();
				this.hide();
			} else {
				this._trigger.show();
				this.show();
			}
		},
		/**
		 * 切换到非编辑状态做的一些显隐操作
		 */
		show: function(){
			if(this._trigger.is(':hidden')){
				this._trigger.show();
			}
			this._edit.hide();
			this._normal.show();
		},
		/**
		 * 切换到编辑状态做的一些显隐操作
		 */
		hide: function(){
			this._edit.show();
			this._normal.hide();
		},

		/**
		 * 根据验证角色名查找相关验证样式
		 * @param name {'label'|'text'}验证角色名(label是提示层，text是目标验证元素)
		 * @returns {string} 所有相关class用空格组成的字符串
		 */
		allClass: function(name){
			var classes = this.get('classes'),
				success = classes['success' + ucFirst(name)],
				warning = classes['warning' + ucFirst(name)],
				error = classes['error' + ucFirst(name)];
			return success + ' ' + warning + ' ' + error;
		},
		/**
		 * 在该类型（editResume）实例的顶级元素下寻找指定名称的$dom
		 * @param name 查找元素的name
		 * @param index 无用参数
		 * @returns {*|jQuery|HTMLElement}
		 */
		getElement: function(name, index){
			return $(inputElement.replace(nameReg, name), this.get('element'));
		},
		getLabel: function(name, index){
			return $(labelElement.replace(nameReg, name), this.get('element'));
		},
		/**
		 *
		 * @param name
		 * @param index
		 * @returns {*|jQuery|HTMLElement}
		 */
		getDom: function(name, index){
			return $(name, this.get('element'));
		},
		/**
		 * 获取指定索引的验证器
		 * @param index
		 * @returns {*}
		 */
		getValidator: function(index){
			return this._validator[index || 0];
		},
		/**
		 * 判断是否处于编辑状态
		 * @returns {boolean}
		 */
		isEditor: function(){
			return this._edit.is(':visible');
		}
	});
	/**
	 * 首字母大写处理
	 * @param str
	 * @returns {string}
	 */
	function ucFirst(str) {
		return str.charAt(0).toUpperCase() + str.substring(1);
	}
	
	return editResume;
	
});