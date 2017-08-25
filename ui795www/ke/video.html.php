<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <script src="http://cdn.{ROOT_DOMAIN}/www/js/ke/jquery.js" type="text/javascript"></script>
    <style type="text/css">
        html, body {margin: 0;padding: 0;}
        .ErrorTips {height: 458px;width: 798px;background: #000;text-align: center;}
        .ErrorTips .T {color: #999;font-size: 26px;padding-top: 130px;}
        .ErrorTips .Title {color: #999;font-size: 14px;margin-top: 16px;}
        .ErrorTips .Price {color: #d70b17;font-size: 18px;margin-top: 16px;}
        .ErrorTips .Buy {color: #fff;background: #d70b17;height: 40px;line-height: 40px;width: 140px;text-align: center;cursor: pointer;margin: 16px auto;border-radius: 5px;}
    </style>
</head>
<body>

    <div style="width: 798px; height: 458px;">
        <!--{if $isBuy}-->
            <!--播放-->
            <script src="https://p.bokecc.com/player?vid={$videoRow['video']['videoResId']}&siteid=1546A7B7FB895F49&autoStart=false&width=100%&height=100%&playerid=A77D736CEC891582&playertype=1" type="text/javascript"></script>
        <!--{else}-->
            <!--购买-->
            <div id="panError">
                <div class="ErrorTips">
                    <div class="T">请付费后学习完整内容</div>
                    <div class="Title">
                        《{$keRow['title']}》
                    </div>
                    <div class="Price">￥{$keRow['price']}</div>
                    <div class="Buy" onclick="ClickBuy()">立即购买</div>
                </div>
            </div>
        <!--{/if}-->
    </div>
    <script>
        //购买视频
        function ClickBuy() {
            var keids = "{$keRow['courseId']}";
            var param = {keIds:keids};
            $.post("/ke/pay.html?act=order", param, function (data) {
                var data = JSON.parse(data);
                if(data.status==1){
                    window.parent.location.href='/ke/pay.html?orderNo='+data.orderNo;
                    return;
                }
                if(data.status==0){
                    alert(data.msg);
                    window.parent.location.href='/person/login.html?_url=/ke/detail.html?Id='+"{$_GET['courseId']}";
                    return;
                }
                alert(data.msg);
            });
        }
    </script>
</body>
</html>
