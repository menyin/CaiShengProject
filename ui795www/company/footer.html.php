<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=20140312"></script>
<div id="sus" class="sus"><a class="backTop jpFntWes" title="返回顶部" href="javascript:void(0);" style="display: none;">&#xf0d8;</a></div>

<footer>
	<div class="footerNav">
		<a target="_blank" href="/about/about.html">关于我们</a>
		|
		<a target="_blank" href="/about/statement.html">网站声明</a>
		|

		<a target="_blank" href="/about/service.html">招聘服务</a>
		<!-- |
		<a target="_blank" href="#">帮助中心</a>
		|
		<a target="_blank" href="#">诚聘英才</a> -->
		|
		<a target="_blank" href="/about/friend.html">友情链接</a>
		|
		<a target="_blank" href="/about/adprice.html">广告发布</a>
		|
		<a target="_blank" href="/about/contact.html">联系我们</a>

	</div>
	<div class="copyright">
		<p>&copy;{$curYear}&nbsp;597人才网&nbsp;版权所有</p>
	</div>
</footer>

<div class="dgBox openSrvBox" id="openSrvBox" style="display:none;">
	<div class="openTxt">
		<p class="txt">HI,{$user[username]}</p>
		<p>抱歉，系统检测到您的企业资料并未填写完整，为了获得更多应聘者的青睐，您需要完善企业资料，到'账户管理'->'企业资料' 填写基础的联系方式！</p>
		<dl>
			<dt>完善企业资料后：</dt>
			<dd>1、求职者才可以看到您发布的职位并进行投递。</dd>
			<dd>2、查看并获得（下载）简历的联系方式。</dd>
		</dl>
		<!--
		<dl>
			<dt>您的招聘顾问：</dt>
			<dd>
				<div class="photoImg"><img src="http://cdn.597.com/img/common/userPic.jpg"/></div>
				<div class="txt">
					<p>苏经理</p>
					<p></p>
							<p style="font-size: 12px; line-height: 24px;">400-8108-597</p>
							<p style="font-size: 12px; line-height: 24px;">0592-5904668</p>
							<p style="margin-top: 5px;"><a target="_blank" href="#"><img border="0" src="http://wpa.qq.com/pa?p=2:1920093251:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
											</div>
				<div class="clear"></div>
			</dd>
		</dl>
		-->
	</div>
	<div class="btn"><a href="javascript:void(0);" onclick="$(this).closeDialog();" class="btn1 btnsF14">我知道了</a></div>
</div>

<div id="needTurn" style="display:none;">{$isNeedTurn}</div>
<script type="text/javascript">
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(document).scrollTop() > 120){
			$('#sus').find('a.backTop').css({'display':'inline-block'});
		}else{
			$('#sus').find('a.backTop').css({'display':'none'});
		}
	});

	$('#sus').find('a.backTop').click(function(){
		$('html,body').animate({ scrollTop: 0 });
	});
	var needTurn=$('#needTurn').html();
	$('#cssNavsJob').click(function(){
		if($('#needTurn').html()==1){
			openSrvBox = $.showModal('#openSrvBox',{title:'温馨提示',contentType:'selector'});
		}else{
			window.location.href='/company/resume/apply.html';
		}
	});
	$('#cssNavsZhiwei').click(function(){
		if($('#needTurn').html()==1){
			openSrvBox = $.showModal('#openSrvBox',{title:'温馨提示',contentType:'selector'});
		}else{
			window.location.href='/company/job';
		}
	});
	$('#addJobLnk').click(function(){
		if($('#needTurn').html()==1){
			openSrvBox = $.showModal('#openSrvBox',{title:'温馨提示',contentType:'selector'});
		}else{
			window.location.href='/company/job/job.html?act=edit';
		}
	});
	$('#searchResume').click(function(){
		if($('#needTurn').html()==1){
			openSrvBox = $.showModal('#openSrvBox',{title:'温馨提示',contentType:'selector'});
		}else{
			window.location.href='/company/resume/search.html';
		}
	});
	$('#cssNavsService').click(function(){
		if($('#needTurn').html()==1){
			openSrvBox = $.showModal('#openSrvBox',{title:'温馨提示',contentType:'selector'});
		}else{
			window.location.href='/company/service/myservice.html';
		}
	});
	$('#cssNavsMessage').click(function(){
		if($('#needTurn').html()==1){
			openSrvBox = $.showModal('#openSrvBox',{title:'温馨提示',contentType:'selector'});
		}else{
			window.location.href='/company/message/';
		}
	});
	$('#cssNavsHelp').click(function(){
		window.location.href='/company/help/help1.html';
	});
	$('.btnRefreshtip').click(function(){
		companysettingbox.close();
	});

	var loginInfoTime = $.cookie("loginInfo{$com['_cid']}"),
		curTime = Math.round(new Date().getTime()/1000);

	if(typeof(loginInfoTime)=='undefined'||curTime>loginInfoTime){
		$.ajax({
			type: "POST",
			url:"/api/web/company.api",
			data:{act:"loginLog",cidHash:"{$com['cid']}",loginType:"19"},
			dataType:"json",
			success:function(data){
				if(data.status>0){
					$.cookie("loginInfo{$com['_cid']}",data.time,3600*24);
				}
			}
		})
	}
});

</script>

<!--
<section class="floatRT"><a href="/about/message.html" target="_blank" class="serviceLink">我有问题要反馈</a><b></b></section>
-->
<section class="floatRT"><a href="/about/indexfeed.html"  target="_blank" class="serviceLink">我有问题要反馈</a><b></b></section>
