<style type="text/css">
.letTer{ width:505px; clear:both; padding:10px;}
.letTer .team{ height:auto; margin-bottom:15px;}
.letTer .team .teamL{ width:100px; text-align:right; float:left;}
.letTer .team .teamR{ text-align:left; float:left;width:390px;}

.letTer .team .inputText{ width:200px;}
.letTer .team .teamR .verRadio{ margin-left:10px;}
.letTer .team .teamR .verTxt{width:200px; clear:both; margin:0px; color:#999; margin-top:5px;}
.letTer .team .teamR .checkBox{ margin:0 5px 0 0; vertical-align:middle;}
.letTer .team .teamR .verRadio label{ margin-right:10px;}
.letTer .team .teamR .verSelectBg{ margin-right:10px;}
.letTer .btn{margin:5px 0 0 110px;}
</style>

<form id="frmSetResumeSeekerName">
	<input type="hidden" id="condition" name="condition" value="{$condition}">
	<input type="hidden" id="keyWord" name="keyWord" value="{$key}">
	
	<div class="letTer">
		<div class="team">
			<div class="teamL"><i>*</i>搜索器名称</div>
			<div class="teamR">
			  <span class="verText"><input class="inputText" type="text" id="txtSeekerName" name="txtSeekerName" value="{$txtSeekerName}" onkeydown="if(event.keyCode==13)return false;"></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="btn"><a href="javascript:void(0);" class="btn8" id="btnSave"><b class="L"></b><b class="R"></b>保存</a></div>
	</div>
</form>

<script type="text/javascript">
var setResumeSeekerName={
	initialize:function(){
		this._initControl();
	},
	_initControl:function(){

		jpjs.use('@confirmBox',function(m){
			var confirmBox = m['widge.overlay.confirmBox'],
			$ = m['jquery'];
			$('#btnSave').click(function(){
				var condition=$('#condition').val();
				var keyWord=$('#keyWord').val();
				var txtSeekerName=$('#txtSeekerName').val();
				if(!txtSeekerName){
					confirmBox.timeBomb('名称不能为空', {
						name:'fail',
						width:160
					});
				}
				if(!condition&&!keyWord){
					confirmBox.timeBomb('搜索条件不能为空', {
						name:'fail',
						width:200
					});
				}
				//ajaxSeekerCallback();		
				$.getJSON('/person/seeker.html',{act:'add',condition:condition,keyWord:keyWord,txtSeekerName:txtSeekerName},function(data){
					if(data&&data.status==1){
						confirmBox.timeBomb(data.msg, {
							name:'success',
							width:200
						});
						ajaxSeekerCallback();
					}else{
						confirmBox.timeBomb(data.error, {
							name:'fail',
							width:300
						});
					}
				});
				
			
				//$("#seeker",window.parent.document).val($("#txtSeekerName").val());
	           // $("#btnSearch",window.parent.document).click();
			});

		});
	}
};

setResumeSeekerName.initialize();
</script>

