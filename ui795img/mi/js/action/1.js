define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,util = require("util")
		,selectorArea = require("ui.selector.area")
	$("#nav_home").addClass("active");
	var out = {
			init : function(){
				out.areaClick()
			}
			,areaClick : function(){
				var selector = new selectorArea({
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
							cacheId = ids[i].slice(0,4);
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

	}
	module.exports = out;
});
