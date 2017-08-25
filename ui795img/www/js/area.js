/// <reference path="jquery-1.4.2-vsdoc.js" />

(function area($)
{
    var list = new Array();
    $.fn.addSelect = function(area, value)
    {
        var opt = this.data('option');
        var con = this.parent().find('#_selectContainer');
        var sel = $('<select '+(opt.style||'')+'>');
        if (opt.headerText)
        {
            sel.append($("<option></option>").val('').html(opt.headerText));
        }
        for (var i in area)
        {
            sel.append($("<option></option>").val(area[i].id).html(area[i].name));
        }
        con.append(sel);
        sel.val(value);
        sel.data('area', this); //this:隐藏域
        sel.change(function()
        {
            var el = $(this); //this:下拉框
            var hid = el.data('area');
            hid.area(el.val());
            var opt = hid.data('option');
            if (opt.onchange)
            {
                try
                {
                    eval(opt.onchange);
                } catch (e) { }
            }
        });
        return sel.val();
    }

    $.fn.area = function(areaID)
    {
        if (typeof areaID != 'undefined')
        {
            this.initArea(areaID);
            return this;
        }
        return this.val();
    }

    $.fn.areaName = function()
    {
        return this.getSelectedArea().selectedText();
    }

    $.fn.getSelectedArea = function()
    {
        var sel = null;
        this.parent().find('#_selectContainer').find('select').each(function()
        {
            if (!sel)
            {
                sel = this;
            } else if ($(this).val() != '')
            {
                sel = this;
            }
        });
        return $(sel);
    }

    $.fn.clearArea = function()
    {
        this.parent().find('#_selectContainer').empty();
    }

    $.fn.initArea = function(areaID, options)
    {
        var opt = options || {};
        if (options) this.data('option', opt);
        this.clearArea(); //清空
        var topArea = getSubAreas(); //getSubArea(); //得到顶级数组
        var val = areaID; //传入的地区ID
        if (val)
        {
            var level = getAreaLevel(val); //父级id数组
            for (var i = 0; i < level.length; i++)
            {
                if (i == 0)
                {
                    this.addSelect(topArea, level[i]);
                } else
                {
                    var subArea = getSubAreas(level[i - 1]);
                    this.addSelect(subArea, level[i]);
                }
            }
            var lastLevel = getSubAreas(level[level.length - 1]);
            while (lastLevel.length > 0)
            {
                var val = this.addSelect(lastLevel, '');
                if (val == '') break;
                lastLevel = getSubAreas(val);
            }

        } else
        {
            this.addSelect(topArea, '');
        }
        this.val(this.getSelectedArea().val());
    }
})(jQuery);