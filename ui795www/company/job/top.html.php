<div class="hd" id="tab">
	<div class="tabT" id="TabT">
		<div class="l">
			<ul>
				<li><a href="/company/job/">招聘中（<em id="jobListUseCount"></em>）<b></b></a></li>
				<li><a href="/company/job/?status=2">待发布（<em id="jobListUseCount"></em>）<b></b></a></li>
				<li><a href="/company/job/?status=3">被屏蔽（<em id="jobListUseCount"></em>）<b></b></a></li>
                <li><a href="/company/job/unit.html?act=list">部门管理<b></b></a></li>
                <li><a href="/company/job/log.html">职位被浏览记录<b></b></a></li>
				<li><a href="/company/job/tongji.html">效果统计报表(测试版)<b></b></a></li>
				<li><a href="/company/job/tuiguang.html?act=list">职位推广<b></b></a></li>
			</ul>
		</div>
	</div>
</div>

<script>
	$.ajax({
		url:'/api/web/company.api',
		type:'post',
		data:{act:'getComJobNum',isNew:1},
		dataType:'json',
		success:function(data){
			if(data.status==1){
				$(".tabT ul li").eq(0).find('em').html(data.countOnline);
				$(".tabT ul li").eq(1).find('em').html(data.countDownline);
				$(".tabT ul li").eq(2).find('em').html(data.countNotCheck);
			}
		}
	})

	var curUrl = window.location.href.split(window.location.hostname)[1];
	var curUrl1 = window.location.pathname;
	$(".tabT ul li").each(function(){
		if(curUrl.indexOf('status')>-1){
			curUrl = curUrl.split('&')[0];
			if(curUrl=='/company/job/?status=1'){
				curUrl = '/company/job/';
			}
		}

		if($(this).find('a').attr('href')==curUrl){
			$(this).addClass('cu');
		}
	})
</script>