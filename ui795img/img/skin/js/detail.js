/**
 * 职位详细信息
 * Last Update:2011-12-22
 */
 jobcn.pkg("jobcn.Position");
 (function(){
	 var _w=window,
	 _posList,
	 _posListLength,
	 _pageSize=20,
	 _posList_showAll=false,
	 _page=1,
	 _jcg=jobcn.Cache.get,
	 _posList_last_dept,//左边职位列表,最后显示的部门索引
	 renderPosList=function(json){
		 var _html = [], posArray = json.pagePosList, pos;
		 _html.push('<dl><dd><ul>');
		 for(var i=0;i<posArray.length;i++){
			 pos = posArray[i];
			 if(pos.needAddDept){
				 _html.push('</ul></dd></dl><dl><dt onclick="jobcn.Position.Detail.PosList.toggle(this,'+i+')" class="dept">'+pos.deptName+'</dt><dd><ul>');
			 }
			 _html.push('<li '+((i+1)==posArray.length?'class="last"':'')+' id="left_pos_'+pos.posId+'"><a onclick="jobcn.Position.Detail.Position.show(\''+ pos.posId +'\',\''+pos.comId+'\',\''+pos.posName+'\''+');return false;" href="/position/detail.xhtml?redirect=0&posId='+pos.posId+'&comId='+pos.comId+'">'+ pos.posName + '</a></li>');
		 }
		 _html.push('</ul></dd></dl>');
		 _jcg("#position_list").html(_html.join(""));
	 },
	//获取左边职位列表
	 getPosList=function (page){
		 /*
		var pageStartIdx = _posList_showAll ? 0:(page-1)*_pageSize,
		pageEndIdx =_posList_showAll ? _posListLength: page*_pageSize,
		_html = [],
		posObj;
		pageEndIdx=pageEndIdx>_posListLength?_posListLength:pageEndIdx;
		_html.push('<dl><dd><ul>');
		for(var i=pageStartIdx;i<pageEndIdx;i++){
			posObj =  _posList[i];
			if(posObj.needAddDept){
				_html.push('</ul></dd></dl><dl><dt onclick="jobcn.Position.Detail.PosList.toggle(this,'+i+')" class="dept">'+posObj.deptName+'</dt><dd><ul>');
				_posList_last_dept=i;
			}
			_html.push('<li '+((i+1)==pageEndIdx?'class="last"':'')+' id="left_pos_'+posObj.posId+'"><a onclick="jobcn.Position.Detail.Position.show(\''+ posObj.posId +'\');" href="javascript:;">'+ posObj.posName + '</a></li>');
		}
		_html.push('</ul></dd></dl>');
		return _html.join("");
		*/
		 new jobcn.ajax().get({
				url:"/position/pagePosList_action.ujson?comId="+jobcn.Position.Detail.parameters.comId+"&pageNo="+page+"&pageSize="+_pageSize,
				timeout:10000,
				timeoutFunction:function(){alert("读取超时，请重试！");},
				successFunction:function(json){
					if(json.success){
						renderPosList(json);
						jumpToPage(json.pageNo);
						//var pageFirstPosId = json.pagePosList[0].posId;
						//jobcn.Position.Detail.Position.show(pageFirstPosId);
					}else{
						alert(json.msg);
					}
				},
				errorFunction:function(html){alert("读取失败，请重试！");}
		 });
	},
	jumpToPage=function(page){
		jobcn.ui.scrollTo("#tab_btn_pos");
		//构造position_list
		//_jcg("#position_list").html(getPosList(page));
		//高亮选中职位
		var tmp=$("#left_pos_"+jobcn.Position.Detail.parameters.posId);
		tmp.addClass(tmp.hasClass("last")?"lastActive":"active");

		//分页
		//职位数大于50的显示分页，不显示全部职位按钮
		if(_posListLength > 50){
			_jcg("#pagination").pager({
				pageNumber:page,
				pageCount:Math.ceil(_posListLength/_pageSize),
				recordCount:_posListLength,
				pageSize:_pageSize,
				qpageSize:5,
				text:{
					first:"",
					pre:"",
					next:"",
					last:""
				},
				item:["first","pre","qpage","next","last"],//显示样式
				callBack: function(opt){
					getPosList(opt.pageNumber);
				}
			});
		}else{
			//职位数少于50的显示全部职位按钮
			if(_posListLength > _pageSize && !_posList_showAll){
				_jcg("#position_list_showAll").html("<a href=\"javascript:;\" onclick=\"jobcn.Position.Detail.PosList.showAll();\">显示全部职位</a>");
				_jcg("#pagination").pager({
					pageNumber:page,
					pageCount:Math.ceil(_posListLength/_pageSize),
					recordCount:_posListLength,
					pageSize:_pageSize,
					qpageSize:5,
					text:{
						first:"",
						pre:"",
						next:"",
						last:""
					},
					item:["first","pre","qpage","next","last"],//显示样式
					callBack: function(opt){
						getPosList(opt.pageNumber);
					}
				});
			}else{
				_jcg("#pagination").empty();
			}
		}
	};
	jobcn.Position.Detail={};
	jobcn.Position.Detail.Position={
	 show:function(id, comId, posName){
		 var posId=jobcn.Position.Detail.parameters.posId;
		_jcg("#company_detail").hide();
		_jcg("#company_display_detail").hide();
		_jcg("#positions_detail").show();
		_jcg("#tab_btn_pos").addClass("active");
		_jcg("#a_recommend_banner").attr("href","/search/recommend.xhtml?type=byPos&posIds="+id);
		$("div.left_menu .active,div.left_menu .lastActive").removeClass("active").removeClass("lastActive");
		var tmp=$("#left_pos_"+posId);
		tmp.removeClass(tmp.hasClass("last")?"lastActive":"active");
		tmp=$("#left_pos_"+id);
		tmp.addClass(tmp.hasClass("last")?"lastActive":"active");
		if(tmp.siblings().hasClass("active")){
			tmp.siblings().removeClass("active");			
		}
		if(!id||(id==posId&&window.location.hash.indexOf("load")==-1))return;
		_w.location.hash="posId="+(id||posId);
		document.title = posName+' - '+jobcn.Position.Detail.parameters.comName+jobcn.Position.Detail.parameters.seoTitle;
		
		//request the position detail from the remote
		_jcg("pos_detail_ajaxer",function(){return new jobcn.ajax();}).load({
			url:"/position/position_detail.uhtml?ids="+id+'&comId='+comId,
			timeout:10000,
			timeoutFunction:function(){
				alert("读取超时，请重试！");
			},
			beforeSendFunction:function(){
				jobcn.ui.loading.show({
					modal: true,
					maskConfig:{
						css:{opacity:0.55,background:"#fff"}
					}
				});
			},
			afterSendFunction:function(){
				jobcn.ui.loading.hide();
			},
			successFunction:function(html){
				if(html){
					//对查看职位的访问量统计
					//更新职位信息
					 jobcn.Position.Detail.parameters.posId=id;
					jobcn.ui.scrollTo("#positions_detail");
					_jcg("#positions_detail").html(html);
					jobcn.Position.Detail.Recommend.toggle(id);
				}
				jobcn.Analytics.TrackPageView("/visual/position/detail/"+posId);
			},
			errorFunction:function(html){
				alert("读取失败，请重试！");
				jobcn.Analytics.TrackPageView("/visual/position/detail/err/"+posId+"");
			}
		});
	 }
	};


	jobcn.Position.Detail.PosList={
		setLength:function(length){
		 //_posList=list;
		 _posListLength=length;
		},
		render:function(page){
		var parameters=jobcn.Position.Detail.parameters,
		 _posId=parameters.posId;
		jumpToPage(page);
		/*
		 if(!_posList_showAll)
		 {
			 //当显示为企业详细页面时
			if(!_posId){
				//var oo = _posList[0];
				//parameters.posId=oo.posId;
			}else{
				for(var i=0;i<_posListLength;i++){
					var oo = _posList[i];
					if(_posId == oo.posId){
						_page = Math.ceil((i+1)/_pageSize);
						break;
					}
				}
			}
			jumpToPage(_page);
		 }else{
			jumpToPage(1);
		 }
		 */
		},
		showAll:function(){
		 _posList_showAll=true;
		 _pageSize = 50;
		 //拿数据
		 getPosList(1);
		 $("#position_list_showAll").html("<a href=\"javascript:;\" onclick=\"jobcn.Position.Detail.PosList.showPager();\">分页显示职位</a>");
		},
		showPager:function(){
		 _posList_showAll=false;
		 _pageSize = 20;
		 //拿数据
		 getPosList(1);
		 //渲染分页
		 this.render(1);
		},
		toggle:function(dom,index){
			var o=$(dom);
			if(o.attr("data-open") != 'false' && o.attr("data-open") != 0)
			{
				o.next().hide();
				o.attr("data-open",false).addClass(_posList_last_dept==index?"lastClosed":"closed");
			}else{
				o.next().show();
				o.attr("data-open",true).removeClass(_posList_last_dept==index?"lastClosed":"closed");
			}
		}
	};
 })();

