<header id="header">
	<div class="hdCon">
		<div class="hdL">
			<span class="logo"><a href="/"></a></span>
			<nav>
				<ul>
					<li class="navLst"><a href="/" id="indexPage" class="navLnk" style="font-size:14px;color:#fff;font-family:微软雅黑;margin-left:10px;">首页</a></li>
				</ul>
				<div class="clear"></div>
			</nav>
			<!--
			<div id="search_box_a" class="search_box_a">
				<div class="selecter">
					<div class="label">
						<i class="jpFntWes">&#xf0dd;</i>
						<label>职位</label>
					</div>
					<ul class="options">
						<li data-value="1"><a href="javascript:">职位</a></li>
						<li data-value="2"><a href="javascript:">公司</a></li>
					</ul>
				</div>
				<div class="searchInput">
					<input id="searchInput" class="keys" type="text" value='' />
					<div id="ui_hbsug" class="ui_hbsug"></div>
				</div>
				<button>搜 索</button>
			</div>
			-->
		</div>
		<div class="hdR" id="hdR">
			<ul>
			<li class="thelpInfo" id="helpBox">
				<a href="/company/logout.html" class="lnk">退出登录</a>
			</li>
			<li class="line">&nbsp;</li>
			<li class="tcomInfo" id="boxCompanyInfo">
				<a href="/com-{$com[_cid]}/" target="_blank" class="lnk" >{$com[cname]}</a>
			</li>
			<li class="line">&nbsp;</li>
			<li id="quickMenu">
					<span style="color:#fff;" class="qkBtn">快速导航<i class="jpFntWes searchType"></i></span>
					<div class="qkCon">
						<h3><em class="close">&times;</em>快速导航<span>小提示：您可以快速选择所需的服务!</span></h3>
						<dl>
							<dt>招聘管理</dt>
							<dd ><a href="/company/job/">职位管理</a></dd>
							<dd ><a href="/company/resume/apply.html">收到的简历</a></dd>
							<dd ><a href="/company/resume/search.html">简历搜索</a></dd>
							<dd ><a href="/company/resume/download.html">下载的简历</a></dd>
							<dd ><a href="/company/resume/invite.html">面试邀请</a></dd>
							<dd ><a href="/company/resume/fav.html">收藏的简历</a></dd> 
							<dd ><a href="/company/resume/visit.html">浏览过的简历</a></dd>
						</dl>
						<dl>
							<dt>账户管理</dt>
							<dd><a href="/company/account/index.html">我的账户</a></dd>
							<dd ><a href="/company/account/info.html">企业资料</a></dd>
							<dd ><a href="/company/account/licence.html">企业认证</a></dd>
							<dd ><a href="/company/account/environment.html">企业环境</a></dd>
							<dd><a href="/company/account/pay.html">账户充值</a></dd>
							<dd><a href="/com-{$com[_cid]}/" target="_blank">个性化装扮</a></dd>
						</dl>
						<dl>
							<dt>购买服务</dt>
							<dd ><a href="/company/service/myservice.html">我的服务</a></dd>
							<dd ><a href="/company/service/service.html">购买服务</a></dd>
							<dd ><a href="/company/help/index.html?id=1">常见问题</a></dd>
							<dd ><a href="/about/price.html">收费标准</a></dd>
						</dl>
						<dl>
							<dt>消息</dt>
							<dd><a href="/company/message/?act=9">系统公告</a></dd>
							<dd ><a href="/company/message/?act=0">普通消息</a></dd>
							<dd ><a href="/company/message/?act=1">面试邀请</a></dd>
							<dd ><a href="/company/message/?act=2">投递信息</a></dd>
						</dl>
						<dl class="last">
							<dt>招聘</dt>
							<dd><a  href="/">首页</a></dd>
							<dd><a href="/jobSearch.html">找工作</a></dd>
							<dd><a href="/company/resume/search.html">找人才</a></dd>
							<dd><a href="/famous.html">名企招聘</a></dd>
							<!--<dd><a href="/guide/">职场指南</a></dd>
							<dd><a href="/hrnews/">HR 资讯</a></dd>-->
						</dl>
						<div class="clear"></div>
					</div>
				</li>
			<li ><a href="/company/help/index.html?id=1" class="lnk" style="margin-right:30px;">常见问题</a></li>
                <li style="margin-left: 0;"><img src="http://cdn.597.com/www/img/brus/new.png" style="width: 30px;padding-right: 10px;position: relative;top: 5px;" alt=""/></li>

                <li style="position: relative;margin-right: 0;">
                    <a id="downPersonCode" class="lnk">app下载</a>
                    <div style="display: none;position: absolute;left: -30px;z-index: 99999;top: 40px;width: 150px;box-shadow:0 0 43px black">
                        <img src="http://cdn.597.com/www/img/brus/codeCom.png" style="width: 100%;" alt=""/>
                    </div>
                </li>

			</ul>
		</div>
	</div>
