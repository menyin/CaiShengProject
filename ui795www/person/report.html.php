
<style>
.reportBox{width:560px;font-size:12px; text-align: left;}
.reportBox .formMod .l{width:80px;}
.reportBox .formMod .r{width:430px;}
.reportBox .formMod .r .formTextarea textarea.textarea{height:80px;}
.reportBox .formMod .r .tipTxt{margin:0; width:430px;}
.reportBox .formBtn{margin-left:85px;}
.reportBox .formMod .r .formRad label{ display:block; float:left; width:190px; margin-bottom:8px; }
.formRad input {position: relative; *top: 4px;}
</style>
<form id="frmComplaint" action="/api/web/job.api" method="post">
<input type="hidden" name="act" value="report">
<input type="hidden" name="jid" value="{$_GET['jid']}">
<div class="dgBox reportBox">
	<div class="reportForm">
			
			 <div id="personcomplainttype" class="formMod" style="text-align:center;font-size:18px;display:none">
						 已有<label style='color:red'>0</label>人举报该公司为保险公司,我们<label style='color:red'>正在核实中</label>......
			 </div> 
				 <div class="formMod">
			<div class="l">举报类型<i>&nbsp;</i></div>
			<div class="r">
				<span class="formRad">
					 <label for="rp6"><input type="radio" class="radio"   id="rp6" name="rdPersonCompaint" value="6" checked="checked" />招聘职位与真实情况不符</label>
					 <label for="rp7"><input type="radio" class="radio"   id="rp7" name="rdPersonCompaint" value="7" />薪酬福利与真实情况不符</label>
					 <label for="rp8"><input type="radio" class="radio"   id="rp8" name="rdPersonCompaint" value="8" />已经停止招聘的信息</label>
					 <label for="rp9"><input type="radio" class="radio"   id="rp9" name="rdPersonCompaint" value="9" />培训招生及招商广告</label>
					 <label for="rp2"><input type="radio" class="radio"   id="rp2" name="rdPersonCompaint" value="2" />冒用该公司名义招聘</label>
					 <label for="rp10"><input type="radio" class="radio"   id="rp10" name="rdPersonCompaint" value="10" />招聘过程有违规行为</label>
					 <label for="rp5"><input type="radio" class="radio"   id="rp5" name="rdPersonCompaint" value="5" />保险公司</label>
					 <label for="rp4"><input type="radio" class="radio"   id="rp4" name="rdPersonCompaint" value="4" />其他</label>
					</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
			<div class="l">举报内容<i>&nbsp;</i></div>
			<div class="r">
			  <span class="formTextarea">
				 <textarea class="textarea" style="width:410px;" name="txtContent"></textarea>
			  </span>
			  <span class="tipPos">
					<span class="tipLay">
  
					</span>
			   </span> 
			  <span class="tipTxt gray">尽可能详细描述，以便我们及时正确的处理</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formMod">
		   <div class="l">手机号码<i>&nbsp;</i></div>
		   <div class="r">
			  <span class="formText">
				 <input type="text" class="text" style="width:230px;" value="{$userInfo['mobile']}" name="txtTelphone" />
			  </span>
			   <span class="tipPos">
					<span class="tipLay">
  
					</span>
				</span> 
		   </div>
		   <div class="clear"></div>
		</div>
		<div class="formMod">
		   <div class="l">邮 箱<i>&nbsp;</i></div>
		   <div class="r">
			  <span class="formText">
				 <input type="text" class="text"  style="width:230px;" name="txtEmail" value="{$userInfo['email']}" />
			  </span>
			   <span class="tipPos">
					<span class="tipLay">
  
					</span>
			  </span> 
			  <span class="tipTxt gray">处理结果将通过手机/邮箱告知您，请正确填写您的手机号码或邮箱</span>

		   </div>
		   <div class="clear"></div>
		</div>
		<div class="formBtn"><a href="javascript:void(0)" class="btnsF14 btn1" id="btnComplaint">提交</a></div>
	</div>
</div>
</form>
<script type="text/javascript">

try{
	jpjs.use('@jobDialog, @actions, @form', function(m){
		factory(m['jpjob.jobDialog'].extend(m['jpjob.actions'], m['jpjob.jobValidate'], m['jpjob.jobForm']));
	});
} catch (e){
	factory($);
}

function factory($){
	$.focusColor('input.text');
	var frmComplaint = $("#frmComplaint").validate({
		rules:{
			txtContent:{
				required:true,
				rangelength:[1,1000]
			},
			txtTelphone:{
				required:true,
				tel:true
			},
			txtEmail:{
				required:true,
				email:true
			}
		},
		messages:{
			txtContent:{
				required:'请填写留言<span class="tipArr"></span>',
				rangelength:'留言不能超过1000字 <span class="tipArr"></span>'
			},
			txtTelphone:{
				required:'请填写电话号码<span class="tipArr"></span>',
				tel:'请填写正确的电话号码<span class="tipArr"></span>'
			},
			txtEmail:{
				required:'请填写邮箱<span class="tipArr"></span>',
				email:'请填写正确的邮箱<span class="tipArr"></span>'
			}
		},
		errorClasses:{
			txtContent:{
				required:'tipLayErr tipw120',
				rangelength:'tipLayErr tipw150'
			},
			txtTelphone:{
				required:'tipLayErr tipw120',
				tel:'tipLayErr tipw120'
			},
			txtEmail:{
				required:'tipLayErr tipw120',
				email:'tipLayErr tipw120'
			}
		},
		tipClasses:{
			txtContent:'tipLayTxt tipw120',
			txtTelphone:'tipLayTxt tipw120',
			txtEmail:'tipLayTxt tipw120'
		},
		tips:{
			txtContent:'请填写留言<span class="tipArr"></span>',
			txtTelphone:'请填写电话号码<span class="tipArr"></span>',
			txtEmail:'请填写邮箱<span class="tipArr"></span>'
		},
		errorElement:'span',
		errorPlacement:function(error,element){
			element.closest('div.formMod').find('.tipPos .tipLay').empty().append(error);
		},
		success:function(label){
			label.text(" ");
		}
	});
	
	$('#btnComplaint').click(function(){
		var _this = $(this);
		$(this).submitForm({ beforeSubmit: $.proxy(frmComplaint.form, frmComplaint),success:function(result){
			if(result.error){
				 $.message(result.error,{title:'操作失败！'});
			} else if(result.success){
				if(_this[0].trigger){
					_this[0].trigger('close');
				} else {
					_this.closeDialog();
				}
				$.anchorMsg(result.success,{title: "操作成功", icon: "success"});
			}
		},clearForm:false});
	});	

	$("input[name='rdPersonCompaint']").click(function(){
	   var val=parseInt($(this).attr('value'));
	   var complaintcount=0;
	   if(val==5 && complaintcount>0){
		  $('#personcomplainttype').show();
		}else{
		  $('#personcomplainttype').hide();
		}
	});
}

</script>
