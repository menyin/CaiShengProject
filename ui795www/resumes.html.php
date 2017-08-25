<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<title></title>
</head>
<body>
	<div id="ResumeControl_resumeContent"> 
		<div >
			<!--标准简历 start-->
			<div class="rTeam rTeamBasic">
				<div class="rTeamBasicL">
					<div class="rTeamBasicT"><b class="rName">{$resume[realname]}</b><i>{$resume[gender]}</i><i>{$resume[birthday]}岁</i><i>{$resume[workYear]}年工作经验</i><i>{$resume[jobState]}</i></div>
					<div class="rTeamBasicC">
						<!--{if $resume_work[0]}-->
						<p id="ResumeControl_lastWork"><b>最近一份工作：</b><i>{$resume_work[0][workOffice]}</i><i></i></p>
						<!--{/if}-->
						<!--{if $resume[maxEdu]}-->
						<p id="ResumeControl_lastEdu"><b>最高学历：</b><i>{$resume[maxEdu]}</i></p>
						<!--{/if}-->
						<p><b>求职方向：</b><i>{$resume[joinJobClass]}</i></p>
						<p><b>目前居住地：</b><i>{$resume[residence]}</i></p>
						<p style="float:left;display:inline;width:235px;"><b>英语水平：</b><i>{$resume[englishLevel]}</i></p>
						<p style="float:left;display:inline;width:190px;"><b>计算机水平：</b><i>{$resume[pcLevel]}</i></p>
						<p style="float:left;display:inline;width:235px;"><b>期望薪资：</b><i>
							<!--{if $resume[hideSalary]}-->面议<!--{else}-->{$resume[joinSalary]} 元/月<!--{/if}-->
						</i></p>
						<!--<p style="float:left;display:inline;width:190px;"><b>当前年薪：</b><i>{$resume[salary]}万元</i></p>-->
						<div class="clear"></div>
					</div>
				</div>
				<div class="rTeamBasicR">
					<div class="photo"><img src='{$resume[attachment]}'/></div>
				</div>
				<div class="clear">
				</div>
			</div>
			<!--标准简历 end-->

			<div class="rTeam rTeamBasic rTeamContact" id="divLinkWay">
				<h2>联系方式</h2>
				<!--{if $isdownload}-->
				<div class="rTeamBasicC">
					<p><b>手机号码：</b><i>$resume[mobile]</i></p>
					<p><b>QQ号码：</b><i>$resume[qq]</i></p>
					<p><b>Email：</b><i>$resume[email]</i></p>
					<div class="clear"></div>
				</div>
				<!--{else}-->
				<div class="rTable">
					<table id="ResumeControl_pastDueShow" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="763">您尚未查看过此简历的联系方式，如需查看，请点击的<a href="#" onclick='resumedownload(true)'>查看联系方式</a></td>
						</tr>
					</table>
				</div>
				<!--{/if}-->
			</div>

			<!--{if $resume[stature] || $resume[avoirdupois] || $resume[marriage] }-->
			<div id="ResumeControl_resumeBasic" class="rTeam">
				<h2>基本信息</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td width="81" class="blue">身&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高：</td>
								<td>{$resume[stature]}cm</td>
								<td width="81" class="blue">体&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重：</td>
								<td>{$resume[avoirdupois]}kg</td>
							</tr>
							<tr>
								<td width="81" class="blue">婚姻状况：</td>
								<td>{$resume[marriage]}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--{/if}-->

			<div class="rTeam rTeamBasic" >
				<h2>求职意向</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td width="81" class="blue">期望行业：</td>
								<td colspan="3"><span class="share">{$resume[joinIndustry]}</span></td>
							</tr>
							<tr>
								<td width="81" class="blue">期望岗位：</td>
								<td colspan="3">{$resume[joinOffice]}</td>
							</tr>
							<tr>
								<td width="81" class="blue">期望地区：</td>
								<td colspan="3"><span class="share">{$resume[joinCity]}</span></td>
							</tr>
							<tr>
								<td width="81" class="blue">到岗时间：</td>
								<td>{$resume['joinTime']}</td>
								<td width="81" class="blue">工作性质：</td>
								<td>{$resume[joinType]}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!--{if $resume[workList]}-->
			<div class="rTeam rTeamBasic">
				<h2>工作经验</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<!--{loop $resume_work $work}-->
						<tbody style="border-bottom: 1px dashed #959595;">
							<tr>
								<td colspan="4" class="blue"><i>{$work[workDateStart]}-{$work[workDateEnd]}</i><i>{$work[workName]}</i><i>{$work[workOffice]}</i></td>
							</tr>
							<tr>
								<td width="81" class="blue">所处行业：</td>
								<td >{$work[workIndustry]}</td>
								<td width="81" class="blue">职位类别：</td>
								<td >{$work[workJobClass]}</td>
							</tr>
							<tr>
								<td width="81" class="blue">工作薪资：</td>
								<td colspan="3"><div class="w640 break">{$work[workSalary]}元/月</div></td>
							</tr>
							<tr>
								<td width="81" class="blue">职责描述：</td>
								<td colspan="3"><div class="w640 break">{$work[workContent]}</div></td>
							</tr>
						</tbody>
						<!--{/loop}-->
					</table>
				</div>
			</div>
			<!--{/if}-->

			<!--{if $resume[workList]}-->
			<div class="rTeam">
				<h2>教育背景</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<!--{loop $resume_edu $edu}-->
						<tbody>
							<tr>
								<td colspan="4" class="blue"><i>{$edu[eduDateStart]}-{$edu[eduDateEnd]}</i><i>{$edu[eduName]}</i><i>{$edu[eduBackGround]}</i></td>
							</tr>
							<tr>
								<td width="81" class="blue">专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</td>
								<td>{$edu[eduSpecialty]}</td>
							</tr>
						</tbody>
						<!--{/loop}-->
					</table>
				</div>
			</div>
			<!--{/if}-->

			<div class="rTeam">
				<h2>自我评价</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td width="81" class="blue">自我评价：</td>
								<td colspan="3"><div class="w640 break">{$resume[joinEvaluate]}</div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!--{if $resume[trainingList]}-->
			<div class="rTeam">
				<h2>培训经历</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<!--{loop $resume_training $training}-->
						<tbody>
							<tr>
								<td colspan="4" class="blue"><i>{$training[trainingDateStart]}-{$training[trainingDateEnd]}</i><i>{$training[trainingName]}</i></td>
							</tr>
							<tr>
								<td width="81" class="blue">培训项目：</td>
								<td>{$training[trainingSpecialty]}</td>
								<td width="81" class="blue">所获证书：</td>
								<td >{$training[trainingBackGround]}</td>
							</tr>
						</tbody>
						<!--{/loop}-->
					</table>
				</div>
			</div>
			<!--{/if}-->

			<!--{if $resume[certificateList]}-->
			<div class="rTeam">
				<h2>所获证书</h2>
				<div class="rTable">
					<table cellpadding="0" cellspacing="0" width="100%">
						<!--{loop $resume_certificate $certificate}-->
						<tbody>
							<tr>
								<td><img src="http://pic.{ROOT_DOMAIN}/certificate/{$certificate[certificateBackGround]}" title="{$certificate[certificateName]}"/></td>
							</tr>
						</tbody>
						<!--{/loop}-->
					</table>
				</div>
			</div>
			<!--{/if}-->

		</div>
	</div>
</body>
</html>
