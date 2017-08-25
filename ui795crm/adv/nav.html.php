<div id="contentNav">
	<div id="nav">
		<div class="wrapper">
			<div class="nav-home blockLink">
				<a href="/">
				</a>
			</div>
			<ul class="navs blockLink">
				<li class="items"><a href="/setting/">系统设置</a></li>
				<li class="items"><a href="/company/">企业审核</a></li>
				<li class="items"><a href="/person/">个人审核</a></li>
				<li class="items"><a href="/service/">客服管理</a></li>
				<li class="items"><a href="/sell/">销售管理</a></li>
				<li class="items"><a href="/finance/">财务管理</a></li>
				<li class="items"><a href="/design/">开通设计管理</a></li>
				<!-- <li class="items"><a class="current" href="/adv/">广告管理</a></li> -->
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
										<a onclick="Boxy.load('/setting/admin.html?act=view&adminid={$_SESSION[adminid]}',{title: '个人信息'});">个人信息</a>
									</div>
									<div class="menu">
										<a onclick="Boxy.load('/setting/admin.html?act=password&adminid={$_SESSION[adminid]}',{title: '密码修改'});">密码修改</a>
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