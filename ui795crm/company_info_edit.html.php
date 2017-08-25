<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
<script language="javascript" type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/My97DatePicker/WdatePicker.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		curids = "company_info";
		/*
		initGenOption($("#SltCarType"), "cartype", "{$car[carType]}");
		initArea($("#SltArea"), "{$car['area']}");
		initBrand($("#SltBrand"), "{$car['area']}", "{$car['brand']}");
		initSerial($("#SltSerial"), "{$car['brand']}", "{$car['serial']}");
		initModel($("#SltModel"), "{$car['serial']}", "{$car['model']}");
		initYearOption($("#SltCarYear"), "2011", "{$car['carYear']}");
		initMonthOption($("#SltCarMonth"), "{$car['carMonth']}");
		*/
		
		initGenOption($("#comType"), "comType", "1");
		initGenOption($("#createFundsType"), "createFundsType", "1");
		initGenOption($("#comWorks"), "comWorks", "9");
		
		
		initProv($("#SltComProvice"), 350000);
		initCity($("#SltComCity"), 350000, 350200);
		initXian($("#SltComXian"), 350200,350203);
	});
</script>

<body> 
<div id="content">
	<!--{template nav}-->
	<div id="contentBody" style="visibility: visible;">
		<!--  小贴士 start  -->
		<div id="tips" class="hide" style="width: 256px;display:none">
			<div class="tips" style="">
				<div class="tips-title" style="">小贴士
					<div class="btn_close"></div>
				</div>
				<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
					<div class="title">
						<div data-bind="text: cat">常见问题</div>
					</div>
					<div data-bind="foreach: links">
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
						</div>
					
						<div class="items">
							<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
						</div>
					</div>
					<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
						<div class="more">
							<div>
								更多： 
								<a href="#" target="_blank">帮助中心</a> &nbsp;
								<a href="#" target="_blank">售后支持</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				
				<div class="title">
					<div class="m_bg">{$com[cname]}</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<span class="gray" style="height:200px;">*您好！欢迎使用597人才网，我是平台助手小五！{$sessionid}</br></span>
						</div>
					</div>
				</div>
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
						    <div class="mod_pool">
						        <div class="summary">
						        	<div class="apply_main">
										<div class="apply">
										    <div class="apply_1">
										            <div class="apply_title">
										                <h3>使用提醒：<span>你好，你是谁？</span></h3>
										            </div>
										            <form name="postForm" method="post" >
										            <input type="hidden" name="act" value="infosave">
										            <input type="hidden" name="form" value="{$form}">
										            <input type="hidden" name="nid" id="nid" value="{$com['nid']}">
										            <div class="cell_tb_list">
														<table style="margin-top: 16px;">
															<tr>
																<td class="tb_title" width="140px">企业名称：</td>
																<td >{$com[cname]} 　　[修改请联系客服人员]</td>
															</tr>
															<tr>
																<td class="tb_title">营业执照号码:</td>
																<td><input name="licenceNo" type="text" style="width:340px" value="{$com['licenceNo']}" > 仅输入15位营业执照号码</td>
															</tr>
															<tr>
																<td class="tb_title">法人代表:</td>
																<td><input name="licenceName" type="text" style="width:340px" value="{$com['licenceName']}" > <span>*</span> <input  type="checkbox" name="licenceName_display"> 是否显示法人代表，如果要屏蔽就不要选中它</td>
															</tr>
															<tr>
																<td class="tb_title">公司性质:</td>
																<td >
																	<select id="comType" name="comType" style="width: 160px; "><option value='0'>请选择</option></select>
													      </td>
															</tr>
															<tr>
																<td class="tb_title">行业类别:</td>
																<td ><input name="industry" id="industry" type="text" style="width:340px" value="计算机软件　计算机硬件" readonly="true" onclick="Boxy.load('subpage_industry.htm',{title: '行业类别选择'});">
																</td>
															</tr>
															<tr>
																<td class="tb_title">公司所在地:</td>
																<td >									
																	<select id="SltComProvice" name="SltComProvice" onchange="javascript:onProvChange(this,'SltComCity','SltComXian');"><option value="-1">选择省</option></select>
																	<select id="SltComCity" name="SltComCity" onchange="javascript:onCityChange(this,'SltComXian');"><option value="-1">选择市</option></select>
																	<select id="SltComXian" name="SltComXian"><option value="-1">选择县</option></select>
																	<span>*</span> 至少精确到市
																</td>
															</tr>
															<tr>
																<td class="tb_title">详细地址:</td>
																<td><input name="comAddress" id="comAddress" type="text" style="width:340px" value="{$com['comAddress']}"> <span onclick="insertMap();">地图定位</span></td>
															</tr>
															<tr>
																<td class="tb_title">成立日期:</td>
																<td ><input name="createDate" id="createDate" type="text" style="width:340px" readonly="true" value="{$order['createDate']}" onClick="WdatePicker()"></td>
															</tr>
															<tr>
																<td class="tb_title">注册资金:</td>
																<td ><input name="createFunds" id="createFunds" type="text" style="width:110px" value="{$order['createFunds']}" > 万元　注册资金币种：<select id='createFundsType' name='createFundsType' style='width:105px' ><option value='0'>请选择</option></select>
													       </td>
															</tr>
															<tr>
																<td class="tb_title">员工人数:</td>
																<td><select id='comWorks' name='comWorks' style='width:140px' ><option value='0'>请选择</option></select></td>
															</tr>
															<tr>
																<td class="tb_title">公司简介:</td>
																<td><input name="oremark" type="text" style="width:340px" value="{$order['oremark']}"></td>
															</tr>
														</table>
														
														<table style="margin-top: 16px;">
															<tr>
																<td class="tb_title" width="140px">收货企业名称：</td>
																<td>{$member[company]}</td>
															</tr>
															<tr>
																<td class="tb_title">收货人姓名:</td>
																<td>{$member[realname]}</td>
															</tr>
															<tr>
																<td class="tb_title">收货人地址:</td>
																<td>{$member[address]}</td>
															</tr>
															<tr>
																<td class="tb_title">邮 编:</td>
																<td >{$member[code]}</td>
															</tr>
															<tr>
																<td class="tb_title">联系电话:</td>
																<td >{$member[telphone]}</td>
															</tr>
															<tr>
																<td class="tb_title">传 真:</td>
																<td >{$member[fax]}</td>
															</tr>
														</table>
										            </div>
										        	</form>
										        <div class="apply_btn_next">
										            <div class="apply_btn_bg">
										                <a class="apply_1_next" onclick="document.postForm.submit();">下一步</a>
										            </div>
										        </div>
										    </div>
										    
										</div>
						        	</div>
						        </div>
						    </div>
						</div>

					</div>
				</div>
			</div>
		    <!--<div class="draggle "></div>-->  
		</div>		
		<!--{template sidebar}-->	
	</div>	
