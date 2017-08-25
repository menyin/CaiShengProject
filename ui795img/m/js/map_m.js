var map = null;
var point = null;
var cpt = null;
var info = null;
var route = null;
var near = null;
var nlst = new Array();
var $result = null;

var P = {
	map			: function(){
		P.hide();
		M.clear();
		cpt.show();
		info.show(1);
	},
	traffic		: function(){
		M.clear();
		if(!arguments[0]){
			$('#ipt1').removeAttr('disabled').val('');
			$('#ipt2').attr('disabled','disabled').val(G.address);
		}else{
			$('#ipt1').attr('disabled','disabled').val(G.address);
			$('#ipt2').removeAttr('disabled').val('');
		}
		P.show('traffic');
	},
	getTraffic	: function(){
		if($('#ipt1').val() == '' || $('#ipt2').val() == ''){
			pop('请输入查询位置！',1);
		}else{
			if($('#ipt1').attr('disabled') == 'disabled'){
				M.find($('#ipt2').val(),G.province,2);
			}else{
				M.find($('#ipt1').val(),G.province,1);
			}
		}
	},
	line		: function(n){
		if($('.ru_'+n).height() == 0){
			$('.ru').css({'height':'0','overflow':'hidden'});
			$('.ru_'+n).css({'height':'auto','overflow':'auto'});
		}else{
			$('.ru_'+n).css({'height':'0','overflow':'hidden'});
		}
	},
	draw		: function(fun){
		for(var i=0;i<nlst.length;i++){
			nlst[i].remove();
		}
		cpt.hide();
		info.hide();
		P.show('map');
		$('#tBut').show();
	},
	show		: function(id){
		P.hide();
		document.getElementById(id).style.display = 'block';
	},
	hide		: function(){
		$('#tBut,#traffic,#roud,#routs').hide();
	}
};

