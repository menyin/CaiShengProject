<!DOCTYPE html>
<html>
<head>
	<title>{$com[cname]}-597人才网</title>
	<meta name="Description" content="{$com[cname]}" />
	<meta name="viewport" content="width=640,maximum-scale=1.0,user-scalable=no,target-densitydpi=device-dpi,minimal-ui" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<script>
	var _LoadingHtml = '<div id="loading"></div>';
	document.write(_LoadingHtml);
	document.onreadystatechange = completeLoading;
	function completeLoading() {
		if (document.readyState == "complete") {
			var loadingMask = document.getElementById('loading');
			loadingMask.parentNode.removeChild(loadingMask);
		}
	}
	</script>

	<script src="http://pic.597.com/rt/1/js/zepto.js"></script>
	<link href="http://pic.597.com/rt/1/css/site.css" rel="stylesheet" />
	<style type="text/css">
		@media screen and (orientation:landscape) {
		body{ display:none;}
		}
		body { width: 640px; color: #fff; background-color: #fff; }
		#loading{ width:100%; height:100%; background:#fff url("http://pic.597.com/rt/1/images/loading.gif") no-repeat center center; position:fixed; left:0px; top:0px; z-index:11111111111;}
		* { padding: 0px; margin: 0px; }
		.fktIntroduction { overflow: hidden; height: 100%; position: fixed; width: 100%; max-width: 640px; margin: 0 auto; }
		.fktIntroduction .swiper-wrapper { height: 100%; position: relative; }
		.swiper-slide { height: 100%; position: relative; }
		.swiper-slide.bg1 { background-color: #46a6ff; }
		.swiper-slide.bg2 { background-color: #ff7c55; }
		.swiper-slide.bg3 { background-color: #fdc544; }
		.swiper-slide.bg4 { background-color: #75ce64; }
		.swiper-slide.bg5 { background-color: #9480fd; }
		.swiper-slide.bg6 { background: url("http://pic.597.com/rt/1/images/artifact-bg.png") no-repeat; }
		.swiper-slide i { display: inline-block; vertical-align: middle; background-repeat: no-repeat; }
		.font72 { font-size: 72px; }
		.font60 { font-size: 60px; }
		.font48 { font-size: 48px; }
		.font42 { font-size: 42px; }
		.font36 { font-size: 36px; }
		.font30 { font-size: 30px; }
		.font24 { font-size: 24px; }
		.pt305 { padding-top: 47%; }
		.pt225 { /*padding-top: 35%;  */ padding-top: 25%; }
		.pt210 { padding-top: 210px; }
		@-webkit-keyframes arrow {
			0% { -webkit-transform: translate3d(0,0,0); }
			35% { -webkit-transform: translate3d(0,-10px,0); }
			70% { -webkit-transform: translate3d(0,-15px,0); }
			100% { }
		}

		/*bg1*/
		.ui-host { position: absolute; bottom: 64px; width: 100%; text-align: center; }
		.ui-title { width: 590px; font-weight: bold !important; position: relative; z-index: 3; margin: 0 25px; text-align: center; margin-bottom: 15px; overflow: hidden; }
		.ui-abstract { position: relative; z-index: 3; margin: 0 20px; text-align: center; line-height: 45px; overflow: hidden; }
		.ui-btn-group { width: 292px; height: 45px; margin: 40px auto 0; position: relative; z-index: 3; }
		.icon-welfare { width: 142px; height: 42px; background-image: url("http://pic.597.com/rt/1/images/welfare.png"); margin-right: 25px; }
		.icon-praise { width: 95px; height: 45px; background-image: url("http://pic.597.com/rt/1/images/praise.png"); }
		.bg1 .bg1Arrow { width: 30px; height: 17px; background-image: url("http://pic.597.com/rt/1/images/icon-ctrl1.png"); position: absolute; bottom: 42px; left: 50%; margin-left: -8px; z-index: 2; }

		/*bg2*/
		.ui-row { width: 552px; height: 128px; overflow: hidden; /*margin: 62px auto 0;*/ margin: 48px auto 0; text-align: center; vertical-align: middle; position: relative; z-index: 3; max-width: 600px; }
		.ui-row dl { float: left; width: 184px;  text-align: center; }
		.ui-row dl dt { height: 61px; }
		.ui-row dl dd { height: 40px; margin-top: 15px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
		.txt-address { width: 540px; margin: 0 auto; text-align: center; position: relative; z-index: 3; }
		.invitation-content { width: 540px; line-height: 48px; overflow: hidden; margin: 14px 50px; position: relative; z-index: 3; }
		.invitation-content .title { float: left; width: 120px; }
		.invitation-content .content { float: left; width: 420px; overflow: hidden; }
		.invitation-content .content a { color: #ffffff; display: block;height: 150px;overflow: hidden;}
		.bg2 .bg2Arrow { width: 30px; height: 17px; background-image: url("http://pic.597.com/rt/1/images/icon-ctrl2.png"); position: absolute; bottom: 42px; left: 50%; margin-left: -8px; z-index: 2; }

		/*bg3*/
		.bg3 .text { width: 75px; position: relative; z-index: 3; -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); }
		.bg3 .leftT { position: absolute; left: 113px; top: -200px; }
		.bg3 .rightT { position: absolute; /*right: 127px; top: 305px;*/ right: 113px; bottom: -200px; }
		.square.a { width: 420px; height: 420px; text-align: center; position: absolute; left: 50%; top: 50%; margin-left: -210px; margin-top: -210px; z-index: 3; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); }
		.square.b { width: 420px; height: 420px; text-align: center; position: absolute; left: 50%; top: 50%; margin-left: -210px; margin-top: -210px; z-index: 3; -webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); }
		.square div { float: left; width: 140px; height: 140px; background-color: #fff; color: #ffb814; position: relative; }
		.square div:nth-child(2n) { background-color: #febc23; }
		.square div p { width: 100px; height: 94px; text-align: center; vertical-align: middle; -webkit-transform: rotate(-45deg); -moz-transform: rotate(-45deg); margin: 27px auto 0 -50px; left: 50%; width: 100px; position: absolute; }
		.square div .text2 { margin: 40px auto 0 -40px; }
		.square div .text6 { font-size: 32px; line-height: 40px; margin: 30px auto 0 -50px; }
		.square div p:nth-child(2n) { opacity: 0; -webkit-transform: rotate(45deg); }
		.bg3 .bg3Arrow { width: 30px; height: 17px; background-image: url("http://pic.597.com/rt/1/images/icon-ctrl3.png"); position: absolute; bottom: 42px; left: 50%; margin-left: -8px; z-index: 2; }

		/*bg4*/
		.bg4 .ui-title { font-weight: normal !important; padding-top: 15%; height: auto; }
		.jobbox { width: 514px; height: 635px; overflow: hidden; margin: 0 auto; padding: 5px 0; background-color: #e4d80a; border-radius: 6px; position: relative; z-index: 3; }
		.jobboxWrap { width: 500px; margin: 2px auto; height: 630px; overflow: hidden; }
		.bgwhite { width: 500px; height: 630px; margin: 0 auto; color: #000; background-color: #fff; float: left; }
		.bgwhite a { color: #000000; }
		.bgwhite a div {white-space: nowrap; overflow: hidden; text-overflow:ellipsis;}
		.jobbox .name { width: 90%; margin: 0 auto; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; text-align: center; line-height: 130px; border-bottom: 1px solid #ebf3fe; }
		.jobbox i { width: 50px; height: 50px; margin: 0 20px 0 30px; }
		.jobbox .addr { line-height: 70px; border-bottom: 1px solid #ebf3fe; }
		.jobbox .addr i { background-image: url("http://pic.597.com/rt/1/images/addr.png"); }
		.jobbox .edu { line-height: 70px; border-bottom: 1px solid #ebf3fe; }
		.jobbox .edu i { background-image: url("http://pic.597.com/rt/1/images/edu.png"); }
		.jobbox .year { line-height: 70px; border-bottom: 1px solid #ebf3fe; }
		.jobbox .year i { background-image: url("http://pic.597.com/rt/1/images/year.png"); }
		.jobbox .sala { color: #ff126b; line-height: 70px; border-bottom: 1px solid #ebf3fe; }
		.jobbox .sala i { background-image: url("http://pic.597.com/rt/1/images/sala.png"); }
		.icon-hot { width: 253px; height: 209px; position: absolute; bottom: 10px; right: 10px; background-image: url("http://pic.597.com/rt/1/images/hot.png"); z-index: 2; }
		.icon-pre { width: 20px; height: 36px; position: absolute; bottom: 50%; background-image: url("http://pic.597.com/rt/1/images/left.png"); background-position: 20px 22px; padding: 22px; }
		.icon-next { width: 20px; height: 36px; position: absolute; right: 0px; bottom: 50%; background-image: url("http://pic.597.com/rt/1/images/right.png"); background-position: 20px 22px; padding: 22px; }
		.more-btn { position: relative; z-index: 3; width: 518px; height: 70px; margin: 47px auto 0; }
		.bg4 .bg4Arrow { width: 30px; height: 17px; background-image: url("http://pic.597.com/rt/1/images/icon-ctrl4.png"); position: absolute; bottom: 42px; left: 50%; margin-left: -8px; z-index: 2; }

		/*bg5*/
		.statistic { text-align: center; position: relative; z-index: 3; }
		.p-number { display: inline-block; color: #fffb2b; }
		.rate-btn { width: 540px; height: 80px; margin: 50px auto; text-align: center; line-height: 72px; border: 2px solid #fff; border-radius: 8px; position: relative; z-index: 3; }
		.rate-btn .font-hand { padding-left: 50px; height: 80px; line-height: 70px; background: url("http://pic.597.com/rt/1/images/hand.png") no-repeat left center; font-style: inherit; }
		.rate-btn span { padding-top: 20px; }
		.txt-group { position: relative; z-index: 3; text-align: center; color: #fff; }
		.txt-group a { color: #fff; }
		.bg5 .bg5Arrow { width: 30px; height: 17px; background-image: url("http://pic.597.com/rt/1/images/icon-ctrl5.png"); position: absolute; bottom: 42px; left: 50%; margin-left: -8px; z-index: 2; }

		/*bg6*/
		.bg6 .round-logo { width: 580px; height: 580px; border: 60px solid #218cd5; border-radius: 50%; margin: -416px 0 0 -350px; position: absolute; left: 50%; top: 50%; z-index: 3; }
		.bg6 .btn-join { width: 540px; height: 90px; position: absolute; bottom: -238px; left: 50%; margin-left: -270px; z-index: 3; }
		.bg1 .topleft { width: 280px; height: 280px; background-image: url("http://pic.597.com/rt/1/images/01-1.png"); background-repeat: no-repeat; position: absolute; top: 0px; left: 0px; -webkit-transform: translate(280px,-280px); z-index: 2; }
		.bg1 .bottomright { width: 552px; height: 552px; background-image: url("http://pic.597.com/rt/1/images/01-2.png"); background-repeat: no-repeat; position: absolute; bottom: 0; right: 0; z-index: 1; -webkit-transform: translate(-552px,552px); }
		.bg1 .triangle-t { width: 193px; height: 49px; background-image: url("http://pic.597.com/rt/1/images/01-3.png"); position: absolute; top: 136px; left: 272px; z-index: 5; }
		.bg1 .triangle-m { width: 162px; height: 166px; background-image: url("http://pic.597.com/rt/1/images/01-4.png"); position: absolute; bottom: 285px; left: 66px; }
		.bg1 .triangle-b { width: 108px; height: 165px; background-image: url("http://pic.597.com/rt/1/images/01-5.png"); position: absolute; bottom: 40px; right: 66px; }
		.bg2 .topright { width: 200px; height: 200px; background-image: url("http://pic.597.com/rt/1/images/02-1.png"); position: absolute; top: 0px; right: 0; z-index: 2; }
		.bg2 .bottomleft { width: 478px; height: 478px; background-image: url("http://pic.597.com/rt/1/images/02-2.png"); position: absolute; bottom: 0px; left: 0px; z-index: 1; }
		.bg2 .triangle-t { width: 174px; height: 125px; background-image: url("http://pic.597.com/rt/1/images/02-3.png"); position: absolute; top: 85px; left: 57px; }
		.bg2 .triangle-m { width: 117px; height: 422px; background-image: url("http://pic.597.com/rt/1/images/02-4.png"); position: absolute; bottom: 126px; right: 0px; }
		.bg2 .triangle-b { width: 144px; height: 137px; background-image: url("http://pic.597.com/rt/1/images/02-5.png"); position: absolute; bottom: 90px; left: 46px; z-index: 2; }
		.bg3 .topleft { width: 458px; height: 457px; background-image: url("http://pic.597.com/rt/1/images/03-1.png"); background-repeat: no-repeat; position: absolute; top: 0; left: 0; }
		.bg3 .bottomright { width: 414px; height: 414px; background-image: url("http://pic.597.com/rt/1/images/03-2.png"); background-repeat: no-repeat; position: absolute; bottom: 0; right: 0; z-index: 1; }
		.bg3 .triangle-t { width: 108px; height: 145px; background-image: url("http://pic.597.com/rt/1/images/03-3.png"); position: absolute; top: 72px; right: 52px; }
		.bg3 .triangle-b { width: 94px; height: 151px; background-image: url("http://pic.597.com/rt/1/images/03-4.png"); position: absolute; bottom: 56px; left: 65px; }
		.bg4 .topT { width: 640px; height: 215px; background-image: url("http://pic.597.com/rt/1/images/04-8.png"); background-repeat: no-repeat; position: absolute; top: 0; left: 0; }
		.bg4 .bottomB { width: 640px; height: 238px; background-image: url("http://pic.597.com/rt/1/images/04-7.png"); background-repeat: no-repeat; position: absolute; bottom: 0; right: 0; z-index: 1; }
		.bg5 .topleft { width: 381px; height: 273px; background-image: url("http://pic.597.com/rt/1/images/05-3.png"); background-repeat: no-repeat; position: absolute; top: 0; left: 0; z-index: 1; }
		.bg5 .bottomright { width: 407px; height: 408px; background-image: url("http://pic.597.com/rt/1/images/05-4.png"); background-repeat: no-repeat; position: absolute; bottom: 0; right: 0; }
		.bg5 .triangle-t { width: 182px; height: 156px; background-image: url("http://pic.597.com/rt/1/images/05-2.png"); position: absolute; top: 72px; right: 52px; }
		.bg5 .triangle-b { width: 169px; height: 215px; background-image: url("http://pic.597.com/rt/1/images/05-1.png"); position: absolute; bottom: 96px; left: 66px; }
		.bg6 .topleft { width: 178px; height: 356px; background-image: url("http://pic.597.com/rt/1/images/artifact-6-left.png"); background-repeat: no-repeat; position: absolute; top: -213px; left: -28px; z-index: 2; }
		.bg6 .bottomright { width: 290px; height: 496px; background-image: url("http://pic.597.com/rt/1/images/artifact-6-right.png"); background-repeat: no-repeat; position: absolute; bottom: -350px; right: -31px; z-index: 1; }

		/*第一屏*/
		.swiper-slide.h.bg1 .topleft, .swiper-slide.bg1.h .bottomright { -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg1 .ui-title { -webkit-transform: translate(620px); -webkit-animation: leftBoxTop 0.8s 0.6s forwards; }
		.swiper-slide.h.bg1 .ui-abstract { -webkit-transform: translate(620px); -webkit-animation: leftBoxTop 0.8s 0.9s forwards; }
		.swiper-slide.h.bg1 .icon-welfare, .swiper-slide.h.bg1 .icon-praise { -webkit-transform: scale(0); -webkit-animation: scaleMax 0.7s 1.2s forwards; }

		/*第二屏*/
		.swiper-slide.h.bg2 .topright { -webkit-transform: translate(200px,200px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg2 .bottomleft { -webkit-transform: translate(-478px,-478px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg2 .ui-title { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.8s 0.6s forwards; }
		.swiper-slide.h.bg2 .ui-row dl { -webkit-transform: scaleX(-1); opacity: 0; -webkit-animation: scaleX 0.6s 0.9s forwards; }
		.swiper-slide.h.bg2 .invitation-content { -webkit-transform: translate(0,250px); opacity: 0; -webkit-animation: leftBoxTop 0.7s 1.1s forwards; }
		.swiper-slide.h.bg2 .txt-address2 { width: 420px; margin:0 auto; text-align:left; position:relative; z-index:3; padding-left:120px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;  -webkit-transform: translate(0,300px); -webkit-animation: leftBoxTop 0.7s 1.2s forwards; opacity:0;}

		/*第三屏*/
		.swiper-slide.h.bg3 .topleft { -webkit-transform: translate(458px,-457px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg3 .bottomright { -webkit-transform: translate(-414px,414px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg3 .square.b div:nth-child(1) { -webkit-transform: translate(-300px,-300px); -webkit-animation: leftBoxTop 0.5s 0.6s forwards; }
		.swiper-slide.h.bg3 .square.b div:nth-child(3) { -webkit-transform: translate(300px,-300px); -webkit-animation: leftBoxTop 0.5s 0.6s forwards; }
		.swiper-slide.h.bg3 .square.b div:nth-child(5) { -webkit-transform: scale(0); -webkit-animation: scaleMax 0.5s 1s forwards; }
		.swiper-slide.h.bg3 .square.b div:nth-child(7) { -webkit-transform: translate(-300px,300px); -webkit-animation: leftBoxTop 0.5s 0.6s forwards; }
		.swiper-slide.h.bg3 .square.b div:nth-child(9) { -webkit-transform: translate(300px,300px); -webkit-animation: leftBoxTop 0.5s 0.6s forwards; }
		.squareWrap { width: 420px; height: 420px; -webkit-transform: perspective(800px) rotateX(0) rotate(-45deg); -moz-transform: perspective(800px) rotateX(0) rotate(-45deg); }
		.squareWrap.h, .squareWrap.h div, .squareWrap.h div p, .squareWrap.c, .squareWrap.c div, .squareWrap.c div p { -webkit-transition: all 1s; }
		.squareWrap.h { -webkit-transform: perspective(800px) rotateX(180deg) rotate(-45deg); }
		.squareWrap.h div p { opacity: 0; }
		.squareWrap.h div p:nth-child(2n) { opacity: 1; -webkit-transform: scaleX(-1) rotate(45deg); -moz-transform: scaleX(-1) rotate(45deg); }

		/*第四屏*/
		#boxWrap > .swiper-slide { -webkit-transform-style: preserve-3d; }
		.swiper-slide.h.bg4 .jobbox { -webkit-animation: job 1.2s 1s forwards; opacity: 0; }
		.swiper-slide.h.bg4 .topT { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg4 .bottomB { -webkit-transform: translate(0,300px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg4 .ui-title { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.5s 0.7s forwards; }
		.swiper-slide.h.bg4 .more-btn { -webkit-transform: translate(0,300px); -webkit-animation: leftBoxTop 0.5s 0.7s forwards; }
		.swiper-slide.h.bg4 .swiper-wrapper .bgwhite:first-child .icon-hot { width: 253px; height: 209px; position: absolute; background-image: url("http://pic.597.com/rt/1/images/hot.png"); opacity: 0; z-index: 10; -webkit-transform: scale(8) translate(-3px,7px); -webkit-animation: hot 0.35s 1.8s forwards; }

		/*第五屏*/
		.swiper-slide.h.bg5 .topleft { -webkit-transform: translate(381px,-273px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg5 .bottomright { -webkit-transform: translate(-407px,408px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg5 .ui-title { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.35s 0.6s forwards; opacity: 0; }
		.swiper-slide.h.bg5 .statistic { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.35s 0.9s forwards; opacity: 0; }
		.swiper-slide.h.bg5 .rate-btn { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.35s 1.2s forwards; opacity: 0; }
		.swiper-slide.h.bg5 .txt-group { -webkit-transform: translate(0,-300px); -webkit-animation: leftBoxTop 0.35s 1.5s forwards; opacity: 0; }
		.swiper-slide.h.bg5 .p-number { -webkit-animation: lightShake 0.8s ease-out 1.8s; }

		/*第六屏*/
		.swiper-slide.h.bg6 .topleft { -webkit-transform: translate(-178px,-356px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.bg6.h .bottomright { -webkit-transform: translate(290px,496px); -webkit-animation: leftBoxTop 0.8s 0.3s forwards; }
		.swiper-slide.h.bg6 .roundlogo { -webkit-animation: job 1.2s 0.3s forwards; }
		.swiper-slide.h.bg6 .btn-join { -webkit-transform: translate(0,300px); -webkit-animation: leftBoxTop 0.5s 0.3s forwards; }
		.bg1 .bg1Arrow, .bg2 .bg2Arrow, .bg3 .bg3Arrow,.bg4 .bg4Arrow, .bg5 .bg5Arrow { -webkit-animation: arrow 1.5s infinite linear 0.8s; }

		@-webkit-keyframes lightShake {
			0% { -webkit-transform: scale(1.2); }
			10%,20% { -webkit-transform: scale(.9) rotate(-5deg); }
			30%,50%,70%,90% { -webkit-transform: scale(1.2) rotate(5deg); }
			40%,60%,80% { -webkit-transform: scale(1.2) rotate(-3deg); }
			100% { -webkit-transform: scale(1) rotate(0); }
		}

		@-webkit-keyframes hot {
			0% { -webkit-transform: scale(8); opacity: 1; }
			80% { -webkit-transform: scale(1) translate(0,0); opacity: 1; }
			90% { -webkit-transform: scale(1.1); opacity: 1; }
			95% { -webkit-transform: scale(1.2); opacity: 1; }
			100% { -webkit-transform: scale(1); opacity: 1; }
		}


		@-webkit-keyframes job {
			0% { -webkit-transform: perspective(800px) rotate(60deg); opacity: 0; }
			40% { -webkit-transform: perspective(800px) rotate(-10deg); }
			70% { -webkit-transform: perspective(800px) rotate(10deg); }
			100% { -webkit-transform: perspective(800px) rotate(0deg); opacity: 1; }
		}


		@-webkit-keyframes scaleX {
			100% { -webkit-transform: scaleX(1); opacity: 1; }
		}


		@-webkit-keyframes leftBoxTop {
			100% { -webkit-transform: translate(0,0); opacity: 1; }
		}

		@-webkit-keyframes scaleMax {
			10% { -webkit-transform: scale(.1); }
			40% { -webkit-transform: scale(1.2); }
			100% { -webkit-transform: scale(1); }
		}

		/*适配高度*/
		@media screen and (max-device-height: 480px) {
			.pt225 { padding-top: 25%; }
			.bg1 .bottomright { width: 392px; height: 547px; }
			.bg2 .bottomleft { width: 306px; height: 306px; }
			.bg2 .triangle-b { bottom: 0px; left: 16px; }
			.bg3 .topleft { width: 408px; height: 407px; background-position: -50px -50px; }
			.bg3 .bottomright { width: 364px; height: 364px; }
			.jobbox { height: 535px; }
			.jobboxWrap { height: 530px; }
			.jobbox .name { line-height: 100px; }
			.jobbox .addr { line-height: 60px; }
			.more-btn { margin: 20px auto 0; }
			.pt305 { padding-top: 35%; }
			.rate-btn { margin: 30px auto; }
			.bg5 .topleft { width: 341px; height: 233px; background-position: -40px -40px; }
			.bg5 .bottomright { width: 377px; height: 378px; }
			.bg6 .btn-join { bottom: -165px; }
			.bg1 .bg1Arrow, .bg2 .bg2Arrow, .bg3 .bg3Arrow, .bg4 .bg4Arrow, .bg5 .bg5Arrow { width: 30px; height: 17px; background-image: url("http://pic.597.com/rt/1/images/icon-ctrl4.png"); position: absolute; bottom: 42px; left: 50%; margin-left: -8px; z-index: 2; }
			.bg4 .bg4Arrow { bottom: 10px; }
		}
	</style>
</head>
<body>
	
	<div class="fktIntroduction">

		<div class="Arrow"></div>
		<div id="boxWrap" class="swiper-wrapper">

			<div class="swiper-slide bg1">
				<!--顶部线条-->
				<div class="topleft"></div>
				<!--中间-->
				<div class="ui-title font42 pt305">{$com[cname]}</div>
				<div class="ui-abstract font30">{$com[comStr]}</div>
				<div class="ui-btn-group">
					<i class="icon-welfare"></i>
					<i class="icon-praise"></i>
				</div>
				<!--底部线条和logo-->
				<div class="bottomright"></div>
				<i class="bg1Arrow"></i>
				<!--<div class="ui-host">
					<img src="picture/logo.png" />
				</div>-->
				<!--浮动的小三角-->
				<i class="triangle-t"></i>
				<i class="triangle-m"></i>
				<i class="triangle-b"></i>
			</div>

			<div class="swiper-slide bg2">
				<!--顶部线条-->
				<div class="topright"></div>

				<!--中间-->
				<div class="ui-title font42 pt225">{$com[cname]}</div>
				<div class="ui-row">
					<dl>
						<dt><img src="http://pic.597.com/rt/1/picture/xingzhi.png" /></dt>
						<dd class="font30">{$com[comType]}</dd>
					</dl>
					<dl>
						<dt><img src="http://pic.597.com/rt/1/picture/renshu.png" /></dt>
						<dd class="font30">{$com[comWorkers]}</dd>
					</dl>
					<dl class="txt-address">
						<dt><img src="http://pic.597.com/rt/1/picture/dizhi.png" /></dt>
						<dd class="font30">{$com[comCity]}</dd>
					</dl>
				</div>
				<div class="invitation-content font24">
					<div class="title">公司介绍：</div>
					<div class="content">
						<a target="_blank" href="/com-{$com[_cid]}/">{$com[comInfo]}</a>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<!--底部线条和logo-->
				<div class="bottomleft"></div>
				<i class="bg2Arrow"></i>
				<!--<div class="ui-host">
					<img src="picture/logo.png" />
				</div>-->
				<!--三角形-->
				<i class="triangle-t"></i>
				<i class="triangle-m"></i>
				<i class="triangle-b"></i>
			</div>
			
			<!--
			<div class="swiper-slide bg3">
				<div class="topleft"></div>

				<div class="square a">
					<span class="text font60 leftT">福利多多</span>
					<span class="text font60 rightT">福利多多</span>
				</div>

				<div class="square b">
					<section class="squareWrap">
						<div class="font36">
							<p>绩效奖金</p>
							<p>员工旅游</p>
						</div>
						<div class="font36"></div>
						<div class="font36">
							<p>带薪年假</p>
							<p class="text6">补充医疗保险</p>
						</div>
						<div class="font36"></div>
						<div class="font36">
							<p>五险一金</p>
							<p>定期体检</p>
						</div>
						<div class="font36"></div>
						<div class="font36">
							<p>交通补助</p>
							<p>年底双薪</p>
						</div>
						<div class="font36"></div>
						<div class="font36">
							<p>年终分红</p>
							<p>节日福利</p>
						</div>
					</section>
				</div>

				<div class="bottomright"></div>
				<i class="bg3Arrow"></i>

				<i class="triangle-t"></i>
				<i class="triangle-b"></i>
			</div>
			-->

			<div class="swiper-slide bg4">
				<!--顶部线条-->
				<div class="topT"></div>
				<!--中间-->
				<div class="ui-title font48">优质职位 火热招聘</div>
				<div class="jobbox">
					<div class="jobboxWrap">
						<div class="swiper-wrapper">
							   <!--{loop $jobListAll $job}--> 
								<div class="bgwhite swiper-slide">
									<a target="_blank" href="/job-{$job[_jid]}.html">
										<div class="name font42">{$job[jname]}</div>
										<div class="addr font30"><i></i>{$job[jobArea]}</div>
										<div class="edu font30"><i></i>{$job[jobDegree]}</div>
										<div class="year font30"><i></i>{$job[jobWorkYear]}</div>
										<div class="sala font30 "><i></i>{$job[jobSalary]}</div>
										<div class="year font30"><i></i>{$job[_updateTime]}更新</div>
										<em class="icon-hot"></em>
									</a>
								</div>
								<!--{/loop}-->
						</div>
					</div>
				</div>
				<em class="icon-hotWrap"></em>
				<i class="icon-pre"></i>
				<i class="icon-next"></i>
				<div class="more-btn">
					<a target="_blank" href="/com-{$com[_cid]}/"><img src="http://pic.597.com/rt/1/picture/more.png" /></a>
				</div>
				<!--底部线条和logo-->
				<div class="bottomB"></div>
				<i class="bg4Arrow"></i>
			</div>

			<div class="swiper-slide bg5">
				<!--顶部线条-->
				<div class="topleft"></div>
				<!--中间-->
				<div class="ui-title font42 pt305">{$com[cname]}</div>
				<p class="statistic font30">已有<span class="p-number font48">{$com[zan]}</span>人觉得很靠谱</p>
				<div class="rate-btn">
					<i class="font-hand font36">很靠谱</i>

				</div>
				<div class="txt-group font30">
					<a target="_blank" href="/com-{$com[_cid]}/">了解公司详情</a><!-- &nbsp;|&nbsp;
					<a target="_blank" href="http://pic.597.com/rt/1/recruittoolhelp">我也做一个</a>-->
				</div>
				<!--底部线条和logo-->
				<div class="bottomright"></div>
				<i class="bg5Arrow"></i>
				<!--浮动的小三角-->
				<i class="triangle-t"></i>
				<i class="triangle-b"></i>
			</div>

			<div class="swiper-slide bg6">
				<div class="clearfix"></div>
				<!--中间-->
				<div class="round-logo">
					<img src="http://pic.597.com/rt/1/picture/artifact-round-logo.png" class="roundlogo" />
					<!--顶部线条-->
					<div class="topleft"></div>
					<!--底部线条和logo-->
					<div class="bottomright"></div>
					<a class="btn-join" target="_blank" href="/">
						<img src="http://pic.597.com/rt/1/picture/artifact-go.png" />
					</a>
				</div>
			</div>

		</div>
		<div class="pagination"></div>
	</div>

	<script src="http://pic.597.com/rt/1/js/swiper.js"></script>
	<script>

		$(".swiper-slide").first().addClass("h");
		$(document).ready(function () {

			var mofangTime;
			var $squareWrap = $(".squareWrap");
			var mySwiper = new Swiper('.fktIntroduction', {
				mode: 'vertical',
				pagination: '.pagination',
				speed: 350,
				touchRatio: 1.5,
				onTouchEnd: function (a) {
					$("#boxWrap>.swiper-slide").removeClass("h").eq(a.activeIndex).addClass("h");

					if (a.activeIndex == 2) {
						clearInterval(mofangTime);
						if('14'>5&&'14'!=null){
							mofangTime = setInterval(function () {
								if ($squareWrap.hasClass("h")) {
									$squareWrap.removeClass("h");
								} else {
									$squareWrap.addClass("h c");
								}
							}, 5000);
						}
					} else {
						$squareWrap.removeClass("h c");
					}
				},
				onSlideChangeEnd: function (a) {

					if (a.activeIndex == 3) {

						mySwiper2.swipeTo(0);
					}

				}
			})
			var mySwiper2 = new Swiper('.jobboxWrap', {
				mode: 'horizontal',
				pagination: '.pagination',
				speed: 350,
				touchRatio: 1.5,

			})
			$(".icon-next").tap(function () {
				mySwiper2.swipeNext();
			});
			$(".icon-pre").tap(function () {
				mySwiper2.swipePrev();
			});
		});

		//获取点赞次数
		$.getJSON("/api/web/company.api", { act: "get_zan", cid: "{$com[_cid]}" },
			function(data){
				if (data.zan > 0) {
					$(".bg5 .p-number").html(data.zan);
				}
			}
		);

		//点赞

		var zan = localStorage.getItem("zan");
		var comId = '{$com[_cid]}';
		var zanBool = true;
		if (zan == null) {
			zan = [];
		} else {
			zan = zan.split(",");
		}

		function zanFun(zanArr) {
			for (var i = 0; i <= zanArr.length; i++) {
				if (zanArr[i] == comId) {
					$(".bg5 .rate-btn .font-hand").html("已点赞");
					$(".bg5 .rate-btn").addClass("disabled");
					zanBool = false;
					return false;
				}
			}
		}
		zanFun(zan);


			$(".bg5 .rate-btn .font-hand").click(function () {
				if (zanBool) {
					$.getJSON("/api/web/company.api", { act: "set_zan", cid: "{$com[_cid]}" },
						function(data){
							if (data.status > 0) {
								var goodcount = parseInt($(".bg5 .p-number").html()) + 1;
								$(".bg5 .p-number").html(goodcount);
								$(".bg5 .font-hand").html("已点赞");
							}
						}
					);
					zan.push('{$com[_cid]}');
					localStorage.setItem("zan", zan);
					zanBool = false;
				}
			})

	</script>
	<script src="http://pic.597.com/rt/1/js/sha1.js"></script>
	<script src="http://pic.597.com/rt/1/js/jweixin-1.1.0.js"></script>
	<script>
		function setWeixin(data) {
			var _gticket = data.msg;
			var _gUrl = window.location.href
			var _arr1 = _gticket.split('=')
			var _arr2 = [];
			for (var i = 0; i < _arr1.length; i++) {
				var s = _arr1[i].split('&')
				_arr2.push(s);
			};
			var _newticket = "jsapi_ticket=" + _arr2[1][0] + "&noncestr=" + _arr2[2][0] + "&timestamp=" + _arr2[3][0] + "&url=" + _gUrl
			var sig = hex_sha1(_newticket)
			wx.config({
				debug: false,
				appId: 'wx597ffd1f919e3e24',
				timestamp: _arr2[3][0],
				nonceStr: _arr2[2][0],
				signature: sig,
				jsApiList: [
					'checkJsApi',
					'onMenuShareTimeline',
					'onMenuShareAppMessage',
					'onMenuShareQQ',
					'onMenuShareWeibo',
					'hideMenuItems',
					'showMenuItems',
					'closeWindow'
				]
			});

			wx.ready(function () {
				wx.onMenuShareTimeline({
					title: '{$com[cname]}招人还是蛮拼的，福利多的眼花缭乱，兄弟姐妹赶快LOOKLOOK。',
					desc: '来了绝不后悔，福利多的数不过来，各种岗位任你挑。',
					link: window.location.href,
					imgUrl: 'http://pic.597.com/rt/1/picture/ShareLogo.png',
					trigger: function (res) {
						// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
						//alert('用户点击发送给朋友');
					},
					fail: function (res) {
						alert(JSON.stringify(res));
					}
				});
				wx.onMenuShareQQ({
					title: '{$com[cname]}招人还是蛮拼的，福利多的眼花缭乱，兄弟姐妹赶快LOOKLOOK。',
					desc: '来了绝不后悔，福利多的数不过来，各种岗位任你挑。',
					link: window.location.href,
					imgUrl: 'http://pic.597.com/rt/1/picture/ShareLogo.png',
					trigger: function (res) {
						// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
						//alert('用户点击发送给朋友');
					},
					fail: function (res) {
						alert(JSON.stringify(res));
					}
				});
				wx.onMenuShareAppMessage({
					title: '{$com[cname]}招人还是蛮拼的，福利多的眼花缭乱，兄弟姐妹赶快LOOKLOOK。',
					desc: '来了绝不后悔，福利多的数不过来，各种岗位任你挑。',
					link: window.location.href,
					imgUrl: 'http://pic.597.com/rt/1/picture/ShareLogo.png',
					trigger: function (res) {
						// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
						//alert('用户点击发送给朋友');
					},
					fail: function (res) {
						alert(JSON.stringify(res));
					}
				});
				wx.onMenuShareWeibo({
					title: '{$com[cname]}招人还是蛮拼的，福利多的眼花缭乱，兄弟姐妹赶快LOOKLOOK。',
					desc: '来了绝不后悔，福利多的数不过来，各种岗位任你挑。',
					link: window.location.href,
					imgUrl: 'http://pic.597.com/rt/1/picture/ShareLogo.png',
					trigger: function (res) {
						// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
						//alert('用户点击发送给朋友');
					},
					fail: function (res) {
						alert(JSON.stringify(res));
					}
				});

			});
			wx.error(function (res) {
				alert(res.errMsg);
			});
		}
	</script>
<div style="display: none" id="wx_stats">
<script src="http://s5.cnzz.com/z_stat.php?id=1000320696&web_id=1000320696" language="JavaScript"></script>
<link rel="logo1" href="/597logo/logo121x75.png" />
<link rel="logo2" href="/597logo/75px.png" />
</div>
</body>
</html>
