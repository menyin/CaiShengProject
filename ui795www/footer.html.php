<footer>
	<p>©copyright:{$curYear} 597人才网 版权所有</p>
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
		<a target="_blank" href="/about/adprice.html">首页发布</a>
		|
		<a target="_blank" href="/about/contact.html">联系我们</a>
		|
		<a target="_blank" href="/about/price.html">收费标准</a>
	</div>
	<!-- <div class="copyright">
		<p>&copy;2015&nbsp;597人才网&nbsp;版权所有</p>
	</div> -->
	<div class="copyright">
		 网站备案/许可证号：闽ICP备09001341号-14<span style="margin:0 5px;">  | </span>增值电信业务经营许可证：闽B2-20120056<span style="margin:0 5px;">  | </span>人力资源服务许可证：350200RL1010 <br>
		招聘单位无权收取任何费用,请求职人员加强自我保护意识,按劳动法规保护自身权益,警惕虚假招聘,避免上当受骗!
	</div>
	<div class="copyright">
		{$domainInfo['footer']}
	</div>
</footer>
<!-- <section class="floatRT">
<a href="/about/message" target="_blank" class="serviceLink">我有问题要反馈</a> <b></b>
</section> -->

<!--ke 页面不显示-->
<!--{if $isKe!=1}-->
<a href="/download/app/" class="app_download" id="ewm_tips" target="_blank" style=" ">
	<img src="http://cdn.597.com/img/common/ewm_tel.jpg" style="margin-left:3px;" />
	<div class="ewm_imgs">
		<dl class="dl_01">
			<dt><i class="jpFntWes ewm_ico"></i>手机版m.597.com</dt>
			<dd><img src="http://cdn.597.com/img/common/mobileIco.png"  /></dd>
		</dl>
		<dl class="dl_01">
			<dt><img class="ewm_ico" src="http://cdn.597.com/img/common/weixinLogo.jpg" alt="" />微信公众号</dt>
			<dd><img src="http://cdn.597.com/img/common/wxCode.png"  /></dd>
		</dl>
		<dl>
			<dt>求职者app下载</dt>
			<dd><img src="http://cdn.597.com/www/img/brus/codeCom.png"  /></dd>
		</dl>
	</div>
</a>
<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODA2NjYzMV8zNDgzMjVfNDAwODA2MDU5N18yXw" target="_blank" id="qqzx"><img src="http://cdn.597.com/img/common/index_qqico.png" ><p>QQ咨询</p></a>
<a href="/about/indexfeed.html" id="fankui" target="_blank">意见<br>反馈</a>
<a href="/download/app/" class="app_download" target="_blank;">App <br>下载</a>
<div id="sus" class="sus">
	<a class="backTop jpFntWes" title="返回顶部" href="javascript:void(0);" style="display: none;">&#xf0d8;</a>
</div>
<!--{/if}-->

<script type="text/javascript">
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(document).scrollTop() > 120) {
				$('#sus').find('a.backTop').css({
					'display': 'inline-block'
				});
			} else {
				$('#sus').find('a.backTop').css({
					'display': 'none'
				});
			}
		});

		$('#sus').find('a.backTop').click(function() {
			$('html,body').animate({
				scrollTop: 0
			});
		});
	});
</script>
<script src="//cdn.597.com/tongji.js?v=20160317" language="JavaScript"></script>