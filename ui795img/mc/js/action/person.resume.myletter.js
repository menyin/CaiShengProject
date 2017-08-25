/**
 * 我的求职信
 */
define(function(require,exports,module) {
	var $ = require("$");
	var ui = require("ui.base");
	var util = require("util");
	var person = require("action.person");
	
	var cache = {}
	
	//内部类
	var inner = {
		saveClick : function(){
			$("#selfBtn").click(function(){
				var m = {};
				m.ref_id = $("#referenceId").val();
				m.choose = $("input[type='radio']:checked").val();
				m.letter1 = $("#chLetter1").val();
				m.letter2 = $("#chLetter2").val();
				m.letter3 = $("#chLetter3").val();
				var config = {
					type : "POST",
					url:"/touch/person/resume/updateMyLetter.ujson",
					data:{"map.ref_id":m.ref_id,"map.choose":m.choose,"map.letter1":m.letter1,"map.letter2":m.letter2,"map.letter3":m.letter3},
					success : function(data, status, xhr){
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
						var json = util.toJSON(data);
						if(json.code == 0){
							alert("求职信更新成功！ ");
						}else{
							alert(json.msg || "求职信更新失败，请稍后再试！");
						}
					},
					beforeSend : function(){
						ui.mask.show({id:'login_mask',z:10});
						ui.loading.show({id:'login_loading',z:12});
					},
					error : function(){
						ui.loading.hide({id:'login_loading'});
						ui.mask.hide({id:'login_mask'});
						alert('操作失败，请重新再试！');
					}
				}
				$.ajax(config);
			});
		}
	}
	//对外公开的方法
	var out = {
		init : function(){
			inner.saveClick();
		}
	}
	module.exports = out;
});