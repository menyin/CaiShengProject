
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--    声明ie以最高的模式运行-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<style>
.remBox{width:500px;}
.remBox .remLst{height:120px;overflow-y:scroll;margin-bottom:15px;}
.remBox .remLst ul li{border-bottom:1px dashed #dadada;font-size:12px;padding:5px 10px;}
.remBox .remLst ul li em{float:left;display:inline;color:#999;width:80px;}
.remBox .remLst ul li span.txt{float:left;display:inline;color:#333;width:350px;overflow:hidden;height:24px;line-height:24px;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;}
.remBox .remLst ul li a.jpFntWes{float:right;display:inline;color:#999;width:20px; text-align:right;font-size:14px;color:#E68F1E;margin:5px 0 0;}
.editRem{border-top:1px solid #dadada;padding-top:10px;}
.editRemL{float:left;display:inline;width:210px;}
.editRemR{float:right;display:inline;width:275px;}
.editRemL h3{font-size:14px;padding-left:10px;margin-bottom:5px;height:28px;line-height:28px;}
.textArea textarea{width:180px;height:160px;border:1px solid #cfcfcf;border-right:1px solid #e8e8e8;border-bottom:1px solid #e8e8e8;padding:0 5px;color:#333;background:#fff;font-size:12px;}
.editRemR h4{font-size:14px;margin-bottom:5px;height:28px;line-height:28px;color:#666;}
.editRemR dl{margin-bottom:5px;font-size:12px;}
.editRemR dl dt{color:#999;}
.editRemR dl dd a{margin:0 10px 0 0;}
.remBox .remBtn{margin:15px 0 0;}
.remBox .noData{padding:20px 0;zoom:1;background:none;}
.editRemL .textArea textArea.focus{background:#f2fcfe;border:1px solid #9fcdd6;box-shadow:0 0 5px #9fcdd6;}
</style>
<div class="dgBox remBox">
	<div class="remLst" >
		<!--{if $noteList}-->
		<ul id="remarks">
			<!--{loop $noteList $l}-->
			<li id="li{$l['_id']}"><em>{$l['_createTime']}</em><span>{$l['note_content']}</span><a href="javascript:void(0);" data-id="{$l['_id']}" class="jpFntWes">&#xf00d;</a></li>
			<!--{/loop}-->
		</ul>
		<!--{else}-->
		<div class="noData" style="display:none">暂无备注</div>
		<!--{/if}-->
	</div>
	<form id="formRemark" action="/api/web/company.api" method="post">
	<input type="hidden" id="hidResumeId" name="hidResumeId" value='{$resume_id}' />
	<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
	<div class="editRem">
		<div class="editRemL">
			<h3>添加备注</h3>
			<div class="textArea">
				<textarea id="taRemark" name="taRemark" class="textarea"></textarea>
			</div>
			 <span class="tipPos">
			 	<span class="tipLay "></span>
			 </span>
		</div>
		<div id="editRemR" class="editRemR">
			<h4>常用备注</h4>
			<dl>
			<dt>沟通前：</dt>
			<dd><a class="btnRemarkM" href="javascript:void(0)">无人接听</a><a class="btnRemarkM" href="javascript:void(0)">停机</a></dd>
			</dl>
			<dl>
			<dt>沟通中：</dt>
			<dd><a class="btnRemarkM" href="javascript:void(0)">对方态度很好</a><a class="btnRemarkM" href="javascript:void(0)">态度恶劣</a></dd>
			</dl>
			<dl>
			<dt>沟通后：</dt>
			<dd><a class="btnRemarkM" href="javascript:void(0)">对方考虑</a><a class="btnRemarkM" href="javascript:void(0)">面试时间冲突</a><a class="btnRemarkM" href="javascript:void(0)">已找到工作</a><a class="btnRemarkM" href="javascript:void(0)">同意面试</a></dd>
			</dl>
			<dl>
			<dt>对方同意面试后：</dt>
			<dd><a class="btnRemarkM" href="javascript:void(0)">没来参加面试</a><a class="btnRemarkM" href="javascript:void(0)">不适合</a><a class="btnRemarkM" href="javascript:void(0)">待定</a><a class="btnRemarkM" href="javascript:void(0)">已面试</a></dd>
			</dl>
		</div>
		<div class="clear"></div>
	</div>
	<div class="remBtn"><a id="btnSaveRemark" href="javascript:void(0);" class="btn1 btnsF14">确定</a><a id="btnCancel" href="javascript:void(0);" class="btn3 btnsF14">取消</a></div>
	</form>
</div>
<script type="text/javascript">

try{
	jpjs.use('jpjob.jobValidate, jpjob.jobForm, jpjob.jobDialog', function($, form, jobDialog){
		factory($.extend(form, jobDialog));
	});
} catch (ex) {
	factory($);
}
function factory($){
	
	$('#editRemR').on('click', '.btnRemarkM', function(e){
		resumeremark.quickRemark(e.currentTarget);
	});
	$('#btnCancel').on('click', function(){
		resumeremark.cancelRemark(this);
	});
	
	var formRemarkValidate;
	var resumeremark = {
		init:function(){
			//验证
			
			formRemarkValidate = $('#formRemark').validate({
				 rules: {
					taRemark: { maxlength: 100 }
				 },
				 messages: {
					taRemark: {  maxlength: '简历备注不能超过100字<span class="tipArr"></span>' }
				 },
				 errorClasses:{
					taRemark: { maxlength:'tipLayErr tipw150'}
				 },
				errorElement:'span',
				errorPlacement: function(error, element)
				{
					element.parent().nextAll().find('.tipLay').append(error);
				},
				success: function(label)
				{ 
					label.text(" ");
				}
				 
			});
			
			
			$('#remarks').on('click', '.jpFntWes', function(e){
				target = e.currentTarget;
				resumeremark.del(target, $(target).attr('data-id'));
			});
			
			//提交
			$('#btnSaveRemark').click(function(){
				if($('#taRemark').val()==''){
					if($('#btnCancel')[0].trigger){
						$('#btnCancel')[0].trigger('close');
					} else {
						$('#btnCancel').closeDialog();
					}
					return;
				}
				var data = { act: "addNote" };
				$('#btnSaveRemark').submitForm({ beforeSubmit: $.proxy(formRemarkValidate.form, formRemarkValidate), data: data, success: resumeremark.successRemark, clearForm: false });
				return false;
			});
			
			
		},
		quickRemark:function(obj){
			$('#taRemark').val($(obj).text());
		},
		cancelRemark:function(obj){
			if(obj.trigger){
				obj.trigger('close');
			} else {
				$(obj).closeDialog();
			}
		},
		successRemark:function(data){
			if(data.success=='true'){
				$.anchorMsg('添加备注成功');
				
				if($('#btnCancel')[0].trigger){
					$('#btnCancel')[0].trigger('close');
				} else {
					$('#btnCancel').closeDialog();
				}
				window.location.href = window.location.href;
				/*
				$('<li id="li'+data.remark_id+'"><em>'+data.update_time+'</em><span class="txt">'+data.remark+'</span><a href="javascript:void(0);" data-id="' + data.remark_id + '" class="jpFntWes">&#xf00d;</a></li>').prependTo($('#remarks'));
				var btnRemark = $('#btnRemark');
				if(btnRemark.length){
					var num = data.remark_count ? '(' +　data.remark_count　+ ')' : '',
						li = btnRemark.closest('li');
					btnRemark.children('font').html(num);
					if(!li.hasClass('cur')){
						li.addClass('cur');
					}
				}
				*/
				/*
				if($('#remarks').find('li').size() > 0)
				{
					$('div.noData').hide();
				}
				if (data.hasRemark)
				{
					//回调函数
					//  
				}
				*/
			}else{
				if(data.status==0){
					$.message(data.msg, { icon: 'fail' });
				}else{
					$.message(data.msg, { icon: 'fail' });
				}
			}
		},
		del: function(obj, remark_id)
		{
			//检查登录
			//if (!checkCompanyLogin()) return;
			var resume_id = $('#hidResumeId').val();
			$.getJSON('/api/web/company.api', { act: 'delNote', remark_id: remark_id, resume_id: resume_id, cidHash:{$com[cid]} }, function(data){
				if (data.status<0){
					if(data.status==0){
						$.message(data.msg, { icon: 'fail' });
					}else{
						$.message(data.msg, { icon: 'fail' });
					}
					return;
				} else {
					$.anchorMsg('删除备注成功');
					$('#btnCancel').click();
					window.location.href = window.location.href;
					/*
					$('#li' + data.remark_id).remove();
					var btnRemark = $('#btnRemark');
					if(btnRemark.length){
						var num = data.remark_count ? '(' +　data.remark_count　+ ')' : '';
						btnRemark.children('font').html(num);
						if(!num){
							btnRemark.closest('li').removeClass('cur');
						}
					}
					*/
					/*
					if($('#remarks').find('li').size() == 0){
						$('div.noData').show();
					}
					*/
					//if (data.hasRemark){
						//回调函数
						//  
					//}
				}
			});
		}	
	};
	resumeremark.init();
}
</script>
</body>
</html>
