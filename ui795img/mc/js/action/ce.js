/**
 * 测评——测试题
 * 笑谈东莞话
 * 2014-8-26 by alex(8914)
 */
define(function(require, exports, module) {
    var $ = require("$"),
        ui = require("ui.base");

    var store = "localStorage" in window && window["localStorage"] && localStorage;

    var totalQuestion = parseInt($("body").data("all")) || 0,
        score = 0;

    var optionMap = {
        "A": 0,
        "B": 1,
        "C": 2,
        "D": 3
    };

    var root = "http://" + window.location.host,
        imgRoot = root + "/touch/ce/xtdgh/images/";

    var appid = "";
    var title = desc = "小伙伴们快来笑谈东莞话吧！";
    var _scoreTpl = function(score) { return "好不容易在笑谈东莞话中获得" + score + "分！试试你就知有多坑！" };
    var img_url = root + "/touch/ce/xtdgh/images/share_img4.png";
    var link = url = root + "/touch/ce/xtdgh/index.jsp";
    var img_width = 200;
    var img_height = 200;

    var testResult;
    var allResults = [
        {
            upper: 100,
            lower: 100,
            badge: imgRoot + "result_top.png",
            shareImg: imgRoot + "share_img.png",
            tpl: "<p>你满口的东莞话不分白天黑夜是吧？竟在终极测评中获得<span>{{score}}</span>分！棒棒哒！</p>"
        },
        {
            upper: 99,
            lower: 85,
            badge: imgRoot + "result_top1.png",
            shareImg: imgRoot + "share_img1.png",
            tpl: "<p>你的“莞”味气质与日俱增得让我吃惊。竟在终极测评中获得<span>{{score}}</span>分！好腻害~~</p>"
        },
        {
            upper: 84,
            lower: 70,
            badge: imgRoot + "result_top2.png",
            shareImg: imgRoot + "share_img2.png",
            tpl: "<p>你还真是毫不掩饰你是东莞人的身份啊！！竟在终极测评中获得<span>{{score}}</span>分！你是怎么做到的？</p>"
        },
        {
            upper: 69,
            lower: 50,
            badge: imgRoot + "result_top3.png",
            shareImg: imgRoot + "share_img3.png",
            tpl: "<p>亲，你是为了看起来像东莞人而来玩的么？竟在终极测试中获得<span>{{score}}</span>分，好业余的赶脚！</p>"
        },
        {
            upper: 50,
            lower: 0,
            badge: imgRoot + "result_top4.png",
            shareImg: imgRoot + "share_img4.png",
            tpl: "<p>你什么都不明白，你脑子里勾的是芡啊？在终极测试中居然才<span>{{score}}</span>分！真的是no zuo no die！</p>"
        }
    ];

    out = {
        init: function(){
            out.initTestPage();
            out.lazyImg();
            out.bindRadio();
            out.nextItem();
            out.finishTest();
            out.initShare();
            out.btmClose();
            out.initLinkBtn();
        },

        initIndex: function(){
            if (store) {
                store['startToTest'] = 1;
            }
        },

        // 根据来源页面及是否测试来决定是否显示已测结果
        initTestPage: function(){
            $(function(){
                if (store && !store['startToTest'] && store["xtdgh"]) {
                    score = parseInt(store["xtdghScore"]);
                    out.showResult();
                } else {
                    store.removeItem('startToTest');
                    $(".question").eq(0).show();
                }
                $("#loading").hide();
            });
        },

        // 延迟加载图片，且第一张图片 lazyTime(=10s) 之后未加载完成，则不再加载图片
        lazyImg: function(){
            var imgs = $("img[data-lazy-src]"),
                firstImg = imgs.eq(0),
                tmpImg = $("<img />"),
                lazyTime = 10;

            var start = Date.now(),
                end = null;

            tmpImg.on("load", function(){

                end = Date.now();

                if ((end - start)/1000 < lazyTime) {

                    firstImg.attr("src", firstImg.data("lazy-src"));
                    imgs.each(function(idx, img) {
                        var img = $(img),
                            tmp = $("<img />");

                            tmp.on("load", function(){
                                img.attr("src", img.data("lazy-src"));
                                tmp.remove();
                            });
                        tmp.attr("src", img.data("lazy-src"));
                    });
                }
                tmpImg.remove();
            });

            tmpImg.attr("src", firstImg.data("lazy-src"));
            setTimeout(function(){
                end || (tmpImg && tmpImg.remove());
            }, lazyTime * 1000);
        },

        // 单选框事件处理
        // 统计分数
        // 正确，判断是否完成测试，完成则显示测试结果，否则显示下一题，
        // 错误则显示答案与解释
        bindRadio: function(){
            var last = null;
            var delta = {};

            $(".options").on("touchstart", function(e){
                // clientX/clientY 在 iOS 4 及 Android 4.0 某些浏览器中会错误，如果放大或滚动页面的话
                // https://gist.github.com/gregersrygg/3828586
                delta.y1 = e.touches[0].pageY - window.pageYOffset;
                delta.y2 = void 0;
            }).on("touchmove", function(e){
                delta.y2 = e.touches[0].pageY - window.pageYOffset;
            });

            $(".options").on("tap", "li", function(){

                // 防止滑动/滚动时执行
                if (delta.y2 && Math.abs(delta.y1 - delta.y2) > 10) {
                    return;
                }

                // 阻止多次点击
                if (last != $(this).closest(".options")[0]) {
                    last = $(this).closest(".options")[0];
                } else {
                    return;
                }

                var question = $(this).closest(".question"),
                    rightAnswer = question.find(".right_answer").val(),
                    radio = $(this).find("input"),
                    radioIdx = $(this).index();

                radio.prop("checked", "checked");

                score += parseInt(radio.val(), 10);

                setTimeout(function(){

                    // 如果回答正确
                    if (radioIdx == optionMap[rightAnswer]) {

                        radio.siblings("label").css("color", "#0ad");
                        alert("回答正确", 600);

                        setTimeout(function(){

                            // 如果是最后一道题
                            if (question.data("id") == totalQuestion) {
                                out.showResult();
                            } else {
                                question.hide()
                                        .next().next(".question").show();
                                // zepto1.1+才开始支持 scrollTop() 设置值，即滚动到某处
                                window.scrollTo(0, 0);
                            }
                        }, 1000);
                    } else { // 如果回答错误

                        radio.siblings("label").css("color", "#d00");
                        alert("回答错误", 500);
                        setTimeout(function(){
                            question.hide().next(".answer").show();
                            window.scrollTo(0, 0);
                        }, 1000);
                    }
                }, 300);

            });

        },

        // 显示下一道题
        nextItem: function(){
            $(".next_btn").on("tap", function(){
                var self = this;
                setTimeout(function(){
                    if ($(self).closest(".answer").prev(".question").data("id") == totalQuestion) {
                        out.showResult();
                    } else {
                        $(self).closest(".answer").hide()
                                .next(".question").show();
                        window.scrollTo(0, 0);
                    }
                }, 300);
            });

        },

        // 完成测试
        finishTest: function(){
            $(".finish_btn").on("tap", function(){
                out.showResult();
            });
        },

        // 显示测试结果
        showResult: function(){
            setTimeout(function(){
                $(".question, .answer").hide();

                allResults.forEach(function(v) {
                    if (score >= v.lower && score <= v.upper) {
                        testResult = v;
                    }
                });

                if (store) {
                    store["xtdgh"] = 1;
                    store["xtdghScore"] = score;
                }

                $("#badge").attr("src", testResult.badge);
                $("#result_text").html($(testResult.tpl.replace(/{{score}}/, score)));
                $("#result").show();

                if (WeixinJSBridge && WeixinJSBridge.on) {
                    out.wxShare();
                }
            }, 1000);
        },

        // 关闭底部推广
        btmClose: function(){
            $("#btm_close").on("tap", function(e){
                e.preventDefault();
                $(this).closest(".btm").hide();
            });
        },

        // 初始化分享按钮
        initShare: function(){
            $("#share").on("tap", function(){
                $("#share_mask").on("tap", function(){
                    $(this).addClass("hide");
                    $(".btm").css({
                        "top": 0,
                        "bottom": "auto"
                    });
                });

                $("#share_mask").removeClass("hide");
                $(".btm").css({
                    "top": "auto",
                    "bottom": 0
                });
            });

            $(document).on("WeixinJSBridgeReady", function(){
                out.wxShare();
            });
        },

        // 微信分享时调用
        preShare: function(){
            if (store && store["xtdghScore"]) {
                score = parseInt(store["xtdghScore"]);
                allResults.forEach(function(v) {
                    if (score >= v.lower && score <= v.upper) {
                        testResult = v;
                    }
                });
            }
        },

        // 绑定微信分享
        wxShare: function(){
            WeixinJSBridge.on("menu:share:appmessage", function(){
                out.preShare();
                out.sendAppMessage();
            });
            WeixinJSBridge.on("menu:share:timeline", function(){
                out.preShare();
                out.shareTimeline();
            });
            WeixinJSBridge.on("menu:share:weibo", function(){
                out.preShare();
                out.shareWeibo();
            });            
        },

        // 发送给朋友
        sendAppMessage: function(){
            var isTested = typeof testResult != "undefined";
            WeixinJSBridge.invoke("sendAppMessage", {
                "appid": appid,
                "title": title,
                "desc": isTested ? _scoreTpl(score)
                        : desc,
                "link": link,
                "img_url": isTested ? testResult.shareImg 
                        : img_url,
                "img_width": img_width,
                "img_height": img_height
            }, function(e) {});
        },

        // 微信分享到朋友圈
        shareTimeline: function(){
            var isTested = typeof testResult != "undefined";
            WeixinJSBridge.invoke("shareTimeline", {
                "title": isTested ? _scoreTpl(score)
                        : title, 
                "desc": isTested ? _scoreTpl(score)
                        : desc, 
                "link": link,
                "img_url": isTested ? testResult.shareImg 
                        : img_url,
                "img_width": img_width,
                "img_height": img_height
            }, function(e) {});
        },

        // 分享到腾讯微博
        shareWeibo: function(){
            var isTested = typeof testResult != "undefined";
            WeixinJSBridge.invoke("shareWeibo", {
                "content": isTested ? _scoreTpl(score)
                        : title,
                "url": url
            }, function(res) {});
        },

        // 跳转按钮
        initLinkBtn: function(){
            $("[data-href]").on("touchstart", function(e){
                if (/:\/\//.test($(this).data("href"))) {
                    location.href = $(this).data("href");
                } else {
                    location.href = root + $(this).data("href");
                }
            });
        },

        // 发送邮件
        initSendMail: function(){
            var $content = $("#content");
            function checkInput() {
                //Checking name
                if(!$content.val()){
                    alert("请填写题目内容！", 1000);
                    return false;
                }
                return true;
            }
            
            //发送Email  Sending Email
            $("#submitBtn").on("tap",function(e){
                if(!checkInput()) return false;
                $.ajax({
                    url : "/touch/ce/xtdgh/subQuestion.ujson",
                    type : "post",
                    data : $("#thisForm").serialize(),
                    timeout : 30000,
                    success : function(data){
                        $("#mask").show();
                    },
                    error : function(data){
                        alert("发生错误，请重试！");
                    }
                });
            });
        },

        // 设置正确选项
        initDef: function(){
            $(".answer_list").on("tap", "label", function(){
                var curOption = $(this).find("input[name='hasAnswer']");
                curOption.prop("checked", "checked");
                curOption.next("span").css("color", "#0a0").text("正确");
                $(this).closest("li").siblings()
                        .find("label span").css("color", "").text("错误");
            });
        },
        
        initSetPage: function(){
            $("#thisForm").show();
            out.initDef();
            out.initSendMail();
            out.initShare();
            out.initLinkBtn();
        }
    };

    module.exports = out;

});