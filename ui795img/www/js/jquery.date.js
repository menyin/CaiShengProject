// JavaScript Document

(function($) {
    var boxID = 0;
    var getID = function() { return boxID++; }
    var getElement = function(obj) {
        if ($.isPlainObject(obj)) return obj;
        if (typeof (obj) == 'string') return $(obj);
        return obj;
    }
    var datebox = function(opt) {
        this.id = '';
        this.dh = null;
        this.dc = null;
        this.header = null;
        this.dt = null;
        this.db = null;
        this.options = null;
        this._defaults = {
            content: '',
            btn: '',
            btnID: '',
            type: 'year',
            maxYear: new Date().getFullYear(),
            minYear: 1955,
            selectYear: null,
            selectMonth: 1,
            selectDay: 1,
            isYearMonth: true,
            positionYear: new Date().getFullYear(),
            keepHover: null,
            dependElement: null,
            isWorkExp: false,
            separated: '-',
            isOpenAfter: false
        };

        var self = this;
        //初始化选项
        this.initOptions = function() {
            var tempOpt = opt || {};
            self.options = $.extend({}, this._defaults, tempOpt);
        }

        this.initOptions();

        //初始化窗口
        this.initBox = function() {
            if (self.options.id) {
                self.id = self.options.id;
            }
            else {
                self.id = getID();
            }
            var html = '';
            switch (self.options.type) {
                case 'year':
                    html = '<div class="myData" id="_dateContainer' + self.id + '">' +
						 '<div class="myDataY myDataCon"><div class="myDataHead"><h6 class="_title">请选择年份</h6></div>' +
						 '<div class="myDataBody">' +
						 '  <div class="_workExpContent noWorkExp"><a class="_btnNoWorkExp" href="javascript:void(0);">我没有工作经验</a></div>' +
						 '	<div class="myDataLst">' +
						 '		<a title="上一页" class="_prevPage myDataArrow arrowL" href="javascript:void(0);"></a>' +
						 '		<a title="下一页" class="_nextPage myDataArrow arrowR" href="javascript:void(0);"></a>' +
						 '		<div class="myDataLstCon">' +
						 '			<div class="_dateContent myDataLstScroll">' +
						 '			</div>' +
						 '		</div>' +
						 '	</div>' +
						 '	<div class="_btnContent myDataBtn">' +
						 '		<a href="javascript:void(0);" class="_btnDay">[选择今天]</a>' +
						 '		<a href="javascript:void(0);" class="_btnClear">[清空]</a>' +
						 '		<a href="javascript:void(0);" class="_btnClose">[关闭]</a></div>' +
						 '</div></div>' +
						 '</div>';
                    break;
                case 'month':
                    html = '<div class="myData" id="_dateContainer' + self.id + '">' +
						   '<div class="myDataM myDataCon">' +
						   '	<div class="myDataHead"><h6 class="_title">请选择月份</h6></div>' +
						   ' 	<div class="myDataBody">' +
						   '		<div class="_dateContent myDataLst">' +
						   '		</div>' +
						   '		<div class="_btnContent myDataBtn">' +
						   '			<a href="javascript:void(0);" class="_btnDay">[选择今天]</a>' +
						   '			<a href="javascript:void(0);" class="_btnClear"">[清空]</a>' +
						   '			<a href="javascript:void(0);" class="_btnBackYear">[返回]</a>' +
						   '			<a href="javascript:void(0);" class="_btnClose">[关闭]</a></div>' +
						   '		</div>' +
						   '</div>' +
						   '</div>';
                    break;
                case 'day':
                    html = '<div class="myData" id="_dateContainer' + self.id + '">' +
						   '<div class="myDataD myDataCon">' +
						   '	<div class="myDataHead"><h6 class ="_title">请选择日期</h6></div>' +
						   '	<div class="myDataBody">' +
						   '		<div class="_dateContent myDataLst">' +
						   '		</div>' +
						   '		<div class="_btnContent myDataBtn">' +
						   '			<a href="javascript:void(0);" class="_btnDay">[选择今天]</a>' +
						   '			<a href="javascript:void(0);" class="_btnClear"">[清空]</a>' +
						   '			<a href="javascript:void(0);" class="_btnBackMonth">[返回]</a>' +
						   '			<a href="javascript:void(0);" class="_btnClose">[关闭]</a></div>' +
						   '		</div>' +
						   '	</div>' +
						   '</div>'
                    '</div>';
                    break;

            }

            self.dh = $(html).appendTo('body').css({
                position: 'absolute',
                zIndex: getZIndex(),
                left: -1000,
                top: -1000
            });
            self.dc = self.find('._dateContent');
            if (self.options.isYearMonth) {
                self.find('._btnDay').html('[选择本月]')
            }

            if (!self.options.isWorkExp) {
                self.find('._workExpContent').remove();
            }
        }

        //设置标题
        this.setTitle = function(title) {
            if (title == '') {
                self.dt.html('&nbsp;');
            }
            else {
                self.dt.html(title);
            }
        }

        //初始化内容
        this.initContent = function() {
            var content = getElement(self.options.content);
            content.show();
            content.css('display', 'block');
            self.setContent(content);
        }

        this.initPosition = function(obj) {
            var src = obj || self.dh;
            var left = 0, top = 0;
            var depend = getElement(self.options.dependElement);
            var offset = depend.offset();
            var wnd = $(window);
            var doc = $(document);

            var toTop = function() {
                var dependTop = 0;
                left = offset.left;
                top = offset.top - src.outerHeight();
                if (left + self.dh.outerWidth() > wnd.scrollLeft() + wnd.width()) left -= left + self.dh.outerWidth() - wnd.scrollLeft() - wnd.width();
                return top + dependTop >= wnd.scrollTop();
            }

            var toUnder = function() {
                var dependTop = 0;
                left = offset.left;
                top = offset.top + depend.outerHeight();
                return top + dependTop + self.dh.outerHeight() <= wnd.scrollTop() + wnd.height();
            }

            if (!toUnder()) toTop();
            src.css({ left: Math.max(left, 0), top: Math.max(top, 0) });

        }

        //设置控件数据
        this.setContent = function(content) {
            switch (self.options.type) {
                case 'year':
                    self.initYear();
                    break;
                case 'month':
                    self.initMonth();
                    break;
                case 'day':
                    self.initDay();
                    break;
            }
        }
        //初始化年
        this.initYear = function() {
            var i = 0, len = self.options.maxYear - self.options.minYear, yearHtml = '', num = 0, page = 1;
            if (len % 20 != 0) {
                len = len + (20 - (len % 20));
            }
            for (i; i < len; i++) {
                if (i % 20 == 0) {
                    num++;
                    yearHtml += '<ul>';
                    for (var j = i; j < i + 20; j++) {
                        if (parseInt(self.options.minYear) + j > self.options.maxYear) {
                            yearHtml += '<li class="unClick">' + (parseInt(self.options.minYear) + j) + '</li>';
                        }
                        else {
                            if (self.options.selectYear == parseInt(self.options.minYear) + j) {
                                yearHtml += '<li class="cu">' + (parseInt(self.options.minYear) + j) + '</li>';
                                page = num;
                            }
                            else {
                                if (self.options.selectYear == null && self.options.positionYear == parseInt(self.options.minYear) + j) { page = num; }
                                yearHtml += '<li>' + (parseInt(self.options.minYear) + j) + '</li>';
                            }
                        }
                    }
                    yearHtml += '</ul>';
                }
            }
            yearHtml += '<div class="clear"></div>';
            self.dc.html(yearHtml);
            self.slide(self.dh.find('._dateContent'), self.dh.find('._prevPage'), self.dh.find('._nextPage'), page);
        }

        //初始化月
        this.initMonth = function() {
            var minMonth = 1, maxMonth = 12, monthHtml = '';
            monthHtml = '<ul>';
            if (self.options.isOpenAfter) {
                for (var i = minMonth; i <= maxMonth; i++) {
                    if (self.options.selectMonth == i) {
                        monthHtml += '<li class="cu">' + i + '</li>';
                    }
                    else {
                        monthHtml += '<li>' + i + '</li>';
                    }
                }
            }
            else {
                for (var i = minMonth; i <= maxMonth; i++) {
                    if (parseInt(self.options.selectYear) == new Date().getFullYear() && i > new Date().getMonth() + 1) {

                        monthHtml += '<li class="unClick">' + i + '</li>';
                    }
                    else {
                        if (self.options.selectMonth == i) {
                            monthHtml += '<li class="cu">' + i + '</li>';
                        }
                        else {
                            monthHtml += '<li>' + i + '</li>';
                        }
                    }
                }
            }
            monthHtml += '</ul><div class="clear"></div>';
            self.dc.html(monthHtml);
        }

        //初始化日
        this.initDay = function() {
            var minDay = 1, maxDay = 31, year = self.options.selectYear, month = self.options.selectMonth, dayHtml = '';
            if (month == 4 || month == 6 || month == 9 || month == 11) {
                maxDay = 30;
            } else if (month == 2) {
                if (year % 4 == 0) {
                    maxDay = 29;
                }
                else {
                    maxDay = 28;
                }
            }

            dayHtml = '<ul>';
            if (self.options.isOpenAfter) {
                for (var i = minDay; i <= maxDay; i++) {
                    if (self.options.selectDay == i) {
                        dayHtml += '<li class="cu">' + i + '</li>';
                    }
                    else {
                        dayHtml += '<li>' + i + '</li>';
                    }
                }
            }
            else {
                for (var i = minDay; i <= maxDay; i++) {
                    if (parseInt(self.options.selectYear) == new Date().getFullYear() && parseInt(self.options.selectMonth) == new Date().getMonth() + 1 && i > new Date().getDate()) {
                        dayHtml += '<li class="unClick">' + i + '</li>';
                    }
                    else {
                        if (self.options.selectDay == i) {
                            dayHtml += '<li class="cu">' + i + '</li>';
                        }
                        else {
                            dayHtml += '<li>' + i + '</li>';
                        }
                    }
                }
            }
            dayHtml += '</ul><div class="clear"></div>';
            self.dc.html(dayHtml);
        }

        //设置年
        this.setOnYear = function(year) {
            obj = getElement(self.options.btn);
            self.options.selectYear = null;
            self.options.selectMonth = 1;
            self.options.selectDay = 1;
            obj.attr("year", '');
            obj.attr("month", '01');
            if (!self.options.isYearMonth) obj.attr("day", '01');
            self.close();
            self.setDateValue();
            self.options.selectYear = year;
            self.setDateValue();
            self.options.type = 'month';
            self.close();
            self.show();
        }

        //设置月
        this.setOnMonth = function(month) {
            self.options.selectMonth = month;
            self.close();
            self.setDateValue();
            if (self.options.isYearMonth) {
                self.options.type = 'year';
                return false;
            }
            self.options.type = 'day';
            self.show();
        }

        //设置日
        this.setOnDay = function(day) {
            self.options.selectDay = day;
            self.close();
            self.setDateValue();
            self.options.type = 'year';
            return false;
        }

        //设置年月
        this.setDateValue = function() {
            var dateValue = '', obj = getElement(self.options.btn);
            if (self.options.selectYear != null) {
                obj.attr('year', self.options.selectYear);
                dateValue = self.options.selectYear;
            }

            if (self.options.selectMonth != null) {
                if (self.options.selectMonth.toString().length < 2) {
                    obj.attr('month', '0' + self.options.selectMonth);
                    dateValue += self.options.separated + '0' + self.options.selectMonth;
                }
                else {
                    obj.attr('month', self.options.selectMonth);
                    dateValue += self.options.separated + self.options.selectMonth;
                }
            }
            if (!self.options.isYearMonth) {
                if (self.options.selectDay != null) {
                    if (self.options.selectDay.toString().length < 2) {
                        obj.attr('day', '0'+self.options.selectDay);
                        dateValue += self.options.separated + '0'+self.options.selectDay;
                    }
                    else {
                        obj.attr('day', self.options.selectDay);
                        dateValue += self.options.separated + self.options.selectDay;
                    }
                }
            }

            obj.val(dateValue);
            obj.focus();

        }

        //选择今天
        this.selectNow = function() {
            self.options.selectYear = new Date().getFullYear();
            self.options.selectMonth = new Date().getMonth() + 1;
            self.options.selectDay = new Date().getDate();
            self.close();
            self.setDateValue();
            self.options.type = 'year';
            return false;
        }

        //清空
        this.clearDate = function() {
            obj = getElement(self.options.btn);
            self.options.selectYear = null;
            self.options.selectMonth = null;
            self.options.selectDay = null;
            obj.attr("year", '');
            obj.attr("month", '');
            if (!self.options.isYearMonth) obj.attr("day", '');
            self.close();
            self.setDateValue();
            self.options.type = 'year';
            return false;
        }

        //返回到月事件
        this.backMonth = function() {
            self.setDateValue();
            self.options.type = 'month';
            self.close();
            self.show();
        }

        //返回到年事件
        this.backYear = function() {
            self.setDateValue();
            self.options.type = 'year';
            self.close();
            self.show();
        }

        //绑定按纽事件
        this.initEvent = function() {
            if (self.options.type == 'year') {
                self.dc.find('li:not([class=unClick])').unbind().bind('click', function() {
                    self.setOnYear($(this).html());
                });
            }
            else if (self.options.type == 'month') {
                self.dc.find('li:not([class=unClick])').unbind().bind('click', function() {
                    self.setOnMonth($(this).html());
                });
            }
            else if (self.options.type == 'day') {
                self.dc.find('li:not([class=unClick])').unbind().bind('click', function() {
                    self.setOnDay($(this).html());
                });
            }

            self.dh.find('._btnDay').unbind().bind('click', function() {
                self.selectNow();
            });

            self.dh.find('._btnClear').unbind().bind('click', function() {
                self.clearDate();
            });

            self.dh.find('._btnClose').unbind().bind('click', function() {
                self.close();
            });

            self.dh.find('._btnBackMonth').unbind().bind('click', function() {
                self.backMonth();
            });

            self.dh.find('._btnBackYear').unbind().bind('click', function() {
                self.backYear();
            });

            $('body').mousedown(function(event) {
                var e = $.event.fix(event);
                var src = e.target;
                var keep = false;
                if (self.dh[0] == src || $.contains(self.dh[0], src)) {
                    keep = true;
                }
                if (!keep && self.options.keepHover) {
                    if ($.isArray(self.options.keepHover)) {
                        try {
                            for (var i in self.options.keepHover) {
                                if (typeof self.options.keepHover[i] == 'string') {
                                    $(self.options.keepHover[i]).each(function() {
                                        if (this == src || $.contains(this, src)) {
                                            keep = true;
                                        }
                                    });
                                } else {
                                    var el = self.options.keepHover[i][0];
                                    if (el == src || $.contains(el, src)) {
                                        keep = true;
                                    }
                                }

                            }
                        } catch (e) { }
                    } else {
                        try {
                            if (typeof self.options.keepHover == 'string') {
                                $(self.options.keepHover).each(function() {
                                    if (this == src || $.contains(this, src)) {
                                        keep = true;
                                    }
                                });
                            } else {
                                var el = self.options.keepHover[0];
                                if (el == src || $.contains(el, src)) {
                                    keep = true;
                                }
                            }
                        } catch (e) { }
                    }
                }
                if (!keep) self.close();
            });
            self.dh.find('li:not([class=unClick])').each(function() {
                $(this).mousemove(function() { $(this).addClass('hov'); }).mouseout(function() { $(this).removeClass('hov'); });
            });
        }

        //切换方法
        this.toggle = function() {
            if (self.options.id && self.dh && self.dh.length > 0) {
                try {
                    var d = self;
                    if (d.dh.is(':visible')) {
                        d.close();
                    }
                    else {
                        d.show();
                    }
                } catch (e) { alert('toggle:' + e.message); }
            }
            else {
                if (self.dh && self.dh.length && self.dh.is(':visible')) {
                    self.close();
                }
                else {
                    self.show();
                }
            }
        }

        //显示方法
        this.show = function() {
            if (self.options.id) {
                try {
                    var d = $('#_dateContainer' + self.options.id);
                    if (d.size() > 0) return;
                } catch (e) { }
            }
            var dateBox = self.options.id ? self : $.extend({}, self);
            dateBox.initBox();
            dateBox.initContent();
            dateBox.initEvent();
            dateBox.initPosition();
            dateBox.dh.show();
        }

        //关闭方法
        this.close = function() {
            self.dh.hide();
            self.dh.remove();
        }
        //定义find函数
        this.find = function(selector) {
            return self.dh.find(selector);
        }

        //上一页，下一页
        this.slide = function(container, prev, next, num) {
            var total = $(container).children('ul').size();
            var width = $(container).children('ul').outerWidth();
            if (num == null || num == '') {
                num = 1;
            }
            if (num == 1) { $(prev).hide(); }
            if (num == total) { $(next).hide(); }

            $(container).css({ width: total * width, left: -width * (num - 1) });

            $(prev).click(function() {
                $(container).animate({ left: '+=' + (width) }, 'fast');
                if (--num == 1) {
                    $(this).hide();
                }
                if (total > 1) { $(next).show(); }
            });

            $(next).click(function() {
                $(container).animate({ left: '-=' + (width) }, 'fast');
                if (++num == total) {
                    $(this).hide();
                }
                if (total >= 1) { $(prev).show(); }
            });
        }
    }
    $.fn.bindDate = function(options) {
        var opt = options || {};
        opt.id = '_dateY' + getID();
        opt.btn = $(this);
        opt.btnID = $(this).attr('id');
        opt.keepHover = this;
        opt.dependElement = this;
        var dateB = new datebox(opt);
        this.unbind('click').click(dateB.toggle);
    }
})(jQuery);