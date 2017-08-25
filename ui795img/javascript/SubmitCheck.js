function DBC2SBC(str) {
    var i;
    var result = '';
    for (i = 0; i < str.length; i++) {
        if (str.charCodeAt(i) > 65295 && str.charCodeAt(i) < 65306)
            result += String.fromCharCode(str.charCodeAt(i) - 65248);
        else
            if (str.charCodeAt(i) > 47 && str.charCodeAt(i) < 58)
                result += String.fromCharCode(str.charCodeAt(i));
    }
    return result;
}

function CheckCarSellMemberSubmit() {
	var xx = $("#photoul").sortable("toArray");
	$("#photos").attr('value',xx);
	var formhash = document.getElementById("formhash");
	var photos = document.getElementById("photos");
    var SltCarType = document.getElementById("SltCarType");
    var SltArea = document.getElementById("SltArea");
    var SltBrand = document.getElementById("SltBrand");
    var SltSerial = document.getElementById("SltSerial");
    var SltModel = document.getElementById("SltModel");
    var RdoModel = document.getElementById("RdoModel");
    var TxtModel = document.getElementById("TxtModel");
    var SltCarYear = document.getElementById("SltCarYear");
    var SltCarMonth = document.getElementById("SltCarMonth");
    var SltCardProvice = document.getElementById("SltCardProvice");
    var SltCardCity = document.getElementById("SltCardCity");
    var SltCarProvice = document.getElementById("SltCarProvice");
    var SltCarCity = document.getElementById("SltCarCity");
    var TxtCarNote = document.getElementById("TxtCarNote");
    var TxtCarCourse = document.getElementById("TxtCarCourse");

    var str = "";
    if (formhash.value == "") {
        str += "* 非法提交！\r";
    }
    if (SltCarType.selectedIndex == 0) {
        str += "* 未选择车类型！\r";
    }
	if (SltArea.selectedIndex == 0) {
		str += "* 未选择车产地！\r";
	}
	if (RdoModel.checked) {		
		if (TxtModel.value == "") {
			str += "* 手写车型不能为空！\r";
		}
	}
	else {
		if (SltModel.selectedIndex == 0) {
			str += "* 未选择车型！\r";
		}
	}
	if (SltCarYear.selectedIndex == 0) {
        str += "* 未选择上牌年份！\r";
    }
    if (SltCarMonth.selectedIndex == 0) {
        str += "* 未选择上牌月份！\r";
    }
    if (SltCardProvice.selectedIndex == 0) {
        str += "* 未选择上牌省！\r";
    }
    if (SltCardCity.selectedIndex == 0) {
        str += "* 未选择上牌市！\r";
    }
    if (SltCarProvice.selectedIndex == 0) {
        str += "* 未选择交易省份！\r";
    }
    if (SltCarCity.selectedIndex == 0) {
        str += "* 未选择交易城市！\r";
    }
    if (TxtCarCourse.value == "") {
        str += "* 行驶公里数不能为空！\r";
    }
    if (str == "") {
		return true;
    }
    else {
        alert(str);
        return false;
    }
}