jobcn.Position.Detail.parameters={
	posId:null,
	comId:null,
	comName:'',
	seoTitle:'',
	set:function(json){
		return $.extend(this,json);
	}
};

jobcn.Position.Detail.baiduMap={
	createMap:function(workLocation,longitude,latitude) {
		if(workLocation=="" || longitude==""|| latitude=="") return false;
		var iconPath = "/commImage/ui/icon/mapSearchIcon.png";
    	var map = new BMap.Map("map_frame_div");//在百度地图容器中创建一个地图
    	var point = new BMap.Point(longitude || 0,latitude || 0);//定义一个中心点坐标
    	map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
		var myIcon1 = new BMap.Icon(iconPath, new BMap.Size(23, 30), {
			offset: new BMap.Size(10, 25),
		    imageOffset: new BMap.Size(0, 0-5 * 23)
		});
        var mkr = new BMap.Marker(point,{icon:myIcon1});
        map.addOverlay(mkr);
	},
	showMap:function(refId,comId,host,comName) {
		if(comName.length>40) comName = comName.substring(0,35)+"...";
		var map_view_box = new ol.box(host+"/company/account/previewMapInfo.xhtml?refId="+refId+"&comId="+comId+"&r="+Math.random(),{type:"iframe",boxid:"company_map_view",title:comName,remember:false, showButton: false, width:800,height:540});
		map_view_box.open();
	},
	showPosMap:function(posId,comId,host,posName) {
		if(posName.length>40) posName = posName.substring(0,35)+"...";
		var map_view_box = new ol.box(host+"/company/account/getPosMapInfo.xhtml?posId="+posId+"&comId="+comId+"&r="+Math.random(),{type:"iframe",boxid:"company_map_view",title:posName,remember:false, showButton: false, width:800,height:540});
		map_view_box.open();
	}
};

