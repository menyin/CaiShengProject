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
					<div class="m_bg">资讯管理 >  评论列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul  style="width:900px \9; *width:900px; _width:900px; " style="display:none;">
									<form method="get">
										<input type="hidden" name="act" value="commentlist">
										<input type="hidden" name="op" value="{$op}">
										<li class="ml_10">审核状态:
											<select id="ischeck" name="ischeck">
												<option value="-1">请选择</option>
												<option value="0" <!--{if $ischeck==0}-->selected<!--{/if}-->>未审核</option>
												<option value="1" <!--{if $ischeck==1}-->selected<!--{/if}-->>通过</option>
												<option value="2" <!--{if $ischeck==2}-->selected<!--{/if}-->>不通过</option>
											</select>
										</li>
										<li class="ml_10">　模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="评论内容"></li>
										<li class="ml_10">
											<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
										</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="news.html?act=commentlist&ischeck={$ischeck}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
												<!--{/loop}-->
											</select>条  共{$num_all}条
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
										<th width="20%">标题</th>
										<th width="5%">类别</th>
										<th width="5%">评论者</th>
										<th width="20%">内容</th>
										<th width="7%">时间</th>
										<th width="5%">状态</th>
										<th width="10%">操作</th>
									</tr>
								</thead>
								<!--{loop $comments $l}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<td><a href="http://www.597.com/qyzf/{$l[detail_id]}.html" target="_blank">{$l[news_title]}</a></td>
										<td>{$l[category_title]}</td>
										<td><!--{if $l[_realname]}-->{$l['_username']}<!--{else}-->{$l['_realname']}<!--{/if}--></td>
										<td>{$l[content]}</td>
										<td><!--{if $l['isCheck']==1}-->通过<!--{elseif $l['isCheck']==2}-->不通过<!--{else}-->未审核<!--{/if}--></td>
										<td>{$l[_createTime]}</td>
										<td>
											<!--{if $l['isCheck']==0}-->
												<a class="btn_s" onclick="checkOk('{$l[comment_id]}')">通过</a>
												<a class="btn_s" onclick="checkNo('{$l[comment_id]}')">不通过</a>
											<!--{elseif $l['isCheck']==2}-->
												<a class="btn_s" onclick="checkOk('{$l[comment_id]}')">通过</a>
											<!--{elseif $l['isCheck']==1}-->
												<a class="btn_s" onclick="checkNo('{$l[comment_id]}')">不通过</a>
											<!--{/if}-->
											<a class="btn_s" onclick="del('{$l[comment_id]}')">删除</a>
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
//不通过
function checkOk(comment_id){
	if(!comment_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认通过？')){
		$.post('news.html',{act:'check_comment_ok',comment_id:comment_id},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}
		},'json');
	}
}
//不通过
function checkNo(comment_id){
	if(!comment_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认不通过吗？')){
		$.post('news.html',{act:'check_comment_no',comment_id:comment_id},function(data){
			if(data.status<1){
				$.message(data.msg, { title: "系统提示", icon: "fail" });
			}else{
				$.anchorMsg(data.msg,{icon:"success"});
				window.history.go();
			}
		},'json');
	}
}
//删除
function del(comment_id){
	if(!comment_id){
		alert('参数错误');
		return;
	}
	if(confirm('确认删除吗？')){
		$.post('news.html',{act:'del_comment',comment_id:comment_id},function(data){
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