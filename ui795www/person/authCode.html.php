<style>
	#validateCode {padding:10px 10px 0px 10px; overflow:hidden;}
	.vcode {width:80px;height: 26px;line-height: 26px;text-indent: 0.5em;}
	.vcode,img,a{ display: inline-block;vertical-align: middle;}
	.vcodBtn{ display: block;width:80px; height: 26px; background-color: #3d86bc; color: #fff; text-align: center; text-decoration: none; line-height: 26px;}
	.vcodBtn:active{ background-color: #1368a9;}
	.btn1.vbtn{padding: 5px 15px;line-height: 24px; height: 24px; margin:10px 0 5px 0px;}
	.err {color: red; margin-left: 10px}
</style>
<div id='validateCode'>
	<p></p>
    <form id="form" onsubmit="return false">
        <input type="hidden" name="txtMobile" value="{$txtMobile}" />
        <input type='text' name="inputCode" class="vcode"/>
        <input type="hidden" name="key" value="applyReg">
        <input type="hidden" name="act" value="authCode">
        <img class="vcode" src="/api/web/authCode.api?key=applyReg" />
        <a href='javascript:void(0)' class='change'>换一换</a>
    
        <p class="err" style="display:none"></p>
        <a href="javascript:void(0)" id="validatSubmit" class="btn1 btnsF16 vbtn">确&nbsp;认</a>
    </form>
</div>
<script type="text/javascript">

try {
	jpjs.use(factory);
} catch (e){
	factory($);
}

function factory($){
	
	//$("#validateCode").on("click", ".change", function() {
	//	$("img.vcode").attr('src', "/api/web/authCode.api?key=applyReg");
	//});
	$('.change').click(function(){
		$("img.vcode").attr('src', "/api/web/authCode.api?key=applyReg");
	});

	$("#validatSubmit").on("click", function() {
		var _this = $(this);
		$.ajax({
			url : "/api/web/user.api",
			type : "POST",
			data : $('#form').serialize(), 
			dataType : "JSON",
			success : function(data) {
				if (data && data.status<1) {
					$(".err").text(data.msg);
					$(".err").show();
				} else {
					if(_this[0].trigger){
						_this[0].trigger('close');
					} else {
						_this.closeDialog();
					}
					$('#btnSendMsg').html('<i>59</i>秒后可重新获取验证码').addClass('btn3Unclick').removeClass("clickValidate");
					interval = window.setInterval(window.registerM.countdown, 1000);
				}
			}
		});
	});

	$(".vcode").on("focus", function() {
		$(".err").hide();
	});
}
</script>
