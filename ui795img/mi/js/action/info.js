define(function(require,exports,module) {
    var out={};
    var $=require("$");

    // 大部分从电脑版 p.info.js 复制过来，部分修改
    // 加载更多 类
    // 用来加载更多文章
    var LoadMore=function(ids,options){

        var opt=options||{};

        // 请求id 和 detail的参数设置
        this.selector=opt.selector||'#load-more',
        this.idsReq=$.extend({url:'',data:{}},opt.idsReq||{});
        this.contentsReq=$.extend({url:'',data:{}},opt.contentsReq||{}); 
        this.pageSize=opt.pageSize||10;
        this.pageNo=0;
        this.isNoMore=false;
        this.ids=[];
        this.totalRows=undefined;
        this.loadedRows=0;

        // 有初始化数据
        if(ids!=""){
            // 获取所有id
            this.ids=ids.split(','); 
            // 行总数  
            this.totalRows=this.ids[0];
            if(this.totalRows>this.pageSize){
                // 在第一页
                this.pageNo=1;
                // 已经加载条数
                this.loadedRows=this.pageSize;
                // 移除已经显示的id，包括第一个总数
                this.ids.splice(0,this.pageSize+1);
            }else{
                this.isNoMore=true;
            }
        }

        // 自定义渲染数据
        this.render=opt.render||function(){};

        this.init();

        // 缓存
        // JOBCNX-1739 返回时滚动条位置问题
        this.pageName=opt.pageName;
        this.loadTime=opt.loadTime;
        this.pageName && this.loadTime && this.initCache();

    }
    LoadMore.prototype={

        constructor:LoadMore,

        // 初始化按钮的显示 和 事件
        init:function(){
            var $loadMore=$(this.selector);
            if(!this.isNoMore){
                $loadMore.show();
            }else{
                $loadMore.hide();
            }
            $loadMore.click($.proxy(this.clickLoadMore,this));
        },

        // 初始化缓存
        // JOBCNX-1739
        initCache:function(){
            var 
                ls=window.localStorage,
                JSON=window.JSON;
            if(!ls || !JSON)return;

            var 
                doc=window.document,
                docEl=doc.body||doc.documentElement,
                pageName=this.pageName,
                tplId=pageName,
                catchId=pageName+"Loaded",
                loadTimeIndex=pageName+'Time',
                scrollTopIndex=pageName+'St',

                // 当前载入时间
                loadTime=this.loadTime,
                // 上次载入时间
                lastLoadTime=ls[loadTimeIndex]||0,
                // scrollTop
                scrollTop=ls[scrollTopIndex]||0,
                // cache
                cache=ls[catchId];
                

            // 如果相等，即载入时间与上次相同 表示 “返回”
            if(loadTime==lastLoadTime){
                if(cache){
                    cache=JSON.parse(cache);
                    this.render(cache.data,cache.isNoMore,true);
                    this.pageNo=cache.pageNo;
                    this.loadedRows=cache.loadedRows;
                    this.ids=cache.ids;
                }
                setTimeout(function(){
                    docEl.scrollTop=scrollTop;
                },0);

            // 重新加载，则删除缓存
            }else{
                ls.removeItem(catchId);
                // 记录重新载入时间
                ls[loadTimeIndex]=loadTime;
                // 清除滚动条位置
                ls.removeItem(scrollTopIndex);
            }

            // 记录滚动条高度
            $('body').delegate('a','click',function(){
                ls[scrollTopIndex]=docEl.scrollTop;
            });


        },

        // 点击进入文章页面后，返回，滚动条不能回到原来的位置
        // JOBCNX-1739
        storeData:function(data){
            var 
                ls=window.localStorage,
                JSON=window.JSON;
            if(!ls || !JSON || !this.loadTime)return;

            var catchId=this.pageName+"Loaded",
                loaded=JSON.parse(ls[catchId]||'{"data":[]}');
            // 保护现场 呵呵
            loaded.isNoMore=this.isNoMore;
            loaded.pageNo=this.pageNo;
            loaded.loadedRows=this.loadedRows;
            loaded.ids=this.ids;
            loaded.data=loaded.data.concat(data);
            ls[catchId]=JSON.stringify(loaded);
        },

        noMore:function(){
            $(this.selector).hide();
        },

        clickLoadMore:function(){
            var render=$.proxy(this.render,this);
            var noMore=$.proxy(this.noMore,this);
            var storeData=$.proxy(this.storeData,this);
            $.when(this.getData()).done(function(data){
                // 把属于放进localStorage
                storeData(data);
                render(data);
            }).fail(noMore);
            return false;
        },

        getData:function () {
            var dfd=$.Deferred();
            var that=this;

            var _getData = function (data) {
                var data=data||[];
                that.loadedRows+=data.length;
                if (data.length === 0 || that.loadedRows>that.totalRows) {
                    //没有数据 或超条数 不能再加载了
                    dfd.reject();
                } else {
                    //显示数据
                    dfd.resolve(data,that.loadedRows>=that.totalRows);
                }
            };

            // 加载数据
            // 这里会维护一个id队列，每次会使用id队列里的id获取详情
            // 这个id队列对_getData方法是透明的，它只会得到详情数据，而不知道加载过程 
            var _loadData = function () {

                //如果id还没用完，继续用
                if(that.ids.length>0){
                    var size=Math.min(that.ids.length,that.pageSize);
                    $.when(_getContents(that.ids.splice(0,size))).done(function(contentsData,textStatus){
                        _getData.call(that,contentsData);//获取到了数据
                    });
                }else{
                    //如果id用完了，加载下一页id
                    that.pageNo+=5;
                    $.ajax({
                        type: 'POST',
                        contentType: 'application/x-www-form-urlencoded',
                        dataType: 'json',
                        url: that.idsReq.url,
                        data: $.extend(that.idsReq.data,{pageNo:that.pageNo}),
                        success: function (data, textStatus) {
                            //得到了id
                            data.articleIds=data.articleIds.split(',');
                            // 总记录数，如果一开始没有数据，则总记录数是没有定义的
                            if(typeof that.totalRows === "undefined"){
                                that.totalRows=data.articleIds[0];
                            }
                            data.articleIds.splice(0,data.articles.length+1);//一开始已有articles数据，并且第一个id是记录总数
                            that.ids=that.ids.concat(data.articleIds);
                            _getData.call(that,data.articles);//把结果给_getData
                        }
                    });
                }
            };

            // 获取文章内容
            var _getContents=function(idArr){
                var 
                    idArr=idArr||[],
                    ids=idArr.join(','),
                    dfd=$.Deferred();
                $.ajax({
                    type: 'POST',
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: 'json',
                    url: that.contentsReq.url,
                    data: $.extend(that.contentsReq.data,{ids:ids}), 
                    success: function (data, textStatus) {
                        dfd.resolve(data.articles,textStatus);
                    }
                });
                return dfd.promise();
            };
            _loadData.call(this);
            return dfd.promise();
        
        }
    };

    var initArticleList=function(articleIds,options){
        var juicer=require('juicer');
        // 文章模板
        var articlesTpl=juicer([
            '<div>',
            '{@each data as article,index}',
            '<a href="/touch/info/article/<!--{article.id}-->">',
            '<dl class="clearfix">',
                '<dt><!--{article.topic}--></dt>',
                '<dd>',
                    '{@if article.logo!=""}',
                    '<img src="'+window.IMAGE_HOST+'<!--{article.logo}-->">',
                    '{@/if}',
                    '<!--{article.content}-->',
                    '<div class="detail_date">',
                        '<!--{article.publishTime}--><span>阅读 <!--{article.clickTimes}--></span>',
                    '</div>',
                '</dd>',
            '</dl>',
            '</a>',
            '{@/each}',
            '</div>'].join('')
        );


        var render=function(data,isNoMore,notSlideDown){
            var $append=$(articlesTpl.render({data:data})).hide();
            $append.insertBefore('#load-more');
            if(notSlideDown){
                $append.show();
            }else{
                $append.slideDown();
            }
            if(isNoMore){
                $('#load-more').hide();
            }
        }
        $(function(){
            var loadMoreOpt={
                selector:'#load-more',
                render:render
            };

            $.extend(loadMoreOpt,options);
            new LoadMore(articleIds,loadMoreOpt);
        });


    };

    out.index=function(ids,loadTime){

        initArticleList(ids,{
            idsReq:{
                url:"/touch/info/newsPaginate.ujson"
            },
            contentsReq:{
                url:"/touch/info/newsPaginate.ujson"
            },
            pageName:"index",
            loadTime:loadTime
        });
    }

    out.tagArticles=function(tagId,ids,loadTime){

        initArticleList(ids,{
            idsReq:{
                url:"/touch/info/getTagArticlesByPaginate.ujson",
                data:{tagId:tagId}
            },
            contentsReq:{
                url:"/touch/info/getTagArticlesByPaginate.ujson"
            },
            pageName:"tagArticles",
            loadTime:loadTime
        });

    }

    out.article=function(){
        var util=require('util');
        // 检查是否已赞
        var checkLike=function(id){
            return util.cookie.get('ap_'+id);
        }
        var like=function(){
            var $el=$(this);
            var id=$el.data('id');
            var eff=function(isInc){
                var text=isInc?'+1':'已赞';
                var $praise=$('<div style="position: absolute;left: 0px;top:0;font-size: 14px;width:50px;">'+text+'</div>');
                $el.append($praise);
                $praise.animate({top:"-50px",opacity:0},800,'linear',function(){
                    $praise.remove();
                    isInc && $el.addClass('praised') && inc();
                });                
            }
            var inc=function(){
                // 增加数量
                var $count=$el.find('.count'),
                count=(parseInt($count.html())||0)+1;
                $count.html(count).show();
            }
            if(util.cookie.get('ap_'+id)){
                eff();
            }else{
                $.post('/touch/info/zan.ujson',{id:id},function(data){
                    util.cookie.set('ap_'+id,1,{expires:86400000});
                    eff(true);
                });
            }
            return false;
    
        }

        var mBox = require("ui.mBox");
        var getAbstract=function(str,length){
            var str=str.replace(/<\/?[^>]*>/gim,"");//去掉所有的html标记
            var result=str.replace(/(^\s+)|(\s+$)/g,"");//去掉前后空格
                result=result.replace(/\s/g,"");//去除文章中间空格
            return result.substr(0,length||140);
        };
        var shareText=$('h3').html()+'-卓博才经（分享自@jobcn-卓博才经）';
            shareText=getAbstract($('.detail_content').html(),137-shareText.length)+'...';
        var sharePic=$('div.article_tit img').attr('src')||'';
            
        var shareBoxHtml=[
                '<div>',
                '<a target="_blank" href="http://service.weibo.com/share/share.php?title='+shareText+'&url='+location.href+'&source=info_jobcn&appkey=3179846680&pic='+sharePic+'&ralateUid=1863886832">分享到新浪微博</button>',
                '<a target="_blank" href="http://v.t.qq.com/share/share.php?title='+shareText+'&url='+location.href+'&appkey=&site=http://info.jobcn.com&pic='+sharePic+'">分享腾讯微博</button>',
                '</div>'
            ].join('');
        
        var shareBox;
        var share=function(event){
            event.stopPropagation();
            shareBox=new mBox(shareBoxHtml,{
                            width:250
                            ,className:"share-box"
                            ,onopen:function(){
                                shareBox.box.bind('click',clickIn);
                                $(document).bind('click',clickout);
                            },onclose:function(){
                                shareBox.box.unbind('click',clickIn);
                                $(document).unbind('click',clickout);
                            }
            });
            shareBox.open();
            return false;
        }
        var clickout=function(event){
            shareBox.close();
        }
        var clickIn=function(event){
            event.stopPropagation();
        }

        $(function(){
            // 点赞
            var $praise=$('#praise');
            $praise.click(like);
            checkLike($praise.data('id')) && $praise.addClass('praised');
           
            $('#share').click(share);
        });
    }


    out.commentBox = function () {
        var $wbBtn = $('.weibo-btn'),
            $sina = $('#sinaComment');
            // $qq = $('#qqwb_comment__');
        var commentUrl=encodeURIComponent(document.URL.replace('m.jobcn.com/touch/info','info.jobcn.com'));
        // 由于腾讯微博 微评论不能设置 url 参数，
        // 而腾讯微博显示评论其实是在页面上插入一iframe
        // 为了让触屏版与网页版的评论“同步”
        // 重写 #qqwb_comment__ 这个元素 appendChild方法
        // 在iframe插入之前修改它的src
        // var orgAppendChild=$qq[0].appendChild;
        // $qq[0].appendChild=function(el){
        //     // 替换url
        //     el.src && el.src.indexOf('qq.com')!=-1 && (el.src=el.src.replace(/url=.*/,'url='+commentUrl));
        //     // 调用原始appendChild方法插入
        //     orgAppendChild.call(this,el);
        // }

        seajs.use(['http://tjs.sjs.sinajs.cn/open/widget/js/widget/comment.js', 'http://mat1.gtimg.com/app/openjs/openjs.js#debug=yes&autoboot=no'], function () {
            var url =
                "http://widget.weibo.com/distribution/comments.php?width=0&url=auto&ralateuid=1949959332&appkey=3179846680&dpc=1";
            url = url.replace("url=auto", "url="+commentUrl);
            $('#sinaComment').append('<iframe id="WBCommentFrame" src="' + url + '" frameborder="0" style="width:100%" '+(/MSIE 7/.test(navigator.userAgent)?'height="550"':'scrolling="no"')+' ></iframe>');
            window.WBComment.init({
                "id": "WBCommentFrame"
            });
        });

        /*$wbBtn.bind('click', function (e) {
            var $this = $(this);
            if ($this.data('type') >> 0) {
                $sina.css('display', 'none');
                $qq.css('display', 'block').parent().siblings().addClass('qq_weibo');
            } else {
                $sina.css('display', 'block');
                $qq.css('display', 'none').parent().siblings().removeClass('qq_weibo');
            }
        })*/
    };

    module.exports=out;

})