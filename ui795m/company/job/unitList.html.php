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
	<title>部门管理-{$domainInfo['region_name_short']}597人才网触屏版</title>
	<meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
	<meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
	<style type="text/css">
		.now{border-radius: 5px;height: 33px;line-height: 33px;padding: 0 10px;border: 1px solid #ccc;background: #f7f7f7;display: inline-block;vertical-align: middle;color: #999;}
		#stop_job {margin-right: 0; margin-left: 6%;}
		.freeTip{padding:50px 0px 50px 0px; font-size: 16px; text-align: center; background: #fff;}
		.freeTip a{color: #3D84B8;}
		.m_joinCont{font-size: 14px; font-family: "微软雅黑";}
		.m_joinCont ul li{border-bottom:1px #ccc solid; padding-bottom: 7px;}
		.m_joinCont ul li p{height: 32px; line-height: 32px; overflow: hidden;}
		.m_joinCont ul li i{font-weight: bold;}
		.m_joinCont ul li span{margin-left: 30px;}
		.m_joinCont ul li div{float: right;}
		.m_joinCont ul li div a{color: #2094D1; padding: 6px;}
	</style>
</head>
<body>
<div class="loginPop">
	<div class="loginTopBg"><a href="/company/index.html"><i class="icon-uniE6005"></i></a>部门管理</div>
	<a href="/company/job/job.html?act=editUnit" class="detBtn">添加部门</a>
</div>
<form>
<div class="m_joinCont">
	<!--{if $unitList}-->
		<ul>
			<!--{loop $unitList $l}-->
			<li>
				<p><i>{$l['cuName']}</i><span>{$l['linker']}</span></p>
				<!--{if $l['address']}--><p>{$l['address']}</p><!--{/if}-->
				<div><a href="/company/job/job.html?act=editUnit&cuid={$l['cuid']}">编辑</a><a href="javascript:;" id="delUnit" onclick="delUnit('{$l[cuid]}')">删除</a></div>
			</li>
			<!--{/loop}-->
		</ul>
	<!--{else}-->
		<div class="freeTip">
			尊敬的用户，您还未添加部门,<a href="/company/job/job.html?act=editUnit">点击添加</a>
		</div>
	<!--{/if}-->
</div>
<!--{template company/footer}-->
</form>

<script>
	function delUnit(deptid){
		if(confirm('该部门下的职位部门将为空,确定删除该部门？')){
			//ajax 删除数据
			 $.post('/api/web/company.api',{'dept_id':deptid,'act':'delUnit','cidHash':{$cid}},function(result){
				 if(result.status>0){
					alert('删除部门成功');
					window.location.href = window.location.href;
					return;
				 }else{
			 		if(result.status==0){
				  		alert(result.msg);
			 		}else{
				 		alert(result.msg);
			 		}
				 }
			 },'json')
		}
	}
</script>
</body>
</html>