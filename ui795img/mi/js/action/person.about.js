define(function(require, exports, module){
	var $ = require("$");
	var person = require("action.person");
	var out = {
		init : function(){
			$.ajax({
				url:"/dynamiclogs/getRecentLogs.xhtml?p.pageSize=5&p.pageNo=1&t="+Math.random(),
				success:function(data){
					var content = '<ul class="list_item">';
					data = JSON.parse(data);//字符串转成Object
					$.each(data["results"],function(index,item){
						var date = parseInt();
						content = content + '<li> <a href="dynamic.jsp?id='+ item["id"]+'">'
						+ '<dl>'
		              	+ '<dt><h3>' + item["topic"] 
		              	+ '</h3><span>'+ item["year"] +'-'+item["publishDate"].substr(0,2) +'-'+item["publishDate"].substr(3,2) +'</span></dt>'            
		                + '<dd></dd>'
		             	+ '</dl>'
		           		+ '</a>'
		         		+ '</li>';         	
					});
					content = content + '</ul>';

					$('.dynamic').append(content);
				}
			});
			person.updateInfo();
		}
	}
	module.exports = out;
	
})
