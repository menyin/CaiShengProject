<div id="sidebar" style="">
	<div class="title">
		<div class="m_bg"> 财务管理 </div>
	</div> 
	<div class="trees blockTextLink" style="">
		<!--{if in_array('财务管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">财务管理</div>
			<ul class="nodes">
				<li class="node"><a href="pay.html?act=list&op=all">总列表</a></li>
				<li class="node"><a href="pay.html?act=list&op=ischeck">初始列表</a></li>
				<li class="node"><a href="pay.html?act=list&op=ok1">已支付列表</a></li>
				<li class="node"><a href="pay.html?act=list&op=ok2">已结算列表</a></li>
				<li class="node"><a href="pay.html?act=list&op=no">已关闭列表</a></li>
			</ul>
		</div>
		<div class="tree tree-expand">
			<div class="name">绩效管理</div>
			<ul class="nodes">
				<li class="node"><a href="sale_record.html?act=list">客服绩效管理</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('财务报表', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">财务报表</div>
			<ul class="nodes">
				<!-- <li class="node"><a href="count.html?act=list&op=1">充值统计</a></li> -->
				<li class="node"><a href="pay.html?act=list&op=all&consume_type=2">消费总列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('财务合同管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">合同管理</div>
			<ul class="nodes">
				<li class="node"><a href="contract.html?act=list&op=all">合同总列表</a></li>
				<li class="node"><a href="contract.html?act=list&op=ok">已通过列表</a></li>
				<li class="node"><a href="contract.html?act=list&op=ischeck">待审核列表</a></li>
				<li class="node"><a href="contract.html?act=list&op=no">被驳回列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('财务广告管理', $__r)}-->
		<!-- <div class="tree tree-expand">
			<div class="name">财务广告管理</div>
			<ul class="nodes">
				<li class="node"><a href="contract.html?act=advlist&op=all">广告总列表</a></li>
			</ul>
		</div> -->
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