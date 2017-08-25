/**
 * 应聘管理中的外发简历记录
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");
	var mBox = require("ui.mBox");

	var cache = {}

	//内部类
	var inner = {
		initGoback : function(){
			$("#goback").click(function(){
				// window.location.href = "/touch/person/applyManage.uhtml";
				//window.location.href = '/touch/person/userCenter.uhtml';
				window.history.go(-1);//首页有入口，返回首页
			});
		},
		initDelFlag : function(){
			var delFlag = sessionStorage["pos_fav_del"];
			if(delFlag == '1'){
				$(".list_style2").addClass("manage");
			}else{
				$(".list_style2").removeClass("manage");
			}
		},
		managerClick : function(){
			$("a.btn_manage").click(function(){
				if(/管理/.test($(this).html()))
					$(this).html("取消")
				else
					$(this).html("管理")
				var delFlag = sessionStorage["pos_fav_del"];
				if(delFlag == '1'){
					$(".list_style2").removeClass("manage");
					sessionStorage["pos_fav_del"] = 0;
				}else{
					$(".list_style2").addClass("manage");
					sessionStorage["pos_fav_del"] = 1;
				}
			});
		},
		//切换职位的详细信息和简要信息
		switchPosDetail : function(){
			$("li[name='posInfo']").each(function(){
				var _t = $(this);
				_t.click(function(){
					_t.find("ul").toggle();
				});
			});
		},
		delClick : function(){
			$(".icon_delete").each(function(){
				$(this).click(function(){
					var id = $(this).attr("id");
					if(id.length == 0){
						alert("参数错误，请刷新后重试！");
						return;
					}else{
						var $msg = "<p>确定删除该职位吗?</p>"
							$msg += '<div class="btn"><button class="box-ok">确定</button><button class="box-cancel">取消</button></div>'
						var delBox = new mBox($msg,{
								title:"确定删除"
								,width:250
								,className:"confirm"
								,oncancel : function(){ delBox.close()}
								,onok : function(){
									$.ajax({
										url:"/touch/person/applyManage/myFavDel_action.ujson?t="+(+new Date())
										,type : "GET"
										,data:{"m.refId":id}
										,beforeSend : function(){
											ui.loading.show({id:'update_loading',z:33});
											ui.mask.show({id:'update_mask'});
										}
										,error : function(){
											ui.loading.hide({id:'update_loading'});
											ui.mask.hide({id:'update_mask'});
										}
										,success : function(data, status, xhr){
											delBox.close()
											ui.loading.show({id:'update_loading'});
											ui.mask.show({id:'update_mask'});
											var json = util.toJSON(data).head;
											if(json.code == 0){
												window.location.reload();
											}else{
												alert(json.msg || "删除失败，请稍后再试！")
											}
										}
									})
								}
							})
							delBox.open()
					}
				});
			});
		},
		submit: function(options){
			var config = {
				url:"",
				type : "POST",
				beforeSend : function(){
					ui.mask.show({id:'login_mask',z:10});
					ui.loading.show({id:'login_loading',z:12});
				},
				error : function(){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					alert('操作失败，请重新再试！');
				},
			};
			config = $.extend(config, options, {});
			$.ajax(config);
		}
	}
	//对外公开的方法
	var out = {
		//应聘历史记录
		init : function(){
			person.updateInfo();
			person.showPageSelect();
			inner.initGoback();
			// inner.initDelFlag();
			// inner.managerClick();
			// inner.delClick();
			person.batchManage({
				container: '.bm-panel',
	            manage: '.bm-manage',
	            cancel: '.bm-cancel',
	            listPanel: '.bm-list',
	            gobackBtn: '.bm-goback',
	            deleteBtn: '.bm-btn-delete',
	            msgFeedback: '.bm-msg-feedback',
	            selectRevrAll: '.bm-select-revrAll',
	            selectAll: '.bm-select-all',
	            delCallback: function(idsArr) {
	            	$.ajax({
	            		url: '/api/web/person.api',
						type: 'POST',
						dataType: 'json',
	            		data: {
							'act': 'favourite_multiple_del',
	            			'jid': idsArr.join(','),
	            			'_t': Math.random()
	            		},
	            		beforeSend: function() {
							
	            			ui.loading.show({id:'update_loading',z:9999});
							ui.mask.show({id:'update_mask',z:8888});
	            		},
	            		error: function() {
	            			ui.loading.hide({id:'update_loading'});
							ui.mask.hide({id:'update_mask'});
	            		},
	            		success: function(data) {
							if(data.status == 1){
								window.location.reload();
							}else{
								alert(data.msg || '删除失败，请稍后再试！');
								ui.loading.hide({id:'update_loading'});
								ui.mask.hide({id:'update_mask'});
							}
	            		}
	            	});
	            }
			});
		}
	}
	module.exports = out;
});
