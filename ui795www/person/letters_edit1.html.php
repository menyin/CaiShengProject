<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>求职中心 我的597-597人才网(597.com)</title>	
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback.css?v=20130822" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback_cindex.css?v=20130822" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.validate.js?v=20110601"></script>
</head>
<body>
<!--{template person/header}-->

	<div class="container">
		<div class="containerCon">
			<!--{template person/index_left}-->
			<div class="right">

				<div class="crumbs"><b>您的位置：</b><a href="/">首页</a>&gt;<a href="/person/index.html">求职中心</a>&gt;<span>我的简历</span>&gt;<span>求职信管理</span></div>
				<div class="part">
					<div class="tag">
						<!--基本内容开始-->
						<form id="formCompanyInfoMofidy" action="/person/letter.html" method="post" autocomplete="off">
						<input type="hidden" name="act" value="save" />
						<input type="hidden" name="from" value="{$from}" />
						<input type="hidden" name="ltid" value="{$ltid}" />
						<div class="tagC">
							<div class="tagCon">
								<div class="cImage">
									<div class="cImageT"><h4><!--{if $ltid>0}-->修改求职信模板<!--{else}-->新增求职信模板<!--{/if}--></h4></div>
									<div class="cImageC">
										<div class="teamLst">
											<div class="team">
												<div class="teamL"><i>*</i>模板名称</div>
												<div class="teamR">
													<span class="verText">
														<input id="letter[letterName]" name="letter[letterName]" value="{$letter[letterName]}" class="inputText" type="text" />
													</span>
												</div> 
											</div>
											<div class="team">
												<div class="teamL"><i></i>模板内容</div>
												<div class="teamR">
													<span class="verText">
														<input id="letter[letterContent]" name="letter[letterContent]" value="{$letter[letterContent]}" class="inputText" type="text" />
													</span>
												</div> 
											</div>
											
											<div class="team">
												<div class="teamL"></div>
												<div class="teamR">
													<div class="teamBtn"><a href="javascript:void(0)" id="btnSaveCompanyInfo" class="btn8"><b class="L"></b><B class="R"></b>保存</a></div>
												</div> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</form>
						<!--基本内容结束-->
				  </div>   
				</div>

				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
<!--{template footer}-->

<script type="text/javascript" language="javascript">
	var formCompanyInfoValid = $('#formCompanyInfoMofidy').validate({
		rules: {
			'letter[letterName]': { required:true,rangelength: [1, 16] },
			'letter[letterContent]':{numrequiredber: true}
		},
		messages: {
			'letter[letterName]': { required: '请输入模板名称',rangelength: '请输入1-16位字符' },
			'letter[letterContent]':{required: '请输入模板内容'}
		},
		focusInvalid: true,
		errorElement: "span",
		errorClass: "verJudgeError",
		errorPlacement: function(error, element) {
			if ($(element).is(":hidden")) {
				error.insertAfter($(element).closest('span'));
			} else {
				error.insertAfter($(element).parent());
			}
		},
		highlight: function(element) {
			$(element).addClass("textError");
		},
		unhighlight: function(element) {
			$(element).removeClass("textError");
		},
		success: "verJudgePass"
	});

	
	$(document).ready(function() {
		//提交数据
		$('#btnSaveCompanyInfo').click(function() {
			$('#formCompanyInfoMofidy').submit();
			alert(1);
			return false;
		});
	}); 	

</script>
</body>
</html>
