<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf">
<title>{$resumeInfo['realname']}的简历-597人才网</title>
<script type="text/javascript" src="http://cdn.597.com/javascript/597.js"></script>
<script type="text/javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js"></script>
<!–[if lt IE9]>
<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
<![endif]–>
<link type="text/css" rel="stylesheet" href="http://cdn.597.com/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="http://cdn.597.com/css/jquery.boxy.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20150821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20150722" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20151122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resume.css?v=20150930" />
	<link href="http://cdn.597.com/crm/css/Resume1.css" rel="stylesheet" type="text/css">
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
	body {text-align:left; background: url("http://cdn.597.com/images/bg15.gif");}
	html{overflow:scroll;}
	table {border-collapse:separate; border-spacing:1px; }
	.border1 table td {padding:3px 4px;}
</style>
<body topmargin="0" marginheight="0" marginwidth="0" leftmargin="0" background="http://cdn.597.com/images/bg15.gif">
<!--{if $cid}-->
<div id="{$resumeInfo[_rid]}" style="display:block; margin:0 auto; width:760px;">
	<span id="resume_{$key}"></span>
		<table width="778" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td height="148" valign="top" background="http://cdn.597.com/images/bg10.gif">
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
					<td background="http://cdn.597.com/images/bg11.gif" style="padding-top:5px;padding-bottom:5px;"><table width="735" border="0" align="center" cellpadding="0" cellspacing="0" class="border1">
						<tbody>
							<tr>
								<td align="center" style="padding-top:5px;padding-bottom:5px;">
								<table width="700" border="0" cellpadding="4" cellspacing="1" bgcolor="#c9c9c9">
									<tbody>
										<tr>
											<td width="80" bgcolor="#f6f6f6"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 基本信息 </td>
											<td colspan="3" bgcolor="#f6f6f6">&nbsp;</td>
											<td width="150" align="center" bgcolor="#f6f6f6"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 个人相片 </td>
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
											<td width="80" bgcolor="#f6f6f6"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 求职意向</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 其他信息</td>
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
										<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 教育培训</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 项目经验</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 语言能力</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 技能专长</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 证书</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 其他信息</td>
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
											<td width="80"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle"> 实践经验</td>
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
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr>
											<td width="80" bgcolor="#f6f6f6"><img src="http://cdn.597.com/images/ar.gif" width="7" height="7" align="absmiddle" id="linkWay"> 联系方式</td>
											<td colspan="3" bgcolor="#f6f6f6">&nbsp;</td>
										</tr>
										<!--{if $right>=8}-->
											<!--{if $noShow==1}-->
												<!--{if $resumeInfo['display']==1}-->
												<input type="button" name="btnGetLinkway" value="下载简历" id="btnGetLinkway">
												<!--{/if}-->
											<!--{else}-->
												<tr bgcolor="#FFFFFF">
													<td width="80">手机号码：</td>
													<td width="240" class="jl">{$resumeInfo['mobile']}</td>
													<td width="80">联系电话：</td>
													<td class="jl">{$resumeInfo['telephone']}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="80">电子邮件：</td>
													<td width="240" class="jl">{$resumeInfo['email']}</td>
													<td width="80">QQ(OICQ)：</td>
													<td class="jl">{$resumeInfo['qq']}</td>
												</tr>
												<tr bgcolor="#FFFFFF">
													<td width="80">地址：</td>
													<td width="240" class="jl" colspan="3">{$resumeInfo['address']}</td>
												</tr>
											<!--{/if}-->
										<!--{else}-->
											<!--{if $resumeInfo['display']==1}-->
											<tr bgcolor="#FFFFFF"  align="center">
												<td colspan="4"><input type="button" name="btnGetLinkway" value="下载简历" id="btnGetLinkway"></td>
											</tr>
											<!--{/if}-->
										<!--{/if}-->
									</tbody>
								</table>
								</td>
							</tr>
						</tbody>
						</table>
						
						<table width="735" border="0" cellspacing="0" cellpadding="0">
						  <Form action="" method="post" name="theForm">
							<tr> 
							  <td height="30" align="center" valign="bottom">
							  	<input type="button" name="btnNetWorkInvite" value="邀请面试" id="btnNetWorkInvite">
							  	<input type="button" name="btnRemark" id="btnRemark" value="备注">
							  	<input type="button" name="btnFav" id="btnFav" value="<!--{if $FAVORITES=='favourite_save'}-->收藏<!--{else}-->取消收藏<!--{/if}-->" rel="{$FAVORITES}">
							  	<input type="button" name="btnPrintRsume" id="btnPrintRsume" value="打印简历">
							  	<input type="button" name="btnforwemail" id="btnforwemail" value="转发到邮箱">
							  	<input type="button" name="btnsavecomputer" id="btnsavecomputer" value="保存到电脑">
							  	<input type="button" name="btnReport" id="btnReport" value="举报">
							  	<!--
							   	<input type="button" name="persondb" value="加入人才库" onClick="javascript:showalert('persondb')">
								<input type="button" name="Replay" value="回复留言" onClick="javascript:showalert('Replay')">
								<input type="button" name="send" value="邀请面试" id="btnNetWorkInvite">
								<input type="button" name="sendemail" value="发到邮箱" onClick="javascript:showalert('sendemail')" class="button">
								<input type="button" name="Submit3" id="Submit3" value="打印简历">
								<input type="button" name="Submit66" value="下载简历" onClick="location.href='Resume_Down_1510261549338581.html'">
								<input type="button" name="Submit4" value="关闭窗口" onClick="window.close();">
								<input type="button" name="Submit5" value="黑名单" onClick="javascript:BlockS()">
								<input type="button" name="Submit6" value="备注" onClick="javascript:Remarks('/Company/Com_Remarks.shtml?Perid=1510261549338581')">
								<input name="perid" type="hidden" id="perid3" value="1510261549338581">
								-->
							  </td>
							</tr>
						  </Form>
						</table>
						
					</td>
				</tr>
				<tr>
					<td align="center" background="http://cdn.597.com/images/bg11.gif" style="padding-top:5px;padding-bottom:5px;"><table width="735" border="0" cellspacing="0" cellpadding="4" style="BORDER-TOP: #9b9b9b 1px solid; BORDER-LEFT: #9b9b9b 1px solid">
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
				<td><img src="http://cdn.597.com/images/bg14.gif" width="778" height="17"></td>
			</tr>
		</tbody>
	</table>
	<iframe id="printIframe"  height="0" width="0" frameborder="0"></iframe>
