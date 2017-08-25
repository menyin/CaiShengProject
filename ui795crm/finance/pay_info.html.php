<div class="add_speed_step">
	<div class="step_1 step_2 step_left">
		<h3><!--{if $pay[consume_type]==1}-->充值<!--{elseif $pay[consume_type]==2}-->消费<!--{/if}-->    详情</h3>
		<table>
			<tr>
				<td class="td1"><span class="step_url_title">ID： </span></td>
				<td class="td2" colspan="2">
					{$pay[pay_id]}
				</td>
			</tr>
			<tr>
				<td class="td1">用户名： </td>
				<td class="td2" colspan="2">
					{$pay[username]}
				</td>
			</tr>
			<tr>
				<td class="td1">金额： </td>
				<td class="td2" colspan="2">
					{$pay[pay_money]}
				</td>
			</tr>
			<!-- <tr>
				<td class="td1">赠送金额： </td>
				<td class="td2" colspan="2">
					{$pay[add_money]}
				</td>
			</tr> -->
			<tr>
				<td class="td1">类型： </td>
				<td class="td2" colspan="2">
					<!--{if $pay[pay_type]<>5}-->{$__pay_typeStr[$pay[pay_type]]}<!--{else}-->消费<!--{/if}-->
				</td>
			</tr>
			<tr>
				<td class="td1">创建时间： </td>
				<td class="td2" colspan="2">
					{$pay[pay_createTime]}
				</td>
			</tr>
			<tr>
				<td class="td1">支付时间： </td>
				<td class="td2" colspan="2">
					{$pay[pay_time]}
				</td>
			</tr>
			<tr>
				<td class="td1">状态： </td>
				<td class="td2" colspan="2">
					<!--{if $pay[pay_status]==1}-->已支付<!--{elseif $pay[pay_status]==2}-->已结算<!--{elseif $pay[pay_status]==3}-->已关闭<!--{else}-->初始<!--{/if}-->
				</td>
			</tr>
			<tr>
				<td class="td1">说明： </td>
				<td class="td2" colspan="2">
					{$pay[trade_no]}
				</td>
			</tr>
		</table>
	</div>
	<div class="clear"></div>
</div>