<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>597人才网</title>
	<link rel="shortcut icon" href="http://cdn.597.com/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://cdn.597.com/www/css/basefront.css?v=20130808" />
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/jquery.js?v=20130808"></script>
	<script language="javascript" type="text/javascript" src="http://cdn.597.com/www/js/control.js?v=20130808"></script>
	<script language="javascript" type="text/javascript">
		$(function (){
			$(".hasallcity li").hover(function(){
				$(this).addClass('hover');
			}, function(){
				$(this).removeClass('hover');
			});	
		});
	</script>
	<style type="text/css">
		* { margin:0; padding:0; }
		#main a.bold { font-weight:bold; }
		#main A { TEXT-DECORATION: none }
		#main A:hover { TEXT-DECORATION: underline }
		div.headCon {	clear:both;}
		div.nav { clear:both;}
		#main { border:1px solid #ddd; width:980px; margin:10px auto; text-align:left; font-size:14px;}
		/*按省份选择*/
		.select { height: 60px; line-height:60px; padding:0 20px; background:#f4f4f4; }
		.select .label{ font-weight:bold;}
		.select .btn001 { background: #f60; border: none; color: #fff; width: 40px; height: 20px; cursor: pointer; line-height:20px; }
		.search {width:180px;height:22px; line-height:22px; color:#666; border:1px solid #ccc; border-radius:2px;}
		/*常用城市*/
		.area { height: 40px; padding:20px; border-top:1px solid #E5E5E5;}
		.area h2,.zuijin h2{float:left; color:#333; font-weight:bold;	vertical-align:top; display:block; height:60px; margin-right:20px;font-size: 14px;}
		.area p,.zuijin p {float:left;}
		.area a ,.zuijin a{color:#CB4E14;display:block; float:left; width:80px; margin-bottom:10px; font-weight:bold;}
		/*城市选择*/
		#change {	background:#fff; }
		#change a { COLOR: #f60;}
		#change A:hover { TEXT-DECORATION: none }
		#change .city_li H2 { POSITION: relative; PADDING: 0 14px; LINE-HEIGHT: 30px; MARGIN: 20px 0 15px -100px;	*MARGIN: 20px 0 15px 10px; ZOOM: 1; DISPLAY: inline-block; BACKGROUND: #f60; HEIGHT: 32px; COLOR: #fff;	width:120PX; }
		#change .city_li H2 SPAN { BORDER-BOTTOM: #fff 6px solid; POSITION: absolute; BORDER-LEFT: #fff 6px solid; LINE-HEIGHT: 0; WIDTH: 0px; DISPLAY: block; FLOAT: none; HEIGHT: 0px; FONT-SIZE: 0px; BORDER-TOP: #f60 6px solid; TOP: 32px; BORDER-RIGHT: #fff 6px solid; LEFT: 20px }
		#change .city_li LI { BORDER-BOTTOM: #fff 1px solid; BORDER-TOP: #fff 1px solid }
		#change .city_li P { BORDER-BOTTOM: #fff 1px solid; BORDER-TOP: #fff 1px solid; PADDING: 6px 10px 6px 20px;	}
		#change .city_li SPAN.label { BORDER: #ddd 1px solid; LINE-HEIGHT: 24px; WIDTH: 30px; ZOOM: 1; DISPLAY: inline-block; HEIGHT: 30px; COLOR: #666; VERTICAL-ALIGN: top; MARGIN-RIGHT: 5px; }
		#change .city_li SPAN.label STRONG { BORDER: #f7f7f7 1px solid; TEXT-ALIGN: center; WIDTH: 28px; DISPLAY: block; FONT-FAMILY: Tahoma; BACKGROUND: #f1f1f1; HEIGHT: 28px; FONT-SIZE: 16px; }
		#change .city_li SPAN { WIDTH: 880px; ZOOM: 1; DISPLAY: inline-block; VERTICAL-ALIGN: top ; }
		#change .city_li SPAN I { FONT-STYLE: normal; MARGIN: 0px 3px; COLOR: #ccc }
		#change .city_li .hover { BORDER-COLOR: #e5e5e5; }
		#change .city_li .hover P { BACKGROUND: #FFF4E6; }
		#change .city_li .hover SPAN.label STRONG { BORDER:1px solid #f60; BACKGROUND: #f60; COLOR: #fff; }
		#change .city_li A { PADDING-BOTTOM: 1px; LINE-HEIGHT: 20px; MARGIN: 5px 10px; PADDING: 1px 2px; ZOOM: 1; DISPLAY: inline-block; HEIGHT: 20px; border-radius: 0 }
		#change .city_li A:hover { BACKGROUND: #f60; COLOR: #fff }
	</style>
</head>
<body>

<!--{template header}-->

		<div id="main">

		<!-- 区域选择 
		<div class="select">
			<form id="changeCity" action="" method="get">
				<span class="label" >按省份选择：</span> 
					<select id="yui_3_12_0_1_1392707314385_174" name="province">
						<option value="-1">--省--</option>
						<option value="110000" selected="selected">北京</option>
						<option value="120000">天津</option>
						<option value="130000">河北</option>
						<option value="140000">山西</option>
						<option value="150000">内蒙古</option>
						<option value="210000">辽宁</option>
						<option value="220000">吉林</option>
						<option value="230000">黑龙江</option>
						<option value="310000">上海</option>
						<option value="320000">江苏</option>
						<option value="330000">浙江</option>
						<option value="340000">安徽</option>
						<option value="350000">福建</option>
						<option value="360000">江西</option>
						<option value="370000">山东</option>
						<option value="410000">河南</option>
						<option value="420000">湖北</option>
						<option value="430000">湖南</option>
					</select>
					<select id="" name="city">
						<option value="-1">--市--</option>
						<option value="bj" selected="selected">北京</option>
						<option value="bj" selected="selected">北京</option>
						<option value="bj" selected="selected">北京</option>
						<option value="bj" selected="selected">北京</option>
						<option value="bj" selected="selected">北京</option>
						<option value="bj" selected="selected">北京</option>
					</select>
				</span>
				<input class="btn001"	value="确定" type="button">
				<span style="margin-left:50px;">直接搜索：</span>
				<span >
					<input class="search" type="text" value="请输入城市名" onBlur="if(this.value.match(/^\s*$/)){this.value = '请输入城市名'}" onFocus="if(this.value == '请输入城市名'){this.value = ''}" / >
					<input class="btn001" value="确定" type="button">
				</span>
			</form>
		</div>-->
		
		<!--常用城市-->
		<div class="area" style="height:30px; line-height:30px; border:1px solid #ddd;">
			<p >
				<h2>常用城市：</h2>
				<a href="http://bj.597.com" >北京</a> <a href="" >上海</a> <a href="http://cq.597.com" >重庆</a> <a href="http://tj.597.com" >天津</a> <a href="http://sz.597.com" >深圳</a> <a href="http://xm.597.com" >厦门</a> <a href="http://gz.597.com" >广州</a> <a href="http://hz.597.com" >杭州</a> <a href="http://su.597.com" >苏州</a> <a href="http://xm.597.com" >厦门</a>
			</p>
		</div>
		<!--常用城市--> 
		
		<!--最近访问-->
		<!--最近访问--> 

		<!--城市选择-->
		<div id="change">
		
			<div class="city_li">
				<h2>按拼音首字母选择<span class="arrow">&raquo;</span></h2>
				<ol class="hasallcity">
					<li id="city-A">
						<p ><span class="label"><strong>A</strong></span><span><a href="http://as.597.com" class="bold">鞍山</a><a href="http://anshun.597.com">安顺</a><a href="http://ab.597.com">阿坝</a><a href="http://alsm.597.com">阿拉善</a><a href="http://al.597.com">阿里</a><a href="http://ankang.597.com">安康</a><a href="http://aks.597.com">阿克苏</a><a href="http://anqing.597.com">安庆</a><a href="http://ay.597.com">安阳</a><a href="http://am.597.com">澳门</a></span></p>
					</li>
					<li id="city-B">
						<p ><span class="label"><strong>B</strong></span><span><a href="http://bj.597.com" class="bold">北京</a><a href="http://bt.597.com">包头</a><a href="http://bd.597.com">保定</a><a href="http://bazhong.597.com">巴中</a><a href="http://bengbu.597.com">蚌埠</a><a href="http://by.597.com">白银</a><a href="http://bc.597.com">白城</a><a href="http://baishan.597.com">白山</a><a href="http://bh.597.com">北海</a><a href="http://byce.597.com">巴彦淖尔</a><a href="http://baoji.597.com">宝鸡</a><a href="http://baise.597.com">百色</a><a href="http://benxi.597.com">本溪</a><a href="http://bs.597.com">保山</a><a href="http://bijie.597.com">毕节</a><a href="http://betl.597.com">博尔塔拉</a><a href="http://bz.597.com">滨州</a><a href="http://bozhou.597.com">亳州</a></span></p>
					</li>
					<li id="city-C">
						<p ><span class="label"><strong>C</strong></span><span><a href="http://cd.597.com" class="bold">成都</a><a href="http://cq.597.com">重庆</a><a href="http://cz.597.com">常州</a><a href="http://cs.597.com">长沙</a><a href="http://cc.597.com">长春</a><a href="http://chifeng.597.com">赤峰</a><a href="http://cx.597.com">楚雄</a><a href="http://changzhi.597.com">长治</a><a href="http://ch.597.com">巢湖</a><a href="http://chongzuo.597.com">崇左</a><a href="http://chaozhou.597.com">潮州</a><a href="http://changji.597.com">昌吉</a><a href="http://cangzhou.597.com">沧州</a><a href="http://chenzhou.597.com">郴州</a><a href="http://changde.597.com">常德</a><a href="http://chuzhou.597.com">滁州</a><a href="http://cy.597.com">朝阳</a><a href="http://changdu.597.com">昌都</a><a href="http://chizhou.597.com">池州</a><a href="http://chengde.597.com">承德</a></span></p>
					</li>
					<li id="city-D">
						<p ><span class="label"><strong>D</strong></span><span><a href="http://dg.597.com" class="bold">东莞</a><a href="http://dl.597.com">大连</a><a href="http://dy.597.com">东营</a><a href="http://dq.597.com">大庆</a><a href="http://dt.597.com">大同</a><a href="http://dali.597.com">大理</a><a href="http://deyang.597.com">德阳</a><a href="http://diqing.597.com">迪庆</a><a href="http://dazhou.597.com">达州</a><a href="http://dz.597.com">德州</a><a href="http://dandong.597.com">丹东</a><a href="http://dxal.597.com">大兴安岭</a><a href="http://dh.597.com">德宏</a><a href="http://dx.597.com">定西</a></span></p>
					</li>
					<li id="city-E">
						<p ><span class="label"><strong>E</strong></span><span><a href="http://es.597.com" class="bold">恩施</a><a href="http://ez.597.com" class="bold">鄂州</a><a href="http://erds.597.com">鄂尔多斯</a></span></p>
					</li>
					<li id="city-F">
						<p ><span class="label"><strong>F</strong></span><span><a href="http://fz.597.com">福州</a><a href="http://fs.597.com">佛山</a><a href="http://fushun.597.com">抚顺</a><a href="http://fy.597.com">阜阳</a><a href="http://fuzhou.597.com">抚州</a><a href="http://fcg.597.com">防城港</a><a href="http://fx.597.com">阜新</a></span></p>
					</li>
					<li id="city-G">
						<p ><span class="label"><strong>G</strong></span><span><a href="http://gz.597.com">广州</a><a href="http://gy.597.com">贵阳</a><a href="http://gl.597.com">桂林</a><a href="http://ganzhou.597.com">赣州</a><a href="http://guangyuan.597.com">广元</a><a href="http://guoluo.597.com">果洛</a><a href="http://guyuan.597.com">固原</a><a href="http://gn.597.com">甘南</a><a href="http://ganzi.597.com">甘孜</a><a href="http://gg.597.com">贵港</a></span></p>
					</li>
					<li id="city-H">
						<p ><span class="label"><strong>H</strong></span><span><a href="http://hz.597.com" class="bold">杭州</a><a href="http://heb.597.com">哈尔滨</a><a href="http://hf.597.com">合肥</a><a href="http://hd.597.com">邯郸</a><a href="http://huizhou.597.com">惠州</a><a href="http://haikou.597.com">海口</a><a href="http://hu.597.com">呼和浩特</a><a href="http://hy.597.com">衡阳</a><a href="http://huzhou.597.com">湖州</a><a href="http://huaibei.597.com">淮北</a><a href="http://hegang.597.com">鹤岗</a><a href="http://haibei.597.com">海北</a><a href="http://haidong.597.com">海东</a><a href="http://huangnan.597.com">黄南</a><a href="http://heze.597.com">菏泽</a><a href="http://heihe.597.com">黑河</a><a href="http://ht.597.com">和田</a><a href="http://hami.597.com">哈密</a><a href="http://ha.597.com">淮安</a><a href="http://huainan.597.com">淮南</a><a href="http://huangshan.597.com">黄山</a><a href="http://hx.597.com">海西</a><a href="http://hezhou.597.com">贺州</a><a href="http://hh.597.com">怀化</a><a href="http://hc.597.com">河池</a><a href="http://hlbe.597.com">呼伦贝尔</a><a href="http://hs.597.com">衡水</a><a href="http://heyuan.597.com">河源</a><a href="http://honghe.597.com">红河</a><a href="http://hanzhong.597.com">汉中</a><a href="http://hg.597.com">黄冈</a><a href="http://hshi.597.com">黄石</a><a href="http://hebi.597.com">鹤壁</a><a href="http://hld.597.com">葫芦岛</a></span></p>
					</li>
					<li id="city-J">
						<p ><span class="label"><strong>J</strong></span><span><a href="http://jn.597.com">济南</a><a href="http://jining.597.com">济宁</a><a href="http://jiaxing.597.com">嘉兴</a><a href="http://jh.597.com">金华</a><a href="http://jiaozuo.597.com">焦作</a><a href="http://jingzhou.597.com">荆州</a><a href="http://jl.597.com">吉林</a><a href="http://jinzhou.597.com">锦州</a><a href="http://jm.597.com">江门</a><a href="http://jdz.597.com">景德镇</a><a href="http://ja.597.com">吉安</a><a href="http://jms.597.com">佳木斯</a><a href="http://jq.597.com">酒泉</a><a href="http://jinchang.597.com">金昌</a><a href="http://jixi.597.com">鸡西</a><a href="http://jiyuan.597.com">济源</a><a href="http://jincheng.597.com">晋城</a><a href="http://jy.597.com">揭阳</a><a href="http://jz.597.com">晋中</a><a href="http://jingmen.597.com">荆门</a><a href="http://jj.597.com">九江</a></span></p>
					</li>
					<li id="city-K">
						<p ><span class="label"><strong>K</strong></span><span><a href="http://km.597.com">昆明</a><a href="http://ks.597.com">喀什</a><a href="http://klmy.597.com">克拉玛依</a><a href="http://kaifeng.597.com">开封</a></span></p>
					</li>
					<li id="city-L">
						<p ><span class="label"><strong>L</strong></span><span><a href="http://lz.597.com">兰州</a><a href="http://linyi.597.com">临沂</a><a href="http://lyg.597.com">连云港</a><a href="http://lc.597.com">聊城</a><a href="http://linfen.597.com">临汾</a><a href="http://liuzhou.597.com">柳州</a><a href="http://luoyang.597.com">洛阳</a><a href="http://lf.597.com">廊坊</a><a href="http://ly.597.com">龙岩</a><a href="http://lps.597.com">六盘水</a><a href="http://liangshan.597.com">凉山</a><a href="http://la.597.com">六安</a><a href="http://lj.597.com">丽江</a><a href="http://lincang.597.com">临沧</a><a href="http://longnan.597.com">陇南</a><a href="http://lasa.597.com">拉萨</a><a href="http://liaoyuan.597.com">辽源</a><a href="http://liaoyang.597.com">辽阳</a><a href="http://lw.597.com">莱芜</a><a href="http://luohe.597.com">漯河</a><a href="http://lvliang.597.com">吕梁</a><a href="http://lishui.597.com">丽水</a><a href="http://linxia.597.com">临夏</a><a href="http://linzhi.597.com">林芝</a><a href="http://ld.597.com">娄底</a><a href="http://lb.597.com">来宾</a><a href="http://luzhou.597.com">泸州</a><a href="http://ls.597.com">乐山</a></span></p>
					</li>
					<li id="city-M">
						<p ><span class="label"><strong>M</strong></span><span><a href="http://mas.597.com">马鞍山</a><a href="http://mianyang.597.com">绵阳</a><a href="http://mm.597.com">茂名</a><a href="http://mdj.597.com">牡丹江</a><a href="http://mz.597.com">梅州</a><a href="http://ms.597.com">眉山</a></span></p>
					</li>
					<li id="city-N">
						<p ><span class="label"><strong>N</strong></span><span><a href="http://nj.597.com">南京</a><a href="http://nb.597.com">宁波</a><a href="http://nt.597.com">南通</a><a href="http://nn.597.com">南宁</a><a href="http://nc.597.com">南昌</a><a href="http://nanchong.597.com">南充</a><a href="http://nd.597.com">宁德</a><a href="http://neijiang.597.com">内江</a><a href="http://nujiang.597.com">怒江</a><a href="http://np.597.com">南平</a><a href="http://ny.597.com">南阳</a><a href="http://nq.597.com">那曲</a></span></p>
					</li>
					<li id="city-P">
						<p ><span class="label"><strong>P</strong></span><span><a href="http://px.597.com">萍乡</a><a href="http://pds.597.com">平顶山</a><a href="http://pt.597.com">莆田</a><a href="http://puyang.597.com">濮阳</a><a href="http://panzhihua.597.com">攀枝花</a><a href="http://pl.597.com">平凉</a><a href="http://pe.597.com">普洱</a><a href="http://pj.597.com">盘锦</a></span></p>
					</li>
					<li id="city-Q">
						<p ><span class="label"><strong>Q</strong></span><span><a href="http://qd.597.com">青岛</a><a href="http://qz.597.com">泉州</a><a href="http://qhd.597.com">秦皇岛</a><a href="http://qqhr.597.com">齐齐哈尔</a><a href="http://qingyang.597.com">庆阳</a><a href="http://quzhou.597.com">衢州</a><a href="http://qxn.597.com">黔西南</a><a href="http://qinzhou.597.com">钦州</a><a href="http://qn.597.com">黔南</a><a href="http://qj.597.com">曲靖</a><a href="http://qdn.597.com">黔东南</a><a href="http://qth.597.com">七台河</a><a href="http://qingyuan.597.com">清远</a></span></p>
					</li>
					<li id="city-R">
						<p ><span class="label"><strong>R</strong></span><span><a href="http://rizhao.597.com">日照</a><a href="http://rkz.597.com">日喀则</a></span></p>
					</li>
					<li id="city-S">
						<p ><span class="label"><strong>S</strong></span><span><a href="">上海</a><a href="http://sz.597.com">深圳</a><a href="http://sy.597.com">沈阳</a><a href="http://su.597.com">苏州</a><a href="http://sjz.597.com">石家庄</a><a href="http://shaoxing.597.com">绍兴</a><a href="http://shunde.597.com">顺德</a><a href="http://sanya.597.com">三亚</a><a href="http://sg.597.com">韶关</a><a href="http://suihua.597.com">绥化</a><a href="http://songyuan.597.com">松原</a><a href="http://sr.597.com">上饶</a><a href="http://shiyan.597.com">十堰</a><a href="http://smx.597.com">三门峡</a><a href="http://sn.597.com">山南</a><a href="http://shaoyang.597.com">邵阳</a><a href="http://suining.597.com">遂宁</a><a href="http://sq.597.com">商丘</a><a href="http://shuozhou.597.com">朔州</a><a href="http://suizhou.597.com">随州</a><a href="http://sw.597.com">汕尾</a><a href="http://sp.597.com">四平</a><a href="http://suqian.597.com">宿迁</a><a href="http://sm.597.com">三明</a><a href="http://szs.597.com">石嘴山</a><a href="http://sys.597.com">双鸭山</a><a href="http://st.597.com">汕头</a><a href="http://suzhou.597.com">宿州</a><a href="http://sl.597.com">商洛</a></span></p>
					</li>
					<li id="city-T">
						<p ><span class="label"><strong>T</strong></span><span><a href="http://tj.597.com">天津</a><a href="http://ty.597.com">太原</a><a href="http://ta.597.com">泰安</a><a href="http://tz.597.com">台州</a><a href="http://ts.597.com">唐山</a><a href="http://taizhou.597.com">泰州</a><a href="http://tongling.597.com">铜陵</a><a href="http://tc.597.com">铜川</a><a href="http://tr.597.com">铜仁</a><a href="http://tlf.597.com">吐鲁番</a><a href="http://tianshui.597.com">天水</a><a href="http://tongliao.597.com">通辽</a><a href="http://tl.597.com">铁岭</a><a href="http://th.597.com">通化</a></span></p>
					</li>
					<li id="city-W">
						<p ><span class="label"><strong>W</strong></span><span><a href="http://wh.597.com">武汉</a><a href="http://wx.597.com">无锡</a><a href="http://wz.597.com">温州</a><a href="http://wuhu.597.com">芜湖</a><a href="http://weihai.597.com">威海</a><a href="http://wf.597.com">潍坊</a><a href="http://wlmq.597.com">乌鲁木齐</a><a href="http://wuzhou.597.com">梧州</a><a href="http://wuzhong.597.com">吴忠</a><a href="http://wuwei.597.com">武威</a><a href="http://wn.597.com">渭南</a><a href="http://wlcb.597.com">乌兰察布</a><a href="http://ws.597.com">文山</a><a href="http://wuhai.597.com">乌海</a></span></p>
					</li>
					<li id="city-X">
						<p ><span class="label"><strong>X</strong></span><span><a href="http://xa.597.com">西安</a><a href="http://xm.597.com">厦门</a><a href="http://xz.597.com">徐州</a><a href="http://xiangyang.597.com">襄阳</a><a href="http://xn.597.com">西宁</a><a href="http://xiaogan.597.com">孝感</a><a href="http://bn.597.com">西双版纳</a><a href="http://xinyu.597.com">新余</a><a href="http://xiangtan.597.com">湘潭</a><a href="http://xl.597.com">锡林郭勒</a><a href="http://xt.597.com">邢台</a><a href="http://xx.597.com">新乡</a><a href="http://xiangxi.597.com">湘西</a><a href="http://xinzhou.597.com">忻州</a><a href="http://xianyang.597.com">咸阳</a><a href="http://xuancheng.597.com">宣城</a><a href="http://hk.597.com">香港</a><a href="http://xy.597.com">信阳</a><a href="http://xianning.597.com">咸宁</a><a href="http://xc.597.com">许昌</a></span></p>
					</li>
					<li id="city-Y">
						<p ><span class="label"><strong>Y</strong></span><span><a href="http://yz.597.com">扬州</a><a href="http://yt.597.com">烟台</a><a href="http://yancheng.597.com">盐城</a><a href="http://yuncheng.597.com">运城</a><a href="http://yw.597.com">义乌</a><a href="http://yy.597.com">岳阳</a><a href="http://yc.597.com">宜昌</a><a href="http://yulin.597.com">玉林</a><a href="http://yinchuan.597.com">银川</a><a href="http://yingtan.597.com">鹰潭</a><a href="http://ya.597.com">雅安</a><a href="http://yili.597.com">伊犁</a><a href="http://ys.597.com">玉树</a><a href="http://yichun.597.com">宜春</a><a href="http://yk.597.com">营口</a><a href="http://yongzhou.597.com">永州</a><a href="http://yb.597.com">宜宾</a><a href="http://yiyang.597.com">益阳</a><a href="http://yx.597.com">玉溪</a><a href="http://yq.597.com">阳泉</a><a href="http://yanan.597.com">延安</a><a href="http://yl.597.com">榆林</a><a href="http://yf.597.com">云浮</a><a href="http://yanbian.597.com">延边</a><a href="http://yj.597.com">阳江</a><a href="http://yich.597.com">伊春</a></span></p>
					</li>
					<li id="city-Z">
						<p ><span class="label"><strong>Z</strong></span><span><a href="http://zhengzhou.597.com">郑州</a><a href="http://zhenjiang.597.com">镇江</a><a href="http://zs.597.com">中山</a><a href="http://zb.597.com">淄博</a><a href="http://zh.597.com">珠海</a><a href="http://zunyi.597.com">遵义</a><a href="http://zhuzhou.597.com">株洲</a><a href="http://zg.597.com">自贡</a><a href="http://zhoushan.597.com">舟山</a><a href="http://zhanjiang.597.com">湛江</a><a href="http://zq.597.com">肇庆</a><a href="http://zz.597.com">漳州</a><a href="http://zhangye.597.com">张掖</a><a href="http://zt.597.com">昭通</a><a href="http://zjj.597.com">张家界</a><a href="http://zk.597.com">周口</a><a href="http://zmd.597.com">驻马店</a><a href="http://zjk.597.com">张家口</a><a href="http://zy.597.com">资阳</a><a href="http://zw.597.com">中卫</a><a href="http://zaozhuang.597.com">枣庄</a></span></p>
					</li>
				</ol>
			</div>
		</div>
		<!--城市选择-->
	</div>
<!--主体内容-->


<!--{template footer}-->
</body>
</html>