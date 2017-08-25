<footer>
	<p>©copyright:{$curYear} 597人才网 版权所有</p>
	<div class="footerNav">

		<a target="_blank" href="/about/about.html">关于我们</a>
		|
		<a target="_blank" href="/about/statement.html">网站声明</a>
		|

		<a target="_blank" href="/about/service.html">招聘服务</a>
		<!-- |
		<a target="_blank" href="#">帮助中心</a>
		|
		<a target="_blank" href="#">诚聘英才</a> -->
		|
		<a target="_blank" href="/about/friend.html">友情链接</a>
		|
		<a target="_blank" href="/about/adprice.html">广告发布</a>
		|
		<a target="_blank" href="/about/contact.html">联系我们</a>
		|
		<a target="_blank" href="/about/price.html">收费标准</a>
	</div>
	<!-- <div class="copyright">
		<p>&copy;2015&nbsp;597人才网&nbsp;版权所有</p>
	</div> -->
	<div class="copyright">
		 网站备案/许可证号：闽ICP备09001341号-14<span style="margin:0 5px;">  | </span>增值电信业务经营许可证：闽B2-20120056<span style="margin:0 5px;">  | </span>人力资源服务许可证：350200RL1010 <br>
		招聘单位无权收取任何费用,请求职人员加强自我保护意识,按劳动法规保护自身权益,警惕虚假招聘,避免上当受骗!
	</div>
	<div class="copyright">
		{$domainInfo['footer']}
	</div>
</footer>
<style>
img{ border:0;}

.rides-cs {  font-size: 12px; background:#29a7e2; position: fixed; top: 200px; right: 0px; _position: absolute; z-index: 1500; border-radius:6px 0px 0 6px;}
.rides-cs a { color: #00A0E9;}
.rides-cs a:hover { color: #ff8100; text-decoration: none;}
.rides-cs .floatL { width: 36px; float:left; position: relative; z-index:1;margin-top: 21px;height: 181px;}
.rides-cs .floatL a { font-size:0; text-indent: -999em; display: block;}
.rides-cs .floatR { width: 130px; float: left; padding: 5px; overflow:hidden;}
.rides-cs .floatR .cn {background:#F7F7F7; border-radius:6px;margin-top:4px;}
.rides-cs .cn .titZx{ font-size: 14px; color: #333;font-weight:600; line-height:24px;padding:5px;text-align:center;}
.rides-cs .cn ul {padding:0px;}
.rides-cs .cn ul li { line-height: 38px; height:38px;border-bottom: solid 1px #E6E4E4;overflow: hidden;text-align:center;}
.rides-cs .cn ul li span { color: #777;}
.rides-cs .cn ul li a{color: #777;}
.rides-cs .cn ul li img { vertical-align: middle;}
.rides-cs .btnOpen, .rides-cs .btnCtn {  position: relative; z-index:9; top:25px; left: 0;  background-image: url(http://demo.lanrenzhijia.com/2014/service1031/images/lanrenzhijia.png); background-repeat: no-repeat; display:block;  height: 146px; padding: 8px;}
.rides-cs .btnOpen { background-position: 0 0;}
.rides-cs .btnCtn { background-position: -37px 0;}
.rides-cs ul li.top { border-bottom: solid #ACE5F9 1px;}
.rides-cs ul li.bot { border-bottom: none;}
</style>
<div id="floatTools" class="rides-cs" style="height:246px;">
  <div class="floatL">
  	<a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a>
  	<a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;">
    <div class="cn">
      <h3 class="titZx">597培训中心客服</h3>
      <ul>
        <li><span>客服1</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751845&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2355751845:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>客服2</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355565411&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2355565411:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>客服3</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2355751800&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2355751800:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li>
            <a href="http://xm.597.com/peixun/" target="_blank">597培训中心</a>
            <div class="div_clear"></div>
        </li>
        <li style="border:none;"><span>电话：0592-5904660</span> </li>
      </ul>
    </div>
  </div>
</div>
<script>
	//在线客服
	$(function(){
		$("#aFloatTools_Show").click(function(){
			$('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
			$('#aFloatTools_Show').hide();
			$('#aFloatTools_Hide').show();
		});
		$("#aFloatTools_Hide").click(function(){
			$('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
			$('#aFloatTools_Show').show();
			$('#aFloatTools_Hide').hide();
		});
	});
</script>