<div id="sidebar" style="">
	<div class="title">
		<div class="m_bg"> 个人审核 </div>
	</div> 
	<div class="trees blockTextLink" style="">
		<!--{if in_array('简历审核', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">简历审核</div>
			<ul class="nodes">
				<li class="node"><a href="check_resume.html?act=list&op=all">基本信息总表</a></li>
				<li class="node"><a href="check_resume.html?act=list&op=ischeck">未审核列表</a></li>
				<li class="node"><a href="check_resume.html?act=list&op=ok">已通过列表</a></li>
				<li class="node"><a href="check_resume.html?act=list&op=no">未通过列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('个人实名审核', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">个人实名审核</div>
			<ul class="nodes">
				<li class="node"><a href="check_identity.html?act=list&op=all">个人总表</a></li>
				<li class="node"><a href="check_identity.html?act=list&op=ischeck">未审核列表</a></li>
				<li class="node"><a href="check_identity.html?act=list&op=ok">已通过列表</a></li>
				<li class="node"><a href="check_identity.html?act=list&op=no">未通过列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('个人搜索', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">简历搜索</div>
			<ul class="nodes">
				<li class="node"><a href="person_search.html?act=list">简历列表</a></li>
				<li class="node"><a href="person_search.html?act=oldlist">旧站简历列表</a></li>
				<li class="node"><a href="person_search.html?act=noteList">简历备注</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('用户总表', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">用户总表</div>
			<ul class="nodes">
				<li class="node"><a href="user.html?act=list&user_type=1">用户总表</a></li>
			</ul>
		</div>
		<!--{/if}-->

<!--
		<div class="tree tree-expand">
			<div class="name">管理员管理</div>
			<ul class="nodes">
				<li class="node"><a href="admin.html?act=list">管理员列表</a></li>
			</ul>
		</div>

		<div class="tree tree-expand">
			<div class="name">个人信息</div>
			<ul class="nodes">
			  <li class="node"><a onclick="Boxy.load('admin.html?act=view&adminid={$_SESSION[adminid]}',{title: '个人信息'});">个人信息</a></li>
			  <li class="node"><a onclick="Boxy.load('admin.html?act=password&adminid={$_SESSION[adminid]}',{title: '密码修改'});">密码修改</a></li>
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