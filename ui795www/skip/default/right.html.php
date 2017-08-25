<div class="mcR">
	<div class="mcRcon">
		<!--
		<div class="cll">
			<div class="ck"><h3>近期简历查看率：</h3><i>统计中</i></div>
			<div class="ck"><h3>近期简历处理率：</h3><i>统计中</i></div>
			<div class="ck"><h3>公司福利指数：</h3><i>8.06</i></div>
		</div>
		-->
		<div class="Cxinxi">
			<div class="Ct"><h3>公司信息</h3></div>
			<div class="Cc">
				<p>所处行业：{$com[comIndustry]}</p>
				<p>单位性质：{$com[comType]}</p>
				<p>公司规模：{$com[comWorkers]}</p>
				<p>所在地区：{$com[comCity]}</p>
				<p>公司网站：<a href='{$com[comSite]}' rel='nofollow' target='_blank'>{$com[comSite]}</a></p>
				<p>公司地址：{$com[comAddress]}</p>
			</div>
		</div>
	</div>
</div>
<div class="mcR">
	<div class="mcRcon">
		<div class="Cxinxi">
			<div class="Ct"><h3>浏览该职位的人还浏览了</h3></div>
			<div class="Cc">
				<!--{loop $searchs $search}-->
				<p><a href='/job-{$search[_jid]}.html' rel='nofollow' target='_blank'>{$search[jname]}</a></p>
				<!--{/loop}-->
			</div>
		</div>
	</div>
</div>