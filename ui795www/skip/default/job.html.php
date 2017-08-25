<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>{$job[jname]}_{$com[cname]}最新招聘信息 - {$domainInfo['region_name_short']}597人才网</title>
	<meta name="description" content="{$description}" />
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="shortcut icon" href="http://cdn.597.com/www/images/favicon.ico" />
	<link href="http://cdn.597.com/img/skin/css/base/style.css" rel="stylesheet"/>
	<link href="http://cdn.597.com/img/skin/css/style{$skinid}.css" rel="stylesheet">

	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.form.js?v=20140319"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.cookie.js?v=20140312"></script>
	<style type="text/css">
		/*dialog弹出窗通用外框样式*/
		.dialog{background:url(http://cdn.597.com/www/images/dialogBod.png) repeat;padding:5px;text-align:left;_background:none;_padding:0;}
		.dialogCon{background:url(http://cdn.597.com/www/images/dialogCon.gif) repeat-x #fff;position:relative;*display:inline;zoom:1; text-align:left;border:1px solid #5f5f5f;}
		.dialog .dialogHead{line-height:40px;height:40px;font-size:16px;text-align:left;padding-left:15px;color:#444;padding-right:27px;font-family:"微软雅黑","SimHei";*display:inline;zoom:1;}
		.dialogMask{background:#000;position:fixed;top: 0px;left: 0px;width:100%;height:100%;display:block;filter:alpha(opacity=0);-moz-opacity:0;-khtml-opacity:0;opacity:0; }
		.dialog .dialogClose{position:absolute;right:10px;top:10px;cursor: pointer;width:14px;height:14px;background: url(http://cdn.597.com/www/images/dialogclose.gif) no-repeat 0 0;zoom:1;font-size:0;line-height:0;}
		.dialog .dialogClose:hover{ background-position:0 -14px;}
		.dialogContent{text-align:left;clear:both;overflow-x:visible;padding:5px 17px;*display:inline;zoom:1}

		/*弹出层提示类型*/
		.dialogCon .popS{}/*操作正确或成功*/
		.dialogCon .popF{}/*操作失败*/
		.dialogCon .popW{}/*弹出警告提示框*/
		.dialogCon .popQ{}/*弹出选择类型提示框*/
		.dialogCon .popI{}/*弹出信息类型提示层*/
		.popS .popTxt{background:url(http://cdn.597.com/www/images/icopops.gif) no-repeat 3px 4px; padding-left:35px;}
		.popF .popTxt{background:url(http://cdn.597.com/www/images/icopopf.gif) no-repeat 3px 4px; padding-left:35px;}
		.popW .popTxt{background:url(http://cdn.597.com/www/images/icopopw.gif) no-repeat 3px 4px; padding-left:35px;}
		.popQ .popTxt{background:url(http://cdn.597.com/www/images/icopopq.gif) no-repeat 3px 4px; padding-left:35px;}
		.popI .popTxt{background:url(http://cdn.597.com/www/images/icopopw.gif) no-repeat 3px 4px; padding-left:35px;}
		.popS,.popF,.popW,.popQ,.popI{width:355px;padding:20px 20px 0;}
		.popTxt a.link:link,.popTxt a.link:visited{color:#2094D1;}
		.popTxt a.link:hover{color:#16a6f2;}
		.popTxt{font-size:14px;font-family:"微软雅黑","SimHei";padding:5px 0;color:#333}
		.dialogPopBtn{margin:10px 0 15px;text-align:right;}
		.dialogPopBtn a{margin:0 0 0 10px;}

		/*5秒消逝操作提示*/
		.prompt{height:89px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat -12px -80px;_height:80px;_background-position:-12px 0;text-align:left; position:relative;_display:inline;_zoom:1;}
		.prompt b{position:absolute;height:89px;display:inline-block;width:12px;top:0;_height:80px;}
		.prompt b.L{left:-11px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat left -80px;_background:url(http://cdn.597.com/www/images/popbg.png) no-repeat left 0;}
		.prompt b.R{right:-11px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat right -80px;_background:url(http://cdn.597.com/www/images/popbg.png) no-repeat right 0;}
		.promptTxt{height:89px;line-height:89px;padding:0 17px 0 66px;font-size:20px;font-family:"微软雅黑","SimHei";_height:80px;_line-height:80px;_display:inline;_zoom:1;}
		.promptS{background:url(http://cdn.597.com/www/images/promptS.png) no-repeat 10px center;}
		.promptF{background:url(http://cdn.597.com/www/images/promptF.png) no-repeat 10px center;}

		/*点击后加载loading窗口*/
		.clickLoading{height:38px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat -12px -201px;*height:32px;*background:url(http://cdn.597.com/www/images/popbg.png) no-repeat -12px -169px;text-align:left; position:relative;*display:inline;*zoom:1;padding:0 10px;*border:1px solid #ccc;*border-top:0;*border-bottom:0;}
		.clickLoading b{position:absolute;height:38px;display:inline-block;width:12px;top:0;*height:32px;}
		.clickLoading b.L{left:-12px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat left -201px;*background:url(http://cdn.597.com/www/images/popbg.png) no-repeat left -169;*display:none;}
		.clickLoading b.R{right:-12px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat right -201px;*background:url(http://cdn.597.com/www/images/popbg.png) no-repeat right 0;*display:none;}
		.clickLoadingTxt{height:38px;line-height:38px;*height:32px;*line-height:32px;font-size:12px;padding-left:20px;background:url(http://cdn.597.com/www/images/loading.gif) no-repeat 0 center;}


		/*数据加载loading窗口加载完后消失*/
		.dataLoad{height:89px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat -12px -80px;_height:80px;_background-position:-12px 0;text-align:left; position:relative;_display:inline;_zoom:1;padding:0 20px;}
		.dataLoad b{position:absolute;height:89px;display:inline-block;width:12px;top:0;_height:80px;}
		.dataLoad b.L{left:-11px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat left -80px;_background:url(http://cdn.597.com/www/images/popbg.png) no-repeat left 0;}
		.dataLoad b.R{right:-11px;background:url(http://cdn.597.com/www/images/popbg.png) no-repeat right -80px;_background:url(http://cdn.597.com/www/images/popbg.png) no-repeat right 0;}
		.dataLoadTxt{height:89px;line-height:89px;_height:80px;_line-height:80px;font-size:20px;font-family:"微软雅黑","SimHei";padding-left:20px;background:url(http://cdn.597.com/www/images/loading.gif) no-repeat 0 center;}

		/*数据加载失败窗口*/
		.dialogError{background:url(http://cdn.597.com/www/images/icopopf.gif) no-repeat 3px 4px;font-family:"微软雅黑","SimHei";font-size:16px;padding:5px 0 5px 35px;margin:12px 30px 0;}

		/*弹出页面数据加载中*/
		.dialogLoading{background:url(http://cdn.597.com/www/images/loading.gif) no-repeat;font-family:"微软雅黑","SimHei";font-size:16px;padding:5px 30px 15px 45px; background-position: 23px 9px;background-position: 23px 9px;margin:0 20px;}

		a.btnClose{font-size:20px;line-height:17px;height:20px;font-family:"微软雅黑";}
		a.btnsF12,.btn2{height:25px;line-height:24px;line-height:25px \9\0;display:inline-block;margin:0 5px;padding:0 10px;font-size:12px;border-radius:3px;font-family:"微软雅黑";}
		a.btn1:link,a.btn1:visited{color:#fff;background:#3d86bc;border:1px solid #397eb2;box-shadow:0 1px 0 #59a0d5 inset;
		background-image: -moz-linear-gradient(top, #5496c7, #3d86bc);
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #5496c7), color-stop(1, #3d86bc));
		}
		a.btn1:hover{background:#1368a9;border:1px solid #207abc;}
		a.btn1:active{background:#1368a9;border:1px solid #207abc;box-shadow:0 3px 3px #0d4168 inset;}
		a.btn2:link,a.btn2:visited{color:#fff;background:#de6667;border:1px solid #c85329;box-shadow:0 1px 0 #f5898a inset;
		background-image: -moz-linear-gradient(top, #de6667, #ca4c4d);
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #de6667), color-stop(1, #ca4c4d));
		}
		a.btn2:hover{background:#cb4647;border:1px solid #e26538;}
		a.btn2:active{background:#ae451f;border:1px solid #ae451f;box-shadow:0 3px 3px #812f11 inset;}
		a.btn3:link,a.btn3:visited{color:#666;border:1px solid #dadada;background-color:#f7f7f7;box-shadow:0 1px 0 #fff inset;
		background-image: -moz-linear-gradient(top, #fff, #ececec);
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(1, #ececec));
		}
		a.btn3:hover{border:1px solid #ddd;background-color:#eee;
		background-image: -moz-linear-gradient(top, #fff, #f1f1f1 5%);
		background-image: -webkit-gradient(linear, 0 0, 0 5%, from(#fff), to(#f1f1f1));
		}
		a.btn3:active{background-color:#eee;background-image:none;border:1px solid #dadada;box-shadow:0 3px 3px #ccc inset;}

		a.btn4:link,a.btn4:visited{color:#fff;background:#65be63;border:1px solid #51b94f;box-shadow:0 1px 0 #7ee77c inset;
		background-image: -moz-linear-gradient(top, #65be63, #43a341);
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #65be63), color-stop(1, #43a341));
		}
		a.btn4:hover{background:#44a241;border:1px solid #349a32;}
		a.btn4:active{background:#358a33;border:1px solid #358a33;box-shadow:0 3px 3px #155214 inset;}
		#btn_com:hover {color: #3f74c2;}
		.pos_detail_top  {height: 40px;}
		.pos_detail_top .send { background: #f60; font:14px 微软雅黑; color: #fff; padding: 5px 15px; position: absolute; right: 0; top: 0;display: inline-block; border-radius: 4px;}
		.pos_detail_top .send:hover {background: #F76300;}
	</style>
</head>
<body>

<div id="top_baidutips_show" style="display:none;" class="top_baidutips_show">
	<div class="baidutips_left"></div>
	<div class="baidutips_center"><a href="/" class="baidutips_reg_person" title="百万工作都在这，您在哪？">百万工作都在这，您在哪？</a><a href="/" class="baidutips_reg_company" title="无数人才都来了，您在哪？">无数人才都来了，您在哪？</a></div>
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
						<span class="per_icon">&nbsp;</span><a href="/person/login.html">个人登录</a><s>|</s><a href="/person/register.html">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<!--
					<a class="other_login" id="other_login" href="javascript:;">合作网站账号登录 <b></b></a>
					<ul class="other_icon hide" id="other_login_type">
						<li><a class="sina_login">&nbsp;&nbsp;&nbsp;新浪微博</a></li>
						<li><a class="qq_login">&nbsp;&nbsp;&nbsp;QQ</a></li>
						<li><a class="renren_login">&nbsp;&nbsp;&nbsp;人人网</a></li>
						<li><a class="msn_login">&nbsp;&nbsp;&nbsp;MSN</a></li>
						<li><a class="baidu_login">&nbsp;&nbsp;&nbsp;百度</a></li>
						<li><a class="alipay_login">&nbsp;&nbsp;&nbsp;支付宝</a></li>
					</ul>
					-->
				</div>
			</div>
			<span class="hide per_login_h relative" id="user_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span><a href="/person/" id="user_menu_name" class="user_name" target="_blank"></a>
				<!--
				<a href="/person/" class="message inline-block" id="user_menu_msg"></a>
				<a href="" class="refresh_resume inline-block">刷新简历</a>
				-->
				<a href="/person/logout.html" style="color:#777">[退出]</a>
			</span>
			<span class="hide per_login_h relative" id="com_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span><a href="/company/" id="com_menu_name" class="user_name" target="_blank"></a>
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
					<a href="/com-{$com['_cid']}/<!--{if $jobskin}-->?skin={$jobskin}<!--{/if}-->">{$com['cname']}<!--{if $com['comStr']}-->({$com['comStr']})<!--{/if}--></a><!--{if $com['licenceCheck']==1}--><a class="certificate_icon2"  title="证照已提交">&nbsp;</a><!--{/if}-->
				</span>
				<span class="add" title="地址：{$com['comAddress']}">地址：{$com['comAddress']}&nbsp;&nbsp;&nbsp;&nbsp;公司性质：{$com['comType']}</span>
				<span class="info">行业：{$industryName}&nbsp;&nbsp;&nbsp;&nbsp;规模：{$com['comWorkers']}&nbsp;&nbsp;&nbsp;&nbsp;
				主页：<a href='http://{$com[comUrl]}' rel='nofollow' target='_blank' class="url">{$com[comSite]}</a>
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
					<a href="/com-{$com['_cid']}/<!--{if $jobskin}-->?skin={$jobskin}<!--{/if}-->" class="tab_btn_com " id="btn_com">企业简介</a>
					<em  class="tab_btn_com   active"  id="btn_per">招聘职位<span class="font_nm font_st green f14">(<span id="cnt_pos" class="f14">{$count}</span>)</span></em>
					
					<div id="position_list" class="pos_list">
					<!--{loop $jobListAll $l}-->
						<dl>
							<!--{if $l[cuName]}--><dt class="dept">{$l[cuName]}</dt><!--{/if}-->
								<dd>
									<ul>
									<!--{loop $l['list'] $ll}-->
										<li id="left_pos_{$ll['_jid']}"><a  href="/job-{$ll['_jid']}.html<!--{if $jobskin}-->?skin={$jobskin}<!--{/if}-->" class="<!--{if $ll['_jid']==$_GET['id']}-->on<!--{else}-->{$ll['jname']}<!--{/if}-->">{$ll['jname']}</a></li>
									<!--{/loop}-->
									</ul>
								</dd>
						</dl>
					<!--{/loop}-->		
						
					</div>
					<div class="tac"><div id="pagination" class="detail_pager"></div></div>
					<div class="tac" id="position_list_showAll"></div>
				</div>
			</div>
			<div class="right_detail fl" id="companyDetail">
				
			
				<!--职位信息 START-->
					<div class="body" id="positions_detail">
						<div class="pos_detail_item">
							<div class="pos_detail_top" style="position:relative;">
								<h1 class="position_name">{$job[jname]}</h1>
								<div class="num_dept">({$job['jobNumber']}<!--{if $job['cuname']}-->，{$job['cuname']}<!--{/if}-->)</div>
								<a href="javascript:;" class="send" title="申请职位" id="btnApplyJob">申请职位</a>
							</div>
							<div class="posInfo">
								<table border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td class="title">职位类别</td>
											<td class="value">{$job[jobclass]}</td>
											<td class="title">工作地区</td>
											<td class="value">{$job[jobArea]}</td>
										</tr>
										<tr>
											<td colspan="4" class="line"></td>
										</tr>
										<tr>
											<td class="title">学历要求</td>
											<td class="value">{$job['jobDegree']}</td>
											<td class="title">工作经验</td>
											<td class="value">{$job[jobWorkYear]}</td>
										</tr>
										<tr>
											<td colspan="4" class="line"></td>
										</tr>
										<tr>
											<td class="title">年龄要求</td>
											<td class="value">{$job[jobAge]}</td>
											<td class="title">性别要求</td>
											<td class="value">{$job[jobGender]}</td>
										</tr>
										<tr>
											<td colspan="4" class="line"></td>
										</tr>
										<tr>
											<td class="title">外语要求</td>
											<td class="value">{$job[jobLanguage]}</td>
											<td class="title">薪资待遇</td>
											<td class="value">{$job['jobSalary']}</td>
										</tr>
										<tr>
											<td colspan="4" class="line"></td>
										</tr>										
										<tr>
											<td class="title">福利待遇</td>
											<td class="value">{$job['rewardStr']}</td>
										</tr>
										<tr>
											<td class="title">发布时间</td>
											<td class="value">{$job['freshTime']}</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="tabs">
								<ul>
									<li class="cu">职位描述</li>
									<li>公司简介</li>
								</ul>
								<p></p>
								<div class="clear"></div>
							</div>
							<div id="infos">
								<div class="posDesc" >
									<p>
										{$job['jobContent']}
									</p>
								</div>
								<div  style="display:none;">
									<div class="comInfo">{$com['comInfo']}</div>
								</div>								
							</div>							
							<!--
							<div class="posMap">
								<div class="work_addree">
									工作地址：
									<a href="javascript:;" onClick="$('#posMap200431').toggle();_jpd.baiduMap.createMap('','113.752306','23.019166');$(this).html($(this).text()=='查看地图'?'<i></i>
									关闭地图':' <i></i>
									查看地图')" id="seemap"> <i></i>
									查看地图
								</a>
							</div>
							-->
						</div>
						<div id="contact">
							<ul class="posContact f444">
								<!--{if $job['linkWay']=='0'}-->
								<li>
									<span class="tit">联系人：</span>
									<span class="r_txt">(企业未公开，请通过597人才网投递简历)</span>
								</li>
								<li>
									<span class="tit">联系电话：</span>
									<span class="r_txt">(企业未公开，请通过597人才网投递简历)</span>
								</li>
								<!--{/if}-->
								<!--{if $job['linkWay']=='1'}-->
								<li>
									<span class="tit">联系人：</span>
									<span class="r_txt">{$com[comUser]}</span>
								</li>
								<li>
									<span class="tit">联系电话：</span>
									<span class="r_txt">{$strPhone}</span>
								</li>
								<!--{/if}-->
								<!--{if $linkWays}-->
									<!--{loop $linkWays $l}-->
									<li>
										<span class="tit">联系人：</span>
										<span class="r_txt">{$l['n']}</span>
									</li>
									<li>
										<span class="tit">联系电话：</span>
										<span class="r_txt">{$l['t']}</span>
									</li>
									<!--{/loop}-->								
								<!--{/if}-->
									<li>
									<span class="tit">联系地址：</span>
									<span class="r_txt">{$com['comAddress']}&nbsp;&nbsp;<a target="_blank" href="http://api.map.baidu.com/geocoder?address={$com['comAddress']}&output=html" id="toMap">查看地图</a></span>
									</li>
								</li>
							</ul>
							<div class="pos_btn">
								<div class="pos_operate">					
									<a href="javascript:;" class="send" title="申请职位" id="btnApplyJob2">申请职位</a>
									<a href="javascript:;" id="btnFavoriteJob" class="fav">
										<span>收藏</span>
									</a>
								</div>
							</div>
						</div>
						
				<!--职位信息 END-->
				<!--企业形象展示信息 START-->
				<div class="body hide" id="company_display_detail">
			</div>
				<!--企业形象展示信息 END-->
				<!--企业信息 START-->
		<div class="body " id="company_detail">
<div class="company_txt f444">

</div>

<br/>
<!-- 关联企业 -->
<div class="company_txt">
	
</div>

<style>
.com_detail_thumble #cboxShare{top:523px!important;}
.com_comIntroduction{font-size:14px;display:inline;}
.com_comIntroduction p{text-indent:2em;}
</style>
</div>
				<!--企业信息 END-->
			</div>
		</div>

	</div>
</div>

<!--{template footer}-->


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

	

	var color = $('#btn_per').css('background-color');

	$('a.on').css('border-left','2px solid ' + color);
	$('#tabs').find('.cu').css('border-top','2px solid ' + color);

	$('#tabs li').click(function(){
		var idx = $(this).index();
		$(this).addClass('cu').siblings().removeClass('cu');
		$(this).css('border-top','2px solid ' + color).siblings().css('border-top','2px solid #ddd');
		$('#infos').find('div').eq(idx).show().siblings().hide();
		if(idx == 0){
			$('#contact').show();
		} else {
			$('#contact').hide();
		}
	}).eq(0).click();
	$(document).ready(function(){
		//投递简历
		$('#btnApplyJob,#btnApplyJob2').click(function(){
			$.getJSON('/api/web/job.api?act=join&jid={$job[_jid]}' , '' , function(data) {
				if (data && data.status) {
					if (data.status==-1){
						personLogin();
						return false;
					}
					if (data.status<1){
						$.message(data.msg, { icon: 'fail' });
						return false;
					}
					if (data.status>=1){
						$.anchorMsg(data.msg);
					}
				}
			});
		});

		//收藏
		$('#btnFavoriteJob').click(function(){
			$.getJSON('/api/web/job.api?act=favorites&jid={$job[_jid]}' , '' , function(data) {
				if (data && data.status) {
					if (data.status==-1){
						personLogin();
						return false;
					}
					if (data.status==-100){
						$.message("您还没有填写简历信息，请先<a href='/person/'>完善简历</a>", { icon: 'fail' });
						return false;
					}
					if (data.status<0){
						$.message('职位收藏失败', { icon: 'fail' });
						return false;
					}
					if (data.status==1){
						$.anchorMsg('职位收藏成功');
					}
					if (data.status==2){
						$.anchorMsg('该职位已经被收藏过');
					}
				}
			});
		});


	});
</script>
</body>
</html>