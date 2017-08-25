if(typeof RD_AnimPopup=="undefined"||!RD_AnimPopup) var RD_AnimPopup={};
RD_AnimPopup = {
			getCurrentStyle : function(e,s){//read only
    			var retVal;
    			if(e.currentStyle) retVal=e.currentStyle[s];//IE
				else if(document.defaultView&&document.defaultView.getComputedStyle) retVal=document.defaultView.getComputedStyle(e,null).getPropertyValue(this.dashify(s));//Mozilla
				else retVal=null;//Safari
    			return retVal;
			},
			dashify : function(str){
    			return str.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase();
			},
			getLocalOffset : function(offset,direction){//direction: Top Left
				var y=offset['offset'+direction];
    			var div;
    			try{div=offset.offsetParent;}
				catch(ex){return y;}
    			while(div&&RD_MENU.Dom.getCurrentStyle(div,'position')=='static'){
        			y+=div['offset'+direction];
        			try{div=div.offsetParent;}
					catch(ex){return y;}
    			}
    			return y;
			},
			myAttachEvent : function(d,e,f){
				try {
					if(d.attachEvent) d.attachEvent("on"+e,f);
					else if(d.addEventListener) d.addEventListener(e,f,false);
					else{
						var oldF = eval('d.on'+e);
						if(typeof oldF!='function') eval('d.on'+e+'=f');
						else eval('d.on'+e)=function(){oldF();f();}
					}
				}
				catch (error){}
			}
};

function animPopupDiv_init(d,dir,anyIter,anyTime){
	var anim = document.getElementById(d)||null;
	if(anim!=null){
		anim.div = document.getElementById(d+'_Popup')||null;
		anim.aDiv = document.getElementById(d+'_Anim')||null;
		anim.d = dir;
		anim.AnyIter = anyIter;
		anim.AnyTime = anyTime;
		anim.timer = null;
		anim.timerHide = null;
		anim.curIter = null;
		anim.status = 'off';
		anim.width = parseFloat(anim.div.offsetWidth);
		anim.height = parseFloat(anim.div.offsetHeight);
		
		anim.trigW = parseFloat(anim.offsetWidth);
		anim.trigH = parseFloat(anim.offsetHeight);
		
		initStatus(anim);
		
		anim.onmouseover = function(e){
			anim.className = anim.className.replace('out','over');
			animPopupDiv_popup(anim,true);
			stopHide(anim);
		}
		anim.onmouseout = function(e){
			anim.className = anim.className.replace('over','out');
			startHide(anim);
		}
		anim.div.onmouseover = function(e){
			/*if(window.event) window.event.cancelBubble = true;
			else if(e.stopPropagation) e.stopPropagation();*/
			anim.className = anim.className.replace('out','over');
			stopHide(anim);
		}
		anim.div.onmouseout = function(e){
			/*if(window.event) window.event.cancelBubble = true;
			else if(e.stopPropagation) e.stopPropagation();*/
			anim.className = anim.className.replace('over','out');
			startHide(anim);
		}
		anim.aDiv.onmouseover = function(e){
			stopHide(anim);
		}
		anim.aDiv.onmouseout = function(e){
			startHide(anim);
		}
		//RD_AnimPopup.myAttachEvent(window,'resize',function(){initStatus(anim);});
		if(!document.all) RD_AnimPopup.myAttachEvent(window,'load',function(){initStatus(anim);});
	}
}

