<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf">
<title>个人简历</title>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/597.js"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/templates/default/js/frame.js"></script>
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/css/jquery.boxy.css">
<link href="//cdn.{ROOT_DOMAIN}/crm/css/Resume1.css" rel="stylesheet" type="text/css">
<style type="text/css">
	html{overflow:scroll;}
</style>
<body topmargin="0" marginheight="0" marginwidth="0" leftmargin="0" background="/templates/default/images/bg15.gif">
	<div id="{$resume[_rid]}" style="display:block; margin:0 auto; width:760px;">
	<span id="resume_"></span>
		<table width="778" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td height="148" valign="top" background="/templates/default/images/bg10.gif">
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
									<td height="30" align="center"><strong class="title"><span id="lbl_realname">{$resume[realname]} -&nbsp;</span>个人简历</strong><span class="navy">（NO: {$value}）</span></td>
								</tr>
							</tbody>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td height="10"></td>
								</tr>
								<tr>
									<td height="20" align="center"><font color="#FF0000">目前供职情况：</font>{$resume['_jobState']}</td>
								</tr>
								<tr>
									<td height="20" align="center">[更新日期]：<span class="jl">{$resume[_updateTime]}</span>&nbsp;&nbsp;&nbsp; [浏览次数]：<span class="jl">{$resume['views']} 次</span>&nbsp;&nbsp;&nbsp; [查询时间]：<span class="jl">{$time}</span></td>
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
					<td background="/templates/default/images/bg11.gif" style="padding-top:5px;padding-bottom:5px;"><table width="735" border="0" align="center" cellpadding="0" cellspacing="0" class="border1">
						<tbody>
							<tr>
								<td align="center" style="padding-top:5px;padding-bottom:5px;">
								<table width="700" border="0" cellpadding="4" cellspacing="1" bgcolor="#c9c9c9">
									<tbody>
										<tr>
											<td width="80" bgcolor="#f6f6f6"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 基本信息 </td>
											<td colspan="3" bgcolor="#f6f6f6">&nbsp;</td>
											<td width="150" align="center" bgcolor="#f6f6f6"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 个人相片 </td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">姓　　名：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resume[realname]}</td>
											<td width="80" bgcolor="#FFFFFF">性　　别：</td>
											<td bgcolor="#FFFFFF" class="jl"><!--{if $resume[gender]==1}-->男<!--{else}-->女<!--{/if}--></td>
											<td rowspan="8" valign="top" bgcolor="#FFFFFF">
											<!--个人照片-->
												<table width="100%" border="0" cellspacing="0" class="text01">
													<tbody>
													  	<tr>
															<td align="center"><img src="{$resume['attachment']}" width="135" height="160"></td>
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
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resume['politicalInfo']}</td>
											<td width="80" bgcolor="#FFFFFF">出生年月：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resume[birthday]}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">证件号码：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">保密</td>
											<td width="80" bgcolor="#FFFFFF">婚姻状况：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resume['marriageInfo']}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">身　　高：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl"><!--{if $resume[stature]>0}-->{$resume[stature]}cm<!--{else}-->未填写<!--{/if}--></td>
											<td width="80" bgcolor="#FFFFFF">体　　重：</td>
											<td bgcolor="#FFFFFF" class="jl"><!--{if $resume[avoirdupois]>0}-->{$resume[avoirdupois]}kg<!--{else}-->未填写<!--{/if}--></td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">学　　历：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resume['maxEduInfo']}</td>
											<td width="80" bgcolor="#FFFFFF">工作经验：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resume['_workYear']}</td>
										</tr>
										<tr>
											<td width="80" bgcolor="#FFFFFF">电　　话：</td>
											<td width="170" bgcolor="#FFFFFF" class="jl">{$resume['mobile']}</td>
											<td width="80" bgcolor="#FFFFFF">邮	箱：</td>
											<td bgcolor="#FFFFFF" class="jl">{$resume['email']}</td>
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
											<td width="80" bgcolor="#f6f6f6"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 求职意向</td>
											<td bgcolor="#f6f6f6">&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">希望从事：</td>
											<td class="jl">{$resume[joinOffice]}<!--{if $resume[isparttime]==1}-->（可以接受兼职）<!--{/if}--></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">职位类别：</td>
											<td class="jl">{$resume['joinJobClass']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">岗位级别：</td>
											<td class="jl">{$resume['joblevelInfo']}<!--{if $resume[chkJoblevel]==1}-->（不低于此级别）<!--{/if}--></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">期望行业：</td>
											<td class="jl">{$resume['joinIndustry']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">期望薪资：</td>
											<td class="jl"><!--{if $resume[hideSalary]==1}-->面议<!--{else}-->{$resume['joinSalaryInfo']}<!--{/if}--><!--{if $resume[chksalary]==1&&$resume[hideSalary]==0}-->（不低于此薪资）<!--{/if}--></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">工作地点：</td>
											<td class="jl">{$resume['joinCity']}</td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolordark="#ffffff" bgcolor="#c9c9c9">
									<tbody>
										<tr bgcolor="#f6f6f6">
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 其他信息</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">自我评价：</td>
											<td class="jl">{$resume[joinEvaluate]}</td>
										</tr>
									</tbody>
								</table>
								<!--工作经历-->
								<!--有数据 开始-->
								<!--{if $resume['workListInfo']}-->
								<table width="700" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td height="5"></td>
										</tr>
									</tbody>
								</table>
								<table width="700" border="0" cellpadding="4" cellspacing="1" borderColorDark=#ffffff bgcolor="#c9c9c9">
									<tr bgcolor="#f6f6f6">
										<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 
										工作经历</td>
										<td>&nbsp;</td>
									</tr>																		
									<!--{loop $resume['workListInfo'] $l}-->
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
													<td class="jl">{$l['WorkComPropertyInfo']}</td>
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
								<!--{if $resume[eduListInfo] || $resume[trainingListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 教育培训</td>
											<td>&nbsp;</td>
										</tr>
										<!--{if $resume[eduListInfo]}-->
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
														<!--{loop $resume[eduListInfo] $l}-->
														<tr bgcolor="#FFFFFF">
															<td width="35%" height="20">{$l[eduStartDate]}<!--{if $l[eduEndDate]}--> 至 {$l[eduEndDate]}<!--{else}--> - 至今<!--{/if}--></td>
															<td width="50%" height="20">{$l[eduName]}</td>
															<td height="20">{$l[eduSpecialty]}</td>
														</tr>
														<!--{/loop}-->
													</tbody>
												</table>
											</td>
										</tr>
										<!--{/if}-->
										<!--{if $resume[trainingListInfo]}-->
										<tr bgcolor="#FFFFFF">
											<td>培训经历：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%">时间</td>
														<td width="35%">培训机构</td>
														<td>培训主题</td>
													</tr>													
													<!--{loop $resume[trainingListInfo] $l}-->
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
								<!--{if $resume[projectListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 项目经验</td>
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
													<!--{loop $resume[projectListInfo] $l}-->
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
								<!--{if $resume[languageListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 语言能力</td>
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
													<!--{loop $resume[languageListInfo] $l}-->
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
								<!--{if $resume[skillListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 技能专长</td>
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
													<!--{loop $resume[skillListInfo] $l}-->
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
								<!--{if $resume[certificateListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 证书</td>
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
													<!--{loop $resume[certificateListInfo] $l}-->
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
								<!--{if $resume[otherinfoListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 其他信息</td>
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
													<!--{loop $resume[otherinfoListInfo] $l}-->
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
								<!--{if $resume[practiceListInfo]}-->
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
											<td width="80"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 实践经验</td>
											<td>&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">实践经验：</td>
											<td><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
												<tbody>
													<tr bgcolor="#efefef">
														<td width="35%" height="20">时间</td>
														<td width="50%" height="20">实践名称</td>
														<td height="20">详细</td>
													</tr>						
													<!--{loop $resume[practiceListInfo] $l}-->
													<tr bgcolor="#FFFFFF">
														<td width="35%" height="20">{{$l['_PracticeTimeStart']}<!--{if $l[_PracticeTimeEnd]}--> 至 {$l['_PracticeTimeEnd']}<!--{else}--> - 至今<!--{/if}--></td>
														<td width="50%" height="20">{$l['PracticeName']}</td>
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
											<td width="80" bgcolor="#f6f6f6"><img src="/templates/default/images/ar.gif" width="7" height="7" align="absmiddle"> 联系方式</td>
											<td colspan="3" bgcolor="#f6f6f6">&nbsp;</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">手机号码：</td>
											<td width="240" class="jl">{$resume['mobile']}</td>
											<td width="80">联系电话：</td>
											<td class="jl">{$resume['telephone']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">电子邮件：</td>
											<td width="240" class="jl">{$resume['email']}</td>
											<td width="80">QQ(OICQ)：</td>
											<td class="jl">{$resume['qq']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">邮政编码：</td>
											<td colspan="3" class="jl">{$resume['postcode']}</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="80">通讯地址：</td>
											<td colspan="3" class="jl">{$resume['address']}</td>
										</tr>
									</tbody>
								</table>
								<table width="735" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td align="center" valign="bottom" style="padding-right:10px;">
											
												<input type="button" name="noflag" value="取消审核" onclick="Boxy.load('resume_report.html?act=isCheckNo&r_id={$resume[_rid]}&report_id={$report_id}',{title: 	'不通过理由'});">
												<input type="button" name="flag" value="投诉无效" onClick="javascript:theForm_Submit('{$resume['_rid']}',1,{$report_id})"></td>
											</td>
											<td width="68" align="center"><img src="/templates/default/images/bg12.gif" width="134" height="68"></td>
										</tr>
									</tbody>
								</table></td>
							</tr>
						</tbody>
					</table></td>
				</tr>
				<tr>
					<td align="center" background="/templates/default/images/bg11.gif" style="padding-top:5px;padding-bottom:5px;"><table width="735" border="0" cellspacing="0" cellpadding="4" style="BORDER-TOP: #9b9b9b 1px solid; BORDER-LEFT: #9b9b9b 1px solid">
						<tbody>
							<tr>
								<td align="center" bgcolor="#e5e5e5">&#169; <a href="http://www.fz597.com/" target="_self">597福州人才网</a> 版权所有</td>
							</tr>
						</tbody>
					</table></td>
				</tr>
			</tbody>
		</table>
	<table width="778" border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td><img src="/templates/default/images/bg14.gif" width="778" height="17"></td>
			</tr>
		</tbody>
	</table>
</div>
</body>
<script language="JavaScript">
function theForm_Submit(rid,ischeck,report_id,email)
{
	if(ischeck==1){		
		$.getJSON('/api/web/'+'admin.api?act=invalid&rid=' + rid + '&report_id=' + report_id +'&v=' + Math.random(), function(result){
			if(result.status==0) {
				alert('你尚未登录，请先登录！');
			}else if(result.status>0) {
				alert('操作成功！');
				window.opener.location.reload();window.close();history.back();
			} else {
				alert('操作失败！');
			}
		});
	}
	txtRemark=document.getElementById('txtRemark').value;
	if(txtRemark==''){
		alert("不通过理由不能为空！");
		return;
	}
	if(ischeck==2){
		$.getJSON('/api/web/'+'admin.api?act=isCheckNo&rid=' + rid + '&txtRemark=' + txtRemark + '&report_id=' + report_id + '&email=' + email + '&v=' + Math.random(), function(result){
			if(result.status==0) {
				alert('你尚未登录，请先登录！');
			}else if(result.status>0) {
				alert('简历屏蔽成功！');
				window.opener.location.reload();window.close();history.back();
			} else {
				alert('操作失败！');
			}
		});
	}
}
</script>
</html>