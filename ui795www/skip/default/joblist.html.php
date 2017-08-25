<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>{$com[cname]}-597人才网</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="shortcut icon" href="http://cdn.597.com/www/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/basefront.css?v=20130808" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/job.css?v=20130510" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/control.js?v=20130808"></script>
 
</head>
<body>
<!--{template header}-->
<div class="Content">
	<div class="Con">
		<!--{template skip/default/top}-->
		<div class="mainCon">
			<div class="mcT">
				<ul>
					<li><a href="./">企业介绍</a></li>
					<li class="cu"><a href="joblist.html">招聘职位</a></li>
					<li class='none'><a href="photo.html">企业相册</a></li>
					<li><a href="contact.html">联系我们</a></li>
					<li class='none'><a href="comment.html">咨询评论</a></li>
				</ul>
			</div>
			<div class="mcC">
				<div class="mcCcon">
					<div class="leftcon">
						<div class="lcTitle">
							<div class="tL"><h3>招聘职位</h3></div>
							<div class="tR"><a href="javascript:void(0);" id="btnReport" class="jb" ><b class="L"></b><b class="R"></b>举报</a></div>
						</div>
						<div class="table">
							<div class="tHead">
								<div class="lstCon lst1">职位名称</div>
								<div class="lstCon lst2">工作区域</div>
								<div class="lstCon lst3">工资待遇</div>
								<div class="lstCon lst4">工作经验</div>
								<div class="lstCon lst5">招聘人数</div>
								<div class="lstCon lst6">学历</div>
								<div class="clear"></div>
							</div>
							<div class="tBody">
								<ul id="uljob">
									<!--{loop $joblist $job}-->
									<li>
										<div class="tLst">
											<div class="lstCon lst1"><a href="/job-{$job[_jid]}.html" title="{$job[jname]}">{$job[jname]}</a></div>
											<div class="lstCon lst2" title="{$job[jobArea]}">{$job[jobArea]}</div>
											<div class="lstCon lst3">{$job[jobSalary]}</div>
											<div class="lstCon lst4">{$job[jobWorkYear]}</div>
											<div class="lstCon lst5">{$job[jobNumber]}</div>
											<div class="lstCon lst6">{$job[jobDegree]}</div>
											<div class="clear"></div>
										</div>
									</li>
									<!--{/loop}-->
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
	</div>
</div>
<!--{template footer}-->
</body>
</html>