//应聘该职位的人还应聘
(function(){
	var _render=function(posId,json){
		var ct=$("#posRecommend_content_"+posId);
		//无记录
		if(json.length==0)
		{
			$('.tab_posRecommend').css("display","none");
			$("#posRecommend_href_"+posId).css("visibility","hidden");
			ct.html('<div class="empty">无相关推荐职位！</div>').css("visibility","hidden");
			return;
		}
		$('.tab_posRecommend').css("display","block");
		$("#posRecommend_href_"+posId).css("visibility","visible");
		ct.css("visibility","visible");
		var html=[],pos;
		html.push('<table border="0" cellspacing="0" cellpadding="0"><thead><tr><th class="checkbox">&nbsp;</th><th>应聘职位</th><th>公司名称</th><th class="jobLocation">工作地点</th><th class="postDate">更新时间</th><th class="apply">应聘</th></tr></thead>');
		for(var i=0;i<json.length;i++)
		{
			pos = json[i];
			html.push("<tr>");
			html.push("<td><input type=\"checkbox\" name='ids' data-value='"+pos.posId+"' value='"+pos.posId+"'></td>")
			html.push("<td><a style=\"width:160px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden; display:block;\" href=\"/position/detail.xhtml?posId="+pos.posId+"&comId="+pos.comId+"&source=detail/recommend\" target=\"_blank\" title=\""+pos.posName+"\">"+pos.posName+"</a></td>");
			html.push("<td class=\"name\"><a style=\"width:230px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden; display:block\" href=\"/position/company.xhtml?comId="+pos.comId+"&source=detail/recommend\" target=\"_blank\" title=\""+pos.comName+"\">"+pos.comName+"</a></td>");
			html.push("<td title=\""+pos.jobLocation.replace(/[;]$/i,'')+"\"><span style=\"width:90px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden; display:block;\">"+pos.jobLocation.replace(/[;]$/i,'')+"</span></td>");
			html.push("<td title=\""+pos.postDate+"\">"+pos.postDateDesc+"</td>");
			html.push("<td class='apply'><a href='javascript:;' onclick=\"jobcn.Person.Position.apply('"+pos.posId+"');\" title='应聘该职位'></a></td>");
			html.push("</tr>");
		}		
		html.push('</table>')
		var NewLine = '\n';
		var temp = '';
			temp+='<div class="operateBar">'+NewLine;
			temp+='			<div class="o_top"></div>'+NewLine;
			temp+='			<div class="o_content">'+NewLine;
			temp+='				<div class="cl"></div>'+NewLine;
			temp+='				<div class="cc">'+NewLine;
			temp+='					<ul>'+NewLine;
			temp+='						<li class="fl o_select">'+NewLine;
			temp+='							<input type="checkbox" title="全选" class="vam" id="result_action_checkAll" onclick="$(\'#posRecommend_content_'+posId+' table input[name=\\\'ids\\\']\').check(this.checked)" autocomplete="off" />'+NewLine;
			temp+='							<label for="result_action_checkAll">全选</label>'+NewLine;
			temp+='						</li>'+NewLine;
			temp+='						<li class="fl o_btn">'+NewLine;
			temp+='							<a href="javascript:;" id="posRecommend_fav" onclick="jobcn.Person.Position.applyM($(\'#posRecommend_content_'+posId+' table input:checked\'))" class="favourite">应聘</a>'+NewLine;
			temp+='							<a href="javascript:;" id="posRecommend_apply" onclick="jobcn.Person.Position.addMyFavouriteM($(\'#posRecommend_content_'+posId+' table input:checked\'))" class="apply">收藏</a>'+NewLine;
			temp+='						</li>'+NewLine;
			temp+='					</ul>'+NewLine;
			temp+='				</div>'+NewLine;
			temp+='				<div class="cr"></div>'+NewLine;
			temp+='			</div>'+NewLine;
			temp+='		</div>'+NewLine;
		html.push(temp)
		ct.html(html.join("")).attr("data-init","true");
		jobcn.ui.alternation(ct,{row:"tr",	hover:"#FDFDE6",colors:["#fff","#F5F8FA"]});
	};

	jobcn.Position.Detail.Recommend={
		toggle:function(posId,dom,idType){
			if(jobcn.Position.Detail.parameters.isShowPosRecommend === "1"){
				$('.tab_posRecommend').remove();
				return;//如果企业定制专业则不显示智能推荐
			}
			var d=$(dom||"#posRecommend_href_"+posId),
			o=$("#posRecommend_content_"+posId);
			if("false"!=o.attr("data-open"))
			{
				d.removeClass("active");
				o.hide().attr("data-open","false");
			}else{
				d.addClass("active");
				o.show().attr("data-open","true");
			}
			if("true"!=o.attr("data-init"))
			{
				this.get(posId,idType);
			}
		},
		get:function(posId,idType){
			if(!posId)return;
			idType = idType||1;
			new jobcn.ajax().get({
				url:"/position/position_recommend.ujson?ids="+posId+"&idType="+idType,
				timeout:10000,
				timeoutFunction:function(){
					//alert("读取超时，请重试！");
					$('.tab_posRecommend').remove();
				},
				successFunction:function(json){
					if(json.success)
					{
						for(var k in json){
							if('success' != k){
								_render(k,json[k]);
								$(document).trigger('POS_RECOMMEND_LOAD');
							}
						}
					}else{
						alert(json.msg);
					}
				},
				errorFunction:function(html){
					alert("读取失败，请重试！");
				}
			});
		}
	}
})();

