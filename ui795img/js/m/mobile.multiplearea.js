/**
 *   jQuery  mobile.multiple.area.js  多选地区控件
 *   Copyright (c)  Jon Gates
 */
(function($){
	var Helper = function(){
		 this.arr = [];
	};
	Helper.prototype.getDescendant=function(a){
		if(typeof a == 'undefined') {
			return;
		}
		var i = 0;
		this.arr = this.arr.concat(a);
		while(i <a.length) {
			arguments.callee.call(this,a[i].subAreas);	
			i++;
		}
	};
	var m = function(element,option) {
		this.$element = null;
		this.options = null;
		this._selectItems = [];
		this._selectItemsName = [];
		this.init(element,option);
	};
	m.Default = {
		html:'<section class="scrBox">'+
			'  <div class="scrBoxCon">'+
			'    <div  class="closeSrc"><i class="jpFntWes"></i></div>'+
			'    <div  class="srcBoxLst">'+
			'      <div class="hd"> <a class="btnsF12 btn3 _clear"  href="javascript:void(0);">清除</a><a  class="btnsF12 btn4 _confirm" href="javascript:void(0);">确定</a>'+
			'        <p class="_title"></p>'+
			'      </div>'+
			'      <div class="bd">'+
			'      </div>'+
			'    </div>'+
			'  </div>'+
			'</section>',
		itemHtml:'<dl>'+
				'        <dt class="pl30"><b class="_categoryName"></b>'+
				'          <p class="_selectedItem"></p>'+
				'          <i class="jpFntWes"></i><i class="jpFntWes">&#xf058;</i></dt>  '+
				'        <dd>'+
				'          <ul class="_itemContainer">'+
				'          </ul>'+
				'        </dd>'+
				'</dl>',		
		selectArea:'',
	 	url:'/api/web/region.api?id=',   //获取下级
		pathUrl:'/api/web/region.api?act=path&id=',// 获取当前地区及父级地区信息url地址
		name:'hiddenName',
		onSelect:null,
		type:'focus',
		limitcount:5,
		title:'请选择地区'
	};
	m.prototype = {
		init:function(element,option) {
			this.options = $.extend({},m.Default, option);
			if (this.options.selectItems){
				this._selectItems=this.options.selectItems.split(',');
			}
			if (this.options.selectItemsName){
				this._selectItemsName=this.options.selectItemsName.split(',');
			}
			this.initContent(element);
			this.initEvent();
		},
		initContent:function(element) {
			// 初始化内容
			this._element = $(element);
			this._content = $(this.options.html).appendTo('body');
			//初始化省
			var firstUrl = this.options.url+1;
			this.loadArea(firstUrl,this.firstLoad.bind(this));
			//绑定省的点击事件
		},
		initEvent:function() {
			// 初始化事件
			var _self = this;
			_self._content.find('._clear').click(function(){
				_self._content.find('._selectedItem').empty();
				var  itmes = _self._content.find('.bd ul li');
				itmes.find('input').removeAttr('checked');
				_self._content.find('.circle').html('&#xf10c;');
				_self._content.find('.check').removeClass('check');
				_self._selectItems = [];
				_self._selectItemsName = []; 
			});
			_self._content.find('.closeSrc').click(function(){
				_self.hiddenControl();
			});
			_self._content.find('._confirm').click(function(){
				_self.hiddenControl();
				if(_self.options.onSelect!=null) {
					_self.options.onSelect(_self.getSelectArea());
				}
			});
			var dHt = $(document).height();
			_self._element.on(_self.options.type,function(){
				_self._content.animate({'width':'100%'},100);
				_self._content.find('.closeSrc').css({'position':'fixed'});
				_self._content.find('.srcBoxLst').css({'min-height':dHt});
				_self._content.find('.closeSrc i').animate({'width':'50px'},{ queue: false, duration: 100 });
			});
		},
		firstLoad:function(data) {
			var self=this;
			$.each(data,function(i,n){
				if($.inArray(n.area_id, self._selectItems) >= 0){
					self._content.find('.bd').append('<dl class="check"><dt class="pl30" firstId="'+n.area_id+'"><input type="checkbox" checked="checked" name="'+self.options.name+'" id="'+self.options.name+n.area_id+'" value="'+n.area_id+'" _name="'+n.area_name+'" class="chb"><div><b class="_categoryName">'+n.area_name+'</b><p class="_selectedItem"></p><i class="jpFntWes downArr"></i></div><i class="jpFntWes circle">&#xf058;</i></dt><dd style="display: none;"></dd></dl>');
				}else{
					self._content.find('.bd').append('<dl><dt class="pl30" firstId="'+n.area_id+'"><input type="checkbox" name="'+self.options.name+'" id="'+self.options.name+n.area_id+'" value="'+n.area_id+'" _name="'+n.area_name+'" class="chb"><div><b class="_categoryName">'+n.area_name+'</b><p class="_selectedItem"></p><i class="jpFntWes downArr"></i></div><i class="jpFntWes circle">&#xf10c;</i></dt><dd style="display: none;"></dd></dl>');
				}
			});
			//绑定下拉
			self._content.find('dt div').on('click',function(){
				var firstId=$(this).parents('dt').attr('firstId');
				var firstObj=$(this).parents('dt');
				var secondObj=firstObj.parent().find('dd');
				if (secondObj.is(":visible")){
					//当前显示状态，清空并隐藏
					secondObj.hide();
				}else{
					//当前关闭状态,加载并显示
					var secondUrl = self.options.url+firstId;
					if (secondObj.html()==''){
						var html=self.loadArea(secondUrl,self.secondLoad.bind(self),this,firstId);
					}
					secondObj.show();
				}
			});
			//绑定下拉
			self._content.find('dt .circle').on('click',function(){
				var firstId=$(this).parents('dt').attr('firstId');
				var name=$("#"+self.options.name+firstId).attr('_name');
				var parent=$(this).parents('dl');
				if(self.checkNum()&&!parent.hasClass('check')) {
					alert("最多选择"+self.options.limitcount+'项');
					return;
				}
				if(!parent.hasClass('check')) {
					parent.addClass('check')
					.find('dt input').attr('checked','checked')
					.parent().find('.circle').html('&#xf058;');
					self.addItem(firstId,name);
				}else {
					parent.removeClass('check')
					.find('dt input').removeAttr('checked')
					.parent().find('.circle').html('&#xf10c;');
					self.delItem(firstId,name);
				}
			});
		},
		secondLoad:function(data,object,parentId) {
			var self=this;
			var html='';
			var downArr='';
			if (data.length>0){
				$(object).parents('dl').find('dd').append('<ul></ul>');
				$.each(data,function(i,n){
					if (n.area_id.length<6) downArr='<i class="jpFntWes downArr"></i>';
					if($.inArray(n.area_id, self._selectItems) >= 0){
						$(object).parents('dl').find('dd ul').append('<li class="subMenu" secondId="'+n.area_id+'"><div class="subArea2"><input type="checkbox" checked="checked" name="'+self.options.name+'" id="'+self.options.name+n.area_id+'" value="'+n.area_id+'" _name="'+n.area_name+'" class="chb"><label for="'+self.options.name+n.area_id+'"><p>'+n.area_name+'</p><i class="jpFntWes circle">&#xf058;</i></label>'+downArr+'</div><ol style="display: none;"></ol></li>');
					}else{
						$(object).parents('dl').find('dd ul').append('<li class="subMenu" secondId="'+n.area_id+'"><div class="subArea2"><input type="checkbox" name="'+self.options.name+'" id="'+self.options.name+n.area_id+'" value="'+n.area_id+'" _name="'+n.area_name+'" class="chb"><label for="'+self.options.name+n.area_id+'"><p>'+n.area_name+'</p><i class="jpFntWes circle">&#xf10c;</i></label>'+downArr+'</div><ol style="display: none;"></ol></li>');
					}
				});
				//绑定下拉
				$(object).parents('dl').find('dd ul li p').on('click',function(){
					var secondId=$(this).parents('li').attr('secondId');
					var thirdObj=$(this).parents('li').find('ol');
					if (thirdObj.is(":visible")){
						//当前显示状态，清空并隐藏
						thirdObj.hide();
					}else{
						//当前关闭状态,加载并显示
						var thirdUrl = self.options.url+secondId;
						if (thirdObj.html()==''){
							var html=self.loadArea(thirdUrl,self.thirdLoad.bind(self),this,secondId);
						}
						thirdObj.show();
					}
				});
				//绑定按钮
				$(object).parents('dl').find('dd ul li i').on('click',function(){
					var secondId=$(this).parents('li').attr('secondId');
					var name=$("#"+self.options.name+secondId).attr('_name');
					var parent=$(this).parents('li');
					if(self.checkNum()&&!parent.hasClass('check')) {
						alert("最多选择"+self.options.limitcount+'项');
						return;
					}
					if(!parent.hasClass('check')) {
						parent.addClass('check')
						.find('input').attr('checked','checked')
						.end().find('.circle:first').html('&#xf058;');	
						self.addItem(secondId,name);
					}else {
						parent.removeClass('check')
						.find('input').removeAttr('checked')
						.end().find('.circle:first').html('&#xf10c;');
						self.delItem(secondId,name);
					}
				});
			}
		},
		thirdLoad:function(data,object,value) {
			var self=this;
			var html='';
			if (data.length>0){
				$(object).parents('li').find('ol').append('<ul></ul>');
				$.each(data,function(i,n){
					if($.inArray(n.area_id, self._selectItems) >= 0){
						$(object).parents('li').find('ol ul').append('<li class="subCountry check" thirdId="'+n.area_id+'"><input type="checkbox" checked="checked" name="'+self.options.name+'" id="'+self.options.name+n.area_id+'" value="'+n.area_id+'" _name="'+n.area_name+'" class="chb"><label><p>'+n.area_name+'</p><i class="jpFntWes circle">&#xf058;</i></label></li>');
					}else{
						$(object).parents('li').find('ol ul').append('<li class="subCountry" thirdId="'+n.area_id+'"><input type="checkbox" name="'+self.options.name+'" id="'+self.options.name+n.area_id+'" value="'+n.area_id+'" _name="'+n.area_name+'" class="chb"><label><p>'+n.area_name+'</p><i class="jpFntWes circle">&#xf10c;</i></label></li>');
					}
				});
				//绑定按钮
				$(object).parents('li').find('ol i').on('click',function(){
					var thirdId=$(this).parents('li').attr('thirdId');
					var name=$("#"+self.options.name+thirdId).attr('_name');
					var parent=$(this).parents('li .subCountry');
					if(self.checkNum()&&!parent.hasClass('check')) {
						alert("最多选择"+self.options.limitcount+'项');
						return;
					}
					if(!parent.hasClass('check')) {
						parent.addClass('check')
						.find('input').attr('checked','checked')
						.end().find('i.jpFntWes').html('&#xf058;');	
						self.addItem(thirdId,name);
					}else {
						parent.removeClass('check')
						.find('input').removeAttr('checked')
						.end().find('i.jpFntWes').html('&#xf10c;');
						self.delItem(thirdId,name);
					}
				});
			}
		},
		hiddenControl:function(){
			this._content.animate({'width':'0'},{ queue: false, duration: 100 });
			this._content.find('.closeSrc').find('i').animate({'width':0},{ queue: false, duration: 100 });
			this._content.find('.closeSrc').css({'position':'absolute'});
		},
		addItem:function(id,name) {
			if(this._selectItems.contains(id)) {
				return;
			}
			this._selectItems.push(id);
			this._selectItemsName.push(name);
		},
		delItem:function(id,name) {
			if(this._selectItems.contains(id)) {
				this._selectItems.remove(id);
			}
			if(this._selectItemsName.contains(name)) {
				this._selectItemsName.remove(name);
			}
		},
		checkNum:function() {
			return (this._selectItems.length+1>this.options.limitcount);
		},
		getSelectArea:function() {
			return {name:this._selectItemsName.join(','),value:this._selectItems.join(',')};
		},
		loadArea:function(url,callback,object,value) {
			$.ajax({
				url: url,
				type: "get",
				dataType: "jsonp",
				success: function(data) {
					if(typeof callback == 'function'){
						callback(data,object,value);
					}
				},
				error:function (XMLHttpRequest, textStatus, errorThrown) {
					if(typeof callback == 'function'){
						callback([],object,value);
					}		
				}
			 });
		},
		getArea:function(id){
			// 获取地区信息
			var l = this.options._area;
			for(var i = 0,len = l.length;i<len;i+=1) {
				if(l[i].area_id ==id) {
					return l[i];
				}
				if(l[i].subAreas) {
					for(var j = 0,subLen = l[i].subAreas.length;j<subLen;j+=1 ) {
						if(l[i].subAreas[j].area_id ==id) {
							return l[i].subAreas[j];
						}
						if(l[i].subAreas[j].subAreas) {
							for(var k,partLen = l[i].subAreas[j].subAreas;k<partLen;k+=1) {
								if(l[i].subAreas[j].subAreas[k].area_id ==id) {
									return l[i].subAreas[j].subAreas[k];
								}								
							}
						}
						
					}		
				}
			}
			return null;
		}
	};

	var  o= $.fn.multiplearea;
	$.fn.multiplearea = function (option) {
		return this.each(function () {
			var $this   = $(this);
			var data    = $this.data('hb.area');
			var options = typeof option == 'object' && option;
			if (!data) {
				$this.data('hb.area', (data = new m(this, options)));
			}
			if (typeof option == 'string') {
				data[option]();
			}
		});
	};
	$.fn.multiplearea.Constructor = m;
	$.fn.multiplearea.noConflict = function () {
		$.fn.multiplearea = o;
		return this;
	};      	
	
})(jQuery);