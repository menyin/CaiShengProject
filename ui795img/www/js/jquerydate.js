function Calendar(objName)  
{		
this.style = {
borderColor   		: "#909eff", //边框颜色
headerBackColor  		: "#909EFF", //表头背景颜色
headerFontColor  		: "#ffffff", //表头字体颜色
bodyBarBackColor  		: "#f4f4f4", //日历标题背景色
bodyBarFontColor  		: "#000000", //日历标题字体色
bodyBackColor   		: "#ffffff", //日历背景色
bodyFontColor    : "#000000", //日历字体色 
bodyHolidayFontColor   : "#ff0000", //假日字体色
watermarkColor 		  : "#d4d4d4",  //背景水印色
moreDayColor     : "#cccccc" 
};
this.showMoreDay = false; //是否显示上月和下月的日期
this.Obj = objName;		
this.date = null;
this.mouseOffset = null;
this.dateInput = null;
this.timer = null;	
this.minDate = new Date('1970','1','1');
this.offsetTop = 100;
this.offsetLeft = 0;
//this.maxDate = new Date();
this.maxDate = new Date(Date.parse(new Date()) + (86400000 * 1000));//默认最大时间为当天日期加1000天
};
Calendar.prototype.toString = function()
{ 
var str = this.getStyle();
str += '<div Author="alin" class="calendar" style="display:none;" onselectstart="return false" oncontextmenu="return false" id="Calendar">\n';
str += '<div Author="alin" class="cdrWatermark" id="cdrWatermark"></div><div id="cdrBody" style="position:absolute;left:0px;top:0px;z-index:2;width:140px;">';
str += this.getHeader();
str += this.getBody(); 
str += '</div><div Author="alin" id="cdrMenu" style="position:absolute;left:0px;top:0px;z-index:3;display:none;"  onmouseover="' + this.Obj + '.showMenu(null);" onmouseout="' + this.Obj + '.hideMenu();"></div></div>';
return str;
};
Calendar.prototype.getStyle = function()
{
var str = '<style type="text/css">\n';
str += '.calendar{position:absolute;width:140px!important;width /**/:142px;height:184px!important;height /**/:174px;background-color:'+this.style.bodyBackColor+';border:1px solid ' + this.style.borderColor + ';left:0px;top:0px;z-index:9999;line-height:16px;}\n';
str += '.cdrHeader{background-color:'+ this.style.headerBackColor +';width:140px;height:22px;font-size:12px;color:'+this.style.headerFontColor+';}\n';
str += '.cdrWatermark{position:absolute;left:0px;top:55px;width:140px;font-family: Arial Black;font-size:50px;color:'+this.style.watermarkColor+';z-index:1;text-align:center;}\n';
str += '.cdrBodyBar{background-color:' + this.style.bodyBarBackColor + ';font-size:12px;color:' + this.style.bodyBarFontColor + ';width:140px;height:20px;}\n';
str += '.cdrBody{width:140px;height:122px!important; height /**/:110px;font-size:12px;cursor:pointer;color:' + this.style.bodyFontColor + ';}\n';
str += '.dayOver{height:16px;padding:0px;border:1px solid black;background-color:#f4f4f4;}\n';
str += '.dayOut{padding:1px;border:none;height:16px;}\n';
str += '.menuOver{background-color:'+this.style.headerBackColor+';color:'+this.style.headerFontColor+';font-size:12px;}\n';
str += '.headerOver{border:1px solid black;background-color:#f4f4f4;color:black;cursor:default;}\n';
str += '.cdrMenu{font-size:12px;border:1px solid #000000;background-color:#ffffff;cursor:default;width:100%}\n';
str += 'html>body #Calendar{width:142px;174px;}';
str += '</style>\n';	
return str;
};
Calendar.prototype.getHeader = function()
{
var str = '<table Author="alin" class="cdrHeader" cellSpacing="2" cellPadding="0"><tr Author="alin" align="center">\n';
str += '<td Author="alin" onmouseover="this.className=\'headerOver\'" onmouseout="this.className=\'\'" id="previousYear" title="上一年份" style="cursor:pointer;width:10px;" onclick="'+this.Obj+'.onChangeYear(false);"><<</td>\n';
str += '<td Author="alin" onmouseover="this.className=\'headerOver\'" onmouseout="this.className=\'\'" id="previousMonth" title="上一月份" style="cursor:pointer;width:10px;" onclick="'+this.Obj+'.onChangeMonth(false);"><</td>\n';
str += '<td Author="alin" onmouseover="this.className=\'headerOver\'" id="currentYear" style="width:50px;" onclick="' + this.Obj + '.showMenu(true);" onmouseout="' + this.Obj + '.hideMenu();this.className=\'\';">0</td>\n';
str += '<td Author="alin" onmouseover="this.className=\'headerOver\'" id="currentMonth" onclick="' + this.Obj + '.showMenu(false);" onmouseout="' + this.Obj + '.hideMenu();this.className=\'\';">0</td>\n';
str += '<td Author="alin" onmouseover="this.className=\'headerOver\'" onmouseout="this.className=\'\'" id="nextMonth" title="下一月份" style="cursor:pointer;width:10px;" onclick="'+this.Obj+'.onChangeMonth(true);">></td>\n';
str += '<td Author="alin" onmouseover="this.className=\'headerOver\'" onmouseout="this.className=\'\'" id="nextYear" title="下一年份" style="cursor:pointer;width:10px;" onclick="'+this.Obj+'.onChangeYear(true);">>></td></tr>\n';
str += '</table>\n';
return str;
};
Calendar.prototype.getBody = function()
{
var n = 0;
var str = this.getBodyBar();
str += '<table Author="alin" class="cdrBody" cellSpacing="2" cellPadding="0">\n'; 
for(i = 0; i < 6; i++)
{	  
str += '<tr Author="alin" align="center">';
for(j = 0; j < 7; j++)
{
str += '<td Author="alin" class="dayOut" id="cdrDay'+(n++)+'" width="13%"></td>\n';
}
str += '</tr>';
}
str += '</table>\n';
str += '<table Author="alin" class="cdrBodyBar" cellSpacing="2" cellPadding="0"><tr align="center" Author="alin"><td Author="alin" style="cursor:pointer;" onclick="'+this.Obj+'.getToday();">今天：'+new Date().toFormatString("yyyy年mm月dd日")+'</td></tr></table>\n';
return str;
};
Calendar.prototype.getBodyBar = function()
{
var str = '<table Author="alin_bar" id="cdrBodyBar" class="cdrBodyBar" style="cursor:move;" cellSpacing="2" cellPadding="0"><tr Author="alin_bar" align="center">\n';
var day = new Array('日','一','二','三','四','五','六');
for(i = 0; i < 7; i++)
{
str += '<td Author="alin_bar">' + day[i] + '</td>\n';   
}
str += '</tr></table>';
return str;  
}
Calendar.prototype.getYearMenu = function(year)
{
var str = '<table Author="alin" cellSpacing="0" class="cdrMenu" cellPadding="0">\n';
for(i = 0; i < 10; i++)
{	  
var _year = year + i;
var _date = new Date(_year,this.date.getMonth(),this.date.getDate());
str += '<tr Author="alin" align="center"><td Author="alin" width="13%" height="16" ';
if(this.date.getFullYear() != _year)
{
str += 'onmouseover="this.className=\'menuOver\'" onmouseout="this.className=\'\'" ';
}
else
{
str += 'class="menuOver"';
}
str += 'onclick="' + this.Obj + '.bindDate(\'' + _date.toFormatString("-") + '\')">' + _year + '年</td>\n';		
str += '</tr>';
}
str += '<tr Author="alin" align="center"><td Author="alin"><table Author="alin" style="font-size:12px;width:100%;" cellSpacing="0" cellPadding="0">\n';
str += '<tr Author="alin" align="center"><td Author="alin" onmouseover="this.className=\'menuOver\'" onmouseout="this.className=\'\'" onclick="'+this.Obj+'.getYearMenu('+ (year - 10) + ')"><<</td>\n';
str += '<td Author="alin" onmouseover="this.className=\'menuOver\'" onmouseout="this.className=\'\'" onclick="'+this.Obj+'.getYearMenu('+ (year + 10) +')">>></td><tr>\n';
str += '</table></td></tr>\n';
str += '</table>';
var _menu = getObjById("cdrMenu");
_menu.innerHTML = str;
};
Calendar.prototype.getMonthMenu = function()
{
var str = '<table Author="alin" cellSpacing="0" class="cdrMenu" cellPadding="0">\n';
for(i = 1; i <= 12; i++)
{ 
var _date = new Date(this.date.getFullYear(),i-1,this.date.getDate());		
str += '</tr><tr Author="alin" align="center"><td Author="alin" height="16" ';
if(this.date.getMonth() + 1 != i)
{
str += 'onmouseover="this.className=\'menuOver\'" onmouseout="this.className=\'\'" ';
}
else
{
str += 'class="menuOver"';
}
str += 'onclick="' + this.Obj + '.bindDate(\'' + _date.toFormatString("-") + '\')">'+i+'月</td></tr>\n';
}
str += '</table>';
var _menu = getObjById("cdrMenu");
_menu.innerHTML = str; 
};
Calendar.prototype.show = function()
{
if (arguments.length >  3  || arguments.length == 0)
{
alert("对不起！传入参数不对！" );
return;
} 
var _date = null;
var _evObj = null;
var _initValue = null  
for(i = 0; i < arguments.length; i++)
{
if(typeof(arguments[i]) == "object" && arguments[i].type == "text")
{_date = arguments[i];}
else if(typeof(arguments[i]) == "object")
{_evObj = arguments[i];}
else if(typeof(arguments[i]) == "string")
{_initValue = arguments[i];}  
}
_evObj = _evObj || _date;
inputObj = _date;
targetObj = _evObj
if(!_date){alert("传入参数错误!"); return;}
this.dateInput = _date;
_date = _date.value;
if(_date == "" && _initValue) _date = _initValue; 
this.bindDate(_date);    
var _target = this.getPosition(_evObj); 
var _obj = getObjById("Calendar");
_obj.style.display = ""; 
_obj.style.left = _target.x + 'px';
//if((document.body.clientHeight - (_target.y + _evObj.clientHeight)) >= _obj.clientHeight)
//{    
_obj.style.top = (_target.y + _evObj.clientHeight) + 'px';
//}
//else
//{	  
//_obj.style.top = (_target.y - _obj.clientHeight) + 'px';
//}
};
Calendar.prototype.hide = function()
{
var obj = getObjById("Calendar");
obj.style.display = "none";
if(this.calendarOnHide)
{
  this.calendarOnHide();
}
};
Calendar.prototype.bindDate = function(date)
{
    var _monthDays = new Array(31,30,31,30,31,30,31,31,30,31,30,31);	
    var _arr = date.split('-');		
    var _date = new Date(_arr[0],_arr[1]-1,_arr[2]);	
    if(isNaN(_date)) _date = new Date();	
    this.date = _date;
    this.bindHeader();	
    var _year = _date.getFullYear();
    var _month = _date.getMonth();
    var _day = 1;	
    var _startDay = new Date(_year,_month,1).getDay();
    var _previYear = _month == 0 ? _year - 1 : _year;
    var _previMonth = _month == 0 ? 11 : _month - 1;
    var _previDay = _monthDays[_previMonth];
    if (_previMonth == 1) _previDay =((_previYear%4==0)&&(_previYear%100!=0)||(_previYear%400==0))?29:28;	
    _previDay -= _startDay - 1;
    var _nextDay = 1;
    _monthDays[1] = ((_year%4==0)&&(_year%100!=0)||(_year%400==0))?29:28;
    for(i = 0; i < 40; i++)
    {	
        var _dayElement = getObjById("cdrDay" + i);
        //_dayElement.onmouseover = Function(this.Obj + ".onMouseOver(this)");
        //_dayElement.onmouseout = Function(this.Obj + ".onMouseOut(this)");
        //_dayElement.onclick = Function(this.Obj + ".onClick(this)");
        this.onMouseOut(_dayElement);	 		
        _dayElement.style.color = "";
        if(i < _startDay)
        {
            //获取上一个月的日期
            if(this.showMoreDay)
            {
                var _previDate = new Date(_year,_month - 1,_previDay);
                _dayElement.innerHTML = _previDay;
                _dayElement.title = _previDate.toFormatString("yyyy年mm月dd日");
                _dayElement.value = _previDate.toFormatString("-");	
                _dayElement.style.color = this.style.moreDayColor;	
                _previDay++;
            }
            else
            {
                _dayElement.innerHTML = "";
                _dayElement.title = "";
            }
        }
        else if(_day > _monthDays[_month])
        {
            //获取下个月的日期
            if(this.showMoreDay)
            {
                var _nextDate = new Date(_year,_month + 1,_nextDay);
                _dayElement.innerHTML = _nextDay;
                _dayElement.title = _nextDate.toFormatString("yyyy年mm月dd日");
                _dayElement.value = _nextDate.toFormatString("-");
                _dayElement.style.color = this.style.moreDayColor;	
                _nextDay++;			 
            }
            else
            {
                _dayElement.innerHTML = "";
                _dayElement.title = "";
            }
        }
        else if(i >= new Date(_year,_month,1).getDay() && _day <= _monthDays[_month])
        {
            //获取本月日期
            _dayElement.innerHTML = _day;
            if(_day == _date.getDate())
            {
                this.onMouseOver(_dayElement);
                _dayElement.onmouseover = Function(""); 
                _dayElement.onmouseout = Function(""); 					  			  
            }
            if(this.isHoliday(_year,_month,_day))
            {
                _dayElement.style.color = this.style.bodyHolidayFontColor;			  
            }
            var _curDate = new Date(_year, _month, _day);
            _dayElement.title =  _curDate.toFormatString("yyyy年mm月dd日");
            _dayElement.value = _curDate.toFormatString("-");
            _day++;
        }
        else
        {
            _dayElement.innerHTML = "";
            _dayElement.title = "";
        }
        //alert(_dayElement.value);
        if(_dayElement.value)
        {
            var tempDate = _dayElement.value.split('-');
            tempDate = new Date(tempDate[0],parseInt(tempDate[1],10)-1,tempDate[2]); 
            if(tempDate >= this.minDate && tempDate <= this.maxDate)
            {
                _dayElement.onmouseover = Function(this.Obj + ".onMouseOver(this)");
                _dayElement.onmouseout = Function(this.Obj + ".onMouseOut(this)");
                _dayElement.onclick = Function(this.Obj + ".onClick(this)");
                this.onMouseOut(_dayElement);	 
            }
            else
            {
                _dayElement.style.color = '#ccc';
            }
        }    
        
    }
    var _menu = getObjById("cdrMenu");
    _menu.style.display = "none";	
};
Calendar.prototype.bindHeader = function()
{
var _curYear = getObjById("currentYear");
var _curMonth = getObjById("currentMonth");
var _watermark = getObjById("cdrWatermark");
_curYear.innerHTML = this.date.toFormatString("yyyy年");
_curMonth.innerHTML =  this.date.toFormatString("mm月");
_watermark.innerHTML = this.date.getFullYear();   
};	
Calendar.prototype.getToday = function()
{
var _date = new Date();
this.bindDate(_date.toFormatString("-"));
};

