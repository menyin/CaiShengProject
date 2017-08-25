/**
 * 个人中心的简历过滤企业的黑名单
 */
define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,util = require("util")
	var out = {
		_data:null,
		init: function(str){
			if(str.length > 0){
				out._data=str.split(";");	
			}else{
				out._data = [];
			}
			out.add();
			out.bindDel();
			out.goBack()
		},
		goBack : function(){
			var href = "/touch/person/userCenter.uhtml"
				if(document.referrer.indexOf("securitySetup.uhtml")>-1)
					href=document.referrer+'?t='+(+new Date())
			$("#goBack").click(function(){
				location.href=href;
			})
		},
		_getKeyword:function(){
			var arr=[];
			for(var i=0;i<out._data.length;i++)
			{
				if(out._data[i])arr.push(out._data[i]);
			}
			return arr;
		},
		checkExists:function(keyword){
			for(var i=0;i<out._data.length;i++)
			{
				if(out._data[i] == keyword){
					return true
				}
			}
			return false;
		},
		add: function(){
			$("#addBlackList").bind("click", function(){
				var keyword = $("#addBlackListText").val();
				var len=keyword.length;
				if(util.isEmpty(keyword)){
					alert("请输入您需要屏蔽的企业的关键字！");
				}else if((out._getKeyword().join(";").length+len+1)>50){
					alert("您的屏蔽的企业关键字已经达到限制！");
				}else if(len<2){
					alert("关键字最小两个字！");
				}else if(out.checkExists(keyword)){
					alert("关键字中已经存在“"+keyword+"”!");
				}else{
					out._data.push(keyword);
					var index=out._data.length-1;
					var options = {
						error : function(){
							alert('添加失败，请重新再试！');
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							//删除-两个参数，第一个参数（要删除第一项的位置），第二个参数（要删除的项数）
							out._data.splice(index,1);
						},
						success : function(data, status, xhr){
							ui.loading.hide({id:'login_loading'});
							ui.mask.hide({id:'login_mask'});
							var dd = $("<dd id=\"blackList_"+index+"\">"+keyword+"<div class=\"icon_delete\" idx="+index+"></div></dd>")
							dd.click(function(){
								out.del($(this).find("div[class='icon_delete']").eq(0));
							})
							$(".shield_keyword").find("dl").append(dd);
							$('#addBlackListText').val('');
						}
					}
					out._submit(options);
				}
			})
		},
		bindDel:function(){
			$(".icon_delete").each(function(){
				$(this).bind("click", function(){
					if(confirm("是否确定删除该条记录！")){
						out.del(this);
					}
				})
			});
		},
		del:function(_t){
			var index = $(_t).attr("idx");
			var tempPara = out._data[index]; 
			out._data[index] = null;
			var options = {
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					$('#blackList_'+index).remove();
				},
				error : function(){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					alert('删除失败，请重新再试！');
					out._data[index] = tempPara;
				}
			}
			out._submit(options);
		},
		_submit:function(options){
			var config = {
				url:"/touch/person/resume/setBlackList.ujson",
				type : "POST",
				data : {keyWord : out._getKeyword().join(";")},
				beforeSend : function(){
					ui.mask.show({id:'login_mask',z:10});
					ui.loading.show({id:'login_loading',z:12});
				},
				error : function(){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					alert('删除失败，请重新再试！');
					out._data[index] = tempPara;
				},
				success : function(data, status, xhr){
					ui.loading.hide({id:'login_loading'});
					ui.mask.hide({id:'login_mask'});
					$('#blackList_'+index).remove();
				}
			};
			config = $.extend(config, options, {});
			$.ajax(config);
		}
	}
	module.exports = out;
});