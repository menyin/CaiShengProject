<!--{if $isShow}-->
	<ul class="iduaTionImgList">
		<!--{if $templatePic}-->
			<!--{loop $templatePic $k $l}-->
				<li data_type="{$l['type']}" img_id="{$l['pid']}" template_id="{$l['templateId']}">
				 <p><img src="<!--{if $l['type']==1}-->http://pic.{ROOT_DOMAIN}/companyTemplate/{$l['picPath']}<!--{else}-->http://cdn.597.com/img/templates/{$l['picPath']}<!--{/if}-->" width="320" height="96"></p>
				<div class="iduaTionLit"><em>{$l['key']}</em><a class="swap" href="javascript:">前移</a><a class="red del" href="javascript:">删除</a></div>
				</li>
			<!--{/loop}-->
		<!--{else}-->
			<div>您还未添加个性化图片！</div>
		<!--{/if}-->
	</ul>

<!--{else}-->
<div class="iduatopBtnbg">
	<a href="javascript:" class="iduatopBtnF">添加自定义图片</a><span>或</span>
	<a href="javascript:" class="iduatopBtnB">选择模板图片</a><span>(最多可设置4张封面图）</span>
</div>
<div id="iduaTionImgList">
	<ul class="iduaTionImgList">
		<!--{if $templatePic}-->
			<!--{loop $templatePic $k $l}-->
				<li data_type="{$l['type']}" img_id="{$l['pid']}" template_id="{$l['templateId']}">
				 <p><img src="<!--{if $l['type']==1}-->http://pic.{ROOT_DOMAIN}/companyTemplate/{$l['picPath']}<!--{else}-->http://cdn.597.com/img/templates/{$l['picPath']}<!--{/if}-->" width="320" height="96"></p>
				<div class="iduaTionLit"><em>{$l['key']}</em><a class="swap" href="javascript:">前移</a><a class="red del" href="javascript:">删除</a></div>
				</li>
			<!--{/loop}-->
		<!--{else}-->
			<div>您还未添加个性化图片！</div>
		<!--{/if}-->
	</ul>


</div>
<div class="popJobbd">
	<a href="javascript:" class="newPopQuit">取 消</a>
	<a href="javascript:" class="newPopSave">保 存</a>
</div>

<script type="text/javascript">

</script>
<!--{/if}-->

