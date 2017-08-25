
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="Keywords" content="{$news['detail_title']}_{$domainInfo['region_name_short']}597人才网" />
<meta name="Description" content="{$domainInfo['region_name_short']}597人才网 {$domainInfo['region_name_short']}597人才网HR资讯 {$news['category']} {$news['detail_title']}" />
<title>{$news['detail_title']}_{$domainInfo['region_name_short']}597人才网</title>
<!–[if lt IE9]>
<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>  
<![endif]–>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/front.css?v=20150226" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/campus.css?v=20150226" />
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>	
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
<script type="text/javascript">
window.CONFIG = {
	HOST: 'http://cdn1.597.com/min/??',
	COMBOPATH: '/js/v2/'
}
</script>
<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20150116"></script>
<script type="text/javascript">
jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
<style>
/*焦点图*/
.slider{ width:960px; height:400px;padding:30px 0;}
</style>
</head>
<body>

<!--{template header}-->
<div class="content">
	<img src="http://pic.597.com/news/{$news['banner_url']}">
	<div class="bread"><a href="/" id="hrnewsCity">{$domainInfo['region_name_short']}597人才网</a>&gt;<a href="/qyzf/">专访</a>&gt;<a href="/qyzf/{$_url}/">{$news['category']}</a>&gt;<span id="title">{$news['detail_title']}</span></div>
	<div class="campus">
		<div class="left" style="width:700px;">
			<div class="artInfo leftPart">
				<div class="bd">
					<h1>{$news['detail_title']}</h1>
					<h2>
						<span style="width:160px;float:left;">专访时间：{$news['zf_time']}</span>
						<!--{if $news['detail_cid']==58}--><span>专访企业：<a href="/com-{$news[c_id]}/" target="_blank">{$news['cname']}</a></span><!--{/if}-->
						<span style="width:140px;float:right;">责任编辑：{$news['zf_author']}</span>
					</h2>
					<div style="display:block; float:right; margin-right:10px;">
						<div class="share"><b>分享到：</b><a href="javascript:void(0);" class="weixin" id="shareWeixin" title="分享至微信"></a><a href="javascript:void(0);" class="sina" id="shareSina" title="分享至新浪微博"></a><a href="javascript:void(0);" class="txweibo" id="shareTengXun" title="分享至腾讯微博"></a><a href="javascript:void(0);" class="qzone" id="shareQQ" title="分享至QQ空间"></a><a href="javascript:void(0);" class="renren" id="shareRenRen" title="分享至人人网"></a>
							<div class="weixinBox">
								<span class="close"></span>
								<img src="http://s.jiathis.com/qrcode.php?url=http://m.597.com/qyzf/detail.html?id={$news['detail_id']}" alt="" width="200" height="200" />
								<p style="margin-left:12px; width:170px; ">扫描二维码，分享到微信！</p>
							</div>
						</div>
					</div>
					<div class="txt">
						{$news['detail_content']}
						<!--{if $news['detail_cid']==58}-->
						<a href="/com-{$news[c_id]}/" target="_blank">了解更多【{$news['cname']}】招聘信息请点击 </a>
						<!--{/if}-->
					</div>
					<div class="bot">
						<!--<div class="lastUp">最后更新:</div>-->
						<div class="share"><b>分享到：</b><a href="javascript:void(0);" class="weixin" id="shareWeixinList" title="分享至微信"></a><a href="javascript:void(0);" class="sina" id="shareSina" title="分享至新浪微博"></a><a href="javascript:void(0);" class="txweibo" id="shareTengXun" title="分享至腾讯微博"></a><a href="javascript:void(0);" class="qzone" id="shareQQ" title="分享至QQ空间"></a><a href="javascript:void(0);" class="renren" id="shareRenRen" title="分享至人人网"></a>
						<div class="weixinBox">
								<span class="close"></span>
								<img src="http://s.jiathis.com/qrcode.php?url=http://m.597.com/qyzf/detail.html?id={$news['detail_id']}" alt="" width="200" height="200" />
								<p style="margin-left:12px; width:170px; ">扫描二维码，分享到微信！</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!--评论-->
				<div style="width:697px; float:left; margin-top:10px; border:#ddd solid 1px; background-color:#f7f7f7">
					<div style="width:100%; float:left; line-height:30px; font-size:14px; border-bottom:#ccc dashed 1px; font-weight:bold;">&nbsp;&nbsp;发表评论<a name="pl" href="#"></a></div>
					<div style="width:100%; float:left; font-size:12px; padding:10px 0;">
					<form name="plform" method="post" action="/qyzf/">
						<input type="hidden" name="source" value="0">
						<table width="682" border="0" align="center" cellpadding="0" cellspacing="0">
							<tbody><tr style="display:none;">
								<td height="30" style="padding-left:10px;">用户名：
								<input type="text" name="username" id="username" style="width:130px; height:18px; line-height:18px; border:#ccc solid 1px;">&nbsp;&nbsp;
								密码：<input type="password" name="password" id="password" style="width:130px; height:18px; line-height:18px; border:#ccc solid 1px;">&nbsp;&nbsp;
								<input name="types" type="radio" id="radio" value="per" checked="checked">
								个人用户</td>
							</tr>
							<tr>
								<td height="107" style="padding-left:10px;"><textarea name="info" id="info" cols="45" rows="5" style="width:660px; height:90px; border:#ccc solid 1px; overflow:auto;"></textarea>
								</td>
							</tr>
							<tr>
								<td style="padding-left:10px;"><a href="javascript:void(0)" class="btn1 btnsF16" id="btnApplyJob" >提  交</a><span style="color:#666">（发表的评论不能超过500字，须经管理员审核才能显示）</span></td>
							</tr>
						</tbody></table>
					</form>
					</div>
				</div>
				<!--显示评论-->
				<div class="clear"></div>
				<div id="showpl" style="width:697px; float:left;">
					<div style="width:678px; float:left; margin-top:10px; border:#a3bdf3 solid 1px; background-color:#f7f7f7;<!--{if !$comments}-->display:none;<!--{/if}-->">
						<div style="width:100%; float:left; line-height:30px; font-size:14px; border-bottom:#ccc dashed 1px; font-weight:bold;">&nbsp;&nbsp;网友评论</div>
						<!--{loop $comments $l}-->
						<div style="width:100%; float:left; font-size:12px; padding:10px 0;">
							<table width="670" border="0" align="center" cellpadding="0" cellspacing="0" style="border-bottom:#eee solid 1px; margin-bottom:10px;">
							<tbody>
								<tr>
									<td height="25" style="background-color:#eee; padding:0 10px;"><span style=" float:left; color:#3b5998; display:inline-block;padding-right:15px;">{$l['resultname']}</span><span style="float:right; color:#999">{$l['_createTime']}</span></td>
								</tr>
								<tr>
									<td style="padding:0 10px;"><span style="line-height:22px; color:#333">{$l['content']}</span></td>
								</tr>
							</tbody>
							</table>
						</div>
						<!--{/loop}-->
					</div>
				</div>

			</div>
		</div>
		<div class="right" style="width:275px;">
			<div class="rightPart">
				<div class="rec">
					<div class="hd">热门推荐</div>
					<div class="bd">
						<ul>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="txtLst">
					<ul>
					<!--{loop $tuijian $l}-->
						<li><a href="/qyzf/{$l['detail_id']}.html" target='_blank'>{$l['detail_title']}</a></li>
					<!--{/loop}-->
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<footer>
<!--{template footer}-->
</footer>
<script type="text/javascript">
jpjs.use('@checkLogin, @confirmBox', function(m){

	var checkLogin = m['product.checkLogin'],
		cookie = m['tools.cookie'],
		confirmBox = m['widge.overlay.confirmBox'],
		$ = m['jquery'],
		pWidth = 70,
		fontWidth = 18,
		isLogin =  false;
	// 投递简历按钮
/*	var applyLeft = $('#btnApplyJob').offset().left;
	var applyTop = $('#btnApplyJob').offset().top - 10;
	
	$(window).scroll(function(){
		if($(window).scrollTop() > applyTop){
			$('#btnApplyJob').css({
				position : 'fixed',
				top : 10,
				left : applyLeft
			});
		} else {
			$('#btnApplyJob').removeAttr('style');
		}
	});*/
	
	$('#posRum,#btnApplyJob').click(function() {
		checkLogin.dialog.set('title', null);
		checkLogin.dialog._updateHeader();
		info=$('#info').val();
		$.getJSON('/api/web/news.api?act=comment&detail_id={$news[detail_id]}&info='+info, '' , function(data) {
			if (data && data.status) {
				if (data.status==-100){
					//var islogin =  checkLogin.isPersonLogin(null, 'person_dialog', '/person/applyRegResume.html?jid={$job[_jid]}');
					//return;
					checkLogin.isLogin('ajaxLoginCallback');
					checkLogin.dialog.resetSize(498);
					return false;

				}
				if (data.status<1){
					var msgLength=data.msg.length;
					if(data.status==-100) msgLength=17;

					confirmBox.timeBomb(data.msg, {
						name: 'fail',
						width: pWidth + msgLength * fontWidth
					});
				}
				if (data.status>=1){
					confirmBox.timeBomb(data.msg, {
						name: 'success',
						width: pWidth + data.msg.length * fontWidth
					});
					window.location.href = window.location.href; 
					//window.setContent.close();
				}
			}
		});	

	});
});
function ajaxLoginCallback() {
	//window.location.href = window.location.href; 
}
</script>
<script type="text/javascript">
$(document).ready(function(){
	/*
	jpjs.use('tools.cookie',function(cookie, $){
		var _cityDomain = cookie.get('_cityDomain');
		if(_cityDomain){
			cityUrl = 'http://'+_cityDomain+'.597.com';
			$('#hrnewsCity').attr('href',cityUrl);
		}
	});
	*/

	function createTips(){
			var strArray = ['赶紧推荐给您的朋友阅读吧。', '分享一下，推荐阅读。'];
			return	strArray[Math.round(Math.random())];
	}
	//shareSina,shareTengXun,shareQQ,shareRenRen
	//分享到新浪微博
	$('#shareSina').click(function()
	{
		var tip =	createTips(),
		acttitle = $('#title').html(),
		info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		var href = 'http://service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
		$(this).attr({ target: '_blank', href: href });
	});
	//腾讯微博
	$('#shareTengXun').click(function()
	{
		var tip =	createTips(),
		acttitle = $('#title').html(),
		info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		var href = 'http://v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		$(this).attr({ target: '_blank', href: href });
	});
	//QQ空间
	$('#shareQQ').click(function()
	{
		var tip =	createTips(),
		acttitle = $('#title').html(),
		info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		var href = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		$(this).attr({ target: '_blank', href: href });
	});
	//人人网 
	$('#shareRenRen').click(function()
	{
		var tip =	createTips(),
		acttitle = $('#title').html(),
		info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com HR资讯 -> {$news[category]})，'
		var href = 'http://share.renren.com/share/buttonshare.do?link=' + encodeURIComponent(window.location.href) + '&title==' + encodeURIComponent(info + tip);
		$(this).attr({ target: '_blank', href: href });
	});
	// 微信
	$('#shareWeixin,#shareWeixinList').hover(function() {
		$(this).closest("div .share").find('.weixinBox').toggle();
	});

});
</script>
</body>
</html>
