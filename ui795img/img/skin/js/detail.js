/**
 * ְλ��ϸ��Ϣ
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
	 _posList_last_dept,//���ְλ�б�,�����ʾ�Ĳ�������
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
	//��ȡ���ְλ�б�
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
				timeoutFunction:function(){alert("��ȡ��ʱ�������ԣ�");},
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
				errorFunction:function(html){alert("��ȡʧ�ܣ������ԣ�");}
		 });
	},
	jumpToPage=function(page){
		jobcn.ui.scrollTo("#tab_btn_pos");
		//����position_list
		//_jcg("#position_list").html(getPosList(page));
		//����ѡ��ְλ
		var tmp=$("#left_pos_"+jobcn.Position.Detail.parameters.posId);
		tmp.addClass(tmp.hasClass("last")?"lastActive":"active");

		//��ҳ
		//ְλ������50����ʾ��ҳ������ʾȫ��ְλ��ť
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
				item:["first","pre","qpage","next","last"],//��ʾ��ʽ
				callBack: function(opt){
					getPosList(opt.pageNumber);
				}
			});
		}else{
			//ְλ������50����ʾȫ��ְλ��ť
			if(_posListLength > _pageSize && !_posList_showAll){
				_jcg("#position_list_showAll").html("<a href=\"javascript:;\" onclick=\"jobcn.Position.Detail.PosList.showAll();\">��ʾȫ��ְλ</a>");
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
					item:["first","pre","qpage","next","last"],//��ʾ��ʽ
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
				alert("��ȡ��ʱ�������ԣ�");
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
					//�Բ鿴ְλ�ķ�����ͳ��
					//����ְλ��Ϣ
					 jobcn.Position.Detail.parameters.posId=id;
					jobcn.ui.scrollTo("#positions_detail");
					_jcg("#positions_detail").html(html);
					jobcn.Position.Detail.Recommend.toggle(id);
				}
				jobcn.Analytics.TrackPageView("/visual/position/detail/"+posId);
			},
			errorFunction:function(html){
				alert("��ȡʧ�ܣ������ԣ�");
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
			 //����ʾΪ��ҵ��ϸҳ��ʱ
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
		 //������
		 getPosList(1);
		 $("#position_list_showAll").html("<a href=\"javascript:;\" onclick=\"jobcn.Position.Detail.PosList.showPager();\">��ҳ��ʾְλ</a>");
		},
		showPager:function(){
		 _posList_showAll=false;
		 _pageSize = 20;
		 //������
		 getPosList(1);
		 //��Ⱦ��ҳ
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
    	var map = new BMap.Map("map_frame_div");//�ڰٶȵ�ͼ�����д���һ����ͼ
    	var point = new BMap.Point(longitude || 0,latitude || 0);//����һ�����ĵ�����
    	map.centerAndZoom(point,15);//�趨��ͼ�����ĵ�����겢����ͼ��ʾ�ڵ�ͼ������
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

//ӦƸ��ְλ���˻�ӦƸ
(function(){
	var _render=function(posId,json){
		var ct=$("#posRecommend_content_"+posId);
		//�޼�¼
		if(json.length==0)
		{
			$('.tab_posRecommend').css("display","none");
			$("#posRecommend_href_"+posId).css("visibility","hidden");
			ct.html('<div class="empty">������Ƽ�ְλ��</div>').css("visibility","hidden");
			return;
		}
		$('.tab_posRecommend').css("display","block");
		$("#posRecommend_href_"+posId).css("visibility","visible");
		ct.css("visibility","visible");
		var html=[],pos;
		html.push('<table border="0" cellspacing="0" cellpadding="0"><thead><tr><th class="checkbox">&nbsp;</th><th>ӦƸְλ</th><th>��˾����</th><th class="jobLocation">�����ص�</th><th class="postDate">����ʱ��</th><th class="apply">ӦƸ</th></tr></thead>');
		for(var i=0;i<json.length;i++)
		{
			pos = json[i];
			html.push("<tr>");
			html.push("<td><input type=\"checkbox\" name='ids' data-value='"+pos.posId+"' value='"+pos.posId+"'></td>")
			html.push("<td><a style=\"width:160px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden; display:block;\" href=\"/position/detail.xhtml?posId="+pos.posId+"&comId="+pos.comId+"&source=detail/recommend\" target=\"_blank\" title=\""+pos.posName+"\">"+pos.posName+"</a></td>");
			html.push("<td class=\"name\"><a style=\"width:230px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden; display:block\" href=\"/position/company.xhtml?comId="+pos.comId+"&source=detail/recommend\" target=\"_blank\" title=\""+pos.comName+"\">"+pos.comName+"</a></td>");
			html.push("<td title=\""+pos.jobLocation.replace(/[;]$/i,'')+"\"><span style=\"width:90px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden; display:block;\">"+pos.jobLocation.replace(/[;]$/i,'')+"</span></td>");
			html.push("<td title=\""+pos.postDate+"\">"+pos.postDateDesc+"</td>");
			html.push("<td class='apply'><a href='javascript:;' onclick=\"jobcn.Person.Position.apply('"+pos.posId+"');\" title='ӦƸ��ְλ'></a></td>");
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
			temp+='							<input type="checkbox" title="ȫѡ" class="vam" id="result_action_checkAll" onclick="$(\'#posRecommend_content_'+posId+' table input[name=\\\'ids\\\']\').check(this.checked)" autocomplete="off" />'+NewLine;
			temp+='							<label for="result_action_checkAll">ȫѡ</label>'+NewLine;
			temp+='						</li>'+NewLine;
			temp+='						<li class="fl o_btn">'+NewLine;
			temp+='							<a href="javascript:;" id="posRecommend_fav" onclick="jobcn.Person.Position.applyM($(\'#posRecommend_content_'+posId+' table input:checked\'))" class="favourite">ӦƸ</a>'+NewLine;
			temp+='							<a href="javascript:;" id="posRecommend_apply" onclick="jobcn.Person.Position.addMyFavouriteM($(\'#posRecommend_content_'+posId+' table input:checked\'))" class="apply">�ղ�</a>'+NewLine;
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
				return;//�����ҵ����רҵ����ʾ�����Ƽ�
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
					//alert("��ȡ��ʱ�������ԣ�");
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
					alert("��ȡʧ�ܣ������ԣ�");
				}
			});
		}
	}
})();

var  ____ComIntroTab=true;
/**
 *JOBCNX-1357 ��ҵ��Ƹҳ�棨��Ƶ/ͼƬչʾ������
 * ���⽫ͼƬ����Ϣ�����Ϊ�ֻ������
 * @param {boolean} �Ƿ���ʾ��ҵ����tab��
 * ��������ҵ���tab��ˢ��ʱ�򣬵����ҵ���ؼ��޷����֡�
 * */
