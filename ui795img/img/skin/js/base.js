/**
 * �û�����
 * Last Update:2011-11-7
 */
jobcn.pkg("jobcn.Person");

window.seajs && window.seajs.use(["p.login-register"],function(lr){jobcn.Person._new_check = lr.check});
//����ҳ����ʾ�ĸ�����Ϣ
jobcn.Person.updateInfo = function(){
    var _jcg=jobcn.Cache.get;
    if(jobcn.Person.Session.isLogin())
    {
        if ($('#user_menu_notlogin').length > 0) {
            _jcg("#user_menu_notlogin").hide();
            var info=_jcg("#user_menu_logined").show();
            info.find("#user_menu_name").html(jobcn.Person.perUserName);
            _jcg("#user_menu_logined").find(".per_icon").attr("class", "per_icon1");
            if(jobcn.Person.newMsgCount > 0){
                info.find("#user_menu_msg").html("��Ϣ(<b class=\"f30\">"+jobcn.Person.newMsgCount+"</b>/"+jobcn.Person.totalMsgCount+")");
            }else{
                info.find("#user_menu_msg").html("��Ϣ");
            }
        }

        var $bar = $("#login-reg-bar");
        if ($bar.length > 0) {
            var head = ["/commImage/10.2/ui/icon/new_people.png",				// new
                "/commImage/10.2/ui/icon/male_graduate_micro_32.png",	// man 		0
                "/commImage/10.2/ui/icon/male_professor_micro_32.png",	// man 		1-4
                "/commImage/10.2/ui/icon/male_expert_micro_32.png",		// man 		5+
                "/commImage/10.2/ui/icon/female_graduate_micro_32.png",	// woman 	0
                "/commImage/10.2/ui/icon/female_professor_micro_32.png",// woman 	1-4
                "/commImage/10.2/ui/icon/female_expert_micro_32.png"]; 	// woman 	5+
            $.ajax({
                url: "/person/getStatus.ujson",
                type: "POST",
                dataType: "json",
                success: function(data){
                    if (data) {
                        var $count = $('#nh-sms-count');
                        if ($count.length === 0) {
                            var html = $('#template-login').html().replace('{{userName}}', data.person.userName)
                                .replace('{{headasniub}}', head[(data.person.gender === 1 || data.person.gender === 2) ?
                                    ((data.person.gender === 1 ? 0 : 3) +
                                        (data.person.workYear < 1 ? 1 : data.person.workYear < 5 ? 2 : 3)) : 0]);
                            $bar.html(html);
                            var $name = $bar.find(".name");
                            if($name.width() > 174) {
                                $name.css({width: "175px"});
                            }
                        }
                        jobcn.Person.totalMsgCount = data.totalMsgCount;
                        jobcn.Person.newMsgCount = data.newMsgCount;
                    }
                }
            });
        }
        //info.find("#user_menu_accId").html(jobcn.Person.perAccountId);
        //info.find("#user_menu_memtype").html(jobcn.Person.memberClass=="1"?"Ӧ���ҵ��":"�����ʿ");
        jobcn.Person.Session.active();

    }else{
        _jcg("#user_menu_notlogin").show();
        _jcg("#user_menu_logined").hide();
        jobcn.Person.Session.disactive();

        //�Զ���¼
        var img = new Image();
        img.src="/person/login_auto.xhtml";
        img=null;
    }
};

/**
 * ������Ѷ�������Ϲ���ʵ�ֵ�js����
 * ʹ�÷�ʽ
 * scrollDiv ��Ҫʵ�ֹ�����div���id
 * interval �����ӳٵ�ʱ��
 * jobcn.Person.Marquee.init(scrollDiv, interval);
 */
(function(p){
    var objInterval;
    p.Marquee = {
        objInterval:null,
        property:{
            opacity:1,
            height:"54px"
        },
        scroll_news:function(scrollId){
            var item = jQuery('#'+scrollId+ ' li');
            var f = item.eq(0).before(item.last().clone().hide().css("height","0px").css("opacity",0));
            f.show().animate(p.Marquee.property,800,function(){
                item.last().remove();
            });
            return;
            f.slideDown("slow",function(){
                item.last().remove();
            });
        },
        start:function(scrollId, interval){
            objInterval=setInterval(function(){
                p.Marquee.scroll_news(scrollId);
            }, interval);
        },
        stop:function(){
            window.clearInterval(objInterval);
        },
        init:function(scrollId, interval, options){
            p.Marquee.property = jQuery.extend({}, p.Marquee.property, options);
            jQuery("#"+scrollId).hover(function(){
                p.Marquee.stop();
            }, function(){
                p.Marquee.start(scrollId, interval);
            });
            this.start(scrollId, interval);
        }
    }
})(jobcn.Person);

/**
 * ��Ա��¼����
 * Last Update:2011-10-18
 */
