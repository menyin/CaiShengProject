<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--    声明ie以最高的模式运行-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
<![endif]–>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style>
.cngIdBox{width:335px;font-size:12px;}
.cngIdBox .formMod .l{width:100px;}
.cngIdBox .formMod .r{width:210px;}
.cngIdBox .formBtn{margin:10px 0 0 110px;}
.cngIdBox .formBtn a{margin:0 10px 0 0;}
</style>
</head>
<body>
<div class="dgBox cngIdBox">
	<div class="cngIdForm">
		<div class="formMod">
			<div class="l">当前名称<i>&nbsp;</i></div>
			<div class="r">
			<span style="margin:0;" class="tipTxt font14" id="curWeixinName">{$name}</span>
			</div>
			<div class="clear"></div>
		</div>
		<form id="formUsername" action="/api/web/company.api?act=wxRenameNew" method="post">
			<div class="formMod">
				<div class="l">新的名称<i>&nbsp;</i></div>
				<div class="r">
					<span class="formText">
						<input type="text" id="txtName" name="txtName" style="width:158px;" class="text" value=""/>
					</span>
					<span class="tipPos">
						<span class="tipLay">
						</span>
					</span>
				</div>
				<div class="clear"></div>
			</div>
			<input type="hidden" name="wxuid" id="wxuid" value="{$id}">
			<div class="formBtn" style="text-align:center;">
				<a href="javascript:void(0)" id="btnSure" class="btn1 btnsF14">确定</a>
				<a href="javascript:void(0)" id="btnCancel" class="btn3 btnsF14">取消</a>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">

	$('#btnSure').click(function(){
		var txtName = $('#txtName').val();
		if(txtName==''){
			$.message('新的名称不能为空');
			return;
		}
		$('#btnSure').submitForm({beforeSubmit: '', success: function(data){
			if(data.status==1){
				$.anchor(data.msg);
				window.location.href = window.location.href;
			}else{
				$.anchor(data.msg,{icon:'fail'});
			}
		}, clearForm: false });
		return false;
	});
	$('#btnCancel').click(function(){
		$(this).closeDialog();
	});
</script>
</body>
</html>