<style>
	.batch-sort td{padding:10px;border-bottom:1px solid #ebebeb}
	.msg{color:red;text-decoration: 2em;font-size:12px;}
	.errorStyle{border:1px solid red;}
	
</style>
<form action="/company/service/updateservice.html" method="post" id="deptForm">
	<div style="width:500px;max-height: 400px;_height:400px;overflow-y: auto" id='dept_table' class="dialogCont batch-sort">
		<table style="width:100%; margin-top:10px;">
			<tbody id="tbody">
				<!--{if $list}-->
					<thead>
						<tr>
							<td align='center'>原服务</td>
							<td align='center'>升级服务</td>
							<td align='center'>需支付金额</td>
						</tr>
					</thead>					
					<!--{loop $list $k $l}-->
						<tr>
							<td align='center'>{$l[productName]}({$l[price]}/月)服务</td>
							<td align='center'>{$l[updateType]}({$l[updateProductPrice]}/月)服务</td>
							<td align='center'>{$l[updatePrice]}元</td>
						</tr>
						<!--{/loop}-->
						<tr>
							<td colspan="2">您当前账户余额：<span id="userPrice">{$userInfo[money]}</span>元</td>
							<td align="center">总金额:<span id="totalPrice" class="red">{$totalPrice}</span>元</td>
						</tr>
				<!--{/if}-->
			</tbody>
		</table>
	</div>
	<div class="dialogFooter">

		<input type="hidden" name="updateType" value="{$updateType}">
		<input type="hidden" name="product" value="{$product}">
		<a id="btnDeptSave" href="javascript:void(0);" class="btn1 btnsF12">确定</a><a id="btnDeptCancel" href="javascript:void(0);" class="btn3 btnsF12">取消</a>
	</div>
</form>
<script>
var newDept = "<tr class='s'>" +"<td align='center'>"+"<span class='formText' style='float:none'>"+"<input type='text' value='' name='addOrder[]' class='text' style='width:30px;border-radius:5px;text-align:center'>"+"</span></td>"+"<td align='left'>"+"<input type='text' value='' name='addDept[]' class='text' style='padding:3px;margin-right: 5px'>"+"<a style='font-size:12px' href='javascript:;' onclick='return deleteDept(this,0)'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class='msg'></span>"; 
	
var dept = {
		initialize:function(){
			$("#btnDeptSave").click(function(){
				var userPrice=parseInt($('#userPrice').html());
				var totalPrice=parseInt($('#totalPrice').html());
				if(userPrice<totalPrice){
					$.message('您的金额不足! <a href="/company/account/pay.html">点击充值！</a>',{title:'操作失败,请重新操作！'});
					return false;					
				}
				//$.confirm('确认升级','确认升级',function(){
					$(this).submitForm({success: dept.successCallBack, data:{act:'save'},clearForm: false});
				//},function(){
				//	return false;
				//});
			});
			$('#btnDeptCancel').click(function(){
				 $(this).closeDialog();
			});
		},
		successCallBack:function(result){
			if(result.status>0) {
				$.anchorMsg(result.msg,{onclose:function(){
				  window.location.href='/company/service/myservice.html';
				}});
			}else{
				$.anchorMsg(result.msg,{icon:'fail'});
			}
		}
	};
dept.initialize(); 

</script>