(function(p){
    var statusTimer;
    p.Session={
        isLogin:function(){
            return p.perAccountId;
        },
        login:function(name,password,autologin,options){
            new jobcn.ajax().submit({
                url: "/person/login_action.ujson?_t="+(new Date()).getTime(),
                data:{userName:name,password:password,remember:autologin},
                beforeSendFunction:function(){
                    jobcn.ui.loading.show({modal:false});
                },
                afterSendFunction:jobcn.ui.loading.hide,
                successFunction: function(json){
                    if(json.success){
                        if(jobcn.Analytics)
                            jobcn.Analytics.TrackLogin("/visual/login/box/��Դ="+window.location.pathname)
                        jobcn.load({
                            url: "/person/status.xhtml?_r=" + (new Date()).getTime(),
                            type: "js",
                            onload: function() {
                                p.updateInfo();
                                if(typeof(options.successFunction)=='function') {
                                    options.successFunction(json);
                                }
                            }
                        });
                        return true;
                    }else{
                        if(typeof(options.errorFunction)=='function')options.errorFunction(json);
                        return false;
                    }

                }
            });
        },
        logout:function(options){
            if(location.pathname.startWith("/person/"))return true;
            options = options||{};
            new jobcn.ajax().get({
                url: "/person/logout_action.ujson?_t="+(new Date()).getTime(),
                successFunction: function(json){
                    if(json.success)
                    {
                        p.perAccountId = p.perUserName = p.perEmail = p.perName = null;
                        p.updateInfo();
                        if(typeof(options.successFunction)=='function')options.successFunction();
                        return;
                    }else{
                        if(typeof(options.errorFunction)=='function')options.errorFunction();
                    }

                }
            });
            return false;
        },
        //��ʱˢ������״̬
        active:function(){
            var session = p.Session;
            if(statusTimer == null && session.isLogin())
            {
                //ÿ10����
                statusTimer=setInterval(function(){
                    var img = new Image();
                    img.src="/person/active_action.xhtml";
                    img=null;
                }, 10*60*1000);
            }

        },
        disactive:function(){
            clearInterval(statusTimer);
        }

    };
})(jobcn.Person);

//����Ƿ��¼���һص�
(function(s){
    var _html=[];
    _html.push("<div class='login-body'>");
    _html.push("<div class='fl login_content'>")
    _html.push("<div class='login_title'>���˻�Ա��¼")
    _html.push("<div class='forgetPwd'><a href='/person/GetBack_password.jsp' target='_blank'>��������</a><span>|</span><a href='/help/checkbrowser.jsp' target='_blank'>��¼������ô�죿</a></div>")
    _html.push("</div>");
    _html.push("<div class='login_main'>");
    _html.push("<form method='post' onsubmit='return false;'>");
    _html.push("<div class='login_tips hide' id='login_tips'></div>");
    _html.push("<div class='row name'>�û�����<input id='login_name' type='text' name='userName' tabindex='1' /></div>");
    _html.push("<div class='row pass'>��&nbsp;&nbsp;�룺<input id='login_password' type='password' name='password' tabindex='2' style='ime-mode:disabled' /></div>");
    _html.push("<div class='long_login'><input type='checkbox' name='remember' class='vam' id='login_autoLogin' value='1' autocomplete='off'><label class='vam' for='login_autoLogin'>30�����Զ���¼ <span class='green'>(������������)</span></label></div>")
    _html.push('<div class="btn"><button type="submit" tabindex="3" class="box-ok"></button></div>');
    _html.push("</form>");
    _html.push("<div class='other_login'><span>ʹ�ú�����վ�˺ŵ�¼��</span><a class='sina_login' title='����΢��'></a><a class='qq_login' title='QQ�˺�'></a><a class='renren_login' title='������'></a><a class='msn_login' title='MSN'></a><a class='baidu_login' title='�ٶ�'></a><a class='alipay_login' title='֧����'></a></div>");
    _html.push("</div>");
    _html.push("<div class='service_tell'><span class='inline-block'></span>(0769)2288-2222</div>");
    _html.push("</div>");

    //û��΢ע���
    _html.push("<div class='fr register_content' id='popBox_reg'>")
    _html.push("<a href='javascript:;' onclick='return false;' title='�ر�' class='box-close'></a>")
    _html.push("<div class='no_member'>����û�г�Ϊ���ǵĻ�Ա��</div>")
    _html.push("<div class='free_register'><a href='/reg' class='inline-block'>���ע��</a></div>")
    _html.push("</div>");

    //��΢ע���
    _html.push("<div class='fr register_content reg_content hide'  id='popBox_regMirco'>")
    _html.push("<a href='javascript:;' onclick='return false;' title='�ر�' class='box-close'></a>")
    _html.push("<div class='no_member'>����û��<br/>ע�������</div>")
    _html.push("<div class='free_reg'><a class='reg_btn' id='mircoRegBtn'>΢ע��<i class='new'></i></a>����΢���������鼫��ӦƸ</div>")
    _html.push("<div class='free_reg'><a href='/reg' class='reg_btn'>ע��</a>������������ӦƸ����̬��</div>")
    _html.push("</div>");

    _html.push("</div>");
    s.check=function(callBack,isMicro){
        if(s.isLogin()){
            callBack();
            return;
        } else if (jobcn.Person._new_check) {
            jobcn.Person._new_check(callBack, isMicro);
        } else {
            location.href = "/login.jsp?url=" + encodeURIComponent(location.href.substring(location.href.indexOf(".com/") + 4));
        }

    };
})(jobcn.Person.Session);

/**
 * �û�����ְλ�Ĳ���
 * Last Update:2011-11-30
 */
//--����util������⡣����ע�⣬������뷽ʽ���첽�ģ����ǵ������¼���ɺ�϶�����ʹ�á�
var _util={};
var _newBox={};
seajs.use(["util","ui.box"],function(util,uibox){
    _util=util;
    _newBox=uibox;
});

