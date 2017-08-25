<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>{$news[detail_title]}--597专访</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/lazyload.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/qyzf.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/zf.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/img_load.js"></script>
</head>
<body>
<!--{template header}-->
<div id="nav">
	<a  data-hosts href="/">首页</a>
	<a data-hosts href="/zhaopin/">找工作</a>
	<a  data-hosts href="/person/resumes.html">简历</a>
	<a nj href="/person/job.html?act=invite">面试邀请</a>
	<a  href="/person/">我的597</a>
</div>
<div class="box">
	<div class="top_title">
		<a href="/qyzf/index.html?act=list&op={$_url}">{$category[$news[detail_cid]]}</a> > {$news[detail_title]}
	</div>
	<section id="artcon">
	<article id="artI">
	<div id="zfbox" class="zf_title">
		<p style=" text-align:right;display:none;"><img src="http://cdn.597.com/m/images/share.jpg" /></p>
		<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div></p>
		<h2 id="ztitle">{$news[detail_title]}</h2>
		<p class="cp">&nbsp;</p>
		<p>{$news[zf_time]} 编辑：{$news[zf_author]}</p>
		<p><a href="/job_list.html?act=joblist&id={$news[c_id]}">{$news['cname']}</a> </p>
	</div>
	<div class="tip"><span>点击图片可以查看大图呦，亲！</span></div>
	<div class="zf_content" id="contentDiv">
	<style type="text/css">
		.zf_content p {
			text-indent: 0!important;
		}
		.logo{
			margin-top: 0!important;
		}
		.zf_content img {
    width: 300px;
    min-height: 230px;
     margin-left: 0!important; 
}
	</style>
		<p style="margin-top:20px;">{$news[detail_content]}</p>
		<p><!--{if $news['detail_cid']==58}-->
			<a href="/job_list.html?act=joblist&id={$news[c_id]}">了解更多【{$news['cname']}】招聘信息请点击 </a>
			<!--{/if}--></p>
		<p style=" text-align:right;display:none;"><img src="http://cdn.597.com/m/images/share.jpg" /></p>
		<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
	</div>
	<div class="zf_msg"></div>
	</article>
	</section>
	<div class="input_wrap">
		<form name="plform" method="post" action="/qyzf/">
		<input type="hidden" value="{$from}" name="from" id='from'>
		<div class="input_area">
			<textarea id="j_input_top" name="info" class="inputarea" placeholder="请登录后发表评论"></textarea>
		</div>
		<div class="input_btm">
			<input type="hidden" name="source" value="1">
			<i><!--{if  $_SESSION['uid']}--><!--{else}--><a href="/person/login.html?from={$from}">用户登录</a><!--{/if}--></i>
			<a id="j_smt" class="input_smt" href="javascript:void(0);">评论</a>
		</div>
		</form>
	</div>
	<div class="relate_wrap">
		<div class="p_tab_wrap"><b>评论列表</b></div>
		<ul class="commentInfo">
			<!--{if $comments}-->
				<!--{loop $comments $l}-->
				<li data-id="615">
					<div>
						<span class="date">{$l['_createTime']}</span>
						<span class="name ">{$l['resultname']}</span>
					</div>
					<div class="content">{$l['content']}</div>
				</li>
				<!--{/loop}-->
			<!--{else}-->
				<div id="pll">目前还没有评论！</div>
			<!--{/if}-->
		</ul>

	</div>
</div>
<div id="bicPic_div" style="display:none; background-color:#000; position:fixed; width:100%; height:100%; top:0;"></div>
<div class="load-layer" id="divloading" style="display:none"><i class="icon-load"></i></div>
<div id="loadPart"></div>

<!--{template footer}-->
<script type="text/javascript">
$("#j_input_top").focus(function(){
	var pname=$(".input_btm").find("i").text();
	if(pname=="用户登录"){$(this).blur();window.location.href="/person/login.html?from={$from}";}
})
$(document).ready(function(){
	/*评论*/
	$('#j_smt').bind('click',function(){
		var pname=$(".input_btm").find("i").text();
		if(pname=="用户登录"){$(this).blur();window.location.href="/person/login.html?from={$from}";}
		info=$('#j_input_top').val();
		$.ajax({
			url:'/api/web/news.api?act=comment&detail_id={$news[detail_id]}&info='+info,
			type:'post',
			dataType:'json',
			success:function(json){
				if (json.status<1){
					alert(json.msg);
				}
				if(json.status>0){
					alert(json.msg);
					window.history.go();
				}
			}
		});
	});
});
</script>
<script type="text/javascript">
window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdPic": "", "bdStyle": "0", "bdSize": "16" }, "share": {},  "selectShare": { "bdContainerClass": null, "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
$(document).ready(function(){
	function createTips(){
  		var strArray = ['赶紧推荐给您的朋友阅读吧。', '分享一下，推荐阅读。'];
  		return  strArray[Math.round(Math.random())];
	}
	//shareSina,shareTengXun,shareQQ,shareRenRen
	 //分享到新浪微博
	 $('#shareSina').click(function()
	 {
		 var tip =  createTips(),
		 	acttitle = $('#ztitle').html(),
		 	info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 企业专访 -> {$news[category]})，'
		  var href = 'http://service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //腾讯微博
	 $('#shareTengXun').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#ztitle').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 企业专访 -> {$news[category]})，'
		 var href = 'http://v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //QQ空间
	 $('#shareQQ').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#ztitle').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 企业专访 -> {$news[category]})，'
		 var href = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
		 $(this).attr({ target: '_blank', href: href });
	 });
	 //人人网
	 $('#shareRenRen').click(function()
	 {
		 var tip =  createTips(),
		 acttitle = $('#ztitle').html(),
	 	 info = '【这篇文章还不错】' + '“'+ acttitle + '”'+ '（来自597.com 企业专访 -> {$news[category]})，'
		 var href = 'http://share.renren.com/share/buttonshare.do?link=' + encodeURIComponent(window.location.href) + '&title==' + encodeURIComponent(info + tip);
		 $(this).attr({ target: '_blank', href: href });
	 });
});
</script>
<script src="http://cdn.597.com/m/js/bigPic.js"></script>
<script type="text/javascript">
//点击看大图
(function() {
	$("#contentDiv img").live("click", function() {
		var node = $(this), scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		var picArr={"picItems":arrStr("#contentDiv")}
		var model = new AutoClubBigPic({
			hideEle: { first: '#shift' }, //要隐藏的元素
			containEle: '#bicPic_div', //承载复层的元素
			loadingEle: '#divloading', //loading元素
			scrollTop: scrollTop,
			title: $("#ztitle").text(),
			imgsrc: node.attr("src"),
			picArr:picArr,
			callback: function(color) {
				$("html").css("background", color);
			}
		});
		model.show();
		document.body.style.backgroundColor = "#000";
	});
})();
</script>
</body>
</html>