<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<style>
	#settingList label {margin-right: 10px;}
	#settingList input { position: relative; top: 3px; margin-right: 2px;}
</style>
<body> 
<div id="content">
	<!--{template nav}-->
	<div id="contentBody" style="visibility: visible;">
		<!--  小贴士 start  -->
		<div id="tips" class="hide" style="width: 256px;display:none">
			<div class="tips" style="">
				<div class="tips-title" style="">小贴士
					<div class="btn_close"></div>
				</div>
				<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
					<div class="title">
						<div data-bind="text: cat">常见问题</div>
					</div>
					<div data-bind="foreach: links">
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
						</div>
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
						</div>
					</div>
					<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
						<div class="more">
							<div>
								更多： 
								<a href="#" target="_blank">帮助中心</a> &nbsp;
								<a href="#" target="_blank">售后支持</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">管理员管理 > <!--{if $admin['adminid']}-->修改<!--{else}-->新增<!--{/if}-->管理员</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="admin.html?act=edit">新增管理员</a></div>
							<div class="btn icon-9 icon" ><a href="admin.html?act=list&op=ok">返回列表</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div class="">
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="admin_id" id="admin_id" value="{$admin['adminid']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" id="adminPhotoUrl" name="adminPhoto" value="{$admin['adminPhoto']}"/>
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px">管理员ID：</td>
																<td ><input type="text" class="text1" id="adminUsername" name="adminUsername" placeholder="例子：gjp" value="{$admin[adminUsername]}" <!--{if $admin[adminUsername]}-->readonly="" style="color:gray;"<!--{/if}-->/></td>
															</tr>
															<tr>
																<td class="tb_title">真实姓名：</td>
																<td><input type="text" class="text1" name="adminName" placeholder="例子：郭剑平" value="{$admin[adminName]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">照片：</td>
																<td>
																	<span style="margin:0 10px 0 0;" class="tipTxt formFile">
																	<!--<input type="file" name="upload_licence" id="upload_licence"/>-->
																	<input type="file" name="Filedata" id="adminPhoto_file"/>
																	</span>
																	<p class="tipTxt gray">注:最大2MB，支持jpg/gif/png格式</p>
																	<span class="picLoad">
																		<div id="showImage" class="loadBox" <!--{if !$admin['adminPhoto']}-->style="display:none"<!--{/if}-->>
																			<img src="//pic.{ROOT_DOMAIN}/photo/admin/{$admin['adminPhoto']}" id="imgView" width="100" height="100" />
																		</div>
																	</span>
																</td>
															</tr>
															<!--{if !$admin}-->
															<tr>
																<td class="tb_title">密码：</td>
																<td><input type="text" class="text1" name="adminPsw" placeholder="请输入密码" value=""/></td>
															</tr>
															<tr>
																<td class="tb_title">确认密码：</td>
																<td><input type="text" class="text1" name="repeatPsw" placeholder="密码要一致" value=""/></td>
															</tr>
															<!--{/if}-->
															<tr>
																<td class="tb_title">所属部门：</td>
																<td >
																	<select id="adminUnit" name="adminUnit" style="width: 160px;" required="required" message="请选择所属部门">
																		<option value="">请选择</option>
																		<option value="运营部" <!--{if $admin[adminUnit]=='运营部'}-->selected<!--{/if}-->>运营部</option>
																		<option value="销售部" <!--{if $admin[adminUnit]=='销售部'}-->selected<!--{/if}-->>销售部</option>
																		<option value="财务部" <!--{if $admin[adminUnit]=='财务部'}-->selected<!--{/if}-->>财务部</option>
																		<option value="客服部" <!--{if $admin[adminUnit]=='客服部'}-->selected<!--{/if}-->>客服部</option>
																		<option value="猎头部" <!--{if $admin[adminUnit]=='猎头部'}-->selected<!--{/if}-->>猎头部</option>
																		<option value="技术部" <!--{if $admin[adminUnit]=='技术部'}-->selected<!--{/if}-->>技术部</option>
																		<option value="续约部" <!--{if $admin[adminUnit]=='续约部'}-->selected<!--{/if}-->>续约部</option>
																		<option value="审核部" <!--{if $admin[adminUnit]=='审核部'}-->selected<!--{/if}-->>审核部</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td class="tb_title">主管：</td>
																<td >
																	<select id="adminBoss" name="adminBoss" style="width: 160px;" required="required" message="主管">
																		<option value="">请选择</option>
																		<!--{loop $adminBossList $l}-->
																			<option value="{$l['adminid']}" <!--{if $l['adminid']==$admin['adminBoss']}-->selected<!--{/if}-->>{$l['adminUsername']}</option>
																		<!--{/loop}-->
																	</select>
																</td>
															</tr>
															<tr>
																<td class="tb_title">服务地区：</td>
																<td>
																	<input type="hidden" name="adminAreaId" id="adminAreaId" value="{$admin[adminAreaId]}" />
																	<input type="text" class="input" name="adminArea" id="adminArea" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$admin[adminArea]}" title="{$admin[adminArea]}" readonly="true" Required="required"> 
																	<script language="javascript">
																		var areaOdjid='adminAreaId'; 
																		var areaOdjstr='adminArea';
																		var areaOdjProvice=1;//是否省可选
																		var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
																		var areaOdjnumber=100;//数量，如果唯一值，则立即返回
																	</script>
																</td>
															</tr>
															<tr>
																<td class="tb_title">库容：</td>
																<td><input type="text" class="text1" name="adminTotal" placeholder="例子：100" value="{$admin['adminTotal']}"/></td>
															</tr>
															<!--{if $admin['useNumber']}-->
															<tr style="display:none;">
																<td class="tb_title">已使用：</td>
																<td>{$admin['useNumber']}</td>
															</tr>
															<!--{/if}-->
															<tr>
																<td class="tb_title">办公电话：</td>
																<td><input type="text" class="text1" name="adminTelphone" placeholder="例子：0592-2067662" value="{$admin[adminTelphone]}"/></td>
															</tr>
															<tr>
																<td class="tb_title">手机：</td>
																<td><input type="text" class="text1" name="adminFax" placeholder="例子：" value="{$admin['adminFax']}"/></td>
															</tr>
															<tr>
																<td class="tb_title">地址：</td>
																<td><input type="text" class="text1" name="adminAddress" placeholder="例子：厦门市大学路301#" value="{$admin['adminAddress']}"/></td>
															</tr>
															<tr>
																<td class="tb_title">qq：</td>
																<td><input type="text" class="text1" name="adminCode" placeholder="" value="{$admin['adminCode']}"/></td>
															</tr>
															<tr>
																<td class="tb_title">排序：</td>
																<td><input type="text" class="text1" name="displayOrder" placeholder="" value="{$admin['displayOrder']}"/></td>
															</tr>
														</table>
														<table style="margin-top: 16px;" id="settingList">
															<tr>
																<td class="tb_title" width="140px">系统权限：</td>
																<td>

																	<label for="all1"><input type="checkbox" class="checkAll" id="all1" />全选</label>
																	<input type="checkbox" name="right[]" id="right1" value="站点管理" <!--{if strpos($admin[adminRight],'站点管理')>-1}-->checked<!--{/if}-->><label for="right1">站点管理</label>
																	【<input type="checkbox" name="right[]" id="right2" value="公告管理" <!--{if strpos($admin[adminRight],'公告管理')}-->checked<!--{/if}-->><label for="right2">公告管理</label>
																	<input type="checkbox" name="right[]" id="right3" value="友链管理" <!--{if strpos($admin[adminRight],'友链管理')}-->checked<!--{/if}-->><label for="right3">友链管理</label>】
																	<input type="checkbox" name="right[]" id="right4" value="产品管理" <!--{if strpos($admin[adminRight],'产品管理')}-->checked<!--{/if}-->><label for="right4">产品管理</label>
																	<input type="checkbox" name="right[]" id="right5" value="权限管理" <!--{if strpos($admin[adminRight],'权限管理')}-->checked<!--{/if}-->><label for="right5">权限管理</label>
																	<input type="checkbox" name="right[]" id="right6" value="地铁管理" <!--{if strpos($admin[adminRight],'地铁管理')}-->checked<!--{/if}-->><label for="right6">地铁管理</label>
																	<input type="checkbox" name="right[]" id="right7" value="地标管理" <!--{if strpos($admin[adminRight],'地标管理')}-->checked<!--{/if}-->><label for="right7">地标管理</label>
																	<input type="checkbox" name="right[]" id="right8" value="下级分配" <!--{if strpos($admin[adminRight],'下级分配')}-->checked<!--{/if}-->><label for="right8">下级分配</label>
																	<input type="checkbox" name="right[]" id="right9" value="我的下级" <!--{if strpos($admin[adminRight],'我的下级')}-->checked<!--{/if}-->><label for="right9">我的下级</label>
																	<input type="checkbox" name="right[]" id="right10" value="客户分配管理" <!--{if strpos($admin[adminRight],'客户分配管理')}-->checked<!--{/if}-->><label for="right10">客户分配管理</label>
																	<input type="checkbox" name="right[]" id="righta10a" value="系统短信管理" <!--{if strpos($admin[adminRight],'系统短信管理')}-->checked<!--{/if}-->><label for="righta10a">系统短信管理</label>
																	<input type="checkbox" name="right[]" id="righta10b" value="主管" <!--{if strpos($admin[adminRight],'主管')}-->checked<!--{/if}-->><label for="righta10b">主管</label>
																	<input type="checkbox" name="right[]" id="righta10c" value="系统统计" <!--{if strpos($admin[adminRight],'系统统计')}-->checked<!--{/if}-->><label for="righta10c">系统统计</label>

																	<input type="checkbox" name="right[]" id="righta10d" value="公交站台管理" <!--{if strpos($admin[adminRight],'公交站台管理')}-->checked<!--{/if}-->><label for="righta10d">公交站台管理</label>

																	<input type="checkbox" name="right[]" id="righta10e" value="公交路线管理" <!--{if strpos($admin[adminRight],'公交路线管理')}-->checked<!--{/if}-->><label for="righta10e">公交路线管理</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">企业审核：</td>
																<td>

																	<label for="all2"><input type="checkbox" class="checkAll" id="all2" />全选</label>
																	<input type="checkbox" name="right[]" id="right11" value="基本信息审核" <!--{if strpos($admin[adminRight],'基本信息审核')>-1}-->checked<!--{/if}-->><label for="right11">基本信息审核</label>
																	<input type="checkbox" name="right[]" id="right12" value="营业执照审核" <!--{if strpos($admin[adminRight],'营业执照审核')}-->checked<!--{/if}-->><label for="right12">营业执照审核</label>
																	<input type="checkbox" name="right[]" id="right13" value="职位审核" <!--{if strpos($admin[adminRight],'职位审核')}-->checked<!--{/if}-->><label for="right13">职位审核</label>
																	<input type="checkbox" name="right[]" id="right14" value="企业信息复审" <!--{if strpos($admin[adminRight],'企业信息复审')}-->checked<!--{/if}-->><label for="right14">企业信息复审</label>
																	<input type="checkbox" name="right[]" id="right15" value="企业其他管理" <!--{if strpos($admin[adminRight],'企业其他管理')}-->checked<!--{/if}-->><label for="right15">企业其他管理</label>
																	【<input type="checkbox" name="right[]" id="right16" value="企业免审" <!--{if strpos($admin[adminRight],'企业免审')}-->checked<!--{/if}-->><label for="right16">企业免审</label>
																	<input type="checkbox" name="right[]" id="right17" value="企业删除" <!--{if strpos($admin[adminRight],'企业删除')}-->checked<!--{/if}-->><label for="right17">企业删除</label>】
																	<input type="checkbox" name="right[]" id="right18" value="名企分类" <!--{if strpos($admin[adminRight],'名企分类')}-->checked<!--{/if}-->><label for="right18">名企分类</label>
																	<input type="checkbox" name="right[]" id="right19" value="名企管理" <!--{if strpos($admin[adminRight],'名企管理')}-->checked<!--{/if}-->><label for="right19">名企管理</label>
																	<input type="checkbox" name="right[]" id="right20" value="短信审核" 
																	<!--{if strpos($admin[adminRight],'短信审核')}-->checked<!--{/if}-->><label for="right20">短信审核</label>
																	<input type="checkbox" name="right[]" id="right20" value="企业部门管理" 
																	<!--{if strpos($admin[adminRight],'企业部门管理')}-->checked<!--{/if}-->><label for="right21">企业部门管理</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">个人审核：</td>
																<td>

																	<label for="all3"><input type="checkbox" class="checkAll" id="all3" />全选</label>
																	<input type="checkbox" name="right[]" id="right21" value="简历审核" <!--{if strpos($admin[adminRight],'简历审核')}-->checked<!--{/if}-->><label for="right21">简历审核</label>
																	<input type="checkbox" name="right[]" id="right22" value="个人实名审核" <!--{if strpos($admin[adminRight],'个人实名审核')}-->checked<!--{/if}-->><label for="right22">个人实名审核</label>
																	<input type="checkbox" name="right[]" id="right23" value="个人搜索" <!--{if strpos($admin[adminRight],'个人搜索')}-->checked<!--{/if}-->><label for="right23">个人搜索</label>
																	<input type="checkbox" name="right[]" id="right23" value="用户总表" <!--{if strpos($admin[adminRight],'用户总表')}-->checked<!--{/if}-->><label for="right23">用户总表</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">客服管理：</td>
																<td>
																	<label for="all4"><input type="checkbox" class="checkAll" id="all4" />全选</label>
																	<input type="checkbox" name="right[]" id="right31" value="客服公共库" <!--{if strpos($admin[adminRight],'客服公共库')}-->checked<!--{/if}-->><label for="right31">客服公共库</label>
																	<input type="checkbox" name="right[]" id="right39" value="分配客服" <!--{if strpos($admin[adminRight],'分配客服')}-->checked<!--{/if}-->><label for="right39">分配客服</label>
																	<input type="checkbox" name="right[]" id="right37" value="客服城市为空" <!--{if strpos($admin[adminRight],'客服城市为空')}-->checked<!--{/if}-->><label for="right37">客服城市为空</label>
																	<input type="checkbox" name="right[]" id="right32" value="客服快速注册" <!--{if strpos($admin[adminRight],'客服快速注册')}-->checked<!--{/if}-->><label for="right32">客服快速注册</label>
																	<input type="checkbox" name="right[]" id="right33" value="客服公司查重" <!--{if strpos($admin[adminRight],'客服公司查重')}-->checked<!--{/if}-->><label for="right33">客服公司查重</label>
																	<input type="checkbox" name="right[]" id="right34" value="客服企业管理" <!--{if strpos($admin[adminRight],'客服企业管理')}-->checked<!--{/if}-->><label for="right34">客服企业管理</label>
																	<input type="checkbox" name="right[]" id="right35" value="客服合同管理" <!--{if strpos($admin[adminRight],'客服合同管理')}-->checked<!--{/if}-->><label for="right35">客服合同管理</label>
																	<input type="checkbox" name="right[]" id="right36" value="客服跟进情况" <!--{if strpos($admin[adminRight],'客服跟进情况')}-->checked<!--{/if}-->><label for="right36">客服跟进情况</label>
																	<input type="checkbox" name="right[]" id="right38" value="客服绩效管理" <!--{if strpos($admin[adminRight],'客服绩效管理')}-->checked<!--{/if}-->><label for="right38">客服绩效管理</label>
																	<input type="checkbox" name="right[]" id="right40" value="客服分配企业" <!--{if strpos($admin[adminRight],'客服分配企业')}-->checked<!--{/if}-->><label for="right40">客服分配企业</label>
																	<input type="checkbox" name="right[]" id="right41" value="客服短信管理" <!--{if strpos($admin[adminRight],'客服短信管理')}-->checked<!--{/if}-->><label for="right41">客服短信管理</label>
																	<input type="checkbox" name="right[]" id="right42" value="职位批量刷新" <!--{if strpos($admin[adminRight],'职位批量刷新')}-->checked<!--{/if}-->><label for="right42">职位批量刷新</label>
																	<input type="checkbox" name="right[]" id="right43" value="简历快速注册" <!--{if strpos($admin[adminRight],'简历快速注册')}-->checked<!--{/if}-->><label for="right43">简历快速注册</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">销售管理：</td>
																<td>

																	<label for="all5"><input type="checkbox" class="checkAll" id="all5" />全选</label>
																	<input type="checkbox" name="right[]" id="right471" value="分配销售" <!--{if strpos($admin[adminRight],'分配销售')}-->checked<!--{/if}-->><label for="right471">分配销售</label>
																	<input type="checkbox" name="right[]" id="right411" value="销售公共库" <!--{if strpos($admin[adminRight],'销售公共库')}-->checked<!--{/if}-->><label for="right411">销售公共库</label>
																	<input type="checkbox" name="right[]" id="right472" value="销售城市为空" <!--{if strpos($admin[adminRight],'销售城市为空')}-->checked<!--{/if}-->><label for="right472">销售城市为空</label>
																	<input type="checkbox" name="right[]" id="right42" value="销售快速注册" <!--{if strpos($admin[adminRight],'销售快速注册')}-->checked<!--{/if}-->><label for="right42">销售快速注册</label>
																	<input type="checkbox" name="right[]" id="right43" value="销售公司查重" <!--{if strpos($admin[adminRight],'销售公司查重')}-->checked<!--{/if}-->><label for="right43">销售公司查重</label>
																	<input type="checkbox" name="right[]" id="right44" value="销售企业管理" <!--{if strpos($admin[adminRight],'销售企业管理')}-->checked<!--{/if}-->><label for="right44">销售企业管理</label>
																	<input type="checkbox" name="right[]" id="right45" value="销售合同管理" <!--{if strpos($admin[adminRight],'销售合同管理')}-->checked<!--{/if}-->><label for="right45">销售合同管理</label>
																	<input type="checkbox" name="right[]" id="right46" value="销售跟进情况" <!--{if strpos($admin[adminRight],'销售跟进情况')}-->checked<!--{/if}-->><label for="right46">销售跟进情况</label>
																	<input type="checkbox" name="right[]" id="right47" value="销售绩效管理" <!--{if strpos($admin[adminRight],'销售绩效管理')}-->checked<!--{/if}-->><label for="right47">销售绩效管理</label>
																	<input type="checkbox" name="right[]" id="right501" value="销售分配企业" <!--{if strpos($admin[adminRight],'销售分配企业')}-->checked<!--{/if}-->><label for="right501">销售分配企业</label>
																	<input type="checkbox" name="right[]" id="right511" value="销售短信管理" <!--{if strpos($admin[adminRight],'销售短信管理')}-->checked<!--{/if}-->><label for="right511">销售短信管理</label>
																	<input type="checkbox" name="right[]" id="right512" value="销售跟单" <!--{if strpos($admin[adminRight],'销售跟单')}-->checked<!--{/if}-->><label for="right512">销售跟单</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">续约管理：</td>
																<td>

																	<label for="all20"><input type="checkbox" class="checkAll" id="all20" />全选</label>
																	<input type="checkbox" name="right[]" id="right101" value="续约公共库" <!--{if strpos($admin[adminRight],'续约公共库')}-->checked<!--{/if}-->><label for="right101">续约公共库</label>
																	<input type="checkbox" name="right[]" id="right102" value="续约企业管理" <!--{if strpos($admin[adminRight],'续约企业管理')}-->checked<!--{/if}-->><label for="right102">续约企业管理</label>
																	<input type="checkbox" name="right[]" id="right104" value="分配续约" <!--{if strpos($admin[adminRight],'分配续约')}-->checked<!--{/if}-->><label for="right104">分配续约</label>
																	<input type="checkbox" name="right[]" id="right105" value="续约合同管理" <!--{if strpos($admin[adminRight],'续约合同管理')}-->checked<!--{/if}-->><label for="right105">续约合同管理</label>
																		<input type="checkbox" name="right[]" id="right106" value="续约跟进情况" <!--{if strpos($admin[adminRight],'续约跟进情况')}-->checked<!--{/if}-->><label for="right106">续约跟进情况</label>
																		<input type="checkbox" name="right[]" id="right109" value="续约绩效管理" <!--{if strpos($admin[adminRight],'续约绩效管理')}-->checked<!--{/if}-->><label for="right109">续约绩效管理</label>
																		<input type="checkbox" name="right[]" id="right110" value="续约短信管理" <!--{if strpos($admin[adminRight],'续约短信管理')}-->checked<!--{/if}-->><label for="right110">续约短信管理</label>																		
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">财务管理：</td>
																<td>

																	<label for="all6"><input type="checkbox" class="checkAll" id="all6" />全选</label>
																	<input type="checkbox" name="right[]" id="right51" value="财务管理" <!--{if strpos($admin[adminRight],'财务管理')}-->checked<!--{/if}-->><label for="right51">财务管理</label>
																	【<input type="checkbox" name="right[]" id="right52" value="财务新增" <!--{if strpos($admin[adminRight],'财务新增')}-->checked<!--{/if}-->><label for="right52">财务新增</label>
																	<input type="checkbox" name="right[]" id="right53" value="已支付" <!--{if strpos($admin[adminRight],'已支付')}-->checked<!--{/if}-->><label for="right53">已支付</label>
																	<input type="checkbox" name="right[]" id="right54" value="已结算" <!--{if strpos($admin[adminRight],'已结算')}-->checked<!--{/if}-->><label for="right54">已结算</label>
																	<input type="checkbox" name="right[]" id="right55" value="已关闭" <!--{if strpos($admin[adminRight],'已关闭')}-->checked<!--{/if}-->><label for="right55">已关闭</label>
																	<input type="checkbox" name="right[]" id="right56" value="财务初始" <!--{if strpos($admin[adminRight],'财务初始')}-->checked<!--{/if}-->><label for="right56">财务初始</label>】
																	<input type="checkbox" name="right[]" id="right57" value="财务报表" <!--{if strpos($admin[adminRight],'财务报表')}-->checked<!--{/if}-->><label for="right57">财务报表</label>
																	<input type="checkbox" name="right[]" id="right58" value="财务合同管理" <!--{if strpos($admin[adminRight],'财务合同管理')}-->checked<!--{/if}-->><label for="right58">财务合同管理</label>
																	<input type="checkbox" name="right[]" id="right59" value="财务广告管理" <!--{if strpos($admin[adminRight],'财务广告管理')}-->checked<!--{/if}-->><label for="right59">财务广告管理</label>
																	<input type="checkbox" name="right[]" id="right591" value="合同删除" <!--{if strpos($admin[adminRight],'合同删除')}-->checked<!--{/if}-->><label for="right591">合同删除</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">开通管理：</td>
																<td>

																	<label for="all7"><input type="checkbox" class="checkAll" id="all7" />全选</label>
																	<input type="checkbox" name="right[]" id="right60" value="图标管理" <!--{if strpos($admin[adminRight],'图标管理')}-->checked<!--{/if}-->><label for="right60">图标管理</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">资讯管理：</td>
																<td>
																	<label for="all8"><input type="checkbox" class="checkAll" id="all8" />全选</label>
																	<input type="checkbox" name="right[]" id="right61" value="资讯分类管理" <!--{if strpos($admin[adminRight],'资讯分类管理')}-->checked<!--{/if}-->><label for="right61">资讯分类管理</label>
																	<input type="checkbox" name="right[]" id="right62" value="资讯管理" <!--{if strpos($admin[adminRight],'资讯管理')}-->checked<!--{/if}-->><label for="right62">资讯管理</label>
																	<input type="checkbox" name="right[]" id="right63" value="反馈管理" <!--{if strpos($admin[adminRight],'反馈管理')}-->checked<!--{/if}-->><label for="right63">反馈管理</label>
																	<input type="checkbox" name="right[]" id="right64" value="社保反馈管理" <!--{if strpos($admin[adminRight],'社保反馈管理')}-->checked<!--{/if}-->><label for="right64">社保反馈管理</label>
																	<input type="checkbox" name="right[]" id="right65" value="职位投诉" <!--{if strpos($admin[adminRight],'职位投诉')}-->checked<!--{/if}-->><label for="right65">职位投诉</label>
																	<input type="checkbox" name="right[]" id="right66" value="简历投诉" <!--{if strpos($admin[adminRight],'简历投诉')}-->checked<!--{/if}-->><label for="right66">简历投诉</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">关键词管理：</td>
																<td>
																	<label for="all9"><input type="checkbox" class="checkAll" id="all9" />全选</label>
																	<input type="checkbox" name="right[]" id="right71" value="关键词管理" <!--{if strpos($admin[adminRight],'关键词管理')}-->checked<!--{/if}-->><label for="right71">关键词管理</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">招聘会管理：</td>
																<td>
																	<label for="all10"><input type="checkbox" class="checkAll" id="all10" />全选</label>
																	<input type="checkbox" name="right[]" id="right81" value="线上招聘会" <!--{if strpos($admin[adminRight],'线上招聘会')}-->checked<!--{/if}-->><label for="right81">线上招聘会</label>
																	<input type="checkbox" name="right[]" id="right82" value="线下招聘会" <!--{if strpos($admin[adminRight],'线下招聘会')}-->checked<!--{/if}-->><label for="right82">线下招聘会</label>
																	<input type="checkbox" name="right[]" id="right83" value="招聘点" <!--{if strpos($admin[adminRight],'招聘点')}-->checked<!--{/if}-->><label for="right83">招聘点</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">劳务派遣管理：</td>
																<td>
																	<label for="all_11"><input type="checkbox" class="checkAll" id="all_11" />全选</label>
																	<input type="checkbox" name="right[]" id="right91" value="客户管理" <!--{if strpos($admin[adminRight],'客户管理')}-->checked<!--{/if}-->><label for="right91">客户管理</label>
																	<input type="checkbox" name="right[]" id="right92" value="档案管理" <!--{if strpos($admin[adminRight],'档案管理')}-->checked<!--{/if}-->><label for="right92">档案管理</label>
																	<input type="checkbox" name="right[]" id="right93" value="派遣管理" <!--{if strpos($admin[adminRight],'派遣管理')}-->checked<!--{/if}-->><label for="right93">派遣管理</label>
																</td>
															</tr>
															<tr>
																<td class="tb_title" width="140px">猎头管理：</td>
																<td>
																	<label for="all_12"><input type="checkbox" class="checkAll" id="all_12" />全选</label>
																	<input type="checkbox" name="right[]" id="right121" value="猎头管理" <!--{if strpos($admin[adminRight],'猎头管理')}-->checked<!--{/if}-->><label for="right121">猎头管理</label>
																</td>
															</tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" onclick="sub();" onclick="document.postForm.submit();">完  成</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->  
		</div>	  
		<!--{template setting/sidebar}-->   
	</div>  
