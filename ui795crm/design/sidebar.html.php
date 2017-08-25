<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 广告管理 </div> 
	</div> 
	<div class="trees blockTextLink" style=""> 
		<!--{if in_array('图标管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">广告管理</div>
			<ul class="nodes">
				<li class="node"><a href="adv.html?act=list&op=all&advType=-1">广告列表</a></li>
				<li class="node"><a href="adv.html?act=list&op=all&advType=18">推荐企业</a></li>
				<li class="node"><a href="adv.html?act=list&op=all&advType=20">轮放广告</a></li>
				<li class="node"><a href="adv.html?act=list&op=m&advType=-1">手机版广告</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('名企分类', $__r) || in_array('名企管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">名企管理</div>
			<ul class="nodes">
				<!--{if in_array('名企分类', $__r)}-->
					
				<!--{/if}-->
				<!--{if in_array('名企管理', $__r)}-->
					<li class="node"><a href="channel.html?act=comlist&ordertype=1&query=">新增名企</a></li>
					<li class="node"><a href="channel.html?act=goodlist">名企总列表</a></li>
				<!--{/if}-->
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