function CheckInput() {//求购管理员后台
    var str = "";
    var SltCarProvice = document.getElementById("SltCarProvice");
    var SltCarCity = document.getElementById("SltCarCity");
    var TxtMinMoney = document.getElementById("TxtMinMoney");
    var TxtMaxMoney = document.getElementById("TxtMaxMoney");
    var SendLimit = document.getElementById("SendLimit");
    var cartype = document.getElementById("cartype");
    var TxtCarBuy = document.getElementById("TxtCarBuy");
    var TxtContact = document.getElementById("TxtContact");
    var SltLifeProvice = document.getElementById("SltLifeProvice");
    var SltLifeCity = document.getElementById("SltLifeCity");
    var TxtAreaCode = document.getElementById("TxtAreaCode");
    var TxtPhone = document.getElementById("TxtPhone");
    var TxtMobile = document.getElementById("TxtMobile");
    var TxtQQ = document.getElementById("TxtQQ");

    if (SltCarProvice.selectedIndex == 0) {
        str = "* 未选择希望所在省份！\r";
    }
    if (SltCarCity.selectedIndex == 0) {
        str += "* 未选择希望所在城市！\r";
    }
    if (TxtMinMoney.value == "" || TxtMaxMoney.value == "") {
        str += "* 请填写价格！\r";
    }
    if (SendLimit.selectedIndex == 0) {
        str += "* 未选择信息有效期！\r";
    }
    if (cartype.selectedIndex == 0) {
        str += "* 未选择车类型！\r";
    }
    if (!(/^.{3,50}$/.test(TxtCarBuy.value))) {
        str += "* 求购车型必须3-50个字符！\r";
    }

    if (TxtContact.value == "") {
        str += "* 联系人不能为空！\r";
    }
    else {
        if (!(/^[\u0391-\uFFE5 ]+$/.test(TxtContact.value))) {
            str += "* 联系人只充许汉字！\r";
        }
    }
    if (SltLifeProvice.selectedIndex == 0) {
        str += "* 未选择所在省份！\r";
    }
    if (SltLifeCity.selectedIndex == 0) {
        str += "* 未选择所在城市！\r";
    }

    if (TxtPhone.value != "" || TxtAreaCode.value != "") {
        if (!(/^\d{7,8}$/.test(TxtPhone.value))) {
            str += "* 电话号码不正确！\r";
        }
    }

//    if (TxtMobile.value == "") {
//        str += "* 手机号码不能为空！\r";
//    }
//    else {
//        if (!(/^(1)\d{10}$/.test(TxtMobile.value))) {
//            str += "* 手机号码不正确！\r";
//        }
//    }

    if (TxtQQ.value != "") {
        if (!(/^[1-9]{1}\d{4,11}$/.test(TxtQQ.value))) {
            str += "* QQ号码不正确！\r";
        }
    }
    if (str == "") {
        return true;
    } else {
        alert(str);
        return false;
    }
}
function CheckAdminInput() {//求购会员后台
    var str = "";
    var SltCarProvice = document.getElementById("SltCarProvice");
    var SltCarCity = document.getElementById("SltCarCity");
    var TxtMinMoney = document.getElementById("ctl00_cp_TxtMinMoney");
    var TxtMaxMoney = document.getElementById("ctl00_cp_TxtMaxMoney");
    var SendLimit = document.getElementById("SendLimit");
    var cartype = document.getElementById("cartype");
    var TxtCarBuy = document.getElementById("TxtCarBuy");
    var TxtContact = document.getElementById("TxtContact");
    var SltLifeProvice = document.getElementById("SltLifeProvice");
    var SltLifeCity = document.getElementById("SltLifeCity");
    var TxtAreaCode = document.getElementById("TxtAreaCode");
    var TxtPhone = document.getElementById("TxtPhone");
    var TxtMobile = document.getElementById("TxtMobile");
    var TxtQQ = document.getElementById("TxtQQ");

    if (SltCarProvice.selectedIndex == 0) {
        str = "* 未选择希望所在省份！\r";
    }
    if (SltCarCity.selectedIndex == 0) {
        str += "* 未选择希望所在城市！\r";
    }
    if (TxtMinMoney.value == "" || TxtMaxMoney.value == "") {
        str += "* 请填写价格！\r";
    }
    if (SendLimit.selectedIndex == 0) {
        str += "* 未选择信息有效期！\r";
    }
    if (cartype.selectedIndex == 0) {
        str += "* 未选择车类型！\r";
    }
    if (!(/^.{3,50}$/.test(TxtCarBuy.value))) {
        str += "* 求购车型必须3-50个字符！\r";
    }

    if (TxtContact.value == "") {
        str += "* 联系人不能为空！\r";
    }
    else {
        if (!(/^[\u0391-\uFFE5 ]+$/.test(TxtContact.value))) {
            str += "* 联系人只充许汉字！\r";
        }
    }
    if (SltLifeProvice.selectedIndex == 0) {
        str += "* 未选择所在省份！\r";
    }
    if (SltLifeCity.selectedIndex == 0) {
        str += "* 未选择所在城市！\r";
    }

    if (TxtPhone.value != "" || TxtAreaCode.value != "") {
        if (!(/^\d{7,8}$/.test(TxtPhone.value))) {
            str += "* 电话号码不正确！\r";
        }
    }
//    if (TxtMobile.value == "") {
//        str += "* 手机号码不能为空！\r";
//    }
//    else {
//        if (!(/^(1)\d{10}$/.test(TxtMobile.value))) {
//            str += "* 手机号码不正确！\r";
//        }
//    }
    if (TxtQQ.value != "") {
        if (!(/^[1-9]{1}\d{4,11}$/.test(TxtQQ.value))) {
            str += "* QQ号码不正确！\r";
        }
    }
    if (document.getElementById("Validate_Code").value == "") {
        str += "* 验证码不能为空！\r";
    }

    if (str == "") {
        return true;
    } else {
        alert(str);
        return false;
    }
}

