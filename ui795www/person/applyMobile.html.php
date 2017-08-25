
<style>
	#validateCode {padding:20px 0px 20px 40px; overflow:hidden; text-align: left;}
	.vcode {width:80px;height: 26px;line-height: 26px;text-indent: 0.5em;}
	.vcode,img,a{ display: inline-block;vertical-align: middle;}
	.vcodBtn{ display: block;width:80px; height: 26px; background-color: #3d86bc; color: #fff; text-align: center; text-decoration: none; line-height: 26px;}
	.vcodBtn:active{ background-color: #1368a9;}
	.btn1.vbtn{padding: 5px 15px;line-height: 24px; height: 24px; margin:10px 0 5px 0px;}
	.err {color: red; margin-left: 10px}
	.vcode01{color: #333; margin-bottom: 15px;font-family: "微软雅黑";font-size: 18px; background: url("http://cdn.597.com/img/common/appealIcon01.png") left center no-repeat; padding-left:24px;}
	.vcode01 span{ color: #f00;font-family: "微软雅黑"; font-size: 18px;}
	.vcode02 { margin-bottom: 8px;}
	.vcode02 span,.vcode02 a{ display: inline-block; vertical-align: middle; font-family: "微软雅黑"}
	.vcode02 a{ padding: 4px 18px; background: #09c; color: #fff; border-radius: 4px; margin-left: 8px;}
	.vcode02 a:hover{ color: #fff; background: #00ace5; }
	.vcode02 span{width:230px;}
</style>
<div id='validateCode'>
	<p class="vcode01">该号码已被<span>"{$resumeInfo['realname']}"</span>注册</p>
	<p class="vcode02"><span>1.若是你本人请选择找回密码</span><a href="/person/findpassword.htm" >找回密码</a></p>
	<p class="vcode02"><span>2.若不是你本人请选择继续注册</span><a href="javascript:void(0)" id="continueBtn">继续注册</a></p>
</div>
