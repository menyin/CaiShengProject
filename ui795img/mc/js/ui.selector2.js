define(function(require, exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,util = require("util")
		,sideBox = require("ui.sideBox")

	var out = function(opt){
/* * * * * * * * * * 内置配置 * * * * * * * * * * */ 
		var type = {
			"area":{
				hot : false
				,children : true
				,dataType : { id:2,cn:0,en:1}
				,langType : "cn"
				,cn:{name:"城市地区"}
				,en:{name:"Area"}
				,template : '<h2>${name}<button class="ok selectorOk">${ok}</button><button class="clear selectorClear">${clear}</button></h2><div class="contentbody area"></div>'
			}
			,"position":{
				hot : false
				,children : true
				,dataType : { id:2,cn:0,en:1}
				,langType : "cn"
				,cn:{name:"职位类别"}
				,en:{name:"Position"}
				,template : '<h2>${name}<button class="ok selectorOk">${ok}</button><button class="clear selectorClear">${clear}</button></h2><div class="contentbody position"></div>'
			}
			,"industry":{
				hot : false
				,children : false
				,dataType : { id:0,cn:1,en:2}
				,langType : "cn"
				,cn:{name:"行业类别"}
				,en:{name:"Industry"}
				,template : '<h2>${name}<button class="ok selectorOk">${ok}</button><button class="clear selectorClear">${clear}</button></h2><div class="contentbody industry"></div>'
			}
		}
		var lang = {
				cn:{
					ok : "确定"
					,empty : "未选择"
					,max : '最多只能选择${max}项'
					,clear : "清除"
				}
				,en:{
					ok : "OK"
					,empty : "Not selected"
					,max : 'Max selected ${max}'
					,clear : "Clear"
				}
		}
/* * * * * * * * * * 单/多选模板 * * * * * * * * * * */
		var item = {
			multiple : {
				parentItem : function(id,name){
					return '<dl style="position:relative" class="lookhide">'
								+'<dt class="current">'
									+'<input type="checkbox" id="i'+id+'" name="'+config.id.replace(/#/,"")+'" value="'+id+'" />'
									+'<label id="l'+id+'" for="'+(config.children?"":"i"+id)+'">'+name+'</label>'
								+'</dt>'
							+'</dl>'
				}
				,childrenItem : function(id,name){
					return '<li><input type="checkbox" id="c'+id+'" value="'+id+'"><label for="c'+id+'">'+name+'</label></li>'
				}
			}
			,single : {
				parentItem : function(id,name){
					return '<dl style="position:relative" class="lookhide">'
								+'<dt class="current '+config.type+'">'
									+'<input type="radio" id="i'+id+'" name="'+config.id.replace(/#/,"")+'" value="'+id+'" />'
									+'<label id="l'+id+'" for="'+(config.children?"":"i"+id)+'">'+name+'</label>'
								+'</dt>'
							+'</dl>'
				}
				,childrenItem : function(id,name){
					return '<li><input type="radio" id="r'+id+'" name="'+config.id.replace(/#/,"")+'" value="'+id+'"><label for="r'+id+'">'+name+'</label></li>'
				}
			}
		}
/* * * * * * * * * * 默认设置 * * * * * * * * * * */
		var config = {
			type : "position"
			,max : 5
			,langType: "cn"
			,selectType : "multiple"
			,html : '<div class="contentbody" class="selecter mask" id="${id}" style="-moz-transform: translate(280px, 0px);-webkit-transform: translate(280px, 0px);"></div>'
			,onSave : function(){}
			,onClear : function(){}
			,lang : {}
		}
/* * * * * * * * * * 缓存对象 * * * * * * * * * * */
		var cache = {
			state : 0
			,DataObj : {}
			,DataList : null
			,box : null
			,DataLoaded : {"_0":false}
			,selectID : []
			,ID2Txt : {}
			,isOpen : false
		}
/* * * * * * * * * * 基本方法 * * * * * * * * * * */
		var base = {
			set : function(opt){					
				if(opt !== Object(opt)) opt = { type : "position"}
				//按类型合并参数				
				$.extend(config,type[opt.type],opt);
				//按单/多选合并参数
				$.extend(config,item[config.selectType]);
				//按名称合并
				lang[config.langType].name = type[opt.type][config.langType].name;
				//模板替换语言包
				config.template = config.template.replace(/\${\w+}/g,function(i){
					return lang[config.langType][i.replace(/[^a-zA-Z]/g,"")]
				});
			}
			,init : function(loading){
				var _template = $(config.template);
					_template.find(".selectorOk").click(function(){
						base.save();
						cache.box.hide();
					});
					_template.find(".selectorClear").click(base.clear);
				if(loading)ui.loading.show({id:config.type,z:12});
				cache.box = new sideBox({right:280});
				cache.box.init(_template);
				
				require.async("/touch/public/jslib/data/"+config.type+"0.json",function(DATA){
					//my.log("config",config)
					var _body = cache.box.get().find(".contentbody")
						,_lang = config.dataType[config.langType]
						,_id = config.dataType.id
						,_item = ""
						,_listObj = "" 
						for(var i=0;i<DATA.length;i++){
							var XID = DATA[i][_id]
								,XName = DATA[i][_lang]
							cache.DataObj["_"+XID] = DATA[i];
							cache.ID2Txt["_"+XID] = XName
							_item += config.parentItem(XID,XName)							
						}
						_listObj = $(_item);
						_listObj = base.parentEvent(_listObj);
						_body.append(_listObj);	
					if(loading)ui.loading.show({id:config.type,z:12});
				});
				//base.reset()
			}
			,reset : function(){
			}
			,parentEvent : function(obj){
				obj.find("input").click(function(e){
					base.checked($(this));
				})
				obj.find("label").click(function(e){
					if(!config.children)return
					var _this = $(this)
						,_ID = _this[0].id.replace(/[^\d]/g,"")
						,_DL = _this.parent().parent()
					_DL.siblings().removeClass("lookshow").addClass("lookhide");
					if(cache.DataLoaded["_"+_ID]){
						var _UL = _DL.find("ul");
						if(_UL.find("li").length>1){
							if(_UL.attr("data-c")!="show"){
								cache.box.get().find("ul").attr("data-c","").hide();
								_DL.removeClass("lookhide").addClass("lookshow");
								_UL.attr("data-c","show").show();
							}else{
								_DL.removeClass("lookshow").addClass("lookhide");
								_UL.attr("data-c","").hide();	
							}
						}else{
							cache.box.get().find("ul").attr("data-c","").hide();
							if(_DL.attr('class')==='lookshow'){
								_DL.removeClass("lookshow").addClass("lookhide");
							}else{
								_DL.removeClass("lookhide").addClass("lookshow");
							}
								
						}
						base.resize();
						return;
					}
					ui.loading.show({id:"_"+_ID,z:12});
					_DL.removeClass("lookhide").addClass("lookshow");
					cache.box.get().find("ul").attr("data-c","").hide();
					require.async("/touch/public/jslib/data/"+ config.type + _ID +".json",function(DATA){
						var _DD = $('<dd><ul id="u'+ _ID +'" data-c="show" style="position:relative;"></ul></dd>')
							,_lang = config.dataType[config.langType]
							,_id = config.dataType.id
							,_item = ""
							,_listObj = ""
						for(var i=0;i<DATA.length;i++){
							var XID = DATA[i][_id]
								,XName = DATA[i][_lang]
							cache.DataObj["_"+XID] = DATA[i];
							cache.ID2Txt["_"+XID] = XName
							_item += config.childrenItem(XID,XName);							
						}						
							_listObj = $(_item);
							_listObj = base.childrenEvent(_listObj);
							_DD.find("ul").append(_listObj);
							_DL.append(_DD);
							if(_DD.find("li").length<=1){
								_DL.find("ul").attr("data-c","").hide();
							}
							cache.DataLoaded["_"+_ID] = true;						
							base.resize();
							ui.loading.hide({id:"_"+_ID,z:12});
					});
				});
				return obj;
			}
			,childrenEvent : function(obj){
				obj.find("input").click(function(e){
					base.checked($(this));
				});
				return obj;
			}
			,checked : function(ele){
				if(config.selectType == "single"){ cache.selectID = [ele[0].value]; base.save();cache.box.hide(); return;}
				
				if(ele[0].checked!==''&&ele[0].checked!=='false'&&ele[0].checked!==false){
					if(cache.selectID.length >= config.max){
						ele[0].checked = false;
						ele[0].checked = 'false';
						ele[0].checked = '';
						alert(lang[config.langType].max.replace("${max}",config.max));
					}else{
						cache.selectID.push(ele[0].value);
					}
				}else{
					cache.selectID = cache.selectID.filter(function(value){return value!=ele[0].value});
				}
			}
			,getTxt : function(ids){
				var tit = "";
				for(var i=0;i<ids.length;i++){
					//tit += "<li>"+cache.ID2Txt["_"+ids[i]]+"</li>";
					tit += ","+cache.ID2Txt["_"+ids[i]];
				}
				if(tit!=""){
					return tit.substr(1);
				}
				return config[config.langType].empty;
			}
			,save : function(){
				var v = cache.selectID.join(",")
					,t = base.getTxt(cache.selectID)
				$(config.val).val(v)
				$(config.id).html(t);
				config.onSave(v,t)
			}
			,clear:function(){
				var v = cache.selectID
					,t = base.getTxt(cache.selectID)
				cache.selectID=[];
				cache.box.get().find("input").each(function(){
					$(this)[0].checked = false;
				});
				$(config.id).html(base.getTxt(cache.selectID));
				config.onClear(v,t)
			}
			,resize : function(h){
				h = h || cache.box.get().find(".contentbody").height();
				cache.box.get().height(h);
			}
			,show : function(){
				cache.box.show();
				cache.box.get().height("auto")
				cache.isOpen = true
			}
			,hide : function(){
				cache.box.hide();
				cache.isOpen = false
			}
		}
/* * * * * * * * * * 暴露方法 * * * * * * * * * * */
		return {
			config : base.set
			,set : base.set
			,open : base.show
			,show : base.show
			,hide : base.hide
			,init : base.init
		}
	}
	module.exports = out;
});