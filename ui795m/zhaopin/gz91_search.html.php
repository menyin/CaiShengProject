<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="yes" name="apple-touch-fullscreen"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="apple-mobile-web-app-title" content="{$domainInfo['region_name_short']}597人才网">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="wb:webmaster" content="c51923015ca19eb1" />
	<link rel="apple-touch-icon-precomposed" href="//cdn.{ROOT_DOMAIN}/m/75x75.png" >
	<title><!--{if $_GET['keyword']}-->{$_GET['keyword']} - <!--{/if}-->职位搜索 - 597{$domainInfo['region_name_short']}人才网</title>
	<meta name="revisit-after"  content="1 days" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="//cdn.{ROOT_DOMAIN}/m/css/jobs.css?v=1" type="text/css">
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/m/js/jquery-1.8.3.min.js?v=20140312"></script>
	<script  type="text/javascript" src="//cdn.{ROOT_DOMAIN}/m/js/xgsearch.js?v=1" charset="utf-8"></script>
</head>
<body class="job_search">
	<style type="text/css">
		.newjobPop{width:100%; height:60px; background:url(//cdn.{ROOT_DOMAIN}/m/images/newfilter02.png); overflow:hidden; position:fixed; left:0px; bottom:0px;z-index: 9999}
		.newjobPop a.icon-svg55{ display:block;width:60px;padding: 5px; float:left; height:60px;  text-align:center; line-height:60px; color:#fff; font-size:30px;}
		.newPopx{ float:left; margin:6px 0 ;position: relative}
		.newPopx span{ display:block; color:#fff; font-size:16px; margin-bottom: 3px;}
		.newPopx a{ display:block; width:74px;font-size: 14px; ; height:22px; background:rgb(243,61,72); padding: 9px 5px;color:white; border-radius:5px; text-align:center; line-height:22px; margin:4px 0 0 50px;}
		.newjobPop a.icon-svg152{ display:block; float:right; font-size:22px; color:#000; padding:18px 8px 0 0;}
		    #aban_id{position: fixed;right: 50px;bottom:10px;}
		.newjobPop a.icon-svg55 img{ border-radius: 5px;}
	</style>
<!--{template header}-->
	<div id="nav">
		<a  data-hosts href="/">首页</a>

		<a class='current' data-hosts href="/zhaopin/">找工作</a>

		<a  data-hosts href="/person/resumes.html">简历</a>

		<a nj href="/person/job.html?act=invite">面试邀请</a>

		<a  href="/person/">我的597</a>
	</div>
	<div class="fx jfx">
		<i class="fa fa-angle-double-down fa-2x tobot"></i>
		<b>【职位列表】</b>
	</div>
	<div class="k"></div>

	<div class="searchbox" data-search="g" id="searchArea">
		<form name="f1g" action="/zhaopin/" method="get">
			<div class="finput">
				<input type='hidden' name="order" id="order" value="{$_order}"/>
				<input type='hidden' name="selGender" value="{$_GET['selGender']}"/>
				<input type='hidden' name="selJoinSalary" value="{$_GET['selJoinSalary']}"/>
				<input type='hidden' name="Reward" value="{$_GET['Reward']}"/>
				<input type='hidden' name="callingId" value="{$_GET['callingId']}"/>
				<input name="q" id="jg" data="g" type="text" value="{$_GET['keyword']}" size="20" maxlength="12"  placeholder="职位、公司名" style="margin-top:10px;" autocomplete="off" /> <i class="cross" data-cj="g"><b></b></i>
				<div class="noc_select"></div>
				<select id="noc_diqujg"  name="area" style='background-color:#eee;' onchange="location.href='/zhaopin/?q={$_GET['keyword']}&selGender={$_GET['selGender']}&selJoinSalary={selJoinSalary}&Reward={$_GET['Reward']}&callingId={$_GET['callingId']}&area='+this.value;">
					<option value="{$domainInfo['region_id']}" <!--{if $domainInfo['region_id']==$_area}-->selected='selected' <!--{/if}--> rel="{$domainInfo['region_name_full']}">{$domainInfo['region_name_full']}</option>
					<!--{loop $_region $k $l}-->
					<option  value="{$l['region_id']}" <!--{if $l['region_id']==$_area}-->selected='selected' <!--{/if}-->>{$l['region_name_full']}</option>
					<!--{/loop}-->
				</select>
				<input name="s" class="so" type="submit" value=" 搜 索 " id="search"></div>
		</form>
	</div>
	<div class="k"></div>
	<div class="k"></div>
	<!--{if $other_keyword}-->
	<div id="xgsearch" class="xgsearch" style="display: block; line-height: 30px;">
		相关：
			<!--{loop $other_keyword $l}-->
			<span style="padding-right:12px;"><a href="/zhaopin/?q={$l}"><span class="s_pn">{$l}</span></a></span>
			<!--{/loop}-->
	</div>
	<!--{/if}-->
	<div class="amp" style="text-align:center">
		<!--{loop $rmlist $l}-->
			<a href="javascript:;" class="va <!--{if $_GET['rm']==$l['rmid']}-->act<!--{/if}-->" data-amp="{$l['rmid']}"><i><b>×</b>{$l['rmname']}</i></a>&nbsp;&nbsp;
		<!--{/loop}-->
		<!--
		<a href="/map.html?keyword={$_GET['keyword']}&distance=500" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近 500米<em></em>
			</i>
		</a>
		<a href="/map.html?keyword={$_GET['keyword']}&distance=1000" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近 1公里<em></em>
			</i>
		</a>
		<a href="/map.html?keyword={$_GET['keyword']}&distance=5000" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近 5公里<em></em>
			</i>
		</a>
		-->
		<a href="/map.html?keyword={$_GET['keyword']}&distance=3000" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近<!--{if $_GET['keyword']}--> <span style="color:#f00;">{$_GET['keyword']}</span> <!--{/if}-->职位<em></em>
			</i>
		</a>
	</div>
	<div class='k'></div>
	<a class='serach' href='/zhaopin/' >
		<span>
			您当前在【
			<i id="curCity"></i>
			】搜索
			<span class='hbFntWes'>&#xf00d</span>
		</span>
	</a>
	<div class="k"></div>
	<!--{loop $result[matches] $search}-->
		<div class="j1">
			<!--{if $uid}-->
			<div class="check">
				<span class="nav-toggle-button" data-jobs_id="{$search['_jid']}" data-included="false"> <strong></strong> <em></em>
				</span>
			</div>
			<!--{/if}-->
			<div class="jt">
				<span>
					<a href="/job-{$search['_jid']}.html">
						<span>{$search['jname']}<!--{if $search['urgency']==1}--><em class="is_urgent">急聘</em><!--{/if}--></span>
					</a>
				</span>
			</div>
			<a href="/job-{$search['_jid']}.html">
				<div class="jm">
					<span>{$search['cname']}</span>
				</div>

				<div class="jadd"></div>
				<div class="jadd" >
					<!--{loop $search['_rewardID'] $l}-->
						<!--{if $l==1}--><label class="fl_1" title="五险">险</label><!--{/if}-->
						<!--{if $l==2}--><label class="fl_g" title="公积金">金</label><!--{/if}-->
						<!--{if $l==3}--><label class="fl_c" title="包吃">吃</label><!--{/if}-->
						<!--{if $l==4}--><label class="fl_y" title="包住">住</label><!--{/if}-->
						<!--{if $l==5}--><label class="fl_s" title="双休">双</label><!--{/if}-->
						<!--{if $l==6}--><label class="fl_d" title="单休">单</label><!--{/if}-->
					<!--{/loop}-->

				</div>
				<div class="jb">
					<span>{$search['jobArea']} / <!--{if $search['jobSalary']}-->{$search['jobSalary']}<!--{else}-->面议<!--{/if}--> / {$search['updateTime']}</span>
					<!--{if $search['onDay']>0}--><div class="tui">推</div><!--{/if}-->
				</div>
			</a>

		</div>
	<!--{/loop}-->

	<div class="k"></div>
	<div class="pa">
		<div class="gj-page gj-bbs">
			<a href="/zhaopin/?page=1{$conditionUrl}" class="page-up " data-role="prev">
				<span>首	页</span>
			</a>
			<a class="page-select-a ">
				<span class="change-page" style="color:gray; font-size:14px">{$page}</span>
			</a>
			<!--{if $totalPage<=$page}-->
				<a class="page-down" data-role="next"  href="javascript:void(0);">
					<span style="color:gray">下一页</span>
				</a>
			<!--{else}-->
				<a class="page-down" data-role="next"  href="/zhaopin/?page={$nextPage}{$conditionUrl}">
					<span>下一页</span>
				</a>
			<!--{/if}-->

		</div>
	</div>
	<br>
	<div class="amp" style="text-align:center">
		<!--{loop $rmlist $l}-->
			<a href="javascript:;" class="va <!--{if $_GET['rm']==$l['rmid']}-->act<!--{/if}-->" data-amp="{$l['rmid']}"><i><b>×</b>{$l['rmname']}</i></a>&nbsp;&nbsp;
		<!--{/loop}-->
		<!--
		<a href="/map.html?keyword={$_GET['keyword']}&distance=500" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近 500米<em></em>
			</i>
		</a>
		<a href="/map.html?keyword={$_GET['keyword']}&distance=1000" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近 1公里<em></em>
			</i>
		</a>
		<a href="/map.html?keyword={$_GET['keyword']}&distance=5000" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近 5公里<em></em>
			</i>
		</a>
		-->
		<a href="/map.html?keyword={$_GET['keyword']}&distance=3000" style=" padding-left:4px; padding-right:3px; margin-left:5px;">
			<i>
				<b class="hbFntWes imap" style=" font-size:14px;">&#xf041;</b>
				附近<!--{if $_GET['keyword']}--> <span style="color:#f00;">{$_GET['keyword']}</span> <!--{/if}-->职位<em></em>
			</i>
		</a>
	</div>
	<div id="tobot"></div>
	<div class="fx">
		<b>【搜索职位】</b>
	</div>
	<div class="searchbox" data-search="j" style=" margin-bottom:35px; margin-top:10px;" id="searchJobArea">
		<form name="f1j" action="/zhaopin/" method="get">
			<div class="finput">
				<input type='hidden' name="order" id="order" value="{$_order}"/>
				<input type='hidden' name="selGender" value="{$_GET['selGender']}"/>
				<input type='hidden' name="selJoinSalary" value="{$_GET['selJoinSalary']}"/>
				<input type='hidden' name="Reward" value="{$_GET['Reward']}"/>
				<input type='hidden' name="callingId" value="{$_GET['callingId']}"/>
				<input name="q" id="jj" data="j" type="text" value="{$_GET['keyword']}" size="20" maxlength="12"  placeholder="职位、公司名" autocomplete="off" style="margin-top:10px;" /> <i class="cross" data-cj="g"><b></b></i>
				<div class="noc_select"></div>
				<select id="noc_diqujg"  name="area" style='background-color:#eee;' onchange="location.href='/zhaopin/?selGender={$_GET['selGender']}&selJoinSalary={selJoinSalary}&Reward={$_GET['Reward']}&callingId={$_GET['callingId']}&area='+this.value;">
					<option value="{$domainInfo['region_id']}" <!--{if $domainInfo['region_id']==$_GET['_area']}-->selected='selected' <!--{/if}--> rel="{$domainInfo['region_name_full']}">{$domainInfo['region_name_full']}</option>
					<!--{loop $_region $k $l}-->
					<option  value="{$l['region_id']}" <!--{if $l['region_id']==$_GET['area']}-->selected='selected' <!--{/if}-->>{$l['region_name_full']}</option>
					<!--{/loop}-->
				</select>
				<input name="s" class="so" type="submit" value=" 搜 索 " id="search"></div>
		</form>
	</div>

	<div class="sth">
		<form name="f4" action="/zhaopin/" method="get">
			<input name="q" type="hidden" value="{$_GET['keyword']}">
			<input name="area" type="hidden" value="{$_GET['area']}">
			<div style="text-align:center" class="jobsSelect">
				<span class="jselect">
					<select name="selGender" id="selGender" class="noc"  style="width:52px;<!--{if $_GET['selGender']}-->background-color:#D3F5F5;<!--{/if}-->">
						<option selected='selected' value="0">性别</option>
						<option  value="1" <!--{if $_GET['selGender']==1}-->selected='selected'<!--{/if}-->>男</option>
						<option  value="2" <!--{if $_GET['selGender']==2}-->selected='selected'<!--{/if}-->>女</option>
					</select>
					<i></i>
				</span>

				<span class="jselect">
					<select name="Reward" id="Reward" class="noc"  style="width:52px;<!--{if $Reward}-->background-color:#D3F5F5;<!--{/if}-->">
						<option value="0" selected>福利</option>
							<!--{loop $__reward $key $value}-->
								<option value="{$key}" <!--{if $Reward==$key}-->selected='selected'<!--{/if}-->>{$value}</option>
							<!--{/loop}-->
					</select>
					<i></i>
				</span>

				<span class="jselect">
					<select name="selJoinSalary" id="selJoinSalary" class="noc"  style="width:52px;<!--{if $_GET[selJoinSalary]}-->background-color:#D3F5F5;<!--{/if}-->" >
							<!--{loop $__joinSalary $key $value}-->
							<option value="{$key}" <!--{if $_GET[selJoinSalary]==$key}-->selected='selected'<!--{/if}-->>{$value}</option>
							<!--{/loop}-->
					</select>
					<i></i>
				</span>
				<span class="jselect">
					<select name="callingId"  class="noc"  style="width:52px;<!--{if $_GET[callingId]}-->background-color:#D3F5F5;<!--{/if}-->">
						<option value="0" selected='selected'>行业</option>
						<!--{loop $industrysArr $key $_industry1}-->
							<option value="{$_industry1[calling_id]}" <!--{if $_GET[callingId]=={$_industry1[calling_id]}}-->selected='selected'<!--{/if}-->>{$_industry1['calling_name']}</option>
						<!--{/loop}-->
					</select>
					<i></i>
				</span>

				<!--
				<span class="jselect">
					<select name="WorkYear"  class="noc"  style="width:52px;">
						<option value="">工作经验</option>
						{loop $__jobWorkYear $key $value}
							<option value="{$key}">{$value}</option>
						{/loop}
					</select>
					<i></i>
				</span>
				-->
			<br>
			<br>
			<input name="WorkYear" type="checkbox" value="99" id="yjs" <!--{if $_GET['WorkYear']==99}-->checked<!--{/if}--> >
			<label for="yjs">应届生</label>
			<br>
			<br>
			<input name="jobs_btn" type="submit" class="jobs_btn" value=" 搜  索"></div>
	</form>
</div>
<br>

<br>

<div class="sth">
	<form name="f5" action="/zhaopin/" method="get">
		<input type="hidden" name="condition" value="2">
		<input name="area" type="hidden" value="{$_GET['area']}">
		<span class="jobs_bot" style="color:#695da8;">搜公司</span>
		<input placeholder="公司名称"  class="jobs_input" name="q" value="{$_GET['keyword']}" type="text"style='  border:#695da8 solid 1px;'/>
		<input name="s" type="submit" id="searchCompany" class="jobs_btn" value="搜索公司" style="background-color:#695da8;">
	</form>
</div>
<br>


<div class="sth">
	<form name="f2" action="/zhaopin/" method="get">
		<input name="area" type="hidden" value="{$_GET['area']}">
		<br>

		<span class="jobs_bot">从行业</span>

		<span class="jobsSelect" style="margin:5px;">
			<span class="jselect" style="margin:0;">
				<select name="callingId" id="st"  class="noc" >
					<option value="0" selected='selected'>行业不限</option>
					<!--{loop $industrysArr $key $_industry1}-->
						<option value="{$_industry1[calling_id]}" <!--{if $_GET[callingId]=={$_industry1[calling_id]}}-->selected='selected'<!--{/if}-->>{$_industry1['calling_name']}</option>
					<!--{/loop}-->
				</select>
				<i></i>
			</span>
		</span>

		<br>
		<br>
		<span class="jobs_bot" style="color:gray">搜&nbsp;&nbsp;&nbsp;&nbsp;索</span>
		<input placeholder="职位名称"  class="jobs_input" name="q" value="{$_GET['keyword']}" type="text" />
		<input name="s" type="submit" class="jobs_btn" value=" 搜  索">
	</form>
</div>
<br>
<div class="sth">
	<form name="f3" action="/zhaopin/" method="get">
		<input name="area" type="hidden" value="{$_GET['area']}">
		<br>
		<span class="jobs_bot">在街道</span>
		<input name="txtAddress" class="jobs_input" maxlength="6" placeholder="道路、大厦等" value="{$_GET['txtAddress']}" type="text" />
		<div class="jkong" style="height:10px; font-size:0;"></div>
		<span class="jobs_bot" style="color:gray">搜&nbsp;&nbsp;&nbsp;&nbsp;索</span>
		<input class="jobs_input" placeholder="职位名称" name="q" value="{$_GET['keyword']}" type="text" />
		<input name="s" type="submit" class="jobs_btn" value=" 搜  索">
	</form>
</div>
<br/>


<br>
<br>
<div class="newjobPop" style="display:none;">
	<a href="javascript:;" class="icon-svg55"><img src="//cdn.{ROOT_DOMAIN}/m/images/03.png?v=999" width="50" height="50"></a>
	<div class="newPopx">
		<span style="font-size:16px;margin-top: 5px;">597人才网</span>
        <span style="font-size:12px;opacity: 0.6">节省95%找工作时间</span>
        <a id="aban_id" class="downloadApk" href="/file/app.html?act=per">立即下载</a>
	</div>

	<a href="javascript:;" id="btnAppColse" class="icon-svg152"><img width="20" src="//cdn.{ROOT_DOMAIN}/m/images/close.png?v=99"></a>
</div>
<!--{template footer}-->
<div id="divOperat" class="jobPos" style="display:none;">
	<a class="btnsF14 btn4" id="btnApply" href="javascript:void(0);">
		投递简历 <em id="chkcount">( 1 )</em>
	</a>
</div>
<script>
	$(document).ready(function(){
		var curCity = $("#searchArea #noc_diqujg option:selected").text(),
			curRmName = "{$curRmName}";

		$('#curCity').html(curCity+' '+curRmName);

		$(".va").click(function(){
			var $this=$(this)
				 ,$amp=$this.attr("data-amp")
				 ,$acss=$this.attr("class")
				 ,$j=$("#jg").val()
				 ,$durl=$("#mpbot").attr("data-url");
			if(!isNaN($amp)){
				var durl="&j="+$j+$durl;
				if($acss.indexOf("act")>-1){$amp="";}
				setTimeout(function(){window.location.href="/zhaopin/?rm="+$amp+"{$rmUrl}";},1);
			}
		});

		var isAppdown = $.cookie('isAppdownload');//;

		if(isAppdown==0||typeof(isAppdown)=='undefined') {
			$('div.newjobPop').show();
		}

		$('#btnAppColse').click(function(e){
			$('div.newjobPop').hide();
			if(!isAppdown){
				$.cookie('isAppdownload',1,{expires:10});
			}
		});
		$('#aban_id').click(function(e){
			//$('div.newjobPop').hide();
			// index.weixinDown();
		});

	});
</script>
</body>
</html>