
<style>
.pReg .regL .thrdLogin{ margin:0; padding:0;}
.thrdLogin{ background:#e8f5fe; text-align:center; font-size:16px;}
.regL{ float:none;}
.reg{ border-radius:4px;}
.edSucTit{ background:#e8f5fe;}
.edSucTit2{ padding:30px 0;}
.subSpan{ text-align:left;}
div.content{width:100%;}
.edSucTit2 b{ color:#3d84b8;}
.edSucTit em, .edSucTit span{ font-family:"微软雅黑";}
.edSrightx{ padding-bottom:15px;}
.edSright p span.subSpan{ font-size:14px;width:352px;}
.edSright p a{ height:30px; line-height:30px; font-size:14px;}
</style>
<div class="content" id="content">
	<div class="reg pReg">
		<div class="regL" style="width:1000px;">
			<div class="edSucTit">
				<em></em><span>恭喜您，简历创建成功</span>
			</div>
			<div class="edSright edSrightx">
				<p style="padding-top:28px;"><span class="subSpan" style="text-align:left;">现在您可以直接投递简历申请职位了</span><a class="blue" href="javascript:void(0)" id="btnRegisterApplyJob">立即投递</a></p>
			</div>
			<div class="edSright edSrightx">
			<p style="padding-top:0px;"><span class="subSpan" style="text-align:left;">您的简历还可以更丰富，您可以继续为您的简历加分</span><a class="blue" href="/person/resume/" target="_blank">完善简历</a></p>
					
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jpjs.use('@checkLogin, @confirmBox', function(m){
	var dialog = m['product.checkLogin'].dialog,
		checkLogin = m['product.checkLogin'],
		confirmBox = m['widge.overlay.confirmBox'],
		$ = m['jquery'],
		pWidth = 70,
		fontWidth = 18;
		
	$('#btnRegisterApplyJob').click(function(){
			$.getJSON('/api/web/job.api?act=join&jid={$jid}', '' , function(data) {
				if (data && data.status) {
					if (data.status==-1){
						checkLogin.isLogin();
						checkLogin.dialog.resetSize(498);
						return;
					}
					if (data.status<1){
						confirmBox.timeBomb(data.msg, {
							name: 'fail',
							width: pWidth + data.msg.length * fontWidth
						});
					}
					if (data.status>=1){
						confirmBox.timeBomb(data.msg, {
							name: 'success',
							width: pWidth + data.msg.length * fontWidth
						});
						window.location.reload();
					}
				}
			});

		/*	
		$.getJSON('/apply/getresumeinfo/', function( result) {
			if(result.status && result.data.resumecount==1) {
				location.href = '/apply/apply/jobflag-job5ftgvc2-resumeId-'+result.data.default_resume_id+'';
			}else {
				dialog.setContent({
					content: '/apply/index/jobflag-job5ftgvc2'+'-v-'+Math.random(),
					isOverflow: true
				}).resetSize(586, 'auto').show();			
			}
		});  
		*/

	});
});
</script>


