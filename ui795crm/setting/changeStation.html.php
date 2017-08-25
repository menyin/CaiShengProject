
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>选着站点</title>
</head>
<body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="470" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="470" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="eeeeee">
        <form action="line.html" name="search" method="get">
          <tr>
            <td height="25" bgcolor="f9f9f9">

              所在城市：
              <select id="cityId" name="cityId" class="drop" style="float: none;width: 160px;">
                <option value="">请选择城市</option>
                <!--{loop $cityList $val}-->
                <!--{if $val['id'] == $_GET['cityId']}-->
                <option selected='selected' value="{$val['id']}">{$val['name']}</option>
                <!--{else}-->
                <option  value="{$val['id']}">{$val['name']}</option>
                <!--{/if}-->
                <!--{/loop}-->
              </select><br/>
              站台名称：
              <input name="name" type="text" id="name">
              <input type="hidden" value="changeStation" name="act"/>
              <input type="submit" name="Submit" value="搜索">
              </td>
          </tr>
        </form>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <!--{loop $stationList['rows'] $val}-->
  <tr>
    <td>
    	<table width="500" border="0" cellpadding="4" cellspacing="1" bgcolor="#dddddd">
	        <tr align="center" bgcolor="#f5f5f5"> 
	          <td width="120">选择</td>
	          <td>站台名称</td>
	        </tr>
	          <tr bgcolor="#FFFFFF"> 
	            <td width="100" align="center"><input name="bangind" type="button" value="绑定" onClick="javascript:setcompany('{$val['name']}',{$val['id']})"></td>
	            <td>{$val['name']}[{$fxList[$val['fx']]['name']}](站台id：{$val['id']})</td>
	          </tr>
		</table>
    </td>
  </tr>
  <!--{/loop}-->
</table>
<script language="javascript" type="text/javascript">
function setcompany(name,id)
{
	window.close();
	window.opener.document.getElementById("station").value=name;
	window.opener.document.getElementById("stationId").value=id;
}
</script>
</body>
</html>