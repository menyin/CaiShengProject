		<div class="cTitle">
			<div class="ctL">
				<div class="Cname"><h1 id="companyName">{$com[cname]}</h1></div>
				<div class="Cico"><span>已认证:</span><b class="ico icoLicense" title="已通过验证"></b></div>
			</div>
			<div class="ctR">
				<div class="Ci">
					<div class="Cilogo"><img src='{$com[cname]}' title='{$com[cname]}' /></div>
					<div class="Cibtn">
						<a href="javascript:void(0);" class="cb" id="btnAttention" style="display:inline-block;"><b class="L"></b><b class="R"></b>加关注</a>
						<a href="javascript:void(0);" class="btn1" id="btnCancelAttention" style="display:none;"><b class="L"></b><b class="R"></b>取消关注</a>
						<span>粉丝：<i id="attentionCount">0</i></span>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
	$(function(){ 
		//举报 
		$('#btnReport').click(function() {
			$.anchorMsg('举报成功！');
			return false;
		});

		//关注 
		$('#btnAttention').click(function() {
			addAttention();
			return false;
		});
	});

	function addAttention(){
		$.getJSON('addAttention.html?cid={$com[cid]}&cname={$com[cname]}', '', function(data) {
			if (data.error) {
				$.anchorMsg(data.error, { icon: 'fail' });
				return;
			}
			if (data.fail) {
				$.anchorMsg(data.fail, { icon: 'fail' });
				return;
			}
			if (data.IsAttention) {
				$.anchorMsg('您已经关注过此单位，请勿重复关注！', { icon: 'warning' });
				//$('#btnAttention').hide();
				//$('#btnCancelAttention').css("display", "inline-block");
				return;
			}
			//$('#btnAttention').hide();
			//$('#btnCancelAttention').css("display", "inline-block");				
			$('#attentionCount').html(parseInt($('#attentionCount').html())+1);
			$.anchorMsg('成功关注了{$com[cname]}！');
			return;
		});
	}
</script>