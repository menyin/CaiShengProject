$(function(){
	//延迟提示
	var rtip=function(str,t){
		$(".ui-alert").remove()
		var alt = $('<div class="ui-alert" style="position:fixed;top:0;left:0;padding:15px 10px;min-width:100px;opacity:1;min-height:25px;line-height:25px;text-align:center;color:#fff;display:block;z-index:2147483647;border-radius:3px;background:rgba(0,0,0,0.8);font-size:16px;">'+str+'</div>')
		alt.click(function(){alt.remove()}).find(".ui-alert-close").click(function(){alt.remove()})
		alt.appendTo("body")
		var winW = $(window).width()
		,winH = $(window).height()
		,altW = alt.width()
		,altH = alt.height()
		if(winW>altW) alt.css("left",(winW-altW)/2)
		if(winH>altH) alt.css("top",(winH-altH)/2)
		alt.show()
		if(t===false)return
		setTimeout(function(){alt.remove()},t||2500)
	}
	//遮罩层
	,mask_loading=function(){
		var s='<div class="ui-mask lmove" style="position:fixed;top:0;left:0;width:100%;height:100%;background:#000;opacity:0.6;height:100%;display:block;z-index:10"></div>';
		s=s+'<div class="ui-loading hrLoading lmove" style="z-index:12;left:50%;position:fixed;"><span style="border-left-color:#f50"></span></div>';
		$(s).appendTo("body");
	}
	,chekid_t=function(){
			var arr = [],
				okk=$(".check").find('.nav-toggle-button');
			$.each(okk,function(i){
				var $this=$(this)
				if(okk.eq(i).attr("data-included")=="true"){
					var jobs_id=$this.attr("data-jobs_id");
					arr.push(jobs_id);
			  }
			})

			return arr;
		}
		,count=function(s){
			    var $con_i=$("#chkcount")
					,s=s||[]
				s=s.length>0?s.length:0;
				s>0?$con_i.text("( "+s+" )").parent().parent().show():$con_i.text("").parent().parent().hide();
			}
	var data_str=[]
	$(document).on("click",".nav-toggle-button",function(){
		var $this=$(this)
		    ,$nav_tog=$this.attr("data-included")
			,$con=$("#con")
		$nav_tog=="true"?$this.attr("data-included","false"):$this.attr("data-included","true");
		$this.parent().parent().removeClass("ckg");
		data_str=chekid_t();
		count(data_str);
	})
	//批量提交
	$(document).on("click","#btnApply",function(){
		//console.log(JSON.stringify(data_str))
		var str=data_str.join(",");
		$.ajax({
			url : "/api/web/job.api",
			type : "get",
			data : {
				act : 'join',
				str : str
			},
			dataType : "json",
			beforeSend : function(){
				mask_loading();
			},
			success : function(json) {
				alert(json.msg);
				$(".lmove").remove();
				if(json.status==1) window.location.href = window.location.href;
			}
		});
		return;
	})
})