</div>
<script type="text/javascript">
function sub () {
	if($('#adminUsername').val() == ''|| typeof($('#adminUsername').val()) == 'undefined'){
		alert('管理员ID不能为空！');
		return;
	}
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			$.message(data.msg, { title: "系统提示", icon: "fail" });	
			return;
		}else{
			$.anchorMsg(data.msg,{icon:"success"});
			window.location.href='/setting/admin.html?act=list&op=ok';
		}

	}, clearForm: false});
}
</script>
<script>
	$('#settingList').find('.checkAll').click(function() {
		$(this).parents('tr').find('input').attr('checked', this.checked);
	});

	$('#settingList').find('input:not(.checkAll)').click(function(){
		var parent = $(this).parents('tr');
		var len = parent.find(':checked').not('.checkAll').length;
		parent.find('.checkAll').attr('checked',len == parent.find('input').length - 1);
	});


	$('#settingList').find('tr').each(function() {
		var items = $(this).find('input:checked');
		if (items.not('.checkAll').length == $(this).find('input').length - 1) {
			$(this).find('.checkAll').attr('checked', true);
		}
	});


</script>
<script type="text/javascript">
	$("#adminPhoto_file").wrap("<form id='admin_photo_file' action='/api/web/uploadify.api' method='post' enctype='multipart/form-data'></form>");
	$("#adminPhoto_file").change(function(){
		$("#admin_photo_file").submitForm({ beforeSubmit: '',data: {act:'adminPhoto',fileSize:2048},success:function(json){
				if(json.status>0){
					var path = json.path;
					$('#imgView').attr('src',path+'?'+Math.random().toString().replace('.','0'));
					$('#showImage').show();
					$('#adminPhotoUrl').val(json.name);
				}else{
					$('#showImage').hide();
					$.message(json.error,{title:'操作失败',icon: "fail"});
				}
		},clearForm:false});
	})
</script>
</body>
</html>
