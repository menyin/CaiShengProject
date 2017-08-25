//----------------- DataGrid ----------------------
var DataGrid = {};
DataGrid.SelectedBgColor = "#D8F79D";
DataGrid.MouseOverBgColor = "#EDFBD2";

DataGrid.onAllCheckClick = function (ele) {
    ele = $("#" + ele);
    var strID = ele.attr("id");
    if ($("#" + strID + "_AllCheck")[0].checked) {
        DataGrid.selectAll(ele);
    } else {
        DataGrid.unselectAll(ele);
    }
}
DataGrid.selectAll = function (ele) {
    ele = $(ele);
    var strID = ele.attr("id");
    $("input[name='" + strID + "_RowCheck']").each(function () {
        if (!this.disabled) {
            this.checked = true;
        }
    });
}
DataGrid.unselectAll = function (ele) {
    ele = $(ele);
    var strID = ele.attr("id");
    $("input[name='" + strID + "_RowCheck']").each(function () {
        if (!this.disabled) {
            this.checked = false;
        }
    });
}
DataGrid.getSelectedData = function (ele) {
    ele = $("#" + ele);
    var strID = ele.attr("id");
    var values = [];
    $("input[type='checkbox'][name='" + strID + "_RowCheck']", ele).each(function () {
        if (!this.disabled && this.checked) {
            values.push(this.value)
        }
    });
    return values;
}
//----------------- DataGrid End----------------------
