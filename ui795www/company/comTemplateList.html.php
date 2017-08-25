<div id="iduaPageContainer">
	<ul class="iduaTemplate">
		<!--{loop $piclist $l}-->
	        <li><a data-type="image" data-name="{$l}.jpg" data-id="{$l}" data-index="" href="javascript:;"><i></i><img src="http://cdn.597.com/img/templates/{$l}.jpg" width="320" height="96"></a></li>
	    <!--{/loop}-->
	</ul>
	<div class='newJobPage newpopPage'>
	<a href='javascript:;' data-url='/company/companyTemplate.html?act=list&page={$prev}' data-type='page' class='prevL' ></a>
	<!--{loop array(1,2,3,4) $l}-->
	<a href='javascript:;' <!--{if $l==$page}-->class='cut'<!--{else}-->data-url='/company/companyTemplate.html?act=list&page={$l}' data-type='page'<!--{/if}-->>{$l}</a>
	<!--{/loop}-->
	<a href='javascript:;' data-url='/company/companyTemplate.html?act=list&page={$last}' data-type='page' class='nextPageR'></a>
	</div>
</div>
<!--{if $pagetype==1}-->
<div class="popJobbd" style="margin-top:20px;">
    <a href="javascript:;" class="newPopQuit">取 消</a>
    <a href="javascript:;" class="newPopSave">保 存</a>
</div>
<!--{/if}-->