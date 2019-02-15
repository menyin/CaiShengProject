// JavaScript Document
define('jpjob.actions', function(require, exports, module){
	
	var $ = module['jquery'];
	//placeholder组件 html如下
	//<label for="id" class="txtLabel">用户名/手机号/邮箱</label>
	//<input type="text" class="text " id="id" name="username" />
	$.focusblur = function(focusid){
		var focusblurId = $(focusid);
		var defval = focusblurId.val();
		focusblurId.focus(function(){
			var thisval = $(this).val();
			//$(this).addClass('focus').removeClass('textGray');
			$(this).siblings('label.txtLabel').css({'display':'none'});
			$(this).addClass('focus');
			/*
			if(thisval==defval){
				$(this).val("");
			}*/
		});
		focusblurId.blur(function(){
			var thisval = $(this).val();
			if(thisval==""){
			/*  $(this).val(defval);*/
				//$(this).addClass('textGray');
				$(this).siblings('label.txtLabel').css({'display':'block'});
			}
			$(this).removeClass('focus');
		});
	};

	$.focusColor = function(focusid, focusFn, blurFn){
		var focusElemId = $(focusid);
		focusElemId.focus(function(){
			$(this).addClass('focus');
			focusFn && focusFn.call(this);
		}).blur(function(){
			$(this).removeClass('focus');
			blurFn && blurFn.call(this);
		});
	};
	$.setIndex = function(className){
		var zIndex = 1000;
		$('.'+className).each(function() {
			$(this).css('z-index',zIndex--);
		});
	};
	//tab组件  html如下
	/*
	 	<ul id="tabT">
			<li class="cu">首页</li>
			<li >列表页</li>
			<li >详情页</li>
		</ul>
		<div id="tabC">
			<div class="tabCon" style="display: block;">首页内容</div>
			<div class="tabCon">列表页内容</div>
			<div class="tabCon">详情页内容</div>
		</div>
		 <script>
			 $.tab('#tabT','#tabC');
		 </script>
	*/
	$.tab = function(tId,cId){
		$(tId).find('li').click(function(){
			if($(this).hasClass('cu')){
				return false;//do something
			} else {
				var thisIndex = $(this).index();
				$(this).addClass('cu').siblings('li').removeClass('cu');
				$(cId).find('.tabCon').eq(thisIndex).css({'display':'block'}).siblings('.tabCon').css({'display':'none'});
			}
		});
	}

	//placeholder插件，给文本框加水印
	//调用 $('#txtKeyWord').watermark('输入姓名');
	$.fn.watermark = function(txt)
	{
		if(typeof this.attr('watermark') != 'undefined'){
			txt = this.attr('watermark');
		}	
		var getVal = function(el){
			if (el.length == 0) return '';
			if (el[0].type.toLowerCase() == 'a' || el[0].type.toLowerCase() == 'span'){
				return el.html();
			} else {
				return el.val();
			}
		};
	
		this.attr('watermark', txt);
		if (getVal(this) == ''){
			this.val(txt);
			this.addClass('textGray');
		}
		this.focus(function(){
			var el = $(this);
			if (getVal(el) == el.attr('watermark'))
			{
				el.removeClass('textGray');
				el.val('');
			}
		});
		this.blur(function(){
			refreshStatus();
		});
		var self = this;
		var refreshStatus = function(){
			var el = self; //$(this);
			var val = getVal(el);
			var watermark = el.attr('watermark');
			if (val == '' || val == watermark)
			{
				el.val(watermark);
				el.addClass('textGray');
			} else
			{
				el.removeClass('textGray');
			}
		};
		refreshStatus();
	};
	//用于在form提交前清空水印
	$.fn.clearWatermark = function()
	{
		var inputs=$(this).find('input[watermark]');
		for(var i=inputs.length-1;i>=0;i--)
		{
			
			var el = $(inputs[i]);
			if (el.val() == el.attr('watermark'))
			{
				el.val('');
			}    
		}
	};
	//给文本框加水印  方法2
	$.fn.watermark2 = function(txt){
		var getVal = function(el){
				if (el.length == 0) return '';
				if (el[0].type.toLowerCase() == 'a' || el[0].type.toLowerCase() == 'span'){
					return el.html();
				} else {
					return el.val();
				}
			},
			txtLabel = "txtLabel",
			createLabel = function(id, txt){
				return '<label class="' + txtLabel + '" for="'+ id +'" style="display: none;">'+txt+'</label>';
			}, 
			status = 'focus',
			attr = 'watermark',
			label, txt;
	
		return $(this).each(function(){
			var _this = $(this);
			if(txt = _this.attr(attr)){
				var label = _this.parent().find('.' + txtLabel);
				if(!label.length){
					label = $(createLabel(_this.attr('id'), txt)).prependTo(_this.parent());
				}
				if(getVal(_this) === ''){
					_this.removeClass(status);
					label.css('display', 'block');
				} else {
					label.css('display','none');
				}
				_this.on('focus blur', function(e){
					var _this = $(this),
						val = getVal(_this);
	
					if(e.type === status){
						_this.addClass(status);
						label.css('display','none');
					} else {
						_this.removeClass(status);
						if (val){
							label.css('display','none');
						} else {
							label.css('display','block');
						}
					}
				});
			}
		});
	};

	 /*
	 * 计算文本长度
	 */
	/*使用 $('input.selector').setListen({
		 max: 4000, //input输入的最多字数
		 objTotal: $(el).closest('div').next().find('.content'), //显示已输入字数的$dom
		 objLeft: $(el).next('.textareaTxt').find('i'), //显示剩余可输入字数的$dom
		 duration: 200, //监控时间间隔
		 objTotalStyle: 'green',  //统计字数的文本的样式
		 flag:false //无用参数
	 });*/
	(function($){
		var Listener = function(el, opt)
		{
			//默认值
			var _default = {
				max: 4000,
				objTotal: $(el).closest('div').next().find('.content'),
				objLeft: $(el).next('.textareaTxt').find('i'),
				duration: 200,
				objTotalStyle: 'green',
				flag:false
			};
			//初始化参数
			var options = $.extend({}, _default, opt);
			var start = function(){
				//统计函数
				var _length, _oldLen, _lastRn;
				_oldLen = _length = 0;
				this.time = setInterval(function()
				{
					_length = el.val().length;
					if (el == null || typeof el == "undefined")
					{   
						this.time = null;
						return;
					}
					if(!options.flag)
					{
						if (_length == _oldLen)     //防止计时器做无用的计算
						{   
							return;
						}
					}
					if (_length > options.max)
					{
						//避免ie最后两个字符为"\r\n",导致崩溃
						_lastRN = (el.val().substr(options.max - 1, 2) == "\r\n");
						el.val(el.val().substr(0, (_lastRN ? options.max - 1 : options.max)));
					}
					_oldLen = _length = el.val().length;
					//显示已输入字符
					if (options.objTotal.length>0)
					{
						options.objTotal.html(_length).addClass(options.objTotalStyle);
					};
					//显示剩余的输入字符
					if (options.objLeft.length>0)
					{
						options.objLeft.html((options.max - _length) < 0 ? 0 : (options.max - _length)).addClass(options.objTotalStyle);
					}
				}, options.duration);
			};
	
			var stop = function()
			{
				this.time = null;
			};
			if (options.objLeft != null)
			{
				try
				{
					var defaultLength = options.max - $(el).val().length;
					options.objLeft.html(defaultLength).addClass(options.objTotalStyle);
				}
				catch (e) { }
			};
			el.bind('focus', start);
			el.bind('blur', stop);
		};
		$.fn.setListen = function(opt)
		{
			var l = new Listener(this, opt || {});
			this.data('listener', l);
		};
	})($);
	
	//给当前复先框绑定选中事件
	$.fn.bindCheckBox = function(chk,containerName,isNumStat)
	{
		// 2011-04-29  jon
		// 替换为checkBox click绑定匿名函数
		var con=$(containerName);
		$(this).click(function()
		{
			var _self=$(this);
			var checked = _self.attr('checked');
			var inputCheckBoxs=!containerName?$('input:not(:disabled)[type=checkbox][name="' + chk + '"]'):con.find('input:not(:disabled)[type=checkbox][name="' + chk + '"]');
			if(!checked) {
				inputCheckBoxs.removeAttr('checked');
			}else {
				inputCheckBoxs.attr("checked",checked);	
			}
			if(isNumStat){
				var checked_num = !containerName?$('input:not(:disabled)[type=checkbox][name="' + chk + '"]:checked').lenght:con.find('input:not(:disabled)[type=checkbox][name="' + chk + '"]:checked').length;
				$('#emNum').html('已选择'+checked_num+'个职位');
			}
		});
			var c = {
			checkbox: this,
			selector: chk,
			check: function()
			{
				var _self= c;
				var checked = 0, unchecked = 0;
				var checkBoxs=!containerName?$('input[type="checkbox"][name="' + _self.selector + '"]'):con.find('input[type="checkbox"][name="' + _self.selector + '"]');
				for(var i=checkBoxs.length-1;i>=0;i--)
				{
				var el=$(checkBoxs[i]);
				if (el.attr('checked'))
				{
					checked++;
				} else if (el.attr('disabled') != true)
				{
					unchecked++;
				}
				}
				var allCheck = checked > 0 && unchecked == 0;
				_self.checkbox.attr('checked', allCheck);
				if(isNumStat){
					$('#emNum').html('已选择'+checked+'个职位');
				}
			}
		};
		this.data('checkBoxName', c);
		(!containerName?$('input[type="checkbox"][name="' + chk + '"]'):con.find('input[type="checkbox"][name="' + chk + '"]')).live('click', c.check);
	};
	
	return $;
});