function CheckCarSellInput() {
    var str = "";
    var cartype = document.getElementById("cartype");
    var CarArea = document.getElementById("CarArea");
    var CarModel = document.getElementById("CarModel");
    var SltCarYear = document.getElementById("SltCarYear");
    var SltCarMonth = document.getElementById("SltCarMonth");
    var TxtCarMoney = document.getElementById("TxtCarMoney");
    var SltCarProvice = document.getElementById("SltCarProvice");
    var SltCarCity = document.getElementById("SltCarCity");
    var TxtCourse = document.getElementById("TxtCourse");
    var TxtContact = document.getElementById("TxtContact");
    var SltLifeProvice = document.getElementById("SltLifeProvice");
    var SltLifeCity = document.getElementById("SltLifeCity");
    var TxtAreaCode = document.getElementById("TxtAreaCode");
    var TxtPhone = document.getElementById("TxtPhone");
    var TxtMobile = document.getElementById("TxtMobile");
    var TxtQQ = document.getElementById("TxtQQ");
    var RdoModel = document.getElementsByName("RdoModel");
    var TxtModel = document.getElementById("TxtModel");
    if (cartype.selectedIndex == 0) {
        str += "* 未选择车类型！\r";
    }
    for (var i = 0; i < RdoModel.length; i++) {

        if (RdoModel[i].checked) {
            if (i != "0") {
                if (CarArea.selectedIndex == 0) {
                    str += "* 未选择车产地！\r";
                }
                if (CarModel.selectedIndex == 0) {
                    str += "* 未选择车型！\r";
                }
            }
            else {
                if (TxtModel.value == "") {
                    str += "* 手写车型不能为空！\r";

                }
            }
        }
    }
    if (SltCarYear.selectedIndex == 0) {
        str += "* 未选择上牌年份！\r";
    }
    if (SltCarMonth.selectedIndex == 0) {
        str += "* 未选择上牌月份！\r";
    }
    if (TxtCarMoney.value == "") {
        str += "* 出售价格不能为空！\r";
    }
    if (TxtContact.value == "") {
        str += "* 联系人不能为空！\r";
    }
    else {
        if (!(/^[\u0391-\uFFE5 ]+$/.test(TxtContact.value))) {
            str += "* 联系人只充许汉字！\r";
        }
    }
    if (SltCarProvice.selectedIndex == 0) {
        str += "* 未选择交易省份！\r";
    }
    if (SltCarCity.selectedIndex == 0) {
        str += "* 未选择交易城市！\r";
    }
    if (TxtCourse.value == "") {
        str += "* 行驶公里数不能为空！\r";
    }
    if (TxtPhone.value != "" || TxtAreaCode.value != "") {
        if (!(/^\d{7,8}$/.test(TxtPhone.value))) {
            str += "* 电话号码不正确！\r";
        }
    }

//    if (TxtMobile.value == "") {
//        str += "* 手机号码不能为空！\r";
//    }
//    else {
//        if (!(/^(1)\d{10}$/.test(TxtMobile.value))) {
//            str += "* 手机号码不正确！\r";
//        }
//    }

    if (TxtQQ.value != "") {
        if (!(/^[1-9]{1}\d{4,11}$/.test(TxtQQ.value))) {
            str += "* QQ号码不正确！\r";
        }
    }
    if (str == "") {
        return true;
    }
    else {
        alert(str);
        return false;
    }
}



