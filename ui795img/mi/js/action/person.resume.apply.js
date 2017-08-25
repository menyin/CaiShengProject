define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	// ,uiSelector = require("ui.selector")
	// ,mEditor = require("ui.mEditor")
	//,base = require("action.person.resume.base")


	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){

			person.updateInfo()
			myCache.par = p
			resume.selectLanguage(p.lang)
			resume.setGoBack()
		//取数据
		var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return }
			p.data = util.toJSON(p.data)
		var lang = (p.lang=="1")?"en":"cn"
		//初始化各种数据
		var jsonData = recordData = p.data.apply

		//构造option选项
			person.showOption()
			myCache.dataNotChange = true;
			myCache.goBack = $('#goBack')
			myCache.saveBtn = $('#applyBtn')
			resume.goBack(false,myCache,{title:'求职意向',ok:function(box){
					box.close();
					myCache.saveBtn.trigger('click')
			}})

		//回显数据
		var sData = out.getIdsNames(jsonData)
			$("#homePositionId").val(sData.position)
			if(sData.posName)
			$("#position").html(sData.posName)

			$("#callingVal").val(sData.calling)
			if(sData.callingName)
			$("#calling").html(sData.callingName)

			if(sData.areaName)
			$("#applyArea").html(sData.areaName)
			$("#applyArea").attr('data-id',sData.area)
			// $("#jobSeeking1").val(jsonData.jobSeeking1)

			var $salarys = $("#salarys");
			$salarys.text(person.dic.salarys[lang][jsonData.salary])
			$salarys.attr('data-su_id',jsonData.salary);

			var $joinType = $("#joinType");
			$joinType.text(person.dic.joinType[lang][jsonData.joinType]);
			$joinType.attr('data-su_id',jsonData.joinType);

			var $joinTime = $("#joinTime");
			$joinTime.text(person.dic.start[lang][jsonData.checkinDate]);
			$joinTime.attr('data-su_id',jsonData.checkinDate);

			$('.select_box.tip').each(function(){
				var $that = $(this);
				if($that.text() === ""){
					$that.text($that.attr('placeholder'));
					$that.css('color','#888888');
				}
			})

			var salaryData = [];
			var salarys = person.dic.salarys[lang];
			for (item in salarys){
				var o={};
				if(salarys.hasOwnProperty(item)){
					o.id=item+"";
					o.value = salarys[item];
					salaryData.push(o);
				}
			}

			var joinTypeData = [];
			var joinType = person.dic.joinType[lang];
			for (item in joinType){
				var o={};
				if(joinType.hasOwnProperty(item)){
					o.id=item+"";
					o.value = joinType[item];
					joinTypeData.push(o);
				}
			}

			var joinTimeData = [];
			var joinTime = person.dic.start[lang];
			for (item in joinTime){
				var o={};
				if(joinTime.hasOwnProperty(item)){
					o.id=item+"";
					o.value = joinTime[item];
					joinTimeData.push(o);
				}
			}

			resume.initIosSelect(lang,{selector:'#applyArea',text:'#applyAreaId',cache:'#applyAreaCacheIds',max:5,onlyChild:false,title:person.dic.title[lang]['locations'],
				callback:function(){
					if(myCache.dataNotChange) myCache.dataNotChange = false;
				}});
			resume.initIosSelect(lang,{selector:'#position',type:"position",text:'#homePositionId',max:5,onlyChild:false,p_title:person.dic.title[lang]['positions'],
				callback:function(){
					if(myCache.dataNotChange) myCache.dataNotChange = false;
				}});
			resume.initIosSelect(lang,{selector:'#joinType',data:joinTypeData,title:person.dic.title[lang]['joinType'],
				callback:function(){
					if(myCache.dataNotChange) myCache.dataNotChange = false;
				}});
			resume.initIosSelect(lang,{selector:'#salarys',data:salaryData,title:person.dic.title[lang]['salarys'],
				callback:function(selectOneObj){
					if(myCache.dataNotChange) myCache.dataNotChange = false;
				}});

			resume.initIosSelect(lang,{selector:'#joinTime',data:joinTimeData,title:person.dic.title[lang]['joinTime'],
			callback:function(selectOneObj){
				var key = 'joinTime';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			//行业类别
			resume.initIosSelect(lang,{selector:'#calling',type:"industry",text:'#callingVal',max:5,onlyChild:false,p_title:person.dic.title[lang]['industry'],
				callback:function(){
					if(myCache.dataNotChange) myCache.dataNotChange = false;
			}});
			// resume.initIosSelect(lang,{selector:'#calling',type:"industry",text:'#callingVal',max:1,onlyChild:true,
			// callback:function(s){
			// 	if ( s.selectedItemsId == 0 ) myCache.recordData['calling'] = '';
			// 	else	myCache.recordData['calling'] = s.selectedItemsId;
			// 	if(myCache.dataNotChange) myCache.dataNotChange = false;
			// }
			// });
			//完成度
			$("#applyBtn").click(function(){
				out.saveApplyData(p);
			})
		}
		,setIdsNames : function(name,val){
			if(!val){
				return {}
			}
			var lst = val.split(",")
				,reVal = {}
				,v;
			for(var i=1;i<=5;i++){
				v = lst[i-1];
				if(v){
					reVal[name+i] = lst[i-1]
				}else{
					reVal[name+i] = ""
				}
			}
			return reVal
		}
		,getIdsNames : function(jsonData){
			var jobFunName="",jobFunction="",jobLocPC="",jobLocPCName="",calling="",callingName=""
			for(var i=1;i<=5;i++){
				if(jsonData["jobFunName"+i]!=""&&jsonData["jobFunName"+i]!="0")  jobFunName+=","+jsonData["jobFunName"+i]
				if(jsonData["jobFunction"+i]!=""&&jsonData["jobFunction"+i]!="0")  jobFunction+=","+jsonData["jobFunction"+i]
				if(jsonData["jobLocPC"+i]!=""&&jsonData["jobLocPC"+i]!="0")  jobLocPC+=","+jsonData["jobLocPC"+i]
				if(jsonData["jobLocPCName"+i]!=""&&jsonData["jobLocPCName"+i]!="0")  jobLocPCName+=","+jsonData["jobLocPCName"+i]
				if(jsonData["callingName"+i]!=""&&jsonData["callingName"+i]!="0")  callingName+=","+jsonData["callingName"+i]
				if(jsonData["calling"+i]!=""&&jsonData["calling"+i]!="0")  calling+=","+jsonData["calling"+i]
			}
			return {
				posName : jobFunName.length>1 ? jobFunName.substring(1) : jobFunName
				,position : jobFunction.length>1 ? jobFunction.substring(1) : jobFunction
				,area : jobLocPC.length>1 ? jobLocPC.substring(1) : jobLocPC
				,areaName : jobLocPCName.length>1 ? jobLocPCName.substring(1) : jobLocPCName
				,callingName : callingName.length>1 ? callingName.substring(1) : callingName
				,calling : calling.length>1 ? calling.substring(1) : calling
			}
		}
		,saveApplyData : function(p){

			var foundErr = false;
			var posIds = $("#homePositionId").val()
				,postNames =  $("#position").html()
				if(posIds.length<1){
					message(p.lang,{cn:"意向职位不能为空!",en:"Please select target positions!"})
					return
				}
			var areaIds = $("#applyAreaCacheIds").val()
				,areaNames =  $("#applyArea").html()
				if(areaIds.length<1){
					message(p.lang,{cn:"意向地区不能为空!",en:"Please select target locations!"})
					return
				}

			//意向行业
			var callingIds = $("#callingVal").val()
			,callingNames =  $("#calling").html()
			if(callingIds.length<1){
				message(p.lang,{cn:"意向行业不能为空!",en:""})
				return
			}
			var PostData = {}
				PostData = $.extend(PostData,out.setIdsNames("jobFunction",posIds))
				PostData = $.extend(PostData,out.setIdsNames("jobFunName",postNames))
				PostData = $.extend(PostData,out.setIdsNames("jobLocPC",areaIds))
				PostData = $.extend(PostData,out.setIdsNames("jobLocPCName",areaNames))
				PostData = $.extend(PostData,out.setIdsNames("calling",callingIds))
				PostData = $.extend(PostData,out.setIdsNames("callingName",callingNames))
				PostData.jobSeeking1 = $("#jobSeeking1").val()
				PostData.jobSeeking2 = ""
				PostData.jobSeeking3 = ""
				foundErr = !util.check(PostData.jobSeeking1,{
					notEmpty:true
					,max:60
					,maxType : 0
					,error:function(s,i,v){
						message(p.lang,{cn:"期望职位，长度不能超过60个字!",en:""})
					}
				})
				if(foundErr) return;

				//职位类型
				PostData.joinType = $("#joinType").attr('data-su_id') || '';
				if(!PostData.joinType || PostData.joinType=="0"){
					message(p.lang,{cn:"请选择职位类型!",en:""})
					return
				}

				//到岗时间
				PostData.checkinDate = $("#joinTime").attr('data-su_id') || '';
				if(!PostData.checkinDate || PostData.checkinDate=="0"){
					message(p.lang,{cn:"请选择到岗时间!",en:""})
					return
				}

				//期望薪资
				PostData.salary = $("#salarys").attr('data-su_id') || '';
				if(!PostData.salary || PostData.salary=="0"){
					message(p.lang,{cn:"请选择期望月薪!",en:""})
					return
				}

			PostData = $.extend(myCache.par.data.apply,PostData)
			var sessionStorageCache = sessionStorage[resume.getDataKey()]
			sessionStorage[resume.getDataKey()] = util.toString(myCache.par.data)

			var par = {
				langType : p.data.langType
				// ,resumeId : p.data.resumeId
				// ,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
						'act': 'join_save',
						'resume_id': p.data.resumeId,
						'txtJoinOffice': PostData.jobSeeking1,
						'radJoinType': PostData.joinType,//意向类型
						'hidJobSortExpect': posIds,//职位类型
						'hidCallingExpect': callingIds,//行业
						'hidCurAreaBasic': areaIds,//地址
						'txtJoinSalary': PostData.salary,
						'joinTime': PostData.checkinDate,
					}
				,error : function(){
					sessionStorage[resume.getDataKey()] = sessionStorageCache
					alert('请求出错!')
				}
				,success : function(data, status, xhr){
					if(data.success){
						sessionStorage[resume.getDataKey()] = util.toString(myCache.par.data)
						message(p.lang,{cn:"求职意向已保存!",en:"Ok!"})
						resume.goBack(true,myCache)
						myCache.goBack.trigger('click');
					}else alert('错误:'+resumeLang.get(data.msg))
				}
			}
			resume.postUpdate(par)


		}
	}
	module.exports = out;
});