</div>
</body>
</html>
<script language="javascript">
  function insertMap() {
    var url = "proxy.php?api=template1000&CID=bibinet&tid=tid1000&width=500&height=500&zoom=12&control=2&cityName="+encodeURIComponent($("#SltComCity").find("option:selected").text())+"&nid="+document.getElementById("nid").value+
          "&name="+encodeURIComponent("{$com['cname']}")+
          "&address="+encodeURIComponent(document.getElementById("comAddress").value)+
          "&phone="+encodeURIComponent(document.getElementById("comAddress").value);
		var winname = window.open(url, '_blank');
		//Boxy.load('url',{title: '行业类别选择'});
  }

  function setNid(nid) {
    document.getElementById("nid").value = nid;
  }
  </script>


<script type="text/javascript">
    function is_zw(str) {
        exp = /[0-9a-zA-Z_]/g;
        if (str.search(exp) != -1) {
            return false;
        }
        return true;
    }
    function checkForm() {
        if (document.getElementById("UserName").value == "") {
            //alert("用户名不能是空值！");
            document.getElementById("UserName").focus();
            return false;
        }
        if (document.getElementById("UserName").value.length < 6 || document.getElementById("UserName").value.length > 18) {
            //alert("6~18个字符，可使用字母、数字、下划线！请继续注册...");
            document.getElementById("UserName").focus();
            return false;
        }
        if (is_zw(document.getElementById("UserName").value)) {
            //alert("用户名不能是中文文字！请继续注册...");
            document.getElementById("UserName").focus();
            return false;
        }
        if (document.getElementById("password").value == "") {
            //alert("密码不能是空值！请继续注册...");
            document.getElementById("password").focus();
            return false;
        }

        if (document.getElementById("password").value.length < 6) {
            //alert("6~16个字符，区分大小写！请继续注册...");
            document.getElementById("password").focus();
            return false;
        }

        if (document.getElementById("password2").value == "") {
            //alert("确认密码不能是空值！请继续注册...");
            document.getElementById("password2").focus();
            return false;
        }

        if (document.getElementById("password2").value != document.getElementById("password").value) {
            alert("确认密码与密码不相同!");
            document.getElementById("password2").focus();
            return false;
        }
        if (document.getElementById("companyname").value == "") {
            alert("公司名称不能是空值！");
            document.getElementById("companyname").focus();
            return false;
        }
        if (document.getElementById("CTypeTwo").options[document.getElementById("CTypeTwo").selectedIndex].value == "") {
            alert("-请选择行业类型-");
            document.getElementById("CTypeTwo").focus();
            return false;
        }
        if (document.getElementById("properity").options[document.getElementById("properity").selectedIndex].value == "") {
            alert("-请选择公司性质-");
            document.getElementById("properity").focus();
            return false;
        }
        var citytem = document.getElementById("county").options[document.getElementById("county").selectedIndex].value;
        if (citytem == "" || citytem == "0") {
            alert("-请选择公司所在地-");
            document.getElementById("county").focus();
            return false;
        }
        if (document.getElementById("contactperson").value == "") {
            alert("招聘联系人不能是空值！");
            document.getElementById("contactperson").focus();
            return false;
        }
        if (document.getElementById("phone").value == "") {
            alert("招聘联系电话不能是空值！");
            document.getElementById("phone").focus();
            return false;
        }
        if (document.getElementById("LinkMan").value == "") {
            alert("本网联系人不能是空值！");
            document.getElementById("LinkMan").focus();
            return false;
        }
        if (document.getElementById("Linkphone").value == "") {
            alert("本网联系电话不能是空值！");
            document.getElementById("Linkphone").focus();
            return false;
        }
        if (document.getElementById("email").value == "") {
            alert("电子邮件不能是空值！");
            document.getElementById("email").focus();
            return false;
        }
        if (document.getElementById("email").value.indexOf("@") == -1 || document.getElementById("email").value.indexOf(".") == -1) {
            alert("邮箱格式不正确！");
            document.getElementById("email").focus();
            return false;
        }
        if (document.getElementById("zipcode").value == "") {
            alert("邮政编码不能是空值！");
            document.getElementById("zipcode").focus();
            return false;
        }
        if (document.getElementById("address").value == "") {
            alert("通讯地址不能是空值！");
            document.getElementById("address").focus();
            return false;
        }
        document.getElementById("btnSubmit").src = "/images/reg_s.jpg";
        document.getElementById("btnSubmit").disabled = true;
    }
</script>