function CheckCarSellAdminInput() {
    var str = "";
    var cartype = document.getElementById("cartype");
    var CarArea = document.getElementById("CarArea");
    var CarModel = document.getElementById("CarModel");
    var SltCarYear = document.getElementById("SltCarYear");
    var SltCarMonth = document.getElementById("SltCarMonth");
    var TxtCarMoney = document.getElementById("TxtCarMoney");
    var SltCarProvice = document.getElementById("SltCarProvice");
    var SltCarCity = document.getElementById("SltCarCity");
    var TxtCourse = document.getElementById("TxtCourse");
    var TxtContact = document.getElementById("TxtContact");
    var SltLifeProvice = document.getElementById("SltLifeProvice");
    var SltLifeCity = document.getElementById("SltLifeCity");
    var TxtAreaCode = document.getElementById("TxtAreaCode");
    var TxtPhone = document.getElementById("TxtPhone");
    var TxtMobile = document.getElementById("TxtMobile");
    var TxtQQ = document.getElementById("TxtQQ");
    var TxtModel = document.getElementById("car_more");
    if (cartype.selectedIndex == 0) {
        str += "* 未选择车类型！\r";
    }
    if ($("#Tr_car_more").css("display")=="none") {
        if (CarArea.selectedIndex == 0) {
            str += "* 未选择车产地！\r";
        }
        if (CarModel.selectedIndex == 0) {
            str += "* 未选择车型！\r";
        }
    }
    else {
        if (TxtModel.value == "") {
            str += "* 手写车型不能为空！\r";
        }
    }
    if (SltCarYear.selectedIndex == 0) {
        str += "* 未选择上牌年份！\r";
    }
    if (SltCarMonth.selectedIndex == 0) {
        str += "* 未选择上牌月份！\r";
    }
    if (TxtCarMoney.value == "") {
        str += "* 出售价格不能为空！\r";
    }
    if (TxtContact.value == "") {
        str += "* 联系人不能为空！\r";
    }
    else {
        if (!(/^[\u0391-\uFFE5 ]+$/.test(TxtContact.value))) {
            str += "* 联系人只充许汉字！\r";
        }
    }
    if (SltCarProvice.selectedIndex == 0) {
        str += "* 未选择交易省份！\r";
    }
    if (SltCarCity.selectedIndex == 0) {
        str += "* 未选择交易城市！\r";
    }
    if (TxtCourse.value == "") {
        str += "* 行驶公里数不能为空！\r";
    }

   
//    if (TxtPhone.value != "" || TxtAreaCode.value != "") {
//        if (!(/^\d{7,8}$/.test(TxtPhone.value))) {
//            str += "* 电话号码不正确！\r";
//        }
//    }

//    if (TxtMobile.value != "") {
//        if (!(/^(1)\d{10}$/.test(TxtMobile.value))) {
//            str += "* 手机号码不正确！\r";
//        }
//    }

//    if (TxtQQ.value != "") {
//        if (!(/^[1-9]{1}\d{4,11}$/.test(TxtQQ.value))) {
//            str += "* QQ号码不正确！\r";
//        }
//    }
    if (str == "") {
        return true;
    }
    else {
        alert(str);
        return false;
    }
}
function CheckCarSellAdminInputID() {
    var str = "";
    var cartype = document.getElementById("cartype");
    var CarArea = document.getElementById("CarArea");
    var CarModel = document.getElementById("CarModel");
    var SltCarYear = document.getElementById("SltCarYear");
    var SltCarMonth = document.getElementById("SltCarMonth");
    var TxtCarMoney = document.getElementById("ctl00_cp_TxtCarMoney");
    var SltCarProvice = document.getElementById("SltCarProvice");
    var SltCarCity = document.getElementById("SltCarCity");
    var TxtCourse = document.getElementById("ctl00_cp_TxtCourse");
    var TxtContact = document.getElementById("TxtContact");
    var SltLifeProvice = document.getElementById("SltLifeProvice");
    var SltLifeCity = document.getElementById("SltLifeCity");
    var TxtAreaCode = document.getElementById("TxtAreaCode");
    var TxtPhone = document.getElementById("TxtPhone");
    var TxtMobile = document.getElementById("TxtMobile");
    var TxtQQ = document.getElementById("TxtQQ");
    var RdoModel = document.getElementsByName("RdoModel");
    var TxtModel = document.getElementById("TxtModel");
    var SltCardProvice = document.getElementById("SltCardProvice");
    var SltCardCity = document.getElementById("SltCardCity");
    if (cartype.selectedIndex == 0) {
        str += "* 未选择车类型！\r";
    }
    for (var i = 0; i < RdoModel.length; i++) {

        if (RdoModel[i].checked) {
            if (i != "0") {
                if (CarArea.selectedIndex == 0) {
                    str += "* 未选择车产地！\r";
                }
                if (CarModel.selectedIndex == 0) {
                    str += "* 未选择车型！\r";
                }
            }
            else {
                if (TxtModel.value == "") {
                    str += "* 手写车型不能为空！\r";

                }
            }
        }
    }
    if (SltCarYear.selectedIndex == 0) {
        str += "* 未选择上牌年份！\r";
    }
    if (SltCarMonth.selectedIndex == 0) {
        str += "* 未选择上牌月份！\r";
    }
    if (SltCardProvice.selectedIndex == 0) {
        str += "* 未选择上牌省！\r";
    }
    if (SltCardCity.selectedIndex == 0) {
        str += "* 未选择上牌市！\r";
    }
    if (TxtCarMoney.value == "") {
        str += "* 出售价格不能为空！\r";
    }
    if (TxtContact.value == "") {
        str += "* 联系人不能为空！\r";
    }
    else {
        if (!(/^[\u0391-\uFFE5 ]+$/.test(TxtContact.value))) {
            str += "* 联系人只充许汉字！\r";
        }
    }
    if (SltCarProvice.selectedIndex == 0) {
        str += "* 未选择交易省份！\r";
    }
    if (SltCarCity.selectedIndex == 0) {
        str += "* 未选择交易城市！\r";
    }
    if (TxtCourse.value == "") {
        str += "* 行驶公里数不能为空！\r";
    }

    if (TxtPhone.value != "" || TxtAreaCode.value != "") {
        if (!(/^\d{7,8}$/.test(TxtPhone.value))) {
            str += "* 电话号码不正确！\r";
        }
    }

    if (SltLifeProvice.selectedIndex == 0) {
        str += "* 未选择所在省份！\r";
    }
    if (SltLifeCity.selectedIndex == 0) {
        str += "* 未选择所在城市！\r";
    }


    if (TxtMobile.value == "") {
        str += "* 手机号码不能为空！\r";
    }
    else {
        if (!(/^(1)\d{10}$/.test(TxtMobile.value))) {
            str += "* 手机号码不正确！\r";
        }
    }
    if (TxtQQ.value != "") {
        if (!(/^[1-9]{1}\d{4,11}$/.test(TxtQQ.value))) {
            str += "* QQ号码不正确！\r";
        }
    }

    if (str == "") {
        return true;
    }
    else {
        alert(str);
        return false;
    }
}


