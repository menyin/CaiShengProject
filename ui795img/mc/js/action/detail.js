define(function(require,exports,module) {
    var $ = require("$")
        ,juicer = require("juicer")
        ,ui = require("ui.base")
        ,util = require("util")
        ,person = require("action.person")
        ,mBox = require("ui.mBox")
        ,par

    var cache = {}

    juicer.register('telcall',function(tel){
        return tel.split('-')[0].replace(/[^0-9]/g,"");
    });
    var out = {
        init : function(){
            par = this.config
            person.updateInfo()
            if(par.terminate){$("#applyFootBtn").hide(); return;}
            out.btns()
            out.telCall($("a.telcall"))
            out.com()
            out.info()
            out.list()
            out.initKeyWord();
            $("#tFooter").hide()
        }
    	,initKeyWord : function(){
    		var keyWord = decodeURIComponent(util.url.getParameter('m.keyword'));
    		if ( keyWord && keyWord.length ) {
    			keyWord = decodeURIComponent(keyWord)
		        		.replace(/[~!@\$\%\\\^*\(\)\{\}\:\"\<\>\?\/。、，,！￥？“：”;；（）\'\[\]\=\| ]|\s+/g, ' ')            		
		    			.replace(/([\\\^\&\*\+\?\(\)\[\]\{\}\|])/g,'\\$1')
		    			.replace(/\band\b/i, ' ')
		    			.replace(/[,;\s]*\bor\b[,;\s]*/i, ' ')
		    			.split(' ').join('|');
                var wordRegx = new RegExp( keyWord, 'ig' );
                var replaceRegx = new RegExp( '('+keyWord+')', 'ig' );      
                // high light key word
                $('.hlkw').each(function(){
                    var $this = $(this);
                    var keyText  = $this.html();
                    wordRegx.compile();
                    if ( wordRegx.test( keyText ) ) {                    
                        $this.html( keyText.replace( replaceRegx, '<span style="color:#f30;">$1</span>' ) );
                    }                
                });
    		}
    	}
        ,companyHome : function(){
            par = this.config
            person.updateInfo()
            $("#comProfile").addClass("active");
            out.btns()
            out.telCall($("a.telcall"))
            out.com()
            out.info()
            out.list()
        },posList:function(){
            par = this.config
            person.updateInfo()
            $("#posDetail").removeClass("active");
            $("#posList").addClass("active");
            out.btns();
            out.telCall($("a.telcall"));
            out.com();
            var posList = $("#posList");
	         $(".apply_favorites_fixed").hide();
	         $("#tFooter").show();
	         if( $("#posListBody",false).attr("pageNo")>0 ) {
	                $("#posInfoMenu li").removeClass("active");
	                 posList.addClass("active");
	                $("#contentBody").find(".body").hide();
	                $("#posListBody").show();
	                  return
	             }
	         out.listGetNext(1, par.comId);
	         out.list();
          }
        //应聘和收藏
        ,btns : function(){
            /*
             $(window).scroll(function(){
             if($("#applyFootBtn",false).css("display")=="none")return;
             var top = Math.max(document.body.scrollTop,window.scrollY)
             ,cut = $(document).height() - $(window).height()
             ,mb="0"
             if( top >= cut - $("#footer").height()-120 ){
             mb=120-(cut-top)+"px"
             }else{
             mb="0"
             }
             $("#applyFootBtn",false).css(ui.moveCss("margin-bottom",mb))
             })
             */
            $("#applyPost").click(function(){
            	if ( !!~document.referrer.indexOf('/company/homepage/') ) {
            		_hmt && _hmt.push(['_trackEvent', 'P_EntMobileHomepage_Search', 'click']);
            	}
                out.apply([$(this).attr("ids")])
            });
            $("#favPost").click(function(){
                out.favourite([$(this).attr("ids")])
            });
            //返回
            if(/search\/result|position\/posInfo/.test(document.referrer)){
                $("#current_page,#current_pageBtn").show();
            }else{
            		if(!(/\/homepage\/default/.test(document.referrer))){
            			$("#goBack").attr("href","javascript:;").click(function(){history.go(-1);return false;})
            		}
            }
        }
        //兼容打电话链接
        ,telCall : function(objs){
            if(util.isAndroid)objs.each(function(){
                var rs=$(this)
                rs.attr("href",rs.attr("href").replace("callto:","wtai://wp/mc;"))
            })
            out.mailClick()
        }
        ,mailClick : function(obj){
            if(obj){
                obj.click(function(){
                    $("#applyPost")[0].click()
                })
            }
            $("img.callmail",false).off("click").click(function(){
                $("#applyPost")[0].click()
            })
        }
        //公司简介
        ,com : function(){
            var comProfile = $("#comProfile")
            comProfile.click(function(){
                if(comProfile.hasClass("active"))return;
                $(".apply_favorites_fixed").hide()
                $("#tFooter").show()
                if( $("#comProfileBody",false).length>0 ) {
                    $("#posInfoMenu li").removeClass("active")
                    comProfile.addClass("active")
                    $("#contentBody").find(".body").hide()
                    $("#comProfileBody").show()
                    return
                }
                $.ajax({
                    url:"/touch/position/comInfo_action.ujson?m.comId="+par.comId
                    ,type : "GET"
                    ,error : function(){
                        alert('获取编号为：'+par.comId+'的企业信息时,请求出错!');
                    }
                    ,success : function(data, status, xhr){
                        var result = util.toJSON(data);
                        if(result.success){
                            $("#posInfoMenu li").removeClass("active")
                            comProfile.addClass("active")
                            if(result.homePage)result.homePage = result.homePage.replace(/http:\/\//gi,"");
                            if(result.weibo)result.weibo = result.weibo.replace(/http:\/\//gi,"");
                            if(result.email)result.emailWidth = result.email.split(";")[0].length*12;
                            var comBodyObj = $(juicer($("#comProfileTemplate").val(),result));
                            out.telCall(comBodyObj.find("a.telcall"))
                            $("#contentBody").find(".body").hide().parent().append(comBodyObj);
                        }else{
                            alert('编号为：'+par.comId+'的企业信息服务端返回false!');
                        }
                    }
                });
            })
        }
        //职位信息
        ,info : function(){
            var posDetail = $("#posDetail")
            posDetail.find("a").attr("href","javascript:;")
            posDetail.click(function(){
                if(posDetail.hasClass("active"))return;
                if( $("#pos"+par.posId,false).length>0 ) {
                    $("#posInfoMenu li").removeClass("active")
                    posDetail.addClass("active")
                    $("#contentBody").find(".body").hide()
                    $("#pos"+par.posId).show()
                    $(".apply_favorites_fixed").show()
                    $("#tFooter").hide()
                    return
                }
            })
        }
        //其他职位列表
        ,list : function(){
            var posList = $("#posList")
            posList.click(function(){
                if(posList.hasClass("active"))return;
                $(".apply_favorites_fixed").hide()
                $("#tFooter").show()
                if( $("#posListBody",false).attr("pageNo")>0 ) {
                    $("#posInfoMenu li").removeClass("active")
                    posList.addClass("active")
                    $("#contentBody").find(".body").hide()
                    $("#posListBody").show()
                    return
                }
                out.listGetNext(1, par.comId)
            })
            $("#getNextPosList").click(function(){
                out.listGetNext(parseInt($("#posListBody").attr("pageNo"))+1,par.comId)
            })
        }
        //获取下一页数据
        ,listGetNext : function(pageNo,comId){
            var posList = $("#posList")
            var pageNo = pageNo;
            $.ajax({
                url:"/touch/position/comPosList_action.ujson?m.pageNo="+pageNo+"&m.comId="+comId
                ,type : "GET"
                ,error : function(){
                    alert('获取编号为：'+par.comId+'的企业的招聘信息列表时,请求出错!');
                }
                ,beforeSend : function(){
                    ui.loading.show({id:'posListLoading',z:12});
                }
                ,success : function(data, status, xhr){
                    ui.loading.hide({id:'posListLoading'});
                    var result = util.toJSON(data);
                    result.success = true
                    if(pageNo>=result.pageCnt) $("#getNextPosList").hide()
                    if(result.success){
                        $("#posInfoMenu li").removeClass("active")
                        posList.addClass("active")
                        var lastDeptName=""
                            ,lastDeptNum = -1
                            ,allList = []
                            ,DATA = result.posList
                        for(var i=0;i<DATA.length;i++){
                            if(lastDeptName!=DATA[i].deptName){
                                lastDeptNum ++
                                allList[lastDeptNum]={
                                    deptName:DATA[i].deptName
                                    ,posList:[{
                                        postDate : DATA[i].postDate
                                        ,posName : DATA[i].posName
                                        ,jobLoc : DATA[i].jobLoc
                                        ,posId : DATA[i].posId
                                    }]
                                }
                            }else{
                                allList[lastDeptNum].posList.push({
                                    postDate : DATA[i].postDate
                                    ,posName : DATA[i].posName
                                    ,jobLoc : DATA[i].jobLoc
                                    ,posId : DATA[i].posId
                                })
                            }
                            lastDeptName = DATA[i].deptName
                        }
                        var list = $(juicer($("#posListTemplate").val(),{posList:allList}))
                        list.find("a").click(function(){
                            var $this = $(this)
                                ,posId = $this.attr("posId")
                            ui.loading.show({id:'posDetailLoading',z:12});
                            out.getPosDetail(posId,function(data){
                                par.posId=posId
                                ui.loading.hide({id:'posDetailLoading'});
                                var posInfo = $(juicer($("#posTemplate").val(),data));
                                out.telCall(posInfo.find("a.telcall"));
                                $("#contentBody").find(".body").hide().parent().append(posInfo);
                                $("#posInfoMenu li").removeClass("active").first().addClass("active")
                                $("#applyPost,#favPost").attr("ids",data.posId)
                                setTimeout(function(){
                                    posInfo.css(ui.moveCss('left',"0",1))
                                    out.mailClick(posInfo.find("img.callmail"));
                                },100)
                                $(".apply_favorites_fixed").show()
                                $("#tFooter").hide()
                            });
                            //返回的多种叠加情况的处理
                            if(!$("#goBack").attr("old")){
                                $("#goBack").attr("old",$("#goBack").attr("href"))
                                $("#current_pageBtn,#current_page").hide()
                                $("#posInfoMenu").hide()
                                var ref = document.referrer.substring(document.referrer.lastIndexOf("/")).toLowerCase()
                                var reg = new RegExp("default\.jsp|resumeviewedloglist|myfavlist|applyhislist|whoinvitemehislist|resumeviewedloglist");
                                if(reg.test(ref)||ref=="/") $("#goBack").off("click")
                                $("#goBack").attr("href","javascript:;").click(function(e){
                                    if(reg.test(ref)||ref=="/"){
                                        $("#goBack").attr("old",document.referrer)
                                    }else{
                                        $("#current_pageBtn,#current_page").show()
                                    }
                                    $("#posInfoMenu").show()
                                    e.preventDefault()
                                    $("#goBack").off("click").attr("href",$("#goBack").attr("old"))
                                    $("#goBack").attr("old","")
                                })
                            }
                        })
                        $("#contentBody").find(".body").hide();
                        $("#posListBody").show().attr("pageNo",pageNo).find(".p_list").append(list);
                    }else{
                        alert('编号为：'+par.comId+'的企业的招聘信息列表服务端返回false!');
                    }
                }
            });//end ajax
        }
        //应聘
        ,apply : function(ids){
            sendApplyingAnalytics();
            person.Session.check(function(){
              $.ajax({
                    url : "/person/fastApplyConfig_action.ujson?t="+Math.random()
                    ,type : "GET"
                    ,beforeSend : function(){}
                    ,error : function(){}
                    ,success : function(data){                    	
                        var DATA = util.toJSON(data),html="",myR=[],resumes="",i="",len,resume                       
                        resumes = DATA["resumes"]
                        if(util.isArr(resumes)){
                        	    if(resumes.length>0){
                        	    	len = resumes.length;
                        	    	for(i = 0;i<len;i++){
                        	    		var resume = resumes[i];
                        	    		if(resume["master"]===1){
                        	    			 if(DATA["useDefaultCVFlag"] === 1){
                                             	out.applyPost(0,resume["subResumeId"],ids);
                                                 return;
                                             }else{
                                            	 myR.push({"master":resume["master"],"name":resume["resumeName"],"id":resume["subResumeId"],"resumeId":resume["resumeId"],"relationFlag":resume["relationFlag"]});
                                             }	
                        	    		}else{
                        	    			myR.push({"master":resume["master"],"name":resume["resumeName"],"id":resume["subResumeId"],"resumeId":resume["resumeId"],"relationFlag":resume["relationFlag"]});
                        	    		}
                        	    	}
                        	    }                        	    
                                if (myR.length > 0) {
                                    html+='<div class="pop_resume_list">'
                                    html+='<h1>选择简历</h1>'
                                    html+='<ul>'
                                    console.log(myR)
                                    for(var i=0;i<myR.length;i++){
                                        html+='<li><input type="radio" name="apply" class="inputRadio2" id="ap'+myR[i].id+'" '+(myR[i].master==1?"checked=\"checked\"":"")+' value="'+myR[i].id+'" resumeId="'+myR[i].resumeId+'"/>'
                                        html+='<label for="ap'+myR[i].id+'">'+myR[i].name+'</label></li>'
                                        if(myR[i].relationFlag == 1){
                                        	html+='<li class="resume-secret-tip ' + ( i==0 ? '' : 'hide' ) + '"><p>联系方式已设置保密，继续投递将自动公开！</p></li>'
                                        }
                                    }
                                    html+='</ul>'
                                    html+='<div class="btn"><div class="pop_autoLogin"><input type="checkbox" class="inputCheckbox" id="pop_autoLogin"><label for="pop_autoLogin">记住此次选择</label></div><button class="btn1_submit box-ok">应 聘</button></div>'
                                    html+='</div>'
                                } else {
                                    html='错误:没有一份有效简历!'
                                }
                        }else if(data.indexOf('<!DOCTYPE')>-1){
                            html='页面停留超时!请刷新！'
                        }else html='未知错误'
                        var mApply = new mBox(html,{
                            title:"选择简历"
                            ,width:260
                            ,mask:true
                            ,onopen : function(mBoxObj){
                            	mBoxObj.box.find('input[type="radio"]').on('click',function(){
                            		var $this   = $(this);
                            		var $liNext = $this.parent().next();
                            		$('.resume-secret-tip').hide();
                            		if($liNext.hasClass('resume-secret-tip')){
                            			$liNext.show();
                            		}
                            	});
                            }
                            ,onok : function(mBoxObj){
                                var perResumeID = mBoxObj.box.find("input:checked").val()
                                var resumeId = mBoxObj.box.find("input:checked").attr("resumeId")
                                if (/^\d+$/.test(perResumeID)) {
                                    out.applyPost(0,perResumeID,ids)
                                }

                                // 是否勾选记住此次选择
                                if($("#pop_autoLogin").is(":checked")){
                                	 var _url="/person/setFastApplyConfig_action.ujson?cvFlag=1&resumeId="+resumeId+"&t="+Math.random();
                                     $.ajax({
                                         url:_url,
                                         dataType:"json",
                                         success:function(data){}
                                     });
                                }

                                mApply.close();
                            }
                        })
                        mApply.open();
                    }
                })//end ajax
            })//session check
        }
        ,applyPost : function(re,resumeID,posID){
            var d = {"ids":posID.join(","),"perResumeID":resumeID,"re_apply":re,"letter_idx":0,"relationFlag":""}
            $.ajax({
                url : "/person/apply/apply_online.xhtml?r="+(+new Date())
                ,data : d
                ,type : "POST"
                ,beforeSend : function(){
                    ui.mask.show({id:'applyMask',z:90});
                    ui.loading.show({id:'applyLoad',z:91});
                }
                ,error : function(){
                    alert('请求出错!');
                    ui.mask.hide({id:'applyMask'});
                    ui.loading.hide({id:'applyLoad'});
                }
                ,success : function(data){
                    ui.mask.hide({id:'applyMask'});
                    ui.loading.hide({id:'applyLoad'});
                    var $msg = ""
                    if(data.indexOf('<!DOCTYPE')>-1){
                        $msg='页面停留超时!请刷新!'
                    }else{
                        var DATA = util.toJSON(data)
                        if(DATA.SUCCESS){
                            var item = DATA.ps[0]
                            if(item.result == 1){
                                $msg="应聘成功!"
                            }else if(item.result == 0){
                                $msg = item.detail.reason
                            }else if(item.result == 2){
                                $msg = "<p>您已在"+item.detail.per_time+"前已应聘"+item.detail.app_num+"次，</br>是否重新应聘?</p>"
                                $msg += '<div class="btn"><button class="box-ok">确定</button><button class="box-cancel">取消</button></div>'
                                var resultBox = new mBox($msg,{
                                    title:"重新应聘"
                                    ,width:250
                                    ,className:"confirm"
                                    ,oncancel : function(){ resultBox.close()}
                                    ,onok : function(){
                                        out.applyPost(1,resumeID,posID)
                                        resultBox.close()
                                    }
                                })
                                resultBox.open();
                                return;
                            }else{
                                $msg = "未知状态!"
                            }
                        }else{
                            $msg = "未知错误!"
                        }
                    }
                    alert($msg)
                }
            });
        }
        //收藏
        ,favourite : function(ids){
            if($("#favPost").attr("ok")==ids){ alert("已经收藏过该职位!");return}
            sendFavoriteAnalytics();
            person.Session.check(function(){
                var toUrlPar = "&ids="+ids.join("&ids=")
                $.ajax({
                    url : "/person/apply_manage/myFavourite_add.ujson?r="+(+new Date())+toUrlPar
                    ,type : "GET"
                    ,beforeSend : function(){

                    }
                    ,error : function(){
                        alert('请求出错!');
                    }
                    ,success : function(data){
                        var DATA = util.toJSON(data);
                        if(DATA.success){
                            if((DATA.total_count-DATA.fail_count)==1){
                                msg = "收藏成功！";
                            }else if(DATA.fail_count<1&&DATA.total_count>1){
                                msg = "全部收藏成功！";
                            }else{
                                msg = '操作成功！'
                            }
                            alert(msg);
                            $("#favPost").attr("ok",ids)
                        }else{
                            alert('收藏失败!');
                        }
                    }
                });
            });
        }
        //获取企业其他职位某详情
        ,getPosDetail:function(posID,callBack){
            $.ajax({
                url:"/touch/position/posInfo_action.ujson?m.type=ajax&m.posId="+posID
                ,type : "GET"
                ,error : function(){
                    alert('获取编号为：'+posID+'的职位信息时,请求出错!');
                }
                ,success : function(data, status, xhr){
                    var result = util.toJSON(data);
                    if(result.success){
                        callBack(result)
                    }else{
                        alert('编号为：'+posID+'的职位信息服务端返回false!');
                    }
                }
            });
        }
    }
    //--jobcn-1434 m.jobcn.com的"收藏"和"应聘"事件跟踪--这里修改的是触平板的应聘。
    function sendApplyingAnalytics(){
        //--判断是否登录。
        var isLogined=checkTouchLogined();
        //--构造需要发送的请求。
        if(!isLogined){
            _gaq.push(['_trackEvent',"应聘/未登录/1","click","click",0,true]);
        }
        else{
            _gaq.push(['_trackEvent',"应聘/已登录/1","click","click",0,true]);
        }
    }
    //--触平板判断是否登录的方法
    function checkTouchLogined(){
        var isLogined=false;
        if(my==undefined||my==null||my.Person==undefined||my.Person==null||my.Person.perAccountId==undefined||my.Person.perAccountId==null||my.Person.perAccountId==""){
            isLogined=false;
        }
        else{
            isLogined=true;
        }
        return isLogined;
    }
    //--jobcn-1434 m.jobcn.com的"收藏"和"应聘"事件跟踪--这里修改的是触平板的收藏。
    function sendFavoriteAnalytics(){

        //--判断是否登录。
        var isLogined=checkTouchLogined();
        //--构造需要发送的请求。
        if(!isLogined){
            _gaq.push(['_trackEvent',"收藏/未登录","click","click",0,true]);
        }
        else{
            _gaq.push(['_trackEvent',"收藏/已登录","click","click",0,true]);
        }

    }
    module.exports = out;
});