var  ____ComIntroTab=true;
/**
 *JOBCNX-1357 企业招聘页面（视频/图片展示方案）
 * 额外将图片的信息处理成为轮换插件。
 * @param {boolean} 是否显示企业简介的tab。
 * 修正非企业简介tab的刷新时候，点击企业简介控件无法出现。
 * */
jobcn.Position.Detail.ComImgSilder=function(IsTabOfComIntro){
    ____ComIntroTab=IsTabOfComIntro;
    if(!____ComIntroTab){
        return;
    }

    if($("#com_pic_slider li").length>1){

        //--添加一个延时执行，
        seajs.use("ui.widget.slider",function(slider){
            $("#com_pic_slider").css("display","block");
            slider('#com_pic_slider',{pager:true,controls:false,auto:true,mode:'vertical',pause:4000,autoDelay:1000});


            // slider('#com_pic_slider',{pager:true,controls:false,auto:true,mode:'vertical',pause:4000,autoDelay:1000});
        });
    }
    else if($("#com_pic_slider li").length==1){
        $("#com_pic_slider").css("display","block");

    }
    else{
        $("#com_pic_slider").css("height","0px");
    }
    //点击图片进入形象展示页面
    $("#com_pic_slider li img").each(function(){
        $(this).css("cursor","pointer");
        $(this).click(function(){
            $("#tab_btn_com_display").trigger("click");
        });
    });
}
jobcn.Position.Detail.Company={
	show:function(){
		jobcn.Analytics.TrackPageView("/visual/position/company/"+jobcn.Position.Detail.parameters.comId);
		var _jcg=jobcn.Cache.get;
		_jcg("#company_detail").show();
		_jcg("#positions_detail").hide();
		_jcg("#company_display_detail").hide();
		$("div.left_menu .active,div.left_menu .lastActive").removeClass("active").removeClass("lastActive");
		_jcg("#tab_btn_com").addClass("active");
		window.location.hash="comId="+jobcn.Position.Detail.parameters.comId;
		document.title = jobcn.Position.Detail.parameters.comName+jobcn.Position.Detail.parameters.seoTitle;
        /**
         *JOBCNX-1357 企业招聘页面（视频/图片展示方案）
         * 更新：当页面一开始是非企业简介，点击企业简介以后图片轮换插件出错的问题。
         * */
        if(!____ComIntroTab){
           $(document).ready(function(){
               jobcn.Position.Detail.ComImgSilder(true);
           });
        }
 	}
	,
	load:function(url,dom){
		new jobcn.ajax().load({
			url:url,
			timeout:10000,
			timeoutFunction:function(){
				alert("读取超时，请重试！");
			},
			successFunction:function(html){
				$("#company_detail").hide();
				$("#company_display_detail").hide();
				$("#positions_detail").html(html).show();
				$("div.left_menu .active,div.left_menu .lastActive").removeClass("active").removeClass("lastActive");
				$(dom).addClass("active");
				window.location.hash="load="+url;
			},
			errorFunction:function(html){
				alert("读取失败，请重试！");
			}
		});
	},
	viewComImages:function(comId, refId){
		if(comId == '' || parseInt(comId) == 0){
			return;
		}
		var url = "/position/view_com_images.xhtml?comId="+comId+"&refId="+refId;
		jobcn.Cache.get("view-com-images-box", function () {
			return new ol.box(null, {
				boxid: "view-com-images",
				type:"ajax",
				width:680,
				height:480,
				title: "查看公司图片",
				showButton:false,
				modal:true,
				oncancel: function (box) {box.close();},
				onok: function (box) {box.close();}
			});
		}).open(url);
	}
};

