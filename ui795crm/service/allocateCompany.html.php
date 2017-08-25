<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<script src="//cdn.{ROOT_DOMAIN}/js/ZeroClipboard.js"></script>
<style>
	.cBtns { display: inline-block; position: relative; padding:3px 10px; color:#444; background: #f2f2f2; border:1px solid #ddd; cursor: pointer; margin:5px 0; _display:none;}
	.cBtns:hover {color:#000; background: #d8d8d8;}
	.mainContent p{border:1px #ddd solid; text-align: center; padding: 10px; margin-top: 10px;}
	.mainContent img{display: block; margin:20px auto; width: 60px;}
	.mainContent span{color: #f00; font-weight: bold;}
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
					<div class="m_bg">客服管理 > 重新分配客服企业</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<!-- <div class="btn icon-1 icon" ><a onclick="Boxy.load('company.html?act=edit',{title: '快速注册'});">快速注册</a></div> -->
							<span class="gray"></span>
						</div>
					</div>
					
					<div class="searchBox"> 
						<div class="location">
							<div class="location_main item">
								<ul>
									<form method="get">
									<input type="hidden" name="act" value="{$act}">
									<input type="hidden" name="op" value="{$op}">
									</select></li>
									<li class="ml_10">
										重新分配客服企业
										<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="" onclick="WdatePicker()" required="required" readonly="readonly"/>-
										<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="" onclick="WdatePicker()" required="required" readonly="readonly"/>
									</li>
									<li class="ml_10">
										<select id="cityList">
											<option value="0">全部城市</option>
											<!--{loop $cityRegionArr $k $l}-->
												<option value="{$k}" rel="{$l}">{$l}</option>
											<!--{/loop}-->
										</select>
									</li>									
									<li class="ml_10">
										<button type="button" class="btn_gray btn_search btn_change" id="fenPei" >分配</button>
									</li>
									<li class="ml_10">
									（分配时间大于开始时间小于结束时间不在保留库全部客服企业重新分配，开始时间为空即小于结束时间的全部数据）
									</li>
									</form>
								</ul>
							</div>
						</div>
					</div>
				</div>				
				<div class="mainContent" style="display:none">
					<p><img src="//cdn.{ROOT_DOMAIN}/crm/images/loading.gif">请勿刷新页面，系统正在进行分配，已分配<span></span>家企业</p>
				</div>
				<input type="hidden" name="total" id="total" value="0">
			</div>
		</div>
		<!--{template service/sidebar}-->
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#fenPei').click(function(){
		var txtStartDate = $('#txtStartDate').val(),
			txtEndDate = $('#txtEndDate').val(),
			cityId = $('#cityList').val();
			cityName = ($('#cityList :selected').text());
		if(txtEndDate==''||txtEndDate==null||typeof(txtEndDate)=='undefined'){
			alert('结束时间不能为空');
			return;
		}
		if(confirm('确定对"'+cityName+'"分配时间小于'+txtStartDate+'全部客服企业重新分配?')){
			start(cityId,txtStartDate,txtEndDate);
		}

	}); 
});
function start(cityId,startDate,endDate){
	var pageNum = 50,
		total = parseInt($('#total').val());
	$.ajax({
		type:"post",
		url:"/api/web/admin.api",
		data:{act:'allocateCompany',type:1,cityId:cityId,startDate:startDate,endDate:endDate,pageNum:pageNum},
		dataType:'json',
		timeout:600000,
		beforeSend:function(){
			$('.mainContent').show();
		},
		success:function(data){
			if(data.msg){
				alert(data.msg);
			}else{
				if(data.status==2){
					total += data.total;
					$('#total').val(total);
					$('.mainContent span').html(total);
					start(cityId,startDate,endDate);

				}else if(data.status==1){
					$('.mainContent p').html('全部客服企业重新分配完成,总共分配<span>'+total+'</span>家企业');
				}
			}
		}
	});
}
</script>
</body>
</html>