define(function(require, exports, module) {
    var $ = require('$');
    var util = require('util');
    var ui = require('ui.base');
    var person = require('action.person');
    var $rPanelNav = $('#resume-operate');
    var $rPanelCont = $('#resume-panel');
    var $resumeTitle = $('#resume-create-title');
    var $importSelection = $('#import-from');
    var $importUsername = $('#import-username');
    var $importPassword = $('#import-password');

    var request = function(opts) {
        $.ajax({
            type: opts.type || 'GET',
            url: opts.url || '',
            data: opts.data || {},
            dataType: opts.dataType || null,
            beforeSend: function() {
                ui.loading.show({id:'request_loading'});
                ui.mask.show({id:'request_mask'});
                opts.beforeSend && opts.beforeSend();
            },
            complete: function() {
                ui.loading.hide({id:'request_loading'});
                ui.mask.hide({id:'request_mask'});
                opts.complete && opts.complete();
            },
            error: function() {
                opts.error && opts.error();
            },
            success: function(resp) {
                opts.success && opts.success(resp);
            }
        });
    }


    var resumeCreation = {
        init: function() {
            var self = this;

            // 切换新建简历和导入简历
            $rPanelNav.on('singleTap', '.panel-nav', function(event) {
                event.stopPropagation();
                var $elem = $(this);
                var createType = $elem.attr('data-type');
                self.resetPanel(createType);
                $elem.addClass('active').siblings('.panel-nav').removeClass('active');
                $rPanelCont.find('.resume-action-' + createType).removeClass('hide').siblings('.resume-panel').addClass('hide');
            });

            $importSelection.on('change', function(event) {
                $importUsername.val('');
                $importPassword.val('');
            });

            // 密码可见
            $('.pwdVision').on('singleTap', function(event) {
                var $elem = $(this);
                if ( $elem.hasClass('pwd_invisiable') ) {
                    // 不可见 -> 可见
                    $elem.removeClass('pwd_invisiable').addClass('pwd_visiable');
                    $elem.siblings('input').attr('type', 'text');
                } else if ( $elem.hasClass('pwd_visiable') ) {
                    // 可见 -> 不可见
                    $elem.removeClass('pwd_visiable').addClass('pwd_invisiable');
                    $elem.siblings('input').attr('type', 'password');
                }
            });

            // 点击创建
            $('#resume-button-create').on('singleTap', function(evnet) {
                var title = $resumeTitle.val();

                var foundErr = false;
                foundErr = !util.check(title, {
                    notEmpty: true,
                    min: 4,
                    minType: 1,
                    max: 20,
                    maxType: 1,
                    error: function() {
                        alert('新简历名称:最少2个汉字4个字母,最多10个汉字!');
                    }
                });
                if (foundErr) return false;

                self.createResume(title);
            });

            // 点击导入
            $('#resume-button-import').on('singleTap', function(event) {
                var importFrom = $importSelection.val();
                var username = $importUsername.val();
                var password = $importPassword.val();

                if ( util.isEmpty(importFrom) || importFrom === '0' ) {
                    alert('请选择简历导入来源！');
                    return false;
                }
                if ( util.isEmpty(username) ) {
                    alert('请输入账号！');
                    return false;
                }
                if ( util.isEmpty(password) ) {
                    alert('请输入密码！');
                    return false;
                }

                self.importResume(importFrom, username, password);
            });
        },
        resetPanel: function(type) {
            switch(type) {
                case 'create':
                    $resumeTitle.val('');
                    break;
                case 'import':
                    $importSelection.val('');
                    $importUsername.val('');
                    $importPassword.val('');
                    break;
            }
        },
        createResume: function(resumeTitle) {
            request({
                type: 'GET',
                url: '/person/resume/add.ujson?resumeName=' + encodeURIComponent(resumeTitle),
                data: {t: Math.random()},
                error: function() {
                    alert('新建简历出错，请刷新重试！');
                },
                success: function(resp) {
                    var data = util.toJSON(resp);
                    if (data.success) {
                        alert(resp.msg || '新建简历成功！');
                        sessionStorage['resumeName'] = resumeTitle;
                        window.location.href = '/touch/person/resume/getSubResume.uhtml?m.resumeId=' + data.resumeId;
                    } else {
                        alert(resp.msg || '新建简历失败！');
                        return false;
                    }
                }
            });
        },
        importResume: function(importFrom, username, password) {
            var self = this;
            request({
                type: 'POST',
                url: '/touch/person/resume/importResumeAjax.uhtml',
                data: {
                    'm.resumeRes': importFrom,
                    'm.userName': username,
                    'm.password': password,
                    't': Math.random()
                },
                error: function() {
                    alert('导入简历出错，请刷新重试！');
                    return false;
                },
                success: function(resp) {
                    var resp = JSON.parse(resp.replace(/(:"\d{4}-)(\d{1}")/g, '$10$2'));
                    if (resp.success) {
                        delete resp.resume['base'];
                        // 请求后台导入简历数据
                        sendImportData(resp);
                    } else {
                        self.showImportResult(resp.success);
                    }
                }
            });

            function sendImportData(data) {
                var resumeData = {};  // 构造卓博网简历数据格式
                $.each(data.resume, function(key, item) {
                    resumeData[key] = JSON.stringify(item);
                });

                switch(data.resumeRes) {
                    case 1:
                        resumeData['name'] = '前程无忧简历';
                        break;
                    case 4:
                        resumeData['name'] = '中国人才热线简历';
                        break;
                    case 5:
                        resumeData['name'] = '智通人才网简历';
                }

                // 请求后台导入简历数据
                request({
                    type: 'POST',
                    url: '/person/resume/import.ujson',
                    dataType: 'json',
                    data: resumeData,
                    timeout: 30000,
                    error: function() {
                        self.showImportResult(false);
                    },
                    success: function(resp) {
                        if (resp.success) {
                            var resumeId;
                            if (resp.resumeId) resumeId = resp.resumeId;
                            var resumeLink = '/touch/person/resume/resumePreview2.jsp';
                            self.showImportResult(resp.success);
                            request({
                                url: '/touch/person/resume/list_action.ujson',
                                success: function(json) {
                                    var arr = JSON.parse(json);
                                    for (var i = 0, l = arr.length; i < l; i++) {
                                        var rId = arr[i]['resumeId'];
                                        if (rId === resumeId) {
                                            subresumeId = arr[i]['subResumes'][0]['perResumeId'] || '';
                                            cnResumeId = arr[i]['subResumes'][0]['perResumeId'] || '';
                                            enResumeId = arr[i]['subResumes'][1] ? $(arr[i]['subResumes'])[1]['perResumeId'] : '';

                                            resumeLink += '?langType=0&resumeId=' + arr[i]['resumeId'] + '&subResumeId=' + subresumeId + '&cnResumeId=' + cnResumeId + '&enResumeId=' + enResumeId;
                                            $('#resume-view-link').attr('href', resumeLink);
                                        }
                                    }
                                }
                            });
                        } else {
                            alert(resp.msg || '导入失败！');
                            self.showImportResult(resp.success);
                        }
                    }
                });
            }
        },
        showImportResult: function(isSuccess) {
            var self = this;
            var $rImport = $('.resume-import');
            if (isSuccess) {  // 导入成功
                $rImport.addClass('hide').siblings('.import-success').removeClass('hide');
            } else {  // 导入失败
                $rImport.addClass('hide').siblings('.import-failed').removeClass('hide');
                // 点击重新导入
                $('#reImport').off('singleTap').on('singleTap', function(event) {
                    self.resetPanel('import');
                    $rImport.removeClass('hide').siblings().addClass('hide');
                });
            }
        }
    };

    module.exports = {
        init: function() {
            person.updateInfo();
            resumeCreation.init();
        }
    };
});
