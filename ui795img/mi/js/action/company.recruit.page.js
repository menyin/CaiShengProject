/**
* 公司招聘专页
**/
define(function(require, exports, module) {
    var $ = require('zepto');
    // var util = require('util');
    var Swiper = require('swiper');
    // var wx  = require('weixin');
    var out = {};
    var allBoxes = [];
    var comId  = $('[name="comId"]').val();
    var suffix = $('[name="weixin"]').length ? '/weixin' : '/position';
    out.initSearch = function () {
        var $container = $('.container');
        var resultTpl  = [];
        var ajaxData   = null;
        var $resultListHtml = null;
        var $searchResult = $('#searchResult');

        resultTpl.push('<div class="search_result">');
        resultTpl.push(    '<div class="result_num">');
        resultTpl.push(        '{{number}}个搜索结果');
        resultTpl.push(    '</div>');
        resultTpl.push(    '<ul class="search_list">');
        resultTpl.push(        '{{resultList}}');
        resultTpl.push(    '</ul>');
        resultTpl.push(    '<div class="more" style="display:none">');
        resultTpl.push(        '<a>点击查看更多...</a>');
        resultTpl.push(    '</div>');
        resultTpl.push('</div>');
        resultTpl = resultTpl.join('') ;

        var renderData = function  (posData) {
            var posCounts = posData.comIdArray.length;
            var cacheData = posData.comIdArray.splice( 0, 5);
            var listHtml  = cacheData.map(function (o) {
                return '<li><a href="/touch/company/homepage/default.xhtml?comId=' + o + '">' + posData.comMap[o] + '</a></li>';                
            }).join('');
            // 第一次请求数据
            if ( !$resultListHtml ) {
                $resultListHtml = $( resultTpl.replace('{{resultList}}', listHtml).replace('{{number}}', posCounts) );
                posData.comIdArray.length && $resultListHtml.find('.more').css('display', 'block');
                $searchResult.html('').append($resultListHtml);
            } else{
                $searchResult.find('.search_list').append(listHtml);
                !posData.comIdArray.length && $resultListHtml.find('.more').css('display', 'none');
            }
        };

        $container.on('singleTap', '.btn', function () {
            var inputVal =  $container.find('input').val();
            if ( !inputVal.length ) return;
            $.get( '/touch/company/homepage/search_json.xhtml?comName=' + inputVal, function (data) {
                ajaxData = JSON.parse(data) ;
                $resultListHtml = null;
                if ( ajaxData && ajaxData.comIdArray && ajaxData.comIdArray.length ) {
                    $container.addClass('active').closest('.main').css('overflow', 'visible');
                    setTimeout(function () {
                        renderData( ajaxData);
                    },300);                    
                } else{
                    $container.removeClass('active').closest('.main').css('overflow', 'hidden');
                    setTimeout(function () {
                        $searchResult.html('<div class="msg_error">卓博网上暂时还没有该公司的招聘信息，请在电脑上登录卓博人才网（www.jobcn.com）发布职位，即可自动生成你的移动专页。</div>');
                    },300); 
                }
            });            
        });

        $searchResult.on('singleTap', '.more', function () {
            setTimeout(function(){
                renderData( ajaxData );
            },300);
            
        });
    };

    out.initProfile = function() {

        var welfares = ['食宿福利','法定假期','津贴补助','社会保障','奖金激励','免费服务'];
        var welfareHtml = '<div class="welfare_list" >' 
                            +'<ul class="clearfix">'
                            +    '<li class="hide"><div class="box"><div class="pic"><img src="/touch/commImage/company/welfare1.gif"/></div><span>食宿福利</span></div></li>'
                            +    '<li class="hide"><div class="box"><div class="pic"><img src="/touch/commImage/company/welfare2.gif"/></div><span>法定假期</span></div></li>'
                            +    '<li class="hide"><div class="box"><div class="pic"><img src="/touch/commImage/company/welfare3.gif"/></div><span>津贴补助</span></div></li>'
                            +    '<li class="hide"><div class="box"><div class="pic"><img src="/touch/commImage/company/welfare4.gif"/></div><span>社会保障</span></div></li>'
                            +    '<li class="hide"><div class="box"><div class="pic"><img src="/touch/commImage/company/welfare5.gif"/></div><span>奖金激励</span></div></li>'
                            +    '<li class="hide"><div class="box"><div class="pic"><img src="/touch/commImage/company/welfare6.gif"/></div><span>免费服务</span></div></li>'
                            +'</ul>'
                            +'<div class="other hide">还有自定义等等。</div>'
                        +'</div>';
        var $welfare = null;
        var $welfareLi = null;
        var mySwiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            //pagination: '.swiper-pagination',
            //virtualTranslate : true,
            mousewheelControl: true,
            onInit: function(swiper) {
                // swiperAnimateCache(swiper);
                // swiperAnimate(swiper);
            },
            onTransitionStart: function (swiper) {
                if ( !!~swiper.slides[swiper.activeIndex].className.indexOf('com_welfare') && !$welfare ) {
                    $.get( '/touch/company/homepage/benefitTags.xhtml?comId='+comId,function (data) {
                        $welfare = $(welfareHtml);
                        $welfareLi = $welfare.find('li');
                        data = JSON.parse(data);
                        if ( typeof data === 'object' ) {
                            var keys  = Object.keys(data);
                            var index = 0;
                            for (var i = keys.length - 1; i >= 0; i--) {
                                index = welfares.indexOf(keys[i]);
                                if ( keys[i] === '自定义' ) {
                                    var selfText = data[keys[i]].slice(0,5).map(function(o){                                            
                                        return o.key;
                                    }).join('、');
                                    $welfare.children('.other').text( '还有' + selfText +'等等。' ).removeClass('hide');
                                }
                                !!~index && $welfareLi.eq(index).removeClass('hide');
                            };
                            $welfare.find('.hide').remove();
                            $('.com_welfare .container').append($welfare);
                        }
                    },'json');
                }
            },
            onTransitionEnd: function(swiper) {
                
                // swiperAnimate(swiper);
            },

            watchSlidesProgress: true,

            onSetTransition: function(swiper, speed) {
                
            }
        });

        out.share();
        
    };

    out.initProfileV2 = function(){
        var $comWelfareSlideNav = $('.com_welfare_list').find('.m_slide_nav');
        var $comPicSlideNav = $('.com_picture').find('.m_slide_nav');
        var $comWelfareSlideNavList = $comWelfareSlideNav.find('li');
        var $comPicSlideNavList = $comPicSlideNav.find('li');
        var $context = $('#context');
        var $openTxt = $('.com_profile_open');
        var $closeTxt = $('.com_profile_close');
        var $wholeText = $context.find('p');
        if($context.height() >= $wholeText.height()){
            //文本过短不显示"展开"
            $openTxt.addClass('hide');
        }
        $openTxt.on('singleTap',function(){
            var $this = $(this)
            $context.removeClass('com_profile_text');
            $this.addClass('hide');
            $closeTxt.removeClass('hide');
        })
        $closeTxt.on('singleTap',function(){
            var $this = $(this)
            $context.addClass('com_profile_text');
            $this.addClass('hide');
            $openTxt.removeClass('hide');
            window.scrollTo(0, $context.offset().top);
        })


        var initSwiper = function (selector,navList,options){
            if(!options) options={};
            new Swiper(selector, {
                direction: options.direction||'horizontal',
                //mousewheelControl: true,
                watchSlidesProgress: true,
                onInit: function(swiper) {
                },
                onTransitionStart: function (swiper) {
                    navList.removeClass('active');
                    navList.eq(swiper.activeIndex).addClass('active');
                    options.onTransitionStart && options.onTransitionStart(swiper);
                },
                onTransitionEnd: function(swiper) {

                },
                onSetTransition: function(swiper, speed) {
                }
            });
        }
        var comPicSwiper = initSwiper('.pic-swiper-container',$comPicSlideNavList);
        var welfareSwiper = initSwiper('.welfare-swiper-container',$comWelfareSlideNavList);

        // var $playerHome = $('#playerHome');
        // if ( $playerHome.length ) {
        //     var videoUrl = $playerHome.data('url');
        //     if(!util.isEmpty(videoUrl)){
        //         var youkuId  = videoUrl.match(/sid\/(.*)\//);
        //         $playerHome.css({'height':'220px'})
        //         require.async('http://player.youku.com/jsapi#', function() {
        //             var player = new window.YKU.Player('playerHome', {
        //                 client_id: 'ce960adb359ce9f2',
        //                 vid: youkuId[1],
        //                 autoplay: false,
        //                 prefer : "h5",
        //                 events: {
        //                     onPlayerReady: function() {},
        //                     onPlayStart: function() {},
        //                     onPlayEnd: function() {}
        //                 }
        //             });
        //         });
        //     }
        // }

        out.share();
    };

    out.share = function(){
        var $bubblePage = $('#bubblePage');
        $('#share').on('click', function () {
            setTimeout(function(){
                if ( suffix == '/weixin' ) {
                    $bubblePage.show();
                } else{
                    alert('微信客户端才可分享');
                }
            },200);
        });
        $bubblePage.on('click',function () {
            $(this).hide();
        });

        if ( window.top != window.self ) {
            $('a[href]').attr('href', 'javascript:;');
        }
        var comUrl  = window.location.href;//.replace('&showShare=true','');
        var companyName = '',logoSrc = '';
        if(/touch\/position\/comPosList/.test(comUrl)){
            var $comInfo = $('#comInfo');
            companyName = $comInfo.find('.title').text();
            logoSrc = $comInfo.find('img').attr('src');
        }else if(/touch\/company\/homepage\/default/.test(comUrl)){
            companyName = $('.com_base_name').text() || $('.com_name').text();
            logoSrc = $('.com_base_logo').find('img').attr('src') || $('.logo_box img').attr('src');
        }

        /*if ( wx ) {            
            $.getJSON('/weixin/getJsapiSignature.ujson?url='+encodeURIComponent(comUrl), function(data){                
                wx.config( $.extend( {}, {jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","onMenuShareQZone"]}, data ) );
                wx.ready(function(){
                    wx.checkJsApi({
                        jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","onMenuShareQZone"], // 需要检测的JS接口列表，所有JS接口列表见附录2,
                        success: function(res) {
                            // 以键值对的形式返回，可用的api值true，不可用为false
                            // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
                            var getWxObj = function(type){
                                return {
                                    title:'【' + companyName + '】最新职位火热招聘中，我们期待你的加入！',
                                    link: comUrl.replace('&showShare=true',''), // 分享链接
                                    imgUrl: logoSrc,//$('.logo_box img').attr('src'), // 分享图标
                                    success:function(){
                                        _hmt && _hmt.push(['_trackEvent', 'P_EntMobileHomepage_Share', 'click']);
                                        comId && type &&  $.ajax({
                                            url: '/touch/company/homepage/addLog.ujson',
                                            type: 'POST',
                                            data:{
                                              comId:comId,
                                              type: type
                                            }
                                        })
                                    }
                                }
                            }
                            //分享到朋友圈                            
                            wx.onMenuShareTimeline(getWxObj(3));
                            //分享给朋友                            
                            wx.onMenuShareAppMessage(getWxObj(2));                            
                            //分享到QQ
                            wx.onMenuShareQQ(getWxObj(0));
                            //分享到腾讯微博
                            wx.onMenuShareWeibo(getWxObj(0));
                            //分享到QQ空间
                            wx.onMenuShareQZone(getWxObj(0));
                        }
                    });
                });
            });
        }*/
    };
    module.exports = out;
})