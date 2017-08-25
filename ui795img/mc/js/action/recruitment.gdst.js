define(function(require, exports, module) {
    var $       = require('$');
    var jui     = require('ui.base');
    var tSlider = require('ui.touchSilder');
    var out     = {};

    // 初始化首页
    out.initIndex = function() {
        // 各区域点击后显示 loading 图标
        $('.controller_area dl').tap(function() {
            jui.loading.show();
        });

        // out.initBanner();
        out.initSearchForm();
        out.initShare();
    };

    // 初始化搜索结果页
    out.initSearch = function() {
        out.initGetMore();
        out.initShare();
    };

    // 初始化 banner
    out.initBanner = function() {
        var slide = new tSlider({
            id: 'list',
            speed: 500,
            timeout: 3000
        });
    };

    // 初始化搜索功能
    out.initSearchForm = function() {
        var $searchForm   = $('#search_form'),
            $tabBtn       = $('.search_tab_head li'),
            $tabBtnActive = $('.search_tab_head li.active'),
            $searchType   = $('#search_type'),
            $searchPara   = $('#search_input');

        var fields = {
            search_pos: ['1', '输入职位名'],
            search_com: ['2', '输入公司名'],
            search_loc: ['3', '输入展位号']
        };

        $tabBtn.tap(function() {
            // 改变 active 样式
            $tabBtnActive.removeClass('active');
            $(this).addClass('active');
            $tabBtnActive = $(this);

            // 根据元素相应的 id 值设置 placeholder 文字
            var _id = $tabBtnActive.attr('id');
            if(_id.length > 0) {
                $searchType.attr('value', fields[_id][0]);
                $searchPara.attr('placeholder', fields[_id][1]);
            }

            $searchForm.submit(function() {
                if( $searchPara.val().replace(/(^\s*)|(\s*$)/g, '').length === 0) {
                    jui.alert('请输入搜索内容!');
                    return false;
                }
            });
        });
    };

    // 点击加载更多
    out.initGetMore = function() {
        var $moreBtn = $('.controller_more');

        if( $moreBtn.length === 0 ) {
            return false;
        } else {
            var $resultBox  = $('.controller_result_box'),
                pageNumber  = parseInt($('#pageNumber').val()),  //当前页数
                pageCount   = parseInt($('#pageCount').val()),  //总页数
                searchType  = parseInt($('#search_type').val()),  //搜索类型
                searchPara  = $('#search_input').val();  //搜索关键词


            $moreBtn.on('click', function() {
                pageNumber = pageNumber + 1;

                var $last = $resultBox.children().last();

                jui.loading.show();
                
                $.ajax({
                    type: 'POST',
                    url: '/touch/zph/gdst/getZphInfo.uhtml',
                    data: {
                        type: searchType,
                        para: searchPara,
                        'page.pageNo': pageNumber
                    },
                    success: function(data) {
                        jui.loading.hide();

                        var html = [];
                        html.push('<div class="controller_page">第' + pageNumber + '页</div><ul>');
                        
                        data = JSON.parse(data);
                        var len = data.rows.length;
                        var colorMap = {
                            A: 'red',
                            B: 'blue',
                            C: 'green',
                            D: 'yellow',
                            E: 'olive_green',
                            F: 'naturals',
                            G: 'violet'
                        };

                        // 根据不同展位号显示不同背景颜色
                        for( var i = 0; i < len; i++ ) {
                            html.push('<li><a href="javascript:;"><dl class="clearfix">');
                            html.push('<dt>' + data.rows[i].PosName + '</dt>');
                            html.push('<dd>' + data.rows[i].ComName + '</dd>');

                            for( var j = 1; j < 6; j++ ) {
                                var loc = 'Loc' + j;
                                if( data.rows[i][loc].length > 0 ) {
                                    var locClass = colorMap[data.rows[i][loc].charAt(0)];
                                    html.push('<dd class="' + locClass + '">' + data.rows[i][loc] + '</dd>');
                                }
                            }

                            html.push('</dl></a></li>');
                        }
                        html.push('</ul>');

                        var l = html.length;
                        var htmlStr = '';
                        for( var i = 0; i < l; i++ ) {
                            htmlStr += html[i];
                        }
                        $last.after(htmlStr);

                        if( pageNumber === pageCount ) {
                            $moreBtn.hide().after('<div class="controller_all">已加载所有职位</div>');
                            return false;
                        }
                    }
                });
            });
        }
    };

    // 微信分享
    out.initShare = function() {
        $(document).on('WeixinJSBridgeReady', function() {
            // 返回微信分享的数据
            function getData() {
                // 获取 url 参数
                var type   = parseInt($('#search_type').val()),
                    para   = $('#search_input').val(),
                    pageNo = '1',
                    // 设置默认的发送数据
                    data = {
                        appId: '',
                        title: document.title,
                        desc: document.title,
                        link: location.href,
                        imgUrl: 'http://' + location.host + '/touch/commImage/icon_mini-01.jpg',
                        imgWidth: 187,
                        imgHeight: 187
                    };

                // 搜索结果页需要自定义相应 title 和重构页面 url
                if( data.link.match('search') ) {
                    var typeMap = ['', '职位列表', '公司职位列表', '展区职位列表'];
                    data.title += ' - ' + para + ' ' + typeMap[type];
                    data.link += '?type=' + type + '&para=' + para + '&page.pageNo=' + pageNo;
                }

                return {
                    "appid": data.appId,
                    "title": data.title,
                    "desc": data.desc,
                    "link": data.link,
                    "img_url": data.imgUrl,
                    'img_width': data.imgWidth,
                    "img_height": data.imgHeight
                };
            }

            // 发送给朋友
            WeixinJSBridge.on("menu:share:appmessage", function() {
                WeixinJSBridge.invoke('sendAppMessage', getData(), function(res){});
            });

            // 分享到朋友圈
            WeixinJSBridge.on("menu:share:timeline", function() {
                WeixinJSBridge.invoke('shareTimeline', getData(), function(res){});
            });
        });
    };

    module.exports = out;
});