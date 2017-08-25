<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="Keywords" content="" />
<meta name="Description" content="" />
</head>
<body>
<style>
.downBox{width:360px;font-size:12px;}
.downBox dl dt{font-size:14px;line-height:24px;margin-bottom:10px;}
.downBox dl dt span{color: #f00;}
.downBox dl dd{line-height:20px;}
.downBox .downBtn{margin:20px 0 0;height:40px;}
.downBox .downBtn .l{float:left;display:inline;margin:6px 0 0;}
.downBox .downBtn .r{float:right;display:inline;}
.downBox .downBtn .l input{float:left;display:inline;vertical-align:middle;margin:4px 3px 0 0;*margin:-2px 3px 0 0; cursor:pointer;}
.downBox .downBtn .l label{float:left;vertical-align:middle;cursor:pointer;}

</style>
<div class="dgBox downBox">
	<dl>
		<!--{if $right==1}-->
			<dt><em style="color:#d90000;">您已经拥有查看联系方式权限</em>，无需重复扣点！</dt>
		<!--{else}-->
			<!--{if $products}-->
				<!--{if $product}-->
					<dt>获取联系方式将会扣取<em style="color:#d90000;">《{$product['title']}合同》</em>的1个下载点，再次打开该简历时，不会重复扣点！</dt>
					<dd style="display:none;">
						<p>您的会员等级是：黄金会员</p>
					    <p>共可下载简历：1500份</p>
					    <p>本次下载后剩余：456份</p>
					</dd>
				<!--{else}-->
					<dt>您无法查看该简历联系方式，可能：1、您所办理区域的会员已到期或简历数已用完；2、您不是简历所属区域会员。<a href="/company/service/myservice.html">我的服务</a>">查看合同</a></dt>
				<!--{/if}-->
			<!--{else}-->
				<!--{if $resumeFree>0}-->
					<dt>试用会员每月可查看 <span>10</span> 份简历,您本月还可查看 <span>{$resumeFree}</span> 份简历</dt>
				<!--{else}-->
					<dt>试用会员每月 <span>10</span> 份简历已用完，建议升级成VIP会员>><a href='/about/price.html'>查看收费标准</a></dt>
				<!--{/if}-->
			<!--{/if}-->
		<!--{/if}-->
	</dl>
	<div class="downBtn"><div class="l"><input type="checkbox" id="chkdeductPro"/><label for="chkdeductPro">下次不再提示</label></div><div class="r"><a id="btnDeduct" href="javascript:void(0);" class="btn4 btnsF14">立即获取联系方式</a></div></div>
</div>
<script type="text/javascript">
try{
	jpjs.use('jpjob.jobValidate, jpjob.jobForm, jpjob.jobDialog, tools.cookie', function($, form, jobDialog, cookie){
		factory($.extend(form, jobDialog), cookie);
	});
} catch (ex) {
	factory($);
}
function factory($, cookie){
	$('#btnDeduct').on('click', function(){
		//isDownLoad = true;
		if($('#chkdeductPro').is(':checked')){
			cookie ? cookie.set('downresumeprompt', 'true') : writeCookie('downresumeprompt','true');
		}
		if(this.trigger){
			this.trigger('close');
		} else {
			$(this).closeDialog();
		}
	});
}
</script>
</body>
</html>