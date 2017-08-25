<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 广告管理 </div> 
	</div> 
	<div class="trees blockTextLink" style=""> 
		<!--{if in_array('广告管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">广告管理</div>
			<ul class="nodes">
				<!--{loop $__advStr $key $value}-->
				<li class="node"><a href="adv.html?act=list&type={$key}&act1=all">{$value}</a></li>
				<!--{/loop}-->
				<li class="node"><a href="adv.html?act=list&act1=ischeck">未审核列表</a></li>
				<li class="node"><a href="adv.html?act=list&act1=ok">已通过列表</a></li>
				<li class="node"><a href="adv.html?act=list&act1=no">未通过列表</a></li>
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