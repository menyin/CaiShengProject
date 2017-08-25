<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_招聘中心_购买服务</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=20140312"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/pay.css?v=20140425" />

	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=20140312"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=20140312"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=20140320"></script><!--下拉模拟-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=20140319"></script><!--表单提交-->
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquerydate.js?v=20130808"></script>	

</head>
<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="subCon">
			<hgroup class="subHgp" id="server">
				<div class="hd">
					<h2><a href="javascript:void(0)">会员套餐</a></h2>
				</div>
				<form name="shengji" method="post" action="/api/web/company.api">
					<input type="hidden" name="act" value="updateProduct">
					<div class="con">
						<table class="selTable">
							<tr class="tt">
								<td>点击选择</td>
								<td width="60">套餐</td>
								<td>类型</td>
								<td>服务内容</td>
								<td>原价</td>
								<td>优惠价</td>
							</tr>
							<!--{loop $product $l}-->
								<tr>
									<td><input type="radio" value="{$l[pid]}" name="memberType" rel='{$l[price]}' /></td>								
									<td class="ora">{$l[day]}天</td>
									<td>{$l[productName]}</td>
									<td>{$l[productContent]}</td>
									<td><s>　原价：{$l[oriPrice]}元　</s></td>
									<td class="ora">{$l[price]}元<span class="bgOra">折</span> （活动截止时间：2015-12-31）</td>
								</tr>
							<!--{/loop}-->
						</table>
						<h2>选择天数</h2>
						<div class="formMod cashMod">
							<div style="display:block;">
								<span class="floatl">起始日期：</span>
								<span style="position: relative;" class="floatl">
									<input type="text" onfocus="c.showMoreDay = false;c.show(this);" id="startDatetxt" class="input" name="productDate" readonly="readonly" />&nbsp;&nbsp;
								</span>
								<span id="memberTypeDrop1" class="drop formText zindex" style="z-index: 994;" readonly="readonly"></span>
								<span class="floatl">&nbsp;天&nbsp;&nbsp;</span>
								<span class="pl15 floatl">截止日期：</span><span id="endDatetxt"></span>
								<div class="clear"></div>
							</div>
						</div>
							<div>
							<p>您当前的余额<span class="green" id="member_money">{$userAccount[money]}</span>元本次消费金额：<span class="ora" id="price">-</span>元</p>
							</div>
							<div>
							<p align="center">
								<a href="javascript:void(0)" class="btn1 btnsF14" style="padding:0 30px;margin:0;" id="submitBtn">确定</a>
							</p>
							</div>
						</div>
					</div>			
				</form>

			</hgroup>
		</section>
		<div class="clear"></div>
	</div>

	<!--{template company/footer}-->

	<script type="text/javascript">
		var c = new Calendar("c");
		c.offsetTop = 20;
		document.write(c);

		var isCGivenPay = 0;
		var isCashPay = 0;
		var startDate = "{$Date}";
		var endDate = "";
		var mimSelected = "{$Date}";
		var maxSelected = "";
		var limitDays = 0;
		var confboxstr = "";
		var productId = 0;
		var n = 30;//开始日期和截止日期差的天数


		Calendar.prototype.calendarOnHide = function () {
			//改变开始日期		   
			var s = $("#startDatetxt").val();
			var productType=$("input:radio[name='memberType']:checked").val();
			var hddMemberCount=$('#hddMemberCount').val();
			
			if(productType>0&&hddMemberCount>0){
				s = delimiterConvert(s);
				var e = new Date(Date.parse(s) + (86400000 * n));
				endDate = e.getFullYear() + "-" + appendZero(e.getMonth() + 1) + "-" + appendZero(e.getDate());
				$("#endDatetxt").html(endDate);
			}	
			/*
			var r = checkStartTime(s);
			if (!r || r == undefined) {
				return;
			}
			s = delimiterConvert(s);
			var e = new Date(Date.parse(s) + (86400000 * n));
			endDate = e.getFullYear() + "-" + appendZero(e.getMonth() + 1) + "-" + appendZero(e.getDate());
			$("#endDatetxt").html(endDate);
			*/
		};


		$(document).ready(function(){
			//默认时间
			$('#startDatetxt').val(startDate);
			limitDays = 31;
			var m = delimiterConvert(mimSelected);
			var l = new Date(Date.parse(m) + (86400000 * limitDays));
			maxSelected = l.getFullYear() + "-" + appendZero(l.getMonth() + 1) + "-" + appendZero(l.getDate());
			c.offsetTop = 20;
			c.minDate = new Date('{$year}', '{$month}', '{$day}');
			var max = delimiterConvert(maxSelected);
			c.maxDate = new Date(Date.parse(max));

			$('#memberTypeDrop1').droplist({defaultTitle:'{$hddSalary1}',isCanWrite:false,noSelectClass:'gray',inputWidth:60,hddName:'hddMemberCount',items:[{id:"30",name:"30"},{id:"60",name:"60"},{id:"90",name:"90"},{id:"120",name:"120"},{id:"150",name:"150"},{id:"180",name:"180"},{id:"210",name:"210"},{id:"240",name:"240"},{id:"270",name:"270"},{id:"300",name:"300"},{id:"330",name:"330"},{id:"360",name:"360"}],onSelect:function(i,name) {
					var typeMember=$("input:radio[name='memberType']:checked").val();
					var typeMoney=$("input:radio[name='memberType']:checked").attr('rel');
					if(typeMember>0){
						var typeTotal=typeMoney*i/30;
						$('#price').html(typeTotal);
						var s = $("#startDatetxt").val();
						s = delimiterConvert(s);
						n=$('#hddMemberCount').val();
						var e = new Date(Date.parse(s) + (86400000 * n));
						endDate = e.getFullYear() + "-" + appendZero(e.getMonth() + 1) + "-" + appendZero(e.getDate());
						$("#endDatetxt").html(endDate);
					}

				}
			});
		});
		$("input:radio[name='memberType']").click(function(){
			var productType=$(this).val();
			var hddMemberCount=$('#hddMemberCount').val();
			var ThisRel=$(this).attr('rel');
			if(hddMemberCount>0){
				var typeTotal=ThisRel*hddMemberCount/30;
				$('#price').html(typeTotal);
				var s = $("#startDatetxt").val();
				s = delimiterConvert(s);
				n=$('#hddMemberCount').val();
				var e = new Date(Date.parse(s) + (86400000 * n));
				endDate = e.getFullYear() + "-" + appendZero(e.getMonth() + 1) + "-" + appendZero(e.getDate());
				$("#endDatetxt").html(endDate);				
			}
		});


