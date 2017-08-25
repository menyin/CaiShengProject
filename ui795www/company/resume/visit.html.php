<?exit?>
<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<title>浏览过的简历_597人才网</title>
	<!–[if lt IE9]>
	<script src="http://cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/base.css?v=2017" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/css/comback.css?v=2017" />
	<link rel="stylesheet" type="text/css" href='http://cdn.597.com/css/search_list.css?v=2017' />
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery-1.8.3.min.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/common.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/dialog.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/mediaquery.js?v=2017" charset="UTF-8"></script><!--响应式兼容-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_menudisplay.js?v=2017" charset="UTF-8"></script><!--下拉菜单-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_inputFocus.js?v=2017" charset="UTF-8"></script><!--输入框获取焦点-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_hovchange.js?v=2017" charset="UTF-8"></script><!--指向改变class-->
	<!--<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dragsort.js?v=20140312" charset="UTF-8"></script>--><!--拖动插件-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.form.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_validate.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_dropdownlist.js?v=2017" charset="UTF-8"></script><!--下拉模拟-->
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_tooltip.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/ui_autocomplete.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.email.tip.js?v=2017" charset="UTF-8"></script>
	<script type="text/javascript" language="javascript" src="http://cdn.597.com/js/jquery.metadata.js?v=2017" charset="UTF-8"></script>

