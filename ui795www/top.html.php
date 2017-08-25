<div class="topNav">
	<div class="topNavCon">
		<span class="topNavR">
			<div id="user_menu_notlogin" >
				<span class="per_icon">&nbsp;</span><a href="{$jobUrl}/person/login.html">求职者登录</a><span class="topLine">|</span><a href="{$jobUrl}/company/login.html">企业登录</a><span class="topLine">|</span><a href="{$jobUrl}/person/register.htm" style="font-weight:normal;">免费注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
			<span class="" id="user_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span><a href="{$jobUrl}/person/" id="user_menu_name" class="user_name" target="_blank"></a><span class="topLine">|</span>
				<a href="{$jobUrl}/person/logout.html" style="color:#777">[退出]</a>
			</span>
			<span class="" id="com_menu_logined" style="margin-right:0; display:none;">
				<span class="per_icon">&nbsp;</span><a href="{$jobUrl}/company/" id="com_menu_name" class="user_name" target="_blank"></a><span class="topLine">|</span>
				<a href="{$jobUrl}/company/logout.html" style="color:#777">[退出]</a>
			</span>
		</span>
		<ul>
			<!-- <li><a href="#">切换城市 <i class="jpFntWes searchType" style="font-size:14px;"></i></a></li><em class="topLine">|</em> -->
			<li><a href="{$jobUrl}/">首 页</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/zhaopin/" target="_blank">找工作</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/company/resume/search.html"  target="_blank">找人才</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/person/"  target="_blank">求职管理</a></li><em class="topLine">|</em>
			<li><a href="{$jobUrl}/companyjob.html"  target="_blank">最新招聘</a></li><em class="topLine">|</em>
			<!--<li><a href="/guide/"  target="_blank">职场指南</a></li><em class="topLine">|</em>
			<li><a href="/hrnews/"  target="_blank">HR资讯</a></li>-->
		</ul>
	</div>
</div>
<div id="header" class="topHeader " style="height:80px;padding-top:10px;">
	<div class="header_fix">
		<div class="header_cont">
			<div class="header_left">
				<a class="logo" href="/"><img src="http://cdn.597.com/img/common/smLogo.jpg" alt="" /></a>
				<div class="nav" >
					<div class="changeCity">
						<span id="currentCity"><!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}--></span><br />
						<a href="/changecity.html"  id="showCitys">切换城市 <i class="jpFntWes searchType"></i></a>
					</div>
					<!-- <a id="browser" href="javascript:"><i class="jpFntWes">&#xf03a;</i>浏览</a> -->
				</div>
				<!--{if !$isJob}-->
				<div id="search_box_a" class="search_box_a mgt5" >
					<form action="">
						<div class="selecter">
							<div class="label">
								<i class="jpFntWes">&#xf0dd;</i>
								<label>全文</label>
							</div>
							<ul class="options">
								<li data-value="1"><a href="javascript:">职位</a></li>
								<li data-value="2"><a href="javascript:">公司</a></li>
								<li data-value="3"><a href="javascript:">全文</a></li>
							</ul>
						</div>
						<div class="searchInput">
							<input id="searchInput" class="keys" type="text" value='{$_GET[keyword]}' />
							<div id="ui_hbsug" class="ui_hbsug"></div>
						</div>
						<em>
							<b></b>
						</em>
						<button id="search">搜 索</button>
					</form>
				</div>
				<!--<a class="adSearch" href="/jobSearch.html" >高级搜索</a>-->
				<!--{/if}-->
			</div>
			<div class="btns" id="btns">
				<span class="loginBtn">
					<i class="jpFntWes ico" ></i>手机站<i class="jpFntWes searchType"></i>
					<p>
						<img src="http://cdn.597.com/img/common/mobileIco.png" alt="手机站点：m.597.com" />
						<em>手机站点：m.597.com</em>
					</p>
				</span>
				<span class="zhuce">
					<img src="http://cdn.597.com/img/common/weixinLogo.jpg" alt="微信" class="weixinIco" />微信<i class="jpFntWes searchType"></i>
					<p>
						<img src="http://cdn.597.com/img/common/wxCode.png" alt="关注597官方微信！" />
						<em>关注597官方微信！</em>
					</p>
				</span>
			</div>
		</div>
	</div>

</div>

