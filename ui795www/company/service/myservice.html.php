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
	<title>597人才网_招聘中心_我的服务</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=20140409" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=20140617" />

	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="utf-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="utf-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="utf-8"></script><!--下拉模拟-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="utf-8"></script><!--表单提交-->

	<style type="text/css">
		hgroup.subHgp{padding:0px 20px 20px 30px; zoom:1; background: #fff;}
		.hd{border-bottom:1px solid #dadada;height:55px; font-family:"微软雅黑";}
		.hd h2{ width:120px;font-size:16px;font-weight:bold;display:inline; float:left; display:block; font-family:"微软雅黑";  line-height:54px; text-align: center;margin-right: 25px;}
		.hd h2 a {border-bottom:2px solid #0088CC; display: block;}
		.con {  margin-top: 20px;}
		.con h2 { font: bold 15px 微软雅黑; margin: 0 0 15px 10px;}
		.con h2 a { float: right; margin-right: 20px;font-size: 12px; font-weight: normal;}
		.selTable { width: 100%;font-size: 12px; text-align: center;}
		.selTable input { cursor: pointer; }
		.selTable tr:hover { background: #FEFEE2;}
		.selTable .tt td{ background: #f4f4f4; border-top: 1px solid #ddd; height: 40px;}
		.selTable td { height: 60px; }
		.bgOra {background: #f90; padding: 2px;color: #fff; margin-left: 5px;}
		.conBot { border-top: 1px dashed #ccc; padding-top: 10px;margin-top: 20px; }
		.conBot p { margin-top: 10px;}
		.ora,.green { font-family: arial; margin: 0 3px; }
		.ora { color: #f30; }
		.green { color: #090;}
		.adv p {margin-top: 40px; font-size: 12px; color: #666;}
		.input{width: 86px; height: 26px; padding: 0 8px; line-height: 28px; background: #fff; border: 1px solid #d4d4d4;}
		.floatl{float:left;}
		.cashMod{}
		.cashMod .drop{cursor:default;padding:0;height:auto;}
		.cashMod input.text{border:0;}
		.cashMod .dropLstCon{width:210px;}
		.cashMod .drop .dropLstCon ul li{width:200px;float:left;display:inline;}	
	</style>
</head>
<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="subCon">
			<hgroup class="subHgp">
				<div class="hd">
					<h2><a href="javascript:void(0)">我的服务</a></h2>
				</div>
				<form name="shengji" method="post" action="/api/web/company.api">
					<div class="con">
						<table class="selTable">
							<tr class="tt">
								<td width="12%">合同名称</td>
								<td width="30%">合同周期</td>
								<td colspan="2">职位数</td>
								<td colspan="2">简历数</td>
								<td >短信数</td>
								<!--
								<td >月下载简历数</td>
								-->
								<td>状态</td>
							</tr>
							<!--{loop $products $product}-->
								<tr>
									<td>{$product[title]}</td>
									<td class="ora">{$product[_beginTime]} 至 {$product[_finishTime]}</td>
									<td colspan="2">职位发布数：{$product[jobNum]},剩余{$product[_jobNum]}</td>
									<td colspan="2">简历下载数：{$product[resumeNum]},剩余{$product[_resumeNum]}</td>		
									<td>短信数：{$product[messageNum]},剩余{$product[_messageNum]}</td>
									<!--
									<td>{$product[_monthDownload_]}</td>
									-->
									<td><!--{if $product[_status]==1}--><span class="green">执行中</span><!--{/if}-->
										<!--{if $product[_status]==0}--><span class="blue">未启用</span><!--{/if}-->
										<!--{if $product[_status]==-1}--><span class="blue">已过期</span><!--{/if}-->
									</td>
								</tr>
							<!--{/loop}-->
						</table>
					</div>
				</form>
			</hgroup>
		</section>
		<div class="clear"></div>
	</div>

	<!--{template company/footer}-->

	<script type="text/javascript">
		//产品数组
		var productList=[{id:"1",name:"20个职位 100份简历 100条短信 100元"},{id:"2",name:"40个职位 200份简历 200条短信 200元"},{id:"3",name:"60个职位 300份简历 300条短信 300元"},{id:"4",name:"80个职位 400份简历 400条短信 400元"},{id:"5",name:"100个职位 500份简历 500条短信 500元"}];
		//最高合同等级
		var productMax=0;

		$(document).ready(function(){
			$('#memberTypeDrop1').droplist({defaultTitle:'请选择',isCanWrite:false,noSelectClass:'gray',inputWidth:300,hddName:'hddUpadteType',items:productList,onSelect:function(i,name) {
					var typeMember=$("input:radio[name='memberType']:checked").val();
					var typeMoney=$("input:radio[name='memberType']:checked").attr('rel');
					if(typeMember>0){
						var typeTotal=typeMoney*i/30;
						$('#price').html(typeTotal);
						var s = $("#startDatetxt").val();
						s = delimiterConvert(s);
						n=$('#hddUpadteType').val();
						var e = new Date(Date.parse(s) + (86400000 * n));
						endDate = e.getFullYear() + "-" + appendZero(e.getMonth() + 1) + "-" + appendZero(e.getDate());
						$("#endDatetxt").html(endDate);
					}
				}
			});
			//全选
			$(".select-all").on("click", function() {
				if ($(this).attr("checked")) {
					$("input[type='checkbox']").not(":disabled").attr("checked", "checked");
				} else {
					$("input[type='checkbox']").removeAttr("checked");
				}
			});
			var input = $(".browse-list input[type='checkbox']")
			input.click(function() {
				var all = $(".select-all").attr("checked", "checked");
				input.each(function(){
					if(!$(this).attr("checked") && !$(this).attr("disabled") && !$(this).hasClass("select-all")) {
						all.removeAttr("checked");
					}
				});
			});	
		});
		/*		*/
		$("input:checkbox[name='memberType']").click(function(){
			var max=0;
			$("input:checkbox[name='memberType']").each(function(){
				if($(this).attr("checked")) {
					if ($(this).attr("ref")>max) max=$(this).attr("ref");					
				}
			});
			
			if (max!=productMax){
				productMax=max;
				//定义新列表
				var productNew=new Array();
				for(var i=productMax;i<5;i++){
					productNew.push(productList[i]);
				}
				$("#memberTypeDrop1").empty();
				$('#memberTypeDrop1').droplist({defaultTitle:'请选择',isCanWrite:false,noSelectClass:'gray',inputWidth:300,hddName:'hddUpadteType',unbind:true,items:productNew,onSelect:function(i,name) {
				}});
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
			/*
			var productType=$("input:checkbox[name='memberType']:checked").val();
			if(productType==5){
				$.message('最高档套餐无法升级！',{title:'操作失败,请重新操作！'});
				return false;
			}
			*/
			var arr = new Array();
			$(".items:checked").each(function() {
				arr.push($(this).val());
			});
			var str = arr.join(",");
			if(!str){
				$.message('请选择要升级的套餐！',{title:'操作失败,请重新操作！'});
				return false;				
			}

			var hddUpadteType=$('#hddUpadteType').val();
			if(!hddUpadteType){
				$.message('请选择升级类型！',{title:'操作失败,请重新操作！'});
				return false;
			}

			$.showModal("/company/service/updateservice.html?updateType="+hddUpadteType+'&product='+str,{title:'服务升级报价单'});
		});

	</script>
</body>
</html>
