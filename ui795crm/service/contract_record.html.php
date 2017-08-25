<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/base.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/main.css">
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/597.js"></script>
<div class="content" style="">
	<div id="main" class="security-groups" style="">
		<div class="quickbar">
			<div class="searchBox">
				<div class="location">
					<div class="location_main item">
						<ul>
							<form method="get">
							<input type="hidden" name="act" value="{$act}">
							<li class="ml_10">创建时间：
								<input type="text" style='width:80px' id="txtStartDate" name="txtStartDate" placeholder="开始时间" value="{$startDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>-
								<input type="text" style='width:80px' id="txtEndDate" name="txtEndDate" placeholder="结束时间" value="{$endDate}" onclick="WdatePicker()" required="required" readonly="readonly"/>
							</li>
							<li class="ml_10">
								<select name="priceType">
									<option value="">请选择</option>
									<option value="1" <!--{if $priceType==1}-->selected=""<!--{/if}-->>未付费</option>
									<option value="2" <!--{if $priceType==2}-->selected=""<!--{/if}-->>付费</option>
								</select>
							</li>
							<li class="ml_10">模糊查询：<input type="text" name="query" id="query" value="{$q}" class="search input_txt"></li>
							<li class="ml_10">
								<button type="submit" class="btn_gray btn_search btn_change" >查 询</button>
							</li>
							</form>
						</ul>
						<div class="paginator" style="<!--{if $num_all<=0}-->display:none;<!--{/if}-->">{$showpage}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mainContent" style="">
			<div class="main_content">
				<form name="listform" method="post" action="">
				<div class="cell_tb_list" style="height:185px;">
					<table class="has_checkbox">
						<thead>
							<tr class="table_header">
								<th class="td1" style="display:none;" width="10" ></th>
								<th width="50" style="display:none;">ID</th>
								<th width="60px">合同名称</th>
								<th width="200px">企业名称</th>
								<th width="66px">创建时间</th>
								<th width="66px">开始时间</th>
								<th width="66px">结束时间</th>
								<th width="50px">付款金额</th>
								<th width="100">操作</th>
							</tr>
						</thead>
						<!--{loop $contracts $contract}-->
						<tbody>
							<tr class="">
								<td class="td1" style="display:none;"></td>
								<td style="display:none;">{$contract[contractId]}</td>
								<td>{$contract[title]}</td>
								<td>{$contract[cname]}</td>
								<td>{$contract[createTime]}</td>
								<td>{$contract[startDate]}</td>
								<td>{$contract[endDate]}</td>
								<td>{$contract[contract_price]}</td>
								<td>
									<!-- <a class="btn_s" onClick="bangding('{$contract[_cid]}','{$contract[cname]}','{$contract[title]}','{$contract[account_name]},'{$contract[amount_money]}','{$contract[receipt]}','{$contract[transferTime]},'{$contract[contract_remark]}')">导入</a> -->
									<a class="btn_s" onClick="bangding('{$contract[_cid]}','{$contract[cname]}','{$contract[title]}','{$contract[payment]}','{$contract[paymentName]}','{$contract[account_name]}','{$contract[contract_price]}','{$contract[contractId]}','{$contract[receipt]}','{$contract[transferTime]}','{$contract[transferTime2]}','{$contract[contract_remark]}');">导入</a>
								</td>
							</tr>
						</tbody>
						<!--{/loop}-->
					</table>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
function bangding(_cid,cname,title,payment,paymentName,account_name,contract_price,contractId,receipt,transferTime1,transferTime2,contract_remark){
	var cid=_cid;
	var cname=cname;
	var title=title;
	var account_name=account_name;
	var transferTime1=transferTime1;
	var transferTime2=transferTime2;
	parent.document.getElementById("myH2").innerHTML =  "<input type=\"hidden\" class=\"text\" name=\"c_id\" id=\"c_id\" value="+cid+" size=\"20\" /><input type=\"text\" class=\"text\" name=\"cname\" id=\"cname\" value="+cname+" size=\"50\" readonly=\"\" />";
	parent.document.getElementById("contract2").innerHTML =  "<input type=\"text\" class=\"text\" name=\"contract_title\" id=\"contract_title\" value="+title+" size=\"50\"/>";
	parent.document.getElementById("payment").options.add(new Option(paymentName,payment));
	var slt=parent.document.getElementById("payment");
	slt.options[slt.options.length-1].selected='selected';
	if(account_name){
		parent.document.getElementById("contract3").innerHTML =  "<input type=\"text\" class=\"text\" name=\"account_name\" id=\"account_name\" value="+account_name+" />";
	}
	parent.document.getElementById("contract_price").value=contract_price;
	parent.document.getElementById("contractId").value=contractId;
	if(receipt==1){
		parent.document.getElementById("contract41").innerHTML =  "<input name=\"receipt\" type=\"radio\" value=\"1\" id=\"right103\" checked=\"\" />";
		parent.document.getElementById("transferTime").value =  transferTime1;
	}else{
		parent.document.getElementById("contract42").innerHTML =  "<input name=\"receipt\" type=\"radio\" value=\"0\" id=\"right102\" checked=\"\" /><label for=\"right102\">未付款</label>";
	}
	parent.document.getElementById("contract5").innerHTML =  "<textarea type=\"text\" class=\"text1\" id=\"contract_remark\" name=\"contract_remark\" rows=\"3\" message=\"合同备注\" style=\"margin: 0px; width: 100%;\">"+contract_remark+"</textarea>";
	//parent.document.getElementById("frame1").css("display","none");
}
</script>
