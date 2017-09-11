// JavaScript Document

define('product.resume.editMutilResume', 
	'product.resume.editResume',
function(require, exports, module) {

	var $ = module['jquery'],
		Class = require('base.class').Class,
		util = require('base.util'),
		editResume = module['product.resume.editResume'];
		
	var editMutilResume = Class(function(o){
			editMutilResume.parent().call(this, util.merge({//editMutilResume.parent()ָ�����͵Ĺ��캯��
				element: $('#workInfor'),
				trigger: '.edt',//�б���ı༭��ť��Ӧѡ�����ַ���
				addTrigger: '.edit',//��Ӱ�ť��Ӧѡ�����ַ���
				delTrigger: '.del',//�б����ɾ����ť��Ӧѡ�����ַ���
				normalName: '.workRows',//�Ǳ༭״̬�¶�Ӧ���ֶ���ʾ������
				editName: '.edit-status-box',//�༭״̬���ֶα༭��Ӧ��form������
				submitAddButton: '.saveAddBtn',//���沢��Ӱ�ť��Ӧѡ�����ַ���
				isAll: false//����δ֪�������ҵ���Ʒ��ģ��������Ϊtrue
			}, o));
		}).extend(editResume);//�̳�editResume����
	
	editMutilResume.implement({
		_initElements: function(){
			editMutilResume.parent('_initElements').call(this);//���ø����͵�_initElements����
			this._addTrigger = this.getDom(this.get('addTrigger'));//��Ӱ�ť$dom
			this._delTrigger = this.getDom(this.get('delTrigger'));//ɾ����ť$dom
			this._submitAddButton = this.getDom(this.get('submitAddButton'));//���沢���$dom
			if(this.get('isAll')){
				this._normalItem = this._normal.children();//
			}
		},
		_initEvent: function(){
			editMutilResume.parent('_initEvent').call(this);//���ø����͵�_initEvent����
			var element = this.get('element'),
				self = this;
			//��editMutilResumeʵ����һ�δ�����Ӱ�ťʱ�򴥷���ʼ��init�¼�
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
			var target = $(e.currentTarget), //��ǰ�༭��ť
				index = this._trigger.index(target);//��¼�༭��ť������(�ж����¼���ֶ���༭��ť)

			if(e.status){
				this._oldIndex = index;//��һ���༭��ť������
				if(this._normalItem){
					this._normalItem.show().eq(index).hide();
					this._edit.show();
				} else {
					this._normal.show();//ȫ���ķǱ༭״̬��¼��ʾ
					this._normal.eq(index).hide().after(this._edit.show());//���ص�ǰ�Ǳ༭��¼����ʾ�༭��
				}
			} else {//���������������ʲô�����ִ��
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
			e.target = $(e.currentTarget);//��ǰɾ����ť
			var index = e.index = this._delTrigger.index(e.target);//��ǰɾ����ť������
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
			delete this._isAdd;//ɾ����ӱ�ʶ
			e.status = true;//����¼�༭״̬��Ϊtrue
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
				this._normal.eq(0).before(this._edit.show());//���༭form���뵽��һ����¼��ǰ��
				if(this._oldIndex != undefined)
					this._normal.eq(this._oldIndex).show();//�ϴα༭����ķǱ༭״̬��Ϣ��ʾ����
			}
			delete this._oldIndex;
			if(this._isAdd) return;
			this._isAdd = true;//��Ӳ�����ʶ
			this._addTrigger.hide();//������Ӱ�ť
			this._submitAddButton.show();//���沢��Ӱ�ť��ʾ
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