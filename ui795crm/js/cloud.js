$(document).ready(function(){
//cell_tb_list table
	$(".cell_tb_list tr:even").addClass("tb_even");
	$(".cell_tb_list tr").mouseover(function(){
		$(this).addClass("hover");
	});
	$(".cell_tb_list tr").mouseout(function(){
		$(this).removeClass("hover");
	});
	
	$(".cell_tb_list input").mouseover(function(){
		$(this).addClass("input_color");
	});
	$(".cell_tb_list input").mouseout(function(){
		$(this).removeClass("input_color");
	});
});