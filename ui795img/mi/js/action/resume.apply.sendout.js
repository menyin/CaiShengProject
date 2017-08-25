/**
 * 应聘管理中的外发简历记录
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person")
		,mBox = require("ui.mBox")
	var totalSendResumeTime = 0;

	var cache = {}

	//内部类
	var inner = {
		initDelFlag : function(){
			var delFlag = sessionStorage["per_sendout_del"];
			if(delFlag == '1'){
				$(".list_style2",false).addClass("manage");
			}else{
				$(".list_style2",false).removeClass("manage");
			}
		},
		initGoback: function(){
			$("#goback").click(function(){
				window.location.href = "/person/applyManage.php";
			});
		},
		managerInit : function(){
			$("a.btn_manage").click(function(){
				if(/管理/.test($(this).html()))
					$(this).html("取消")
				else
					$(this).html("管理")
				var delFlag = sessionStorage["per_sendout_del"];
				if(delFlag == '1'){
					$(".list_style2",false).removeClass("manage");
					sessionStorage["per_sendout_del"] = 0;
				}else{
					$(".list_style2",false).addClass("manage");
					sessionStorage["per_sendout_del"] = 1;
				}
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
			var resumeLen = json.sendResumeHisList.length
			if(resumeLen > 0){
				//html.push("<ul class='list_style2 bm-list'>");

				var tmp = util.template( $('#sendOutTemplate').html() );
				html.push(tmp({sendResumeHisList:json.sendResumeHisList}));
//				for(var i=0; i<resumeLen; i++){
//					var bean = json.sendResumeHisList[i];
//					html.push("<li>");
//					html.push("<a>");
//					html.push("<dl>");
//					html.push("<dt class=''>"+bean.posName+"");
//					if(bean.comName.length > 0){
//						html.push("("+bean.comName+")");
//					}
//					html.push("</dt>");
//					html.push("<dd>"+bean.recEmail+"</dd>");
//					html.push("<dd>&nbsp;</dd>");
//					html.push("<dd>"+bean.resumeName+"</dd>");
//					html.push("<dd>"+bean.sendDate+"</dd>");
//
//					html.push("</dl>");
//					html.push("</a>");
//					html.push("<a class='icon_delete' id='"+bean.refId+"'></a>");
//					html.push("</li>");
//				}
				//html.push("</ul>");
				var pager = [];
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
				$("#pagenav_wrapper").html(pager.join(""));
				$("#pagenav_wrapper").show();
				$("#record").html("(<em>"+json.ttlCnt+"</em>)");
				$("#sendoutList").html(html.join(""));
			}else{

				$("#record").html("");
			}
		},
		delInit : function(){
			$(".icon_delete", false).each(function(){
				$(this).click(function(){
					var refId = $(this).attr("id");
					if(refId.length == 0){
						alert("参数错误，请刷新后重试！");
						return;
					}else{
						var $msg = "<p>确定删除该记录吗?</p>"
							$msg += '<div class="btn"><button class="box-ok">确定</button><button class="box-cancel">取消</button></div>'
						var delBox = new mBox($msg,{
								title:"确定删除"
								,width:250
								,className:"confirm"
								,oncancel : function(){ delBox.close()}
								,onok : function(){
									var options = {
											url:"/touch/person/applyManage/sendResumeHisDel_action.ujson",
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
					}
				});
			});
		},
		
		queryInit : function(){
			$("#dropdown_select").click(function(){
				$("#dropdown").toggle();
				inner.switchSelect();
			});

			$('#list_resume').unbind().bind('change', function(){
					var id = $(this).val();
					if(util.isEmpty(id)){
						id = 0;
					}else if(id === "-1"){
						id = '';
					}
					var options = {
						url:"/touch/person/applyManage/sendResumeHisList_json.ujson",
						data:{"m.perResumeIds":id},
						success : function(data, status, xhr){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							var json = util.toJSON(data);
							if(json.head.code == 0){
								if(json.body.sendResumeHisList.length == 0){
									$("#sendoutList").html("<div class='error_date'><div class='error_img'>!</div><div class='error_msg'>很抱歉，外发简历记录为空。</div></div>");
									$("#pagenav_wrapper").hide();
								}else{
									inner.renderTable(json.body);
									$("#hid_resIds").val(id);									
									inner.delInit();							
									
								}
								//清除管理缓存
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
						            		url: '/touch/person/applyManage/sendResumeHisDel_action.ujson',
						            		data: {
						            			'm.refId': idsArr.join(','),
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
												ui.loading.show({id:'update_loading'});
												ui.mask.show({id:'update_mask'});
												var json = util.toJSON(data).head;
												if(json.code == 0){
													window.location.reload();
												}else{
													alert(json.msg || '删除失败，请稍后再试！');
												}
						            		}
						            	});
						            }
								});
							}else{
								alert("查询出现未知异常，请稍后重试！");
							}
							$("#dropdown").toggle();
							inner.switchSelect();
						}
					}
					inner.submit(options);					
			});
			$("#dropdown ul li a").each(function(){
				$(this).click(function(){
					var id = $(this).attr("id");
					if(util.isEmpty(id)){
						id = 0;
					}
					var options = {
						url:"/touch/person/applyManage/sendResumeHisList_json.ujson",
						data:{"m.perResumeIds":id},
						success : function(data, status, xhr){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							var json = util.toJSON(data);
							if(json.head.code == 0){
								if(json.body.sendResumeHisList.length == 0){
									$("#sendout_body").html("<div class='error_date'><div class='error_img'>!</div><div class='error_msg'>很抱歉，外发简历记录为空。</div></div>");
									$("#pagenav_wrapper").hide();
								}else{
									inner.renderTable(json.body);
									$("#hid_resIds").val(id);
									inner.delInit();
								}
							}else{
								alert("查询出现未知异常，请稍后重试！");
							}
							$("#dropdown").toggle();
							inner.switchSelect();
						}
					}
					inner.submit(options);
				});
			});
		},
		getRandomCode : function() {
			$("#randomCode").attr("src","/touch/person/info/getVerifyCode.xhtml?t="+ Math.random());
		},
		getRandomCodeClick : function() {
			$("#randomCode").click(function(){
				inner.getRandomCode();
			});
		},
		sendoutClick : function(){
			$('.email_format').click(function(){
				var tpl = util.template( $('#languageChoseBox').html() );
				var chosebox = new mBox(tpl(),{
					  title:"选择邮件格式"
	                 //,width:260
	                 //,class : "popBox hideCloseBtn" 
	                 //,position : "absolute"
	                 ,mask:true
	                 ,onopen : function(mBoxObj){	          
	                	var num = $('.email_format a').attr('value');     					
	                	mBoxObj.box.find('li').eq(num).find('input').prop('checked',true);//initiate 选择框的已选选项
	                	var close_tab = mBoxObj.box.find('.box-close');
	                	if(close_tab && !close_tab.hasClass('hide')) close_tab.addClass('hide');
	                 }
	                 ,onok : function(mBoxObj){
	                	var $show = $('.email_format a');
	                	var firstChecked = mBoxObj.box.find('input[name="resume"]').eq(0).prop('checked');					
	                	$show.text(firstChecked ? '简体中文' : '繁体中文');
	                	$show.attr('value',firstChecked ? '0' : '1');	
	                    chosebox.close();
	                 }
	                 ,oncancel : function(){
	                	 chosebox.close();
	                 }                 
					
				});
				chosebox.open();
				
			});
			$("#send_out_resume").click(function(){
				var obj = {};
				obj.email = $("#email").val();
				obj.posName = $("#posName").val();
				obj.comName = $("#comName").val();
				obj.demand = $("#demand").val();
				obj.mailCode = $('.email_format a').attr('value');//$("#mailCode").val();
				obj.resumeId = $("#list_resume").val();
				obj.randomCode = $("#validateCode").val();
				
				if(obj.resumeId === "请选择发送简历"){
					alert("请选择发送简历");
					return;
				}
				//email和职位名称要求验证
				if(util.isEmpty(obj.email)){
					alert("请输入邮件地址");
					return;
				}

				if(!util.isSafeMail(obj.email)){
					alert("请正确输入邮件地址");
					return;
				}

				if(util.isEmpty(obj.posName)){
					alert("请输入所应聘职位的名称");
					return;
				}

				if(totalSendResumeTime>2) {
					$("#showValidateCode").css("display","block");
					$("#randomCodeDl").css("display","block");
					if(util.isEmpty(obj.randomCode)){
						inner.getRandomCode();
						alert("请输入验证码");
						return;
					}
				}

				var options = {
					url:"/touch/person/resume/outSendResume.ujson",
					data:{"m.email":obj.email, "m.posName":obj.posName, "m.comName":obj.comName, "m.demand":obj.demand,"m.mailCodeType":obj.mailCode, "m.resumeId":obj.resumeId,"m.randomCode":obj.randomCode},
					success : function(data, status, xhr){
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
						if(totalSendResumeTime>2) {
							inner.getRandomCode();
						}
						var json =  util.toJSON(data);
						totalSendResumeTime = json.head.outSendTimes;
						if(json.head.code==0){
							alert("简历已经发送至您指定的邮箱");
							inner.getRandomCode();
						}else{
							if(json.head.msg=='验证码错误') {
								alert("验证码错误");
							} else {
								alert("外发简历失败，请稍后再试");
							}
							inner.getRandomCode();
						}
					}
				};
				inner.submit(options);
			});
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
			// inner.managerInit();
			// inner.initDelFlag();
			inner.initGoback();
			// inner.delInit();
			inner.queryInit();
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
	            		url: '/touch/person/applyManage/sendResumeHisDel_action.ujson',
	            		data: {
	            			'm.refId': idsArr.join(','),
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
							ui.loading.show({id:'update_loading'});
							ui.mask.show({id:'update_mask'});
							var json = util.toJSON(data).head;
							if(json.code == 0){
								window.location.reload();
							}else{
								alert(json.msg || '删除失败，请稍后再试！');
							}
	            		}
	            	});
	            }
			});
//			$('#list_resume').unbind().bind('change', function(){
//				var id = $(this).val();
//				var urlId = id==="-1"?"":("&m.perResumeIds=" + id);
//				var val = $(this).val();
//				
//				window.location.href = "/touch/person/applyManage/sendResumeHisList.uhtml?debug=qianduan&_t="+Math.random()+ urlId;
//				$(this).val(val);
//			})
		},
		//外发简历
		initSendOut : function(outSendResumeTimes){
			inner.sendoutClick();
			person.updateInfo();
			//重新加载页面的情况
			totalSendResumeTime = outSendResumeTimes;
			inner.getRandomCodeClick();
		}
	}
	module.exports = out;
});