jobcn.Position.Detail.ComImgSilder=function(IsTabOfComIntro){
    ____ComIntroTab=IsTabOfComIntro;
    if(!____ComIntroTab){
        return;
    }

    if($("#com_pic_slider li").length>1){

        //--���һ����ʱִ�У�
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
    //���ͼƬ��������չʾҳ��
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
         *JOBCNX-1357 ��ҵ��Ƹҳ�棨��Ƶ/ͼƬչʾ������
         * ���£���ҳ��һ��ʼ�Ƿ���ҵ��飬�����ҵ����Ժ�ͼƬ�ֻ������������⡣
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
				alert("��ȡ��ʱ�������ԣ�");
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
				alert("��ȡʧ�ܣ������ԣ�");
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
				title: "�鿴��˾ͼƬ",
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
					title: "�鿴��˾��Ƶ",
					showButton:false,
					modal:true,
					oncancel: function (box) {box.close();},
					onok: function (box) {box.close();}
				});
			}).open(url);
		}
};

//����ͳ��
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
		//��¼�Ѳ鿴ְλ
		viewed:function(posIds){
			_t2("/position/viewed_action.uhtml?posIds="+posIds);
		}
	};
	//�Զ�����
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
 * JOBCNX-1357 �������󣺵�������ͼ�����չʾ��ҵ����
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