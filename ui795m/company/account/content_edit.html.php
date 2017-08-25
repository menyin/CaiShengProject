<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>联系方式添加</title>
</head>
<body id="body">
	<div class="content" id="content" style="width:600px;">			
			<hgroup class="subHgp">
				<div class="bd">
					<form id="ConfrmModInfo" method="post" action="/api/contact.do?act=saveContact">
					<div class="form">
						<div class="formMod">
							<div class="l" style="width:60px;">联系人<i>*</i></div>
							<div class="r" style="width:400px;">
								<p>
									<span class="formText">
										<input class="text" id="user" name="user" style="width:123px;" type="text" maxlength="6" value="{$contact[realname]}">
									</span>								
									<span class="tipPos">
										<span class="tipLay"></span>
									</span>
								</p>

							</div>
							<div class="clear"></div>
						</div>
					 	<div class="formMod">
							<div class="l" style="width:60px;">手机<i>&nbsp;</i></div>
							<div class="r" style="width:400px;">
								<span class="formText">
									<input name="txtMobilePhone" id="txtMobilePhone"  class="text" style="width:245px;" type="text" value="{$contact[mobile]}">
									<input name="hidMobilePhone" id="hidMobilePhone" type="hidden" value="{$contact[mobile]}">
								</span>
								<span id="spnConModMobile" style="display:none">
									<span id="spnModMobile" class="tipTxt">
										<i class="ico icoPhone"></i>
										<a id="btnModMobile" href="javascript:void(0);">更改手机号码</a>
									</span>
								</span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
							</div>
							<div class="clear"></div>
						</div>
						<div id="divValiMobile" class="formMod">
							<div class="l" style="width:60px;">验证码<i>*</i></div>
							<div class="r" style="width:400px;">
								<span class="formText">
									<input id="txtValidateCode" class="text" type="text" name="txtValidateCode" value="" style="width:60px;">
								</span>
								<span class="tipTxt tipText">
									<a id="btnSendValidate" class="btnsF12 btn3" href="javascript:void(0);">免费获取验证码</a>
								</span>
								<span id="tipMessage" class="tipTxt" style="display:none"></span>
								<span class="tipPos">
									<span class="tipLay"></span>
								</span>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formMod">
							<div class="l" style="width:60px;">email<i>&nbsp;</i></div>
							<div class="r" style="width:400px;">
								<span class="formText">
									<input name="email" id="email" maxlength="64" class="text" style="width:245px;" type="text" value="{$contact[email]}">
								</span>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formMod">
							<div class="l" style="width:60px;">QQ<i>&nbsp;</i></div>
							<div class="r" style="width:400px;">
								<span class="formText">
									<input name="qq" id="qq" maxlength="64" class="text" style="width:245px;" type="text" value="{$contact[qq]}">
								</span>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formMod">
							<div class="l" style="width:60px;">显示方式<i>&nbsp;</i></div>
							<div class="r" style="width:400px;">
								<span class="formChb">
									<input value="1" type="checkbox" name="showMobile" id="yjs" class="chb"><label for="yjs">显示手机</label>
									<input value="1" type="checkbox" name="showPhone" id="yjs" class="chb"><label for="yjs">显示电话</label>
									<input value="1" type="checkbox" name="showQQ" id="yjs" class="chb"><label for="yjs">显示QQ</label>
								</span>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formBtn">
							<a href="javascript:void(0);" id="ConbtnSave" class="btn1 btnsF14">保存</a>
							<a href="javascript:void(0);" class="btn1 btnsF14" onclick="contactSetting.close();">取消</a>
						</div>
					</form>
				</div>
			</hgroup>		
		<div class="clear"></div>
	</div>
