<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf">
<title>{$resumeInfo['realname']}的简历-597人才网</title>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/597.js"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<!–[if lt IE9]>
<script src="//cdn.{ROOT_DOMAIN}/js/html5.js?v=2017" charset="utf-8"></script>
<![endif]–>
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/css/jquery.boxy.css">
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/v2-reset.css?v=20150821" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/perback.css?v=20150722" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-widge.css?v=20151122" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-resume.css?v=20150930" />
	<link href="//cdn.{ROOT_DOMAIN}/crm/css/Resume1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20151117"></script>
<script type="text/javascript">
window.CONFIG = {
	HOST: 'http://cdn1.597.com/min/??',
	COMBOPATH: '/js/v2/'
}
var fancboxid = [];
</script>
<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20151117"></script>
<script type="text/javascript">
	jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
<style type="text/css">
	li,p{margin:0; padding: 0;}
	ul,li {list-style-type: none;}
	body {text-align:left; background: url("//cdn.{ROOT_DOMAIN}/images/bg15.gif");}
	html{overflow:scroll;}
	table {border-collapse:separate; border-spacing:1px; }
	.border1 table td {padding:3px 4px;}
</style>
<body topmargin="0" marginheight="0" marginwidth="0" leftmargin="0" background="//cdn.{ROOT_DOMAIN}/images/bg15.gif">
<div id="{$resumeInfo[_rid]}" style="display:block; margin:0 auto; width:760px;">
	<span id="resume_{$key}"></span>
		<table width="778" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td height="148" valign="top" background="//cdn.{ROOT_DOMAIN}/images/bg10.gif">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td height="65">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td height="30" align="center"><strong class="title"><span id="lbl_realname">{$resumeInfo['realname']} -&nbsp;</span>个人简历</strong><span class="navy">（NO: {$resumeInfo['_rid']}）</span>
										<a href="{$url}" style="float:right; color:#ff0; text-decoration:underline; margin:0 30px 0 0; ">返回新版简历</a>
									</td>
								</tr>
							</tbody>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td height="10"></td>
								</tr>
								<tr>
									<td height="20" align="center"><!--{if $joinJobInfo['jname']}--><font color="#FF0000">应聘职位：</font>{$joinJobInfo['jname']}&nbsp;&nbsp;<!--{/if}--><font color="#FF0000">目前供职情况：</font>{$resumeInfo['_jobState']} ({$resumeInfo['_joinTime']})</td>
								</tr>
								<tr>
									<td height="20" align="center">[更新日期]：<span class="jl">{$resumeInfo[_updateTime]}</span></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<table width="778" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td background="//cdn.{ROOT_DOMAIN}/images/bg11.gif" style="padding-top:5px;padding-bottom:5px;"><table width="735" border="0" align="center" cellpadding="0" cellspacing="0" class="border1">
						<tbody>
							<tr>
								<td align="center" style="padding-top:5px;padding-bottom:5px;">
								<table width="700" border="0" cellpadding="4" cellspacing="1" bgcolor="#c9c9c9">
									<tbody>
										<tr>
											<td width="80" bgcolor="#f6f6f6"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 基本信息 </td>
											<td colspan="3" bgcolor="#f6f6f6">&nbsp;</td>
											<td width="150" align="center" bgcolor="#f6f6f6"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 个人相片 </td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">姓　　名：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resumeInfo[realname]}</td>
											<td width="80" bgcolor="#FFFFFF">性　　别：</td>
											<td bgcolor="#FFFFFF" class="jl"><!--{if $resumeInfo[gender]==1}-->男<!--{else}-->女<!--{/if}--></td>
											<td rowspan="8" valign="top" bgcolor="#FFFFFF">
											<!--个人照片-->
												<table width="100%" border="0" cellspacing="0" class="text01">
													<tbody>
													  	<tr>
															<td align="center"><img src="{$resumeInfo['attachment']}" width="135" height="160"></td>
														</tr>
													</tbody>
												</table>
											<!--个人照片结束-->
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td height="30" align="center"></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">政治面貌：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resumeInfo['politicalInfo']}</td>
											<td width="80" bgcolor="#FFFFFF">出生年月：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resumeInfo[birthday]}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">年龄：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resumeInfo['age']}</td>
											<td width="80" bgcolor="#FFFFFF">婚姻状况：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resumeInfo['marriageInfo']}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">身　　高：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl"><!--{if $resumeInfo[stature]>0}-->{$resumeInfo[stature]}cm<!--{else}-->未填写<!--{/if}--></td>
											<td width="80" bgcolor="#FFFFFF">体　　重：</td>
											<td bgcolor="#FFFFFF" class="jl"><!--{if $resumeInfo[avoirdupois]>0}-->{$resumeInfo[avoirdupois]}kg<!--{else}-->未填写<!--{/if}--></td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">学　　历：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resumeInfo['maxEduInfo']}</td>
											<td width="80" bgcolor="#FFFFFF">工作经验：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resumeInfo['_workYear']}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">户　　籍：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resumeInfo['native']}</td>
											<td width="80" bgcolor="#FFFFFF">现所在地：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resumeInfo['residence']}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">地　　址：</td>
											<td bgcolor="#FFFFFF" class="jl" colspan="3">{$resumeInfo['address']}</td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr>
											<td width="80" bgcolor="#f6f6f6"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 求职意向</td>
											<td bgcolor="#f6f6f6">&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">希望从事：</td>
											<td class="jl">{$resumeInfo[joinOffice]}<!--{if $resumeInfo[isparttime]==1}-->（可以接受兼职）<!--{/if}--></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">职位类别：</td>
											<td class="jl">{$resumeInfo['joinJobClass']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">岗位级别：</td>
											<td class="jl">{$resumeInfo['joblevelInfo']}<!--{if $resumeInfo[chkJoblevel]==1}-->（不低于此级别）<!--{/if}--></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">期望行业：</td>
											<td class="jl">{$resumeInfo['joinIndustry']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">期望薪资：</td>
											<td class="jl"><!--{if $resumeInfo[hideSalary]==1}-->面议<!--{else}-->{$resumeInfo['joinSalaryInfo']}<!--{/if}--><!--{if $resumeInfo[chksalary]==1&&$resumeInfo[hideSalary]==0}-->（不低于此薪资）<!--{/if}--></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">工作地点：</td>
											<td class="jl">{$resumeInfo['joinCity']}</td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 其他信息</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">自我评价：</td>
											<td class="jl">{$resumeInfo[joinEvaluate]}</td>
										</tr>
									</tbody>
								</table>
								<!--工作经历-->
								<!--有数据 开始-->
								<!--{if $resumeInfo['workListInfo']}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" borderColorDark=#ffffff bgcolor="#c9c9c9">
									<tr bgcolor="#f6f6f6">
										<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle">
										工作经历</td>
										<td>&nbsp;</td>
									</tr>
									<!--{loop $resumeInfo['workListInfo'] $l}-->
									<tr bgcolor="#FFFFFF">
										<td width="80">&nbsp;</td>
										<td>
											<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
												<tr bgcolor="#efefef">
													<td width="77">所在公司：</td>
													<td class="jl">{$l[workName]}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="77">时间范围：</td>
													<td class="jl">{$l[workStartDate]}<!--{if $l[workEndDate]}-->-{$l[workEndDate]}<!--{else}--> -至今<!--{/if}--></td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="77">公司性质：</td>
													<td class="jl">{$l['WorkComPropertyInfo']} {$l['WorkComSizeInfo']}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="77">所属行业：</td>
													<td class="jl">{$l['joinIndustryName']}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="77">担任职位：</td>
													<td class="jl">{$l[workOffice]}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="77">工作描述：</td>
													<td class="jl">{$l[workContent]}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="77">离职原因：</td>
													<td class="jl">{$l[WorkLeaveReason]}</td>
												</tr>
											</table>
										</td>
									</tr>
									<!--{/loop}-->
								</table>
								<!--{/if}-->
								<!--有数据 结束-->
								<!--教育培训-->
								<!--{if $resumeInfo[eduListInfo] || $resumeInfo[trainingListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 教育培训</td>
											<td>&nbsp;</td>
										</tr>
										<!--{if $resumeInfo[eduListInfo]}-->
										<tr bgcolor="#FFFFFF">
											<td width="80">教育背景：</td>
											<td>
												<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
													<tbody>
														<tr bgcolor="#efefef">
															<td width="35%" height="20">时间</td>
															<td width="50%" height="20">所在学校</td>
															<td height="20">学历</td>
														</tr>
														<!--{loop $resumeInfo[eduListInfo] $l}-->
														<tr bgcolor="#FFFFFF">
															<td width="35%" height="20">{$l[eduStartDate]}<!--{if $l[eduEndDate]}--> 至 {$l[eduEndDate]}<!--{else}--> - 至今<!--{/if}--></td>
															<td width="50%" height="20">{$l[eduName]}</td>
															<td height="20">{$l[eduBackGroundInfo]}</td>
														</tr>
														<!--{/loop}-->
													</tbody>
												</table>
											</td>
										</tr>
										<!--{/if}-->
										<!--{if $resumeInfo[trainingListInfo]}-->
										<tr bgcolor="#FFFFFF">
											<td>培训经历：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%">时间</td>
														<td width="35%">培训机构</td>
														<td>培训主题</td>
													</tr>
													<!--{loop $resumeInfo[trainingListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%">{$l[trainingStartDate]}<!--{if $l[trainingEndDate]}--> 至 {$l[trainingEndDate]}<!--{else}--> - 至今<!--{/if}--></td>
															<td width="35%">{$l[trainingName]}</td>
															<td>{$l[trainingSpecialty]}</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
											</tr>
										<!--{/if}-->
									</tbody>
								</table>
								<!--{/if}-->
								<!--项目经验-->
								<!--{if $resumeInfo[projectListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 项目经验</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">项目经验：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">时间</td>
														<td width="50%" height="20">项目名称</td>
														<td height="20">担任</td>
													</tr>
													<!--{loop $resumeInfo[projectListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{$l[projectStart]}<!--{if $l[projectEnd]}--> 至 {$l[projectEnd]}<!--{else}--> - 至今<!--{/if}--></td>
														<td width="50%" height="20">{$l[projectName]}</td>
														<td height="20">{$l[projectDuty]}</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table>
								<!--{/if}-->
								<!--语言能力-->
								<!--{if $resumeInfo[languageListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 语言能力</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">语言能力：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">种类</td>
														<td width="50%" height="20">熟悉程度</td>
														<td height="20">证书</td>
													</tr>
													<!--{loop $resumeInfo[languageListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{$l['languageTypeInfo']}</td>
														<td width="50%" height="20">{$l['langSkillLevelInfo']}</td>
														<td height="20">{$l[langCert]}</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table>
								<!--{/if}-->
								<!--技能专长-->
								<!--{if $resumeInfo[skillListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 技能专长</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">技能专长：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">技能</td>
														<td width="50%" height="20">熟悉程度</td>
													</tr>
													<!--{loop $resumeInfo[skillListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{$l[SkillName]}</td>
														<td width="50%" height="20">{$l['SkillLevelInfo']}</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table>
								<!--{/if}-->
								<!--证书-->
								<!--{if $resumeInfo[certificateListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 证书</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">证书：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">证书</td>
														<td width="50%" height="20">获取时间</td>
													</tr>
													<!--{loop $resumeInfo[certificateListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{$l[certificateName]}</td>
														<td width="50%" height="20">{$l[CertGainTimeYear]}年获得</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table>
								<!--{/if}-->
								<!--其他信息-->
								<!--{if $resumeInfo[otherinfoListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 其他信息</td>
												<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">其他信息：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">主题</td>
														<td width="50%" height="20">内容</td>
													</tr>
													<!--{loop $resumeInfo[otherinfoListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{$l[AppendType]}</td>
														<td width="50%" height="20">{$l[TopicContent]}</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table>
								<!--{/if}-->
								<!--实践经验-->
								<!--{if $resumeInfo[practiceListInfo]}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle"> 实践经验</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">实践经验：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">时间</td>
														<td width="30%" height="20">实践名称</td>
														<td height="20">详细</td>
													</tr>
													<!--{loop $resumeInfo[practiceListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{$l['_PracticeTimeStart']}<!--{if $l[_PracticeTimeEnd]}--> 至 {$l['_PracticeTimeEnd']}<!--{else}--> - 至今<!--{/if}--></td>
														<td width="30%" height="20">{$l['PracticeName']}</td>
														<td height="20">{$l['PracticeDetail']}</td>
													</tr>
													<!--{/loop}-->
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table>
								<!--{/if}-->

								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9" id="contactList">
									<tbody>
										<tr>
											<td width="80" bgcolor="#f6f6f6"><img src="//cdn.{ROOT_DOMAIN}/images/ar.gif" width="7" height="7" align="absmiddle" id="linkWay"> 联系方式</td>
											<td colspan="3" bgcolor="#f6f6f6">&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF"  align="center">
											<td colspan="4"><input type="button" name="btnGetLinkway" value="下载简历" id="btnGetLinkway"></td>
										</tr>
									</tbody>
								</table>
								</td>
							</tr>
						</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" background="//cdn.{ROOT_DOMAIN}/images/bg11.gif" style="padding-top:5px;padding-bottom:5px;"><table width="735" border="0" cellspacing="0" cellpadding="4" style="BORDER-TOP: #9b9b9b 1px solid; BORDER-LEFT: #9b9b9b 1px solid">
						<tbody>
							<tr>
								<td align="center" bgcolor="#e5e5e5">&#169; 597人才网 版权所有</td>
							</tr>
						</tbody>
					</table></td>
				</tr>
			</tbody>
		</table>
	<table width="778" border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td><img src="//cdn.{ROOT_DOMAIN}/images/bg14.gif" width="778" height="17"></td>
			</tr>
		</tbody>
	</table>
	<iframe id="printIframe"  height="0" width="0" frameborder="0"></iframe>
</div>

</body>
<script language="JavaScript">
	var resume_id = "{$resumeInfo[_rid]}";
	$('#btnGetLinkway').click(function(){
		$.getJSON('/api/web/admin.api',{
			act:'getResumeLinkWay',
			rid:resume_id,
			r:Math.random().toString().replace('.','0')
		},function(json){
			if(json.status==1){
				$('#contactList').html('<tr bgcolor="#FFFFFF"><td width="80">手机号码：</td><td width="240" class="jl">'+json.mobile+'</td><td width="80">电子邮件：</td><td class="jl">'+json.email+'</td></tr><tr bgcolor="#FFFFFF"><td width="80">QQ(OICQ)：</td><td class="jl" colspan="3">'+json.qq+'</td></tr>');
			}else{
				alert(json.msg);
			}
			return;
		});
	})
</script>
</html>