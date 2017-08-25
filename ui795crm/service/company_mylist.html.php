<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	#main .quickbar .btns .current {background: #E1F0FA;color:#444; font-weight: bold;}
	.cBtns { display: inline-block; position: relative; padding:3px 10px; color:#444; background: #f2f2f2; border:1px solid #ddd; cursor: pointer; margin:5px 0; _display:none;}
	.cBtns:hover {color:#000; background: #d8d8d8;}
	#mask {position: absolute;z-index: 4;top: 0px;left: 0px;background:#000;opacity:0.4;filter:alpha(opacity=40);}
	#mask div{position: absolute; left: 50%; top: 20%;}
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
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">客服管理 > 我的企业</div>
				</div>
				<div class="quickbar">
					<!--<div class="note">小贴士</div>-->
					<div class="btns">
						<div class="btn-line clearfix">
							<ul>
								<form method="get" id="conList" name="conList" action="">
								<input type="hidden" name="act" value="{$act}">
								<input type="hidden" name="op" value="{$op}">
								<input type="hidden" name="pp" value="{$query['pp']}">
								<li class="ml_10">排序：
									<select id="ordertype" name="ordertype" style="width:100px">
										<option value="" >请选择</option>
										<!--{loop $orderArr $k $l}-->
										<option value="{$k}" <!--{if $query['order']==$k}-->selected<!--{/if}-->>{$l}</option>
										<!--{/loop}-->
									</select>
									<select id="orderValue" name="orderValue" style="width:100px">
										<option value="1" <!--{if $query['orderValue']=='1'}-->selected<!--{/if}-->>从大到小排序</option>
										<option value="2" <!--{if $query['orderValue']=='2'}-->selected<!--{/if}-->>从小到大排序</option>
									</select>
								</li>
								<li class="ml_10">企业状态：
									<select id="ordertype" name="companyType" style="width:80px">
										<option value="1" <!--{if $query['companyType']=='1'}-->selected<!--{/if}-->>所有企业</option>
										<option value="2" <!--{if $query['companyType']=='2'}-->selected<!--{/if}-->>有合同的企业</option>
										<option value="3" <!--{if $query['companyType']=='3'}-->selected<!--{/if}-->>未过期合同的企业</option>
										<option value="4" <!--{if $query['companyType']=='4'}-->selected<!--{/if}-->>过期合同的企业</option>
										<option value="5" <!--{if $query['companyType']=='5'}-->selected<!--{/if}-->>没有合同的企业</option>
									</select>
								</li>
								<!--{if $companyType==2||$companyType==3||$companyType==4}-->
								<li class="ml_10">
									<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$_txtStartDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
									<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$_txtEndDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
								</li>
								<!--{/if}-->
								<li class="ml_10">跟进类型：
									<select id="followType" name="followType" style="width:60px">
										<option value=''>请选择</option>
										<!--{loop $__type597Str $key $value}-->
											<option value='{$key}' <!--{if $query['followType']==$key}--> selected<!--{/if}-->>{$value}</option>
										<!--{/loop}-->
									</select>
								</li>
								<li class="ml_10">回访类型：
									<select id="nextType" name="nextType" style="width:50px">
										<option value=''>请选择</option>
										<!--{loop $__nextType $key $value}-->
											<option value='{$key}' <!--{if $query['nextType']==$key}--> selected<!--{/if}-->>{$value}</option>
										<!--{/loop}-->
									</select>
								</li>
								<li class="ml_10">查询：<input type="text" name="q" id="q" style="width:180px;" value="{$query['q']}" placeholder="企业名称/用户名/地区/邮箱/电话"></li>
								<li class="ml_10">
								   <button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
								</li>
								<li class="ml_10" style="display:none;">总共：<font color="red">{$companyList['total_found']}</font> 条</li>
							   </form>
							</ul>
						</div>
					</div>

					<div class="searchBox">
						<div class="location">
							<div class="location_main item">

								<!--{if $companyList['total_found']>0}-->
									<div style="float:right;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="list.html?act={$act}&op={$op}&ordertype={$query['order']}&orderValue={$query['orderValue']}&companyType={$query['companyType']}&txtStartDate={$_txtStartDate}&txtEndDate={$_txtEndDate}&followType={$query['followType']}&nextType={$query['nextType']}&q={$query['q']}{$value}" <!--{if $query['pp']==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条 共<i>{$companyList['total_found']}</i>条数据,显示<i>{$total}</i>条数据 / 共<i>{$pageAll}</i>页

										</div>
										<div class="paginator" >{$showpage}</div>
										<div id="pageContent" style="float:right;">
											到 <input type="text" name="turnPage" id="turnPage" style="width:40px;"> 页 <input type="button" value="确定">
										</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
							</div>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<input type="hidden" id="act" name="act" value="printlist">
						<input type="hidden" id="checkid" value="">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" width="10px" style="display:none;"></th>
										<th width="50px" style="display:none;">企业ID</th>
										<th width="3%" style="display:none;">跟单结束时间-分配状态</th>
										<th width="50px">用户名</th>
										<th width="150px">企业名称</th>
										<th width="50px">地区</th>
										<th width="50px">跟进类型</th>
										<th width="50px">回访类型</th>
										<th width="50px">注册时间</th>
										<th width="50px">登陆时间</th>
										<th width="50px">修改时间</th>
										<th width="50px">最近合同到期</th>
										<th width="30px">最后合同到期</th>
										<th width="200px">操作</th>
									</tr>
								</thead>
								<!--{loop $companys $company}-->
								<tbody>
									<tr class="<!--{if $company[_cid]==$_cid}-->cur hoverout<!--{/if}-->" style="background:<!--{if $company['vipTime1']}-->#C7E3BD;<!--{else}-->#E8AEA4;<!--{/if}-->" rel="{$company[_cid]}" cid="{$company[_cid]}">
										<td class="td1" style="display:none;"><input type="checkbox"  name="chkId[]"  onclick="chk()" class="c2_checkbox" value="{$company[cid]}" ></td>
										<td style="display:none;">{$company[cid]}</td>
										<td style="display:none;">{$company[_endFollowTime]}--{$company[assignType]}--{$company[adminId]}</td>
										<td><span style="display:block;">{$company[username]}</span></td>
										<td><span><a href="http://www.{ROOT_DOMAIN}/com-{$company[_cid]}/" target="_blank" style="display:block;padding: 3px;font-size: 13px;font-weight: 700;" class="comLink">{$company[cname]}</a></span>
										<a href="/company/company.html?act=to&c_id={$company[_cid]}" class="btn_s" target="_blank">登录前台</a>
										<a class="btn_s" target="_blank" href="/companyinfo/companyinfo.html?act=view&c_id={$company[_cid]}">查看详情</a>
										<a class="btn_s" href="http://www.baidu.com/s?wd={$company[cname]}" target="_blank">百度</a>
										<a href="javascript:void(0)" class="cBtns">复制</a>
										</td>
										<td>{$company[comCityId]}</td>
										<td>{$__type597Str[$company[followType]]}</td>
										<td align="center"><span style="color:#38599E; font-weight:bold;">{$__nextType[$company['nextType']]}</span></td>
										<td>{$company[_regTime]}</td>
										<td>{$company[_loginTime]}</td>
										<td>{$company[_modTime]}</td>
										<td>{$company[_vipTime1]}</td>
										<td>{$company[_vipTime2]}</td>
										<td>
										<div style="display:inline-block;">
											<a class="btn_s" href="company.html?act=follow&c_id={$company[_cid]}"  target="_blank">跟进</a>
											<!-- <a class="btn_s" onclick="Boxy.load('/company/company.html?act=view&c_id={$company[cid]}',{title: '企业详细信息'});" >查看</a> -->
											<!-- <a class="btn_s" onclick="Boxy.load('company.html?act=follow&c_id={$company[cid]}',{title: '企业跟进回访'});">跟进</a> -->
											<a class="btn_s" href="loginlog.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}" target="_blank">登录日志</a>
											<a class="btn_s" href="resumeCount.html?act=perjoin&c_id={$company[_cid]}" target="_blank">简历统计</a>
											<a class="btn_s" href="editlog.html?act=list&c_id={$company[_cid]}&_ordertype={$ordertype}&_query={$q}&_page={$page}">修改日志</a>
											<a class="btn_s" href="contract.html?act=comlist&op=all&c_id={$company[_cid]}">合同管理</a>

											<!--{if !$company['vipTime1']}-->
												<a class="btn_s" href="company.html?act=remove&c_id={$company[_cid]}" onclick="return confirm('确认要放弃跟单吗？');">放弃跟单</a>
											<!--{/if}-->
											<!-- <a class="btn_s" onclick="Boxy.iframe('company.html?act=log&cid={$company[cid]}',{title: '企业日志查看',width:700,height:510});">日志</a> -->
											<a class="btn_s" onclick="Boxy.load('/company/company.html?act=psw&c_id={$company[_cid]}',{title: '企业密码重置'});">修改密码</a>
											<a class="btn_s" onclick="Boxy.load('/company/company.html?act=username&c_id={$company[_cid]}',{title: '企业用户名修改'});">修改用户名</a>
											<!--{if in_array('职位批量刷新', $__r)}-->
												<a class="btn_s" id="updateAllJob" href="javascript:;">刷新职位</a>
											<!--{/if}-->
											<!--
											<a class="btn_s" id="btn_save" rel="{$company['isSave']}">加入保留库</a>
											-->
											<!--4.5屏蔽，企业更新为分配方式
											{if !$company['delStatus'] && $company[adminId]==$_SESSION[adminid] && $company[endFollowTime]>$time}
												<a class="btn_s" onclick="Boxy.load('company.html?act=delApply&c_id={$company[_cid]}',{title: '企业提交删除申请'});">提交删除</a>
											{elseif $company['delStatus']}
												<a class="btn_s" href="company.html?act=cancel_del&c_id={$company[_cid]}"><span style="color:red;">恢复申请并跟单</span></a>
											{/if}
											-->
										</div>
										<!--{if $company['delStatus']}-->
											<div style="display:inline-block;">{$company[str]}</div>
										<!--{/if}-->
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
var myList = {
	init:function(){
		$(".cell_tb_list tr td #updateAllJob").click(function(){
			var cid = $(this).closest("tr").attr("cid");

			if(!cid) {
				$.anchor('请选择企业',{icon:'info'});
				return;
			}

			$.ajax({
				url:'/api/web/admin.api',
				type:'post',
				data:{act:'updateAllJob',cid:cid},
				beforeSend:function(){
					$('#mask').show();
				},
				dataType:'json',
				success:function(data){
					if(data.status==1){
						$.anchorMsg('成功刷新所有职位',{icon:"success"});
						//$.cookie("updateAllTime",data.time,3600*24);
					}else{
						$.message(data.msg, { title: "系统提示", icon: "fail" });

					}
					$('#mask').hide();
				}

			})
		})
		$('.cBtns').each(function(index, elem) {
			clip = new ZeroClipboard.Client();
			clip.setHandCursor(true);
			ZeroClipboard.setMoviePath("//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.swf");
			clip.setText($('.comLink').eq(index).text());
			clip.addEventListener('complete', function(client, text) {
				alert('复制成功!');
			});
			clip.glue(this);
		});

		$('.cnDiv').each(function(index,elem){
			$(this).appendTo($('.cBtns').eq(index));
		});

		// IE8以下隐藏按钮，因为不支持
		if($.browser.msie && $.browser.version < 8){
			$('.cBtns').hide();
		}

		$('.mainContent tr #btn_save').click(function(){
			var saveType = $(this).attr("rel"),
				cid = $(this).closest('tr').attr('rel');
				str = (saveType==1) ? '取消' : '加入';
			if(confirm('确定要'+str+'保留库?')){
				$.post('/api/web/admin.api',{act:'joinSaveNum',cid:cid,saveType:saveType},function(data){
					if(data.status==1){
						alert(str+'保留库成功');
					}else{
						alert(data.msg);
					}
					window.location.href = window.location.href;
				},'json');
			}
		});

		$('#conList select').change(function(){
			$('#conList').submit();
		});
		myList.page();
	},
	page:function(){
		$("#pageContent input[type=button]").click(function(){
			var page = $("#pageContent #turnPage").val();
			if(page==''){
				alert('请填写正确页数');
				return;
			}
			window.location.href = "list.html?act={$act}&op={$op}&ordertype={$query[order]}&orderValue={$query[orderValue]}&companyType={$query[companyType]}&txtStartDate={$_txtStartDate}&txtEndDate={$_txtEndDate}&followType={$query[followType]}&nextType={$query[nextType]}&query={$q[q]}&page="+page;
		});

		$("#pageContent #turnPage").keydown(function(e){
			if(e.keyCode==13) $("#pageContent input[type=button]").click();
		});
	}
}
myList.init();
</script>
</body>
</html>