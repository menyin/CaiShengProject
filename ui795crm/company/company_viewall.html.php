<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>{$com[cname]}-597人才网</title>
	<link rel="canonical" href="http://{DOMAIN}/com-{$com[_cid]}/" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!–[if lt IE9]> 
	<script src="//cdn.{ROOT_DOMAIN}/js/html5.js?v=20140312"></script>
	<![endif]–>
	<link rel="shortcut icon" href="//cdn.{ROOT_DOMAIN}/www/images/favicon.ico" />
	<link href="//cdn.{ROOT_DOMAIN}/img/skin/css/base/style.css" rel="stylesheet"/>
	<link href="//cdn.{ROOT_DOMAIN}/img/skin/css/style{$skinid}.css" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/common.js?v=20141218"></script>

</head>
<body>

	<div id="top_baidutips_show" style="display:none;" class="top_baidutips_show">
		<div class="baidutips_left"></div>
		<div class="baidutips_center">
			<a href="/" class="baidutips_reg_person" title="百万工作都在这，您在哪？">百万工作都在这，您在哪？</a>
			<a href="/" class="baidutips_reg_company" title="无数人才都来了，您在哪？">无数人才都来了，您在哪？</a>
		</div>
		<div class="baidutips_right"></div>
		<a class="baidutips_close" href="#" title="关闭">关闭</a>
	</div>
	<div class="nav_header">
		<div class="shortcut jdefl_width">
			<div class="welcome">
				<a href="/">欢迎来到597人才网！</a>
			</div>
			<div class="login">
				<div id="user_menu_notlogin" style="overflow:visible;">
					<div class="per_login_h fl">
						<div class="fl">
							<span class="per_icon">&nbsp;</span>
							<a href="/person/login.html">个人登录</a>
							<s>|</s>
							<a href="/person/register.html">注册</a>
							&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
						<!--
					<a class="other_login" id="other_login" href="javascript:;">
						合作网站账号登录 <b></b>
					</a>
					<ul class="other_icon hide" id="other_login_type">
						<li>
							<a class="sina_login">&nbsp;&nbsp;&nbsp;新浪微博</a>
						</li>
						<li>
							<a class="qq_login">&nbsp;&nbsp;&nbsp;QQ</a>
						</li>
						<li>
							<a class="renren_login">&nbsp;&nbsp;&nbsp;人人网</a>
						</li>
						<li>
							<a class="msn_login">&nbsp;&nbsp;&nbsp;MSN</a>
						</li>
						<li>
							<a class="baidu_login">&nbsp;&nbsp;&nbsp;百度</a>
						</li>
						<li>
							<a class="alipay_login">&nbsp;&nbsp;&nbsp;支付宝</a>
						</li>
					</ul>
					-->
				</div>
			</div>
			<span class="hide per_login_h relative" id="user_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span>
				<a href="/person/" id="user_menu_name" class="user_name" target="_blank"></a>
				<!--
				<a href="/person/" class="message inline-block" id="user_menu_msg"></a>
			<a href="" class="refresh_resume inline-block">刷新简历</a>
			-->
			<a href="/person/logout.html" style="color:#777">[退出]</a>
		</span>
		<span class="hide per_login_h relative" id="com_menu_logined" style="margin-right:0; display:none;">
			<span class="per_icon">&nbsp;</span>
			<a href="/company/" id="com_menu_name" class="user_name" target="_blank"></a>
			<a href="/company/logout.html" style="color:#777">[退出]</a>
		</span>
	</div>
</div>
</div>
<div class="position_main">
<div class="main_top_bg">
	<div class="main_top">
		<div class="company_text fl">
			<span class="name" title="{$com['cname']}">
				<a href="/com-{$com['_cid']}/<!--{if $jobskin}-->?skin={$jobskin}<!--{/if}-->">{$com['cname']}<!--{if $com['comStr']}-->({$com['comStr']})<!--{/if}--></a>
				<!--{if $com['licenceCheck']==1}-->
				<a class="certificate_icon2"  title="证照已提交">&nbsp;</a>
				<!--{/if}-->
			</span>
			<span class="add" title="地址：{$com['comAddress']}">
				地址：{$com['comAddress']}&nbsp;&nbsp;&nbsp;&nbsp;<!--公司性质：{$com['comType']}-->
			</span>
			<span class="info">
				<!-- 行业：
				<a href="javascript:;">{$industryName}</a> -->
				规模：{$com['comWorkers']}&nbsp;&nbsp;&nbsp;&nbsp;
				主页：
				<a href='http://{$com[comUrl]}' rel='nofollow' target='_blank' class="url">{$com[comSite]}</a>
			</span>
		</div>
	</div>
</div>
<div class="main_banner"></div>
<div class="main_body_bg">
	<div class="topbg"></div>
	<div class="main_body is_login_tip">

		<div class="left_menu fl">
			<div class="menu_m">
				<a href="/com-{$com['_cid']}/<!--{if $jobskin}-->?skin={$jobskin}<!--{/if}-->" class="tab_btn_com active" id="tab_btn_com">企业简介</a>
				<span class="tab_btn_pos " id="tab_btn_pos">
					招聘职位
					<span class="font_nm font_st green f14">
						(
						<span id="cnt_pos" class="f14">{$count}</span>
						)
					</span>
				</span>
				<div id="position_list" class="pos_list">
					<!--{loop $jobListAll $l}-->
					<dl>
						<dt class="dept">{$l[cuName]}</dt>
						<dd>
							<ul>
								<!--{loop $l['list'] $ll}-->
								<li id="left_pos_{$ll['_jid']}">
									<a  href="/job-{$ll['_jid']}.html<!--{if $jobskin}-->?skin={$jobskin}<!--{/if}-->">{$ll['jname']}</a>
								</li>
								<!--{/loop}-->
							</ul>
						</dd>
					</dl>
					<!--{/loop}-->

				</div>
			</div>
	</div>
	<div class="right_detail fl" id="companyDetail">
		<!--企业形象展示信息 END-->
		<!--企业信息 START-->
		<div class="body " id="company_detail">
			<div class="company_txt f444">

				<div class='com_comIntroduction'>{$com['comInfo']}</div>
			</div>

			<div class="f444 company_us">
				<span class="b">联系方式</span>
				<br/>
				联系人：{$com['comUser']}
				<br/>
				地&nbsp;&nbsp;址：{$com['comAddress']}&nbsp;&nbsp;<a target="_blank" href="http://api.map.baidu.com/geocoder?address={$com['comAddress']}&output=html" id="toMap">查看地图</a>
				<br/>
			</div>

			<br/>
		</div>
		<!--企业信息 END-->
	</div>
</div>

</div>
</div>

<!--#include virtual="/templates/default/footer.htm" -->

<script type="text/javascript">
	var userType=$.cookie("userType");
	var nickname = $.cookie("nickname");
	if(nickname){
		if(userType=='per'){
			$('#user_menu_notlogin').hide();
			$('#com_menu_logined').hide();
			$('#user_menu_logined').show();
			$('#user_menu_logined').find('#user_menu_name').html(nickname);
		}
		if(userType=='com'){
			$('#user_menu_notlogin').hide();
			$('#com_menu_logined').show();
			$('#user_menu_logined').hide();
			$('#com_menu_logined').find('#com_menu_name').html(nickname);
		}
	}
	$('.dept').each(function(){
		if(!$(this).text().length){
			$(this).hide(); 
		}
	});	

</script>

</body>
</html>