//获取昨天
Calendar.prototype.getYesterday = function()
{
  var _date = new Date();
  var year = _date.getFullYear();
  var day = _date.getDate();
  var month = _date.getMonth()+1;
  var _monthDays = new Array(31,30,31,30,31,30,31,31,30,31,30,31);
  if(day>1)
  {
    day = day-1;
  }
  else
  {
    if(month > 1)
    {
    month = month-1;
    if (month == 2)
    {
      day =((year%4==0)&&(year%100!=0)||(year%400==0))?29:28;
    } 
    else
    {
      day = _monthDays[month-1];
    }
    
    }
    else
    {
    year = year-1;
    month = 12;
    day = _monthDays[12];
    }
    
  }
  return year + '-' + month + '-' + day
  //this.bindDate(year + '-' + month + '-' + day);
};	
Calendar.prototype.isHoliday = function(year,month,date)
{
var _date = new Date(year,month,date);
return (_date.getDay() == 6 || _date.getDay() == 0);
};
Calendar.prototype.onMouseOver = function(obj)
{
obj.className = "dayOver";
};
Calendar.prototype.onMouseOut = function(obj)
{
obj.className = "dayOut";
};	
Calendar.prototype.onClick = function(obj)
{  
//    if(obj.innerHTML != "")
//    {
//        this.dateInput.value = obj.value;
//    }
//    this.hide();
    if(obj.innerHTML != "" && this.isValid(obj.value))
    {
        this.dateInput.value = obj.value;
        this.hide();
    }
    
};
Calendar.prototype.onChangeYear = function(isnext)
{
var _year = this.date.getFullYear();
var _month = this.date.getMonth() + 1;
var _date = this.date.getDate();
if(_year > 999 && _year <10000)
{
if(isnext){_year++;}else{ _year --;}
}
else
{
alert("年份超出范围（1000-9999）!");
}
this.bindDate(_year + '-' + _month + '-' + _date);
};
Calendar.prototype.onChangeMonth = function(isnext)
{
var _year = this.date.getFullYear();
var _month = this.date.getMonth() + 1;
//var _date = this.date.getDate();
var _date = 1;
if(isnext){ _month ++;} else {_month--;}
if(_year > 999 && _year <10000)
{ 
if(_month < 1) {_month = 12; _year--;}
if(_month > 12) {_month = 1; _year++;}
}
else
{
alert("年份超出范围（1000-9999）!");
}  
this.bindDate(_year + '-' + _month + '-' + _date);
};
Calendar.prototype.showMenu = function(isyear)
{
var _menu = getObjById("cdrMenu");
if(isyear != null)
{  
var _obj = (isyear)? getObjById("currentYear") : getObjById("currentMonth");
if(isyear)
{
this.getYearMenu(this.date.getFullYear() - 5);	 
}
else
{
this.getMonthMenu();	 
}
_menu.style.top = (_obj.offsetTop + _obj.offsetHeight) + 'px';
_menu.style.left = _obj.offsetLeft + 'px';	
_menu.style.width = _obj.offsetWidth + 'px';
}
if (this.timer != null) clearTimeout(this.timer);
_menu.style.display="";
}

