<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.cookie.js?v=20140312"></script>
<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/index.js?v=20161014"></script>
<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20140312"></script>
<script language="javascript" type="text/javascript" src="http://cdn.597.com/js/uaredirect.js?v=20151014"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20160317" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/597index.css?v=201602226" />
<title>597专访--597人才网</title>
<style>
/*焦点图*/
.slider{ width:960px; height:400px;padding:30px 0;}
.scrollBox{ position:relative;width:900px; margin:0 auto; height:400px;}
.scrollPic{width:800px; height:400px; margin:0 auto;}
.scrollPic .item{ position:absolute; z-index:10; zoom:1; background:url(http://cdn.597.com/images/d.gif) no-repeat center center #fff;}
.scrollPic .item img{ opacity:0.8; filter:alpha(opacity=80); border:0px solid #ccc;}
.scrollPic .current img{ opacity:1; filter:alpha(opacity=100); width:800px; height:400px;}
.scrollPic .iText {display:none;}

.prevCur{ position:absolute; left:-30px; top:185px; cursor:pointer;display:block;width:22px; height:27px;}
.nextCur{ position:absolute; top:185px; right:-30px;cursor:pointer;display:block;width:22px; height:27px;}
.scrollDot{ position:absolute; bottom:0px; left:100px; border:none;}
	
.prevCur{background:url(http://cdn.597.com/images/l.png) no-repeat;_background:none; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=crop,src='/qyzf/l.png')}
.nextCur{background:url(http://cdn.597.com/images/r.png) no-repeat;_background:none; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=crop,src='/qyzf/r.png') }
.kk { width:300px; height:225px; float:left; border:#eee solid 1px;}
.photo { width:300px; height:190px; float:left;}
.photos { width:300px; height:190px; background-position:bottom center; cursor:pointer;}

.txt_no { width:290px;	background-color:#000; float:left; padding:0 5px;}
.No { float:left; color:#fff; font-size:14px; font-family:"黑体"; line-height:30px; margin-right:5px; }
.title { width:240px; float:left;}
.title a { width:240px; display:block; font-size:14px; font-family:"黑体"; line-height:30px; color:#FFF; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
.B1:link		 {text-decoration:none;	color:#FFF}
.B1:visited	{text-decoration:none;	color:#FFF}
.B1:active	 {text-decoration:none; color:#F00}
.B1:hover		{text-decoration:none; color:#F00}	

.single_item { float:left; margin:60px 13px; }
.element_head{ float:left;}
.get_more{ width:100%; float:left;text-align:center; background-color:#f3f3f3;}
.more_loader_spinner{width:16px; height:16px; margin:10px auto; background: url(http://cdn.597.com/m/images/load.gif) no-repeat;}
/*.get_more a{background:url(more.gif) no-repeat; height:23px; display:block;}*/
.mens {float:left; width:80px; text-align:center;}
/* .mensbg { background:url(jt.jpg) no-repeat center bottom;} */
</style>
</head>
<body>
<!-- 顶部导航 -->
	<div class="top">
		<div class="topCon">
			<ul id="topLoginStatus">
				<li><a href="/person/register.html" >求职者注册</a> <span class="line">|</span></li>
				<li><a href="/company/register.html" >企业注册</a> <span class="line">|</span></li>
				<li><a href="/person/login.html" >求职者登录</a><span class="line">|</span></li> 
				<li><a href="/company/login.html" >企业登录</a> <span class="line">|</span>	</li>
				<li class="top-wx" >
					微信
					<img src="http://cdn.597.com/img/common/wxCode.png" class="wxImg" />
					<span class="line">|</span>
				</li>
				<li class="top-phone">
					<a href="/download/app/" target="_blank" style="color:#444;font-weight:normal;" >手机版</a>
					<span class="line">|</span>
				</li>
				<li><a href="/about/price.html" style="color:red;" target="_blank">收费标准</a></li>
			</ul>
			<ul id="topPerLogin" style="display:none;" >
				<li>您好,<a href="/person/"><span id="topUsername" class=" fb"></span></a><span class="line">|</span> </li> 
				<li><a href="/person/logout.html" >退出</a>	</li>
			</ul>
			<ul id="topComLogin" style="display:none;" class="flor">
				<li>您好,<a href="/company/"><span id="topUsername" class=" fb"></span></a> <span class="line">|</span><a href="/about/price.html" style="color:red;" target="_blank">收费标准</a><span class="line">|</span></li> 
				<li><a href="/company/logout.html" >退出</a>	</li>
			</ul>
			<div class="newHeadArea">
			</div>
		</div>
		<div class="clear"></div>
	</div>


	<!-- logo头部 -->
	<div class="head auto">
		<div class="logo"><a href="/"><img src="http://cdn.597.com/img/common/logo.gif" alt="597{$domainInfo['region_name_short']}人才网" /></a></div>
		<div class="changeCity">
			<strong><span id="currentCity"><!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}--></span></strong><br />
			<a href="/changecity.html">切换城市 <i class="jpFntWes searchType"></i></a>
		</div>
		<div class="searchBox">
			<span class="tSch" id="tSch">
				<span id="inpBox">
					<span>
						<input type="text" class="text tSchText ac_input" id="tSchJobText" value="请输入职位名称或公司名称" autocomplete="off" style="color: rgb(153, 153, 153);">
						<a href="javascript:void(0)" class="yahei tSchBtn" id="btnJobSearch">搜索</a>
					</span>
				</span>
				<p class="hotWords">
					<!--{loop $keywordArr $l}-->
						<!--{if $l['pinyin']}-->
							<a href="/zhaopin/{$l['pinyin']}/" target="_blank">{$l['keyword']}</a>
						<!--{else}-->
							<a href="/zhaopin/?q={$l['keyword']}" target="_blank">{$l['keyword']}</a>
						<!--{/if}-->
					<!--{/loop}-->
				</p>
			</span>
			<!--<a class="adSearch" href="/jobSearch.html" style="color:#999;" target="_blank">高级搜索</a>-->
		</div>
		<div class="btns" id="btns">
			<a href="/company/job/job.html?act=edit" target="_blank" class="fabu">发布招聘</a>
			<a href="/person/" target="_blank">登记简历</a>
		</div>
		<div class="clear"></div>
	</div>
	<!-- 导航条 -->
	<div class="nav">
		<div class="navCon">
			<ul class="navList">
				<li><a href="/qyzf/">最新</a></li>
				<li><a href="/qyzf/hot/" <!--{if $op=='hot'}-->style="background:#C51504;"<!--{/if}-->>热门</a></li>
				<li><a href="/qyzf/qy/" <!--{if $op=='qy'}-->style="background:#C51504;"<!--{/if}-->>企业专访</a></li>
				<li><a href="/qyzf/gr/" <!--{if $op=='gr'}-->style="background:#C51504;"<!--{/if}-->>个人专访</a></li>
				<li><a href="/qyzf/zf/" <!--{if $op=='zf'}-->style="background:#C51504;"<!--{/if}-->>597专题</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
<div style="width:1000px; margin:15px auto;"> 
	<div id="more"> 
		<!--加载更多内容-->
		<!--{loop $news $l}-->
		<div class="single_item" id="more_element_1">
			<div class="element_head">
				<div class="kk">
					<div class="photo"><a href="/qyzf/{$l['detail_id']}.html" target="_blank">
						<div class="photos" style="background-image:url(http://pic.597.com/news/{$l['pic_url']});"></div>
						</a></div>
					<div class="txt_no">
						<div class="No">NO{$l['display_order']}</div>
						<div class="title"><a class="B1" href="/qyzf/{$l['detail_id']}.html" target="_blank">{$l['detail_title']}</a></div>
					</div>
				</div>
			</div>
		</div>
		<!--{/loop}-->
		</div>
		<div id="drag" class="get_more" style="display: block;" >
			<div class="draginner">-- 点击加载更多 --</div><div id="totalpage" class="none">{$_allPages}</div>
		</div>
</div>
<div style="margin-top:10px; width:100%; float:left;color:#666; font-size:12px;">
	<!--{template footer}-->
</div>
<script type="text/javascript">
var total=$('#totalpage').html();
var k = true;
var w = $(window);
var curp = 2;
$("body").scrollTop(1);
if(total<=1){
		$('#drag').hide();
		k = false;
}
//滚动到页面底部时，自动加载更多
/*
$(window).scroll(function(){
		var scrollh = $(document).height();
		var bua = navigator.userAgent.toLowerCase();
		if(bua.indexOf('iphone') != -1 || bua.indexOf('ios') != -1){
				scrollh = scrollh-140;
		}else{
				scrollh = scrollh-80;
		}
		//var c=document.documentElement.clientHeight || document.body.clientHeight, t=$(document).scrollTop();
		if(k != false && ($(document).scrollTop() + w.height()) >= scrollh){
				load();
		}
});
*/
function load(){
	var draginner=$('.draginner')[0];
	var total=$('#totalpage').html();
	k = false;
	$('.draginner').css('padding-left','10px');
	//draginner.style.background="url(http://cdn.597.com/m/images/load.gif) 0 50% no-repeat";
	draginner.innerHTML="-- 点击加载更多 --";
	$.post( "/qyzf/index.html?act=list&op={$op}&format=json",
	{'p':curp},
		function(data){
			if (data != null) {
				var datalist = eval(data);
				$.each(datalist, function (i, item) {
					info="<div class=\"single_item\" id=\"more_element_1\"><div class=\"element_head\"><div class=\"kk\"><div class=\"photo\"><a href=\"/qyzf/"+item.detail_id+".html\" target=\"_blank\"><div class=\"photos\" style=\"background-image:url(http://pic.597.com/news/"+item.pic_url+");\"></div></a></div><div class=\"txt_no\"><div class=\"No\">NO"+item.display_order+"</div><div class=\"title\"><a class=\"B1\" href=\"/qyzf/"+item.detail_id+".html\" target=\"_blank\">"+item.detail_title+"</a></div></div></div></div></div>";
					$('#more').append(info);
				});
				$('.draginner').css('padding-left','0px');
				draginner.style.background="";
				draginner.innerHTML="-- 点击加载更多 --";
				curp=curp+1;
				k = true;
				if(curp>parseInt(total)){
					$('#drag').hide();
					k = false;
				}
			}
		});
	}
	$('#drag').click(function(){
		load();
	});
</script>
</body>
</html>