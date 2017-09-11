// JavaScript Document

define('product.resume.editMutilResume', 
	'product.resume.editResume',
function(require, exports, module) {

	var $ = module['jquery'],
		Class = require('base.class').Class,
		util = require('base.util'),
		editResume = module['product.resume.editResume'];
		
	var editMutilResume = Class(function(o){
			editMutilResume.parent().call(this, util.merge({//editMutilResume.parent()指向副类型的构造函数
				element: $('#workInfor'),
				trigger: '.edt',//列表项的编辑按钮对应选择器字符串
				addTrigger: '.edit',//添加按钮对应选择器字符串
				delTrigger: '.del',//列表项的删除按钮对应选择器字符串
				normalName: '.workRows',//非编辑状态下对应的字段显示的容器
				editName: '.edit-status-box',//编辑状态下字段编辑对应的form的容器
				submitAddButton: '.saveAddBtn',//保存并添加按钮对应选择器字符串
				isAll: false//作用未知，但【我的作品】模块是设置为true
			}, o));
		}).extend(editResume);//继承editResume类型
	
	editMutilResume.implement({
		_initElements: function(){
			editMutilResume.parent('_initElements').call(this);//调用父类型的_initElements函数
			this._addTrigger = this.getDom(this.get('addTrigger'));//添加按钮$dom
			this._delTrigger = this.getDom(this.get('delTrigger'));//删除按钮$dom
			this._submitAddButton = this.getDom(this.get('submitAddButton'));//保存并添加$dom
			if(this.get('isAll')){
				this._normalItem = this._normal.children();//
			}
		},
		_initEvent: function(){
			editMutilResume.parent('_initEvent').call(this);//调用父类型的_initEvent函数
			var element = this.get('element'),
				self = this;
			//当editMutilResume实例第一次触发添加按钮时候触发初始化init事件
			this.before('_add', function(){
				this._edit.hide();
				if(this._isInit){
					setTimeout(function(){
						self.trigger('init');
						delete self._isInit;
					}, 2);
				}
			});
			element.on('click', this.get('submitAddButton'), function(e){
				e.otherEvent = "submitAdd";
				e.otherSubmitButton = self._submitAddButton;
				self._submit(e);
			});
			element.on('click', this.get('delTrigger'), util.bind(this._delete, this));
			element.on('click', this.get('addTrigger'), util.bind(this._add, this));
		},
		_toggle: function(e){
			var target = $(e.currentTarget), //当前编辑按钮
				index = this._trigger.index(target);//记录编辑按钮的索引(有多个记录就又多个编辑按钮)

			if(e.status){
				this._oldIndex = index;//上一个编辑按钮的索引
				if(this._normalItem){
					this._normalItem.show().eq(index).hide();
					this._edit.show();
				} else {
					this._normal.show();//全部的非编辑状态记录显示
					this._normal.eq(index).hide().after(this._edit.show());//隐藏当前非编辑记录，显示编辑器
				}
			} else {//？？这种情况是在什么情况下执行
				this._edit.hide();
				if(this._oldIndex != undefined){
					if(this._normalItem){
						this._normalItem.eq(this._oldIndex).show();
					} else {
						this._normal.eq(this._oldIndex).show();
					}
				}
			}
			if(e.isCancel) return;
			var self = this;
			this._submitAddButton.hide();
			setTimeout(function(){
				self._addTrigger.show();
				self.trigger('modify', e);
			},1);
		},
		getIndex: function(){
			return this._oldIndex;
		},
		_delete: function(e){
			e.target = $(e.currentTarget);//当前删除按钮
			var index = e.index = this._delTrigger.index(e.target);//当前删除按钮是索引
			this.trigger('delete', e);
		},
		deleteList: function(index){
			if(index == undefined) return;
			if(this._normalItem){
				this._normalItem.eq(index).remove();
			} else {
				this._normal.show().eq(index).remove();
			}
			this._edit.hide();
			this._addTrigger.show();
			this.update();
			delete this._oldIndex;
			delete this._isAdd;
		},
		_handler: function(e){
			delete this._isAdd;//删除添加标识
			e.status = true;//？记录编辑状态，为true
			this._toggle(e);
		},
		_cancel: function(e){
			delete this._isAdd;
			e.isCancel = true;
			this._addTrigger.show();
			editMutilResume.parent('_cancel').call(this, e);
		},
		_add: function(e){
			this.add();
			this.trigger('add', e);
		},
		add: function(){
			if(this._normalItem){
				this._edit.show();
				if(this._oldIndex != undefined)
					this._normalItem.eq(this._oldIndex).show();
			} else {
				this._normal.eq(0).before(this._edit.show());//将编辑form插入到第一条记录的前面
				if(this._oldIndex != undefined)
					this._normal.eq(this._oldIndex).show();//上次编辑的项的非编辑状态信息显示出来
			}
			delete this._oldIndex;
			if(this._isAdd) return;
			this._isAdd = true;//添加操作标识
			this._addTrigger.hide();//隐藏添加按钮
			this._submitAddButton.show();//保存并添加按钮显示
		},
		_submit: function(e){
			editMutilResume.parent('_submit').call(this, e);
		},
		update: function(){
			this._normal = this.getDom(this.get('normalName'));	
			this._trigger = this.getDom(this.get('trigger'));
			this._delTrigger = this.getDom(this.get('delTrigger'));
			if(this.get('isAll')){
				this._normalItem = this._normal.children();
			}
		},
		show: function(){
			if(this._normalItem){
				this._normalItem.show();
			}
			if(this._isAdd && this._addTrigger.is(':hidden')){
				this._addTrigger.show();
			}
			editMutilResume.parent('show').call(this);
		}
	});
	
	return editMutilResume;
	
});