</header>
<aside>
	<div class="sbN">
		<ul>
			<li  id="cssNavIndex" class="first"><a href="/company/">管理中心</a></li>
			<li id="cssNavsZhiwei"  ><a href="javascript:void(0)">职位管理</a></li>
			<li id="cssNavsJob"  ><a href="javascript:void(0)">简历管理</a></li>
			<li  id="cssNavsAccount" ><a href="/company/account/">账户管理</a></li>
			<li id="cssNavsService" ><a href="javascript:void(0)" >购买服务</a></li>
			<li id="cssNavsZph" ><a href="/company/zph/" >招聘会</a></li>
			<!--<li  id="cssNavsMessage"><a href="javascript:void(0)" >消息</a></li> -->
		</ul><a href="#" class="hb tSchBtn" id="keyBtn"></a>
		<dl id="manul">
			<dd><a href="/about/price.html" target="_blank" class="lnk" id="shoufei">收费标准 <i class="jpIconMoon money">￥</i></a></dd>
			<dd><a href="/com-{$com[_cid]}/" class="lnk" target="_blank">主页预览 <i class="jpFntWes"></i></a></dd>
			<dd><a href="javascript:void(0)" class="lnk" id="addJobLnk">发布职位 <i class="jpFntWes">&#xf067;</i></a></dd>
			<dd><a href="javascript:void(0)" class="lnk" id="searchResume">搜索简历 <i class="jpIconMoon"></i></a></dd>
		</dl>
			
	</div>	
</aside>
<style>
    .arrow{
        width: 30px;height: 40px;position: absolute;background: #9d9d9d;color: white;line-height: 40px;
        font-size: 20px;cursor: pointer;
        top: 32px;left: -0px;z-index: 9;
    }
    .arrowR{
        width: 30px;height: 40px;position: absolute;background: #9d9d9d;color: white;line-height: 40px;
        font-size: 20px;cursor: pointer;
        top: 32px;right: 0px;z-index: 9;
    }
    .arr{
        display: none;
    }
</style>
<div class="subNav2" style="overflow: hidden;position: relative;" >
    <div class="arr arrow" onclick="arrowLeft(1);"><</div>
    <div class="arr arrowR" onclick="arrowLeft(2);">></div>
	<ul id="cssNavJob" style="display:none;width: 2000px;">
		<li id="cssResumeApply"><a href="/company/resume/apply.html">收到的简历</a></li>
		<li id="cssResumeSearch"><a href="/company/resume/search.html">简历搜索</a></li>
		<li id="cssResumeDownload"><a href="/company/resume/download.html">下载的简历</a></li>
		<li id="cssResumeInvite"><a href="/company/resume/invite.html">面试邀请</a></li>
		<li id="cssResumeInviteTpl"><a href="/company/resume/invitetpl.html">面试邀请模板</a></li>
		<li id="cssResumeFav"><a href="/company/resume/fav.html">收藏的简历</a></li> 
		<li id="cssResumeVisit" class="last"><a href="/company/resume/visit.html" >浏览过的简历</a></li>
		<li id="cssResumeRecycle"><a href="/company/resume/recycle.html">简历回收站</a></li>
        <li id="cssResumeSeekTpl"  ><a href="/company/resume/seekTpl.html">简历搜索器</a></li>

	</ul>
	<ul id="cssNavService" style="display:none" >
		<li id="cssServiceMyService" ><a href="/company/service/myservice.html">我的服务</a></li>
		<li id="cssServiceService"  class="last"><a href="/company/service/service.html">购买服务</a></li>
		<!--<li id="cssServiceMySpread"><a href="/company/service/myspread.html">我的推广</a></li>
		<li id="cssServiceSpread"><a href="/company/service/spread.html">购买推广</a></li>-->
	</ul>
	<ul id="cssNavAccount" style="display:none" >
		<li id="cssAccountIndex" ><a href="/company/account/index.html">我的账户</a></li>
		<li id="cssAccountInfo"><a href="/company/account/info.html">企业资料</a></li>
		<li id="cssAccountLicence"><a href="/company/account/licence.html">企业认证</a></li>
		<li id="cssAccountEnvironment"><a href="/company/account/environment.html">企业环境</a></li>
		<li><a href="/com-{$com[_cid]}/#dressUp" target="_blank">个性装扮</a></li>
		<!--{if $com['licenceCheck']>=1}-->
		<li id="cssAccountPay"><a href="/company/account/pay.html">账户充值</a></li>
		<!--{/if}-->
		<li id="cssWeixinList"><a href="/company/account/weixinlist.html">微信绑定列表</a></li>
		<li id="cssMessageList"><a href="/company/account/messagelist.html">短信发送列表</a></li>
		<!--<li id="cssAccountSkin"  class="last"><a href="/company/account/companyskin.html">企业展示模板</a></li>-->

	</ul>
	<ul id="cssNavMessage" style="display:none" >
		<li id="cssMessage9" ><a href="/company/message/?act=9">系统公告</a></li>
		<li id="cssMessage0"  class="last"><a href="/company/message/?act=0">普通消息</a></li>
		<!--<li id="cssMessage1"><a href="/company/message/?act=1">面试邀请</a></li>
		<li id="cssMessage2"><a href="/company/message/?act=2">投递信息</a></li>-->
	</ul>
	<ul id="cssNavHelp" style="display:none" >
		<li id="cssNavHelp1" ><a href="/company/help/index.html?id=1">企业信息</a></li>
		<li id="cssNavHelp2"><a href="/company/help/index.html?id=2">职位管理</a></li>
		<li id="cssNavHelp3"  class="last"><a href="/company/help/index.html?id=3">购买服务</a></li>
		<!--<li id="cssMessage1"><a href="/company/message/?act=1">面试邀请</a></li>
		<li id="cssMessage2"><a href="/company/message/?act=2">投递信息</a></li>-->
	</ul>
