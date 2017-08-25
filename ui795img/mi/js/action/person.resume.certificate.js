define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	
	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			resume.selectLanguage(p.lang)
			//取数据
		var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return }
			p.data = util.toJSON(p.data)
			p.template = $("#certificateTemplate").val()
			//初始化数据
		var jsonData = p.data.certificate
			myCache.goBack = $("#goBack")
			myCache.list = $("#certificateList")
			myCache.listBox = $("#listBox")
			myCache.info = $("#certificateInfo")
			myCache.addBtn = $("#certificateAdd")
			myCache.saveBtn = $("#certificateBtn")
			myCache.delBtn = $("#certificateManage")
			myCache.fileMsg = $("#fileMsg")
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")
			
			//回显数据
			if(jsonData.length>0){
				var newList = $("<ul></ul>")
				for(var i=0;i<jsonData.length;i++){
					var li = $(juicer(p.template,jsonData[i]))
					newList.append(li)
				}
				myCache.list.append(newList.find("li")).show()
			}
			//构造option选项
			person.showOption()
			
			$("#cerFile").change(function(){
				var file = $(this)[0].files[0];
				if(file){
	               var fileSize = 0;
	               if (file.size > 1024 * 1024){
	                   fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
	               }else{
	                   fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
	               }
					var msg = file.name+'&nbsp;[' + fileSize+']&nbsp;[' + file.type+']'
					$("#fileMsg").html(msg)
	               if(file.size>1024*200){
						$("#cerTmp")[0].reset()
						message(p.lang,{cn:"上传附件：文件不能超过200K!",en:"上传附件：文件不能超过200K!"})
						return;
					}
					if(!new RegExp("(jpeg|gif|png)+","gi").test(file.type)){
						$("#cerTmp")[0].reset()
						message(p.lang,{cn:"上传附件：文件类型必须是JPG、JPEG、PNG或GIF!",en:"上传附件：文件类型必须是JPG、JPEG、PNG或GIF!"})
						return;
					}
		        }
			})
			//绑定动作
			out.bindAdd()
			out.bindSave(p)
			out.bindEdit()
			out.bindDel()
		}
		,bindAdd : function(){
			myCache.addBtn.click(function(){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack()
				myCache.list.find(".icon_delete").hide()
				out.empty().show()
				myCache.saveBtn.attr("mod","-1");	//-1标示新增
				$("#cerFile").parent().css({"display":""});
				$("#cerFile").css({"width":71}).parent().css({"overflow":"hide"});
				$("#re_upload").parent().css({"display":"none"});
			})
		}
		,bindEdit : function(){
			myCache.list.find("li").click(out.edit)
		}
		,bindDel : function(){
			var del = myCache.list.find(".icon_delete")
				del.click(out.del)
			myCache.delBtn.click(function(){
				if(/管理/.test($(this).html()))
					$(this).html("取消")
				else
					$(this).html("管理")
				myCache.addBtn.parent().toggle()
				myCache.info.hide()
				myCache.listBox.show()
				myCache.delBtn.show()
				out.goBack(true)
				del.toggle()				
			})
		}
		,bindSave : function(par){
			myCache.saveBtn.click(function(){
				out.save(par)
			})
		}
		,empty : function(){
			myCache.info.find("input").each(function(){  this.value="" })
			myCache.info.find("#fileMsg").html("")
			return myCache.info
		}
		,goBack : function(t){
			new resume.goBack(t,myCache)
		}
		,edit : function(){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack()
			var MODID = this.id.substring(1)
			var MODDATA = myCache.par.data.certificate.filter(function(v){ return v.id == MODID})[0]
				out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
			var o = [],v = []
				//名称不同
				o[0]="cerFileOld";v[0]=MODDATA.cerFile
				o[1]="cerName";v[1]=MODDATA.cerName
				o[2]="cerUrl",v[2]=MODDATA.cerUrl
				$("#cerFile").css({"width":71}).parent().css({"overflow":"hide"});
				$("#re_upload").css({"line-height": "20px","width": 71,"background-color": "white","border": "1px solid #666666"});
				if(!MODDATA.cerUrl) {
					if(MODDATA.cerFile){
						$("#re_upload").parent().show();
						$("#cerFile").parent().hide();
						$("#re_upload").click(function(){
			       	    	   $("#cerFile").parent().css({"display":""});
	                           $(this).parent().css({"display":"none"});
	                           return false;
			       	    }); 
					}
				}
				util.setMultiVal(o,v)
		}
		,del : function(e){
			var MODID = this.id.substring(1)
				resume.postDel({
					moudle : "certificate"
					,moudleId : MODID
					,myCache : myCache
					,error: function(){
						alert("删除经历出错")
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}
		,save : function(p){
			var foundErr = false
			var cerName = $("#cerName").val()
			foundErr = !util.check(cerName,{
				notEmpty : true
				,max:40
				,regex: "^[\\w\\u4e00-\\u9fa5]+$"
				,error : function(a,b,c){
					message(p.lang,{cn:"附件名称：不能为空,长度不能超过40字!",en:"Name:Not empty,can't be more than 40 characters!"})
				}
			})
			if(foundErr) return;

			var cerFile = $("#cerFile").val()
			var cerUrl = $("#cerUrl").val()
			if(cerUrl != '') {
				foundErr = !util.check(cerUrl,{
					notEmpty : false
					,regex: "^(?:(?:https?:)?\/\/)?(?:[a-z0-9]+[-a-z0-9]*\.)+(?:(?:(?:com|net|org|gov|edu|mil|biz|tel|xxx|int|info|name|aero|asia|mobi|coop|museum)(?:\.[a-z]{2})?)|[a-z]{2})(?:\/[\w]*[-]?[\w]*)?$"
					,error : function(a,b,c){
						message(p.lang,{cn:"请输入正确的附件链接！",en:"Url Error"})
					}
				})
				if(foundErr) return;
			}
			
			foundErr = (cerUrl == '' && !cerFile)
			if(foundErr) {
				message(p.lang,{cn:"请输入附件链接或上传附件",en:"Please fill the url or upload file"})
				return
			}
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"cerName": cerName
				,"cerUrl": cerUrl
				//注意特殊
				,"cerFile": "upload_1"
			}]
			if(!cerFile) PostData[0].cerFile = $("#cerFileOld").val()
			if(saveID == "-1") delete PostData[0].id
			var LastPostData = { "certificate" : util.toString(PostData),"upload_1":document.getElementById('cerFile').files[0] }
			if(cerFile) delete LastPostData.upload_1
				
			//修改旧信息待处理
			var par = {
				langType : p.data.langType
				,resumeId : p.data.resumeId
				,subResumeId : p.data.subResumeId
				,data : LastPostData
				,contentType : "multipart/form-data"
				,error : function(){
					alert('请求出错!')
				}
				,success : function(data){
					var DATA = util.toJSON(data)
						if(DATA.success){
							myCache.listBox.show()
							myCache.delBtn.show()
							out.goBack(true)
							//更新本地缓存
							if(!PostData[0].id){
								PostData[0].id = DATA.certificate[0].id
								p.data.certificate.push(PostData[0])
							}else{
								for(var i=0; i<p.data.certificate.length;i++){
									if(p.data.certificate[i].id == PostData[0].id){
										//特殊处理上传文件路径
										PostData[0].cerFile = DATA.certificate[0].cerFile
										p.data.certificate[i] = PostData[0]
										break;
									}
								}
							}
							sessionStorage[resume.getDataKey()] = util.toString(p.data)
						var li = $(juicer(p.template,PostData[0]))
							li.click(out.edit)
						var iconDel = li.find(".icon_delete")
							iconDel.click(out.del)
							myCache.delBtn.click(function(){
								if(iconDel.css("display")!="none"){iconDel.hide()}else{iconDel.show()}
								myCache.info.hide()
							})
							if(saveID == "-1"){
									myCache.list.append(li).show()
							}else{
								var LI = myCache.list.find("#e"+PostData[0].id)
									LI.find("dt,.dateTime").remove()
									LI.find("dl").append(li.find("dt,.dateTime"))						
							}
							myCache.info.hide()
							alert('相关证书已保存!')
						}else alert('错误:'+resumeLang.get(DATA.msg))
				}//end success
			}//end par
			
			//手动构造一个上传方法 用于图片传送问题
			ui.mask.show({id:'update_mask'});
			ui.loading.show({id:'update_loading'});
		var fd = new FormData();
            fd.append("certificate", util.toString(PostData));
            fd.append("upload_1", document.getElementById('cerFile').files[0]);
        var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt){
            	if (evt.lengthComputable) {
	                var percentComplete= Math.round(evt.loaded * 100 / evt.total);
	                myCache.fileMsg.html('Uploading:'+percentComplete.toString()+'%')
	            }
            }, false);
            xhr.addEventListener("load", function(data){
	            myCache.fileMsg.html('')
	        var DATA = util.toJSON(data)
            	par.success(data.target.responseText)
            	if(DATA.subResumeId){
					sessionStorage["subResumeId"]=DATA.subResumeId
					sessionStorage[(par.langType==0?"cn":"en")+"ResumeId"]=DATA.subResumeId
					resume.goBack()
				}
				ui.mask.hide({id:'update_mask'});
				ui.loading.hide({id:'update_loading'});
            }, false);
            xhr.addEventListener("error", function(data){
            	myCache.fileMsg.html('error:'+data)
				ui.mask.hide({id:'update_mask'});
				ui.loading.hide({id:'update_loading'});
            }, false);
            xhr.addEventListener("abort", function(data){
            	myCache.fileMsg.html('abort:'+data)
				ui.loading.hide({id:'update_loading'});
				ui.mask.hide({id:'update_mask'});
            }, false);
            //一律UTF8传送
            xhr.open("POST", "/person/resume/edit.ujson?clientFrom=touch&langType="+par.langType+"&subResumeId="+par.subResumeId+"&resumeId="+par.resumeId+"&finished=true");
            xhr.send(fd);
		}//end save
	}
	module.exports = out;
});