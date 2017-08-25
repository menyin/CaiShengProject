<style>
	#back_top {width: 40px; height: 40px; background: rgba(0,0,0,0.5); position: fixed; right:20px; bottom:50px; display: block; border-radius:5px; text-align: center; display: none; line-height: 40px; z-index: 999999;}
	#back_top:active {background: rgba(0,0,0,0.7);}
	#back_top span {width: 0;   height: 0;   border-left: 7px solid transparent;border-right: 7px solid transparent; border-bottom: 7px solid #fff; opacity:0.8; display: inline-block; margin-top: 17px;}
</style>
<a id="back_top" href="javascript:void(0);"><span></span></a>
<script>
	$(window).scroll(function(){
		if($(window).scrollTop() > 150){
			$('#back_top').show();
		} else {
			$('#back_top').hide();
		}
	});

	$('#back_top').click(function(){
		$('html,body').animate({scrollTop : 0},600);
	});
</script>