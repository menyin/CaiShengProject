<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="http://cdn.597.com/m/75x75.png" >
	<title>微信绑定列表-597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<style>
		.mContact span {width: 5px;}
		.mContact p {padding-left: 15px; position: relative; height: 55px; line-height: 55px; border-left:5px solid #2abbb4;}
		.mContact .edit,.mContact .unbind {font-size: 14px; color:#666; position: absolute; right:10px; top:8px; width: 42px; height: 36px; line-height:36px; border:1px solid #ddd;  text-align: center; font-size: 14px;}
		.mContact .edit {right:65px; line-height: 16px; height: 34px;padding-top: 2px;}
	</style>
</head>
<body>
<div class="loginPop"><div class="loginTopBg"><a href="/company/"><i class="icon-uniE6005"></i></a>微信绑定列表</div></div>
<div class="reManageBg">
	<div class="mContact">
		<!--{loop $list $key $l}-->			
			<p id="{$l['wxuid']}"><strong>{$l['name']}</strong><!--  <a href="#" class="edit">修改<br />设置</a> --><a href="javascript:;" class="unbind" >解绑</a></p>
		<!--{/loop}-->
	</div>
</div>
<div class="m_master" style="display:none"></div>
<div class="mRtake" id="unbind" style="display:none">
	<input type="hidden" id="wxuid" value="">
	<div class="mExtend">
		<p>解绑微信</p>
		<div class="mExtxt mExtxtMsg">
			解绑微信后，<b style="color:green"></b>账号将不再收到推送信息，确定解绑吗？ 
		</div>
	</div>
	<ul>
		<li><a href="javascript:;" class="unbindBtn01">取消</a></li>
		<li><a href="javascript:;" onclick="return unbind()" class="unbindBtn02">确定</a></li>
	</ul>
</div>
<!--{template company/footer}-->
<script type="text/javascript">
	$(function(){
		$(".unbindBtn01").click(function(){
			$(".m_master").hide();
			$("#unbind").hide();
		});
		$(".unbind").click(function(){
			$(".m_master").show();
			$("#unbind").show();
			$("#wxuid").val($(this).parent().attr('id'));
		});
		$(".unbindBtn02").click(function(){
			$(".m_master").hide();
			$("#unbind").hide();
			$.get('/api/web/company.api',{'act':'wxUnbindNew' ,wxuid:$("#wxuid").val()},function(json){
				if(json.status>0){
					alert("微信解绑成功!");
					window.location.reload();
					return;
				}else{
					alert("微信解绑失败！");
					return;
				}
			},'json');
		});
	})
</script>
</body></html>