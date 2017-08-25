<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 系统设置 </div> 
	</div> 
	<div class="trees blockTextLink" style=""> 
		<!--{if in_array('站点管理', $__r) || in_array('友链管理', $__r) || in_array('公告管理', $__r) || in_array('地铁管理', $__r) || in_array('地标管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">站点管理</div>
			<ul class="nodes">
				<!--{if in_array('站点管理', $__r)}-->
					<li class="node"><a href="region.html?act=list">站点设置</a></li>
				<!--{/if}-->
				<!--{if in_array('友链管理', $__r)}-->
					<li class="node"><a href="link.html?act=list">链接设置</a></li>
				<!--{/if}-->
				<!--{if in_array('公告管理', $__r)}-->
					<li class="node"><a href="gg.html?act=list">公告设置</a></li>
				<!--{/if}-->
				<!--{if in_array('地铁管理', $__r)}-->
					<li class="node"><a href="subway.html?act=list">地铁管理</a></li>
				<!--{/if}-->
				<!--{if in_array('地标管理', $__r)}-->
					<li class="node"><a href="landmark.html?act=list">地标管理</a></li>
				<!--{/if}-->
				<!--{if in_array('系统统计', $__r)}-->
					<li class="node"><a href="tongji.html">个人统计</a></li>
					<li class="node"><a href="tongji.html?act=company">企业统计</a></li>
				<!--{/if}-->
				<!--{if in_array('公交站台管理', $__r)}-->
					<li class="node"><a href="station.html?act=list">公交站台管理</a></li>
				<!--{/if}-->
				<!--{if in_array('公交路线管理', $__r)}-->
					<li class="node"><a href="line.html?act=list">公交路线管理</a></li>
				<!--{/if}-->
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('产品管理', $__r)}-->
		<!-- <div class="tree tree-expand">
			<div class="name">产品管理</div>
			<ul class="nodes">
				<li class="node"><a href="com_product.html?act=list">企业产品设置</a></li>
				<li class="node"><a href="per_product.html?act=list">个人产品设置</a></li>
			</ul>
		</div> -->
		<!--{/if}-->
		<!--{if in_array('权限管理', $__r) || in_array('下级分配', $__r) || in_array('我的下级', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">管理员管理</div>
			<ul class="nodes">
				<!--{if in_array('权限管理', $__r)}-->
					<li class="node"><a href="admin.html?act=list&op=ok">管理员列表</a></li>
					<!-- <li class="node"><a href="admin.html?act=list&op=no">屏蔽总列表</a></li> -->
				<!--{/if}-->
				<!--{if in_array('下级分配', $__r)}-->
					<li class="node"><a href="admin.html?act=assignlist">下级分配</a></li>
				<!--{/if}-->
				<!--{if in_array('我的下级', $__r)}-->
					<li class="node"><a href="admin.html?act=nextlist&admin_id={$_SESSION[adminid]}">我的下级</a></li>
				<!--{/if}-->
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('客户分配管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">客户分配管理</div>
			<ul class="nodes">
				<li class="node"><a href="customer_assign.html?act=list">后台会员列表</a></li>
				<li class="node"><a href="company_assign.html?act=company_assign">企业分配</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('系统短信管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">短信管理</div>
			<ul class="nodes">
				<li class="node"><a href="send_messages.html?act=add">发送短信</a></li>
				<li class="node"><a href="send_messages.html?act=list">短信列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
<!--
		<div class="tree tree-expand">
			<div class="name">个人信息</div>
			<ul class="nodes">
			  <li class="node"><a onclick="Boxy.load('admin.html?act=view&admin_id={$_SESSION[adminid]}',{title: '个人信息'});">个人信息</a></li>
			  <li class="node"><a onclick="Boxy.load('admin.html?act=password&admin_id={$_SESSION[adminid]}',{title: '密码修改'});">密码修改</a></li>
			</ul>
		</div>
-->
		<div class="tree tree-expand">
			<div class="name">系统消耗</div>
			<ul class="nodes">
				<li class="node">　　耗时：<?php echo (microtime(true)-START_TIME)?></li>
				<li class="node">　　查询：{$GLOBALS['queries']}次</li>
			</ul>
		</div>
	</div>
</div>