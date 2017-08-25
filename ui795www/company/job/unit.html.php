<style>
	.batch-sort td{padding:10px;border-bottom:1px solid #ebebeb}
		.msg{color:red;text-decoration: 2em;font-size:12px;}
		.errorStyle{border:1px solid red;}
</style>
<form action="/api/web/company.api" method="post" id="deptForm">
	<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
	<div style="width:480px;max-height: 400px;_height:400px;overflow-y: auto" id='dept_table' class="dialogCont batch-sort">
		<table style="width:100%" >
					<thead>
						<tr>
							<td align='center'>排序</td>
							<td align='left'>部门名称</td>
						</tr>
					</thead>
					<tbody id="tbody">
						<!--{if $unitList}-->
							<!--{loop $unitList $l}-->
								<tr class="s">
									<td align='center'>
										<span class='formText' style='float: none'>
											<input type='text' value='{$l[cuDisplayOrder]}' name=editOrder[] class='text' style='width: 30px;border-radius: 5px;text-align: center'>
										</span>
										<input type="hidden" value="{$l[cuid]}" name='deptids[]'>
									</td>
									<td align='left'>
										<input type='text' name="editDept[]" value='{$l[cuName]}' class='text' style='padding:3px;margin-right: 5px' />
										<a href='javascript:;' onclick='return deleteDept(this,{$l[cuid]})' style='font-size:12px'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class='msg'></span>
									</td>
								</tr>
							<!--{/loop}-->

						<!--{else}-->
							<tr id="deleteTR"> <td align="center" colspan="2">还没有添加部门，现在开始添加吧！</td></tr>
						<!--{/if}-->
			</tbody>
		</table>
	</div>
	<div class="dialogFooter">
		<a href="javascript:;" id="addDept" style="float:left;font-size:12px;background-color:#fff;border:1px solid #ebebeb;border-radius: 3px;padding:3px 5px">+新增部门</a>
		<span style="color:red;float:left;font-size:12px;margin-left: 10px;margin-top: 3px">最多可添加30个部门</span><span style="color:gray;float:left;font-size:12px;margin-left: 10px;margin-top: 3px">&nbsp;(排序的数字越小越在前)</span>
		<a id="btnDeptSave" href="javascript:void(0);" class="btn1 btnsF12">确定</a><a id="btnDeptCancel" href="javascript:void(0);" class="btn3 btnsF12">取消</a>
	</div>
</form>
<script>
var newDept = "<tr class='s'>" +"<td align='center'>"+"<span class='formText' style='float:none'>"+"<input type='text' value='' name='addOrder[]' class='text' style='width:30px;border-radius:5px;text-align:center'>"+"</span></td>"+"<td align='left'>"+"<input type='text' value='' name='addDept[]' class='text' style='padding:3px;margin-right: 5px'>"+"<a style='font-size:12px' href='javascript:;' onclick='return deleteDept(this,0)'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class='msg'></span>";

var dept = {
		initialize:function(){
			$("#addDept").click(dept.addDept);
			$("#btnDeptSave").click(function(){
				var flag = dept.checkMe();
				if(flag == true){
					$(this).submitForm({success: dept.successCallBack, data:{act:'saveUnit'},clearForm: false});
				}
			});
			$('#btnDeptCancel').click(function(){
				 $(this).closeDialog();
			});
		},
		successCallBack:function(result){
			if(result.status>0) {
				jobAdd.resetDept();
				$.anchorMsg('成功添加/编辑部门!',{onclose:function(){
				  $('#btnDeptCancel').closeDialog();
				}});
			}else{
				if(result.status==0){
					$.anchorMsg(result.msg,{icon:'fail'});
				}else{
					$.anchorMsg(result.msg,{icon:'fail'});
				}
			}
		},
		addDept:function(){
			var tr_length = $("#tbody tr").length;
			if(tr_length >=30){
				$.anchorMsg('最多只能添加30个部门');
				return;
			}
		   var last_no = $(".s:last input:first").val();
		   if(last_no == undefined || last_no == 'undefined' || last_no ==''){
			   last_no = 0;
			   $("#deleteTR").empty().remove();
		   }
			$("#tbody").append(newDept);
			$(".s:last input:first").val(parseInt(last_no)+1);
		},
		checkMe:function(){
			$("#tbody tr").each(function(){
				var tdObj =$(this).find("input").eq(1);
				var word = tdObj.val();
				var len = word.length;
				if(len >10){
					$(this).find(".msg").html("部门名称不能超过10个字");
					var trObj = $(this);
					tdObj.addClass("errorStyle").bind('focus',function(){
						trObj.find(".msg").html("");
						tdObj.removeClass('errorStyle');
					});
					return false;
				}
			});
			return true;
		}
	};
dept.initialize();
function deleteDept(v,deptid){
	var flag = true;
	if(deptid !=0){
		flag = false;
		//ajax 删除数据
		 $.post('/api/web/company.api',{'dept_id':deptid,'act':'delUnit','cidHash':{$cid}},function(result){
			 if(result.status>0){
				var del = $(v).parents('.s');
				$.anchorMsg('删除部门成功',{icon:'success'});
				del.empty().remove();
				jobAdd.resetDept();
				return;
			 }else{
		 		if(result.status==0){
			  		$.anchorMsg(result.msg,{icon:'fail'});
		 		}else{
			 		$.anchorMsg(result.msg,{icon:'fail'});
		 		}
			 }
		 })
	}
	if(flag ==true){
		var del = $(v).parents('.s');
		del.empty().remove();
	}
	return;
}
</script>