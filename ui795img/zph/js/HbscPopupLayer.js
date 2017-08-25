Function.prototype.hbscBinding = function () {
    if (arguments.length < 2 && typeof arguments[0] == "undefined") return this;
    var __method = this, args = jQuery.makeArray(arguments), object = args.shift();
    return function () {
        return __method.apply(object, args.concat(jQuery.makeArray(arguments)));
    }
}

var hbscClass = function (subclass) {
    subclass.setOptions = function (options) {
        this.options = jQuery.extend({}, this.options, options);
        for (var key in options) {
            if (/^on[A-Z][A-Za-z]*$/.test(key)) {
                $(this).bind(key, options[key]);
            }
        }
    }
    var hbscFn = function () {
        if (subclass._init && typeof subclass._init == 'function') {
            this._init.apply(this, arguments);
        }
    }
    if (typeof subclass == 'object') {
        hbscFn.prototype = subclass;
    }
    return hbscFn;
}

var hbscPopupLayer = new hbscClass({
    options: {
        trigger: null,                            //触发的元素或id,必填参数
        popupBlk: null,                           //弹出内容层元素或id,必填参数
        closeBtn: null,                           //关闭弹出层的元素或id
        popupLayerClass: "popupLayer",            //弹出层容器的class名称
        eventType: "click",                       //触发事件的类型
        useFx: false,                             //是否使用特效
        useOverlay: false,                        //是否使用全局遮罩
        onBeforeStart: function () { }            //自定义事件
    },
    _init: function (options) {
        this.setOptions(options);                //载入设置(ws 修改)
        this.isDoPopup = this.isOverlay = true;   //定义一些开关
        this.popupLayer = $(document.createElement("div")).addClass(this.options.popupLayerClass);     //初始化最外层容器
        this.trigger = $(this.options.trigger);                         //把触发元素封装成实例的一个属性，方便使用及理解
        this.popupBlk = $(this.options.popupBlk);                       //把弹出内容层元素封装成实例的一个属性
        this.closeBtn = $(this.options.closeBtn);                       //把关闭按钮素封装成实例的一个属性
        $(this).trigger("onBeforeStart");                               //执行自定义事件。
        this._construct()                                               //通过弹出内容层，构造弹出层，即为其添加外层容器及底层iframe
        this.trigger.bind(this.options.eventType, function () {            //给触发元素绑定触发事件
            this.options.useOverlay ? this._loadOverlay() : null;               //如果使用遮罩则加载遮罩元素
            (this.isOverlay && this.options.useOverlay) ? this.overlay.show() : null;
            if (this.isDoPopup && (this.popupLayer.css("display") == "none")) {
                this.options.useFx ? this.doEffects("open") : this.popupLayer.show();
            }
        } .hbscBinding(this));
        this.options.closeBtn ? this.closeBtn.bind("click", this.close.hbscBinding(this)) : null;   //如果有关闭按钮，则给关闭按钮绑定关闭事件
    },
    _construct: function () {                  //构造弹出层
        this.popupBlk.show();
		var boxHeight = this.popupBlk.height();
		var boxWidth = this.popupBlk.width();
		var marginTopValue;
		if (parseInt(boxHeight) > 300)
		{
			marginTopValue = 300;
		}
        else
		{
			marginTopValue = boxHeight / 2;
		}
        var marginLeftValue = boxWidth / 2;
		this.popupLayer.append(this.popupBlk.css({ opacity: 1 })).appendTo($(document.body)).attr("style","z-index:9990;left:50%;top:50%;position:fixed!important;position:absolute;_top:expression(eval(document.compatMode && document.compatMode=='CSS1Compat') ? documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);width:"+boxWidth+"px;margin-top:-"+marginTopValue+"px!important;margin-left:-"+marginLeftValue+"px;!important;margin-top:0px;");
        this.popupLayer.hide();
    },
    _loadOverlay: function () {                //加载遮罩
        this.overlay ? this.overlay.remove() : null;
        this.overlay = $(document.createElement("div"));
		this.overlay.attr("style","background-color: #333333;display:none;width:100%;height:100%;left:0;top:0;filter:alpha(opacity=50);opacity:0.5;z-index:8889;position:fixed!important;position:absolute;_top:expression(eval(document.compatMode && document.compatMode=='CSS1Compat') ? documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2)").appendTo($(document.body));
        if ($.browser.msie && $.browser.version == "6.0") {//如果是IE6强行把html和body的height置为：100%,margin-top置为：0.
            $("html").css({height:"100%",margin:0});
			$("body").css({height:"100%",margin:0});
			$("select").hide();
			$(".popupLayer select").show();

        }
    },
    doEffects: function (way) {                //做特效
        way == "open" ? this.popupLayer.show("slow") : this.popupLayer.hide("slow");
    },
    close: function () {                      //关闭方法
		if ($.browser.msie && $.browser.version == "6.0") {
            $("select").show();
        }
        this.options.useOverlay ? this.overlay.hide() : null;
        this.options.useFx ? this.doEffects("close") : this.popupLayer.hide();
    }
});