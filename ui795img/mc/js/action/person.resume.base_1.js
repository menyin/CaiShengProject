define(function(require,exports,module) {
	var $ = require("$")
		,ui = require("ui.base")
		,juicer = require("juicer")
		,util = require("util")
		,person = require("action.person")
		,resume = require("action.person.resume")
		,resumeLang = require("resume.lang")
		,linkSelect = require("ui.linkSelect")
		,dataArea = require("ui.data.area")

	var message = resume.message
	var myCache = {}
	var out = {
		init : function(p){
			person.updateInfo()
			myCache.par = p
			p.lang = "cn"
			resume.selectLanguage(p.lang)
			resume.setGoBack()
			//取数据
			var key = resume.getDataKey()
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!"); return; }
			p.data = util.toJSON(p.data)
			//初始化数据
			var jsonData = p.data.base?p.data.base:[];
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
			//回显数据
			var ymd = jsonData.birthday?jsonData.birthday.split('-'):[];

			var v = [],o = []
			v[10]=jsonData.memberClass,o[10]="memberClass"
			v[11]=jsonData.name,o[11]="baseName"
			v[12]=ymd[0]== new Date().getFullYear()?ymd[0]-16:ymd[0],o[12]="Date_Year"
			v[13]=ymd[1],o[13]="Date_Month"
			v[14]=ymd[2],o[14]="Date_Day"
			v[15]=jsonData.sex,o[15]="sex"
			v[16]=jsonData.height,o[16]="baseHeight"
			v[18]=jsonData.marriage,o[18]="marriage"
			v[19]=jsonData.email,o[19]="baseMail"
//				v[20]=jsonData.telephone,o[20]="baseTel"
			v[21]=jsonData.mobile,o[21]="mobile"
			v[22]=jsonData.address,o[22]="baseAddr"
			v[23]=jsonData.qq,o[23]="baseQQ"
//				v[24]=jsonData.homepage,o[24]="baseHomePage"
//				v[25]=jsonData.zip,o[25]="baseZip"
			v[26]=jsonData.hometownPC,o[26]="hometownPC"
			v[27]=jsonData.locationPC,o[27]="locationPC"
			if ( jsonData.imType == 3 ) {
				v[28]=jsonData.imNum,o[28]="imNum"
			}
			v[29]=jsonData.degree, o[29]="degree"
			//if(jsonData.memberClass != 1) {
			//	$("#workDate").hide();
			//} else {
				var workBeginDate = jsonData.workBeginDate?jsonData.workBeginDate:[]
				if(workBeginDate.indexOf("-") != -1) {
					var date = workBeginDate.split("-")
					v[30] = date[0], o[30] = "Work_Year"
					v[31] = date[1], o[31] = "Work_Month"
				}
			//}
			v[33]=jsonData.mobile,o[33]="hidMobile"
			v[34]=jsonData.cardNum,o[34]="cardNum"
			v[35]=jsonData.avoirdupois,o[35]="avoirdupois"
			v[36]=jsonData.jobState,o[36]="jobState"
			v[37]=jsonData.political,o[37]="political"
			v[38]=jsonData.joinTime,o[38]="joinTime"

			util.setMultiVal(o,v)

			var _workTitle = "开始工作时间";
			if(jsonData.memberClass==2) _workTitle = "毕业时间";
			$('#workTitle').html(_workTitle);
			//地区选择框
			var locationPCObj = new linkSelect("#locationPCObj", {
				data : dataArea
				,lang: p.lang == "cn" ?0:1
				,lv1 : locationPC[0]
				,lv2 : locationPC[1]//建议用id
				,lv3 : locationPC[2]
				,lv1name : "city1"
				,lv2name : "city2"
				,lv2name : "city3"
				,onChange : function(val,txt,obj, html){

					/*if ( html ) {
						var fir = $(html).eq(0).val()
						if(fir) {
							val = fir
						}
					}*/
					var _historyVal = $('#locationPC').val();
					if(_historyVal.length==6 && val==0) val = _historyVal.substring(0,4);
					$("#locationPC").val(val);
				}
			});
			locationPCObj.init();
			var hometownPCObj = new linkSelect("#hometownPCObj", {
				data : dataArea
				,lang : p.lang == "cn" ?0:1
				,lv1 : hometownPC[0]
				,lv2 : hometownPC[1]//建议用id
				,lv3 : hometownPC[2]
				,lv1name : "city1"
				,lv2name : "city2"
				,lv3name : "city3"
				,onChange : function(val,text, obj, html){
					/*if ( html ) {
						var fir = $(html).eq(0).val()
						if(fir) {
							val = fir
						}
					}*/
					var _historyVal = $('#hometownPC').val();
					if(_historyVal.length==6 && val==0) val = _historyVal.substring(0,4);
					$("#hometownPC").val(val);
				}
			});
			hometownPCObj.init();
			//地区选择框 end
			//开始工作时间选择框
			$("#memberClass").change(function(){
				if($(this).val() != 1) {
					//$("#workDate").hide();
					$("#workTitle").html('毕业时间');
				} else {
					//$("#workDate").show();
					$("#workTitle").html('开始工作时间');
				}
			});
			//基本信息保存
			$("#saveBtn").click(function(){
				out.saveBase(p)
			});
		}
		,saveBase : function(p){
			var birthday = ""
				,birthdayY = $("#Date_Year").val()
				,birthdayM = $("#Date_Month").val()
				,birthdayD = $("#Date_Day").val()
			if( !(birthdayY && birthdayM && birthdayD) ) {
				message(p.lang,{cn:"生日：请选择正确的生日日期!",en:"Birthday err"})
				return
			}
			if(!util.isSelectDate(birthdayY,birthdayM,birthdayD)){
				message(p.lang,{cn:"生日：没有这一天!请检查!",en:"Birthday err"})
				return
			}else{
				birthday = birthdayY+"-"+birthdayM+"-"+birthdayD
			}

			var memberClass = $("#memberClass").val()
			var workBeginDate = ""

			if(memberClass == 2) {//无经验
				var date = new Date()
				workBeginDate = date.getFullYear() + "-" + (date.getMonth()+1)
			} else {//有经验
				var work_year = $("#Work_Year").val()
				var work_month = $("#Work_Month").val()
				if(!util.isSelectDate(work_year,work_month,"01")) {
				message(p.lang,{cn:"开始工作时间：没有这一天!请检查!",en:"Start working err"})
				return
				} else {
					workBeginDate = work_year + "-" + work_month
					var workDate = new Date(workBeginDate);
					if(new Date(birthday) >= workDate) {
						message(p.lang,{cn:"开始工作时间：超出年龄！",en:"Start working err"})
						return
					} /*else if(new Date() < workDate) {
						message(p.lang,{cn:"开始工作日期不能大于当前日期！",en:"Start working err"})
						return
					}*/
				}
			}
			var _disabled = $("#mobile").attr('disabled');
			var mobile = util.trim($("#mobile").val());//手机号码
			if(_disabled) mobile = '';

			var PostData = {
					"name" : util.trim($("#baseName").val())
					,"sex" : $("#sex").val()
					,"birthday" : birthday
					,"hometownPC" : $("#hometownPC").val()
					,"height" : util.trim($("#baseHeight").val())
					,"marriage" : $("#marriage").val()
					,"degree" : $("#degree").val()
					,"memberClass" : memberClass
					,"workBeginDate" : workBeginDate
					,"locationPC" : $("#locationPC").val()
					,"address" : util.trim($("#baseAddr").val())
					,"mobile" : mobile
					,"email" : util.trim($("#baseMail").val())
					,"qq" : util.trim($("#baseQQ").val())
					,"imType" : $('#imType').val()
					,"imNum" : util.trim($('#imNum').val())
					,"nationality":""
					,"telephone" : ""
					,"homepage" : ""
					,"zip": ""
					,'cardNum' : util.trim($('#cardNum').val())
					,'avoirdupois' :util.trim($('#avoirdupois').val())
					,'jobState': $("#jobState").val()
					,'political': $("#political").val()
					,'joinTime': $("#joinTime").val()
				}
			var foundErr = false

			foundErr = !util.check(PostData.name,{
				notEmpty:true
				,min: 4
				,minType: 1
				,max: 50
				,maxType: 1
				,error : function(s,v){
					var t={cn:"请正确输入你的姓名!",en:"name error!"}
					if(v=="notEmpty") t.en = "Please input your name!"
					message(p.lang,t)
				}
			})
			if(foundErr) return

			/*foundErr=!util.check(PostData.hometownPC,{
				gt:0
				,error : function(){
					message(p.lang,{cn:"请选择你的户籍!",en:"residence err"})
				}
			})
			if(foundErr) return*/
			if(!PostData.hometownPC || !parseInt(PostData.hometownPC%100)){
				alert('请选择你的户籍!');
				return;
			}

			foundErr = !util.check(PostData.height,{
				notEmpty: true
				,gt:49
				,lt:301
				,error : function(){
					message(p.lang,{cn:"请正确输入你的身高!",en:"height err"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(PostData.degree,{
				notEmpty: true
				,gt:1
				,error : function(){
					message(p.lang,{cn:"请选择你的最高学历",en:"degree unselected"})
				}
			})
			if(foundErr) return

			/*foundErr=!util.check(PostData.locationPC,{
				gt:0
				,error : function(){
					message(p.lang,{cn:"请选择你的现所在地!",en:"location err"})
				}
			})
			if(foundErr) return*/
			if(!PostData.locationPC || !parseInt(PostData.locationPC%100)){
				alert('请选择你的现所在地!');
				return;
			}

			foundErr = !util.check(PostData.address,{
				notEmpty: false
				,max: 80
				,maxType : 1
				,error : function(){
					message(p.lang,{cn:"现所在地：最长80个字符！",en:"address Limit to 80 characters."})
				}
			})
			if(foundErr) return

			//验证手机号码
			if(!_disabled){
				foundErr = !util.check(PostData.mobile,{
					notEmpty: false
					,min: 11
					,max: 11
					,regEx : util.getRegExStr("safetel")
					,error : function(){
						message(p.lang,{cn:"请正确输入手机号码!",en:"mobile err"})
					}
				})
				if(foundErr) return

				if($.trim(PostData.mobile) == ""){
					message(p.lang,{cn:"手机号码必须填写!",en:"mobile err"})
					return
				}
			}

			foundErr = !util.check(PostData.email,{
				notEmpty:true
				,min: 5
				,max: 80
				,regEx : util.getRegExStr("safemail")
				,error : function(){
					message(p.lang,{cn:"请正确输入邮箱地址!",en:"email err"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(PostData.email,{
				notEmpty:true
				,regEx : "@(?!yahoo\\.).*"
				,error : function(){
					message(p.lang,{cn:"中国雅虎邮箱已停止服务，请填写其他邮箱!",en:"Yahoo Mail have stopped their services in China, please type in another mail address!"})
				}
			})
			if(foundErr) return

			foundErr = !util.check(PostData.qq,{
				notEmpty: false
				,regEx: "\\d+"
				,max : 15
				,error : function(){
					message(p.lang,{cn:"QQ：只能是数字",en:"QQ err"})
				}
			})
			if(foundErr) return
			delete PostData.hometownPCName
			delete PostData.locationPCName
			PostData = $.extend(p.data.base,PostData)

			var code = $("#mobileZym").val();
			var par = {
				langType : p.data.langType
				//,resumeId : p.data.resumeId
				//,subResumeId : sessionStorage["subResumeId"]
				,data : {
					//"base" : util.toString(PostData)
					'act': 'resume_save',
					'source': 1,
					'resumeType': 1,
					'rid': p.data.resumeId,
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
					'txtMobilePhone': PostData.mobile,
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
					}else alert('错误:'+data.error)
				}
			}
			resume.postUpdate(par)
		}
	}
	module.exports = out;
});