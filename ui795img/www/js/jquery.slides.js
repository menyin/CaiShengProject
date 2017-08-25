/*
* Slides, A Slideshow Plugin for jQuery
* Intructions: http://slidesjs.com
* By: Nathan Searles, http://nathansearles.com
* Version: 1.1.9
* Updated: September 5th, 2011
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
(function($) {
    $.fn.slides = function(option) {
        // override defaults with specified option
        option = $.extend({}, $.fn.slides.option, option);
        return this.each(function() {
            // wrap slides in control container, make sure slides are block level
            $('.' + option.container, $(this)).children().wrapAll('<div class="slides_control"/>');

            var elem = $(this),
                control = $('.slides_control', elem),
                total = control.children().size(),
                width = control.children().outerWidth(),
                height = control.children().outerHeight(),
                start = option.start - 1,
                next = 0, prev = 0, number = 0, current = 0, loaded, active, clicked, position, direction, imageParent, pauseTimeout, playInterval,imgs=new Array();
        
            if(option.imageSrc!=''&&option.isDynamicLoading){
               imgs=option.imageSrc.split(',');
            }
            // is there only one slide?
            if (total < 2) {
                // Fade in .slides_container
                $('.' + option.container, $(this)).fadeIn(option.fadeSpeed, option.fadeEasing, function() {
                    // let the script know everything is loaded
                    loaded = true;
                    // call the loaded funciton
                    option.slidesLoaded();
                });
                // Hide the next/previous buttons
                $('.' + option.next + ', .' + option.prev).fadeOut(0);
                return false;
            }
            
            function setImage(index){
                if($('#imgShow'+index).html()==""){
                     // adds preload image
                    $('.' + option.container, elem).css({
                        background: 'url(' + option.preloadImage + ') no-repeat 50% 50%'
                    });
                    var imgSrc=imgs[index-1];
                    $('#imgShow'+index).load(function(){
                         // remove preload image
                        $('.' + option.container, elem).css({
                            background: ''
                        });
                    }).html($('<img/>').attr('src',imgSrc));   
                }
            }
            
            function setImages(index){
                for(var i=0;i<option.loadCount;i++){
                    if($('#imgAdvert3Show'+(option.loadCount*index+i)).html()==""){
                         // adds preload image
                        if(i==option.loadCount-1){
                            $('.' + option.container, elem).css({
                                background: 'url(' + option.preloadImage + ') no-repeat 50% 50%'
                            });
                        }
                        var imgSrc=imgs[i+(index-1)*3];
                        $('#imgAdvert3Show'+(option.loadCount*index+i)).html($('<img/>').attr('src',imgSrc).css({'width':'113px;','height':'60px','border':'0'})); 
                         if(i==option.loadCount-1){
                            $('.' + option.container, elem).css({
                                background: ''
                            });
                        }
                    }
                }
            }
            
            // animate slides
            function animate(direction, clicked) {
                if (!active && loaded) {
                    active = true;
                    // start of animation
                    option.animationStart(current + 1);
                    switch (direction) {
                        case 'next':
                            // 改变当前幻灯片
                            prev = current;
                            // 获取下一张 current + 1
                            next = current + 1;
                            // 如果是最后一张跳到第一张
                            next = total === next ? 0 : next;
                            if (option.isMovingUp) {
                                // 把下一张的位置设置到当前
                                position = height * 2;
                                // 根据幻灯片的宽度距离滑动
                                direction = -height * 2;
                            }
                            else {
                                position = width * 2;
                                direction = -width * 2;
                            }
                            // 保存当前幻灯片
                            current = next;
                            if(option.isDynamicLoading){
                                if(option.isLoadMany){
                                    setImages(current);
                                }else{
                                    setImage(current);
                                }
                            }
                            break;
                        case 'prev':
                            // 改变当前幻灯片
                            prev = current;
                            // 获取上一张 current - 1
                            next = current - 1;
                            // 如果是第一张跳到最后一张
                            next = next === -1 ? total - 1 : next;
                            // 设置下一张左边的位置
                            position = 0;
                            // 根据幻灯片的宽度距离滑动
                            direction = 0;
                            // 保存当前幻灯片
                            current = next;
                            if(option.isDynamicLoading){
                                if(option.isLoadMany){
                                
                                }else{
                                    setImage(current);
                                }
                            }
                            break;
                        case 'pagination':
                            // 从分页项目点击下一步，转换到数
                            next = parseInt(clicked, 10);
                            // get previous from pagination item with class of current
                            prev = $('.' + option.paginationClass + ' ul li.' + option.currentClass, elem).attr('num').match('[^#/]+$');
                            // if next is greater then previous set position of next slide to right of previous
                            if (next > prev) {
                                if (option.isMovingUp) {
                                    position = height * 2;
                                    direction = -height * 2;
                                }
                                else {
                                    position = width * 2;
                                    direction = -width * 2;
                                }
                            } else {
                                // if next is less then previous set position of next slide to left of previous
                                position = 0;
                                direction = 0;
                            }
                            // store new current slide
                            current = next;
                           if(option.isDynamicLoading){
                                if(option.isLoadMany){
                                
                                }else{
                                    setImage(current);
                                }
                            }
                            break;
                    }
                    // 移到下一张幻灯片
                    if (option.isMovingUp) {
                        control.children(':eq(' + next + ')').css({
                            top: position,
                            display: 'block'
                        });
                        control.stop().animate({
                            top: direction
                        }, option.slideSpeed, option.slideEasing, function() {
                            // 动画后复位控制位置
                            control.css({
                                top: -height
                            });
                            // 复位和显示下一张
                            control.children(':eq(' + next + ')').css({
                                top: height,
                                zIndex: 5
                            });
                            // 复位上一张幻灯片
                            control.children(':eq(' + prev + ')').css({
                                top: height,
                                display: 'none',
                                zIndex: 0
                            });
                            // 动画结束
                            option.animationComplete(next + 1);
                            active = false;
                        });
                    }
                    else {
                        control.children(':eq(' + next + ')').css({
                            left: position,
                            display: 'block'
                        });
                        // 动画控制
                        control.animate({
                            left: direction
                        }, option.slideSpeed, option.slideEasing, function() {
                            // 动画后复位控制位置
                            control.css({
                                left: -width
                            });
                            // 复位和显示下一张
                            control.children(':eq(' + next + ')').css({
                                left: width,
                                //top: height,
                                zIndex: 5
                            });
                            // 复位上一张幻灯片
                            control.children(':eq(' + prev + ')').css({
                                left: width,
                                display: 'none',
                                zIndex: 0
                            });
                            // 动画结束
                            option.animationComplete(next + 1);
                            active = false;
                        });
                    }
                    // 设置分页的当前状态
                    if (option.pagination) {
                        // 删除所有当前样式
                        $('.' + option.paginationClass + ' ul li.' + option.currentClass, elem).removeClass(option.currentClass);                       
                        // 添加当前样式到下一页
                        $('.' + option.paginationClass + ' ul li:eq(' + next + ')', elem).addClass(option.currentClass);
                    }
                    if (option.isShowPage) {
                        $('.' + option.pageIndexClass, elem).html(current + 1);
                        $('.' + option.pageSizeClass, elem).html(total);
                    }
                }
            } // 动画结束

            function stop() {
                // clear interval from stored id
                clearInterval(elem.data('interval'));
            }

            function pause() {
                if (option.pause) {
                    // clear timeout and interval
                    clearTimeout(elem.data('pause'));
                    clearInterval(elem.data('interval'));
                    // pause slide show for option.pause amount
                    pauseTimeout = setTimeout(function() {
                        // clear pause timeout
                        clearTimeout(elem.data('pause'));
                        // start play interval after pause
                        playInterval = setInterval(function() {
                            animate("next");
                        }, option.play);
                        // store play interval
                        elem.data('interval', playInterval);
                    }, option.pause);
                    // store pause interval
                    elem.data('pause', pauseTimeout);
                } else {
                    // if no pause, just stop
                    stop();
                }
            }

            // 2 or more slides required
            if (total < 2) {
                return;
            }

            // error corection for start slide
            if (start < 0) {
                start = 0;
            }

            if (start > total) {
                start = total - 1;
            }

            // change current based on start option number
            if (option.start) {
                current = start;
            }

            // randomizes slide order
            if (option.randomize) {
                control.randomize();
            }

            // make sure overflow is hidden, width is set
            $('.' + option.container, elem).css({
                overflow: 'hidden',
                // fix for ie
                position: 'relative'
            });
            if (option.isMovingUp) {
                // set css for slides
                control.children().css({
                    position: 'absolute',
                    top: control.children().outerHeight(),
                    left: 0,
                    //top: 0,
                    //left: control.children().outerWidth(),
                    zIndex: 0,
                    display: 'none'
                });

                // set css for control div
                control.css({
                    position: 'relative',
                    // size of control 3 x slide width
                    width: width,
                    // set height to slide height                   
                    height: (height * 3),
                    // center control to slide                    
                    top: -height
                });
            }
            else {
                // set css for slides
                control.children().css({
                    position: 'absolute',
                    top: 0,
                    left: control.children().outerWidth(),
                    zIndex: 0,
                    display: 'none'
                });
                // set css for control div
                control.css({
                    position: 'relative',
                    // size of control 3 x slide width                   
                    width: (width * 3),
                    // set height to slide height
                    height: height,
                    // center control to slide
                    left: -width
                    //top: -height
                });
            }

            // show slides
            $('.' + option.container, elem).css({
                display: 'block'
            });
            
            // checks if image is loaded
            if (option.preload && control.find('img:eq(' + start + ')').length) {
                // adds preload image
                $('.' + option.container, elem).css({
                    background: 'url(' + option.preloadImage + ') no-repeat 50% 50%'
                });
                // gets image src, with cache buster
                var img = control.find('img:eq(' + start + ')').attr('src') + '?' + (new Date()).getTime();
                // check if the image has a parent
                if ($('img', elem).parent().attr('class') != 'slides_control') {
                    // If image has parent, get tag name
                    imageParent = control.children(':eq(0)')[0].tagName.toLowerCase();
                } else {
                    // Image doesn't have parent, use image tag name
                    imageParent = control.find('img:eq(' + start + ')');
                }
                if($.browser.opera||$.browser.msie||$.browser.safari){
                    // checks if image is loaded
                    control.find('img:eq(' + start + ')').attr('src',img).load(function(){
                        // once image is fully loaded, fade in
                        control.find(imageParent + ':eq(' + start + ')').fadeIn(option.fadeSpeed, option.fadeEasing, function() {
                            $(this).css({
                                zIndex: 5
                            });
                            // removes preload image
                            $('.' + option.container, elem).css({
                                background: ''
                            });
                            // let the script know everything is loaded
                            loaded = true;
                            // call the loaded funciton
                            option.slidesLoaded();
                        });
                   });
               }else{
                    // checks if image is loaded
                    control.find('img:eq(' + start + ')').load(function(){
                        // once image is fully loaded, fade in
                        control.find(imageParent + ':eq(' + start + ')').fadeIn(option.fadeSpeed, option.fadeEasing, function() {
                            $(this).css({
                                zIndex: 5
                            });
                            // removes preload image
                            $('.' + option.container, elem).css({
                                background: ''
                            });
                            // let the script know everything is loaded
                            loaded = true;
                            // call the loaded funciton
                            option.slidesLoaded();
                        });
                   }); 
               }
            } else {
                // if no preloader fade in start slide
                control.children(':eq(' + start + ')').fadeIn(option.fadeSpeed, option.fadeEasing, function() {
                    // let the script know everything is loaded
                    loaded = true;
                    // call the loaded funciton
                    option.slidesLoaded();
                });
            }
            
            // click slide for next
            if (option.bigTarget) {
                // set cursor to pointer
                control.children().css({
                    cursor: 'pointer'
                });
                // click handler
                control.children().click(function() {
                    // animate to next on slide click
                    animate('next');
                    return false;
                });
            }

            // pause on mouseover
            if (option.hoverPause && option.play) {
                control.bind('mouseover', function() {
                    // on mouse over stop
                    stop();
                });
                control.bind('mouseleave', function() {
                    // on mouse leave start pause timeout
                    pause();
                });
            }

            // generate next/prev buttons
            if (option.generateNextPrev) {
                $('.' + option.container, elem).after('<a href="#" class="' + option.prev + '">Prev</a>');
                $('.' + option.prev, elem).after('<a href="#" class="' + option.next + '">Next</a>');
            }

            if (option.isShowPage) {
                $('.' + option.pageIndexClass, elem).html(current + 1);
                $('.' + option.pageSizeClass, elem).html(total);
            }

            // next button
            $('.' + option.next, elem).click(function(e) {
                e.preventDefault();
                if (option.play) {
                    pause();
                }
                animate('next');
            });

            // previous button
            $('.' + option.prev, elem).click(function(e) {
                e.preventDefault();
                if (option.play) {
                    pause();
                }
                animate('prev');
            });

            // generate pagination
            if (option.generatePagination) {
                if (!option.isPaginationContainer) {
                    // create unordered list
                    if (option.prependPagination) {
                        elem.prepend('<div class=' + option.paginationClass + '><ul></ul></div>');
                    } else {
                        elem.append('<div class=' + option.paginationClass + '><ul></ul></div>');
                    }
                }
                // for each slide create a list item and link
                control.children().each(function() {
                    $('.' + option.paginationClass + ' ul', elem).append('<li num="#' + number + '">' + (number + 1) + '</li>');
                    number++;
                });
            } else {
                // if pagination exists, add href w/ value of item number to links
                $('.' + option.paginationClass + ' ul li', elem).each(function() {
                    $(this).attr('num', '#' + number);
                    number++;
                });
            }

            // add current class to start slide pagination
            $('.' + option.paginationClass + ' ul li:eq(' + start + ')', elem).addClass(option.currentClass);


            // click handling
            $('.' + option.paginationClass + ' ul li', elem).mousemove(function() {
                // pause slideshow
                if (option.play) {
                    pause()
                }
                // get clicked, pass to animate function                    
                clicked = $(this).attr('num').match('[^#/]+$');
                // if current slide equals clicked, don't do anything
                if (current != clicked) {
                    animate('pagination', clicked);
                }
                return false;
            });

            // click handling 
            $('a.link', elem).click(function() {
                // pause slideshow
                if (option.play) {
                    pause();
                }
                // get clicked, pass to animate function                    
                clicked = $(this).attr('num').match('[^#/]+$') - 1;
                // if current slide equals clicked, don't do anything
                if (current != clicked) {
                    animate('pagination', clicked);
                }
                return false;
            });

            if (option.play) {
                // set interval
                playInterval = setInterval(function() {
                    animate('next');
                }, option.play);
                // store interval id
                elem.data('interval', playInterval);
            }
        });
    };
   
    // default options
    $.fn.slides.option = {
        isDynamicLoading:false,     //是否动态加载图片，默认为false
        imageSrc:'',                //动态加载的图片路径
        isLoadMany:false,           //是否一次性加载多张
        loadCount:0,               //动态加载数量
        preload: false, // boolean，设置真实预载图像，图像中的基础幻灯片
        preloadImage: 'http://cdn.597.com/www/images/loading.gif', // string, 载入预载图像的名称和位置。默认是“http://cdn.597.com/www/images/loading.gif”
        container: 'slides_container', // string, 幻灯片容器类的名称。默认是“slides_container”
        generateNextPrev: false, // boolean, 自动生成下一个/上一个按钮
        next: 'next', // string, 下一个按钮的样式名
        prev: 'prev', // string, 上一个按钮的样式名
        pagination: true, // boolean, 如果你不使用分页，你可以设置为false
        isPaginationContainer: true, //boolean, 是否存在分页容器
        generatePagination: true, // boolean, 自动生成分页
        prependPagination: false, // boolean, 前置分页
        paginationClass: 'pagination', // string, 用于分页的类的名称
        currentClass: 'current', // string, 当前样式名
        fadeSpeed: 300, // number, 设定的速度以毫秒为单位的褪色动画
        fadeEasing: '', // string, must load jQuery's easing plugin before http://gsgd.co.uk/sandbox/jquery/easing/
        slideSpeed: 300, // number, 设定的速度以毫秒为单位的滑动动画
        slideEasing: '', // string, must load jQuery's easing plugin before http://gsgd.co.uk/sandbox/jquery/easing/
        start: 1, // number, 设定的速度以毫秒为单位的滑动动画
        crossfade: false, // boolean, 在基于图像的幻灯片淡出淡入图像
        randomize: false, // boolean, 设置为true，随机幻灯片
        play: 0, // number, 自动播放幻灯片，一个正数将设置为true，是幻灯片动画之间的毫秒时间
        pause: 0, // number, 点击下一页/上一页或分页暂停幻灯片。正数将设置为true，以毫秒为单位的暂停时间
        hoverPause: false, // boolean, 设置为真悬停在幻灯片将暂停
        bigTarget: false, // boolean, 设置为true，整个幻灯片上点击链接到下一张幻灯片
        isMovingUp: false, //boolean, 设置为true, 上下移动
        isShowPage: false, //boolean, 设置为true, 显示页码
        pageIndexClass: 'pageIndex', //当前页样式
        pageSizeClass: 'pageSize', //总页数样式
        animationStart: function() { }, // 在动画的开始调用的函数
        animationComplete: function() { }, // 在动画完成后调用的函数
        slidesLoaded: function() { } // 功能被称为是满载时的幻灯片
    };

    // Randomize slide order on load
    $.fn.randomize = function(callback) {
        function randomizeOrder() { return (Math.round(Math.random()) - 0.5); }
        return ($(this).each(function() {
            var $this = $(this);
            var $children = $this.children();
            var childCount = $children.length;
            if (childCount > 1) {
                $children.hide();
                var indices = [];
                for (i = 0; i < childCount; i++) { indices[indices.length] = i; }
                indices = indices.sort(randomizeOrder);
                $.each(indices, function(j, k) {
                    var $child = $children.eq(k);
                    var $clone = $child.clone(true);
                    $clone.show().appendTo($this);
                    if (callback !== undefined) {
                        callback($child, $clone);
                    }
                    $child.remove();
                });
            }
        }));
    };
})(jQuery);