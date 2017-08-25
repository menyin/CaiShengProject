frameSettings.tipsResize = function(){
	if($(".mainContent").width()>850){
		$(".mainContent").css("overflow-x","hidden");
	}
	else{
		$(".mainContent").css("overflow-x","visible");
	}
	if($(".detailContent").width()>850){
		$(".detailContent").css("overflow-x","hidden");
	}
	else{
		$(".detailContent").css("overflow-x","visible");
	}		
}

	jQuery.fn.textPlaceholder = function () {

		return this.each(function(){
	
			var that = this;
	
			if (that.placeholder && 'placeholder' in document.createElement(that.tagName)) return;
	
			var placeholder = that.getAttribute('placeholder');
			var input = jQuery(that);
	
			if (that.value === '' || that.value == placeholder) {
				input.addClass('text-placeholder');
				that.value = placeholder;
			}
	
			input.focus(function(){
				if (input.hasClass('text-placeholder')) {
					this.value = '';
					input.removeClass('text-placeholder')
				}
			});
	
			input.blur(function(){
				if (this.value === '') {
					input.addClass('text-placeholder');
					this.value = placeholder;
				} else {
					input.removeClass('text-placeholder');
				}
			});
	
			that.form && jQuery(that.form).submit(function(){
				if (input.hasClass('text-placeholder')) {
					that.value = '';
				}
			});
	
		});
	
	};
	
	