var M = {
	ini			: function(i){
		if(G.point){
			var pt = G.point.split(',');
			point = new BMap.Point(pt[0],pt[1]);
			M.setmap(i);
		}else{
			var geo = new BMap.Geocoder();
			geo.getPoint(G.address,function(result){
				if(result){
					point = result;
					M.setmap(i);
				}else{
					pop('无法解析地址',1,'返回','确定','window.history.back()');
				}
			},G.province);
		}

	},
	setmap		: function(i){
		map = new BMap.Map("map",{enableMapClick:false});
		map.centerAndZoom(point,15);
		map.disableDoubleClickZoom();
		map.disablePinchToZoom();
		map.addControl(new BMap.ScaleControl({offset:new BMap.Size(10,30)}));
		map.addControl(M.control.locate());
		map.addControl(M.control.zoom());
		
		cpt = M.overlay.point(point,1);
		map.addOverlay(cpt);
		
		info = M.overlay.info(point,1);
		map.addOverlay(info);
		info.display();
		
		switch(i){
			case 1 : 
				$('nav span').eq(0).addClass('on');
				P.show('map');
				break;
			case 2 : 
				$('nav span').eq(1).addClass('on');
				P.traffic();
				break;
			case 3 : 
				$('nav .mk').addClass('on');
				$('#bar em').eq(0).addClass('on');
				M.nearsearch('公交站');
				break;
			default : 
				pop('参数错误，无法定位',1,'返回','确定','window.history.back()');
				break;
		};
	},
	setPoint	: function(from){
		if(G.point && point == null){
			var pt = G.point.split(',');
			point = new BMap.Point(pt[0],pt[1]);
		}else if(G.address && point == null){
			var geo = new BMap.Geocoder();
			geo.getPoint(G.address,function(result){
				if(result){
					point = result;
					switch(from){
						case 'ini' :
							M.ini();
							break;
					};
				}else{
					pop('解析地址错误',1);
				}
			},G.province);
		}
	},
	find		: function(key,location,type){
		var ls = new BMap.LocalSearch(location);
		ls.setPageCapacity(10);
		ls.setSearchCompleteCallback(function(result){
			var cn = result.getCurrentNumPois();
			if(cn){
				var $obj = null;
				
				$('#roud p').removeClass('ck');
				$('#roud .lys').html('').hide();
				
				if(type == 1){
					$('#roud .rs span').html(key);
					$('#roud .re span').html(G.address);
					$('#roud .re').addClass('ck');
					$obj = $('#roud .lys-1');
				}else{
					$('#roud .rs span').html(G.address);
					$('#roud .re span').html(key);
					$('#roud .rs').addClass('ck');
					$obj = $('#roud .lys-2');
				}
				
				
				var htm = '';
				var pn = result.getNumPages();
				var pi = result.getPageIndex();
				
				for(var i=0;i<cn;i++){
					var obj = result.getPoi(i);
					console.dir(obj)
					htm += "<section>";
					htm += "<h2 class='at'>"+obj.title+"</h2>";
					htm += "<h3 class='at'>"+obj.address+"</h3>";
					htm += "<span onclick=M.getTraffic('"+obj.title+"','"+obj.point.lng+"|"+obj.point.lat+"',"+type+")>选择地点</span>";
					htm += "</section>";
				}
				if(pn > 1){
					htm += "<p class='page'>";
					if(pi > 0){
						htm += "<font onclick='$result.gotoPage("+(pi-1)+")' class='on'>上一页</font>";
					}else{
						htm += "<font>上一页</font>";
					}
					if((pi+1) < pn){
						htm += "<font onclick='$result.gotoPage("+(pi+1)+")' class='on'>下一页</font>";
					}else{
						htm += "<font>下一页</font>";
					}
					htm += "</p>";
				}
				
				$obj.html(htm).show();
				P.show('roud');
			}else{
				pop('没有找到查询地点',1);
			}
			$result = ls;
		});
		ls.search(key);
	},
	getTraffic	: function(name,pt,type){
		var point2 = pt.split('|');
		point2 = new BMap.Point(point2[0],point2[1]);
		route = new BMap.TransitRoute(G.province,{renderOptions:{map:map,panel:result}});
		route.setPageCapacity(5);
		if(type == 1){
			route.search(point2,point);
		}else{
			route.search(point,point2);
		}
		
		route.setResultsHtmlSetCallback(function(){
			$('#result tr').each(function(i){
				var fun = $(this).attr('onclick');
				$('#routs .i_map').eq(i).attr('onclick','P.draw('+fun+')');
			});
			P.show('routs');
		});
		
		route.setSearchCompleteCallback(function(result){
			var n = result.getNumPlans();
			if(n){
				var htm = '';
				if(type == 1){
					htm += "<p class='st at'>"+name+"</p>";
					htm += "<p class='ed at'>"+G.address+"</p>";
				}else{
					htm += "<p class='st at'>"+G.address+"</p>";
					htm += "<p class='ed at'>"+name+"</p>";
				}
				
				htm += "<p class='title'>为您查询到以下路线</p>";
				for(var i=0;i<n;i++){
					var ht = new Array();
					var pn = result.getPlan(i);
					console.dir(pn)
					var l = pn.getNumLines();
					

					for(var j=0;j<pn.getNumLines();j++){
						ht[j] = new Array();
						var tp = pn.getLine(j);
						var title = tp.title;
						var z = title.indexOf("(");
						if(z>0){
							title = title.substring(0,z);
						}
						
						ht[j][0] = title;
						ht[j][1] = tp.type;
						ht[j][2] = tp.getGetOnStop().title;
						ht[j][3] = tp.getGetOffStop().title;
					}
					
					htm += "<div onclick='P.line("+i+")'>";
					htm += "<em>"+(i+1)+"</em>";
					htm += "<h2 class='at'>";
					for(var j=0;j<l;j++){
						if((j+1) < l){
							htm += ht[j][0]+'&gt;';
						}else{
							htm += ht[j][0];
						}
					}
					if(!l){
						htm += "步行";
					}
					htm += "</h2>";
					htm += "<h3 class='at'>";
					htm += "约"+pn.getDuration()+"/"+pn.getDistance();
					htm += "</h3>";
					htm += "<i class='i_map'></i>";
					htm += "</div>";
					htm += "<ul class='ru ru_"+i+"'>";
					for(var j=0;j<l;j++){
						if(ht[j][1] == 0){
							htm += "<li class='i_bus'>";
						}else if(ht[j][1] == 1){
							htm += "<li class='i_subway'>";
						}else{
							htm += "<li class='i_walk'>";
						}
						htm += "<strong>"+ht[j][2]+"</strong>乘坐<strong>"+ht[j][0]+"</strong>,在<strong>"+ht[j][3]+"</strong>下车";
						htm += "</li>";
					}
					htm +="<li class='i_walk'>步行至终点</li>";
					htm += "</ul>";
				}
				$('#routs').html(htm);
			}else{
				pop('没有查询到交通路线',1);
			}
		});
		
		$traffic = route;		
	},
	nearsearch	: function(name){
		if(!(name == '公交站' || name == '美食' || name == '地铁站')){
			return 0;
		}else{
			if(route != null){
				route.clearResults();			
			}
			for(var i=0;i<nlst.length;i++){
				nlst[i].remove();
			}
			info.display();
			map.centerAndZoom(point,15);
			
			P.hide();
			near = new BMap.LocalSearch(point);
			near.setPageCapacity(10);
			
			var area = M.bounds(point,1);
			near.setSearchCompleteCallback(function(result){
				var cn = result.getCurrentNumPois();
				if(cn){
					cpt.show();
					//info.hide();
					$('nav span').eq(2).removeClass('on');
					$('#bar').hide();
					
					for(var i=0;i<cn;i++){
						var pn = result.getPoi(i);
						var pt = M.overlay.marker(pn.point,pn.title,pn.address);
						nlst.push(pt);
						map.addOverlay(pt);
					}
				}else{
					pop("附近没有'"+name+"'",1);
				}
			});
			near.searchInBounds(name,area);
		}
	},
	bounds		: function(point,size){
		size = size*0.01;
		var p1 = {};
		var p2 = {};
		p1.lat = point.lat - size;
		p1.lng = point.lng - size;
		p2.lat = point.lat + size;
		p2.lng = point.lng + size;
		p1 = new BMap.Point(p1.lng,p1.lat);
		p2 = new BMap.Point(p2.lng,p2.lat);
		
		return new BMap.Bounds(p1,p2);
	},
	overlay		: {
		point	: function(center,type){
			function myOverlay(center){
				this._center = center;
				this._width = 24;
				this._height = 30;
			}
			myOverlay.prototype = new BMap.Overlay();
			myOverlay.prototype.initialize = function(map){
				this._map = map;
				var a = document.createElement("div");
				if(type == 1){
					a.className = 'i_company';
				}else{
					a.className = 'i_mark';
				}
				
				a.ontouchstart = function(e){
					x1=0,y1=0;
					x1 = e.changedTouches[0].pageX;
					y1 = e.changedTouches[0].pageY;
				}
				a.ontouchend = function(e){
					x2 = e.changedTouches[0].pageX;
					y2 = e.changedTouches[0].pageY;
					if((x1==x2)&&(y1==y2)&&(type==1)){
						info.show(1);
					}
				};
				
				map.getPanes().markerPane.appendChild(a);
				this._div = a;
				return a;
			};
			myOverlay.prototype.draw = function(){
				var position = this._map.pointToOverlayPixel(this._center);    
				this._div.style.left = position.x - this._width / 2 + "px";
				this._div.style.top = position.y - this._height / 2 - 15 + "px";    
			};
			myOverlay.prototype.show = function(){
				if(this._div){
					this._div.style.display = '';
				}
			};
			myOverlay.prototype.hide = function(){
				if(this._div){
					this._div.style.display = 'none';
				}
			};
			return new myOverlay(center);
		},
		marker	: function(center,title,dt){
			function myOverlay(center){
				this._center = center;
				this._width = 24;
				this._height = 30;
			}
			myOverlay.prototype = new BMap.Overlay();
			myOverlay.prototype.initialize = function(map){
				this._map = map;
				var a = document.createElement("div");
				a.className = 'i_mark';
				
				a.ontouchstart = function(e){
					x1=0,y1=0;
					x1 = e.changedTouches[0].pageX;
					y1 = e.changedTouches[0].pageY;
				}
				a.ontouchend = function(e){
					x2 = e.changedTouches[0].pageX;
					y2 = e.changedTouches[0].pageY;
					if((x1==x2)&&(y1==y2)){
						info.msg(center,title,dt);
					}
				};
				
				map.getPanes().markerPane.appendChild(a);
				this._div = a;
				return a;
			};
			myOverlay.prototype.draw = function(){
				var position = this._map.pointToOverlayPixel(this._center);    
				this._div.style.left = position.x - this._width / 2 + "px";
				this._div.style.top = position.y - this._height / 2 - 15 + "px";    
			};
			myOverlay.prototype.remove = function(){
				$(this._div).remove();
			};
			return new myOverlay(center);
		},
		info	: function(center,type,msg){
			function myOverlay(center){
				this._center = center;
				this._width = 280;
				this._height = 0;
				this._type = type;
			}
			myOverlay.prototype = new BMap.Overlay();
			myOverlay.prototype.initialize = function(map){
				this._map = map;
				var a = document.createElement("div");
				var b = document.createElement("h1");
				var c = document.createElement("h2");
				var d = document.createElement("i");
				var e = document.createElement("font");
				
				this._title = b;
				this._address = c;
				
				a.id = 'info';
				a.appendChild(b);
				a.appendChild(c);
				a.appendChild(d);
				a.appendChild(e);
				
				if(this._type == 1){
					b.appendChild(document.createTextNode(G.name));
					c.appendChild(document.createTextNode(G.address));
					
					var p = document.createElement("p");
					var p1 = document.createElement("span");
					var p2 = document.createElement("span");
					var p3 = document.createElement("span");
					p.appendChild(p1);
					p.appendChild(p2);
					p.appendChild(p3);
					p1.appendChild(document.createTextNode('在附近找'));
					p2.appendChild(document.createTextNode('到这里去'));
					p3.appendChild(document.createTextNode('从这里出发'));
					
					a.appendChild(p);
					
					p1.ontouchstart = function(e){
						x1=0,y1=0;
						x1 = e.changedTouches[0].pageX;
						y1 = e.changedTouches[0].pageY;
					}
					p1.ontouchend = function(e){
						x2 = e.changedTouches[0].pageX;
						y2 = e.changedTouches[0].pageY;
						if((x1==x2)&&(y1==y2)){
							$('nav span').eq(2).trigger('click');
						}
					};
					p2.ontouchstart = function(e){
						x1=0,y1=0;
						x1 = e.changedTouches[0].pageX;
						y1 = e.changedTouches[0].pageY;
					}
					p2.ontouchend = function(e){
						x2 = e.changedTouches[0].pageX;
						y2 = e.changedTouches[0].pageY;
						if((x1==x2)&&(y1==y2)){
							$('nav span').eq(1).trigger('click');
						}
					};
					p3.ontouchstart = function(e){
						x1=0,y1=0;
						x1 = e.changedTouches[0].pageX;
						y1 = e.changedTouches[0].pageY;
					}
					p3.ontouchend = function(e){
						x2 = e.changedTouches[0].pageX;
						y2 = e.changedTouches[0].pageY;
						if((x1==x2)&&(y1==y2)){
							P.traffic(1);
						}
					};
				}
				d.ontouchstart = function(e){
					x1=0,y1=0;
					x1 = e.changedTouches[0].pageX;
					y1 = e.changedTouches[0].pageY;
				}
				d.ontouchend = function(e){
					x2 = e.changedTouches[0].pageX;
					y2 = e.changedTouches[0].pageY;
					if((x1==x2)&&(y1==y2)){
						info.hide()
					}
				};
												
				map.getPanes().markerPane.appendChild(a);
				this._div = a;
				return a;
			};
			myOverlay.prototype.height = 0;
			myOverlay.prototype.draw = function(){
				this._height = this._div.clientHeight == 0 ? info.height : this._div.clientHeight;
				var position = map.pointToOverlayPixel(this._center);
				
				this._div.style.left = position.x - this._width / 2 + 1 + "px";
				var top = position.y - this._height - 30;
				
				this._div.style.top = top + "px";
				if(info.height == 0){
					info.height =  this._div.clientHeight;
				}
			};
			myOverlay.prototype.show = function(type){
				if(type == 1){
					this._center = point;
					this._title.innerHTML = G.name;
					this._address.innerHTML = G.address;
					$('#info p').show();
					this.display();
					map.centerAndZoom(point,15);
				}
			};
			myOverlay.prototype.display = function(){
				if(this._div){
					this._div.style.zIndex = 4;
					this._div.style.opacity = 1;
				}
			};
			myOverlay.prototype.hide = function(){
				if(this._div){
					this._div.style.zIndex = 1;
					this._div.style.opacity = 0;
				}
			};
			myOverlay.prototype.msg = function(pt,title,info){
				this.hide();
				
				this._center = pt;
				$('#info h1').html(title);
				$('#info h2').html(info);
				$('#info p').hide();
				
				map.panTo(pt);
				var that = this;
				setTimeout(function(){that.display()},500)			
			};
			return new myOverlay(center);
		}
	},
	clear		: function(){
		if(route != null){
			route.clearResults();			
		}
		for(var i=0;i<nlst.length;i++){
			nlst[i].remove();
		}
		cpt.hide();
		//info.hide();
	},
	control		: {
		locate	: function(){
			function myControl(){
				this.defaultAnchor = BMAP_ANCHOR_BOTTOM_LEFT;    
    			this.defaultOffset = new BMap.Size(10, 60);
			}
			myControl.prototype = new BMap.Control();
			myControl.prototype.initialize = function(map){
				var a = document.createElement("div");
				a.id = 'locate';
				
				a.onclick = function(){
					M.clear();
					P.hide();
					cpt.show();
					info.show(1);
				};
				
				map.getContainer().appendChild(a);
				
				return a;
			};
			return new myControl();
		},
		zoom	: function(){
			function myControl(){
				this.defaultAnchor = BMAP_ANCHOR_BOTTOM_RIGHT;    
    			this.defaultOffset = new BMap.Size(10,60);
			}
			myControl.prototype = new BMap.Control();
			myControl.prototype.initialize = function(map){
				var a = document.createElement("div");
				var b = document.createElement("div");
				var c = document.createElement("div");
				b.appendChild(document.createTextNode("+"));				
				c.appendChild(document.createTextNode("-"));
				a.id = 'zoom';
				
				a.appendChild(b);
				a.appendChild(c);
				
				b.style.borderBottom = '1px solid #CCC';
				
				b.onclick = function(e){map.setZoom(map.getZoom()+1)};
				c.onclick = function(e){map.setZoom(map.getZoom()-1)};
			
				map.getContainer().appendChild(a);
			
				return a;
			};
			return new myControl();
		}
	}
};

