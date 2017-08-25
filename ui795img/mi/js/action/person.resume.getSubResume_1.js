define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,juicer = require("juicer")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,touchSilder = require("ui.touchSilder")
	,mBox = require("ui.mBox")

	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			p.resumeId = sessionStorage["resumeId"]
			p.resumeIds = [(sessionStorage["cnResumeId"]||0),(sessionStorage["enResumeId"]||0)]
			p.dataKey = "r"+p.resumeId+"s"+(sessionStorage["subResumeId"]||0)
			$("#resumeName",false).html(sessionStorage["resumeName"]||"我的简历")
			util.cookie.set('resumeId', p.resumeId, {path:"/"})
			util.cookie.set('subResumeId', sessionStorage["subResumeId"]||0, {path:"/"})
			util.cookie.set('cnResumeId', sessionStorage["cnResumeId"]||0, {path:"/"})
			util.cookie.set('enResumeId', sessionStorage["enResumeId"]||0, {path:"/"})
			//取参数
		var lang = ""
			//计算完成度
		var finishPar = {}
			if(/resumeModule\.uhtml/.test(document.referrer)){
				if ( !sessionStorage[p.dataKey] ) {
					sessionStorage[p.dataKey] = util.toString(p.jsonData);
				}
				var resumeData = util.toJSON(sessionStorage[p.dataKey])
				lang = (resumeData.langType=="0")?"cn":"en"
				finishPar[lang] = resumeData
				p.jsonData = finishPar[lang]
			}else{
				lang = (p.jsonData.langType=="0")?"cn":"en"
				finishPar[lang] = p.jsonData
				//缓存当前简历
				sessionStorage[p.dataKey] = util.toString(p.jsonData)
			}
			p.finish = resume.getFinished(finishPar)
			$("#cnFinish").html("("+p.finish.cn+"%)")
			$("#enFinish").html("("+p.finish.en+"%)")

			//获取简短信息
		var liteData = out.getLiteResume(p.jsonData)
			,liteHtml = $("ul."+lang)
			liteHtml.html(juicer(liteHtml.html(),liteData))
			//应届毕业生处理
			/*if(p.jsonData.base.memberClass=="2"){
				$("li.graduate").show();
				$("li.work .red").hide();
				$("ul.cn li.graduate").after($("ul.cn .unitTip"));
				$("ul.en li.graduate").after($("ul.en .unitTip"));
			}*/
			//设定当前子简历编号
			$("ul.cn a").click(function(){
				sessionStorage["subResumeId"] = p.resumeIds[0]
				window.location.href="/person/resume/resumeModule.html?act="+$(this).attr("rel")+"&lang=0"
			})
			//管理简历
			$("#manage").click(function(){
				$("#manageList").toggle()
			})
			var isLoad = []
				isLoad[p.jsonData.langType] = true
			//另外一份子简历的处理
			var silderAt = 0
			var silder = new touchSilder({
				id:'model_list'
				,'noclick':false
				,'auto':'-1'
				,speed:600
				,timeout:3000
				,direction:'right'
				,after:function(i,o){
					$("#operate_lang li").removeClass("active").eq(i).addClass("active");
					silderAt=i
				}
				,before : function(i,o){
					if(isLoad[i]) return
					if(p.resumeIds[i]==0){$("#"+(i?"en":"cn")+"Finish").show();}
					if(p.resumeIds[i]=== null || p.resumeIds[i] === undefined)p.resumeIds[i]=0
					$.ajax({
						url:"/touch/person/resume/getSubResume_action.ujson?m.langType="+i+"&m.resumeId="+p.resumeId+"&m.subResumeId="+p.resumeIds[i]
						,type : "GET"
						,error : function(){
							alert('请求出错!');
						}
						,success : function(data, status, xhr){
							var DATA = util.toJSON(data)
							if(DATA==null){alert('请重新登录!');return;}
								DATA.langType = i//设置中英文识别
							var lang = ["cn","en"]
							var D = out.getLiteResume(DATA)
								,H = $("ul."+lang[i])
								H.html(juicer(H.html(),D))
								otherResumeLoad = true;
								sessionStorage["r"+p.resumeId+"s"+p.resumeIds[i]] = JSON.stringify(DATA)
								//处理当前简历ID的时候 可能出错
								$("ul.en a",false).click(function(){
									sessionStorage["subResumeId"] = p.resumeIds[1]
									window.location.href="/touch/person/resume/resumeModule.uhtml?m.module="+$(this).attr("rel")+"&lang=1"
								})
								$("ul.cn a",false).click(function(){
									sessionStorage["subResumeId"] = p.resumeIds[0]
									window.location.href="/touch/person/resume/resumeModule.uhtml?m.module="+$(this).attr("rel")+"&lang=0"
								})
								isLoad[i] = true
								//计算完成度
							var finishPar = {}
								finishPar[lang[i]] = DATA
								p.finish = resume.getFinished(finishPar)
								$("#"+lang[i]+"Finish").html("("+p.finish[lang[i]]+"%)").show()
						}
					})
				}
			});
			$("#operate_lang li").each(function(i){
				$(this).click(function(){
					if(i==silderAt) return;
					if(i<silderAt)
						silder.next(-1)
					else
						silder.next(1)
					silderAt=i;
				});
			})
			$("#operate_lang li").eq(p.jsonData.langType).addClass("active")
			$("#model_list").addClass(lang)
			if(lang=="en"){
				silder.next(1);
				silderAt=1;
				$("#enFinish").show();
				$("#cnFinish").hide();
				$("ul.en a").click(function(){
					sessionStorage["subResumeId"] = p.resumeIds[1]
					window.location.href="/person/resume/resumeModule.html?act="+$(this).attr("rel")+"&lang=1"
				})
			}
			//另外一份子简历的处理 end
			out.setMaster(p.resumeId)
			out.setRename()
			out.setDelete(p.resumeId)
		}
		//拼装简历的简短信息
		,getLiteResume : function(data){
			var lang = data.langType=="0"?"cn":"en"
			return {
				base : function(){
					var s=(data.base.name||"")+","+person.dic.sex[lang][data.base.sex]+","+(data.base.locationPCName||"")+","+(person.dic.marriage[lang][data.base.marriage]||"")
					return s.replace(/[,-]{1,}/g,",").replace(/^[,-]{1,}|[,-]{1,}$/g,"")
				}()
				,photo : function(){
					if(!data.base.photo) return "";
					if(data.base.photoFlag==0) return '<i class="camera-disabled"><em></em></i>';
					return '<i class="camera"><em></em></i>'
				}()
				,apply : function(){
					var txt = ""
					for(var i=1;i<5;i++){
						if(!data.apply["jobFunName"+i]){}else{txt+=","+data.apply["jobFunName"+i]}
					}
					return txt!=""?txt.substring(1):person.dic.note[lang][89]
				}()
				,education : function(){
					if(data.education.length==0) return person.dic.note[lang][90]
					var newEdu = data.education.sort(function(a,b){
						return b.degreeID-a.degreeID
					})
					return newEdu[0].beginDate+"~"+newEdu[0].endDate+","+newEdu[0].school
				}()
				,train : function(){
					var tra = data.train;
					if(tra.length<=0) return person.dic.note[lang][91];
					var train = [];
					for(var key in tra){
						var _train = tra[key];
						train[key] = _train.trainingName;
					}
					return train.join(',');
				}()
				,workedYear : function(){
				    var total = 0;
                    var daterange = [];
                    var workArr = data.work;
                    var step = 24 * 3600 * 1000;

					if(!workArr) return person.dic.note[lang][92];
					
                    for (var d = 0; d < workArr.length; d++) {
                        var beginDate = new Date((workArr[d].beginDate).replace("-", "/"));
                        var endDate = ("" == workArr[d].endDate) ? new Date() : new Date((workArr[d].endDate).replace("-", "/"));

                        if (0 == daterange.length) {
                            total += (endDate.getTime() - beginDate.getTime()) / step;
                        }else {
                            var tmpbegin = null, tmpend = null;
                            for (var i = 0; i < daterange.length; i++) {

                                if (null == tmpbegin && null == tmpend) {
                                    tmpbegin = beginDate; tmpend = endDate;
                                }

                                if (tmpbegin.getTime() >= daterange[i].beginDate.getTime() && tmpend.getTime() <= daterange[i].endDate.getTime()) {
                                    tmpbegin = null; tmpend = null;
                                    break;
                                }

                                else if (tmpbegin.getTime() < daterange[i].beginDate.getTime() && tmpend.getTime() >= daterange[i].beginDate.getTime()) {
                                    tmpend = daterange[i].beginDate;
                                }

                                else if (tmpbegin.getTime() <= daterange[i].endDate.getTime() && tmpend.getTime() > daterange[i].endDate.getTime()) {
                                    tmpbegin = daterange[i].endDate;
                                }

                            }

                            if (null != tmpbegin && null != tmpend) {
                                total += (tmpend.getTime() - tmpbegin.getTime()) / step;
                            }
                        }
                        daterange.push({ "beginDate" : beginDate, "endDate" : endDate });
                    }

                    var y = "" + parseInt(total / 365);
                    var m = "" + parseInt((total % 365) / 30);

					if(y>0){
						return person.dic.note[lang][87].replace("{y}",y).replace("{m}",m)
					}else if(m>0){
						return person.dic.note[lang][88].replace("{m}",m)
					}
					return person.dic.note[lang][92]
				}()
				,project : function(){
					var proj = data.project;
					if(proj.length<=0) return person.dic.note[lang][93]
					var project = [];
					for(var key in proj){
						var _proj = proj[key];
						project[key] = _proj.projectName;
					}
					return project.join(',');
				}()
				,ability : function(){
					var ab = data.ability;
					if(ab.length<=0) return person.dic.note[lang][94]
					var ability = [];
					for(var key in ab){
						var abi = ab[key];
						ability[key] = abi.SkillName;
					}
					return ability.join(',');
				}()
				,language : function(){
					var lg = data.language
					if(lg.length==0) return person.dic.note[lang][98]
					var language = []
					for(var key in lg) {
						var lan = lg[key]
						//language[key] = resume.dic.languageType[lan.languageType%2][lang][lan.id]
						language[key] = lan.lanName;
					}
					return language.join(",");
				}()
				,self: data.self.careerDirection|| person.dic.note[lang][96]
				,school: function(){
					var sch = data.school
					if(sch.length==0) return person.dic.note[lang][98]
					var school = []
					for(var key in sch) {
						var _sch = sch[key]
						school[key] = _sch.PracticeName;
					}
					return school.join(",");
				}()
				,certificate: function(){
					var cf = data.certificate,txt=""
					if(cf.length==0) return person.dic.note[lang][98]
					for(var i=0;i<cf.length;i++){
						txt+=","+cf[i].cerName
					}
					return txt.substring(1)
				}()
				,cert: function(){
					var cert = data.cert,txt=""
					if(cert.length==0) return person.dic.note[lang][99]
					for(var i=0;i<cert.length;i++){
						txt+=","+cert[i].certName
					}
					return txt.substring(1)
				}()
				,otherInfo: function(){
					var otherInfo = data.otherInfo,txt=""
					if(otherInfo.length==0) return person.dic.note[lang][100]
					for(var i=0;i<otherInfo.length;i++){
						txt+=","+otherInfo[i].TopicDesc
					}
					return txt.substring(1)
				}()
			}//end return
		}
		//设置简历信息
		,setMaster : function(rid){
			$("#setMaster").click(function(){
				if(!confirm("你是否需要将：“"+sessionStorage["resumeName"]+"”为默认求职简历？"))return;
				$.ajax({
					url:"/person/resume/setMaster.ujson?resumeId="+rid
					,type : "GET"
					,error : function(){
						alert('请求出错!');
					}
					,success : function(data){
						var DATA = util.toJSON(data)
						if(DATA.success!=true){
							alert('设置失败!');
						}
						$("#manageList").hide()
					}
				})
			})
		}
		//重命名简历
		,setRename : function(){
			var reName=""
			$("#setRename").click(function(){
				//if(reName) reName.remove()
				var html = '<div class="reset_name">'
						 + '	<h1>简历重命名</h1>'
						 + '	<div class="content">'
						 + '		<div class="txt">请输入新的简历名称：</div>'
						 + '		<div><input type="text" class="inputText" style="margin-left:-6px;" id="resumeName"></div>'
						 + '	</div>'
						 + '	<div class="btn"><button class="btn1_submit box-ok">确定</button></div>'
						 + '</div>'
				reName = new mBox(html,{
					title:"重命名简历"
					,className : "reName"
					,width:260
					,onok:function(boxObj){
						var box = boxObj.box
						var resumeName = util.trim(box.find("#resumeName").val())
						if(!util.check(resumeName,{
							notEmpty:true
							,min:4
							,minType:1
							,max:20
							,maxType:1
							,error : function(){
								alert("新简历名称:最少2个汉字4个字母,最多10个汉字!")
							}
						})) return
						$.ajax({
							url:"/api/web/person.api?act=resume_save"
							,data : {"txtResumeName":resumeName}
							,type : "POST"
							,dataType: "json"
							,beforeSend : function(){
								ui.loading.show({id:'update_loading',z:9999});
								ui.mask.show({id:'update_mask',z:6666});
							}
							,error : function(){
								ui.loading.hide({id:'update_loading'});
								alert("通讯失败!")
								ui.mask.hide({id:'update_mask'});
							}
							,success : function(data){
								ui.loading.hide({id:'update_loading'});
									if(data.status!=1){
										alert('设置失败!');
										return;
									}
									sessionStorage["resumeName"] = resumeName
									$("#resumeName").html(resumeName)
									reName.close()
								ui.mask.hide({id:'update_mask'});
								$("#manageList").hide()
							}
						})
					}
				})
				reName.open()
			});
		}
		//删除简历
		,setDelete :function(rid){
			$("#setDelete").click(function(){
				if(!confirm("你是否需要将：“"+sessionStorage["resumeName"]+"”求职简历删除？"))return;
				$.ajax({
					url:"/person/resume/del.ujson?resumeId="+rid
					,type : "GET"
					,error : function(){
						alert('请求出错!');
					}
					,success : function(data){
						var DATA = util.toJSON(data)
						if(DATA.success!=true){
							alert('设置失败!');return;
						}
						window.location.href="/touch/person/resumeManage.uhtml?t="+(+new Date())
					}
				})
			})
		}
	}
	module.exports = out;
});
