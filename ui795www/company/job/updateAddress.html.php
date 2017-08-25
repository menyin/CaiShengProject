
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
	<input type="hidden" name="type" value="address">
	<div class="dialogCont set-contact clearfix" style="width:750px;">
		<div class="list">
			<p class="all"><label><input type="checkbox" id="allSelect" checked="checked"/>全选</label></p>
			<ul id="linkwayContainer">
			<!--{loop $jobList $k $l}-->
				<li>
					<a href="javascript:void(0)"><label for="hddjobID{$l['_jid']}"><input type="checkbox" id="hddjobID{$l['_jid']}" name="hddjobID[]" value="{$l['_jid']}" checked="checked"/>{$l['jname']}</label></a>
					<p>{$l['linkWay']}</p>
				</li>
			<!--{/loop}-->
			</ul>
		</div>
		<div class="setting" id="setting">
			<h3 class="tit">工作地点设置</h3>
			<input type="text" name="address" id="address" value="" class="text" style="width:300px; margin-bottom:10px;">
			<p align="right" class="mgt15"><a class="btn1 btnsF12" href="javascript:void(0);" id="btnSortSave">保存设置</a><a class="btn3 btnsF12" href="javascript:void(0);" id="btnSortCancel">取消</a></p>
		</div>
	</div>
</form>


<script>
var jobAddress = {
		initialize:function(){		
			// 类别保存 
			$('#btnSortSave').click(function(){
				 var len = $('#linkwayContainer').find('input[type="checkbox"]:checked').length;
				 if(len<=0) {
					 $.anchorMsg("请选择需要修改的职位",{icon:'info'});
					 return;
				 }
				 $(this).submitForm({success: jobAddress.successCallBack, clearForm: false});
				 return false;
			});
			// 类别取消
			$('#btnSortCancel').click(function(){
				 $(this).closeDialog();
			});

			$(':input[name="showLinkway"]').click(function(){
				if($(this).val() == '0')
				{
					$('div.twoset').hide();
				}
				else if($(this).val() == '1')
				{
					$('div.twoset').show();
				}
			});
			$(':input[name="newLinkway"]').click(function(){
				if($(this).val() == '0')
				{
					$('ul.modeBox').hide();
					$('ul.modeBox').find(':input').attr('disabled','disabled');
				}
				else if($(this).val() == '1')
				{
					$('ul.modeBox').show();
					$('ul.modeBox').find(':input').attr('disabled',false);
				}
			});
			$('#allSelect').bindCheckBox('hddjobID[]','#formjob');
		},	
		successCallBack:function(result){
			if(result.status>0) {
                $.anchorMsg("批量修改工作地点成功 ", { onclose: function() {
                    $('#btnSortSave').closeDialog();
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
	jobAddress.initialize();
	
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