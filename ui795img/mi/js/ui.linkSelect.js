define(function(require, exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");

	var out = function(id,opt){
		var config = {
			data : []
			,lang : "0"//0是中文,1是英文
			,id2txt : {}
			,_select : {}
			,maxLv : 3
			,lv1name : "city1"
			,lv2name : "city2"
			,onChange : function(){}			
		}
		var dic = function(){
			var cn = []
				,en =[]
				cn[0] = "请选择";en[0]="select"
			return [cn,en]
		}()
		var base = {
			render : function(data,n){
				var upid,id,name;
				var str=""
				for(var i=0,l=data.length;i<l;i++){
					upid = data[i][2]
					id = data[i][3]
					name = data[i][config.lang]
					config.id2txt["_"+id]=name
					str += '<option value="'+id+'">'+name+'</option>';					
				}
				config["_select"]["_"+upid] = str;
			},
			init : function(data){
				data = data || config.data
				for(var item in data){
					base.render(data[item])
				}
				var selectHTML,upid=1,isBreak=false;
				for(var n=1;n<=config.maxLv;n++){
					selectHTML = $('<div style="width:32% !important;" class="selectOption lv'+n+'"><select><option value="">'+dic[config.lang][0]+'</option>'+base.getSelect(upid)+'</select></div>');
					selectHTML.find("select").change(function(){
						base.getChange($(this));
					});
					util.cache(id).append(selectHTML);
					NodeN = document.createTextNode("\n");
					util.cache(id).append(NodeN);
					var sel = config["lv"+n];
					if(!sel){
						isBreak = true;
					}else{
						if(typeof sel ==="string") sel=sel.replace(/^\s+/,"").replace(/\s+$/,"")
						util.cache(id).find("select").last().find("option").each(function(){
							var obj = $(this)[0]
							var val = obj.value,text = obj.innerHTML								
							if(sel == val || sel == text) {
								obj.selected = true;
								upid = val;
								return;
							}
						});						
					}
					if(isBreak) break;
				}				
				my.log(config);
			}
			,setVal : function(val){
				$(config["valueObj"]).val(val);
			}
			,getSelect : function(id){
				return config["_select"]["_"+id];
			},
			getChange : function(obj){
				obj.parent().next().remove();
				obj.parent().next().remove();
				var val = obj[0].value;
				var html = base.getSelect(val);
				if(!html){
						//base.setVal(val);
				}else{
					//var selectHTML = $('<div style="width:35%" class="selectOption"><select><option value="'+val+'">'+dic[config.lang][0]+'</option>'+ html +'</select></div>');
					var selectHTML = $('<div style="width:32% !important;" class="selectOption"><select><option value="0">请选择</option>'+ html +'</select></div>');
						selectHTML.find("select").change(function(){
							base.getChange($(this));
						});
						util.cache(id).append(selectHTML);
						//base.setVal(val);
				}
				
				config.onChange(val,base.getTxt(val),obj,html);
			}
			,getVal : function(){
				return util.cache(id).find("select").last()[0].value;
			}
			,getTxt : function(val){
				return config.id2txt["_"+val]
			}
		}
		$.extend(config,opt)
		return {
			init : base.init,
			render: base.render
		}
	}
	module.exports = out;
});