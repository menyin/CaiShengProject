<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<body>
<div id="content">
	<!--{template xuyue/nav}-->
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
					<div class="m_bg">反馈管理 > 反馈列表</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!--<div class="btn icon-1 icon"><a href="news.html?act=edit&news_cid={$news_ctitle[news_cid]}">新增{$news_ctitle[news_ctitle]}</a></div>
							<div class="btn icon-2 disabled icon">删除用户</div>-->
							<span class="gray"></span>
						</div>
					</div>
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
										<input type="hidden" name="act" value="list">
										<li><select id="query_day" name="query_day" style="width:80px">
												<option value="1" <!--{if $query_day=='1'}-->selected<!--{/if}-->>1天内</option>
												<option value="3" <!--{if $query_day=='3'}-->selected<!--{/if}-->>3天内</option>
												<option value="5" <!--{if $query_day=='5' || $query_day==''}-->selected<!--{/if}-->>5天内</option>
												<option value="10" <!--{if $query_day=='10'}-->selected<!--{/if}-->>10天内</option>
												<option value="20" <!--{if $query_day=='20'}-->selected<!--{/if}-->>20天内</option>
												<option value="30" <!--{if $query_day=='30'}-->selected<!--{/if}-->>30天内</option>
												<option value="60" <!--{if $query_day=='60'}-->selected<!--{/if}-->>60天内</option>
												<option value="90" <!--{if $query_day=='90'}-->selected<!--{/if}-->>90天内</option>
												<option value="120" <!--{if $query_day=='120'}-->selected<!--{/if}-->>120天内</option>
												<option value="180" <!--{if $query_day=='180'}-->selected<!--{/if}-->>180天内</option>
												<option value="240" <!--{if $query_day=='240'}-->selected<!--{/if}-->>240天内</option>
												<option value="360" <!--{if $query_day=='360'}-->selected<!--{/if}-->>360天内</option>
												<option value="999999" <!--{if $query_day=='999999'}-->selected<!--{/if}-->>全部</option>
											</select></li>
										<li>手机：<input type="text" name="mobile" id="mobile" class="search input_txt" value="{$mobile}"></li>
										<li>内容查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}"></li>
										<li class="ml_10"><button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<div class="paginator" style=""><!--{if $number>0}-->{$showpage}<!--{/if}--></div>
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
										<!-- <th class="td1" width="3%"></th> -->
										<th width="2%">ID</th>
										<th width="4%">留言者</th>
										<th width="4%">城市</th>
										<th width="15%">内容</th>
										<th width="8%">手机</th>
										<th width="8%">email</th>
										<th width="8%">添加时间</th>
										<th width="5%">是否回复</th>
										<th width="15%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<!-- <td class="td1"><input type="checkbox" class="c2_checkbox" ></td> -->
										<td>{$result[id]}</td>
										<td>{$result[linker]}</td>
										<td>{$result[cityid]}</td>
										<td>{$result[content]}</td>
										<td>{$result[telphone]}</td>
										<td>{$result[email]}</td>
										<td>{$result[createTime]}</td>
										<td><!--{if $result[isCheck]==1}-->已回复<!--{else}-->未回复<!--{/if}--></td>
										<td>
											<a class="btn_s" onclick="Boxy.load('suggestion.html?act=replay&id={$result[id]}',{title: '意见反馈备注'});">备注</a>
											<!--{if $result[isCheck]<1}--><a class="btn_s" href="suggestion.html?act=ok&id={$result[id]}">已回复</a><!--{/if}-->
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
		<!--{template xuyue/sidebar}-->
	</div>
</div>
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