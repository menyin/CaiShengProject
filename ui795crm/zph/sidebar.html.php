<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 系统设置 </div> 
	</div> 
	<div class="trees blockTextLink" > 
		<div class="tree tree-expand" style="display:none;">
			<div class="name">网络招聘会</div>
			<ul class="nodes">
				<li class="node"><a href="on.html?act=list">广告设置</a></li>
			</ul>
		</div>
		<div class="tree tree-expand">
			<div class="name">招聘点管理</div>
			<ul class="nodes">
				<li class="node"><a href="point.html?act=list&op=ok">招聘点列表</a></li>
				<!-- <li class="node"><a href="admin.html?act=list&op=no">屏蔽总列表</a></li> -->
				<li class="node"><a href="point.html?act=edit&admin_id={$_SESSION[adminid]}">新增招聘点</a></li>
			</ul>
		</div>
		<div class="tree tree-expand" style="display:none;">
			<div class="name">线下招聘会管理</div>
			<ul class="nodes">
				<li class="node"><a href="off.html?act=list&op=ok">线下招聘会列表</a></li>
				<!-- <li class="node"><a href="admin.html?act=list&op=no">屏蔽总列表</a></li> -->
				<li class="node"><a href="off.html?act=edit&admin_id={$_SESSION[adminid]}">新增招聘会</a></li>
			</ul>
		</div>

		<div class="tree tree-expand">
			<div class="name">系统消耗</div>
			<ul class="nodes">
				<li class="node">　　耗时：<?php echo (microtime(true)-START_TIME)?></li>
				<li class="node">　　查询：{$GLOBALS['queries']}次</li>
			</ul>
		</div>
	</div>
</div>