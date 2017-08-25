<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
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
					<div class="m_bg">资讯管理 > 课程总列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="/news/ke/instr.html?act=edit">新增讲师</a></div>
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox">
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px; *width:900px; _width:900px; ">
									<form method="get">
										<li class="ml_10">　模糊查询：<input type="text" name="instrName" id="query" class="search input_txt" value="{$_GET['instrName']}" placeholder="讲师名称"></li>
										<li class="ml_10">
											<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
										</li>
									</form>
								</ul>
								<!--{if $instrRows['count']>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="ke.html?key={$_GET['key']}&Id={$_GET['Id']}&pp={$key}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$keRows['count']}条
										</div>
										<div class="paginator" style="float:right;">{$showpage}</div>
										<div style="clear:both;"></div>
									</div>
								<!--{/if}-->
							</div>
						</div>
					</div>
				</div>

				<div class="mainContent" style="">
					<div class="main_content">
						<div class="cell_tb_list">
							<table class="has_checkbox">
								<thead>
									<tr class="table_header">
										<th class="td1" style="display:none;" width="10" ></th>
										<th width="50" style="display:none;">ID</th>
										<th width="200px">头像</th>
										<th width="60px">讲师姓名</th>
										<th width="200px">描述</th>
										<th width="100">操作</th>
									</tr>
								</thead>
								<!--{loop $instrRows['list'] $val}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td class="td1" style="display:none;"></td>
										<td style="display:none;">{$val[instrId]}</td>
										<td style="text-align: center;"><img src="{$val[pic]}" style="width:100px; height:80px;"/></td>
										<td>{$val[instrName]}</td>
										<td>{$val[content]}</td>
										<td>
											<a class="btn_s" href="/news/ke/instr.html?act=edit&instrId={$val['instrId']}">编辑</a>
											<a class="btn_s" href="javascript:del({$val['instrId']})">删除</a><br/>
											<a class="btn_s" href="/news/ke/ke.html?key={$val['instrName']}">讲师的课程</a>
										</td>
									</tr>
								</tbody>
								<!--{/loop}-->
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="draggle "></div>-->
		</div>
		<!--{template news/sidebar}-->
	</div>
</div>
<script type="text/javascript">

//删除
function del(instrId){
	if(!instrId){
		alert('参数错误');
		return;
	}
	if(confirm('确认删除吗？')){
		$.post('/news/ke/instr.html',{act:'del', instrId:instrId},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.reload();
			}
		},'json');
	}
}
</script>
<script type="text/javascript">
	function MM_swapImgRestore() { //v3.0
		var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}
	function MM_preloadImages() { //v3.0
		var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}

	function MM_findObj(n, d) { //v4.01
		var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		if(!x && d.getElementById) x=d.getElementById(n); return x;
	}

	function MM_swapImage() { //v3.0
		var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
</script>

</body>
</html>