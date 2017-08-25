<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--    声明ie以最高的模式运行-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>597人才网_招聘中心_购买服务</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/pay.css?v=20140425" />

	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="utf-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="utf-8"></script><!--下拉模拟-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="utf-8"></script><!--表单提交-->
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquerydate.js?v=2017" charset="utf-8"></script>
	<style>
		#server .hd h2 {width:600px; text-align: left;}
		#server .hd h2 a {display: inline-block; padding:0 20px; color:#666; border-bottom:none;}
		#server .hd h2 a.cu {border-bottom:2px solid #0088CC; color:#3D84B8;}
		.huodong{margin-top: 20px; margin-bottom: 20px;}
		.huodong span{color:#f00; font-weight: bold;}
		.textLeft{text-align: left;}
		.productInfo{display: none;}
	</style>

</head>
<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="subCon">
			<hgroup class="subHgp" id="server">
			<!--{if $com['licenceCheck']>=1}-->
				<div class="hd">
					<h2>
						<a href="javascript:void(0)" <!--{if $type==1}-->class="cu"<!--{/if}-->>全国套餐</a>
						<a href="javascript:void(0)" <!--{if $type==2}-->class="cu"<!--{/if}-->>短信套餐</a>
						<a href="/about/price.html" target="_blank">区域套餐</a>
					</h2>
				</div>
				<div class="productInfo" <!--{if $type==1}-->style="display:block;"<!--{/if}-->>
					<form name="submitMember" method="post" action="/api/web/company.api">
						<input type="hidden" name="act" value="updateProduct">
						<div class="con">
							<table class="selTable">
								<tr class="tt">
									<td>点击选择</td>
									<td width="106">套餐</td>
									<td>服务内容</td>
									<td>职位数</td>
									<td>简历数</td>
									<!--
									<td>短信数</td>
									-->
									<td>时间</td>
									<td>原价</td>
									<td>优惠价</td>
								</tr>
								<!--{loop $productArr[0] $l}-->
									<tr class="priceItem">
										<td><input type="radio" value="{$l[pid]}" name="pid" rel='{$l[price]}' /></td>
										<td class="ora textLeft">{$l[productName]}<!--{if $l[month]==24}--><span><img src="http://cdn.597.com/images/hot.png"></span><!--{/if}--></td>
										<td>{$l[productContent]}</td>
										<td>{$l[jobNum]}个</td>
										<td>{$l[resumeNum]}份</td>
										<!--<td>{$l[messageNum]}条</td>-->
										<td class="ora">{$l[month]}个月</td>
										<td style="text-decoration:line-through;">{$l[oriPrice]}元</td>
										<td class="ora">{$l[price]}元</td>
									</tr>
								<!--{/loop}-->
							</table>
							<!--<div class="huodong"><span>活动：</span>新年感恩回馈新老客户，本月（2016年1月）办理以上全年会员，均可赠送 <span>1个月</span> 时间（数量有限，先办先得）</div>-->
							<!--<div class="huodong"><span>温馨提示：以上优惠套餐截止至2016年12月31日，届时将上调新版价格，欲购从速!</span></div>
-->							<div class="huodong"><span>备注：</span>以上会员价格不适用保险、信用卡、娱乐夜场、人力资源服务公司（人才中介、派遣、猎头服务），该类企业的服务价格请来电咨询或面洽，以上行业如未人工咨询直接按上面标准自行开通，本网将直接关闭会员，并不退还已收取的服务费。</div>
							<div>
								<p>
									您当前的余额
									<span class="green" id="member_money">{$userAccount[money]}</span>元,本次消费金额：
									<span class="ora" id="price">-</span>
									元
								</p>
							</div>
							<div>
								<p align="center">
									<a href="javascript:void(0)" class="btn1 btnsF14" style="padding:0 30px;margin:0;" id="submitBtn">确定</a>
								</p>
							</div>
							</div>
					</form>
				</div>
				<div class="productInfo" <!--{if $type==2}-->style="display:block;"<!--{/if}-->>
					<form name="submitMessage" method="post" action="/api/web/company.api">
						<input type="hidden" name="act" value="updateProduct">
						<div class="con">
							<table class="selTable">
								<tr class="tt">
									<td>点击选择</td>
									<td width="206">套餐</td>
									<td width="126">服务内容</td>
									<td width="126">短信数</td>
									<td width="166">时间</td>
									<td>优惠价</td>
								</tr>
								<!--{loop $productArr[1] $l}-->
									<tr class="priceItem">
										<td><input type="radio" value="{$l[pid]}" name="pid" rel='{$l[price]}' /></td>
										<td class="ora textLeft">{$l[productName]}</td>
										<td>{$l[productContent]}</td>
										<td>{$l[messageNum]}条</td>
										<td class="ora">{$l[dateLine]}</td>
										<td class="ora">{$l[price]}元 </td>
									</tr>
								<!--{/loop}-->

							</table>
							<!--<div class="huodong"><span>活动：</span>新年感恩回馈新老客户，本月（2016年1月）办理以上全年会员，均可赠送 <span>1个月</span> 时间（数量有限，先办先得）</div>-->
							<div>
								<p>
									您当前的余额
									<span class="green" id="member_money">{$userAccount[money]}</span>元,本次消费金额：
									<span class="ora" id="price">-</span>
									元
								</p>
							</div>
							<div>
								<p align="center">
									<a href="javascript:void(0)" class="btn1 btnsF14" style="padding:0 30px;margin:0;" id="messageBtn">确定</a>
								</p>
							</div>
							</div>
					</form>
				</div>
			<!--{else}-->
				<p>&nbsp;</p>
					您的执照还未通过认证，暂时无法在线购买服务>><a href="/company/account/licence.html">马上点击【上传营业执照认证】</a>
				<p>&nbsp;</p>
			<!--{/if}-->
			</hgroup>
		</section>
		<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/company_index.css?v=2" />
<!--疑问联系顾问 -->
			<div class="firmConTopBg" style="margin:39px auto;">
				<div class="firmRmendTit" style=";width: 100%;">
					<span>有疑问？请联系您的顾问</span>
				</div>

					<ul class="fRmendConat" style=";width: 100%;">
						<!--{if $adminInfo}-->
							<div style="float:left; margin-right:10px;">
								<img src="//pic.{ROOT_DOMAIN}/photo/admin/{$adminInfo['adminPhoto']}" width="100" height="120" onerror="this.onerror=null; this.src='http://cdn.{ROOT_DOMAIN}/img/v2/resumeM/head-defects.jpg';">
							</div>
							<li style="margin-left: 30px;">
								<p>
									<b>{$adminInfo['adminName']}</b>
									<span style="color:#ccc">(招聘顾问)</span>
								</p>
								<p>
									电话 : {$adminInfo['adminTelphone']}
								</p>
								<p>
									手机 : {$adminInfo['adminFax']}
								</p>
								<p>全国热线 : 400-8108-597</p>
								<!--{if $adminInfo['adminCode']}-->
								<p>
									<span style="vertical-align:middle;">QQ:{$adminInfo['adminCode']}</span>

									<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$adminInfo['adminCode']}&site=qq&menu=yes" style="margin-left:-10px;">
										<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:{$adminInfo['adminCode']}:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
									</a>
								</p>
								<!--{/if}-->
							</li>
							<!--{if $adminBoss}-->
								<div style="float:left; margin-right:10px;margin-left: 150px;">
									<img src="//pic.{ROOT_DOMAIN}/photo/admin/{$adminBoss['adminPhoto']}" width="100" height="120" onerror="this.onerror=null; this.src='http://cdn.{ROOT_DOMAIN}/img/v2/resumeM/head-defects.jpg';">
								</div>
								<li style="margin-left: 30px;">
									<p>
										<b>{$adminBoss['adminName']}</b>
										<span style="color:#ccc">(主管)</span>
									</p>
									<p>
										电话 : {$adminBoss['adminTelphone']}
									</p>
									<p>
										手机 : {$adminBoss['adminFax']}
									</p>
									<p>全国热线 : 400-8108-597</p>
									<!--{if $adminBoss['adminCode']}-->
									<p>
										<span style="vertical-align:middle;">QQ:{$adminBoss['adminCode']}</span>

										<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$adminBoss['adminCode']}&site=qq&menu=yes" style="margin-left:-10px;">
											<img border="0"  width="79" height="25" src="http://wpa.qq.com/pa?p=2:{$adminBoss['adminCode']}:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
										</a>
									</p>
									<!--{/if}-->
								</li>
							<!--{/if}-->
						    <!--{else}-->
							<li><p>全国热线电话 : 400-8108-597</p></li>
						<!--{/if}-->
					</ul>
                <div style="clear: both"></div>
			</div>
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
			var productType=$("input:radio[name='pid']:checked").val();
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
					var typeMember=$("input:radio[name='pid']:checked").val();
					var typeMoney=$("input:radio[name='pid']:checked").attr('rel');
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
		$(".productInfo input:radio[name='pid']").click(function(){
			//var productType=$(this).val();
			//var hddMemberCount=$('#hddMemberCount').val();
			var ThisRel=$(this).attr('rel');
			$('.productInfo').find('#price').html(ThisRel);
		});


