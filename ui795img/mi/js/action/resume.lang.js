/**
 * 简历编辑验证相关消息文本
 *
 * Author: alex(6237)
 * Created Date: 2015-06-30
 */

define(function(require, exports, module) {

    var out = {};

    // 简历编辑验证相关消息文本
    out.message = {
        "cn":{
            "ability_too_long":"专业职称不能超过20个字！",
            "warn_create_resume_first":"请先填写简历，然后再预览！",
            "showAll":"显示全部↓",
            "hideSection":"隐藏部份↑",
            "save_timeout":"保存超时，请重试！",
            "save_error":"保存失败，请重试！",
            "initing":"初始化中，点击确定继续。",
            "education":"教育经历",
            "train":"培训经历",
            "practice":"实践经验",
            "work":"工作经验",
            "project":"项目经验",
            "award":"获奖奖励",
            "certificate":"相关证书",
            "warn_mod_max":"你的“{#data.name}”已经达到最大限制{#data.max}份，如需继续创建请先删除！",
            "warn_mod_del":"你是否需要删除该“{#data}”吗？",
            "warn_education_cer":"你未填写证书编号，请先填写再进行学历验证！",
            //编辑简历
            "select_province":"请选择省",
            "select_city":"请选择市",
            "select_district":"请选择县",
            "require_base_name":"请输入您的姓名！",
            "error_base_name":"请输入您的正确姓名！",
            "require_base_nation":"请输入您的民族！",
            "require_base_contact":"联系方式至少填写一项！",
            "require_base_birthday":"请输入您的出生日期！",
            "ltThanNow_base_birthday":"出生日期必须小于当前日期！",
            "error_base_birthday_year":"请输入正确的出生年份，如:1980！",
            "error_base_birthday":"请选择正确的出生日期，如:02-28！",
            "error_base_locationPC":"请选择现所在地！",
            "error_base_photo_notImage":"照片格式仅支持jpg、jpeg、gif、png！",
            "error_base_photo_exceedMaxsize":"照片大小不能超过1M！",
            "error_base_qq":"请输入正确的QQ号码！",
            "error_base_mobile":"请输入正确的手机号码！",
            "error_base_telephone":"请输入正确的号码！如:0769-22882222",
            "require_base_email":"请填写您的的电子邮箱！",
            "error_base_email":"请填写您的正确的电子邮箱！",
            "error_yahoo_email":"雅虎中国邮箱已停止服务，请填写其他邮箱！",
            "error_base_zip":"请填写正确的邮政编码！",
            "error_base_cardNum":"身份证号格式不正确",                   //2012-4-16
            "exist_base_email":"电子邮箱已被使用！",
            "error_base_homepage":"请输入正确的个人主页！",
            "length_base_homepage":"个人主页长度限制80个字！",
            "error_base_height":"请输入您的身高,并且身高只能为数字！",
            "range_base_height":"请输入正确的身高！",
            "require_education_school":"请输入您的学校！",
            "require_education_speciality":"请输入您的专业！",
            "error_education_date":"请输入正确的日期！",
            "lt_education_date":"开始日期必须小于结束日期！",
            "ltThanNow_education_date":"日期不能大于当前日期！",
            "ltThanYearsLater_education_date":"结束年份最迟不超过'当前年份+8年'",
            "rangeLtThanYears_education_date":"开始年份与结束年份之差不能超过8年",
            "require_major":"请填写您的的主要课程！",
            "error_major":"不能超过150个字！",
            "require_train_course":"请输入培训课程！",
            "require_train_organization":"请输入培训机构名称！",
            "lt_train_date":"开始日期必须小于结束日期！",
            "ltThanNow_train_date":"日期不能大于当前日期！",
            "error_train_date":"请输入正确的日期！",
            "require_practice_name":"请输入实践名称！",
            "error_practice_date":"请输入正确的日期！",
            "lt_practice_date":"开始日期必须小于结束日期！",
            "ltThanNow_practice_date":"日期不能大于当前日期！",
            "error_practice_content":"请输入实践内容，并且长度不能超过500个字！",
            "error_content_repeat":"存在大量重复内容!",
            "error_content_invalid":"请输入有意义的内容",
            "error_work_date":"请输入正确的日期！",
            "lt_work_date":"开始日期必须小于结束日期！",
            "ltThanNow_work_date":"日期不能大于当前日期！",
            "error_project_date":"请输入正确的日期！",
            "lt_project_date":"开始日期必须小于结束日期！",
            "ltThanNow_project_date":"日期不能大于当前日期！",
            "error_workedYear_year":"请输入正确的年！",
            "error_workedYear_month":"月的范围0-12月！",
            "error_workedYear_comNum":"请输入正确的您工作过的公司数目！",
            "require_work_comName":"请输入公司名称！",
            "require_work_calling":"请输入行业类别！",
            "require_work_jobFunction":"请输入岗位类别！",
            "require_work_position":"请输入担任职位！",
            "error_work_desc":"请输入工作描述，并且长度不能超过2000个字！",
            "error_work_leftReason":"不能超过100个字！",
            "require_project_name":"请输入项目名称！",
            "require_project_position":"请输入担任职位！",
            "error_project_desc":"请输入项目描述，并且长度不能超过1000个字！",
            "error_project_duty":"请输入责任描述，并且长度不能超过1000个字！",
            "require_language_chineseLevel":"请选择普通话口语水平！",
            "require_language_cantoneseLevel":"请选择粤语口语水平！",
            "error_language_engLevel":"不能超过60个字！",
            "error_language_otherFlangDesc":"不能超过50个字！",
            "error_self_description":"请输入自我评价，并且长度不能超过400个字！",
            "error_self_interest":"不能超过250个字！",
            "require_award_title":"请输入您的奖励名称！",
            "length_award_title":"长度不能超过30个字！",
            "require_award_date":"请选择您的获奖日期！",
            "error_award_date":"请输入正确的获奖日期！",
            "require_certificate_name":"请输入您的证书名称！",
            "error_certificate_date":"请选择您的证书颁发日期！",
            "error_certificate_exceedMaxsize":"证书上传大小限制为：200K！",
            "error_certificate_notImage":"上传文件必须为图片！",
            "error_apply_computerSkills":"不能超过1000个字！",
            "error_apply_strengths":"请输入技能专长，且长度为10~1000个字！",
            "error_apply_otherRequirement":"不能超过250个字！",
            "error_apply_checkinDate":"请选择您的到岗日期！",
            "error_apply_jobSeeking":"不能超过20个字！",
            "length_apply_techTitle":"不能超过20个字！",
            "require_apply_jobLocation":"请选择您期望工作的地区！",
            "require_apply_jobFunction":"请选择您期望职位！",
            "error_apply_salary":"薪资待遇必须为数字！",
            "error_apply_careerDirection":"请输入发展方向，且长度不能超过500个字！",
            "error_opt_illegality":"非法操作！",
            "error_resumeNum_exceed":"已经超过可以创建的简历数量!"
        },
        "en":{
            "ability_too_long":"Professional title should not exceed 40 characters!",
            "warn_create_resume_first":"Please input your resume first!",
            "showAll":"Show All↓",
            "hideSection":"Hidden Part↑",
            "save_timeout":"Save Timeout，Please Try Again！",
            "save_error":"Save Error，Please Again！",
            "initing":"Initing，Plase Cilck to Continue。",
            "education":"Education",
            "train":"Training",
            "practice":"Practical Experience",
            "work":"Work Experience",
            "project":"Project Experience",
            "award":"Awards",
            "certificate":"Certifications",
            "warn_mod_max":"“{#data.name}” limit {#data.max}，please delete if your want to go on!",
            "warn_mod_del":"Do You Want to delete the “{#data}”",
            "warn_education_cer":"You Didn't Fill the Certificate No.，Please Finish then Confirm！",
            //编辑简历
            "select_province":"Province",
            "select_city":"City",
            "select_district":"District",
            "require_base_name":"Please input your Name！",
            "error_base_name":"Please input your correct Name！",
            "require_base_nation":"Please input your Nation！",
            "require_base_contact":"Phone or Mobile is required",
            "require_base_birthday":"Please input your Birthday！",
            "error_base_birthday_year":"Please input correct Birthday，For Example:1980！",
            "error_base_birthday":"Please select the date of your birth!",
            "error_base_locationPC":"Please select Location！",
            "error_base_photo_notImage":"Please upload image files only.",
            "error_base_photo_exceedMaxsize":"Photo should not exceed 1M.",
            "error_base_qq":"Please input the correct QQ No.！",
            "error_base_mobile":"Please input the correct CellPhone No.！",
            "error_base_telephone":"Please input the correct Phone No.！For Example:0769-22882222",
            "require_base_email":"Please input your Email！",
            "error_base_email":"Please input your correct Email！",
            "error_yahoo_email":"Yahoo Mail have stopped their services in China！",
            "error_base_cardNum":"Please input your correct ID No.！",                   //2012-4-16
            "error_base_zip":"Please input the correct Zip Code！",
            "exist_base_email":"this Email has been used！",
            "error_base_homepage":"Please input your Homepage！",
            "length_base_homepage":"Homepage limit 80 characters",
            "error_base_height":"Please input your Height！",
            "range_base_height":"Please input your correct Height！",
            "require_education_school":"Please input your School Name！",
            "require_education_speciality":"Please input your Major！",
            "error_education_date":"Please input the correct Date！",
            "ltThanNow_education_date":"this date must less than now!",
            "lt_education_date":"the begining Date should be less than the Ending Date！",
            "require_major":"Please input your Major course！",
            "error_major":"limit your entry to 150 characters!",
            "require_train_course":"Please input Training Course！",
            "require_train_organization":"Please input Training Organization's Name！",
            "lt_train_date":"the begining Date should be less than the Ending Date！",
            "ltThanNow_train_date":"this date must less than now!",
            "error_train_date":"Please input the correct Date！",
            "require_practice_name":"Please input the Practice Name！",
            "error_practice_date":"Please input the correct Date！",
            "ltThanNow_practice_date":"this date must less than now!",
            "lt_practice_date":"the begining Date should be less than the Ending Date！",
            "error_practice_content":"Please input the Practice Contents(limit 500 characters)！",
            "error_content_repeat":"It contains numbingly similar bits of language!",
            "error_content_invalid":"Please enter a meaningful content!",
            "error_work_date":"Please input the correct Date！",
            "ltThanNow_work_date":"this date must less than now!",
            "lt_work_date":"the begining Date should be less than the Ending Date！",
            "error_project_date":"Please input the correct Date！",
            "lt_project_date":"the begining Date should be less than the Ending Date！",
            "ltThanNow_project_date":"this date must less than now!",
            "error_workedYear_year":"Please input the number of year!",
            "error_workedYear_month":"Months should be from 0-12！",
            "error_workedYear_comNum":"Please re-input the number!",
            "require_work_comName":"Please input the company name！",
            "require_work_calling":"Please choose industry category！",
            "require_work_jobFunction":"Please choose Job category！",
            "require_work_position":"Please input the Job Title!",
            "error_work_desc":"Please input Job Description(limit 2000 characters).",
            "error_work_leftReason":"limit your entry to 100 characters.",
            "require_project_name":"Please input Project Name.",
            "require_project_position":"Please input Job Title.",
            "error_project_desc":"Please input Project Descripition(limit1000 characters).",
            "error_project_duty":"Please input Responsibility(limit  1000 characters).",
            "require_language_chineseLevel":"Please sekect Chinese Level.",
            "require_language_cantoneseLevel":"Please sekect Cantonese Level.",
            "error_language_engLevel":"limit your entry to 60 characters. ",
            "error_language_otherFlangDesc":"limit your entry to 50 characters. ",
            "error_self_description":"Please input Self Assessment(limit 400 characters)",
            "error_self_interest":"limit your entry to 250 characters. ",
            "require_award_title":"Please input Reward!",
            "length_award_title":"limit your entry to 60 characters. ",
            "require_award_date":"Please select Date!",
            "error_award_date":"Please select!",
            "require_certificate_name":"Please input Certification!",
            "error_certificate_date":"Please input Date Received!",
            "error_certificate_exceedMaxsize":"Attachment should not exceed 200k.",
            "error_certificate_notImage":"Please upload image files only. ",
            "error_apply_computerSkills":"limit your entry to 1000 characters. ",
            "error_apply_strengths":"limit your entry to 10~12000 characters.",
            "error_apply_otherRequirement":"limit your entry to 250 characters. ",
            "error_apply_salary":"Please input the number!",
            "error_apply_checkinDate":"Please select the date you can start!",
            "error_apply_jobSeeking":"limit your entry to 20 characters. ",
            "length_apply_techTitle":"limit your entry to 40 characters. ",
            "require_apply_jobLocation":"Please select Target Locations!",
            "require_apply_jobFunction":"Please select Target Positions!",
            "error_apply_careerDirection":"Please input career direction(limit 500 characters). ",
            "error_resumeNum_exceed":"It's already over the resume amounts that can be created."
        }
    };

    // 根据id获取文本，默认语言为中文
    out.get = function(id, lang) {
        if (!lang) lang = 'cn';
        return out.message[lang][id] || id;
    };

    // 根据id及文本添加一个新记录，默认语言为中文
    out.add = 
    out.set = function(id, msg, lang) {
        if (!lang) lang = 'cn';
        out.message[lang][id] = msg;
    };

    module.exports = out;
});