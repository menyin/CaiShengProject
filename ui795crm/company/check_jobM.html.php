<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf">
<title>个人简历</title>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/597.js"></script>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/templates/default/js/frame.js"></script>
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/crm/css/frame.css">
<link type="text/css" rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/css/jquery.boxy.css">
<link href="//cdn.{ROOT_DOMAIN}/crm/css/Resume1.css" rel="stylesheet" type="text/css">
<style>
body {
	margin-bottom:0px;
	margin-left:0px;
	margin-right:0px;
	margin-top:0px;
		 }
table {
	font-size: 12px;
	color: #333333;
	line-height: 1.6em;

}
a:link {
	color:#1F376D;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #1F376D;
}
a:hover {
	color: #1F376D;
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #333333;
}
</style>
<style type="text/css">
	html{overflow:scroll;}
</style>
<body topmargin="0" marginheight="0" marginwidth="0" leftmargin="0" background="/templates/default/images/bg15.gif">
<!--{loop $result $key $value}-->
<div id="{$job[$key][_jid]}" style="display:block; margin:10px auto; width:760px;">
	<span id="job_{$key}"></span>
	<table width="744" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td align="center" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td width="25" align="center"><img src="/templates/default/images/arrow1.gif" width="13" height="9"></td>
                      <td height="25" class="font-14"><a href="http://www.{ROOT_DOMAIN}/com-{$job[$key][_cid]}/" target="_blank"><b>{$job[$key][cname]}</b></a></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
          </tbody>
        </table>
        <table width="96%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td bgcolor="ff811e" height="2"></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#ffeee0" class="font-14"><font color="#000000">&nbsp;<b>{$job[$key][jname]}</b></font> [
						<a class="btn_s" onclick="Boxy.load('check_job.html?act=jobedit&c_id={$job[$key][_cid]}&jid={$job[$key][_jid]}&keyM={$key}',{title: '职位名称修改'});">编辑</a>]</td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="1" cellpadding="4">
                          <tbody>
                            <tr bgcolor="#FFFFFF">
                              <td width="15%" height="23" align="left" bgcolor="f9f9f9">职位类型：</td>
                              <td width="35%" height="23">{$job[$key][jobType]}</td>
                              <td width="15%" height="23" align="left" bgcolor="f9f9f9">薪金待遇：</td>
                              <td width="35%" height="23">￥{$job[$key][jobSalary]}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td width="15%" height="23" align="left" bgcolor="f9f9f9">招聘部门：</td>
                              <td width="35%" height="23"><!--{if $job[$key]['cuname']}--> - {$job[$key]['cuname']}<!--{/if}--></td>
                              <td width="15%" height="23" align="left" bgcolor="f9f9f9">招聘人数：</td>
                              <td width="35%" height="23">{$job[$key]['jobNumber']}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">发布日期：</td>
                              <td height="23">{$job[$key]['_createTime']}</td>
                              <td height="23" align="left" bgcolor="f9f9f9">截止日期：</td>
                              <td height="23">{$job[$key]['_outTime']}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">工作地区：</td>
                              <td height="23">{$job[$key][jobArea]} </td>
                              <td height="23" align="left" bgcolor="f9f9f9">现所在地：</td>
                              <td height="23">不限</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">学历要求：</td>
                              <td height="23">{$job[$key]['jobDegree']}</td>
                              <td height="23" align="left" bgcolor="f9f9f9">工作经验：</td>
                              <td height="23">{$job[$key]['jobWorkYear']}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">年龄要求：</td>
                              <td height="23">{$job[$key]['jobAge']}</td>
                              <td height="23" align="left" bgcolor="f9f9f9">性别要求：</td>
                              <td height="23">{$job[$key]['jobGender']}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">联系人：</td>
                              <td height="23">{$job[$key]['linkUser']}</td>
                              <td height="23" align="left" bgcolor="f9f9f9">联系电话：</td>
                              <td height="23"><strong>{$job[$key]['strPhone']}</strong></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">传真号码：</td>
                              <td height="23">{$job[$key]['comFax']}</td>
                              <td height="23" align="left" bgcolor="f9f9f9">邮政编码：</td>
                              <td height="23">{$job[$key]['comZipcode']}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF" style="display:none;">
                              <td height="23" align="left" bgcolor="f9f9f9">招聘难度：</td>
                              <td height="23">无</td>
                              <td height="23" align="left" bgcolor="f9f9f9">招聘时间：</td>
                              <td height="23">无</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">邮箱地址：</td>
                              <td height="23"><strong>{$job[$key]['comEmail']}</strong></td>
                              <td height="23" align="left" bgcolor="f9f9f9">跟单员：</td>
                              <td height="23"><strong>{$job[$key]['adminName']}</strong></td>                              
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="4" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="23" align="left" bgcolor="f9f9f9">联系地址：</td>
                              <td height="23" colspan="3">{$job[$key]['jobAddInfo']}</td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td height="1" colspan="5" bgcolor="#dddddd"></td>
                            </tr>
                            <tr bgcolor="#FFFFFF" style="display:none;">
                              <td height="23" align="left" bgcolor="f9f9f9">乘车路线：</td>
                              <td height="23" colspan="3">福州鼓楼、恒宇国际公馆、温泉、六一北路温泉支路</td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                    <tr>
                      <td bgcolor="ff811e" height="2"></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table width="100%" border="0" cellspacing="0" cellpadding="4">
                  <tbody>
                    <tr>
                      <td>
                        <strong>职位描述：</strong><br><br>
                        <textarea id="job{$job[$key][_jid]}" cols="100" rows="16" disabled="disabled">{$job[$key]['jobContent']}</textarea>
                        <br><br>
                        <!--<input type="button" name="noshenhe" value="更新职位描述" onClick="javascript:checkJobContent('{$job[$key][_cid]}','{$job[$key][_jid]}')">-->
                      </td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <div id="Job0_{$job[$key]['jid']}" style="display:block">
                  <form name="form{$job[$key]['jid']}" method="post" action="">
                    <table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC">
                      <tbody>
                        <tr bgcolor="#FFFFFF">
                          <td colspan="2"><a onClick="form{$job[$key]['jid']}.Remark.value=form{$job[$key]['jid']}.Remark.value+'多个岗位不可发布在同一个职位中，多个岗位请重新分开发布。';" style="cursor:hand"><u>1.多个岗位不可发布在同一个职位中，多个岗位请重新分开发布。</u></a><br>
                            <a onClick="form{$job[$key]['jid']}.Remark.value=form{$job[$key]['jid']}.Remark.value+'此岗位名称不规范，不存在，请填写有效的岗位名称。';" style="cursor:hand"><u>2.此岗位名称不规范，不存在，请填写有效的岗位名称。</u></a><br>
                            <a onClick="form{$job[$key]['jid']}.Remark.value=form{$job[$key]['jid']}.Remark.value+'该岗位本站不允许发布。';" style="cursor:hand"><u>3.该岗位本站不允许发布。</u></a><br>
                            <a onClick="form{$job[$key]['jid']}.Remark.value=form{$job[$key]['jid']}.Remark.value+'发布的职位名称中不允许含有非法字符,请删除字符。';" style="cursor:hand"><u>4.发布的职位名称中不允许含有非法字符,请删除字符。</u></a><br>
                            <a onClick="form{$job[$key]['jid']}.Remark.value=form{$job[$key]['jid']}.Remark.value+'此岗位已有发布，不得发布重复岗位，请删除。';" style="cursor:hand"><u>5.此岗位已有发布，不得发布重复岗位，请删除。</u></a><br>
                            <a onClick="form{$job[$key]['jid']}.Remark.value=form{$job[$key]['jid']}.Remark.value+'请填写详细的职位描述，不能为空。';" style="cursor:hand"><u>6.请填写详细的职位描述，不能为空。</u></a><br></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td colspan="2"><br>审核原因
                            <textarea name="Remark" id="Remark{$job[$key][_jid]}" cols="50" rows="3"></textarea></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td><input type="button" name="noshenhe" value="取消审核" onClick="javascript:theForm_Submit('{$job[$key][_cid]}','{$job[$key][_jid]}',2,'{$key}')"></td>
                          <td><input type="button" name="noshenhe" value="通过审核" onClick="javascript:theForm_Submit('{$job[$key][_cid]}','{$job[$key][_jid]}',1,'{$key}' )"></td>
                        </tr>
                      </tbody>
                    </table>
                  </form>
                </div></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
