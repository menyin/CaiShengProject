define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,util = require("util")
		,juicer = require('juicer')
		//,selector = require("ui.selector")
		,uiSelector = require('ui.selector')
		,person = require("action.person")
		,tSilder = require("ui.touchSilder")
	$("#nav_home").addClass("active");
	var out = {
			params:{
				hasRcmData : false,//有智能推荐数据
				hasRntDate : false,//有最新职位数据
				RecomdClickCount : 0,//智能推荐“加载更多”点击次数
				RecentClickCount : 0,//最新职位“加载更多”点击次数
				recom_pos : [],//存储智能推荐的职位数据
				recnt_pos : [],//存储最新职位的职位数据
				recommend_per:{},
				recommend_latest:{}
			}
			,initSearch : function(){
				$("#searchFormBtn").attr("onclick","");
				$("#searchFormBtn").click(function(){
					/**
					var by = "default";
					if(!$("#homeKeyword").val()){
						by = "postdate"
					}
					*/
					var by = "postdate";
					$("#kwSortBy").val(by);
				});
				//person.updateInfo()
				if(util.url.getPar("search")!=="new") out.getLastSearch()
				out.auto()
				out.moreCondition()
				out.bindKwType()
				out.bindHistory()
				out.catelogsClick()
				out.industryClick()
				out.areaClick()
				out.setLastSearch()
			}
			//关键字自动完成
			,auto : function(){
				function filterArray ( data ) {
					data = data.filter(function(d){return d;})
					if ( !data.length ) return [];
					var rs = [];
					rs.push( data[0] );
					for( var i = 1, l = data.length; i < l ; i++ ) {
						if ( !~rs.indexOf( data[i] )  ) {
							rs.unshift( data[i] )
						}
					}
					return rs.splice(0,5);
				}
				var historyData = util.toJSON(localStorage["p.search.last"]) || [];
				var wordArray = filterArray( historyData.map(function(v){ if ( v.keyword ) return v.keyword }) );
				var areaArray = filterArray( historyData.map(function(v){ if ( v.workLoc ) return v.workLoc }) );

				var iptTimer=null
					,isTimeout = false
					,keys = {}
					,last = ""
					,historyTemp = (function(){
						var renderTemp = function (type) {
							var $historyTemp = $("<div></div>");
							var method = type === 0 ? 'keyword' : 'workLoc';
							var $rs = type === 0 ? $("#homeKeyword") : $("#homeAreaText");
							var localData = type === 0 ? wordArray : areaArray ;
							if ( !localData.length ) return false;
							for ( var i = 0, l = localData.length; i < l ; i++ ){
								var $item = $('<div class="row"><a>' + localData[i] + '</a></div>')
								$item.click(function(){
									$rs.val($(this).find("a").html())
								})
								$historyTemp.append($item);
							}
							$historyTemp.append('<div class="row" style="padding-left:0;"><a class="close" style="text-align: right;padding-right: 6px;background-color: rgb(245, 245, 245);" data-parent="' + ( type === 0 ? '#homeKeywordAuto' : '#homeAreaAuto' ) + '">close</a></div>')
							return $historyTemp;
						}

						return {
							word : renderTemp(0),
							area : renderTemp(1)
						}
					})()
					,kwFocus = function(e,t){
						if( e && e.stopPropagation)e.stopPropagation()
						if( e && e.preventDefault )e.preventDefault()
						if($("#kwTypeList").css("display")=="block"){clearTimeout(iptTimer);return}
						var rs = $("#homeKeyword")
							,v = rs.val().replace(/(^\s*)|(\s*$)|(\n)/g,"")
						if(!i){
							iptTimer = setTimeout(function(){
								clearTimeout(iptTimer)
								kwFocus(null,true)
		                    },500)
						}
	                    if(v == ""){
	                    	if ( historyTemp.word ) {
	                    		$("#homeKeywordAuto").empty().append( historyTemp.word ).show();
	                    	}
	                    	return;
	                    }
	                    if(v == last){return}else{last=v}
	                    if(/[丨亅丿乛乚丶丷丆冖亻亠卜卩厶匸讠廴 氵扌灬礻]/.test(v)){return}
						var $tmp = $("<div></div>")
							,TB = +new Date()
						rs.attr("TB",TB)
						var cacheData = util.isLocalStorage ? localStorage["p.search.key."+encodeURIComponent(v)] : ''
						if(cacheData){
							var DATA = util.toJSON(cacheData)
							if(DATA.count>0){
								var max = DATA.count>5?5:DATA.count
								for(var i=0;i<max;i++){
									var item = $('<div class="row"><a>'+DATA.keywords[i]+'</a></div>')
										item.click(function(){
											rs.val($(this).find("a").html())
										})
									$tmp.append(item)
								}
								$tmp.append($('<div class="clear_history" onclick="document.getElementById(\'homeKeywordAuto\').style.display=\'none\'"><span></span><a class="close">关闭</a></div>'))
								$("#homeKeywordAuto").empty().append($tmp.find("div")).show()
							}else{
								$("#homeKeywordAuto").hide()
							}
							return;
						}
						if(keys[v]){return}
						$.ajax({
							url:"/search/result.html?act=searchWord&word="+encodeURIComponent(v)+"&max=5&t="+(+new Date())
							,type : "GET"
							,success : function(data){
								if (util.isLocalStorage) localStorage["p.search.key."+encodeURIComponent(v)]=data
								keys[v]=true
								if(rs.attr("TB")!=TB){

								}else{
									var DATA = util.toJSON(data)
									if(DATA.count>0){
										var max = DATA.count>5?5:DATA.count
										for(var i=0;i<max;i++){
											var item = $('<div class="row"><a>'+DATA.keywords[i]+'</a></div>')
												item.click(function(){
													rs.val($(this).find("a").html())
												})
											$tmp.append(item)
										}
										$tmp.append($('<div class="clear_history" onclick="document.getElementById(\'homeKeywordAuto\').style.display=\'none\'"><span></span><a class="close">关闭</a></div>'))
										$("#homeKeywordAuto").empty().append($tmp.find("div")).show()
									}else{
										$("#homeKeywordAuto").hide()
									}
								}
							}
						})
					}
				var areaFocus = function () {
					if( $(this).val() == ""){
						if ( historyTemp.area ) {
							$("#homeAreaAuto").empty().append( historyTemp.area ).show();
						}
                    } else{
                    	$("#homeAreaAuto").hide();
                    }
				}

				$(document).click(function(e){
					if ( e.target.id === 'homeKeyword' ) return;
					$("#homeKeywordAuto").hide()
				})
				$('#so_home_plan').on('click', '.close', function () {
					var target = $(this).data('parent');
					if ( target ) {
						$(target).hide();
					}
				})
				$("#homeKeyword").on("focus keyup",kwFocus).bind("blur",function(){
					clearTimeout(iptTimer)
				})
				//$('#homeArea').on('focus keyup',areaFocus).bind('blur',function(){
				//	setTimeout(function(){
				//		$("#homeAreaAuto").hide();
				//	},100)
				//
				//})
			}
			//搜索类型选择
			,bindKwType : function(){
				$("#kwType").click(function(e){
					if( e && e.stopPropagation)e.stopPropagation()
					if( e && e.preventDefault )e.preventDefault()
					$("#kwTypeList").toggle()
					$("#homeKeywordAuto").hide()
					$("#homeKeyword").blur()
				})
				$(document).click(function(){
					$("#kwTypeList").hide()
				})
				$("#kwTypeList").find("a").click(function(){
					$("#kwTypeList").find("li").show()
					var $this = $(this)
					var val = $this.attr("v")
					if ( val == 1 ) {
						$("#homeKeyword").attr("placeholder", "请输入职位关键字")
					} else if ( val == 2 ) {
						$("#homeKeyword").attr("placeholder", "请输入企业关键字")
					} else {
						$("#homeKeyword").attr("placeholder", "请输入职位或企业关键字")
					}
					$("#kwTypeVal").val(val)
					$("#kwType").html($this.html())
					$this.parent().hide()
					$("#kwTypeList").hide()
				})
			}
			//历史记录回显
			,bindHistory : function(){
				if (!util.isLocalStorage) {
					alert('您可能开启了无痕浏览，导致搜索历史无法使用！', 5000)
					return;
				}
				var hst = util.toJSON(localStorage["p.search.last"])
				if(util.isArr(hst)){
					var ul = $("<ul></ul>")
					for(var i=0;i<hst.length;i++){
						if(i>=3) break;
						var itm = hst[hst.length-1-i];
						var li = "<li v='"+(hst.length-1-i)+"'>"+(itm.keyword.replace(/\+/g,"[$]")+"+"+(itm.jobLocIds?itm.jobLocNames:itm.workLoc)+"+"+itm.homePosition+"+"+itm.homeIndustry).replace(/^\++|\++$/g,"").replace(/\+{2,}/,"+")+"</li>";
							li = $(li.replace(/\+/g,"<span>+</span>").replace(/\[\$\]/g,"+"))
							li.click(function(){
								var n = $(this).attr("v");
								var history = localStorage["p.search.last"],p;
								if(!history)return
									history = util.toJSON(history)
								if(util.isArr(history)){
									if(!n) n=history.length-1
									p=history[n]
								}
								//out.getLastSearch($(this).attr("v"))
								//$("#searchFormBtn")[0].click()
								window.location.href="/search/result.html?"+out.par2url(p)
							})
							ul.append($(li))
					}
					$("#search_history_body ul").empty().append(ul.find("li"))
				}

				$("#search_history_title,#search_history_body .close").click(function(){
					var self = $("#search_history_title")
					if(self.hasClass("active")){
						self.removeClass("active")
					}else{
						self.addClass("active")
					}
					$("#search_history_body").toggle()
				})
				$("#search_history_body .clear_history span").click(function(){
					$("#search_history_body ul").empty().append("<li>无搜索记录</li>");
					localStorage["p.search.last"]=""
				})
			}
			,par2url : function(par){
				var tmp=""
				for(var obj in par){
					tmp+="&"+obj+"="+encodeURIComponent(par[obj]).replace(/\+/g,"%2b")
				}
				return tmp.length>1?tmp.substring(1):tmp
			}
			//回显最后一次历史记录
			,getLastSearch : function(n){
				if (!util.isLocalStorage) return;

				var history = localStorage["p.search.last"],p;
				if(!history)return
					history = util.toJSON(history)
				if(util.isArr(history)){
					if(!n) n=history.length-1
					p=history[n]
					if(!$("#homeKeyword").val())$("#homeKeyword").val(p.keyword)
					try{
						$("#kwTypeList a")[p.kwType].click()
					}catch(e){

					}
					if(p.jobLocIds){
						//$("#homeAreaText").attr("placeholder",p.jobLocNames)
						$("#homeAreaId").val(p.jobLocIds)
						$("#homeAreaText").val(p.jobLocNames)
					}else{
						$("#homeAreaText").val(p.workLoc)
						$("#homeAreaManual").val(p.workLoc).attr("data-old",p.workLoc)
						//$("#homeAreaText").attr("placeholder","输入工作地区")
						//$("#homeAreaId").val('')
					}
					if(p.jobFun || p.calling){
						$("#homePositionId").val(p.jobFun)
						$("#homeIndustryId").val(p.calling)
						$("#homeIndustryText").html(p.homeIndustry||"不限")
						$("#homePositionText").html(p.homePosition||"不限")
						var self = $("#moreConditionTit").find("i");
						if(self.hasClass("plus")){
							self.removeClass("plus").addClass("minus")
							ui.move.height("#moreConditionBody",108,0.2);
						}else{
							self.removeClass("minus").addClass("plus")
							ui.move.height("#moreConditionBody",0,0.2);
						}
					}
				}
			}
			//记录最后历史记录
			,setLastSearch : function(){
				$("#searchForm").submit(function(){
					var key = $("#homeKeyword").val()
						,area = $("#homeAreaText")
						if(!key&&!area.val()&&!$("#homeAreaId").val()){alert('请输入关键字或工作地区!'); return false}
					var searchLocation = area.val() || '';
					var p = {
						keyword : key
						,kwType : $("#kwTypeVal").val()
						,workLoc : searchLocation	//手动输入的
						,jobLocIds : $("#homeAreaId").val()
						// ,jobLocNames : area.attr("placeholder").replace("输入工作地区","")//城市地区的中文
						,jobLocNames: searchLocation
						,jobFun : $("#homePositionId").val()
						,homePosition : $("#homePositionText").html().replace("不限","")//职位中文
						,calling : $("#homeIndustryId").val()
						,homeIndustry : $("#homeIndustryText").html().replace("不限","")//行业中文
					}
					if (util.isLocalStorage) {
						var history = util.toJSON(localStorage["p.search.last"])
							if(util.isArr(history)){
								//判断是否有相同的搜索条件
								var isNewSearch=true
								for(var i=0;i<history.length;i++){
									var isSame = true
									for(var itm in p){
										if(history[i][itm] != p[itm]){isSame = false; break;}
									}
									if(isSame){
										history.splice(i,1)
										history.push(p)
										isNewSearch=false;break;
									}
								}
								if(isNewSearch)history.push(p)
							}else{
								history=[p]
							}
						localStorage["p.search.last"] = util.toString(history)
					}
				})
			}
			//职位类型
			,catelogsClick : function(){
				var selector = new uiSelector({
						type : "position"
						,textId : "#homePositionText"
						,valueId : "#homePositionId"
						,onSave:function(s){
							if ( s.OPTIONS.selectedItemsId == 0 ) {
								$('#homePositionId').val('');
							}
							if ( !s.OPTIONS.selectedItemsText.length ) {
								$("#homePositionText").text('不限')
							}
						}
						,onShow : function(s){
							var ids = $("#homePositionId").val().split(",");
							$('.clearSelector', s.selector).trigger('tap');
							ids.forEach(function(id){
								$('.shade_box',s.selector).trigger('tap');
								$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
								$('[data-cv="'+s.getCID(id)+'"]',s.iscrollLv2.scroller).trigger('tap');
							})
						}
					});
				selector.init();
				$("#homePositionTextBtn").on('tap',function(e){
					setTimeout( function () { selector.open() }, 200 )
				});

				/*var selector = new selector();
					selector.config({
						type : "position"
						,id : "#homePosition"
						,val : "#homePositionVal"
						,selectType : "single"
						,onOpen : function(){  }
						,onClear:function(a,b){
							$("#homePositionVal").val("")
							$("#homePosition").empty().html("职位类别")
							selector.hide()
						}
					})
					selector.init()
				$("#homePosition").click(function(e){
					selector.show();
				});*/
			}
			//工作地区
			,areaClick : function(){
				var selector = new uiSelector({
						type : "area"
						,textId  : "#homeAreaText"
						,valueId : "#homeAreaId"
						//,munualId: "#homeAreaManual"
						,showTown: true
						,onInit : function (s) {
							var id  = $('#homeAreaId').val()
							var rs  = [];
							$("#cacheAreaIds").val( id );
							id.split(',').forEach(function(v){
								if ( util.isNum( v ) && s.OPTIONS.dicData[v] && s.OPTIONS.dicData[v]['cn'] ) {
									rs.push( s.OPTIONS.dicData[v]['cn'] );
								}
							})
							rs.length ? $('#homeAreaText').val( rs.join(',') ) : $('#homeAreaText').val( '' );
						}
						,onSave : function (s) {
							$('#homeAreaManual').val('');
							$("#cacheAreaIds").val(s.OPTIONS.selectedItemsId == 0 ? '' :s.OPTIONS.selectedItemsId);
							//cacheAreaIds
							var ids = s.OPTIONS.selectedItemsId.split(',');
							var text = s.OPTIONS.selectedItemsText.split(',');
							var cacheId = '';
							var cityIds = [];
							var towns = [];
							for (var i = ids.length - 1; i >= 0; i--) {
								//cacheId = ids[i].slice(0,4);
								cacheId = ids[i];
								if ( !~cityIds.indexOf( cacheId ) ) {
									cityIds.push( cacheId );
									if ( ids[i].length > 4 ) {
										towns.push( text[i] );
									} else {
										towns.push( '' );
									}
								} else {
									if ( ids[i].length > 4 ) {
										towns[towns.length-1] += ';' + text[i] ;
									}
								}
							};
							if ( s.OPTIONS.selectedItemsId == 0 ) {
								$('#homeAreaId').val('');
								$('#homeAreaTown').val('');
							} else {
								$('#homeAreaId').val(cityIds.join(','));
								$('#homeAreaTown').val(towns.join(','));
							}


						}
						,onShow : function(s){
							var ids = $("#cacheAreaIds").val().split(",");
							$('.clearSelector', s.selector).trigger('tap');
							ids.forEach(function(id){
								$('.shade_box',s.selector).trigger('tap');
								$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
								$('[data-cv="'+s.getCID(id)+'"]',s.iscrollLv2.scroller).trigger('tap');
								$('[data-tv="'+id+'"]',s.iscrollLv3.scroller).length && $('[data-tv="'+id+'"]',s.iscrollLv3.scroller).trigger('tap');
							})
						}
					});

					selector.init()
				$('#homeAreaSel').on('click',function(){
					setTimeout( function () { selector.open() }, 200 )
				})
				$("#homeAreaText").on('focus', function(){
					var $that = $(this);
					$that.data('ov', $that.val());
				}).on('blur', function(){
					var $that = $(this);
					var nv = $that.val();
					if ( nv !== $that.data('ov') || !nv.length ) {
						$('#homeAreaManual').val( nv )
						$('#homeAreaId').val('');
						$('#cacheAreaIds').val('');
					}
				});
			}
			//职位行业
			,industryClick : function(){
				var selector = new uiSelector({
						type : "industry"
						,textId : "#homeIndustryText"
						,valueId : "#homeIndustryId"
						,onSave : function (s) {
							if ( s.OPTIONS.selectedItemsId == 0 ) {
								$('#homeIndustryId').val('');
							}
							if ( !s.OPTIONS.selectedItemsText.length ) {
								$("#homeIndustryText").text('所有行业')
							}
						}
						,onShow : function(s){
							var ids = $("#homeIndustryId").val().split(",");
							$('.clearSelector', s.selector).trigger('tap');
							ids.forEach(function(id){
								$('.shade_box',s.selector).trigger('tap');
								$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
								$('[data-cv="'+s.getCID(id)+'"]',s.iscrollLv2.scroller).trigger('tap');
							})
						}
					});

				selector.init()
				$("#homeIndustryTextBtn").on('tap',function(){
					setTimeout( function () { selector.open() }, 200 )
				});

				/*var selector = new selector();
					selector.config({
						type : "industry"
						,langType :"cn"
						,selectType : "single"
						,id : "#homeIndustry"
						,val : "#homeIndustryVal"
						,onClear:function(a,b){
							$("#homeIndustryVal").val("")
							$("#homeIndustry").empty().html("行业类别")
							selector.hide()
						}
					})
					selector.init()
				$("#homeIndustry").click(function(){
					selector.show();
				});*/
			}
			//更多搜索条件
			,moreCondition : function(min,max,css){
				$("#moreConditionTit").click(function(){
					var self = $(this).find("i");
					if(self.hasClass("plus")){
						self.removeClass("plus").addClass("minus")
						ui.move.height("#moreConditionBody",108,0.2);
					}else{
						self.removeClass("minus").addClass("plus")
						ui.move.height("#moreConditionBody",0,0.2);
					}
				});
			}
			//597才经相关
			,hr : function(){
				var hr = new tSilder( {id:'jobcnHRbody', 'auto':'-1', speed:200, timeout:3000, direction:'right'
					,after:function(i,o){
						$("#jobcnHRtit li").removeClass("active").eq(i).addClass("active");
						hrAT=i
					}
				});
				var hrAT = 0
				$("#jobcnHRtit li").each(function(i){
					$(this).click(function(){
						if(i==hrAT) return;
						if(i<hrAT)
							hr.next(-1)
						else
							hr.next(1)
						hrAT=i;
					});
				})
			}
			,btmAd : function(){
				var $btmBody  = $("#bottomAd");
				var $btmClose = $btmBody.find(".btm_cose");
				if ( util.cookie.get('btm_ad') == 1 ) {
					return;
				}else{
					$btmBody[0].style.display = 'block';
				}
				$btmClose.click(function(e){
					e.stopPropagation();
					util.cookie.set('btm_ad',1,{path:'/'})
					$btmBody.remove();
				});

				$btmBody.click(function(){
					var appUrl = $btmBody.data('href');
					if (appUrl) {
						window.open(appUrl, "_parent","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=600, height=500");
					}
				});
			}
			,topAd : function(){
				var $topBody  = $(".topAd");
				var $topClose = $topBody.find(".top_close a");
				if ( util.cookie.get('top_ad') == 1 ) {
					return;
				}else{
					$topBody[0].style.display = 'block';
				}
				$topClose.click(function(e){
					e.stopPropagation();
					util.cookie.set('top_ad',1,{path:'/'})
					$topBody.remove();
				});

			}
			,initBaiduAnalytics: function() {
				//require.async('http://hm.baidu.com/h.js?8180e13f3ce10ef1c58778a9785ec8fc');
			},
			initPosRecommend: function() {
				var $refresh = $('.refreshPos');
				var $resultPan = $('#myRecommend');
				var $recomTitle = $('#recomTitle');
				var _TEMPLATE = $('#tpl-pos').html();

				$refresh.on('click', function(event) {
					var $this = $(this);
					var posType = $this.attr('pos-type');
					$.ajax({
						type: 'GET',
						url: '/touch/search/pos4Home.ujson',
						data: {
							'm.flag': posType
						},
						beforeSend: function() {
							ui.loading.show({id: 'posRecommendLoading', z: 12});
						},
						complete: function() {
							ui.loading.hide({id: 'posRecommendLoading'});
						},
						success: function(res) {
							var result = util.toJSON(res);
							if (result.success && result.posList.length > 0) {
								var recomTitle = result.flag === 'recommend' ? '智能推荐' : '最新职位';
								$recomTitle.text(recomTitle);

								var content = juicer(_TEMPLATE, result);
								$resultPan.html(content);
							} else {
								alert(res.msg || '没有职位数据，请稍后再试！');
							}
						},
						error: function() {
							alert('网络异常，请稍后再试！');
						}
					});
				});
			},
			initRefreshButton: function() {//渲染点击刷新时获取到的数据		
				var $refresh = $('.refresh');
				var container = $('#homeHotJobBody');
				var tmp = util.template($('#tpl-pos').html());

				$refresh.unbind('click').bind('click', function(event) {
					var $this = $(this);
					var posType = $('#homeHotJobTit').find('li.actived').find("a[name='recomTitle']").attr('id');//查看目前是智能推荐还是最新职位
					if( posType === "recomTitle_recomm"){
						//智能推荐更新
						var cache = out.params['recommend_per'];
						$.ajax({
							url: '/search/result.php',
			                type: 'GET',
			                dataType: 'json',
			                data:{
			                	'act': 'detail',
	                            'page': 1,
	                            //'idsExist': '',
	                            //'idsAll': cache.idsAll,
	                            //'_t': Math.random(),
								'viewType': 1
			                },
			                beforeSend: function() {
								ui.loading.show({id: 'posRecommendLoading', z: 12});
							},
							complete: function() {
								ui.loading.hide({id: 'posRecommendLoading'});
							},
			                success: function(data) {
			                	if(data['rows']){
			                		var tpl = util.template( $('#tpl-pos').html());
			                		out.params.recom_pos = tpl({posList:data['rows'],isEmPos:data['posId_EmPosFlag']});
				                	container.html(out.params.recom_pos);
				                	util.cookie.set('_sps_lh','recommend_pos');	
				                	out.params.hasRcmData = true;
				                	out.initParams(data);

				                	//隐藏“查看更多”，显示“加载更多”
				                	var searchMore = $('#SearchMore_Recommend');
				                	var loadMore = $('#loadMoreRecommend');
				                	searchMore.attr('flag','');
				                	if(loadMore.hasClass('hide'))
				                		loadMore.removeClass('hide');
				                	if(!searchMore.hasClass('hide'))
				                		searchMore.addClass('hide')
				                	out.params.RecomdClickCount = 0;//智能推荐“加载更多”点击次数设为0
				                	if(data['rows'].length < 10){
				                		loadMore.addClass('hide');
				                		searchMore.removeClass('hide')
				                	}
			                	}
			                }
						});
					}else if( posType === "recomTitle_latest"){
						//最新职位更新
                        var param = out.params['recommend_latest'];
                        var pos = param.p;
                        var data = {

                        };

						//zy
                        $.ajax({
							url: '/search/result.php?act=detail',
			                type: 'GET',
			                dataType: 'json',
			                data: data||{},
			                beforeSend: function() {
								ui.loading.show({id: 'posRecommendLoading', z: 12});
							},
							complete: function() {
								ui.loading.hide({id: 'posRecommendLoading'});
							},
			                success: function(data) {
			                	if(data['rows']){
			                		var tpl = util.template( $('#tpl-pos').html());
			                		out.params.recnt_pos = tpl({posList:data['rows'],isEmPos:data['posId_EmPosFlag']});
				                	container.html(out.params.recnt_pos);
				                	util.cookie.set('_sps_lh','recommend_latest');
				                	out.params.hasRntData = true;
				                	out.initParams(data);

				                	//隐藏“查看更多”，显示“加载更多”
				                	var searchMore = $('#SearchMore_Latest');
				                	var loadMore = $('#loadMoreLatest');
				                	searchMore.attr('flag','');
				                	if(loadMore.hasClass('hide'))
				                		loadMore.removeClass('hide');
				                	if(!searchMore.hasClass('hide'))
				                		searchMore.addClass('hide')
				                	out.params.RecentClickCount = 0;//最新职位“加载更多”点击次数设为0
			                	}
			                }
						});
					}
				});
			},
			initLoadMorePos : function(){//点击加载更多

				$('.all_pos').unbind('click').bind('click',function(){
					var $this = $(this);
					var id = $this.attr('id');
					var container = $('#homeHotJobBody');
					var tmp = util.template($('#tpl-pos').html());

					if(id === "loadMoreRecommend"){
						out.params.RecomdClickCount ++;
						if(out.params.RecomdClickCount === 2){	//最多点两次
							$this.addClass('hide');
							$('#SearchMore_Recommend').removeClass('hide').attr('flag','showing');
						}

						//加载更多智能推荐职位
						out.params.recom_pos = container.html();//把现有的数据存储起来
						var cache = out.params['recommend_per'];

						$.ajax({
							url: '/search/result.php',
			                type: 'GET',
			                dataType: 'json',
			                data:{
			                	'act': 'detail',
								'viewType': 1,
	                            'page': cache.page + 1 || 1,
	                            //'idsExist': cache.idsExist || cache.idsAll,
	                            //'idsAll': cache.idsAll,
	                            //'_t': Math.random()
			                },
			                beforeSend: function() {
								ui.loading.show({id: 'posRecommendLoading', z: 12});
							},
							complete: function() {
								ui.loading.hide({id: 'posRecommendLoading'});
							},
			                success: function(data) {
			                	if(data['rows']){
			                		var tpl = util.template( $('#tpl-pos').html());
			                		out.params.recom_pos += tpl({posList:data['rows'],isEmPos:data['posId_EmPosFlag']});
				                	container.html(out.params.recom_pos);
				                	util.cookie.set('_sps_lh','recommend_pos');	
				                	out.params.hasRcmData = true;
				                	out.initParams(data);
			                	}
			                }
						});

					}else if(id === "loadMoreLatest"){
						out.params.RecentClickCount ++;
						if(out.params.RecentClickCount === 2){	//最多点两次
							$this.addClass('hide');
							$('#SearchMore_Latest').removeClass('hide').attr('flag','showing');
						}

						//加载更多最新职位
						out.params.recnt_pos = container.html();//把现有的数据存储起来
                        var param = out.params['recommend_latest'];
                        var data = {
                            'page': param.page + 1 || 1,
                        };

                        $.ajax({
							url: '/search/result.php?act=detail',
			                type: 'GET',
			                dataType: 'json',
			                data: data||{},
			                beforeSend: function() {
								ui.loading.show({id: 'posRecommendLoading', z: 12});
							},
							complete: function() {
								ui.loading.hide({id: 'posRecommendLoading'});
							},
			                success: function(data) {
			                	if(data['rows']){
			                		var tpl = util.template( $('#tpl-pos').html());
			                		out.params.recnt_pos += tpl({posList:data['rows'],isEmPos:data['posId_EmPosFlag']});
				                	container.html(out.params.recnt_pos);
				                	util.cookie.set('_sps_lh','recommend_latest');
				                	out.params.hasRntData = true;
				                	out.initParams(data);
			                	}
			                }
						});

					}
				})
			},
			initPosBody:function(){//渲染智能推荐或最新职位在点击时获取到的数据
				$('#homeHotJobTit li').unbind('click').bind('click', function(){
					var $this = $(this);
					var params = out.params;
					if(!$this.hasClass('actived')){//目前的选项不是目标选项 hasClass('actived')
						//Title remove actived & add actived
						var $homeHotJobTit = $('#homeHotJobTit');
						var $homeHotJobTit_li = $homeHotJobTit.find('li');
						$homeHotJobTit_li.removeClass('actived');
						$this.addClass('actived');

						//get Data,show List ,set Cookies
						var container = $('#homeHotJobBody');
						var id = $this.find('a[name="recomTitle"]').attr('id');

						//“加载更多……”与“查看更多职位……”的div
						var addOrSearch = [];
						addOrSearch = addOrSearch.concat($('.all_pos'));
						addOrSearch = addOrSearch.concat($('.search_pos'));
						$.each(addOrSearch,function(index,item){
							var $item = $(item);
							if(!$item.hasClass('hide'))
								$item.addClass('hide');
						});

						if(id === "recomTitle_recomm"){//智能推荐
							var loadMore = $('#loadMoreRecommend');
							var searchMore = $('#SearchMore_Recommend'); 
							var showing = searchMore.attr('flag');
							if(showing){
								searchMore.removeClass('hide');
							}else{
								loadMore.removeClass('hide');
							}

							if(params.hasRcmData) {
								if(params.recommend_per.rows.length < 10){
		                			searchMore.removeClass('hide');
		                			loadMore.addClass('hide');
		                		}
								//有数据就直接把数据显示出来
								container.html(params.recom_pos);
								util.cookie.set('_sps_lh','recommend_pos');
								return ;
							}

							//没数据再去取
							params.recnt_pos = container.html();//把另一选项的数据存储起来
							params.hasRntData = true;
							$.ajax({
					                url: '/search/result.php?act=detail&viewType=1&t=' + Math.random(),
					                type: 'GET',
					                dataType: 'json',
					                beforeSend: function() {
										ui.loading.show({id: 'posRecommendLoading', z: 12});
									},
									complete: function() {
										ui.loading.hide({id: 'posRecommendLoading'});
									},
					                success: function(data) {
					                	if(data['rows']){
					                		if(data['rows'].length < 10){
					                			searchMore.removeClass('hide');
					                			loadMore.addClass('hide');
					                		}
					                		var tpl = util.template( $('#tpl-pos').html());
					                		params.recom_pos = tpl({posList:data['rows'],isEmPos:data['posId_EmPosFlag']});
						                	container.html(params.recom_pos);
						                	params.hasRcmData = true;
						                	util.cookie.set('_sps_lh','recommend_pos');
						                	out.initParams(data);
					                	}
					                }
					            });
						}else if(id === "recomTitle_latest"){//最新职位
							var loadMore = $('#loadMoreLatest');
							var searchMore = $('#SearchMore_Latest');
							var showing = searchMore.attr('flag');

							if(showing){
								searchMore.removeClass('hide');
							}else{
								loadMore.removeClass('hide');
							}

							if(params.hasRntData) {//直接取缓存数据
								container.html(params.recnt_pos);
								util.cookie.set('_sps_lh','recommend_latest');
								return ;
							}

							//获取数据
							params.recom_pos = container.html();
							params.hasRcmData = true;
							$.ajax({
					                url: '/search/result.php?act=detail',
					                type: 'GET',
					                dataType: 'json',
					                beforeSend: function() {
										ui.loading.show({id: 'posRecommendLoading', z: 12});
									},
									complete: function() {
										ui.loading.hide({id: 'posRecommendLoading'});
									},
					                success: function(data) {
					                	if(data['rows']){
					                		var tpl = util.template( $('#tpl-pos').html());
					                		params.recnt_pos = tpl({posList:data['rows'],isEmPos:data['posId_EmPosFlag']});
						                	container.html(params.recnt_pos);
						                	params.hasRntData = true;
						                	util.cookie.set('_sps_lh','recommend_latest');
						                	out.initParams(data);
					                	}
					                }
					         });
						}
					}
				});
			},
			initSlider: function(){
				var slider = new tSilder( {id:'resume_slider_list', 'auto':'-1', speed:200, timeout:3000, direction:'right'
					,after:function(i,o){
						$("#resume_slider .bt li").removeClass("actived").eq(i).addClass("actived");

					}
				});
			},
			initParams: function(params){
				out.params[params['viewType']] = params;
			}
	}
	module.exports = out;
});