//判断当前日期是否有效
Calendar.prototype.isValid = function(strDate)
{
    var tempDate = strDate.split('-');
    tempDate = new Date(tempDate[0],parseInt(tempDate[1],10)-1,tempDate[2]);
    if(Date.parse(tempDate) < this.minDate || Date.parse(tempDate) > this.maxDate)
    {
        return false;
    }
    else
    {
        return true;
    }
}
Calendar.prototype.getPosition = function(e)
{
var left = this.offsetLeft;
var top  = this.offsetTop;
while (e.offsetParent){
left += e.offsetLeft + (e.currentStyle?(parseInt(e.currentStyle.borderLeftWidth,10)).NaN0():0);
top  += e.offsetTop  + (e.currentStyle?(parseInt(e.currentStyle.borderTopWidth,10)).NaN0():0);
e   = e.offsetParent;
}
left += e.offsetLeft + (e.currentStyle?(parseInt(e.currentStyle.borderLeftWidth,10)).NaN0():0)-28;
top  += e.offsetTop  + (e.currentStyle?(parseInt(e.currentStyle.borderTopWidth,10)).NaN0():0)-22;
return {x:left, y:top};
}

Calendar.prototype.hideMenu = function()
{
var _obj = getObjById("cdrMenu");
this.timer = window.setTimeout(function(){_obj.style.display='none';},500);	
}
Number.prototype.NaN0 = function()
{
return isNaN(this) ? 0 : this;
}
Date.prototype.toFormatString = function(fs)
{
if(fs.length == 1)
{ 
return this.getFullYear() + fs + (this.getMonth() + 1) + fs + this.getDate(); 
}
fs = fs.replace("yyyy",this.getFullYear());
fs = fs.replace("mm",(this.getMonth() + 1));
fs = fs.replace("dd",this.getDate());
return fs;
}
/************公用方法及变量**************/
var inputObj = null; 
var targetObj = null;	
var dragObj = null; 
var mouseOffset = null; 
function getObjById(obj)
{
if(document.getElementById)
{
return document.getElementById(obj);
}
else
{
alert("浏览器不支持!");
}
}