$(function(){
var search_list="文员?wy,会计?kj,司机?sj,销售?xs,业务?yw,教师?js,设计?sj,行政?xz,助理?zl,仓管?cg,出纳?cn,经理?jl,主管?zg,人事?rs,店长?dz,财务?cw,收银?sy,技工?jg,建筑?jz,电工?dg,医生?ys,保安?ba,服务员?fw,客服?kf,阿姨?ay,机械?jx,采购?cg,网络?wl,策划?ch,促销?cx,护士?hs,质检?zj,导购?dg,网管?wg,翻译?fy,幼师?ys,施工?sg,公关?gg,预算?ys,营销?yx,厨师?cs,领班?lb,餐饮?cy,普工?pg,园林?yl,汽修?qx,钳工?qg,保洁?bj,机电?jd,电焊?dh,绘图?ht,网页?wy,美工?mg,美容?mr,厂长?cz,品管?pg,品管?pg,销售经理?xsjl,销售代表?xsdb,销售主管?xszg,销售顾问?xsgw,销售文员?xswy,销售客服?xskf,市场销售?scxs,汽车销售?qcxs,房地产销售?fdcxs,前台文员?qtwy,办公文员?bgwy,高级文员?gjwy,小车司机?xcsj,经理司机?jlsj,货车司机?hcsj,叉车司机?ccsj,送货司机?shsj,铲车司机?ccsj,会计师?kjs,会计文员?kjwy,会计助理?kjzl,财务会计?cwkj,主办会计?zbkj,会计主管?kjzg,助理会计师?zlkjs,注册会计师?zckjs,兼职?jz,兼职会计?jzkj,教师兼职?jsjz,暑假?sj,寒假?hj,兼职服务员?jzfwy,兼职家教?jzjj,英语教师?yyjs,幼儿教师?yejs,小学教师?xxjs,计算机教师?jsjjs,电脑教师?dnjs,语文教师?ywjs,美术教师?msjs,汽车?qc,设计师?sjs,平面设计?pmsj,广告设计?ggsj,室内设计?snsj,装潢设计?zhsj,建筑设计?jzsj,室内设计师?snsjs,酒店?jd,酒店管理?jdgl,酒店服务员?jdfwy,酒店经理?jdjl,业务员?ywy,业务代表?ywdb,业务经理?ywjl,业务主管?ywzg,业务助理?ywzl,业务司机?ywsj,兼职业务?jzyw,司机兼业务?sjjyw,行政助理?xzzl,经理助理?jlzl,律师助理?lszl,策划助理?chzl,店长助理?dzzl,房地产?fdc,收银员?syy,程序员?cxy,营业员?yyy,生产管理?scgl,物业管理?wygl,行政文员?xzwy,行政主管?xzzg,行政经理?xzjl,导购员?dgy,门市导购?msdg,临床医生?lcys,B超医生?bcys,妇产科医生?fkys,外科医生?wkys,内科医生?nkys,口腔医生?kqys,妇科医生?fkys,市场营销?scyx,英语老师?yyls,采购文员?cgwy,暑期?sq,暑期工?sqg,酒店服务员?jdfwy,餐厅服务员?ctfwy,餐饮服务员?cyfwy,客房服务员?kffwy,艺术幼师?ysys,广告策划?ggch,市场策划?scch,asp程序员?aspcxy,网页程序员?wycxy,php程序员?phpcxy,软件工程师?rjgcs,android程序员?androidcxy,做饭阿姨?zfay,煮饭阿姨?zfay,清洁阿姨?qjay,保洁阿姨?bjay,卫生阿姨?wsay,洗碗阿姨?xway,办公室文员?bgswy,肯德基?kdj,永昇?ys,坚强百货?jqbh,青峰医药?qfyy,山歌食品?sgsp,加大?jd,双胞胎?sbt,华坚鞋城?hjxc,华劲纸业?hjzy,金力永磁?jlyc,龙钇稀土?lyxt,五环机器?whjq,天虹数码?thsm,八维生物?bwsw,虔发中药?qfzy,荧光磁业?ygcy,朱师傅?zsf,黑马房地?hmfd,人民医院?rmyy,虔东稀土?qdxt,宏光稀土?hgxt,我爱家园?wajy,仁心?rx,晨光稀土?cgxt,江钨?jw,永暉?yh,润田?rt,鑫业集团?xy,汉华食品?hhsp,四平?sp,电子厂?dzc,格兰云天?glyt,人寿保险?rsbx,新材料?xcl,毅德?yd,亚美达?ymd,华宏?hh,金进?jj,氯碱?lj,曼妮芬?mnf,协顺?xs,米兰?ml,中影?zy,华润?hr,本田?bt,红土地?htd,苏宁?sn,中海?zh,丰田?ft,好街坊?hjf,华泰?ht,谱赛科?psk,齐云山?qys,菲尔雪?fex,淦龙?gl,平安保险?pabx,澳克泰?akt,八维?bw,宝泽?bz,格特拉克?gtlk,光宝力信?gblx,棕榈岛?zld,锦江?jj,东方鑫泰?dfxt,大润发?drf,伟创力?wcl";
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
					str+="<li data-key='"+vv+"'><i data-plus"+jj+">+</i><span><b>"+vv+"</b></span></li>";
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
			,jj=ww
			 ww=ww?"='"+ww+"'":""
		//var plus=$("i[data-plus"+ww+"]").length
		var jjj=jj?jj:"";
		$("#j"+jjj).val(v).focus();
		//plus==1?$("section[data-section"+ww+"]").remove():soso(v);
		$("section[data-section]").remove()
		soso(v,jj)
	})
	//点击搜索提示
	$(document).on("click","li[data-key] span",function(){
		var j=$(this).parent().attr("data-key")
		var jj=$(this).parent().parent().parent().attr("data-section");
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
			$.setCookie("tipHot9","",{domain:'.597.com'});
			var jj=$(this).attr("data-clear")
			if(jj){
				$("section[data-section='"+jj+"']").remove();
			}else{
				$("section[data-section]").remove();
			}
		}
	})
	//返回底部
	$(document).on("click",".tobot",function(){
		var tobot = $("#tobot").offset();
		$('html,body').animate({scrollTop : tobot.top},600);
	})
})




