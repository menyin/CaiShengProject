<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>{$resumeInfo['realname']}的简历-597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20150821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20150722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20151122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resume.css?v=20150930"/>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20151117" charset="utf-8"></script>
	<script type="text/javascript">
	window.CONFIG = {
		HOST: 'http://cdn1.597.com/min/??',
		COMBOPATH: '/js/v2/'
	}
	var fancboxid = [];
	</script>
	<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js" charset="utf-8"></script>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20151117" charset="utf-8"></script>
	<script type="text/javascript">
		jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
	</script>
	<style type="text/css">
		.logo-box span{font-size: 16px; color: #3d84b8;font-weight: bold; margin-left: 10px; position: relative; top: 20px; }
		.subSta{display:inline-block;width:95px; height:13px;}
		.subSta00{ background:url(http://cdn.597.com/img/common/pcstaricon.png) 0 0 no-repeat;}
		.subSta01{ background:url(http://cdn.597.com/img/common/pcstaricon.png) 0 -13px no-repeat;}
		.subSta02{ background:url(http://cdn.597.com/img/common/pcstaricon.png) 0 -26px no-repeat;}
		.subSta03{ background:url(http://cdn.597.com/img/common/pcstaricon.png) 0 -39px no-repeat;}
		.subSta04{ background:url(http://cdn.597.com/img/common/pcstaricon.png) 0 -52px no-repeat;}
		.subSta05{ background:url(http://cdn.597.com/img/common/pcstaricon.png) 0 -65px no-repeat;}
		.downloadInfo{padding: 10px; font-weight: bold;}
		.downloadInfo span{color: #F00;}
		/* .old-list {float: left; margin:23px 0 0 20px;} */
		.logo-box .old-list {float: right;  margin-top: 23px;}
		.right-operat .btn-box a.msg2{display: inline-block;color: #fff;background: #0af;height: 36px;line-height: 36px;width: 128px;font-size: 16px;font-weight: bold;margin-bottom: 5px;border-radius:5px;margin-left:3px;}
		.right-operat .btn-box a.msg2:hover{background-color: #63B8FF;}
	</style>
</head>
<body>
	<div class="w1000">
		<!--流程-->
		<div class="logo-box clearfix">
			<a href="/" class="logo" title="首页"></a>
			<a class="name" href="#">简历</a>
			<!--{if $joinJobInfo['jname']}--><span>应聘职位：{$joinJobInfo['jname']}</span><!--{/if}-->
			<!--{if $cid}--><a href="{$url}&act=oldList" class="old-list btn4 btnsF12">切换到旧版</a><!--{/if}-->
		</div>
		<!--主体-->
		<div class="resume-box clearfix">
			<!--右边-->
			<div class="right-operat">
				<!--{if $uid}-->
					<p class="btn-box">
						<a href="/person/resume.html?id={$resumeInfo['_rid']}" title="修改简历" class="updata"></a><!--自己查看时-->
					</p>
				<!--{/if}-->
				<!--{if $cid}-->
					<p class="btn-box">
						<a class="msg2" href="javascript:;">和TA聊聊</a>
						<a id="btnNetWorkInvite" class="invite" href="javascript:;" style="display:none"></a>
						<!--{if $resumeInfo['display']==1}-->
						<a id="btnGetLinkway2" href="javascript:;" class="contact" style="display:none">获取联系方式<i class="tl"></i><i class="tr"></i><i class="bl"></i><i class="br"></i></a>
						<!--{/if}-->
						<!--企业没有获取联系方式时-->
						<!--{if $join_id}-->
						<a id="btnJeject" class="reject" href="javascript:;" title="婉言拒绝" style="display:none"></a>
						<!--{/if}-->
					</p>
				<!--{/if}-->
				<!--{if $adminid}-->
					<!--管理员查看时-->
					<p class="btn-box">
						<!--{if $resumeInfo['ischeck']==0}-->
							<a id="btnIsCheckOk" title="通过" href="javascript:;" ></a>
							<a id="btnIsCheckNo"  title="屏蔽" href="javascript:;"></a>
						<!--{else}-->
							<!--{if $resumeInfo['ischeck']==2}-->
								<a id="btnIsCheckOk" class="updata" title="通过" href="javascript:;" ></a>
							<!--{elseif $resumeInfo['ischeck']==1}-->
								<a id="btnIsCheckNo" class="reject" title="屏蔽" href="javascript:;"></a>
							<!--{/if}-->
						<!--{/if}-->
					</p>
				<!--{/if}-->
				<ul class="link-list">
					<!--{if $cid}-->
					<li class="cur">
						<a href="javascript:;" id="btnRemark"><i class="i2"></i>备注<font>({$count})</font></a>
					</li>

					<li class="<!--{if $FAVORITES=='favourite_del'}-->cur<!--{/if}-->">
						<a href="javascript:;" id="btnFav" rel="{$FAVORITES}"><i class="i1"></i><span><!--{if $FAVORITES=='favourite_save'}-->收藏<!--{else}-->取消收藏<!--{/if}--></span></a>
					</li>

					<li><a href="javascript:" id="btnforwemail"><i class="i4"></i>转发到邮箱</a></li>
					<!--{/if}-->
					<li><a href="javascript:" id="btnsavecomputer"><i class="i3"></i>保存到电脑</a></li>
					<li><a href="javascript:" id="btnPrintRsume"><i class="i5"></i>打印</a></li>
					<!--{if $cid}-->
					<li><a id="btnReport" href="javascript:;"><i class="i7"></i>举报</a></li>
					<!--{/if}-->
				</ul>

			</div>
			<!--/-->

			<!--左边-->
			<div class="resume-left" style="padding:20px;width:798px">

			<div style="padding:10px">
				<!--个人资料-->
				<dl class="res-infor clearfix">
					<dt class="img">
						<a href="javascript:void(0)">
							<!--<img onmouseover="showPhotoHD(this,null,'{$resumeInfo['attachment']}')" src='{$resumeInfo['attachment']}' onerror="this.onerror=null; this.src='http://cdn.597.com/img/v2/resumeM/head-defects.jpg';"/>-->
							<img src='{$resumeInfo['attachment']}' onerror="this.onerror=null; this.src='http://cdn.597.com/img/v2/resumeM/head-defects.jpg';"/>
						</a>
					</dt>
					<dd class="infor-box">
						<p class="name">
							<span class="right gray9">最近刷新时间：{$resumeInfo['_updateTime']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;简历编号：{$resumeInfo['_rid']}</span>
							<strong class="n">{$resumeInfo['realname']} </strong>
						</p>
						<p class="inf1">
							<span id="spnBasicSex" v="{$resumeInfoInfo[gender]}"><i class="<!--{if $resumeInfo[gender]==1}-->n<!--{else}-->v<!--{/if}-->"></i><!--{if $resumeInfo[gender]==1}-->男<!--{else}-->女<!--{/if}--></span>
							<span><i class="y"></i>{$resumeInfo['birthdayY']}年 ({$resumeInfo['age']}岁)</span>
							<!--{if $resumeInfo['maxEduInfo']}--><span><i class="x"></i>{$resumeInfo['maxEduInfo']}</span><!--{/if}-->
							<span><i class="j"></i>{$resumeInfo['_workYear']}</span>
							<span id="posArea"><i class="d"></i>{$resumeInfo['residenceName']}</span>
						</p>
						<p class="inf3">
						<!--{if $resumeInfo['jobState']}-->
							<span>求职状态：</span>
							<span id="spnApplyStatus" v="{$resumeInfo['jobState']}" class="text">{$resumeInfo['_jobState']}</span>
						<!--{/if}-->
						<!--{if $resumeInfo['joinTime']}-->
							<span>到岗时间：</span>
							<span id="spnAccessionTime" v="{$resumeInfo['joinTime']}" class="text">{$resumeInfo['_joinTime']}</span>
						<!--{/if}-->
						</p>
						<p class="inf2">
							<span>{$resumeInfo['marriageInfo']}</span><u>-</u>
							<span>户籍：{$resumeInfo['nativeName']}</span><u>-</u>
							<span>{$resumeInfo['statureInfo']}</span><u>-</u>
							<span>{$resumeInfo['politicalInfo']}</span>
						</p>

						<p class="inf1">
							<span id="spnBasicAddress" class="p" v="{$resumeInfo[address]}" <!--{if !$resumeInfo[address]}-->style="display:none"<!--{/if}-->>地址：{$resumeInfo[address]}</span>
						</p>

						<div id="linkwayContainer">
							<!--{if $right>=8}-->
								<!--{if $noShow==1}-->
									<!--{if $resumeInfo['display']==1}-->
									<p id="linkWayBar" class="nolink"><a href="javascript:void(0);" id="btnGetLinkway" class="btnsF14 btn4" style="margin-top:5px;">立即获取联系方式</a>
										<!--<span style="color:#333; font-family:'宋体';font-size:12px;font-weight: normal;">（2星简历需要3个下载点）</span>-->
									</p>
									<!--{else}-->
									<p id="linkWayBar" class="nolink">
										<a class="msg1" href="javascript:;">该份简历已经被求职者设置为半公开状态，请下载企业版APP与TA聊天吧。</a>
									</p>
									<!--{/if}-->
								<!--{else}-->
									<p class="link" style="margin-top:-1px;">
										<span  id="spnBasicMobilePhone"><i class="p"></i><strong>{$resumeInfo['mobile']}</strong><em id="phoneAddr"></em><!--<b>/{$resumeInfo['telephone']}</b>--></span>
										<span ><strong>邮箱：{$resumeInfo['email']}</strong></span>
										<!--{if $resumeInfo['qq']}--><span class="last"><strong>QQ：{$resumeInfo['qq']}</strong></span><!--{/if}-->

									</p>
								<!--{/if}-->
							<!--{else}-->
								<!--{if $resumeInfo['display']==1}-->
								<p id="linkWayBar" class="nolink"><a href="javascript:void(0);" id="btnGetLinkway" class="btnsF14 btn4" style="margin-top:5px;"> 立即获取联系方式</a>
									<!--<span style="color:#333; font-family:'宋体';font-size:12px;font-weight: normal;">（2星简历需要3个下载点）</span>-->
								</p>
								<!--{else}-->
									<p id="linkWayBar" class="nolink">
										<a class="msg1" href="javascript:;">该份简历已经被求职者设置为半公开状态，请下载企业版APP与TA聊天吧。</a>
									</p>
								<!--{/if}-->
							<!--{/if}-->
						</div>
						<!--{if $downloadInfo}-->
							<p class="downloadInfo"><span>*</span>这份简历您上次查看联系方式的时间是：<span>{$downloadInfo}</span>  (超过30天须重新查看联系方式)</p>
						<!--{/if}-->
					</dd>
				</dl>
				<!--/-->

				<!--求职意向-->
				<p class="resume-tit"><strong class="name">求职意向</strong></p>
				<div class="resume-item">
					<ul class="job-inten clearfix">
						<li>
							<span class="gray9">希望从事：</span>
							<span class="gray3">{$resumeInfo[joinOffice]}<!--{if $resumeInfo['joinType']==1}-->(全职)<!--{/if}--><!--{if $resumeInfo['joinType']==2}-->(兼职)<!--{/if}--><!--{if $resumeInfo['joinType']==3}-->(实习)<!--{/if}--></span>
							<span class="gray9"></span>
						</li>
						<li>
							<span class="gray9">职位类别：</span>
							<span class="gray3">{$resumeInfo['joinJobClass']}</span>
						</li>
						<li>
							<span class="gray9">岗位级别：</span>
							<span class="gray3">{$resumeInfo['joblevelInfo']}<!--{if $resumeInfo[chkJoblevel]==1}-->（不低于此级别）<!--{/if}--></span>
							<span class="gray9"></span>
						</li>
						<li>
							<span class="gray9">期望行业：</span>
							<span class="gray3">{$resumeInfo['joinIndustry']}</span>
						</li>
						<li>
							<span class="gray9">期望薪资：</span>
							<span class="gray3"><!--{if $resumeInfo[hideSalary]==1}-->面议<!--{else}-->{$resumeInfo['joinSalaryInfo']}<!--{/if}--><!--{if $resumeInfo[chksalary]==1&&$resumeInfo[hideSalary]==0}-->（不低于此薪资）<!--{/if}--></span>
							<span class="gray9"></span>
						</li>
						<li>
							<span class="gray9">工作地点：</span>
							<span class="gray3">{$resumeInfo['joinCity']}</span>
						</li>
					</ul>
				</div>
				<!--{if $resumeInfo['joinEvaluate']}-->
				<!-- 自我评价 -->
				<p class="resume-tit"><strong class="name">自我评价</strong></p>
				<div class="resume-item">
					<div class="other-box">
						 <div class="clearfix">
							<p class="infor topicContent"><i class="yuan"></i>{$resumeInfo['joinEvaluate']}</p>
						 </div>
					</div>
				</div>
				<!--{/if}-->

				<!--工作经历-->
				<!--{if $resumeInfo[workListInfo]}-->
				<p class="resume-tit"><strong class="name">工作/实习经历</strong></p>
				<div class="resume-item">
					<!--有数据 开始-->
					<div class="exper">
							<!--{loop $resumeInfo[workListInfo] $l}-->
								<div class="clearfix">
									<span class="time">{$l[workStartDate]}<!--{if $l[workEndDate]}-->-{$l[workEndDate]}<!--{else}--> -至今<!--{/if}--><br />[<!--{if $l[workyear]}-->{$l[workyear]}年<!--{/if}--><!--{if $l[workmonth]}-->{$l[workmonth]}个月<!--{/if}-->]</span>
									<div class="box-item">
										<p class="tit">
											<strong class="name"><!--{if $l[WorkJobType]==2}--><span class="tag">兼职</span><!--{/if}--><!--{if $l[WorkJobType]==3}--><span class="tag">实习</span><!--{/if}-->{$l[workOffice]}</strong><u>|</u><strong class="name companyName">{$l[workName]}</strong>
										</p>
										<div class="infor">
											<p class="mgb10"><!--{if $l[workSalary]&&!$l[workHideSalary]}-->{$l[workSalary]}元/月<!--{/if}--><!--{if $l[workHideSalary]}-->薪资保密<!--{/if}--></span> <!--{if $l[WorkJobLevel]}-->- <span class="joblevel" v="{$l[WorkJobLevel]}">{$l['WorkJobLevelInfo']}</span><!--{/if}--> <!--{if $l[WorkComProperty]}-->- <span class="comProperty" v="{$l[WorkComProperty]}">{$l['WorkComPropertyInfo']}</span>，<!--{/if}--><span class="callingContainer" v="{$l[workIndustryId]}">{$l['joinIndustryName']}</span>，<span class="comSize" v="{$l[WorkComSize]}">{$l['WorkComSizeInfo']}</p>
											<div class="cont" >
												{$l[_workContent]}
											</div>

											<ul class="fanwei">
											<!--{if $l['WorkJobLevel']>3}-->
												<li>
													<span>管辖范围：<!--{if $l[WorkManageDempartment]}-->{$l[WorkManageDempartment]}<!--{else}-->未填写<!--{/if}--></span>
												</li>
												<li>
													<span>下属人数：<!--{if $l[WorkSubordinate]}-->{$l[WorkSubordinate]}人<!--{else}-->未填写<!--{/if}--></span>
													<span style="margin-left: 30px">汇报对象：<!--{if $l[WorkReportMan]}-->{$l[WorkReportMan]}<!--{else}-->未填写<!--{/if}--></span>
												</li>
											<!--{/if}-->
											<!--{if $l[WorkLeaveReason]}-->
												<li>
													<span>离职原因：{$l[WorkLeaveReason]}</span>
												</li>
											<!--{/if}-->
											</ul>

										</div>
									</div>
								</div>
							<!--{/loop}-->
					</div>
					<!--有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--教育培训经历-->
				<!--{if $resumeInfo[eduListInfo]||$resumeInfo[trainingListInfo]}-->
				<p class="resume-tit"><strong class="name">教育培训经历</strong></p>
				<div class="resume-item">
					<!--有数据 开始-->
					<div class="less-train">
							<!--{loop $resumeInfo[eduListInfo] $l}-->
								<div class="clearfix eduRows editPanel">
									<span class="time" data-startTime="{$l[_eduDateStart]}" data-endTime="{$l[_eduDateEnd]}">{$l[eduStartDate]}<!--{if $l[eduEndDate]}--> 至 {$l[eduEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
									<div class="box-item">
										<p class="tit">
											<strong class="name labelDegree" v="{$l[eduBackGround]}">{$l['eduBackGroundInfo']}</strong><u>|</u>
											<span class="name labelSchool">{$l[eduName]}</span><u>|</u>
											<span class="name labelMajorDesc" v="{$l[eduSpecialty]}">{$l[eduSpecialty]}</span>
										</p>
										<p class="infor labelDetail">{$l[eduDetail]}</p>
									</div>
								</div>
							<!--{/loop}-->
						<!--{if $resumeInfo[trainingListInfo]}-->
							<!--{loop $resumeInfo[trainingListInfo] $l}-->
							<div class="clearfix eduRows editPanel" data-trainid="{$l[trainingid]}" data-type="1">
								<span class="time" data-startTime="{$l[_trainingDateStart]}" data-endTime="{$l[_trainingDateEnd]}">{$l[trainingStartDate]}<!--{if $l[trainingEndDate]}--> 至 {$l[trainingEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
								<div class="box-item">
									<p class="tit">
										<strong class="name labelDegree">{$l[trainingSpecialty]}</strong><u>|</u>
										<span class="name labelSchool">{$l[trainingName]}</span><u>|</u>
										<span class="name labelMajorDesc" v="{$l[trainingBackGround]}">[证]{$l[trainingBackGround]}</span>
									</p>
									<p class="infor gray9 labelDetail">{$l[trainDetail]}</p>
								</div>
							</div>
							<!--{/loop}-->
						<!--{/if}-->
					</div>
					<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--项目经验-->
				<!--{if $resumeInfo[projectListInfo]}-->
				<p class="resume-tit"><strong class="name">项目经验</strong></p>
					<div class="resume-item">
						<!--有数据 开始-->
						<div class="project-expr">
							<!--{loop $resumeInfo[projectListInfo] $l}-->
								<div class="clearfix">
									<span class="time">{$l[projectStart]}<!--{if $l[projectEnd]}--> 至 {$l[projectEnd]}<!--{else}--> - 至今<!--{/if}--></span>
									<div class="box-item">
										<p class="tit">
											<strong class="name">{$l[projectName]} </strong><u>|</u><span class="name">担任：{$l[projectDuty]}</span>
										</p>
										<div class="infor">
											 <p class="pfc">
											 <i class="jpFntWes">&#xf10d;</i>{$l[projectIntr]}<i class="jpFntWes">&#xf10e;</i></p>
											 {$l[projectExperience]}
										</div>
									</div>
								</div>
							<!--{/loop}-->
						</div>
						<!--/有数据 结束-->
					</div>
				<!--{/if}-->
				<!--/-->

				<!--语言能力-->
				<!--{if $resumeInfo[languageListInfo]}-->
				<p class="resume-tit"><strong class="name">语言能力</strong></p>
				<div class="resume-item">
					 	<!--有数据 开始-->
						<ul class="clearfix tag-box">
						<!--{loop $resumeInfo[languageListInfo] $l}-->
								<li>
									<strong class="name">{$l['languageTypeInfo']}</strong>|<span class="cd"><strong>{$l['langSkillLevelInfo']} </strong><u>|</u>
									<i>{$l[langCert]}</i></span>
								 </li>
						<!--{/loop}-->
						</ul>
						<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--技能专长-->
				<!--{if $resumeInfo[skillListInfo]}-->
				<p class="resume-tit"><strong class="name">技能专长</strong></p>
				<div class="resume-item">
						<!--有数据 开始-->
						<ul class="clearfix tag-box">
						<!--{loop $resumeInfo[skillListInfo] $l}-->
							<li>
								<strong class="name">{$l[SkillName]}</strong>|<span class="cd">{$l['SkillLevelInfo']}</span>
							</li>
						<!--{/loop}-->
						</ul>
						<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--证书-->
				<!--{if $resumeInfo[certificateListInfo]}-->
				<p class="resume-tit"><strong class="name">证书</strong></p>
				<div class="resume-item">
						<!--有数据 开始-->
						<ul class="clearfix tag-box">
						<!--{loop $resumeInfo[certificateListInfo] $l}-->
							<li>
								<strong class="name">{$l[certificateName]}</strong>|<span class="cd">{$l[CertGainTimeYear]}年获得</span>
							</li>
						<!--{/loop}-->
						</ul>
						<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--其他信息-->
				<!--{if $resumeInfo[otherinfoListInfo]}-->
				<p class="resume-tit"><strong class="name">其他信息</strong></p>
				<div class="resume-item">
						<!--有数据 开始-->
						<div class="other-box">
						<!--{loop $resumeInfo[otherinfoListInfo] $l}-->
							<div class="clearfix">
							 	<strong class="time">{$l[AppendType]}</strong>
							 	<p class="infor topicContent"><i class="yuan"></i>{$l[TopicContent]}</p>
							</div>
						<!--{/loop}-->
						</div>
						<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--我的作品-->
				<!--{if $resumeInfo[zuopinListInfo]}-->
				<p class="resume-tit"><strong class="name">我的作品</strong></p>
				<div class="resume-item">
					<!--有数据 开始-->
					<ul class="my-case clearfix">
						<!--{if $resumeInfo['zuopinListInfo']}-->
							<!--{loop $resumeInfo['zuopinListInfo'] $l}-->
								<li data-achievementid="{$l['zuopinid']}" data-des="{$l['AchievementDescription']}" data-name="{$l['AchievementName']}" style="display: list-item;">
									<p class="img">
										<a href="javascript:" data-achievementid="{$l['zuopinid']}"><!--{if $l['picListArr'][0]['extension']}--><img class="defimg" src="http://cdn.597.com/img/v2/resumeM/{$l['picListArr'][0]['extension']}.jpg"><!--{else}--><img src="http://pic.{ROOT_DOMAIN}/works/{$l['picListArr'][0]['picPath']}"><!--{/if}--></a>
										<a href="javascript:" class="name">{$l['AchievementName']}</a>
									</p>
									<div class="imgGroup" style="display:none">
									<!--{loop $l['picListArr'] $ll}-->
										<a class="fancybox-thumbs{$l['zuopinid']}" data-fancybox-group="thumb" style="display:none" extension="{$ll['picExtension']}" onclick="return false;" <!--{if $ll['extension']}-->href="http://cdn.597.com/img/v2/resumeM/{$ll['extension']}_big.jpg" real_heaf="http://pic.{ROOT_DOMAIN}/works/{$ll['picPath']}"<!--{else}-->href="http://pic.{ROOT_DOMAIN}/works/{$ll['picPath']}"<!--{/if}-->></a>
										<span style="display:none" v="{$ll['id']}">{$ll['picName']}</span>
										<script type="text/javascript">fancboxid.push({$l['zuopinid']});</script>
									<!--{/loop}-->
									</div>
								</li>
							<!--{/loop}-->
						<!--{/if}-->
					</ul>
					<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

				<!--实践经验-->
				<!--{if $resumeInfo[practiceListInfo]}-->
				<p class="resume-tit"><strong class="name">实践经验</strong></p>
				<div class="resume-item">
						<!--有数据 开始-->
						<div class="project-expr" >
							<!--{loop $resumeInfo[practiceListInfo] $l}-->
								<div class="clearfix practiceRows editPanel" data-practiceid="{$l['practiceid']}">
									<span class="time" data-startTime="{$l['PracticeTimeStart']}" data-endTime="{$l['PracticeTimeEnd']}">{$l['_PracticeTimeStart']}<!--{if $l[_PracticeTimeEnd]}--> 至 {$l['_PracticeTimeEnd']}<!--{else}--> - 至今<!--{/if}--></span>
									<div class="box-item">
										<p class="tit">
											<span class="oper"><a href="javascript:" title="编辑" class="edt">编辑</a><a href="javascript:" class="del" title="删除">删除</a></span>
											<strong class="name practiceName">{$l['PracticeName']}</strong>
										</p>
										<div class="infor practiceDetail">{$l['PracticeDetail']}</div>
									</div>
								</div>
							<!--{/loop}-->
						</div>
						<!--/有数据 结束-->
				</div>
				<!--{/if}-->
				<!--/-->

		</div>
	</div>
	<!--/-->
</div>
		<!--主体结束-->
		 <iframe id="printIframe"  height="0" width="0" frameborder="0"></iframe>
		<!--#include virtual="/templates/default/person/footer.htm" -->
	</div>

	<style>
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
		.fancybox-prev {left: -100px;}
		.fancybox-next {right: -100px;}
		.fancybox-nav span {position: absolute;top: 50%;width: 36px;height: 34px;margin-top: -18px;cursor: pointer;z-index: 8040}
		.fancybox-prev span {left: 10px;background-position: 0 -36px;}
		.fancybox-next span {right: 10px;background-position: 0 -72px;}
		.fancybox-tmp {position: absolute;top: -99999px;left: -99999px;visibility: hidden;max-width: 99999px;max-height: 99999px;overflow: visible !important;}
		/* Overlay helper */
		.fancybox-lock {overflow: hidden !important;width: auto;}
		.fancybox-lock body {overflow: hidden !important;}
		.fancybox-lock-test {overflow-y: hidden !important;}
		.fancybox-overlay {position: absolute;top: 0;left: 0;overflow: hidden;display: none;z-index: 8010;background: url(http://cdn.597.com/img/comshow/fancybox_overlay.png);}
		.fancybox-overlay-fixed {position: fixed;bottom: 0;right: 0;}
		.fancybox-lock .fancybox-overlay {overflow: auto;overflow-y: scroll;}
		/* Title helper */
		.fancybox-title {visibility: hidden;font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;position: relative;text-shadow: none;z-index: 8050;}
		.fancybox-opened .fancybox-title {visibility: visible;}
		.fancybox-title-float-wrap {height:25px;}
		.fancybox-title-float-wrap .child {line-height:24px;height:24px;text-align:right}
		.fancybox-title-float-wrap .child a{color:#3d84b8;}
		.fancybox-title-float-wrap .child font{color:#333}
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
	</style>
</body>



	<script type="text/javascript">
		var isDownLoad = {$isDownLoad},
			isJoin = {$isJoin},
			noShow = {$noShow},
			resume_id = "{$resumeInfo[_rid]}",
			apply_id = "{$_join_id}",
			src="network",
			recommendid = '0';


		jpjs.use('tools.cookie, widge.overlay.jpDialog, widge.overlay.confirmBox, product.jpCommon',
		function(cookie, Dialog, confirmBox, jpCommon, $, util){
			var isIE = !window.XMLHttpRequest,
				isIE6 = !-[1,] && isIE;
			$ = $.extend(jpCommon);

			<!--{if $right>7}-->
			searchAttribution('{$resumeInfo[mobile]}');
			<!--{/if}-->

			resetMenu();

			//历史记录
				var historyContainer = $('#historyContainer'),
					historyList = historyContainer.children('ul'),
					historyItem = historyList.children('li'),
					historyMore = historyItem.last(),
					historyShowMsg = '隐藏历史记录<i class="jpFntWes">&#xf106;</i>',
					historyHidMsg = '显示历史记录<i class="jpFntWes">&#xf107;</i>';
				$('#historyContainer').on('click', '#btnHistory, #btnMoreHistory', function(e){
					var target = $(e.currentTarget),
						idName = target.attr('id');
					if(idName === "btnHistory"){
						if(target.attr('data-status') == 1){
							historyItem.hide();
							target.attr('data-status', 0).html(historyHidMsg);
						} else {
							historyList.children('.history30').show();
							if(historyMore.length){
								historyMore.show();
							}
							target.attr('data-status', 1).html(historyShowMsg);
						}
					} else {
						historyItem.show();
						historyMore.hide();
					}
				});

			//打印
				$('#btnPrintRsume').click(function(){
					var url = '/explod.html?act=print&rid='+resume_id;
					if($.browser.msie){
						//$(this).attr('href',url).attr('target','_blank');	IE上面这种打法不行了，需要用下面这种
						$('#printIframe').attr("src", url);
					}else{
						$('#printIframe').attr("src", url);
					}
				});

			//转发到邮箱
				var email = new Dialog({
							idName: 'forw-email',
							title: '转发到邮箱',
							close: 'x',
							isAjax: false,
							initHeight: 100,
							width: 480
						});
				email.setContent('<div class="forw-email-box" id="forw-email"><strong>将你的简历发送到以下邮箱<span class="error"></span></strong><br /><textarea>{$com[comEmail]}</textarea><span>多个邮箱地址请用分号“；”隔开，最多可填写10个邮箱</span><div><input type="text" style="display:inline-block;vertical-align:middle;width:80px;" id="catcha" name="catcha" class="text" data-seed="54c339da5e4bf"/><img id="imgCode" src="/api/web/authCode.api?key=resumeCode" style="display:inline-block;vertical-align:middle;margin:0 5px;"/><a id="btnCode" href="javascript:void(0)" style="display:inline-block;vertical-align:middle;">换一换</a></div></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="javascript:void(0)" id="btnEmailSubmit">确定</a><a class="btn3 btnsF12" href="#" id="btnEmailClose">取消</a></div>');
				//验证邮箱
				$("#btnEmailSubmit").on("click",function(){
					var emailArr = new Array(),emailVal = $("#forw-email textarea").val();
					var seed = $("#catcha").attr("data-seed");
					var txtCatcha = $("#catcha").val();
					if(emailVal.indexOf(";") != -1){
						emailArr = $("#forw-email textarea").val().split(";");
					}else if(emailVal.indexOf("；") != -1){
						emailArr = $("#forw-email textarea").val().split("；");
					}else if(emailVal.indexOf(",") != -1){
						emailArr = $("#forw-email textarea").val().split(",");
					}else if(emailVal.indexOf("，") != -1){
						emailArr = $("#forw-email textarea").val().split("，");
					}else if(emailVal.indexOf("。") != -1){
						emailArr = $("#forw-email textarea").val().split("。");
					}else if(emailVal.indexOf(" ") != -1){
						emailArr = $("#forw-email textarea").val().split(" ");
					}else{
						emailArr.push(emailVal);
					}
					if(emailArr.length > 10){
						$("#forw-email .error").html("最多可填写10个邮箱！");
						return false;
					}
					for(var i = 0 ;i < emailArr.length;i++){
						if(!/^[a-z0-9]([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z0-9]+([\.][a-z0-9]+)?([\.][a-z0-9]{2,3})?$/i.test(emailArr[i])){
							$("#forw-email .error").html("有不正确的邮箱地址！");
							return false;
						}
					}

					$.ajax({
						url : "/explod.html",
						type : "POST",
						dataType : "json",
						data : {
							act : 'sendmy',
							rid : resume_id,
							txtEmail : emailArr.join(";"),
							seed : seed,
							txtCatcha : txtCatcha
						},
						success : function(data) {
							if (data.status>0) {
								confirmBox.timeBomb('邮件发送成功！', {
									name : "success",
									timeout : 1000,
									width : 196
								});
								email.hide();
							} else {
								confirmBox.timeBomb(data.error, {
									name : "warning",
									timeout : 1000,
									width : 175
								});
								if (data.error == "请输入验证码" || data.error == "验证码错误") {
									email.query('#catcha').focus();
									email.query('#catcha').val('');
									email.query("#btnCode").click();
								}
							}
						}
					});
				});
				$("#btnEmailClose").on("click",function(){
					email.hide();
				});
				$("#btnforwemail").click(function(){
					email.show();
					return false;
				});
				email.query("#btnCode").on("click", function() {
					$(this).prev('img').attr('src', '/api/web/authCode.api?key=resumeCode&r='+Math.random());
					return false;
				});

				var dialog = new Dialog({
					idName: 'save-comp',
					title: '保存到电脑',
					close: 'x',
					isAjax: true,
					initHeight: 100,
					width: 500
				})


			//保存到电脑
				var saveComp = new Dialog({
					idName: 'save-comp',
					title: '保存到电脑',
					close: 'x',
					isAjax: false,
					initHeight: 100,
					width: 500
				}),
				eventName = [
					'#btnSaveComputer',
					'#btnNetWorkSuccessInvite',
					'#btnNetWorkInvite',
					'#btnFairInvite',
					'#btnJeject',
					'#btnGetLinkway2',
					'#btnRemark',
					'#btnFav',
					'#relLnk',
					'#btnPrint',
					'#btnDelete',
					'#btnReport'
				],
				saveComputerHTML = [
					'<div class="save-comp-box"><span class="gray9">文件另存为：</span>',
					'<ul class="clearfix"><li class="doc">',
					'<a href="/resume/worddown/resumeid-' + resume_id + '-src-'+src+'-applyid-'+apply_id+'">.doc</a>',
					'</li><li class="html">',
					'<a href="/resume/htmldown/resumeid-' + resume_id + '-src-'+src+'-applyid-'+apply_id+'">.html</a>',
					'</li><li class="pdf">',
					'</li></ul></div>'
				].join(''),
				linkwayHTML = [
					'<p class="link">',
					'<span {{phoneDisplay}}><i class="{{phoneStatus}}"></i><strong>{{phone}}</strong><em id="phoneAddr"></em></span>',
					'<span {{mailDisplay}}><i class="{{mailStatus}}"></i><strong>{{mail}}</strong></span>',
					'<span {{qqDisaplay}} class="last"><i class="{{qqStatus}}"></i><strong>{{qq}}</strong></span></p>'
				].join('');
				var pWidth = 70, fontWidth = 18;

				$("#btnsavecomputer").click(function() {
					saveComp.setContent('<div class="save-comp-box"><span class="gray9">文件另存为：</span><ul class="clearfix"><li class="doc"><a href="/explod.html?act=word&rid=' + resume_id + '">.doc</a></li><li class="html"><a href="/explod.html?act=html&rid=' + resume_id + '">.html</a></li></ul></div>');
					saveComp.show();
					return false;
				});

			function resetMenu(){
				if (isDownLoad){
					$("#btnGetLinkway2").hide();
					$("#btnNetWorkInvite").show();
					//$(".link-list").show();
				}else{
					$("#btnGetLinkway2").show();
					$("#btnNetWorkInvite").hide();
					//$(".link-list").hide();
				}
				if (isJoin){
					$("#btnJeject").show();
				}else{
					$("#btnJeject").hide();
				}
				if (noShow=='1'){
					$("#btnGetLinkway2").show();
				}
			}
			function getDomID(name){
				return name.replace('#', '');
			}
			function showModel(icon, msg){
				var content = msg.replace(/<a .*<\/a>/g,'');
				confirmBox.timeBomb(msg, {
					name: icon,
					width: pWidth + content.length * fontWidth
				});
			}
			/*
			function searchAttribution(tel) {
				//获取号码归属地
				var regex = /^1[3|4|5|8][0-9]\d{4,8}$/,
					phoneAddr = $('#phoneAddr');
				if(!phoneAddr.length) return;
				if(tel && !regex.test(tel)){
					phoneAddr.html('（未知）');
				} else {
					var url = 'http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=' + (tel || '');
					if (isIE6) {
						url = 'https://www.baifubao.com/callback?cmd=1059&callback=phone&phone=' + (tel || '');
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
								if(json.data.area == '' || json.data.area == undefined){
									phoneAddr.html('（未知）');
								} else {
									phoneAddr.html('（' + json.data.area + '）');
								}
							} else {
								if(json.province == ''||json.province == undefined){
							  		phoneAddr.html('（未知）');
								}else{
									phoneAddr.html('（'+json.province+'）');
								}
							}
						 },
						 error:function (){
							 phoneAddr.html('（未知）');
						 }
					 });
				}
			}
			*/
			function searchAttribution(tel) {
				//获取号码归属地
				var regex = /^1[3|4|5|7|8][0-9]\d{4,8}$/,
					phoneAddr = $('#phoneAddr');

				if(!phoneAddr.length) return;
				if(tel && !regex.test(tel)){
					phoneAddr.html('（未知）');
				} else {
					var url = 'http://api.597.com/_mobile/index.php?m=' + (tel || '');

					$.ajax({
						async:false,
							type: "post",
							url:url,
							dataType: "jsonp",
							contentType: "application/x-www-form-urlencoded; charset=utf-8",
							jsonp: "callback",
							success: function(json){
							 	if(json.city){
							 		phoneAddr.html('（'+json.provice+"-"+json.city+'）');
								}else{
									phoneAddr.html('（未知）');
								}
							},
							error:function (){
								phoneAddr.html('（未知）');
							}
						});
				}
			}
			function openRemark(idName){
				if(resume_id != undefined && resume_id > 0){
					var lastName = idName === getDomID(eventName[6]) ? ('-v-' + Math.random()) : '';
					dialog.resetSize('auto').setContent({
						title:'备注',
						content:'/resumeremark/index/resume_id-' + resume_id + lastName
					}).off('loadComplete').on('loadComplete',function(){
						this.oneCloseEvent('#btnCancel');
					}).show();
				} else {
					showModel('fail', '请选择一个简历后再进行备注');
				}
			}

			//获取联系方式
			$('#btnGetLinkway').on('click', function(){
				getLinkway();
			});
			$('#btnGetLinkway2').on('click', function(){
				getLinkway();
			});
			function getLinkway(){
				/*
				if (noShow){
						dialog.resetSize('auto').setContent({
							title: '获取联系方式',
							content: '<p>&nbsp;</p><p style="padding:20px;">请先开通会员服务再查看联系方式，<a href="/company/service/myservice.html" target="_blank">查看或购买服务</a></p><p>&nbsp;</p>'
						}).off('loadComplete').on('loadComplete',function(){
							this.oneCloseEvent('#btnDeduct', function(){
								$.getJSON('/api/web/company.api',{
									act:'getlinkway',
									rid: resume_id
								}, function(json){
									resultLinkWay(json);
								});
							});
						}).show();
					return;
				}
				*/
				//TODO 判断是否关闭了扣点的提示
				var cookieValue = readCookie('downresumeprompt');
				if (cookieValue && cookieValue.length > 0){
					$.getJSON('/api/web/company.api',{
						act:'getlinkway',
						rid: resume_id
					} ,function(json){
						resultLinkWay(json);
					});
				} else {
					if(!isDownLoad){
						dialog.resetSize('auto').setContent({
							title: '获取联系方式',
							content: '/company/resume/linkway.html?rid='+resume_id
						}).off('loadComplete').on('loadComplete',function(){
							this.oneCloseEvent('#btnDeduct', function(){
								$.getJSON('/api/web/company.api',{
									act:'getlinkway',
									rid: resume_id
								}, function(json){
									resultLinkWay(json);
								});
							});
						}).show();
					}else{
						showModel('fail', '已经获取该简历的联系方式，无需重复获取！');
					}
				}
				function resultLinkWay(json){
					if(json.status>0){
						var linkwayContainer = $('#linkwayContainer'),
							nolink = linkwayContainer.children('#linkWayBar'),
							dataObj = {};
						if(nolink.length){
							if(json.mobile){
								dataObj['phoneStatus'] = "p";
							} else {
								dataObj['phoneStatus'] = "nop";
							}
							dataObj['phone'] = json.mobile || '';
							dataObj['phoneDisplay'] = dataObj['phone'] ? '' : 'style="display:none"';
							searchAttribution(dataObj['phone']);

							if(json.emailCheck == 1){
								dataObj['mailStatus'] = 'm';
							} else {
								dataObj['mailStatus'] = 'nom';
							}
							dataObj['mail'] = json.email || '';
							dataObj['mailDisplay'] = dataObj['mail'] ? '' : 'style="display:none"';

							dataObj['qq'] = json.qq || '';
							dataObj['qqDisplay'] = dataObj['qq'] ? '' : 'style="display:none"';
							dataObj['qqStatus'] = dataObj['qq'] ? 'q' : 'noq';

							linkwayContainer.html(util.string.replace(linkwayHTML, dataObj));
							isDownLoad=true;
							resetMenu();

						}
						searchAttribution(json.mobile);
					}else{
						showModel('fail', json.msg);
						return;

					}
				}
			}

			<!--{if $resumeInfo['display']==0}-->
				//2017.05.27 zy 产品说去掉，有问题他跟王总沟通
				// dialog.resetSize('300').setContent({
				// 	title: '系统提示',
				// 	content: '<p>&nbsp;</p><p style="padding:20px; text-align:center; font-size:16px;">该简历目前处于保密状态！</p><p>&nbsp;</p>'
				// }).off('loadComplete').on('loadComplete',function(){

				// }).show();
			<!--{/if}-->

			<!--{if $cid&&$com['licenceCheck']<1}-->//执照未审核
				dialog.resetSize('400').setContent({
					title: '系统提示',
					content: '<p>&nbsp;</p><p style="padding:10px; text-align:center; font-size:12px;">营业执照认证未通过,请先上传营业执照认证 <a href="/company/account/licence.html">点击立即认证></a></p><p>&nbsp;</p>'
				}).on('loadComplete',function(){
					this.oneCloseEvent('#btnNetWorkInvite',"click");
				}).show();
			<!--{/if}-->

			//面试邀请
				$('#btnNetWorkInvite').on('click', function(){
					if(resume_id != undefined ){
						dialog.resetSize('auto').setContent({
							isOverflow: true,
							title: '邀请简历',
							content:'/company/resume/inviteResume.html?rid=' + resume_id + '&join_id='+apply_id
						}).off('loadComplete').on('loadComplete',function(){
							this.oneCloseEvent('#btnSendInvite');
						}).show();
					} else {
						showModel('fail', '请选择一个简历后再进行邀请');
					}
				});

			//拒绝
				$('#btnJeject').on('click', function(){
					<!--{if $uid}-->
						var jejectUrl = '/api/web/'+'company.api?act=noInvite&rid=' + resume_id + '&apply_id='+apply_id+'&v=' + Math.random();
					<!--{else}-->
						var jejectUrl = '/api/web/'+'company.api?act=noInvite&rid=' + resume_id + '&apply_id='+apply_id+'&cidHash='+{$cid}+'&v=' + Math.random();
					<!--{/if}-->

					$.getJSON(jejectUrl, function(result){
						if(result.status>0) {
							showModel('success', '已婉言拒绝');
						} else {
							showModel('fail', result.msg);
						}
					});
				});

			//审核通过
				$('#btnIsCheckOk').on('click', function(){
					$.getJSON('/api/web/'+'admin.api?act=isCheckOk&rid=' + resume_id + '&v=' + Math.random(), function(result){
						if(result.status>0) {
							//$('#btnIsCheckOk').css('display','none');
							showModel('success', '简历通过审核');
						} else {
							showModel('fail', result.error);
						}
					});
				});
			//审核不通过
				$('#btnIsCheckNo').on('click', function(){
					if(resume_id != undefined ){
						dialog.resetSize('auto').setContent({
							isOverflow: true,
							title: '屏蔽备注',
							content:'/company/resume/isCheckNo.html?rid=' + resume_id
						}).off('loadComplete').on('loadComplete',function(){
							//$('#btnIsCheckNo').css('display','none');
							this.oneCloseEvent('#btnSendInvite');
						}).show();
					}/* else {
						showModel('fail', '请选择一个简历后再进行邀请');
					}*/
				});

			//备注
			$('#btnRemark').on('click', function(){
				if(resume_id != undefined){
					dialog.resetSize('auto').setContent({
						title:'备注',
						content:'/company/resume/note.html?rid=' + resume_id
					}).off('loadComplete').on('loadComplete',function(){
						this.oneCloseEvent('#btnCancel');
					}).show();
				} else {
					showModel('fail', '请选择一个简历后再进行备注');
				}
			});
			//收藏
			$('#btnFav').on('click',function(){
				if(resume_id != undefined){
					var btnFavType=$(this).attr('rel');
					$.getJSON('/api/web/company.api',{
						act:btnFavType,
						rid:resume_id,
						r:Math.random().toString().replace('.','0')
					},function(json){
						if(json && json.status<1){
							showModel('fail', json.msg);
							return;
						}
						/*
						if(json.fav_type == "add"){
							dialog.resetSize('auto').setContent({
								title: '标记为感兴趣',
								content: '/mark/markfav-resumeid-9313282-operate-fav.html/'
							}).off('loadComplete').on('loadComplete',function(){
								this.oneCloseEvent('#btnFavSava');
								target.parent().addClass('cur');
							}).show();
							return;
						}
						*/
						if(btnFavType=='favourite_save'){
							$('#btnFav').attr('rel','favourite_del');
							$('#btnFav').parent().find('span').html('取消收藏');
							$('#btnFav').parent().addClass('cur');
							showModel('success', '收藏成功');
						}else{
							$('#btnFav').attr('rel','favourite_save');
							$('#btnFav').parent().find('span').html('收藏');
							$('#btnFav').parent().removeClass('cur');
							showModel('success', '取消收藏成功');
						}

						return;

					});
				} else {
					showModel('fail', '请选择一个简历后再进行备注');
				}

			});
			//举报
			$('#btnReport').on('click',function(){
				dialog.resetSize(460).setContent({
					isOverflow: true,
					title: '举报联系方式',
					content: '/company/report.html?rid='+resume_id+'&phone='+'{$resumeLinkWay['mobile']}'
				}).off('loadComplete').on('loadComplete',function(){
					this.oneCloseEvent('#btnReportSubmit');
				}).show();
			});

				$('#right-operat').on('click', eventName.join(','), function(e){
					var target = $(e.currentTarget),
						idName = target.attr('id');
					switch(idName){
						case getDomID(eventName[0]):
							dialog.resetSize(500).setContent(saveComputerHTML).show();
							break;
						case getDomID(eventName[1]):
							dialog.resetSize('auto').setContent({
								title: '同意面试',
								content: '/invite/invitesingleshow/applyID-'+ apply_id + '-v-' + Math.random()
							}).off('loadComplete').on('loadComplete',function(){
								this.oneCloseEvent('#btnSendInvite');
							}).show();
							break;
						case getDomID(eventName[2]):
							if(resume_id != undefined && resume_id > 0){
								dialog.resetSize('auto').setContent({
									isOverflow: true,
									title: '邀请简历',
									content:'/invite/invitesingleshow/resumeID-' + resume_id + ''
								}).off('loadComplete').on('loadComplete',function(){
									this.oneCloseEvent('#btnSendInvite');
								}).show();
							} else {
								showModel('fail', '请选择一个简历后再进行邀请');
							}
							break;
						case getDomID(eventName[3]):
							openRemark(idName);
							break;
						case getDomID(eventName[4]):
							// 婉拒求职者
							$.getJSON('/apply/refuse/'+'op-refuse-ids-' + apply_id + '-v-' + Math.random(), function(result){
								if(result.success) {
									showModel('success', '已婉言拒绝');
								} else {
									showModel('fail', result.error);
								}
							});
							break;
						case getDomID(eventName[5]):
							getLinkway();
							break;
						case getDomID(eventName[6]):
							openRemark(idName);
							break;
						case getDomID(eventName[7]):
							$.getJSON('/fav/fav/',{
								resume_id:resume_id,
								r:Math.random().toString().replace('.','0')
							},function(json){
								if(json && json.error){
									showModel('fail', json.error);
									return;
								}
								if(json.fav_type == "add"){
									dialog.resetSize('auto').setContent({
										title: '标记为感兴趣',
										content: '/mark/markfav-resumeid-9313282-operate-fav.html/'
									}).off('loadComplete').on('loadComplete',function(){
										this.oneCloseEvent('#btnFavSava');
										target.parent().addClass('cur');
									}).show();
									return;
								}
								if(json.fav_type == "cancel"){
									showModel('success', '取消感兴趣成功');
									target.parent().removeClass('cur');
									return;
								}

							});
							break;
						case getDomID(eventName[8]):
							dialog.resetSize('auto').setContent({
								title: '转发到邮箱',
								content: '/resume/wordsend/resumeid-'+resume_id+'-src-'+src+'-applyid-'+apply_id+''
							}).off('loadComplete').on('loadComplete',function(){
								this.oneCloseEvent('#btnSendWordToEmail');
							}).show();
							break;
						case getDomID(eventName[9]):
							var url = '/resume/htmlprint/resumeid-'+resume_id+'-src-'+src+'-applyid-'+apply_id+'';
							if(isIE){
								target.attr('href',url).attr('target','_blank');
							} else {
								$('#printIframe').attr("src", url);
							}
							break;
						case getDomID(eventName[10]):
							confirmBox.confirm('您确定将简历放入到回收站', null, function(){
								var self = this;
								$.getJSON('/apply/DeleteApply/'+'op-del-ids-' + apply_id + '-v-'+Math.random(),function(result){
									if(result.success) {
										showModel('success', '已放入回收站');
									} else {
										showModel('fail', result.error);
									}
									self.hide();
								});
							});
							break;
						case getDomID(eventName[11]):
							dialog.resetSize('auto').setContent({
								isOverflow: true,
								title: '举报联系方式',
								content: ''
							}).off('loadComplete').on('loadComplete',function(){
								this.oneCloseEvent('#btnReportSubmit');
							}).show();
							break;
					}
				})



			//找TA聊聊
			var bangongkai = new Dialog({
				idName: 'add-black',
				title: '和TA聊聊',
				close: 'x',
				isAjax: false,
				initHeight: 0,
				width: 460
			});
			$(".msg2, .msg1").click(function() {

				bangongkai.setContent('<div style="text-align:center;overflow:hidden;"><h1 style="margin-top:20px;">下载597企业版app</h1><img style="width:200px;" src="http://cdn.597.com/www/img/brus/codeCom.png" style="width: 100%;" alt=""></div><div id="black-tips" style="text-align:center;padding:10px;line-height:25px;background-color:#fffcf2;margin:15px;color:#999">下载597企业版app和求职者实时聊天。</div>');
				bangongkai.show();
				return false;
			});
		});

		//图片效果
			jpjs.use('jpjob.fancybox-thumbs', function($){

				$.each(fancboxid, function(index, val){
					$('.fancybox-thumbs' + val).fancybox({
						closeBtn  : true,
						arrows	: true,
						title : function(current){
							if($(this).attr('extension')=='jpg' || $(this).attr('extension')=='bmp' || $(this).attr('extension')=='gif' || $(this).attr('extension')=='jpeg' || $(this).attr('extension')=='png'){
								return "<a href='"+$(this).attr('href')+"' target='_blank'>查看原图</a>";
							}
							else {
								return "<a href='"+$(this).attr('real_heaf')+"' target='_blank'>下载文件</a>";
							}
						},
						maxWidth:1000,
						maxHeight:600,
						helpers:  {
							title : {
								type : 'float'
							}
						}
					});
				});
				$('.my-case').on('click', '.img a', function(e){
					var item = $(e.currentTarget),
						attrid = item.attr('data-achievementid');
					$('.fancybox-thumbs' + attrid).eq(0).trigger('click');
				});
			});
			// 读取Cookie
			function readCookie(name)
			{
				var cookieValue = '';
				var search = name + '=';
				if (document.cookie.length > 0)
				{
					var offset = document.cookie.indexOf(search)
					if (offset != -1)
					{
						offset += search.length;
						var end = document.cookie.indexOf(';', offset);
						if (end == -1) end = document.cookie.length;
						cookieValue = unescape(document.cookie.substring(offset, end));
					}
				}
				return cookieValue;
			}

	</script>

</html>