<script type="text/javascript">
	var subject=contactSetting.options.subject;
	var mobileIsValidation=0;
	var sendMsgUrl = '/api/user.do?act=sendmsg';
	var checkValiAndBindUrl='/api/user.do?act=mobileCodeCheck';
	var ConfrmValid=$("#ConfrmModInfo").validate({
		rules:{
			user:{required:true,rangelength: [2,6],match: /^[\u4e00-\u9fa5]+$/i},
			txtMobilePhone:{
				required:true,
				match:/^1\d{10}$/,
				remote:{
					url:"/api/user.do?act=mobileRepeat",
					type:"post",
					dataType:"json",
					data: {Mobile: function() { return $("#txtMobilePhone").val(); } },
					dataFilter: function(json) {
						var result = eval('(' + json + ')');
						if (result && result.status == 1) {
							$('#txtValidateCode').val('');
							$('#txtValidateCode').removeAttr('disabled');
							$("#divValiMobile").show();
							$(".tipText font").remove();
							$("#hidMobilePhone").val('');
							return "true";
						}
						if(result && result.status == 2) {
							$('#txtValidateCode').attr('disabled','disabled');
							$('#divValiMobile').hide();
							mobileIsValidation = 1;
							$('#txtValidateCode').removeClass('error');
							$.anchorMsg("您的手机号码已经认证过，无需重复认证",{icon:"success"});
							$("#hidMobilePhone").val($("#txtMobilePhone").val());
							return "true";	
						}else{
							return "false";
						}
							/*
									  if(mobileIsValidation != '1'){
										  $('#divValiMobile').show();
										  $('#txtValidateCode').removeAttr('disabled');
										  $('#btnBindMobile').hide();
										  $('#btnCancelBindMobile').hide();
									  }
						  	*/							

					}
				}
			},
			/*
			hidMobilePhone:{
				required:true,
				match:/^[1]\d{10}$/
			},
			*/
			txtValidateCode:{
				required:true,
				number:true,
				rangelength:[4,4],
				remote:{
					url: checkValiAndBindUrl, 
					type: "post", 
					dataType: "json",
					async:true,
					data: {
						txtMobilePhone: function() { return $("#txtMobilePhone").val(); },
						txtValidateCode:function(){ return $("#txtValidateCode").val();}
					},
					dataFilter:function(json){
				 		var result = eval('(' + json + ')');
						if (result.status > 0) {

					   		//取消时清除定时程序
							//clearInterval(interval);
							/*
							$('#btnSendValidate').removeClass('btn3Unclick').html('免费获取验证码').bind("click",function(){
								Coninfomodify.sendMsg();
							});	
							*/
							$(".tipText").prepend('<font class="green jpFntWes">&#xf00c;</font>');
							$('#txtValidateCode').attr('disabled','disabled');						
							$('#tipMessage').hide();
							$("#hidMobilePhone").val($("#txtMobilePhone").val());
							mobileIsValidation = 1;
							return 'true';
						}
						else {
					   		$(".tipText font").remove();	
							return 'false';
						}
				  }
				}
			}
		},
		messages:{
			user:{
				required:'请填写联系人姓名<span class="tipArr"></span>',
				rangelength:'姓名为2-6位中文<span class="tipArr"></span>',
				match:'姓名为2-6位中文<span class="tipArr"></span>'
			},
			txtMobilePhone:{
				required:'请输入手机号码<span class="tipArr"></span>',
				match:'请输入正确的手机号码<span class="tipArr"></span>',
				remote:'该手机号已被认证<span class="tipArr"></span>'
			},
			//hidMobilePhone:{required:'请输入手机号码<span class="tipArr"></span>',match:'手机号码格式不正确<span class="tipArr"></span>'},
			txtValidateCode:{
				required:'请填写验证码<span class="tipArr"></span>',
				number:'请填写数字<span class="tipArr"></span>',
				rangelength:'验证码为4位数字<span class="tipArr"></span>',
				remote:'验证码不正确<span class="tipArr"></span>'
			}

		},
		errorClasses:{
			user:{required:'tipLayErr tipw150',rangelength:'tipLayErr tipw150',match:'tipLayErr tipw150'},
			txtMobilePhone:{required:'tipLayErr tipw120',match:'tipLayErr tipw150',remote:'tipLayErr tipw200'},
			//hidMobilePhone:{required:'tipLayErr tipw100',match:'tipLayErr tipw245'},
			txtValidateCode:{
				required:'tipLayErr tipw100',
				number:'tipLayErr tipw100',
				rangelength:'tipLayErr tipw150',
				remote:'tipLayErr tipw100'
			}
		},
		groups: {
			MobilePhone:'txtMobilePhone hidMobilePhone'
		},
		tips:{
			user:'姓名：2-6个中文<span class="tipArr"></span>'
		},
		tipClasses:{
			user:'tipLayTxt tipw150'
		},
		errorElement:'span',
		errorPlacement:function(error,element){
			element.closest('div.formMod').find('.tipPos .tipLay').append(error);
			if(mobileIsValidation==0){
				$(".tipText font").remove();
			}
		},
		success:function(label){
			label.text(" ");
		}
	});

	var Coninfomodify={
		initialize:function(){
			this._initControl();
		},
		_initControl:function(){
			
			var updateContact='{$contact[ucid]}';
			if(updateContact!=null&&updateContact!=''){
				$('#txtMobilePhone').addClass('textGray').attr('disabled','disabled');
				$('#spnConModMobile').show();
				$('#divValiMobile').hide();
				$('#txtValidateCode').attr('disabled','disabled');

			}
			$('#btnModMobile').click(function(){
				$('#txtMobilePhone').removeClass('textGray').removeAttr('disabled');
				$('#txtMobilePhone').val('');
				$('#spnConModMobile').hide();
				$('#divValiMobile').show();
				$('#txtValidateCode').removeAttr('disabled');

			});		
			$('#txtMobilePhone').keyup(function(){
				//$('#hidMobilePhone').val($(this).val());
			});

			$('#btnSendValidate').click(function(){
				Coninfomodify.sendMsg();
				$(".tipText font").remove();
			});

			var fn = this;
			$('#ConbtnSave').click(function(){
				$("#ConbtnSave").submitForm({ beforeSubmit: $.proxy(ConfrmValid.form, ConfrmValid),data:{Contact:updateContact}, success: fn.modifySuccess, clearForm: false });
				return false;
			});

		},
		modifySuccess:function(data){
			if(data && data.success == 'success'){
				$.anchorMsg("保存成功",{icon:"success"});
					if(subject=='contact'){
						if(data.con_update==1){
							var html='	    <div>'+
							 ' 	 	<p class="tip modify" style="display:block;">'+
							 '	     	<a href="javascript:void(0)" targetName="联系方式" onclick="updateContact('+data.user_id+');" class="del">修改</a>'+
							 '	 	</p>'+
							 '	 </div>'+
							 '	 <div class="tagTxt">'+
							 '	    <i class="fist"><b><span class="langLT" id="contactName'+data.user_id+'">'+data.user+'</span></b></i>'+
							 '	    <i><span id="contactPhone'+data.user_id+'" style="margin:0 90px 0 80px;">'+data.tel+'</span></i>'+
							 '	    <i><span class="contactqq'+data.user_id+'">'+
							 '	   		'+data.qq+
							 '	    </span></i>'+
							 '	  </div>'+
							 '	 <div class="clear"></div>';
							$("#liContact"+data.user_id).html(html);
						}else{
							var html='<li class="infoview" id="liContact'+data.user_id+'">'+
							 '	    <div>'+
							 ' 	 	<p class="tip modify" style="display:block;">'+
							 '	     	<a href="javascript:void(0)" targetName="联系方式" onclick="updateContact('+data.user_id+');" class="del">修改</a>'+
							 '	 	</p>'+
							 '	 </div>'+
							 '	 <div class="tagTxt">'+
							 '	    <i class="fist"><b><span class="langLT" id="contactName'+data.user_id+'">'+data.user+'</span></b></i>'+
							 '	    <i><span id="contactPhone'+data.user_id+'" style="margin:0 90px 0 80px;">'+data.tel+'</span></i>'+
							 '	    <i><span class="contactqq'+data.user_id+'">'+
							 '	   		'+data.qq+
							 '	    </span></i>'+
							 '	  </div>'+
							 '	 <div class="clear"></div>'+
							 '	</li>';

							$("#ulShowContact").prepend(html);
						}

				}else{
					var html='<li><input type="checkbox" class="radio" name="ucid[]" value="'+data.user_id+'"><label> '+data.user+' '+data.tel+' '+data.qq+'</label></li>';
					$("#ucidList").prepend(html);
				}
				setTimeout("contactSetting.close()",500);
				/*
				$("#ucidList :checkbox").click(function(){
					alert('test');
				});
				*/
				return;

			}
			if(data && data.error){
				$.message(data.error+'或内容没改变',{title:'操作失败！'});
				return;
			}
		},

		clearInput:function(){
			if(mobileIsValidation=='1'){
				$('#txtMobilePhone').addClass('textGray').attr('disabled','disabled');
				//$('#hidMobilePhone').attr('disabled','disabled');
				
				$('#spnModMobile').show();
				$('#spnCancelModMobile').hide();
				
				$('#btnBindMobile').hide();
				$('#btnCancelBindMobile').hide();

				$('#divValiMobile').hide();
				$('#txtValidateCode').attr('disabled','disabled');
				
			}
			else{
				$('#txtMobilePhone').removeClass('textGray').removeAttr('disabled');
				//$('#hidMobilePhone').removeAttr('disabled');
				
				$('#spnModMobile').hide();
				$('#spnCancelModMobile').hide();
				
				//$('#btnBindMobile').hide();
				$('#btnCancelBindMobile').hide();
				
				$('#divValiMobile').hide();
				$('#txtValidateCode').attr('disabled','disabled');
			}
		},
		sendMsg:function(){
			$('#tipMessage').hide();
			if(!ConfrmValid.element('#txtMobilePhone')){
				return;
			}
			$('#txtMobilePhone').removeClass('error');
			$('#btnSendValidate').unbind('click');
			
			var data={mobilePhone:$('#txtMobilePhone').val(),cerType:1};
			$.getJSON(sendMsgUrl,data,function(result){
				if(result && result.error){
					$('#btnSendValidate').bind("click",function(){
						Coninfomodify.sendMsg();
					});
					$('#tipMessage').html('<i class="red jpFntWes">&#xf00d;</i>'+result.error).show();
					return;
				}
				$('#btnSendValidate').addClass('btn3Unclick').html('<i>180</i>秒后重新获取验证码');
				//$('#tipMessage').html('<i class="green jpFntWes">&#xf00c;</i>已发送验证码短信到您的手机').show();
				$.anchorMsg("已发送验证码短信到您的手机",{icon:"success"});
				$('#txtValidateCode').focus();
				interval = window.setInterval(Coninfomodify.countdown,1000);
			});
		},
		countdown:function(){
			var seconds=$('#btnSendValidate').find('i').html();
			seconds = parseInt(seconds);
			if(seconds>0){
				seconds--;
				$('#btnSendValidate').find('i').html(seconds);
			}else{
				window.clearInterval(interval);
				$('#tipMessage').html('');
				$('#btnSendValidate').removeClass('btn3Unclick').html('免费获取验证码').bind("click",function(){
					Coninfomodify.sendMsg();
				});
			}
		}
	}
	Coninfomodify.initialize();
</script>

</body>
</html>