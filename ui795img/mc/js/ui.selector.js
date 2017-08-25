/**
*   @author vic
*   @create 2015/10/29
*   commonTemplate  职位/行业模板
*   areaTemplate	地区模板
*   initSelector	初始化选择器
*   initData		初始化数据（用于打开的时候回显数据）
*   renderTemplate  初始化时候渲染html结构
*   initEvent	   初始化时候绑定事件
*   getPID		  获取父类ID
*   getText		 获取文本
*   search		  绑定搜索的事件
*   open			打开选择器
*   close		   关闭选择器
*   addItem		 添加选项
*   delItem		 删除选项
*/

define(function(require, exports, module){
	var $ = require('$');
	var util = require('util');
	var dicOfArea = require('area');
	var dicOfPost = require('position');
	var dicOfInst = require('industry');
	var iscroll   = require('iscroll-lite');
	var uiLocalStorage = null;
	//require('style/selector.css');

	dicOfPost['list'].unshift('000');
	dicOfPost['000']  = {cn: "职位不限",en: "Unlimited Position",child:[0]};
	dicOfPost['0']   = {cn: "不限",en: "Unlimited"};

	dicOfInst['category']['list'].unshift('0');
	dicOfInst['category']['0'] = {
		cn : '行业不限',
		en : 'Unlimited Industry',
		list : ['0']
	};
	dicOfInst['0'] = {cn: "不限",en: "Unlimited"};

	if ( localStorage && localStorage.getItem ) {
		uiLocalStorage = localStorage;
	} else {
		uiLocalStorage = {getItem: function(){return '';}, setItem: function(){}, 'lastSelectedItems':''}
	}

	/**
	* 构造函数Selector
	*/
	var Selector = function ( cfg ) {
		if ( this instanceof Selector ) {
			// 初始化参数
			this.CONFIG = {};
			this.OPTIONS = {
				dicData : null,
				selectedItems : null,
				selectedItemsId : '',
				selectedItemsText : '',
				originalValueLength : 0,
				lastSelectedItems : uiLocalStorage['lastSelectedItems']
			};

			var _config = $.extend({},defaultConfig, cfg.type === 'area' ? areaTemplate : commonTemplate, true );
			!_config.id.length && (_config.id = 'jobcn-selector-' + ~~(Math.random()*1000));
			$.extend(this.CONFIG, _config, cfg, true);
			// 初始化数据
			this.initData( $(this.CONFIG.valueId).val() );
		} else{
			return new Selector( cfg );
		}
	}

	var defaultConfig = {
		id	: '',
		css   : '',
		max   : 5,
		type  : 'area',
		lang  : 'cn', // cn || en
		textId	: '',
		valueId   : '',
		manualId  : '',
		search	: true, // true || false
		selectType : 'multiple', // single || multiple
		onlyChild : false,
		showTown  : true,
		onInit : null, //初始化回调
		onShow : null, //显示后调
		onHide : null, //隐藏回调
		onSave : null, //保存回调
		description : {
			cn : {
				input_area_tip : '可输入更详细的地区',
				search_industry_tip : '输入关键字快速查找行业',
				search_position_tip : '输入关键字快速查找职位',
				area_select_tip : '地区不限',
				area_selected_tip : '已选择地区',
				area_title : '地区选择',
				industry_title : '行业选择',
				position_title : '职位选择',
				excess : '选项不能超过{{num}}个',
				ok_btn : '确定',
				save_btn  : '确定',
				clear_btn : '清空',
				hot_city  : '热门城市',
				location_tip  : '当前定位',
				recent_choice : '最近选择',
				reset_location: '[重新定位]',
				unlimited_area: '地区不限',
				unlimited	 : '不限'
			},
			en : {
				input_area_tip : 'input the location',
				search_industry_tip : ' keyword of industry',
				search_position_tip : 'keyword of position',
				area_select_tip : 'you can choose 5 areas',
				area_selected_tip : 'selected areas',
				area_title : 'select areas',
				industry_title : 'select industry',
				position_title : 'select position',
				excess : 'no more than {{num}} options',
				ok_btn : 'ok',
				save_btn  : 'ok',
				clear_btn : 'clear',
				hot_city  : 'hot city',
				location_tip  : 'location',
				recent_choice : 'history',
				reset_location: '[to reposition]',
				unlimited_area: 'unlimited area',
				unlimited	 : 'unlimited'
			}
		}
	};

	//
	var commonTemplate = {
		itemTpl : '<li data-cv="{{key}}" {{isAll}} class="selector_item {{selected}}"><span>{{name}}<i class="item_check" ></i></span></li>',
		bodyTpl :'<div class="jobcn_selector jobcn_selector_{{data.type}} {{data.lang}} {{data.css}} hide" id="{{data.id}}">'
				+'   <section class="head_wrap">'
				+'	  <div class="selector_head">'
				+'		  <a class="back"></a>{{data.description[data.lang][data.type+\"_title\"]}}<a class="save">{{data.description[data.lang][\"save_btn\"]}}</a>'
				+'	  </div>'
				+'	  <div class="selector_checker clearfix">'
				+'	  {% if ( data.search ) { %}'
				+'		  <div class="selector_search_item">'
				+'			  <div class="selector_search">'
				+'				  <input class="selector_search_input searchInput" placeholder="{{data.description[data.lang][\'search_\'+data.type+\'_tip\']}}">'
				+'				  <a class="selector_search_del hide"></a>'
				+'				  <a class="selector_search_ico"></a>'
				+'			  </div>'
				+'		  </div>'
				+'	  {% } %}'
				+'		  <span class="selector_clear clearSelector" style="display: inline-block;">{{data.description[data.lang][\"clear_btn\"]}}</span>'
				+'	  </div>'
				+'   </section>'
				+'   <div class="main_box selectorBody" style="display:block">'
				+'	  <div class="selector_body_box">'
				+'		  <div class="selector_body">'
				+'{% var selected = options.selectedItems;'
				+'   if ( data.type === "position" ) {%}'
				+'	  <div class="selector_category_box1 selectorLv1">'
				+'		  <ul>'
				+'	  {% for( var i = 0, l = dic.list.length; i < l; i++ ) { %}'
				+'		  <li data-pv="{{dic.list[i]}}" class="title {{i===0?\"active\":\"\"}} {{ !!selected[dic.list[i]] ? \"subSelected\" : \"\" }}"><span>{{dic[dic.list[i]][data.lang]}}</span></li>'
				+'	  {% } %}'
				+'		  </ul>'
				+'	  </div>'
				+'	  <div class="selector_category_box2 selector_category_items selectorLv2">'
				+'		  <div>'
				+'		  <ul data-pv="{{dic.list[0]}}">'
				+'	  {%  var childData = dic[ dic.list[0] ]["child"]; %}'
				+'	  {%  if ( !data.onlyChild ) { '
				+'			 if ( dic.list[0] != 0 || dic.list[0] != "000" ) {'
				+'	  %}'
				+'			  <li data-cv="{{dic.list[0]}}" data-all="1" class="selector_item {{ selected[dic.list[0]] && !!~selected[dic.list[0]].indexOf(dic.list[0]) && \"selected\" }}"><span>{{data.lang === "cn" ? "所有" : "All "}}{{dic[dic.list[0]][data.lang]}}<i class="item_check" ></i></span></li>'	 
				+'	  {%'
				+'			 }'
				+'		  } %}'
				+'	  {%  if ( childData ) { for ( var k = 0, h = childData.length; k < h; k++ ) { %}'
				+'			  <li data-cv="{{childData[k]}}" class="selector_item  {{ selected[dic.list[0]] &&  !!~selected[dic.list[0]].indexOf(childData[k]) ? \"selected\" : \"\" }}"><span>{{dic[childData[k]][data.lang]}}<i class="item_check" ></i></span></li>'
				+'	  {%  } }%}'
				+'		  </ul>'
				+'		  </div>'
				+'	  </div>'
				+'{% } %}'
				+'{% if ( data.type === "industry" ) { %}'
				+'	  <div class="selector_category_box1 selectorLv1">'
				+'		  <ul>'
				+'	  {% var categoryList = dic.category.list;'
				+'		 for( var i = 0, l = categoryList.length; i < l; i++ ) { %}'
				+'		  <li data-pv="{{categoryList[i]}}" class="title {{i===0?\"active\":\"\"}} {{ !!~Object.keys(selected).indexOf( categoryList[i] ) ? \"subSelected\" : \"\" }}"><span>{{dic.category[categoryList[i]][data.lang]}}</span></li>'
				+'	  {% } %}'
				+'		  </ul>'
				+'	  </div>'
				+'	  <div class="selector_category_box2 selector_category_items selectorLv2">'
				+'		  <div>'
				+'		  <ul data-pv="{{categoryList[0]}}">'
				+'	  {%  var childData = dic.category[ categoryList[0] ]["list"];'
				+'		  for ( var k = 0, h = childData.length; k < h; k++ ) { %}'
				+'			  <li data-cv="{{childData[k]}}" class="selector_item {{ selected[categoryList[0]] && !!~selected[categoryList[0]].indexOf( childData[k] ) ? \"selected\" : \"\" }}"><span>{{dic[childData[k]][data.lang]}}<i class="item_check" ></i></span></li>'
				+'	  {%  } %}'
				+'		  </ul>'
				+'		  </div>'
				+'	  </div>'
				+'{% } %}'
				+'		  </div>'
				+'	  </div>'
				+'   </div>'
				+'   <div class="main_box searchResult" style="display:none">'
				+'	  <div class="selector_search_result clearfix searchWrapper"></div>'
				+'   </div>'
				+'</div>',
		searchTpl:' <ul>'
				+'  {%for ( var key in data ) { '
				+'	   if ( !data.hasOwnProperty(key) || !data[key].length ) continue; %}'
				+'	<li class="search_result_items clearfix">'
				+'	  <div class="parent">{{key}}</div>'
				+'	  <div class="search_items">'
				+'		<div class="search_children">'
				+'		  <div class="search_child">'
				+'			<ul>'
				+'			  {% var searchData = data[key];'
				+'			  for ( var i = 0 , l = searchData.length; i<l; i++ ) { %}'
				+'			  <li class="selector_item {{ !!~selected.indexOf(searchData[i].id) ? \"selected\" : \"\" }}" data-cv="{{searchData[i].id}}">{{searchData[i].text}}<i class="item_check"></i></li>'
				+'			  {% } %}'
				+'			</ul>'
				+'		  </div>'
				+'		</div>'
				+'	  </div>'
				+'	</li>'
				+'  {% }%}'
				+'  </ul>'
				+'</div>'
	};

	var areaTemplate = {
		selectedTpl : '<li class="selectedIcon"> <a class="selector_selected "><span>{{name}}</span><i data-sv="{{key}}" class="selected_icon"></i></a></li>',
		cvItemTpl : '<li class="selector_item {{selected}}" {{isAll}} data-cv="{{key}}"><span>{{name}}<i class="item_check"></i><i class="item_icon {{hide}}"></i></span></li>',
		tvItemTpl : '<li class="selector_item {{selected}}" {{isAll}} data-tv="{{key}}"><span>{{name}}<i class="item_check"></i></span></li>',
		bodyTpl :'<div class="jobcn_selector jobcn_selector_{{data.type}} {{data.lang}} {{data.css}} hide" id="{{data.id}}">'
				+'  <section class="head_wrap">'
				+'	<div class="selector_head">'
				+'	  <a class="back"></a>{{data.description[data.lang][data.type+"_title"]}}<a class="save">{{data.description[data.lang][\"save_btn\"]}}</a>'
				+'	</div>'
				// +'	<div class="selector_checker clearfix">'
				// +'	  <div class="selector_search_item">'
				// +'		<div class="selector_search">'
				// +'		  <input class="selector_search_input" value="" placeholder="{{data.description[data.lang][\"input_area_tip\"]}}">'
				// +'		  <a class="selector_search_del hide"></a>'
				// +'		  <a class="selector_search_ok">{{data.description[data.lang][\"ok_btn\"]}}</a>'
				// +'		</div>'
				// +'	  </div>'
				// +'	</div>'

				+'	<div class="selector_opted  clearfix">'
				+'	  <div>'
				+'		<div class="clear_count">'
				+'		  <span>{{data.description[data.lang][\"area_selected_tip\"]}}</span>'
				+'		  <div class="right_position">'
				+'			<span class="selector_checker_count"><span class="currentNum">{{options.originalValueLength}}</span>/{{data.max}}</span>'
				+'			<span class="selector_clear clearSelector" style="display:block"> {{data.description[data.lang][\"clear_btn\"]}}</span>'
				+'		  </div>'
				+'		</div>'
				+'		<span class="selector_checker_tip {{ Object.keys(options.selectedItems).length ? \"hide\" : \"\" }}">{{ data.description[data.lang][\"area_select_tip\"] }}</span>'
				+'		<div class="selector_checker_plan clearfix" style="display: block;height:70px;">'
				+'		  <ul class="selectedItems">'
				+'			  {% for ( var k in options.selectedItems ) { '
				+'				  if ( !options.selectedItems.hasOwnProperty(k) ) continue;'
				+'				  for ( var mk in options.selectedItems[k] ) {'
				+'					  if ( !options.selectedItems[k].hasOwnProperty(mk) ) continue;'
				+'					  for ( var i = 0, l = options.selectedItems[k][mk].length; i < l; i++ ){'
				+'						  var item = options.selectedItems[k][mk][i];'
				+'						  %}<li class="selectedIcon"> <a class="selector_selected "><span>{{dic[item][data.lang]}}</span><i data-sv="{{item}}" class="selected_icon"></i></a></li>{%'
				+'					  }'
				+'				  }'
				+'			  } %}'
				+'		  </ul>'
				+'		</div>'
				+'	  </div>'
				+'	</div>'
				+'	<div class="currant_position">'
				+'	  <i class="position_icon"></i>{{data.description[data.lang][\"location_tip\"]}}<a class="getLocation">{{data.description[data.lang][\"reset_location\"]}}</a><span class="selected_area"></span>'
				+'	</div>'

				+'  </section>'
				+'  <!--selector_body-->'
				+'  <div class="main_box selectorBody" style="display:block">'
				+'	<div class="selector_body_box bodyMainBox">'
				+'	  <div class="selector_body">'
				+'		<div class="selector_category_box1 selectorLv1 provinceBox">'
				+'		  <ul class="provinceItems">'
				+'			<li data-pv="0" class="title"><span>{{data.description[data.lang][\"unlimited_area\"]}}</span></li>'
				+'			<li class="title nearly_area active" data-pv="last"><span><i></i>{{data.description[data.lang][\"recent_choice\"]}}</span></li>'
				+'			<li class="title hot_area" data-pv="hot"><span><i></i>{{data.description[data.lang][\"hot_city\"]}}</span></li>'
				+'			{% '
				+'			  var sort;'
				+'			  var py;'
				+'			  var sortList = dic.ENLIST;'
				+'			  var langType = "en";'
				+'			  var isSelected = function (v) {'
				+'				  if ( !options.selectedItems[v] ) return "";'
				+'				  if ( !Object.keys(options.selectedItems[v]).length ) return "";'
				+'				  for ( var k in options.selectedItems[v] ) {'
				+'					  if ( options.selectedItems[v][k] && options.selectedItems[v][k].length ) return " subSelected";'
				+'				  }'
				+'			  };'
				+'			  for ( var k in sortList ) {'
				+'				  var list = sortList[k];'
				+'				  for ( var i = 0, l = list.length; i < l ; i++ ) {'
				+'					  py = dic[list[i]][langType].slice(0,1).toUpperCase(); '
				+'					  %}<li data-pv="{{list[i]}}" class="title{{isSelected(list[i])}} "><span>{% if ( sort !== py ) { sort = py; %}<i class="character">{{sort}}</i>{% } %}{{dic[list[i]][data.lang]}}</li></span>{%'
				+'				   }'
				+'			  }'
				+'			  %}'
				+'		  </ul>'
				+'		  <div class="shade_box"></div>'
				+'		</div>'
				+'		<div class="selector_category_box2 selectorLv2 cityBox">'
				+'		  <div class="selector_category_items">'
				+'			<ul class="hide" data-pv="0">'
				+'			  <li class="selector_item " data-cv="0"><span>{{data.description[data.lang][\"unlimited\"]}}<i class="item_check"></i><i class="item_icon hide"></i></span></li>'
				+'			</ul>'
				+'			<ul class="cityItems" data-pv="last">'
				+'			  {% if ( options.lastSelectedItems ) {'
				+'				 var lastSelectedItems = options.lastSelectedItems.length > 0 ? options.lastSelectedItems.split(\",\") : [] ;'
				+'				 for ( var i = 0, l = lastSelectedItems.length; i < l; i++ ) {'
				+'					  if ( !data.showTown && lastSelectedItems[i].length === 6 ) continue;'
				+'					%}<li data-lv="{{lastSelectedItems[i]}}" class="selector_item"><span>{{dic[lastSelectedItems[i]][data.lang]}}<i class="item_check"></i></span></li>{%'
				+'				 }'
				+'				 }'
				+'			  %}'
				+'			</ul>'
				+'		  </div>'
				+'		</div>'
				+'		<div class="selector_category_box3 selectorLv3 cityBox">'
				+'		  <div class="selector_category_items">'
				+'			<ul class="hide" data-pv="0">'
				+'			  <li class="selector_item " data-cv="0"><span>{{data.description[data.lang][\"unlimited\"]}}<i class="item_check"></i><i class="item_icon hide"></i></span></li>'
				+'			</ul>'
				+'			<ul class="cityItems" data-pv="last">'
				+'			  {% if ( options.lastSelectedItems ) {'
				+'				 var lastSelectedItems = options.lastSelectedItems.length > 0 ? options.lastSelectedItems.split(\",\") : [] ;'
				+'				 for ( var i = 0, l = lastSelectedItems.length; i < l; i++ ) {'
				+'					  if ( !data.showTown && lastSelectedItems[i].length === 6 ) continue;'
				+'					%}<li data-lv="{{lastSelectedItems[i]}}" class="selector_item"><span>{{dic[lastSelectedItems[i]][data.lang]}}<i class="item_check"></i></span></li>{%'
				+'				 }'
				+'				 }'
				+'			  %}'
				+'			</ul>'
				+'		  </div>'
				+'		</div>'
				+'		<div class="selector_category_box4 selectorLv4 areaBox">'
				+'		  <div class="selector_category_items" class="areaItems">'
				+'		  </div>'
				+'		</div>'
				+'	  </div>'
				+'	</div>'
				+'  </div>'
				+'</div>'
	};

	var SP = Selector.prototype;


	/**
	* 初始化Selector
	*/
	// SP.initSelector = function ( cfg ) {

	// };

	/**
	 * 初始化数据
	 */
	SP.initData = function (v) {
		var options = this.OPTIONS;
		var config  = this.CONFIG;
		options.dicData = config.type === 'area' ? dicOfArea : config.type === 'position' ? dicOfPost : dicOfInst;
		options.selectedItems = {};
		if ( typeof v === 'string' ) {
			if ( $.trim(v).length === 0 ) {
				return;
			} else {
				v = v.split(',');
				options.originalValueLength = v.length;
			}
		}
		if ( config.type !== 'area' ) {
			/**
			*   数据格式化为： { '1000(大类id)' : [1001,1002,1003] (子类id)), '2000' : [2001,2002,2003] }
			*/
			var cacheKey;
			for ( var i = 0, l = v.length; i < l; i++ ) {
				cacheKey = this.getPID( v[i] );
				if ( cacheKey ) {
					if ( options.selectedItems[cacheKey] ) {
						options.selectedItems[cacheKey].push( v[i] );
					} else{
						options.selectedItems[cacheKey] = [];
						options.selectedItems[cacheKey].push( v[i] );
					}
				}
			}

		} else {
			/**
			* { '省id' : { list : [市id...], '市id1' : [镇区id...],  '市id2' : [镇区id...] } }
			*/
			var pv, cv;
			for ( var i = 0, l = v.length; i < l; i++ ) {
				pv = this.getPID(v[i])
				cv = this.getCID(v[i])
				if ( !options.selectedItems[pv] ) {
					options.selectedItems[pv] = {};	
				}
				if ( !options.selectedItems[pv][cv] ) {
					options.selectedItems[pv][cv] = [];	
				}
				options.selectedItems[pv][cv].push( v[i] );
			}

		}
		//console.log('已选择：',options.selectedItems)
	};

	/**
	* 渲染模板
	*/
	SP.renderTemplate = function () {
		// body...
		var config  = this.CONFIG;
		var options = this.OPTIONS;
		var $bodyTemplate = $(util.template( config.bodyTpl , { data : config , dic : options.dicData , options : options}) );
		$('body').append($bodyTemplate);
		$('.currentNum', this.selector).text( this.getItemsLength(options.selectedItems) );
	};

	/**
	* 绑定事件
	*/
	SP.initEvent = function () {
		// body...
		var config  = this.CONFIG;
		var options = this.OPTIONS;
		var SELECTOR = this;
		// 初始化iscroll组件
		SELECTOR.selector   = $('#'+config.id);
		$('#'+config.id+' .selectorLv1').length && (SELECTOR.iscrollLv1 = new iscroll('#'+config.id+' .selectorLv1'));
		$('#'+config.id+' .selectorLv2').length && (SELECTOR.iscrollLv2 = new iscroll('#'+config.id+' .selectorLv2'));
		$('#'+config.id+' .selectorLv3').length && (SELECTOR.iscrollLv3 = new iscroll('#'+config.id+' .selectorLv3'));
		$('#'+config.id+' .searchResult').length && (SELECTOR.searchScroll = new iscroll('#'+config.id+' .searchResult'));

		var echoText = function ($t, v) {
			if ( !!~'INPUT|TEXTAREA'.indexOf( $(config.textId)[0].nodeName ) ) {
				$t.val(v);
			} else {
				$t.text(v);
			}
		}

		var isSelected = function (pv,cv,tv) {
			if ( config.type === 'area' ) {
				var pid = SELECTOR.getPID(cv);
				var cid = SELECTOR.getCID(cv);
				if ( tv ) {
					if ( options.selectedItems[pid] && options.selectedItems[pid][cid] ) {
						return !!~options.selectedItems[pid][cid].indexOf(tv);
					}
				} else {
					if ( options.selectedItems[pid] && options.selectedItems[pid][cid] ) {
						return !!options.selectedItems[pid][cid].length;
					}
				}
			} else {
				if ( options.selectedItems[pv] ) {
					return !!~options.selectedItems[pv].indexOf(cv);
				} else{
					return false
				}
			}
		};

		var isCitySelectedNoTown = function (v) {
			var pid = SELECTOR.getPID(v);
			var cid = SELECTOR.getCID(v);
			return options.selectedItems[pid] && options.selectedItems[pid][cid] && !!~options.selectedItems[pid][cid].indexOf(v);
		};

		var countSelectedPvLength = function (pv) {
			var spv = options.selectedItems[pv];
			var rs  = 0;
			for ( var k in spv ) {
				if ( !spv.hasOwnProperty(k) ) continue;
				rs += spv[k].length;
			}
			return !!rs;
		};

		var removeUnlimitedItem = function() {
			var $unlimitedPv = $(SELECTOR.iscrollLv1.scroller).find( '[data-pv="0"]' );
			if ( $unlimitedPv.hasClass("subSelected") ) {
				SELECTOR.delAreaItem(0);
				$unlimitedPv.removeClass("subSelected");
				$(SELECTOR.iscrollLv2.scroller).find( '[data-cv="0"]' ).removeClass("selected")
			}
		};

		var handlers = {

			tapPvItems : function (e) {
				var cacheHtml = [];
				var $that = $(this);
				var pv = $that.data('pv');
				var $scroller = $(SELECTOR.iscrollLv2.scroller);
				var $thisScroller = $scroller.children('ul[data-pv="'+pv+'"]');

				$that.addClass('active').siblings('.active').removeClass('active')
				$scroller.children().addClass('hide');
				if ( $thisScroller.length ) {
					$thisScroller.removeClass('hide');
				} else{
					var childData = config.type === 'industry' ? options.dicData.category[pv]['list'] : pv === 'hot' ? options.dicData[pv] : options.dicData[pv]['child'] ;
					var itemTpl = config.type === 'area' ? config.cvItemTpl : config.itemTpl;
					cacheHtml.push('<ul data-pv="'+ pv +'">');

					if ( config.type !== 'industry' && config.type !== 'area' && pv !== 'hot' && !config.onlyChild) {
						cacheHtml.push( itemTpl.replace( '{{isAll}}', 'data-all="1"' )
								.replace('{{key}}', pv)
								.replace('{{name}}', (config.lang === 'cn' ? '所有' : 'All ')+options.dicData[pv][config.lang])
								.replace('{{selected}}', isSelected( pv, pv ) ? 'selected' : '' )
								.replace('{{hide}}', 'hide')
						);
					}
					if ( childData ) {
						var isHideTown = config.type === 'area' && !config.showTown ? true : false;
						for ( var i = 0, l = childData.length; i < l; i++ ) {
							cacheHtml.push( itemTpl.replace( '{{isAll}}', '' )
												.replace('{{key}}', childData[i])
												.replace('{{name}}',options.dicData[childData[i]][config.lang] )
												.replace( '{{selected}}', isSelected( pv,childData[i] ) ? ( config.type !== 'area' ? 'selected' : config.showTown ? 'subSelected' : isCitySelectedNoTown(childData[i]) ? 'selected' : '') : '' ) 
												.replace('{{hide}}', config.type === 'area' ? ( config.showTown && options.dicData[childData[i]]['child'] ? '' : 'hide' ) : ( options.dicData[childData[i]]['child'] ? '' : 'hide' ) ) 
											);
						}
					}

					cacheHtml.push('</ul>')
					$scroller.append( cacheHtml.join('') );
					if ( pv !== 'hot' && !options.selectedItems[pv] ) {
						config.type === 'area' ? ( options.selectedItems[pv] = {} ) : ( options.selectedItems[pv] = [] );
					}
				}
				SELECTOR.iscrollLv2.refresh();
			},
			tapCvItems : function (e) {

				var $that = $(this);
				var cv = $that.data('cv');
				var pv = $that.parent().data('pv');
				var config  = SELECTOR.CONFIG;
				var options = SELECTOR.OPTIONS;
				var isAll   = !!$that.data('all');
				!options.selectedItems[pv] && (options.selectedItems[pv] = []);
				var selectorPvItems =  options.selectedItems[pv];

				// 已选中则取消选中状态
				if ( $that.hasClass('selected') ) {
					$that.removeClass('selected');
					if ( !$that.siblings('.selected').length ) {
						$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ $that.parent().data('pv') +'"]' ).removeClass('subSelected');
					}
					if ( isAll ) {
						selectorPvItems.splice( selectorPvItems.indexOf(pv), 1 );
					} else{
						selectorPvItems.splice( selectorPvItems.indexOf(cv), 1 );
					}
				} else{

					if ( config.selectType === 'single' ) {
						var $selected = $(".selector_item.selected", SELECTOR.iscrollLv2.scroller);
						$selected.removeClass('selected');
						$('[data-pv="' + SELECTOR.getPID( $selected.data('cv') ) + '"]', SELECTOR.iscrollLv1.scroller).removeClass('subSelected');
						$that.addClass('selected');
						$('[data-pv="' + SELECTOR.getPID( cv ) + '"]', SELECTOR.iscrollLv1.scroller).addClass('subSelected');
						options.selectedItems = {};
						options.selectedItems[pv] = [];
						options.selectedItems[pv].push(cv);
						return;
					}

					pv == 0 && handlers.clearSelector();

					// 未选中则添加选中状态
					if ( SELECTOR.getItemsLength(options.selectedItems) > config.max-1) {
						if ( isAll && $that.siblings('.selected').length > 0 ) {
							selectorPvItems.length = 0;
							selectorPvItems.push(pv);
							$that.addClass('selected');
							$that.siblings('.selected').removeClass('selected');
						} else if ( !isAll && $that.siblings('[data-all]').hasClass('selected') ) {
							selectorPvItems.splice( selectorPvItems.indexOf(pv), 1 );
							selectorPvItems.push(cv);
							$that.addClass('selected');
							$that.siblings('[data-all]').removeClass('selected');
						} else{
							SELECTOR.warnTip();
						}
						return false;
					}

					if ( isAll ) {
						selectorPvItems.length = 0;
						selectorPvItems.push(pv);
						$that.addClass('selected');
						$that.siblings('.selected').removeClass('selected');
					} else{
						options.selectedItems[0] && ( options.selectedItems[0].length = 0 )
						$(SELECTOR.iscrollLv1.scroller).find('[data-pv="0"]').removeClass('subSelected');
						$(SELECTOR.iscrollLv1.scroller).find('[data-pv="000"]').removeClass('subSelected');
						$(SELECTOR.iscrollLv2.scroller).find('[data-cv="0"]').removeClass('selected');

						var pvIndex = selectorPvItems.indexOf(pv);
						if ( !!~pvIndex ) {
							selectorPvItems.splice( pvIndex, 1 );
							$that.siblings('[data-all]').removeClass('selected');
						}
						selectorPvItems.push(cv);
						$that.addClass('selected');
					}

					if ( $that.siblings('.selected').length === 0 ) {
						$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ $that.parent().data('pv') +'"]' ).addClass('subSelected');
					}
				}

				//console.log(options.selectedItems)
			},
			tapAreaCvItems : function (e) {
				var $that = $(this);
				var cacheHtml = [];
				var cv = $that.data('cv');
				var pv = $that.parent().data('pv');
				var config  = SELECTOR.CONFIG;
				var options = SELECTOR.OPTIONS;
				var isAll   = !!$that.data('all');
				if ( pv === 'hot' && cv !== 'hot' ) {
					pv = SELECTOR.getPID(cv);
					!options.selectedItems[pv] && (options.selectedItems[pv] = {});
				}
				var selectorPvItems = options.selectedItems[pv];
				$that.siblings().removeClass('active');

				if ( cv === '0' ) {

					if ( !$that.hasClass('selected') ) {
						handlers.clearSelector();
						$that.addClass('selected');
						$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ pv +'"]' ).addClass('subSelected');
						SELECTOR.addAreaItem(cv);
					} else {
						handlers.clearSelector();
					}

					return;
				}

				if ( isAll ) {
					var $scroller = $(SELECTOR.iscrollLv3.scroller);
					var $bodyMainBox = SELECTOR.selector.find('.bodyMainBox');

					removeUnlimitedItem();

					if ( cv === 'hot' ) {
						if ( $bodyMainBox.hasClass('active_level') ) {
							$bodyMainBox.removeClass('active_level');
						}   
						return;
					}

					if ( $bodyMainBox.hasClass('active_level') ) {
						$bodyMainBox.removeClass('active_level');
						return;
					}
					$scroller.children().addClass('hide');

					if ( $that.hasClass('selected') ) {
						SELECTOR.delAreaItem(pv);
						$that.removeClass('selected');
						$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ pv +'"]' ).removeClass('subSelected');
					} else {

						if ( SELECTOR.getItemsLength(options.selectedItems) > config.max-1 && !countSelectedPvLength(pv) ) {
							SELECTOR.warnTip();
							return;
						}

						SELECTOR.addAreaItem(pv);
						$that.addClass('selected');
						$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ pv +'"]' ).addClass('subSelected');
						$that.siblings('.selected').removeClass('selected');
						$that.siblings('.subSelected').removeClass('subSelected').each(function () {
							$scroller.find( '[data-cv="'+$(this).data('cv')+'"]' ).children('.selected').removeClass('selected');
						});
					}
				} else {
					// 没有镇区
					if ( !config.showTown || (options.dicData[cv] && !options.dicData[cv].child) ) {

						var toggleSubSelected = function ($t) {
							var $scroller1 = $(SELECTOR.iscrollLv1.scroller);
							if ( !$t.siblings('.selected .subSelected').length && !$t.hasClass('selected') ) {
								$scroller1.find( '[data-pv="'+ pv +'"]' ).removeClass('subSelected');
							} else {
								var $subPv = $scroller1.find( '[data-pv="'+ pv +'"]' );
								var $pvAll = $that.siblings( '[data-all]' );
								$subPv.addClass('subSelected');
								if ( $pvAll.hasClass('selected') ) {
									$subAll.removeClass('selected');
									SELECTOR.delAreaItem( $pvAll.data('pv') );
								}
							}
						};

						// 已选中则取消选中状态
						if ( $that.hasClass('selected') ) {
							$that.removeClass('selected');
							$('[data-cv="'+ cv +'"]', SELECTOR.iscrollLv2.selector).removeClass('selected');
							toggleSubSelected( $that );
							SELECTOR.delAreaItem(cv);
						} else{
							removeUnlimitedItem();
							// 未选中则添加选中状态

							if ( SELECTOR.getItemsLength(options.selectedItems) > config.max-1) {
								if ( isAll && $that.siblings('.selected .subSelected').length > 0 ) {
									SELECTOR.addAreaItem(cv)
									$that.addClass('selected');
									$that.siblings('.selected').removeClass('selected');

								} else if ( !isAll && $that.siblings('[data-all]').hasClass('selected') ) {
									SELECTOR.addAreaItem( cv )
									$that.addClass('selected');
									$that.siblings('[data-all]').removeClass('selected');
								} else{
									SELECTOR.warnTip();
								}
								return false;
							}

							if ( isAll ) {
								SELECTOR.addAreaItem(cv);
								$that.addClass('selected');
								$that.siblings('.selected').removeClass('selected');
							} else{
								$that.siblings('[data-all]').removeClass('selected');
								SELECTOR.addAreaItem( cv )
								$that.addClass('selected');
								$that.parent().data('pv') === 'hot' &&  $('[data-pv="'+ SELECTOR.getPID(cv) +'"] [data-cv="'+ cv +'"]').addClass('selected');
							}
							toggleSubSelected( $that );
						}
						//console.log( options.selectedItems )


					} else {
						// 有镇区则显示第三级
						var $scroller = $(SELECTOR.iscrollLv3.scroller);
						var $thisScroller = $scroller.children('ul[data-cv="'+cv+'"]');
						$that.addClass('active');
						$scroller.children().addClass('hide');
						if ( $thisScroller.length ) {
							SELECTOR.selector.find('.bodyMainBox').addClass('active_level');
							$thisScroller.removeClass('hide');
						} else{
							cacheHtml.push('<ul data-cv="'+ cv +'">');

							cacheHtml.push( config.tvItemTpl.replace( '{{isAll}}', 'data-all="1"' )
									.replace('{{key}}', cv)
									.replace('{{name}}', (config.lang === 'cn' ? '所有' : 'All ')+options.dicData[cv][config.lang])
									.replace('{{selected}}', isSelected( pv, cv, cv ) ? 'selected' : '' )
							);

							var townListData = options.dicData[cv].child;
							if ( townListData ) {
								for ( var i = 0, l = townListData.length; i < l; i++ ) {
									cacheHtml.push( config.tvItemTpl.replace( '{{isAll}}', '' )
													.replace( '{{key}}', townListData[i] )
													.replace( '{{name}}', options.dicData[ townListData[i] ][config.lang] )
													.replace('{{selected}}', isSelected( pv, cv ,townListData[i]) ? 'selected' : '' )
												);
								}
							}
							cacheHtml.push('</ul>')
							$scroller.append( cacheHtml.join('') );
							SELECTOR.selector.find('.bodyMainBox').addClass('active_level');
							if ( !selectorPvItems[cv] ) selectorPvItems[cv] = [];
						}
						SELECTOR.iscrollLv3.refresh();
					}
				}
			},
			tapAreaTvItems : function (e) {
				var $that = $(this);
				var config  = SELECTOR.CONFIG;
				var options = SELECTOR.OPTIONS;
				var cv = $that.parent().data('cv');
				var pv = SELECTOR.getPID(cv);
				var tv = $that.data('tv');
				var isAll = $that.data('all');
				var selectorCvItems = options.selectedItems[pv][cv];

				var toggleSubSelected = function ($t) {
					var $scroller2 = $(SELECTOR.iscrollLv2.scroller);
					if ( !$t.siblings('.selected').length && !$t.hasClass('selected')) {
						$scroller2.find( '[data-cv="'+ cv +'"]' ).removeClass('subSelected');
						if ( !$scroller2.find('.selected .subSelected').length ) {
							$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ pv +'"]' ).removeClass('subSelected');
						}
					} else {
						var $subCv = $scroller2.find( '[data-pv="'+ pv +'"] [data-cv="'+ cv +'"]' );
						var $subAll = $subCv.siblings( '[data-all]' );
						var $hotCv = $scroller2.find( '[data-pv="hot"] [data-cv="'+ cv +'"]' );
						$hotCv.addClass('subSelected');
						$subCv.addClass('subSelected');
						if ( $subAll.hasClass('selected') ) {
							$subAll.removeClass('selected');
							SELECTOR.delAreaItem( $subAll.data('cv') );
						}
						$(SELECTOR.iscrollLv1.scroller).find( '[data-pv="'+ pv +'"]' ).addClass('subSelected');
					}
				};

				// 已选中则取消选中状态
				if ( $that.hasClass('selected') ) {
					$that.removeClass('selected');
					toggleSubSelected( $that );
					if ( isAll ) {
						SELECTOR.delAreaItem(tv);
					} else{
						SELECTOR.delAreaItem(tv);
					}
				} else{
					// 未选中则添加选中状态
					removeUnlimitedItem();
					if ( SELECTOR.getItemsLength(options.selectedItems) > config.max-1) {
						if ( isAll && $that.siblings('.selected').length > 0 ) {
							SELECTOR.addAreaItem(cv)
							$that.addClass('selected');
							$that.siblings('.selected').removeClass('selected');
						} else if ( !isAll && $that.siblings('[data-all]').hasClass('selected') ) {
							SELECTOR.addAreaItem(tv)
							$that.addClass('selected');
							$that.siblings('[data-all]').removeClass('selected');
						} else{
							SELECTOR.warnTip();
						}
						return false;
					}

					if ( isAll ) {
						SELECTOR.addAreaItem(cv);
						$that.addClass('selected');
						$that.siblings('.selected').removeClass('selected');
					} else{
						$that.siblings('[data-all]').removeClass('selected');
						SELECTOR.addAreaItem(tv)
						$that.addClass('selected');
					}
					toggleSubSelected( $that );
				}
				//console.log( options.selectedItems )

			},
			tapAreaLvItems : function (e) {
				var $that = $(this);
				var lv	= $that.data('lv');
				var pv	= SELECTOR.getPID(lv);
				var cv	= SELECTOR.getCID(lv);
				var tLength = (lv+'').length;
				var config  = SELECTOR.CONFIG;
				var options = SELECTOR.OPTIONS;

				if ( $that.hasClass('selected') ) {
					$that.removeClass('selected');
					if ( tLength === 2 ) {
						$('[data-pv="'+ lv +'"]', SELECTOR.iscrollLv1.scroller).removeClass('subSelected');
						$('[data-cv="'+ lv +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
					} else if ( tLength === 4 ) {
						var $cv = $('[data-cv="'+ cv +'"]', SELECTOR.iscrollLv2.scroller);
						var $tv = $('[data-tv="'+ cv +'"]', SELECTOR.iscrollLv3.scroller);
						if ( $tv.length ) {
							$cv.removeClass('subSelected');
							$tv.removeClass('selected');
						} else {
							$cv.removeClass('selected');
						}
						if ( !$cv.siblings('.subSelected .selected').length ) {
							$('[data-pv="'+ pv +'"]', SELECTOR.iscrollLv1.scroller).removeClass('subSelected');
						}
					} else if ( tLength === 6 ) {
						var $tv = $('[data-tv="'+lv+'"]', SELECTOR.iscrollLv3.scroller);
						$tv.removeClass('selected');
						if ( !$tv.siblings('.selected').length ) {
							var $cv = $('[data-cv="'+ cv +'"]', SELECTOR.iscrollLv2.scroller);
							$cv.removeClass('subSelected');
							if ( !$cv.siblings('.subSelected').length ) {
								var $pv = $('[data-pv="'+ pv +'"]', SELECTOR.iscrollLv1.scroller);
								$pv.removeClass('subSelected');
							}
						}
					}
					SELECTOR.delAreaItem(lv);
				} else{
					removeUnlimitedItem();
					$that.addClass('selected');
					if ( tLength === 2 ) {
						$('[data-pv="'+ lv +'"]', SELECTOR.iscrollLv1.scroller).addClass('subSelected');
						$('[data-cv="'+ lv +'"]', SELECTOR.iscrollLv2.scroller).addClass('selected').siblings().removeClass('subSelected');
						$('[data-cv="'+ lv +'"]', SELECTOR.iscrollLv3.scroller).children().removeClass('selected');
					} else {
						if ( tLength === 4 && !options.dicData[lv].child ) {
							$('[data-cv="'+ lv +'"]', SELECTOR.iscrollLv2.scroller).addClass('selected');
							$('[data-pv="'+pv +'"]', SELECTOR.iscrollLv1.scroller).addClass('subSelected');
						} else {
							var $tv = $('[data-tv="'+lv+'"]', SELECTOR.iscrollLv3.scroller);
							$tv.addClass('selected');
							var $cv = $('[data-cv="'+ cv +'"]', SELECTOR.iscrollLv2.scroller);
							$cv.addClass('subSelected');
							var $pv = $('[data-pv="'+ pv +'"]', SELECTOR.iscrollLv1.scroller);
							$pv.addClass('subSelected');
						}
					}
					SELECTOR.addAreaItem(lv);
				}

			},
			delSelectedIcon : function (e) {
				var $that = $(this);
				var sv = $that.find('i').data('sv');
				var pv = SELECTOR.getPID(sv);
				var cv = SELECTOR.getCID(sv);
				var sLength = (sv+'').length;
				if ( sLength === 2 || sLength === 1 ) {
					$('[data-pv="'+ sv +'"]', SELECTOR.iscrollLv1.scroller).removeClass('subSelected');
					$('[data-cv="'+ sv +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
				} else {
					if ( sLength === 4 && !options.dicData[sv].child ) {
						var $cv = $('[data-cv="'+sv+'"]', SELECTOR.iscrollLv2.scroller);
						$cv.removeClass('selected');
						if ( !$cv.siblings('.selected .subSelected').length ) {
							$('[data-pv="'+ pv +'"]', SELECTOR.iscrollLv1.scroller).removeClass('subSelected');
						}
					} else {
						var $tv = $('[data-tv="'+sv+'"]', SELECTOR.iscrollLv3.scroller);
						$tv.removeClass('selected');
						if ( !$tv.siblings('.selected').length ) {
							var $cv = $('[data-cv="'+ cv +'"]', SELECTOR.iscrollLv2.scroller);
							$cv.removeClass('subSelected');
							if ( !$cv.siblings('.subSelected').length ) {
								var $pv = $('[data-pv="'+ pv +'"]', SELECTOR.iscrollLv1.scroller);
								$pv.removeClass('subSelected');
							}
						}
					}
				}
				$that.remove();
				SELECTOR.delAreaItem( sv );
			},
			clearSelector : function (e) {
				$('.selectorBody .subSelected',SELECTOR.selector).removeClass('subSelected');
				$('.selectorBody .selected',SELECTOR.selector).removeClass('selected');
				$('.searchResult .selected',SELECTOR.selector).removeClass('selected');
				if ( SELECTOR.CONFIG.type === 'area' ) {
					$('.selectedItems',SELECTOR.selector).html('');
					for ( var m in options.selectedItems ) {
						if ( !options.selectedItems.hasOwnProperty( m ) ) continue;
						for ( var mk in options.selectedItems[m] ) {
							if ( !options.selectedItems[m].hasOwnProperty( mk ) ) continue;
							options.selectedItems[m][mk].length = 0;
						}
					}
				} else {
					for ( var m in options.selectedItems ) {
						if ( !options.selectedItems.hasOwnProperty( m ) ) continue;
						options.selectedItems[m].length = 0;
					}
				}
				$('.currentNum',SELECTOR.selector).text(0);
				$('.selector_checker_tip', SELECTOR.selector).removeClass('hide');
				//console.log(options.selectedItems)
			},
			saveSelector : function () {
				var options = SELECTOR.OPTIONS;
				var values  = [];
				var texts   = [];
				if ( SELECTOR.CONFIG.type === 'area' ) {
					for ( var k in options.selectedItems ) {
						if ( !options.selectedItems.hasOwnProperty(k) ) continue;
						for ( var mk in options.selectedItems[k] ) {
							if ( !options.selectedItems[k].hasOwnProperty(mk) ) continue;
							values = values.concat( options.selectedItems[k][mk] )
						}
					}
					for ( var i = 0, l = values.length; i < l; i++ ) {
						texts.push(SELECTOR.getText(values[i]));
					}
				} else {
					for ( var k in options.selectedItems ){
						if(k=='000') continue;
						if ( !options.selectedItems.hasOwnProperty(k) ) continue;
						var cacheValue = options.selectedItems[k];
						values =  values.concat(cacheValue)
						for ( var i = 0, l = cacheValue.length; i<l; i++  ) {
							texts.push(SELECTOR.getText(cacheValue[i]));
						}
					}
				}
				//console.log(options.selectedItems)
				var ids = values.join(',');
				var txt = texts.join(',');
				$(config.valueId).val( ids )
				echoText($(config.textId), txt)
				options.selectedItemsId = ids;
				options.selectedItemsText = txt;
				if ( SELECTOR.CONFIG.type === 'area' ) {
					var cacheStorage = uiLocalStorage['lastSelectedItems'] ? uiLocalStorage['lastSelectedItems'].split(',') : []; //? uiLocalStorage['lastSelectedItems'].split(',').slice(0, 5-values.length).join(',') : '';
					// 如果选择了不限就需要排除不限
					var unlimitedIndex = values.indexOf(0);
					!!~unlimitedIndex && values.splice( unlimitedIndex, 1 );
					if ( cacheStorage ) {
						values.forEach(function(v){
							var vIndex = cacheStorage.indexOf(v);
							if ( !!~vIndex ) {
								cacheStorage.splice(vIndex, 1);
							}
						})
					}
					//cacheStorage.length && values.push(cacheStorage);
					cacheStorage = values.concat(cacheStorage);
					uiLocalStorage['lastSelectedItems'] = cacheStorage.slice(0, 5);
				}
				SELECTOR.save(this);
				setTimeout(function () {
					SELECTOR.close(SELECTOR);
				}, 300)
			},
			delAreaManualInput : function () {
				$(this).addClass('hide').siblings('input').val('');

			},
			setAreaManualInput : function () {
				var value = $(this).siblings('input').val();
				if ( $.trim( value ).length ) {
					$(SELECTOR.CONFIG.manualId).val( value );
					echoText( $(SELECTOR.CONFIG.textId), value );
					$(SELECTOR.CONFIG.valueId).val( '' );
					setTimeout(function () {
						SELECTOR.close(SELECTOR);
					}, 300)
				}
			},
			tapCurrentLocation : function () {//定位城市选择
				var city = $(this).text();
				//city = '厦门市';
				var dic = options.dicData;
				var cid = null;
				if ( !$.trim(city).length ) return;
				for ( var k in dic ) {
					if ( dic.hasOwnProperty(k) ) {
						if ( dic[k]['cn'] === city ) cid = k;
					}
				}
				if ( cid ) {
					$('[data-pv="'+ SELECTOR.getPID(cid) +'"]', SELECTOR.iscrollLv1.scroller).trigger('tap');
					$('[data-cv="'+ cid +'"]', SELECTOR.iscrollLv2.scroller).trigger('tap');
				}
			},
			toggleInputCloseBtn : function () {
				var $that = $(this);
				if ( $that.val().length > 0 ) {
					$that.siblings('.selector_search_del').removeClass('hide')
				} else {
					$that.siblings('.selector_search_del').addClass('hide')
				}
			}
		};

		// 输入框关闭按钮
		SELECTOR.selector.on('input', '.selector_search_input', handlers.toggleInputCloseBtn);

		// 清空搜索框内容
		SELECTOR.selector.on('tap', '.clearSelector', handlers.clearSelector);

		// 保存选项
		SELECTOR.selector.on('singleTap', '.save', handlers.saveSelector);

		// 搜索
		if ( config.search && config.type !== 'area' ) {
			SELECTOR.search();
			SELECTOR.selector.on('tap', 'document', function () {
				if ( !$(this).hasClass('searchInput') ) $('.searchInput', SELECTOR.selector);
			})
		}

		// $(config.textId).on('tap',function(){
		//	 SELECTOR.open(SELECTOR);
		// });


		SELECTOR.selector.on('singleTap', '.back', function () {
			setTimeout(function () {
				SELECTOR.close(SELECTOR);
			}, 300)
		});


		// 第一级点击事件
		SELECTOR.selector.on('tap', '.selectorBody li[data-pv]', handlers.tapPvItems);

		// 二级点击事件
		SELECTOR.selector.on('tap', '.selectorBody li[data-cv]', config.type === 'area' ? handlers.tapAreaCvItems : handlers.tapCvItems);

		// 三级点击事件
		if ( config.type === 'area' ) {
			SELECTOR.selector.on('tap', '.selectorBody li[data-tv]', handlers.tapAreaTvItems);
			SELECTOR.selector.on('tap', '.selectorBody li[data-lv]', handlers.tapAreaLvItems);
			SELECTOR.selector.on('tap', '.selectedIcon', handlers.delSelectedIcon);
			SELECTOR.selector.on('tap', '.getLocation', function(){ SELECTOR.getLocation() });
			SELECTOR.selector.on('tap', '.shade_box', function () {
				$('.bodyMainBox ', SELECTOR.selector).removeClass('active_level');
				$('li.active',SELECTOR.iscrollLv2.scroller).removeClass('active');
			});
			// 定位
			SELECTOR.getLocation();
			SELECTOR.selector.on('tap', '.selected_area', handlers.tapCurrentLocation);
			//SELECTOR.selector.on('tap', '.selector_search_del', handlers.delAreaManualInput);
			//SELECTOR.selector.on('tap', '.selector_search_ok', handlers.setAreaManualInput);
			if ( !options.lastSelectedItems || !options.lastSelectedItems.length ) {
				$('[data-pv="hot"]',SELECTOR.iscrollLv1.scroller).trigger('tap');
			}
		}
	};

	SP.getCID = function (v) {
		if (v == '') return 0;
		if (v.length==4 && v%100==0){
			return 0;
		}
		if (v.length==4 && v%100!=0){
			return v;
		}

		if (v.length==6){
			var pid_1 = this.OPTIONS.dicData[v].pid;

			//zy 特殊处理 北京1100， 重庆5000，上海3100, 天津1200
			if(pid_1==1100 || pid_1==5000 || pid_1==3100 || pid_1==1200) return v;
			return pid_1;
		}
		//zy
		if(this.CONFIG.type === 'industry'){
			return v;
		}
		if(this.CONFIG.type === 'position'){
			return v;
		}
		return 0;
	}


	SP.getPID = function (v) {
		if ( !v ) {
			if ( v != 0 ) return false;
		}
		if ( this.CONFIG.type === 'position' ) {
			//return ( v + '' ).slice(0,2) + '00';
			//zy
			if(!v) return;
			if(v.length<=2 && v.length!=0){
				return v;
			}

			return this.OPTIONS.dicData[v].pid;

		} else if ( this.CONFIG.type === 'industry' ) {
			var category = this.OPTIONS.dicData.category;
			for (var i = category.list.length - 1; i >= 0; i--) {
				if ( !!~category[category.list[i]].list.indexOf(v) ) {
					return category.list[i];
				}
			};
		} else {
			if (v.length==4 && v%100!=0){
				return this.OPTIONS.dicData[v].pid;
			}
			if (v.length==6){
				cv=this.OPTIONS.dicData[v].pid;
				if (cv.length==4 && cv%100==0) return cv;
				return this.OPTIONS.dicData[cv].pid;
			}
			return 0;
		}

	};

	/**
	* init
	*/
	SP.init = function (cfg) {
		//this.initData( '20' );
		//this.initData( '1011,1013,1001,1504,1508' );
		//this.initData('13,14,43,11')
		//this.initData( '2041,30,3101,3010,3001' );
		// 渲染模板
		this.renderTemplate();
		// 绑定事件
		this.initEvent();
		this.CONFIG.onInit && this.CONFIG.onInit(this);
	};

	SP.warnTip = function () {
		var config = this.CONFIG;
		alert(config.description[config.lang]['excess'].replace('{{num}}',config.max));
	}

	/**
	 * 打开选择器
	 */
	SP.open = function () {
		this.CONFIG.onShow && this.CONFIG.onShow(this);
		this.selector.removeClass('hide');
		this.iscrollLv1 && this.iscrollLv1.refresh();
		this.iscrollLv2 && this.iscrollLv2.refresh();
		this.iscrollLv3 && this.iscrollLv3.refresh();
	};

	/**
	 * 关闭选择器
	 */
	SP.close = function () {
		this.CONFIG.onHide && this.CONFIG.onHide(this);
		this.selector.addClass('hide');
	};

	/**
	 * 保存
	 */
	SP.save = function () {
		this.CONFIG.onSave && this.CONFIG.onSave(this);
	};

	/**
	 * 获取文本
	 */
	SP.getText = function (v) {
		var data = this.OPTIONS.dicData[v] || {};
		return data[this.CONFIG.lang] || ( v == 0 ? ( this.CONFIG.lang === 'en' ? 'unlimited' : '不限' ) : '' );
	};

	/**
	* 添加选项
	*/
	SP.addAreaItem = function (v) {
		var SELECTOR = this;
		var cvIndex = 0;
		var vLength = (v+'').length
		var options = SELECTOR.OPTIONS;
		var config  = SELECTOR.CONFIG;
		var selectedItems = options.selectedItems;
		var pv = SELECTOR.getPID(v);
		var cv = SELECTOR.getCID(v);
		!selectedItems[pv] && (selectedItems[pv] = {});
		!selectedItems[pv][cv] && (selectedItems[pv][cv] = []);
		if ( vLength === 1 ) {
			if ( !selectedItems[0] ) {
				selectedItems[0] = {};
			}
			selectedItems[0][0] = [];
			selectedItems[0][0].push(0);
		} else if ( vLength === 4 && v%100 == 0 ) {
			if ( selectedItems[pv] ) {
				var cachePv = selectedItems[pv];
				for ( var k in cachePv ) {
					if ( cachePv.hasOwnProperty(k) ) {
						for ( var i = 0, l = cachePv[k].length; i < l; i++ ) {
							if ( cachePv[k][i] ) {
								$('[data-lv="'+ cachePv[k][i] +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
								$('.selectedItems [data-sv="'+cachePv[k][i]+'"]', SELECTOR.selector).closest('li').remove();	
								!config.showTown && $('[data-pv="hot"] [data-cv="'+ cachePv[k][i] +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
								//SELECTOR.delAreaItem( cachePv[k][i] );
							}
						}
						cachePv[k].length = 0;
					}
				}
			} else {
				selectedItems[pv] = {};
			}
			selectedItems[pv][cv] = [];
			selectedItems[pv][cv].push(v);
		} else if ( vLength === 4 && v%100 != 0 ) {
			if ( selectedItems[pv] && selectedItems[pv][pv] ) {
				var cacheCv = selectedItems[pv][pv];
				if ( cacheCv[0] ) {
					$('[data-lv="'+ cacheCv[0] +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
					$('.selectedItems [data-sv="'+cacheCv[0]+'"]', SELECTOR.selector).closest('li').remove();
					!config.showTown && $('[data-pv="hot"] [data-cv="'+ cacheCv[0] +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
					SELECTOR.delAreaItem( cacheCv[0] );
				}
			}

			if ( selectedItems[pv] && selectedItems[pv][cv] ) {
				for ( var i = 0, l = selectedItems[pv][cv].length; i < l ; i++ ) {
					$('[data-lv="'+ selectedItems[pv][cv][i] +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
					$('.selectedItems [data-sv="'+selectedItems[pv][cv][i]+'"]', SELECTOR.selector).closest('li').remove();
					!config.showTown && $('[data-pv="hot"] [data-cv="'+ v +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
				}
				selectedItems[pv][cv].length = 0;
			}
			!config.showTown && $('[data-pv="hot"] [data-cv="'+ v +'"]', SELECTOR.iscrollLv2.scroller).addClass('selected');
			selectedItems[pv][cv].push(v);
		}else if ( vLength === 6 ) {
		//console.log('add:'+v+':'+cv+':'+pv);
		//console.log(selectedItems);
			if ( selectedItems[pv] && selectedItems[pv][pv] && selectedItems[pv][cv].length ) {
				//console.log(1);
				$('[data-lv="'+ pv +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
				$('.selectedItems [data-sv="'+pv+'"]', SELECTOR.selector).closest('li').remove();
				SELECTOR.delAreaItem( pv );
			}

			if ( selectedItems[pv] && selectedItems[pv][cv] && !!~selectedItems[pv][cv].indexOf(cv) ) {
				//console.log(2);
				$('[data-lv="'+ cv +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
				$('.selectedItems [data-sv="'+cv+'"]', SELECTOR.selector).closest('li').remove();
				SELECTOR.delAreaItem( cv );
			}

			selectedItems[pv][cv].push(v);
		}
		$('.selectedItems', SELECTOR.selector).append( $(config.selectedTpl.replace('{{key}}', v).replace('{{name}}', SELECTOR.getText(v))) );
		$('[data-lv="'+ v +'"]', SELECTOR.iscrollLv2.scroller).addClass('selected');
		$('.currentNum', SELECTOR.selector).text( SELECTOR.getItemsLength(options.selectedItems) );
		$('.selector_checker_tip', SELECTOR.selector).addClass('hide');
		//console.log('add', selectedItems)
	};

	/**
	* 删除选项
	*/
	SP.delAreaItem = function (v) {
		var SELECTOR = this;
		var vLength = (v+'').length;
		var options = SELECTOR.OPTIONS;
		var config  = SELECTOR.CONFIG;
		var selectedItems = options.selectedItems;
		var pv = SELECTOR.getPID(v);
		var cv = SELECTOR.getCID(v);
		if ( selectedItems[pv] && selectedItems[pv][cv] && selectedItems[pv][cv].length ) {
			selectedItems[pv][cv].splice( selectedItems[pv][cv].indexOf(v), 1 );
			$('[data-lv="'+ v +'"]', SELECTOR.iscrollLv2.scroller).removeClass('selected');
			$('.selectedItems [data-sv="'+v+'"]', SELECTOR.selector).closest('li').remove();
		}
		var sLength = SELECTOR.getItemsLength(options.selectedItems);
		$('.currentNum', SELECTOR.selector).text( sLength );
		sLength === 0 && $('.selector_checker_tip', SELECTOR.selector).removeClass('hide');

		//console.log('del', selectedItems)
	}

	/**
	* 定位
	*/
	SP.getLocation = function () {
		var SELECTOR = this;
		$.ajax({
			url : 'http://api.map.baidu.com/location/ip?ak=06ec223c8a6ac65c964249348b51e928&coor=bd09ll',
			timeout : 3000,
			dataType : 'jsonp',
			success : function (json) {
				//var city = json.address.split('|')[2];
				var city = json.content.address_detail.city;
				if ( city ) {
					$('.selected_area', SELECTOR.selector).text( city );
				}
			}
		})

	};
	// 获取已选个数
	SP.getItemsLength = function (v) {
			var rs = 0;
			if ( this.CONFIG.type !== 'area' ) {
				for ( var k in v ) {
					if(k=='000') continue;
					rs += v[k].length;
				}
			} else {
				for ( var k in v ) {
					if ( !v.hasOwnProperty(k) ) continue;
					for ( var nk in v[k] ) {
						if ( !v[k].hasOwnProperty(nk) ) continue;
						rs += v[k][nk].length;
					}
				}
			}
			//console.log(rs)
			return rs;
		};

	/**
	* 搜索
	*/
	SP.search = function () {
		var SELECTOR = this;
		var options = SELECTOR.OPTIONS;
		var config  = SELECTOR.CONFIG;

		SELECTOR.selector.on('tap', '.selector_search_del', function () {
			$(this).addClass('hide');
			SELECTOR.selector.find('.searchInput').val('');
			SELECTOR.selector.find('.searchResult').hide();
			SELECTOR.selector.find('.selectorBody').show();
		});

		SELECTOR.selector.on('tap', '.selector_search_ico', function () {
			var searchText = $(this).siblings('.searchInput').val();
			var searchData = {};
			var selectedArray = [];
			for ( var si in options.selectedItems ) {
				if ( !options.selectedItems.hasOwnProperty(si) ) continue;
				if (options.selectedItems[si].length > 0) {
					selectedArray.push( options.selectedItems[si].join(',') )
				}
			}
			if ( config.type === 'position' ) {
				for ( var p in options.dicData ) {
					if ( options.dicData.hasOwnProperty(p) && options.dicData[p][config.lang] ) {
						var cacheSearchText = options.dicData[p][config.lang];
						if ( !!~cacheSearchText.indexOf(searchText) ) {
							var pId = p == 0 ? 0 :SELECTOR.getPID(p);
							var pText = options.dicData[pId][config.lang];

							if ( !searchData[pText] ) {
								searchData[pText] =[];
							}
							if ( pId == p && p != 0 ) {
								!config.onlyChild && searchData[pText].push({ id: p, text:  pId == p ? (config.lang === 'cn' ? '所有' : 'All ') + cacheSearchText : cacheSearchText })	
							} else {
								searchData[pText].push({ id: p, text: cacheSearchText })
							}

						}
					}
				}

			} else{
				var category = options.dicData.category;
				var cacheIndustry = null;
				for ( var c in category ) {
					if ( category.hasOwnProperty(c) && c !== 'list' ) {
						var pText = category[c][config.lang];
						for (var i = category[c].list.length - 1; i >= 0; i--) {
								cacheIndustry = options.dicData[category[c].list[i]];
								if ( !!~cacheIndustry[config.lang].indexOf(searchText) ) {
									if ( !searchData[pText] ) {
										searchData[pText] =[];
									}
									searchData[pText].push({ id: category[c].list[i], text:  cacheIndustry[config.lang] });
								}
							};
					}
				}
			}

			//console.log(searchData)
			SELECTOR.selector.find('.selectorBody').hide();
			SELECTOR.selector.find('.searchWrapper').html( util.template( config.searchTpl, { data : searchData, selected: selectedArray.join(',') } ) );
			SELECTOR.selector.find('.searchResult').show();
			SELECTOR.searchScroll.refresh();
		});

		SELECTOR.selector.on('tap', '.searchResult [data-cv]', function () {
			var cv = $(this).data('cv');
			var $selectBody = SELECTOR.selector.find('.selectorBody [data-cv="'+ cv +'"]');
			if (  $selectBody.length ) {
				$selectBody.trigger('tap');
			} else{
				var pv = SELECTOR.getPID(cv);
				SELECTOR.selector.find('.selectorBody [data-pv="'+ pv +'"]').trigger('tap');
				SELECTOR.selector.find('.selectorBody [data-cv="'+ cv +'"]').trigger('tap');
			}

			SELECTOR.selector.find('.searchResult [data-cv]').removeClass('selected');
			for ( var si in options.selectedItems ) {
				if ( options.selectedItems.hasOwnProperty(si) ) {
					for (var i = options.selectedItems[si].length - 1; i >= 0; i--) {
						SELECTOR.selector.find('.searchResult [data-cv="'+ options.selectedItems[si][i] +'"]').addClass('selected');
					};
				}
			}
			//console.log(options.selectedItems)
		})
	}

	module.exports = Selector;
});
