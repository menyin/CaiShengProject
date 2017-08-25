<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 劳务派遣管理 </div> 
	</div> 
	<div class="trees blockTextLink" style=""> 
		<!--{if in_array('客户管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">客户管理</div>
			<ul class="nodes">
				<li class="node"><a href="company.html?act=edit">新增客户</a></li>
				<li class="node"><a href="company.html?act=list">客户管理</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('档案管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">档案管理</div>
			<ul class="nodes">
				<li class="node"><a href="person.html?act=edit">新增档案</a></li>
				<li class="node"><a href="person.html?act=list">档案管理</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('派遣管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">派遣管理</div>
			<ul class="nodes">
				<li class="node"><a href="dispatch.html?act=list">派遣管理</a></li>
				<li class="node"><a href="person.html?act=salary">工资录入</a></li>
				<li class="node"><a href="person.html?act=salaryList">工资记录</a></li>
			</ul>
		</div>
		<!--{/if}-->
<!--
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