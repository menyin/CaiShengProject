//初始省份
function initProv(obj, _value) {
    clearOptions(obj);
    $("<option value='0'>-请选择-</option>").appendTo(obj);
	
    for (var i = 0; i < aP.length; i++) {
        if (aP[i][0] == _value) {
            $("<option value='" + aP[i][0] + "' selected>" + aP[i][1] + "</option>").appendTo(obj);
        }
        else {
            $("<option value='" + aP[i][0] + "'>" + aP[i][1] + "</option>").appendTo(obj);
        }
    }
    $(obj).css({ "width": "90px" });
}

//初始城市
function initCity(obj, _prov_value,_value) {
    clearOptions(obj);
    $("<option value='0'>-请选择-</option>").appendTo(obj);
    if (_prov_value == "0") return;
    for (var i = 0; i < aC.length; i++) {
        if (aC[i][2] == _prov_value) {
            if (aC[i][0] == _value) {
                $("<option value='" + aC[i][0] + "' selected>" + aC[i][1] + "</option>").appendTo(obj);
            } else {
                $("<option value='" + aC[i][0] + "'>" + aC[i][1] + "</option>").appendTo(obj);
            }
        }
    }
    $(obj).css({ "width": "120px" });
}

//初始县/区
function initXian(obj, _city_value, _value) {
    clearOptions(obj);
    $("<option value='0'>-请选择-</option>").appendTo(obj);
    if (_city_value == "0") return;
    for (var i = 0; i < aX.length; i++) {
        if (aX[i][2] == _city_value) {
            if (aX[i][0] == _value) {
                $("<option value='" + aX[i][0] + "' selected>" + aX[i][1] + "</option>").appendTo(obj);
            } else {
                $("<option value='" + aX[i][0] + "'>" + aX[i][1] + "</option>").appendTo(obj);
            }
        }
    }
    $(obj).css({ "width": "120px" });
}

function onProvChange(obj, _area_city, _area_xian) {
    if (_area_city && $("#" + _area_city).length>0) {
        var __area_city = $("#" + _area_city);
        initCity(__area_city, obj.value);
    }
    if (_area_xian && $("#" + _area_xian).length > 0) {
        var __area_xian = $("#" + _area_xian);
        initXian(__area_xian, __area_city.val());
    }
}

function onCityChange(obj, _area_xian) {
    if (_area_xian && $("#" + _area_xian).length > 0) {
        initXian($("#" + _area_xian), obj.value);
    }
}


//初始省份(分站)
function onSiteProvChange(obj, _area_city) {
    if (_area_city && $("#" + _area_city).length > 0) {
        var __area_city = $("#" + _area_city);
        initSiteCity(__area_city, obj.value);
    }
}

function initSiteProv(obj, _value) {
    clearOptions(obj);
    $("<option value='0'>-请选择-</option>").appendTo(obj);
    for (var i = 0; i < arrSiteProv.length; i++) {
        if (arrSiteProv[i][0] == _value) {
            $("<option value='" + arrSiteProv[i][0] + "' site='" + arrSiteProv[i][2] + "'  selected>" + arrSiteProv[i][1] + "</option>").appendTo(obj);
        }
        else {
            $("<option value='" + arrSiteProv[i][0] + "' site='" + arrSiteProv[i][2] + "'>" + arrSiteProv[i][1] + "</option>").appendTo(obj);
        }
    }
    $(obj).css({ "width": "90px" });
}

function initSiteCity(obj, _prov_value, _value) {
    clearOptions(obj);
    $("<option value='0'>-请选择-</option>").appendTo(obj);
    if (_prov_value == "0") return;
    for (var i = 0; i < arrSiteCity.length; i++) {
        if (arrSiteCity[i][3] == _prov_value) {
            if (arrSiteCity[i][2] == _value) {
                $("<option value='" + arrSiteCity[i][0] + "' site='" + arrSiteCity[i][2] + "' selected>" + arrSiteCity[i][1] + "</option>").appendTo(obj);
            } else {
                $("<option value='" + arrSiteCity[i][0] + "' site='" + arrSiteCity[i][2] + "'>" + arrSiteCity[i][1] + "</option>").appendTo(obj);
            }
        }
    }
    $(obj).css({ "width": "120px" });
}