function mouseCoords(ev)
{
if(ev.pageX || ev.pageY){
return {x:ev.pageX, y:ev.pageY};
}
return {
x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
y:ev.clientY + document.body.scrollTop  - document.body.clientTop
};
}

function getMouseOffset(target, ev)
{
ev = ev || window.event;
var docPos  = this.getPosition(target);
var mousePos  = mouseCoords(ev);
return {x:mousePos.x - docPos.x, y:mousePos.y - docPos.y};
}
function closeCalendar(evt){
evt = evt || window.event; 
var _target= evt.target || evt.srcElement; 
if(!_target.getAttribute("Author") &&  _target != inputObj && _target != targetObj)
{
getObjById("Calendar").style.display = "none"; 	  
}  
}
function dragStart(evt){
evt = evt || window.event;	
var _target= evt.target || evt.srcElement;
if(_target.getAttribute("Author") == "alin_bar") 
{	 
dragObj = getObjById("Calendar");	 
mouseOffset = getMouseOffset(dragObj, evt);	 
} 
}
function drag(evt)
{
evt =  evt || window.event;	
if(dragObj)
{		  
var mousePos = mouseCoords(evt); 
dragObj.style.left = (mousePos.x - mouseOffset.x) + 'px';
dragObj.style.top  = (mousePos.y - mouseOffset.y) + 'px';	  
}
}
//拖动结束
function dragEnd(evt)
{
dragObj = null;  
}