</div>
<div id="screen"></div>
<div class="wx_tip" style="z-index: 999;">
	<img src="http://cdn.597.com/www/img/v2/resume/wx_tip_com.gif" alt="" />
	<span class="wx_close" onclick="this.parentNode.style.display = 'none';"></span>
</div>
<div class="wx_tip" style="margin-top: 190px;z-index: 999;">
    <img src="http://cdn.597.com/www/img/brus/comCodeRight.png" alt="" />
    <span class="wx_close" onclick="this.parentNode.style.display = 'none';"></span>
</div>
<script type="text/javascript" language="javascript">
    //		显示或者隐藏二维码下载；
    $("#downPersonCode").mouseover(function () {
        $(this).next().show();
    }).mouseout(function () {
        $(this).next().hide();
    });
    function arrowLeft(type) {
        if(type==1){//左移
            $("#cssNavJob").animate({
                marginLeft:'0'
            },300);
        }else {
            $("#cssNavJob").animate({
                marginLeft:'-905px'
            },300);
        }
    }
//    加载的时候不需要动画，影响体验；
    function arrowLeft2() {
        $("#cssNavJob").animate({
            marginLeft:'-905px'
        },0);
    }
	// 通过JS设置导航的样式
	$(document).ready(function(){
		function getUrlParam(url,name){
			var reg = new RegExp("(\\\?|&)"+ name +"=([^&]*)(&|$)");
			var r = url.match(reg);
			if (r!=null) return unescape(r[2]); 
			return 'null';
		}
		var pageUrl = document.URL;
		var pageName = window.location.pathname.toLowerCase();

		var pageAtc = getUrlParam(pageUrl,'act');
		//alert(pageUrl+'-'+pageName+'-'+pageAtc);

		if (pageName.indexOf('/company/job/')>=0) {
			$('.subNav2').hide();
			$('#content').css('margin-top','10px');
			if (pageName.indexOf('/company/job/')>=0) $("#cssNavsZhiwei").addClass("cu");
			if (pageName.indexOf('/company/resume/apply.html')>=0) $("#cssResumeApply").addClass("cu");
			if (pageName.indexOf('/company/resume/search.html')>=0) $("#cssResumeSearch").addClass("cu");
			if (pageName.indexOf('/company/resume/download.html')>=0) $("#cssResumeDownload").addClass("cu");
			if (pageName.indexOf('/company/resume/invite.html')>=0) $("#cssResumeInvite").addClass("cu");
			if (pageName.indexOf('/company/resume/invitetpl.html')>=0) $("#cssResumeInviteTpl").addClass("cu");
			if (pageName.indexOf('/company/resume/fav.html')>=0) $("#cssResumeFav").addClass("cu");
			if (pageName.indexOf('/company/resume/recommend.html')>=0) $("#cssResumeRecommend").addClass("cu");
			if (pageName.indexOf('/company/resume/recycle.html')>=0) $("#cssResumeRecycle").addClass("cu");
			if (pageName.indexOf('/company/resume/visit.html')>=0) $("#cssResumeVisit").addClass("cu");
		}
		if (pageName.indexOf('/company/zph/')>=0) {
			$('.subNav2').hide();
			$('#content').css('margin-top','10px');
			if (pageName.indexOf('/company/zph/')>=0) $("#cssNavsZph").addClass("cu");
		}
		if (pageName.indexOf('/company/resume/')>=0||pageName.indexOf('/resume.html')>=0 ) {
			$("#cssNavJob").show();
            $(".arr").show();
			$("#cssNavService").hide();
			$("#cssNavAccount").hide();
			$("#cssNavMessage").hide();
			$("#cssNavHelp").hide();
			$("#cssNavsJob").addClass("cu");
			if (pageName.indexOf('/company/job/')>=0) $("#cssJobJob").addClass("cu");

			if (pageName.indexOf('/company/resume/apply.html')>=0) $("#cssResumeApply").addClass("cu");
			if (pageName.indexOf('/company/resume/search.html')>=0) $("#cssResumeSearch").addClass("cu");
			if (pageName.indexOf('/company/resume/download.html')>=0) $("#cssResumeDownload").addClass("cu");
			if (pageName.indexOf('/company/resume/invite.html')>=0) $("#cssResumeInvite").addClass("cu");
			if (pageName.indexOf('/company/resume/invitetpl.html')>=0) $("#cssResumeInviteTpl").addClass("cu");
			if (pageName.indexOf('/company/resume/fav.html')>=0) $("#cssResumeFav").addClass("cu");
			if (pageName.indexOf('/company/resume/recommend.html')>=0) $("#cssResumeRecommend").addClass("cu");
			if (pageName.indexOf('/company/resume/recycle.html')>=0) $("#cssResumeRecycle").addClass("cu");
            if (pageName.indexOf('/company/resume/visit.html')>=0) $("#cssResumeVisit").addClass("cu");
            if(pageName.indexOf('/company/resume/seektpl.html')>=0){
                $("#cssResumeSeekTpl").addClass("cu");
                arrowLeft2();
            }
		}
		if (pageName.indexOf('/company/account/')>=0) {
			$("#cssNavJob").hide();
			$("#cssNavService").hide();
			$("#cssNavMessage").hide();
			$("#cssNavAccount").show();
			$("#cssNavHelp").hide();
			$("#cssNavsAccount").addClass("cu");

			if (pageName.indexOf('/company/account/index.html')>=0 || pageName=='/company/account/') $("#cssAccountIndex").addClass("cu");
			if (pageName.indexOf('/company/account/contact.html')>=0) $("#cssAccountContact").addClass("cu");
			if (pageName.indexOf('/company/account/info.html')>=0) $("#cssAccountInfo").addClass("cu");
			if (pageName.indexOf('/company/account/licence.html')>=0) $("#cssAccountLicence").addClass("cu");
			if (pageName.indexOf('/company/account/environment.html')>=0) $("#cssAccountEnvironment").addClass("cu");
			if (pageName.indexOf('/company/account/pay.html')>=0) $("#cssAccountPay").addClass("cu");
			if (pageName.indexOf('/company/account/companyskin.html')>=0) $("#cssAccountSkin").addClass("cu");
			if (pageName.indexOf('/company/account/weixinlist.html')>=0) $("#cssWeixinList").addClass("cu");
			if (pageName.indexOf('/company/account/messagelist.html')>=0) $("#cssMessageList").addClass("cu");
		}
		if (pageName.indexOf('/company/service/')>=0) {
			$("#cssNavJob").hide();
			$("#cssNavAccount").hide();
			$("#cssNavService").show();
			$("#cssNavMessage").hide();
			$("#cssNavHelp").hide();
			$("#cssNavsService").addClass("cu");
			//if (pageName.indexOf('/company/service/index.html')>=0 || pageName=='/company/service/') $("#cssServiceIndex").addClass("cu");
			if (pageName.indexOf('/company/service/service.html')>=0) $("#cssServiceService").addClass("cu");
			if (pageName.indexOf('/company/service/myservice.html')>=0) $("#cssServiceMyService").addClass("cu");
			if (pageName.indexOf('/company/service/myspread.html')>=0) $("#cssServiceMySpread").addClass("cu");
			if (pageName.indexOf('/company/service/spread.html')>=0) $("#cssServiceSpread").addClass("cu");
		}
		if (pageName.indexOf('/company/message/')>=0) {
			$("#cssNavJob").hide();
			$("#cssNavAccount").hide();
			$("#cssNavService").hide();
			$("#cssNavMessage").show();
			$("#cssNavHelp").hide();
			$("#cssNavsMessage").addClass("cu");
			//if (pageName.indexOf('/company/message/index.html')>=0 || pageName=='/company/message/') $("#cssMessageIndex").addClass("cu");
			if (pageAtc=='null') $("#cssMessage0").addClass("cu");
			if (pageAtc==0) $("#cssMessage0").addClass("cu");
			if (pageAtc==1) $("#cssMessage1").addClass("cu");
			if (pageAtc==2) $("#cssMessage2").addClass("cu");
			if (pageAtc==9) $("#cssMessage9").addClass("cu");
		}

		if (pageName.indexOf('/company/help/')>=0) {
			$("#cssNavJob").hide();
			$("#cssNavAccount").hide();
			$("#cssNavService").hide();
			$("#cssNavMessage").hide();
			$("#cssNavHelp").show();
			$("#cssNavsHelp").addClass("cu");
			if (pageUrl.indexOf('/company/help/index.html?id=1')>=0) $("#cssNavHelp1").addClass("cu");
			if (pageUrl.indexOf('/company/help/index.html?id=2')>=0) $("#cssNavHelp2").addClass("cu");
			if (pageUrl.indexOf('/company/help/index.html?id=3')>=0) $("#cssNavHelp3").addClass("cu");
		}


		if(/company\/$/.test(pageName)){
			$('#cssNavIndex').addClass('cu').css('background', 'none');
		}	

		// 快速导航菜单
	
		$('#screen').height($(document).height());
		$('.qkBtn').click(function(){
			$('.qkCon').show();
			$('#screen').show();
		});
		$('#quickMenu .close').add('#screen').click(function() {
			$('.qkCon').add('#screen').hide();
		});


		

		if($.browser.msie && $.browser.version < 8){
			$('.selecter .label').click(function(){
				$(this).siblings('.options').toggle();
			});
		} else {
			$('.selecter').hover(function(e) {
				$(this).find('.options').show();
			},function(){
				$(this).find('.options').hide();
			});
		}

		$('.options li').click(function(){
			$(this).hide().siblings().show().parents('.options').hide();
			$('.selecter').find('label').text($(this).text()).attr('data-value',$(this).attr('data-value'));

			if($(this).index() == 0){
				$('#searchInput').val('找一找，总有适合您的工作');
			} else {
				$('#searchInput').val('请输入公司名称');
			}
		}).eq(0).click();


		$('#searchInput').focus(function(){
			var defVal = $(this).val();
			if(defVal == '找一找，总有适合您的工作' || defVal == '请输入公司名称'){
				$(this).val('');
			}
		});

		$('#searchInput').blur(function(){
			var data = $('.selecter').find('label').attr('data-value');
			if($(this).val() == ''){
				if(data == 1){
					$(this).val( '找一找，总有适合您的工作');
				} else if(data == 2) {
					$(this).val('请输入公司名称');
				}
			}
		});

		$('#searchInput').keyup(function(e){
			if(e.keyCode == 13){
				$('#search_box_a button').click();
			}
		});

		$('#search_box_a button').click(function(){
			var val = $('#searchInput').val();
			var data = $('.selecter').find('label').attr('data-value');

			if(val == '找一找，总有适合您的工作' || val == '请输入公司名称'){
				val = '';
			}

			val = encodeURIComponent(val);

			var path = data == 1 ? ('/search/?txtKeyWord=' + val) : ('/search/c1/?txtKeyWord=' + val);

			window.location.href = path;
		});

		// 微信图片定位
		$('.wx_tip').css('left',$(window).width()  / 2 + 504).show();

	});


	//$.anchorMsg('请选择需要查看的简历', { icon: 'warning' });
	//$.message('<p>您未开通“企业个性化主页服务”！</p><p>请致电<span class="red strong">400-887-2887</span>联系开通,否则您在此页面进行的所有操作将<span style="color:#FF0000">无法保存</span>，求职者将无法看到您的个性化招聘主页。</p>', { icon: "warning" });
	//var url = 'http://www.baidu.com';
	//$.showModal(url, { title: '添加模板' });
</script>
