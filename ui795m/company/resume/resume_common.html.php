<!--简历详情-->
<!--{if $app['isNewApp']!="yes"}-->
<div class="loginPop"><div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>简历</div></div>
<!--{/if}-->
<!-- <div class="mResumextop">
	<div class="msmextop"><em class="icon-uniE610"></em>投递的职位：{$resumeInfo['jname']}</div>
</div> -->
<div class="mResumexD">
	<!--{if $resumeInfo[attachment]}-->
		<img src="{$resumeInfo['attachment']}" width="109" height="136">
	<!--{else}-->
		<img src="http://cdn.597.com/m/images/m_icon17.png" width="109" height="136">
	<!--{/if}-->
	<h2>{$resumeInfo['realname']}</h2>
	<p><span><!--{if $resumeInfo[gender]==1}-->男<!--{else}-->女<!--{/if}--></span>
	<b>|</b><span>{$resumeInfo['age']}岁</span>
	<!--{if $resumeInfo['eduListInfo'][0]['eduBackGroundInfo']}--><b>|</b><span>{$resumeInfo['eduListInfo'][0]['eduBackGroundInfo']}</span><!--{/if}-->
	<b>|</b><span>{$resumeInfo['marriageInfo']}</span>
	<b>|</b><span>{$resumeInfo['statureInfo']}</span>
	<b>|</b><span>{$resumeInfo['politicalInfo']}</span>
	</p>
</div>
<!--{if $right>=8}-->
<div class="mResumexD01">
<h2>联系方式</h2>
	<ul>
		<li><span>手机：</span><em>{$resumeInfo['mobile']}</em></li>
		<li><span>邮箱：</span><em>{$resumeInfo['email']}</em></li>
		<li><span>QQ：</span><em>{$resumeInfo['qq']}</em></li>
	</ul>
</div>
<!--{/if}-->
<div class="mResumexD01">
<h2>基本资料</h2>
	<ul>
		<li><span>目前状态：</span><em>{$resumeInfo['_workYear']}</em></li>
		<li><span>户籍：</span><em>{$resumeInfo['nativeName']}</em></li>
		<li><span>现居住地：</span><em>{$resumeInfo['residenceName']}</em></li>
		<li><span>详细地址：</span><em>{$resumeInfo['address']}</em></li>
	</ul>
</div>
<div class="mResumexD01">
<h2>求职意向</h2>
	<ul>
		<li><span>希望从事：</span><em>{$resumeInfo[joinOffice]}(<!--{if $resumeInfo['joinType']==1}-->全职<!--{/if}--><!--{if $resumeInfo['joinType']==2}-->兼职<!--{/if}--><!--{if $resumeInfo['joinType']==3}-->实习<!--{/if}-->)</em></li>
		<li><span>职位类别：</span><em>{$resumeInfo['joinJobClass']}</em></li>
		<li><span>岗位级别：</span><em>{$resumeInfo['joblevelInfo']}<!--{if $resumeInfo[chkJoblevel]==1}-->（不低于此级别）<!--{/if}--></em></li>
		<li><span>期望行业：</span><em>{$resumeInfo['joinIndustry']}</em></li>
		<li><span>期望薪资：</span><em><!--{if $resumeInfo[hideSalary]==1}-->面议<!--{else}-->{$resumeInfo['joinSalaryInfo']}<!--{/if}--><!--{if $resumeInfo[chksalary]==1&&$resumeInfo[hideSalary]==0}-->（不低于此薪资）<!--{/if}--></em></li>
		<li><span>工作地点：</span><em>{$resumeInfo['joinCity']}</em></li>
	</ul>
</div>
<!--{if $resumeInfo['joinEvaluate']}-->
<div class="mResumexD01" style="padding-bottom:20px;">
	<h2>自我评价</h2>
	<div class="mResumexContBg">
		<div class="mRsmTit" style="color:#3d4b4d;">{$resumeInfo['joinEvaluate']}</div>
	</div>