// JavaScript Document
function xg_kd(){
var xgstr="寒假@临时|暑假@临时|寒假工@寒假,临时|暑假工@暑假,临时|临时@寒假,暑假,兼职|临时工@寒假,暑假,兼职|兼职@临时,短期,晚上兼职,周末兼职|毕业生@实习|实习@毕业生,临时|会计@主办会计,财务,会计师,会计助理,成本会计,出纳|财务@会计,出纳|出纳@会计,收银,财务|收银@出纳|导购@营业员,促销|营业员@导购,促销|促销@导购,营业员|焊工@电焊|电焊@焊工|餐饮@厨师,配菜,传菜,切配,领班,收银,服务员,保洁,杂工,打杂,打荷|酒店@厨师,配菜,传菜,切配,领班,收银,服务员,保洁,杂工,打杂,打荷|汽车@汽修,钣金,喷漆,机修,贴膜,机电,汽车美容,洗车|生产@钳工,电焊,普工,车床,技工|卫生医疗@医生,护士,检验,药剂,B超|医疗@医生,护士,检验,药剂,B超|医生@外科,内科,儿科,妇科,妇产科,麻醉,口腔,眼科,精神科,牙科,骨科,临床,中医|医生@外科,内科,儿科,妇科,妇产科,麻醉,口腔,眼科,精神科,牙科,骨科,临床,中医|妇科@妇产科|妇产科@妇科|普工@搬运,车工,平车,车位,帮工,装配,杂工,车床,锅炉,注塑,装配,作业员,操作工,包装工,生产工,技工|技工@钳工,电焊,焊工,电工,钻工,磨工,铣工,机电,机修,汽修,切割,板金,喷漆,模具,数控,木工,油漆工,机长,普工|教师@英语教师,幼儿教师,语文老师,数学老师,物理老师,化学老师,音乐老师,美术老师|老师@英语教师,幼儿教师,语文老师,数学老师,物理老师,化学老师,音乐老师,美术老师|设计@美工,平面设计,室内设计,广告设计,网页设计,CAD,3D,效果图,ps,园林|幼师@幼儿老师|幼儿老师@幼师|短期@临时|短期工@临时|司机@货车司机,小车司机,叉车,客车司机|销售@销售经理,销售主管,营销,汽车销售,电话销售,手机销售,营业员,导购,销售跟单,销售助理|业务@业务经理,业务主管,营销,汽车销售,电话销售,手机销售,营业员,导购,业务跟单,业务助理|文员@前台,行政,秘书,助理,打字员,客服|行政@行政主管,行政经理,行政专员,文员,人事,助理|营销@销售,营销经理,营销主管,营销总监,电话营销|质检@品管,QC,品检|护士@护士长,护理|厨师@厨师长,赣菜,西餐,食堂厨师|保安@门卫|阿姨@煮饭阿姨,保洁,洗碗阿姨,打杂|服务员@餐饮服务员,客房服务员,楼层服务员,领班,服务生,接待员,传菜生|程序员@PHP,ASP,JAVA,软件开发,网页设计,美工|淘宝@淘宝客服,淘宝运营,淘宝美工,天猫|天猫@天猫客服,天猫美工,天猫运营,淘宝|美容@美容师,汽车美容";
var j=$("#j").val();//document.f1.j.value;
	 if(!j) j=$("#jg").val();
var st=$("#f3st").val();//document.f3.st.value;
var i;

if (j!=""){
	
	if (xgstr.indexOf(j+"@")>=0){
		
		var xgstrlist=xgstr.split("|");	
		for (i=0;i<xgstrlist.length;i++)
		{
		if (xgstrlist[i].split("@")[0]==j){return xgstrlist[i].split("@")[1]}
		}
		}
	

	}
	else if(st!="行业名称"){
	
		if (xgstr.indexOf(st+"@")>=0){
		var xgstrlist=xgstr.split("|");	
		for (i=0;i<xgstrlist.length;i++)
		{
		if (xgstrlist[i].split("@")[0]==st){return xgstrlist[i].split("@")[1]}
		}
		}
	}
}

function xgsearch(){
	
var xg_k=xg_kd();
var i;
var xg_kstr="";
if (xg_k){
var xglist=xg_k.split(",");
for (i=0;i<xglist.length;i++){
	xg_kstr=xg_kstr+"<span style='padding-right:12px;'><a href=?j="+xglist[i]+"><span class='s_pn'>"+xglist[i]+"</span></a></span>";
}
	document.getElementById("xgsearch").innerHTML="相关："+xg_kstr;

document.getElementById("xgsearch").style.display="block";
}
}
xgsearch();

$.setCookie = function (name, value, option) {
    var str = name + '=' + escape(value);
    if (option) {
        if (option.expireHours) {
            var d = new Date();
            d.setTime(d.getTime() + option.expireHours * 3600 * 1000);
            str += '; expires=' + d.toGMTString();
        }
        if (option.path) str += '; path=' + option.path; else str += '; path=/';
        if (option.domain) str += '; domain=' + option.domain;
        if (option.secure) str += '; true';
    }
    document.cookie = str;
};
//add claresun 20130312
$.getCookie = function (name, defaultValue) {
    var coObj = document.cookie, coLen = coObj.length, start = 0, end = 0;
    if (coLen > 0) {
        start = coObj.indexOf(name + "=");
        if (start != -1) {
            start = start + name.length + 1;
            end = coObj.indexOf(";", start);
            if (end == -1) end = coLen;
            return decodeURIComponent(coObj.substring(start, end));
        }
    }
    return defaultValue;
};
