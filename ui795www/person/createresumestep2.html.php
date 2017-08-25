<?exit?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>创建基本资料</title>
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/v2-reset.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-header.css?v=20140821" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/perback.css?v=20140722" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-widge.css?v=20141122" />
<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/v2/default/v2-resume.css?v=20140930" />
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
<script type="text/javascript">
window.CONFIG = {
	HOST: 'http://cdn1.597.com/min/??',
	COMBOPATH: '/js/v2/'
}
</script>
<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>

<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20141117"></script>

<script type="text/javascript">
	jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
</head>
<body class="noResize minMain">

<!--#include virtual="/templates/default/person/header.htm" -->
<div class="w1000">
	<form id="formCreateResume" method="post" action="/api/web/person.api" >
	<input type="hidden" name="act" value="join_save" />
	<input type="hidden" name="hidIsCreate" value="1" />
	<input type="hidden" name="hidIsReg" value="" />
	<input type="hidden" name="create_type" value="1" />
	<!--流程-->
	<div class="step-box clearfix">
		<ul class="step">
			<li class="first"><i class="hr"></i><span>填写基本资料</span></li>
			<li class="cur"><i class="hr"></i><span>设置求职意向</span></li>
			<li class="last"><i class="hr"></i><span>完成</span></li>
		</ul>
		<h3 class="name">创建简历</h3>
	</div>
	<div class="found-main">
		<p class="create-tit"><strong class="name">求职意向</strong></p>
		<div class="create-item step21">
			
			<div class="clearfix">
				<dl class="clearfix">
					<dt>工作类型<i class="red">*</i></dt>
					<dd class="formRows">
						<label class="icon-rad" data-name="radJoinType" data-value='1' <!--{if $resumeInfo[joinType]==1}-->data-status="true"<!--{/if}-->><em></em>全职</label>
						<label class="icon-rad" data-name="radJoinType" data-value='2' <!--{if $resumeInfo[joinType]==2}-->data-status="true"<!--{/if}-->><em></em>兼职</label>
						<label class="icon-rad" data-name="radJoinType" data-value='3' <!--{if $resumeInfo[joinType]==3}-->data-status="true"<!--{/if}-->><em></em>实习</label>
						<span class="prompt-msg msg" data-for="radJoinType"></span>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>意向职位<i class="red">*</i></dt>
					<dd class="formRows">
						<!--<em class="def-text">请输入求职意向</em>-->
						<input type="text" class="c-text" name="txtJoinOffice" value="{$resumeInfo[joinOffice]}"  />
						<label id="chkParttime" class="chkParttime icon-chck" data-name="chkParttime" data-value="1" <!--{if $resumeInfo[isparttime]==1}-->data-status="true"<!--{/if}-->><em></em>接受兼职工作</label>
						<span class="prompt-msg msg" data-for="txtJoinOffice"></span>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>职位类别<i class="red">*</i></dt>
					<dd class="input-box checkMod formRows" style="z-index:4">
						<div id="jobsort" class="drop formText JobCayDrop" style="z-index:4"></div>
						<span class="prompt-msg msg" data-for="hidJobSortExpect"></span>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>期望行业<i class="red">*</i></dt>
					<dd class="input-box checkMod formRows" style="z-index: 3">
						<div id="dropCalling" class="drop formText JobIndDrop" style="z-index:3"></div>
						<span class="prompt-msg msg" data-for="hidCallingExpect"></span>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>工作地点<i class="red">*</i></dt>
					<dd class="input-box checkMod formRows" style="z-index: 2">
						<div id="dropAreaMultiple" class="zIndex drop formText jobAddDrop" style="z-index:2"></div>
						<span class="prompt-msg msg" data-for="hidCurAreaBasic"></span>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>岗位级别<i class="red">*</i></dt>
					<dd class="formRows">
						<div id="dropJobLevel" class="dropv2" style="width:172px;">
							<b class="jpFntWes dropIco">&#xf0d7;</b>
							<label>请选择</label>
							<ul></ul>
						</div>
						<label id="chkJobLevel" class="icon-chck mgl10 mgt5 left" data-name="chkJobLevel" data-value="1" <!--{if $resumeInfo[chkJoblevel]==1}-->data-status="true"<!--{else}-->style="display:none"<!--{/if}-->><em></em>不接受低于该级别的职位</label>
						<span class="prompt-msg msg" data-for="hidJoblevel"></span>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>期望薪资<i class="red">*</i></dt>
					<dd class="formRows">
						<div class="clearfix">
							<div id="dropSalary" class="dropv2" style="width:120px;">
								<b class="jpFntWes dropIco">&#xf0d7;</b>
								<label>请选择</label>
								<ul></ul>
							</div>
							<label id="chkSalary" class="icon-chck mgl10 mgt5 left" data-name="chkSalary" data-value="1" <!--{if $resumeInfo[chksalary]==1}-->data-status="true"<!--{/if}-->><em></em>不低于此薪资</label>
							<label id="radHideSalary" class="icon-chck mgl10 mgt5 left" data-name="radHideSalary" data-value="1" <!--{if $resumeInfo[hideSalary]==1}-->data-status="true"<!--{/if}-->><em></em>对企业显示为面议</label>
							<p class="prompt-msg msg" data-for="txtJoinSalary"></p>
						</div>
						<div style="color:#f00;margin-top:5px;font-size:12px">为了我们更好的为你推荐合适的企业，请确保薪酬填写准确</div>
					</dd>
				</dl>
			</div>
		</div>
		<!--/-->
				<!--隐私设置-->
		<p class="create-tit"><strong class="name"><i></i>隐私设置</strong></p>
		<div id="privacy-set" class="create-item privacy-set">
			<dl class="clearfix">
				<dd>	
					<span>我正在找工作，希望受到企业的关注</span>
					<label class="cur" data-name="open_mode" data-value="1" <!--{if $resumeInfo[display]==1}-->data-status="true"<!--{/if}-->>
						<i class="open"></i><strong>公开</strong><em></em>
					</label>
				</dd>
				<dd>
					<span>暂时没有找工作或不想被企业关注</span>
					<label data-name="open_mode" data-value="0" <!--{if $resumeInfo[display]==0}-->data-status="true"<!--{/if}-->>
						<i class="stop"></i><strong>保密</strong><em></em>
					</label>
				</dd>
			</dl>
			<dl class="clearfix sub-item">
				<dt>&nbsp;</dt>
				<dd>
					<button id="btnSubmit" type="button" class="sub-btn">创建简历</button>
				</dd>
			</dl>
		</div>
		<!--/-->
		
			</div>
	</form>
	<!--/主体 end-->	
	<!--{template person/footer}-->
