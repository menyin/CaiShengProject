define(function(require, exports, module) {
    var $ = require('zepto');
    var Swiper = require('swiper');
    var wx = require('http://res.wx.qq.com/open/js/jweixin-1.0.0.js');
    var pageSwiper = null;
    var $activeSlide = null;
    var $prevSlide = null;
    var out = {};

    function initSwipe() {
        pageSwiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            speed: 500,
            height: window.innerHeight,
            nextButton: '.next_button'
        });
    }

    function initWeChatShare() {
        if (wx) {
            $.getJSON('/weixin/getJsapiSignature.ujson?url=' + encodeURIComponent(window.location.href), function(data){
                wx.config( $.extend( {}, {jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","onMenuShareQZone"]}, data ) );

                wx.ready(function(){
                    wx.checkJsApi({
                        jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","onMenuShareQZone"],
                        success: function(res) {
                            var shareTitle = '60秒了解597人才网，请查收！';
                            var shareDesc = '597一直致力于为企业和求职者提供更便捷、更高效的招聘求职体验。选择597，597就能帮到你！';
                            var shareImgUrl = window.location.protocol + '//' + window.location.host + '/touch/commImage/wechat_share_icon.jpg';
                            var shareLink = window.location.href;

                            //分享到朋友圈
                            wx.onMenuShareTimeline({
                                title: shareTitle,
                                link: shareLink,
                                imgUrl: shareImgUrl
                            });
                            //分享给朋友
                            wx.onMenuShareAppMessage({
                                title: shareTitle,
                                desc: shareDesc,
                                link: shareLink,
                                imgUrl: shareImgUrl, // 分享图标
                                type: 'link'
                            });
                            //分享到QQ
                            wx.onMenuShareQQ({
                                title: shareTitle,
                                desc: shareDesc,
                                link: shareLink,
                                imgUrl: shareImgUrl, // 分享图标
                                type: 'link'
                            });
                            //分享到腾讯微博
                            wx.onMenuShareWeibo({
                                title: shareTitle,
                                desc: shareDesc,
                                link: shareLink,
                                imgUrl: shareImgUrl, // 分享图标
                                type: 'link'
                            });
                            //分享到QQ空间
                            wx.onMenuShareQZone({
                                title: shareTitle,
                                desc: shareDesc,
                                link: shareLink,
                                imgUrl: shareImgUrl, // 分享图标
                                type: 'link'
                            });
                        }
                    });
                });
            });
        }
    }

    out.initPage = function() {
        initSwipe();
        initWeChatShare();
    }

    module.exports = out;
});
