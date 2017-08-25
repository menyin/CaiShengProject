<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_index2.css"/>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/font-awesome.min.css?v=20150203"/>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/font-awesome.css?v=20150203"/>
<style>
.j_searchTop {height: 44px; background-color: #fff; border-bottom: 1px solid #E8352E; overflow: hidden;}
.j_searchTop .logo{ width:120px; height:44px; background:url(http://cdn.597.com/m/images/597logo.png)no-repeat; float:left; margin-left:10px; background-size:120px 44px;}
.j_searchTop .position{ font-size:12px; color:#686868; line-height:44px; max-width:60px; float:left; margin-left:15px; overflow:hidden; white-space:nowrap;}
.j_searchTop .position .icon{ margin-top:18px;}
.j_searchTop .position .text{ padding-right:5px;}
.j_searchTop .login_btn{ right:10px; font-size:16px; line-height:44px; color:#686868; float:right;}
.j_searchTop .login_btn a{ color:#666;padding:5px;}
/*面包屑*/
.bread{ float:left; height:40px; width:98%;line-height:40px;border-bottom: 1px solid #ddd;
 margin: 0 10px;
}
.bread_text{ text-align:left;}
.bread_text a{ margin:0 5px;}
</style>
<section class="j_searchTop">
	<a class="logo" href="/"></a>
	<a class="position" href="/changecity.html"><span class="text">{$domainInfo['region_name_short']}</span><img src="http://cdn.597.com/m/images/change-city.png" width="9" height="9" /></a>
	
	<div class="login_btn right">
		<!--{if $_SESSION['uid']}-->
			<a style="padding-left:5px;" href="/person/">求职中心</a>
		<!--{elseif $_SESSION['cid']}-->
			<a style="padding-left:5px;" href="/company/">招聘中心</a>
		<!--{else}-->
			<a style="padding-left:5px;" href="/person/login.html">登录</a>|<a href="/person/register.html">注册</a>
		<!--{/if}-->
	</div>
</section><!--j_searchTop end-->
