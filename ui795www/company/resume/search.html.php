
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>简历搜索_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/base.css?v=2017' />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/comback.css?v=2017' />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=2017' />

	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017' charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/common.js?v=2017' charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/dialog.js?v=2017' charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_tooltip.js?v=2017' charset="UTF-8"></script><!--行业插件-->
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_area_mulitiple.js?v=2017' charset="UTF-8"></script><!--地区多选-->
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_jobsort.js?v=2017' charset="UTF-8"></script><!--职位类别-->
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_inputFocus.js?v=2017' charset="UTF-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_dropdownlist.js?v=2017' charset="UTF-8"></script><!--下拉控件-->
	<script type="text/javascript" language="javascript" src='http://cdn.597.com/js/ui_calling.js?v=2017' charset="UTF-8"></script><!--行业插件-->
	<style>
		strong {color:#ff0000;}
	</style>
</head>

<body id="body">

	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<form id="frmResumeSearch" method="get" action="/company/resume/search.html" >
					<input type="hidden" id="act" name="act" value="search">

					<div class="part part1">
						<div class="seaHd" style="margin-bottom: 10px;padding: 10px!important;">
							<div class="formMod" style="z-index: 99;margin-bottom: 0;" >
								<div class="l" style=";font-weight: 900;margin-left: 53px;">搜索器</div>
								<div class="r">
									<span class="drop zindex" style="width: 200px;" id="searchContent"></span><span class="tipTxt font12" style="margin:0 10px;"><a href="/company/resume/seekTpl.html">搜索器管理</a></span>
								</div>
								<div class="clear"></div>
							</div>
						</div>

						<div class="clear"></div>
						<div class="seaHd" style="z-index: 9">
							<div class="seaTabs" id="seaTabs">
								<input type="checkbox" name="qw[]" id="chkDegree1" <!--{if in_array(1, $query[qw])}-->checked="checked"<!--{/if}--> value="1" class="chb"><label for="chkDegree1">求职意向</label>
								<input type="checkbox" name="qw[]" id="chkDegree2" <!--{if in_array(2, $query[qw])}-->checked="checked"<!--{/if}--> value="2" class="chb"><label for="chkDegree2">历史职位</label>
								<input type="checkbox" name="qw[]" id="chkDegree3" <!--{if in_array(3, $query[qw])}-->checked="checked"<!--{/if}--> value="3" class="chb"><label for="chkDegree3">历史公司</label>
								<input type="checkbox" name="qw[]" id="chkDegree4" <!--{if in_array(4, $query[qw])}-->checked="checked"<!--{/if}--> value="4" class="chb"><label for="chkDegree4">教育经历</label>
								<input type="checkbox" name="qw[]" id="chkDegree8" <!--{if in_array(8, $query[qw])}-->checked="checked"<!--{/if}--> value="8" class="chb"><label for="chkDegree8">姓名</label>
								<input type="checkbox" name="qw[]" id="chkDegree9" <!--{if in_array(9, $query[qw])}-->checked="checked"<!--{/if}--> value="9" class="chb"><label for="chkDegree9">全文</label>
								<div class="clear"></div>
							</div>
							<div class="seaHdL">
								<div class="formMod forKeyword">
									<div class="l" style="width:90px;">关键词</div>
									<div class="r">
										<span class="formText formKeyword" style="z-index: 9">
											<!-- <span class="drop zindex mgr10 " id="Condition" ></span> -->
											<input type="text" id="txtKeyword" name="txtKeyword" style="width:450px;" value="{$query[keyword]}" class="text">
										</span>
										<!-- <span class="tipTxt keyWordTxt" id="spanSearchCondition"></span> -->
									</div>
									<div class="clear"></div>
								</div>
								<!-- <div class="formModWrap" >
									<div class="formMod  newFormMod">
										<div class="l">历史职位</div>
										<div class="r">
											<span class="formText ">
												<input type="text"  name="workOffice" value="{$query[workOffice]}" class="text">
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="formMod  newFormMod">
										<div class="l">历史公司</div>
										<div class="r">
											<span class="formText ">
												<input type="text"  name="workName" value="{$query[workName]}" class="text">
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="formMod  newFormMod">
										<div class="l">就读学校</div>
										<div class="r">
											<span class="formText ">
												<input type="text"  name="eduName"  value="{$query[eduName]}" class="text">
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="formMod  newFormMod">
										<div class="l">就读专业</div>
										<div class="r">
											<span class="formText ">
												<input type="text"  name="eduSpecialty"  value="{$query[eduSpecialty]}" class="text">
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="formMod  newFormMod">
										<div class="l">获得证书</div>
										<div class="r">
											<span class="formText ">
												<input type="text"  name="certificateStr" value="{$query[certificateStr]}" class="text">
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="formMod  newFormMod">
										<div class="l">技能</div>
										<div class="r">
											<span class="formText ">
												<input type="text"  name="skillStr" value="{$query[skillStr]}" class="text">
											</span>
										</div>
										<div class="clear"></div>
									</div>
								</div> -->
								<div class="clear"></div>
							</div>
							<div class="seaHdR">
								<div class="formMod">
									<div class="l">搜索简历编号</div>
									<div class="r">
										<span class="formText"><input type="text" id="txtResumeID"  style="width:95px;*width:102px;" class="text txtInput"></span>
										<span class="tipTxt seaBtn" ><a href="javascript:void(0);" class="btn1 btnsF12" style="display:none;" id="btnSearchResumeID">搜索</a></span>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="seaBd">
							<div class="seaBdL">
								<div class="formMod jobAddMod checkMod">
									<div class="l">期望地区</div>
									<div class="r">
										<span class="drop formText jobAddDrop zindex" id="txtExpArea"></span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod jobAddMod checkMod">
									<div class="l">现居住地</div>
									<div class="r">
										<span class="drop formText jobAddDrop zindex" id="txtCurrArea"></span>
									</div>
									<div class="clear"></div>
								</div>
								<!--
								<div class="formMod JobCayMod checkMod">
									<div class="l">职位类别</div>
									<div class="r">
										<span style="width:378px;" class="drop formText JobCayDrop zindex" id="txtJobsort"></span>
									</div>
									<div class="clear"></div>
								</div>
								-->
								<div class="formMod JobIndDrop checkMod">
									<div class="l">行业类别</div>
									<div class="r">
										<span class="drop formText JobIndDrop zindex" style="width:378px;" id="txtCalling"></span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod jobAddMod checkMod">
									<div class="l">户籍</div>
									<div class="r">
										<span class="drop formText jobAddDrop zindex" id="txtNativeArea"></span>
									</div>
									<div class="clear"></div>
								</div>
                                <div class="formMod">
                                    <div class="l">更新时间</div>
                                    <div class="r">
                                        <span class="drop zindex" id="updataTime"></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
								<div class="formMod">
									<div class="l">性别</div>
									<div class="r">
										<span class="formRad">
											<input type="radio" class="radio" id="radSex0" <!--{if $query[gender]==0}-->checked="checked"<!--{/if}--> name="radSex" value="0"/><label for="radSex0">不限</label>
											<input type="radio" class="radio" id="radSex1" <!--{if $query[gender]==1}-->checked="checked"<!--{/if}--> name="radSex" value="1"/><label for="radSex1">男</label>
											<input type="radio" class="radio" id="radSex2" <!--{if $query[gender]==2}-->checked="checked"<!--{/if}--> name="radSex" value="2"/><label for="radSex2">女</label>
										</span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod">
									<div class="l">公开程度</div>
									<div class="r">
										<span class="formRad">
											<input type="radio" class="radio" id="display0" <!--{if $query['display']==0}-->checked="checked"<!--{/if}--> name="display" value="0"/><label for="display0">不限</label>
											<input type="radio" class="radio" id="display1" <!--{if $query['display']==1}-->checked="checked"<!--{/if}--> name="display" value="1"/><label for="display1">公开</label>
											<input type="radio" class="radio" id="display2" <!--{if $query['display']==2}-->checked="checked"<!--{/if}--> name="display" value="2"/><label for="display2">半公开</label>
										</span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="forBtn">
									<a href="javascript:void(0);" id="btnSearch" class="btn1 btnsF16 searchBtn">搜&nbsp;&nbsp;索</a>
									<a href="javascript:void(0)" class="btn3 btnsF16" id="btnSavaSeeker" Mytitle="<!--{if $tplid}-->编辑当前的搜索器并保存<!--{else}-->按现在的查询条件,新添加一个搜索器<!--{/if}-->"><!--{if $tplid}-->编辑保存当前搜索器<!--{else}-->新建保存为搜索器<!--{/if}--></a>
								</div>
							</div>
							<div class="seaBdR">
								<div class="formMod">
									<div class="l">工作年限</div>
									<div class="r">
										<span class="drop zindex" id="ddlMinWrokYear"></span><span class="tipTxt font12" style="margin:0 10px;">至</span><span class="drop zindex" id="ddlMaxWrokYear"></span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod">
									<div class="l">年龄</div>
									<div class="r">
										 <span class="formText"><input type="text" id="txtAgeLower" name="txtAgeLower" value="{$query[txtAgeLower]}" style="width:95px;" class="text"></span>
										<span class="tipTxt font12" style="margin:0 10px;">至</span>
										 <span class="formText"><input type="text" id="txtAgeUpper" name="txtAgeUpper" value="{$query[txtAgeUpper]}" style="width:95px;" class="text"></span>
										<span class="tipTxt font12">岁</span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod degMod">
									<div class="l">学历</div>
									<div class="r">
										<span class="formChb" id="spanDegree">
											<input type="checkbox" name="chkDegree[]" id="chkDegree0" <!--{if $maxEdu[0]==1}-->checked="checked"<!--{/if}--> value="0" class="chb"><label for="chkDegree0">不限</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree01" value="10" class="chb" <!--{if $maxEdu[10]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree01">小学</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree02" value="20" class="chb" <!--{if $maxEdu[20]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree02">初中</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree03" value="30" class="chb" <!--{if $maxEdu[30]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree03">高中</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree04" value="40" class="chb" <!--{if $maxEdu[40]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree04">中技/中专</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree05" value="50" class="chb" <!--{if $maxEdu[50]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree05">大专</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree06" value="60" class="chb" <!--{if $maxEdu[60]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree06">本科</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree07" value="70" class="chb" <!--{if $maxEdu[70]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree07">硕士</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree08" value="80" class="chb" <!--{if $maxEdu[80]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree08">博士</label>
											<input type="checkbox" name="chkDegree[]" id="chkDegree09" value="90" class="chb" <!--{if $maxEdu[90]==1}-->checked="checked"<!--{/if}-->><label for="chkDegree09">博士后</label>
										</span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod">
									<div class="l">婚姻状况</div>
									<div class="r">
										<span class="formRad">
											<input type="radio" class="radio" id="radMarriage0" value="0" <!--{if $query['marriage']==0}-->checked="checked"<!--{/if}--> name="radMarriage" /><label for="radMarriage0">不限</label>
											<input type="radio" class="radio" id="radMarriage1" value="1" <!--{if $query['marriage']==1}-->checked="checked"<!--{/if}--> name="radMarriage" /><label for="radMarriage1">未婚</label>
											<input type="radio" class="radio" id="radMarriage2" value="2" <!--{if $query['marriage']==2}-->checked="checked"<!--{/if}--> name="radMarriage" /><label for="radMarriage2">已婚</label>
										</span>
									</div>
									<div class="clear"></div>
								</div>
								<div class="formMod">
									<div class="l">身高</div>
									<div class="r">
										 <span class="formText"><input type="text" id="txtMinStature" name="txtMinStature" style="width:95px;" class="text" value="{$query[txtMinStature]}"></span>
										<span class="tipTxt font12" style="margin:0 10px;">至</span>
										 <span class="formText"><input type="text" id="txtMaxStature" name="txtMaxStature" style="width:95px;" class="text" value="{$query[txtMaxStature]}"></span>
										<span class="tipTxt font12">厘米</span>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>

				</form>

				<!--{if $res['matches']}-->
				<div class="part part2" >
					<div class="resHd">
						<div class="btns" id="btnSearchKey">
							<span class="hov" id="tipTxt" style="display:none" >
								<b></b>
								<p class="txt"><i class="jpFntWes">&#xf0eb;</i>切换到不同选项，搜索简历的不同部分，能帮您更精准的找到人才。</p>
								<i class="clo" id="clo">×</i>
							</span>
							<a href="javascript:void(0);" theValue='0' class="cu" >共搜索到<!--{if $res[total_found]>99999}-->100000+<!--{else}-->{$res[total_found]}<!--{/if}-->条记录 显示前{$res[total]}条<em></em></a>
						</div>
					</div>
					<div class="resBd">
					<!--
						<div class="resTit">
							<div class="titR" style="display:none;"><a href="javascript:void(0);" class="btn3 btnsF12" id="btnUpdateField"><i class="jpIconMoon">&#xe090;</i>修改显示字段</a></div>
							<div class="titM">
								<div class="titTxt">显示方式</div>
								<div class="btns" id="btnListOrSummary"><a href="javascript:void(0)" theValue='1'  class="cu" >列表</a><a href="javascript:void(0);" theValue="2" >摘要</a></div>
								<div class="clear"></div>
							</div>
							<div class="titL">
								<div class="titTxt">每页显示</div>
								<div class="btns" id="btnPageSize"><a class="cu" href="javascript:void(0);" theValue="20">20</a><a href="javascript:void(0);"  theValue="40">40</a><a href="javascript:void(0);"  theValue="60">60</a></div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
						</div>
					-->	
						<div class="lstC">
							<div class="lstCon">
								<div class="lstBox">
									<table class="table">
										<colgroup>
											<col class="wid185" />
											<col class="wid65" />
											<col class="wid65" />
											<col class="wid65" />
											<col class="wid100" />
											<col class="wid100" />
											<col />
											<col class="wid100" />
										</colgroup>
										<thead>
											<tr>
												<th>姓名</th>
												<th>性别</th>
												<th>年龄</th>
												<th>学历</th>
												<th>现居地</th>
												<th>工作年限</th>
												<th>意向的职位</th>
												<th>最近刷新</th>
											</tr>
										</thead>
										<tbody id="lst" class="lst lst1">
											<!--{loop $res['matches'] $l}-->
												<tr >
													<td>
														<span class="photo">
															<a href="/resume.html?rid={$l[_rid]}" target="_blank">
																<!--{if $l[attachment]}-->
																	<img src="{$l[attachment]}" onerror="this.onerror=null; this.src='http://cdn.597.com/img/v2/resumeM/head-defects.jpg';">
																<!--{/if}-->
															</a>
														</span>
														<span class="name">
															<a href="/resume.html?rid={$l[_rid]}" target="_blank">{$l[realname]}</a>
															<!--{if $l['display']==2}-->
															<img src="http://cdn.597.com/www/images/bangongkai.png" title="该份简历已经被求职者设置为半公开状态，请下载企业版APP与TA聊天吧。" style="margin-left:5px;width:20px;height:20px;"/>
															<!--{/if}-->
														</span>
													</td>
													<!--<td class="wid120"><em class="green">已获取联系方式</em></td>-->
													<td>{$l['_gender']}</td>
													<td>{$l['_age']}岁</td>
													<td><!--{if $l['_degree']}-->{$l['_degree']}<!--{else}-->未填写<!--{/if}--></td>
													<td>{$l['residence']}</td>
													<td>{$l['_workYear']}</td>
													<td><p class="lateJob">{$l['joinOffice']}</p><!--{if $l[_lastVisit]>0}--><span class="lastTime">最后浏览：{$l['_lastVisit']}</span><!--{/if}--></td>
													<td>{$l['_updateTime']}</td>
												</tr>
											<!--{/loop}-->
										</tbody>
									</table>
								</div>
								<div class="page">
									<div class="page">{$showpage}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--{else}-->
				<div class="noData" style="border-top:1px solid #e6e6e6;"><p>未找到相关简历，请更换筛选条件、关键词！</p></div>
				<!--{/if}-->

			</hgroup>
		</section>
	</div>

	<!--{template company/footer}-->


	<script>
		<!--{if $act}-->
			$('html,body').animate({ scrollTop: 230 });
		<!--{/if}-->
		dateFormate(".dateFormate",{$time});

		var resumesearch = {
			init:function(){
			    $("#btnSavaSeeker").css({position:'relative'});
			    var text=$("#btnSavaSeeker").attr('Mytitle')||'';
			    if(text!=''){
                    var hoverHtml='<span class="myStyle" style="position: absolute;left: 0;top: -45px;height: ' +
                        '40px;width: 150%;background: #9d9d9d;color: white;font-size: 14px;padding: ;border-radius: 3px;text-align: center;display: none;">'+text+'</span>';
                    $("#btnSavaSeeker").append(hoverHtml);
                    $("#btnSavaSeeker").mouseover(function () {
                        $(this).find('.myStyle').show();
                    });
                    $("#btnSavaSeeker").mouseout(function () {
                        $(this).find('.myStyle').hide();
                    });
                }

				$.setIndex("zindex");//为需要赋层级设置的元素设置class为zindex

				$('#txtCurrArea').multiplearea({max:5,hddName:'currArea',isLimit:true,selectItems:[{$query[residenceid]}]});
				$('#txtExpArea').multiplearea({max:5,hddName:'expArea',isLimit:true,selectItems:[{$query[joinCityId]}]});
				$('#txtNativeArea').multiplearea({max:5,hddName:'nativeArea',isLimit:true,selectItems:[{$query[nativeid]}]});
				$('#txtJobsort').jobsort({max:5,type:'multiple',isLimit:true,hddName:'jobsort',selectItems:[{$query[joinJobClassId]}]});
				$('#txtCalling').calling({max:5,type:'multiple',isLimit:true,hddName:'calling',selectItems:[{$query[joinIndustryId]}]});

				$('#ddlMinWrokYear').droplist({selectValue:{$MinWrokYear},isCanWrite:false,inputWidth:95,style:'width:103px;',hddName:'ddlMinWrokYear',items:[{id:'0',name:'不限'},{id:'99',name:'应届毕业生'},{id:'1',name:'1年'},{id:'2',name:'2年'},{id:'3',name:'3年'},{id:'4',name:'4年'},{id:'5',name:'5年'},{id:'6',name:'6年'},{id:'7',name:'7年'},{id:'8',name:'8年'},{id:'9',name:'9年'},{id:'20',name:'10年以上'}]});
				$('#ddlMaxWrokYear').droplist({selectValue:{$MaxWrokYear},isCanWrite:false,inputWidth:95,style:'width:103px;',hddName:'ddlMaxWrokYear',items:[{id:'0',name:'不限'},{id:'99',name:'应届毕业生'},{id:'1',name:'1年'},{id:'2',name:'2年'},{id:'3',name:'3年'},{id:'4',name:'4年'},{id:'5',name:'5年'},{id:'6',name:'6年'},{id:'7',name:'7年'},{id:'8',name:'8年'},{id:'9',name:'9年'},{id:'20',name:'10年以上'}]});

				$('#Condition').droplist({selectValue:'{$Condition}',defaultTitle : '全文查找',isCanWrite:false,inputWidth:75,style:'width:98px;',hddName:'ddlCondition',items:[{id:'0',name:'全文查找'},{id:'1',name:'求职意向'},{id:'2',name:'查工作经历'},{id:'3',name:'查教育经历'},{id:'4',name:'查获得证书'},{id:'5',name:'查技能'},{id:'6',name:'查姓名'}]}).find('.dropSeld ').css('background','#fff');
//				更新时间的下拉数据定义
				$("#updataTime").droplist({selectValue:'{$_GET["ddlUpTime"]}',defaultTitle : '不限',isCanWrite:false,inputWidth:131,style:'width:139px;',hddName:'ddlUpTime',items:[{id:'0',name:'不限'},{id:'1',name:'最近三天'},{id:'2',name:'最近一周'},{id:'3',name:'最近二周'},{id:'4',name:'最近一个月'},{id:'5',name:'最近二个月'},{id:'6',name:'最近三个月'},{id:'7',name:'最近六个月'},{id:'8',name:'最近一年'}]}).find('.dropSeld ').css('background','#fff');

                //				搜索器的下拉定义
				$('#searchContent').droplist({selectValue:{$tplid},isCanWrite:false,inputWidth:190,style:'width:198px;',hddName:'tplid',
					items:{$arrSeekStr},onSelect:function(i,name) {
						if(i>0){
							$.getJSON('/api/web/company.api',{act:'getSeekUrl',tplid:i},function(data){
								if(data.status==1){
									window.location.href = '/company/resume/search.html?act=search'+data.url+'&tplid='+i;
								}
							});
						}else{
							window.location.href = '/company/resume/search.html';
						}
					}
			    });

				$('#btnUpdateField').click(function(){
					$.showModal('/resumesearch/field/',{title:'设置显示字段（最多7项）'});
				});

				$('#btnSavaSeeker').click(function() {
					$.showModal('/company/resume/seek.html?'+$("#frmResumeSearch").serialize(),{title:'保存为搜索器'});
					/*
					$.getJSON('/resumesearch/canaddseeker/', function(data) {
						if (data.status != 'succeed') {
							$.message(data.msg, { icon: 'warning' });
						}
						else {

							var keyword = $('#txtKeyword').val();

							if (keyword == $('#txtKeyword').attr('watermark')) {
								keyword = '';
							}
							$.showModal('/resumesearch/seekeradd/?keyword='+keyword+'/',{title:'保存为搜索器'});
							//$.showModal('SetResumeSeekerName.aspx?success=resumeSearchResult.saveResumeSeeker&seekerName=' + encodeURIComponent($('#hddSeekerName').val()) + '&isAdded=' + $('#txtIsAddResumeSeeker').val() + '&seekerID=' + $('#hddSeekerID').val() + '&keyword=' + encodeURIComponent(keyword), { title: '保存搜索器' });
						}
					});
					*/

				});

				$('#btnTip').hover(function(){
					$('#expBox').show();
				},function(){
					$('#expBox').hide();
				});

				$('#btnSeeker').click(function(){
					$.showModal('/resumesearch/seeker/',{title:'我的搜索器'});
				});

				$('#txtKeyword').change(function(){
					$('#hddKeytype').val('0');
				});

				$('#btnSearch').click(function(){
					//alert('非正式会员无法搜索简历');
					//return;
					//var queryCondition = resumesearch.getQueryCondition();
					//var queryString = resumesearch.getQueryString();
					//if (queryCondition != ''){
					//	resumesearch.writeRecentSeearchCriteria(queryCondition, queryString);
					//}
					$("#hddIsfirstPost").val('1');
					$("#frmResumeSearch").submit();
					return false;
				});

				$('.txtInput').focus(function(){
					// $('#btnSearchResumeID').show();
					$(this).parents('.r').find('.btn1').show();
				});

				if ($("#hddIsfirstPost").val() == 1) {
					$('html,body').animate({ scrollTop: 567 });
			  	}

				$('.txtInput').blur(function(){
					if($(this).val()==''){
						$(this).parents('.r').find('.btn1').hide();
					}
				});

				$('#btnSearchResumeID').click(function(){
					$('#btnSearchResumeID').attr('href', 'javascript:void(0)');
					$('#btnSearchResumeID').removeAttr('target');
					var resumeID = $('#txtResumeID').val();
					if (/^[0-9a-z]{6}[0-9]{1,9}$/.test(resumeID) == false){
						$.anchorMsg('请输入正确的简历编号', { icon: 'warning' });
						return false;
					}
					var parms = {'act':'resumesearch1','resume_id': resumeID };
					$.ajax({ url:'/company/resume/search.html', async: false, type: 'GET', dataType: 'json', data: parms, success: function(data){
						if (data.status <0){
							$.anchorMsg(data.msg, { icon: 'warning' });
						}
						else{
							$('#btnSearchResumeID').attr('href', '/resume.html?rid=' + data.resume_id).attr('target', '_blank');
						}
					}
					});
				});

				$('#btnSearchRealname').click(function(){
					$('#btnSearchRealname').attr('href', 'javascript:void(0)');
					$('#btnSearchRealname').removeAttr('target');
					var txtRealname = $('#txtRealname').val();
					var parms = {'act':'resumesearch2','txtRealname': txtRealname };
					$.ajax({ url:'/company/resume/search.html', async: false, type: 'GET', dataType: 'json', data: parms, success: function(data){
						if (data.status <0){
							$.anchorMsg(data.msg, { icon: 'warning' });
						}
						else{
							$('#btnSearchResumeID').attr('href', '/resume.html?rid=' + data.resume_id).attr('target', '_blank');
						}
					}
					});
				});


				//搜索结果统计
				$('#btnSearchKey a').click(function(){
					$('#hddKeytype').val($(this).attr('theValue'));
					$('#btnSearch').click();
					return false;
				});

				//每页显示多少条记录
				$('#btnPageSize a').click(function(){
					$('#hddPageSize').val($(this).attr('theValue'));
					$('#btnSearch').click();
					return false;
				});

				//显示方式
				$('#btnListOrSummary a').click(function(){
					$('#hddIsList').val($(this).attr('theValue'));
					$('#btnSearch').click();
					return false;
				});

				$('.hbTip').tooltip({
					 selector: "i[data-toggle=tooltip]",html:true
				});

				$('#spanDegree').find(':input').click(function(){
					if($(this).val()==0 && $(this).attr('checked')){
						$('input[type="checkbox"][name="chkDegree[]"]').prop('checked',false);
						$(this).prop('checked','true');
					}
					else if($(this).attr('checked')){
						$('#chkDegree0').prop('checked',false);
					}
				});

				$("#txtKeyword,#txtAgeLower,#txtAgeUpper,#txtMinStature,#txtMaxStature").keydown(function(e){
					if(e.keyCode == 13){
						$("#btnSearch").click();
					}
				});

				$("#txtResumeID").keydown(function(e){
					if(e.keyCode == 13){
						$("#btnSearchResumeID").click();
					}
				});
				$("#txtRealname").keydown(function(e){
					if(e.keyCode == 13){
						$("#btnSearchRealname").click();
					}
				});

			},
			addResumeSeeker:function(seekerName){
				var parms = {seekerName:seekerName,seekerconter:$('#hddbuildseeker').val()};
				$.getJSON('/resumesearch/seekeradddo/', parms, function(data) {
					if(data&&data.error){
						$.message(data.error, { title: '系统提示', icon: 'fail' });
						return;
					}
					$.anchorMsg('保存简历搜索器成功');$('#frmSetResumeSeekerName').closeDialog();
				});
			},
			getQueryString:function(){
				var keyword = $('#txtKeyword').val();
				if(keyword == '请输入关键词'|| keyword ==''){
					return '';
				}
				var currarea=$('input[name=currArea]').val();
				var exparea = $('input[name=expArea]').val();
				var nativearea = $('input[name=nativeArea]').val();
				var updataTime = $('#ddlUpTime').val();
				var calling = $('input[name=calling]').val();
				var jobsort = $('input[name=jobsort]').val();
				var workYear1 = $('input[name=ddlMinWrokYear]').val();
				var workYear2 = $('input[name=ddlMaxWrokYear]').val();
				var ageLower = $('#txtAgeLower').val();
				var ageUpper = $('#txtAgeUpper').val();
				var degree_ids = $(':input[name=chkDegree][checked]').val();
				var sex = $(':input[name=radSex][checked]').val();
				var marriage = $(':input[name=radMarriage][checked]').val();
				var statureMin=$('#txtMinStature').val();
				var statureMax=$('#txtMaxStature').val();

				var str = "&txtKeyword="+keyword+"&ddlMinWrokYear="+workYear1+"&ddlMaxWrokYear="+workYear2
					  +"&txtAgeLower="+ageLower+"&ageUpper="+ageUpper+"&radSex="+sex+"&radMarriage="+marriage
					  +"&txtMinStature="+statureMin+"&txtMaxStature="+statureMax+"&currArea="+currarea+"&expArea="+exparea
					  +"&jobsort="+jobsort+"&calling="+calling+"&nativeArea="+nativearea+"&updataTime="+updataTime;
				return str;
			},
			getQueryCondition:function(){
				var keyword = $('#txtKeyword').val();
				if(keyword == '请输入关键词'|| keyword ==''){
					return '';
				}
				return keyword;
			},
			writeRecentSeearchCriteria:function(queryCondition, queryString){
				var cookieValue = readCookie('resumeQueryCondition');
				var queryCookie = readCookie('resumeQueryString');

				var conditionArray = new Array();
				var queryStringArray = new Array();
				if (cookieValue.length > 0)
				{
					conditionArray = cookieValue.split(';');
					queryStringArray = queryCookie.split(';');
				}
				if (conditionArray != undefined && conditionArray != null)
				{
					var same = false;
					for (var i = 0; i < queryStringArray.length; i++)
					{
						if (queryString == queryStringArray[i])
						{
							conditionArray.splice(i, 1);
							queryStringArray.splice(i, 1);
							same = true;
						}
					}

					if (same == false && conditionArray.length >= 4)
					{
						conditionArray.splice(0, 1);
						queryStringArray.splice(0, 1);
					}
					conditionArray.push(queryCondition)
					queryStringArray.push(queryString);
				}
				writeCookie('resumeQueryCondition', conditionArray.join(';'));
				writeCookie('resumeQueryString', queryStringArray.join(';'));
			},
			readRecentSearchCriteria:function(){
				var cookieValue = readCookie('resumeQueryCondition');
				var queryCookie = readCookie('resumeQueryString');
				var conditionArray = new Array();
				var queryStringArray = new Array();
				if (cookieValue.length > 0){
					conditionArray = cookieValue.split(';');
					queryStringArray = queryCookie.split(';');
				}
				if (conditionArray != undefined && conditionArray != null){
					var len = conditionArray.length;
					var span = $('#spanSearchCondition');
					span.html('');
					if(len>0){
						span.html('最近搜索');
					}
					for (var i = len - 1; i >= 0; i--){
						span.append('<a href="/resumesearch/index?hddIsfirstPost=1'+queryStringArray[i]+'">'+conditionArray[i]+'</a>');
					}
				}
			}

		}

		resumesearch .init();


		$(document).ready(function() {
			window.onload = function(){
				resumesearch.readRecentSearchCriteria();
			}

			$('#lst').find('tr').hover(function(){
				$(this).addClass('hov');
			},function(){
				$(this).removeClass('hov');
			});

			$('#lst').find('tr.lstOne').bind('mouseenter',function(){
				$(this).addClass('hov2');
				$(this).next('tr.lstTwo').addClass('hov');
			});
			$('#lst').find('tr.lstOne').bind('mouseleave',function(){
				$(this).removeClass('hov2');
				$(this).next('tr.lstTwo').removeClass('hov');
			});

			$('#lst').find('tr.lstTwo').bind('mouseenter',function(){
				$(this).addClass('hov');
				$(this).prev('tr.lstOne').addClass('hov2');
			});
			$('#lst').find('tr.lstTwo').bind('mouseleave',function(){
				$(this).removeClass('hov');
				$(this).prev('tr.lstOne').removeClass('hov2');
			});

			//获取焦点时加上样式
			$.focusblur(':text');

			$('#clo').click(function(e){
				e.stopPropagation();
				$('#tipTxt').hide();
			});
		});

		// 选择关键字类型
		$('#seaTabs span').click(function(){
			$(this).toggleClass('cu');
			$(this).find('input').attr('checked', $(this).hasClass('cu'));
		});

	</script>
</body>
</html>
