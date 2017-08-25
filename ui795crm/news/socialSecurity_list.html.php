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
					<div class="m_bg">反馈管理 > 社保反馈管理</div>
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
										<li class="ml_10">联系电话：<input type="text" name="telphone" id="telphone" class="search input_txt" value="{$telphone}"></li>
										<li class="ml_10">公司名称：<input type="text" name="query" id="query" class="search input_txt" value="{$q}" placeholder="公司名称"></li>
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
										<th width="6%">公司</th>
										<th width="10%">公司简介</th>
										<th width="6%">城市</th>
										<th width="6%">公司性质</th>
										<th width="8%">所属行业</th>
										<th width="8%">联系人</th>
										<th width="8%">联系号码</th>
										<th width="10%">联系地址</th>
										<th width="6%">需要解决的问题</th>
									</tr>
								</thead>
								<!--{loop $results $result}-->
								<tbody data-bind="foreach: items">
									<tr class="">
										<!-- <td class="td1"><input type="checkbox" class="c2_checkbox" ></td> -->
										<td style="display:none;">{$result[id]}</td>
										<td>{$result[company]}</td>
										<td>{$result[comContent]}</td>
										<td>{$result[_cityid]}</td>
										<td>{$result[_comType]}</td>
										<td>{$result[_comIndustry]}</td>
										<td>{$result[linker]}</td>
										<td>{$result[linkPhone]}</td>
										<td>{$result[adress]}</td>
										<td>{$result[_question]}</td>
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