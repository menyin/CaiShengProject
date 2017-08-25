/**
 * 触屏版职位详情
 * --JOBCNX-2115 触屏版-职位切换的交互方式优化（增加左右滑动切换+上拉切换）
 * @author boris JCNEP6593
 *
 * 程序初始化传入的参数中，enablePreLoad至关重要，决定了切换的模式
 * enablePreLoad: true 预加载数据模式：初始化页面后，自动检测并加载前后的职位数据，以后每切换一个职位，自动加载当前职位的前一个或后一个的数据
 * enablePreLoad: false loading模式：初始化页面后，在当前职位前后插入空白的html
 * （以便让swiper插件可滑动，当只有一个swiper slide的时候，页面是不可以滑动的），切换页面后，弹出loading层，获取当前职位数据并插入到页面中
 */
define(function(require, exports, module) {
    var $      = require('$');
    var ui     = require('ui.base');
    var util   = require('util');
    var juicer = require('juicer');
    var Swiper = require('swiper');
    var person = require('action.person');
    var mBox   = require("ui.mBox");

    //页面初始化数据
    var initData   = null;
    var pageSwiper = null;
    //职位数据缓存
    var Cache      = {};
    //通用模板
    var TEMPLATE = {
        SWIPER: $('#tpl-swiper').html(),
        SWIPER_EMPTY: $('#tpl-swiper-empty').html(),
        POSDETAIL: $('#tpl-posDetail').html(),
        COMPROFILE: $('#tpl-comProfile').html(),
        POSLIST: $('#tpl-posList').html()
    };

    var $doc             = $(document);
    var $fullScreen      = $('.fullscreen');
    var $pageBtn         = $('#current_pageBtn');
    var $pageView        = $('#current_page');
    var $footer          = $('#tFooter');
    var $footBar         = $('#applyFootBtn');
    var $footNextPos     = $('.showNextPos');
    var $swiperContainer = $('#swiper-container');
    var $activeSlide     = null;
    var docHeight        = undefined;
    var clientHeight     = $(window).height();
    //标识是否从搜索结果列表页面进入职位详情页面
    var scrollTimer      = null;

    Cache.add = function(posId, data) {
        if (this[posId]) return true;
        if (!posId || !data) return false;
        if (typeof posId !== 'string') posId = posId.toString();
        this[posId] = {};
        this[posId].posInfo = data;
    };

    function getUrlParameter(url, pName) {
        url = url || window.location.search.substr(1);
        var reg = new RegExp("(^|&)" + pName + "=([^&]*)(&|$)", "i");
        var r = url.match(reg)
        if (r != null) return r[2];
        return null;
    }

    var Buttons = {
        $favo: $('.favPost'),
        $apply: $('.applyPost'),
        $goBack: $('.btn_back_l>.btn_back'),
        $next: $pageBtn.find('.btn_next'),
        $prev: $pageBtn.find('.btn_previous'),
        init: function() {
            //初始化返回按钮的链接
            if (initData.referSearch) {
                $pageBtn.show();
                $pageView.show();
            }
            // this.bindGoBack();
            this.bindEvents();
        },
        bindEvents: function() {
            var self = this;

            // 收藏职位
            $doc.on('tap', '.favPost', function(event) {
                event.stopPropagation();
                favourite( [$(this).attr('ids')] );
            });

            // 应聘职位
            $doc.on('tap', '.applyPost', function(event) {
                event.stopPropagation();
                if ( !!~document.referrer.indexOf('/company/homepage/') ) {
                    _hmt && _hmt.push(['_trackEvent', 'T_Search_From_HomePage', 'click']);
                }
                applyPost( [$(this).attr('ids')] );
            });

            // 上一个/下一个职位
            $pageBtn.on('tap', '.page-btn', function(event) {

                event.stopPropagation();
                var action = $(this).attr('data-action');
                switch(action) {
                    case 'pre':		
                        pageSwiper.slidePrev();
                        break;
                    case 'next':
                        pageSwiper.slideNext();
                        break;
                }
            });

            // 其他职位详情页面点击返回按钮关闭页面
            $doc.on('tap', '#goBack', function(event) {
                event.stopPropagation();
                var $this = $(this);
                if ( $this.attr('old') ) {  // 关闭其他职位的详情页面
                    $activeSlide.find('.otherPosDetailCont').addClass('hide').siblings('.posListCont').removeClass('hide');
                    $pageView.show();
                    $pageBtn.show();
                    $activeSlide.find('.c_menu').show();
                    $footer.removeClass('hide');
                    $footBar.addClass('hide');
                    self.updateGoBack();
                    TabPage.resizePage({height: '100%'}, true);
                    TabPage.resizePage({height: 20}, false);
                    pageSwiper && pageSwiper.unlockSwipes();
                    return false;
                }
            });
        },
        updateId: function(posId) {
            this.$favo.attr('ids', posId);
            this.$apply.attr('ids', posId);
            return this;
        },
        updatePagination: function(data) {
            var step = data.stepGetInfo;
            var prevUrl, nextUrl;

            $pageBtn.children('span').text(step.currentRow + '/' + step.ttlRowCnt);

            if ( !util.isEmpty(step.prePosId) && step.prePosId.length > 0 ) {
                prevUrl = '/position/jobInfo.html?act=nextJob&ref=search&action=pre&jobId=' + step.prePosId + '&isBidding=' + step.prePosIsBidding + '&keyword=' + initData.keyword + '&_t=' + Math.random();
            } else {
                prevUrl = 'javascript:;';
            }

            if ( !util.isEmpty(step.nextPosId) && step.nextPosId.length > 0 ) {
                nextUrl = '/position/jobInfo.uhtml?act=nextJob&ref=search&action=next&jobId=' + step.nextPosId + '&isBidding=' + step.nextPosIsBidding + '&keyword=' + initData.keyword + '&_t=' + Math.random();
            } else {
                nextUrl = 'javascript:;';
            }

            this.$prev.attr('data-href', prevUrl);
            this.$next.attr('data-href', nextUrl);
            if (prevUrl !== 'javascript:;') {
                this.$prev.removeClass('state');
            } else {
                this.$prev.addClass('state');
            }
            if (nextUrl !== 'javascript:;') {
                this.$next.removeClass('state');
            } else {
                this.$next.addClass('state');
            }
            return this;
        },
        updateBackLink: function(step) {
            var backPage = 'pageNo=' + step.pageNo;
            var backUrl = step.backUrl.replace(/pageNo=\d{0,}/, backPage);
            this.$goBack.attr('href', backUrl);
        },
        updateGoBack: function() {
        	return;
            if ( !this.$goBack.attr('old') ) { // 打开其他职位的详情页面
                this.$goBack.attr('old', this.$goBack.attr('href'));
                this.$goBack.attr('href', 'javascript:;');
            } else {  // 关闭其他职位的详情页面
                this.$goBack.attr('href', this.$goBack.attr('old'));
                this.$goBack.attr('old', '');
                this.updateId( $activeSlide.find('#thePosId').val() );
            }
            return this;
        }
        // bindGoBack:function(){
        // 	if ( /jobcn\.com|192\.168/.test(document.referrer) ) {
        //         // 从搜索结果列表进入职位详情
        //         // 点击左上角返回按钮回到结果列表页面
        //         // if ( /search\/result/.test(document.referrer) ) {
        //         //     this.$goBack.attr('href', '/touch/search/result.uhtml');
        //         //     return true;
        //         // }

        //         this.$goBack.attr('href', 'javascript:;').click(function() {
        //             window.history.go(-1);
        //             return false;
        //         });
        //     } else {
        //    		this.$goBack.attr('href', '/touch/');
        //     }
        // }
    };

    var TabPage = {
        comId: '',
        posId: '',
        init: function(settings) {
            var self = this;
            $footer.addClass('hide');
            //缓存当前职位数据
            Cache.add(settings.posId, settings);
            // Buttons.updatePagination(settings);

            this.updateId(initData);

            if (!initData.referSearch) {
                $activeSlide = $('.swiper-slide');
            }

            this.bindEvents();

            //从非搜索结果列表页进来的，不需要初始化 Swiper
            if (!initData.referSearch) {
                // TabPage.setOpenIcon();
                this.resizePage({height: 50}, false);
                return true;
            }

            pageSwiper = new Swiper('.swiper-container', {
                spaceBetween: 20,
                iOSEdgeSwipeDetection: true,
                onInit: function(swiper) {
                    $activeSlide = $swiperContainer.find('.swiper-slide-active');
                    // TabPage.setOpenIcon();
                    self.highlightKeyword();
                    self.resizePage({height: 100}, false);
                    if (settings.enablePreLoad) {  //预加载数据模式
                        var step = settings.stepGetInfo;
                        if (step.prePosId.length > 0) {
                            getResult('pre', step.prePosId, step.prePosIsBidding, initData.keyword, step.prePage, step.prePageFromLucene, step.pageNo, function(data) {
                                //保证前一个职位数据加载完成后加载后一个职位数据
                                if (step.nextPosId.length > 0) {
                                    getResult('next', step.nextPosId, step.nextPosIsBidding, initData.keyword, step.nextPage, step.nextPageFromLucene, step.pageNo);
                                }
                            });
                        } else if (step.nextPosId.length > 0) {
                            getResult('next', step.nextPosId, step.nextPosIsBidding, initData.keyword, step.nextPage, step.nextPageFromLucene, step.pageNo);
                        }
                    } else {
                        //已渲染过的slide进行标记
                        $activeSlide.attr('loaded', true);
                        /**
                         * 非预加载数据模式
                         * 需要在前后位置分别插入空白的swiper模板
                         * 这样swiper插件才能滑动
                         */
                        if(initData.stepGetInfo.prePosId.length > 0) swiper.prependSlide(TEMPLATE.SWIPER_EMPTY);
                        if(initData.stepGetInfo.nextPosId.length > 0) swiper.appendSlide(TEMPLATE.SWIPER_EMPTY);
                        // initData.queueStart = swiper.activeIndex === 0 ? true : false;
                    }
                },
                onSlideChangeStart: function(swiper) {
                    swiper.lockSwipes();
                    self.resizePage({height: '100%'}, true);
                    self.resetState();
                },
                onSlideChangeEnd: function(swiper) {
                    window.scrollTo(0, 0);
                    $activeSlide = $swiperContainer.find('.swiper-slide-active');

                    //设置屏幕滑动方向
                    if (swiper.activeIndex - swiper.previousIndex > 0) {
                        initData.action = 'next';
                    } else {
                        initData.action = 'pre';
                    }

                    var currentPosId = $activeSlide.find('.specPosId').val() || self.posId;
                    var posCache = Cache[currentPosId].posInfo
                    var step     = posCache.stepGetInfo;
                    step.backUrl = posCache.backUrl;  // 添加backUrl

                    if (initData.enablePreLoad) {  //预加载模式
                        self.highlightKeyword();
                        self.resizePage({height: 100}, false);

                        var slidesCount = swiper.slides.length;
                        var index       = swiper.activeIndex;
                        //更新页码
                        $pageView.text('（'+step.currentRow + '/' + step.ttlRowCnt+'）');
                        self.updateId(posCache);
                        Buttons.updateId(posCache.posId).updatePagination(posCache);

                        //滑动到当前swiper队列的最后一个
                        if ( index === slidesCount - 1 ) {
                            if (step.nextPosId > 0) {
                                getResult(initData.action, step.nextPosId, step.nextPosIsBidding, initData.keyword, step.nextPage, step.nextPageFromLucene, step.pageNo);
                            }
                        }
                        //滑动到当前swiper队列的第一个
                        if (index === 0) {
                            if (step.prePosId.length > 0) {
                                getResult(initData.action, step.prePosId, step.prePosIsBidding, initData.keyword, step.prePage, step.prePageFromLucene, step.pageNo);
                            }
                        }
                        swiper.unlockSwipes();
                    } else {  //非预加载模式
                        //页面已加载过，直接显示

                        if ($activeSlide.attr('loaded') === 'true') {
                            $pageView.text('（' + step.currentRow + '/' + step.ttlRowCnt + '）');
                            self.resizePage({height: 100}, false);
                            self.updateId(posCache);
                            Buttons.updateId(posCache.posId).updatePagination(posCache);
                            Buttons.updateBackLink(step);
                            swiper.unlockSwipes();

							//修复jobIndex bug
							var _jobIndex = util.cookie.get('jobIndex');
							options = [];
							options['domain'] = __cookieDomain;
							if(initData.action === 'next') util.cookie.setRaw('jobIndex', parseInt(_jobIndex)+1, options);
							if(initData.action === 'pre') util.cookie.setRaw('jobIndex', parseInt(_jobIndex)-1, options);

                            return true;
                        }

                        if (initData.action === 'next' && step.nextPosId.length > 0) {
                            getResult(initData.action, step.nextPosId, step.nextPosIsBidding, initData.keyword, step.nextPage, step.nextPageFromLucene, step.pageNo, function(data) {
								var step = data.stepGetInfo;
								step.backUrl = data.backUrl;  // 添加backUrl
								self.highlightKeyword();
								self.resizePage({height: 100}, false);
								$pageView.text('（'+step.currentRow + '/' + step.ttlRowCnt+'）');
								$('.showNextPos span').text(step.currentRow + '/' + step.ttlRowCnt);
								self.updateId(data);
								Buttons.updateId(data.posId).updatePagination(data);
								Buttons.updateBackLink(step);
							});
                        }
                        if (initData.action === 'pre' && step.prePosId.length > 0) {
                            getResult(initData.action, step.prePosId, step.prePosIsBidding, initData.keyword, step.prePage, step.prePageFromLucene, step.pageNo, function(data) {
								var step = data.stepGetInfo;
								step.backUrl = data.backUrl;  // 添加backUrl
								self.highlightKeyword();
								self.resizePage({height: 100}, false);

								$pageView.text('（'+step.currentRow + '/' + step.ttlRowCnt+'）');
								$('.showNextPos span').text(step.currentRow + '/' + step.ttlRowCnt);
								self.updateId(data);
								Buttons.updateId(data.posId).updatePagination(data);
								Buttons.updateBackLink(step);
							});
                        }
                    }
                }
            });
        },
        bindEvents: function() {
            var self = this;

            //点击查看职位详情、企业简介、其他职位
            $doc.on('click', '.menu_item', function(event) {
                event.stopPropagation();

                var $this = $(this);
                var type  = $this.attr('data-type');
                //调整swiper-container元素的高度
                self.resizePage({height: '100%'}, true);

                //职位详情内容
                if (type === 'posDetail') {
                    self.showContent(type);
                    self.afterShow(type);
                }
                //公司简介内容
                if (type === 'comProfile') {
                    var comCache = Cache[self.posId].comProfile;
                    if (comCache) {
                        var htmlContent = self.parseTemplate(TEMPLATE.COMPROFILE, comCache);
                        self.renderTemplate('.comProfileCont', htmlContent);
                        self.showContent(type);
                        self.afterShow(type);
                    } else {
                        self.getCompanyProfile(self.comId, function(data) {
                            if(data.homePage) data.homePage = data.homePage.replace(/http:\/\//gi,"");
                            if(data.weibo) data.weibo = data.weibo.replace(/http:\/\//gi,"");
                            if(data.email) data.emailWidth = data.email.split(";")[0].length * 12;

                            var htmlContent = self.parseTemplate(TEMPLATE.COMPROFILE, data);
                            self.renderTemplate('.comProfileCont', htmlContent);
                            self.showContent(type);
                            self.afterShow(type);
                        });
                    }
                }
                //其他职位列表
                if (type === 'posList') {
                    var listCache = Cache[self.posId].otherPosList;
                    if (listCache) {
                        listCache.appendMode = false;
                        var htmlContent  = self.parseTemplate(TEMPLATE.POSLIST, listCache);
                        self.renderTemplate('.posListCont', htmlContent);
                        self.showContent(type);
                        self.afterShow(type);
                    } else {
                        self.getPositionList(1, self.comId, function(data) {
                            self.showContent(type);
                            self.afterShow(type);
                        });
                    }
                }

            });

            //点击查看其他职位列表中的职位
            $doc.on('click', '.otherPosItem', function(event) {
                event.stopPropagation();
                var posId = $(this).attr('posId');
                var posCache = Cache[self.posId].otherPosDetail ? Cache[self.posId].otherPosDetail[posId] : null;
                self.resizePage({height: '100%'}, true);

                if (posCache) {
                    var htmlContent = self.parseTemplate(TEMPLATE.SWIPER, posCache);
                    self.renderTemplate('.otherPosDetailCont', htmlContent);
                    self.showContent('otherPosDetail');
                    self.afterShow('otherPosDetail');
                } else {
                    self.getPositionDetail(posId, function(data) {
                        var htmlContent = self.parseTemplate(TEMPLATE.SWIPER, data);
                        self.renderTemplate('.otherPosDetailCont', htmlContent);
                        self.showContent('otherPosDetail');
                        self.afterShow('otherPosDetail');
                    });
                }
            });

            //页面滚动到底部
            if ( initData.referSearch ) {
            	$doc.on('scroll.detailPage', function(event) {
                    // event.stopPropagation();
                    if (scrollTimer) clearTimeout(scrollTimer);
                    scrollTimer = setTimeout(function() {
                        handleScroll();
                    }, 100);
                });
        	}


            // $doc.on('click', '.openIcon', function(){
            //     var $that = $(this);
            // 	$that.css('display','none').parent().css('height','auto');
            //     self.resizePage({height: $that.data('hpx')>>0}, false);
            // });
        },
        getPositionDetail: function(posId, callback) {
            var self = this;
            $.ajax({
                type: 'get',
                url: '/touch/position/posInfo_action.ujson?_t=' + Math.random(),
                data: {
                    'm.type': 'ajax',
                    'm.posId': posId
                },
                beforeSend: function() {
                    ui.loading.show({id: 'posDetailLoading', z: 12});
                },
                complete: function() {
                    ui.loading.hide({id: 'posDetailLoading'});
                },
                error: function() {
                    alert('获取编号为：' + posId + '的职位信息时,请求出错!');
                },
                success: function(res) {
                    var result = util.toJSON(res);
                    if (result.success) {
                        if ( !Cache[self.posId].otherPosDetail ) Cache[self.posId].otherPosDetail = {};
                        Cache[self.posId].otherPosDetail[result.posId] = result;
                        callback && callback(result);
                    } else {
                        alert('编号为：' + posId + '的职位信息服务端返回false!');
                    }
                }
            });
        },
        getCompanyProfile: function(comId, callback) {
            var self = this;
            $.ajax({
                type: 'get',
                url: '/touch/position/comInfo_action.ujson',
                data: {
                    'm.comId': comId,
                    '_t': Math.random()
                },
                beforeSend: function() {
                    ui.loading.show({id: 'comProfileLoading', z: 12});
                },
                complete: function() {
                    ui.loading.hide({id: 'comProfileLoading'});
                },
                error: function() {
                    alert('获取编号为：' + comId + '的企业信息时,请求出错!');
                },
                success: function(res) {
                    var result = util.toJSON(res);
                    if (result.success) {
                        Cache[self.posId].comProfile = result;
                        callback && callback(result);
                    } else {
                        alert('编号为：' + comId + '的企业简介信息服务端返回false!');
                    }
                }
            });
        },
        getPositionList: function(pageNo, comId, callback) {
            var self = this;
            $.ajax({
                type: 'get',
                url: '/touch/position/comPosList_action.ujson',
                data: {
                    'pageNo': pageNo || 1,
                    'comId': comId,
                    '_t': Math.random()
                },
                error: function() {
                    alert('获取编号为：' + comId + '的企业的招聘信息列表时,请求出错!');
                },
                beforeSend: function() {
                    ui.loading.show({id: 'posListLoading', z: 12});
                },
                complete: function() {
                    ui.loading.hide({id: 'posListLoading'});
                },
                success: function(res) {
                    var result = util.toJSON(res);

                    if (result.posList.length > 0) {
                        var lastDeptName = '';
                        var lastDeptNum  = -1;
                        var allList      = [];
                        var DATA         = result.posList;
                        for (var i = 0, len = DATA.length; i < len; i++) {
                            if (lastDeptName != DATA[i].deptName) {
                                lastDeptNum++;
                                allList[lastDeptNum] = {
                                    deptName: DATA[i].deptName,
                                    posList: [{
                                        postDate: DATA[i].postDate,
                                        posName: DATA[i].posName,
                                        jobLoc: DATA[i].jobLoc,
                                        posId: DATA[i].posId
                                    }]
                                };
                            } else {
                                allList[lastDeptNum].posList.push({
                                    postDate: DATA[i].postDate,
                                    posName: DATA[i].posName,
                                    jobLoc: DATA[i].jobLoc,
                                    posId: DATA[i].posId
                                });
                            }
                            lastDeptName = DATA[i].deptName;
                        }

                        var tplData = {
                            posList: allList,
                            pageNo: pageNo,
                            pageCnt: result.pageCnt,
                            appendMode: pageNo === 1 ? false : true  // 首次渲染posList模板是采用$.html()插入，第二次则是加载更多职位，采用$.append()插入
                        };
                        var htmlContent = self.parseTemplate(TEMPLATE.POSLIST, tplData);

                        if (pageNo === 1) {  //首次加载
                            self.renderTemplate('.posListCont', htmlContent);
                            Cache[self.posId].otherPosList = tplData;
                        } else {
                            self.renderTemplate('.posListCont .p_list', htmlContent, true);
                            var listCache = Cache[self.posId].otherPosList;
                            //更新职位列表的页码
                            listCache.pageNo = pageNo;
                            listCache.pageCnt = result.pageCnt;
                            //追加新的职位数据到末尾
                            listCache.posList = listCache.posList.concat(allList);
                            if (pageNo >= result.pageCnt) $('.more_position', '.swiper-slide-active').addClass('hide');
                        }

                        if (!Cache[self.posId].otherPosList.posListPageNo) Cache[self.posId].otherPosList.posListPageNo = 1; // 初始化页码
                        // 更新页码，用于下次调用
                        Cache[self.posId].otherPosList.posListPageNo += 1;

                        callback && callback(result);
                    } else {
                        alert(res.msg || '该公司没有更多职位数据！');
                    }
                }
            });
        },
        showContent: function(type) {
            $activeSlide.find('.' + type + 'Cont').removeClass('hide').siblings('.body').addClass('hide');

            //其他职位详情页面不需要执行下面的动作
            if (type === 'otherPosDetail') return true;

            $activeSlide.find('.' + type).addClass('active').siblings('.menu_item').removeClass('active');
        },
        afterShow: function(type) {
            if (type !== 'otherPosDetail') {
                if (type !== 'posDetail') {  //公司简介、其他职位列表
                    $footBar.addClass('hide');
                    $footer.removeClass('hide');
                    this.resizePage({height: 20}, false);
                } else {  //职位详情
                    $footBar.removeClass('hide');
                    $footer.addClass('hide');
                    this.resizePage({height: 100}, false);
                }
            } else {  //其他职位详情
                window.scrollTo(0, 0);
                $pageView.hide();
                $pageBtn.hide();
                $activeSlide.find('.c_menu').hide();
                $footBar.removeClass('hide');
                $footer.addClass('hide');
                Buttons.updateGoBack().updateId( $activeSlide.find('#specPosId').val() );
                this.resizePage({height: 100}, false);
                pageSwiper && pageSwiper.lockSwipes();
            }
        },
        parseTemplate: function(template, data) {
            return juicer(template, data);
        },
        renderTemplate: function(selector, content, appendMode) {
            if (appendMode) {
                $activeSlide.find(selector).append(content);
            } else {
                $activeSlide.find(selector).html(content);
            }
        },
        updateId: function(data) {
            this.comId = data.comId.toString();
            this.posId = data.posId.toString();
        },
        resizePage: function(size, isFree) {
            if (!size) return false;
            var style = {};
            if (isFree) {
                style.height = size.height ? size.height : 'auto';
                style.width  = size.width ? size.width : 'auto';
                $swiperContainer.css(style);
            } else {
                var slideHeight = size.height ? $activeSlide.height() + size.height : $activeSlide.height();
                style.height    = slideHeight;
                $swiperContainer.css(style);
                docHeight = $fullScreen.height();
            }
        },
        resetState: function() {
            this.showContent('posDetail');
            $footer.addClass('hide');
            $footBar.removeClass('hide');
        },
        setOpenIcon: function(){
        	$activeSlide.find('.openIcon').parent().each(function(){
            	var $that  = $(this);
            	var mainHeight = $that.height();
            	var itemHeight = $that.children('dd').eq(0).height();
                var lineOuter  = mainHeight / itemHeight - 2;
            	if ( lineOuter > 0 ) {
            		$that.height( itemHeight * 2 );
            		$that.children('dt').css('display','inherit').data("hpx", lineOuter * itemHeight);
            	} else {
            		$that.children('dt').css('display','none');
            	}
            });
        },
        highlightKeyword: function() {
            var keyword = util.highlight.formatKeyword( decodeURIComponent(initData.keyword) );
            if (keyword && keyword.length) {
                var keywordRegex = new RegExp(keyword, 'ig');
                var highlightRegex = new RegExp('(' + keyword + ')', 'ig');
                var highlightElement = '<span style="color:#f30;">$1</span>';

                $activeSlide.find('.hlkw').each(function() {
                    var $this = $(this);
                    var content = $this.html();
                    var result = util.highlight.processing({
                        rawStr: content,
                        regex: {
                            keyword: keywordRegex,
                            highlight: highlightRegex
                        },
                        highlightElement: highlightElement
                    });
                    $this.html(result);
                });
            }
        }
    };

    function handleScroll() {
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if ( docHeight - clientHeight - scrollTop <= 100 ) {
            $footNextPos.addClass('active');
        } else {
            $footNextPos.removeClass('active');
        }
    }

    /**
     * 获取职位数据
     * @param  {String}   action    next|pre 上一个职位或下一个职位
     * @param  {Number}   posId     职位id
     * @param  {Boolean}  isBidding [description]
     * @param  {String}   keyword   搜索关键词
     * @param  {Function} callback  回调操作
     */
    function getResult(action, posId, isBidding, keyword, chgPage, chgCache, pageNo, callback) {

        $.ajax({
            type: 'POST',
			dataType: 'json',
            url: '/position/jobInfo.html',
            data: {
                /*'m.act': action,
                'm.posId': posId,
                'm.isBidding': isBidding,
                'm.keyword': keyword*/
				'act' : 'nextJob',
				'jobId' : posId,
				'action': action,
            },
            beforeSend: function() {
                if (!initData.enablePreLoad) ui.loading.show({id: 'getResultLoading', z: 12});
            },
            complete: function() {
                if (!initData.enablePreLoad) ui.loading.hide({id: 'getResultLoading'});
            },
            error: function() {
                alert('获取编号为：' + posId + '的职位详情出错!');
            },
            success: function(result) {
                //var result = util.toJSON(res);
                // 对薪资的'¥'实体符'&#165;'字符进行转换处理
                if (result.salaryDesc && result.salaryDesc.length) {
                    result.salaryDesc = result.salaryDesc.replace('&#165;', String.fromCharCode(165));
                }
                if (result.promotionPath) {
                	result.promotionPath = result.promotionPath.split(';');
                }

				//福利
                if (result.benefitTags) {
                	result.benefitTags = result.benefitTags.split(',');
                }

				//联系电话
				if(result.linkWayStr){
					result.linkWayStr = result.linkWayStr.split(',');
					//console.log(result.linkWayStr);
				}

                if (result.success) {
                    pageSwiper.unlockSwipes();
                    var htmlContent = juicer(TEMPLATE.SWIPER, result);
                    if (action === 'next') {
                        if (initData.enablePreLoad) {
                            pageSwiper.appendSlide(htmlContent);
                        } else {
                            $activeSlide.html( $(htmlContent).html() ).attr('loaded', true);
                            if (result.stepGetInfo.nextPosId.length > 0) pageSwiper.appendSlide(TEMPLATE.SWIPER_EMPTY);
                        }
                    }
                    if (action === 'pre') {
                        if (initData.enablePreLoad) {
                            pageSwiper.prependSlide(htmlContent);
                        } else {
                            $activeSlide.html( $(htmlContent).html() ).attr('loaded', true);
                            if (result.stepGetInfo.prePosId.length > 0) pageSwiper.prependSlide(TEMPLATE.SWIPER_EMPTY);
                        }
                    }
                    // TabPage.setOpenIcon();
                    //缓存职位数据
                    Cache.add(result.posId, result);
                    callback && callback(result);
                }
            }
        });
    }



    /**
     * 触平板判断是否登录的方法
     * @return {Boolean} 登录状态
     */
    function checkTouchLogined() {
        var isLogined = false;
        if (my === undefined || my === null || my.Person === undefined || my.Person === null || my.Person.perAccountId === undefined || my.Person.perAccountId === null || my.Person.perAccountId === "") {
            isLogined = false;
        } else {
            isLogined = true;
        }
        return isLogined;
    }

    /**
     *收藏职位
     */
	var _from = $('#from').val();
    function favourite(ids) {
        if ( Buttons.$favo.attr('ok') == ids ) {
            alert('已经收藏过该职位!');
            return;
        }

        //sendFavoriteAnalytics();
        //person.Session.check(function() {
            //var toUrlPar = "&ids=" + ids.join("&ids=");
            $.ajax({
                url: "/api/web/person.api?act=favourite_save&jid="+ids,
                type: 'POST',
				data: {
					'act': 'favourite_save',
					'jid': ids,
				},
				dataType: 'json',
                error: function() {
                    alert('请求出错!');
                },
                success: function(data) {
                    if (data.status==1) {

                        alert('收藏成功！');
                        Buttons.$favo.attr("ok",ids);
                    }else if(data.status==0 || data.status==-1){
						alert('您尚未登录，请先登录再收藏！');
						location.href = '/login.html?from='+_from;
					} else {
                        alert('收藏失败!');
                    }
                }
            });
        //});
    }

    /**
     *投递简历
     */
    function applyPost(ids) {
        //sendApplyingAnalytics();
        //person.Session.check(function() {
            $.ajax({
                url: '/api/web/job.api?act=join&jid='+ids,
                type: 'POST',
				dataType: 'json',
                success: function(json) {
                    if(json.status==0 || json.status==-1){
						alert('您尚未登录，请先登录再投递！');
						location.href = '/login.html?from='+_from;
					}else if(json.status==-100){
						alert('您还没有填写求职意向信息，请先完善简历！');
						//location.href = '/person/resume/getSubResume.html';
					}else if(json.status>0){
						alert(json.msg+'！');
                        if(json.status==1 && appT=="9GRIOS") startFunction(share);
					}else{
						alert(json.msg);
					}
                }
            });
        //});
    }

    function apply(re, resumeID, posID) {
        var d = {"ids":posID.join(","), "perResumeID":resumeID, "re_apply":re, "letter_idx":0, "relationFlag":""};
        $.ajax({
            url: "/person/apply/apply_online.xhtml?r=" + (+new Date()),
            data: d,
            type: 'post',
            beforeSend: function() {
                ui.mask.show({id:'applyMask',z:90});
                ui.loading.show({id:'applyLoad',z:91});
            },
            error: function() {
                alert('请求出错!');
                ui.mask.hide({id:'applyMask'});
                ui.loading.hide({id:'applyLoad'});
            },
            success: function(data) {
                ui.mask.hide({id:'applyMask'});
                ui.loading.hide({id:'applyLoad'});
                var $msg = '';
                if ( data.indexOf('<!DOCTYPE') > -1 ) {
                    $msg = '页面停留超时!请刷新!';
                } else {
                    var DATA = util.toJSON(data);
                    if (DATA.SUCCESS) {
                        var item = DATA.ps[0];
                        if (item.result == 1) {
                            $msg = '应聘成功!';
                        } else if (item.result == 0) {
                            $msg = item.detail.reason;
                        } else if (item.result == 2) {
                            $msg = "<p>您已在" + item.detail.per_time + "前已应聘" + item.detail.app_num + "次，</br>是否重新应聘?</p>";
                            $msg += '<div class="btn"><button class="box-ok">确定</button><button class="box-cancel">取消</button></div>';
                            var resultBox = new mBox($msg, {
                                title: '重新应聘',
                                width: 250,
                                className: 'confirm',
                                oncancel: function() {
                                    resultBox.close();
                                },
                                onok: function() {
                                    applyPost(1, resumeID, posID);
                                    resultBox.close();
                                }
                            });
                            resultBox.open();
                            return;
                        } else {
                            $msg = "未知状态!";
                        }
                    } else {
                        $msg = "未知错误!";
                    }
                }
                alert($msg);
            }
        });
    }

    /**
     * --JOBCNX-1434 m.jobcn.com 的"收藏"和"应聘"事件跟踪
     * --这里修改的是触平板的收藏。
     */
    function sendFavoriteAnalytics() {
        var isLogined = checkTouchLogined();
        if (!isLogined) {
            _gaq.push(['_trackEvent', '收藏/未登录', 'click', 'click', 0, true]);
        } else {
            _gaq.push(['_trackEvent','收藏/已登录', 'click', 'click', 0, true]);
        }
    }

    /**
     * --JOBCNX-1434 m.jobcn.com 的"收藏"和"应聘"事件跟踪
     * --这里修改的是触平板的应聘。
     */
    function sendApplyingAnalytics() {
        var isLogined = checkTouchLogined();
        if (!isLogined) {
            _gaq.push(['_trackEvent', '应聘/未登录/1', 'click', 'click', 0 ,true]);
        } else {
            _gaq.push(['_trackEvent', '应聘/已登录/1', 'click', 'click', 0 ,true]);
        }
    }

    var API = {
        getPositionList: function(pageNo, comId, callback) {
            $.ajax({
                type: 'get',
                url: '/touch/position/comPosList_action.ujson',
                data: {
                    'pageNo': pageNo || 1,
                    'comId': comId,
                    '_t': Math.random()
                },
                error: function() {
                    alert('获取编号为：' + comId + '的企业的招聘信息列表时,请求出错!');
                },
                beforeSend: function() {
                    ui.loading.show({id: 'posListLoading', z: 12});
                },
                complete: function() {
                    ui.loading.hide({id: 'posListLoading'});
                },
                success: function(res) {
                    var result = util.toJSON(res);

                    if (result.posList.length > 0) {
                        var lastDeptName = '';
                        var lastDeptNum  = -1;
                        var allList      = [];
                        var DATA         = result.posList;
                        for (var i = 0, len = DATA.length; i < len; i++) {
                            if (lastDeptName != DATA[i].deptName) {
                                lastDeptNum++;
                                allList[lastDeptNum] = {
                                    deptName: DATA[i].deptName,
                                    posList: [{
                                        postDate: DATA[i].postDate,
                                        posName: DATA[i].posName,
                                        jobLoc: DATA[i].jobLoc,
                                        posId: DATA[i].posId
                                    }]
                                };
                            } else {
                                allList[lastDeptNum].posList.push({
                                    postDate: DATA[i].postDate,
                                    posName: DATA[i].posName,
                                    jobLoc: DATA[i].jobLoc,
                                    posId: DATA[i].posId
                                });
                            }
                            lastDeptName = DATA[i].deptName;
                        }

                        callback && callback(allList);
                    } else {
                        alert(res.msg || '该公司没有更多职位数据！');
                    }
                }
            });
        }
    };

    module.exports = {
        init: function(params) {
            initData = params;
            initData.keyword = util.url.getPar('keyword');
            person.updateInfo();
            //从非搜索结果列表页进来的，不需要弹出滑动提示
            if (initData.referSearch) {
                //初次访问弹出滑动提示
                var stip = util.cookie.get('stip');
                if (!stip && stip !== '1') {
                    $('#swipe-tip').show().on('touchmove swipe touch click', function(event) {
                        event.preventDefault();
                        util.cookie.set('stip', '1', {path: '/position/'});
                        $(this).hide();
                    });
                }
            }
            TabPage.init(initData);
            Buttons.init();
            this.initGoTop();
        },
        getPositionList: API.getPositionList,
        initGoTop: function(){
        	var timer = null;
        	var $win = $(window);
			var $globGotop = $('#global-gotop');
			$win.on('scroll.allPage', function() {
				handleScroll();
			});
			function handleScroll() {
				if (timer) clearTimeout(timer);
				timer = setTimeout(function() {
					var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
					if (scrollTop > 50) {
						$globGotop.removeClass('fadeOut').addClass('fadeIn');
					} else {
						$globGotop.removeClass('fadeIn').addClass('fadeOut');
					}
				}, 100);
			}
        },
        initComDetail: function (){
        	var $comDetail = $("#comDetail");
        	var $comContent= $comDetail.find(".comContent");
        	var $comIcon   = $comDetail.find(".comIcon");
        	var comHeight  = $comDetail.css("line-height").replace("px","") * 8;
        	if ( $comDetail.height() > comHeight ) {
        		$comContent.css("height", comHeight);
        		$comIcon[0].style.display = "inline-block";
        		$comIcon.one("click", function(){
        			$comIcon[0].style.display = "none";
        			$comContent.css("height","auto");
        		})
        	}
        	this.initGoTop();
        },
        initPosList: function(){
        	this.initGoTop();
        	// Buttons.bindGoBack();
            //加载下20条职位信息
            var comId = $("#comInfo").data("com");
            $doc.on('click', '.more_position', function(event) {
                event.stopPropagation();
                var $that = $(this);
                $.ajax({
                    type: 'get',
                    url: '/touch/position/comPosList_action.ujson',
                    data: {
                        'pageNo': $that.data("page") || 2,
                        'comId': comId,
                        '_t': Math.random()
                    },
                    error: function() {
                        alert('获取编号为：' + comId + '的企业的招聘信息列表时,请求出错!');
                    },
                    beforeSend: function() {
                        ui.loading.show({id: 'posListLoading', z: 12});
                    },
                    complete: function() {
                        ui.loading.hide({id: 'posListLoading'});
                    },
                    success: function(res) {
                        var result = util.toJSON(res);

                        if (result.posList.length > 0) {
                            var lastDeptName = '';
                            var lastDeptNum  = -1;
                            var allList      = [];
                            var DATA         = result.posList;
                            var pageNo       = $that.data("page")>>0 || 2;
                            for (var i = 0, len = DATA.length; i < len; i++) {
                                if (lastDeptName != DATA[i].deptName) {
                                    lastDeptNum++;
                                    allList[lastDeptNum] = {
                                        deptName: DATA[i].deptName,
                                        posCount: result.deptInfo[DATA[i].deptName],
                                        posList: [{
                                            postDate: DATA[i].postDate,
                                            posName: DATA[i].posName,
                                            jobLoc: DATA[i].jobLoc,
                                            posId: DATA[i].posId,
                                            postDateDesc: DATA[i].postDateDesc,
                                            salaryDesc: DATA[i].salaryDesc.replace('&#165;',String.fromCharCode(165))
                                        }]
                                    };
                                } else {
                                    allList[lastDeptNum].posList.push({
                                        postDate: DATA[i].postDate,
                                        posName: DATA[i].posName,
                                        jobLoc: DATA[i].jobLoc,
                                        posId: DATA[i].posId,
                                        postDateDesc: DATA[i].postDateDesc,
                                        salaryDesc: DATA[i].salaryDesc.replace('&#165;',String.fromCharCode(165))
                                    });
                                }
                                lastDeptName = DATA[i].deptName;
                            }

                            var tplData = {
                                posList: allList,
                                pageNo: pageNo,
                                pageCnt: result.pageCnt
                            };

                            var $htmlContent = $(TabPage.parseTemplate(TEMPLATE.POSLIST, tplData));
                            var $itemBody = $('.list_pos .item_body');
                            if ( tplData.posList[0]["deptName"] == $itemBody.find("h4").last().children("span").text() ){
                                $htmlContent = $htmlContent.slice(1);
                            }
                            $('.list_pos .item_body').append($htmlContent);
                            $that.data("page", ++pageNo);
                            if ( pageNo > result.pageCnt  ) {
                                $('.more_position').hide();
                            }
                        } else {
                            alert(res.msg || '该公司没有更多职位数据！');
                        }
                    }
                });
            });
        }
    };
});
