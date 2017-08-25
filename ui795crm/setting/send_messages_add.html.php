<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_autocomplete.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ui_hovchange.js?v=20140312"></script>
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
				<div data-bind="'if': $index() == $parent.help_cats().length -1">
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
					<div class="m_bg">系统设置 >  发送短信</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<span class="gray">跟单员发送手机短信，一天只能发送 20 条，您今天只剩<font color="red"> {$remain_num} </font>条,请珍惜使用!</span>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<div class="">
												<form id="sendform" name="sendform" method="post" action="send_messages.html">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
															<tbody>
															<tr> 
																<td align="left"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="A5B6CC">
																<tbody><tr height="25"> 
																	<td bgcolor="#FFFFFF">手机号码：<input type="text" name="mobile" id="mobile" value=""><!--多个手机号用,隔开--></td>
																</tr>
																<script language="javascript" type="text/javascript">
																function getwordcount()
																{
																//alert(document.sendform.content.value.length);
																document.sendform.ssssssss.value=document.sendform.content.value.length;
																}
																</script>
																<script language="javascript">
																function countChar(textareaName,spanName){
																	document.getElementById(spanName).innerHTML=66-document.getElementById(textareaName).value.length;
																	if(document.getElementById(textareaName).value.length>=66){
																		window.alert("已经是最大字数了哦！")
																		return false;
																	}
																}
																</script>
		<tr height="25">
			<td bgcolor="#FFFFFF">
