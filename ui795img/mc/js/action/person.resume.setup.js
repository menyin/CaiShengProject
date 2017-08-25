/**
 * 简历公开设置
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");

	var cache = {}

	//内部类
	var inner = {
		selectClick : function(){
			$("#resume_select").change(function(){
				var refId = $(this).val();
				window.location.href='';
			});
		},
		goBack : function(){
			if ( document.referrer.match(/getBlackList\.html/) ) {
				var history = '/person';
			} else if ( document.referrer.match(/resumeManage\.html|securitySetup\.html/) ) {
				// 页面来源
				// 1. 从简历管理页面跳转到简历公开设置页面
				// 2. 在简历公开设置页面切换简历
				var history = '/person/resumeManage.html';
			}
			$('#goBack').click(function() {
				location.href = history + '?t=' + (+new Date());
				//window.history.go(-1);//首页有入口，返回首页
			});
		},
		saveClick : function(){
			$(".btn1_submit,.btn_save").click(function(){
				var subId = $("#subResumeId").length > 0?$("#subResumeId").val():"",
					//id=$("#resumeId").val(),
					//flag=$("#resume_en_01:checked").length == 0?"1":"0",//中英文简历设置
					resumeStatus=$("input[name='status']:checked").val();//资料公开设置
					//relationFlag=$("input[name='flag']:checked").val();//电话显示设置
				$.ajax({
					url:"/api/web/resumes.api",
					type:"POST",
					dataType:"json",
					data:{
						'act': 'privacy',
						'display': resumeStatus,
					},
					beforeSend : function(){
						ui.mask.show({id:'login_mask',z:10});
						ui.loading.show({id:'login_loading',z:12});
					},
					error : function(){
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
						alert('操作失败，请重新再试！');
					},
					success : function(data){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							if(data.status == 1){
								alert("修改成功！");
							}else{
								alert("修改失败，请稍后再试！");
							}
						}
				});
			});
		},
		submit : function(options){
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
			inner.selectClick();
			inner.saveClick();
			inner.goBack()
		}
	}
	module.exports = out;
});