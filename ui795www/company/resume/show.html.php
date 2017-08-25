<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$resume['realname']}简历-597人才网</title>
	<!–[if lt IE9]>
	<script type="text/javascript" src="http://cdn.597.com/js/html5.js?v=2017" charset="UTF-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=2017" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=2017" />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_autocomplete.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_tooltip.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_fancybox.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_fancybox-thumbs.js?v=2017" charset="UTF-8"></script>
	<style type="text/css">
		div.resumeContent{margin:0 auto;text-align:left; width:1000px; padding-top:10px;}
		section{}
		section.modL{width:870px;background:#fff; float:left; display:inline; background:none;}
		section.modL .mod{background:#fff;}
		section.modR{display:inline; width:120px; float:right;}
		.modR .btn3{margin-bottom:10px; width:70px; text-align:center; font-size:12px;}
		.modR .btn3 i.jpFntWes{font-size:14px; margin-right:5px;}
		.modR .btn4{margin-bottom:10px; width:70px; text-align:center; font-size:12px;}
		.modR .btn4 i.jpFntWes{font-size:14px; margin-right:5px;}
		.modR .btn .rLnk{position:relative; z-index:1; display:block;}
		.modR .btn .rLnk .downCmt{background:#fff; display:none; border:1px solid #aaa;border-radius:3px;box-shadow:0 0 4px #999;left:-120px;position:absolute;top:0;width:120px;z-index:2;}
		.modR .btn .rLnk .downCmt a{display:block;font-size:12px;height:30px;line-height:30px;margin:0;text-align:center;width:120px; color:#7d7d7d;}
		.modR .btn .rLnk .downCmt a:hover{background:#f1f1f1; color:#333;}

		.lngChange{padding:0 20px;zoom:1; text-align:right; background:#f7f7f7; line-height:30px; height:30px;}
		.lngChange .l{float:left; display:inline;}
		.lngChange .l em{margin-right:10px; font-size:12px; color:#999;}
		.lngChange .r{ float:right; display:inline;}
		.lngChange .r i.jpFntWes{font-size:14px; color:#6C6C6C; margin:0 5px;}
		.lngChange .r a.cu{color:#6c6c6c;}
		.rTeam{padding:0 35px 20px 35px;zoom:1;}
		.rTeam .gray{color:#666;}
		.rTeamBas{padding:20px 35px 30px 35px; zoom:1; position:relative; z-index:1;}
		.rTeamBas .photo{width:120px; height:150px;position:absolute; left:35px; top:26px; background:url(http://cdn.597.com/img/common/user120_150.jpg) no-repeat;}
		.rTeamBas .photo img{width:120px; height:150px; border:0;}
		.rTeamBas .info{margin-left:145px; position:relative; z-index:1;}
		.info .infoT{margin-bottom:10px; display:inline-block;}
		.info .infoT p{padding:0 0 10px 0 ; zoom:1;}
		.info .infoT b.rName{font-size:24px; margin-right:10px; font-family:"微软雅黑";}
		.info .infoT i{margin-right:10px; border-right:1px solid #dadada; padding-right:10px;zoom:1; height:14px; line-height:14px;}
		.info .infoT a{font-size:24px; margin-left:25px; color:#999;}
		.info .infoT a:hover{color:#ff9600;}
		.info .infoT .ruMark{position:absolute; right:20px; top:9px;}
		.info .infoC{color:#666; line-height:24px; font-size:14px;}
		.info .infoC b{font-weight:normal;}

		.rTeamCon{padding:0 35px 30px 35px; zoom:1;}
		.rTeamCon .conBox{background:#f5f5f5; line-height:38px; padding:0 20px;zoom:1; font-size:12px;}
		.rTeamCon .conBox p{font-size:12px;}
		.rTeamCon .conBox p a.ach{display:block; text-align:center;}
		.rTeamCon .conBox p.ser{text-align:center; display:block;}
		.rTeamCon .conBox .phone{border-bottom:1px dashed #dadada;}
		.rTeamCon .conBox .phone .tipTxt b.num{font-size:16px; float:left; display:inline; color:#000;}
		.rTeamCon .conBox .phone .tipTxt .phoneVal{display:inline; float:left; position:relative; z-index:1; width:185px;}
		.rTeamCon .conBox .phone .tipTxt .phoneVal i{background:url(http://cdn.597.com/img/p/person.gif) no-repeat 0 0; width:48px; height:15px; right:15px; position:absolute; top:12px;}
		.rTeamCon .conBox .phone .tipTxt .val i{background-position:0 -15px;}

		.rTeamCon .conBox .info{display:block; overflow:hidden;}
		.rTeamCon .conBox .tipTxt{margin:0 30px 0 0; display:inline; float:left;}
		.rTeamCon .conBox .tipTxt em{color:#999; float:left; display:inline;}
		.rTeamCon .conBox .tipTxt em.jpFntWes{font-size:20px; float:left; display:inline; margin:9px 5px 0 0; color:#999;}
		.rTeamCon .conBox .tipTxt strong{font-weight:normal; margin:0 5px;}
		.rTeamCon .conBox .tipTxt b{font-weight:normal; float:left; display:inline;}
		.rTeamCon .conBox .report{float:right; display:inline;}
		.rTeamCon .conBox .report a{color:#999;}
		.rTeamCon .conBox .report a:hover{color:#00aaff;}

		.rTeamTag{padding:5px 35px 30px 35px; zoom:1;}
		.rTeamTag .tagLst{} 
		.tagLst ul li{display:inline-block; *display:inline; zoom:1; font-size:12px; height:22px;line-height:22px; padding:0 3px 0 10px; border:1px solid #a6a6a6; margin:0 25px 15px 0; position:relative; z-index:1; border-bottom:2px solid #a6a6a6;}
		.tagLst ul li b{position:absolute; background:url(http://cdn.597.com/img/p/person.gif) no-repeat 0 -30px; width:14px; height:25px; right:-14px; top:-1px;}
		.rTeamTag .depTxt{font-size:14px; line-height:22px; color:#666; padding-top:5px; zoom:1;}
		 
		.rTeam .tit{ height:35px; width:100%;background:url(http://cdn.597.com/img/p/rum_bj.gif) repeat-x 0 center;}
		.rTeam .tit h2{width:160px; font-size:20px; display:inline-block;font-weight:normal; font-family:"微软雅黑"; color:#666; line-height:35px;height:35px;background:#fff;}
		.rTable{line-height:30px;}
		.rTable td i{padding-left:15px; margin-right:15px; zoom:1; border-left:1px solid #dadada; line-height:18px;}
		.rTable td i.gray{display:inline-block;width:40px;}
		.rTable td b{padding-right:15px;}
		.rTable td em{padding-right:15px; border-right:1px solid #dadada;}
		.rTable .fn12{font-size:12px;}

		.rTeamWork{}

		.rTeamWork .tagTxt{padding:5px 0; zoom:1;}
		.rTeamWork .fn12{color:#999; float:left; font-size:12px; margin-right:15px;}

		.rTeamWork .workCon{}
		.workCon .workLst{padding:15px 0 0 0; zoom:1;}
		.workCon dl{border-bottom:1px solid #e2e2e2; padding:15px 0; zoom:1;}
		.workLst ul li{width:113px;float:left;display:inline; text-align:center; font-size:12px; margin:0 15px 10px 0;}
		.workLst ul li table tr td.img{background:#f4f4f4;overflow:hidden;height:113px; text-align:center;}
		.workLst ul li table tr td div.box{width:113px;margin:0 auto;overflow:hidden; text-align:center;}
		.workLst ul li table tr td div.box a{display:block;}
		.workLst ul li table tr td div.box img{max-width:113px;max-height:113px;_width:113px;_height:113px; vertical-align:middle;}
		.workLst ul li table tr td.txt p{width:113px;height:24px;line-height:24px; text-align:center;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;}
		.workLst ul li table tr td.txt p a:link,.workLst ul li p a:visited{color:#666;}
		.workLst ul li table tr td.txt p a:hover{color:#00aaff;}
		.workCon .tipTxt{font-size:12px; line-height:24px;}


		.rTeamBasF{padding:10px 15px 0 15px; z00m:1;}
		.rTeamBasFt{border-top:1px solid #dadada; background:#fafafa; padding:15px 0 20px 15px;zoom:1;overflow:hidden;}
		.rTeamBasFt h3{font-size:20px; font-weight:normal; line-height:30px; font-family:"微软雅黑"; color:#666; height:30px}
		.rTeamBasFt h3 b{float:left; display:inline; font-weight:normal;}
		.rTeamBasFt h3 a.report{float:right; font-family:"宋体"; font-size:12px; color:#999; font-weight:normal; margin-right:20px; display:inline;}
		.rTeamBasFt h3 a.report:hover{color:#00aaff;}
		.rTeamBasFt em{color:#999;}
		.infoFt{padding:20px 0 20px 0; zoom:1;}
		.infoFt .l{float:left; display:inline; width:50%;	border-right:1px solid #eee;}
		.infoFt .l .phoneIco{float:left; display:inline;}
		.infoFt .l .phoneIco i.jpFntWes{font-size:56px; margin:8px 10px 0 0; color:#999; float:left; display:inline;}
		.infoFt .l .phoneNu{float:left; display:inline;}
		.infoFt .l .phoneNu b.num{font-size:24px;}
		.infoFt .l .phoneNu .phoneVal{position:relative; z-index:1; display:inline-block;}
		.infoFt .l .phoneNu .phoneVal i{background:url(http://cdn.597.com/img/p/person.gif) no-repeat 0 0; width:48px; height:15px; right:-55px; position:absolute; top:12px; line-height:0;font-size:0;}
		.infoFt .l .phoneNu .val i{background-position:0 -15px;}
		.infoFt .l .tipTxt{font-size:12px; color:#999; line-height:30px;}
		.infoFt .r{float:right; display:inline; width:48%;}
		.infoFt .r .tipTxt{font-size:12px; height:24px; line-height:24px;}
		.infoFt .r .tipTxt em{float:left; display:inline;}
		.infoFt .r .tipTxt b{float:left; display:inline; font-weight:normal;}
		.infoFt .r .tipTxt .mailVal{position:relative; z-index:1; display:inline-block;}
		.infoFt .r .tipTxt .mailVal i{background:url(http://cdn.597.com/img/p/person.gif) no-repeat 0 0; width:48px; height:15px; right:-55px; position:absolute; top:6px; line-height:0;font-size:0;}
		.infoFt .r .tipTxt .val i{background-position:0 -15px;}
		.markTip{position:absolute; top:30px; right:10px;}
		.markTip a.jpFntWes{font-size:24px; color:#aaa;}
		.markTip a.jpFntWes:hover{color:#ff9600;}
		.mark a.jpFntWes{color:#ff9600;}
		.infoFt .ach{display:block; text-align:center; font-size:18px; font-family:"微软雅黑";}
		.infoFt .ser{text-align:center; display:block;font-size:18px; font-family:"微软雅黑";}
		.info .infoT .hbTip .tooltip-inner{width:80px;}

		.logo{ text-align:left;width:1000px;margin:0 auto;height:55px;}
		.logo a{display:inline-block;width:190px;height:60px;background:url(http://cdn.597.com/img/common/logo.gif) no-repeat;float:left;display:inline;margin:8px 0 0 0;}
		.logo b{float:left;display:inline;margin:0 0 0 10px;font-family:"微软雅黑","SimHei";font-size:22px;height:55px;line-height:55px;font-weight:normal;}
		.workType{background:#bbb; padding:0 3px; margin-right:5px; color:#fff; font-size:12px;}

		/*相册大图预览*/
		.fancybox-wrap,
		.fancybox-skin,
		.fancybox-outer,
		.fancybox-inner,
		.fancybox-image,
		.fancybox-wrap iframe,
		.fancybox-wrap object,
		.fancybox-nav,
		.fancybox-nav span,
		.fancybox-tmp
		{padding: 0;margin: 0;border: 0;outline: none;vertical-align: top;}
		.fancybox-wrap {position: absolute;top: 0;left: 0;z-index: 8020;}
		.fancybox-skin {position: relative;background: #f9f9f9;color: #444;text-shadow: none;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}
		.fancybox-opened {z-index: 8030;}
		.fancybox-opened .fancybox-skin {-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);-moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);}
		.fancybox-outer, .fancybox-inner {position: relative;}
		.fancybox-inner {overflow: hidden;}
		.fancybox-type-iframe .fancybox-inner {-webkit-overflow-scrolling: touch;}
		.fancybox-error {color: #444;font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;margin: 0;padding: 15px;white-space: nowrap;}
		.fancybox-image, .fancybox-iframe {display: block;width: 100%;height: 100%;}
		.fancybox-image {max-width: 100%;max-height: 100%;}
		#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {background-image: url(http://cdn.597.com/img/comshow/fancybox_sprite.png);}
		#fancybox-loading {position: fixed;top: 50%;left: 50%;margin-top: -22px;margin-left: -22px;background-position: 0 -108px;opacity: 0.8;cursor: pointer;z-index: 8060;}
		#fancybox-loading div {width: 44px;height: 44px;background: url(http://cdn.597.com/img/comshow/fancybox_loading.gif) center center no-repeat;}
		.fancybox-close {position: absolute;top: -18px;right: -18px;width: 36px;height: 36px;cursor: pointer;z-index: 8040;}
		.fancybox-nav {position: absolute;top: 0;width: 40%;height: 100%;cursor: pointer;text-decoration: none;background: transparent url(http://cdn.597.com/img/comshow/blank.gif); /* helps IE */-webkit-tap-highlight-color: rgba(0,0,0,0);z-index: 8040;}
		.fancybox-prev {left: 0;}
		.fancybox-next {right: 0;}
		.fancybox-nav span {position: absolute;top: 50%;width: 36px;height: 34px;margin-top: -18px;cursor: pointer;z-index: 8040;visibility: hidden;}
		.fancybox-prev span {left: 10px;background-position: 0 -36px;}
		.fancybox-next span {right: 10px;background-position: 0 -72px;}
		.fancybox-nav:hover span {visibility: visible;}
		.fancybox-tmp {position: absolute;top: -99999px;left: -99999px;visibility: hidden;max-width: 99999px;max-height: 99999px;overflow: visible !important;}
		/* Overlay helper */
		.fancybox-lock {overflow:hidden !important;width: auto;}
		.fancybox-lock body {overflow:hidden !important;}
		.fancybox-lock-test {overflow-y: hidden !important;}
		.fancybox-overlay {position: absolute;top: 0;left: 0;overflow: hidden;display: none;z-index: 8010;background: url(http://cdn.597.com/img/comshow/fancybox_overlay.png);}
		.fancybox-overlay-fixed {position: fixed;bottom: 0;right: 0;}
		.fancybox-lock .fancybox-overlay {overflow: auto;overflow-y: scroll;}
		/* Title helper */
		.fancybox-title {visibility: hidden;font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;position: relative;text-shadow: none;z-index: 8050;}
		.fancybox-opened .fancybox-title {visibility: visible;}
		.fancybox-title-float-wrap {position: absolute;bottom: 0;right: 50%;margin-bottom: -35px;z-index: 8050;text-align: center;}
		.fancybox-title-float-wrap .child {display: inline-block;margin-right: -100%;padding: 2px 20px;background: transparent;background: rgba(0, 0, 0, 0.8);-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 15px;text-shadow: 0 1px 2px #222;color: #FFF;font-weight: bold;line-height: 24px;white-space: nowrap;}
		.fancybox-title-outside-wrap {position: relative;margin-top: 10px;color: #fff;}
		.fancybox-title-inside-wrap {padding-top: 10px;}
		.fancybox-title-over-wrap {position: absolute;bottom: 0;left: 0;color: #fff;padding: 10px;background: #000;background: rgba(0, 0, 0, .8);}
		/*Retina graphics!*/
		@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
				 only screen and (min--moz-device-pixel-ratio: 1.5),
				 only screen and (min-device-pixel-ratio: 1.5){

			#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
				background-image: url(http://cdn.597.com/img/comshow/fancybox_sprite@2x.png);
				background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
			}

			#fancybox-loading div {
				background-image: url(http://cdn.597.com/img/comshow/fancybox_loading@2x.gif);
				background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/
			}
		}



		#fancybox-thumbs {position: fixed;left: 0;width: 100%;overflow: hidden;z-index: 8050;}
		#fancybox-thumbs.bottom {bottom: 2px;}

		#fancybox-thumbs.top {top: 2px;}
		#fancybox-thumbs ul {position: relative;list-style: none;margin: 0;padding: 0;}
		#fancybox-thumbs ul li {float: left;padding: 1px;opacity: 0.5;}
		#fancybox-thumbs ul li.active {opacity: 0.75;padding: 0;border: 1px solid #fff;}
		#fancybox-thumbs ul li:hover {opacity: 1;}
		#fancybox-thumbs ul li a {display: block;position: relative;overflow: hidden;border: 1px solid #222;background: #111;outline: none;}
		#fancybox-thumbs ul li img {display: block;position: relative;border: 0;padding: 0;max-width: none;}


		.tipNew{background:#fbf8d2; border:1px solid #f0d862;font-size:12px; margin-bottom:10px;}
		.tipNew a.flod{height:26px; line-height:26px; text-align:center; display:block; background:#f4ed8e; color:#d38c16;}
		.tipNew a.flod i.jpFntWes{font-size:12px; margin:2px 0 0 3px;}
		.tipNew a.more{height:35px; line-height:35px; text-align:center; display:block; color:#999;}
		.tipNew .newBd{padding:0 15px; zoom:1;}
		.tipNew .newBd dl{border-bottom:1px dashed #e4e4e4; height:30px; line-height:30px;}
		.tipNew .newBd dl dt{width:95px; color:#999; float:left; display:inline;}
		.tipNew .newBd dl dd{float:left; display:inline;}
		.tipNew .newBd dl dd p{color:#666;}
		.tipNew .newBd dl dd p.in{color:#6386AD;}
		.tipNew .newBd dl dd p i{font-size:9px; margin:0 5px 0 0; float:left; display:inline;}
		.tipNew .page{padding-bottom:15px;}
	</style>
</head>
<body id="body">
	<div class="logo"><a href="/"></a><b>简历</b></div>
	<div class="resumeContent" id="resumeContent">
		<section class="modL">
			<input type="hidden" id="hddCurrResumeId" value="13138625" />
			<input type="hidden" id="hddapplyid" value="" />
			<input type="hidden" id="hddsrc" value="network" />
			<div class="mod">
				<div class="lngChange">
					<div class="l">
						<em>简历编号：{$resume['_rid']}</em><em>最近登录时间：{$resume['updateTime']}</em>
					</div>
					<!-- <div class="r " ></div> --> 
					<div class="clear"></div>
				</div>
				<div class="rTeam rTeamBas">
					<div class="photo"></div>
					<div class="info">
						<span class="infoT">
							<p><b class="rName">{$resume['realname']}</b><em>{$resume['_info']}</em></p>	
							<p><i>{$resume['maxEdu']}</i><i>{$resume['_workYear']}</i>{$resume['jobState']}<!--<i>现居：重庆-巴南区</i>户籍：重庆-巴南区--></p>
						</span>
						<span class="infoC">
							<p><b>希望从事：</b><i>{$resume['joinOffice']}{$resume['joinType']}</i></p>
							<p><b>期望类别：</b><i>{$resume['joinJobClass']}</i></p>
							<p><b>期望行业：</b><i>{$resume['joinIndustry']}</i></p>
							<p><b>期望薪资：</b><i>{$resume['joinSalary']}</i></p>
							<p><b>意向地区：</b><i>{$resume['joinCity']}</i></p>
							<p><b>到岗时间：</b><i>{$resume['joinTime']}</i></p>
						</span>
						<div class="clear"></div>
					</div>
				</div>
				<div class="rTeam">
					<!--{if $resume[workList]}-->
				 	<div class="tit"><h2>工作经验</h2></div>
						<div class="rTable">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<!--{loop $resume_work $work}-->
								 	<tr>
										<td class="gray" width="135" align="right" valign="top" style="padding:15px 25px 15px 0; zoom:1;">
											<table>
												<tbody>
													<tr><td align="right">{$work[workDateStart]}-{$work[workDateEnd]}</td></tr>
													<tr><td align="right" style="font-size:12px;"></td></tr>
												</tbody>
											</table>
										</td>
										<td align="left" style="border-bottom:1px solid #e2e2e2; padding:15px 0; zoom:1;">
											<table>
												<tbody>
													<tr>
														<td><b>{$work[workOffice]}</b><i>{$work[workJobClass]}</i><i>{$work[workSalary]}元/月</i></td>
													</tr>
													<tr>
														<td style="font-size:12px;"><!--{if $right>1}-->{$work[workName]}<!--{else}-->******公司<!--{/if}-->（部门：{$work[workUnit]}，行业：{$work[workIndustry]}）</td>
													</tr>
														<td class="gray" style="line-height:24px; padding-top:8px; zoom:1; font-size:14px;"><p style="width:640px;"><!--{if $right>1}-->{$work[workContent]}<!--{else}-->您暂未通过企业认证，认证后即可查看完整简历<!--{/if}--></p></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<!--{/loop}-->
								</tbody>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<!--{/if}-->

					<!--{if $resume[resume_edu]}-->
					<div class="rTeam">
						<div class="tit"><h2>教育背景</h2></div>
						<div class="rTable">
							 <table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<!--{loop $resume_edu $edu}-->
									<tr>
										<td width="135" align="right" valign="top" class="gray" style="padding:15px 25px 15px 0; zoom:1;">{$edu[eduDateStart]}-{$edu[eduDateEnd]}</td>
										<td align="left" style="padding:15px 0; zoom:1;">
											<table>
												<tbody>
													<tr>
														<td><b>{$edu[eduBackGround]}</b><i>{$edu[eduName]}</i><i>{$edu[eduSpecialty]}</i></td>
													</tr>
														<td class="gray" style="line-height:24px; padding-top:8px; zoom:1; font-size:12px;"><p style="width:640px;"><!--学习课程：工业会计、财政与信贷、会计原理、管理会计--></p></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<!--{/loop}-->
								</tbody>
							 </table>
						</div>
						<div class="clear"></div>
					</div>
					<!--{/if}-->

					<!--
					<div class="rTeam">
						<div class="tit"><h2>项目经验</h2><b></b><div class="clear"></div></div>
						<div class="rTable">
							 <table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td class="gray"><p>您暂未通过企业认证，认证后即可查看完整简历</p></td>
									</tr>
								</tbody>
							 </table>
						</div>
						<div class="clear"></div>
					</div>
					-->
					<!--{if $resume[trainingList]}-->
					<div class="rTeam">
						<div class="tit"><h2>培训经历</h2></div>
						<div class="rTable">
							 <table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<!--{loop $resume_training $training}-->
									<tr>
										<td width="135" align="right" valign="top" class="gray" style="padding:15px 25px 15px 0; zoom:1;">{$training[trainingDateStart]}-{$training[trainingDateEnd]}</td>
										<td align="left" style="padding:15px 0; zoom:1;">
											<table>
												<tbody>
													<tr>
														<td><b>{$training[trainingSpecialty]}</b><i>{$training[trainingName]}</i><i>{$training[trainingBackGround]}</i></td>
													</tr>
														<td class="gray" style="line-height:24px; padding-top:8px; zoom:1; font-size:12px;"><p style="width:640px;"><!--学习课程：工业会计、财政与信贷、会计原理、管理会计--></p></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<!--{/loop}-->
								</tbody>
							 </table>
						</div>
						<div class="clear"></div>
					</div>
					<!--{/if}-->
					<!--{if $resume[certificateList]}-->
					<div class="rTeam">
						<div class="tit"><h2>证书</h2></div>
						<div class="rTable">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<!--{loop $resume_certificate $certificate}-->
									<tr>
										<td><img src="http://pic.{ROOT_DOMAIN}/certificate/{$certificate[certificateBackGround]}" title="{$certificate[certificateName]}"/></td>
									</tr>
									<!--{/loop}-->
								</tbody>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<!--{/if}-->
					<!--
					<div class="rTeam">
						<div class="tit"><h2>实践经验</h2><b></b><div class="clear"></div></div>
						<div class="rTable">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td width="135" align="right" valign="top" class="gray" style="padding:15px 25px 15px 0; zoom:1;"> 1997.05-至今</td>
										<td align="left" style="padding:15px 0; zoom:1; ">
											<table>
												<tbody>
													<tr>
														<td><b>中国民营经济创新驱动发展升级版之一</b></td>
													</tr>
													<tr>
														<td class="fn12 gray" style="line-height:24px; padding-top:8px; zoom:1; font-size:12px">
															<p style="font-size:14px; width:640px;">民营企业的创新动力机制主要包括三个方面：第一，民营企业要面对外部强大的市场压力。一般民营企业受自身规模和资金等因素影响，市场竞争尤为激烈，促使企业自身不断创新，以改进和完善生产、经营和管理等方面的方法，使市场压力转化为市场动力。第二，追求利润最大化的动力。企业的生产目的是为了扩大再生产，而扩大再生产的终极目标就是实现企业的利润最大化，追求利润的最大化是任何一个企业，尤其是民营企业在市场经济中的首选目标。因此这个终极目标也成为企业发展强大的推动力。第三，企业内部有较强的激励机制。由于产权关系明晰，民营企业具有高度的自主用人选择权和内部分配权，因此企业可以最大限度地引进、使用和储备人才，激励人才在企业创新中的作用。在分配上按贡献大小作为评判标准，激发员工的积极性、主动性和创造性，提高企业的劳动生产率。民营企业在中国这样还不完善的市场机制里要坚持现代企业的价值观并且做到，要经历一个漫长的过程，并与原生态进行很好地结合，进而探索出中国的民营企业生存、发展新模式，这就是中国民营经济创新驱动发展升级版。</p>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<div class="rTeam rTeamTag">
				 		<div class="tit"><a id="hi"></a><h2>亮点标签</h2><b></b><div class="clear"></div></div>
						<table>
							<tbody>
								<tr>
									<td width="160" align="right" valign="top" style="padding:15px 0; zoom:1;"></td>
									<td align="left" style="padding:15px 0; zoom:1;">
										<p class="depTxt" style="width:640px;">熟悉私营企业的各种融资渠道及经验。</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					-->
					<!--{if $resume[joinEvaluate]}-->
					<div class="rTeam">
						<div class="tit"><h2>自我评价</h2></div>
						<div class="rTable">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
									 	<td width="135" valign="top" align="right" style="padding:15px 25px 15px 0; zoom:1;" class="gray"></td>
										<td align="left" valign="top" style="padding:15px 0;">
											<table width="100%" cellpadding="0" cellspacing="0">
												<tbody>
													<tr>
														<td align="left"><p style="width:640px;">{$resume[joinEvaluate]}</p></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--{/if}-->
					<!--{if $right<2}-->
					<div class="rTeam rTeamBasF" id="linkwayTip">
						<div class="rTeamBasFt"><div class="infoFt"><p class="ser">您暂未通过企业认证，认证后即可查看完整简历</p></div></div>
					</div>
					<!--{else}-->
					<div class="rTeam rTeamBasF" id="linkwayTip">
						<div class="rTeamBasFt"><div class="infoFt"><p class="ser"><a href="javascript:void(0)" id="getContact" class="btn1 btnsF16 searchBtn">点击查看联系方式</a><a href="javascript:void(0)" id="btnFav" class="btn4 btnsF16 searchBtn">点击收藏简历</a></p></div></div>
					</div>
					<!--{/if}-->
					<div class="rTeamBasFt" id="linkwaytemp" style="display: none">
						<h3><b>联系方式</b><a href="javascript:void(0)" class="report" onclick="resumeshow.reportPhone();" id="report">联系方式有误？请举报</a></h3>
						<div class="infoFt">
							<div class="l">
								<div class="phoneIco"><i class="jpFntWes">&#xf10b;</i></div>
								<div class="phoneNu">
									<p><span class="phoneVal"><b class="num"></b><i></i></span></p> 
									<p class="tipTxt" id="phoneAddr"></p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="r">
								<p class="tipTxt"><em>邮箱：</em><span class="mailVal"><b></b><i></i></span></p>
								<p class="tipTxt qq" ><em>Q Q：</em><b></b></p>
								<p class="tipTxt telphone" ></p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="rTeamBasFt">
							<div class="infoFt">
								<p class="ser">
									<a href="javascript:void(0)" id="btnNetWorkInvite" onclick="resumeshow.invite();" class="btn1 btnsF16 searchBtn" >发送面试通知</a>
									<a href="javascript:void(0)" id="btnFav" class="btn4 btnsF16 searchBtn">点击收藏简历</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="clear"></div>

	</div>


	<!--{template company/footer}-->

	<iframe id="printIframe" height="0" width="0" frameborder="0"></iframe>

	<script type="text/javascript">
		var right = {$right};
		var rid = '{$resume['_rid']}';
		var isfav = {$isfav};
		var winbox;
		/**
		 * 简历显示
		 */
		var resumeshow	= {
			init:function() {
				//判断权限
				this._linkway();
				this._fav();
				//this._remark();
				//this._fairInivite();
				//this._sendEmail();
				//this._saveComputer();
				//this._initHistoryEvent();
			},
			_linkway:function() {
				//获取联系方式
				$('#getContact').click(function(){
					$.getJSON('/api/web/company.api',{'act':'getlinkway','rid': rid},function(json){
						if (json.status>0){
							resumeshow.linkwayCallback(json);
							resumeshow._fav();
						}else{
							$.anchorMsg(json.msg,{icon:'fail'});
						}
					});
					return false;
				});
				if (right>7) $("#getContact").trigger("click");
			},
			linkwayCallback:function(json) {
				var temp = $('#linkwaytemp').clone().show();
				if (json.mobile != ''){
					temp.find('.phoneVal').addClass('val');
					temp.find('.phoneVal').find('.num').html(json.mobile);
				}else{
					temp.find('.phoneVal').find('.num').html('　');
				}
				if (json.email != ''){
					temp.find('.mailVal').addClass('val');
					temp.find('.mailVal').find('b').html(json.email);
				}else{
					temp.find('.mailVal').find('b').html('　');
				}
				if(json.qq != '') {
					temp.find('.qq').find('b').html(json.qq);
				}else{
					temp.find('.qq').hide();
				}
				this._searchAttribution(json.mobile);
				$('#linkwayTip').empty().append(temp);
			},
			_searchAttribution:function(tel) {
				//获取号码归属地
				var regex = /^1[3|4|5|8][0-9]\d{4,8}$/;
				if(!regex.test(tel)){
					$('#phoneAddr').html('（归属地：<b>未知</b>，座机拨打异地手机请加拨“0”）');
				}else{
					 var url = 'http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel='+tel;
						var isIE6 = false;
						if ($.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
							isIE6 = true;
							url = 'https://www.baifubao.com/callback?cmd=1059&callback=phone&phone='+tel;
						}
						$.ajax({
						 async:false,
									 type: "post",
									 url:url,
									 dataType: "jsonp",
									 contentType: "application/x-www-form-urlencoded; charset=utf-8",
									 jsonp: "callback",
									 success: function(json){
											if(isIE6){
								if(json.data.area==''||json.data.area==undefined){
									$('#phoneAddr').html('（归属地：<b>未知</b>，座机拨打异地手机请加拨“0”）');
								}else{
									$('#phoneAddr').html('（归属地：<b>'+json.data.area+'</b>，座机拨打异地手机请加拨“0”）');
								}
											}else{
												if(json.province==''||json.province==undefined){
											$('#phoneAddr').html('（归属地：<b>未知</b>，座机拨打异地手机请加拨“0”）');
									}else{
										$('#phoneAddr').html('（归属地：<b>'+json.province+'</b>，座机拨打异地手机请加拨“0”）');
									}
											} 
									 },
									 error:function (){	 
										 $('#phoneAddr').html('（归属地：<b>未知</b>，座机拨打异地手机请加拨“0”）');
									 }
							 });
					//$.getScript("http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel="+tel+'&callback=showAttribution&qq-pf-to=pcqq.c2c');
				}
			},
			reportPhone:function() {
				$.anchorMsg('联系方式举报成功！');
				return false;
			},
			_fav:function() {
				if (isfav) {
					$("#btnFav").html('取消收藏简历');
					$("#btnFav").attr("class", "btn2 btnsF16 searchBtn");
				}else{
					$("#btnFav").html('点击收藏简历');
					$("#btnFav").attr("class", "btn4 btnsF16 searchBtn");
				}
				//感兴趣
				$("#btnFav").click(function(){
					var obj = $(this);
					$.getJSON('/api/web/company.api',{'act':'addFavResume','rid':rid,r:Math.random().toString().replace('.','0')},function(json){
						if (json.status>0){
							if (json.isfav) {
								$("#btnFav").html('取消收藏简历');
								$("#btnFav").attr("class", "btn2 btnsF16 searchBtn");
								$.anchorMsg('简历收藏成功！');
							}else{
								$("#btnFav").html('点击收藏简历');
								$("#btnFav").attr("class", "btn4 btnsF16 searchBtn");
								$.anchorMsg('取消收藏成功！');
							}
						}else{
							$.anchorMsg(json.msg,{icon:'fail'});
						}						
					});
				});
			},
			invite:function() {
				winbox = $.showModal('/company/resume/inviteResume.htm?v=201412181',{title:'邀请简历'});
			},



			_saveComputer:function() {
				$('#btnSaveComputer').click(function(){
					if($('#computerContainer').is(':hidden')){
						$('#computerContainer').show();
					}else {
						$('#computerContainer').hide();
					}
				});		
				//单个下载HTML
				$('#btnHtmlDown').click(function(){
					var resumeId=$('#hddCurrResumeId').val();
					var applyid = $('#hddapplyid').val();
					var src	= $('#hddsrc').val();
					var url = '/resume/htmldown/resumeid-'+resumeId+'-src-'+src+'-applyid-'+applyid+'';
					$(this).attr('href',url).attr('target','_blank');
		 		});

				//单个下载Word
				$('#btnWordDown').click(function(){
					var resumeId=$('#hddCurrResumeId').val();
					var applyid = $('#hddapplyid').val();
					var src	= $('#hddsrc').val();
					var url = '/resume/worddown/resumeid-'+resumeId+'-src-'+src+'-applyid-'+applyid+'';
					$(this).attr('href',url).attr('target','_blank');
		 		});

				//打印
				$('#btnPrint').click(function(){
					var resumeId=$('#hddCurrResumeId').val();
					var applyid = $('#hddapplyid').val();
					var src	= $('#hddsrc').val();			
					var url = '/resume/htmlprint/resumeid-'+resumeId+'-src-'+src+'-applyid-'+applyid+'';
					if($.browser.msie){
						$(this).attr('href',url).attr('target','_blank');
					}
					else{
						$('#printIframe').attr("src", url);
					}
					});

				 $('body').click(function(e){
					// 检测发生在body中的点击事件
					var cell = $(e.target);
					if (cell)
					{
						var tgID = $(cell).attr('id') == '' ? "string" : $(cell).attr('id');
						var inID = 'btnSaveComputer';
						var isTagert = false;
						try
						{
							 // 如果事件触发元素不是Input元素 并且不是发生在时间控件区域
							 isTagert = tgID!='btnSaveComputer'; //&& tgID != inID && $(cell).closest('#' + inID).length <= 0;
						}
						catch (e)
						{
							isTagert = true;
						}
						if (isTagert)
						{
							$('#computerContainer').hide();
						}
					}
				});	
			},
			_initHistoryEvent:function(){
				$('#btnShowHistory').click(function(e){
					e.preventDefault();
					if($('#btnMoreShowHistory').length<=0) {
						$('#historyContainer').find('.history30').show().end().find('.history90').show();
					}else {
						$('#btnMoreShowHistory').show();
						$('#historyContainer').find('.history30').show().end().find('.history90').hide();
					}
					$('#btnHidHistory').show();
					$(this).hide();
					
				});
				$('#btnHidHistory').click(function(e){
					e.preventDefault();
					$('#historyContainer').find('dl').hide();
					$('#btnShowHistory').show();
					$(this).hide();	
					$('#btnMoreShowHistory').hide();		
				});
				$('#btnMoreShowHistory').click(function(e){
					e.preventDefault();
					$(this).hide();
					$('#historyContainer').find('.history90').show();
				});
			},
			_sendEmail:function() {
				//单个发送到邮箱
					$('#relLnk').click(function() {
						$.showModal('/resume/wordsend/resumeid-13138625',{title:'转发到邮箱'});
					}); 
			},
			_remark:function() {
				$('#btnRemark').click(function(){
					var resume_id=$('#hddCurrResumeId').val();
					if(resume_id != undefined && resume_id>0){
						$.showModal('/resumeremark/index/resume_id-'+resume_id+'-v-'+Math.random(),{title:'备注'});
					}
					else{
						$.anchor('请选择一个简历后再进行备注',{icon:'fail'});
					}
				});
			},
			_fairInivite:function() {
				$('#btnFairInvite').click(function(){
					var resume_id=$('#hddCurrResumeId').val();
					if(resume_id != undefined && resume_id>0){
						$.showModal('/resumeremark/index/resume_id-'+resume_id,{title:'备注'});
					}
					else{
						$.anchor('请选择一个简历后再进行备注',{icon:'fail'});
					}
				});
			},
			_refuseapply:function(ids) {
					 // 婉拒求职者
				 		 $.getJSON('/apply/refuse/'+'op-refuse-ids-'+ids+'-v-'+Math.random(),function(result){
				 			if(result.success) {
				 				$.anchorMsg('已婉言拒绝');
				 			}else {
				 				$.anchorMsg(result.error, { icon: 'fail' }); 
				 			}
				 		 });
			},
			_inviteapply:function(applyid) {
				$.showModal('/invite/invitesingleshow/applyID-'+applyid+'-v-'+Math.random(),{title:'同意面试'});	
			},
			_deleteapply:function(ids) {
				 $.confirm('您确定将简历放入到回收站 ', '删除 ',function(){
						// 删除求职申请	
						$.getJSON('/apply/DeleteApply/'+'op-del-ids-'+ids+'-v-'+Math.random(),function(result){
							if(result.success) {
								$.anchorMsg('已放入回收站');
							}else {
								$.anchorMsg(result.error, { icon: 'fail' }); 
							}
							});
				});
			 }
		};

		resumeshow.init();
	</script>
</body>
</html>