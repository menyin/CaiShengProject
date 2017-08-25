var arrGenOptionHome = new Array();

//初始通用类型的select选项
function initGenOption(obj, type, _value, getarr) {
    clearOptions(obj);
    var arr = new Object();
    arr = arrGenOption;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i][2] == type) {
            if (_value == arr[i][0]) {
                $("<option value='" + arr[i][0] + "' selected=\"selected\" >" + arr[i][1] + "</option>").appendTo(obj);
            } else {
                $("<option value='" + arr[i][0] + "'>" + arr[i][1] + "</option>").appendTo(obj);
            }
        }
    }
}

//初始通用类型的多选
function initGenCheckboxOption(obj, type, _name, _value, getarr) {
    obj.html(""); //清空
    var v = _value.split(",");
    var str = "";
    var arr = new Object();
    arr = arrGenOption;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i][2] == type) {
            if ( IsCurrCheckbox(v,arr[i][0]) ) {
                str += "<input name=\"" + _name + "\" type=\"checkbox\" value='" + arr[i][0] + "' checked=\"checked\" />" + arr[i][1] + " ";
            } else {
                str += "<input name=\"" + _name + "\" type=\"checkbox\" value='" + arr[i][0] + "' />" + arr[i][1] + " ";
            }
        }
    }
    obj.html(str);
}

//初始通用类型的单选
function initGenRaioOption(obj, type, _name, _value, getarr) {
    obj.html(""); //清空
    var str = "";
    var arr = new Object();
    arr = arrGenOption;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i][2] == type) {
            if (arr[i][0] == _value) {
                str += "<input name=\"" + _name + "\" type=\"radio\" value='" + arr[i][0] + "' checked=\"checked\" />" + arr[i][1] + " ";
            } else {
                str += "<input name=\"" + _name + "\" type=\"radio\" value='" + arr[i][0] + "' />" + arr[i][1] + " ";
            }
        }
    }
    obj.html(str);
}

function IsCurrCheckbox(arr, val) {
    var curr = false;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == val) {
            curr = true;
            break;
        }
    }
    return curr;
}