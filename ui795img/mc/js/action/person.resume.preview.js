define(function(require,exports,module) {
    var $ = require("$")
        ,ui = require("ui.base")
        ,juicer = require("juicer")
        ,util = require("util")
        ,touchSilder = require("ui.touchSilder")
        ,mBox = require("ui.mBox")
        ,dic_area=require("jobcn.data.area")
        ,person = require("action.person")
        ,resume = require("action.person.resume")
        ,dic_post=require("/public/cactus/dic/post.min.js");//职位列表的字典表
    var dic_degree={};//学历字典表，注意：学历字典表暂时没发现有js可以调用的json数据，只能从action里面取。--2013-12-27
    var dic_comAbility={};//电脑技能字典表
    var __photo_src="";//图片路径
    var dic_languageLevel={
        "cn":{
            "4":"一般",
            "3":"良好",
            "2":"熟练",
            "1":"精通"
        },
        "en":{
            "4":"General",
            "3":"Good",
            "2":"Skilled",
            "1":"Excellent"
        }
    };//语言水平字典表
    var dic_languageType={
        "cn":{
            "1":"英语",
            "2":"日语",
            "3":"法语",
            "4":"德语",
            "5":"阿拉伯语",
            "6":"朝鲜语",
            "7":"西班牙语",
            "8":"俄语",
            "9":"意大利语",
            "10":"其他"
        },
        "en":{
            "1":"English",
            "2":"Japanese",
            "3":"French",
            "4":"German",
            "5":"Arabic",
            "6":"Korean",
            "7":"Spanish",
            "8":"Russian",
            "9":"Italian",
            "10":"Other"
        }
    };//语言种类字典表


    var myCache = {};
    var silderAt = 0;

    var Dic_langType={"en":"1","cn":"0"};
    /**
     * 这个方法用于判断字符串是否为空。。
     * @param {String}
     *
     *
     * */
    function isNullOrEmpty(originStr){
        if(originStr==undefined||originStr==null){
            return true;
        }
        if($.trim(originStr).length<=0){
            return true;
        }
        return false;
    }
    function ReplaceEmpty(originStr,ReplaceStr){
        if(isNullOrEmpty(originStr)){
            return ReplaceStr;
        }
        else{
            return originStr;
        }
    }

    /**
     * 这个方法主要是从地点编号，中文及英文来翻译省份城市。
     * @param {number} locationNumber 地点编号，譬如：2401 表示安徽合肥
     * @param {String} cnORen  中文或英文不标识，只有两个值：cn 或者 en
     * @return {String} 返回中文地址或者英文地址譬如： 安徽 合肥 或者 Anhui Hefei
     * */
    function getLocation(locationNumber,cnORen){
        if(locationNumber==undefined){
            return "地点参数undefined";
        }
        if(locationNumber=="0"){
            return "";
        }
        if(parseInt(locationNumber)<=0){
            return "";
        }
        var langType="cn";

        if(cnORen=="en"){ langType="en"; }
        var langTypeStr=langType;
        var num_hometownPC= locationNumber;

        var str_hometownPC="";
        if(num_hometownPC.length>2){
            //--省份编号及相关中英文翻译
            var num_province=num_hometownPC.substring(0,2);
            for(var cindex=0;cindex<dic_area["_0"].length; cindex++){
                var provinceItem=dic_area["_0"][cindex];
                if(provinceItem[3]==num_province){
                    if(langTypeStr=="cn"){
                        str_hometownPC=provinceItem[0];
                    }
                    else{
                        str_hometownPC=provinceItem[1];
                    }
                    break;
                }
            }
            var out_array_cities=dic_area["_"+num_province];
            if(out_array_cities!=undefined){
                for(var cindex=0;cindex<out_array_cities.length;cindex++){
                    var cityItem=out_array_cities[cindex];
                    if(cityItem[3]==num_hometownPC){
                        if(langTypeStr=="cn"){
                            str_hometownPC+=" "+ cityItem[0];
                        }
                        else{
                            str_hometownPC+=" "+cityItem[1];
                        }
                        break;
                    }
                }
            }
        }
        else{
            var num_province=num_hometownPC;
            for(var cindex=0;cindex<dic_area["_0"].length; cindex++){
                var provinceItem=dic_area["_0"][cindex];
                if(provinceItem[3]==num_province){
                    if(langTypeStr=="cn"){
                        str_hometownPC=provinceItem[0];
                    }
                    else{
                        str_hometownPC=provinceItem[1];
                    }
                    break;
                }
            }
        }
        return str_hometownPC;

    }

    /**
     * 从checkinDate字符串获得到岗日期字符串，规则说明：
     * 0=随时到岗，半、1-12个月到岗，xxxx年xx月xx日后到岗
     * @param {String} checkinDateStr
     * @param {String} langTypeStr 字符串，只有cn及en的两个值可以选择     *
     * */

    function getCheckinDate(checkinDateStr,langTypeStr){
        if(/[0-9]+/g.test(checkinDateStr)){
            var theNum=parseInt(checkinDateStr);
            if(theNum<=0){
                if(langTypeStr=="cn"){
                    return "随时到岗";
                }
                else{
                    return "Anytime";
                }
            }
            else{
                if(langTypeStr=="cn"){
                	if(/\d{4}-\d{1,}-\d{1,}/g.test(checkinDateStr)){
                		return checkinDateStr+" 之后";
                	}else{
                		return theNum+"个月 之内";
                	}
                }
                else{
                	if(/\d{4}-\d{1,}-\d{1,}/g.test(checkinDateStr)){
                		return "after "+checkinDateStr +" later";
                	}else{
                		return "within "+theNum+" months";
                	}
                }

            }
        }
        else{
            return checkinDateStr;

        }
    }
    /**
     * 这个方法是主要用于从工作编号数组获得相关字符串，譬如：[1600,4400]可以得到：机械(电)/仪表类、物流/采购类
     * 假如是英文，那么就是：Mechanism/Instrument、Logistics/Procurement
     * @param {Array} jobNumberArray 工作编号数组，譬如：[1600,4400]，当然，你可以直接传进来一个值获取名称,譬如：1600
     * @param {String} cnORen 字符串，只有cn及en的两个值可以选择
     * @return {String} 返回结果字符串
     * */
    function getJobFunctionByArray(jobNumberArray,cnORen){
        if(jobNumberArray==undefined){return "";}
        var langTypeStr="cn";
        var strResult="";
        if(cnORen=="en"){langTypeStr="en";}
        if(jobNumberArray instanceof  Array){
            for(var cindex =0;cindex<jobNumberArray.length;cindex++){
                var theNumber=parseInt(jobNumberArray[cindex]);
                if(theNumber<=0){ continue;}
                var jobInfoItem= dic_post[jobNumberArray[cindex]];
                if(jobInfoItem==undefined){continue;}
                strResult+=jobInfoItem[langTypeStr]+"、";
            }
        }
        else{
            var jobInfoItem= dic_post[jobNumberArray];
            if(jobInfoItem==undefined) return "";
            strResult=jobInfoItem[langTypeStr];
        }
        strResult=strResult.replace(/、$/g,"");
        return strResult;
    }

    /**
     * 这个方法用于计算两个日期相差的月份，这里用于计算个人简历里面每一个工作经历的距离月份。
     * 注意：当没有第二个参数或这第二参数为空，即默认第二个参数为当前日期。
     * @param {String} str_beginDate 开始日期字符串 格式为：yyyy-MM-dd
     * @param {String} str_endDate 开始日期字符串 格式为：yyyy-MM-dd
     * @param {bool} isMonth 是否只返回月数
     * @return {int} 返回间隔的月份数
     * */
    function caculateMonthsInterval(str_beginDate,str_endDate,isMonth){
        var arr_beginDate= str_beginDate.split("-");
        var _beginDate=new Date();
        var dateArr = [];
        
        if(arr_beginDate.length>=3){
            _beginDate=new Date(arr_beginDate[0],arr_beginDate[1],arr_beginDate[2]);
        }
        else if(arr_beginDate.length>=2){
            _beginDate=new Date(arr_beginDate[0],arr_beginDate[1]);
        }
        var _endDate=new Date();
        if(str_endDate!=undefined&&str_endDate!=null){
            var arr_endDate=str_endDate.split("-");
            if(arr_endDate.length>=3){
                _endDate=new Date(arr_endDate[0],arr_endDate[1],arr_endDate[2]);
            }
            else if(arr_endDate.length>=2){
                _endDate=new Date(arr_endDate[0],arr_endDate[1]);
            }
        }        
        if(isMonth){
        	return (_endDate.getFullYear()-_beginDate.getFullYear())*12+ _endDate.getMonth()-_beginDate.getMonth();
        }else{
        	var monthCount = (_endDate.getFullYear()-_beginDate.getFullYear())*12+ _endDate.getMonth()-_beginDate.getMonth();
            if(monthCount/12 >= 1){
            	dateArr.push(parseInt(monthCount/12)); 
            }
            dateArr.push(monthCount%12);
            return dateArr;
        }
    }
    
    //简历数组排序
    function resumeSort(arr){    	
    	var timeType = arr[0]["beginDate"]?"beginDate":(arr[0]["awardDate"]?"awardDate":"cerDate");    	
    	for(var i=0;i<arr.length;i++){    		
    		for(var j=0;j<arr.length-i-1;j++){  
    			if(arr[j][timeType]<arr[j+1][timeType]){
    				var tmp = arr[j];
    				arr[j] = arr[j+1];
    				arr[j+1] = tmp;
    			}
    		}
    	}
    }
    
    
    /**
     * 这个方法与jsp页面的结构息息相关，主要是设置中文或英文的简历信息。
     * @param {JSON} item 单独一个简历的数据，中文或者英文。
     * @param {string} cnORen 标识中文或英文，值只有两个，"cn"或者"en"
     */
    function setResumeInfo(item,cnORen){
        var langTypeStr="cn";
        if(cnORen=="en"){langTypeStr="en";}
        var json_ability=item["ability"];//
        var array_allResume=item["allResume"];
        var json_apply=item["apply"];//求职意向
        var attr_applyDisable=item["applyDisable"];
        var array_award=item["award"];//获奖一览。
        var json_base=item["base"];//应聘者基础信息
        var array_certificate=item["certificate"];//相关证书
        var array_education=item["education"];//教育经历
        var attr_langType=item["langType"];//语言类型
        var json_language=item["language"];//语言信息
        var json_major=item["major"];
        var attr_maxDegreeId=item["maxDegreeId"];//最高学历
        var attr_maxVerDegreeId=item["maxVerDegreeId"];
        var array_practice=item["practice"];
        var array_project=item["project"];
        var attr_resumeId=item["resumeId"];
        var attr_resumestatus=item["resumestatus"];
        var json_self=item["self"];
        var attr_subResumeId=item["subResumeId"];
        var array_train=item["train"];
        var attr_updateDate=item["updateDate"];
        var array_work=item["work"];
        var json_workedYear=item["workedYear"];
        var nowdate=new Date();
        var birthday=json_base["birthday"];
        /*
         var el_name=$("#resume_"+langTypeStr+"_name");
         var el_updateDate=$("#resume_"+langTypeStr+"_updateDate");
         var el_sex=$("#resume_"+langTypeStr+"_sex");
         var el_age=$("#resume_"+langTypeStr+"_age");
         var el_nationality=$("#resume_"+langTypeStr+"_nationality");
         var el_height=$("#resume_"+langTypeStr+"_height");
         var el_marriage=$("#resume_"+langTypeStr+"_marriage");
         var el_hometownPC=$("#resume_"+langTypeStr+"_hometownPC");
         var el_photo=$("#resume_"+langTypeStr+"_photo");
         var el_jobLocWanted=$("#resume_"+langTypeStr+"_jobLocWanted");
         var el_jobWanted=$("#resume_"+langTypeStr+"_jobWanted");
         var el_jobSeeking=$("#resume_"+langTypeStr+"_jobSeeking");
         var el_salaryReuired=$("#resume_"+langTypeStr+"_salaryRequired");
         var el_checkInDate=$("#resume_"+langTypeStr+"_checkInDate");
         var el_education=$("#resume_"+langTypeStr+"_education");
         var el_train=$("#resume_"+langTypeStr+"_train");
         var el_work=$("#resume_"+langTypeStr+"_work");
         var el_ability=$("#resume_"+langTypeStr+"_ability");
         var el_language=$("#resume_"+langTypeStr+"_language");
         var el_apply=$("#resume_"+langTypeStr+"_apply");
         var el_self=$("#resume_"+langTypeStr+"_self");
         var el_base=$("#resume_"+langTypeStr+"_base");
         var el_locationPC=$("#resume_"+langTypeStr+"_locationPC");
         //简历名称
         el_name.text(json_base["name"]);
         //简历更新日期
         var __updateDate=new Date(Date.parse(attr_updateDate.replace(/-/g,"/")));
         if(langTypeStr=="cn")
         {el_updateDate.text(__updateDate.getYear()+"年"+__updateDate.getMonth()+"月"+__updateDate.getDay()+"日");}
         else{
         el_updateDate.text(attr_updateDate);
         }
         //性别
         el_sex.text(person.dic.sex[langTypeStr][json_base["sex"]]);
         //计算年龄
         var nowdate = new Date();
         var brithday = json_base["birthday"];
         el_age.text(nowdate.getFullYear() - brithday.substr(0,4));
         //民族
         el_nationality.text(json_base["nationality"]);
         //身高
         el_height.text(json_base["height"]);
         //婚况
         el_marriage.text(person.dic.marriage[langTypeStr][json_base["marriage"]]);
         //籍贯

         el_hometownPC.text(getLocation(json_base["hometownPC"],langTypeStr));
         //现居住地
         el_locationPC.text(getLocation(json_base["locationPC"],langTypeStr));
         //意向工作地区
         var str_jobWantedLoc=getLocation(json_base["jobLocPC1"],langTypeStr)+"、"+
         getLocation(json_base["jobLocPC2"],langTypeStr) +"、"+
         getLocation(json_base["jobLocPC3"],langTypeStr) +"、"+
         getLocation(json_base["jobLocPC4"],langTypeStr) +"、"+
         getLocation(json_base["jobLocPC5"],langTypeStr);
         str_jobWantedLoc= str_jobWantedLoc.replace(/、+/g,"、").replace(/、$/g,"");
         el_jobLocWanted.text(str_jobWantedLoc);
         //意向职位
         var jobFuncArray=new Array();
         jobFuncArray.push(json_base["jobFunction1"]);
         jobFuncArray.push(json_base["jobFunction2"]);
         jobFuncArray.push(json_base["jobFunction3"]);
         jobFuncArray.push(json_base["jobFunction4"]);
         jobFuncArray.push(json_base["jobFunction5"]);
         el_jobWanted.text(getJobFunctionByArray(jobFuncArray),langTypeStr);
         */
        //意向工作地区

        var str_jobWantedLoc=getLocation(json_apply["jobLocPC1"],langTypeStr)+"、"+
            getLocation(json_apply["jobLocPC2"],langTypeStr) +"、"+
            getLocation(json_apply["jobLocPC3"],langTypeStr) +"、"+
            getLocation(json_apply["jobLocPC4"],langTypeStr) +"、"+
            getLocation(json_apply["jobLocPC5"],langTypeStr);
        str_jobWantedLoc= str_jobWantedLoc.replace(/、+/g,"、").replace(/、$/g,"");

        //意向职位
        var jobFuncArray=new Array();
        jobFuncArray.push(json_apply["jobFunction1"]);
        jobFuncArray.push(json_apply["jobFunction2"]);
        jobFuncArray.push(json_apply["jobFunction3"]);
        jobFuncArray.push(json_apply["jobFunction4"]);
        jobFuncArray.push(json_apply["jobFunction5"]);
        var str_jobFuncWanted=getJobFunctionByArray(jobFuncArray,langTypeStr);
        //--寻求职位
        var jobSeekingArr=new Array();
        var str_jobSeeking="";

        if(!isNullOrEmpty(json_apply["jobSeeking1"])){
            str_jobSeeking+=','+json_apply["jobSeeking1"];
        }
        if(!isNullOrEmpty(json_apply["jobSeeking2"])){
            str_jobSeeking+=','+json_apply["jobSeeking2"];
        }
        if(!isNullOrEmpty(json_apply["jobSeeking3"])){
            str_jobSeeking+=','+json_apply["jobSeeking3"];
        }

        str_jobSeeking=str_jobSeeking.replace(/,$/g, "").replace(/^,/g,"");
        if(isNullOrEmpty(str_jobSeeking)){
            if(langTypeStr=="cn"){
                str_jobSeeking="暂无";
            }
            else{
                str_jobSeeking="none";
            }

        }
        var str_salaryReq="";
        if(!isNullOrEmpty(json_apply["salary"])){
            var theSalaryNum=parseInt(json_apply["salary"]);
            if(theSalaryNum>0){
                str_salaryReq=""+theSalaryNum+(langTypeStr=="cn"?"/月":" per month");
            }
        }
        if(json_apply["salaryNegotiable"]=="1"){
            if(isNullOrEmpty(str_salaryReq)){
                if(langTypeStr=="cn"){
                    str_salaryReq+="面议";
                }
                else{
                    str_salaryReq+="Negotiable";
                }
            }
            else{
                if(langTypeStr=="cn"){
                    str_salaryReq+="（可面议）";
                }
                else{
                    str_salaryReq+="(Negotiable)";
                }
            }
        }
        //计算工作时间
        var _workMonths=0;
        for(var cindex=0;cindex<array_work.length;cindex++){
            var cItem_work=array_work[cindex];
            _workMonths+=caculateMonthsInterval(cItem_work["beginDate"],cItem_work["endDate"],true);
        }
        var _workYearMothStr="";
        
        if(langTypeStr=="cn"){
            _workYearMothStr=json_workedYear["year"]+"年"+(json_workedYear["month"]<=0?"":json_workedYear["month"]+"月");
        }
        else{
            _workYearMothStr=json_workedYear["year"]+" Year(s) "+(json_workedYear["month"]<=0?"":json_workedYear["month"]+" Month(s) ");
        }
        
        // 简历时间数组排序
        !array_certificate.length || resumeSort(array_certificate);
        !array_award.length || resumeSort(array_award);       
        !array_train.length || resumeSort(array_train);
        !array_practice.length || resumeSort(array_practice);
        !array_work.length || resumeSort(array_work);
        !array_project.length || resumeSort(array_project);
        !array_education.length ||resumeSort(array_education);
        
        //----拼接html.
        if(langTypeStr=="cn"){
            /*字符串拼接*/
            var htmlArray=new Array();
            htmlArray.push("<div class=\"content cn\">");
            htmlArray.push("  <div class=\"infor\">");
            htmlArray.push("    <div class=\"infor_name\">");
            htmlArray.push("      <dl class=\"base\">");
            htmlArray.push("        <dt><span class=\"name\">"+json_base["name"]+"</span><span class=\"time\">更新于 "+attr_updateDate+"</span></dt>");
            htmlArray.push("        <dd>"+person.dic.sex[langTypeStr][json_base["sex"]]+"<span class=\"line\">/</span>"+(nowdate.getFullYear() - json_base["birthday"].substr(0,4))+"岁<span class=\"line\">/</span>"+json_base["nationality"]+"族<span class=\"line\">/</span>身高"+json_base["height"]+"cm<span class=\"line\">/</span>"+person.dic.marriage[langTypeStr][json_base["marriage"]]+"</dd>");
            htmlArray.push("        <dd>"+getLocation(json_base["hometownPC"],langTypeStr)+"<span class=\"line\">/</span>现居"+getLocation(json_base["locationPC"],langTypeStr)+"</dd>");
            htmlArray.push("      </dl>");
            htmlArray.push("      <div class=\"avatar\">");
            htmlArray.push("        <img src=\""+__photo_src+"\">");
            htmlArray.push("      </div>");
            htmlArray.push("    </div>");
            htmlArray.push("    <div class=\"details\">");
            htmlArray.push("      <ul>");
            htmlArray.push("        <li><span>意向地区</span>"+str_jobWantedLoc+"</li>");
            htmlArray.push("        <li><span>意向职位</span>"+str_jobFuncWanted+"</li>");
            htmlArray.push("        <li><span>寻求职位</span>"+str_jobSeeking+"</li>");
            htmlArray.push("        <li><span>待遇要求</span>"+str_salaryReq+"</li>");
            htmlArray.push("        <li><span>最快到岗</span>"+getCheckinDate(json_apply["checkinDate"],langTypeStr)+"</li>");
            htmlArray.push("      </ul>");
            htmlArray.push("    </div>");
            htmlArray.push("  </div>");
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">教育经历</h3>");
            //--生成教育经历    
           
            for(var cindex=0;cindex<array_education.length;cindex++){
                var cItem_edu=array_education[cindex];
                htmlArray.push("    <ul>");
                htmlArray.push("      <li><span>学历</span>"+dic_degree["cn"][""+cItem_edu["degreeID"]]+"</li>");
                htmlArray.push("      <li><span>时间</span>"+cItem_edu["beginDate"]+" ~"+cItem_edu["endDate"]+"</li>");
                htmlArray.push("      <li><span>学校</span>"+cItem_edu["school"]+"</li>");
                htmlArray.push("      <li><span>专业</span>"+cItem_edu["speciality"]+"</li>");
                htmlArray.push("    </ul>");
            }
            htmlArray.push("  </div>");
            
            // 主要课程（应届生才有）
            if(json_base["memberClass"] == "1" && json_major["mainCourse"]!=""){
	            	htmlArray.push("  <div class=\"item\">");            	
	                htmlArray.push("    <h3 class=\"title\">主要课程</h3>");
	                htmlArray.push("    <ul><li><span>主要课程</span>"+json_major["mainCourse"]+"</li></ul>");
	                htmlArray.push("  </div>");
            }
            
            //培训经历
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">培训经历</h3>");
            for(var cindex=0;cindex<array_train.length;cindex++){
                var cItem_train=array_train[cindex];
                htmlArray.push("    <ul>");
                htmlArray.push("      <li><span>时间</span>"+cItem_train["beginDate"]+"~"+cItem_train["endDate"]+"</li>");
                htmlArray.push("      <li><span>培训机构</span>"+cItem_train["organization"]+"</li>");
                htmlArray.push("      <li><span>培训课程</span>"+cItem_train["course"]+"</li>");
                htmlArray.push("      <li><span>获得证书</span>"+cItem_train["certificate"]+"</li>");                               
                htmlArray.push("    </ul>");
            }
            htmlArray.push("  </div>");
            
            //实践经验（只有应届生才有）
            if(json_base["memberClass"] == "1"){
          	    htmlArray.push("  <div class=\"item\">");
                htmlArray.push("    <h3 class=\"title\">实践经验</h3>");
                arr_practice = [];
                for(var i= 0; i<array_practice.length; i++){
                	if(array_practice[i]["displayIF"] == "1") arr_practice.push(array_practice[i]);
                }
                for(var i=0;i<arr_practice.length;i++){
                    var practice=arr_practice[i];
                    htmlArray.push("    <ul>");
                    htmlArray.push("      <li><span>时间</span>"+practice["beginDate"]+"~"+practice["endDate"]+"</li>");
                    htmlArray.push("      <li><span>实践名称</span>"+practice["name"]+"</li>");
                    htmlArray.push("      <li><span>实践内容</span>"+practice["content"]+"</li>");
                    htmlArray.push("    </ul>");
                }
                htmlArray.push("  </div>");
             }
            
            //工作经验
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">工作经验</h3>");
            htmlArray.push("    <dl>");
            htmlArray.push("      <dt style=\"font-size:1.1em; margin-bottom:1em;\">至今"+_workYearMothStr+"工作经验，曾在"+array_work.length+"家公司工作</dt>");
            for(var cindex=0;cindex<array_work.length;cindex++){            	
                var cItem_work=array_work[cindex];
                var ___str_jobFunc_name="";
                var _arr1=new Array();
                var dateArray = caculateMonthsInterval(cItem_work["beginDate"],cItem_work["endDate"],false);
            	var date = dateArray.length>1? (dateArray[1]>0?dateArray[0]+"年"+dateArray[1]+"个月":dateArray[0]+"年") : dateArray[0]+"个月";
                _arr1.push(cItem_work["jobFunctionID"]);
                ___str_jobFunc_name=getJobFunctionByArray(_arr1,langTypeStr);
                var str_enddate=((cItem_work["endDate"]==undefined||cItem_work["endDate"]==null)?"至今":"~"+cItem_work["endDate"]);
                htmlArray.push("      <dd class=\"line\"><div><ul><li><i class=\"active\"></i>"+cItem_work["beginDate"]+str_enddate+" ("+date+")</li>" +
                    "<li>"+___str_jobFunc_name+"</li>" +
                    "<li>"+cItem_work["comName"]+"</li></ul></div>");
                htmlArray.push("	    主要工作：<br>");
                htmlArray.push(cItem_work["workDesc"]);
                htmlArray.push("<br>");
                /*---没有主要业绩！！！！
                 htmlArray.push("        主要业绩：<br>");
                 htmlArray.push("        ①");
                 htmlArray.push("        <BYD AUTO Magazine>");
                 htmlArray.push("        ipad版电子杂志程序界面设计、策划、上线维护工作<br>");
                 htmlArray.push("        ②");
                 htmlArray.push("        <GCS>");
                 htmlArray.push("        <BYD AUTO>");
                 htmlArray.push("        <BYD S6>");
                 htmlArray.push("        等ipad 程序界面设计、项目管理工作<br>");
                 htmlArray.push("        ③2010年日内瓦及北美车展、2011年香港澳门车展、比利时大巴展、2012年北京车展新能源区互动展具、ipad版车型宣传程序项目支持。<br>");
                 */
                htmlArray.push("        离职原因："+cItem_work["leftReason"]+" </dd>");
            }
            htmlArray.push("    </dl>");
            htmlArray.push("  </div>");            
            
            //项目经验   只显示（选中了简历中显示)
            var arr_project = [];
            for(var i = 0;i<array_project.length;i++){
            	 if(array_project[i]["displayIF"] == "1") arr_project.push(array_project[i]);
            }
            htmlArray.push("  <div class=\"item \">");
            htmlArray.push("	<h3 class=\"title\">项目经验</h3>");
            htmlArray.push("    <dl>");
            htmlArray.push("      <dt style=\"font-size:1.1em; margin-bottom:1em;\">至今"+arr_project.length+"个项目经验</dt>");
            for(var i=0; i<arr_project.length; i++){
            	var project = arr_project[i];
	            htmlArray.push("      <ul>");
	            htmlArray.push("        <li><span>开发周期</span>"+project["beginDate"]+"~"+project["endDate"]+"</li>");
	            htmlArray.push("        <li><span>项目名称</span>"+project["name"]+"</li>");
	            htmlArray.push("        <li><span>担任职位</span>"+project["position"]+"</li>");
	            htmlArray.push("        <li><span>项目描述</span>"+project["projDesc"]+"</li>");
	            htmlArray.push("        <li><span>责任描述</span>"+project["responsibilityDesc"]+"</li>");
	            htmlArray.push("     </ul>");
	            i !=arr_project.length-1 ? htmlArray.push("</br>") :"";
            }
            htmlArray.push("  </dl>");
            htmlArray.push(" </div>");
            //--计算技能特长     
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">技能特长</h3>");
            htmlArray.push("    <ul>");
            if(json_ability["techTitle"]!=""){
            	htmlArray.push("      <li><span>专业职称</span>"+json_ability["techTitle"]+"</li>");
            }
            if(dic_comAbility[langTypeStr][json_ability["computerAbility"]] != undefined){
            	htmlArray.push("      <li><span>计算机水平</span>"+dic_comAbility[langTypeStr][json_ability["computerAbility"]] +"</li>");
            }
            if(json_ability["strengths"] != ""){
            	htmlArray.push("      <li><span>技能专长</span>"+json_ability["strengths"]+" </li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            htmlArray.push("  <div class=\"item\">");

            //语言能力计算

            htmlArray.push("    <h3 class=\"title\">语言能力</h3>");
            htmlArray.push("    <ul>");
            if(dic_languageLevel[langTypeStr][json_language["chineseLevel"]] != undefined){
            	htmlArray.push("      <li><span>普通话</span>"+dic_languageLevel[langTypeStr][json_language["chineseLevel"]]+"</li>");
            }
            if(dic_languageLevel[langTypeStr][json_language["cantoneseLevel"]] != undefined){
               htmlArray.push("      <li><span>粤语</span>"+dic_languageLevel[langTypeStr][json_language["cantoneseLevel"]]+"</li>");
            }
            if(!isNullOrEmpty(json_language["engLevel"])){
                htmlArray.push("      <li><span>英语水平</span>"+json_language["engLevel"]+"</li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            //求职意向
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">求职意向</h3>");            
            htmlArray.push("    <ul>");      
            if(json_apply["careerDirection"]!=""){
                 htmlArray.push("      <li><span>发展方向</span>"+json_apply["careerDirection"]+"</li>");
            }
            if(json_apply["otherRequirement"]!=""){
               htmlArray.push("      <li><span>其他要求</span>"+json_apply["otherRequirement"]+"</li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            //自身情况
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">自身情况</h3>");
            htmlArray.push("    <ul>");
            if(!isNullOrEmpty(json_self["description"])){
                htmlArray.push("      自我评价："+json_self["description"]+"<br>");
            }
            if(!isNullOrEmpty(json_self["interest"])){
                htmlArray.push("      兴趣爱好："+json_self["interest"]);
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            
          //获奖奖励
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">获奖奖励</h3>");
            for(var i =0; i<array_award.length; i++){
            	var award = array_award[i];
	            htmlArray.push("    <ul>");
	            htmlArray.push("      <li><span>时间</span>"+award["awardDate"]+"</li>");
	            htmlArray.push("      <li><span>奖励名称</span>"+award["awardTitle"]+"</li>");
	            htmlArray.push("    </ul>");
	            i !=array_award.length-1 ? htmlArray.push("</br>") :"";
            }
            htmlArray.push("  </div>");
            
            //相关证书
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">相关证书</h3>");
            for(var i =0; i<array_certificate.length; i++){
            	var certificate = array_certificate[i];
	            htmlArray.push("    <ul>");
	            htmlArray.push("      <li><span>颁发日期</span>"+certificate["cerDate"]+"</li>");
	            htmlArray.push("      <li><span>证书名称</span>"+certificate["cerName"]+"</li>");
	            htmlArray.push("      <li><span>证书编号</span>"+certificate["cerNo"]+"</li>");
	            htmlArray.push("      <li><span>颁发机构</span>"+certificate["organization"]+"</li>");
	            htmlArray.push("    </ul>");
	            i !=array_certificate.length-1 ? htmlArray.push("</br>") :"";
            }
            htmlArray.push("  </div>");
            
            //--联系方式
            htmlArray.push("  <div class=\"item contant\">");
            htmlArray.push("    <h3 class=\"title\">联系方式</h3>");
            htmlArray.push("    <ul>");
            if(!isNullOrEmpty(json_base["telephone"])){
                htmlArray.push("      <li><span>固话</span>"+json_base["telephone"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["mobile"])){
                htmlArray.push("      <li><span>手机</span>"+json_base["mobile"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["email"])){
                htmlArray.push("      <li><span>邮箱</span><a href=\"mailto:"+json_base["email"]+"\">"+json_base["email"]+"</a></li>");
            }

            if(!isNullOrEmpty(json_base["homepage"])){
                htmlArray.push("      <li><span>主页</span><a href=\""+json_base["homepage"]+"\">"+json_base["homepage"]+"</a></li>");
            }
            if(!isNullOrEmpty(json_base["weibo"])){
                htmlArray.push("      <li><span>微博</span><a href=\""+json_base["weibo"]+"\">"+json_base["weibo"]+"</a></li>");
            }
            if(!isNullOrEmpty(json_base["qq"])){
                htmlArray.push("      <li><span>QQ</span>"+json_base["qq"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["address"])){
                htmlArray.push("      <li><span>地址</span>"+json_base["address"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["zip"])){
                htmlArray.push("      <li><span>邮编</span>"+json_base["zip"]+"</li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            htmlArray.push("  <div class=\"logo\"><h1><a href=\"http://www.jobcn.com\" target=\"_blank\" title=\"卓博人才网\"><img src=\"/touch/commImage/logo3.png\"></a></h1></div>");
            htmlArray.push("</div>");
            htmlArray.push("");
            /*字符串拼接 结束*/
            $("#cnResumeContent").append(htmlArray.join(""));
            
            $("#cnResumeContent").find(".item").each(function(){        
            	var child = $(this).find("ul").length>0?$(this).find("ul"):$(this).find("dl");
            	if(child.length<=0){
            		$(this).remove();
            	}else{   
            		var child2 = child.find("li").length>0?child.find("li"):child.find("dd");
            		if(child2.length<=0){
            			$(this).remove();
            		}
            	}
    		})
        }
        else{
            /*字符串拼接*/
            var htmlArray=new Array();
            htmlArray.push("<div class=\"content en\">");
            htmlArray.push("  <div class=\"infor\">");
            htmlArray.push("    <div class=\"infor_name\">");
            htmlArray.push("      <dl class=\"base\">");
            htmlArray.push("        <dt><span class=\"name\">"+json_base["name"]+"</span><br><span class=\"time\">Update at: "+attr_updateDate+"</span></dt>");
            htmlArray.push("        <dd>"+person.dic.sex[langTypeStr][json_base["sex"]]+"<span class=\"line\">/</span> Age "+(nowdate.getFullYear() - json_base["birthday"].substr(0,4))+"<span class=\"line\">/</span>Nation "+json_base["nationality"]+"<span class=\"line\">/</span>Height "+json_base["height"]+"cm<span class=\"line\">/</span>"+person.dic.marriage[langTypeStr][json_base["marriage"]]+"</dd>");
            htmlArray.push("        <dd>"+getLocation(json_base["hometownPC"],langTypeStr)+"<span class=\"line\">/</span>Residence "+getLocation(json_base["locationPC"],langTypeStr)+"</dd>");
            htmlArray.push("      </dl>");
            htmlArray.push("      <div class=\"avatar\">");
            htmlArray.push("        <img src=\""+__photo_src+"\">");
            htmlArray.push("      </div>");
            htmlArray.push("    </div>");
            htmlArray.push("    <div class=\"details\">");
            htmlArray.push("      <ul>");
            htmlArray.push("        <li><span>Target Locations:</span>"+str_jobWantedLoc+"</li>");
            htmlArray.push("        <li><span>Target Positions:</span>"+str_jobFuncWanted+"</li>");
            htmlArray.push("        <li><span>Target Jobs:</span>"+str_jobSeeking+"</li>");
            htmlArray.push("        <li><span>Desired Salary:</span>"+str_salaryReq+"</li>");
            htmlArray.push("        <li><span>I can start:</span>"+getCheckinDate(json_apply["checkinDate"],langTypeStr)+"</li>");
            htmlArray.push("      </ul>");
            htmlArray.push("    </div>");
            htmlArray.push("  </div>");
            htmlArray.push("  <div class=\"item ability\">");
            htmlArray.push("    <h3 class=\"title\">Education</h3>");
            //--生成教育经历
            for(var cindex=0;cindex<array_education.length;cindex++){
                var cItem_edu=array_education[cindex];
                htmlArray.push("    <ul>");
                htmlArray.push("      <li><span>Degree</span>"+dic_degree["en"][""+cItem_edu["degreeID"]]+"</li>");
                htmlArray.push("      <li><span>Time Period</span>"+cItem_edu["beginDate"]+" ~"+cItem_edu["endDate"]+"</li>");
                htmlArray.push("      <li><span>School</span>"+cItem_edu["school"]+"</li>");
                htmlArray.push("      <li><span>Major</span>"+cItem_edu["speciality"]+"</li>");
                htmlArray.push("    </ul>");
            }
            htmlArray.push("  </div>");
            
            // 主要课程（应届生才有）
            if(json_base["memberClass"] == "1" && json_major["mainCourse"]!=""){
            	htmlArray.push("  <div class=\"item\">");
                htmlArray.push("    <h3 class=\"title\">Major Courses</h3>");
                htmlArray.push("       <ul><li><span>Courses</span>"+json_major["mainCourse"]+"</li></ul>");
                htmlArray.push("  </div>");
            }           
          
            //培训经历
            htmlArray.push("  <div class=\"item ability\">");
            htmlArray.push("    <h3 class=\"title\">Training</h3>");
            for(var cindex=0;cindex<array_train.length;cindex++){
                var cItem_train=array_train[cindex];
                htmlArray.push("    <ul>");
                htmlArray.push("      <li><span>Time Period</span>"+cItem_train["beginDate"]+"~"+cItem_train["endDate"]+"</li>");
                htmlArray.push("      <li><span>Institution</span>"+cItem_train["organization"]+"</li>");
                htmlArray.push("      <li><span>Course</span>"+cItem_train["course"]+"</li>");
                htmlArray.push("      <li><span>Certification</span>"+cItem_train["certificate"]+"</li>");
                htmlArray.push("    </ul>");
            }
            htmlArray.push("  </div>");
            

            //实践经验（只有应届生才有+只显示在简历中显示）
            if(json_base["memberClass"] == "1"){
          	    htmlArray.push("  <div class=\"item ability\">");
                htmlArray.push("    <h3 class=\"title\">Practical Experience</h3>");
                arr_practice = [];
                for(var i= 0; i<array_practice.length; i++){
                	if(array_practice[i]["displayIF"] == "1") arr_practice.push(array_practice[i]);
                }
                for(var i=0;i<arr_practice.length;i++){
                    var practice=arr_practice[i];
                    htmlArray.push("    <ul>");
                    htmlArray.push("      <li><span>Time Period</span>"+practice["beginDate"]+"~"+practice["endDate"]+"</li>");
                    htmlArray.push("      <li><span>Practical Name</span>"+practice["name"]+"</li>");
                    htmlArray.push("      <li><span>Description</span>"+practice["content"]+"</li>");
                    htmlArray.push("    </ul>");
                }
                htmlArray.push("  </div>");
             }
                       
            //工作经验
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">Work Experience</h3>");
            htmlArray.push("    <dl>");
            htmlArray.push("      <dt style=\"font-size:1.1em; margin-bottom:1em;\">"+_workYearMothStr+" work experience , and served on "+array_work.length+" companies.</dt>");
            for(var cindex=0;cindex<array_work.length;cindex++){
                var cItem_work=array_work[cindex];
                var ___str_jobFunc_name="";
                var _arr1=new Array();
                var dateArray = caculateMonthsInterval(cItem_work["beginDate"],cItem_work["endDate"],false);
            	var date = dateArray.length>1? (dateArray[1]>0?dateArray[0]+(dateArray[0]>1?"years & ":"year & ")+dateArray[1]+(dateArray[1]>1?"months ":"month "):dateArray[0]+(dateArray[0]>1?"years":"year")) :dateArray[0]+(dateArray[1]>1?"months ":"month ");
                _arr1.push(cItem_work["jobFunctionID"]);
                ___str_jobFunc_name=getJobFunctionByArray(_arr1,langTypeStr);
                var str_enddate=((cItem_work["endDate"]==undefined||cItem_work["endDate"]==null)?"Present":"~"+cItem_work["endDate"]);
                htmlArray.push("      <dd class=\"line\"><div><ul><li><i class=\"active\"></i>"+cItem_work["beginDate"]+str_enddate+" ("+date+")</li>" +
                    "<li>"+___str_jobFunc_name+"</li>" +
                    "<li>"+cItem_work["comName"]+"</li></ul></div>");
                htmlArray.push("	    Job Description：<br>");
                htmlArray.push(cItem_work["workDesc"]);
                htmlArray.push("<br>");
                /*---没有主要业绩！！！！
                 htmlArray.push("        主要业绩：<br>");
                 htmlArray.push("        ①");
                 htmlArray.push("        <BYD AUTO Magazine>");
                 htmlArray.push("        ipad版电子杂志程序界面设计、策划、上线维护工作<br>");
                 htmlArray.push("        ②");
                 htmlArray.push("        <GCS>");
                 htmlArray.push("        <BYD AUTO>");
                 htmlArray.push("        <BYD S6>");
                 htmlArray.push("        等ipad 程序界面设计、项目管理工作<br>");
                 htmlArray.push("        ③2010年日内瓦及北美车展、2011年香港澳门车展、比利时大巴展、2012年北京车展新能源区互动展具、ipad版车型宣传程序项目支持。<br>");
                 */
                htmlArray.push("        Reason For Leaving："+cItem_work["leftReason"]+" </dd>");

            }
            htmlArray.push("    </dl>");
            htmlArray.push("  </div>");
            
            //项目经验
            htmlArray.push("  <div class=\"item ability\">");
            htmlArray.push("	<h3 class=\"title\">Project Experience</h3>");
            htmlArray.push("    <dl>");
            htmlArray.push("      <dt style=\"font-size:1.1em; margin-bottom:1em;\">up to now , and served on "+array_project.length+" project experience</dt>");
            for(var i=0; i<array_project.length; i++){
            	var project = array_project[i];
	            htmlArray.push("      <ul>");
	            htmlArray.push("        <li><span>Time Period</span>"+project["beginDate"]+"~"+project["endDate"]+"</li>");
	            htmlArray.push("        <li><span>Project Name</span>"+project["name"]+"</li>");
	            htmlArray.push("        <li><span>Job Title</span>"+project["position"]+"</li>");
	            htmlArray.push("        <li><span>Project Description</span>"+project["projDesc"]+"</li>");
	            htmlArray.push("        <li><span>Responsibility</span>"+project["responsibilityDesc"]+"</li>");
	            htmlArray.push("     </ul>");
	            i !=array_project.length-1 ? htmlArray.push("</br>") :"";
            }
            htmlArray.push("  </dl>");
            htmlArray.push(" </div>");
            
            //--计算技能特长
            htmlArray.push("  <div class=\"item ability\">");
            htmlArray.push("    <h3 class=\"title\">Special Skills</h3>");
            htmlArray.push("    <ul>");
            if(json_ability["techTitle"]!=""){
            	htmlArray.push("      <li><span>Professional Title</span>"+json_ability["techTitle"]+"</li>");
            }
            if(dic_comAbility[langTypeStr][json_ability["computerAbility"]] != undefined){
            	htmlArray.push("      <li><span>Computer Level</span>"+dic_comAbility[langTypeStr][json_ability["computerAbility"]] +"</li>");
            }
            if(json_ability["strengths"] != ""){
            	htmlArray.push("      <li><span>Strengths</span>"+json_ability["strengths"]+" </li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            htmlArray.push("  <div class=\"item\">");

            //语言能力计算

            htmlArray.push("    <h3 class=\"title\">Language Skills</h3>");
            htmlArray.push("    <ul>");
            if(dic_languageLevel[langTypeStr][json_language["chineseLevel"]] != undefined){ 
            	htmlArray.push("      <li><span>Chinese</span>"+dic_languageLevel[langTypeStr][json_language["chineseLevel"]]+"</li>");
            }
            if(dic_languageLevel[langTypeStr][json_language["cantoneseLevel"]] != undefined){
            	htmlArray.push("      <li><span>Cantones</span>"+dic_languageLevel[langTypeStr][json_language["cantoneseLevel"]]+"</li>");
            }
            if(!isNullOrEmpty(json_language["engLevel"])){
                htmlArray.push("      <li><span>English</span>"+json_language["engLevel"]+"</li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            //求职意向
            htmlArray.push("  <div class=\"item ability\">");
            htmlArray.push("    <h3 class=\"title\">Career Objective</h3>");
            htmlArray.push("    <ul>");            
            if(json_apply["careerDirection"]!=""){
                htmlArray.push("      <li><span>Career Direction</span>"+json_apply["careerDirection"]+"</li>");
           }
           if(json_apply["otherRequirement"]!=""){
              htmlArray.push("      <li><span>Requirements</span>"+json_apply["otherRequirement"]+"</li>");
           }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            //自身情况
            htmlArray.push("  <div class=\"item self\">");
            htmlArray.push("    <h3 class=\"title\">Self Info</h3>");
            htmlArray.push("    <ul>");
            if(!isNullOrEmpty(json_self["description"])){
                htmlArray.push("      <li><span>Self Assessment</span>"+json_self["description"]+"");
            }
            if(!isNullOrEmpty(json_self["interest"])){
                htmlArray.push("      <li><span>Hobbies</span>"+json_self["interest"]);
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            
          //获奖奖励
            htmlArray.push("  <div class=\"item\">");
            htmlArray.push("    <h3 class=\"title\">Rewards</h3>");
            for(var i =0; i<array_award.length; i++){
            	var award = array_award[i];
	            htmlArray.push("    <ul>");
	            htmlArray.push("      <li><span>Date</span>"+award["awardDate"]+"</li>");
	            htmlArray.push("      <li><span>Reward</span>"+award["awardTitle"]+"</li>");
	            htmlArray.push("    </ul>");
	            i !=array_award.length-1 ? htmlArray.push("</br>") :"";
            }
            htmlArray.push("  </div>");
            
            //相关证书
            htmlArray.push("  <div class=\"item ability\">");
            htmlArray.push("    <h3 class=\"title\">Certifications</h3>");
            for(var i =0; i<array_certificate.length; i++){
            	var certificate = array_certificate[i];
	            htmlArray.push("    <ul>");
	            htmlArray.push("      <li><span>Date Received</span>"+certificate["cerDate"]+"</li>");
	            htmlArray.push("      <li><span>Certification</span>"+certificate["cerName"]+"</li>");
	            htmlArray.push("      <li><span>Certification No.</span>"+certificate["cerNo"]+"</li>");
	            htmlArray.push("      <li><span>Authority</span>"+certificate["organization"]+"</li>");
	            htmlArray.push("    </ul>");
	            i !=array_certificate.length-1 ? htmlArray.push("</br>") :"";
            }
            htmlArray.push("  </div>");
           
            //--联系方式
            htmlArray.push("  <div class=\"item contant\">");
            htmlArray.push("    <h3 class=\"title\">Contact</h3>");
            htmlArray.push("    <ul>");
            if(!isNullOrEmpty(json_base["telephone"])){
                htmlArray.push("      <li><span>Telephone</span>"+json_base["telephone"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["mobile"])){
                htmlArray.push("      <li><span>Mobile</span>"+json_base["mobile"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["email"])){
                htmlArray.push("      <li><span>Email</span><a href=\"mailto:"+json_base["email"]+"\">"+json_base["email"]+"</a></li>");
            }

            if(!isNullOrEmpty(json_base["homepage"])){
                htmlArray.push("      <li><span>HomePage</span><a href=\""+json_base["homepage"]+"\">"+json_base["homepage"]+"</a></li>");
            }
            if(!isNullOrEmpty(json_base["weibo"])){
                htmlArray.push("      <li><span>Weibo</span><a href=\""+json_base["weibo"]+"\">"+json_base["weibo"]+"</a></li>");
            }
            if(!isNullOrEmpty(json_base["qq"])){
                htmlArray.push("      <li><span>QQ</span>"+json_base["qq"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["address"])){
                htmlArray.push("      <li><span>Address</span>"+json_base["address"]+"</li>");
            }
            if(!isNullOrEmpty(json_base["zip"])){
                htmlArray.push("      <li><span>Postcode</span>"+json_base["zip"]+"</li>");
            }
            htmlArray.push("    </ul>");
            htmlArray.push("  </div>");
            htmlArray.push("  <div class=\"logo\"><h1><a href=\"http://www.jobcn.com\" target=\"_blank\" title=\"卓博人才网\"><img src=\"/touch/commImage/logo3.png\"></a></h1></div>");
            htmlArray.push("</div>");
            htmlArray.push("");
            /*字符串拼接 结束*/

            $("#enResumeContent").html(  htmlArray.join(""));
            
          //中英文简历 隐藏没有填写的大项
        	$("#enResumeContent").find(".item").each(function(){        
            	var child = $(this).find("ul").length>0?$(this).find("ul"):$(this).find("dl"); 
            	if(child.length<=0){
            		$(this).remove();
            	}else{   
            		var child2 = child.find("li").length>0?child.find("li"):child.find("dd");
            		if(child2.length<=0){
            			$(this).remove();
            		}
            	}
    		})
        }
    }
    /**
     *用于设置slider。
     * */
    function setSlider(){    	
        var silder = new touchSilder({
            id:'preview_main_content'
            ,'noclick':false
            ,'auto':'-1'
            ,speed:600
            ,timeout:3000
            ,direction:'right'
            ,after:function(i,o){
                $("#operate_lang li").removeClass("active").eq(i).addClass("active");
                silderAt=i;
                $("#enResumeContent, #cnResumeContent").css("height","");
            }
            ,before : function(i,o){

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
        });
    }

    var out = {
        init : function(jsonData){
            //-------简历数据赋值。
            if(jsonData==null||typeof(jsonData)!="object"){ alert("服务端数据错误！");return;}
            //--获取简历的图片路径
            person.updateInfo()
            var p={lang:0};
            myCache.par = {lang:0};
            resume.selectLanguage(p.lang)
            //取数据
            var key = resume.getDataKey()
            p.dataKey = key
            p.data = sessionStorage[key]
            if(!p.data){ alert("丢失缓存，请重新登录!"); return }
            p.data = util.toJSON(p.data);
            var jsonData2 = p.data.base
            __photo_src="http://"+(jsonData2.perPhotoPath||"")+jsonData2.photo;
            dic_comAbility["en"]=jsonData["json_tech_en"];
            dic_comAbility["cn"]=jsonData["json_tech_cn"];

            var cnResumeJson=undefined;
            var enResumeJson=undefined;
            if(jsonData.length<=0){alert("简历为空！");return; }           
            dic_degree["en"]=jsonData["json_degree_en"];
            dic_degree["cn"]=jsonData["json_degree_cn"];
            //-遍历json数据，抽取各个简历的数据。
            for(var itemIndex=0;itemIndex<jsonData["resumes"].length;itemIndex++ ){
            	var item_json = (util.toString(jsonData["resumes"][itemIndex])).replace(/(:"\d{4}-)(\d{1}-)(\d{1}")/g,'$10$20$3').replace(/(:"\d{4}-)(\d{1}-)(\d{2}")/g,'$10$2$3').replace(/(:"\d{4}-)(\d{2}-)(\d{1}")/g,'$1$20$3');
                var item = util.toJSON(item_json);
                var attr_langType=item["langType"];//语言类型
                if(attr_langType=="0"){
                    //0表示中文
                    cnResumeJson=item;
                }
                else if(attr_langType=="1"){
                    //表示英文
                    enResumeJson=item;
                }


            }
            //--初始化简历预览页面的信息显示
            if(cnResumeJson!=undefined){
                setResumeInfo(cnResumeJson,"cn");
            }
            if(enResumeJson!=undefined){
                setResumeInfo(enResumeJson,"en");
            }
            var ResumeItem=(cnResumeJson==undefined?enResumeJson:cnResumeJson);
            var resumeTip=$("#resumeName");
            for(var cindex in ResumeItem["allResume"]){
                var r_item=ResumeItem["allResume"][cindex];
                if(ResumeItem["subResumeId"]==r_item["cnId"]||ResumeItem["subResumeId"]==r_item["enId"]){
                    resumeTip.text(r_item["name"]);
                    break;
                }
            }

            setSlider();
        }
    }
    module.exports = out;
});