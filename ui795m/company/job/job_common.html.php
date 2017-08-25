<style type="text/css">
	#blackMask {display: none;background: rgba(0, 0, 0,0.5); width:100%; height:100%; position: fixed; left:0; top:0; z-index: 100001;}
	#showPhone {display: none;width:100%; position: fixed; left:0; bottom:20px;  z-index: 1000002;}
	#showPhone p {background: #fff; margin:0 15px 10px; border-radius:8px; height: 45px; line-height: 45px; font-size: 18px;text-align: center; color:#087eff;}
	#showPhone p a {display: block;}
</style>
<!--职位公共部分-->
<div class="loginPop">
<div class="loginTopBg"><a href="javascript:window.history.go(-1);"><i class="icon-uniE6005"></i></a>{$job[status]}职位详情</div>
</div> 
<div class="m_postBg">
	<p class="mPostTit">{$job[jname]}</p>
		<div class="mWelfare" style="display:none;">
			<span>五险一金</span>
			<span>双休</span>
		</div>
</div>
<div class="mPostList">
	<p><i class="icon-uniE60B"></i><b>{$job[jobSalary]}</b></p>
	<!--{if ($job[jobNumber])}--><p><i class="icon-uniE609"></i><span>招聘{$job[jobNumber]}</span></p><!--{/if}-->
	<!--{if ($job[jobArea])}--><p><i class="icon-uniE60A"></i><span>{$job[jobArea]}</span></p><!--{/if}-->
</div>
<div class="jobRments" style="padding-bottom:70px;">
	<div class="mResumexD01 mRjobsD">
		<h2>工作情况</h2>
			<ul>
				<!--{if ($job[jobType])}--><li><span>工作性质：</span><em>{$job[jobType]}</em></li><em><!--{/if}-->
				<!--{if ($job[cuname])}--><li><span>所属部门：</span><em>{$job[cuname]}</em></li><!--{/if}-->
				<!--{if ($job[jobclass])}--><li><span>职位类别：</span><em>{$job[jobclass]}</em></li><!--{/if}-->
			</ul>
	</div>
	<div class="mResumexD01 mRjobsD">
		<h2>岗位要求</h2>
			<ul>
				<!--{if ($job[jobGender])}--><li><span>性别要求：</span><em>{$job[jobGender]}</em></li><!--{/if}-->
				<!--{if ($job[jobWorkYear])}--><li><span>工作经验：</span><em>{$job[jobWorkYear]}</em></li><!--{/if}-->
				<!--{if ($job[jobDegree])}--><li><span>学历要求：</span><em>{$job[jobDegree]}</em></li><em><!--{/if}-->
				<!--{if ($job[jobAge])}--><li><span>年龄范围：</span><em>{$job[jobAge]}</em></li><!--{/if}-->
				<!--{if ($job[jobLanguage])}--><li><span>外语要求：</span><em>{$job[jobLanguage]}</em></li><!--{/if}-->
				<!--{if ($job[jobSalary])}--><li><span>薪资待遇：</span><em>{$job[jobSalary]}</em></li><!--{/if}-->
				<!--{if ($job[rewardStr])}--><li><span>福利待遇：</span><em>{$job[rewardStr]}</em></li><!--{/if}-->
				<!--{if ($job[worktimeLimit])}--><li><span>工作时间：</span><em>一天工作{$job[worktimeLimit]}小时</em></li><!--{/if}-->
				<!--{if ($job[workdayLimit])}--><li><span>工作时间：</span><em>一周工作{$job[worktimeLimit]}天</em></li><!--{/if}-->
			</ul>
	</div>
	<!--{if $job[jobContent]}-->
	<div class="mResumexD01 mRjobsD">
		<h2>岗位职责</h2>
		<div class="submRjobsD">{$job[jobContent]}</div>
	</div>
	<!--{/if}-->
	<!--{if $job[jobContent2]}-->
	<div class="mResumexD01 mRjobsD">
		<h2>任职资格</h2>
		<div class="submRjobsD">
				{$job[jobContent2]}
		</p></div>
	</div>
	<!--{/if}-->
	<div class="mResumexD01 mRjobsD" style="border-bottom:none;">
		<h2>联系方式</h2>
		<!--{if $job['linkWay']=='0'}-->
			<span class="linkman">请在597人才网直接投递简历。</span>
		<!--{else}-->
			<div class="partC contacUs" >
				<div class="txt">
					<!--{if $linkWays}-->
						<!--{loop $linkWays $l}-->
							<p>{$l['n']}:{$l['t']}</p>
						<!--{/loop}-->
					<!--{else}-->
						<p>{$linkName}</p>
						<p>{$linkWayStr}</p>
					<!--{/if}-->
				</div>
				<a href="javascript:void(0);" onclick="$('#blackMask,#showPhone').show();" class="tel"><i class="jpFntWes">&#xf095;</i></a>
			</div>
		<!--{/if}-->	
	</div>
</div>
	<!-- 弹出层 -->
	<div id="blackMask"></div>
	<div id="showPhone">
		<!--{loop $TellinkWayStr $l}-->
		<p ><a href='tel:{$l}' style='color:#f50;'>{$l}</a></p>
		<!--{/loop}-->
		<p onclick="$('#blackMask,#showPhone').hide();">取消</p>
	</div>