<?exit?>
<style type="text/css">
	.keywordContent{width: 300px; height: 100px;}
	.keywordContent p{padding: 10px 0 5px 30px;}
	.keywordContent p a{margin-left: 60px;}
</style>
<div id="keywordContent" class="keywordContent">
	<form id="jobkeyword" action="/api/web/admin.api" method="post">
		<input type="hidden" name="act" value="jobKeyWord">
		<input type="hidden" name="jid" id="jid" value="{$jid}">
		<input type="hidden" name="cid" id="cid" value="{$cid}">
		<p><input type="text" name="keyword" id="keyword" value="{$_GET['word']}" style="width:210px;" placeholder="请填写2-8个数字中英文组合的关键词"></p>
		<p><a href="javascript:void(0)" class="btn_gray btn_search" id="keywordSure">确定</a></p>
	</form>
</div>
<script>
	var jobkeyword = {
		init:function(){
			jobkeyword.submit();
		},
		submit:function(){
			$("#keywordSure").click(function(){
				var jid = $("#jid").val(),
					cid = $("#cid").val(),
					keyword = $("#keyword").val();

					if(keyword.length==0){
						$.anchorMsg('请填写关键词', {title:'提示', icon:'warning' });
						return false;
					}
					/*
					var rule =  /^[0-9a-zA-Z\u4E00-\u9FA5\uF900-\uFA2D]*$/g;  //判断字符串是否为中英文数字组合
					if (!rule.test(keyword))
					{
						$.anchorMsg('请填写中英文数字组合', {title:'提示', icon:'warning' });
						return false;
					}
					*/
					if(keyword.length>8){
						$.anchorMsg('长度不能大于8个字符', {title:'提示', icon:'warning' });
					}else if(keyword.length<2){
						$.anchorMsg('长度不能少于2个字符', {title:'提示', icon:'warning' });
						return false;
					}else {
						$("#keywordSure").submitForm({ beforeSubmit: '', data: '', success: function(data){
							if(data.status==1){//成功
								$.anchorMsg(data.msg, {title:'提示', icon:'success' });
								window.location.href = window.location.href;
							}else {
								$.anchorMsg(data.msg, {title:'提示', icon:'warning' });
							}
						}, clearForm: false})
					}
			})
		}
	}
	jobkeyword.init();

</script>