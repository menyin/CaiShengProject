//统一处理<sapn class="err"></span>错误提示样式的函数
function dealSpanErrCss(){
	var oSpans = document.getElementsByTagName("span");
	for(var i = 0; i < oSpans.length; i++){
		if(oSpans[i].attributes.getNamedItem("class")){
			if(oSpans[i].attributes.getNamedItem("class").nodeValue == "err"){
			    var idName = oSpans[i].getAttribute("id");
			    if(idName && oSpans[i].firstChild){
				    var tipElem = document.getElementById(idName);
				    if(oSpans[i].firstChild.nodeValue == ""){
					    tipElem.style.display = "none";
				    }else{
					    tipElem.style.display = "inline-block";
				    }
			    }
		    }
		}else if(oSpans[i].getAttribute("class") == "err"){
			var idName = oSpans[i].getAttribute("id");
			if(idName && oSpans[i].firstChild){
				var tipElem = document.getElementById(idName);
				if(oSpans[i].firstChild.nodeValue == ""){
					tipElem.style.display = "none";
				}else{
					tipElem.style.display = "inline-block";
				}
			}
		}
	} 
}

window.onload = function(){
	dealSpanErrCss();
};

//获取字符长度
function strLen(str){
	var ii=0;
	var strLen = str.length;
	for (var i=0;i<strLen;i++){
		if (str.charCodeAt(i)>255){ii+=2;} 
		else{ii++;}
	}
	return ii;
}



//判断密码强度
var PasswordStrength ={
	Level : [12,11,10],
	LevelValue : [30,20,0],//强度值
	Factor : [1,2,5],//字符加数,分别为字母，数字，其它
	KindFactor : [0,0,10,20],//密码含几种组成的加数 
	Regex : [/[a-zA-Z]/g,/\d/g,/[^a-zA-Z\d]/g] //字符正则数字正则其它正则
}

PasswordStrength.StrengthValue = function(pwd){
	var strengthValue = 0;
	var ComposedKind = 0;
	for(var i = 0 ; i < this.Regex.length;i++)
	{
		var chars = pwd.match(this.Regex[i]);
		if(chars != null)
		{
			strengthValue += chars.length * this.Factor[i];
			ComposedKind ++;
		}
	}
	strengthValue += this.KindFactor[ComposedKind];
	return strengthValue;
} 

PasswordStrength.StrengthLevel = function(pwd){
	var sChar = pwd.charAt(0);
	var sChars = '';
	for(var ii=0;ii<pwd.length;ii++){
		sChars += sChar; 	
	}
	if(pwd == sChars){ return 10;}
	var value = this.StrengthValue(pwd);
	for(var i = 0 ; i < this.LevelValue.length ; i ++)
	{
		if(value >= this.LevelValue[i] )
			return this.Level[i];
	}
}

function checkPwdStrengthLevel(formName, elementName, tipName){
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(tipName);	
	if(form && elem && tip){
		if(elem.value != ""){
			tip.style.display = "";
			var level = PasswordStrength.StrengthLevel(elem.value);
			if(level == 12){
				tip.innerHTML = "<font color=red>安全程度：强</font>";
			}else if(level == 11){
				tip.innerHTML = "<font color=red>安全程度：中</font>";
			}else{
				tip.innerHTML = "<font color=red>安全程度：弱</font>";
			}
		}
	}
}



function isSimplePwd(pwd){
	var b = false;
	var sChar = pwd.charAt(0);
	var sChars = '';
	for(var ii=0;ii<pwd.length;ii++){
		sChars += sChar; 	
	}
	if(pwd == sChars){ return true;}
	var aPwd = ['123456','12345678','123123','1234567','123321','123456789','1234567890','0123456789','0987654321','987654321','123123123','112233','110110','0123456','123465','1234560','121212','111222','321321','654321'];
	for(var i=0;i<aPwd.length;i++){
		if(aPwd[i]==pwd){
			b = true;
			break;
		}
	}
	return b;
}

function checkPwd(formName, elementName, errTipName){
    var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length < 1){
		    tip.innerHTML = "请输入密码";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;	
}

// 不带长度校验的安全码输入校验
function checkPingma(formName, elementName, errTipName){
    var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length < 1){
		    tip.innerHTML = "请输入安全码";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;	
}

