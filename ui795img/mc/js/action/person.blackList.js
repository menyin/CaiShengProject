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
			out.search();
			out.bindDel();
			out.goBack()
		},
		goBack : function(){
			$("#goBack").click(function(){
				location.href=history.go(-1);
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
		search: function(){
			$("#addBlackList").bind("click", function(){
				var keyword = $("#addBlackListText").val();
				var len=keyword.length;
				if(util.isEmpty(keyword)){
					alert("请输入您需要屏蔽的企业的关键字！");
				}else if((out._getKeyword().join(";").length+len+1)>20){
					alert("您屏蔽的企业已经达到限制！");
				}else if(len<2){
					alert("关键字最小两个字！");
				}else{
					//搜索
					$.ajax({
						url: '/api/web/person.api',
						data: {
							'act': 'search_company',
							'val': keyword,
						},
						type: 'POST',
						dataType:"json",
						beforeSend: function() {
							ui.loading.show({id:'update_loading',z:9999});
							ui.mask.show({id:'update_mask',z:8888});
						},
						error: function() {
							ui.loading.hide({id:'update_loading'});
							ui.mask.hide({id:'update_mask'});
						},
						success: function(data) {
							if(data.status == 1){
								var _html = "<dt>搜索结果：</dt>";
								$.each(data.company, function(i,val){
									var _html_1 = '';
									_html_1 = "<dd id='com_name_"+val.cid+"'><span class='_cname'>"+val.cname+"</span><span class='icon_add' date_id='"+val.cid+"'>+</span></dd>";

									_html += _html_1;
								});
								$("#searchList").html(_html);

								$(".icon_add").bind("click", function(){
									out.add(this);
								})
							}else{
								alert(data.msg || '没有搜索到相关企业！');
							}
							ui.loading.hide({id:'update_loading'});
							ui.mask.hide({id:'update_mask'});
						}
					});
				}
			})
		},
		add:function(d){
			var cid = $(d).attr('date_id');

			//添加数据
			$.ajax({
				url: '/person/resume/getBlackList.html',
				data: {
					'act': 'save',
					'cid': cid,
				},
				type: 'POST',
				dataType:"json",
				beforeSend: function() {
					ui.loading.show({id:'update_loading',z:9999});
					ui.mask.show({id:'update_mask',z:8888});
				},
				error: function() {
					ui.loading.hide({id:'update_loading'});
					ui.mask.hide({id:'update_mask'});
				},
				success: function(data) {
					if(data.code == 1){
						$("#com_name_"+cid).hide();
						var dd = $("<dd id=\"blackList_"+data.row.cid+"\"><span class=\"_cname\">"+data.row.cname+"</span><div class=\"icon_delete\" idx="+data.row.cid+"></div></dd>")
						dd.click(function(){
							out.del($(this).find("div[class='icon_delete']").eq(0));
						})
						$(".shield_keyword").find("dl").append(dd);
						$('#addBlackListText').val('');
					}else{
						alert(data.msg || '添加失败，请稍后再试！');
					}
					ui.loading.hide({id:'update_loading'});
					ui.mask.hide({id:'update_mask'});
				}
			});
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
			var cid = $(_t).attr("idx");

			$.ajax({
				url: '/person/resume/getBlackList.html',
				data: {
					'act': 'del',
					'cid': cid,
				},
				type: 'POST',
				dataType:"json",
				beforeSend: function() {
					ui.loading.show({id:'update_loading',z:9999});
					ui.mask.show({id:'update_mask',z:8888});
				},
				error: function() {
					ui.loading.hide({id:'update_loading'});
					ui.mask.hide({id:'update_mask'});
				},
				success: function(data) {
					if(data.code == 1){
						$('#blackList_'+cid).remove();
					}else{
						alert(data.msg || '删除失败，请稍后再试！');
					}
					ui.loading.hide({id:'update_loading'});
					ui.mask.hide({id:'update_mask'});
				}
			});
		}
	}
	module.exports = out;
});