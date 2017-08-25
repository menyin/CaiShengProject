<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>597后台管理系统</title>
</head>

<script type="text/javascript" src="/templates/default/js/jquery.js"></script>
<script type="text/javascript" src="/templates/default/js/jquery.easing.js"></script>
<script type="text/javascript" src="/templates/default/js/base.js"></script>
<style>
@charset "utf-8";
*{margin:0;padding:0;-webkit-text-size-adjust:none;}
body{background:#43396B;font-size:12px;color:#555;font-family:Tahoma,"微软雅黑", Geneva, sans-serif;}
a{color:#555;text-decoration:none;}
a:hover{color:#c00;text-decoration:underline;}
img{border:none;}

li{list-style:none;}
.clearfix:after {visibility: hidden;display: block;font-size: 0;content: " ";clear: both;height: 0;}
* html .clearfix             {zoom: 1;} /* IE6 */
*:first-child+html .clearfix {zoom: 1;} /* IE7 */


.w1100{width:530px;margin:0 auto;}
.s-mod{margin:30px auto 0;position:relative;}

.s-mod-loding{text-align:center;}
.s-mod ul{display:none;}
.s-mod-item{display:block;position:absolute;}
.s-mod-wrap{position:relative;overflow:hidden;}
.s-mod-def{position:absolute;left:0;top:0;z-index:1;padding:0 12px;color:#fff;font-size:18px;line-height:25px;text-align:center;}
.s-mod-def span{display:block;}
.s-mod-cur{position:absolute;left:0;top:0;z-index:2;padding:0 12px;color:#fff;line-height:18px;}
.s-mod-cur span{display:block; padding-top: 124px; font-size: 18px; text-align: center;}

.logo{ background:url(/templates/default/images/597logo1.png) no-repeat; width:250px; height:70px; margin:70px auto 0 auto;}
.user{ text-align:center; color:#fff; height:40px; margin-top:15px; line-height:40px; font-size:16px;}
</style>
<body>
<div class="logo"></div>
<div class="user">当前用户：<!--{if $_SESSION['adminName']}-->{$_SESSION['adminName']}<!--{else}-->{$_SESSION['adminUsername']}<!--{/if}--></div>
<!--{if $_SESSION['adminList'] && $_SESSION['adminList']!=$_SESSION['adminid']}-->
<div style="position:fixed; z-index:999; right:100px;  bottom:50px;"><a href="/logout_current.html" style=" padding:10px 20px; color:#fff; background:#33a0ca; text-decoration:none;">退出当前账号</a></div>
<!--{/if}-->
<div style="position:fixed; z-index:999; right:20px;  bottom:50px;"><a href="/logout.html" style=" padding:10px 20px; color:#fff; background:#999; text-decoration:none;">退出</a></div>
<div class="s-mod w1100" style="">
	<div class="s-mod-loding"></div>
	<ul>
		
		<li class="s-mod-item" w="127" h="127" l="0" t="0" bg="#33ac5b" cbg="#209747">
			<div class="s-mod-wrap">
				<!--{if in_array('站点管理', $__r) || in_array('产品管理', $__r) || in_array('友链管理', $__r) || in_array('公告管理', $__r) || in_array('权限管理', $__r) || in_array('地铁管理', $__r) || in_array('地标管理', $__r) || in_array('下级分配', $__r) || in_array('我的下级', $__r) || in_array('客户分配管理', $__r) || in_array('系统短信管理', $__r)}-->
					<a href="/setting/"><div class="s-mod-def"><span>系统管理</span></div></a>
					<a href="/setting/"><div class="s-mod-cur"><span>系统管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>系统管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		<li class="s-mod-item" w="127" h="127" l="139" t="0" bg="#bf7030" cbg="#ae6021">
			<div class="s-mod-wrap">
				<!--{if in_array('基本信息审核', $__r) || in_array('营业执照审核', $__r) || in_array('职位审核', $__r) || in_array('企业信息复审', $__r) || in_array('企业其他管理', $__r) || in_array('企业免审', $__r) || in_array('企业删除', $__r)}-->
					<a href="/company/"><div class="s-mod-def"><span>企业审核</span></div></a>
					<a href="/company/"><div class="s-mod-cur"><span>企业审核</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>企业审核</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		<li class="s-mod-item" w="127" h="127" l="278" t="0" bg="#bf7030" cbg="#ae6021">
			<div class="s-mod-wrap">
				<!--{if in_array('猎头管理', $__r)}-->
					<a href="/hunter/"><div class="s-mod-def"><span>猎头管理</span></div></a>
					<a href="/hunter/"><div class="s-mod-cur"><span>猎头管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>猎头管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		<li class="s-mod-item" w="127" h="127" l="0" t="139" bg="#20c8a6" cbg="#13af90">
			<div class="s-mod-wrap">
				<!--{if in_array('续约公共库', $__r) || in_array('续约企业管理', $__r)|| in_array('分配续约', $__r)|| in_array('续约合同管理', $__r)|| in_array('续约跟进情况', $__r)}-->
					<a href="/xuyue/"><div class="s-mod-def"><span>续约管理</span></div></a>
					<a href="/xuyue/"><div class="s-mod-cur"><span>续约管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>续约管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>

		<li class="s-mod-item" w="127" h="127" l="139" t="139" bg="#20c8a6" cbg="#13af90">
			<div class="s-mod-wrap">
				<!--{if in_array('简历审核', $__r) || in_array('个人实名审核', $__r)}-->
					<a href="/person/"><div class="s-mod-def"><span>个人审核</span></div></a>
					<a href="/person/"><div class="s-mod-cur"><span>个人审核</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>个人审核</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		
		<li class="s-mod-item" w="127" h="127" l="417" t="0" bg="#d8493a" cbg="#ba3122">
			<div class="s-mod-wrap">
				<!--{if in_array('客服公共库', $__r) || in_array('客服快速注册', $__r) || in_array('客服公司查重', $__r) || in_array('客服企业管理', $__r) || in_array('客服合同管理', $__r)}-->
					<a href="/service/"><div class="s-mod-def"><span>客服管理</span></div></a>
					<a href="/service/"><div class="s-mod-cur"><span>客服管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>客服管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		<li class="s-mod-item" w="266" h="127" l="278" t="139" bg="#c44a8c" cbg="#b72b77">
			<div class="s-mod-wrap">
				<!--{if in_array('销售公共库', $__r) || in_array('销售快速注册', $__r) || in_array('销售公司查重', $__r) || in_array('销售企业管理', $__r) || in_array('销售合同管理', $__r)}-->
					<a href="/sell/"><div class="s-mod-def"><span>销售管理</span></div></a>
					<a href="/sell/"><div class="s-mod-cur"><span>销售管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>销售管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
        <li class="s-mod-item" w="127" h="127" l="278" t="278" bg="#01769c" cbg="#006586">
			<div class="s-mod-wrap">
				<!--{if in_array('资讯分类管理', $__r) || in_array('资讯管理', $__r) || in_array('反馈管理', $__r) || in_array('社保反馈管理', $__r)}-->
					<a href="/news/"><div class="s-mod-def"><span>资讯管理</span></div></a>
					<a href="/news/"><div class="s-mod-cur"><span>资讯管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>资讯管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		 <li class="s-mod-item" w="127" h="127" l="417" t="278" bg="#914ae2" cbg="#7d33d0">
			<div class="s-mod-wrap">
				<!--{if in_array('财务管理', $__r) || in_array('财务新增', $__r) || in_array('已支付', $__r) || in_array('已结算', $__r) || in_array('已关闭', $__r) || in_array('财务初始', $__r) || in_array('财务报表', $__r) || in_array('财务合同管理', $__r)}-->
					<a href="/finance/"><div class="s-mod-def"><span>财务管理</span></div></a>
					<a href="/finance/"><div class="s-mod-cur"><span>财务管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>财务管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		<li class="s-mod-item" w="266" h="127" l="0" t="278" bg="#FF9201" cbg="#ff8704">
			<div class="s-mod-wrap" style="width: 127px; height: 127px;">
				<!--{if in_array('图标管理', $__r)}-->
					<a href="/design/"><div class="s-mod-def"><span>开通管理</span></div></a>
					<a href="/design/"><div class="s-mod-cur"><span>开通管理</span></div></a>
				<!--{else}-->
					<div class="s-mod-def"><span>开通管理</span></div>
					<div class="s-mod-cur"><span>没有权限</span></div>
				<!--{/if}-->
			</div>
		</li>
		
	</ul>
</div>
</body>
</html>

