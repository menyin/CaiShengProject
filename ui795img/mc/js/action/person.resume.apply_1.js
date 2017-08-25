define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	,uiSelector = require("ui.selector")
	,mEditor = require("ui.mEditor")

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
		//初始化各种数据
		var jsonData = p.data.apply
		//构造option选项
		person.showOption()

		//回显数据
		var sData = out.getIdsNames(jsonData)
			$("#applyPositionVal").val(sData.position)
			if(sData.posName)
			$("#applyPosition").html(sData.posName)

			$("#applyAreaVal").val(sData.area)
			if(sData.areaName)
			$("#applyArea").html(sData.areaName)

			$("#jobSeeking1").val(jsonData.jobSeeking1)
//			$("#jobSeeking2").val(jsonData.jobSeeking2)
//			$("#jobSeeking3").val(jsonData.jobSeeking3)

			/*if(jsonData.salary > 0) {
				$("#salaryType").val(1)
				$("#salary").val(jsonData.salary)
				if(jsonData.salaryNegotiable=="1")$("#salaryNegotiable")[0].checked = "checked"
				$("#salaryInput").show()
			}*/
			$("#salary").val(jsonData.salary);
			$("#joinType").val(jsonData.joinType);
			//薪酬类型切换事件
			$("#salaryType").change(function() {
				var val = $(this).val();
				$input = $("#salaryInput");
				if(val == 0) {
					$input.hide();
					$("#salary").val(0);
					$("#salaryNegotiable").get(0).checked = false;
				} else if(val == 1) {
					$input.show();
				}
			})
//			if(jsonData.accommodationReq=="1")$("#accommodationReq")[0].checked = "checked"

			$("#otherRequirement").val(jsonData.otherRequirement)

			//到岗时间初始化
			//if(jsonData.checkinDate >= 0 && jsonData.checkinDate <= 3) {
			if(jsonData.checkinDate){
				$("#checkinDate option[value='"+jsonData.checkinDate+"']").attr("selected",true)
			} else {
				$("#checkinDate option").eq(1).attr("selected",true)
			}
//			var checkinDate
//			if(jsonData.checkinDate=="" || jsonData.checkinDate=="0") {
//				checkinDate ="0"
//			}else{
//				if(/^[\d\.]{1,3}$/.test(jsonData.checkinDate) && (jsonData.checkinDate>=0.5 && jsonData.checkinDate <=11)){
//					checkinDate = "2"
//					$("#checkinDate2").val(jsonData.checkinDate)
//				}else{
//					var cDate = jsonData.checkinDate.split("-")
//					var y = cDate[0]
//						,m = cDate[1]
//						,d = cDate[2]
//					$("#Date_Year").val(y)
//					$("#Date_Month").val(m)
//					$("#Date_Day").val(d)
//
//					//检查下日期
//					var max = util.getMaxDay(y,m,0)
//					$("#checkinDate_d option").each(function(i){
//						if(i>=max) $(this).hide()
//						else $(this).show()
//					})
//					checkinDate = "1"
//				}
//			}
//			$("#checkinDate input")[checkinDate].checked="checked"
			//到岗时间初始化 end

			/* * * * * * * * 事件操作 * * * * * * * */
			//岗位
			var posSelector = new uiSelector({
				type : "position"
				,max : 5
				,lang : p.lang=="1"?"en":"cn"
				,textId : "#applyPosition"
				,valueId : "#applyPositionVal"
				,onShow : function(s){
					var ids = $("#applyPositionVal").val().split(",");
					$('.clearSelector', s.selector).trigger('tap');
					ids.forEach(function(id){
						$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
						$('[data-cv="'+id+'"]',s.iscrollLv2.scroller).trigger('tap');
					})
				}
				,onSave : function(s){
					if ( s.OPTIONS.selectedItemsId == 0 ) {
						$('#applyPositionVal').val('');
					}
					if ( !s.OPTIONS.selectedItemsText.length ) {
						$("#applyPosition").html(p.lang?$("#applyPosition").attr("en"):"点击选择");
					}
				}
			});
				posSelector.init()
				$("#applyPosition").click(function(e){
					setTimeout( function () { posSelector.open(); }, 200 )
				});
			//岗位 end

			//城市地区
			var areaSelector = new uiSelector({
					type : "area"
					,max : 5
					,showTown: true
					,lang : p.lang=="1"?"en":"cn"
					,textId : "#applyArea"
					,valueId : "#applyAreaVal"
					,onShow : function(s){
						var ids = $("#applyAreaVal").val().split(",");
						$('.clearSelector', s.selector).trigger('tap');
						ids.forEach(function(id){
							$('[data-pv="'+s.getPID(id)+'"]',s.iscrollLv1.scroller).trigger('tap');
							$('[data-cv="'+s.getCID(id)+'"]',s.iscrollLv2.scroller).trigger('tap');
							$('[data-tv="'+id+'"]',s.iscrollLv3.scroller).length && $('[data-tv="'+id+'"]',s.iscrollLv3.scroller).trigger('tap');
						})
					}
					,onSave : function(s){
						/*if ( s.OPTIONS.selectedItemsId == 0 ) {
							$('#applyAreaVal').val('');
						}
						if ( !s.OPTIONS.selectedItemsText.length ) {
							$("#applyArea").html(p.lang?$("#applyArea").attr("en"):"点击选择");
						}*/

						var ids = s.OPTIONS.selectedItemsId.split(',');
						var text = s.OPTIONS.selectedItemsText.split(',');
						var cacheId = '';
						var cityIds = [];
						var towns = [];
						for (var i = ids.length - 1; i >= 0; i--) {
							//cacheId = ids[i].slice(0,4);
							cacheId = ids[i];
							if ( !~cityIds.indexOf( cacheId ) ) {
								cityIds.push( cacheId );
								if ( ids[i].length > 4 ) {
									towns.push( text[i] );
								} else {
									towns.push( '' );
								}
							} else {
								if ( ids[i].length > 4 ) {
									towns[towns.length-1] += ';' + text[i] ;
								}
							}
						};
						if ( s.OPTIONS.selectedItemsId == 0 ) {
							$('#applyAreaVal').val('');
							$('#applyArea').val('点击选择');
						} else {
							$('#applyAreaVal').val(cityIds.join(','));
							$('#applyArea').val(towns.join(','));
						}
					}
				});
				areaSelector.init()
				$("#applyArea").click(function(e){
					setTimeout( function () { areaSelector.open(); }, 200 )
				});
			//城市地区 end

