<div id="sidebar" style="">
	<div class="title">
		<div class="m_bg"> 企业审核 </div>
	</div>
	<div class="trees blockTextLink" style="">
		<!--{if in_array('基本信息审核', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">基本信息审核</div>
			<ul class="nodes">
				<li class="node"><a href="company.html?act=list&op=all">基本信息总表</a></li>
				<li class="node"><a href="company.html?act=list&op=ischeck">未审核列表</a></li>
				<li class="node"><a href="company.html?act=list&op=ok">已通过列表</a></li>
				<li class="node"><a href="company.html?act=list&op=no">未通过列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('营业执照审核', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">营业执照审核</div>
			<ul class="nodes">
				<li class="node"><a href="check_licence.html?act=list&op=all">营业执照总表</a></li>
				<li class="node"><a href="check_licence.html?act=list&op=ischeck">未审核列表</a></li>
				<li class="node"><a href="check_licence.html?act=list&op=ok">已通过列表</a></li>
				<li class="node"><a href="check_licence.html?act=list&op=no">未通过列表</a></li>
				<li class="node"><a href="check_licence.html?act=list&op=free">免审列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('职位审核', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">职位审核</div>
			<ul class="nodes">
				<li class="node"><a href="check_job.html?act=list&op=all">职位总表</a></li>
				<li class="node"><a href="check_job.html?act=list&op=ischeck">未审核列表</a></li>
				<li class="node"><a href="check_job.html?act=list&op=ok">已通过列表</a></li>
				<li class="node"><a href="check_job.html?act=list&op=no">未通过列表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('短信审核', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">短信审核</div>
			<ul class="nodes">
				<li class="node"><a href="check_message.html?act=list">短信总表</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('企业信息复审', $__r)}-->
		<!-- <div class="tree tree-expand">
			<div class="name">企业信息复审</div>
			<ul class="nodes">
				<li class="node"><a href="company.html?act=recheck&op=all">复审总表</a></li>
				<li class="node"><a href="company.html?act=recheck&op=ischeck">未审核列表</a></li>
				<li class="node"><a href="company.html?act=recheck&op=ok">已通过列表</a></li>
				<li class="node"><a href="company.html?act=recheck&op=no">未通过列表</a></li>
			</ul>
		</div> -->
		<!--{/if}-->
		<!--{if in_array('企业其他管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">企业其他管理</div>
			<ul class="nodes">
				<!-- <li class="node"><a href="company.html?act=listall">企业搜索</a></li> -->
				<li class="node"><a href="company.html?act=listall&ordertype=3&query=">企业搜索</a></li>
				<li class="node"><a href="company.html?act=oldlistall&ordertype=3&query=">旧站企业搜索</a></li>
				<li class="node"><a href="companyM.html?act=listM&ordertype=1&query=">企业批量改单</a></li>
				<li class="node"><a href="company.html?act=mapList">无地图企业</a></li>
				<!--{if in_array('企业删除', $__r)}-->
					<li class="node"><a href="company.html?act=dellist&op=all">待删除列表</a></li>
					<li class="node"><a href="company.html?act=dellist&op=no">拒绝删除列表</a></li>
				<!--{/if}-->
				<li class="node"><a href="company.html?act=jobTuiGuang">职位推广</a></li>
				<li class="node"><a href="company.html?act=noteList">企业备注</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('名企分类', $__r) || in_array('名企管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">名企管理</div>
			<ul class="nodes">
				<!--{if in_array('名企分类', $__r)}-->
					<li class="node" style="display:none;"><a href="channel.html?act=channellist" >名企分类</a></li>
				<!--{/if}-->
				<!--{if in_array('名企管理', $__r)}-->
					<li class="node"><a href="channel.html?act=comlist&ordertype=3&query=">新增名企</a></li>
					<li class="node"><a href="channel.html?act=goodlist">名企总列表</a></li>
				<!--{/if}-->
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('企业部门管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">企业部门管理</div>
			<ul class="nodes">
				<li class="node"><a href="company.html?act=unitList&ordertype=1">部门总列表</a></li>
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