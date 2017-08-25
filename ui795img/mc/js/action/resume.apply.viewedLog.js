/**
 * 应聘管理中的外发简历记录
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");
	var juicer = require("juicer");
	
	var cache = {}
	
	//内部类
	var inner = {
		initGoback: function(){
			$("#goback").click(function(){
				//window.location.href = "/touch/person/applyManage.uhtml";
				window.history.go(-1);//首页有入口，返回首页
			});	
		},
		dropdownInit: function(){
			$("#dropdown_select").click(function(){
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
			var html = [], resumesLen = json.resumeViewedList.length;
			if(resumesLen > 0){
				$("#record").html("(<em>"+json.ttlCnt+"</em>)");	
			}else{
				$("#record").html("");
			}
			if(resumesLen > 0){
				var pager = [];
				html.push("<ul class='list_style2'>");
				var tmp = util.template($('#viewedLogTemplate').html());
				html.push( tmp({resumeViewedList:json.resumeViewedList}) );
//				for(var i=0; i<resumesLen; i++){
//					var bean = json.resumeViewedList[i];
//					html.push("<li>");
//					html.push("<a href='/touch/position/companyInfo.xhtml?m.comId="+bean.comId+"'>");
//					html.push("<dl>");
//					html.push("<dt>"+bean.comName+"</dt>");
//					html.push("<dd>"+bean.resumeName+"</dd>");
//					html.push("<dd>&nbsp;</dd>");
//					if(bean.state == 1){
//						html.push("<dd class='green'>已查看联系方式</dd>")
//						html.push("<dd>"+bean.viewedDate+"</dd>");
//					}else{
//						html.push("<dd class='gray'>未查看联系方式</dd>")
//					}
//					html.push("</dl>");
//					html.push("</a>");
//					html.push("</li>");
//				}
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
				$("#viewed_pager").html(pager.join(""));
				$("#viewed_pager").show();
			}else{
				html.push("<div class='error_date'><div class='error_img'>!</div><div class='error_msg'>很抱歉，简历被查看历史为空。</div></div>");
				$("#viewed_pager").hide();
			}
			$("#viewed_body").html(html.join(""));
		},
		queryResumeInit: function(){
			$('#list_resume').unbind().bind('change', function(){
				var referenceId = $(this).val();
				if(util.isEmpty(referenceId)){
					referenceId = 0;
				}else if(referenceId === "-1"){
					referenceId = '';
				}
				var options = {
					url:"/touch/person/applyManage/resumeViewedLogList_json.ujson",
					data:{"m.perResumeIds":referenceId},
					success : function(data, status, xhr){
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
						var json = util.toJSON(data);
						if(json.head.code == 0){
							//$("#dropdown").hide();
							inner.renderTable(json.body);
							$("#hid_resIds").val(referenceId);
						}else{
							alert("查询出现未知异常，请稍后重试！");	
						}
					}
				}
				inner.submit(options);
			});
//			$("#dropdown ul li a").each(function(){
//				$(this).click(function(){
//					var referenceId = $(this).attr("id");
//					if(util.isEmpty(referenceId)){
//						referenceId = 0;
//					}
//					var options = {
//						url:"/touch/person/applyManage/resumeViewedLogList_json.ujson",
//						data:{"m.perResumeIds":referenceId},
//						success : function(data, status, xhr){
//							ui.loading.hide({id:'login_loading'});
//							ui.mask.hide({id:'login_mask'});
//							var json = util.toJSON(data);
//							if(json.head.code == 0){
//								$("#dropdown").hide();
//								inner.renderTable(json.body);
//								$("#hid_resIds").val(referenceId);
//							}else{
//								alert("查询出现未知异常，请稍后重试！");	
//							}
//						}
//					}
//					inner.submit(options);
//				});
//			});
		},
		submit : function(options){
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
		init: function(){
			person.updateInfo();
			person.showPageSelect();
			inner.initGoback();
			inner.dropdownInit();
			inner.queryResumeInit();
		}
	}
	module.exports = out;
});