<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->

<body screen_capture_injected="true"> 
<div id="content">
	<!--{template nav}-->

<div id="contentBody" style="visibility: visible;">
<!--  小贴士 start  -->
	<div id="tips" class="hide" style="width: 256px;display:none">
	<div class="tips" style="">
		<div class="tips-title" style="">
			小贴士
			<div class="btn_close">
			</div>
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
			<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
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
	<div class="draggle"></div>
	</div>
<!--  小贴士 end  -->
<div class="content" style="">
	<div id="main" class="security-groups" style="">
		<div class="title">
			<div class="m_bg">首页</div>
		</div>
		<div class="quickbar">
			<div class="note">小贴士</div>
			<div class="btns">
				<div class="btn-line clearfix">
					<span class="gray" style="height:200px;">*您好！欢迎使用597人才网，我是平台助手小五！{$sessionid}</br></span>
				</div>
			</div>
		</div>
		<div class="mainContent" style="">
			<p style="margin:30px;">本系统将为您的企业提供一个功能完善的网络招聘平台，通过在后台发布公司信息及职位信息，求职者即可前台进行简历投递，您可以优先选择适合您企业的人才，记得每天登陆哦！
			<p style="margin:30px;">您还可以操作<a href="#">：新建xxx个职位</a> &nbsp;&nbsp;&nbsp; <a href="#">下载XXX份简历</a> &nbsp;&nbsp;&nbsp; <a href="#">发送XXX短信</a></p>
			</p>
		</div>
</div>
    
    <div class="draggle "></div>
    <!--  detail start  -->
	<div id="detail" style="height: 286px;" class="">
        <div class="title">
            <div class="m_bg">详细信息</div>
            <div class="m_unselect"></div>
            <div class="btn_hide"></div>
        </div>
        <div class="detailNav clearfix">
            <ul class="navs">
                <li class="items current" id="detail_info">
                    <div class="m_bg">详细信息</div>
                </li>
                <li class="items" id="events_info">
                    <div class="m_bg">最近日志</div>
                </li>
            </ul>
        </div>
        <div class="detailContent" style="height: 228px;">
            <div class="detail_content">
                <div class="info" id="info">
                <div class="sercurity_none_selected">
                    <div class="info_title">
                        <h3>没有选择数据库安全组</h3>
                    </div>
                    <div class="info_content" style="padding:20px;">选择上面的数据库安全组查看详细信息</div>
                </div>
                <div class="hide sercurity_selected">
                    <div class="info_title">
                         <h3>安全组名称：</h3>
                    </div>
                    <div class="info_content">
                        <div class="detail_info">
                            <div class="detail">
                                <div class="cell_tb_list">
                                     <table id="sercurity_info_table">
                                      <colgroup>
                                        <col class="col1">
                                        <col class="col2">
                                        <col class="col3">
                                        <col class="col4">
                                      </colgroup>
                                      <tbody><tr class="tbody_header">
                                        <th class="td1">连接方式</th>
                                        <th>详细信息</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                      </tr>
                                    </tbody></table>
                                </div>
                            </div>
                        </div>
    
                        <div class="events_info hide">
                            <div class="detail">
                                    <!--<div class="events_title">
                                    <div class="left purple"><strong>最近日志</strong></div>
                                    <div class="right"><span class="btn_gray_2" onclick="load_securityGroup_events()">刷新日志</span></div>
                                </div>-->
                                <div class="cell_tb_list">
                                    <table id="securityGroup_event">
                                      <colgroup>
                                        <col class="col1">
                                        <col class="col2">
                                        <col class="col3">
                                      </colgroup>
                                      <tbody><tr>
                                        <th class="td1">操作</th>
                                        <th>操作结果</th>
                                        <th>日期</th>
                                      </tr>      
                                    </tbody></table>
                                </div>
                                <div class="see_more_events"><a href="http://cds.grandcloud.cn/events.html">查看更多日志</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--  detail end  -->
</div>
<!--{template sell/sidebar}-->
</div> 
</div> 
   
</div>
   <ul id="notifications"></ul>
</body>
</html>