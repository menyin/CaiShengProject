<style type="text/css">
	.formMod{padding: 10px;}
	.formBtn{text-align: right; padding: 20px;}
	.formMod{margin-bottom:15px;}
	.formMod .l{float:left;display:inline;height:30px;line-height:30px; text-align:right;font-size:14px;margin-right:10px;color:#6c6c6c}
	.formMod .l i{color:#de0000;font-style:normal;margin:0 0 0 5px;width:12px;display:inline-block;}
	.formMod .r{float:left;display:inline;}	
/*输入框*/
.formText{float:left;display:inline; position:relative; z-index:1;}
.formText label.txtLabel{color:#999; position:absolute;font-size:14px;left:7px;top:4px;left:6px \9\0;top:5px \9\0;*left:6px;*top:5px; cursor:text;}
.formText input.text{height:28px;line-height:28px;border:1px solid #cfcfcf;border-right:1px solid #e8e8e8;border-bottom:1px solid #e8e8e8;padding:0 5px;color:#333;background:#fff;font-size:14px;}/*输入框默认状态*/
.formText input.text::-ms-clear{display:none;}
.formText input.text::-ms-reveal{display:none;}
.formText input.textGray{color:#ccc;}/*输入框默认灰色文字状态*/
.formText input.textDis{background:#f2f2f2;color:#ccc;}
.formText input.error{height:28px;line-height:28px;border:1px solid #f1aaa9;background:#fff3f3;box-shadow:0 0 3px #f1aaa9;}/*输入框判断错误*/
.formText input.focus{height:28px;line-height:28px;border:1px solid #9fcdd6;background:#f2fcfe;box-shadow:0 0 5px #9fcdd6;}
.formText input.disText{background:#f3f3f3;}
.formMod .tipTxt{float:left;display:inline;margin-left:5px;height:30px;line-height:30px;font-size:12px;}
.formMod .tipAry{color:#999;}
.formMod .tipEro{color:#b63d31;}
.formMod .tipEro i{font-size:16px;margin:0 3px 0 0;}
.formMod .font14{font-size:14px;}
/*文本域*/
.formTextarea{float:left;display:inline;position:relative; z-index:1;}
.formTextarea label.txtLabel{color:#999; position:absolute;font-size:14px;left:7px;top:4px;left:6px \9\0;top:5px \9\0;*left:6px;*top:5px; cursor:text;}
.formTextarea textarea.textarea{width:425px;height:140px;border:1px solid #cfcfcf;border-right:1px solid #e8e8e8;border-bottom:1px solid #e8e8e8;color:#333;background:#fff;font-size:14px;line-height:28px;display:block;padding:0 0 0 5px;}
.formTextarea .textareaTxt{display:block;height:22px;line-height:22px;background:#f2f2f2;font-style:italic;width:447px; text-align:right;padding:0 10px 0 0;font-size:12px;color:#999;}
.formTextarea .textareaTxt i{font-style:italic;color:#333;font-size:14px;font-weight:bold;margin:0 5px;}
.formTextarea textarea.error{border:1px solid #dfc1c1;background:#fff3f3;box-shadow:0 0 3px #f1aaa9;}
.formTextarea textarea.focus{border:1px solid #9fcdd6;background:#F2FCFE;box-shadow:0 0 5px #9fcdd6;}
.fonted{color:#F00;}
</style>
<form id="formjobadd" method="post" action="/api/web/company.api">
	<div class="formMod">
		<div class="l">面试邀请主题<i></i></div>
		<div class="r">
			<span class="formText">
				<input type="text" style="width:235px;" value="{$inviteInfo[inviteTitle]}" name="txtTitle" readonly="readonly" id="txtTitle" class="text">
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formMod">
		<div class="l">面试邀请内容<i></i></div>
		<div class="r">
			<span class="formTextarea">
				<textarea class="textarea" name="txtContent" id="txtContent" readonly="readonly">{$inviteInfo[inviteContent]}</textarea>
			</span>
		</div>
		<div class="clear"></div>
	</div>
	<div class="formBtn">
		<!--{if $doTime<3600*24&&$uid}-->
			<input type="hidden" name="act" value="invite">
			<span class="fonted">注：一天内可改同意状态&nbsp;&nbsp;</span>
			<a href="javascript:void(0);" class="btnsF12 btn1" id="Sure">同意参加面试</a>
			<a href="javascript:void(0);" class="btnsF12 btn1" id="notSure">不同意参加面试</a>
		<!--{else}-->
		<!--{/if}-->
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<!--{if $inviteInfo[isAgree]==1}-->
			<p style="font-size:14px;">同意参加面试!</p>
		<!--{/if}-->
		<!--{if $inviteInfo[isAgree]==-1}-->
			<p style="font-size:14px;">不同意参加面试!</p>
		<!--{/if}-->		
	</div>
</form>
<script>
	$(document).ready(function(){
		$('#Sure').click(function(){
			var inviteId='{$inviteInfo[_inviteId]}';
			$.confirm('确定参加面试?','',function(){
				$.getJSON('/api/web/person.api?act=joininvite', {inviteId:inviteId,Agree:1},function(data) {
					if(data.status==1){
						$.anchor(data.msg,{icon:'success'});
					}else{
						$.message(data.msg,{ icon: 'fail' });
					}
					window.parent.thewinbox.close();
				});
			});
		});
		$('#notSure').click(function(){
			var inviteId='{$inviteInfo[_inviteId]}';
			$.confirm('确定不参加面试?','',function(){
				$.getJSON('/api/web/person.api?act=joininvite', {inviteId:inviteId,Agree:-1},function(data) {
					if(data.status==1){
						$.anchor(data.msg,{icon:'success'});
					}else{
						$.message(data.msg,{ icon: 'fail' });
					}
					window.parent.thewinbox.close();
				});
			});
		});
	});
</script>