define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,util = require("util")
		,mBox = require("ui.mBox")
		,person = require("action.person")
		,par
	
	var myCache = {}
	var out = {
		init:function(p){
			person.updateInfo()
			par = p
			myCache.addBtn = $("#resumeAdd")
			if(p.resumeSize==0)$("#myResumeList").hide()
			$("#myResumeList a").click(function(){
				sessionStorage["resumeName"] = util.trim(this.innerHTML)
			})
			$("#resumeAdd").click(out.addNew)
		}
		,fastSetResume:function() {
			person.updateInfo();
			out.setFast();
		}
		//点击添加简历按钮
		,addNew : function(){
			p=par
			if(p.resumeSize>=3){
				alert("抱歉,最多只能创建3组简历!")
				return
			}
			var html = '<div class="reset_name">'
				 + '	<h1>创建简历</h1>'
				 + '	<div class="content">'
				 + '		<div class="txt">请输入新的简历名称：</div>'
				 + '		<div><input type="text" class="inputText" style="margin-left:-6px;" value="我的简历'+(p.resumeSize+1)+'" id="resumeNewName"></div>'
				 + '	</div>'
				 + '	<div class="btn"><button class="btn1_submit box-ok">确定</button></div>'
				 + '</div>'
			var addBox = new mBox(html,{
				title:"创建简历"
				,width:260
				,mask:true
				,onok:function(){
					var resumeNewName = $("#resumeNewName").val()
					var foundErr = false;
						foundErr = !util.check(resumeNewName,{
							notEmpty : true
							,min:4
							,minType:1
							,max:20
							,maxType:1
							,error : function(){
								alert("新简历名称:最少2个汉字4个字母,最多10个汉字!")
							}
						})
					if(foundErr) return
					$.ajax({
						url: "/person/resume/add.ujson?resumeName="+encodeURIComponent(resumeNewName)
						,type : "GET"
						,beforeSend : function(){
							ui.loading.show({id:'update_loading'});
							ui.mask.show({id:'update_mask'});
						}
						,error : function(){
							ui.loading.hide({id:'update_loading'});
							alert("通讯失败!")
							ui.mask.hide({id:'update_mask'});
						}
						,success : function(data){
							ui.loading.hide({id:'update_loading'});
							ui.mask.hide({id:'update_mask'});
							addBox.close()
							var DATA = util.toJSON(data)
							if(DATA.success!=true){
								alert('操作失败!');return;
							}
							alert('添加成功!');
							sessionStorage["resumeName"] = resumeNewName
							window.location.href="/touch/person/resume/getSubResume.uhtml?m.resumeId="+DATA.resumeId;
						}
					})
				}
			});
			addBox.open()
		}
		,setFast : function(){
			
			$('#select_list li').click(function(){
				var $this = $(this);
				var $list = $("#select_list")
				$list.find("input[name='resume'][state='checked']").attr('state','');
				$this.find("input[name='resume']").attr('state','checked');
			});
			
			$('.select_status #switch').click(function(){
				var $this = $(this);
				var $yTip = $('.yTip');
				var $switchOn_content = $('#switchOn_content')
				$this.toggleClass('switch_on').toggleClass('switch_off');				

				
				/*停用*/
				if($this.hasClass('switch_off')){					
					if(!$switchOn_content.hasClass('hide'))
						$('#switchOn_content').addClass('hide');//.css('display','none');
					if($yTip.hasClass('hide')){
						$yTip.removeClass('hide');
					}
					
					var _url="/person/setFastApplyConfig_action.ujson?cvFlag=0&t="+Math.random();
	                 $.ajax({
	                     url:_url,
	                     dataType:"json",
	                     success:function(data){
	                         if(data.success==true){   
	                        	 alert("停用简历快速设置成功!",1000);                        	
	                         }
	                         else{
	                        	 alert(data.message);
	                             return;
	                         }

	                     }
	                 });					
				}else{
					//$('#switchOn_content').css('display','block');
					if($switchOn_content.hasClass('hide'))
						$('#switchOn_content').removeClass('hide');
					var $fast_set_empty = $switchOn_content.find('.fast_set_empty');
					if($fast_set_empty.length > 0){
						if(!$yTip.hasClass('hide')){
							$yTip.addClass('hide');//出现“无法启用本功能”的时候，不要下面的“提示”
						}
					}else{
						if($yTip.hasClass('hide')){
							$yTip.removeClass('hide');
						}
					}
				}
			});
			
			/*保存*/
			$("#saveFastSet").click(function(){				
				var _resumeId=$("#select_list").find("input[name='resume'][state='checked']").attr("id");
				var _url="/person/setFastApplyConfig_action.ujson?cvFlag=1&resumeId="+_resumeId+"&t="+Math.random();
                 $.ajax({
                     url:_url,
                     dataType:"json",
                     success:function(data){
                         if(data.success==true){   
                        	 alert("简历快速设置成功!",1000);                        	
                         }
                         else{
                             alert(data.message);
                             return;
                         }

                     }
                 });
			});
			
//			$("#saveFastSet").click(function(){
//				var status = $("input[name='r122']:checked",false).val();
//				var perId = $("#personId").val();
//			
//				var options = {path:"/"};		
//				var _resumeId=$("input[name='perResumeID']:checked").attr("id");
//				var status = $("input[name='r122']:checked",false).val();
//				var _url="/person/setFastApplyConfig_action.ujson?cvFlag="+status+"&resumeId="+_resumeId+"&t="+Math.random();
//                 $.ajax({
//                     url:_url,
//                     dataType:"json",
//                     success:function(data){
//                         if(data.success==true){                        	 
//                        	 if(status==1){
//                        		 alert("简历快速设置成功!");
//                        	 }else{
//                        		 alert("停用简历快速设置成功!");
//                        	 }
//                         }
//                         else{
//                             alert(data.message);
//                             return;
//                         }
//
//                     }
//                 });
//			});
		}
		//点击导入简历按钮
		,importResume: function(){
			 var resumeId=location.hash;	
			 var data= JSON.parse($("#result_resume").val().replace(/(:"\d{4}-)(\d{1}")/g,'$10$2'));			 
		     delete data["base"];
			 var post = {};	 
			 $.each(data,function(i,item){post[i]=JSON.stringify(item)});			 
			 var resumeRes = parseInt($("#result_resumeRes").val());
			 if(resumeRes === 1){
				 post["name"] = "前程无忧简历";
			 }else if(resumeRes === 4){
				 post["name"] = "中国人才热线简历";
			  }else if(resumeRes === 5){
				 post["name"] = "智通人才网简历";
			}
			  
			 if(resumeId)post.resumeId=resumeId;
		     $.ajax({
				url:"/person/resume/import.ujson",
				dataType:'json',
				data:post,
				timeout:30000,
				type:"post",
				beforeSend:function(){
					ui.mask.show({id:'submit_mask'});
					ui.loading.show({id:'submit_loading'});
				},		
				success:function(json){
					if(json.resumeId){
						resumeId=json.resumeId;
						location.hash=resumeId;   //将简历ID保存到hash
					}
					if(json.success==true)
					{				    
						ui.loading.hide({id:'submit_loading'});
						ui.mask.hide({id:'submit_mask'});	
						$("#import_success").show();
						var _href = "/touch/person/resume/resumePreview2.jsp";
						$.ajax({
							url:"/touch/person/resume/list_action.ujson",
							success:function(json){
						    	var arr = JSON.parse(json);					  
							    for(var i=0;i<arr.length;i++){
							    	var a =arr[i]["resumeId"];
								    if(arr[i]["resumeId"] == resumeId){	
								    	subresumeId = arr[i]["subResumes"][0]["perResumeId"] || "";
								    	cnResumeId = arr[i]["subResumes"][0]["perResumeId"] || "";
								    	enResumeId = arr[i]["subResumes"][1]?$(arr[i]["subResumes"])[1]["perResumeId"]: "";							    	
									    _href += "?langType=0&resumeId="+arr[i]['resumeId']+"&subResumeId="+subresumeId+"&cnResumeId="+cnResumeId+"&enResumeId="+enResumeId;
									    $("#success_link").attr("href",_href);					
									}
								}
							}
						});					
						
					}else{		
						ui.loading.hide({id:'submit_loading'});
						$(".error_msg").text(json.msg);	
						ui.mask.hide({id:'submit_mask'});
						$("#import_error").show();										
						$("#back_link").attr("href","/touch/person/resume/myResumes.uhtml");	
					}				
				},
				error:function(){
					ui.loading.hide({id:'submit_loading'});
					$(".error_msg").text("导入失败，请重试！");
					ui.mask.hide({id:'submit_mask'});
					$("#import_error").show();
					$("#back_link").attr("href","/touch/person/resume/myResumes.uhtml");
				}
			});
		}
	}	
	module.exports = out;
});