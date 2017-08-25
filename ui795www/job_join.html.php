<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1"><title>
</title>
	<style type="text/css">
	.letTer{ width:525px; clear:both; padding:10px 0 20px;}
	.letTer .team{ height:50px;}
	.letTer .team .teamL{ width:120px;}
	.letTer .team .teamR{ width:380px;}
	.letTer .team .textarea{ width:300px;}
	.letTer .team .inputText{ width:200px;}
	.letTer .team .teamR .verRadio{ margin-left:10px;}
	.letTer .team .teamR .verTxt{font-size:14px;margin:0px;margin-top:9px;}
	.letTer .team .teamR .verTxt a:link,.letTer .team .teamR .verTxt a:visited{margin-left:10px;color:#2094D1;}
	.letTer .team .teamR .verTxt a:hover{color:#16a6f2;}
	.letTer .team .teamR .checkBox{ margin:0 5px 0 0; vertical-align:middle;}
	.letTer .team .teamR .verRadio label{ margin-right:10px;}
	.letTer .team .teamR .verSelectBg{ margin-right:10px;}
	</style>

</head>
<body>
	<div class="letTer">
		<div class="team">
			<div class="teamL">选择投递的简历：</div>
			<div class="teamR">
				<span class='verSelect' >
					<input type='hidden' id='selResume' name='selResume' value='{$resumes[0][rid]}' />
					<span class='verSelectBg' onclick='toggleItemLi(this)'>
						<span  style='width:120px; _width:114px;' class='verSelectTxt'>{$resumes[0][rname]}</span>
					</span>
					<span  style='width:156px;*width:150px;' class='verSelectCon'>
						<ul>
							<!--{loop $resumes $resume}-->
							<li onclick='chooseItem(this,false,"");return false;'><a href='javascript:void(0);' title='{$resume[rname]}' theValue='{$resume[rid]}'>{$resume[rname]}</a></li>
							<!--{/loop}-->
						</ul>
					</span>
				</span>
			</div>
			<div class="clear"></div>
		</div>
		<!--
		<div class="team" style="height:175px;">
			<div class="teamL">求职信：</div>
			<div class="teamR">
				<span class='verSelect'  style='margin-bottom:15px;'>
					<input type='hidden' id='selPersonLetter' name='selPersonLetter' value='' />
					<span class='verSelectBg' onclick='toggleItemLi(this)'>
						<span  style='width:120px; _width:114px;' class='verSelectTxt'>请选择求职信</span>
					</span>
					<span  style='width:156px;*width:150px;' class='verSelectCon'>
						<ul>
							<li class='cu' onclick='chooseItem(this,false,"");return false;'><a href='javascript:void(0);' title='请选择求职信' theValue=''>请选择求职信</a></li>
						</ul>
					</span>
				</span>
				<span class="verTextarea" style="margin-bottom:15px; clear:both;"><textarea class="textarea" id="txtLetter" name="txtLetter" style="width:300px;"></textarea></span>

			</div>
			<div class="clear"></div>
		</div>
		-->

		<div class="team">
			<div class="teamL"></div>
			<div class="teamR">
				<a href="javascript:void(0);" id="btnDoApply" class="btn8"><b class="L"></b><b class="R"></b>马上投递</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			// 马上投递
			$("#btnDoApply").click(function() {
				var rid;
				rid=$("#selResume").val();
				$.getJSON('/jobSearch.html?act=join&jid={$jid}&rid='+rid, '', function(data) {
					if (data.error) {
						$.anchorMsg(data.error, { icon: 'fail' });
						showBox.close();
						return;
					}
					if (data.fail) {
						$.anchorMsg(data.fail, { icon: 'fail' });
						showBox.close();
						return;
					}
					if (data.IsAttention) {
						$.anchorMsg('您已经投递过此职位，请勿重复投递！', { icon: 'warning' });
						//$('#btnAttention').hide();
						//$('#btnCancelAttention').css("display", "inline-block");
						showBox.close();
						return;
					}
					//$('#btnAttention').hide();
					//$('#btnCancelAttention').css("display", "inline-block");				
					$('#attentionCount').html(parseInt($('#attentionCount').html())+1);
					showBox.close();
					$.anchorMsg('简历投递成功！');
					return;
				});
			});
		});

	</script>
</body>
</html>