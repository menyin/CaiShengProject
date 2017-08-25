var isIE=$.browser.msie,jq={bind:function(e,t,n,r){return t=="click"&&e.attr("href","javascript:;"),e.bind(t,n,r),e},click:function(e,t){return e.attr("href","javascript:;"),e.click(t),e},hover:function(e,t,n){return e.attr("href","javascript:;"),e.hover(t,n),e},$:{div:function(e){return $("<div>").addClass(e)}},$$:function(e,t){return $("<"+e+">").addClass(t)}}
function height_init()
{
    var isIE = !!window.ActiveXObject;  
    var isIE6 = isIE && !window.XMLHttpRequest;  
    var isIE8 = isIE && !!document.documentMode;  
    var isIE7 = isIE && !isIE6 && !isIE8;  
    var r_main = $(".layout_main .content");
    var l_main = $(".layout_side .content");
    var main = $("#main_box");
    var r_height = r_main.height();
    var l_height = l_main.height();
    var m_height = main.height();
    if (isIE6){
            if(r_height >= l_height){
                    l_main.css("height", r_height+"px");
                    r_main.css("height", r_height+"px");
                    main.css("height", r_height+67+"px");
            }
            else{
                    l_main.css("height", r_height+"px");
                    r_main.css("height", l_height+"px");
                    main.css("height", r_height+67+"px");
            }
    }
    else{
            if(r_height >= l_height){
                    l_main.css("min-height", r_height+"px");
                    r_main.css("min-height", r_height+"px");
                    main.css("min-height", r_height+67+"px");
            }
            else{
                    l_main.css("min-height", r_height+"px");
                    r_main.css("min-height", l_height+"px");
                    main.css("min-height", r_height+67+"px");
            }
    }
}

jQuery(function($){
        function  detail_info_display(source_id, act)
        {
           var pageType = $(".title_desc").attr("id");
           switch( pageType )
           {
              case 'SecurityGroups':
				   {
				       show_security_groups_info(source_id, act); 
                                       
                                       break;
                                   }
              case 'ParametersGroups':
                                   {
                                       show_parameters_groups_info(source_id, act); 
                                       
                                       break; 
                                   }
             case 'DBInstances':    
                                   {
                                       show_dbinstances_info(source_id, act); 
                                       
                                       break; 
                                   }
             case 'DBSnapshots':
                                   {
                                       show_dbsnapshots_info(source_id, act);
                                       
                                       break; 
                                   }
              default: 
           }
        } 
	$(document).ready(function(){
		
		$(".layout_main .dashboard .title").toggle(function(){
			$(this).find(".icon_close").addClass("icon_open").removeClass("icon_close");
			$(this).siblings().slideUp();
		}, function(){
			$(this).find(".icon_open").addClass("icon_close").removeClass("icon_open");
			$(this).siblings().slideDown();
		});
		
		//cell_tb_list table
		$(".cell_tb_list .has_tbody tr td").mouseover(function(){
			$(this).parent().parent().addClass("tbody_hover");
		});
		$(".cell_tb_list .has_tbody tr td").mouseout(function(){
			$(this).parent().parent().removeClass("tbody_hover");
		});
		$(".cell_tb_list tr").mouseover(function(){
			$(this).addClass("hover").removeClass("hoverout");
		});
		$(".cell_tb_list tr").mouseout(function(){
			$(this).addClass("hoverout").removeClass("hover");
		});
		
		$(".cell_tb_list2 tr td").mouseover(function(){
			$(this).addClass("hover");
		});
		$(".cell_tb_list2 tr td").mouseout(function(){
			$(this).removeClass("hover");
		});
		
		var input = $(".cell_tb_list .has_checkbox").find(".db_checkbox");
		input.each(function(index,element){
			if($(input[index]).attr("checked")){
				$(this).parent().parent().addClass("cur");
			}	
			else{
				$(this).parent().parent().removeClass("cur");
			}
		});
		$(".has_checkbox .db_checkbox").live("click",function(event)
                {
                        var act      = "add";
			if($(this).attr("checked"))
                        {
				$(this).parent().parent().addClass("cur");
			}
			else{
                                act  = "remove";
				$(this).parent().parent().removeClass("cur");
			}
			event.stopPropagation();
                        detail_info_display($(this).parent().parent().attr("id"), act);
		});
		$(".cell_tb_list .has_checkbox .res_info").live("click",function()
                {
                        var     act      = "add";
			if($(this).find(".db_checkbox").attr("checked") || $(this).hasClass("cur")  )
                        {
                                act      = "remove";
				$(this).removeClass("cur");
				$(this).find(".db_checkbox").attr("checked",false);
			}
			else
                        {
                                $(".cell_tb_list .has_checkbox .res_info").removeClass("cur");
                                $(".cell_tb_list .has_checkbox .db_checkbox").attr("checked",false);                             
				$(this).addClass("cur");
				$(this).find(".db_checkbox").attr("checked",true);
			}
			detail_info_display($(this).attr("id"), act);
		});
		// info tab
		$("#info .tab li").live("click",function(){
			$(this).addClass("cur").siblings().removeClass("cur");
			var strId = $(this).attr("id");
			$("."+strId).show().siblings().hide();
			
		});
		$(".has_checkbox .c2_checkbox").live("click",function(event)
                {
                        var act      = "add";
			if($(this).attr("checked"))
                        {
				$(this).parent().parent().addClass("cur");
			}
			else{
                                act  = "remove";
				$(this).parent().parent().removeClass("cur");
			}
			event.stopPropagation();
                        detail_info_display($(this).parent().parent().attr("id"), act);
		});   
		
		$(".mainContent .cell_tb_list2 tr:even").css("background-color", "#f8f8f8");
		$(".mainContent .cell_tb_list2 tr:odd").css("background-color", "#fff");
		
		$(".cell_tb_list2 input").mouseover(function(){
			$(this).addClass("input_color");
		});
		$(".cell_tb_list2 input").mouseout(function(){
			$(this).removeClass("input_color");
		});


	});
})