</div>

</body>
<script type="text/javascript">
var jobtypeItems = [];
var jobtypeFulltime = '1';
var job_level_practice = '01';
var job_level_ordinary = '02';
var salary_lowest = '01';
var joblevelItems = [{value:'',label:'请选择'}];
	joblevelItems.push({value:'1',label:'实习/见习'});
	joblevelItems.push({value:'2',label:'普通员工'});
	joblevelItems.push({value:'3',label:'高级/资深（非管理岗）'});
	joblevelItems.push({value:'4',label:'部门经理/主管'});
	joblevelItems.push({value:'5',label:'总监/副总裁'});
	joblevelItems.push({value:'6',label:'总裁/总经理'});

var salaryItems = [{value:'',label:'请选择'}];
	salaryItems.push({value:'1000',label:'1000及以上'});
	salaryItems.push({value:'1500',label:'1500及以上'});
	salaryItems.push({value:'2000',label:'2000及以上'});
	salaryItems.push({value:'2500',label:'2500及以上'});
	salaryItems.push({value:'3000',label:'3000及以上'});
	salaryItems.push({value:'4000',label:'4000及以上'});
	salaryItems.push({value:'5000',label:'5000及以上'});
	salaryItems.push({value:'6000',label:'6000及以上'});
	salaryItems.push({value:'7000',label:'7000及以上'});
	salaryItems.push({value:'8000',label:'8000及以上'});
	salaryItems.push({value:'9000',label:'9000及以上'});
	salaryItems.push({value:'10000',label:'10000及以上'});
	salaryItems.push({value:'12000',label:'12000及以上'});
	salaryItems.push({value:'15000',label:'15000及以上'});
	salaryItems.push({value:'20000',label:'20000及以上'});
	salaryItems.push({value:'30000',label:'30000及以上'});

	jpjs.use('@validator, @checkBoxer, @select, @jobsort, @confirmBox, @calling, @areaMulitiple, @form, @jobDialog', function(m){
		
		var $ = m['jpjob.jobsort'].extend(m['jpjob.jobDialog'], m['jpjob.calling'], m['jpjob.areaMulitiple'], m['jpjob.jobForm']),
			validator = m['widge.validator.form'],
			checkBoxer = m['widge.checkBoxer'],
			confirmBox = m['widge.overlay.confirmBox'],
			select = m['widge.select'];
			
		var rules = {
				radJoinType: 'required',
				txtJoinOffice: {
					required:true,
					range:[2,20]
				},
				hidJobSortExpect: 'required',
				hidCallingExpect: 'required',
				hidCurAreaBasic: 'required',
				hidJoblevel: 'required',
				txtJoinSalary: 'required'
			},
			errorMsg = {
				radJoinType: '<em></em><i></i>请选择工作类型',
				txtJoinOffice:{
					required:'<em></em><i></i>请填写意向职位',
					range:'<em></em><i></i>2-20个字'
				},
				hidJobSortExpect:'<em></em><i></i>请选择职位类别',
				hidCallingExpect:'<em></em><i></i>请选择行业类别',
				hidCurAreaBasic:'<em></em><i></i>请选择工作地区',
				hidJoblevel:'<em></em><i></i>请选择岗位级别',
				txtJoinSalary:'<em></em><i></i>请选择期望薪资'
			},
			warningCls = "warning",
			errorCls = 'error',
			successCls = 'success',
			text = '-text',
			label = '-msg',
			allTextCls = errorCls + text + ' ' + warningCls + text,
			allLabelCls = errorCls + label + ' ' + warningCls + label,
			errorTextCls = errorCls + text,
			errorLabelCls = errorCls + label,
			warningTextCls = warningCls + text,
			warningLabelCls = warningCls + label,
			successLabelCls = successCls + label;
		
					//隐私设置
			var privacyTypeBoxer = new checkBoxer({
					element: $('#privacy-set').find('label'),
					className: 'cur',
					hoverClassName: 'hover',
					multiple: false,
					disabledClassName: null,
					disabledSelClassName: null
				});
				
		var form = new validator({
			element:$('#formCreateResume'),
			errorElement: '.prompt-msg',
			rules: rules,
			errorMessages: errorMsg
		});
		
		//初次创建
		var jobTypeBoxer = new checkBoxer({
				element: $('.icon-rad'),
				className: 'icon-rad-checked',
				multiple: false,
				hoverClassName: null,
				disabledClassName: null,
				disabledSelClassName: null
			}),
			chkBoxer = new checkBoxer({
				element: $('.icon-chck'),
				className: 'icon-chck-checked',
				hoverClassName: null,
				disabledClassName: null,
				disabledSelClassName: null
			}),
			dropJobLevelSel = new select({
				trigger: $('#dropJobLevel'),
				className: 'dropv2_select',
				align: {baseXY: [0, '100%-1']},
				selectName: 'hidJoblevel',
				dataSource: joblevelItems,
				selectedValue: '{$resumeInfo[Joblevel]}',
				selectCallback: {
					isDefault: true
				}
			}),
			dropSalarySel = new select({
				trigger: $('#dropSalary'),
				className: 'dropv2_select',
				align: {baseXY: [0, '100%-1']},
				selectName: 'txtJoinSalary',
				dataSource: salaryItems,
				selectedValue: '{$resumeInfo[joinSalary]}',
				maxHeight: 200,
				selectCallback: {
					isDefault: true
				}
			});

		jobTypeBoxer.on('select', function(e){
			form.checkElement(e.target[0]);
		});
		toggleSalary(dropJobLevelSel.get('selectedIndex'));
		dropJobLevelSel.on('change', function(e){
			form.checkElement($('input[name=hidJoblevel]')[0]);
			toggleSalary(e.index);
		});
		dropSalarySel.on('change', function(e){
			form.checkElement($('input[name=txtJoinSalary]')[0]);
		});

		$('#jobsort').jobsort({
			isLimit:true,type:'multiple',max:5,hddName:'hidJobSortExpect',
			onSelect: function(){
				form.checkElement($('input[name=hidJobSortExpect]')[0]);
			}
		});
		$("#dropAreaMultiple").multiplearea({
			isLimit:true,hddName:'hidCurAreaBasic',max:5,
			onSelect: function(){
				form.checkElement($('input[name=hidCurAreaBasic]')[0]);
			}
		});
		$('#dropCalling').calling({
			isLimit:true,hddName:'hidCallingExpect',max:5,unLimitedLevel:3,
			onSelect: function(){
				form.checkElement($('input[name=hidCallingExpect]')[0]);
			}
		});
		
		form.on('focus', change);
		form.on('beforeBlur', change);
		form.on('keyUp', change);
		form.on('pass', change);
		form.on('invalid', change);
		
		function toggleSalary(index){
			if(index < 3){
				chkBoxer.setStatus(1, false);
				chkBoxer.getElement().eq(1).hide();
			} else {
				chkBoxer.getElement().eq(1).show();
			}
		}
		function change(e){
			switch(e.type){
				case "focusin":
					focusClass(e);
					break;
				case "focusout":
					blurClass(e);
					break;
				case "keyup":
					keyClass(e);
					break;
				case "pass":
					passClass(e);
					break;
				case "invalid":
					invalidClass(e);
					break;
			}
		}
		function focusClass(e){
		}
		function blurClass(e){
		}
		function keyClass(e){
		}
		function passClass(e){
			e.target.removeClass(allTextCls);
			e.label.removeClass(allLabelCls);
		}
		function invalidClass(e){	
			e.target.removeClass(warningTextCls).addClass(errorTextCls);
			e.label.removeClass(warningLabelCls).addClass(errorLabelCls);
		}
		
		$('#btnSubmit').on('click', function(){
			var btn = $(this);
			form.submit({callback: function(valid){
				btn.submitForm({
					beforeSubmit: valid,
					data:{},
					success: function(result){
						if(result && result.status<1){
							confirmBox.alert(result.msg, null, { title: '保存失败' });
							return;
						}
						var pWidth = 70,
							fontWidth = 18;
						confirmBox.timeBomb(result.msg, {
							name: 'success',
							width: pWidth + result.msg.length * fontWidth,
							callback: function(){
								window.location.href = '/person/resumecomplate.htm';
							}
						});
					}, clearForm:false
				});	
			}});
		});
	});
</script>
</html>