jobcn.Position.Detail.ComDisplay={
		show:function(){
			jobcn.Analytics.TrackPageView("/visual/position/company/display/"+jobcn.Position.Detail.parameters.comId);
			var _jcg=jobcn.Cache.get;
			_jcg("#company_display_detail").show();
			_jcg("#company_detail").hide();
			_jcg("#positions_detail").hide();
			$("div.left_menu .active,div.left_menu .lastActive").removeClass("active").removeClass("lastActive");
			_jcg("#tab_btn_com_display").addClass("active");
			window.location.hash="comId="+jobcn.Position.Detail.parameters.comId+",isComDisplay";
			document.title = jobcn.Position.Detail.parameters.comName+jobcn.Position.Detail.parameters.seoTitle;
		},
		playVideo:function(comId, refId){
			if(comId == '' || parseInt(comId) == 0){
				return;
			}
			var url = "/position/view_com_video.xhtml?comId="+comId+"&refId="+refId;
			jobcn.Cache.get("view-com-video-box", function () {
				return new ol.box(null, {
					boxid: "view-com-video",
					type:"iframe",
					width:520,
					height:430,
					title: "查看公司视频",
					showButton:false,
					modal:true,
					oncancel: function (box) {box.close();},
					onok: function (box) {box.close();}
				});
			}).open(url);
		}
};

//数据统计
(function(d){
	var _t=jobcn.Analytics.Track,
	_t2=function(url){
		var img = new Image();
		img.src=url;
		img=null;
	},
	_sourceMap={
	},
	_methodsName=[];
	d.Log={
		source:function(val){
			// if(val)_t(["/position/detail/source",_sourceMap[val]||val]);
		},
		//记录已查看职位
		viewed:function(posIds){
			_t2("/position/viewed_action.uhtml?posIds="+posIds);
		}
	};
	//自动构建
	for(var i=0;i<_methodsName.length;i++)
	{
		(function(n){
			jobcn.pkg(p.Log,n,function(val){
				_t(["/position/detail",n.replace(".","/"),val]);
			});
		})(_methodsName[i]);
	};
})(jobcn.Position.Detail);
/**
 * JOBCNX-1357 额外需求：点击上面的图标可以展示企业形象
 * */
(function(){
    $(document).ready(function(){
        $("#sbtn_goto_intro").click(function(){
            $("#tab_btn_com_display").trigger("click");
        });
        $("#sbtn_goto_intro2").click(function(){
            $("#tab_btn_com_display").trigger("click");
        });
    });
})();