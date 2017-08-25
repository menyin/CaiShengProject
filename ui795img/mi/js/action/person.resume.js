define(function(require, exports, module) {
    var $ = require("$"),
        ui = require("ui.base"),
        // juicer = require("juicer"),
        util = require("util"),
        person = require("action.person"),
        // touchSilder = require("ui.touchSilder"),
        mBox = require("ui.mBox"),
        // dataArea = require("ui.data.area"),
        iosSelect = require("ui.iosSelect"),
        uiSelector = require('ui.selector'),
        IScroll = require("iscroll-lite");

    var myCache = {}

    var out = {
        isTrimNewline: true,
        trimNewline: function(content) {
            return content.replace(/\n{2,}/g, '\n').replace(/(\r\n){2,}/g, '\n');
        },
        postUpdate: function(par) {
            //每次都计算完成度
            var d = {}
            d[par.langType == 0 ? "cn" : "en"] = util.toJSON(sessionStorage["r" + par.resumeId + "s" + par.subResumeId])
            par.finished = out.getFinished(d)[par.langType == 0 ? "baseCn" : "baseEn"]
            var _url = "/api/web/person.api";
            if(par.data.to_m) _url = "/api/web/m_person.api";
            $.ajax({
                url: _url,
                data: par.data,
                type: "POST",
                //contentType: par.contentType || "application/x-www-form-urlencoded",
                dataType:"json",
                beforeSend: function() {
                    ui.loading.show({ id: 'update_loading', z: 30 });
                    ui.mask.show({ id: 'update_mask',z:29 });
                },
                error: function() {
                    par.error()
                    ui.loading.hide({ id: 'update_loading' });
                    ui.mask.hide({ id: 'update_mask' });
                },
                success: function(data, status, xhr) {
                    /*var DATA = util.toJSON(data)
                    if (DATA.subResumeId) {
                        sessionStorage["subResumeId"] = DATA.subResumeId
                        sessionStorage[(par.langType == 0 ? "cn" : "en") + "ResumeId"] = DATA.subResumeId
                    }*/
                    par.success(data, status, xhr)
                    out.goBack()
                    ui.loading.hide({ id: 'update_loading' });
                    ui.mask.hide({ id: 'update_mask' });
                }
            })
        },
        setGoBack: function() {
            $("#goBack").click(function() {
                window.location.href = out.getGoBackUrl();
            })
        },
        getGoBackUrl: function() {
            return '/person/resume/getSubResume.html';
        },
        goBack: function(t, myCache, par) {
                if (!myCache) return;
                var hrefURL = "window.location.href='/person/resume/getSubResume.html';"
                if (t) { //隐藏了box
                    myCache.goBack.unbind("click").attr("onclick", hrefURL)
                } else { //显示了box
                    myCache.goBack.unbind("click").click(function() {
                        // myCache.listBox.show();
                        // myCache.delBtn.show();
                        // myCache.info.hide()
                        // myCache.goBack.unbind("click").attr("onclick",hrefURL.replace("';","&t="+(+new Date())+"';"))
                        if (myCache.dataNotChange) {
                            out.goBack(true, myCache);
                            myCache.goBack.trigger('click');
                        } else {
                            var $tmpText = '<div class="up_box">' + '		<div class="content_2">' + '			<p>' + '				是否保存当前修改信息?' + '			</p>' + '		</div>' + '		<div class="button">' + '			<button class="cancel box-cancel">取消</button>' + '			<button class="confirm box-ok">保存</button>' + '		</div>' + '	</div>';
                            var $tpl = util.template($tmpText);
                            var delBox = new mBox($tpl(), {
                                title: par.title || "保存修改信息",
                                width: 250,
                                className: "save",
                                oncancel: function() {
                                    out.goBack(true, myCache);
                                    myCache.goBack.trigger('click');
                                    delBox.close()
                                },
                                onok: function(boxObj) {
                                    if (par.ok) par.ok(delBox) //box.name
                                    else {
                                        out.goBack(true, myCache);
                                        myCache.goBack.trigger('click');
                                        delBox.close()
                                    }
                                }
                            })
                            delBox.open()


                        }
                    }).attr("onclick", "")

                }
            }
            //计算简历的完成度
            ,
        getFinished: function(p) {
            var finish = { cn: 0, en: 0 }
            //597计算完整度
            if(p.cn){
                var resume = p.cn;
                if(resume.base.name) finish.cn += 25;//真实姓名
                if(resume.apply.jobLocPC1) finish.cn += 5;//意向城市
                if(resume.self.careerDirection) finish.cn += 15;//评价
                if(resume.work.length>0) finish.cn += 15;//工作经历
                if(resume.education.length>0) finish.cn += 5;//教育经历
                if(resume.project.length>0) finish.cn += 5;//项目
                if(resume.language.length>0) finish.cn += 5;//语言
                if(resume.ability.length>0) finish.cn += 5;//能力
                if(resume.cert.length>0) finish.cn += 10;//证书
                if(resume.otherInfo.length>0) finish.cn += 5;//其他信息
                if(resume.school.length>0) finish.cn += 5;//实践
            }
            return finish
        },
        postDel: function(par) {
            var $tmpText = '<div class="up_box">' + '		<div class="content_2">' + '			<p>' + '				确认删除当前{{tip}}?' + '			</p>' + '		</div>' + '		<div class="button">' + '			<button class="cancel box-cancel">取消</button>' + '			<button class="confirm box-ok">确认</button>' + '		</div>' + '	</div>';
            var $tpl = util.template($tmpText);
            var _url = "/api/web/person.api";
            if(par.data.to_m) _url = "/api/web/m_person.api";
            var delBox = new mBox($tpl({ tip: par.title || '记录' }), {
                title: "删除" + par.title || "删除",
                width: 250,
                className: "del",
                oncancel: function() { delBox.close() },
                onok: function() {
                    $.ajax({
                        url: _url,
                        type: "GET",
                        dataType: 'json',
                        data: par.data,
                        beforeSend: function() {
                            ui.loading.show({ id: 'update_loading',z:88 });
                            ui.mask.show({ id: 'update_mask',z:66 });
                        },
                        error: function() {
                            par.error()
                            ui.loading.hide({ id: 'update_loading' });
                            ui.mask.hide({ id: 'update_mask' });
                        },
                        success: function(data, status, xhr) {
                            delBox.close()
                            //var DATA = util.toJSON(data)
                            var DATA = data;
                            if(DATA.status==1 || DATA.success=='success'){
                                var dt = util.toJSON(sessionStorage[par.myCache.par.dataKey])
                                dt[par.moudle] = dt[par.moudle].filter(function(v) {
                                    return v.id != par.moudleId })
                                sessionStorage[out.getDataKey()] = util.toString(dt)
                                $("#e" + par.moudleId).remove()
                                par.myCache.info.hide()
                                if (!par.myCache.list.children().length) {
                                    par.myCache.list.hide()
                                    par.myCache.delBtn.html('管理')
                                    par.myCache.addBtn.parent().show()
                                }
                                alert('OK!', 1000)
                            } else alert('错误:' + (DATA.msg || DATA.error))
                            if (par.success) par.success(DATA, status, xhr)
                            ui.loading.hide({ id: 'update_loading' });
                            ui.mask.hide({ id: 'update_mask' });
                        }
                    })
                }
            })
            delBox.open()
        },
        getDataKey: function() {
                return "r" + sessionStorage["resumeId"] + "s" + sessionStorage["subResumeId"]
            }
            //简历相关字典
            ,
        dic: {
            note: function() {
                var dt = {},
                    cn = {},
                    en = {}
                cn["endDate"] = "至今";
                en["endDate"] = "Present";
                dt.cn = cn
                dt.en = en
                return dt
            }(),
            degree: function() {
                var dt = {},
                    cn = {},
                    en = {}
                cn["10"]="小学";en["10"]="Middle School";
                cn["20"]="中学";en["20"]="High School";
                cn["30"]="高中";en["30"]="Technical School";
                cn["40"]="中技/中专";en["40"]="Junior College";
                cn["50"]="大专";en["50"]="Bachelor Degree";
                cn["60"]="本科";en["60"]="Master Degree";
                cn["70"]="硕士";en["70"]="Doctor Degree";
                cn["80"]="博士";en["80"]="Master Degree";
                cn["90"]="博士后";en["90"]="Doctor Degree";
                dt.cn = cn
                dt.en = en
                return dt
            }(),
            sex: {
                cn: ["不限", "男", "女"],
                en: ["", "Male", "Female"]
            },
            marriage: {
                cn: ["请选择","未婚","已婚未育","已婚已育"],
                en: ["Unmarried", "Married", "Divorced", "Private"]
            },
            language: {
                cn: ["请选择", "流利", "一般", "较差", "差"],
                en: ["Please select", "Good", "General", "Bad", "Very Bad"]
            },
            workedYear: {
                cn: "至今<!--{year}-->年<!--{month}-->月工作经验，曾在<!--{comNum}-->家公司工作",
                en: '<!--{year}--> years <!--{month}--> months work experience,and served on <!--{comNum}--> Companies.'
            },
            languageType: [{
                "cn": {
                    "1": "英语",
                    "2": "日语",
                    "3": "法语",
                    "4": "德语",
                    "5": "阿拉伯语",
                    "6": "朝鲜语/韩语",
                    "7": "西班牙语",
                    "8": "俄语",
                    "9": "意大利语",
                    "11": "葡萄牙语"
                },
                "en": {
                    "1": "English",
                    "2": "Japanese",
                    "3": "French",
                    "4": "German",
                    "5": "Arabic",
                    "6": "Korean",
                    "7": "Spanish",
                    "8": "Russian",
                    "9": "Italian",
                    "11": "Portuguese"
                }
            }, {
                "cn": {
                    "1": "普通话",
                    "2": "粤语",
                    "3": "闽南话",
                    "4": "客家话",
                    "5": "上海话",
                    "6": "四川话",
                    "7": "湖南话",
                    "8": "西江话",
                    "9": "东北话"
                },
                "en": {
                    "1": "Chinese",
                    "2": "Cantonese",
                    "3": "Hokkien",
                    "4": "Hakka",
                    "5": "Shanghainese",
                    "6": "Sichuan dialect",
                    "7": "Hunan dialect",
                    "8": "Jiangxi dialect",
                    "9": "Northeast Dialect"
                }
            }]
        },
        selectLanguage: function(type) {
                if (type == "1" || type == 1 || type == "en") {
                    $(".lang").each(function() {
                        this.innerHTML = this.getAttribute("en")
                    })
                    $("input.tip,textarea.tip").each(function() {
                        this.placeholder = this.getAttribute("en")
                    })
                    $(".template_main4").addClass("en")
                    $("[placeholder],.select_box.tip").each(function() {
                        var $that = $(this);
                        $that.attr('placeholder', $that.data('en') || '');
                    });
                }
            } //end 语言处理
            //多语言弹框
            ,
        message: function(lang, msg) {
                if (lang == "0") lang = "cn"
                if (lang == "1") lang = "en"
                alert(msg[lang])
            } //end 多语言弹框
            //校验刷新简历数据
            ,
        validateData: function(ajaxData) {
                var foundErr = false
                if (util.isEmpty(ajaxData["mobileNum"])) {
                    alert("请输入手机号码");
                    return false;
                }

                foundErr = !util.check(ajaxData["mobileNum"], { notempty: true, regEx: "[\\d]{11}", error: function() { alert('请正确输入手机号码'); } })
                if (foundErr) return false;

                // if (util.isEmpty(ajaxData["email"])) {
                //     alert("请输入邮箱地址");
                //     return false;
                // }

                // if (!util.isSafeMail(ajaxData["email"])) {
                //     alert("请正确输入邮箱地址");
                //     return false;
                // }
                // foundErr = !util.check(ajaxData["address"],{notempty : true,error:function(){alert('请输入联系地址');}});
                // if(foundErr) return false;

                return true;
            }
            //刷新简历-提示框的cookie key
            ,
        refreshKey: 'm_refresh_box'
            //刷新简历执行方法
            ,
        refreshFun: function() {
            var obj = {
//                  relationPhone:$("#phone").val(),    
                    mobileNum:$("#mobilePhone").val()
                    ,email:$("#email").val()
//                  ,address:$("#address").val()
//                  ,zipCode:$("#zipcode").val()
            };
            if(!out.validateData(obj)) return;
            $.ajax({
                url : "/api/web/person.api",
                //,data : {"m.mobile":obj.mobileNum, "m.email":obj.email}//, "m.address":obj.address, "m.zipCode":obj.zipCode}
                data: {'act':'refresh_resume'},
                type : "POST",
                dataType: 'json',
                beforeSend : function(){
                    ui.loading.show({id:'update_loading',z:9999});
                    ui.mask.show({id:'update_mask',z:8888});
                }
                ,error : function(){
                    ui.loading.hide({id:'update_loading',z:9999});
                    ui.mask.hide({id:'update_mask',z:8888});
                }
                ,success : function(data){
                    ui.loading.hide({id:'update_loading'});
                    ui.mask.hide({id:'update_mask'});
                    if(data.status == 1){//刷新成功
                        alert("简历已刷新");
                        window.location.reload();
                    }else if(data.status < 0){//几分钟后才能刷新
                        alert(data.nextTime+'后才能再次刷新!');
                    }else if(data.status > 0){//简历为隐藏状态
                        alert("您的简历当前设置为隐藏，不能刷新，请先设置为公开!");
                    }else{//刷新失败
                        alert('刷新失败');
                    }
                }
            })
        }
            //刷新简历提示框
            ,
        refreshBox: function() {
                var obj = {
                    //					relationPhone:$("#phone").val(),
                    mobileNum: $("#mobilePhone").val(),
                    //email: $("#email").val()
                    //					,address:$("#address").val()
                    //					,zipCode:$("#zipcode").val()
                };

                if (!out.validateData(obj)) return;
                //格式化手机号码
                var mobile = obj.mobileNum;
                if (mobile.length > 3) {
                    mobile = mobile.substr(0, 3) + " " + mobile.substr(3);
                }
                if (mobile.length > 8) {
                    mobile = mobile.substr(0, 8) + " " + mobile.substr(8);
                }
                var html = [];
                html.push("<div>");
                html.push("<div class='context'>");
                html.push("当前号码：");
                html.push("<span class='mobile_num'>");
                html.push(mobile);
                html.push("</span>");
                html.push("，如号码无误，点击“确认”即可刷新简历");
                html.push("</div>");
                html.push("<div class='btn'>");
                html.push("<button class='box-cancel'>去修改号码</button>");
                html.push("<button class='box-ok'>确认</button>");
                html.push("</div>");
                html.push("</div>");
                //提示框html
                var box = new mBox(html.join(""), {
                    title: "手机号码确认",
                    className: "tip_box",
                    oncancel: function() {
                        location.href = '/person';
                        box.close();
                    },
                    onok: function() {
                        util.cookie.set(out.refreshKey, 1, { hour: 24 * 30 });
                        out.refreshFun();
                        box.close();
                    }
                });
                box.open();
            }
            //刷新简历
            ,
        refreshResume: function() {
            person.updateInfo();
            // $("#lastUpdate").html($("#lastUpdate").attr("title").replace(/:00$/,""));
            $("#refresh_resume").click(function(){
                if(!util.cookie.get(out.refreshKey)) {
                    out.refreshBox();//手机号码确认
                } else {
                    out.refreshFun();//直接刷新
                }
            });

            //登录刷新设置
            $('#switch_icon').click(function(){
                var $this = $(this);
                var $label = $this.find('i');
                var flag = 0;
                var _class = 'switch_off';
                if($label.hasClass('switch_off')) {
                    flag = 1;
                    var _class = 'switch_on';
                }
                $.ajax({
                    url: '/person/resume/resumeModule.html?act=isAutoRefresh',
                    data : {
                        'act': 'isAutoRefresh',
                        'flag': flag,
                    },
                    type : "POST",
                    dataType:"json",
                    beforeSend : function(){
                        ui.loading.show({id:'update_loading',z:30});
                        ui.mask.show({id:'update_mask',z:29});
                    },
                    error : function(){
                        ui.loading.hide({id:'update_loading'});
                        ui.mask.hide({id:'update_mask'});
                    }
                    ,success : function(data){
                        if(data.code==1){
                            $('#switch_icon i').attr('class', _class)
                        }else{
                            alert(data.msg);
                        }
                        ui.loading.hide({id:'update_loading'});
                        ui.mask.hide({id:'update_mask'});
                    }
                });
            })
        },
        initIosSelect: function(lang, obj) {
            var showGeneralDom = "";
            var selectDateDom = "";
            var selector = obj.selector;
            var title = obj.title;
            var data = obj.data;

            function formatYear(nowYear) {
                var arr = [];
                for (var i = nowYear - 65; i <= nowYear + 10; i++) {
                    arr.push({
                        id: i + '',
                        value: i + '年'
                    });
                }
                return arr;
            }

            function formatMonth() {
                var arr = [];
                for (var i = 1; i <= 12; i++) {
                    arr.push({
                        id: i + '',
                        value: i + '月'
                    });
                }
                return arr;
            }

            function formatDate(count) {
                var arr = [];
                for (var i = 1; i <= count; i++) {
                    arr.push({
                        id: i + '',
                        value: i + '日'
                    });
                }
                return arr;
            }


            switch (selector) {
                case '#sex':
                case '#height':
                case '#avoirdupois':
                case '#degree':
                case '#marriage':
                case '#start':
                case '#certType':
                case '#expectSalary':
                case '#chineseLevel':
                case '#englishLevel':
                case '#dialectType':
                case '#dialectLevel':
                case '#foreignType':
                case '#foreignLevel':
                case '#joinTime':
                case '#jobState':
                case '#political':
                case '#joinType':
                case '#salarys':
                case '#comSize':
                case '#comType':
                case '#level':
                case '#lanType':
                case '#gainTime':
                    {
                        showGeneralDom = document.querySelector(selector);
                        $(selector).on('click', function() {
                            setTimeout(function() {
                                var suId = showGeneralDom.dataset['su_id'];
                                var select = new iosSelect(1, [data], {
                                    title: title,
                                    itemHeight: 35,
                                    oneLevelId: suId,
                                    callback: function(selectOneObj) {
                                        showGeneralDom.innerHTML = selectOneObj.value;
                                        showGeneralDom.dataset['su_id'] = selectOneObj.id;
                                        $(selector).css('color', '#555555');
                                        obj.callback && obj.callback(selectOneObj);
                                    }
                                });

                            }, 200)
                        });
                        break;
                    }
                case '#birthday':
                    {

                        selectDateDom = $(selector);
                        selectDateDom.on('click', function() {
                            setTimeout(function() {


                                var oneLevelId = selectDateDom.attr('year');
                                var twoLevelId = selectDateDom.attr('month');
                                var threeLevelId = selectDateDom.attr('date');

                                var yearData = formatYear((new Date()).getFullYear());
                                var monthData = function() {
                                    return formatMonth();
                                };
                                var dateData = function(year, month) {
                                    if (/^1|3|5|7|8|10|12$/.test(month)) {
                                        return formatDate(31);
                                    } else if (/^4|6|9|11$/.test(month)) {
                                        return formatDate(30);
                                    } else if (/^2$/.test(month)) {
                                        if (year % 4 === 0 && year % 100 !== 0 || year % 400 === 0) {
                                            return formatDate(29);
                                        } else {
                                            return formatDate(28);
                                        }
                                    } else {
                                        throw new Error('month is illegal');
                                    }

                                };

                                var select = new iosSelect(3, [yearData, monthData, dateData], {
                                    title: title,
                                    itemHeight: 35,
                                    oneTwoRelation: 1,
                                    twoThreeRelation: 1,
                                    oneLevelId: oneLevelId,
                                    twoLevelId: twoLevelId,
                                    threeLevelId: threeLevelId,
                                    dataNotChange: true,
                                    callback: function(selectOneObj, selectTwoObj, selectThreeObj) {
                                        selectDateDom.attr('year', selectOneObj.id);
                                        selectDateDom.attr('month', selectTwoObj.id);
                                        selectDateDom.attr('date', selectThreeObj.id);
                                        var birthday = selectOneObj.id + '-' + (selectTwoObj.id < 10 ? '0' + selectTwoObj.id : selectTwoObj.id) + '-' + (selectThreeObj.id < 10 ? '0' + selectThreeObj.id : selectThreeObj.id);
                                        selectDateDom.html(birthday);
                                        $(selector).css('color', '#555555');
                                        obj.callback && obj.callback(selectOneObj, selectTwoObj, selectThreeObj, birthday);

                                    }
                                });
                            }, 200)
                        });
                        break;
                    }
                case '#endDate':
                    {
                        var select = null;
                        selectDateDom = $(selector);
                        selectDateDom.on('click', function() {
                            setTimeout(function() {


                                var oneLevelId = selectDateDom.attr('type');
                                var twoLevelId = selectDateDom.attr('year');
                                var threeLevelId = selectDateDom.attr('month');

                                var workYearData = function(type) {
                                    if (type == "1") {
                                        if (select != null) {
                                            select.scrollTwo.disable();
                                            select.scrollThree.disable();
                                            select.options.scrollAction = false;
                                        }
                                    } else {
                                        if (select != null) {
                                            select.scrollTwo.enable();
                                            select.scrollThree.enable();
                                            select.options.scrollAction = true;
                                        }
                                    }
                                    return formatYear((new Date()).getFullYear());
                                }
                                var workMonthData = function() {
                                    return formatMonth();
                                };
                                select = new iosSelect(3, [data, workYearData, workMonthData], {
                                    title: title,
                                    itemHeight: 35,
                                    oneTwoRelation: 1,
                                    dataNotChange: true,
                                    oneLevelId: oneLevelId,
                                    twoLevelId: twoLevelId,
                                    threeLevelId: threeLevelId,
                                    callback: function(selectOneObj, selectTwoObj, selectThreeObj) {
                                        selectDateDom.attr('type', selectOneObj.id);
                                        selectDateDom.attr('year', selectTwoObj.id);
                                        selectDateDom.attr('month', selectThreeObj.id);
                                        if (selectOneObj.id == '1') {
                                            selectDateDom.html(selectOneObj.value);
                                        } else {
                                            var workBeginDate = selectTwoObj.id + '-' + (selectThreeObj.id < 10 ? '0' + selectThreeObj.id : selectThreeObj.id)
                                            selectDateDom.html(workBeginDate);
                                        }
                                        $(selector).css('color', '#555555');
                                        obj.callback && obj.callback(selectOneObj, selectTwoObj, selectThreeObj, workBeginDate);

                                    },
                                    beforeInit: function(obj) {
                                        var type = selectDateDom.attr('type');
                                        if (type == "1") {
                                            obj.options.scrollAction = false;
                                        } else {
                                            obj.options.scrollAction = true;
                                        }

                                    },
                                    afterInit: function(obj) {
                                        if (obj.selectOneObj.id == "1") {
                                            obj.scrollTwo.disable();
                                            obj.scrollThree.disable();
                                        }
                                    }
                                });
                            }, 200)
                        });
                        break;
                    }
                case '#workBegin':
                    {
                        var select = null;
                        selectDateDom = $(selector);
                        selectDateDom.on('click', function() {
                            setTimeout(function() {


                                var oneLevelId = selectDateDom.attr('type');
                                var twoLevelId = selectDateDom.attr('year');
                                var threeLevelId = selectDateDom.attr('month');

                                var workYearData = function(type) {
                                    if (type == "2") {
                                        if (select != null) {
                                            select.scrollTwo.disable();
                                            select.scrollThree.disable();
                                            select.options.scrollAction = false;
                                        }
                                    } else {
                                        if (select != null) {
                                            select.scrollTwo.enable();
                                            select.scrollThree.enable();
                                            select.options.scrollAction = true;
                                        }
                                    }
                                    return formatYear((new Date()).getFullYear());
                                }
                                var workMonthData = function() {
                                    return formatMonth();
                                };
                                select = new iosSelect(3, [data, workYearData, workMonthData], {
                                    title: title,
                                    itemHeight: 35,
                                    oneTwoRelation: 1,
                                    dataNotChange: true,
                                    oneLevelId: oneLevelId,
                                    twoLevelId: twoLevelId,
                                    threeLevelId: threeLevelId,
                                    callback: function(selectOneObj, selectTwoObj, selectThreeObj) {
                                        selectDateDom.attr('type', selectOneObj.id);
                                        selectDateDom.attr('year', selectTwoObj.id);
                                        selectDateDom.attr('month', selectThreeObj.id);
                                        if (selectOneObj.id == '2') {
                                            selectDateDom.html(selectOneObj.value);
                                        } else {
                                            var workBeginDate = selectTwoObj.id + '-' + (selectThreeObj.id < 10 ? '0' + selectThreeObj.id : selectThreeObj.id)
                                            selectDateDom.html(workBeginDate);
                                        }
                                        $(selector).css('color', '#555555');
                                        obj.callback && obj.callback(selectOneObj, selectTwoObj, selectThreeObj, workBeginDate);

                                    },
                                    beforeInit: function(obj) {
                                        var type = selectDateDom.attr('type');
                                        if (type == "2") {
                                            obj.options.scrollAction = false;
                                        } else {
                                            obj.options.scrollAction = true;
                                        }

                                    },
                                    afterInit: function(obj) {
                                        if (obj.selectOneObj.id == "2") {
                                            obj.scrollTwo.disable();
                                            obj.scrollThree.disable();
                                        }
                                    }
                                });
                            }, 200)
                        });
                        break;
                    }
                case '#startDate':
                    {
                        var select = null;
                        selectDateDom = $(selector);
                        selectDateDom.on('click', function() {
                            setTimeout(function() {


                                var oneLevelId = selectDateDom.attr('year');
                                var twoLevelId = selectDateDom.attr('month');

                                var workYearData = function(type) {
                                    return formatYear((new Date()).getFullYear());
                                }
                                var workMonthData = function() {
                                    return formatMonth();
                                };
                                select = new iosSelect(2, [workYearData, workMonthData], {
                                    title: title,
                                    itemHeight: 35,
                                    oneLevelId: oneLevelId,
                                    twoLevelId: twoLevelId,
                                    callback: function(selectOneObj, selectTwoObj) {
                                        selectDateDom.attr('year', selectOneObj.id);
                                        selectDateDom.attr('month', selectTwoObj.id);
                                        if (selectOneObj.id == '1') {
                                            selectDateDom.html(selectOneObj.value);
                                        } else {
                                            var beginDate = selectOneObj.id + '-' + (selectTwoObj.id < 10 ? '0' + selectTwoObj.id : selectTwoObj.id)
                                            selectDateDom.html(beginDate);
                                        }
                                        $(selector).css('color', '#555555');
                                        obj.callback && obj.callback(selectOneObj, selectTwoObj, beginDate);

                                    }
                                });
                            }, 200)
                        });
                        break;
                    }
                case '#locationPC':
                case '#hometownPC':
                case '#applyArea':
                    {
                        var CONFIG = {
                            type: "area",
                            textId: selector,
                            valueId: obj.text,
                            //showTown: false,
                            onlyChild: obj.onlyChild,
                            lang: lang,
                            description: {
                                cn: { input_area_tip: '可输入更详细的地区', search_industry_tip: '输入关键字快速查找行业', search_position_tip: '输入关键字快速查找职位', area_select_tip: '地区不限', area_selected_tip: '已选择地区', area_title: title || '地区选择', industry_title: '行业选择', position_title: '职位选择', excess: '选项不能超过{{num}}个', ok_btn: '确定', save_btn: '确定', clear_btn: '清空', hot_city: '热门城市', location_tip: '当前定位', recent_choice: '最近选择', reset_location: '[重新定位]', unlimited_area: '地区不限', unlimited: '不限' },
                                en: { input_area_tip: 'input the location', search_industry_tip: ' keyword of industry', search_position_tip: 'keyword of position', area_select_tip: 'you can choose {{num}} areas', area_selected_tip: 'selected areas', area_title: title || 'select areas', industry_title: 'select industry', position_title: 'select position', excess: 'no more than {{num}} options', ok_btn: 'ok', save_btn: 'ok', clear_btn: 'clear', hot_city: 'hot city', location_tip: 'location', recent_choice: 'history', reset_location: '[to reposition]', unlimited_area: 'unlimited area', unlimited: 'unlimited' }
                            },
                            onInit: function(s) {
                                $(obj.cache).val($(selector).attr('data-id') || '');
                            },
                            onSave: function(s) {
                                $(obj.cache).val(s.OPTIONS.selectedItemsId == 0 ? '' : s.OPTIONS.selectedItemsId);
                                var id = s.OPTIONS.selectedItemsId;
                                var text = s.OPTIONS.selectedItemsText ;//= s.getFullName(id)
                                    //text显示在选择以后,s.OPTIONS.selectedItemsText修饰后显示在保存后页面
                                    // if(s.CONFIG.selectType == "single"){
                                    // 	if(id.length > 2)
                                    // 		s.OPTIONS.selectedItemsText = s.getFullName(id.substring(0,2)) + '-' + s.OPTIONS.selectedItemsText
                                    // }
                                var cacheId = '';
                                var cityIds = [];
                                var towns = [];


                                towns.push(text);
                                if (s.OPTIONS.selectedItemsId == 0) {
                                    $(obj.text).val('');
                                    $(selector).text($(selector).attr('placeholder'));
                                    $(selector).css('color', '#888888');
                                } else {
                                    $(obj.text).val(cityIds.join(','));
                                    $(selector).text(text)
                                    $(selector).css('color', '#555555');
                                }
                                obj.callback && obj.callback(s);
                            },
                            onShow: function(s) {
                                var ids = $(obj.cache).val().split(",");
                                $('.clearSelector', s.areaSelector).trigger('tap');
                                ids.forEach(function(id) {
                                    $('.shade_box', s.areaSelector).trigger('tap');
                                    $('[data-pv="' + s.getPID(id) + '"]', s.iscrollLv1.scroller).trigger('tap');
                                    $('[data-cv="' + s.getCID(id) + '"]', s.iscrollLv2.scroller).trigger('tap');
                                    $('[data-tv="' + id + '"]', s.iscrollLv3.scroller).length && $('[data-tv="' + id + '"]', s.iscrollLv3.scroller).trigger('tap');
                                })
                            }
                        }

                        if (obj.max == 1) {
                            CONFIG.selectType = 'single';
                        } //else {
                            CONFIG.max = obj.max;
                        //}
                        var areaSelector = new uiSelector(CONFIG);
                        areaSelector.init();
                        $(selector).on('click', function() {
                            setTimeout(function() { areaSelector.open() }, 200)
                        })
                        break;
                    }
                case '#position':
                case '#calling':
                case '#jobFunctionID':
                    {
                        var CONFIG = {
                            type: obj.type,
                            textId: selector,
                            valueId: obj.text,
                            onlyChild: obj.onlyChild || false,
                            lang: lang,
                            description: {
                                cn: { input_area_tip: '可输入更详细的地区', search_industry_tip: '输入关键字快速查找行业', search_position_tip: '输入关键字快速查找职位', area_select_tip: '地区不限', area_selected_tip: '已选择地区', area_title: title || '地区选择', industry_title: obj.i_title || '行业选择', position_title: obj.p_title || '职位选择', excess: '选项不能超过{{num}}个', ok_btn: '确定', save_btn: '确定', clear_btn: '清空', hot_city: '热门城市', location_tip: '当前定位', recent_choice: '最近选择', reset_location: '[重新定位]', unlimited_area: '地区不限', unlimited: '不限' },
                                en: { input_area_tip: 'input the location', search_industry_tip: ' keyword of industry', search_position_tip: 'keyword of position', area_select_tip: 'you can choose {{num}} areas', area_selected_tip: 'selected areas', area_title: title || 'select areas', industry_title: obj.i_title || 'select industry', position_title: obj.p_title || 'select position', excess: 'no more than {{num}} options', ok_btn: 'ok', save_btn: 'ok', clear_btn: 'clear', hot_city: 'hot city', location_tip: 'location', recent_choice: 'history', reset_location: '[to reposition]', unlimited_area: 'unlimited area', unlimited: 'unlimited' }
                            },
                            onSave: function(s) {
                                if (s.OPTIONS.selectedItemsId == 0 || s.OPTIONS.selectedItemsText.length == 0) {
                                    $(obj.text).val('');
                                    $(selector).text($(selector).attr('placeholder'));
                                    $(selector).css('color', '#888888');
                                } else {
                                    $(selector).css('color', '#555555');
                                }
                                obj.callback && obj.callback(s.OPTIONS);
                            },
                            onShow: function(s) {
                                var ids = $(obj.text).val().split(",");
                                $('.clearSelector', s.posSelector).trigger('tap');
                                ids.forEach(function(id) {
                                    $('.shade_box', s.posSelector).trigger('tap');
                                    $('[data-pv="' + s.getPID(id) + '"]', s.iscrollLv1.scroller).trigger('tap');
                                    $('[data-cv="' + s.getCID(id) + '"]', s.iscrollLv2.scroller).trigger('tap');
                                })
                            }
                        }

                        if (obj.max == 1) {
                            CONFIG.selectType = 'single';
                        } else {
                            CONFIG.max = obj.max;
                        }

                        var posSelector = new uiSelector(CONFIG);
                        posSelector.init();
                        $(selector).on('click', function() {
                            setTimeout(function() { posSelector.open() }, 200)
                        })
                        break;
                    }
                default:
                    break;
            }

        },
        countWords: function(obj) {
            var initWords = function(o) {
                o.maxType = o.maxType == undefined ? 2 : o.maxType;
                var n = util.len($(o.selector).val(), o.maxType);
                var words = 'x/' + o.max;
                $(o.showSpace).text(words.replace(/x/, n));
                if (n > o.max) {
                    $(o.showSpace).css('color', 'red');
                } else {
                    $(o.showSpace).css('color', '#888');
                }
            }
            initWords(obj);
            var timer = null;
            $(obj.selector).focus(function() {
                var $this = $(this);
                timer = setInterval(function() {
                    initWords(obj);
                }, 800);
            })
            $(obj.selector).blur(function() {
                clearInterval(timer);
            })
        }
    }
    module.exports = out;
});
