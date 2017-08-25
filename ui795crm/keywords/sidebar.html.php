<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 关键词管理 </div> 
	</div> 
	<div class="trees blockTextLink" style=""> 
		<!--{if in_array('关键词管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">关键词管理</div>
			<ul class="nodes">
				<li class="node"><a href="keywords.html?act=list">关键词管理</a></li>
			</ul>
		</div>
		<!--{/if}-->

		<div class="tree tree-expand">
			<div class="name">系统消耗</div>
			<ul class="nodes">
				<li class="node">　　耗时：<?php echo (microtime(true)-START_TIME)?></li>
				<li class="node">　　查询：{$GLOBALS['queries']}次</li>
			</ul>
		</div>
	</div>
</div>