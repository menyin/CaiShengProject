<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=20140312"></script>
<style>
.j_searchTop {height: 44px; background-color: #fff; overflow: hidden;}
.j_searchTop .logo{ width:120px; height:44px; background:url(//cdn.{ROOT_DOMAIN}/m/images/597logo.png)no-repeat; float:left; margin-left:10px; background-size:120px 44px;}
.j_searchTop .position{ font-size:12px; color:#686868; line-height:44px; max-width:60px; float:left; margin-left:15px; overflow:hidden; white-space:nowrap;}
.j_searchTop .position .icon{ margin-top:18px;}
.j_searchTop .position .text{ padding-right:5px;}
.j_searchTop .login_btn{position: absolute; right:5px; font-size:12px; line-height:44px; color:#686868; }
.j_searchTop .login_btn a{ color:#666;padding:3px; font-size: 14px;}
/*面包屑*/
.bread{ float:left; height:40px; width:95%;line-height:40px;border-bottom: 1px solid #ddd;
 margin: 0 10px;
}
.bread_text{ text-align:left;}
.bread_text a{ margin:0 5px;}

</style>
<section class="j_searchTop">
	<a class="logo" href="/"></a>
	<a class="position" href="/changecity.html"><span class="text">{$domainInfo['region_name_short']}</span><img src="//cdn.{ROOT_DOMAIN}/m/images/change-city.png" width="9" height="9" /></a>
	
	<div class="login_btn" id="loginStatus">
		<a style="padding-left:5px;" href="/">首页</a>
	</div>
</section><!--j_searchTop end-->
<script type="text/javascript">
	var userType = $.cookie("userType");

	if(userType==1){
		$('#loginStatus').append('|<a style="padding-left:5px;" href="/person/">求职中心&nbsp;&nbsp;</a>');
	}else if(userType==2){
		$('#loginStatus').append('|<a style="padding-left:5px;" href="/company/">招聘中心&nbsp;&nbsp;</a>');
	}else{
		$('#loginStatus').append('&nbsp;|&nbsp;<a href="/person/login.html">登录</a>&nbsp;|&nbsp;<a href="/person/register.html">注册&nbsp;</a>');
	}
</script>
