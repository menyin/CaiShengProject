<?exit?>
<section class="schbox" style="display:none;" id="schbox">
	<div class="schBar"><a href="javascript:void(0);" class="jpFntWes closeBox" id="closeSchBox">&#xf053;</a>
		<form id="frmjobSearchdo" method="get" action="/zhaopin/">
			<span>
				<b>
					<dl class="selBox" id="selBox">
						<dt><em id="selectEm">全文</em> <img src="//cdn.{ROOT_DOMAIN}/m/images/change-city.png" width="9" height="9"></dt>
						<dd>
							<p data-val="1">职位</p>
							<p data-val="2">公司</p>
							<p data-val="3">全文</p>
						</dd>
					</dl>
					<input id="selectType" type="hidden" name="condition" value="<!--{if $_GET['condition']}-->$_GET['condition']<!--{else}-->3<!--{/if}-->" >
					<input id="schBoxText" name="q" type="text" placeholder="点击左边可切换职位/公司搜索" value="{$_GET['q']}" x-webkit-speech/>
				</b>
			</span>
			<a href="javascript:void(0);" id="btnSearchDo" class="jpFntWes schBarBtn">&#xf002;</a>
			
		</form>
	</div>
	<div class="hotJobs">
		<h4>热门职位</h4>
		<div class="lst">
			<a href="/zhaopin/?q=销售"><span>销售</span></a>
			<a href="/zhaopin/?q=文员"><span>文员</span></a>
			<a href="/zhaopin/?q=业务员"><span>业务员</span></a>
			<a href="/zhaopin/?q=客服"><span>客服</span></a>
			<a href="/zhaopin/?q=平面设计"><span>平面设计</span></a>
			<a href="/zhaopin/?q=会计"><span>会计</span></a>
			<a href="/zhaopin/?q=司机"><span>司机</span></a>
			<a href="/zhaopin/?q=美工"><span>美工</span></a>
			<a href="/zhaopin/?q=仓管"><span>仓管</span></a>
			<a href="/zhaopin/?q=前台"><span>前台</span></a>
			<a href="/zhaopin/?q=营业员"><span>营业员</span></a>
			<a href="/zhaopin/?q=导购"><span>导购</span></a>
			<a href="/zhaopin/?q=电话销售"><span>电话销售</span></a>
			<a href="/zhaopin/?q=人事"><span>人事</span></a>
		</div>
	</div>
</section>


<script>
	$('#selBox dt').click(function(){
		$(this).siblings('dd').show();
		$('#selBox p').each(function(){
			if($(this).text() ===  $('#selectEm').text()){
				$(this).hide().siblings().show();
			}
		});
	});

	$('#selectEm').html(<!--{if $_GET['condition']==1}-->'职位'<!--{/if}--><!--{if $_GET['condition']==2}-->'公司'<!--{/if}--><!--{if $_GET['condition']==3 || !$_GET['condition']}-->'全文'<!--{/if}-->);

	$('#selBox p').click(function(){
		$(this).parent().hide();
		$('#selectEm').html($(this).text());
		$('#selectType').val( $(this).attr('data-val'));
	});
</script>