<div id="boxNav" class="navBox panelBox">
	<div class="navBoxC">
		<div class="l">
			<div class="navLst">
				<p><a href="/jobSearch.html">找工作</a></p>
				<p><a href="/famous.html">名企招聘</a></p>
				<!--<p><a href="/hrnews/">HR咨询</a></p>
				<p><a href="/guide/">职场指南</a></p>-->
				<p><a href="/company/login.html">企业服务</a></p>
			</div>
			<div class="navPhone"><p>下载手机客户端</p><p class="lnk"><a href="javascript:;"></a></p></div>
		 </div>
		<div class="r">
			<div class="hd"><h3>热门导航</h3></div>
			<div class="bd">
				<ul>
				<li><a href="/zhaopin/?q=销售">销售</a></li>
				<li><a href="/zhaopin/?q=会计">会计</a></li>
				<li><a href="/zhaopin/?q=营业员">营业员</a></li>
				 <li><a href="/zhaopin/?q=出纳">出纳</a></li>
				<li><a href="/zhaopin/?q=人力资源">人力资源</a></li>
				<li><a href="/zhaopin/?q=文员">文员</a></li>
				<li><a href="/zhaopin/?q=前台">前台</a></li>
				<li><a href="/zhaopin/?q=网络推广">网络推广</a></li>
				<li><a href="/zhaopin/?q=软件开发">软件开发</a></li>
				<li><a href="/zhaopin/?q=美工">美工</a></li>
				<li><a href="/zhaopin/?q=网站运营">网站运营</a></li>
				<li><a href="/zhaopin/?q=行政">行政</a></li>
				<li><a href="/zhaopin/?q=设计">设计</a></li>
				<li><a href="/zhaopin/?q=平面">平面</a></li>
				<li><a href="/zhaopin/?q=助理">助理</a></li>
				<li><a href="/zhaopin/?q=施工员">施工员</a></li>
				<li><a href="/zhaopin/?q=置业顾问">置业顾问</a></li>
				<li><a href="/zhaopin/?q=服务员">服务员</a></li>
				<li><a href="/zhaopin/?q=二手房销售">二手房销售</a></li>
				<li><a href="/zhaopin/?q=平面模特">平面模特</a></li>
				<li><a href="/zhaopin/?q=护理师">护理师</a></li>
				<li class="hot"><a href="/zhaopin/?q=外贸">外贸</a></li>
				<li class="hot"><a href="/zhaopin/?q=营销总监">营销总监</a></li><li class="hot"><a target="_blank" href="/zhaopin/?q=大区经理">大区经理</a></li>
				<li class="hot"><a href="/zhaopin/?q=总经理">总经理</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<b class="arr"></b>
	</div>
</div>
<script type="text/javascript">
	/*
	 * 查询js
	 */
	//var currentCity="<!--{if $domainInfo['region_id']==1}-->全国站<!--{else}-->{$domainInfo['region_name_short']}人才网<!--{/if}-->";
	jpjs.use('@search', function(m){
		var $ = m['jquery'],
			trigger = $('#browser'),
			popup = m['widge.popup'],
			cookie = m['tools.cookie'],
			p = new popup({
				idName: 'navBox panelBox',
				width: 550,
				height: 'auto',
				align: {
					baseElement: trigger,
					baseXY: ['-50%', '100%+10']
				}
			}),
			hideTimer,
			element = p.get('element');

		var nickName=cookie.get('nickname',{isDecode: true});
		var userType=cookie.get("userType");
		if(nickName){
			if(userType=='1'){
				$('#user_menu_notlogin').hide();
				$('#com_menu_logined').hide();
				$('#user_menu_logined').show();
				$('#user_menu_logined').find('#user_menu_name').html(nickName);
			}
			if(userType=='2'){
				$('#user_menu_notlogin').hide();
				$('#com_menu_logined').show();
				$('#user_menu_logined').hide();
				$('#com_menu_logined').find('#com_menu_name').html(nickName);
			}
		}

		//$('#currentCity').html(currentCity);

		$($('#boxNav').remove().html()).appendTo(element);
		trigger.on('mouseenter', enterHandle).on('mouseleave', leaveHandle);
		element.on('mouseenter', enterHandle).on('mouseleave', leaveHandle);

		function enterHandle(){
			hideTimer && clearTimeout(hideTimer);
			p.show();
		}
		function leaveHandle(){
			hideTimer && clearTimeout(hideTimer);
			hideTimer = setTimeout(function(){
				p.hide();
			}, 120);
		}


		//头部搜索
		var defaultIndex = '{$_condition}';
		defaultIndex = (defaultIndex=='') ? 2 : defaultIndex;

		var search = new m['product.jobSearch.jobTopSearch']({
			selectedIndex:defaultIndex,
			search: {
				width: 333
			},
			initDataSource: '',
			dataSource:[],
			url: [
				//'/jobsearch/?key={{query}}',
				//'/jobsearch/?params=u2&key={{query}}',
				//'/salary/{{query}}/'
				'/zhaopin/c1/?q={{{query}}}',
				'/zhaopin/c2/?q={{{query}}}',
				'/zhaopin/c3/?q={{{query}}}'
				//'/zhaopin/'
			],
			placeHolder: [
				'请输入职位关键字',
				'请输入公司关键字',
				'请输入职位或公司关键字'
			]
		});

		var searchInput = search.getSearch(),
			searchSelect = search.getSelect(),
			maxSize = 10;
		searchInput.on('itemAllDelete', function(e){
			$.getJSON('/head/ClearSearchKeywords/?callback=?');
		});
		searchInput.on('itemDeleted', function(e){
			$.getJSON('/head/DelSearchKeyword/?keyword='+e.value+'&callback=?');
		});
		searchInput.on('searchItemSelected', function(e){
			//e.url是链接
			//e.data.text是对应的文字
			//e.index是索引号
			var index = searchSelect.get('selectedIndex');
			window.location.href = e.url;
			/*
			if(e.url){
				$.getJSON('/head/SaveJobkey/?keyword='+e.data.text+'&callback=?',function(result){
					window.location.href = e.url;
				});
			}else {
				window.location.href = e.url;
			}
			*/
		});
		searchInput.before('show', function(){
			this.setLevel(99);
			p.setLevel(98);
		});
		p.before('show', function(){
			this.setLevel(99);
			searchInput.setLevel(98);
		});

		search.on('submit', function(e){
			window.location.href = e.url;
			/*
			if(e.index==0&&e.value) {
				$.getJSON('/head/SaveJobkey/?keyword='+e.value+'&callback=?',function(result){
					window.location.href = e.url;
				});
			}else {
				  window.location.href = e.url;
			}
			*/
		});


		$('#btns span').hover(function() {
			$(this).find('p').show();
		}, function() {
			$(this).find('p').hide();
		});



	});
</script>