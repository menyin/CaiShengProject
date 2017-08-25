<div id="sidebar" style=""> 
	<div class="title"> 
		<div class="m_bg"> 资讯管理 </div> 
	</div> 
	<div class="trees blockTextLink" style=""> 
		<div class="tree tree-expand">
			<div class="name">反馈管理</div>
			<ul class="nodes">
				<!--{if in_array('反馈管理', $__r)}--><li class="node"><a href="/news/suggestion.html?act=list">反馈管理</a></li><!--{/if}-->
				<!--{if in_array('社保反馈管理', $__r)}--><li class="node"><a href="/news/socialSecurity.html?act=list">社保反馈管理</a></li><!--{/if}-->
			</ul>
		</div>
		<!--{if in_array('职位投诉', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">职位投诉</div>
			<ul class="nodes">
				<li class="node"><a href="/news/job_report.html?act=list">职位投诉</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('简历投诉', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">简历投诉</div>
			<ul class="nodes">
				<li class="node"><a href="/news/resume_report.html?act=list">简历投诉</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('资讯分类管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">资讯分类管理</div>
			<ul class="nodes">
				<li class="node"><a href="/news/newscategory.html?act=categorylist">资讯分类总表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('资讯管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">专访</div>
			<ul class="nodes">
				<li class="node"><a href="/news/adv.html?act=list">专访轮播总列表</a></li>
				<li class="node"><a href="/news/news.html?act=commentlist&ischeck=-1">专访评论总列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('资讯管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">资讯管理</div>
			<ul class="nodes">
				<li class="node"><a href="/news/news.html?act=list&op=all">总列表</a></li>
				<!--{loop $categorys $category}-->
				<li class="node"><a href="/news/news.html?act=list&detail_cid={$category[category_id]}&cityid=-1&tuijian=-1&op=single">{$category[category_title]}</a></li>
				<!--{/loop}-->				
				<!-- <li class="node"><a href="news.html?act=list&act1=ischeck">未审核列表</a></li>
				<li class="node"><a href="news.html?act=list&act1=ok">已通过列表</a></li>
				<li class="node"><a href="news.html?act=list&act1=no">未通过列表</a></li> -->
			</ul>
		</div>
		<!--{/if}-->

		<div class="tree tree-expand">
			<div class="name">课程管理</div>
			<ul class="nodes">
				<li class="node"><a href="/news/ke/ke.html">课程列表</a></li>
				<li class="node"><a href="/news/ke/keCategory.html">课程类型列表</a></li>
				<li class="node"><a href="/news/ke/instr.html">讲师列表</a></li>
			</ul>
		</div>

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