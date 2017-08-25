/*
==================================
jquery.tip 提示插件
author:hyl
last update:2011/12/12
version:1.0 beta
环境：jquery.js,jquery.cookies.js
=================================
*/
$.fn.extend({
    jtip: function (options) {
        var defoptions = { postion: "left", width: 260, title: "title", text: "content", autohide: false, useanimate: true };
        options = $.extend(defoptions, options);
        var __createglayer = function (target) {
            var title = target.attr("jtitle");
            var text = target.attr("jtext");
            var guid = target.attr("guid"); //全局唯一ID，“不再提示”有效
            var _attrwidth = target.attr("jwidth");
            var _icowidth = target.attr("jicowidth");
            var _ico = target.attr("jico");
            if (_attrwidth) {
                options.width = _attrwidth;
            }
            var id = "glayer-" + ($(".g-layer").length + 1);
            var sb = [];
            var pstyle = target.attr("jstyle");
            if (!pstyle) pstyle = options.position;
            var styles = { "left": "", "top": "g-layer-top", "right": "g-layer-right", "bottom": "g-layer-bottom" };
            var cls = styles[pstyle];
            var padding_left = "";
            if (_icowidth) {
                padding_left = parseInt(_icowidth) + 16;
                padding_left = "style='padding-left:" + padding_left + "px;'";
            }
            sb.push("<div id=\"" + id + "\" class=\"g-layer\" style=\"width: " + options.width + "px;\">");
            sb.push("        <div class=\"g-layer-inner\" " + padding_left + ">");
            sb.push("            <a href=\"javascript:void(0)\" class=\"g-ico g-layer-close\" hidefocus=\"hidefocus\">");
            sb.push("            <\/a><b  class=\"g-ico g-layer-arr" + (cls == '' ? "" : " " + cls) + "\"><\/b>");
            if (_ico) {
                var iconstr = "            <b class=\"g-ico g-layer-icon\" style=\"width:{0}px;height:{0}px;background:url('" + _ico + "')\"><\/b>";
                sb.push(iconstr.replace(/\{0\}/gi, _icowidth));
            } else {
                sb.push("            <b class=\"g-ico g-layer-icon\"><\/b>");
            }
            //文本内高度
            if (target.attr("jtextpaddingtop")) {
                sb.push("<div class='blankline' style='height:" + target.attr("jtextpaddingtop") + "px'></div>");
            }
            sb.push("            <h3 class=\"g-layer-title\">");
            sb.push(title);
            sb.push("                <\/h3>");
            sb.push("            <p>");
            sb.push("                <span>" + text.replace("\n", "<br/>") + "&nbsp;&nbsp;<\/span>");
            if (guid) {
                sb.push("	    <span>[<a href=\"javascript:void(0)\" hidefocus=\"hidefocus\" class=\"nevertip link-underline\" guid='" + guid + "'>不再提示<\/a>]<\/span>");
            }
            sb.push("<\/p>");

            if ($.browser.msie && $.browser.version == '6.0') {//ie6
                sb.push("<iframe class='T_iframe' frameborder=0 marginheight=0 marginwidth=0 hspace=0 vspace=0 scrolling=no></iframe>");
            }
            if (_icowidth) {
                sb.push("<div style='height:8px;line-height:0;overflow:hidden;clear:both;'></div>");
            }
            sb.push("        <\/div>");
            sb.push("    <\/div>");
            $("BODY").append(sb.join(''));
            //==========提示层出现位置及出现方式=======================
            target.data("init-glayer", id);
            var glayer = $("#" + id);
            AnimateShow(target, glayer);
            //关闭
            glayer.find("a.g-layer-close,a.nevertip").click(function () {
                glayer.hide();
                if ($(this).hasClass('nevertip')) {
                    appendCookieUUID(guid);
                    target.data("nevertip", true);
                }
            });
            var iframe = glayer.find("iframe");
            if (iframe.length > 0) {
                iframe.css({ top: 0, left: 0, width: glayer.width() - 2, height: glayer.height() - 2 });
            }
            return glayer;
        };
        var appendCookieUUID = function (v) {
            var tipuuid = $.cookie('tipuuid');
            if (!tipuuid) {
                $.cookie("tipuuid", v, { expires: 999 }); return;
            }
            var tipuuids = tipuuid.split(",");
            if (jQuery.inArray(v, tipuuids) == -1) {
                tipuuids.push(v);
                $.cookie("tipuuid", tipuuids.join(','), { expires: 999 });
            }
        };
        var isInCookieUUID = function (v) {
            var tipuuid = $.cookie('tipuuid');
            if (!tipuuid) {
                return false;
            }
            var tipuuids = tipuuid.split(",");
            return jQuery.inArray(v, tipuuids) != -1;
        };
        var AnimateShow = function (target, glayer) {
            var tp = target.offset();
            var pstyle = target.attr("jstyle");
            var attr_offsetx = parseInt(target.attr("offsetx"));
            var attr_offsety = parseInt(target.attr("offsety"));

            var _offsetY = options.offsety ? options.offsety : (attr_offsety != 0 ? attr_offsety : 0);
            var _offsetX = options.offsetx ? options.offsetx : (attr_offsetx != 0 ? attr_offsetx : 0);
            if (isNaN(_offsetX)) {
                _offsetX = 0;
            }
            if (isNaN(_offsetY)) {
                _offsetY = 0;
            }
            switch (pstyle) {
                case "left":
                    var __top = tp.top - target.height() - _offsetX;
                    var __left = tp.left + target.width() + _offsetY;
                    if (options.useanimate) {
                        glayer.css({ left: __left - 50, top: __top }).show().animate({ left: __left }, 180);
                    }
                    else {
                        glayer.css({ left: __left, top: __top }).show();
                    }
                    break;
                case "top":
                    // alert(attr_offsety);

                    var __top = tp.top + target.height() + (_offsetY == 0 ? 12 : _offsetY);
                    var __left = tp.left + (_offsetX == 0 ? -46 : _offsetX);

                    if (options.useanimate) {
                        glayer.css({ left: __left, top: __top - 30 }).show().animate({ top: __top }, 180);
                    }
                    else {
                        glayer.css({ left: __left, top: __top }).show();
                    }
                    break;
                case "bottom":
                    var __top = tp.top - glayer.height() - target.height() + (_offsetY == 0 ? -6 : _offsetY); ;
                    var __left = tp.left + (_offsetX == 0 ? -46 : _offsetX);
                    if (options.useanimate) {
                        glayer.css({ left: __left, top: __top + 30 }).show().animate({ top: __top }, 180);
                    }
                    else {
                        glayer.css({ left: __left, top: __top }).show();
                    }
                    break;
                case "right":
                    var __left = tp.left - glayer.width() - target.width() + _offsetX * 2;
                    var __top = tp.top - target.height() + _offsetY - 10;
                    if (options.useanimate) {
                        glayer.css({ left: __left - 50, top: __top }).show().animate({ left: __left, opacity: 1 }, 180);
                    }
                    else {
                        glayer.css({ left: __left, top: __top }).show();
                    }
                    break;
            }
        };
        return $(this).each(function () {

            var openlayer = function (_this, _b) {
                if (!_this.data("init-glayer")) { //create 
                    if (!_b) $(".g-layer").hide();
                    var glayer = __createglayer(_this);
                } else {
                    var glayer = $("#" + _this.data("init-glayer"));
                    if (!glayer.is(":visible")) {
                        $(".g-layer[id!='" + _this.attr("id") + "']").hide();
                        AnimateShow(_this, glayer);
                    }
                }
            };
            var __timer = null;
            var closelayer = function (layerid) {
                var glayer = $("#" + layerid);
                if (!glayer.is(":visible")) {
                    return;
                }
                if (!glayer.data("init-event")) {
                    glayer.hover(function () {
                        clearTimeout(__timer);
                    }, function () {
                        closelayer(layerid);
                    });
                    glayer.data("init-event", true);
                }
                clearTimeout(__timer);
                __timer = setTimeout(function () {
                    glayer.hide();
                }, 200);
            };
            var handler = $(this);
            if (handler.is(":checkbox") && !handler.attr("jtitle")) {//修正asp.net checkbox
                handler = handler.parent();
            }
            var guid = handler.attr("guid");
            if (guid) {
                if (isInCookieUUID(guid)) {
                    return;
                }
            }
            handler.hover(function () {
                clearTimeout(__timer);
                if ($(this).data("nevertip")) {
                    return;
                }
                openlayer($(this));
            }, function () {
                if (!$(this).data("init-glayer")) {
                    return;
                }
                if ($(this).data("nevertip")) {
                    return;
                }
                var autohide = !$(this).attr("autohide") ? options.autohide : $(this).attr("autohide");
                if (autohide) {
                    closelayer($(this).data("init-glayer"));
                }
            });
            if (handler.attr("autoshow") == 'true') {
                openlayer($(this), true);
            }

        });
    }
});