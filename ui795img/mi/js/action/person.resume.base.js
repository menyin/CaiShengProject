define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		// ,juicer = require("juicer")
		,util = require("util")
		,person = require("action.person")
		,resume = require("action.person.resume")
		// ,resumeLang = require("resume.lang")
		// ,linkSelect = require("ui.linkSelect")
		// ,dataArea = require("ui.data.area")
		,iosSelect = require("ui.iosSelect")
		// ,uiSelector = require('ui.selector')
		// ,IScroll = require("iscroll-lite");
	var message = resume.message
	var myCache = {};
	var recordData = {};
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			p.lang = (p.lang=="1")?"en":"cn"
			resume.selectLanguage(p.lang)
			resume.setGoBack()
			//取数据
		var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return; }
			p.data = util.toJSON(p.data)
			myCache.dataNotChange = true;
			myCache.goBack = $('#goBack')
			myCache.saveBtn = $('#saveBtn')
			resume.goBack(false,myCache,{title:'基本信息',ok:function(box){
					box.close();
					myCache.saveBtn.trigger('click')
			}})
			//初始化数据
			var jsonData = recordData = p.data.base
			var hometownPC = locationPC = [0,0,0];
			if(jsonData.hometownPC && jsonData.hometownPC.length==4){
				var hometownPC = function(){ return util.isCityId(jsonData.hometownPC)?[jsonData.hometownPC.substring(0,2)+'00',jsonData.hometownPC]:[0,0] }()
			}
			if(jsonData.hometownPC && jsonData.hometownPC.length==6){
				//特殊处理 北京1100， 重庆5000，上海3100, 天津1200
				var _home_pid = jsonData.hometownPC.substring(0,3)+'0';
				if(_home_pid==1100 || _home_pid==5000 || _home_pid==3100 || _home_pid==1200){
					var hometownPC = function(){ return util.isCityId(jsonData.hometownPC)?[_home_pid,jsonData.hometownPC,0]:[0,0,0] }()
				}else{
					var hometownPC = function(){ return util.isCityId(jsonData.hometownPC)?[jsonData.hometownPC.substring(0,2)+'00',jsonData.hometownPC.substring(0,4),jsonData.hometownPC]:[0,0,0] }()
				}
			}

			if(jsonData.locationPC && jsonData.locationPC.length==4){
				locationPC = function(){ return util.isCityId(jsonData.locationPC)?[jsonData.locationPC.substring(0,2)+'00',jsonData.locationPC]:[0,0] }()
			}
			if(jsonData.locationPC && jsonData.locationPC.length==6){
				//特殊处理 北京1100， 重庆5000，上海3100, 天津1200
				var _loca_pid = jsonData.locationPC.substring(0,3)+'0';
				if(_loca_pid==1100 || _loca_pid==5000 || _loca_pid==3100 || _loca_pid==1200){
					locationPC = function(){ return util.isCityId(jsonData.locationPC)?[_loca_pid,jsonData.locationPC,0]:[0,0] }()
				}else{
					locationPC = function(){ return util.isCityId(jsonData.locationPC)?[jsonData.locationPC.substring(0,2)+'00',jsonData.locationPC.substring(0,4),jsonData.locationPC]:[0,0] }()
				}
			}
			//构造option选项
			person.showOption()

			//检查一开始的数据,是否符合规范?

			//回显数据
			var ymd = jsonData.birthday?jsonData.birthday.split('-'):"";

			var v = [],o = [], attrName=[],attrVals=[];
			// v[11]=jsonData.name,o[11]="name"
			// v[19]=jsonData.email,o[19]="email"
			// v[21]=jsonData.mobile,o[21]="mobile"
			// v[22]=jsonData.address,o[22]="address"
			// v[23]=jsonData.qq,o[23]="qq"
			// v[34]=jsonData.cardNum,o[34]="cardNum"
			// v[33]=jsonData.mobile,o[33]="hidMobile"
			// if ( jsonData.imType == 3 ) {
			// 	v[28]=jsonData.imNum,o[28]="imNum"
			// }

			// util.setMultiVal(o,v);


			var now = new Date();
			if(ymd.length === 0){
				ymd[0]=now.getFullYear() - 18;
				ymd[1]=now.getMonth() + 1;
				ymd[2]=now.getDate();
			}
			o[12]="birthday",v[12]=jsonData.birthday;
			o[13]="birthday",v[13]=jsonData.birthday;
			o[14]="birthday",v[14]=jsonData.birthday;
			attrName[12]="year",attrVals[12]=ymd[0]>>0 +"";
			attrName[13]="month",attrVals[13]=ymd[1]>>0 +"";
			attrName[14]="date",attrVals[14]=ymd[2]>>0 +"";

			v[15]=person.dic.sex[p.lang][jsonData.sex],o[15]="sex"
			attrName[15]="data-su_id",attrVals[15]=jsonData.sex+"";
			v[16]=jsonData.height == 0 ? '':jsonData.height+' cm',o[16]="height"
			attrName[16]="data-su_id",attrVals[16]=jsonData.height == 0 ?'170':jsonData.height+"";
			recordData['height']=jsonData.height == 0 ? '':jsonData.height
			v[18]=person.dic.marriage[p.lang][jsonData.marriage],o[18]="marriage"
			attrName[18]="data-su_id",attrVals[18]=jsonData.marriage+"";
			v[29]=person.dic.degree[p.lang][jsonData.degree], o[29]="degree"
			attrName[29]="data-su_id",attrVals[29]=jsonData.degree+"";
			//attrName[29]="data-su_id",attrVals[29]=jsonData.degree.replace(/^0$/,'')+"";

			var workBeginDate = jsonData.workBeginDate?jsonData.workBeginDate:"";
			var date =[];
			if(workBeginDate.indexOf("-") != -1) {
				date = workBeginDate.split("-");
			}else{
				date[0] = now.getFullYear();
				date[1] = now.getMonth()+1;
			}
			if(jsonData.memberClass == "2") {
				v[32] = person.dic.noExperience[p.lang], o[32] = "workBegin";
			} else {
				//have experience
				v[32] = workBeginDate, o[32] = "workBegin"
			}
			v[30] = workBeginDate, o[30] = "workBegin"
			v[31] = workBeginDate, o[31] = "workBegin"

			attrName[30]="year",attrVals[30]=date[0]>>0 +"";
			attrName[31]="month",attrVals[31]=date[1]>>0 +"";
			attrName[32]="type",attrVals[32]=jsonData.memberClass;

			v[26]=jsonData.hometownPCName,o[26]="hometownPC"
			v[27]=jsonData.locationPCName,o[27]="locationPC"
			jsonData.hometownPC = jsonData.hometownPC.replace(/00$/,'').replace(/^0$/,'').replace(/-1/,'');
			jsonData.locationPC = jsonData.locationPC.replace(/00$/,'').replace(/^0$/,'').replace(/-1/,'');
			attrName[26]="data-id",attrVals[26]=jsonData.hometownPC;
			attrName[27]="data-id",attrVals[27]=jsonData.locationPC;

			v[35]=jsonData.avoirdupois == 0 ? '':jsonData.avoirdupois+' kg',o[35]="avoirdupois"
			attrName[35]="data-su_id",attrVals[35]=jsonData.avoirdupois == 0 ?'50':jsonData.avoirdupois+"";
			recordData['avoirdupois']=jsonData.avoirdupois == 0 ? '':jsonData.avoirdupois
			v[36]=person.dic.jobState[p.lang][jsonData.jobState],o[36]="jobState"
			attrName[36]="data-su_id",attrVals[36]=jsonData.jobState+"";
			v[37]=person.dic.political[p.lang][jsonData.political],o[37]="political"
			attrName[37]="data-su_id",attrVals[37]=jsonData.political+"";
			v[38]=person.dic.start[p.lang][jsonData.joinTime],o[38]="joinTime"
			attrName[38]="data-su_id",attrVals[38]=jsonData.joinTime+"";

			util.setMutiText(o,v,attrName,attrVals);

			//基本信息保存
			$("#saveBtn").click(function(){
				//out.saveBase(p)
				out.saveBaseData(p);
			});
			//初始化选择框 placeholder
			$('.select_box.tip').each(function(){
				var $that = $(this);
				if($that.text() === ""){
					$that.text($that.attr('placeholder'));
					$that.css('color','#888888');
				}
			})

			out.initSelector(p.lang);
			$('#name,#address,#mobile,#email,#qq,#imNum').change(function(){
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			})
		}
		,saveBaseData : function(p){

			var inputArea = ['name','address','mobile','email','qq','imNum','cardNum'],
			selectArea = ['sex','birthday','hometownPC','height','marriage','degree','workBegin','locationPC','avoirdupois','jobState','political','joinTime'];
			var checkArea = inputArea.concat(selectArea);

			for(var i=0;i < inputArea.length; i++){
				var key = inputArea[i];
				recordData[key]=$('#' + key).val();	
			}
			var foundErr = false

			foundErr = !util.check(recordData.name,{
				notEmpty:true
				,min: 1
				,minType: 1
				,max: 50
				,maxType: 1
				,error : function(s,v){
					var t={cn:"请正确输入你的姓名!",en:"name error!"}
					if(v=="notEmpty") t={cn :"请输入姓名!" ,en : "Please input your name!"}
					if(v=="max") t={cn:"请不要超过25个字！",en:"Name:limit 50 characters!"}
					message(p.lang,t)
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.sex,{
				notEmpty:true
				,min: 1
				,max: 2
				,error : function(s,v){
					var t={cn:"请选择你的性别!",en:"gender error!"}
					if(v=="notEmpty") t.en = "Please choose your gender!"
					message(p.lang,t)
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.birthday,{
				notEmpty:true
				,error : function(s,v){
					var t={cn:"请选择你的出生日期!",en:"birthday error!"}
					if(v=="notEmpty") t.en = "Please choose the date of your birthday!"
					message(p.lang,t)
				}
			})
			if(foundErr) return

			var now = new Date();
			var year = now.getFullYear();
			var month = now.getMonth() + 1;
			var bir = recordData.birthday.split('-');
			var age = year - bir[0] -(month >= (bir[1]>>0) ? 0 : 1);
			foundErr = !util.check(age,{
				gt :17
				,lt :66
				,error : function(s,v){
					var t={}
					if(v=="notEmpty") t={cn:"请选择出生日期!",en:"Please choose the date of your birthday!"}
					if(v=="gt") t={cn:"未满18岁，等长大一点再来找工作吧！",en:"You can look for a job until 18 years old."}
					if(v=="lt") t={cn:"请选择正确的出生年份，不要超过65岁！",en:"Please input your correct Age, limit 65 years old!"}
					message(p.lang,t)
				}
			})
			if(foundErr) return

			foundErr=!util.check(recordData.hometownPC,{
				notEmpty:true
				,error : function(){
					message(p.lang,{cn:"请选择你的户籍!",en:"Please select household registration!"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.degree,{
				notEmpty: true
				,gt:1
				,error : function(){
					message(p.lang,{cn:"请选择你的最高学历",en:"Please choose your top degree!"})
				}
			})
			if(foundErr) return

			//work begin date
			foundErr = !util.check(recordData.memberClass,{
				notEmpty: true
				,error : function(){
					message(p.lang,{cn:"请选择你的开始工作时间",en:"Please choose your working experience"})
				}
			})
			if(foundErr) return
			if(recordData.memberClass == "0"){
				foundErr = !util.check(recordData.workBeginDate,{
					notEmpty: true
					,error : function(){
						message(p.lang,{cn:"请选择你的开始工作时间",en:"Please choose working start Date"})
					}
				})
				if(foundErr) return

				var work = recordData.workBeginDate.split('-');
				foundErr = !util.check(work[0],{
					gt :bir[0] - 1
					,lt : year + 1
					,error : function(a,b,c){
						if(b=="gt")
							message(p.lang,{cn:"开始工作日期不能小于出生日期！",en:"Start working date must after the date of Birth!"})
						else if(b="lt")
							message(p.lang,{cn:"开始工作日期不能大于当前日期！",en:"Start working date must before now!"})
					}
				})
				if(foundErr) return

				if(year == work[0]){
					foundErr = !util.check(work[1]>>0,{
						lt :month + 1
						,error : function(){
							message(p.lang,{cn:"开始工作日期不能大于当前日期！",en:"Start working date must before now"})
						}
					})
					if(foundErr) return
				}else if(bir[0] == work[0]){
					foundErr = !util.check(work[1]>>0,{
						gt :bir[1] - 1
						,error : function(){
							message(p.lang,{cn:"开始工作日期不能小于出生日期！",en:"Start working date must after the date of Birth!"})
						}
					})
					if(foundErr) return
				}

			}

			/*foundErr = !util.check(recordData.joinTime,{
				notEmpty: true
				,gt:0
				,error : function(){
					message(p.lang,{cn:"请选择到岗时间",en:"Please choose your joinTime!"})
				}
			})
			if(foundErr) return*/

			foundErr = !util.check(recordData.jobState,{
				notEmpty: true
				,gt:0
				,error : function(){
					message(p.lang,{cn:"请选择求职状态",en:"Please choose your jobState!"})
				}
			})
			if(foundErr) return

			foundErr=!util.check(recordData.locationPC,{
				notEmpty: true
				,error : function(){
					message(p.lang,{cn:"请选择你的现所在地!",en:"Please select Location！"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.address,{
				notEmpty: false
				,max: 80
				,maxType : 1
				,error : function(){
					message(p.lang,{cn:"现所在地：不要超过40个字！",en:"Address: Limit to 80 characters."})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.height,{
				notEmpty: true
				,gt:49
				,lt:301
				,error : function(s,v){
					var t={};
					if(v=="notEmpty") t={cn :"请选择身高!" ,en : "Please choose your height!"}
					if(v=="lt" || v=="gt") t={cn:"身高超出范围",en:"height Err"}
					message(p.lang,t)
				}
			})
			if(foundErr) return

			if($.trim(recordData.mobile) == ""){
				message(p.lang,{cn:"请输入手机号码！",en:"Please input CellPhone number"})
				return
			}
			foundErr = !util.check(recordData.mobile,{
				notEmpty: false
				,min: 11
				,max: 11
				,regEx : util.getRegExStr("safetel")
				,error : function(a,b,c){
					message(p.lang,{cn:"请输入有效的手机号码!",en:"Please input the correct CellPhone number"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.email,{
				notEmpty:false
				,min: 5
				,max: 80
				,regEx : util.getRegExStr("safemail")
				,error : function(s,v){
					var t={};
					if(v=="notEmpty")t={cn:"请输入邮箱地址",en:"Please input your Email"}
					else t={cn:"请输入有效的注册邮箱!",en:"Please input the correct Email"}
					message(p.lang,t);
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.email,{
				notEmpty:false
				,regEx : "@(?!yahoo\\.).*"
				,error : function(){
					message(p.lang,{cn:"中国雅虎邮箱已停止服务，请填写其他邮箱!",en:"Yahoo Mail have stopped their services in China, please type in another mail address!"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.qq,{
				notEmpty: false
				,regEx: "\\d+"
				,max : 12
				,error : function(){
					message(p.lang,{cn:"QQ：只能是数字,且最多12位",en:"QQ :limit 12 digit number"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.imNum,{
				notEmpty: false
				,max : 50
				,error : function(){
					message(p.lang,{cn:"微信:请不要超过50个字符！",en:"WeChat: limit 50 characters"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(recordData.cardNum,{
				notEmpty: false
				,min: 18
				,max : 18
				,error : function(){
					message(p.lang,{cn:"请填写18位的身份证号码",en:""})
				}
			})
			if(foundErr) return

			var PostData = {
					"name" : recordData["name"]
					,"sex" : recordData["sex"]
					,"birthday" : recordData["birthday"]
					,"hometownPC" : recordData["hometownPC"]
					,"height" : recordData["height"]
					,"marriage" : recordData["marriage"]
					,"degree" : recordData["degree"]
					,"memberClass" : recordData["memberClass"]
					,"workBeginDate" : recordData["workBeginDate"]
					,"locationPC" : recordData["locationPC"]
					,"address" : recordData["address"]
					,"mobile" : recordData["mobile"]
					,"email" : recordData["email"]
					,"qq" : recordData["qq"]
					,"imType" : recordData["imType"]
					,"imNum" : recordData["imNum"]
					,"nationality":""
					,"telephone" : ""
					,"homepage" : ""
					,"zip": ""
					,'cardNum' : recordData['cardNum']
					,'avoirdupois' :recordData['avoirdupois']
					,'jobState': recordData['jobState']
					,'political': recordData['political']
					,'joinTime': recordData['joinTime']
				}
			delete PostData.hometownPCName
			delete PostData.locationPCName

			var _disabled = $("#mobile").attr('disabled');
			var mobile =  PostData.mobile;//手机号码
			if(_disabled) mobile = '';
			var code = $("#mobileZym").val();

			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,data : {
					'act': 'resume_save',
					'source': 1,
					'resumeType': 1,
					'rid': p.data.resumeId?p.data.resumeId:"",
					'txtUserName': PostData.name,
					'radSex': PostData.sex,
					'txtBirthday': PostData.birthday,
					'hidCurArea': PostData.locationPC,
					'txtAddress': PostData.address,
					'hidMaxEdu': PostData.degree,
					//'radWorkState': 2,
					'hddStartWork': PostData.workBeginDate,
					'hidApplyStatus': PostData.jobState,//求职状态
					'hidAccessionTime': PostData.joinTime,//到岗时间
					'txtIDCardNumber': PostData.cardNum,//身份证
					'hidNativePlace': PostData.hometownPC,
					'hidMarriage': PostData.marriage,
					'hidPolitical': PostData.political,//政治面貌
					'txtStature': PostData.height,
					'txtAvoirdupois': PostData.avoirdupois,//体重
					'hidMobilePhone': '',
					'txtMobilePhone': mobile,
					'txtValidateCode': code,//验证码
					'txtEmail': PostData.email,
					'txtQQ': PostData.qq,
				}
				,error : function(){
					alert('请求出错!')
				}
				,success : function(data){
					if(data.status==1){
						sessionStorage[p.dataKey] = util.toString(p.data)
						message(p.lang,{cn:"保存成功!",en:"OK"})
						resume.goBack(true,myCache)
						myCache.goBack.trigger('click');
					}else alert('错误:'+(data.error||data.msg));
				}
			}
			resume.postUpdate(par)
		}
		//下拉框数据
		,initSelector : function(lang){
			//性别数据
			var genderData = [
			    {'id': '1', 'value': person.dic.sex[lang][1]},
			    {'id': '2', 'value': person.dic.sex[lang][2]}
			];

			//身高数据
			var heightData = [];
			for(var i=50;i<300;i++){
				var o={};
				o.id = i + "";
				o.value = i + ' cm';
				heightData.push(o);
			}

			//体重数据
			var avoirdupoisData = [];
			for(var i=30;i<150;i++){
				var o={};
				o.id = i + "";
				o.value = i + ' kg';
				avoirdupoisData.push(o);
			}

			var degreeData = [];
			var degree = person.dic.degree[lang];
			for (item in degree){
				var o={};
				if(degree.hasOwnProperty(item)){
					o.id=item+"";
					o.value = degree[item];
					degreeData.push(o);
				}
			}

			var marriageData = [];
			var marriage = person.dic.marriage[lang];
			for (item in marriage){
				var o={};
				if(marriage.hasOwnProperty(item)){
					o.id=item+"";
					o.value = marriage[item];
					marriageData.push(o);
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

			var jobStateData = [];
			var jobState = person.dic.jobState[lang];
			for (item in jobState){
				var o={};
				if(jobState.hasOwnProperty(item)){
					o.id=item+"";
					o.value = jobState[item];
					jobStateData.push(o);
				}
			}

			var politicalData = [];
			var political = person.dic.political[lang];
			for (item in political){
				var o={};
				if(political.hasOwnProperty(item)){
					o.id=item+"";
					o.value = political[item];
					politicalData.push(o);
				}
			}

			var workTypeData = [
				{'id': '1', 'value': person.dic.experience[lang]},
				{'id': '2', 'value': person.dic.noExperience[lang]}
			];

			resume.initIosSelect(lang,{selector:'#sex',data:genderData,title:person.dic.title[lang]['gender'],
			callback:function(selectOneObj){
				var key = 'sex';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#height',data:heightData,title:person.dic.title[lang]['height'],
			callback:function(selectOneObj){
				var key = 'height';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#avoirdupois',data:avoirdupoisData,title:person.dic.title[lang]['avoirdupois'],
			callback:function(selectOneObj){
				var key = 'avoirdupois';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#joinTime',data:joinTimeData,title:person.dic.title[lang]['joinTime'],
			callback:function(selectOneObj){
				var key = 'joinTime';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#jobState',data:jobStateData,title:person.dic.title[lang]['jobState'],
			callback:function(selectOneObj){
				var key = 'jobState';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#political',data:politicalData,title:person.dic.title[lang]['political'],
			callback:function(selectOneObj){
				var key = 'political';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			resume.initIosSelect(lang,{selector:'#marriage',data:marriageData,title:person.dic.title[lang]['wedLock'],
			callback:function(selectOneObj){
				var key = 'marriage';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#degree',data:degreeData,title:person.dic.title[lang]['degree'],
			callback:function(selectOneObj){
				var key = 'degree';
				recordData[key] = selectOneObj.id;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#birthday',data:[],title:person.dic.title[lang]['birthday'],
			callback:function(selectOneObj,selectTwoObj, selectThreeObj,birthday){
				var key = 'birthday';
				recordData[key] = birthday;
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#workBegin',data:workTypeData,title:person.dic.title[lang]['workStart'],
			callback:function(selectOneObj,selectTwoObj,selectThreeObj){
				if(selectOneObj.id == '2'){
					recordData['memberClass'] = selectOneObj.id;
				}else{
					var workBeginDate = selectTwoObj.id + '-' + (selectThreeObj.id<10?'0'+selectThreeObj.id:selectThreeObj.id)
					recordData['memberClass'] = selectOneObj.id;
					recordData['workBeginDate'] = workBeginDate;
				}
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#hometownPC',text:'#hometownAreaId',cache:'#hometownCacheIds',max:1,onlyChild:true,title:person.dic.title[lang]['residence'],
			callback:function(s){
				var key = 'hometownPC';
				if ( s.OPTIONS.selectedItemsId == 0 ) {
					recordData[key] = '';
		        	recordData[key + 'Name'] = '';
				} else {
					recordData[key] = s.OPTIONS.selectedItemsId;
		        	recordData[key + 'Name'] = s.OPTIONS.selectedItemsText;
				}
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#locationPC',text:'#locationAreaId',cache:'#locationCacheIds',max:1,onlyChild:true,title:person.dic.title[lang]['location'],
			callback:function(s){
				var key = 'locationPC';
				if ( s.OPTIONS.selectedItemsId == 0 ) {
					recordData[key] = '';
		        	recordData[key + 'Name'] = '';
				} else {
					recordData[key] = s.OPTIONS.selectedItemsId;
		        	recordData[key + 'Name'] = s.OPTIONS.selectedItemsText;
				}
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
		}
	}
	module.exports = out;
});