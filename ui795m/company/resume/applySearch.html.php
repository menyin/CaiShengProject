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
    <title>筛选收到的简历-{$domainInfo['region_name_short']}597人才网触屏版</title>
    <meta name="keywords" content="{$domainInfo['region_name_short']}人才网,{$domainInfo['region_name_short']}人才网最新招聘信息,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}招聘网,{$domainInfo['region_name_short']}招聘,{$domainInfo['region_name_short']}求职,{$domainInfo['region_name_short']}招聘会,{$domainInfo['region_name_short']}找工作,{$domainInfo['region_name_short']}人才市场,{$domainInfo['region_name_short']}人事人才网,{$domainInfo['region_name_short']}人事资源网,597{$domainInfo['region_name_short']}人才网" />
    <meta name="description" content="{$domainInfo['region_name_short']}597人才网,{$domainInfo['region_name_short']}招聘,求职的最佳选择,网上的{$domainInfo['region_name_short']}人才市场。597{$domainInfo['region_name_short']}人才网是{$domainInfo['region_name_short']}地区的专业招聘网站,{$domainInfo['region_name_short']}找人才,{$domainInfo['region_name_short']}找工作,查询{$domainInfo['region_name_short']}人才网最新招聘信息,首选597{$domainInfo['region_name_short']}人才网！" />
    <meta name="revisit-after"  content="1 days" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_base1.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_font_style.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.597.com/m/css/m_tScreen.css">
    <script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" language="javascript" src="http://cdn.597.com/m/js/m.js"></script>
</head>
<script>
$(document).ready(function(){
    $('.mFilterSure li a').on('click',function(){
        $(this).addClass('cur');
        $(this).siblings('.cur').removeClass('cur');
    });
})
</script>
</head>
<body>
<div class="loginPop">
    <div class="loginTopBg loginTopBg2">
            <a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>
        <a href="javascript:;" id="submitSearch" class="mFilterTop">确定</a>
        筛选
    </div>
</div>
<div>
    <ul class="mFilterSure">
    
        <li style="height:40px;"><h2>按投递时间</h2></li>
        <li id="liTime">
                <a href="javascript:;" apply-time="" class="cur">不限<i></i></a>
                            <a href="javascript:;" apply-time="+0">今天<i></i></a>
                            <a href="javascript:;" apply-time="1">昨天<i></i></a>
                            <a href="javascript:;" apply-time="7">近7天<i></i></a>
                            <a href="javascript:;" apply-time="30">近30天<i></i></a>
                            <a href="javascript:;" apply-time="90">近90天<i></i></a>
                        
        </li>
        <li style="height:40px;"><h2>按状态查看</h2></li>
        <li id="liStatus">
                <a href="javascript:;" status="" class="cur">不限<i></i></a>
                            <a href="javascript:;" status="2">未读<i></i></a>
                            <a href="javascript:;" status="4">已读<i></i></a>
                            <a href="javascript:;" status="1">已邀请<i></i></a>
                            <a href="javascript:;" status="3">已拒绝<i></i></a>
                            <a href="javascript:;" status="5">对方已放弃<i></i></a>
                            <a href="javascript:;" status="6">对方删除简历<i></i></a>
                    </li>
        <li style="height:40px;"><h2>按投递职位</h2></li>
        <li id="liJob">
            <a href="javascript:;" job-id="" class="cur">不限<i></i></a>
                    </li>
    </ul>
</div>
    <script>
        $("#submitSearch").click(function(){
            var job_id = '';
            var status = '';
            var apply_time = '';
            $("#liJob a").each(function(){
                var cla = $(this).attr('class');
                if(cla == 'cur'){
                    job_id = $(this).attr('job-id');
                }      
            });
             $("#liTime a").each(function(){
                var cla = $(this).attr('class');
                if(cla == 'cur'){
                    apply_time = $(this).attr('apply-time');
                }      
            });
             $("#liStatus a").each(function(){
                var cla = $(this).attr('class');
                if(cla == 'cur'){
                    status = $(this).attr('status');
                }      
            });
            window.location.href = '/companyresumemanage/apply/?job_id='+job_id+'&status='+status+"&apply_time="+apply_time;
        });
        
    </script>
<!--{template company/footer}-->
</body></html>