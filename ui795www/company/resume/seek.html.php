<style type="text/css">
.letTer{ width:505px; clear:both; padding:10px;}
.letTer .team{ height:auto; margin-bottom:15px;margin-top: 20px;}
.letTer .team .teamL{ width:100px; text-align:right; float:left;}
.letTer .team .teamR{ text-align:left; float:left;width:390px;margin-left: 20px;}
.letTer .team .teamR{ text-align:left; float:left;width:390px;margin-left: 10px;}

.text{ width:300px;}
.letTer .team .teamR .verRadio{ margin-left:10px;}
.letTer .team .teamR .verTxt{width:200px; clear:both; margin:0px; color:#999; margin-top:5px;}
.letTer .team .teamR .checkBox{ margin:0 5px 0 0; vertical-align:middle;}
.letTer .team .teamR .verRadio label{ margin-right:10px;}
.letTer .team .teamR .verSelectBg{ margin-right:10px;}
.letTer .btn{margin:30px 0 10px 0;text-align: center;}
    .searchI{
        color: red;
        margin-left: 10px;
    }
</style>

<form id="frmSetResumeSeekerName" action="/api/web/company.api" method="post">
	<input type="hidden" name="act" value="saveSeek">
	<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
	<input type="hidden" id="tplid" name="tplid" value='{$tplid}'>
	<input type="hidden" id="seekStr" name="seekStr" value='{$seekStr}'>

	<div class="letTer">
		<div class="team">
			<div class="teamL">搜索器名称<i class="searchI">*</i></div>
			<div class="teamR">
			  <span class="verText formText"><input class="text" type="text" id="txtSeekerName" name="txtSeekerName" value="{$seekName}" placeholder="请填写中英文数字组合，2到10个字符" onkeydown="if(event.keyCode==13)return false;"></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="btn"><a href="javascript:void(0);" class="btn1 btnsF14" id="btnSave"><b class="L"></b><b class="R"></b><!--{if $tplid>0}-->更新并保存<!--{else}-->新建并保存<!--{/if}--></a></div>
	</div>
</form>

<script type="text/javascript">
var setResumeSeekerName={
	initialize:function(){
		this._initControl();
	},
	_initControl:function(){
		$("#btnSave").click(function(){
            var text = $("#txtSeekerName").val();
            if(text.length==0){
               return;
            }
            var rule =  /^[0-9a-zA-Z\u4E00-\u9FA5\uF900-\uFA2D]*$/g;  //判断字符串是否为中英文数字组合
            if (!rule.test(text))
            {
                $.anchorMsg('请填写中英文数字组合', {title:'提示', icon:'warning' });
                return false;
            }
            if(text.length>10){
                $.anchorMsg('长度不能大于10个字符', {title:'提示', icon:'warning' });
            }else if(text.length<2){
                $.anchorMsg('长度不能少于2个字符', {title:'提示', icon:'warning' });
            }else {
                $("#frmSetResumeSeekerName").submitForm({ beforeSubmit: '', data: '', success: function(data){
                    if(data.status==1){//成功
                        $.anchorMsg(data.msg, {title:'提示', icon:'success' });
                        window.location.href = "/company/resume/seekTpl.html";
                    }else {
                        $.anchorMsg(data.msg, {title:'提示', icon:'warning' });
                    }
                }, clearForm: false})
            }
		})
	}
};

setResumeSeekerName.initialize();
</script>