//			$("#otherRequirement").click(function(){
//				new mEditor($(this).val(),{saveid:this.id})
//			})

			//完成度
			$("#applyBtn").click(function(){
				var foundErr = false;
				var posIds = $("#applyPositionVal").val()
					,postNames =  $("#applyPosition").html()
					if(posIds.length<1){
						message(p.lang,{cn:"意向岗位不能为空!",en:"Please select target positions!"})
						return
					}
				var areaIds = $("#applyAreaVal").val()
					,areaNames =  $("#applyArea").html()
					if(areaIds.length<1){
						message(p.lang,{cn:"意向地区不能为空!",en:"Please select target locations!"})
						return
					}
				var PostData = {}
					PostData = $.extend(PostData,out.setIdsNames("jobFunction",posIds))
					PostData = $.extend(PostData,out.setIdsNames("jobFunName",postNames))
					PostData = $.extend(PostData,out.setIdsNames("jobLocPC",areaIds))
					PostData = $.extend(PostData,out.setIdsNames("jobLocPCName",areaNames))
					PostData.jobSeeking1 = $("#jobSeeking1").val()
					PostData.jobSeeking2 = ""
					PostData.jobSeeking3 = ""

					foundErr = !util.check(PostData.jobSeeking1,{
						notEmpty:false
						,max:60
						,error:function(s,i,v){
							message(p.lang,{cn:"寻求职位，长度不能超过60个字!",en:"jobs max 60 characters!"})	
						}
					})
					if(foundErr) return;

					//薪资待遇
					var salary_cn = "请填写正确的期望月薪（正整数），如3500！"
					var salary_en = "Please input the correct Salary, for Example: 3500!"
					PostData.salary = $("#salary").val() || "0"
					foundErr = !util.check(PostData.salary,{
						notEmpty:false
						,regex:"^[\\d]{0,10}$"
						,error:function(s,i,v){
							message(p.lang,{cn:salary_cn,en:salary_en})
						}
					})
					if(foundErr) return;

					/*if($("#salaryNegotiable")[0].checked){
						PostData.salaryNegotiable = "1"
					}else{
						PostData.salaryNegotiable = "0"
					}
					
					if($("#salaryType").val() == 1) {
						//具体薪酬
						if(PostData.salary <= 0) {
							message(p.lang,{cn:salary_cn,en:salary_en})
							return;
						}
					}*/
					
					//取消显示和勾选要求住宿
					PostData.accommodationReq = "0"
//					if($("#accommodationReq")[0].checked){
//						PostData.accommodationReq = "1"
//					}else{
//						PostData.accommodationReq = "0"
//					}
					//获取到岗时间
					PostData.checkinDate = $("#checkinDate").val();
//					$("#checkinDate input").each(function(i){
//						var $this = $(this)
//						if($this[0].checked&&i==0){ PostData.checkinDate ="0"; return}
//						if($this[0].checked&&i==1){
//						var y = $("#Date_Year").val()
//							,m = $("#Date_Month").val()
//							,d = $("#Date_Day").val()
//							if(!util.isSelectDate(y,m,d)){
//								message(p.lang,{cn:"到岗时间：没有这一天!",en:"Registration Time：Without this day!"})
//								foundErr = true
//								return
//							}
//							if(new Date(y,m,d)<new Date()){
//								message(p.lang,{cn:"到岗时间：不能小于当前日期!",en:"Registration Time：Can not be less than the current date!"})
//								foundErr = true
//							}
//							PostData.checkinDate = y+"-"+m+"-"+d;
//						}
//						if($this[0].checked&&i==2){
//							PostData.checkinDate = $("#checkinDate2").val();
//						}
//					})
//					if(foundErr) return;
					//获取其他要求
					/*PostData.otherRequirement = $("#otherRequirement").val()
					foundErr = !util.check(PostData.otherRequirement,{
						notEmpty : false
						,max : 250
						,maxType : 1
						,error:function(s,i,v){
							message(p.lang,{cn:"福利要求：最长不超过250字!",en:"Requirements:no longer than 250 characters!"})	
						}
					})
					if(foundErr) return;*/
					
					PostData.joinType = $('#joinType').val();
					if(!PostData.joinType) {
						alert("请选择职位类型");
						return;
					}
					
				PostData = $.extend(myCache.par.data.apply,PostData)
				
				var sessionStorageCache = sessionStorage[resume.getDataKey()]
				sessionStorage[resume.getDataKey()] = util.toString(myCache.par.data)
				
				var par = {
					langType : p.data.langType
					//,resumeId : p.data.resumeId
					//,subResumeId : sessionStorage["subResumeId"]
					,finished : true
					,data : { 
						//"apply" : util.toString(PostData),
						'act': 'join_save',
						'resume_id': p.data.resumeId,
						'txtJoinOffice': PostData.jobSeeking1,
						'radJoinType': PostData.joinType,//意向类型
						'hidJobSortExpect': posIds,//职位类型
						//'hidCallingExpect': 12,//行业
						'hidCurAreaBasic': areaIds,//地址
						'txtJoinSalary': PostData.salary,
						'joinTime': PostData.checkinDate,
					}
					,error : function(){
						sessionStorage[resume.getDataKey()] = sessionStorageCache
						alert('请求出错!')
					}
					,success : function(data, status, xhr){
						if(data.status==1){
							sessionStorage[resume.getDataKey()] = util.toString(myCache.par.data)
							message(p.lang,{cn:"求职意向已保存!",en:"Ok!"})
						}else alert('错误:'+resumeLang.get(data.msg))
					}
				}
				resume.postUpdate(par)
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
			var jobFunName="",jobFunction="",jobLocPC="",jobLocPCName=""
			for(var i=1;i<=5;i++){
				if(jsonData["jobFunName"+i]!=""&&jsonData["jobFunName"+i]!="0")  jobFunName+=","+jsonData["jobFunName"+i]
				if(jsonData["jobFunction"+i]!=""&&jsonData["jobFunction"+i]!="0")  jobFunction+=","+jsonData["jobFunction"+i]
				if(jsonData["jobLocPC"+i]!=""&&jsonData["jobLocPC"+i]!="0")  jobLocPC+=","+jsonData["jobLocPC"+i]
				if(jsonData["jobLocPCName"+i]!=""&&jsonData["jobLocPCName"+i]!="0")  jobLocPCName+=","+jsonData["jobLocPCName"+i]
			}
			return {
				posName : jobFunName.length>1 ? jobFunName.substring(1) : jobFunName
				,position : jobFunction.length>1 ? jobFunction.substring(1) : jobFunction
				,area : jobLocPC.length>1 ? jobLocPC.substring(1) : jobLocPC
				,areaName : jobLocPCName.length>1 ? jobLocPCName.substring(1) : jobLocPCName
			}
		}
	}
	module.exports = out;
});