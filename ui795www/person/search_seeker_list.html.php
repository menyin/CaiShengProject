<style>
	#seeker {margin-top: 5px;}
	#seeker td { text-align: center; padding: 10px; border-bottom: 1px -solid #eee;}
	#seeker .seeker-title td{ text-align: left; font:bold 14px 微软雅黑; }
	#seeker a {color: #3D84B8; margin-right: 8px;}
	#seeker a:hover {color: #0af; }
	#seeker .seekName { display: block; width: 280px; white-space: nowrap; overflow: hidden; text-overflow:ellipsis; height: 14px;}
</style>
<table width="100%" id="seeker">
	<tr class="seeker-title" ><td colspan="4">您当前有<span style="color:#f60;font-family:arial;">{$num_all}</span>个搜索器</td></tr>
	<!--{if $seekers}-->
	<tr style="font-weight:bold;">
		<td>序号</td>
		<td>搜索器名称</td>
		<td>添加时间</td>
		<td>操作</td>
	</tr>
	<!--{loop $seekers $k $l}-->
		<tr rel="{$l['_sid']}">
			<td>{$k}</td>
			<td><span class="seekName">{$l['seekName']}</span></td>
			<td>{$l['_updateTime']}</td>
			<td><a href="/jobSearch.html?id={$l['_sid']}" target="_blank">查看</a><a href="/zhaopin/?param={$l['url']}" target="_blank">搜索</a><a href="javascript:;" id="seekDel">删除</a></td>
		</tr>
	<!--{/loop}-->
	<!--{/if}-->
	<tr><td colspan="4" style="padding:5px;">&nbsp;</td></tr>
</table>
<script type="text/javascript">
jpjs.use('@confirmBox',function(m){
	var confirmBox = m['widge.overlay.confirmBox'],
	$ = m['jquery'];
	$("#seeker #seekDel").click(function(){
		var id=$(this).closest('tr').attr('rel');
		if(confirm('确定删除?')){
			$.getJSON('/person/seeker.html',{act:'del',id:id},function(data){
				if(data.status==1){
					if(data&&data.status==1){
						confirmBox.timeBomb(data.msg, {
							name:'success',
							width:200
						});
						window.location.href=window.location.href;
					}else{
						confirmBox.timeBomb(data.error, {
							name:'fail',
							width:200
						});
					}					
				}else{

				}
			});
		}
	});
});
</script>