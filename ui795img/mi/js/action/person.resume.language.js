define(function(require,exports,module) {
	var $ = require("$")
	,ui = require("ui.base")
	,util = require("util")
	,person = require("action.person")
	,resume = require("action.person.resume")
	,resumeLang = require("resume.lang")
	// ,juicer = require("juicer")
	// ,base = require("action.person.resume.base")

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
		var lang = p.lang
			p.dataKey = key
			p.data = sessionStorage[key]
			if(!p.data){ alert("丢失缓存，请重新登录!") }
			p.data = util.toJSON(p.data)
			p.template = $("#template").val()
			//初始化数据
			person.showOption()
		var jsonData = p.data.language
			myCache.goBack = $("#goBack")
			myCache.list = $("#eduList")
			myCache.listBox = $("#listBox")
			myCache.info = $("#educationInfo")
			myCache.addBtn = $("#educationAdd")
			myCache.saveBtn = $("#eduBtn")
			myCache.delBtn = $("#educationManage")
			myCache.goBack.attr("onclick","window.location.href='"+resume.getGoBackUrl()+"'")
			myCache.recordData = {}
			myCache.dataNotChange = true;

			var id = sessionStorage["subListId"]
			out.edit(id,lang);

			var lanTypeData = [];
			var lanType = person.dic.lanType[lang];
			for (item in lanType){
				var o={};
				if(lanType.hasOwnProperty(item)){
					o.id=item+"";
					o.value = lanType[item];
					lanTypeData.push(o);
				}
			}
			var levelData = [];
			var level = person.dic.level[lang];
			for (item in level){
				var o={};
				if(level.hasOwnProperty(item)){
					o.id=item+"";
					o.value = level[item];
					levelData.push(o);
				}
			}

			resume.initIosSelect(lang,{selector:'#level',data:levelData,title:person.dic.title[lang]['level'],
			callback:function(selectOneObj){
				 var key = 'level';
				 myCache.recordData[key] = selectOneObj.id;
				 if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});
			resume.initIosSelect(lang,{selector:'#lanType',data:lanTypeData,title:person.dic.title[lang]['lanType'],
			callback:function(selectOneObj){
				 var key = 'lanType';
				 myCache.recordData[key] = selectOneObj.id;
				 if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			$('#lanCert').change(function(){
				if(myCache.dataNotChange) myCache.dataNotChange = false;
			})


			//绑定动作
			out.bindSave(p)

				//初始化选择框 placeholder
			$('.select_box.tip').each(function(){
				var $that = $(this);
				if($that.text() === ""){
					$that.text($that.attr('placeholder'));
					$that.css('color','#888888');
				}
			})
		}
		,bindAdd : function(){
			myCache.addBtn.click(function(){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack(true)
				myCache.list.find(".icon_delete").hide()
				out.empty().show()
				myCache.saveBtn.attr("mod","-1");	//-1标示新增
			})
		}
		,bindEdit : function(){
			//myCache.list.find("li").click(out.edit)
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
			// myCache.info.find("input").each(function(){  this.value="" });
			myCache.info.find("select").each(function() { $(this).find("option").eq(0).attr("selected","true") });
			return myCache.info
		}
		,goBack : function(t,par){
			new resume.goBack(t,myCache,par)
		}
		,edit : function(id,lang){
				myCache.listBox.hide()
				myCache.delBtn.hide()
				out.goBack(false,{title:'教育经历',ok:function(box){
					box.close();
					myCache.saveBtn.trigger('click')
				}})
				var MODID = id;
				var MODDATA = {}
				var $delete = $('.delete')
				if(id == "null"){
					MODDATA = {lanCert:"",lanName:"",lanType:"",level:"",id:"",levelName:""} 
					out.empty().show().find("button").attr("mod",-1);	//-1标示新增
					$delete.hide();
					$('.btn1_submit').css('width','100%');
				} else{
					MODDATA = myCache.par.data.language.filter(function(v){ return v.id == MODID})[0]
					out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
					$delete.click(out.del);
				}
				var o = [],v = [],attrName = [],attrVals = []
					// o[0]="lanCert";v[0]=MODDATA.lanCert
					// util.setMultiVal(o,v)
					o[2]="lanType";v[2]=MODDATA.lanType
					v[2]=person.dic.lanType[lang][MODDATA.lanType], o[2]="lanType"
					attrName[2]="data-su_id",attrVals[2]=MODDATA.lanType.replace(/^0$/,'')+"";
					o[3]="level";v[3]=MODDATA.level
					v[3]=person.dic.level[lang][MODDATA.level], o[3]="level"
					attrName[3]="data-su_id",attrVals[3]=MODDATA.level.replace(/^0$/,'')+"";

					myCache.recordData['lanType']=MODDATA.lanType;
					myCache.recordData['level']=MODDATA.level;

					util.setMutiText(o,v,attrName,attrVals);
		}
		,del : function(id,e){
			var MODID = $(this).attr('mod')
			out.goBack(true);
				resume.postDel({
					moudle : "language"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'del_Language',
						'languageid': MODID,
						'to_m': true
					}
					,title:'语言能力'
					,error:function(){
						alert("删除语言能力出错")
					}
					,success:function(){
						$('#goBack').trigger('click')
					}
				})
			if( e && e.stopPropagation)e.stopPropagation()
			if( e && e.preventDefault )e.preventDefault()
		}
		,save : function(p){
			var foundErr = false

			var lanCert = $("#lanCert").val()
			foundErr = !util.check(lanCert,{
				notEmpty : true
				,max:200
				//,regex: regCharCN
				,error : function(a,b,c){
					message(p.lang,{cn:"获得证书：不能为空,长度不能超过200字!",en:"Major:Not empty,can't be more than 200 characters!"})
				}
			})
			if(foundErr) return;

			var lanType = myCache.recordData['lanType'];
			foundErr = !util.check(lanType,{
				notEmpty : true
				,gt:0
				,lt:100
				,regEx: "^[\\d\\,]+$"
				,error : function(a,b,c){
					console.log(a);
					console.log(c);
					console.log(b);
					if(b=="notEmpty")
						message(p.lang,{cn:"请选择语种！",en:"Degree:Not empty!"})
					else
						message(p.lang,{cn:"请重新选择语种！",en:"Degree Err!"})
				}
			})
			if(foundErr) return;

			var level = myCache.recordData['level'];
			foundErr = !util.check(level,{
				notEmpty : true
				,gt:0
				,lt:100
				,regEx: "^[\\d\\,]+$"
				,error : function(a,b,c){
					if(b=="notEmpty")
						message(p.lang,{cn:"请选择熟练程度！",en:"Degree:Not empty!"})
					else
						message(p.lang,{cn:"请重新熟练程度！",en:"Degree Err!"})
				}
			})
			if(foundErr) return;
			var levelName = person.dic.level['cn'][level];
			var lanName = person.dic.lanType['cn'][lanType];
			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				'id': saveID,
				'lanCert': lanCert,
				'level': level,
				'levelName': levelName,
				'lanName': lanName,
				'lanType': lanType,
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var eduLen = p.data.language.length
			p.data.language = eduLen == 0 ? PostData : p.data.language
			sessionStorage[resume.getDataKey()] = util.toString(p.data);

			var par = {
				langType : p.data.langType
				,resumeId : p.data.resumeId
				,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					'act': 'language_save',
					'languageid': saveID=='-1'?'':saveID,
					'selLanguageType': lanType,
					'selLangSkillLevel': level,
					'selLangCert': lanCert,
					'to_m' : true,
				}
				,error : function(){
					sessionStorage[resume.getDataKey()] = sessionDataCache;
					alert('请求出错!');
				}
				,success : function(data){
					var DATA = data
					if(DATA.success){
						myCache.listBox.show()
						myCache.delBtn.show()
						out.goBack(true)
						if(!PostData[0].id){
							//PostData[0].id = data.language[0].id
							PostData[0].id = DATA.langid;
							if(eduLen > 0){
								p.data.language.push(PostData[0])
							}else{
								p.data.language = PostData
							}
						}else{
							for(var i=0; i<p.data.language.length;i++){
								if(p.data.language[i].id == PostData[0].id){
									p.data.language[i] = PostData[0]
									break;
								}
							}
						}

						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						alert('语言能力已保存!')
						$('.btn_back').trigger('click');
					}else alert('错误:'+resumeLang.get(DATA.msg))
				}
			}
			resume.postUpdate(par)
		}
	}
	module.exports = out;
});