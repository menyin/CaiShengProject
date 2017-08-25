define(function(require, exports, module) {
    var $ = require("$"),
        ui = require("ui.base"),
        juicer = require("juicer"),
        util = require("util"),
        person = require("action.person"),
        resume = require("action.person.resume"),
        touchSilder = require("ui.touchSilder"),
        mBox = require("ui.mBox")

    juicer.set({
        'tag::interpolateOpen': '{{',
        'tag::interpolateClose': '}}',
        'tag::noneencodeOpen': '\\${{',
        'tag::noneencodeClose': '}}'
    });

    var myCache = {}
    var out = {
        init: function(p) {
            person.updateInfo()
            p.resumeId = sessionStorage["resumeId"]
            p.resumeIds = [(sessionStorage["cnResumeId"] || 0), (sessionStorage["enResumeId"] || 0)]
            p.dataKey = "r" + p.resumeId + "s" + (sessionStorage["subResumeId"] || 0)
            $("#resumeName", false).html(sessionStorage["resumeName"] || "我的简历")
            util.cookie.set('resumeId', p.resumeId, {
                path: "/"
            })
            util.cookie.set('subResumeId', sessionStorage["subResumeId"] || 0, {
                path: "/"
            })
            util.cookie.set('cnResumeId', sessionStorage["cnResumeId"] || 0, {
                path: "/"
            })
            util.cookie.set('enResumeId', sessionStorage["enResumeId"] || 0, {
                path: "/"
            })
            //取参数
            var lang = ""
            //计算完成度
            var finishPar = {}
            if (/resumeModule\.html/.test(document.referrer)) {
                //if (!sessionStorage[p.dataKey]) {
                    sessionStorage[p.dataKey] = util.toString(p.jsonData);
                //}
                var resumeData = util.toJSON(sessionStorage[p.dataKey])
                lang = (resumeData.langType == "0") ? "cn" : "en"
                finishPar[lang] = resumeData
                p.jsonData = finishPar[lang]
            } else {
                lang = (p.jsonData.langType == "0") ? "cn" : "en"
                finishPar[lang] = p.jsonData
                    //缓存当前简历
                sessionStorage[p.dataKey] = util.toString(p.jsonData)
            }
            p.finish = resume.getFinished(finishPar)
            $("#cnFinish").html("(" + p.finish.cn + "%)")
            $("#enFinish").html("(" + p.finish.en + "%)")

            //获取简短信息----------------------------------
            var liteData = out.getReumeData(p.jsonData);
            var liteHtml = $("ul." + lang);
            var TEMPLATE = $('ul.template').html();
            liteHtml.html(juicer(TEMPLATE, liteData))
            out.showHideContent(lang);


            //应届毕业生处理
            if (p.jsonData.base.memberClass == "1") {
                $("li.graduate").show();
                $("li.work .red").hide();
                $("ul.cn li.graduate").after($("ul.cn .unitTip"));
                $("ul.en li.graduate").after($("ul.en .unitTip"));
            }
            //设定当前子简历编号
            $("ul.cn a[name='edit'],#add_btn").click(function() {
                sessionStorage["subResumeId"] = p.resumeIds[0]
                sessionStorage["subResumeType"] = '#' + $(this).attr("rel");
                sessionStorage["subListId"] = $(this).attr("tip")||'null'; //education work certificate 的id
                window.location.href = "/person/resume/resumeModule.html?act=" + $(this).attr("rel") + "&lang=0"
            })
            //管理简历
            $("#manage").click(function() {
                $("#manageList").toggle()
            })
            var isLoad = []
            isLoad[p.jsonData.langType] = true
            //另外一份子简历的处理
            var silderAt = 0
            var silder = new touchSilder({
                id: 'model_list',
                'noclick': false,
                'auto': '-1',
                speed: 600,
                timeout: 3000,
                direction: 'right',
                after: function(i, o) {
                    $('.slider').height($('ul.template_main7').eq(i).height()); //中英文模块高度不一致
                    $("#operate_lang li").removeClass("active").eq(i).addClass("active");
                    silderAt = i
                },
                before: function(i, o) {
                    if (isLoad[i]) return
                    if (p.resumeIds[i] == 0) {
                        $("#" + (i ? "en" : "cn") + "Finish").show();
                    }
                    if (p.resumeIds[i] === null || p.resumeIds[i] === undefined) p.resumeIds[i] = 0
                    $.ajax({
                        url: "/touch/person/resume/getSubResume_action.ujson?m.langType=" + i + "&m.resumeId=" + p.resumeId + "&m.subResumeId=" + p.resumeIds[i],
                        type: "GET",
                        error: function() {
                            alert('请求出错!');
                        },
                        success: function(data, status, xhr) {
                            var DATA = util.toJSON(data)
                            if (DATA == null) {
                                alert('请重新登录!');
                                return;
                            }
                            DATA.langType = i //设置中英文识别
                            var lang = ["cn", "en"]
                            $(".template ul.cert_list").html('');
                            $(".template ul.work_list").html('');
                            $(".template ul.edu_list").html('');
                            var D = out.getReumeData(DATA),
                                H = $("ul." + lang[i]),
                                TEMPLATE = $('ul.template').html()
                            H.html(juicer(TEMPLATE, D));
                            out.showHideContent(lang[i]);
                            otherResumeLoad = true;
                            sessionStorage["r" + p.resumeId + "s" + p.resumeIds[i]] = JSON.stringify(DATA)
                                //处理当前简历ID的时候 可能出错
                            $("ul.en a[name='edit'],#add_btn", false).click(function() {
                                sessionStorage["subResumeId"] = p.resumeIds[1]
                                sessionStorage["subResumeType"] = '#' + $(this).attr("rel");
                                sessionStorage["subListId"] = $(this).attr("tip")||'null'; //education work certificate 的id
                                window.location.href = "/touch/person/resume/resumeModule.uhtml?m.module=" + $(this).attr("rel") + "&lang=1"
                            })
                            $("ul.cn a[name='edit'],#add_btn", false).click(function() {
                                sessionStorage["subResumeId"] = p.resumeIds[0]
                                sessionStorage["subResumeType"] = '#' + $(this).attr("rel");
                                sessionStorage["subListId"] = $(this).attr("tip")||'null'; //education work certificate 的id
                                window.location.href = "/touch/person/resume/resumeModule.uhtml?m.module=" + $(this).attr("rel") + "&lang=0"
                            })
                            isLoad[i] = true
                                //计算完成度
                            var finishPar = {}
                            finishPar[lang[i]] = DATA
                            p.finish = resume.getFinished(finishPar)
                            $("#" + lang[i] + "Finish").html("(" + p.finish[lang[i]] + "%)").show()
                        }
                    })
                }
            });
            $("#operate_lang li").each(function(i) {
                $(this).click(function() {
                    if (i == silderAt) return;
                    if (i < silderAt)
                        silder.next(-1)
                    else
                        silder.next(1)
                    silderAt = i;
                });
            })
            $("#operate_lang li").eq(p.jsonData.langType).addClass("active")
            $("#model_list").addClass('cn')
            if (lang == "en") {
                silder.next(1);
                silderAt = 1;
                $("#enFinish").show();
                $("#cnFinish").hide();
                $("ul.en a[name='edit'],#add_btn").click(function() {
                    sessionStorage["subResumeId"] = p.resumeIds[1]
                    sessionStorage["subResumeType"] = '#' + $(this).attr("rel");
                    sessionStorage["subListId"] = $(this).attr("tip")||'null'; //education work certificate 的id
                    window.location.href = "/touch/person/resume/resumeModule.uhtml?m.module=" + $(this).attr("rel") + "&lang=1"
                })
            }

            //管理 (显示预览/改名/删除)
            $('.btn_manage').unbind().bind('click', function() {
                var $mag_dropdown = $('.mag_dropdown');

                if($('#ui-mask-ui-mask').length<=0) ui.mask.show({z: 1});

                if ($mag_dropdown.hasClass('hide')) $mag_dropdown.removeClass('hide');
                $('#ui-mask-ui-mask').unbind().bind('click', function() {
                    //var $mag_dropdown= $('.mag_dropdown');
                    ui.mask.hide();
                    if (!$mag_dropdown.hasClass('hide')) $mag_dropdown.addClass('hide');
                })
            })
            $('.setRename').unbind().bind('click', function() {
                var res_tpl = util.template($('#set-Rename').html());
                var reName = new mBox(res_tpl({
                    resumeName: sessionStorage["resumeName"]
                }), {
                    title: "简历改名",
                    className: "reName",
                    width: 260,
                    onopen: function(mBoxObj) {
                        var $mag_dropdown = $('.mag_dropdown');
                        if (!$mag_dropdown.hasClass('hide')) $mag_dropdown.addClass('hide');

                        var $box = mBoxObj.box;
                        $box.on('input', 'input', function() {
                            var $this = $(this);
                            var $clear = $this.next('.input-clear');
                            if (!util.isEmpty($this.val())) {
                                $clear.show();
                            } else {
                                $clear.hide();
                            }
                        });

                        $box.on('click', '.clear', function(event) {
                            event.stopPropagation();
                            $(this).hide().prev('input').val('');
                        });
                    },
                    onok: function(boxObj) {
                        var box = boxObj.box
                        var resumeName = util.trim(box.find("#resumeName").val())
                        if (util.check(resumeName, {
                            notEmpty: true,
                            min: 4,
                            minType: 1,
                            max: 20,
                            maxType: 1,
                            error: function() {
                                alert("新简历名称:最少2个汉字4个字母,最多10个汉字!")
                            },
                            success: function(data) {
                                return true;
                            }
                    })) {
                            return out.setRename(resumeName, reName);
                        }
                    },
                    oncancel: function() {
                        reName.close();
                    },
                    onclose: function() {
                        ui.mask.hide();
                    }
                })
                reName.open();
            })
            $('.setDelete').unbind().bind('click', function() {
                var del_tpl = util.template($('#set-Delete').html());
                var deleteResume = new mBox(del_tpl(), {
                    title: "删除简历",
                    className: "deleteResume",
                    width: 260,
                    onopen: function() {
                        var $mag_dropdown = $('.mag_dropdown');
                        if (!$mag_dropdown.hasClass('hide')) $mag_dropdown.addClass('hide');
                    },
                    onok: function(boxObj) {
                        out.setDelete(p.resumeId);
                    },
                    oncancel: function() {
                        deleteResume.close();
                    },
                    onclose: function() {
                        ui.mask.hide();
                    }
                })
                deleteResume.open();
            })
            $(".setMaster").unbind().bind('click', function() {
                var mas_tpl = util.template($('#set-Master').html());
                var masterResume = new mBox(mas_tpl(), {
                    title: "设置默认简历",
                    className: "deleteResume",
                    width: 260,
                    onopen: function() {
                        var $mag_dropdown = $('.mag_dropdown');
                        if (!$mag_dropdown.hasClass('hide')) $mag_dropdown.addClass('hide');
                    },
                    onok: function(boxObj) {
                        out.setMaster(p.resumeId, masterResume);
                    },
                    oncancel: function() {
                        masterResume.close();
                    },
                    onclose: function() {
                        ui.mask.hide();
                    }
                })
                masterResume.open();
            })
            //展开收起
            $('#model_list').undelegate().delegate('.showHide', 'click', function() {
                var $this = $(this);
                var lang = $this.parents('.template_main7').hasClass('en') ? "en" : "cn";
                var $slider = $('.slider');
                var $content = $this.parents('.hs_content').find('.hideContent');
                var tipLabel = $this.attr('tip');
                switch (tipLabel) {
                    case 'school_course':
                        {
                            $content = $content.eq(0);
                            break;
                        }
                    case 'school_exprience':
                        {
                            $content = $content.eq(1);
                            break;
                        }
                    default:
                        break;
                }
                var org_height = $content.height(),
                    new_height = 0;
                if ($this.hasClass('showAll')) $content.removeClass('show3Lines');
                else if ($this.hasClass('hideAll')) $content.addClass('show3Lines');
                new_height = $content.height();
                $slider.height($slider.height() + (new_height - org_height));
                if ($this.hasClass('showAll')) {
                    $this.removeClass('showAll').addClass('hideAll');
                    $this.text(person.dic.title[lang]['hideAll']);
                } else if ($this.hasClass('hideAll')) {
                    $this.removeClass('hideAll').addClass('showAll');
                    $this.text(person.dic.title[lang]['showAll']);
                }
            })
            $('.refresh_tip').unbind().bind('click', function() {
                window.location.href = "/person/resume/queryBaseInfo.html?_t=" + Math.random();
            })

            //定位到该项目
            window.onload = function() {
                if (location.hash) {
                    out.goByScrollTo(location.hash);
                }
            }
        }
        //拼装简历模板信息
        ,
        getReumeData: function(data) {
            var lang = data.langType == "0" ? "cn" : "en"
            var now = new Date();
            var thisYear = now.getFullYear();
            var thisMonth = now.getMonth() + 1;
            var thisDay = now.getDate();
            var birthday = data.base.birthday.split('-');
            var age = thisYear - birthday[0] - (thisMonth > birthday[1] ? 0 : 1);
            var marriage = ["Unmarried", "Married", "Divorced", "Private"];
            var degree = {10: "Middle School",20: "High School",30: "Technical School",40: "Junior College",50: "Bachelor Degree ",60: "Master Degree",70: "Doctor Degree"};
            function check(arr) {
                var hasErr = false;
                for (var i = arr.length - 1; i >= 0; i--) {
                    var item = arr[i];
                    hasErr = !util.check(item.data, item.opts);
                    if (hasErr) break;
                }
                return hasErr;
            }
            return {

                base: function() {
                    var working = ""; // 1:有工作经验 2:无经验
                    var hasExper = false;
                    var bir = data.base.birthday.split('-');
                    var year = now.getFullYear();
                    var workCheck=data.base.memberClass===1 ? '':{
                                notEmpty: true,
                                gt : bir[0] - 1,
                                lt : year + 1
                            }
                    if (data.base.memberClass === "2") {
                        working = person.dic.noExperience[lang];
                        hasExper = false;
                    } else {
                        hasExper = true;
                        var begin = data.base.workBeginDate;
                        if (begin == "") {
                            working = person.dic.experience[lang];
                        } else {
                            var workBeginDate = begin.split('-');
                            var workingYear = thisYear - workBeginDate[0];
                            var workingMonth = thisMonth - workBeginDate[1];
                            if (workingMonth < 0) {
                                workingYear = workingYear - 1;
                                workingMonth = workBeginDate[1] >> 0;
                            }
                            if (workingYear) {
                                workingYear = workingYear + (lang === "en" ? (" year" + (workingYear > 1 ? "s " : " ")) : "年");
                            } else {
                                workingYear = "";
                            }
                            if (workingMonth) {
                                workingMonth = workingMonth + (lang === "en" ? (" month" + (workingMonth > 1 ? "s " : " ")) : "个月")
                            } else {
                                workingMonth = "";
                            }
                            if (workingYear || workingMonth)
                                working = person.dic.workingExperience[lang].replace("{y}", workingYear).replace("{m}", workingMonth);
                            else {
                                workingMonth = lang == "en" ? "less than one month" : "少于1个月";
                                working = person.dic.workingExperience[lang].replace("{y}", workingYear).replace("{m}", workingMonth);
                            }
                        }
                    }
                    var fields = [
                        {
                            data: data.base.name,
                            opts: {
                                notEmpty: true,
                                min: 1,
                                minType: 1,
                                max: 50,
                                maxType: 1
                            }
                        },
                        {
                            data: data.base.sex,
                            opts: {
                                notEmpty: true,
                                min: 1,
                                max: 2
                            }
                        },
                        {
                            data: data.base.hometownPCName,
                            opts: {
                                notEmpty: true
                            }
                        },
                        {
                            data: data.base.birthday,
                            opts: {
                                notEmpty: true
                            }
                        },
                        {
                            data: data.base.height,
                            opts: {
                                notEmpty: true,
                                gt: 49,
                                lt: 301
                            }
                        },
                        // {
                        //     data: data.base.marriage,
                        //     opts: {
                        //         notEmpty: true
                        //     }
                        // },
                        {
                            data: data.base.degree,
                            opts: {
                                notEmpty: true,
                                gt: 1
                            }
                        },
                        {
                            data: data.base.memberClass,
                            opts: {
                                notEmpty: true,
                            }
                        },
                        // {
                        //     data: data.base.workBeginDate.split('-')[0],
                        //     opts: workCheck
                        // },
                        {
                            data: data.base.locationPCName,
                            opts: {
                                notEmpty: true
                            }
                        },
                        {
                            data: data.base.mobile,
                            opts: {
                                notEmpty: true,
                                min: 11,
                                max: 11,
                                regEx: util.getRegExStr("safetel")
                            }
                        },
                        // {
                        //     data: data.base.email,
                        //     opts: {
                        //         notEmpty: true,
                        //         min: 5,
                        //         max: 80,
                        //         regEx: util.getRegExStr("safemail")
                        //     }
                        // }
                    ];

                    return {
                        name: data.base.name,
                        sex: person.dic.sex[lang][data.base.sex],
                        height: data.base.height + "CM",
                        age: person.dic.age[lang].replace("{age}", age),
                        marriage: data.base.marriage?person.dic.marriage[lang][data.base.marriage]:"",
                        degree: person.dic.degree[lang][data.base.degree] || "",
                        hasExper: hasExper,
                        working: working,
                        hometown: data.base.hometownPCName || "",
                        location: data.base.locationPCName + data.base.address || "",
                        mobile: data.base.mobile || "",
                        mobileVerify: data.base.mobileVerify || 0,
                        email: data.base.email || "",
                        emailVerify: data.base.emailVerify || 0,
                        qq: data.base.qq || "",
                        wechat: data.base.imNum || "",
                        showTips: check(fields)
                    }
                }(),
                photo: function() {
                    var address = "";
                    // if (data.base.photo) {
                        address = data.base.photo
                    // } else {
                    //     address = 　'../../commImage/myPhoto.jpg'
                    // }
                    var tpl = util.template($('#base-photo').html())
                    $('.myPhoto').html(tpl({
                        address:address
                    }))
                }(),
                apply: function() {
                    var dataEmpty = true;
                    var positions = "",
                        positionAim="",
                        locations = "",
                        salary = "",
                        start = "",
                        calling = '',
                    applyErr = false;
                    for (var i = 1; i < 6; i++) {
                        positionAim = positions + data.apply['jobFunName' + i] + ',';
                        positions = positions + data.apply['jobFunName' + i] + ',';
                        locations = locations + data.apply['jobLocPCName' + i] + ',';
                        calling = calling + data.apply['callingName'+i] + ',';
                    }
                    positions = positions + data.apply.jobSeeking1;
                    positions = positions.replace(/,{2,}/g, ',').replace(/^,{0,}|,{0,}$/g, ''); //中间有连续逗号,首尾逗号都纠正
                    locations = locations.replace(/,{2,}/g, ',').replace(/^,{0,}|,{0,}$/g, '');
                    calling = calling.replace(/,{2,}/g, ',').replace(/^,{0,}|,{0,}$/g, '');
                    positionAim=positionAim.replace(/,/g, '');
                    positions = positions.replace(/,/g, ', ');
                    locations = locations.replace(/,/g, ', ');
                    if (positions || locations || data.apply.otherRequirement || data.apply.checkinDate) {
                        dataEmpty = false;
                    }
                    if (data.apply.checkinDate) {
                        start = data.apply.checkinDate;
                        start = person.dic.start[lang][start];
                    }
                    if (data.apply.salary) {
                        dataEmpty = false;
                        salary = data.apply.salary;
                        salary = person.dic.salarys[lang][salary];
                    }

                    var applyFields = [
                        {
                            data: positionAim,
                            opts: {
                                notEmpty: true
                            }
                        },
                        {
                            data: locations,
                            opts: {
                                notEmpty: true
                            }
                        },
                        {
                            data: start,
                            opts: {
                                notEmpty: true
                            }
                        }
                    ];
                    return {
                        dataEmpty: dataEmpty,
                        positions: positions,
                        locations: locations,
                        start: start,
                        salary: salary,
                        calling: calling,
                        welfare: data.apply.otherRequirement,
                        showTips:dataEmpty ? false : check(applyFields)
                    }
                }(),
                education: function() {
                   // alert(1)
                    var dataEmpty = data.education.length == 0 ? true : false;
                    var tpl = util.template($("#edu_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var educationField = [
                            {
                                data: listData.school,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            },
                            {
                                data: listData.speciality,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            },
                            {
                                data: listData.beginDate,
                                opts: {
                                    notEmpty: true
                                }
                            },
                            {
                                data: listData.degreeID,
                                opts: {
                                    notEmpty: true,
                                    gt:0,
                                    lt:100,
                                    regEx: "^[\\d]0$"
                                }
                            }
                        ];
                        var time = listData.beginDate + ' ~ ';
                        if (listData.endDate == "") {
                            time = time + (lang == "en" ? "now" : "至今")
                        } else {
                            time = time + listData.endDate;
                        }
                        return {
                            time: time,
                            degree: person.dic.degree[lang][listData.degreeID],
                            school: listData.school,
                            speciality: listData.speciality,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(educationField)
                        };
                    }

                    //sort degreeID,endDate
                    data.education.sort(function(a, b) {
                        var endA = a.endDate == "" ? "9999-99" : a.endDate;
                        var endB = b.endDate == "" ? "9999-99" : b.endDate;
                        return (b.degreeID + endB) > (a.degreeID + endA)
                    })
                    for (var i = 0; i < data.education.length; i++) {
                        (function(education) {
                            var listData = fillListData(education);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.education[i])
                    }
                    if (list)
                        $(".template ul.edu_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                train: function() {
                    var dataEmpty = data.train.length == 0 ? true : false;
                    var tpl = util.template($("#train_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var trainField = [
                            {
                                data: listData.trainingName,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            },
                            {
                                data: listData.trainDetail,
                                opts: {
                                    notEmpty: true,
                                    max: 2000
                                }
                            },
                            {
                                data: listData.trainingSpecialty,
                                opts: {
                                    notEmpty: true,
                                    max:200
                                }
                            },
                            {
                                data: listData.trainingBackGround,
                                opts: {
                                    notEmpty: true,
                                    max:200
                                }
                            }
                        ];
                        var time = listData.trainingDateStart + ' ~ ';
                        if (listData.trainingDateEnd == "") {
                            time = time + (lang == "en" ? "now" : "至今")
                        } else {
                            time = time + listData.trainingDateEnd;
                        }
                        return {
                            time: time,
                            trainingName: listData.trainingName,
                            trainDetail: listData.trainDetail,
                            trainingSpecialty: listData.trainingSpecialty,
                            trainingBackGround: listData.trainingBackGround,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(trainField)
                        };
                    }

                    //sort degreeID,endDate
                    data.project.sort(function(a, b) {
                        var endA = a.endDate == "" ? "9999-99" : a.endDate;
                        var endB = b.endDate == "" ? "9999-99" : b.endDate;
                        return (endB) > (endA)
                    })
                    for (var i = 0; i < data.train.length; i++) {
                        (function(train) {
                            var listData = fillListData(train);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.train[i])
                    }
                    if (list)
                        $(".template ul.train_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                work: function() {
                    var dataEmpty = data.work.length == 0 ? true : false;
                    var tpl = util.template($("#work_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var time = listData.beginDate + ' ~ ';
                        var workField = [
                            {
                                data: listData.beginDate,
                                opts: {
                                    notEmpty: true
                                }
                            },
                            {
                                data: listData.comName,
                                opts: {
                                    notEmpty: true,
                                    max: 100
                                }
                            },
                            {
                                data: listData.calling,
                                opts: {
                                    notEmpty: true
                                }
                            },
                            {
                                data: listData.jobFunName,
                                opts: {
                                    notEmpty: true
                                }
                            },
                            {
                                data: listData.position,
                                opts: {
                                    notEmpty: true,
                                    max: 50
                                }
                            },
                            {
                                data: listData.workDesc,
                                opts: {
                                    notEmpty: true,
                                    max: 2000,
                                    maxType: 0
                                }
                            }
                        ];
                        if (listData.endDate == "") {
                            time = time + (lang == "en" ? "now" : "至今")
                        } else {
                            time = time + listData.endDate;
                        }
                        return {
                            time: time,
                            name: listData.comName,
                            operators: listData.position,
                            workDesc: listData.workDesc,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(workField)
                        };
                    }
                    for (var i = 0; i < data.work.length; i++) {
                        (function(work) {
                            var listData = fillListData(work);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.work[i])
                    }
                    if (list)
                        $(".template ul.work_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                project: function() {
                   // alert(1)
                    var dataEmpty = data.project.length == 0 ? true : false;
                    var tpl = util.template($("#project_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var projectField = [
                            {
                                data: listData.projectDuty,
                                opts: {
                                    notEmpty: true,
                                    max: 50
                                }
                            },
                            {
                                data: listData.projectExperience,
                                opts: {
                                    notEmpty: true,
                                    max: 2000
                                }
                            },
                            {
                                data: listData.projectIntr,
                                opts: {
                                    notEmpty: true,
                                    max:50
                                }
                            },
                            {
                                data: listData.projectName,
                                opts: {
                                    notEmpty: true,
                                    max:50
                                }
                            }
                        ];
                        var time = listData.projectStartTime + ' ~ ';
                        if (listData.projectEndTime == "") {
                            time = time + (lang == "en" ? "now" : "至今")
                        } else {
                            time = time + listData.projectEndTime;
                        }
                        return {
                            time: time,
                            projectDuty: listData.projectDuty,
                            projectName: listData.projectName,
                            projectIntr: listData.projectIntr,
                            projectExperience: listData.projectExperience,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(projectField)
                        };
                    }

                    //sort degreeID,endDate
                    data.project.sort(function(a, b) {
                        var endA = a.endDate == "" ? "9999-99" : a.endDate;
                        var endB = b.endDate == "" ? "9999-99" : b.endDate;
                        return (endB) > (endA)
                    })
                    for (var i = 0; i < data.project.length; i++) {
                        (function(project) {
                            var listData = fillListData(project);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.project[i])
                    }
                    if (list)
                        $(".template ul.project_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                ability: function() {
                    var dataEmpty = data.ability.length == 0 ? true : false;
                    var tpl = util.template($("#ability_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var projectField = [
                            {
                                data: listData.SkillName,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            },
                        ];
                        return {
                            SkillName : listData.SkillName,
                            levelName : listData.levelName,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(projectField)
                        };
                    }
                    for (var i = 0; i < data.ability.length; i++) {
                        (function(ability) {
                            var listData = fillListData(ability);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.ability[i])
                    }
                    if (list)
                        $(".template ul.ability_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                language: function() {

                    var dataEmpty = data.language.length == 0 ? true : false;
                    var tpl = util.template($("#language_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var languageField = [
                            {
                                data: listData.lanCert,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            },
                        ];
                        return {
                            lanCert: listData.lanCert,
                            lanType: person.dic.lanType[lang][listData.lanType],
                            level: person.dic.level[lang][listData.level],
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(languageField)
                        };
                    }

                    for (var i = 0; i < data.language.length; i++) {
                        (function(language) {
                            var listData = fillListData(language);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.language[i])
                    }
                    if (list)
                        $(".template ul.language_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                self: function() {
                    return {
                        dataEmpty: data.self.careerDirection ? false : true,
                        content: data.self.careerDirection || '',
                        showAll: true
                    };
                }(),
                school: function() {
                    var dataEmpty = data.school.length == 0 ? true : false;
                    var tpl = util.template($("#school_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var schoolField = [
                            {data: listData.PracticeName,opts: {notEmpty: true, max: 200}},
                            {data: listData.PracticeDetail,opts: {notEmpty: true,max: 2000}},
                            {data: listData._PracticeTimeStart,opts: {notEmpty: true}},
                        ];
                        var time = listData._PracticeTimeStart + ' ~ ';
                        if (listData._PracticeTimeEnd == "") {
                            time = time + (lang == "en" ? "now" : "至今")
                        } else {
                            time = time + listData._PracticeTimeEnd;
                        }
                        return {
                            time: time,
                            PracticeName: listData.PracticeName,
                            PracticeDetail: listData.PracticeDetail,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(schoolField)
                        };
                    }

                    //sort degreeID,endDate
                    data.school.sort(function(a, b) {
                        var endA = a._PracticeTimeEnd == "" ? "9999-99" : a._PracticeTimeEnd;
                        var endB = b._PracticeTimeEnd == "" ? "9999-99" : b._PracticeTimeEnd;
                        return (endB) > (endA)
                    })
                    for (var i = 0; i < data.school.length; i++) {
                        (function(school) {
                            var listData = fillListData(school);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.school[i])
                    }
                    if (list)
                        $(".template ul.school_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                cert: function() {
                    var dataEmpty = data.cert.length == 0 ? true : false;
                    var tpl = util.template($("#cert_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var certField = [
                            {
                                data: listData.certName,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            }
                        ];
                        return {
                            certName:listData.certName,
                            gainTime:listData.gainTime,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(certField)
                        };
                    }

                    for (var i = 0; i < data.cert.length; i++) {
                        (function(cert) {
                            var listData = fillListData(cert);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.cert[i])
                    }
                    if (list)
                        $(".template ul.cert_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                otherInfo: function(){
                    var dataEmpty = data.otherInfo.length == 0 ? true : false;
                    var tpl = util.template($("#otherInfo_list").html());
                    var list = "";
                    var fillListData = function(listData) {
                        var otherInfoField = [
                            {
                                data: listData.TopicDesc,
                                opts: {
                                    notEmpty: true,
                                    max: 200
                                }
                            },
                        ];
                        return {
                            TopicDesc: listData.TopicDesc,
                            TopicContent: listData.TopicContent,
                            id: listData.id,
                            title: {
                                edit: person.dic.title[lang]['edit']
                            },
                            showTips: check(otherInfoField)
                        };
                    }

                    for (var i = 0; i < data.otherInfo.length; i++) {
                        (function(otherInfo) {
                            var listData = fillListData(otherInfo);
                            list = list + tpl(listData); //juicer(tpl(),listData);
                        })(data.otherInfo[i])
                    }
                    if (list)
                        $(".template ul.otherInfo_list").html(list);
                    return {
                        dataEmpty: dataEmpty
                    }
                }(),
                title: function() {
                    return {
                        baseInfo: person.dic.title[lang]['baseInfo'],
                        required: person.dic.title[lang]['required'],
                        edit: person.dic.title[lang]['edit'],
                        residence: person.dic.title[lang]['residence'],
                        location: person.dic.title[lang]['location'],
                        mobile: person.dic.title[lang]['mobile'],
                        email: person.dic.title[lang]['email'],
                        qq: person.dic.title[lang]['qq'],
                        wechat: person.dic.title[lang]['wechat'],
                        careerObjective: person.dic.title[lang]['careerObjective'],
                        positions: person.dic.title[lang]['positions'],
                        locations: person.dic.title[lang]['locations'],
                        start: person.dic.title[lang]['start'],
                        salary: person.dic.title[lang]['salary'],
                        welfare: person.dic.title[lang]['welfare'],
                        education: person.dic.title[lang]['education'],
                        addEducation: person.dic.title[lang]['addEducation'],
                        graduatesInfo: person.dic.title[lang]['graduatesInfo'],
                        showAll: person.dic.title[lang]['showAll'],
                        course: person.dic.title[lang]['course'],
                        practiceExperience: person.dic.title[lang]['practiceExperience'],
                        workExperience: person.dic.title[lang]['workExperience'],
                        addWork: person.dic.title[lang]['addWork'],
                        projectExp: person.dic.title[lang]['projectExp'],
                        languageSkills: person.dic.title[lang]['languageSkills'],
                        specialSkills: person.dic.title[lang]['specialSkills'],
                        training: person.dic.title[lang]['training'],
                        selfInfo: person.dic.title[lang]['selfInfo'],
                        attachments: person.dic.title[lang]['attachments'],
                        addAppendix: person.dic.title[lang]['addAppendix'],
                        lang: person.dic.title[lang]['lang'],
                        school: person.dic.title[lang]['school'],
                        addSchool: person.dic.title[lang]['addSchool'],
                        addProject: person.dic.title[lang]['addProject'],
                        addLanguage: person.dic.title[lang]['addLanguage'],
                        addAbility: person.dic.title[lang]['addAbility'],
                        addTrain: person.dic.title[lang]['addTrain'],
                        addOtherInfo: person.dic.title[lang]['addOtherInfo'],
                        otherInfo:person.dic.title[lang]['otherInfo'],
                        addCert:person.dic.title[lang]['addCert'],
                        cert:person.dic.title[lang]['cert'],
                        calling:person.dic.title[lang]['calling']

                    };
                }(),
                emptyTips: function() {
                    return {
                        apply: person.dic.emptyTips[lang]['apply'],
                        education: person.dic.emptyTips[lang]['education'],
                        school: person.dic.emptyTips[lang]['school'],
                        work: person.dic.emptyTips[lang]['work'],
                        project: person.dic.emptyTips[lang]['project'],
                        language: person.dic.emptyTips[lang]['language'],
                        ability: person.dic.emptyTips[lang]['ability'],
                        training: person.dic.emptyTips[lang]['training'],
                        self: person.dic.emptyTips[lang]['self'],
                        certificate: person.dic.emptyTips[lang]['certificate'],
                        otherInfo: person.dic.emptyTips[lang]['otherInfo'],
                        cert: person.dic.emptyTips[lang]['cert']
                    }
                }()

            } //end return
        }
        //设置简历信息
        ,
        setMaster: function(rid, box) {
                $.ajax({
                    url: "/person/resume/setMaster.ujson?resumeId=" + rid,
                    type: "GET",
                    error: function() {
                        alert('请求出错!');
                    },
                    success: function(data) {
                        var DATA = util.toJSON(data)
                        if (DATA.success != true) {
                            alert('设置失败!');
                        }
                        $("#manageList").hide();
                        alert('设置成功!');
                        box.close();
                    }
                })
            }
            //重命名简历
            ,
        setRename: function(resumeName, box) {
                $.ajax({
                    url: "/api/web/person.api?act=resume_save",
                    data: {
                        "txtResumeName":resumeName
                    },
                    type: "POST",
                    dataType: "json",
                    beforeSend: function() {
                        ui.loading.show({id: 'update_loading',z: 88});
                        ui.mask.show({id: 'update_mask',z: 66});
                    },
                    error: function() {
                        ui.loading.hide({id: 'update_loading'});
                        alert("通讯失败!")
                        ui.mask.hide({id: 'update_mask'});
                    },
                    success: function(data) {
                        ui.loading.hide({id: 'update_loading'});
                        if(data.status!=1){
                            alert('设置失败!');
                            return;
                        }
                        sessionStorage["resumeName"] = resumeName
                        $("#resumeName").html(resumeName);
                        ui.mask.hide({id: 'update_mask'});
                        alert('设置成功!');
                        box.close();
                    }
                })
            }
            //删除简历
            ,
        setDelete: function(rid) {
            $.ajax({
                url: "/person/resume/del.ujson?resumeId=" + rid,
                type: "GET",
                error: function() {
                    alert('请求出错!');
                },
                success: function(data) {
                    var DATA = util.toJSON(data)
                    if (DATA.success != true) {
                        alert('设置失败!');
                        return;
                    }
                    window.location.href = "/touch/person/resumeManage.uhtml?t=" + (+new Date())
                }
            })
        },
        showHideContent: function(lang) {

            var obj = {
                res_school: ['school_course', 'school_exprience'],
                res_project: 'project',
                res_ability: 'ability',
                res_train: 'train',
                res_self: 'self'
            }
            var cutHeight = 0;
            var hideContent = function(obj, showAllTip, no) {
                var $obj = $(obj);
                var showHeight = 72; //line height:24 显示3行
                if (no == undefined) no = 0;
                var $showAll = $obj.find('a[tip="' + showAllTip + '"]');
                var content = $obj.find('.hideContent').eq(no);
                if (content.height() > showHeight) {
                    cutHeight += (content.height() - showHeight);
                    if (!content.hasClass('show3Lines')) content.addClass('show3Lines');
                    if ($showAll.hasClass('hide')) $showAll.removeClass('hide');

                } else {
                    if (content.hasClass('show3Lines')) content.removeClass('show3Lines');
                    if (!$showAll.hasClass('hide')) $showAll.addClass('hide');
                }
            }

            for (var item in obj) {
                switch (item) {
                    case 'res_school':
                        {
                            hideContent('.' + lang + ' .res_school', obj[item][0], 0);
                            hideContent('.' + lang + ' .res_school', obj[item][1], 1);
                            break;
                        }
                    case 'res_project':
                        {
                            hideContent('.' + lang + ' .res_project', obj[item]);
                            break;
                        }
                    case 'res_ability':
                        {
                            hideContent('.' + lang + ' .res_ability', obj[item]);
                            break;
                        }
                    case 'res_train':
                        {
                            hideContent('.' + lang + ' .res_train', obj[item]);
                            break;
                        }
                    case 'res_self':
                        {
                            hideContent('.' + lang + ' .res_self', obj[item]);
                            break;
                        }
                }
            }
            var $slider = $('.slider')
            $slider.height()
                //$slider.height($slider.height() - cutHeight);

        },
        goByScrollTo: function(hash) {
            if (hash.indexOf('&') != -1) { //排除这些#work&t=1471503078197
                var h = hash.split('&');
                hash = h[0];
            }
            var $hash = $(hash)
            if ($hash.length == 0) return;
            window.scrollTo(0, $hash.offset().top);
        }



    }
    module.exports = out;
});