/*
		$('#pri_content').click(function() {
			$.showModal("#priContent", { contentType: 'selector', showMask: true, dw: "600" });
		});
		$('#fresh_content').click(function() {
			$.showModal("#freshContent", { contentType: 'selector', showMask: true, dw: "600" });
		});
*/		
		$('#submitBtn').click(function(){
			var productType=$("input:radio[name='memberType']:checked").val();
			if(!productType){
				$.message('请选择套餐类型！',{title:'操作失败,请重新操作！'});
				return false;				
			}

			if(!$('#hddMemberCount').val()){
				$.message('请选择天数！',{title:'操作失败,请重新操作！'});
				return false;				
			}
			var member_money=0;
			member_money=parseInt($('#member_money').html());
			var price=parseInt($('#price').html());	

			if(member_money<price){
				$.message('您的金额不足! <a href="/company/account/pay.html">点击充值！</a>',{title:'操作失败,请重新操作！'});
				return false;
			}
			$.confirm('确定购买会员服务？','升级会员服务',function(){
				$("#submitBtn").submitForm({ beforeSubmit: '',data:{}, success: modifySuccess, clearForm: false });
				return false;
			});
		});
		function modifySuccess(data){
			if(data&&data.status==1){
				$.anchorMsg(data.msg,{icon:"success"});
				window.location.href='/company/account/';
				$('#submitBtn').unbind('click');
				return false;
			}
			if(data&&data.status<0){
				$.message(data.msg,{title:'操作失败,请重新操作！'});
				return false;
			}
		}
		//补0函数
		function appendZero(s) {
			return ("00" + s).substr((s + "").length);
		}
		function delimiterConvert(val) {
			return val.replace('-', '/').replace('-', '/');
		}

		function checkStartTime(s) {
			var lastOpenTime = "2015-03-31";

			productId = $("input[name='radioProductIDs']:checked").val();
			productId=$("input[name='memberType']:checked").val();
			if (productId == 0 || productId == undefined) {
				alert("请先选择套餐！");
				return;
			}			
			var year = s.split('-')[0];
			var mon = s.split('-')[1];
			var day = s.split('-')[2];
			//补0是为了浏览器兼容
			if (mon < 10 && mon.charAt(0) != "0") {
				mon = "0" + mon;
			}
			if (day < 10 && day.charAt(0) != "0") {
				day = "0" + day;
			}
			var selday = year + "-" + mon + "-" + day;
			if (Date.parse(delimiterConvert(selday)) > Date.parse(delimiterConvert(lastOpenTime))) {
				alert("开始时间不能超过" + lastOpenTime + "！");
				return false;
			}

			return true;
		}

	</script>
</body>
</html>