</div>
<!--{/if}-->
<!--工作经历-->
<!--{if $resumeInfo[workListInfo]}-->
	<div class="mResumexD01">
	<h2>工作经历</h2>
	<!--{loop $resumeInfo[workListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont">
				<span class="mRsmGary">{$l[workStartDate]}<!--{if $l[workEndDate]}-->-{$l[workEndDate]}<!--{else}--> -至今<!--{/if}--><br />[<!--{if $l[workyear]}-->{$l[workyear]}年<!--{/if}--><!--{if $l[workmonth]}-->{$l[workmonth]}个月<!--{/if}-->]</span>
				<p><span><!--{if $l[WorkJobType]==2}-->兼职<!--{/if}--><!--{if $l[WorkJobType]==3}-->实习<!--{/if}-->{$l[workOffice]}</span><b>|</b><em>{$l[workName]}</em><b>|</b><em><!--{if $l[workSalary]&&!$l[workHideSalary]}-->{$l[workSalary]}元/月<!--{/if}--><!--{if $l[workHideSalary]}-->薪资保密<!--{/if}--></em></p>
				<div class="mRsmTit"><!--{if $l[WorkJobType]}--><span class="joblevel">{$l['WorkJobLevelInfo']}</span><!--{/if}--></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>		
<!--{/if}-->
<!--教育培训经历-->
<!--{if $resumeInfo[eduListInfo]||$resumeInfo[trainingListInfo]}-->
	<div class="mResumexD01">
	<h2>教育培训经历</h2>
	<!--{if $resumeInfo[eduListInfo]}-->
		<!--{loop $resumeInfo[eduListInfo] $l}-->
			<div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary">{$l[eduStartDate]}<!--{if $l[eduEndDate]}--> 至 {$l[eduEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
					<p><span>{$l['eduBackGroundInfo']}</span><b>|</b><em>{$l[eduName]}</em><b>|</b><em>{$l[eduSpecialty]}</em></p>
				</div>
			</div>
		<!--{/loop}-->
	<!--{/if}-->
	<!--{if $resumeInfo[trainingListInfo]}-->
		<!--{loop $resumeInfo[trainingListInfo] $l}-->
			<div class="mResumexContBg">
				<div class="mResumexCont" style="border-bottom:none;">
					<span class="mRsmGary">{$l[trainingStartDate]}<!--{if $l[trainingEndDate]}--> 至 {$l[trainingEndDate]}<!--{else}--> - 至今<!--{/if}--></span>
					<p><span>{$l[trainingSpecialty]}</span><b>|</b><em>{$l[trainingName]}</em><b>|</b><em>[证]{$l[trainingBackGround]}</em></p>
				</div>
			</div>
		<!--{/loop}-->
	<!--{/if}-->
	</div>
<!--{/if}-->

<!--项目经验-->
<!--{if $resumeInfo[projectListInfo]}-->
	<div class="mResumexD01">
	<h2>项目经验</h2>
	<!--{loop $resumeInfo[projectListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<span class="mRsmGary">{$l[projectStart]}<!--{if $l[projectEnd]}--> 至 {$l[projectEnd]}<!--{else}--> - 至今<!--{/if}--></span>
				<p><span>{$l[projectName]}</span><b>|</b><em>担任：{$l[projectDuty]}</em><b>|</b><em>{$l[projectIntr]}</em></p>
				<div class="mRsmTit">{$l[projectIntr]}<span>{$l[projectExperience]}</span></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->

<!--语言能力-->
<!--{if $resumeInfo[languageListInfo]}-->
	<div class="mResumexD01">
		<h2>语言能力</h2>
		<!--{loop $resumeInfo[languageListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont">
				<p><span>{$l['languageTypeInfo']}</span><b>|</b><em>{$l['langSkillLevelInfo']}</em><b>|</b><em>{$l[langCert]}</em></p>
			</div>
		</div>
		<!--{/loop}-->
	</div>
<!--{/if}-->
<!--/-->

<!--技能专长-->
<!--{if $resumeInfo[skillListInfo]}-->
	<div class="mResumexD01">
		<h2>技能专长</h2>
		<!--{loop $resumeInfo[skillListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont">
				<p><span>{$l[SkillName]}</span><b>|</b><em>{$l['SkillLevelInfo']}</em></p>
			</div>
		</div>
		<!--{/loop}-->
	</div>
<!--{/if}-->
<!--/-->


<!--证书-->
<!--{if $resumeInfo[certificateListInfo]}-->
	<div class="mResumexD01">
	<h2>证书</h2>
	<!--{loop $resumeInfo[certificateListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<p><span>{$l[certificateName]}</span><b>|</b><em>{$l[CertGainTimeYear]}年获得</em></p>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->
<!--/-->

<!--其他信息-->
<!--{if $resumeInfo[otherinfoListInfo]}-->
	<div class="mResumexD01">
	<h2>其他信息</h2>
	<!--{loop $resumeInfo[otherinfoListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<span class="mRsmGary">{$l[AppendType]}</span>
				<div class="mRsmTit"><span>{$l[TopicContent]}</span></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->

<!--实践经验-->
<!--{if $resumeInfo[practiceListInfo]}-->
	<div class="mResumexD01">
	<h2>实践经验</h2>
	<!--{loop $resumeInfo[practiceListInfo] $l}-->
		<div class="mResumexContBg">
			<div class="mResumexCont" style="border-bottom:none;">
				<span class="mRsmGary">{$l['_PracticeTimeStart']}<!--{if $l[_PracticeTimeEnd]}--> 至 {$l['_PracticeTimeEnd']}<!--{else}--> - 至今<!--{/if}--></span>
				<p><span>{$l['PracticeName']}</span></p>
				<div class="mRsmTit"><span>{$l['PracticeDetail']}</span></div>
			</div>
		</div>
	<!--{/loop}-->
	</div>
<!--{/if}-->