/*
 * 头部导航页面交互
 */
$('nav span').click(function(){
	$(this).addClass('on').siblings().removeClass('on');
	if($(this).hasClass('mk')){
		$('#bar').show();
	}else{
		$('#bar').hide();
		$('#bar em').removeClass('on');
	}
});

$('#bar em').click(function(){
	$(this).addClass('on').siblings().removeClass('on');
});
/***END***/

/*
 * 头部导航页面交互
 */
$('#traffic span').click(function(){
	var tv = $('#ipt1').val();
	$('#ipt1').val($('#ipt2').val());
	$('#ipt2').val(tv);
	if($('#ipt1').attr('disabled') == 'disabled'){
		$('#ipt1').removeAttr('disabled');
		$('#ipt2').attr('disabled','disabled');
	}else{
		$('#ipt2').removeAttr('disabled');
		$('#ipt1').attr('disabled','disabled');
	}
});
/***END***/

/*
 * 弹层效果
 */
function pop(msg,mtype,but1,but2,fun1,fun2){
	//msg	: 提示框文本内容
	//mtype	: 文本内容前是否带感叹号？0:不带感叹号（默认值）；1:带感叹号
	//but1	: 按钮1文案，默认为"确认"
	//but2	: 按钮2文案，无按钮2则为空
	//fun1	: 按钮1回调函数，默认为关闭弹出层
	//fun2	: 按钮2回调函数
	var top = document.body.scrollTop || document.documentElement.scrollTop;
	var h = document.documentElement.clientHeight;
	var v = 0;
	
	if(h > 160){
		v = (h-160)/2;
	}
	
	top += v;
	
	mtype	= mtype ? mtype : 0; 
	but1 	= but1 ? but1 : '确认';
	fun1 	= fun1 ? fun1 : 'popclose()';
	fun2 	= fun2 ? fun2 : 'popclose()';

	if($('#pop')[0]){
		$('#pop').css('top',top);
		msg = mtype ? "<em></em>"+msg : msg;
		$('#pop p').html(msg);
		$('#pop .but1').val(but1).attr('onclick',fun1);
		if(but2){
			$('#pop .but2').val(but2).attr('onclick',fun2);
		}
		
		$('#pop,#shadow').show();
	}else{
		var htm  = "<div id='pop' class='bb' style='top:"+top+"px'>";
			htm += "<section>";
			msg = mtype ? "<em></em>"+msg : msg;
			htm += "<p>"+msg+"</p>";
			htm += "<div class='bop'>";
			htm += "<input class='but but1' onclick="+fun1+" type='button' value='"+but1+"' />";
			if(but2){
				htm += "<input class='but but2' onclick="+fun2+" type='button' value='"+but2+"' />";
			}
			htm += "</div>";
			htm += "</section>";
			htm += "</div>";
			htm += "<div id='shadow'></div>";
		
		$('body').append(htm);
		
		$('#pop,#shadow').show();
	}
}

function popclose(){
	$('#pop,#shadow').hide();
}
/***END***/
