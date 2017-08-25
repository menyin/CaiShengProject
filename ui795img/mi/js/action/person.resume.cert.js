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
		var jsonData = p.data.cert
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

			var gainTimeData = [];
			var now = new Date();
			var nowYear = now.getFullYear();

			for(var i=0; i<100;i++){
				var _year = nowYear-i;
				var o={};
				o.id=_year+"";
				o.value = _year;
				gainTimeData.push(o);
			}

			resume.initIosSelect(lang,{selector:'#gainTime',data:gainTimeData,title:person.dic.title[lang]['gainTime'],
			callback:function(selectOneObj){
				 var key = 'gainTime';
				 myCache.recordData[key] = selectOneObj.id;
				 if(myCache.dataNotChange) myCache.dataNotChange = false;
			}
			});

			$('#certName').change(function(){
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
				out.goBack(false,{title:'证书',ok:function(box){
					box.close();
					myCache.saveBtn.trigger('click')
				}})
				var MODID = id;
				var MODDATA = {}
				var $delete = $('.delete')
				if(id == "null"){
					MODDATA = {certName:"",id:"",gainTime:""} 
					out.empty().show().find("button").attr("mod",-1);	//-1标示新增
					$delete.hide();
					$('.btn1_submit').css('width','100%');
				} else{
					MODDATA = myCache.par.data.cert.filter(function(v){ return v.id == MODID})[0]
					out.empty().show().find("button").attr("mod",MODID);	//-1标示新增
					$delete.click(out.del);
				}
				var o = [],v = [],attrName = [],attrVals = []
					// o[0]="certName";v[0]=MODDATA.certName
					// util.setMultiVal(o,v)

					o[2]="gainTime";v[2]=MODDATA.gainTime
					v[2]=MODDATA.gainTime?MODDATA.gainTime+"年":"", o[2]="gainTime"
					attrName[2]="data-su_id",attrVals[2]=MODDATA.gainTime.replace(/^0$/,'')+"";
					myCache.recordData['gainTime']=MODDATA.gainTime;

					util.setMutiText(o,v,attrName,attrVals);
		}
		,del : function(id,e){
			var MODID = $(this).attr('mod')
			out.goBack(true);
				resume.postDel({
					moudle : "cert"
					,moudleId : MODID
					,myCache : myCache
					,data:{
						'act': 'certificate_del',
						'certificateid': MODID,
						'to_m': true
					}
					,title:'证书'
					,error:function(){
						alert("删除证书出错")
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
			var certName = $("#certName").val()
			foundErr = !util.check(certName,{
				notEmpty : true
				,max:200
				//,regEx: regCharCN
				,error : function(a,b,c){
					message(p.lang,{cn:"证书：不能为空,长度不能超过200字!",en:""})
				}
			})
			if(foundErr) return;

			var gainTime = myCache.recordData['gainTime'];
			if(!gainTime){
				alert('请选择获得时间');
				return;
			}

			var saveID = myCache.saveBtn.attr("mod")
			var PostData = [{
				"id":saveID
				,"certName": certName
				,"gainTime": gainTime
			}]

			if(saveID == "-1") delete PostData[0].id

			var sessionDataCache = sessionStorage[resume.getDataKey()] //用于提交失败时候回滚
			var eduLen = p.data.cert.length
			p.data.cert = eduLen == 0 ? PostData : p.data.cert
			sessionStorage[resume.getDataKey()] = util.toString(p.data);

			var par = {
				langType : p.data.langType
				,resumeId : p.data.resumeId
				,subResumeId : sessionStorage["subResumeId"]
				,finished : true
				,data : {
					'act': 'certificate_save',
					'certificateid': saveID=='-1'?'':saveID,
					'txtCertificateName': certName,
					'gain_time': gainTime,
					'to_m': true
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
							//PostData[0].id = data.cert[0].id
							PostData[0].id = DATA.certificateid;
							if(eduLen > 0){
								p.data.cert.push(PostData[0])
							}else{
								p.data.cert = PostData
							}
						}else{
							for(var i=0; i<p.data.cert.length;i++){
								if(p.data.cert[i].id == PostData[0].id){
									p.data.cert[i] = PostData[0]
									break;
								}
							}
						}

						sessionStorage[resume.getDataKey()] = util.toString(p.data)//成功后数据要写入缓存
						alert('证书已保存!')
						$('.btn_back').trigger('click');
					}else alert('错误:'+resumeLang.get(DATA.msg))
				}
			}
			resume.postUpdate(par)
		}
	}
	module.exports = out;
});