$(document).ready(function(){
		$(".placeholder").focus(function(){$(this).removeAttr("placeholder");})
		//cell_tb_list table鼠标放上去颜色的变化
		$(".cell_tb_list tr:not(.if_no_dds)").mouseover(function(){
			$(this).addClass("hover").removeClass("hoverout");
		});
		$(".cell_tb_list tr:not(.if_no_dds)").mouseout(function(){
			$(this).addClass("hoverout").removeClass("hover");
		});
		//cell_tb_list table checkbox的选中
		var input = $(".cell_tb_list .has_checkbox").find(".dds_checkbox");
		input.each(function(index,element){
			if($(input[index]).attr("checked")){
				$(this).parent().parent().addClass("cur");
				
			}	
			else{
				$(this).parent().parent().removeClass("cur");
			}
			deleteFile();editFile();
		});
    /*
		$(".has_checkbox .dds_checkbox").live("click",function(event){
			if($(this).attr("checked")){
				$(this).parent().parent().addClass("cur");
			}
			else{
				$(this).parent().parent().removeClass("cur");
			}
			deleteFile();editFile();
			event.stopPropagation();
		});
		$(".cell_tb_list .has_checkbox tr:not(.add_file)").live("click",function(){
			if($(this).find(".dds_checkbox").attr("checked")){
				$(this).removeClass("cur");
				$(this).find(".dds_checkbox").attr("checked",false);
				$(this).siblings().removeClass("cur").find(".dds_checkbox").attr("checked",false);
			}
			else{
				$(this).addClass("cur");
				$(this).find(".dds_checkbox").attr("checked",true);
				$(this).siblings().removeClass("cur").find(".dds_checkbox").attr("checked",false);
			}
			deleteFile();editFile();
		});
		*/
		//selectEx
				$(".div-select").each(function (index, element)
				{
					(new SelectEx({ selector: $(element), unit: 21, fix: 40, shows: 5 })).init();
				});
				$(".div-select1").each(function (index, element)
				{
					(new SelectEx({ selector: $(element), unit: 21, fix: 40, shows: 5 })).init();
				});
				$(".div-select2").each(function (index, element)
				{
					(new SelectEx({ selector: $(element), unit: 21, fix: 40, shows: 5 })).init();
				});
				$(".div-select3").each(function (index, element)
				{
					(new SelectEx({ selector: $(element), unit: 21, fix: 40, shows: 5 })).init();
				});
				//增加分发页面dialog
				$("#dialog1").dialog({
					autoOpen: false,
					width: 600,
					modal: true,
					draggable:true,
					resizable:false
				});
				$("#dialog2").dialog({
					autoOpen: false,
					width: 750,
					modal: true,
					draggable:true,
					resizable:false
				});
				$("#dialog3").dialog({
					autoOpen: false,
					width: 750,
					modal: true,
					draggable:true,
					resizable:false
				});
				//删除确认dialog
				$("#dialog_delete").dialog({
					autoOpen: false,
					width: 480,
					modal: true,
					draggable:true,
					resizable:false
				});
				//编辑设置dialog
				$("#dialog_setting").dialog({
					autoOpen: false,
					width: 750,
					modal: true,
					draggable:true,
					resizable:false
				});
				$("#main .icon-5:not('.disabled')").live("click",function(){
					$("#dialog_setting").dialog("open");
					resizeHeight($("#dialog_setting .step_left"));
				});
				//创建加速
				$("#main .icon-1:not('.disabled')").click(function(){
					$("#dialog1").dialog("open");
					resizeHeight($(".step_1"));
				});
				//创建文件夹
                /*
				$("#main .icon-8:not('.disabled')").live('click',function(){
					$(".cell_tb_list .table_header").after('<tr class="add_file"><td class="td1" colspan="6"><span class="folder">新建文件夹：</span> <span><input type="text" name="add_file" style="height:18px;" class="add_file_input"/></span></td></tr>');
					$(".cell_tb_list .add_file input").focus();
				});
				$(".cell_tb_list .add_file input").live('blur',function(){
					var str_name = $(this).val();
					if(isEmpty(str_name)){
						str_name = str_name.substring(0,20);
						$(this).parent().html(str_name);
						$(this).remove();
						$(".cell_tb_list .add_file").remove();
						$(".cell_tb_list .table_header").after('<tr><td class="td1"><input type="checkbox" class="dds_checkbox" id="dds_checkbox" name="dds_checkbox"></td><td class="td2"><span class="is_doing">分发中</span></td><td class="td3"><span class="folder">'+str_name+'</span></td><td class="td4 cname"></td><td class="td5"></td><td class="td6"></td></tr>');
					}
					else{
						$(".cell_tb_list .add_file").remove();
					}
				});
                */
                /*
				//第一步跳第二步
				$(".step1_submit").click(function(){
					$("#dialog1").dialog("close");
					$("#dialog2").dialog("open");
					resizeHeight($(".step_3"));
				});
				//第二步跳第一步
				$(".step3_cancel").click(function(){
					$("#dialog2").dialog("close");
					$("#dialog1").dialog("open");
					resizeHeight($(".step_1"));;
				});
				//第二步跳第三步
				$(".step3_submit").click(function(){
					$("#dialog2").dialog("close");
					$("#dialog3").dialog("open");
					resizeHeight($(".step_4"));
				});
				//第三步跳第二步
				$(".step4_cancel").click(function(){
					$("#dialog3").dialog("close");
					$("#dialog2").dialog("open");
					resizeHeight($(".step_3"));
				});
				*/
				//placeholder plugin
				$(".placeholder").textPlaceholder();
				//step2判断ip
				function isIp(str){
					var result = str.match(/(\d+)\.(\d+)\.(\d+)\.(\d+)/);
					if(result==null) return false;
					else return true;
  				}
				function isEmpty(str){
					if(str==null||str=="") return false;
					else return true;
  				}
				$(".step_1 .step1_url").live("blur keydown",function(){
					if(!isEmpty($(this).val())){
						
						$(this).parent().parent().next().find(".step_error").show();
					}
					else{
						$(this).parent().parent().next().find(".step_error").hide();		
					}
				});
				$(".step_2 .td2 .step1_ip").live("blur",function(){
					if(!isIp($(this).val())){
						$(this).parent().next().find(".step_error").show();
						var str = $(this).parent().parent().attr("class");
						if(str!=null){
							str = str.substring(0,2);
							if(str=="tr"){
								if(!isEmpty($(this).val())){
									$(this).parent().parent().remove();
									resizeHeight($(".step_1"));
								}
							}
						}
					}
					else{
						$(this).parent().next().find(".step_error").hide();		
					}
				});
				$(".step_2 .td2").live("mouseover",function(){
					$(this).parent().find(".step_delete").show();
				});
				$(".step_2 .td3").live("mouseover",function(){
					$(this).parent().find(".step_delete").show();
				});
				$(".step_2 .td4").live("mouseover",function(){
					$(this).parent().find(".step_delete").show();
				});
				$(".step_2 .td2").live("mouseout",function(){
					$(this).parent().find(".step_delete").hide();
				});
				$(".step_2 .td3").live("mouseout",function(){
					$(this).parent().find(".step_delete").hide();
				});
				$(".step_2 .td4").live("mouseout",function(){
					$(this).parent().find(".step_delete").hide();
				});
				//input focus边框颜色为蓝色
				$("input").live("focus",function(){
					$(this).addClass("input_focus");
				});
				$(".input").live("blur",function(){
					$(this).removeClass("input_focus");
				});
				$("textarea").live("focus",function(){
					$(this).addClass("input_focus");
				});
				$("textarea").live("blur",function(){
					$(this).removeClass("input_focus");
				});
				//step2删除一列
				$("#dialog1 .step_2 .step_delete").live("click",function(){
					$(this).parent().parent().remove();
					resizeHeight($("#dialog1 .step_1"));
				});
				$("#dialog_setting .step_2 .step_delete").live("click",function(){
					$(this).parent().parent().remove();
					resizeHeight($("#dialog_setting .step_left"));
				});
				//step2点击添加一列
				var id=0;
				$("#dialog1 .step_2 .step_add").live('click',function(){
					id=id+1;
					var content = '<tr class="tr'+id+'"><td class="td1"></td><td class="td2"><input type="text" name="step1_ip[]" class="step1_ip"/></td><td class="td4"><span class="step_delete">删除</span><span class="step_error">请输入正确的IP</span></td></tr>';
					$("#dialog1 .step_add_1").before(content);
					resizeHeight($("#dialog1 .step_1"));
				});
				$("#dialog_setting .step_2 .step_add").live('click',function(){
					id=id+1;
					var content = '<tr class="tr'+id+'"><td class="td1"></td><td class="td2"><input type="text" name="step2_ip[]" class="step1_ip"/></td><td class="td4"><span class="step_delete">删除</span><span class="step_error">请输入正确的IP</span></td></tr>';
					$("#dialog_setting .step_add_1").before(content);
					resizeHeight($("#dialog_setting .step_left"));
				});
				//step3
				$(".step_3 .tr_item").live("mouseover",function(){
					$(this).addClass("tr_focus").find(".step_delete").show();
					$(this).parent().parent().parent().siblings().find(".tr_item").removeClass("tr_focus").find(".step_delete").hide();
				})
				
				sortLi($("#dialog2"));
				sortLi($("#dialog_setting"));
				//step3缓存策略拖动效果
				$( "#dialog2 .sortable" ).sortable({
					stop:function(){
						sortLi($("#dialog2"));
					}
				});
				$( "#dialog_setting .sortable" ).sortable({
					stop:function(){
						sortLi($("#dialog_setting"));
					}
				});
				//step3当选择不缓存时，隐藏时间选项
				$(".step_3 .layer_dropdownlist li").live("click",function(){
					var that = $(this).parent().parent();
					if(that.prev().find(".text").html()==="不缓存"){
						that.parent().parent().siblings().hide();
					}
					else{
						that.parent().parent().siblings().show();
					}
				});
				//step3展开时选择添加后缀规则
				/*$(".step_3 .rule li").live("hover",function(){
					$(this).addClass("cur").siblings().removeClass("cur");
				});
				$(".step_3 .rule li").live("mouseout",function(){
					$(this).removeClass("cur");
				});*/
				//step3删除一列
				$("#dialog2 .step_3 .step_delete").live("click",function(){
					$(this).parent().parent().parent().parent().parent().remove();
					sortLi($("#dialog2"));
					resizeHeight($("#dialog2 .step_3"));
				})
				$("#dialog_setting .step_3 .step_delete").live("click",function(){
					$(this).parent().parent().parent().parent().parent().remove();
					sortLi($("#dialog_setting"));
					resizeHeight($("#dialog_setting .step_left"));
				})
				//step3点击添加一列
				var id2=0;
				$("#dialog2 .step_3 .step_add").live('click',function(){
					id2=id2+1;
					var content = '<li class="li'+id2+'"><table alt="调整优先级↑高↓低" title="调整优先级↑高↓低"><colgroup><col class="col1" /><col class="col2" /><col class="col3" /><col class="col4" /></colgroup><tr class="tr_item"><td class="td1"><span class="step3_id"></span><span class="step3_name"><input type="text" class="step3_name_input" name="step3_name_input" /></span></td><td class="td2"><ul><li class="item"><div class="div-select"><select id="step3_select_1" name="step3_select_1" class="step3_select_1"><option>缓存</option><option>不缓存</option></select></div></li><li class="item">：<input type="text" name="step3_time" class="step3_time" value="30" /></li><li class="item last"><div class="div-select2"><select id="step3_select_2" name="step3_select_2" class="step3_select_2"><option>分钟</option><option>小时</option><option>天</option></select></div></li></ul></td><td class="td3"><span class="step_open">展开</span></td><td class="td4"><span class="step_delete">删除</span></td></tr></table></li>';
					$("#dialog2 .sortable").append(content);
					var element = "#dialog2 .li"+id2+" .div-select";
					(new SelectEx({ selector: element, unit: 21, fix: 40, shows: 5 })).init();
					var element2 = "#dialog2 .li"+id2+" .div-select2";
					(new SelectEx({ selector: element2, unit: 21, fix: 40, shows: 5 })).init();
					sortLi($("#dialog2"));
					$("#dialog2 .sortable").show();
					$("#dialog2 .content_open").hide();
					$("#dialog2 .step_3 .li"+id2+" .step3_name_input").focus();
					resizeHeight($("#dialog2 .step_3"));
				});
				
	$("#dialog_setting .step_3 .step_add").live('click',function(){

        id2=id2+1;
        var content = '<li class="li'+id2+'"><table alt="调整优先级↑高↓低" title="调整优先级↑高↓低"><colgroup><col class="col1" /><col class="col2" /><col class="col3" /><col class="col4" /></colgroup><tr class="tr_item"><td class="td1"><span class="step3_id"></span></td><td class="td2"><ul><li class="item"><div class="div-select"><select id="step3_select_1" name="step3_select_1" class="step3_select_1"><option>缓存</option><option>不缓存</option></select></div></li><li class="item">：<input type="text" name="step3_time" class="step3_time" value="30" /></li><li class="item last"><div class="div-select2"><select id="step3_select_2" name="step3_select_2" class="step3_select_2"><option>分钟</option><option>小时</option><option>天</option></select></div></li></ul></td><td class="td3"><span class="step_close">收起</span></td><td class="td4"><span class="step_delete">删除</span></td></tr></table>'+$("#dialog_setting .div_content_open").html()+'</li>';
        $("#dialog_setting .sortable").append(content);

        var element = "#dialog_setting .li"+id2+" .div-select";
		var select = new SelectEx({ selector: element, unit: 21, fix: 40, shows: 5 });
		select.init();
        var element2 = "#dialog_setting .li"+id2+" .div-select2";
        var select = new SelectEx({ selector: element2, unit: 21, fix: 40, shows: 5 });
		select.init();

        sortLi($("#dialog_setting"));

		$("#dialog_setting .sortable .li"+id2).find(".content_open").show();
		$("#dialog_setting .sortable .li"+id2).siblings().find(".content_open").hide();
		$("#dialog_setting .sortable .li"+id2).siblings().find(".step_close").addClass("step_open").removeClass("step_close").html("展开");
        $("#dialog_setting .step_3 .li"+id2+" .step3_name_input").focus();

        resizeHeight($("#dialog_setting .step_left"));

    });
	
	$(".step_open_content .rule li").live("click",function(){
		$(this).addClass("cur").siblings().removeClass("cur");
		var index =  $(this).index(".step_open_content .rule li");
		if(index%5 == 0){
			$(this).parent().parent().find(".rule_list1").show().siblings().hide();
		}
		if(index%5 == 1){
			$(this).parent().parent().find(".rule_list2").show().siblings().hide();
		}
		if(index%5 == 2){
			$(this).parent().parent().find(".rule_list3").show().siblings().hide();
		}
		if(index%5 == 3){
			$(this).parent().parent().find(".rule_list4").show().siblings().hide();
		}
		if(index%5 == 4){
			$(this).parent().parent().find(".rule_list5").show().siblings().hide();
		}
		resizeHeight($("#dialog_setting .step_left"));
	})
	$(".step_open_content .rule_list li:not('.selected')").live("click",function(){
		var li_class = $(this).find("span").text();
		var a;
		a=$(this).parent().parent().parent().parent().find(".add_behind ul").text();		
		if ((li_class=="slash"&&a!="")||a=="slash"){
				alert("首页后缀缓存不允许和其他后缀缓存放一起，你可以点击添加缓存策略单独添加");
				return;
		}
		$(this).parent().parent().parent().parent().find(".add_behind ul").append("<li class="+li_class +">"+$(this).html()+"</li>");	
		$(this).addClass("selected");	
		resizeHeight($("#dialog_setting .step_left"));
	})
	$(".step_open_content .rule_list li.selected").live("click",function(){
		$(this).parent().parent().parent().parent().find(".add_behind ."+$(this).find("span").text()).remove();
		$(this).removeClass("selected");
		resizeHeight($("#dialog_setting .step_left"));	
	})
	$("#dialog_setting .step_3 .rule_list li").each(function(){
		$(this).addClass($(this).find("span").text());
	})
	
	
	$("#dialog_setting .step_3 .add_behind li").live("click",function(){
		$(this).remove();
		var li_class = $(this).attr("class");
		$(".rule_list ."+li_class).removeClass("selected");
	})
				$(".step_3 .step3_name_input").live("blur",function(){
					var str_name = $(this).val();
					if(isEmpty(str_name)){
						str_name = str_name.substring(0,6);
						$(this).parent().html(str_name);
						$(this).remove();
						resizeHeight($(".step_3"));
					}
					else{
						$(this).parent().parent().parent().parent().parent().parent().remove();
					}
				});
				//step3展开内容
				$("#dialog2 .step_3 .step_open").live("click",function(){
					$(".sortable").hide();
					$(".content_open").show();
					$(".step3_bottom").hide();
					resizeHeight($(".step_3"));
				})
				$("#dialog_setting .step_3 .step_open").live("click",function(){
					$(this).parent().parent().parent().parent().next().show();
					$(this).parent().parent().parent().parent().parent().siblings().find(".content_open").hide();
					$(this).parent().parent().parent().parent().parent().siblings().find(".step_close").addClass("step_open").removeClass("step_close").html("展开");
					$(this).addClass("step_close").removeClass("step_open").html("收起");
					resizeHeight($("#dialog_setting .step_left"));
					
				})
				//step3关闭内容
				$("#dialog2 .step_3 .step_close").live("click",function(){
					$("#dialog2 .sortable").show();
					$("#dialog2 .content_open").hide();
					$("#dialog2 .step3_bottom").show();
					resizeHeight($("#dialog2 .step_3"));
				})
				$("#dialog2 .step_3 .add_behind span").live("click",function(){
					$(this).parent().remove();
				})
				$("#dialog2 .step_3 .step_btn").live("click",function(){
					var imageName = $("#dialog2 .step_3 .step3_add_behind").val();
					var placeholder = $("#dialog2 .step_3 .step3_add_behind").attr("placeholder");
					if(imageName!==""&&imageName!==placeholder){
						$("#dialog2 .step_3 .add_behind ul").append('<li><span>'+imageName+'</span></li>');
						$("#dialog2 .step_3 .step3_add_behind").val("");
					}
					resizeHeight($("#dialog2 .step_left"));
				})
				$("#dialog_setting .step_3 .step_close").live("click",function(){
					$(this).parent().parent().parent().parent().next().hide();
					$(this).addClass("step_open").removeClass("step_close").html("展开");
					resizeHeight($("#dialog_setting .step_left"));
				})
				/*
				$("#dialog_setting .step_3 .add_behind span").live("click",function(){
					$(this).parent().remove();
				})
				*/
				$("#dialog_setting .step_3 .step_btn").live("click",function(){
					var imageName = $(this).parent().find(".step3_add_behind").val();
					imageName=imageName.substring(0,6);
					var hasExit = new Array();
					hasExit = ['zip','rar','7z','exe','mid','mp3','wma','wav','ape','jpg','jpeg','gif','png','bmp','psd','ttf','pix','tiff','wmv','asf','asx','rm','ra','ram','rmvb','mp4','avi','mpg','mov','flv'];
					var flag=0;
					for(var i=0;i<hasExit.length;i++){
						if(hasExit[i]===imageName){
							flag = 1;
							return;
						}
					}
					var placeholder = $(this).parent().find(".step3_add_behind").attr("placeholder");
					if(imageName!==""&&imageName!==placeholder&&flag==0){
						$(this).parent().parent().find(".add_behind ul").append('<li class="'+imageName+'"><span>'+imageName+'</span></li>');
						$(this).parent().find(".step3_add_behind").val("");
					}
					resizeHeight($("#dialog_setting .step_left"));
				})
				//设置/流量报警
				$(".tab1_content #tab1_checkbox4").live("click",function(){
					if($(this).attr("checked")){
						$(this).parent().next().removeClass("gray");
						$(this).parent().next().find("input").removeAttr("disabled");
						$(this).parent().next().find("textarea").removeAttr("disabled");
					}
					else{
						$(this).parent().next().addClass("gray");
						$(this).parent().next().find("input").attr("disabled","disabled");
						$(this).parent().next().find("textarea").attr("disabled","disabled");
					}
				});
				//设置视频拖拽
				$(".tab5_content #tab5_startVideo").live("click",function(){
					if($(this).attr("checked")){
						$(".tab5_main").removeClass("gray");
						$(".tab5_main").find("input").removeAttr("disabled");
						$(".tab5_main").find("#tab5_mp42").attr("disabled","disabled");
					}
					else{
						$(".tab5_main").addClass("gray");
						$(".tab5_main").find("input").attr("disabled","disabled");
					}
				});
				deleteFile();editFile();
				$(".mainContent input[name='addval']").live("keypress",function(event){
					if (event.keyCode == 13){
						submitinfo(this);
					}
				})
				
})

//dialog右导航高度
function resizeHeight(id){
	var r_height = id.height();
	var dialog_top = parseInt(id.parent().parent().parent().css('top'));
	var dialog_height = $('body').height()-100-dialog_top;
	if(r_height < dialog_height){
		$(".add_step_title").css("min-height",r_height+"px");
	}
	else{
		id.css("max-height",dialog_height);
		$(".add_step_title").css("min-height",dialog_height+"px");
	}
}
//删除加速
function deleteFile(){
	if($(".has_checkbox").find("tr.cur").length===0){
		$(".btn-line .icon-2").addClass("disabled");
	}
	else{
		$(".btn-line .icon-2").removeClass("disabled");
	}
}

//修改加速
function editFile(){
	if($(".has_checkbox").find("tr.cur").length===1){
		$(".btn-line .icon-5").removeClass("disabled");
	}
	else{
		$(".btn-line .icon-5").addClass("disabled");
	}
}
//step3给列表排序
				function sortLi(id){
					id.find(".sortable > li").each(function(index, element){
						var step3_id = index + 1;
						$(this).find(".step3_id").html(step3_id+"、");
					});
				}