if(typeof RD_MENU=="undefined"||!RD_MENU) var RD_MENU={};
RD_MENU.Dom = {
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
RD_MENU.html = document.getElementById('RD_menu')||null;
if(RD_MENU.html!=null){
	RD_MENU.fnInit = function(){
		var s = this;
		s.menuItemLI = [];
		s.menuItem_subItemDiv = [];
		s.menuItem = [];

		function rdMenuItem(li,div){
			this.trigger = li;
			this.submenu_dCon = div;
			var ss = this;
			this.submenu_dCon.onmouseover = function(e){
				/*if(window.event) window.event.cancelBubble = true;
				else if(e.stopPropagation) e.stopPropagation();*/
				ss.stopHideCon();
				ss.trigger.className = ss.trigger.className.replace('out','over');
			}
			this.submenu_dCon.onmouseout = function(e){
				/*if(window.event) window.event.cancelBubble = true;
				else if(e.stopPropagation) e.stopPropagation();*/
				ss.startHideCon();
				ss.trigger.className = ss.trigger.className.replace('over','out');
			}
			/*var li = this.submenu_dCon.getElementsByTagName('li'),i;
			for(i=0;li[i];i++){
				li[i].onmouseover = function(e){
					this.className = this.className.replace('out','over');
				}
				li[i].onmouseout = function(e){
					this.className = this.className.replace('over','out');
				}
			}*/
			this.submenuW = parseFloat(this.submenu_dCon.offsetWidth);
			this.submenuH = parseFloat(this.submenu_dCon.offsetHeight);
			this.initPosition();
			this.timer = null;//for scroll
			this.timerHide = null;
		}
		rdMenuItem.prototype = {
			initPosition : function(){
				this.submenu_dCon.style.visibility = 'hidden';
				this.status = 'off';
				var x = parseInt(RD_MENU.Dom.getLocalOffset(this.trigger,'Left'))-1;
				var y = parseInt(RD_MENU.Dom.getLocalOffset(this.trigger,'Top'))+parseInt(this.trigger.offsetHeight);
				this.submenu_dCon.style.left = x + 'px';
				this.submenu_dCon.style.top = y + 'px';
				if(this.submenu_dCon.currentStyle && navigator.userAgent.indexOf("MSIE 7") == -1){//ie6
					if(!this.divShim){
						this.divShim = document.createElement('iframe');
						this.divShim.src = 'javascript:""';
            			this.divShim.frameBorder = '0';
            			this.divShim.scrolling = 'no';
            			this.divShim.className = 'iframeShim';
            			this.divShim.style.zIndex = this.submenu_dCon.currentStyle.zIndex - 1;
						this.divShim.style.position = 'absolute';
						this.divShim.style.visibility = 'hidden';
						this.divShim.style.width = this.submenu_dCon.offsetWidth + 'px';//RD_MENU.Dom.getCurrentStyle(this.submenu_dCon,'width');
						this.divShim.style.height = this.submenu_dCon.offsetHeight + 'px';//RD_MENU.Dom.getCurrentStyle(this.submenu_dCon,'height');
						this.submenu_dCon.parentNode.appendChild(this.divShim);
					}
					if(this.divShim){
						this.divShim.style.left = this.submenu_dCon.currentStyle.left;
						this.divShim.style.top = this.submenu_dCon.currentStyle.top;
					}
				}
			},
			popupMenu : function(flag){
				if(this.status==(flag?'on':'off')) return;
				if(flag){
					this.submenu_dCon.style.visibility = 'visible';
					if(this.divShim) this.divShim.style.visibility = 'visible';
					this.status = 'on';
				}
				else{
					this.submenu_dCon.style.visibility = 'hidden';
					if(this.divShim) this.divShim.style.visibility = 'hidden';
					this.status = 'off';
				}
			},
			stopHideCon : function(){
				if(this.timerHide!=null){
					clearTimeout(this.timerHide);
					this.timerHide = null;
				}
			},
			startHideCon : function(){
				var ss = this;
				if(this.timerHide==null) this.timerHide = setTimeout(function(){ss.popupMenu(false)},100);
			}
		}
		function _d_mouse(menuIndex){
			var li = s.menuItemLI[menuIndex];
			var div = s.menuItem_subItemDiv[menuIndex];
			if(!(li.id in s.menuItem)) s.menuItem[li.id] = new rdMenuItem(li,div);
			if(li.id in s.menuItem){
				var menu = s.menuItem[li.id];
				li.onmouseover = function(e){
					this.className = this.className.replace('out','over');
					for(var i in s.menuItem) if(s.menuItem[i].popupMenu) s.menuItem[i].popupMenu(false);
					menu.initPosition();
					menu.popupMenu(true);
					menu.stopHideCon();
				}
				li.onmouseout = function(e){
					this.className = this.className.replace('over','out');
					menu.startHideCon();
				}
				var aTags = li.getElementsByTagName('a');
				for(var i=0;aTags[i];i++) aTags[i].onfocus = function(e){this.blur();};
			}
		}
		var i,div;
		var menuItemAll = s.html.getElementsByTagName('li');
		for(i=0;menuItemAll[i];i++){
			menuItemAll[i].onmouseover = function(e){
				this.className = this.className.replace('out','over');
			};
			menuItemAll[i].onmouseout = function(e){
				this.className = this.className.replace('over','out');
			};
			div = document.getElementById(menuItemAll[i].id+'_subMenu')||null;//menuItemAll[i].getElementsByTagName('div')[0]||null;
			if(div!=null && div.className=='RD_subMenu_outer'){
				s.menuItemLI[s.menuItemLI.length] = menuItemAll[i];
				s.menuItem_subItemDiv[s.menuItem_subItemDiv.length] = div;
				new _d_mouse(s.menuItemLI.length-1);
			}
		}
		function fnResizeWin(){
			for(var i in s.menuItem) s.menuItem[i].initPosition();
		}
		//RD_MENU.Dom.myAttachEvent(window,'resize',fnResizeWin);
		if(!document.all) RD_MENU.Dom.myAttachEvent(window,'load',fnResizeWin);
	};
	RD_MENU.fnInit();
}