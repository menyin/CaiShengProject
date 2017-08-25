<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>求职中心 我的597-597人才网(597.com)</title>   
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback.css?v=20130822" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback_cindex.css?v=20130822" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>

	<style type="text/css">
		.table td{padding: 5px 10px 5px 10px;line-height: 150%;}
	</style>


</head> 
<body>
<!--{template person/header}-->
	
	<div class="container">
		<div class="containerCon">
			<!--{template person/message_left}-->
			<div class="right">
				<div class="crumbs"><b>您的位置：</b><a href="/">首页</a>&gt;<a href="/person/index.html">求职中心</a>&gt;<span>我的597</span>&gt;<span>我的消息</span>&gt;<span>消息列表</span></div>
				<div class="part">
					<div class="tag">
						<!--基本内容开始-->
						<div class="tagC">
							<div class="tagCon">
								<div class="cImage">
									<div class="cImageT">
										<h4>消息列表</h4>
									</div>
									<div class="cImageC">
										<div class="table">
											<table width="100%" border="0" cellpadding="0" cellspacing="0" class="listTab" id="recordtable">
												<thead>
													<tr class="tabHead">
														<th width="10"></th>
														<th > 消息内容</th>
														<th width="80">发送时间</th>
														<th width="120">操作</th>
													</tr>
												</thead>
												<tbody>
												<!--{loop $messages $message}-->
												<tr onmouseover="style.backgroundColor='#f2f9ff'" onmouseout="style.backgroundColor='#fff'">
													<td class="tdCheckbox"><input type="checkbox" name="jid" value="{$message[mlid]}"></td>
													<td >{$message[content]}</td>
													<td ><span class="dateFormate">{$message[lasttime]}</span></td>
													<td >
														<a href='message.html?act=list&mlid={$message[mlid]}' class="button">详情</a>
														<a href='message.html?act=del&mlid={$message[mlid]}' class="button danger">删除</a>
													</td>
												</tr>
												<!--{/loop}-->
												</tbody>
											</table>
											<div class="tFoot">
												<div class="tFootL" style="width:200px;">
													<div class="checkVessel"></div>
													<div class="tFootBtns"></div>
												</div>
												<div class="tFootR" style="width:500px;"><div class="paginator" style="margin:-3px;">{$showpage}</div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--基本内容结束-->
				  </div>   
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<!--{template footer}-->
<script>
dateFormate(".dateFormate",{$time});
</script>

</body>
</html>
