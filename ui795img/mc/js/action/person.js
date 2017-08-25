define(function(require, exports, module) {
    var $ = require("$"),
        juicer = require("juicer"),
        ui = require("ui.base"),
        util = require("util"),
        mBox = require("ui.mBox"),
        personModify = require('action.person.modifyInfo'),
        exLogin = require("action.login");

    var THIRD_ACCOUNT_TYPE = {
        QQ: "QQ登录",
        SINA: "微博登录",
        WEIXIN: "微信登录"
    };
    // oauth site
    var OAUTH_SITE = {
        SINA: 6,
        QQ: 7,
        WEIXIN: 11
    };
    // request type
    var REQUEST_TYPE = {
        LOGIN_REQ: 0,
        BIND_REQ: 1
    };

    var USER_UNBIND = "/thirdLogin/unbindedAccount.xhtml";

    var out = {
        tabSlideClick: function() {
            ui.tabSlide("#tab_person", "li", "onclick", "active");
            $("#lastUpdate").html($("#lastUpdate").attr("title").replace(/:00$/, ""))
            var li = $("#tab_person li")
            li.each(function(i) {
                $(this).click(function() {
                    window.location.hash = "tab" + i;
                });
            });

            if (/#tab(\d)/.test(window.location.hash)) {
                li[window.location.hash.replace(/[^\d]/g, "")].click();
            }
        },
        init: function() {
            $("#nav_person_center").addClass("active");
            //out.tabSlideClick()
            out.updateInfo();
            out.accountSettings();
            out.removesessionStorage();
            out.updateAvatar();
            out.thirdLoginAccBind();
            //out.yahooEmail_hint();
        },
        //删除应聘管理中的存储
        removesessionStorage: function() {
            delete sessionStorage.pos_apphis_del;
            delete sessionStorage.pos_fav_del;
            delete sessionStorage.per_invhis_del;
            delete sessionStorage.per_sendout_del;
        },
		//跳转到修改头像页面
        updateAvatar: function() {
            $('#userPhoto').click(function(event) {
                window.location.href = '/person/resume/resumeModule.html?act=photo&t=' + Math.random();
            });
        },
        showOption: function() {
            //构造年月日
            juicer.register('showOption', function(data) {
                var htm = ""
                if (data.min < data.max) {
                    for (var i = data.min; i <= data.max; i++) {
                        htm += '<option value="' + (i < 10 ? "0" + i : i) + '" ' + (data.def == i ? "selected" : "") + '>' + i + '</option>\n'
                    }
                } else {
                    for (var i = data.min; i >= data.max; i--) {
                        htm += '<option value="' + (i < 10 ? "0" + i : i) + '" ' + (data.def == i ? "selected" : "") + '>' + i + '</option>\n'
                    }
                }
                return htm
            });
            //执行替换
            $("select.js2option").each(function() {
                var self = $(this)
                $(this).html(juicer($(this).html(), {
                    value: {
                        min: self.attr("min") || 0,
                        max: self.attr("max") || 0,
                        def: self.attr("def") || 0
                    }
                }))
            })
        },
        //显示分页下拉框
        showPageSelect: function() {
            var select = $("select.gotoPage")
            if (select.length > 0) {
                select.each(function() {
                    var self = $(this),
                        pageCount = self.attr("pageCount"),
                        pageNo = self.attr("pageNo"),
                        html = ""
                    for (var i = 1; i <= pageCount; i++) {
                        html += '<option value="' + i + '" ' + (pageNo == i ? "selected" : "") + '>第' + i + '页</option>\n'
                    }
                    $(this).html(html)
                })
            }
        },
        updateInfo: function(isReload) {
            if (out.Session.isLogin()) {
                var per = my.Person
                $("#per_logout").hide()
                $("#per_name").html(per.perUserName || per.perEmail)
                $("#per_login").show().find(".per_name").click(function(e) {
                        var parent = $(this).parent().parent()
                        if (e && e.stopPropagation) e.stopPropagation()
                        if (e && e.preventDefault) e.preventDefault()
                        if (parent.hasClass("hover")) {
                            parent.removeClass("hover")
                        } else {
                            if (per.newMsgCount > 0) {
                                $("#per_newMsgCount").html(per.newMsgCount)
                            }
                            //$("#per_totalMsgCount").html(per.totalMsgCount)
                            parent.addClass("hover")
                            var hideTip = function() {
                                parent.removeClass("hover")
                                $(document).off("click", hideTip)
                            }
                            $(document).on("click", hideTip)
                        }
                    }) //end ajax
                $("#footUserOnline").show().find("a").first().html(per.perUserName || per.perEmail)
                $("#footUserOffline").hide()
            } else {
                if ( !/(reg\/default\.jsp|touch\/login\.jsp)/.test(location.href) ) {
                    $('#per_logout').show();
                }
                $("#per_login").hide()
                $("#footUserOnline").hide().find("a").first().html("")
                $("#footUserOffline").show()
                if (isReload) {
                    $.ajax({
                        url: "/person/status.xhtml?t=" + (+new Date()),
                        success: function() {
                            my.Person = {
                                perUserName: jobcn.Person.perUserName,
                                perAccountId: jobcn.Person.perAccountId,
                                perEmail: jobcn.Person.perEmail,
                                perName: jobcn.Person.perName,
                                memberClass: jobcn.Person.memberClass,
                                newMsgCount: jobcn.Person.newMsgCount,
                                totalMsgCount: jobcn.Person.totalMsgCount,
                                lastRefreshTime: new Date()
                            }
                            out.updateInfo();
                        }
                    })
                }
            }
        },
        Session: {
            isLogin: function() {
                if ((new Date() - my.Person.lastRefreshTime) > 1000 * 60 * 5) {
                    $.ajax({
                        url: "/person/status.xhtml?t=" + (+new Date()),
                        success: function() {
                            my.Person = {
                                perUserName: jobcn.Person.perUserName,
                                perAccountId: jobcn.Person.perAccountId,
                                perEmail: jobcn.Person.perEmail,
                                perName: jobcn.Person.perName,
                                memberClass: jobcn.Person.memberClass,
                                newMsgCount: jobcn.Person.newMsgCount,
                                totalMsgCount: jobcn.Person.totalMsgCount,
                                lastRefreshTime: new Date()
                            }
                            out.updateInfo();
                        }
                    })
                }
                return !(!my.Person.perAccountId)
            },
            logout: function(callBack) {
                $.ajax({
                    url: "/person/logout_action.ujson?t=" + new Date().getTime(),
                    success: function(data, status, xhr) {
                        var result = util.toJSON(data);
                        if (result.success) {
                            (typeof callback == "function" ? callback() : "")
                            out.updateInfo()
                        }
                    }
                })
            },
            check: function(callback) {
                var self = this;
                var mPerson = my.Person,
                    personLogin = null
                if (!mPerson) {
                    alert('系统问题：用户信息没有设置!');
                }
                if (out.Session.isLogin()) {
                    (typeof callback == "function" ? callback() : "");
                    return
                }

                /*var html ='<div id="pop-login" class="pop_login">'
                        + '    <div id="login-input">'
                        + '        <ul>'
                        + '            <li class="username">'
                        + '                <input type="text" name="userName" placeholder="请输入用户名或邮箱" id="login_name" value="">'
                        + '            </li>'
                        + '            <li class="pwd">'
                        + '                <input type="password" name="password" placeholder="请输入密码" id="login_password" value="">'
                        + '                <i id="pwd_vision" class="pwd_invisiable"></i>'
                        + '            </li>'
                        + '            <li class="captcha">'
                        + '                <input type="text" name="randomCode" placeholder="请输入验证码" id="login_captcha" value="">'
                        + '                <img src="" data-src="/person/loginrandomCodeTouch.xhtml" class="img-captcha" id="captcha-img">'
                        + '            </li>'
                        + '        </ul>'
                        + '    </div>'
                        + '    <div id="login-meta" class="login_findPwd">'
                        + '        <div class="login_auto">'
                        + '            <input type="checkbox" value="1" id="loginFree" checked="checked">'
                        + '            <label for="loginFree">30 天内自动登录</label>'
                        + '        </div>'
                        + '        <div class="findPwd">'
                        + '            <a href="/touch/about/getBackPassword.jsp">忘记密码</a>'
                        + '        </div>'
                        + '    </div>'
                        + '    <div id="login-button" class="btn_login">'
                        + '        <button class="btn_green1" onclick="window.location.href=\'/touch/reg/default.jsp\'" type="button" tabindex="4">注册</button>'
                        + '        <button type="button" class="btn_orange1 box-ok" tabindex="3">登录</button>'
                        + '    </div>'
                        + '</div>';
                personLogin = new mBox(html, {
                    title: "登录/注册",
                    width: "260px",
                    onok: function(mBoxObj) {
                        var box = mBoxObj.box,
                            unm = box.find("#login_name").val(),
                            pwd = box.find("#login_password").val()
                        if (unm == "") {
                            alert('请输入用户名或邮箱!', 1000);
                            return
                        }
                        if (pwd == "") {
                            alert('请输入密码!', 1000);
                            return
                        }
                        $.ajax({
                            url: "/person/login_action.ujson",
                            type: "POST",
                            data: {
                                userName: unm,
                                password: pwd,
                                remember: box.find("#loginFree:checked").val() || 0
                            },
                            beforeSend: function() {
                                ui.mask.show({
                                    id: 'login_mask',
                                    z: 10
                                });
                                ui.loading.show({
                                    id: 'login_loading',
                                    z: 12
                                });
                            },
                            error: function() {
                                alert('请求出错!');
                                ui.loading.hide({
                                    id: 'login_loading'
                                });
                                ui.mask.hide({
                                    id: 'login_mask'
                                });
                            },
                            success: function(data, status, xhr) {
                                var result = util.toJSON(data);
                                if (result.success) {
                                    out.updateInfo(true);
                                    (typeof callback == "function" ? callback() : "")
                                } else {
                                    alert(result.msg);
                                }
                                ui.loading.hide({
                                    id: 'login_loading'
                                });
                                ui.mask.hide({
                                    id: 'login_mask'
                                });
                                mBoxObj.close()
                            }
                        }); //end ajax
                    },
                    onopen: function(mBoxObj) {
                        var $box = mBoxObj.box;
                        var $loginPwd = $('#login_password', $box);
                        $box.on('tap', '#pwd_vision', function(event) {
                            event.stopPropagation();
                            var $pwdVision = $(this);
                            if ($pwdVision.hasClass('pwd_invisiable')) {
                                // 不可见 -> 可见
                                $pwdVision.removeClass('pwd_invisiable').addClass('pwd_visiable');
                                $loginPwd.attr('type', 'text');
                            } else if ($pwdVision.hasClass('pwd_visiable')) {
                                // 可见 -> 不可见
                                $pwdVision.removeClass('pwd_visiable').addClass('pwd_invisiable');
                                $loginPwd.attr('type', 'password');
                            }
                        });

                        // 安卓设备的虚拟键盘会遮挡弹出层
                        // 取消fixed定位以便页面可以滚动
                        if (util.isAndroid) {
                            $box.on('focus', '#login_name, #login_password', function() {
                                $box.css('position', 'absolute');
                            });
                            $box.on('blur', '#login_name, #login_password', function() {
                                $box.css('position', 'fixed');
                            });
                        }
                    }
                });
                personLogin.open();*/

                self.getLoginStatus(function(isNeedLoginCode) {
                    var html ='<div id="pop-login" class="pop_login">'
                            + '    <div id="login-input">'
                            + '        <ul>'
                            + '            <li class="username">'
                            + '                <input type="text" name="userName" placeholder="请输入用户名或邮箱" id="login_name" value="">'
                            + '            </li>'
                            + '            <li class="pwd">'
                            + '                <input type="password" name="password" placeholder="请输入密码" id="login_password" value="">'
                            + '                <i id="pwd_vision" class="pwd_invisiable"></i>'
                            + '            </li>'
                            + (isNeedLoginCode ? '<li class="captcha"><input type="text" name="randomCode" placeholder="请输入验证码" id="login_captcha" value=""><img src="" data-src="/person/loginrandomCodeTouch.xhtml" class="img-captcha" id="captcha-img"></li>' : '')
                            + '        </ul>'
                            + '    </div>'
                            + '    <div id="login-meta" class="login_findPwd">'
                            + '        <div class="login_auto">'
                            + '            <input type="checkbox" value="1" id="loginFree" checked="checked">'
                            + '            <label for="loginFree">30 天内自动登录</label>'
                            + '        </div>'
                            + '        <div class="findPwd">'
                            + '            <a href="/touch/about/getBackPassword.jsp">忘记密码</a>'
                            + '        </div>'
                            + '    </div>'
                            + '    <div id="login-button" class="btn_login">'
                            + '        <button class="btn_green1" onclick="window.location.href=\'/touch/reg/default.jsp\'" type="button" tabindex="4">注册</button>'
                            + '        <button type="button" class="btn_orange1 box-ok" tabindex="3">登录</button>'
                            + '    </div>'
                            + '</div>';

                    personLogin = new mBox(html, {
                        title: "登录/注册",
                        width: "260px",
                        onok: function(mBoxObj) {
                            var box = mBoxObj.box,
                                unm = box.find("#login_name").val(),
                                pwd = box.find("#login_password").val()
                            if (unm == "") {
                                alert('请输入用户名或邮箱!', 1000);
                                return
                            }
                            if (pwd == "") {
                                alert('请输入密码!', 1000);
                                return
                            }
                            if (isNeedLoginCode && box.find('#login_captcha').val() == "") {
                                alert('请输入验证码', 1000);
                                return
                            }

                            var _data = {
                                userName: unm,
                                password: pwd,
                                remember: box.find("#loginFree:checked").val() || 0
                            };
                            if (isNeedLoginCode) _data['randomCode'] = box.find('#login_captcha').val();

                            $.ajax({
                                url: "/person/login_action.ujson",
                                type: "POST",
                                data: _data,
                                beforeSend: function() {
                                    ui.mask.show({
                                        id: 'login_mask',
                                        z: 10
                                    });
                                    ui.loading.show({
                                        id: 'login_loading',
                                        z: 12
                                    });
                                },
                                error: function() {
                                    alert('请求出错!');
                                    ui.loading.hide({
                                        id: 'login_loading'
                                    });
                                    ui.mask.hide({
                                        id: 'login_mask'
                                    });
                                },
                                success: function(data, status, xhr) {
                                    var result = util.toJSON(data);
                                    if (result.success) {
                                        out.updateInfo(true);
                                        mBoxObj.close();
                                        (typeof callback == "function" ? callback() : "")
                                    } else {
                                        self.getLoginStatus(function(isNeedCode) {
                                            if ( isNeedCode && !$('#login_captcha').length ) self.showCaptcha();
                                            self.refreshCaptcha(box.find('#captcha-img'));
                                        });
                                        alert(result.msg);
                                    }
                                    ui.loading.hide({
                                        id: 'login_loading'
                                    });
                                    ui.mask.hide({
                                        id: 'login_mask'
                                    });
                                    // mBoxObj.close();
                                }
                            }); //end ajax
                        },
                        onopen: function(mBoxObj) {
                            var $box = mBoxObj.box;
                            var $loginPwd = $('#login_password', $box);
                            $box.on('tap', '#pwd_vision', function(event) {
                                event.stopPropagation();
                                var $pwdVision = $(this);
                                if ($pwdVision.hasClass('pwd_invisiable')) {
                                    // 不可见 -> 可见
                                    $pwdVision.removeClass('pwd_invisiable').addClass('pwd_visiable');
                                    $loginPwd.attr('type', 'text');
                                } else if ($pwdVision.hasClass('pwd_visiable')) {
                                    // 可见 -> 不可见
                                    $pwdVision.removeClass('pwd_visiable').addClass('pwd_invisiable');
                                    $loginPwd.attr('type', 'password');
                                }
                            });

                            $box.on('tap', '#captcha-img', function(event) {
                                event.stopPropagation();
                                self.refreshCaptcha($box.find('#captcha-img'));
                            });

                            self.refreshCaptcha($box.find('#captcha-img'));

                            // 安卓设备的虚拟键盘会遮挡弹出层
                            // 取消fixed定位以便页面可以滚动
                            if (util.isAndroid) {
                                $box.on('focus', '#login_name, #login_password', function() {
                                    $box.css('position', 'absolute');
                                });
                                $box.on('blur', '#login_name, #login_password', function() {
                                    $box.css('position', 'fixed');
                                });
                            }
                        }
                    });
                    personLogin.open();
                });
            },
            getLoginStatus: function(callback) {
                $.ajax({
                    url: '/person/login_status.ujson?_t=' + Math.random(),
                    data: {},
                    success: function(resp) {
                        var resp = util.toJSON(resp);
                        callback && callback(resp.switchKey);
                    }
                });
            },
            showCaptcha: function() {
                var captcha = '<li class="captcha"><input type="text" name="randomCode" placeholder="请输入验证码" id="login_captcha" value=""><img src="" data-src="/person/loginrandomCodeTouch.xhtml" class="img-captcha" id="captcha-img"></li>';
                $('#login-input .pwd').after(captcha);
            },
            refreshCaptcha: function($img) {
                $img.attr('src', $img.attr('data-src') + '?_t=' + Math.random());
            }
        },
        //找回密码
        foundPwd: function() {
            $(".btn_save, .btn1_submit").click(function() {
                var userName = $("#userName").val(),
                    userEmail = $("#userEmail").val();
                if (util.isEmpty(userName) && util.isEmpty(userEmail)) {
                    alert("请务必填写用户名或电子邮件其中一项!");
                    return;
                }
                $.ajax({
                    url: "/touch/getpwdBack.uhtml",
                    type: "POST",
                    data: {
                        "m.userName": userName,
                        "m.email": userEmail
                    },
                    beforeSend: function() {
                        ui.mask.show({
                            id: 'login_mask',
                            z: 10
                        });
                        ui.loading.show({
                            id: 'login_loading',
                            z: 12
                        });
                    },
                    error: function() {
                        alert('请求出错!');
                        ui.loading.hide({
                            id: 'login_loading'
                        });
                        ui.mask.hide({
                            id: 'login_mask'
                        });
                    },
                    success: function(data, status, xhr) {
                        var json = util.toJSON(data).head;
                        if (json.code == 0) {
                            alert(json.msg);
                        } else {
                            alert(json.msg);
                        }
                        ui.loading.hide({
                            id: 'login_loading'
                        });
                        ui.mask.hide({
                            id: 'login_mask'
                        });
                    }
                })
            });
        },
         dic: {
            //删除时务必小心是否有其他js调用
            note: function() {
                var cn = [],
                    en = []
                cn[0] = "普通话";
                en[0] = "Chinese"
                cn[1] = "粤语";
                en[1] = "Cantonese"
                cn[87] = "已工作{y}年零{m}个月";
                en[87] = "{y} years {m} months work experience"
                cn[88] = "已工作{m}个月";
                en[88] = "{m} months work experience"
                cn[89] = "空";
                en[89] = "empty"
                cn[90] = "空";
                en[90] = "empty"
                cn[91] = "空";
                en[91] = "empty"
                cn[92] = "空";
                en[92] = "empty"
                cn[93] = "空";
                en[93] = "empty"
                cn[94] = "空";
                en[94] = "empty"
                cn[96] = "空";
                en[96] = "empty"
                cn[97] = "空";
                en[97] = "empty"
                cn[98] = "空";
                en[98] = "empty"
                cn[99] = "空";
                en[99] = "empty"
                return {
                    "cn": cn,
                    "en": en
                }
            }(),
            sex: {
                cn: ["不限", "男", "女"],
                en: ["", "Male", "Female"]
            },
            age : {
                cn : "{age} 岁",
                en : "Age {age}"
            },
            marriage: {
                cn: {1:"未婚",2:"已婚未育",3:"已婚已育"},
            },
            degree : {
                cn :{
                    10:"小学",
                    20:"初中",
                    30:"高中",
                    40:"中技/中专",
                    50:"大专",
                    60:"本科",
                    70:"硕士",
                    80:"博士",
                    90:"博士后"
                },
                en :{
                    10:"Middle School",
                    20:"High School",
                    30:"Technical School",
                    40:"Junior College",
                    50:"Bachelor Degree ",
                    60:"Master Degree",
                    70:"Doctor Degree"
                }
            },
            jobState:{
                cn:{1:"不在职，正在找工作",2:"在职，打算近期换工作",3:"在职，有更好的机会才考虑",4:"不考虑换工作"}
            },
            political:{
                cn:{1:"共产党员",2:"民主党派",3:"群众",4:"其他",5:"共青团员"}
            },
            experience : {
                cn : "有工作经验",
                en : "Have work experience"
            },
            noExperience : {
                cn : "无工作经验",
                en : "Inexperienced"
            },
            workingExperience : {
                cn : "{y}{m}工作经验",
                en : "{y}{m} work experience"
            },
            start: {
                cn : {1:"立即到岗",2:"7天内到岗",3:"15天内到岗",4:"1月内到岗",5:"2月内到岗",6:"3月内到岗",7:"半年内到岗"},
            },
            salaryNegotiableType :{
                cn : ['薪酬面议','具体薪酬'],
                en : ['Negotiable','Public Salary']

            },
            comSizes:{
                cn:{1:"50人以下",2:"51-100人",3:"101-500人",4:"501-1000人",5:"1000人以上"}
            },
            comTypes:{
                cn:{1:"私营/民营",2:"国有企业",3:"合资",4:"外资",5:"政府机关",6:"事业单位",7:"非盈利机构",99:"其他"}
            },
            salary:{
                cn : '{salary} /月',
                en : '{salary} RMB/month'
            },
            salarys:{
                cn: {1000:"1000及以上",2000:"2000及以上",3000:"3000及以上",4000:"4000及以上",5000:"5000及以上",6000:"6000及以上",7000:"7000及以上",8000:"8000及以上",9000:"9000及以上",10000:"10000及以上",12000:"12000及以上",15000:"15000及以上",20000:"20000及以上",30000:"30000及以上"},
            },
            negotiable :{
                cn : '(可面议)',
                en : '(Negotiable)'
            },
            joinType :{
                cn:{1:"全职",2:"兼职",5:"实习"}
            },
            lanType:{
                cn:{"01":"英语","02":"日语","03":"韩语","04":"德语","05":"法语","06":"俄语","07":"西班牙语","08":"葡萄牙语","09":"意大利语","10":"阿拉伯语","11":"普通话","12":"其他语种","13":"粤语"}
            },
            level:{
                cn:{"01":"入门","02":"熟练","03":"精通"}
            },
            language: {
                cn: ["请选择", "流利", "一般", "较差", "差"],
                en: ["Please select", "Good", "General", "Bad", "Very Bad"]
            },
            langLevel : {
                cn:{
                    1:'一般',
                    2:'良好',
                    3:'精通'
                },
                en:{
                    1:'General',
                    2:'Good',
                    3:'Excellent'
                }
            },
            dialect:{
                cn:{
                    2:"粤语",
                    3:"闽南话",
                    4:"客家话",
                    5:"上海话",
                    6:"四川话",
                    7:"湖南话",
                    8:"江西话",
                    9:"东北话"
                },
                en:{
                    2:"Cantonese",
                    3:"Hokkien",
                    4:"Hakka",
                    5:"Shanghainese",
                    6:"Sichuan dialect",
                    7:"Hunan dialect",
                    8:"Jiangxi dialect",
                    9:"Northeast Dialect"
                }
            },
            foreignLang :{
                cn :{
                    2:"日语",
                    3:"法语",
                    4:"德语",
                    5:"阿拉伯语",
                    6:"朝鲜语",
                    7:"西班牙语",
                    8:"俄语",
                    9:"意大利语",
                    11:"葡萄牙语"
                },
                en :{
                    2:"Japanese",
                    3:"French",
                    4:"German",
                    5:"Arabic",
                    6:"Korean",
                    7:"Spanish",
                    8:"Russian",
                    9:"Italian",
                    11:"Portuguese"
                }
            },
            workedYear: {
                cn: "至今<!--{year}-->年<!--{month}-->月工作经验，曾在<!--{comNum}-->家公司工作",
                en: '<!--{year}--> years <!--{month}--> months work experience,and served on <!--{comNum}--> Companies.'
            },
            title : {
                cn:{
                   lang:'cn',
                    baseInfo :'基本信息 ',
                    required :'必填',
                    edit :'编辑',
                    residence :'户籍',
                    location :'现居',
                    height :'身高',
                    avoirdupois: '体重',
                    birthday :'出生日期',
                    name :'姓名',
                    gender :'性别',
                    wedLock :'婚姻状况',
                    degree:'最高学历',
                    workStart:'开始工作时间',
                    address :'详细地址',
                    mobile :'手机',
                    email :'邮箱',
                    qq :'QQ',
                    wechat :'微信',
                    careerObjective : '求职意向',
                    positions :'意向职位',
                    locations :'意向地区',
                    calling :'意向行业',
                    start :'到岗时间',
                    salary :'期望月薪',
                    welfare :'福利要求',
                    education :'教育经历',
                    addEducation :'添加教育经历',
                    eduStartDate:'入学时间',
                    eduEndDate:'毕业时间',
                    graduatesInfo :'在校情况',
                    showAll :'[展开全部]',
                    hideAll :'[收起]',
                    course :'主要课程',
                    practiceExperience :'实践经历',
                    workExperience :'工作经历',
                    addWork :'添加工作经历',
                    workStartDate:'开始时间',
                    workEndDate:'结束时间',
                    projectExp :'项目经验',
                    addProject :'添加项目经验',
                    languageSkills :'语言能力',
                    specialSkills :'技能特长',
                    training :'培训经历',
                    selfInfo :'自我评述',
                    attachments :'相关附件',
                    addAppendix :'添加相关附件',
                    getURL :'(查看链接)',
                    getFile:'(查看附件)',
                    jobState:'求职状态',
                    political:'政治面貌',
                    joinType:'职位类型',
                    salarys: '期望薪资',
                    comSize:'公司规模',
                    comType:'公司性质',
                    school:'实践经历',
                    addSchool:'添加实践经历',
                    addLanguage:'添加语言能力',
                    addAbility:'添加技能特长',
                    addTrain:'添加培训经历',
                    addOtherInfo:'添加其他信息',
                    level:'熟练程度',
                    lanType:'语种',
                    otherInfo:'其他信息',
                    cert:'证书',
                    addCert:'添加证书',
                },
                en:{
                   lang:'en',
                   baseInfo :'Basic info ',
                   required :'required',
                   edit :'edit',
                   residence :'Residence',
                   location :'Location',
                   height :'Height',
                   birthday :'Birthday',
                   name :'Name',
                   gender :'Gender',
                   wedLock :'WedLock',
                   degree:'Degree',
                   workStart:'Work Start',
                   address :'Address',
                   mobile :'Mobile',
                   email :'Email',
                   qq :'QQ',
                   wechat :'WeChat',
                   careerObjective : 'Career Objective',
                   positions :'Positions',
                   locations :'Locations',
                   start :'I can start',
                   salary :'Salary',
                   welfare :'Welfare',
                   education :'Education',
                   addEducation :'Add education experience',
                   eduStartDate:'start Date',
                   eduEndDate:'end Date',
                   graduatesInfo :'Graduates Info',
                   showAll :'[Show All]',
                   hideAll :'[Hide All]',
                   course :'Course',
                   practiceExperience :'Practice experience',
                   workExperience :'Work Experience',
                   addWork :'Add work experience',
                   workStartDate:'Start Date',
                   workEndDate:'End Date',
                   projectExp :'Project Exp',
                   languageSkills :'Language Skills',
                   specialSkills :'Special Skills',
                   training :'Training',
                   selfInfo :'Self Info',
                   attachments :'Attachments',
                   addAppendix :'Add related appendix',
                   getURL :'(Get URL)',
                   getFile:'(view File)'

                }
            },
            emptyTips :{
                cn :{
                    apply :'你对自己有什么职业规划？',
                    education :'详细的教育经历可给人良好的第一印象',
                    school :'在校情况有助于HR更了解你',
                    work :'详细的工作经历能更好的展示你的工作能力',
                    project :'企业更青睐有项目经验的求职者',
                    language :'语言能力是提升求职竞争力的法宝',
                    ability :'技能特长是你驰骋职场的必杀技',
                    training :'培训经历让你更具求职竞争力',
                    self :'自我评述可让企业更全面了解你',
                    certificate :'证书和作品是你能力的最佳说明',
                    otherInfo: '其他信息',
                    cert: '证书是你能力的最佳说明',
                },
                en :{
                    apply :'What is your job direction and what kind of job do you want to?',
                    education :'Detailed education experience can help the HR build up the first impression quickly.',
                    school :'Graduates information can help the employer know more about you.',
                    work :'Detailed work experience can help HR know about your work ability.',
                    project :'Employers appreciate the jobseekers which have project experience.',
                    language :'Language competence will improve your competitive strength, do not modest.',
                    ability :'Special ability will be useful in working.Which abilities do you have.',
                    training :'The training experience can make you have the competition strength.Have you took part in any train.',
                    self :'Self information can help with your resume so that you will be know totally.',
                    certificate :'The certificates and works are strong to prove of your ability.'

                }
            }
        },
        unbindAccount: function(thirdType, refId) {
			var _type = {
				'qq': 1,
				'sina': 2,
			}
            var siteText = {
                sina: '微博',
                qq: 'QQ',
                weixin: '微信'
            };
            var thirdAccount = siteText[thirdType];
            if (!thirdAccount) return alert('未能识别第三方账号类型，请刷新页面重试或联系客服。');
            var template = '<div class="up_box">'
                         + '    <div class="content_2">'
                         + '        <p>确定要解除与{{thirdAccount}}账号的绑定吗？<br>解除绑定后，将无法使用{{thirdAccount}}账号直接登录597人才网。</p>'
                         + '    </div>'
                         + '    <div class="button clearfix">'
                         + '        <button class="cancel box-cancel">取消</button>'
                         + '        <button class="confirm box-ok">确认</button>'
                         + '    </div>'
                         + '</div>';
            var html = util.template(template, {thirdAccount: thirdAccount});
            var unbindBox = new mBox(html, {
                title: "解除帐号绑定",
                id: "unbindBoxId",
                width: "260px",
                closeIcon: false,
                onok: function(mBoxObj) {
                    var box = mBoxObj.box
                    $.ajax({
                        //url: USER_UNBIND,
						url : '/api/web/person.api',
                        type: "POST",
						dataType: 'json',
                        data: {
                            //"id": refId
							'act': 'unbind',
							'type': _type[thirdType],
                        },
                        beforeSend: function() {
                            ui.mask.show({
                                id: 'tab_person_2',
                                z: 10
                            });
                            ui.loading.show({
                                id: 'tab_person_2',
                                z: 12
                            });
                        },
                        error: function() {
                            alert('请求出错!');
                            ui.loading.hide({
                                id: 'tab_person_2'
                            });
                            ui.mask.hide({
                                id: 'tab_person_2'
                            });
                        },
                        success: function(data) {
                            /*data = data || {};
                            data = util.toJSON(data);
                            console.log(data.isUnbinded)
                            if ((data.isUnbinded >> 0) === 1) {
                                window.location.reload();
                            } else {
                                alert("解除绑定失败！", "绑定帐户");
                            }*/
							if(data.status==1){
								window.location.reload();
							}else{
								alert("解除绑定失败！", "绑定帐户");
							}
                            ui.loading.hide({
                                id: 'tab_person_2'
                            });
                            ui.mask.hide({
                                id: 'tab_person_2'
                            });
                            mBoxObj.close();
                        }
                    }); //end ajax
                },
                oncancel: function() {
                    unbindBox.close();
                }
            });
            unbindBox.open();
        },
		//第三方绑定
        thirdLoginAccBind: function() {
            $("#tab_person_2 .bindAcc").click(function() {
                var site = $(this).data('site').toUpperCase();
                if (site === 'WEIXIN') {
                    var template = '<div class="up_box">'
                                 + '    <div class="content_2">'
                                 + '        <p>微信关注：<span>597人才网</span>公众号，进行绑定。</p>'
                                 + '    </div>'
                                 + '    <div class="button_2 clearfix">'
                                 + '        <button class="confirm box-ok">确定</button>'
                                 + '    </div>'
                                 + '</div>';
                    var bindBox = new mBox(template, {
                        title: '微信绑定',
                        width: 260,
                        closeIcon: false,
                        onok: function(mBoxObj) {
                            mBoxObj.close();
                        }
                    });
                    bindBox.open();
                } else {
                   exLogin.oauthLogin(REQUEST_TYPE.BIND_REQ, OAUTH_SITE[site] >> 0);
                }
            });
            $("#tab_person_2 .unbindAcc").click(function() {
                var type = $(this).data("site").toLowerCase();
                var refId = $(this).data("id");
                out.unbindAccount(type, refId);
            });
        },
        yahooEmail_hint: function() {
            var per_email = $("#per_email").val();
            var yahoo_reg = /@(?!(yahoo\.(com\.cn|cn)))/;
            var email_reg = util.isSafeMail;
            var suggest_msg = "我们发现你仍在使用已经停止服务的雅虎邮箱，你将无法收到来自企业的邮件信息。为确保招聘信息的送达，强烈建议立即修改邮箱为你当前正常使用的邮箱。";
            var _html = '<div class="reset_name">' + '    <h1>修改邮箱</h1>' + '    <div class="content">' + '        <div class="txt">' + suggest_msg + '</div>' + '        <div class="email_new"><span style="font-size:13px;color:#555555;">新邮箱 ：&nbsp;&nbsp;</span><input type="text" class="inputText" style="width:180px; margin-left:-6px;" id="resumeName"></div>' + '    </div>' + '    <div class="btn"><button class="btn1_submit box-ok">修改</button></div>' + '</div>'
            if (!yahoo_reg.test(per_email)) {
                var emailBox = new mBox(_html, {
                    title: "修改邮箱",
                    boxclass: "reName",
                    width: 300,
                    onok: function(boxObj) {
                        var box = boxObj.box;
                        var _val = $(box).find("input").val();
                        var email_new = $(box).find(".email_new");
                        var msg = "";
                        var suggest = $(box).find(".txt");
                        if (!email_reg(_val)) {
                            msg = "请填写正确的邮箱！";
                            !$(box).find(".error_hint").length > 0 || $(box).find(".error_hint").remove();
                            email_new.append($('<div class="error_hint" style="color: red;margin-top: 5px;margin-left:58px;font-size: 13px;">' + msg + '</div>'));
                            return;
                        } else if (!yahoo_reg.test(_val)) {
                            msg = "中国雅虎邮箱已停止服务，请填写其他邮箱！";
                            !$(box).find(".error_hint").length > 0 || $(box).find(".error_hint").remove();
                            email_new.append($('<div class="error_hint" style="color: red;margin-top: 5px;margin-left:58px;font-size: 13px;">' + msg + '</div>'));
                            return;
                        } else {
                            var hint = $(email_new).find(".error_hint");
                            if (hint.length > 0) {
                                hint.remove();
                            }
                            $.ajax({
                                type: "post",
                                dataType: "json",
                                url: "/person/account/updateEmail.ujson",
                                timeout: 10000,
                                data: {
                                    "email": _val
                                },
                                success: function(json) {
                                    if (json.status) {
                                        $(box).find(".email_new").remove();
                                        suggest.text("修改成功，如需更换邮箱请前往“基本资料”中修改！");
                                        $(".box-ok").text("确定");
                                        $(".box-ok").bind("click", function() {
                                            emailBox.close();
                                        });
                                    } else {
                                        suggest.text("该邮箱已存在，请核对后重新输入！");
                                    }
                                },
                                error: function() {
                                    suggest.text("修改邮箱失败，请联系客服！");
                                }
                            });
                        }
                    }
                });
                emailBox.open();
            }
        },
		//用户名、密码、邮箱、手机修改
        accountSettings: function() {
            var ua = window.navigator.userAgent.toLowerCase();
            var isUC = /ucbrowser/.test(ua) && /mobile/.test(ua);

            // 账号基本信息设置
            var BasicInfo = (function() {
                /**
                 * template type
                 * '1': 用户名
                 * '2': 密码
                 * '3': 邮箱
                 * '4': 手机
                 */
                template = '<div class="up_box">'
                         + '    <div class="content_2">'
                         + '        <form>'
                         + '            <ul>'
                         + '                {% if(type === "1") { %}'
						 + '                 <li><input type="password" name="pwdLogin" value="" placeholder="原密码"><i class="input-clear hide"></i></li>'
                         + '                 <li><input type="text" name="username" value="{{userName}}" placeholder="用户名"><i class="input-clear"></i></li>'
                         + '                {% } %}'
                         + '                {% if(type === "2") { %}'
                         + '                 <li><input type="password" name="oldpwd" value="" placeholder="原密码"><i class="input-clear hide"></i></li>'
                         + '                 <li><input type="password" name="newpwd" value="" placeholder="新密码"><i class="input-clear hide"></i></li>'
                         + '                 <li><input type="password" name="confirmpwd" value="" placeholder="确认密码"><i class="input-clear hide"></i></li>'
                         + '                {% } %}'
                         + '                {% if(type === "3") { %}'
                         + '                 <li><input type="email" name="email" value="{{email}}" placeholder="邮箱地址"><i class="input-clear"></i></li>'
						 + '                 <div><li style="width: 40%;float:left;"><input type="text" name="yzm" value="" placeholder="验证码"><i class="input-clear"></i></li>'
						 + '				 <img onclick="this.src=\'/api/web/authCode.api?key=updEmail\'" style="width:100px;margin:5px 3px;"  id="yzmCode" src="/api/web/authCode.api?key=updEmail"></div>'
                         + '                {% } %}'
                         + '                {% if(type === "4") { %}'
                         + '                 <li><input type="tel" id="mobile" name="mobile" value="{{mobile}}" placeholder="手机号码"><i class="input-clear"></i></li>'
						 + '                 <div style="overflow: hidden;"><li style="width: 40%;float:left;"><input type="text" name="mobileZym" id="mobileZym" value="" placeholder="验证码"><i class="input-clear"></i></li>'
						 + '				 <a href="javascript:sendCode()" id="btnSendValidate" class="can">获取验证码</a></div>'                        
						 + '                {% } %}'
                         + '            </ul>'
                         + '        </form>'
                         + '    </div>'
                         + '    <div class="button clearfix">'
                         + '        <button class="cancel box-cancel">取消</button>'
                         + '        <button class="confirm box-ok">确认</button>'
                         + '    </div>'
                         + '</div>';

                var userInfo = {
                    name: function(initValue) {
                        var nameBox = getPopupBox({
                            title: '修改用户名',
                            template: util.template(template, {type:'1', userName: initValue}),
                            onok: function(mBoxObj) {
                                var $box = mBoxObj.box;
                                var uName = $box.find('input[name="username"]').val();
								var pwdLogin = $box.find('input[name="pwdLogin"]').val();

                                // 用户没有做任何修改
                                if (uName === initValue) {
                                    mBoxObj.close();
                                    return true;
                                }
                                var namePass = personModify.validate(uName, '用户名', {"empty": true, "min": 3, "max": 32, "regEx": "^\\w+$"});
                                var isPass = personModify.validate(pwdLogin, '原密码', {"empty":true,"min":6,"max":20,"regex":"^[^\\u4e00-\\u9fa5]+$"});
                                if (namePass && isPass) {

									$.ajax({
										url:"/api/web/person.api",
										type:"post",
										dataType:"json",
										data:{
											"act": 'modUserInfo',
											"loginPassword":pwdLogin,
											"newUsername":uName,
											"type":'uname'
										},
										success:function(json){
											if (json.status==1) {
												alert('用户名修改成功');
												//mBoxObj.close();
												window.location.reload();
											} else {
												alert(json.msg);
											}
										}

									});
                                }
                            },
                            oncancel: function() {
                                nameBox.close();
                            }
                        });

                        nameBox.open();
                    },
                    password: function(initValue) {
                        var passwordBox = getPopupBox({
                            title: '修改密码',
                            template: util.template(template, {type:'2'}),
                            onok: function(mBoxObj) {
                                var $box = mBoxObj.box;
                                var oldPwd = $box.find('input[name="oldpwd"]').val();
                                var newPwd = $box.find('input[name="newpwd"]').val();
                                var confirmPwd = $box.find('input[name="confirmpwd"]').val();

                                var pwds = [
                                    {val: oldPwd, str: '原密码'},
                                    {val: newPwd, str: '新密码'},
                                    {val: confirmPwd, str: '确认密码'}
                                ];
                                for (var i = 0, len = pwds.length; i < len; i++) {
                                    var pwdObj = pwds[i];
                                    var isPass = personModify.validate(pwdObj.val, pwdObj.str, {"empty":true,"min":6,"max":20,"regex":"^[^\\u4e00-\\u9fa5]+$"})
                                    if (!isPass) return false;
                                }
                                if (newPwd !== confirmPwd) {
                                    alert('两次输入的密码不一致');
                                    return false;
                                }
								
								$.ajax({
									url:"/api/web/user.api",
									type:"post",
									data:'act=psw&txtOldPwd='+oldPwd+'&txtNewPwd='+newPwd+'&txtRepeatPwd='+confirmPwd,
									dataType:"json",
									success:function(json){
										if(json.status>0){
											alert('密码修改成功');
											passwordBox.close();
											return;
										}else{
											alert(json.error);
										}
									}
								});
                            },
                            oncancel: function() {
                                passwordBox.close();
                            }
                        });

                        passwordBox.open();
                    },
                    email: function(initValue) {
                        var emailBox = getPopupBox({
                            title: '修改邮箱',
                            template: util.template(template, {type: '3', email: initValue}),
                            onok: function(mBoxObj) {
                                var $box = mBoxObj.box;
                                var email = $box.find('input[name="email"]').val();
								var yzm = $box.find('input[name="yzm"]').val();

                                // 用户没有做任何修改
                                if (email === initValue) {
                                    mBoxObj.close();
                                    return true;
                                }

                                if ( util.isEmpty(email) ) return alert('请输入邮箱地址');
                                if ( !util.isSafeMail(email) ) return alert('请填写正确的邮箱地址');
								if (util.isEmpty(yzm)) return alert('请输入验证码');
								$.ajax({
									url:"/api/web/person.api",
									type:"POST",
									data: {
										'act': 'modUserInfo',
										'txtPageEmail': email,
										'txtEmailAuthCode': yzm,
										'type': 'updEmail',
									},
									dataType:"json",
									success:function(json){
										if(json.status>0){
											alert('邮箱修改成功');
                                            $('#userEmail.summary').text(email);
                                            mBoxObj.close();
										}else{
											alert(json.msg);
										}
									}
								});
                            },
                            oncancel: function() {
                                emailBox.close();
                            }
                        });

                        emailBox.open();
                    },
                    mobile: function(initValue) {
                        var mobileBox = getPopupBox({
                            title: '修改手机',
                            template: util.template(template, {type: '4', mobile: initValue}),
                            onok: function(mBoxObj) {
                                var $box = mBoxObj.box;
                                var mobile = $box.find('input[name="mobile"]').val();
								var code = $box.find('input[name="mobileZym"]').val();

                                // 用户没有做任何修改
                                /*if (mobile === initValue) {
                                    mBoxObj.close();
                                    return true;
                                }*/

                                if ( util.isEmpty(mobile) ) return alert('请输入手机号码');
                                if ( !/^1\d{10}$/.test(mobile) ) return alert('请输入正确的手机号码');
								
								if ( util.isEmpty(code)) return alert('请输入验证码');
								
                                request({
                                    type: 'POST',
                                    url: '/api/web/person.api',
                                    data: {
										"act" : "modUserInfo",
										"txtMobile" : mobile,
										"txtValidateCode" : code,
										"type" : "mobile"
                                    },
                                    success: function(resp) {
                                        if (resp.status==1) {
                                            alert(resp.msg || '手机号码修改成功');
                                            $('#userMobile.summary').text(mobile);
                                            mBoxObj.close();
                                        } else {
                                            return alert(resp.msg || '手机号码修改失败');
                                        }
                                    },
                                    error: function() {
                                        return alert(resp.msg || '手机号码修改失败');
                                    }
                                });
                            },
                            oncancel: function() {
                                mobileBox.close();
                            }
                        });

                        mobileBox.open();
                    }
                };

                return {
                    setup: function(infoType, infoValue) {
                        var action = userInfo[infoType];
                        action && action(infoValue);
                    }
                };
            })();

            function request(opts) {
                $.ajax({
                    url: opts.url || '',
                    type: opts.type || 'GET',
                    data: opts.data || {},
                    beforeSend: function() {
                        ui.mask.show({id: 'modify_mask', z: 10});
                        ui.loading.show({id: 'modify_loading', z: 12});
                        opts.beforeSend && opts.beforeSend();
                    },
                    complete: function() {
                        opts.complete && opts.complete();
                    },
                    success: function(resp) {
                        ui.mask.hide({id: 'modify_mask'});
                        ui.loading.hide({id: 'modify_loading'});
                        resp = util.toJSON(resp);
                        opts.success && opts.success(resp.head || resp);
                    },
                    error: function() {
                        ui.mask.hide({id: 'modify_mask'});
                        ui.loading.hide({id: 'modify_loading'});
                        opts.error && opts.error();
                    }
                });
            }

            function getPopupBox(opts) {
                var _default = {
                    width: 260,
                    zIndex: 888,
                    closeIcon: false,
                    onopen: function(mBoxObj) {
                        var $box = mBoxObj.box;
                        $box.on('input', 'input', function() {
                            var $this = $(this);
                            var $clear = $this.next('.input-clear');
                            if ( !util.isEmpty($this.val()) ) {
                                $clear.show();
                            } else {
                                $clear.hide();
                            }
                        });

                        $box.on('click', '.input-clear', function(event) {
                            event.stopPropagation();
                            $(this).hide().prev('input').val('');
                        });

                        // 安卓设备的虚拟键盘会遮挡弹出层
                        // 取消fixed定位以便页面可以滚动
                        if (util.isAndroid) $box.css('position', 'absolute');
                        if (isUC) {
                            $box.css('position', 'absolute');
                            $('.nav_bottom').css('position', 'absolute');
                        }
                    },
                    onclose: function() {
                        if (util.isAndroid) {
                            setTimeout(function() {
                                $box.css('position', 'fixed');
                            }, 100);
                        }
                        if (isUC) {
                            setTimeout(function() {
                                $box.css('position', 'fixed');
                            }, 100);
                            $('.nav_bottom').css('position', 'fixed');
                        }
                    }
                };

                opts = $.extend({}, _default, opts);

                return new mBox(opts.template, opts);
            }

            $('#setting-userInfo').on('click', 'li', function(event) {
                event.stopPropagation();
                var $this = $(this);
                var uInfo = $this.attr('data-action');
                var value = $(this).find('.summary').text();
                setTimeout(function() {
                    BasicInfo.setup(uInfo, value);
                }, 200);
            });
        }
    };

    /**
     * 批量管理操作
     * @param  {[type]} args [description]
     * @return {[type]}      [description]
     */
    out.batchManage = function(args) {
        /**
         * 默认设置
         * @type {Object}
         *
         * @attributes
         * container:     整个批量管理操作的容器
         * manage:        管理操作开关
         * cancel:        取消操作开关
         * listPanel:     信息列表容器
         * gobackBtn:     返回按钮选择器
         * deleteBtn:     删除按钮选择器
         * msgFeedback:   选择数量的回显
         * selectAll:     全选按钮选择器
         * selectRevrAll: 全不选按钮选择器
         */
        var _defaults = {
            container: '.bm-panel',
            manage: '.bm-manage',
            cancel: '.bm-cancel',
            listPanel: '.bm-list',
            gobackBtn: '#btn-back',
            deleteBtn: '.bm-btn-delete',
            msgFeedback: '.bm-msg-feedback',
            selectAll: '.bm-select-all',
            selectRevrAll: '.bm-select-revrAll',
            delCallback: null
        };

        var args = $.extend({}, _defaults, args);

        var $container = $(args.container);
        var $listPanel = $container.find(args.listPanel);
        var $manage = $container.find(args.manage);
        var $cancel = $container.find(args.cancel);
        var $goback = $container.find(args.gobackBtn);
        var $delBtn = $container.find(args.deleteBtn);
        var $msg = $container.find(args.msgFeedback);
        var $selectAll = $container.find(args.selectAll);
        var $selectRevrAll = $container.find(args.selectRevrAll);
        var delCallback

        // 初始状态
        var manageStatus = 'off';
        // 信息数量
        var listItemCounts = $listPanel.find('li').length;
        // 选中信息的数量
        var selectCount = 0;

        // 点开批量操作管理
        $manage.click(function(event) {
            event.stopPropagation();
            // set management status to 'on'
            manageStatus = 'on';
            toggleManage();
        });
        // 取消操作
        $cancel.click(function(event) {
            event.stopPropagation();
            manageStatus = 'off';
            toggleManage();
        });
        // 选择单个信息
        $listPanel.on('click', '.list_item', function(event) {
            event.stopPropagation();
            // 非管理状态下，点击链接
            if (manageStatus === 'off') return true;
            // 管理状态下，选择单个信息
            if (manageStatus === 'on') {
                var $elem = $(this);
                if ($elem.toggleClass('selected').hasClass('selected')) {
                    if (selectCount < listItemCounts) selectCount += 1;
                } else {
                    if (selectCount > 0) selectCount -= 1;
                }
                updateDeleteButton();
            }
            return false;
        });
        // 全选
        $selectAll.click(function(event) {
            event.stopPropagation();
            $selectAll.hide();
            $selectRevrAll.show();
            $listPanel.find('.list_item').addClass('selected');
            selectCount = listItemCounts;
            updateDeleteButton();
        });
        // 全不选
        $selectRevrAll.click(function(event) {
            event.stopPropagation();
            $selectRevrAll.hide();
            $selectAll.show();
            $listPanel.find('.list_item').removeClass('selected');
            selectCount = 0;
            updateDeleteButton();
        });
        // 删除
        $delBtn.click(function(event) {
            var ids = [];
            $listPanel.find('.list_item.selected').each(function() {
                ids.push($(this).attr('data-id'));
            });
            if (ids.length === 0) {
                alert('参数错误，请刷新后重试！');
                return false;
            }
            args.delCallback && args.delCallback(ids);
        });

        /**
         * 切换管理状态
         * @return {[type]} [description]
         */
        function toggleManage() {
            switch (manageStatus) {
                // turn management to on
                case 'on':
                    $goback.hide();
                    $manage.hide();
                    $listPanel.addClass('bm-manage-on');
                    $selectAll.show();
                    $delBtn.show();
                    $cancel.show();
                    break;
                    // turn management to off
                case 'off':
                    $cancel.hide();
                    $delBtn.removeClass('btn-enable').hide();
                    $selectAll.hide();
                    $selectRevrAll.hide();
                    $listPanel.removeClass('bm-manage-on').find('.list_item.selected').removeClass('selected');
                    $manage.show();
                    $goback.show();
                    selectCount = 0;
                    $msg.text(selectCount);
                    break;
            }
        }

        function updateDeleteButton() {
            if (selectCount === 0) {
                $delBtn.addClass('disabled');
            } else {
                $delBtn.removeClass('disabled');
            }

            $msg.text(selectCount);
        }
    };

    module.exports = out;
});