</div>
<!--{/if}-->
</body>
<script language="JavaScript">
	var resume_id = "{$resumeInfo[_rid]}";

	//打印
	$('#Submit3').click(function(){
		var url = '/explod.html?act=print&rid='+resume_id;
		if($.browser.msie){
			//$(this).attr('href',url).attr('target','_blank');	IE上面这种打法不行了，需要用下面这种
			$('#printIframe').attr("src", url);
		}else{
			$('#printIframe').attr("src", url);
		}
	});
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
				email.setContent('<div class="forw-email-box" id="forw-email"><strong>将你的简历发送到以下邮箱<span class="error"></span></strong><br /><textarea>{$comEmail[comEmail]}</textarea><span>多个邮箱地址请用分号“；”隔开，最多可填写10个邮箱</span><div><input type="text" style="display:inline-block;vertical-align:middle;width:80px;" id="catcha" name="catcha" class="text" data-seed="54c339da5e4bf"/><img id="imgCode" src="/api/web/authCode.api?key=resumeCode" style="display:inline-block;vertical-align:middle;margin:0 5px;"/><a id="btnCode" href="javascript:void(0)" style="display:inline-block;vertical-align:middle;">换一换</a></div></div><div class="ui_dialog_footer"><a class="btn2 btnsF12" href="javascript:void(0)" id="btnEmailSubmit">确定</a><a class="btn3 btnsF12" href="#" id="btnEmailClose">取消</a></div>');
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
				confirmBox.timeBomb(msg, {
					name: icon,
					width: pWidth + msg.length * fontWidth
				});
			}
			function searchAttribution(tel) {
				//获取号码归属地
				var regex = /^1[3|4|5|8][0-9]\d{4,8}$/,
					phoneAddr = $('#phoneAddr');
				if(!phoneAddr.length) return;
				if(tel && !regex.test(tel)){
					phoneAddr.html('（未知）');
				} else {
					var url = 'http://virtual.paipai.com/extinfo/GetMobileProductInfo?mobile=' + (tel || '')+'&amount=10000&callname=getPhoneNumInfoExtCallback';
					$.ajax({
						async:false,
						type: "post",
						url:url,
						dataType: "jsonp",
						contentType: "application/x-www-form-urlencoded; charset=utf-8",
						jsonpCallback: "getPhoneNumInfoExtCallback",
						success: function(json){
						 	if(json.province == ''||json.province == undefined){
								phoneAddr.html('（未知）');
							}else{
								phoneAddr.html('（'+json.province+' '+json.cityname+'）');
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
						window.location.href = window.location.href;
					}else{
						showModel('fail', json.msg);
						return;

					}
				}
			}



			<!--{if $resumeInfo['display']==0}-->
			dialog.resetSize('300').setContent({
				title: '系统提示',
				content: '<p>&nbsp;</p><p style="padding:20px; text-align:center; font-size:16px;">该简历已保密,可能已找到工作！</p><p>&nbsp;</p>'
			}).off('loadComplete').on('loadComplete',function(){

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
							$('#btnFav').val('取消收藏');
							showModel('success', '收藏成功');
						}else{
							$('#btnFav').attr('rel','favourite_save');
							$('#btnFav').val('收藏');
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