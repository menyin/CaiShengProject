<div id="contentNav">
	<div id="nav">
		<div class="wrapper">
			<div class="nav-home blockLink">
				<a href="/">
				</a>
			</div>
			<ul class="navs blockLink">
				<!--{if in_array('站点管理', $__r) || in_array('公告管理', $__r) || in_array('友链管理', $__r) || in_array('管理员管理', $__r) || in_array('定向产品管理', $__r) ||　in_array('定向详情', $__r) || in_array('楼盘定向管理', $__r) || in_array('置顶详情', $__r) || in_array('会员产品管理', $__r)}-->
				<li class="items"><a href="/setting/">系统设置</a></li>
				<!--{/if}-->
				<!--{if in_array('个人管理', $__r) || in_array('经纪人管理', $__r) || in_array('经纪公司管理', $__r)}-->
				<li class="items"><a href="/member/">会员管理</a></li>
				<!--{/if}-->
				<!--{if in_array('开发商管理', $__r) || in_array('楼盘管理', $__r) || in_array('小区管理', $__r) || in_array('出售管理', $__r) || in_array('求购管理', $__r) || in_array('出租管理', $__r) || in_array('求租管理', $__r)}-->
				<li class="items"><a href="/house/" >房源管理</a></li>
				<!--{/if}-->
				<!--{if in_array('资讯分类管理', $__r) || in_array('资讯管理', $__r) || in_array('反馈管理', $__r)}-->
				<li class="items"><a href="/news/">资讯管理</a></li>
				<!--{/if}-->
				<!--{if in_array('广告管理', $__r)}-->
				<li class="items"><a href="/adv/" class="current" >广告管理</a></li>
				<!--{/if}-->
				<!--{if in_array('财务管理', $__r) || in_array('财务报表', $__r)}-->
				<li class="items"><a href="/finance/">财务管理</a></li>
				<!--{/if}-->
				<!--{if in_array('报表管理', $__r) || in_array('日志管理', $__r) || in_array('敏感词管理', $__r)}-->
				<li class="items"><a href="/report/">报表管理</a></li>
				<!--{/if}-->
				<!--{if in_array('联想关键词管理', $__r) || in_array('搜索关键词统计', $__r)}-->
				<li class="items"><a href="/keyword/">关键词管理</a></li>
				<!--{/if}-->
				<!--{if in_array('房价管理', $__r)}-->
				<li class="items"><a href="/fangjia/">房价管理</a></li>
				<!--{/if}-->
				<li class="items lastItem"></li>
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
										<a onclick="Boxy.load('/admin.html?act=view&adminid={$_SESSION[adminid]}',{title: '个人信息'});">个人信息</a>
									</div>
									<div class="menu">
										<a onclick="Boxy.load('/admin.html?act=password&adminid={$_SESSION[adminid]}',{title: '密码修改'});">密码修改</a>
									</div>
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