function initStatus(anim){
	var trigX = RD_AnimPopup.getLocalOffset(anim,'Left');
	var trigY = RD_AnimPopup.getLocalOffset(anim,'Top');
	if(anim.d=='left'){
			anim.div.style.left = trigX + 'px';
			anim.div.style.top = trigY + anim.trigH + 'px';
			anim.div.style.visibility = 'hidden';
			anim.aDiv.style.left = trigX + 'px';
			anim.aDiv.style.top = trigY + anim.trigH + 'px';
			anim.aDiv.style.width = '0px';
			anim.aDiv.style.height = '0px';
			anim.aDiv.style.visibility = 'hidden';
		}
		else if(anim.d=='right'){
			anim.startX = trigX + anim.trigW;
			anim.div.style.left = anim.startX - anim.width + 'px';
			anim.div.style.top = trigY + anim.trigH + 'px';
			anim.div.style.visibility = 'hidden';
			anim.aDiv.style.left = anim.startX + 'px';
			anim.aDiv.style.top = trigY + anim.trigH + 'px';
			anim.aDiv.style.width = '0px';
			anim.aDiv.style.height = '0px';
			anim.aDiv.style.visibility = 'hidden';
		}
		if(anim.currentStyle && navigator.userAgent.indexOf("MSIE 7") == -1){//ie6
			if(!anim.shim){
				anim.shim = document.createElement('iframe');
				anim.shim.src = 'javascript:""';
            	anim.shim.frameBorder = '0';
            	anim.shim.scrolling = 'no';
            	anim.shim.className = 'iframeShim';
            	anim.shim.style.zIndex = Math.min(anim.div.currentStyle.zIndex,anim.aDiv.currentStyle.zIndex) - 1;
				anim.shim.style.position = 'absolute';
				anim.shim.style.visibility = 'hidden';
				anim.div.parentNode.appendChild(anim.shim);
			}
			if(anim.shim){
				anim.shim.style.left = RD_AnimPopup.getCurrentStyle(anim.div,'left');
				anim.shim.style.top = RD_AnimPopup.getCurrentStyle(anim.div,'top');
				anim.shim.style.width = RD_AnimPopup.getCurrentStyle(anim.div,'width');
				anim.shim.style.height = RD_AnimPopup.getCurrentStyle(anim.div,'height');
			}
		}
}

function stopHide(anim){
	if(anim.timerHide!=null){
		clearTimeout(anim.timerHide);
		anim.timerHide = null;
	}
}

function startHide(anim){
	if(anim.timerHide==null) anim.timerHide = setTimeout(function(){animPopupDiv_popup(anim,false)},100);
}

function animPopupDiv_popup(anim,flag){
	if(anim.status==(flag?'on':'off')) return;
	if(flag) initStatus(anim);
	animPopupDiv_animateStart(anim,flag);
}

function animPopupDiv_animateStart(anim,flag){
	if(anim.timer!=null){
		clearTimeout(anim.timer);
		anim.timer = null;
	}
	if(anim.status!='active'){
		anim.status = 'active';
		anim.div.style.visibility = 'hidden';
		anim.aDiv.style.visibility = 'visible';
		if(anim.shim) anim.shim.style.visibility = 'hidden';
	}
	if(anim.curIter==null) anim.curIter = 0;
	if(anim.curIter>=0&&anim.curIter<=anim.AnyIter){
		var per = anim.curIter*(95/anim.AnyIter)+5;
		anim.aDiv.style.width = anim.width*per/100 + 'px';
		anim.aDiv.style.height = anim.height*per/100 + 'px';
		if(anim.shim){
			anim.shim.style.width = parseFloat(anim.aDiv.style.width)+'px';
			anim.shim.style.height = parseFloat(anim.aDiv.style.height)+'px';
		}
		if(anim.d=='right'){
			anim.aDiv.style.left = anim.startX - parseFloat(anim.aDiv.style.width) + 'px';
		}
		var timeout = per==100?0:anim.AnyTime-anim.AnyTime/anim.AnyIter*anim.curIter;
		anim.curIter += flag?1:-1;
		if(anim.curIter<0 || anim.curIter>anim.AnyIter){
			anim.curIter = anim.curIter<1?0:anim.AnyIter;
			anim.status = anim.curIter==anim.AnyIter?'on':'off';
			anim.div.style.visibility = anim.status=='on'?'visible':'hidden';
			anim.aDiv.style.visibility = 'hidden';
			if(anim.shim) anim.shim.style.visibility = anim.div.style.visibility;
		}
		else anim.timer = setTimeout(function(){animPopupDiv_animateStart(anim,flag)},timeout);
	}
}