第一条发送内容：可以输入<span id="counter">66</span>字<br>
<textarea id="messageContent" name="messageContent" cols="80" rows="2" onkeydown="countChar('messageContent','counter');" onkeyup="countChar('messageContent','counter');"></textarea><br><br>
第二条发送内容：可以输入<span id="counter1">66</span>字<br>
<textarea id="messageContent2" name="messageContent2" cols="80" rows="2" onkeydown="countChar('messageContent2','counter1');" onkeyup="countChar('messageContent2','counter1');"></textarea><a onclick="sendform.messageContent.value='';sendform.messageContent2.value='';" style="cursor:hand"><u>清空</u></a></td>
		</tr>
		<script language="javascript" type="text/javascript">
			function showCity(ID)
			{
				for(i=1;i<=11;i++) 
				{
					document.getElementById("divCity"+i).style.display="none";
				}
				document.getElementById("divCity"+ID).style.display="block";
			}
		</script>
		<tr>
			<td bgcolor="#FFFFFF"><a href="javascript:showCity(1);">厦门</a> <a href="javascript:showCity(2);">泉州</a> <a href="javascript:showCity(3);">南平</a> <a href="javascript:showCity(4);">福州</a> <a href="javascript:showCity(5);">三明</a> <a href="javascript:showCity(6);">龙岩</a> <a href="javascript:showCity(7);">漳州</a> <a href="javascript:showCity(8);">宁德</a> <a href="javascript:showCity(9);">莆田</a> <a href="javascript:showCity(10);">北京</a> <a href="javascript:showCity(11);">金华</a></td>
		</tr>
		<tr height="25">
			<td bgcolor="#FFFFFF">
			<a onclick="sendform.messageContent.value='您好!597人才网http://www.597.com/,您的用户名是:*** 密码是:*** 客服热线:';" style="cursor:hand"><u>597人才网http://www.597.com/,您的用户名是:*** 密码是:*** 客服热线:</u></a><br>
			</td>
		</tr>
		<tr id="divCity1" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:40350001040007316 户名：厦门才盛人才服务有限公司,开户行:农行厦门宏业支行【597人才网】';" style="cursor:hand"><u>597人才网对公账号:40350001040007316户名:厦门才盛人才服务有限公司,农行厦门宏业支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,中国农业银行:6228 4800 7023 3229 510 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,中国农业银行:6228 4800 7023 3229 510 户名:吴月贞【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,中国建设银行:6227 0019 3513 0116 485 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,中国建设银行:6227 0019 3513 0116 485 户名:吴月贞【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,中国工商银行:6222 0241 0000 5803 402 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,中国工商银行:6222 0241 0000 5803 402 户名:吴月贞【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,兴业银行:6229 0912 3895 7252 19 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,兴业银行:6229 0912 3895 7252 19 户名:吴月贞【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,中国邮政储蓄:6221 8839 3000 4644 080 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,中国邮政储蓄:6221 8839 3000 4644 080 户名:吴月贞【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,中国交通银行:6222 6007 9000 2384 240 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,中国交通银行:6222 6007 9000 2384 240 户名:吴月贞【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity2" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='您好!597对公账号:35001652490052510548户名:泉州才聘网络科技有限公司,开户行:建行泉州分行【597人才网】';" style="cursor:hand"><u>597人才网对公账号:35001652490052510548户名:泉州才聘网络科技有限公司,建行泉州分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4806 8260 5269 419户名:吴月贞，中国农业银行泉州市分行【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4806 8260 5269 419户名:吴月贞，中国农业银行泉州市分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 3252 0269 513 户名:吴月贞，中国建行银行泉州市滨城支行【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 3252 0269 513 户名:吴月贞,中国建行银行泉州市滨城支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0214 0800 5639 731 户名:吴月贞，中国工商银行泉州泉秀支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0214 0800 5639 731 户名:吴月贞，中国工商银行泉州泉秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity3" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:4035　0001　0400　02499 户名:厦门才盛网络科技有限公司,开户行:农行厦门宏业支行【597人才网】';" style="cursor:hand"><u>597对公账号:4035　0001　0400　02499 户名:厦门才盛网络科技有限公司,开户行:农行厦门宏业支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4800 7023 3229 510 户名:吴月贞,中国农行银行厦门台湾街支行【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4800 7023 3229 510 户名:吴月贞,中国农行银行厦门台湾街支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0019 3513 0116 485 户名:吴月贞,中国建设银行厦门长青路支行【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0019 3513 0116 485 户名:吴月贞,中国建设银行厦门长青路支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0241 0000 5803 402 户名:吴月贞,中国工商银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0241 0000 5803 402 户名:吴月贞,中国工商银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity4" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号13135101040022125户名:福州伍玖柒网络科技有限公司,开户银行:农行福州晋安支行营业厅【597人才网】';" style="cursor:hand"><u>597对公账号:13135101040022125户名:福州伍玖柒网络科技有限公司,农行福州晋安支行营业厅【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4800 6262 8487 415 户名:吴月贞，中国农业银行福州市旗汛口分理处【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4800 6262 8487 415 户名:吴月贞，中国农业银行福州市旗汛口分理处【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 2349 0092 852 户名:吴月贞，中国建设银行福州市旗汛口分理处【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 2349 0092 852 户名:吴月贞，中国建设银行福州市旗汛口分理处【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0214 0201 2112 519 户名:吴月贞，中国工商银行福州晋安支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0214 0201 2112 519 户名:吴月贞，中国工商银行福州晋安支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity5" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:35001647007052503342户名:三明市伍玖柒人才服务有限公司,开户银行:中国建设银行三明梅列支行【597人才网】';" style="cursor:hand"><u>597对公账号:35001647007052503342户名:三明市伍玖柒人才服务有限公司,开户银行:中国建设银行三明梅列支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4820 3267 5372 719 户名:吴月贞,中国农业银行三明梅列支行【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4820 3267 5372 719 户名:吴月贞,中国农业银行三明梅列支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 7269 0050 475 户名:吴月贞，中国建设银行三明市列西分理处【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 7269 0050 475 户名:吴月贞，中国建设银行三明市列西分理处【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0214 0400 1845 851 户名:吴月贞,中国工商银行三明光明支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0214 0400 1845 851 户名:吴月贞,中国工商银行三明光明支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity6" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:35001692490052513149户名:龙岩市新罗区才聘人力资源有限公司,开户行:建行龙岩分行【597人才网】';" style="cursor:hand"><u>597对公账号:35001692490052513149户名:龙岩市新罗区才聘人力资源有限公司,开户银行:建行龙岩分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4815 5263 5643 611 户名:吴月贞,中国农业银行新罗支行龙川分理处【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4815 5263 5643 611 户名:吴月贞，中国农业银行新罗支行龙川分理处【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 8285 0400 170 户名:吴月贞,中国建设银行龙岩新罗支行【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 8285 0400 170 户名:吴月贞,中国建设银行龙岩新罗支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0814 1000 0091 816 户名:吴月贞,中国工商银行龙岩莲花支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0814 1000 0091 816 户名:吴月贞,中国工商银行龙岩莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity7" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:35001662433052511574户名:漳州市伍玖柒人力资源服务有限公司,开户行:建行漳州分行【597人才网】';" style="cursor:hand"><u>597对公账号:35001662433052511574户名:漳州市伍玖柒人力资源服务有限公司,开户银行:建行漳州分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4807 0272 1757 616 户名:吴月贞,中国农业银行漳州芗城营业部【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4807 0272 1757 616 户名:吴月贞,中国农业银行漳州芗城营业部【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 5251 0732 338 户名:吴月贞,中国建设银行漳州分行营业部【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 5251 0732 338 户名:吴月贞,中国建设银行漳州分行营业部【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0214 0900 3763 564 户名:吴月贞,中国工商银行漳州胜利分理处【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0214 0900 3763 564 户名:吴月贞,中国工商银行漳州胜利分理处【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞,中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity8" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='您好!597对公账号:40350001040002499  户名:厦门才盛网络科技有限公司,开户行:农行厦门宏业支行【597人才网】';" style="cursor:hand"><u>597对公账号:4035 0001 0400 02499  户名:厦门才盛网络科技有限公司,开户银行:农行厦门宏业支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4815 4277 6065 518 户名:吴月贞,中国农业银行宁德分行【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4815 4277 6065 518 户名:吴月贞，中国农业银行宁德分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 9259 0245 181 户名:吴月贞,中国建设银行宁德市宁川路储蓄所【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 9259 0245 181 户名:吴月贞,中国建设银行宁德市宁川路储蓄所【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0214 0700 1927 967 户名:吴月贞,中国工商银行宁德分行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0214 0700 1927 967 户名:吴月贞,中国工商银行宁德分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞,中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity9" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:35001632433052522513  户名:莆田伍玖柒网络科技有限公司,开户银行:建行莆田分行【597人才网】';" style="cursor:hand"><u>597对公账号:3500 1632 4330 5252 2513  户名:莆田伍玖柒网络科技有限公司,开户银行:建行莆田分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4806 9265 3794 515 户名:吴月贞,中国农业银行莆田镇海分理处【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4806 9265 3794 515 户名:吴月贞,中国农业银行莆田镇海分理处【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0018 4251 0442 905 户名:吴月贞,中国建设银行莆田分行【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0018 4251 0442 905 户名:吴月贞,中国建设银行莆田分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0214 0500 2320 141 户名:吴月贞,中国工商银行莆田城厢支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0214 0500 2320 141 户名:吴月贞,中国工商银行莆田城厢支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞,中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity10" style="display: none;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='597对公账号:4035　0001　0400　02499  户名:厦门才盛网络科技有限公司,开户行:农行厦门宏业支行【597人才网】';" style="cursor:hand"><u>597人才网,对公账号:40350001040002499  户名:厦门才盛网络科技有限公司,农行厦门宏业支行</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4800 1085 0605 113 户名:吴月贞,中国农业银行北京富力城支行【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4800 1085 0605 113 户名:吴月贞,中国农业银行北京富力城支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0000 1021 0254 852 户名:吴月贞,中国建设银行北京光明支行【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0000 1021 0254 852 户名:吴月贞,中国建设银行北京光明支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0202 0010 6515 014 户名:吴月贞,中国工商银行北京安贞支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0202 0010 6515 014 户名:吴月贞,中国工商银行北京安贞支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597招行帐号：6225 8801 3936 8709 户名:吴月贞,招商银行北京富力城支行【597人才网】';" style="cursor:hand"><u>597招行帐号：6225 8801 3936 8709 户名:吴月贞,招商银行北京富力城支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞,中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr id="divCity11" style="display: block;">
			<td bgcolor="#FFFFFF"><a onclick="sendform.messageContent.value='您好!597人才网http://www.yw597.com,您的用户名是:*** 密码是:*** 客服热线:';" style="cursor:hand"><u>597人才网http://www.yw597.com,您的用户名是:*** 密码是:*** 客服热线:</u></a><br>
			<a onclick="sendform.messageContent.value='597对公账号:3300 1676 7350 5302 6585户名:金华才盛网络科技有限公司,开户行:建行金华分行【597人才网】';" style="cursor:hand"><u>597对公账号:3300 1676 7350 5302 6585户名:金华才盛网络科技有限公司,开户银行:建行金华分行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农行帐号：6228 4803 8231 1654 018 户名:王江林，中国农业银行金华商城支行【597人才网】';" style="cursor:hand"><u>597农行帐号：6228 4803 8231 1654 018 户名:王江林，中国农业银行金华商城支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597建行帐号：6227 0014 6038 0125 854 户名:王江林，中国建设银行金华丹溪支行【597人才网】';" style="cursor:hand"><u>597建行帐号：6227 0014 6038 0125 854 户名:王江林，中国建设银行金华丹溪支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597工行帐号：6222 0212 0801 4674 897 户名:王江林，中国工商银行金华商城支行【597人才网】';" style="cursor:hand"><u>597工行帐号：6222 0212 0801 4674 897 户名:王江林，中国工商银行金华商城支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞,中国邮政储蓄银行厦门莲秀支行【597人才网】';" style="cursor:hand"><u>597邮政帐号：6221 8839 3000 4644 080 户名:吴月贞，中国邮政储蓄银行厦门莲秀支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】';" style="cursor:hand"><u>597兴业银行帐号：6229 0912 3895 725219 户名:吴月贞，兴业银行厦门莲花支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】';" style="cursor:hand"><u>597交通银行帐号：6222 6007 9000 2384240 户名:吴月贞,交通银行厦门吕岭支行【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597农村信用社：6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】';" style="cursor:hand"><u>597农村信用社:6221 2702 0200 0728072 户名:吴月贞，厦门市农村信用合作联社湖里信用社【597人才网】</u></a><br>
			<a onclick="sendform.messageContent.value='您好!597人才网,支付宝帐户:www@597.com 户名:吴月贞【597人才网】';" style="cursor:hand"><u>支付宝帐户:www@597.com 户名:吴月贞【597人才网】</u></a><br></td>
		</tr>
		<tr height="25">
			<td bgcolor="#FFFFFF">只允许发送账号密码相关信息，银行账号相关信息给客户，其他信息一律不允许。</td>
		</tr>
	</tbody></table></td>
</tr>
</tbody></table>
													</div>
													<div class="apply_btn_next">
														<div class="apply_btn_bg">
															<a class="apply_1_next" onclick="sub();">发送</a>
														</div>
													</div>
													</form>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--{template setting/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function sub (status) {
	var mobile = $('#mobile').val();
	var phone_pattern = /^[1]\d{10}$/;
	if($('#mobile').val() == ''||typeof($('#mobile').val()) == 'undefined'){
		alert('请输入手机号码！');
		return;
	}
	if(!phone_pattern.exec(mobile)){
		alert('手机号码格式不正确!');
		return;
	}
	if($('#messageContent').val() == ''||typeof($('#messageContent').val()) == 'undefined'){
		alert('请输入发送的内容！');
		return;
	}
	if(document.getElementById('messageContent').value.length>66){
		window.alert("第一条发送内容不能超过66个字！")
		return;
	}
	if($('#messageContent2').val() != ''){
		if(document.getElementById('messageContent2').value.length>66){
			window.alert("第二条发送内容不能超过66个字！")
			return;
		}
	}
	$('#sendform').submit();
	return false;
}
</script>
</body>
</html>