
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />	
</head>
<body>
<form id="formjob" method="post" action="/api/web/company.api">
<input type="hidden" name="act" value="updateContact">
<input type="hidden" name="cidHash" value="{$com['cid']}">
<input type="hidden" name="type" value="email">
<div class="dialogCont set-contact" style="width:750px;">
		<div class="list">
			<p class="all"><label><input type="checkbox" id="allSelect" checked="checked"/>全选</label></p>
			<ul id="mainContainer">
				<!--{loop $jobList $k $l}-->
					<li>
						<a href="javascript:void(0)"><label for="hddjobID{$l['_jid']}"><input type="checkbox" id="hddjobID{$l['_jid']}" name="hddjobID[]" value="{$l['_jid']}" checked="checked"/>{$l['jname']}</label></a>
						<p>{$l['emailStr']}</p>
					</li>
				<!--{/loop}-->
			</ul>
		</div>
		<div class="setting" id="setting">
			<h3 class="tit">邮箱接收简历设置</h3>
			<label class="select"><input type="radio" class="radio" name="toMail"  value="0" checked="checked" />不需要将收到的简历发送到邮箱</label>
			<label class="select"><input type="radio" class="radio" name="toMail"  value="1"  />需要发送到邮箱</label>
			<div class="twoset">
				<label class="newMode" for="efor1"><input type="radio" class="radio" name="allowmail"  id="efor1" value="0" checked="checked" />使用企业邮箱</label>
				<p>{$com['comEmail']}</p>
				<label class="newMode" for="efor2"><input type="radio" class="radio" name="allowmail"  value="1" id="efor2"  />使用新的邮箱</label>
				<ul class="modeBox" style="display:none;">
					<li class="clearfix"><p><span>邮箱地址1</span><input id="email1"  name="email1" type="text" watermark="输入邮箱地址" class="text newMail watermark email" /></p></li>
					<li class="clearfix"><p><span>邮箱地址2</span><input id="email2"  name="email2" type="text" watermark="输入邮箱地址" class="text newMail watermark email" /></p></li>
					<li class="clearfix"><p><span>邮箱地址3</span><input id="email3"  name="email3" type="text" watermark="输入邮箱地址" class="text newMail watermark email" /></p></li>
				</ul>
				<input type="hidden" name="emailCount" value="3" />
			</div>
			<p align="right"><a class="btn1 btnsF12" href="javascript:void(0);" id="btnMailSave">保存设置</a><a class="btn3 btnsF12" href="javascript:void(0);" id="btnMailCancel">取消</a></p>
		</div>
	</div>
</form>
<script>
var jobmail = {
		initialize:function(){
			// 类别保存 
			$('#btnMailSave').click(function(){
				 var len = $('#mainContainer').find('input[type="checkbox"]:checked').length;
				 if(len<=0) {
					 $.anchorMsg("请选择需要修改的职位",{icon:'info'});
					 return;
				 }
				 $(this).submitForm({success: jobmail.successCallBack, clearForm: false});
				 return;
			});
			// 类别取消
			$('#btnMailCancel').click(function(){
				 $(this).closeDialog();
			});

			// 邮箱 
			$(':input[name="allowmail"]').click(function(){
				if($(this).val() == '0')
				{
					$('ul.modeBox').hide();
				}
				else if($(this).val() == '1')
				{
					$('ul.modeBox').show();
				}
			});	

			// 邮箱 
			$(':input[name="toMail"]').click(function(){
				if($(this).val() == '0')
				{
					$('div.twoset').hide();
				}
				else if($(this).val() == '1')
				{
					$('div.twoset').show();
				}
			});	
			$('#allSelect').bindCheckBox('hddjobID[]','#formjob');	
		},			
		successCallBack:function(result){
			if(result.status>0) {
                $.anchorMsg("批量修改邮箱成功 ", { onclose: function() {
                    $('#btnMailSave').closeDialog();
                }});
			}else{
				if(result.status==0){
					$.anchorMsg(result.msg,{icon:'fail'});
				}else{
					$.anchorMsg(result.msg,{icon:'fail'});
				}
			}
		}
	};
	jobmail.initialize();
	$("#setting .modeBox p").each(function(){
		var _this = $(this),
			_dText = _this.find("span"),
			_input = _this.find("input[type='text']");
		_this.click(function(){
			_dText.hide();
			_input.focus();
		});
		_input.blur(function(){
			if(/^[　\s]*$/.test($(this).val())){
				_dText.show();
			}
		});
	});
</script>
</body>
</html>