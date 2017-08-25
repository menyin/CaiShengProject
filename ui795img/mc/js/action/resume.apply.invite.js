/**
 * 应聘管理中的外发简历记录
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person")
		,mBox = require("ui.mBox")

	var cache = {}

	//内部类
	var inner = {
		initDelFlag : function(){
			var delFlag = sessionStorage["per_invhis_del"];
			if(delFlag == '1'){
				$(".list_style2",false).addClass("manage");
			}else{
				$(".list_style2",false).removeClass("manage");
			}
		},
		initGoback: function(){
			$("#goback").click(function(){
				//window.location.href = "/touch/person/applyManage.uhtml";
				window.history.go(-1);//首页有入口，返回首页
			});
		},
		managerInit: function(){
			$("a.btn_manage",false).click(function(){
				if(/管理/.test($(this).html()))
					$(this).html("取消")
				else
					$(this).html("管理")
				var delFlag = sessionStorage["per_invhis_del"];
				if(delFlag == '1'){
					$(".list_style2",false).removeClass("manage");
					sessionStorage["per_invhis_del"] = 0;
				}else{
					$(".list_style2",false).addClass("manage");
					sessionStorage["per_invhis_del"] = 1;
				}
			});
		},
		switchRecordinit: function(){
			$("li[name='posInfo']", false).each(function(){
				$(this).click(function(){
					$(this).find("ul li").toggle();
				});
			});
		},
		renderTable: function(json){
			var html = [];
			var len = json.invitedRecordList.length;
			if(len > 0){
				var pager = [];
				$("#record").html("(<em>"+json.ttlCnt+"</em>)")
				html.push("<ul class='list_style2'>");
				for(var i=0; i<len; i++){
					var bean = json.invitedRecordList[i];
					html.push("<li>");
					html.push("<a href='/touch/position/posInfo.uhtml?m.posId="+bean.posId+"'>");
					html.push("<dl>");
					html.push("<dt>"+bean.posName+"</dt>");
					html.push("<dd>"+bean.comName+"</dd>");
					//html.push("<dd>");
					//if(bean.comFlag == 1){
					//	html.push("简历已被收藏");
					//}else if(bean.comFlag == 4){
					//	html.push("简历被拒绝");
					//}
					//html.push("</dd>");
					html.push("<dd>&nbsp;</dd>");
					html.push("<dd>"+bean.resumeName+"</dd>");
					html.push("<dd>"+bean.comTime+"</dd>");
					html.push("</dl>");
					html.push("</a>");
					html.push("<a class='icon_delete' id='"+bean.refId+"'></dd>");
					html.push("</li>");
				}
				html.push("</ul>");
				pager.push("<div class='previous_next'>");
				if(json.pageNo > 1){
					pager.push("<a href='javascript:gotoPage("+(json.pageNo-1)+");' class='previous'>上一页</a>");
				}
				if((json.pageNo > 1) && (json.pageNo < json.pageCnt)){
					pager.push("<span>|</span>");
				}
				if(json.pageNo < json.pageCnt){
					pager.push("<a href='javascript:gotoPage("+(json.pageNo+1)+");' class='next'>下一页</a>");
				}
				pager.push("</div>");
				pager.push("<div class='jump selectOption')>");
				pager.push("<select onchange='gotoPage(this.value)'>")
				var select_page = $("#select_page").val() || 1;
				for(var i=1; i<=json.pageCnt; i++){
					if(i == select_page){
						pager.push("<option value='"+i+"' selected>"+i+"/"+json.pageCnt+"</option>");
					}else{
						pager.push("<option value='"+i+"'>"+i+"/"+json.pageCnt+"</option>");
					}
				}
				pager.push("</select>")
				pager.push("</div>");
				$("#pagenav_wrapper").html(pager.join(""));
				$("#pagenav_wrapper").show();
				$("#inviteMeHis_body").html(html.join(""));
			}else{
				$("#record").html("")
				$("#inviteMeHis_body").html("<div class='error_date'><div class='error_img'>!</div><div class='error_msg'>很抱歉，邀请面试记录为空。</div></div>");
				$("#pagenav_wrapper").hide();
			}
		},
		delInit: function(){
			$(".icon_delete", false).each(function(){
				$(this).click(function(){
					var refid = $(this).attr("id");
					if(util.isEmpty(refid)){
						refid = 0;
					}else{
						var $msg = "<p>确定删除该记录吗?</p>"
							$msg += '<div class="btn"><button class="box-ok">确定</button><button class="box-cancel">取消</button></div>'
						var delBox = new mBox($msg,{
								title:"确定删除"
								,width:250
								,className:"confirm"
								,oncancel : function(){ delBox.close()}
								,onok : function(){
									$.ajax({
										url:"/touch/person/applyManage/whoInviteMeHisDel_action.ujson?t="+(+new Date())
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
		queryInit: function(){
			$("#dropdown_select").click(function(){
				$("#dropdown").toggle();
				inner.switchSelect();
			});
			$("#dropdown ul li a").each(function(){
				$(this).click(function(){
					var refId = $(this).attr("id");
					if(util.isEmpty(refId)){
						refId = 0;
					}
					var options = {
						url:"/touch/person/applyManage/whoInviteMeHisList_json.ujson",
						data:{"m.perResumeIds":refId},
						success : function(data, status, xhr){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							var json = util.toJSON(data);
							if(json.head.code == 0){
								inner.renderTable(json.body);
								$("#hid_resIds").val(refId);
								inner.delInit();
								//inner.switchRecordinit();
							}else{
								alert("查询出现未知异常，请稍后重试！");
							}
						}
					}
					$("#dropdown").toggle();
					inner.switchSelect();
					inner.submit(options);
				});
			});
		},
		switchSelect: function(){
			if($("#dropdown_icon").hasClass("active")){
				$("#dropdown_icon").removeClass("active");
			}else{
				$("#dropdown_icon").addClass("active");
			}
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
			// inner.managerInit();
			// inner.delInit();
			inner.queryInit();
			//inner.switchRecordinit();
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
							'act': 'invite_del',
	            			'inviteid': idsArr.join(','),
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
								ui.loading.hide({id:'update_loading'});
								ui.mask.hide({id:'update_mask'});
								alert(json.msg || '删除失败，请稍后再试！');
							}
	            		}
	            	});
	            }
			});
		}
	}
	module.exports = out;
});
