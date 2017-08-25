
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
	<input type="hidden" name="type" value="linkWay">
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
			<h3 class="tit">联系方式设置</h3>
			<label class="select"><input type="radio" name="showLinkway" id="conW1" value="0" checked="checked" />不向求职者展示联系方式（不想受到骚扰）</label>
			<label class="select"><input type="radio" name="showLinkway" id="conW2" value="1" />展示联系方式（愿意接受求职者咨询）</label>
			<div class="twoset" style="display:none;">
				<label class="newMode"><input type="radio" name="newLinkway" id="way1" value="0" checked="checked" />使用企业联系方式</label>
				<p>{$com['comUser']}（{$com['comPhone']}）</p>
				<label class="newMode"><input type="radio" name="newLinkway" id="way2" value="1"/>使用新的联系方式</label>
				<ul class="modeBox" style="display: none">
					<li class="clearfix"><p><span>联系人1</span><input id="txtLinkMan1"  name="txtLinkMan1" type="text" watermark="联系人"  class="text name conPeople watermark" />
						</p><p><span>联系电话1</span><input id="txtLinkTel1"  name="txtLinkTel1" type="text" watermark="联系电话" class="text tel conPhone watermark" /></p></li>
					<li class="clearfix"><p><span>联系人2</span><input id="txtLinkMan2"  name="txtLinkMan2" type="text" watermark="联系人"  class="text name conPeople watermark" />
						</p><p><span>联系电话2</span><input id="txtLinkTel2"  name="txtLinkTel2" type="text" watermark="联系电话" class="text tel conPhone watermark" /></p></li>
					<li class="clearfix"><p><span>联系人3</span><input id="txtLinkMan1"  name="txtLinkMan3" type="text" watermark="联系人"  class="text name conPeople watermark" />
						</p><p><span>联系电话3</span><input id="txtLinkTel1"  name="txtLinkTel3" type="text" watermark="联系电话" class="text tel conPhone watermark" /></p></li>
				</ul>
				<input type="hidden" name="newLinkWayCount" value="3" />
			</div>
			<p align="right" class="mgt15"><a class="btn1 btnsF12" href="javascript:void(0);" id="btnSortSave">保存设置</a><a class="btn3 btnsF12" href="javascript:void(0);" id="btnSortCancel">取消</a></p>
		</div>
	</div>
</form>


<script>
var joblinkway = {
		initialize:function(){
			// 类别保存 
			$('#btnSortSave').click(function(){
				 var len = $('#linkwayContainer').find('input[type="checkbox"]:checked').length;
				 if(len<=0) {
					 $.anchorMsg("请选择需要修改的职位",{icon:'info'});
					 return;
				 }
				 $(this).submitForm({success: joblinkway.successCallBack, clearForm: false});
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
                $.anchorMsg("批量修改联系方式成功 ", { onclose: function() {
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
	joblinkway.initialize();
	
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