/***********End 公用方法*********/
document.onclick = closeCalendar;
document.onmousedown = dragStart;
document.onmousemove = drag;
document.onmouseup = dragEnd;
/*********结束**********/

//验证是否为日期类型
function IsValidDate(sDate)
{
    var aDate = sDate.replace(/-/g,"/");
    var arrDate = aDate.split("/"); 
    var dDate = new Date(Date.parse(aDate));
    if(!isNaN(dDate))
    {
        if(dDate.getFullYear()==parseInt(arrDate[0],10) && (dDate.getMonth()+1)==parseInt(arrDate[1],10) && dDate.getDate()==parseInt(arrDate[2],10))
        {
            return true;
        }
    }
    return false;
}

//日期相减  获取天数sDate1 - sDate2
function DateDiff(sDate1, sDate2)
{
  var aDate, oDate1, oDate2, iDays 
  aDate = sDate1.split("-") 
  //parseInt()函数如果参数有0，会默认当成八进制处理，因此加参数10指定是十进制数据
  oDate1 = new Date(aDate[0] , (parseInt(aDate[1],10)-1) , aDate[2]) //转换为12-18-2002格式
  aDate = sDate2.split("-") 
  oDate2 = new Date(aDate[0] , (parseInt(aDate[1],10)-1) , aDate[2]) 
  //iDays = parseInt(Math.abs(oDate1 - oDate2) / 1000 / 60 / 60 /24) //把相差的毫秒数转换为天数
  iDays = parseInt((oDate1 - oDate2) / 1000 / 60 / 60 /24, 10) //把相差的毫秒数转换为天数
  return iDays 
} 