</div>
<!--{/loop}-->
</body>
<script language="JavaScript">
function theForm_Submit(cid,jid,ischeck,returnId)
{
	return_Id=parseInt(returnId)+1;
	if(ischeck==1){
		$.getJSON('/api/web/'+'admin.api?act=jobOk&cid=' + cid + '&jid=' + jid + '&v=' + Math.random(), function(result){
			if(result.status==0) {
				alert('你尚未登录，请先登录！');
			}else if(result.status>0) {
				//alert('简历通过审核！');
				document.getElementById(jid).style.display="none";
			} else {
				alert('操作失败！');
			}
		});
	}
	if(ischeck==2){
		txtRemark=document.getElementById('Remark'+jid).value;
		if(txtRemark==''){
			alert("不通过理由不能为空！");
			return;
		}
		$.getJSON('/api/web/'+'admin.api?act=jobNo&cid=' + cid + '&jid=' + jid + '&txtRemark=' + txtRemark + '&v=' + Math.random(), function(result){
			if(result.status==0) {
				alert('你尚未登录，请先登录！');
			}else if(result.status>0) {
				alert('简历屏蔽成功！');
				document.getElementById(jid).style.display="none";
			} else {
				alert('操作失败！');
			}
		});
	}
}
function checkJobContent(cid,jid){
  if(cid==''||jid==''){
    alert('参数错误');
    return;
  }
  var content = ($('#job'+jid).val());
  $.post('/api/web/admin.api',{act:'chkJobContent',cid:cid,jid:jid,content:content},function(result){
    alert(result.msg);
  },'json');
}
</script>
</html>