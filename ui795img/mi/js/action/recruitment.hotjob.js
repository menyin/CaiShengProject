define(function(require, exports, module) {
    var $ = require('$');
    var ui = require('ui.base');
    var $panel = $('#areaPostList');
    var $areaUl = $('#areaTitle>ul');
    var $more = $('#getMore');
    var $currentTab = $areaUl.find('.active');
    var imageHost;
    var index = 0;
    var areaIdMap = {
        '0': '0',
        '3001': '3001',
        '3010': '3010',
        '3002': '3002',
        '3015': '3015',
        '3019': '3019',
        '3008': '3008',
        '9920': '3022,3014,3017,3004,3005,3009,3006,3007,3020,3018,3003,3011,3012,3013,3016,3021',
        '9902': '13,25,23,28',
        '-1': '24,11,14,44,31,35,33,45,29,26,22,18,15,41,16,27,17,19,37,38,20,21,36,34,12,39,40,32,43,42'
    };
    var pageWatcher = {
        '0': 1,
        '3001': 1,
        '3010': 1,
        '3002': 1,
        '3015': 1,
        '3019': 1,
        '3008': 1,
        '9920': 1,
        '9902': 1,
        '-1': 1
    };
    var pageType = location.href.split('/')[6];

    // 获取ajax url接口
    function getAjaxUrl(currentPage) {
        if (currentPage.indexOf('index') >= 0) {
            return '/touch/zph/201504hotjob/getHotJobs_action.ujson?t=' + Math.random();
        } else {
            return '/touch/zph/201504hotjob/' + currentPage + '/getHotJobs_action.ujson?t=' + Math.random();
        }
    }


    var out = {
        /**
         * 初始化页面功能
         */
        init: function() {
            var self = out;
            // 点击切换地区，搜索相应地区热门职位
            $('#areaTitle a').bind('click', self.searchHotJobs);

            $currentTab.find('a').data('isLoad', true);

            $more.bind('click', function(e) {
                var url = getAjaxUrl(pageType);
                self.loadMore(url);
            });
        },

        /**
         * 搜索地区热门职位
         */
        searchHotJobs: function() {
            var self = out;
            var $self = $(this);
            var $areaTab = $self.parent();
            var areaId = $self.attr('area-id');
            index = areaId;

            if ( !$areaTab.hasClass('active') ) {
                // 切换到当前点击的地区
                $currentTab.removeClass('active');
                $areaTab.addClass('active');
                $currentTab = $areaTab;

                if ($self.data('isLoad')) {
                    self.switchPanel();
                } else {
                    // 向服务器请求搜索该地区职位
                    window.jobcn.searchParams["p.jobLocationId"] = areaIdMap[areaId];  // 设置搜索地区的id
                    window.jobcn.searchParams["p.cachePosIds"] = '';  // 清空cachePosIds
                    var url = getAjaxUrl(pageType);
                    var pageNo = pageWatcher[areaId] + 1;
                    pageWatcher[areaId] = pageNo;
                    self.getJobs(pageNo, url);
                }
            }
        },

        /**
         * 获取职位数据
         */
        getJobs: function(pageNo, url) {
            ui.loading.show();

            var self = out;
            var params = {};
            window.jobcn.searchParams['p.pageNo'] = pageNo;
            for (var k in window.jobcn.searchParams) {
                if (k.indexOf('p.') === 0) {
                    params[k] = window.jobcn.searchParams[k];
                }
            }

            $.ajax({
                url: url,
                // url: '/touch/zph/201504hotjob/school/getHotJobs_action.ujson?t=' + Math.random(),
                data: params,
                success: function(res) {
                    ui.loading.hide();

                    var resData = JSON.parse(res);

                    if ( $currentTab.find('a').data('isLoad') ) {
                        self.showMore(resData);
                    } else {
                        self.createPanel(resData);
                    }
                }
            });
        },

        /**
         * 切换面板
         */
        switchPanel: function() {
            $panel.find('.show').removeClass('show').addClass('hide');
            $panel.find('#jobList-' + index).removeClass('hide').addClass('show');
        },

        /**
         * 创建面板
         */
        createPanel: function(data) {
            var self = out;
            var html = [];
            var dataRows = data.areaHotJobs.rows;

            html.push('<ul id="jobList-' + index + '" class="clearfix hide">');
            html.push(self.getListHtml(dataRows));
            html.push('</ul>');

            $panel.append(html.join(''));
            $currentTab.find('a').data('isLoad', true);
            self.switchPanel();
        },

        /**
         * 点击加载更多
         */
        loadMore: function(url) {
            var self = out;
            var areaId = $currentTab.find('a').attr('area-id');
            var pageNo = pageWatcher[areaId] + 1;
            pageWatcher[areaId] = pageNo;
            window.jobcn.searchParams['p.jobLocationId'] = areaIdMap[areaId];

            self.getJobs(pageNo, url);
        },

        /**
         * 追加新数据到当前职位列表
         */
        showMore: function(data) {
            var self = out;
            var dataRows = data.areaHotJobs.rows;
            var str = self.getListHtml(dataRows);

            $('#jobList-' + index).append(str);
        },

        getListHtml: function(list) {
            var html = [];
            for (var i = 0, len = list.length; i<len; i++) {
                var o = list[i];
                html.push('<li><a href="/touch/position/posInfo.uhtml?m.posId=' + o.posId + '"><dl>');
                html.push('<dt>' + o.posName + '</dt>');
                html.push('<dd>' + o.comName + '</dd>');
                html.push('<dd>' + o.salaryDetail + '</dd>');
                html.push('<dd>' + o.reqDegreeDesc);
                if(o.reqDegreeDesc) {
                    html.push('<span class="line">|</span>');
                }
                if(o.reqWorkYear > 0) {
                    html.push(o.workYearDesc + '经验');
                } else {
                    html.push(o.workYearDesc);
                }
                html.push('</dd>');
                html.push('<dd>' + o.jobLocation + '</dd>');
                html.push('<dd>' + o.updateDate + '</dd>');
                html.push('</dl></a></li>');
            }
            return html.join('');
        },

        popCompany: {
            init: function() {
                $('#viewMore').bind('click', out.popCompany.loadMore);
            },
            loadMore: function() {
                ui.loading.show();

                var $self = $(this);
                var currentPage = parseInt($self.attr('current-page'));
                var totalPage = parseInt($self.attr('total-page'));
                var pageNo = currentPage + 1;
                $self.attr('current-page', pageNo);

                if (typeof totalPage === 'number' && pageNo <= totalPage) {
                    $.ajax({
                        url: '/touch/company/popularComRank/pos4Page.ujson?t=' + Math.random(),
                        data: {
                            pageNo: pageNo
                        },
                        success: function(res) {
                            ui.loading.hide();
                            imageHost = JSON.parse(res).imageHost;
                            out.popCompany.showMore(JSON.parse(res));
                        }
                    });
                }
            },
            showMore: function(data) {
                var html = [];
                var dataRows = data.pageResult.rows;
                var len = dataRows.length;

                for (var i = 0; i<len; i++) {
                    var o = dataRows[i];

                    html.push('<dl>');
                    html.push('<dt>');
                    html.push('<a href="#">');
                    html.push('<img src="' + imageHost + o.logoUrl + '" border="0">');
                    html.push('</a>');
                    html.push('</dt>');
                    html.push('<dd>');
                    html.push('<h3>' + o.comName + '</h3>');
                    html.push('<ul class="clearfix">');

                    for (var j = 0; j<o.posList.length; j++) {
                        var so = o.posList[j];
                        html.push('<li>');
                        html.push('<a href="/touch/position/posInfo.uhtml?m.posId=' + so.posId + '">' + so.posName + '</a>');
                        html.push('</li>');
                    }

                    html.push('</ul>');
                    html.push('</dd>');
                    html.push('</dl>');
                }

                $('.com_list').append(html.join(''));
            }
        }
    };

    module.exports = out;
});