// 带有长度校验（6～16位）的安全码输入校验
function checkPingma2(formName, elementName, errTipName){
    var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length < 6 || elem.value.length > 16){
		    tip.innerHTML = "请输入长度为6~16位安全码";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;	
}

function checkCpingma(formName, elementName1, elementName2, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem1 = document.getElementById(elementName1);
	var elem2 = document.getElementById(elementName2);
	var tip = document.getElementById(errTipName);
	if(form && elem1 && elem2 && tip){
        if(elem1.value != elem2.value){
		    hasErr = true;
		    tip.innerHTML = "两次安全码输入不一致";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkRandomCode(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
    if(form && elem && tip){
        var usercheckcode = elem.value;
		if(usercheckcode == null || usercheckcode.length == 0){
		    tip.innerHTML = "请输入图片验证码";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
		}
    }
    return hasErr;
}


function checkFirstname(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length > 0 && (!/^[^\|\+\)\(\*\\\^\$\!\=\}\{\]\[\:\?\/&%#@;~><'"]+$/.test(elem.value) || strLen(elem.value) > 26)){
		    tip.innerHTML = "请输入正确的姓名";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;	
}

function checkLastname(formName, elementName, errTipName){
    var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length > 0 && (!/^[^\|\+\)\(\*\\\^\$\!\=\}\{\]\[\:\?\/&%#@;~><'"]+$/.test(elem.value) || strLen(elem.value) > 20)){
		    tip.innerHTML = "请输入正确的昵称";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkContactnumber(formName, elementName, errTipName){
    var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length > 0 && (elem.value.length < 5 || elem.value.length > 20 || !/^\d+[\-\d]*\d+$/.test(elem.value))){
		    tip.innerHTML = "请输入正确的联系电话";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkContactnumber2(formName, elementName, errTipName){
    var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	    if(elem.value.length < 5 || elem.value.length > 20 || !/^\d+[\-\d]*\d+$/.test(elem.value)){
		    tip.innerHTML = "请输入正确的联系电话";
		    tip.style.display = "inline-block";
		    hasErr = true;
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}


function checkOldmail(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
        if(!/^(-|\.|\w)+\@((-|\w)+\.)+[A-Za-z]{2,}$/.test(elem.value) || elem.value.length < 8 || elem.value.length > 64){
		    hasErr = true;
		    tip.innerHTML = "请输入正确的旧保密邮箱";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkIdnum(formName, elementName1, elementName2, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem1 = document.getElementById(elementName1);
	var elem2 = document.getElementById(elementName2);
	var tip = document.getElementById(errTipName);
    if(form && elem1 && elem2){
        if(elem1.value == "0"){
            if(elem2 && !(elem2.value.length == 15 && /^\d{15}$/.test(elem2.value) || elem2.value.length == 18 && /^\d{17}[\dXx]{1}$/.test(elem2.value))){
                hasErr = true;
            }
        }else if(elem1.value == "1" || elem1.value == "2"){
            if(elem2 && (elem2.value.length < 1 || elem2.value.length > 30)){
                hasErr = true;
            }
        }else if(elem1.value == "3"){
            if(elem2 && !(elem2.value.length >= 6 && elem2.value.length <= 18 && /^\S+[\s\S]*\S+$/.test(elem2.value))){
                hasErr = true;
            }
        }
        if(hasErr){
            tip.innerHTML = "请输入正确的证件号码";
		    tip.style.display = "inline-block";
        }else{
            tip.style.display = "none";
        }
    }
    return hasErr;
}

function checkMyQuestion(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
        if(strLen(elem.value) < 6 || strLen(elem.value) > 30){
		    hasErr = true;
		    tip.innerHTML = "请输入正确的密码保护问题";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkAnswer(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
        if(strLen(elem.value) < 4 || strLen(elem.value) > 30){
		    hasErr = true;
		    tip.innerHTML = "请输入正确的问题答案";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkAnswerWithoutLength(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
        if(strLen(elem.value) == 0 || strLen(elem.value) > 30){
		    hasErr = true;
		    tip.innerHTML = "请输入正确的问题答案";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkOldanswer(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
        if(strLen(elem.value) < 4 || strLen(elem.value) > 30){
		    hasErr = true;
		    tip.innerHTML = "请输入正确的旧问题答案";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkOldanswerWithoutLength(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
        if(strLen(elem.value) == 0 || strLen(elem.value) > 30){
		    hasErr = true;
		    tip.innerHTML = "请输入正确的旧问题答案";
		    tip.style.display = "inline-block";
	    }else{
		    tip.style.display = "none";
	    }
	}
	return hasErr;
}

function checkYear(formName, year, month, day, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var year = document.getElementById(year);
	var month = document.getElementById(month);
	var day = document.getElementById(day);
	var tip = document.getElementById(errTipName);
	if(form && year && month && day && tip){
        if(/^(1|2)\d{3}$/.test(year.value)){
            if(month && day){
                var m = month.value;
                var d = day.value;
                var y = parseInt(year.value);
                var tNow = new Date();
                if(y < 1902 || new Date(y,m-1,d).getTime() >= tNow.getTime()-24*60*60*1000){
                    hasErr = true;
                }
            }else{
                hasErr = true;
            }
        }else{
            hasErr = true;
        }
		if(hasErr){
		    tip.innerHTML = "请输入正确的出生日期";
		    tip.style.display = "inline-block";
		}else{
		    tip.style.display = "none";
	    }
    }
	return hasErr;
}


function checkUsername(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
      if(!/^[a-zA-Z\d\.\@\-_]+$/.test(elem.value)){
        hasErr = true;
        tip.innerHTML = "请输入正确的通行证用户名";
		tip.style.display = "inline-block";
      }else{
        tip.style.display = "none";
      }
	}
    return hasErr;
}

function checkPassword(formName, elementName1, elementName2, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName1);
	var elemName = document.getElementById(elementName2);
	var tip = document.getElementById(errTipName);
    if(form && elem && tip){
      if(!(elem.value.length >= 6 && elem.value.length <= 16 && /^[\x00-\xff]+$/.test(elem.value) && !isSimplePwd(elem.value))){
		hasErr = true;
		tip.innerHTML = "请输入正确的新密码";
		tip.style.display = "inline-block";
	  }else{
	    if(elemName && elemName.value.indexOf(elem.value) != -1){
		    hasErr = true;
		    tip.innerHTML = "新密码和用户名过于相似";
		    tip.style.display = "inline-block";
	    }else{
	        tip.style.display = "none";
	    }
	  }
    }
	return hasErr;
}

function checkConfirmPassword(formName, elementName1, elementName2, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem1 = document.getElementById(elementName1);
	var elem2 = document.getElementById(elementName2);
	var tip = document.getElementById(errTipName);
	if(form && elem1 && elem2 && tip){
      if(elem1.value != elem2.value){
		hasErr = true;
		tip.innerHTML = "两次新密码输入不一致";
		tip.style.display = "inline-block";
	  }else{
		tip.style.display = "none";
	  }
	}
	return hasErr;
}

function checkSsn(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
      if(!/^[a-zA-Z\d\.\@\-_]+$/.test(elem.value)){
        hasErr = true;
        tip.innerHTML = "请输入正确的通行证帐号";
		tip.style.display = "inline-block";
      }else{
        tip.style.display = "none";
      }
	}
    return hasErr;
}

function checkMobcheckcode(formName, elementName, errTipName){
	var hasErr = false;
	var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
	  if(!/^[\d]{6}$/.test(elem.value)){
		hasErr  = true;
		tip.innerHTML = "请输入正确的短信验证码";
		tip.style.display = "inline-block";
	  }else{
		tip.style.display = "none";
	  }
	}
	return hasErr;
}


function checkFirstname2(formName, elementName, errTipName){
	var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip){
      if(!/^[\u4e00-\u9fa5]{2,5}$/.test(elem.value)){
		hasErr = true;
		tip.innerHTML = "请输入2~5位汉字";
		tip.style.display = "inline-block";
	  }else{
		tip.style.display = "none";
	  }
	}
	return hasErr;
}


/*
 * 通用验证选择框 （Author by 郭剑平）
 */
function checkSelect(formName, elementName, errTipName){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	var Required = $('#'+elementName).attr("Required");
	var Message = $('#'+elementName).attr("Message");
	if(form && elem && tip){
		if (Required=="required"){
			if(elem.value==0){
				hasErr = true;
				tip.innerHTML = Message;
				tip.style.display = "inline-block";
			}else{
				tip.style.display = "none";
			}
		}else{
			tip.style.display = "none";
		}

	}
	return hasErr;
}
/*
 * 通用验证Input （Author by 郭剑平）
 */
function checkInput(formName, elementName, errTipName){
	var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	var Required = $('#'+elementName).attr("Required");
	var RegStr = $('#'+elementName).attr("RegStr");
	var Message = $('#'+elementName).attr("Message");
	//通用类型
	if (RegStr==undefined) RegStr="";
	if (RegStr=='URL') RegStr="^((https|http|ftp|rtsp|mms)?://)?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?(([0-9]{1,3}\.){3}[0-9]{1,3}|([0-9a-z_!~*'()-]+\.)*([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\.[a-z]{2,6})(:[0-9]{1,4})?((/?)|(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
	if (RegStr=='PHONE') RegStr="^(([0]\\d{2,3}-)?(0\\d{2,3})-)?(\\d{7,8})(-(\\d{3,}))?$";
	if (RegStr=='MOBILE') RegStr="^(((13|15|18)\\d{9})|(14\\d{9}))$";
	if (RegStr=='EMAIL') RegStr="^(-|\\.|\\w)+\\@((-|\\w)+\\.)+[A-Za-z]{2,}$";
	if (RegStr=='DATE') RegStr="((^((1[8-9]\\d{2})|([2-9]\d{3}))([-\\/\\._])(10|12|0?[13578])([-\\/\\._])(3[01]|[12][0-9]|0?[1-9])$)|(^((1[8-9]\\d{2})|([2-9]\\d{3}))([-\\/\\._])(11|0?[469])([-\\/\\._])(30|[12][0-9]|0?[1-9])$)|(^((1[8-9]\\d{2})|([2-9]\\d{3}))([-\\/\\._])(0?2)([-\\/\\._])(2[0-8]|1[0-9]|0?[1-9])$)|(^([2468][048]00)([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([3579][26]00)([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([1][89][0][48])([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([2-9][0-9][0][48])([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([1][89][2468][048])([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([2-9][0-9][2468][048])([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([1][89][13579][26])([-\\/\\._])(0?2)([-\\/\\._])(29)$)|(^([2-9][0-9][13579][26])([-\\/\\._])(0?2)([-\\/\\._])(29)$))";
	if (RegStr=='USERNAME') RegStr="^[a-zA-Z\\d]{6,16}$";
	if (RegStr=='PASSWORD') RegStr="^[\\w*\\_*]{6,16}$";

	if(form && elem && tip){
		if (Required=="required"){
			if (RegStr==""){
		      	if(elem.value==""){
					hasErr = true;
					tip.innerHTML = Message;
					tip.style.display = "inline-block";
			  	}else{
					tip.style.display = "none";
			  	}
			}else{
				reg = new RegExp(RegStr);
		      	if(!reg.test(elem.value)){
					hasErr = true;
					tip.innerHTML = Message;
					tip.style.display = "inline-block";
			  	}else{
					tip.style.display = "none";
			  	}
			}
		}else{
			if (RegStr==""){
				tip.style.display = "none";
			}else{
				reg = new RegExp(RegStr);
		      	if(elem.value!='' && !reg.test(elem.value)){
					hasErr = true;
					tip.innerHTML = Message;
					tip.style.display = "inline-block";
			  	}else{
					tip.style.display = "none";
			  	}
			}
		}
	}
	return hasErr;
}
//验证日期合法性（未完成）
function checkDate(formName, elementName, errTipName, errMessage){
    var hasErr = false;
    var form = document.getElementById(formName);
	var elem = document.getElementById(elementName);
	var tip = document.getElementById(errTipName);
	if(form && elem && tip && errMessage){
      if(elem.value==-1){
		hasErr = true;
		tip.innerHTML = errMessage;
		tip.style.display = "inline-block";
	  }else{
		tip.style.display = "none";
	  }
	}
	return hasErr;
}