//�Ƿ��Ѿ���΢��
var isBindedWeiXin=false;
jobcn.Person.Position={
    posid : 0,
    getPosID:function(){return jobcn.Person.Position.posid },
    //detail.jspҳ��ʹ��
    ofLetter : function(){ return $("#ofLetter:checked").length>0},
    gaBind :function(){
        if(jobcn.Search.Position.parameter.pageNo>1) return;
        //��ͳ���¼�
        $("#result_data div.pos_item").each(function(){
            var self = $(this),_ga = self.attr("ga");
            if(!_ga) return;
            eval("var o="+self.attr("ga"));
            self.click(function(event){
                var self = $(this);
                event.stopPropagation();
                var p = o;
                p.acType = self.attr("actype");
                if(self.attr("c")=="on"){ return;}else{ self.attr("c","on"); }
                jobcn.Person.Position.ga(p);
            });
            self.find("div.pos_operate a.yp").click(function(event){
                var self = $(this);
                event.stopPropagation();
                var p = o;
                p.acType = self.attr("actype");
                if(self.attr("c")=="on"){ return;}else{ self.attr("c","on"); }
                jobcn.Person.Position.ga(p);
            });
            self.find("div.pos_operate a.sc").click(function(event){
                var self = $(this);
                event.stopPropagation();
                var p = o;
                p.acType = self.attr("actype");
                if(self.attr("c")=="on"){ return;}else{ self.attr("c","on"); }
                jobcn.Person.Position.ga(p);
            });
        });
    },
    //ͳ����Ƹ
    ga : function(p){
        var ishot = p.bidding=="true" || false;
        if(!ishot) return;
        new jobcn.ajax().get({
            url:"/public/add_cost_cache.xhtml",
            data:{
                "type":1,
                "posId":p.posid,
                "comId":0
            }
        });
        p = jQuery.extend({},jobcn.Person.Position.gaParameter,p);
        if(p.acType=="4" || p.acType=="7"){
            new jobcn.ajax().get({
                url:"/public/add_cost_click.xhtml",
                data:{
                    "type":(ishot?1:0),
                    "detailId":p.detailId,
                    "posId":p.posId,
                    "fromArea":encodeURI(p.fromArea),
                    "fromKeyWord":encodeURI(p.fromKeyWord),
                    "acType":p.acType
                }
            });
        }
        return false;
    },
    //��
    applyM : function(dom){
        var find = dom || $("#result_data .job_check.selected");
        var posids = [];
        if(find.length>0){
            find.each(function(){
                posids.push($(this).attr("data-value"));
            });
            jobcn.Person.Position.apply(posids);
        }else{
            alert("����ѡ��ҪӦƸ��ְλ��");
        }
    },
    //{posid:ӦƸְλID�������,�ֿ��� sugarFlag:�ǹ�ְλ��־}
    apply:function(posid,sugarFlag){
        var applyState = "δ��¼";
        //�ǹ�ְλ��Ŀ
        var applySearchNum = !!sugarFlag ? 1 : $('.apply_search.selected').length  ;

        if(posid && !jobcn.util.isArray(posid)) posid=[posid];
        if(!posid||posid.length == 0){
            alert("����ѡ��ҪӦƸ��ְλ��");
            return;
        }
        var isMulti = 0; //posid.length>1?0:0;	//��ְλӦƸʱ �������ظ�ӦƸ��ʾ
        jobcn.Person.Position.posid = posid;
        var _isVerify_email_and_mobile=function(callBack){
            var util=_util;
            var _show_verify_notice= util.Cookie.get("show_verify_notice");

            if(_show_verify_notice==="true"){
                callBack();
            }
            else{
                //--û�е����ͼ���Ƿ��Ѿ�����֤ͨ���ˡ�
                //--����״̬���趨�����Ѿ������ˣ����ü���ˡ�
                function setHasNoticed(){
                    var uom=new Date();uom.setHours(23); uom.setMinutes(59);uom.setSeconds(59);
                    //--��ȡ����
                    var host_=window.location.host;
                    var set_domain="";
                    if(host_.toLowerCase().indexOf("jobcn.com")!=-1){
                        set_domain="; domain=.jobcn.com";
                    }
                    window.document.cookie = "show_verify_notice=true; path=/; expires="+uom.toGMTString()+set_domain;
                }
                new jobcn.ajax().post({
                    url:"/person/getVerifyStatus.ujson?t="+Math.random(),
                    successFunction:function(json){
                        if(parseInt(json["status"]["email"])===1&&parseInt(json["status"]["mobile"])===1){
                            //��֤ͨ��
                            //--������ʺ��Ѿ���֤ͨ���ˣ���ô�趨����Ͳ����ټ���ˡ�
                            setHasNoticed();
                            callBack();
                        }
                        else{
                            //�Ƿ���Ҫ���ѡ�
                            var _currentBox=   new jobcn.ajax().post({
                                url:"/person/getDailyApplyTimes.ujson?t="+Math.random(),
                                successFunction:function(json){
                                    var _theDailyTatol=parseInt(json["status"]["applyTimes"]);
                                    if(_theDailyTatol>5){
                                        //--ʧЧʱ��Ϊ�����23:59:59
                                        setHasNoticed();
                                        var html="<p style='padding:30px 20px;line-height:24px;'>���ݱ�����ͨ���ֻ���������֤�ļ��������׻�����¾������������ļ�����δ�����֤���Ƿ����������֤��</p>" +
                                            "<div class='verifyBox_buttons box-button' ><a   class='box-ok' target='_blank' href='/person/account/getMyAccountState.xhtml'>������֤</a><a  class='box-cancel'>�Ժ���˵</a></div>";

                                        var sentBox = _newBox(html, {
                                            boxid: "verify_notice_box_",
                                            title:"�ֻ�/������֤",
                                            css:"jobcn_dialog",
                                            draggable: false,
                                            width:400,
                                            onopen:function(box){
                                                box.find(".verifyBox_buttons a").click(function(){
                                                    sentBox.close();
                                                    callBack();
                                                });
                                                /*  $("#resume-send-setting-form").submit(function(){
                                                 return false;
                                                 });*/
                                            },
                                            onok:function(box){
                                                /*
                                                 box.find(".box-ok");
                                                 sentBox.close();
                                                 */
                                            }
                                        });
                                        sentBox.open();
                                    }
                                    else{
                                        callBack();
                                    }
                                }
                            });
                        }
                    }
                });
            }
        }

        var applyFunction = function(){
            //JOBCNX-1609
            //΢��-����ӦƸ��������
            //step1����ȡ��غ�̨���������Ϣ�������̨������Ĭ�ϵļ�������ô��ֱ��Ͷ�š�
            function ajax_getResumeInfo(callBack){
                $.ajax({
                    url:"/person/fastApplyConfig_action.ujson?t="+Math.random(),
                    dataType:"json",
                    success:function(data){
                        if(data.success==false){
                            alert(data.message);
                            return;
                        }
                        if(typeof (callBack)=="function"){
                            callBack(data);
                        }
                    }
                });
            }
            var perAccountId =jobcn.Person.perAccountId;
//data
            //{"timeDiff":0,"useDefaultCVFlag":0,
            // "resumes":[
            // {"resumeId":7584273,"resumeName":"��������-��ɾ","subResumeId":73465132272517169,"master":1},
            // {"resumeId":7000416,"resumeName":"jobcn","subResumeId":72057757388963844,"master":0}
            // ],
            // "useDefaultCVSetTime":"2014-05-28",
            // "success":true}
            var subResumeId=0;
            var __resumeData={};//�����õļ�����Ϣ��
            function __callBack(data){
                __resumeData=data;
                if(data["useDefaultCVFlag"]===1){
                    for(var i=0;i<data["resumes"].length;i++){
                        var item_tmp=data["resumes"][i];
                        if(item_tmp["master"]===1){
                            subResumeId=item_tmp["subResumeId"];
                        }
                    }
                }
                if(subResumeId>0&&!jobcn.Person.Position.ofLetter()){
                    //--������Ĭ��ѡ�е��Ӽ���id����ôֱ��Ͷ�ݡ�
                    _isVerify_email_and_mobile(function(){
                        jobcn.Person.Position.applyPost(isMulti,subResumeId,posid);//��һ��ӦƸ apply_post()�����������ݹ���� ��ȷ���ظ�ӦƸ
                    });
                    return;
                }
                else{
                    //--����Ҫ���û�ѡ�������ѡ�С�
                    _isVerify_email_and_mobile(function(){
                        new jobcn.ajax().post({
                            url:"/person/microresume/isPosSupportMicroApply_action.ujson?t="+(+new Date()),
                            data:{posId : posid[0]},
                            beforeSendFunction : jobcn.ui.loading.show,
                            afterSendFunction : jobcn.ui.loading.hide,
                            successFunction : function(json){
                                json.success && selectResume.full(json.isSupportMicroApply);
                            }
                        });
                    });
                }
                return;
            }
            ajax_getResumeInfo(__callBack);
            /*return;
             var subResumeId=jobcn.util.cookie.get("applyRsumeId"+perAccountId);
             //����ѯ������Ͷ��
             if(subResumeId&&!jobcn.Person.Position.ofLetter()){
             _isVerify_email_and_mobile(function(){
             jobcn.Person.Position.applyPost(isMulti,subResumeId,posid);//��һ��ӦƸ apply_post()�����������ݹ���� ��ȷ���ظ�ӦƸ
             });
             return;
             }*/
            /*
             _isVerify_email_and_mobile(function(){
             new jobcn.ajax().post({
             url:"/person/microresume/isPosSupportMicroApply_action.ujson?t="+(+new Date()),
             data:{posId : posid[0]},
             beforeSendFunction : jobcn.ui.loading.show,
             afterSendFunction : jobcn.ui.loading.hide,
             successFunction : function(json){
             json.success && selectResume.full(json.isSupportMicroApply);
             }
             });
             });
             */
            //--
            var selectResume = {
                full : function(isMicroApply){
                    //��ѡ������Ի���
                    jobcn.Person.Position.isMicroApply = isMicroApply;
                    jobcn.Cache.get("apply_box", function(){
                        return new ol.box(null,{
                            boxid:"apply_box",
                            title: "ѡ��Ͷ�ݵļ���",
                            type:"ajax",
                            modal:true,
                            width:450,
                            boxclass:"jobcn_dialog",
                            showButton:false,
                            onopen : function(box){
                                var _noresume = box.find('.apply_noresume');
                                // no full resume
                                if (_noresume.length > 0) {
                                    // support micro resume
                                    if (!!jobcn.Person.Position.isMicroApply) {
                                        _noresume.addClass('apply_noresume_micro');
                                        box.find("#mirco_mirco_resume").click(function(){
                                            //JOBCNX-1402 �����Դ���ie6�£������һ��<a href="javascript:void(0)">���ӵ�hrefֵΪjavascript:void(0)</a> �����Ӳ�ͬʱִ��sea.use��sea.use���첽����ᱻ��������ģ�鷵��null��js����
                                            var func_handle=function(){
                                                box.close();
                                                seajs.use('/public/style/resume.css');
                                                seajs.use("p.microResume",function(microResume){
                                                    microResume.openEditBox(jobcn.Person.perAccountId);
                                                });
                                            }
                                            // see ../micro-resume.js
                                            if(/MSIE 6/g.test(navigator.appVersion)){
                                                setTimeout(func_handle,100);
                                            }
                                            else{
                                                func_handle();
                                            }
                                        });
                                    }else{
                                        // ��֧��΢���� ������΢������ť
                                        _noresume.find('.right').hide().siblings('.left').css({'float':'none','margin':'auto'});
                                    }
                                    // not resume
                                    box.find("#mirco_full_resume").click(function(){
                                        // location.href="/person/resume/index.jsp?t" +Math.random();
                                        box.close()
                                    });
                                } else {
                                    var L;
                                    if(jobcn.Person.Position.ofLetter()){
                                        L = box.find("#selectLetter");
                                        L.show();
                                        L.hover(function(){
                                            L.find("a").show();
                                        },function(){
                                            L.find("a").hide();
                                        });
                                    }
                                }
                            },
                            onok:function(box){
                                var form=jQuery(this.form); //box������form
                                var input=box.find("input[name='perResumeID']:radio:checked");
                                var subResumeId = input.val();
                                var slc_Resume = box.find(".resume-list dt input:checked");
                                var letter_idx = box.find("#selectLetter input:checked").val();
                                var isLetter = $('#ofLetter').attr('checked');
                                if(!isLetter) letter_idx = "0";		//�ж��Ƿ�ҪͶ�ݼ���
                                var relationFlag ="";
                                if (!subResumeId){
                                    alert("��ѡ����ҪͶ�ݵļ��������û�м�������ȥ��������ְ���ġ�>���ҵļ�������д������");
                                    return false;
                                }
                                //�����趨(����˴�ѡ��30����Ͷ��ֱ�ӷ��ͣ�����ѯ��)
                                var attr = $.fn.prop?"prop":"attr";
                                //--����resumeId��
                                var __thisResumeId=0;
                                for(var ii=0;ii<__resumeData.resumes.length;ii++){
                                    var item_tmp=__resumeData.resumes[ii];
                                    if(item_tmp["subResumeId"]==subResumeId){
                                        __thisResumeId=item_tmp["resumeId"];
                                    }
                                }

                                if(form.find("#apply-resume-list-cb").hasClass("selected")){
                                    /*jobcn.util.cookie.set("applyRsumeId"+perAccountId,subResumeId,{
                                     expires :30// ��ʱʱ�䣬��λ��
                                     });*/
                                    var _url="/person/setFastApplyConfig_action.ujson?cvFlag=1&resumeId="+__thisResumeId+"&t="+Math.random();
                                    $.ajax({
                                        url:_url,
                                        dataType:"json",
                                        success:function(data){}
                                    });
                                }else{
                                    /*
                                     jobcn.util.cookie.remove("applyRsumeId"+perAccountId);
                                     */
                                }
                                if(slc_Resume.attr("relationFlag")=="1"&&form.find("#apply-resume-setRelationFlag input")[attr]("checked")){
                                    relationFlag="0";
                                }
                                box.close();
                                jobcn.Person.Position.applyPost(isMulti,subResumeId,jobcn.Person.Position.getPosID(),letter_idx,relationFlag);//��һ��ӦƸ apply_post()�����������ݹ���� ��ȷ���ظ�ӦƸ
                            }
                        });
                    }).open("/person/apply/list_resume.uhtml");
                }
            };//end selectResume

        };
        /*΢��������
         **/
        if(posid.length==1){
            jobcn.Person.Position.microApplyPosId = posid[0];
            new jobcn.ajax().post({
                url:"/person/microresume/isPosSupportMicroApply_action.ujson?t="+(+new Date()),
                data:{
                    posId : posid[0]
                },
                beforeSendFunction : jobcn.ui.loading.show,
                afterSendFunction : jobcn.ui.loading.hide,
                successFunction : function(json){
                    if(json.success && json.isSupportMicroApply){
                        //֧��΢����
                        jobcn.Person.Session.check(applyFunction,true)
                    }else{
                        //�ܾ�΢����
                        jobcn.Person.Session.check(applyFunction,false)
                    }
                }
            });
        }else{
            jobcn.Person.Session.check(applyFunction,false)
        }

        //jobcn.Person.Session.check(applyFunction);//jobcn.Person.Session.check end

        if(jobcn.Person.Session.isLogin()){
            applyState="�ѵ�¼"
        }else{
            applyState="δ��¼"
        }
        jobcn.Analytics.Track("ӦƸ/"+applyState+"/"+posid.length)
        !!applySearchNum && jobcn.Analytics.Track("ӦƸ/"+applyState+"/"+applySearchNum+"/bait")
    },
    applyPost: function(re,resumeID,posID,letterID,relationFlag,send_letter,callback){
        // (re, resumeID, posID, letterID, relationFlag, send_letter)
        // (�Ƿ���ְλӦƸ, ����id, ְλid, ��ְ��id, �Ƿ���Ҫȷ���ظ�ӦƸ, ��ְ������)

        relationFlag = relationFlag || "";
        var postPar = {
            ids	: posID.join(","),
            perResumeID: resumeID,
            letter_idx : letterID,
            relationFlag:relationFlag,
            re_apply: re || 0
        }
        if(send_letter){
            postPar.send_letter = send_letter;
        }

        new jobcn.ajax().post({
            url:"/person/apply/apply_online.ujson?t="+(+new Date()),
            data: postPar ,
            beforeSendFunction:jobcn.ui.loading.show,
            afterSendFunction:jobcn.ui.loading.hide,
            successFunction:function(json){
                json = json || {};
                var html = "";
                if(json.SUCCESS){
                    // JOBCNX-1599 ��ʾ��΢�ŵĶ�ά��
                    var weiXinQrcode;
                    if(!isBindedWeiXin){
                        $.ajax({
                            async:false,
                            type:"POST",
                            url:'/weixin/showQR.ujson?t='+(+new Date()),
                            // showQr->0 ��ǿ����ʾ
                            // flag->1 ����7����ʾ��
                            data:{showQr:0,flag:1},
                            contentType:"application/x-www-form-urlencoded",
                            dataType:"json",
                            success:function(data){
                                if(data.show==1){
                                    weiXinQrcode=data.qr_url;
                                }else{
                                    //΢���Ѿ��󶨣�����������
                                    isBindedWeiXin=true;
                                }
                            }
                        });
                    }
                    // result html
                    html += "<div class='result_dialog'>";
                    html += "<p class='info'>" + json.info + "</p>";
                    // list of apply result
                    html += "<ul class='clearfix'>";
                    // items
                    var items = [];
                    for (var i = 0, l = json.ps.length; i < l; i++) {
                        var im = json.ps[i];
                        items.push("<li class='clearfix'>");
                        items.push("<div class='pos_com'>");
                        items.push("<div class='pos'><span>" + im.detail.pos_name + "</span></div>");
                        items.push("<div class='com'><span>" + im.detail.com_name + "</span></div>");
                        items.push("</div>");
                        items.push("<div class='msg_box'>");
                        if (im.result === 1) {			// success
                            items.push("<span class='msg_ok'><i></i>ӦƸ�ɹ�</span>");
                        } else if (im.result === 0) {	// fail
                            items.push("<span class='msg_error'><i></i>" + (im.detail.reason || "") + "</span><b>&nbsp;</b>");
                        } else if (im.result === 2) {	// reapply ?
                            items.push("<span class='msg_tips'><i></i>" +
                                "������" + im.detail.per_time + "ǰӦƸ" + im.detail.app_num + "�Σ��Ƿ�����ӦƸ?</span>");
                            items.push('<input type="checkbox" value="' + im.detail.pos_id + '" name="chkRefId" />');
                        }
                        items.push("</div>");
                        items.push("</li>");
                    }
                    html += items.join("");

                    html += "</ul>";
                    // tip
                    html += "<p class='tip'><b>[��ܰ��ʾ]</b>�������Ĺ涨����ֹ���˵�λ������Աʱ��������Ϊ��<br>1.�ṩ�����Ƹ��Ϣ��2.����ְ����ȡ��Ƹ���ã�3.��¼����Ա��ȡ��֤����Ѻ��4.��Ѻ��¼����Ա�����֤��֤����5.��������ԱΪ��Ĳȡ������������������Υ�����<br>������������Ͷ����г�����涨����ʮ��</p>";
                    // button bar
                    html += "<div class='box-button'>";
                    if(!isBindedWeiXin && weiXinQrcode){
                        html += "<div class='pos_weixin ie6hovers'>";
                        html += "<div class='weixin_title'><i><img src='/commImage/10.2/QRCode/qr_icon.jpg' alt='΢�ŷ����' width='23' height='23' border='0'/></i>��ע΢�Ź��ںţ�������Ϣ��֪��</div>";
                        html += "<div class='weixin_body jobcn_tip'><div class='tip_top'></div><div class='tip_body'><div class='pic'><img src='"+weiXinQrcode+"' alt='΢�ŷ����' width='87' height='87' border='0'/></div><div class='text'>�ֻ�ɨ��һ��</div></div></div>";
                        html += "</div>";
                    }
                    if (json.redo > 0) {
                        html += "<button type='button' title='ȫѡ' class='lbutton2 box-checkAll'>ȫѡ</button>";
                        html += "<button type='button' title='����ӦƸ' class='lbutton2 box-ok'>����ӦƸ</button>";
                    }
                    html += "<button type='botton' title='�ر�' class='box-cancel'>�ر�</button>";
                    html += "</div>";
                    // end of dialog
                    html += "</div>";

                    new ol.box(html, {
                        boxid:"apply"+json.state,
                        title:"Ͷ�ݼ���",
                        boxclass:"jobcn_dialog",
                        showButton: false,
                        modal:true,
                        width:600,
                        onopen:function(box){
                            var thisBox = box.getBox()
                            thisBox.find(".box-checkAll").click(function(){
                                var ck = $(this).attr("ck")||0;
                                $(this).attr("ck",parseInt(ck)+1)
                                var $input = thisBox.find("td input");
                                !!(ck%2) ? $input.prop("checked",false) : $input.prop("checked",true);
                            });
                        },
                        onok:function(box){
                            var ids = [];
                            var list = box.getBox().find("input:checked");

                            list.each(function(){
                                ids.push($(this).val());
                            });
                            if(ids.length>0){
                                posID = ids
                                jobcn.Person.Position.applyPost(1,resumeID,posID,letterID,"0");//ȷ���ظ�ӦƸ
                                box.close();
                            }else{
                                alert("û��ѡ����Ҫ����ӦƸ��ְλ");
                            }
                        }
                    }).open();
                };//end if

                if(typeof callback =="function"){
                    callback(json);
                }
            }//end success
        });
    },
    addMyFavouriteM : function(dom){
        var find = dom || $("#result_data .job_check.selected");
        var posids = [];
        if(find.length>0){
            find.each(function(){
                posids.push($(this).attr('data-value'));
            });
            jobcn.Person.Position.addMyFavourite(posids);
        }else{
            alert("����ѡ��Ҫ�ղص�ְλ��");
        }
    },
    //�ղ�
    addMyFavourite : function(ids){
        var favState = "δ��¼";
        if(ids && !jobcn.util.isArray(ids))
        {
            ids=[ids];
        }
        if(!ids||ids.length == 0){
            alert("����ѡ��Ҫ�ղص�ְλ��");
            return;
        }
        var par=[];
        for(var i = 0 ; i < ids.length ; i++)
        {
            par.push("ids="+ids[i]);
        }
        jobcn.Person.Session.check(function(){
            new jobcn.ajax().get({
                url:"/person/apply_manage/myFavourite_add.ujson?_t="+new Date().getTime()+"&"+par.join("&"),
                beforeSendFunction:jobcn.ui.loading.show,
                afterSendFunction:jobcn.ui.loading.hide,
                successFunction:function(json){
                    var msg = json.msg,state;
                    if(json.success)
                    {
                        if((json.total_count-json.fail_count)==1)
                        {state=true;
                            msg = "<div class='successful_favourite'><div class='success_icon'></div><p>�ղسɹ���</p></div>";
                        }else  if (json.fail_count < 1){
                            state=true;
                            msg = "<div class='successful_favourite'><div class='success_icon'></div><p>ȫ���ղسɹ���</p></div>";
                        }else{
                            state=false;
                            //msg = "<b>"+(json.total_count-json.fail_count)+"</b>��ְλ�ɹ����뵽����ְλ�ղؼУ�<br>����<b>"+json.fail_count+"</b>��ְλ����ǰ�Ѿ����뵽�ղؼУ�";
                            msg = "<div class='fast_favourite'><div class='success_icon'></div><h1 class='failure'>�ղسɹ���</h1><p><b>"+(json.total_count-json.fail_count)+"</b>��ְλ�ɹ����뵽����ְλ�ղؼУ�<br>����<b>"+json.fail_count+"</b>��ְλ����ǰ�Ѿ����뵽�ղؼУ�</p></div><div class='box-button'><input type='button' class='box-cancel rbutton2' value='�ر�' name='cancel'></div>";
                        }
                    }
                    var boxPar = {
                        boxid:"boxForAddMyFavourite",
                        width:400,
                        showButton:false,
                        modal:true,
                        title:"�ղ�ְλ",
                        boxclass:"ol_box ol_box_person",
                        onopen: function(box){
                            if(state)setTimeout(function(){box.close()},2000);//3s��ر�
                        }
                    }
                    if(state){
                        boxPar.width = 300
                        boxPar.showTitle = false
                    }
                    new ol.box(msg,boxPar).open();
                }
            });//ajax end
        });

        if(jobcn.Person.Session.isLogin())
            applyState="�ѵ�¼"
        else
            applyState="δ��¼"
        jobcn.Analytics.Track("�ղ�/"+applyState)
        jobcn.Analytics.Track("�ղ�ְλ"+location.pathname)
    },//end addMyFavourite
    toFriendCode : function(obj){
        obj.src="/person/recrandomCode.xhtml?_t="+ new Date().getTime()
    },
    //�Ƽ�������
    toFriend : function(PosId,jobName){
        if(jobcn.Person.Session.isLogin()){
            new ol.box('<div><div style="padding:20px;"><div style="clear:both;height:30px"><div style="float:left;width:100px;">���ѵĵ������䣺</div><div><input id="toFrdMail" type="text" class="jobcn_ui_hover" style="width:280px;"/></div></div><div style="clear:both;"><div style="float:left;width:100px;">�����Ѻ��Ѽ��䣺<font color="red">��200�ֽ��ڣ�</font></div><div><textarea id="toFrdMsg" style="width:280px;height:100px;" class="jobcn_ui_hover"/></div><div style="float:left;width:100px;">��֤�룺</div>      <div>        <input type="text" style="width:80px;" class="jobcn_ui_hover" id="toFrdCode"> <img align="absmiddle" id="randomCode" onclick="jobcn.Person.Position.toFriendCode(this);" src="/person/recrandomCode.xhtml?_t='+ new Date().getTime()+'"></div></div></div><div class="box-button"><input type="submit" class="lbutton2 box-ok" value="����">&nbsp;<input type="button" class="box-cancel rbutton2" value="ȡ��" name="cancel"></div></div>',{
                boxid:"apply_box",
                title:"�Ƽ�������[�ѵ�¼]",
                modal:true,
                width:450,
                showButton:false,
                boxclass:"ol_box ol_box_person",
                onok:function(box){
                    var toFrdMail = box.find("#toFrdMail");
                    var toFrdCode = box.find("#toFrdCode");
                    if(toFrdCode.val()==""){toFrdCode.focus(); alert("����д��֤��!"); return;}
                    jobcn.form.validator(toFrdMail.val(),{type:'email',errorFunction:function(){
                        toFrdMail.focus(); alert("��������ȷ�ĵ����ʼ���ַ!");
                        return;
                    }})
                    jobcn.form.validator(box.find("#toFrdMsg").val(),{type:'length',max:200,errorFunction:function(){
                        box.find("#toFrdMsg").focus(); alert("��������ݲ��ܳ���200���ֽ�!");
                        return;
                    }})
                    var jobInfo = $("#companyDetail").find(".posDesc p.f444").html();
                    box.find(".box-ok").attr("disabled","disabled").val("������..");
                    new jobcn.ajax().post({
                        url:"/person/positiontofriend.xhtml",
                        charset : "gbk",
                        data:{
                            "toFrdMail" : toFrdMail.val(),
                            "toFrdMsg" : box.find("#toFrdMsg").val(),
                            "toPosId" : PosId,
                            "toJobName" : jobName,
                            "toJobInfo" : jobInfo,
                            "perEmail" : jobcn.Person.perEmail,
                            "perName" : jobcn.Person.perName,
                            "code"	: toFrdCode.val()
                        },
                        successFunction:function(json){
                            box.find(".box-ok").attr("disabled","").val("����");
                            if(json.success){
                                alert("Ͷ���ʼ��ɹ��������������ͣ���л�Ƽ�!");
                                box.close();
                                jobcn.Analytics.Track("�Ƽ�������/�ѵ�¼/�ɹ�")
                            }else{
                                if(json.code == 1){
                                    document.getElementById('randomCode').src="/person/recrandomCode.xhtml?_t="+ new Date().getTime();
                                    alert("��֤������������������룡");
                                }else if(json.code == 2){
                                    alert("��������ݳ����������ƣ�");
                                }else{
                                    alert("����ʧ��!����������������Ƿ���ȷ��");
                                }
                                jobcn.Analytics.Track("�Ƽ�������/�ѵ�¼/ʧ��")
                            }
                        }
                    });
                }
            }).open();
        }else{
            var bHtml = [];
            bHtml.push('<div>')
            bHtml.push('  <div style="padding:20px;">')
            bHtml.push('    <div style="clear:both;height:30px">')
            bHtml.push('      <div style="float:left;width:100px;">����������</div>')
            bHtml.push('      <div>')
            bHtml.push('        <input id="toFrdUserName" type="text" class="jobcn_ui_hover" style="width:120px;"/>')
            bHtml.push('      </div>')
            bHtml.push('    </div>')
            bHtml.push('    <div style="clear:both;height:30px">')
            bHtml.push('      <div style="float:left;width:100px;">���ĵ������䣺</div>')
            bHtml.push('      <div>')
            bHtml.push('        <input id="toFrdUserMail" type="text" class="jobcn_ui_hover" style="width:280px;"/>')
            bHtml.push('      </div>')
            bHtml.push('    </div>')
            bHtml.push('    <div style="clear:both;height:30px">')
            bHtml.push('      <div style="float:left;width:100px;">���ѵĵ������䣺</div>')
            bHtml.push('      <div>')
            bHtml.push('        <input id="toFrdMail" type="text" class="jobcn_ui_hover" style="width:280px;"/>')
            bHtml.push('      </div>')
            bHtml.push('    </div>')
            bHtml.push('    <div style="clear:both;">')
            bHtml.push('      <div style="float:left;width:100px;">���������ԣ�<font color="red">��200�ֽ��ڣ�</font></div>')
            bHtml.push('      <div>')
            bHtml.push('        <textarea id="toFrdMsg" style="width:280px;height:100px;" class="jobcn_ui_hover"/>')
            bHtml.push('      </div>')
            bHtml.push('    </div>')
            bHtml.push('    <div style="clear:both;">')
            bHtml.push('      <div style="float:left;width:100px;">��֤�룺</div>')
            bHtml.push('      <div>')
            bHtml.push('        <input id="toFrdCode" type="text" class="jobcn_ui_hover" style="width:80px;"/> <img align="absmiddle" src="/person/recrandomCode.xhtml?_t='+ new Date().getTime()+'" onclick="jobcn.Person.Position.toFriendCode(this);" id="randomCode">')
            bHtml.push('      </div>')
            bHtml.push('    </div>')
            bHtml.push('  </div>')
            bHtml.push('  <div class="box-button">')
            bHtml.push('    <input type="submit" class="lbutton2 box-ok" value="����" />&nbsp;')
            bHtml.push('    <input type="button" class="box-cancel rbutton2" value="ȡ��" name="cancel" />')
            bHtml.push('  </div>')
            bHtml.push('</div>')
            new ol.box(bHtml.join(''),{
                boxid:"apply_box",
                title:"�Ƽ�������[δ��¼]",
                modal:true,
                width:450,
                showButton:false,
                boxclass:"ol_box ol_box_person",
                onok:function(box){
                    var toFrdMail = box.find("#toFrdMail");
                    var toFrdUserName = box.find("#toFrdUserName");
                    var toFrdUserMail = box.find("#toFrdUserMail");
                    var toFrdCode = box.find("#toFrdCode");
                    if(toFrdCode.val()==""){toFrdCode.focus(); alert("����д��֤��!"); return;}
                    jobcn.form.validator(toFrdMail.val(),{type:'email',errorFunction:function(){
                        toFrdMail.focus();
                        alert("��������ȷ�ĵ����ʼ���ַ!");
                        return;
                    }})
                    jobcn.form.validator(box.find("#toFrdMsg").val(),{type:'length',max:200,errorFunction:function(){
                        box.find("#toFrdMsg").focus(); alert("��������ݲ��ܳ���200���ֽ�!");
                        return;
                    }})
                    jobcn.form.validator(toFrdUserMail.val(),{type:'length',max:50,min:6,errorFunction:function(){
                        toFrdUserMail.focus(); alert("���ĵ�������ĳ���������6��50���֣�");
                        return;
                    }})

                    box.find(".box-ok").attr("disabled","disabled").val("������..");
                    var jobInfo = $("#companyDetail").find(".posDesc p.f444").html();
                    new jobcn.ajax().post({
                        url:"/person/positiontofriend2.xhtml",
                        charset : "gbk",
                        data:{
                            "toFrdUserName" : toFrdUserName.val(),
                            "toFrdUserMail" : toFrdUserMail.val(),
                            "toFrdMail" : toFrdMail.val(),
                            "toFrdMsg" : box.find("#toFrdMsg").val(),
                            "toPosId" : PosId,
                            "toJobName" : jobName,
                            "toJobInfo" : jobInfo,
                            "code"	: toFrdCode.val()
                        },
                        successFunction:function(json){
                            box.find(".box-ok").attr("disabled","").val("����");
                            if(json.success != "false"){
                                alert("Ͷ���ʼ��ɹ��������������ͣ���л�Ƽ�!");
                                box.close();
                                jobcn.Analytics.Track("�Ƽ�������/δ��¼/�ɹ�")
                            }else{
                                document.getElementById('randomCode').src="/person/recrandomCode.xhtml?_t="+ new Date().getTime();
                                alert("����ʧ��!"+json.msg);
                                jobcn.Analytics.Track("�Ƽ�������/δ��¼/ʧ��")
                            }
                        }
                    });
                }
            }).open();
        }//end login if
    }
};