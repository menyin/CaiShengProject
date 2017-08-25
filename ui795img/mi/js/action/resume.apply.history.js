/**
 * 应聘管理中的外发简历记录
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");
	var juicer = require("juicer")
	,mBox = require("ui.mBox")
	var cache = {}
	//内部类
	var inner = {
		managerOption : {
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
            		url: '/api/web/job.api',
            		data: {
						'act': 'join_multiple_del',
            			'apply_ids': idsArr.join(','),
            		},
					type: 'POST',
					dataType:"json",
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
							alert(data.error || '删除失败，请稍后再试！');
							ui.loading.hide({id:'update_loading'});
							ui.mask.hide({id:'update_mask'});
						}
            		}
            	});
            }
		},
		initGoback : function(){
			$("#goback").click(function(){
				//window.location.href = "/touch/person/applyManage.uhtml";
				window.history.go(-1);//首页有入口，返回首页
			});
		},
		initDelFlag : function(){
			var delFlag = sessionStorage["pos_apphis_del"];
			if(delFlag == '1'){
				$(".list_style2",false).addClass("manage");

			}else{
				$(".list_style2",false).removeClass("manage");
			}
		},
		dropdownInit: function(){
			$("#select_dropdown").click(function(){
				$("#dropdown").toggle();
				inner.switchSelect();
			});
		},
		switchSelect: function(){
			if($("#dropdown_icon").hasClass("active")){
				$("#dropdown_icon").removeClass("active");
			}else{
				$("#dropdown_icon").addClass("active");
			}
		},
		renderTable: function(json){
			var html = [];
			if(json.applyHisList.length > 0){
				var pager = [];
				html.push("<ul id='applyHis_list' class='list_style2 bm-list'>");
				for(var i=0; i<json.applyHisList.length; i++){
					var bean = json.applyHisList[i];
					html.push("<li>");
					html.push("<a class='list_item' data-id='"+bean.refId+"' ");
					if(bean.posState == 0) {
						html.push("href='/touch/position/posInfo.uhtml?m.posId="+bean.posId+"'");
					}
					html.push(">");
					html.push("<dl>");
					html.push("<dt>"+bean.posName+"</dt>");
					html.push("<dd class='com_name'>"+bean.comName+"</dd>");
					html.push("<dd class='pos_state'>");
					if(bean.posState == 0) {
						html.push("<div class='startJob'>在招</div>");
					} else {
						html.push("<div class='stopJob'>停招</div>");
					}
					html.push("</dd>");
					html.push("<dd>应聘时间："+bean.appliedDate+"</dd>");
					html.push("<dd>应聘简历："+json.resumeNameMap[bean.perResumeId]+"</dd>");
					html.push("<dd class='icon_checkbox'></dd>");
					html.push("</dl>");
					html.push("</a>");
					html.push("</li>");
				}
				html.push("</ul>");
				pager.push("<div class='previous_next'>");
				if(json.pageNo <= 1) {
					pager.push("<a href='javascript:void(0);' class='previous first'>上一页</a>");
				} else {
					pager.push("<a href='javascript:gotoPage("+(json.pageNo-1)+");' class='previous'>上一页</a>");
				}
				pager.push("<span>|</span>");
				if(json.pageNo < json.pageCnt) {
					pager.push("<a href='javascript:gotoPage("+(json.pageNo+1)+");' class='next'>下一页</a>");
				} else {
					pager.push("<a href='javascript:void(0);' class='next last'>下一页</a>");
				}
				pager.push("</div>");
				pager.push("<div class='jump selectOption'>");
				pager.push("<div>"+json.pageNo+"/"+json.pageCnt+"</div>");
				pager.push("<select id='gotoPage' onchange='gotoPage(this.value)' class='gotoPage' pageNo='"+json.pageNo+"' pageCount='"+json.pageCnt+"'>");
				for(var i=1; i<=json.pageCnt; i++){
					pager.push('<option value="'+i+'" '+ ( json.pageNo == i ? "selected":"")+'>第'+i+'页</option>');
				}
				pager.push("</select>");
				pager.push("</div>");
				$("#record").html("(<em>"+json.ttlCnt+"</em>)");
				$("#pagenav_wrapper").html(pager.join(""));
				$("#pagenav_wrapper").show();
			}else{
				html.push("<div class='error_date'>");
				html.push("<div class='error_img'>!</div>");
				html.push("<div class='error_msg'>很抱歉，应聘历史为空。</div>");
				html.push("</div>");
				$("#pagenav_wrapper").hide();
			}
			$("#apply_list").html(html.join(""));
		},
		managerInit: function(){
			$("a.btn_manage",false).click(function(){
				if(/管理/.test($(this).html()))
					$(this).html("取消")
				else
					$(this).html("管理")
				var delFlag = sessionStorage["pos_apphis_del"];
				if(delFlag == '1'){
					$(".list_style2",false).removeClass("manage");
					sessionStorage["pos_apphis_del"] = 0;
				}else{
					$(".list_style2",false).addClass("manage");
					sessionStorage["pos_apphis_del"] = 1;
				}
			});
		},
		delInit: function(){
			$(".icon_delete", false).each(function(){
				$(this).click(function(){
					var refId = $(this).attr("id");
					if(util.isEmpty(refId)) {
						alert("参数错误，请刷新后重试！")
						document.location.reload();
						return;
					}
					var $msg = "<p>确定删除该记录吗?</p>"
						$msg += '<div class="btn"><button class="box-ok">确定</button><button class="box-cancel">取消</button></div>'
					var delBox = new mBox($msg,{
							title:"确定删除"
							,width:250
							,className:"confirm"
							,oncancel : function(){ delBox.close()}
							,onok : function(){
								var options = {
										url:"/touch/person/applyManage/applyHisDel_action.ujson",
										data:{"m.refId":refId}
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
											ui.loading.hide({id:'update_loading'});
											ui.mask.hide({id:'update_mask'});
											var json = util.toJSON(data).head;
											if(json.code == 0){
												window.location.reload();
											}else{
												alert(json.msg || "删除失败，请稍后再试！")
											}
										}
									}
									inner.submit(options);
							}
						})
						delBox.open()

				});
			});
		},
		query: function(){
			$('#list_resume').unbind().bind('change', function(){
				var refId = $(this).val();
				if(util.isEmpty(refId)) {
					refId = 0;
				}
				else if(refId === "-1"){//全部简历
					refId='';
				}
				var options = {
					url:"/touch/person/applyManage/applyHisList_json.ujson",
					data:{"m.perResumeIds":refId},
					success : function(data, status, xhr){
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
						var json = util.toJSON(data);
						if(json.head.code == 0){
							inner.renderTable(json.body);
							//$("#dropdown").toggle();
							inner.switchSelect();
							inner.delInit();
							//处理管理的缓存
							person.batchManage(inner.managerOption);
						}else{
							alert("查询出现未知异常，请稍后重试！");
						}
					}
				}
				$("#hid_resumeIds").val(refId);
				inner.submit(options);
			});
//			$("#dropdown ul li a").each(function(){
//				$(this).click(function(){
//					var refId = $(this).attr("id");
//					if(util.isEmpty(refId)) {
//						alert("参数错误，请刷新后重试！")
//					}
//					var options = {
//						url:"/touch/person/applyManage/applyHisList_json.ujson",
//						data:{"m.perResumeIds":refId},
//						success : function(data, status, xhr){
//							ui.loading.hide({id:'login_loading'});
//							ui.mask.hide({id:'login_mask'});
//							var json = util.toJSON(data);
//							if(json.head.code == 0){
//								inner.renderTable(json.body);
//								$("#dropdown").toggle();
//								inner.switchSelect();
//								inner.delInit();
//							}else{
//								alert("查询出现未知异常，请稍后重试！");
//							}
//						}
//					}
//					$("#hid_resumeIds").val(refId);
//					inner.submit(options);
//				});
//			});
		},
		submit: function(options){
			var config = {
				type : "POST",
				beforeSend : function(){
					ui.mask.show({id:'login_mask',z:10});
					ui.loading.show({id:'login_loading',z:12});
				},
				error : function(){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					alert('操作失败，请重新再试！');
				}
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
			inner.dropdownInit();
			// inner.managerInit();
			// inner.delInit();
			inner.query();
			person.batchManage(inner.managerOption);
		}
	}
	module.exports = out;
});
