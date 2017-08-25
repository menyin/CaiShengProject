<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>求职中心 我的597-597人才网(597.com)</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback.css?v=20130822" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/baseback_pindex.css?v=20130822" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<style type="text/css">
		.part{padding:10px 10px 25px;zoom:1;}
	</style>
</head>
<body>
<!--{template person/header}-->

	<div class="container">
		<div class="containerCon">
			<!--{template person/index_left}-->
			<div class="right">
				<div class="crumbs"><b>您的位置：</b><a href="/">首页</a>&gt;<a href="/person/index.html">求职中心</a>&gt;<span>我的简历</span>&gt;<span>求职信管理</span></div>
				<!--
				<div class="yellowTip">
					<div class="yellowTipL"></div>
					<div class="yellowTipR"></div>
					<div class="clear"></div>
				</div>
				-->
				<div class="part">
					<div class="tag">
						<!--基本内容开始-->
						<div class="tagC">
							<div class="tagCon">
								<div class="cImage">
									<div class="cImageT">
										<h4>求职信列表</h4>
										<div class="tableTxtR">
											<a href="/person/letters.html?act=edit" class="btn8" id="btnWriteResume"><b class="L"></b><b class="R"></b>创建求职信</a>
										</div>
									</div>
									<div class="cImageC">
										<div class="table">
											<table width="100%" border="0" cellpadding="0" cellspacing="0" class="listTab" id="recordtable">
												<thead>
													<tr class="tabHead">
														<th class="ui-table-text"> 求职信名称</th>
														<th width="110" class="ui-table-deactivate">操作</th>
													</tr>
												</thead>
												<tbody>
												<!--{loop $letters $letter}-->
												<tr>
													<td ><a value="{$letter[letterName]}" title="{$letter[letterName]}" href="#" class="boldhref">{$letter[letterName]}</a></td>
													<td >
														<a href='letters.html?act=edit&letterid={$letter[letterid]}' class="button">修改</a>
														<a href='letters.html?act=del&letterid={$letter[letterid]}' class="button danger">删除</a>
													</td>
												</tr>
												<!--{/loop}-->
												</tbody>
											</table>
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
</body>
</html>