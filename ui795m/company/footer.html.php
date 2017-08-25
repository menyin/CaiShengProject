<!--{if $app['id']}-->
	<!--{if $app['isNewApp']!="yes"}-->
	<style type="text/css">
		body { margin-bottom:60px !important; }
		a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
		ul, li { list-style:none; margin:0; padding:0 }
		.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
		.top_menu2 { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
		.top_bar .top_menu2>li { -webkit-box-flex:1; position:relative; text-align:center; }
		.top_menu2 li:first-child { background:none; }
		.top_bar .top_menu2>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
		.top_bar .top_menu2>li.home { max-width:70px }
		.top_bar .top_menu2>li.home a { height: 66px; width: 66px; margin: auto; border-radius: 60px; position: relative; top: -22px; left: 2px; background: url('http://cdn.597.com/app/images/home.png') no-repeat center center; background-size: 100% 100%; }
		.top_bar .top_menu2>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
		.top_bar .top_menu2>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle; }
		.top_bar li:first-child a { display: block; }
		.menu_font { text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
		.menu_font.hidden { display:none; }
		.menu_font { top:inherit !important; bottom:60px; }
		.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
		.menu_font li a { text-align: left !important; }
		.top_menu2 li:last-of-type a { background: none; overflow:hidden; }
		.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%; }
		.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
		.menu_font li:first-of-type { border-top: 0; }
		.menu_font li:last-of-type { border-bottom: 0; }
		.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
		.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
		.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
		#menu_list0 { right:0; left:10px; }
		#menu_list0:after { left: 20%; }
		#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
		#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
		.top_bar .top_menu2>li>a:hover, .top_bar .top_menu2>li>a:active { background-color:#333; }
		.menu_font li a:hover, .menu_font li a:active { background-color:#333; }
		.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
		.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
		#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
		#cate18 .device {bottom: 49px;}
		#cate18 #indicator {bottom: 240px;}
		#cate19 .device {bottom: 49px;}
		#cate19 #indicator {bottom: 330px;}
		#cate19 .pagination {bottom: 60px;}
		.keyMsageBg {margin-bottom: 0;}
		.invite-resume {margin-bottom: 150px!important;}
		.mResumeBmpop,.mRecruit{ margin:10px 0 45px; padding-bottom: 25px; background: #fff; z-index: 99;}
	</style>
	<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
		<nav>
			<ul id="top_menu2" class="top_menu2">
				<li><a href="/zhaopin/"><img src="http://cdn.597.com/app/images/plugmenu6.png"><label>职位搜索</label></a></li>
				<li><a href="/person/"><img src="http://cdn.597.com/app/images/plugmenu5.png"><label>求职管理</label></a></li>
				<li class="home"><a href="/"></a></li>
				<li><a href="/company/"><img src="http://cdn.597.com/app/images/plugmenu1.png"><label>招聘管理</label></a></li>
				<li><a href="qrcode:"><img src="http://cdn.597.com/app/images/plugmenu8.png"><label>二维码</label></a>
				</li>
			</ul>
		</nav>
	</div>
	<!--{/if}-->
<!--{/if}-->
	<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.cookie.js?v=20140312"></script>
	<script type="text/javascript">
		var loginInfoTime = $.cookie("loginInfo{$com['_cid']}"),
			curTime = Math.round(new Date().getTime()/1000);

		if(typeof(loginInfoTime)=='undefined'||curTime>loginInfoTime){
			var loginTypeValue = "<!--{if isset($_SESSION['FROM_PATH'])}-->59<!--{else}-->29<!--{/if}-->";
			$.ajax({
				type: "POST",
				url:"/api/web/company.api",
				data:{act:"loginLog",cidHash:"{$com['cid']}",loginType:loginTypeValue},
				dataType:"json",
				success:function(data){
					if(data.status>0){
						$.cookie("loginInfo{$com['_cid']}",data.time,3600*24);
					}
				}
			})
		}
	</script>

	<script src="http://cdn.{ROOT_DOMAIN}/tongji.js?v=20160317" language="JavaScript"></script>
	<script>
	/*
		function turnResume(rid,joinid){
			if(rid==''||typeof(rid)==undefined) alert('参数错误');
			$.ajax({
				type:'POST',
				url:'/api/web/company.api',
				data:{
					act:'getResumeFree',
					rid:rid
				},
				dataType:'json',
				success:function(data){
					if(data.status==1){
						window.location.href = '/company/resume/resume.html?rid='+rid+'&join_id='+(joinid||'');
					}else{
						if(data.status==-104){
							data.msg = data.msg.replace(/<a .*<\/a>/g,'');
						}
						alert(data.msg);
						return;
					}
				}

			});
		}
	*/
	</script>