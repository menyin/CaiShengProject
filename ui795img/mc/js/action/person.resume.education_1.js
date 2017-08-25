define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	,juicer = require("juicer");

	// 包含中文字符和中文标点符号 。？！，、；：“”‘’（）《》〈〉【】『』「」〔〕…—～￥
	var regCharCN = "^[\\s\\w\\u4e00-\\u9fa5\\u3002\\uff1f\\uff01\\uff0c\\u3001\\uff1b\\uff1a\\u201c\\u201d\\u2018\\u2019\\uff08\\uff09\\u300a\\u300b\\u3008\\u3009\\u3010\\u3011\\u300e\\u300f\\u300c\\u300d\\u3014\\u3015\\u2026\\u2014\\uff5e\\uffe5]+$";

	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			resume.selectLanguage(p.lang)

			p.lang = p.lang=="1"?"en":"cn"
			//取数据
		var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!") }
			p.data = util.toJSON(p.data)
			p.template = $("#template").val()
			//初始化数据
			person.showOption()
		var jsonData = p.data.education
			myCache.goBack = $("#goBack")
			myCache.list = $("#eduList")
			myCache.listBox = $("#listBox")
			myCache.info = $("#educationInfo")
			myCache.addBtn = $("#educationAdd")
			myCache.saveBtn = $("#eduBtn")
			myCache.delBtn = $("#educationManage")
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")

			//回显数据
			if(jsonData.length>0){
					var eduList = $("<ul></ul>")
				for(var i=0;i<jsonData.length;i++){
					var dt= $.extend({},jsonData[i])
						dt.degree = resume.dic.degree[p.lang][dt.degreeID]
						dt.endDate = dt.endDate || resume.dic.note[p.lang]["endDate"]
					var li = $(juicer(p.template,dt))
					eduList.append(li)
				}
				myCache.list.append(eduList.find("li")).show()
			}
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
		//以下有待优化
		,empty : function(){
			myCache.info.find("input").each(function(){  this.value="" });
			myCache.info.find("select").each(function() { $(this).find("option").eq(0).attr("selected","true") });
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
				var MODDATA = myCache.par.data.education.filter(function(v){ return v.id == MODID})[0]
					out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
				var o = [],v = []
					o[0]="school";v[0]=MODDATA.school
					o[1]="speciality";v[1]=MODDATA.speciality
					o[2]="degreeID";v[2]=MODDATA.degreeID
					o[3]="certificateNo";v[3]=MODDATA.certificateNo
					o[4]="certificateNo";v[4]=MODDATA.certificateNo
					o[5]="beginDate_y";v[5]=MODDATA.beginDate.substring(0,4)
					o[6]="beginDate_m";v[6]=MODDATA.beginDate.substring(5,7)
					if(MODDATA.endDate!=""){
						o[7]="endDate_y";v[7]=MODDATA.endDate.substring(0,4)
						o[8]="endDate_m";v[8]=MODDATA.endDate.substring(5,7)
					}
					util.setMultiVal(o,v)
		}
		,del : function(e){
			var MODID = this.id.substring(1)
				resume.postDel({
					moudle : "education"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'edu_del',
						'eduid': MODID,
					}
					,error:function(){
						alert("删除教育经历出错")
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}
		,save : function(p){
			var foundErr = false
			var school = $("#school").val()
			foundErr = !util.check(school,{
				notEmpty : true
				,max:200
				,regEx: regCharCN
				,error : function(a,b,c){
					message(p.lang,{cn:"学校：不能为空,长度不能超过200字!",en:"School:Not empty,can't be more than 200 characters!"})
				}
			})
			if(foundErr) return;

			var speciality = $("#speciality").val()
			foundErr = !util.check(speciality,{
				notEmpty : true
				,max:200
				,regex: regCharCN
				,error : function(a,b,c){
					message(p.lang,{cn:"专业：不能为空,长度不能超过200字!",en:"Major:Not empty,can't be more than 200 characters!"})
				}
			})
			if(foundErr) return;

			var beginDate_y = $("#beginDate_y").val()
			foundErr = !util.check(beginDate_y,{
				notEmpty : true
				,max : 4
				,lt : new Date().getFullYear() + 1
				,regex: "^[\\d]+$"
				,error : function(a,b,c){
					message(p.lang,{cn:"请输入正确的起始日期",en:"Please enter the start date！"})
				}
			})
			if(foundErr) return;
			var beginDate_m = $("#beginDate_m").val()

			var endDate_y = $("#endDate_y").val()
			foundErr = !util.check(endDate_y,{
				notEmpty : false
				,max : 4
				,regex: "^[\\d]*$"
				,error : function(){
					message(p.lang,{cn:"请输入正确的截止日期",en:"Please enter the correct deadline！"})
				}
			})
			if(foundErr) return;
			var endDate_m = $("#endDate_m").val()
			var endDate = ""
			if(endDate_y!=""){
				if(new Date(beginDate_y,beginDate_m)>new Date(endDate_y,endDate_m)){
					message(p.lang,{cn:"截止日期不应小于起始日期",en:"The closing date can't be less than the starting date!"})
					return
				}
				endDate = endDate_y+"-"+endDate_m
			}else{
				if(new Date(beginDate_y,beginDate_m)>new Date()){
					message(p.lang,{cn:"起始日期不能大于当前日期",en:"The start date can't be greater than the current date！"})
					return
				}
			}
			if( (endDate_y||new Date().getFullYear()) - beginDate_y > 8){
				message(p.lang,{cn:"相隔不能超过8年",en:"It can't be more than 8 years!"});
				return;
			}
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"school":school
				,"speciality":speciality
				,"degreeID": $("#degreeID").val()
				,"certificateNo": $("#certificateNo").val()
				,"beginDate": beginDate_y+"-"+beginDate_m
				,"endDate": endDate
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var eduLen = p.data.education.length
			p.data.education = eduLen == 0 ? PostData : p.data.education
			sessionStorage[resume.getDataKey()] = util.toString(p.data);

			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : { 
					//"education" : util.toString(PostData)
					'act': 'edu_save',
					'eduid': saveID=="-1"?'':saveID,
					'txtEduName': school,
					'ymStartTime1955582': beginDate_y+"-"+beginDate_m,
					'ymEndTime1955582': endDate,
					'selEduBackGround': $("#degreeID").val(),
					'txtEduSpecialty': speciality,
					//"certificateNo": $("#certificateNo").val()//证书编号
				}
				,error : function(){
					sessionStorage[resume.getDataKey()] = sessionDataCache;
					alert('请求出错!');
				}
				,success : function(data){
					var DATA = data
					if(DATA.status){
						myCache.listBox.show()
						myCache.delBtn.show()
						out.goBack(true)
						if(!PostData[0].id){
							//PostData[0].id = DATA.education[0].id
							PostData[0].id = DATA.eduid;
							if(eduLen > 0){
								p.data.education.push(PostData[0])
							}else{
								p.data.education = PostData
							}
						}else{
							for(var i=0; i<p.data.education.length;i++){
								if(p.data.education[i].id == PostData[0].id){
									p.data.education[i] = PostData[0]
									break;
								}
							}
						}
						//更新最高学历
						if(PostData[0].degreeID > p.data.base.degree) {
							p.data.base.degree = PostData[0].degreeID
						}
						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						var dt= $.extend({},PostData[0])
							dt.degree = resume.dic.degree[p.lang][dt.degreeID]
							dt.endDate = dt.endDate || resume.dic.note[p.lang]["endDate"]
						var li = $(juicer(p.template,dt))
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
								LI.find("dt,.school").remove()
								LI.find("dl").append(li.find("dt,.school"))
						}
						myCache.info.hide()
						alert('教育经历已保存!')
					}else alert('错误:'+resumeLang.get(DATA.msg))
				}
			}
			resume.postUpdate(par)
		}
	}
	module.exports = out;
});