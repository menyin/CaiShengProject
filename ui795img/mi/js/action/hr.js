define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,touchSilder = require("ui.touchSilder")
		,juicer = require("juicer")
		,util = require("util")
		,popFloat = require("ui.popFloat")
		,sideBox = require("ui.sideBox")
		,person = require("action.person")
	
	var cache = {}
	
	var out = {
			indexInit : function(isApp){
				if(!isApp){
					$("#nav_hr").addClass("active")
					person.updateInfo()
				}
				out.move()
			}
			,move : function(){
				new touchSilder( {id:'job', 'auto':'0',"noclick":false, speed:200, timeout:4000, direction:'left'});
				new touchSilder( {id:'hrClub', 'auto':'0',"noclick":false, speed:200, timeout:4000, direction:'left'});
			}
			,nav : function(){
				var sbox = new sideBox({right:120});
					sbox.init($("#hr_filter_html").val());
					$("#filter_btn").click(function(){
						sbox.show()
					});
			}
			,list : function(){
				this.nextPageClick()
				this.nav()
			}
			,detail:function(){
				this.nav()
				var myPop = new popFloat({id:'goTOP',class:'goTOP',html:'<a href="#" onclick="window.scrollTo(0,0)">TOP</a>',right:"5px",top:"50%"})
					myPop.open(function(pop){
						if(window.pageYOffset == 0) pop.close();
						$(window).scroll(function(){
							if(window.pageYOffset == 0) pop.close(); else pop.open()
						});
					})
				$(function(){
					$("#detail_body img").each(function(){
						var imgOBJ = $(this);
						var winWIDTH = $(window).width()-40;
						var imgWIDTH = imgOBJ.width()
						var imgHEIGHT = imgOBJ.height();
						if(imgWIDTH>winWIDTH){
						var css = { width:imgWIDTH,height:imgHEIGHT}
							css.width = winWIDTH
							css.height = (winWIDTH*imgHEIGHT)/imgWIDTH
							imgOBJ.css(css)
						}						
					})	
				});
			}
			,subscribe : function(){
				$("#mail2btn").click(function(){
					var email = $("#mail2txt").val();
					if(!/^\w+([-+.]{0,6}\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email)){
						alert("请输入正确的E-Mail");
						return false;
					}
					$.ajax({
						url:"/person/subscription/jobcnhr_action.ujson"
						,type : "POST"
						,data : {
							"emailType": 1,
							"strAct": "yes",
							"strEmail": email
						}
						,beforeSend : function(){
							ui.mask.show({id:'postMask',z:10,f:function(mask){
								setTimeout(function(){
									mask.click(function(){
										$(this).remove();
										ui.loading.hide({id:'postLoading'});
									});
								},3000);
							}});
							ui.loading.show({id:'postLoading',z:12});
						}
						,success : function(data, status, xhr){
							var result = util.toJSON(data);
							if(result.success){
								alert("恭喜，订阅成功！");
							}else{
								alert(result.msg || "系统出现异常，请联系客服");
							}
							ui.loading.hide({id:'postLoading'});
							ui.mask.hide({id:'postMask'});
						}					
					});
				});
			}
			,nextPageClick : function(){
				$("#hr_nextpage").click(function(){
					
					var self = $(this);
					var page = parseInt(self.attr("data-page"))+1
					$.ajax({
						url:"/touch/hr/list_action.uhtml?newsType="+self.attr("data-type")+"&kwHr=&page.pageNo="+page
						,type : "POST"
						,beforeSend : function(){
							self.html('正在加载...<div class="ui-loading hrLoading" style="z-index:2;left:5%;position:absolute;"><span></span></div>')
						}
						,success : function(data, status, xhr){
							var result = util.toJSON(data);
							if(result.recordCount>0){
								juicer.register('max',function(data){
									return (data.length>30?data.substring(0,30)+"...":data);
								});
								$("#hr_list").append($(juicer($("#hr_list_html").val(),result)))
							}
							self.attr("data-page",page).html("点击查看更多>>")
						}
					});
				});
			}
	}
	module.exports = out;
});