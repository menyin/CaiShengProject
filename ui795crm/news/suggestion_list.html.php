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
										<!-- <li><select id="query_day" name="query_day" style="width:80px">
												<option value="1" {if $query_day=='1'}selected{/if}>1天内</option>
												<option value="3" {if $query_day=='3'}selected{/if}>3天内</option>
												<option value="5" {if $query_day=='5' || $query_day==''}selected{/if}>5天内</option>
												<option value="10" {if $query_day=='10'}selected{/if}>10天内</option>
												<option value="20" {if $query_day=='20'}selected{/if}>20天内</option>
												<option value="30" {if $query_day=='30'}selected{/if}>30天内</option>
												<option value="60" {if $query_day=='60'}selected{/if}>60天内</option>
												<option value="90" {if $query_day=='90'}selected{/if}>90天内</option>
												<option value="120" {if $query_day=='120'}selected{/if}>120天内</option>
												<option value="180" {if $query_day=='180'}selected{/if}>180天内</option>
												<option value="240" {if $query_day=='240'}selected{/if}>240天内</option>
												<option value="360" {if $query_day=='360'}selected{/if}>360天内</option>
												<option value="999999" {if $query_day=='999999'}selected{/if}>全部</option>
											</select></li> -->
										<li class="ml_10">类型：<select id="userType" name="userType">
												<option value="-1" {if $userType=='-1'}selected{/if}>请选择</option>
												<option value="0" {if $userType=='0'}selected{/if}>个人</option>
												<option value="1" {if $userType=='1'}selected{/if}>企业</option>
											</select></li>	
										<li class="ml_10">手机：<input type="text" name="mobile" id="mobile" class="search input_txt" value="{$mobile}"></li>
										<li class="ml_10">模糊查询：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="内容"></li>
										<li class="ml_10"><button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
									</li>
									</form>
								</ul>
								<!--{if $num_all>0}-->
									<div style="float:left; margin:2px 10px;">
										<div style="float:left;">每页
											<select onchange="window.location.href=$(this).val();">
												<!--{loop $__ppStr $key $value}-->
													<option value="suggestion.html?act=list&query_day={$query_day}&mobile={$mobile}&query={$q}{$value}" <!--{if $pp==$key}-->selected<!--{/if}-->>{$key}</option>
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
										<!-- <th class="td1" width="3%"></th> -->
										<th width="2%" style="display:none;">ID</th>
										<th width="6%">留言者</th>
										<th width="6%">类型</th>
										<th width="6%">城市</th>
										<th width="15%">内容</th>
										<th width="8%">手机</th>
										<th width="8%">QQ</th>
										<th width="8%">email</th>
										<th width="8%">添加时间</th>
										<th width="6%">评分</th>
										<th>地址来源</th>
										<th width="6%">是否回复</th>
										<th width="8%">操作</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<!-- <td class="td1"><input type="checkbox" class="c2_checkbox" ></td> -->
										<td style="display:none;">{$result[id]}</td>
										<td>{$result[linker]}</td>
										<td>{$result[_userType]}</td>
										<td>{$result[cityid]}</td>
										<td>{$result[content]}</td>
										<td>{$result[telphone]}<em id="phoneAddr"></em></td>
										<td>{$result[qq]}</td>
										<td>{$result[email]}</td>
										<td>{$result[createTime]}</td>
										<td>{$result[stars]}</td>
										<td><span style="width:100px;word-wrap:break-word;word-break:break-all;">{$result[fromUrl]}</span></td>
										<td><!--{if $result[isCheck]==1}-->已回复<!--{else}--><font colot="red">未回复</font><!--{/if}--></td>
										<td>
											<a class="btn_s" onclick="Boxy.load('suggestion.html?act=email&id={$result[id]}',{title: '意见反馈邮件回复'});">发送邮件</a>
											<a class="btn_s" onclick="Boxy.load('suggestion.html?act=replay&id={$result[id]}',{title: '意见反馈备注'});">备注</a>
											<!--{if $result[isCheck]<1}--><a class="btn_s" href="suggestion.html?act=ok&id={$result[id]}" style="display:none;">已回复</a><!--{/if}-->
											<a class="btn_s"  onclick="return confirm('确认需要删除吗？');" href="suggestion.html?act=del&id={$result[id]}">删除</a>
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
function searchAttribution(tel) {
	//获取号码归属地
	var regex = /^1[3|4|5|8][0-9]\d{4,8}$/,
		phoneAddr = $('#phoneAddr');
	if(!phoneAddr.length) return;
	if(tel && !regex.test(tel)){
		phoneAddr.html('（未知）');
	} else {
		var url = 'http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=' + (tel || '');
		if (isIE6) {
			url = 'https://www.baifubao.com/callback?cmd=1059&callback=phone&phone=' + (tel || '');
		}
		$.ajax({
			 async:false,
			 type: "post",
			 url:url,
			 dataType: "jsonp",
			 contentType: "application/x-www-form-urlencoded; charset=utf-8",
			 jsonp: "callback",
			 success: function(json){
				if(isIE6){
					if(json.data.area == '' || json.data.area == undefined){
						phoneAddr.html('（未知）');
					} else {
						phoneAddr.html('（' + json.data.area + '）');
					}
				} else {
					if(json.province == ''||json.province == undefined){
				  		phoneAddr.html('（未知）');
					}else{
						phoneAddr.html('（'+json.province+'）');
					}
				} 
			 },
			 error:function (){   
				 phoneAddr.html('（未知）');
			 }
		 });
	}
}
</script>

</body>
</html>