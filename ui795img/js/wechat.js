function wechat_callBack()
{
  var tMyTitle,
      jobTitle = $('.cent b').html(),
      tMyShareLogo,
      shareComLogo = $('#shareComLogo').html();
  if(typeof(jobTitle)=='undefined'||jobTitle==''||jobTitle=='undefined'){
    tMyTitle = $('title').html();
  }else{
    tMyTitle = jobTitle+'正在急聘，求推荐，求转发';
  }
  if(shareComLogo==''){
    tMyShareLogo = 'http://cdn.597.com/597logo/180px.png';
  }else{
    tMyShareLogo = shareComLogo;
  }

  var tMyShareURL = location.href;
  var tAppid = wechat_appid;
  var tTimestamp = wechat_timestamp;
  var tNonceStr = wechat_nonceStr;
  var tSignature = wechat_signature;
  var tMyShareDesc = wechat_desc;
  var tconfigArray = [];
  tconfigArray.debug = false;
  tconfigArray.appId = tAppid;
  tconfigArray.timestamp = tTimestamp;
  tconfigArray.nonceStr = tNonceStr;
  tconfigArray.signature = tSignature;
  tconfigArray.jsApiList = ['onMenuShareTimeline', 'onMenuShareAppMessage','onMenuShareQQ','onMenuShareWeibo','onMenuShareQZone'];
  wx.config(tconfigArray);
  wx.ready(function(){
    wx.onMenuShareTimeline({
      title: tMyTitle,
      link: tMyShareURL,
      imgUrl: tMyShareLogo,
      success: function () {},
      cancel: function () {}
    });
    wx.onMenuShareAppMessage({
      title: tMyTitle,
      desc: tMyShareDesc,
      link: tMyShareURL,
      imgUrl: tMyShareLogo,
      success: function () {},
      cancel: function () {}
    });
    wx.onMenuShareQQ({
      title: tMyTitle,
      desc: tMyShareDesc,
      link: tMyShareURL,
      imgUrl: tMyShareLogo,
      success: function () {},
      cancel: function () {}
    });
    wx.onMenuShareQZone({
      title: tMyTitle,
      desc: tMyShareDesc,
      link: tMyShareURL,
      imgUrl: tMyShareLogo,
      success: function () {},
      cancel: function () {}
    });
  });
};
var tWeChatScript = document.createElement('script');
tWeChatScript.src = '/file/wechatConfig.html?url=' + encodeURIComponent(location.href);
document.body.appendChild(tWeChatScript);