//获取加上一定时间后的日期
//参数：strInterval s为秒 n为分 h为小时 d为天 w为周 m为月 y为年
//参数： number 所加的数
//参数： dtDate 要计算的日期
function DateAdd(strInterval, number, dtDate) 
{ 
  var arrayDate = dtDate.split('-');
  var dtTmp = new Date(arrayDate[0],parseInt(arrayDate[1],10)-1,arrayDate[2]); 
  var dtReturn;
  if (isNaN(dtTmp)) dtTmp = new Date(); 
  switch (strInterval) { 
  case "s":
     //dtTmp  = new Date(Date.parse(dtTmp) + (1000 * parseInt(number,10))); 
     dtReturn  = new Date(Date.parse(dtTmp) + (1000 * parseInt(number,10))); 
     break;  
  case "n":
     dtReturn  = new Date(Date.parse(dtTmp) + (60000 * parseInt(number,10))); 
     break;  
  case "h":
     dtReturn  = new Date(Date.parse(dtTmp) + (3600000 * parseInt(number,10)));
     break;
  case "d":
     dtReturn  = new Date(Date.parse(dtTmp) + (86400000 * parseInt(number,10)));
     break;
  case "w":
     dtReturn  = new Date(Date.parse(dtTmp) + ((86400000 * 7) * parseInt(number,10))); 
     break;
  case "m":
     dtReturn  = new Date(dtTmp.getFullYear(), (dtTmp.getMonth())+parseInt(number,10), dtTmp.getDate(), dtTmp.getHours(), dtTmp.getMinutes(), dtTmp.getSeconds());
     break; 
  case "y":
     //alert(dtTmp.getFullYear());
     dtReturn  = new Date(dtTmp.getFullYear()+parseInt(number,10), dtTmp.getMonth(), dtTmp.getDate(), dtTmp.getHours(), dtTmp.getMinutes(), dtTmp.getSeconds());
     //alert(dtTmp);
     
//     case "y": dtReturn =  new Date(dtTmp.setFullYear(dtTmp.getFullYear()+number));
//		case "m": dtReturn =  new Date(dtTmp.setMonth(dtTmp.getMonth()+number));
//		case "d": dtReturn =  new Date(dtTmp.setDate(dtTmp.getDate()+number));
//		case "w": dtReturn =  new Date(dtTmp.setDate(dtTmp.getDate()+7*number));
//		case "h": dtReturn =  new Date(dtTmp.setHours(dtTmp.getHours()+number));
//		case "n": dtReturn =  new Date(dtTmp.setMinutes(dtTmp.getMinutes()+number));
//		case "s": dtReturn =  new Date(dtTmp.setSeconds(dtTmp.getSeconds()+number));
//		case "l": dtReturn =  new Date(dtTmp.setMilliseconds(dtTmp.getMilliseconds()+number));

     break;
    }
var mStr=new String(dtReturn.getMonth()+1);
  var dStr=new String(dtReturn.getDate());
  if (mStr.length==1){
      mStr="0"+mStr;
  }
  if (dStr.length==1){
      dStr="0"+dStr;
  }
  return dtReturn.getFullYear()+"-"+mStr+"-"+dStr;
}   