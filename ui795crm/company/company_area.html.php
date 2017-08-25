<form id="postForm" name="postForm" method="post" action="/api/web/admin.api">
	<input type="hidden" name="act" id="act" value="save_area" />
	<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
	<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
	<input type="hidden" name="form" id="form" value="{$form}" />
	<div class="add_speed_step">
		<div class="step_1 step_2 step_left">
			<table>
				<tr>
					<td class="td1"><span class="step_url_title">公司名称： </span></td>
					<td class="td2" colspan="2">
						{$companyInfo['cname']}
					</td>
				</tr>
				<tr>
					<td class="td1">地区:</td>
					<td class="td2" colspan="2">
						<input type="hidden" name="query_regionId" id="query_regionId" value="{$companyInfo['comAreaId']}" />
						<input type="text" class="search input_txt" name="query_region" id="query_region" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" value="{$regionInfo['region_name_full']}" title="{$regionInfo['region_name_full']}" readonly="true">
						<script language="javascript">
							var areaOdjid='query_regionId';
							var areaOdjstr='query_region';
							var areaOdjProvice=1;//是否省可选
							var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
							var areaOdjnumber=9;//数量，如果唯一值，则立即返回
						</script>
					</td>
				</tr>
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div class="step_submit_btn">
		<button type="button" name="step1_submit" class="step1_submit submit_btn_ok" onClick="check();"></button>
	</div>
</form>
<script type="text/javascript">
function check () {
	if($('#query_region').val() == ''||typeof($('#query_region').val()) == 'undefined'){
		alert("地区不能为空！");
		return;
	}
	$("#postForm").submitForm({ beforeSubmit: '', data: {}, success: function(data){
		if(data.status<1){
			$.message(data.msg, { title: "系统提示", icon: "fail" });
			return;
		}else{
			$.anchorMsg(data.msg,{icon:"success"});
			window.history.go();
		}

	}, clearForm: false});
}
</script>