<div id="contentNav">
	<div id="nav">
		<div class="wrapper">
			<div class="nav-home blockLink">
				<a href="/">
				</a>
			</div>
			<ul class="navs blockLink" id="blockLnkUl">
				<!--{if in_array('站点管理', $__r) || in_array('产品管理', $__r) || in_array('友链管理', $__r) || in_array('公告管理', $__r) || in_array('权限管理', $__r) || in_array('地铁管理', $__r) || in_array('地标管理', $__r) || in_array('下级分配', $__r) || in_array('我的下级', $__r) || in_array('客户分配管理', $__r) || in_array('系统短信管理', $__r)}-->
					<li class="items"><a href="/setting/">系统设置</a></li>
				<!--{/if}-->
				<!--{if in_array('基本信息审核', $__r) || in_array('营业执照审核', $__r) || in_array('职位审核', $__r) || in_array('企业信息复审', $__r) || in_array('企业其他管理', $__r) || in_array('企业免审', $__r) || in_array('企业删除', $__r)}-->
					<li class="items"><a href="/company/">企业审核</a></li>
				<!--{/if}-->
				<!--{if in_array('简历审核', $__r) || in_array('个人实名审核', $__r)}-->
					<li class="items"><a href="/person/">个人审核</a></li>
				<!--{/if}-->
				<!--{if in_array('客服公共库', $__r) || in_array('客服快速注册', $__r) || in_array('客服公司查重', $__r) || in_array('客服企业管理', $__r) || in_array('客服合同管理', $__r) || in_array('客服短信管理', $__r)  || in_array('客服绩效管理', $__r)}-->
					<li class="items"><a href="/service/">客服管理</a></li>
				<!--{/if}-->
				<!--{if in_array('销售公共库', $__r) || in_array('销售快速注册', $__r) || in_array('销售公司查重', $__r) || in_array('销售企业管理', $__r) || in_array('销售合同管理', $__r) || in_array('销售短信管理', $__r) || in_array('销售绩效管理', $__r)}-->
					<!--<li class="items"><a href="/sell/">销售管理</a></li>-->
				<!--{/if}-->
				<!--{if in_array('续约公共库', $__r) || in_array('续约企业管理', $__r) || in_array('分配续约', $__r)}-->
					<!--<li class="items"><a href="/xuyue/">续约管理</a></li>-->
				<!--{/if}-->
				<!--{if in_array('财务管理', $__r) || in_array('财务新增', $__r) || in_array('已支付', $__r) || in_array('已结算', $__r) || in_array('已关闭', $__r) || in_array('财务初始', $__r) || in_array('财务报表', $__r) || in_array('财务合同管理', $__r)}-->	
					<li class="items"><a href="/finance/">财务管理</a></li>
				<!--{/if}-->
				<!--{if in_array('图标管理', $__r)}-->
					<li class="items"><a href="/design/">开通管理</a></li>
				<!--{/if}-->
				<!--{if in_array('资讯分类管理', $__r) || in_array('资讯管理', $__r) || in_array('反馈管理', $__r)}-->
					<li class="items"><a href="/news/">资讯管理</a></li>
				<!--{/if}-->
				<!--{if in_array('线上招聘会', $__r) || in_array('线下招聘会', $__r) || in_array('招聘点', $__r)}-->
					<li class="items"><a href="/zph/">招聘会管理</a></li>
				<!--{/if}-->
				<!-- <li class="items"><a class="current" href="/adv/">广告管理</a></li> -->
				<!--{if $_SESSION['adminUsername']=='su' || $_SESSION['adminUsername']=='eve'}-->
					<li class="items"><a href="/company/company.html?act=listall&ordertype=3&query=" id="qyss">企业搜索</a></li>
				<!--{/if}-->
				<!--{if $_SESSION['adminUsername']=='su' || $_SESSION['adminUsername']=='eve'}-->
					<li class="items"><a href="/company/companyM.html?act=listM&ordertype=1&query=" id="plgd">批量改单</a></li>
				<!--{/if}-->
				<!--{if in_array('关键词管理', $__r)}-->
					<li class="items"><a href="/keywords/">关键词管理</a></li>
				<!--{/if}-->
				<!--{if in_array('猎头管理', $__r)}-->
					<li class="items"><a href="/hunter/resume.html?act=list" target="_blank">猎头管理</a></li>
				<!--{else}-->
					<li class="items"><a href="http://dt.597.com/" target="_blank">提交图标/发票</a></li>
				<!--{/if}-->
				<!--{if in_array('客户管理', $__r) || in_array('员工管理', $__r) || in_array('派遣管理', $__r)}-->
					<li class="items"><a href="/labor/">劳务派遣</a></li>
				<!--{/if}-->
				<li class="items lastItem"></li>
				<li class="items" id="moreItems" style="display:none;"></li>
			</ul>
			<div class="nav" style="visibility: visible;">
				<ul style="width: 165px;">
					<li style="width: 70px;">
						<div class="item">
							<div class="m_m">
								<div class="m_l">
								</div>
								<div class="m_l m_r">
								</div>
								<div class="m_c">
									<table>
										<tbody>
											<tr>
												<td>
													<span class="i"></span>
													<span class="t">{$_SESSION['adminName']}</span>
													<span class="a"></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="layer">
							<div class="m_t">
								<div class="m_l"></div>
								<div class="m_l m_r"></div>
								<div class="m_c"></div>
							</div>
							<div class="m_m">
								<div class="m_l"></div>
								<div class="m_l m_r"></div>
								<div class="m_c noHideBlockTextLink">
									<div class="menu menu_support">
										<a onclick="Boxy.load('/setting/admin.html?act=view&admin_id={$_SESSION[adminid]}',{title: '个人信息'});">个人信息</a>
									</div>
									<div class="menu">
										<a onclick="Boxy.load('/setting/admin.html?act=password&admin_id={$_SESSION[adminid]}',{title: '密码修改'});">密码修改</a>
									</div>
									<!--{if $_SESSION['adminList'] && $_SESSION['adminList']!=$_SESSION['adminid']}-->
									<div class="menu">
										<a href="/logout_current.html">退出当前账号</a>
									</div>
									<!--{/if}-->
									<div class="menu">
										<a href="/logout.html">退出</a>
									</div>
								</div>
							</div>
							<div class="m_b">
								<div class="m_l">
								</div>
								<div class="m_l m_r">
								</div>
								<div class="m_c">
								</div>
							</div>
						</div>
					</li>
					<li class="block" style="width: 47px;">
						<a href="#" target="_blank">帮助</a>
					</li>
					<li class="block" style="width: 47px;">
						<a href="#" target="_blank">论坛</a>
					</li>
				</ul>
			</div>
			<div class="button shouhou blockTextLink">
				<a href="/logout.html">退出系统</a>
			</div>
			<div class="kefu blockLink">
				<a href="javascript:;">在线客服</a>
			</div>
		</div>
	</div>
</div>


<script>
	var status = window.location.href.split('{$_SERVER[SERVER_NAME]}/')[1].split('/')[0];
	var navLinks = $('#blockLnkUl a');
	navLinks.each(function(){
		if($(this).attr('href').replace(/\//g,'') === status){
			$(this).addClass('current');
		}
	});


	if(navLinks.length > 12){
		var _html = '<a href="#">更多操作 <img src="//cdn.{ROOT_DOMAIN}/crm/images/nav_arrow.gif" alt=""></a><ul></ul>';
		$('#moreItems').append(_html).show().find('ul').append(navLinks.slice(11,navLinks.length).parent().removeAttr('class'));
	}

</script>