</head>
<body id="body">
	<!--{template company/header}-->

	<div class="content" id="content">
		<section class="section">
			<hgroup>
				<!--{if !$no}-->
				<div class="noData"><p>还没有浏览过任何简历！</p><p>您可以尝试在597的2600万简历库中主动<a href="/company/resume/search.html">搜索简历</a>试试</p></div>	
				<!--{else}-->
				<div class="part part2" >
					<div class="resBd">
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
												<th>所在地</th>
												<th>工作年限</th>
												<th>意向工作</th>
												<th>浏览时间</th>
											</tr>
										</thead>
										<tbody id="lst" class="lst lst1">
											<!--{loop $resumes $resume}-->
											<tr >
												<td>
													<span class="photo"><a href="/resume.html?rid={$resume[_id]}" target="_blank"><!--{if $resume['attachment']}--><img src="{$resume['attachment']}" onerror="this.onerror=null; this.src='http://cdn.597.com/img/v2/resumeM/head-defects.jpg';"><!--{/if}--></a></span>
													<span class="name"><a href="/resume.html?rid={$resume[_id]}" target="_blank">{$resume[realname]}</a></span>
												</td>
												<td>{$resume[gender]}</td>
												<td>{$resume[birthday]}</td>
												<td>{$resume[maxEdu]}</td>
												<td>{$resume[residence]}</td>
												<td>{$resume[_workYear]}</td>
												<td><p class="lateJob">{$resume[joinOffice]}</p></td>
												<td class="time">{$resume[updateTime]}</td>
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
				<!--{/if}-->
			</hgroup>
		</section>



	</div>

	<!--{template company/footer}-->

	<!--
	<div class="downCmtTxt">
		<p><a href="#"><i class="jpIconMoon">&#xe1b4;</i>Word文件</a></p>
		<p><a href="#"><i class="jpIconMoon">&#xe1b6;</i>Html文件</a></p>
		<p><a class="un"><i class="jpIconMoon">&#xe1b5;</i>Excel文件（暂未开放）</a></p>
	</div>
	-->

	<script>
		$.setIndex("zindex");//为需要赋层级设置的元素设置class为zindex
		$('#tstDropJob').droplist({
			defaultTitle:'按应聘职位查看',
			style:'width:178px;',
			noSelectClass:'gray',
			inputWidth:170,
			width:128,
			hddName:'job_id',
			items:[],
			selectValue:'',
			maxScroll:10,
			onSelect:function(i,name) {
				//选中后的事件
				apply.submit(null,0);
		}});
		$('#tstDropTime').droplist({
			defaultTitle:'按投递时间查看',
			style:'width:118px;',
			noSelectClass:'gray',
			inputWidth:110,
			width:128,
			hddName:'apply_time',
			selectValue:'',
			items:[{id:'',name:'按投递时间查看'},{id:'+0',name:'今天'},{id:'1',name:'昨天'},{id:'7',name:'近7天'},{id:'30',name:'近30天'},{id:'90',name:'近90天'}],
			onSelect:function(i,name) {
			   	//选中后的事件
				apply.submit(null,0);
		}});
		$('#tstDropSta').droplist({
			defaultTitle:'按状态查看',
			style:'width:98px;',
			noSelectClass:'gray',
			inputWidth:90,
			width:128,
			hddName:'status',
			selectValue:'',
			items:[{id:'',name:'按状态查看'},{id:'2',name:'未读'},{id:'4',name:'已读'},{id:'1',name:'已邀请'},{id:'3',name:'已拒绝'},{id:'5',name:'对方放弃'},{id:'6',name:'对方删除简历'}],
			onSelect:function(i,name) {
			   	//选中后的事件
				apply.submit(null,0);
		}});

		$(document).ready(function() {
			$('#lst').find('tr').hover(function(){
				$(this).addClass('hov');
			},function(){
				$(this).removeClass('hov');
			});
		});
		$(document).ready(function() {
			$('#lst2').find('li').hover(function(){
				$(this).addClass('hov');
			},function(){
				$(this).removeClass('hov');
			});
		});

		/**
		 *  收到的简历
		 */
		var apply = {
			init:function() {
				this._initEvent();
			},
			_initEvent:function(){
				// 列表操作菜单
				$('#lstContent .btnOperate').click(function(e){
					$(this).closest('[apply]').siblings().find('.tipBox').hide();
					if($(this).next('.tipBox').is(':visible')) {
						$(this).next('.tipBox').hide();	
					}else {
						$(this).next('.tipBox').show();
					}
					e.stopPropagation();
					e.preventDefault();
				});
				$('body').click(function(){
					$('#lstContent .tipBox').hide();
				});
				// 全选/反选
				$('#allSelect').bindCheckBox('chkapply','#lstContent');
				$('#reverseallSelect').bindCheckBox('chkapply','#lstContent');
				$('#allSelect').click(function(){
					if($(this).is(':checked')) {
						$('#reverseallSelect').attr('checked','checked');	
					}else {
						$('#reverseallSelect').removeAttr('checked');
					}
				});
				$('#reverseallSelect').click(function(){
					if($(this).is(':checked')) {
						$('#allSelect').attr('checked','checked');	
					}else {
						$('#allSelect').removeAttr('checked');
					}
				});	

				// 水印 
				$('#txtKeyWord').watermark('输入姓名或简历编号');

				var a = function() {
					var v = $('#txtKeyWord').val();
					if(v==''||v=="输入姓名或简历编号") {
						$('#btnResumeSearch').removeClass('btn1').addClass('btn3');
					}else{
						$('#btnResumeSearch').removeClass('btn3').addClass('btn1');
					}
					setTimeout(a,500);
				};
				setTimeout(a,500);
				
				// 清空筛选条件
				$('#btnClearFilter,#btnClearFilterSearch').click(function(e){
					$('#tstDropJob').initContent();
					$('#tstDropTime').initContent();
					$('#tstDropSta').initContent();
					$('#txtKeyWord').val('').watermark('输入姓名或简历编号');
					apply.submit(null,0);				
					e.preventDefault();
				});

				// 查看方式
				$('#containerShowModel').find('a').click(function(e){
					var shomodel = $(this).attr('v');
					apply.submit(shomodel,null);
					e.preventDefault();
				});

				$('#lstContent').tooltip({
					 selector: "a[data-toggle=tooltip]",html:true
				});  	

				$('#lstContent .mark a').click(function(e){
					 var resume_id = $(this).closest('[resume]').attr('resume');
					 apply._updateRemark(resume_id);
					 e.preventDefault();
				});	

				$('#lstContent a.uname').click(function(){
					var element = $(this).closest('[apply]'),
						apply_id = element.attr('apply'),
						status  = element.find('.status').html();
					if(status=='未读') {
						apply._setReaded(apply_id);
					}
				});
				
				// 标记为已读
				$('#lstContent .opsetRead').click(function(e){
					 var apply_id = $(this).closest('[apply]').attr('apply');
					 apply._setRead(apply_id);
					 e.preventDefault();
				});
				
				// 单个邀请
				$('#lstContent .opinvite').click(function(e){
					 var apply_id = $(this).closest('[apply]').attr('apply');
					 apply._invitesingle(apply_id);
					 e.preventDefault();
				});

				// 单个备注
				$('#lstContent .opremark').click(function(e){
					 var resume_id = $(this).closest('[resume]').attr('resume');
					 apply._updateRemark(resume_id);
					 e.preventDefault();
				});
				
				// 保存到电脑
				$('#lstContent .opdown').click(function(e){
					 var element = $(this).closest('[resume]'),
					 	 resume_id = element.attr('resume'),
					 	 apply_id = element.attr('apply');
					 apply._downresume(resume_id,apply_id);
					 e.preventDefault();
				});

				// 转发到邮箱
				$('#lstContent .opsendmail').click(function(e){
					 var element = $(this).closest('[resume]'),
					 	 resume_id = element.attr('resume'),
					 	 apply_id = element.attr('apply');
					 apply._sendEmail(resume_id,apply_id);
					 e.preventDefault();
				});		
				// 放入到回收站
				$('#lstContent .oprecycle').click(function(e){
					 var element = $(this).closest('[resume]'),
					 	 apply_id = element.attr('apply'),
					 	 name = element.find('.user_name').attr('name'),
						 val = cookieutility.get('deleteapply');
					 if(val == 'true'){
						 apply._deleteapply(apply_id);
					 }else {
						 $.showModal(encodeURI('/apply/DeleteApply/names-'+name+'-ids-'+apply_id+'-v-'+Math.random()+''),{title:'删除'});
			   		 }
					 e.preventDefault();
				});	

				// 婉拒
				$('#lstContent .oprefuse').click(function(e){
					 var element = $(this).closest('[resume]'),
					 	 apply_id = element.attr('apply'),
					 	 name = element.find('.user_name').attr('name'),
						 val = cookieutility.get('refusewarn');
					 if(val == 'true'){
						 apply._refuseapply(apply_id);
					 }else {
						$.showModal(encodeURI('/apply/Refuse/names-'+name+'-ids-'+apply_id+'-v-'+Math.random()+''),{title:'婉言谢绝'});
					 }
					 e.preventDefault();
				});	

				// 批量标记已读 
				$('#btnOpSetRead').click(function(e){
					e.preventDefault();
					var applys = apply.selectApply();
					if(applys.length<=0) {
						$.anchor('请选择收到的简历',{icon:'info'});
						return;
					}
					apply._setRead(applys.join(','));
				});	

				//批量邀请 
				$('#btnOpInvite').click(function(e){
					e.preventDefault();
					var applys = apply.selectApply();
					if(applys.length<=0) {
						$.anchor('请选择收到的简历',{icon:'info'});
						return;
					}
					if(applys.length==1) {
						apply._invitesingle(applys[0]);
					}else {
						apply._invitemulti(applys);
					}
				});	

				// 批量保存到电脑
				$('#btnSaveComputer').click(function(e){
					e.preventDefault();
					var applys = apply.selectApply();
					if(applys.length<=0) {
						$.anchor('请选择收到的简历',{icon:'info'});
						return;
					}
					var resumeids =[];
					for(var i = 0,len = applys.length;i < len; i+=1 ) {
						resumeids.push($('#lstContent').find('[apply="'+applys[i]+'"]').attr('resume'));
					}
					apply._downresume(resumeids.join(','),applys.join(','));
				});	
				
				// 批量转发到邮箱
				$('#btnSendEmail').click(function(e){
					e.preventDefault();
					var applys = apply.selectApply();
					if(applys.length<=0) {
						$.anchor('请选择收到的简历',{icon:'info'});
						return;
					}
					var resumeids =[];
					for(var i = 0,len = applys.length;i < len; i+=1 ) {
						resumeids.push($('#lstContent').find('[apply="'+applys[i]+'"]').attr('resume'));
					}
					apply._sendEmail(resumeids.join(','),applys.join(','));			
				});	

				// 批量放入到回收站 
				$('#btnOprecycle').click(function(e){
					e.preventDefault();
					var applys = apply.selectApply();
					if(applys.length<=0) {
						$.anchor('请选择收到的简历',{icon:'info'});
						return;
					}
					var names =[],
						val = cookieutility.get('deleteapply');
					for(var i = 0,len = applys.length;i < len; i+=1 ) {
						names.push($('#lstContent').find('[apply="'+applys[i]+'"]').find('.user_name').attr('name'));
					} 
					 if(val == 'true'){
						 apply._deleteapply(applys.join(','));
					 }else {
						 $.showModal(encodeURI('/apply/DeleteApply/names-'+names.join(',')+'-ids-'+applys.join(',')+'-v-'+Math.random()+''),{title:'删除'});
			   		 }
				});	
				// 批量婉拒
				$('#btnOprefuse').click(function(e){
					 e.preventDefault();
					 var applys = apply.selectApply();
					 if(applys.length<=0) {
						$.anchor('请选择收到的简历',{icon:'info'});
						return;
					 }
					 var names =[],
						 val = cookieutility.get('refusewarn');
					 for(var i = 0,len = applys.length;i < len; i+=1 ) {
						 names.push($('#lstContent').find('[apply="'+applys[i]+'"]').find('.user_name').attr('name'));
					 } 			 
					 if(val == 'true'){
						 apply._refuseapply(applys.join(','));
					 }else {
						$.showModal(encodeURI('/apply/Refuse/names-'+names.join(',')+'-ids-'+applys.join(',')+'-v-'+Math.random()+''),{title:'婉言谢绝'});
					 } 
				});	

				// 按姓名/简历编号搜索
				$('#btnResumeSearch').click(function(){
					 apply.submit(null,1);
				});

				$("#txtKeyWord").keydown(function(e){
					if(e.keyCode == 13){
						$("#btnResumeSearch").click();
					}
				});
			},
			_setReaded:function(applyid) {
				// 设置已读
				$.getJSON('/apply/SetRead/'+'applyid-'+applyid+'-v-'+Math.random(),function(result){
					if(result.success) {
						var element = $('#lstContent').find('[apply="'+applyid+'"]');
						if(element.is('tr')) {
							element.find('.status').addClass('green').html('已读').end().find('.opsetRead').remove();
						}else {
							element.find('.status').removeClass('unRead').addClass('green inRead').html('已读').end().find('.opsetRead').unbind().html('简历已读').removeClass('btn5').addClass('btn3');
						}
					}
				});
			},
			_setRead:function(applyids){
				// 设置已读
				$.getJSON('/apply/SetRead/'+'applyid-'+applyids+'-v-'+Math.random(),function(result){
					if(result.success) {
						var arr = applyids.split(',');
						// 设置成功
						for(var i =0,len = arr.length;i<len;i+=1) {
							var element = $('#lstContent').find('[apply="'+arr[i]+'"]');
							if(element.is('tr')) {
								element.find('.status').addClass('green').html('已读').end().find('.opsetRead').remove();
							}else {
								element.find('.status').removeClass('unRead').addClass('green inRead').html('已读').end().find('.opsetRead').unbind().html('简历已读').removeClass('btn5').addClass('btn3');
							}
						}
					}else {
						// 设置失败
						$.anchorMsg(result.error, { icon: 'fail' });
					}
				});
			},
			_invitesingle:function(applyid) {
				$.showModal('/invite/invitesingleshow/applyID-'+applyid+'-v-'+Math.random(),{title:'同意面试',onclose:function(){
					apply._invitCallback(applyid);
				}});	
			},
			_invitemulti:function(applyids) {
				$.showModal('/invite/InviteMultiShow/applyids-'+applyids.join('-applyids-'),{title:'同意面试',onclose:function(){
					apply._invitCallback(applyids.join(','));
				}});
			},
			_invitCallback:function(applyids) {
				$.getJSON("/apply/GetStatus/"+'-applyid-'+applyids+'-v-'+Math.random(),function(result){
					if(!result.error) {
						$.each(result,function(i,n){
							if(n.re_status==1) {
								var element = $('#lstContent').find('[apply="'+n.apply_id+'"]');
								if(element.is('tr')) {
									element.find('.status').removeClass().addClass('status sta green').html('已邀请');
								}else {
									element.find('.status').removeClass().addClass('inv status').html('已邀请 ');
								}   
							}
							
						});
					}
				});
			},
			_deleteapply:function(ids) {
			   // 删除求职申请	
			   $.getJSON('/apply/DeleteApply/'+'op-del-ids-'+ids+'-v-'+Math.random(),function(result){
					if(result.success) {
						var arr = ids.split(',');
						$.each(arr,function(i,n){
							//更新页面
							var element = $('#lstContent').find('[apply="'+n+'"]');
							element.remove();
						});
						$.anchorMsg('已放入回收站');
					}else {
						$.anchorMsg(result.error, { icon: 'fail' }); 
					}
				});
			},
			_refuseapply:function(ids) {
			 // 婉拒求职者
		   	   $.getJSON('/apply/refuse/'+'op-refuse-ids-'+ids+'-v-'+Math.random(),function(result){
		   			if(result.success) {
		   				var arr = ids.split(',');
		   				for(var i = 0,len = arr.length; i<len;i+=1 ) {
		   					//更新页面
							var element = $('#lstContent').find('[apply="'+arr[i]+'"]');
							if(element.is('tr')) {
								element.find('.status').removeClass().addClass('status sta').html('已婉拒');
							}else {
								element.find('.status').removeClass().addClass('other status').html('已婉拒');
							}
							element.find('.oprefuse').remove();   					
		   				}
		   				$.anchorMsg('已婉言拒绝');
		   			}else {
		   				$.anchorMsg(result.error, { icon: 'fail' }); 
		   			}
		   	   });
			},
			_updateRemark:function(resumeid) {
				// 更新备注
				$.showModal('/resumeremark/index/resume_id-'+resumeid+'-v-'+Math.random(),{title:'备注',onclose:function(){
					// 更新备注
					$.getJSON("/resumeremark/ResumeRemark/"+'-resumeid-'+resumeid+'-v-'+Math.random(),function(result){
						var element = $('#lstContent').find('[resume="'+resumeid+'"]');
						element.find('span.mark a').unTooltip();
						if(result.remark ==''||result.remark == null) {
							element.find('span.mark').removeClass('markIn').find('a').removeAttr('data-toggle').removeAttr('title');				
						}else {
							element.find('span.mark').addClass('markIn').find('a').attr('data-toggle','tooltip').attr('title',result.remark+'&nbsp;'+result.updatetime);
						}				
					});
				}});
			},
			_printresume:function(resumeid) {
				var url = '/resume/htmlprint/resumeid-'+resumeId+'';
				$('#printIframe').attr("src", url);
			},
			_downresume:function(resumeid,applyid) {
				var url = '/apply/DownLoad/resumeid-'+resumeid+'-applyid-'+applyid+'';
				$.showModal(url,{title:'保存到电脑'});
			},
			_downresumeword:function(ids,applyids){
				var url = '/resume/worddown/resumeid-'+ids+'-applyid-'+applyids+'-src-apply';
				$(this).attr('href',url).attr('target','_blank');
			},
			_downresumehtml:function(ids,applyids) {
				var url = '/resume/htmldown/resumeid-'+ids+'-applyid-'+applyids+'-src-apply';
				$(this).attr('href',url).attr('target','_blank');
			},
			_downresumeExcel:function(ids) {
				var url = '/excel/index/resumeid-'+ids+'';
				$(this).attr('href',url).attr('target','_blank');
			},
			_sendEmail:function(resumeid,applyid) {
				$.showModal('/resume/wordsend/resumeid-'+resumeid+'-applyid-'+applyid+'-src-apply',{title:'转发到邮箱'});
			},
			selectApply:function(){
			   var checkboxs = $('#lstContent').find('input[name="chkapply"]:checked'),
			   	   applyids = [];
		   	   for(var i=0,len=checkboxs.length;i<len;i+=1) {
		   			applyids.push($(checkboxs[i]).val());
		   	   } 	
			   return applyids;
		   },
		   submit:function(showmodel,searchmodel) {
				if(showmodel!=null) {
					$('#hddShowModel').val(showmodel);
				}
				if(searchmodel!=null) {
					$('#hddSeachModel').val(searchmodel);
				}
				//清空水印 
				$('#frmApply').clearWatermark();	
				$('#frmApply').get(0).submit();	
		   }	
		};
		apply.init();

	</script>
</body>
</html>