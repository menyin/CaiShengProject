<div id="sidebar" style="">
	<div class="title">
		<div class="m_bg"> 客服管理 </div>
	</div> 
	<div class="trees blockTextLink" style="">
		<!--{if in_array('客服公共库', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">客服公共库</div>
			<ul class="nodes">
				<!-- <li class="node"><a href="/service/company.html?act=list">客服公共库</a></li> -->
				<li class="node"><a href="/service/list.html?act=list&op=all">所有企业</a></li>
				<!--<li class="node"><a href="/service/company.html?act=noCitylist">新注册企业(城市为空)</a></li>-->
				<li class="node"><a href="/service/list.html?act=list&op=order">公共库</a></li>
				<li class="node"><a href="/service/company.html?act=fastReg">企业快速注册</a></li>
				<li class="node"><a href="/service/list.html?act=list&op=unique">公司查重</a></li>
				<!--{if in_array('主管', $__r)}-->
				<li class="node"><a href="/service/list.html?act=list&op=allocateList">主管分配的企业</a></li>
				<li class="node"><a href="/service/list.html?act=contractList">主管合同管理</a></li>
				<!--{/if}-->
				<!--{if in_array('简历快速注册', $__r)}-->
				<li class="node"><a href="/service/person.html?act=fastReg">简历快速注册</a></li>
				<!--{/if}-->
				<!--{if in_array('客服分配企业', $__r)}-->
				<!--<li class="node"><a href="/service/company.html?act=allocateCompany">重新分配客服企业</a></li>-->
				<!--{/if}-->
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('客服企业管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">企业管理</div>
			<ul class="nodes">
				<li class="node"><a href="/service/list.html?act=list&op=mylist">我的企业</a></li>
				<li class="node"><a href="/service/company.html?act=followlist&ordertype=5&query_day=">待回访的企业</a></li>
				<li class="node"><a href="/service/company.html?act=followlist2&ordertype=5">待回访的企业(备用)</a></li>
				<li class="node"><a href="/service/company.html?act=assignlist">分配的企业</a></li>
				<li class="node"><a href="pay.html?act=list&op=all">企业充值记录</a></li>
				<li class="node"><a href="/service/list.html?act=freeLog">试用会员记录</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('客服跟进情况', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">跟进情况</div>
			<ul class="nodes">
				<li class="node"><a href="/service/company.html?act=viewlist">跟进情况</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('客服合同管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">合同管理</div>
			<ul class="nodes">
				<!-- <li class="node"><a href="/service/contract.html?act=list&op=all">我的合同</a></li> -->
				<!-- <li class="node"><a href="/service/contract.html?act=tbedit">新增图标</a></li> -->
				<li class="node"><a href="/service/list.html?act=list&op=mylist&pp=20&ordertype=8&orderValue=1&companyType=2">已生效列表</a></li>
				<li class="node"><a href="/service/list.html?act=list&op=mylist&pp=20&ordertype=8&orderValue=1&companyType=4">已过期列表</a></li>
				<li class="node"><a href="/service/contract.html?act=list&op=ischeck">待审核列表<!--{if $num_isckeck>0}--><font color="red">({$num_isckeck})<!--{/if}--></font></a></li>
				<li class="node"><a href="/service/contract.html?act=list&op=no">被驳回列表<!--{if $num_no>0}--><font color="red">({$num_no})</font><!--{/if}--></a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('客服绩效管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">客服绩效管理</div>
			<ul class="nodes">
				<li class="node"><a href="/service/sale_record.html?act=add">新增客服绩效</a></li>
				<li class="node"><a href="/service/sale_record.html?act=list">客服绩效管理</a></li>
			</ul>
		</div>
		<!--{/if}-->
		<!--{if in_array('客服短信管理', $__r)}-->
		<div class="tree tree-expand">
			<div class="name">短信管理</div>
			<ul class="nodes">
				<li class="node"><a href="/service/send_messages.html?act=add" target="_blank">发送短信</a></li>
				<li class="node"><a href="/service/send_messages.html?act=list">短信列表</a></li>
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