/*
		$('#pri_content').click(function() {
			$.showModal("#priContent", { contentType: 'selector', showMask: true, dw: "600" });
		});
		$('#fresh_content').click(function() {
			$.showModal("#freshContent", { contentType: 'selector', showMask: true, dw: "600" });
		});
*/
		$('#submitBtn,#messageBtn').click(function(){
			var thisId = ($(this).attr('id'));
			var productType=$(this).closest('.productInfo').find("input:radio[name='pid']:checked").val();
			if(!productType){
				$.message('请选择套餐类型！',{title:'操作失败,请重新操作！'});
				return false;
			}
			window.location.href = '/company/account/pay.html?pid='+productType;
		});

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
			productId=$("input[name='pid']:checked").val();
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

		// $('.selTable tr').click(function(){
		// 	var radio = $(this).find('input');
		// 	radio.attr('checked',radio.attr('checked') ? false : true);
		// });

		// $('#server a').click(function(){
		// 	$(this).addClass('cu').siblings().removeClass('cu');
		// 	$('.selTable').hide().eq($(this).index()).show();
		// });

		$('.hd a').slice(0,2).click(function(){
			$('.productInfo').find('#price').html('-');
			$(this).addClass('cu').siblings().removeClass('cu');
			$('.productInfo').hide().eq($(this).index()).show();
		});
	</script>
</body>
</html>