function getObject(objectId) {
    if (document.getElementById && document.getElementById(objectId)) {
        // W3C DOM
        return document.getElementById(objectId);
    } else if (document.all && document.all(objectId)) {
        // MSIE 4 DOM
        return document.all(objectId);
    } else if (document.layers && document.layers[objectId]) {
        // NN 4 DOM.. note: this won't find nested layers
        return document.layers[objectId];
    } else {
        return false;
    }
}
function getprace(obj) {
    for (var i = 0; i < arrCar.length; i++) {
        if (arrCar[i][0] == obj.value) {
            if (arrCar[i][3] != '') {
                getObject("price").innerHTML = "新车参考价为：<font color=\"red\">" + arrCar[i][3] + "</font>！<a href=\"/model_" + obj.value + ".aspx\" style=\"font-size:14px\" target=\"_blank\"><u>查看详细</u></a>！"
            } else {
                getObject("price").innerHTML = "<a href=\"/model_" + obj.value + ".aspx\" style=\"font-size:14px\" target=\"_blank\"><u>点此查看此车详细参数</u></a>！"
            }
        }
    }
}
function Titles(va) {
    if (va == '') {
        $("#CheckTitle").html('主题不能为空！');
        return false;
    }
    $("#CheckTitle").html('');
    return true;
}
function Contents(va) {
    if (va == '') {
        $("#CheckContent").html('内容不能为空！');
        return false;
    }
    $("#CheckContent").html('');
    return true;
}
function VerifyForm() {
    try {
        var ReceiveName, Title, CarNote;
        var ret = true;
        if ($("#Hidden1").val() == "") {
            ret = false;
        }
        else {
            ret = true;
        }
        //ret = JudgeReceiveName($("#ReceiveName").val());
        ReceiveName = ret;
        ret = Titles($("#Title").val());
        Title = ret;
        ret = Contents($("#CarNote").val());
        CarNote = ret;

        if (ReceiveName && Title && CarNote)  //全部通过的话，才能提交成功
        {
            ForbidButton();
            return true;
        }
        if (!ReceiveName) {
            $("#ReceiveName").focus();
            return false;
        }
        if (!Title) {
            $("#Title").focus();
            return false;
        }
        if (!CarNote) {
            $("#CarNote").focus();
            return false;
        }
    }
    catch (err) {
        alert(err);
        return false;
    }
}
function huifu() {
    try {
        var ReceiveName, Title, CarNote;
        var ret = true;

        ret = Titles($("#Title").val());
        Title = ret;
        ret = Contents($("#CarNote").val());
        CarNote = ret;

        if (Title && CarNote)  //全部通过的话，才能提交成功
        {
            ForbidButton();
            return true;
        }
        if (!Title) {
            $("#Title").focus();
            return false;
        }
        if (!CarNote) {
            $("#CarNote").focus();
            return false;
        }
    }
    catch (err) {
        alert(err);
        return false;
    }
}
///禁用注册按钮和文本框
function ForbidButton() {
    window.setTimeout(" $('#ctl00_cp_Button1').attr('disabled',true);", 1);
}
function JudgeReceiveName(va) {
    if (va == '') {
        $("#CheckReceiveName").css("display", "inline-block");
        $("#CheckReceiveName").html('接收人不能为空！');
        return false;
    }
    else {
        var str = "usercode=" + va;
        str += "&time=" + new Date().getMilliseconds();
        $.ajax({
            type: "GET",
            url: "CheckReceiveName.ashx",
            dataType: "html",
            data: str,
            success: function (msg) {
                if (msg == "") {
                    $("#CheckReceiveName").css("display", "inline-block");
                    $("#CheckReceiveName").html('该用户还未在本站注册，请重新填写！');
                    return false;
                }
                else {
                    $("#CheckReceiveName").css('display', 'none');
                    $("#Hidden1").val(msg);
                    return true;
                }
            },
            error: function () {
                return false; //错误处理
            }
        });
    }
}
