$(function () {
    if (typeof (Sys) == 'undefined') return;
    var html = ' <div id="loadings" style="position: absolute; width: 60px; height: 76px; display:none"><img src="/images/loading.gif" width="60" height="76" title="页面读取中"/></div>';
    $("BODY").append(html);
    var prm = Sys.WebForms.PageRequestManager.getInstance();
    prm.add_beginRequest(function () {
        $("#loadings").show().setCenter();
    });
    prm.add_endRequest(function () {
        $("#loadings").hide();
    });
});

var my_AjaxLoading = {};
var my_AjaxLoading_IsOpen = false;
my_AjaxLoading.add = function (o) {
    var _node = typeof o.node == "string" ? $("#" + o.node) : o.node;
    var html = ' <div id="loadings" style="position: absolute; width: 60px; height: 76px;left:' + (o.left ? o.left : '50%') + ';top:' + (o.top ? o.top : '50%') + ';margin:-38px 0 0 -30px; display:' + (o.show ? "block" : "none") + '"><img src="/images/loading.gif" /></div>';
    _node.append(html);
    var loadnode = _node.find("#loadings");
    window.my_AjaxLoading_Note = loadnode;
};
my_AjaxLoading.show = function () {
    if (!my_AjaxLoading_IsOpen) {
        var note = window.my_AjaxLoading_Note || $("#loadings");
        if (note && note.length > 0)
            note.show();
        my_AjaxLoading_IsOpen = true;
        setTimeout(function () {
            my_AjaxLoading.hide();
        }, 8000);
    }
};
my_AjaxLoading.hide = function () {
    if (my_AjaxLoading_IsOpen) {
        var note = window.my_AjaxLoading_Note || $("#loadings");
        if (note && note.length > 0)
            note.hide();
        my_AjaxLoading_IsOpen = false;
    }
};