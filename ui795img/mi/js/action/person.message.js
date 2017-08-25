define(function(require, exports, module) {
    var $ = require('$');
    var util = require('util');
    var ui = require('ui.base');
    var person = require('action.person');

    var Message = {
        status: 'view',
        title: '我的消息',
        delCounts: 0,
        totalCounts: 0,
        controls: {
            msgPane: $('#message-pane'),
            btnManage: $('.btn_action_view'),
            delCounts: $('#del-counts'),
            mTitle: $('#mTitle')
        },
        initManage: function() {
            var msg = this;
            this.title = this.controls.mTitle.text();
            this.totalCounts = this.controls.msgPane.find('ul').children().length;

            // 管理简历消息
            msg.controls.btnManage.on('click', '.btn', function(event) {
                var $ele = $(this);
                var action = $ele.attr('data-action');

                // msg.controls.mTitle.addClass('moveout');

                if (action === 'select') {
                    msg.selectMessage( msg.controls.msgPane.find('.list_item') );
                    toggleSelectButton($ele);
                } else if (action === 'unselect') {
                    msg.unSelectMessage( msg.controls.msgPane.find('.list_item') );
                    toggleSelectButton($ele);
                } else {
                    if ( msg.updateStatusTo(action) ) {
                        // 更新管理界面
                        msg.updateManageView();
                    }
                }

                function toggleSelectButton(ele) {
                    var nowAction = ele.attr('data-action');
                    if ( nowAction === 'select' ) {
                        ele.attr('data-action', 'unselect').text('全不选');
                    }
                    if ( nowAction === 'unselect' ) {
                        ele.attr('data-action', 'select').text('全选');
                    }
                }
            });

            // 选择消息
            msg.controls.msgPane.on('click', '.list_item', function(event) {
                if (msg.status === 'view') {
                    return true;
                }
                if (msg.status === 'edit') {
                    var $ele = $(this);
                    if ( $ele.hasClass('checked') ) {
                        msg.unSelectMessage($ele);
                    } else {
                        msg.selectMessage($ele);
                    }
                    return false;
                }
            });

            // 删除消息
            msg.controls.delCounts.on('click', function(event) {
                event.stopPropagation();
                var ids = [];
                msg.controls.msgPane.find('.list_item.checked').each(function() {
                    ids.push( $(this).attr('id') );
                });

                if (ids.length <= 0) {
                    alert('请选择要删除的消息！');
                    return false;
                }
                msg.deleteMessage(ids);
            });
        },
        initReply: function(obj) {
            var msg = this;

            // 删除此消息
            $('#msg_del').on('click', function() {
                msg.deleteMessage( $(this).attr('data-msgid') );
            });

            // 回复消息
            $('#msg_reply').on('click', function(event) {
                $('#section_body').html( $('#reply_body').html() );
                $(this).hide().siblings('#msg_del').hide().siblings('#msg_send').show();
            });

            // 发送消息
            $('#msg_send').on('click', function(event) {
                var replyContent = $('#chLetter1').val();
                if ( util.isEmpty(replyContent) ) {
                    alert('回复内容不能为空！');
                    return false;
                }

                obj.content = replyContent;
                msg.reply(obj);
            });

            // 选择同时发送电子邮件
            $('#section_body').on('click', '#sendMailFlag', function(event) {
                event.stopPropagation();
                $(this).find('.icon_checkbox').toggleClass('checked');
            });
        },
        updateStatusTo: function(actionStatus) {
            if (actionStatus && typeof actionStatus === 'string') {
                this.status = actionStatus;
                return this.status;
            } else {
                return false;
            }
        },
        updateManageView: function() {
            var self = this;
            var $btn = this.controls.btnManage;
            var $listPane = this.controls.msgPane;
            var $delCounts = this.controls.delCounts;

            switch(this.status) {
                case 'view':
                    $btn.addClass('btn_action_view').removeClass('btn_action_edit');
                    $('#btn-back').show();
                    $('#btn-cancel').addClass('hide');
                    self.controls.mTitle.text(self.title);
                    $delCounts.addClass('disabled');
                    $btn.find('.btn_select_all').attr('data-action', 'select').text('全选');  // 恢复原来的全选状态
                    // self.controls.mTitle.removeClass('moveout');
                    $listPane.find('.sendDate').removeClass('moveout');
                    $listPane.find('ul').removeClass('list_edit').find('.list_item.checked').removeClass('checked');
                    $delCounts.addClass('hide').find('span').text('0');
                    self.delCounts = 0;
                    break;
                case 'edit':
                    $btn.addClass('btn_action_edit').removeClass('btn_action_view');
                    $('#btn-back').hide();
                    $('#btn-cancel').removeClass('hide');
                    self.controls.mTitle.text('消息管理');
                    $listPane.find('.sendDate').addClass('moveout');
                    $listPane.find('ul').addClass('list_edit');
                    $delCounts.removeClass('hide');
                    break;
                default:
                    break;
            }
        },
        selectMessage: function(obj) {
            obj.addClass('checked');
            var len = obj.length;
            if (len > 1) {
                this.delCounts = this.totalCounts;
            } else if (len === 1) {
                if (this.delCounts < this.totalCounts) this.delCounts += 1;
            }
            this.controls.delCounts.removeClass('disabled').find('span').text(this.delCounts);
        },
        unSelectMessage: function(obj) {
            obj.removeClass('checked');
            var len = obj.length;
            if (len > 1) {
                this.delCounts = 0;
            } else if (len === 1) {
                if (this.delCounts > 0) this.delCounts -= obj.length;
            }

            if (this.delCounts === 0) {
                this.controls.delCounts.addClass('disabled').find('span').text(this.delCounts);
            } else {
                this.controls.delCounts.find('span').text(this.delCounts);
            }
        },
        deleteMessage: function(ids) {
            if (typeof ids === 'string') ids = [ids];

            $.ajax({
                type: 'POST',
                url: '/touch/person/message/delete.ujson',
                data: {
                    'm.refIds': ids.join(',')
                },
                beforeSend: function() {
                    ui.mask.show({id:'msg_del_mask', z:10});
                    ui.loading.show({id:'msg_del_loading', z:12});
                },
                complete: function() {
                    ui.loading.hide({id:'msg_del_loading'});
                    ui.mask.hide({id:'msg_del_mask'});
                },
                success: function(res) {
                    var json = util.toJSON(res);
                    if (json.head.code == 0) {
                        alert(json.head.msg || '删除成功！');
                        setTimeout(function() {
                            window.location = '/touch/person/message/list.uhtml';
                        }, 1000);
                    } else {
                        alert(json.head.msg || '删除消息出现异常，请稍后再试！');
                    }
                }
            });
        },
        reply: function(data) {
            var param = {
                'm.initReplyId': data.initReplyId,
                'm.currReplyId': data.refId,
                'm.fromType': data.toType,
                'm.toType': data.fromType,
                'm.fromUserId': data.toUserId,
                'm.toUserId': data.fromUserId,
                'm.fromUserName': data.toUserName,
                'm.toUserName': data.fromUserName,
                'm.fromUserEmail': data.toUserEmail,
                'm.toUserEmail': data.fromUserEmail,
                'm.subject': data.subject,
                'm.memo': data.refId,
                'm.content': data.content,
                'm.sendMailFlag': $('#sendMailFlag').find('.icon_checkbox').hasClass('checked') ? 1 : 0
            };

            $.ajax({
                type: 'POST',
                url: '/touch/person/message/reply.ujson',
                data: param,
                beforeSend: function() {
                    ui.mask.show({id:'msg_del_mask', z:10});
                    ui.loading.show({id:'msg_del_loading', z:12});
                },
                complete: function() {
                    ui.loading.hide({id:'msg_del_loading'});
                    ui.mask.hide({id:'msg_del_mask'});
                },
                success: function(res) {
                    var result = util.toJSON(res);
                    if (result.head.code == 0) {
                        alert(result.head.msg || '消息回复成功！');
                        window.location.reload();
                    } else {
                        alert(result.head.msg || '消息回复失败！请稍后再试！');
                    }
                }
            });
        },
        goBack: function() {
            $('#back').on('click', function(event) {
            	//window.history.go(-1);//首页有入口，返回首页
            	window.location.href = '/person';
                var href = window.location.href;
                if( href.indexOf("/message/list.html") < 0 ) {
                    window.location.href = '/person/message/list.html';
                } else {
                    window.location.href = '/';
                }
            });
            $('#detailBack').click(function(){
                window.location.href = '/person/message/list.html';
            	window.history.go(-1);
            });
        }
    };

    module.exports = {
        initManage: function() {
            person.updateInfo();
            person.showPageSelect();
            Message.initManage();
            Message.goBack();
        },
        initReply: function(obj) {
            person.updateInfo();
            person.showPageSelect();
            Message.initReply(obj);
            Message.goBack();
        }
    };
});
