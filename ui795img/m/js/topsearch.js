$(function(){
var search_list="文员?wy,会计?kj,司机?sj,销售?xs,业务?yw,教师?js,设计?sj,行政?xz,助理?zl,仓管?cg,出纳?cn,经理?jl,主管?zg,人事?rs,店长?dz,财务?cw,收银?sy,技工?jg,建筑?jz,电工?dg,医生?ys,保安?ba,服务员?fw,客服?kf,阿姨?ay,机械?jx,采购?cg,网络?wl,策划?ch,促销?cx,护士?hs,质检?zj,导购?dg,网管?wg,翻译?fy,幼师?ys,施工?sg,公关?gg,预算?ys,营销?yx,厨师?cs,领班?lb,餐饮?cy,普工?pg,园林?yl,汽修?qx,钳工?qg,保洁?bj,机电?jd,电焊?dh,绘图?ht,网页?wy,美工?mg,美容?mr,厂长?cz,品管?pg,品管?pg,销售经理?xsjl,销售代表?xsdb,销售主管?xszg,销售顾问?xsgw,销售文员?xswy,销售客服?xskf,市场销售?scxs,汽车销售?qcxs,房地产销售?fdcxs,前台文员?qtwy,办公文员?bgwy,高级文员?gjwy,小车司机?xcsj,经理司机?jlsj,货车司机?hcsj,叉车司机?ccsj,送货司机?shsj,铲车司机?ccsj,会计师?kjs,会计文员?kjwy,会计助理?kjzl,财务会计?cwkj,主办会计?zbkj,会计主管?kjzg,助理会计师?zlkjs,注册会计师?zckjs,兼职?jz,兼职会计?jzkj,教师兼职?jsjz,暑假?sj,寒假?hj,兼职服务员?jzfwy,兼职家教?jzjj,英语教师?yyjs,幼儿教师?yejs,小学教师?xxjs,计算机教师?jsjjs,电脑教师?dnjs,语文教师?ywjs,美术教师?msjs,汽车?qc,设计师?sjs,平面设计?pmsj,广告设计?ggsj,室内设计?snsj,装潢设计?zhsj,建筑设计?jzsj,室内设计师?snsjs,酒店?jd,酒店管理?jdgl,酒店服务员?jdfwy,酒店经理?jdjl,业务员?ywy,业务代表?ywdb,业务经理?ywjl,业务主管?ywzg,业务助理?ywzl,业务司机?ywsj,兼职业务?jzyw,司机兼业务?sjjyw,行政助理?xzzl,经理助理?jlzl,律师助理?lszl,策划助理?chzl,店长助理?dzzl,房地产?fdc,收银员?syy,程序员?cxy,营业员?yyy,生产管理?scgl,物业管理?wygl,行政文员?xzwy,行政主管?xzzg,行政经理?xzjl,导购员?dgy,门市导购?msdg,临床医生?lcys,B超医生?bcys,妇产科医生?fkys,外科医生?wkys,内科医生?nkys,口腔医生?kqys,妇科医生?fkys,市场营销?scyx,英语老师?yyls,采购文员?cgwy,暑期?sq,暑期工?sqg,酒店服务员?jdfwy,餐厅服务员?ctfwy,餐饮服务员?cyfwy,客房服务员?kffwy,艺术幼师?ysys,广告策划?ggch,市场策划?scch,asp程序员?aspcxy,网页程序员?wycxy,php程序员?phpcxy,软件工程师?rjgcs,android程序员?androidcxy,做饭阿姨?zfay,煮饭阿姨?zfay,清洁阿姨?qjay,保洁阿姨?bjay,卫生阿姨?wsay,洗碗阿姨?xway,办公室文员?bgswy,九一人才网?jyrcw,肯德基?kdj,永昇?ys,坚强百货?jqbh,青峰医药?qfyy,山歌食品?sgsp,加大?jd,双胞胎?sbt,华坚鞋城?hjxc,华劲纸业?hjzy,金力永磁?jlyc,龙钇稀土?lyxt,五环机器?whjq,天虹数码?thsm,八维生物?bwsw,虔发中药?qfzy,荧光磁业?ygcy,朱师傅?zsf,黑马房地?hmfd,人民医院?rmyy,虔东稀土?qdxt,宏光稀土?hgxt,我爱家园?wajy,仁心?rx,晨光稀土?cgxt,江钨?jw,永暉?yh,润田?rt,鑫业集团?xy,汉华食品?hhsp,四平?sp,电子厂?dzc,格兰云天?glyt,人寿保险?rsbx,新材料?xcl,毅德?yd,亚美达?ymd,华宏?hh,金进?jj,氯碱?lj,曼妮芬?mnf,协顺?xs,米兰?ml,中影?zy,华润?hr,本田?bt,红土地?htd,苏宁?sn,中海?zh,丰田?ft,好街坊?hjf,华泰?ht,谱赛科?psk,齐云山?qys,菲尔雪?fex,淦龙?gl,平安保险?pabx,澳克泰?akt,八维?bw,宝泽?bz,格特拉克?gtlk,光宝力信?gblx,棕榈岛?zld,锦江?jj,东方鑫泰?dfxt,大润发?drf,伟创力?wcl";
var sssss=search_list.split(",")

	function soso(so,ww){
		var s=sssss
			,str=""
			,j=0
			,v=so
			,vhistory=0
		var jj,ww
		ww=ww?"='"+ww+"'":"";
		jj=ww||'';
		$("i[data-cj"+jj+"]").css("visibility",v?"visible":"hidden");
		$("section[data-section]").remove();
		if(v){
			v=v.toLowerCase();
			$.each(s,function(k,val){
				if(val.indexOf(v)>-1){
					if( (v.length==1 && ( val.substring(0,1)==v || val.split("?")[1].substring(0,1)==v )) || v.length>=2 ){
						if(j>9){return false;}
						value=val.split("?")[0]
						str+="<li data-key='"+value+"'><i data-plus"+jj+">+</i><span><b>"+value.replace(v,"</b>"+v+"<b>")+"</b></span></li>";
						j++;
					}
				}
			})

		}else{
			//查看是否有历史搜索记录
			var hot=$.getCookie("tipHot9");
			if(hot){
				hot=hot.split("|||").reverse()
				$.each(hot,function(i,vv){
					str+="<li data-key='"+unescape(vv)+"'><i data-plus"+jj+">+</i><span><b>"+unescape(vv)+"</b></span></li>";
				})
				vhistory=1;
			}
		}
		//有内容设置提示
		if(str){
			box='<section class="result" data-section'+jj+'><ul>'
				+ str
				+'<li><em data-close'+jj+'>关闭</em><em data-clear'+jj+'>清除历史记录</em></li></ul></section>';
			$("div[data-search"+jj+"]").append(box);
			if(vhistory){$("em[data-clear"+jj+"]").css("visibility","visible")}
		}	
	}

	//触发提示搜索
	$(document).on("keyup click focus","input[data]",function(){
		var $this=$(this)
			,v=$.trim($this.val())
			,ww=$this.attr("data")?$this.attr("data"):""
			,jj=ww
			ww=ww?"='"+ww+"'":""
			var top=$("div[data-search"+ww+"]").offset().top
			if(!jj) window.scroll(0,top-8)
			//setTimeout(function(){window.scroll(0,top-8)},500);
			jj?soso(v,jj):soso(v);
	})
	//+搜索
	$(document).on("click","i[data-plus]",function(){
		var v=$(this).parent().attr("data-key")
			,ww=$(this).attr("data-plus")
			 ww=ww?"='"+ww+"'":""
		var plus=$("i[data-plus"+ww+"]").length
		$("#j").val(v).focus();
		plus==1?$("section[data-section"+ww+"]").remove():soso(v);
	})
	//点击搜索提示
	$(document).on("click","li[data-key] span",function(){
		var j=$(this).parent().attr("data-key")
		var jj=$(this).parent().parent().parent().attr("data-section")
		//	,a=$("#noc_diqu").val()
		//$(this).parent().css("background-color","#F1FEDD");
		//setTimeout(function(){location.href='jobs.asp?j='+j+'&noc='+a},0)
		if(jj){
			$("#j"+jj).val(j);
			$("section[data-section='"+jj+"']").remove();
			$('form[name="f1'+jj+'"]').submit();
		}else{
			$("#j").val(j);
			$("section[data-section]").remove();
			$('form[name="f1"]').submit();
		}
	})
	//关闭搜索
	$(document).on("click","em[data-close]",function(){
		//$("i[data-cj]").css("visibility","hidden");
		var jj=$(this).attr("data-close")
		if(jj){
			$("section[data-section='"+jj+"']").remove();
		}else{
			$("section[data-section]").remove();
		}
	})
//	$(document).on("click",function(e){
//		if(!$(e.target).is(".searchbox")){
//			$("section[data-section]").remove();
//		}
//	});		
	//删除搜索框内容
	$(document).on("click","i[data-cj]",function(){
		var jj=$(this).attr("data-cj")
		if(jj){
			$("section[data-section='"+jj+"']").remove();
			$("#j"+jj).val("").focus();
			$(this).css("visibility","hidden");
			soso(0,jj);
		}else{
			$("section[data-section]").remove();
			$("#j").val("").focus();
			$(this).css("visibility","hidden");
			soso(0);
		}
	})
	//清除历史搜索记录
	$(document).on("click","em[data-clear]",function(){
		if(confirm("清除全部查询历史记录？")){
			$.setCookie("tipHot9","",{domain:'.597.cs'});
			var jj=$(this).attr("data-clear")
			if(jj){
				$("section[data-section='"+jj+"']").remove();
			}else{
				$("section[data-section]").remove();
			}
		}
	})
})