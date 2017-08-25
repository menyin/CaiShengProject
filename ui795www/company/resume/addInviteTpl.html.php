<style type="text/css">
	.formMod{padding: 10px;}
	.formBtn{text-align: right; padding: 20px;}
</style>
<p>&nbsp;</p>
<form id="formjobadd" method="post" action="/api/web/company.api">
<input type="hidden" name="cidHash" value="{$com[cid]}">
<input type="hidden" name="tplid" value="{$id}">
	<div class="formMod">
		<div class="l">模板名称<i>*</i></div>
		<div class="r">
			<span class="formText">
				<input type="text" style="width:235px;" value="{$tplname}" name="txtTitle" id="txtTitle" class="text">
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formMod">
		<div class="l">联&nbsp;系&nbsp;人&nbsp;<i>*</i></div>
		<div class="r">
			<span class="formText">
				<input type="text" style="width:235px;" value="{$tpl['linker']}" name="txtLinker" id="txtLinker" class="text">
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formMod">
		<div class="l">联系电话<i>*</i></div>
		<div class="r">
			<span class="formText">
				<input type="text" style="width:235px;" value="{$tpl['linktel']}" name="txtTel" id="txtTel" class="text">
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formMod">
		<div class="l">面试地点<i>*</i></div>
		<div class="r">
			<span class="formText">
				<input type="text" style="width:235px;" value="{$tpl['address']}" name="txtAddress" id="txtAddress" class="text">
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formMod">
		<div class="l">备注<i>&nbsp;</i></div>
		<div class="r">
			<span class="formTextarea">
				<textarea class="textarea" name="txtContent" id="txtContent">{$tpl['content']}</textarea>
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formBtn">
		<input type="hidden" name="act" value="invite">
		<a href="javascript:void(0);" class="btnsF12 btn1" id="publish">确定</a>
		<a href="javascript:void(0);" class="btnsF12 btn1" onclick="$(this).closeDialog();">取消</a>
	</div>
</form>
<script>
	$(document).ready(function(){
		$('#publish').click(function(){
			var txtTitle=$('#txtTitle').val();
			var txtAddress=$('#txtAddress').val();
			var txtLinker=$('#txtLinker').val();
			var txtTel=$('#txtTel').val();
			var txtContent=$('#txtContent').val();
			if(txtTitle==''){
				$.anchor('模板名称不能为空!',{icon:'fail'});
				return false;
			}
			if(txtLinker==''){
				$.anchor('联系人不能为空!',{icon:'fail'});
				return false;
			}
			if(txtTel==''){
				$.anchor('联系电话不能为空!',{icon:'fail'});
				return false;
			}
			if(txtAddress==''){
				$.anchor('面试地点不能为空!',{icon:'fail'});
				return false;
			}

			$(this).submitForm({ beforeSubmit: '', data: {act:'addInviteTpl'}, success: function(json){
				if (json.status>0){
					$.anchor(json.msg,{icon:'success'});
				}else{
					if(json.status==0){
						$.anchor(json.msg,{icon:'fail'});
					}else{
						$.anchor(json.msg,{icon:'fail'});
					}
					return;
				}
				window.location.href = window.location.href;
			}, clearForm: false})
			return false;

		});
	});
</script>